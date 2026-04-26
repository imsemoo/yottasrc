<?php
/**
 * YottaSrc Dashboard — Payment Methods
 * =======================================
 * 1. Saved methods (primary)
 * 2. Add method wizard modal
 * 3. Payment settings (secondary)
 */

$page_title = null;
$breadcrumbs_data = null;

require_once __DIR__ . '/../../layouts/config.php';

$page_title = __('nav_payment_methods') . ' — ' . SITE_NAME;
$breadcrumbs_data = [
    ['label' => __('nav_dashboard'), 'url' => DASH_BASE_PATH . '/'],
    ['label' => __('nav_payment_methods'), 'url' => null],
];

require_once __DIR__ . '/../../layouts/shell.php';

/* ══════════════════════════════════════════════════════════════════════
   ███  PAYMENT METHODS  ·  MOCK DATA BLOCK  (single source of truth) ███
   ══════════════════════════════════════════════════════════════════════
   BACKEND TEAM — PLEASE READ:

   Two arrays:
     • $methods   → saved methods (rendered in the list)
     • $add_types → type picker inside the "Add method" modal
                    (usually static catalog from settings)

   Wiring real data:
     • $methods comes from the user's saved payment methods table.
     • Exactly ONE method should have 'default' => true.
   ══════════════════════════════════════════════════════════════════════ */

/* ──────────────────────────────────────────
   PAGE STATE  ('active' | 'loading' | 'error' | 'empty')
   ────────────────────────────────────────── */
$page_state = $_GET['state'] ?? 'active';

/* ──────────────────────────────────────────
   SAVED METHODS  (list rows)
   ──────────────────────────────────────────
   Each row:
   • id       → internal id (remove/set-default actions)
   • type     → 'visa' | 'mastercard' | 'paypal' | 'amex' | …
                (used for keying, not display)
   • brand    → display brand name
   • last4    → last 4 digits (cards only; empty for others)
   • expires  → 'MM/YYYY' (cards only; empty for others)
   • default  → bool; shows "Default" badge + disables Remove
   • icon     → Font Awesome class (brand icon)
   ────────────────────────────────────────── */
$methods = [
    ['id' => 1, 'type' => 'visa',       'brand' => 'Visa',       'last4' => '4242', 'expires' => '08/2028', 'default' => true,  'icon' => 'fab fa-cc-visa'],
    ['id' => 2, 'type' => 'mastercard', 'brand' => 'Mastercard', 'last4' => '5555', 'expires' => '12/2027', 'default' => false, 'icon' => 'fab fa-cc-mastercard'],
    ['id' => 3, 'type' => 'paypal',     'brand' => 'PayPal',     'last4' => '',     'expires' => '',        'default' => false, 'icon' => 'fab fa-cc-paypal'],
];

/* ──────────────────────────────────────────
   ADD-METHOD TYPE PICKER  (wizard step 1)
   ──────────────────────────────────────────
   Static catalog — enable/disable a type here to hide it from users.
   'color' values: 'primary' | 'accent' | 'success' | 'warning'
   ────────────────────────────────────────── */
$add_types = [
    ['id' => 'card',   'name' => __('pm_type_card'),   'desc' => __('pm_type_card_desc'),   'icon' => 'fas fa-credit-card',      'color' => 'primary'],
    ['id' => 'paypal', 'name' => 'PayPal',              'desc' => __('pm_type_paypal_desc'), 'icon' => 'fab fa-paypal',           'color' => 'primary'],
    ['id' => 'crypto', 'name' => __('pm_type_crypto'),  'desc' => __('pm_type_crypto_desc'), 'icon' => 'fab fa-bitcoin',          'color' => 'accent'],
    ['id' => 'bank',   'name' => __('pm_type_bank'),    'desc' => __('pm_type_bank_desc'),   'icon' => 'fas fa-building-columns', 'color' => 'success'],
];

/* ══════════════  END OF MOCK DATA  ══════════════ */
?>

<?php
$ph_title = __('nav_payment_methods');
$ph_desc = __('payment_methods_desc');
$ph_actions = '<button class="db-btn db-btn--primary" onclick="DashModal.open(\'addMethodModal\')"><i class="fas fa-plus"></i> ' . e(__('payment_methods_add')) . '</button>';
include __DIR__ . '/../../components/page-header.php';
?>

<?php if ($page_state === 'error'): ?>
    <div class="db-card"><?php $error_retry = true; include __DIR__ . '/../../components/error-state.php'; ?></div>

<?php elseif ($page_state === 'loading'): ?>
    <div style="display:flex; flex-direction:column; gap:10px;">
        <?php for ($i = 0; $i < 3; $i++): ?>
        <div class="db-skeleton" style="height:72px; border-radius:var(--radius-md);"></div>
        <?php endfor; ?>
    </div>

<?php elseif ($page_state === 'empty'): ?>
    <?php
    $es_icon   = 'fa-credit-card';
    $es_title  = __('payment_methods_empty_title');
    $es_desc   = __('payment_methods_empty_desc');
    $es_action = '<button class="db-btn db-btn--primary" onclick="DashModal.open(\'addMethodModal\')"><i class="fas fa-plus"></i> ' . e(__('payment_methods_add')) . '</button>';
    include __DIR__ . '/../../components/empty-state.php';
    ?>

<?php else: ?>

    <!-- Info Banner (like old dashboard) -->
    <div class="db-pm-banner">
        <div class="db-pm-banner__icon"><i class="fab fa-cc-visa"></i></div>
        <div class="db-pm-banner__content">
            <div class="db-pm-banner__title"><?php echo e(__('pm_banner_title')); ?></div>
            <p class="db-pm-banner__text"><?php echo e(__('pm_banner_text')); ?></p>
            <div class="db-pm-banner__tags">
                <span class="db-pm-banner__tag db-pm-banner__tag--warning">CryptoCurrency</span>
                <span class="db-pm-banner__tag db-pm-banner__tag--primary">Credit Card</span>
                <span class="db-pm-banner__tag db-pm-banner__tag--primary">PayPal</span>
                <span class="db-pm-banner__tag db-pm-banner__tag--success">Payeer</span>
                <span class="db-pm-banner__tag db-pm-banner__tag--warning">CoinBase</span>
                <span class="db-pm-banner__tag db-pm-banner__tag--warning">Binance</span>
                <span class="db-pm-banner__tag db-pm-banner__tag--primary">Alipay</span>
                <span class="db-pm-banner__tag db-pm-banner__tag--accent">Revolut</span>
                <span class="db-pm-banner__more"><?php echo e(__('pm_and_more')); ?></span>
            </div>
        </div>
    </div>

    <!-- Auto-save hint -->
    <div class="db-notice db-notice--info" style="margin-bottom:16px;">
        <i class="fas fa-circle-check"></i>
        <span><?php echo e(__('pm_auto_save_hint')); ?></span>
    </div>

    <!-- ═══ SAVED METHODS (primary) ═══ -->
    <div class="db-card db-mb">
        <div class="db-card-header db-card-header--dense">
            <h2 class="db-card-title db-card-title--sm"><i class="db-card-title-icon fas fa-credit-card"></i> <?php echo e(__('payment_methods_saved')); ?></h2>
            <span class="db-card-title-meta"><?php echo count($methods); ?> <?php echo e(__('pm_methods_count')); ?></span>
        </div>
        <div class="db-card-body db-card-body--flush">
            <div class="db-pm-list">
                <?php foreach ($methods as $m): ?>
                <div class="db-pm-item<?php echo $m['default'] ? ' db-pm-item--default' : ''; ?>">
                    <div class="db-pm-item__icon"><i class="<?php echo e($m['icon']); ?>"></i></div>
                    <div class="db-pm-item__info">
                        <div class="db-pm-item__name">
                            <?php echo e($m['brand']); ?><?php echo $m['last4'] ? ' •••• ' . e($m['last4']) : ''; ?>
                            <?php if ($m['default']): ?>
                            <span class="db-pm-item__default"><?php echo e(__('payment_methods_default')); ?></span>
                            <?php endif; ?>
                        </div>
                        <div class="db-pm-item__detail">
                            <?php if ($m['expires']): ?>
                                <?php echo e(__('payment_methods_expires')); ?> <?php echo e($m['expires']); ?>
                            <?php else: ?>
                                <?php echo e($m['brand']); ?> Account
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="db-pm-item__actions">
                        <?php if (!$m['default']): ?>
                        <button class="db-pm-item__action" onclick="DashToast.show('success','','Set as default.')" data-tooltip="<?php echo e(__('payment_methods_set_default')); ?>"><i class="fas fa-star"></i></button>
                        <?php endif; ?>
                        <button class="db-pm-item__action db-pm-item__action--danger" onclick="DashModal.open('removePaymentModal')" data-tooltip="<?php echo e(__('payment_methods_remove')); ?>"><i class="fas fa-trash"></i></button>
                    </div>
                </div>
                <?php endforeach; ?>

                <!-- Add new inline -->
                <button class="db-pm-add" onclick="DashModal.open('addMethodModal')">
                    <i class="fas fa-plus"></i>
                    <span><?php echo e(__('payment_methods_add')); ?></span>
                </button>
            </div>
        </div>
    </div>

    <!-- ═══ PAYMENT SETTINGS (secondary) ═══ -->
    <div class="db-card">
        <div class="db-card-header db-card-header--dense">
            <h2 class="db-card-title db-card-title--sm"><i class="db-card-title-icon fas fa-gear"></i> <?php echo e(__('payment_methods_settings')); ?></h2>
        </div>
        <div class="db-card-body" >
            <div class="db-settings-item">
                <div class="db-settings-item-info">
                    <div class="db-settings-item-title"><?php echo e(__('payment_methods_auto_card')); ?> <span class="db-settings-item-hint db-settings-item-hint--danger">(<?php echo e(__('pm_add_card_first')); ?>)</span></div>
                    <div class="db-settings-item-desc"><?php echo e(__('pm_auto_card_desc_full')); ?></div>
                </div>
                <div class="db-settings-item-control">
                    <label class="db-toggle"><input type="checkbox"><span class="db-toggle-track"><span class="db-toggle-thumb"></span></span></label>
                </div>
            </div>
            <div class="db-settings-item" style="border-bottom:none; padding-bottom:0;">
                <div class="db-settings-item-info">
                    <div class="db-settings-item-title"><?php echo e(__('payment_methods_auto_balance')); ?> <span class="db-badge db-badge--pending db-badge--inline">Soon</span></div>
                    <div class="db-settings-item-desc"><?php echo e(__('pm_auto_balance_desc_full')); ?></div>
                </div>
                <div class="db-settings-item-control">
                    <label class="db-toggle"><input type="checkbox" disabled><span class="db-toggle-track"><span class="db-toggle-thumb"></span></span></label>
                </div>
            </div>
        </div>
    </div>

<?php endif; ?>

<!-- ═══ ADD METHOD WIZARD MODAL ═══ -->
<?php
$modal_id = 'addMethodModal';
$modal_title = __('payment_methods_add');
$modal_size = 'md';
include __DIR__ . '/../../components/modal.php';
?>

<!-- Step indicator -->
<div class="db-wizard-steps" id="wizardSteps">
    <div class="db-wizard-step active" data-step="1"><span class="db-wizard-step__num">1</span> <?php echo e(__('dom_dns_type')); ?></div>
    <div class="db-wizard-step" data-step="2"><span class="db-wizard-step__num">2</span> <?php echo e(__('pm_step_details')); ?></div>
    <div class="db-wizard-step" data-step="3"><span class="db-wizard-step__num">3</span> <?php echo e(__('common_confirm')); ?></div>
</div>

<!-- Step 1: Choose type -->
<div class="db-wizard-panel active" id="wizStep1">
    <p class="db-wizard-lead"><?php echo e(__('pm_choose_type')); ?></p>
    <div class="db-pm-type-grid">
        <?php foreach ($add_types as $t): ?>
        <button class="db-pm-type-card" onclick="document.querySelectorAll('.db-pm-type-card').forEach(c=>c.classList.remove('active')); this.classList.add('active');">
            <div class="db-pm-type-card__icon db-pm-type-card__icon--<?php echo e($t['color']); ?>"><i class="<?php echo e($t['icon']); ?>"></i></div>
            <div class="db-pm-type-card__name"><?php echo e($t['name']); ?></div>
            <div class="db-pm-type-card__desc"><?php echo e($t['desc']); ?></div>
        </button>
        <?php endforeach; ?>
    </div>
</div>

<!-- Step 2: Enter details -->
<div class="db-wizard-panel" id="wizStep2">
    <div style="display:flex; flex-direction:column; gap:14px;">
        <div>
            <label class="db-form-label"><?php echo e(__('pm_card_number')); ?></label>
            <div class="db-card-input">
                <input type="text" class="db-input db-card-input__number" placeholder="1234 5678 9012 3456" maxlength="19">
                <span class="db-card-input__brands">
                    <i class="fab fa-cc-visa"></i>
                    <i class="fab fa-cc-mastercard"></i>
                </span>
            </div>
        </div>
        <div style="display:grid; grid-template-columns:1fr 1fr; gap:12px;">
            <div>
                <label class="db-form-label"><?php echo e(__('pm_card_expiry')); ?></label>
                <input type="text" class="db-input" placeholder="MM / YY" maxlength="7">
            </div>
            <div>
                <label class="db-form-label"><?php echo e(__('pm_card_cvv')); ?></label>
                <input type="text" class="db-input" placeholder="123" maxlength="4">
            </div>
        </div>
        <div>
            <label class="db-form-label"><?php echo e(__('pm_card_name')); ?></label>
            <input type="text" class="db-input" placeholder="<?php echo e(__('pm_card_name_placeholder')); ?>">
        </div>
    </div>
</div>

<!-- Step 3: Confirm -->
<div class="db-wizard-panel" id="wizStep3">
    <div class="db-success-panel db-success-panel--sm">
        <div class="db-success-panel__badge">
            <i class="fas fa-shield-halved"></i>
        </div>
        <div class="db-success-panel__title"><?php echo e(__('pm_confirm_title')); ?></div>
        <div class="db-success-panel__desc"><?php echo e(__('pm_confirm_desc')); ?></div>
        <label class="db-check-inline">
            <input type="checkbox" checked> <?php echo e(__('pm_set_default_new')); ?>
        </label>
    </div>
</div>

<?php
$modal_footer = '
<div class="db-wizard-footer">
    <button class="db-btn db-btn--ghost db-hidden" id="wizBack" onclick="pmWizard.prev()"><i class="fas fa-arrow-left"></i> ' . e(__('common_back')) . '</button>
    <div class="db-wizard-footer__spacer"></div>
    <button class="db-btn db-btn--primary" id="wizNext" onclick="pmWizard.next()">' . e(__('common_next')) . ' <i class="fas fa-arrow-right"></i></button>
    <button class="db-btn db-btn--primary db-hidden" id="wizSave" onclick="DashModal.close(document.querySelector(\'#addMethodModal\').closest(\'.db-modal-overlay\')); DashToast.show(\'success\',\'\',\'' . e(__('pm_added_success')) . '\');"><i class="fas fa-check"></i> ' . e(__('pm_save_method')) . '</button>
</div>';
include __DIR__ . '/../../components/modal-end.php';
?>

<!-- Remove Modal -->
<?php
$modal_id = 'removePaymentModal';
$modal_title = __('payment_methods_remove');
$modal_size = 'sm';
include __DIR__ . '/../../components/modal.php';

$cb_desc = __('payment_methods_remove_confirm'); $cb_icon = null; $cb_variant = 'danger';
$cb_target_label = null; $cb_target_value = null; $cb_warn = null;
include __DIR__ . '/../../components/confirm-body.php';

$modal_footer = '<button class="db-btn db-btn--secondary" data-modal-close>' . e(__('common_cancel')) . '</button>
<button class="db-btn db-btn--danger" onclick="DashModal.close(this.closest(\'.db-modal-overlay\')); DashToast.show(\'success\',\'\',\'Payment method removed.\');">' . e(__('common_confirm')) . '</button>';
include __DIR__ . '/../../components/modal-end.php';
?>

<!-- Wizard JS -->
<script>
var pmWizard = {
    step: 1,
    max: 3,
    go: function(s) {
        this.step = s;
        document.querySelectorAll('.db-wizard-panel').forEach(function(p,i) { p.classList.toggle('active', i === s-1); });
        document.querySelectorAll('.db-wizard-step').forEach(function(st,i) {
            st.classList.toggle('active', i < s);
            st.classList.toggle('current', i === s-1);
        });
        document.getElementById('wizBack').classList.toggle('db-hidden', s <= 1);
        document.getElementById('wizNext').classList.toggle('db-hidden', s >= this.max);
        document.getElementById('wizSave').classList.toggle('db-hidden', s !== this.max);
    },
    next: function() { if (this.step < this.max) this.go(this.step + 1); },
    prev: function() { if (this.step > 1) this.go(this.step - 1); }
};
</script>

<div class="db-toast-container" id="toastContainer"></div>
<?php require_once __DIR__ . '/../../layouts/footer.php'; ?>
