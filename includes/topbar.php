<!-- Promo Bar -->
<div class="promo-bar" id="promoBar">
    <div class="promo-marquee">
        <?php for ($i = 0; $i < 4; $i++): ?>
        <span class="promo-marquee-item">🌙 <strong><?php echo e(__('promo_text')); ?></strong> <?php echo __('promo_description'); ?> <a href="<?php echo e(SITE_URL); ?>/promotions"><?php echo e(__('promo_cta')); ?></a></span>
        <?php endfor; ?>
    </div>
    <button class="promo-close" id="promoClose" aria-label="<?php echo e(__('promo_close')); ?>">
        <i class="fas fa-times"></i>
    </button>
</div>
