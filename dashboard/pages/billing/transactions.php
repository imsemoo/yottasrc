<?php
/**
 * YottaSrc Dashboard — Transactions (Financial Activity Center)
 * ==============================================================
 * 1. Summary insights
 * 2. Filters + search + export dropdown
 * 3. Grouped activity feed with type icons
 */

$page_title = null;
$breadcrumbs_data = null;

require_once __DIR__ . '/../../layouts/config.php';

$page_title = __('transactions_title') . ' — ' . SITE_NAME;
$breadcrumbs_data = [
    ['label' => __('nav_dashboard'), 'url' => DASH_BASE_PATH . '/'],
    ['label' => __('nav_transactions'), 'url' => null],
];

require_once __DIR__ . '/../../layouts/shell.php';

$page_state = $_GET['state'] ?? 'active';

$transactions = [
    ['id' => 'TXN-8841', 'date' => '2026-03-28', 'type' => 'invoice',  'desc' => 'Invoice INV-1047 generated', 'amount' => -24.99,  'balance' => 125.01],
    ['id' => 'TXN-8838', 'date' => '2026-03-20', 'type' => 'payment',  'desc' => 'Payment for INV-1040',        'amount' => -149.99, 'balance' => 150.00],
    ['id' => 'TXN-8835', 'date' => '2026-03-18', 'type' => 'credit',   'desc' => 'Added funds via PayPal',      'amount' => 200.00,  'balance' => 299.99],
    ['id' => 'TXN-8830', 'date' => '2026-03-10', 'type' => 'payment',  'desc' => 'Payment for INV-1038',        'amount' => -24.99,  'balance' => 99.99],
    ['id' => 'TXN-8827', 'date' => '2026-03-05', 'type' => 'refund',   'desc' => 'Refund for cancelled service','amount' => 14.99,   'balance' => 124.98],
    ['id' => 'TXN-8824', 'date' => '2026-02-28', 'type' => 'payment',  'desc' => 'Payment for INV-1035',        'amount' => -9.99,   'balance' => 109.99],
    ['id' => 'TXN-8820', 'date' => '2026-02-20', 'type' => 'credit',   'desc' => 'Added funds via Visa ****4242','amount' => 100.00, 'balance' => 119.98],
    ['id' => 'TXN-8817', 'date' => '2026-02-15', 'type' => 'payment',  'desc' => 'Payment for INV-1032',        'amount' => -49.99,  'balance' => 19.98],
];

$total_in = 0; $total_out = 0;
foreach ($transactions as $t) {
    if ($t['amount'] > 0) $total_in += $t['amount'];
    else $total_out += abs($t['amount']);
}
$net = $total_in - $total_out;

$type_icons = [
    'credit'  => ['fas fa-arrow-down',       'success', __('transactions_type_credit')],
    'payment' => ['fas fa-arrow-up',          'error',   __('transactions_type_payment')],
    'refund'  => ['fas fa-arrow-rotate-left', 'warning', __('transactions_type_refund')],
    'invoice' => ['fas fa-file-invoice',      'primary', __('transactions_type_invoice')],
];

// Group by month
$grouped = [];
foreach ($transactions as $t) {
    $month = date('F Y', strtotime($t['date']));
    $grouped[$month][] = $t;
}
?>

<?php
$ph_title = __('transactions_title');
$ph_desc = __('transactions_desc');
$ph_actions = '';
include __DIR__ . '/../../components/page-header.php';
?>

<?php if ($page_state === 'error'): ?>
    <div class="db-card"><?php $error_retry = true; include __DIR__ . '/../../components/error-state.php'; ?></div>

<?php elseif ($page_state === 'loading'): ?>
    <div style="display:grid; grid-template-columns:repeat(4,1fr); gap:10px; margin-bottom:16px;">
        <?php for ($i = 0; $i < 4; $i++): ?><div class="db-skeleton" style="height:70px; border-radius:var(--radius-md);"></div><?php endfor; ?>
    </div>
    <?php $skel_rows = 6; $skel_cols = 4; $skel_has_icon = false; $skel_has_filters = true; include __DIR__ . '/../../components/skeleton-table.php'; ?>

<?php elseif ($page_state === 'empty'): ?>
    <div class="db-card"><div class="db-empty-state">
        <div class="db-empty-illustration db-empty-illustration--services"><i class="fas fa-receipt"></i></div>
        <h3 class="db-empty-title"><?php echo e(__('transactions_empty_title')); ?></h3>
        <p class="db-empty-desc"><?php echo e(__('transactions_empty_desc')); ?></p>
    </div></div>

<?php else: ?>

    <!-- ═══ INSIGHTS ═══ -->
    <div class="db-wallet-insights" style="grid-template-columns:repeat(4,1fr);">
        <div class="db-wallet-insight">
            <div class="db-wallet-insight__icon db-wallet-insight__icon--success"><i class="fas fa-arrow-down"></i></div>
            <div>
                <div class="db-wallet-insight__value">+€<?php echo number_format($total_in, 2); ?></div>
                <div class="db-wallet-insight__label"><?php echo e(__('txn_total_in')); ?></div>
            </div>
        </div>
        <div class="db-wallet-insight">
            <div class="db-wallet-insight__icon db-wallet-insight__icon--error"><i class="fas fa-arrow-up"></i></div>
            <div>
                <div class="db-wallet-insight__value">-€<?php echo number_format($total_out, 2); ?></div>
                <div class="db-wallet-insight__label"><?php echo e(__('txn_total_out')); ?></div>
            </div>
        </div>
        <div class="db-wallet-insight">
            <div class="db-wallet-insight__icon db-wallet-insight__icon--<?php echo $net >= 0 ? 'success' : 'error'; ?>"><i class="fas fa-equals"></i></div>
            <div>
                <div class="db-wallet-insight__value"><?php echo $net >= 0 ? '+' : '-'; ?>€<?php echo number_format(abs($net), 2); ?></div>
                <div class="db-wallet-insight__label"><?php echo e(__('txn_net_change')); ?></div>
            </div>
        </div>
        <div class="db-wallet-insight">
            <div class="db-wallet-insight__icon db-wallet-insight__icon--primary"><i class="fas fa-clock-rotate-left"></i></div>
            <div>
                <div class="db-wallet-insight__value"><?php echo count($transactions); ?></div>
                <div class="db-wallet-insight__label"><?php echo e(__('txn_total_count')); ?></div>
            </div>
        </div>
    </div>

    <!-- ═══ ACTIVITY FEED ═══ -->
    <div class="db-card">
        <div class="db-card-body--table">
            <div class="db-fbar">
                <div class="db-fbar__top">
                    <div class="db-fbar__search">
                        <i class="fas fa-magnifying-glass"></i>
                        <input type="text" id="txnSearch" placeholder="<?php echo e(__('transactions_search_placeholder')); ?>">
                    </div>
                    <div class="db-fbar__tools">
                        <select class="db-fbar__sort" id="txnTypeFilter">
                            <option value=""><?php echo e(__('transactions_filter_all')); ?></option>
                            <option value="payment"><?php echo e(__('transactions_type_payment')); ?></option>
                            <option value="credit"><?php echo e(__('transactions_type_credit')); ?></option>
                            <option value="refund"><?php echo e(__('transactions_type_refund')); ?></option>
                            <option value="invoice"><?php echo e(__('transactions_type_invoice')); ?></option>
                        </select>
                        <select class="db-fbar__sort" id="txnDateFilter">
                            <option value=""><?php echo e(__('txn_date_all')); ?></option>
                            <option value="7"><?php echo e(__('txn_date_7')); ?></option>
                            <option value="30"><?php echo e(__('txn_date_30')); ?></option>
                            <option value="90"><?php echo e(__('txn_date_90')); ?></option>
                        </select>
                        <div class="db-dropdown-wrapper">
                            <button class="db-view-switch__btn" data-dropdown-toggle title="Export"><i class="fas fa-download"></i></button>
                            <div class="db-dropdown-menu">
                                <button class="db-dropdown-item" onclick="DashExport('csv')"><i class="fas fa-file-csv"></i> CSV</button>
                                <button class="db-dropdown-item" onclick="DashExport('excel')"><i class="fas fa-file-excel"></i> Excel</button>
                                <button class="db-dropdown-item" onclick="window.print()"><i class="fas fa-print"></i> <?php echo e(__('toolbar_print')); ?></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php foreach ($grouped as $month => $txns): ?>
            <div class="db-txn-group" data-txn-group>
                <div class="db-txn-group__header"><?php echo e($month); ?></div>
                <div class="db-table-wrapper">
                    <table class="db-table">
                        <tbody>
                            <?php foreach ($txns as $txn):
                                $ti = $type_icons[$txn['type']] ?? ['fas fa-circle', 'primary', $txn['type']];
                            ?>
                            <tr data-txn-row
                                data-type="<?php echo e($txn['type']); ?>"
                                data-date="<?php echo e($txn['date']); ?>"
                                data-id="<?php echo e(strtolower($txn['id'])); ?>"
                                data-desc="<?php echo e(strtolower($txn['desc'])); ?>">
                                <td style="width:40px;"><div class="db-txn-icon db-txn-icon--<?php echo e($ti[1]); ?>"><i class="<?php echo e($ti[0]); ?>"></i></div></td>
                                <td>
                                    <div class="db-table-cell-main"><?php echo e($txn['desc']); ?></div>
                                    <div class="db-table-cell-sub"><?php echo e($ti[2]); ?> · <?php echo e($txn['id']); ?></div>
                                </td>
                                <td class="db-table-hide-mobile" style="width:100px;"><?php echo e($txn['date']); ?></td>
                                <td class="db-table-cell--right" style="width:110px;">
                                    <span class="db-table-cell-amount <?php echo $txn['amount'] >= 0 ? 'db-amount--positive' : ''; ?>"><?php echo $txn['amount'] >= 0 ? '+' : ''; ?><?php echo format_money($txn['amount']); ?></span>
                                </td>
                                <td class="db-table-hide-mobile db-table-cell--right" style="width:90px;"><span class="db-table-cell-mono"><?php echo format_money($txn['balance']); ?></span></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <?php endforeach; ?>

            <div id="txnEmpty" class="db-table-empty-state" style="display:none;">
                <i class="fas fa-magnifying-glass"></i> <?php echo e(__('transactions_empty_search')); ?>
            </div>

            <div class="db-pagination-bar">
                <div class="db-pagination-bar__info"><?php echo e(__('services_showing', ['from' => 1, 'to' => count($transactions), 'total' => count($transactions)])); ?></div>
            </div>
        </div>
    </div>
<?php endif; ?>

<div class="db-toast-container" id="toastContainer"></div>

<script>
/* Transactions filter — multi-table grouped layout */
(function () {
    var search = document.getElementById('txnSearch');
    var typeFilter = document.getElementById('txnTypeFilter');
    var dateFilter = document.getElementById('txnDateFilter');
    if (!search || !typeFilter || !dateFilter) return;

    var rows = document.querySelectorAll('[data-txn-row]');
    var groups = document.querySelectorAll('[data-txn-group]');
    var emptyEl = document.getElementById('txnEmpty');

    function applyFilters() {
        var q = (search.value || '').toLowerCase().trim();
        var type = typeFilter.value;
        var dateRange = parseInt(dateFilter.value, 10);
        var cutoff = null;
        if (dateRange) {
            cutoff = new Date();
            cutoff.setDate(cutoff.getDate() - dateRange);
        }

        var totalVisible = 0;
        rows.forEach(function (row) {
            var rType = row.getAttribute('data-type') || '';
            var rDate = row.getAttribute('data-date') || '';
            var rId = row.getAttribute('data-id') || '';
            var rDesc = row.getAttribute('data-desc') || '';

            var typeOk = !type || rType === type;
            var dateOk = !cutoff || (new Date(rDate) >= cutoff);
            var searchOk = !q || rId.indexOf(q) !== -1 || rDesc.indexOf(q) !== -1;

            var show = typeOk && dateOk && searchOk;
            row.style.display = show ? '' : 'none';
            if (show) totalVisible++;
        });

        // Hide groups with no visible rows
        groups.forEach(function (g) {
            var visibleInGroup = g.querySelectorAll('[data-txn-row]:not([style*="display: none"])').length;
            g.style.display = visibleInGroup > 0 ? '' : 'none';
        });

        if (emptyEl) emptyEl.style.display = totalVisible === 0 ? 'block' : 'none';
    }

    search.addEventListener('input', applyFilters);
    typeFilter.addEventListener('change', applyFilters);
    dateFilter.addEventListener('change', applyFilters);
})();
</script>

<?php require_once __DIR__ . '/../../layouts/footer.php'; ?>
