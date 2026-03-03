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

    <?php if (is_preview()): ?>
    <!-- Preview mode: block indexing -->
    <meta name="robots" content="noindex, nofollow">
    <?php endif; ?>

    <!-- Preconnect for performance -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Fonts (preloaded) -->
    <link rel="preload" as="style"
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=DM+Sans:wght@400;500;600&family=JetBrains+Mono:wght@400;500;600&display=swap">
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=DM+Sans:wght@400;500;600&family=JetBrains+Mono:wght@400;500;600&display=swap"
        rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Flag Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icons/7.2.3/css/flag-icons.min.css">

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="<?php echo asset('css/style.css'); ?>">
</head>

<body>
    <!-- Dot Grid Background -->
    <div class="dot-grid"></div>

    <!-- Navigation -->
    <nav class="nav-wrapper" id="navWrapper">
        <div class="container nav">
            <a href="<?php echo e(SITE_URL); ?>/" class="nav-logo">
                <img src="<?php echo BASE_PATH; ?>/logo-light.png" alt="<?php echo e(SITE_NAME); ?>" class="logo-icon">
            </a>

            <ul class="nav-links">
                <li>
                    <button class="nav-dropdown-trigger">Hosting <i class="fas fa-chevron-down"></i></button>
                    <div class="nav-dropdown">
                        <a href="<?php echo e(SITE_URL); ?>/best-cpanel-hosting/"><i class="fas fa-server"></i> cPanel
                            Hosting</a>
                        <a href="<?php echo e(SITE_URL); ?>/best-wordpress-hosting/"><i class="fab fa-wordpress"></i>
                            WordPress Hosting</a>
                        <a href="<?php echo e(SITE_URL); ?>/telegram-bot-hosting/"><i class="fab fa-telegram"></i>
                            Telegram Bot</a>
                        <a href="<?php echo e(SITE_URL); ?>/cpanel-hosting-dmca-ignored/"><i
                                class="fas fa-shield-alt"></i> DMCA Ignored</a>
                    </div>
                </li>
                <li>
                    <button class="nav-dropdown-trigger">Servers <i class="fas fa-chevron-down"></i></button>
                    <div class="nav-dropdown">
                        <a href="<?php echo e(SITE_URL); ?>/vps/"><i class="fab fa-linux"></i> Linux VPS</a>
                        <a href="<?php echo e(SITE_URL); ?>/vps/windows-servers/"><i class="fab fa-windows"></i> Windows
                            VPS</a>
                        <a href="<?php echo e(SITE_URL); ?>/cloud/"><i class="fas fa-cloud"></i> Cloud Servers</a>
                        <a href="<?php echo e(SITE_URL); ?>/dedicated-servers/"><i class="fas fa-database"></i>
                            Dedicated</a>
                    </div>
                </li>
                <li>
                    <button class="nav-dropdown-trigger">Reseller <i class="fas fa-chevron-down"></i></button>
                    <div class="nav-dropdown">
                        <a href="<?php echo e(SITE_URL); ?>/hosting-reseller"><i class="fas fa-sitemap"></i> cPanel
                            Reseller</a>
                        <a href="<?php echo e(SITE_URL); ?>/master-reseller-cpanel-hosting/"><i
                                class="fas fa-crown"></i> Master Reseller</a>
                        <a href="<?php echo e(SITE_URL); ?>/vps-reseller/"><i class="fas fa-cubes"></i> VPS Reseller</a>
                        <a href="<?php echo e(SITE_URL); ?>/resell-yottasrc-services-wholesale/"><i
                                class="fas fa-store"></i> Wholesale</a>
                    </div>
                </li>
                <li><a href="<?php echo e(SITE_URL); ?>/licenses/">Licenses</a></li>
                <li><a href="<?php echo e(CP_URL); ?>/cart.php?a=add&domain=register">Domains</a></li>
                <li>
                    <button class="nav-dropdown-trigger">Support <i class="fas fa-chevron-down"></i></button>
                    <div class="nav-dropdown">
                        <a href="https://wiki.yottasrc.com/"><i class="fas fa-book"></i> Tutorials</a>
                        <a href="https://blog.yottasrc.com/"><i class="fas fa-rss"></i> Blog</a>
                        <a href="https://docs.yottasrc.com/"><i class="fas fa-file-code"></i> API Docs</a>
                        <a href="<?php echo e(SITE_URL); ?>/contact-us/"><i class="fas fa-headset"></i> Contact Us</a>
                    </div>
                </li>
            </ul>

            <div class="nav-actions">
                <?php
                $lang_options = [
                    'en' => ['flag' => 'gb', 'label' => 'English'],
                    'ar' => ['flag' => 'sa', 'label' => 'العربية'],
                ];
                ?>
                <!-- Language Switcher (desktop) -->
                <div class="switcher-dropdown desktop-only" id="langSwitcher">
                    <button class="switcher-toggle" aria-label="Change language">
                        <span class="fi fi-<?php echo ($current_lang === 'ar') ? 'sa' : 'gb'; ?>"></span>
                        <span class="switcher-label"><?php echo ($current_lang === 'ar') ? 'العربية' : 'EN'; ?></span>
                        <i class="fas fa-chevron-down switcher-arrow"></i>
                    </button>
                    <div class="switcher-menu">
                        <div class="switcher-menu-title"><?php echo ($current_lang === 'ar') ? 'اختر اللغة' : 'Language'; ?></div>
                        <?php foreach ($lang_options as $code => $opt): ?>
                        <a href="?lang=<?php echo e($code); ?>" class="switcher-option<?php echo ($current_lang === $code) ? ' active' : ''; ?>">
                            <span class="fi fi-<?php echo e($opt['flag']); ?>"></span>
                            <span><?php echo e($opt['label']); ?></span>
                            <?php if ($current_lang === $code): ?><i class="fas fa-check"></i><?php endif; ?>
                        </a>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- Currency Switcher (desktop) -->
                <div class="switcher-dropdown desktop-only" id="currencySwitcher">
                    <button class="switcher-toggle" aria-label="Change currency">
                        <span class="switcher-currency-symbol"><?php echo e($supported_currencies[$current_currency]['symbol']); ?></span>
                        <span class="switcher-label"><?php echo e($current_currency); ?></span>
                        <i class="fas fa-chevron-down switcher-arrow"></i>
                    </button>
                    <div class="switcher-menu">
                        <div class="switcher-menu-title"><?php echo ($current_lang === 'ar') ? 'اختر العملة' : 'Currency'; ?></div>
                        <?php foreach ($supported_currencies as $code => $cur): ?>
                        <a href="?currency=<?php echo e($code); ?>" class="switcher-option<?php echo ($current_currency === $code) ? ' active' : ''; ?>">
                            <span class="switcher-currency-symbol"><?php echo e($cur['symbol']); ?></span>
                            <span><?php echo e(($current_lang === 'ar') ? $cur['name_ar'] : $cur['name_en']); ?> (<?php echo e($code); ?>)</span>
                            <?php if ($current_currency === $code): ?><i class="fas fa-check"></i><?php endif; ?>
                        </a>
                        <?php endforeach; ?>
                    </div>
                </div>

                <button class="btn-theme-toggle" id="themeToggle" title="Toggle Theme" aria-label="Toggle dark/light theme">
                    <i class="fas fa-sun"></i>
                </button>
                <a href="<?php echo e(CONSOLE_URL); ?>/login" class="btn-nav-secondary desktop-only">Log In</a>
                <a href="<?php echo e(CONSOLE_URL); ?>/register" class="btn-nav-primary desktop-only">Get Started</a>
                <button class="nav-mobile-toggle" id="mobileMenuToggle" aria-label="Toggle mobile menu">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </div>
    </nav>

    <!-- ═══════════════ MOBILE DRAWER ═══════════════ -->
    <div class="mobile-overlay" id="mobileOverlay"></div>
    <aside class="mobile-drawer" id="mobileDrawer">
        <div class="mobile-drawer-header">
            <a href="<?php echo e(SITE_URL); ?>/" class="nav-logo">
                <img src="<?php echo BASE_PATH; ?>/logo-light.png" alt="<?php echo e(SITE_NAME); ?>" class="logo-icon">
            </a>
            <button class="mobile-drawer-close" id="mobileDrawerClose" aria-label="Close menu">
                <i class="fas fa-times"></i>
            </button>
        </div>

        <div class="mobile-drawer-body">
            <ul class="mobile-nav-list">
                <li class="mobile-nav-group">
                    <button class="mobile-nav-trigger">Hosting <i class="fas fa-chevron-down"></i></button>
                    <div class="mobile-nav-sub">
                        <a href="<?php echo e(SITE_URL); ?>/best-cpanel-hosting/"><i class="fas fa-server"></i> cPanel Hosting</a>
                        <a href="<?php echo e(SITE_URL); ?>/best-wordpress-hosting/"><i class="fab fa-wordpress"></i> WordPress Hosting</a>
                        <a href="<?php echo e(SITE_URL); ?>/telegram-bot-hosting/"><i class="fab fa-telegram"></i> Telegram Bot</a>
                        <a href="<?php echo e(SITE_URL); ?>/cpanel-hosting-dmca-ignored/"><i class="fas fa-shield-alt"></i> DMCA Ignored</a>
                    </div>
                </li>
                <li class="mobile-nav-group">
                    <button class="mobile-nav-trigger">Servers <i class="fas fa-chevron-down"></i></button>
                    <div class="mobile-nav-sub">
                        <a href="<?php echo e(SITE_URL); ?>/vps/"><i class="fab fa-linux"></i> Linux VPS</a>
                        <a href="<?php echo e(SITE_URL); ?>/vps/windows-servers/"><i class="fab fa-windows"></i> Windows VPS</a>
                        <a href="<?php echo e(SITE_URL); ?>/cloud/"><i class="fas fa-cloud"></i> Cloud Servers</a>
                        <a href="<?php echo e(SITE_URL); ?>/dedicated-servers/"><i class="fas fa-database"></i> Dedicated</a>
                    </div>
                </li>
                <li class="mobile-nav-group">
                    <button class="mobile-nav-trigger">Reseller <i class="fas fa-chevron-down"></i></button>
                    <div class="mobile-nav-sub">
                        <a href="<?php echo e(SITE_URL); ?>/hosting-reseller"><i class="fas fa-sitemap"></i> cPanel Reseller</a>
                        <a href="<?php echo e(SITE_URL); ?>/master-reseller-cpanel-hosting/"><i class="fas fa-crown"></i> Master Reseller</a>
                        <a href="<?php echo e(SITE_URL); ?>/vps-reseller/"><i class="fas fa-cubes"></i> VPS Reseller</a>
                        <a href="<?php echo e(SITE_URL); ?>/resell-yottasrc-services-wholesale/"><i class="fas fa-store"></i> Wholesale</a>
                    </div>
                </li>
                <li><a href="<?php echo e(SITE_URL); ?>/licenses/" class="mobile-nav-link">Licenses</a></li>
                <li><a href="<?php echo e(CP_URL); ?>/cart.php?a=add&domain=register" class="mobile-nav-link">Domains</a></li>
                <li class="mobile-nav-group">
                    <button class="mobile-nav-trigger">Support <i class="fas fa-chevron-down"></i></button>
                    <div class="mobile-nav-sub">
                        <a href="https://wiki.yottasrc.com/"><i class="fas fa-book"></i> Tutorials</a>
                        <a href="https://blog.yottasrc.com/"><i class="fas fa-rss"></i> Blog</a>
                        <a href="https://docs.yottasrc.com/"><i class="fas fa-file-code"></i> API Docs</a>
                        <a href="<?php echo e(SITE_URL); ?>/contact-us/"><i class="fas fa-headset"></i> Contact Us</a>
                    </div>
                </li>
            </ul>

            <!-- Mobile Switchers -->
            <div class="mobile-switchers">
                <div class="mobile-switcher-row">
                    <span class="mobile-switcher-label"><i class="fas fa-globe"></i> <?php echo ($current_lang === 'ar') ? 'اللغة' : 'Language'; ?></span>
                    <div class="mobile-switcher-options">
                        <?php foreach ($lang_options as $code => $opt): ?>
                        <a href="?lang=<?php echo e($code); ?>" class="mobile-pill<?php echo ($current_lang === $code) ? ' active' : ''; ?>">
                            <span class="fi fi-<?php echo e($opt['flag']); ?>"></span> <?php echo e($opt['label']); ?>
                        </a>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="mobile-switcher-row">
                    <span class="mobile-switcher-label"><i class="fas fa-coins"></i> <?php echo ($current_lang === 'ar') ? 'العملة' : 'Currency'; ?></span>
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
            <a href="<?php echo e(CONSOLE_URL); ?>/login" class="mobile-cta-secondary">Log In</a>
            <a href="<?php echo e(CONSOLE_URL); ?>/register" class="mobile-cta-primary">Get Started</a>
        </div>
    </aside>
