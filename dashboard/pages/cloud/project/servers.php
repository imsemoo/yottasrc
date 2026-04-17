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

$page_title = __('project_page_servers') . ' — #' . $current_project['id'] . ' — ' . SITE_NAME;
$breadcrumbs_data = [
    ['label' => __('nav_dashboard'),       'url' => DASH_BASE_PATH . '/'],
    ['label' => __('cloud_title'),          'url' => DASH_BASE_PATH . '/pages/cloud/index.php'],
    ['label' => '#' . $current_project['id'] . ' - ' . $current_project['name'], 'url' => cloud_project_url('servers', $current_project['id'])],
    ['label' => __('project_page_servers'), 'url' => null],
];

require_once __DIR__ . '/../../../layouts/project-shell.php';

// Default to populated — users want to see their servers first. Use ?state=empty for the empty state demo.
$page_state = $_GET['state'] ?? 'active';

// Mock: empty list for state=empty, richer populated list for state=active
$servers = ($page_state === 'empty') ? [] : [
    [
        'id'       => 1,
        'name'     => 'CLY806752',
        'package'  => 'CLW1 | x64 | 2 CPU, 4 GB RAM, 50 GB SSD',
        'os'       => 'Windows Server 2025',
        'os_icon'  => 'fab fa-windows',
        'os_color' => '#0078d4',
        'ip'       => '107.161.174.200',
        'location' => 'Turkey',
        'location_flag' => 'tr',
        'status'   => 'active',
        'created'  => '1 minute ago',
    ],
    [
        'id'       => 2,
        'name'     => 'CLY806731',
        'package'  => 'CLY3 | x86 | 4 CPU, 8 GB RAM, 100 GB NVMe',
        'os'       => 'Ubuntu 22.04',
        'os_icon'  => 'fab fa-ubuntu',
        'os_color' => '#e95420',
        'ip'       => '185.225.49.42',
        'location' => 'Germany',
        'location_flag' => 'de',
        'status'   => 'active',
        'created'  => '3 hours ago',
    ],
    [
        'id'       => 3,
        'name'     => 'CLY806702',
        'package'  => 'CLH5 | x86 | 4 CPU, 4 GB RAM, 40 GB NVMe',
        'os'       => 'Debian 12',
        'os_icon'  => 'fab fa-debian',
        'os_color' => '#a81d33',
        'ip'       => '51.222.18.77',
        'location' => 'France',
        'location_flag' => 'fr',
        'status'   => 'suspended',
        'created'  => '2 days ago',
    ],
];
?>

<!-- Page header: Servers List #ID - name + Create Server button -->
<div class="db-proj-header">
    <div class="db-proj-header__title">
        <h1 class="db-proj-header__heading">
            <?php echo e(__('project_servers_list_title')); ?> —
            <span class="db-proj-header__id">#<?php echo e($current_project['id']); ?></span>
            <span class="db-proj-header__sep">-</span>
            <span class="db-proj-header__name"><?php echo e($current_project['name']); ?></span>
        </h1>
    </div>
    <div class="db-proj-header__actions">
        <a href="<?php echo e(cloud_project_url('create-server', $current_project['id'])); ?>" class="db-btn db-btn--primary">
            <i class="fas fa-plus"></i> <?php echo e(__('project_create_server')); ?>
        </a>
    </div>
</div>

<?php if ($page_state === 'error'): ?>
    <div class="db-card"><?php $error_retry = true; include __DIR__ . '/../../../components/error-state.php'; ?></div>

<?php elseif ($page_state === 'loading'): ?>
    <?php $skel_rows = 3; $skel_cols = 7; $skel_has_icon = false; $skel_has_filters = true; include __DIR__ . '/../../../components/skeleton-table.php'; ?>

<?php elseif (empty($servers)): ?>
    <!-- Empty state (matches reference screenshot) -->
    <div class="db-card">
        <div class="db-card-body" style="padding:36px 28px;">
            <div class="db-empty-state">
                <div class="db-empty-illustration db-empty-illustration--services"><i class="fas fa-server"></i></div>
                <h3 class="db-empty-title"><?php echo e(__('project_no_servers_title')); ?></h3>
                <p class="db-empty-desc"><?php echo e(__('project_no_servers_desc')); ?></p>
                <div class="db-empty-hint">
                    <i class="fas fa-circle-info"></i>
                    <span>
                        <?php echo e(__('project_no_servers_hint_prefix')); ?>
                        <a href="<?php echo e(cloud_project_url('create-server', $current_project['id'])); ?>" class="db-empty-hint__link">
                            <?php echo e(__('project_create_server')); ?>
                        </a>
                        <?php echo e(__('project_no_servers_hint_suffix')); ?>
                    </span>
                </div>
            </div>
        </div>
    </div>

<?php else: ?>

    <!-- Servers table (Phase 4 will expand with real data) -->
    <div class="db-card">
        <div class="db-card-body--table">
            <div class="db-table-wrapper">
                <table class="db-table" id="serversTable" data-table-tools>
                    <thead>
                        <tr>
                            <th style="width:60px;">#</th>
                            <th class="db-table-sortable" data-sort-key="name"><?php echo e(__('project_col_name')); ?> <span class="db-sort-icon"><i class="fas fa-sort"></i></span></th>
                            <th class="db-table-sortable db-table-hide-tablet" data-sort-key="os"><?php echo e(__('project_col_os')); ?> <span class="db-sort-icon"><i class="fas fa-sort"></i></span></th>
                            <th class="db-table-sortable" data-sort-key="ip"><?php echo e(__('project_col_ip')); ?> <span class="db-sort-icon"><i class="fas fa-sort"></i></span></th>
                            <th class="db-table-sortable db-table-hide-mobile" data-sort-key="location"><?php echo e(__('project_col_location')); ?> <span class="db-sort-icon"><i class="fas fa-sort"></i></span></th>
                            <th class="db-table-sortable" data-sort-key="status"><?php echo e(__('project_col_status')); ?> <span class="db-sort-icon"><i class="fas fa-sort"></i></span></th>
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
                                <span class="db-proj-server-ip">
                                    <i class="fas fa-ethernet"></i>
                                    <?php echo e($s['ip']); ?>
                                </span>
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
                                <div class="db-row-actions db-row-actions--solid">
                                    <button class="db-row-action db-row-action--solid db-row-action--menu" data-dropdown-toggle><i class="fas fa-ellipsis-vertical"></i></button>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                        <tr data-table-empty>
                            <td colspan="8"><div class="db-table-empty-state"><i class="fas fa-magnifying-glass"></i> <?php echo e(__('project_servers_empty_search')); ?></div></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

<?php endif; ?>

<div class="db-toast-container" id="toastContainer"></div>
<?php require_once __DIR__ . '/../../../layouts/footer.php'; ?>
