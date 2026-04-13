<?php
/**
 * YottaSrc Dashboard — My Domains
 * =================================
 * Domain list with stats, filters, auto-renew toggles, and management actions.
 */

$page_title = null;
$breadcrumbs_data = null;

require_once __DIR__ . '/../../layouts/config.php';

$page_title = __('domains_title') . ' — ' . SITE_NAME;
$breadcrumbs_data = [
    ['label' => __('nav_dashboard'), 'url' => DASH_BASE_PATH . '/'],
    ['label' => __('domains_title'), 'url' => null],
];

require_once __DIR__ . '/../../layouts/shell.php';

$page_state = $_GET['state'] ?? 'active';

$stats = ['total' => 4, 'active' => 2, 'expiring' => 1, 'expired' => 1];

$domains = [
    [
        'domain' => 'yottasrc.com', 'tld' => '.com', 'registrar' => 'YottaSrc',
        'registered' => '2024-03-15', 'expires' => '2027-03-15',
        'auto_renew' => true, 'status' => 'active', 'locked' => true,
        'price' => 12.99,
    ],
    [
        'domain' => 'designhub.io', 'tld' => '.io', 'registrar' => 'YottaSrc',
        'registered' => '2025-01-10', 'expires' => '2026-01-10',
        'auto_renew' => true, 'status' => 'active', 'locked' => true,
        'price' => 29.99,
    ],
    [
        'domain' => 'example-shop.net', 'tld' => '.net', 'registrar' => 'YottaSrc',
        'registered' => '2023-06-20', 'expires' => '2026-04-20',
        'auto_renew' => false, 'status' => 'expiring', 'locked' => false,
        'price' => 10.99,
    ],
    [
        'domain' => 'oldsite.org', 'tld' => '.org', 'registrar' => 'YottaSrc',
        'registered' => '2022-02-01', 'expires' => '2026-02-01',
        'auto_renew' => false, 'status' => 'expired', 'locked' => false,
        'price' => 14.99,
    ],
];

$status_badge = [
    'active' => 'active', 'expiring' => 'unpaid', 'expired' => 'overdue', 'pending' => 'pending',
];
?>

<?php
$ph_title = __('domains_title');
$ph_desc = __('domains_desc');
$ph_actions = '<div style="display:flex;gap:6px;">
    <a href="' . DASH_BASE_PATH . '/pages/services/order.php" class="db-btn db-btn--primary"><i class="fas fa-plus"></i> ' . e(__('domains_register')) . '</a>
    <a href="' . DASH_BASE_PATH . '/pages/services/order.php" class="db-btn db-btn--secondary"><i class="fas fa-right-left"></i> ' . e(__('domains_transfer')) . '</a>
</div>';
include __DIR__ . '/../../components/page-header.php';
?>

<?php if ($page_state === 'error'): ?>
    <div class="db-card"><?php $error_retry = true; include __DIR__ . '/../../components/error-state.php'; ?></div>

<?php elseif ($page_state === 'loading'): ?>
    <div class="db-stats-row">
        <?php for ($i = 0; $i < 4; $i++): ?><div class="db-stat-card"><div class="db-skeleton" style="width:100%;height:50px;"></div></div><?php endfor; ?>
    </div>
    <?php $skel_rows = 4; $skel_cols = 5; $skel_has_icon = false; $skel_has_filters = true; include __DIR__ . '/../../components/skeleton-table.php'; ?>

<?php elseif ($page_state === 'empty'): ?>
    <div class="db-card"><div class="db-empty-state">
        <div class="db-empty-illustration db-empty-illustration--services"><i class="fas fa-globe"></i></div>
        <h3 class="db-empty-title"><?php echo e(__('domains_empty_title')); ?></h3>
        <p class="db-empty-desc"><?php echo e(__('domains_empty_desc')); ?></p>
        <a href="<?php echo DASH_BASE_PATH; ?>/pages/services/order.php" class="db-btn db-btn--primary"><i class="fas fa-plus"></i> <?php echo e(__('domains_register')); ?></a>
    </div></div>

<?php else: ?>

    <!-- Stats -->
    <div class="db-stats-row">
        <div class="db-stat-card"><div class="db-stat-card-icon db-stat-card-icon--primary"><i class="fas fa-globe"></i></div><div class="db-stat-card-body"><div class="db-stat-card-value"><?php echo $stats['total']; ?></div><div class="db-stat-card-label"><?php echo e(__('domains_stat_total')); ?></div></div></div>
        <div class="db-stat-card"><div class="db-stat-card-icon db-stat-card-icon--secondary"><i class="fas fa-circle-check"></i></div><div class="db-stat-card-body"><div class="db-stat-card-value"><?php echo $stats['active']; ?></div><div class="db-stat-card-label"><?php echo e(__('domains_stat_active')); ?></div></div></div>
        <div class="db-stat-card"><div class="db-stat-card-icon db-stat-card-icon--warning"><i class="fas fa-clock"></i></div><div class="db-stat-card-body"><div class="db-stat-card-value"><?php echo $stats['expiring']; ?></div><div class="db-stat-card-label"><?php echo e(__('domains_stat_expiring')); ?></div></div></div>
        <div class="db-stat-card"><div class="db-stat-card-icon db-stat-card-icon--error"><i class="fas fa-triangle-exclamation"></i></div><div class="db-stat-card-body"><div class="db-stat-card-value"><?php echo $stats['expired']; ?></div><div class="db-stat-card-label"><?php echo e(__('domains_stat_expired')); ?></div></div></div>
    </div>

    <!-- Domains Table -->
    <div class="db-card">
        <div class="db-card-body--table">
            <div class="db-fbar">
                <div class="db-fbar__top">
                    <div class="db-fbar__search">
                        <i class="fas fa-magnifying-glass"></i>
                        <input type="text" data-table-search="domainsTable" placeholder="<?php echo e(__('domains_search')); ?>">
                    </div>
                    <div class="db-fbar__tools">
                        <select class="db-fbar__sort" data-table-filter="domainsTable" data-filter-key="status">
                            <option value=""><?php echo e(__('domains_filter_all')); ?></option>
                            <option value="active"><?php echo e(__('domain_status_active')); ?></option>
                            <option value="expiring"><?php echo e(__('domain_status_expiring')); ?></option>
                            <option value="expired"><?php echo e(__('domain_status_expired')); ?></option>
                        </select>
                        <button class="db-view-switch__btn" onclick="DashExport('csv')" title="Export CSV"><i class="fas fa-download"></i></button>
                    </div>
                </div>
            </div>

            <div class="db-table-wrapper">
                <table class="db-table" id="domainsTable" data-table-tools>
                    <thead>
                        <tr>
                            <th class="db-table-sortable" data-sort-key="domain"><?php echo e(__('domains_col_domain')); ?> <span class="db-sort-icon"><i class="fas fa-sort"></i></span></th>
                            <th class="db-table-hide-tablet db-table-sortable" data-sort-key="registered"><?php echo e(__('domains_col_registered')); ?> <span class="db-sort-icon"><i class="fas fa-sort"></i></span></th>
                            <th class="db-table-sortable" data-sort-key="expires"><?php echo e(__('domains_col_expires')); ?> <span class="db-sort-icon"><i class="fas fa-sort"></i></span></th>
                            <th class="db-table-hide-mobile" style="width:90px;"><?php echo e(__('domains_col_auto_renew')); ?></th>
                            <th class="db-table-sortable" style="width:110px;" data-sort-key="status"><?php echo e(__('domains_col_status')); ?> <span class="db-sort-icon"><i class="fas fa-sort"></i></span></th>
                            <th style="width:80px;"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($domains as $d):
                            $badge = $status_badge[$d['status']] ?? 'pending';
                            $is_urgent = ($d['status'] === 'expiring' || $d['status'] === 'expired');
                        ?>
                        <tr class="<?php echo $is_urgent ? 'db-table-row--urgent' : ''; ?>"
                            data-row
                            data-domain="<?php echo e(strtolower($d['domain'])); ?>"
                            data-registrar="<?php echo e(strtolower($d['registrar'])); ?>"
                            data-status="<?php echo e($d['status']); ?>"
                            data-registered="<?php echo e($d['registered']); ?>"
                            data-expires="<?php echo e($d['expires']); ?>">
                            <td>
                                <div class="db-table-cell-with-icon">
                                    <div class="db-table-icon db-table-icon--primary"><i class="fas fa-globe"></i></div>
                                    <div>
                                        <div class="db-table-cell-main"><?php echo e($d['domain']); ?></div>
                                        <div class="db-table-cell-sub"><?php echo e($d['registrar']); ?> · €<?php echo number_format($d['price'], 2); ?>/yr</div>
                                    </div>
                                </div>
                            </td>
                            <td class="db-table-hide-tablet"><?php echo e($d['registered']); ?></td>
                            <td><?php echo e($d['expires']); ?></td>
                            <td class="db-table-hide-mobile">
                                <label class="db-toggle db-toggle--sm">
                                    <input type="checkbox" <?php echo $d['auto_renew'] ? 'checked' : ''; ?> onchange="DashToast.show('info','',this.checked?'Auto-renew enabled':'Auto-renew disabled')">
                                    <span class="db-toggle-track"><span class="db-toggle-thumb"></span></span>
                                </label>
                            </td>
                            <td><span class="db-badge db-badge--<?php echo e($badge); ?>"><?php echo e(__('domain_status_' . $d['status'])); ?></span></td>
                            <td>
                                <div class="db-row-actions db-row-actions--solid">
                                    <div class="db-dropdown-wrapper">
                                        <button class="db-row-action db-row-action--solid db-row-action--menu" data-dropdown-toggle><i class="fas fa-ellipsis-vertical"></i></button>
                                        <div class="db-dropdown-menu">
                                            <button class="db-dropdown-item" onclick="DashToast.show('info','','Managing domain...')"><i class="fas fa-gear"></i> <?php echo e(__('domains_manage')); ?></button>
                                            <button class="db-dropdown-item" onclick="DashToast.show('info','','DNS management...')"><i class="fas fa-server"></i> <?php echo e(__('domains_dns')); ?></button>
                                            <button class="db-dropdown-item" onclick="DashToast.show('info','','Nameservers...')"><i class="fas fa-network-wired"></i> <?php echo e(__('domains_nameservers')); ?></button>
                                            <button class="db-dropdown-item" onclick="DashToast.show('info','','WHOIS info...')"><i class="fas fa-circle-info"></i> <?php echo e(__('domains_whois')); ?></button>
                                            <div class="db-dropdown-divider"></div>
                                            <?php if ($d['status'] === 'expired' || $d['status'] === 'expiring'): ?>
                                            <button class="db-dropdown-item" onclick="DashToast.show('info','','Renewing domain...')"><i class="fas fa-rotate-right"></i> <?php echo e(__('domains_renew')); ?></button>
                                            <?php endif; ?>
                                            <button class="db-dropdown-item" onclick="DashToast.show('info','','<?php echo $d['locked'] ? 'Unlocking' : 'Locking'; ?> domain...')"><i class="fas fa-<?php echo $d['locked'] ? 'lock-open' : 'lock'; ?>"></i> <?php echo e($d['locked'] ? __('domains_unlock') : __('domains_lock')); ?></button>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                        <tr data-table-empty>
                            <td colspan="6"><div class="db-table-empty-state"><i class="fas fa-magnifying-glass"></i> <?php echo e(__('domains_empty_search')); ?></div></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="db-pagination-bar">
                <div class="db-pagination-bar__info"><?php echo e(__('domains_showing', ['from' => 1, 'to' => count($domains), 'total' => $stats['total']])); ?></div>
                <div class="db-pagination-bar__nav">
                    <button class="db-pagination-bar__btn" disabled><i class="fas fa-chevron-left"></i> <?php echo e(__('common_previous')); ?></button>
                    <span class="db-pagination-bar__page active">1</span>
                    <button class="db-pagination-bar__btn" disabled><?php echo e(__('common_next')); ?> <i class="fas fa-chevron-right"></i></button>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>

<div class="db-toast-container" id="toastContainer"></div>
<?php require_once __DIR__ . '/../../layouts/footer.php'; ?>
