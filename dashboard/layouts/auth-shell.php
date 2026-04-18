<?php
/**
 * YottaSrc Dashboard — Auth Shell
 * =================================
 * Standalone layout for auth pages (login, register, forgot, reset).
 * No sidebar, no topbar — just a centered card over a branded background.
 *
 * Usage:
 *   $page_title = 'Login — YottaSrc';
 *   $auth_heading = 'Welcome back';
 *   $auth_subheading = 'Sign in to your account';
 *   require_once __DIR__ . '/../../layouts/config.php';
 *   require_once __DIR__ . '/../../layouts/auth-shell.php';
 *   // ... form content ...
 *   require_once __DIR__ . '/../../layouts/auth-footer.php';
 */
?>
<!DOCTYPE html>
<html lang="<?php echo e($current_lang); ?>" dir="<?php echo e($text_direction); ?>" data-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e($page_title ?? __('meta_title')); ?></title>
    <meta name="description" content="<?php echo e(__('meta_description')); ?>">
    <link rel="icon" type="image/png" href="<?php echo dash_asset('images/favicon.png'); ?>">

    <?php if (is_preview()): ?>
    <meta name="robots" content="noindex, nofollow">
    <?php endif; ?>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800;900&family=DM+Sans:wght@400;500;600&family=JetBrains+Mono:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icons/7.2.3/css/flag-icons.min.css">

    <link rel="stylesheet" href="<?php echo dash_asset('css/tokens.css'); ?>">
    <?php if (!empty($auth_css)): ?>
    <link rel="stylesheet" href="<?php echo dash_asset('css/auth/' . $auth_css); ?>">
    <?php endif; ?>

    <script>
    (function(){
        var t = localStorage.getItem('yottasrc_theme');
        if (t === 'light' || t === 'dark') document.documentElement.setAttribute('data-theme', t);
    })();
    </script>
</head>

<body class="auth-body">

<!-- Background -->
<div class="auth-bg">
    <div class="auth-bg__gradient"></div>
    <div class="auth-bg__dots"></div>
    <div class="auth-bg__glow auth-bg__glow--1"></div>
    <div class="auth-bg__glow auth-bg__glow--2"></div>
</div>

<!-- Language + Theme toggles (matches main dashboard topbar) -->
<div class="auth-topbar">
    <!-- Language Switcher Dropdown -->
    <div class="db-switcher-dropdown" id="authLangSwitcher">
        <button type="button" class="db-switcher-toggle" aria-label="<?php echo e(__('language')); ?>">
            <span class="fi fi-<?php echo ($current_lang === 'ar') ? 'sa' : 'gb'; ?>"></span>
            <span class="db-switcher-label"><?php echo ($current_lang === 'ar') ? 'العربية' : 'EN'; ?></span>
            <i class="fas fa-chevron-down db-switcher-arrow"></i>
        </button>
        <div class="db-switcher-menu">
            <div class="db-switcher-menu-title"><?php echo ($current_lang === 'ar') ? 'اختر اللغة' : 'Language'; ?></div>
            <div class="db-lang-grid">
                <a href="?lang=en" class="db-switcher-option<?php echo ($current_lang === 'en') ? ' active' : ''; ?>">
                    <span class="fi fi-gb"></span>
                    <span>English</span>
                </a>
                <a href="?lang=ar" class="db-switcher-option<?php echo ($current_lang === 'ar') ? ' active' : ''; ?>">
                    <span class="fi fi-sa"></span>
                    <span>العربية</span>
                </a>
            </div>
        </div>
    </div>

    <!-- Theme Toggle (animated sun/moon SVG, same as main topbar) -->
    <button type="button" class="db-theme-toggle" id="authThemeToggle" aria-label="<?php echo e(__('theme_toggle')); ?>" title="<?php echo e(__('theme_toggle')); ?>">
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
</div>

<!-- Main wrapper -->
<div class="auth-wrapper">
    <div class="auth-card">
        <!-- Logo -->
        <a href="<?php echo SITE_URL; ?>" class="auth-logo">
            <img src="<?php echo dash_asset('images/logo_dark.png'); ?>" alt="<?php echo SITE_NAME; ?>" class="auth-logo__dark">
            <img src="<?php echo dash_asset('images/logo_light.png'); ?>" alt="<?php echo SITE_NAME; ?>" class="auth-logo__light">
        </a>

        <!-- Heading -->
        <?php if (!empty($auth_heading)): ?>
        <div class="auth-header">
            <h1 class="auth-header__title"><?php echo e($auth_heading); ?></h1>
            <?php if (!empty($auth_subheading)): ?>
            <p class="auth-header__sub"><?php echo e($auth_subheading); ?></p>
            <?php endif; ?>
        </div>
        <?php endif; ?>

        <!-- Page-specific content injected here -->
