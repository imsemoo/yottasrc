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
    ['label' => __('services_title'), 'url' => DASH_BASE_PATH . '/pages/services/index.php'],
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

/* Shared helpers from the Cloud project pages — we reuse the sparkline
   renderer + seed-based accent colours so the VPS hero is visually a
   sibling of the Cloud server-details hero. */
require_once __DIR__ . '/../../layouts/project-helpers.php';

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
    'power'         => 'on',
    'os'            => 'Ubuntu 22.04',
    'os_family'     => 'linux',
    'uptime'        => '14d 6h',
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
    'cpu'           => '1 Core', 'cpu_arch'  => 'x86', 'cpu_cores' => 1,
    'ram'           => '2 GB',   'ram_type'  => 'DDR4', 'ram_gb'   => 2,
    'disk'          => '25 GB',  'disk_type' => 'NVMe', 'disk_gb'  => 25,
    'bw_used'       => '0',      'bw_total'  => '25 TB',
    'bw_total_tb'   => 25,
    'bw_speed'      => '1 Gbit/s',
    'ipv6'          => true,
];

/* ──────────────────────────────────────────
   LIVE TELEMETRY  (hero strip on Overview)
   ──────────────────────────────────────────
   Each metric has a current percentage/value + 12-point sparkline
   series (most-recent on the right). Backend: pull from your metrics
   service for the last 12 data points.
   ────────────────────────────────────────── */
$telemetry = [
    'cpu'  => ['pct' => 32, 'spark' => [18, 22, 30, 34, 28, 32, 38, 34, 30, 28, 32, 34]],
    'ram'  => ['pct' => 58, 'used_gb' => 1.2, 'spark' => [45, 52, 48, 58, 62, 60, 58, 56, 58, 54, 58, 58]],
    'disk' => ['pct' => 42, 'used_gb' => 10.5, 'spark' => [38, 40, 42, 42, 41, 42, 42, 42, 42, 42, 42, 42]],
    'net'  => ['in_mbps' => 4.2, 'out_mbps' => 1.8, 'spark' => [3, 5, 4, 8, 6, 4, 7, 5, 3, 6, 4, 5]],
];

/* ──────────────────────────────────────────
   BANDWIDTH DAILY  (30 days, GB/day)
   ──────────────────────────────────────────
   Drives the 30-day chart on the Bandwidth tab. Backend: replace with
   real daily samples for this server's billing month.
   ────────────────────────────────────────── */
$bw_daily = [
    12, 18, 22, 17, 24, 30, 34, 28, 32, 38, 34, 30, 28, 32, 34,
    36, 40, 38, 42, 45, 40, 44, 48, 50, 46, 52, 55, 58, 62, 66,
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
    ['id' => 310630, 'date' => '03/04/2026', 'due' => '05/04/2026', 'amount' => 3.42, 'status' => 'unpaid', 'type' => 'renewal',     'desc' => $service['plan'] . ' · ' . $service['cycle'] . ' renewal'],
    ['id' => 307776, 'date' => '24/03/2026', 'due' => '24/03/2026', 'amount' => 3.42, 'status' => 'paid',   'type' => 'new_service', 'desc' => $service['plan'] . ' · Initial setup'],
];

/* ──────────────────────────────────────────
   REINSTALL TAB — OS picker
   ──────────────────────────────────────────
   Mark the current OS with 'current' => true so it's pre-selected
   and shown with a checkmark.
   ────────────────────────────────────────── */
$os_list = [
    ['name' => 'Ubuntu 24.04',     'tag' => 'LTS · Latest'],
    ['name' => 'Ubuntu 22.04',     'tag' => 'LTS', 'current' => true],
    ['name' => 'Ubuntu 20.04',     'tag' => 'LTS'],
    ['name' => 'Ubuntu 18.04',     'tag' => 'EOL'],
    ['name' => 'Rocky Linux 9',    'tag' => 'Stable'],
    ['name' => 'Rocky Linux 8',    'tag' => 'Stable'],
    ['name' => 'Rocky Linux 10',   'tag' => 'Latest'],
    ['name' => 'Debian 9',         'tag' => 'EOL'],
    ['name' => 'Debian 8',         'tag' => 'EOL'],
    ['name' => 'Debian 12',        'tag' => 'Stable · Latest'],
    ['name' => 'Debian 11',        'tag' => 'Old Stable'],
    ['name' => 'Debian 10',        'tag' => 'EOL'],
    ['name' => 'CentOS Stream 9',  'tag' => 'Stream'],
    ['name' => 'CentOS Stream 8',  'tag' => 'Stream · EOL'],
    ['name' => 'CentOS 7',         'tag' => 'EOL'],
    ['name' => 'AlmaLinux 9',      'tag' => 'Stable'],
    ['name' => 'AlmaLinux 8',      'tag' => 'Stable'],
    ['name' => 'AlmaLinux 10',     'tag' => 'Latest'],
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

<!-- ═══════════════════════════════════════════════════════════
     HERO — premium header mirroring Cloud server-details
     (ds-hero pattern + seeded accent + live telemetry strip)
     ═══════════════════════════════════════════════════════════ -->
<?php
$__svc_seed = abs(crc32((string)$service['id'])) % 4;
$is_on      = ($service['power'] === 'on');
$os_icons   = ['ubuntu' => 'fab fa-ubuntu', 'debian' => 'fab fa-debian', 'linux' => 'fab fa-linux', 'windows' => 'fab fa-windows'];
$os_key     = strtolower(preg_split('/\s+/', $service['os'])[0]);
$os_icon    = $os_icons[$os_key] ?? 'fab fa-linux';
?>
<section class="ds-hero ds-hero--seeded<?php echo $is_on ? '' : ' ds-hero--danger'; ?>" data-power="<?php echo e($service['power']); ?>" style="--hero-seed: var(--seed-<?php echo $__svc_seed; ?>);">
    <div class="ds-hero__top">
        <div class="ds-hero__identity">
            <div class="ds-hero__avatar ds-hero__avatar--pkg">
                <span class="ds-hero__pkg-label"><?php echo e(__('services_info_plan')); ?></span>
                <span class="ds-hero__pkg-name"><?php echo e($service['plan']); ?></span>
            </div>
            <div class="ds-hero__title-block">
                <div class="ds-hero__meta-top">
                    <span class="ds-eyebrow <?php echo $is_on ? 'ds-eyebrow--success' : 'ds-eyebrow--danger'; ?>">
                        <span class="ds-status-dot"></span>
                        <span><?php echo e($is_on ? __('srvd_status_running') : __('srvd_status_stopped')); ?></span>
                    </span>
                    <span class="ds-hero__meta-sep">·</span>
                    <span class="ds-hero__os"><i class="<?php echo e($os_icon); ?>"></i> <?php echo e($service['os']); ?></span>
                </div>
                <h1 class="ds-hero__title">
                    <?php echo e($service['name']); ?>
                    <span style="opacity:0.55; font-weight:500;">#<?php echo e($service['id']); ?></span>
                </h1>
                <div class="ds-hero__meta">
                    <span class="ds-hero__meta-item"><i class="fas fa-globe"></i> <?php echo e($service['ip']); ?></span>
                    <span class="ds-hero__meta-item"><span class="fi fi-<?php echo e($service['location_flag']); ?>"></span> <?php echo e($service['location']); ?></span>
                    <span class="ds-hero__meta-item"><i class="fas fa-clock"></i> <?php echo e(__('srvd_hero_uptime')); ?> <strong><?php echo e($service['uptime']); ?></strong></span>
                </div>
            </div>
        </div>

        <div class="ds-hero__actions">
            <button class="ds-btn ds-btn--primary" onclick="DashToast.show('info','','Opening SSH console...')">
                <i class="fas fa-terminal"></i>
                <span><?php echo e(__('services_console')); ?></span>
            </button>
            <div class="db-dropdown-wrapper">
                <button class="ds-btn" data-dropdown-toggle>
                    <i class="fas fa-bolt"></i>
                    <span><?php echo e(__('dom_actions')); ?></span>
                    <i class="fas fa-chevron-down ds-btn__chev"></i>
                </button>
                <div class="db-dropdown-menu">
                    <button class="db-dropdown-item" onclick="DashToast.show('info','','Restarting...')"><i class="fas fa-rotate"></i> <?php echo e(__('services_reboot')); ?></button>
                    <button class="db-dropdown-item" onclick="DashToast.show('warning','','Server powering off...')"><i class="fas fa-stop"></i> <?php echo e(__('srvd_action_stop')); ?></button>
                    <button class="db-dropdown-item" onclick="DashToast.show('info','','Password change coming soon.')"><i class="fas fa-key"></i> <?php echo e(__('auth_reset_btn')); ?></button>
                    <button class="db-dropdown-item" onclick="DashToast.show('info','','Location change coming soon.')"><i class="fas fa-location-dot"></i> <?php echo e(__('services_change_location')); ?></button>
                    <div class="db-dropdown-divider"></div>
                    <button class="db-dropdown-item db-dropdown-item--danger" onclick="DashModal.open('cancelServiceModal')"><i class="fas fa-xmark"></i> <?php echo e(__('services_action_cancel')); ?></button>
                </div>
            </div>
            <button class="ds-btn ds-btn--power ds-btn--power-<?php echo e($service['power']); ?>" data-power="<?php echo e($service['power']); ?>">
                <i class="fas fa-power-off"></i>
                <span><?php echo e($is_on ? __('srvd_power_on') : __('srvd_power_off')); ?></span>
            </button>
        </div>
    </div>

    <!-- Live telemetry strip — CPU / RAM / Disk / Network with sparklines -->
    <div class="ds-hero__stats">
        <div class="ds-stat-grid">
            <?php
            $tele_items = [
                ['key' => 'cpu',  'icon' => 'fa-microchip',     'label' => __('srvd_tele_cpu'),  'value' => $telemetry['cpu']['pct'] . '%',  'sub' => $service['cpu_cores'] . ' ' . __('srvd_spec_cores') . ' · ' . $service['cpu_arch'], 'spark' => $telemetry['cpu']['spark'],  'seed' => 0],
                ['key' => 'ram',  'icon' => 'fa-memory',        'label' => __('srvd_tele_ram'),  'value' => $telemetry['ram']['pct'] . '%',  'sub' => $telemetry['ram']['used_gb'] . ' / ' . $service['ram_gb'] . ' GB', 'spark' => $telemetry['ram']['spark'], 'seed' => 1],
                ['key' => 'disk', 'icon' => 'fa-hard-drive',    'label' => __('srvd_tele_disk'), 'value' => $telemetry['disk']['pct'] . '%', 'sub' => $telemetry['disk']['used_gb'] . ' / ' . $service['disk_gb'] . ' GB', 'spark' => $telemetry['disk']['spark'], 'seed' => 2],
                ['key' => 'net',  'icon' => 'fa-wave-square',   'label' => __('srvd_tele_net'),  'value' => '↓' . $telemetry['net']['in_mbps'] . ' ↑' . $telemetry['net']['out_mbps'], 'sub' => __('srvd_tele_mbps'), 'spark' => $telemetry['net']['spark'], 'seed' => 3, 'compact' => true],
            ];
            foreach ($tele_items as $m):
                $tele_color = 'rgb(var(--seed-' . $m['seed'] . '))';
            ?>
            <div class="ds-stat ds-stat--glass" data-metric="<?php echo e($m['key']); ?>" style="--stat-seed: var(--seed-<?php echo $m['seed']; ?>);">
                <div class="ds-stat__head"><span class="ds-stat__label"><i class="fas <?php echo e($m['icon']); ?>"></i> <?php echo e($m['label']); ?></span></div>
                <div class="ds-stat__value"><span class="ds-stat__num<?php echo !empty($m['compact']) ? ' ds-stat__num--compact' : ''; ?>"><?php echo e($m['value']); ?></span></div>
                <div class="ds-stat__spark"><?php echo cloud_sparkline($m['spark'], 260, 36, $tele_color); ?></div>
                <div class="ds-stat__sub"><?php echo e($m['sub']); ?></div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ═══ TAB BAR (6 tabs — matches Cloud server-details) ═══ -->
<div class="db-tab-bar" data-tab-bar data-tab-content="#vpsTabs">
    <button type="button" class="db-tab-bar__btn is-active" data-tab-target="overview"><i class="fas fa-table-cells"></i> <?php echo e(__('dom_tab_overview')); ?></button>
    <button type="button" class="db-tab-bar__btn" data-tab-target="network"><i class="fas fa-globe"></i> <?php echo e(__('srvd_tele_net')); ?></button>
    <button type="button" class="db-tab-bar__btn" data-tab-target="bandwidth"><i class="fas fa-cloud-arrow-down"></i> <?php echo e(__('srvd_tab_bandwidth')); ?></button>
    <button type="button" class="db-tab-bar__btn" data-tab-target="reinstall"><i class="fas fa-rotate"></i> <?php echo e(__('services_tab_reinstall')); ?></button>
    <button type="button" class="db-tab-bar__btn" data-tab-target="billing"><i class="fas fa-file-invoice"></i> <?php echo e(__('dept_billing')); ?></button>
    <button type="button" class="db-tab-bar__btn" data-tab-target="upgrade"><i class="fas fa-arrow-up-right-dots"></i> <?php echo e(__('services_tab_upgrade')); ?></button>
</div>

<div id="vpsTabs">

    <!-- ═══ OVERVIEW ═══ -->
    <div class="db-tab-pane is-active" data-tab-pane="overview">
        <!-- Remote access — copy-to-clipboard chips -->
        <div class="db-srvd-access">
            <div class="db-srvd-access__head">
                <div class="db-srvd-access__title-wrap">
                    <h3 class="db-srvd-access__title">
                        <span class="db-srvd-access__icon"><i class="fas fa-plug"></i></span>
                        <?php echo e(__('srvd_overview_access_title')); ?>
                    </h3>
                    <p class="db-srvd-access__sub"><?php echo e(__('srvd_access_sub')); ?></p>
                </div>
            </div>
            <div class="db-srvd-access__grid">
                <button type="button" class="db-srvd-access-chip" onclick="DashCopy(this,'<?php echo e($service['ip']); ?>')">
                    <div class="db-srvd-access-chip__head">
                        <span class="db-srvd-access-chip__label"><i class="fas fa-globe"></i> <?php echo e(__('cpanel_ip')); ?></span>
                        <i class="fas fa-copy db-srvd-access-chip__copy"></i>
                    </div>
                    <div class="db-srvd-access-chip__value"><?php echo e($service['ip']); ?></div>
                </button>
                <button type="button" class="db-srvd-access-chip" onclick="DashCopy(this,'<?php echo e($service['hostname']); ?>')">
                    <div class="db-srvd-access-chip__head">
                        <span class="db-srvd-access-chip__label"><i class="fas fa-display"></i> <?php echo e(__('services_info_hostname')); ?></span>
                        <i class="fas fa-copy db-srvd-access-chip__copy"></i>
                    </div>
                    <div class="db-srvd-access-chip__value"><?php echo e($service['hostname']); ?></div>
                </button>
                <button type="button" class="db-srvd-access-chip" onclick="DashCopy(this,'<?php echo e($service['username']); ?>')">
                    <div class="db-srvd-access-chip__head">
                        <span class="db-srvd-access-chip__label"><i class="fas fa-user"></i> <?php echo e(__('cpanel_username')); ?></span>
                        <i class="fas fa-copy db-srvd-access-chip__copy"></i>
                    </div>
                    <div class="db-srvd-access-chip__value"><?php echo e($service['username']); ?></div>
                </button>
                <div class="db-srvd-access-chip db-srvd-access-chip--password" id="vpsPassword">
                    <div class="db-srvd-access-chip__head">
                        <span class="db-srvd-access-chip__label"><i class="fas fa-key"></i> <?php echo e(__('auth_password')); ?></span>
                        <div class="db-srvd-access-chip__tools">
                            <button type="button" class="db-srvd-password-toggle" onclick="toggleVpsPassword()" aria-label="<?php echo e(__('srvd_access_reveal')); ?>"><i class="fas fa-eye" id="vpsPwdEye"></i></button>
                            <button type="button" class="db-srvd-access-chip__copy-btn" onclick="DashCopy(this,'<?php echo e($service['password']); ?>')" aria-label="<?php echo e(__('common_copy')); ?>"><i class="fas fa-copy"></i></button>
                        </div>
                    </div>
                    <div class="db-srvd-access-chip__value db-srvd-access-chip__value--mono">
                        <span id="vpsPasswordText">••••••••••••••••</span>
                        <span id="vpsPasswordReal" style="display:none;"><?php echo e($service['password']); ?></span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Specifications & Status — billing/lifecycle facts (split out from
             the hardware grid below so the user can scan business state and
             hardware shape independently, mirroring the legacy dashboard). -->
        <div class="db-srvd-specs">
            <div class="db-srvd-specs__head">
                <h3 class="db-srvd-specs__title">
                    <span class="db-srvd-specs__icon"><i class="fas fa-circle-info"></i></span>
                    <?php echo e(__('srvd_overview_status_title')); ?>
                </h3>
                <p class="db-srvd-specs__sub"><?php echo e(__('srvd_overview_status_sub')); ?></p>
            </div>
            <div class="db-srvd-specs__grid">
                <?php
                $status_specs = [
                    ['icon' => 'fa-circle-check',  'label' => __('common_status'),         'value' => strtoupper($service['status']),                  'unit' => '', 'meta' => __('srvd_spec_status_sub'), 'seed' => 1, 'is_status' => true],
                    ['icon' => 'fa-location-dot',  'label' => __('cpanel_fact_location'),  'value' => $service['location'],                            'unit' => '', 'meta' => '',                          'seed' => 0],
                    ['icon' => 'fa-clock',         'label' => __('cpanel_bf_cycle'),       'value' => $service['cycle'],                               'unit' => '', 'meta' => '',                          'seed' => 2],
                    ['icon' => 'fa-euro-sign',     'label' => __('cpanel_bf_renewal'),     'value' => format_money($service['amount']),                'unit' => '', 'meta' => '/' . strtolower(substr($service['cycle'], 0, 2)), 'seed' => 3],
                    ['icon' => 'fa-calendar-day',  'label' => __('services_info_next_due'),'value' => $service['due_date'],                            'unit' => '', 'meta' => '',                          'seed' => 1],
                ];
                foreach ($status_specs as $s): ?>
                <div class="db-srvd-spec" style="--spec-seed: var(--seed-<?php echo $s['seed']; ?>);">
                    <div class="db-srvd-spec__icon"><i class="fas <?php echo e($s['icon']); ?>"></i></div>
                    <div class="db-srvd-spec__label"><?php echo e($s['label']); ?></div>
                    <div class="db-srvd-spec__value<?php echo !empty($s['is_status']) ? ' db-srvd-spec__value--status' : ''; ?>">
                        <span class="db-srvd-spec__num" style="font-size:1rem;"><?php echo e($s['value']); ?></span>
                        <?php if (!empty($s['unit'])): ?><span class="db-srvd-spec__unit"><?php echo e($s['unit']); ?></span><?php endif; ?>
                    </div>
                    <?php if (!empty($s['meta'])): ?><div class="db-srvd-spec__meta"><?php echo e($s['meta']); ?></div><?php endif; ?>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- Package Specifications — pure hardware shape (CPU/RAM/SSD/BW/IPv6).
             Status / cycle / renewal moved up into "Specifications & Status"
             so each section answers a single question. -->
        <div class="db-srvd-specs db-srvd-inner--mt-lg">
            <div class="db-srvd-specs__head">
                <h3 class="db-srvd-specs__title">
                    <span class="db-srvd-specs__icon"><i class="fas fa-microchip"></i></span>
                    <?php echo e(__('cpanel_pack_specs')); ?>
                </h3>
                <p class="db-srvd-specs__sub"><?php echo e(__('srvd_specs_sub')); ?></p>
            </div>
            <div class="db-srvd-specs__grid">
                <?php
                $specs = [
                    ['icon' => 'fa-microchip',         'label' => __('srvd_spec_cpu'),       'value' => $service['cpu_cores'],   'unit' => __('srvd_spec_cores'),  'meta' => $service['cpu_arch'],       'seed' => 0],
                    ['icon' => 'fa-memory',            'label' => __('srvd_spec_ram'),       'value' => $service['ram_gb'],      'unit' => 'GB',                   'meta' => $service['ram_type'],       'seed' => 1],
                    ['icon' => 'fa-hard-drive',        'label' => __('srvd_spec_ssd'),       'value' => $service['disk_gb'],     'unit' => 'GB',                   'meta' => $service['disk_type'],      'seed' => 2],
                    ['icon' => 'fa-arrows-left-right', 'label' => __('srvd_tab_bandwidth'),  'value' => $service['bw_total_tb'], 'unit' => 'TB',                   'meta' => $service['bw_speed'],       'seed' => 3],
                    ['icon' => 'fa-network-wired',     'label' => 'IPv6',                    'value' => !empty($service['ipv6']) ? __('common_supported') : __('common_not_supported'), 'unit' => '', 'meta' => '', 'seed' => 1, 'is_status' => !empty($service['ipv6'])],
                ];
                foreach ($specs as $s): ?>
                <div class="db-srvd-spec" style="--spec-seed: var(--seed-<?php echo $s['seed']; ?>);">
                    <div class="db-srvd-spec__icon"><i class="fas <?php echo e($s['icon']); ?>"></i></div>
                    <div class="db-srvd-spec__label"><?php echo e($s['label']); ?></div>
                    <div class="db-srvd-spec__value<?php echo !empty($s['is_status']) ? ' db-srvd-spec__value--status' : ''; ?>">
                        <span class="db-srvd-spec__num"><?php echo e($s['value']); ?></span>
                        <?php if (!empty($s['unit'])): ?><span class="db-srvd-spec__unit"><?php echo e($s['unit']); ?></span><?php endif; ?>
                    </div>
                    <?php if (!empty($s['meta'])): ?><div class="db-srvd-spec__meta"><?php echo e($s['meta']); ?></div><?php endif; ?>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- Tutorials -->
        <div class="db-srvd-card db-srvd-card--mt">
            <div class="db-srvd-card__head"><i class="fas fa-graduation-cap"></i> <?php echo e(__('services_tutorials_title')); ?></div>
            <div class="db-faq-list db-srvd-inner--mt-md">
                <details class="db-faq-item">
                    <summary class="db-faq-item__q"><i class="fas fa-terminal"></i> <?php echo e(__('services_tutorial_q1')); ?></summary>
                    <div class="db-faq-item__a"><?php echo e(__('services_tutorial_a1')); ?></div>
                </details>
                <details class="db-faq-item">
                    <summary class="db-faq-item__q"><i class="fas fa-key"></i> <?php echo e(__('services_tutorial_q2')); ?></summary>
                    <div class="db-faq-item__a"><?php echo e(__('services_tutorial_a2')); ?></div>
                </details>
                <details class="db-faq-item">
                    <summary class="db-faq-item__q"><i class="fas fa-clock-rotate-left"></i> <?php echo e(__('services_tutorial_q3')); ?></summary>
                    <div class="db-faq-item__a"><?php echo e(__('services_tutorial_a3')); ?></div>
                </details>
                <details class="db-faq-item">
                    <summary class="db-faq-item__q"><i class="fas fa-circle-question"></i> <?php echo e(__('services_tutorial_q4')); ?></summary>
                    <div class="db-faq-item__a"><?php echo __('services_tutorial_a4'); ?></div>
                </details>
            </div>
        </div>
    </div>

    <!-- ═══ NETWORK ═══ -->
    <div class="db-tab-pane" data-tab-pane="network">
        <div class="db-srvd-card">
            <div class="db-srvd-card__head"><i class="fas fa-globe"></i> <?php echo e(__('services_network_public')); ?></div>
            <ul class="db-srvd-notice-list">
                <li><i class="fas fa-circle"></i> <?php echo e(__('services_network_notice')); ?></li>
            </ul>
            <div class="db-table-wrapper db-srvd-inner--mt-lg">
                <table class="db-table">
                    <thead>
                        <tr>
                            <th style="width:60px;">#</th>
                            <th><?php echo e(__('srvd_network_main_ip')); ?></th>
                            <th style="width:120px;"><?php echo e(__('project_col_protocol')); ?></th>
                            <th style="width:200px;"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($network as $net):
                            $proto_slug = strtolower($net['protocol']);
                        ?>
                        <tr>
                            <td><?php echo e($net['num']); ?></td>
                            <td>
                                <button type="button" class="db-proj-server-ip db-proj-server-ip--copy" title="<?php echo e(__('common_copy')); ?>" onclick="DashCopy(this,'<?php echo e($net['ip']); ?>')">
                                    <i class="fas fa-ethernet"></i>
                                    <span><?php echo e($net['ip']); ?></span>
                                    <?php if ($net['main']): ?><span class="db-badge db-badge--active db-badge--inline-sm"><?php echo e(__('cpanel_ftp_main')); ?></span><?php endif; ?>
                                    <i class="fas fa-copy db-proj-server-ip__copy-icon"></i>
                                </button>
                            </td>
                            <td><span class="db-proj-protocol db-proj-protocol--<?php echo e($proto_slug); ?>"><?php echo e($net['protocol']); ?></span></td>
                            <td>
                                <?php if ($net['main']): ?>
                                <button class="db-btn db-btn--sm db-btn--ghost" onclick="DashToast.show('success','','<?php echo e(__('services_network_change_ip_msg')); ?>')">
                                    <i class="fas fa-pen"></i> <?php echo e(__('services_network_change_ip')); ?>
                                </button>
                                <?php endif; ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- ═══ BANDWIDTH ═══ -->
    <div class="db-tab-pane" data-tab-pane="bandwidth">
        <?php
        $bw_used_gb  = array_sum($bw_daily);
        $bw_max_gb   = $service['bw_total_tb'] * 1024;
        $bw_pct_full = $bw_max_gb > 0 ? min(100, round(($bw_used_gb / $bw_max_gb) * 100, 1)) : 0;
        $bw_used_tb  = round($bw_used_gb / 1024, 2);
        $bw_peak_gb  = max($bw_daily);
        $bw_avg_gb   = round(array_sum($bw_daily) / max(1, count($bw_daily)), 1);
        $bw_color    = 'rgb(var(--seed-3))';
        ?>
        <div class="db-srvd-card">
            <div class="db-srvd-card__head"><i class="fas fa-cloud-arrow-down"></i> <?php echo e(__('srvd_bw_title')); ?></div>

            <!-- Usage + percent + speed + peak + avg — 5-tile summary -->
            <div class="db-srvd-specs__grid db-srvd-inner--mt-lg" style="grid-template-columns: repeat(auto-fit, minmax(160px, 1fr));">
                <div class="db-srvd-spec" style="--spec-seed: var(--seed-3);">
                    <div class="db-srvd-spec__label"><?php echo e(__('services_bw_used')); ?></div>
                    <div class="db-srvd-spec__value"><span class="db-srvd-spec__num"><?php echo $bw_used_tb; ?></span><span class="db-srvd-spec__unit">/ <?php echo e($service['bw_total']); ?></span></div>
                </div>
                <div class="db-srvd-spec" style="--spec-seed: var(--seed-0);">
                    <div class="db-srvd-spec__label"><?php echo e(__('services_bw_percent')); ?></div>
                    <div class="db-srvd-spec__value"><span class="db-srvd-spec__num"><?php echo $bw_pct_full; ?></span><span class="db-srvd-spec__unit">%</span></div>
                </div>
                <div class="db-srvd-spec" style="--spec-seed: var(--seed-2);">
                    <div class="db-srvd-spec__label"><?php echo e(__('services_bw_speed')); ?></div>
                    <div class="db-srvd-spec__value"><span class="db-srvd-spec__num" style="font-size:1.1rem;"><?php echo e($service['bw_speed']); ?></span></div>
                </div>
                <div class="db-srvd-spec" style="--spec-seed: var(--seed-1);">
                    <div class="db-srvd-spec__label"><?php echo e(__('services_bw_peak')); ?></div>
                    <div class="db-srvd-spec__value"><span class="db-srvd-spec__num"><?php echo $bw_peak_gb; ?></span><span class="db-srvd-spec__unit">GB</span></div>
                </div>
                <div class="db-srvd-spec" style="--spec-seed: var(--seed-2);">
                    <div class="db-srvd-spec__label"><?php echo e(__('services_bw_avg')); ?></div>
                    <div class="db-srvd-spec__value"><span class="db-srvd-spec__num"><?php echo $bw_avg_gb; ?></span><span class="db-srvd-spec__unit">GB/d</span></div>
                </div>
            </div>

            <div class="db-progress-row db-srvd-inner--mt-lg">
                <span class="db-progress-row__primary"><?php echo $bw_used_tb; ?> TB / <?php echo e($service['bw_total']); ?></span>
                <span class="db-progress-row__secondary"><?php echo $bw_pct_full; ?>%</span>
            </div>
            <div class="db-progress-bar db-progress-bar--lg"><div class="db-progress-bar__fill" style="width:<?php echo $bw_pct_full; ?>%;"></div></div>

            <!-- 30-day daily chart with hover tooltip (value per day) -->
            <div class="db-srvd-inner--mt-lg">
                <div style="display:flex; justify-content:space-between; align-items:baseline; margin-bottom:10px;">
                    <span style="font-size:0.82rem; color: var(--text-secondary); font-weight:600;"><i class="fas fa-chart-area"></i> <?php echo e(__('services_bw_chart_title')); ?></span>
                    <span style="font-size:0.76rem; color: var(--text-tertiary);"><?php echo count($bw_daily); ?> <?php echo e(__('services_bw_chart_days')); ?></span>
                </div>
                <div class="db-srvd-bw-chart" data-bw-chart
                     data-bw-values='<?php echo e(json_encode(array_values($bw_daily))); ?>'
                     data-bw-max-gb="<?php echo (int)$bw_max_gb; ?>"
                     data-bw-unit="GB">
                    <?php echo cloud_sparkline($bw_daily, 1000, 160, $bw_color); ?>
                    <div class="db-srvd-bw-chart__overlay" aria-hidden="true"></div>
                    <div class="db-srvd-bw-chart__tooltip" role="status" aria-live="polite" hidden>
                        <span class="db-srvd-bw-chart__tt-day"></span>
                        <span class="db-srvd-bw-chart__tt-value"></span>
                    </div>
                </div>
            </div>

            <div class="db-notice db-notice--info db-srvd-inner--mt-lg">
                <i class="fas fa-circle-info"></i>
                <span><?php echo e(__('services_bw_reset_notice')); ?></span>
            </div>
        </div>

        <div class="db-srvd-card db-srvd-card--mt">
            <div class="db-srvd-card__head"><i class="fas fa-circle-question"></i> <?php echo e(__('services_bw_faq_title')); ?></div>
            <div class="db-faq-list db-srvd-inner--mt-md">
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

    <!-- ═══ REINSTALL — OS grouped by family (enhancement) ═══ -->
    <div class="db-tab-pane" data-tab-pane="reinstall">
        <?php
        /* OS rows are rendered as a flat grid (no family grouping) — the
           grid mirrors the legacy dashboard pattern customers are already
           used to. Each card derives its brand identity from the OS family
           prefix in the name (Ubuntu / Debian / ...). */
        $os_brand_map = [
            'Ubuntu'      => ['icon' => 'fab fa-ubuntu',   'class' => 'db-os-card--ubuntu'],
            'Debian'      => ['icon' => 'fab fa-debian',   'class' => 'db-os-card--debian'],
            'Rocky Linux' => ['icon' => 'fab fa-redhat',   'class' => 'db-os-card--rocky'],
            'CentOS'      => ['icon' => 'fab fa-centos',   'class' => 'db-os-card--centos'],
            'AlmaLinux'   => ['icon' => 'fab fa-linux',    'class' => 'db-os-card--alma'],
        ];
        $os_brand_for = function ($name) use ($os_brand_map) {
            foreach ($os_brand_map as $prefix => $brand) {
                if (strpos($name, $prefix) === 0) return $brand;
            }
            return ['icon' => 'fab fa-linux', 'class' => ''];
        };
        ?>
        <div class="db-srvd-card">
            <div class="db-srvd-card__head"><i class="fas fa-rotate"></i> <?php echo e(__('services_reinstall_title')); ?></div>
            <ul class="db-srvd-notice-list">
                <li><i class="fas fa-circle"></i> <?php echo e(__('services_reinstall_note1')); ?></li>
                <li class="db-srvd-notice--warn"><i class="fas fa-circle"></i> <?php echo e(__('services_reinstall_note2')); ?></li>
                <li><i class="fas fa-circle"></i> <?php echo e(__('services_reinstall_note3')); ?></li>
            </ul>

            <div class="db-os-grid db-srvd-inner--mt-md">
                <?php foreach ($os_list as $os):
                    $brand   = $os_brand_for($os['name']);
                    $tag     = $os['tag'] ?? '';
                    $is_eol  = stripos($tag, 'EOL') !== false;
                    $is_curr = !empty($os['current']);
                ?>
                <div class="db-os-card <?php echo e($brand['class']); ?><?php echo $is_curr ? ' selected is-current' : ''; ?><?php echo $is_eol ? ' is-eol' : ''; ?>" onclick="document.querySelectorAll('.db-os-card').forEach(c=>c.classList.remove('selected')); this.classList.add('selected');">
                    <div class="db-os-card__body">
                        <?php if ($is_curr): ?>
                        <span class="db-os-card__current-pill"><i class="fas fa-circle-check"></i> <?php echo e(__('os_current_installed')); ?></span>
                        <?php endif; ?>
                        <span class="db-os-card__name"><?php echo e($os['name']); ?></span>
                        <?php if ($tag): ?>
                        <span class="db-os-card__tag<?php echo $is_eol ? ' db-os-card__tag--eol' : ''; ?>"><?php echo e($tag); ?></span>
                        <?php endif; ?>
                    </div>
                    <span class="db-os-card__brand" aria-hidden="true"><i class="<?php echo e($brand['icon']); ?>"></i></span>
                    <?php if (!$is_curr): ?>
                    <span class="db-os-card__check" aria-hidden="true"><i class="fas fa-check"></i></span>
                    <?php endif; ?>
                </div>
                <?php endforeach; ?>
            </div>

            <div class="db-srvd-actions-row db-srvd-actions-row--center db-srvd-inner--mt-lg">
                <button class="db-btn db-btn--danger" onclick="DashModal.open('reinstallModal')">
                    <i class="fas fa-rotate"></i> <?php echo e(__('srvd_reinstall_btn')); ?>
                </button>
            </div>

            <div class="db-notice db-notice--warning db-srvd-inner--mt-md">
                <i class="fas fa-triangle-exclamation"></i>
                <span><?php echo e(__('services_reinstall_warning')); ?></span>
            </div>
        </div>
    </div>

    <!-- ═══ BILLING ═══ -->
    <div class="db-tab-pane" data-tab-pane="billing">
        <?php $pct = round(($service['days_total'] - $service['days_left']) / max(1, $service['days_total']) * 100); ?>

        <div class="db-srvd-card">
            <div class="db-srvd-card__head"><i class="fas fa-file-invoice"></i> <?php echo e(__('cpanel_billing_info')); ?></div>

            <div class="db-srvd-specs__grid db-srvd-inner--mt-lg" style="grid-template-columns: repeat(auto-fit, minmax(190px, 1fr));">
                <div class="db-srvd-spec db-srvd-spec--with-icon" style="--spec-seed: var(--seed-0);">
                    <div class="db-srvd-spec__icon"><i class="fas fa-calendar-check"></i></div>
                    <div class="db-srvd-spec__label"><?php echo e(__('cpanel_bf_reg')); ?></div>
                    <div class="db-srvd-spec__value"><span class="db-srvd-spec__num" style="font-size:1.05rem;"><?php echo e($service['created']); ?></span></div>
                </div>
                <div class="db-srvd-spec db-srvd-spec--with-icon" style="--spec-seed: var(--seed-1);">
                    <div class="db-srvd-spec__icon"><i class="fas fa-clock"></i></div>
                    <div class="db-srvd-spec__label"><?php echo e(__('cpanel_bf_cycle')); ?></div>
                    <div class="db-srvd-spec__value"><span class="db-srvd-spec__num" style="font-size:1.05rem;"><?php echo e($service['cycle']); ?></span></div>
                </div>
                <div class="db-srvd-spec db-srvd-spec--with-icon" style="--spec-seed: var(--seed-2);">
                    <div class="db-srvd-spec__icon"><i class="fas fa-euro-sign"></i></div>
                    <div class="db-srvd-spec__label"><?php echo e(__('cpanel_bf_renewal')); ?></div>
                    <div class="db-srvd-spec__value"><span class="db-srvd-spec__num"><?php echo format_money($service['amount']); ?></span></div>
                </div>
                <div class="db-srvd-spec db-srvd-spec--with-icon" style="--spec-seed: var(--seed-3);">
                    <div class="db-srvd-spec__icon"><i class="fas fa-calendar-day"></i></div>
                    <div class="db-srvd-spec__label"><?php echo e(__('services_info_next_due')); ?></div>
                    <div class="db-srvd-spec__value"><span class="db-srvd-spec__num" style="font-size:1.05rem;"><?php echo e($service['due_date']); ?></span></div>
                </div>
            </div>

            <div class="db-progress-wrap db-progress-wrap--with-icon db-srvd-inner--mt-lg">
                <span class="db-progress-wrap__icon" aria-hidden="true"><i class="fas fa-calendar-days"></i></span>
                <div class="db-progress-bar db-progress-bar--sm"><div class="db-progress-bar__fill" style="width:<?php echo $pct; ?>%;"></div></div>
                <span class="db-progress-badge"><?php echo $service['days_left']; ?> <?php echo e(__('services_billing_days_left')); ?></span>
            </div>
        </div>

        <div class="db-srvd-card db-srvd-card--mt">
            <div class="db-srvd-card__head"><i class="fas fa-wrench"></i> <?php echo e(__('cpanel_billing_tools')); ?></div>
            <div class="db-billing-tools db-srvd-inner--mt-md">
                <div class="db-billing-tool">
                    <div class="db-billing-tool__info"><div class="db-billing-tool__title"><?php echo e(__('services_billing_renewal_invoice')); ?></div><div class="db-billing-tool__desc"><?php echo __('services_billing_renewal_desc', ['amount' => '€' . number_format($service['amount'], 2) . ' ' . $service['currency'], 'days' => '6', 'date' => $service['due_date']]); ?></div></div>
                    <div class="db-billing-tool__action"><button class="db-btn db-btn--sm db-btn--secondary" onclick="DashToast.show('success','','<?php echo e(__('services_billing_renewal_generated')); ?>')"><?php echo e(__('services_billing_generate_renewal')); ?></button></div>
                </div>
                <div class="db-billing-tool">
                    <div class="db-billing-tool__info"><div class="db-billing-tool__title"><?php echo e(__('cpanel_bf_cycle')); ?></div><div class="db-billing-tool__desc"><?php echo __('services_billing_cycle_desc', ['cycle' => $service['cycle'], 'date' => $service['due_date']]); ?></div></div>
                    <div class="db-billing-tool__action"><button class="db-btn db-btn--sm db-btn--secondary" onclick="DashToast.show('info','','<?php echo e(__('services_billing_cycle_change_msg')); ?>')"><?php echo e(__('services_billing_change_cycle')); ?></button></div>
                </div>
                <div class="db-billing-tool">
                    <div class="db-billing-tool__info"><div class="db-billing-tool__title"><?php echo e(__('services_billing_auto_renew')); ?></div><div class="db-billing-tool__desc"><?php echo __('services_billing_auto_renew_desc', ['days' => '6']); ?><br><span class="text-danger"><?php echo e(__('services_billing_auto_renew_warning')); ?></span></div></div>
                    <div class="db-billing-tool__action"><label class="db-toggle"><input type="checkbox" checked onchange="DashToast.show('success','',this.checked?'<?php echo e(__('dom_autorenew_on_toast')); ?>':'<?php echo e(__('services_billing_auto_renew_off')); ?>')"><span class="db-toggle-track"><span class="db-toggle-thumb"></span></span></label></div>
                </div>
                <div class="db-billing-tool">
                    <div class="db-billing-tool__info"><div class="db-billing-tool__title"><?php echo e(__('services_billing_credit_renewal')); ?></div><div class="db-billing-tool__desc"><?php echo e(__('services_billing_credit_renewal_desc')); ?></div></div>
                    <div class="db-billing-tool__action"><label class="db-toggle"><input type="checkbox" onchange="DashToast.show('success','',this.checked?'<?php echo e(__('services_billing_credit_on')); ?>':'<?php echo e(__('services_billing_credit_off')); ?>')"><span class="db-toggle-track"><span class="db-toggle-thumb"></span></span></label></div>
                </div>
            </div>
        </div>

        <!-- Linked invoices — same pattern as the main /billing/invoices.php
             page (filter bar with search + status/type filters + export
             dropdown, sortable columns, row actions, pagination). Same
             markup contract so the dashboard-wide DashTableTools / DashExport /
             DashTablePager JS picks it up automatically. -->
        <div class="db-card db-srvd-card--mt">
            <div class="db-srvd-card__head" style="padding:16px 18px 0;"><i class="fas fa-list"></i> <?php echo e(__('keys_invoices_title')); ?></div>
            <div class="db-card-body--table">
                <div class="db-fbar">
                    <div class="db-fbar__top">
                        <div class="db-fbar__search">
                            <i class="fas fa-magnifying-glass"></i>
                            <input type="text" data-table-search="serviceInvoicesTable" placeholder="<?php echo e(__('invoices_search_placeholder')); ?>">
                        </div>
                        <div class="db-fbar__tools">
                            <select class="db-fbar__sort" data-table-filter="serviceInvoicesTable" data-filter-key="status">
                                <option value=""><?php echo e(__('domains_filter_all')); ?></option>
                                <option value="paid"><?php echo e(__('status_paid')); ?></option>
                                <option value="unpaid"><?php echo e(__('status_unpaid')); ?></option>
                                <option value="overdue"><?php echo e(__('status_overdue')); ?></option>
                            </select>
                            <select class="db-fbar__sort" data-table-filter="serviceInvoicesTable" data-filter-key="type">
                                <option value=""><?php echo e(__('toolbar_all_types')); ?></option>
                                <option value="new_service"><?php echo e(__('invoices_type_new_service')); ?></option>
                                <option value="renewal"><?php echo e(__('invoices_type_renewal')); ?></option>
                                <option value="upgrade"><?php echo e(__('services_upgrade_btn')); ?></option>
                            </select>
                            <?php include __DIR__ . '/../../components/export-dropdown.php'; ?>
                        </div>
                    </div>
                </div>

                <div class="db-table-wrapper">
                    <table class="db-table" id="serviceInvoicesTable" data-table-tools>
                        <thead>
                            <tr>
                                <th class="db-table-sortable" data-sort-key="id"><?php echo e(__('invoices_col_invoice')); ?> <span class="db-sort-icon"><i class="fas fa-sort"></i></span></th>
                                <th class="db-table-hide-mobile db-table-sortable" data-sort-key="date"><?php echo e(__('credit_col_date')); ?> <span class="db-sort-icon"><i class="fas fa-sort"></i></span></th>
                                <th class="db-table-hide-tablet db-table-sortable" data-sort-key="due"><?php echo e(__('keys_col_due')); ?> <span class="db-sort-icon"><i class="fas fa-sort"></i></span></th>
                                <th class="db-table-hide-tablet db-table-sortable" data-sort-key="type"><?php echo e(__('dom_dns_type')); ?> <span class="db-sort-icon"><i class="fas fa-sort"></i></span></th>
                                <th class="db-table-sortable" data-sort-key="status"><?php echo e(__('common_status')); ?> <span class="db-sort-icon"><i class="fas fa-sort"></i></span></th>
                                <th class="db-table-cell--right db-table-sortable" data-sort-key="amount"><?php echo e(__('keys_col_amount')); ?> <span class="db-sort-icon"><i class="fas fa-sort"></i></span></th>
                                <th style="width:90px;"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($linked_invoices as $inv):
                                $detail_url = DASH_BASE_PATH . '/pages/billing/invoice-details.php?id=' . urlencode((string)$inv['id']) . '&status=' . urlencode($inv['status']);
                                $is_urgent  = ($inv['status'] === 'unpaid' || $inv['status'] === 'overdue');
                            ?>
                            <tr class="db-table-row-link <?php echo $is_urgent ? 'db-table-row--urgent' : ''; ?>"
                                data-row
                                data-id="<?php echo e(strtolower((string)$inv['id'])); ?>"
                                data-desc="<?php echo e(strtolower($inv['desc'])); ?>"
                                data-date="<?php echo e($inv['date']); ?>"
                                data-due="<?php echo e($inv['due']); ?>"
                                data-type="<?php echo e($inv['type']); ?>"
                                data-status="<?php echo e($inv['status']); ?>"
                                data-amount="<?php echo e($inv['amount']); ?>"
                                onclick="window.location='<?php echo $detail_url; ?>'">
                                <td>
                                    <div class="db-table-cell-main">#<?php echo e($inv['id']); ?></div>
                                    <div class="db-table-cell-sub"><?php echo e($inv['desc']); ?></div>
                                </td>
                                <td class="db-table-hide-mobile"><?php echo e($inv['date']); ?></td>
                                <td class="db-table-hide-tablet"><?php echo e($inv['due']); ?></td>
                                <td class="db-table-hide-tablet"><span class="db-badge db-badge--<?php echo e($inv['type']); ?>"><?php echo e(__('invoices_type_' . $inv['type'])); ?></span></td>
                                <td><span class="db-badge db-badge--<?php echo e($inv['status']); ?>"><?php echo e(__('status_' . $inv['status'])); ?></span></td>
                                <td class="db-table-cell--right"><span class="db-table-cell-amount"><?php echo format_money($inv['amount']); ?></span></td>
                                <td>
                                    <div class="db-row-actions db-row-actions--solid" onclick="event.stopPropagation();">
                                        <a href="<?php echo $detail_url; ?>" class="db-row-action db-row-action--solid db-row-action--primary" data-tooltip="<?php echo e(__('common_open')); ?>"><i class="fas fa-arrow-up-right-from-square"></i></a>
                                        <div class="db-dropdown-wrapper">
                                            <button class="db-row-action db-row-action--solid db-row-action--menu" data-dropdown-toggle><i class="fas fa-ellipsis-vertical"></i></button>
                                            <div class="db-dropdown-menu">
                                                <a href="<?php echo $detail_url; ?>" class="db-dropdown-item"><i class="fas fa-eye"></i> <?php echo e(__('common_view')); ?></a>
                                                <button class="db-dropdown-item" onclick="DashToast.show('success','','Invoice PDF downloaded.');"><i class="fas fa-download"></i> <?php echo e(__('invoices_download')); ?></button>
                                                <?php if ($inv['status'] === 'unpaid' || $inv['status'] === 'overdue'): ?>
                                                <div class="db-dropdown-divider"></div>
                                                <a href="<?php echo $detail_url; ?>" class="db-dropdown-item"><i class="fas fa-credit-card"></i> <?php echo e(__('invoices_pay_now')); ?></a>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                            <?php
                            $te_colspan = 7; $te_text = __('invoices_empty_search');
                            include __DIR__ . '/../../components/table-empty.php';
                            ?>
                        </tbody>
                    </table>
                </div>

                <!-- Client-side pagination — same component used on the main invoices page. -->
                <div id="serviceInvoicesPagination" data-pager-for="serviceInvoicesTable" data-page-size="10"></div>
            </div>
        </div>
    </div>

    <!-- ═══ UPGRADE — rebuilt to share the Cloud Servers package card pattern
         (db-package-card / db-package-grid) so VPS upgrades feel like the
         flow customers already use when spinning up Cloud servers. ═══ -->
    <div class="db-tab-pane" data-tab-pane="upgrade">
        <div class="db-srvd-card">
            <div class="db-srvd-card__head-row">
                <div class="db-srvd-card__head"><i class="fas fa-arrow-up-right-dots"></i> <?php echo e(__('services_tab_upgrade')); ?></div>
                <span class="db-cs-summary__head" style="font-size:0.72rem; color:var(--text-tertiary);">
                    <i class="fas fa-clock"></i>
                    <?php echo e(__('services_upgrade_prorate_note', ['days' => $service['days_left']])); ?>
                </span>
            </div>
            <ul class="db-srvd-notice-list">
                <li><i class="fas fa-circle"></i> <?php echo e(__('services_upgrade_note1')); ?></li>
                <li><i class="fas fa-circle"></i> <?php echo e(__('services_upgrade_note2')); ?></li>
                <li><i class="fas fa-circle"></i> <?php echo e(__('services_upgrade_note3')); ?></li>
                <li class="db-srvd-notice--warn"><i class="fas fa-circle"></i> <?php echo e(__('services_upgrade_note4')); ?></li>
            </ul>

            <!-- Current package summary — matches the cPanel / Reseller version -->
            <div class="db-srvd-current-pkg db-srvd-inner--mt-md">
                <div class="db-srvd-current-pkg__label">
                    <i class="fas fa-microchip"></i>
                    <?php echo e(__('cpanel_upgrade_current_pkg')); ?>
                </div>
                <div class="db-srvd-current-pkg__name"><?php echo e($service['plan']); ?></div>
                <div class="db-srvd-current-pkg__meta">
                    <span><?php echo (int)$service['cpu_cores']; ?> <?php echo e(__('create_pkg_cores')); ?> · <?php echo e($service['ram']); ?> · <?php echo e($service['disk']); ?></span>
                    <span class="db-srvd-current-pkg__price"><?php echo format_money($service['amount']); ?>/<?php echo e(strtolower(substr($service['cycle'], 0, 2))); ?></span>
                </div>
            </div>

            <h4 class="db-srv-section-title db-srvd-inner--mt-md"><?php echo e(__('reseller_upgrade_packages_title')); ?></h4>
            <div class="db-package-grid db-srvd-inner--mt-md">
                <?php foreach ($packages as $idx => $pkg):
                    $cpu_delta  = intval($pkg['specs'][0]) - $service['cpu_cores'];
                    $ram_delta  = intval($pkg['specs'][1]) - $service['ram_gb'];
                    $disk_delta = intval($pkg['specs'][2]) - $service['disk_gb'];
                    $bw_delta   = intval($pkg['specs'][3]) - $service['bw_total_tb'];
                    $is_featured = ($idx === 1); // highlight the second tier like the Cloud picker
                ?>
                <div class="db-package-card<?php echo $is_featured ? ' is-featured' : ''; ?>">
                    <div class="db-package-card__head">
                        <div class="db-package-card__id">
                            <?php echo e($pkg['name']); ?>
                            <?php if ($is_featured): ?>
                            <span class="db-package-card__ribbon"><i class="fas fa-star"></i> <?php echo e(__('create_package_popular')); ?></span>
                            <?php elseif (!empty($pkg['save'])): ?>
                            <span class="db-package-card__ribbon" style="background:linear-gradient(135deg,var(--brand-secondary),#4ade80);"><i class="fas fa-tag"></i> <?php echo e($pkg['save']); ?></span>
                            <?php endif; ?>
                        </div>
                        <div class="db-package-card__price">
                            <span class="db-package-card__price-m">€<?php echo e($pkg['price']); ?><small>/m</small></span>
                            <span class="db-package-card__price-h" style="text-decoration: line-through; opacity: 0.5;">€<?php echo number_format($pkg['full_price'], 2); ?></span>
                        </div>
                    </div>
                    <div class="db-package-card__specs">
                        <span class="db-package-spec db-package-spec--accent"><?php echo e($pkg['specs'][0]); ?></span>
                        <span class="db-package-spec db-package-spec--accent"><?php echo e($pkg['specs'][1]); ?> RAM</span>
                        <span class="db-package-spec db-package-spec--accent"><?php echo e($pkg['specs'][2]); ?></span>
                    </div>
                    <div class="db-package-card__specs">
                        <span class="db-package-spec db-package-spec--info"><?php echo e($pkg['specs'][3]); ?> BW</span>
                        <?php if ($cpu_delta > 0): ?>
                        <span class="db-package-spec db-package-spec--primary">+<?php echo $cpu_delta; ?> CPU</span>
                        <?php endif; ?>
                        <?php if ($ram_delta > 0): ?>
                        <span class="db-package-spec db-package-spec--primary">+<?php echo $ram_delta; ?> GB RAM</span>
                        <?php endif; ?>
                        <?php if ($disk_delta > 0): ?>
                        <span class="db-package-spec db-package-spec--primary">+<?php echo $disk_delta; ?> GB</span>
                        <?php endif; ?>
                    </div>
                    <div class="db-package-card__prorate-row">
                        <i class="fas fa-circle-info"></i>
                        <?php echo e(__('services_upgrade_prorate_short', ['days' => $pkg['days']])); ?>
                    </div>
                    <button class="db-btn db-btn--primary db-btn--sm db-btn--full db-package-card__cta"
                            onclick="DashToast.show('info','','<?php echo e(__('services_upgrade_processing')); ?>')">
                        <i class="fas fa-arrow-up-right-dots"></i>
                        <?php echo e(__('services_upgrade_btn')); ?>
                    </button>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>

<script>
/* Reveal / mask the Overview password chip */
function toggleVpsPassword() {
    var textEl = document.getElementById('vpsPasswordText');
    var realEl = document.getElementById('vpsPasswordReal');
    var eye    = document.getElementById('vpsPwdEye');
    if (!textEl || !realEl || !eye) return;
    var MASK = '••••••••••••••••';
    if (textEl.textContent === MASK) {
        textEl.textContent = realEl.textContent;
        eye.className = 'fas fa-eye-slash';
    } else {
        textEl.textContent = MASK;
        eye.className = 'fas fa-eye';
    }
}

/* Bandwidth chart — hover tooltip (mirrors the Cloud server-details version). */
(function () {
    var chart = document.querySelector('[data-bw-chart]');
    if (!chart) return;
    var rawValues = chart.getAttribute('data-bw-values');
    var values = [];
    try { values = JSON.parse(rawValues) || []; } catch (_) {}
    if (!values.length) return;
    var unit   = chart.getAttribute('data-bw-unit') || 'GB';
    var tipEl  = chart.querySelector('.db-srvd-bw-chart__tooltip');
    var dayEl  = chart.querySelector('.db-srvd-bw-chart__tt-day');
    var valEl  = chart.querySelector('.db-srvd-bw-chart__tt-value');
    var overlay = chart.querySelector('.db-srvd-bw-chart__overlay');
    if (!tipEl || !dayEl || !valEl || !overlay) return;

    var dayLabel   = <?php echo json_encode(__('srvd_bw_tt_day')); ?>;
    var todayLabel = <?php echo json_encode(__('dash_bw_today')); ?>;
    var totalDays  = values.length;

    var dot = document.createElement('span');
    dot.className = 'db-srvd-bw-chart__dot';
    dot.setAttribute('aria-hidden', 'true');
    chart.appendChild(dot);

    function format(v) {
        if (v >= 1000) return (v / 1024).toFixed(2) + ' TB';
        return (Math.round(v * 10) / 10) + ' ' + unit;
    }

    function show(index) {
        if (index < 0) index = 0;
        if (index >= totalDays) index = totalDays - 1;
        var v = values[index];
        var isToday = index === totalDays - 1;
        dayEl.textContent = isToday ? todayLabel : dayLabel.replace('{n}', (totalDays - 1 - index));
        valEl.textContent = format(v);

        var rect = chart.getBoundingClientRect();
        var width = rect.width;
        var xNorm = index / Math.max(1, totalDays - 1);
        var dotX = xNorm * width;

        var max = Math.max.apply(null, values);
        var min = Math.min.apply(null, values);
        var range = Math.max(0.01, max - min);
        var height = rect.height - 4;
        var dotY = height - ((v - min) / range) * (height - 4) - 2;

        dot.style.transform = 'translate(' + dotX + 'px,' + dotY + 'px)';
        dot.classList.add('is-visible');

        var tooltipWidth = 140;
        var tipX = Math.max(8, Math.min(width - tooltipWidth - 8, dotX - tooltipWidth / 2));
        tipEl.style.transform = 'translate(' + tipX + 'px, 0)';
        tipEl.hidden = false;
    }

    function hide() {
        tipEl.hidden = true;
        dot.classList.remove('is-visible');
    }

    function fromPointer(e) {
        var rect = chart.getBoundingClientRect();
        var clientX = e.touches ? e.touches[0].clientX : e.clientX;
        var x = Math.max(0, Math.min(rect.width, clientX - rect.left));
        var index = Math.round((x / rect.width) * (totalDays - 1));
        show(index);
    }

    overlay.addEventListener('mousemove', fromPointer);
    overlay.addEventListener('mouseleave', hide);
    overlay.addEventListener('touchstart', fromPointer, { passive: true });
    overlay.addEventListener('touchmove',  fromPointer, { passive: true });
    overlay.addEventListener('touchend',   function () { setTimeout(hide, 1400); });
})();
</script>
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
