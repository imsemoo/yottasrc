<?php
/**
 * YottaSrc — cPanel Reseller Hosting
 * ====================================
 * Reseller hosting page for starting your own hosting business with WHM.
 */
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/topbar.php';
?>

    <!-- ═══════════════ HERO ═══════════════ -->
    <section class="page-hero rs-hero">
        <div class="container">
            <div class="page-hero-split">
                <div class="page-hero-content">
                    <div class="page-breadcrumb">
                        <a href="<?php echo e(SITE_URL); ?>/"><?php echo e(__('breadcrumb_home')); ?></a>
                        <i class="fas fa-chevron-right"></i>
                        <a href="<?php echo e(SITE_URL); ?>/cpanel-reseller/"><?php echo e(__('reseller_breadcrumb')); ?></a>
                        <i class="fas fa-chevron-right"></i>
                        <span><?php echo e(__('reseller_cpanel_breadcrumb')); ?></span>
                    </div>
                    <h1><?php echo __('reseller_cpanel_title'); ?></h1>
                    <p class="page-hero-desc">
                        <?php echo e(__('reseller_cpanel_desc')); ?>
                    </p>
                    <div class="page-hero-ctas">
                        <a href="#plans" class="btn-primary"><?php echo e(__('common_view_plans')); ?> <i class="fas fa-arrow-down"></i></a>
                        <a href="<?php echo e(SITE_URL); ?>/contact-us/" class="btn-secondary"><i class="fas fa-headset"></i> <?php echo e(__('common_talk_to_sales')); ?></a>
                    </div>
                    <div class="page-hero-badges">
                        <div class="hero-badge-item"><i class="fas fa-check"></i> <?php echo e(__('rcpanel_badge_brand')); ?></div>
                        <div class="hero-badge-item"><i class="fas fa-check"></i> <?php echo e(__('rcpanel_badge_whm')); ?></div>
                        <div class="hero-badge-item"><i class="fas fa-check"></i> <?php echo e(__('rcpanel_badge_whitelabel')); ?></div>
                        <div class="hero-badge-item"><i class="fas fa-check"></i> <?php echo e(__('rcpanel_badge_locations')); ?></div>
                    </div>
                </div>
                <div class="page-hero-visual">
                    <svg viewBox="0 0 440 400" fill="none" xmlns="http://www.w3.org/2000/svg" class="hero-illustration" aria-label="WHM reseller dashboard illustration">
                        <!-- Window Frame -->
                        <rect x="20" y="20" width="400" height="360" rx="16" fill="var(--bg-card)" stroke="var(--border-primary)" stroke-width="1.5"/>
                        <rect x="20" y="20" width="400" height="38" rx="16" fill="var(--bg-tertiary)"/>
                        <rect x="20" y="42" width="400" height="16" fill="var(--bg-tertiary)"/>
                        <circle cx="42" cy="39" r="5" fill="var(--brand-error)" opacity="0.6"/>
                        <circle cx="58" cy="39" r="5" fill="var(--brand-warning)" opacity="0.6"/>
                        <circle cx="74" cy="39" r="5" fill="var(--brand-secondary)" opacity="0.6"/>
                        <text x="220" y="44" text-anchor="middle" fill="var(--text-tertiary)" font-size="11" font-family="var(--font-mono)" font-weight="600" opacity="0.6">WHM — Reseller Dashboard</text>

                        <!-- Sidebar -->
                        <rect x="20" y="58" width="100" height="322" fill="var(--bg-tertiary)" opacity="0.5"/>
                        <line x1="120" y1="58" x2="120" y2="380" stroke="var(--border-primary)" stroke-width="1"/>
                        <rect x="32" y="72" width="76" height="8" rx="3" fill="var(--brand-primary)" opacity="0.18"/>
                        <rect x="32" y="92" width="60" height="6" rx="3" fill="var(--text-tertiary)" opacity="0.12"/>
                        <rect x="32" y="108" width="68" height="6" rx="3" fill="var(--text-tertiary)" opacity="0.12"/>
                        <rect x="32" y="124" width="52" height="6" rx="3" fill="var(--text-tertiary)" opacity="0.12"/>
                        <rect x="32" y="140" width="72" height="6" rx="3" fill="var(--text-tertiary)" opacity="0.12"/>

                        <!-- Client accounts section header -->
                        <text x="134" y="82" fill="var(--brand-primary)" font-size="9" font-family="var(--font-display)" font-weight="700" letter-spacing="0.8" opacity="0.7">CLIENT ACCOUNTS</text>
                        <line x1="134" y1="88" x2="406" y2="88" stroke="var(--border-primary)" stroke-width="0.6"/>

                        <!-- Account Row 1 -->
                        <rect x="134" y="96" width="272" height="44" rx="8" fill="var(--bg-tertiary)"/>
                        <circle cx="156" cy="118" r="12" fill="var(--brand-primary)" opacity="0.15"/>
                        <text x="156" y="122" text-anchor="middle" fill="var(--brand-primary)" font-size="10" font-family="var(--font-body)" font-weight="700" opacity="0.7">A</text>
                        <text x="176" y="113" fill="var(--text-secondary)" font-size="9" font-family="var(--font-body)" font-weight="600" opacity="0.7">client-alpha.com</text>
                        <text x="176" y="127" fill="var(--text-tertiary)" font-size="7.5" font-family="var(--font-mono)" opacity="0.5">2.1 GB / 10 GB · Active</text>
                        <rect x="352" y="108" width="42" height="18" rx="9" fill="var(--brand-secondary)" opacity="0.15"/>
                        <text x="373" y="120" text-anchor="middle" fill="var(--brand-secondary)" font-size="7.5" font-family="var(--font-mono)" font-weight="600" opacity="0.7">Active</text>

                        <!-- Account Row 2 -->
                        <rect x="134" y="148" width="272" height="44" rx="8" fill="var(--bg-tertiary)"/>
                        <circle cx="156" cy="170" r="12" fill="var(--brand-secondary)" opacity="0.15"/>
                        <text x="156" y="174" text-anchor="middle" fill="var(--brand-secondary)" font-size="10" font-family="var(--font-body)" font-weight="700" opacity="0.7">B</text>
                        <text x="176" y="165" fill="var(--text-secondary)" font-size="9" font-family="var(--font-body)" font-weight="600" opacity="0.7">beta-hosting.net</text>
                        <text x="176" y="179" fill="var(--text-tertiary)" font-size="7.5" font-family="var(--font-mono)" opacity="0.5">5.4 GB / 25 GB · Active</text>
                        <rect x="352" y="160" width="42" height="18" rx="9" fill="var(--brand-secondary)" opacity="0.15"/>
                        <text x="373" y="172" text-anchor="middle" fill="var(--brand-secondary)" font-size="7.5" font-family="var(--font-mono)" font-weight="600" opacity="0.7">Active</text>

                        <!-- Account Row 3 -->
                        <rect x="134" y="200" width="272" height="44" rx="8" fill="var(--bg-tertiary)"/>
                        <circle cx="156" cy="222" r="12" fill="var(--brand-accent)" opacity="0.15"/>
                        <text x="156" y="226" text-anchor="middle" fill="var(--brand-accent)" font-size="10" font-family="var(--font-body)" font-weight="700" opacity="0.7">C</text>
                        <text x="176" y="217" fill="var(--text-secondary)" font-size="9" font-family="var(--font-body)" font-weight="600" opacity="0.7">gamma-shop.io</text>
                        <text x="176" y="231" fill="var(--text-tertiary)" font-size="7.5" font-family="var(--font-mono)" opacity="0.5">8.9 GB / 40 GB · Active</text>
                        <rect x="352" y="212" width="42" height="18" rx="9" fill="var(--brand-secondary)" opacity="0.15"/>
                        <text x="373" y="224" text-anchor="middle" fill="var(--brand-secondary)" font-size="7.5" font-family="var(--font-mono)" font-weight="600" opacity="0.7">Active</text>

                        <!-- Summary stats bar -->
                        <rect x="134" y="260" width="272" height="52" rx="10" fill="var(--bg-card)" stroke="var(--border-primary)" stroke-width="0.8"/>
                        <text x="168" y="282" text-anchor="middle" fill="var(--brand-primary)" font-size="16" font-family="var(--font-display)" font-weight="800" opacity="0.8">12</text>
                        <text x="168" y="300" text-anchor="middle" fill="var(--text-tertiary)" font-size="7" font-family="var(--font-mono)" opacity="0.5">Accounts</text>
                        <line x1="218" y1="270" x2="218" y2="305" stroke="var(--border-primary)" stroke-width="0.6"/>
                        <text x="256" y="282" text-anchor="middle" fill="var(--brand-secondary)" font-size="16" font-family="var(--font-display)" font-weight="800" opacity="0.8">40 GB</text>
                        <text x="256" y="300" text-anchor="middle" fill="var(--text-tertiary)" font-size="7" font-family="var(--font-mono)" opacity="0.5">Disk Used</text>
                        <line x1="306" y1="270" x2="306" y2="305" stroke="var(--border-primary)" stroke-width="0.6"/>
                        <text x="348" y="282" text-anchor="middle" fill="var(--brand-accent)" font-size="16" font-family="var(--font-display)" font-weight="800" opacity="0.8">99.9%</text>
                        <text x="348" y="300" text-anchor="middle" fill="var(--text-tertiary)" font-size="7" font-family="var(--font-mono)" opacity="0.5">Uptime</text>

                        <!-- Sidebar account count -->
                        <text x="32" y="180" fill="var(--text-tertiary)" font-size="7" font-family="var(--font-mono)" opacity="0.5">ACCOUNTS</text>
                        <rect x="32" y="186" width="76" height="5" rx="2.5" fill="var(--bg-card)"/>
                        <rect x="32" y="186" width="36" height="5" rx="2.5" fill="var(--brand-primary)" opacity="0.4"/>
                        <text x="32" y="207" fill="var(--text-tertiary)" font-size="7" font-family="var(--font-mono)" opacity="0.5">DISK</text>
                        <rect x="32" y="213" width="76" height="5" rx="2.5" fill="var(--bg-card)"/>
                        <rect x="32" y="213" width="52" height="5" rx="2.5" fill="var(--brand-secondary)" opacity="0.4"/>

                        <!-- + Create Account button -->
                        <rect x="134" y="326" width="120" height="32" rx="8" fill="var(--brand-primary)" opacity="0.12" stroke="var(--brand-primary)" stroke-width="0.8" stroke-dasharray="4 2"/>
                        <text x="194" y="346" text-anchor="middle" fill="var(--brand-primary)" font-size="10" font-family="var(--font-body)" font-weight="600" opacity="0.6">+ Create Account</text>

                        <!-- Floating badges -->
                        <rect x="350" y="2" width="86" height="36" rx="10" fill="var(--bg-card)" stroke="var(--border-primary)" stroke-width="1">
                            <animate attributeName="y" values="2;8;2" dur="5s" repeatCount="indefinite"/>
                        </rect>
                        <text x="370" y="17" fill="var(--text-tertiary)" font-size="7" font-family="var(--font-mono)" font-weight="600" opacity="0.6">
                            CLIENTS
                            <animate attributeName="y" values="17;23;17" dur="5s" repeatCount="indefinite"/>
                        </text>
                        <text x="370" y="31" fill="var(--brand-secondary)" font-size="13" font-family="var(--font-display)" font-weight="800" opacity="0.8">
                            12 Active
                            <animate attributeName="y" values="31;37;31" dur="5s" repeatCount="indefinite"/>
                        </text>

                        <rect x="0" y="320" width="82" height="36" rx="10" fill="var(--bg-card)" stroke="var(--border-primary)" stroke-width="1">
                            <animate attributeName="y" values="320;314;320" dur="6s" repeatCount="indefinite"/>
                        </rect>
                        <text x="16" y="335" fill="var(--text-tertiary)" font-size="7" font-family="var(--font-mono)" font-weight="600" opacity="0.6">
                            WHM
                            <animate attributeName="y" values="335;329;335" dur="6s" repeatCount="indefinite"/>
                        </text>
                        <text x="16" y="349" fill="var(--brand-primary)" font-size="13" font-family="var(--font-display)" font-weight="800" opacity="0.8">
                            Included
                            <animate attributeName="y" values="349;343;349" dur="6s" repeatCount="indefinite"/>
                        </text>

                        <circle cx="8" cy="50" r="3" fill="var(--brand-primary)" opacity="0.25">
                            <animate attributeName="opacity" values="0.25;0.6;0.25" dur="3s" repeatCount="indefinite"/>
                        </circle>
                        <circle cx="432" cy="200" r="3" fill="var(--brand-secondary)" opacity="0.25">
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

    <!-- ═══════════════ PRICING PLANS (reused from cPanel Hosting) ═══════════════ -->
    <section class="plans reveal" id="plans">
        <div class="container">
            <div class="section-header">
                <div class="section-tag"><?php echo e(__('rcpanel_plans_tag')); ?></div>
                <h2><?php echo e(__('rcpanel_plans_title')); ?></h2>
                <p><?php echo e(__('rcpanel_plans_desc')); ?></p>
            </div>

            <div class="plans-panel active" data-tab="cpanel-reseller">
                <div class="swiper plans-swiper">
                    <div class="swiper-wrapper">
                        <!-- Starter -->
                        <div class="swiper-slide"><div class="plan-card">
                            <div class="plan-head"><div class="plan-name">Starter</div><span class="plan-save">Save 75%</span></div>
                            <div class="plan-target"><?php echo e(__('rcpanel_target_starter')); ?></div>
                            <div class="plan-price">
                                <span class="old-price">€13.99</span>
                                <span class="current-price"><span class="currency">€</span><span class="amount">3.49</span><span class="period">EUR / mo</span></span>
                            </div>
                            <div class="plan-renewal"><i class="fas fa-check"></i> <?php echo e(__('reseller_same_renewal')); ?></div>
                            <button class="plan-cta" data-href="<?php echo e(CP_URL); ?>/order/reseller-hosting/starter"><?php echo e(__('common_choose_plan')); ?></button>
                            <div class="plan-resources">
                                <div class="plan-res"><i class="fas fa-hdd"></i><span class="res-val">15 GB</span><span class="res-label"><?php echo e(__('rcpanel_res_nvme')); ?></span></div>
                                <div class="plan-res"><i class="fas fa-wifi"></i><span class="res-val">Unlimited</span><span class="res-label"><?php echo e(__('rcpanel_res_bw')); ?></span></div>
                                <div class="plan-res"><i class="fas fa-users"></i><span class="res-val">15</span><span class="res-label"><?php echo e(__('rcpanel_res_accounts')); ?></span></div>
                                <div class="plan-res"><i class="fas fa-database"></i><span class="res-val">15 GB</span><span class="res-label"><?php echo e(__('rcpanel_res_mysql')); ?></span></div>
                            </div>
                            <div class="plan-divider"><span><?php echo e(__('reseller_included')); ?></span></div>
                            <ul class="plan-features">
                                <li><i class="fas fa-users-cog"></i> <?php echo e(__('rcpanel_feat_whm')); ?></li>
                                <li><i class="fas fa-lock"></i> <?php echo e(__('rcpanel_feat_ssl')); ?></li>
                                <li><i class="fas fa-server"></i> <?php echo e(__('rcpanel_feat_ns')); ?></li>
                                <li><i class="fas fa-palette"></i> <?php echo e(__('rcpanel_feat_wl')); ?></li>
                                <li><i class="fas fa-bolt"></i> <?php echo e(__('rcpanel_feat_ls')); ?></li>
                                <li><i class="fas fa-shield-alt"></i> <?php echo e(__('rcpanel_feat_imunify')); ?></li>
                                <li><i class="fas fa-map-marker-alt"></i> <?php echo e(__('rcpanel_feat_locations')); ?></li>
                            </ul>
                        </div></div>

                        <!-- Essential (Popular) -->
                        <div class="swiper-slide"><div class="plan-card popular">
                            <div class="plan-badge"><?php echo e(__('reseller_most_popular')); ?></div>
                            <div class="plan-head"><div class="plan-name">Essential</div><span class="plan-save">Save 40%</span></div>
                            <div class="plan-target"><?php echo e(__('rcpanel_target_essential')); ?></div>
                            <div class="plan-price">
                                <span class="old-price">€10.82</span>
                                <span class="current-price"><span class="currency">€</span><span class="amount">6.49</span><span class="period">EUR / mo</span></span>
                            </div>
                            <div class="plan-renewal"><i class="fas fa-check"></i> <?php echo e(__('reseller_same_renewal')); ?></div>
                            <button class="plan-cta" data-href="<?php echo e(CP_URL); ?>/order/reseller-hosting/essential"><?php echo e(__('common_choose_plan')); ?></button>
                            <div class="plan-resources">
                                <div class="plan-res"><i class="fas fa-hdd"></i><span class="res-val">40 GB</span><span class="res-label"><?php echo e(__('rcpanel_res_nvme')); ?></span></div>
                                <div class="plan-res"><i class="fas fa-wifi"></i><span class="res-val">Unlimited</span><span class="res-label"><?php echo e(__('rcpanel_res_bw')); ?></span></div>
                                <div class="plan-res"><i class="fas fa-users"></i><span class="res-val">Unlimited</span><span class="res-label"><?php echo e(__('rcpanel_res_accounts')); ?></span></div>
                                <div class="plan-res"><i class="fas fa-database"></i><span class="res-val">40 GB</span><span class="res-label"><?php echo e(__('rcpanel_res_mysql')); ?></span></div>
                            </div>
                            <div class="plan-divider"><span><?php echo e(__('reseller_included')); ?></span></div>
                            <ul class="plan-features">
                                <li><i class="fas fa-users-cog"></i> <?php echo e(__('rcpanel_feat_whm')); ?></li>
                                <li><i class="fas fa-lock"></i> <?php echo e(__('rcpanel_feat_ssl')); ?></li>
                                <li><i class="fas fa-server"></i> <?php echo e(__('rcpanel_feat_ns')); ?></li>
                                <li><i class="fas fa-palette"></i> <?php echo e(__('rcpanel_feat_wl')); ?></li>
                                <li><i class="fas fa-bolt"></i> <?php echo e(__('rcpanel_feat_ls')); ?></li>
                                <li><i class="fas fa-shield-alt"></i> <?php echo e(__('rcpanel_feat_imunify')); ?></li>
                                <li><i class="fas fa-map-marker-alt"></i> <?php echo e(__('rcpanel_feat_locations')); ?></li>
                            </ul>
                        </div></div>

                        <!-- Advance -->
                        <div class="swiper-slide"><div class="plan-card">
                            <div class="plan-head"><div class="plan-name">Advance</div><span class="plan-save">Save 15%</span></div>
                            <div class="plan-target"><?php echo e(__('rcpanel_target_advance')); ?></div>
                            <div class="plan-price">
                                <span class="old-price">€15.28</span>
                                <span class="current-price"><span class="currency">€</span><span class="amount">12.99</span><span class="period">EUR / mo</span></span>
                            </div>
                            <div class="plan-renewal"><i class="fas fa-check"></i> <?php echo e(__('reseller_same_renewal')); ?></div>
                            <button class="plan-cta" data-href="<?php echo e(CP_URL); ?>/order/reseller-hosting/advance"><?php echo e(__('common_choose_plan')); ?></button>
                            <div class="plan-resources">
                                <div class="plan-res"><i class="fas fa-hdd"></i><span class="res-val">80 GB</span><span class="res-label"><?php echo e(__('rcpanel_res_nvme')); ?></span></div>
                                <div class="plan-res"><i class="fas fa-wifi"></i><span class="res-val">Unlimited</span><span class="res-label"><?php echo e(__('rcpanel_res_bw')); ?></span></div>
                                <div class="plan-res"><i class="fas fa-users"></i><span class="res-val">Unlimited</span><span class="res-label"><?php echo e(__('rcpanel_res_accounts')); ?></span></div>
                                <div class="plan-res"><i class="fas fa-database"></i><span class="res-val">80 GB</span><span class="res-label"><?php echo e(__('rcpanel_res_mysql')); ?></span></div>
                            </div>
                            <div class="plan-divider"><span><?php echo e(__('reseller_included')); ?></span></div>
                            <ul class="plan-features">
                                <li><i class="fas fa-users-cog"></i> <?php echo e(__('rcpanel_feat_whm')); ?></li>
                                <li><i class="fas fa-lock"></i> <?php echo e(__('rcpanel_feat_ssl')); ?></li>
                                <li><i class="fas fa-server"></i> <?php echo e(__('rcpanel_feat_ns')); ?></li>
                                <li><i class="fas fa-palette"></i> <?php echo e(__('rcpanel_feat_wl')); ?></li>
                                <li><i class="fas fa-bolt"></i> <?php echo e(__('rcpanel_feat_ls')); ?></li>
                                <li><i class="fas fa-shield-alt"></i> <?php echo e(__('rcpanel_feat_imunify')); ?></li>
                                <li><i class="fas fa-map-marker-alt"></i> <?php echo e(__('rcpanel_feat_locations')); ?></li>
                            </ul>
                        </div></div>

                        <!-- Pro -->
                        <div class="swiper-slide"><div class="plan-card">
                            <div class="plan-head"><div class="plan-name">Pro</div><span class="plan-save">Save 45%</span></div>
                            <div class="plan-target"><?php echo e(__('rcpanel_target_pro')); ?></div>
                            <div class="plan-price">
                                <span class="old-price">€43.62</span>
                                <span class="current-price"><span class="currency">€</span><span class="amount">23.99</span><span class="period">EUR / mo</span></span>
                            </div>
                            <div class="plan-renewal"><i class="fas fa-check"></i> <?php echo e(__('reseller_same_renewal')); ?></div>
                            <button class="plan-cta" data-href="<?php echo e(CP_URL); ?>/order/reseller-hosting/pro"><?php echo e(__('common_choose_plan')); ?></button>
                            <div class="plan-resources">
                                <div class="plan-res"><i class="fas fa-hdd"></i><span class="res-val">120 GB</span><span class="res-label"><?php echo e(__('rcpanel_res_nvme')); ?></span></div>
                                <div class="plan-res"><i class="fas fa-wifi"></i><span class="res-val">Unlimited</span><span class="res-label"><?php echo e(__('rcpanel_res_bw')); ?></span></div>
                                <div class="plan-res"><i class="fas fa-users"></i><span class="res-val">Unlimited</span><span class="res-label"><?php echo e(__('rcpanel_res_accounts')); ?></span></div>
                                <div class="plan-res"><i class="fas fa-database"></i><span class="res-val">120 GB</span><span class="res-label"><?php echo e(__('rcpanel_res_mysql')); ?></span></div>
                            </div>
                            <div class="plan-divider"><span><?php echo e(__('reseller_included')); ?></span></div>
                            <ul class="plan-features">
                                <li><i class="fas fa-users-cog"></i> <?php echo e(__('rcpanel_feat_whm')); ?></li>
                                <li><i class="fas fa-lock"></i> <?php echo e(__('rcpanel_feat_ssl')); ?></li>
                                <li><i class="fas fa-server"></i> <?php echo e(__('rcpanel_feat_ns')); ?></li>
                                <li><i class="fas fa-palette"></i> <?php echo e(__('rcpanel_feat_wl')); ?></li>
                                <li><i class="fas fa-bolt"></i> <?php echo e(__('rcpanel_feat_ls')); ?></li>
                                <li><i class="fas fa-shield-alt"></i> <?php echo e(__('rcpanel_feat_imunify')); ?></li>
                                <li><i class="fas fa-map-marker-alt"></i> <?php echo e(__('rcpanel_feat_locations')); ?></li>
                            </ul>
                        </div></div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>

            <div class="pricing-custom">
                <p><?php echo __('rcpanel_pricing_custom', ['master_url' => e(SITE_URL) . '/master-reseller/', 'alpha_url' => e(SITE_URL) . '/alpha-reseller/']); ?></p>
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

    <!-- ═══════════════ RESELLER BUSINESS ADVANTAGES ═══════════════ -->
    <section class="cp-benefits reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag"><?php echo e(__('rcpanel_why_resell_tag')); ?></div>
                <h2><?php echo e(__('rcpanel_why_resell_title')); ?></h2>
                <p><?php echo e(__('rcpanel_why_resell_desc')); ?></p>
            </div>

            <div class="cp-benefits-grid">
                <div class="cp-security-card">
                    <div class="cp-security-icon"><i class="fas fa-hand-holding-usd"></i></div>
                    <h4><?php echo e(__('rcpanel_adv_pricing_title')); ?></h4>
                    <p><?php echo e(__('rcpanel_adv_pricing_desc')); ?></p>
                </div>
                <div class="cp-security-card">
                    <div class="cp-security-icon icon-green"><i class="fas fa-users-cog"></i></div>
                    <h4><?php echo e(__('rcpanel_adv_whm_title')); ?></h4>
                    <p><?php echo e(__('rcpanel_adv_whm_desc')); ?></p>
                </div>
                <div class="cp-security-card">
                    <div class="cp-security-icon icon-purple"><i class="fas fa-chart-line"></i></div>
                    <h4><?php echo e(__('rcpanel_adv_scale_title')); ?></h4>
                    <p><?php echo e(__('rcpanel_adv_scale_desc')); ?></p>
                </div>
                <div class="cp-security-card">
                    <div class="cp-security-icon icon-amber"><i class="fas fa-headset"></i></div>
                    <h4><?php echo e(__('rcpanel_adv_backend_title')); ?></h4>
                    <p><?php echo e(__('rcpanel_adv_backend_desc')); ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ WHITE-LABEL FEATURES ═══════════════ -->
    <section class="bento-features reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag"><?php echo e(__('rcpanel_wl_tag')); ?></div>
                <h2><?php echo e(__('rcpanel_wl_title')); ?></h2>
                <p><?php echo e(__('rcpanel_wl_desc')); ?></p>
            </div>

            <div class="bento-grid">
                <div class="bento-card bento-sm">
                    <div class="bento-card-icon"><i class="fas fa-palette"></i></div>
                    <h4><?php echo e(__('rcpanel_wl_complete_title')); ?></h4>
                    <p><?php echo e(__('rcpanel_wl_complete_desc')); ?></p>
                </div>

                <div class="bento-card bento-sm">
                    <div class="bento-card-icon icon-green"><i class="fas fa-users-cog"></i></div>
                    <h4><?php echo e(__('rcpanel_wl_mgmt_title')); ?></h4>
                    <p><?php echo e(__('rcpanel_wl_mgmt_desc')); ?></p>
                </div>

                <div class="bento-card bento-sm">
                    <div class="bento-card-icon icon-purple"><i class="fas fa-hdd"></i></div>
                    <h4><?php echo e(__('rcpanel_wl_nvme_title')); ?></h4>
                    <p><?php echo e(__('rcpanel_wl_nvme_desc')); ?></p>
                </div>
                <div class="bento-card bento-sm">
                    <div class="bento-card-icon icon-amber"><i class="fas fa-shield-alt"></i></div>
                    <h4><?php echo e(__('rcpanel_wl_imunify_title')); ?></h4>
                    <p><?php echo e(__('rcpanel_wl_imunify_desc')); ?></p>
                </div>
                <div class="bento-card bento-sm">
                    <div class="bento-card-icon"><i class="fas fa-cloud-download-alt"></i></div>
                    <h4><?php echo e(__('rcpanel_wl_backup_title')); ?></h4>
                    <p><?php echo e(__('rcpanel_wl_backup_desc')); ?></p>
                </div>
                <div class="bento-card bento-sm">
                    <div class="bento-card-icon icon-green"><i class="fas fa-lock"></i></div>
                    <h4><?php echo e(__('rcpanel_wl_ssl_title')); ?></h4>
                    <p><?php echo e(__('rcpanel_wl_ssl_desc')); ?></p>
                </div>
                <div class="bento-card bento-sm">
                    <div class="bento-card-icon icon-blue"><i class="fas fa-th"></i></div>
                    <h4><?php echo e(__('rcpanel_wl_softac_title')); ?></h4>
                    <p><?php echo e(__('rcpanel_wl_softac_desc')); ?></p>
                </div>
            </div>

            <div class="article-callout" style="margin-top: 24px;">
                <i class="fas fa-info-circle"></i>
                <div>
                    <?php echo __('rcpanel_wl_callout'); ?>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ CHOOSE YOUR LEVEL ═══════════════ -->
    <section class="rs-hierarchy reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag"><?php echo e(__('reseller_tiers_tag')); ?></div>
                <h2><?php echo e(__('rcpanel_tiers_title')); ?></h2>
                <p><?php echo e(__('rcpanel_tiers_desc')); ?></p>
            </div>

            <div class="rs-tiers-grid">
                <div class="rs-tier-card rs-tier-active">
                    <div class="rs-tier-badge"><?php echo e(__('reseller_you_are_here')); ?></div>
                    <div class="rs-tier-icon"><i class="fas fa-user-tie"></i></div>
                    <h4><?php echo e(__('reseller_cpanel_breadcrumb')); ?></h4>
                    <p><?php echo e(__('rcpanel_tier_cpanel_desc')); ?></p>
                    <ul class="rs-tier-perks">
                        <li><i class="fas fa-check"></i> <?php echo e(__('rcpanel_tier_cpanel_p1')); ?></li>
                        <li><i class="fas fa-check"></i> <?php echo e(__('rcpanel_tier_cpanel_p2')); ?></li>
                        <li><i class="fas fa-check"></i> <?php echo e(__('rcpanel_tier_cpanel_p3')); ?></li>
                    </ul>
                </div>
                <div class="rs-tier-card">
                    <div class="rs-tier-icon icon-green"><i class="fas fa-crown"></i></div>
                    <h4><?php echo e(__('reseller_master_breadcrumb')); ?></h4>
                    <p><?php echo e(__('rcpanel_tier_master_desc')); ?></p>
                    <ul class="rs-tier-perks">
                        <li><i class="fas fa-check"></i> <?php echo e(__('rcpanel_tier_master_p1')); ?></li>
                        <li><i class="fas fa-check"></i> <?php echo e(__('rcpanel_tier_master_p2')); ?></li>
                        <li><i class="fas fa-check"></i> <?php echo e(__('rcpanel_tier_master_p3')); ?></li>
                    </ul>
                    <a href="<?php echo e(SITE_URL); ?>/master-reseller/" class="rs-tier-link"><?php echo e(__('common_learn_more')); ?> <i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="rs-tier-card">
                    <div class="rs-tier-icon icon-purple"><i class="fas fa-gem"></i></div>
                    <h4><?php echo e(__('reseller_alpha_breadcrumb')); ?></h4>
                    <p><?php echo e(__('rcpanel_tier_alpha_desc')); ?></p>
                    <ul class="rs-tier-perks">
                        <li><i class="fas fa-check"></i> <?php echo e(__('rcpanel_tier_alpha_p1')); ?></li>
                        <li><i class="fas fa-check"></i> <?php echo e(__('rcpanel_tier_alpha_p2')); ?></li>
                        <li><i class="fas fa-check"></i> <?php echo e(__('rcpanel_tier_alpha_p3')); ?></li>
                    </ul>
                    <a href="<?php echo e(SITE_URL); ?>/alpha-reseller/" class="rs-tier-link"><?php echo e(__('common_learn_more')); ?> <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ GLOBAL INFRASTRUCTURE (compact) ═══════════════ -->
<?php
$dc_heading = __('rcpanel_dc_heading');
$dc_link_prefix = '/cheap-cpanel';
include __DIR__ . '/includes/section-dc-showcase.php';
?>

    <!-- ═══════════════ LAUNCH IN 4 STEPS ═══════════════ -->
    <section class="onboarding reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag"><?php echo e(__('rcpanel_steps_tag')); ?></div>
                <h2><?php echo e(__('rcpanel_steps_title')); ?></h2>
                <p><?php echo e(__('rcpanel_steps_desc')); ?></p>
            </div>

            <div class="onboarding-tracks">
                <div class="track">
                    <div class="track-icon"><i class="fas fa-rocket"></i></div>
                    <h3><?php echo e(__('rcpanel_track1_title')); ?></h3>
                    <p><?php echo e(__('rcpanel_track1_desc')); ?></p>
                    <div class="track-steps">
                        <div class="track-step"><div class="step-num">1</div><div class="step-content"><h4><?php echo e(__('rcpanel_track1_s1_title')); ?></h4><p><?php echo e(__('rcpanel_track1_s1_desc')); ?></p></div></div>
                        <div class="track-step"><div class="step-num">2</div><div class="step-content"><h4><?php echo e(__('rcpanel_track1_s2_title')); ?></h4><p><?php echo e(__('rcpanel_track1_s2_desc')); ?></p></div></div>
                        <div class="track-step"><div class="step-num">3</div><div class="step-content"><h4><?php echo e(__('rcpanel_track1_s3_title')); ?></h4><p><?php echo e(__('rcpanel_track1_s3_desc')); ?></p></div></div>
                        <div class="track-step"><div class="step-num">4</div><div class="step-content"><h4><?php echo e(__('rcpanel_track1_s4_title')); ?></h4><p><?php echo e(__('rcpanel_track1_s4_desc')); ?></p></div></div>
                    </div>
                </div>
                <div class="track">
                    <div class="track-icon"><i class="fas fa-life-ring"></i></div>
                    <h3><?php echo e(__('rcpanel_track2_title')); ?></h3>
                    <p><?php echo e(__('rcpanel_track2_desc')); ?></p>
                    <div class="track-steps">
                        <div class="track-step"><div class="step-num">1</div><div class="step-content"><h4><?php echo e(__('rcpanel_track2_s1_title')); ?></h4><p><?php echo e(__('rcpanel_track2_s1_desc')); ?></p></div></div>
                        <div class="track-step"><div class="step-num">2</div><div class="step-content"><h4><?php echo e(__('rcpanel_track2_s2_title')); ?></h4><p><?php echo e(__('rcpanel_track2_s2_desc')); ?></p></div></div>
                        <div class="track-step"><div class="step-num">3</div><div class="step-content"><h4><?php echo e(__('rcpanel_track2_s3_title')); ?></h4><p><?php echo e(__('rcpanel_track2_s3_desc')); ?></p></div></div>
                        <div class="track-step"><div class="step-num">4</div><div class="step-content"><h4><?php echo e(__('rcpanel_track2_s4_title')); ?></h4><p><?php echo e(__('rcpanel_track2_s4_desc')); ?></p></div></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('rcpanel_faq_g1_q')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('rcpanel_faq_g1_a')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('rcpanel_faq_g2_q')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('rcpanel_faq_g2_a')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('rcpanel_faq_g3_q')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('rcpanel_faq_g3_a')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('rcpanel_faq_g4_q')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('rcpanel_faq_g4_a')); ?></p></div></div>
                    </div>

                    <div class="faq-panel" id="faq-technical">
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('rcpanel_faq_t1_q')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('rcpanel_faq_t1_a')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('rcpanel_faq_t2_q')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('rcpanel_faq_t2_a')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('rcpanel_faq_t3_q')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('rcpanel_faq_t3_a')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('rcpanel_faq_t4_q')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('rcpanel_faq_t4_a')); ?></p></div></div>
                    </div>

                    <div class="faq-panel" id="faq-billing">
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('rcpanel_faq_b1_q')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('rcpanel_faq_b1_a')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('rcpanel_faq_b2_q')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('rcpanel_faq_b2_a')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('rcpanel_faq_b3_q')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('rcpanel_faq_b3_a')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('rcpanel_faq_b4_q')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('rcpanel_faq_b4_a')); ?></p></div></div>
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
                    <p class="why-us-desc"><?php echo e(__('rcpanel_why_desc')); ?></p>
                    <a href="#plans" class="btn-primary"><?php echo e(__('common_get_started')); ?> <i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="why-us-grid">
                    <div class="why-us-card">
                        <div class="why-us-card-icon"><i class="fas fa-headset"></i></div>
                        <h4><?php echo e(__('rcpanel_why_support_title')); ?></h4>
                        <p><?php echo e(__('rcpanel_why_support_desc')); ?></p>
                    </div>
                    <div class="why-us-card">
                        <div class="why-us-card-icon icon-green"><i class="fas fa-tachometer-alt"></i></div>
                        <h4><?php echo e(__('rcpanel_why_perf_title')); ?></h4>
                        <p><?php echo e(__('rcpanel_why_perf_desc')); ?></p>
                    </div>
                    <div class="why-us-card">
                        <div class="why-us-card-icon icon-purple"><i class="fas fa-shield-alt"></i></div>
                        <h4><?php echo e(__('rcpanel_why_secure_title')); ?></h4>
                        <p><?php echo e(__('rcpanel_why_secure_desc')); ?></p>
                    </div>
                    <div class="why-us-card">
                        <div class="why-us-card-icon icon-amber"><i class="fas fa-globe"></i></div>
                        <h4><?php echo e(__('rcpanel_why_dc_title')); ?></h4>
                        <p><?php echo e(__('rcpanel_why_dc_desc')); ?></p>
                    </div>
                    <div class="why-us-card">
                        <div class="why-us-card-icon icon-green"><i class="fas fa-tags"></i></div>
                        <h4><?php echo e(__('rcpanel_why_price_title')); ?></h4>
                        <p><?php echo e(__('rcpanel_why_price_desc')); ?></p>
                    </div>
                    <div class="why-us-card">
                        <div class="why-us-card-icon icon-purple"><i class="fas fa-level-up-alt"></i></div>
                        <h4><?php echo e(__('rcpanel_why_upgrade_title')); ?></h4>
                        <p><?php echo e(__('rcpanel_why_upgrade_desc')); ?></p>
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
                <div class="promo-cta-icon"><i class="fas fa-rocket"></i></div>
                <h2><?php echo e(__('rcpanel_cta_title')); ?></h2>
                <p><?php echo e(__('rcpanel_cta_desc')); ?></p>
                <a href="#plans" class="btn-primary"><?php echo e(__('common_view_plans')); ?> <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
