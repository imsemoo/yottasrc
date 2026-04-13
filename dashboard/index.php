<?php
/**
 * YottaSrc Dashboard — Home Page
 * ================================
 * Premium control center layout.
 */

// Page config (loaded after config.php for __() access)
$page_title = null; // set after config loads
$breadcrumbs_data = null; // set after config loads

// Bootstrap
require_once __DIR__ . '/layouts/config.php';

$page_title = __('meta_title');
$breadcrumbs_data = [
    ['label' => __('nav_dashboard'), 'url' => null],
];

require_once __DIR__ . '/layouts/shell.php';

// Demo data (will come from backend later)
$user_name = 'Islam';
$last_login_date = '24/03/2026';
$last_login_time = '23:52 EET';
$last_login_ip = '197.54.214.50';
?>

<!-- ═══════════════════════════════════════════
     HERO — Control Center
     ═══════════════════════════════════════════ -->
<div class="db-hero">
    <div class="db-hero-top">
        <div class="db-hero-greeting">
            <h1 class="db-hero-title"><?php echo e(__('dash_welcome')); ?>, <span><?php echo e($user_name); ?></span></h1>
            <div class="db-hero-meta">
                <span class="db-hero-meta-item">
                    <i class="fas fa-clock"></i>
                    <?php echo e(__('dash_last_login')); ?>: <?php echo e($last_login_date); ?>, <?php echo e($last_login_time); ?>
                </span>
                <span class="db-hero-meta-item">
                    <i class="fas fa-location-dot"></i>
                    IP: <?php echo e($last_login_ip); ?>
                </span>
            </div>
        </div>
        <div class="db-hero-account-badge">
            <i class="fas fa-circle-check"></i>
            <?php echo e(__('status_active')); ?>
        </div>
    </div>

    <div class="db-hero-stats">
        <a href="<?php echo e(DASH_BASE_PATH); ?>/pages/services/index.php" class="db-hero-stat db-hero-stat--primary">
            <div class="db-hero-stat-icon"><i class="fas fa-server"></i></div>
            <div class="db-hero-stat-body">
                <span class="db-hero-stat-value">1</span>
                <span class="db-hero-stat-label"><?php echo e(__('dash_active_services')); ?></span>
                <span class="db-hero-stat-hint db-hero-stat-hint--positive"><i class="fas fa-arrow-up"></i> <?php echo e(__('dash_hint_this_month', ['count' => 1])); ?></span>
            </div>
        </a>
        <a href="<?php echo e(DASH_BASE_PATH); ?>/pages/domains/index.php" class="db-hero-stat db-hero-stat--secondary">
            <div class="db-hero-stat-icon"><i class="fas fa-globe"></i></div>
            <div class="db-hero-stat-body">
                <span class="db-hero-stat-value">0</span>
                <span class="db-hero-stat-label"><?php echo e(__('dash_active_domains')); ?></span>
                <span class="db-hero-stat-hint db-hero-stat-hint--neutral"><?php echo e(__('dash_hint_no_changes')); ?></span>
            </div>
        </a>
        <a href="<?php echo e(DASH_BASE_PATH); ?>/pages/cloud/index.php" class="db-hero-stat db-hero-stat--accent">
            <div class="db-hero-stat-icon"><i class="fas fa-cloud"></i></div>
            <div class="db-hero-stat-body">
                <span class="db-hero-stat-value">0</span>
                <span class="db-hero-stat-label"><?php echo e(__('dash_cloud_servers')); ?></span>
                <span class="db-hero-stat-hint db-hero-stat-hint--neutral"><?php echo e(__('dash_hint_no_changes')); ?></span>
            </div>
        </a>
        <a href="<?php echo e(DASH_BASE_PATH); ?>/pages/billing/invoices.php" class="db-hero-stat db-hero-stat--warning">
            <div class="db-hero-stat-icon"><i class="fas fa-file-lines"></i></div>
            <div class="db-hero-stat-body">
                <span class="db-hero-stat-value">0</span>
                <span class="db-hero-stat-label"><?php echo e(__('dash_unpaid_invoices')); ?></span>
                <span class="db-hero-stat-hint db-hero-stat-hint--positive"><i class="fas fa-check"></i> <?php echo e(__('dash_hint_all_paid')); ?></span>
            </div>
        </a>
    </div>
</div>


<!-- ═══════════════════════════════════════════
     QUICK ACTIONS — Rich Cards
     ═══════════════════════════════════════════ -->
<div class="db-actions-grid">
    <a href="<?php echo e(DASH_BASE_PATH); ?>/pages/services/order.php" class="db-action-card db-action-card--order">
        <div class="db-action-card-icon"><i class="fas fa-cart-plus"></i></div>
        <span class="db-action-card-title"><?php echo e(__('dash_order_service')); ?></span>
        <span class="db-action-card-desc"><?php echo e(__('dash_order_service_desc')); ?></span>
    </a>
    <a href="<?php echo e(DASH_BASE_PATH); ?>/pages/cloud/index.php" class="db-action-card db-action-card--deploy">
        <div class="db-action-card-icon"><i class="fas fa-rocket"></i></div>
        <span class="db-action-card-title"><?php echo e(__('dash_deploy_server')); ?></span>
        <span class="db-action-card-desc"><?php echo e(__('dash_deploy_server_desc')); ?></span>
    </a>
    <a href="<?php echo e(DASH_BASE_PATH); ?>/pages/domains/index.php" class="db-action-card db-action-card--domain">
        <div class="db-action-card-icon"><i class="fas fa-earth-americas"></i></div>
        <span class="db-action-card-title"><?php echo e(__('dash_register_domain')); ?></span>
        <span class="db-action-card-desc"><?php echo e(__('dash_register_domain_desc')); ?></span>
    </a>
    <a href="<?php echo e(DASH_BASE_PATH); ?>/pages/billing/add-funds.php" class="db-action-card db-action-card--funds">
        <div class="db-action-card-icon"><i class="fas fa-coins"></i></div>
        <span class="db-action-card-title"><?php echo e(__('dash_add_funds')); ?></span>
        <span class="db-action-card-desc"><?php echo e(__('dash_add_funds_desc')); ?></span>
    </a>
    <a href="<?php echo e(DASH_BASE_PATH); ?>/pages/support/new.php" class="db-action-card db-action-card--ticket">
        <div class="db-action-card-icon"><i class="fas fa-headset"></i></div>
        <span class="db-action-card-title"><?php echo e(__('dash_open_ticket')); ?></span>
        <span class="db-action-card-desc"><?php echo e(__('dash_open_ticket_desc')); ?></span>
    </a>
</div>


<!-- ═══════════════════════════════════════════
     UPCOMING — Smart UX Banner
     ═══════════════════════════════════════════ -->
<div class="db-upcoming-banner">
    <div class="db-upcoming-icon"><i class="fas fa-calendar-check"></i></div>
    <div class="db-upcoming-info">
        <div class="db-upcoming-title"><?php echo e(__('dash_upcoming_payment')); ?> — VPS YTA 1</div>
        <div class="db-upcoming-desc"><?php echo e(__('dash_upcoming_due', ['amount' => '€3.25', 'date' => '24/04/2026'])); ?></div>
    </div>
    <span class="db-upcoming-countdown">
        <i class="fas fa-clock"></i>
        <?php echo e(__('dash_upcoming_days', ['count' => 31])); ?>
    </span>
    <a href="<?php echo e(DASH_BASE_PATH); ?>/pages/billing/invoices.php" class="db-btn db-btn--secondary db-btn--sm db-upcoming-action">
        <?php echo e(__('common_view')); ?>
    </a>
    <!-- Progress: shows how much of the billing period has passed -->
    <div class="db-upcoming-progress">
        <div class="db-upcoming-progress-bar" style="width: 0%;"></div>
    </div>
</div>


<!-- ═══════════════════════════════════════════
     MAIN CONTENT GRID
     ═══════════════════════════════════════════ -->
<div class="db-grid-2">

    <!-- Active Services -->
    <div class="db-card">
        <div class="db-card-header">
            <h3 class="db-card-title">
                <i class="fas fa-server db-card-title-icon"></i>
                <?php echo e(__('dash_active_services_title')); ?>
            </h3>
            <a href="<?php echo e(DASH_BASE_PATH); ?>/pages/services/index.php" class="db-card-link">
                <?php echo e(__('dash_view_all')); ?> <i class="fas fa-arrow-right"></i>
            </a>
        </div>
        <div class="db-card-body">
            <div class="db-service-item">
                <div class="db-service-item-icon">
                    <i class="fab fa-linux"></i>
                </div>
                <div class="db-service-item-info">
                    <span class="db-service-item-name">VPS YTA 1</span>
                    <span class="db-service-item-meta">
                        107.161.168.236
                        <button class="db-copy-btn" title="Copy IP" aria-label="Copy IP address"><i class="fas fa-copy"></i></button>
                        &middot; Linux VPS/VDS
                    </span>
                </div>
                <div class="db-service-item-right">
                    <span class="db-badge db-badge--active"><?php echo e(__('status_active')); ?></span>
                    <div class="db-service-item-due">
                        <span class="db-service-item-due-label"><?php echo e(__('dash_due')); ?></span>
                        <span>24/04/2026</span>
                    </div>
                    <a href="#" class="db-btn db-btn--ghost db-btn--sm"><?php echo e(__('common_manage')); ?></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Cloud Servers — Empty State -->
    <div class="db-card">
        <div class="db-card-header">
            <h3 class="db-card-title">
                <i class="fas fa-cloud db-card-title-icon"></i>
                <?php echo e(__('dash_cloud_servers_title')); ?>
            </h3>
            <a href="<?php echo e(DASH_BASE_PATH); ?>/pages/cloud/index.php" class="db-card-link">
                <?php echo e(__('dash_view_all')); ?> <i class="fas fa-arrow-right"></i>
            </a>
        </div>
        <div class="db-card-body">
            <div class="db-empty-state">
                <div class="db-empty-illustration db-empty-illustration--cloud">
                    <i class="fas fa-cloud"></i>
                </div>
                <p class="db-empty-title"><?php echo e(__('dash_no_cloud')); ?></p>
                <p class="db-empty-desc"><?php echo e(__('dash_no_cloud_desc_full')); ?></p>
                <a href="<?php echo e(DASH_BASE_PATH); ?>/pages/cloud/index.php" class="db-btn db-btn--primary db-btn--sm">
                    <i class="fas fa-rocket"></i>
                    <?php echo e(__('dash_deploy_server')); ?>
                </a>
            </div>
        </div>
    </div>

</div>


<!-- Latest Invoices + Recent Activity -->
<div class="db-grid-2">

    <!-- Latest Invoices -->
    <div class="db-card">
        <div class="db-card-header">
            <h3 class="db-card-title">
                <i class="fas fa-file-lines db-card-title-icon"></i>
                <?php echo e(__('dash_latest_invoices')); ?>
            </h3>
            <a href="<?php echo e(DASH_BASE_PATH); ?>/pages/billing/invoices.php" class="db-card-link">
                <?php echo e(__('dash_view_all')); ?> <i class="fas fa-arrow-right"></i>
            </a>
        </div>
        <div class="db-card-body">
            <div class="db-invoice-item">
                <div class="db-invoice-item-date">
                    <span class="db-invoice-item-month">03</span>
                    <span class="db-invoice-item-day">Tue</span>
                </div>
                <div class="db-invoice-item-info">
                    <span class="db-invoice-item-id">Invoice #307776</span>
                    <span class="db-invoice-item-desc">24/03/2026 &middot; New Service</span>
                </div>
                <div class="db-invoice-item-right">
                    <span class="db-invoice-item-amount">€3.42</span>
                    <span class="db-badge db-badge--paid"><?php echo e(__('status_paid')); ?></span>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Activity -->
    <div class="db-card">
        <div class="db-card-header">
            <h3 class="db-card-title">
                <i class="fas fa-clock-rotate-left db-card-title-icon"></i>
                <?php echo e(__('dash_recent_activity')); ?>
            </h3>
        </div>
        <div class="db-card-body">
            <div class="db-activity-item">
                <div class="db-activity-icon db-activity-icon--info">
                    <i class="fas fa-file-invoice"></i>
                </div>
                <div class="db-activity-info">
                    <span class="db-activity-text"><?php echo e(__('dash_activity_invoice_paid', ['id' => '307776'])); ?></span>
                    <span class="db-activity-meta">€3.42 EUR</span>
                </div>
                <span class="db-activity-time">24/03</span>
            </div>
            <div class="db-activity-item">
                <div class="db-activity-icon db-activity-icon--success">
                    <i class="fas fa-server"></i>
                </div>
                <div class="db-activity-info">
                    <span class="db-activity-text"><?php echo e(__('dash_activity_service_activated', ['service' => 'VPS YTA 1'])); ?></span>
                    <span class="db-activity-meta">107.161.168.236</span>
                </div>
                <span class="db-activity-time">24/03</span>
            </div>
            <div class="db-activity-item">
                <div class="db-activity-icon db-activity-icon--success">
                    <i class="fas fa-right-to-bracket"></i>
                </div>
                <div class="db-activity-info">
                    <span class="db-activity-text"><?php echo e(__('dash_activity_login')); ?></span>
                    <span class="db-activity-meta">IP: 197.54.214.50</span>
                </div>
                <span class="db-activity-time">24/03</span>
            </div>
        </div>
    </div>

</div>


<!-- Account Balance + Quick Links -->
<?php
$account_balance = 0;
?>
<div class="db-section-heading">
    <h2><?php echo e(__('dash_balance_resources')); ?></h2>
    <div class="db-section-heading-line"></div>
</div>

<div class="db-grid-3-1">

    <!-- Account Balance -->
    <div class="db-balance-card">
        <div class="db-balance-card-header">
            <div class="db-balance-card-icon"><i class="fas fa-wallet"></i></div>
            <div class="db-balance-card-info">
                <span class="db-balance-card-label"><?php echo e(__('balance_total')); ?></span>
                <span class="db-balance-card-amount"><?php echo format_money($account_balance); ?></span>
            </div>
            <a href="<?php echo e(DASH_BASE_PATH); ?>/pages/billing/add-funds.php" class="db-btn db-btn--primary db-btn--sm">
                <i class="fas fa-plus"></i> <?php echo e(__('balance_add_funds')); ?>
            </a>
        </div>
    </div>

    <!-- Quick Links -->
    <div class="db-grid-2" style="margin-bottom: 0;">
        <a href="<?php echo e(WIKI_URL); ?>/" target="_blank" class="db-link-card db-link-card--tutorials">
            <div class="db-link-card-icon"><i class="fas fa-graduation-cap"></i></div>
            <span class="db-link-card-title"><?php echo e(__('dash_tutorials')); ?></span>
            <span class="db-link-card-desc"><?php echo e(__('dash_tutorials_desc')); ?></span>
        </a>
        <a href="<?php echo e(DOCS_URL); ?>/" target="_blank" class="db-link-card db-link-card--api">
            <div class="db-link-card-icon"><i class="fas fa-code"></i></div>
            <span class="db-link-card-title"><?php echo e(__('dash_api_docs')); ?></span>
            <span class="db-link-card-desc"><?php echo e(__('dash_api_docs_desc')); ?></span>
        </a>
    </div>

</div>

<?php require_once __DIR__ . '/layouts/footer.php'; ?>
