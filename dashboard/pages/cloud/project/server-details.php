<?php
/**
 * YottaSrc Dashboard — Server Details
 * ======================================
 * 9-tab detail view for a single server within a project.
 *
 * Tabs:
 *   1. Overview       — Remote Desktop/SSH + Specifications
 *   2. Network        — Public IPs + Additional IPs
 *   3. Bandwidth      — Usage bar + over-bandwidth + FAQ
 *   4. Reinstall      — OS reinstall grid
 *   5. Upgrade Server — Package upgrades
 *   6. Abuse          — Firewall + abuse report tabs
 *   7. Activities     — Mini DataTable of server events
 *   8. Pricing        — Cost & usage breakdown
 *   9. Delete         — Delete warning + termination counter
 *
 * URL hash for direct linking: #tab-overview, #tab-network, etc.
 */

require_once __DIR__ . '/../../../layouts/config.php';
require_once __DIR__ . '/../../../layouts/project-helpers.php';

$project_id         = $_GET['id']         ?? '';
$server_id          = $_GET['server']     ?? 'CLY806752';
$current_project    = cloud_require_project($project_id);
$project_nav_active = 'servers';

// Mock server data
$server = [
    'name'       => $server_id,
    'package'    => 'CLW1',
    'os'         => 'Windows Server 2025',
    'os_family'  => 'windows',
    'cpu'        => ['cores' => 2, 'arch' => 'x64'],
    'ram'        => ['size' => 4, 'type' => 'DDR4'],
    'ssd'        => ['size' => 50, 'type' => 'NVMe'],
    'bandwidth'  => ['used' => 0, 'max' => 5, 'speed' => '10 Gbit/s'],
    'status'     => 'active',
    'ip'         => '107.161.174.200',
    'location'   => 'Turkey',
    'location_flag' => 'tr',
    'username'   => 'admin',
    'password'   => 'BbBQznCZI5uQM2fv',
    'usage'      => 0.01,
    'price_m'    => 7.49,
    'price_h'    => 0.0109,
    'cycle'      => 1,
];

// Demo controls via query params:
//   ?power=off               — server is powered off
//   ?created=recent          — show "just created" warning
$server['power']           = ($_GET['power'] ?? 'on') === 'off' ? 'off' : 'on';
$server['created_recently'] = ($_GET['created'] ?? '') === 'recent';

$page_title = $server['name'] . ' — ' . SITE_NAME;
$breadcrumbs_data = [
    ['label' => __('nav_dashboard'),                                         'url' => DASH_BASE_PATH . '/'],
    ['label' => __('cloud_title'),                                            'url' => DASH_BASE_PATH . '/pages/cloud/index.php'],
    ['label' => '#' . $current_project['id'] . ' - ' . $current_project['name'], 'url' => cloud_project_url('servers', $current_project['id'])],
    ['label' => $server['name'], 'url' => null],
];

require_once __DIR__ . '/../../../layouts/project-shell.php';

$page_state = $_GET['state'] ?? 'active';
?>

<?php if ($page_state === 'error'): ?>
    <div class="db-card"><?php $error_retry = true; include __DIR__ . '/../../../components/error-state.php'; ?></div>

<?php elseif ($page_state === 'loading'): ?>
    <!-- Header skeleton -->
    <div style="display:flex; justify-content:space-between; gap:16px; margin-bottom:14px; padding-bottom:16px; border-bottom:1px solid var(--border-primary); flex-wrap:wrap;">
        <div style="display:flex; gap:14px; flex:1; min-width:260px;">
            <div class="db-skeleton" style="width:52px; height:52px; border-radius:var(--radius-sm);"></div>
            <div style="flex:1;">
                <div class="db-skeleton db-skeleton--heading" style="width:40%; margin-bottom:6px;"></div>
                <div class="db-skeleton db-skeleton--text" style="width:60%;"></div>
            </div>
        </div>
        <div style="display:flex; gap:8px;">
            <div class="db-skeleton" style="width:38px; height:38px; border-radius:var(--radius-sm);"></div>
            <div class="db-skeleton" style="width:120px; height:38px; border-radius:var(--radius-sm);"></div>
            <div class="db-skeleton" style="width:100px; height:38px; border-radius:var(--radius-sm);"></div>
        </div>
    </div>
    <!-- Tabs skeleton -->
    <div style="display:flex; gap:6px; margin-bottom:20px; overflow-x:auto;">
        <?php for ($i = 0; $i < 9; $i++): ?>
        <div class="db-skeleton" style="width:<?php echo 80 + rand(20, 60); ?>px; height:38px; border-radius:var(--radius-sm); flex-shrink:0;"></div>
        <?php endfor; ?>
    </div>
    <!-- Content skeleton: Remote access cards + Specs grid -->
    <div class="db-skeleton db-skeleton--heading" style="width:30%; margin-bottom:14px;"></div>
    <div style="display:grid; grid-template-columns:repeat(4, 1fr); gap:12px; margin-bottom:24px;">
        <?php for ($i = 0; $i < 4; $i++): ?>
        <div class="db-skeleton" style="height:92px; border-radius:var(--radius-md);"></div>
        <?php endfor; ?>
    </div>
    <div class="db-skeleton db-skeleton--heading" style="width:25%; margin-bottom:14px;"></div>
    <div style="display:grid; grid-template-columns:repeat(6, 1fr); gap:12px;">
        <?php for ($i = 0; $i < 6; $i++): ?>
        <div class="db-skeleton" style="height:116px; border-radius:var(--radius-md);"></div>
        <?php endfor; ?>
    </div>

<?php else: ?>

<!-- ═══ SERVER HEADER ═══ -->
<div class="db-srvd-header">
    <div class="db-srvd-header__left">
        <div class="db-srvd-pkg-badge"><?php echo e($server['package']); ?></div>
        <div class="db-srvd-title-block">
            <h1 class="db-srvd-title">
                <span class="db-srvd-power db-srvd-power--<?php echo e($server['power']); ?>"></span>
                <span class="db-srvd-title-view" id="srvdNameView"><?php echo e($server['name']); ?></span>
                <input type="text" class="db-srvd-title-input" id="srvdNameInput" value="<?php echo e($server['name']); ?>" maxlength="30" style="display:none;">
                <button class="db-srvd-title-edit" id="srvdNameEdit" title="<?php echo e(__('srvd_rename')); ?>">
                    <i class="fas fa-pen"></i>
                </button>
                <button class="db-srvd-title-save" id="srvdNameSave" style="display:none;" title="<?php echo e(__('common_save')); ?>">
                    <i class="fas fa-check"></i>
                </button>
                <button class="db-srvd-title-cancel" id="srvdNameCancel" style="display:none;" title="<?php echo e(__('common_cancel')); ?>">
                    <i class="fas fa-xmark"></i>
                </button>
            </h1>
            <div class="db-srvd-meta">
                <span class="db-srvd-meta-item"><i class="fas fa-globe"></i> <?php echo e($server['ip']); ?></span>
                <span class="db-srvd-meta-item"><span class="fi fi-<?php echo e($server['location_flag']); ?>"></span> <?php echo e($server['location']); ?></span>
            </div>
        </div>
    </div>
    <div class="db-srvd-header__right">
        <button class="db-srvd-action-btn db-srvd-action-btn--console" onclick="DashModal.open('consoleModal')" title="<?php echo e(__('srvd_console_title')); ?>">
            <i class="fas fa-terminal"></i>
        </button>
        <div class="db-dropdown-wrapper">
            <button class="db-srvd-action-btn" data-dropdown-toggle>
                <i class="fas fa-ellipsis-vertical"></i> <span class="db-srvd-action-btn__label"><?php echo e(__('srvd_actions')); ?></span> <i class="fas fa-chevron-down" style="font-size:0.6rem;"></i>
            </button>
            <div class="db-dropdown-menu">
                <button class="db-dropdown-item" data-srvd-action="restart"><i class="fas fa-rotate"></i> <?php echo e(__('srvd_action_restart')); ?></button>
                <button class="db-dropdown-item" data-srvd-action="stop"><i class="fas fa-stop"></i> <?php echo e(__('srvd_action_stop')); ?></button>
                <button class="db-dropdown-item" data-srvd-action="snapshot"><i class="fas fa-camera"></i> <?php echo e(__('srvd_action_snapshot')); ?></button>
                <div class="db-dropdown-divider"></div>
                <button class="db-dropdown-item" data-srvd-action="reset_password"><i class="fas fa-key"></i> <?php echo e(__('srvd_action_reset_pw')); ?></button>
            </div>
        </div>
        <button id="srvdPowerBtn" class="db-srvd-power-btn db-srvd-power-btn--<?php echo e($server['power']); ?>" data-power="<?php echo e($server['power']); ?>">
            <i class="fas fa-power-off"></i> <span id="srvdPowerLabel"><?php echo e($server['power'] === 'on' ? __('srvd_power_on') : __('srvd_power_off')); ?></span>
        </button>
    </div>
</div>

<?php if (!empty($server['created_recently'])): ?>
<!-- "Just created" warning banner -->
<div class="db-srvd-warn">
    <div class="db-srvd-warn__icon"><i class="fas fa-triangle-exclamation"></i></div>
    <div class="db-srvd-warn__text">
        <strong><?php echo e(__('srvd_warn_label')); ?></strong>
        <?php echo e(__('srvd_warn_text')); ?>
    </div>
</div>
<?php endif; ?>

<!-- ═══ TAB BAR (9 tabs) ═══ -->
<div class="db-tab-bar db-srvd-tabs" data-tab-bar data-tab-content="#srvdTabs">
    <button type="button" class="db-tab-bar__btn is-active" data-tab-target="overview"><i class="fas fa-table-cells"></i> <?php echo e(__('srvd_tab_overview')); ?></button>
    <button type="button" class="db-tab-bar__btn" data-tab-target="network"><i class="fas fa-globe"></i> <?php echo e(__('srvd_tab_network')); ?></button>
    <button type="button" class="db-tab-bar__btn" data-tab-target="bandwidth"><i class="fas fa-cloud-arrow-down"></i> <?php echo e(__('srvd_tab_bandwidth')); ?></button>
    <button type="button" class="db-tab-bar__btn" data-tab-target="reinstall"><i class="fas fa-rotate"></i> <?php echo e(__('srvd_tab_reinstall')); ?></button>
    <button type="button" class="db-tab-bar__btn" data-tab-target="upgrade"><i class="fas fa-arrow-up-right-dots"></i> <?php echo e(__('srvd_tab_upgrade')); ?></button>
    <button type="button" class="db-tab-bar__btn" data-tab-target="abuse"><i class="fas fa-shield-halved"></i> <?php echo e(__('srvd_tab_abuse')); ?></button>
    <button type="button" class="db-tab-bar__btn" data-tab-target="activities"><i class="fas fa-clock-rotate-left"></i> <?php echo e(__('srvd_tab_activities')); ?></button>
    <button type="button" class="db-tab-bar__btn" data-tab-target="pricing"><i class="fas fa-coins"></i> <?php echo e(__('srvd_tab_pricing')); ?></button>
    <button type="button" class="db-tab-bar__btn db-tab-bar__btn--danger" data-tab-target="delete"><i class="fas fa-trash"></i> <?php echo e(__('srvd_tab_delete')); ?></button>
</div>

<div id="srvdTabs">

    <!-- ═══ OVERVIEW ═══ -->
    <div class="db-tab-pane is-active" data-tab-pane="overview">
        <!-- Remote Desktop Access -->
        <h3 class="db-srvd-section-title"><i class="fas fa-plug"></i> <?php echo e(__('srvd_overview_access_title')); ?></h3>
        <div class="db-srvd-access-grid">
            <div class="db-srvd-access-card">
                <div class="db-srvd-access-card__label"><i class="fas fa-globe"></i> <?php echo e(__('srvd_overview_ip')); ?></div>
                <div class="db-srvd-access-card__value">→ <?php echo e($server['ip']); ?></div>
            </div>
            <div class="db-srvd-access-card">
                <div class="db-srvd-access-card__label"><i class="fas fa-user"></i> <?php echo e(__('srvd_overview_username')); ?></div>
                <div class="db-srvd-access-card__value">→ <?php echo e($server['username']); ?></div>
            </div>
            <div class="db-srvd-access-card">
                <div class="db-srvd-access-card__label"><i class="fas fa-key"></i> <?php echo e(__('srvd_overview_password')); ?></div>
                <div class="db-srvd-access-card__value db-srvd-password" id="srvdPassword">
                    <span id="srvdPasswordText" class="db-srvd-password__hidden">••••••••••••••••</span>
                    <span id="srvdPasswordReal" style="display:none;">→ <?php echo e($server['password']); ?></span>
                    <button type="button" class="db-srvd-password-toggle" onclick="toggleSrvdPassword()"><i class="fas fa-eye" id="srvdPwdEye"></i></button>
                </div>
            </div>
            <div class="db-srvd-access-card">
                <div class="db-srvd-access-card__label"><i class="fas fa-chart-line"></i> <?php echo e(__('srvd_overview_usage')); ?></div>
                <div class="db-srvd-access-card__value">→ €<?php echo number_format($server['usage'], 2); ?></div>
            </div>
        </div>

        <!-- Specifications -->
        <h3 class="db-srvd-section-title" style="margin-top:24px;"><i class="fas fa-microchip"></i> <?php echo e(__('srvd_overview_specs_title')); ?></h3>
        <div class="db-srvd-specs-grid">
            <div class="db-srvd-spec-card">
                <div class="db-srvd-spec-card__icon" style="color:#e91e63;"><i class="fas fa-microchip"></i></div>
                <div class="db-srvd-spec-card__label"><?php echo e(__('srvd_spec_cpu')); ?></div>
                <div class="db-srvd-spec-card__value"><?php echo e($server['cpu']['cores']); ?></div>
                <div class="db-srvd-spec-card__unit">Core <small><?php echo e($server['cpu']['arch']); ?></small></div>
            </div>
            <div class="db-srvd-spec-card">
                <div class="db-srvd-spec-card__icon" style="color:#ec4899;"><i class="fas fa-memory"></i></div>
                <div class="db-srvd-spec-card__label"><?php echo e(__('srvd_spec_ram')); ?></div>
                <div class="db-srvd-spec-card__value"><?php echo e($server['ram']['size']); ?></div>
                <div class="db-srvd-spec-card__unit">GB <small><?php echo e($server['ram']['type']); ?></small></div>
            </div>
            <div class="db-srvd-spec-card">
                <div class="db-srvd-spec-card__icon" style="color:var(--brand-accent);"><i class="fas fa-hard-drive"></i></div>
                <div class="db-srvd-spec-card__label"><?php echo e(__('srvd_spec_ssd')); ?></div>
                <div class="db-srvd-spec-card__value"><?php echo e($server['ssd']['size']); ?></div>
                <div class="db-srvd-spec-card__unit">GB <small><?php echo e($server['ssd']['type']); ?></small></div>
            </div>
            <div class="db-srvd-spec-card">
                <div class="db-srvd-spec-card__icon" style="color:var(--brand-accent);"><i class="fas fa-arrows-left-right"></i></div>
                <div class="db-srvd-spec-card__label"><?php echo e(__('srvd_spec_bandwidth')); ?></div>
                <div class="db-srvd-spec-card__value"><?php echo e($server['bandwidth']['used']); ?>/<?php echo e($server['bandwidth']['max']); ?></div>
                <div class="db-srvd-spec-card__unit">TB <small><?php echo e($server['bandwidth']['speed']); ?></small></div>
            </div>
            <div class="db-srvd-spec-card">
                <div class="db-srvd-spec-card__icon" style="color:var(--brand-secondary);"><i class="fas fa-circle-check"></i></div>
                <div class="db-srvd-spec-card__label"><?php echo e(__('srvd_spec_status')); ?></div>
                <div class="db-srvd-spec-card__value" style="color:var(--brand-secondary); font-size:1rem; text-transform:uppercase;"><?php echo e($server['status']); ?></div>
            </div>
            <div class="db-srvd-spec-card">
                <div class="db-srvd-spec-card__icon" style="color:#0078d4;"><i class="fab fa-windows"></i></div>
                <div class="db-srvd-spec-card__label"><?php echo e(__('srvd_spec_image')); ?></div>
                <div class="db-srvd-spec-card__value" style="font-size:0.86rem;"><?php echo e($server['os']); ?></div>
            </div>
        </div>
    </div>

    <!-- ═══ NETWORK ═══ -->
    <div class="db-tab-pane" data-tab-pane="network">
        <div class="db-srvd-card">
            <div class="db-srvd-card__head"><i class="fas fa-globe"></i> <?php echo e(__('srvd_network_public_title')); ?></div>
            <ul class="db-srvd-notice-list">
                <li><i class="fas fa-circle"></i> <?php echo e(__('srvd_network_notice_1')); ?></li>
                <li><i class="fas fa-circle"></i> <?php echo __('srvd_network_notice_2'); ?></li>
                <li class="db-srvd-notice--warn"><i class="fas fa-circle"></i> <?php echo __('srvd_network_notice_3'); ?></li>
                <li class="db-srvd-notice--warn"><i class="fas fa-circle"></i> <?php echo e(__('srvd_network_notice_4')); ?></li>
            </ul>

            <table class="db-table" style="margin-top:16px;">
                <thead>
                    <tr>
                        <th><?php echo e(__('srvd_network_main_ip')); ?></th>
                        <th style="width:120px;"><?php echo e(__('project_col_protocol')); ?></th>
                        <th style="width:200px;">rDNS</th>
                        <th style="width:70px;">#</th>
                    </tr>
                </thead>
                <tbody>
                    <tr data-ip-row data-ip="<?php echo e($server['ip']); ?>" data-ip-type="primary">
                        <td><span class="db-proj-server-ip"><?php echo e($server['ip']); ?></span></td>
                        <td><span class="db-proj-protocol db-proj-protocol--ipv4">IPv4</span></td>
                        <td>
                            <span class="db-proj-rdns-cell">
                                <span class="db-proj-rdns db-proj-rdns--empty" data-rdns-view>—</span>
                                <button class="db-proj-rdns-edit" data-rdns-edit title="<?php echo e(__('project_ip_action_rdns')); ?>"><i class="fas fa-pen"></i></button>
                            </span>
                        </td>
                        <td>
                            <div class="db-dropdown-wrapper">
                                <button class="db-row-action db-row-action--solid" data-dropdown-toggle><i class="fas fa-ellipsis"></i></button>
                                <div class="db-dropdown-menu">
                                    <button class="db-dropdown-item" data-rdns-edit><i class="fas fa-edit"></i> <?php echo e(__('project_ip_action_rdns')); ?></button>
                                    <button class="db-dropdown-item" onclick="DashModal.open('instructionsModal')"><i class="fas fa-book"></i> <?php echo e(__('srvd_network_instructions')); ?></button>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>

            <div class="db-srvd-actions-row">
                <button class="db-btn db-btn--primary db-btn--sm" data-open-ip-modal="primary">
                    <i class="fas fa-plus"></i> <?php echo e(__('srvd_network_add_primary')); ?>
                </button>
                <button class="db-btn db-btn--secondary db-btn--sm" data-open-ip-modal="ipv6">
                    <i class="fas fa-plus"></i> <?php echo e(__('srvd_network_add_ipv6')); ?>
                </button>
            </div>
        </div>

        <div class="db-srvd-card" style="margin-top:14px;">
            <div class="db-srvd-card__head-row">
                <div class="db-srvd-card__head"><i class="fas fa-link"></i> <?php echo e(__('srvd_network_additional_title')); ?></div>
                <button class="db-btn db-btn--primary db-btn--sm" data-open-ip-modal="additional">
                    <i class="fas fa-plus"></i> <?php echo e(__('srvd_network_add_additional')); ?>
                </button>
            </div>
            <ul class="db-srvd-notice-list">
                <li><i class="fas fa-circle"></i> <?php echo e(__('srvd_network_add_notice_1')); ?></li>
                <li><i class="fas fa-circle"></i> <?php echo e(__('srvd_network_add_notice_2')); ?></li>
                <li class="db-srvd-notice--warn"><i class="fas fa-circle"></i> <?php echo __('srvd_network_add_notice_3'); ?></li>
                <li class="db-srvd-notice--warn"><i class="fas fa-circle"></i> <?php echo __('srvd_network_add_notice_4'); ?></li>
            </ul>
            <div class="db-srvd-empty-inline">
                <?php echo e(__('srvd_network_additional_empty')); ?>
            </div>
        </div>
    </div>

    <!-- ═══ BANDWIDTH ═══ -->
    <div class="db-tab-pane" data-tab-pane="bandwidth">
        <div class="db-srvd-card db-srvd-bandwidth-intro">
            <div class="db-srvd-card__head"><i class="fas fa-cloud-arrow-down"></i> <?php echo e(__('srvd_bw_title')); ?></div>
            <p class="db-srvd-card__desc"><?php echo e(__('srvd_bw_desc')); ?></p>
        </div>

        <div class="db-srvd-over-bandwidth">
            <span><?php echo e(__('srvd_bw_over_text')); ?></span>
            <button class="db-btn db-btn--primary db-btn--sm" id="srvdBwOverBtn">
                <i class="fas fa-plus"></i> <span><?php echo e(__('srvd_bw_over_btn')); ?></span>
            </button>
        </div>

        <div class="db-srvd-grid-bandwidth">
            <div class="db-srvd-card">
                <div class="db-srvd-bw-head">
                    <span class="db-srvd-card__head"><?php echo e(__('srvd_bw_usage_title')); ?></span>
                    <span class="db-srvd-bw-count"><?php echo $server['bandwidth']['used']; ?>/<?php echo $server['bandwidth']['max']; ?> TB</span>
                </div>
                <div class="db-resource-card__bar-wrap" style="margin-top:14px;">
                    <div class="db-resource-card__pct">0%</div>
                    <div class="db-resource-card__bar" style="width:0%;"></div>
                </div>
                <p class="db-srvd-bw-hint">
                    <?php echo e(__('srvd_bw_usage_hint')); ?>
                </p>
            </div>

            <div class="db-srvd-card">
                <div class="db-srvd-card__head"><i class="fas fa-circle-question"></i> <?php echo e(__('srvd_bw_faq_title')); ?></div>
                <div class="db-srvd-faq">
                    <details class="db-srvd-faq-item">
                        <summary><?php echo e(__('srvd_bw_faq_q1')); ?> <i class="fas fa-chevron-down"></i></summary>
                        <p><?php echo e(__('srvd_bw_faq_a1')); ?></p>
                    </details>
                    <details class="db-srvd-faq-item">
                        <summary><?php echo e(__('srvd_bw_faq_q2')); ?> <i class="fas fa-chevron-down"></i></summary>
                        <p><?php echo e(__('srvd_bw_faq_a2')); ?></p>
                    </details>
                    <details class="db-srvd-faq-item">
                        <summary><?php echo e(__('srvd_bw_faq_q3')); ?> <i class="fas fa-chevron-down"></i></summary>
                        <p><?php echo e(__('srvd_bw_faq_a3')); ?></p>
                    </details>
                    <details class="db-srvd-faq-item">
                        <summary><?php echo e(__('srvd_bw_faq_q4')); ?> <i class="fas fa-chevron-down"></i></summary>
                        <p><?php echo e(__('srvd_bw_faq_a4')); ?></p>
                    </details>
                </div>
            </div>
        </div>
    </div>

    <!-- ═══ REINSTALL ═══ -->
    <div class="db-tab-pane" data-tab-pane="reinstall">
        <div class="db-srvd-card">
            <div class="db-srvd-card__head"><i class="fas fa-rotate"></i> <?php echo e(__('srvd_reinstall_title')); ?></div>
            <ul class="db-srvd-notice-list">
                <li><i class="fas fa-circle"></i> <?php echo e(__('srvd_reinstall_notice_1')); ?></li>
                <li class="db-srvd-notice--warn"><i class="fas fa-circle"></i> <?php echo __('srvd_reinstall_notice_2'); ?></li>
                <li><i class="fas fa-circle"></i> <?php echo e(__('srvd_reinstall_notice_3')); ?></li>
            </ul>

            <div class="db-image-grid" style="margin-top:16px;">
                <?php
                $reinstall_images = [
                    'win-2025' => 'Windows Server 2025',
                    'win-2022' => 'Windows Server 2022',
                    'win-2019' => 'Windows Server 2019',
                    'win-2016' => 'Windows Server 2016',
                    'win-2012' => 'Windows Server 2012',
                    'win-7'    => 'Windows 7',
                    'win-11'   => 'Windows 11',
                    'win-10'   => 'Windows 10',
                ];
                foreach ($reinstall_images as $slug => $name):
                    $selected = $slug === 'win-10' ? ' is-selected' : '';
                ?>
                <button type="button" class="db-image-card<?php echo $selected; ?>" data-reinstall-image="<?php echo e($slug); ?>">
                    <i class="fab fa-windows db-image-card__icon" style="color:#0078d4;"></i>
                    <span class="db-image-card__name"><?php echo e($name); ?></span>
                    <i class="fas fa-check-circle db-image-card__check"></i>
                </button>
                <?php endforeach; ?>
            </div>

            <div style="display:flex; justify-content:center; margin-top:18px;">
                <button class="db-btn db-btn--danger" id="srvdReinstallBtn">
                    <i class="fas fa-rotate"></i> <?php echo e(__('srvd_reinstall_btn')); ?>
                </button>
            </div>
        </div>
    </div>

    <!-- ═══ UPGRADE ═══ -->
    <div class="db-tab-pane" data-tab-pane="upgrade">
        <div class="db-srvd-card">
            <div class="db-srvd-card__head"><i class="fas fa-arrow-up-right-dots"></i> <?php echo e(__('srvd_upgrade_title')); ?></div>
            <div class="db-cloud-info" style="margin-top:10px;">
                <i class="fas fa-circle-info"></i>
                <span><?php echo e(__('srvd_upgrade_warn')); ?></span>
            </div>
            <div class="db-srvd-current-pkg">
                <i class="fas fa-triangle-exclamation"></i>
                <?php echo e(__('srvd_upgrade_current_label')); ?>
                <strong><?php echo e($server['package']); ?></strong>
            </div>

            <div class="db-package-grid" style="margin-top:16px;">
                <?php
                $upgrade_packages = [
                    ['id'=>'CLW2', 'arch'=>'x64', 'cores'=>4, 'ram'=>'8GB', 'storage'=>'100GB NVMe', 'bandwidth'=>'5TB', 'speed'=>'10 Gbit/s', 'price_m'=>12.99, 'price_h'=>0.0189],
                    ['id'=>'CLW3', 'arch'=>'x64', 'cores'=>8, 'ram'=>'16GB', 'storage'=>'150GB NVMe', 'bandwidth'=>'5TB', 'speed'=>'10 Gbit/s', 'price_m'=>21.99, 'price_h'=>0.0319],
                    ['id'=>'CLW4', 'arch'=>'x64', 'cores'=>16, 'ram'=>'32GB', 'storage'=>'200GB NVMe', 'bandwidth'=>'5TB', 'speed'=>'10 Gbit/s', 'price_m'=>40.00, 'price_h'=>0.0579, 'selected'=>true],
                ];
                foreach ($upgrade_packages as $pkg):
                    $sel = !empty($pkg['selected']) ? ' is-selected' : '';
                ?>
                <button type="button" class="db-package-card<?php echo $sel; ?>">
                    <div class="db-package-card__head">
                        <div class="db-package-card__id">
                            <?php echo e($pkg['id']); ?>
                            <span class="db-package-card__arch"><?php echo e($pkg['arch']); ?></span>
                        </div>
                        <div class="db-package-card__price">
                            <span class="db-package-card__price-m">€<?php echo number_format($pkg['price_m'], 2); ?><small>/m</small></span>
                            <span class="db-package-card__price-h">€<?php echo number_format($pkg['price_h'], 4); ?><small>/h</small></span>
                        </div>
                    </div>
                    <div class="db-package-card__specs">
                        <span class="db-package-spec db-package-spec--accent"><?php echo $pkg['cores']; ?> Core</span>
                        <span class="db-package-spec db-package-spec--accent"><?php echo e($pkg['ram']); ?> RAM</span>
                        <span class="db-package-spec db-package-spec--accent"><?php echo e($pkg['storage']); ?></span>
                    </div>
                    <div class="db-package-card__specs">
                        <span class="db-package-spec db-package-spec--info"><?php echo e($pkg['bandwidth']); ?></span>
                        <span class="db-package-spec db-package-spec--info"><?php echo e($pkg['speed']); ?></span>
                        <span class="db-package-spec db-package-spec--primary">IPv4</span>
                        <span class="db-package-spec db-package-spec--accent">IPv6</span>
                    </div>
                    <i class="fas fa-check-circle db-package-card__check"></i>
                </button>
                <?php endforeach; ?>
            </div>

            <div style="display:flex; justify-content:center; margin-top:18px;">
                <button class="db-btn db-btn--primary" id="srvdUpgradeBtn">
                    <i class="fas fa-arrow-up"></i> <?php echo e(__('srvd_upgrade_btn')); ?>
                </button>
            </div>
        </div>
    </div>

    <!-- ═══ ABUSE ═══ -->
    <div class="db-tab-pane" data-tab-pane="abuse">
        <div class="db-srvd-card">
            <div class="db-srvd-card__head-row">
                <div class="db-srvd-card__head"><i class="fas fa-shield-halved"></i> <?php echo e(__('srvd_abuse_title')); ?></div>
                <button class="db-btn db-btn--secondary db-btn--sm" onclick="DashModal.open('firewallModal')">
                    <i class="fas fa-fire"></i> <?php echo e(__('srvd_abuse_firewall')); ?>
                </button>
            </div>
            <ul class="db-srvd-notice-list">
                <li><i class="fas fa-circle"></i> <strong><?php echo e(__('srvd_abuse_notice_1_b')); ?></strong> <?php echo e(__('srvd_abuse_notice_1')); ?></li>
                <li class="db-srvd-notice--warn"><i class="fas fa-circle"></i> <?php echo e(__('srvd_abuse_notice_2')); ?></li>
                <li><i class="fas fa-circle"></i> <?php echo e(__('srvd_abuse_notice_3')); ?></li>
                <li><i class="fas fa-circle"></i> <?php echo e(__('srvd_abuse_notice_4')); ?></li>
                <li><i class="fas fa-circle"></i> <?php echo e(__('srvd_abuse_notice_5')); ?></li>
            </ul>
        </div>

        <div class="db-srvd-card" style="margin-top:14px;">
            <div class="db-srvd-card__head"><i class="fas fa-flag"></i> <?php echo e(__('srvd_abuse_reports_title')); ?></div>
            <div class="db-tab-bar" data-tab-bar data-tab-content="#abuseTabs" data-tab-hash-prefix="abuse-" data-tab-no-url="1" style="margin-top:12px;">
                <button type="button" class="db-tab-bar__btn is-active" data-tab-target="pending"><i class="fas fa-circle-notch"></i> <?php echo e(__('srvd_abuse_pending')); ?> <span class="db-tab-bar__count">0</span></button>
                <button type="button" class="db-tab-bar__btn" data-tab-target="review"><i class="fas fa-eye"></i> <?php echo e(__('srvd_abuse_review')); ?> <span class="db-tab-bar__count">0</span></button>
                <button type="button" class="db-tab-bar__btn" data-tab-target="suspended"><i class="fas fa-pause"></i> <?php echo e(__('srvd_abuse_suspended')); ?> <span class="db-tab-bar__count">0</span></button>
                <button type="button" class="db-tab-bar__btn" data-tab-target="solved"><i class="fas fa-check"></i> <?php echo e(__('srvd_abuse_solved')); ?> <span class="db-tab-bar__count">0</span></button>
            </div>
            <div id="abuseTabs">
                <div class="db-tab-pane is-active" data-tab-pane="pending"><div class="db-srvd-ok-state"><i class="fas fa-circle-check"></i> <?php echo e(__('srvd_abuse_ok')); ?></div></div>
                <div class="db-tab-pane" data-tab-pane="review"><div class="db-srvd-ok-state"><i class="fas fa-circle-check"></i> <?php echo e(__('srvd_abuse_ok')); ?></div></div>
                <div class="db-tab-pane" data-tab-pane="suspended"><div class="db-srvd-ok-state"><i class="fas fa-circle-check"></i> <?php echo e(__('srvd_abuse_ok')); ?></div></div>
                <div class="db-tab-pane" data-tab-pane="solved"><div class="db-srvd-ok-state"><i class="fas fa-circle-check"></i> <?php echo e(__('srvd_abuse_ok')); ?></div></div>
            </div>
        </div>
    </div>

    <!-- ═══ ACTIVITIES ═══ -->
    <div class="db-tab-pane" data-tab-pane="activities">
        <div class="db-srvd-card">
            <div class="db-srvd-card__head"><i class="fas fa-clock-rotate-left"></i> <?php echo e(__('srvd_activities_title')); ?></div>
            <table class="db-table" id="activitiesTable" data-table-tools style="margin-top:12px;">
                <thead>
                    <tr>
                        <th style="width:60px;">#</th>
                        <th class="db-table-sortable" data-sort-key="activity"><?php echo e(__('srvd_activities_col')); ?> <span class="db-sort-icon"><i class="fas fa-sort"></i></span></th>
                        <th class="db-table-sortable" data-sort-key="date" style="width:200px;"><?php echo e(__('srvd_activities_date')); ?> <span class="db-sort-icon"><i class="fas fa-sort"></i></span></th>
                    </tr>
                </thead>
                <tbody>
                    <tr data-row data-activity="create server" data-date="1 minute ago">
                        <td>1</td>
                        <td><strong><?php echo e(__('srvd_act_create_server')); ?></strong></td>
                        <td>1 minute ago</td>
                    </tr>
                    <tr data-table-empty>
                        <td colspan="3"><div class="db-table-empty-state"><i class="fas fa-magnifying-glass"></i> No activities.</div></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- ═══ PRICING ═══ -->
    <div class="db-tab-pane" data-tab-pane="pricing">
        <div class="db-srvd-card">
            <div class="db-srvd-card__head"><i class="fas fa-coins"></i> <?php echo e(__('srvd_pricing_title', ['month' => date('F Y')])); ?></div>
            <ul class="db-srvd-notice-list">
                <li><i class="fas fa-circle"></i> <?php echo e(__('srvd_pricing_notice_1')); ?></li>
                <li><i class="fas fa-circle"></i> <?php echo e(__('srvd_pricing_notice_2')); ?></li>
                <li class="db-srvd-notice--warn"><i class="fas fa-circle"></i> <?php echo e(__('srvd_pricing_notice_3')); ?></li>
                <li><i class="fas fa-circle"></i> <?php echo e(__('srvd_pricing_notice_4')); ?></li>
                <li><i class="fas fa-circle"></i> <?php echo e(__('srvd_pricing_notice_5')); ?></li>
                <li class="db-srvd-notice--warn"><i class="fas fa-circle"></i> <?php echo __('srvd_pricing_notice_6'); ?></li>
            </ul>

            <div class="db-cloud-billing-summary" style="margin-top:14px;">
                <div class="db-cloud-bill-card">
                    <div class="db-cloud-bill-card__label"><?php echo e(__('srvd_pricing_hourly')); ?></div>
                    <div class="db-cloud-bill-card__value">€<?php echo number_format($server['price_h'], 4); ?></div>
                </div>
                <div class="db-cloud-bill-card">
                    <div class="db-cloud-bill-card__label"><?php echo e(__('srvd_pricing_monthly')); ?></div>
                    <div class="db-cloud-bill-card__value">€<?php echo number_format($server['price_m'], 2); ?></div>
                </div>
                <div class="db-cloud-bill-card">
                    <div class="db-cloud-bill-card__label"><?php echo e(__('srvd_pricing_cycle')); ?></div>
                    <div class="db-cloud-bill-card__value"><?php echo $server['cycle']; ?>hr</div>
                </div>
                <div class="db-cloud-bill-card" style="background:rgba(139, 92, 246, 0.1); border-color:rgba(139, 92, 246, 0.3);">
                    <div class="db-cloud-bill-card__label" style="color:var(--brand-accent);"><?php echo e(__('srvd_pricing_usage')); ?></div>
                    <div class="db-cloud-bill-card__value" style="color:var(--brand-accent);">€<?php echo number_format($server['usage'], 2); ?></div>
                </div>
            </div>

            <!-- Breakdown -->
            <div class="db-srvd-breakdown">
                <div class="db-srvd-breakdown__item">
                    <span class="db-srvd-breakdown__icon"><i class="fas fa-server"></i></span>
                    <span class="db-srvd-breakdown__label"><?php echo e(__('srvd_pricing_bk_server')); ?></span>
                    <span class="db-srvd-breakdown__value">→ €0.01 EUR</span>
                </div>
                <div class="db-srvd-breakdown__item">
                    <span class="db-srvd-breakdown__icon"><i class="fas fa-globe"></i></span>
                    <span class="db-srvd-breakdown__label"><?php echo e(__('srvd_pricing_bk_primary_ips')); ?></span>
                    <span class="db-srvd-breakdown__value">→ €0.00 EUR</span>
                </div>
                <div class="db-srvd-breakdown__item">
                    <span class="db-srvd-breakdown__icon"><i class="fas fa-link"></i></span>
                    <span class="db-srvd-breakdown__label"><?php echo e(__('srvd_pricing_bk_additional_ips')); ?></span>
                    <span class="db-srvd-breakdown__value">→ €0.00 EUR</span>
                </div>
                <div class="db-srvd-breakdown__item">
                    <span class="db-srvd-breakdown__icon"><i class="fas fa-arrows-left-right"></i></span>
                    <span class="db-srvd-breakdown__label"><?php echo e(__('srvd_pricing_bk_bandwidth')); ?></span>
                    <span class="db-srvd-breakdown__value">→ €0.00 EUR</span>
                </div>
            </div>
        </div>

        <div class="db-srvd-card" style="margin-top:14px;">
            <div class="db-srvd-card__head-row">
                <div class="db-srvd-card__head"><i class="fas fa-file-invoice"></i> <?php echo e(__('srvd_pricing_billing_records')); ?></div>
                <a href="<?php echo DASH_BASE_PATH; ?>/pages/billing/invoices.php" class="db-btn db-btn--secondary db-btn--sm">
                    <i class="fas fa-receipt"></i> <?php echo e(__('srvd_pricing_check_billing')); ?>
                </a>
            </div>
            <p class="db-srvd-card__desc"><?php echo e(__('srvd_pricing_records_desc')); ?></p>
            <div class="db-srvd-empty-inline">
                <?php echo e(__('srvd_pricing_no_usage')); ?>
            </div>
        </div>
    </div>

    <!-- ═══ DELETE ═══ -->
    <div class="db-tab-pane" data-tab-pane="delete">
        <div class="db-srvd-card db-srvd-card--danger">
            <div class="db-srvd-card__head"><i class="fas fa-trash"></i> <?php echo e(__('srvd_delete_title')); ?></div>
            <p class="db-srvd-card__desc"><?php echo e(__('srvd_delete_desc')); ?></p>
            <p class="db-srvd-card__desc db-srvd-danger-note"><u><?php echo e(__('srvd_delete_warning')); ?></u></p>
            <p class="db-srvd-card__desc"><?php echo e(__('srvd_delete_confirm_text')); ?></p>
            <p class="db-srvd-card__desc"><?php echo e(__('srvd_delete_limit_text')); ?></p>
            <div class="db-srvd-termination-count">
                <?php echo e(__('srvd_delete_count_label')); ?>: <strong>0/15</strong>
            </div>
            <div style="margin-top:16px;">
                <button class="db-btn db-btn--danger" onclick="DashModal.open('deleteServerModal')">
                    <i class="fas fa-trash"></i> <?php echo e(__('srvd_delete_btn')); ?>
                </button>
            </div>
        </div>
    </div>

</div>

<?php endif; ?>

<!-- Delete confirmation modal -->
<?php
$modal_id    = 'deleteServerModal';
$modal_title = __('srvd_delete_modal_title');
$modal_size  = 'sm';
include __DIR__ . '/../../../components/modal.php';
?>
    <div class="db-confirm-body">
        <div class="db-modal-icon db-modal-icon--danger"><i class="fas fa-triangle-exclamation"></i></div>
        <p><?php echo e(__('srvd_delete_modal_desc', ['server' => $server['name']])); ?></p>
    </div>
<?php
$modal_footer = '
    <button class="db-btn db-btn--secondary" data-modal-close>' . e(__('common_cancel')) . '</button>
    <button class="db-btn db-btn--danger" onclick="DashModal.close(this.closest(\'.db-modal-overlay\')); DashToast.show(\'success\',\'\',\'Server deletion scheduled.\');">
        <i class="fas fa-trash"></i> ' . e(__('srvd_delete_confirm_btn')) . '
    </button>
';
include __DIR__ . '/../../../components/modal-end.php';
?>

<!-- ═══════════════════════════════════════════
     ADD IP MODAL (reusable for Primary / IPv6 / Additional)
     ═══════════════════════════════════════════ -->
<?php
$modal_id    = 'addIpModal';
$modal_title = __('srvd_add_ip_title');
$modal_size  = 'sm';
include __DIR__ . '/../../../components/modal.php';
?>
    <form id="addIpForm" onsubmit="return false;">
        <p class="db-modal-lead" id="addIpDesc"><?php echo e(__('srvd_add_ip_desc_primary')); ?></p>

        <div class="db-form-group">
            <label class="db-form-label"><?php echo e(__('srvd_add_ip_protocol')); ?></label>
            <div class="db-proto-toggle" role="tablist">
                <button type="button" class="db-proto-toggle__btn is-selected" data-ip-protocol="IPv4">
                    <span class="db-proto-toggle__label">IPv4</span>
                    <span class="db-proto-toggle__sub"><?php echo e(__('srvd_add_ip_ipv4_sub')); ?></span>
                </button>
                <button type="button" class="db-proto-toggle__btn" data-ip-protocol="IPv6">
                    <span class="db-proto-toggle__label">IPv6</span>
                    <span class="db-proto-toggle__sub"><?php echo e(__('srvd_add_ip_ipv6_sub')); ?></span>
                </button>
            </div>
        </div>

        <div class="db-form-group">
            <label class="db-form-label" for="addIpRdns"><?php echo e(__('srvd_add_ip_rdns_label')); ?> <span class="db-form-label-meta">(<?php echo e(__('common_optional')); ?>)</span></label>
            <input type="text" id="addIpRdns" class="db-input" placeholder="server.example.com" autocomplete="off">
            <div class="db-form-hint"><?php echo e(__('srvd_add_ip_rdns_hint')); ?></div>
        </div>

        <div class="db-notice db-notice--warning" style="margin-top:4px;">
            <i class="fas fa-triangle-exclamation"></i>
            <span><?php echo __('srvd_add_ip_notice'); ?></span>
        </div>
    </form>
<?php
$modal_footer = '
    <button type="button" class="db-btn db-btn--secondary" data-modal-close>' . e(__('common_cancel')) . '</button>
    <button type="button" class="db-btn db-btn--primary" id="addIpSubmit">
        <i class="fas fa-plus"></i> ' . e(__('srvd_add_ip_submit')) . '
    </button>
';
include __DIR__ . '/../../../components/modal-end.php';
?>

<!-- ═══════════════════════════════════════════
     REINSTALL CONFIRM MODAL
     ═══════════════════════════════════════════ -->
<?php
$modal_id    = 'reinstallModal';
$modal_title = __('srvd_reinstall_modal_title');
$modal_size  = 'sm';
include __DIR__ . '/../../../components/modal.php';
?>
    <div class="db-confirm-body">
        <div class="db-modal-icon db-modal-icon--danger"><i class="fas fa-triangle-exclamation"></i></div>
        <p><?php echo e(__('srvd_reinstall_modal_desc')); ?></p>
        <div class="db-confirm-summary">
            <div class="db-confirm-summary__row">
                <span><?php echo e(__('srvd_reinstall_modal_target_os')); ?></span>
                <span id="reinstallTargetOs">Windows 10</span>
            </div>
            <div class="db-confirm-summary__row">
                <span><?php echo e(__('srvd_reinstall_modal_current')); ?></span>
                <span><?php echo e($server['os']); ?></span>
            </div>
        </div>
        <p class="db-srvd-danger-note" style="margin-top:14px;">
            <u><?php echo e(__('srvd_reinstall_modal_warn')); ?></u>
        </p>
    </div>
<?php
$modal_footer = '
    <button class="db-btn db-btn--secondary" data-modal-close>' . e(__('common_cancel')) . '</button>
    <button class="db-btn db-btn--danger" id="reinstallConfirmBtn">
        <i class="fas fa-rotate"></i> ' . e(__('srvd_reinstall_modal_confirm')) . '
    </button>
';
include __DIR__ . '/../../../components/modal-end.php';
?>

<!-- ═══════════════════════════════════════════
     UPGRADE CONFIRM MODAL
     ═══════════════════════════════════════════ -->
<?php
$modal_id    = 'upgradeModal';
$modal_title = __('srvd_upgrade_modal_title');
$modal_size  = 'sm';
include __DIR__ . '/../../../components/modal.php';
?>
    <div class="db-confirm-body">
        <div class="db-modal-icon db-modal-icon--info"><i class="fas fa-arrow-up-right-dots"></i></div>
        <p><?php echo e(__('srvd_upgrade_modal_desc')); ?></p>
        <div class="db-confirm-summary">
            <div class="db-confirm-summary__row">
                <span><?php echo e(__('srvd_upgrade_current_label')); ?></span>
                <span><?php echo e($server['package']); ?></span>
            </div>
            <div class="db-confirm-summary__row">
                <span><?php echo e(__('srvd_upgrade_modal_new')); ?></span>
                <span style="color:var(--brand-accent);">CLW4</span>
            </div>
            <div class="db-confirm-summary__row db-confirm-summary__row--total">
                <span><?php echo e(__('srvd_upgrade_modal_new_price')); ?></span>
                <span>€40.00/m</span>
            </div>
        </div>
    </div>
<?php
$modal_footer = '
    <button class="db-btn db-btn--secondary" data-modal-close>' . e(__('common_cancel')) . '</button>
    <button class="db-btn db-btn--primary" id="upgradeConfirmBtn">
        <i class="fas fa-check"></i> ' . e(__('srvd_upgrade_modal_confirm')) . '
    </button>
';
include __DIR__ . '/../../../components/modal-end.php';
?>

<!-- ═══════════════════════════════════════════
     FIREWALL RULES MODAL (drawer-style wider)
     ═══════════════════════════════════════════ -->
<?php
$modal_id    = 'firewallModal';
$modal_title = __('srvd_firewall_title');
$modal_size  = 'lg';
include __DIR__ . '/../../../components/modal.php';
?>
    <div class="db-firewall-body">
        <div class="db-notice db-notice--info">
            <i class="fas fa-circle-info"></i>
            <span><?php echo e(__('srvd_firewall_intro')); ?></span>
        </div>

        <div class="db-firewall-rules">
            <div class="db-firewall-rule-head">
                <span><?php echo e(__('srvd_firewall_col_protocol')); ?></span>
                <span><?php echo e(__('srvd_firewall_col_port')); ?></span>
                <span><?php echo e(__('srvd_firewall_col_source')); ?></span>
                <span><?php echo e(__('srvd_firewall_col_action')); ?></span>
                <span></span>
            </div>
            <?php
            $firewall_rules = [
                ['proto' => 'TCP', 'port' => '22',    'source' => '0.0.0.0/0', 'action' => 'allow', 'label' => 'SSH'],
                ['proto' => 'TCP', 'port' => '80',    'source' => '0.0.0.0/0', 'action' => 'allow', 'label' => 'HTTP'],
                ['proto' => 'TCP', 'port' => '443',   'source' => '0.0.0.0/0', 'action' => 'allow', 'label' => 'HTTPS'],
                ['proto' => 'UDP', 'port' => '*',     'source' => '0.0.0.0/0', 'action' => 'deny',  'label' => 'All UDP'],
                ['proto' => 'TCP', 'port' => '3389',  'source' => '0.0.0.0/0', 'action' => 'allow', 'label' => 'RDP'],
            ];
            foreach ($firewall_rules as $i => $r): ?>
            <div class="db-firewall-rule" data-fw-rule="<?php echo $i; ?>">
                <span class="db-firewall-rule__proto db-firewall-rule__proto--<?php echo strtolower($r['proto']); ?>"><?php echo e($r['proto']); ?></span>
                <span class="db-firewall-rule__port"><?php echo e($r['port']); ?></span>
                <span class="db-firewall-rule__source"><?php echo e($r['source']); ?></span>
                <span class="db-firewall-rule__action db-firewall-rule__action--<?php echo e($r['action']); ?>">
                    <?php echo e(__('srvd_firewall_action_' . $r['action'])); ?>
                </span>
                <button class="db-firewall-rule__remove" data-fw-remove="<?php echo $i; ?>" title="<?php echo e(__('common_remove')); ?>"><i class="fas fa-trash"></i></button>
            </div>
            <?php endforeach; ?>
        </div>

        <button type="button" class="db-firewall-add-btn" id="firewallAddBtn">
            <i class="fas fa-plus"></i> <?php echo e(__('srvd_firewall_add_rule')); ?>
        </button>
    </div>
<?php
$modal_footer = '
    <button class="db-btn db-btn--secondary" data-modal-close>' . e(__('common_close')) . '</button>
    <button class="db-btn db-btn--primary" id="firewallSaveBtn">
        <i class="fas fa-floppy-disk"></i> ' . e(__('common_save')) . '
    </button>
';
include __DIR__ . '/../../../components/modal-end.php';
?>

<!-- ═══════════════════════════════════════════
     CONSOLE MODAL (mock terminal)
     ═══════════════════════════════════════════ -->
<?php
$modal_id    = 'consoleModal';
$modal_title = __('srvd_console_title');
$modal_size  = 'lg';
include __DIR__ . '/../../../components/modal.php';
?>
    <div class="db-console">
        <div class="db-console__toolbar">
            <span class="db-console__status">
                <span class="db-console__dot"></span>
                <?php echo e(__('srvd_console_connected')); ?>
            </span>
            <span class="db-console__server"><?php echo e($server['ip']); ?></span>
            <button class="db-console__clear" id="consoleClear" title="<?php echo e(__('srvd_console_clear')); ?>"><i class="fas fa-broom"></i></button>
        </div>
        <div class="db-console__output" id="consoleOutput">
            <div class="db-console__line db-console__line--info">Welcome to YottaSrc Web Console v1.0.0</div>
            <div class="db-console__line db-console__line--info">Connected to <?php echo e($server['name']); ?> (<?php echo e($server['ip']); ?>)</div>
            <div class="db-console__line db-console__line--dim"><?php echo e(__('srvd_console_type_help')); ?></div>
            <div class="db-console__line">&nbsp;</div>
        </div>
        <div class="db-console__input-wrap">
            <span class="db-console__prompt"><?php echo e($server['username']); ?>@<?php echo e($server['name']); ?>:~$</span>
            <input type="text" class="db-console__input" id="consoleInput" autocomplete="off" spellcheck="false" placeholder="<?php echo e(__('srvd_console_placeholder')); ?>">
        </div>
    </div>
<?php
$modal_footer = '
    <button class="db-btn db-btn--secondary" data-modal-close>' . e(__('common_close')) . '</button>
';
include __DIR__ . '/../../../components/modal-end.php';
?>

<!-- ═══════════════════════════════════════════
     INSTRUCTIONS MODAL
     ═══════════════════════════════════════════ -->
<?php
$modal_id    = 'instructionsModal';
$modal_title = __('srvd_instructions_title');
$modal_size  = '';
include __DIR__ . '/../../../components/modal.php';
?>
    <p class="db-modal-lead"><?php echo e(__('srvd_instructions_desc')); ?></p>

    <div class="db-instructions">
        <div class="db-instructions__step">
            <div class="db-instructions__num">1</div>
            <div class="db-instructions__body">
                <h4><?php echo e(__('srvd_instructions_s1_title')); ?></h4>
                <p><?php echo e(__('srvd_instructions_s1_desc')); ?></p>
                <code class="db-instructions__code">ip addr add <?php echo e($server['ip']); ?>/24 dev eth0</code>
            </div>
        </div>
        <div class="db-instructions__step">
            <div class="db-instructions__num">2</div>
            <div class="db-instructions__body">
                <h4><?php echo e(__('srvd_instructions_s2_title')); ?></h4>
                <p><?php echo e(__('srvd_instructions_s2_desc')); ?></p>
                <code class="db-instructions__code">ip route add default via 107.161.174.1</code>
            </div>
        </div>
        <div class="db-instructions__step">
            <div class="db-instructions__num">3</div>
            <div class="db-instructions__body">
                <h4><?php echo e(__('srvd_instructions_s3_title')); ?></h4>
                <p><?php echo e(__('srvd_instructions_s3_desc')); ?></p>
                <code class="db-instructions__code">ping -c 3 8.8.8.8</code>
            </div>
        </div>
    </div>
<?php
$modal_footer = '
    <button class="db-btn db-btn--secondary" data-modal-close>' . e(__('common_close')) . '</button>
    <a href="#" class="db-btn db-btn--primary" onclick="event.preventDefault(); DashToast.show(\'info\',\'\',\'' . e(__('srvd_instructions_docs_coming')) . '\');">
        <i class="fas fa-book"></i> ' . e(__('srvd_instructions_view_docs')) . '
    </a>
';
include __DIR__ . '/../../../components/modal-end.php';
?>

<!-- ═══════════════════════════════════════════
     GENERIC CONFIRM MODAL (for Restart/Stop/Snapshot/Reset Password)
     ═══════════════════════════════════════════ -->
<?php
$modal_id    = 'srvdActionModal';
$modal_title = '';
$modal_size  = 'sm';
include __DIR__ . '/../../../components/modal.php';
?>
    <div class="db-confirm-body">
        <div class="db-modal-icon" id="srvdActionIcon"><i class="fas fa-circle-question"></i></div>
        <h3 id="srvdActionHeading" style="margin:0 0 6px; font-family:var(--font-display); font-size:1rem; font-weight:700;"></h3>
        <p id="srvdActionText"></p>
    </div>
<?php
$modal_footer = '
    <button class="db-btn db-btn--secondary" data-modal-close>' . e(__('common_cancel')) . '</button>
    <button class="db-btn db-btn--primary" id="srvdActionConfirmBtn">
        <i class="fas fa-check"></i> <span id="srvdActionConfirmLabel">' . e(__('common_confirm')) . '</span>
    </button>
';
include __DIR__ . '/../../../components/modal-end.php';
?>

<div class="db-toast-container" id="toastContainer"></div>

<script>
/* ═══════════════════════════════════════════
   SERVER NAME — inline rename
   ═══════════════════════════════════════════ */
(function () {
    var view   = document.getElementById('srvdNameView');
    var input  = document.getElementById('srvdNameInput');
    var editBtn = document.getElementById('srvdNameEdit');
    var saveBtn = document.getElementById('srvdNameSave');
    var cancelBtn = document.getElementById('srvdNameCancel');
    if (!view || !input) return;

    function enterEdit() {
        input.value = view.textContent.trim();
        view.style.display = 'none';
        editBtn.style.display = 'none';
        input.style.display = '';
        saveBtn.style.display = '';
        cancelBtn.style.display = '';
        setTimeout(function () { input.focus(); input.select(); }, 20);
    }
    function exitEdit(commit) {
        if (commit) {
            var val = (input.value || '').trim();
            if (val.length >= 3 && val.length <= 30) {
                view.textContent = val;
                if (window.DashToast) DashToast.show('success', '', <?php echo json_encode(__('srvd_rename_success')); ?>);
            } else {
                if (window.DashToast) DashToast.show('error', '', <?php echo json_encode(__('srvd_rename_invalid')); ?>);
                return;
            }
        }
        view.style.display = '';
        editBtn.style.display = '';
        input.style.display = 'none';
        saveBtn.style.display = 'none';
        cancelBtn.style.display = 'none';
    }
    editBtn.addEventListener('click', enterEdit);
    saveBtn.addEventListener('click', function () { exitEdit(true); });
    cancelBtn.addEventListener('click', function () { exitEdit(false); });
    input.addEventListener('keydown', function (e) {
        if (e.key === 'Enter') { e.preventDefault(); exitEdit(true); }
        else if (e.key === 'Escape') { exitEdit(false); }
    });
})();


/* ═══════════════════════════════════════════
   ACTIONS DROPDOWN — Restart, Stop, Snapshot, Reset Password
   ═══════════════════════════════════════════ */
(function () {
    var modal = document.getElementById('srvdActionModal');
    if (!modal) return;
    var titleEl = modal.querySelector('.db-modal-title');
    var iconEl  = document.getElementById('srvdActionIcon');
    var headingEl = document.getElementById('srvdActionHeading');
    var textEl  = document.getElementById('srvdActionText');
    var confirmBtn = document.getElementById('srvdActionConfirmBtn');
    var confirmLabel = document.getElementById('srvdActionConfirmLabel');

    var actions = {
        restart: {
            title: <?php echo json_encode(__('srvd_action_restart')); ?>,
            heading: <?php echo json_encode(__('srvd_action_restart_heading')); ?>,
            text: <?php echo json_encode(__('srvd_action_restart_text')); ?>,
            icon: 'db-modal-icon--info',
            iconHtml: '<i class="fas fa-rotate"></i>',
            confirmLabel: <?php echo json_encode(__('srvd_action_restart_confirm')); ?>,
            onConfirm: function () { showToast('success', <?php echo json_encode(__('srvd_action_restart_done')); ?>); }
        },
        stop: {
            title: <?php echo json_encode(__('srvd_action_stop')); ?>,
            heading: <?php echo json_encode(__('srvd_action_stop_heading')); ?>,
            text: <?php echo json_encode(__('srvd_action_stop_text')); ?>,
            icon: 'db-modal-icon--danger',
            iconHtml: '<i class="fas fa-stop"></i>',
            confirmLabel: <?php echo json_encode(__('srvd_action_stop_confirm')); ?>,
            onConfirm: function () {
                showToast('warning', <?php echo json_encode(__('srvd_action_stop_done')); ?>);
                var btn = document.getElementById('srvdPowerBtn');
                if (btn && btn.getAttribute('data-power') === 'on') btn.click();
            }
        },
        snapshot: {
            title: <?php echo json_encode(__('srvd_action_snapshot')); ?>,
            heading: <?php echo json_encode(__('srvd_action_snapshot_heading')); ?>,
            text: <?php echo json_encode(__('srvd_action_snapshot_text')); ?>,
            icon: 'db-modal-icon--info',
            iconHtml: '<i class="fas fa-camera"></i>',
            confirmLabel: <?php echo json_encode(__('srvd_action_snapshot_confirm')); ?>,
            onConfirm: function () { showToast('success', <?php echo json_encode(__('srvd_action_snapshot_done')); ?>); }
        },
        reset_password: {
            title: <?php echo json_encode(__('srvd_action_reset_pw')); ?>,
            heading: <?php echo json_encode(__('srvd_action_reset_pw_heading')); ?>,
            text: <?php echo json_encode(__('srvd_action_reset_pw_text')); ?>,
            icon: 'db-modal-icon--danger',
            iconHtml: '<i class="fas fa-key"></i>',
            confirmLabel: <?php echo json_encode(__('srvd_action_reset_pw_confirm')); ?>,
            onConfirm: function () { showToast('success', <?php echo json_encode(__('srvd_action_reset_pw_done')); ?>); }
        }
    };

    function showToast(type, msg) { if (window.DashToast) DashToast.show(type, '', msg); }

    var currentAction = null;
    document.querySelectorAll('[data-srvd-action]').forEach(function (btn) {
        btn.addEventListener('click', function () {
            var key = btn.getAttribute('data-srvd-action');
            var a = actions[key];
            if (!a) return;
            currentAction = a;
            titleEl.textContent = a.title;
            iconEl.className = 'db-modal-icon ' + a.icon;
            iconEl.innerHTML = a.iconHtml;
            headingEl.textContent = a.heading;
            textEl.textContent = a.text;
            confirmLabel.textContent = a.confirmLabel;
            DashModal.open('srvdActionModal');
        });
    });

    confirmBtn.addEventListener('click', function () {
        if (currentAction && currentAction.onConfirm) currentAction.onConfirm();
        DashModal.close(modal);
    });
})();


/* ═══════════════════════════════════════════
   ADD IP MODAL (Primary / IPv6 / Additional)
   ═══════════════════════════════════════════ */
(function () {
    var modal = document.getElementById('addIpModal');
    if (!modal) return;
    var titleEl = modal.querySelector('.db-modal-title');
    var descEl  = document.getElementById('addIpDesc');
    var rdnsInput = document.getElementById('addIpRdns');
    var submitBtn = document.getElementById('addIpSubmit');

    var modes = {
        primary: {
            title:    <?php echo json_encode(__('srvd_add_ip_title_primary')); ?>,
            desc:     <?php echo json_encode(__('srvd_add_ip_desc_primary')); ?>,
            protocol: 'IPv4',
            lockProto: true
        },
        ipv6: {
            title:    <?php echo json_encode(__('srvd_add_ip_title_ipv6')); ?>,
            desc:     <?php echo json_encode(__('srvd_add_ip_desc_ipv6')); ?>,
            protocol: 'IPv6',
            lockProto: true
        },
        additional: {
            title:    <?php echo json_encode(__('srvd_add_ip_title_additional')); ?>,
            desc:     <?php echo json_encode(__('srvd_add_ip_desc_additional')); ?>,
            protocol: 'IPv4',
            lockProto: false
        }
    };
    var currentMode = 'primary';
    var currentProto = 'IPv4';

    document.querySelectorAll('[data-open-ip-modal]').forEach(function (btn) {
        btn.addEventListener('click', function () {
            var mode = btn.getAttribute('data-open-ip-modal');
            var m = modes[mode];
            if (!m) return;
            currentMode = mode;
            currentProto = m.protocol;
            titleEl.textContent = m.title;
            descEl.textContent = m.desc;
            // Set selected protocol toggle
            modal.querySelectorAll('[data-ip-protocol]').forEach(function (c) {
                c.classList.toggle('is-selected', c.getAttribute('data-ip-protocol') === currentProto);
                c.style.pointerEvents = m.lockProto ? 'none' : '';
                c.style.opacity = m.lockProto && !c.classList.contains('is-selected') ? '0.35' : '1';
            });
            rdnsInput.value = '';
            DashModal.open('addIpModal');
            setTimeout(function () { rdnsInput.focus(); }, 100);
        });
    });

    modal.querySelectorAll('[data-ip-protocol]').forEach(function (c) {
        c.addEventListener('click', function () {
            currentProto = c.getAttribute('data-ip-protocol');
            modal.querySelectorAll('[data-ip-protocol]').forEach(function (x) {
                x.classList.toggle('is-selected', x === c);
            });
        });
    });

    submitBtn.addEventListener('click', function () {
        var rdns = (rdnsInput.value || '').trim();
        submitBtn.disabled = true;
        var originalHtml = submitBtn.innerHTML;
        submitBtn.innerHTML = '<i class="fas fa-circle-notch fa-spin"></i> ' + <?php echo json_encode(__('srvd_add_ip_adding')); ?>;
        setTimeout(function () {
            // Mock: generate a new IP and show it added
            var newIp = currentProto === 'IPv6'
                ? '2a06:8ec0::' + Math.floor(Math.random() * 9999).toString(16) + ':' + Math.floor(Math.random() * 9999).toString(16)
                : '107.161.174.' + (200 + Math.floor(Math.random() * 50));
            DashModal.close(modal);
            submitBtn.disabled = false;
            submitBtn.innerHTML = originalHtml;
            if (window.DashToast) {
                DashToast.show('success', '', <?php echo json_encode(__('srvd_add_ip_success')); ?> + ' ' + newIp);
            }
        }, 900);
    });
})();


/* ═══════════════════════════════════════════
   rDNS INLINE EDIT (Network tab)
   ═══════════════════════════════════════════ */
(function () {
    document.querySelectorAll('[data-rdns-edit]').forEach(function (btn) {
        btn.addEventListener('click', function (e) {
            e.stopPropagation();
            var row = btn.closest('[data-ip-row]');
            if (!row) return;
            var view = row.querySelector('[data-rdns-view]');
            if (!view) return;
            var current = view.textContent.trim();
            if (current === '—') current = '';
            var input = prompt(<?php echo json_encode(__('srvd_rdns_prompt')); ?>, current);
            if (input === null) return;
            input = input.trim();
            if (input && !/^[a-z0-9.-]+$/i.test(input)) {
                if (window.DashToast) DashToast.show('error', '', <?php echo json_encode(__('srvd_rdns_invalid')); ?>);
                return;
            }
            view.textContent = input || '—';
            view.classList.toggle('db-proj-rdns--empty', !input);
            if (window.DashToast) {
                DashToast.show('success', '', <?php echo json_encode(__('srvd_rdns_saved')); ?>);
            }
        });
    });
})();


/* ═══════════════════════════════════════════
   BANDWIDTH — Enable Over Bandwidth toggle
   ═══════════════════════════════════════════ */
(function () {
    var btn = document.getElementById('srvdBwOverBtn');
    if (!btn) return;
    var enabled = false;
    btn.addEventListener('click', function () {
        enabled = !enabled;
        btn.classList.toggle('db-btn--primary', !enabled);
        btn.classList.toggle('db-btn--secondary', enabled);
        btn.querySelector('i').className = enabled ? 'fas fa-check' : 'fas fa-plus';
        btn.querySelector('span').textContent = enabled
            ? <?php echo json_encode(__('srvd_bw_over_enabled')); ?>
            : <?php echo json_encode(__('srvd_bw_over_btn')); ?>;
        if (window.DashToast) {
            DashToast.show(enabled ? 'success' : 'info', '',
                enabled ? <?php echo json_encode(__('srvd_bw_over_on')); ?> : <?php echo json_encode(__('srvd_bw_over_off')); ?>);
        }
    });
})();


/* ═══════════════════════════════════════════
   REINSTALL — confirm modal + progress
   ═══════════════════════════════════════════ */
(function () {
    var btn = document.getElementById('srvdReinstallBtn');
    if (!btn) return;
    btn.addEventListener('click', function () {
        var selected = document.querySelector('[data-reinstall-image].is-selected');
        var os = selected ? selected.querySelector('.db-image-card__name').textContent : 'Windows 10';
        var targetEl = document.getElementById('reinstallTargetOs');
        if (targetEl) targetEl.textContent = os;
        DashModal.open('reinstallModal');
    });

    var confirmBtn = document.getElementById('reinstallConfirmBtn');
    if (!confirmBtn) return;
    confirmBtn.addEventListener('click', function () {
        confirmBtn.disabled = true;
        confirmBtn.innerHTML = '<i class="fas fa-circle-notch fa-spin"></i> ' + <?php echo json_encode(__('srvd_reinstall_starting')); ?>;
        setTimeout(function () {
            DashModal.close(document.getElementById('reinstallModal'));
            confirmBtn.disabled = false;
            confirmBtn.innerHTML = '<i class="fas fa-rotate"></i> ' + <?php echo json_encode(__('srvd_reinstall_modal_confirm')); ?>;
            if (window.DashToast) {
                DashToast.show('warning', '', <?php echo json_encode(__('srvd_reinstall_started')); ?>);
            }
        }, 1200);
    });
})();


/* ═══════════════════════════════════════════
   UPGRADE — confirm modal
   ═══════════════════════════════════════════ */
(function () {
    var btn = document.getElementById('srvdUpgradeBtn');
    if (!btn) return;
    btn.addEventListener('click', function () { DashModal.open('upgradeModal'); });
    var confirmBtn = document.getElementById('upgradeConfirmBtn');
    if (!confirmBtn) return;
    confirmBtn.addEventListener('click', function () {
        confirmBtn.disabled = true;
        confirmBtn.innerHTML = '<i class="fas fa-circle-notch fa-spin"></i> ' + <?php echo json_encode(__('srvd_upgrade_upgrading')); ?>;
        setTimeout(function () {
            DashModal.close(document.getElementById('upgradeModal'));
            confirmBtn.disabled = false;
            confirmBtn.innerHTML = '<i class="fas fa-check"></i> ' + <?php echo json_encode(__('srvd_upgrade_modal_confirm')); ?>;
            if (window.DashToast) {
                DashToast.show('success', '', <?php echo json_encode(__('srvd_upgrade_started')); ?>);
            }
        }, 1100);
    });
})();


/* ═══════════════════════════════════════════
   FIREWALL — save + add + remove rule
   ═══════════════════════════════════════════ */
(function () {
    var modal = document.getElementById('firewallModal');
    if (!modal) return;
    modal.querySelectorAll('[data-fw-remove]').forEach(function (btn) {
        btn.addEventListener('click', function () {
            var row = btn.closest('[data-fw-rule]');
            if (!row) return;
            row.style.transition = 'opacity 0.2s, transform 0.2s';
            row.style.opacity = '0';
            row.style.transform = 'translateX(-10px)';
            setTimeout(function () { row.remove(); }, 200);
        });
    });
    var addBtn = document.getElementById('firewallAddBtn');
    if (addBtn) {
        addBtn.addEventListener('click', function () {
            if (window.DashToast) DashToast.show('info', '', <?php echo json_encode(__('srvd_firewall_add_coming')); ?>);
        });
    }
    var saveBtn = document.getElementById('firewallSaveBtn');
    if (saveBtn) {
        saveBtn.addEventListener('click', function () {
            if (window.DashToast) DashToast.show('success', '', <?php echo json_encode(__('srvd_firewall_saved')); ?>);
            DashModal.close(modal);
        });
    }
})();


/* ═══════════════════════════════════════════
   CONSOLE — mock terminal
   ═══════════════════════════════════════════ */
(function () {
    var output = document.getElementById('consoleOutput');
    var input  = document.getElementById('consoleInput');
    var clearBtn = document.getElementById('consoleClear');
    if (!output || !input) return;

    var prompt = <?php echo json_encode($server['username'] . '@' . $server['name'] . ':~$'); ?>;

    function append(text, cls) {
        var line = document.createElement('div');
        line.className = 'db-console__line' + (cls ? ' db-console__line--' + cls : '');
        line.textContent = text;
        output.appendChild(line);
        output.scrollTop = output.scrollHeight;
    }

    var commands = {
        help: function () {
            append('Available commands: help, clear, whoami, date, uptime, ip, uname, ls, echo <text>', 'info');
        },
        clear: function () { output.innerHTML = ''; },
        whoami: function () { append(<?php echo json_encode($server['username']); ?>); },
        date: function () { append(new Date().toString()); },
        uptime: function () { append('up 3 minutes, 1 user, load average: 0.08, 0.02, 0.01'); },
        ip: function () {
            append('inet <?php echo e($server['ip']); ?> / 24');
        },
        uname: function () { append('Linux <?php echo e($server['name']); ?> 5.15.0-generic x86_64 GNU/Linux'); },
        ls: function () { append('bin  boot  etc  home  lib  opt  root  sbin  srv  tmp  usr  var'); },
    };

    input.addEventListener('keydown', function (e) {
        if (e.key !== 'Enter') return;
        var cmd = input.value.trim();
        input.value = '';
        if (!cmd) return;
        append(prompt + ' ' + cmd);
        var parts = cmd.split(/\s+/);
        var base = parts[0].toLowerCase();
        if (base === 'echo') {
            append(parts.slice(1).join(' '));
        } else if (commands[base]) {
            commands[base]();
        } else {
            append(base + ': command not found', 'error');
        }
    });

    if (clearBtn) clearBtn.addEventListener('click', function () { output.innerHTML = ''; });

    // Focus input when modal opens
    document.querySelectorAll('[onclick*="consoleModal"]').forEach(function (b) {
        b.addEventListener('click', function () {
            setTimeout(function () { input.focus(); }, 150);
        });
    });
})();


/* ── Password visibility toggle ── */
function toggleSrvdPassword() {
    var hid = document.getElementById('srvdPasswordText');
    var real = document.getElementById('srvdPasswordReal');
    var eye = document.getElementById('srvdPwdEye');
    if (real.style.display === 'none') {
        hid.style.display = 'none';
        real.style.display = '';
        eye.className = 'fas fa-eye-slash';
    } else {
        hid.style.display = '';
        real.style.display = 'none';
        eye.className = 'fas fa-eye';
    }
}

/* ── Power toggle (mock — real API call goes to backend) ── */
(function () {
    var btn = document.getElementById('srvdPowerBtn');
    var label = document.getElementById('srvdPowerLabel');
    var powerDot = document.querySelector('.db-srvd-power');
    if (!btn) return;
    var labels = {
        on:  <?php echo json_encode(__('srvd_power_on')); ?>,
        off: <?php echo json_encode(__('srvd_power_off')); ?>,
    };
    btn.addEventListener('click', function () {
        var current = btn.getAttribute('data-power');
        var next = current === 'on' ? 'off' : 'on';
        btn.setAttribute('data-power', next);
        btn.classList.remove('db-srvd-power-btn--on', 'db-srvd-power-btn--off');
        btn.classList.add('db-srvd-power-btn--' + next);
        if (label) label.textContent = labels[next];
        if (powerDot) {
            powerDot.classList.remove('db-srvd-power--on', 'db-srvd-power--off');
            powerDot.classList.add('db-srvd-power--' + next);
        }
        if (window.DashToast) {
            DashToast.show(
                next === 'on' ? 'success' : 'warning',
                '',
                next === 'on'
                    ? <?php echo json_encode(__('srvd_power_turned_on')); ?>
                    : <?php echo json_encode(__('srvd_power_turned_off')); ?>
            );
        }
    });
})();

/* ── Reinstall OS cards — click to select ── */
(function () {
    var cards = document.querySelectorAll('[data-reinstall-image]');
    cards.forEach(function (c) {
        c.addEventListener('click', function () {
            cards.forEach(function (x) { x.classList.toggle('is-selected', x === c); });
        });
    });
})();

/* ── Upgrade package cards — click to select ── */
(function () {
    // Scope to the upgrade tab only so other package grids aren't affected
    var upgradeTab = document.querySelector('[data-tab-pane="upgrade"]');
    if (!upgradeTab) return;
    var cards = upgradeTab.querySelectorAll('.db-package-card');
    cards.forEach(function (c) {
        c.addEventListener('click', function () {
            cards.forEach(function (x) { x.classList.toggle('is-selected', x === c); });
        });
    });
})();

/* ── Server-side: render correct tab from URL hash on load (prevents Overview flash) ── */
(function () {
    var hash = (window.location.hash || '').replace('#tab-', '');
    if (!hash) return;
    var btn = document.querySelector('.db-tab-bar[data-tab-bar] [data-tab-target="' + hash + '"]');
    if (btn) btn.click();
})();
</script>

<?php require_once __DIR__ . '/../../../layouts/footer.php'; ?>
