<?php
/**
 * YottaSrc Dashboard — Service Details (VPS Command Center)
 * ==========================================================
 * Tab-based layout with ALL VPS functions.
 * Hero status bar → Tabs (Overview, Network, Bandwidth, Reinstall, Billing, Upgrade) → Sticky control panel
 */

$page_title = null;
$breadcrumbs_data = null;
$nav_active_override = 'services';

require_once __DIR__ . '/../../layouts/config.php';

$page_title = __('services_detail_title') . ' — ' . SITE_NAME;
$breadcrumbs_data = [
    ['label' => __('nav_dashboard'), 'url' => DASH_BASE_PATH . '/'],
    ['label' => __('nav_my_services'), 'url' => DASH_BASE_PATH . '/pages/services/index.php'],
    ['label' => '#' . ($_GET['id'] ?? '151926'), 'url' => null],
];

require_once __DIR__ . '/../../layouts/shell.php';

/* ══════════════════════════════════════════════════════════════════════
   ███  SERVICE DETAILS  ·  TYPE ROUTER                              ███
   ══════════════════════════════════════════════════════════════════════
   Different service types need very different detail pages. We look up
   the service by id, detect its type, and dispatch to the right partial:
     • cpanel   → partials/cpanel.php     (cPanel single-site hosting)
     • reseller → partials/reseller.php   (Reseller / WHM)
     • keys     → partials/keys.php       (Microsoft keys — minimal)
     • vps      → (fall through to the VPS detail below)

   BACKEND: replace $__service_type_map with a DB lookup by id.
   ══════════════════════════════════════════════════════════════════════ */
$__svc_id          = $_GET['id'] ?? '151926';
$__service_type_map = [
    '153785' => 'cpanel',
    '154330' => 'reseller',
    '154331' => 'keys',
    '1027'   => 'keys',
    '1041'   => 'cpanel',
    '1035'   => 'reseller',
    '1032'   => 'cpanel',
    '151926' => 'vps',
    '151820' => 'vps',
    '1020'   => 'vps',
    '1024'   => 'cpanel',
];
$__svc_type = $__service_type_map[(string)$__svc_id] ?? 'vps';

if ($__svc_type !== 'vps') {
    include __DIR__ . '/partials/' . $__svc_type . '.php';
    require_once __DIR__ . '/../../layouts/footer.php';
    return;
}

/* ══════════════════════════════════════════════════════════════════════
   ███  VPS SERVICE DETAILS  ·  MOCK DATA BLOCK                      ███
   ══════════════════════════════════════════════════════════════════════
   BACKEND TEAM — PLEASE READ:

   This page shows one VPS/server service (tabs: Overview, Network,
   Bandwidth, Reinstall, Billing, Upgrade). Every number, credential,
   IP, chart, and package is driven from the arrays below.

   Wiring real data:
     • Look up service by id (from URL) and populate $service, $network,
       $bandwidth, $linked_invoices.
     • $os_list comes from your provisioning platform — mark ONE row
       with 'current' => true (the OS currently installed).
     • $packages is the upgrade catalog — filter on the backend to
       exclude the current plan.
   ══════════════════════════════════════════════════════════════════════ */

/* ──────────────────────────────────────────
   PAGE STATE
   ──────────────────────────────────────────
   'active' | 'loading' | 'error'
   ────────────────────────────────────────── */
$page_state = $_GET['state'] ?? 'active';

/* ──────────────────────────────────────────
   SERVICE (hero bar + specs strip + billing tab)
   ──────────────────────────────────────────
   • id             → service id (from URL)
   • name / type    → display names
   • hostname/ip    → connection info
   • username/password → credentials (password is blurred in UI)
   • status         → 'active' | 'suspended' | 'terminated'
   • location_flag  → ISO country code (for flag-icons lib)
   • plan / cycle   → plan name + billing cycle
   • amount         → per-cycle price (float)
   • currency       → ISO code (e.g. 'EUR')
   • due_date       → next renewal date (dd/mm/yyyy)
   • created        → activation date    (dd/mm/yyyy)
   • days_left      → days until next due (drives progress)
   • days_total     → length of cycle in days
   • cpu/ram/disk   → spec strings (shown verbatim)
   • bw_total/speed → bandwidth quota + link speed
   • ipv6           → bool; shows ✓ / ✗ in specs strip
   ────────────────────────────────────────── */
$service = [
    'id'            => 151926,
    'name'          => 'Linux VPS/VDS',
    'type'          => 'VPS YTA 1 Package',
    'hostname'      => 'YTA6686328',
    'ip'            => '107.161.168.236',
    'username'      => 'root',
    'password'      => '99P7aSTnZ#Vn',
    'status'        => 'active',
    'location'      => 'United States',
    'location_flag' => 'us',
    'plan'          => 'VPS YTA 1',
    'cycle'         => '1 Month',
    'amount'        => 3.25,
    'currency'      => 'EUR',
    'due_date'      => '24/04/2026',
    'created'       => '24/03/2026',
    'days_left'     => 23,
    'days_total'    => 30,
    'cpu'           => '1 Core', 'cpu_arch'  => 'x86',
    'ram'           => '2 GB',   'ram_type'  => 'DDR4',
    'disk'          => '25 GB',  'disk_type' => 'NVMe',
    'bw_used'       => '0',      'bw_total'  => '25 TB',
    'bw_speed'      => '1 Gbit/s',
    'ipv6'          => true,
];

/* ──────────────────────────────────────────
   NETWORK TAB — attached IPs
   ──────────────────────────────────────────
   • num       → row number
   • ip        → full address (IPv4 or IPv6 w/ mask)
   • protocol  → 'IPv4' | 'IPv6'
   • main      → bool; true = primary IP (shows "Change IP" button)
   ────────────────────────────────────────── */
$network = [
    ['num' => 1, 'ip' => '107.161.168.236',            'protocol' => 'IPv4', 'main' => true],
    ['num' => 2, 'ip' => '2a12:bec4:1b79:b68::1/64',   'protocol' => 'IPv6', 'main' => false],
];

/* ──────────────────────────────────────────
   BANDWIDTH TAB — usage meter
   ──────────────────────────────────────────
   • used    → used amount in GB
   • total   → quota in GB
   • percent → rounded %; drives the progress bar width
   ────────────────────────────────────────── */
$bandwidth = [
    'used'    => 3200,
    'total'   => 25600,
    'percent' => 12,
];

/* ──────────────────────────────────────────
   BILLING TAB — invoices linked to this service
   ──────────────────────────────────────────
   Each row matches the invoice list schema:
     id, date, due, amount, status, type
   ────────────────────────────────────────── */
$linked_invoices = [
    ['id' => 310630, 'date' => '03/04/2026', 'due' => '05/04/2026', 'amount' => 3.42, 'status' => 'unpaid', 'type' => 'renewal'],
    ['id' => 307776, 'date' => '24/03/2026', 'due' => '24/03/2026', 'amount' => 3.42, 'status' => 'paid',   'type' => 'new_service'],
];

/* ──────────────────────────────────────────
   REINSTALL TAB — OS picker
   ──────────────────────────────────────────
   Mark the current OS with 'current' => true so it's pre-selected
   and shown with a checkmark.
   ────────────────────────────────────────── */
$os_list = [
    ['name' => 'Ubuntu 24.04'], ['name' => 'Ubuntu 22.04', 'current' => true], ['name' => 'Ubuntu 20.04'], ['name' => 'Ubuntu 18.04'],
    ['name' => 'Rocky Linux 9'], ['name' => 'Rocky Linux 8'], ['name' => 'Rocky Linux 10'], ['name' => 'Debian 9'],
    ['name' => 'Debian 8'], ['name' => 'Debian 12'], ['name' => 'Debian 11'], ['name' => 'Debian 10'],
    ['name' => 'CentOS Stream 9'], ['name' => 'CentOS Stream 8'], ['name' => 'CentOS 7'],
    ['name' => 'AlmaLinux 9'], ['name' => 'AlmaLinux 8'], ['name' => 'AlmaLinux 10'],
];

/* ──────────────────────────────────────────
   UPGRADE TAB — package catalog
   ──────────────────────────────────────────
   Each row:
   • name        → package display name
   • price       → pro-rated price until next renewal (float)
   • full_price  → full monthly price shown as "original"
   • save        → discount label (shown as a tag)
   • days        → days remaining in current cycle (pro-rate basis)
   • specs       → array of 4 spec strings: [CPU, RAM, Disk, BW]
   ────────────────────────────────────────── */
$packages = [
    ['name' => 'VPS YTA 2', 'price' => 1.41,  'full_price' => 5.15,  'save' => '10%', 'days' => 23, 'specs' => ['2 Core',  '4 GB',  '50 GB',  '25 TB']],
    ['name' => 'VPS YTA 3', 'price' => 4.26,  'full_price' => 8.99,  'save' => '40%', 'days' => 23, 'specs' => ['4 Core',  '8 GB',  '100 GB', '30 TB']],
    ['name' => 'VPS YTA 4', 'price' => 9.45,  'full_price' => 15.99, 'save' => '20%', 'days' => 23, 'specs' => ['8 Core',  '16 GB', '150 GB', '35 TB']],
    ['name' => 'VPS YTA 5', 'price' => 19.10, 'full_price' => 29.00, 'save' => '15%', 'days' => 23, 'specs' => ['16 Core', '32 GB', '200 GB', '35 TB']],
];

/* ══════════════  END OF MOCK DATA  ══════════════ */
?>

<?php if ($page_state === 'error'): ?>
    <?php $ph_title = '#' . e($service['id']); $ph_desc = ''; $ph_actions = ''; include __DIR__ . '/../../components/page-header.php'; ?>
    <div class="db-card"><?php $error_retry = true; include __DIR__ . '/../../components/error-state.php'; ?></div>
<?php elseif ($page_state === 'loading'): ?>
    <?php $ph_title = '#' . e($service['id']); $ph_desc = ''; $ph_actions = ''; include __DIR__ . '/../../components/page-header.php'; ?>
    <!-- Hero status bar + action buttons -->
    <?php $skel_hero_meta_chips = 3; $skel_hero_actions = 3; include __DIR__ . '/../../components/skeleton-hero.php'; ?>
    <!-- Tab bar (Overview, Network, Bandwidth, Reinstall, Billing, Upgrade) + 2-col body -->
    <?php $skel_tcol_tabs = 6; $skel_tcol_rows = 8; $skel_tcol_side_btns = 5; $skel_tcol_side_info = 5;
          include __DIR__ . '/../../components/skeleton-two-col.php'; ?>
<?php else: ?>

<!-- ═══ HERO STATUS BAR ═══ -->
<div class="db-srv-hero db-srv-hero--<?php echo e($service['status']); ?>">
    <div class="db-srv-hero__left">
        <div class="db-srv-hero__status">
            <span class="db-srv-hero__dot"></span>
            <span class="db-srv-hero__status-text"><?php echo e(__('services_server_' . $service['status'])); ?></span>
        </div>
        <div class="db-srv-hero__details">
            <span class="db-srv-hero__name">#<?php echo e($service['id']); ?> <?php echo e($service['name']); ?> <button class="db-srv-hero__edit" onclick="DashToast.show('info','','Rename coming soon.')" title="Edit name"><i class="fas fa-pen"></i></button></span>
            <span class="db-srv-hero__sep">·</span>
            <span><?php echo e($service['type']); ?></span>
            <span class="db-srv-hero__sep">·</span>
            <span><span class="fi fi-<?php echo e($service['location_flag']); ?> db-flag-chip"></span> <?php echo e($service['location']); ?></span>
        </div>
    </div>
    <div class="db-srv-hero__actions">
        <button class="db-btn db-btn--ghost db-btn--sm" onclick="DashCopy(null,'<?php echo e($service['ip']); ?>')" data-tooltip="Copy IP"><i class="fas fa-copy"></i> <?php echo e($service['ip']); ?></button>
        <button class="db-btn db-btn--ghost db-btn--sm" onclick="DashToast.show('info','','Opening SSH...')" data-tooltip="SSH"><i class="fas fa-terminal"></i></button>
        <button class="db-btn db-btn--ghost db-btn--sm" onclick="DashToast.show('info','','Restarting...')" data-tooltip="Restart"><i class="fas fa-rotate-right"></i></button>
    </div>
</div>

<!-- ═══ MAIN LAYOUT ═══ -->
<div class="db-detail-layout">
    <!-- LEFT: Tabbed Content -->
    <div>
        <!-- TABS — unified pill-style (matches server-details / domain-details) -->
        <div class="db-tab-bar" data-tab-bar data-tab-content="#svcTabs">
            <button type="button" class="db-tab-bar__btn is-active" data-tab-target="overview"><i class="fas fa-table-cells"></i> <?php echo e(__('services_tab_overview')); ?></button>
            <button type="button" class="db-tab-bar__btn" data-tab-target="network"><i class="fas fa-globe"></i> <?php echo e(__('services_tab_network')); ?></button>
            <button type="button" class="db-tab-bar__btn" data-tab-target="bandwidth"><i class="fas fa-chart-area"></i> <?php echo e(__('services_tab_bandwidth')); ?></button>
            <button type="button" class="db-tab-bar__btn" data-tab-target="reinstall"><i class="fas fa-rotate"></i> <?php echo e(__('services_tab_reinstall')); ?></button>
            <button type="button" class="db-tab-bar__btn" data-tab-target="billing"><i class="fas fa-file-invoice"></i> <?php echo e(__('services_tab_billing')); ?></button>
            <button type="button" class="db-tab-bar__btn" data-tab-target="upgrade"><i class="fas fa-arrow-up-arrow-down"></i> <?php echo e(__('services_tab_upgrade')); ?></button>
        </div>

        <div class="db-card" id="svcTabs">
            <!-- TAB: Overview -->
            <div class="db-tab-pane is-active" data-tab-pane="overview">
                <div class="db-card-body">
                    <!-- Server Access -->
                    <h3 class="db-section-title"><i class="fas fa-server"></i> <?php echo e(__('services_section_info')); ?></h3>
                    <div class="db-srv-summary db-srv-section">
                        <div class="db-srv-summary__item">
                            <i class="fas fa-display"></i>
                            <div><span class="db-srv-summary__label"><?php echo e(__('services_info_hostname')); ?></span><span class="db-srv-summary__value db-srv-summary__value--copy" onclick="DashCopy(this,'<?php echo e($service['hostname']); ?>')"><?php echo e($service['hostname']); ?> <i class="fas fa-copy"></i></span></div>
                        </div>
                        <div class="db-srv-summary__item">
                            <i class="fas fa-user"></i>
                            <div><span class="db-srv-summary__label"><?php echo e(__('services_info_username')); ?></span><span class="db-srv-summary__value db-srv-summary__value--copy" onclick="DashCopy(this,'<?php echo e($service['username']); ?>')"><?php echo e($service['username']); ?> <i class="fas fa-copy"></i></span></div>
                        </div>
                        <div class="db-srv-summary__item">
                            <i class="fas fa-key"></i>
                            <div><span class="db-srv-summary__label"><?php echo e(__('services_info_password')); ?></span><span class="db-srv-summary__value db-srv-summary__value--blur db-srv-summary__value--copy" onclick="this.classList.toggle('revealed'); DashCopy(this,'<?php echo e($service['password']); ?>')"><?php echo e($service['password']); ?> <i class="fas fa-copy"></i></span></div>
                        </div>
                        <div class="db-srv-summary__item">
                            <i class="fas fa-globe"></i>
                            <div><span class="db-srv-summary__label">IPv4</span><span class="db-srv-summary__value db-srv-summary__value--copy" onclick="DashCopy(this,'<?php echo e($service['ip']); ?>')"><?php echo e($service['ip']); ?> <i class="fas fa-copy"></i></span></div>
                        </div>
                    </div>

                    <!-- Specifications & Status -->
                    <h3 class="db-section-title"><i class="fas fa-circle-check"></i> <?php echo e(__('services_section_specs_status')); ?></h3>
                    <div class="db-srv-specs db-srv-section">
                        <div class="db-srv-spec"><div class="db-srv-spec__value db-srv-spec__value--active"><?php echo e(__('status_' . $service['status'])); ?></div><div class="db-srv-spec__label"><?php echo e(__('common_status')); ?></div></div>
                        <div class="db-srv-spec__divider"></div>
                        <div class="db-srv-spec"><div class="db-srv-spec__value db-srv-spec__value--with-icon"><span class="fi fi-<?php echo e($service['location_flag']); ?> db-flag-chip db-flag-chip--lg"></span><?php echo e($service['location']); ?></div><div class="db-srv-spec__label"><?php echo e(__('services_info_location')); ?></div></div>
                        <div class="db-srv-spec__divider"></div>
                        <div class="db-srv-spec"><div class="db-srv-spec__value"><?php echo e($service['cycle']); ?></div><div class="db-srv-spec__label"><?php echo e(__('services_info_cycle')); ?></div></div>
                        <div class="db-srv-spec__divider"></div>
                        <div class="db-srv-spec"><div class="db-srv-spec__value"><?php echo format_money($service['amount']); ?></div><div class="db-srv-spec__label"><?php echo e(__('services_billing_renewal_price')); ?></div></div>
                        <div class="db-srv-spec__divider"></div>
                        <div class="db-srv-spec"><div class="db-srv-spec__value"><?php echo e($service['due_date']); ?></div><div class="db-srv-spec__label"><?php echo e(__('services_info_next_due')); ?></div></div>
                    </div>

                    <!-- Package Specifications -->
                    <h3 class="db-section-title"><i class="fas fa-microchip"></i> <?php echo e(__('services_section_package')); ?></h3>
                    <div class="db-srv-specs">
                        <div class="db-srv-spec"><div class="db-srv-spec__value"><?php echo e($service['cpu']); ?></div><div class="db-srv-spec__label">CPU <span><?php echo e($service['cpu_arch']); ?></span></div></div>
                        <div class="db-srv-spec__divider"></div>
                        <div class="db-srv-spec"><div class="db-srv-spec__value"><?php echo e($service['ram']); ?></div><div class="db-srv-spec__label">RAM <span><?php echo e($service['ram_type']); ?></span></div></div>
                        <div class="db-srv-spec__divider"></div>
                        <div class="db-srv-spec"><div class="db-srv-spec__value"><?php echo e($service['disk']); ?></div><div class="db-srv-spec__label">SSD <span><?php echo e($service['disk_type']); ?></span></div></div>
                        <div class="db-srv-spec__divider"></div>
                        <div class="db-srv-spec"><div class="db-srv-spec__value"><?php echo e($service['bw_total']); ?></div><div class="db-srv-spec__label">BW <span><?php echo e($service['bw_speed']); ?></span></div></div>
                        <div class="db-srv-spec__divider"></div>
                        <div class="db-srv-spec"><div class="db-srv-spec__value"><?php echo $service['ipv6'] ? '✓' : '✗'; ?></div><div class="db-srv-spec__label">IPv6</div></div>
                    </div>

                    <!-- ═══ Tutorials collapsible section ═══ -->
                    <h3 class="db-section-title db-section-title--spaced"><i class="fas fa-graduation-cap"></i> <?php echo e(__('services_tutorials_title')); ?></h3>
                    <div class="db-srv-tutorials">
                        <details class="db-srv-tutorial">
                            <summary>
                                <span class="db-srv-tutorial__icon"><i class="fas fa-terminal"></i></span>
                                <span class="db-srv-tutorial__q"><?php echo e(__('services_tutorial_q1')); ?></span>
                                <i class="fas fa-chevron-down db-srv-tutorial__arrow"></i>
                            </summary>
                            <div class="db-srv-tutorial__body">
                                <p><?php echo e(__('services_tutorial_a1')); ?></p>
                            </div>
                        </details>
                        <details class="db-srv-tutorial">
                            <summary>
                                <span class="db-srv-tutorial__icon"><i class="fas fa-key"></i></span>
                                <span class="db-srv-tutorial__q"><?php echo e(__('services_tutorial_q2')); ?></span>
                                <i class="fas fa-chevron-down db-srv-tutorial__arrow"></i>
                            </summary>
                            <div class="db-srv-tutorial__body">
                                <p><?php echo e(__('services_tutorial_a2')); ?></p>
                            </div>
                        </details>
                        <details class="db-srv-tutorial">
                            <summary>
                                <span class="db-srv-tutorial__icon"><i class="fas fa-clock-rotate-left"></i></span>
                                <span class="db-srv-tutorial__q"><?php echo e(__('services_tutorial_q3')); ?></span>
                                <i class="fas fa-chevron-down db-srv-tutorial__arrow"></i>
                            </summary>
                            <div class="db-srv-tutorial__body">
                                <p><?php echo e(__('services_tutorial_a3')); ?></p>
                            </div>
                        </details>
                        <details class="db-srv-tutorial">
                            <summary>
                                <span class="db-srv-tutorial__icon"><i class="fas fa-circle-question"></i></span>
                                <span class="db-srv-tutorial__q"><?php echo e(__('services_tutorial_q4')); ?></span>
                                <i class="fas fa-chevron-down db-srv-tutorial__arrow"></i>
                            </summary>
                            <div class="db-srv-tutorial__body">
                                <p><?php echo __('services_tutorial_a4'); ?></p>
                            </div>
                        </details>
                    </div>
                </div>
            </div>

            <!-- TAB: Network -->
            <div class="db-tab-pane" data-tab-pane="network">
                <div class="db-card-body db-card-body--heading-only">
                    <h3 class="db-section-title"><i class="fas fa-globe"></i> <?php echo e(__('services_network_public')); ?></h3>
                </div>
                <div class="db-card-body--table">
                    <div class="db-table-wrapper">
                        <table class="db-table">
                            <thead><tr><th>#</th><th>IP</th><th><?php echo e(__('services_network_protocol')); ?></th><th></th></tr></thead>
                            <tbody>
                                <?php foreach ($network as $net): ?>
                                <tr>
                                    <td><?php echo e($net['num']); ?></td>
                                    <td><span class="db-table-cell-mono"><?php echo e($net['ip']); ?></span> <?php if ($net['main']): ?><span class="db-badge db-badge--active db-badge--inline-sm"><?php echo e(__('services_network_main')); ?></span><?php endif; ?></td>
                                    <td><span class="db-badge db-badge--<?php echo $net['protocol'] === 'IPv4' ? 'active' : 'pending'; ?>"><?php echo e($net['protocol']); ?></span></td>
                                    <td><?php if ($net['main']): ?><button class="db-btn db-btn--sm db-btn--ghost" onclick="DashToast.show('success','','<?php echo e(__('services_network_change_ip_msg')); ?>')"><i class="fas fa-pen"></i> <?php echo e(__('services_network_change_ip')); ?></button><?php endif; ?></td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="db-card-body db-card-body--notice">
                    <div class="db-notice db-notice--info"><i class="fas fa-circle-info"></i> <span><?php echo e(__('services_network_notice')); ?></span></div>
                </div>
            </div>

            <!-- TAB: Bandwidth -->
            <div class="db-tab-pane" data-tab-pane="bandwidth">
                <div class="db-card-body" >
                    <div class="db-notice db-notice--info db-notice--mb">
                        <i class="fas fa-circle-info"></i>
                        <span><?php echo e(__('services_bw_notice')); ?></span>
                    </div>

                    <h3 class="db-section-title"><i class="fas fa-chart-area"></i> <?php echo e(__('services_bw_usage_bar')); ?></h3>
                    <div class="db-srv-specs db-srv-section--tight">
                        <div class="db-srv-spec"><div class="db-srv-spec__value"><?php echo e($bandwidth['used']); ?>/<?php echo e($service['bw_total']); ?></div><div class="db-srv-spec__label"><?php echo e(__('services_bw_used')); ?></div></div>
                        <div class="db-srv-spec__divider"></div>
                        <div class="db-srv-spec"><div class="db-srv-spec__value"><?php echo $bandwidth['percent']; ?>%</div><div class="db-srv-spec__label"><?php echo e(__('services_bw_percent')); ?></div></div>
                        <div class="db-srv-spec__divider"></div>
                        <div class="db-srv-spec"><div class="db-srv-spec__value"><?php echo e($service['bw_speed']); ?></div><div class="db-srv-spec__label"><?php echo e(__('services_bw_speed')); ?></div></div>
                    </div>
                    <div class="db-progress-row">
                        <span class="db-progress-row__primary"><?php echo number_format($bandwidth['used'] / 1024, 1); ?> TB / <?php echo e($service['bw_total']); ?></span>
                        <span class="db-progress-row__secondary"><?php echo $bandwidth['percent']; ?>%</span>
                    </div>
                    <div class="db-progress-bar db-progress-bar--lg db-progress-bar--mb"><div class="db-progress-bar__fill" style="width:<?php echo $bandwidth['percent']; ?>%;"></div></div>

                    <div class="db-notice db-notice--warning db-notice--mb-lg">
                        <i class="fas fa-clock"></i>
                        <span><?php echo e(__('services_bw_reset_notice')); ?></span>
                    </div>

                    <!-- FAQ -->
                    <h3 class="db-section-title"><i class="fas fa-circle-question"></i> <?php echo e(__('services_bw_faq_title')); ?></h3>
                    <div class="db-faq-list">
                        <details class="db-faq-item">
                            <summary class="db-faq-item__q"><?php echo e(__('services_bw_faq1_q')); ?></summary>
                            <div class="db-faq-item__a"><?php echo e(__('services_bw_faq1_a')); ?></div>
                        </details>
                        <details class="db-faq-item">
                            <summary class="db-faq-item__q"><?php echo e(__('services_bw_faq2_q')); ?></summary>
                            <div class="db-faq-item__a"><?php echo e(__('services_bw_faq2_a')); ?></div>
                        </details>
                        <details class="db-faq-item">
                            <summary class="db-faq-item__q"><?php echo e(__('services_bw_faq3_q')); ?></summary>
                            <div class="db-faq-item__a"><?php echo e(__('services_bw_faq3_a')); ?></div>
                        </details>
                        <details class="db-faq-item">
                            <summary class="db-faq-item__q"><?php echo e(__('services_bw_faq4_q')); ?></summary>
                            <div class="db-faq-item__a"><?php echo e(__('services_bw_faq4_a')); ?></div>
                        </details>
                    </div>
                </div>
            </div>

            <!-- TAB: Reinstall -->
            <div class="db-tab-pane" data-tab-pane="reinstall">
                <div class="db-card-body" >
                    <h3 class="db-section-title"><i class="fas fa-rotate"></i> <?php echo e(__('services_reinstall_title')); ?></h3>
                    <div class="db-notice db-notice--info db-notice--mb-md">
                        <i class="fas fa-circle-info"></i>
                        <div>
                            <ul class="db-notice-list-ul">
                                <li><?php echo e(__('services_reinstall_note1')); ?></li>
                                <li class="db-notice-list-ul__item--danger"><?php echo e(__('services_reinstall_note2')); ?></li>
                                <li><?php echo e(__('services_reinstall_note3')); ?></li>
                            </ul>
                        </div>
                    </div>
                    <div class="db-os-grid db-os-grid--mb">
                        <?php foreach ($os_list as $os): ?>
                        <div class="db-os-card<?php echo !empty($os['current']) ? ' selected' : ''; ?>" onclick="document.querySelectorAll('.db-os-card').forEach(c=>c.classList.remove('selected')); this.classList.add('selected');">
                            <span class="db-os-card__name"><?php echo e($os['name']); ?></span>
                            <i class="fas fa-circle-check db-os-card__check"></i>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="db-reinstall-cta-wrap"><button class="db-btn db-btn--danger db-btn--sm" onclick="DashModal.open('reinstallModal')"><i class="fas fa-rotate"></i> <?php echo e(__('services_reinstall_btn')); ?></button></div>
                    <div class="db-notice db-notice--warning"><i class="fas fa-triangle-exclamation"></i> <span><?php echo e(__('services_reinstall_warning')); ?></span></div>
                </div>
            </div>

            <!-- TAB: Billing -->
            <div class="db-tab-pane" data-tab-pane="billing">
                <div class="db-card-body db-card-body--no-bottom">
                    <h3 class="db-section-title"><i class="fas fa-file-invoice"></i> <?php echo e(__('services_billing_info')); ?></h3>
                    <div class="db-srv-specs db-srv-section--tight">
                        <div class="db-srv-spec"><div class="db-srv-spec__value"><?php echo e($service['created']); ?></div><div class="db-srv-spec__label"><?php echo e(__('services_billing_reg_date')); ?></div></div>
                        <div class="db-srv-spec__divider"></div>
                        <div class="db-srv-spec"><div class="db-srv-spec__value"><?php echo e($service['cycle']); ?></div><div class="db-srv-spec__label"><?php echo e(__('services_info_cycle')); ?></div></div>
                        <div class="db-srv-spec__divider"></div>
                        <div class="db-srv-spec"><div class="db-srv-spec__value"><?php echo format_money($service['amount']); ?></div><div class="db-srv-spec__label"><?php echo e(__('services_billing_renewal_price')); ?></div></div>
                        <div class="db-srv-spec__divider"></div>
                        <div class="db-srv-spec"><div class="db-srv-spec__value"><?php echo e($service['due_date']); ?></div><div class="db-srv-spec__label"><?php echo e(__('services_info_next_due')); ?></div></div>
                    </div>
                    <?php $pct = round(($service['days_total'] - $service['days_left']) / $service['days_total'] * 100); ?>
                    <div class="db-progress-wrap">
                        <div class="db-progress-bar db-progress-bar--sm"><div class="db-progress-bar__fill" style="width:<?php echo $pct; ?>%;"></div></div>
                        <span class="db-progress-badge"><?php echo $service['days_left']; ?> <?php echo e(__('services_billing_days_left')); ?></span>
                    </div>

                    <!-- Billing Tools -->
                    <h3 class="db-section-title"><i class="fas fa-wrench"></i> <?php echo e(__('services_billing_tools')); ?></h3>
                    <div class="db-billing-tools db-billing-tools--mb">
                        <div class="db-billing-tool">
                            <div class="db-billing-tool__info"><div class="db-billing-tool__title"><?php echo e(__('services_billing_renewal_invoice')); ?></div><div class="db-billing-tool__desc"><?php echo __('services_billing_renewal_desc', ['amount' => '€' . number_format($service['amount'], 2) . ' ' . $service['currency'], 'days' => '6', 'date' => $service['due_date']]); ?></div></div>
                            <div class="db-billing-tool__action"><button class="db-btn db-btn--sm db-btn--secondary" onclick="DashToast.show('success','','<?php echo e(__('services_billing_renewal_generated')); ?>')"><?php echo e(__('services_billing_generate_renewal')); ?></button></div>
                        </div>
                        <div class="db-billing-tool">
                            <div class="db-billing-tool__info"><div class="db-billing-tool__title"><?php echo e(__('services_billing_cycle_title')); ?></div><div class="db-billing-tool__desc"><?php echo __('services_billing_cycle_desc', ['cycle' => $service['cycle'], 'date' => $service['due_date']]); ?></div></div>
                            <div class="db-billing-tool__action"><button class="db-btn db-btn--sm db-btn--secondary" onclick="DashToast.show('info','','<?php echo e(__('services_billing_cycle_change_msg')); ?>')"><?php echo e(__('services_billing_change_cycle')); ?></button></div>
                        </div>
                        <div class="db-billing-tool">
                            <div class="db-billing-tool__info"><div class="db-billing-tool__title"><?php echo e(__('services_billing_auto_renew')); ?></div><div class="db-billing-tool__desc"><?php echo __('services_billing_auto_renew_desc', ['days' => '6']); ?><br><span class="text-danger"><?php echo e(__('services_billing_auto_renew_warning')); ?></span></div></div>
                            <div class="db-billing-tool__action"><label class="db-toggle"><input type="checkbox" checked onchange="DashToast.show('success','',this.checked?'<?php echo e(__('services_billing_auto_renew_on')); ?>':'<?php echo e(__('services_billing_auto_renew_off')); ?>')"><span class="db-toggle-track"><span class="db-toggle-thumb"></span></span></label></div>
                        </div>
                        <div class="db-billing-tool">
                            <div class="db-billing-tool__info"><div class="db-billing-tool__title"><?php echo e(__('services_billing_credit_renewal')); ?></div><div class="db-billing-tool__desc"><?php echo e(__('services_billing_credit_renewal_desc')); ?></div></div>
                            <div class="db-billing-tool__action"><label class="db-toggle"><input type="checkbox" onchange="DashToast.show('success','',this.checked?'<?php echo e(__('services_billing_credit_on')); ?>':'<?php echo e(__('services_billing_credit_off')); ?>')"><span class="db-toggle-track"><span class="db-toggle-thumb"></span></span></label></div>
                        </div>
                    </div>

                    <h3 class="db-section-title"><i class="fas fa-list"></i> <?php echo e(__('services_billing_invoices_list')); ?></h3>
                </div>
                <div class="db-card-body--table">
                    <div class="db-table-wrapper">
                        <table class="db-table">
                            <thead><tr><th>#</th><th><?php echo e(__('invoices_col_date')); ?></th><th><?php echo e(__('invoices_col_due_date')); ?></th><th><?php echo e(__('invoices_col_amount')); ?></th><th><?php echo e(__('common_status')); ?></th></tr></thead>
                            <tbody>
                                <?php foreach ($linked_invoices as $inv):
                                    $is_urgent = ($inv['status'] === 'unpaid' || $inv['status'] === 'overdue');
                                ?>
                                <tr class="db-table-row-link <?php echo $is_urgent ? 'db-table-row--urgent' : ''; ?>" onclick="window.location='<?php echo DASH_BASE_PATH; ?>/pages/billing/invoice-details.php?id=<?php echo $inv['id']; ?>&status=<?php echo $inv['status']; ?>'">
                                    <td><span class="db-table-cell-link">#<?php echo e($inv['id']); ?></span></td>
                                    <td><?php echo e($inv['date']); ?></td>
                                    <td><?php echo e($inv['due']); ?></td>
                                    <td><?php echo format_money($inv['amount']); ?></td>
                                    <td><span class="db-badge db-badge--<?php echo e($inv['status']); ?>"><?php echo e(__('status_' . $inv['status'])); ?></span></td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- TAB: Upgrade -->
            <div class="db-tab-pane" data-tab-pane="upgrade">
                <div class="db-card-body" >
                    <h3 class="db-section-title"><i class="fas fa-arrow-up-arrow-down"></i> <?php echo e(__('services_tab_upgrade')); ?></h3>
                    <div class="db-notice-list">
                        <div class="db-notice db-notice--info">
                            <i class="fas fa-circle-info"></i>
                            <div>
                                <ul class="db-notice-list-ul">
                                    <li><?php echo e(__('services_upgrade_note1')); ?></li>
                                    <li><?php echo e(__('services_upgrade_note2')); ?></li>
                                    <li><?php echo e(__('services_upgrade_note3')); ?></li>
                                    <li><?php echo e(__('services_upgrade_note4')); ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="db-current-pkg"><i class="fas fa-triangle-exclamation"></i> <span><?php echo __('services_upgrade_current', ['plan' => $service['plan']]); ?></span></div>
                    <div class="db-upgrade-grid">
                        <?php foreach ($packages as $pkg): ?>
                        <div class="db-upgrade-card">
                            <?php if (!empty($pkg['save'])): ?><span class="db-upgrade-card__save"><i class="fas fa-tag"></i> <?php echo e(__('services_upgrade_save')); ?> <?php echo e($pkg['save']); ?></span><?php endif; ?>
                            <div class="db-upgrade-card__name"><?php echo e($pkg['name']); ?></div>
                            <div class="db-upgrade-card__price"><span class="db-upgrade-card__price-currency">€</span><span class="db-upgrade-card__price-amount"><?php echo e($pkg['price']); ?></span></div>
                            <div class="db-upgrade-card__prorate">*<?php echo __('services_upgrade_prorate', ['days' => $pkg['days'], 'price' => '€' . number_format($pkg['full_price'], 2)]); ?></div>
                            <button class="db-btn db-btn--secondary db-btn--sm db-upgrade-card__btn" onclick="DashToast.show('info','','<?php echo e(__('services_upgrade_processing')); ?>')"><?php echo e(__('services_upgrade_btn')); ?></button>
                            <div class="db-upgrade-card__specs db-upgrade-card__specs--mt"><?php foreach ($pkg['specs'] as $s): ?><span class="db-upgrade-card__spec"><?php echo e($s); ?></span><?php endforeach; ?></div>
                            <span class="db-upgrade-card__link"><?php echo e(__('services_upgrade_full_specs')); ?> →</span>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- RIGHT: Control Panel -->
    <div>
        <div class="db-ctrl-panel">
            <a href="#" class="db-btn db-btn--primary db-ctrl-panel__primary" onclick="event.preventDefault(); DashToast.show('info','','Opening SSH terminal...');">
                <i class="fas fa-terminal"></i> <?php echo e(__('services_action_ssh')); ?>
            </a>
            <div class="db-ctrl-panel__info">
                <div class="db-ctrl-panel__row"><span><?php echo e(__('services_info_plan')); ?></span><strong><?php echo e($service['plan']); ?></strong></div>
                <div class="db-ctrl-panel__row"><span><?php echo e(__('services_info_amount')); ?></span><strong><?php echo format_money($service['amount']); ?>/<?php echo e(strtolower(substr($service['cycle'], 0, 2))); ?></strong></div>
                <div class="db-ctrl-panel__row"><span><?php echo e(__('services_info_next_due')); ?></span><strong><?php echo e($service['due_date']); ?></strong></div>
            </div>
            <div class="db-ctrl-panel__actions">
                <button class="db-ctrl-panel__action" onclick="DashToast.show('warning','','Server powering off...')"><i class="fas fa-power-off"></i> <?php echo e(__('services_power_off')); ?></button>
                <button class="db-ctrl-panel__action" onclick="DashToast.show('info','','Rebooting...')"><i class="fas fa-rotate-right"></i> <?php echo e(__('services_reboot')); ?></button>
                <button class="db-ctrl-panel__action" onclick="DashToast.show('info','','Password change coming soon.')"><i class="fas fa-key"></i> <?php echo e(__('services_action_password')); ?></button>
                <button class="db-ctrl-panel__action" onclick="DashToast.show('info','','Opening console...')"><i class="fas fa-terminal"></i> <?php echo e(__('services_console')); ?></button>
                <button class="db-ctrl-panel__action" onclick="DashToast.show('info','','Location change coming soon.')"><i class="fas fa-location-dot"></i> <?php echo e(__('services_change_location')); ?></button>
                <button class="db-ctrl-panel__action" onclick="DashToast.show('info','','Renewal coming soon.')"><i class="fas fa-sync"></i> <?php echo e(__('services_renew')); ?></button>
                <button class="db-ctrl-panel__action" onclick="document.querySelector('[data-tab-target=upgrade]').click()"><i class="fas fa-arrow-up-right-dots"></i> <?php echo e(__('services_action_upgrade')); ?></button>
                <button class="db-ctrl-panel__action" onclick="document.querySelector('[data-tab-target=reinstall]').click()"><i class="fas fa-rotate"></i> <?php echo e(__('services_tab_reinstall')); ?></button>
            </div>
            <div class="db-ctrl-panel__danger">
                <button class="db-ctrl-panel__action db-ctrl-panel__action--danger" onclick="DashModal.open('cancelServiceModal')"><i class="fas fa-xmark"></i> <?php echo e(__('services_action_cancel')); ?></button>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>

<!-- Modals -->
<?php
$modal_id = 'cancelServiceModal'; $modal_title = __('services_action_cancel'); $modal_size = 'sm';
include __DIR__ . '/../../components/modal.php';

$cb_desc = __('services_cancel_confirm'); $cb_icon = null;
$cb_target_label = null; $cb_target_value = null; $cb_warn = null;
include __DIR__ . '/../../components/confirm-body.php';

$modal_footer = '<button class="db-btn db-btn--secondary" data-modal-close>' . e(__('common_cancel')) . '</button><button class="db-btn db-btn--danger" onclick="DashModal.close(this.closest(\'.db-modal-overlay\')); DashToast.show(\'success\',\'\',\'' . e(__('services_cancel_success')) . '\');">' . e(__('common_confirm')) . '</button>';
include __DIR__ . '/../../components/modal-end.php';

$modal_id = 'reinstallModal'; $modal_title = __('services_reinstall_title'); $modal_size = 'sm';
include __DIR__ . '/../../components/modal.php';

$cb_desc = __('services_reinstall_confirm'); $cb_icon = null;
$cb_target_label = null; $cb_target_value = null; $cb_warn = null;
include __DIR__ . '/../../components/confirm-body.php';

$modal_footer = '<button class="db-btn db-btn--secondary" data-modal-close>' . e(__('common_cancel')) . '</button><button class="db-btn db-btn--danger" onclick="DashModal.close(this.closest(\'.db-modal-overlay\')); DashToast.show(\'success\',\'\',\'' . e(__('services_reinstall_success')) . '\');">' . e(__('common_confirm')) . '</button>';
include __DIR__ . '/../../components/modal-end.php';
?>

<div class="db-toast-container" id="toastContainer"></div>
<?php require_once __DIR__ . '/../../layouts/footer.php'; ?>
