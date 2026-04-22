<?php
/**
 * YottaSrc Dashboard — Report a Bug
 * ===================================
 * Users submit a bug with optional screenshot; page also shows the
 * severity/reward tiers so expectations are upfront.
 */

$page_title = null;
$breadcrumbs_data = null;
$nav_active_override = 'changelog';

require_once __DIR__ . '/../../layouts/config.php';

$page_title = __('changelog_bug_title') . ' — ' . SITE_NAME;
$breadcrumbs_data = [
    ['label' => __('nav_dashboard'),       'url' => DASH_BASE_PATH . '/'],
    ['label' => __('changelog_title'),     'url' => DASH_BASE_PATH . '/pages/changelog/index.php'],
    ['label' => __('changelog_bug_title'), 'url' => null],
];

require_once __DIR__ . '/../../layouts/shell.php';
require_once __DIR__ . '/../../components/changelog-data.php';

$severity_labels = [
    'critical' => __('bug_severity_critical'),
    'high'     => __('bug_severity_high'),
    'medium'   => __('bug_severity_medium'),
    'low'      => __('bug_severity_low'),
];
?>

<?php
$ph_title   = __('changelog_bug_title');
$ph_desc    = __('changelog_bug_desc');
$ph_actions = '';
include __DIR__ . '/../../components/page-header.php';
?>

<?php $changelog_tab = 'bug'; include __DIR__ . '/../../components/changelog-tabs.php'; ?>

<!-- Submit form -->
<div class="db-card db-mb">
    <div class="db-card-header">
        <h2 class="db-card-title"><i class="db-card-title-icon fas fa-bug"></i> <?php echo e(__('bug_submit_title')); ?></h2>
    </div>
    <div class="db-card-body">
        <ul class="db-helper-list">
            <li><?php echo e(__('bug_hint_details')); ?></li>
            <li><?php echo e(__('bug_hint_screenshot')); ?></li>
            <li><?php echo e(__('bug_hint_review')); ?></li>
        </ul>

        <form class="db-form db-mt" id="bugForm" novalidate data-success-message="<?php echo e(__('bug_submit_toast')); ?>">
            <div class="db-form-row">
                <div class="db-form-group">
                    <label class="db-form-label" for="bug_severity"><?php echo e(__('bug_severity_label')); ?></label>
                    <select class="db-input" id="bug_severity" name="bug_severity">
                        <?php foreach ($severity_labels as $key => $label): ?>
                        <option value="<?php echo e($key); ?>"<?php echo $key === 'medium' ? ' selected' : ''; ?>><?php echo e($label); ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="db-form-group">
                    <label class="db-form-label" for="bug_area"><?php echo e(__('bug_area_label')); ?></label>
                    <input type="text" class="db-input" id="bug_area" name="bug_area" placeholder="<?php echo e(__('bug_area_placeholder')); ?>">
                </div>
            </div>

            <div class="db-form-group">
                <label class="db-form-label" for="bug_text"><?php echo e(__('bug_submit_label')); ?></label>
                <textarea class="db-input" id="bug_text" name="bug_text" rows="6" placeholder="<?php echo e(__('bug_submit_placeholder')); ?>" required></textarea>
            </div>

            <div class="db-form-group">
                <label class="db-form-label" for="bug_screenshot"><?php echo e(__('bug_screenshot_label')); ?></label>
                <label class="db-file-drop" for="bug_screenshot">
                    <i class="fas fa-image"></i>
                    <span><?php echo e(__('bug_screenshot_hint')); ?></span>
                    <input type="file" id="bug_screenshot" name="bug_screenshot" accept="image/*" hidden>
                </label>
            </div>

            <div class="db-form-actions db-form-actions--right">
                <button type="submit" class="db-btn db-btn--primary">
                    <i class="fas fa-paper-plane"></i> <?php echo e(__('bug_submit_btn')); ?>
                </button>
            </div>
        </form>
    </div>
</div>

<!-- Reward tiers -->
<div class="db-card">
    <div class="db-card-header db-card-header--stacked">
        <div>
            <h2 class="db-card-title"><i class="db-card-title-icon fas fa-gift"></i> <?php echo e(__('bug_rewards_title')); ?></h2>
            <span class="db-card-subtitle"><?php echo e(__('bug_rewards_desc')); ?></span>
        </div>
    </div>
    <div class="db-card-body">
        <div class="db-rewards-grid">
            <?php foreach ($bug_reward_tiers as $tier): ?>
            <div class="db-reward-tier db-reward-tier--<?php echo e($tier['color']); ?>">
                <div class="db-reward-tier__head">
                    <span class="db-reward-tier__severity"><?php echo e($severity_labels[$tier['severity']] ?? $tier['severity']); ?></span>
                    <span class="db-reward-tier__range"><?php echo e($tier['range']); ?></span>
                </div>
                <p class="db-reward-tier__desc"><?php echo e($tier['desc']); ?></p>
            </div>
            <?php endforeach; ?>
        </div>

        <div class="db-alert db-alert--info db-mt">
            <i class="fas fa-circle-info db-alert-icon"></i>
            <div class="db-alert-content">
                <div class="db-alert-title"><?php echo e(__('bug_rewards_note_title')); ?></div>
                <div class="db-alert-message"><?php echo e(__('bug_rewards_note_desc')); ?></div>
            </div>
        </div>
    </div>
</div>

<script>
/* File input: show selected filename */
document.addEventListener('DOMContentLoaded', function () {
    var inp = document.getElementById('bug_screenshot');
    var drop = inp && inp.closest('.db-file-drop');
    if (!inp || !drop) return;
    inp.addEventListener('change', function () {
        var lbl = drop.querySelector('span');
        if (!lbl) return;
        lbl.textContent = inp.files.length ? inp.files[0].name : '<?php echo e(__('bug_screenshot_hint')); ?>';
        drop.classList.toggle('is-filled', inp.files.length > 0);
    });
});
</script>

<div class="db-toast-container" id="toastContainer"></div>
<?php require_once __DIR__ . '/../../layouts/footer.php'; ?>
