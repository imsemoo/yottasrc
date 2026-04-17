<?php
/**
 * Verification Banner Component
 * ==============================
 * A dismissible warning banner that prompts new users to complete account
 * verification. Opt-in: page must set $show_verification_banner = true before
 * including this component (or call it directly).
 *
 * Usage (top of any page, after shell.php):
 *   include __DIR__ . '/../../components/verification-banner.php';
 *
 * Or inside shell.php (auto-display when set):
 *   $show_verification_banner = true;
 */

$verify_url = DASH_BASE_PATH . '/pages/verification/index.php';
?>
<div class="db-verify-banner" id="verifyBanner">
    <div class="db-verify-banner__icon">
        <i class="fas fa-triangle-exclamation"></i>
    </div>
    <div class="db-verify-banner__content">
        <strong><?php echo e(__('verify_banner_label')); ?></strong>
        <span><?php echo e(__('verify_banner_text')); ?></span>
        <a href="<?php echo e($verify_url); ?>" class="db-verify-banner__link">
            <?php echo e(__('verify_banner_cta')); ?> <i class="fas fa-arrow-right"></i>
        </a>
    </div>
</div>
