<?php
/**
 * YottaSrc Dashboard — Account Verification
 * ===========================================
 * 3-step wizard that gates access to Cloud Servers:
 *   Step 1 — Information (Purpose, Entity Type, Language, Referral Source)
 *   Step 2 — Payment      (Add ≥ €5 to balance + bullet notices)
 *   Step 3 — Finish        (Confirmation / pending state)
 *
 * Sub-states (via ?step=N or ?status=...):
 *   ?step=1|2|3        → which step is active
 *   ?status=submitted  → "Congratulations! Pending manual review" success state
 *
 * Page states (via ?state=...):
 *   active (default), loading, error
 */

$page_title = null;
$breadcrumbs_data = null;

require_once __DIR__ . '/../../layouts/config.php';

$page_title = __('verify_title') . ' — ' . SITE_NAME;
$breadcrumbs_data = [
    ['label' => __('nav_dashboard'),  'url' => DASH_BASE_PATH . '/'],
    ['label' => __('verify_title'),   'url' => null],
];

require_once __DIR__ . '/../../layouts/shell.php';

$page_state    = $_GET['state']  ?? 'active';
$current_step  = max(1, min(3, (int)($_GET['step'] ?? 1)));
$status        = $_GET['status'] ?? '';
$is_submitted  = ($status === 'submitted');

// Form options (mock data — backend will replace)
$purposes = [
    ['id' => 'website_hosting',   'label' => __('verify_purpose_website')],
    ['id' => 'app_dev',           'label' => __('verify_purpose_app')],
    ['id' => 'gaming',            'label' => __('verify_purpose_gaming')],
    ['id' => 'data_processing',   'label' => __('verify_purpose_data')],
    ['id' => 'machine_learning',  'label' => __('verify_purpose_ml')],
    ['id' => 'crypto',            'label' => __('verify_purpose_crypto')],
    ['id' => 'vpn',               'label' => __('verify_purpose_vpn')],
    ['id' => 'other',             'label' => __('verify_purpose_other')],
];

$entity_types = [
    ['id' => 'individual',  'label' => __('verify_entity_individual')],
    ['id' => 'business',    'label' => __('verify_entity_business')],
    ['id' => 'government',  'label' => __('verify_entity_government')],
    ['id' => 'nonprofit',   'label' => __('verify_entity_nonprofit')],
];

$languages_list = [
    ['id' => 'en', 'label' => 'English'],
    ['id' => 'ar', 'label' => 'العربية'],
    ['id' => 'fr', 'label' => 'Français'],
    ['id' => 'es', 'label' => 'Español'],
    ['id' => 'de', 'label' => 'Deutsch'],
    ['id' => 'tr', 'label' => 'Türkçe'],
];

$referral_sources = [
    ['id' => 'search',       'label' => __('verify_referral_search')],
    ['id' => 'social',       'label' => __('verify_referral_social')],
    ['id' => 'friend',       'label' => __('verify_referral_friend')],
    ['id' => 'forum',        'label' => __('verify_referral_forum')],
    ['id' => 'youtube',      'label' => __('verify_referral_youtube')],
    ['id' => 'ad',           'label' => __('verify_referral_ad')],
    ['id' => 'other',        'label' => __('verify_referral_other')],
];
?>

<?php
$ph_title = __('verify_title');
$ph_desc  = __('verify_desc');
$ph_actions = '';
include __DIR__ . '/../../components/page-header.php';
?>

<?php if ($page_state === 'error'): ?>

    <div class="db-card"><?php $error_retry = true; include __DIR__ . '/../../components/error-state.php'; ?></div>

<?php elseif ($page_state === 'loading'): ?>

    <div class="db-card">
        <div class="db-card-body" style="display:flex; flex-direction:column; align-items:center; gap:18px; padding:48px 24px;">
            <div class="db-skeleton" style="width:120px; height:36px;"></div>
            <div class="db-skeleton" style="width:80%; max-width:520px; height:46px;"></div>
            <div class="db-skeleton" style="width:60%; max-width:380px; height:14px;"></div>
            <div class="db-skeleton" style="width:60%; max-width:380px; height:14px;"></div>
        </div>
    </div>

<?php else: ?>

    <!-- ═══ MAIN VERIFICATION CARD ═══ -->
    <div class="db-card db-verify-card">
        <div class="db-card-header">
            <h3 class="db-card-title"><?php echo e(__('verify_card_title')); ?></h3>
        </div>
        <div class="db-card-body">

            <?php if ($is_submitted): ?>
            <!-- ── SUCCESS STATE: pending manual review ── -->
            <div class="db-verify-success">
                <div class="db-verify-success__brand">
                    <img src="<?php echo dash_asset('images/logo_dark.png'); ?>" alt="<?php echo SITE_NAME; ?>" class="db-verify-success__logo db-verify-success__logo--dark">
                    <img src="<?php echo dash_asset('images/logo_light.png'); ?>" alt="<?php echo SITE_NAME; ?>" class="db-verify-success__logo db-verify-success__logo--light">
                </div>
                <div class="db-verify-success__check">
                    <i class="fas fa-check"></i>
                </div>
                <h2 class="db-verify-success__title"><?php echo e(__('verify_success_title')); ?></h2>
                <p class="db-verify-success__desc"><?php echo e(__('verify_success_desc')); ?></p>
                <div class="db-verify-success__actions">
                    <a href="<?php echo DASH_BASE_PATH; ?>/" class="db-btn db-btn--primary">
                        <i class="fas fa-arrow-left"></i> <?php echo e(__('verify_back_dashboard')); ?>
                    </a>
                </div>
            </div>

            <?php else: ?>
            <!-- ── WIZARD STATE ── -->
            <div class="db-verify-wizard">

                <!-- Brand mark above stepper -->
                <div class="db-verify-wizard__brand">
                    <img src="<?php echo dash_asset('images/logo_dark.png'); ?>" alt="<?php echo SITE_NAME; ?>" class="db-verify-wizard__logo db-verify-wizard__logo--dark">
                    <img src="<?php echo dash_asset('images/logo_light.png'); ?>" alt="<?php echo SITE_NAME; ?>" class="db-verify-wizard__logo db-verify-wizard__logo--light">
                </div>

                <!-- Stepper (3 steps) -->
                <div class="db-verify-stepper" id="verifyStepper">
                    <?php
                    $steps = [
                        1 => __('verify_step_information'),
                        2 => __('verify_step_payment'),
                        3 => __('verify_step_finish'),
                    ];
                    foreach ($steps as $num => $label):
                        $is_active = ($num === $current_step);
                        $is_done   = ($num < $current_step);
                        $class = $is_active ? 'is-active' : ($is_done ? 'is-done' : '');
                    ?>
                    <button type="button" class="db-verify-step <?php echo $class; ?>" data-step="<?php echo $num; ?>">
                        <span class="db-verify-step__num">
                            <?php if ($is_done): ?>
                                <i class="fas fa-check"></i>
                            <?php else: ?>
                                <?php echo $num; ?>
                            <?php endif; ?>
                        </span>
                        <span class="db-verify-step__label"><?php echo e($label); ?></span>
                    </button>
                    <?php endforeach; ?>
                </div>

                <!-- Step Panels -->
                <div class="db-verify-panels">

                    <!-- ═══ STEP 1 — INFORMATION ═══ -->
                    <div class="db-verify-panel <?php echo $current_step === 1 ? 'is-active' : ''; ?>" data-panel="1">
                        <div class="db-verify-grid db-verify-grid--4">
                            <div class="db-form-group">
                                <label class="db-form-label" for="verifyPurpose"><?php echo e(__('verify_purpose')); ?></label>
                                <select class="db-select" id="verifyPurpose" name="purpose">
                                    <?php foreach ($purposes as $opt): ?>
                                    <option value="<?php echo e($opt['id']); ?>"><?php echo e($opt['label']); ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="db-form-group">
                                <label class="db-form-label" for="verifyEntity"><?php echo e(__('verify_entity_type')); ?></label>
                                <select class="db-select" id="verifyEntity" name="entity_type">
                                    <?php foreach ($entity_types as $opt): ?>
                                    <option value="<?php echo e($opt['id']); ?>"><?php echo e($opt['label']); ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="db-form-group">
                                <label class="db-form-label" for="verifyLang"><?php echo e(__('verify_language')); ?></label>
                                <select class="db-select" id="verifyLang" name="preferred_language">
                                    <?php foreach ($languages_list as $opt): ?>
                                    <option value="<?php echo e($opt['id']); ?>" <?php echo $opt['id'] === $current_lang ? 'selected' : ''; ?>><?php echo e($opt['label']); ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="db-form-group">
                                <label class="db-form-label" for="verifyReferral"><?php echo e(__('verify_referral')); ?></label>
                                <select class="db-select" id="verifyReferral" name="referral_source">
                                    <?php foreach ($referral_sources as $opt): ?>
                                    <option value="<?php echo e($opt['id']); ?>"><?php echo e($opt['label']); ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>

                        <div class="db-verify-actions db-verify-actions--end">
                            <button type="button" class="db-btn db-btn--primary" data-verify-next="2">
                                <?php echo e(__('verify_next_step')); ?> <i class="fas fa-arrow-right"></i>
                            </button>
                        </div>
                    </div>

                    <!-- ═══ STEP 2 — PAYMENT ═══ -->
                    <div class="db-verify-panel <?php echo $current_step === 2 ? 'is-active' : ''; ?>" data-panel="2">
                        <div class="db-verify-payment">
                            <p class="db-verify-payment__heading">
                                <?php echo e(__('verify_payment_heading')); ?>
                            </p>

                            <div class="db-verify-payment__input-row">
                                <div class="db-verify-amount">
                                    <span class="db-verify-amount__currency">€</span>
                                    <input type="number" id="verifyAmount" class="db-verify-amount__input" value="10" min="5" step="1" aria-label="<?php echo e(__('verify_amount_label')); ?>">
                                </div>
                                <button type="button" class="db-btn db-btn--secondary" id="verifyGenerateInvoice">
                                    <i class="fas fa-file-invoice"></i> <?php echo e(__('verify_generate_invoice')); ?>
                                </button>
                            </div>

                            <ul class="db-verify-notices">
                                <li>
                                    <i class="fas fa-circle-check"></i>
                                    <span><?php echo __('verify_notice_balance'); ?></span>
                                </li>
                                <li>
                                    <i class="fas fa-shield-halved"></i>
                                    <span><?php echo __('verify_notice_prohibited'); ?></span>
                                </li>
                                <li>
                                    <i class="fas fa-network-wired"></i>
                                    <span><?php echo __('verify_notice_port25'); ?></span>
                                </li>
                                <li class="db-verify-notices__warn">
                                    <i class="fas fa-triangle-exclamation"></i>
                                    <span><?php echo __('verify_notice_nonrefundable'); ?></span>
                                </li>
                            </ul>
                        </div>

                        <div class="db-verify-actions">
                            <button type="button" class="db-btn db-btn--ghost" data-verify-prev="1">
                                <i class="fas fa-arrow-left"></i> <?php echo e(__('verify_back')); ?>
                            </button>
                            <button type="button" class="db-btn db-btn--primary" data-verify-next="3">
                                <?php echo e(__('verify_next_step')); ?> <i class="fas fa-arrow-right"></i>
                            </button>
                        </div>
                    </div>

                    <!-- ═══ STEP 3 — FINISH (review + submit) ═══ -->
                    <div class="db-verify-panel <?php echo $current_step === 3 ? 'is-active' : ''; ?>" data-panel="3">
                        <div class="db-verify-finish">
                            <div class="db-verify-finish__icon"><i class="fas fa-clipboard-check"></i></div>
                            <h3 class="db-verify-finish__title"><?php echo e(__('verify_finish_title')); ?></h3>
                            <p class="db-verify-finish__desc"><?php echo e(__('verify_finish_desc')); ?></p>

                            <div class="db-verify-summary">
                                <div class="db-verify-summary__row">
                                    <span class="db-verify-summary__label"><?php echo e(__('verify_purpose')); ?></span>
                                    <span class="db-verify-summary__value" id="sumPurpose">—</span>
                                </div>
                                <div class="db-verify-summary__row">
                                    <span class="db-verify-summary__label"><?php echo e(__('verify_entity_type')); ?></span>
                                    <span class="db-verify-summary__value" id="sumEntity">—</span>
                                </div>
                                <div class="db-verify-summary__row">
                                    <span class="db-verify-summary__label"><?php echo e(__('verify_language')); ?></span>
                                    <span class="db-verify-summary__value" id="sumLang">—</span>
                                </div>
                                <div class="db-verify-summary__row">
                                    <span class="db-verify-summary__label"><?php echo e(__('verify_referral')); ?></span>
                                    <span class="db-verify-summary__value" id="sumReferral">—</span>
                                </div>
                                <div class="db-verify-summary__row">
                                    <span class="db-verify-summary__label"><?php echo e(__('verify_initial_funds')); ?></span>
                                    <span class="db-verify-summary__value" id="sumAmount">€10</span>
                                </div>
                            </div>

                            <label class="db-verify-tos">
                                <input type="checkbox" id="verifyTos">
                                <span class="db-verify-tos__box"></span>
                                <span class="db-verify-tos__text"><?php echo __('verify_tos_agree'); ?></span>
                            </label>
                        </div>

                        <div class="db-verify-actions">
                            <button type="button" class="db-btn db-btn--ghost" data-verify-prev="2">
                                <i class="fas fa-arrow-left"></i> <?php echo e(__('verify_back')); ?>
                            </button>
                            <button type="button" class="db-btn db-btn--primary" id="verifySubmitBtn">
                                <i class="fas fa-paper-plane"></i> <?php echo e(__('verify_submit')); ?>
                            </button>
                        </div>
                    </div>

                </div>
            </div>
            <?php endif; ?>

        </div>
    </div>

    <!-- ═══ INFO CARD (always visible below) ═══ -->
    <div class="db-card db-verify-info">
        <div class="db-card-body">
            <h4 class="db-verify-info__title"><?php echo e(__('verify_info_title')); ?></h4>
            <ul class="db-verify-info__list">
                <li><i class="fas fa-circle"></i> <?php echo e(__('verify_info_1')); ?></li>
                <li><i class="fas fa-circle"></i> <?php echo e(__('verify_info_2')); ?></li>
                <li><i class="fas fa-circle"></i> <?php echo __('verify_info_3'); ?></li>
                <li><i class="fas fa-circle"></i> <?php echo e(__('verify_info_4')); ?></li>
                <li><i class="fas fa-circle"></i> <?php echo __('verify_info_5'); ?></li>
            </ul>
        </div>
    </div>

<?php endif; ?>

<div class="db-toast-container" id="toastContainer"></div>

<script>
(function () {
    /* ── Wizard navigation ── */
    var stepperBtns = document.querySelectorAll('.db-verify-step');
    var panels      = document.querySelectorAll('.db-verify-panel');
    var wizard      = document.querySelector('.db-verify-wizard');
    if (!wizard) return;

    var currentStep = <?php echo $current_step; ?>;
    var maxReached  = currentStep;

    function setStep(target, opts) {
        target = parseInt(target, 10);
        if (isNaN(target) || target < 1 || target > 3) return;
        currentStep = target;
        if (target > maxReached) maxReached = target;

        // Stepper visual state
        stepperBtns.forEach(function (b) {
            var n = parseInt(b.getAttribute('data-step'), 10);
            b.classList.remove('is-active', 'is-done');
            var numEl = b.querySelector('.db-verify-step__num');
            if (n === currentStep) {
                b.classList.add('is-active');
                numEl.innerHTML = String(n);
            } else if (n < currentStep) {
                b.classList.add('is-done');
                numEl.innerHTML = '<i class="fas fa-check"></i>';
            } else {
                numEl.innerHTML = String(n);
            }
        });

        // Panel visibility
        panels.forEach(function (p) {
            var n = parseInt(p.getAttribute('data-panel'), 10);
            p.classList.toggle('is-active', n === currentStep);
        });

        // URL sync (history.replaceState — no reload)
        if (!opts || !opts.skipUrl) {
            var url = new URL(window.location);
            url.searchParams.set('step', String(currentStep));
            history.replaceState(null, '', url.toString());
        }

        // Focus + scroll
        var first = document.querySelector('.db-verify-panel.is-active select, .db-verify-panel.is-active input');
        if (first && currentStep !== 3) setTimeout(function () { first.focus(); }, 50);
        wizard.scrollIntoView({ behavior: 'smooth', block: 'start' });
    }

    /* ── Validation per step ── */
    function validateStep(step) {
        var panel = document.querySelector('.db-verify-panel[data-panel="' + step + '"]');
        if (!panel) return true;
        var inputs = panel.querySelectorAll('select[required], input[required]');
        for (var i = 0; i < inputs.length; i++) {
            if (!inputs[i].value || !inputs[i].checkValidity()) {
                inputs[i].reportValidity();
                inputs[i].focus();
                return false;
            }
        }
        if (step === 2) {
            var amt = parseFloat(document.getElementById('verifyAmount').value);
            if (isNaN(amt) || amt < 5) {
                if (window.DashToast) DashToast.show('error', '', '<?php echo e(__('verify_min_amount_error')); ?>');
                document.getElementById('verifyAmount').focus();
                return false;
            }
        }
        return true;
    }

    /* ── Build summary on entering step 3 ── */
    function buildSummary() {
        function selText(id) {
            var el = document.getElementById(id);
            return el ? el.options[el.selectedIndex].textContent : '—';
        }
        var s = function (k) { return document.getElementById(k); };
        if (s('sumPurpose'))  s('sumPurpose').textContent  = selText('verifyPurpose');
        if (s('sumEntity'))   s('sumEntity').textContent   = selText('verifyEntity');
        if (s('sumLang'))     s('sumLang').textContent     = selText('verifyLang');
        if (s('sumReferral')) s('sumReferral').textContent = selText('verifyReferral');
        if (s('sumAmount')) {
            var amt = parseFloat((s('verifyAmount') || {}).value || 10);
            s('sumAmount').textContent = '€' + (isNaN(amt) ? '10' : amt.toFixed(2).replace(/\.00$/, ''));
        }
    }

    /* ── Wire next/back/stepper buttons ── */
    document.querySelectorAll('[data-verify-next]').forEach(function (btn) {
        btn.addEventListener('click', function () {
            if (!validateStep(currentStep)) return;
            var target = parseInt(btn.getAttribute('data-verify-next'), 10);
            if (target === 3) buildSummary();
            setStep(target);
        });
    });
    document.querySelectorAll('[data-verify-prev]').forEach(function (btn) {
        btn.addEventListener('click', function () {
            setStep(parseInt(btn.getAttribute('data-verify-prev'), 10));
        });
    });
    stepperBtns.forEach(function (b) {
        b.addEventListener('click', function () {
            var target = parseInt(b.getAttribute('data-step'), 10);
            // Allow jumping back freely; forward only if reached
            if (target <= maxReached) {
                if (target === 3) buildSummary();
                setStep(target);
            }
        });
    });

    /* ── Generate invoice (mock) ── */
    var genBtn = document.getElementById('verifyGenerateInvoice');
    if (genBtn) {
        genBtn.addEventListener('click', function () {
            if (window.DashToast) DashToast.show('success', '', '<?php echo e(__('verify_invoice_generated')); ?>');
        });
    }

    /* ── Submit ── */
    var submitBtn = document.getElementById('verifySubmitBtn');
    if (submitBtn) {
        submitBtn.addEventListener('click', function () {
            var tos = document.getElementById('verifyTos');
            if (!tos.checked) {
                if (window.DashToast) DashToast.show('warning', '', '<?php echo e(__('verify_tos_required')); ?>');
                return;
            }
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<i class="fas fa-circle-notch fa-spin"></i> <?php echo e(__('verify_submitting')); ?>';
            setTimeout(function () {
                window.location.href = '<?php echo DASH_BASE_PATH; ?>/pages/verification/index.php?status=submitted';
            }, 900);
        });
    }
})();
</script>

<?php require_once __DIR__ . '/../../layouts/footer.php'; ?>
