<?php
/**
 * Promo Bar (dashboard)
 * ======================
 * Marquee-style announcement bar pinned above the dashboard shell.
 * Mirrors the main site banner so the client sees the same active offer.
 *
 * - Dismissal is per-session (sessionStorage).
 * - Marquee content is duplicated 4× so the loop has no gap.
 * - Hover pauses the animation (matches main site behaviour).
 */
$promo_url = defined('SITE_URL') ? SITE_URL . '/promotions' : '#';
?>
<div class="db-promo-bar" id="dbPromoBar">
    <div class="db-promo-marquee">
        <?php for ($i = 0; $i < 4; $i++): ?>
        <span class="db-promo-marquee-item">
            🌙 <strong><?php echo e(__('promo_text')); ?></strong>
            <?php echo __('promo_description'); ?>
            <a href="<?php echo e($promo_url); ?>"><?php echo e(__('promo_cta')); ?></a>
        </span>
        <?php endfor; ?>
    </div>
    <button class="db-promo-close" id="dbPromoClose" aria-label="<?php echo e(__('promo_close')); ?>" type="button">
        <i class="fas fa-xmark"></i>
    </button>
</div>
<script>
(function () {
    var bar = document.getElementById('dbPromoBar');
    if (!bar) return;
    // On refresh: apply the same `.is-hidden` class (not display:none) so the
    // body:has() rule zeroes --db-promo-height and the sidebar/topbar slide up.
    try {
        if (sessionStorage.getItem('yottasrc_dash_promo_dismissed') === '1') {
            bar.classList.add('is-hidden');
        }
    } catch (e) {}
    var btn = document.getElementById('dbPromoClose');
    if (!btn) return;
    btn.addEventListener('click', function () {
        bar.classList.add('is-hidden');
        try { sessionStorage.setItem('yottasrc_dash_promo_dismissed', '1'); } catch (e) {}
    });
})();
</script>
