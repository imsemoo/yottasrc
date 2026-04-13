<?php
/**
 * YottaSrc Dashboard — Invoices
 * ===============================
 * Billing experience: outstanding invoices first, then full history.
 *
 * Layout:
 * 1. Page header
 * 2. Outstanding section (unpaid/overdue — action-driven)
 * 3. All invoices table with filters
 */

$page_title = null;
$breadcrumbs_data = null;

require_once __DIR__ . '/../../layouts/config.php';

$page_title = __('invoices_title') . ' — ' . SITE_NAME;
$breadcrumbs_data = [
    ['label' => __('nav_dashboard'), 'url' => DASH_BASE_PATH . '/'],
    ['label' => __('nav_invoices'), 'url' => null],
];

require_once __DIR__ . '/../../layouts/shell.php';

$page_state = $_GET['state'] ?? 'active';

$stats = ['total' => 12, 'paid' => 8, 'unpaid' => 3, 'overdue' => 1];
$balance = 0.00;

$invoices = [
    ['id' => 'INV-1047', 'date' => '2026-03-28', 'due' => '2026-04-12', 'desc' => 'Business Pro Hosting — Monthly', 'amount' => 24.99, 'status' => 'unpaid',  'type' => 'renewal'],
    ['id' => 'INV-1045', 'date' => '2026-03-20', 'due' => '2026-03-25', 'desc' => 'WordPress Premium — Monthly',   'amount' => 14.99, 'status' => 'overdue', 'type' => 'renewal'],
    ['id' => 'INV-1042', 'date' => '2026-03-15', 'due' => '2026-03-30', 'desc' => 'Starter VPS — Monthly',          'amount' => 49.99, 'status' => 'unpaid',  'type' => 'new_service'],
    ['id' => 'INV-1040', 'date' => '2026-03-01', 'due' => '2026-03-15', 'desc' => 'Enterprise Dedicated — Monthly', 'amount' => 149.99, 'status' => 'paid',   'type' => 'new_service'],
    ['id' => 'INV-1038', 'date' => '2026-02-28', 'due' => '2026-03-12', 'desc' => 'Business Pro Hosting — Monthly', 'amount' => 24.99, 'status' => 'paid',    'type' => 'renewal'],
    ['id' => 'INV-1035', 'date' => '2026-02-20', 'due' => '2026-03-05', 'desc' => 'Email Pro Suite — Monthly',      'amount' => 9.99,  'status' => 'paid',    'type' => 'upgrade'],
    ['id' => 'INV-1032', 'date' => '2026-02-15', 'due' => '2026-03-01', 'desc' => 'Starter VPS — Monthly',          'amount' => 49.99, 'status' => 'paid',    'type' => 'new_service'],
    ['id' => 'INV-1030', 'date' => '2026-02-01', 'due' => '2026-02-15', 'desc' => 'Enterprise Dedicated — Monthly', 'amount' => 149.99, 'status' => 'paid',   'type' => 'renewal'],
];

// Split outstanding
$outstanding = array_filter($invoices, function($i) { return $i['status'] === 'unpaid' || $i['status'] === 'overdue'; });
$outstanding_total = array_sum(array_column($outstanding, 'amount'));
?>

<?php
$ph_title = __('invoices_title');
$ph_desc = __('invoices_desc');
$ph_actions = '';
include __DIR__ . '/../../components/page-header.php';
?>

<?php if ($page_state === 'error'): ?>
    <div class="db-card"><?php $error_retry = true; include __DIR__ . '/../../components/error-state.php'; ?></div>

<?php elseif ($page_state === 'loading'): ?>
    <div class="db-skeleton" style="height:80px; border-radius:var(--radius-md); margin-bottom:16px;"></div>
    <?php $skel_rows = 6; $skel_cols = 5; $skel_has_icon = false; $skel_has_filters = true; include __DIR__ . '/../../components/skeleton-table.php'; ?>

<?php elseif ($page_state === 'empty'): ?>
    <div class="db-card"><div class="db-empty-state">
        <div class="db-empty-illustration db-empty-illustration--services"><i class="fas fa-file-invoice"></i></div>
        <h3 class="db-empty-title"><?php echo e(__('invoices_empty_title')); ?></h3>
        <p class="db-empty-desc"><?php echo e(__('invoices_empty_desc')); ?></p>
    </div></div>

<?php else: ?>

    <?php if (count($outstanding) > 0): ?>
    <!-- ═══ OUTSTANDING INVOICES ═══ -->
    <div class="db-outstanding">
        <div class="db-outstanding__header">
            <div class="db-outstanding__title">
                <i class="fas fa-triangle-exclamation"></i>
                <?php echo e(__('invoices_outstanding')); ?>
                <span class="db-outstanding__count"><?php echo count($outstanding); ?></span>
            </div>
            <div class="db-outstanding__total">
                <?php echo e(__('invoices_total_due')); ?>: <strong>€<?php echo number_format($outstanding_total, 2); ?></strong>
            </div>
        </div>
        <div class="db-outstanding__list">
            <?php foreach ($outstanding as $inv):
                $detail_url = DASH_BASE_PATH . '/pages/billing/invoice-details.php?id=' . urlencode($inv['id']) . '&status=' . urlencode($inv['status']);
            ?>
            <div class="db-outstanding__item db-outstanding__item--<?php echo e($inv['status']); ?>">
                <div class="db-outstanding__item-info">
                    <div class="db-outstanding__item-id"><?php echo e($inv['id']); ?></div>
                    <div class="db-outstanding__item-desc"><?php echo e($inv['desc']); ?></div>
                </div>
                <div class="db-outstanding__item-due">
                    <span class="db-badge db-badge--<?php echo e($inv['status']); ?>"><?php echo e(__('status_' . $inv['status'])); ?></span>
                    <span class="db-outstanding__item-date"><?php echo e(__('invoices_due_by')); ?> <?php echo e($inv['due']); ?></span>
                </div>
                <div class="db-outstanding__item-amount">€<?php echo number_format($inv['amount'], 2); ?></div>
                <a href="<?php echo $detail_url; ?>" class="db-btn db-btn--primary db-btn--sm db-outstanding__item-pay">
                    <i class="fas fa-credit-card"></i> <?php echo e(__('invoices_pay_now')); ?>
                </a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <?php endif; ?>

    <!-- ═══ ALL INVOICES ═══ -->
    <div class="db-card">
        <div class="db-card-body--table">
            <!-- Filter bar -->
            <div class="db-fbar">
                <div class="db-fbar__top">
                    <div class="db-fbar__search">
                        <i class="fas fa-magnifying-glass"></i>
                        <input type="text" data-table-search="invoicesTable" placeholder="<?php echo e(__('invoices_search_placeholder')); ?>">
                    </div>
                    <div class="db-fbar__tools">
                        <select class="db-fbar__sort" data-table-filter="invoicesTable" data-filter-key="status">
                            <option value=""><?php echo e(__('invoices_filter_all')); ?></option>
                            <option value="paid"><?php echo e(__('status_paid')); ?></option>
                            <option value="unpaid"><?php echo e(__('status_unpaid')); ?></option>
                            <option value="overdue"><?php echo e(__('status_overdue')); ?></option>
                        </select>
                        <select class="db-fbar__sort" data-table-filter="invoicesTable" data-filter-key="type">
                            <option value=""><?php echo e(__('toolbar_all_types')); ?></option>
                            <option value="new_service"><?php echo e(__('invoices_type_new_service')); ?></option>
                            <option value="renewal"><?php echo e(__('invoices_type_renewal')); ?></option>
                            <option value="upgrade"><?php echo e(__('invoices_type_upgrade')); ?></option>
                        </select>
                        <button class="db-view-switch__btn" onclick="DashExport('csv')" title="Export CSV"><i class="fas fa-download"></i></button>
                    </div>
                </div>
            </div>

            <!-- Table -->
            <div class="db-table-wrapper">
                <table class="db-table" id="invoicesTable" data-table-tools>
                    <thead>
                        <tr>
                            <th class="db-table-sortable" data-sort-key="id"><?php echo e(__('invoices_col_invoice')); ?> <span class="db-sort-icon"><i class="fas fa-sort"></i></span></th>
                            <th class="db-table-hide-mobile db-table-sortable" data-sort-key="date"><?php echo e(__('invoices_col_date')); ?> <span class="db-sort-icon"><i class="fas fa-sort"></i></span></th>
                            <th class="db-table-hide-tablet db-table-sortable" data-sort-key="due"><?php echo e(__('invoices_col_due_date')); ?> <span class="db-sort-icon"><i class="fas fa-sort"></i></span></th>
                            <th class="db-table-hide-tablet db-table-sortable" data-sort-key="type"><?php echo e(__('invoices_col_type')); ?> <span class="db-sort-icon"><i class="fas fa-sort"></i></span></th>
                            <th class="db-table-sortable" data-sort-key="status"><?php echo e(__('common_status')); ?> <span class="db-sort-icon"><i class="fas fa-sort"></i></span></th>
                            <th class="db-table-cell--right db-table-sortable" data-sort-key="amount"><?php echo e(__('invoices_col_amount')); ?> <span class="db-sort-icon"><i class="fas fa-sort"></i></span></th>
                            <th style="width:90px;"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($invoices as $inv):
                            $detail_url = DASH_BASE_PATH . '/pages/billing/invoice-details.php?id=' . urlencode($inv['id']) . '&status=' . urlencode($inv['status']);
                            $is_urgent = ($inv['status'] === 'unpaid' || $inv['status'] === 'overdue');
                        ?>
                        <tr class="db-table-row-link <?php echo $is_urgent ? 'db-table-row--urgent' : ''; ?>"
                            data-row
                            data-id="<?php echo e(strtolower($inv['id'])); ?>"
                            data-desc="<?php echo e(strtolower($inv['desc'])); ?>"
                            data-date="<?php echo e($inv['date']); ?>"
                            data-due="<?php echo e($inv['due']); ?>"
                            data-type="<?php echo e($inv['type']); ?>"
                            data-status="<?php echo e($inv['status']); ?>"
                            data-amount="<?php echo e($inv['amount']); ?>"
                            onclick="window.location='<?php echo $detail_url; ?>'">
                            <td>
                                <div class="db-table-cell-main"><?php echo e($inv['id']); ?></div>
                                <div class="db-table-cell-sub"><?php echo e($inv['desc']); ?></div>
                            </td>
                            <td class="db-table-hide-mobile"><?php echo e($inv['date']); ?></td>
                            <td class="db-table-hide-tablet"><?php echo e($inv['due']); ?></td>
                            <td class="db-table-hide-tablet"><span class="db-badge db-badge--<?php echo e($inv['type']); ?>"><?php echo e(__('invoices_type_' . $inv['type'])); ?></span></td>
                            <td><span class="db-badge db-badge--<?php echo e($inv['status']); ?>"><?php echo e(__('status_' . $inv['status'])); ?></span></td>
                            <td class="db-table-cell--right"><span class="db-table-cell-amount"><?php echo format_money($inv['amount']); ?></span></td>
                            <td>
                                <div class="db-row-actions db-row-actions--solid" onclick="event.stopPropagation();">
                                    <a href="<?php echo $detail_url; ?>" class="db-row-action db-row-action--solid db-row-action--primary" data-tooltip="<?php echo e(__('common_view')); ?>"><i class="fas fa-eye"></i></a>
                                    <a href="#" class="db-row-action db-row-action--solid" data-tooltip="<?php echo e(__('invoices_download')); ?>" onclick="event.preventDefault(); DashToast.show('success','','Invoice PDF downloaded.');"><i class="fas fa-download"></i></a>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                        <tr data-table-empty>
                            <td colspan="7"><div class="db-table-empty-state"><i class="fas fa-magnifying-glass"></i> <?php echo e(__('invoices_empty_search')); ?></div></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            <div class="db-pagination-bar">
                <div class="db-pagination-bar__info"><?php echo e(__('services_showing', ['from' => 1, 'to' => count($invoices), 'total' => $stats['total']])); ?></div>
                <div class="db-pagination-bar__nav">
                    <button class="db-pagination-bar__btn" disabled><i class="fas fa-chevron-left"></i> <?php echo e(__('common_previous')); ?></button>
                    <span class="db-pagination-bar__page active">1</span>
                    <span class="db-pagination-bar__page">2</span>
                    <button class="db-pagination-bar__btn"><?php echo e(__('common_next')); ?> <i class="fas fa-chevron-right"></i></button>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>

<div class="db-toast-container" id="toastContainer"></div>
<?php require_once __DIR__ . '/../../layouts/footer.php'; ?>
