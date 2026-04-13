<?php
/**
 * YottaSrc Dashboard — Top Bar
 * ==============================
 * Breadcrumbs, quick actions, theme toggle, language dropdown,
 * notifications dropdown, user menu.
 *
 * Expects $breadcrumbs_data, $user_data from the page.
 */

$breadcrumbs_data = $breadcrumbs_data ?? [['label' => __('nav_dashboard'), 'url' => null]];
$user_data = $user_data ?? ['first_name' => 'Islam', 'last_name' => 'Dev', 'email' => 'en.developer2@gmail.com'];
$user_initials = strtoupper(substr($user_data['first_name'], 0, 1) . substr($user_data['last_name'], 0, 1));
$user_display = e($user_data['first_name']);

$lang_options = [
    'en' => ['flag' => 'gb', 'label' => 'English'],
    'ar' => ['flag' => 'sa', 'label' => 'العربية'],
];
?>

<header class="db-topbar">
    <!-- Mobile Sidebar Toggle -->
    <button class="db-topbar-menu-btn" id="sidebarToggle" aria-label="Toggle sidebar">
        <i class="fas fa-bars"></i>
    </button>

    <!-- Breadcrumbs -->
    <nav class="db-breadcrumbs" aria-label="Breadcrumb">
        <?php foreach ($breadcrumbs_data as $i => $crumb): ?>
            <?php if ($i > 0): ?>
                <i class="fas fa-chevron-right db-breadcrumb-sep"></i>
            <?php endif; ?>

            <?php if ($crumb['url'] && $i < count($breadcrumbs_data) - 1): ?>
                <a href="<?php echo e($crumb['url']); ?>" class="db-breadcrumb-link"><?php echo e($crumb['label']); ?></a>
            <?php else: ?>
                <span class="db-breadcrumb-current"><?php echo e($crumb['label']); ?></span>
            <?php endif; ?>
        <?php endforeach; ?>
    </nav>

    <!-- Spacer -->
    <div class="db-topbar-spacer"></div>

    <!-- Quick Actions (desktop) -->
    <div class="db-topbar-actions">
        <a href="<?php echo e(DASH_BASE_PATH); ?>/pages/services/order.php" class="db-topbar-action-btn">
            <i class="fas fa-plus"></i>
            <span><?php echo e(__('topbar_new_order')); ?></span>
        </a>
        <a href="<?php echo e(DASH_BASE_PATH); ?>/pages/support/new.php" class="db-topbar-action-btn">
            <i class="fas fa-message"></i>
            <span><?php echo e(__('topbar_new_ticket')); ?></span>
        </a>
    </div>

    <!-- Language Switcher -->
    <div class="db-switcher-dropdown" id="langSwitcher">
        <button class="db-switcher-toggle" aria-label="<?php echo e(__('language')); ?>">
            <span class="fi fi-<?php echo ($current_lang === 'ar') ? 'sa' : 'gb'; ?>"></span>
            <span class="db-switcher-label"><?php echo ($current_lang === 'ar') ? 'العربية' : 'EN'; ?></span>
            <i class="fas fa-chevron-down db-switcher-arrow"></i>
        </button>
        <div class="db-switcher-menu">
            <div class="db-switcher-menu-title"><?php echo ($current_lang === 'ar') ? 'اختر اللغة' : 'Language'; ?></div>
            <div class="db-lang-grid">
                <?php foreach ($lang_options as $code => $opt): ?>
                <a href="?lang=<?php echo e($code); ?>" class="db-switcher-option<?php echo ($current_lang === $code) ? ' active' : ''; ?>">
                    <span class="fi fi-<?php echo e($opt['flag']); ?>"></span>
                    <span><?php echo e($opt['label']); ?></span>
                </a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <!-- Theme Toggle (same style as frontend) -->
    <button class="db-theme-toggle" id="themeToggle" title="<?php echo e(__('theme_toggle')); ?>" aria-label="<?php echo e(__('theme_toggle')); ?>">
        <span class="db-theme-toggle-icon">
            <svg class="db-theme-sun" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="12" r="5"></circle>
                <line x1="12" y1="1" x2="12" y2="3"></line>
                <line x1="12" y1="21" x2="12" y2="23"></line>
                <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line>
                <line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line>
                <line x1="1" y1="12" x2="3" y2="12"></line>
                <line x1="21" y1="12" x2="23" y2="12"></line>
                <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line>
                <line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line>
            </svg>
            <svg class="db-theme-moon" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
            </svg>
        </span>
    </button>

    <!-- Notifications -->
    <div class="db-notif-dropdown" id="notifDropdown">
        <button class="db-topbar-notif" id="notifBtn" aria-label="<?php echo e(__('topbar_notifications')); ?>" aria-expanded="false">
            <i class="fas fa-bell"></i>
            <!-- <span class="db-topbar-notif-badge"></span> -->
        </button>
        <div class="db-notif-menu" id="notifMenu">
            <div class="db-notif-header">
                <span class="db-notif-title"><?php echo e(__('topbar_notifications')); ?></span>
                <a href="#" class="db-notif-mark-read"><?php echo ($current_lang === 'ar') ? 'قراءة الكل' : 'Mark all read'; ?></a>
            </div>
            <div class="db-notif-body">
                <div class="db-notif-empty">
                    <i class="fas fa-bell-slash"></i>
                    <p><?php echo e(__('topbar_no_notifications')); ?></p>
                </div>
            </div>
        </div>
    </div>

    <!-- User Menu -->
    <div class="db-topbar-user" id="userMenu">
        <button class="db-topbar-user-btn" id="userMenuBtn" aria-expanded="false">
            <div class="db-topbar-avatar"><?php echo $user_initials; ?></div>
            <span class="db-topbar-user-name"><?php echo $user_display; ?></span>
            <i class="fas fa-chevron-down db-topbar-user-arrow"></i>
        </button>

        <div class="db-topbar-user-dropdown" id="userDropdown">
            <a href="<?php echo e(DASH_BASE_PATH); ?>/pages/profile/index.php" class="db-topbar-dropdown-item">
                <i class="fas fa-user"></i>
                <span><?php echo e(__('nav_profile')); ?></span>
            </a>
            <a href="<?php echo e(DASH_BASE_PATH); ?>/pages/profile/security.php" class="db-topbar-dropdown-item">
                <i class="fas fa-shield-halved"></i>
                <span><?php echo e(__('nav_security')); ?></span>
            </a>
            <a href="<?php echo e(DASH_BASE_PATH); ?>/pages/profile/settings.php" class="db-topbar-dropdown-item">
                <i class="fas fa-gear"></i>
                <span><?php echo e(__('nav_settings')); ?></span>
            </a>
            <div class="db-topbar-dropdown-divider"></div>
            <a href="<?php echo e(CONSOLE_URL); ?>/logout" class="db-topbar-dropdown-item db-topbar-dropdown-item--danger" id="logoutBtnTop">
                <i class="fas fa-right-from-bracket"></i>
                <span><?php echo e(__('nav_logout')); ?></span>
            </a>
        </div>
    </div>
</header>
