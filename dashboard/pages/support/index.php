<?php
/**
 * YottaSrc Dashboard — Support Tickets
 * ======================================
 * Ticket list with stats, filters, and table.
 */

$page_title = null;
$breadcrumbs_data = null;

require_once __DIR__ . '/../../layouts/config.php';

$page_title = __('tickets_title') . ' — ' . SITE_NAME;
$breadcrumbs_data = [
    ['label' => __('nav_dashboard'), 'url' => DASH_BASE_PATH . '/'],
    ['label' => __('tickets_title'), 'url' => null],
];

require_once __DIR__ . '/../../layouts/shell.php';

$page_state = $_GET['state'] ?? 'active';

$stats = ['total' => 5, 'pending' => 1, 'closed' => 2, 'progress' => 1];

$tickets = [
    [
        'id' => 'ENH-796520', 'subject' => 'Linux VPS/VDS | #151926 YTA6686328 107.161.168.236',
        'department' => 'Technical', 'status' => 'answered', 'priority' => 'medium',
        'last_update' => '1 minute ago', 'created' => '2026-04-06',
    ],
    [
        'id' => 'ENH-796515', 'subject' => 'Cannot access cPanel after password reset',
        'department' => 'Technical', 'status' => 'in_progress', 'priority' => 'high',
        'last_update' => '2 hours ago', 'created' => '2026-04-05',
    ],
    [
        'id' => 'ENH-796510', 'subject' => 'Invoice #307776 payment confirmation',
        'department' => 'Billing', 'status' => 'closed', 'priority' => 'low',
        'last_update' => '1 day ago', 'created' => '2026-04-04',
    ],
    [
        'id' => 'ENH-796505', 'subject' => 'Request for additional IP address',
        'department' => 'Technical', 'status' => 'customer_reply', 'priority' => 'medium',
        'last_update' => '2 days ago', 'created' => '2026-04-03',
    ],
    [
        'id' => 'ENH-796500', 'subject' => 'Domain transfer assistance needed',
        'department' => 'Sales', 'status' => 'closed', 'priority' => 'low',
        'last_update' => '5 days ago', 'created' => '2026-04-01',
    ],
];

// Badge class map
$status_badge = [
    'new' => 'pending', 'open' => 'pending', 'answered' => 'active',
    'customer_reply' => 'unpaid', 'in_progress' => 'pending',
    'on_hold' => 'suspended', 'closed' => 'cancelled', 'solved' => 'paid',
];

$priority_badge = [
    'low' => 'active', 'medium' => 'pending', 'high' => 'unpaid', 'urgent' => 'overdue',
];

$dept_icons = [
    'Technical' => 'fas fa-wrench', 'Billing' => 'fas fa-file-invoice',
    'Sales' => 'fas fa-shopping-cart', 'Abuse' => 'fas fa-shield-halved',
];
?>

<?php
$ph_title = __('tickets_title');
$ph_desc = __('tickets_desc');
$ph_actions = '<a href="' . DASH_BASE_PATH . '/pages/support/new.php" class="db-btn db-btn--primary"><i class="fas fa-plus"></i> ' . e(__('tickets_create')) . '</a>';
include __DIR__ . '/../../components/page-header.php';
?>

<?php if ($page_state === 'error'): ?>
    <div class="db-card"><?php $error_retry = true; include __DIR__ . '/../../components/error-state.php'; ?></div>

<?php elseif ($page_state === 'loading'): ?>
    <div class="db-stats-row">
        <?php for ($i = 0; $i < 4; $i++): ?><div class="db-stat-card"><div class="db-skeleton" style="width:100%; height:50px;"></div></div><?php endfor; ?>
    </div>
    <?php $skel_rows = 5; $skel_cols = 5; $skel_has_icon = false; $skel_has_filters = true; include __DIR__ . '/../../components/skeleton-table.php'; ?>

<?php elseif ($page_state === 'empty'): ?>
    <div class="db-card"><div class="db-empty-state">
        <div class="db-empty-illustration db-empty-illustration--services"><i class="fas fa-headset"></i></div>
        <h3 class="db-empty-title"><?php echo e(__('tickets_empty_title')); ?></h3>
        <p class="db-empty-desc"><?php echo e(__('tickets_empty_desc')); ?></p>
        <a href="<?php echo DASH_BASE_PATH; ?>/pages/support/new.php" class="db-btn db-btn--primary"><i class="fas fa-plus"></i> <?php echo e(__('tickets_create')); ?></a>
    </div></div>

<?php else: ?>

    <!-- Stats -->
    <div class="db-stats-row">
        <div class="db-stat-card"><div class="db-stat-card-icon db-stat-card-icon--primary"><i class="fas fa-headset"></i></div><div class="db-stat-card-body"><div class="db-stat-card-value"><?php echo $stats['total']; ?></div><div class="db-stat-card-label"><?php echo e(__('tickets_stat_total')); ?></div></div></div>
        <div class="db-stat-card"><div class="db-stat-card-icon db-stat-card-icon--warning"><i class="fas fa-clock"></i></div><div class="db-stat-card-body"><div class="db-stat-card-value"><?php echo $stats['pending']; ?></div><div class="db-stat-card-label"><?php echo e(__('tickets_stat_pending')); ?></div></div></div>
        <div class="db-stat-card"><div class="db-stat-card-icon db-stat-card-icon--secondary"><i class="fas fa-circle-check"></i></div><div class="db-stat-card-body"><div class="db-stat-card-value"><?php echo $stats['closed']; ?></div><div class="db-stat-card-label"><?php echo e(__('tickets_stat_closed')); ?></div></div></div>
        <div class="db-stat-card"><div class="db-stat-card-icon db-stat-card-icon--accent"><i class="fas fa-spinner"></i></div><div class="db-stat-card-body"><div class="db-stat-card-value"><?php echo $stats['progress']; ?></div><div class="db-stat-card-label"><?php echo e(__('tickets_stat_progress')); ?></div></div></div>
    </div>

    <!-- Tickets Table -->
    <div class="db-card">
        <div class="db-card-body--table">
            <div class="db-fbar">
                <div class="db-fbar__top">
                    <div class="db-fbar__search">
                        <i class="fas fa-magnifying-glass"></i>
                        <input type="text" id="ticketsSearch" data-table-search="ticketsTable" placeholder="<?php echo e(__('tickets_search')); ?>">
                    </div>
                    <div class="db-fbar__tools">
                        <select class="db-fbar__sort" id="ticketsStatusFilter" data-table-filter="ticketsTable" data-filter-key="status">
                            <option value=""><?php echo e(__('tickets_filter_all')); ?></option>
                            <option value="answered"><?php echo e(__('ticket_status_answered')); ?></option>
                            <option value="customer_reply"><?php echo e(__('ticket_status_customer_reply')); ?></option>
                            <option value="in_progress"><?php echo e(__('ticket_status_in_progress')); ?></option>
                            <option value="closed"><?php echo e(__('ticket_status_closed')); ?></option>
                        </select>
                        <button class="db-view-switch__btn" onclick="DashExport('csv')" title="Export CSV"><i class="fas fa-download"></i></button>
                    </div>
                </div>
            </div>

            <div class="db-table-wrapper">
                <table class="db-table" id="ticketsTable" data-table-tools>
                    <thead>
                        <tr>
                            <th style="width:130px;" class="db-table-sortable" data-sort-key="id"><?php echo e(__('tickets_col_id')); ?> <span class="db-sort-icon"><i class="fas fa-sort"></i></span></th>
                            <th class="db-table-sortable" data-sort-key="subject"><?php echo e(__('tickets_col_subject')); ?> <span class="db-sort-icon"><i class="fas fa-sort"></i></span></th>
                            <th class="db-table-hide-tablet db-table-sortable" style="width:120px;" data-sort-key="department"><?php echo e(__('tickets_col_department')); ?> <span class="db-sort-icon"><i class="fas fa-sort"></i></span></th>
                            <th class="db-table-sortable" style="width:120px;" data-sort-key="status"><?php echo e(__('tickets_col_status')); ?> <span class="db-sort-icon"><i class="fas fa-sort"></i></span></th>
                            <th class="db-table-hide-mobile db-table-sortable" style="width:130px;" data-sort-key="last_update"><?php echo e(__('tickets_col_last_update')); ?> <span class="db-sort-icon"><i class="fas fa-sort"></i></span></th>
                            <th style="width:96px;"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($tickets as $t):
                            $detail_url = DASH_BASE_PATH . '/pages/support/ticket-details.php?id=' . urlencode($t['id']);
                            $badge = $status_badge[$t['status']] ?? 'pending';
                            $dept_icon = $dept_icons[$t['department']] ?? 'fas fa-tag';
                            $needs_attention = ($t['status'] === 'answered' || $t['status'] === 'customer_reply');
                            $is_open = ($t['status'] !== 'closed' && $t['status'] !== 'solved');
                            // Strip any "| #151926 YTA... IP" tail from subject to avoid duplicate ID noise
                            $clean_subject = preg_replace('/\s*\|\s*#.*$/', '', $t['subject']);
                        ?>
                        <tr class="db-table-row-link <?php echo $needs_attention ? 'db-table-row--urgent' : ''; ?>"
                            data-row
                            data-id="<?php echo e($t['id']); ?>"
                            data-subject="<?php echo e(strtolower($clean_subject)); ?>"
                            data-department="<?php echo e(strtolower($t['department'])); ?>"
                            data-status="<?php echo e($t['status']); ?>"
                            data-last_update="<?php echo e($t['last_update']); ?>"
                            onclick="window.location='<?php echo $detail_url; ?>'">
                            <td>
                                <span class="db-ticket-id-chip"><?php echo e($t['id']); ?></span>
                            </td>
                            <td>
                                <div class="db-table-cell-main db-ticket-subject"><?php echo e($clean_subject); ?></div>
                            </td>
                            <td class="db-table-hide-tablet">
                                <span class="db-ticket-dept"><i class="<?php echo e($dept_icon); ?>"></i> <?php echo e($t['department']); ?></span>
                            </td>
                            <td>
                                <span class="db-badge db-badge--<?php echo e($badge); ?>"><?php echo e(__('ticket_status_' . $t['status'])); ?></span>
                            </td>
                            <td class="db-table-hide-mobile"><?php echo e($t['last_update']); ?></td>
                            <td>
                                <div class="db-row-actions db-row-actions--solid" onclick="event.stopPropagation();">
                                    <a href="<?php echo $detail_url; ?>" class="db-row-action db-row-action--solid db-row-action--primary" data-tooltip="<?php echo e(__('common_view')); ?>"><i class="fas fa-eye"></i></a>
                                    <?php if ($is_open): ?>
                                    <button class="db-row-action db-row-action--solid db-row-action--danger" data-tooltip="<?php echo e(__('ticket_close')); ?>" onclick="DashToast.show('success','','<?php echo e(__('ticket_close_success')); ?>')"><i class="fas fa-xmark"></i></button>
                                    <?php endif; ?>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                        <tr data-table-empty>
                            <td colspan="6"><div class="db-table-empty-state"><i class="fas fa-magnifying-glass"></i> <?php echo e(__('ticket_empty_search')); ?></div></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="db-pagination-bar">
                <div class="db-pagination-bar__info"><?php echo e(__('tickets_showing', ['from' => 1, 'to' => count($tickets), 'total' => $stats['total']])); ?></div>
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
