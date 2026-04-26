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

$page_title = __('changelog_tab_feature') . ' — ' . SITE_NAME;
$breadcrumbs_data = [
    ['label' => __('nav_dashboard'),        'url' => DASH_BASE_PATH . '/'],
    ['label' => __('changelog_title'),      'url' => DASH_BASE_PATH . '/pages/changelog/index.php'],
    ['label' => __('changelog_tab_feature'), 'url' => null],
];

require_once __DIR__ . '/../../layouts/shell.php';
require_once __DIR__ . '/../../components/changelog-data.php';

$status_meta = [
    'in_progress'  => [
        'label'       => __('feature_status_in_progress'),
        'color'       => 'primary',
        'icon'        => 'fas fa-spinner',
        'description' => __('feature_status_in_progress_desc'),
    ],
    'under_review' => [
        'label'       => __('feature_status_under_review'),
        'color'       => 'accent',
        'icon'        => 'fas fa-eye',
        'description' => __('feature_status_under_review_desc'),
    ],
    'planned'      => [
        'label'       => __('feature_status_planned'),
        'color'       => 'secondary',
        'icon'        => 'fas fa-map-pin',
        'description' => __('feature_status_planned_desc'),
    ],
];

// Group roadmap items by status so each column shows a clear stage
// (In Progress / Under Review / Planned) instead of a flat mixed list.
$grouped_roadmap = [];
foreach ($status_meta as $key => $_) { $grouped_roadmap[$key] = []; }
foreach ($coming_features as $f) {
    $key = $f['status'] ?? 'planned';
    if (!isset($grouped_roadmap[$key])) { $grouped_roadmap[$key] = []; }
    $grouped_roadmap[$key][] = $f;
}
?>

<?php
$ph_title   = __('changelog_tab_feature');
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
        <!-- Kanban-style board: one column per status, so users can see at a
             glance what's shipping soon vs. still being planned. -->
        <div class="db-roadmap-board">
            <?php foreach ($grouped_roadmap as $status_key => $items):
                $meta  = $status_meta[$status_key];
                $count = count($items);
            ?>
            <section class="db-roadmap-col db-roadmap-col--<?php echo e($meta['color']); ?>">
                <header class="db-roadmap-col__head">
                    <span class="db-roadmap-col__icon db-roadmap-col__icon--<?php echo e($meta['color']); ?>">
                        <i class="<?php echo e($meta['icon']); ?>"></i>
                    </span>
                    <span class="db-roadmap-col__title"><?php echo e($meta['label']); ?></span>
                    <span class="db-roadmap-col__count"><?php echo (int)$count; ?></span>
                </header>
                <p class="db-roadmap-col__desc"><?php echo e($meta['description']); ?></p>

                <?php if ($count === 0): ?>
                <div class="db-roadmap-col__empty">
                    <i class="fas fa-circle-dashed"></i>
                    <?php echo e(__('feature_roadmap_col_empty')); ?>
                </div>
                <?php else: ?>
                <ul class="db-roadmap-col__list">
                    <?php foreach ($items as $f): ?>
                    <li class="db-roadmap-card">
                        <span class="db-roadmap-card__dot db-roadmap-card__dot--<?php echo e($meta['color']); ?>" aria-hidden="true"></span>
                        <span class="db-roadmap-card__title"><?php echo e($f['title']); ?></span>
                        <?php if (!empty($f['eta'])): ?>
                        <span class="db-roadmap-card__eta">
                            <i class="fas fa-clock"></i> <?php echo e($f['eta']); ?>
                        </span>
                        <?php endif; ?>
                    </li>
                    <?php endforeach; ?>
                </ul>
                <?php endif; ?>
            </section>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<div class="db-toast-container" id="toastContainer"></div>
<?php require_once __DIR__ . '/../../layouts/footer.php'; ?>
