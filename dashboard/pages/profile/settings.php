<?php
/**
 * YottaSrc Dashboard — Settings Page
 * ====================================
 * Preferences + full notification panel matching reference.
 */

$page_title = null;
$breadcrumbs_data = null;
$page_js = 'pages/settings.js';

require_once __DIR__ . '/../../layouts/config.php';

$page_title = __('settings_title') . ' — ' . SITE_NAME;
$breadcrumbs_data = [
    ['label' => __('nav_dashboard'), 'url' => DASH_BASE_PATH . '/'],
    ['label' => __('profile_settings_title'), 'url' => null],
];

require_once __DIR__ . '/../../layouts/shell.php';

$page_state = $_GET['state'] ?? 'active';
$current_lang = $current_language ?? 'en';
$current_curr = $current_currency ?? 'EUR';

// Email notification categories (from reference)
$email_notifications = [
    ['key' => 'product',   'title' => __('notif_product'),   'desc' => __('notif_product_desc'),   'checked' => true],
    ['key' => 'invoice',   'title' => __('notif_invoice'),   'desc' => __('notif_invoice_desc'),   'checked' => true],
    ['key' => 'support',   'title' => __('notif_support'),   'desc' => __('notif_support_desc'),   'checked' => true],
    ['key' => 'domain',    'title' => __('notif_domain'),    'desc' => __('notif_domain_desc'),    'checked' => true],
    ['key' => 'general',   'title' => __('notif_general'),   'desc' => __('notif_general_desc'),   'checked' => true],
    ['key' => 'affiliate', 'title' => __('notif_affiliate'), 'desc' => __('notif_affiliate_desc'), 'checked' => true],
    ['key' => 'marketing', 'title' => __('notif_marketing'), 'desc' => __('notif_marketing_desc'), 'checked' => true],
];

// Telegram notifications (from reference — coming soon)
$telegram_notifications = [
    ['key' => 'tg_product', 'title' => __('notif_product'), 'desc' => __('notif_product_desc'), 'checked' => false],
    ['key' => 'tg_invoice', 'title' => __('notif_invoice'), 'desc' => __('notif_invoice_desc'), 'checked' => false],
];
?>

<?php
$ph_title = __('profile_settings_title');
$ph_desc = __('profile_settings_desc');
$ph_actions = '';
include __DIR__ . '/../../components/page-header.php';
?>

<!-- Account Tabs -->
<?php $account_tab = 'settings'; include __DIR__ . '/../../components/account-tabs.php'; ?>

<?php if ($page_state === 'error'): ?>
    <div class="db-card">
        <?php $error_retry = true; include __DIR__ . '/../../components/error-state.php'; ?>
    </div>

<?php elseif ($page_state === 'loading'): ?>
    <div class="db-card db-mb">
        <div class="db-card-header"><div class="db-skeleton db-skeleton--text" style="width: 180px;"></div></div>
        <div class="db-card-body">
            <?php for ($i = 0; $i < 3; $i++): ?>
            <div class="db-skeleton-setting"><div class="db-skeleton-setting-lines"><div class="db-skeleton db-skeleton--text" style="width: 30%;"></div><div class="db-skeleton db-skeleton--text-sm" style="width: 55%;"></div></div><div class="db-skeleton" style="width: 160px; height: 40px; border-radius: var(--radius-sm); flex-shrink: 0;"></div></div>
            <?php endfor; ?>
        </div>
    </div>
    <div class="db-card db-mb">
        <div class="db-card-header"><div class="db-skeleton db-skeleton--text" style="width: 180px;"></div></div>
        <div class="db-card-body">
            <?php for ($i = 0; $i < 7; $i++): ?>
            <div class="db-skeleton-setting"><div class="db-skeleton-setting-lines"><div class="db-skeleton db-skeleton--text" style="width: 35%;"></div><div class="db-skeleton db-skeleton--text-sm" style="width: 60%;"></div></div><div class="db-skeleton" style="width: 42px; height: 24px; border-radius: var(--radius-full); flex-shrink: 0;"></div></div>
            <?php endfor; ?>
        </div>
    </div>

<?php else: ?>

    <!-- General Preferences -->
    <div class="db-card db-mb">
        <div class="db-card-header">
            <h2 class="db-card-title"><i class="db-card-title-icon fas fa-sliders"></i> <?php echo e(__('settings_general')); ?></h2>
        </div>
        <div class="db-card-body">
            <div class="db-settings-item">
                <div class="db-settings-item-info">
                    <div class="db-settings-item-title"><?php echo e(__('settings_theme')); ?></div>
                    <div class="db-settings-item-desc"><?php echo e(__('settings_theme_desc')); ?></div>
                </div>
                <div class="db-settings-item-control">
                    <select class="db-select db-select--settings" id="settingTheme">
                        <option value="dark"><?php echo e(__('theme_dark')); ?></option>
                        <option value="light"><?php echo e(__('theme_light')); ?></option>
                    </select>
                </div>
            </div>
            <div class="db-settings-item">
                <div class="db-settings-item-info">
                    <div class="db-settings-item-title"><?php echo e(__('settings_language')); ?></div>
                    <div class="db-settings-item-desc"><?php echo e(__('settings_language_desc')); ?></div>
                </div>
                <div class="db-settings-item-control">
                    <select class="db-select db-select--settings" id="settingLanguage">
                        <option value="en" <?php echo $current_lang === 'en' ? 'selected' : ''; ?>>English</option>
                        <option value="ar" <?php echo $current_lang === 'ar' ? 'selected' : ''; ?>>العربية</option>
                    </select>
                </div>
            </div>
            <div class="db-settings-item">
                <div class="db-settings-item-info">
                    <div class="db-settings-item-title"><?php echo e(__('settings_currency')); ?></div>
                    <div class="db-settings-item-desc"><?php echo e(__('settings_currency_desc')); ?></div>
                </div>
                <div class="db-settings-item-control">
                    <select class="db-select db-select--settings" id="settingCurrency">
                        <?php foreach ($supported_currencies as $code => $data): ?>
                        <option value="<?php echo e($code); ?>" <?php echo $current_curr === $code ? 'selected' : ''; ?>><?php echo e($data['symbol'] . ' ' . $code); ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
        </div>
    </div>

    <!-- Email Notifications -->
    <div class="db-card db-mb">
        <div class="db-card-header">
            <h2 class="db-card-title"><i class="db-card-title-icon fas fa-envelope"></i> <?php echo e(__('settings_email_notifications')); ?></h2>
        </div>
        <div class="db-card-body">
            <?php foreach ($email_notifications as $notif): ?>
            <div class="db-settings-item">
                <div class="db-settings-item-info">
                    <div class="db-settings-item-title"><?php echo e($notif['title']); ?></div>
                    <div class="db-settings-item-desc"><?php echo e($notif['desc']); ?></div>
                </div>
                <div class="db-settings-item-control">
                    <label class="db-toggle">
                        <input type="checkbox" <?php echo $notif['checked'] ? 'checked' : ''; ?>>
                        <span class="db-toggle-track"><span class="db-toggle-thumb"></span></span>
                    </label>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- Telegram Notifications (Soon) -->
    <div class="db-card db-mb">
        <div class="db-card-header">
            <h2 class="db-card-title">
                <i class="db-card-title-icon fab fa-telegram"></i>
                <?php echo e(__('settings_telegram_notifications')); ?>
                <span class="db-badge db-badge--pending" style="margin-left: 8px; font-size: 0.62rem;">Soon</span>
            </h2>
        </div>
        <div class="db-card-body">
            <?php foreach ($telegram_notifications as $notif): ?>
            <div class="db-settings-item">
                <div class="db-settings-item-info">
                    <div class="db-settings-item-title"><?php echo e($notif['title']); ?></div>
                    <div class="db-settings-item-desc"><?php echo e($notif['desc']); ?></div>
                </div>
                <div class="db-settings-item-control">
                    <label class="db-toggle">
                        <input type="checkbox" disabled>
                        <span class="db-toggle-track"><span class="db-toggle-thumb"></span></span>
                    </label>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- Danger Zone -->
    <div class="db-card">
        <div class="db-card-header">
            <h2 class="db-card-title"><i class="db-card-title-icon fas fa-triangle-exclamation" style="color: var(--brand-error);"></i> <?php echo e(__('settings_danger_zone')); ?></h2>
        </div>
        <div class="db-card-body">
            <div class="db-settings-item" style="border-bottom: none; padding-bottom: 0;">
                <div class="db-settings-item-info">
                    <div class="db-settings-item-title"><?php echo e(__('settings_close_account')); ?></div>
                    <div class="db-settings-item-desc"><?php echo e(__('settings_close_account_desc')); ?></div>
                </div>
                <div class="db-settings-item-control">
                    <button class="db-btn db-btn--danger db-btn--sm" id="closeAccountBtn"><?php echo e(__('settings_close_account_btn')); ?></button>
                </div>
            </div>
        </div>
    </div>

<?php endif; ?>

<!-- Close Account Modal -->
<?php $modal_id = 'closeAccountModal'; $modal_title = __('settings_close_account'); $modal_size = 'sm'; include __DIR__ . '/../../components/modal.php'; ?>
<div class="db-confirm-body">
    <div class="db-modal-icon db-modal-icon--danger"><i class="fas fa-triangle-exclamation"></i></div>
    <p><?php echo e(__('settings_close_account_confirm')); ?></p>
</div>
<?php
$modal_footer = '<button class="db-btn db-btn--secondary" data-modal-close>' . e(__('common_cancel')) . '</button>
<button class="db-btn db-btn--danger">' . e(__('common_confirm')) . '</button>';
include __DIR__ . '/../../components/modal-end.php'; ?>

<?php require_once __DIR__ . '/../../layouts/footer.php'; ?>
