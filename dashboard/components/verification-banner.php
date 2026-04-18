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
<div class="db-verify-banner db-verify-banner--slim" id="verifyBanner" data-dismissible>
    <div class="db-verify-banner__icon">
        <i class="fas fa-shield-halved"></i>
    </div>
    <div class="db-verify-banner__content">
        <strong><?php echo e(__('verify_banner_label')); ?></strong>
        <span><?php echo e(__('verify_banner_text')); ?></span>
    </div>
    <a href="<?php echo e($verify_url); ?>" class="db-verify-banner__link">
        <?php echo e(__('verify_banner_cta')); ?> <i class="fas fa-arrow-right"></i>
    </a>
    <button type="button" class="db-verify-banner__dismiss" aria-label="<?php echo e(__('common_dismiss')); ?>" data-verify-dismiss>
        <i class="fas fa-xmark"></i>
    </button>
</div>
<script>
(function () {
    var banner = document.getElementById('verifyBanner');
    if (!banner) return;
    // Respect previous dismissal in this session
    try {
        if (sessionStorage.getItem('yottasrc_verify_banner_dismissed') === '1') {
            banner.style.display = 'none';
            return;
        }
    } catch (e) {}
    var btn = banner.querySelector('[data-verify-dismiss]');
    if (!btn) return;
    btn.addEventListener('click', function () {
        banner.style.transition = 'opacity 180ms ease, transform 180ms ease, margin 180ms ease, padding 180ms ease, height 180ms ease';
        banner.style.opacity = '0';
        banner.style.transform = 'translateY(-4px)';
        setTimeout(function () {
            banner.style.display = 'none';
            try { sessionStorage.setItem('yottasrc_verify_banner_dismissed', '1'); } catch (e) {}
        }, 190);
    });
})();
</script>
