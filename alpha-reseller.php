<?php
/**
 * YottaSrc — Alpha Reseller Hosting
 * ====================================
 * Alpha Reseller — the highest tier. Create Master, Reseller, and cPanel accounts.
 */
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/topbar.php';
?>

    <!-- ═══════════════ HERO ═══════════════ -->
    <section class="page-hero rs-hero reveal">
        <div class="container">
            <div class="page-hero-split">
                <div class="page-hero-content">
                    <div class="page-breadcrumb">
                        <a href="<?php echo e(SITE_URL); ?>/"><?php echo e(__('breadcrumb_home')); ?></a>
                        <i class="fas fa-chevron-right"></i>
                        <a href="<?php echo e(SITE_URL); ?>/cpanel-reseller/"><?php echo e(__('reseller_breadcrumb')); ?></a>
                        <i class="fas fa-chevron-right"></i>
                        <span><?php echo e(__('reseller_alpha_breadcrumb')); ?></span>
                    </div>
                    <h1><?php echo __('reseller_alpha_title'); ?></h1>
                    <p class="page-hero-desc">
                        <?php echo e(__('reseller_alpha_desc')); ?>
                    </p>
                    <div class="page-hero-ctas">
                        <a href="#plans" class="btn-primary"><?php echo e(__('common_view_plans')); ?> <i class="fas fa-arrow-down"></i></a>
                        <a href="<?php echo e(SITE_URL); ?>/contact-us/" class="btn-secondary"><i class="fas fa-headset"></i> <?php echo e(__('common_talk_to_sales')); ?></a>
                    </div>
                    <div class="page-hero-badges">
                        <div class="hero-badge-item"><i class="fas fa-check"></i> <?php echo e(__('ralpha_badge_hierarchy')); ?></div>
                        <div class="hero-badge-item"><i class="fas fa-check"></i> <?php echo e(__('ralpha_badge_tiers')); ?></div>
                        <div class="hero-badge-item"><i class="fas fa-check"></i> <?php echo e(__('ralpha_badge_wl')); ?></div>
                        <div class="hero-badge-item"><i class="fas fa-check"></i> <?php echo e(__('ralpha_badge_locations')); ?></div>
                    </div>
                </div>
                <div class="page-hero-visual">
                    <svg viewBox="0 0 440 400" fill="none" xmlns="http://www.w3.org/2000/svg" class="hero-illustration" aria-label="Alpha Reseller three-tier hierarchy illustration">
                        <!-- Top tier: Alpha Reseller -->
                        <rect x="140" y="10" width="160" height="56" rx="14" fill="var(--bg-card)" stroke="var(--brand-accent)" stroke-width="2.5"/>
                        <circle cx="170" cy="38" r="14" fill="var(--brand-accent)" opacity="0.15"/>
                        <text x="170" y="42" text-anchor="middle" fill="var(--brand-accent)" font-size="12" font-family="var(--font-body)" font-weight="800" opacity="0.7"><tspan>💎</tspan></text>
                        <text x="230" y="33" text-anchor="middle" fill="var(--text-secondary)" font-size="10" font-family="var(--font-display)" font-weight="700" opacity="0.8">Alpha Reseller</text>
                        <text x="230" y="49" text-anchor="middle" fill="var(--text-tertiary)" font-size="7.5" font-family="var(--font-mono)" opacity="0.5">YOU (Supreme Control)</text>

                        <!-- Lines Alpha -> Master -->
                        <line x1="190" y1="66" x2="110" y2="100" stroke="var(--brand-accent)" stroke-width="1.5" stroke-dasharray="4 3" opacity="0.4"/>
                        <line x1="250" y1="66" x2="330" y2="100" stroke="var(--brand-accent)" stroke-width="1.5" stroke-dasharray="4 3" opacity="0.4"/>

                        <!-- Second tier: Master Resellers -->
                        <rect x="30" y="100" width="160" height="46" rx="10" fill="var(--bg-card)" stroke="var(--brand-primary)" stroke-width="1.5"/>
                        <circle cx="56" cy="123" r="10" fill="var(--brand-primary)" opacity="0.15"/>
                        <text x="56" y="127" text-anchor="middle" fill="var(--brand-primary)" font-size="9" font-family="var(--font-body)" font-weight="700" opacity="0.7">M1</text>
                        <text x="130" y="118" text-anchor="middle" fill="var(--text-secondary)" font-size="9" font-family="var(--font-body)" font-weight="600" opacity="0.7">Master-A</text>
                        <text x="130" y="133" text-anchor="middle" fill="var(--text-tertiary)" font-size="7" font-family="var(--font-mono)" opacity="0.5">2 Resellers · 6 cPanels</text>

                        <rect x="250" y="100" width="160" height="46" rx="10" fill="var(--bg-card)" stroke="var(--brand-primary)" stroke-width="1.5"/>
                        <circle cx="276" cy="123" r="10" fill="var(--brand-primary)" opacity="0.15"/>
                        <text x="276" y="127" text-anchor="middle" fill="var(--brand-primary)" font-size="9" font-family="var(--font-body)" font-weight="700" opacity="0.7">M2</text>
                        <text x="350" y="118" text-anchor="middle" fill="var(--text-secondary)" font-size="9" font-family="var(--font-body)" font-weight="600" opacity="0.7">Master-B</text>
                        <text x="350" y="133" text-anchor="middle" fill="var(--text-tertiary)" font-size="7" font-family="var(--font-mono)" opacity="0.5">3 Resellers · 12 cPanels</text>

                        <!-- Lines Master -> Resellers -->
                        <line x1="80" y1="146" x2="44" y2="180" stroke="var(--brand-primary)" stroke-width="1" stroke-dasharray="3 3" opacity="0.3"/>
                        <line x1="140" y1="146" x2="152" y2="180" stroke="var(--brand-primary)" stroke-width="1" stroke-dasharray="3 3" opacity="0.3"/>

                        <line x1="300" y1="146" x2="256" y2="180" stroke="var(--brand-primary)" stroke-width="1" stroke-dasharray="3 3" opacity="0.3"/>
                        <line x1="350" y1="146" x2="338" y2="180" stroke="var(--brand-primary)" stroke-width="1" stroke-dasharray="3 3" opacity="0.3"/>
                        <line x1="380" y1="146" x2="410" y2="180" stroke="var(--brand-primary)" stroke-width="1" stroke-dasharray="3 3" opacity="0.3"/>

                        <!-- Third tier: Resellers -->
                        <rect x="10" y="180" width="68" height="38" rx="8" fill="var(--bg-card)" stroke="var(--brand-secondary)" stroke-width="1"/>
                        <text x="44" y="196" text-anchor="middle" fill="var(--brand-secondary)" font-size="8" font-family="var(--font-body)" font-weight="600" opacity="0.7">Reseller-1</text>
                        <text x="44" y="210" text-anchor="middle" fill="var(--text-tertiary)" font-size="6.5" font-family="var(--font-mono)" opacity="0.4">3 cPanels</text>

                        <rect x="118" y="180" width="68" height="38" rx="8" fill="var(--bg-card)" stroke="var(--brand-secondary)" stroke-width="1"/>
                        <text x="152" y="196" text-anchor="middle" fill="var(--brand-secondary)" font-size="8" font-family="var(--font-body)" font-weight="600" opacity="0.7">Reseller-2</text>
                        <text x="152" y="210" text-anchor="middle" fill="var(--text-tertiary)" font-size="6.5" font-family="var(--font-mono)" opacity="0.4">3 cPanels</text>

                        <rect x="222" y="180" width="68" height="38" rx="8" fill="var(--bg-card)" stroke="var(--brand-secondary)" stroke-width="1"/>
                        <text x="256" y="196" text-anchor="middle" fill="var(--brand-secondary)" font-size="8" font-family="var(--font-body)" font-weight="600" opacity="0.7">Reseller-3</text>
                        <text x="256" y="210" text-anchor="middle" fill="var(--text-tertiary)" font-size="6.5" font-family="var(--font-mono)" opacity="0.4">4 cPanels</text>

                        <rect x="304" y="180" width="68" height="38" rx="8" fill="var(--bg-card)" stroke="var(--brand-secondary)" stroke-width="1"/>
                        <text x="338" y="196" text-anchor="middle" fill="var(--brand-secondary)" font-size="8" font-family="var(--font-body)" font-weight="600" opacity="0.7">Reseller-4</text>
                        <text x="338" y="210" text-anchor="middle" fill="var(--text-tertiary)" font-size="6.5" font-family="var(--font-mono)" opacity="0.4">4 cPanels</text>

                        <rect x="386" y="180" width="48" height="38" rx="8" fill="var(--bg-card)" stroke="var(--brand-secondary)" stroke-width="1"/>
                        <text x="410" y="196" text-anchor="middle" fill="var(--brand-secondary)" font-size="8" font-family="var(--font-body)" font-weight="600" opacity="0.7">R-5</text>
                        <text x="410" y="210" text-anchor="middle" fill="var(--text-tertiary)" font-size="6.5" font-family="var(--font-mono)" opacity="0.4">4 cPanels</text>

                        <!-- Fourth tier: cPanel dots row -->
                        <line x1="44" y1="218" x2="44" y2="240" stroke="var(--brand-secondary)" stroke-width="0.6" stroke-dasharray="2 2" opacity="0.25"/>
                        <line x1="152" y1="218" x2="152" y2="240" stroke="var(--brand-secondary)" stroke-width="0.6" stroke-dasharray="2 2" opacity="0.25"/>
                        <line x1="256" y1="218" x2="256" y2="240" stroke="var(--brand-secondary)" stroke-width="0.6" stroke-dasharray="2 2" opacity="0.25"/>
                        <line x1="338" y1="218" x2="338" y2="240" stroke="var(--brand-secondary)" stroke-width="0.6" stroke-dasharray="2 2" opacity="0.25"/>
                        <line x1="410" y1="218" x2="410" y2="240" stroke="var(--brand-secondary)" stroke-width="0.6" stroke-dasharray="2 2" opacity="0.25"/>

                        <!-- cPanel account dots -->
                        <circle cx="30" cy="248" r="6" fill="var(--bg-tertiary)"/><text x="30" y="251" text-anchor="middle" fill="var(--text-tertiary)" font-size="5" font-family="var(--font-mono)" opacity="0.4">cP</text>
                        <circle cx="44" cy="248" r="6" fill="var(--bg-tertiary)"/><text x="44" y="251" text-anchor="middle" fill="var(--text-tertiary)" font-size="5" font-family="var(--font-mono)" opacity="0.4">cP</text>
                        <circle cx="58" cy="248" r="6" fill="var(--bg-tertiary)"/><text x="58" y="251" text-anchor="middle" fill="var(--text-tertiary)" font-size="5" font-family="var(--font-mono)" opacity="0.4">cP</text>

                        <circle cx="138" cy="248" r="6" fill="var(--bg-tertiary)"/><text x="138" y="251" text-anchor="middle" fill="var(--text-tertiary)" font-size="5" font-family="var(--font-mono)" opacity="0.4">cP</text>
                        <circle cx="152" cy="248" r="6" fill="var(--bg-tertiary)"/><text x="152" y="251" text-anchor="middle" fill="var(--text-tertiary)" font-size="5" font-family="var(--font-mono)" opacity="0.4">cP</text>
                        <circle cx="166" cy="248" r="6" fill="var(--bg-tertiary)"/><text x="166" y="251" text-anchor="middle" fill="var(--text-tertiary)" font-size="5" font-family="var(--font-mono)" opacity="0.4">cP</text>

                        <circle cx="242" cy="248" r="6" fill="var(--bg-tertiary)"/><text x="242" y="251" text-anchor="middle" fill="var(--text-tertiary)" font-size="5" font-family="var(--font-mono)" opacity="0.4">cP</text>
                        <circle cx="256" cy="248" r="6" fill="var(--bg-tertiary)"/><text x="256" y="251" text-anchor="middle" fill="var(--text-tertiary)" font-size="5" font-family="var(--font-mono)" opacity="0.4">cP</text>
                        <circle cx="270" cy="248" r="6" fill="var(--bg-tertiary)"/><text x="270" y="251" text-anchor="middle" fill="var(--text-tertiary)" font-size="5" font-family="var(--font-mono)" opacity="0.4">cP</text>
                        <circle cx="284" cy="248" r="6" fill="var(--bg-tertiary)"/><text x="284" y="251" text-anchor="middle" fill="var(--text-tertiary)" font-size="5" font-family="var(--font-mono)" opacity="0.4">cP</text>

                        <circle cx="324" cy="248" r="6" fill="var(--bg-tertiary)"/><text x="324" y="251" text-anchor="middle" fill="var(--text-tertiary)" font-size="5" font-family="var(--font-mono)" opacity="0.4">cP</text>
                        <circle cx="338" cy="248" r="6" fill="var(--bg-tertiary)"/><text x="338" y="251" text-anchor="middle" fill="var(--text-tertiary)" font-size="5" font-family="var(--font-mono)" opacity="0.4">cP</text>
                        <circle cx="352" cy="248" r="6" fill="var(--bg-tertiary)"/><text x="352" y="251" text-anchor="middle" fill="var(--text-tertiary)" font-size="5" font-family="var(--font-mono)" opacity="0.4">cP</text>
                        <circle cx="366" cy="248" r="6" fill="var(--bg-tertiary)"/><text x="366" y="251" text-anchor="middle" fill="var(--text-tertiary)" font-size="5" font-family="var(--font-mono)" opacity="0.4">cP</text>

                        <circle cx="396" cy="248" r="6" fill="var(--bg-tertiary)"/><text x="396" y="251" text-anchor="middle" fill="var(--text-tertiary)" font-size="5" font-family="var(--font-mono)" opacity="0.4">cP</text>
                        <circle cx="410" cy="248" r="6" fill="var(--bg-tertiary)"/><text x="410" y="251" text-anchor="middle" fill="var(--text-tertiary)" font-size="5" font-family="var(--font-mono)" opacity="0.4">cP</text>
                        <circle cx="424" cy="248" r="6" fill="var(--bg-tertiary)"/><text x="424" y="251" text-anchor="middle" fill="var(--text-tertiary)" font-size="5" font-family="var(--font-mono)" opacity="0.4">cP</text>
                        <circle cx="438" cy="248" r="6" fill="var(--bg-tertiary)"/><text x="438" y="251" text-anchor="middle" fill="var(--text-tertiary)" font-size="5" font-family="var(--font-mono)" opacity="0.4">cP</text>

                        <!-- Summary bar -->
                        <rect x="40" y="278" width="360" height="56" rx="12" fill="var(--bg-card)" stroke="var(--border-primary)" stroke-width="1"/>
                        <text x="105" y="302" text-anchor="middle" fill="var(--brand-accent)" font-size="18" font-family="var(--font-display)" font-weight="800" opacity="0.8">2</text>
                        <text x="105" y="322" text-anchor="middle" fill="var(--text-tertiary)" font-size="7" font-family="var(--font-mono)" opacity="0.5">Masters</text>
                        <line x1="155" y1="286" x2="155" y2="328" stroke="var(--border-primary)" stroke-width="0.6"/>
                        <text x="195" y="302" text-anchor="middle" fill="var(--brand-primary)" font-size="18" font-family="var(--font-display)" font-weight="800" opacity="0.8">5</text>
                        <text x="195" y="322" text-anchor="middle" fill="var(--text-tertiary)" font-size="7" font-family="var(--font-mono)" opacity="0.5">Resellers</text>
                        <line x1="240" y1="286" x2="240" y2="328" stroke="var(--border-primary)" stroke-width="0.6"/>
                        <text x="290" y="302" text-anchor="middle" fill="var(--brand-secondary)" font-size="18" font-family="var(--font-display)" font-weight="800" opacity="0.8">18</text>
                        <text x="290" y="322" text-anchor="middle" fill="var(--text-tertiary)" font-size="7" font-family="var(--font-mono)" opacity="0.5">cPanel Accts</text>
                        <line x1="335" y1="286" x2="335" y2="328" stroke="var(--border-primary)" stroke-width="0.6"/>
                        <text x="370" y="302" text-anchor="middle" fill="var(--brand-warning)" font-size="18" font-family="var(--font-display)" font-weight="800" opacity="0.8">50 GB</text>
                        <text x="370" y="322" text-anchor="middle" fill="var(--text-tertiary)" font-size="7" font-family="var(--font-mono)" opacity="0.5">Disk</text>

                        <!-- Floating badge -->
                        <rect x="350" y="10" width="86" height="36" rx="10" fill="var(--bg-card)" stroke="var(--border-primary)" stroke-width="1">
                            <animate attributeName="y" values="10;16;10" dur="5s" repeatCount="indefinite"/>
                        </rect>
                        <text x="366" y="25" fill="var(--text-tertiary)" font-size="7" font-family="var(--font-mono)" font-weight="600" opacity="0.6">
                            TIER
                            <animate attributeName="y" values="25;31;25" dur="5s" repeatCount="indefinite"/>
                        </text>
                        <text x="366" y="39" fill="var(--brand-accent)" font-size="13" font-family="var(--font-display)" font-weight="800" opacity="0.8">
                            Alpha
                            <animate attributeName="y" values="39;45;39" dur="5s" repeatCount="indefinite"/>
                        </text>

                        <circle cx="8" cy="60" r="3" fill="var(--brand-accent)" opacity="0.25">
                            <animate attributeName="opacity" values="0.25;0.6;0.25" dur="3s" repeatCount="indefinite"/>
                        </circle>
                    </svg>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ POWERED BY STRIP ═══════════════ -->
    <section class="partners">
        <div class="container">
            <span class="partners-label"><?php echo e(__('reseller_powered_by')); ?></span>
            <div class="partners-logos">
                <span class="partner-logo"><i class="fas fa-bolt"></i> LiteSpeed</span>
                <span class="partner-logo"><i class="fas fa-shield-alt"></i> CloudLinux</span>
                <span class="partner-logo"><i class="fas fa-server"></i> cPanel / WHM</span>
                <span class="partner-logo"><i class="fas fa-hdd"></i> NVMe SSD</span>
                <span class="partner-logo"><i class="fas fa-robot"></i> Imunify360</span>
                <span class="partner-logo"><i class="fas fa-cloud-download-alt"></i> JetBackup</span>
            </div>
        </div>
    </section>

    <!-- ═══════════════ PRICING PLANS ═══════════════ -->
    <section class="plans reveal" id="plans">
        <div class="container">
            <div class="section-header">
                <div class="section-tag"><?php echo e(__('rcpanel_plans_tag')); ?></div>
                <h2><?php echo e(__('ralpha_plans_title')); ?></h2>
                <p><?php echo e(__('ralpha_plans_desc')); ?></p>
            </div>

            <div class="plans-panel active" data-tab="alpha-reseller">
                <div class="swiper plans-swiper">
                    <div class="swiper-wrapper">
                        <!-- Alpha Starter -->
                        <div class="swiper-slide"><div class="plan-card">
                            <div class="plan-head">
                                <div class="plan-name">Alpha Starter</div>
                                <span class="plan-save">Save 40%</span>
                            </div>
                            <div class="plan-target"><?php echo e(__('ralpha_target_starter')); ?></div>
                            <div class="plan-price">
                                <span class="old-price">€28.32</span>
                                <span class="current-price"><span class="currency">€</span><span class="amount">16.99</span><span class="period">EUR / mo</span></span>
                            </div>
                            <div class="plan-renewal"><i class="fas fa-check"></i> <?php echo e(__('reseller_same_renewal')); ?></div>
                            <button class="plan-cta" data-href="<?php echo e(CP_URL); ?>/order/alpha-reseller-cpanel/alpha-starter"><?php echo e(__('common_choose_plan')); ?></button>
                            <div class="plan-resources">
                                <div class="plan-res"><i class="fas fa-hdd"></i><span class="res-val">50 GB</span><span class="res-label"><?php echo e(__('ralpha_res_nvme')); ?></span></div>
                                <div class="plan-res"><i class="fas fa-wifi"></i><span class="res-val">2 TB</span><span class="res-label"><?php echo e(__('ralpha_res_bw')); ?></span></div>
                                <div class="plan-res"><i class="fas fa-project-diagram"></i><span class="res-val">Unlimited</span><span class="res-label"><?php echo e(__('ralpha_res_master')); ?></span></div>
                                <div class="plan-res"><i class="fas fa-database"></i><span class="res-val">50 GB</span><span class="res-label"><?php echo e(__('ralpha_res_mysql')); ?></span></div>
                            </div>
                            <div class="plan-divider"><span><?php echo e(__('reseller_included')); ?></span></div>
                            <ul class="plan-features">
                                <li><i class="fas fa-gem"></i> <?php echo e(__('ralpha_feat_master')); ?></li>
                                <li><i class="fas fa-sitemap"></i> <?php echo e(__('ralpha_feat_reseller')); ?></li>
                                <li><i class="fas fa-user"></i> <?php echo e(__('ralpha_feat_cpanel')); ?></li>
                                <li><i class="fas fa-lock"></i> <?php echo e(__('ralpha_feat_ssl')); ?></li>
                                <li><i class="fas fa-palette"></i> <?php echo e(__('ralpha_feat_wl')); ?></li>
                                <li><i class="fas fa-bolt"></i> <?php echo e(__('ralpha_feat_ls')); ?></li>
                                <li><i class="fas fa-map-marker-alt"></i> <?php echo e(__('ralpha_feat_locations')); ?></li>
                            </ul>
                        </div></div>

                        <!-- Alpha Essential -->
                        <div class="swiper-slide"><div class="plan-card">
                            <div class="plan-head">
                                <div class="plan-name">Alpha Essential</div>
                                <span class="plan-save">Save 35%</span>
                            </div>
                            <div class="plan-target"><?php echo e(__('ralpha_target_essential')); ?></div>
                            <div class="plan-price">
                                <span class="old-price">€33.83</span>
                                <span class="current-price"><span class="currency">€</span><span class="amount">21.99</span><span class="period">EUR / mo</span></span>
                            </div>
                            <div class="plan-renewal"><i class="fas fa-check"></i> <?php echo e(__('reseller_same_renewal')); ?></div>
                            <button class="plan-cta" data-href="<?php echo e(CP_URL); ?>/order/alpha-reseller-cpanel/alpha-essential"><?php echo e(__('common_choose_plan')); ?></button>
                            <div class="plan-resources">
                                <div class="plan-res"><i class="fas fa-hdd"></i><span class="res-val">80 GB</span><span class="res-label"><?php echo e(__('ralpha_res_nvme')); ?></span></div>
                                <div class="plan-res"><i class="fas fa-wifi"></i><span class="res-val">3 TB</span><span class="res-label"><?php echo e(__('ralpha_res_bw')); ?></span></div>
                                <div class="plan-res"><i class="fas fa-project-diagram"></i><span class="res-val">Unlimited</span><span class="res-label"><?php echo e(__('ralpha_res_master')); ?></span></div>
                                <div class="plan-res"><i class="fas fa-database"></i><span class="res-val">80 GB</span><span class="res-label"><?php echo e(__('ralpha_res_mysql')); ?></span></div>
                            </div>
                            <div class="plan-divider"><span><?php echo e(__('reseller_included')); ?></span></div>
                            <ul class="plan-features">
                                <li><i class="fas fa-gem"></i> <?php echo e(__('ralpha_feat_master')); ?></li>
                                <li><i class="fas fa-sitemap"></i> <?php echo e(__('ralpha_feat_reseller')); ?></li>
                                <li><i class="fas fa-user"></i> <?php echo e(__('ralpha_feat_cpanel')); ?></li>
                                <li><i class="fas fa-lock"></i> <?php echo e(__('ralpha_feat_ssl')); ?></li>
                                <li><i class="fas fa-palette"></i> <?php echo e(__('ralpha_feat_wl')); ?></li>
                                <li><i class="fas fa-bolt"></i> <?php echo e(__('ralpha_feat_ls')); ?></li>
                                <li><i class="fas fa-map-marker-alt"></i> <?php echo e(__('ralpha_feat_locations')); ?></li>
                            </ul>
                        </div></div>

                        <!-- Alpha Pro (Popular) -->
                        <div class="swiper-slide"><div class="plan-card popular">
                            <div class="plan-badge"><?php echo e(__('reseller_most_popular')); ?></div>
                            <div class="plan-head">
                                <div class="plan-name">Alpha Pro</div>
                                <span class="plan-save">Save 35%</span>
                            </div>
                            <div class="plan-target"><?php echo e(__('ralpha_target_pro')); ?></div>
                            <div class="plan-price">
                                <span class="old-price">€39.98</span>
                                <span class="current-price"><span class="currency">€</span><span class="amount">25.99</span><span class="period">EUR / mo</span></span>
                            </div>
                            <div class="plan-renewal"><i class="fas fa-check"></i> <?php echo e(__('reseller_same_renewal')); ?></div>
                            <button class="plan-cta" data-href="<?php echo e(CP_URL); ?>/order/alpha-reseller-cpanel/alpha-pro"><?php echo e(__('common_choose_plan')); ?></button>
                            <div class="plan-resources">
                                <div class="plan-res"><i class="fas fa-hdd"></i><span class="res-val">120 GB</span><span class="res-label"><?php echo e(__('ralpha_res_nvme')); ?></span></div>
                                <div class="plan-res"><i class="fas fa-wifi"></i><span class="res-val">4 TB</span><span class="res-label"><?php echo e(__('ralpha_res_bw')); ?></span></div>
                                <div class="plan-res"><i class="fas fa-project-diagram"></i><span class="res-val">Unlimited</span><span class="res-label"><?php echo e(__('ralpha_res_master')); ?></span></div>
                                <div class="plan-res"><i class="fas fa-database"></i><span class="res-val">120 GB</span><span class="res-label"><?php echo e(__('ralpha_res_mysql')); ?></span></div>
                            </div>
                            <div class="plan-divider"><span><?php echo e(__('reseller_included')); ?></span></div>
                            <ul class="plan-features">
                                <li><i class="fas fa-gem"></i> <?php echo e(__('ralpha_feat_master')); ?></li>
                                <li><i class="fas fa-sitemap"></i> <?php echo e(__('ralpha_feat_reseller')); ?></li>
                                <li><i class="fas fa-user"></i> <?php echo e(__('ralpha_feat_cpanel')); ?></li>
                                <li><i class="fas fa-lock"></i> <?php echo e(__('ralpha_feat_ssl')); ?></li>
                                <li><i class="fas fa-palette"></i> <?php echo e(__('ralpha_feat_wl')); ?></li>
                                <li><i class="fas fa-bolt"></i> <?php echo e(__('ralpha_feat_ls')); ?></li>
                                <li><i class="fas fa-map-marker-alt"></i> <?php echo e(__('ralpha_feat_locations')); ?></li>
                            </ul>
                        </div></div>

                        <!-- Alpha Advanced -->
                        <div class="swiper-slide"><div class="plan-card">
                            <div class="plan-head">
                                <div class="plan-name">Alpha Advanced</div>
                                <span class="plan-save">Save 30%</span>
                            </div>
                            <div class="plan-target"><?php echo e(__('ralpha_target_advanced')); ?></div>
                            <div class="plan-price">
                                <span class="old-price">€68.56</span>
                                <span class="current-price"><span class="currency">€</span><span class="amount">47.99</span><span class="period">EUR / mo</span></span>
                            </div>
                            <div class="plan-renewal"><i class="fas fa-check"></i> <?php echo e(__('reseller_same_renewal')); ?></div>
                            <button class="plan-cta" data-href="<?php echo e(CP_URL); ?>/order/alpha-reseller-cpanel/alpha-advanced"><?php echo e(__('common_choose_plan')); ?></button>
                            <div class="plan-resources">
                                <div class="plan-res"><i class="fas fa-hdd"></i><span class="res-val">250 GB</span><span class="res-label"><?php echo e(__('ralpha_res_nvme')); ?></span></div>
                                <div class="plan-res"><i class="fas fa-wifi"></i><span class="res-val">Unlimited</span><span class="res-label"><?php echo e(__('ralpha_res_bw')); ?></span></div>
                                <div class="plan-res"><i class="fas fa-project-diagram"></i><span class="res-val">Unlimited</span><span class="res-label"><?php echo e(__('ralpha_res_master')); ?></span></div>
                                <div class="plan-res"><i class="fas fa-database"></i><span class="res-val">250 GB</span><span class="res-label"><?php echo e(__('ralpha_res_mysql')); ?></span></div>
                            </div>
                            <div class="plan-divider"><span><?php echo e(__('reseller_included')); ?></span></div>
                            <ul class="plan-features">
                                <li><i class="fas fa-gem"></i> <?php echo e(__('ralpha_feat_master')); ?></li>
                                <li><i class="fas fa-sitemap"></i> <?php echo e(__('ralpha_feat_reseller')); ?></li>
                                <li><i class="fas fa-user"></i> <?php echo e(__('ralpha_feat_cpanel')); ?></li>
                                <li><i class="fas fa-lock"></i> <?php echo e(__('ralpha_feat_ssl')); ?></li>
                                <li><i class="fas fa-palette"></i> <?php echo e(__('ralpha_feat_wl')); ?></li>
                                <li><i class="fas fa-bolt"></i> <?php echo e(__('ralpha_feat_ls')); ?></li>
                                <li><i class="fas fa-map-marker-alt"></i> <?php echo e(__('ralpha_feat_locations')); ?></li>
                            </ul>
                        </div></div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>

            <div class="pricing-custom">
                <p><?php echo __('ralpha_pricing_custom', ['contact_url' => e(SITE_URL) . '/contact-us/']); ?></p>
            </div>

            <!-- Each cPanel includes strip -->
            <div class="cpanel-includes-strip">
                <div class="cpanel-includes-inner">
                    <div class="cpanel-includes-left">
                        <svg class="cpanel-includes-icon" width="40" height="40" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg" aria-label="cPanel">
                            <rect width="48" height="48" rx="10" fill="#2b2b2b"/>
                            <text x="24" y="30" text-anchor="middle" font-family="Arial, sans-serif" font-weight="800" font-size="18" fill="#FF6C2C">cP</text>
                        </svg>
                        <div class="cpanel-includes-text">
                            <strong><?php echo e(__('reseller_cpanel_includes')); ?></strong>
                            <span><i class="fas fa-envelope"></i> Emails &nbsp; <i class="fas fa-sign-out-alt"></i> FTP Accounts &nbsp; <i class="fas fa-database"></i> Databases &nbsp; <i class="fas fa-link"></i> Subdomains</span>
                        </div>
                    </div>
                    <div class="cpanel-includes-badges">
                        <span class="cpanel-badge cpanel-badge-label"><?php echo e(__('reseller_cpanel_has')); ?></span>
                        <span class="cpanel-badge">1.5 Core CPU</span>
                        <span class="cpanel-badge">2GB RAM</span>
                        <span class="cpanel-badge">100 MB/s I/O</span>
                        <span class="cpanel-badge">25000 IOPS</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ WHY ALPHA RESELLER ═══════════════ -->
    <section class="cp-benefits reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag"><?php echo e(__('ralpha_why_tag')); ?></div>
                <h2><?php echo e(__('ralpha_why_title')); ?></h2>
                <p><?php echo e(__('ralpha_why_desc')); ?></p>
            </div>

            <div class="cp-benefits-grid">
                <div class="cp-security-card">
                    <div class="cp-security-icon"><i class="fas fa-gem"></i></div>
                    <h4><?php echo e(__('ralpha_adv_hierarchy_title')); ?></h4>
                    <p><?php echo e(__('ralpha_adv_hierarchy_desc')); ?></p>
                </div>
                <div class="cp-security-card">
                    <div class="cp-security-icon icon-green"><i class="fas fa-building"></i></div>
                    <h4><?php echo e(__('ralpha_adv_scale_title')); ?></h4>
                    <p><?php echo e(__('ralpha_adv_scale_desc')); ?></p>
                </div>
                <div class="cp-security-card">
                    <div class="cp-security-icon icon-purple"><i class="fas fa-eye"></i></div>
                    <h4><?php echo e(__('ralpha_adv_visibility_title')); ?></h4>
                    <p><?php echo e(__('ralpha_adv_visibility_desc')); ?></p>
                </div>
                <div class="cp-security-card">
                    <div class="cp-security-icon icon-amber"><i class="fas fa-expand-arrows-alt"></i></div>
                    <h4><?php echo e(__('ralpha_adv_growth_title')); ?></h4>
                    <p><?php echo e(__('ralpha_adv_growth_desc')); ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ BENTO FEATURES ═══════════════ -->
    <section class="bento-features reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag"><?php echo e(__('ralpha_feat_tag')); ?></div>
                <h2><?php echo e(__('ralpha_feat_title')); ?></h2>
                <p><?php echo e(__('ralpha_feat_desc')); ?></p>
            </div>

            <div class="bento-grid">
                <div class="bento-card bento-sm">
                    <div class="bento-card-icon"><i class="fas fa-project-diagram"></i></div>
                    <h4><?php echo e(__('ralpha_feat_3tier_title')); ?></h4>
                    <p><?php echo e(__('ralpha_feat_3tier_desc')); ?></p>
                </div>

                <div class="bento-card bento-sm">
                    <div class="bento-card-icon icon-green"><i class="fas fa-chart-bar"></i></div>
                    <h4><?php echo e(__('ralpha_feat_oversight_title')); ?></h4>
                    <p><?php echo e(__('ralpha_feat_oversight_desc')); ?></p>
                </div>

                <div class="bento-card bento-sm">
                    <div class="bento-card-icon icon-purple"><i class="fas fa-lock"></i></div>
                    <h4><?php echo e(__('ralpha_feat_ssl_title')); ?></h4>
                    <p><?php echo e(__('ralpha_feat_ssl_desc')); ?></p>
                </div>
                <div class="bento-card bento-sm">
                    <div class="bento-card-icon icon-amber"><i class="fas fa-cloud-download-alt"></i></div>
                    <h4><?php echo e(__('ralpha_feat_backup_title')); ?></h4>
                    <p><?php echo e(__('ralpha_feat_backup_desc')); ?></p>
                </div>
                <div class="bento-card bento-sm">
                    <div class="bento-card-icon"><i class="fas fa-bolt"></i></div>
                    <h4><?php echo e(__('ralpha_feat_ls_title')); ?></h4>
                    <p><?php echo e(__('ralpha_feat_ls_desc')); ?></p>
                </div>
                <div class="bento-card bento-sm">
                    <div class="bento-card-icon icon-green"><i class="fas fa-robot"></i></div>
                    <h4><?php echo e(__('ralpha_feat_imunify_title')); ?></h4>
                    <p><?php echo e(__('ralpha_feat_imunify_desc')); ?></p>
                </div>
                <div class="bento-card bento-sm">
                    <div class="bento-card-icon icon-amber"><i class="fas fa-plug"></i></div>
                    <h4><?php echo e(__('ralpha_feat_plugin_title')); ?></h4>
                    <p><?php echo e(__('ralpha_feat_plugin_desc')); ?></p>
                </div>
            </div>

            <div class="article-callout" style="margin-top: 24px;">
                <i class="fas fa-info-circle"></i>
                <div>
                    <?php echo __('ralpha_feat_callout'); ?>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ RESELLER TIERS ═══════════════ -->
    <section class="rs-hierarchy reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag"><?php echo e(__('reseller_tiers_tag')); ?></div>
                <h2><?php echo e(__('ralpha_tiers_title')); ?></h2>
                <p><?php echo e(__('ralpha_tiers_desc')); ?></p>
            </div>

            <div class="rs-tiers-grid">
                <div class="rs-tier-card">
                    <div class="rs-tier-icon"><i class="fas fa-user-tie"></i></div>
                    <span class="rs-tier-level"><?php echo e(__('ralpha_tier_cpanel_level')); ?></span>
                    <h4><?php echo e(__('reseller_cpanel_breadcrumb')); ?></h4>
                    <p><?php echo e(__('ralpha_tier_cpanel_desc')); ?></p>
                    <ul class="rs-tier-perks">
                        <li><i class="fas fa-check"></i> <?php echo e(__('rcpanel_tier_cpanel_p1')); ?></li>
                        <li><i class="fas fa-check"></i> <?php echo e(__('rcpanel_tier_cpanel_p2')); ?></li>
                        <li><i class="fas fa-check"></i> <?php echo e(__('rcpanel_tier_cpanel_p3')); ?></li>
                    </ul>
                    <a href="<?php echo e(SITE_URL); ?>/cpanel-reseller/" class="rs-tier-link"><?php echo e(__('common_learn_more')); ?> <i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="rs-tier-card">
                    <div class="rs-tier-icon icon-green"><i class="fas fa-crown"></i></div>
                    <span class="rs-tier-level"><?php echo e(__('ralpha_tier_master_level')); ?></span>
                    <h4><?php echo e(__('reseller_master_breadcrumb')); ?></h4>
                    <p><?php echo e(__('ralpha_tier_master_desc')); ?></p>
                    <ul class="rs-tier-perks">
                        <li><i class="fas fa-check"></i> <?php echo e(__('ralpha_tier_master_p1')); ?></li>
                        <li><i class="fas fa-check"></i> <?php echo e(__('ralpha_tier_master_p2')); ?></li>
                        <li><i class="fas fa-check"></i> <?php echo e(__('ralpha_tier_master_p3')); ?></li>
                    </ul>
                    <a href="<?php echo e(SITE_URL); ?>/master-reseller/" class="rs-tier-link"><?php echo e(__('common_learn_more')); ?> <i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="rs-tier-card rs-tier-active">
                    <div class="rs-tier-badge"><?php echo e(__('reseller_you_are_here')); ?></div>
                    <div class="rs-tier-icon icon-purple"><i class="fas fa-gem"></i></div>
                    <span class="rs-tier-level"><?php echo e(__('ralpha_tier_alpha_level')); ?></span>
                    <h4><?php echo e(__('reseller_alpha_breadcrumb')); ?></h4>
                    <p><?php echo e(__('ralpha_tier_alpha_desc')); ?></p>
                    <ul class="rs-tier-perks">
                        <li><i class="fas fa-check"></i> <?php echo e(__('ralpha_tier_alpha_p1')); ?></li>
                        <li><i class="fas fa-check"></i> <?php echo e(__('ralpha_tier_alpha_p2')); ?></li>
                        <li><i class="fas fa-check"></i> <?php echo e(__('ralpha_tier_alpha_p3')); ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ GLOBAL INFRASTRUCTURE (compact) ═══════════════ -->
<?php
$dc_heading = __('ralpha_dc_heading');
$dc_desc = __('ralpha_dc_desc');
$dc_link_prefix = '/cheap-cpanel';
include __DIR__ . '/includes/section-dc-showcase.php';
?>

    <!-- ═══════════════ FAQ ═══════════════ -->
    <section class="faq-section reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag"><?php echo e(__('reseller_faq_tag')); ?></div>
                <h2><?php echo e(__('reseller_faq_title')); ?></h2>
                <p><?php echo e(__('reseller_faq_desc')); ?></p>
            </div>

            <div class="faq-layout">
                <div class="faq-tabs">
                    <button class="faq-tab active" data-faq-target="faq-general"><i class="fas fa-server"></i> <?php echo e(__('reseller_faq_tab_general')); ?></button>
                    <button class="faq-tab" data-faq-target="faq-technical"><i class="fas fa-cogs"></i> <?php echo e(__('reseller_faq_tab_technical')); ?></button>
                    <button class="faq-tab" data-faq-target="faq-billing"><i class="fas fa-credit-card"></i> <?php echo e(__('reseller_faq_tab_billing')); ?></button>
                </div>

                <div class="faq-panels">
                    <div class="faq-panel active" id="faq-general">
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('ralpha_faq_g1_q')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('ralpha_faq_g1_a')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('ralpha_faq_g2_q')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('ralpha_faq_g2_a')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('ralpha_faq_g3_q')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('ralpha_faq_g3_a')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('ralpha_faq_g4_q')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('ralpha_faq_g4_a')); ?></p></div></div>
                    </div>

                    <div class="faq-panel" id="faq-technical">
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('ralpha_faq_t1_q')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('ralpha_faq_t1_a')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('ralpha_faq_t2_q')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('ralpha_faq_t2_a')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('ralpha_faq_t3_q')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('ralpha_faq_t3_a')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('ralpha_faq_t4_q')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('ralpha_faq_t4_a')); ?></p></div></div>
                    </div>

                    <div class="faq-panel" id="faq-billing">
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('ralpha_faq_b1_q')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('ralpha_faq_b1_a')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('ralpha_faq_b2_q')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('ralpha_faq_b2_a')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('ralpha_faq_b3_q')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('ralpha_faq_b3_a')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('ralpha_faq_b4_q')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('ralpha_faq_b4_a')); ?></p></div></div>
                    </div>
                </div>
            </div>

            <div class="faq-actions">
                <a href="<?php echo e(SITE_URL); ?>/contact-us/" class="btn-primary"><i class="fas fa-headset"></i> <?php echo e(__('common_open_ticket')); ?></a>
                <a href="<?php echo e(SITE_URL); ?>/faq" class="btn-secondary"><?php echo e(__('common_browse_faq')); ?> <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </section>

    <!-- ═══════════════ WHY CHOOSE US ═══════════════ -->
    <section class="why-us reveal">
        <div class="container">
            <div class="why-us-layout">
                <div class="why-us-intro">
                    <div class="section-tag"><?php echo e(__('reseller_why_tag')); ?></div>
                    <h2 class="why-us-title"><?php echo e(__('reseller_why_title')); ?></h2>
                    <p class="why-us-desc"><?php echo e(__('ralpha_why_desc')); ?></p>
                    <a href="#plans" class="btn-primary"><?php echo e(__('common_get_started')); ?> <i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="why-us-grid">
                    <div class="why-us-card">
                        <div class="why-us-card-icon"><i class="fas fa-headset"></i></div>
                        <h4><?php echo e(__('ralpha_why_support_title')); ?></h4>
                        <p><?php echo e(__('ralpha_why_support_desc')); ?></p>
                    </div>
                    <div class="why-us-card">
                        <div class="why-us-card-icon icon-green"><i class="fas fa-tachometer-alt"></i></div>
                        <h4><?php echo e(__('ralpha_why_perf_title')); ?></h4>
                        <p><?php echo e(__('ralpha_why_perf_desc')); ?></p>
                    </div>
                    <div class="why-us-card">
                        <div class="why-us-card-icon icon-purple"><i class="fas fa-shield-alt"></i></div>
                        <h4><?php echo e(__('ralpha_why_secure_title')); ?></h4>
                        <p><?php echo e(__('ralpha_why_secure_desc')); ?></p>
                    </div>
                    <div class="why-us-card">
                        <div class="why-us-card-icon icon-amber"><i class="fas fa-globe"></i></div>
                        <h4><?php echo e(__('ralpha_why_dc_title')); ?></h4>
                        <p><?php echo e(__('ralpha_why_dc_desc')); ?></p>
                    </div>
                    <div class="why-us-card">
                        <div class="why-us-card-icon icon-green"><i class="fas fa-tags"></i></div>
                        <h4><?php echo e(__('ralpha_why_margin_title')); ?></h4>
                        <p><?php echo e(__('ralpha_why_margin_desc')); ?></p>
                    </div>
                    <div class="why-us-card">
                        <div class="why-us-card-icon icon-purple"><i class="fas fa-project-diagram"></i></div>
                        <h4><?php echo e(__('ralpha_why_hierarchy_title')); ?></h4>
                        <p><?php echo e(__('ralpha_why_hierarchy_desc')); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ ClouDNS PARTNERSHIP ═══════════════ -->
    <?php include __DIR__ . '/includes/section-cloudns.php'; ?>

    <!-- ═══════════════ MAILCHANNELS PARTNERSHIP ═══════════════ -->
    <?php include __DIR__ . '/includes/section-mailchannels.php'; ?>

    <!-- ═══════════════ COMPETITORS COMPARISON ═══════════════ -->
    <?php $compare_type = 'reseller'; include __DIR__ . '/includes/section-competitors.php'; ?>

    <!-- ═══════════════ BOTTOM CTA ═══════════════ -->
    <section class="promo-cta reveal">
        <div class="container">
            <div class="promo-cta-inner">
                <div class="promo-cta-glow"></div>
                <div class="promo-cta-icon"><i class="fas fa-gem"></i></div>
                <h2><?php echo e(__('ralpha_cta_title')); ?></h2>
                <p><?php echo e(__('ralpha_cta_desc')); ?></p>
                <a href="#plans" class="btn-primary"><?php echo e(__('common_view_plans')); ?> <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
