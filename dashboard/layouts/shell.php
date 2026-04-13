<?php
/**
 * YottaSrc Dashboard — Shell Layout
 * ===================================
 * Main wrapper that combines sidebar + topbar + content area.
 *
 * Usage in a page:
 *   $page_title = 'My Services — YottaSrc';
 *   $page_css = 'pages.css';       // optional extra CSS
 *   $page_js = 'pages/services.js'; // optional extra JS
 *   $breadcrumbs_data = [
 *       ['label' => 'Dashboard', 'url' => DASH_BASE_PATH . '/'],
 *       ['label' => 'Services', 'url' => null],
 *   ];
 *   require_once __DIR__ . '/layouts/config.php';
 *   require_once __DIR__ . '/layouts/shell.php';
 *   // ... page content inside .db-content ...
 *   require_once __DIR__ . '/layouts/footer.php';
 */

// Render header (HTML head, opening body)
require_once __DIR__ . '/header.php';
?>

<div class="db-shell">
    <?php require_once __DIR__ . '/sidebar.php'; ?>

    <div class="db-main">
        <?php require_once __DIR__ . '/topbar.php'; ?>

        <main class="db-content" id="db-content">
