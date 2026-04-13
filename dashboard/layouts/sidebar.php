<?php
/**
 * YottaSrc Dashboard — Sidebar Navigation
 *
 * Supports expanded (260px) and collapsed (72px) states.
 * Collapsed: icons only + tooltips. Expanded: full text.
 */
?>

<!-- Sidebar Overlay (mobile) -->
<div class="db-sidebar-overlay" id="sidebarOverlay"></div>

<!-- Sidebar -->
<aside class="db-sidebar" id="sidebar">
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

    <!-- Search -->
    <div class="db-sidebar-search">
        <button class="db-sidebar-search-input" id="searchTrigger" aria-label="<?php echo e(__('topbar_search')); ?>">
            <i class="fas fa-magnifying-glass"></i>
            <span class="db-hide-collapsed"><?php echo e(__('topbar_search')); ?></span>
            <kbd class="db-sidebar-search-kbd db-hide-collapsed">Ctrl+K</kbd>
        </button>
    </div>

    <!-- Navigation -->
    <nav class="db-sidebar-nav" aria-label="Main navigation">
        <!-- MAIN -->
        <div class="db-nav-group">
            <span class="db-nav-group-label"><?php echo e(__('nav_main')); ?></span>

            <a href="<?php echo e(DASH_BASE_PATH); ?>/" class="db-nav-item<?php echo is_active('dashboard'); ?>" data-tooltip="<?php echo e(__('nav_dashboard')); ?>">
                <i class="fas fa-table-cells"></i>
                <span class="db-nav-item-text"><?php echo e(__('nav_dashboard')); ?></span>
            </a>

            <div class="db-nav-expand<?php echo is_group_open(['services', 'order']); ?>">
                <button class="db-nav-expand-trigger" data-tooltip="<?php echo e(__('nav_services')); ?>">
                    <i class="fas fa-server"></i>
                    <span class="db-nav-item-text"><?php echo e(__('nav_services')); ?></span>
                    <i class="fas fa-chevron-down db-nav-expand-arrow"></i>
                </button>
                <div class="db-nav-expand-items">
                    <a href="<?php echo e(DASH_BASE_PATH); ?>/pages/services/index.php" class="db-nav-item<?php echo is_active('services'); ?>">
                        <span class="db-nav-item-text"><?php echo e(__('nav_my_services')); ?></span>
                    </a>
                    <a href="<?php echo e(DASH_BASE_PATH); ?>/pages/services/order.php" class="db-nav-item<?php echo is_active('order'); ?>">
                        <span class="db-nav-item-text"><?php echo e(__('nav_order_new')); ?></span>
                    </a>
                </div>
            </div>

            <a href="<?php echo e(DASH_BASE_PATH); ?>/pages/cloud/index.php" class="db-nav-item<?php echo is_active('cloud'); ?>" data-tooltip="<?php echo e(__('nav_cloud_servers')); ?>">
                <i class="fas fa-cloud"></i>
                <span class="db-nav-item-text"><?php echo e(__('nav_cloud_servers')); ?></span>
            </a>

            <a href="<?php echo e(DASH_BASE_PATH); ?>/pages/domains/index.php" class="db-nav-item<?php echo is_active('domains'); ?>" data-tooltip="<?php echo e(__('nav_domains')); ?>">
                <i class="fas fa-globe"></i>
                <span class="db-nav-item-text"><?php echo e(__('nav_domains')); ?></span>
            </a>
        </div>

        <!-- BILLING -->
        <div class="db-nav-group">
            <span class="db-nav-group-label"><?php echo e(__('nav_billing')); ?></span>

            <a href="<?php echo e(DASH_BASE_PATH); ?>/pages/billing/invoices.php" class="db-nav-item<?php echo is_active('invoices'); ?>" data-tooltip="<?php echo e(__('nav_invoices')); ?>">
                <i class="fas fa-file-lines"></i>
                <span class="db-nav-item-text"><?php echo e(__('nav_invoices')); ?></span>
            </a>

            <a href="<?php echo e(DASH_BASE_PATH); ?>/pages/billing/payment-methods.php" class="db-nav-item<?php echo is_active('payment-methods'); ?>" data-tooltip="<?php echo e(__('nav_payment_methods')); ?>">
                <i class="fas fa-credit-card"></i>
                <span class="db-nav-item-text"><?php echo e(__('nav_payment_methods')); ?></span>
            </a>

            <a href="<?php echo e(DASH_BASE_PATH); ?>/pages/billing/credit-balance.php" class="db-nav-item<?php echo is_active('credit-balance'); ?>" data-tooltip="<?php echo e(__('nav_credit_balance')); ?>">
                <i class="fas fa-wallet"></i>
                <span class="db-nav-item-text"><?php echo e(__('nav_credit_balance')); ?></span>
            </a>

            <a href="<?php echo e(DASH_BASE_PATH); ?>/pages/billing/transactions.php" class="db-nav-item<?php echo is_active('transactions'); ?>" data-tooltip="<?php echo e(__('nav_transactions')); ?>">
                <i class="fas fa-arrow-right-arrow-left"></i>
                <span class="db-nav-item-text"><?php echo e(__('nav_transactions')); ?></span>
            </a>

            <a href="<?php echo e(DASH_BASE_PATH); ?>/pages/billing/add-funds.php" class="db-nav-item<?php echo is_active('add-funds'); ?>" data-tooltip="<?php echo e(__('nav_add_funds')); ?>">
                <i class="fas fa-circle-plus"></i>
                <span class="db-nav-item-text"><?php echo e(__('nav_add_funds')); ?></span>
            </a>
        </div>

        <!-- SUPPORT -->
        <div class="db-nav-group">
            <span class="db-nav-group-label"><?php echo e(__('nav_support')); ?></span>

            <a href="<?php echo e(DASH_BASE_PATH); ?>/pages/support/index.php" class="db-nav-item<?php echo is_active('support'); ?>" data-tooltip="<?php echo e(__('nav_tickets')); ?>">
                <i class="fas fa-message"></i>
                <span class="db-nav-item-text"><?php echo e(__('nav_tickets')); ?></span>
            </a>

            <a href="<?php echo e(DASH_BASE_PATH); ?>/pages/support/new.php" class="db-nav-item<?php echo is_active('new'); ?>" data-tooltip="<?php echo e(__('nav_new_ticket')); ?>">
                <i class="fas fa-plus"></i>
                <span class="db-nav-item-text"><?php echo e(__('nav_new_ticket')); ?></span>
            </a>
        </div>

        <!-- ACCOUNT -->
        <div class="db-nav-group">
            <span class="db-nav-group-label"><?php echo e(__('nav_account')); ?></span>

            <a href="<?php echo e(DASH_BASE_PATH); ?>/pages/profile/index.php" class="db-nav-item<?php echo is_active('profile'); ?>" data-tooltip="<?php echo e(__('nav_profile')); ?>">
                <i class="fas fa-user"></i>
                <span class="db-nav-item-text"><?php echo e(__('nav_profile')); ?></span>
            </a>

            <a href="<?php echo e(DASH_BASE_PATH); ?>/pages/profile/security.php" class="db-nav-item<?php echo is_active('security'); ?>" data-tooltip="<?php echo e(__('nav_security')); ?>">
                <i class="fas fa-shield-halved"></i>
                <span class="db-nav-item-text"><?php echo e(__('nav_security')); ?></span>
            </a>

            <a href="<?php echo e(DASH_BASE_PATH); ?>/pages/profile/settings.php" class="db-nav-item<?php echo is_active('settings'); ?>" data-tooltip="<?php echo e(__('nav_settings')); ?>">
                <i class="fas fa-gear"></i>
                <span class="db-nav-item-text"><?php echo e(__('nav_settings')); ?></span>
            </a>
        </div>
    </nav>

    <!-- Footer -->
    <div class="db-sidebar-footer">
        <!-- Account Balance Widget -->
        <?php
        $site_balance  = 0;
        $cloud_balance = 0;
        $total_balance = $site_balance + $cloud_balance;
        ?>
        <div class="db-sidebar-balance">
            <div class="db-sidebar-balance-total">
                <span class="db-sidebar-balance-label db-hide-collapsed"><?php echo e(__('balance_total')); ?></span>
                <span class="db-sidebar-balance-amount"><?php echo format_money($total_balance); ?></span>
            </div>
            <!-- <div class="db-sidebar-balance-breakdown db-hide-collapsed">
                <span class="db-sidebar-balance-item">
                    <span class="db-balance-dot db-balance-dot--site"></span>
                    <?php echo e(__('balance_site')); ?>: <?php echo format_money($site_balance); ?>
                </span>
                <span class="db-sidebar-balance-item">
                    <span class="db-balance-dot db-balance-dot--cloud"></span>
                    <?php echo e(__('balance_cloud')); ?>: <?php echo format_money($cloud_balance); ?>
                </span>
            </div> -->
            <a href="<?php echo e(DASH_BASE_PATH); ?>/pages/billing/add-funds.php" class="db-sidebar-balance-action">
                <i class="fas fa-plus db-show-collapsed"></i>
                <span class="db-hide-collapsed"><?php echo e(__('balance_add_funds')); ?></span>
            </a>
        </div>

        <!-- Logout -->
        <a href="<?php echo e(CONSOLE_URL); ?>/logout" class="db-sidebar-logout" id="logoutBtn" data-tooltip="<?php echo e(__('nav_logout')); ?>">
            <i class="fas fa-right-from-bracket"></i>
            <span class="db-nav-item-text"><?php echo e(__('nav_logout')); ?></span>
        </a>
    </div>
</aside>
