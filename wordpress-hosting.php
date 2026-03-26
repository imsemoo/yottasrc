<?php
/**
 * YottaSrc — WordPress Hosting
 * ==============================
 * Managed WordPress Hosting — optimized stack for WordPress sites.
 */
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/topbar.php';
?>

    <!-- ═══════════════ HERO ═══════════════ -->
    <section class="page-hero wp-hero">
        <div class="container">
            <div class="page-hero-split">
                <div class="page-hero-content">
                    <div class="page-breadcrumb">
                        <a href="<?php echo e(SITE_URL); ?>/"><?php echo e(__('breadcrumb_home')); ?></a>
                        <i class="fas fa-chevron-right"></i>
                        <span><?php echo e(__('wp_breadcrumb')); ?></span>
                    </div>
                    <h1><?php echo __('wp_title'); ?></h1>
                    <p class="page-hero-desc">
                        <?php echo e(__('wp_desc')); ?>
                    </p>
                    <div class="page-hero-ctas">
                        <a href="#plans" class="btn-primary"><?php echo e(__('wp_hero_cta_plans')); ?> <i class="fas fa-arrow-down"></i></a>
                        <a href="<?php echo e(SITE_URL); ?>/contact-us/" class="btn-secondary"><i class="fas fa-headset"></i> <?php echo e(__('wp_hero_cta_sales')); ?></a>
                    </div>
                    <div class="page-hero-badges">
                        <div class="hero-badge-item"><i class="fas fa-check"></i> <?php echo e(__('wp_badge_litespeed')); ?></div>
                        <div class="hero-badge-item"><i class="fas fa-check"></i> <?php echo e(__('wp_badge_updates')); ?></div>
                        <div class="hero-badge-item"><i class="fas fa-check"></i> <?php echo e(__('wp_badge_malware')); ?></div>
                        <div class="hero-badge-item"><i class="fas fa-check"></i> <?php echo e(__('wp_badge_install')); ?></div>
                    </div>
                </div>
                <div class="page-hero-visual">
                    <svg viewBox="0 0 440 400" fill="none" xmlns="http://www.w3.org/2000/svg" class="hero-illustration" aria-label="WordPress dashboard illustration">
                        <!-- Window Frame -->
                        <rect x="20" y="20" width="400" height="360" rx="16" fill="var(--bg-card)" stroke="var(--border-primary)" stroke-width="1.5"/>
                        <rect x="20" y="20" width="400" height="38" rx="16" fill="var(--bg-tertiary)"/>
                        <rect x="20" y="42" width="400" height="16" fill="var(--bg-tertiary)"/>
                        <circle cx="42" cy="39" r="5" fill="var(--brand-error)" opacity="0.6"/>
                        <circle cx="58" cy="39" r="5" fill="var(--brand-warning)" opacity="0.6"/>
                        <circle cx="74" cy="39" r="5" fill="var(--brand-secondary)" opacity="0.6"/>
                        <text x="220" y="44" text-anchor="middle" fill="var(--text-tertiary)" font-size="11" font-family="var(--font-mono)" font-weight="600" opacity="0.6">WordPress — Dashboard</text>

                        <!-- Sidebar -->
                        <rect x="20" y="58" width="100" height="322" fill="var(--bg-tertiary)" opacity="0.5"/>
                        <line x1="120" y1="58" x2="120" y2="380" stroke="var(--border-primary)" stroke-width="1"/>
                        <!-- WP logo -->
                        <circle cx="70" cy="78" r="12" fill="var(--brand-primary)" opacity="0.15"/>
                        <text x="70" y="83" text-anchor="middle" fill="var(--brand-primary)" font-size="14" font-family="var(--font-body)" font-weight="800" opacity="0.6">W</text>
                        <!-- Nav items -->
                        <rect x="32" y="100" width="76" height="7" rx="3" fill="var(--brand-primary)" opacity="0.18"/>
                        <rect x="32" y="118" width="60" height="6" rx="3" fill="var(--text-tertiary)" opacity="0.12"/>
                        <rect x="32" y="134" width="68" height="6" rx="3" fill="var(--text-tertiary)" opacity="0.12"/>
                        <rect x="32" y="150" width="52" height="6" rx="3" fill="var(--text-tertiary)" opacity="0.12"/>
                        <rect x="32" y="166" width="72" height="6" rx="3" fill="var(--text-tertiary)" opacity="0.12"/>
                        <rect x="32" y="182" width="56" height="6" rx="3" fill="var(--text-tertiary)" opacity="0.12"/>

                        <!-- Dashboard Stats -->
                        <text x="134" y="82" fill="var(--text-secondary)" font-size="10" font-family="var(--font-display)" font-weight="700" opacity="0.7">At a Glance</text>

                        <!-- Stat card 1: Posts -->
                        <rect x="134" y="92" width="112" height="56" rx="8" fill="var(--bg-tertiary)" stroke="var(--border-primary)" stroke-width="0.8"/>
                        <text x="148" y="118" fill="var(--brand-primary)" font-size="18" font-family="var(--font-display)" font-weight="800" opacity="0.7">47</text>
                        <text x="148" y="134" fill="var(--text-tertiary)" font-size="7.5" font-family="var(--font-mono)" opacity="0.5">Published Posts</text>

                        <!-- Stat card 2: Pages -->
                        <rect x="258" y="92" width="112" height="56" rx="8" fill="var(--bg-tertiary)" stroke="var(--border-primary)" stroke-width="0.8"/>
                        <text x="272" y="118" fill="var(--brand-secondary)" font-size="18" font-family="var(--font-display)" font-weight="800" opacity="0.7">12</text>
                        <text x="272" y="134" fill="var(--text-tertiary)" font-size="7.5" font-family="var(--font-mono)" opacity="0.5">Pages</text>

                        <!-- Performance card -->
                        <text x="134" y="172" fill="var(--text-secondary)" font-size="10" font-family="var(--font-display)" font-weight="700" opacity="0.7">Performance</text>
                        <rect x="134" y="182" width="236" height="72" rx="10" fill="var(--bg-tertiary)" stroke="var(--border-primary)" stroke-width="0.8"/>
                        <!-- Mini chart bars -->
                        <rect x="152" y="224" width="12" height="20" rx="2" fill="var(--brand-primary)" opacity="0.3"/>
                        <rect x="170" y="214" width="12" height="30" rx="2" fill="var(--brand-primary)" opacity="0.4"/>
                        <rect x="188" y="208" width="12" height="36" rx="2" fill="var(--brand-primary)" opacity="0.5"/>
                        <rect x="206" y="200" width="12" height="44" rx="2" fill="var(--brand-primary)" opacity="0.6"/>
                        <rect x="224" y="204" width="12" height="40" rx="2" fill="var(--brand-primary)" opacity="0.55"/>
                        <rect x="242" y="196" width="12" height="48" rx="2" fill="var(--brand-primary)" opacity="0.7"/>
                        <rect x="260" y="192" width="12" height="52" rx="2" fill="var(--brand-secondary)" opacity="0.8">
                            <animate attributeName="opacity" values="0.6;0.8;0.6" dur="2s" repeatCount="indefinite"/>
                        </rect>
                        <text x="300" y="210" fill="var(--brand-secondary)" font-size="14" font-family="var(--font-display)" font-weight="800" opacity="0.7">A+</text>
                        <text x="300" y="224" fill="var(--text-tertiary)" font-size="7" font-family="var(--font-mono)" opacity="0.5">PageSpeed</text>

                        <!-- Plugins section -->
                        <text x="134" y="278" fill="var(--text-secondary)" font-size="10" font-family="var(--font-display)" font-weight="700" opacity="0.7">Active Plugins</text>
                        <rect x="134" y="288" width="112" height="36" rx="8" fill="var(--bg-tertiary)" stroke="var(--border-primary)" stroke-width="0.8"/>
                        <text x="148" y="310" fill="var(--text-secondary)" font-size="8" font-family="var(--font-body)" font-weight="600" opacity="0.6">LSCache</text>
                        <circle cx="228" cy="306" r="6" fill="var(--brand-secondary)" opacity="0.3"/>
                        <text x="228" y="309" text-anchor="middle" fill="var(--brand-secondary)" font-size="7" font-family="var(--font-mono)" font-weight="700" opacity="0.7">✓</text>

                        <rect x="258" y="288" width="112" height="36" rx="8" fill="var(--bg-tertiary)" stroke="var(--border-primary)" stroke-width="0.8"/>
                        <text x="272" y="310" fill="var(--text-secondary)" font-size="8" font-family="var(--font-body)" font-weight="600" opacity="0.6">Imunify360</text>
                        <circle cx="352" cy="306" r="6" fill="var(--brand-secondary)" opacity="0.3"/>
                        <text x="352" y="309" text-anchor="middle" fill="var(--brand-secondary)" font-size="7" font-family="var(--font-mono)" font-weight="700" opacity="0.7">✓</text>

                        <!-- Floating badges -->
                        <rect x="350" y="2" width="86" height="36" rx="10" fill="var(--bg-card)" stroke="var(--border-primary)" stroke-width="1">
                            <animate attributeName="y" values="2;8;2" dur="5s" repeatCount="indefinite"/>
                        </rect>
                        <text x="370" y="17" fill="var(--text-tertiary)" font-size="7" font-family="var(--font-mono)" font-weight="600" opacity="0.6">
                            TTFB
                            <animate attributeName="y" values="17;23;17" dur="5s" repeatCount="indefinite"/>
                        </text>
                        <text x="370" y="31" fill="var(--brand-secondary)" font-size="13" font-family="var(--font-display)" font-weight="800" opacity="0.8">
                            &lt;120ms
                            <animate attributeName="y" values="31;37;31" dur="5s" repeatCount="indefinite"/>
                        </text>

                        <rect x="0" y="320" width="82" height="36" rx="10" fill="var(--bg-card)" stroke="var(--border-primary)" stroke-width="1">
                            <animate attributeName="y" values="320;314;320" dur="6s" repeatCount="indefinite"/>
                        </rect>
                        <text x="16" y="335" fill="var(--text-tertiary)" font-size="7" font-family="var(--font-mono)" font-weight="600" opacity="0.6">
                            CACHE
                            <animate attributeName="y" values="335;329;335" dur="6s" repeatCount="indefinite"/>
                        </text>
                        <text x="16" y="349" fill="var(--brand-primary)" font-size="13" font-family="var(--font-display)" font-weight="800" opacity="0.8">
                            HIT
                            <animate attributeName="y" values="349;343;349" dur="6s" repeatCount="indefinite"/>
                        </text>
                    </svg>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ POWERED BY STRIP ═══════════════ -->
    <section class="partners">
        <div class="container">
            <span class="partners-label"><?php echo e(__('wp_optimized_with')); ?></span>
            <div class="partners-logos">
                <span class="partner-logo"><i class="fab fa-wordpress"></i> <?php echo e(__('wp_partner_wordpress')); ?></span>
                <span class="partner-logo"><i class="fas fa-bolt"></i> <?php echo e(__('wp_partner_litespeed')); ?></span>
                <span class="partner-logo"><i class="fas fa-shield-alt"></i> <?php echo e(__('wp_partner_imunify')); ?></span>
                <span class="partner-logo"><i class="fas fa-hdd"></i> <?php echo e(__('wp_partner_nvme')); ?></span>
                <span class="partner-logo"><i class="fas fa-cloud-download-alt"></i> <?php echo e(__('wp_partner_jetbackup')); ?></span>
                <span class="partner-logo"><i class="fas fa-server"></i> <?php echo e(__('wp_partner_cpanel')); ?></span>
                <span class="partner-logo"><i class="fas fa-th"></i> <?php echo e(__('wp_partner_softaculous')); ?></span>
            </div>
        </div>
    </section>

    <!-- ═══════════════ PRICING PLANS ═══════════════ -->
    <section class="plans reveal" id="plans">
        <div class="container">
            <div class="section-header">
                <div class="section-tag"><?php echo e(__('wp_plans_tag')); ?></div>
                <h2><?php echo e(__('wp_plans_title')); ?></h2>
                <p><?php echo e(__('wp_plans_desc')); ?></p>
            </div>

            <div class="plans-panel active" data-tab="wp-hosting">
                <div class="swiper plans-swiper">
                    <div class="swiper-wrapper">
                        <!-- WP Starter -->
                        <div class="swiper-slide"><div class="plan-card">
                            <div class="plan-head"><div class="plan-name"><?php echo e(__('wp_plan_starter')); ?></div><span class="plan-save"><?php echo e(__('wp_plan_save_starter')); ?></span></div>
                            <div class="plan-target"><?php echo e(__('wp_plan_target_personal')); ?></div>
                            <div class="plan-price">
                                <span class="old-price">€2.99</span>
                                <span class="current-price"><span class="currency">€</span><span class="amount">1.67</span><span class="period"><?php echo e(__('wp_plan_period')); ?></span></span>
                            </div>
                            <div class="plan-renewal"><i class="fas fa-check"></i> <?php echo e(__('wp_plan_renewal')); ?></div>
                            <button class="plan-cta" data-href="<?php echo e(CP_URL); ?>/cart.php?a=add&pid=2"><?php echo e(__('wp_plan_choose')); ?></button>
                            <div class="plan-resources">
                                <div class="plan-res"><i class="fas fa-microchip"></i><span class="res-val">2</span><span class="res-label"><?php echo e(__('wp_res_cpu')); ?></span></div>
                                <div class="plan-res"><i class="fas fa-memory"></i><span class="res-val">2 GB</span><span class="res-label"><?php echo e(__('wp_res_ram')); ?></span></div>
                                <div class="plan-res"><i class="fas fa-hdd"></i><span class="res-val">10 GB</span><span class="res-label"><?php echo e(__('wp_res_nvme')); ?></span></div>
                                <div class="plan-res"><i class="fas fa-tachometer-alt"></i><span class="res-val">100 MB/s</span><span class="res-label"><?php echo e(__('wp_res_io')); ?></span></div>
                            </div>
                            <div class="plan-divider"><span><?php echo e(__('wp_plan_divider')); ?></span></div>
                            <ul class="plan-features">
                                <li><i class="fab fa-wordpress"></i> <?php echo e(__('wp_planfeat_install')); ?></li>
                                <li><i class="fas fa-bolt"></i> <?php echo e(__('wp_planfeat_litespeed')); ?></li>
                                <li><i class="fas fa-globe"></i> <?php echo __('wp_planfeat_domain_ssl'); ?></li>
                                <li><i class="fas fa-shield-alt"></i> <?php echo e(__('wp_planfeat_malware')); ?></li>
                                <li><i class="fas fa-cloud-download-alt"></i> <?php echo e(__('wp_planfeat_backups')); ?></li>
                                <li><i class="fas fa-sync-alt"></i> <?php echo e(__('wp_planfeat_updates')); ?></li>
                                <li><i class="fas fa-map-marker-alt"></i> <?php echo e(__('wp_planfeat_locations')); ?></li>
                            </ul>
                        </div></div>

                        <!-- WP Premium (Popular) -->
                        <div class="swiper-slide"><div class="plan-card popular">
                            <div class="plan-badge"><?php echo e(__('wp_plan_most_popular')); ?></div>
                            <div class="plan-head"><div class="plan-name"><?php echo e(__('wp_plan_premium')); ?></div><span class="plan-save"><?php echo e(__('wp_plan_save_premium')); ?></span></div>
                            <div class="plan-target"><?php echo e(__('wp_plan_target_growing')); ?></div>
                            <div class="plan-price">
                                <span class="old-price">€5.99</span>
                                <span class="current-price"><span class="currency">€</span><span class="amount">3.39</span><span class="period"><?php echo e(__('wp_plan_period')); ?></span></span>
                            </div>
                            <div class="plan-renewal"><i class="fas fa-check"></i> <?php echo e(__('wp_plan_renewal')); ?></div>
                            <button class="plan-cta" data-href="<?php echo e(CP_URL); ?>/cart.php?a=add&pid=4"><?php echo e(__('wp_plan_choose')); ?></button>
                            <div class="plan-resources">
                                <div class="plan-res"><i class="fas fa-microchip"></i><span class="res-val">3</span><span class="res-label"><?php echo e(__('wp_res_cpu')); ?></span></div>
                                <div class="plan-res"><i class="fas fa-memory"></i><span class="res-val">3 GB</span><span class="res-label"><?php echo e(__('wp_res_ram')); ?></span></div>
                                <div class="plan-res"><i class="fas fa-hdd"></i><span class="res-val">25 GB</span><span class="res-label"><?php echo e(__('wp_res_nvme')); ?></span></div>
                                <div class="plan-res"><i class="fas fa-tachometer-alt"></i><span class="res-val">300 MB/s</span><span class="res-label"><?php echo e(__('wp_res_io')); ?></span></div>
                            </div>
                            <div class="plan-divider"><span><?php echo e(__('wp_plan_divider')); ?></span></div>
                            <ul class="plan-features">
                                <li><i class="fab fa-wordpress"></i> <?php echo e(__('wp_planfeat_install')); ?></li>
                                <li><i class="fas fa-bolt"></i> <?php echo e(__('wp_planfeat_litespeed')); ?></li>
                                <li><i class="fas fa-globe"></i> <?php echo e(__('wp_planfeat_domain_ext')); ?></li>
                                <li><i class="fas fa-shield-alt"></i> <?php echo e(__('wp_planfeat_malware')); ?></li>
                                <li><i class="fas fa-cloud-download-alt"></i> <?php echo e(__('wp_planfeat_backups')); ?></li>
                                <li><i class="fas fa-sync-alt"></i> <?php echo e(__('wp_planfeat_updates')); ?></li>
                                <li><i class="fas fa-map-marker-alt"></i> <?php echo e(__('wp_planfeat_locations')); ?></li>
                            </ul>
                        </div></div>

                        <!-- WP Business -->
                        <div class="swiper-slide"><div class="plan-card">
                            <div class="plan-head"><div class="plan-name"><?php echo e(__('wp_plan_business')); ?></div><span class="plan-save"><?php echo e(__('wp_plan_save_business')); ?></span></div>
                            <div class="plan-target"><?php echo e(__('wp_plan_target_business')); ?></div>
                            <div class="plan-price">
                                <span class="old-price">€12.99</span>
                                <span class="current-price"><span class="currency">€</span><span class="amount">7.42</span><span class="period"><?php echo e(__('wp_plan_period')); ?></span></span>
                            </div>
                            <div class="plan-renewal"><i class="fas fa-check"></i> <?php echo e(__('wp_plan_renewal')); ?></div>
                            <button class="plan-cta" data-href="<?php echo e(CP_URL); ?>/cart.php?a=add&pid=6"><?php echo e(__('wp_plan_choose')); ?></button>
                            <div class="plan-resources">
                                <div class="plan-res"><i class="fas fa-microchip"></i><span class="res-val">4</span><span class="res-label"><?php echo e(__('wp_res_cpu')); ?></span></div>
                                <div class="plan-res"><i class="fas fa-memory"></i><span class="res-val">4 GB</span><span class="res-label"><?php echo e(__('wp_res_ram')); ?></span></div>
                                <div class="plan-res"><i class="fas fa-hdd"></i><span class="res-val">75 GB</span><span class="res-label"><?php echo e(__('wp_res_nvme')); ?></span></div>
                                <div class="plan-res"><i class="fas fa-tachometer-alt"></i><span class="res-val">900 MB/s</span><span class="res-label"><?php echo e(__('wp_res_io')); ?></span></div>
                            </div>
                            <div class="plan-divider"><span><?php echo e(__('wp_plan_divider')); ?></span></div>
                            <ul class="plan-features">
                                <li><i class="fab fa-wordpress"></i> <?php echo e(__('wp_planfeat_install')); ?></li>
                                <li><i class="fas fa-bolt"></i> <?php echo e(__('wp_planfeat_litespeed')); ?></li>
                                <li><i class="fas fa-globe"></i> <?php echo e(__('wp_planfeat_domain_ext')); ?></li>
                                <li><i class="fas fa-shield-alt"></i> <?php echo e(__('wp_planfeat_malware')); ?></li>
                                <li><i class="fas fa-cloud-download-alt"></i> <?php echo e(__('wp_planfeat_backups')); ?></li>
                                <li><i class="fas fa-sync-alt"></i> <?php echo e(__('wp_planfeat_updates')); ?></li>
                                <li><i class="fas fa-map-marker-alt"></i> <?php echo e(__('wp_planfeat_locations')); ?></li>
                            </ul>
                        </div></div>

                        <!-- WP Enterprise -->
                        <div class="swiper-slide"><div class="plan-card">
                            <div class="plan-head"><div class="plan-name"><?php echo e(__('wp_plan_enterprise')); ?></div><span class="plan-save"><?php echo e(__('wp_plan_save_enterprise')); ?></span></div>
                            <div class="plan-target"><?php echo e(__('wp_plan_target_traffic')); ?></div>
                            <div class="plan-price">
                                <span class="old-price">€21.99</span>
                                <span class="current-price"><span class="currency">€</span><span class="amount">12.72</span><span class="period"><?php echo e(__('wp_plan_period')); ?></span></span>
                            </div>
                            <div class="plan-renewal"><i class="fas fa-check"></i> <?php echo e(__('wp_plan_renewal')); ?></div>
                            <button class="plan-cta" data-href="<?php echo e(CP_URL); ?>/cart.php?a=add&pid=7"><?php echo e(__('wp_plan_choose')); ?></button>
                            <div class="plan-resources">
                                <div class="plan-res"><i class="fas fa-microchip"></i><span class="res-val">5</span><span class="res-label"><?php echo e(__('wp_res_cpu')); ?></span></div>
                                <div class="plan-res"><i class="fas fa-memory"></i><span class="res-val">5 GB</span><span class="res-label"><?php echo e(__('wp_res_ram')); ?></span></div>
                                <div class="plan-res"><i class="fas fa-hdd"></i><span class="res-val">125 GB</span><span class="res-label"><?php echo e(__('wp_res_nvme')); ?></span></div>
                                <div class="plan-res"><i class="fas fa-tachometer-alt"></i><span class="res-val">1.5 GB/s</span><span class="res-label"><?php echo e(__('wp_res_io')); ?></span></div>
                            </div>
                            <div class="plan-divider"><span><?php echo e(__('wp_plan_divider')); ?></span></div>
                            <ul class="plan-features">
                                <li><i class="fab fa-wordpress"></i> <?php echo e(__('wp_planfeat_install')); ?></li>
                                <li><i class="fas fa-bolt"></i> <?php echo e(__('wp_planfeat_litespeed')); ?></li>
                                <li><i class="fas fa-globe"></i> <?php echo e(__('wp_planfeat_domain_ext')); ?></li>
                                <li><i class="fas fa-shield-alt"></i> <?php echo e(__('wp_planfeat_malware')); ?></li>
                                <li><i class="fas fa-cloud-download-alt"></i> <?php echo e(__('wp_planfeat_backups')); ?></li>
                                <li><i class="fas fa-sync-alt"></i> <?php echo e(__('wp_planfeat_updates')); ?></li>
                                <li><i class="fas fa-map-marker-alt"></i> <?php echo e(__('wp_planfeat_locations')); ?></li>
                            </ul>
                        </div></div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ WORDPRESS OPTIMIZED FEATURES ═══════════════ -->
    <section class="wp-features reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag"><?php echo e(__('wp_features_tag')); ?></div>
                <h2><?php echo e(__('wp_features_title')); ?></h2>
                <p><?php echo e(__('wp_features_desc')); ?></p>
            </div>

            <div class="bento-grid">
                <div class="bento-card bento-sm">
                    <div class="bento-card-icon"><i class="fas fa-bolt"></i></div>
                    <h4><?php echo e(__('wp_feat_litespeed_title')); ?></h4>
                    <p><?php echo e(__('wp_feat_litespeed_desc')); ?></p>
                </div>

                <div class="bento-card bento-sm">
                    <div class="bento-card-icon icon-green"><i class="fas fa-sync-alt"></i></div>
                    <h4><?php echo e(__('wp_feat_updates_title')); ?></h4>
                    <p><?php echo e(__('wp_feat_updates_desc')); ?></p>
                </div>

                <div class="bento-card bento-sm">
                    <div class="bento-card-icon icon-purple"><i class="fas fa-shield-alt"></i></div>
                    <h4><?php echo e(__('wp_feat_malware_title')); ?></h4>
                    <p><?php echo e(__('wp_feat_malware_desc')); ?></p>
                </div>

                <div class="bento-card bento-sm">
                    <div class="bento-card-icon icon-amber"><i class="fas fa-cloud-download-alt"></i></div>
                    <h4><?php echo e(__('wp_feat_backup_title')); ?></h4>
                    <p><?php echo e(__('wp_feat_backup_desc')); ?></p>
                </div>

                <div class="bento-card bento-sm">
                    <div class="bento-card-icon"><i class="fas fa-hdd"></i></div>
                    <h4><?php echo e(__('wp_feat_nvme_title')); ?></h4>
                    <p><?php echo e(__('wp_feat_nvme_desc')); ?></p>
                </div>

                <div class="bento-card bento-sm">
                    <div class="bento-card-icon icon-green"><i class="fas fa-th"></i></div>
                    <h4><?php echo e(__('wp_feat_install_title')); ?></h4>
                    <p><?php echo e(__('wp_feat_install_desc')); ?></p>
                </div>

                <div class="bento-card bento-sm">
                    <div class="bento-card-icon icon-blue"><i class="fas fa-globe"></i></div>
                    <h4><?php echo e(__('wp_feat_cdn_title')); ?></h4>
                    <p><?php echo e(__('wp_feat_cdn_desc')); ?></p>
                </div>

                <div class="bento-card bento-sm">
                    <div class="bento-card-icon icon-rose"><i class="fas fa-database"></i></div>
                    <h4><?php echo e(__('wp_feat_mysql_title')); ?></h4>
                    <p><?php echo e(__('wp_feat_mysql_desc')); ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ WORDPRESS DASHBOARD PREVIEW ═══════════════ -->
    <section class="wp-preview reveal">
        <div class="container">
            <div class="global-layout">
                <div class="global-content">
                    <div class="section-tag"><?php echo e(__('wp_dashboard_tag')); ?></div>
                    <h2 class="global-title"><?php echo e(__('wp_dashboard_title')); ?></h2>
                    <p class="global-desc"><?php echo e(__('wp_dashboard_desc')); ?></p>
                    <div class="wp-preview-features">
                        <div class="wp-preview-item"><i class="fas fa-check-circle"></i> <?php echo e(__('wp_dashboard_feat1')); ?></div>
                        <div class="wp-preview-item"><i class="fas fa-check-circle"></i> <?php echo e(__('wp_dashboard_feat2')); ?></div>
                        <div class="wp-preview-item"><i class="fas fa-check-circle"></i> <?php echo e(__('wp_dashboard_feat3')); ?></div>
                        <div class="wp-preview-item"><i class="fas fa-check-circle"></i> <?php echo e(__('wp_dashboard_feat4')); ?></div>
                        <div class="wp-preview-item"><i class="fas fa-check-circle"></i> <?php echo e(__('wp_dashboard_feat5')); ?></div>
                        <div class="wp-preview-item"><i class="fas fa-check-circle"></i> <?php echo e(__('wp_dashboard_feat6')); ?></div>
                    </div>
                </div>
                <div class="global-visual">
                    <svg viewBox="0 0 400 300" fill="none" xmlns="http://www.w3.org/2000/svg" class="wp-dash-illustration">
                        <rect x="10" y="10" width="380" height="280" rx="14" fill="var(--bg-card)" stroke="var(--border-primary)" stroke-width="1.5"/>
                        <rect x="10" y="10" width="380" height="32" rx="14" fill="var(--bg-tertiary)"/>
                        <rect x="10" y="30" width="380" height="12" fill="var(--bg-tertiary)"/>
                        <circle cx="30" cy="26" r="4" fill="var(--brand-error)" opacity="0.5"/>
                        <circle cx="42" cy="26" r="4" fill="var(--brand-warning)" opacity="0.5"/>
                        <circle cx="54" cy="26" r="4" fill="var(--brand-secondary)" opacity="0.5"/>
                        <!-- Grid of dashboard tiles -->
                        <rect x="24" y="56" width="110" height="60" rx="8" fill="var(--bg-tertiary)" stroke="var(--border-primary)" stroke-width="0.8"/>
                        <text x="79" y="82" text-anchor="middle" fill="var(--brand-primary)" font-size="14" opacity="0.6">📁</text>
                        <text x="79" y="102" text-anchor="middle" fill="var(--text-tertiary)" font-size="7.5" font-family="var(--font-mono)" opacity="0.5">File Manager</text>
                        <rect x="146" y="56" width="110" height="60" rx="8" fill="var(--bg-tertiary)" stroke="var(--border-primary)" stroke-width="0.8"/>
                        <text x="201" y="82" text-anchor="middle" fill="var(--brand-secondary)" font-size="14" opacity="0.6">✉</text>
                        <text x="201" y="102" text-anchor="middle" fill="var(--text-tertiary)" font-size="7.5" font-family="var(--font-mono)" opacity="0.5">Email Accounts</text>
                        <rect x="268" y="56" width="110" height="60" rx="8" fill="var(--bg-tertiary)" stroke="var(--border-primary)" stroke-width="0.8"/>
                        <text x="323" y="82" text-anchor="middle" fill="var(--brand-accent)" font-size="14" opacity="0.6">⛃</text>
                        <text x="323" y="102" text-anchor="middle" fill="var(--text-tertiary)" font-size="7.5" font-family="var(--font-mono)" opacity="0.5">Databases</text>
                        <rect x="24" y="128" width="110" height="60" rx="8" fill="var(--bg-tertiary)" stroke="var(--border-primary)" stroke-width="0.8"/>
                        <text x="79" y="154" text-anchor="middle" fill="var(--brand-warning)" font-size="14" opacity="0.6">🔒</text>
                        <text x="79" y="174" text-anchor="middle" fill="var(--text-tertiary)" font-size="7.5" font-family="var(--font-mono)" opacity="0.5">SSL / TLS</text>
                        <rect x="146" y="128" width="110" height="60" rx="8" fill="var(--bg-tertiary)" stroke="var(--border-primary)" stroke-width="0.8"/>
                        <text x="201" y="154" text-anchor="middle" fill="var(--brand-primary)" font-size="14" opacity="0.6">💾</text>
                        <text x="201" y="174" text-anchor="middle" fill="var(--text-tertiary)" font-size="7.5" font-family="var(--font-mono)" opacity="0.5">Backups</text>
                        <rect x="268" y="128" width="110" height="60" rx="8" fill="var(--bg-tertiary)" stroke="var(--border-primary)" stroke-width="0.8"/>
                        <text x="323" y="154" text-anchor="middle" fill="var(--brand-secondary)" font-size="14" opacity="0.6">🌐</text>
                        <text x="323" y="174" text-anchor="middle" fill="var(--text-tertiary)" font-size="7.5" font-family="var(--font-mono)" opacity="0.5">Domains</text>
                        <!-- Usage bars -->
                        <text x="24" y="210" fill="var(--text-tertiary)" font-size="7" font-family="var(--font-mono)" opacity="0.5">Disk Usage</text>
                        <rect x="24" y="216" width="354" height="6" rx="3" fill="var(--bg-tertiary)"/>
                        <rect x="24" y="216" width="150" height="6" rx="3" fill="var(--brand-primary)" opacity="0.5"/>
                        <text x="24" y="240" fill="var(--text-tertiary)" font-size="7" font-family="var(--font-mono)" opacity="0.5">Bandwidth</text>
                        <rect x="24" y="246" width="354" height="6" rx="3" fill="var(--bg-tertiary)"/>
                        <rect x="24" y="246" width="80" height="6" rx="3" fill="var(--brand-secondary)" opacity="0.5"/>
                    </svg>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ GLOBAL LOCATIONS ═══════════════ -->
<?php
$dc_heading = __('wp_dc_heading');
include __DIR__ . '/includes/section-dc-showcase.php';
?>

    <!-- ═══════════════ ClouDNS ═══════════════ -->
<?php include __DIR__ . '/includes/section-cloudns.php'; ?>

    <!-- ═══════════════ MailChannels ═══════════════ -->
<?php include __DIR__ . '/includes/section-mailchannels.php'; ?>

    <!-- ═══════════════ COMPETITORS ═══════════════ -->
<?php $compare_type = 'hosting'; include __DIR__ . '/includes/section-competitors.php'; ?>

    <!-- ═══════════════ FAQ ═══════════════ -->
    <section class="faq-section reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag"><?php echo e(__('wp_faq_tag')); ?></div>
                <h2><?php echo e(__('wp_faq_title')); ?></h2>
                <p><?php echo e(__('wp_faq_desc')); ?></p>
            </div>

            <div class="faq-layout">
                <div class="faq-tabs">
                    <button class="faq-tab active" data-faq-target="faq-wp-general"><i class="fas fa-server"></i> <?php echo e(__('wp_faq_tab_general')); ?></button>
                    <button class="faq-tab" data-faq-target="faq-wp-technical"><i class="fas fa-cogs"></i> <?php echo e(__('wp_faq_tab_technical')); ?></button>
                    <button class="faq-tab" data-faq-target="faq-wp-billing"><i class="fas fa-credit-card"></i> <?php echo e(__('wp_faq_tab_billing')); ?></button>
                </div>

                <div class="faq-panels">
                    <div class="faq-panel active" id="faq-wp-general">
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('wp_faq_gen_q1')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('wp_faq_gen_a1')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('wp_faq_gen_q2')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('wp_faq_gen_a2')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('wp_faq_gen_q3')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('wp_faq_gen_a3')); ?></p></div></div>
                    </div>

                    <div class="faq-panel" id="faq-wp-technical">
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('wp_faq_tech_q1')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('wp_faq_tech_a1')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('wp_faq_tech_q2')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('wp_faq_tech_a2')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('wp_faq_tech_q3')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('wp_faq_tech_a3')); ?></p></div></div>
                    </div>

                    <div class="faq-panel" id="faq-wp-billing">
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('wp_faq_bill_q1')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('wp_faq_bill_a1')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('wp_faq_bill_q2')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('wp_faq_bill_a2')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('wp_faq_bill_q3')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('wp_faq_bill_a3')); ?></p></div></div>
                    </div>
                </div>
            </div>

            <div class="faq-actions">
                <a href="<?php echo e(SITE_URL); ?>/contact-us/" class="btn-primary"><i class="fas fa-headset"></i> <?php echo e(__('wp_faq_cta_ticket')); ?></a>
                <a href="<?php echo e(SITE_URL); ?>/faq" class="btn-secondary"><?php echo e(__('wp_faq_cta_browse')); ?> <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </section>

    <!-- ═══════════════ BOTTOM CTA ═══════════════ -->
    <section class="promo-cta reveal">
        <div class="container">
            <div class="promo-cta-inner">
                <div class="promo-cta-glow"></div>
                <div class="promo-cta-icon"><i class="fab fa-wordpress"></i></div>
                <h2><?php echo e(__('wp_cta_title')); ?></h2>
                <p><?php echo e(__('wp_cta_desc')); ?></p>
                <a href="#plans" class="btn-primary"><?php echo e(__('wp_cta_view_plans')); ?> <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
