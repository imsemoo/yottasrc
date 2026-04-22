<?php
/**
 * YottaSrc Dashboard — Cloud Hub
 * ================================
 * Account-level cloud overview with 4 tabs:
 *   • Projects   — list of projects + "+ New Project"
 *   • Billing    — cloud-only billing summary (usage, last invoice, autorecharge)
 *   • Limits     — resource meters + Limit Increase CTA
 *   • Referral   — stats + promo cards + referral code
 *
 * Page states: active (default), loading, error, empty
 * URL hash: #tab-projects, #tab-billing, #tab-limits, #tab-referral
 */

$page_title = null;
$breadcrumbs_data = null;

require_once __DIR__ . '/../../layouts/config.php';
require_once __DIR__ . '/../../layouts/project-helpers.php';

$page_title = __('cloud_title') . ' — ' . SITE_NAME;
$breadcrumbs_data = [
    ['label' => __('nav_dashboard'),   'url' => DASH_BASE_PATH . '/'],
    ['label' => __('cloud_title'),     'url' => null],
];

require_once __DIR__ . '/../../layouts/shell.php';

/* ══════════════════════════════════════════════════════════════════════
   ███  CLOUD HUB  ·  MOCK DATA BLOCK  (single source of truth)  ███
   ══════════════════════════════════════════════════════════════════════
   BACKEND TEAM — PLEASE READ:

   All data shown on the Cloud Hub (projects, hero metrics, limits,
   referral, billing summary, timeline) lives in this block.
   Edit a value here → UI updates directly.

   Wiring real data:
     • Replace each array with the equivalent DB query result.
     • Keep the KEYS and SHAPE identical; the HTML loops expect them.
     • Aggregate totals ($total_servers, $total_running, $total_monthly)
       are AUTO-computed from $projects; do not edit them manually.
     • Sparkline arrays can be any length; renderer auto-scales.
   ══════════════════════════════════════════════════════════════════════ */

/* ──────────────────────────────────────────
   PAGE STATE  (which view to render)
   ──────────────────────────────────────────
   • 'active'   → normal view (default)
   • 'loading'  → skeleton placeholder
   • 'error'    → retry card
   • 'empty'    → "no projects yet" CTA
   ────────────────────────────────────────── */
$page_state = $_GET['state'] ?? 'active';

/* ──────────────────────────────────────────
   PROJECTS LIST  (cards in Projects tab)
   ──────────────────────────────────────────
   Each row:
   • id          → internal project id (deep-linked in URL)
   • name        → display name (slug-friendly)
   • servers     → current active server count
   • servers_max → quota cap for this project
   • created     → relative-time string (e.g. '2 days ago')
   • cpu_avg     → 0–100 average CPU across servers (drives seed color)
   • monthly_cost          → current-month cost (float)
   • cpu_spark             → 12 points (12-hour trend)
   • status_breakdown      → ['running' => N, 'stopped' => N]
   ────────────────────────────────────────── */
$projects = [
    [
        'id'       => '27389',
        'name'     => 'ahsplay',
        'servers'  => 3,
        'servers_max' => 5,
        'created'  => '2 days ago',
        'cpu_avg'  => 34,
        'monthly_cost' => 22.47,
        'cpu_spark' => [12, 18, 22, 17, 24, 30, 34, 28, 32, 38, 34, 30],
        'status_breakdown' => ['running' => 2, 'stopped' => 1],
    ],
    [
        'id'       => '27156',
        'name'     => 'website-prod',
        'servers'  => 5,
        'servers_max' => 5,
        'created'  => '1 week ago',
        'cpu_avg'  => 62,
        'monthly_cost' => 89.95,
        'cpu_spark' => [45, 52, 48, 58, 62, 68, 64, 72, 66, 60, 62, 58],
        'status_breakdown' => ['running' => 5, 'stopped' => 0],
    ],
    [
        'id'       => '26921',
        'name'     => 'staging-env',
        'servers'  => 2,
        'servers_max' => 5,
        'created'  => '3 weeks ago',
        'cpu_avg'  => 8,
        'monthly_cost' => 14.98,
        'cpu_spark' => [10, 8, 12, 6, 8, 14, 10, 4, 6, 8, 10, 8],
        'status_breakdown' => ['running' => 1, 'stopped' => 1],
    ],
];

/* ──────────────────────────────────────────
   AGGREGATED TOTALS  (auto-computed from $projects)
   Do not edit manually — change $projects above.
   ────────────────────────────────────────── */
$total_servers = array_sum(array_column($projects, 'servers'));
$total_running = array_sum(array_map(fn($p) => $p['status_breakdown']['running'], $projects));
$total_monthly = array_sum(array_column($projects, 'monthly_cost'));

/* ──────────────────────────────────────────
   SPARKLINES for the Mission Control hero
   Any length; renderer auto-scales.
   ────────────────────────────────────────── */
$mtd_cost_spark  = [4.2, 5.8, 7.1, 9.3, 11.2, 14.0, 16.8, 19.5, 22.3, 25.4, 28.1, 30.8, 33.5, 36.0, 38.2, 40.1, 42.3];
$bandwidth_spark = [8, 12, 18, 22, 28, 35, 30, 42, 48, 52, 47, 55, 60, 58, 65, 68, 72];
$servers_spark   = [4, 4, 5, 5, 6, 7, 8, 8, 9, 9, 10, 10, 10];

/* ──────────────────────────────────────────
   MISSION CONTROL HERO  (4 metric tiles at top)
   ──────────────────────────────────────────
   Each tile:
   • key          → unique identifier
   • label        → tile title (translation key rendered)
   • value        → main big number (int or preformatted string)
   • suffix       → appended after value (' GB', '')
   • total_suffix → appended after value in smaller text
                    (e.g. ' / 10' or ' active')
   • delta        → trend string ('+2', '+12.4%', '')
   • delta_type   → 'up' | 'down' | 'neutral' | 'none'
   • spark        → array of numbers (any length), or null
   • icon         → Font Awesome class
   ────────────────────────────────────────── */
$hero_metrics = [
    [
        'key' => 'servers',
        'label' => __('cloud_hero_active_servers'),
        'value' => $total_running,
        'suffix' => '',
        'total_suffix' => ' / ' . $total_servers,
        'delta' => '+2',
        'delta_type' => 'up',
        'spark' => $servers_spark,
        'icon' => 'fa-server',
    ],
    [
        'key' => 'cost',
        'label' => __('cloud_hero_mtd_cost'),
        'value' => '€' . number_format($total_monthly, 2),
        'suffix' => '',
        'total_suffix' => '',
        'delta' => '+12.4%',
        'delta_type' => 'neutral',
        'spark' => $mtd_cost_spark,
        'icon' => 'fa-circle-dollar-to-slot',
    ],
    [
        'key' => 'bandwidth',
        'label' => __('cloud_hero_bandwidth'),
        'value' => '72',
        'suffix' => ' GB',
        'total_suffix' => '',
        'delta' => '+8.1%',
        'delta_type' => 'neutral',
        'spark' => $bandwidth_spark,
        'icon' => 'fa-wave-square',
    ],
    [
        'key' => 'regions',
        'label' => __('cloud_hero_regions'),
        'value' => '3',
        'suffix' => '',
        'total_suffix' => ' ' . __('cloud_hero_regions_active'),
        'delta' => '',
        'delta_type' => 'none',
        'spark' => null,
        'icon' => 'fa-globe',
    ],
];

/* ──────────────────────────────────────────
   LIMITS TAB  (used / max pairs shown as progress meters)
   ────────────────────────────────────────── */
$limits_stats = [
    'servers'   => ['used' => $total_servers,    'max' => 15],
    'ips'       => ['used' => 4,                 'max' => 5],
    'projects'  => ['used' => count($projects),  'max' => 5],
    'terminate' => ['used' => 1,                 'max' => 15],
];

/* ──────────────────────────────────────────
   LIMIT INCREASE REQUESTS  (history table under the radial dials)
   Backend: pull last N rows for this user, newest first.
   Statuses: pending | approved | rejected
   ────────────────────────────────────────── */
$limit_requests = [
    ['date' => '10/04/2026', 'type' => 'servers',  'from' => 10, 'to' => 15, 'status' => 'approved'],
    ['date' => '02/03/2026', 'type' => 'ips',      'from' => 3,  'to' => 5,  'status' => 'approved'],
    ['date' => '18/02/2026', 'type' => 'projects', 'from' => 3,  'to' => 8,  'status' => 'pending'],
];

/* ──────────────────────────────────────────
   REFERRAL TAB
   ────────────────────────────────────────── */
$referral_stats = [
    'referrals' => 0,
    'pending'   => 0,
    'paid'      => 0,
];

// Stable per-user derived codes (backend: generate once on signup, store)
$referral_code = 'YOTTA-' . strtoupper(substr(md5('user-seed'), 0, 6));
$referral_link = 'https://yottasrc.com/r/' . strtolower(substr(md5('user-seed'), 0, 8));

/* ──────────────────────────────────────────
   BILLING TAB SUMMARY CARDS
   ──────────────────────────────────────────
   • current_month_usage → running total this month
   • last_invoice        → last invoice amount
   • next_charge         → projected next charge
   • next_charge_date    → dd/mm/yyyy string
   • lifetime_spent      → all-time total
   ────────────────────────────────────────── */
$billing_summary = [
    'current_month_usage' => $total_monthly,
    'last_invoice'        => 7.49,
    'next_charge'         => $total_monthly,
    'next_charge_date'    => '01/05/2026',
    'lifetime_spent'      => 147.42,
];

/* ──────────────────────────────────────────
   COST TIMELINE (30 days)  — generated for mock
   Backend: replace with an array of 30 daily totals.
   ────────────────────────────────────────── */
$cost_timeline = [];
for ($i = 0; $i < 30; $i++) {
    $cost_timeline[] = round(2.5 + $i * 0.15 + (sin($i / 3) * 1.2), 2);
}

/* ──────────────────────────────────────────
   AUTO-RECHARGE TOGGLE  (saved preference)
   ────────────────────────────────────────── */
$autorecharge_enabled = false;

/* ══════════════  END OF MOCK DATA  ══════════════ */
?>

<?php
// Verification banner (shown only for unverified accounts; backend sets $is_verified)
$is_verified = $is_verified ?? false;
if (!$is_verified) {
    include __DIR__ . '/../../components/verification-banner.php';
}
?>

<!-- ═══════════════════════════════════════════
     MISSION CONTROL — live stats hero strip
     ═══════════════════════════════════════════ -->
<?php if ($page_state === 'active'): ?>
<section class="db-mc" aria-label="<?php echo e(__('cloud_hero_aria')); ?>">
    <div class="db-mc__ambient"></div>
    <div class="db-mc__head">
        <div class="db-mc__title-wrap">
            <h1 class="db-mc__title">
                <span class="db-mc__eyebrow"><?php echo e(__('cloud_hero_eyebrow')); ?></span>
                <?php echo e(__('cloud_title')); ?>
            </h1>
            <p class="db-mc__sub"><?php echo e(__('cloud_hero_sub')); ?></p>
        </div>
        <div class="db-mc__actions">
            <button type="button" class="db-mc__link-btn" data-modal-open="newProjectModal">
                <i class="fas fa-plus"></i>
                <span><?php echo e(__('cloud_new_project_short')); ?></span>
            </button>
            <button type="button" class="db-mc__quick-btn db-mc__quick-btn--primary" data-modal-open="deployServerPickerModal">
                <i class="fas fa-rocket"></i>
                <?php echo e(__('cloud_hero_deploy_cta')); ?>
            </button>
        </div>
    </div>

    <div class="db-mc__grid">
        <?php foreach ($hero_metrics as $__m_i => $m):
            // First 2 metrics (servers + cost) are the primary KPIs — get subtle lead accent.
            $is_lead = $__m_i < 2;
        ?>
        <div class="db-mc__metric<?php echo $is_lead ? ' db-mc__metric--lead' : ''; ?>" data-metric="<?php echo e($m['key']); ?>">
            <div class="db-mc__metric-head">
                <span class="db-mc__metric-label"><i class="fas <?php echo e($m['icon']); ?>"></i> <?php echo e($m['label']); ?></span>
                <?php if (!empty($m['delta'])): ?>
                <span class="db-mc__delta db-mc__delta--<?php echo e($m['delta_type']); ?>"><?php echo e($m['delta']); ?></span>
                <?php endif; ?>
            </div>
            <div class="db-mc__metric-value">
                <span class="db-mc__metric-num"><?php echo e($m['value']); ?></span><?php if ($m['suffix']): ?><span class="db-mc__metric-suffix"><?php echo e($m['suffix']); ?></span><?php endif; ?><?php if ($m['total_suffix']): ?><span class="db-mc__metric-total"><?php echo e($m['total_suffix']); ?></span><?php endif; ?>
            </div>
            <?php if ($m['spark']): ?>
            <div class="db-mc__spark"><?php echo cloud_sparkline($m['spark'], 200, 34, 'rgb(var(--seed-0))'); ?></div>
            <?php else: ?>
            <div class="db-mc__regions-dots">
                <span class="db-mc__region-dot" data-region="Europe" title="Europe"></span>
                <span class="db-mc__region-dot" data-region="North America" title="North America"></span>
                <span class="db-mc__region-dot db-mc__region-dot--soon" data-region="Asia" title="Asia (coming soon)"></span>
            </div>
            <?php endif; ?>
        </div>
        <?php endforeach; ?>
    </div>
</section>
<?php endif; ?>

<?php if ($page_state === 'error'): ?>

    <div class="db-card"><?php $error_retry = true; include __DIR__ . '/../../components/error-state.php'; ?></div>

<?php elseif ($page_state === 'loading'): ?>

    <!-- Hero stats (mirrors the Mission Control 4 metric cards) -->
    <?php $skel_stat_count = 4; include __DIR__ . '/../../components/skeleton-stats.php'; ?>

    <!-- Tab bar (Projects / Billing / Limits / Referral) -->
    <?php $skel_tabs_count = 4; include __DIR__ . '/../../components/skeleton-tabs.php'; ?>

    <!-- Projects grid -->
    <?php $skel_grid_count = 6; $skel_grid_min = 280; $skel_grid_height = 200; $skel_grid_rich = true;
          include __DIR__ . '/../../components/skeleton-grid.php'; ?>

<?php else: ?>

    <!-- ═══ TAB BAR ═══ -->
    <div class="db-tab-bar" data-tab-bar data-tab-content="#cloudTabs">
        <button type="button" class="db-tab-bar__btn is-active" data-tab-target="projects">
            <i class="fas fa-folder"></i> <?php echo e(__('cloud_tab_projects')); ?>
            <span class="db-tab-bar__count"><?php echo count($projects); ?></span>
        </button>
        <button type="button" class="db-tab-bar__btn" data-tab-target="billing">
            <i class="fas fa-receipt"></i> <?php echo e(__('cloud_tab_billing')); ?>
        </button>
        <button type="button" class="db-tab-bar__btn" data-tab-target="limits">
            <i class="fas fa-gauge-high"></i> <?php echo e(__('cloud_tab_limits')); ?>
        </button>
        <button type="button" class="db-tab-bar__btn" data-tab-target="referral">
            <i class="fas fa-gift"></i> <?php echo e(__('cloud_tab_referral')); ?>
        </button>
    </div>

    <!-- ═══ TAB PANES ═══ -->
    <div id="cloudTabs">

        <!-- ═══════════════════════════════════════════
             PANE — PROJECTS (premium redesign)
             ═══════════════════════════════════════════ -->
        <div class="db-tab-pane is-active" data-tab-pane="projects">

            <?php if ($page_state === 'empty' || empty($projects)): ?>
                <!-- Empty state: single prominent CTA card -->
                <div class="db-px-empty">
                    <div class="db-px-empty__illustration">
                        <svg viewBox="0 0 120 120" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <defs>
                                <linearGradient id="pxGrad1" x1="0" y1="0" x2="1" y2="1">
                                    <stop offset="0%" stop-color="rgb(var(--seed-0))" stop-opacity="0.7"/>
                                    <stop offset="100%" stop-color="rgb(var(--seed-3))" stop-opacity="0.2"/>
                                </linearGradient>
                            </defs>
                            <rect x="20" y="30" width="80" height="60" rx="8" fill="url(#pxGrad1)" opacity="0.3"/>
                            <rect x="28" y="38" width="64" height="6" rx="3" fill="rgb(var(--seed-0))" opacity="0.5"/>
                            <rect x="28" y="50" width="40" height="4" rx="2" fill="rgb(var(--seed-0))" opacity="0.3"/>
                            <rect x="28" y="60" width="52" height="4" rx="2" fill="rgb(var(--seed-0))" opacity="0.3"/>
                            <rect x="28" y="70" width="30" height="4" rx="2" fill="rgb(var(--seed-0))" opacity="0.3"/>
                            <circle cx="60" cy="60" r="20" fill="rgb(var(--seed-0))" opacity="0.15"/>
                            <path d="M55 60 l4 4 l8 -8" stroke="rgb(var(--seed-0))" stroke-width="2.5" fill="none" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <h3 class="db-px-empty__title"><?php echo e(__('cloud_empty_title')); ?></h3>
                    <p class="db-px-empty__desc"><?php echo e(__('cloud_empty_desc')); ?></p>
                    <button type="button" class="db-px-empty__cta" data-modal-open="newProjectModal">
                        <i class="fas fa-plus"></i>
                        <?php echo e(__('cloud_new_project')); ?>
                    </button>
                    <div class="db-px-empty__tips">
                        <div class="db-px-empty__tip"><i class="fas fa-folder"></i> <?php echo e(__('cloud_empty_tip1')); ?></div>
                        <div class="db-px-empty__tip"><i class="fas fa-layer-group"></i> <?php echo e(__('cloud_empty_tip2')); ?></div>
                        <div class="db-px-empty__tip"><i class="fas fa-key"></i> <?php echo e(__('cloud_empty_tip3')); ?></div>
                    </div>
                    <div class="db-px-empty__protip">
                        <i class="fas fa-lightbulb"></i>
                        <span><?php echo e(__('cloud_empty_protip')); ?></span>
                    </div>
                </div>

            <?php else: ?>

                <!-- Project grid — premium with identicons + ring charts + inline metrics -->
                <div class="db-px-grid">
                    <?php foreach ($projects as $__px_i => $p):
                        $project_url = DASH_BASE_PATH . '/pages/cloud/project/servers.php?id=' . urlencode($p['id']);
                        $seed_idx    = cloud_project_seed($p['id']);
                        $servers_pct = $p['servers_max'] > 0 ? round(($p['servers'] / $p['servers_max']) * 100) : 0;
                        $ring_circ   = 2 * M_PI * 20;
                        $ring_offset = $ring_circ - ($servers_pct / 100) * $ring_circ;
                        $is_recent   = ($__px_i === 0); // First in the array = most recent
                    ?>
                    <div class="db-px-card db-px-card--clickable<?php echo $is_recent ? ' db-px-card--recent' : ''; ?>" data-seed="<?php echo $seed_idx; ?>" style="--px-seed: var(--seed-<?php echo $seed_idx; ?>);" data-href="<?php echo e($project_url); ?>" role="link" tabindex="0" onclick="if (event.target.closest('.db-px-card__menu, a, button')) return; window.location=this.dataset.href;" onkeydown="if ((event.key==='Enter'||event.key===' ') && !event.target.closest('.db-px-card__menu, a, button')) { event.preventDefault(); window.location=this.dataset.href; }">
                        <div class="db-px-card__head">
                            <div class="db-px-card__icon-wrap">
                                <!-- Ring chart behind the identicon -->
                                <svg class="db-px-card__ring" viewBox="0 0 44 44" aria-hidden="true">
                                    <circle cx="22" cy="22" r="20" fill="none" stroke="rgba(var(--px-seed), 0.15)" stroke-width="2.5"/>
                                    <circle cx="22" cy="22" r="20" fill="none"
                                            stroke="rgb(var(--px-seed))" stroke-width="2.5"
                                            stroke-linecap="round" stroke-dasharray="<?php echo number_format($ring_circ, 2); ?>"
                                            stroke-dashoffset="<?php echo number_format($ring_offset, 2); ?>"
                                            transform="rotate(-90 22 22)"/>
                                </svg>
                                <?php echo cloud_project_identicon($p['id'], 28); ?>
                            </div>
                            <div class="db-px-card__title-block">
                                <h4 class="db-px-card__name">
                                    <a href="<?php echo e($project_url); ?>" class="db-px-card__link"><?php echo e($p['name']); ?></a>
                                </h4>
                                <div class="db-px-card__id-row">
                                    <span class="db-px-card__id">#<?php echo e($p['id']); ?></span>
                                    <?php if ($is_recent): ?>
                                    <span class="db-px-card__badge"><i class="fas fa-sparkles"></i> <?php echo e(__('cloud_px_most_recent')); ?></span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="db-px-card__menu db-dropdown-wrapper">
                                <button type="button" class="db-px-card__menu-btn" data-dropdown-toggle aria-label="<?php echo e(__('cloud_project_actions')); ?>">
                                    <i class="fas fa-ellipsis-vertical"></i>
                                </button>
                                <div class="db-dropdown-menu">
                                    <a href="<?php echo e($project_url); ?>" class="db-dropdown-item">
                                        <i class="fas fa-arrow-up-right-from-square"></i> <?php echo e(__('cloud_project_open')); ?>
                                    </a>
                                    <button class="db-dropdown-item" data-rename-project data-project-id="<?php echo e($p['id']); ?>" data-project-name="<?php echo e($p['name']); ?>">
                                        <i class="fas fa-pen"></i> <?php echo e(__('cloud_project_rename')); ?>
                                    </button>
                                    <button class="db-dropdown-item" onclick="navigator.clipboard.writeText('#<?php echo e($p['id']); ?>'); DashToast.show('success','','Project ID copied.')">
                                        <i class="fas fa-copy"></i> <?php echo e(__('cloud_project_copy_id')); ?>
                                    </button>
                                    <div class="db-dropdown-divider"></div>
                                    <button class="db-dropdown-item db-dropdown-item--danger" data-delete-project data-project-id="<?php echo e($p['id']); ?>" data-project-name="<?php echo e($p['name']); ?>">
                                        <i class="fas fa-trash"></i> <?php echo e(__('cloud_project_delete')); ?>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Inline live metrics -->
                        <div class="db-px-card__metrics">
                            <div class="db-px-card__metric">
                                <div class="db-px-card__metric-label"><?php echo e(__('cloud_px_servers')); ?></div>
                                <div class="db-px-card__metric-value">
                                    <?php echo $p['servers']; ?><span class="db-px-card__metric-max">/<?php echo $p['servers_max']; ?></span>
                                </div>
                                <div class="db-px-card__metric-sub">
                                    <span class="db-px-dot db-px-dot--running"></span> <?php echo $p['status_breakdown']['running']; ?> running
                                    <?php if ($p['status_breakdown']['stopped']): ?>
                                    · <span class="db-px-dot db-px-dot--stopped"></span> <?php echo $p['status_breakdown']['stopped']; ?> stopped
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="db-px-card__metric">
                                <div class="db-px-card__metric-label">
                                    <?php echo e(__('cloud_px_cpu_avg')); ?>
                                    <span class="db-px-card__metric-inline"><?php echo $p['cpu_avg']; ?>%</span>
                                </div>
                                <div class="db-px-card__spark">
                                    <?php echo cloud_sparkline($p['cpu_spark'], 140, 30, 'rgb(var(--px-seed))'); ?>
                                </div>
                            </div>
                        </div>

                        <!-- Footer: cost + CTA -->
                        <div class="db-px-card__foot">
                            <div class="db-px-card__cost">
                                <span class="db-px-card__cost-label"><?php echo e(__('cloud_px_monthly')); ?></span>
                                <span class="db-px-card__cost-value"><?php echo format_money($p['monthly_cost']); ?></span>
                            </div>
                            <a href="<?php echo e($project_url); ?>" class="db-px-card__open">
                                <span><?php echo e(__('cloud_px_open')); ?></span>
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <?php endforeach; ?>

                    <!-- New Project card — breathing border -->
                    <button type="button" class="db-px-new" data-modal-open="newProjectModal">
                        <span class="db-px-new__border"></span>
                        <div class="db-px-new__inner">
                            <div class="db-px-new__icon-wrap">
                                <i class="fas fa-plus"></i>
                            </div>
                            <div class="db-px-new__label"><?php echo e(__('cloud_new_project')); ?></div>
                            <div class="db-px-new__sub"><?php echo e(__('cloud_px_new_sub')); ?></div>
                        </div>
                    </button>
                </div>

                <div class="db-px-hint">
                    <i class="fas fa-lightbulb"></i>
                    <span><?php echo __('cloud_projects_warn'); ?></span>
                </div>
            <?php endif; ?>
        </div>


        <!-- ═══════════════════════════════════════════
             PANE — BILLING (premium: cost timeline + projection)
             ═══════════════════════════════════════════ -->
        <div class="db-tab-pane" data-tab-pane="billing">
            <!-- Hero: current month with projection -->
            <div class="db-bx-hero">
                <div class="db-bx-hero__left">
                    <div class="db-bx-hero__eyebrow"><?php echo e(__('cloud_bx_current_month')); ?> · <?php echo date('F Y'); ?></div>
                    <div class="db-bx-hero__value">
                        <?php echo format_money($billing_summary['current_month_usage']); ?>
                        <span class="db-bx-hero__trend db-bx-hero__trend--up">
                            <i class="fas fa-arrow-trend-up"></i> 12.4%
                        </span>
                    </div>
                    <div class="db-bx-hero__projected">
                        <i class="fas fa-binoculars"></i>
                        <?php echo e(__('cloud_bx_projected')); ?>
                        <strong><?php echo format_money($billing_summary['next_charge'] * 1.15); ?></strong>
                        · <?php echo e(__('cloud_bx_based_on_usage')); ?>
                    </div>
                </div>
                <div class="db-bx-hero__chart">
                    <?php echo cloud_sparkline($cost_timeline, 320, 80, 'rgb(var(--seed-0))'); ?>
                    <div class="db-bx-hero__chart-label">
                        <span>€0</span>
                        <span><?php echo format_money(max($cost_timeline), 0); ?></span>
                    </div>
                </div>
            </div>

            <!-- Quick stats row -->
            <div class="db-bx-stats">
                <div class="db-bx-stat">
                    <div class="db-bx-stat__icon"><i class="fas fa-file-invoice"></i></div>
                    <div>
                        <div class="db-bx-stat__label"><?php echo e(__('cloud_bill_last_invoice')); ?></div>
                        <div class="db-bx-stat__value"><?php echo format_money($billing_summary['last_invoice']); ?></div>
                        <div class="db-bx-stat__sub">INV-1047 · <?php echo e(__('common_paid')); ?></div>
                    </div>
                </div>
                <div class="db-bx-stat">
                    <div class="db-bx-stat__icon"><i class="fas fa-calendar-check"></i></div>
                    <div>
                        <div class="db-bx-stat__label"><?php echo e(__('cloud_bill_next_charge')); ?></div>
                        <div class="db-bx-stat__value"><?php echo format_money($billing_summary['next_charge']); ?></div>
                        <div class="db-bx-stat__sub"><?php echo e($billing_summary['next_charge_date']); ?></div>
                    </div>
                </div>
                <div class="db-bx-stat">
                    <div class="db-bx-stat__icon"><i class="fas fa-chart-line"></i></div>
                    <div>
                        <div class="db-bx-stat__label"><?php echo e(__('cloud_bill_lifetime')); ?></div>
                        <div class="db-bx-stat__value"><?php echo format_money($billing_summary['lifetime_spent']); ?></div>
                        <div class="db-bx-stat__sub"><?php echo e(__('cloud_bill_total_spent')); ?></div>
                    </div>
                </div>
            </div>

            <!-- Auto-recharge card (premium) -->
            <div class="db-bx-recharge">
                <div class="db-bx-recharge__icon"><i class="fas fa-bolt"></i></div>
                <div class="db-bx-recharge__body">
                    <h4 class="db-bx-recharge__title"><?php echo e(__('cloud_autorecharge_title')); ?></h4>
                    <p class="db-bx-recharge__desc">
                        <?php echo e($autorecharge_enabled ? __('cloud_autorecharge_on') : __('cloud_autorecharge_off')); ?>
                    </p>
                </div>
                <label class="db-toggle db-bx-recharge__toggle">
                    <input type="checkbox" <?php echo $autorecharge_enabled ? 'checked' : ''; ?> onchange="DashToast.show('success','',this.checked?'<?php echo e(__('cloud_autorecharge_enabled')); ?>':'<?php echo e(__('cloud_autorecharge_disabled')); ?>')">
                    <span class="db-toggle-track"><span class="db-toggle-thumb"></span></span>
                </label>
            </div>

            <!-- Current month usage breakdown per project -->
            <div class="db-card  db-mb">
                <div class="db-card-header db-card-header--md">
                    <h3 class="db-card-title">
                        <i class="fas fa-chart-pie db-card-title-icon"></i>
                        <?php echo e(__('cloud_bill_usage_title', ['month' => date('F Y')])); ?>
                    </h3>
                    <span class="db-card-title-meta">
                        <?php echo e(__('cloud_bill_usage_total')); ?>
                        <strong><?php echo format_money($total_monthly); ?></strong>
                    </span>
                </div>
                <div class="db-card-body--table">
                    <div class="db-table-wrapper">
                        <table class="db-table">
                            <thead>
                                <tr>
                                    <th><?php echo e(__('cloud_bill_usage_col_project')); ?></th>
                                    <th><?php echo e(__('cloud_bill_usage_col_servers')); ?></th>
                                    <th><?php echo e(__('cloud_bill_usage_col_status')); ?></th>
                                    <th class="db-table-cell--right"><?php echo e(__('cloud_bill_usage_col_usage')); ?></th>
                                    <th class="db-table-cell--right"><?php echo e(__('cloud_bill_usage_col_share')); ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($projects as $p):
                                    $share = $total_monthly > 0 ? round(($p['monthly_cost'] / $total_monthly) * 100) : 0;
                                    $proj_url = cloud_project_url('servers', $p['id']);
                                ?>
                                <tr class="db-table-row-link" onclick="window.location='<?php echo e($proj_url); ?>'">
                                    <td>
                                        <div class="db-table-cell-main">
                                            <a href="<?php echo e($proj_url); ?>" class="db-table-cell-link" onclick="event.stopPropagation();"><?php echo e($p['name']); ?></a>
                                            <span class="db-table-cell-sub">#<?php echo e($p['id']); ?></span>
                                        </div>
                                    </td>
                                    <td><?php echo (int)$p['servers']; ?>/<?php echo (int)$p['servers_max']; ?></td>
                                    <td>
                                        <span class="db-badge db-badge--active">
                                            <?php echo e(__('cloud_px_running', ['n' => (int)$p['status_breakdown']['running']])); ?>
                                        </span>
                                        <?php if (!empty($p['status_breakdown']['stopped'])): ?>
                                        <span class="db-badge db-badge--cancelled">
                                            <?php echo (int)$p['status_breakdown']['stopped']; ?> <?php echo e(__('cloud_px_stopped_short')); ?>
                                        </span>
                                        <?php endif; ?>
                                    </td>
                                    <td class="db-table-cell--right"><span class="db-table-cell-amount"><?php echo format_money($p['monthly_cost']); ?></span></td>
                                    <td class="db-table-cell--right">
                                        <div class="db-bill-share">
                                            <div class="db-bill-share__bar">
                                                <span class="db-bill-share__fill" style="width:<?php echo (int)$share; ?>%;"></span>
                                            </div>
                                            <span class="db-bill-share__pct"><?php echo (int)$share; ?>%</span>
                                        </div>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Link to invoices -->
            <a href="<?php echo DASH_BASE_PATH; ?>/pages/billing/invoices.php" class="db-bx-link">
                <i class="fas fa-file-invoice"></i>
                <span><?php echo e(__('cloud_billing_invoices_link_text')); ?> <strong><?php echo e(__('cloud_billing_invoices_link')); ?></strong></span>
                <i class="fas fa-arrow-right db-bx-link__arrow"></i>
            </a>
        </div>


        <!-- ═══════════════════════════════════════════
             PANE — LIMITS (premium: radial dials)
             ═══════════════════════════════════════════ -->
        <div class="db-tab-pane" data-tab-pane="limits">

            <!-- Hero intro -->
            <div class="db-lx-hero">
                <div class="db-lx-hero__main">
                    <div class="db-lx-hero__icon"><i class="fas fa-gauge-high"></i></div>
                    <div>
                        <div class="db-lx-hero__eyebrow"><?php echo e(__('cloud_lx_eyebrow')); ?></div>
                        <h2 class="db-lx-hero__title"><?php echo e(__('cloud_lx_title')); ?></h2>
                        <p class="db-lx-hero__sub"><?php echo e(__('cloud_limits_desc')); ?></p>
                    </div>
                </div>
                <button type="button" class="db-lx-hero__cta" onclick="DashModal.open('limitIncreaseModal')">
                    <i class="fas fa-plus"></i>
                    <?php echo e(__('cloud_limits_increase')); ?>
                </button>
            </div>

            <!-- Radial dials -->
            <?php
            function render_dial($key, $icon, $label, $stats, $seed) {
                $raw_pct = $stats['max'] > 0 ? round(($stats['used'] / $stats['max']) * 100) : 0;
                $pct     = max(0, min(100, $raw_pct)); // clamp visual ring to [0,100]
                $zone    = $pct >= 90 ? 'danger' : ($pct >= 70 ? 'warning' : ($pct >= 40 ? 'info' : 'ok'));
                $circ    = 2 * M_PI * 34;
                $offset  = $circ - ($pct / 100) * $circ;
                ?>
                <div class="db-lx-dial" data-zone="<?php echo e($zone); ?>" style="--lx-seed: var(--seed-<?php echo $seed; ?>);">
                    <div class="db-lx-dial__ring">
                        <svg viewBox="0 0 80 80" aria-hidden="true">
                            <circle cx="40" cy="40" r="34" fill="none" stroke="rgba(var(--lx-seed), 0.15)" stroke-width="6"/>
                            <circle cx="40" cy="40" r="34" fill="none"
                                    stroke="rgb(var(--lx-seed))" stroke-width="6"
                                    stroke-linecap="round"
                                    stroke-dasharray="<?php echo number_format($circ, 2); ?>"
                                    stroke-dashoffset="<?php echo number_format($offset, 2); ?>"
                                    transform="rotate(-90 40 40)"/>
                        </svg>
                        <div class="db-lx-dial__center">
                            <div class="db-lx-dial__pct"><?php echo $pct; ?><span>%</span></div>
                            <div class="db-lx-dial__icon"><i class="fas <?php echo $icon; ?>"></i></div>
                        </div>
                    </div>
                    <div class="db-lx-dial__meta">
                        <div class="db-lx-dial__label"><?php echo e($label); ?></div>
                        <div class="db-lx-dial__count">
                            <span class="db-lx-dial__used"><?php echo $stats['used']; ?></span>
                            <span class="db-lx-dial__sep">/</span>
                            <span class="db-lx-dial__max"><?php echo $stats['max']; ?></span>
                        </div>
                        <div class="db-lx-dial__zone db-lx-dial__zone--<?php echo e($zone); ?>">
                            <?php echo e(__('cloud_lx_zone_' . $zone)); ?>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>

            <div class="db-lx-grid">
                <?php render_dial('servers',   'fa-server',             __('cloud_limit_servers'),   $limits_stats['servers'],   0); ?>
                <?php render_dial('ips',       'fa-globe',              __('cloud_limit_ips'),       $limits_stats['ips'],       1); ?>
                <?php render_dial('projects',  'fa-folder-tree',        __('cloud_limit_projects'),  $limits_stats['projects'],  2); ?>
                <?php render_dial('terminate', 'fa-arrow-rotate-right', __('cloud_limit_terminate'), $limits_stats['terminate'], 3); ?>
            </div>

            <div class="db-lx-hint">
                <i class="fas fa-lightbulb"></i>
                <?php echo e(__('cloud_limits_cta_text')); ?>
            </div>

            <!-- Past limit increase requests -->
            <div class="db-card db-mt ">
                <div class="db-card-header db-card-header--md">
                    <h3 class="db-card-title">
                        <i class="fas fa-clock-rotate-left db-card-title-icon"></i>
                        <?php echo e(__('cloud_limit_req_history')); ?>
                    </h3>
                </div>
                <?php if (empty($limit_requests)): ?>
                    <div class="db-card-body">
                        <?php
                        $empty_icon  = 'fa-gauge-high';
                        $empty_title = __('cloud_limit_req_empty');
                        $empty_desc  = '';
                        include __DIR__ . '/../../components/empty-state.php';
                        ?>
                    </div>
                <?php else: ?>
                    <div class="db-card-body--table">
                        <div class="db-table-wrapper">
                            <table class="db-table">
                                <thead>
                                    <tr>
                                        <th><?php echo e(__('cloud_limit_req_col_date')); ?></th>
                                        <th><?php echo e(__('cloud_limit_req_col_type')); ?></th>
                                        <th class="db-table-cell--right"><?php echo e(__('cloud_limit_req_col_from')); ?></th>
                                        <th class="db-table-cell--right"><?php echo e(__('cloud_limit_req_col_to')); ?></th>
                                        <th class="db-table-cell--right"><?php echo e(__('cloud_limit_req_col_status')); ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($limit_requests as $req):
                                        $badge_cls = [
                                            'pending'  => 'db-badge--warning',
                                            'approved' => 'db-badge--active',
                                            'rejected' => 'db-badge--cancelled',
                                        ][$req['status']] ?? 'db-badge--cancelled';
                                    ?>
                                    <tr>
                                        <td><?php echo e($req['date']); ?></td>
                                        <td><?php echo e(__('cloud_limit_' . $req['type'])); ?></td>
                                        <td class="db-table-cell--right"><?php echo (int)$req['from']; ?></td>
                                        <td class="db-table-cell--right"><strong><?php echo (int)$req['to']; ?></strong></td>
                                        <td class="db-table-cell--right">
                                            <span class="db-badge <?php echo e($badge_cls); ?>">
                                                <?php echo e(__('cloud_limit_req_status_' . $req['status'])); ?>
                                            </span>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>


        <!-- ═══════════════════════════════════════════
             PANE — REFERRAL (premium redesign)
             ═══════════════════════════════════════════ -->
        <div class="db-tab-pane" data-tab-pane="referral">

            <!-- Hero invite card -->
            <div class="db-rx-hero">
                <div class="db-rx-hero__glow"></div>
                <div class="db-rx-hero__orb db-rx-hero__orb--1"></div>
                <div class="db-rx-hero__orb db-rx-hero__orb--2"></div>

                <div class="db-rx-hero__illustration" aria-hidden="true">
                    <svg viewBox="0 0 160 160" xmlns="http://www.w3.org/2000/svg">
                        <defs>
                            <linearGradient id="rxGradBox" x1="0" y1="0" x2="1" y2="1">
                                <stop offset="0%" stop-color="rgb(var(--seed-0))" stop-opacity="1"/>
                                <stop offset="100%" stop-color="rgb(var(--seed-3))" stop-opacity="1"/>
                            </linearGradient>
                            <linearGradient id="rxGradRibbon" x1="0" y1="0" x2="0" y2="1">
                                <stop offset="0%" stop-color="rgb(var(--seed-2))"/>
                                <stop offset="100%" stop-color="rgb(var(--seed-1))"/>
                            </linearGradient>
                        </defs>
                        <!-- sparkles -->
                        <g class="db-rx-hero__sparkles">
                            <path d="M30 36 l2 6 l6 2 l-6 2 l-2 6 l-2 -6 l-6 -2 l6 -2 z" fill="rgb(var(--seed-2))" opacity="0.9"/>
                            <path d="M130 30 l1.5 4.5 l4.5 1.5 l-4.5 1.5 l-1.5 4.5 l-1.5 -4.5 l-4.5 -1.5 l4.5 -1.5 z" fill="rgb(var(--seed-0))" opacity="0.8"/>
                            <path d="M138 110 l1.2 3.6 l3.6 1.2 l-3.6 1.2 l-1.2 3.6 l-1.2 -3.6 l-3.6 -1.2 l3.6 -1.2 z" fill="rgb(var(--seed-1))" opacity="0.85"/>
                            <path d="M22 110 l1 3 l3 1 l-3 1 l-1 3 l-1 -3 l-3 -1 l3 -1 z" fill="rgb(var(--seed-3))" opacity="0.7"/>
                        </g>
                        <!-- gift box body -->
                        <rect x="36" y="70" width="88" height="64" rx="6" fill="url(#rxGradBox)"/>
                        <!-- gift lid -->
                        <rect x="32" y="60" width="96" height="18" rx="4" fill="url(#rxGradBox)" opacity="0.92"/>
                        <!-- vertical ribbon -->
                        <rect x="74" y="60" width="12" height="74" fill="url(#rxGradRibbon)"/>
                        <!-- horizontal ribbon -->
                        <rect x="32" y="68" width="96" height="10" fill="url(#rxGradRibbon)" opacity="0.9"/>
                        <!-- bow -->
                        <path d="M80 60 C 66 46, 58 52, 64 60 M80 60 C 94 46, 102 52, 96 60" stroke="url(#rxGradRibbon)" stroke-width="5" fill="none" stroke-linecap="round"/>
                        <circle cx="80" cy="60" r="4" fill="rgb(var(--seed-2))"/>
                    </svg>
                </div>

                <div class="db-rx-hero__body">
                    <div class="db-rx-hero__eyebrow"><i class="fas fa-gift"></i> <?php echo e(__('cloud_rx_eyebrow')); ?></div>
                    <h2 class="db-rx-hero__title"><?php echo e(__('cloud_rx_title')); ?></h2>
                    <p class="db-rx-hero__sub"><?php echo e(__('cloud_rx_sub')); ?></p>

                    <div class="db-rx-chips">
                        <button type="button" class="db-rx-chip" data-rx-copy="<?php echo e($referral_code); ?>" data-rx-label="<?php echo e(__('cloud_rx_code_copied')); ?>">
                            <span class="db-rx-chip__label"><?php echo e(__('cloud_rx_code_label')); ?></span>
                            <span class="db-rx-chip__value"><?php echo e($referral_code); ?></span>
                            <i class="fas fa-copy db-rx-chip__icon"></i>
                        </button>
                        <button type="button" class="db-rx-chip db-rx-chip--wide" data-rx-copy="<?php echo e($referral_link); ?>" data-rx-label="<?php echo e(__('cloud_rx_link_copied')); ?>">
                            <span class="db-rx-chip__label"><?php echo e(__('cloud_rx_link_label')); ?></span>
                            <span class="db-rx-chip__value db-rx-chip__value--mono"><?php echo e($referral_link); ?></span>
                            <i class="fas fa-copy db-rx-chip__icon"></i>
                        </button>
                    </div>

                    <div class="db-rx-share">
                        <span class="db-rx-share__label"><?php echo e(__('cloud_rx_share')); ?></span>
                        <a href="mailto:?subject=<?php echo urlencode(__('cloud_rx_share_subject')); ?>&body=<?php echo urlencode(__('cloud_rx_share_body') . "\n\n" . $referral_link); ?>" class="db-rx-share__btn" data-tooltip="Email" aria-label="Email">
                            <i class="fas fa-envelope"></i>
                        </a>
                        <a href="https://twitter.com/intent/tweet?text=<?php echo urlencode(__('cloud_rx_share_body') . ' ' . $referral_link); ?>" target="_blank" rel="noopener" class="db-rx-share__btn" data-tooltip="X / Twitter" aria-label="Twitter">
                            <i class="fab fa-x-twitter"></i>
                        </a>
                        <a href="https://wa.me/?text=<?php echo urlencode(__('cloud_rx_share_body') . ' ' . $referral_link); ?>" target="_blank" rel="noopener" class="db-rx-share__btn" data-tooltip="WhatsApp" aria-label="WhatsApp">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                        <a href="https://t.me/share/url?url=<?php echo urlencode($referral_link); ?>&text=<?php echo urlencode(__('cloud_rx_share_body')); ?>" target="_blank" rel="noopener" class="db-rx-share__btn" data-tooltip="Telegram" aria-label="Telegram">
                            <i class="fab fa-telegram"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Stats row -->
            <div class="db-rx-stats">
                <div class="db-rx-stat" style="--rx-seed: var(--seed-0);">
                    <div class="db-rx-stat__top">
                        <div class="db-rx-stat__icon"><i class="fas fa-user-check"></i></div>
                        <div class="db-rx-stat__label"><?php echo e(__('cloud_referral_referrals')); ?></div>
                    </div>
                    <div class="db-rx-stat__value"><?php echo $referral_stats['referrals']; ?></div>
                    <div class="db-rx-stat__sub"><?php echo e(__('cloud_rx_stat_signups')); ?></div>
                </div>
                <div class="db-rx-stat" style="--rx-seed: var(--seed-2);">
                    <div class="db-rx-stat__top">
                        <div class="db-rx-stat__icon"><i class="fas fa-hourglass-half"></i></div>
                        <div class="db-rx-stat__label"><?php echo e(__('cloud_referral_pending')); ?></div>
                    </div>
                    <div class="db-rx-stat__value"><?php echo format_money($referral_stats['pending'], 0); ?></div>
                    <div class="db-rx-stat__sub"><?php echo e(__('cloud_rx_stat_pending_sub')); ?></div>
                </div>
                <div class="db-rx-stat" style="--rx-seed: var(--seed-1);">
                    <div class="db-rx-stat__top">
                        <div class="db-rx-stat__icon"><i class="fas fa-circle-dollar-to-slot"></i></div>
                        <div class="db-rx-stat__label"><?php echo e(__('cloud_referral_paid')); ?></div>
                    </div>
                    <div class="db-rx-stat__value"><?php echo format_money($referral_stats['paid'], 0); ?></div>
                    <div class="db-rx-stat__sub"><?php echo e(__('cloud_rx_stat_paid_sub')); ?></div>
                </div>
            </div>

            <!-- Rewards ladder -->
            <div class="db-rx-rewards">
                <div class="db-rx-rewards__head">
                    <h3 class="db-rx-rewards__title"><i class="fas fa-trophy"></i> <?php echo e(__('cloud_rx_rewards_title')); ?></h3>
                    <p class="db-rx-rewards__sub"><?php echo e(__('cloud_rx_rewards_sub')); ?></p>
                </div>
                <div class="db-rx-rewards__grid">
                    <div class="db-rx-reward" style="--rx-seed: var(--seed-1);">
                        <div class="db-rx-reward__badge">01</div>
                        <div class="db-rx-reward__amount">€10</div>
                        <h4 class="db-rx-reward__title"><?php echo e(__('cloud_promo_10_title')); ?></h4>
                        <p class="db-rx-reward__desc"><?php echo e(__('cloud_promo_10_desc')); ?></p>
                        <div class="db-rx-reward__chip"><i class="fas fa-check-circle"></i> <?php echo e(__('cloud_rx_reward_per_signup')); ?></div>
                    </div>
                    <div class="db-rx-reward db-rx-reward--highlight" style="--rx-seed: var(--seed-0);">
                        <div class="db-rx-reward__badge">02</div>
                        <div class="db-rx-reward__amount">€15</div>
                        <h4 class="db-rx-reward__title"><?php echo e(__('cloud_promo_15_title')); ?></h4>
                        <p class="db-rx-reward__desc"><?php echo e(__('cloud_promo_15_desc')); ?></p>
                        <div class="db-rx-reward__chip"><i class="fas fa-bolt"></i> <?php echo e(__('cloud_rx_reward_one_time')); ?></div>
                    </div>
                </div>
            </div>

            <!-- Coming soon note -->
            <div class="db-rx-note">
                <i class="fas fa-rocket"></i>
                <span><?php echo e(__('cloud_referral_code_coming')); ?></span>
            </div>
        </div>

    </div>

<?php endif; ?>

<!-- ═══════════════════════════════════════════
     NEW PROJECT MODAL
     ═══════════════════════════════════════════ -->
<?php
$modal_id    = 'newProjectModal';
$modal_title = __('cloud_new_project_modal_title');
$modal_size  = 'sm';
include __DIR__ . '/../../components/modal.php';
?>
    <form class="db-form" id="newProjectForm" onsubmit="return handleNewProject(event)">
        <p class="db-modal-lead"><?php echo e(__('cloud_new_project_modal_desc')); ?></p>

        <div class="db-form-group ">
            <label class="db-form-label" for="projectName"><?php echo e(__('cloud_project_name_label')); ?> <span class="db-required">*</span></label>
            <div class="db-input-icon-wrapper">
                <input type="text" id="projectName" name="name" class="db-input"
                       placeholder="<?php echo e(__('cloud_project_name_placeholder')); ?>"
                       pattern="[A-Za-z0-9\-_ ]{3,30}"
                       minlength="3" maxlength="30"
                       required autocomplete="off">
                <i class="fas fa-folder-open db-input-icon"></i>
            </div>
            <div class="db-form-hint"><?php echo e(__('cloud_project_name_hint')); ?></div>
        </div>

        <div class="db-form-group">
            <label class="db-form-label" for="projectDesc"><?php echo e(__('cloud_project_desc_label')); ?> <span class="db-form-label-meta">(<?php echo e(__('common_optional')); ?>)</span></label>
            <textarea id="projectDesc" name="description" class="db-input db-textarea"
                      rows="3" maxlength="200"
                      placeholder="<?php echo e(__('cloud_project_desc_placeholder')); ?>"></textarea>
        </div>

        <div class="db-notice db-notice--info db-notice--mt-xs">
            <i class="fas fa-circle-info"></i>
            <span><?php echo __('cloud_new_project_modal_notice'); ?></span>
        </div>
    </form>
<?php
$modal_footer = '
    <button type="button" class="db-btn db-btn--secondary" data-modal-close>
        ' . e(__('common_cancel')) . '
    </button>
    <button type="button" class="db-btn db-btn--primary" id="newProjectSubmit">
        <i class="fas fa-plus"></i> ' . e(__('cloud_create_project')) . '
    </button>
';
include __DIR__ . '/../../components/modal-end.php';
?>

<div class="db-toast-container" id="toastContainer"></div>

<script>
/* ═══════════════════════════════════════════
   NEW PROJECT — creation flow
   ═══════════════════════════════════════════ */
(function () {
    var submitBtn = document.getElementById('newProjectSubmit');
    var form = document.getElementById('newProjectForm');
    var nameInput = document.getElementById('projectName');
    var descInput = document.getElementById('projectDesc');
    if (!submitBtn || !form) return;

    // Focus input when modal opens
    document.querySelectorAll('[data-modal-open="newProjectModal"]').forEach(function (btn) {
        btn.addEventListener('click', function () {
            setTimeout(function () {
                nameInput.focus();
                nameInput.select();
            }, 120);
        });
    });

    function generateProjectId() {
        // Mock: generate a random 5-digit ID (backend will assign real IDs)
        return String(Math.floor(20000 + Math.random() * 80000));
    }

    function handleSubmit() {
        if (!form.reportValidity()) return;

        var name = (nameInput.value || '').trim();
        if (!name) return;

        // Loading state
        submitBtn.disabled = true;
        var originalHtml = submitBtn.innerHTML;
        submitBtn.innerHTML = '<i class="fas fa-circle-notch fa-spin"></i> <?php echo e(__('cloud_creating')); ?>';

        setTimeout(function () {
            // Mock: generate a new project ID and redirect to its servers page.
            // Backend will replace with a real POST + redirect.
            var newId = generateProjectId();
            if (window.DashToast) {
                DashToast.show('success', '', '<?php echo e(__('cloud_project_created', ['id' => '#'])); ?>'.replace('#', '#' + newId));
            }
            window.location.href = '<?php echo DASH_BASE_PATH; ?>/pages/cloud/project/servers.php?id=' + encodeURIComponent(newId);
        }, 700);
    }

    submitBtn.addEventListener('click', handleSubmit);
    form.addEventListener('submit', function (e) { e.preventDefault(); handleSubmit(); });

    // Enter in any field = submit (except textarea — allow newlines)
    nameInput.addEventListener('keydown', function (e) {
        if (e.key === 'Enter') { e.preventDefault(); handleSubmit(); }
    });
})();

// Stub for handleNewProject (HTML form onsubmit)
function handleNewProject(e) { e.preventDefault(); return false; }


/* ═══ Rename Project ═══
   Deferred to DOMContentLoaded because the modal markup is output
   after this <script> block runs. */
document.addEventListener('DOMContentLoaded', function () {
    var renameModal = document.getElementById('renameProjectModal');
    if (!renameModal) return;
    var renameIdEl = document.getElementById('renameProjectId');
    var renameInput = document.getElementById('renameProjectName');
    var renameSaveBtn = document.getElementById('renameProjectSave');
    var targetCard = null;

    document.querySelectorAll('[data-rename-project]').forEach(function (btn) {
        btn.addEventListener('click', function () {
            var id = btn.getAttribute('data-project-id');
            var name = btn.getAttribute('data-project-name');
            targetCard = btn.closest('.db-px-card');
            renameIdEl.textContent = '#' + id;
            renameInput.value = name;
            DashModal.open('renameProjectModal');
            setTimeout(function () { renameInput.focus(); renameInput.select(); }, 100);
        });
    });

    function save() {
        var val = (renameInput.value || '').trim();
        if (val.length < 3 || val.length > 30) {
            if (window.DashToast) DashToast.show('error', '', <?php echo json_encode(__('cloud_project_rename_invalid')); ?>);
            return;
        }
        if (targetCard) {
            var nameEl = targetCard.querySelector('.db-px-card__name');
            if (nameEl) nameEl.textContent = val;
        }
        DashModal.close(renameModal);
        if (window.DashToast) DashToast.show('success', '', <?php echo json_encode(__('cloud_project_rename_success')); ?>);
    }
    renameSaveBtn.addEventListener('click', save);
    renameInput.addEventListener('keydown', function (e) {
        if (e.key === 'Enter') { e.preventDefault(); save(); }
    });
});


/* ═══ Referral — copy to clipboard chips ═══ */
(function () {
    document.querySelectorAll('[data-rx-copy]').forEach(function (btn) {
        btn.addEventListener('click', function () {
            var value = btn.getAttribute('data-rx-copy') || '';
            var label = btn.getAttribute('data-rx-label') || 'Copied.';
            if (!value) return;
            var done = function () {
                btn.classList.add('is-copied');
                if (window.DashToast) DashToast.show('success', '', label);
                setTimeout(function () { btn.classList.remove('is-copied'); }, 1400);
            };
            if (navigator.clipboard && navigator.clipboard.writeText) {
                navigator.clipboard.writeText(value).then(done).catch(function () {
                    // Fallback
                    var ta = document.createElement('textarea');
                    ta.value = value; document.body.appendChild(ta); ta.select();
                    try { document.execCommand('copy'); done(); } catch (e) {}
                    document.body.removeChild(ta);
                });
            } else {
                var ta = document.createElement('textarea');
                ta.value = value; document.body.appendChild(ta); ta.select();
                try { document.execCommand('copy'); done(); } catch (e) {}
                document.body.removeChild(ta);
            }
        });
    });
})();


/* ═══ Delete Project ═══
   Deferred to DOMContentLoaded: modal markup is output after this script. */
document.addEventListener('DOMContentLoaded', function () {
    var modal = document.getElementById('deleteProjectModal');
    if (!modal) return;
    var nameEl = document.getElementById('deleteProjectName');
    var confirmBtn = document.getElementById('deleteProjectConfirm');
    var targetCard = null;
    var targetId = null;

    document.querySelectorAll('[data-delete-project]').forEach(function (btn) {
        btn.addEventListener('click', function () {
            targetId = btn.getAttribute('data-project-id');
            var name = btn.getAttribute('data-project-name');
            targetCard = btn.closest('.db-px-card');
            nameEl.textContent = '#' + targetId + ' - ' + name;
            DashModal.open('deleteProjectModal');
        });
    });

    confirmBtn.addEventListener('click', function () {
        if (targetCard) {
            targetCard.style.transition = 'opacity 0.25s, transform 0.25s';
            targetCard.style.opacity = '0';
            targetCard.style.transform = 'scale(0.96)';
            setTimeout(function () { targetCard.remove(); }, 270);
        }
        // Decrement count
        var countBadge = document.querySelector('[data-tab-target="projects"] .db-tab-bar__count');
        if (countBadge) {
            var c = parseInt(countBadge.textContent, 10) || 0;
            countBadge.textContent = String(Math.max(0, c - 1));
        }
        DashModal.close(modal);
        if (window.DashToast) DashToast.show('success', '', <?php echo json_encode(__('cloud_project_delete_done')); ?>);
    });
});
</script>

<!-- ═══ RENAME PROJECT MODAL ═══ -->
<?php
$modal_id    = 'renameProjectModal';
$modal_title = __('cloud_project_rename_title');
$modal_size  = 'sm';
include __DIR__ . '/../../components/modal.php';
?>
    <form onsubmit="return false;">
        <p class="db-modal-lead"><?php echo e(__('cloud_project_rename_desc')); ?></p>
        <div class="db-form-group">
            <label class="db-form-label"><?php echo e(__('cloud_project_rename_id_label')); ?></label>
            <div class="db-form-static db-form-static--danger" style="margin-bottom: 12px;" id="renameProjectId"></div>
        </div>
        <div class="db-form-group ">
            <label class="db-form-label" for="renameProjectName"><?php echo e(__('cloud_project_rename_name_label')); ?> <span class="db-required">*</span></label>
            <input type="text" id="renameProjectName" class="db-input" required minlength="3" maxlength="30" pattern="[A-Za-z0-9\-_ ]{3,30}">
            <div class="db-form-hint"><?php echo e(__('cloud_project_name_hint')); ?></div>
        </div>
    </form>
<?php
$modal_footer = '
    <button class="db-btn db-btn--secondary" data-modal-close>' . e(__('common_cancel')) . '</button>
    <button class="db-btn db-btn--primary" id="renameProjectSave">
        <i class="fas fa-floppy-disk"></i> ' . e(__('common_save')) . '
    </button>
';
include __DIR__ . '/../../components/modal-end.php';
?>

<!-- ═══ DELETE PROJECT MODAL ═══ -->
<?php
$modal_id    = 'deleteProjectModal';
$modal_title = __('cloud_project_delete_title');
$modal_size  = 'sm';
include __DIR__ . '/../../components/modal.php';
?>
    <div class="db-confirm-body">
        <div class="db-modal-icon db-modal-icon--danger"><i class="fas fa-triangle-exclamation"></i></div>
        <p><?php echo e(__('cloud_project_delete_desc')); ?></p>
        <div class="db-confirm-summary">
            <div class="db-confirm-summary__row">
                <span><?php echo e(__('cloud_project_delete_project')); ?></span>
                <span id="deleteProjectName" class="db-confirm-summary__target"></span>
            </div>
        </div>
        <div class="db-notice db-notice--danger db-confirm-body__warn">
            <i class="fas fa-triangle-exclamation"></i>
            <span><?php echo e(__('cloud_project_delete_warn')); ?></span>
        </div>
    </div>
<?php
$modal_footer = '
    <button class="db-btn db-btn--secondary" data-modal-close>' . e(__('common_cancel')) . '</button>
    <button class="db-btn db-btn--danger" id="deleteProjectConfirm">
        <i class="fas fa-trash"></i> ' . e(__('cloud_project_delete_confirm')) . '
    </button>
';
include __DIR__ . '/../../components/modal-end.php';
?>

<!-- ═══ DEPLOY SERVER PICKER MODAL ═══
     Shown when user hits "Deploy Server" without being inside a project.
     They pick a project from the list, then we navigate to
     create-server.php?id=<selected>.
     Auto-opens when ?deploy=1 is set on the URL. -->
<?php
$modal_id    = 'deployServerPickerModal';
$modal_title = __('cloud_deploy_pick_title');
$modal_size  = 'sm';
include __DIR__ . '/../../components/modal.php';
?>
    <div class="db-deploy-picker">
        <p class="db-deploy-picker__desc"><?php echo e(__('cloud_deploy_pick_desc')); ?></p>
        <div class="db-deploy-picker__list">
            <?php foreach ($projects as $p): ?>
            <a href="<?php echo e(cloud_project_url('create-server', $p['id'])); ?>" class="db-deploy-picker__row">
                <span class="db-deploy-picker__icon" style="--px-seed: var(--seed-<?php echo cloud_project_seed($p['id']); ?>);">
                    <?php echo cloud_project_identicon($p['id'], 28); ?>
                </span>
                <span class="db-deploy-picker__info">
                    <span class="db-deploy-picker__name"><?php echo e($p['name']); ?></span>
                    <span class="db-deploy-picker__meta">#<?php echo e($p['id']); ?> · <?php echo e(__('cloud_px_servers')); ?>: <?php echo (int)$p['servers']; ?>/<?php echo (int)$p['servers_max']; ?></span>
                </span>
                <i class="fas fa-arrow-right db-deploy-picker__arrow"></i>
            </a>
            <?php endforeach; ?>
        </div>
        <button type="button" class="db-deploy-picker__new" data-modal-close data-modal-open="newProjectModal">
            <i class="fas fa-plus"></i> <?php echo e(__('cloud_deploy_pick_new_project')); ?>
        </button>
    </div>
<?php
$modal_footer = '<button class="db-btn db-btn--secondary" data-modal-close>' . e(__('common_cancel')) . '</button>';
include __DIR__ . '/../../components/modal-end.php';
?>

<!-- Auto-open picker when landing with ?deploy=1 (from the Dashboard CTA) -->
<?php if (!empty($_GET['deploy'])): ?>
<script>
(function () {
    document.addEventListener('DOMContentLoaded', function () {
        if (window.DashModal) DashModal.open('deployServerPickerModal');
    });
})();
</script>
<?php endif; ?>

<!-- ═══ LIMIT INCREASE REQUEST MODAL ═══ -->
<?php
$modal_id    = 'limitIncreaseModal';
$modal_title = __('cloud_limit_req_modal_title');
$modal_size  = '';
include __DIR__ . '/../../components/modal.php';

/* Rows — keep in sync with $limits_stats. Icon + label + current max. */
$lx_req_rows = [
    ['key' => 'servers',   'icon' => 'fa-server',             'label' => __('cloud_limit_servers'),   'current' => (int)$limits_stats['servers']['max']],
    ['key' => 'ips',       'icon' => 'fa-globe',              'label' => __('cloud_limit_ips'),       'current' => (int)$limits_stats['ips']['max']],
    ['key' => 'projects',  'icon' => 'fa-folder-tree',        'label' => __('cloud_limit_projects'),  'current' => (int)$limits_stats['projects']['max']],
    ['key' => 'terminate', 'icon' => 'fa-arrow-rotate-right', 'label' => __('cloud_limit_terminate'), 'current' => (int)$limits_stats['terminate']['max']],
];
?>
    <form class="db-form" id="limitIncreaseForm" onsubmit="return false;">
        <p class="db-modal-lead"><?php echo e(__('cloud_limit_req_intro')); ?></p>

        <div class="db-lx-req-grid" role="table" aria-label="<?php echo e(__('cloud_limit_req_modal_title')); ?>">
            <div class="db-lx-req-grid__head" role="row">
                <span role="columnheader"><?php echo e(__('cloud_limit_req_col_resource')); ?></span>
                <span role="columnheader" class="db-lx-req-grid__col-num"><?php echo e(__('cloud_limit_req_current')); ?></span>
                <span role="columnheader" class="db-lx-req-grid__col-num"><?php echo e(__('cloud_limit_req_desired')); ?></span>
            </div>

            <?php foreach ($lx_req_rows as $row): ?>
            <div class="db-lx-req-row" role="row" data-lx-key="<?php echo e($row['key']); ?>" data-lx-current="<?php echo (int)$row['current']; ?>">
                <div class="db-lx-req-row__label" role="cell">
                    <span class="db-lx-req-row__icon"><i class="fas <?php echo e($row['icon']); ?>"></i></span>
                    <span class="db-lx-req-row__name"><?php echo e($row['label']); ?></span>
                </div>
                <div class="db-lx-req-row__current" role="cell"><?php echo (int)$row['current']; ?></div>
                <div class="db-lx-req-row__stepper" role="cell">
                    <div class="db-lx-stepper">
                        <button type="button" class="db-lx-stepper__btn" data-lx-step="-1" aria-label="<?php echo e(__('common_decrease')); ?>">
                            <i class="fas fa-minus"></i>
                        </button>
                        <input type="number" class="db-lx-stepper__input"
                               value="<?php echo (int)$row['current']; ?>"
                               min="<?php echo (int)$row['current']; ?>"
                               step="1">
                        <button type="button" class="db-lx-stepper__btn" data-lx-step="+1" aria-label="<?php echo e(__('common_increase')); ?>">
                            <i class="fas fa-plus"></i>
                        </button>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <div class="db-form-group db-mt">
            <label class="db-form-label" for="lxReqReason">
                <?php echo e(__('cloud_limit_req_reason')); ?>
                <span class="db-form-label-meta">(<?php echo e(__('common_optional')); ?>)</span>
            </label>
            <textarea class="db-input" id="lxReqReason" rows="3" placeholder="<?php echo e(__('cloud_limit_req_reason_ph')); ?>"></textarea>
        </div>
    </form>
<?php
$modal_footer = '
    <button class="db-btn db-btn--secondary" data-modal-close>' . e(__('common_cancel')) . '</button>
    <button class="db-btn db-btn--primary" id="limitIncreaseSubmit" disabled>
        <i class="fas fa-paper-plane"></i> ' . e(__('cloud_limit_req_submit')) . '
    </button>
';
include __DIR__ . '/../../components/modal-end.php';
?>
<script>
document.addEventListener('DOMContentLoaded', function () {
    var modal  = document.getElementById('limitIncreaseModal');
    var form   = document.getElementById('limitIncreaseForm');
    var submit = document.getElementById('limitIncreaseSubmit');
    var reason = document.getElementById('lxReqReason');
    if (!modal || !form || !submit) return;

    var rows = form.querySelectorAll('.db-lx-req-row');

    function clamp(row, val) {
        var current = parseInt(row.getAttribute('data-lx-current'), 10) || 0;
        if (isNaN(val) || val < current) val = current;
        if (val > 9999) val = 9999;
        return val;
    }

    function syncRow(row) {
        var input   = row.querySelector('.db-lx-stepper__input');
        var minus   = row.querySelector('[data-lx-step="-1"]');
        var current = parseInt(row.getAttribute('data-lx-current'), 10) || 0;
        var val     = parseInt(input.value, 10);
        val = clamp(row, val);
        input.value = val;
        minus.disabled = (val <= current);
        row.classList.toggle('is-changed', val > current);
    }

    function refreshSubmit() {
        var anyChanged = false;
        rows.forEach(function (r) {
            if (r.classList.contains('is-changed')) anyChanged = true;
        });
        submit.disabled = !anyChanged;
    }

    rows.forEach(function (row) {
        var input = row.querySelector('.db-lx-stepper__input');
        row.querySelectorAll('[data-lx-step]').forEach(function (btn) {
            btn.addEventListener('click', function () {
                var step = parseInt(btn.getAttribute('data-lx-step'), 10) || 0;
                var val  = (parseInt(input.value, 10) || 0) + step;
                input.value = clamp(row, val);
                syncRow(row);
                refreshSubmit();
            });
        });
        input.addEventListener('input', function () {
            syncRow(row);
            refreshSubmit();
        });
        syncRow(row);
    });
    refreshSubmit();

    submit.addEventListener('click', function () {
        var changed = [];
        rows.forEach(function (r) {
            if (r.classList.contains('is-changed')) {
                changed.push({
                    key:     r.getAttribute('data-lx-key'),
                    from:    parseInt(r.getAttribute('data-lx-current'), 10),
                    to:      parseInt(r.querySelector('.db-lx-stepper__input').value, 10)
                });
            }
        });
        if (!changed.length) return;
        // Backend: POST { items: changed, reason: reason.value } → /api/limit-requests
        if (window.DashModal) DashModal.close(modal);
        if (window.DashToast) DashToast.show('success', '', <?php echo json_encode(__('cloud_limit_req_sent')); ?>);
        // Reset form for next open
        rows.forEach(function (r) {
            var cur = parseInt(r.getAttribute('data-lx-current'), 10) || 0;
            r.querySelector('.db-lx-stepper__input').value = cur;
            syncRow(r);
        });
        if (reason) reason.value = '';
        refreshSubmit();
    });
});
</script>

<?php require_once __DIR__ . '/../../layouts/footer.php'; ?>
