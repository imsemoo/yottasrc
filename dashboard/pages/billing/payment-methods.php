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

$page_title = __('payment_methods_title') . ' — ' . SITE_NAME;
$breadcrumbs_data = [
    ['label' => __('nav_dashboard'), 'url' => DASH_BASE_PATH . '/'],
    ['label' => __('nav_payment_methods'), 'url' => null],
];

require_once __DIR__ . '/../../layouts/shell.php';

$page_state = $_GET['state'] ?? 'active';

$methods = [
    ['id' => 1, 'type' => 'visa',       'brand' => 'Visa',       'last4' => '4242', 'expires' => '08/2028', 'default' => true,  'icon' => 'fab fa-cc-visa'],
    ['id' => 2, 'type' => 'mastercard',  'brand' => 'Mastercard', 'last4' => '5555', 'expires' => '12/2027', 'default' => false, 'icon' => 'fab fa-cc-mastercard'],
    ['id' => 3, 'type' => 'paypal',      'brand' => 'PayPal',     'last4' => '',     'expires' => '',        'default' => false, 'icon' => 'fab fa-cc-paypal'],
];

$add_types = [
    ['id' => 'card',   'name' => __('pm_type_card'),   'desc' => __('pm_type_card_desc'),   'icon' => 'fas fa-credit-card', 'color' => 'primary'],
    ['id' => 'paypal', 'name' => 'PayPal',              'desc' => __('pm_type_paypal_desc'), 'icon' => 'fab fa-paypal',      'color' => 'primary'],
    ['id' => 'crypto', 'name' => __('pm_type_crypto'),  'desc' => __('pm_type_crypto_desc'), 'icon' => 'fab fa-bitcoin',     'color' => 'accent'],
    ['id' => 'bank',   'name' => __('pm_type_bank'),    'desc' => __('pm_type_bank_desc'),   'icon' => 'fas fa-building-columns', 'color' => 'success'],
];
?>

<?php
$ph_title = __('payment_methods_title');
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
    <div class="db-card"><div class="db-empty-state">
        <div class="db-empty-illustration db-empty-illustration--services"><i class="fas fa-credit-card"></i></div>
        <h3 class="db-empty-title"><?php echo e(__('payment_methods_empty_title')); ?></h3>
        <p class="db-empty-desc"><?php echo e(__('payment_methods_empty_desc')); ?></p>
        <button class="db-btn db-btn--primary" onclick="DashModal.open('addMethodModal')"><i class="fas fa-plus"></i> <?php echo e(__('payment_methods_add')); ?></button>
    </div></div>

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
                <span style="font-size:0.74rem; color:var(--text-tertiary); align-self:center;"><?php echo e(__('pm_and_more')); ?></span>
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
        <div class="db-card-header" style="padding:12px 18px;">
            <h2 class="db-card-title" style="font-size:0.82rem;"><i class="db-card-title-icon fas fa-credit-card"></i> <?php echo e(__('payment_methods_saved')); ?></h2>
            <span style="font-size:0.72rem; color:var(--text-tertiary);"><?php echo count($methods); ?> <?php echo e(__('pm_methods_count')); ?></span>
        </div>
        <div class="db-card-body" style="padding:0;">
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
                        <button class="db-pm-item__action db-pm-item__action--danger" onclick="DashModal.open('removePaymentModal')" data-tooltip="<?php echo e(__('payment_methods_remove')); ?>"><i class="fas fa-trash-can"></i></button>
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
        <div class="db-card-header" style="padding:12px 18px;">
            <h2 class="db-card-title" style="font-size:0.82rem;"><i class="db-card-title-icon fas fa-gear"></i> <?php echo e(__('payment_methods_settings')); ?></h2>
        </div>
        <div class="db-card-body" >
            <div class="db-settings-item">
                <div class="db-settings-item-info">
                    <div class="db-settings-item-title"><?php echo e(__('payment_methods_auto_card')); ?> <span style="color:var(--status-overdue); font-size:0.74rem; font-weight:600;">(<?php echo e(__('pm_add_card_first')); ?>)</span></div>
                    <div class="db-settings-item-desc"><?php echo e(__('pm_auto_card_desc_full')); ?></div>
                </div>
                <div class="db-settings-item-control">
                    <label class="db-toggle"><input type="checkbox"><span class="db-toggle-track"><span class="db-toggle-thumb"></span></span></label>
                </div>
            </div>
            <div class="db-settings-item" style="border-bottom:none; padding-bottom:0;">
                <div class="db-settings-item-info">
                    <div class="db-settings-item-title"><?php echo e(__('payment_methods_auto_balance')); ?> <span class="db-badge db-badge--pending" style="margin-left:6px; font-size:0.6rem;">Soon</span></div>
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
    <div class="db-wizard-step active" data-step="1"><span class="db-wizard-step__num">1</span> <?php echo e(__('pm_step_type')); ?></div>
    <div class="db-wizard-step" data-step="2"><span class="db-wizard-step__num">2</span> <?php echo e(__('pm_step_details')); ?></div>
    <div class="db-wizard-step" data-step="3"><span class="db-wizard-step__num">3</span> <?php echo e(__('pm_step_confirm')); ?></div>
</div>

<!-- Step 1: Choose type -->
<div class="db-wizard-panel active" id="wizStep1">
    <p style="font-size:0.8rem; color:var(--text-secondary); margin-bottom:14px;"><?php echo e(__('pm_choose_type')); ?></p>
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
            <div style="position:relative;">
                <input type="text" class="db-input" placeholder="1234 5678 9012 3456" maxlength="19" style="padding-right:60px;">
                <span style="position:absolute; right:12px; top:50%; transform:translateY(-50%); display:flex; gap:4px; opacity:0.4;">
                    <i class="fab fa-cc-visa" style="font-size:1.1rem;"></i>
                    <i class="fab fa-cc-mastercard" style="font-size:1.1rem;"></i>
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
    <div style="text-align:center; padding:12px 0;">
        <div style="width:52px; height:52px; border-radius:50%; background:rgba(16,185,129,0.12); display:inline-flex; align-items:center; justify-content:center; margin-bottom:12px;">
            <i class="fas fa-shield-halved" style="font-size:1.3rem; color:var(--status-active);"></i>
        </div>
        <div style="font-family:var(--font-display); font-size:0.92rem; font-weight:700; color:var(--text-primary); margin-bottom:4px;"><?php echo e(__('pm_confirm_title')); ?></div>
        <div style="font-size:0.78rem; color:var(--text-secondary); margin-bottom:16px;"><?php echo e(__('pm_confirm_desc')); ?></div>
        <label style="display:inline-flex; align-items:center; gap:8px; font-size:0.8rem; color:var(--text-secondary); cursor:pointer;">
            <input type="checkbox" checked style="accent-color:var(--brand-primary);"> <?php echo e(__('pm_set_default_new')); ?>
        </label>
    </div>
</div>

<?php
$modal_footer = '
<div style="display:flex; justify-content:space-between; width:100%;">
    <button class="db-btn db-btn--ghost" id="wizBack" style="display:none;" onclick="pmWizard.prev()"><i class="fas fa-arrow-left"></i> ' . e(__('common_back')) . '</button>
    <div style="flex:1;"></div>
    <button class="db-btn db-btn--primary" id="wizNext" onclick="pmWizard.next()">' . e(__('common_next')) . ' <i class="fas fa-arrow-right"></i></button>
    <button class="db-btn db-btn--primary" id="wizSave" style="display:none;" onclick="DashModal.close(document.querySelector(\'#addMethodModal\').closest(\'.db-modal-overlay\')); DashToast.show(\'success\',\'\',\'' . e(__('pm_added_success')) . '\');"><i class="fas fa-check"></i> ' . e(__('pm_save_method')) . '</button>
</div>';
include __DIR__ . '/../../components/modal-end.php';
?>

<!-- Remove Modal -->
<?php
$modal_id = 'removePaymentModal';
$modal_title = __('payment_methods_remove');
$modal_size = 'sm';
include __DIR__ . '/../../components/modal.php';
?>
<div class="db-confirm-body">
    <div class="db-modal-icon db-modal-icon--danger"><i class="fas fa-trash-can"></i></div>
    <p><?php echo e(__('payment_methods_remove_confirm')); ?></p>
</div>
<?php
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
        document.getElementById('wizBack').style.display = s > 1 ? '' : 'none';
        document.getElementById('wizNext').style.display = s < this.max ? '' : 'none';
        document.getElementById('wizSave').style.display = s === this.max ? '' : 'none';
    },
    next: function() { if (this.step < this.max) this.go(this.step + 1); },
    prev: function() { if (this.step > 1) this.go(this.step - 1); }
};
</script>

<div class="db-toast-container" id="toastContainer"></div>
<?php require_once __DIR__ . '/../../layouts/footer.php'; ?>
