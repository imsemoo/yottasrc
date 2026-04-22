<?php
/**
 * YottaSrc Dashboard — Domain Details
 * =====================================
 * Single-domain detail view. Mirrors the Server Details pattern:
 *   hero with status pill + quick actions → stat strip → tabbed panels.
 *
 * Tabs:
 *   1. Overview      — key dates + registrant glance + auto-renew + lock
 *   2. DNS           — record table (A, AAAA, CNAME, MX, TXT, …)
 *   3. Nameservers   — authoritative name servers + change action
 *   4. WHOIS         — public registrant, admin, tech contacts
 *   5. Settings      — transfer out, privacy, DNSSEC, delete
 *
 * Page states (?state=active|loading|error):
 *   active   — populated (default)
 *   loading  — skeletons
 *   error    — retry card
 *
 * Deep link per domain: ?domain=yottasrc.com (matches a mock entry).
 */

$nav_active_override = 'domains';

require_once __DIR__ . '/../../layouts/config.php';

/* ══════════════════════════════════════════════════════════════════════
   ███  DOMAIN DETAILS  ·  MOCK DATA BLOCK  (single source of truth)  ███
   ══════════════════════════════════════════════════════════════════════
   BACKEND TEAM — PLEASE READ:

   This page shows a single domain. The mock below is a REGISTRY
   (keyed by domain name) so ?domain=example.com deep-links work for
   demos. In production, replace with a single DB lookup for the
   requested name and populate $domain directly.

   Each $domain entry shape:
     • name            → full domain name
     • tld             → TLD extension ('.com', …)
     • registrar       → registrar label
     • registered      → registration date 'YYYY-MM-DD'
     • expires         → expiration  date 'YYYY-MM-DD'
     • auto_renew      → bool
     • status          → 'active' | 'expiring' | 'expired' | 'pending'
     • locked          → bool (transfer lock)
     • privacy         → bool (WHOIS privacy)
     • dnssec          → bool
     • price           → renewal price (float)
     • nameservers     → array of NS hosts
     • seed            → 0-3 (per-domain accent color seed)
     • registrant      → ['name','org','email','country']
     • dns             → array of DNS records (type/name/value/ttl)

   Auto-computed below: $is_active / $is_expiring / $is_expired / $days_left.
   ══════════════════════════════════════════════════════════════════════ */

// Domain registry — backend replaces with a DB lookup on $_GET['domain'].
$__domains = [
    'yottasrc.com' => [
        'name' => 'yottasrc.com', 'tld' => '.com', 'registrar' => 'YottaSrc',
        'registered' => '2024-03-15', 'expires' => '2027-03-15',
        'auto_renew' => true, 'status' => 'active', 'locked' => true,
        'privacy' => true, 'dnssec' => true,
        'price' => 12.99,
        'nameservers' => ['ns1.yottasrc.com', 'ns2.yottasrc.com', 'ns3.yottasrc.com'],
        'epp' => 'Y0tTa-SRC!22-EPPx-9F4z',
        'glue' => [
            ['host' => 'ns1.yottasrc.com', 'ipv4' => '185.225.49.42',  'ipv6' => '2a06:8ec0::1234'],
            ['host' => 'ns2.yottasrc.com', 'ipv4' => '51.222.18.77',   'ipv6' => ''],
        ],
        'seed' => 0,
        'registrant' => ['name' => 'Islam Diab', 'org' => 'YottaSrc', 'email' => 'tak***@gmail.com', 'country' => 'EG'],
        'dns' => [
            ['type' => 'A',     'name' => '@',   'value' => '185.225.49.42',         'ttl' => 3600],
            ['type' => 'A',     'name' => 'www', 'value' => '185.225.49.42',         'ttl' => 3600],
            ['type' => 'AAAA',  'name' => '@',   'value' => '2a06:8ec0::1234',       'ttl' => 3600],
            ['type' => 'CNAME', 'name' => 'api', 'value' => 'api.yottasrc.net.',     'ttl' => 1800],
            ['type' => 'MX',    'name' => '@',   'value' => '10 mail.yottasrc.com.', 'ttl' => 3600],
            ['type' => 'TXT',   'name' => '@',   'value' => 'v=spf1 include:_spf.yottasrc.com ~all', 'ttl' => 3600],
        ],
    ],
    'designhub.io' => [
        'name' => 'designhub.io', 'tld' => '.io', 'registrar' => 'YottaSrc',
        'registered' => '2025-01-10', 'expires' => '2026-01-10',
        'auto_renew' => true, 'status' => 'active', 'locked' => true,
        'privacy' => true, 'dnssec' => false,
        'price' => 29.99,
        'nameservers' => ['ns1.yottasrc.com', 'ns2.yottasrc.com'],
        'seed' => 1,
        'registrant' => ['name' => 'Islam Diab', 'org' => '—', 'email' => 'tak***@gmail.com', 'country' => 'EG'],
        'epp' => 'D3Hub-iO77!-EPPa-42xK',
        'glue' => [],
        'dns' => [
            ['type' => 'A',    'name' => '@',   'value' => '107.161.174.200', 'ttl' => 3600],
            ['type' => 'CNAME','name' => 'www', 'value' => 'designhub.io.',   'ttl' => 3600],
        ],
    ],
    'example-shop.net' => [
        'name' => 'example-shop.net', 'tld' => '.net', 'registrar' => 'YottaSrc',
        'registered' => '2023-06-20', 'expires' => '2026-04-20',
        'auto_renew' => false, 'status' => 'expiring', 'locked' => false,
        'privacy' => false, 'dnssec' => false,
        'price' => 10.99,
        'nameservers' => ['ns1.externalns.com', 'ns2.externalns.com'],
        'seed' => 2,
        'registrant' => ['name' => 'Islam Diab', 'org' => 'Example Shop', 'email' => 'shop@example.com', 'country' => 'EG'],
        'epp' => 'Sh0P-EXMP!-EPPv-7TnW',
        'glue' => [],
        'dns' => [
            ['type' => 'A',    'name' => '@',     'value' => '51.222.18.77',      'ttl' => 3600],
            ['type' => 'A',    'name' => 'www',   'value' => '51.222.18.77',      'ttl' => 3600],
            ['type' => 'MX',   'name' => '@',     'value' => '10 mx1.example.net.', 'ttl' => 3600],
        ],
    ],
    'oldsite.org' => [
        'name' => 'oldsite.org', 'tld' => '.org', 'registrar' => 'YottaSrc',
        'registered' => '2022-02-01', 'expires' => '2026-02-01',
        'auto_renew' => false, 'status' => 'expired', 'locked' => false,
        'privacy' => false, 'dnssec' => false,
        'price' => 14.99,
        'nameservers' => ['ns1.oldhost.com', 'ns2.oldhost.com'],
        'seed' => 3,
        'registrant' => ['name' => 'Islam Diab', 'org' => '—', 'email' => 'old@example.com', 'country' => 'EG'],
        'epp' => 'OldS1-T3OR!-EPPq-1PmZ',
        'glue' => [],
        'dns' => [],
    ],
];

/* ══════════════  END OF MOCK DATA  ══════════════ */

// Resolve which domain to show (deep-link via ?domain=…).
$__d_key  = strtolower($_GET['domain'] ?? 'yottasrc.com');
$domain   = $__domains[$__d_key] ?? reset($__domains);

// Auto-computed status helpers.
$is_active   = $domain['status'] === 'active';
$is_expiring = $domain['status'] === 'expiring';
$is_expired  = $domain['status'] === 'expired';

// Days until expiry (mock uses fixed "today"; backend: use real time()).
$__now_ts     = strtotime('2026-04-17');
$__expires_ts = strtotime($domain['expires']);
$days_left    = max(-9999, floor(($__expires_ts - $__now_ts) / 86400));

$page_title = $domain['name'] . ' — ' . __('domains_title') . ' — ' . SITE_NAME;
$breadcrumbs_data = [
    ['label' => __('nav_dashboard'), 'url' => DASH_BASE_PATH . '/'],
    ['label' => __('domains_title'), 'url' => DASH_BASE_PATH . '/pages/domains/index.php'],
    ['label' => $domain['name'],      'url' => null],
];

require_once __DIR__ . '/../../layouts/shell.php';

$page_state = $_GET['state'] ?? 'active';

// Status → DS-eyebrow variant mapping
$status_variant = [
    'active'   => 'success',
    'expiring' => 'warning',
    'expired'  => 'danger',
    'pending'  => 'warning',
];
$st_var = $status_variant[$domain['status']] ?? 'warning';
?>

<?php if ($page_state === 'error'): ?>
    <div class="db-card"><?php $error_retry = true; include __DIR__ . '/../../components/error-state.php'; ?></div>

<?php elseif ($page_state === 'loading'): ?>
    <div class="db-skeleton" style="height:140px; border-radius:var(--radius-lg); margin-bottom:18px;"></div>
    <div style="display:grid; grid-template-columns:repeat(4, 1fr); gap:12px; margin-bottom:18px;">
        <?php for ($i = 0; $i < 4; $i++): ?>
        <div class="db-skeleton" style="height:92px; border-radius:var(--radius-md);"></div>
        <?php endfor; ?>
    </div>
    <div class="db-skeleton" style="height:320px; border-radius:var(--radius-lg);"></div>

<?php else: ?>

<!-- ═══════════════════════════════════════════
     HERO — domain identity + status + actions
     ═══════════════════════════════════════════ -->
<section class="ds-hero ds-hero--seeded<?php echo $is_expired ? ' ds-hero--danger' : ''; ?>" style="--hero-seed: var(--seed-<?php echo (int)$domain['seed']; ?>);">
    <div class="ds-hero__top">
        <div class="ds-hero__identity">
            <div class="ds-hero__avatar ds-hero__avatar--glyph">
                <i class="fas fa-globe"></i>
            </div>
            <div class="ds-hero__title-block">
                <div class="ds-hero__meta-top">
                    <span class="ds-eyebrow ds-eyebrow--<?php echo e($st_var); ?>">
                        <span class="ds-status-dot"></span>
                        <?php echo e(__('domain_status_' . $domain['status'])); ?>
                    </span>
                    <span class="ds-hero__meta-sep">·</span>
                    <span class="db-dom-tld"><?php echo e($domain['tld']); ?></span>
                    <span class="ds-hero__meta-sep">·</span>
                    <span><?php echo e($domain['registrar']); ?></span>
                </div>
                <h1 class="ds-hero__title"><?php echo e($domain['name']); ?></h1>
                <div class="ds-hero__meta">
                    <span class="ds-hero__meta-item">
                        <i class="fas fa-calendar-plus"></i>
                        <?php echo e(__('dom_registered')); ?> <strong><?php echo e($domain['registered']); ?></strong>
                    </span>
                    <span class="ds-hero__meta-item">
                        <i class="fas fa-calendar-check"></i>
                        <?php echo e(__('dom_expires')); ?> <strong><?php echo e($domain['expires']); ?></strong>
                    </span>
                    <span class="ds-hero__meta-item">
                        <i class="fas fa-<?php echo $domain['locked'] ? 'lock' : 'lock-open'; ?>"></i>
                        <?php echo e($domain['locked'] ? __('dom_locked') : __('dom_unlocked')); ?>
                    </span>
                </div>
            </div>
        </div>

        <div class="ds-hero__actions">
            <?php if ($is_expired || $is_expiring): ?>
            <button type="button" class="ds-btn ds-btn--primary" onclick="DashToast.show('info','','<?php echo e(__('dom_renewing_toast')); ?>')">
                <i class="fas fa-rotate-right"></i>
                <span><?php echo e(__('dom_renew_now')); ?></span>
            </button>
            <?php endif; ?>
            <a href="<?php echo e(DASH_BASE_PATH . '/pages/domains/details.php?domain=' . urlencode($domain['name']) . '#tab-dns'); ?>" class="ds-btn<?php echo ($is_active && !$is_expiring) ? ' ds-btn--primary' : ''; ?>">
                <i class="fas fa-server"></i>
                <span><?php echo e(__('dom_manage_dns')); ?></span>
            </a>
            <div class="db-dropdown-wrapper">
                <button class="ds-btn" data-dropdown-toggle>
                    <i class="fas fa-bolt"></i>
                    <span><?php echo e(__('dom_actions')); ?></span>
                    <i class="fas fa-chevron-down ds-btn__chev"></i>
                </button>
                <div class="db-dropdown-menu">
                    <button class="db-dropdown-item" onclick="DashToast.show('info','','<?php echo e(__('dom_action_transfer_toast')); ?>')">
                        <i class="fas fa-right-left"></i> <?php echo e(__('dom_transfer_out')); ?>
                    </button>
                    <button class="db-dropdown-item" onclick="DashModal.open('domEppModal')">
                        <i class="fas fa-key"></i> <?php echo e(__('dom_get_epp')); ?>
                    </button>
                    <button class="db-dropdown-item" onclick="DashToast.show('info','','<?php echo e(__('dom_action_contacts_toast')); ?>')">
                        <i class="fas fa-user"></i> <?php echo e(__('dom_edit_contacts')); ?>
                    </button>
                    <div class="db-dropdown-divider"></div>
                    <button class="db-dropdown-item db-dropdown-item--danger" onclick="DashModal.open('domDeleteModal')">
                        <i class="fas fa-trash"></i> <?php echo e(__('dom_delete_domain')); ?>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Stat strip (glass tiles inside the hero) -->
    <div class="ds-hero__stats">
        <div class="ds-stat-grid">
            <?php
            $__days_label = $days_left < 0
                ? __('dom_days_expired')
                : ($days_left === 0 ? __('dom_today') : __('dom_days_left'));
            $__days_value = $days_left < 0 ? abs($days_left) : $days_left;
            $__days_seed  = $is_expired ? 3 : ($days_left < 60 ? 2 : 1);
            ?>
            <div class="ds-stat ds-stat--glass" style="--stat-seed: var(--seed-<?php echo $__days_seed; ?>);">
                <div class="ds-stat__head">
                    <span class="ds-stat__label"><i class="fas fa-hourglass-half"></i> <?php echo e($__days_label); ?></span>
                </div>
                <div class="ds-stat__value">
                    <span class="ds-stat__num"><?php echo e($__days_value); ?></span>
                    <span class="ds-stat__unit"><?php echo e(__('dom_days')); ?></span>
                </div>
                <div class="ds-stat__sub"><?php echo e($domain['expires']); ?></div>
            </div>

            <div class="ds-stat ds-stat--glass" style="--stat-seed: var(--seed-0);">
                <div class="ds-stat__head">
                    <span class="ds-stat__label"><i class="fas fa-list"></i> <?php echo e(__('dom_dns_records')); ?></span>
                </div>
                <div class="ds-stat__value">
                    <span class="ds-stat__num"><?php echo count($domain['dns']); ?></span>
                </div>
                <div class="ds-stat__sub"><?php echo e(__('dom_across_types')); ?></div>
            </div>

            <div class="ds-stat ds-stat--glass" style="--stat-seed: var(--seed-1);">
                <div class="ds-stat__head">
                    <span class="ds-stat__label"><i class="fas fa-network-wired"></i> <?php echo e(__('dom_nameservers')); ?></span>
                </div>
                <div class="ds-stat__value">
                    <span class="ds-stat__num"><?php echo count($domain['nameservers']); ?></span>
                </div>
                <div class="ds-stat__sub"><?php echo e(__('dom_authoritative')); ?></div>
            </div>

            <div class="ds-stat ds-stat--glass" style="--stat-seed: var(--seed-<?php echo $domain['auto_renew'] ? 1 : 3; ?>);">
                <div class="ds-stat__head">
                    <span class="ds-stat__label"><i class="fas fa-rotate"></i> <?php echo e(__('dom_auto_renew')); ?></span>
                </div>
                <div class="ds-stat__value">
                    <span class="ds-stat__num ds-stat__num--compact"><?php echo e($domain['auto_renew'] ? __('dom_on') : __('dom_off')); ?></span>
                </div>
                <div class="ds-stat__sub"><?php echo e($domain['auto_renew'] ? __('dom_autorenew_on_sub') : __('dom_autorenew_off_sub')); ?></div>
            </div>
        </div>
    </div>
</section>


<!-- ═══ TAB BAR ═══ -->
<div class="db-tab-bar" data-tab-bar data-tab-content="#domTabs">
    <button type="button" class="db-tab-bar__btn is-active" data-tab-target="overview"><i class="fas fa-table-cells"></i> <?php echo e(__('dom_tab_overview')); ?></button>
    <button type="button" class="db-tab-bar__btn" data-tab-target="dns"><i class="fas fa-server"></i> <?php echo e(__('dom_tab_dns')); ?> <span class="db-tab-bar__count"><?php echo count($domain['dns']); ?></span></button>
    <button type="button" class="db-tab-bar__btn" data-tab-target="nameservers"><i class="fas fa-network-wired"></i> <?php echo e(__('dom_tab_nameservers')); ?></button>
    <button type="button" class="db-tab-bar__btn" data-tab-target="glue"><i class="fas fa-link"></i> <?php echo e(__('dom_tab_glue')); ?> <span class="db-tab-bar__count"><?php echo count($domain['glue']); ?></span></button>
    <button type="button" class="db-tab-bar__btn" data-tab-target="whois"><i class="fas fa-circle-info"></i> <?php echo e(__('dom_tab_whois')); ?></button>
    <button type="button" class="db-tab-bar__btn" data-tab-target="settings"><i class="fas fa-gear"></i> <?php echo e(__('dom_tab_settings')); ?></button>
</div>

<div id="domTabs">

    <!-- ═══ OVERVIEW ═══ -->
    <div class="db-tab-pane is-active" data-tab-pane="overview">
        <div class="db-dom-grid">
            <!-- Key dates card -->
            <div class="ds-section">
                <div class="ds-section__head">
                    <h3 class="ds-section__title">
                        <span class="ds-section__icon"><i class="fas fa-calendar"></i></span>
                        <?php echo e(__('dom_key_dates')); ?>
                    </h3>
                    <p class="ds-section__sub"><?php echo e(__('dom_key_dates_sub')); ?></p>
                </div>
                <dl class="db-dom-kv">
                    <div class="db-dom-kv__row">
                        <dt><?php echo e(__('dom_registered')); ?></dt>
                        <dd><?php echo e($domain['registered']); ?></dd>
                    </div>
                    <div class="db-dom-kv__row">
                        <dt><?php echo e(__('dom_expires')); ?></dt>
                        <dd><?php echo e($domain['expires']); ?> <span class="db-dom-kv__hint"><?php echo e($days_left >= 0 ? '(' . $days_left . ' ' . __('dom_days') . ')' : ''); ?></span></dd>
                    </div>
                    <div class="db-dom-kv__row">
                        <dt><?php echo e(__('dom_renewal_price')); ?></dt>
                        <dd><?php echo format_money($domain['price']); ?> / <?php echo e(__('dom_year')); ?></dd>
                    </div>
                </dl>
            </div>

            <!-- Protection card -->
            <div class="ds-section">
                <div class="ds-section__head">
                    <h3 class="ds-section__title">
                        <span class="ds-section__icon"><i class="fas fa-shield-halved"></i></span>
                        <?php echo e(__('dom_protection')); ?>
                    </h3>
                    <p class="ds-section__sub"><?php echo e(__('dom_protection_sub')); ?></p>
                </div>
                <div class="db-dom-toggles">
                    <label class="db-dom-toggle">
                        <div class="db-dom-toggle__body">
                            <strong><?php echo e(__('dom_auto_renew')); ?></strong>
                            <span><?php echo e(__('dom_auto_renew_desc')); ?></span>
                        </div>
                        <span class="db-toggle">
                            <input type="checkbox" <?php echo $domain['auto_renew'] ? 'checked' : ''; ?> onchange="DashToast.show('success','', this.checked ? '<?php echo e(__('dom_autorenew_on_toast')); ?>' : '<?php echo e(__('dom_autorenew_off_toast')); ?>')">
                            <span class="db-toggle-track"><span class="db-toggle-thumb"></span></span>
                        </span>
                    </label>
                    <label class="db-dom-toggle">
                        <div class="db-dom-toggle__body">
                            <strong><?php echo e(__('dom_transfer_lock')); ?></strong>
                            <span><?php echo e(__('dom_transfer_lock_desc')); ?></span>
                        </div>
                        <span class="db-toggle">
                            <input type="checkbox" <?php echo $domain['locked'] ? 'checked' : ''; ?> onchange="DashToast.show('success','', this.checked ? '<?php echo e(__('dom_lock_on_toast')); ?>' : '<?php echo e(__('dom_lock_off_toast')); ?>')">
                            <span class="db-toggle-track"><span class="db-toggle-thumb"></span></span>
                        </span>
                    </label>
                    <label class="db-dom-toggle">
                        <div class="db-dom-toggle__body">
                            <strong><?php echo e(__('dom_whois_privacy')); ?></strong>
                            <span><?php echo e(__('dom_whois_privacy_desc')); ?></span>
                        </div>
                        <span class="db-toggle">
                            <input type="checkbox" <?php echo $domain['privacy'] ? 'checked' : ''; ?> onchange="DashToast.show('success','', this.checked ? '<?php echo e(__('dom_privacy_on_toast')); ?>' : '<?php echo e(__('dom_privacy_off_toast')); ?>')">
                            <span class="db-toggle-track"><span class="db-toggle-thumb"></span></span>
                        </span>
                    </label>
                    <label class="db-dom-toggle">
                        <div class="db-dom-toggle__body">
                            <strong>DNSSEC</strong>
                            <span><?php echo e(__('dom_dnssec_desc')); ?></span>
                        </div>
                        <span class="db-toggle">
                            <input type="checkbox" <?php echo $domain['dnssec'] ? 'checked' : ''; ?> onchange="DashToast.show('success','', this.checked ? '<?php echo e(__('dom_dnssec_on_toast')); ?>' : '<?php echo e(__('dom_dnssec_off_toast')); ?>')">
                            <span class="db-toggle-track"><span class="db-toggle-thumb"></span></span>
                        </span>
                    </label>
                </div>
            </div>
        </div>
    </div>

    <!-- ═══ DNS RECORDS ═══ -->
    <div class="db-tab-pane" data-tab-pane="dns">
        <div class="ds-section">
            <div class="ds-section__head ds-section__head--row">
                <div>
                    <h3 class="ds-section__title">
                        <span class="ds-section__icon"><i class="fas fa-server"></i></span>
                        <?php echo e(__('dom_dns_records')); ?>
                    </h3>
                    <p class="ds-section__sub"><?php echo e(__('dom_dns_sub')); ?></p>
                </div>
                <button type="button" class="ds-btn ds-btn--primary ds-btn--sm" onclick="openDnsModal('add')">
                    <i class="fas fa-plus"></i>
                    <span><?php echo e(__('dom_add_record')); ?></span>
                </button>
            </div>

            <?php if (empty($domain['dns'])): ?>
            <?php
            $es_icon    = 'fa-server';
            $es_title   = __('dom_dns_empty_title');
            $es_desc    = __('dom_dns_empty_desc');
            $es_action  = null;
            $es_compact = true;
            $es_no_wrap = true;
            include __DIR__ . '/../../components/empty-state.php';
            ?>
            <?php else: ?>
            <div class="db-table-wrapper">
                <table class="db-table" id="domDnsTable" data-table-tools>
                    <thead>
                        <tr>
                            <th style="width:100px;"><?php echo e(__('dom_dns_type')); ?></th>
                            <th><?php echo e(__('dom_dns_name')); ?></th>
                            <th><?php echo e(__('dom_dns_value')); ?></th>
                            <th style="width:90px;"><?php echo e(__('dom_dns_ttl')); ?></th>
                            <th style="width:56px;"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($domain['dns'] as $rec): ?>
                        <tr data-row
                            data-dns-type="<?php echo e($rec['type']); ?>"
                            data-dns-name="<?php echo e($rec['name']); ?>"
                            data-dns-value="<?php echo e($rec['value']); ?>"
                            data-dns-ttl="<?php echo e($rec['ttl']); ?>">
                            <td><span class="db-dom-rec-type db-dom-rec-type--<?php echo e(strtolower($rec['type'])); ?>"><?php echo e($rec['type']); ?></span></td>
                            <td class="db-dom-mono"><?php echo e($rec['name']); ?></td>
                            <td class="db-dom-mono db-dom-value"><?php echo e($rec['value']); ?></td>
                            <td class="db-dom-mono"><?php echo e($rec['ttl']); ?></td>
                            <td>
                                <div class="db-dropdown-wrapper">
                                    <button class="db-row-action db-row-action--solid db-row-action--menu" data-dropdown-toggle><i class="fas fa-ellipsis-vertical"></i></button>
                                    <div class="db-dropdown-menu">
                                        <button class="db-dropdown-item" data-dns-edit><i class="fas fa-pen"></i> <?php echo e(__('common_edit')); ?></button>
                                        <button class="db-dropdown-item" onclick="DashCopy(this,'<?php echo e(addslashes($rec['value'])); ?>')"><i class="fas fa-copy"></i> <?php echo e(__('dom_copy_value')); ?></button>
                                        <div class="db-dropdown-divider"></div>
                                        <button class="db-dropdown-item db-dropdown-item--danger" data-dns-delete><i class="fas fa-trash"></i> <?php echo e(__('common_delete')); ?></button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <?php endif; ?>
        </div>
    </div>

    <!-- ═══ NAMESERVERS ═══ -->
    <div class="db-tab-pane" data-tab-pane="nameservers">
        <div class="ds-section">
            <div class="ds-section__head ds-section__head--row">
                <div>
                    <h3 class="ds-section__title">
                        <span class="ds-section__icon"><i class="fas fa-network-wired"></i></span>
                        <?php echo e(__('dom_nameservers')); ?>
                    </h3>
                    <p class="ds-section__sub"><?php echo e(__('dom_nameservers_sub')); ?></p>
                </div>
                <div class="ds-section__actions">
                    <button type="button" class="ds-btn ds-btn--sm" id="nsUseDefaults">
                        <i class="fas fa-rotate"></i>
                        <span><?php echo e(__('dom_ns_use_defaults')); ?></span>
                    </button>
                    <button type="button" class="ds-btn ds-btn--primary ds-btn--sm" id="nsSaveBtn" disabled>
                        <i class="fas fa-floppy-disk"></i>
                        <span><?php echo e(__('common_save')); ?></span>
                    </button>
                </div>
            </div>

            <form class="db-dom-ns-form" id="nsForm" onsubmit="return false;">
                <ol class="db-dom-ns-list" id="nsList">
                    <?php foreach ($domain['nameservers'] as $i => $ns): ?>
                    <li class="db-dom-ns" data-ns-row>
                        <span class="db-dom-ns__idx">NS<?php echo $i + 1; ?></span>
                        <input type="text" class="db-dom-ns__input db-input"
                            value="<?php echo e($ns); ?>"
                            data-original="<?php echo e($ns); ?>"
                            placeholder="ns<?php echo $i + 1; ?>.example.com"
                            pattern="[a-zA-Z0-9.\-]+">
                        <button type="button" class="db-dom-ns__copy" data-ns-copy aria-label="<?php echo e(__('common_copy')); ?>" title="<?php echo e(__('common_copy')); ?>">
                            <i class="fas fa-copy"></i>
                        </button>
                        <?php if ($i >= 2): ?>
                        <button type="button" class="db-dom-ns__remove" data-ns-remove aria-label="<?php echo e(__('common_remove')); ?>" title="<?php echo e(__('common_remove')); ?>">
                            <i class="fas fa-trash"></i>
                        </button>
                        <?php endif; ?>
                    </li>
                    <?php endforeach; ?>
                </ol>
                <button type="button" class="db-dom-ns-add" id="nsAddBtn">
                    <i class="fas fa-plus"></i>
                    <span><?php echo e(__('dom_ns_add_more')); ?></span>
                </button>
            </form>

            <div class="db-notice db-notice--info db-dom-ns-hint">
                <i class="fas fa-circle-info"></i>
                <span><?php echo e(__('dom_ns_propagation_hint')); ?></span>
            </div>
        </div>
    </div>

    <!-- ═══ GLUE RECORDS (private nameservers) ═══ -->
    <div class="db-tab-pane" data-tab-pane="glue">
        <div class="ds-section">
            <div class="ds-section__head ds-section__head--row">
                <div>
                    <h3 class="ds-section__title">
                        <span class="ds-section__icon"><i class="fas fa-link"></i></span>
                        <?php echo e(__('dom_glue_title')); ?>
                    </h3>
                    <p class="ds-section__sub"><?php echo e(__('dom_glue_sub')); ?></p>
                </div>
                <button type="button" class="ds-btn ds-btn--primary ds-btn--sm" onclick="openGlueModal('add')">
                    <i class="fas fa-plus"></i>
                    <span><?php echo e(__('dom_glue_add')); ?></span>
                </button>
            </div>

            <?php if (empty($domain['glue'])): ?>
                <?php
                $es_icon    = 'fa-link';
                $es_title   = __('dom_glue_empty_title');
                $es_desc    = __('dom_glue_empty_desc');
                $es_action  = null;
                $es_compact = true;
                $es_no_wrap = true;
                include __DIR__ . '/../../components/empty-state.php';
                ?>
            <?php else: ?>
            <div class="db-table-wrapper">
                <table class="db-table" id="domGlueTable">
                    <thead>
                        <tr>
                            <th><?php echo e(__('dom_glue_col_host')); ?></th>
                            <th><?php echo e(__('dom_glue_col_ipv4')); ?></th>
                            <th><?php echo e(__('dom_glue_col_ipv6')); ?></th>
                            <th style="width:56px;"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($domain['glue'] as $g): ?>
                        <tr data-row
                            data-glue-host="<?php echo e($g['host']); ?>"
                            data-glue-ipv4="<?php echo e($g['ipv4']); ?>"
                            data-glue-ipv6="<?php echo e($g['ipv6']); ?>">
                            <td class="db-dom-mono"><?php echo e($g['host']); ?></td>
                            <td class="db-dom-mono"><?php echo e($g['ipv4']); ?></td>
                            <td class="db-dom-mono"><?php echo $g['ipv6'] ? e($g['ipv6']) : '<span class="db-dom-rdns--empty">—</span>'; ?></td>
                            <td>
                                <div class="db-dropdown-wrapper">
                                    <button class="db-row-action db-row-action--solid db-row-action--menu" data-dropdown-toggle><i class="fas fa-ellipsis-vertical"></i></button>
                                    <div class="db-dropdown-menu">
                                        <button class="db-dropdown-item" data-glue-edit><i class="fas fa-pen"></i> <?php echo e(__('common_edit')); ?></button>
                                        <div class="db-dropdown-divider"></div>
                                        <button class="db-dropdown-item db-dropdown-item--danger" data-glue-delete><i class="fas fa-trash"></i> <?php echo e(__('common_delete')); ?></button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <?php endif; ?>
        </div>
    </div>

    <!-- ═══ WHOIS ═══ -->
    <div class="db-tab-pane" data-tab-pane="whois">
        <div class="ds-section">
            <div class="ds-section__head">
                <h3 class="ds-section__title">
                    <span class="ds-section__icon"><i class="fas fa-circle-info"></i></span>
                    <?php echo e(__('dom_whois_title')); ?>
                </h3>
                <p class="ds-section__sub"><?php echo e($domain['privacy'] ? __('dom_whois_privacy_on_sub') : __('dom_whois_privacy_off_sub')); ?></p>
            </div>
            <dl class="db-dom-kv">
                <div class="db-dom-kv__row"><dt><?php echo e(__('dom_whois_registrant')); ?></dt><dd><?php echo e($domain['registrant']['name']); ?></dd></div>
                <div class="db-dom-kv__row"><dt><?php echo e(__('dom_whois_org')); ?></dt><dd><?php echo e($domain['registrant']['org']); ?></dd></div>
                <div class="db-dom-kv__row"><dt><?php echo e(__('dom_whois_email')); ?></dt><dd class="db-dom-mono"><?php echo e($domain['registrant']['email']); ?></dd></div>
                <div class="db-dom-kv__row"><dt><?php echo e(__('dom_whois_country')); ?></dt><dd><span class="fi fi-<?php echo e(strtolower($domain['registrant']['country'])); ?>"></span> <?php echo e($domain['registrant']['country']); ?></dd></div>
                <div class="db-dom-kv__row"><dt><?php echo e(__('dom_whois_registrar')); ?></dt><dd><?php echo e($domain['registrar']); ?></dd></div>
            </dl>
        </div>
    </div>

    <!-- ═══ SETTINGS ═══ -->
    <div class="db-tab-pane" data-tab-pane="settings">
        <div class="ds-section">
            <div class="ds-section__head">
                <h3 class="ds-section__title">
                    <span class="ds-section__icon"><i class="fas fa-gear"></i></span>
                    <?php echo e(__('dom_tab_settings')); ?>
                </h3>
                <p class="ds-section__sub"><?php echo e(__('dom_settings_sub')); ?></p>
            </div>

            <div class="db-dom-set-row">
                <div>
                    <strong><?php echo e(__('dom_get_epp')); ?></strong>
                    <span><?php echo e(__('dom_get_epp_desc')); ?></span>
                </div>
                <button class="ds-btn ds-btn--sm" onclick="DashModal.open('domEppModal')"><i class="fas fa-key"></i> <span><?php echo e(__('dom_request_code')); ?></span></button>
            </div>

            <div class="db-dom-set-row">
                <div>
                    <strong><?php echo e(__('dom_transfer_out')); ?></strong>
                    <span><?php echo e(__('dom_transfer_out_desc')); ?></span>
                </div>
                <button class="ds-btn ds-btn--sm" onclick="DashToast.show('info','','<?php echo e(__('dom_action_transfer_toast')); ?>')"><i class="fas fa-right-left"></i> <span><?php echo e(__('dom_transfer_start')); ?></span></button>
            </div>

            <div class="db-dom-set-row db-dom-set-row--danger">
                <div>
                    <strong><?php echo e(__('dom_delete_domain')); ?></strong>
                    <span><?php echo e(__('dom_delete_desc')); ?></span>
                </div>
                <button class="ds-btn ds-btn--danger ds-btn--sm" onclick="DashModal.open('domDeleteModal')"><i class="fas fa-trash"></i> <span><?php echo e(__('common_delete')); ?></span></button>
            </div>
        </div>
    </div>

</div>

<!-- ═══ DELETE MODAL ═══ -->
<?php
$modal_id    = 'domDeleteModal';
$modal_title = __('dom_delete_domain');
$modal_size  = 'sm';
include __DIR__ . '/../../components/modal.php';

$cb_desc         = __('dom_delete_confirm_desc');
$cb_target_label = __('dom_tab_overview');
$cb_target_value = $domain['name'];
$cb_warn         = __('dom_delete_warn');
$cb_icon         = null; $cb_variant = 'danger';
include __DIR__ . '/../../components/confirm-body.php';

$modal_footer = '
    <button class="db-btn db-btn--secondary" data-modal-close>' . e(__('common_cancel')) . '</button>
    <button class="db-btn db-btn--danger" onclick="DashModal.close(document.getElementById(\'domDeleteModal\')); DashToast.show(\'success\',\'\', ' . json_encode(__('dom_delete_done')) . ')">
        <i class="fas fa-trash"></i> ' . e(__('dom_delete_confirm_yes')) . '
    </button>
';
include __DIR__ . '/../../components/modal-end.php';
?>

<!-- ═══ DNS RECORD (add / edit) MODAL ═══ -->
<?php
$modal_id    = 'domDnsModal';
$modal_title = __('dom_dns_modal_title_add');
$modal_size  = '';
include __DIR__ . '/../../components/modal.php';
?>
    <form id="dnsForm" onsubmit="return false;">
        <div class="db-form-row">
            <div class="db-form-group">
                <label class="db-form-label" for="dnsType"><?php echo e(__('dom_dns_type')); ?> <span class="db-required">*</span></label>
                <select id="dnsType" class="db-input" required>
                    <option value="A">A</option>
                    <option value="AAAA">AAAA</option>
                    <option value="CNAME">CNAME</option>
                    <option value="MX">MX</option>
                    <option value="TXT">TXT</option>
                    <option value="NS">NS</option>
                    <option value="SRV">SRV</option>
                    <option value="CAA">CAA</option>
                </select>
            </div>
            <div class="db-form-group">
                <label class="db-form-label" for="dnsTtl"><?php echo e(__('dom_dns_ttl')); ?></label>
                <select id="dnsTtl" class="db-input">
                    <option value="300">5 min (300)</option>
                    <option value="1800" selected>30 min (1800)</option>
                    <option value="3600">1 hour (3600)</option>
                    <option value="14400">4 hours (14400)</option>
                    <option value="86400">24 hours (86400)</option>
                </select>
            </div>
        </div>
        <div class="db-form-group">
            <label class="db-form-label" for="dnsName"><?php echo e(__('dom_dns_name')); ?> <span class="db-required">*</span></label>
            <input type="text" id="dnsName" class="db-input" required placeholder="@ or subdomain">
            <div class="db-form-hint"><?php echo e(__('dom_dns_name_hint')); ?></div>
        </div>
        <div class="db-form-group">
            <label class="db-form-label" for="dnsValue"><?php echo e(__('dom_dns_value')); ?> <span class="db-required">*</span></label>
            <input type="text" id="dnsValue" class="db-input" required placeholder="e.g. 185.225.49.42">
        </div>
    </form>
<?php
$modal_footer = '
    <button class="db-btn db-btn--secondary" data-modal-close>' . e(__('common_cancel')) . '</button>
    <button class="db-btn db-btn--primary" id="dnsSaveBtn">
        <i class="fas fa-floppy-disk"></i> ' . e(__('common_save')) . '
    </button>
';
include __DIR__ . '/../../components/modal-end.php';
?>

<!-- ═══ DNS DELETE CONFIRM MODAL ═══ -->
<?php
$modal_id    = 'domDnsDeleteModal';
$modal_title = __('dom_dns_delete_title');
$modal_size  = 'sm';
include __DIR__ . '/../../components/modal.php';
?>
    <div class="db-confirm-body">
        <div class="db-modal-icon db-modal-icon--danger"><i class="fas fa-triangle-exclamation"></i></div>
        <p><?php echo e(__('dom_dns_delete_desc')); ?></p>
        <div class="db-confirm-summary">
            <div class="db-confirm-summary__row">
                <span><?php echo e(__('dom_dns_name')); ?></span>
                <span id="dnsDeleteTarget" class="db-confirm-summary__target db-dom-mono"></span>
            </div>
        </div>
    </div>
<?php
$modal_footer = '
    <button class="db-btn db-btn--secondary" data-modal-close>' . e(__('common_cancel')) . '</button>
    <button class="db-btn db-btn--danger" id="dnsDeleteConfirm">
        <i class="fas fa-trash"></i> ' . e(__('common_delete')) . '
    </button>
';
include __DIR__ . '/../../components/modal-end.php';
?>

<!-- ═══ GLUE RECORD (add / edit) MODAL ═══ -->
<?php
$modal_id    = 'domGlueModal';
$modal_title = __('dom_glue_modal_title_add');
$modal_size  = '';
include __DIR__ . '/../../components/modal.php';
?>
    <form id="glueForm" onsubmit="return false;">
        <p class="db-modal-lead"><?php echo e(__('dom_glue_modal_intro')); ?></p>
        <div class="db-form-group">
            <label class="db-form-label" for="glueHost"><?php echo e(__('dom_glue_col_host')); ?> <span class="db-required">*</span></label>
            <input type="text" id="glueHost" class="db-input" required placeholder="ns1.<?php echo e($domain['name']); ?>">
            <div class="db-form-hint"><?php echo e(__('dom_glue_host_hint', ['domain' => $domain['name']])); ?></div>
        </div>
        <div class="db-form-group">
            <label class="db-form-label" for="glueIpv4"><?php echo e(__('dom_glue_col_ipv4')); ?> <span class="db-required">*</span></label>
            <input type="text" id="glueIpv4" class="db-input" required placeholder="185.225.49.42"
                pattern="(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)">
        </div>
        <div class="db-form-group">
            <label class="db-form-label" for="glueIpv6"><?php echo e(__('dom_glue_col_ipv6')); ?> <span class="db-form-label-meta">(<?php echo e(__('common_optional')); ?>)</span></label>
            <input type="text" id="glueIpv6" class="db-input" placeholder="2a06:8ec0::1234">
        </div>
    </form>
<?php
$modal_footer = '
    <button class="db-btn db-btn--secondary" data-modal-close>' . e(__('common_cancel')) . '</button>
    <button class="db-btn db-btn--primary" id="glueSaveBtn">
        <i class="fas fa-floppy-disk"></i> ' . e(__('common_save')) . '
    </button>
';
include __DIR__ . '/../../components/modal-end.php';
?>

<!-- ═══ GLUE DELETE CONFIRM MODAL ═══ -->
<?php
$modal_id    = 'domGlueDeleteModal';
$modal_title = __('dom_glue_delete_title');
$modal_size  = 'sm';
include __DIR__ . '/../../components/modal.php';
?>
    <div class="db-confirm-body">
        <div class="db-modal-icon db-modal-icon--danger"><i class="fas fa-triangle-exclamation"></i></div>
        <p><?php echo e(__('dom_glue_delete_desc')); ?></p>
        <div class="db-confirm-summary">
            <div class="db-confirm-summary__row">
                <span><?php echo e(__('dom_glue_col_host')); ?></span>
                <span id="glueDeleteTarget" class="db-confirm-summary__target db-dom-mono"></span>
            </div>
        </div>
    </div>
<?php
$modal_footer = '
    <button class="db-btn db-btn--secondary" data-modal-close>' . e(__('common_cancel')) . '</button>
    <button class="db-btn db-btn--danger" id="glueDeleteConfirm">
        <i class="fas fa-trash"></i> ' . e(__('common_delete')) . '
    </button>
';
include __DIR__ . '/../../components/modal-end.php';
?>

<!-- ═══ EPP CODE REVEAL MODAL ═══ -->
<?php
$modal_id    = 'domEppModal';
$modal_title = __('dom_epp_modal_title');
$modal_size  = 'sm';
include __DIR__ . '/../../components/modal.php';
?>
    <div class="db-confirm-body">
        <div class="db-modal-icon db-modal-icon--warning"><i class="fas fa-key"></i></div>
        <p><?php echo e(__('dom_epp_modal_desc')); ?></p>

        <div class="db-dom-epp">
            <code class="db-dom-epp__code" id="eppCodeValue" data-masked="••••-••••-••••-••••" data-real="<?php echo e($domain['epp']); ?>">••••-••••-••••-••••</code>
            <div class="db-dom-epp__actions">
                <button type="button" class="db-dom-epp__btn" id="eppRevealBtn">
                    <i class="fas fa-eye" id="eppRevealIcon"></i>
                    <span id="eppRevealLabel"><?php echo e(__('dom_epp_reveal')); ?></span>
                </button>
                <button type="button" class="db-dom-epp__btn" id="eppCopyBtn">
                    <i class="fas fa-copy"></i> <?php echo e(__('common_copy')); ?>
                </button>
            </div>
        </div>

        <div class="db-notice db-notice--info db-confirm-body__warn">
            <i class="fas fa-circle-info"></i>
            <span><?php echo e(__('dom_epp_modal_note')); ?></span>
        </div>
    </div>
<?php
$modal_footer = '<button class="db-btn db-btn--primary" data-modal-close>' . e(__('common_close')) . '</button>';
include __DIR__ . '/../../components/modal-end.php';
?>

<?php endif; ?>

<div class="db-toast-container" id="toastContainer"></div>

<script>
// Deep-link tabs via #tab-<name>
(function () {
    var hash = (window.location.hash || '').replace('#tab-', '');
    if (!hash) return;
    var bar = document.querySelector('[data-tab-bar]');
    if (!bar) return;
    var btn = bar.querySelector('[data-tab-target="' + hash + '"]');
    if (btn) btn.click();
})();

document.addEventListener('DOMContentLoaded', function () {

    /* ───────────────────────────────────────────────
       NAMESERVERS — editable list (add / remove / save)
       ─────────────────────────────────────────────── */
    var nsList   = document.getElementById('nsList');
    var nsSave   = document.getElementById('nsSaveBtn');
    var nsAdd    = document.getElementById('nsAddBtn');
    var nsReset  = document.getElementById('nsUseDefaults');

    function refreshNsIndexes() {
        if (!nsList) return;
        nsList.querySelectorAll('[data-ns-row]').forEach(function (row, i) {
            var idx = row.querySelector('.db-dom-ns__idx');
            var input = row.querySelector('.db-dom-ns__input');
            if (idx) idx.textContent = 'NS' + (i + 1);
            if (input) input.setAttribute('placeholder', 'ns' + (i + 1) + '.example.com');
            // Remove button: only show for rows beyond the first two
            var remove = row.querySelector('[data-ns-remove]');
            if (i < 2 && remove) remove.remove();
        });
    }

    function markDirty() {
        if (!nsSave) return;
        var dirty = false;
        nsList.querySelectorAll('.db-dom-ns__input').forEach(function (inp) {
            if ((inp.value || '').trim() !== (inp.getAttribute('data-original') || '')) dirty = true;
        });
        // Also dirty if row count changed compared to originals present in DOM
        var currentCount = nsList.querySelectorAll('[data-ns-row]').length;
        if (currentCount !== parseInt(nsList.getAttribute('data-initial-count') || currentCount, 10)) dirty = true;
        nsSave.disabled = !dirty;
    }

    if (nsList) {
        nsList.setAttribute('data-initial-count', nsList.querySelectorAll('[data-ns-row]').length);
    }

    function bindNsRow(row) {
        var input = row.querySelector('.db-dom-ns__input');
        if (input) input.addEventListener('input', markDirty);

        var copyBtn = row.querySelector('[data-ns-copy]');
        if (copyBtn) {
            copyBtn.addEventListener('click', function () {
                var v = input ? (input.value || '').trim() : '';
                if (!v) return;
                if (window.DashCopy) DashCopy(copyBtn, v);
            });
        }

        var remove = row.querySelector('[data-ns-remove]');
        if (remove) {
            remove.addEventListener('click', function () {
                row.remove();
                refreshNsIndexes();
                markDirty();
            });
        }
    }

    if (nsList) {
        nsList.querySelectorAll('[data-ns-row]').forEach(bindNsRow);
    }

    if (nsAdd) {
        nsAdd.addEventListener('click', function () {
            var count = nsList.querySelectorAll('[data-ns-row]').length;
            if (count >= 8) {
                DashToast.show('warning', '', <?php echo json_encode(__('dom_ns_max_warn')); ?>);
                return;
            }
            var li = document.createElement('li');
            li.className = 'db-dom-ns';
            li.setAttribute('data-ns-row', '');
            li.innerHTML =
                '<span class="db-dom-ns__idx">NS' + (count + 1) + '</span>' +
                '<input type="text" class="db-dom-ns__input db-input" value="" data-original="" placeholder="ns' + (count + 1) + '.example.com" pattern="[a-zA-Z0-9.\\-]+">' +
                '<button type="button" class="db-dom-ns__copy" data-ns-copy aria-label="Copy"><i class="fas fa-copy"></i></button>' +
                '<button type="button" class="db-dom-ns__remove" data-ns-remove aria-label="Remove"><i class="fas fa-trash"></i></button>';
            nsList.appendChild(li);
            bindNsRow(li);
            var newInput = li.querySelector('.db-dom-ns__input');
            if (newInput) newInput.focus();
            markDirty();
        });
    }

    if (nsSave) {
        nsSave.addEventListener('click', function () {
            // Validate: at least 2 filled, valid hostnames.
            var hosts = [];
            var valid = true;
            nsList.querySelectorAll('.db-dom-ns__input').forEach(function (inp) {
                var v = (inp.value || '').trim();
                if (!v) { valid = false; return; }
                if (!/^[a-zA-Z0-9.\-]+$/.test(v)) { valid = false; return; }
                hosts.push(v);
            });
            if (!valid || hosts.length < 2) {
                DashToast.show('error', '', <?php echo json_encode(__('dom_ns_invalid')); ?>);
                return;
            }
            // Mock save: update originals so Save becomes disabled again.
            nsList.querySelectorAll('.db-dom-ns__input').forEach(function (inp) {
                inp.setAttribute('data-original', (inp.value || '').trim());
            });
            nsList.setAttribute('data-initial-count', nsList.querySelectorAll('[data-ns-row]').length);
            nsSave.disabled = true;
            DashToast.show('success', '', <?php echo json_encode(__('dom_ns_saved')); ?>);
        });
    }

    if (nsReset) {
        nsReset.addEventListener('click', function () {
            // Backend: restore to registrar defaults. We mock with fixed values.
            var defaults = ['ns1.yottasrc.com', 'ns2.yottasrc.com'];
            nsList.innerHTML = '';
            defaults.forEach(function (host, i) {
                var li = document.createElement('li');
                li.className = 'db-dom-ns';
                li.setAttribute('data-ns-row', '');
                li.innerHTML =
                    '<span class="db-dom-ns__idx">NS' + (i + 1) + '</span>' +
                    '<input type="text" class="db-dom-ns__input db-input" value="' + host + '" data-original="' + host + '" placeholder="ns' + (i + 1) + '.example.com" pattern="[a-zA-Z0-9.\\-]+">' +
                    '<button type="button" class="db-dom-ns__copy" data-ns-copy aria-label="Copy"><i class="fas fa-copy"></i></button>';
                nsList.appendChild(li);
                bindNsRow(li);
            });
            nsList.setAttribute('data-initial-count', defaults.length);
            nsSave.disabled = false;
            DashToast.show('info', '', <?php echo json_encode(__('dom_ns_defaults_applied')); ?>);
        });
    }

    /* ───────────────────────────────────────────────
       DNS RECORDS — add / edit / delete
       ─────────────────────────────────────────────── */
    window.openDnsModal = function (mode, row) {
        var title = document.querySelector('#domDnsModal .db-modal-title');
        if (title) title.textContent = mode === 'edit'
            ? <?php echo json_encode(__('dom_dns_modal_title_edit')); ?>
            : <?php echo json_encode(__('dom_dns_modal_title_add')); ?>;
        document.getElementById('dnsType').value  = row ? row.getAttribute('data-dns-type')  : 'A';
        document.getElementById('dnsName').value  = row ? row.getAttribute('data-dns-name')  : '';
        document.getElementById('dnsValue').value = row ? row.getAttribute('data-dns-value') : '';
        document.getElementById('dnsTtl').value   = row ? row.getAttribute('data-dns-ttl')   : '1800';
        document.getElementById('dnsSaveBtn').setAttribute('data-mode', mode);
        if (row) row.setAttribute('data-editing', '1');
        DashModal.open('domDnsModal');
    };

    document.querySelectorAll('[data-dns-edit]').forEach(function (btn) {
        btn.addEventListener('click', function () {
            var row = btn.closest('tr');
            if (row) openDnsModal('edit', row);
        });
    });

    var dnsSave = document.getElementById('dnsSaveBtn');
    if (dnsSave) {
        dnsSave.addEventListener('click', function () {
            var form = document.getElementById('dnsForm');
            if (!form.reportValidity()) return;
            var mode = dnsSave.getAttribute('data-mode') || 'add';
            DashModal.close(document.getElementById('domDnsModal'));
            // Clear the "currently editing" flag — backend would POST/PATCH here.
            document.querySelectorAll('tr[data-editing]').forEach(function (r) {
                r.removeAttribute('data-editing');
            });
            DashToast.show('success', '', mode === 'edit'
                ? <?php echo json_encode(__('dom_dns_saved_edit')); ?>
                : <?php echo json_encode(__('dom_dns_saved_add')); ?>);
        });
    }

    var dnsDeleteTarget = null;
    document.querySelectorAll('[data-dns-delete]').forEach(function (btn) {
        btn.addEventListener('click', function () {
            dnsDeleteTarget = btn.closest('tr');
            var nameEl = document.getElementById('dnsDeleteTarget');
            if (nameEl && dnsDeleteTarget) {
                nameEl.textContent = dnsDeleteTarget.getAttribute('data-dns-type') + ' ' + dnsDeleteTarget.getAttribute('data-dns-name');
            }
            DashModal.open('domDnsDeleteModal');
        });
    });

    var dnsDeleteConfirm = document.getElementById('dnsDeleteConfirm');
    if (dnsDeleteConfirm) {
        dnsDeleteConfirm.addEventListener('click', function () {
            if (dnsDeleteTarget) {
                dnsDeleteTarget.style.transition = 'opacity 0.2s';
                dnsDeleteTarget.style.opacity = '0';
                setTimeout(function () { dnsDeleteTarget.remove(); }, 220);
            }
            DashModal.close(document.getElementById('domDnsDeleteModal'));
            DashToast.show('success', '', <?php echo json_encode(__('dom_dns_deleted')); ?>);
            dnsDeleteTarget = null;
        });
    }

    /* ───────────────────────────────────────────────
       GLUE RECORDS — add / edit / delete
       ─────────────────────────────────────────────── */
    window.openGlueModal = function (mode, row) {
        var title = document.querySelector('#domGlueModal .db-modal-title');
        if (title) title.textContent = mode === 'edit'
            ? <?php echo json_encode(__('dom_glue_modal_title_edit')); ?>
            : <?php echo json_encode(__('dom_glue_modal_title_add')); ?>;
        document.getElementById('glueHost').value = row ? row.getAttribute('data-glue-host') : '';
        document.getElementById('glueIpv4').value = row ? row.getAttribute('data-glue-ipv4') : '';
        document.getElementById('glueIpv6').value = row ? row.getAttribute('data-glue-ipv6') : '';
        document.getElementById('glueSaveBtn').setAttribute('data-mode', mode);
        DashModal.open('domGlueModal');
    };

    document.querySelectorAll('[data-glue-edit]').forEach(function (btn) {
        btn.addEventListener('click', function () {
            var row = btn.closest('tr');
            if (row) openGlueModal('edit', row);
        });
    });

    var glueSave = document.getElementById('glueSaveBtn');
    if (glueSave) {
        glueSave.addEventListener('click', function () {
            var form = document.getElementById('glueForm');
            if (!form.reportValidity()) return;
            var mode = glueSave.getAttribute('data-mode') || 'add';
            DashModal.close(document.getElementById('domGlueModal'));
            DashToast.show('success', '', mode === 'edit'
                ? <?php echo json_encode(__('dom_glue_saved_edit')); ?>
                : <?php echo json_encode(__('dom_glue_saved_add')); ?>);
        });
    }

    var glueDeleteTarget = null;
    document.querySelectorAll('[data-glue-delete]').forEach(function (btn) {
        btn.addEventListener('click', function () {
            glueDeleteTarget = btn.closest('tr');
            var nameEl = document.getElementById('glueDeleteTarget');
            if (nameEl && glueDeleteTarget) nameEl.textContent = glueDeleteTarget.getAttribute('data-glue-host');
            DashModal.open('domGlueDeleteModal');
        });
    });

    var glueDeleteConfirm = document.getElementById('glueDeleteConfirm');
    if (glueDeleteConfirm) {
        glueDeleteConfirm.addEventListener('click', function () {
            if (glueDeleteTarget) {
                glueDeleteTarget.style.transition = 'opacity 0.2s';
                glueDeleteTarget.style.opacity = '0';
                setTimeout(function () { glueDeleteTarget.remove(); }, 220);
            }
            DashModal.close(document.getElementById('domGlueDeleteModal'));
            DashToast.show('success', '', <?php echo json_encode(__('dom_glue_deleted')); ?>);
            glueDeleteTarget = null;
        });
    }

    /* ───────────────────────────────────────────────
       EPP CODE — reveal / hide / copy
       ─────────────────────────────────────────────── */
    var eppValue  = document.getElementById('eppCodeValue');
    var eppReveal = document.getElementById('eppRevealBtn');
    var eppCopy   = document.getElementById('eppCopyBtn');
    var eppIcon   = document.getElementById('eppRevealIcon');
    var eppLabel  = document.getElementById('eppRevealLabel');
    var eppShown  = false;

    function hideEpp() {
        if (!eppValue) return;
        eppValue.textContent = eppValue.getAttribute('data-masked');
        if (eppIcon)  eppIcon.className = 'fas fa-eye';
        if (eppLabel) eppLabel.textContent = <?php echo json_encode(__('dom_epp_reveal')); ?>;
        eppShown = false;
    }

    function showEpp() {
        if (!eppValue) return;
        eppValue.textContent = eppValue.getAttribute('data-real');
        if (eppIcon)  eppIcon.className = 'fas fa-eye-slash';
        if (eppLabel) eppLabel.textContent = <?php echo json_encode(__('dom_epp_hide')); ?>;
        eppShown = true;
    }

    if (eppReveal) {
        eppReveal.addEventListener('click', function () {
            if (eppShown) hideEpp(); else showEpp();
        });
    }

    if (eppCopy) {
        eppCopy.addEventListener('click', function () {
            if (eppValue) DashCopy(eppCopy, eppValue.getAttribute('data-real'));
        });
    }

    // Reset to hidden whenever the modal closes.
    var eppModal = document.getElementById('domEppModal');
    if (eppModal) {
        new MutationObserver(function () {
            if (!eppModal.classList.contains('is-active')) hideEpp();
        }).observe(eppModal, { attributes: true, attributeFilter: ['class'] });
    }
});
</script>

<?php require_once __DIR__ . '/../../layouts/footer.php'; ?>
