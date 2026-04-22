<?php
/**
 * Service Detail — cPanel Hosting
 * =================================
 * Matches the old panel layout with YottaSrc's design system:
 *   • Hero with cPanel logo, name, location, IP, Login to cPanel CTA
 *   • Service Information: Domain / Username / Password / IP / Hostname
 *     as copy-to-clipboard chips (password with reveal toggle)
 *   • Specifications & Status: Status / Location / Cycle / Renewal / Due
 *   • Package Specifications chips (N Domains, N Email, N FTP, …)
 *   • Package Resources chips (NVMe, CPU, RAM, I/O, IOPS)
 *   • Circular usage gauges: Storage / Domains / Subdomains / Databases /
 *     Email Accounts / FTP Accounts
 *   • Tutorials accordion
 *   • Tabs: Overview / Nameservers / Domains / Databases / Email / FTP /
 *     Billing / Upgrade-Downgrade
 */

/* ══════════════  MOCK DATA  ══════════════ */
$cp_id = (string)$__svc_id;

$cp_registry = [
    '153785' => [
        'name'     => 'cPanel Hosting',
        'plan'     => 'Gift Package',
        'plan_short' => 'Gift',
        'dedicated' => false,
        'domain'   => 'ahsebli.com',
        'username' => 'ahseblic',
        'password' => 'J3037FeAab@Y|h8!',
        'ip'       => '45.67.139.10',
        'hostname' => 's23.srv-console.com',
        'status'   => 'active',
        'location' => 'France',
        'location_flag' => 'fr',
        'cycle'    => '1 Month',
        'amount'   => 0.99,
        'currency' => 'EUR',
        'due_date' => '20/05/2026',
        'created'  => '20/04/2026',
        'specs'    => ['domains' => 3, 'email' => 3, 'ftp' => 3, 'databases' => 3, 'terminal' => false],
        'resources' => ['storage' => '5GB NVMe', 'cpu' => '1 CPU', 'ram' => '1.5GB RAM', 'io' => '25 MB/s I/O', 'iops' => '8192 IOPS'],
        'usage'    => [
            ['key' => 'storage',    'label' => 'Storage Usage',  'value' => 0,   'max' => 5120, 'unit' => 'MB', 'display' => '0 bytes', 'icon' => 'fa-hard-drive', 'seed' => 2],
            ['key' => 'domains',    'label' => 'Domains',        'value' => 1,   'max' => 3,    'unit' => '',   'display' => '1',       'icon' => 'fa-globe',      'seed' => 1],
            ['key' => 'subdomains', 'label' => 'Subdomains',     'value' => 0,   'max' => 5,    'unit' => '',   'display' => '0',       'icon' => 'fa-sitemap',    'seed' => 0],
            ['key' => 'databases',  'label' => 'Databases',      'value' => 0,   'max' => 3,    'unit' => '',   'display' => '0',       'icon' => 'fa-database',   'seed' => 3],
            ['key' => 'email',      'label' => 'Email Accounts', 'value' => 0,   'max' => 3,    'unit' => '',   'display' => '0',       'icon' => 'fa-envelope',   'seed' => 1],
            ['key' => 'ftp',        'label' => 'FTP Accounts',   'value' => 1,   'max' => 3,    'unit' => '',   'display' => '1',       'icon' => 'fa-server',     'seed' => 2],
        ],
    ],
    '1041' => [
        'name'     => 'Business Pro Hosting',
        'plan'     => 'Business Pro',
        'plan_short' => 'Pro',
        'dedicated' => true,
        'domain'   => 'yottasrc.com',
        'username' => 'yottasrc',
        'password' => 'Xf!9$2LpZ^Hq8Wn@',
        'ip'       => '185.230.120.41',
        'hostname' => 's41.srv-console.com',
        'status'   => 'active',
        'location' => 'Germany',
        'location_flag' => 'de',
        'cycle'    => 'Monthly',
        'amount'   => 24.99,
        'currency' => 'EUR',
        'due_date' => '15/04/2026',
        'created'  => '15/03/2025',
        'specs'    => ['domains' => 20, 'email' => 100, 'ftp' => 20, 'databases' => 50, 'terminal' => true],
        'resources' => ['storage' => '50GB NVMe', 'cpu' => '4 CPU', 'ram' => '8GB RAM', 'io' => '100 MB/s I/O', 'iops' => '25000 IOPS'],
        'usage'    => [
            ['key' => 'storage',    'label' => 'Storage Usage',  'value' => 12450, 'max' => 51200, 'unit' => 'MB', 'display' => '12.2 GB', 'icon' => 'fa-hard-drive', 'seed' => 2],
            ['key' => 'domains',    'label' => 'Domains',        'value' => 7,     'max' => 20,    'unit' => '',   'display' => '7',       'icon' => 'fa-globe',      'seed' => 1],
            ['key' => 'subdomains', 'label' => 'Subdomains',     'value' => 14,    'max' => 50,    'unit' => '',   'display' => '14',      'icon' => 'fa-sitemap',    'seed' => 0],
            ['key' => 'databases',  'label' => 'Databases',      'value' => 8,     'max' => 50,    'unit' => '',   'display' => '8',       'icon' => 'fa-database',   'seed' => 3],
            ['key' => 'email',      'label' => 'Email Accounts', 'value' => 23,    'max' => 100,   'unit' => '',   'display' => '23',      'icon' => 'fa-envelope',   'seed' => 1],
            ['key' => 'ftp',        'label' => 'FTP Accounts',   'value' => 4,     'max' => 20,    'unit' => '',   'display' => '4',       'icon' => 'fa-server',     'seed' => 2],
        ],
    ],
    '1032' => [
        'name'     => 'WordPress Premium',
        'plan'     => 'WordPress Premium',
        'plan_short' => 'WP',
        'dedicated' => false,
        'domain'   => 'blog.example.com',
        'username' => 'wpblog',
        'password' => 'Xy8#Qm2$Lp4!Rk7n',
        'ip'       => '185.230.120.90',
        'hostname' => 's22.srv-console.com',
        'status'   => 'suspended',
        'location' => 'Germany',
        'location_flag' => 'de',
        'cycle'    => 'Monthly',
        'amount'   => 14.99,
        'currency' => 'EUR',
        'due_date' => '25/03/2026',
        'created'  => '25/02/2025',
        'specs'    => ['domains' => 5, 'email' => 20, 'ftp' => 5, 'databases' => 10, 'terminal' => false],
        'resources' => ['storage' => '15GB NVMe', 'cpu' => '2 CPU', 'ram' => '4GB RAM', 'io' => '50 MB/s I/O', 'iops' => '12000 IOPS'],
        'usage'    => [
            ['key' => 'storage',    'label' => 'Storage Usage',  'value' => 8200, 'max' => 15360, 'unit' => 'MB', 'display' => '8.0 GB', 'icon' => 'fa-hard-drive', 'seed' => 2],
            ['key' => 'domains',    'label' => 'Domains',        'value' => 3,    'max' => 5,     'unit' => '',   'display' => '3',      'icon' => 'fa-globe',      'seed' => 1],
            ['key' => 'subdomains', 'label' => 'Subdomains',     'value' => 6,    'max' => 20,    'unit' => '',   'display' => '6',      'icon' => 'fa-sitemap',    'seed' => 0],
            ['key' => 'databases',  'label' => 'Databases',      'value' => 4,    'max' => 10,    'unit' => '',   'display' => '4',      'icon' => 'fa-database',   'seed' => 3],
            ['key' => 'email',      'label' => 'Email Accounts', 'value' => 9,    'max' => 20,    'unit' => '',   'display' => '9',      'icon' => 'fa-envelope',   'seed' => 1],
            ['key' => 'ftp',        'label' => 'FTP Accounts',   'value' => 2,    'max' => 5,     'unit' => '',   'display' => '2',      'icon' => 'fa-server',     'seed' => 2],
        ],
    ],
];

$cp = $cp_registry[$cp_id] ?? $cp_registry['153785'];

/* Mock nameservers, domains, databases, emails, ftp — reused across tabs */
$cp_nameservers = ['ns1.yottasrc.com', 'ns2.yottasrc.com'];

$cp_domains = [
    ['domain' => $cp['domain'], 'type' => 'main', 'document_root' => '/public_html'],
];

$cp_databases = []; // empty on the demo account (matches the old-panel screenshot)

$cp_emails = []; // empty on the demo account (matches the old-panel screenshot)

$cp_ftp = [
    ['username' => $cp['username'], 'directory' => '/home/' . $cp['username'], 'used' => '153.6 KB', 'quota' => '5 GB',   'main' => true],
];
/* FTP server connection info — shown as a wide sub-row below the FTP list. */
$cp_ftp_conn = [
    'hostname' => $cp['hostname'],
    'ip'       => $cp['ip'],
    'port'     => 21,
];

$cp_invoices = [
    ['id' => 310900, 'date' => '2026-04-20', 'due' => '2026-04-20', 'amount' => $cp['amount'], 'status' => 'paid'],
    ['id' => 310740, 'date' => '2026-03-20', 'due' => '2026-03-20', 'amount' => $cp['amount'], 'status' => 'paid'],
];

$cp_tutorials = [
    ['icon' => 'fa-code',         'title' => 'How to change PHP version in cPanel'],
    ['icon' => 'fa-clock-rotate-left', 'title' => 'How to see your cPanel Login history'],
    ['icon' => 'fa-right-to-bracket', 'title' => 'How to login to cPanel?'],
    ['icon' => 'fa-circle-question',  'title' => 'I can\'t access cPanel. What should I do?'],
];

$page_title = '#' . $cp_id . ' ' . $cp['name'] . ' — ' . SITE_NAME;
$breadcrumbs_data = [
    ['label' => __('nav_dashboard'), 'url' => DASH_BASE_PATH . '/'],
    ['label' => __('nav_my_services'), 'url' => DASH_BASE_PATH . '/pages/services/index.php'],
    ['label' => 'Service #' . $cp_id, 'url' => null],
];

$cp_status_variant = ['active' => 'success', 'suspended' => 'warning', 'terminated' => 'danger'][$cp['status']] ?? 'success';
$cp_is_active = $cp['status'] === 'active';

/* ══════════════  END OF MOCK DATA  ══════════════ */
?>

<!-- ═══ HERO ═══ -->
<section class="ds-hero ds-hero--seeded db-cpanel-hero" style="--hero-seed: var(--seed-0);">
    <div class="ds-hero__top">
        <div class="ds-hero__identity">
            <div class="db-cpanel-hero__logo db-cpanel-hero__logo--img">
                <img src="<?php echo dash_asset('images/brands/cpanel.svg'); ?>" alt="cPanel">
            </div>
            <div class="ds-hero__title-block">
                <div class="ds-hero__meta-top">
                    <span class="ds-eyebrow ds-eyebrow--<?php echo e($cp_status_variant); ?>">
                        <span class="ds-status-dot"></span>
                        <?php echo e(__('services_status_' . $cp['status'])); ?>
                    </span>
                </div>
                <h1 class="ds-hero__title">
                    <span class="db-cpanel-hero__num">#<?php echo e($cp_id); ?></span>
                    <?php echo e($cp['name']); ?>
                    <button type="button" class="db-srvd-title-edit" onclick="DashToast.show('info','','<?php echo e(__('services_rename_soon')); ?>')" title="<?php echo e(__('common_edit')); ?>">
                        <i class="fas fa-pen"></i>
                    </button>
                </h1>
                <p class="db-cpanel-hero__pkg"><?php echo e($cp['plan']); ?></p>
                <div class="ds-hero__meta">
                    <span class="ds-hero__meta-item"><span class="fi fi-<?php echo e($cp['location_flag']); ?>"></span> <?php echo e($cp['location']); ?></span>
                    <span class="ds-hero__meta-item"><i class="fas fa-globe"></i> <?php echo e($cp['ip']); ?></span>
                </div>
            </div>
        </div>
        <div class="ds-hero__actions">
            <div class="db-dropdown-wrapper">
                <button class="ds-btn" data-dropdown-toggle>
                    <i class="fas fa-bolt"></i>
                    <span><?php echo e(__('services_actions')); ?></span>
                    <i class="fas fa-chevron-down ds-btn__chev"></i>
                </button>
                <div class="db-dropdown-menu">
                    <button class="db-dropdown-item" onclick="DashToast.show('info','','<?php echo e(__('cpanel_action_reset_password')); ?>')"><i class="fas fa-key"></i> <?php echo e(__('cpanel_action_reset_password')); ?></button>
                    <button class="db-dropdown-item" onclick="DashToast.show('info','','<?php echo e(__('cpanel_action_backup')); ?>')"><i class="fas fa-download"></i> <?php echo e(__('cpanel_action_backup')); ?></button>
                    <button class="db-dropdown-item" onclick="DashToast.show('info','','<?php echo e(__('cpanel_action_restart')); ?>')"><i class="fas fa-rotate"></i> <?php echo e(__('cpanel_action_restart')); ?></button>
                    <div class="db-dropdown-divider"></div>
                    <button class="db-dropdown-item db-dropdown-item--danger" onclick="DashModal.open('cpTerminateModal')"><i class="fas fa-trash"></i> <?php echo e(__('cpanel_action_terminate')); ?></button>
                </div>
            </div>
            <a href="#" onclick="event.preventDefault(); DashToast.show('info','','<?php echo e(__('cpanel_login_redirect')); ?>'); setTimeout(function(){ window.open('https://<?php echo e($cp['hostname']); ?>:2083', '_blank'); }, 400);" class="ds-btn ds-btn--primary">
                <i class="fas fa-right-to-bracket"></i>
                <span><?php echo e(__('cpanel_login_btn')); ?></span>
            </a>
            <div class="db-dropdown-wrapper">
                <button class="ds-btn" data-dropdown-toggle>
                    <i class="fas fa-grip"></i>
                    <span><?php echo e(__('cpanel_apps')); ?></span>
                    <i class="fas fa-chevron-down ds-btn__chev"></i>
                </button>
                <div class="db-dropdown-menu">
                    <a href="#" onclick="event.preventDefault(); DashToast.show('info','','<?php echo e(__('cpanel_apps_redirect')); ?>')" class="db-dropdown-item"><i class="fab fa-wordpress"></i> WordPress</a>
                    <a href="#" onclick="event.preventDefault(); DashToast.show('info','','<?php echo e(__('cpanel_apps_redirect')); ?>')" class="db-dropdown-item"><i class="fab fa-joomla"></i> Joomla</a>
                    <a href="#" onclick="event.preventDefault(); DashToast.show('info','','<?php echo e(__('cpanel_apps_redirect')); ?>')" class="db-dropdown-item"><i class="fab fa-drupal"></i> Drupal</a>
                    <a href="#" onclick="event.preventDefault(); DashToast.show('info','','<?php echo e(__('cpanel_apps_redirect')); ?>')" class="db-dropdown-item"><i class="fas fa-shopping-cart"></i> PrestaShop</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ═══ TAB BAR (scrolls on mobile via .db-srvd-tabs) ═══ -->
<div class="db-tab-bar db-srvd-tabs" data-tab-bar data-tab-content="#cpTabs">
    <button type="button" class="db-tab-bar__btn is-active" data-tab-target="overview"><i class="fas fa-table-cells"></i> <?php echo e(__('cpanel_tab_overview')); ?></button>
    <button type="button" class="db-tab-bar__btn" data-tab-target="nameservers"><i class="fas fa-network-wired"></i> <?php echo e(__('cpanel_tab_nameservers')); ?></button>
    <button type="button" class="db-tab-bar__btn" data-tab-target="domains"><i class="fas fa-globe"></i> <?php echo e(__('cpanel_tab_domains')); ?> <span class="db-tab-bar__count"><?php echo count($cp_domains); ?></span></button>
    <button type="button" class="db-tab-bar__btn" data-tab-target="databases"><i class="fas fa-database"></i> <?php echo e(__('cpanel_tab_databases')); ?> <span class="db-tab-bar__count"><?php echo count($cp_databases); ?></span></button>
    <button type="button" class="db-tab-bar__btn" data-tab-target="email"><i class="fas fa-envelope"></i> <?php echo e(__('cpanel_tab_email')); ?> <span class="db-tab-bar__count"><?php echo count($cp_emails); ?></span></button>
    <button type="button" class="db-tab-bar__btn" data-tab-target="ftp"><i class="fas fa-server"></i> <?php echo e(__('cpanel_tab_ftp')); ?> <span class="db-tab-bar__count"><?php echo count($cp_ftp); ?></span></button>
    <button type="button" class="db-tab-bar__btn" data-tab-target="billing"><i class="fas fa-coins"></i> <?php echo e(__('cpanel_tab_billing')); ?></button>
    <button type="button" class="db-tab-bar__btn" data-tab-target="upgrade"><i class="fas fa-arrow-up-right-dots"></i> <?php echo e(__('cpanel_tab_upgrade')); ?></button>
</div>

<div id="cpTabs">

    <!-- ═══ OVERVIEW ═══ -->
    <div class="db-tab-pane is-active" data-tab-pane="overview">

        <!-- Service Information (credentials chips) -->
        <div class="db-srvd-access">
            <div class="db-srvd-access__head">
                <div class="db-srvd-access__title-wrap">
                    <h3 class="db-srvd-access__title">
                        <span class="db-srvd-access__icon"><i class="fas fa-circle-info"></i></span>
                        <?php echo e(__('cpanel_service_info')); ?>
                    </h3>
                    <p class="db-srvd-access__sub"><?php echo e(__('cpanel_service_info_sub')); ?></p>
                </div>
            </div>
            <div class="db-srvd-access__grid db-cpanel-creds">
                <button type="button" class="db-srvd-access-chip" onclick="DashCopy && DashCopy(this,'<?php echo e($cp['domain']); ?>');">
                    <div class="db-srvd-access-chip__head">
                        <span class="db-srvd-access-chip__label"><i class="fas fa-globe"></i> <?php echo e(__('cpanel_domain')); ?></span>
                        <i class="fas fa-copy db-srvd-access-chip__copy"></i>
                    </div>
                    <div class="db-srvd-access-chip__value">→ <?php echo e($cp['domain']); ?></div>
                </button>
                <button type="button" class="db-srvd-access-chip" onclick="DashCopy && DashCopy(this,'<?php echo e($cp['username']); ?>');">
                    <div class="db-srvd-access-chip__head">
                        <span class="db-srvd-access-chip__label"><i class="fas fa-user"></i> <?php echo e(__('cpanel_username')); ?></span>
                        <i class="fas fa-copy db-srvd-access-chip__copy"></i>
                    </div>
                    <div class="db-srvd-access-chip__value">→ <?php echo e($cp['username']); ?></div>
                </button>
                <div class="db-srvd-access-chip db-srvd-access-chip--password" id="cpPasswordChip">
                    <div class="db-srvd-access-chip__head">
                        <span class="db-srvd-access-chip__label"><i class="fas fa-lock"></i> <?php echo e(__('cpanel_password')); ?></span>
                        <div class="db-srvd-access-chip__tools">
                            <button type="button" class="db-srvd-password-toggle" id="cpPwdToggle" aria-label="<?php echo e(__('common_reveal')); ?>"><i class="fas fa-eye" id="cpPwdEye"></i></button>
                            <button type="button" class="db-srvd-access-chip__copy-btn" onclick="DashCopy && DashCopy(this,'<?php echo e($cp['password']); ?>');" aria-label="<?php echo e(__('common_copy')); ?>"><i class="fas fa-copy"></i></button>
                        </div>
                    </div>
                    <div class="db-srvd-access-chip__value db-srvd-access-chip__value--mono">
                        <span id="cpPwdText">→ <?php echo str_repeat('•', 16); ?></span>
                        <span id="cpPwdReal" style="display:none;">→ <?php echo e($cp['password']); ?></span>
                    </div>
                </div>
                <button type="button" class="db-srvd-access-chip" onclick="DashCopy && DashCopy(this,'<?php echo e($cp['ip']); ?>');">
                    <div class="db-srvd-access-chip__head">
                        <span class="db-srvd-access-chip__label"><i class="fas fa-ethernet"></i> <?php echo e(__('cpanel_ip')); ?></span>
                        <i class="fas fa-copy db-srvd-access-chip__copy"></i>
                    </div>
                    <div class="db-srvd-access-chip__value">→ <?php echo e($cp['ip']); ?></div>
                </button>
                <button type="button" class="db-srvd-access-chip" onclick="DashCopy && DashCopy(this,'<?php echo e($cp['hostname']); ?>');">
                    <div class="db-srvd-access-chip__head">
                        <span class="db-srvd-access-chip__label"><i class="fas fa-server"></i> <?php echo e(__('cpanel_hostname')); ?></span>
                        <i class="fas fa-copy db-srvd-access-chip__copy"></i>
                    </div>
                    <div class="db-srvd-access-chip__value">→ <?php echo e($cp['hostname']); ?></div>
                </button>
            </div>
        </div>

        <!-- Specifications & Status -->
        <div class="db-srvd-access db-mt">
            <div class="db-srvd-access__head">
                <div class="db-srvd-access__title-wrap">
                    <h3 class="db-srvd-access__title">
                        <span class="db-srvd-access__icon"><i class="fas fa-gauge-high"></i></span>
                        <?php echo e(__('cpanel_specs_status')); ?>
                    </h3>
                </div>
            </div>
            <div class="db-cpanel-facts">
                <div class="db-cpanel-fact">
                    <span class="db-cpanel-fact__label"><?php echo e(__('cpanel_fact_status')); ?></span>
                    <span class="db-cpanel-fact__value">
                        <i class="fas fa-circle-check" style="color: var(--status-active);"></i>
                        <?php echo e(__('services_status_' . $cp['status'])); ?>
                    </span>
                </div>
                <div class="db-cpanel-fact">
                    <span class="db-cpanel-fact__label"><?php echo e(__('cpanel_fact_location')); ?></span>
                    <span class="db-cpanel-fact__value">
                        <span class="fi fi-<?php echo e($cp['location_flag']); ?>"></span>
                        <?php echo e($cp['location']); ?>
                    </span>
                </div>
                <div class="db-cpanel-fact">
                    <span class="db-cpanel-fact__label"><?php echo e(__('cpanel_fact_cycle')); ?></span>
                    <span class="db-cpanel-fact__value">
                        <i class="fas fa-clock" style="color: rgb(var(--seed-0));"></i>
                        <?php echo e($cp['cycle']); ?>
                    </span>
                </div>
                <div class="db-cpanel-fact">
                    <span class="db-cpanel-fact__label"><?php echo e(__('cpanel_fact_renewal')); ?></span>
                    <span class="db-cpanel-fact__value">
                        <i class="fas fa-euro-sign" style="color: var(--brand-warning);"></i>
                        <?php echo format_money($cp['amount']); ?>
                    </span>
                </div>
                <div class="db-cpanel-fact">
                    <span class="db-cpanel-fact__label"><?php echo e(__('cpanel_fact_due')); ?></span>
                    <span class="db-cpanel-fact__value">
                        <i class="fas fa-calendar" style="color: var(--brand-error);"></i>
                        <?php echo e($cp['due_date']); ?>
                    </span>
                </div>
            </div>
        </div>

        <!-- Package Specifications & Package Resources (chip rows) -->
        <div class="db-cpanel-packs">
            <!-- Specs -->
            <div class="db-cpanel-pack">
                <div class="db-cpanel-pack__head">
                    <h4 class="db-cpanel-pack__title"><?php echo e(__('cpanel_pack_specs')); ?></h4>
                    <span class="db-cpanel-pack__sub"><?php echo e($cp['plan_short']); ?></span>
                </div>
                <div class="db-cpanel-pack__chips">
                    <span class="db-cpanel-chip db-cpanel-chip--ok"><?php echo (int)$cp['specs']['domains']; ?> <?php echo e(__('cpanel_chip_domains')); ?></span>
                    <span class="db-cpanel-chip db-cpanel-chip--ok"><?php echo (int)$cp['specs']['email']; ?> <?php echo e(__('cpanel_chip_email')); ?></span>
                    <span class="db-cpanel-chip db-cpanel-chip--ok"><?php echo (int)$cp['specs']['ftp']; ?> <?php echo e(__('cpanel_chip_ftp')); ?></span>
                    <span class="db-cpanel-chip db-cpanel-chip--ok"><?php echo (int)$cp['specs']['databases']; ?> <?php echo e(__('cpanel_chip_databases')); ?></span>
                    <span class="db-cpanel-chip <?php echo $cp['specs']['terminal'] ? 'db-cpanel-chip--ok' : 'db-cpanel-chip--off'; ?>">
                        <?php echo $cp['specs']['terminal'] ? e(__('cpanel_chip_terminal_yes')) : e(__('cpanel_chip_terminal_no')); ?>
                    </span>
                </div>
                <div class="db-cpanel-pack__bar"><span class="db-cpanel-pack__bar-fill db-cpanel-pack__bar-fill--specs"></span></div>
            </div>

            <!-- Resources -->
            <div class="db-cpanel-pack">
                <div class="db-cpanel-pack__head">
                    <h4 class="db-cpanel-pack__title"><?php echo e(__('cpanel_pack_resources')); ?></h4>
                    <span class="db-cpanel-pack__sub"><?php echo e($cp['dedicated'] ? __('cpanel_dedicated') : __('cpanel_shared')); ?></span>
                </div>
                <div class="db-cpanel-pack__chips">
                    <?php foreach ($cp['resources'] as $res): ?>
                    <span class="db-cpanel-chip db-cpanel-chip--res"><?php echo e($res); ?></span>
                    <?php endforeach; ?>
                </div>
                <div class="db-cpanel-pack__bar"><span class="db-cpanel-pack__bar-fill db-cpanel-pack__bar-fill--res"></span></div>
            </div>
        </div>

        <!-- Usage gauges (6 circular gauges) -->
        <div class="db-cpanel-gauges">
            <?php foreach ($cp['usage'] as $g):
                $pct = $g['max'] > 0 ? round(($g['value'] / $g['max']) * 100) : 0;
                $pct_visual = max(2, min(100, $pct));   // tiny bit visible at 0
                $zone = $pct >= 90 ? 'danger' : ($pct >= 70 ? 'warning' : 'ok');
                $circ = 2 * M_PI * 32;
                $offset = $circ - ($pct_visual / 100) * $circ;
            ?>
            <div class="db-cpanel-gauge" style="--cp-seed: var(--seed-<?php echo (int)$g['seed']; ?>);" data-zone="<?php echo e($zone); ?>">
                <div class="db-cpanel-gauge__top">
                    <div class="db-cpanel-gauge__label">
                        <i class="fas <?php echo e($g['icon']); ?>"></i>
                        <span><?php echo e(strtoupper($g['label'])); ?></span>
                    </div>
                </div>
                <div class="db-cpanel-gauge__body">
                    <div class="db-cpanel-gauge__value"><?php echo e($g['display']); ?></div>
                    <div class="db-cpanel-gauge__ring">
                        <svg viewBox="0 0 72 72" aria-hidden="true">
                            <circle cx="36" cy="36" r="32" fill="none" stroke="rgba(var(--cp-seed), 0.15)" stroke-width="6"/>
                            <circle cx="36" cy="36" r="32" fill="none"
                                    stroke="rgb(var(--cp-seed))" stroke-width="6"
                                    stroke-linecap="round"
                                    stroke-dasharray="<?php echo number_format($circ, 2); ?>"
                                    stroke-dashoffset="<?php echo number_format($offset, 2); ?>"
                                    transform="rotate(-90 36 36)"/>
                        </svg>
                        <span class="db-cpanel-gauge__pct"><?php echo (int)$pct; ?>%</span>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <!-- Tutorials accordion -->
        <div class="db-card db-mt">
            <div class="db-card-header db-card-header--md">
                <h3 class="db-card-title">
                    <i class="fas fa-video db-card-title-icon"></i>
                    <?php echo e(__('cpanel_tutorials_title')); ?>
                </h3>
            </div>
            <div class="db-cpanel-tut">
                <?php foreach ($cp_tutorials as $t): ?>
                <a href="#" onclick="event.preventDefault(); DashToast.show('info','','<?php echo e(__('cpanel_tutorial_coming')); ?>');" class="db-cpanel-tut__item">
                    <i class="fas <?php echo e($t['icon']); ?>"></i>
                    <span><?php echo e($t['title']); ?></span>
                    <i class="fas fa-arrow-right db-cpanel-tut__arrow"></i>
                </a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <!-- ═══ NAMESERVERS ═══ -->
    <div class="db-tab-pane" data-tab-pane="nameservers">
        <div class="db-card">
            <div class="db-card-header db-card-header--md">
                <h3 class="db-card-title"><i class="fas fa-network-wired db-card-title-icon"></i> <?php echo e(__('cpanel_ns_title')); ?></h3>
                <p class="db-card-subtitle"><?php echo e(__('cpanel_ns_sub')); ?></p>
            </div>
            <div class="db-card-body">
                <ol class="db-dom-ns-list">
                    <?php foreach ($cp_nameservers as $i => $ns): ?>
                    <li class="db-dom-ns">
                        <span class="db-dom-ns__idx">NS<?php echo $i + 1; ?></span>
                        <span class="db-dom-ns__host"><?php echo e($ns); ?></span>
                        <button type="button" class="db-dom-ns__copy" onclick="DashCopy && DashCopy(this,'<?php echo e($ns); ?>');" aria-label="<?php echo e(__('common_copy')); ?>">
                            <i class="fas fa-copy"></i>
                        </button>
                    </li>
                    <?php endforeach; ?>
                </ol>
                <div class="db-notice db-notice--info db-mt">
                    <i class="fas fa-circle-info"></i>
                    <span><?php echo e(__('cpanel_ns_note')); ?></span>
                </div>
            </div>
        </div>
    </div>

    <!-- ═══ DOMAINS ═══ -->
    <div class="db-tab-pane" data-tab-pane="domains">
        <div class="db-card">
            <div class="db-card-header db-card-header--md">
                <h3 class="db-card-title"><i class="fas fa-globe db-card-title-icon"></i> <?php echo e(__('cpanel_domains_title')); ?></h3>
                <div class="db-card-actions">
                    <a href="#" onclick="event.preventDefault(); DashToast.show('info','','<?php echo e(__('cpanel_manage_in_cpanel')); ?>');" class="db-chip-btn db-chip-btn--primary">
                        <i class="fas fa-plus"></i> <?php echo e(__('cpanel_dom_create')); ?>
                    </a>
                    <a href="#" onclick="event.preventDefault(); DashToast.show('info','','<?php echo e(__('cpanel_manage_in_cpanel')); ?>');" class="db-chip-btn db-chip-btn--muted">
                        <i class="fas fa-list"></i> <?php echo e(__('cpanel_dom_manage')); ?>
                    </a>
                    <a href="#" onclick="event.preventDefault(); DashToast.show('info','','<?php echo e(__('cpanel_manage_in_cpanel')); ?>');" class="db-chip-btn db-chip-btn--danger">
                        <i class="fas fa-folder-open"></i> <?php echo e(__('cpanel_dom_file_manager')); ?>
                    </a>
                </div>
            </div>
            <div class="db-card-body--table">
                <div class="db-table-wrapper">
                    <table class="db-table">
                        <thead><tr>
                            <th><?php echo e(__('cpanel_dom_col_domain')); ?></th>
                            <th><?php echo e(__('cpanel_dom_col_root')); ?></th>
                            <th style="width:200px;"><?php echo e(__('cpanel_dom_col_actions')); ?></th>
                        </tr></thead>
                        <tbody>
                            <?php foreach ($cp_domains as $d): ?>
                            <tr>
                                <td>
                                    <span class="db-ftp-login">
                                        <a href="https://<?php echo e($d['domain']); ?>" target="_blank" rel="noopener" class="db-table-cell-link"><?php echo e($d['domain']); ?></a>
                                        <?php if ($d['type'] === 'main'): ?>
                                        <span class="db-badge db-badge--pending db-badge--sm"><?php echo e(__('cpanel_dom_main_badge')); ?></span>
                                        <?php else: ?>
                                        <span class="db-badge db-badge--active db-badge--sm"><?php echo e(__('cpanel_dom_type_' . $d['type'])); ?></span>
                                        <?php endif; ?>
                                    </span>
                                </td>
                                <td><span class="db-table-cell-mono"><?php echo e($d['document_root']); ?></span></td>
                                <td>
                                    <?php if ($d['type'] === 'main'): ?>
                                    <button type="button" class="db-chip-btn db-chip-btn--primary db-chip-btn--sm" onclick="DashToast.show('info','','<?php echo e(__('cpanel_manage_in_cpanel')); ?>')">
                                        <i class="fas fa-pen"></i> <?php echo e(__('cpanel_dom_change_main')); ?>
                                    </button>
                                    <?php else: ?>
                                    <button type="button" class="db-chip-btn db-chip-btn--danger db-chip-btn--sm" onclick="DashToast.show('warning','','<?php echo e(__('cpanel_dom_remove')); ?>')">
                                        <i class="fas fa-trash"></i> <?php echo e(__('cpanel_dom_remove')); ?>
                                    </button>
                                    <?php endif; ?>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- ═══ DATABASES ═══ -->
    <div class="db-tab-pane" data-tab-pane="databases">
        <div class="db-card">
            <div class="db-card-header db-card-header--md">
                <h3 class="db-card-title"><i class="fas fa-database db-card-title-icon"></i> <?php echo e(__('cpanel_db_title')); ?></h3>
                <div class="db-card-actions">
                    <a href="#" onclick="event.preventDefault(); DashToast.show('info','','<?php echo e(__('cpanel_manage_in_cpanel')); ?>');" class="db-chip-btn db-chip-btn--primary">
                        <i class="fas fa-plus"></i> <?php echo e(__('cpanel_db_create')); ?>
                    </a>
                    <a href="#" onclick="event.preventDefault(); DashToast.show('info','','<?php echo e(__('cpanel_manage_in_cpanel')); ?>');" class="db-chip-btn db-chip-btn--muted">
                        <i class="fas fa-database"></i> <?php echo e(__('cpanel_db_phpmyadmin')); ?>
                    </a>
                    <a href="#" onclick="event.preventDefault(); DashToast.show('info','','<?php echo e(__('cpanel_manage_in_cpanel')); ?>');" class="db-chip-btn db-chip-btn--danger">
                        <i class="fas fa-server"></i> <?php echo e(__('cpanel_db_manager')); ?>
                    </a>
                </div>
            </div>
            <div class="db-card-body--table">
                <div class="db-table-wrapper">
                    <table class="db-table">
                        <thead><tr>
                            <th><?php echo e(__('cpanel_db_col_name')); ?></th>
                            <th><?php echo e(__('cpanel_db_col_users')); ?></th>
                            <th class="db-table-cell--right"><?php echo e(__('cpanel_db_col_actions')); ?></th>
                        </tr></thead>
                        <tbody>
                            <?php if (empty($cp_databases)): ?>
                            <tr class="db-cp-empty-row">
                                <td colspan="3">
                                    <a href="#" onclick="event.preventDefault(); DashToast.show('info','','<?php echo e(__('cpanel_manage_in_cpanel')); ?>');" class="db-cp-empty">
                                        <?php echo e(__('cpanel_db_empty_line')); ?>
                                    </a>
                                </td>
                            </tr>
                            <?php else: foreach ($cp_databases as $db): ?>
                            <tr>
                                <td><span class="db-table-cell-mono"><?php echo e($db['name']); ?></span></td>
                                <td><?php echo (int)$db['users']; ?></td>
                                <td class="db-table-cell--right"><?php echo e($db['size']); ?></td>
                            </tr>
                            <?php endforeach; endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- ═══ EMAIL ACCOUNTS ═══ -->
    <div class="db-tab-pane" data-tab-pane="email">
        <div class="db-card">
            <div class="db-card-header db-card-header--md">
                <h3 class="db-card-title"><i class="fas fa-envelope db-card-title-icon"></i> <?php echo e(__('cpanel_email_title')); ?></h3>
                <div class="db-card-actions">
                    <a href="#" onclick="event.preventDefault(); DashToast.show('info','','<?php echo e(__('cpanel_manage_in_cpanel')); ?>');" class="db-chip-btn db-chip-btn--primary">
                        <i class="fas fa-plus"></i> <?php echo e(__('cpanel_email_create')); ?>
                    </a>
                    <a href="#" onclick="event.preventDefault(); DashToast.show('info','','<?php echo e(__('cpanel_manage_in_cpanel')); ?>');" class="db-chip-btn db-chip-btn--muted">
                        <i class="fas fa-list"></i> <?php echo e(__('cpanel_email_manage')); ?>
                    </a>
                </div>
            </div>
            <div class="db-card-body--table">
                <div class="db-table-wrapper">
                    <table class="db-table">
                        <thead><tr>
                            <th><?php echo e(__('cpanel_email_col_address')); ?></th>
                            <th><?php echo e(__('cpanel_email_col_quota')); ?></th>
                            <th><?php echo e(__('cpanel_email_col_used')); ?></th>
                            <th class="db-table-cell--right"><?php echo e(__('cpanel_email_col_actions')); ?></th>
                        </tr></thead>
                        <tbody>
                            <?php if (empty($cp_emails)): ?>
                            <tr class="db-cp-empty-row">
                                <td colspan="4">
                                    <a href="#" onclick="event.preventDefault(); DashToast.show('info','','<?php echo e(__('cpanel_manage_in_cpanel')); ?>');" class="db-cp-empty">
                                        <?php echo e(__('cpanel_email_empty_line')); ?>
                                    </a>
                                </td>
                            </tr>
                            <?php else: foreach ($cp_emails as $em): ?>
                            <tr>
                                <td><span class="db-table-cell-mono"><?php echo e($em['address']); ?></span></td>
                                <td><?php echo e($em['quota']); ?></td>
                                <td><?php echo e($em['used']); ?></td>
                                <td class="db-table-cell--right">---</td>
                            </tr>
                            <?php endforeach; endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- ═══ FTP ACCOUNTS ═══ -->
    <div class="db-tab-pane" data-tab-pane="ftp">
        <div class="db-card">
            <div class="db-card-header db-card-header--md">
                <h3 class="db-card-title"><i class="fas fa-server db-card-title-icon"></i> <?php echo e(__('cpanel_ftp_title')); ?></h3>
                <div class="db-card-actions">
                    <a href="#" onclick="event.preventDefault(); DashToast.show('info','','<?php echo e(__('cpanel_manage_in_cpanel')); ?>');" class="db-chip-btn db-chip-btn--muted">
                        <i class="fas fa-list-check"></i> <?php echo e(__('cpanel_ftp_open_mgr')); ?>
                    </a>
                </div>
            </div>
            <div class="db-card-body--table">
                <div class="db-table-wrapper">
                    <table class="db-table db-ftp-table">
                        <thead><tr>
                            <th><?php echo e(__('cpanel_ftp_col_user')); ?></th>
                            <th><?php echo e(__('cpanel_ftp_col_password')); ?></th>
                            <th><?php echo e(__('cpanel_ftp_col_folder')); ?></th>
                            <th class="db-table-cell--right"><?php echo e(__('cpanel_ftp_col_used')); ?></th>
                            <th class="db-table-cell--right"><?php echo e(__('cpanel_ftp_col_quota')); ?></th>
                            <th style="width:80px;"><?php echo e(__('cpanel_ftp_col_actions')); ?></th>
                        </tr></thead>
                        <tbody>
                            <?php foreach ($cp_ftp as $f): ?>
                            <tr>
                                <td>
                                    <span class="db-ftp-login">
                                        <span class="db-table-cell-mono"><?php echo e($f['username']); ?></span>
                                        <button type="button" class="db-icon-copy" onclick="DashCopy && DashCopy(this,'<?php echo e($f['username']); ?>');" title="<?php echo e(__('common_copy')); ?>"><i class="fas fa-copy"></i></button>
                                        <?php if (!empty($f['main'])): ?>
                                        <span class="db-badge db-badge--pending db-badge--sm"><?php echo e(__('cpanel_ftp_main')); ?></span>
                                        <?php endif; ?>
                                    </span>
                                </td>
                                <td>
                                    <span class="db-ftp-login">
                                        <span class="db-table-cell-mono"><?php echo e($cp['password']); ?></span>
                                        <button type="button" class="db-icon-copy" onclick="DashCopy && DashCopy(this,'<?php echo e($cp['password']); ?>');" title="<?php echo e(__('common_copy')); ?>"><i class="fas fa-copy"></i></button>
                                    </span>
                                </td>
                                <td><span class="db-table-cell-mono"><?php echo e($f['directory']); ?></span></td>
                                <td class="db-table-cell--right"><?php echo e($f['used']); ?></td>
                                <td class="db-table-cell--right"><?php echo e($f['quota']); ?></td>
                                <td class="db-ftp-actions-cell">---</td>
                            </tr>
                            <?php endforeach; ?>
                            <!-- Connection details sub-row (hostname / IP / port) -->
                            <tr class="db-ftp-conn-row">
                                <td colspan="6">
                                    <div class="db-ftp-conn">
                                        <span class="db-ftp-conn__item">
                                            <strong><?php echo e(__('cpanel_ftp_hostname')); ?>:</strong>
                                            <span class="db-table-cell-mono"><?php echo e($cp_ftp_conn['hostname']); ?></span>
                                            <button type="button" class="db-icon-copy" onclick="DashCopy && DashCopy(this,'<?php echo e($cp_ftp_conn['hostname']); ?>');" title="<?php echo e(__('common_copy')); ?>"><i class="fas fa-copy"></i></button>
                                        </span>
                                        <span class="db-ftp-conn__item">
                                            <strong><?php echo e(__('cpanel_ftp_ip')); ?>:</strong>
                                            <span class="db-table-cell-mono"><?php echo e($cp_ftp_conn['ip']); ?></span>
                                            <button type="button" class="db-icon-copy" onclick="DashCopy && DashCopy(this,'<?php echo e($cp_ftp_conn['ip']); ?>');" title="<?php echo e(__('common_copy')); ?>"><i class="fas fa-copy"></i></button>
                                        </span>
                                        <span class="db-ftp-conn__item">
                                            <strong><?php echo e(__('cpanel_ftp_port')); ?>:</strong>
                                            <span class="db-table-cell-mono"><?php echo (int)$cp_ftp_conn['port']; ?></span>
                                            <button type="button" class="db-icon-copy" onclick="DashCopy && DashCopy(this,'<?php echo (int)$cp_ftp_conn['port']; ?>');" title="<?php echo e(__('common_copy')); ?>"><i class="fas fa-copy"></i></button>
                                        </span>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- ═══ BILLING ═══ -->
    <div class="db-tab-pane" data-tab-pane="billing">
        <?php
        /* Progress towards next renewal (mock — backend computes from real dates). */
        $cp_reg_date      = $cp['created'];
        $cp_days_total    = 30;
        $cp_days_left     = 29;
        $cp_days_elapsed  = $cp_days_total - $cp_days_left;
        $cp_progress      = max(0, min(100, round(($cp_days_elapsed / max(1, $cp_days_total)) * 100)));
        ?>
        <h3 class="db-srv-section-title"><?php echo e(__('cpanel_billing_info')); ?></h3>
        <div class="db-billing-facts">
            <div class="db-billing-fact">
                <span class="db-billing-fact__icon" style="--fact-color: var(--brand-primary);"><i class="fas fa-calendar-check"></i></span>
                <div>
                    <div class="db-billing-fact__label"><?php echo e(__('cpanel_bf_reg')); ?></div>
                    <div class="db-billing-fact__value"><?php echo e($cp_reg_date); ?></div>
                </div>
            </div>
            <div class="db-billing-fact">
                <span class="db-billing-fact__icon" style="--fact-color: rgb(var(--seed-0));"><i class="fas fa-clock"></i></span>
                <div>
                    <div class="db-billing-fact__label"><?php echo e(__('cpanel_bf_cycle')); ?></div>
                    <div class="db-billing-fact__value"><?php echo e($cp['cycle']); ?></div>
                </div>
            </div>
            <div class="db-billing-fact">
                <span class="db-billing-fact__icon" style="--fact-color: var(--brand-warning);"><i class="fas fa-euro-sign"></i></span>
                <div>
                    <div class="db-billing-fact__label"><?php echo e(__('cpanel_bf_renewal')); ?></div>
                    <div class="db-billing-fact__value"><?php echo format_money($cp['amount']); ?></div>
                </div>
            </div>
            <div class="db-billing-fact">
                <span class="db-billing-fact__icon" style="--fact-color: var(--brand-error);"><i class="fas fa-calendar-xmark"></i></span>
                <div>
                    <div class="db-billing-fact__label"><?php echo e(__('cpanel_bf_due')); ?></div>
                    <div class="db-billing-fact__value"><?php echo e($cp['due_date']); ?></div>
                </div>
            </div>
        </div>

        <!-- Progress bar with calendar icon + days-left bubble -->
        <div class="db-billing-progress">
            <span class="db-billing-progress__icon"><i class="fas fa-calendar-day"></i></span>
            <div class="db-billing-progress__bar">
                <span class="db-billing-progress__fill" style="width: <?php echo (int)$cp_progress; ?>%;"></span>
                <span class="db-billing-progress__bubble" style="left: <?php echo (int)$cp_progress; ?>%;">
                    <?php echo e(__('cpanel_bf_days_left', ['n' => (int)$cp_days_left])); ?>
                </span>
            </div>
        </div>

        <!-- Billing tools card -->
        <div class="db-card db-mt">
            <div class="db-card-header db-card-header--md">
                <h3 class="db-card-title"><i class="fas fa-sliders db-card-title-icon"></i> <?php echo e(__('cpanel_billing_tools')); ?></h3>
            </div>
            <div class="db-billing-tool">
                <div>
                    <strong><?php echo e(__('cpanel_bt_renew_title')); ?></strong>
                    <span><?php echo __('cpanel_bt_renew_desc'); ?></span>
                </div>
                <label class="db-toggle">
                    <input type="checkbox" checked onchange="DashToast.show('success','',this.checked ? '<?php echo e(__('cpanel_bt_renew_on')); ?>' : '<?php echo e(__('cpanel_bt_renew_off')); ?>')">
                    <span class="db-toggle-track"><span class="db-toggle-thumb"></span></span>
                </label>
            </div>
        </div>

        <!-- Linked invoices -->
        <div class="db-card db-mt">
            <div class="db-card-header db-card-header--md">
                <h3 class="db-card-title"><i class="fas fa-file-invoice db-card-title-icon"></i> <?php echo e(__('cpanel_billing_title')); ?></h3>
            </div>
            <div class="db-card-body--table">
                <div class="db-table-wrapper">
                    <table class="db-table">
                        <thead><tr>
                            <th>#</th>
                            <th><?php echo e(__('cpanel_inv_date')); ?></th>
                            <th><?php echo e(__('cpanel_inv_due')); ?></th>
                            <th class="db-table-cell--right"><?php echo e(__('cpanel_inv_amount')); ?></th>
                            <th><?php echo e(__('cpanel_inv_status')); ?></th>
                        </tr></thead>
                        <tbody>
                            <?php foreach ($cp_invoices as $inv): ?>
                            <tr class="db-table-row-link" onclick="window.location='<?php echo DASH_BASE_PATH; ?>/pages/billing/invoice-details.php?id=<?php echo e($inv['id']); ?>';">
                                <td><a href="<?php echo DASH_BASE_PATH; ?>/pages/billing/invoice-details.php?id=<?php echo e($inv['id']); ?>" class="db-table-cell-link" onclick="event.stopPropagation();">#<?php echo e($inv['id']); ?></a></td>
                                <td><span class="db-table-cell-mono"><?php echo e($inv['date']); ?></span></td>
                                <td><span class="db-table-cell-mono"><?php echo e($inv['due']); ?></span></td>
                                <td class="db-table-cell--right"><span class="db-table-cell-amount"><?php echo format_money($inv['amount']); ?></span></td>
                                <td><span class="db-badge db-badge--<?php echo $inv['status'] === 'paid' ? 'active' : 'pending'; ?>"><?php echo e(__('invoice_status_' . $inv['status'])); ?></span></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- ═══ UPGRADE ═══ -->
    <div class="db-tab-pane" data-tab-pane="upgrade">
        <div class="db-card">
            <div class="db-card-header db-card-header--md">
                <h3 class="db-card-title"><i class="fas fa-arrow-up-right-dots db-card-title-icon"></i> <?php echo e(__('cpanel_upgrade_title')); ?></h3>
                <p class="db-card-subtitle"><?php echo e(__('cpanel_upgrade_sub')); ?></p>
            </div>
            <div class="db-card-body">
                <div class="db-notice db-notice--info">
                    <i class="fas fa-circle-info"></i>
                    <span><?php echo e(__('cpanel_upgrade_hint')); ?></span>
                </div>
                <div style="margin-top:14px;">
                    <a href="<?php echo DASH_BASE_PATH; ?>/pages/services/order.php" class="db-btn db-btn--primary">
                        <i class="fas fa-cart-plus"></i> <?php echo e(__('cpanel_upgrade_browse')); ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ═══ TERMINATE MODAL ═══ -->
<?php
$modal_id    = 'cpTerminateModal';
$modal_title = __('cpanel_terminate_title');
$modal_size  = 'sm';
include __DIR__ . '/../../../components/modal.php';
?>
    <div class="db-confirm-body">
        <div class="db-modal-icon db-modal-icon--danger"><i class="fas fa-triangle-exclamation"></i></div>
        <p><?php echo e(__('cpanel_terminate_desc')); ?></p>
        <div class="db-confirm-summary">
            <div class="db-confirm-summary__row">
                <span><?php echo e(__('cpanel_domain')); ?></span>
                <span class="db-confirm-summary__target"><?php echo e($cp['domain']); ?></span>
            </div>
        </div>
        <div class="db-notice db-notice--danger db-confirm-body__warn">
            <i class="fas fa-triangle-exclamation"></i>
            <span><?php echo e(__('cpanel_terminate_warn')); ?></span>
        </div>
    </div>
<?php
$modal_footer = '
    <button class="db-btn db-btn--secondary" data-modal-close>' . e(__('common_cancel')) . '</button>
    <button class="db-btn db-btn--danger" onclick="DashModal.close(this.closest(\'.db-modal-overlay\')); DashToast.show(\'success\',\'\', \'' . e(__('cpanel_terminate_done')) . '\');">
        <i class="fas fa-trash"></i> ' . e(__('cpanel_terminate_confirm')) . '
    </button>
';
include __DIR__ . '/../../../components/modal-end.php';
?>

<div class="db-toast-container" id="toastContainer"></div>

<script>
/* Password reveal toggle (same logic as server-details) */
document.addEventListener('DOMContentLoaded', function () {
    var toggle = document.getElementById('cpPwdToggle');
    var eye    = document.getElementById('cpPwdEye');
    var text   = document.getElementById('cpPwdText');
    var real   = document.getElementById('cpPwdReal');
    if (!toggle || !text || !real) return;
    var shown = false;
    toggle.addEventListener('click', function () {
        shown = !shown;
        text.style.display = shown ? 'none' : '';
        real.style.display = shown ? '' : 'none';
        if (eye) eye.className = shown ? 'fas fa-eye-slash' : 'fas fa-eye';
    });
});
</script>
