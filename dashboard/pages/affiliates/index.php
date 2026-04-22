<?php
/**
 * YottaSrc Dashboard — Affiliates
 * =================================
 * Two states driven by $enabled:
 *   1. Disabled → activation CTA (hero invite card + big "Enable" button)
 *   2. Enabled  → stats row, rewards ladder, referrals table, payouts
 *                 table, and a "Request Withdrawal" action when the
 *                 available balance is above the minimum payout.
 *
 * First section is cloned from the Referral tab on the Cloud Hub
 * (.db-rx-hero + .db-rx-stats + .db-rx-rewards) so the look & feel
 * stays consistent across the dashboard.
 */

require_once __DIR__ . '/../../layouts/config.php';

$page_title = __('aff_title') . ' — ' . SITE_NAME;
$breadcrumbs_data = [
    ['label' => __('nav_dashboard'), 'url' => DASH_BASE_PATH . '/'],
    ['label' => __('nav_affiliates'), 'url' => null],
];

require_once __DIR__ . '/../../layouts/shell.php';

/* ══════════════════════════════════════════════════════════════════════
   ███  AFFILIATES  ·  MOCK DATA BLOCK  (single source of truth)   ███
   ══════════════════════════════════════════════════════════════════════
   BACKEND TEAM — PLEASE READ:

   This page has TWO states: disabled (user hasn't joined the program yet)
   and enabled (joined, receiving commissions). Flip $enabled to switch
   between them. The enable CTA → POST /affiliates/enable and reload.

   Wiring real data:
     • Replace $stats / $referrals / $payouts with DB queries.
     • Keep the KEYS and SHAPE identical; the UI loops over these keys.
     • Money values: store as floats, render with format_money().
     • ?state= URL param (active | loading | error | empty) for design
       preview — identical to the rest of the dashboard.
   ══════════════════════════════════════════════════════════════════════ */
$page_state = $_GET['state'] ?? 'active';

// Override via URL for easy design preview:
//   ?enabled=0 → disabled state (CTA)
//   ?enabled=1 → enabled state (dashboards)
// Default is enabled so the page looks useful on first visit.
$enabled = isset($_GET['enabled']) ? (bool)(int)$_GET['enabled'] : true;

/* ──────────────────────────────────────────
   ACCOUNT / LINK  (same shape as cloud referral)
   ────────────────────────────────────────── */
$aff_code = 'YOTTA-' . strtoupper(substr(md5('user-seed'), 0, 6));
$aff_link = 'https://yottasrc.com/aff/' . strtolower(substr(md5('user-seed'), 0, 8));

/* ──────────────────────────────────────────
   STATS  (4 KPI tiles — only shown when $enabled)
   ──────────────────────────────────────────
   • visitors    → unique hits on the referral link
   • signups     → completed signups attributed to $aff_code
   • earned      → total commission earned (lifetime, €)
   • available   → balance available for withdrawal (€)
   ────────────────────────────────────────── */
$stats = [
    'visitors'  => 1342,
    'signups'   => 18,
    'earned'    => 142.50,
    'pending'   => 45.00,
    'paid'      => 97.50,
    'available' => 67.50,
];

// Minimum payout required to enable the "Request withdrawal" button.
$min_payout = 50.00;

/* ──────────────────────────────────────────
   REFERRALS  (table rows — who signed up via your link)
   ──────────────────────────────────────────
   • status: 'pending' | 'confirmed' | 'rejected'
     pending   → signed up, waiting for first payment
     confirmed → first payment done, commission credited
     rejected  → marked as fraud/refund, commission voided
   ────────────────────────────────────────── */
$referrals = [
    ['date' => '2026-04-18', 'user' => 'a***@gmail.com',    'source' => 'Twitter',   'amount' => 15.00, 'status' => 'confirmed'],
    ['date' => '2026-04-12', 'user' => 'r***@outlook.com',  'source' => 'Direct',    'amount' => 10.00, 'status' => 'confirmed'],
    ['date' => '2026-04-08', 'user' => 'm***@example.com',  'source' => 'WhatsApp',  'amount' => 10.00, 'status' => 'pending'],
    ['date' => '2026-04-01', 'user' => 's***@gmail.com',    'source' => 'Email',     'amount' => 15.00, 'status' => 'confirmed'],
    ['date' => '2026-03-28', 'user' => 't***@proton.me',    'source' => 'Telegram',  'amount' => 10.00, 'status' => 'confirmed'],
    ['date' => '2026-03-22', 'user' => 'k***@yandex.com',   'source' => 'Twitter',   'amount' =>  0.00, 'status' => 'rejected'],
    ['date' => '2026-03-15', 'user' => 'p***@hotmail.com',  'source' => 'Direct',    'amount' => 10.00, 'status' => 'confirmed'],
    ['date' => '2026-03-10', 'user' => 'd***@icloud.com',   'source' => 'Facebook',  'amount' => 15.00, 'status' => 'confirmed'],
    ['date' => '2026-03-05', 'user' => 'b***@gmail.com',    'source' => 'Direct',    'amount' => 10.00, 'status' => 'pending'],
    ['date' => '2026-02-28', 'user' => 'q***@example.com',  'source' => 'Blog',      'amount' => 10.00, 'status' => 'confirmed'],
    ['date' => '2026-02-20', 'user' => 'l***@gmail.com',    'source' => 'Twitter',   'amount' => 15.00, 'status' => 'confirmed'],
    ['date' => '2026-02-14', 'user' => 'n***@outlook.com',  'source' => 'WhatsApp',  'amount' =>  0.00, 'status' => 'rejected'],
];

/* ──────────────────────────────────────────
   PAYOUTS  (withdrawal history)
   ──────────────────────────────────────────
   • method: 'bank' | 'crypto' | 'credit'
   • status: 'pending' | 'processed' | 'rejected'
   ────────────────────────────────────────── */
$payouts = [
    ['date' => '2026-04-01', 'amount' => 52.50, 'method' => 'credit', 'status' => 'processed', 'ref' => 'PAY-1047'],
    ['date' => '2026-02-01', 'amount' => 45.00, 'method' => 'bank',   'status' => 'processed', 'ref' => 'PAY-1023'],
];

$status_badge = [
    'pending'   => 'pending',
    'confirmed' => 'active',
    'rejected'  => 'cancelled',
    'processed' => 'active',
];

$method_label = [
    'bank'   => __('aff_method_bank'),
    'crypto' => __('aff_method_crypto'),
    'credit' => __('aff_method_credit'),
];

/* ══════════════  END OF MOCK DATA  ══════════════ */
?>

<?php if ($page_state === 'error'): ?>
    <div class="db-card"><?php $error_retry = true; include __DIR__ . '/../../components/error-state.php'; ?></div>

<?php elseif ($page_state === 'loading'): ?>
    <div class="db-skeleton" style="height:200px; border-radius:var(--radius-lg); margin-bottom:18px;"></div>
    <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(180px, 1fr)); gap:12px; margin-bottom:18px;">
        <?php for ($i = 0; $i < 4; $i++): ?>
        <div class="db-skeleton" style="height:110px; border-radius:var(--radius-md);"></div>
        <?php endfor; ?>
    </div>
    <?php $skel_rows = 5; $skel_cols = 5; $skel_has_icon = false; $skel_has_filters = true; include __DIR__ . '/../../components/skeleton-table.php'; ?>

<?php else: ?>

<!-- ═══════════════════════════════════════════
     1. HERO INVITE CARD (cloned from Cloud → Referral)
     ═══════════════════════════════════════════ -->
<div class="db-rx-hero">
    <div class="db-rx-hero__glow"></div>
    <div class="db-rx-hero__orb db-rx-hero__orb--1"></div>
    <div class="db-rx-hero__orb db-rx-hero__orb--2"></div>

    <div class="db-rx-hero__illustration" aria-hidden="true">
        <svg viewBox="0 0 160 160" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <linearGradient id="affGradBox" x1="0" y1="0" x2="1" y2="1">
                    <stop offset="0%" stop-color="rgb(var(--seed-0))" stop-opacity="1"/>
                    <stop offset="100%" stop-color="rgb(var(--seed-3))" stop-opacity="1"/>
                </linearGradient>
                <linearGradient id="affGradRibbon" x1="0" y1="0" x2="0" y2="1">
                    <stop offset="0%" stop-color="rgb(var(--seed-2))"/>
                    <stop offset="100%" stop-color="rgb(var(--seed-1))"/>
                </linearGradient>
            </defs>
            <g class="db-rx-hero__sparkles">
                <path d="M30 36 l2 6 l6 2 l-6 2 l-2 6 l-2 -6 l-6 -2 l6 -2 z" fill="rgb(var(--seed-2))" opacity="0.9"/>
                <path d="M130 30 l1.5 4.5 l4.5 1.5 l-4.5 1.5 l-1.5 4.5 l-1.5 -4.5 l-4.5 -1.5 l4.5 -1.5 z" fill="rgb(var(--seed-0))" opacity="0.8"/>
                <path d="M138 110 l1.2 3.6 l3.6 1.2 l-3.6 1.2 l-1.2 3.6 l-1.2 -3.6 l-3.6 -1.2 l3.6 -1.2 z" fill="rgb(var(--seed-1))" opacity="0.85"/>
                <path d="M22 110 l1 3 l3 1 l-3 1 l-1 3 l-1 -3 l-3 -1 l3 -1 z" fill="rgb(var(--seed-3))" opacity="0.7"/>
            </g>
            <rect x="36" y="70" width="88" height="64" rx="6" fill="url(#affGradBox)"/>
            <rect x="32" y="60" width="96" height="18" rx="4" fill="url(#affGradBox)" opacity="0.92"/>
            <rect x="74" y="60" width="12" height="74" fill="url(#affGradRibbon)"/>
            <rect x="32" y="68" width="96" height="10" fill="url(#affGradRibbon)" opacity="0.9"/>
            <path d="M80 60 C 66 46, 58 52, 64 60 M80 60 C 94 46, 102 52, 96 60" stroke="url(#affGradRibbon)" stroke-width="5" fill="none" stroke-linecap="round"/>
            <circle cx="80" cy="60" r="4" fill="rgb(var(--seed-2))"/>
        </svg>
    </div>

    <div class="db-rx-hero__body">
        <div class="db-rx-hero__eyebrow"><i class="fas fa-handshake-angle"></i> <?php echo e(__('aff_hero_eyebrow')); ?></div>
        <h2 class="db-rx-hero__title"><?php echo e(__('aff_hero_title')); ?></h2>
        <p class="db-rx-hero__sub"><?php echo e(__('aff_hero_sub')); ?></p>

        <?php if ($enabled): ?>
        <div class="db-rx-chips">
            <button type="button" class="db-rx-chip" data-rx-copy="<?php echo e($aff_code); ?>" data-rx-label="<?php echo e(__('aff_code_copied')); ?>">
                <span class="db-rx-chip__label"><?php echo e(__('aff_code_label')); ?></span>
                <span class="db-rx-chip__value"><?php echo e($aff_code); ?></span>
                <i class="fas fa-copy db-rx-chip__icon"></i>
            </button>
            <button type="button" class="db-rx-chip db-rx-chip--wide" data-rx-copy="<?php echo e($aff_link); ?>" data-rx-label="<?php echo e(__('aff_link_copied')); ?>">
                <span class="db-rx-chip__label"><?php echo e(__('aff_link_label')); ?></span>
                <span class="db-rx-chip__value db-rx-chip__value--mono"><?php echo e($aff_link); ?></span>
                <i class="fas fa-copy db-rx-chip__icon"></i>
            </button>
        </div>

        <div class="db-rx-share">
            <span class="db-rx-share__label"><?php echo e(__('aff_share')); ?></span>
            <a href="mailto:?subject=<?php echo urlencode(__('aff_share_subject')); ?>&body=<?php echo urlencode(__('aff_share_body') . "\n\n" . $aff_link); ?>" class="db-rx-share__btn" data-tooltip="Email" aria-label="Email">
                <i class="fas fa-envelope"></i>
            </a>
            <a href="https://twitter.com/intent/tweet?text=<?php echo urlencode(__('aff_share_body') . ' ' . $aff_link); ?>" target="_blank" rel="noopener" class="db-rx-share__btn" data-tooltip="X / Twitter" aria-label="Twitter">
                <i class="fab fa-x-twitter"></i>
            </a>
            <a href="https://wa.me/?text=<?php echo urlencode(__('aff_share_body') . ' ' . $aff_link); ?>" target="_blank" rel="noopener" class="db-rx-share__btn" data-tooltip="WhatsApp" aria-label="WhatsApp">
                <i class="fab fa-whatsapp"></i>
            </a>
            <a href="https://t.me/share/url?url=<?php echo urlencode($aff_link); ?>&text=<?php echo urlencode(__('aff_share_body')); ?>" target="_blank" rel="noopener" class="db-rx-share__btn" data-tooltip="Telegram" aria-label="Telegram">
                <i class="fab fa-telegram"></i>
            </a>
        </div>
        <?php else: ?>
        <!-- Activation CTA — program not enabled yet -->
        <div class="db-aff-enable">
            <button type="button" class="db-btn db-btn--primary db-btn--lg" id="affEnableBtn">
                <i class="fas fa-toggle-on"></i>
                <?php echo e(__('aff_enable_btn')); ?>
            </button>
            <span class="db-aff-enable__terms">
                <i class="fas fa-shield-halved"></i>
                <?php echo e(__('aff_enable_terms_prefix')); ?>
                <a href="<?php echo e(DASH_BASE_PATH); ?>/pages/legal/affiliate-terms.php" onclick="event.preventDefault(); DashToast.show('info','','<?php echo e(__('aff_terms_coming')); ?>');"><?php echo e(__('aff_enable_terms_link')); ?></a>
            </span>
        </div>
        <?php endif; ?>
    </div>
</div>


<?php if (!$enabled): ?>

<!-- ═══════════════════════════════════════════
     2a. DISABLED STATE — benefits + rewards ladder
     ═══════════════════════════════════════════ -->

<!-- Benefits strip -->
<div class="db-aff-benefits">
    <div class="db-aff-benefit">
        <span class="db-aff-benefit__icon" style="--aff-seed: var(--seed-0);"><i class="fas fa-percent"></i></span>
        <div>
            <h4 class="db-aff-benefit__title"><?php echo e(__('aff_benefit_commission_title')); ?></h4>
            <p class="db-aff-benefit__desc"><?php echo e(__('aff_benefit_commission_desc')); ?></p>
        </div>
    </div>
    <div class="db-aff-benefit">
        <span class="db-aff-benefit__icon" style="--aff-seed: var(--seed-2);"><i class="fas fa-infinity"></i></span>
        <div>
            <h4 class="db-aff-benefit__title"><?php echo e(__('aff_benefit_lifetime_title')); ?></h4>
            <p class="db-aff-benefit__desc"><?php echo e(__('aff_benefit_lifetime_desc')); ?></p>
        </div>
    </div>
    <div class="db-aff-benefit">
        <span class="db-aff-benefit__icon" style="--aff-seed: var(--seed-1);"><i class="fas fa-wallet"></i></span>
        <div>
            <h4 class="db-aff-benefit__title"><?php echo e(__('aff_benefit_payout_title')); ?></h4>
            <p class="db-aff-benefit__desc"><?php echo e(__('aff_benefit_payout_desc', ['min' => format_money($min_payout, 0)])); ?></p>
        </div>
    </div>
</div>

<!-- Rewards ladder (reused from referral design) -->
<div class="db-rx-rewards">
    <div class="db-rx-rewards__head">
        <h3 class="db-rx-rewards__title"><i class="fas fa-trophy"></i> <?php echo e(__('aff_rewards_title')); ?></h3>
        <p class="db-rx-rewards__sub"><?php echo e(__('aff_rewards_sub')); ?></p>
    </div>
    <div class="db-rx-rewards__grid">
        <div class="db-rx-reward" style="--rx-seed: var(--seed-1);">
            <div class="db-rx-reward__badge">01</div>
            <div class="db-rx-reward__amount">€10</div>
            <h4 class="db-rx-reward__title"><?php echo e(__('aff_reward_10_title')); ?></h4>
            <p class="db-rx-reward__desc"><?php echo e(__('aff_reward_10_desc')); ?></p>
            <div class="db-rx-reward__chip"><i class="fas fa-check-circle"></i> <?php echo e(__('aff_reward_per_signup')); ?></div>
        </div>
        <div class="db-rx-reward db-rx-reward--highlight" style="--rx-seed: var(--seed-0);">
            <div class="db-rx-reward__badge">02</div>
            <div class="db-rx-reward__amount">€15</div>
            <h4 class="db-rx-reward__title"><?php echo e(__('aff_reward_15_title')); ?></h4>
            <p class="db-rx-reward__desc"><?php echo e(__('aff_reward_15_desc')); ?></p>
            <div class="db-rx-reward__chip"><i class="fas fa-bolt"></i> <?php echo e(__('aff_reward_one_time')); ?></div>
        </div>
    </div>
</div>

<?php else: ?>

<!-- ═══════════════════════════════════════════
     2b. ENABLED STATE — stats, referrals, payouts
     ═══════════════════════════════════════════ -->

<!-- Stats row (4 tiles — visitors, signups, earned, available) -->
<div class="db-rx-stats db-aff-stats">
    <div class="db-rx-stat" style="--rx-seed: var(--seed-0);">
        <div class="db-rx-stat__top">
            <div class="db-rx-stat__icon"><i class="fas fa-eye"></i></div>
            <div class="db-rx-stat__label"><?php echo e(__('aff_stat_visitors')); ?></div>
        </div>
        <div class="db-rx-stat__value"><?php echo number_format($stats['visitors']); ?></div>
        <div class="db-rx-stat__sub"><?php echo e(__('aff_stat_visitors_sub')); ?></div>
    </div>
    <div class="db-rx-stat" style="--rx-seed: var(--seed-3);">
        <div class="db-rx-stat__top">
            <div class="db-rx-stat__icon"><i class="fas fa-user-check"></i></div>
            <div class="db-rx-stat__label"><?php echo e(__('aff_stat_signups')); ?></div>
        </div>
        <div class="db-rx-stat__value"><?php echo (int)$stats['signups']; ?></div>
        <div class="db-rx-stat__sub"><?php echo e(__('aff_stat_signups_sub', ['rate' => $stats['visitors'] > 0 ? round(($stats['signups'] / $stats['visitors']) * 100, 1) : 0])); ?></div>
    </div>
    <div class="db-rx-stat" style="--rx-seed: var(--seed-2);">
        <div class="db-rx-stat__top">
            <div class="db-rx-stat__icon"><i class="fas fa-sack-dollar"></i></div>
            <div class="db-rx-stat__label"><?php echo e(__('aff_stat_earned')); ?></div>
        </div>
        <div class="db-rx-stat__value"><?php echo format_money($stats['earned']); ?></div>
        <div class="db-rx-stat__sub"><?php echo e(__('aff_stat_earned_sub', ['paid' => format_money($stats['paid'])])); ?></div>
    </div>
    <div class="db-rx-stat" style="--rx-seed: var(--seed-1);">
        <div class="db-rx-stat__top">
            <div class="db-rx-stat__icon"><i class="fas fa-wallet"></i></div>
            <div class="db-rx-stat__label"><?php echo e(__('aff_stat_available')); ?></div>
        </div>
        <div class="db-rx-stat__value"><?php echo format_money($stats['available']); ?></div>
        <div class="db-rx-stat__sub"><?php echo e(__('aff_stat_pending_sub', ['pending' => format_money($stats['pending'])])); ?></div>
    </div>
</div>

<!-- Withdrawal CTA bar -->
<?php $can_withdraw = $stats['available'] >= $min_payout; ?>
<div class="db-aff-withdraw<?php echo $can_withdraw ? ' is-ready' : ' is-below-min'; ?>">
    <div class="db-aff-withdraw__info">
        <span class="db-aff-withdraw__icon"><i class="fas fa-money-bill-transfer"></i></span>
        <div>
            <h4 class="db-aff-withdraw__title"><?php echo e(__('aff_withdraw_title')); ?></h4>
            <p class="db-aff-withdraw__desc">
                <?php if ($can_withdraw): ?>
                    <?php echo e(__('aff_withdraw_ready', ['amount' => format_money($stats['available'])])); ?>
                <?php else:
                    $needed = $min_payout - $stats['available'];
                ?>
                    <?php echo e(__('aff_withdraw_not_ready', ['needed' => format_money($needed), 'min' => format_money($min_payout, 0)])); ?>
                <?php endif; ?>
            </p>
        </div>
    </div>
    <button type="button" class="db-btn db-btn--primary"
            <?php echo $can_withdraw ? 'onclick="DashModal.open(\'affWithdrawModal\')"' : 'disabled'; ?>>
        <i class="fas fa-paper-plane"></i>
        <?php echo e(__('aff_withdraw_btn')); ?>
    </button>
</div>

<!-- ═══ REFERRALS TABLE ═══ -->
<div class="db-card db-mt">
    <div class="db-card-header">
        <h3 class="db-card-title"><i class="fas fa-user-group db-card-title-icon"></i> <?php echo e(__('aff_ref_title')); ?></h3>
    </div>
    <!-- Filter bar -->
    <div class="db-fbar">
        <div class="db-fbar__top">
            <div class="db-fbar__search">
                <i class="fas fa-magnifying-glass"></i>
                <input type="text" data-table-search="affReferralsTable" placeholder="<?php echo e(__('aff_ref_search_ph')); ?>">
            </div>
            <div class="db-fbar__tools">
                <select class="db-fbar__sort" data-table-filter="affReferralsTable" data-filter-key="status">
                    <option value=""><?php echo e(__('aff_ref_filter_all')); ?></option>
                    <option value="confirmed"><?php echo e(__('aff_status_confirmed')); ?></option>
                    <option value="pending"><?php echo e(__('aff_status_pending')); ?></option>
                    <option value="rejected"><?php echo e(__('aff_status_rejected')); ?></option>
                </select>
                <?php include __DIR__ . '/../../components/export-dropdown.php'; ?>
            </div>
        </div>
    </div>

    <div class="db-card-body--table db-card-body--no-border-top">
        <div class="db-table-wrapper">
            <table class="db-table" id="affReferralsTable" data-table-tools>
                <thead>
                    <tr>
                        <th class="db-table-sortable" data-sort-key="date"><?php echo e(__('aff_ref_col_date')); ?> <span class="db-sort-icon"><i class="fas fa-sort"></i></span></th>
                        <th class="db-table-sortable" data-sort-key="user"><?php echo e(__('aff_ref_col_user')); ?> <span class="db-sort-icon"><i class="fas fa-sort"></i></span></th>
                        <th class="db-table-sortable db-table-hide-tablet" data-sort-key="source"><?php echo e(__('aff_ref_col_source')); ?> <span class="db-sort-icon"><i class="fas fa-sort"></i></span></th>
                        <th class="db-table-sortable db-table-cell--right" data-sort-key="amount"><?php echo e(__('aff_ref_col_amount')); ?> <span class="db-sort-icon"><i class="fas fa-sort"></i></span></th>
                        <th class="db-table-sortable" data-sort-key="status"><?php echo e(__('common_status')); ?> <span class="db-sort-icon"><i class="fas fa-sort"></i></span></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($referrals as $r):
                        $badge = $status_badge[$r['status']] ?? 'pending';
                    ?>
                    <tr data-row
                        data-date="<?php echo e($r['date']); ?>"
                        data-user="<?php echo e(strtolower($r['user'])); ?>"
                        data-source="<?php echo e(strtolower($r['source'])); ?>"
                        data-amount="<?php echo e($r['amount']); ?>"
                        data-status="<?php echo e($r['status']); ?>">
                        <td><span class="db-table-cell-mono"><?php echo e($r['date']); ?></span></td>
                        <td class="db-table-cell-main-td">
                            <span class="db-table-cell-mono"><?php echo e($r['user']); ?></span>
                        </td>
                        <td class="db-table-hide-tablet"><?php echo e($r['source']); ?></td>
                        <td class="db-table-cell--right">
                            <span class="db-table-cell-amount"><?php echo $r['amount'] > 0 ? format_money($r['amount']) : '—'; ?></span>
                        </td>
                        <td>
                            <span class="db-badge db-badge--<?php echo e($badge); ?>">
                                <?php echo e(__('aff_status_' . $r['status'])); ?>
                            </span>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                    <?php
                    $te_colspan = 5; $te_text = __('aff_ref_empty_search');
                    include __DIR__ . '/../../components/table-empty.php';
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Pagination — client-side via DashTablePager -->
    <div id="affReferralsPagination" data-pager-for="affReferralsTable" data-page-size="10"></div>
</div>

<!-- ═══ PAYOUTS TABLE ═══ -->
<div class="db-card db-mt">
    <div class="db-card-header">
        <h3 class="db-card-title"><i class="fas fa-money-check-dollar db-card-title-icon"></i> <?php echo e(__('aff_pay_title')); ?></h3>
    </div>
    <?php if (empty($payouts)): ?>
        <div class="db-card-body">
            <?php
            $es_icon    = 'fa-wallet';
            $es_title   = __('aff_pay_empty_title');
            $es_desc    = __('aff_pay_empty_desc');
            $es_compact = true; $es_no_wrap = true;
            include __DIR__ . '/../../components/empty-state.php';
            ?>
        </div>
    <?php else: ?>
    <div class="db-card-body--table">
        <div class="db-table-wrapper">
            <table class="db-table">
                <thead>
                    <tr>
                        <th><?php echo e(__('aff_pay_col_ref')); ?></th>
                        <th><?php echo e(__('aff_pay_col_date')); ?></th>
                        <th><?php echo e(__('aff_pay_col_method')); ?></th>
                        <th class="db-table-cell--right"><?php echo e(__('aff_pay_col_amount')); ?></th>
                        <th><?php echo e(__('common_status')); ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($payouts as $p):
                        $badge = $status_badge[$p['status']] ?? 'pending';
                    ?>
                    <tr>
                        <td><span class="db-table-cell-mono"><?php echo e($p['ref']); ?></span></td>
                        <td><span class="db-table-cell-mono"><?php echo e($p['date']); ?></span></td>
                        <td><?php echo e($method_label[$p['method']] ?? $p['method']); ?></td>
                        <td class="db-table-cell--right"><span class="db-table-cell-amount"><?php echo format_money($p['amount']); ?></span></td>
                        <td><span class="db-badge db-badge--<?php echo e($badge); ?>"><?php echo e(__('aff_status_' . $p['status'])); ?></span></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <?php endif; ?>
</div>

<?php endif; /* enabled state */ ?>

<!-- Footer: how it works (always visible) -->
<div class="db-aff-how">
    <h3 class="db-aff-how__title"><i class="fas fa-circle-info"></i> <?php echo e(__('aff_how_title')); ?></h3>
    <ol class="db-aff-how__list">
        <li><strong><?php echo e(__('aff_how_1_title')); ?></strong> <?php echo e(__('aff_how_1_desc')); ?></li>
        <li><strong><?php echo e(__('aff_how_2_title')); ?></strong> <?php echo e(__('aff_how_2_desc')); ?></li>
        <li><strong><?php echo e(__('aff_how_3_title')); ?></strong> <?php echo e(__('aff_how_3_desc')); ?></li>
        <li><strong><?php echo e(__('aff_how_4_title')); ?></strong> <?php echo e(__('aff_how_4_desc')); ?></li>
    </ol>
</div>

<?php endif; /* page_state === active */ ?>

<!-- ═══ ENABLE CONFIRM MODAL ═══ -->
<?php if (!$enabled): ?>
<?php
$modal_id    = 'affEnableModal';
$modal_title = __('aff_enable_modal_title');
$modal_size  = 'sm';
include __DIR__ . '/../../components/modal.php';
?>
    <div class="db-confirm-body">
        <div class="db-modal-icon db-modal-icon--success"><i class="fas fa-handshake-angle"></i></div>
        <p><?php echo e(__('aff_enable_modal_desc')); ?></p>

        <label class="db-check-line">
            <input type="checkbox" id="affEnableAgree">
            <span><?php echo e(__('aff_enable_modal_agree_prefix')); ?>
                <a href="#" onclick="event.preventDefault(); DashToast.show('info','','<?php echo e(__('aff_terms_coming')); ?>');"><?php echo e(__('aff_enable_modal_agree_link')); ?></a>
            </span>
        </label>
    </div>
<?php
$modal_footer = '
    <button class="db-btn db-btn--secondary" data-modal-close>' . e(__('common_cancel')) . '</button>
    <button class="db-btn db-btn--primary" id="affEnableConfirm" disabled>
        <i class="fas fa-toggle-on"></i> ' . e(__('aff_enable_modal_confirm')) . '
    </button>
';
include __DIR__ . '/../../components/modal-end.php';
?>
<?php endif; ?>

<!-- ═══ WITHDRAW REQUEST MODAL ═══ -->
<?php if ($enabled): ?>
<?php
$modal_id    = 'affWithdrawModal';
$modal_title = __('aff_withdraw_modal_title');
$modal_size  = '';
include __DIR__ . '/../../components/modal.php';
?>
    <form class="db-form" id="affWithdrawForm" onsubmit="return false;">
        <p class="db-modal-lead"><?php echo e(__('aff_withdraw_modal_intro', ['available' => format_money($stats['available'])])); ?></p>

        <div class="db-form-group">
            <label class="db-form-label" for="affWithdrawAmount"><?php echo e(__('aff_withdraw_amount')); ?> <span class="db-required">*</span></label>
            <div class="db-input-icon-wrapper">
                <input type="number" id="affWithdrawAmount" class="db-input" required
                       min="<?php echo (int)$min_payout; ?>"
                       max="<?php echo number_format($stats['available'], 2, '.', ''); ?>"
                       step="0.01"
                       value="<?php echo number_format($stats['available'], 2, '.', ''); ?>">
                <i class="fas fa-euro-sign db-input-icon"></i>
            </div>
            <div class="db-form-hint"><?php echo e(__('aff_withdraw_amount_hint', ['min' => format_money($min_payout, 0), 'available' => format_money($stats['available'])])); ?></div>
        </div>

        <div class="db-form-group">
            <label class="db-form-label"><?php echo e(__('aff_withdraw_method')); ?> <span class="db-required">*</span></label>
            <div class="db-aff-methods">
                <label class="db-aff-method">
                    <input type="radio" name="aff_pay_method" value="credit" checked>
                    <span class="db-aff-method__body">
                        <span class="db-aff-method__icon"><i class="fas fa-wallet"></i></span>
                        <span class="db-aff-method__info">
                            <span class="db-aff-method__name"><?php echo e(__('aff_method_credit')); ?></span>
                            <span class="db-aff-method__desc"><?php echo e(__('aff_method_credit_desc')); ?></span>
                        </span>
                        <span class="db-aff-method__mark"><i class="fas fa-check"></i></span>
                    </span>
                </label>
                <label class="db-aff-method">
                    <input type="radio" name="aff_pay_method" value="bank">
                    <span class="db-aff-method__body">
                        <span class="db-aff-method__icon"><i class="fas fa-building-columns"></i></span>
                        <span class="db-aff-method__info">
                            <span class="db-aff-method__name"><?php echo e(__('aff_method_bank')); ?></span>
                            <span class="db-aff-method__desc"><?php echo e(__('aff_method_bank_desc')); ?></span>
                        </span>
                        <span class="db-aff-method__mark"><i class="fas fa-check"></i></span>
                    </span>
                </label>
                <label class="db-aff-method">
                    <input type="radio" name="aff_pay_method" value="crypto">
                    <span class="db-aff-method__body">
                        <span class="db-aff-method__icon"><i class="fab fa-bitcoin"></i></span>
                        <span class="db-aff-method__info">
                            <span class="db-aff-method__name"><?php echo e(__('aff_method_crypto')); ?></span>
                            <span class="db-aff-method__desc"><?php echo e(__('aff_method_crypto_desc')); ?></span>
                        </span>
                        <span class="db-aff-method__mark"><i class="fas fa-check"></i></span>
                    </span>
                </label>
            </div>
        </div>

        <div class="db-form-group" id="affPayoutDetailsWrap">
            <label class="db-form-label" for="affPayoutDetails" id="affPayoutDetailsLabel"><?php echo e(__('aff_payout_details_label_credit')); ?></label>
            <textarea id="affPayoutDetails" class="db-input" rows="3" placeholder=""></textarea>
        </div>

        <div class="db-notice db-notice--info">
            <i class="fas fa-circle-info"></i>
            <span><?php echo e(__('aff_withdraw_sla_note')); ?></span>
        </div>
    </form>
<?php
$modal_footer = '
    <button class="db-btn db-btn--secondary" data-modal-close>' . e(__('common_cancel')) . '</button>
    <button class="db-btn db-btn--primary" id="affWithdrawSubmit">
        <i class="fas fa-paper-plane"></i> ' . e(__('aff_withdraw_submit')) . '
    </button>
';
include __DIR__ . '/../../components/modal-end.php';
?>
<?php endif; ?>

<div class="db-toast-container" id="toastContainer"></div>

<script>
document.addEventListener('DOMContentLoaded', function () {

    /* ───── Copy chips (same pattern as referral tab) ───── */
    document.querySelectorAll('[data-rx-copy]').forEach(function (btn) {
        btn.addEventListener('click', function () {
            var value = btn.getAttribute('data-rx-copy') || '';
            var label = btn.getAttribute('data-rx-label') || 'Copied.';
            if (!value) return;
            if (window.DashCopy) {
                DashCopy(btn, value);
                btn.classList.add('is-copied');
                setTimeout(function () { btn.classList.remove('is-copied'); }, 1400);
                if (window.DashToast) DashToast.show('success', '', label);
            }
        });
    });

    /* ───── Enable flow ───── */
    var enableBtn     = document.getElementById('affEnableBtn');
    var enableConfirm = document.getElementById('affEnableConfirm');
    var enableAgree   = document.getElementById('affEnableAgree');

    if (enableBtn) {
        enableBtn.addEventListener('click', function () {
            DashModal.open('affEnableModal');
        });
    }
    if (enableAgree && enableConfirm) {
        enableAgree.addEventListener('change', function () {
            enableConfirm.disabled = !enableAgree.checked;
        });
    }
    if (enableConfirm) {
        enableConfirm.addEventListener('click', function () {
            // Backend: POST /affiliates/enable → then reload.
            // Mock: reload with ?enabled=1 so the UI flips to enabled state.
            DashModal.close(document.getElementById('affEnableModal'));
            if (window.DashToast) DashToast.show('success', '', <?php echo json_encode(__('aff_enable_done')); ?>);
            setTimeout(function () {
                var url = new URL(window.location.href);
                url.searchParams.set('enabled', '1');
                window.location.href = url.toString();
            }, 600);
        });
    }

    /* ───── Withdraw flow ───── */
    var wSubmit         = document.getElementById('affWithdrawSubmit');
    var wMethods        = document.querySelectorAll('input[name="aff_pay_method"]');
    var wDetailsLabel   = document.getElementById('affPayoutDetailsLabel');
    var wDetailsInput   = document.getElementById('affPayoutDetails');

    var detailsLabels = {
        credit: <?php echo json_encode(__('aff_payout_details_label_credit')); ?>,
        bank:   <?php echo json_encode(__('aff_payout_details_label_bank')); ?>,
        crypto: <?php echo json_encode(__('aff_payout_details_label_crypto')); ?>
    };
    var detailsPlaceholders = {
        credit: <?php echo json_encode(__('aff_payout_details_ph_credit')); ?>,
        bank:   <?php echo json_encode(__('aff_payout_details_ph_bank')); ?>,
        crypto: <?php echo json_encode(__('aff_payout_details_ph_crypto')); ?>
    };

    function syncDetails() {
        var selected = document.querySelector('input[name="aff_pay_method"]:checked');
        if (!selected || !wDetailsLabel || !wDetailsInput) return;
        var m = selected.value;
        wDetailsLabel.textContent = detailsLabels[m] || '';
        wDetailsInput.setAttribute('placeholder', detailsPlaceholders[m] || '');
    }

    wMethods.forEach(function (r) {
        r.addEventListener('change', syncDetails);
    });
    syncDetails();

    if (wSubmit) {
        wSubmit.addEventListener('click', function () {
            var form = document.getElementById('affWithdrawForm');
            if (!form.reportValidity()) return;
            DashModal.close(document.getElementById('affWithdrawModal'));
            if (window.DashToast) DashToast.show('success', '', <?php echo json_encode(__('aff_withdraw_submitted')); ?>);
        });
    }
});
</script>

<?php require_once __DIR__ . '/../../layouts/footer.php'; ?>
