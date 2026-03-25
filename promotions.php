<?php
/**
 * YottaSrc — Promotions
 * ======================
 * Active promotions and limited-time offers.
 */
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/topbar.php';
?>

    <!-- ═══════════════ HERO ═══════════════ -->
    <section class="page-hero">
        <div class="container">
            <div class="page-hero-content" >
                <div class="page-breadcrumb" >
                    <a href="<?php echo e(SITE_URL); ?>/"><?php echo e(__('breadcrumb_home')); ?></a>
                    <i class="fas fa-chevron-right"></i>
                    <span><?php echo e(__('promo_page_breadcrumb')); ?></span>
                </div>
                <h1><?php echo __('promo_page_title'); ?></h1>
                <p class="page-hero-desc">
                    <?php echo e(__('promo_page_desc')); ?>
                </p>
            </div>
        </div>
    </section>

    <!-- ═══════════════ ACTIVE PROMOTIONS ═══════════════ -->
    <section class="promo-offers reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag"><?php echo e(__('promo_active_tag')); ?></div>
                <h2><?php echo e(__('promo_active_title')); ?></h2>
                <p><?php echo e(__('promo_active_desc')); ?></p>
            </div>

            <div class="promo-offers-grid promo-offers-grid--2col">
                <!-- Promo 1: cPanel 10% -->
                <div class="promo-offer-card">
                    <div class="promo-offer-badge promo-badge-green"><?php echo e(__('common_active')); ?></div>
                    <div class="promo-offer-discount">10% OFF</div>
                    <h3>Discount 10% for cPanel hosting packages</h3>
                    <ul class="promo-detail-list">
                        <li><i class="fas fa-percent"></i> <?php echo e(__('promo_percentage')); ?>: <strong>10%</strong></li>
                        <li><i class="fas fa-calendar-alt"></i> <?php echo e(__('promo_expires')); ?>: <strong>July 1, 2026</strong></li>
                        <li><i class="fas fa-sync-alt"></i> <?php echo e(__('promo_billing_cycle')); ?>: <strong><?php echo e(__('promo_all_cycles')); ?></strong></li>
                        <li><i class="fas fa-receipt"></i> <?php echo e(__('promo_one_time_first')); ?></li>
                        <li><i class="fas fa-users"></i> <?php echo e(__('promo_eligible_all')); ?></li>
                    </ul>
                    <div class="promo-code-wrap">
                        <code class="promo-code-text">cPanel_10OFF</code>
                        <button class="promo-code-copy" data-code="cPanel_10OFF" title="<?php echo e(__('common_copy_code')); ?>"><i class="fas fa-copy"></i></button>
                    </div>
                </div>

                <!-- Promo 2: WordPress 15% -->
                <div class="promo-offer-card">
                    <div class="promo-offer-badge promo-badge-green"><?php echo e(__('common_active')); ?></div>
                    <div class="promo-offer-discount">15% OFF</div>
                    <h3>Discount 15% for WordPress hosting packages</h3>
                    <ul class="promo-detail-list">
                        <li><i class="fas fa-percent"></i> <?php echo e(__('promo_percentage')); ?>: <strong>15%</strong></li>
                        <li><i class="fas fa-calendar-alt"></i> <?php echo e(__('promo_expires')); ?>: <strong>July 1, 2026</strong></li>
                        <li><i class="fas fa-sync-alt"></i> <?php echo e(__('promo_billing_cycle')); ?>: <strong><?php echo e(__('promo_all_cycles')); ?></strong></li>
                        <li><i class="fas fa-receipt"></i> <?php echo e(__('promo_one_time_first')); ?></li>
                        <li><i class="fas fa-users"></i> <?php echo e(__('promo_eligible_all')); ?></li>
                    </ul>
                    <div class="promo-code-wrap">
                        <code class="promo-code-text">WP_15OFF</code>
                        <button class="promo-code-copy" data-code="WP_15OFF" title="<?php echo e(__('common_copy_code')); ?>"><i class="fas fa-copy"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ EXPIRED PROMOTIONS ═══════════════ -->
    <section class="promo-expired reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag"><?php echo e(__('promo_expired_tag')); ?></div>
                <h2><?php echo e(__('promo_expired_title')); ?></h2>
                <p><?php echo e(__('promo_expired_desc')); ?></p>
            </div>

            <div class="promo-expired-list">
                <div class="promo-expired-item"><i class="fas fa-tag"></i><span>Ramadan 2026: 10% OFF Recurring on Hosting &amp; VPS</span><span class="promo-expired-tag"><?php echo e(__('common_expired')); ?></span></div>
                <div class="promo-expired-item"><i class="fas fa-tag"></i><span>New Year: 10% off VPS/VDS and Servers services (Lifetime)</span><span class="promo-expired-tag"><?php echo e(__('common_expired')); ?></span></div>
                <div class="promo-expired-item"><i class="fas fa-tag"></i><span>New Year: 20% off VPS/VDS and Servers services (Lifetime)</span><span class="promo-expired-tag"><?php echo e(__('common_expired')); ?></span></div>
                <div class="promo-expired-item"><i class="fas fa-tag"></i><span>New Year: 20% off cPanel &amp; WordPress hosting (Lifetime)</span><span class="promo-expired-tag"><?php echo e(__('common_expired')); ?></span></div>
                <div class="promo-expired-item"><i class="fas fa-tag"></i><span>New Year: 35% off cPanel &amp; WordPress hosting (Lifetime)</span><span class="promo-expired-tag"><?php echo e(__('common_expired')); ?></span></div>
                <div class="promo-expired-item"><i class="fas fa-tag"></i><span>Cyber Monday: 10% OFF on all services (Lifetime)</span><span class="promo-expired-tag"><?php echo e(__('common_expired')); ?></span></div>
                <div class="promo-expired-item"><i class="fas fa-tag"></i><span>10% off on all products</span><span class="promo-expired-tag"><?php echo e(__('common_expired')); ?></span></div>
                <div class="promo-expired-item"><i class="fas fa-tag"></i><span>Summer Sale: 12% off on all services</span><span class="promo-expired-tag"><?php echo e(__('common_expired')); ?></span></div>
                <div class="promo-expired-item"><i class="fas fa-tag"></i><span>YottaSrc Speaks Your Language! 10% Discount</span><span class="promo-expired-tag"><?php echo e(__('common_expired')); ?></span></div>
                <div class="promo-expired-item"><i class="fas fa-tag"></i><span>20% Off all VPS Windows Plans</span><span class="promo-expired-tag"><?php echo e(__('common_expired')); ?></span></div>
                <div class="promo-expired-item"><i class="fas fa-tag"></i><span>Happy Easter: 10% discount for any service</span><span class="promo-expired-tag"><?php echo e(__('common_expired')); ?></span></div>
                <div class="promo-expired-item"><i class="fas fa-tag"></i><span>10% Lifetime discount for any service</span><span class="promo-expired-tag"><?php echo e(__('common_expired')); ?></span></div>
                <div class="promo-expired-item"><i class="fas fa-tag"></i><span>Ramadan 2025 Special: 12% Off All Services</span><span class="promo-expired-tag"><?php echo e(__('common_expired')); ?></span></div>
                <div class="promo-expired-item"><i class="fas fa-tag"></i><span>Black Friday: 30% off hosting services</span><span class="promo-expired-tag"><?php echo e(__('common_expired')); ?></span></div>
                <div class="promo-expired-item"><i class="fas fa-tag"></i><span>Black Friday: 15% off Servers/VPS services</span><span class="promo-expired-tag"><?php echo e(__('common_expired')); ?></span></div>
                <div class="promo-expired-item"><i class="fas fa-tag"></i><span>25% off cPanel hosting packages (First 3 months)</span><span class="promo-expired-tag"><?php echo e(__('common_expired')); ?></span></div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ HOW TO REDEEM ═══════════════ -->
    <section class="promo-redeem reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag"><?php echo e(__('promo_redeem_tag')); ?></div>
                <h2><?php echo e(__('promo_redeem_title')); ?></h2>
                <p><?php echo e(__('promo_redeem_desc')); ?></p>
            </div>

            <div class="redeem-steps">
                <div class="redeem-step">
                    <div class="redeem-step-icon"><i class="fas fa-shopping-cart"></i></div>
                    <div class="redeem-step-num">Step 1</div>
                    <h4><?php echo e(__('promo_step1_title')); ?></h4>
                    <p><?php echo e(__('promo_step1_desc')); ?></p>
                </div>
                <div class="redeem-step">
                    <div class="redeem-step-icon icon-green"><i class="fas fa-copy"></i></div>
                    <div class="redeem-step-num">Step 2</div>
                    <h4><?php echo e(__('promo_step2_title')); ?></h4>
                    <p><?php echo e(__('promo_step2_desc')); ?></p>
                </div>
                <div class="redeem-step">
                    <div class="redeem-step-icon icon-blue"><i class="fas fa-paste"></i></div>
                    <div class="redeem-step-num">Step 3</div>
                    <h4><?php echo e(__('promo_step3_title')); ?></h4>
                    <p><?php echo e(__('promo_step3_desc')); ?></p>
                </div>
                <div class="redeem-step">
                    <div class="redeem-step-icon icon-purple"><i class="fas fa-rocket"></i></div>
                    <div class="redeem-step-num">Step 4</div>
                    <h4><?php echo e(__('promo_step4_title')); ?></h4>
                    <p><?php echo e(__('promo_step4_desc')); ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ BOTTOM CTA ═══════════════ -->
    <section class="promo-cta reveal">
        <div class="container">
            <div class="promo-cta-inner">
                <div class="promo-cta-glow"></div>
                <div class="promo-cta-icon"><i class="fas fa-percentage"></i></div>
                <h2><?php echo e(__('promo_cta_title')); ?></h2>
                <p><?php echo e(__('promo_cta_desc')); ?></p>
                <a href="<?php echo e(SITE_URL); ?>/cpanel-hosting/" class="btn-primary"><?php echo e(__('common_get_started')); ?> <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
