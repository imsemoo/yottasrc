<?php
/**
 * YottaSrc Dashboard — Changelog
 * ================================
 * Timeline of releases. Each release is a card with sections
 * (New Features / Improvements / Bug Fixes).
 */

$page_title = null;
$breadcrumbs_data = null;

require_once __DIR__ . '/../../layouts/config.php';

$page_title = __('changelog_title') . ' — ' . SITE_NAME;
$breadcrumbs_data = [
    ['label' => __('nav_dashboard'), 'url' => DASH_BASE_PATH . '/'],
    ['label' => __('changelog_title'), 'url' => null],
];

require_once __DIR__ . '/../../layouts/shell.php';
require_once __DIR__ . '/../../components/changelog-data.php';

$page_state = $_GET['state'] ?? 'active';

/* Helper: format the date into a 2-line badge (day-month / year). */
function clog_format_date_badge($iso) {
    $t  = strtotime($iso);
    $line1 = strtoupper(date('d M', $t));
    $line2 = date('Y', $t);
    return [$line1, $line2];
}
?>

<?php
$ph_title = __('changelog_title');
$ph_desc  = __('changelog_desc');
$ph_actions = '';
include __DIR__ . '/../../components/page-header.php';
?>

<?php $changelog_tab = 'changelog'; include __DIR__ . '/../../components/changelog-tabs.php'; ?>

<?php if ($page_state === 'error'): ?>
    <div class="db-card"><?php $error_retry = true; include __DIR__ . '/../../components/error-state.php'; ?></div>

<?php elseif ($page_state === 'loading'): ?>
    <?php $skel_timeline_entries = 4; include __DIR__ . '/../../components/skeleton-timeline.php'; ?>

<?php else: ?>

    <!-- Timeline -->
    <div class="db-changelog">
        <?php foreach ($changelog as $index => $release):
            [$d1, $d2] = clog_format_date_badge($release['date']);
            $is_first = ($index === 0);
        ?>
        <div class="db-changelog__entry<?php echo $is_first ? ' db-changelog__entry--latest' : ''; ?>">
            <!-- Date bubble + spine -->
            <div class="db-changelog__spine">
                <div class="db-changelog__bubble">
                    <span class="db-changelog__bubble-line1"><?php echo e($d1); ?></span>
                    <span class="db-changelog__bubble-line2"><?php echo e($d2); ?></span>
                </div>
            </div>

            <!-- Release content -->
            <div class="db-changelog__body">
                <div class="db-changelog__head">
                    <h3 class="db-changelog__version">
                        <?php echo e(__('changelog_version_prefix')); ?>
                        <span class="db-changelog__version-number"><?php echo e($release['version']); ?></span>
                    </h3>
                    <?php if ($release['channel'] === 'beta'): ?>
                    <span class="db-badge db-badge--pending db-badge--inline">Beta</span>
                    <?php elseif ($is_first): ?>
                    <span class="db-badge db-badge--active db-badge--inline"><?php echo e(__('changelog_latest_badge')); ?></span>
                    <?php endif; ?>
                </div>

                <?php if (!empty($release['highlight'])): ?>
                <p class="db-changelog__highlight"><?php echo e($release['highlight']); ?></p>
                <?php endif; ?>

                <div class="db-changelog__card">
                    <?php
                    $section_meta = [
                        'new_features' => ['label' => __('changelog_section_new_features'), 'icon' => 'fas fa-wand-magic-sparkles', 'color' => 'primary'],
                        'improvements' => ['label' => __('changelog_section_improvements'), 'icon' => 'fas fa-bolt',                'color' => 'accent'],
                        'bug_fixes'    => ['label' => __('changelog_section_bug_fixes'),    'icon' => 'fas fa-bug-slash',           'color' => 'secondary'],
                    ];
                    foreach ($section_meta as $key => $meta):
                        if (empty($release['sections'][$key])) continue;
                        $items = $release['sections'][$key];
                    ?>
                    <div class="db-changelog__section">
                        <div class="db-changelog__section-head">
                            <span class="db-changelog__section-icon db-changelog__section-icon--<?php echo e($meta['color']); ?>"><i class="<?php echo e($meta['icon']); ?>"></i></span>
                            <span class="db-changelog__section-label"><?php echo e($meta['label']); ?></span>
                        </div>
                        <ul class="db-changelog__list">
                            <?php foreach ($items as $item):
                                if (is_array($item)): ?>
                                <li>
                                    <strong><?php echo e($item['title']); ?>:</strong>
                                    <span><?php echo e($item['desc']); ?></span>
                                </li>
                            <?php else: ?>
                                <li><?php echo e($item); ?></li>
                            <?php endif; endforeach; ?>
                        </ul>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>

<?php endif; ?>

<div class="db-toast-container" id="toastContainer"></div>
<?php require_once __DIR__ . '/../../layouts/footer.php'; ?>
