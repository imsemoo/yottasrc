<?php
/**
 * YottaSrc Dashboard — Login
 * ===========================
 * Email + password login with social options.
 */

$page_title = null;
$breadcrumbs_data = null;

require_once __DIR__ . '/../../layouts/config.php';

$page_title = __('auth_login_title') . ' — ' . SITE_NAME;
$auth_heading = __('auth_login_heading');
$auth_subheading = __('auth_login_subheading');
$auth_css = 'login.css';

require_once __DIR__ . '/../../layouts/auth-shell.php';
?>

        <!-- Login Form -->
        <form class="auth-form" onsubmit="return handleLogin(event)">

            <!-- Email -->
            <div class="auth-field">
                <label class="auth-label" for="loginEmail"><?php echo e(__('auth_email')); ?> <span class="auth-required">*</span></label>
                <div class="auth-input-wrap">
                    <i class="fas fa-envelope auth-input-wrap__icon"></i>
                    <input type="email" id="loginEmail" class="auth-input" placeholder="<?php echo e(__('auth_email_placeholder')); ?>" required autocomplete="email" autofocus>
                </div>
            </div>

            <!-- Password -->
            <div class="auth-field">
                <label class="auth-label" for="loginPassword"><?php echo e(__('auth_password')); ?> <span class="auth-required">*</span></label>
                <div class="auth-input-wrap">
                    <i class="fas fa-lock auth-input-wrap__icon"></i>
                    <input type="password" id="loginPassword" class="auth-input auth-input--password" placeholder="<?php echo e(__('auth_password_placeholder')); ?>" required autocomplete="current-password">
                    <button type="button" class="auth-input-wrap__toggle" onclick="togglePassword('loginPassword', this)" tabindex="-1"><i class="fas fa-eye"></i></button>
                </div>
            </div>

            <!-- Remember + Forgot -->
            <div class="auth-row">
                <label class="auth-check">
                    <input type="checkbox" name="remember" checked>
                    <span><?php echo e(__('auth_remember_me')); ?></span>
                </label>
                <a href="<?php echo DASH_BASE_PATH; ?>/pages/auth/forgot.php" class="auth-link"><?php echo e(__('auth_forgot_password')); ?></a>
            </div>

            <!-- Submit -->
            <button type="submit" class="auth-submit" id="loginBtn">
                <span class="auth-submit__text"><i class="fas fa-right-to-bracket"></i> <?php echo e(__('auth_login_btn')); ?></span>
            </button>

            <!-- Social Login -->
            <div class="auth-divider">
                <span class="auth-divider__text"><?php echo e(__('auth_or_continue')); ?></span>
            </div>

            <button type="button" class="auth-google" onclick="handleSocial('google')">
                <span class="auth-google__icon" aria-hidden="true">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="18" height="18">
                        <path fill="#FFC107" d="M43.611 20.083H42V20H24v8h11.303c-1.649 4.657-6.08 8-11.303 8-6.627 0-12-5.373-12-12s5.373-12 12-12c3.059 0 5.842 1.154 7.961 3.039l5.657-5.657C34.046 6.053 29.268 4 24 4 12.955 4 4 12.955 4 24s8.955 20 20 20 20-8.955 20-20c0-1.341-.138-2.65-.389-3.917z"/>
                        <path fill="#FF3D00" d="M6.306 14.691l6.571 4.819C14.655 15.108 18.961 12 24 12c3.059 0 5.842 1.154 7.961 3.039l5.657-5.657C34.046 6.053 29.268 4 24 4 16.318 4 9.656 8.337 6.306 14.691z"/>
                        <path fill="#4CAF50" d="M24 44c5.166 0 9.86-1.977 13.409-5.192l-6.19-5.238C29.211 35.091 26.715 36 24 36c-5.202 0-9.619-3.317-11.283-7.946l-6.522 5.025C9.505 39.556 16.227 44 24 44z"/>
                        <path fill="#1976D2" d="M43.611 20.083H42V20H24v8h11.303c-.792 2.237-2.231 4.166-4.087 5.571.001-.001.002-.001.003-.002l6.19 5.238C36.971 39.205 44 34 44 24c0-1.341-.138-2.65-.389-3.917z"/>
                    </svg>
                </span>
                <span class="auth-google__text"><?php echo e(__('auth_continue_google')); ?></span>
            </button>
        </form>

        <!-- Bottom link -->
        <div class="auth-bottom">
            <?php echo __('auth_no_account'); ?> <a href="<?php echo DASH_BASE_PATH; ?>/pages/auth/register.php"><?php echo e(__('auth_register_link')); ?></a>
        </div>

<script>
function togglePassword(id, btn) {
    var inp = document.getElementById(id);
    var ico = btn.querySelector('i');
    if (inp.type === 'password') {
        inp.type = 'text'; ico.className = 'fas fa-eye-slash';
    } else {
        inp.type = 'password'; ico.className = 'fas fa-eye';
    }
}

function handleLogin(e) {
    e.preventDefault();
    var btn = document.getElementById('loginBtn');
    btn.classList.add('is-loading');
    setTimeout(function() {
        btn.classList.remove('is-loading');
        window.location.href = '<?php echo DASH_BASE_PATH; ?>/';
    }, 1500);
    return false;
}

function handleSocial(provider) {
    // Demo: just redirect
    window.location.href = '<?php echo DASH_BASE_PATH; ?>/';
}
</script>

<?php require_once __DIR__ . '/../../layouts/auth-footer.php'; ?>
