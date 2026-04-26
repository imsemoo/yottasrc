<?php
/**
 * YottaSrc Dashboard — Project Servers List
 * ============================================
 * Lists all servers in a project (or empty state).
 * Part of Phase 4 (will be expanded with full table + actions).
 *
 * Phase 3: minimal scaffold that proves the project-shell layout works.
 */

require_once __DIR__ . '/../../../layouts/config.php';
require_once __DIR__ . '/../../../layouts/project-helpers.php';

$project_id         = $_GET['id'] ?? '';
$current_project    = cloud_require_project($project_id);
$project_nav_active = 'servers';

$page_title = __('cloud_px_servers') . ' — #' . $current_project['id'] . ' — ' . SITE_NAME;
$breadcrumbs_data = [
    ['label' => __('nav_dashboard'),       'url' => DASH_BASE_PATH . '/'],
    ['label' => __('cloud_title'),          'url' => DASH_BASE_PATH . '/pages/cloud/index.php'],
    ['label' => '#' . $current_project['id'] . ' - ' . $current_project['name'], 'url' => cloud_project_url('servers', $current_project['id'])],
    ['label' => __('cloud_px_servers'), 'url' => null],
];

require_once __DIR__ . '/../../../layouts/project-shell.php';

/* ══════════════════════════════════════════════════════════════════════
   ███  PROJECT SERVERS  ·  MOCK DATA BLOCK  (single source of truth)  ███
   ══════════════════════════════════════════════════════════════════════
   BACKEND TEAM — PLEASE READ:

   This page lists all servers inside the current project. The hero
   counters (Total / Running / Stopped) are AUTO-computed from the
   $servers array below.

   Wiring real data:
     • Replace $servers with a DB query scoped to $current_project['id'].
     • Keep the KEYS and SHAPE identical.
     • 'os_icon' + 'os_color' drive the icon in the OS column. Use
       the same tokens used in create-server.php (--os-windows etc.).
   ══════════════════════════════════════════════════════════════════════ */

/* ──────────────────────────────────────────
   PAGE STATE
   ──────────────────────────────────────────
   'active'  → populated list (default)
   'loading' → skeleton
   'error'   → retry card
   'empty'   → auto-empties $servers for the empty state demo
   ────────────────────────────────────────── */
$page_state = $_GET['state'] ?? 'active';

/* ──────────────────────────────────────────
   SERVERS LIST  (table rows)
   ──────────────────────────────────────────
   Each row:
   • id            → internal server id (for action links)
   • name          → server name (CLYxxx)
   • package       → human-readable package summary
   • os            → OS display name
   • os_icon       → Font Awesome class (e.g. 'fab fa-windows')
   • os_color      → hex color for the icon
                     (future: replace with --os-* token lookup)
   • ip            → primary IP
   • location      → country label
   • location_flag → ISO-2 code (flag-icons)
   • status        → 'active' | 'suspended' | 'stopped' | 'terminated'
                     (drives badge color)
   • created       → relative time string
   ────────────────────────────────────────── */
$servers = ($page_state === 'empty') ? [] : [
    ['id' => 1,  'name' => 'CLY806752', 'package' => 'CLW1 | x64 | 2 CPU, 4 GB RAM, 50 GB SSD',   'os' => 'Windows Server 2025', 'os_icon' => 'fab fa-windows',        'os_color' => '#0078d4', 'ip' => '107.161.174.200', 'location' => 'Turkey',        'location_flag' => 'tr', 'status' => 'active',    'created' => '1 minute ago'],
    ['id' => 2,  'name' => 'CLY806731', 'package' => 'CLY3 | x86 | 4 CPU, 8 GB RAM, 100 GB NVMe', 'os' => 'Ubuntu 22.04',        'os_icon' => 'fab fa-ubuntu',         'os_color' => '#e95420', 'ip' => '185.225.49.42',   'location' => 'Germany',       'location_flag' => 'de', 'status' => 'active',    'created' => '3 hours ago'],
    ['id' => 3,  'name' => 'CLY806702', 'package' => 'CLH5 | x86 | 4 CPU, 4 GB RAM, 40 GB NVMe',  'os' => 'Debian 12',           'os_icon' => 'fab fa-debian',         'os_color' => '#a81d33', 'ip' => '51.222.18.77',    'location' => 'France',        'location_flag' => 'fr', 'status' => 'suspended', 'created' => '2 days ago'],
    ['id' => 4,  'name' => 'CLY806698', 'package' => 'CLY2 | x64 | 2 CPU, 4 GB RAM, 60 GB NVMe',  'os' => 'AlmaLinux 9',         'os_icon' => 'fas fa-circle-nodes',   'os_color' => '#0d597f', 'ip' => '45.90.62.18',     'location' => 'Netherlands',   'location_flag' => 'nl', 'status' => 'active',    'created' => '4 days ago'],
    ['id' => 5,  'name' => 'CLY806654', 'package' => 'CLW2 | x64 | 4 CPU, 8 GB RAM, 120 GB SSD',  'os' => 'Windows Server 2022', 'os_icon' => 'fab fa-windows',        'os_color' => '#0078d4', 'ip' => '107.161.174.188', 'location' => 'Turkey',        'location_flag' => 'tr', 'status' => 'active',    'created' => '6 days ago'],
    ['id' => 6,  'name' => 'CLY806601', 'package' => 'CLY1 | x64 | 1 CPU, 2 GB RAM, 30 GB SSD',   'os' => 'CentOS Stream 9',     'os_icon' => 'fas fa-c',              'os_color' => '#932279', 'ip' => '185.225.49.201',  'location' => 'Germany',       'location_flag' => 'de', 'status' => 'active',    'created' => '8 days ago'],
    ['id' => 7,  'name' => 'CLY806588', 'package' => 'CLH5 | x86 | 4 CPU, 4 GB RAM, 40 GB NVMe',  'os' => 'Ubuntu 24.04',        'os_icon' => 'fab fa-ubuntu',         'os_color' => '#e95420', 'ip' => '51.222.18.112',   'location' => 'France',        'location_flag' => 'fr', 'status' => 'active',    'created' => '10 days ago'],
    ['id' => 8,  'name' => 'CLY806547', 'package' => 'CLY4 | x64 | 6 CPU, 16 GB RAM, 200 GB NVMe','os' => 'Rocky Linux 9',       'os_icon' => 'fas fa-mountain',       'os_color' => '#10b981', 'ip' => '203.0.113.45',    'location' => 'United States', 'location_flag' => 'us', 'status' => 'active',    'created' => '12 days ago'],
    ['id' => 9,  'name' => 'CLY806512', 'package' => 'CLW1 | x64 | 2 CPU, 4 GB RAM, 50 GB SSD',   'os' => 'Windows Server 2019', 'os_icon' => 'fab fa-windows',        'os_color' => '#0078d4', 'ip' => '198.51.100.22',   'location' => 'United Kingdom','location_flag' => 'gb', 'status' => 'suspended', 'created' => '14 days ago'],
    ['id' => 10, 'name' => 'CLY806488', 'package' => 'CLH3 | x86 | 2 CPU, 2 GB RAM, 25 GB NVMe',  'os' => 'Debian 11',           'os_icon' => 'fab fa-debian',         'os_color' => '#a81d33', 'ip' => '192.0.2.155',     'location' => 'Poland',        'location_flag' => 'pl', 'status' => 'active',    'created' => '16 days ago'],
    ['id' => 11, 'name' => 'CLY806444', 'package' => 'CLY2 | x64 | 2 CPU, 4 GB RAM, 60 GB NVMe',  'os' => 'Ubuntu 22.04',        'os_icon' => 'fab fa-ubuntu',         'os_color' => '#e95420', 'ip' => '172.16.55.33',    'location' => 'Germany',       'location_flag' => 'de', 'status' => 'active',    'created' => '18 days ago'],
    ['id' => 12, 'name' => 'CLY806399', 'package' => 'CLW3 | x64 | 8 CPU, 16 GB RAM, 250 GB SSD', 'os' => 'Windows Server 2025', 'os_icon' => 'fab fa-windows',        'os_color' => '#0078d4', 'ip' => '107.161.175.10',  'location' => 'Turkey',        'location_flag' => 'tr', 'status' => 'active',    'created' => '20 days ago'],
    ['id' => 13, 'name' => 'CLY806355', 'package' => 'CLH5 | x86 | 4 CPU, 4 GB RAM, 40 GB NVMe',  'os' => 'Fedora 39',           'os_icon' => 'fab fa-fedora',         'os_color' => '#3c6eb4', 'ip' => '198.18.0.77',     'location' => 'Canada',        'location_flag' => 'ca', 'status' => 'active',    'created' => '22 days ago'],
    ['id' => 14, 'name' => 'CLY806301', 'package' => 'CLY1 | x64 | 1 CPU, 2 GB RAM, 30 GB SSD',   'os' => 'Ubuntu 20.04',        'os_icon' => 'fab fa-ubuntu',         'os_color' => '#e95420', 'ip' => '203.0.113.201',   'location' => 'Singapore',     'location_flag' => 'sg', 'status' => 'terminated','created' => '28 days ago'],
    ['id' => 15, 'name' => 'CLY806277', 'package' => 'CLY3 | x86 | 4 CPU, 8 GB RAM, 100 GB NVMe', 'os' => 'AlmaLinux 9',         'os_icon' => 'fas fa-circle-nodes',   'os_color' => '#0d597f', 'ip' => '45.90.62.201',    'location' => 'Netherlands',   'location_flag' => 'nl', 'status' => 'active',    'created' => '1 month ago'],
    ['id' => 16, 'name' => 'CLY806222', 'package' => 'CLW2 | x64 | 4 CPU, 8 GB RAM, 120 GB SSD',  'os' => 'Windows Server 2022', 'os_icon' => 'fab fa-windows',        'os_color' => '#0078d4', 'ip' => '51.222.19.55',    'location' => 'France',        'location_flag' => 'fr', 'status' => 'suspended', 'created' => '1 month ago'],
    ['id' => 17, 'name' => 'CLY806188', 'package' => 'CLY2 | x64 | 2 CPU, 4 GB RAM, 60 GB NVMe',  'os' => 'Rocky Linux 9',       'os_icon' => 'fas fa-mountain',       'os_color' => '#10b981', 'ip' => '192.0.2.88',      'location' => 'United States', 'location_flag' => 'us', 'status' => 'active',    'created' => '2 months ago'],
    ['id' => 18, 'name' => 'CLY806140', 'package' => 'CLH3 | x86 | 2 CPU, 2 GB RAM, 25 GB NVMe',  'os' => 'Debian 12',           'os_icon' => 'fab fa-debian',         'os_color' => '#a81d33', 'ip' => '198.51.100.142',  'location' => 'United Kingdom','location_flag' => 'gb', 'status' => 'active',    'created' => '2 months ago'],
    ['id' => 19, 'name' => 'CLY806099', 'package' => 'CLW1 | x64 | 2 CPU, 4 GB RAM, 50 GB SSD',   'os' => 'Windows Server 2019', 'os_icon' => 'fab fa-windows',        'os_color' => '#0078d4', 'ip' => '185.225.50.17',   'location' => 'Germany',       'location_flag' => 'de', 'status' => 'active',    'created' => '2 months ago'],
    ['id' => 20, 'name' => 'CLY806055', 'package' => 'CLY4 | x64 | 6 CPU, 16 GB RAM, 200 GB NVMe','os' => 'Ubuntu 24.04',        'os_icon' => 'fab fa-ubuntu',         'os_color' => '#e95420', 'ip' => '107.161.176.22',  'location' => 'Turkey',        'location_flag' => 'tr', 'status' => 'active',    'created' => '3 months ago'],
    ['id' => 21, 'name' => 'CLY806010', 'package' => 'CLH5 | x86 | 4 CPU, 4 GB RAM, 40 GB NVMe',  'os' => 'CentOS Stream 9',     'os_icon' => 'fas fa-c',              'os_color' => '#932279', 'ip' => '172.16.12.99',    'location' => 'Poland',        'location_flag' => 'pl', 'status' => 'suspended', 'created' => '3 months ago'],
    ['id' => 22, 'name' => 'CLY805977', 'package' => 'CLY1 | x64 | 1 CPU, 2 GB RAM, 30 GB SSD',   'os' => 'Fedora 39',           'os_icon' => 'fab fa-fedora',         'os_color' => '#3c6eb4', 'ip' => '203.0.113.254',   'location' => 'Canada',        'location_flag' => 'ca', 'status' => 'active',    'created' => '4 months ago'],
    ['id' => 23, 'name' => 'CLY805933', 'package' => 'CLY3 | x86 | 4 CPU, 8 GB RAM, 100 GB NVMe', 'os' => 'Ubuntu 22.04',        'os_icon' => 'fab fa-ubuntu',         'os_color' => '#e95420', 'ip' => '198.18.0.201',    'location' => 'Singapore',     'location_flag' => 'sg', 'status' => 'active',    'created' => '5 months ago'],
];

/* ══════════════  END OF MOCK DATA  ══════════════ */
?>

<?php
$active_count    = count(array_filter($servers, fn($s) => $s['status'] === 'active'));
$suspended_count = count(array_filter($servers, fn($s) => $s['status'] === 'suspended'));

$hero_eyebrow = __('cloud_px_servers');
$hero_title   = $current_project['name'];
$hero_sub     = __('project_pro_sub_servers');
$hero_stats   = empty($servers) ? null : [
    ['icon' => 'fa-server',       'label' => __('project_pro_stat_total'),     'value' => count($servers), 'seed' => 0],
    ['icon' => 'fa-circle-check', 'label' => __('srvd_status_running'),   'value' => $active_count,   'seed' => 1],
    ['icon' => 'fa-circle-pause', 'label' => __('srvd_status_stopped'),   'value' => $suspended_count,'seed' => 3],
    ['icon' => 'fa-clock',        'label' => __('srvd_backup_col_date'),   'value' => $current_project['created'], 'seed' => 2],
];
$hero_actions = '<a href="' . e(cloud_project_url('create-server', $current_project['id'])) . '" class="ds-btn ds-btn--primary"><i class="fas fa-plus"></i> <span>' . e(__('create_confirm_title')) . '</span></a>';
include __DIR__ . '/../../../components/project-pro-hero.php';
unset($hero_eyebrow, $hero_title, $hero_sub, $hero_stats, $hero_actions);
?>

<?php if ($page_state === 'error'): ?>
    <div class="db-card"><?php $error_retry = true; include __DIR__ . '/../../../components/error-state.php'; ?></div>

<?php elseif ($page_state === 'loading'): ?>
    <?php $skel_rows = 3; $skel_cols = 7; $skel_has_icon = false; $skel_has_filters = true; include __DIR__ . '/../../../components/skeleton-table.php'; ?>

<?php elseif (empty($servers)): ?>
    <?php
    ob_start();
    ?>
    <div class="db-empty-hint">
        <i class="fas fa-circle-info"></i>
        <span>
            <?php echo e(__('project_no_servers_hint_prefix')); ?>
            <a href="<?php echo e(cloud_project_url('create-server', $current_project['id'])); ?>" class="db-empty-hint__link">
                <?php echo e(__('create_confirm_title')); ?>
            </a>
            <?php echo e(__('project_no_servers_hint_suffix')); ?>
        </span>
    </div>
    <?php
    $es_action = ob_get_clean();
    $es_icon   = 'fa-server';
    $es_title  = __('project_no_servers_title');
    $es_desc   = __('project_no_servers_desc');
    include __DIR__ . '/../../../components/empty-state.php';
    ?>

<?php else: ?>

    <!-- Servers table (Phase 4 will expand with real data) -->
    <div class="db-card">
        <!-- ═══ FILTER BAR ═══ -->
        <div class="db-fbar">
            <div class="db-fbar__top">
                <div class="db-fbar__search">
                    <i class="fas fa-magnifying-glass"></i>
                    <input type="text" id="serversSearch" data-table-search="serversTable" placeholder="<?php echo e(__('project_servers_search_ph')); ?>">
                </div>
                <div class="db-fbar__tools">
                    <select class="db-fbar__sort" data-table-filter="serversTable" data-filter-key="status">
                        <option value=""><?php echo e(__('aff_ref_filter_all')); ?></option>
                        <option value="active"><?php echo e(__('status_active')); ?></option>
                        <option value="suspended"><?php echo e(__('status_suspended')); ?></option>
                        <option value="terminated"><?php echo e(__('status_terminated')); ?></option>
                    </select>
                    <?php include __DIR__ . '/../../../components/export-dropdown.php'; ?>
                    <div class="db-view-switch" data-view-switch="cloud_servers">
                        <button type="button" class="db-view-switch__btn active" data-view="table" title="<?php echo e(__('view_table')); ?>"><i class="fas fa-list"></i></button>
                        <button type="button" class="db-view-switch__btn" data-view="cards" title="<?php echo e(__('view_cards')); ?>"><i class="fas fa-grip"></i></button>
                    </div>
                </div>
            </div>
        </div>

        <div class="db-view" id="view-table">
        <div class="db-card-body--table db-card-body--no-border-top">
            <div class="db-table-wrapper">
                <table class="db-table" id="serversTable" data-table-tools>
                    <thead>
                        <tr>
                            <th style="width:60px;">#</th>
                            <th class="db-table-sortable" data-sort-key="name"><?php echo e(__('dom_dns_name')); ?> <span class="db-sort-icon"><i class="fas fa-sort"></i></span></th>
                            <th class="db-table-sortable db-table-hide-tablet" data-sort-key="os"><?php echo e(__('project_col_os')); ?> <span class="db-sort-icon"><i class="fas fa-sort"></i></span></th>
                            <th class="db-table-sortable" data-sort-key="ip"><?php echo e(__('cpanel_ip')); ?> <span class="db-sort-icon"><i class="fas fa-sort"></i></span></th>
                            <th class="db-table-sortable db-table-hide-mobile" data-sort-key="location"><?php echo e(__('cpanel_fact_location')); ?> <span class="db-sort-icon"><i class="fas fa-sort"></i></span></th>
                            <th class="db-table-sortable" data-sort-key="status"><?php echo e(__('common_status')); ?> <span class="db-sort-icon"><i class="fas fa-sort"></i></span></th>
                            <th class="db-table-hide-mobile"><?php echo e(__('project_col_created')); ?></th>
                            <th style="width:60px;"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($servers as $s):
                            $srv_url = cloud_project_url('server-details', $current_project['id'], ['server' => $s['name']]);
                        ?>
                        <tr class="db-table-row-link" data-row
                            data-name="<?php echo e(strtolower($s['name'])); ?>"
                            data-os="<?php echo e(strtolower($s['os'])); ?>"
                            data-ip="<?php echo e($s['ip']); ?>"
                            data-location="<?php echo e(strtolower($s['location'])); ?>"
                            data-status="<?php echo e($s['status']); ?>"
                            onclick="window.location='<?php echo e($srv_url); ?>';">
                            <td><?php echo e($s['id']); ?></td>
                            <td>
                                <div class="db-proj-server-name">
                                    <span class="db-proj-server-name__main"><?php echo e($s['name']); ?></span>
                                    <span class="db-proj-server-name__pkg"><?php echo e($s['package']); ?></span>
                                </div>
                            </td>
                            <td class="db-table-hide-tablet">
                                <span class="db-proj-server-os">
                                    <i class="<?php echo e($s['os_icon']); ?>" style="color:<?php echo e($s['os_color']); ?>;"></i>
                                    <?php echo e($s['os']); ?>
                                </span>
                            </td>
                            <td>
                                <button type="button" class="db-proj-server-ip db-proj-server-ip--copy" title="<?php echo e(__('common_copy')); ?>"
                                    onclick="event.stopPropagation(); DashCopy && DashCopy(this,'<?php echo e($s['ip']); ?>');">
                                    <i class="fas fa-ethernet"></i>
                                    <span><?php echo e($s['ip']); ?></span>
                                    <i class="fas fa-copy db-proj-server-ip__copy-icon"></i>
                                </button>
                            </td>
                            <td class="db-table-hide-mobile">
                                <span class="db-proj-server-loc">
                                    <span class="fi fi-<?php echo e($s['location_flag']); ?>"></span>
                                    <?php echo e($s['location']); ?>
                                </span>
                            </td>
                            <td>
                                <span class="db-badge db-badge--<?php echo e($s['status']); ?>"><?php echo e(__('status_' . $s['status'])); ?></span>
                            </td>
                            <td class="db-table-hide-mobile"><?php echo e($s['created']); ?></td>
                            <td>
                                <div class="db-row-actions db-row-actions--solid" onclick="event.stopPropagation();">
                                    <a href="<?php echo e($srv_url); ?>" class="db-row-action db-row-action--solid db-row-action--primary" data-tooltip="<?php echo e(__('common_open')); ?>"><i class="fas fa-arrow-up-right-from-square"></i></a>
                                    <div class="db-dropdown-wrapper">
                                        <button class="db-row-action db-row-action--solid db-row-action--menu" data-dropdown-toggle><i class="fas fa-ellipsis-vertical"></i></button>
                                        <div class="db-dropdown-menu">
                                            <a href="<?php echo e($srv_url); ?>" class="db-dropdown-item"><i class="fas fa-eye"></i> <?php echo e(__('common_view')); ?></a>
                                            <button class="db-dropdown-item" onclick="DashToast.show('info','','Opening SSH...')"><i class="fas fa-terminal"></i> SSH</button>
                                            <button class="db-dropdown-item" onclick="DashToast.show('info','','Rebooting...')"><i class="fas fa-rotate-right"></i> <?php echo e(__('services_reboot')); ?></button>
                                            <div class="db-dropdown-divider"></div>
                                            <button class="db-dropdown-item db-dropdown-item--danger"><i class="fas fa-power-off"></i> <?php echo e(__('services_power_off')); ?></button>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                        <?php
                        $te_colspan = 8; $te_text = __('project_servers_empty_search');
                        include __DIR__ . '/../../../components/table-empty.php';
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

        </div><!-- /#view-table -->

        <!-- Cards view -->
        <div class="db-view" id="view-cards" style="display:none;">
            <div class="db-svc-cards" style="padding:14px 18px;">
                <?php foreach ($servers as $s):
                    $srv_url = cloud_project_url('server-details', $current_project['id'], ['server' => $s['name']]);
                ?>
                <div class="db-svc-card db-svc-card--<?php echo e($s['status']); ?>"
                     data-svc-card
                     data-name="<?php echo e(strtolower($s['name'])); ?>"
                     data-os="<?php echo e(strtolower($s['os'])); ?>"
                     data-ip="<?php echo e($s['ip']); ?>"
                     data-location="<?php echo e(strtolower($s['location'])); ?>"
                     data-status="<?php echo e($s['status']); ?>">
                    <div class="db-svc-card__top">
                        <div class="db-svc-card__icon db-svc-card__icon--primary" style="color: <?php echo e($s['os_color']); ?>;">
                            <i class="<?php echo e($s['os_icon']); ?>"></i>
                        </div>
                        <div class="db-svc-card__title">
                            <a href="<?php echo e($srv_url); ?>" class="db-svc-card__name"><?php echo e($s['name']); ?></a>
                            <div class="db-svc-card__domain">
                                <span class="db-svc-card__pkg"><?php echo e($s['package']); ?></span>
                                <button type="button"
                                        class="db-proj-server-ip db-proj-server-ip--copy db-proj-server-ip--inline"
                                        title="<?php echo e(__('common_copy')); ?>"
                                        onclick="event.stopPropagation(); DashCopy && DashCopy(this,'<?php echo e($s['ip']); ?>');">
                                    <i class="fas fa-ethernet"></i>
                                    <span><?php echo e($s['ip']); ?></span>
                                    <i class="fas fa-copy db-proj-server-ip__copy-icon"></i>
                                </button>
                            </div>
                        </div>
                        <span class="db-badge db-badge--<?php echo e($s['status']); ?>"><?php echo e(__('status_' . $s['status'])); ?></span>
                    </div>
                    <div class="db-svc-card__bottom">
                        <div class="db-svc-card__meta">
                            <span class="db-svc-card__tag"><?php echo e($s['os']); ?></span>
                            <span class="db-svc-card__tag"><span class="fi fi-<?php echo e($s['location_flag']); ?>"></span> <?php echo e($s['location']); ?></span>
                            <span class="db-svc-card__due"><?php echo e(__('project_col_created')); ?>: <?php echo e($s['created']); ?></span>
                        </div>
                        <div class="db-svc-card__right">
                            <a href="<?php echo e($srv_url); ?>" class="db-btn db-btn--primary db-btn--sm db-svc-card__manage"><?php echo e(__('common_open')); ?> <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- Pagination bar — built client-side by DashTablePager based on
             current search/filter + page size. -->
        <div id="serversPagination" data-pager-for="serversTable" data-page-size="10"></div>
    </div>

<script>
/* Mirror table filter to cards view */
(function () {
    var table = document.getElementById('serversTable');
    if (!table) return;
    var cards = document.querySelectorAll('[data-svc-card]');
    function apply(detail) {
        var queries = (detail && detail.queries) || [];
        var filters = (detail && detail.filters) || [];
        cards.forEach(function (card) {
            var text = '';
            for (var i = 0; i < card.attributes.length; i++) {
                var a = card.attributes[i];
                if (a.name.indexOf('data-') === 0 && a.name !== 'data-svc-card') text += ' ' + a.value.toLowerCase();
            }
            text += ' ' + (card.textContent || '').toLowerCase();
            var searchOk = queries.every(function (q) { return text.indexOf(q) !== -1; });
            var filterOk = filters.every(function (f) {
                return (card.getAttribute('data-' + f.key) || '').toLowerCase() === f.val;
            });
            card.style.display = (searchOk && filterOk) ? '' : 'none';
        });
    }
    table.addEventListener('dashtable:filter', function (e) { apply(e.detail); });
})();
</script>

<?php endif; ?>

<div class="db-toast-container" id="toastContainer"></div>
<?php require_once __DIR__ . '/../../../layouts/footer.php'; ?>
