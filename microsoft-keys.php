<?php
/**
 * YottaSrc — Microsoft Keys Reseller
 * ====================================
 * Resell Microsoft license keys (Windows, Office) under your brand.
 */
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/topbar.php';
?>

    <!-- ═══════════════ HERO ═══════════════ -->
    <section class="page-hero ms-hero reveal">
        <div class="container">
            <div class="page-hero-split">
                <div class="page-hero-content">
                    <div class="page-breadcrumb">
                        <a href="<?php echo e(SITE_URL); ?>/"><?php echo e(__('breadcrumb_home')); ?></a>
                        <i class="fas fa-chevron-right"></i>
                        <a href="<?php echo e(SITE_URL); ?>/microsoft-products/"><?php echo e(__('mskeys_breadcrumb_ms')); ?></a>
                        <i class="fas fa-chevron-right"></i>
                        <span><?php echo e(__('mskeys_breadcrumb')); ?></span>
                    </div>
                    <h1><?php echo __('mskeys_hero_title'); ?></h1>
                    <p class="page-hero-desc">
                        <?php echo e(__('mskeys_hero_desc')); ?>
                    </p>
                    <div class="page-hero-ctas">
                        <a href="#products" class="btn-primary"><?php echo e(__('mskeys_hero_cta_primary')); ?> <i class="fas fa-arrow-down"></i></a>
                        <a href="<?php echo e(SITE_URL); ?>/contact-us/" class="btn-secondary"><i class="fas fa-headset"></i> <?php echo e(__('mskeys_hero_cta_secondary')); ?></a>
                    </div>
                    <div class="page-hero-badges">
                        <div class="hero-badge-item"><i class="fas fa-check"></i> <?php echo e(__('mskeys_hero_badge1')); ?></div>
                        <div class="hero-badge-item"><i class="fas fa-check"></i> <?php echo e(__('mskeys_hero_badge2')); ?></div>
                        <div class="hero-badge-item"><i class="fas fa-check"></i> <?php echo e(__('mskeys_hero_badge3')); ?></div>
                        <div class="hero-badge-item"><i class="fas fa-check"></i> <?php echo e(__('mskeys_hero_badge4')); ?></div>
                    </div>
                </div>
                <div class="page-hero-visual">
                    <svg viewBox="0 0 440 400" fill="none" xmlns="http://www.w3.org/2000/svg" class="hero-illustration" aria-label="Microsoft license keys illustration">
                        <!-- Window Frame -->
                        <rect x="20" y="20" width="400" height="360" rx="16" fill="var(--bg-card)" stroke="var(--border-primary)" stroke-width="1.5"/>
                        <rect x="20" y="20" width="400" height="38" rx="16" fill="var(--bg-tertiary)"/>
                        <rect x="20" y="42" width="400" height="16" fill="var(--bg-tertiary)"/>
                        <circle cx="42" cy="39" r="5" fill="var(--brand-error)" opacity="0.6"/>
                        <circle cx="58" cy="39" r="5" fill="var(--brand-warning)" opacity="0.6"/>
                        <circle cx="74" cy="39" r="5" fill="var(--brand-secondary)" opacity="0.6"/>
                        <text x="220" y="44" text-anchor="middle" fill="var(--text-tertiary)" font-size="11" font-family="var(--font-mono)" font-weight="600" opacity="0.6">License Keys — Reseller Panel</text>

                        <!-- Product category cards -->
                        <text x="40" y="82" fill="var(--brand-primary)" font-size="9" font-family="var(--font-display)" font-weight="700" letter-spacing="0.8" opacity="0.7">PRODUCT CATALOG</text>
                        <line x1="40" y1="88" x2="400" y2="88" stroke="var(--border-primary)" stroke-width="0.6"/>

                        <!-- Windows Card -->
                        <rect x="40" y="96" width="170" height="80" rx="10" fill="var(--bg-tertiary)"/>
                        <rect x="52" y="108" width="28" height="28" rx="6" fill="var(--brand-primary)" opacity="0.12"/>
                        <text x="66" y="126" text-anchor="middle" fill="var(--brand-primary)" font-size="16" font-family="var(--font-body)" opacity="0.6"><tspan>⊞</tspan></text>
                        <text x="92" y="118" fill="var(--text-secondary)" font-size="10" font-family="var(--font-display)" font-weight="700" opacity="0.8">Windows Keys</text>
                        <text x="92" y="132" fill="var(--text-tertiary)" font-size="7.5" font-family="var(--font-mono)" opacity="0.5">8 products · From €3.50</text>
                        <rect x="52" y="148" width="50" height="18" rx="9" fill="var(--brand-primary)" opacity="0.1"/>
                        <text x="77" y="160" text-anchor="middle" fill="var(--brand-primary)" font-size="7.5" font-family="var(--font-mono)" font-weight="600" opacity="0.6">Popular</text>
                        <rect x="108" y="148" width="44" height="18" rx="9" fill="var(--brand-secondary)" opacity="0.1"/>
                        <text x="130" y="160" text-anchor="middle" fill="var(--brand-secondary)" font-size="7.5" font-family="var(--font-mono)" font-weight="600" opacity="0.6">In Stock</text>

                        <!-- Office Card -->
                        <rect x="230" y="96" width="170" height="80" rx="10" fill="var(--bg-tertiary)"/>
                        <rect x="242" y="108" width="28" height="28" rx="6" fill="var(--brand-warning)" opacity="0.12"/>
                        <text x="256" y="127" text-anchor="middle" fill="var(--brand-warning)" font-size="14" font-family="var(--font-body)"><tspan>📋</tspan></text>
                        <text x="282" y="118" fill="var(--text-secondary)" font-size="10" font-family="var(--font-display)" font-weight="700" opacity="0.8">Office Keys</text>
                        <text x="282" y="132" fill="var(--text-tertiary)" font-size="7.5" font-family="var(--font-mono)" opacity="0.5">9 products · From €1.50</text>
                        <rect x="242" y="148" width="48" height="18" rx="9" fill="var(--brand-warning)" opacity="0.1"/>
                        <text x="266" y="160" text-anchor="middle" fill="var(--brand-warning)" font-size="7.5" font-family="var(--font-mono)" font-weight="600" opacity="0.6">Best Sell</text>
                        <rect x="296" y="148" width="44" height="18" rx="9" fill="var(--brand-secondary)" opacity="0.1"/>
                        <text x="318" y="160" text-anchor="middle" fill="var(--brand-secondary)" font-size="7.5" font-family="var(--font-mono)" font-weight="600" opacity="0.6">In Stock</text>

                        <!-- Recent Orders section -->
                        <text x="40" y="202" fill="var(--brand-primary)" font-size="9" font-family="var(--font-display)" font-weight="700" letter-spacing="0.8" opacity="0.7">RECENT ORDERS</text>
                        <line x1="40" y1="208" x2="400" y2="208" stroke="var(--border-primary)" stroke-width="0.6"/>

                        <!-- Order Row 1 -->
                        <rect x="40" y="216" width="360" height="36" rx="8" fill="var(--bg-tertiary)"/>
                        <text x="55" y="238" fill="var(--text-tertiary)" font-size="8" font-family="var(--font-mono)" opacity="0.5">#10234</text>
                        <text x="108" y="238" fill="var(--text-secondary)" font-size="8.5" font-family="var(--font-body)" font-weight="600" opacity="0.7">Win 11 Pro × 5</text>
                        <text x="270" y="238" fill="var(--brand-primary)" font-size="8.5" font-family="var(--font-mono)" font-weight="700" opacity="0.7">€17.50</text>
                        <rect x="340" y="226" width="50" height="18" rx="9" fill="var(--brand-secondary)" opacity="0.15"/>
                        <text x="365" y="238" text-anchor="middle" fill="var(--brand-secondary)" font-size="7" font-family="var(--font-mono)" font-weight="600" opacity="0.7">Delivered</text>

                        <!-- Order Row 2 -->
                        <rect x="40" y="260" width="360" height="36" rx="8" fill="var(--bg-tertiary)"/>
                        <text x="55" y="282" fill="var(--text-tertiary)" font-size="8" font-family="var(--font-mono)" opacity="0.5">#10233</text>
                        <text x="108" y="282" fill="var(--text-secondary)" font-size="8.5" font-family="var(--font-body)" font-weight="600" opacity="0.7">Office 2021 Pro × 3</text>
                        <text x="270" y="282" fill="var(--brand-primary)" font-size="8.5" font-family="var(--font-mono)" font-weight="700" opacity="0.7">€8.70</text>
                        <rect x="340" y="270" width="50" height="18" rx="9" fill="var(--brand-secondary)" opacity="0.15"/>
                        <text x="365" y="282" text-anchor="middle" fill="var(--brand-secondary)" font-size="7" font-family="var(--font-mono)" font-weight="600" opacity="0.7">Delivered</text>

                        <!-- Order Row 3 -->
                        <rect x="40" y="304" width="360" height="36" rx="8" fill="var(--bg-tertiary)"/>
                        <text x="55" y="326" fill="var(--text-tertiary)" font-size="8" font-family="var(--font-mono)" opacity="0.5">#10232</text>
                        <text x="108" y="326" fill="var(--text-secondary)" font-size="8.5" font-family="var(--font-body)" font-weight="600" opacity="0.7">Office 365 × 10</text>
                        <text x="270" y="326" fill="var(--brand-primary)" font-size="8.5" font-family="var(--font-mono)" font-weight="700" opacity="0.7">€15.00</text>
                        <rect x="340" y="314" width="50" height="18" rx="9" fill="var(--brand-secondary)" opacity="0.15"/>
                        <text x="365" y="326" text-anchor="middle" fill="var(--brand-secondary)" font-size="7" font-family="var(--font-mono)" font-weight="600" opacity="0.7">Delivered</text>

                        <!-- Summary bar -->
                        <rect x="40" y="350" width="360" height="20" rx="6" fill="var(--bg-card)" stroke="var(--border-primary)" stroke-width="0.5"/>
                        <text x="220" y="364" text-anchor="middle" fill="var(--text-tertiary)" font-size="7.5" font-family="var(--font-mono)" opacity="0.5">Total Revenue: €4,230.00 · 1,247 Keys Delivered · 0 Pending</text>

                        <!-- Floating badges -->
                        <rect x="356" y="2" width="80" height="36" rx="10" fill="var(--bg-card)" stroke="var(--border-primary)" stroke-width="1">
                            <animate attributeName="y" values="2;8;2" dur="5s" repeatCount="indefinite"/>
                        </rect>
                        <text x="372" y="17" fill="var(--text-tertiary)" font-size="7" font-family="var(--font-mono)" font-weight="600" opacity="0.6">
                            KEYS SOLD
                            <animate attributeName="y" values="17;23;17" dur="5s" repeatCount="indefinite"/>
                        </text>
                        <text x="372" y="31" fill="var(--brand-secondary)" font-size="13" font-family="var(--font-display)" font-weight="800" opacity="0.8">
                            1,247
                            <animate attributeName="y" values="31;37;31" dur="5s" repeatCount="indefinite"/>
                        </text>

                        <circle cx="8" cy="80" r="3" fill="var(--brand-primary)" opacity="0.25">
                            <animate attributeName="opacity" values="0.25;0.6;0.25" dur="3s" repeatCount="indefinite"/>
                        </circle>
                    </svg>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ PARTNERS STRIP ═══════════════ -->
    <section class="partners">
        <div class="container">
            <span class="partners-label"><?php echo e(__('mskeys_partners_label')); ?></span>
            <div class="partners-logos">
                <span class="partner-logo"><i class="fab fa-windows"></i> Windows 11</span>
                <span class="partner-logo"><i class="fab fa-windows"></i> Windows 10</span>
                <span class="partner-logo"><i class="fab fa-microsoft"></i> Office 365</span>
                <span class="partner-logo"><i class="fab fa-microsoft"></i> Office 2021</span>
                <span class="partner-logo"><i class="fab fa-windows"></i> Server 2022</span>
                <span class="partner-logo"><i class="fab fa-microsoft"></i> Visio &amp; Project</span>
            </div>
        </div>
    </section>

    <!-- ═══════════════ PRODUCT CATEGORIES ═══════════════ -->
    <section class="ms-catalog reveal" id="products">
        <div class="container">
            <div class="section-header">
                <div class="section-tag"><?php echo e(__('mskeys_catalog_tag')); ?></div>
                <h2><?php echo e(__('mskeys_catalog_title')); ?></h2>
                <p><?php echo e(__('mskeys_catalog_desc')); ?></p>
            </div>

            <div class="cp-benefits-grid">
                <div class="cp-security-card">
                    <div class="cp-security-icon"><i class="fab fa-windows"></i></div>
                    <h4><?php echo e(__('mskeys_catalog_windows_title')); ?></h4>
                    <p><?php echo e(__('mskeys_catalog_windows_desc')); ?></p>
                </div>
                <div class="cp-security-card">
                    <div class="cp-security-icon icon-amber"><i class="fab fa-microsoft"></i></div>
                    <h4><?php echo e(__('mskeys_catalog_office_title')); ?></h4>
                    <p><?php echo e(__('mskeys_catalog_office_desc')); ?></p>
                </div>
                <div class="cp-security-card">
                    <div class="cp-security-icon icon-purple"><i class="fas fa-server"></i></div>
                    <h4><?php echo e(__('mskeys_catalog_server_title')); ?></h4>
                    <p><?php echo e(__('mskeys_catalog_server_desc')); ?></p>
                </div>
                <div class="cp-security-card">
                    <div class="cp-security-icon icon-green"><i class="fas fa-building"></i></div>
                    <h4><?php echo e(__('mskeys_catalog_enterprise_title')); ?></h4>
                    <p><?php echo e(__('mskeys_catalog_enterprise_desc')); ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ WHY RESELL + GENUINE LICENSES (MERGED) ═══════════════ -->
    <section class="cp-benefits ms-combined reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag"><?php echo e(__('mskeys_why_tag')); ?></div>
                <h2><?php echo e(__('mskeys_why_title')); ?></h2>
                <p><?php echo e(__('mskeys_why_desc')); ?></p>
            </div>

            <div class="cp-benefits-grid">
                <div class="cp-security-card">
                    <div class="cp-security-icon"><i class="fas fa-hand-holding-usd"></i></div>
                    <h4><?php echo e(__('mskeys_why_margins_title')); ?></h4>
                    <p><?php echo e(__('mskeys_why_margins_desc')); ?></p>
                </div>
                <div class="cp-security-card">
                    <div class="cp-security-icon icon-green"><i class="fas fa-bolt"></i></div>
                    <h4><?php echo e(__('mskeys_why_delivery_title')); ?></h4>
                    <p><?php echo e(__('mskeys_why_delivery_desc')); ?></p>
                </div>
                <div class="cp-security-card">
                    <div class="cp-security-icon icon-purple"><i class="fas fa-box-open"></i></div>
                    <h4><?php echo e(__('mskeys_why_inventory_title')); ?></h4>
                    <p><?php echo e(__('mskeys_why_inventory_desc')); ?></p>
                </div>
                <div class="cp-security-card">
                    <div class="cp-security-icon icon-amber"><i class="fas fa-globe"></i></div>
                    <h4><?php echo e(__('mskeys_why_demand_title')); ?></h4>
                    <p><?php echo e(__('mskeys_why_demand_desc')); ?></p>
                </div>
                <div class="cp-security-card">
                    <div class="cp-security-icon"><i class="fas fa-shield-alt"></i></div>
                    <h4><?php echo e(__('mskeys_why_genuine_title')); ?></h4>
                    <p><?php echo e(__('mskeys_why_genuine_desc')); ?></p>
                </div>
                <div class="cp-security-card">
                    <div class="cp-security-icon icon-green"><i class="fas fa-certificate"></i></div>
                    <h4><?php echo e(__('mskeys_why_global_title')); ?></h4>
                    <p><?php echo e(__('mskeys_why_global_desc')); ?></p>
                </div>
                <div class="cp-security-card">
                    <div class="cp-security-icon icon-purple"><i class="fas fa-sync-alt"></i></div>
                    <h4><?php echo e(__('mskeys_why_replace_title')); ?></h4>
                    <p><?php echo e(__('mskeys_why_replace_desc')); ?></p>
                </div>
                <div class="cp-security-card">
                    <div class="cp-security-icon icon-amber"><i class="fas fa-headset"></i></div>
                    <h4><?php echo e(__('mskeys_why_support_title')); ?></h4>
                    <p><?php echo e(__('mskeys_why_support_desc')); ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ VOLUME PRICING ═══════════════ -->
    <section class="ms-discount reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag"><?php echo e(__('mskeys_volume_tag')); ?></div>
                <h2><?php echo e(__('mskeys_volume_title')); ?></h2>
                <p><?php echo e(__('mskeys_volume_desc')); ?></p>
            </div>

            <div class="ms-discount-table-wrap">
                <table class="ms-discount-table">
                    <thead>
                        <tr>
                            <th><?php echo e(__('mskeys_volume_th_qty')); ?></th>
                            <th><?php echo e(__('mskeys_volume_th_discount')); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td>10+ keys</td><td>5%</td></tr>
                        <tr><td>25+ keys</td><td>10%</td></tr>
                        <tr><td>50+ keys</td><td>15%</td></tr>
                        <tr class="ms-discount-highlight"><td>100+ keys</td><td><?php echo e(__('mskeys_volume_custom')); ?></td></tr>
                    </tbody>
                </table>
            </div>

            <div class="pricing-custom">
                <p><?php echo __('mskeys_volume_order_note', ['url' => e(SITE_URL) . '/contact-us/']); ?></p>
            </div>

            <p class="ms-discount-note"><?php echo __('mskeys_volume_footer'); ?></p>
        </div>
    </section>

    <!-- ═══════════════ HOW TO START ═══════════════ -->
    <section class="ms-steps reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag"><?php echo e(__('mskeys_steps_tag')); ?></div>
                <h2><?php echo e(__('mskeys_steps_title')); ?></h2>
                <p><?php echo e(__('mskeys_steps_desc')); ?></p>
            </div>

            <div class="vps-steps-grid">
                <div class="vps-step-card">
                    <span class="vps-step-num">1</span>
                    <div class="vps-step-icon"><i class="fas fa-user-plus"></i></div>
                    <h4><?php echo e(__('mskeys_step1_title')); ?></h4>
                    <p><?php echo e(__('mskeys_step1_desc')); ?></p>
                </div>
                <div class="vps-step-card">
                    <span class="vps-step-num">2</span>
                    <div class="vps-step-icon icon-green"><i class="fas fa-headset"></i></div>
                    <h4><?php echo e(__('mskeys_step2_title')); ?></h4>
                    <p><?php echo e(__('mskeys_step2_desc')); ?></p>
                </div>
                <div class="vps-step-card">
                    <span class="vps-step-num">3</span>
                    <div class="vps-step-icon icon-purple"><i class="fas fa-tags"></i></div>
                    <h4><?php echo e(__('mskeys_step3_title')); ?></h4>
                    <p><?php echo e(__('mskeys_step3_desc')); ?></p>
                </div>
                <div class="vps-step-card">
                    <span class="vps-step-num">4</span>
                    <div class="vps-step-icon icon-amber"><i class="fas fa-rocket"></i></div>
                    <h4><?php echo e(__('mskeys_step4_title')); ?></h4>
                    <p><?php echo e(__('mskeys_step4_desc')); ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ FAQ ═══════════════ -->
    <section class="faq-section reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag"><?php echo e(__('mskeys_faq_tag')); ?></div>
                <h2><?php echo e(__('mskeys_faq_title')); ?></h2>
                <p><?php echo e(__('mskeys_faq_desc')); ?></p>
            </div>

            <div class="faq-layout">
                <div class="faq-tabs">
                    <button class="faq-tab active" data-faq-target="faq-general"><i class="fas fa-key"></i> <?php echo e(__('mskeys_faq_tab_general')); ?></button>
                    <button class="faq-tab" data-faq-target="faq-technical"><i class="fas fa-cogs"></i> <?php echo e(__('mskeys_faq_tab_technical')); ?></button>
                    <button class="faq-tab" data-faq-target="faq-billing"><i class="fas fa-credit-card"></i> <?php echo e(__('mskeys_faq_tab_billing')); ?></button>
                </div>

                <div class="faq-panels">
                    <div class="faq-panel active" id="faq-general">
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('mskeys_faq_gen_q1')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('mskeys_faq_gen_a1')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('mskeys_faq_gen_q2')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('mskeys_faq_gen_a2')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('mskeys_faq_gen_q3')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('mskeys_faq_gen_a3')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('mskeys_faq_gen_q4')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('mskeys_faq_gen_a4')); ?></p></div></div>
                    </div>

                    <div class="faq-panel" id="faq-technical">
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('mskeys_faq_tech_q1')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('mskeys_faq_tech_a1')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('mskeys_faq_tech_q2')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('mskeys_faq_tech_a2')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('mskeys_faq_tech_q3')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('mskeys_faq_tech_a3')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('mskeys_faq_tech_q4')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('mskeys_faq_tech_a4')); ?></p></div></div>
                    </div>

                    <div class="faq-panel" id="faq-billing">
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('mskeys_faq_bill_q1')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('mskeys_faq_bill_a1')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('mskeys_faq_bill_q2')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('mskeys_faq_bill_a2')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('mskeys_faq_bill_q3')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('mskeys_faq_bill_a3')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('mskeys_faq_bill_q4')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('mskeys_faq_bill_a4')); ?></p></div></div>
                    </div>
                </div>
            </div>

            <div class="faq-actions">
                <a href="<?php echo e(SITE_URL); ?>/contact-us/" class="btn-primary"><i class="fas fa-headset"></i> <?php echo e(__('mskeys_faq_cta_ticket')); ?></a>
                <a href="<?php echo e(SITE_URL); ?>/faq" class="btn-secondary"><?php echo e(__('mskeys_faq_cta_browse')); ?> <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </section>

    <!-- ═══════════════ WHY CHOOSE US ═══════════════ -->
    <section class="why-us reveal">
        <div class="container">
            <div class="why-us-layout">
                <div class="why-us-intro">
                    <div class="section-tag"><?php echo e(__('mskeys_whyus_tag')); ?></div>
                    <h2 class="why-us-title"><?php echo e(__('mskeys_whyus_title')); ?></h2>
                    <p class="why-us-desc"><?php echo e(__('mskeys_whyus_desc')); ?></p>
                    <a href="<?php echo e(SITE_URL); ?>/contact-us/" class="btn-primary"><?php echo e(__('mskeys_whyus_cta')); ?> <i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="why-us-grid">
                    <div class="why-us-card">
                        <div class="why-us-card-icon"><i class="fas fa-bolt"></i></div>
                        <h4><?php echo e(__('mskeys_whyus_card1_title')); ?></h4>
                        <p><?php echo e(__('mskeys_whyus_card1_desc')); ?></p>
                    </div>
                    <div class="why-us-card">
                        <div class="why-us-card-icon icon-green"><i class="fas fa-certificate"></i></div>
                        <h4><?php echo e(__('mskeys_whyus_card2_title')); ?></h4>
                        <p><?php echo e(__('mskeys_whyus_card2_desc')); ?></p>
                    </div>
                    <div class="why-us-card">
                        <div class="why-us-card-icon icon-purple"><i class="fas fa-tags"></i></div>
                        <h4><?php echo e(__('mskeys_whyus_card3_title')); ?></h4>
                        <p><?php echo e(__('mskeys_whyus_card3_desc')); ?></p>
                    </div>
                    <div class="why-us-card">
                        <div class="why-us-card-icon icon-amber"><i class="fas fa-headset"></i></div>
                        <h4><?php echo e(__('mskeys_whyus_card4_title')); ?></h4>
                        <p><?php echo e(__('mskeys_whyus_card4_desc')); ?></p>
                    </div>
                    <div class="why-us-card">
                        <div class="why-us-card-icon icon-green"><i class="fas fa-headset"></i></div>
                        <h4><?php echo e(__('mskeys_whyus_card5_title')); ?></h4>
                        <p><?php echo e(__('mskeys_whyus_card5_desc')); ?></p>
                    </div>
                    <div class="why-us-card">
                        <div class="why-us-card-icon icon-purple"><i class="fas fa-sync-alt"></i></div>
                        <h4><?php echo e(__('mskeys_whyus_card6_title')); ?></h4>
                        <p><?php echo e(__('mskeys_whyus_card6_desc')); ?></p>
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
                <div class="promo-cta-icon"><i class="fas fa-key"></i></div>
                <h2><?php echo e(__('mskeys_cta_title')); ?></h2>
                <p><?php echo e(__('mskeys_cta_desc')); ?></p>
                <a href="<?php echo e(SITE_URL); ?>/contact-us/" class="btn-primary"><?php echo e(__('mskeys_cta_button')); ?> <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
