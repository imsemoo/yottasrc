<?php
/**
 * YottaSrc Dashboard — Forgot Password
 * ======================================
 * Email input to request a password reset link.
 */

$page_title = null;
$breadcrumbs_data = null;

require_once __DIR__ . '/../../layouts/config.php';

$page_title = __('auth_forgot_title') . ' — ' . SITE_NAME;
$auth_heading = __('auth_forgot_heading');
$auth_subheading = __('auth_forgot_subheading');
$auth_css = 'forgot.css';

require_once __DIR__ . '/../../layouts/auth-shell.php';

$state = $_GET['state'] ?? 'form';
?>

        <?php if ($state === 'sent'): ?>
        <!-- Success: email sent -->
        <div class="auth-success">
            <div class="auth-success__icon"><i class="fas fa-envelope-circle-check"></i></div>
            <h2 class="auth-success__title"><?php echo e(__('auth_forgot_sent_title')); ?></h2>
            <p class="auth-success__desc"><?php echo e(__('auth_forgot_sent_desc')); ?></p>
            <a href="<?php echo DASH_BASE_PATH; ?>/pages/auth/login.php" class="auth-submit" style="text-decoration:none; display:inline-flex; width:auto; padding:12px 28px;">
                <i class="fas fa-arrow-left"></i> <?php echo e(__('auth_back_to_login')); ?>
            </a>
        </div>

        <?php else: ?>
        <!-- Reset Form -->
        <form class="auth-form" onsubmit="return handleForgot(event)">

            <!-- Info -->
            <div class="auth-alert auth-alert--info">
                <i class="fas fa-circle-info"></i>
                <span><?php echo e(__('auth_forgot_info')); ?></span>
            </div>

            <!-- Email -->
            <div class="auth-field">
                <label class="auth-label" for="forgotEmail"><?php echo e(__('auth_email')); ?> <span class="auth-required">*</span></label>
                <div class="auth-input-wrap">
                    <i class="fas fa-envelope auth-input-wrap__icon"></i>
                    <input type="email" id="forgotEmail" class="auth-input" placeholder="<?php echo e(__('auth_email_placeholder')); ?>" required autocomplete="email" autofocus>
                </div>
            </div>

            <!-- Submit -->
            <button type="submit" class="auth-submit" id="forgotBtn">
                <span class="auth-submit__text"><i class="fas fa-paper-plane"></i> <?php echo e(__('auth_forgot_btn')); ?></span>
            </button>
        </form>

        <!-- Bottom -->
        <div class="auth-bottom">
            <?php echo __('auth_remembered'); ?> <a href="<?php echo DASH_BASE_PATH; ?>/pages/auth/login.php"><?php echo e(__('auth_back_to_login')); ?></a>
        </div>
        <?php endif; ?>

<script>
function handleForgot(e) {
    e.preventDefault();
    var btn = document.getElementById('forgotBtn');
    btn.classList.add('is-loading');
    setTimeout(function() {
        window.location.href = '<?php echo DASH_BASE_PATH; ?>/pages/auth/forgot.php?state=sent';
    }, 1200);
    return false;
}
</script>

<?php require_once __DIR__ . '/../../layouts/auth-footer.php'; ?>
