<?php
/**
 * YottaSrc Dashboard — Order New Service
 * ========================================
 * Professional product catalog grouped by category.
 */

$page_title = null;
$breadcrumbs_data = null;

require_once __DIR__ . '/../../layouts/config.php';

$page_title = __('order_title') . ' — ' . SITE_NAME;
$breadcrumbs_data = [
    ['label' => __('nav_dashboard'), 'url' => DASH_BASE_PATH . '/'],
    ['label' => __('nav_my_services'), 'url' => DASH_BASE_PATH . '/pages/services/index.php'],
    ['label' => __('nav_order_new'), 'url' => null],
];

require_once __DIR__ . '/../../layouts/shell.php';

/* ══════════════════════════════════════════════════════════════════════
   ███  ORDER NEW  ·  MOCK DATA BLOCK  (single source of truth)  ███
   ══════════════════════════════════════════════════════════════════════
   BACKEND TEAM — PLEASE READ:

   Product catalog — grouped into categories with products under each.
   Used to render the "what would you like to order?" page.

   Wiring real data:
     • $catalog comes from your product management system.
     • 'from' may be null (e.g. domains — price depends on TLD).
   ══════════════════════════════════════════════════════════════════════ */

/* ──────────────────────────────────────────
   PAGE STATE  ('active' | 'loading' | 'error')
   ────────────────────────────────────────── */
$page_state = $_GET['state'] ?? 'active';

/* ──────────────────────────────────────────
   PRODUCT CATALOG
   ──────────────────────────────────────────
   Category shape:
   • id       → slug (stable)
   • name     → heading
   • desc     → subheading
   • icon     → Font Awesome class for the category tile
   • color    → 'primary' | 'success' | 'warning' | 'accent' | 'info'
   • products → array of:
        - name  (plain string or translation)
        - desc  (plain string or translation)
        - icon  (Font Awesome class)
        - from  (starting price float, or null for "pricing varies")
        - url   (product-detail link; '#' for placeholders)
   ────────────────────────────────────────── */
$catalog = [
    [
        'id'    => 'hosting',
        'name'  => __('order_cat_hosting'),
        'desc'  => __('order_cat_hosting_desc'),
        'icon'  => 'fas fa-server',
        'color' => 'primary',
        'products' => [
            ['name' => 'cPanel Hosting',         'desc' => __('order_prod_cpanel_desc'),     'icon' => 'fas fa-layer-group',    'from' => 4.99,  'url' => '#'],
            ['name' => 'WordPress Hosting',       'desc' => __('order_prod_wp_desc'),         'icon' => 'fab fa-wordpress',      'from' => 5.99,  'url' => '#'],
            ['name' => 'Telegram Bot Hosting',    'desc' => __('order_prod_telegram_desc'),   'icon' => 'fab fa-telegram',       'from' => 3.99,  'url' => '#'],
            ['name' => 'DMCA Ignored cPanel',     'desc' => __('order_prod_dmca_cpanel_desc'),'icon' => 'fas fa-shield-halved',  'from' => 9.99,  'url' => '#'],
        ],
    ],
    [
        'id'    => 'vps',
        'name'  => __('order_cat_vps'),
        'desc'  => __('order_cat_vps_desc'),
        'icon'  => 'fas fa-microchip',
        'color' => 'success',
        'products' => [
            ['name' => 'Linux VPS/VDS',           'desc' => __('order_prod_linux_vps_desc'),  'icon' => 'fab fa-linux',          'from' => 3.25,  'url' => '#'],
            ['name' => 'Windows VPS/VDS',          'desc' => __('order_prod_win_vps_desc'),    'icon' => 'fab fa-windows',        'from' => 8.99,  'url' => '#'],
            ['name' => 'DMCA Ignored VPS',         'desc' => __('order_prod_dmca_vps_desc'),   'icon' => 'fas fa-shield-halved',  'from' => 12.99, 'url' => '#'],
        ],
    ],
    [
        'id'    => 'reseller',
        'name'  => __('order_cat_reseller'),
        'desc'  => __('order_cat_reseller_desc'),
        'icon'  => 'fas fa-users',
        'color' => 'warning',
        'products' => [
            ['name' => 'cPanel Reseller',          'desc' => __('order_prod_reseller_desc'),       'icon' => 'fas fa-layer-group',   'from' => 19.99, 'url' => '#'],
            ['name' => 'Master cPanel Reseller',   'desc' => __('order_prod_master_reseller_desc'),'icon' => 'fas fa-crown',         'from' => 39.99, 'url' => '#'],
            ['name' => 'Alpha cPanel Reseller',    'desc' => __('order_prod_alpha_reseller_desc'), 'icon' => 'fas fa-star',          'from' => 59.99, 'url' => '#'],
            ['name' => 'Microsoft Keys Reseller',  'desc' => __('order_prod_ms_reseller_desc'),    'icon' => 'fab fa-microsoft',     'from' => 29.99, 'url' => '#'],
        ],
    ],
    [
        'id'    => 'domains',
        'name'  => __('order_cat_domains'),
        'desc'  => __('order_cat_domains_desc'),
        'icon'  => 'fas fa-globe',
        'color' => 'accent',
        'products' => [
            ['name' => __('order_prod_register_domain'),  'desc' => __('order_prod_register_domain_desc'),  'icon' => 'fas fa-plus-circle',   'from' => null, 'url' => '#'],
            ['name' => __('order_prod_transfer_domain'),  'desc' => __('order_prod_transfer_domain_desc'),  'icon' => 'fas fa-right-left',    'from' => null, 'url' => '#'],
        ],
    ],
    [
        'id'    => 'mskeys',
        'name'  => __('order_cat_mskeys'),
        'desc'  => __('order_cat_mskeys_desc'),
        'icon'  => 'fab fa-microsoft',
        'color' => 'info',
        'products' => [
            ['name' => 'Windows Keys',             'desc' => __('order_prod_win_keys_desc'),    'icon' => 'fab fa-windows',        'from' => 12.00, 'url' => '#'],
            ['name' => 'Office Keys',              'desc' => __('order_prod_office_keys_desc'), 'icon' => 'fas fa-file-word',      'from' => 15.00, 'url' => '#'],
            ['name' => 'Visual Studio Keys',       'desc' => __('order_prod_vs_keys_desc'),     'icon' => 'fas fa-code',           'from' => 25.00, 'url' => '#'],
            ['name' => 'Project Keys',             'desc' => __('order_prod_project_keys_desc'),'icon' => 'fas fa-diagram-project','from' => 20.00, 'url' => '#'],
        ],
    ],
];

/* ══════════════  END OF MOCK DATA  ══════════════ */
?>

<?php
$ph_title = __('order_title');
$ph_desc = __('order_desc');
$ph_actions = '';
include __DIR__ . '/../../components/page-header.php';
?>

<?php if ($page_state === 'error'): ?>
    <div class="db-card"><?php $error_retry = true; include __DIR__ . '/../../components/error-state.php'; ?></div>

<?php elseif ($page_state === 'loading'): ?>
    <div style="display: flex; flex-direction: column; gap: 24px;">
        <?php for ($i = 0; $i < 3; $i++): ?>
        <div class="db-card">
            <div class="db-card-body db-card-body--lg">
                <div style="display:flex; align-items:center; gap:16px; margin-bottom:20px;">
                    <div class="db-skeleton" style="width:48px; height:48px; border-radius:var(--radius-md);"></div>
                    <div><div class="db-skeleton db-skeleton--heading" style="width:160px; margin-bottom:6px;"></div><div class="db-skeleton db-skeleton--text" style="width:240px;"></div></div>
                </div>
                <div class="db-grid-2" style="gap:12px;">
                    <?php for ($j = 0; $j < 4; $j++): ?>
                    <div class="db-skeleton" style="height:80px; border-radius:var(--radius-md);"></div>
                    <?php endfor; ?>
                </div>
            </div>
        </div>
        <?php endfor; ?>
    </div>

<?php else: ?>

    <?php foreach ($catalog as $cat): ?>
    <div class="db-order-category db-order-category--<?php echo e($cat['color']); ?>">
        <!-- Category Header -->
        <div class="db-order-category__header">
            <div class="db-order-category__icon db-order-category__icon--<?php echo e($cat['color']); ?>">
                <i class="<?php echo e($cat['icon']); ?>"></i>
            </div>
            <div>
                <h2 class="db-order-category__title"><?php echo e($cat['name']); ?></h2>
                <p class="db-order-category__desc"><?php echo e($cat['desc']); ?></p>
            </div>
        </div>

        <!-- Product Cards -->
        <div class="db-order-product-grid">
            <?php foreach ($cat['products'] as $p): ?>
            <a href="<?php echo e($p['url']); ?>" class="db-order-prod-card db-order-prod-card--<?php echo e($cat['color']); ?>" onclick="event.preventDefault(); DashToast.show('info', '', '<?php echo e(__('order_redirect_msg')); ?>');">
                <div class="db-order-prod-card__icon"><i class="<?php echo e($p['icon']); ?>"></i></div>
                <div class="db-order-prod-card__body">
                    <div class="db-order-prod-card__name"><?php echo e($p['name']); ?></div>
                    <div class="db-order-prod-card__desc"><?php echo e($p['desc']); ?></div>
                </div>
                <?php if ($p['from'] !== null): ?>
                <div class="db-order-prod-card__price">
                    <span class="db-order-prod-card__price-label"><?php echo e(__('order_from')); ?></span>
                    <span class="db-order-prod-card__price-value"><?php echo format_money($p['from']); ?></span>
                    <span class="db-order-prod-card__price-period">/<?php echo e(__('order_mo')); ?></span>
                </div>
                <?php endif; ?>
                <div class="db-order-prod-card__arrow"><i class="fas fa-chevron-right"></i></div>
            </a>
            <?php endforeach; ?>
        </div>
    </div>
    <?php endforeach; ?>

<?php endif; ?>

<div class="db-toast-container" id="toastContainer"></div>
<?php require_once __DIR__ . '/../../layouts/footer.php'; ?>
