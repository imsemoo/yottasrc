<?php
/**
 * YottaSrc Dashboard — Invoice Details (Radical Redesign)
 * ========================================================
 * Concept: Checkout page, not data page.
 *
 * Structure:
 * 1. Hero banner — amount + status + due date + actions (the FIRST thing you see)
 * 2. Two-column: invoice document | payment method selection
 * 3. Sticky bottom CTA — "Pay Now" always visible (unpaid only)
 */

$page_title = null;
$breadcrumbs_data = null;

require_once __DIR__ . '/../../layouts/config.php';

$invoice_id = $_GET['id'] ?? '310630';

$page_title = __('invoices_detail_title') . ' — ' . SITE_NAME;
$breadcrumbs_data = [
    ['label' => __('nav_dashboard'), 'url' => DASH_BASE_PATH . '/'],
    ['label' => __('nav_invoices'), 'url' => DASH_BASE_PATH . '/pages/billing/invoices.php'],
    ['label' => '#' . e($invoice_id), 'url' => null],
];

require_once __DIR__ . '/../../layouts/shell.php';

$page_state = $_GET['state'] ?? 'active';
$demo_status = $_GET['status'] ?? null;
$invoice_statuses = [
    '310630' => 'unpaid', 'INV-1047' => 'unpaid', 'INV-1045' => 'overdue',
    'INV-1042' => 'unpaid', '307776' => 'paid',
];
$invoice_status = $demo_status ?? ($invoice_statuses[$invoice_id] ?? 'paid');
$is_unpaid = ($invoice_status === 'unpaid' || $invoice_status === 'overdue');

$invoice = [
    'id' => $invoice_id, 'date' => '03/04/2026', 'due' => '05/04/2026',
    'status' => $invoice_status, 'type' => 'new_service', 'total' => 3.42,
];

$company = [
    'name' => 'YottaSrc Inc', 'address' => '39951 Hafar Al Batin / Saudi Arabia',
    'tax_no' => '2511130857', 'website' => 'YottaSrc.com', 'email' => 'Sales@YottaSrc.com',
];
$client = ['name' => 'islam dev', 'address' => 'Abdullah Arous house - dndnaa / Toukh / 13846', 'country' => 'Egypt'];

$line_items = [
    ['num' => 1, 'desc' => 'VPS YTA 1 (24/03/2026 - 23/04/2026)', 'details' => [
        'Location: USA', 'Operating System: Ubuntu 22.04', 'Additional IP: None',
        'Change IP: No need to change', 'DMCA Policy Selection: No DMCA',
    ], 'amount' => 3.25, 'service_link' => true],
    ['num' => 2, 'desc' => 'Payment Gateway Charge',
     'details' => ['This cost is not for us; it\'s for the selected payment gateway fee.'],
     'details_danger' => true, 'amount' => 0.17],
];
$subtotal = 3.42; $total = 3.42;

// Transaction info (for paid invoices)
$transaction = !$is_unpaid ? [
    'id'     => 'TXN-884102',
    'date'   => '24/03/2026 14:32',
    'method' => 'Cryptocurrency (Cryptomus)',
    'amount' => '€3.42 EUR',
] : null;

$pay_methods = [
    ['id' => 'binance',  'name' => 'Binance Pay',               'desc' => 'Pay with Binance wallet',           'icon' => 'fas fa-coins',     'color' => '#F0B90B'],
    ['id' => 'crypto',   'name' => 'Cryptomus',                  'desc' => 'BTC, ETH, USDT & more',            'icon' => 'fab fa-bitcoin',   'color' => '#8B5CF6'],
    ['id' => 'plisio',   'name' => 'Plisio',                     'desc' => 'Cryptocurrency payments',           'icon' => 'fas fa-wallet',    'color' => '#3B82F6'],
    ['id' => 'alipay',   'name' => 'Alipay',                     'desc' => 'China\'s leading payment',          'icon' => 'fab fa-alipay',    'color' => '#1677FF'],
    ['id' => 'paypal',   'name' => 'PayPal',                     'desc' => 'Pay with PayPal balance or card',   'icon' => 'fab fa-paypal',    'color' => '#003087'],
    ['id' => 'revolut',  'name' => 'Revolut Pay',                'desc' => 'Instant bank transfer',             'icon' => 'fas fa-r',         'color' => '#0075EB'],
    ['id' => 'stripe',   'name' => 'Card / Google Pay / Apple Pay', 'desc' => 'Visa, Mastercard, Amex',         'icon' => 'fab fa-stripe-s',  'color' => '#635BFF'],
];
?>

<?php if ($page_state === 'error'): ?>
    <?php
    $ph_title = '#' . e($invoice_id);
    $ph_desc = ''; $ph_actions = '';
    include __DIR__ . '/../../components/page-header.php';
    ?>
    <div class="db-card"><?php $error_retry = true; include __DIR__ . '/../../components/error-state.php'; ?></div>

<?php elseif ($page_state === 'loading'): ?>
    <?php
    $ph_title = '#' . e($invoice_id);
    $ph_desc = ''; $ph_actions = '';
    include __DIR__ . '/../../components/page-header.php';
    ?>
    <?php $skel_info_rows = 5; $skel_action_buttons = 3; include __DIR__ . '/../../components/skeleton-detail.php'; ?>

<?php else: ?>

<!-- ══════════════════════════════════════════════════
     1. HERO BANNER — The first thing user sees
     ══════════════════════════════════════════════════ -->
<div class="db-inv-hero db-inv-hero--<?php echo e($invoice['status']); ?>">
    <div class="db-inv-hero__main">
        <div class="db-inv-hero__amount">€<?php echo number_format($total, 2); ?></div>
        <div class="db-inv-hero__meta">
            <span class="db-badge db-badge--<?php echo e($invoice['status']); ?>"><?php echo e(__('status_' . $invoice['status'])); ?></span>
            <span class="db-inv-hero__sep">·</span>
            <span>Invoice #<?php echo e($invoice['id']); ?></span>
            <span class="db-inv-hero__sep">·</span>
            <span><?php echo e(__('invoices_due_by')); ?> <?php echo e($invoice['due']); ?></span>
        </div>
    </div>
    <div class="db-inv-hero__actions">
        <button class="db-btn db-btn--ghost db-btn--sm" onclick="DashToast.show('info','','<?php echo e(__('invoices_share_msg')); ?>')"><i class="fas fa-share-nodes"></i></button>
        <button class="db-btn db-btn--ghost db-btn--sm" onclick="DashToast.show('success','','Invoice PDF downloaded.')"><i class="fas fa-download"></i></button>
        <button class="db-btn db-btn--ghost db-btn--sm" onclick="window.print()"><i class="fas fa-print"></i></button>
        <?php if ($is_unpaid): ?>
        <button class="db-btn db-btn--ghost db-btn--sm" style="color:var(--status-overdue);" onclick="DashModal.open('cancelInvoiceModal')"><i class="fas fa-xmark"></i></button>
        <?php endif; ?>
    </div>
</div>

<!-- ══════════════════════════════════════════════════
     2. TWO COLUMNS: Invoice | Payment Methods
     ══════════════════════════════════════════════════ -->
<div class="db-inv-grid">
    <!-- LEFT: Invoice Document -->
    <div class="db-inv-doc">
        <div class="db-card">

            <!-- Block 1: Company -->
            <div class="db-inv-block">
                <div class="db-invoice-header">
                    <div class="db-invoice-header__logo">
                        <img src="<?php echo DASH_BASE_PATH; ?>/static/images/logo_light.png" alt="YottaSrc" class="db-invoice-logo">
                    </div>
                    <div class="db-invoice-header__company">
                        <div class="db-invoice-header__company-name"><?php echo e($company['name']); ?></div>
                        <div class="db-invoice-header__company-detail"><?php echo e($company['address']); ?></div>
                        <div class="db-invoice-header__company-detail">No: <strong><?php echo e($company['tax_no']); ?></strong></div>
                    </div>
                </div>
            </div>

            <!-- Block 2: Client -->
            <div class="db-inv-block">
                <div class="db-invoice-client" style="margin-bottom:0;">
                    <div class="db-invoice-client__label"><?php echo e(__('invoices_invoiced_to')); ?></div>
                    <div class="db-invoice-client__name"><?php echo e($client['name']); ?></div>
                    <div class="db-invoice-client__detail"><?php echo e($client['address']); ?></div>
                    <div class="db-invoice-client__detail"><?php echo e($client['country']); ?></div>
                </div>
            </div>

            <!-- Block 3: Invoice Info -->
            <div class="db-inv-block">
                <div class="db-inv-info-grid">
                    <div class="db-inv-info-item">
                        <span class="db-inv-info-item__label"><?php echo e(__('invoices_meta_invoice_no')); ?></span>
                        <span class="db-inv-info-item__value">#<?php echo e($invoice['id']); ?></span>
                    </div>
                    <div class="db-inv-info-item">
                        <span class="db-inv-info-item__label"><?php echo e(__('invoices_meta_issued')); ?></span>
                        <span class="db-inv-info-item__value"><?php echo e($invoice['date']); ?></span>
                    </div>
                    <div class="db-inv-info-item">
                        <span class="db-inv-info-item__label"><?php echo e(__('invoices_meta_due')); ?></span>
                        <span class="db-inv-info-item__value"><?php echo e($invoice['due']); ?></span>
                    </div>
                    <div class="db-inv-info-item">
                        <span class="db-inv-info-item__label"><?php echo e(__('invoices_col_type')); ?></span>
                        <span class="db-inv-info-item__value"><span class="db-badge db-badge--<?php echo e($invoice['type']); ?>"><?php echo e(__('invoices_type_' . $invoice['type'])); ?></span></span>
                    </div>
                </div>
            </div>

            <!-- Block 4: Line Items -->
            <div class="db-card-body--table" style="border-top:1px solid var(--border-primary);">
                <div class="db-table-wrapper">
                    <table class="db-table">
                        <thead><tr>
                            <th style="width:32px;">#</th>
                            <th><?php echo e(__('invoices_line_service_details')); ?></th>
                            <th style="width:110px; text-align:right;"><?php echo e(__('invoices_col_amount')); ?></th>
                        </tr></thead>
                        <tbody>
                            <?php foreach ($line_items as $item): ?>
                            <tr>
                                <td><?php echo $item['num']; ?></td>
                                <td>
                                    <div style="font-weight:600; color:var(--text-primary);"><?php echo e($item['desc']); ?></div>
                                    <?php foreach ($item['details'] as $d): ?>
                                    <div style="font-size:0.7rem; color:<?php echo !empty($item['details_danger']) ? 'var(--status-overdue)' : 'var(--text-secondary)'; ?>; margin-top:2px; font-style:<?php echo !empty($item['details_danger']) ? 'italic' : 'normal'; ?>;"><?php echo e($d); ?></div>
                                    <?php endforeach; ?>
                                    <?php if (!empty($item['service_link'])): ?>
                                    <a href="<?php echo DASH_BASE_PATH; ?>/pages/services/service-details.php?id=151926" style="font-size:0.72rem; color:var(--brand-primary); text-decoration:none; margin-top:4px; display:inline-block;">(<?php echo e(__('common_view')); ?> <?php echo e(__('ticket_info_service')); ?> - <span class="db-badge db-badge--active" style="font-size:0.58rem;"><?php echo e(__('status_active')); ?></span>)</a>
                                    <?php endif; ?>
                                </td>
                                <td style="text-align:right; font-family:var(--font-display); font-weight:700;">€<?php echo number_format($item['amount'], 2); ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>

                <!-- Block 5: Totals -->
                <div class="db-invoice-totals">
                    <div class="db-invoice-total-row"><span><?php echo e(__('invoices_subtotal')); ?></span><span>€<?php echo number_format($subtotal, 2); ?></span></div>
                    <div class="db-invoice-total-row"><span><strong><?php echo e(__('invoices_total_due')); ?></strong></span><span><strong>€<?php echo number_format($total, 2); ?> EUR</strong></span></div>
                </div>
            </div>

            <?php if ($transaction): ?>
            <!-- Transaction Info (paid) -->
            <div class="db-inv-block" style="background:rgba(16,185,129,0.04);">
                <div style="display:flex; align-items:center; gap:8px; margin-bottom:10px;">
                    <i class="fas fa-circle-check" style="color:var(--status-active);"></i>
                    <span style="font-family:var(--font-display); font-size:0.84rem; font-weight:700; color:var(--status-active);"><?php echo e(__('invoices_transaction_info')); ?></span>
                </div>
                <div class="db-inv-info-grid">
                    <div class="db-inv-info-item">
                        <span class="db-inv-info-item__label"><?php echo e(__('invoices_txn_id')); ?></span>
                        <span class="db-inv-info-item__value" style="font-family:var(--font-mono);"><?php echo e($transaction['id']); ?></span>
                    </div>
                    <div class="db-inv-info-item">
                        <span class="db-inv-info-item__label"><?php echo e(__('invoices_txn_date')); ?></span>
                        <span class="db-inv-info-item__value"><?php echo e($transaction['date']); ?></span>
                    </div>
                    <div class="db-inv-info-item">
                        <span class="db-inv-info-item__label"><?php echo e(__('invoices_txn_method')); ?></span>
                        <span class="db-inv-info-item__value"><?php echo e($transaction['method']); ?></span>
                    </div>
                    <div class="db-inv-info-item">
                        <span class="db-inv-info-item__label"><?php echo e(__('invoices_txn_amount')); ?></span>
                        <span class="db-inv-info-item__value"><?php echo e($transaction['amount']); ?></span>
                    </div>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>

    <!-- RIGHT: Payment Selection (unpaid) / Paid Status -->
    <div class="db-inv-pay" style="align-self:start; position:sticky; top:88px;">
        <?php if ($is_unpaid): ?>
        <div class="db-card">
            <div class="db-card-header" style="padding:12px 16px;">
                <h2 class="db-card-title" style="font-size:0.8rem;"><?php echo e(__('invoices_select_method')); ?></h2>
            </div>
            <div class="db-card-body" style="padding:8px 16px 16px;">
                <div class="db-pay-grid">
                    <?php foreach ($pay_methods as $i => $pm): ?>
                    <label class="db-pay-card<?php echo $i === 0 ? ' db-pay-card--active' : ''; ?>">
                        <input type="radio" name="pay_method" value="<?php echo e($pm['id']); ?>" <?php echo $i === 0 ? 'checked' : ''; ?>>
                        <div class="db-pay-card__radio"></div>
                        <div class="db-pay-card__icon"><i class="<?php echo e($pm['icon']); ?>"></i></div>
                        <div class="db-pay-card__info">
                            <div class="db-pay-card__name"><?php echo e($pm['name']); ?></div>
                            <div class="db-pay-card__desc"><?php echo e($pm['desc']); ?></div>
                        </div>
                        <span class="db-pay-card__action"><?php echo e(__('invoices_pay_now')); ?></span>
                    </label>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        <?php else: ?>
        <div class="db-card">
            <div class="db-card-body" style="text-align:center; padding:32px 20px;">
                <div style="width:56px; height:56px; border-radius:50%; background:rgba(16,185,129,0.12); display:inline-flex; align-items:center; justify-content:center; margin-bottom:14px;">
                    <i class="fas fa-circle-check" style="font-size:1.5rem; color:var(--status-active);"></i>
                </div>
                <div style="font-family:var(--font-display); font-size:1.1rem; font-weight:800; color:var(--text-primary); margin-bottom:4px;"><?php echo e(__('invoices_paid_title')); ?></div>
                <div style="font-size:0.8rem; color:var(--text-tertiary); margin-bottom:16px;"><?php echo e(__('invoices_paid_desc')); ?></div>
                <div style="display:flex; gap:8px; justify-content:center;">
                    <button class="db-btn db-btn--secondary db-btn--sm" onclick="DashToast.show('success','','Invoice PDF downloaded.')"><i class="fas fa-download"></i> <?php echo e(__('invoices_download')); ?></button>
                    <button class="db-btn db-btn--ghost db-btn--sm" onclick="window.print()"><i class="fas fa-print"></i> <?php echo e(__('invoices_print')); ?></button>
                </div>
            </div>
        </div>
        <?php endif; ?>
    </div>
</div>

<?php if ($is_unpaid): ?>
<!-- ══════════════════════════════════════════════════
     3. STICKY BOTTOM CTA — Always visible
     ══════════════════════════════════════════════════ -->
<div class="db-sticky-cta">
    <div class="db-sticky-cta__inner">
        <div class="db-sticky-cta__info">
            <span class="db-sticky-cta__label"><?php echo e(__('invoices_total_due')); ?></span>
            <span class="db-sticky-cta__amount">€<?php echo number_format($total, 2); ?> EUR</span>
        </div>
        <button class="db-btn db-btn--primary db-sticky-cta__btn" onclick="DashToast.show('info','','Redirecting to payment gateway...')">
            <i class="fas fa-lock"></i> <?php echo e(__('invoices_pay_now')); ?>
        </button>
    </div>
</div>
<?php endif; ?>

<?php endif; ?>

<?php if ($is_unpaid): ?>
<?php
$modal_id = 'cancelInvoiceModal';
$modal_title = __('invoices_cancel_invoice');
$modal_size = 'sm';
include __DIR__ . '/../../components/modal.php';
?>
<div class="db-confirm-body">
    <div class="db-modal-icon db-modal-icon--danger"><i class="fas fa-triangle-exclamation"></i></div>
    <p><?php echo e(__('invoices_cancel_confirm')); ?></p>
</div>
<?php
$modal_footer = '<button class="db-btn db-btn--secondary" data-modal-close>' . e(__('common_cancel')) . '</button>
<button class="db-btn db-btn--danger" onclick="DashModal.close(this.closest(\'.db-modal-overlay\')); DashToast.show(\'success\', \'\', \'' . e(__('invoices_cancel_success')) . '\');">' . e(__('common_confirm')) . '</button>';
include __DIR__ . '/../../components/modal-end.php';
?>
<?php endif; ?>

<div class="db-toast-container" id="toastContainer"></div>
<?php require_once __DIR__ . '/../../layouts/footer.php'; ?>
