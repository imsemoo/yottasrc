<?php
/**
 * YottaSrc Dashboard — Project Context Sidebar
 * ==============================================
 * Replaces the main sidebar when the user is inside a project.
 *
 * Expects (set by the page before including project-shell.php):
 *   $current_project    — array from cloud_get_project(), has 'id' and 'name'
 *   $project_nav_active — one of: 'create-server', 'servers', 'network', 'api'
 */

$project_nav_active = $project_nav_active ?? '';
$current_project    = $current_project ?? null;

function _pnav_active($slug) {
    global $project_nav_active;
    return $project_nav_active === $slug ? ' active' : '';
}
?>

<!-- Sidebar Overlay (mobile) -->
<div class="db-sidebar-overlay" id="sidebarOverlay"></div>

<!-- Project-Scoped Sidebar -->
<aside class="db-sidebar db-sidebar--project" id="sidebar">
    <!-- Header -->
    <div class="db-sidebar-header">
        <a href="<?php echo e(DASH_BASE_PATH); ?>/" class="db-sidebar-logo">
            <img src="<?php echo dash_asset('images/logo_dark.png'); ?>" alt="<?php echo e(SITE_NAME); ?>" class="db-logo-icon db-logo-full logo-dark">
            <img src="<?php echo dash_asset('images/logo_light.png'); ?>" alt="<?php echo e(SITE_NAME); ?>" class="db-logo-icon db-logo-full logo-light">
            <span class="db-logo-mark">Y</span>
        </a>
        <button class="db-sidebar-collapse" id="sidebarCollapse" aria-label="Collapse sidebar">
            <i class="fas fa-chevron-left db-collapse-icon"></i>
        </button>
    </div>

    <!-- Project ID Badge -->
    <?php if (!empty($current_project)): ?>
    <div class="db-project-badge" data-tooltip="<?php echo e($current_project['name']); ?>">
        <div class="db-project-badge__label"><?php echo e(__('project_badge_label')); ?></div>
        <div class="db-project-badge__id">#<?php echo e($current_project['id']); ?></div>
        <div class="db-project-badge__name db-hide-collapsed"><?php echo e($current_project['name']); ?></div>
    </div>
    <?php endif; ?>

    <!-- Navigation -->
    <nav class="db-sidebar-nav" aria-label="<?php echo e(__('project_nav_aria')); ?>">
        <!-- PROJECT NAV -->
        <div class="db-nav-group">
            <a href="<?php echo e(cloud_project_url('create-server', $current_project['id'] ?? '')); ?>"
               class="db-nav-item<?php echo _pnav_active('create-server'); ?>"
               data-tooltip="<?php echo e(__('project_nav_create_server')); ?>">
                <i class="fas fa-square-plus"></i>
                <span class="db-nav-item-text"><?php echo e(__('project_nav_create_server')); ?></span>
            </a>

            <a href="<?php echo e(cloud_project_url('servers', $current_project['id'] ?? '')); ?>"
               class="db-nav-item<?php echo _pnav_active('servers'); ?>"
               data-tooltip="<?php echo e(__('project_nav_servers')); ?>">
                <i class="fas fa-server"></i>
                <span class="db-nav-item-text"><?php echo e(__('project_nav_servers')); ?></span>
            </a>

            <a href="<?php echo e(cloud_project_url('network', $current_project['id'] ?? '')); ?>"
               class="db-nav-item<?php echo _pnav_active('network'); ?>"
               data-tooltip="<?php echo e(__('project_nav_network')); ?>">
                <i class="fas fa-globe"></i>
                <span class="db-nav-item-text"><?php echo e(__('project_nav_network')); ?></span>
            </a>

            <a href="<?php echo e(cloud_project_url('api', $current_project['id'] ?? '')); ?>"
               class="db-nav-item<?php echo _pnav_active('api'); ?>"
               data-tooltip="<?php echo e(__('project_nav_api')); ?>">
                <i class="fas fa-code"></i>
                <span class="db-nav-item-text"><?php echo e(__('project_nav_api')); ?></span>
            </a>
        </div>

        <!-- MAIN (back to global nav) -->
        <div class="db-nav-group">
            <span class="db-nav-group-label"><?php echo e(__('nav_main')); ?></span>

            <a href="<?php echo e(DASH_BASE_PATH); ?>/pages/cloud/index.php"
               class="db-nav-item"
               data-tooltip="<?php echo e(__('project_nav_projects')); ?>">
                <i class="fas fa-folder"></i>
                <span class="db-nav-item-text"><?php echo e(__('project_nav_projects')); ?></span>
            </a>

            <a href="<?php echo e(DASH_BASE_PATH); ?>/"
               class="db-nav-item"
               data-tooltip="<?php echo e(__('project_nav_main_dashboard')); ?>">
                <i class="fas fa-house"></i>
                <span class="db-nav-item-text"><?php echo e(__('project_nav_main_dashboard')); ?></span>
            </a>

            <div class="db-nav-expand">
                <button class="db-nav-expand-trigger" data-tooltip="<?php echo e(__('nav_support')); ?>">
                    <i class="fas fa-message"></i>
                    <span class="db-nav-item-text"><?php echo e(__('nav_support')); ?></span>
                    <i class="fas fa-chevron-down db-nav-expand-arrow"></i>
                </button>
                <div class="db-nav-expand-items">
                    <a href="<?php echo e(DASH_BASE_PATH); ?>/pages/support/index.php" class="db-nav-item">
                        <span class="db-nav-item-text"><?php echo e(__('nav_tickets')); ?></span>
                    </a>
                    <a href="<?php echo e(DASH_BASE_PATH); ?>/pages/support/new.php" class="db-nav-item">
                        <span class="db-nav-item-text"><?php echo e(__('nav_new_ticket')); ?></span>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Footer -->
    <div class="db-sidebar-footer">
        <!-- Logout -->
        <a href="<?php echo e(CONSOLE_URL); ?>/logout" class="db-sidebar-logout" data-tooltip="<?php echo e(__('nav_logout')); ?>">
            <i class="fas fa-right-from-bracket"></i>
            <span class="db-nav-item-text"><?php echo e(__('nav_logout')); ?></span>
        </a>
    </div>
</aside>
