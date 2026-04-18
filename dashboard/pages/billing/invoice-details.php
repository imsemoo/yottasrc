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

/* ══════════════════════════════════════════════════════════════════════
   ███  INVOICE DETAILS  ·  MOCK DATA BLOCK  (single source of truth)  ███
   ══════════════════════════════════════════════════════════════════════
   BACKEND TEAM — PLEASE READ:

   This page shows a single invoice ($invoice_id from URL).
   All data (company, client, line items, transaction, payment
   methods) lives in this block. Edit a value → UI updates directly.

   Wiring real data:
     • Look up $invoice_id in your DB and populate $invoice, $client,
       $line_items, $transaction.
     • $company is the SELLER (your company) — usually static, pulled
       from site settings.
     • $is_unpaid is AUTO-computed from status — do not edit manually.
     • $pay_methods is the list of available gateways (from settings).
   ══════════════════════════════════════════════════════════════════════ */

/* ──────────────────────────────────────────
   PAGE STATE
   ──────────────────────────────────────────
   'active' | 'loading' | 'error'
   ────────────────────────────────────────── */
$page_state = $_GET['state'] ?? 'active';

/* ──────────────────────────────────────────
   STATUS RESOLUTION
   ──────────────────────────────────────────
   Mock: status is looked up per invoice_id for demo consistency.
   A ?status= query param overrides (for design testing).
   Backend: replace with DB lookup → $invoice_status = row.status
   ────────────────────────────────────────── */
$demo_status = $_GET['status'] ?? null;
$invoice_statuses = [
    '310630'    => 'unpaid',
    'INV-1047'  => 'unpaid',
    'INV-1045'  => 'overdue',
    'INV-1042'  => 'unpaid',
    '307776'    => 'paid',
];
$invoice_status = $demo_status ?? ($invoice_statuses[$invoice_id] ?? 'paid');
$is_unpaid = ($invoice_status === 'unpaid' || $invoice_status === 'overdue');

/* ──────────────────────────────────────────
   INVOICE (header section)
   ──────────────────────────────────────────
   • id/date/due  → display strings (dd/mm/yyyy)
   • status       → 'paid' | 'unpaid' | 'overdue' | 'cancelled'
   • type         → 'new_service' | 'renewal' | 'upgrade'
   • total        → float, final amount including fees
   ────────────────────────────────────────── */
$invoice = [
    'id'     => $invoice_id,
    'date'   => '03/04/2026',
    'due'    => '05/04/2026',
    'status' => $invoice_status,
    'type'   => 'new_service',
    'total'  => 3.42,
];

/* ──────────────────────────────────────────
   SELLER COMPANY (static — from site settings)
   ────────────────────────────────────────── */
$company = [
    'name'    => 'YottaSrc Inc',
    'address' => '39951 Hafar Al Batin / Saudi Arabia',
    'tax_no'  => '2511130857',
    'website' => 'YottaSrc.com',
    'email'   => 'Sales@YottaSrc.com',
];

/* ──────────────────────────────────────────
   CLIENT  (billed-to party — from user profile)
   ────────────────────────────────────────── */
$client = [
    'name'    => 'islam dev',
    'address' => 'Abdullah Arous house - dndnaa / Toukh / 13846',
    'country' => 'Egypt',
];

/* ──────────────────────────────────────────
   LINE ITEMS (table rows in the invoice)
   ──────────────────────────────────────────
   Each row:
   • num            → row number
   • desc           → main description line
   • details        → array of secondary info lines
   • details_danger → bool; if true, details are rendered in red italic
                      (used for "fee" clarifications)
   • amount         → float
   • service_link   → bool; if true, adds a "View Service" link
                      under the description (wires to service-details.php)
   ────────────────────────────────────────── */
$line_items = [
    ['num' => 1, 'desc' => 'VPS YTA 1 (24/03/2026 - 23/04/2026)', 'details' => [
        'Location: USA', 'Operating System: Ubuntu 22.04', 'Additional IP: None',
        'Change IP: No need to change', 'DMCA Policy Selection: No DMCA',
    ], 'amount' => 3.25, 'service_link' => true],
    ['num' => 2, 'desc' => 'Payment Gateway Charge',
     'details' => ['This cost is not for us; it\'s for the selected payment gateway fee.'],
     'details_danger' => true, 'amount' => 0.17],
];

/* ──────────────────────────────────────────
   TOTALS  (usually sum of line_items — edit if needed)
   ────────────────────────────────────────── */
$subtotal = 3.42;
$total    = 3.42;

/* ──────────────────────────────────────────
   TRANSACTION (only shown when invoice is paid)
   ──────────────────────────────────────────
   Set to null on unpaid invoices. Auto-selected below.
   ────────────────────────────────────────── */
$transaction = !$is_unpaid ? [
    'id'     => 'TXN-884102',
    'date'   => '24/03/2026 14:32',
    'method' => 'Cryptocurrency (Cryptomus)',
    'amount' => '€3.42 EUR',
] : null;

/* ──────────────────────────────────────────
   PAY METHODS (only rendered when unpaid)
   ──────────────────────────────────────────
   The enabled gateway list — usually from site settings.
   Each row:
   • id    → gateway slug (sent to backend on "Pay")
   • name  → display name
   • desc  → subtitle shown under the name
   • icon  → Font Awesome class
   • color → brand color (unused yet, reserved for future)
   ────────────────────────────────────────── */
$pay_methods = [
    ['id' => 'binance',  'name' => 'Binance Pay',                   'desc' => 'Pay with Binance wallet',         'icon' => 'fas fa-coins',    'color' => '#F0B90B'],
    ['id' => 'crypto',   'name' => 'Cryptomus',                     'desc' => 'BTC, ETH, USDT & more',            'icon' => 'fab fa-bitcoin',  'color' => '#8B5CF6'],
    ['id' => 'plisio',   'name' => 'Plisio',                        'desc' => 'Cryptocurrency payments',          'icon' => 'fas fa-wallet',   'color' => '#3B82F6'],
    ['id' => 'alipay',   'name' => 'Alipay',                        'desc' => 'China\'s leading payment',         'icon' => 'fab fa-alipay',   'color' => '#1677FF'],
    ['id' => 'paypal',   'name' => 'PayPal',                        'desc' => 'Pay with PayPal balance or card',  'icon' => 'fab fa-paypal',   'color' => '#003087'],
    ['id' => 'revolut',  'name' => 'Revolut Pay',                   'desc' => 'Instant bank transfer',            'icon' => 'fas fa-r',        'color' => '#0075EB'],
    ['id' => 'stripe',   'name' => 'Card / Google Pay / Apple Pay', 'desc' => 'Visa, Mastercard, Amex',           'icon' => 'fab fa-stripe-s', 'color' => '#635BFF'],
];

/* ══════════════  END OF MOCK DATA  ══════════════ */
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
        <div class="db-inv-hero__amount"><?php echo format_money($total); ?></div>
        <div class="db-inv-hero__meta">
            <span class="db-badge db-badge--<?php echo e($invoice['status']); ?>"><?php echo e(__('status_' . $invoice['status'])); ?></span>
            <span class="db-inv-hero__sep">·</span>
            <span>Invoice #<?php echo e($invoice['id']); ?></span>
            <span class="db-inv-hero__sep">·</span>
            <span><?php echo e(__('invoices_due_by')); ?> <?php echo e($invoice['due']); ?></span>
        </div>
    </div>
    <div class="db-inv-hero__actions">
        <button class="db-btn db-btn--ghost db-btn--sm" onclick="DashToast.show('success','','<?php echo e(__('invoices_share_msg')); ?>')"><i class="fas fa-share-nodes"></i></button>
        <button class="db-btn db-btn--ghost db-btn--sm" onclick="DashToast.show('success','','Invoice PDF downloaded.')"><i class="fas fa-download"></i></button>
        <button class="db-btn db-btn--ghost db-btn--sm" onclick="window.print()"><i class="fas fa-print"></i></button>
        <?php if ($is_unpaid): ?>
        <button class="db-btn db-btn--ghost db-btn--sm db-btn--danger-text" onclick="DashModal.open('cancelInvoiceModal')"><i class="fas fa-xmark"></i></button>
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
                <div class="db-invoice-client">
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
            <div class="db-card-body--table db-inv-line-items">
                <div class="db-table-wrapper">
                    <table class="db-table">
                        <thead><tr>
                            <th class="db-col-num">#</th>
                            <th><?php echo e(__('invoices_line_service_details')); ?></th>
                            <th class="db-col-amount"><?php echo e(__('invoices_col_amount')); ?></th>
                        </tr></thead>
                        <tbody>
                            <?php foreach ($line_items as $item): ?>
                            <tr>
                                <td><?php echo $item['num']; ?></td>
                                <td>
                                    <div class="db-inv-line-title"><?php echo e($item['desc']); ?></div>
                                    <?php foreach ($item['details'] as $d): ?>
                                    <div class="db-inv-line-detail<?php echo !empty($item['details_danger']) ? ' db-inv-line-detail--danger' : ''; ?>"><?php echo e($d); ?></div>
                                    <?php endforeach; ?>
                                    <?php if (!empty($item['service_link'])): ?>
                                    <a href="<?php echo DASH_BASE_PATH; ?>/pages/services/service-details.php?id=151926" class="db-inv-line-link">(<?php echo e(__('common_view')); ?> <?php echo e(__('ticket_info_service')); ?> - <span class="db-badge db-badge--active"><?php echo e(__('status_active')); ?></span>)</a>
                                    <?php endif; ?>
                                </td>
                                <td class="db-inv-line-amount"><?php echo format_money($item['amount']); ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>

                <!-- Block 5: Totals -->
                <div class="db-invoice-totals">
                    <div class="db-invoice-total-row"><span><?php echo e(__('invoices_subtotal')); ?></span><span><?php echo format_money($subtotal); ?></span></div>
                    <div class="db-invoice-total-row"><span><strong><?php echo e(__('invoices_total_due')); ?></strong></span><span><strong><?php echo format_money($total); ?> <?php echo e($current_currency ?? 'EUR'); ?></strong></span></div>
                </div>
            </div>

            <?php if ($transaction): ?>
            <!-- Transaction Info (paid) -->
            <div class="db-inv-block db-inv-block--txn">
                <div class="db-inv-txn-title">
                    <i class="fas fa-circle-check"></i>
                    <span><?php echo e(__('invoices_transaction_info')); ?></span>
                </div>
                <div class="db-inv-info-grid">
                    <div class="db-inv-info-item">
                        <span class="db-inv-info-item__label"><?php echo e(__('invoices_txn_id')); ?></span>
                        <span class="db-inv-info-item__value db-inv-info-item__value--mono"><?php echo e($transaction['id']); ?></span>
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
    <div class="db-inv-pay">
        <?php if ($is_unpaid): ?>
        <div class="db-card">
            <div class="db-card-header">
                <h2 class="db-card-title"><?php echo e(__('invoices_select_method')); ?></h2>
            </div>
            <div class="db-card-body">
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
            <div class="db-card-body db-inv-paid">
                <div class="db-inv-paid__badge">
                    <i class="fas fa-circle-check"></i>
                </div>
                <div class="db-inv-paid__title"><?php echo e(__('invoices_paid_title')); ?></div>
                <div class="db-inv-paid__desc"><?php echo e(__('invoices_paid_desc')); ?></div>
                <div class="db-inv-paid__actions">
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
            <span class="db-sticky-cta__amount"><?php echo format_money($total); ?> <?php echo e($current_currency ?? 'EUR'); ?></span>
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

$cb_desc = __('invoices_cancel_confirm'); $cb_icon = null;
$cb_target_label = null; $cb_target_value = null; $cb_warn = null;
include __DIR__ . '/../../components/confirm-body.php';

$modal_footer = '<button class="db-btn db-btn--secondary" data-modal-close>' . e(__('common_cancel')) . '</button>
<button class="db-btn db-btn--danger" onclick="DashModal.close(this.closest(\'.db-modal-overlay\')); DashToast.show(\'success\', \'\', \'' . e(__('invoices_cancel_success')) . '\');">' . e(__('common_confirm')) . '</button>';
include __DIR__ . '/../../components/modal-end.php';
?>
<?php endif; ?>

<div class="db-toast-container" id="toastContainer"></div>
<?php require_once __DIR__ . '/../../layouts/footer.php'; ?>
