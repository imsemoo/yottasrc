<?php
/**
 * YottaSrc Dashboard — Add Funds (Checkout Experience)
 * =====================================================
 * LEFT:  Amount selection + Payment method (radio cards)
 * RIGHT: Sticky checkout summary + Pay CTA + trust signals
 */

$page_title = null;
$breadcrumbs_data = null;
$page_js = 'pages/add-funds.js';

require_once __DIR__ . '/../../layouts/config.php';

$page_title = __('nav_add_funds') . ' — ' . SITE_NAME;
$breadcrumbs_data = [
    ['label' => __('nav_dashboard'), 'url' => DASH_BASE_PATH . '/'],
    ['label' => __('nav_add_funds'), 'url' => null],
];

require_once __DIR__ . '/../../layouts/shell.php';

/* ══════════════════════════════════════════════════════════════════════
   ███  ADD FUNDS  ·  MOCK DATA BLOCK  (single source of truth)  ███
   ══════════════════════════════════════════════════════════════════════
   BACKEND TEAM — PLEASE READ:

   "Add funds" wizard: pick an amount, pick a payment method, confirm.
   Limits + methods are editable below.

   Wiring real data:
     • $current_balance → user's live account balance
     • $min/$max_deposit → from site settings (currency limits)
     • $presets → quick-amount buttons (from settings or A/B-tested)
     • $methods → enabled gateways for this user/country
   ══════════════════════════════════════════════════════════════════════ */

/* ──────────────────────────────────────────
   PAGE STATE  ('active' | 'loading' | 'error')
   ────────────────────────────────────────── */
$page_state = $_GET['state'] ?? 'active';

/* ──────────────────────────────────────────
   DEPOSIT LIMITS  (from site settings)
   ────────────────────────────────────────── */
$current_balance = 125.01;
$min_deposit     = 5;
$max_deposit     = 1000;

/* ──────────────────────────────────────────
   QUICK-AMOUNT PRESETS  (buttons above the input)
   ────────────────────────────────────────── */
$presets = [10, 25, 50, 100, 250, 500];

/* ──────────────────────────────────────────
   PAYMENT METHODS
   ──────────────────────────────────────────
   Each row:
   • id       → gateway slug (sent to backend on submit)
   • name     → display name
   • desc     → subtitle line
   • icon     → Font Awesome class
   • default  → bool; exactly ONE row should be true (pre-selected)
   ────────────────────────────────────────── */
$methods = [
    ['id' => 'stripe',  'name' => 'Credit / Debit Card', 'desc' => 'Visa, Mastercard, Amex',   'icon' => 'fas fa-credit-card', 'default' => true],
    ['id' => 'paypal',  'name' => 'PayPal',              'desc' => 'Pay with PayPal balance',   'icon' => 'fab fa-paypal',      'default' => false],
    ['id' => 'crypto',  'name' => 'Cryptocurrency',      'desc' => 'BTC, ETH, USDT & more',     'icon' => 'fab fa-bitcoin',     'default' => false],
    ['id' => 'binance', 'name' => 'Binance Pay',         'desc' => 'Pay with Binance wallet',   'icon' => 'fas fa-coins',       'default' => false],
    ['id' => 'alipay',  'name' => 'Alipay',              'desc' => 'China\'s leading payment',  'icon' => 'fab fa-alipay',      'default' => false],
];

/* ══════════════  END OF MOCK DATA  ══════════════ */
?>

<?php
$ph_title = __('nav_add_funds');
$ph_desc = __('add_funds_desc');
$ph_actions = '';
include __DIR__ . '/../../components/page-header.php';
?>

<?php if ($page_state === 'error'): ?>
    <div class="db-card"><?php $error_retry = true; include __DIR__ . '/../../components/error-state.php'; ?></div>

<?php elseif ($page_state === 'loading'): ?>
    <div class="db-detail-layout">
        <div>
            <div class="db-skeleton" style="height:200px; border-radius:var(--radius-md); margin-bottom:16px;"></div>
            <div class="db-skeleton" style="height:250px; border-radius:var(--radius-md);"></div>
        </div>
        <div><div class="db-skeleton" style="height:280px; border-radius:var(--radius-md);"></div></div>
    </div>

<?php else: ?>

<div class="db-detail-layout">
    <!-- ═══ LEFT: Amount + Payment ═══ -->
    <div>
        <!-- Amount Selection -->
        <div class="db-card db-mb">
            <div class="db-card-header db-card-header--md">
                <h2 class="db-card-title db-card-title--sm"><i class="db-card-title-icon fas fa-coins"></i> <?php echo e(__('add_funds_choose_amount')); ?></h2>
            </div>
            <div class="db-card-body db-card-body--dense">
                <div class="db-amount-grid" id="amountPresets">
                    <?php foreach ($presets as $p): ?>
                    <button class="db-amount-card" data-amount="<?php echo $p; ?>">
                        <span class="db-amount-card__value"><?php echo format_money($p, 0); ?></span>
                    </button>
                    <?php endforeach; ?>
                </div>

                <div class="db-amount-custom">
                    <label class="db-amount-custom__label"><?php echo e(__('add_funds_or_custom')); ?></label>
                    <div class="db-amount-input-lg">
                        <span class="db-amount-input-lg-symbol">€</span>
                        <input type="number" id="fundsAmount" min="<?php echo $min_deposit; ?>" max="<?php echo $max_deposit; ?>" step="0.01" placeholder="0.00" value="">
                    </div>
                    <div class="db-amount-custom__hint"><?php echo e(__('add_funds_min', ['amount' => format_money($min_deposit)])); ?> — <?php echo e(__('add_funds_max', ['amount' => format_money($max_deposit)])); ?></div>
                </div>
            </div>
        </div>

        <!-- Payment Method -->
        <div class="db-card">
            <div class="db-card-header db-card-header--md">
                <h2 class="db-card-title db-card-title--sm"><i class="db-card-title-icon fas fa-lock"></i> <?php echo e(__('invoices_txn_method')); ?></h2>
            </div>
            <div class="db-card-body db-card-body--tight">
                <div class="db-pay-grid">
                    <?php foreach ($methods as $m): ?>
                    <label class="db-pay-card<?php echo $m['default'] ? ' db-pay-card--active' : ''; ?>">
                        <input type="radio" name="pay_method" value="<?php echo e($m['id']); ?>" <?php echo $m['default'] ? 'checked' : ''; ?>>
                        <div class="db-pay-card__radio"></div>
                        <div class="db-pay-card__icon"><i class="<?php echo e($m['icon']); ?>"></i></div>
                        <div class="db-pay-card__info">
                            <div class="db-pay-card__name"><?php echo e($m['name']); ?></div>
                            <div class="db-pay-card__desc"><?php echo e($m['desc']); ?></div>
                        </div>
                    </label>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>

    <!-- ═══ RIGHT: Checkout Summary ═══ -->
    <div style="align-self:start; position:sticky; top:88px;">
        <div class="db-checkout-summary" style="position:static;">
            <div class="db-checkout-summary__section">
                <div class="db-checkout-summary__row">
                    <span><?php echo e(__('add_funds_current_balance')); ?></span>
                    <span><?php echo format_money($current_balance); ?></span>
                </div>
                <div class="db-checkout-summary__row db-checkout-summary__row--highlight">
                    <span><?php echo e(__('add_funds_adding')); ?></span>
                    <span id="summaryAdding">€0.00</span>
                </div>
            </div>

            <div class="db-checkout-summary__divider"></div>

            <div class="db-checkout-summary__section">
                <div class="db-checkout-summary__row db-checkout-summary__row--total">
                    <span><?php echo e(__('add_funds_new_balance')); ?></span>
                    <span id="summaryNewBalance"><?php echo format_money($current_balance); ?></span>
                </div>
            </div>

            <div class="db-checkout-summary__method">
                <span><?php echo e(__('add_funds_via')); ?></span>
                <span id="summaryMethod">Credit / Debit Card</span>
            </div>

            <button class="db-checkout-summary__pay" id="confirmFundsBtn" disabled onclick="DashToast.show('success','','Funds added successfully!')">
                <i class="fas fa-lock"></i>
                <span id="payBtnText"><?php echo e(__('nav_add_funds')); ?></span>
            </button>

            <div class="db-checkout-summary__trust">
                <div><i class="fas fa-shield-halved"></i> <?php echo e(__('add_funds_trust_secure')); ?></div>
                <div><i class="fas fa-bolt"></i> <?php echo e(__('add_funds_trust_instant')); ?></div>
                <div><i class="fas fa-eye-slash"></i> <?php echo e(__('add_funds_trust_no_fees')); ?></div>
            </div>
        </div>
    </div>
</div>

<?php endif; ?>

<div class="db-toast-container" id="toastContainer"></div>
<?php require_once __DIR__ . '/../../layouts/footer.php'; ?>
