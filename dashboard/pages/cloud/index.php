<?php
/**
 * YottaSrc Dashboard — Cloud Hub
 * ================================
 * Account-level cloud overview with 4 tabs:
 *   • Projects   — list of projects + "+ New Project"
 *   • Billing    — cloud-only billing summary (usage, last invoice, autorecharge)
 *   • Limits     — resource meters + Limit Increase CTA
 *   • Referral   — stats + promo cards + referral code
 *
 * Page states: active (default), loading, error, empty
 * URL hash: #tab-projects, #tab-billing, #tab-limits, #tab-referral
 */

$page_title = null;
$breadcrumbs_data = null;

require_once __DIR__ . '/../../layouts/config.php';

$page_title = __('cloud_title') . ' — ' . SITE_NAME;
$breadcrumbs_data = [
    ['label' => __('nav_dashboard'),   'url' => DASH_BASE_PATH . '/'],
    ['label' => __('cloud_title'),     'url' => null],
];

require_once __DIR__ . '/../../layouts/shell.php';

$page_state = $_GET['state'] ?? 'active';

// Mock data — backend will replace
$projects = [
    [
        'id'       => '27389',
        'name'     => 'ahsplay',
        'servers'  => 1,
        'created'  => '2 days ago',
    ],
    [
        'id'       => '27156',
        'name'     => 'website-prod',
        'servers'  => 3,
        'created'  => '1 week ago',
    ],
    [
        'id'       => '26921',
        'name'     => 'staging-env',
        'servers'  => 2,
        'created'  => '3 weeks ago',
    ],
];

$limits_stats = [
    'servers'   => ['used' => 0, 'max' => 5],
    'ips'       => ['used' => 0, 'max' => 5],
    'projects'  => ['used' => 1, 'max' => 5],
    'terminate' => ['used' => 0, 'max' => 15],
];

$referral_stats = [
    'referrals' => 0,
    'pending'   => 0,
    'paid'      => 0,
];

$billing_summary = [
    'current_month_usage' => 0.01,
    'last_invoice'        => 7.49,
    'next_charge'         => 0.00,
    'next_charge_date'    => '01/05/2026',
    'lifetime_spent'      => 14.98,
];

$autorecharge_enabled = false;
?>

<?php
$ph_title   = __('cloud_title');
$ph_desc    = __('cloud_desc');
$ph_actions = '';
include __DIR__ . '/../../components/page-header.php';
?>

<!-- Verification banner (shown only for unverified accounts; backend sets $is_verified) -->
<?php
$is_verified = $is_verified ?? false;
if (!$is_verified) {
    include __DIR__ . '/../../components/verification-banner.php';
}
?>

<?php if ($page_state === 'error'): ?>

    <div class="db-card"><?php $error_retry = true; include __DIR__ . '/../../components/error-state.php'; ?></div>

<?php elseif ($page_state === 'loading'): ?>

    <div style="display:flex; gap:8px; margin-bottom:20px;">
        <?php for ($i = 0; $i < 4; $i++): ?>
        <div class="db-skeleton" style="width:120px; height:38px; border-radius:var(--radius-sm);"></div>
        <?php endfor; ?>
    </div>
    <div class="db-skeleton" style="width:100%; height:200px; border-radius:var(--radius-md);"></div>

<?php else: ?>

    <!-- ═══ TAB BAR ═══ -->
    <div class="db-tab-bar" data-tab-bar data-tab-content="#cloudTabs">
        <button type="button" class="db-tab-bar__btn is-active" data-tab-target="projects">
            <i class="fas fa-folder"></i> <?php echo e(__('cloud_tab_projects')); ?>
            <span class="db-tab-bar__count"><?php echo count($projects); ?></span>
        </button>
        <button type="button" class="db-tab-bar__btn" data-tab-target="billing">
            <i class="fas fa-receipt"></i> <?php echo e(__('cloud_tab_billing')); ?>
        </button>
        <button type="button" class="db-tab-bar__btn" data-tab-target="limits">
            <i class="fas fa-gauge-high"></i> <?php echo e(__('cloud_tab_limits')); ?>
        </button>
        <button type="button" class="db-tab-bar__btn" data-tab-target="referral">
            <i class="fas fa-gift"></i> <?php echo e(__('cloud_tab_referral')); ?>
        </button>
    </div>

    <!-- ═══ TAB PANES ═══ -->
    <div id="cloudTabs">

        <!-- ═══════════════════════════════════════════
             PANE — PROJECTS
             ═══════════════════════════════════════════ -->
        <div class="db-tab-pane is-active" data-tab-pane="projects">
            <div class="db-cloud-section-head">
                <div>
                    <h3 class="db-cloud-section-title">
                        <i class="fas fa-folder-open"></i> <?php echo e(__('cloud_projects_title')); ?>
                    </h3>
                </div>
            </div>

            <?php if ($page_state === 'empty' || empty($projects)): ?>
                <!-- Empty state: only the "New Project" card -->
                <div class="db-project-grid">
                    <button type="button" class="db-project-card db-project-card--new" data-modal-open="newProjectModal">
                        <div class="db-project-card--new__icon"><i class="fas fa-plus"></i></div>
                        <div class="db-project-card--new__label"><?php echo e(__('cloud_new_project')); ?></div>
                    </button>
                </div>
                <div class="db-cloud-info">
                    <i class="fas fa-circle-info"></i>
                    <span><?php echo __('cloud_projects_warn'); ?></span>
                </div>

            <?php else: ?>
                <!-- Populated state: project cards + new card -->
                <div class="db-project-grid">
                    <?php foreach ($projects as $p):
                        $project_url = DASH_BASE_PATH . '/pages/cloud/project/servers.php?id=' . urlencode($p['id']);
                    ?>
                    <div class="db-project-card-wrap">
                        <a href="<?php echo e($project_url); ?>" class="db-project-card">
                            <div class="db-project-card__head">
                                <div class="db-project-card__icon">
                                    <i class="fas fa-folder"></i>
                                </div>
                                <div style="min-width:0; flex:1;">
                                    <div class="db-project-card__id">#<?php echo e($p['id']); ?></div>
                                    <h4 class="db-project-card__name"><?php echo e($p['name']); ?></h4>
                                </div>
                            </div>
                            <div class="db-project-card__meta">
                                <span class="db-project-card__meta-item">
                                    <i class="fas fa-server"></i>
                                    <?php echo e(__('cloud_project_servers', ['count' => $p['servers']])); ?>
                                </span>
                                <span class="db-project-card__meta-item">
                                    <i class="fas fa-clock"></i>
                                    <?php echo e($p['created']); ?>
                                </span>
                                <i class="fas fa-arrow-right db-project-card__arrow"></i>
                            </div>
                        </a>
                        <!-- Action menu (sits on top of the card) -->
                        <div class="db-project-card__menu db-dropdown-wrapper">
                            <button type="button" class="db-project-card__menu-btn" data-dropdown-toggle aria-label="<?php echo e(__('cloud_project_actions')); ?>">
                                <i class="fas fa-ellipsis-vertical"></i>
                            </button>
                            <div class="db-dropdown-menu">
                                <a href="<?php echo e($project_url); ?>" class="db-dropdown-item">
                                    <i class="fas fa-arrow-up-right-from-square"></i> <?php echo e(__('cloud_project_open')); ?>
                                </a>
                                <button class="db-dropdown-item" data-rename-project data-project-id="<?php echo e($p['id']); ?>" data-project-name="<?php echo e($p['name']); ?>">
                                    <i class="fas fa-pen"></i> <?php echo e(__('cloud_project_rename')); ?>
                                </button>
                                <button class="db-dropdown-item" onclick="navigator.clipboard.writeText('#<?php echo e($p['id']); ?>'); DashToast.show('success','','Project ID copied.')">
                                    <i class="fas fa-copy"></i> <?php echo e(__('cloud_project_copy_id')); ?>
                                </button>
                                <div class="db-dropdown-divider"></div>
                                <button class="db-dropdown-item db-dropdown-item--danger" data-delete-project data-project-id="<?php echo e($p['id']); ?>" data-project-name="<?php echo e($p['name']); ?>">
                                    <i class="fas fa-trash"></i> <?php echo e(__('cloud_project_delete')); ?>
                                </button>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>

                    <button type="button" class="db-project-card db-project-card--new" data-modal-open="newProjectModal">
                        <div class="db-project-card--new__icon"><i class="fas fa-plus"></i></div>
                        <div class="db-project-card--new__label"><?php echo e(__('cloud_new_project')); ?></div>
                    </button>
                </div>
                <div class="db-cloud-info">
                    <i class="fas fa-circle-info"></i>
                    <span><?php echo __('cloud_projects_warn'); ?></span>
                </div>
            <?php endif; ?>
        </div>


        <!-- ═══════════════════════════════════════════
             PANE — BILLING
             ═══════════════════════════════════════════ -->
        <div class="db-tab-pane" data-tab-pane="billing">
            <div class="db-cloud-section-head">
                <h3 class="db-cloud-section-title">
                    <i class="fas fa-receipt"></i> <?php echo e(__('cloud_billing_title')); ?>
                </h3>
            </div>

            <!-- 4 mini stat cards -->
            <div class="db-cloud-billing-summary">
                <div class="db-cloud-bill-card">
                    <div class="db-cloud-bill-card__label">
                        <i class="fas fa-circle-dollar-to-slot"></i>
                        <?php echo e(__('cloud_bill_current_usage')); ?>
                    </div>
                    <div class="db-cloud-bill-card__value">€<?php echo number_format($billing_summary['current_month_usage'], 2); ?></div>
                    <div class="db-cloud-bill-card__sub"><?php echo e(__('cloud_bill_this_month')); ?></div>
                </div>

                <div class="db-cloud-bill-card">
                    <div class="db-cloud-bill-card__label">
                        <i class="fas fa-file-invoice"></i>
                        <?php echo e(__('cloud_bill_last_invoice')); ?>
                    </div>
                    <div class="db-cloud-bill-card__value">€<?php echo number_format($billing_summary['last_invoice'], 2); ?></div>
                    <div class="db-cloud-bill-card__sub">INV-1047</div>
                </div>

                <div class="db-cloud-bill-card">
                    <div class="db-cloud-bill-card__label">
                        <i class="fas fa-calendar"></i>
                        <?php echo e(__('cloud_bill_next_charge')); ?>
                    </div>
                    <div class="db-cloud-bill-card__value">€<?php echo number_format($billing_summary['next_charge'], 2); ?></div>
                    <div class="db-cloud-bill-card__sub"><?php echo e($billing_summary['next_charge_date']); ?></div>
                </div>

                <div class="db-cloud-bill-card">
                    <div class="db-cloud-bill-card__label">
                        <i class="fas fa-chart-line"></i>
                        <?php echo e(__('cloud_bill_lifetime')); ?>
                    </div>
                    <div class="db-cloud-bill-card__value">€<?php echo number_format($billing_summary['lifetime_spent'], 2); ?></div>
                    <div class="db-cloud-bill-card__sub"><?php echo e(__('cloud_bill_total_spent')); ?></div>
                </div>
            </div>

            <!-- Auto-recharge card -->
            <div class="db-cloud-autorecharge">
                <div class="db-cloud-autorecharge__info">
                    <div class="db-cloud-autorecharge__icon">
                        <i class="fas fa-rotate"></i>
                    </div>
                    <div>
                        <h4 class="db-cloud-autorecharge__title"><?php echo e(__('cloud_autorecharge_title')); ?></h4>
                        <p class="db-cloud-autorecharge__desc">
                            <?php echo e($autorecharge_enabled ? __('cloud_autorecharge_on') : __('cloud_autorecharge_off')); ?>
                        </p>
                    </div>
                </div>
                <label class="db-toggle">
                    <input type="checkbox" <?php echo $autorecharge_enabled ? 'checked' : ''; ?> onchange="DashToast.show('info','',this.checked?'<?php echo e(__('cloud_autorecharge_enabled')); ?>':'<?php echo e(__('cloud_autorecharge_disabled')); ?>')">
                    <span class="db-toggle-track"><span class="db-toggle-thumb"></span></span>
                </label>
            </div>

            <!-- Recent cloud invoices link -->
            <div class="db-cloud-info">
                <i class="fas fa-circle-info"></i>
                <span>
                    <?php echo e(__('cloud_billing_invoices_link_text')); ?>
                    <a href="<?php echo DASH_BASE_PATH; ?>/pages/billing/invoices.php" style="color:var(--brand-primary); font-weight:600; text-decoration:none;">
                        <?php echo e(__('cloud_billing_invoices_link')); ?> →
                    </a>
                </span>
            </div>
        </div>


        <!-- ═══════════════════════════════════════════
             PANE — LIMITS
             ═══════════════════════════════════════════ -->
        <div class="db-tab-pane" data-tab-pane="limits">

            <!-- Intro card -->
            <div class="db-limits-intro">
                <div class="db-limits-intro__icon">
                    <i class="fas fa-gauge-high"></i>
                </div>
                <div>
                    <div class="db-limits-intro__title"><?php echo e(__('cloud_limits_title')); ?></div>
                    <p class="db-limits-intro__desc"><?php echo e(__('cloud_limits_desc')); ?></p>
                </div>
            </div>

            <!-- Limit increase CTA -->
            <div class="db-limits-cta">
                <div class="db-limits-cta__text">
                    <?php echo e(__('cloud_limits_cta_text')); ?>
                </div>
                <button type="button" class="db-limits-cta__btn" onclick="DashToast.show('info','','<?php echo e(__('cloud_limits_cta_coming')); ?>')">
                    <i class="fas fa-plus"></i> <?php echo e(__('cloud_limits_increase')); ?>
                </button>
            </div>

            <!-- Resource meters -->
            <?php
            function render_meter($key, $label, $stats, $bar_class = '') {
                $pct = $stats['max'] > 0 ? round(($stats['used'] / $stats['max']) * 100) : 0;
                $bar_modifier = $bar_class ?: '';
                $pct_modifier = $bar_class ? str_replace('db-resource-card__bar--', 'db-resource-card__pct--', $bar_class) : '';
                ?>
                <div class="db-resource-card">
                    <div class="db-resource-card__head">
                        <div class="db-resource-card__label"><?php echo e($label); ?></div>
                        <div class="db-resource-card__count">
                            <span class="db-resource-card__count-used"><?php echo $stats['used']; ?></span><span class="db-resource-card__count-divider">/</span><span class="db-resource-card__count-max"><?php echo $stats['max']; ?></span>
                        </div>
                    </div>
                    <div class="db-resource-card__bar-wrap">
                        <div class="db-resource-card__pct <?php echo $pct_modifier; ?>"><?php echo $pct; ?>%</div>
                        <div class="db-resource-card__bar <?php echo $bar_modifier; ?>" style="width:<?php echo $pct; ?>%;"></div>
                    </div>
                </div>
                <?php
            }
            ?>

            <div class="db-resource-grid">
                <?php render_meter('servers',   __('cloud_limit_servers'),   $limits_stats['servers']); ?>
                <?php render_meter('ips',       __('cloud_limit_ips'),       $limits_stats['ips']); ?>
                <?php render_meter('projects',  __('cloud_limit_projects'),  $limits_stats['projects'], 'db-resource-card__bar--green'); ?>
                <?php render_meter('terminate', __('cloud_limit_terminate'), $limits_stats['terminate']); ?>
            </div>
        </div>


        <!-- ═══════════════════════════════════════════
             PANE — REFERRAL
             ═══════════════════════════════════════════ -->
        <div class="db-tab-pane" data-tab-pane="referral">

            <!-- 3 stat cards -->
            <div class="db-cloud-stats">
                <div class="db-cloud-stat">
                    <div class="db-cloud-stat__icon db-cloud-stat__icon--purple">
                        <i class="fas fa-user-check"></i>
                    </div>
                    <div class="db-cloud-stat__body">
                        <div class="db-cloud-stat__label"><?php echo e(__('cloud_referral_referrals')); ?></div>
                        <div class="db-cloud-stat__value"><?php echo $referral_stats['referrals']; ?></div>
                    </div>
                </div>

                <div class="db-cloud-stat">
                    <div class="db-cloud-stat__icon db-cloud-stat__icon--yellow">
                        <i class="fas fa-hourglass-half"></i>
                    </div>
                    <div class="db-cloud-stat__body">
                        <div class="db-cloud-stat__label"><?php echo e(__('cloud_referral_pending')); ?></div>
                        <div class="db-cloud-stat__value">€<?php echo number_format($referral_stats['pending'], 0); ?> EUR</div>
                    </div>
                </div>

                <div class="db-cloud-stat">
                    <div class="db-cloud-stat__icon db-cloud-stat__icon--green">
                        <i class="fas fa-circle-dollar-to-slot"></i>
                    </div>
                    <div class="db-cloud-stat__body">
                        <div class="db-cloud-stat__label"><?php echo e(__('cloud_referral_paid')); ?></div>
                        <div class="db-cloud-stat__value">€<?php echo number_format($referral_stats['paid'], 0); ?> EUR</div>
                    </div>
                </div>
            </div>

            <!-- 2 promo cards -->
            <div class="db-promo-grid">
                <div class="db-promo-card db-promo-card--purple">
                    <div class="db-promo-card__icon">
                        <i class="fas fa-circle-dollar-to-slot"></i>
                    </div>
                    <div class="db-promo-card__body">
                        <h4 class="db-promo-card__title"><?php echo e(__('cloud_promo_15_title')); ?></h4>
                        <p class="db-promo-card__desc"><?php echo e(__('cloud_promo_15_desc')); ?></p>
                    </div>
                </div>

                <div class="db-promo-card db-promo-card--green">
                    <div class="db-promo-card__icon">
                        <i class="fas fa-gift"></i>
                    </div>
                    <div class="db-promo-card__body">
                        <h4 class="db-promo-card__title"><?php echo e(__('cloud_promo_10_title')); ?></h4>
                        <p class="db-promo-card__desc"><?php echo e(__('cloud_promo_10_desc')); ?></p>
                    </div>
                </div>
            </div>

            <!-- Referral code card -->
            <div class="db-referral-code-card">
                <div class="db-referral-code-card__header">
                    <h4 class="db-referral-code-card__title">
                        <i class="fas fa-qrcode"></i>
                        <?php echo e(__('cloud_referral_code_title')); ?>
                    </h4>
                </div>
                <div class="db-referral-code-card__body">
                    <i class="fas fa-rocket"></i>
                    <p><?php echo e(__('cloud_referral_code_coming')); ?></p>
                </div>
            </div>
        </div>

    </div>

<?php endif; ?>

<!-- ═══════════════════════════════════════════
     NEW PROJECT MODAL
     ═══════════════════════════════════════════ -->
<?php
$modal_id    = 'newProjectModal';
$modal_title = __('cloud_new_project_modal_title');
$modal_size  = 'sm';
include __DIR__ . '/../../components/modal.php';
?>
    <form class="db-form" id="newProjectForm" onsubmit="return handleNewProject(event)">
        <p class="db-modal-lead"><?php echo e(__('cloud_new_project_modal_desc')); ?></p>

        <div class="db-form-group">
            <label class="db-form-label" for="projectName"><?php echo e(__('cloud_project_name_label')); ?> <span class="db-required">*</span></label>
            <div class="db-input-icon-wrapper">
                <input type="text" id="projectName" name="name" class="db-input"
                       placeholder="<?php echo e(__('cloud_project_name_placeholder')); ?>"
                       pattern="[A-Za-z0-9\-_ ]{3,30}"
                       minlength="3" maxlength="30"
                       required autocomplete="off">
                <i class="fas fa-folder-open db-input-icon"></i>
            </div>
            <div class="db-form-hint"><?php echo e(__('cloud_project_name_hint')); ?></div>
        </div>

        <div class="db-form-group">
            <label class="db-form-label" for="projectDesc"><?php echo e(__('cloud_project_desc_label')); ?> <span class="db-form-label-meta">(<?php echo e(__('common_optional')); ?>)</span></label>
            <textarea id="projectDesc" name="description" class="db-input db-textarea"
                      rows="3" maxlength="200"
                      placeholder="<?php echo e(__('cloud_project_desc_placeholder')); ?>"></textarea>
        </div>

        <div class="db-notice db-notice--info" style="margin-top:4px;">
            <i class="fas fa-circle-info"></i>
            <span><?php echo __('cloud_new_project_modal_notice'); ?></span>
        </div>
    </form>
<?php
$modal_footer = '
    <button type="button" class="db-btn db-btn--secondary" data-modal-close>
        ' . e(__('common_cancel')) . '
    </button>
    <button type="button" class="db-btn db-btn--primary" id="newProjectSubmit">
        <i class="fas fa-plus"></i> ' . e(__('cloud_create_project')) . '
    </button>
';
include __DIR__ . '/../../components/modal-end.php';
?>

<div class="db-toast-container" id="toastContainer"></div>

<script>
/* ═══════════════════════════════════════════
   NEW PROJECT — creation flow
   ═══════════════════════════════════════════ */
(function () {
    var submitBtn = document.getElementById('newProjectSubmit');
    var form = document.getElementById('newProjectForm');
    var nameInput = document.getElementById('projectName');
    var descInput = document.getElementById('projectDesc');
    if (!submitBtn || !form) return;

    // Focus input when modal opens
    document.querySelectorAll('[data-modal-open="newProjectModal"]').forEach(function (btn) {
        btn.addEventListener('click', function () {
            setTimeout(function () {
                nameInput.focus();
                nameInput.select();
            }, 120);
        });
    });

    function generateProjectId() {
        // Mock: generate a random 5-digit ID (backend will assign real IDs)
        return String(Math.floor(20000 + Math.random() * 80000));
    }

    function createProjectCard(id, name) {
        var a = document.createElement('a');
        a.href = '<?php echo DASH_BASE_PATH; ?>/pages/cloud/project/servers.php?id=' + encodeURIComponent(id);
        a.className = 'db-project-card';
        a.setAttribute('data-project-id', id);
        a.innerHTML =
            '<div class="db-project-card__head">' +
                '<div class="db-project-card__icon"><i class="fas fa-folder"></i></div>' +
                '<div style="min-width:0; flex:1;">' +
                    '<div class="db-project-card__id">#' + id + '</div>' +
                    '<h4 class="db-project-card__name"></h4>' +
                '</div>' +
            '</div>' +
            '<div class="db-project-card__meta">' +
                '<span class="db-project-card__meta-item">' +
                    '<i class="fas fa-server"></i> 0 <?php echo e(__('cloud_servers_word')); ?>' +
                '</span>' +
                '<span class="db-project-card__meta-item">' +
                    '<i class="fas fa-clock"></i> <?php echo e(__('cloud_just_now')); ?>' +
                '</span>' +
                '<i class="fas fa-arrow-right db-project-card__arrow"></i>' +
            '</div>';
        a.querySelector('.db-project-card__name').textContent = name;
        return a;
    }

    function handleSubmit() {
        if (!form.reportValidity()) return;

        var name = (nameInput.value || '').trim();
        if (!name) return;

        // Loading state
        submitBtn.disabled = true;
        var originalHtml = submitBtn.innerHTML;
        submitBtn.innerHTML = '<i class="fas fa-circle-notch fa-spin"></i> <?php echo e(__('cloud_creating')); ?>';

        setTimeout(function () {
            // Generate new project
            var newId = generateProjectId();
            var newCard = createProjectCard(newId, name);

            // Insert into grid (before the "+ New Project" card)
            var grid = document.querySelector('.db-project-grid');
            var newBtnCard = grid.querySelector('.db-project-card--new');
            if (grid && newBtnCard) {
                grid.insertBefore(newCard, newBtnCard);
            }

            // Update count badge on the Projects tab
            var countBadge = document.querySelector('[data-tab-target="projects"] .db-tab-bar__count');
            if (countBadge) {
                var current = parseInt(countBadge.textContent, 10) || 0;
                countBadge.textContent = String(current + 1);
            }

            // Close modal + reset form
            var overlay = document.getElementById('newProjectModal');
            if (window.DashModal) DashModal.close(overlay);
            form.reset();
            submitBtn.disabled = false;
            submitBtn.innerHTML = originalHtml;

            // Success toast
            if (window.DashToast) {
                DashToast.show('success', '', '<?php echo e(__('cloud_project_created', ['id' => '#'])); ?>'.replace('#', '#' + newId));
            }

            // Make sure Projects tab is visible
            if (window.DashTabs) {
                var bar = document.querySelector('[data-tab-bar]');
                if (bar) {
                    var projBtn = bar.querySelector('[data-tab-target="projects"]');
                    if (projBtn && !projBtn.classList.contains('is-active')) projBtn.click();
                }
            }
        }, 700);
    }

    submitBtn.addEventListener('click', handleSubmit);
    form.addEventListener('submit', function (e) { e.preventDefault(); handleSubmit(); });

    // Enter in any field = submit (except textarea — allow newlines)
    nameInput.addEventListener('keydown', function (e) {
        if (e.key === 'Enter') { e.preventDefault(); handleSubmit(); }
    });
})();

// Stub for handleNewProject (HTML form onsubmit)
function handleNewProject(e) { e.preventDefault(); return false; }


/* ═══ Rename Project ═══ */
(function () {
    var renameModal = document.getElementById('renameProjectModal');
    if (!renameModal) return;
    var renameIdEl = document.getElementById('renameProjectId');
    var renameInput = document.getElementById('renameProjectName');
    var renameSaveBtn = document.getElementById('renameProjectSave');
    var targetCard = null;

    document.querySelectorAll('[data-rename-project]').forEach(function (btn) {
        btn.addEventListener('click', function () {
            var id = btn.getAttribute('data-project-id');
            var name = btn.getAttribute('data-project-name');
            targetCard = btn.closest('.db-project-card-wrap');
            renameIdEl.textContent = '#' + id;
            renameInput.value = name;
            DashModal.open('renameProjectModal');
            setTimeout(function () { renameInput.focus(); renameInput.select(); }, 100);
        });
    });

    function save() {
        var val = (renameInput.value || '').trim();
        if (val.length < 3 || val.length > 30) {
            if (window.DashToast) DashToast.show('error', '', <?php echo json_encode(__('cloud_project_rename_invalid')); ?>);
            return;
        }
        if (targetCard) {
            var nameEl = targetCard.querySelector('.db-project-card__name');
            if (nameEl) nameEl.textContent = val;
        }
        DashModal.close(renameModal);
        if (window.DashToast) DashToast.show('success', '', <?php echo json_encode(__('cloud_project_rename_success')); ?>);
    }
    renameSaveBtn.addEventListener('click', save);
    renameInput.addEventListener('keydown', function (e) {
        if (e.key === 'Enter') { e.preventDefault(); save(); }
    });
})();


/* ═══ Delete Project ═══ */
(function () {
    var modal = document.getElementById('deleteProjectModal');
    if (!modal) return;
    var nameEl = document.getElementById('deleteProjectName');
    var confirmBtn = document.getElementById('deleteProjectConfirm');
    var targetCard = null;
    var targetId = null;

    document.querySelectorAll('[data-delete-project]').forEach(function (btn) {
        btn.addEventListener('click', function () {
            targetId = btn.getAttribute('data-project-id');
            var name = btn.getAttribute('data-project-name');
            targetCard = btn.closest('.db-project-card-wrap');
            nameEl.textContent = '#' + targetId + ' - ' + name;
            DashModal.open('deleteProjectModal');
        });
    });

    confirmBtn.addEventListener('click', function () {
        if (targetCard) {
            targetCard.style.transition = 'opacity 0.25s, transform 0.25s';
            targetCard.style.opacity = '0';
            targetCard.style.transform = 'scale(0.96)';
            setTimeout(function () { targetCard.remove(); }, 270);
        }
        // Decrement count
        var countBadge = document.querySelector('[data-tab-target="projects"] .db-tab-bar__count');
        if (countBadge) {
            var c = parseInt(countBadge.textContent, 10) || 0;
            countBadge.textContent = String(Math.max(0, c - 1));
        }
        DashModal.close(modal);
        if (window.DashToast) DashToast.show('success', '', <?php echo json_encode(__('cloud_project_delete_done')); ?>);
    });
})();
</script>

<!-- ═══ RENAME PROJECT MODAL ═══ -->
<?php
$modal_id    = 'renameProjectModal';
$modal_title = __('cloud_project_rename_title');
$modal_size  = 'sm';
include __DIR__ . '/../../components/modal.php';
?>
    <form onsubmit="return false;">
        <p class="db-modal-lead"><?php echo e(__('cloud_project_rename_desc')); ?></p>
        <div class="db-form-group">
            <label class="db-form-label"><?php echo e(__('cloud_project_rename_id_label')); ?></label>
            <div class="db-form-static" id="renameProjectId" style="padding:10px 12px; background:var(--bg-tertiary); border-radius:var(--radius-sm); font-family:var(--font-mono); font-weight:700; color:var(--brand-error);"></div>
        </div>
        <div class="db-form-group">
            <label class="db-form-label" for="renameProjectName"><?php echo e(__('cloud_project_rename_name_label')); ?> <span class="db-required">*</span></label>
            <input type="text" id="renameProjectName" class="db-input" required minlength="3" maxlength="30" pattern="[A-Za-z0-9\-_ ]{3,30}">
            <div class="db-form-hint"><?php echo e(__('cloud_project_name_hint')); ?></div>
        </div>
    </form>
<?php
$modal_footer = '
    <button class="db-btn db-btn--secondary" data-modal-close>' . e(__('common_cancel')) . '</button>
    <button class="db-btn db-btn--primary" id="renameProjectSave">
        <i class="fas fa-floppy-disk"></i> ' . e(__('common_save')) . '
    </button>
';
include __DIR__ . '/../../components/modal-end.php';
?>

<!-- ═══ DELETE PROJECT MODAL ═══ -->
<?php
$modal_id    = 'deleteProjectModal';
$modal_title = __('cloud_project_delete_title');
$modal_size  = 'sm';
include __DIR__ . '/../../components/modal.php';
?>
    <div class="db-confirm-body">
        <div class="db-modal-icon db-modal-icon--danger"><i class="fas fa-triangle-exclamation"></i></div>
        <p><?php echo e(__('cloud_project_delete_desc')); ?></p>
        <div class="db-confirm-summary">
            <div class="db-confirm-summary__row">
                <span><?php echo e(__('cloud_project_delete_project')); ?></span>
                <span id="deleteProjectName" style="font-family:var(--font-mono); color:var(--brand-error);"></span>
            </div>
        </div>
        <div class="db-notice db-notice--danger" style="margin-top:10px; text-align:start;">
            <i class="fas fa-triangle-exclamation"></i>
            <span><?php echo e(__('cloud_project_delete_warn')); ?></span>
        </div>
    </div>
<?php
$modal_footer = '
    <button class="db-btn db-btn--secondary" data-modal-close>' . e(__('common_cancel')) . '</button>
    <button class="db-btn db-btn--danger" id="deleteProjectConfirm">
        <i class="fas fa-trash"></i> ' . e(__('cloud_project_delete_confirm')) . '
    </button>
';
include __DIR__ . '/../../components/modal-end.php';
?>

<?php require_once __DIR__ . '/../../layouts/footer.php'; ?>
