<?php
/**
 * YottaSrc Dashboard — Security Page
 * ====================================
 * Password reset, 2FA, login methods, SSO, sessions.
 * Based on reference: console.yottasrc.com/settings/security/
 */

$page_title = null;
$breadcrumbs_data = null;
$page_js = 'pages/security.js';

require_once __DIR__ . '/../../layouts/config.php';

$page_title = __('nav_security') . ' — ' . SITE_NAME;
$breadcrumbs_data = [
    ['label' => __('nav_dashboard'), 'url' => DASH_BASE_PATH . '/'],
    ['label' => __('profile_settings_title'), 'url' => null],
];

require_once __DIR__ . '/../../layouts/shell.php';

/* ══════════════════════════════════════════════════════════════════════
   ███  SECURITY  ·  MOCK DATA BLOCK  (single source of truth)  ███
   ══════════════════════════════════════════════════════════════════════
   BACKEND TEAM — PLEASE READ:

   Two arrays drive this page:
     • $security_features → toggle cards (2FA, email login, …)
     • $sessions          → active-session list with revoke actions

   Wiring real data:
     • Replace $security_features[n]['enabled'] with the user's real
       setting for each feature.
     • Sessions come from the user's session store (IP + UA parsed).
   ══════════════════════════════════════════════════════════════════════ */

/* ──────────────────────────────────────────
   PAGE STATE  ('active' | 'loading' | 'error')
   ────────────────────────────────────────── */
$page_state = $_GET['state'] ?? 'active';

/* ──────────────────────────────────────────
   SECURITY FEATURES  (toggle cards)
   ──────────────────────────────────────────
   Each row:
   • id       → unique slug (keys form submissions)
   • icon     → Font Awesome class
   • title    → card title (translated)
   • desc     → subtitle (translated)
   • enabled  → bool → current state (drives button label + modal tone)
   • btn_on/btn_off → labels (usually same translation)
   • color    → 'primary' | 'accent' | 'secondary' | 'warning'
   • soon     → bool, adds "Coming Soon" badge (disables actions)
   ────────────────────────────────────────── */
$security_features = [
    [
        'id'      => '2fa',
        'icon'    => 'fas fa-shield-halved',
        'title'   => __('security_feat_2fa'),
        'desc'    => __('security_feat_2fa_desc'),
        'enabled' => false,
        'btn_on'  => __('balance_enable'),
        'btn_off' => __('security_feat_disable'),
        'color'   => 'warning',
    ],
    [
        'id'      => 'email_login',
        'icon'    => 'fas fa-envelope',
        'title'   => __('security_feat_email_login'),
        'desc'    => __('security_feat_email_login_desc'),
        'enabled' => false,
        'btn_on'  => __('balance_enable'),
        'btn_off' => __('security_feat_disable'),
        'color'   => 'primary',
    ],
    [
        'id'      => 'telegram_login',
        'icon'    => 'fab fa-telegram',
        'title'   => __('security_feat_telegram'),
        'desc'    => __('security_feat_telegram_desc'),
        'enabled' => false,
        'btn_on'  => __('balance_enable'),
        'btn_off' => __('security_feat_disable'),
        'color'   => 'primary',
    ],
    [
        'id'      => 'sms_login',
        'icon'    => 'fas fa-comment-sms',
        'title'   => __('security_feat_sms'),
        'desc'    => __('security_feat_sms_desc'),
        'enabled' => false,
        'btn_on'  => __('balance_enable'),
        'btn_off' => __('security_feat_disable'),
        'color'   => 'accent',
        'soon'    => true,
    ],
    [
        'id'      => 'sso',
        'icon'    => 'fas fa-right-to-bracket',
        'title'   => __('security_feat_sso'),
        'desc'    => __('security_feat_sso_desc'),
        'enabled' => true,
        'btn_on'  => __('balance_enable'),
        'btn_off' => __('security_feat_disable'),
        'color'   => 'secondary',
    ],
];

/* ──────────────────────────────────────────
   ACTIVE SESSIONS
   ──────────────────────────────────────────
   Each row:
   • device       → human-readable user agent
   • ip           → session IP
   • location     → geo-resolved (city, country)
   • last_active  → relative time string
   • current      → bool, hides the "Revoke" button for current session
   ────────────────────────────────────────── */
$sessions = [
    ['device' => 'Chrome on Windows', 'ip' => '197.54.214.50', 'location' => 'Cairo, Egypt',       'last_active' => '2 minutes ago', 'current' => true],
    ['device' => 'Safari on iPhone',  'ip' => '197.54.214.55', 'location' => 'Cairo, Egypt',       'last_active' => '3 hours ago',   'current' => false],
    ['device' => 'Firefox on macOS',  'ip' => '41.33.120.12',  'location' => 'Alexandria, Egypt',  'last_active' => '2 days ago',    'current' => false],
];

/* ══════════════  END OF MOCK DATA  ══════════════ */
?>

<?php
$ph_title = __('profile_settings_title');
$ph_desc = __('profile_settings_desc');
$ph_actions = '';
include __DIR__ . '/../../components/page-header.php';
?>

<!-- Account Tabs -->
<?php $account_tab = 'security'; include __DIR__ . '/../../components/account-tabs.php'; ?>

<?php if ($page_state === 'error'): ?>
    <div class="db-card">
        <?php $error_retry = true; include __DIR__ . '/../../components/error-state.php'; ?>
    </div>

<?php elseif ($page_state === 'loading'): ?>
    <div class="db-card db-mb">
        <div class="db-card-header"><div class="db-skeleton db-skeleton--text" style="width: 170px;"></div></div>
        <div class="db-card-body">
            <div class="db-2fa-status"><div class="db-skeleton" style="width: 44px; height: 44px; border-radius: var(--radius-md); flex-shrink: 0;"></div><div style="flex:1; display: flex; flex-direction: column; gap: 6px;"><div class="db-skeleton db-skeleton--text" style="width: 50%;"></div><div class="db-skeleton db-skeleton--text-sm" style="width: 80%;"></div></div><div class="db-skeleton db-skeleton--button"></div></div>
        </div>
    </div>
    <div class="db-card db-mb">
        <div class="db-card-header"><div class="db-skeleton db-skeleton--text" style="width: 160px;"></div></div>
        <div class="db-card-body">
            <?php for ($i = 0; $i < 5; $i++): ?>
            <div class="db-skeleton-setting"><div class="db-skeleton-setting-lines"><div class="db-skeleton db-skeleton--text" style="width: 40%;"></div><div class="db-skeleton db-skeleton--text-sm" style="width: 70%;"></div></div><div class="db-skeleton db-skeleton--button" style="width: 90px;"></div></div>
            <?php endfor; ?>
        </div>
    </div>
    <div class="db-card">
        <div class="db-card-header"><div class="db-skeleton db-skeleton--text" style="width: 140px;"></div></div>
        <div class="db-card-body">
            <?php for ($i = 0; $i < 3; $i++): ?>
            <div class="db-skeleton-session"><div class="db-skeleton" style="width: 38px; height: 38px; border-radius: var(--radius-sm); flex-shrink: 0;"></div><div style="flex:1; display: flex; flex-direction: column; gap: 6px;"><div class="db-skeleton db-skeleton--text" style="width: 45%;"></div><div class="db-skeleton db-skeleton--text-sm" style="width: 65%;"></div></div><div class="db-skeleton db-skeleton--button" style="width: 70px;"></div></div>
            <?php endfor; ?>
        </div>
    </div>

<?php else: ?>

    <!-- Change Password (via email reset) -->
    <div class="db-card db-mb">
        <div class="db-card-header">
            <h2 class="db-card-title"><i class="db-card-title-icon fas fa-lock"></i> <?php echo e(__('security_change_password')); ?></h2>
        </div>
        <div class="db-card-body">
            <div class="db-2fa-status">
                <div class="db-2fa-status-icon db-2fa-status-icon--info">
                    <i class="fas fa-envelope"></i>
                </div>
                <div class="db-2fa-status-info">
                    <div class="db-2fa-status-title"><?php echo e(__('security_reset_title')); ?></div>
                    <div class="db-2fa-status-desc"><?php echo e(__('security_reset_desc')); ?></div>
                </div>
                <div class="db-2fa-status-action">
                    <button class="db-btn db-btn--primary db-btn--sm" onclick="DashToast.show('success', '', '<?php echo e(__('security_reset_sent')); ?>')">
                        <i class="fas fa-paper-plane"></i> <?php echo e(__('security_reset_btn')); ?>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Security Features -->
    <div class="db-card db-mb">
        <div class="db-card-header">
            <h2 class="db-card-title"><i class="db-card-title-icon fas fa-shield-halved"></i> <?php echo e(__('security_features_title')); ?></h2>
        </div>
        <div class="db-card-body">
            <?php foreach ($security_features as $feat): ?>
            <div class="db-settings-item">
                <div class="db-settings-item-info">
                    <div class="db-settings-item-title">
                        <?php echo e($feat['title']); ?>
                        <?php if ($feat['enabled']): ?>
                            <span class="db-badge db-badge--active db-badge--inline"><?php echo e(__('status_active')); ?></span>
                        <?php elseif (!empty($feat['soon'])): ?>
                            <span class="db-badge db-badge--pending db-badge--inline">Soon</span>
                        <?php else: ?>
                            <span class="db-badge db-badge--cancelled db-badge--inline"><?php echo e(__('security_feat_not_enabled')); ?></span>
                        <?php endif; ?>
                    </div>
                    <div class="db-settings-item-desc"><?php echo e($feat['desc']); ?></div>
                </div>
                <div class="db-settings-item-control">
                    <?php if (!empty($feat['soon'])): ?>
                        <button class="db-btn db-btn--secondary db-btn--sm" disabled><?php echo e($feat['btn_on']); ?></button>
                    <?php elseif ($feat['enabled']): ?>
                        <button class="db-btn db-btn--danger db-btn--sm" onclick="DashModal.open('confirm_<?php echo e($feat['id']); ?>')">
                            <?php echo e($feat['btn_off']); ?>
                        </button>
                    <?php else: ?>
                        <button class="db-btn db-btn--primary db-btn--sm" onclick="DashModal.open('confirm_<?php echo e($feat['id']); ?>')">
                            <?php echo e($feat['btn_on']); ?>
                        </button>
                    <?php endif; ?>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- Active Sessions -->
    <div class="db-card">
        <div class="db-card-header">
            <h2 class="db-card-title"><i class="db-card-title-icon fas fa-desktop"></i> <?php echo e(__('security_sessions_title')); ?></h2>
            <button class="db-btn db-btn--ghost db-btn--sm" onclick="DashModal.open('revokeAllModal')"><?php echo e(__('security_revoke_all')); ?></button>
        </div>
        <div class="db-card-body">
            <?php foreach ($sessions as $session): ?>
            <div class="db-session-item">
                <div class="db-session-icon<?php echo $session['current'] ? ' db-session-icon--current' : ''; ?>">
                    <?php if (strpos($session['device'], 'Chrome') !== false): ?><i class="fab fa-chrome"></i>
                    <?php elseif (strpos($session['device'], 'Safari') !== false): ?><i class="fab fa-safari"></i>
                    <?php elseif (strpos($session['device'], 'Firefox') !== false): ?><i class="fab fa-firefox-browser"></i>
                    <?php else: ?><i class="fas fa-globe"></i>
                    <?php endif; ?>
                </div>
                <div class="db-session-info">
                    <div class="db-session-device">
                        <?php echo e($session['device']); ?>
                        <?php if ($session['current']): ?>
                        <span class="db-session-current"><?php echo e(__('security_current_session')); ?></span>
                        <?php endif; ?>
                    </div>
                    <div class="db-session-meta">
                        <span><?php echo e($session['ip']); ?></span>
                        <span><?php echo e($session['location']); ?></span>
                        <span><?php echo e($session['last_active']); ?></span>
                    </div>
                </div>
                <?php if (!$session['current']): ?>
                <div class="db-session-actions">
                    <button class="db-btn db-btn--ghost db-btn--sm" onclick="DashToast.show('success', '', '<?php echo e(__('security_session_revoked')); ?>')"><?php echo e(__('security_revoke')); ?></button>
                </div>
                <?php endif; ?>
            </div>
            <?php endforeach; ?>
        </div>
    </div>

<?php endif; ?>

<!-- Modals for security features -->
<?php foreach ($security_features as $feat):
    if (!empty($feat['soon'])) continue;
    $action_label = $feat['enabled'] ? __('security_feat_disable') : __('balance_enable');
    $action_class = $feat['enabled'] ? 'db-btn--danger' : 'db-btn--primary';
    $toast_msg = $feat['enabled'] ? __('security_feat_disabled_toast') : __('security_feat_enabled_toast');
?>
<?php $modal_id = 'confirm_' . $feat['id']; $modal_title = $feat['title']; $modal_size = 'sm'; include __DIR__ . '/../../components/modal.php'; ?>
<div class="db-confirm-body">
    <div class="db-modal-icon <?php echo $feat['enabled'] ? 'db-modal-icon--danger' : 'db-modal-icon--success'; ?>">
        <i class="<?php echo e($feat['icon']); ?>"></i>
    </div>
    <p><?php echo e($feat['enabled'] ? __('security_feat_disable_confirm', ['feature' => $feat['title']]) : __('security_feat_enable_confirm', ['feature' => $feat['title']])); ?></p>
</div>
<?php
$modal_footer = '<button class="db-btn db-btn--secondary" data-modal-close>' . e(__('common_cancel')) . '</button>
<button class="' . $action_class . ' db-btn" onclick="DashModal.close(this.closest(\'.db-modal-overlay\')); DashToast.show(\'success\', \'\', \'' . e($toast_msg) . '\');">' . e($action_label) . '</button>';
include __DIR__ . '/../../components/modal-end.php';
endforeach; ?>

<!-- Revoke All Modal -->
<?php
$modal_id = 'revokeAllModal'; $modal_title = __('security_revoke_all'); $modal_size = 'sm';
include __DIR__ . '/../../components/modal.php';

$cb_desc = __('security_revoke_all_confirm'); $cb_icon = 'fa-right-from-bracket';
$cb_target_label = null; $cb_target_value = null; $cb_warn = null; $cb_variant = 'danger';
include __DIR__ . '/../../components/confirm-body.php';

$modal_footer = '<button class="db-btn db-btn--secondary" data-modal-close>' . e(__('common_cancel')) . '</button>
<button class="db-btn db-btn--danger" onclick="DashModal.close(this.closest(\'.db-modal-overlay\')); DashToast.show(\'success\', \'\', \'' . e(__('security_all_revoked')) . '\');">' . e(__('common_confirm')) . '</button>';
include __DIR__ . '/../../components/modal-end.php';
?>

<div class="db-toast-container" id="toastContainer"></div>
<?php require_once __DIR__ . '/../../layouts/footer.php'; ?>
