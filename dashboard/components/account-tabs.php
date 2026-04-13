<?php
/**
 * Account Tabs — Top navigation across Profile/Security/Settings
 *
 * Usage:
 *   $account_tab = 'profile'; // profile, security, settings
 *   include 'components/account-tabs.php';
 */
$tab = $account_tab ?? 'profile';
$tabs = [
    'profile'  => ['label' => __('nav_profile'),  'icon' => 'fas fa-user',          'url' => DASH_BASE_PATH . '/pages/profile/index.php'],
    'security' => ['label' => __('nav_security'), 'icon' => 'fas fa-shield-halved', 'url' => DASH_BASE_PATH . '/pages/profile/security.php'],
    'settings' => ['label' => __('nav_settings'), 'icon' => 'fas fa-gear',          'url' => DASH_BASE_PATH . '/pages/profile/settings.php'],
];
?>
<div class="db-tabs db-mb">
    <?php foreach ($tabs as $key => $t): ?>
    <a href="<?php echo e($t['url']); ?>" class="db-tab<?php echo $key === $tab ? ' active' : ''; ?>">
        <i class="<?php echo e($t['icon']); ?>"></i> <?php echo e($t['label']); ?>
    </a>
    <?php endforeach; ?>
</div>
