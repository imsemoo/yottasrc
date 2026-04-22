<?php
/**
 * Service Detail — Microsoft Keys
 * ================================
 * Minimal page for digital license keys. Big key display with copy +
 * reveal, product details as a bullet list, and a linked invoices table.
 * Included from pages/services/service-details.php.
 */

/* ══════════════  MOCK DATA  ══════════════ */
$kp_id = (string)$__svc_id;

$kp_registry = [
    '154331' => [
        'name'      => 'Windows 10/11 Pro 1PC [Retail Online]',
        'vendor'    => 'Microsoft Windows',
        'badge'     => '€1.49 EUR',
        'cycle'     => 'One Time',
        'key'       => 'NK75F-2B4WH-JR9AY-4RWHW-GVMB4',
        'brand'     => 'windows',
        'details'   => [
            'Direct activation from Microsoft.',
            'This key can\'t be used to upgrade "Home" edition to "Pro".',
            'These keys can be used on the same PCs to reactivate Windows after reinstallation.',
            'Lifetime activation.',
            '100% original licenses.',
        ],
        'activation_url' => 'https://support.microsoft.com/en-us/windows/activate-windows',
    ],
    '1027' => [
        'name'      => 'Office 365 1-User 5 Devices [Lifetime]',
        'vendor'    => 'Microsoft Office',
        'badge'     => '€3.99 EUR',
        'cycle'     => 'One Time',
        'key'       => 'OF365-7MG2W-XYHQ1-BNP3V-KM8DT',
        'brand'     => 'windows',
        'details'   => [
            'Direct download & activation from Microsoft.',
            'Includes Word, Excel, PowerPoint, Outlook, OneNote.',
            'Works on Windows, Mac, iOS and Android.',
            'Up to 5 devices per account.',
            'Lifetime license — no subscription renewals.',
        ],
        'activation_url' => 'https://setup.office.com',
    ],
];

$kp = $kp_registry[$kp_id] ?? $kp_registry['154331'];

$kp_invoices = [
    ['id' => 1024, 'date' => '2026-01-20', 'due' => '2026-02-03', 'amount' => (float)str_replace(['€', ' EUR', ','], ['', '', '.'], $kp['badge']), 'status' => 'paid'],
];

$status_badge_map = [
    'paid'    => 'active',
    'unpaid'  => 'pending',
    'overdue' => 'cancelled',
];

$breadcrumbs_data = [
    ['label' => __('nav_dashboard'), 'url' => DASH_BASE_PATH . '/'],
    ['label' => __('nav_my_services'), 'url' => DASH_BASE_PATH . '/pages/services/index.php'],
    ['label' => '#' . $kp_id, 'url' => null],
];

/* ══════════════  END OF MOCK DATA  ══════════════ */
?>

<!-- ═══ HERO (image + title + activate button) ═══ -->
<section class="ds-hero ds-hero--seeded db-key-hero" style="--hero-seed: var(--seed-3);">
    <div class="ds-hero__top">
        <div class="ds-hero__identity db-key-hero__identity">
            <div class="db-key-hero__cover">
                <div class="db-key-hero__badge"><?php echo e($kp['badge']); ?><span><?php echo e($kp['cycle']); ?></span></div>
                <img class="db-key-hero__art" src="<?php echo dash_asset('images/brands/' . $kp['brand'] . '.svg'); ?>" alt="<?php echo e($kp['vendor']); ?>">
            </div>
            <div class="ds-hero__title-block">
                <div class="ds-hero__meta-top">
                    <span class="ds-eyebrow ds-eyebrow--success">
                        <span class="ds-status-dot"></span>
                        <?php echo e(__('services_status_active')); ?>
                    </span>
                    <span class="ds-hero__meta-sep">·</span>
                    <span class="db-key-hero__num">#<?php echo e($kp_id); ?></span>
                </div>
                <h1 class="ds-hero__title"><?php echo e($kp['name']); ?></h1>
                <p class="db-key-hero__vendor"><?php echo e($kp['vendor']); ?></p>
            </div>
        </div>
        <div class="ds-hero__actions">
            <a href="<?php echo e($kp['activation_url']); ?>" target="_blank" rel="noopener" class="ds-btn ds-btn--primary">
                <i class="fas fa-circle-question"></i>
                <span><?php echo e(__('keys_activate_guide')); ?></span>
            </a>
        </div>
    </div>
</section>

<!-- ═══ KEY DISPLAY CARD ═══ -->
<div class="db-key-row">
    <div class="db-key-row__icon"><i class="fas fa-key"></i></div>
    <div class="db-key-row__value">
        <span class="db-key-row__arrow">→</span>
        <code class="db-key-row__code" id="keyValue"
              data-real="<?php echo e($kp['key']); ?>"
              data-masked="<?php echo e(preg_replace('/[A-Z0-9]/', '•', $kp['key'])); ?>">
            <?php echo e(preg_replace('/[A-Z0-9]/', '•', $kp['key'])); ?>
        </code>
    </div>
    <div class="db-key-row__actions">
        <button type="button" class="db-key-row__btn" id="keyRevealBtn" title="<?php echo e(__('keys_reveal')); ?>">
            <i class="fas fa-eye" id="keyRevealIcon"></i>
        </button>
        <button type="button" class="db-key-row__btn" id="keyCopyBtn" title="<?php echo e(__('common_copy')); ?>">
            <i class="fas fa-copy"></i>
        </button>
    </div>
</div>

<!-- ═══ DETAILS CARD (single "Details" tab as per old panel) ═══ -->
<div class="db-card db-mt">
    <div class="db-card-header db-card-header--md">
        <div class="db-tab-bar db-tab-bar--inline">
            <button type="button" class="db-tab-bar__btn is-active">
                <i class="fas fa-list-ul"></i> <?php echo e(__('keys_details_tab')); ?>
            </button>
        </div>
    </div>
    <div class="db-card-body">
        <ul class="db-key-details">
            <?php foreach ($kp['details'] as $detail): ?>
            <li><i class="fas fa-check-circle"></i> <strong><?php echo e($detail); ?></strong></li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>

<!-- ═══ INVOICES LIST (linked to this service) ═══ -->
<div class="db-card db-mt">
    <div class="db-card-header db-card-header--md">
        <h3 class="db-card-title"><i class="fas fa-file-invoice db-card-title-icon"></i> <?php echo e(__('keys_invoices_title')); ?></h3>
    </div>
    <div class="db-card-body--table">
        <div class="db-table-wrapper">
            <table class="db-table">
                <thead>
                    <tr>
                        <th style="width:80px;"><?php echo e(__('keys_col_num')); ?></th>
                        <th><?php echo e(__('keys_col_date')); ?></th>
                        <th><?php echo e(__('keys_col_due')); ?></th>
                        <th class="db-table-cell--right"><?php echo e(__('keys_col_amount')); ?></th>
                        <th><?php echo e(__('keys_col_status')); ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (empty($kp_invoices)): ?>
                    <tr><td colspan="5" class="db-table-empty-cell"><?php echo e(__('keys_no_invoices')); ?></td></tr>
                    <?php else: foreach ($kp_invoices as $inv): ?>
                    <tr class="db-table-row-link" onclick="window.location='<?php echo DASH_BASE_PATH; ?>/pages/billing/invoice-details.php?id=<?php echo e($inv['id']); ?>';">
                        <td>
                            <a href="<?php echo DASH_BASE_PATH; ?>/pages/billing/invoice-details.php?id=<?php echo e($inv['id']); ?>"
                               class="db-table-cell-link" onclick="event.stopPropagation();">
                                #<?php echo e($inv['id']); ?>
                            </a>
                        </td>
                        <td><span class="db-table-cell-mono"><?php echo e($inv['date']); ?></span></td>
                        <td><span class="db-table-cell-mono"><?php echo e($inv['due']); ?></span></td>
                        <td class="db-table-cell--right"><span class="db-table-cell-amount"><?php echo format_money($inv['amount']); ?></span></td>
                        <td><span class="db-badge db-badge--<?php echo e($status_badge_map[$inv['status']] ?? 'pending'); ?>"><?php echo e(__('invoice_status_' . $inv['status'])); ?></span></td>
                    </tr>
                    <?php endforeach; endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="db-toast-container" id="toastContainer"></div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    var code    = document.getElementById('keyValue');
    var reveal  = document.getElementById('keyRevealBtn');
    var icon    = document.getElementById('keyRevealIcon');
    var copyBtn = document.getElementById('keyCopyBtn');
    if (!code || !reveal) return;

    var shown = false;
    reveal.addEventListener('click', function () {
        shown = !shown;
        code.textContent = shown ? code.getAttribute('data-real') : code.getAttribute('data-masked');
        if (icon) icon.className = shown ? 'fas fa-eye-slash' : 'fas fa-eye';
    });

    if (copyBtn) {
        copyBtn.addEventListener('click', function () {
            if (window.DashCopy) DashCopy(copyBtn, code.getAttribute('data-real'));
        });
    }
});
</script>
