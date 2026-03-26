<?php
/**
 * YottaSrc — Master Reseller Hosting
 * ====================================
 * Master Reseller hosting — create Reseller accounts that create cPanel accounts.
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
                        <span><?php echo e(__('reseller_master_breadcrumb')); ?></span>
                    </div>
                    <h1><?php echo __('reseller_master_title'); ?></h1>
                    <p class="page-hero-desc">
                        <?php echo e(__('reseller_master_desc')); ?>
                    </p>
                    <div class="page-hero-ctas">
                        <a href="#plans" class="btn-primary"><?php echo e(__('common_view_plans')); ?> <i class="fas fa-arrow-down"></i></a>
                        <a href="<?php echo e(SITE_URL); ?>/contact-us/" class="btn-secondary"><i class="fas fa-headset"></i> <?php echo e(__('common_talk_to_sales')); ?></a>
                    </div>
                    <div class="page-hero-badges">
                        <div class="hero-badge-item"><i class="fas fa-check"></i> <?php echo e(__('rmaster_badge_resellers')); ?></div>
                        <div class="hero-badge-item"><i class="fas fa-check"></i> <?php echo e(__('rmaster_badge_twotier')); ?></div>
                        <div class="hero-badge-item"><i class="fas fa-check"></i> <?php echo e(__('rmaster_badge_wl')); ?></div>
                        <div class="hero-badge-item"><i class="fas fa-check"></i> <?php echo e(__('rmaster_badge_locations')); ?></div>
                    </div>
                </div>
                <div class="page-hero-visual">
                    <svg viewBox="0 0 440 400" fill="none" xmlns="http://www.w3.org/2000/svg" class="hero-illustration" aria-label="Master Reseller hierarchy illustration">
                        <!-- Hierarchy visualization -->

                        <!-- Top tier: Master Reseller -->
                        <rect x="140" y="20" width="160" height="60" rx="14" fill="var(--bg-card)" stroke="var(--brand-primary)" stroke-width="2"/>
                        <circle cx="170" cy="50" r="14" fill="var(--brand-primary)" opacity="0.15"/>
                        <text x="170" y="54" text-anchor="middle" fill="var(--brand-primary)" font-size="12" font-family="var(--font-body)" font-weight="800" opacity="0.7"><tspan>👑</tspan></text>
                        <text x="230" y="44" text-anchor="middle" fill="var(--text-secondary)" font-size="10" font-family="var(--font-display)" font-weight="700" opacity="0.8">Master Reseller</text>
                        <text x="230" y="60" text-anchor="middle" fill="var(--text-tertiary)" font-size="8" font-family="var(--font-mono)" opacity="0.5">YOU (Full Control)</text>

                        <!-- Lines from Master to Resellers -->
                        <line x1="190" y1="80" x2="110" y2="130" stroke="var(--brand-primary)" stroke-width="1.5" stroke-dasharray="4 3" opacity="0.4"/>
                        <line x1="250" y1="80" x2="330" y2="130" stroke="var(--brand-primary)" stroke-width="1.5" stroke-dasharray="4 3" opacity="0.4"/>

                        <!-- Second tier: Resellers -->
                        <rect x="30" y="130" width="160" height="52" rx="12" fill="var(--bg-card)" stroke="var(--brand-secondary)" stroke-width="1.5"/>
                        <circle cx="58" cy="156" r="12" fill="var(--brand-secondary)" opacity="0.15"/>
                        <text x="58" y="160" text-anchor="middle" fill="var(--brand-secondary)" font-size="10" font-family="var(--font-body)" font-weight="700" opacity="0.7">R1</text>
                        <text x="130" y="151" text-anchor="middle" fill="var(--text-secondary)" font-size="9" font-family="var(--font-body)" font-weight="600" opacity="0.7">Reseller-A</text>
                        <text x="130" y="167" text-anchor="middle" fill="var(--text-tertiary)" font-size="7.5" font-family="var(--font-mono)" opacity="0.5">WHM Access · 3 clients</text>

                        <rect x="250" y="130" width="160" height="52" rx="12" fill="var(--bg-card)" stroke="var(--brand-secondary)" stroke-width="1.5"/>
                        <circle cx="278" cy="156" r="12" fill="var(--brand-secondary)" opacity="0.15"/>
                        <text x="278" y="160" text-anchor="middle" fill="var(--brand-secondary)" font-size="10" font-family="var(--font-body)" font-weight="700" opacity="0.7">R2</text>
                        <text x="350" y="151" text-anchor="middle" fill="var(--text-secondary)" font-size="9" font-family="var(--font-body)" font-weight="600" opacity="0.7">Reseller-B</text>
                        <text x="350" y="167" text-anchor="middle" fill="var(--text-tertiary)" font-size="7.5" font-family="var(--font-mono)" opacity="0.5">WHM Access · 5 clients</text>

                        <!-- Lines from Resellers to cPanel accounts -->
                        <line x1="80" y1="182" x2="40" y2="228" stroke="var(--brand-secondary)" stroke-width="1" stroke-dasharray="3 3" opacity="0.3"/>
                        <line x1="110" y1="182" x2="110" y2="228" stroke="var(--brand-secondary)" stroke-width="1" stroke-dasharray="3 3" opacity="0.3"/>
                        <line x1="140" y1="182" x2="180" y2="228" stroke="var(--brand-secondary)" stroke-width="1" stroke-dasharray="3 3" opacity="0.3"/>

                        <line x1="300" y1="182" x2="260" y2="228" stroke="var(--brand-secondary)" stroke-width="1" stroke-dasharray="3 3" opacity="0.3"/>
                        <line x1="330" y1="182" x2="330" y2="228" stroke="var(--brand-secondary)" stroke-width="1" stroke-dasharray="3 3" opacity="0.3"/>
                        <line x1="360" y1="182" x2="400" y2="228" stroke="var(--brand-secondary)" stroke-width="1" stroke-dasharray="3 3" opacity="0.3"/>

                        <!-- Third tier: cPanel accounts -->
                        <rect x="14" y="228" width="52" height="36" rx="8" fill="var(--bg-tertiary)"/>
                        <text x="40" y="250" text-anchor="middle" fill="var(--text-tertiary)" font-size="7" font-family="var(--font-mono)" opacity="0.5">cPanel</text>

                        <rect x="84" y="228" width="52" height="36" rx="8" fill="var(--bg-tertiary)"/>
                        <text x="110" y="250" text-anchor="middle" fill="var(--text-tertiary)" font-size="7" font-family="var(--font-mono)" opacity="0.5">cPanel</text>

                        <rect x="154" y="228" width="52" height="36" rx="8" fill="var(--bg-tertiary)"/>
                        <text x="180" y="250" text-anchor="middle" fill="var(--text-tertiary)" font-size="7" font-family="var(--font-mono)" opacity="0.5">cPanel</text>

                        <rect x="234" y="228" width="52" height="36" rx="8" fill="var(--bg-tertiary)"/>
                        <text x="260" y="250" text-anchor="middle" fill="var(--text-tertiary)" font-size="7" font-family="var(--font-mono)" opacity="0.5">cPanel</text>

                        <rect x="304" y="228" width="52" height="36" rx="8" fill="var(--bg-tertiary)"/>
                        <text x="330" y="250" text-anchor="middle" fill="var(--text-tertiary)" font-size="7" font-family="var(--font-mono)" opacity="0.5">cPanel</text>

                        <rect x="374" y="228" width="52" height="36" rx="8" fill="var(--bg-tertiary)"/>
                        <text x="400" y="250" text-anchor="middle" fill="var(--text-tertiary)" font-size="7" font-family="var(--font-mono)" opacity="0.5">cPanel</text>

                        <!-- Summary bar at bottom -->
                        <rect x="60" y="290" width="320" height="56" rx="12" fill="var(--bg-card)" stroke="var(--border-primary)" stroke-width="1"/>
                        <text x="130" y="314" text-anchor="middle" fill="var(--brand-primary)" font-size="18" font-family="var(--font-display)" font-weight="800" opacity="0.8">2</text>
                        <text x="130" y="334" text-anchor="middle" fill="var(--text-tertiary)" font-size="7" font-family="var(--font-mono)" opacity="0.5">Resellers</text>
                        <line x1="190" y1="298" x2="190" y2="340" stroke="var(--border-primary)" stroke-width="0.6"/>
                        <text x="220" y="314" text-anchor="middle" fill="var(--brand-secondary)" font-size="18" font-family="var(--font-display)" font-weight="800" opacity="0.8">8</text>
                        <text x="220" y="334" text-anchor="middle" fill="var(--text-tertiary)" font-size="7" font-family="var(--font-mono)" opacity="0.5">cPanel Accts</text>
                        <line x1="260" y1="298" x2="260" y2="340" stroke="var(--border-primary)" stroke-width="0.6"/>
                        <text x="310" y="314" text-anchor="middle" fill="var(--brand-accent)" font-size="18" font-family="var(--font-display)" font-weight="800" opacity="0.8">50 GB</text>
                        <text x="310" y="334" text-anchor="middle" fill="var(--text-tertiary)" font-size="7" font-family="var(--font-mono)" opacity="0.5">Total Disk</text>

                        <!-- Floating badges -->
                        <rect x="344" y="30" width="90" height="36" rx="10" fill="var(--bg-card)" stroke="var(--border-primary)" stroke-width="1">
                            <animate attributeName="y" values="30;36;30" dur="5s" repeatCount="indefinite"/>
                        </rect>
                        <text x="360" y="45" fill="var(--text-tertiary)" font-size="7" font-family="var(--font-mono)" font-weight="600" opacity="0.6">
                            TIER
                            <animate attributeName="y" values="45;51;45" dur="5s" repeatCount="indefinite"/>
                        </text>
                        <text x="360" y="59" fill="var(--brand-primary)" font-size="13" font-family="var(--font-display)" font-weight="800" opacity="0.8">
                            Master
                            <animate attributeName="y" values="59;65;59" dur="5s" repeatCount="indefinite"/>
                        </text>

                        <circle cx="8" cy="100" r="3" fill="var(--brand-primary)" opacity="0.25">
                            <animate attributeName="opacity" values="0.25;0.6;0.25" dur="3s" repeatCount="indefinite"/>
                        </circle>
                        <circle cx="432" cy="290" r="3" fill="var(--brand-secondary)" opacity="0.25">
                            <animate attributeName="opacity" values="0.25;0.5;0.25" dur="4s" repeatCount="indefinite"/>
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
                <h2><?php echo e(__('rmaster_plans_title')); ?></h2>
                <p><?php echo e(__('rmaster_plans_desc')); ?></p>
            </div>

            <div class="plans-panel active" data-tab="master-reseller">
                <div class="swiper plans-swiper">
                    <div class="swiper-wrapper">
                        <!-- Master Starter -->
                        <div class="swiper-slide"><div class="plan-card">
                            <div class="plan-head">
                                <div class="plan-name">Master Starter</div>
                                <span class="plan-save">Save 40%</span>
                            </div>
                            <div class="plan-target"><?php echo e(__('rmaster_target_starter')); ?></div>
                            <div class="plan-price">
                                <span class="old-price">€19.99</span>
                                <span class="current-price"><span class="currency">€</span><span class="amount">11.99</span><span class="period">EUR / mo</span></span>
                            </div>
                            <div class="plan-renewal"><i class="fas fa-check"></i> <?php echo e(__('reseller_same_renewal')); ?></div>
                            <button class="plan-cta" data-href="<?php echo e(CP_URL); ?>/order/master-reseller-cpanel/master-starter"><?php echo e(__('common_choose_plan')); ?></button>
                            <div class="plan-resources">
                                <div class="plan-res"><i class="fas fa-hdd"></i><span class="res-val">50 GB</span><span class="res-label"><?php echo e(__('rmaster_res_nvme')); ?></span></div>
                                <div class="plan-res"><i class="fas fa-wifi"></i><span class="res-val">1.5 TB</span><span class="res-label"><?php echo e(__('rmaster_res_bw')); ?></span></div>
                                <div class="plan-res"><i class="fas fa-sitemap"></i><span class="res-val">Unlimited</span><span class="res-label"><?php echo e(__('rmaster_res_accounts')); ?></span></div>
                                <div class="plan-res"><i class="fas fa-database"></i><span class="res-val">50 GB</span><span class="res-label"><?php echo e(__('rmaster_res_mysql')); ?></span></div>
                            </div>
                            <div class="plan-divider"><span><?php echo e(__('reseller_included')); ?></span></div>
                            <ul class="plan-features">
                                <li><i class="fas fa-sitemap"></i> <?php echo e(__('rmaster_feat_reseller')); ?></li>
                                <li><i class="fas fa-users-cog"></i> <?php echo e(__('rmaster_feat_whm')); ?></li>
                                <li><i class="fas fa-lock"></i> <?php echo e(__('rmaster_feat_ssl')); ?></li>
                                <li><i class="fas fa-palette"></i> <?php echo e(__('rmaster_feat_wl')); ?></li>
                                <li><i class="fas fa-bolt"></i> <?php echo e(__('rmaster_feat_ls')); ?></li>
                                <li><i class="fas fa-shield-alt"></i> <?php echo e(__('rmaster_feat_imunify')); ?></li>
                                <li><i class="fas fa-map-marker-alt"></i> <?php echo e(__('rmaster_feat_locations')); ?></li>
                            </ul>
                        </div></div>

                        <!-- Master Essential -->
                        <div class="swiper-slide"><div class="plan-card">
                            <div class="plan-head">
                                <div class="plan-name">Master Essential</div>
                                <span class="plan-save">Save 35%</span>
                            </div>
                            <div class="plan-target"><?php echo e(__('rmaster_target_essential')); ?></div>
                            <div class="plan-price">
                                <span class="old-price">€25.99</span>
                                <span class="current-price"><span class="currency">€</span><span class="amount">16.99</span><span class="period">EUR / mo</span></span>
                            </div>
                            <div class="plan-renewal"><i class="fas fa-check"></i> <?php echo e(__('reseller_same_renewal')); ?></div>
                            <button class="plan-cta" data-href="<?php echo e(CP_URL); ?>/order/master-reseller-cpanel/master-essential"><?php echo e(__('common_choose_plan')); ?></button>
                            <div class="plan-resources">
                                <div class="plan-res"><i class="fas fa-hdd"></i><span class="res-val">75 GB</span><span class="res-label"><?php echo e(__('rmaster_res_nvme')); ?></span></div>
                                <div class="plan-res"><i class="fas fa-wifi"></i><span class="res-val">2 TB</span><span class="res-label"><?php echo e(__('rmaster_res_bw')); ?></span></div>
                                <div class="plan-res"><i class="fas fa-sitemap"></i><span class="res-val">Unlimited</span><span class="res-label"><?php echo e(__('rmaster_res_accounts')); ?></span></div>
                                <div class="plan-res"><i class="fas fa-database"></i><span class="res-val">75 GB</span><span class="res-label"><?php echo e(__('rmaster_res_mysql')); ?></span></div>
                            </div>
                            <div class="plan-divider"><span><?php echo e(__('reseller_included')); ?></span></div>
                            <ul class="plan-features">
                                <li><i class="fas fa-sitemap"></i> <?php echo e(__('rmaster_feat_reseller')); ?></li>
                                <li><i class="fas fa-users-cog"></i> <?php echo e(__('rmaster_feat_whm')); ?></li>
                                <li><i class="fas fa-lock"></i> <?php echo e(__('rmaster_feat_ssl')); ?></li>
                                <li><i class="fas fa-palette"></i> <?php echo e(__('rmaster_feat_wl')); ?></li>
                                <li><i class="fas fa-bolt"></i> <?php echo e(__('rmaster_feat_ls')); ?></li>
                                <li><i class="fas fa-shield-alt"></i> <?php echo e(__('rmaster_feat_imunify')); ?></li>
                                <li><i class="fas fa-map-marker-alt"></i> <?php echo e(__('rmaster_feat_locations')); ?></li>
                            </ul>
                        </div></div>

                        <!-- Master Pro (Popular) -->
                        <div class="swiper-slide"><div class="plan-card popular">
                            <div class="plan-badge"><?php echo e(__('reseller_most_popular')); ?></div>
                            <div class="plan-head">
                                <div class="plan-name">Master Pro</div>
                                <span class="plan-save">Save 40%</span>
                            </div>
                            <div class="plan-target"><?php echo e(__('rmaster_target_pro')); ?></div>
                            <div class="plan-price">
                                <span class="old-price">€35.99</span>
                                <span class="current-price"><span class="currency">€</span><span class="amount">21.59</span><span class="period">EUR / mo</span></span>
                            </div>
                            <div class="plan-renewal"><i class="fas fa-check"></i> <?php echo e(__('reseller_same_renewal')); ?></div>
                            <button class="plan-cta" data-href="<?php echo e(CP_URL); ?>/order/master-reseller-cpanel/master-pro"><?php echo e(__('common_choose_plan')); ?></button>
                            <div class="plan-resources">
                                <div class="plan-res"><i class="fas fa-hdd"></i><span class="res-val">100 GB</span><span class="res-label"><?php echo e(__('rmaster_res_nvme')); ?></span></div>
                                <div class="plan-res"><i class="fas fa-wifi"></i><span class="res-val">3 TB</span><span class="res-label"><?php echo e(__('rmaster_res_bw')); ?></span></div>
                                <div class="plan-res"><i class="fas fa-sitemap"></i><span class="res-val">Unlimited</span><span class="res-label"><?php echo e(__('rmaster_res_accounts')); ?></span></div>
                                <div class="plan-res"><i class="fas fa-database"></i><span class="res-val">100 GB</span><span class="res-label"><?php echo e(__('rmaster_res_mysql')); ?></span></div>
                            </div>
                            <div class="plan-divider"><span><?php echo e(__('reseller_included')); ?></span></div>
                            <ul class="plan-features">
                                <li><i class="fas fa-sitemap"></i> <?php echo e(__('rmaster_feat_reseller')); ?></li>
                                <li><i class="fas fa-users-cog"></i> <?php echo e(__('rmaster_feat_whm')); ?></li>
                                <li><i class="fas fa-lock"></i> <?php echo e(__('rmaster_feat_ssl')); ?></li>
                                <li><i class="fas fa-palette"></i> <?php echo e(__('rmaster_feat_wl')); ?></li>
                                <li><i class="fas fa-bolt"></i> <?php echo e(__('rmaster_feat_ls')); ?></li>
                                <li><i class="fas fa-shield-alt"></i> <?php echo e(__('rmaster_feat_imunify')); ?></li>
                                <li><i class="fas fa-map-marker-alt"></i> <?php echo e(__('rmaster_feat_locations')); ?></li>
                            </ul>
                        </div></div>

                        <!-- Master Advanced -->
                        <div class="swiper-slide"><div class="plan-card">
                            <div class="plan-head">
                                <div class="plan-name">Master Advanced</div>
                                <span class="plan-save">Save 30%</span>
                            </div>
                            <div class="plan-target"><?php echo e(__('rmaster_target_advanced')); ?></div>
                            <div class="plan-price">
                                <span class="old-price">€57.13</span>
                                <span class="current-price"><span class="currency">€</span><span class="amount">39.99</span><span class="period">EUR / mo</span></span>
                            </div>
                            <div class="plan-renewal"><i class="fas fa-check"></i> <?php echo e(__('reseller_same_renewal')); ?></div>
                            <button class="plan-cta" data-href="<?php echo e(CP_URL); ?>/order/master-reseller-cpanel/master-advanced"><?php echo e(__('common_choose_plan')); ?></button>
                            <div class="plan-resources">
                                <div class="plan-res"><i class="fas fa-hdd"></i><span class="res-val">200 GB</span><span class="res-label"><?php echo e(__('rmaster_res_nvme')); ?></span></div>
                                <div class="plan-res"><i class="fas fa-wifi"></i><span class="res-val">Unlimited</span><span class="res-label"><?php echo e(__('rmaster_res_bw')); ?></span></div>
                                <div class="plan-res"><i class="fas fa-sitemap"></i><span class="res-val">Unlimited</span><span class="res-label"><?php echo e(__('rmaster_res_accounts')); ?></span></div>
                                <div class="plan-res"><i class="fas fa-database"></i><span class="res-val">200 GB</span><span class="res-label"><?php echo e(__('rmaster_res_mysql')); ?></span></div>
                            </div>
                            <div class="plan-divider"><span><?php echo e(__('reseller_included')); ?></span></div>
                            <ul class="plan-features">
                                <li><i class="fas fa-sitemap"></i> <?php echo e(__('rmaster_feat_reseller')); ?></li>
                                <li><i class="fas fa-users-cog"></i> <?php echo e(__('rmaster_feat_whm')); ?></li>
                                <li><i class="fas fa-lock"></i> <?php echo e(__('rmaster_feat_ssl')); ?></li>
                                <li><i class="fas fa-palette"></i> <?php echo e(__('rmaster_feat_wl')); ?></li>
                                <li><i class="fas fa-bolt"></i> <?php echo e(__('rmaster_feat_ls')); ?></li>
                                <li><i class="fas fa-shield-alt"></i> <?php echo e(__('rmaster_feat_imunify')); ?></li>
                                <li><i class="fas fa-map-marker-alt"></i> <?php echo e(__('rmaster_feat_locations')); ?></li>
                            </ul>
                        </div></div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>

            <div class="pricing-custom">
                <p><?php echo __('rmaster_pricing_custom', ['alpha_url' => e(SITE_URL) . '/alpha-reseller/']); ?></p>
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

    <!-- ═══════════════ WHY MASTER RESELLER ═══════════════ -->
    <section class="cp-benefits reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag"><?php echo e(__('rmaster_why_tag')); ?></div>
                <h2><?php echo e(__('rmaster_why_title')); ?></h2>
                <p><?php echo e(__('rmaster_why_desc')); ?></p>
            </div>

            <div class="cp-benefits-grid">
                <div class="cp-security-card">
                    <div class="cp-security-icon"><i class="fas fa-sitemap"></i></div>
                    <h4><?php echo e(__('rmaster_adv_twotier_title')); ?></h4>
                    <p><?php echo e(__('rmaster_adv_twotier_desc')); ?></p>
                </div>
                <div class="cp-security-card">
                    <div class="cp-security-icon icon-green"><i class="fas fa-users"></i></div>
                    <h4><?php echo e(__('rmaster_adv_unlimited_title')); ?></h4>
                    <p><?php echo e(__('rmaster_adv_unlimited_desc')); ?></p>
                </div>
                <div class="cp-security-card">
                    <div class="cp-security-icon icon-purple"><i class="fas fa-palette"></i></div>
                    <h4><?php echo e(__('rmaster_adv_wl_title')); ?></h4>
                    <p><?php echo e(__('rmaster_adv_wl_desc')); ?></p>
                </div>
                <div class="cp-security-card">
                    <div class="cp-security-icon icon-amber"><i class="fas fa-chart-line"></i></div>
                    <h4><?php echo e(__('rmaster_adv_oversight_title')); ?></h4>
                    <p><?php echo e(__('rmaster_adv_oversight_desc')); ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ BENTO FEATURES ═══════════════ -->
    <section class="bento-features reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag"><?php echo e(__('rmaster_feat_tag')); ?></div>
                <h2><?php echo __('rmaster_feat_title'); ?></h2>
                <p><?php echo e(__('rmaster_feat_desc')); ?></p>
            </div>

            <div class="bento-grid">
                <div class="bento-card bento-sm bento-featured">
                    <div class="bento-card-icon"><i class="fas fa-layer-group"></i></div>
                    <h4><?php echo e(__('rmaster_feat_tiered_title')); ?></h4>
                    <p><?php echo e(__('rmaster_feat_tiered_desc')); ?></p>
                </div>

                <div class="bento-card bento-sm">
                    <div class="bento-card-icon icon-green"><i class="fas fa-chart-pie"></i></div>
                    <h4><?php echo e(__('rmaster_feat_distro_title')); ?></h4>
                    <p><?php echo e(__('rmaster_feat_distro_desc')); ?></p>
                </div>

                <div class="bento-card bento-sm">
                    <div class="bento-card-icon icon-purple"><i class="fas fa-lock"></i></div>
                    <h4><?php echo e(__('rmaster_feat_ssl_title')); ?></h4>
                    <p><?php echo e(__('rmaster_feat_ssl_desc')); ?></p>
                </div>
                <div class="bento-card bento-sm">
                    <div class="bento-card-icon icon-amber"><i class="fas fa-cloud-download-alt"></i></div>
                    <h4><?php echo e(__('rmaster_feat_backup_title')); ?></h4>
                    <p><?php echo e(__('rmaster_feat_backup_desc')); ?></p>
                </div>
                <div class="bento-card bento-sm">
                    <div class="bento-card-icon"><i class="fas fa-bolt"></i></div>
                    <h4><?php echo e(__('rmaster_feat_ls_title')); ?></h4>
                    <p><?php echo e(__('rmaster_feat_ls_desc')); ?></p>
                </div>
                <div class="bento-card bento-sm">
                    <div class="bento-card-icon icon-green"><i class="fas fa-robot"></i></div>
                    <h4><?php echo e(__('rmaster_feat_imunify_title')); ?></h4>
                    <p><?php echo e(__('rmaster_feat_imunify_desc')); ?></p>
                </div>
                <div class="bento-card bento-sm">
                    <div class="bento-card-icon icon-amber"><i class="fas fa-plug"></i></div>
                    <h4><?php echo e(__('rmaster_feat_plugin_title')); ?></h4>
                    <p><?php echo e(__('rmaster_feat_plugin_desc')); ?></p>
                </div>
            </div>

            <div class="article-callout" style="margin-top: 24px;">
                <i class="fas fa-info-circle"></i>
                <div>
                    <?php echo __('rmaster_feat_callout'); ?>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ WHY MASTER IS POWERFUL ═══════════════ -->
    <section class="ms-power reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag"><?php echo e(__('rmaster_power_tag')); ?></div>
                <h2><?php echo e(__('rmaster_power_title')); ?></h2>
                <p><?php echo e(__('rmaster_power_desc')); ?></p>
            </div>

            <div class="cp-benefits-grid">
                <div class="cp-security-card">
                    <div class="cp-security-icon"><i class="fas fa-users-cog"></i></div>
                    <h4><?php echo e(__('rmaster_power_create_title')); ?></h4>
                    <p><?php echo e(__('rmaster_power_create_desc')); ?></p>
                </div>
                <div class="cp-security-card">
                    <div class="cp-security-icon icon-green"><i class="fas fa-building"></i></div>
                    <h4><?php echo e(__('rmaster_power_multi_title')); ?></h4>
                    <p><?php echo e(__('rmaster_power_multi_desc')); ?></p>
                </div>
                <div class="cp-security-card">
                    <div class="cp-security-icon icon-purple"><i class="fas fa-terminal"></i></div>
                    <h4><?php echo e(__('rmaster_power_whm_title')); ?></h4>
                    <p><?php echo e(__('rmaster_power_whm_desc')); ?></p>
                </div>
                <div class="cp-security-card">
                    <div class="cp-security-icon icon-amber"><i class="fas fa-palette"></i></div>
                    <h4><?php echo e(__('rmaster_power_wl_title')); ?></h4>
                    <p><?php echo e(__('rmaster_power_wl_desc')); ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ HIERARCHY EXPLANATION ═══════════════ -->
    <section class="rs-hierarchy reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag"><?php echo e(__('reseller_tiers_tag')); ?></div>
                <h2><?php echo e(__('rmaster_tiers_title')); ?></h2>
                <p><?php echo e(__('rmaster_tiers_desc')); ?></p>
            </div>

            <div class="rs-tiers-grid">
                <div class="rs-tier-card">
                    <div class="rs-tier-icon"><i class="fas fa-user-tie"></i></div>
                    <span class="rs-tier-level"><?php echo e(__('rmaster_tier_cpanel_level')); ?></span>
                    <h4><?php echo e(__('reseller_cpanel_breadcrumb')); ?></h4>
                    <p><?php echo e(__('rmaster_tier_cpanel_desc')); ?></p>
                    <ul class="rs-tier-perks">
                        <li><i class="fas fa-check"></i> <?php echo e(__('rcpanel_tier_cpanel_p1')); ?></li>
                        <li><i class="fas fa-check"></i> <?php echo e(__('rcpanel_tier_cpanel_p2')); ?></li>
                        <li><i class="fas fa-check"></i> <?php echo e(__('rcpanel_tier_cpanel_p3')); ?></li>
                    </ul>
                    <a href="<?php echo e(SITE_URL); ?>/cpanel-reseller/" class="rs-tier-link"><?php echo e(__('common_learn_more')); ?> <i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="rs-tier-card rs-tier-active">
                    <div class="rs-tier-badge"><?php echo e(__('reseller_you_are_here')); ?></div>
                    <div class="rs-tier-icon icon-green"><i class="fas fa-crown"></i></div>
                    <span class="rs-tier-level"><?php echo e(__('rmaster_tier_master_level')); ?></span>
                    <h4><?php echo e(__('reseller_master_breadcrumb')); ?></h4>
                    <p><?php echo e(__('rmaster_tier_master_desc')); ?></p>
                    <ul class="rs-tier-perks">
                        <li><i class="fas fa-check"></i> <?php echo e(__('rmaster_tier_master_p1')); ?></li>
                        <li><i class="fas fa-check"></i> <?php echo e(__('rmaster_tier_master_p2')); ?></li>
                        <li><i class="fas fa-check"></i> <?php echo e(__('rmaster_tier_master_p3')); ?></li>
                    </ul>
                </div>
                <div class="rs-tier-card">
                    <div class="rs-tier-icon icon-purple"><i class="fas fa-gem"></i></div>
                    <span class="rs-tier-level"><?php echo e(__('rmaster_tier_alpha_level')); ?></span>
                    <h4><?php echo e(__('reseller_alpha_breadcrumb')); ?></h4>
                    <p><?php echo e(__('rmaster_tier_alpha_desc')); ?></p>
                    <ul class="rs-tier-perks">
                        <li><i class="fas fa-check"></i> <?php echo e(__('rmaster_tier_alpha_p1')); ?></li>
                        <li><i class="fas fa-check"></i> <?php echo e(__('rmaster_tier_alpha_p2')); ?></li>
                        <li><i class="fas fa-check"></i> <?php echo e(__('rmaster_tier_alpha_p3')); ?></li>
                    </ul>
                    <a href="<?php echo e(SITE_URL); ?>/alpha-reseller/" class="rs-tier-link"><?php echo e(__('common_learn_more')); ?> <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ GLOBAL INFRASTRUCTURE (compact) ═══════════════ -->
<?php
$dc_heading = __('rmaster_dc_heading');
$dc_desc = __('rmaster_dc_desc');
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
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('rmaster_faq_g1_q')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('rmaster_faq_g1_a')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('rmaster_faq_g2_q')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('rmaster_faq_g2_a')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('rmaster_faq_g3_q')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('rmaster_faq_g3_a')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('rmaster_faq_g4_q')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('rmaster_faq_g4_a')); ?></p></div></div>
                    </div>

                    <div class="faq-panel" id="faq-technical">
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('rmaster_faq_t1_q')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('rmaster_faq_t1_a')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('rmaster_faq_t2_q')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('rmaster_faq_t2_a')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('rmaster_faq_t3_q')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('rmaster_faq_t3_a')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('rmaster_faq_t4_q')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('rmaster_faq_t4_a')); ?></p></div></div>
                    </div>

                    <div class="faq-panel" id="faq-billing">
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('rmaster_faq_b1_q')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('rmaster_faq_b1_a')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('rmaster_faq_b2_q')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('rmaster_faq_b2_a')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('rmaster_faq_b3_q')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('rmaster_faq_b3_a')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('rmaster_faq_b4_q')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('rmaster_faq_b4_a')); ?></p></div></div>
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
                    <p class="why-us-desc"><?php echo e(__('rmaster_why_desc')); ?></p>
                    <a href="#plans" class="btn-primary"><?php echo e(__('common_get_started')); ?> <i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="why-us-grid">
                    <div class="why-us-card">
                        <div class="why-us-card-icon"><i class="fas fa-headset"></i></div>
                        <h4><?php echo e(__('rmaster_why_support_title')); ?></h4>
                        <p><?php echo e(__('rmaster_why_support_desc')); ?></p>
                    </div>
                    <div class="why-us-card">
                        <div class="why-us-card-icon icon-green"><i class="fas fa-tachometer-alt"></i></div>
                        <h4><?php echo e(__('rmaster_why_perf_title')); ?></h4>
                        <p><?php echo e(__('rmaster_why_perf_desc')); ?></p>
                    </div>
                    <div class="why-us-card">
                        <div class="why-us-card-icon icon-purple"><i class="fas fa-shield-alt"></i></div>
                        <h4><?php echo e(__('rmaster_why_secure_title')); ?></h4>
                        <p><?php echo e(__('rmaster_why_secure_desc')); ?></p>
                    </div>
                    <div class="why-us-card">
                        <div class="why-us-card-icon icon-amber"><i class="fas fa-globe"></i></div>
                        <h4><?php echo e(__('rmaster_why_dc_title')); ?></h4>
                        <p><?php echo e(__('rmaster_why_dc_desc')); ?></p>
                    </div>
                    <div class="why-us-card">
                        <div class="why-us-card-icon icon-green"><i class="fas fa-tags"></i></div>
                        <h4><?php echo e(__('rmaster_why_price_title')); ?></h4>
                        <p><?php echo e(__('rmaster_why_price_desc')); ?></p>
                    </div>
                    <div class="why-us-card">
                        <div class="why-us-card-icon icon-purple"><i class="fas fa-level-up-alt"></i></div>
                        <h4><?php echo e(__('rmaster_why_upgrade_title')); ?></h4>
                        <p><?php echo e(__('rmaster_why_upgrade_desc')); ?></p>
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
                <div class="promo-cta-icon"><i class="fas fa-crown"></i></div>
                <h2><?php echo e(__('rmaster_cta_title')); ?></h2>
                <p><?php echo e(__('rmaster_cta_desc')); ?></p>
                <a href="#plans" class="btn-primary"><?php echo e(__('common_view_plans')); ?> <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
