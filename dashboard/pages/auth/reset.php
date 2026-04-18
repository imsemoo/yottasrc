<?php
/**
 * YottaSrc Dashboard — Reset Password
 * =====================================
 * New password entry (after clicking reset link).
 */

$page_title = null;
$breadcrumbs_data = null;

require_once __DIR__ . '/../../layouts/config.php';

$page_title = __('auth_reset_title') . ' — ' . SITE_NAME;
$auth_heading = __('auth_reset_heading');
$auth_subheading = __('auth_reset_subheading');
$auth_css = 'reset.css';

require_once __DIR__ . '/../../layouts/auth-shell.php';

$state = $_GET['state'] ?? 'form';
$token = $_GET['token'] ?? 'demo-token-abc123';
?>

        <?php if ($state === 'done'): ?>
        <!-- Success -->
        <div class="auth-success">
            <div class="auth-success__icon"><i class="fas fa-check"></i></div>
            <h2 class="auth-success__title"><?php echo e(__('auth_reset_done_title')); ?></h2>
            <p class="auth-success__desc"><?php echo e(__('auth_reset_done_desc')); ?></p>
            <a href="<?php echo DASH_BASE_PATH; ?>/pages/auth/login.php" class="auth-submit auth-submit--link">
                <i class="fas fa-right-to-bracket"></i> <?php echo e(__('auth_login_now')); ?>
            </a>
        </div>

        <?php elseif ($state === 'expired'): ?>
        <!-- Token expired -->
        <div class="auth-success">
            <div class="auth-success__icon auth-success__icon--error">
                <i class="fas fa-link-slash"></i>
            </div>
            <h2 class="auth-success__title"><?php echo e(__('auth_reset_expired_title')); ?></h2>
            <p class="auth-success__desc"><?php echo e(__('auth_reset_expired_desc')); ?></p>
            <a href="<?php echo DASH_BASE_PATH; ?>/pages/auth/forgot.php" class="auth-submit auth-submit--link">
                <i class="fas fa-rotate-right"></i> <?php echo e(__('auth_request_new_link')); ?>
            </a>
        </div>

        <?php else: ?>
        <!-- Reset Form -->
        <form class="auth-form" onsubmit="return handleReset(event)">

            <!-- New Password -->
            <div class="auth-field">
                <label class="auth-label" for="resetPassword"><?php echo e(__('auth_new_password')); ?> <span class="auth-required">*</span></label>
                <div class="auth-input-wrap">
                    <i class="fas fa-lock auth-input-wrap__icon"></i>
                    <input type="password" id="resetPassword" class="auth-input auth-input--password" placeholder="<?php echo e(__('auth_password_create_placeholder')); ?>" required autocomplete="new-password" autofocus oninput="checkStrength(this.value)">
                    <button type="button" class="auth-input-wrap__toggle" onclick="togglePassword('resetPassword', this)" tabindex="-1"><i class="fas fa-eye"></i></button>
                </div>
                <div class="auth-strength" id="pwdStrength" data-level="0">
                    <div class="auth-strength__bar"></div>
                    <div class="auth-strength__bar"></div>
                    <div class="auth-strength__bar"></div>
                    <div class="auth-strength__bar"></div>
                </div>
                <div class="auth-strength-label" id="pwdLabel"></div>
            </div>

            <!-- Confirm -->
            <div class="auth-field">
                <label class="auth-label" for="resetConfirm"><?php echo e(__('auth_confirm_password')); ?> <span class="auth-required">*</span></label>
                <div class="auth-input-wrap">
                    <i class="fas fa-lock auth-input-wrap__icon"></i>
                    <input type="password" id="resetConfirm" class="auth-input auth-input--password" placeholder="<?php echo e(__('auth_confirm_placeholder')); ?>" required autocomplete="new-password">
                    <button type="button" class="auth-input-wrap__toggle" onclick="togglePassword('resetConfirm', this)" tabindex="-1"><i class="fas fa-eye"></i></button>
                </div>
            </div>

            <input type="hidden" name="token" value="<?php echo e($token); ?>">

            <!-- Submit -->
            <button type="submit" class="auth-submit" id="resetBtn">
                <span class="auth-submit__text"><i class="fas fa-key"></i> <?php echo e(__('auth_reset_btn')); ?></span>
            </button>
        </form>

        <!-- Bottom -->
        <div class="auth-bottom">
            <a href="<?php echo DASH_BASE_PATH; ?>/pages/auth/login.php"><i class="fas fa-arrow-left"></i> <?php echo e(__('auth_back_to_login')); ?></a>
        </div>
        <?php endif; ?>

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

var strengthLabels = <?php echo json_encode([
    __('auth_pwd_weak'), __('auth_pwd_fair'), __('auth_pwd_good'), __('auth_pwd_strong')
]); ?>;

var strengthColors = ['var(--brand-error)','var(--brand-warning)','var(--brand-warning)','var(--brand-secondary)'];

function checkStrength(val) {
    var s = 0;
    if (val.length >= 8) s++;
    if (/[A-Z]/.test(val) && /[a-z]/.test(val)) s++;
    if (/\d/.test(val)) s++;
    if (/[^a-zA-Z0-9]/.test(val)) s++;
    var meter = document.getElementById('pwdStrength');
    var label = document.getElementById('pwdLabel');
    if (!meter) return;
    meter.setAttribute('data-level', s);
    if (val.length === 0) { label.textContent = ''; return; }
    label.textContent = strengthLabels[s - 1] || strengthLabels[0];
    label.style.color = strengthColors[s - 1] || strengthColors[0];
}

function handleReset(e) {
    e.preventDefault();
    var pwd = document.getElementById('resetPassword').value;
    var cfm = document.getElementById('resetConfirm').value;
    if (pwd !== cfm) {
        alert('<?php echo e(__('auth_pwd_mismatch')); ?>');
        return false;
    }
    var btn = document.getElementById('resetBtn');
    btn.classList.add('is-loading');
    setTimeout(function() {
        window.location.href = '<?php echo DASH_BASE_PATH; ?>/pages/auth/reset.php?state=done';
    }, 1200);
    return false;
}
</script>

<?php require_once __DIR__ . '/../../layouts/auth-footer.php'; ?>
