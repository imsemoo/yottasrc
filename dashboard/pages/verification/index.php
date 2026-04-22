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

/* ══════════════════════════════════════════════════════════════════════
   ███  VERIFICATION  ·  MOCK DATA BLOCK  (single source of truth)  ███
   ══════════════════════════════════════════════════════════════════════
   BACKEND TEAM — PLEASE READ:

   KYC verification wizard — 3 steps. The arrays below drive the
   form options (purposes, entity types, languages, referral sources).
   All are static catalogs.

   Wiring real data:
     • Catalogs are usually fine as-is; adjust if product requirements
       change (adding a new verification purpose, etc.).
     • $page_state / $current_step / $status come from the URL for
       design states — replace with real wizard-state from the DB.
   ══════════════════════════════════════════════════════════════════════ */

/* ──────────────────────────────────────────
   PAGE STATE + WIZARD STATE
   ──────────────────────────────────────────
   • page_state   → 'active' | 'loading' | 'error'
   • current_step → 1..3 (current wizard step; clamped)
   • status       → if 'submitted', the success-confirmation view renders
   ────────────────────────────────────────── */
$page_state    = $_GET['state']  ?? 'active';
$current_step  = max(1, min(3, (int)($_GET['step'] ?? 1)));
$status        = $_GET['status'] ?? '';
$is_submitted  = ($status === 'submitted');

/* ──────────────────────────────────────────
   PURPOSES  (select: "What will you use our services for?")
   Extend when a new product category needs a purpose flag.
   ────────────────────────────────────────── */
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

/* ──────────────────────────────────────────
   ENTITY TYPES  (select: individual vs business)
   ────────────────────────────────────────── */
$entity_types = [
    ['id' => 'individual',  'label' => __('verify_entity_individual')],
    ['id' => 'business',    'label' => __('verify_entity_business')],
    ['id' => 'government',  'label' => __('verify_entity_government')],
    ['id' => 'nonprofit',   'label' => __('verify_entity_nonprofit')],
];

/* ──────────────────────────────────────────
   LANGUAGES  (preferred communication language)
   Labels are shown native-form (not translated).
   ────────────────────────────────────────── */
$languages_list = [
    ['id' => 'en', 'label' => 'English'],
    ['id' => 'ar', 'label' => 'العربية'],
    ['id' => 'fr', 'label' => 'Français'],
    ['id' => 'es', 'label' => 'Español'],
    ['id' => 'de', 'label' => 'Deutsch'],
    ['id' => 'tr', 'label' => 'Türkçe'],
];

/* ──────────────────────────────────────────
   REFERRAL SOURCES  ("How did you hear about us?")
   Used for growth/marketing analytics.
   ────────────────────────────────────────── */
$referral_sources = [
    ['id' => 'search',   'label' => __('verify_referral_search')],
    ['id' => 'social',   'label' => __('verify_referral_social')],
    ['id' => 'friend',   'label' => __('verify_referral_friend')],
    ['id' => 'forum',    'label' => __('verify_referral_forum')],
    ['id' => 'youtube',  'label' => __('verify_referral_youtube')],
    ['id' => 'ad',       'label' => __('verify_referral_ad')],
    ['id' => 'other',    'label' => __('verify_referral_other')],
];

/* ══════════════  END OF MOCK DATA  ══════════════ */
?>

<div class="db-vx">

<?php if ($page_state === 'error'): ?>

    <div class="db-card"><?php $error_retry = true; include __DIR__ . '/../../components/error-state.php'; ?></div>

<?php elseif ($page_state === 'loading'): ?>

    <!-- Wizard hero (title + subtitle) -->
    <div class="db-card db-mb">
        <div class="db-card-body db-card-body--hero">
            <div class="db-skeleton db-skeleton--heading" style="width: 60%; max-width: 420px; height: 36px;"></div>
            <div class="db-skeleton db-skeleton--text-sm" style="width: 80%; max-width: 520px; margin-top: 10px;"></div>
        </div>
    </div>

    <!-- Stepper (3 steps: Scope → Amount → Review) + form panel -->
    <?php
        $skel_stepper_count   = 3;
        $skel_stepper_current = 0;
        $skel_stepper_panel   = true;
        $skel_stepper_rows    = 4;
        include __DIR__ . '/../../components/skeleton-stepper.php';
    ?>

<?php elseif ($is_submitted): ?>

    <!-- ═══ SUCCESS STATE ═══ -->
    <div class="db-vx-done">
        <div class="db-vx-done__badge">
            <svg class="db-vx-done__check" viewBox="0 0 52 52" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <circle class="db-vx-done__check-circle" cx="26" cy="26" r="24" fill="none" stroke-width="2"/>
                <path class="db-vx-done__check-path" fill="none" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round" d="M14 27 l8 8 l16 -16"/>
            </svg>
        </div>
        <span class="ds-eyebrow ds-eyebrow--success">
            <i class="fas fa-circle-check"></i>
            <?php echo e(__('verify_vx_done_eyebrow')); ?>
        </span>
        <h1 class="db-vx-done__title"><?php echo e(__('verify_vx_done_title')); ?></h1>
        <p class="db-vx-done__sub"><?php echo e(__('verify_vx_done_sub')); ?></p>

        <div class="db-vx-done__meanwhile">
            <div class="db-vx-done__meanwhile-title"><?php echo e(__('verify_vx_done_meanwhile')); ?></div>
            <ul class="db-vx-done__list">
                <li>
                    <i class="fas fa-compass"></i>
                    <div>
                        <strong><?php echo e(__('verify_vx_done_item1_title')); ?></strong>
                        <span><?php echo e(__('verify_vx_done_item1_desc')); ?></span>
                    </div>
                </li>
                <li>
                    <i class="fas fa-book-open"></i>
                    <div>
                        <strong><?php echo e(__('verify_vx_done_item2_title')); ?></strong>
                        <span><?php echo e(__('verify_vx_done_item2_desc')); ?></span>
                    </div>
                </li>
                <li>
                    <i class="fas fa-life-ring"></i>
                    <div>
                        <strong><?php echo e(__('verify_vx_done_item3_title')); ?></strong>
                        <span><?php echo e(__('verify_vx_done_item3_desc')); ?></span>
                    </div>
                </li>
            </ul>
        </div>

        <a href="<?php echo DASH_BASE_PATH; ?>/" class="ds-btn ds-btn--primary db-vx-done__cta">
            <i class="fas fa-arrow-left"></i>
            <span><?php echo e(__('verify_back_dashboard')); ?></span>
        </a>
    </div>

<?php else: ?>

    <!-- Intro hero (same shape as Create Server) -->
    <section class="ds-hero ds-hero--compact">
        <div class="ds-hero__top">
            <div class="ds-hero__title-block">
                <span class="ds-eyebrow">
                    <i class="fas fa-shield-halved"></i>
                    <?php echo e(__('verify_vx_eyebrow')); ?>
                </span>
                <h1 class="ds-hero__title" style="margin-top:10px;"><?php echo e(__('verify_vx_intro_title')); ?></h1>
                <p class="ds-hero__sub"><?php echo e(__('verify_vx_intro_sub')); ?></p>
            </div>
        </div>
    </section>

    <!-- Stepper (reuses Create Server's .db-cs-stepper) -->
    <?php
    $vx_steps = [
        1 => __('verify_vx_step_nav_info'),
        2 => __('verify_vx_step_nav_pay'),
        3 => __('verify_vx_step_nav_review'),
    ];
    ?>
    <div class="db-cs-stepper" id="vxStepper" data-current="<?php echo $current_step; ?>">
        <?php foreach ($vx_steps as $n => $label):
            $active   = ($n === $current_step);
            $complete = ($n < $current_step);
            $class    = $active ? 'is-active' : ($complete ? 'is-complete' : '');
        ?>
        <div class="db-cs-stepper__step <?php echo $class; ?>" data-stepper="<?php echo $n; ?>">
            <div class="db-cs-stepper__circle">
                <span class="db-cs-stepper__num"><?php echo $n; ?></span>
                <i class="fas fa-check db-cs-stepper__tick"></i>
            </div>
            <div class="db-cs-stepper__label">
                <span class="db-cs-stepper__meta"><?php echo e(__('verify_vx_step_prefix')); ?> <?php echo $n; ?></span>
                <span class="db-cs-stepper__name"><?php echo e($label); ?></span>
            </div>
        </div>
        <?php if ($n < 3): ?>
        <div class="db-cs-stepper__line"></div>
        <?php endif; ?>
        <?php endforeach; ?>
    </div>

    <!-- Single form card holds all 3 panels -->
    <div class="ds-section db-verify-wizard">
        <div class="db-verify-panels">

            <!-- ═══ STEP 1: Information ═══ -->
            <div class="db-verify-panel <?php echo $current_step === 1 ? 'is-active' : ''; ?>" data-panel="1">
                <header class="db-cs-step-head">
                    <span class="ds-eyebrow"><?php echo e(__('verify_vx_step_prefix')); ?> 1 / 3</span>
                    <h2 class="db-cs-step-head__title"><?php echo e(__('verify_vx_step1_title')); ?></h2>
                    <p class="db-cs-step-head__sub"><?php echo e(__('verify_vx_step1_sub')); ?></p>
                </header>

                <div class="db-vx-fields db-vx-fields--2col">
                    <div class="db-vx-field">
                        <label class="db-vx-field__label" for="verifyPurpose"><?php echo e(__('verify_vx_q_purpose')); ?></label>
                        <select class="db-vx-select" id="verifyPurpose" name="purpose" required>
                            <?php foreach ($purposes as $opt): ?>
                            <option value="<?php echo e($opt['id']); ?>"><?php echo e($opt['label']); ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="db-vx-field">
                        <label class="db-vx-field__label" for="verifyEntity"><?php echo e(__('verify_vx_q_entity')); ?></label>
                        <select class="db-vx-select" id="verifyEntity" name="entity_type" required>
                            <?php foreach ($entity_types as $opt): ?>
                            <option value="<?php echo e($opt['id']); ?>"><?php echo e($opt['label']); ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="db-vx-field">
                        <label class="db-vx-field__label" for="verifyLang"><?php echo e(__('verify_vx_q_language')); ?></label>
                        <select class="db-vx-select" id="verifyLang" name="preferred_language" required>
                            <?php foreach ($languages_list as $opt): ?>
                            <option value="<?php echo e($opt['id']); ?>" <?php echo $opt['id'] === $current_lang ? 'selected' : ''; ?>><?php echo e($opt['label']); ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="db-vx-field">
                        <label class="db-vx-field__label" for="verifyReferral"><?php echo e(__('verify_vx_q_referral')); ?></label>
                        <select class="db-vx-select" id="verifyReferral" name="referral_source" required>
                            <?php foreach ($referral_sources as $opt): ?>
                            <option value="<?php echo e($opt['id']); ?>"><?php echo e($opt['label']); ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>

                <div class="db-vx-nav db-vx-nav--end">
                    <button type="button" class="ds-btn ds-btn--primary" data-verify-next="2">
                        <span><?php echo e(__('verify_vx_continue')); ?></span>
                        <i class="fas fa-arrow-right"></i>
                    </button>
                </div>
            </div>

            <!-- ═══ STEP 2: Payment ═══ -->
            <div class="db-verify-panel <?php echo $current_step === 2 ? 'is-active' : ''; ?>" data-panel="2">
                <header class="db-cs-step-head">
                    <span class="ds-eyebrow"><?php echo e(__('verify_vx_step_prefix')); ?> 2 / 3</span>
                    <h2 class="db-cs-step-head__title"><?php echo e(__('verify_vx_step2_title')); ?></h2>
                    <p class="db-cs-step-head__sub"><?php echo e(__('verify_vx_step2_sub')); ?></p>
                </header>

                <div class="db-vx-amount-wrap">
                    <div class="db-vx-amount">
                        <span class="db-vx-amount__currency">€</span>
                        <input type="number" id="verifyAmount" class="db-vx-amount__input" value="10" min="5" step="1" aria-label="<?php echo e(__('verify_amount_label')); ?>">
                    </div>
                    <div class="db-vx-chips">
                        <button type="button" class="db-vx-chip" data-vx-amount="5">€5</button>
                        <button type="button" class="db-vx-chip is-active" data-vx-amount="10">€10</button>
                        <button type="button" class="db-vx-chip" data-vx-amount="25">€25</button>
                        <button type="button" class="db-vx-chip" data-vx-amount="50">€50</button>
                        <button type="button" class="db-vx-chip" data-vx-amount="100">€100</button>
                    </div>
                </div>

                <!-- One compact note — replaces the 4 reassure cards -->
                <div class="db-vx-note">
                    <i class="fas fa-circle-info"></i>
                    <div>
                        <strong><?php echo e(__('verify_vx_note_title')); ?></strong>
                        <span><?php echo e(__('verify_vx_note_desc')); ?></span>
                    </div>
                </div>

                <div class="db-vx-nav">
                    <button type="button" class="ds-btn ds-btn--ghost" data-verify-prev="1">
                        <i class="fas fa-arrow-left"></i>
                        <span><?php echo e(__('verify_back')); ?></span>
                    </button>
                    <span class="db-vx-nav__spacer">
                        <button type="button" class="ds-btn ds-btn--ghost ds-btn--sm" id="verifyGenerateInvoice">
                            <i class="fas fa-file-invoice"></i>
                            <span><?php echo e(__('verify_generate_invoice')); ?></span>
                        </button>
                    </span>
                    <button type="button" class="ds-btn ds-btn--primary" data-verify-next="3">
                        <span><?php echo e(__('verify_vx_continue')); ?></span>
                        <i class="fas fa-arrow-right"></i>
                    </button>
                </div>
            </div>

            <!-- ═══ STEP 3: Review ═══ -->
            <div class="db-verify-panel <?php echo $current_step === 3 ? 'is-active' : ''; ?>" data-panel="3">
                <header class="db-cs-step-head">
                    <span class="ds-eyebrow"><?php echo e(__('verify_vx_step_prefix')); ?> 3 / 3</span>
                    <h2 class="db-cs-step-head__title"><?php echo e(__('verify_vx_step3_title')); ?></h2>
                    <p class="db-cs-step-head__sub"><?php echo e(__('verify_vx_step3_sub')); ?></p>
                </header>

                <dl class="db-vx-summary">
                    <div class="db-vx-summary__row">
                        <dt><?php echo e(__('verify_purpose')); ?></dt>
                        <dd id="sumPurpose">—</dd>
                        <button type="button" class="db-vx-summary__edit" data-verify-prev="1" title="<?php echo e(__('verify_vx_edit')); ?>"><i class="fas fa-pen"></i></button>
                    </div>
                    <div class="db-vx-summary__row">
                        <dt><?php echo e(__('verify_entity_type')); ?></dt>
                        <dd id="sumEntity">—</dd>
                        <button type="button" class="db-vx-summary__edit" data-verify-prev="1" title="<?php echo e(__('verify_vx_edit')); ?>"><i class="fas fa-pen"></i></button>
                    </div>
                    <div class="db-vx-summary__row">
                        <dt><?php echo e(__('verify_language')); ?></dt>
                        <dd id="sumLang">—</dd>
                        <button type="button" class="db-vx-summary__edit" data-verify-prev="1" title="<?php echo e(__('verify_vx_edit')); ?>"><i class="fas fa-pen"></i></button>
                    </div>
                    <div class="db-vx-summary__row">
                        <dt><?php echo e(__('verify_referral')); ?></dt>
                        <dd id="sumReferral">—</dd>
                        <button type="button" class="db-vx-summary__edit" data-verify-prev="1" title="<?php echo e(__('verify_vx_edit')); ?>"><i class="fas fa-pen"></i></button>
                    </div>
                    <div class="db-vx-summary__row db-vx-summary__row--amount">
                        <dt><?php echo e(__('verify_vx_starting_balance')); ?></dt>
                        <dd id="sumAmount">€10</dd>
                        <button type="button" class="db-vx-summary__edit" data-verify-prev="2" title="<?php echo e(__('verify_vx_edit')); ?>"><i class="fas fa-pen"></i></button>
                    </div>
                </dl>

                <label class="db-vx-tos">
                    <input type="checkbox" id="verifyTos">
                    <span class="db-vx-tos__box"></span>
                    <span class="db-vx-tos__text"><?php echo __('verify_tos_agree'); ?></span>
                </label>

                <div class="db-vx-nav">
                    <button type="button" class="ds-btn ds-btn--ghost" data-verify-prev="2">
                        <i class="fas fa-arrow-left"></i>
                        <span><?php echo e(__('verify_back')); ?></span>
                    </button>
                    <button type="button" class="ds-btn ds-btn--primary" id="verifySubmitBtn">
                        <i class="fas fa-paper-plane"></i>
                        <span><?php echo e(__('verify_submit')); ?></span>
                    </button>
                </div>
            </div>

        </div>
    </div>

<?php endif; ?>

</div><!-- /.db-vx -->
<div class="db-toast-container" id="toastContainer"></div>

<script>
(function () {
    /* ── Wizard navigation ── */
    var panels  = document.querySelectorAll('.db-verify-panel');
    var wizard  = document.querySelector('.db-verify-wizard');
    var stepper = document.getElementById('vxStepper');
    if (!wizard) return;

    var currentStep = <?php echo $current_step; ?>;

    function setStep(target, opts) {
        target = parseInt(target, 10);
        if (isNaN(target) || target < 1 || target > 3) return;
        currentStep = target;

        // Panel visibility
        panels.forEach(function (p) {
            var n = parseInt(p.getAttribute('data-panel'), 10);
            p.classList.toggle('is-active', n === currentStep);
        });

        // Stepper sync (same pattern as Create Server)
        if (stepper) {
            stepper.setAttribute('data-current', String(currentStep));
            stepper.querySelectorAll('[data-stepper]').forEach(function (el) {
                var idx = parseInt(el.getAttribute('data-stepper'), 10);
                el.classList.toggle('is-active', idx === currentStep);
                el.classList.toggle('is-complete', idx < currentStep);
            });
        }

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

    /* ── Amount picker: chips sync to the input ── */
    var amountInput = document.getElementById('verifyAmount');
    var amountChips = document.querySelectorAll('.db-vx-chip[data-vx-amount]');
    function syncAmount(val) {
        amountChips.forEach(function (c) {
            c.classList.toggle('is-active', String(c.getAttribute('data-vx-amount')) === String(val));
        });
    }
    if (amountInput) {
        amountInput.addEventListener('input', function () { syncAmount(amountInput.value); });
        amountChips.forEach(function (c) {
            c.addEventListener('click', function () {
                amountInput.value = c.getAttribute('data-vx-amount');
                syncAmount(amountInput.value);
            });
        });
        syncAmount(amountInput.value);
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
