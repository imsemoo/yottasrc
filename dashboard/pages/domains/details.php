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
                    <button class="db-dropdown-item" onclick="DashToast.show('success','','<?php echo e(__('dom_action_epp_toast')); ?>')">
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
                <button type="button" class="ds-btn ds-btn--primary ds-btn--sm" onclick="DashToast.show('info','','<?php echo e(__('dom_add_record_toast')); ?>')">
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
                        <tr data-row>
                            <td><span class="db-dom-rec-type db-dom-rec-type--<?php echo e(strtolower($rec['type'])); ?>"><?php echo e($rec['type']); ?></span></td>
                            <td class="db-dom-mono"><?php echo e($rec['name']); ?></td>
                            <td class="db-dom-mono db-dom-value"><?php echo e($rec['value']); ?></td>
                            <td class="db-dom-mono"><?php echo e($rec['ttl']); ?></td>
                            <td>
                                <div class="db-dropdown-wrapper">
                                    <button class="db-row-action db-row-action--solid db-row-action--menu" data-dropdown-toggle><i class="fas fa-ellipsis-vertical"></i></button>
                                    <div class="db-dropdown-menu">
                                        <button class="db-dropdown-item" onclick="DashToast.show('info','','<?php echo e(__('dom_edit_record_toast')); ?>')"><i class="fas fa-pen"></i> <?php echo e(__('common_edit')); ?></button>
                                        <button class="db-dropdown-item" onclick="navigator.clipboard.writeText('<?php echo e(addslashes($rec['value'])); ?>'); DashToast.show('success','','<?php echo e(__('dom_value_copied')); ?>')"><i class="fas fa-copy"></i> <?php echo e(__('dom_copy_value')); ?></button>
                                        <div class="db-dropdown-divider"></div>
                                        <button class="db-dropdown-item db-dropdown-item--danger" onclick="DashToast.show('success','','<?php echo e(__('dom_delete_record_toast')); ?>')"><i class="fas fa-trash"></i> <?php echo e(__('common_delete')); ?></button>
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
                <button type="button" class="ds-btn ds-btn--sm" onclick="DashToast.show('info','','<?php echo e(__('dom_change_ns_toast')); ?>')">
                    <i class="fas fa-pen"></i>
                    <span><?php echo e(__('dom_change_ns')); ?></span>
                </button>
            </div>
            <ol class="db-dom-ns-list">
                <?php foreach ($domain['nameservers'] as $i => $ns): ?>
                <li class="db-dom-ns">
                    <span class="db-dom-ns__idx">NS<?php echo $i + 1; ?></span>
                    <span class="db-dom-ns__host"><?php echo e($ns); ?></span>
                    <button type="button" class="db-dom-ns__copy" onclick="navigator.clipboard.writeText('<?php echo e($ns); ?>'); DashToast.show('success','','<?php echo e(__('dom_ns_copied')); ?>')" aria-label="Copy">
                        <i class="fas fa-copy"></i>
                    </button>
                </li>
                <?php endforeach; ?>
            </ol>
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
                <button class="ds-btn ds-btn--sm" onclick="DashToast.show('success','','<?php echo e(__('dom_action_epp_toast')); ?>')"><i class="fas fa-key"></i> <span><?php echo e(__('dom_request_code')); ?></span></button>
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
</script>

<?php require_once __DIR__ . '/../../layouts/footer.php'; ?>
