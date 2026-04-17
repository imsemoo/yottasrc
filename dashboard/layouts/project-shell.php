<?php
/**
 * YottaSrc Dashboard — Project Context Shell Layout
 * ====================================================
 * Same as shell.php but swaps the main sidebar for project-sidebar.php.
 * Used by all pages inside /pages/cloud/project/.
 *
 * Usage in a project page:
 *   require_once __DIR__ . '/../../../layouts/config.php';
 *   require_once __DIR__ . '/../../../layouts/project-helpers.php';
 *
 *   $project_id = $_GET['id'] ?? '';
 *   $current_project = cloud_require_project($project_id);   // redirects if invalid
 *   $project_nav_active = 'servers';                          // or network, api, create-server
 *
 *   $page_title       = 'Servers — ' . SITE_NAME;
 *   $breadcrumbs_data = [...];
 *
 *   require_once __DIR__ . '/../../../layouts/project-shell.php';
 *   // ... page content ...
 *   require_once __DIR__ . '/../../../layouts/footer.php';
 */

// Render header (HTML head, opening body)
require_once __DIR__ . '/header.php';
?>

<div class="db-shell db-shell--project">
    <?php require_once __DIR__ . '/project-sidebar.php'; ?>

    <div class="db-main">
        <?php require_once __DIR__ . '/topbar.php'; ?>

        <main class="db-content" id="db-content">
            <?php
            /* Verification banner — shown to unverified users on every project page.
               Page can opt out by setting $hide_verification_banner = true before including this shell.
               Backend will set $is_verified based on actual user state. */
            if (empty($hide_verification_banner) && empty($is_verified)) {
                include __DIR__ . '/../components/verification-banner.php';
            }
            ?>
