<?php
/**
 * YottaSrc Dashboard — Create New Server Wizard
 * ================================================
 * 5-step wizard:
 *   1. Resources  — OS (Linux/Windows) + Resource type (Shared/Dedicated)
 *   2. Location   — Region tabs → country flag cards
 *   3. Package    — Grid of available packages with specs + pricing
 *   4. Image      — OS image grid (depends on step 1 OS choice)
 *   5. Confirm    — Modal confirm + create
 *
 * Sticky Order Summary bar always visible at top showing:
 *   Resources | Location | Package | Image | Total/Mo | Total/h
 *
 * Sub-states (via ?state=):
 *   active (default), verification_gate, loading, error
 */

require_once __DIR__ . '/../../../layouts/config.php';
require_once __DIR__ . '/../../../layouts/project-helpers.php';

$project_id         = $_GET['id'] ?? '';
$current_project    = cloud_require_project($project_id);
$project_nav_active = 'create-server';

$page_title = __('create_server_title') . ' — #' . $current_project['id'] . ' — ' . SITE_NAME;
$breadcrumbs_data = [
    ['label' => __('nav_dashboard'),       'url' => DASH_BASE_PATH . '/'],
    ['label' => __('cloud_title'),          'url' => DASH_BASE_PATH . '/pages/cloud/index.php'],
    ['label' => '#' . $current_project['id'] . ' - ' . $current_project['name'], 'url' => cloud_project_url('servers', $current_project['id'])],
    ['label' => __('create_server_title'), 'url' => null],
];

require_once __DIR__ . '/../../../layouts/project-shell.php';

/* ══════════════════════════════════════════════════════════════════════
   ███  CREATE SERVER  ·  MOCK DATA BLOCK  (single source of truth)  ███
   ══════════════════════════════════════════════════════════════════════
   BACKEND TEAM — PLEASE READ:

   This is the multi-step create-server wizard. Edit the arrays below
   to change available locations, packages, or OS images.

   Wiring real data:
     • $regions    → pull from your provisioning platform (location catalog)
     • $packages   → pull from the plan catalog (filter by arch if needed)
     • $linux_images / $windows_images → pull from your image store
     • $is_verified must come from the logged-in user's KYC status.
                    The wizard is blocked behind the verification gate
                    when false (demo: ?state=verification_gate forces it).
   ══════════════════════════════════════════════════════════════════════ */

/* ──────────────────────────────────────────
   PAGE STATE  +  VERIFICATION GATE
   ──────────────────────────────────────────
   'active' | 'loading' | 'error'  (or 'verification_gate' auto)
   Demo default $is_verified = true so the wizard renders.
   ────────────────────────────────────────── */
$is_verified = $is_verified ?? true;
$page_state  = $_GET['state'] ?? 'active';
if (!$is_verified) {
    $page_state = 'verification_gate';
}

/* ──────────────────────────────────────────
   REGIONS  (grouped by continent)
   ──────────────────────────────────────────
   Each region:
   • label      → group heading
   • countries  → array of ['code' => 'us', 'name' => '…']
                  'code' = ISO-2 country code (flag-icons lib)
   ────────────────────────────────────────── */
$regions = [
    'europe' => [
        'label' => __('create_region_europe'),
        'countries' => [
            ['code' => 'nl', 'name' => 'Netherlands'],
            ['code' => 'gb', 'name' => 'UK'],
            ['code' => 'tr', 'name' => 'Turkey'],
            ['code' => 'fr', 'name' => 'France'],
            ['code' => 'de', 'name' => 'Germany'],
            ['code' => 'fi', 'name' => 'Finland'],
        ],
    ],
    'north_america' => [
        'label' => __('create_region_north_america'),
        'countries' => [
            ['code' => 'us', 'name' => 'United States'],
            ['code' => 'ca', 'name' => 'Canada'],
        ],
    ],
];

/* ──────────────────────────────────────────
   PACKAGES  (plan catalog — picker cards)
   ──────────────────────────────────────────
   Each plan:
   • id          → SKU slug (sent to backend on submit)
   • arch        → 'x86' | 'Arm64'
   • cores       → int, vCPU count
   • ram         → memory string ('8GB')
   • storage     → disk string ('80GB NVMe')
   • bandwidth   → monthly quota ('30TB')
   • speed       → network speed ('10 Gbit/s')
   • ipv4/ipv6   → bool, IP inclusion
   • price_m     → monthly price (float)
   • price_h     → hourly price  (float)
   • featured    → bool, highlights the card with a "Popular" ribbon
   ────────────────────────────────────────── */
$packages = [
    ['id'=>'CLY1', 'arch'=>'x86', 'cores'=>1, 'ram'=>'2GB', 'storage'=>'25GB NVMe', 'bandwidth'=>'25TB', 'speed'=>'1 Gbit/s', 'ipv4'=>true, 'ipv6'=>true, 'price_m'=>3.25, 'price_h'=>0.0048, 'featured'=>false],
    ['id'=>'CLH1', 'arch'=>'Arm64', 'cores'=>2, 'ram'=>'4GB', 'storage'=>'40GB NVMe', 'bandwidth'=>'30TB', 'speed'=>'10 Gbit/s', 'ipv4'=>true, 'ipv6'=>true, 'price_m'=>4.99, 'price_h'=>0.0097, 'featured'=>false],
    ['id'=>'CLH5', 'arch'=>'x86', 'cores'=>2, 'ram'=>'4GB', 'storage'=>'40GB NVMe', 'bandwidth'=>'30TB', 'speed'=>'10 Gbit/s', 'ipv4'=>true, 'ipv6'=>true, 'price_m'=>4.99, 'price_h'=>0.0097, 'featured'=>false],
    ['id'=>'CLY2', 'arch'=>'x86', 'cores'=>2, 'ram'=>'4GB', 'storage'=>'50GB NVMe', 'bandwidth'=>'25TB', 'speed'=>'10 Gbit/s', 'ipv4'=>true, 'ipv6'=>true, 'price_m'=>5.15, 'price_h'=>0.0074, 'featured'=>false],
    ['id'=>'CLH2', 'arch'=>'Arm64', 'cores'=>4, 'ram'=>'8GB', 'storage'=>'80GB NVMe', 'bandwidth'=>'30TB', 'speed'=>'10 Gbit/s', 'ipv4'=>true, 'ipv6'=>true, 'price_m'=>8.49, 'price_h'=>0.0146, 'featured'=>true],
    ['id'=>'CLH7', 'arch'=>'x86', 'cores'=>4, 'ram'=>'8GB', 'storage'=>'80GB NVMe', 'bandwidth'=>'30TB', 'speed'=>'10 Gbit/s', 'ipv4'=>true, 'ipv6'=>true, 'price_m'=>8.99, 'price_h'=>0.0153, 'featured'=>false],
    ['id'=>'CLY3', 'arch'=>'x86', 'cores'=>4, 'ram'=>'8GB', 'storage'=>'100GB NVMe', 'bandwidth'=>'30TB', 'speed'=>'10 Gbit/s', 'ipv4'=>true, 'ipv6'=>true, 'price_m'=>8.99, 'price_h'=>0.0156, 'featured'=>false],
    ['id'=>'CLY4', 'arch'=>'x86', 'cores'=>8, 'ram'=>'16GB', 'storage'=>'150GB NVMe', 'bandwidth'=>'30TB', 'speed'=>'10 Gbit/s', 'ipv4'=>true, 'ipv6'=>true, 'price_m'=>15.99, 'price_h'=>0.0236, 'featured'=>false],
    ['id'=>'CLH3', 'arch'=>'x86', 'cores'=>8, 'ram'=>'16GB', 'storage'=>'160GB NVMe', 'bandwidth'=>'30TB', 'speed'=>'10 Gbit/s', 'ipv4'=>true, 'ipv6'=>true, 'price_m'=>16.49, 'price_h'=>0.0257, 'featured'=>false],
    ['id'=>'CLH10','arch'=>'x86', 'cores'=>4, 'ram'=>'8GB', 'storage'=>'160GB NVMe', 'bandwidth'=>'30TB', 'speed'=>'10 Gbit/s', 'ipv4'=>true, 'ipv6'=>true, 'price_m'=>17.69, 'price_h'=>0.0273, 'featured'=>false],
    ['id'=>'CLH9', 'arch'=>'x86', 'cores'=>8, 'ram'=>'16GB', 'storage'=>'160GB NVMe', 'bandwidth'=>'30TB', 'speed'=>'10 Gbit/s', 'ipv4'=>true, 'ipv6'=>true, 'price_m'=>19.99, 'price_h'=>0.0285, 'featured'=>false],
    ['id'=>'CLY5', 'arch'=>'x86', 'cores'=>16,'ram'=>'32GB','storage'=>'200GB NVMe', 'bandwidth'=>'35TB', 'speed'=>'10 Gbit/s', 'ipv4'=>true, 'ipv6'=>true, 'price_m'=>29.99, 'price_h'=>0.0437, 'featured'=>false],
    ['id'=>'CLH4', 'arch'=>'Arm64', 'cores'=>16,'ram'=>'32GB','storage'=>'320GB NVMe','bandwidth'=>'30TB', 'speed'=>'10 Gbit/s', 'ipv4'=>true, 'ipv6'=>true, 'price_m'=>31.99, 'price_h'=>0.0472, 'featured'=>false],
    ['id'=>'CLH12','arch'=>'x86', 'cores'=>4, 'ram'=>'16GB','storage'=>'320GB NVMe', 'bandwidth'=>'30TB', 'speed'=>'10 Gbit/s', 'ipv4'=>true, 'ipv6'=>true, 'price_m'=>32.99, 'price_h'=>0.0486, 'featured'=>false],
    ['id'=>'CLH11','arch'=>'x86', 'cores'=>16,'ram'=>'32GB','storage'=>'320GB NVMe', 'bandwidth'=>'30TB', 'speed'=>'10 Gbit/s', 'ipv4'=>true, 'ipv6'=>true, 'price_m'=>36.00, 'price_h'=>0.0561, 'featured'=>false],
    ['id'=>'CLH13','arch'=>'x86', 'cores'=>16,'ram'=>'32GB','storage'=>'640GB NVMe', 'bandwidth'=>'30TB', 'speed'=>'10 Gbit/s', 'ipv4'=>true, 'ipv6'=>true, 'price_m'=>71.49, 'price_h'=>0.1021, 'featured'=>false],
];

/* ──────────────────────────────────────────
   LINUX IMAGES  (slug → [display name, accent color])
   ──────────────────────────────────────────
   • Icon is always fab fa-linux; color is the distro family brand.
   • Extend with new distros here — they'll render automatically.
   ────────────────────────────────────────── */
$linux_images = [
    'ubuntu-24-04' => ['name' => 'Ubuntu 24.04',   'color' => '#e95420'],
    'ubuntu-22-04' => ['name' => 'Ubuntu 22.04',   'color' => '#e95420'],
    'ubuntu-20-04' => ['name' => 'Ubuntu 20.04',   'color' => '#e95420'],
    'ubuntu-18-04' => ['name' => 'Ubuntu 18.04',   'color' => '#e95420'],
    'rocky-10'     => ['name' => 'Rocky Linux 10', 'color' => '#10b981'],
    'rocky-9'      => ['name' => 'Rocky Linux 9',  'color' => '#10b981'],
    'rocky-8'      => ['name' => 'Rocky Linux 8',  'color' => '#10b981'],
    'debian-12'    => ['name' => 'Debian 12',      'color' => '#a81d33'],
    'debian-11'    => ['name' => 'Debian 11',      'color' => '#a81d33'],
    'debian-10'    => ['name' => 'Debian 10',      'color' => '#a81d33'],
    'debian-9'     => ['name' => 'Debian 9',       'color' => '#a81d33'],
    'debian-8'     => ['name' => 'Debian 8',       'color' => '#a81d33'],
    'centos-stream-9' => ['name' => 'CentOS Stream 9', 'color' => '#932279'],
    'centos-stream-8' => ['name' => 'CentOS Stream 8', 'color' => '#932279'],
    'centos-7'     => ['name' => 'CentOS 7',       'color' => '#932279'],
    'alma-10'      => ['name' => 'AlmaLinux 10',   'color' => '#0091ea'],
    'alma-9'       => ['name' => 'AlmaLinux 9',    'color' => '#0091ea'],
    'alma-8'       => ['name' => 'AlmaLinux 8',    'color' => '#0091ea'],
];

/* ──────────────────────────────────────────
   WINDOWS IMAGES  (slug → [name, release year])
   ──────────────────────────────────────────
   • Icon is fab fa-windows (color = --os-windows token).
   • 'year' is shown as a small release-year badge.
   ────────────────────────────────────────── */
$windows_images = [
    'win-server-2025' => ['name' => 'Windows Server 2025', 'year' => 2025],
    'win-server-2022' => ['name' => 'Windows Server 2022', 'year' => 2022],
    'win-server-2019' => ['name' => 'Windows Server 2019', 'year' => 2019],
    'win-server-2016' => ['name' => 'Windows Server 2016', 'year' => 2016],
    'win-server-2012' => ['name' => 'Windows Server 2012', 'year' => 2012],
    'win-11'          => ['name' => 'Windows 11',          'year' => 2021],
    'win-10'          => ['name' => 'Windows 10',          'year' => 2015],
    'win-7'           => ['name' => 'Windows 7',           'year' => 2009],
];

/* ══════════════  END OF MOCK DATA  ══════════════ */
?>

<div class="db-cs">

<?php if ($page_state === 'verification_gate'): ?>

    <!-- Verification gate error state -->
    <div class="db-create-gate">
        <div class="db-create-gate__icon"><i class="fas fa-circle-exclamation"></i></div>
        <h2 class="db-create-gate__title"><?php echo e(__('create_gate_title')); ?></h2>
        <p class="db-create-gate__desc"><?php echo e(__('create_gate_desc')); ?></p>
        <div class="db-create-gate__action">
            <a href="<?php echo DASH_BASE_PATH; ?>/pages/verification/index.php" class="db-btn db-btn--primary">
                <i class="fas fa-shield-halved"></i> <?php echo e(__('create_gate_cta')); ?>
            </a>
        </div>
    </div>

<?php elseif ($page_state === 'error'): ?>

    <div class="db-card"><?php $error_retry = true; include __DIR__ . '/../../../components/error-state.php'; ?></div>

<?php elseif ($page_state === 'loading'): ?>

    <div class="db-card">
        <div class="db-card-body db-card-body--hero">
            <div class="db-skeleton" style="width:60%; max-width:400px; height:32px;"></div>
            <div class="db-skeleton" style="width:80%; max-width:520px; height:120px;"></div>
            <div class="db-skeleton" style="width:80%; max-width:520px; height:120px;"></div>
        </div>
    </div>

<?php else: ?>

    <!-- Progress stepper -->
    <?php
    $cs_steps = [
        1 => ['label' => __('create_cs_step1_label'), 'icon' => 'fa-sliders'],
        2 => ['label' => __('create_cs_step2_label'), 'icon' => 'fa-earth-americas'],
        3 => ['label' => __('create_cs_step3_label'), 'icon' => 'fa-microchip'],
        4 => ['label' => __('create_cs_step4_label'), 'icon' => 'fa-compact-disc'],
    ];
    ?>
    <div class="db-cs-stepper" id="csStepper" data-current="1">
        <?php foreach ($cs_steps as $n => $s): ?>
        <div class="db-cs-stepper__step<?php echo $n === 1 ? ' is-active' : ''; ?>" data-stepper="<?php echo $n; ?>">
            <div class="db-cs-stepper__circle">
                <span class="db-cs-stepper__num"><?php echo $n; ?></span>
                <i class="fas fa-check db-cs-stepper__tick"></i>
            </div>
            <div class="db-cs-stepper__label">
                <span class="db-cs-stepper__meta"><?php echo e(__('create_cs_step_prefix')); ?> <?php echo $n; ?></span>
                <span class="db-cs-stepper__name"><?php echo e($s['label']); ?></span>
            </div>
        </div>
        <?php if ($n < count($cs_steps)): ?>
        <div class="db-cs-stepper__line"></div>
        <?php endif; ?>
        <?php endforeach; ?>
    </div>

    <!-- ══════════════════════════════════════════════
         Wizard grid: main content (left) + sticky summary (right)
         ══════════════════════════════════════════════ -->
    <div class="db-cs-grid">
    <main class="db-cs-main">

    <!-- ═══ STEP 1: Resources ═══ -->
    <div class="db-create-step is-active" data-step="1">
        <header class="db-cs-step-head">

            <h2 class="db-cs-step-head__title"><?php echo e(__('create_cs_step1_title')); ?></h2>
            <p class="db-cs-step-head__sub"><?php echo e(__('create_cs_step1_sub')); ?></p>
        </header>

        <h3 class="db-cs-subtitle"><?php echo e(__('create_step1_os_title')); ?></h3>
        <div class="db-selector-grid">
            <button type="button" class="db-selector-card is-selected" data-os="linux">
                <i class="fab fa-linux db-selector-card__icon db-os-icon--linux"></i>
                <div class="db-selector-card__body">
                    <span class="db-selector-card__label"><?php echo e(__('create_os_linux')); ?></span>
                    <span class="db-selector-card__desc"><?php echo e(__('create_os_linux_desc')); ?></span>
                </div>
                <i class="fas fa-check-circle db-selector-card__check"></i>
            </button>
            <button type="button" class="db-selector-card" data-os="windows">
                <i class="fab fa-windows db-selector-card__icon db-os-icon--windows"></i>
                <div class="db-selector-card__body">
                    <span class="db-selector-card__label"><?php echo e(__('create_os_windows')); ?></span>
                    <span class="db-selector-card__desc"><?php echo e(__('create_os_windows_desc')); ?></span>
                </div>
                <i class="fas fa-check-circle db-selector-card__check"></i>
            </button>
        </div>

        <h3 class="db-cs-subtitle"><?php echo e(__('create_step1_resources_title')); ?></h3>
        <div class="db-selector-grid">
            <button type="button" class="db-selector-card is-selected" data-resources="shared">
                <i class="fas fa-users db-selector-card__icon db-selector-card__icon--accent"></i>
                <div class="db-selector-card__body">
                    <span class="db-selector-card__label"><?php echo e(__('create_res_shared')); ?></span>
                    <span class="db-selector-card__desc"><?php echo e(__('create_res_shared_desc')); ?></span>
                </div>
                <i class="fas fa-check-circle db-selector-card__check"></i>
            </button>
            <button type="button" class="db-selector-card" data-resources="dedicated">
                <i class="fas fa-server db-selector-card__icon db-selector-card__icon--primary"></i>
                <div class="db-selector-card__body">
                    <span class="db-selector-card__label"><?php echo e(__('create_res_dedicated')); ?></span>
                    <span class="db-selector-card__desc"><?php echo e(__('create_res_dedicated_desc')); ?></span>
                </div>
                <i class="fas fa-check-circle db-selector-card__check"></i>
            </button>
        </div>
    </div>

    <!-- ═══ STEP 2: Location ═══ -->
    <div class="db-create-step" data-step="2">
        <header class="db-cs-step-head">

            <h2 class="db-cs-step-head__title"><?php echo e(__('create_cs_step2_title')); ?></h2>
            <p class="db-cs-step-head__sub"><?php echo e(__('create_cs_step2_sub')); ?></p>
        </header>

        <div class="db-create-regions">
            <?php foreach ($regions as $region_key => $region): ?>
            <button type="button" class="db-create-region-tab <?php echo $region_key === 'europe' ? 'is-active' : ''; ?>" data-region="<?php echo e($region_key); ?>">
                <?php echo e($region['label']); ?>
            </button>
            <?php endforeach; ?>
        </div>

        <?php foreach ($regions as $region_key => $region): ?>
        <div class="db-create-countries <?php echo $region_key === 'europe' ? 'is-active' : ''; ?>" data-region-content="<?php echo e($region_key); ?>">
            <?php foreach ($region['countries'] as $c): ?>
            <button type="button" class="db-country-card" data-location="<?php echo e($c['code']); ?>" data-location-name="<?php echo e($c['name']); ?>">
                <span class="fi fi-<?php echo e($c['code']); ?> db-country-card__flag"></span>
                <span class="db-country-card__name"><?php echo e($c['name']); ?></span>
                <i class="fas fa-check-circle db-country-card__check"></i>
            </button>
            <?php endforeach; ?>
        </div>
        <?php endforeach; ?>

        <div class="db-create-info">
            <i class="fas fa-circle-info"></i>
            <span><?php echo e(__('create_location_info')); ?></span>
        </div>
    </div>

    <!-- ═══ STEP 3: Package ═══ -->
    <div class="db-create-step" data-step="3">
        <header class="db-cs-step-head">

            <h2 class="db-cs-step-head__title"><?php echo e(__('create_cs_step3_title')); ?></h2>
            <p class="db-cs-step-head__sub"><?php echo e(__('create_cs_step3_sub')); ?></p>
        </header>

        <div class="db-package-grid">
            <?php foreach ($packages as $pkg): ?>
            <button type="button"
                    class="db-package-card<?php echo $pkg['featured'] ? ' is-featured' : ''; ?>"
                    data-package="<?php echo e($pkg['id']); ?>"
                    data-price-m="<?php echo e($pkg['price_m']); ?>"
                    data-price-h="<?php echo e($pkg['price_h']); ?>">
                <div class="db-package-card__head">
                    <div class="db-package-card__id">
                        <?php echo e($pkg['id']); ?>
                        <span class="db-package-card__arch"><?php echo e($pkg['arch']); ?></span>
                        <?php if ($pkg['featured']): ?>
                        <span class="db-package-card__ribbon"><i class="fas fa-star"></i> <?php echo e(__('create_package_popular')); ?></span>
                        <?php endif; ?>
                    </div>
                    <div class="db-package-card__price">
                        <span class="db-package-card__price-m"><?php echo format_money($pkg['price_m']); ?><small>/m</small></span>
                        <span class="db-package-card__price-h"><?php echo format_money($pkg['price_h'], 4); ?><small>/h</small></span>
                    </div>
                </div>
                <div class="db-package-card__specs">
                    <span class="db-package-spec db-package-spec--accent"><?php echo $pkg['cores']; ?> <?php echo e(__('create_pkg_cores')); ?></span>
                    <span class="db-package-spec db-package-spec--accent"><?php echo e($pkg['ram']); ?> RAM</span>
                    <span class="db-package-spec db-package-spec--accent"><?php echo e($pkg['storage']); ?></span>
                </div>
                <div class="db-package-card__specs">
                    <span class="db-package-spec db-package-spec--info"><?php echo e($pkg['bandwidth']); ?></span>
                    <span class="db-package-spec db-package-spec--info"><?php echo e($pkg['speed']); ?></span>
                    <?php if ($pkg['ipv4']): ?><span class="db-package-spec db-package-spec--primary">IPv4</span><?php endif; ?>
                    <?php if ($pkg['ipv6']): ?><span class="db-package-spec db-package-spec--accent">IPv6</span><?php endif; ?>
                </div>
                <i class="fas fa-check-circle db-package-card__check"></i>
            </button>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- ═══ STEP 4: Image ═══ -->
    <div class="db-create-step" data-step="4">
        <header class="db-cs-step-head">

            <h2 class="db-cs-step-head__title"><?php echo e(__('create_cs_step4_title')); ?></h2>
            <p class="db-cs-step-head__sub"><?php echo e(__('create_cs_step4_sub')); ?></p>
        </header>

        <!-- Linux images (shown when OS = linux) -->
        <div class="db-image-grid" data-image-group="linux">
            <?php foreach ($linux_images as $slug => $img): ?>
            <button type="button" class="db-image-card" data-image="<?php echo e($slug); ?>" data-image-name="<?php echo e($img['name']); ?>">
                <span class="db-image-card__dot" style="background:<?php echo e($img['color']); ?>;"></span>
                <span class="db-image-card__name"><?php echo e($img['name']); ?></span>
                <i class="fas fa-check-circle db-image-card__check"></i>
            </button>
            <?php endforeach; ?>
        </div>

        <!-- Windows images (shown when OS = windows) -->
        <div class="db-image-grid" data-image-group="windows" style="display:none;">
            <?php foreach ($windows_images as $slug => $img): ?>
            <button type="button" class="db-image-card" data-image="<?php echo e($slug); ?>" data-image-name="<?php echo e($img['name']); ?>">
                <i class="fab fa-windows db-image-card__icon db-os-icon--windows"></i>
                <span class="db-image-card__name"><?php echo e($img['name']); ?></span>
                <i class="fas fa-check-circle db-image-card__check"></i>
            </button>
            <?php endforeach; ?>
        </div>

        <div class="db-create-info db-create-info--warn">
            <i class="fas fa-triangle-exclamation"></i>
            <span><?php echo e(__('create_image_warning')); ?></span>
        </div>
    </div>

    <!-- Wizard navigation (bottom — conventional wizard flow) -->
    <div class="db-create-nav db-create-nav--bottom" id="createNav">
        <button type="button" class="db-create-nav__btn db-create-nav__btn--back" id="createPrev" style="visibility:hidden;">
            <i class="fas fa-arrow-left"></i> <span id="createPrevLabel"><?php echo e(__('create_nav_back')); ?></span>
        </button>
        <button type="button" class="db-create-nav__btn db-create-nav__btn--next" id="createNext">
            <span id="createNextLabel"><?php echo e(__('create_nav_select_location')); ?></span> <i class="fas fa-arrow-right"></i>
        </button>
    </div>

    </main><!-- /.db-cs-main -->

    <!-- ═══ STICKY ORDER SUMMARY (right sidebar) ═══ -->
    <aside class="db-cs-summary" id="orderSummary">
        <div class="db-cs-summary__head">
            <i class="fas fa-cart-shopping"></i>
            <span><?php echo e(__('create_order_summary')); ?></span>
        </div>
        <dl class="db-cs-summary__list db-os-summary__row">
            <div class="db-cs-summary__row db-os-summary__item" data-summary="resources">
                <dt class="db-os-summary__label"><?php echo e(__('create_label_resources')); ?></dt>
                <dd class="db-os-summary__value" data-value>—</dd>
            </div>
            <div class="db-cs-summary__row db-os-summary__item" data-summary="location">
                <dt class="db-os-summary__label"><?php echo e(__('create_label_location')); ?></dt>
                <dd class="db-os-summary__value" data-value>—</dd>
            </div>
            <div class="db-cs-summary__row db-os-summary__item" data-summary="package">
                <dt class="db-os-summary__label"><?php echo e(__('create_label_package')); ?></dt>
                <dd class="db-os-summary__value" data-value>—</dd>
            </div>
            <div class="db-cs-summary__row db-os-summary__item" data-summary="image">
                <dt class="db-os-summary__label"><?php echo e(__('create_label_image')); ?></dt>
                <dd class="db-os-summary__value" data-value>—</dd>
            </div>
        </dl>
        <div class="db-cs-summary__totals">
            <div class="db-cs-summary__total db-os-summary__item db-os-summary__item--total" data-summary="total_m">
                <span class="db-os-summary__label"><?php echo e(__('create_label_total_mo')); ?></span>
                <span class="db-os-summary__value" data-value>—</span>
            </div>
            <div class="db-cs-summary__total db-os-summary__item db-os-summary__item--total db-os-summary__item--green" data-summary="total_h">
                <span class="db-os-summary__label"><?php echo e(__('create_label_total_h')); ?></span>
                <span class="db-os-summary__value" data-value>—</span>
            </div>
        </div>
    </aside>

    </div><!-- /.db-cs-grid -->

<?php endif; ?>

</div><!-- /.db-cs -->

<!-- ═══ CONFIRM MODAL ═══ -->
<?php
$modal_id    = 'createServerConfirmModal';
$modal_title = __('create_confirm_title');
$modal_size  = 'sm';
include __DIR__ . '/../../../components/modal.php';
?>
    <div class="db-confirm-body">
        <div class="db-modal-icon db-modal-icon--info"><i class="fas fa-circle-question"></i></div>
        <p><?php echo e(__('create_confirm_desc')); ?></p>
        <div class="db-confirm-summary">
            <div class="db-confirm-summary__row">
                <span><?php echo e(__('create_label_location')); ?></span>
                <span id="confirmLocation">—</span>
            </div>
            <div class="db-confirm-summary__row">
                <span><?php echo e(__('create_label_package')); ?></span>
                <span id="confirmPackage">—</span>
            </div>
            <div class="db-confirm-summary__row">
                <span><?php echo e(__('create_label_image')); ?></span>
                <span id="confirmImage">—</span>
            </div>
            <div class="db-confirm-summary__row db-confirm-summary__row--total">
                <span><?php echo e(__('create_label_total_mo')); ?></span>
                <span id="confirmTotal">—</span>
            </div>
        </div>
    </div>
<?php
$modal_footer = '
    <button class="db-btn db-btn--secondary" data-modal-close>' . e(__('common_cancel')) . '</button>
    <button class="db-btn db-btn--primary" id="createConfirmBtn">
        <i class="fas fa-check"></i> ' . e(__('create_confirm_yes')) . '
    </button>
';
include __DIR__ . '/../../../components/modal-end.php';
?>

<div class="db-toast-container" id="toastContainer"></div>

<script>
/* ═══════════════════════════════════════════
   CREATE SERVER — Wizard controller
   ═══════════════════════════════════════════ */
(function () {
    // State
    var state = {
        step: 1,
        os: 'linux',
        resources: 'shared',
        location: null,
        locationName: null,
        package: null,
        packageData: null,
        image: null,
        imageName: null,
    };

    // DOM refs
    var steps = document.querySelectorAll('.db-create-step');
    var prevBtn = document.getElementById('createPrev');
    var nextBtn = document.getElementById('createNext');
    var prevLabel = document.getElementById('createPrevLabel');
    var nextLabel = document.getElementById('createNextLabel');
    var summaryItems = document.querySelectorAll('[data-summary]');
    if (!steps.length) return;

    var stepLabels = [
        '', // index 0 unused
        <?php echo json_encode(__('create_nav_select_location')); ?>,
        <?php echo json_encode(__('create_nav_select_package')); ?>,
        <?php echo json_encode(__('create_nav_select_image')); ?>,
        <?php echo json_encode(__('create_nav_create_server')); ?>,
    ];
    var backLabels = [
        '',
        '',
        <?php echo json_encode(__('create_nav_select_resources')); ?>,
        <?php echo json_encode(__('create_nav_select_location')); ?>,
        <?php echo json_encode(__('create_nav_select_package')); ?>,
    ];

    function updateSummary() {
        var texts = {
            resources: (state.os ? state.os[0].toUpperCase() + state.os.slice(1) : '—') + (state.resources ? ' · ' + state.resources[0].toUpperCase() + state.resources.slice(1) : ''),
            location: state.locationName || '—',
            package: state.package || '—',
            image: state.imageName || '—',
            total_m: state.packageData ? '€' + Number(state.packageData.price_m).toFixed(2) + '/m' : '—',
            total_h: state.packageData ? '€' + Number(state.packageData.price_h).toFixed(4) + '/h' : '—',
        };
        summaryItems.forEach(function (it) {
            var key = it.getAttribute('data-summary');
            var valEl = it.querySelector('[data-value]');
            if (valEl) valEl.textContent = texts[key] || '—';
            it.classList.toggle('is-set', texts[key] && texts[key] !== '—');
        });
    }

    function goToStep(n) {
        if (n < 1) n = 1;
        if (n > 4) { openConfirmModal(); return; }
        state.step = n;
        steps.forEach(function (s) {
            s.classList.toggle('is-active', parseInt(s.getAttribute('data-step'), 10) === n);
        });
        // Sync progress stepper
        var stepperRoot = document.getElementById('csStepper');
        if (stepperRoot) {
            stepperRoot.setAttribute('data-current', String(n));
            stepperRoot.querySelectorAll('[data-stepper]').forEach(function (el) {
                var idx = parseInt(el.getAttribute('data-stepper'), 10);
                el.classList.toggle('is-active', idx === n);
                el.classList.toggle('is-complete', idx < n);
            });
        }
        prevBtn.style.visibility = n === 1 ? 'hidden' : '';
        prevLabel.textContent = backLabels[n] || <?php echo json_encode(__('create_nav_back')); ?>;
        nextLabel.textContent = stepLabels[n] || <?php echo json_encode(__('create_nav_next')); ?>;
        // On step 4, swap Windows/Linux image grid
        if (n === 4) {
            document.querySelectorAll('[data-image-group]').forEach(function (g) {
                g.style.display = g.getAttribute('data-image-group') === state.os ? '' : 'none';
            });
        }
        // Scroll back to summary
        var summary = document.getElementById('orderSummary');
        if (summary) summary.scrollIntoView({ behavior: 'smooth', block: 'start' });
    }

    function validateStep(n) {
        if (n === 1) {
            if (!state.os || !state.resources) { toast('warning', <?php echo json_encode(__('create_validate_step1')); ?>); return false; }
        } else if (n === 2) {
            if (!state.location) { toast('warning', <?php echo json_encode(__('create_validate_step2')); ?>); return false; }
        } else if (n === 3) {
            if (!state.package) { toast('warning', <?php echo json_encode(__('create_validate_step3')); ?>); return false; }
        } else if (n === 4) {
            if (!state.image) { toast('warning', <?php echo json_encode(__('create_validate_step4')); ?>); return false; }
        }
        return true;
    }

    function toast(type, msg) {
        if (window.DashToast) DashToast.show(type, '', msg);
    }

    /* ── Step 1: OS + Resources ── */
    document.querySelectorAll('[data-os]').forEach(function (c) {
        c.addEventListener('click', function () {
            state.os = c.getAttribute('data-os');
            state.image = null;
            state.imageName = null;
            document.querySelectorAll('[data-os]').forEach(function (x) {
                x.classList.toggle('is-selected', x === c);
            });
            // Deselect any previously selected image (since OS changed)
            document.querySelectorAll('.db-image-card.is-selected').forEach(function (x) { x.classList.remove('is-selected'); });
            updateSummary();
        });
    });
    document.querySelectorAll('[data-resources]').forEach(function (c) {
        c.addEventListener('click', function () {
            state.resources = c.getAttribute('data-resources');
            document.querySelectorAll('[data-resources]').forEach(function (x) {
                x.classList.toggle('is-selected', x === c);
            });
            updateSummary();
        });
    });

    /* ── Step 2: Location ── */
    document.querySelectorAll('[data-region]').forEach(function (t) {
        t.addEventListener('click', function () {
            var region = t.getAttribute('data-region');
            document.querySelectorAll('[data-region]').forEach(function (x) {
                x.classList.toggle('is-active', x === t);
            });
            document.querySelectorAll('[data-region-content]').forEach(function (x) {
                x.classList.toggle('is-active', x.getAttribute('data-region-content') === region);
            });
        });
    });
    document.querySelectorAll('[data-location]').forEach(function (c) {
        c.addEventListener('click', function () {
            state.location = c.getAttribute('data-location');
            state.locationName = c.getAttribute('data-location-name');
            document.querySelectorAll('[data-location]').forEach(function (x) {
                x.classList.toggle('is-selected', x === c);
            });
            updateSummary();
        });
    });

    /* ── Step 3: Package ── */
    document.querySelectorAll('[data-package]').forEach(function (c) {
        c.addEventListener('click', function () {
            state.package = c.getAttribute('data-package');
            state.packageData = {
                price_m: parseFloat(c.getAttribute('data-price-m')),
                price_h: parseFloat(c.getAttribute('data-price-h')),
            };
            document.querySelectorAll('[data-package]').forEach(function (x) {
                x.classList.toggle('is-selected', x === c);
            });
            updateSummary();
        });
    });

    /* ── Step 4: Image ── */
    document.querySelectorAll('[data-image]').forEach(function (c) {
        c.addEventListener('click', function () {
            state.image = c.getAttribute('data-image');
            state.imageName = c.getAttribute('data-image-name');
            document.querySelectorAll('[data-image]').forEach(function (x) {
                x.classList.toggle('is-selected', x === c);
            });
            updateSummary();
        });
    });

    /* ── Confirm modal ── */
    function openConfirmModal() {
        document.getElementById('confirmLocation').textContent = state.locationName || '—';
        document.getElementById('confirmPackage').textContent  = state.package || '—';
        document.getElementById('confirmImage').textContent    = state.imageName || '—';
        document.getElementById('confirmTotal').textContent    = state.packageData ? '€' + Number(state.packageData.price_m).toFixed(2) + '/m' : '—';
        if (window.DashModal) DashModal.open('createServerConfirmModal');
    }

    var confirmBtn = document.getElementById('createConfirmBtn');
    if (confirmBtn) {
        confirmBtn.addEventListener('click', function () {
            confirmBtn.disabled = true;
            confirmBtn.innerHTML = '<i class="fas fa-circle-notch fa-spin"></i> <?php echo e(__('create_creating')); ?>';
            setTimeout(function () {
                // Redirect to new server details (mock)
                window.location.href = '<?php echo e(cloud_project_url('server-details', $current_project['id'])); ?>&server=CLY806752';
            }, 1100);
        });
    }

    /* ── Nav buttons ── */
    prevBtn.addEventListener('click', function () { goToStep(state.step - 1); });
    nextBtn.addEventListener('click', function () {
        if (!validateStep(state.step)) return;
        goToStep(state.step + 1);
    });

    // Initial summary fill
    updateSummary();
})();
</script>

<?php require_once __DIR__ . '/../../../layouts/footer.php'; ?>
