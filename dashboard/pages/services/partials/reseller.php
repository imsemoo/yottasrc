<?php
/**
 * Service Detail — Reseller Hosting (WHM)
 * =========================================
 * Builds on the cPanel layout but with reseller-specific bits:
 *   • Login to WHM (root-like control panel) instead of cPanel
 *   • cPanel Accounts tab — the child accounts this reseller manages
 *   • Different usage gauges: Active cPanel / Suspended cPanel / Storage
 *     Usage / Bandwidth Usage
 *   • Domains tab aggregates across all child cPanel accounts
 */

$rs_id = (string)$__svc_id;

$rs_registry = [
    '154330' => [
        'name'     => 'Reseller Hosting',
        'plan'     => 'Reseller Starter Package',
        'plan_short' => 'Reseller Starter',
        'domain'   => 'res.ahsebli.com',
        'username' => 'resahseb',
        'password' => 'F;2s0zzo63uIK-9@',
        'ip'       => '45.13.226.10',
        'hostname' => 's35.srv-console.com',
        'status'   => 'active',
        'location' => 'Germany',
        'location_flag' => 'de',
        'cycle'    => '1 Month',
        'amount'   => 3.49,
        'due_date' => '20/05/2026',
        'specs'    => [
            ['key' => 'storage',  'label' => '15GB NVMe Storage'],
            ['key' => 'domains',  'label' => '∞ Domains'],
            ['key' => 'email',    'label' => '∞ Email'],
            ['key' => 'database', 'label' => '∞ Databases'],
            ['key' => 'terminal', 'label' => 'Support Terminal', 'on' => true],
        ],
        'resources' => ['cpu' => '1.5 Core CPU', 'ram' => '2 GB RAM', 'io' => '100 MB/s I/O', 'iops' => '25000 IOPS'],
        'usage' => [
            ['key' => 'active',    'label' => 'Active cPanel',    'value' => 1,  'max' => 15,     'unit' => '',   'display' => '1',    'icon' => 'fa-circle-check', 'seed' => 1, 'zone' => 'ok'],
            ['key' => 'suspended', 'label' => 'Suspended cPanel', 'value' => 0,  'max' => 15,     'unit' => '',   'display' => '0',    'icon' => 'fa-circle-pause', 'seed' => 3, 'zone' => 'ok'],
            ['key' => 'storage',   'label' => 'Storage Usage',    'value' => 0,  'max' => 15360,  'unit' => 'GB', 'display' => '0 GB', 'icon' => 'fa-hard-drive',   'seed' => 2, 'zone' => 'ok'],
            ['key' => 'bandwidth', 'label' => 'Bandwidth Usage',  'value' => 0,  'max' => 0,      'unit' => '',   'display' => '0 GB', 'icon' => 'fa-infinity',     'seed' => 0, 'zone' => 'ok', 'unlimited' => true],
        ],
    ],
    '1035' => [
        'name'     => 'Reseller Basic',
        'plan'     => 'Reseller Basic',
        'plan_short' => 'Reseller Basic',
        'domain'   => 'clients.designhub.io',
        'username' => 'designres',
        'password' => 'Kp9!Fm3$Wn7#Xt2q',
        'ip'       => '185.230.120.78',
        'hostname' => 's78.srv-console.com',
        'status'   => 'active',
        'location' => 'Netherlands',
        'location_flag' => 'nl',
        'cycle'    => 'Annually',
        'amount'   => 199.99,
        'due_date' => '10/01/2027',
        'specs'    => [
            ['key' => 'storage',  'label' => '50GB NVMe Storage'],
            ['key' => 'domains',  'label' => '∞ Domains'],
            ['key' => 'email',    'label' => '∞ Email'],
            ['key' => 'database', 'label' => '∞ Databases'],
            ['key' => 'terminal', 'label' => 'Support Terminal', 'on' => true],
        ],
        'resources' => ['cpu' => '4 Core CPU', 'ram' => '8 GB RAM', 'io' => '200 MB/s I/O', 'iops' => '50000 IOPS'],
        'usage' => [
            ['key' => 'active',    'label' => 'Active cPanel',    'value' => 12, 'max' => 50,    'unit' => '', 'display' => '12',     'icon' => 'fa-circle-check', 'seed' => 1, 'zone' => 'ok'],
            ['key' => 'suspended', 'label' => 'Suspended cPanel', 'value' => 2,  'max' => 50,    'unit' => '', 'display' => '2',      'icon' => 'fa-circle-pause', 'seed' => 3, 'zone' => 'ok'],
            ['key' => 'storage',   'label' => 'Storage Usage',    'value' => 28, 'max' => 50,    'unit' => 'GB', 'display' => '28 GB', 'icon' => 'fa-hard-drive',   'seed' => 2, 'zone' => 'warning'],
            ['key' => 'bandwidth', 'label' => 'Bandwidth Usage',  'value' => 0,  'max' => 0,     'unit' => '', 'display' => '412 GB', 'icon' => 'fa-infinity',     'seed' => 0, 'zone' => 'ok', 'unlimited' => true],
        ],
    ],
];

$rs = $rs_registry[$rs_id] ?? $rs_registry['154330'];

/* Four white-label nameservers shown in a responsive row. Backend: pull
   from registrar config for this reseller. */
$rs_nameservers = [
    ['host' => 'ns1.srvx.ws', 'ipv4' => '185.136.96.73', 'ipv6' => '2a06:fb00:1::1:73'],
    ['host' => 'ns2.srvx.ws', 'ipv4' => '185.136.97.73', 'ipv6' => '2a06:fb00:1::2:73'],
    ['host' => 'ns3.srvx.ws', 'ipv4' => '185.136.98.73', 'ipv6' => '2a06:fb00:1::3:73'],
    ['host' => 'ns4.srvx.ws', 'ipv4' => '185.136.99.73', 'ipv6' => '2a06:fb00:1::4:73'],
];

/* Mock reseller cPanel child accounts (shown in their own tab) */
$rs_cpanels = [
    ['id' => 1, 'username' => 'ahsebli', 'domain' => 'ahsebli.com', 'package' => 'Gift', 'status' => 'active',    'disk' => '120 MB', 'email' => 2, 'created' => '2026-04-20'],
    ['id' => 2, 'username' => 'shop',    'domain' => 'shop.example.com', 'package' => 'Starter', 'status' => 'active', 'disk' => '540 MB', 'email' => 5, 'created' => '2026-03-18'],
    ['id' => 3, 'username' => 'blog',    'domain' => 'blog.example.com', 'package' => 'Starter', 'status' => 'suspended', 'disk' => '820 MB', 'email' => 8, 'created' => '2026-02-02'],
];
/* The reseller page on id 154330 has only 1 child (matches screenshot) */
if ($rs_id === '154330') {
    $rs_cpanels = [$rs_cpanels[0]];
}

$rs_domains = array_map(fn($c) => ['domain' => $c['domain'], 'owner' => $c['username']], $rs_cpanels);

$rs_invoices = [
    ['id' => 310910, 'date' => '2026-04-20', 'due' => '2026-04-20', 'amount' => $rs['amount'], 'status' => 'paid'],
    ['id' => 310760, 'date' => '2026-03-20', 'due' => '2026-03-20', 'amount' => $rs['amount'], 'status' => 'paid'],
];

$rs_status_variant = ['active' => 'success', 'suspended' => 'warning', 'terminated' => 'danger'][$rs['status']] ?? 'success';

$page_title = '#' . $rs_id . ' ' . $rs['name'] . ' — ' . SITE_NAME;
$breadcrumbs_data = [
    ['label' => __('nav_dashboard'), 'url' => DASH_BASE_PATH . '/'],
    ['label' => __('services_title'), 'url' => DASH_BASE_PATH . '/pages/services/index.php'],
    ['label' => 'Service #' . $rs_id, 'url' => null],
];
?>

<!-- ═══ HERO ═══ -->
<section class="ds-hero ds-hero--seeded db-cpanel-hero" style="--hero-seed: var(--seed-3);">
    <div class="ds-hero__top">
        <div class="ds-hero__identity">
            <div class="db-cpanel-hero__logo db-cpanel-hero__logo--img">
                <img src="<?php echo dash_asset('images/brands/whm.svg'); ?>" alt="cPanel & WHM">
            </div>
            <div class="ds-hero__title-block">
                <div class="ds-hero__meta-top">
                    <span class="ds-eyebrow ds-eyebrow--<?php echo e($rs_status_variant); ?>">
                        <span class="ds-status-dot"></span>
                        <?php echo e(__('services_status_' . $rs['status'])); ?>
                    </span>
                </div>
                <h1 class="ds-hero__title">
                    <span class="db-cpanel-hero__num">#<?php echo e($rs_id); ?></span>
                    <?php echo e($rs['name']); ?>
                    <button type="button" class="db-srvd-title-edit" onclick="DashToast.show('info','','<?php echo e(__('services_rename_soon')); ?>')" title="<?php echo e(__('common_edit')); ?>">
                        <i class="fas fa-pen"></i>
                    </button>
                </h1>
                <p class="db-cpanel-hero__pkg"><?php echo e($rs['plan']); ?></p>
                <div class="ds-hero__meta">
                    <span class="ds-hero__meta-item"><span class="fi fi-<?php echo e($rs['location_flag']); ?>"></span> <?php echo e($rs['location']); ?></span>
                    <span class="ds-hero__meta-item"><i class="fas fa-globe"></i> <?php echo e($rs['ip']); ?></span>
                </div>
            </div>
        </div>
        <div class="ds-hero__actions">
            <div class="db-dropdown-wrapper">
                <button class="ds-btn" data-dropdown-toggle>
                    <i class="fas fa-bolt"></i>
                    <span><?php echo e(__('dom_actions')); ?></span>
                    <i class="fas fa-chevron-down ds-btn__chev"></i>
                </button>
                <div class="db-dropdown-menu">
                    <button class="db-dropdown-item" onclick="DashToast.show('info','','<?php echo e(__('reseller_action_whm_reset')); ?>')"><i class="fas fa-key"></i> <?php echo e(__('reseller_action_whm_reset')); ?></button>
                    <button class="db-dropdown-item" onclick="DashToast.show('info','','<?php echo e(__('reseller_action_backup')); ?>')"><i class="fas fa-download"></i> <?php echo e(__('reseller_action_backup')); ?></button>
                    <button class="db-dropdown-item" onclick="DashToast.show('info','','<?php echo e(__('cpanel_action_restart')); ?>')"><i class="fas fa-rotate"></i> <?php echo e(__('cpanel_action_restart')); ?></button>
                </div>
            </div>
            <a href="#" onclick="event.preventDefault(); DashToast.show('info','','<?php echo e(__('reseller_manage_in_whm')); ?>'); setTimeout(function(){ window.open('https://<?php echo e($rs['hostname']); ?>:2087', '_blank'); }, 400);" class="ds-btn ds-btn--primary">
                <i class="fas fa-right-to-bracket"></i>
                <span><?php echo e(__('reseller_login_btn')); ?></span>
            </a>
        </div>
    </div>
</section>

<!-- ═══ TAB BAR ═══ -->
<div class="db-tab-bar db-srvd-tabs" data-tab-bar data-tab-content="#rsTabs">
    <button type="button" class="db-tab-bar__btn is-active" data-tab-target="overview"><i class="fas fa-table-cells"></i> <?php echo e(__('dom_tab_overview')); ?></button>
    <button type="button" class="db-tab-bar__btn" data-tab-target="cpanels"><i class="fas fa-users"></i> <?php echo e(__('reseller_tab_cpanels')); ?> <span class="db-tab-bar__count"><?php echo count($rs_cpanels); ?></span></button>
    <button type="button" class="db-tab-bar__btn" data-tab-target="nameservers"><i class="fas fa-network-wired"></i> <?php echo e(__('cpanel_ns_title')); ?></button>
    <button type="button" class="db-tab-bar__btn" data-tab-target="domains"><i class="fas fa-globe"></i> <?php echo e(__('cpanel_tab_domains')); ?> <span class="db-tab-bar__count"><?php echo count($rs_domains); ?></span></button>
    <button type="button" class="db-tab-bar__btn" data-tab-target="billing"><i class="fas fa-coins"></i> <?php echo e(__('nav_billing')); ?></button>
    <button type="button" class="db-tab-bar__btn" data-tab-target="upgrade"><i class="fas fa-arrow-up-right-dots"></i> <?php echo e(__('cpanel_tab_upgrade')); ?></button>
</div>

<div id="rsTabs">
    <!-- ═══ OVERVIEW ═══ -->
    <div class="db-tab-pane is-active" data-tab-pane="overview">
        <!-- Service Information -->
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
                <button type="button" class="db-srvd-access-chip" onclick="DashCopy && DashCopy(this,'<?php echo e($rs['domain']); ?>');">
                    <div class="db-srvd-access-chip__head"><span class="db-srvd-access-chip__label"><i class="fas fa-globe"></i> <?php echo e(__('cpanel_domain')); ?></span><i class="fas fa-copy db-srvd-access-chip__copy"></i></div>
                    <div class="db-srvd-access-chip__value">→ <?php echo e($rs['domain']); ?></div>
                </button>
                <button type="button" class="db-srvd-access-chip" onclick="DashCopy && DashCopy(this,'<?php echo e($rs['username']); ?>');">
                    <div class="db-srvd-access-chip__head"><span class="db-srvd-access-chip__label"><i class="fas fa-user"></i> <?php echo e(__('cpanel_username')); ?></span><i class="fas fa-copy db-srvd-access-chip__copy"></i></div>
                    <div class="db-srvd-access-chip__value">→ <?php echo e($rs['username']); ?></div>
                </button>
                <div class="db-srvd-access-chip db-srvd-access-chip--password">
                    <div class="db-srvd-access-chip__head">
                        <span class="db-srvd-access-chip__label"><i class="fas fa-lock"></i> <?php echo e(__('auth_password')); ?></span>
                        <div class="db-srvd-access-chip__tools">
                            <button type="button" class="db-srvd-password-toggle" id="rsPwdToggle" aria-label="<?php echo e(__('common_reveal')); ?>"><i class="fas fa-eye" id="rsPwdEye"></i></button>
                            <button type="button" class="db-srvd-access-chip__copy-btn" onclick="DashCopy && DashCopy(this,'<?php echo e($rs['password']); ?>');" aria-label="<?php echo e(__('common_copy')); ?>"><i class="fas fa-copy"></i></button>
                        </div>
                    </div>
                    <div class="db-srvd-access-chip__value db-srvd-access-chip__value--mono">
                        <span id="rsPwdText">→ <?php echo str_repeat('•', 16); ?></span>
                        <span id="rsPwdReal" style="display:none;">→ <?php echo e($rs['password']); ?></span>
                    </div>
                </div>
                <button type="button" class="db-srvd-access-chip" onclick="DashCopy && DashCopy(this,'<?php echo e($rs['ip']); ?>');">
                    <div class="db-srvd-access-chip__head"><span class="db-srvd-access-chip__label"><i class="fas fa-ethernet"></i> <?php echo e(__('cpanel_ip')); ?></span><i class="fas fa-copy db-srvd-access-chip__copy"></i></div>
                    <div class="db-srvd-access-chip__value">→ <?php echo e($rs['ip']); ?></div>
                </button>
                <button type="button" class="db-srvd-access-chip" onclick="DashCopy && DashCopy(this,'<?php echo e($rs['hostname']); ?>');">
                    <div class="db-srvd-access-chip__head"><span class="db-srvd-access-chip__label"><i class="fas fa-server"></i> <?php echo e(__('cpanel_hostname')); ?></span><i class="fas fa-copy db-srvd-access-chip__copy"></i></div>
                    <div class="db-srvd-access-chip__value">→ <?php echo e($rs['hostname']); ?></div>
                </button>
            </div>
        </div>

        <!-- Specs & Status -->
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
                    <span class="db-cpanel-fact__label"><?php echo e(__('common_status')); ?></span>
                    <span class="db-cpanel-fact__value"><i class="fas fa-circle-check" style="color: var(--status-active);"></i> <?php echo e(__('services_status_' . $rs['status'])); ?></span>
                </div>
                <div class="db-cpanel-fact">
                    <span class="db-cpanel-fact__label"><?php echo e(__('cpanel_fact_location')); ?></span>
                    <span class="db-cpanel-fact__value"><span class="fi fi-<?php echo e($rs['location_flag']); ?>"></span> <?php echo e($rs['location']); ?></span>
                </div>
                <div class="db-cpanel-fact">
                    <span class="db-cpanel-fact__label"><?php echo e(__('cpanel_bf_cycle')); ?></span>
                    <span class="db-cpanel-fact__value"><i class="fas fa-clock" style="color: rgb(var(--seed-0));"></i> <?php echo e($rs['cycle']); ?></span>
                </div>
                <div class="db-cpanel-fact">
                    <span class="db-cpanel-fact__label"><?php echo e(__('cpanel_bf_renewal')); ?></span>
                    <span class="db-cpanel-fact__value"><i class="fas fa-euro-sign" style="color: var(--brand-warning);"></i> <?php echo format_money($rs['amount']); ?></span>
                </div>
                <div class="db-cpanel-fact">
                    <span class="db-cpanel-fact__label"><?php echo e(__('cpanel_bf_due')); ?></span>
                    <span class="db-cpanel-fact__value"><i class="fas fa-calendar" style="color: var(--brand-error);"></i> <?php echo e($rs['due_date']); ?></span>
                </div>
            </div>
        </div>

        <!-- Specs + Resources chip rows -->
        <div class="db-cpanel-packs">
            <div class="db-cpanel-pack">
                <div class="db-cpanel-pack__head">
                    <h4 class="db-cpanel-pack__title"><?php echo e(__('cpanel_pack_specs')); ?></h4>
                    <span class="db-cpanel-pack__sub"><?php echo e($rs['plan_short']); ?></span>
                </div>
                <div class="db-cpanel-pack__chips">
                    <?php foreach ($rs['specs'] as $s): ?>
                    <span class="db-cpanel-chip db-cpanel-chip--ok"><?php echo e($s['label']); ?></span>
                    <?php endforeach; ?>
                </div>
                <div class="db-cpanel-pack__bar"><span class="db-cpanel-pack__bar-fill db-cpanel-pack__bar-fill--specs"></span></div>
            </div>
            <div class="db-cpanel-pack">
                <div class="db-cpanel-pack__head">
                    <h4 class="db-cpanel-pack__title"><?php echo e(__('reseller_per_cpanel')); ?></h4>
                    <span class="db-cpanel-pack__sub"><?php echo e(__('reseller_resources_per_cpanel')); ?></span>
                </div>
                <div class="db-cpanel-pack__chips">
                    <?php foreach ($rs['resources'] as $r): ?>
                    <span class="db-cpanel-chip db-cpanel-chip--res"><?php echo e($r); ?></span>
                    <?php endforeach; ?>
                </div>
                <div class="db-cpanel-pack__bar"><span class="db-cpanel-pack__bar-fill db-cpanel-pack__bar-fill--res"></span></div>
            </div>
        </div>

        <!-- Usage gauges (4 reseller-specific) -->
        <div class="db-cpanel-gauges db-cpanel-gauges--4">
            <?php foreach ($rs['usage'] as $g):
                $unlimited = !empty($g['unlimited']);
                $pct = $unlimited ? 0 : ($g['max'] > 0 ? round(($g['value'] / $g['max']) * 100) : 0);
                $pct_visual = max($unlimited ? 0 : 2, min(100, $pct));
                $zone = $g['zone'] ?? ($pct >= 90 ? 'danger' : ($pct >= 70 ? 'warning' : 'ok'));
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
                        <?php if ($unlimited): ?>
                        <span class="db-cpanel-gauge__inf"><i class="fas fa-infinity"></i></span>
                        <?php else: ?>
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
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- ═══ cPANEL ACCOUNTS ═══ -->
    <div class="db-tab-pane" data-tab-pane="cpanels">
        <div class="db-card">
            <div class="db-card-header db-card-header--md">
                <h3 class="db-card-title"><i class="fas fa-users db-card-title-icon"></i> <?php echo e(__('reseller_cpanels_title')); ?></h3>
                <a href="#" onclick="event.preventDefault(); DashToast.show('info','','<?php echo e(__('reseller_manage_in_whm')); ?>');" class="db-card-link"><?php echo e(__('reseller_manage_whm')); ?> <i class="fas fa-arrow-up-right-from-square"></i></a>
            </div>
            <div class="db-fbar">
                <div class="db-fbar__top">
                    <div class="db-fbar__search">
                        <i class="fas fa-magnifying-glass"></i>
                        <input type="text" data-table-search="rsCpanelsTable" placeholder="<?php echo e(__('reseller_search_cpanels')); ?>">
                    </div>
                    <div class="db-fbar__tools">
                        <select class="db-fbar__sort" data-table-filter="rsCpanelsTable" data-filter-key="status">
                            <option value=""><?php echo e(__('common_all')); ?></option>
                            <option value="active"><?php echo e(__('domains_stat_active')); ?></option>
                            <option value="suspended"><?php echo e(__('services_status_suspended')); ?></option>
                        </select>
                        <?php include __DIR__ . '/../../../components/export-dropdown.php'; ?>
                    </div>
                </div>
            </div>
            <div class="db-card-body--table db-card-body--no-border-top">
                <div class="db-table-wrapper">
                    <table class="db-table" id="rsCpanelsTable" data-table-tools>
                        <thead><tr>
                            <th class="db-table-sortable" data-sort-key="username"><?php echo e(__('cpanel_username')); ?> <span class="db-sort-icon"><i class="fas fa-sort"></i></span></th>
                            <th class="db-table-sortable" data-sort-key="domain"><?php echo e(__('cpanel_domain')); ?> <span class="db-sort-icon"><i class="fas fa-sort"></i></span></th>
                            <th class="db-table-sortable db-table-hide-mobile" data-sort-key="package"><?php echo e(__('create_label_package')); ?> <span class="db-sort-icon"><i class="fas fa-sort"></i></span></th>
                            <th class="db-table-sortable db-table-hide-tablet" data-sort-key="disk"><?php echo e(__('reseller_col_disk')); ?> <span class="db-sort-icon"><i class="fas fa-sort"></i></span></th>
                            <th class="db-table-sortable" data-sort-key="status"><?php echo e(__('common_status')); ?> <span class="db-sort-icon"><i class="fas fa-sort"></i></span></th>
                            <th style="width:80px;"></th>
                        </tr></thead>
                        <tbody>
                            <?php foreach ($rs_cpanels as $c): ?>
                            <tr data-row
                                data-username="<?php echo e(strtolower($c['username'])); ?>"
                                data-domain="<?php echo e(strtolower($c['domain'])); ?>"
                                data-package="<?php echo e(strtolower($c['package'])); ?>"
                                data-disk="<?php echo e($c['disk']); ?>"
                                data-status="<?php echo e($c['status']); ?>">
                                <td><span class="db-table-cell-mono"><?php echo e($c['username']); ?></span></td>
                                <td><a href="https://<?php echo e($c['domain']); ?>" target="_blank" rel="noopener" class="db-table-cell-link"><?php echo e($c['domain']); ?></a></td>
                                <td class="db-table-hide-mobile"><span class="db-badge db-badge--pending"><?php echo e($c['package']); ?></span></td>
                                <td class="db-table-hide-tablet"><?php echo e($c['disk']); ?></td>
                                <td><span class="db-badge db-badge--<?php echo $c['status'] === 'active' ? 'active' : 'suspended'; ?>"><?php echo e(__('services_status_' . $c['status'])); ?></span></td>
                                <td>
                                    <div class="db-row-actions db-row-actions--solid">
                                        <button type="button" class="db-row-action db-row-action--solid db-row-action--primary" onclick="DashToast.show('info','','<?php echo e(__('reseller_login_as')); ?>')" data-tooltip="<?php echo e(__('reseller_login_as')); ?>"><i class="fas fa-arrow-up-right-from-square"></i></button>
                                        <div class="db-dropdown-wrapper">
                                            <button class="db-row-action db-row-action--solid db-row-action--menu" data-dropdown-toggle><i class="fas fa-ellipsis-vertical"></i></button>
                                            <div class="db-dropdown-menu">
                                                <button class="db-dropdown-item" onclick="DashToast.show('info','','<?php echo e(__('reseller_change_pkg')); ?>')"><i class="fas fa-box"></i> <?php echo e(__('reseller_change_pkg')); ?></button>
                                                <button class="db-dropdown-item" onclick="DashToast.show('info','','<?php echo e(__('cpanel_action_reset_password')); ?>')"><i class="fas fa-key"></i> <?php echo e(__('cpanel_action_reset_password')); ?></button>
                                                <?php if ($c['status'] === 'active'): ?>
                                                <button class="db-dropdown-item" onclick="DashToast.show('warning','','<?php echo e(__('reseller_suspend')); ?>')"><i class="fas fa-pause"></i> <?php echo e(__('reseller_suspend')); ?></button>
                                                <?php else: ?>
                                                <button class="db-dropdown-item" onclick="DashToast.show('success','','<?php echo e(__('reseller_unsuspend')); ?>')"><i class="fas fa-play"></i> <?php echo e(__('reseller_unsuspend')); ?></button>
                                                <?php endif; ?>
                                                <div class="db-dropdown-divider"></div>
                                                <button class="db-dropdown-item db-dropdown-item--danger" onclick="DashToast.show('warning','','<?php echo e(__('reseller_terminate_cpanel')); ?>')"><i class="fas fa-trash"></i> <?php echo e(__('reseller_terminate_cpanel')); ?></button>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                            <?php $te_colspan = 6; $te_text = __('reseller_no_cpanels'); include __DIR__ . '/../../../components/table-empty.php'; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div data-pager-for="rsCpanelsTable" data-page-size="10"></div>
        </div>
    </div>

    <!-- ═══ NAMESERVERS ═══ -->
    <div class="db-tab-pane" data-tab-pane="nameservers">
        <!-- Row 1: 4 nameserver hostnames -->
        <div class="db-card">
            <div class="db-card-header db-card-header--md">
                <h3 class="db-card-title"><i class="fas fa-network-wired db-card-title-icon"></i> <?php echo e(__('cpanel_ns_title')); ?></h3>
            </div>
            <div class="db-card-body">
                <div class="db-ns-grid">
                    <?php foreach ($rs_nameservers as $ns): ?>
                    <div class="db-ns-cell">
                        <span class="db-table-cell-mono"><?php echo e($ns['host']); ?></span>
                        <button type="button" class="db-icon-copy" onclick="DashCopy && DashCopy(this,'<?php echo e($ns['host']); ?>');" title="<?php echo e(__('common_copy')); ?>"><i class="fas fa-copy"></i></button>
                    </div>
                    <?php endforeach; ?>
                </div>

                <!-- White-label explainer -->
                <p class="db-ns-hint"><?php echo __('reseller_ns_whitelabel', ['tutorial' => '<a href="#" onclick="event.preventDefault(); DashToast.show(\'info\',\'\',\'' . e(__('cpanel_tutorial_coming')) . '\');">' . e(__('reseller_ns_tutorial')) . '</a>']); ?></p>

                <!-- Row 2: IPv4 + IPv6 per server -->
                <div class="db-ns-grid db-ns-grid--ips">
                    <?php foreach ($rs_nameservers as $ns): ?>
                    <div class="db-ns-ip-cell">
                        <div class="db-ns-ip">
                            <strong>IPv4:</strong>
                            <span class="db-table-cell-mono"><?php echo e($ns['ipv4']); ?></span>
                            <button type="button" class="db-icon-copy" onclick="DashCopy && DashCopy(this,'<?php echo e($ns['ipv4']); ?>');" title="<?php echo e(__('common_copy')); ?>"><i class="fas fa-copy"></i></button>
                        </div>
                        <div class="db-ns-ip">
                            <strong>IPv6:</strong>
                            <span class="db-table-cell-mono"><?php echo e($ns['ipv6']); ?></span>
                            <button type="button" class="db-icon-copy" onclick="DashCopy && DashCopy(this,'<?php echo e($ns['ipv6']); ?>');" title="<?php echo e(__('common_copy')); ?>"><i class="fas fa-copy"></i></button>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        <!-- Notes card -->
        <div class="db-card db-mt">
            <div class="db-card-header db-card-header--md">
                <h3 class="db-card-title"><i class="fas fa-circle-info db-card-title-icon"></i> <?php echo e(__('reseller_ns_notes')); ?></h3>
            </div>
            <div class="db-card-body">
                <div class="db-notice db-notice--info">
                    <i class="fas fa-circle-minus"></i>
                    <span><?php echo e(__('reseller_ns_notes_1')); ?></span>
                </div>
            </div>
        </div>
    </div>

    <!-- ═══ DOMAINS ═══ -->
    <div class="db-tab-pane" data-tab-pane="domains">
        <div class="db-card">
            <div class="db-card-header db-card-header--md">
                <h3 class="db-card-title"><i class="fas fa-globe db-card-title-icon"></i> <?php echo e(__('reseller_domains_all')); ?></h3>
            </div>
            <div class="db-card-body--table">
                <div class="db-table-wrapper">
                    <table class="db-table">
                        <thead><tr>
                            <th><?php echo e(__('cpanel_domain')); ?></th>
                            <th><?php echo e(__('reseller_col_owner')); ?></th>
                        </tr></thead>
                        <tbody>
                            <?php foreach ($rs_domains as $d): ?>
                            <tr>
                                <td><a href="https://<?php echo e($d['domain']); ?>" target="_blank" rel="noopener" class="db-table-cell-link"><?php echo e($d['domain']); ?></a></td>
                                <td><span class="db-table-cell-mono"><?php echo e($d['owner']); ?></span></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- ═══ BILLING ═══ -->
    <div class="db-tab-pane" data-tab-pane="billing">
        <?php
        $rs_reg_date     = '20/04/2026';
        $rs_days_total   = 30;
        $rs_days_left    = 29;
        $rs_days_elapsed = $rs_days_total - $rs_days_left;
        $rs_progress     = max(0, min(100, round(($rs_days_elapsed / max(1, $rs_days_total)) * 100)));

        $rs_total_paid    = 0;
        $rs_total_pending = 0;
        foreach ($rs_invoices as $rs_inv) {
            if ($rs_inv['status'] === 'paid') { $rs_total_paid += (float)$rs_inv['amount']; }
            else { $rs_total_pending += (float)$rs_inv['amount']; }
        }
        ?>

        <!-- Summary strip (same pattern as cPanel billing) -->
        <div class="db-billing-summary-strip">
            <div class="db-billing-summary-strip__item">
                <span class="db-billing-summary-strip__label"><i class="fas fa-check-double"></i> <?php echo e(__('cpanel_billing_lifetime_paid')); ?></span>
                <span class="db-billing-summary-strip__value"><?php echo format_money($rs_total_paid); ?></span>
            </div>
            <div class="db-billing-summary-strip__item<?php echo $rs_total_pending > 0 ? ' db-billing-summary-strip__item--warn' : ''; ?>">
                <span class="db-billing-summary-strip__label"><i class="fas fa-hourglass-half"></i> <?php echo e(__('cpanel_billing_outstanding')); ?></span>
                <span class="db-billing-summary-strip__value"><?php echo format_money($rs_total_pending); ?></span>
            </div>
            <div class="db-billing-summary-strip__item">
                <span class="db-billing-summary-strip__label"><i class="fas fa-calendar-day"></i> <?php echo e(__('cpanel_billing_next_due')); ?></span>
                <span class="db-billing-summary-strip__value"><?php echo e($rs['due_date']); ?></span>
            </div>
        </div>

        <h3 class="db-srv-section-title db-srvd-inner--mt-md"><?php echo e(__('cpanel_billing_info')); ?></h3>
        <div class="db-billing-facts">
            <div class="db-billing-fact">
                <span class="db-billing-fact__icon" style="--fact-color: var(--brand-primary);"><i class="fas fa-calendar-check"></i></span>
                <div>
                    <div class="db-billing-fact__label"><?php echo e(__('cpanel_bf_reg')); ?></div>
                    <div class="db-billing-fact__value"><?php echo e($rs_reg_date); ?></div>
                </div>
            </div>
            <div class="db-billing-fact">
                <span class="db-billing-fact__icon" style="--fact-color: rgb(var(--seed-0));"><i class="fas fa-clock"></i></span>
                <div>
                    <div class="db-billing-fact__label"><?php echo e(__('cpanel_bf_cycle')); ?></div>
                    <div class="db-billing-fact__value"><?php echo e($rs['cycle']); ?></div>
                </div>
            </div>
            <div class="db-billing-fact">
                <span class="db-billing-fact__icon" style="--fact-color: var(--brand-warning);"><i class="fas fa-euro-sign"></i></span>
                <div>
                    <div class="db-billing-fact__label"><?php echo e(__('cpanel_bf_renewal')); ?></div>
                    <div class="db-billing-fact__value"><?php echo format_money($rs['amount']); ?></div>
                </div>
            </div>
            <div class="db-billing-fact">
                <span class="db-billing-fact__icon" style="--fact-color: var(--brand-error);"><i class="fas fa-calendar-xmark"></i></span>
                <div>
                    <div class="db-billing-fact__label"><?php echo e(__('cpanel_bf_due')); ?></div>
                    <div class="db-billing-fact__value"><?php echo e($rs['due_date']); ?></div>
                </div>
            </div>
        </div>

        <div class="db-billing-progress">
            <span class="db-billing-progress__icon"><i class="fas fa-calendar-day"></i></span>
            <div class="db-billing-progress__bar">
                <span class="db-billing-progress__fill" style="width: <?php echo (int)$rs_progress; ?>%;"></span>
                <span class="db-billing-progress__bubble" style="left: <?php echo (int)$rs_progress; ?>%;">
                    <?php echo e(__('cpanel_bf_days_left', ['n' => (int)$rs_days_left])); ?>
                </span>
            </div>
        </div>

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
            <div class="db-billing-tool">
                <div>
                    <strong><?php echo e(__('cpanel_bt_renew_now_title')); ?></strong>
                    <span><?php echo e(__('cpanel_bt_renew_now_desc')); ?></span>
                </div>
                <button class="db-btn db-btn--primary db-btn--sm"
                        onclick="DashToast.show('success','','<?php echo e(__('cpanel_bt_renew_now_queued')); ?>')">
                    <i class="fas fa-arrow-rotate-right"></i> <?php echo e(__('dom_renew_now')); ?>
                </button>
            </div>
            <div class="db-billing-tool">
                <div>
                    <strong><?php echo e(__('cpanel_bt_change_cycle_title')); ?></strong>
                    <span><?php echo e(__('cpanel_bt_change_cycle_desc')); ?></span>
                </div>
                <button class="db-btn db-btn--secondary db-btn--sm"
                        onclick="DashToast.show('info','','<?php echo e(__('cpanel_bt_change_cycle_soon')); ?>')">
                    <i class="fas fa-calendar-days"></i> <?php echo e(__('cpanel_bt_change_cycle_btn')); ?>
                </button>
            </div>
        </div>

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
                            <th class="db-table-cell--right"><?php echo e(__('keys_col_amount')); ?></th>
                            <th><?php echo e(__('common_status')); ?></th>
                        </tr></thead>
                        <tbody>
                            <?php foreach ($rs_invoices as $inv): ?>
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
        <?php
        // MOCK — Reseller upgrade tiers. Each tier matches a WHM plan sold in
        // the main catalog. Backend: pull real packages from the catalog and
        // flag `is_current` based on the service's current plan id.
        $rs_upgrade_packages = [
            ['id' => 'RS-STR', 'name' => __('reseller_up_pkg_starter'), 'storage' => '15 GB',  'accounts' => 15, 'cpu' => '1.5', 'ram' => '2 GB',  'price_m' => 3.49,  'is_current' => ($rs['amount'] < 10)],
            ['id' => 'RS-GRW', 'name' => __('reseller_up_pkg_growth'),  'storage' => '40 GB',  'accounts' => 40, 'cpu' => '2',   'ram' => '4 GB',  'price_m' => 9.99,  'is_current' => ($rs['amount'] >= 10 && $rs['amount'] < 30), 'is_featured' => true],
            ['id' => 'RS-PRO', 'name' => __('reseller_up_pkg_pro'),     'storage' => '100 GB', 'accounts' => 100,'cpu' => '4',   'ram' => '8 GB',  'price_m' => 19.99, 'is_current' => ($rs['amount'] >= 30 && $rs['amount'] < 80)],
            ['id' => 'RS-MAS', 'name' => __('reseller_up_pkg_master'),  'storage' => '250 GB', 'accounts' => '∞','cpu' => '8',   'ram' => '16 GB', 'price_m' => 49.99, 'is_current' => ($rs['amount'] >= 80)],
        ];
        ?>
        <div class="db-card">
            <div class="db-card-header db-card-header--md">
                <h3 class="db-card-title"><i class="fas fa-arrow-up-right-dots db-card-title-icon"></i> <?php echo e(__('cpanel_tab_upgrade')); ?></h3>
                <p class="db-card-subtitle"><?php echo e(__('reseller_upgrade_sub')); ?></p>
            </div>
            <div class="db-card-body">
                <div class="db-notice db-notice--info">
                    <i class="fas fa-circle-info"></i>
                    <span><?php echo e(__('reseller_upgrade_hint')); ?></span>
                </div>

                <!-- Current plan summary -->
                <div class="db-srvd-current-pkg db-srvd-inner--mt-md">
                    <div class="db-srvd-current-pkg__label">
                        <i class="fas fa-crown"></i>
                        <?php echo e(__('cpanel_upgrade_current_pkg')); ?>
                    </div>
                    <div class="db-srvd-current-pkg__name"><?php echo e($rs['plan']); ?></div>
                    <div class="db-srvd-current-pkg__meta">
                        <span><?php echo e($rs['cycle']); ?></span>
                        <span class="db-srvd-current-pkg__price"><?php echo format_money($rs['amount']); ?>/<?php echo e(strtolower(substr($rs['cycle'], 0, 2))); ?></span>
                    </div>
                </div>

                <!-- Available reseller tiers — same visual language as Cloud/Servers -->
                <h4 class="db-srv-section-title db-srvd-inner--mt-md"><?php echo e(__('reseller_upgrade_packages_title')); ?></h4>
                <div class="db-package-grid">
                    <?php foreach ($rs_upgrade_packages as $pkg): ?>
                    <div class="db-package-card<?php echo !empty($pkg['is_featured']) ? ' is-featured' : ''; ?><?php echo !empty($pkg['is_current']) ? ' is-current is-selected' : ''; ?>">
                        <div class="db-package-card__head">
                            <div class="db-package-card__id">
                                <?php echo e($pkg['name']); ?>
                                <?php if (!empty($pkg['is_current'])): ?>
                                <span class="db-package-card__ribbon db-package-card__ribbon--current"><i class="fas fa-circle-check"></i> <?php echo e(__('cpanel_upgrade_current_label')); ?></span>
                                <?php elseif (!empty($pkg['is_featured'])): ?>
                                <span class="db-package-card__ribbon"><i class="fas fa-star"></i> <?php echo e(__('create_package_popular')); ?></span>
                                <?php endif; ?>
                            </div>
                            <div class="db-package-card__price">
                                <span class="db-package-card__price-m"><?php echo format_money($pkg['price_m']); ?><small>/m</small></span>
                            </div>
                        </div>
                        <div class="db-package-card__specs">
                            <span class="db-package-spec db-package-spec--accent"><?php echo e($pkg['cpu']); ?> <?php echo e(__('create_pkg_cores')); ?></span>
                            <span class="db-package-spec db-package-spec--accent"><?php echo e($pkg['ram']); ?> RAM</span>
                            <span class="db-package-spec db-package-spec--accent"><?php echo e($pkg['storage']); ?></span>
                        </div>
                        <div class="db-package-card__specs">
                            <span class="db-package-spec db-package-spec--info"><?php echo e($pkg['accounts']); ?> <?php echo e(__('reseller_up_spec_accounts')); ?></span>
                            <span class="db-package-spec db-package-spec--primary">WHM</span>
                            <span class="db-package-spec db-package-spec--primary"><?php echo e(__('reseller_up_spec_whitelabel')); ?></span>
                        </div>
                        <?php if (empty($pkg['is_current'])): ?>
                        <button class="db-btn db-btn--primary db-btn--sm db-srvd-inner--mt-md db-btn--full"
                                onclick="DashToast.show('info','', '<?php echo e(__('cpanel_upgrade_queued')); ?>')">
                            <i class="fas fa-arrow-up-right-dots"></i> <?php echo e(__('cpanel_upgrade_switch_to', ['pkg' => $pkg['name']])); ?>
                        </button>
                        <?php endif; ?>
                    </div>
                    <?php endforeach; ?>
                </div>

                <!-- Reseller-specific notes -->
                <div class="db-srvd-notice-list db-srvd-inner--mt-md">
                    <ul class="db-srvd-notice-list">
                        <li><i class="fas fa-circle"></i> <?php echo e(__('reseller_upgrade_note_1')); ?></li>
                        <li><i class="fas fa-circle"></i> <?php echo e(__('reseller_upgrade_note_2')); ?></li>
                        <li class="db-srvd-notice--warn"><i class="fas fa-circle"></i> <?php echo e(__('reseller_upgrade_note_3')); ?></li>
                    </ul>
                </div>

                <div class="db-srvd-inner--mt-md">
                    <a href="<?php echo DASH_BASE_PATH; ?>/pages/services/order.php" class="db-btn db-btn--secondary">
                        <i class="fas fa-cart-plus"></i> <?php echo e(__('cpanel_upgrade_browse')); ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="db-toast-container" id="toastContainer"></div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    var toggle = document.getElementById('rsPwdToggle');
    var eye    = document.getElementById('rsPwdEye');
    var text   = document.getElementById('rsPwdText');
    var real   = document.getElementById('rsPwdReal');
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
