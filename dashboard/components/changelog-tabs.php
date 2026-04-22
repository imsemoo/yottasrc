<?php
/**
 * Changelog Tabs — top navigation across Changelog / Feature Request / Report Bug
 *
 * Usage:
 *   $changelog_tab = 'changelog'; // changelog | feature | bug
 *   include 'components/changelog-tabs.php';
 */
$tab = $changelog_tab ?? 'changelog';
$tabs = [
    'changelog' => ['label' => __('changelog_tab_changelog'), 'icon' => 'fas fa-list-ul',     'url' => DASH_BASE_PATH . '/pages/changelog/index.php'],
    'feature'   => ['label' => __('changelog_tab_feature'),   'icon' => 'fas fa-lightbulb',   'url' => DASH_BASE_PATH . '/pages/changelog/feature-request.php'],
    'bug'       => ['label' => __('changelog_tab_bug'),       'icon' => 'fas fa-bug',         'url' => DASH_BASE_PATH . '/pages/changelog/report-bug.php'],
];
?>
<div class="db-tabs db-mb">
    <?php foreach ($tabs as $key => $t): ?>
    <a href="<?php echo e($t['url']); ?>" class="db-tab<?php echo $key === $tab ? ' active' : ''; ?>">
        <i class="<?php echo e($t['icon']); ?>"></i> <?php echo e($t['label']); ?>
    </a>
    <?php endforeach; ?>
</div>
