<?php
/**
 * YottaSrc Dashboard — Credit Balance (Wallet Dashboard)
 * ========================================================
 * 1. Balance hero + quick add buttons
 * 2. Insights (total added, spent, last txn)
 * 3. Transaction history with type icons + filters
 */

$page_title = null;
$breadcrumbs_data = null;

require_once __DIR__ . '/../../layouts/config.php';

$page_title = __('credit_title') . ' — ' . SITE_NAME;
$breadcrumbs_data = [
    ['label' => __('nav_dashboard'), 'url' => DASH_BASE_PATH . '/'],
    ['label' => __('nav_credit_balance'), 'url' => null],
];

require_once __DIR__ . '/../../layouts/shell.php';

/* ══════════════════════════════════════════════════════════════════════
   ███  CREDIT BALANCE  ·  MOCK DATA BLOCK  (single source of truth) ███
   ══════════════════════════════════════════════════════════════════════
   BACKEND TEAM — PLEASE READ:

   The wallet header, insights row, and ledger are all driven from
   this block. Edit a value → UI updates directly.

   Wiring real data:
     • Replace $history with the DB query result.
     • Keep the KEYS and SHAPE identical; the ledger loop expects them.
     • $total_added and $total_spent are AUTO-computed from $history;
       do NOT edit manually.
   ══════════════════════════════════════════════════════════════════════ */

/* ──────────────────────────────────────────
   PAGE STATE
   ──────────────────────────────────────────
   'active' | 'loading' | 'error' | 'empty'
   ────────────────────────────────────────── */
$page_state = $_GET['state'] ?? 'active';

/* ──────────────────────────────────────────
   WALLET HEADER
   ──────────────────────────────────────────
   • balance      → current account balance (float)
   • max_balance  → cap shown on the usage gauge (float)
   ────────────────────────────────────────── */
$balance     = 125.01;
$max_balance = 5500;

/* ──────────────────────────────────────────
   HISTORY LIST (ledger)
   ──────────────────────────────────────────
   Each row:
   • date    → ISO date 'YYYY-MM-DD'
   • desc    → human-readable description
   • type    → one of $type_icons keys below
               ('credit' | 'debit' | 'refund')
   • amount  → positive = money IN, negative = money OUT
   • balance → running balance AFTER this event
   ────────────────────────────────────────── */
$history = [
    ['date' => '2026-03-28', 'desc' => 'Invoice INV-1047 generated',    'type' => 'debit',  'amount' => -24.99,  'balance' => 125.01],
    ['date' => '2026-03-18', 'desc' => 'Added funds via PayPal',        'type' => 'credit', 'amount' => 200.00,  'balance' => 150.00],
    ['date' => '2026-03-10', 'desc' => 'Payment for INV-1038',          'type' => 'debit',  'amount' => -24.99,  'balance' => -50.00],
    ['date' => '2026-03-05', 'desc' => 'Refund — cancelled service',    'type' => 'refund', 'amount' => 14.99,   'balance' => -25.01],
    ['date' => '2026-02-20', 'desc' => 'Added funds via Visa ****4242', 'type' => 'credit', 'amount' => 100.00,  'balance' => -40.00],
    ['date' => '2026-02-15', 'desc' => 'Payment for INV-1032',          'type' => 'debit',  'amount' => -49.99,  'balance' => -140.00],
];

/* ──────────────────────────────────────────
   TYPE → [icon, color, label]  mapping
   color values: 'success' | 'error' | 'warning'
   ────────────────────────────────────────── */
$type_icons = [
    'credit' => ['fas fa-arrow-down',        'success', __('credit_type_added')],
    'debit'  => ['fas fa-arrow-up',           'error',   __('credit_type_payment')],
    'refund' => ['fas fa-arrow-rotate-left',  'warning', __('credit_type_refund')],
];

/* ──────────────────────────────────────────
   DEPOSIT QUICK-AMOUNT PRESETS
   Buttons shown on the "Add funds" CTA.
   ────────────────────────────────────────── */
$presets = [10, 25, 50, 100];

/* ══════════════  END OF MOCK DATA  ══════════════ */

// Auto-computed: total added + total spent for the insights row.
$total_added = 0;
$total_spent = 0;
foreach ($history as $h) {
    if ($h['amount'] > 0) $total_added += $h['amount'];
    else                  $total_spent += abs($h['amount']);
}
?>

<?php
$ph_title = __('credit_title');
$ph_desc = __('credit_desc');
$ph_actions = '';
include __DIR__ . '/../../components/page-header.php';
?>

<?php if ($page_state === 'error'): ?>
    <div class="db-card"><?php $error_retry = true; include __DIR__ . '/../../components/error-state.php'; ?></div>

<?php elseif ($page_state === 'loading'): ?>
    <div class="db-skeleton" style="height:140px; border-radius:var(--radius-md); margin-bottom:16px;"></div>
    <div style="display:grid; grid-template-columns:repeat(3,1fr); gap:10px; margin-bottom:16px;">
        <div class="db-skeleton" style="height:70px; border-radius:var(--radius-md);"></div>
        <div class="db-skeleton" style="height:70px; border-radius:var(--radius-md);"></div>
        <div class="db-skeleton" style="height:70px; border-radius:var(--radius-md);"></div>
    </div>
    <?php $skel_rows = 5; $skel_cols = 4; $skel_has_icon = false; $skel_has_filters = false; include __DIR__ . '/../../components/skeleton-table.php'; ?>

<?php elseif ($page_state === 'empty'): ?>
    <?php
    $es_icon   = 'fa-wallet';
    $es_title  = __('credit_empty_title');
    $es_desc   = __('credit_empty_desc');
    $es_action = '<a href="' . DASH_BASE_PATH . '/pages/billing/add-funds.php" class="db-btn db-btn--primary"><i class="fas fa-plus"></i> ' . e(__('credit_add_funds')) . '</a>';
    include __DIR__ . '/../../components/empty-state.php';
    ?>

<?php else: ?>

    <!-- ═══ 1. WALLET HERO ═══ -->
    <div class="db-wallet-hero">
        <div class="db-wallet-hero__main">
            <div class="db-wallet-hero__balance">
                <div class="db-wallet-hero__label"><?php echo e(__('credit_available_balance')); ?></div>
                <div class="db-wallet-hero__amount"><?php echo format_money($balance); ?></div>
                <div class="db-wallet-hero__sub"><?php echo e(__('credit_wallet_sub')); ?></div>
            </div>
            <div class="db-wallet-hero__bar">
                <?php $pct = min(100, round($balance / $max_balance * 100)); ?>
                <div class="db-wallet-hero__bar-track">
                    <div class="db-wallet-hero__bar-fill" style="width:<?php echo $pct; ?>%;"></div>
                </div>
                <div class="db-wallet-hero__bar-label"><?php echo format_money($balance); ?> / <?php echo format_money($max_balance); ?></div>
            </div>
        </div>

        <!-- Quick Add -->
        <div class="db-wallet-hero__quick">
            <div class="db-wallet-hero__quick-label"><?php echo e(__('credit_quick_add')); ?></div>
            <div class="db-wallet-hero__quick-btns">
                <?php foreach ($presets as $p): ?>
                <a href="<?php echo DASH_BASE_PATH; ?>/pages/billing/add-funds.php" class="db-wallet-hero__quick-btn">+<?php echo format_money($p, 0); ?></a>
                <?php endforeach; ?>
                <a href="<?php echo DASH_BASE_PATH; ?>/pages/billing/add-funds.php" class="db-wallet-hero__quick-btn db-wallet-hero__quick-btn--custom"><?php echo e(__('credit_custom_amount')); ?></a>
            </div>
        </div>
    </div>

    <!-- ═══ 2. INSIGHTS ═══ -->
    <div class="db-wallet-insights">
        <div class="db-wallet-insight">
            <div class="db-wallet-insight__icon db-wallet-insight__icon--success"><i class="fas fa-arrow-down"></i></div>
            <div>
                <div class="db-wallet-insight__value">+<?php echo format_money($total_added); ?></div>
                <div class="db-wallet-insight__label"><?php echo e(__('credit_total_added')); ?></div>
            </div>
        </div>
        <div class="db-wallet-insight">
            <div class="db-wallet-insight__icon db-wallet-insight__icon--error"><i class="fas fa-arrow-up"></i></div>
            <div>
                <div class="db-wallet-insight__value">-<?php echo format_money($total_spent); ?></div>
                <div class="db-wallet-insight__label"><?php echo e(__('credit_total_spent')); ?></div>
            </div>
        </div>
        <div class="db-wallet-insight">
            <div class="db-wallet-insight__icon db-wallet-insight__icon--primary"><i class="fas fa-clock-rotate-left"></i></div>
            <div>
                <div class="db-wallet-insight__value"><?php echo e($history[0]['date']); ?></div>
                <div class="db-wallet-insight__label"><?php echo e(__('credit_last_txn')); ?></div>
            </div>
        </div>
    </div>

    <!-- ═══ 3. TRANSACTION HISTORY ═══ -->
    <div class="db-card">
        <div class="db-card-body--table">
            <div class="db-fbar">
                <div class="db-fbar__top">
                    <div class="db-fbar__search">
                        <i class="fas fa-magnifying-glass"></i>
                        <input type="text" data-table-search="creditTable" placeholder="<?php echo e(__('credit_search_history')); ?>">
                    </div>
                    <div class="db-fbar__tools">
                        <select class="db-fbar__sort" data-table-filter="creditTable" data-filter-key="type">
                            <option value=""><?php echo e(__('credit_filter_all')); ?></option>
                            <option value="credit"><?php echo e(__('credit_type_added')); ?></option>
                            <option value="debit"><?php echo e(__('credit_type_payment')); ?></option>
                            <option value="refund"><?php echo e(__('credit_type_refund')); ?></option>
                        </select>
                        <button class="db-view-switch__btn" onclick="DashExport('csv')" title="Export CSV"><i class="fas fa-download"></i></button>
                    </div>
                </div>
            </div>

            <div class="db-table-wrapper">
                <table class="db-table" id="creditTable" data-table-tools>
                    <thead><tr>
                        <th style="width:40px;"></th>
                        <th class="db-table-sortable" data-sort-key="desc"><?php echo e(__('credit_col_description')); ?> <span class="db-sort-icon"><i class="fas fa-sort"></i></span></th>
                        <th class="db-table-hide-mobile db-table-sortable" data-sort-key="date"><?php echo e(__('credit_col_date')); ?> <span class="db-sort-icon"><i class="fas fa-sort"></i></span></th>
                        <th class="db-table-cell--right db-table-sortable" data-sort-key="amount"><?php echo e(__('credit_col_amount')); ?> <span class="db-sort-icon"><i class="fas fa-sort"></i></span></th>
                        <th class="db-table-hide-mobile db-table-cell--right db-table-sortable" data-sort-key="balance"><?php echo e(__('credit_col_balance')); ?> <span class="db-sort-icon"><i class="fas fa-sort"></i></span></th>
                    </tr></thead>
                    <tbody>
                        <?php foreach ($history as $row):
                            $ti = $type_icons[$row['type']] ?? ['fas fa-circle', 'primary', $row['type']];
                        ?>
                        <tr data-row
                            data-type="<?php echo e($row['type']); ?>"
                            data-desc="<?php echo e(strtolower($row['desc'])); ?>"
                            data-date="<?php echo e($row['date']); ?>"
                            data-amount="<?php echo e($row['amount']); ?>"
                            data-balance="<?php echo e($row['balance']); ?>">
                            <td>
                                <div class="db-txn-icon db-txn-icon--<?php echo e($ti[1]); ?>"><i class="<?php echo e($ti[0]); ?>"></i></div>
                            </td>
                            <td>
                                <div class="db-table-cell-main"><?php echo e($row['desc']); ?></div>
                                <div class="db-table-cell-sub"><?php echo e($ti[2]); ?></div>
                            </td>
                            <td class="db-table-hide-mobile"><?php echo e($row['date']); ?></td>
                            <td class="db-table-cell--right">
                                <span class="db-table-cell-amount <?php echo $row['amount'] >= 0 ? 'db-amount--positive' : ''; ?>"><?php echo $row['amount'] >= 0 ? '+' : ''; ?><?php echo format_money($row['amount']); ?></span>
                            </td>
                            <td class="db-table-hide-mobile db-table-cell--right"><span class="db-table-cell-mono"><?php echo format_money($row['balance']); ?></span></td>
                        </tr>
                        <?php endforeach; ?>
                        <?php
                        $te_colspan = 5; $te_text = __('credit_empty_search');
                        include __DIR__ . '/../../components/table-empty.php';
                        ?>
                    </tbody>
                </table>
            </div>

            <?php
            $pg_current    = 1;
            $pg_total      = 1;
            $pg_from       = 1;
            $pg_to         = count($history);
            $pg_total_rows = count($history);
            include __DIR__ . '/../../components/pagination.php';
            ?>
        </div>
    </div>
<?php endif; ?>

<div class="db-toast-container" id="toastContainer"></div>
<?php require_once __DIR__ . '/../../layouts/footer.php'; ?>
