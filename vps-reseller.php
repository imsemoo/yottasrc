<?php
/**
 * YottaSrc — VPS Reseller
 * ====================================
 * VPS Reseller — resell VPS infrastructure to your clients with full white-label control.
 */
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/topbar.php';
?>

    <!-- ═══════════════ HERO ═══════════════ -->
    <section class="page-hero vps-hero reveal">
        <div class="container">
            <div class="page-hero-split">
                <div class="page-hero-content">
                    <div class="page-breadcrumb">
                        <a href="<?php echo e(SITE_URL); ?>/"><?php echo e(__('breadcrumb_home')); ?></a>
                        <i class="fas fa-chevron-right"></i>
                        <a href="<?php echo e(SITE_URL); ?>/cpanel-reseller/"><?php echo e(__('reseller_breadcrumb')); ?></a>
                        <i class="fas fa-chevron-right"></i>
                        <span><?php echo e(__('reseller_vps_breadcrumb')); ?></span>
                    </div>
                    <h1><?php echo __('reseller_vps_title'); ?></h1>
                    <p class="page-hero-desc">
                        <?php echo e(__('reseller_vps_desc')); ?>
                    </p>
                    <div class="page-hero-ctas">
                        <a href="#plans" class="btn-primary"><?php echo e(__('common_view_plans')); ?> <i class="fas fa-arrow-down"></i></a>
                        <a href="<?php echo e(SITE_URL); ?>/contact-us/" class="btn-secondary"><i class="fas fa-headset"></i> <?php echo e(__('common_talk_to_sales')); ?></a>
                    </div>
                    <div class="page-hero-badges">
                        <div class="hero-badge-item"><i class="fas fa-check"></i> <?php echo e(__('rvps_badge_kvm')); ?></div>
                        <div class="hero-badge-item"><i class="fas fa-check"></i> <?php echo e(__('rvps_badge_api')); ?></div>
                        <div class="hero-badge-item"><i class="fas fa-check"></i> <?php echo e(__('rvps_badge_wl')); ?></div>
                        <div class="hero-badge-item"><i class="fas fa-check"></i> <?php echo e(__('rvps_badge_locations')); ?></div>
                    </div>
                </div>
                <div class="page-hero-visual">
                    <svg viewBox="0 0 440 400" fill="none" xmlns="http://www.w3.org/2000/svg" class="hero-illustration" aria-label="VPS Reseller infrastructure illustration">
                        <!-- Window Frame -->
                        <rect x="20" y="20" width="400" height="360" rx="16" fill="var(--bg-card)" stroke="var(--border-primary)" stroke-width="1.5"/>
                        <rect x="20" y="20" width="400" height="38" rx="16" fill="var(--bg-tertiary)"/>
                        <rect x="20" y="42" width="400" height="16" fill="var(--bg-tertiary)"/>
                        <circle cx="42" cy="39" r="5" fill="var(--brand-error)" opacity="0.6"/>
                        <circle cx="58" cy="39" r="5" fill="var(--brand-warning)" opacity="0.6"/>
                        <circle cx="74" cy="39" r="5" fill="var(--brand-secondary)" opacity="0.6"/>
                        <text x="220" y="44" text-anchor="middle" fill="var(--text-tertiary)" font-size="11" font-family="var(--font-mono)" font-weight="600" opacity="0.6">VPS Reseller — Dashboard</text>

                        <!-- Left side: Server rack visual -->
                        <rect x="32" y="68" width="80" height="290" rx="8" fill="var(--bg-tertiary)" opacity="0.5"/>
                        <text x="72" y="84" text-anchor="middle" fill="var(--text-tertiary)" font-size="7" font-family="var(--font-mono)" font-weight="700" opacity="0.4">INFRASTRUCTURE</text>

                        <!-- Server nodes -->
                        <rect x="38" y="94" width="68" height="28" rx="6" fill="var(--bg-card)" stroke="var(--brand-primary)" stroke-width="0.8"/>
                        <circle cx="52" cy="108" r="4" fill="var(--brand-secondary)" opacity="0.6"/>
                        <text x="76" y="112" text-anchor="middle" fill="var(--text-tertiary)" font-size="7" font-family="var(--font-mono)" opacity="0.5">Node-EU01</text>

                        <rect x="38" y="130" width="68" height="28" rx="6" fill="var(--bg-card)" stroke="var(--brand-primary)" stroke-width="0.8"/>
                        <circle cx="52" cy="144" r="4" fill="var(--brand-secondary)" opacity="0.6"/>
                        <text x="76" y="148" text-anchor="middle" fill="var(--text-tertiary)" font-size="7" font-family="var(--font-mono)" opacity="0.5">Node-US01</text>

                        <rect x="38" y="166" width="68" height="28" rx="6" fill="var(--bg-card)" stroke="var(--brand-primary)" stroke-width="0.8"/>
                        <circle cx="52" cy="180" r="4" fill="var(--brand-secondary)" opacity="0.6"/>
                        <text x="76" y="184" text-anchor="middle" fill="var(--text-tertiary)" font-size="7" font-family="var(--font-mono)" opacity="0.5">Node-AS01</text>

                        <rect x="38" y="202" width="68" height="28" rx="6" fill="var(--bg-card)" stroke="var(--brand-primary)" stroke-width="0.8"/>
                        <circle cx="52" cy="216" r="4" fill="var(--brand-warning)" opacity="0.6"/>
                        <text x="76" y="220" text-anchor="middle" fill="var(--text-tertiary)" font-size="7" font-family="var(--font-mono)" opacity="0.5">Node-EU02</text>

                        <!-- Right side: VPS instances list -->
                        <text x="128" y="82" fill="var(--brand-primary)" font-size="9" font-family="var(--font-display)" font-weight="700" letter-spacing="0.8" opacity="0.7">CLIENT VPS INSTANCES</text>
                        <line x1="128" y1="88" x2="406" y2="88" stroke="var(--border-primary)" stroke-width="0.6"/>

                        <!-- VPS Instance Row 1 -->
                        <rect x="128" y="96" width="278" height="42" rx="8" fill="var(--bg-tertiary)"/>
                        <circle cx="148" cy="117" r="10" fill="var(--brand-primary)" opacity="0.15"/>
                        <text x="148" y="121" text-anchor="middle" fill="var(--brand-primary)" font-size="9" font-family="var(--font-body)" font-weight="700" opacity="0.7">V1</text>
                        <text x="170" y="111" fill="var(--text-secondary)" font-size="8.5" font-family="var(--font-body)" font-weight="600" opacity="0.7">client-web-prod (2 vCPU · 4 GB)</text>
                        <text x="170" y="125" fill="var(--text-tertiary)" font-size="7" font-family="var(--font-mono)" opacity="0.5">Finland · 80 GB NVMe · Running</text>
                        <rect x="358" y="107" width="40" height="16" rx="8" fill="var(--brand-secondary)" opacity="0.15"/>
                        <text x="378" y="118" text-anchor="middle" fill="var(--brand-secondary)" font-size="7" font-family="var(--font-mono)" font-weight="600" opacity="0.7">Live</text>

                        <!-- VPS Instance Row 2 -->
                        <rect x="128" y="146" width="278" height="42" rx="8" fill="var(--bg-tertiary)"/>
                        <circle cx="148" cy="167" r="10" fill="var(--brand-secondary)" opacity="0.15"/>
                        <text x="148" y="171" text-anchor="middle" fill="var(--brand-secondary)" font-size="9" font-family="var(--font-body)" font-weight="700" opacity="0.7">V2</text>
                        <text x="170" y="161" fill="var(--text-secondary)" font-size="8.5" font-family="var(--font-body)" font-weight="600" opacity="0.7">app-server-staging (4 vCPU · 8 GB)</text>
                        <text x="170" y="175" fill="var(--text-tertiary)" font-size="7" font-family="var(--font-mono)" opacity="0.5">Germany · 160 GB NVMe · Running</text>
                        <rect x="358" y="157" width="40" height="16" rx="8" fill="var(--brand-secondary)" opacity="0.15"/>
                        <text x="378" y="168" text-anchor="middle" fill="var(--brand-secondary)" font-size="7" font-family="var(--font-mono)" font-weight="600" opacity="0.7">Live</text>

                        <!-- VPS Instance Row 3 -->
                        <rect x="128" y="196" width="278" height="42" rx="8" fill="var(--bg-tertiary)"/>
                        <circle cx="148" cy="217" r="10" fill="var(--brand-accent)" opacity="0.15"/>
                        <text x="148" y="221" text-anchor="middle" fill="var(--brand-accent)" font-size="9" font-family="var(--font-body)" font-weight="700" opacity="0.7">V3</text>
                        <text x="170" y="211" fill="var(--text-secondary)" font-size="8.5" font-family="var(--font-body)" font-weight="600" opacity="0.7">database-cluster (8 vCPU · 16 GB)</text>
                        <text x="170" y="225" fill="var(--text-tertiary)" font-size="7" font-family="var(--font-mono)" opacity="0.5">USA · 320 GB NVMe · Running</text>
                        <rect x="358" y="207" width="40" height="16" rx="8" fill="var(--brand-secondary)" opacity="0.15"/>
                        <text x="378" y="218" text-anchor="middle" fill="var(--brand-secondary)" font-size="7" font-family="var(--font-mono)" font-weight="600" opacity="0.7">Live</text>

                        <!-- Summary bar -->
                        <rect x="128" y="256" width="278" height="50" rx="10" fill="var(--bg-card)" stroke="var(--border-primary)" stroke-width="0.8"/>
                        <text x="175" y="278" text-anchor="middle" fill="var(--brand-primary)" font-size="16" font-family="var(--font-display)" font-weight="800" opacity="0.8">12</text>
                        <text x="175" y="296" text-anchor="middle" fill="var(--text-tertiary)" font-size="7" font-family="var(--font-mono)" opacity="0.5">Active VPS</text>
                        <line x1="220" y1="264" x2="220" y2="300" stroke="var(--border-primary)" stroke-width="0.6"/>
                        <text x="267" y="278" text-anchor="middle" fill="var(--brand-secondary)" font-size="16" font-family="var(--font-display)" font-weight="800" opacity="0.8">48 vCPU</text>
                        <text x="267" y="296" text-anchor="middle" fill="var(--text-tertiary)" font-size="7" font-family="var(--font-mono)" opacity="0.5">Allocated</text>
                        <line x1="322" y1="264" x2="322" y2="300" stroke="var(--border-primary)" stroke-width="0.6"/>
                        <text x="367" y="278" text-anchor="middle" fill="var(--brand-accent)" font-size="16" font-family="var(--font-display)" font-weight="800" opacity="0.8">3.2 TB</text>
                        <text x="367" y="296" text-anchor="middle" fill="var(--text-tertiary)" font-size="7" font-family="var(--font-mono)" opacity="0.5">Storage</text>

                        <!-- + Deploy VPS button -->
                        <rect x="128" y="322" width="120" height="30" rx="8" fill="var(--brand-primary)" opacity="0.12" stroke="var(--brand-primary)" stroke-width="0.8" stroke-dasharray="4 2"/>
                        <text x="188" y="341" text-anchor="middle" fill="var(--brand-primary)" font-size="10" font-family="var(--font-body)" font-weight="600" opacity="0.6">+ Deploy VPS</text>

                        <!-- API badge -->
                        <rect x="265" y="322" width="140" height="30" rx="8" fill="var(--bg-tertiary)"/>
                        <text x="335" y="338" text-anchor="middle" fill="var(--text-tertiary)" font-size="8" font-family="var(--font-mono)" opacity="0.5">API: POST /v1/vps/create</text>

                        <!-- Floating badges -->
                        <rect x="356" y="2" width="80" height="36" rx="10" fill="var(--bg-card)" stroke="var(--border-primary)" stroke-width="1">
                            <animate attributeName="y" values="2;8;2" dur="5s" repeatCount="indefinite"/>
                        </rect>
                        <text x="372" y="17" fill="var(--text-tertiary)" font-size="7" font-family="var(--font-mono)" font-weight="600" opacity="0.6">
                            CLIENTS
                            <animate attributeName="y" values="17;23;17" dur="5s" repeatCount="indefinite"/>
                        </text>
                        <text x="372" y="31" fill="var(--brand-secondary)" font-size="13" font-family="var(--font-display)" font-weight="800" opacity="0.8">
                            8 Active
                            <animate attributeName="y" values="31;37;31" dur="5s" repeatCount="indefinite"/>
                        </text>

                        <circle cx="8" cy="100" r="3" fill="var(--brand-primary)" opacity="0.25">
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
                <span class="partner-logo"><i class="fas fa-microchip"></i> <?php echo e(__('rvps_powered_kvm')); ?></span>
                <span class="partner-logo"><i class="fas fa-hdd"></i> <?php echo e(__('rvps_powered_nvme')); ?></span>
                <span class="partner-logo"><i class="fas fa-network-wired"></i> <?php echo e(__('rvps_powered_network')); ?></span>
                <span class="partner-logo"><i class="fas fa-shield-alt"></i> <?php echo e(__('rvps_powered_ddos')); ?></span>
                <span class="partner-logo"><i class="fas fa-code"></i> <?php echo e(__('rvps_powered_api')); ?></span>
                <span class="partner-logo"><i class="fas fa-globe"></i> <?php echo e(__('rvps_powered_locations')); ?></span>
            </div>
        </div>
    </section>

    <!-- ═══════════════ PRICING PLANS ═══════════════ -->
    <section class="plans reveal" id="plans">
        <div class="container">
            <div class="section-header">
                <div class="section-tag"><?php echo e(__('rcpanel_plans_tag')); ?></div>
                <h2><?php echo e(__('rvps_plans_title')); ?></h2>
                <p><?php echo e(__('rvps_plans_desc')); ?></p>
            </div>

            <div class="plans-panel active" data-tab="vps-reseller">
                <div class="swiper plans-swiper">
                    <div class="swiper-wrapper">
                        <!-- Starter Pool -->
                        <div class="swiper-slide"><div class="plan-card">
                            <div class="plan-head"><div class="plan-name">Starter Pool</div><span class="plan-save">Save 25%</span></div>
                            <div class="plan-target"><?php echo e(__('rvps_target_starter')); ?></div>
                            <div class="plan-price">
                                <span class="old-price">€39.99</span>
                                <span class="current-price"><span class="currency">€</span><span class="amount">29.99</span><span class="period">EUR / mo</span></span>
                            </div>
                            <div class="plan-renewal"><i class="fas fa-check"></i> <?php echo e(__('reseller_same_renewal')); ?></div>
                            <button class="plan-cta" data-type="vps" data-href="<?php echo e(CP_URL); ?>/order/vps-reseller/starter-pool"><?php echo e(__('common_choose_plan')); ?></button>
                            <div class="plan-resources">
                                <div class="plan-res"><i class="fas fa-microchip"></i><span class="res-val">16 vCPU</span><span class="res-label"><?php echo e(__('rvps_res_cpu')); ?></span></div>
                                <div class="plan-res"><i class="fas fa-memory"></i><span class="res-val">32 GB</span><span class="res-label"><?php echo e(__('rvps_res_ram')); ?></span></div>
                                <div class="plan-res"><i class="fas fa-hdd"></i><span class="res-val">500 GB</span><span class="res-label"><?php echo e(__('rvps_res_nvme')); ?></span></div>
                                <div class="plan-res"><i class="fas fa-wifi"></i><span class="res-val">10 TB</span><span class="res-label"><?php echo e(__('rvps_res_bw')); ?></span></div>
                            </div>
                            <div class="plan-divider"><span><?php echo e(__('reseller_included')); ?></span></div>
                            <ul class="plan-features">
                                <li><i class="fas fa-server"></i> <?php echo e(__('rvps_feat_kvm')); ?></li>
                                <li><i class="fas fa-code"></i> <?php echo e(__('rvps_feat_api')); ?></li>
                                <li><i class="fas fa-palette"></i> <?php echo e(__('rvps_feat_wl')); ?></li>
                                <li><i class="fas fa-shield-alt"></i> <?php echo e(__('rvps_feat_ddos')); ?></li>
                                <li><i class="fas fa-camera"></i> <?php echo e(__('rvps_feat_snap')); ?></li>
                                <li><i class="fas fa-map-marker-alt"></i> <?php echo e(__('rvps_feat_locations')); ?></li>
                                <li><i class="fas fa-cogs"></i> <?php echo e(__('rvps_feat_whmcs')); ?></li>
                            </ul>
                        </div></div>

                        <!-- Growth Pool (Popular) -->
                        <div class="swiper-slide"><div class="plan-card popular">
                            <div class="plan-badge"><?php echo e(__('reseller_most_popular')); ?></div>
                            <div class="plan-head"><div class="plan-name">Growth Pool</div><span class="plan-save">Save 30%</span></div>
                            <div class="plan-target"><?php echo e(__('rvps_target_growth')); ?></div>
                            <div class="plan-price">
                                <span class="old-price">€99.99</span>
                                <span class="current-price"><span class="currency">€</span><span class="amount">69.99</span><span class="period">EUR / mo</span></span>
                            </div>
                            <div class="plan-renewal"><i class="fas fa-check"></i> <?php echo e(__('reseller_same_renewal')); ?></div>
                            <button class="plan-cta" data-type="vps" data-href="<?php echo e(CP_URL); ?>/order/vps-reseller/growth-pool"><?php echo e(__('common_choose_plan')); ?></button>
                            <div class="plan-resources">
                                <div class="plan-res"><i class="fas fa-microchip"></i><span class="res-val">48 vCPU</span><span class="res-label"><?php echo e(__('rvps_res_cpu')); ?></span></div>
                                <div class="plan-res"><i class="fas fa-memory"></i><span class="res-val">96 GB</span><span class="res-label"><?php echo e(__('rvps_res_ram')); ?></span></div>
                                <div class="plan-res"><i class="fas fa-hdd"></i><span class="res-val">1.5 TB</span><span class="res-label"><?php echo e(__('rvps_res_nvme')); ?></span></div>
                                <div class="plan-res"><i class="fas fa-wifi"></i><span class="res-val">30 TB</span><span class="res-label"><?php echo e(__('rvps_res_bw')); ?></span></div>
                            </div>
                            <div class="plan-divider"><span><?php echo e(__('reseller_included')); ?></span></div>
                            <ul class="plan-features">
                                <li><i class="fas fa-server"></i> <?php echo e(__('rvps_feat_kvm')); ?></li>
                                <li><i class="fas fa-code"></i> <?php echo e(__('rvps_feat_api')); ?></li>
                                <li><i class="fas fa-palette"></i> <?php echo e(__('rvps_feat_wl')); ?></li>
                                <li><i class="fas fa-shield-alt"></i> <?php echo e(__('rvps_feat_ddos')); ?></li>
                                <li><i class="fas fa-camera"></i> <?php echo e(__('rvps_feat_snap')); ?></li>
                                <li><i class="fas fa-map-marker-alt"></i> <?php echo e(__('rvps_feat_locations')); ?></li>
                                <li><i class="fas fa-cogs"></i> <?php echo e(__('rvps_feat_blesta')); ?></li>
                            </ul>
                        </div></div>

                        <!-- Scale Pool -->
                        <div class="swiper-slide"><div class="plan-card">
                            <div class="plan-head"><div class="plan-name">Scale Pool</div><span class="plan-save">Save 25%</span></div>
                            <div class="plan-target"><?php echo e(__('rvps_target_scale')); ?></div>
                            <div class="plan-price">
                                <span class="old-price">€159.99</span>
                                <span class="current-price"><span class="currency">€</span><span class="amount">119.99</span><span class="period">EUR / mo</span></span>
                            </div>
                            <div class="plan-renewal"><i class="fas fa-check"></i> <?php echo e(__('reseller_same_renewal')); ?></div>
                            <button class="plan-cta" data-type="vps" data-href="<?php echo e(CP_URL); ?>/order/vps-reseller/scale-pool"><?php echo e(__('common_choose_plan')); ?></button>
                            <div class="plan-resources">
                                <div class="plan-res"><i class="fas fa-microchip"></i><span class="res-val">80 vCPU</span><span class="res-label"><?php echo e(__('rvps_res_cpu')); ?></span></div>
                                <div class="plan-res"><i class="fas fa-memory"></i><span class="res-val">160 GB</span><span class="res-label"><?php echo e(__('rvps_res_ram')); ?></span></div>
                                <div class="plan-res"><i class="fas fa-hdd"></i><span class="res-val">2.5 TB</span><span class="res-label"><?php echo e(__('rvps_res_nvme')); ?></span></div>
                                <div class="plan-res"><i class="fas fa-wifi"></i><span class="res-val">50 TB</span><span class="res-label"><?php echo e(__('rvps_res_bw')); ?></span></div>
                            </div>
                            <div class="plan-divider"><span><?php echo e(__('reseller_included')); ?></span></div>
                            <ul class="plan-features">
                                <li><i class="fas fa-server"></i> <?php echo e(__('rvps_feat_kvm')); ?></li>
                                <li><i class="fas fa-code"></i> <?php echo e(__('rvps_feat_api_webhooks')); ?></li>
                                <li><i class="fas fa-palette"></i> <?php echo e(__('rvps_feat_wl')); ?></li>
                                <li><i class="fas fa-shield-alt"></i> <?php echo e(__('rvps_feat_ddos_adv')); ?></li>
                                <li><i class="fas fa-camera"></i> <?php echo e(__('rvps_feat_snap_backup')); ?></li>
                                <li><i class="fas fa-map-marker-alt"></i> <?php echo e(__('rvps_feat_locations')); ?></li>
                                <li><i class="fas fa-cogs"></i> <?php echo e(__('rvps_feat_blesta')); ?></li>
                            </ul>
                        </div></div>

                        <!-- Enterprise Pool -->
                        <div class="swiper-slide"><div class="plan-card">
                            <div class="plan-head"><div class="plan-name">Enterprise Pool</div><span class="plan-save">Save 35%</span></div>
                            <div class="plan-target"><?php echo e(__('rvps_target_enterprise')); ?></div>
                            <div class="plan-price">
                                <span class="old-price">€229.99</span>
                                <span class="current-price"><span class="currency">€</span><span class="amount">149.99</span><span class="period">EUR / mo</span></span>
                            </div>
                            <div class="plan-renewal"><i class="fas fa-check"></i> <?php echo e(__('reseller_same_renewal')); ?></div>
                            <button class="plan-cta" data-type="vps" data-href="<?php echo e(CP_URL); ?>/order/vps-reseller/enterprise-pool"><?php echo e(__('common_choose_plan')); ?></button>
                            <div class="plan-resources">
                                <div class="plan-res"><i class="fas fa-microchip"></i><span class="res-val">128 vCPU</span><span class="res-label"><?php echo e(__('rvps_res_cpu')); ?></span></div>
                                <div class="plan-res"><i class="fas fa-memory"></i><span class="res-val">256 GB</span><span class="res-label"><?php echo e(__('rvps_res_ram')); ?></span></div>
                                <div class="plan-res"><i class="fas fa-hdd"></i><span class="res-val">4 TB</span><span class="res-label"><?php echo e(__('rvps_res_nvme')); ?></span></div>
                                <div class="plan-res"><i class="fas fa-wifi"></i><span class="res-val">Unlimited</span><span class="res-label"><?php echo e(__('rvps_res_bw')); ?></span></div>
                            </div>
                            <div class="plan-divider"><span><?php echo e(__('reseller_included')); ?></span></div>
                            <ul class="plan-features">
                                <li><i class="fas fa-server"></i> <?php echo e(__('rvps_feat_kvm')); ?></li>
                                <li><i class="fas fa-code"></i> <?php echo e(__('rvps_feat_api_webhooks')); ?></li>
                                <li><i class="fas fa-palette"></i> <?php echo e(__('rvps_feat_wl')); ?></li>
                                <li><i class="fas fa-shield-alt"></i> <?php echo e(__('rvps_feat_ddos_adv')); ?></li>
                                <li><i class="fas fa-camera"></i> <?php echo e(__('rvps_feat_snap_backup')); ?></li>
                                <li><i class="fas fa-map-marker-alt"></i> <?php echo e(__('rvps_feat_locations')); ?></li>
                                <li><i class="fas fa-headset"></i> <?php echo e(__('rvps_feat_priority')); ?></li>
                            </ul>
                        </div></div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>

            <div class="pricing-custom">
                <p><?php echo __('rvps_pricing_custom', ['contact_url' => e(SITE_URL) . '/contact-us/']); ?></p>
            </div>
        </div>
    </section>

    <!-- ═══════════════ WHY VPS RESELLING ═══════════════ -->
    <section class="cp-benefits reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag"><?php echo e(__('rvps_why_tag')); ?></div>
                <h2><?php echo e(__('rvps_why_title')); ?></h2>
                <p><?php echo e(__('rvps_why_desc')); ?></p>
            </div>

            <div class="cp-benefits-grid">
                <div class="cp-security-card">
                    <div class="cp-security-icon"><i class="fas fa-code"></i></div>
                    <h4><?php echo e(__('rvps_adv_api_title')); ?></h4>
                    <p><?php echo e(__('rvps_adv_api_desc')); ?></p>
                </div>
                <div class="cp-security-card">
                    <div class="cp-security-icon icon-green"><i class="fas fa-palette"></i></div>
                    <h4><?php echo e(__('rvps_adv_wl_title')); ?></h4>
                    <p><?php echo e(__('rvps_adv_wl_desc')); ?></p>
                </div>
                <div class="cp-security-card">
                    <div class="cp-security-icon icon-purple"><i class="fas fa-cubes"></i></div>
                    <h4><?php echo e(__('rvps_adv_scale_title')); ?></h4>
                    <p><?php echo e(__('rvps_adv_scale_desc')); ?></p>
                </div>
                <div class="cp-security-card">
                    <div class="cp-security-icon icon-amber"><i class="fas fa-hand-holding-usd"></i></div>
                    <h4><?php echo e(__('rvps_adv_margin_title')); ?></h4>
                    <p><?php echo e(__('rvps_adv_margin_desc')); ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ BENTO FEATURES ═══════════════ -->
    <section class="bento-features reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag"><?php echo e(__('rvps_feat2_tag')); ?></div>
                <h2><?php echo e(__('rvps_feat2_title')); ?></h2>
                <p><?php echo e(__('rvps_feat2_desc')); ?></p>
            </div>

            <div class="bento-grid">
                <div class="bento-card bento-sm">
                    <div class="bento-card-icon"><i class="fas fa-terminal"></i></div>
                    <h4><?php echo e(__('rvps_feat2_api_title')); ?></h4>
                    <p><?php echo e(__('rvps_feat2_api_desc')); ?></p>
                </div>

                <div class="bento-card bento-sm">
                    <div class="bento-card-icon icon-green"><i class="fas fa-expand-arrows-alt"></i></div>
                    <h4><?php echo e(__('rvps_feat2_scale_title')); ?></h4>
                    <p><?php echo e(__('rvps_feat2_scale_desc')); ?></p>
                </div>

                <div class="bento-card bento-sm">
                    <div class="bento-card-icon icon-purple"><i class="fas fa-camera"></i></div>
                    <h4><?php echo e(__('rvps_feat2_snap_title')); ?></h4>
                    <p><?php echo e(__('rvps_feat2_snap_desc')); ?></p>
                </div>
                <div class="bento-card bento-sm">
                    <div class="bento-card-icon icon-amber"><i class="fas fa-shield-alt"></i></div>
                    <h4><?php echo e(__('rvps_feat2_ddos_title')); ?></h4>
                    <p><?php echo e(__('rvps_feat2_ddos_desc')); ?></p>
                </div>
                <div class="bento-card bento-sm">
                    <div class="bento-card-icon"><i class="fas fa-network-wired"></i></div>
                    <h4><?php echo e(__('rvps_feat2_network_title')); ?></h4>
                    <p><?php echo e(__('rvps_feat2_network_desc')); ?></p>
                </div>
                <div class="bento-card bento-sm">
                    <div class="bento-card-icon icon-green"><i class="fas fa-compact-disc"></i></div>
                    <h4><?php echo e(__('rvps_feat2_os_title')); ?></h4>
                    <p><?php echo e(__('rvps_feat2_os_desc')); ?></p>
                </div>
                <div class="bento-card bento-sm">
                    <div class="bento-card-icon icon-blue"><i class="fas fa-cloud-download-alt"></i></div>
                    <h4><?php echo e(__('rvps_feat2_backup_title')); ?></h4>
                    <p><?php echo e(__('rvps_feat2_backup_desc')); ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ AUTOMATION & INTEGRATION ═══════════════ -->
    <section class="vps-automation reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag"><?php echo e(__('rvps_auto_tag')); ?></div>
                <h2><?php echo __('rvps_auto_title'); ?></h2>
                <p><?php echo e(__('rvps_auto_desc')); ?></p>
            </div>

            <div class="vps-auto-grid">
                <div class="vps-auto-features">
                    <div class="vps-auto-item">
                        <div class="vps-auto-icon"><i class="fas fa-cogs"></i></div>
                        <div class="vps-auto-text">
                            <h4><?php echo e(__('rvps_auto_whmcs_title')); ?></h4>
                            <p><?php echo e(__('rvps_auto_whmcs_desc')); ?></p>
                        </div>
                    </div>
                    <div class="vps-auto-item">
                        <div class="vps-auto-icon icon-green"><i class="fas fa-code"></i></div>
                        <div class="vps-auto-text">
                            <h4><?php echo e(__('rvps_auto_api_title')); ?></h4>
                            <p><?php echo e(__('rvps_auto_api_desc')); ?></p>
                        </div>
                    </div>
                    <div class="vps-auto-item">
                        <div class="vps-auto-icon icon-purple"><i class="fas fa-bell"></i></div>
                        <div class="vps-auto-text">
                            <h4><?php echo e(__('rvps_auto_webhook_title')); ?></h4>
                            <p><?php echo e(__('rvps_auto_webhook_desc')); ?></p>
                        </div>
                    </div>
                    <div class="vps-auto-item">
                        <div class="vps-auto-icon icon-amber"><i class="fas fa-rocket"></i></div>
                        <div class="vps-auto-text">
                            <h4><?php echo e(__('rvps_auto_deploy_title')); ?></h4>
                            <p><?php echo e(__('rvps_auto_deploy_desc')); ?></p>
                        </div>
                    </div>
                    <div class="vps-auto-item">
                        <div class="vps-auto-icon"><i class="fas fa-expand-arrows-alt"></i></div>
                        <div class="vps-auto-text">
                            <h4><?php echo e(__('rvps_auto_scale_title')); ?></h4>
                            <p><?php echo e(__('rvps_auto_scale_desc')); ?></p>
                        </div>
                    </div>
                </div>
                <div class="vps-auto-preview">
                    <div class="vps-code-card">
                        <div class="vps-code-header">
                            <div class="vps-code-dots">
                                <span></span><span></span><span></span>
                            </div>
                            <span class="vps-code-title">POST /v1/vps/create</span>
                        </div>
                        <pre class="vps-code-body"><code>{
  "hostname": "client-web-01",
  "plan": "vps-2cpu-4gb",
  "location": "finland",
  "os": "ubuntu-24.04",
  "ssh_keys": ["key-abc123"],
  "backups": true,
  "label": "Production Web"
}

// Response: 201 Created
{
  "id": "vps-9f3a7b",
  "status": "provisioning",
  "ipv4": "185.x.x.x",
  "ready_in": "~45s"
}</code></pre>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ GLOBAL INFRASTRUCTURE (compact) ═══════════════ -->
    <section class="dc-showcase dc-showcase-compact reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag"><?php echo e(__('rvps_dc_tag')); ?></div>
                <h2><?php echo e(__('rvps_dc_title')); ?></h2>
                <p><?php echo e(__('rvps_dc_desc')); ?></p>
            </div>

            <div class="dc-strip-stats">
                <div class="dc-strip-stat"><i class="fas fa-server"></i> <strong>6</strong> <?php echo e(__('rvps_dc_stat_locations')); ?></div>
                <div class="dc-strip-stat"><i class="fas fa-network-wired"></i> <strong>10 Gbit/s</strong> <?php echo e(__('rvps_dc_stat_network')); ?></div>
                <div class="dc-strip-stat"><i class="fas fa-shield-alt"></i> <strong><?php echo e(__('rvps_dc_stat_ddos')); ?></strong> <?php echo e(__('reseller_included')); ?></div>
                <div class="dc-strip-stat"><i class="fas fa-tachometer-alt"></i> <strong>&lt;30ms</strong> <?php echo e(__('rvps_dc_stat_latency')); ?></div>
            </div>

            <div class="loc-card-grid">
                <a href="<?php echo e(SITE_URL); ?>/cheap-cpanel-france-location/" class="location-card"><span class="fi fi-fr"></span> France</a>
                <a href="<?php echo e(SITE_URL); ?>/cheap-cpanel-germany-location/" class="location-card location-card--active"><span class="fi fi-de"></span> Germany</a>
                <a href="<?php echo e(SITE_URL); ?>/cheap-cpanel-uk-location/" class="location-card"><span class="fi fi-gb"></span> UK</a>
                <a href="<?php echo e(SITE_URL); ?>/cheap-cpanel-netherlands-location/" class="location-card"><span class="fi fi-nl"></span> Netherlands</a>
                <a href="<?php echo e(SITE_URL); ?>/cheap-cpanel-turkey-location/" class="location-card"><span class="fi fi-tr"></span> Turkey</a>
                <a href="<?php echo e(SITE_URL); ?>/cheap-cpanel-usa-location/" class="location-card"><span class="fi fi-us"></span> USA</a>
            </div>
        </div>
    </section>

    <!-- ═══════════════ HOW IT WORKS ═══════════════ -->
    <section class="onboarding reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag"><?php echo e(__('rvps_steps_tag')); ?></div>
                <h2><?php echo e(__('rvps_steps_title')); ?></h2>
                <p><?php echo e(__('rvps_steps_desc')); ?></p>
            </div>

            <div class="vps-steps-grid">
                <div class="vps-step-card">
                    <div class="vps-step-num">1</div>
                    <div class="vps-step-icon"><i class="fas fa-user-plus"></i></div>
                    <h4><?php echo e(__('rvps_step1_title')); ?></h4>
                    <p><?php echo e(__('rvps_step1_desc')); ?></p>
                </div>
                <div class="vps-step-card">
                    <div class="vps-step-num">2</div>
                    <div class="vps-step-icon icon-green"><i class="fas fa-sliders-h"></i></div>
                    <h4><?php echo e(__('rvps_step2_title')); ?></h4>
                    <p><?php echo e(__('rvps_step2_desc')); ?></p>
                </div>
                <div class="vps-step-card">
                    <div class="vps-step-num">3</div>
                    <div class="vps-step-icon icon-purple"><i class="fas fa-tags"></i></div>
                    <h4><?php echo e(__('rvps_step3_title')); ?></h4>
                    <p><?php echo e(__('rvps_step3_desc')); ?></p>
                </div>
                <div class="vps-step-card">
                    <div class="vps-step-num">4</div>
                    <div class="vps-step-icon icon-amber"><i class="fas fa-rocket"></i></div>
                    <h4><?php echo e(__('rvps_step4_title')); ?></h4>
                    <p><?php echo e(__('rvps_step4_desc')); ?></p>
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
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('rvps_faq_g1_q')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('rvps_faq_g1_a')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('rvps_faq_g2_q')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('rvps_faq_g2_a')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('rvps_faq_g3_q')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('rvps_faq_g3_a')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('rvps_faq_g4_q')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('rvps_faq_g4_a')); ?></p></div></div>
                    </div>

                    <div class="faq-panel" id="faq-technical">
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('rvps_faq_t1_q')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('rvps_faq_t1_a')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('rvps_faq_t2_q')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('rvps_faq_t2_a')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('rvps_faq_t3_q')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('rvps_faq_t3_a')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('rvps_faq_t4_q')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('rvps_faq_t4_a')); ?></p></div></div>
                    </div>

                    <div class="faq-panel" id="faq-billing">
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('rvps_faq_b1_q')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('rvps_faq_b1_a')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('rvps_faq_b2_q')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('rvps_faq_b2_a')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('rvps_faq_b3_q')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('rvps_faq_b3_a')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('rvps_faq_b4_q')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('rvps_faq_b4_a')); ?></p></div></div>
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
                    <p class="why-us-desc"><?php echo e(__('rvps_why_desc')); ?></p>
                    <a href="#plans" class="btn-primary"><?php echo e(__('common_get_started')); ?> <i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="why-us-grid">
                    <div class="why-us-card">
                        <div class="why-us-card-icon"><i class="fas fa-headset"></i></div>
                        <h4><?php echo e(__('rvps_why_support_title')); ?></h4>
                        <p><?php echo e(__('rvps_why_support_desc')); ?></p>
                    </div>
                    <div class="why-us-card">
                        <div class="why-us-card-icon icon-green"><i class="fas fa-microchip"></i></div>
                        <h4><?php echo e(__('rvps_why_hw_title')); ?></h4>
                        <p><?php echo e(__('rvps_why_hw_desc')); ?></p>
                    </div>
                    <div class="why-us-card">
                        <div class="why-us-card-icon icon-purple"><i class="fas fa-shield-alt"></i></div>
                        <h4><?php echo e(__('rvps_why_ddos_title')); ?></h4>
                        <p><?php echo e(__('rvps_why_ddos_desc')); ?></p>
                    </div>
                    <div class="why-us-card">
                        <div class="why-us-card-icon icon-amber"><i class="fas fa-globe"></i></div>
                        <h4><?php echo e(__('rvps_why_dc_title')); ?></h4>
                        <p><?php echo e(__('rvps_why_dc_desc')); ?></p>
                    </div>
                    <div class="why-us-card">
                        <div class="why-us-card-icon icon-green"><i class="fas fa-code"></i></div>
                        <h4><?php echo e(__('rvps_why_api_title')); ?></h4>
                        <p><?php echo e(__('rvps_why_api_desc')); ?></p>
                    </div>
                    <div class="why-us-card">
                        <div class="why-us-card-icon icon-purple"><i class="fas fa-chart-line"></i></div>
                        <h4><?php echo e(__('rvps_why_scale_title')); ?></h4>
                        <p><?php echo e(__('rvps_why_scale_desc')); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ BOTTOM CTA ═══════════════ -->
    <section class="promo-cta reveal">
        <div class="container">
            <div class="promo-cta-inner">
                <div class="promo-cta-glow"></div>
                <div class="promo-cta-icon"><i class="fas fa-server"></i></div>
                <h2><?php echo e(__('rvps_cta_title')); ?></h2>
                <p><?php echo __('rvps_cta_desc'); ?></p>
                <a href="#plans" class="btn-primary"><?php echo e(__('common_view_plans')); ?> <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
