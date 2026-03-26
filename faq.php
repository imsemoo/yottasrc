<?php
/**
 * YottaSrc — FAQ Hub
 * ====================
 */
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/topbar.php';
?>

    <!-- ═══════════════ PAGE HERO ═══════════════ -->
    <section class="page-hero page-hero--compact">
        <div class="container">
            <div class="page-hero-split">
                <div class="page-hero-content">
                    <div class="page-breadcrumb">
                        <a href="<?php echo e(SITE_URL); ?>/"><?php echo e(__('breadcrumb_home')); ?></a>
                        <i class="fas fa-chevron-right"></i>
                        <span><?php echo e(__('faq_breadcrumb')); ?></span>
                    </div>
                    <h1><?php echo __('faq_title'); ?></h1>
                    <p class="page-hero-desc"><?php echo e(__('faq_desc')); ?></p>
                    <div class="page-hero-links">
                        <a href="https://docs.yottasrc.com/" class="btn-secondary btn-sm" target="_blank" rel="noopener noreferrer"><i class="fas fa-file-code"></i> <?php echo e(__('faq_hero_links_docs')); ?></a>
                        <a href="<?php echo e(SITE_URL); ?>/contact-us/" class="btn-secondary btn-sm"><i class="fas fa-headset"></i> <?php echo e(__('faq_hero_links_ticket')); ?></a>
                        <a href="https://wiki.yottasrc.com/" class="btn-secondary btn-sm" target="_blank" rel="noopener noreferrer"><i class="fas fa-book-open"></i> <?php echo e(__('faq_hero_links_tutorials')); ?></a>
                        <a href="https://blog.yottasrc.com/" class="btn-secondary btn-sm" target="_blank" rel="noopener noreferrer"><i class="fas fa-rss"></i> <?php echo e(__('faq_hero_links_blog')); ?></a>
                    </div>
                </div>
                <div class="page-hero-visual">
                    <svg viewBox="0 0 400 360" fill="none" xmlns="http://www.w3.org/2000/svg" class="hero-illustration">
                        <!-- Central question circle -->
                        <circle cx="200" cy="160" r="70" fill="var(--bg-tertiary)" stroke="var(--brand-primary)" stroke-width="1" opacity="0.85"/>
                        <text x="200" y="185" text-anchor="middle" fill="var(--brand-primary)" font-size="72" font-weight="800" font-family="var(--font-display)" opacity="0.25">?</text>
                        <!-- Floating FAQ cards -->
                        <rect x="40" y="55" width="90" height="55" rx="10" fill="var(--bg-tertiary)" stroke="var(--brand-primary)" stroke-width="0.8" opacity="0.9"/>
                        <rect x="52" y="68" width="45" height="5" rx="2.5" fill="var(--brand-primary)" opacity="0.3"/>
                        <rect x="52" y="78" width="65" height="5" rx="2.5" fill="var(--brand-primary)" opacity="0.15"/>
                        <rect x="52" y="88" width="30" height="5" rx="2.5" fill="var(--brand-secondary)" opacity="0.25"/>
                        <rect x="270" y="70" width="90" height="55" rx="10" fill="var(--bg-tertiary)" stroke="var(--brand-accent)" stroke-width="0.8" opacity="0.9"/>
                        <rect x="282" y="83" width="45" height="5" rx="2.5" fill="var(--brand-accent)" opacity="0.3"/>
                        <rect x="282" y="93" width="65" height="5" rx="2.5" fill="var(--brand-accent)" opacity="0.15"/>
                        <rect x="282" y="103" width="30" height="5" rx="2.5" fill="var(--brand-secondary)" opacity="0.25"/>
                        <rect x="50" y="255" width="90" height="55" rx="10" fill="var(--bg-tertiary)" stroke="var(--brand-secondary)" stroke-width="0.8" opacity="0.9"/>
                        <rect x="62" y="268" width="45" height="5" rx="2.5" fill="var(--brand-secondary)" opacity="0.3"/>
                        <rect x="62" y="278" width="65" height="5" rx="2.5" fill="var(--brand-secondary)" opacity="0.15"/>
                        <rect x="62" y="288" width="30" height="5" rx="2.5" fill="var(--brand-primary)" opacity="0.25"/>
                        <rect x="260" y="240" width="90" height="55" rx="10" fill="var(--bg-tertiary)" stroke="var(--brand-primary)" stroke-width="0.8" opacity="0.9"/>
                        <rect x="272" y="253" width="45" height="5" rx="2.5" fill="var(--brand-primary)" opacity="0.3"/>
                        <rect x="272" y="263" width="65" height="5" rx="2.5" fill="var(--brand-primary)" opacity="0.15"/>
                        <rect x="272" y="273" width="30" height="5" rx="2.5" fill="var(--brand-accent)" opacity="0.25"/>
                        <!-- Connection lines -->
                        <line x1="130" y1="82" x2="135" y2="135" stroke="var(--brand-primary)" stroke-width="1" stroke-dasharray="4 3" opacity="0.3"/>
                        <line x1="270" y1="97" x2="265" y2="140" stroke="var(--brand-accent)" stroke-width="1" stroke-dasharray="4 3" opacity="0.3"/>
                        <line x1="140" y1="282" x2="145" y2="225" stroke="var(--brand-secondary)" stroke-width="1" stroke-dasharray="4 3" opacity="0.3"/>
                        <line x1="260" y1="267" x2="255" y2="220" stroke="var(--brand-primary)" stroke-width="1" stroke-dasharray="4 3" opacity="0.3"/>
                        <!-- Floating dots -->
                        <circle cx="30" cy="170" r="3" fill="var(--brand-primary)" opacity="0.3"><animate attributeName="opacity" values="0.3;0.7;0.3" dur="3s" repeatCount="indefinite"/></circle>
                        <circle cx="370" cy="170" r="3" fill="var(--brand-secondary)" opacity="0.3"><animate attributeName="opacity" values="0.3;0.6;0.3" dur="4s" repeatCount="indefinite"/></circle>
                        <circle cx="200" cy="340" r="2" fill="var(--brand-accent)" opacity="0.3"><animate attributeName="opacity" values="0.2;0.5;0.2" dur="5s" repeatCount="indefinite"/></circle>
                    </svg>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ ALL FAQ — Tabbed Accordion ═══════════════ -->
    <section class="faq-section faq-hub-section reveal">
        <div class="container">
            <div class="faq-tabs">
                <button class="faq-tab active" data-faq-target="faq-general"><i class="fas fa-circle-question"></i> <?php echo e(__('faq_tab_general')); ?></button>
                <button class="faq-tab" data-faq-target="faq-hosting"><i class="fas fa-server"></i> <?php echo e(__('faq_tab_hosting')); ?></button>
                <button class="faq-tab" data-faq-target="faq-vps"><i class="fab fa-linux"></i> <?php echo e(__('faq_tab_vps')); ?></button>
                <button class="faq-tab" data-faq-target="faq-cloud"><i class="fas fa-cloud"></i> <?php echo e(__('faq_tab_cloud')); ?></button>
                <button class="faq-tab" data-faq-target="faq-reseller"><i class="fas fa-sitemap"></i> <?php echo e(__('faq_tab_reseller')); ?></button>
                <button class="faq-tab" data-faq-target="faq-windows"><i class="fab fa-windows"></i> <?php echo __('faq_tab_windows'); ?></button>
                <button class="faq-tab" data-faq-target="faq-payment"><i class="fas fa-credit-card"></i> <?php echo e(__('faq_tab_payment')); ?></button>
                <button class="faq-tab" data-faq-target="faq-affiliate"><i class="fas fa-handshake"></i> <?php echo e(__('faq_tab_affiliate')); ?></button>
            </div>

            <div class="faq-layout faq-layout--full">
                <div class="faq-panels">

                    <!-- ── General ── -->
                    <div class="faq-panel active" id="faq-general">
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('faq_gen_q1')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('faq_gen_a1')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('faq_gen_q2')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('faq_gen_a2')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('faq_gen_q3')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('faq_gen_a3')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('faq_gen_q4')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('faq_gen_a4')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('faq_gen_q5')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('faq_gen_a5')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('faq_gen_q6')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo __('faq_gen_a6', ['refund_url' => e(SITE_URL) . '/legal/refund-policy']); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('faq_gen_q7')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('faq_gen_a7')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('faq_gen_q8')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('faq_gen_a8')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('faq_gen_q9')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('faq_gen_a9')); ?></p></div></div>
                    </div>

                    <!-- ── Hosting ── -->
                    <div class="faq-panel" id="faq-hosting">
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('faq_hosting_q1')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('faq_hosting_a1')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('faq_hosting_q2')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('faq_hosting_a2')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('faq_hosting_q3')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('faq_hosting_a3')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('faq_hosting_q4')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('faq_hosting_a4')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('faq_hosting_q5')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('faq_hosting_a5')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('faq_hosting_q6')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('faq_hosting_a6')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('faq_hosting_q7')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('faq_hosting_a7')); ?></p></div></div>
                    </div>

                    <!-- ── VPS ── -->
                    <div class="faq-panel" id="faq-vps">
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('faq_vps_q1')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('faq_vps_a1')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('faq_vps_q2')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('faq_vps_a2')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('faq_vps_q3')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('faq_vps_a3')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('faq_vps_q4')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('faq_vps_a4')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('faq_vps_q5')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('faq_vps_a5')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('faq_vps_q6')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('faq_vps_a6')); ?></p></div></div>
                    </div>

                    <!-- ── Cloud ── -->
                    <div class="faq-panel" id="faq-cloud">
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('faq_cloud_q1')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('faq_cloud_a1')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('faq_cloud_q2')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('faq_cloud_a2')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('faq_cloud_q3')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('faq_cloud_a3')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('faq_cloud_q4')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('faq_cloud_a4')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('faq_cloud_q5')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('faq_cloud_a5')); ?></p></div></div>
                    </div>

                    <!-- ── Reseller ── -->
                    <div class="faq-panel" id="faq-reseller">
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('faq_reseller_q1')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('faq_reseller_a1')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('faq_reseller_q2')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo __('faq_reseller_a2'); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('faq_reseller_q3')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('faq_reseller_a3')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('faq_reseller_q4')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('faq_reseller_a4')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('faq_reseller_q5')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('faq_reseller_a5')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('faq_reseller_q6')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('faq_reseller_a6')); ?></p></div></div>
                    </div>

                    <!-- ── Windows & Licenses ── -->
                    <div class="faq-panel" id="faq-windows">
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('faq_windows_q1')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('faq_windows_a1')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('faq_windows_q2')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('faq_windows_a2')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('faq_windows_q3')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('faq_windows_a3')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('faq_windows_q4')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('faq_windows_a4')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('faq_windows_q5')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('faq_windows_a5')); ?></p></div></div>
                    </div>

                    <!-- ── Payment ── -->
                    <div class="faq-panel" id="faq-payment">
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('faq_payment_q1')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('faq_payment_a1')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('faq_payment_q2')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('faq_payment_a2')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('faq_payment_q3')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('faq_payment_a3')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('faq_payment_q4')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('faq_payment_a4')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('faq_payment_q5')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('faq_payment_a5')); ?></p></div></div>
                    </div>

                    <!-- ── Affiliate ── -->
                    <div class="faq-panel" id="faq-affiliate">
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('faq_aff_q1')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('faq_aff_a1')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('faq_aff_q2')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('faq_aff_a2')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('faq_aff_q3')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('faq_aff_a3')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('faq_aff_q4')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('faq_aff_a4')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('faq_aff_q5')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('faq_aff_a5')); ?></p></div></div>
                    </div>

                    <div class="faq-no-results"><i class="fas fa-search"></i> <?php echo e(__('faq_no_results')); ?></div>
                </div>
            </div>

            <div class="faq-actions">
                <a href="<?php echo e(SITE_URL); ?>/contact-us/" class="btn-primary"><i class="fas fa-headset"></i> <?php echo e(__('faq_action_ticket')); ?></a>
            </div>
        </div>
    </section>

    <!-- ═══════════════ SUPPORT CTA ═══════════════ -->
    <section class="faq-support-cta reveal">
        <div class="container">
            <div class="faq-support-inner">
                <div class="faq-support-icon"><i class="fas fa-life-ring"></i></div>
                <h2><?php echo e(__('faq_support_title')); ?></h2>
                <p><?php echo e(__('faq_support_desc')); ?></p>
                <div class="faq-support-btns">
                    <a href="<?php echo e(CONSOLE_URL); ?>/login" class="btn-primary"><i class="fas fa-ticket-alt"></i> <?php echo e(__('faq_support_btn_ticket')); ?></a>
                    <a href="<?php echo e(SITE_URL); ?>/contact-us/" class="btn-secondary"><i class="fas fa-headset"></i> <?php echo e(__('faq_support_btn_contact')); ?></a>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ PROMOTIONS CTA ═══════════════ -->
    <section class="promo-cta reveal">
        <div class="container">
            <div class="promo-cta-inner">
                <div class="promo-cta-glow"></div>
                <div class="promo-cta-icon"><i class="fas fa-gift"></i></div>
                <h2><?php echo __('faq_promo_title'); ?></h2>
                <p><?php echo e(__('faq_promo_desc')); ?></p>
                <a href="<?php echo e(SITE_URL); ?>/promotions" class="btn-primary"><?php echo e(__('faq_promo_btn')); ?> <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
