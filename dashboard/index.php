<?php
/**
 * YottaSrc Dashboard — Home Page
 * ================================
 * Premium control center layout.
 */

// Page config (loaded after config.php for __() access)
$page_title = null;       // set after config loads
$breadcrumbs_data = null; // set after config loads

// Bootstrap
require_once __DIR__ . '/layouts/config.php';
require_once __DIR__ . '/layouts/project-helpers.php';   // cloud_sparkline()

$page_title = __('meta_title');
$breadcrumbs_data = [
    ['label' => __('nav_dashboard'), 'url' => null],
];

require_once __DIR__ . '/layouts/shell.php';

/* ══════════════════════════════════════════════════════════════════════
   ███  DASHBOARD HOME  ·  MOCK DATA BLOCK  (single source of truth)  ███
   ══════════════════════════════════════════════════════════════════════
   BACKEND TEAM — PLEASE READ:

   Every number / label / chart value shown on the home page lives
   in this single block. Edit a value here → the UI updates directly.
   No numbers are hardcoded anywhere in the HTML below.

   When wiring real data:
     • Replace each array with the equivalent DB query result.
     • Keep the array KEYS and SHAPE identical — the HTML loops over
       these keys, so a structure mismatch will break the layout.
     • Sparkline arrays:
          - hero_stats[...].spark  → exactly  7 numbers (7-day trend)
          - monthly_overview[...].spark → exactly 30 numbers (30-day)
          - bandwidth.spark_30d    → exactly 30 numbers (30-day)
     • Money values are stored as plain floats (e.g. 3.42).
       Use format_money() to render with €/thousands separator.
     • Dates are plain strings formatted by the backend
       (e.g. '24/04/2026') — no parsing done on the frontend.
   ══════════════════════════════════════════════════════════════════════ */


/* ──────────────────────────────────────────
   1. USER SESSION  (last-login meta line)
   ────────────────────────────────────────── */
$user_name       = 'Islam';
$last_login_date = '24/03/2026';
$last_login_time = '23:52 EET';
$last_login_ip   = '197.54.214.50';


/* ──────────────────────────────────────────
   2. HERO STATS  (4 cards at top of page)
   ──────────────────────────────────────────
   Each card shows: value + label + hint + mini sparkline.
   • value   → big number shown in card (int / string)
   • hint    → small colored text under the number
              (tint: 'positive' = green, 'neutral' = grey)
   • spark   → 7 numeric points (7-day trend background)
   ────────────────────────────────────────── */
$hero_stats = [
    'services' => [
        'value'      => 1,
        'hint'       => __('dash_hint_this_month', ['count' => 1]),
        'hint_tint'  => 'positive',   // 'positive' | 'neutral'
        'hint_icon'  => 'fa-arrow-up',// Font Awesome class, nullable
        'spark'      => [1, 1, 1, 1, 1, 1, 1],
    ],
    'domains' => [
        'value'      => 0,
        'hint'       => __('dash_hint_no_changes'),
        'hint_tint'  => 'neutral',
        'hint_icon'  => null,
        'spark'      => [0, 0, 0, 0, 0, 0, 0],
    ],
    'cloud' => [
        'value'      => 0,
        'hint'       => __('dash_hint_no_changes'),
        'hint_tint'  => 'neutral',
        'hint_icon'  => null,
        'spark'      => [0, 0, 0, 0, 0, 0, 0],
    ],
    'invoices' => [
        'value'      => 0,
        'hint'       => __('dash_hint_all_paid'),
        'hint_tint'  => 'positive',
        'hint_icon'  => 'fa-check',
        'spark'      => [0, 0, 0, 0, 0, 1, 0],
    ],
];


/* ──────────────────────────────────────────
   3. MONTHLY OVERVIEW  (3 sparkline cards)
   ──────────────────────────────────────────
   Every card on this page is billing- or server-related by design, so the
   client can see the health of their account at a glance.
   Each card shows a big number + 30-day sparkline.
   • value     → current number (integer/float/string)
   • unit      → unit string ('€', 'servers', …)
   • unit_pos  → 'prefix' puts the unit before the number
                 (default suffix). Use for currency (€).
   • hint      → small subline under the number
   • trend.dir → 'up' | 'down' | 'flat'
   • trend.pct → the string shown in the trend pill ('+12%')
   • spark     → 30 numeric points (30-day trend)
   ────────────────────────────────────────── */
$monthly_overview = [
    // Spending this month — running total charged from the wallet.
    'spending' => [
        'value'    => 42.17,
        'unit'     => '€',
        'unit_pos' => 'prefix',
        'hint'     => __('dash_last_paid', ['date' => '24/03']),
        'trend'    => ['dir' => 'up', 'pct' => '+8%'],
        'spark'    => [0, 1.4, 3.2, 4.1, 5.8, 7.2, 8.1, 9.6, 11.0, 12.4, 13.7, 15.0, 16.8, 18.2, 19.5, 21.0, 22.6, 24.3, 25.7, 27.1, 28.9, 30.5, 32.0, 33.5, 35.2, 36.7, 38.4, 40.0, 41.3, 42.17],
        'icon'     => 'fa-coins',
    ],
    // Active cloud servers across the account — growth over 30 days.
    'servers' => [
        'value'    => 7,
        'unit'     => __('dash_mo_servers_unit'),
        'hint'     => __('dash_mo_servers_hint', ['total' => 7]),
        'trend'    => ['dir' => 'up', 'pct' => '+2'],
        'spark'    => [5, 5, 5, 5, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7],
        'icon'     => 'fa-server',
    ],
    // Invoices paid year-to-date — invoices count on the wallet ledger.
    'invoices' => [
        'value'    => 12,
        'unit'     => __('dash_mo_invoices_unit'),
        'hint'     => __('dash_mo_invoices_hint'),
        'trend'    => ['dir' => 'up', 'pct' => '+1'],
        'spark'    => [1, 1, 2, 2, 3, 3, 3, 4, 4, 5, 5, 5, 6, 6, 6, 7, 7, 8, 8, 9, 9, 9, 10, 10, 11, 11, 11, 12, 12, 12],
        'icon'     => 'fa-file-invoice',
    ],
];


/* ──────────────────────────────────────────
   4. UPCOMING PAYMENT  (reminder banner)
   ──────────────────────────────────────────
   • days_left      → days until the next invoice is due
   • billing_cycle  → length of the current billing period
                      (the progress bar = % of cycle passed)
   ────────────────────────────────────────── */
$upcoming = [
    'service'       => 'VPS YTA 1',
    'amount'        => '€3.25',
    'due_date'      => '24/04/2026',
    'days_left'     => 15,
    'billing_cycle' => 30,
];
// auto-computed — do not edit manually
$upcoming['pct_passed'] = max(0, min(100, round(
    (($upcoming['billing_cycle'] - $upcoming['days_left']) / max(1, $upcoming['billing_cycle'])) * 100
)));


/* ──────────────────────────────────────────
   5. ACTIVE SERVICE  (rich row in Active Services card)
   ──────────────────────────────────────────
   Shown with flag, status dot, and a 4-metric usage strip.
   • metrics[].value  → 0–100 number. Drives bar width AND
                        color bucket: 0-49 green, 50-79 amber, 80+ red
   ────────────────────────────────────────── */
$active_service = [
    'id'            => 151926,
    'name'          => 'VPS YTA 1',
    'type'          => 'Linux VPS/VDS',
    'ip'            => '107.161.168.236',
    'location'      => 'United States',
    'location_flag' => 'us',             // ISO country code for flag-icons
    'due_date'      => '24/04/2026',
    'metrics'       => [
        ['label' => 'CPU',  'value' => 12, 'unit' => '%'],
        ['label' => 'RAM',  'value' => 34, 'unit' => '%'],
        ['label' => 'Disk', 'value' => 8,  'unit' => '%'],
        ['label' => 'BW',   'value' => 3,  'unit' => '%'],
    ],
];


/* ──────────────────────────────────────────
   6. SPENDING TREND CHART  (right column, 30-day area chart)
   ──────────────────────────────────────────
   Billing-focused: shows the running total spent this month
   alongside a 30-day area chart so the user sees exactly
   how their cost is pacing.
   • used        → running-total spent this month (float, €)
   • projected   → forecasted end-of-month spend (float, €)
   • spark_30d   → 30 cumulative daily spend points
   ────────────────────────────────────────── */
$spending_trend = [
    'used'      => 42.17,
    'projected' => 50.00,
    'spark_30d' => [0, 1.4, 3.2, 4.1, 5.8, 7.2, 8.1, 9.6, 11.0, 12.4, 13.7, 15.0, 16.8, 18.2, 19.5, 21.0, 22.6, 24.3, 25.7, 27.1, 28.9, 30.5, 32.0, 33.5, 35.2, 36.7, 38.4, 40.0, 41.3, 42.17],
];
$spending_trend['pct'] = round(($spending_trend['used'] / max(0.01, $spending_trend['projected'])) * 100, 1);


/* ──────────────────────────────────────────
   7. LATEST INVOICES  (list in bottom-left card)
   ──────────────────────────────────────────
   Each row:
   • id, type  → identification
   • day       → day-of-month (2 digits, used in date chip)
   • dow       → 3-letter day-of-week (used in date chip)
   • date      → full date string (shown as meta)
   • amount    → float, rendered with format_money()
   • status    → 'paid' | 'unpaid' | 'overdue' — drives badge color
   ────────────────────────────────────────── */
$latest_invoices = [
    [
        'id'     => '307776',
        'day'    => '03',
        'dow'    => 'Tue',
        'date'   => '24/03/2026',
        'type'   => __('invoices_type_new_service'),
        'amount' => 3.42,
        'status' => 'paid',
    ],
];


/* ──────────────────────────────────────────
   8. RECENT ACTIVITY  (timeline in bottom-right card)
   ──────────────────────────────────────────
   Each row:
   • icon  → Font Awesome class (e.g. 'fa-file-invoice')
   • tint  → 'info' (blue) | 'success' (green) | 'warning' | 'danger'
   • text  → main line (already translated / ready to print)
   • meta  → optional secondary info (IP, amount, …)
   • time  → shown on the right (short date/relative time)
   ────────────────────────────────────────── */
$recent_activity = [
    [
        'icon' => 'fa-file-invoice',
        'tint' => 'info',
        'text' => __('dash_activity_invoice_paid', ['id' => '307776']),
        'meta' => '€3.42 EUR',
        'time' => '24/03',
    ],
    [
        'icon' => 'fa-server',
        'tint' => 'success',
        'text' => __('dash_activity_service_activated', ['service' => 'VPS YTA 1']),
        'meta' => '107.161.168.236',
        'time' => '24/03',
    ],
    [
        'icon' => 'fa-right-to-bracket',
        'tint' => 'success',
        'text' => __('dash_activity_login'),
        'meta' => 'IP: 197.54.214.50',
        'time' => '24/03',
    ],
];


/* ──────────────────────────────────────────
   9. BALANCE  (wallet card at bottom)
   ──────────────────────────────────────────
   • total          → current account balance
   • spent_month    → total spent this calendar month
   • auto_recharge  → bool; 'Configure' vs 'Enable' CTA
   • last_deposit   → null or ['amount' => 20.00, 'date' => '…']
   ────────────────────────────────────────── */
$balance = [
    'total'           => 0.00,
    'spent_month'     => 3.42,
    'spent_month_txn' => 1,
    'auto_recharge'   => false,
    'last_deposit'    => null,
];


/* ════════════════════════════════════════════════════════════
   END OF MOCK DATA — HTML RENDERING BELOW
   ════════════════════════════════════════════════════════════ */

/**
 * Classify a usage metric (0–100) into a severity bucket used
 * for the color of the bar in the Active Service metrics strip.
 */
if (!function_exists('dash_metric_sev')) {
    function dash_metric_sev($v) {
        if ($v >= 80) return 'high';  // red
        if ($v >= 50) return 'med';   // amber
        return 'low';                 // green
    }
}

/**
 * Map hero-stats keys to their visual metadata.
 * Keep the key list in sync with $hero_stats above.
 */
$hero_stats_meta = [
    'services' => [
        'href'        => DASH_BASE_PATH . '/pages/services/index.php',
        'variant'     => 'primary',
        'icon'        => 'fa-server',
        'spark_color' => 'var(--brand-primary)',
        'label'       => __('dash_active_services'),
    ],
    'domains' => [
        'href'        => DASH_BASE_PATH . '/pages/domains/index.php',
        'variant'     => 'secondary',
        'icon'        => 'fa-globe',
        'spark_color' => 'var(--brand-secondary)',
        'label'       => __('dash_active_domains'),
    ],
    'cloud' => [
        'href'        => DASH_BASE_PATH . '/pages/cloud/index.php',
        'variant'     => 'accent',
        'icon'        => 'fa-cloud',
        'spark_color' => 'var(--brand-accent)',
        'label'       => __('dash_cloud_servers'),
    ],
    'invoices' => [
        'href'        => DASH_BASE_PATH . '/pages/billing/invoices.php',
        'variant'     => 'warning',
        'icon'        => 'fa-file-lines',
        'spark_color' => 'var(--brand-warning)',
        'label'       => __('dash_unpaid_invoices'),
    ],
];
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

    <!-- 4 stat cards  (values come from $hero_stats above) -->
    <div class="db-hero-stats" id="dashHomeStats"
         data-collapsible-stats data-stats-key="dash-home">
        <?php foreach ($hero_stats as $key => $stat):
            $meta = $hero_stats_meta[$key];
        ?>
        <a href="<?php echo e($meta['href']); ?>" class="db-hero-stat db-hero-stat--<?php echo e($meta['variant']); ?>">
            <div class="db-hero-stat-icon"><i class="fas <?php echo e($meta['icon']); ?>"></i></div>
            <div class="db-hero-stat-body">
                <span class="db-hero-stat-value"><?php echo e($stat['value']); ?></span>
                <span class="db-hero-stat-label"><?php echo e($meta['label']); ?></span>
                <span class="db-hero-stat-hint db-hero-stat-hint--<?php echo e($stat['hint_tint']); ?>">
                    <?php if (!empty($stat['hint_icon'])): ?><i class="fas <?php echo e($stat['hint_icon']); ?>"></i><?php endif; ?>
                    <?php echo e($stat['hint']); ?>
                </span>
            </div>
            <div class="db-hero-stat-spark" aria-hidden="true"><?php echo cloud_sparkline($stat['spark'], 120, 40, $meta['spark_color']); ?></div>
        </a>
        <?php endforeach; ?>
    </div>
    <div class="db-stats-rail">
        <button type="button" class="db-stats-toggle"
                data-stats-toggle="dash-home"
                aria-expanded="true"
                aria-controls="dashHomeStats"
                title="<?php echo e(__('common_hide_stats')); ?>">
            <span class="db-stats-toggle__label"><?php echo e(__('common_statistics')); ?></span>
            <i class="fas fa-chevron-up db-stats-toggle__icon"></i>
        </button>
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
    <a href="<?php echo e(DASH_BASE_PATH); ?>/pages/cloud/index.php?deploy=1" class="db-action-card db-action-card--deploy">
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
     MONTHLY OVERVIEW — 3 sparkline cards
     (values come from $monthly_overview)
     ═══════════════════════════════════════════ -->
<div class="db-monthly-grid">
    <?php
    // Per-card visual metadata — paired with $monthly_overview by key.
    $mo_items = [
        'spending' => ['class' => 'db-monthly-card--spending', 'title' => __('dash_mo_spending')],
        'servers'  => ['class' => 'db-monthly-card--servers',  'title' => __('dash_mo_servers')],
        'invoices' => ['class' => 'db-monthly-card--invoices', 'title' => __('dash_mo_invoices')],
    ];
    foreach ($mo_items as $key => $meta):
        $d = $monthly_overview[$key];
        $trend_dir = $d['trend']['dir'];
        $trend_icon = $trend_dir === 'up' ? 'fa-arrow-trend-up'
                    : ($trend_dir === 'down' ? 'fa-arrow-trend-down' : 'fa-minus');
    ?>
    <div class="db-monthly-card <?php echo e($meta['class']); ?>">
        <div class="db-monthly-card__top">
            <span class="db-monthly-card__label">
                <i class="fas <?php echo e($d['icon']); ?>"></i>
                <?php echo e($meta['title']); ?>
            </span>
            <span class="db-monthly-card__trend db-monthly-card__trend--<?php echo e($trend_dir); ?>">
                <i class="fas <?php echo e($trend_icon); ?>"></i>
                <?php echo e($d['trend']['pct']); ?>
            </span>
        </div>
        <div class="db-monthly-card__value">
            <?php if (($d['unit_pos'] ?? '') === 'prefix'): ?>
                <span class="db-monthly-card__unit"><?php echo e($d['unit']); ?></span><?php echo e(number_format($d['value'], 2)); ?>
            <?php else: ?>
                <?php echo e($d['value']); ?><span class="db-monthly-card__unit"><?php echo e($d['unit']); ?></span>
            <?php endif; ?>
        </div>
        <div class="db-monthly-card__hint"><?php echo e($d['hint']); ?></div>
        <div class="db-monthly-card__spark">
            <?php echo cloud_sparkline($d['spark'], 260, 52); ?>
        </div>
    </div>
    <?php endforeach; ?>
</div>


<!-- ═══════════════════════════════════════════
     UPCOMING — Smart UX Banner
     (values come from $upcoming above)
     ═══════════════════════════════════════════ -->
<div class="db-upcoming-banner">
    <div class="db-upcoming-icon"><i class="fas fa-calendar-check"></i></div>
    <div class="db-upcoming-info">
        <div class="db-upcoming-title"><?php echo e(__('dash_upcoming_payment')); ?> — <?php echo e($upcoming['service']); ?></div>
        <div class="db-upcoming-desc"><?php echo e(__('dash_upcoming_due', ['amount' => $upcoming['amount'], 'date' => $upcoming['due_date']])); ?></div>
    </div>
    <span class="db-upcoming-countdown">
        <i class="fas fa-clock"></i>
        <?php echo e(__('dash_upcoming_days', ['count' => $upcoming['days_left']])); ?>
    </span>
    <a href="<?php echo e(DASH_BASE_PATH); ?>/pages/billing/invoices.php" class="db-btn db-btn--secondary db-btn--sm db-upcoming-action">
        <?php echo e(__('common_view')); ?>
    </a>
    <!-- Progress bar: how much of the billing period has passed -->
    <div class="db-upcoming-progress" title="<?php echo e(__('dash_upcoming_progress', ['pct' => $upcoming['pct_passed']])); ?>">
        <div class="db-upcoming-progress-bar" style="width: <?php echo (int)$upcoming['pct_passed']; ?>%;"></div>
    </div>
</div>


<!-- ═══════════════════════════════════════════
     MAIN CONTENT GRID — Active Services + Bandwidth
     ═══════════════════════════════════════════ -->
<div class="db-grid-2">

    <!-- Active Services  (data from $active_service) -->
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
            <div class="db-service-item db-service-item--rich">
                <div class="db-service-item-top">
                    <div class="db-service-item-icon-wrap">
                        <div class="db-service-item-icon">
                            <i class="fab fa-linux"></i>
                        </div>
                        <span class="db-service-item-status-dot" aria-hidden="true"></span>
                    </div>
                    <div class="db-service-item-info">
                        <div class="db-service-item-head">
                            <span class="db-service-item-name"><?php echo e($active_service['name']); ?></span>
                            <span class="db-service-item-loc">
                                <span class="fi fi-<?php echo e($active_service['location_flag']); ?>"></span>
                                <?php echo e($active_service['location']); ?>
                            </span>
                        </div>
                        <span class="db-service-item-meta">
                            #<?php echo e($active_service['id']); ?>
                            <span class="db-service-item-meta-sep">·</span>
                            <?php echo e($active_service['ip']); ?>
                            <button class="db-copy-btn" title="<?php echo e(__('common_copy')); ?>" aria-label="<?php echo e(__('common_copy')); ?>" onclick="DashCopy && DashCopy(this,'<?php echo e($active_service['ip']); ?>')"><i class="fas fa-copy"></i></button>
                            <span class="db-service-item-meta-sep">·</span>
                            <?php echo e($active_service['type']); ?>
                        </span>
                    </div>
                    <div class="db-service-item-right">
                        <span class="db-badge db-badge--active"><?php echo e(__('status_active')); ?></span>
                        <div class="db-service-item-due">
                            <span class="db-service-item-due-label"><?php echo e(__('dash_due')); ?></span>
                            <span><?php echo e($active_service['due_date']); ?></span>
                        </div>
                        <a href="<?php echo e(DASH_BASE_PATH); ?>/pages/services/service-details.php?id=<?php echo e($active_service['id']); ?>" class="db-btn db-btn--ghost db-btn--sm"><?php echo e(__('common_manage')); ?></a>
                    </div>
                </div>
                <!-- 4-metric usage strip — bar width = value% -->
                <div class="db-service-item-metrics">
                    <?php foreach ($active_service['metrics'] as $m):
                        $sev = dash_metric_sev($m['value']);
                    ?>
                    <div class="db-svc-metric db-svc-metric--<?php echo e($sev); ?>">
                        <div class="db-svc-metric__top">
                            <span class="db-svc-metric__label"><?php echo e($m['label']); ?></span>
                            <span class="db-svc-metric__val"><?php echo (int)$m['value']; ?><?php echo e($m['unit']); ?></span>
                        </div>
                        <div class="db-svc-metric__bar">
                            <span class="db-svc-metric__bar-fill" style="width: <?php echo (int)$m['value']; ?>%;"></span>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Monthly Spending Trend — area chart (data from $spending_trend) -->
    <div class="db-card">
        <div class="db-card-header">
            <h3 class="db-card-title">
                <i class="fas fa-chart-area db-card-title-icon"></i>
                <?php echo e(__('dash_spend_title')); ?>
            </h3>
            <a href="<?php echo e(DASH_BASE_PATH); ?>/pages/billing/invoices.php" class="db-card-link">
                <?php echo e(__('common_details')); ?> <i class="fas fa-arrow-right"></i>
            </a>
        </div>
        <div class="db-card-body db-bw-chart">
            <div class="db-bw-chart__head">
                <div>
                    <div class="db-bw-chart__value">
                        <span class="db-bw-chart__value-unit db-bw-chart__value-unit--prefix">€</span><?php echo e(number_format($spending_trend['used'], 2)); ?>
                    </div>
                    <span class="db-bw-chart__value-sub">
                        <?php echo e(__('dash_spend_of_projected', ['total' => '€' . number_format($spending_trend['projected'], 2), 'pct' => $spending_trend['pct']])); ?>
                    </span>
                </div>
                <span class="db-bw-chart__trend">
                    <i class="fas fa-arrow-trend-up"></i>
                    <?php echo e(__('dash_spend_last_30')); ?>
                </span>
            </div>
            <div class="db-bw-chart__body">
                <?php echo cloud_sparkline($spending_trend['spark_30d'], 420, 140, 'var(--brand-accent)'); ?>
            </div>
            <div class="db-bw-chart__footer">
                <span><?php echo e(__('dash_bw_30_days_ago')); ?></span>
                <span><?php echo e(__('dash_bw_today')); ?></span>
            </div>
        </div>
    </div>

</div>


<!-- ═══════════════════════════════════════════
     Latest Invoices + Recent Activity
     ═══════════════════════════════════════════ -->
<div class="db-grid-2">

    <!-- Latest Invoices  (data from $latest_invoices) -->
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
            <?php foreach ($latest_invoices as $inv): ?>
            <a href="<?php echo e(DASH_BASE_PATH); ?>/pages/billing/invoice-details.php?id=<?php echo e($inv['id']); ?>" class="db-invoice-item">
                <div class="db-invoice-item-date">
                    <span class="db-invoice-item-month"><?php echo e($inv['day']); ?></span>
                    <span class="db-invoice-item-day"><?php echo e($inv['dow']); ?></span>
                </div>
                <div class="db-invoice-item-info">
                    <span class="db-invoice-item-id">Invoice #<?php echo e($inv['id']); ?></span>
                    <span class="db-invoice-item-desc"><?php echo e($inv['date']); ?> &middot; <?php echo e($inv['type']); ?></span>
                </div>
                <div class="db-invoice-item-right">
                    <span class="db-invoice-item-amount"><?php echo format_money($inv['amount']); ?></span>
                    <span class="db-badge db-badge--<?php echo e($inv['status']); ?>"><?php echo e(__('status_' . $inv['status'])); ?></span>
                </div>
            </a>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- Recent Activity  (data from $recent_activity) -->
    <div class="db-card">
        <div class="db-card-header">
            <h3 class="db-card-title">
                <i class="fas fa-clock-rotate-left db-card-title-icon"></i>
                <?php echo e(__('dash_recent_activity')); ?>
            </h3>
        </div>
        <div class="db-card-body">
            <?php foreach ($recent_activity as $a): ?>
            <div class="db-activity-item">
                <div class="db-activity-icon db-activity-icon--<?php echo e($a['tint']); ?>">
                    <i class="fas <?php echo e($a['icon']); ?>"></i>
                </div>
                <div class="db-activity-info">
                    <span class="db-activity-text"><?php echo e($a['text']); ?></span>
                    <?php if (!empty($a['meta'])): ?>
                    <span class="db-activity-meta"><?php echo e($a['meta']); ?></span>
                    <?php endif; ?>
                </div>
                <span class="db-activity-time"><?php echo e($a['time']); ?></span>
            </div>
            <?php endforeach; ?>
        </div>
    </div>

</div>


<!-- ═══════════════════════════════════════════
     Account Balance + Quick Links
     (data from $balance)
     ═══════════════════════════════════════════ -->
<div class="db-section-heading">
    <h2><?php echo e(__('dash_balance_resources')); ?></h2>
    <div class="db-section-heading-line"></div>
</div>

<div class="db-grid-3-1">

    <!-- Account Balance (enriched) -->
    <div class="db-balance-card">
        <div class="db-balance-card-header">
            <div class="db-balance-card-icon"><i class="fas fa-wallet"></i></div>
            <div class="db-balance-card-info">
                <span class="db-balance-card-label"><?php echo e(__('balance_total')); ?></span>
                <span class="db-balance-card-amount"><?php echo format_money($balance['total']); ?></span>
                <?php if ($balance['total'] <= 0): ?>
                <span class="db-balance-card-flag db-balance-card-flag--empty">
                    <i class="fas fa-circle-exclamation"></i> <?php echo e(__('balance_empty')); ?>
                </span>
                <?php endif; ?>
            </div>
            <a href="<?php echo e(DASH_BASE_PATH); ?>/pages/billing/add-funds.php" class="db-btn db-btn--primary db-btn--sm">
                <i class="fas fa-plus"></i> <?php echo e(__('balance_add_funds')); ?>
            </a>
        </div>

        <!-- Micro-stats row: spending · auto-recharge · last deposit -->
        <div class="db-balance-card-stats">
            <a href="<?php echo e(DASH_BASE_PATH); ?>/pages/billing/transactions.php" class="db-balance-stat">
                <span class="db-balance-stat__label">
                    <i class="fas fa-arrow-trend-down"></i>
                    <?php echo e(__('balance_spent_month')); ?>
                </span>
                <span class="db-balance-stat__value"><?php echo format_money($balance['spent_month']); ?></span>
                <span class="db-balance-stat__meta"><?php echo e(__('balance_spent_txn_count', ['count' => $balance['spent_month_txn']])); ?></span>
            </a>

            <div class="db-balance-stat">
                <span class="db-balance-stat__label">
                    <i class="fas fa-rotate"></i>
                    <?php echo e(__('balance_auto_recharge')); ?>
                </span>
                <span class="db-balance-stat__value db-balance-stat__value--muted">
                    <?php echo e($balance['auto_recharge'] ? __('common_enabled') : __('common_disabled')); ?>
                </span>
                <a href="<?php echo e(DASH_BASE_PATH); ?>/pages/billing/payment-methods.php" class="db-balance-stat__meta db-balance-stat__meta--link">
                    <?php echo e($balance['auto_recharge'] ? __('common_configure') : __('balance_enable')); ?> →
                </a>
            </div>

            <div class="db-balance-stat">
                <span class="db-balance-stat__label">
                    <i class="fas fa-clock"></i>
                    <?php echo e(__('balance_last_deposit')); ?>
                </span>
                <?php if (!empty($balance['last_deposit'])): ?>
                <span class="db-balance-stat__value"><?php echo format_money($balance['last_deposit']['amount']); ?></span>
                <span class="db-balance-stat__meta"><?php echo e($balance['last_deposit']['date']); ?></span>
                <?php else: ?>
                <span class="db-balance-stat__value db-balance-stat__value--muted">—</span>
                <span class="db-balance-stat__meta"><?php echo e(__('balance_no_deposit')); ?></span>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <!-- Quick Links -->
    <div class="db-grid-2 db-grid-2--flush">
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
