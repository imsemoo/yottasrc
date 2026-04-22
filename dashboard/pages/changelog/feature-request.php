<?php
/**
 * YottaSrc Dashboard — Feature Request
 * =====================================
 * Share feature ideas + see the product roadmap.
 */

$page_title = null;
$breadcrumbs_data = null;
$nav_active_override = 'changelog';

require_once __DIR__ . '/../../layouts/config.php';

$page_title = __('changelog_feature_title') . ' — ' . SITE_NAME;
$breadcrumbs_data = [
    ['label' => __('nav_dashboard'),        'url' => DASH_BASE_PATH . '/'],
    ['label' => __('changelog_title'),      'url' => DASH_BASE_PATH . '/pages/changelog/index.php'],
    ['label' => __('changelog_feature_title'), 'url' => null],
];

require_once __DIR__ . '/../../layouts/shell.php';
require_once __DIR__ . '/../../components/changelog-data.php';

$status_meta = [
    'planned'      => ['label' => __('feature_status_planned'),      'color' => 'secondary', 'icon' => 'fas fa-map-pin'],
    'in_progress'  => ['label' => __('feature_status_in_progress'),  'color' => 'primary',   'icon' => 'fas fa-spinner'],
    'under_review' => ['label' => __('feature_status_under_review'), 'color' => 'accent',    'icon' => 'fas fa-eye'],
];
?>

<?php
$ph_title   = __('changelog_feature_title');
$ph_desc    = __('changelog_feature_desc');
$ph_actions = '';
include __DIR__ . '/../../components/page-header.php';
?>

<?php $changelog_tab = 'feature'; include __DIR__ . '/../../components/changelog-tabs.php'; ?>

<!-- Submit form -->
<div class="db-card db-mb">
    <div class="db-card-header">
        <h2 class="db-card-title"><i class="db-card-title-icon fas fa-lightbulb"></i> <?php echo e(__('feature_submit_title')); ?></h2>
    </div>
    <div class="db-card-body">
        <ul class="db-helper-list">
            <li><?php echo e(__('feature_hint_share')); ?></li>
            <li><?php echo e(__('feature_hint_team')); ?></li>
            <li><?php echo e(__('feature_hint_duplicate')); ?></li>
        </ul>

        <form class="db-form db-mt" id="featureForm" novalidate data-success-message="<?php echo e(__('feature_submit_toast')); ?>">
            <div class="db-form-group">
                <label class="db-form-label" for="feature_text"><?php echo e(__('feature_submit_label')); ?></label>
                <textarea class="db-input" id="feature_text" name="feature_text" rows="5" placeholder="<?php echo e(__('feature_submit_placeholder')); ?>" required></textarea>
            </div>
            <div class="db-form-actions db-form-actions--right">
                <button type="submit" class="db-btn db-btn--primary">
                    <i class="fas fa-paper-plane"></i> <?php echo e(__('feature_submit_btn')); ?>
                </button>
            </div>
        </form>
    </div>
</div>

<!-- Coming features / roadmap -->
<div class="db-card">
    <div class="db-card-header db-card-header--stacked">
        <div>
            <h2 class="db-card-title"><i class="db-card-title-icon fas fa-route"></i> <?php echo e(__('feature_roadmap_title')); ?></h2>
            <span class="db-card-subtitle"><?php echo e(__('feature_roadmap_desc')); ?></span>
        </div>
    </div>
    <div class="db-card-body">
        <div class="db-roadmap">
            <?php foreach ($coming_features as $f):
                $meta = $status_meta[$f['status']] ?? $status_meta['planned'];
            ?>
            <div class="db-roadmap-item">
                <div class="db-roadmap-item__icon db-roadmap-item__icon--<?php echo e($meta['color']); ?>">
                    <i class="<?php echo e($meta['icon']); ?>"></i>
                </div>
                <div class="db-roadmap-item__body">
                    <div class="db-roadmap-item__title"><?php echo e($f['title']); ?></div>
                    <span class="db-badge db-badge--<?php echo e($meta['color']); ?> db-badge--inline"><?php echo e($meta['label']); ?></span>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<div class="db-toast-container" id="toastContainer"></div>
<?php require_once __DIR__ . '/../../layouts/footer.php'; ?>
