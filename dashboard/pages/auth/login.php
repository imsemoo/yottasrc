<?php
/**
 * YottaSrc Dashboard — Login
 * ===========================
 * Email + password login with social options.
 */

$page_title = null;
$breadcrumbs_data = null;

require_once __DIR__ . '/../../layouts/config.php';

$page_title = __('auth_login_btn') . ' — ' . SITE_NAME;
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

            <div class="auth-socials">
                <!-- Google -->
                <button type="button" class="auth-social-btn auth-social-btn--google" onclick="handleSocial('google')" aria-label="Sign in with Google" title="Google">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                        <path fill="#FFC107" d="M43.611 20.083H42V20H24v8h11.303c-1.649 4.657-6.08 8-11.303 8-6.627 0-12-5.373-12-12s5.373-12 12-12c3.059 0 5.842 1.154 7.961 3.039l5.657-5.657C34.046 6.053 29.268 4 24 4 12.955 4 4 12.955 4 24s8.955 20 20 20 20-8.955 20-20c0-1.341-.138-2.65-.389-3.917z"/>
                        <path fill="#FF3D00" d="M6.306 14.691l6.571 4.819C14.655 15.108 18.961 12 24 12c3.059 0 5.842 1.154 7.961 3.039l5.657-5.657C34.046 6.053 29.268 4 24 4 16.318 4 9.656 8.337 6.306 14.691z"/>
                        <path fill="#4CAF50" d="M24 44c5.166 0 9.86-1.977 13.409-5.192l-6.19-5.238C29.211 35.091 26.715 36 24 36c-5.202 0-9.619-3.317-11.283-7.946l-6.522 5.025C9.505 39.556 16.227 44 24 44z"/>
                        <path fill="#1976D2" d="M43.611 20.083H42V20H24v8h11.303c-.792 2.237-2.231 4.166-4.087 5.571.001-.001.002-.001.003-.002l6.19 5.238C36.971 39.205 44 34 44 24c0-1.341-.138-2.65-.389-3.917z"/>
                    </svg>
                </button>

                <!-- Facebook -->
                <button type="button" class="auth-social-btn auth-social-btn--facebook" onclick="handleSocial('facebook')" aria-label="Sign in with Facebook" title="Facebook">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#1877f2">
                        <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                    </svg>
                </button>

                <!-- X (Twitter) -->
                <button type="button" class="auth-social-btn auth-social-btn--x" onclick="handleSocial('x')" aria-label="Sign in with X" title="X">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                    </svg>
                </button>

                <!-- GitHub -->
                <button type="button" class="auth-social-btn auth-social-btn--github" onclick="handleSocial('github')" aria-label="Sign in with GitHub" title="GitHub">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/>
                    </svg>
                </button>
            </div>
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
