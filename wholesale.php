<?php
/**
 * YottaSrc — Wholesale Reselling
 * ================================
 * Wholesale reseller program overview page.
 */
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/topbar.php';
?>

    <!-- ═══════════════ HERO ═══════════════ -->
    <section class="page-hero">
        <div class="container">
            <div class="page-hero-split">
                <div class="page-hero-content">
                    <div class="page-breadcrumb">
                        <a href="<?php echo e(SITE_URL); ?>/"><?php echo e(__('breadcrumb_home')); ?></a>
                        <i class="fas fa-chevron-right"></i>
                        <span><?php echo e(__('wholesale_breadcrumb')); ?></span>
                    </div>
                    <h1><?php echo __('wholesale_title'); ?></h1>
                    <p class="page-hero-desc">
                        <?php echo e(__('wholesale_desc')); ?>
                    </p>
                    <div class="page-hero-ctas">
                        <a href="<?php echo e(SITE_URL); ?>/contact/" class="btn-primary"><?php echo e(__('wholesale_cta_access')); ?> <i class="fas fa-arrow-right"></i></a>
                        <a href="#services" class="btn-secondary"><i class="fas fa-arrow-down"></i> <?php echo e(__('wholesale_cta_learn')); ?></a>
                    </div>
                    <div class="page-hero-badges">
                        <div class="hero-badge-item"><i class="fas fa-check"></i> <?php echo e(__('wholesale_badge_discount')); ?></div>
                        <div class="hero-badge-item"><i class="fas fa-check"></i> <?php echo e(__('wholesale_badge_wl')); ?></div>
                        <div class="hero-badge-item"><i class="fas fa-check"></i> <?php echo e(__('wholesale_badge_support')); ?></div>
                        <div class="hero-badge-item"><i class="fas fa-check"></i> <?php echo e(__('wholesale_badge_api')); ?></div>
                    </div>
                </div>
                <div class="page-hero-visual">
                    <svg viewBox="0 0 440 400" fill="none" xmlns="http://www.w3.org/2000/svg" class="hero-illustration" aria-label="Wholesale white-label flow illustration">
                        <!-- Background shape -->
                        <rect x="20" y="20" width="400" height="360" rx="20" fill="var(--bg-card)" stroke="var(--border-primary)" stroke-width="1.5"/>

                        <!-- YottaSrc source node (top center) -->
                        <rect x="155" y="40" width="130" height="50" rx="12" fill="var(--brand-primary)" opacity="0.12" stroke="var(--brand-primary)" stroke-width="1"/>
                        <text x="220" y="60" text-anchor="middle" fill="var(--brand-primary)" font-size="9" font-family="var(--font-mono)" font-weight="700" opacity="0.7">YOTTASRC</text>
                        <text x="220" y="78" text-anchor="middle" fill="var(--text-tertiary)" font-size="8" font-family="var(--font-mono)" opacity="0.55">Infrastructure</text>

                        <!-- Flow arrows from source -->
                        <line x1="185" y1="90" x2="105" y2="135" stroke="var(--brand-primary)" stroke-width="1.5" stroke-dasharray="4 3" opacity="0.3"/>
                        <line x1="220" y1="90" x2="220" y2="135" stroke="var(--brand-primary)" stroke-width="1.5" stroke-dasharray="4 3" opacity="0.3"/>
                        <line x1="255" y1="90" x2="335" y2="135" stroke="var(--brand-primary)" stroke-width="1.5" stroke-dasharray="4 3" opacity="0.3"/>

                        <!-- Service boxes row -->
                        <rect x="52" y="135" width="106" height="44" rx="8" fill="var(--bg-tertiary)"/>
                        <text x="105" y="155" text-anchor="middle" fill="var(--text-tertiary)" font-size="7" font-family="var(--font-mono)" font-weight="600" opacity="0.6">HOSTING</text>
                        <text x="105" y="170" text-anchor="middle" fill="var(--text-primary)" font-size="10" font-family="var(--font-display)" font-weight="700" opacity="0.7">cPanel &amp; WP</text>

                        <rect x="167" y="135" width="106" height="44" rx="8" fill="var(--bg-tertiary)"/>
                        <text x="220" y="155" text-anchor="middle" fill="var(--text-tertiary)" font-size="7" font-family="var(--font-mono)" font-weight="600" opacity="0.6">SERVERS</text>
                        <text x="220" y="170" text-anchor="middle" fill="var(--text-primary)" font-size="10" font-family="var(--font-display)" font-weight="700" opacity="0.7">VPS &amp; Cloud</text>

                        <rect x="282" y="135" width="106" height="44" rx="8" fill="var(--bg-tertiary)"/>
                        <text x="335" y="155" text-anchor="middle" fill="var(--text-tertiary)" font-size="7" font-family="var(--font-mono)" font-weight="600" opacity="0.6">EXTRAS</text>
                        <text x="335" y="170" text-anchor="middle" fill="var(--text-primary)" font-size="10" font-family="var(--font-display)" font-weight="700" opacity="0.7">Domains &amp; SSL</text>

                        <!-- Wholesale partner box (center) -->
                        <rect x="120" y="210" width="200" height="56" rx="12" fill="var(--brand-secondary)" opacity="0.1" stroke="var(--brand-secondary)" stroke-width="1.2"/>
                        <text x="220" y="234" text-anchor="middle" fill="var(--brand-secondary)" font-size="11" font-family="var(--font-display)" font-weight="800" opacity="0.8">YOUR BRAND</text>
                        <text x="220" y="253" text-anchor="middle" fill="var(--text-tertiary)" font-size="8" font-family="var(--font-mono)" opacity="0.55">White-Label Partner Portal</text>

                        <!-- Flow lines to partner -->
                        <line x1="105" y1="179" x2="170" y2="210" stroke="var(--brand-secondary)" stroke-width="1.2" stroke-dasharray="4 3" opacity="0.25"/>
                        <line x1="220" y1="179" x2="220" y2="210" stroke="var(--brand-secondary)" stroke-width="1.2" stroke-dasharray="4 3" opacity="0.25"/>
                        <line x1="335" y1="179" x2="270" y2="210" stroke="var(--brand-secondary)" stroke-width="1.2" stroke-dasharray="4 3" opacity="0.25"/>

                        <!-- Flow arrows to end clients -->
                        <line x1="175" y1="266" x2="100" y2="305" stroke="var(--text-tertiary)" stroke-width="1" stroke-dasharray="3 3" opacity="0.2"/>
                        <line x1="220" y1="266" x2="220" y2="305" stroke="var(--text-tertiary)" stroke-width="1" stroke-dasharray="3 3" opacity="0.2"/>
                        <line x1="265" y1="266" x2="340" y2="305" stroke="var(--text-tertiary)" stroke-width="1" stroke-dasharray="3 3" opacity="0.2"/>

                        <!-- End client circles -->
                        <circle cx="100" cy="322" r="18" fill="var(--bg-tertiary)" stroke="var(--border-primary)" stroke-width="1"/>
                        <text x="100" y="318" text-anchor="middle" fill="var(--text-tertiary)" font-size="12" opacity="0.6">👤</text>
                        <text x="100" y="330" text-anchor="middle" fill="var(--text-tertiary)" font-size="6" font-family="var(--font-mono)" opacity="0.5">Client</text>

                        <circle cx="160" cy="330" r="14" fill="var(--bg-tertiary)" stroke="var(--border-primary)" stroke-width="1"/>
                        <text x="160" y="327" text-anchor="middle" fill="var(--text-tertiary)" font-size="10" opacity="0.6">👤</text>
                        <text x="160" y="337" text-anchor="middle" fill="var(--text-tertiary)" font-size="5" font-family="var(--font-mono)" opacity="0.5">Client</text>

                        <circle cx="220" cy="322" r="18" fill="var(--bg-tertiary)" stroke="var(--border-primary)" stroke-width="1"/>
                        <text x="220" y="318" text-anchor="middle" fill="var(--text-tertiary)" font-size="12" opacity="0.6">👤</text>
                        <text x="220" y="330" text-anchor="middle" fill="var(--text-tertiary)" font-size="6" font-family="var(--font-mono)" opacity="0.5">Client</text>

                        <circle cx="280" cy="330" r="14" fill="var(--bg-tertiary)" stroke="var(--border-primary)" stroke-width="1"/>
                        <text x="280" y="327" text-anchor="middle" fill="var(--text-tertiary)" font-size="10" opacity="0.6">👤</text>
                        <text x="280" y="337" text-anchor="middle" fill="var(--text-tertiary)" font-size="5" font-family="var(--font-mono)" opacity="0.5">Client</text>

                        <circle cx="340" cy="322" r="18" fill="var(--bg-tertiary)" stroke="var(--border-primary)" stroke-width="1"/>
                        <text x="340" y="318" text-anchor="middle" fill="var(--text-tertiary)" font-size="12" opacity="0.6">👤</text>
                        <text x="340" y="330" text-anchor="middle" fill="var(--text-tertiary)" font-size="6" font-family="var(--font-mono)" opacity="0.5">Client</text>

                        <!-- Profit badge -->
                        <rect x="325" y="44" width="80" height="32" rx="16" fill="var(--brand-secondary)" opacity="0.12"/>
                        <text x="365" y="65" text-anchor="middle" fill="var(--brand-secondary)" font-size="11" font-family="var(--font-display)" font-weight="800" opacity="0.8">UP TO 13%</text>

                        <!-- Animated pulse dots -->
                        <circle cx="220" y="197" r="3" fill="var(--brand-secondary)" opacity="0.5">
                            <animate attributeName="opacity" values="0.3;0.8;0.3" dur="2s" repeatCount="indefinite"/>
                        </circle>
                        <circle cx="220" cy="292" r="3" fill="var(--brand-primary)" opacity="0.5">
                            <animate attributeName="opacity" values="0.3;0.8;0.3" dur="2.5s" repeatCount="indefinite"/>
                        </circle>
                    </svg>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ WHAT IS WHOLESALE ═══════════════ -->
    <section class="bento-features reveal" id="services">
        <div class="container">
            <div class="section-header">
                <div class="section-tag"><?php echo e(__('wholesale_what_tag')); ?></div>
                <h2><?php echo e(__('wholesale_what_title')); ?></h2>
                <p><?php echo e(__('wholesale_what_desc')); ?></p>
            </div>

            <div class="bento-grid">
                <div class="bento-card bento-sm">
                    <div class="bento-card-icon"><i class="fas fa-warehouse"></i></div>
                    <h4><?php echo e(__('wholesale_what_bulk_title')); ?></h4>
                    <p><?php echo e(__('wholesale_what_bulk_desc')); ?></p>
                </div>
                <div class="bento-card bento-sm">
                    <div class="bento-card-icon icon-green"><i class="fas fa-user-secret"></i></div>
                    <h3><?php echo e(__('wholesale_what_wl_title')); ?></h3>
                    <p><?php echo e(__('wholesale_what_wl_desc')); ?></p>
                </div>
                <div class="bento-card bento-sm">
                    <div class="bento-card-icon icon-blue"><i class="fas fa-cogs"></i></div>
                    <h3><?php echo e(__('wholesale_what_api_title')); ?></h3>
                    <p><?php echo e(__('wholesale_what_api_desc')); ?></p>
                </div>
                <div class="bento-card bento-sm">
                    <div class="bento-card-icon icon-purple"><i class="fas fa-headset"></i></div>
                    <h3><?php echo e(__('wholesale_what_support_title')); ?></h3>
                    <p><?php echo e(__('wholesale_what_support_desc')); ?></p>
                </div>
                <div class="bento-card bento-sm">
                    <div class="bento-card-icon icon-amber"><i class="fas fa-chart-line"></i></div>
                    <h3><?php echo e(__('wholesale_what_dash_title')); ?></h3>
                    <p><?php echo e(__('wholesale_what_dash_desc')); ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ PRICING PLANS ═══════════════ -->
    <section class="ws-tiers reveal" id="plans">
        <div class="container">
            <div class="section-header">
                <div class="section-tag"><?php echo e(__('wholesale_pricing_tag')); ?></div>
                <h2><?php echo e(__('wholesale_pricing_title')); ?></h2>
                <p><?php echo e(__('wholesale_pricing_desc')); ?></p>
            </div>

            <div class="ws-tiers-stack">
                <div class="ws-tier">
                    <div class="ws-tier-discount" style="--tier-pct: 30%">
                        <span class="ws-tier-pct">4%</span>
                        <span class="ws-tier-pct-label"><?php echo e(__('wholesale_discount')); ?></span>
                    </div>
                    <div class="ws-tier-info">
                        <div class="ws-tier-name"><?php echo e(__('wholesale_tier_starter')); ?></div>
                        <div class="ws-tier-target"><?php echo e(__('wholesale_target_starter')); ?></div>
                    </div>
                    <div class="ws-tier-meta">
                        <span class="ws-tier-chip"><i class="fas fa-hdd"></i> <?php echo e(__('wholesale_chip_vps')); ?></span>
                        <span class="ws-tier-chip"><i class="fas fa-headset"></i> <?php echo e(__('wholesale_chip_support')); ?></span>
                    </div>
                    <div class="ws-tier-price">
                        <span class="ws-tier-currency">€</span><span class="ws-tier-amount">9.9</span><span class="ws-tier-period">/mo</span>
                    </div>
                    <a href="<?php echo e(SITE_URL); ?>/contact/" class="ws-tier-cta"><?php echo e(__('common_get_started')); ?> <i class="fas fa-arrow-right"></i></a>
                </div>

                <div class="ws-tier">
                    <div class="ws-tier-discount" style="--tier-pct: 53%">
                        <span class="ws-tier-pct">7%</span>
                        <span class="ws-tier-pct-label"><?php echo e(__('wholesale_discount')); ?></span>
                    </div>
                    <div class="ws-tier-info">
                        <div class="ws-tier-name"><?php echo e(__('wholesale_tier_platinum')); ?></div>
                        <div class="ws-tier-target"><?php echo e(__('wholesale_target_platinum')); ?></div>
                    </div>
                    <div class="ws-tier-meta">
                        <span class="ws-tier-chip"><i class="fas fa-layer-group"></i> <?php echo e(__('wholesale_chip_all')); ?></span>
                        <span class="ws-tier-chip"><i class="fas fa-headset"></i> <?php echo e(__('wholesale_chip_support')); ?></span>
                    </div>
                    <div class="ws-tier-price">
                        <span class="ws-tier-currency">€</span><span class="ws-tier-amount">14.99</span><span class="ws-tier-period">/mo</span>
                    </div>
                    <a href="<?php echo e(SITE_URL); ?>/contact/" class="ws-tier-cta"><?php echo e(__('common_get_started')); ?> <i class="fas fa-arrow-right"></i></a>
                </div>

                <div class="ws-tier ws-tier--popular">
                    <div class="ws-tier-badge"><?php echo e(__('reseller_most_popular')); ?></div>
                    <div class="ws-tier-discount" style="--tier-pct: 76%">
                        <span class="ws-tier-pct">10%</span>
                        <span class="ws-tier-pct-label"><?php echo e(__('wholesale_discount')); ?></span>
                    </div>
                    <div class="ws-tier-info">
                        <div class="ws-tier-name"><?php echo e(__('wholesale_tier_business')); ?></div>
                        <div class="ws-tier-target"><?php echo e(__('wholesale_target_business')); ?></div>
                    </div>
                    <div class="ws-tier-meta">
                        <span class="ws-tier-chip"><i class="fas fa-layer-group"></i> <?php echo e(__('wholesale_chip_all')); ?></span>
                        <span class="ws-tier-chip"><i class="fas fa-headset"></i> <?php echo e(__('wholesale_chip_support')); ?></span>
                    </div>
                    <div class="ws-tier-price">
                        <span class="ws-tier-currency">€</span><span class="ws-tier-amount">19.99</span><span class="ws-tier-period">/mo</span>
                    </div>
                    <a href="<?php echo e(SITE_URL); ?>/contact/" class="ws-tier-cta ws-tier-cta--primary"><?php echo e(__('common_get_started')); ?> <i class="fas fa-arrow-right"></i></a>
                </div>

                <div class="ws-tier">
                    <div class="ws-tier-discount" style="--tier-pct: 100%">
                        <span class="ws-tier-pct">13%</span>
                        <span class="ws-tier-pct-label"><?php echo e(__('wholesale_discount')); ?></span>
                    </div>
                    <div class="ws-tier-info">
                        <div class="ws-tier-name"><?php echo e(__('wholesale_tier_enterprise')); ?></div>
                        <div class="ws-tier-target"><?php echo e(__('wholesale_target_enterprise')); ?></div>
                    </div>
                    <div class="ws-tier-meta">
                        <span class="ws-tier-chip"><i class="fas fa-layer-group"></i> <?php echo e(__('wholesale_chip_all')); ?></span>
                        <span class="ws-tier-chip"><i class="fas fa-headset"></i> <?php echo e(__('wholesale_chip_support')); ?></span>
                    </div>
                    <div class="ws-tier-price">
                        <span class="ws-tier-currency">€</span><span class="ws-tier-amount">24.49</span><span class="ws-tier-period">/mo</span>
                    </div>
                    <a href="<?php echo e(SITE_URL); ?>/contact/" class="ws-tier-cta"><?php echo e(__('common_get_started')); ?> <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>
    </section>

    <!-- ═══════════════ SERVICES INCLUDED ═══════════════ -->
    <section class="wholesale-services reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag"><?php echo e(__('wholesale_services_tag')); ?></div>
                <h2><?php echo e(__('wholesale_services_title')); ?></h2>
                <p><?php echo e(__('wholesale_services_desc')); ?></p>
            </div>

            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon"><i class="fas fa-server"></i></div>
                    <h4><?php echo e(__('wholesale_svc_cpanel_title')); ?></h4>
                    <p><?php echo e(__('wholesale_svc_cpanel_desc')); ?></p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon icon-green"><i class="fab fa-wordpress"></i></div>
                    <h4><?php echo e(__('wholesale_svc_wp_title')); ?></h4>
                    <p><?php echo e(__('wholesale_svc_wp_desc')); ?></p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon icon-blue"><i class="fas fa-cloud"></i></div>
                    <h4><?php echo e(__('wholesale_svc_cloud_title')); ?></h4>
                    <p><?php echo e(__('wholesale_svc_cloud_desc')); ?></p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon icon-purple"><i class="fas fa-hdd"></i></div>
                    <h4><?php echo e(__('wholesale_svc_vps_title')); ?></h4>
                    <p><?php echo e(__('wholesale_svc_vps_desc')); ?></p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon icon-amber"><i class="fas fa-network-wired"></i></div>
                    <h4><?php echo e(__('wholesale_svc_dedi_title')); ?></h4>
                    <p><?php echo e(__('wholesale_svc_dedi_desc')); ?></p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon icon-rose"><i class="fas fa-globe"></i></div>
                    <h4><?php echo e(__('wholesale_svc_domain_title')); ?></h4>
                    <p><?php echo e(__('wholesale_svc_domain_desc')); ?></p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon"><i class="fas fa-certificate"></i></div>
                    <h4><?php echo e(__('wholesale_svc_ssl_title')); ?></h4>
                    <p><?php echo e(__('wholesale_svc_ssl_desc')); ?></p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon icon-green"><i class="fab fa-microsoft"></i></div>
                    <h4><?php echo e(__('wholesale_svc_ms_title')); ?></h4>
                    <p><?php echo e(__('wholesale_svc_ms_desc')); ?></p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon icon-blue"><i class="fas fa-envelope"></i></div>
                    <h4><?php echo e(__('wholesale_svc_email_title')); ?></h4>
                    <p><?php echo e(__('wholesale_svc_email_desc')); ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ BENEFITS ═══════════════ -->
    <section class="bento-features reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag"><?php echo e(__('wholesale_benefits_tag')); ?></div>
                <h2><?php echo e(__('wholesale_benefits_title')); ?></h2>
                <p><?php echo e(__('wholesale_benefits_desc')); ?></p>
            </div>

            <div class="bento-grid">
                <div class="bento-card bento-sm">
                    <div class="bento-card-icon"><i class="fas fa-percentage"></i></div>
                    <h3><?php echo e(__('wholesale_ben_discount_title')); ?></h3>
                    <p><?php echo e(__('wholesale_ben_discount_desc')); ?></p>
                </div>
                <div class="bento-card bento-sm">
                    <div class="bento-card-icon icon-green"><i class="fas fa-infinity"></i></div>
                    <h3><?php echo e(__('wholesale_ben_nomin_title')); ?></h3>
                    <p><?php echo e(__('wholesale_ben_nomin_desc')); ?></p>
                </div>
                <div class="bento-card bento-sm">
                    <div class="bento-card-icon icon-blue"><i class="fas fa-file-invoice-dollar"></i></div>
                    <h3><?php echo e(__('wholesale_ben_billing_title')); ?></h3>
                    <p><?php echo e(__('wholesale_ben_billing_desc')); ?></p>
                </div>
                <div class="bento-card bento-sm">
                    <div class="bento-card-icon icon-purple"><i class="fas fa-handshake"></i></div>
                    <h3><?php echo e(__('wholesale_ben_manager_title')); ?></h3>
                    <p><?php echo e(__('wholesale_ben_manager_desc')); ?></p>
                </div>
                <div class="bento-card bento-sm">
                    <div class="bento-card-icon icon-amber"><i class="fas fa-rocket"></i></div>
                    <h4><?php echo e(__('wholesale_ben_instant_title')); ?></h4>
                    <p><?php echo e(__('wholesale_ben_instant_desc')); ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ COMPARISON: WHOLESALE vs RESELLER ═══════════════ -->
    <section class="wholesale-compare reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag"><?php echo e(__('wholesale_compare_tag')); ?></div>
                <h2><?php echo e(__('wholesale_compare_title')); ?></h2>
                <p><?php echo e(__('wholesale_compare_desc')); ?></p>
            </div>

            <div class="compare-table-wrap">
                <table class="compare-table">
                    <thead>
                        <tr>
                            <th><?php echo e(__('wholesale_cmp_feature')); ?></th>
                            <th><?php echo e(__('wholesale_cmp_standard')); ?></th>
                            <th class="compare-highlight"><?php echo e(__('wholesale_cmp_wholesale')); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo e(__('wholesale_cmp_pricing')); ?></td>
                            <td><?php echo e(__('wholesale_cmp_pricing_std')); ?></td>
                            <td class="compare-highlight"><?php echo e(__('wholesale_cmp_pricing_ws')); ?></td>
                        </tr>
                        <tr>
                            <td><?php echo e(__('wholesale_cmp_discount')); ?></td>
                            <td><?php echo e(__('wholesale_cmp_discount_std')); ?></td>
                            <td class="compare-highlight"><?php echo e(__('wholesale_cmp_discount_ws')); ?></td>
                        </tr>
                        <tr>
                            <td><?php echo e(__('wholesale_cmp_products')); ?></td>
                            <td><?php echo e(__('wholesale_cmp_products_std')); ?></td>
                            <td class="compare-highlight"><?php echo e(__('wholesale_cmp_products_ws')); ?></td>
                        </tr>
                        <tr>
                            <td><?php echo e(__('wholesale_cmp_wl')); ?></td>
                            <td><i class="fas fa-check text-green"></i> <?php echo e(__('wholesale_cmp_wl_std')); ?></td>
                            <td class="compare-highlight"><i class="fas fa-check text-green"></i> <?php echo e(__('wholesale_cmp_wl_ws')); ?></td>
                        </tr>
                        <tr>
                            <td><?php echo e(__('wholesale_cmp_api')); ?></td>
                            <td><i class="fas fa-times text-red"></i> <?php echo e(__('wholesale_cmp_api_std')); ?></td>
                            <td class="compare-highlight"><i class="fas fa-check text-green"></i> <?php echo e(__('wholesale_cmp_api_ws')); ?></td>
                        </tr>
                        <tr>
                            <td><?php echo e(__('wholesale_cmp_whmcs')); ?></td>
                            <td><i class="fas fa-check text-green"></i> <?php echo e(__('wholesale_cmp_whmcs_std')); ?></td>
                            <td class="compare-highlight"><i class="fas fa-check text-green"></i> <?php echo e(__('wholesale_cmp_whmcs_ws')); ?></td>
                        </tr>
                        <tr>
                            <td><?php echo e(__('wholesale_cmp_manager')); ?></td>
                            <td><i class="fas fa-times text-red"></i> <?php echo e(__('wholesale_cmp_manager_std')); ?></td>
                            <td class="compare-highlight"><i class="fas fa-check text-green"></i> <?php echo e(__('wholesale_cmp_manager_ws')); ?></td>
                        </tr>
                        <tr>
                            <td><?php echo e(__('wholesale_cmp_support')); ?></td>
                            <td><?php echo e(__('wholesale_cmp_support_std')); ?></td>
                            <td class="compare-highlight"><?php echo e(__('wholesale_cmp_support_ws')); ?></td>
                        </tr>
                        <tr>
                            <td><?php echo e(__('wholesale_cmp_billing')); ?></td>
                            <td><?php echo e(__('wholesale_cmp_billing_std')); ?></td>
                            <td class="compare-highlight"><?php echo e(__('wholesale_cmp_billing_ws')); ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- ═══════════════ HOW TO JOIN ═══════════════ -->
    <section class="onboarding reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag"><?php echo e(__('wholesale_join_tag')); ?></div>
                <h2><?php echo e(__('wholesale_join_title')); ?></h2>
                <p><?php echo e(__('wholesale_join_desc')); ?></p>
            </div>

            <div class="vps-steps-grid">
                <div class="vps-step-card">
                    <div class="vps-step-num">1</div>
                    <div class="vps-step-icon"><i class="fas fa-paper-plane"></i></div>
                    <h4><?php echo e(__('wholesale_join_s1_title')); ?></h4>
                    <p><?php echo e(__('wholesale_join_s1_desc')); ?></p>
                </div>
                <div class="vps-step-card">
                    <div class="vps-step-num">2</div>
                    <div class="vps-step-icon icon-green"><i class="fas fa-user-check"></i></div>
                    <h4><?php echo e(__('wholesale_join_s2_title')); ?></h4>
                    <p><?php echo e(__('wholesale_join_s2_desc')); ?></p>
                </div>
                <div class="vps-step-card">
                    <div class="vps-step-num">3</div>
                    <div class="vps-step-icon icon-purple"><i class="fas fa-plug"></i></div>
                    <h4><?php echo e(__('wholesale_join_s3_title')); ?></h4>
                    <p><?php echo e(__('wholesale_join_s3_desc')); ?></p>
                </div>
                <div class="vps-step-card">
                    <div class="vps-step-num">4</div>
                    <div class="vps-step-icon icon-amber"><i class="fas fa-rocket"></i></div>
                    <h4><?php echo e(__('wholesale_join_s4_title')); ?></h4>
                    <p><?php echo e(__('wholesale_join_s4_desc')); ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ FAQ ═══════════════ -->
    <section class="faq-section reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag"><?php echo e(__('wholesale_faq_tag')); ?></div>
                <h2><?php echo e(__('wholesale_faq_title')); ?></h2>
            </div>

            <div class="faq-layout faq-layout--full">
                <div class="faq-panels">
                    <div class="faq-panel active" id="faq-wholesale">
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('wholesale_faq_q1')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('wholesale_faq_a1')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('wholesale_faq_q2')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('wholesale_faq_a2')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('wholesale_faq_q3')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('wholesale_faq_a3')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('wholesale_faq_q4')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('wholesale_faq_a4')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('wholesale_faq_q5')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo __('wholesale_faq_a5'); ?></p></div></div>
                    </div>
                </div>
            </div>

            <div class="faq-actions">
                <a href="<?php echo e(SITE_URL); ?>/contact/" class="btn-primary"><i class="fas fa-headset"></i> <?php echo e(__('common_contact_sales')); ?></a>
                <a href="<?php echo e(SITE_URL); ?>/faq/" class="btn-secondary"><?php echo e(__('common_browse_faq')); ?> <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </section>

    <!-- ═══════════════ BOTTOM CTA ═══════════════ -->
    <section class="promo-cta reveal">
        <div class="container">
            <div class="promo-cta-inner">
                <div class="promo-cta-glow"></div>
                <div class="promo-cta-icon"><i class="fas fa-handshake"></i></div>
                <h2><?php echo e(__('wholesale_cta_title')); ?></h2>
                <p><?php echo e(__('wholesale_cta_desc')); ?></p>
                <a href="<?php echo e(SITE_URL); ?>/contact/" class="btn-primary"><?php echo e(__('wholesale_cta_apply')); ?> <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
