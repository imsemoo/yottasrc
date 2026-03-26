<?php
/**
 * YottaSrc — cPanel Hosting
 * ==========================
 * Modern SaaS-style product page for cPanel Hosting.
 */
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/topbar.php';
?>

    <!-- ═══════════════ HERO ═══════════════ -->
    <section class="page-hero cp-hero">
        <div class="container">
            <div class="page-hero-split">
                <div class="page-hero-content">
                    <div class="page-breadcrumb">
                        <a href="<?php echo e(SITE_URL); ?>/"><?php echo e(__('breadcrumb_home')); ?></a>
                        <i class="fas fa-chevron-right"></i>
                        <span><?php echo e(__('cpanel_breadcrumb')); ?></span>
                    </div>
                    <h1><?php echo __('cpanel_title'); ?></h1>
                    <p class="page-hero-desc">
                        <?php echo e(__('cpanel_desc')); ?>
                    </p>
                    <div class="page-hero-ctas">
                        <a href="#plans" class="btn-primary"><?php echo e(__('common_view_plans')); ?> <i class="fas fa-arrow-down"></i></a>
                        <a href="<?php echo e(SITE_URL); ?>/contact-us/" class="btn-secondary"><i class="fas fa-headset"></i> <?php echo e(__('common_talk_to_sales')); ?></a>
                    </div>
                    <div class="page-hero-badges">
                        <div class="hero-badge-item"><i class="fas fa-check"></i> <?php echo e(__('cpanel_badge1')); ?></div>
                        <div class="hero-badge-item"><i class="fas fa-check"></i> <?php echo e(__('cpanel_badge2')); ?></div>
                        <div class="hero-badge-item"><i class="fas fa-check"></i> <?php echo e(__('cpanel_badge3')); ?></div>
                        <div class="hero-badge-item"><i class="fas fa-check"></i> <?php echo e(__('cpanel_badge4')); ?></div>
                    </div>
                </div>
                <div class="page-hero-visual">
                    <svg viewBox="0 0 440 400" fill="none" xmlns="http://www.w3.org/2000/svg" class="hero-illustration" aria-label="cPanel dashboard illustration">
                        <!-- ── Window Frame ── -->
                        <rect x="20" y="20" width="400" height="360" rx="16" fill="var(--bg-card)" stroke="var(--border-primary)" stroke-width="1.5"/>
                        <!-- Title bar bg -->
                        <rect x="20" y="20" width="400" height="38" rx="16" fill="var(--bg-tertiary)"/>
                        <rect x="20" y="42" width="400" height="16" fill="var(--bg-tertiary)"/>
                        <!-- Window dots -->
                        <circle cx="42" cy="39" r="5" fill="var(--brand-error)" opacity="0.6"/>
                        <circle cx="58" cy="39" r="5" fill="var(--brand-warning)" opacity="0.6"/>
                        <circle cx="74" cy="39" r="5" fill="var(--brand-secondary)" opacity="0.6"/>
                        <!-- Title -->
                        <text x="220" y="44" text-anchor="middle" fill="var(--text-tertiary)" font-size="11" font-family="var(--font-mono)" font-weight="600" opacity="0.6">cPanel — Account Dashboard</text>

                        <!-- ── Sidebar ── -->
                        <rect x="20" y="58" width="100" height="322" fill="var(--bg-tertiary)" opacity="0.5"/>
                        <line x1="120" y1="58" x2="120" y2="380" stroke="var(--border-primary)" stroke-width="1"/>
                        <!-- Sidebar nav items -->
                        <rect x="32" y="72" width="76" height="8" rx="3" fill="var(--brand-primary)" opacity="0.18"/>
                        <rect x="32" y="92" width="60" height="6" rx="3" fill="var(--text-tertiary)" opacity="0.12"/>
                        <rect x="32" y="108" width="68" height="6" rx="3" fill="var(--text-tertiary)" opacity="0.12"/>
                        <rect x="32" y="124" width="52" height="6" rx="3" fill="var(--text-tertiary)" opacity="0.12"/>
                        <rect x="32" y="140" width="72" height="6" rx="3" fill="var(--text-tertiary)" opacity="0.12"/>
                        <rect x="32" y="156" width="56" height="6" rx="3" fill="var(--text-tertiary)" opacity="0.12"/>
                        <!-- Sidebar usage meters -->
                        <text x="32" y="190" fill="var(--text-tertiary)" font-size="7" font-family="var(--font-mono)" opacity="0.5">DISK</text>
                        <rect x="32" y="196" width="76" height="5" rx="2.5" fill="var(--bg-card)"/>
                        <rect x="32" y="196" width="42" height="5" rx="2.5" fill="var(--brand-primary)" opacity="0.4"/>
                        <text x="32" y="218" fill="var(--text-tertiary)" font-size="7" font-family="var(--font-mono)" opacity="0.5">BANDWIDTH</text>
                        <rect x="32" y="224" width="76" height="5" rx="2.5" fill="var(--bg-card)"/>
                        <rect x="32" y="224" width="22" height="5" rx="2.5" fill="var(--brand-secondary)" opacity="0.4"/>
                        <text x="32" y="246" fill="var(--text-tertiary)" font-size="7" font-family="var(--font-mono)" opacity="0.5">EMAILS</text>
                        <rect x="32" y="252" width="76" height="5" rx="2.5" fill="var(--bg-card)"/>
                        <rect x="32" y="252" width="56" height="5" rx="2.5" fill="var(--brand-accent)" opacity="0.4"/>

                        <!-- ── Dashboard Tile Grid (3×2) ── -->
                        <!-- Row 1 -->
                        <!-- Tile: Email Accounts -->
                        <rect x="134" y="72" width="120" height="80" rx="10" fill="var(--bg-card)" stroke="var(--border-primary)" stroke-width="1"/>
                        <rect x="148" y="86" width="28" height="28" rx="7" fill="var(--brand-primary)" opacity="0.1"/>
                        <text x="162" y="105" text-anchor="middle" fill="var(--brand-primary)" font-size="14" font-family="var(--font-body)" opacity="0.7">✉</text>
                        <text x="148" y="128" fill="var(--text-secondary)" font-size="8.5" font-family="var(--font-body)" font-weight="600" opacity="0.7">Email Accounts</text>
                        <text x="148" y="140" fill="var(--text-tertiary)" font-size="7" font-family="var(--font-mono)" opacity="0.4">5 / Unlimited</text>

                        <!-- Tile: File Manager -->
                        <rect x="264" y="72" width="120" height="80" rx="10" fill="var(--bg-card)" stroke="var(--border-primary)" stroke-width="1"/>
                        <rect x="278" y="86" width="28" height="28" rx="7" fill="var(--brand-secondary)" opacity="0.1"/>
                        <text x="292" y="105" text-anchor="middle" fill="var(--brand-secondary)" font-size="14" font-family="var(--font-body)" opacity="0.7">📁</text>
                        <text x="278" y="128" fill="var(--text-secondary)" font-size="8.5" font-family="var(--font-body)" font-weight="600" opacity="0.7">File Manager</text>
                        <text x="278" y="140" fill="var(--text-tertiary)" font-size="7" font-family="var(--font-mono)" opacity="0.4">12.4 GB Used</text>

                        <!-- Row 2 -->
                        <!-- Tile: MySQL Database -->
                        <rect x="134" y="164" width="120" height="80" rx="10" fill="var(--bg-card)" stroke="var(--border-primary)" stroke-width="1"/>
                        <rect x="148" y="178" width="28" height="28" rx="7" fill="var(--brand-accent)" opacity="0.1"/>
                        <text x="162" y="197" text-anchor="middle" fill="var(--brand-accent)" font-size="14" font-family="var(--font-body)" opacity="0.7">⛃</text>
                        <text x="148" y="220" fill="var(--text-secondary)" font-size="8.5" font-family="var(--font-body)" font-weight="600" opacity="0.7">MySQL Databases</text>
                        <text x="148" y="232" fill="var(--text-tertiary)" font-size="7" font-family="var(--font-mono)" opacity="0.4">3 Active</text>

                        <!-- Tile: SSL/TLS -->
                        <rect x="264" y="164" width="120" height="80" rx="10" fill="var(--bg-card)" stroke="var(--border-primary)" stroke-width="1"/>
                        <rect x="278" y="178" width="28" height="28" rx="7" fill="var(--brand-warning)" opacity="0.1"/>
                        <text x="292" y="197" text-anchor="middle" fill="var(--brand-warning)" font-size="14" font-family="var(--font-body)" opacity="0.7">🔒</text>
                        <text x="278" y="220" fill="var(--text-secondary)" font-size="8.5" font-family="var(--font-body)" font-weight="600" opacity="0.7">SSL / TLS</text>
                        <text x="278" y="232" fill="var(--text-tertiary)" font-size="7" font-family="var(--font-mono)" opacity="0.4">AutoSSL Active</text>

                        <!-- Row 3 -->
                        <!-- Tile: Domains -->
                        <rect x="134" y="256" width="120" height="80" rx="10" fill="var(--bg-card)" stroke="var(--border-primary)" stroke-width="1"/>
                        <rect x="148" y="270" width="28" height="28" rx="7" fill="var(--brand-secondary)" opacity="0.1"/>
                        <text x="162" y="289" text-anchor="middle" fill="var(--brand-secondary)" font-size="14" font-family="var(--font-body)" opacity="0.7">🌐</text>
                        <text x="148" y="312" fill="var(--text-secondary)" font-size="8.5" font-family="var(--font-body)" font-weight="600" opacity="0.7">Domains</text>
                        <text x="148" y="324" fill="var(--text-tertiary)" font-size="7" font-family="var(--font-mono)" opacity="0.4">2 Addon Domains</text>

                        <!-- Tile: Backup Wizard -->
                        <rect x="264" y="256" width="120" height="80" rx="10" fill="var(--bg-card)" stroke="var(--border-primary)" stroke-width="1"/>
                        <rect x="278" y="270" width="28" height="28" rx="7" fill="var(--brand-primary)" opacity="0.1"/>
                        <text x="292" y="289" text-anchor="middle" fill="var(--brand-primary)" font-size="14" font-family="var(--font-body)" opacity="0.7">💾</text>
                        <text x="278" y="312" fill="var(--text-secondary)" font-size="8.5" font-family="var(--font-body)" font-weight="600" opacity="0.7">Backup Wizard</text>
                        <text x="278" y="324" fill="var(--text-tertiary)" font-size="7" font-family="var(--font-mono)" opacity="0.4">Daily · JetBackup</text>

                        <!-- ── Floating Accent Elements ── -->
                        <!-- Uptime badge (top-right float) -->
                        <rect x="350" y="2" width="86" height="36" rx="10" fill="var(--bg-card)" stroke="var(--border-primary)" stroke-width="1">
                            <animate attributeName="y" values="2;8;2" dur="5s" repeatCount="indefinite"/>
                        </rect>
                        <text x="370" y="17" fill="var(--text-tertiary)" font-size="7" font-family="var(--font-mono)" font-weight="600" opacity="0.6">
                            UPTIME
                            <animate attributeName="y" values="17;23;17" dur="5s" repeatCount="indefinite"/>
                        </text>
                        <text x="370" y="31" fill="var(--brand-secondary)" font-size="13" font-family="var(--font-display)" font-weight="800" opacity="0.8">
                            99.97%
                            <animate attributeName="y" values="31;37;31" dur="5s" repeatCount="indefinite"/>
                        </text>

                        <!-- Speed badge (bottom-left float) -->
                        <rect x="0" y="320" width="82" height="36" rx="10" fill="var(--bg-card)" stroke="var(--border-primary)" stroke-width="1">
                            <animate attributeName="y" values="320;314;320" dur="6s" repeatCount="indefinite"/>
                        </rect>
                        <text x="16" y="335" fill="var(--text-tertiary)" font-size="7" font-family="var(--font-mono)" font-weight="600" opacity="0.6">
                            TTFB
                            <animate attributeName="y" values="335;329;335" dur="6s" repeatCount="indefinite"/>
                        </text>
                        <text x="16" y="349" fill="var(--brand-primary)" font-size="13" font-family="var(--font-display)" font-weight="800" opacity="0.8">
                            &lt;120ms
                            <animate attributeName="y" values="349;343;349" dur="6s" repeatCount="indefinite"/>
                        </text>

                        <!-- Decorative dots -->
                        <circle cx="8" cy="50" r="3" fill="var(--brand-primary)" opacity="0.25">
                            <animate attributeName="opacity" values="0.25;0.6;0.25" dur="3s" repeatCount="indefinite"/>
                        </circle>
                        <circle cx="432" cy="200" r="3" fill="var(--brand-secondary)" opacity="0.25">
                            <animate attributeName="opacity" values="0.25;0.5;0.25" dur="4s" repeatCount="indefinite"/>
                        </circle>
                        <circle cx="430" cy="370" r="2.5" fill="var(--brand-accent)" opacity="0.2">
                            <animate attributeName="opacity" values="0.2;0.5;0.2" dur="5s" repeatCount="indefinite"/>
                        </circle>
                    </svg>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ POWERED BY STRIP ═══════════════ -->
    <section class="partners">
        <div class="container">
            <span class="partners-label"><?php echo e(__('cp_partners_label')); ?></span>
            <div class="partners-logos">
                <span class="partner-logo"><i class="fas fa-bolt"></i> <?php echo e(__('cp_partner_litespeed')); ?></span>
                <span class="partner-logo"><i class="fas fa-shield-alt"></i> <?php echo e(__('cp_partner_cloudlinux')); ?></span>
                <span class="partner-logo"><i class="fas fa-server"></i> <?php echo e(__('cp_partner_cpanel')); ?></span>
                <span class="partner-logo"><i class="fas fa-hdd"></i> <?php echo e(__('cp_partner_nvme')); ?></span>
                <span class="partner-logo"><i class="fas fa-robot"></i> <?php echo e(__('cp_partner_imunify')); ?></span>
                <span class="partner-logo"><i class="fas fa-cloud-download-alt"></i> <?php echo e(__('cp_partner_jetbackup')); ?></span>
                <span class="partner-logo"><i class="fas fa-th"></i> <?php echo e(__('cp_partner_softaculous')); ?></span>
            </div>
        </div>
    </section>

    <!-- ═══════════════ PRICING PLANS ═══════════════ -->
    <section class="plans reveal" id="plans">
        <div class="container">
            <div class="section-header">
                <div class="section-tag"><?php echo e(__('plans_tag')); ?></div>
                <h2><?php echo e(__('plans_title')); ?></h2>
                <p><?php echo e(__('plans_desc')); ?></p>
            </div>

            <div class="plans-panel active" data-tab="cpanel-hosting">
                <div class="swiper plans-swiper">
                    <div class="swiper-wrapper">
                        <!-- Gift -->
                        <div class="swiper-slide"><div class="plan-card">
                            <div class="plan-head"><div class="plan-name"><?php echo e(__('cp_plan_gift')); ?></div><span class="plan-save"><?php echo e(__('cp_plan_gift_save')); ?></span></div>
                            <div class="plan-target"><?php echo e(__('cp_plan_gift_target')); ?></div>
                            <div class="plan-price">
                                <span class="old-price"><?php echo e(__('cp_plan_gift_old_price')); ?></span>
                                <span class="current-price"><span class="currency">€</span><span class="amount"><?php echo e(__('cp_plan_gift_price')); ?></span><span class="period"><?php echo e(__('cp_plan_gift_period')); ?></span></span>
                            </div>
                            <div class="plan-renewal"><i class="fas fa-check"></i> <?php echo e(__('plans_same_renewal')); ?></div>
                            <button class="plan-cta" data-href="<?php echo e(CP_URL); ?>/cart.php?a=add&pid=1"><?php echo e(__('cp_plan_choose')); ?></button>
                            <div class="plan-resources">
                                <div class="plan-res"><i class="fas fa-microchip"></i><span class="res-val">1</span><span class="res-label"><?php echo e(__('cp_res_cpu_core')); ?></span></div>
                                <div class="plan-res"><i class="fas fa-memory"></i><span class="res-val">1.5 GB</span><span class="res-label"><?php echo e(__('cp_res_ram')); ?></span></div>
                                <div class="plan-res"><i class="fas fa-hdd"></i><span class="res-val">5 GB</span><span class="res-label"><?php echo e(__('cp_res_nvme')); ?></span></div>
                                <div class="plan-res"><i class="fas fa-tachometer-alt"></i><span class="res-val">25 MB/s</span><span class="res-label"><?php echo e(__('cp_res_io')); ?></span></div>
                            </div>
                            <div class="plan-divider"><span><?php echo e(__('cp_plan_included')); ?></span></div>
                            <ul class="plan-features">
                                <li><i class="fas fa-globe"></i> <?php echo e(__('cp_feat_domain_ssl')); ?></li>
                                <li><i class="fas fa-sitemap"></i> <?php echo e(__('cp_feat_addon_3')); ?></li>
                                <li><i class="fas fa-database"></i> <?php echo e(__('cp_feat_db_3')); ?></li>
                                <li><i class="fas fa-wifi"></i> <?php echo e(__('cp_feat_unlimited_bw')); ?></li>
                                <li><i class="fab fa-php"></i> <?php echo e(__('cp_feat_php_node')); ?></li>
                                <li><i class="fas fa-terminal"></i> <?php echo e(__('cp_feat_terminal')); ?></li>
                                <li><i class="fas fa-map-marker-alt"></i> <?php echo e(__('cp_feat_locations')); ?></li>
                            </ul>
                        </div></div>

                        <!-- Mini Starter -->
                        <div class="swiper-slide"><div class="plan-card">
                            <div class="plan-head"><div class="plan-name"><?php echo e(__('cp_plan_mini')); ?></div><span class="plan-save"><?php echo e(__('cp_plan_mini_save')); ?></span></div>
                            <div class="plan-target"><?php echo e(__('cp_plan_mini_target')); ?></div>
                            <div class="plan-price">
                                <span class="old-price"><?php echo e(__('cp_plan_mini_old_price')); ?></span>
                                <span class="current-price"><span class="currency">€</span><span class="amount"><?php echo e(__('cp_plan_mini_price')); ?></span><span class="period"><?php echo e(__('cp_plan_gift_period')); ?></span></span>
                            </div>
                            <div class="plan-renewal"><i class="fas fa-check"></i> <?php echo e(__('plans_same_renewal')); ?></div>
                            <button class="plan-cta" data-href="<?php echo e(CP_URL); ?>/cart.php?a=add&pid=2"><?php echo e(__('cp_plan_choose')); ?></button>
                            <div class="plan-resources">
                                <div class="plan-res"><i class="fas fa-microchip"></i><span class="res-val">2</span><span class="res-label"><?php echo e(__('cp_res_cpu_cores')); ?></span></div>
                                <div class="plan-res"><i class="fas fa-memory"></i><span class="res-val">2 GB</span><span class="res-label"><?php echo e(__('cp_res_ram')); ?></span></div>
                                <div class="plan-res"><i class="fas fa-hdd"></i><span class="res-val">10 GB</span><span class="res-label"><?php echo e(__('cp_res_nvme')); ?></span></div>
                                <div class="plan-res"><i class="fas fa-tachometer-alt"></i><span class="res-val">100 MB/s</span><span class="res-label"><?php echo e(__('cp_res_io')); ?></span></div>
                            </div>
                            <div class="plan-divider"><span><?php echo e(__('cp_plan_included')); ?></span></div>
                            <ul class="plan-features">
                                <li><i class="fas fa-globe"></i> <?php echo e(__('cp_feat_domain_ssl')); ?></li>
                                <li><i class="fas fa-sitemap"></i> <?php echo e(__('cp_feat_addon_10')); ?></li>
                                <li><i class="fas fa-database"></i> <?php echo e(__('cp_feat_db_10')); ?></li>
                                <li><i class="fas fa-wifi"></i> <?php echo e(__('cp_feat_unlimited_bw')); ?></li>
                                <li><i class="fab fa-php"></i> <?php echo e(__('cp_feat_php_node')); ?></li>
                                <li><i class="fas fa-terminal"></i> <?php echo e(__('cp_feat_terminal')); ?></li>
                                <li><i class="fas fa-map-marker-alt"></i> <?php echo e(__('cp_feat_locations')); ?></li>
                            </ul>
                        </div></div>

                        <!-- Starter -->
                        <div class="swiper-slide"><div class="plan-card">
                            <div class="plan-head"><div class="plan-name"><?php echo e(__('cp_plan_starter')); ?></div><span class="plan-save"><?php echo e(__('cp_plan_starter_save')); ?></span></div>
                            <div class="plan-target"><?php echo e(__('cp_plan_starter_target')); ?></div>
                            <div class="plan-price">
                                <span class="old-price"><?php echo e(__('cp_plan_starter_old_price')); ?></span>
                                <span class="current-price"><span class="currency">€</span><span class="amount"><?php echo e(__('cp_plan_starter_price')); ?></span><span class="period"><?php echo e(__('cp_plan_gift_period')); ?></span></span>
                            </div>
                            <div class="plan-renewal"><i class="fas fa-check"></i> <?php echo e(__('plans_same_renewal')); ?></div>
                            <button class="plan-cta" data-href="<?php echo e(CP_URL); ?>/cart.php?a=add&pid=3"><?php echo e(__('cp_plan_choose')); ?></button>
                            <div class="plan-resources">
                                <div class="plan-res"><i class="fas fa-microchip"></i><span class="res-val">2.5</span><span class="res-label"><?php echo e(__('cp_res_cpu_cores')); ?></span></div>
                                <div class="plan-res"><i class="fas fa-memory"></i><span class="res-val">2.5 GB</span><span class="res-label"><?php echo e(__('cp_res_ram')); ?></span></div>
                                <div class="plan-res"><i class="fas fa-hdd"></i><span class="res-val">15 GB</span><span class="res-label"><?php echo e(__('cp_res_nvme')); ?></span></div>
                                <div class="plan-res"><i class="fas fa-tachometer-alt"></i><span class="res-val">200 MB/s</span><span class="res-label"><?php echo e(__('cp_res_io')); ?></span></div>
                            </div>
                            <div class="plan-divider"><span><?php echo e(__('cp_plan_included')); ?></span></div>
                            <ul class="plan-features">
                                <li><i class="fas fa-globe"></i> <?php echo e(__('cp_feat_domain_ssl')); ?></li>
                                <li><i class="fas fa-sitemap"></i> <?php echo e(__('cp_feat_addon_15')); ?></li>
                                <li><i class="fas fa-database"></i> <?php echo e(__('cp_feat_db_15')); ?></li>
                                <li><i class="fas fa-wifi"></i> <?php echo e(__('cp_feat_unlimited_bw')); ?></li>
                                <li><i class="fab fa-php"></i> <?php echo e(__('cp_feat_php_node')); ?></li>
                                <li><i class="fas fa-terminal"></i> <?php echo e(__('cp_feat_terminal')); ?></li>
                                <li><i class="fas fa-map-marker-alt"></i> <?php echo e(__('cp_feat_locations')); ?></li>
                            </ul>
                        </div></div>

                        <!-- Premium (Popular) -->
                        <div class="swiper-slide"><div class="plan-card popular">
                            <div class="plan-badge"><?php echo e(__('cp_plan_premium_badge')); ?></div>
                            <div class="plan-head"><div class="plan-name"><?php echo e(__('cp_plan_premium')); ?></div><span class="plan-save"><?php echo e(__('cp_plan_premium_save')); ?></span></div>
                            <div class="plan-target"><?php echo e(__('cp_plan_premium_target')); ?></div>
                            <div class="plan-price">
                                <span class="old-price"><?php echo e(__('cp_plan_premium_old_price')); ?></span>
                                <span class="current-price"><span class="currency">€</span><span class="amount"><?php echo e(__('cp_plan_premium_price')); ?></span><span class="period"><?php echo e(__('cp_plan_gift_period')); ?></span></span>
                            </div>
                            <div class="plan-renewal"><i class="fas fa-check"></i> <?php echo e(__('plans_same_renewal')); ?></div>
                            <button class="plan-cta" data-href="<?php echo e(CP_URL); ?>/cart.php?a=add&pid=4"><?php echo e(__('cp_plan_choose')); ?></button>
                            <div class="plan-resources">
                                <div class="plan-res"><i class="fas fa-microchip"></i><span class="res-val">3</span><span class="res-label"><?php echo e(__('cp_res_cpu_cores')); ?></span></div>
                                <div class="plan-res"><i class="fas fa-memory"></i><span class="res-val">3 GB</span><span class="res-label"><?php echo e(__('cp_res_ram')); ?></span></div>
                                <div class="plan-res"><i class="fas fa-hdd"></i><span class="res-val">25 GB</span><span class="res-label"><?php echo e(__('cp_res_nvme')); ?></span></div>
                                <div class="plan-res"><i class="fas fa-tachometer-alt"></i><span class="res-val">300 MB/s</span><span class="res-label"><?php echo e(__('cp_res_io')); ?></span></div>
                            </div>
                            <div class="plan-divider"><span><?php echo e(__('cp_plan_included')); ?></span></div>
                            <ul class="plan-features">
                                <li><i class="fas fa-globe"></i> <?php echo e(__('cp_feat_free_domains')); ?></li>
                                <li><i class="fas fa-sitemap"></i> <?php echo e(__('cp_feat_addon_25')); ?></li>
                                <li><i class="fas fa-database"></i> <?php echo e(__('cp_feat_db_25')); ?></li>
                                <li><i class="fas fa-wifi"></i> <?php echo e(__('cp_feat_unlimited_bw_ssl')); ?></li>
                                <li><i class="fab fa-php"></i> <?php echo e(__('cp_feat_php_node')); ?></li>
                                <li><i class="fas fa-terminal"></i> <?php echo e(__('cp_feat_terminal')); ?></li>
                                <li><i class="fas fa-map-marker-alt"></i> <?php echo e(__('cp_feat_locations')); ?></li>
                            </ul>
                        </div></div>

                        <!-- Platinum -->
                        <div class="swiper-slide"><div class="plan-card">
                            <div class="plan-head"><div class="plan-name"><?php echo e(__('cp_plan_platinum')); ?></div><span class="plan-save"><?php echo e(__('cp_plan_platinum_save')); ?></span></div>
                            <div class="plan-target"><?php echo e(__('cp_plan_platinum_target')); ?></div>
                            <div class="plan-price">
                                <span class="old-price"><?php echo e(__('cp_plan_platinum_old_price')); ?></span>
                                <span class="current-price"><span class="currency">€</span><span class="amount"><?php echo e(__('cp_plan_platinum_price')); ?></span><span class="period"><?php echo e(__('cp_plan_gift_period')); ?></span></span>
                            </div>
                            <div class="plan-renewal"><i class="fas fa-check"></i> <?php echo e(__('plans_same_renewal')); ?></div>
                            <button class="plan-cta" data-href="<?php echo e(CP_URL); ?>/cart.php?a=add&pid=5"><?php echo e(__('cp_plan_choose')); ?></button>
                            <div class="plan-resources">
                                <div class="plan-res"><i class="fas fa-microchip"></i><span class="res-val">3.5</span><span class="res-label"><?php echo e(__('cp_res_cpu_cores')); ?></span></div>
                                <div class="plan-res"><i class="fas fa-memory"></i><span class="res-val">3.5 GB</span><span class="res-label"><?php echo e(__('cp_res_ram')); ?></span></div>
                                <div class="plan-res"><i class="fas fa-hdd"></i><span class="res-val">50 GB</span><span class="res-label"><?php echo e(__('cp_res_nvme')); ?></span></div>
                                <div class="plan-res"><i class="fas fa-tachometer-alt"></i><span class="res-val">500 MB/s</span><span class="res-label"><?php echo e(__('cp_res_io')); ?></span></div>
                            </div>
                            <div class="plan-divider"><span><?php echo e(__('cp_plan_included')); ?></span></div>
                            <ul class="plan-features">
                                <li><i class="fas fa-globe"></i> <?php echo e(__('cp_feat_free_domains')); ?></li>
                                <li><i class="fas fa-sitemap"></i> <?php echo e(__('cp_feat_addon_50')); ?></li>
                                <li><i class="fas fa-database"></i> <?php echo e(__('cp_feat_db_50')); ?></li>
                                <li><i class="fas fa-wifi"></i> <?php echo e(__('cp_feat_unlimited_bw_ssl')); ?></li>
                                <li><i class="fab fa-php"></i> <?php echo e(__('cp_feat_php_node')); ?></li>
                                <li><i class="fas fa-terminal"></i> <?php echo e(__('cp_feat_terminal')); ?></li>
                                <li><i class="fas fa-map-marker-alt"></i> <?php echo e(__('cp_feat_locations')); ?></li>
                            </ul>
                        </div></div>

                        <!-- Business -->
                        <div class="swiper-slide"><div class="plan-card">
                            <div class="plan-head"><div class="plan-name"><?php echo e(__('cp_plan_business')); ?></div><span class="plan-save"><?php echo e(__('cp_plan_business_save')); ?></span></div>
                            <div class="plan-target"><?php echo e(__('cp_plan_business_target')); ?></div>
                            <div class="plan-price">
                                <span class="old-price"><?php echo e(__('cp_plan_business_old_price')); ?></span>
                                <span class="current-price"><span class="currency">€</span><span class="amount"><?php echo e(__('cp_plan_business_price')); ?></span><span class="period"><?php echo e(__('cp_plan_gift_period')); ?></span></span>
                            </div>
                            <div class="plan-renewal"><i class="fas fa-check"></i> <?php echo e(__('plans_same_renewal')); ?></div>
                            <button class="plan-cta" data-href="<?php echo e(CP_URL); ?>/cart.php?a=add&pid=6"><?php echo e(__('cp_plan_choose')); ?></button>
                            <div class="plan-resources">
                                <div class="plan-res"><i class="fas fa-microchip"></i><span class="res-val">4</span><span class="res-label"><?php echo e(__('cp_res_cpu_cores')); ?></span></div>
                                <div class="plan-res"><i class="fas fa-memory"></i><span class="res-val">4 GB</span><span class="res-label"><?php echo e(__('cp_res_ram')); ?></span></div>
                                <div class="plan-res"><i class="fas fa-hdd"></i><span class="res-val">75 GB</span><span class="res-label"><?php echo e(__('cp_res_nvme')); ?></span></div>
                                <div class="plan-res"><i class="fas fa-tachometer-alt"></i><span class="res-val">900 MB/s</span><span class="res-label"><?php echo e(__('cp_res_io')); ?></span></div>
                            </div>
                            <div class="plan-divider"><span><?php echo e(__('cp_plan_included')); ?></span></div>
                            <ul class="plan-features">
                                <li><i class="fas fa-globe"></i> <?php echo e(__('cp_feat_free_domains')); ?></li>
                                <li><i class="fas fa-sitemap"></i> <?php echo e(__('cp_feat_addon_100')); ?></li>
                                <li><i class="fas fa-database"></i> <?php echo e(__('cp_feat_db_100')); ?></li>
                                <li><i class="fas fa-wifi"></i> <?php echo e(__('cp_feat_unlimited_bw_ssl')); ?></li>
                                <li><i class="fab fa-php"></i> <?php echo e(__('cp_feat_php_node')); ?></li>
                                <li><i class="fas fa-terminal"></i> <?php echo e(__('cp_feat_terminal')); ?></li>
                                <li><i class="fas fa-map-marker-alt"></i> <?php echo e(__('cp_feat_locations')); ?></li>
                            </ul>
                        </div></div>

                        <!-- Enterprise -->
                        <div class="swiper-slide"><div class="plan-card">
                            <div class="plan-head"><div class="plan-name"><?php echo e(__('cp_plan_enterprise')); ?></div><span class="plan-save"><?php echo e(__('cp_plan_enterprise_save')); ?></span></div>
                            <div class="plan-target"><?php echo e(__('cp_plan_enterprise_target')); ?></div>
                            <div class="plan-price">
                                <span class="old-price"><?php echo e(__('cp_plan_enterprise_old_price')); ?></span>
                                <span class="current-price"><span class="currency">€</span><span class="amount"><?php echo e(__('cp_plan_enterprise_price')); ?></span><span class="period"><?php echo e(__('cp_plan_gift_period')); ?></span></span>
                            </div>
                            <div class="plan-renewal"><i class="fas fa-check"></i> <?php echo e(__('plans_same_renewal')); ?></div>
                            <button class="plan-cta" data-href="<?php echo e(CP_URL); ?>/cart.php?a=add&pid=7"><?php echo e(__('cp_plan_choose')); ?></button>
                            <div class="plan-resources">
                                <div class="plan-res"><i class="fas fa-microchip"></i><span class="res-val">5</span><span class="res-label"><?php echo e(__('cp_res_cpu_cores')); ?></span></div>
                                <div class="plan-res"><i class="fas fa-memory"></i><span class="res-val">5 GB</span><span class="res-label"><?php echo e(__('cp_res_ram')); ?></span></div>
                                <div class="plan-res"><i class="fas fa-hdd"></i><span class="res-val">125 GB</span><span class="res-label"><?php echo e(__('cp_res_nvme')); ?></span></div>
                                <div class="plan-res"><i class="fas fa-tachometer-alt"></i><span class="res-val">1.5 GB/s</span><span class="res-label"><?php echo e(__('cp_res_io')); ?></span></div>
                            </div>
                            <div class="plan-divider"><span><?php echo e(__('cp_plan_included')); ?></span></div>
                            <ul class="plan-features">
                                <li><i class="fas fa-globe"></i> <?php echo e(__('cp_feat_free_domains')); ?></li>
                                <li><i class="fas fa-sitemap"></i> <?php echo e(__('cp_feat_unlimited_domains')); ?></li>
                                <li><i class="fas fa-database"></i> <?php echo e(__('cp_feat_unlimited_all')); ?></li>
                                <li><i class="fas fa-wifi"></i> <?php echo e(__('cp_feat_unlimited_bw_ssl')); ?></li>
                                <li><i class="fab fa-php"></i> <?php echo e(__('cp_feat_php_node')); ?></li>
                                <li><i class="fas fa-terminal"></i> <?php echo e(__('cp_feat_terminal')); ?></li>
                                <li><i class="fas fa-map-marker-alt"></i> <?php echo e(__('cp_feat_locations')); ?></li>
                            </ul>
                        </div></div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>

            <div class="pricing-custom">
                <p><?php echo __('cp_pricing_custom', ['url' => e(SITE_URL) . '/contact-us/']); ?></p>
            </div>
        </div>
    </section>

    <!-- ═══════════════ GLOBAL LOCATIONS ═══════════════ -->
<?php
$dc_heading = __('cp_dc_heading');
$dc_link_prefix = '/cheap-cpanel';
include __DIR__ . '/includes/section-dc-showcase.php';
?>

    <!-- ═══════════════ WHY cPANEL HOSTING ═══════════════ -->
    <section class="cp-benefits reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag"><?php echo e(__('cp_why_tag')); ?></div>
                <h2><?php echo e(__('cp_why_title')); ?></h2>
                <p><?php echo e(__('cp_why_desc')); ?></p>
            </div>

            <div class="cp-benefits-grid">
                <div class="cp-security-card">
                    <div class="cp-security-icon"><i class="fas fa-th-large"></i></div>
                    <h4><?php echo e(__('cp_why_panel_title')); ?></h4>
                    <p><?php echo e(__('cp_why_panel_desc')); ?></p>
                </div>
                <div class="cp-security-card">
                    <div class="cp-security-icon icon-green"><i class="fas fa-mouse-pointer"></i></div>
                    <h4><?php echo e(__('cp_why_simple_title')); ?></h4>
                    <p><?php echo e(__('cp_why_simple_desc')); ?></p>
                </div>
                <div class="cp-security-card">
                    <div class="cp-security-icon icon-purple"><i class="fas fa-th"></i></div>
                    <h4><?php echo e(__('cp_why_apps_title')); ?></h4>
                    <p><?php echo e(__('cp_why_apps_desc')); ?></p>
                </div>
                <div class="cp-security-card">
                    <div class="cp-security-icon icon-amber"><i class="fas fa-shield-alt"></i></div>
                    <h4><?php echo e(__('cp_why_security_title')); ?></h4>
                    <p><?php echo e(__('cp_why_security_desc')); ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ KEY FEATURES BENTO ═══════════════ -->
    <section class="bento-features reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag"><?php echo e(__('cp_bento_tag')); ?></div>
                <h2><?php echo e(__('cp_bento_title')); ?></h2>
                <p><?php echo e(__('cp_bento_desc')); ?></p>
            </div>

            <div class="bento-grid">
                <div class="bento-card bento-sm">
                    <div class="bento-card-icon"><i class="fas fa-bolt"></i></div>
                    <h4><?php echo e(__('cp_bento_litespeed_title')); ?></h4>
                    <p><?php echo e(__('cp_bento_litespeed_desc')); ?></p>
                </div>

                <div class="bento-card bento-sm">
                    <div class="bento-card-icon icon-green"><i class="fas fa-shield-alt"></i></div>
                    <h4><?php echo e(__('cp_bento_security_title')); ?></h4>
                    <p><?php echo e(__('cp_bento_security_desc')); ?></p>
                </div>

                <!-- Small card: NVMe -->
                <div class="bento-card bento-sm">
                    <div class="bento-card-icon icon-purple"><i class="fas fa-hdd"></i></div>
                    <h4><?php echo e(__('cp_bento_nvme_title')); ?></h4>
                    <p><?php echo e(__('cp_bento_nvme_desc')); ?></p>
                </div>

                <!-- Small card: Dedicated Resources -->
                <div class="bento-card bento-sm">
                    <div class="bento-card-icon icon-amber"><i class="fas fa-microchip"></i></div>
                    <h4><?php echo e(__('cp_bento_resources_title')); ?></h4>
                    <p><?php echo e(__('cp_bento_resources_desc')); ?></p>
                </div>

                <!-- Small card: Backups -->
                <div class="bento-card bento-sm">
                    <div class="bento-card-icon"><i class="fas fa-cloud-download-alt"></i></div>
                    <h4><?php echo e(__('cp_bento_backup_title')); ?></h4>
                    <p><?php echo e(__('cp_bento_backup_desc')); ?></p>
                </div>

                <!-- Small card: Free SSL -->
                <div class="bento-card bento-sm">
                    <div class="bento-card-icon icon-green"><i class="fas fa-lock"></i></div>
                    <h4><?php echo e(__('cp_bento_ssl_title')); ?></h4>
                    <p><?php echo e(__('cp_bento_ssl_desc')); ?></p>
                </div>

                <!-- Small card: CloudLinux -->
                <div class="bento-card bento-sm">
                    <div class="bento-card-icon icon-blue"><i class="fas fa-users-cog"></i></div>
                    <h4><?php echo e(__('cp_bento_cloudlinux_title')); ?></h4>
                    <p><?php echo e(__('cp_bento_cloudlinux_desc')); ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ cPANEL DASHBOARD PREVIEW ═══════════════ -->
    <section class="cp-dashboard-preview reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag"><?php echo e(__('cp_dash_tag')); ?></div>
                <h2><?php echo e(__('cp_dash_title')); ?></h2>
                <p><?php echo e(__('cp_dash_desc')); ?></p>
            </div>

            <div class="cp-dash-layout">
                <div class="cp-dash-visual">
                    <svg viewBox="0 0 560 380" fill="none" xmlns="http://www.w3.org/2000/svg" class="cp-dash-svg" aria-label="cPanel dashboard overview">
                        <!-- Window frame -->
                        <rect x="0" y="0" width="560" height="380" rx="14" fill="var(--bg-card)" stroke="var(--border-primary)" stroke-width="1.2"/>
                        <rect x="0" y="0" width="560" height="36" rx="14" fill="var(--bg-tertiary)"/>
                        <rect x="0" y="20" width="560" height="16" fill="var(--bg-tertiary)"/>
                        <circle cx="18" cy="18" r="5" fill="var(--brand-error)" opacity="0.55"/>
                        <circle cx="34" cy="18" r="5" fill="var(--brand-warning)" opacity="0.55"/>
                        <circle cx="50" cy="18" r="5" fill="var(--brand-secondary)" opacity="0.55"/>
                        <text x="280" y="22" text-anchor="middle" fill="var(--text-tertiary)" font-size="10" font-family="var(--font-mono)" font-weight="600" opacity="0.5">cPanel — Home</text>

                        <!-- Search bar -->
                        <rect x="24" y="48" width="512" height="30" rx="8" fill="var(--bg-tertiary)" stroke="var(--border-primary)" stroke-width="0.8"/>
                        <text x="40" y="67" fill="var(--text-tertiary)" font-size="10" font-family="var(--font-body)" opacity="0.4">Search tools…</text>
                        <text x="520" y="67" text-anchor="end" fill="var(--text-tertiary)" font-size="11" opacity="0.35">🔍</text>

                        <!-- Section: Email -->
                        <text x="24" y="102" fill="var(--brand-primary)" font-size="9" font-family="var(--font-display)" font-weight="700" letter-spacing="0.8" opacity="0.7">EMAIL</text>
                        <line x1="24" y1="108" x2="536" y2="108" stroke="var(--border-primary)" stroke-width="0.6"/>
                        <rect x="24" y="114" width="76" height="54" rx="8" fill="var(--bg-tertiary)"/>
                        <text x="62" y="140" text-anchor="middle" fill="var(--brand-primary)" font-size="16" opacity="0.6">✉</text>
                        <text x="62" y="158" text-anchor="middle" fill="var(--text-secondary)" font-size="7.5" font-family="var(--font-body)" font-weight="600" opacity="0.65">Email Accts</text>
                        <rect x="108" y="114" width="76" height="54" rx="8" fill="var(--bg-tertiary)"/>
                        <text x="146" y="140" text-anchor="middle" fill="var(--brand-primary)" font-size="16" opacity="0.6">↗</text>
                        <text x="146" y="158" text-anchor="middle" fill="var(--text-secondary)" font-size="7.5" font-family="var(--font-body)" font-weight="600" opacity="0.65">Forwarders</text>
                        <rect x="192" y="114" width="76" height="54" rx="8" fill="var(--bg-tertiary)"/>
                        <text x="230" y="140" text-anchor="middle" fill="var(--brand-primary)" font-size="16" opacity="0.6">🤖</text>
                        <text x="230" y="158" text-anchor="middle" fill="var(--text-secondary)" font-size="7.5" font-family="var(--font-body)" font-weight="600" opacity="0.65">Autoresponders</text>

                        <!-- Section: Files -->
                        <text x="24" y="192" fill="var(--brand-secondary)" font-size="9" font-family="var(--font-display)" font-weight="700" letter-spacing="0.8" opacity="0.7">FILES</text>
                        <line x1="24" y1="198" x2="536" y2="198" stroke="var(--border-primary)" stroke-width="0.6"/>
                        <rect x="24" y="204" width="76" height="54" rx="8" fill="var(--bg-tertiary)"/>
                        <text x="62" y="230" text-anchor="middle" fill="var(--brand-secondary)" font-size="16" opacity="0.6">📁</text>
                        <text x="62" y="248" text-anchor="middle" fill="var(--text-secondary)" font-size="7.5" font-family="var(--font-body)" font-weight="600" opacity="0.65">File Manager</text>
                        <rect x="108" y="204" width="76" height="54" rx="8" fill="var(--bg-tertiary)"/>
                        <text x="146" y="230" text-anchor="middle" fill="var(--brand-secondary)" font-size="16" opacity="0.6">💾</text>
                        <text x="146" y="248" text-anchor="middle" fill="var(--text-secondary)" font-size="7.5" font-family="var(--font-body)" font-weight="600" opacity="0.65">Backups</text>
                        <rect x="192" y="204" width="76" height="54" rx="8" fill="var(--bg-tertiary)"/>
                        <text x="230" y="230" text-anchor="middle" fill="var(--brand-secondary)" font-size="16" opacity="0.6">📊</text>
                        <text x="230" y="248" text-anchor="middle" fill="var(--text-secondary)" font-size="7.5" font-family="var(--font-body)" font-weight="600" opacity="0.65">Disk Usage</text>

                        <!-- Section: Databases -->
                        <text x="24" y="282" fill="var(--brand-accent)" font-size="9" font-family="var(--font-display)" font-weight="700" letter-spacing="0.8" opacity="0.7">DATABASES</text>
                        <line x1="24" y1="288" x2="536" y2="288" stroke="var(--border-primary)" stroke-width="0.6"/>
                        <rect x="24" y="294" width="76" height="54" rx="8" fill="var(--bg-tertiary)"/>
                        <text x="62" y="320" text-anchor="middle" fill="var(--brand-accent)" font-size="16" opacity="0.6">⛃</text>
                        <text x="62" y="338" text-anchor="middle" fill="var(--text-secondary)" font-size="7.5" font-family="var(--font-body)" font-weight="600" opacity="0.65">MySQL DBs</text>
                        <rect x="108" y="294" width="76" height="54" rx="8" fill="var(--bg-tertiary)"/>
                        <text x="146" y="320" text-anchor="middle" fill="var(--brand-accent)" font-size="16" opacity="0.6">📋</text>
                        <text x="146" y="338" text-anchor="middle" fill="var(--text-secondary)" font-size="7.5" font-family="var(--font-body)" font-weight="600" opacity="0.65">phpMyAdmin</text>

                        <!-- Right side: Stats panel -->
                        <rect x="310" y="114" width="226" height="234" rx="10" fill="var(--bg-tertiary)" stroke="var(--border-primary)" stroke-width="0.8"/>
                        <text x="326" y="138" fill="var(--text-secondary)" font-size="10" font-family="var(--font-display)" font-weight="700" opacity="0.65">Account Overview</text>
                        <!-- CPU bar -->
                        <text x="326" y="162" fill="var(--text-tertiary)" font-size="8" font-family="var(--font-mono)" opacity="0.5">CPU Usage</text>
                        <rect x="326" y="168" width="194" height="6" rx="3" fill="var(--bg-card)"/>
                        <rect x="326" y="168" width="52" height="6" rx="3" fill="var(--brand-primary)" opacity="0.6"/>
                        <text x="520" y="162" text-anchor="end" fill="var(--brand-primary)" font-size="8" font-family="var(--font-mono)" font-weight="600" opacity="0.6">27%</text>
                        <!-- RAM bar -->
                        <text x="326" y="192" fill="var(--text-tertiary)" font-size="8" font-family="var(--font-mono)" opacity="0.5">Memory</text>
                        <rect x="326" y="198" width="194" height="6" rx="3" fill="var(--bg-card)"/>
                        <rect x="326" y="198" width="88" height="6" rx="3" fill="var(--brand-secondary)" opacity="0.6"/>
                        <text x="520" y="192" text-anchor="end" fill="var(--brand-secondary)" font-size="8" font-family="var(--font-mono)" font-weight="600" opacity="0.6">45%</text>
                        <!-- Disk bar -->
                        <text x="326" y="222" fill="var(--text-tertiary)" font-size="8" font-family="var(--font-mono)" opacity="0.5">Disk (NVMe)</text>
                        <rect x="326" y="228" width="194" height="6" rx="3" fill="var(--bg-card)"/>
                        <rect x="326" y="228" width="68" height="6" rx="3" fill="var(--brand-accent)" opacity="0.6"/>
                        <text x="520" y="222" text-anchor="end" fill="var(--brand-accent)" font-size="8" font-family="var(--font-mono)" font-weight="600" opacity="0.6">35%</text>
                        <!-- Quick stats -->
                        <line x1="326" y1="250" x2="520" y2="250" stroke="var(--border-primary)" stroke-width="0.6"/>
                        <text x="326" y="270" fill="var(--text-tertiary)" font-size="8" font-family="var(--font-mono)" opacity="0.5">Domains</text>
                        <text x="520" y="270" text-anchor="end" fill="var(--text-secondary)" font-size="9" font-family="var(--font-mono)" font-weight="600" opacity="0.6">4 Active</text>
                        <text x="326" y="290" fill="var(--text-tertiary)" font-size="8" font-family="var(--font-mono)" opacity="0.5">Emails</text>
                        <text x="520" y="290" text-anchor="end" fill="var(--text-secondary)" font-size="9" font-family="var(--font-mono)" font-weight="600" opacity="0.6">12 Accounts</text>
                        <text x="326" y="310" fill="var(--text-tertiary)" font-size="8" font-family="var(--font-mono)" opacity="0.5">SSL Status</text>
                        <text x="520" y="310" text-anchor="end" fill="var(--brand-secondary)" font-size="9" font-family="var(--font-mono)" font-weight="600" opacity="0.6">✓ All Secure</text>
                        <text x="326" y="330" fill="var(--text-tertiary)" font-size="8" font-family="var(--font-mono)" opacity="0.5">Last Backup</text>
                        <text x="520" y="330" text-anchor="end" fill="var(--text-secondary)" font-size="9" font-family="var(--font-mono)" font-weight="600" opacity="0.6">Today 03:00</text>
                    </svg>
                </div>
                <div class="cp-dash-features">
                    <div class="cp-dash-feature">
                        <div class="cp-dash-feature-icon"><i class="fas fa-folder-open"></i></div>
                        <div>
                            <h4><?php echo e(__('cp_dash_files_title')); ?></h4>
                            <p><?php echo e(__('cp_dash_files_desc')); ?></p>
                        </div>
                    </div>
                    <div class="cp-dash-feature">
                        <div class="cp-dash-feature-icon icon-green"><i class="fas fa-envelope"></i></div>
                        <div>
                            <h4><?php echo e(__('cp_dash_email_title')); ?></h4>
                            <p><?php echo e(__('cp_dash_email_desc')); ?></p>
                        </div>
                    </div>
                    <div class="cp-dash-feature">
                        <div class="cp-dash-feature-icon icon-purple"><i class="fas fa-database"></i></div>
                        <div>
                            <h4><?php echo e(__('cp_dash_db_title')); ?></h4>
                            <p><?php echo e(__('cp_dash_db_desc')); ?></p>
                        </div>
                    </div>
                    <div class="cp-dash-feature">
                        <div class="cp-dash-feature-icon icon-amber"><i class="fas fa-lock"></i></div>
                        <div>
                            <h4><?php echo e(__('cp_dash_ssl_title')); ?></h4>
                            <p><?php echo e(__('cp_dash_ssl_desc')); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ WHAT YOU CAN DO WITH cPANEL ═══════════════ -->
    <section class="cp-tasks reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag"><?php echo e(__('cp_tasks_tag')); ?></div>
                <h2><?php echo e(__('cp_tasks_title')); ?></h2>
                <p><?php echo e(__('cp_tasks_desc')); ?></p>
            </div>

            <div class="cp-tasks-grid">
                <div class="cp-task-card">
                    <div class="cp-task-icon"><i class="fas fa-folder-open"></i></div>
                    <h4><?php echo e(__('cp_task_files_title')); ?></h4>
                    <p><?php echo e(__('cp_task_files_desc')); ?></p>
                    <ul class="cp-task-list">
                        <li><?php echo e(__('cp_task_files_1')); ?></li>
                        <li><?php echo e(__('cp_task_files_2')); ?></li>
                        <li><?php echo e(__('cp_task_files_3')); ?></li>
                    </ul>
                </div>
                <div class="cp-task-card">
                    <div class="cp-task-icon icon-green"><i class="fas fa-envelope"></i></div>
                    <h4><?php echo e(__('cp_task_email_title')); ?></h4>
                    <p><?php echo e(__('cp_task_email_desc')); ?></p>
                    <ul class="cp-task-list">
                        <li><?php echo e(__('cp_task_email_1')); ?></li>
                        <li><?php echo e(__('cp_task_email_2')); ?></li>
                        <li><?php echo e(__('cp_task_email_3')); ?></li>
                    </ul>
                </div>
                <div class="cp-task-card">
                    <div class="cp-task-icon icon-purple"><i class="fas fa-globe"></i></div>
                    <h4><?php echo e(__('cp_task_domains_title')); ?></h4>
                    <p><?php echo e(__('cp_task_domains_desc')); ?></p>
                    <ul class="cp-task-list">
                        <li><?php echo e(__('cp_task_domains_1')); ?></li>
                        <li><?php echo e(__('cp_task_domains_2')); ?></li>
                        <li><?php echo e(__('cp_task_domains_3')); ?></li>
                    </ul>
                </div>
                <div class="cp-task-card">
                    <div class="cp-task-icon icon-amber"><i class="fas fa-database"></i></div>
                    <h4><?php echo e(__('cp_task_mysql_title')); ?></h4>
                    <p><?php echo e(__('cp_task_mysql_desc')); ?></p>
                    <ul class="cp-task-list">
                        <li><?php echo e(__('cp_task_mysql_1')); ?></li>
                        <li><?php echo e(__('cp_task_mysql_2')); ?></li>
                        <li><?php echo e(__('cp_task_mysql_3')); ?></li>
                    </ul>
                </div>
                <div class="cp-task-card">
                    <div class="cp-task-icon"><i class="fas fa-cloud-download-alt"></i></div>
                    <h4><?php echo e(__('cp_task_backup_title')); ?></h4>
                    <p><?php echo e(__('cp_task_backup_desc')); ?></p>
                    <ul class="cp-task-list">
                        <li><?php echo e(__('cp_task_backup_1')); ?></li>
                        <li><?php echo e(__('cp_task_backup_2')); ?></li>
                        <li><?php echo e(__('cp_task_backup_3')); ?></li>
                    </ul>
                </div>
                <div class="cp-task-card">
                    <div class="cp-task-icon icon-green"><i class="fas fa-th-large"></i></div>
                    <h4><?php echo e(__('cp_task_apps_title')); ?></h4>
                    <p><?php echo e(__('cp_task_apps_desc')); ?></p>
                    <ul class="cp-task-list">
                        <li><?php echo e(__('cp_task_apps_1')); ?></li>
                        <li><?php echo e(__('cp_task_apps_2')); ?></li>
                        <li><?php echo e(__('cp_task_apps_3')); ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ 1-CLICK INSTALLER ═══════════════ -->
    <section class="cp-installer reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag"><?php echo e(__('cp_installer_tag')); ?></div>
                <h2><?php echo e(__('cp_installer_title')); ?></h2>
                <p><?php echo e(__('cp_installer_desc')); ?></p>
            </div>

            <div class="cp-installer-grid">
                <div class="cp-installer-card">
                    <div class="cp-installer-logo"><i class="fab fa-wordpress"></i></div>
                    <h4><?php echo e(__('cp_installer_wp_title')); ?></h4>
                    <p><?php echo e(__('cp_installer_wp_desc')); ?></p>
                    <div class="cp-installer-meta"><span><?php echo e(__('cp_installer_wp_meta1')); ?></span><span><?php echo e(__('cp_installer_wp_meta2')); ?></span></div>
                </div>
                <div class="cp-installer-card">
                    <div class="cp-installer-logo icon-green"><i class="fab fa-joomla"></i></div>
                    <h4><?php echo e(__('cp_installer_joomla_title')); ?></h4>
                    <p><?php echo e(__('cp_installer_joomla_desc')); ?></p>
                    <div class="cp-installer-meta"><span><?php echo e(__('cp_installer_joomla_meta1')); ?></span><span><?php echo e(__('cp_installer_joomla_meta2')); ?></span></div>
                </div>
                <div class="cp-installer-card">
                    <div class="cp-installer-logo icon-amber"><i class="fab fa-magento"></i></div>
                    <h4><?php echo e(__('cp_installer_magento_title')); ?></h4>
                    <p><?php echo e(__('cp_installer_magento_desc')); ?></p>
                    <div class="cp-installer-meta"><span><?php echo e(__('cp_installer_magento_meta1')); ?></span><span><?php echo e(__('cp_installer_magento_meta2')); ?></span></div>
                </div>
                <div class="cp-installer-card">
                    <div class="cp-installer-logo icon-purple"><i class="fab fa-laravel"></i></div>
                    <h4><?php echo e(__('cp_installer_laravel_title')); ?></h4>
                    <p><?php echo e(__('cp_installer_laravel_desc')); ?></p>
                    <div class="cp-installer-meta"><span><?php echo e(__('cp_installer_laravel_meta1')); ?></span><span><?php echo e(__('cp_installer_laravel_meta2')); ?></span></div>
                </div>
            </div>

            <p class="cp-installer-footnote"><i class="fas fa-plus-circle"></i> <?php echo e(__('cp_installer_footnote')); ?></p>
        </div>
    </section>

    <!-- ═══════════════ EVERYTHING INCLUDED (FEATURES) ═══════════════ -->
    <section class="features-grid-section reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag"><?php echo e(__('cp_features_tag')); ?></div>
                <h2><?php echo e(__('cp_features_title')); ?></h2>
                <p><?php echo e(__('cp_features_desc')); ?></p>
            </div>

            <div class="swiper features-swiper" id="featuresSwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><div class="feature-card">
                        <div class="feature-icon"><i class="fas fa-microchip"></i></div>
                        <h4><?php echo e(__('cp_feat_dedicated_title')); ?></h4>
                        <p><?php echo e(__('cp_feat_dedicated_desc')); ?></p>
                    </div></div>
                    <div class="swiper-slide"><div class="feature-card">
                        <div class="feature-icon icon-green"><i class="fas fa-shield-alt"></i></div>
                        <h4><?php echo e(__('cp_feat_cloudlinux_title')); ?></h4>
                        <p><?php echo e(__('cp_feat_cloudlinux_desc')); ?></p>
                    </div></div>
                    <div class="swiper-slide"><div class="feature-card">
                        <div class="feature-icon icon-purple"><i class="fas fa-tachometer-alt"></i></div>
                        <h4><?php echo e(__('cp_feat_litespeed_title')); ?></h4>
                        <p><?php echo e(__('cp_feat_litespeed_desc')); ?></p>
                    </div></div>
                    <div class="swiper-slide"><div class="feature-card">
                        <div class="feature-icon icon-amber"><i class="fas fa-robot"></i></div>
                        <h4><?php echo e(__('cp_feat_imunify_title')); ?></h4>
                        <p><?php echo e(__('cp_feat_imunify_desc')); ?></p>
                    </div></div>
                    <div class="swiper-slide"><div class="feature-card">
                        <div class="feature-icon"><i class="fas fa-cloud-download-alt"></i></div>
                        <h4><?php echo e(__('cp_feat_jetbackup_title')); ?></h4>
                        <p><?php echo e(__('cp_feat_jetbackup_desc')); ?></p>
                    </div></div>
                    <div class="swiper-slide"><div class="feature-card">
                        <div class="feature-icon icon-green"><i class="fas fa-lock"></i></div>
                        <h4><?php echo e(__('cp_feat_freessl_title')); ?></h4>
                        <p><?php echo e(__('cp_feat_freessl_desc')); ?></p>
                    </div></div>
                    <div class="swiper-slide"><div class="feature-card">
                        <div class="feature-icon icon-purple"><i class="fas fa-th"></i></div>
                        <h4><?php echo e(__('cp_feat_softaculous_title')); ?></h4>
                        <p><?php echo e(__('cp_feat_softaculous_desc')); ?></p>
                    </div></div>
                    <div class="swiper-slide"><div class="feature-card">
                        <div class="feature-icon icon-amber"><i class="fas fa-paint-brush"></i></div>
                        <h4><?php echo e(__('cp_feat_sitepad_title')); ?></h4>
                        <p><?php echo e(__('cp_feat_sitepad_desc')); ?></p>
                    </div></div>
                    <div class="swiper-slide"><div class="feature-card">
                        <div class="feature-icon"><i class="fas fa-code"></i></div>
                        <h4><?php echo e(__('cp_feat_php_title')); ?></h4>
                        <p><?php echo e(__('cp_feat_php_desc')); ?></p>
                    </div></div>
                    <div class="swiper-slide"><div class="feature-card">
                        <div class="feature-icon icon-green"><i class="fas fa-database"></i></div>
                        <h4><?php echo e(__('cp_feat_mysql_title')); ?></h4>
                        <p><?php echo e(__('cp_feat_mysql_desc')); ?></p>
                    </div></div>
                    <div class="swiper-slide"><div class="feature-card">
                        <div class="feature-icon icon-purple"><i class="fas fa-globe"></i></div>
                        <h4><?php echo e(__('cp_feat_freedomain_title')); ?></h4>
                        <p><?php echo e(__('cp_feat_freedomain_desc')); ?></p>
                    </div></div>
                    <div class="swiper-slide"><div class="feature-card">
                        <div class="feature-icon icon-amber"><i class="fas fa-undo"></i></div>
                        <h4><?php echo e(__('cp_feat_moneyback_title')); ?></h4>
                        <p><?php echo e(__('cp_feat_moneyback_desc')); ?></p>
                    </div></div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ SECURITY & RELIABILITY ═══════════════ -->
    <section class="cp-security reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag"><?php echo e(__('cp_sec_tag')); ?></div>
                <h2><?php echo e(__('cp_sec_title')); ?></h2>
                <p><?php echo e(__('cp_sec_desc')); ?></p>
            </div>

            <div class="cp-security-grid">
                <div class="cp-security-card">
                    <div class="cp-security-icon"><i class="fas fa-robot"></i></div>
                    <h4><?php echo e(__('cp_sec_imunify_title')); ?></h4>
                    <p><?php echo e(__('cp_sec_imunify_desc')); ?></p>
                </div>
                <div class="cp-security-card">
                    <div class="cp-security-icon icon-green"><i class="fas fa-user-shield"></i></div>
                    <h4><?php echo e(__('cp_sec_cloudlinux_title')); ?></h4>
                    <p><?php echo e(__('cp_sec_cloudlinux_desc')); ?></p>
                </div>
                <div class="cp-security-card">
                    <div class="cp-security-icon icon-purple"><i class="fas fa-lock"></i></div>
                    <h4><?php echo e(__('cp_sec_ssl_title')); ?></h4>
                    <p><?php echo e(__('cp_sec_ssl_desc')); ?></p>
                </div>
                <div class="cp-security-card">
                    <div class="cp-security-icon icon-amber"><i class="fas fa-fire-alt"></i></div>
                    <h4><?php echo e(__('cp_sec_waf_title')); ?></h4>
                    <p><?php echo e(__('cp_sec_waf_desc')); ?></p>
                </div>
                <div class="cp-security-card">
                    <div class="cp-security-icon"><i class="fas fa-cloud-download-alt"></i></div>
                    <h4><?php echo e(__('cp_sec_backup_title')); ?></h4>
                    <p><?php echo e(__('cp_sec_backup_desc')); ?></p>
                </div>
                <div class="cp-security-card">
                    <div class="cp-security-icon icon-green"><i class="fas fa-signal"></i></div>
                    <h4><?php echo e(__('cp_sec_uptime_title')); ?></h4>
                    <p><?php echo e(__('cp_sec_uptime_desc')); ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ GETTING STARTED & MIGRATION ═══════════════ -->
    <section class="onboarding reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag"><?php echo e(__('cp_onboard_tag')); ?></div>
                <h2><?php echo e(__('cp_onboard_title')); ?></h2>
                <p><?php echo e(__('cp_onboard_desc')); ?></p>
            </div>

            <div class="onboarding-tracks">
                <div class="track">
                    <div class="track-icon"><i class="fas fa-rocket"></i></div>
                    <h3><?php echo e(__('cp_onboard_new_title')); ?></h3>
                    <p><?php echo e(__('cp_onboard_new_desc')); ?></p>
                    <div class="track-steps">
                        <div class="track-step"><div class="step-num">1</div><div class="step-content"><h4><?php echo e(__('cp_onboard_new_step1_title')); ?></h4><p><?php echo e(__('cp_onboard_new_step1_desc')); ?></p></div></div>
                        <div class="track-step"><div class="step-num">2</div><div class="step-content"><h4><?php echo e(__('cp_onboard_new_step2_title')); ?></h4><p><?php echo e(__('cp_onboard_new_step2_desc')); ?></p></div></div>
                        <div class="track-step"><div class="step-num">3</div><div class="step-content"><h4><?php echo e(__('cp_onboard_new_step3_title')); ?></h4><p><?php echo e(__('cp_onboard_new_step3_desc')); ?></p></div></div>
                        <div class="track-step"><div class="step-num">4</div><div class="step-content"><h4><?php echo e(__('cp_onboard_new_step4_title')); ?></h4><p><?php echo e(__('cp_onboard_new_step4_desc')); ?></p></div></div>
                    </div>
                </div>
                <div class="track">
                    <div class="track-icon"><i class="fas fa-truck"></i></div>
                    <h3><?php echo e(__('cp_onboard_migrate_title')); ?></h3>
                    <p><?php echo e(__('cp_onboard_migrate_desc')); ?></p>
                    <div class="track-steps">
                        <div class="track-step"><div class="step-num">1</div><div class="step-content"><h4><?php echo e(__('cp_onboard_migrate_step1_title')); ?></h4><p><?php echo e(__('cp_onboard_migrate_step1_desc')); ?></p></div></div>
                        <div class="track-step"><div class="step-num">2</div><div class="step-content"><h4><?php echo e(__('cp_onboard_migrate_step2_title')); ?></h4><p><?php echo e(__('cp_onboard_migrate_step2_desc')); ?></p></div></div>
                        <div class="track-step"><div class="step-num">3</div><div class="step-content"><h4><?php echo e(__('cp_onboard_migrate_step3_title')); ?></h4><p><?php echo e(__('cp_onboard_migrate_step3_desc')); ?></p></div></div>
                        <div class="track-step"><div class="step-num">4</div><div class="step-content"><h4><?php echo e(__('cp_onboard_migrate_step4_title')); ?></h4><p><?php echo e(__('cp_onboard_migrate_step4_desc')); ?></p></div></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ SOCIAL PROOF ═══════════════ -->
    <section class="social-proof reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag"><?php echo e(__('cp_proof_tag')); ?></div>
                <h2><?php echo e(__('cp_proof_title')); ?></h2>
                <p><?php echo e(__('cp_proof_desc')); ?></p>
            </div>

            <div class="proof-stats">
                <div class="proof-stat">
                    <div class="stat-num"><?php echo e(__('cp_proof_stat1_num')); ?></div>
                    <div class="stat-text"><?php echo e(__('cp_proof_stat1_text')); ?></div>
                </div>
                <div class="proof-stat">
                    <div class="stat-num"><?php echo e(__('cp_proof_stat2_num')); ?></div>
                    <div class="stat-text"><?php echo e(__('cp_proof_stat2_text')); ?></div>
                </div>
                <div class="proof-stat">
                    <div class="stat-num"><?php echo e(__('cp_proof_stat3_num')); ?></div>
                    <div class="stat-text"><?php echo e(__('cp_proof_stat3_text')); ?></div>
                </div>
                <div class="proof-stat">
                    <div class="stat-num"><?php echo e(__('cp_proof_stat4_num')); ?></div>
                    <div class="stat-text"><?php echo e(__('cp_proof_stat4_text')); ?></div>
                </div>
            </div>

            <div class="swiper testimonials-swiper" id="testimonialsSwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="testimonial-card">
                            <div class="testimonial-stars">&starf;&starf;&starf;&starf;&starf;</div>
                            <p class="testimonial-text">"<?php echo e(__('cp_testimonial1_text')); ?>"</p>
                            <div class="testimonial-author">
                                <div class="testimonial-avatar">A</div>
                                <div>
                                    <div class="testimonial-name"><?php echo e(__('cp_testimonial1_name')); ?></div>
                                    <div class="testimonial-origin"><?php echo e(__('cp_testimonial1_origin')); ?></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="testimonial-card">
                            <div class="testimonial-stars">&starf;&starf;&starf;&starf;&starf;</div>
                            <p class="testimonial-text">"<?php echo e(__('cp_testimonial2_text')); ?>"</p>
                            <div class="testimonial-author">
                                <div class="testimonial-avatar">M</div>
                                <div>
                                    <div class="testimonial-name"><?php echo e(__('cp_testimonial2_name')); ?></div>
                                    <div class="testimonial-origin"><?php echo e(__('cp_testimonial2_origin')); ?></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="testimonial-card">
                            <div class="testimonial-stars">&starf;&starf;&starf;&starf;&starf;</div>
                            <p class="testimonial-text">"<?php echo e(__('cp_testimonial3_text')); ?>"</p>
                            <div class="testimonial-author">
                                <div class="testimonial-avatar">J</div>
                                <div>
                                    <div class="testimonial-name"><?php echo e(__('cp_testimonial3_name')); ?></div>
                                    <div class="testimonial-origin"><?php echo e(__('cp_testimonial3_origin')); ?></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="testimonial-card">
                            <div class="testimonial-stars">&starf;&starf;&starf;&starf;&starf;</div>
                            <p class="testimonial-text">"<?php echo e(__('cp_testimonial4_text')); ?>"</p>
                            <div class="testimonial-author">
                                <div class="testimonial-avatar">D</div>
                                <div>
                                    <div class="testimonial-name"><?php echo e(__('cp_testimonial4_name')); ?></div>
                                    <div class="testimonial-origin"><?php echo e(__('cp_testimonial4_origin')); ?></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="testimonial-card">
                            <div class="testimonial-stars">&starf;&starf;&starf;&starf;&starf;</div>
                            <p class="testimonial-text">"<?php echo e(__('cp_testimonial5_text')); ?>"</p>
                            <div class="testimonial-author">
                                <div class="testimonial-avatar">F</div>
                                <div>
                                    <div class="testimonial-name"><?php echo e(__('cp_testimonial5_name')); ?></div>
                                    <div class="testimonial-origin"><?php echo e(__('cp_testimonial5_origin')); ?></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="testimonial-card">
                            <div class="testimonial-stars">&starf;&starf;&starf;&starf;&starf;</div>
                            <p class="testimonial-text">"<?php echo e(__('cp_testimonial6_text')); ?>"</p>
                            <div class="testimonial-author">
                                <div class="testimonial-avatar">R</div>
                                <div>
                                    <div class="testimonial-name"><?php echo e(__('cp_testimonial6_name')); ?></div>
                                    <div class="testimonial-origin"><?php echo e(__('cp_testimonial6_origin')); ?></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="testimonial-card">
                            <div class="testimonial-stars">&starf;&starf;&starf;&starf;&starf;</div>
                            <p class="testimonial-text">"<?php echo e(__('cp_testimonial7_text')); ?>"</p>
                            <div class="testimonial-author">
                                <div class="testimonial-avatar">S</div>
                                <div>
                                    <div class="testimonial-name"><?php echo e(__('cp_testimonial7_name')); ?></div>
                                    <div class="testimonial-origin"><?php echo e(__('cp_testimonial7_origin')); ?></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="testimonial-card">
                            <div class="testimonial-stars">&starf;&starf;&starf;&starf;&starf;</div>
                            <p class="testimonial-text">"<?php echo e(__('cp_testimonial8_text')); ?>"</p>
                            <div class="testimonial-author">
                                <div class="testimonial-avatar">O</div>
                                <div>
                                    <div class="testimonial-name"><?php echo e(__('cp_testimonial8_name')); ?></div>
                                    <div class="testimonial-origin"><?php echo e(__('cp_testimonial8_origin')); ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>

            <div class="trustpilot-link">
                <a href="https://www.trustpilot.com/review/yottasrc.com" class="trustpilot-badge" target="_blank" rel="noopener noreferrer">
                    <i class="fas fa-star"></i>
                    <?php echo e(__('cp_trustpilot')); ?>
                    <i class="fas fa-external-link-alt trustpilot-external-icon"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- ═══════════════ FAQ ═══════════════ -->
    <section class="faq-section reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag"><?php echo e(__('cp_faq_tag')); ?></div>
                <h2><?php echo e(__('cp_faq_title')); ?></h2>
                <p><?php echo e(__('cp_faq_desc')); ?></p>
            </div>

            <div class="faq-layout">
                <div class="faq-tabs">
                    <button class="faq-tab active" data-faq-target="faq-general"><i class="fas fa-server"></i> <?php echo e(__('cp_faq_tab_general')); ?></button>
                    <button class="faq-tab" data-faq-target="faq-technical"><i class="fas fa-cogs"></i> <?php echo e(__('cp_faq_tab_technical')); ?></button>
                    <button class="faq-tab" data-faq-target="faq-billing"><i class="fas fa-credit-card"></i> <?php echo e(__('cp_faq_tab_billing')); ?></button>
                </div>

                <div class="faq-panels">
                    <div class="faq-panel active" id="faq-general">
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('cp_faq_g1_q')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('cp_faq_g1_a')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('cp_faq_g2_q')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('cp_faq_g2_a')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('cp_faq_g3_q')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('cp_faq_g3_a')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('cp_faq_g4_q')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('cp_faq_g4_a')); ?></p></div></div>
                    </div>

                    <div class="faq-panel" id="faq-technical">
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('cp_faq_t1_q')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('cp_faq_t1_a')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('cp_faq_t2_q')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('cp_faq_t2_a')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('cp_faq_t3_q')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('cp_faq_t3_a')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('cp_faq_t4_q')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('cp_faq_t4_a')); ?></p></div></div>
                    </div>

                    <div class="faq-panel" id="faq-billing">
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('cp_faq_b1_q')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('cp_faq_b1_a')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('cp_faq_b2_q')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('cp_faq_b2_a')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('cp_faq_b3_q')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('cp_faq_b3_a')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('cp_faq_b4_q')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('cp_faq_b4_a')); ?></p></div></div>
                    </div>
                </div>
            </div>

            <div class="faq-actions">
                <a href="<?php echo e(SITE_URL); ?>/contact-us/" class="btn-primary"><i class="fas fa-headset"></i> <?php echo e(__('cp_faq_open_ticket')); ?></a>
                <a href="<?php echo e(SITE_URL); ?>/faq" class="btn-secondary"><?php echo e(__('cp_faq_browse_all')); ?> <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </section>

    <!-- ═══════════════ ClouDNS PARTNERSHIP ═══════════════ -->
    <?php include __DIR__ . '/includes/section-cloudns.php'; ?>

    <!-- ═══════════════ MAILCHANNELS PARTNERSHIP ═══════════════ -->
    <?php include __DIR__ . '/includes/section-mailchannels.php'; ?>

    <!-- ═══════════════ COMPETITORS COMPARISON ═══════════════ -->
    <?php $compare_type = 'hosting'; include __DIR__ . '/includes/section-competitors.php'; ?>

    <!-- ═══════════════ BOTTOM CTA ═══════════════ -->
    <section class="promo-cta reveal">
        <div class="container">
            <div class="promo-cta-inner">
                <div class="promo-cta-glow"></div>
                <div class="promo-cta-icon"><i class="fas fa-rocket"></i></div>
                <h2><?php echo e(__('cp_cta_title')); ?></h2>
                <p><?php echo e(__('cp_cta_desc')); ?></p>
                <a href="#plans" class="btn-primary"><?php echo e(__('cp_cta_btn')); ?> <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
