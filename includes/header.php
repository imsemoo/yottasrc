<!DOCTYPE html>
<html lang="<?php echo e($current_lang); ?>" dir="<?php echo e($text_direction); ?>" data-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- SEO Meta -->
    <title><?php echo e(__('meta_title')); ?></title>
    <meta name="description" content="<?php echo e(__('meta_description')); ?>">
    <link rel="canonical" href="<?php echo e(SITE_URL); ?>/">

    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?php echo e(__('meta_title')); ?>">
    <meta property="og:description" content="<?php echo e(__('meta_description')); ?>">
    <meta property="og:url" content="<?php echo e(SITE_URL); ?>/">
    <meta property="og:site_name" content="<?php echo e(SITE_NAME); ?>">
    <meta property="og:locale" content="<?php echo ($current_lang === 'ar') ? 'ar_SA' : 'en_US'; ?>">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo e(__('meta_title')); ?>">
    <meta name="twitter:description" content="<?php echo e(__('meta_description')); ?>">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="<?php echo asset('images/favicon.png'); ?>">

    <?php if (is_preview()): ?>
    <!-- Preview mode: block indexing -->
    <meta name="robots" content="noindex, nofollow">
    <?php endif; ?>

    <!-- Preconnect for performance -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Fonts (preloaded) -->
    <link rel="preload" as="style"
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=DM+Sans:wght@400;500;600&family=JetBrains+Mono:wght@400;500;600&family=Tajawal:wght@400;500;700;800&display=swap">
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=DM+Sans:wght@400;500;600&family=JetBrains+Mono:wght@400;500;600&family=Tajawal:wght@400;500;700;800&display=swap"
        rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Flag Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icons/7.2.3/css/flag-icons.min.css">

    <!-- Swiper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="<?php echo asset('css/style.css'); ?>">
    <!-- Page-specific Styles -->
    <link rel="stylesheet" href="<?php echo asset('css/pages.css'); ?>">

</head>

<body>
    <!-- Dot Grid Background -->
    <div class="dot-grid"></div>

    <!-- Promo Bar (included inline so it sits above the sticky nav) -->
    <?php require_once __DIR__ . '/topbar.php'; ?>

    <!-- Navigation -->
    <header class="nav-wrapper" id="navWrapper">
        <?php
        $lang_options = [
            'en' => ['flag' => 'gb', 'label' => __('lang_en')],
            'ar' => ['flag' => 'sa', 'label' => __('lang_ar')],
        ];
        ?>
        <!-- Top Tier: Brand + Utility -->
        <div class="nav-top" id="navTop">
            <div class="container nav-top-inner">
                <a href="<?php echo e(SITE_URL); ?>/" class="nav-logo">
                    <img src="<?php echo asset('images/logo_dark.png'); ?>" alt="<?php echo e(SITE_NAME); ?>" class="logo-icon logo-dark">
                    <img src="<?php echo asset('images/logo_light.png'); ?>" alt="<?php echo e(SITE_NAME); ?>" class="logo-icon logo-light">
                </a>

                <div class="nav-utility">
                    <!-- Language Switcher -->
                    <div class="switcher-dropdown" id="langSwitcher">
                        <button class="switcher-toggle" aria-label="<?php echo e(__('nav_change_language')); ?>">
                            <span class="fi fi-<?php echo ($current_lang === 'ar') ? 'sa' : 'gb'; ?>"></span>
                            <span class="switcher-label"><?php echo e(__('nav_lang_short')); ?></span>
                            <i class="fas fa-chevron-down switcher-arrow"></i>
                        </button>
                        <div class="switcher-menu">
                            <div class="switcher-menu-title"><?php echo e(__('nav_select_language')); ?></div>
                            <div class="lang-grid">
                                <?php foreach ($lang_options as $code => $opt): ?>
                                <a href="?lang=<?php echo e($code); ?>" class="switcher-option<?php echo ($current_lang === $code) ? ' active' : ''; ?>">
                                    <span class="fi fi-<?php echo e($opt['flag']); ?>"></span>
                                    <span><?php echo e($opt['label']); ?></span>
                                    <?php if ($current_lang === $code): ?><i class="fas fa-check"></i><?php endif; ?>
                                </a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>

                    <!-- Currency Switcher -->
                    <div class="switcher-dropdown" id="currencySwitcher">
                        <button class="switcher-toggle" aria-label="<?php echo e(__('nav_change_currency')); ?>">
                            <span class="switcher-currency-symbol"><?php echo e($supported_currencies[$current_currency]['symbol']); ?></span>
                            <span class="switcher-label"><?php echo e($current_currency); ?></span>
                            <i class="fas fa-chevron-down switcher-arrow"></i>
                        </button>
                        <div class="switcher-menu">
                            <div class="switcher-menu-title"><?php echo e(__('nav_select_currency')); ?></div>
                            <?php foreach ($supported_currencies as $code => $cur): ?>
                            <a href="?currency=<?php echo e($code); ?>" class="switcher-option<?php echo ($current_currency === $code) ? ' active' : ''; ?>">
                                <span class="switcher-currency-symbol"><?php echo e($cur['symbol']); ?></span>
                                <span><?php echo e(($current_lang === 'ar') ? $cur['name_ar'] : $cur['name_en']); ?> (<?php echo e($code); ?>)</span>
                                <?php if ($current_currency === $code): ?><i class="fas fa-check"></i><?php endif; ?>
                            </a>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <div class="nav-utility-divider desktop-only"></div>

                    <button class="theme-toggle" id="themeToggle" title="<?php echo e(__('nav_toggle_theme')); ?>" aria-label="<?php echo e(__('nav_toggle_theme')); ?>">
                        <span class="theme-toggle-icon">
                            <svg class="theme-sun" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
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
                            <svg class="theme-moon" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
                            </svg>
                        </span>
                    </button>

                    <!-- Guest state (default — not logged in) -->
                    <div class="nav-auth nav-auth-guest">
                        <a href="<?php echo e(CONSOLE_URL); ?>/login" class="btn-nav-secondary desktop-only"><?php echo e(__('nav_login')); ?></a>
                        <a href="<?php echo e(CONSOLE_URL); ?>/register" class="btn-nav-primary desktop-only"><?php echo e(__('nav_get_started')); ?> <i class="fas fa-arrow-right"></i></a>
                    </div>

                    <!-- Logged-in state (authenticated user) -->
                    <?php
                    $fe_user = $fe_user ?? ['first_name' => 'Islam', 'last_name' => 'Dev', 'email' => 'en.developer2@gmail.com'];
                    $fe_initials = strtoupper(substr($fe_user['first_name'], 0, 1) . substr($fe_user['last_name'], 0, 1));
                    $fe_display  = e($fe_user['first_name']);
                    ?>
                    <div class="nav-auth nav-auth-user" >
                        <div class="fe-user-menu" id="feUserMenu">
                            <button class="fe-user-btn" id="feUserMenuBtn" aria-expanded="false">
                                <div class="fe-user-avatar"><?php echo $fe_initials; ?></div>
                                <span class="fe-user-name"><?php echo $fe_display; ?></span>
                                <i class="fas fa-chevron-down fe-user-arrow"></i>
                            </button>
                            <div class="fe-user-dropdown" id="feUserDropdown">
                                <div class="fe-user-dropdown-header">
                                    <div class="fe-user-avatar fe-user-avatar--lg"><?php echo $fe_initials; ?></div>
                                    <div class="fe-user-dropdown-info">
                                        <span class="fe-user-dropdown-name"><?php echo e($fe_user['first_name'] . ' ' . $fe_user['last_name']); ?></span>
                                        <span class="fe-user-dropdown-email"><?php echo e($fe_user['email']); ?></span>
                                    </div>
                                </div>
                                <div class="fe-user-dropdown-divider"></div>
                                <a href="<?php echo e(CONSOLE_URL); ?>/dashboard" class="fe-user-dropdown-item">
                                    <i class="fas fa-tachometer-alt"></i>
                                    <span><?php echo e(__('nav_dashboard')); ?></span>
                                </a>
                                <a href="<?php echo e(CONSOLE_URL); ?>/profile" class="fe-user-dropdown-item">
                                    <i class="fas fa-user"></i>
                                    <span><?php echo e(__('nav_profile')); ?></span>
                                </a>
                                <a href="<?php echo e(CONSOLE_URL); ?>/profile/security" class="fe-user-dropdown-item">
                                    <i class="fas fa-shield-halved"></i>
                                    <span><?php echo e(__('nav_security')); ?></span>
                                </a>
                                <a href="<?php echo e(CONSOLE_URL); ?>/profile/settings" class="fe-user-dropdown-item">
                                    <i class="fas fa-gear"></i>
                                    <span><?php echo e(__('nav_settings')); ?></span>
                                </a>
                                <div class="fe-user-dropdown-divider"></div>
                                <a href="<?php echo e(CONSOLE_URL); ?>/logout" class="fe-user-dropdown-item fe-user-dropdown-item--danger" id="logoutBtn">
                                    <i class="fas fa-right-from-bracket"></i>
                                    <span><?php echo e(__('nav_logout')); ?></span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <button class="nav-mobile-toggle" id="mobileMenuToggle" aria-label="<?php echo e(__('nav_toggle_mobile_menu')); ?>">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Bottom Tier: Navigation Links -->
        <div class="nav-bottom" id="navBottom">
            <div class="container nav-bottom-inner">
                <ul class="nav-links">
                    <li>
                        <button class="nav-dropdown-trigger"><?php echo e(__('nav_hosting')); ?> <i class="fas fa-chevron-down"></i></button>
                        <div class="nav-dropdown">
                            <a href="<?php echo e(SITE_URL); ?>/best-cpanel-hosting/"><i class="fas fa-server"></i> <?php echo e(__('nav_cpanel_hosting')); ?></a>
                            <a href="<?php echo e(SITE_URL); ?>/best-wordpress-hosting/"><i class="fab fa-wordpress"></i> <?php echo e(__('nav_wordpress_hosting')); ?></a>
                            <a href="<?php echo e(SITE_URL); ?>/telegram-bot-hosting/"><i class="fab fa-telegram"></i> <?php echo e(__('nav_telegram_bot')); ?></a>
                            <a href="<?php echo e(SITE_URL); ?>/cpanel-hosting-dmca-ignored/"><i class="fas fa-shield-alt"></i> <?php echo e(__('nav_dmca_ignored')); ?></a>
                        </div>
                    </li>
                    <li>
                        <button class="nav-dropdown-trigger"><?php echo e(__('nav_servers')); ?> <i class="fas fa-chevron-down"></i></button>
                        <div class="nav-dropdown">
                            <a href="<?php echo e(SITE_URL); ?>/vps/"><i class="fab fa-linux"></i> <?php echo e(__('nav_linux_vps')); ?></a>
                            <a href="<?php echo e(SITE_URL); ?>/vps/windows-servers/"><i class="fab fa-windows"></i> <?php echo e(__('nav_windows_vps')); ?></a>
                            <a href="<?php echo e(SITE_URL); ?>/cloud/"><i class="fas fa-cloud"></i> <?php echo e(__('nav_cloud_servers')); ?></a>
                            <a href="<?php echo e(SITE_URL); ?>/dedicated-servers/"><i class="fas fa-database"></i> <?php echo e(__('nav_dedicated')); ?></a>
                            <a href="<?php echo e(SITE_URL); ?>/unmetered-bandwidth/"><i class="fas fa-infinity"></i> <?php echo e(__('nav_unmetered_bandwidth')); ?></a>
                        </div>
                    </li>
                    <li>
                        <button class="nav-dropdown-trigger"><?php echo e(__('nav_reseller')); ?> <i class="fas fa-chevron-down"></i></button>
                        <div class="nav-dropdown">
                            <a href="<?php echo e(SITE_URL); ?>/hosting-reseller"><i class="fas fa-sitemap"></i> <?php echo e(__('nav_cpanel_reseller')); ?></a>
                            <a href="<?php echo e(SITE_URL); ?>/master-reseller-cpanel-hosting/"><i class="fas fa-crown"></i> <?php echo e(__('nav_master_reseller')); ?></a>
                            <a href="<?php echo e(SITE_URL); ?>/vps-reseller/"><i class="fas fa-cubes"></i> <?php echo e(__('nav_vps_reseller')); ?></a>
                            <a href="<?php echo e(SITE_URL); ?>/wholesale/"><i class="fas fa-store"></i> <?php echo e(__('nav_wholesale')); ?></a>
                        </div>
                    </li>
                    <li><a href="<?php echo e(SITE_URL); ?>/licenses/"><?php echo e(__('nav_licenses')); ?></a></li>
                    <li>
                        <button class="nav-dropdown-trigger"><?php echo e(__('nav_domains')); ?> <i class="fas fa-chevron-down"></i></button>
                        <div class="nav-dropdown">
                            <a href="<?php echo e(SITE_URL); ?>/domains-registration/"><i class="fas fa-globe"></i> <?php echo e(__('nav_register_domain')); ?></a>
                            <a href="<?php echo e(SITE_URL); ?>/domains-transfer/"><i class="fas fa-exchange-alt"></i> <?php echo e(__('nav_transfer_domain')); ?></a>
                        </div>
                    </li>
                    <li>
                        <button class="nav-dropdown-trigger"><?php echo e(__('nav_support')); ?> <i class="fas fa-chevron-down"></i></button>
                        <div class="nav-dropdown">
                            <a href="https://wiki.yottasrc.com/"><i class="fas fa-book"></i> <?php echo e(__('nav_tutorials')); ?></a>
                            <a href="https://blog.yottasrc.com/"><i class="fas fa-rss"></i> <?php echo e(__('nav_blog')); ?></a>
                            <a href="https://docs.yottasrc.com/"><i class="fas fa-file-code"></i> <?php echo e(__('nav_api_docs')); ?></a>
                            <a href="<?php echo e(SITE_URL); ?>/contact-us/"><i class="fas fa-headset"></i> <?php echo e(__('nav_contact_us')); ?></a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </header>

    <!-- ═══════════════ MOBILE DRAWER ═══════════════ -->
    <div class="mobile-overlay" id="mobileOverlay"></div>
    <aside class="mobile-drawer" id="mobileDrawer">
        <div class="mobile-drawer-header">
            <a href="<?php echo e(SITE_URL); ?>/" class="nav-logo">
                <img src="<?php echo asset('images/logo_dark.png'); ?>" alt="<?php echo e(SITE_NAME); ?>" class="logo-icon logo-dark">
                <img src="<?php echo asset('images/logo_light.png'); ?>" alt="<?php echo e(SITE_NAME); ?>" class="logo-icon logo-light">
            </a>
            <button class="mobile-drawer-close" id="mobileDrawerClose" aria-label="<?php echo e(__('nav_close_menu')); ?>">
                <i class="fas fa-times"></i>
            </button>
        </div>

        <div class="mobile-drawer-body">
            <ul class="mobile-nav-list">
                <li class="mobile-nav-group">
                    <button class="mobile-nav-trigger"><?php echo e(__('nav_hosting')); ?> <i class="fas fa-chevron-down"></i></button>
                    <div class="mobile-nav-sub">
                        <a href="<?php echo e(SITE_URL); ?>/best-cpanel-hosting/"><i class="fas fa-server"></i> <?php echo e(__('nav_cpanel_hosting')); ?></a>
                        <a href="<?php echo e(SITE_URL); ?>/best-wordpress-hosting/"><i class="fab fa-wordpress"></i> <?php echo e(__('nav_wordpress_hosting')); ?></a>
                        <a href="<?php echo e(SITE_URL); ?>/telegram-bot-hosting/"><i class="fab fa-telegram"></i> <?php echo e(__('nav_telegram_bot')); ?></a>
                        <a href="<?php echo e(SITE_URL); ?>/cpanel-hosting-dmca-ignored/"><i class="fas fa-shield-alt"></i> <?php echo e(__('nav_dmca_ignored')); ?></a>
                    </div>
                </li>
                <li class="mobile-nav-group">
                    <button class="mobile-nav-trigger"><?php echo e(__('nav_servers')); ?> <i class="fas fa-chevron-down"></i></button>
                    <div class="mobile-nav-sub">
                        <a href="<?php echo e(SITE_URL); ?>/vps/"><i class="fab fa-linux"></i> <?php echo e(__('nav_linux_vps')); ?></a>
                        <a href="<?php echo e(SITE_URL); ?>/vps/windows-servers/"><i class="fab fa-windows"></i> <?php echo e(__('nav_windows_vps')); ?></a>
                        <a href="<?php echo e(SITE_URL); ?>/cloud/"><i class="fas fa-cloud"></i> <?php echo e(__('nav_cloud_servers')); ?></a>
                        <a href="<?php echo e(SITE_URL); ?>/dedicated-servers/"><i class="fas fa-database"></i> <?php echo e(__('nav_dedicated')); ?></a>
                        <a href="<?php echo e(SITE_URL); ?>/unmetered-bandwidth/"><i class="fas fa-infinity"></i> <?php echo e(__('nav_unmetered_bandwidth')); ?></a>
                    </div>
                </li>
                <li class="mobile-nav-group">
                    <button class="mobile-nav-trigger"><?php echo e(__('nav_reseller')); ?> <i class="fas fa-chevron-down"></i></button>
                    <div class="mobile-nav-sub">
                        <a href="<?php echo e(SITE_URL); ?>/hosting-reseller"><i class="fas fa-sitemap"></i> <?php echo e(__('nav_cpanel_reseller')); ?></a>
                        <a href="<?php echo e(SITE_URL); ?>/master-reseller-cpanel-hosting/"><i class="fas fa-crown"></i> <?php echo e(__('nav_master_reseller')); ?></a>
                        <a href="<?php echo e(SITE_URL); ?>/vps-reseller/"><i class="fas fa-cubes"></i> <?php echo e(__('nav_vps_reseller')); ?></a>
                        <a href="<?php echo e(SITE_URL); ?>/wholesale/"><i class="fas fa-store"></i> <?php echo e(__('nav_wholesale')); ?></a>
                    </div>
                </li>
                <li class="mobile-nav-group">
                    <button class="mobile-nav-trigger"><?php echo e(__('nav_domains')); ?> <i class="fas fa-chevron-down"></i></button>
                    <div class="mobile-nav-sub">
                        <a href="<?php echo e(SITE_URL); ?>/domains-registration/"><i class="fas fa-globe"></i> <?php echo e(__('nav_register_domain')); ?></a>
                        <a href="<?php echo e(SITE_URL); ?>/domains-transfer/"><i class="fas fa-exchange-alt"></i> <?php echo e(__('nav_transfer_domain')); ?></a>
                    </div>
                </li>
                <li class="mobile-nav-group">
                    <button class="mobile-nav-trigger"><?php echo e(__('nav_support')); ?> <i class="fas fa-chevron-down"></i></button>
                    <div class="mobile-nav-sub">
                        <a href="https://wiki.yottasrc.com/"><i class="fas fa-book"></i> <?php echo e(__('nav_tutorials')); ?></a>
                        <a href="https://blog.yottasrc.com/"><i class="fas fa-rss"></i> <?php echo e(__('nav_blog')); ?></a>
                        <a href="https://docs.yottasrc.com/"><i class="fas fa-file-code"></i> <?php echo e(__('nav_api_docs')); ?></a>
                        <a href="<?php echo e(SITE_URL); ?>/contact-us/"><i class="fas fa-headset"></i> <?php echo e(__('nav_contact_us')); ?></a>
                    </div>
                </li>
            </ul>

            <!-- Mobile Switchers -->
            <div class="mobile-switchers">
                <div class="mobile-switcher-row">
                    <span class="mobile-switcher-label"><i class="fas fa-globe"></i> <?php echo e(__('nav_language')); ?></span>
                    <div class="mobile-switcher-options">
                        <?php foreach ($lang_options as $code => $opt): ?>
                        <a href="?lang=<?php echo e($code); ?>" class="mobile-pill<?php echo ($current_lang === $code) ? ' active' : ''; ?>">
                            <span class="fi fi-<?php echo e($opt['flag']); ?>"></span> <?php echo e($opt['label']); ?>
                        </a>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="mobile-switcher-row">
                    <span class="mobile-switcher-label"><i class="fas fa-coins"></i> <?php echo e(__('nav_currency')); ?></span>
                    <div class="mobile-switcher-options">
                        <?php foreach ($supported_currencies as $code => $cur): ?>
                        <a href="?currency=<?php echo e($code); ?>" class="mobile-pill<?php echo ($current_currency === $code) ? ' active' : ''; ?>">
                            <?php echo e($cur['symbol']); ?> <?php echo e($code); ?>
                        </a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="mobile-drawer-footer">
            <!-- Guest state (default — not logged in) -->
            <div class="nav-auth-guest">
                <a href="<?php echo e(CONSOLE_URL); ?>/login" class="mobile-cta-secondary"><?php echo e(__('nav_login')); ?></a>
                <a href="<?php echo e(CONSOLE_URL); ?>/register" class="mobile-cta-primary"><?php echo e(__('nav_get_started')); ?></a>
            </div>

            <!-- Logged-in state (authenticated user) -->
            <div class="nav-auth-user" style="display:none;">
                <a href="<?php echo e(CONSOLE_URL); ?>/dashboard" class="mobile-cta-primary"><i class="fas fa-tachometer-alt"></i> <?php echo e(__('nav_dashboard')); ?></a>
                <a href="<?php echo e(CONSOLE_URL); ?>/logout" class="mobile-cta-secondary"><i class="fas fa-sign-out-alt"></i> <?php echo e(__('nav_logout')); ?></a>
            </div>
        </div>
    </aside>
