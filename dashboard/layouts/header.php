<!DOCTYPE html>
<html lang="<?php echo e($current_lang); ?>" dir="<?php echo e($text_direction); ?>" data-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo e($page_title ?? __('meta_title')); ?></title>
    <meta name="description" content="<?php echo e(__('meta_description')); ?>">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="<?php echo dash_asset('images/favicon.png'); ?>">

    <?php if (is_preview()): ?>
    <meta name="robots" content="noindex, nofollow">
    <?php endif; ?>

    <!-- Preconnect -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Fonts -->
    <link rel="preload" as="style"
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800;900&family=DM+Sans:wght@400;500;600&family=JetBrains+Mono:wght@400;500;600&display=swap">
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800;900&family=DM+Sans:wght@400;500;600&family=JetBrains+Mono:wght@400;500;600&display=swap"
        rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Flag Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icons/7.2.3/css/flag-icons.min.css">

    <!-- Dashboard Styles -->
    <link rel="stylesheet" href="<?php echo dash_asset('css/tokens.css'); ?>">
    <link rel="stylesheet" href="<?php echo dash_asset('css/dashboard.css'); ?>">
    <link rel="stylesheet" href="<?php echo dash_asset('css/components.css'); ?>">
    <?php if (isset($page_css)): ?>
    <link rel="stylesheet" href="<?php echo dash_asset('css/' . $page_css); ?>">
    <?php endif; ?>

    <!-- Theme: restore saved preference before first paint -->
    <script>
    (function() {
        var t = localStorage.getItem('yottasrc_theme');
        if (t === 'light' || t === 'dark') {
            document.documentElement.setAttribute('data-theme', t);
        }
        /* Pre-apply sidebar collapsed state to prevent layout flash.
           Also forces collapse on pages that request it (e.g. create-server
           wizard, which benefits from extra horizontal space). */
        var forceCollapse = <?php echo !empty($force_collapse_sidebar) ? 'true' : 'false'; ?>;
        if (window.innerWidth > 1024 && (forceCollapse || localStorage.getItem('yottasrc_sidebar') === 'collapsed')) {
            document.documentElement.classList.add('db-sidebar-will-collapse');
        }
    })();
    </script>
</head>

<body<?php echo !empty($force_collapse_sidebar) ? ' data-force-collapse-sidebar' : ''; ?>>
    <!-- Skip to content (accessibility) -->
    <a href="#db-content" class="db-sr-only">Skip to main content</a>

    <!-- Dot Grid Background -->
    <div class="db-dot-grid"></div>
