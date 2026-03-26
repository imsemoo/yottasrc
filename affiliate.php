<?php
/**
 * YottaSrc — Affiliate Program
 * ==============================
 * Earn 20% commission by referring hosting services.
 */
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/topbar.php';
?>

    <!-- ═══════════════ HERO ═══════════════ -->
    <section class="page-hero aff-hero">
        <div class="container">
            <div class="page-hero-split">
                <div class="page-hero-content">
                    <div class="page-breadcrumb">
                        <a href="<?php echo e(SITE_URL); ?>/"><?php echo e(__('breadcrumb_home')); ?></a>
                        <i class="fas fa-chevron-right"></i>
                        <span><?php echo e(__('affiliate_breadcrumb')); ?></span>
                    </div>
                    <h1><?php echo __('affiliate_hero_title'); ?></h1>
                    <p class="page-hero-desc">
                        <?php echo e(__('affiliate_hero_desc')); ?>
                    </p>
                    <div class="page-hero-ctas">
                        <a href="<?php echo e(CP_URL); ?>/affiliates.php" class="btn-primary"><?php echo e(__('affiliate_hero_cta_join')); ?> <i class="fas fa-arrow-right"></i></a>
                        <a href="#how-it-works" class="btn-secondary"><i class="fas fa-info-circle"></i> <?php echo e(__('affiliate_hero_cta_how')); ?></a>
                    </div>
                    <div class="page-hero-badges">
                        <div class="hero-badge-item"><i class="fas fa-check"></i> <?php echo e(__('affiliate_hero_badge_commission')); ?></div>
                        <div class="hero-badge-item"><i class="fas fa-check"></i> <?php echo e(__('affiliate_hero_badge_no_cap')); ?></div>
                        <div class="hero-badge-item"><i class="fas fa-check"></i> <?php echo e(__('affiliate_hero_badge_all_products')); ?></div>
                        <div class="hero-badge-item"><i class="fas fa-check"></i> <?php echo e(__('affiliate_hero_badge_dashboard')); ?></div>
                    </div>
                </div>
                <div class="page-hero-visual">
                    <svg viewBox="0 0 440 400" fill="none" xmlns="http://www.w3.org/2000/svg" class="hero-illustration" aria-label="Affiliate earnings dashboard">
                        <!-- Window Frame -->
                        <rect x="20" y="20" width="400" height="360" rx="16" fill="var(--bg-card)" stroke="var(--border-primary)" stroke-width="1.5"/>
                        <rect x="20" y="20" width="400" height="38" rx="16" fill="var(--bg-tertiary)"/>
                        <rect x="20" y="42" width="400" height="16" fill="var(--bg-tertiary)"/>
                        <circle cx="42" cy="39" r="5" fill="var(--brand-error)" opacity="0.6"/>
                        <circle cx="58" cy="39" r="5" fill="var(--brand-warning)" opacity="0.6"/>
                        <circle cx="74" cy="39" r="5" fill="var(--brand-secondary)" opacity="0.6"/>
                        <text x="220" y="44" text-anchor="middle" fill="var(--text-tertiary)" font-size="11" font-family="var(--font-mono)" font-weight="600" opacity="0.6">Affiliate Dashboard — Earnings</text>

                        <!-- Stats row -->
                        <text x="40" y="82" fill="var(--brand-primary)" font-size="9" font-family="var(--font-display)" font-weight="700" letter-spacing="0.8" opacity="0.7">YOUR EARNINGS</text>
                        <line x1="40" y1="88" x2="400" y2="88" stroke="var(--border-primary)" stroke-width="0.6"/>

                        <!-- Stat card 1: Total Earned -->
                        <rect x="40" y="96" width="110" height="60" rx="10" fill="var(--bg-tertiary)"/>
                        <text x="52" y="116" fill="var(--text-tertiary)" font-size="7" font-family="var(--font-mono)" font-weight="600" opacity="0.5">TOTAL EARNED</text>
                        <text x="52" y="140" fill="var(--brand-secondary)" font-size="20" font-family="var(--font-display)" font-weight="800" opacity="0.8">€1,247</text>

                        <!-- Stat card 2: This Month -->
                        <rect x="165" y="96" width="110" height="60" rx="10" fill="var(--bg-tertiary)"/>
                        <text x="177" y="116" fill="var(--text-tertiary)" font-size="7" font-family="var(--font-mono)" font-weight="600" opacity="0.5">THIS MONTH</text>
                        <text x="177" y="140" fill="var(--brand-primary)" font-size="20" font-family="var(--font-display)" font-weight="800" opacity="0.8">€186</text>

                        <!-- Stat card 3: Referrals -->
                        <rect x="290" y="96" width="110" height="60" rx="10" fill="var(--bg-tertiary)"/>
                        <text x="302" y="116" fill="var(--text-tertiary)" font-size="7" font-family="var(--font-mono)" font-weight="600" opacity="0.5">REFERRALS</text>
                        <text x="302" y="140" fill="var(--brand-accent)" font-size="20" font-family="var(--font-display)" font-weight="800" opacity="0.8">43</text>

                        <!-- Earnings chart area -->
                        <text x="40" y="186" fill="var(--brand-primary)" font-size="9" font-family="var(--font-display)" font-weight="700" letter-spacing="0.8" opacity="0.7">MONTHLY EARNINGS</text>
                        <line x1="40" y1="192" x2="400" y2="192" stroke="var(--border-primary)" stroke-width="0.6"/>

                        <!-- Bar chart -->
                        <rect x="55" y="250" width="28" height="40" rx="4" fill="var(--brand-primary)" opacity="0.15"/>
                        <rect x="55" y="260" width="28" height="30" rx="4" fill="var(--brand-primary)" opacity="0.3"/>
                        <text x="69" y="300" text-anchor="middle" fill="var(--text-tertiary)" font-size="6" font-family="var(--font-mono)" opacity="0.4">Jan</text>

                        <rect x="95" y="235" width="28" height="55" rx="4" fill="var(--brand-primary)" opacity="0.15"/>
                        <rect x="95" y="250" width="28" height="40" rx="4" fill="var(--brand-primary)" opacity="0.3"/>
                        <text x="109" y="300" text-anchor="middle" fill="var(--text-tertiary)" font-size="6" font-family="var(--font-mono)" opacity="0.4">Feb</text>

                        <rect x="135" y="225" width="28" height="65" rx="4" fill="var(--brand-primary)" opacity="0.15"/>
                        <rect x="135" y="242" width="28" height="48" rx="4" fill="var(--brand-primary)" opacity="0.3"/>
                        <text x="149" y="300" text-anchor="middle" fill="var(--text-tertiary)" font-size="6" font-family="var(--font-mono)" opacity="0.4">Mar</text>

                        <rect x="175" y="218" width="28" height="72" rx="4" fill="var(--brand-primary)" opacity="0.15"/>
                        <rect x="175" y="232" width="28" height="58" rx="4" fill="var(--brand-primary)" opacity="0.35"/>
                        <text x="189" y="300" text-anchor="middle" fill="var(--text-tertiary)" font-size="6" font-family="var(--font-mono)" opacity="0.4">Apr</text>

                        <rect x="215" y="205" width="28" height="85" rx="4" fill="var(--brand-primary)" opacity="0.15"/>
                        <rect x="215" y="220" width="28" height="70" rx="4" fill="var(--brand-primary)" opacity="0.4"/>
                        <text x="229" y="300" text-anchor="middle" fill="var(--text-tertiary)" font-size="6" font-family="var(--font-mono)" opacity="0.4">May</text>

                        <rect x="255" y="210" width="28" height="80" rx="4" fill="var(--brand-primary)" opacity="0.15"/>
                        <rect x="255" y="225" width="28" height="65" rx="4" fill="var(--brand-primary)" opacity="0.35"/>
                        <text x="269" y="300" text-anchor="middle" fill="var(--text-tertiary)" font-size="6" font-family="var(--font-mono)" opacity="0.4">Jun</text>

                        <rect x="295" y="198" width="28" height="92" rx="4" fill="var(--brand-secondary)" opacity="0.15"/>
                        <rect x="295" y="210" width="28" height="80" rx="4" fill="var(--brand-secondary)" opacity="0.45"/>
                        <text x="309" y="300" text-anchor="middle" fill="var(--text-tertiary)" font-size="6" font-family="var(--font-mono)" opacity="0.4">Jul</text>

                        <rect x="335" y="202" width="28" height="88" rx="4" fill="var(--brand-primary)" opacity="0.15"/>
                        <rect x="335" y="215" width="28" height="75" rx="4" fill="var(--brand-primary)" opacity="0.35"/>
                        <text x="349" y="300" text-anchor="middle" fill="var(--text-tertiary)" font-size="6" font-family="var(--font-mono)" opacity="0.4">Aug</text>

                        <!-- Referral link section -->
                        <rect x="40" y="314" width="360" height="40" rx="10" fill="var(--bg-tertiary)"/>
                        <text x="52" y="330" fill="var(--text-tertiary)" font-size="7" font-family="var(--font-mono)" font-weight="600" opacity="0.5">YOUR REFERRAL LINK</text>
                        <rect x="52" y="336" width="240" height="14" rx="4" fill="var(--bg-card)" stroke="var(--border-primary)" stroke-width="0.5"/>
                        <text x="60" y="346" fill="var(--text-tertiary)" font-size="6.5" font-family="var(--font-mono)" opacity="0.4">https://yottasrc.com/?ref=your-id</text>
                        <rect x="300" y="336" width="44" height="14" rx="4" fill="var(--brand-primary)" opacity="0.2"/>
                        <text x="322" y="346" text-anchor="middle" fill="var(--brand-primary)" font-size="6.5" font-family="var(--font-mono)" font-weight="600" opacity="0.6">Copy</text>
                        <rect x="348" y="336" width="44" height="14" rx="4" fill="var(--brand-accent)" opacity="0.2"/>
                        <text x="370" y="346" text-anchor="middle" fill="var(--brand-accent)" font-size="6.5" font-family="var(--font-mono)" font-weight="600" opacity="0.6">Share</text>

                        <!-- Static badges -->
                        <rect x="356" y="2" width="80" height="36" rx="10" fill="var(--bg-card)" stroke="var(--border-primary)" stroke-width="1"/>
                        <text x="372" y="17" fill="var(--text-tertiary)" font-size="7" font-family="var(--font-mono)" font-weight="600" opacity="0.6">COMMISSION</text>
                        <text x="372" y="31" fill="var(--brand-secondary)" font-size="13" font-family="var(--font-display)" font-weight="800" opacity="0.8">20%</text>

                        <rect x="0" y="310" width="80" height="36" rx="10" fill="var(--bg-card)" stroke="var(--border-primary)" stroke-width="1"/>
                        <text x="16" y="325" fill="var(--text-tertiary)" font-size="7" font-family="var(--font-mono)" font-weight="600" opacity="0.6">WITHDRAW</text>
                        <text x="16" y="339" fill="var(--brand-primary)" font-size="13" font-family="var(--font-display)" font-weight="800" opacity="0.8">Min €25</text>

                        <circle cx="8" cy="80" r="3" fill="var(--brand-primary)" opacity="0.4"/>
                    </svg>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ HOW IT WORKS ═══════════════ -->
    <section class="aff-steps reveal" id="how-it-works">
        <div class="container">
            <div class="section-header">
                <div class="section-tag"><?php echo e(__('affiliate_steps_tag')); ?></div>
                <h2><?php echo e(__('affiliate_steps_title')); ?></h2>
                <p><?php echo e(__('affiliate_steps_desc')); ?></p>
            </div>

            <div class="vps-steps-grid">
                <div class="vps-step-card">
                    <span class="vps-step-num">1</span>
                    <div class="vps-step-icon"><i class="fas fa-user-plus"></i></div>
                    <h4><?php echo e(__('affiliate_step1_title')); ?></h4>
                    <p><?php echo e(__('affiliate_step1_desc')); ?></p>
                </div>
                <div class="vps-step-card">
                    <span class="vps-step-num">2</span>
                    <div class="vps-step-icon icon-green"><i class="fas fa-share-alt"></i></div>
                    <h4><?php echo e(__('affiliate_step2_title')); ?></h4>
                    <p><?php echo e(__('affiliate_step2_desc')); ?></p>
                </div>
                <div class="vps-step-card">
                    <span class="vps-step-num">3</span>
                    <div class="vps-step-icon icon-purple"><i class="fas fa-shopping-cart"></i></div>
                    <h4><?php echo e(__('affiliate_step3_title')); ?></h4>
                    <p><?php echo e(__('affiliate_step3_desc')); ?></p>
                </div>
                <div class="vps-step-card">
                    <span class="vps-step-num">4</span>
                    <div class="vps-step-icon icon-amber"><i class="fas fa-coins"></i></div>
                    <h4><?php echo e(__('affiliate_step4_title')); ?></h4>
                    <p><?php echo e(__('affiliate_step4_desc')); ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ COMMISSION STRUCTURE ═══════════════ -->
    <section class="aff-commission reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag"><?php echo e(__('affiliate_commission_tag')); ?></div>
                <h2><?php echo e(__('affiliate_commission_title')); ?></h2>
                <p><?php echo e(__('affiliate_commission_desc')); ?></p>
            </div>

            <div class="aff-commission-grid">
                <!-- Shared / cPanel Hosting -->
                <div class="aff-commission-card">
                    <div class="aff-commission-icon"><i class="fas fa-globe"></i></div>
                    <h4><?php echo __('affiliate_commission_cpanel_title'); ?></h4>
                    <div class="aff-commission-example">
                        <div class="aff-example-row">
                            <span class="aff-example-label"><?php echo e(__('affiliate_commission_customer_pays')); ?></span>
                            <span class="aff-example-value"><?php echo e(__('affiliate_commission_cpanel_pays')); ?></span>
                        </div>
                        <div class="aff-example-row aff-example-highlight">
                            <span class="aff-example-label"><?php echo e(__('affiliate_commission_you_earn')); ?></span>
                            <span class="aff-example-value aff-example-earn"><?php echo e(__('affiliate_commission_cpanel_earn')); ?></span>
                        </div>
                        <div class="aff-example-row">
                            <span class="aff-example-label"><?php echo e(__('affiliate_commission_per_year')); ?></span>
                            <span class="aff-example-value"><?php echo e(__('affiliate_commission_cpanel_yearly')); ?></span>
                        </div>
                    </div>
                    <p class="aff-commission-note"><?php echo e(__('affiliate_commission_cpanel_note')); ?></p>
                </div>

                <!-- VPS -->
                <div class="aff-commission-card aff-commission-featured">
                    <span class="aff-commission-badge"><?php echo e(__('affiliate_commission_vps_badge')); ?></span>
                    <div class="aff-commission-icon icon-green"><i class="fas fa-server"></i></div>
                    <h4><?php echo __('affiliate_commission_vps_title'); ?></h4>
                    <div class="aff-commission-example">
                        <div class="aff-example-row">
                            <span class="aff-example-label"><?php echo e(__('affiliate_commission_customer_pays')); ?></span>
                            <span class="aff-example-value"><?php echo e(__('affiliate_commission_vps_pays')); ?></span>
                        </div>
                        <div class="aff-example-row aff-example-highlight">
                            <span class="aff-example-label"><?php echo e(__('affiliate_commission_you_earn')); ?></span>
                            <span class="aff-example-value aff-example-earn"><?php echo e(__('affiliate_commission_vps_earn')); ?></span>
                        </div>
                        <div class="aff-example-row">
                            <span class="aff-example-label"><?php echo e(__('affiliate_commission_per_year')); ?></span>
                            <span class="aff-example-value"><?php echo e(__('affiliate_commission_vps_yearly')); ?></span>
                        </div>
                    </div>
                    <p class="aff-commission-note"><?php echo e(__('affiliate_commission_vps_note')); ?></p>
                </div>

                <!-- Cloud -->
                <div class="aff-commission-card">
                    <div class="aff-commission-icon icon-purple"><i class="fas fa-cloud"></i></div>
                    <h4><?php echo e(__('affiliate_commission_cloud_title')); ?></h4>
                    <div class="aff-commission-example">
                        <div class="aff-example-row">
                            <span class="aff-example-label"><?php echo e(__('affiliate_commission_customer_pays')); ?></span>
                            <span class="aff-example-value"><?php echo e(__('affiliate_commission_cloud_pays')); ?></span>
                        </div>
                        <div class="aff-example-row aff-example-highlight">
                            <span class="aff-example-label"><?php echo e(__('affiliate_commission_you_earn')); ?></span>
                            <span class="aff-example-value aff-example-earn"><?php echo e(__('affiliate_commission_cloud_earn')); ?></span>
                        </div>
                        <div class="aff-example-row">
                            <span class="aff-example-label"><?php echo e(__('affiliate_commission_per_year')); ?></span>
                            <span class="aff-example-value"><?php echo e(__('affiliate_commission_cloud_yearly')); ?></span>
                        </div>
                    </div>
                    <p class="aff-commission-note"><?php echo e(__('affiliate_commission_cloud_note')); ?></p>
                </div>
            </div>

            <div class="aff-commission-footer">
                <p><i class="fas fa-info-circle"></i> <?php echo __('affiliate_commission_footer'); ?></p>
            </div>
        </div>
    </section>

    <!-- ═══════════════ DASHBOARD PREVIEW ═══════════════ -->
    <section class="aff-preview reveal">
        <div class="container">
            <div class="global-layout">
                <div class="global-content">
                    <div class="section-tag"><?php echo e(__('affiliate_dashboard_tag')); ?></div>
                    <h2 class="global-title"><?php echo e(__('affiliate_dashboard_title')); ?></h2>
                    <p class="global-desc"><?php echo e(__('affiliate_dashboard_desc')); ?></p>
                    <div class="aff-preview-features">
                        <div class="aff-preview-item"><i class="fas fa-check-circle"></i> <?php echo __('affiliate_dashboard_feat1'); ?></div>
                        <div class="aff-preview-item"><i class="fas fa-check-circle"></i> <?php echo __('affiliate_dashboard_feat2'); ?></div>
                        <div class="aff-preview-item"><i class="fas fa-check-circle"></i> <?php echo __('affiliate_dashboard_feat3'); ?></div>
                        <div class="aff-preview-item"><i class="fas fa-check-circle"></i> <?php echo __('affiliate_dashboard_feat4'); ?></div>
                        <div class="aff-preview-item"><i class="fas fa-check-circle"></i> <?php echo __('affiliate_dashboard_feat5'); ?></div>
                    </div>
                    <a href="<?php echo e(CP_URL); ?>/affiliates.php" class="btn-primary" style="margin-top: 20px;"><?php echo e(__('affiliate_dashboard_cta')); ?> <i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="global-visual">
                    <svg viewBox="0 0 500 360" fill="none" xmlns="http://www.w3.org/2000/svg" class="aff-dash-illustration" aria-label="Affiliate dashboard preview">
                        <!-- Dashboard frame -->
                        <rect x="10" y="10" width="480" height="340" rx="14" fill="var(--bg-card)" stroke="var(--border-primary)" stroke-width="1.2"/>
                        <rect x="10" y="10" width="480" height="34" rx="14" fill="var(--bg-tertiary)"/>
                        <rect x="10" y="30" width="480" height="14" fill="var(--bg-tertiary)"/>
                        <circle cx="30" cy="27" r="4" fill="var(--brand-error)" opacity="0.5"/>
                        <circle cx="43" cy="27" r="4" fill="var(--brand-warning)" opacity="0.5"/>
                        <circle cx="56" cy="27" r="4" fill="var(--brand-secondary)" opacity="0.5"/>
                        <text x="250" y="31" text-anchor="middle" fill="var(--text-tertiary)" font-size="9" font-family="var(--font-mono)" font-weight="600" opacity="0.5">Affiliate Dashboard</text>

                        <!-- Sidebar -->
                        <rect x="10" y="44" width="100" height="306" fill="var(--bg-tertiary)"/>
                        <rect x="10" y="330" width="100" height="20" rx="0" fill="var(--bg-tertiary)"/>
                        <rect x="10" y="336" width="100" height="14" rx="14" fill="var(--bg-tertiary)"/>
                        <rect x="22" y="60" width="76" height="10" rx="3" fill="var(--brand-primary)" opacity="0.15"/>
                        <text x="60" y="68" text-anchor="middle" fill="var(--brand-primary)" font-size="6" font-family="var(--font-mono)" font-weight="600" opacity="0.5">Overview</text>
                        <rect x="22" y="78" width="76" height="10" rx="3" fill="transparent"/>
                        <text x="60" y="86" text-anchor="middle" fill="var(--text-tertiary)" font-size="6" font-family="var(--font-mono)" opacity="0.35">Referrals</text>
                        <rect x="22" y="96" width="76" height="10" rx="3" fill="transparent"/>
                        <text x="60" y="104" text-anchor="middle" fill="var(--text-tertiary)" font-size="6" font-family="var(--font-mono)" opacity="0.35">Earnings</text>
                        <rect x="22" y="114" width="76" height="10" rx="3" fill="transparent"/>
                        <text x="60" y="122" text-anchor="middle" fill="var(--text-tertiary)" font-size="6" font-family="var(--font-mono)" opacity="0.35">Withdraw</text>
                        <rect x="22" y="132" width="76" height="10" rx="3" fill="transparent"/>
                        <text x="60" y="140" text-anchor="middle" fill="var(--text-tertiary)" font-size="6" font-family="var(--font-mono)" opacity="0.35">Settings</text>

                        <!-- Main content area -->
                        <!-- KPI row -->
                        <rect x="124" y="56" width="110" height="50" rx="8" fill="var(--bg-tertiary)"/>
                        <text x="136" y="72" fill="var(--text-tertiary)" font-size="6" font-family="var(--font-mono)" font-weight="600" opacity="0.4">TOTAL EARNED</text>
                        <text x="136" y="93" fill="var(--brand-secondary)" font-size="16" font-family="var(--font-display)" font-weight="800" opacity="0.7">€1,247</text>

                        <rect x="246" y="56" width="110" height="50" rx="8" fill="var(--bg-tertiary)"/>
                        <text x="258" y="72" fill="var(--text-tertiary)" font-size="6" font-family="var(--font-mono)" font-weight="600" opacity="0.4">THIS MONTH</text>
                        <text x="258" y="93" fill="var(--brand-primary)" font-size="16" font-family="var(--font-display)" font-weight="800" opacity="0.7">€186</text>

                        <rect x="368" y="56" width="110" height="50" rx="8" fill="var(--bg-tertiary)"/>
                        <text x="380" y="72" fill="var(--text-tertiary)" font-size="6" font-family="var(--font-mono)" font-weight="600" opacity="0.4">REFERRALS</text>
                        <text x="380" y="93" fill="var(--brand-accent)" font-size="16" font-family="var(--font-display)" font-weight="800" opacity="0.7">43</text>

                        <!-- Mini chart area -->
                        <rect x="124" y="120" width="354" height="100" rx="8" fill="var(--bg-tertiary)" opacity="0.5"/>
                        <text x="136" y="136" fill="var(--text-tertiary)" font-size="6" font-family="var(--font-mono)" font-weight="600" opacity="0.4">EARNINGS OVER TIME</text>
                        <!-- Line chart -->
                        <polyline points="140,200 180,185 220,190 260,170 300,160 340,155 380,145 420,140 460,135" fill="none" stroke="var(--brand-primary)" stroke-width="1.5" opacity="0.4" stroke-linecap="round"/>
                        <polyline points="140,200 180,185 220,190 260,170 300,160 340,155 380,145 420,140 460,135" fill="url(#affChartGrad)" opacity="0.1"/>
                        <defs>
                            <linearGradient id="affChartGrad" x1="300" y1="135" x2="300" y2="200" gradientUnits="userSpaceOnUse">
                                <stop stop-color="var(--brand-primary)"/>
                                <stop offset="1" stop-color="var(--brand-primary)" stop-opacity="0"/>
                            </linearGradient>
                        </defs>

                        <!-- Recent referrals table -->
                        <text x="136" y="240" fill="var(--text-tertiary)" font-size="6" font-family="var(--font-mono)" font-weight="600" opacity="0.4">RECENT REFERRALS</text>
                        <line x1="124" y1="246" x2="478" y2="246" stroke="var(--border-primary)" stroke-width="0.5"/>

                        <rect x="124" y="250" width="354" height="24" rx="0" fill="var(--bg-tertiary)" opacity="0.3"/>
                        <text x="136" y="265" fill="var(--text-tertiary)" font-size="6.5" font-family="var(--font-mono)" opacity="0.4">user***12</text>
                        <text x="220" y="265" fill="var(--text-secondary)" font-size="6.5" font-family="var(--font-body)" opacity="0.5">VPS — YTA 2</text>
                        <text x="350" y="265" fill="var(--brand-primary)" font-size="6.5" font-family="var(--font-mono)" font-weight="700" opacity="0.5">+€1.03</text>
                        <rect x="410" y="257" width="40" height="12" rx="6" fill="var(--brand-secondary)" opacity="0.12"/>
                        <text x="430" y="266" text-anchor="middle" fill="var(--brand-secondary)" font-size="5.5" font-family="var(--font-mono)" font-weight="600" opacity="0.6">Credited</text>

                        <rect x="124" y="276" width="354" height="24" rx="0" fill="transparent"/>
                        <text x="136" y="291" fill="var(--text-tertiary)" font-size="6.5" font-family="var(--font-mono)" opacity="0.4">user***87</text>
                        <text x="220" y="291" fill="var(--text-secondary)" font-size="6.5" font-family="var(--font-body)" opacity="0.5">cPanel — Premium</text>
                        <text x="350" y="291" fill="var(--brand-primary)" font-size="6.5" font-family="var(--font-mono)" font-weight="700" opacity="0.5">+€0.68</text>
                        <rect x="410" y="283" width="40" height="12" rx="6" fill="var(--brand-secondary)" opacity="0.12"/>
                        <text x="430" y="292" text-anchor="middle" fill="var(--brand-secondary)" font-size="5.5" font-family="var(--font-mono)" font-weight="600" opacity="0.6">Credited</text>

                        <rect x="124" y="302" width="354" height="24" rx="0" fill="var(--bg-tertiary)" opacity="0.3"/>
                        <text x="136" y="317" fill="var(--text-tertiary)" font-size="6.5" font-family="var(--font-mono)" opacity="0.4">user***34</text>
                        <text x="220" y="317" fill="var(--text-secondary)" font-size="6.5" font-family="var(--font-body)" opacity="0.5">Cloud — M</text>
                        <text x="350" y="317" fill="var(--brand-primary)" font-size="6.5" font-family="var(--font-mono)" font-weight="700" opacity="0.5">+€6.00</text>
                        <rect x="410" y="309" width="40" height="12" rx="6" fill="var(--brand-secondary)" opacity="0.12"/>
                        <text x="430" y="318" text-anchor="middle" fill="var(--brand-secondary)" font-size="5.5" font-family="var(--font-mono)" font-weight="600" opacity="0.6">Credited</text>
                    </svg>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ WHY PROMOTE YOTTASRC ═══════════════ -->
    <section class="why-us reveal">
        <div class="container">
            <div class="why-us-layout">
                <div class="why-us-intro">
                    <div class="section-tag"><?php echo e(__('affiliate_why_tag')); ?></div>
                    <h2 class="why-us-title"><?php echo e(__('affiliate_why_title')); ?></h2>
                    <p class="why-us-desc"><?php echo e(__('affiliate_why_desc')); ?></p>
                    <a href="<?php echo e(CP_URL); ?>/affiliates.php" class="btn-primary"><?php echo e(__('affiliate_why_cta')); ?> <i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="why-us-grid">
                    <div class="why-us-card">
                        <div class="why-us-card-icon"><i class="fas fa-percentage"></i></div>
                        <h4><?php echo e(__('affiliate_why_card1_title')); ?></h4>
                        <p><?php echo e(__('affiliate_why_card1_desc')); ?></p>
                    </div>
                    <div class="why-us-card">
                        <div class="why-us-card-icon icon-green"><i class="fas fa-infinity"></i></div>
                        <h4><?php echo e(__('affiliate_why_card2_title')); ?></h4>
                        <p><?php echo e(__('affiliate_why_card2_desc')); ?></p>
                    </div>
                    <div class="why-us-card">
                        <div class="why-us-card-icon icon-purple"><i class="fas fa-boxes-stacked"></i></div>
                        <h4><?php echo e(__('affiliate_why_card3_title')); ?></h4>
                        <p><?php echo e(__('affiliate_why_card3_desc')); ?></p>
                    </div>
                    <div class="why-us-card">
                        <div class="why-us-card-icon icon-amber"><i class="fas fa-chart-pie"></i></div>
                        <h4><?php echo e(__('affiliate_why_card4_title')); ?></h4>
                        <p><?php echo e(__('affiliate_why_card4_desc')); ?></p>
                    </div>
                    <div class="why-us-card">
                        <div class="why-us-card-icon icon-green"><i class="fas fa-star"></i></div>
                        <h4><?php echo e(__('affiliate_why_card5_title')); ?></h4>
                        <p><?php echo e(__('affiliate_why_card5_desc')); ?></p>
                    </div>
                    <div class="why-us-card">
                        <div class="why-us-card-icon icon-purple"><i class="fas fa-wallet"></i></div>
                        <h4><?php echo e(__('affiliate_why_card6_title')); ?></h4>
                        <p><?php echo e(__('affiliate_why_card6_desc')); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ FAQ ═══════════════ -->
    <section class="faq-section reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag"><?php echo e(__('affiliate_faq_tag')); ?></div>
                <h2><?php echo e(__('affiliate_faq_title')); ?></h2>
                <p><?php echo e(__('affiliate_faq_desc')); ?></p>
            </div>

            <div class="faq-layout faq-layout--full">
                <div class="faq-panels">
                    <div class="faq-panel active" id="faq-affiliate">
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('affiliate_faq_q1')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('affiliate_faq_a1')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('affiliate_faq_q2')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('affiliate_faq_a2')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('affiliate_faq_q3')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('affiliate_faq_a3')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('affiliate_faq_q4')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('affiliate_faq_a4')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('affiliate_faq_q5')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('affiliate_faq_a5')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('affiliate_faq_q6')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('affiliate_faq_a6')); ?></p></div></div>
                    </div>
                </div>
            </div>

            <div class="faq-actions">
                <a href="<?php echo e(SITE_URL); ?>/contact-us/" class="btn-primary"><i class="fas fa-headset"></i> <?php echo e(__('affiliate_faq_cta_ticket')); ?></a>
                <a href="<?php echo e(SITE_URL); ?>/faq" class="btn-secondary"><?php echo e(__('affiliate_faq_cta_browse')); ?> <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </section>

    <!-- ═══════════════ BOTTOM CTA ═══════════════ -->
    <section class="promo-cta reveal">
        <div class="container">
            <div class="promo-cta-inner">
                <div class="promo-cta-glow"></div>
                <div class="promo-cta-icon"><i class="fas fa-hand-holding-usd"></i></div>
                <h2><?php echo e(__('affiliate_cta_title')); ?></h2>
                <p><?php echo e(__('affiliate_cta_desc')); ?></p>
                <a href="<?php echo e(CP_URL); ?>/affiliates.php" class="btn-primary"><?php echo e(__('affiliate_cta_button')); ?> <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
