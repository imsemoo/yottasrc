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
                        <a href="<?php echo e(SITE_URL); ?>/">Home</a>
                        <i class="fas fa-chevron-right"></i>
                        <a href="<?php echo e(SITE_URL); ?>/cpanel-reseller/">Reseller</a>
                        <i class="fas fa-chevron-right"></i>
                        <span>Alpha Reseller</span>
                    </div>
                    <h1>Alpha Reseller — <span class="highlight">Enterprise Hosting Hierarchy</span></h1>
                    <p class="page-hero-desc">
                        The highest reseller tier available. Command a full three-tier hierarchy — create Master Resellers, Resellers, and cPanel accounts from a single dashboard. Built for enterprise hosting companies that need unlimited scale.
                    </p>
                    <div class="page-hero-ctas">
                        <a href="#plans" class="btn-primary">View Plans <i class="fas fa-arrow-down"></i></a>
                        <a href="<?php echo e(SITE_URL); ?>/contact-us/" class="btn-secondary"><i class="fas fa-headset"></i> Talk to Sales</a>
                    </div>
                    <div class="page-hero-badges">
                        <div class="hero-badge-item"><i class="fas fa-check"></i> Full Reseller Hierarchy</div>
                        <div class="hero-badge-item"><i class="fas fa-check"></i> Unlimited Reseller Tiers</div>
                        <div class="hero-badge-item"><i class="fas fa-check"></i> Enterprise White-Label</div>
                        <div class="hero-badge-item"><i class="fas fa-check"></i> 20+ Locations</div>
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
            <span class="partners-label">Powered By</span>
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
                <div class="section-tag">Pricing</div>
                <h2>Alpha Reseller plans</h2>
                <p>Three-tier hosting management starting from €16.99 EUR / mo. Same price on renewal.</p>
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
                            <div class="plan-target">For hosting startups</div>
                            <div class="plan-price">
                                <span class="old-price">€28.32</span>
                                <span class="current-price"><span class="currency">€</span><span class="amount">16.99</span><span class="period">EUR / mo</span></span>
                            </div>
                            <div class="plan-renewal"><i class="fas fa-check"></i> Same price on renewal</div>
                            <button class="plan-cta" data-href="<?php echo e(CP_URL); ?>/order/alpha-reseller-cpanel/alpha-starter">Choose Plan</button>
                            <div class="plan-resources">
                                <div class="plan-res"><i class="fas fa-hdd"></i><span class="res-val">50 GB</span><span class="res-label">NVMe SSD</span></div>
                                <div class="plan-res"><i class="fas fa-wifi"></i><span class="res-val">2 TB</span><span class="res-label">Bandwidth</span></div>
                                <div class="plan-res"><i class="fas fa-project-diagram"></i><span class="res-val">Unlimited</span><span class="res-label">Master + Reseller</span></div>
                                <div class="plan-res"><i class="fas fa-database"></i><span class="res-val">50 GB</span><span class="res-label">MySQL Disk</span></div>
                            </div>
                            <div class="plan-divider"><span>Included</span></div>
                            <ul class="plan-features">
                                <li><i class="fas fa-gem"></i> Create Master Resellers</li>
                                <li><i class="fas fa-sitemap"></i> Create Reseller Accounts</li>
                                <li><i class="fas fa-user"></i> Create cPanel Accounts</li>
                                <li><i class="fas fa-lock"></i> Free SSL &amp; Daily Backups</li>
                                <li><i class="fas fa-palette"></i> White-Label at All Tiers</li>
                                <li><i class="fas fa-bolt"></i> LiteSpeed + CloudLinux</li>
                                <li><i class="fas fa-map-marker-alt"></i> 20+ Global Locations</li>
                            </ul>
                        </div></div>

                        <!-- Alpha Essential -->
                        <div class="swiper-slide"><div class="plan-card">
                            <div class="plan-head">
                                <div class="plan-name">Alpha Essential</div>
                                <span class="plan-save">Save 35%</span>
                            </div>
                            <div class="plan-target">For small agencies</div>
                            <div class="plan-price">
                                <span class="old-price">€33.83</span>
                                <span class="current-price"><span class="currency">€</span><span class="amount">21.99</span><span class="period">EUR / mo</span></span>
                            </div>
                            <div class="plan-renewal"><i class="fas fa-check"></i> Same price on renewal</div>
                            <button class="plan-cta" data-href="<?php echo e(CP_URL); ?>/order/alpha-reseller-cpanel/alpha-essential">Choose Plan</button>
                            <div class="plan-resources">
                                <div class="plan-res"><i class="fas fa-hdd"></i><span class="res-val">80 GB</span><span class="res-label">NVMe SSD</span></div>
                                <div class="plan-res"><i class="fas fa-wifi"></i><span class="res-val">3 TB</span><span class="res-label">Bandwidth</span></div>
                                <div class="plan-res"><i class="fas fa-project-diagram"></i><span class="res-val">Unlimited</span><span class="res-label">Master + Reseller</span></div>
                                <div class="plan-res"><i class="fas fa-database"></i><span class="res-val">80 GB</span><span class="res-label">MySQL Disk</span></div>
                            </div>
                            <div class="plan-divider"><span>Included</span></div>
                            <ul class="plan-features">
                                <li><i class="fas fa-gem"></i> Create Master Resellers</li>
                                <li><i class="fas fa-sitemap"></i> Create Reseller Accounts</li>
                                <li><i class="fas fa-user"></i> Create cPanel Accounts</li>
                                <li><i class="fas fa-lock"></i> Free SSL &amp; Daily Backups</li>
                                <li><i class="fas fa-palette"></i> White-Label at All Tiers</li>
                                <li><i class="fas fa-bolt"></i> LiteSpeed + CloudLinux</li>
                                <li><i class="fas fa-map-marker-alt"></i> 20+ Global Locations</li>
                            </ul>
                        </div></div>

                        <!-- Alpha Pro (Popular) -->
                        <div class="swiper-slide"><div class="plan-card popular">
                            <div class="plan-badge">Most Popular</div>
                            <div class="plan-head">
                                <div class="plan-name">Alpha Pro</div>
                                <span class="plan-save">Save 35%</span>
                            </div>
                            <div class="plan-target">For growing hosting networks</div>
                            <div class="plan-price">
                                <span class="old-price">€39.98</span>
                                <span class="current-price"><span class="currency">€</span><span class="amount">25.99</span><span class="period">EUR / mo</span></span>
                            </div>
                            <div class="plan-renewal"><i class="fas fa-check"></i> Same price on renewal</div>
                            <button class="plan-cta" data-href="<?php echo e(CP_URL); ?>/order/alpha-reseller-cpanel/alpha-pro">Choose Plan</button>
                            <div class="plan-resources">
                                <div class="plan-res"><i class="fas fa-hdd"></i><span class="res-val">120 GB</span><span class="res-label">NVMe SSD</span></div>
                                <div class="plan-res"><i class="fas fa-wifi"></i><span class="res-val">4 TB</span><span class="res-label">Bandwidth</span></div>
                                <div class="plan-res"><i class="fas fa-project-diagram"></i><span class="res-val">Unlimited</span><span class="res-label">Master + Reseller</span></div>
                                <div class="plan-res"><i class="fas fa-database"></i><span class="res-val">120 GB</span><span class="res-label">MySQL Disk</span></div>
                            </div>
                            <div class="plan-divider"><span>Included</span></div>
                            <ul class="plan-features">
                                <li><i class="fas fa-gem"></i> Create Master Resellers</li>
                                <li><i class="fas fa-sitemap"></i> Create Reseller Accounts</li>
                                <li><i class="fas fa-user"></i> Create cPanel Accounts</li>
                                <li><i class="fas fa-lock"></i> Free SSL &amp; Daily Backups</li>
                                <li><i class="fas fa-palette"></i> White-Label at All Tiers</li>
                                <li><i class="fas fa-bolt"></i> LiteSpeed + CloudLinux</li>
                                <li><i class="fas fa-map-marker-alt"></i> 20+ Global Locations</li>
                            </ul>
                        </div></div>

                        <!-- Alpha Advanced -->
                        <div class="swiper-slide"><div class="plan-card">
                            <div class="plan-head">
                                <div class="plan-name">Alpha Advanced</div>
                                <span class="plan-save">Save 30%</span>
                            </div>
                            <div class="plan-target">For enterprise hosting companies</div>
                            <div class="plan-price">
                                <span class="old-price">€68.56</span>
                                <span class="current-price"><span class="currency">€</span><span class="amount">47.99</span><span class="period">EUR / mo</span></span>
                            </div>
                            <div class="plan-renewal"><i class="fas fa-check"></i> Same price on renewal</div>
                            <button class="plan-cta" data-href="<?php echo e(CP_URL); ?>/order/alpha-reseller-cpanel/alpha-advanced">Choose Plan</button>
                            <div class="plan-resources">
                                <div class="plan-res"><i class="fas fa-hdd"></i><span class="res-val">250 GB</span><span class="res-label">NVMe SSD</span></div>
                                <div class="plan-res"><i class="fas fa-wifi"></i><span class="res-val">Unlimited</span><span class="res-label">Bandwidth</span></div>
                                <div class="plan-res"><i class="fas fa-project-diagram"></i><span class="res-val">Unlimited</span><span class="res-label">Master + Reseller</span></div>
                                <div class="plan-res"><i class="fas fa-database"></i><span class="res-val">250 GB</span><span class="res-label">MySQL Disk</span></div>
                            </div>
                            <div class="plan-divider"><span>Included</span></div>
                            <ul class="plan-features">
                                <li><i class="fas fa-gem"></i> Create Master Resellers</li>
                                <li><i class="fas fa-sitemap"></i> Create Reseller Accounts</li>
                                <li><i class="fas fa-user"></i> Create cPanel Accounts</li>
                                <li><i class="fas fa-lock"></i> Free SSL &amp; Daily Backups</li>
                                <li><i class="fas fa-palette"></i> White-Label at All Tiers</li>
                                <li><i class="fas fa-bolt"></i> LiteSpeed + CloudLinux</li>
                                <li><i class="fas fa-map-marker-alt"></i> 20+ Global Locations</li>
                            </ul>
                        </div></div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>

            <div class="pricing-custom">
                <p>Need a custom setup? <a href="<?php echo e(SITE_URL); ?>/contact-us/">Contact our sales team</a> for tailored enterprise solutions. Extra disk at €0.15/GB.</p>
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
                            <strong>All packages include, unlimited of:</strong>
                            <span><i class="fas fa-envelope"></i> Emails &nbsp; <i class="fas fa-sign-out-alt"></i> FTP Accounts &nbsp; <i class="fas fa-database"></i> Databases &nbsp; <i class="fas fa-link"></i> Subdomains</span>
                        </div>
                    </div>
                    <div class="cpanel-includes-badges">
                        <span class="cpanel-badge cpanel-badge-label">Each cPanel has:</span>
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
                <div class="section-tag">Why Alpha</div>
                <h2>The highest tier of reseller hosting</h2>
                <p>Alpha Reseller gives you three-tier management — create Masters, Resellers, and cPanel accounts from a single dashboard.</p>
            </div>

            <div class="cp-benefits-grid">
                <div class="cp-security-card">
                    <div class="cp-security-icon"><i class="fas fa-gem"></i></div>
                    <h4>Three-Tier Hierarchy</h4>
                    <p>Create Master Resellers who create Resellers who create cPanel accounts. Ultimate scalability for hosting businesses.</p>
                </div>
                <div class="cp-security-card">
                    <div class="cp-security-icon icon-green"><i class="fas fa-building"></i></div>
                    <h4>Enterprise Scale</h4>
                    <p>Designed for established hosting companies that need to manage partners, affiliates, and sub-resellers.</p>
                </div>
                <div class="cp-security-card">
                    <div class="cp-security-icon icon-purple"><i class="fas fa-eye"></i></div>
                    <h4>Total Visibility</h4>
                    <p>See resources, accounts, and usage across every tier from your Alpha dashboard. Full oversight at every level.</p>
                </div>
                <div class="cp-security-card">
                    <div class="cp-security-icon icon-amber"><i class="fas fa-expand-arrows-alt"></i></div>
                    <h4>Unlimited Growth</h4>
                    <p>No caps on Masters or Resellers. Scale your hosting network without ever hitting a tier ceiling.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ BENTO FEATURES ═══════════════ -->
    <section class="bento-features reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag">Features</div>
                <h2>Enterprise-grade tools</h2>
                <p>Everything from the lower tiers, plus advanced multi-tier management and oversight.</p>
            </div>

            <div class="bento-grid">
                <div class="bento-card bento-lg">
                    <div class="bento-card-icon"><i class="fas fa-project-diagram"></i></div>
                    <h3>Three-Tier Management</h3>
                    <p>Create Master Reseller packages, each with their own limits for sub-resellers. Masters create Resellers who manage cPanel accounts — and you oversee it all from one dashboard.</p>
                    <div class="bento-metrics">
                        <div class="bento-metric">
                            <span class="bento-metric-val">Unlimited</span>
                            <span class="bento-metric-label">Master Accounts</span>
                        </div>
                        <div class="bento-metric">
                            <span class="bento-metric-val">3 Tiers</span>
                            <span class="bento-metric-label">of Management</span>
                        </div>
                    </div>
                </div>

                <div class="bento-card bento-lg bento-green">
                    <div class="bento-card-icon icon-green"><i class="fas fa-chart-bar"></i></div>
                    <h3>Full Resource Oversight</h3>
                    <p>Monitor disk, bandwidth, and account usage across all Masters, Resellers, and cPanel accounts simultaneously. Reallocate resources on the fly.</p>
                    <div class="bento-metrics">
                        <div class="bento-metric">
                            <span class="bento-metric-val">Scalable</span>
                            <span class="bento-metric-label">Disk Allocation</span>
                        </div>
                        <div class="bento-metric">
                            <span class="bento-metric-val">All Tiers</span>
                            <span class="bento-metric-label">Visible</span>
                        </div>
                    </div>
                </div>

                <div class="bento-card bento-sm">
                    <div class="bento-card-icon icon-purple"><i class="fas fa-lock"></i></div>
                    <h4>Free SSL Across All</h4>
                    <p>AutoSSL for every domain at every tier.</p>
                </div>
                <div class="bento-card bento-sm">
                    <div class="bento-card-icon icon-amber"><i class="fas fa-cloud-download-alt"></i></div>
                    <h4>JetBackup Included</h4>
                    <p>Automated daily backups for all tiers.</p>
                </div>
                <div class="bento-card bento-sm">
                    <div class="bento-card-icon"><i class="fas fa-bolt"></i></div>
                    <h4>LiteSpeed Enterprise</h4>
                    <p>Top-tier web server for every account.</p>
                </div>
                <div class="bento-card bento-sm">
                    <div class="bento-card-icon icon-green"><i class="fas fa-robot"></i></div>
                    <h4>Imunify360</h4>
                    <p>AI-powered security for the entire tree.</p>
                </div>
                <div class="bento-card bento-sm">
                    <div class="bento-card-icon icon-amber"><i class="fas fa-plug"></i></div>
                    <h4>WHMReseller Plugin</h4>
                    <p>Create and manage reseller accounts directly from WHM.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ RESELLER TIERS ═══════════════ -->
    <section class="rs-hierarchy reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag">Reseller Tiers</div>
                <h2>You're at the top</h2>
                <p>Alpha Reseller is the highest management tier — giving you control over the entire hierarchy.</p>
            </div>

            <div class="rs-tiers-grid">
                <div class="rs-tier-card">
                    <div class="rs-tier-icon"><i class="fas fa-user-tie"></i></div>
                    <span class="rs-tier-level">Level 1</span>
                    <h4>cPanel Reseller</h4>
                    <p>Create &amp; manage cPanel accounts for your clients. The entry-level tier for freelancers.</p>
                    <ul class="rs-tier-perks">
                        <li><i class="fas fa-check"></i> WHM Access</li>
                        <li><i class="fas fa-check"></i> Create cPanel Accounts</li>
                        <li><i class="fas fa-check"></i> White-Label Branding</li>
                    </ul>
                    <a href="<?php echo e(SITE_URL); ?>/cpanel-reseller/" class="rs-tier-link">Learn More <i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="rs-tier-card">
                    <div class="rs-tier-icon icon-green"><i class="fas fa-crown"></i></div>
                    <span class="rs-tier-level">Level 2</span>
                    <h4>Master Reseller</h4>
                    <p>Create Reseller accounts with their own WHM. Two-tier management for agencies.</p>
                    <ul class="rs-tier-perks">
                        <li><i class="fas fa-check"></i> Everything in Reseller</li>
                        <li><i class="fas fa-check"></i> Create Reseller Accounts</li>
                        <li><i class="fas fa-check"></i> Two-Tier Management</li>
                    </ul>
                    <a href="<?php echo e(SITE_URL); ?>/master-reseller/" class="rs-tier-link">Learn More <i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="rs-tier-card rs-tier-active">
                    <div class="rs-tier-badge">You are here</div>
                    <div class="rs-tier-icon icon-purple"><i class="fas fa-gem"></i></div>
                    <span class="rs-tier-level">Level 3 — Maximum</span>
                    <h4>Alpha Reseller</h4>
                    <p>Create Masters, Resellers, and cPanel accounts. Three-tier hierarchy — supreme control.</p>
                    <ul class="rs-tier-perks">
                        <li><i class="fas fa-check"></i> Everything in Master</li>
                        <li><i class="fas fa-check"></i> Create Master Accounts</li>
                        <li><i class="fas fa-check"></i> Three-Tier Hierarchy</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ GLOBAL INFRASTRUCTURE (compact) ═══════════════ -->
    <section class="dc-showcase dc-showcase-compact reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag">Global Infrastructure</div>
                <h2>Enterprise-grade infrastructure worldwide</h2>
                <p>All tiers in your hierarchy share the same enterprise hardware and global network.</p>
            </div>

            <div class="dc-strip-stats">
                <div class="dc-strip-stat"><i class="fas fa-server"></i> <strong>20+</strong> Locations</div>
                <div class="dc-strip-stat"><i class="fas fa-network-wired"></i> <strong>10 Gbit/s</strong> Network</div>
                <div class="dc-strip-stat"><i class="fas fa-globe"></i> <strong>4</strong> Continents</div>
                <div class="dc-strip-stat"><i class="fas fa-tachometer-alt"></i> <strong>&lt;30ms</strong> Latency</div>
            </div>

            <div class="dc-map-grid">
                <div class="dc-continent">
                    <div class="dc-continent-label"><i class="fas fa-globe-europe"></i> Europe <span class="dc-continent-count">9</span></div>
                    <div class="dc-continent-locs">
                        <a href="<?php echo e(SITE_URL); ?>/cheap-cpanel-finland-location/" class="dc-pin"><span class="fi fi-fi"></span> Finland</a>
                        <a href="<?php echo e(SITE_URL); ?>/cheap-cpanel-germany-location/" class="dc-pin"><span class="fi fi-de"></span> Germany</a>
                        <a href="<?php echo e(SITE_URL); ?>/cheap-cpanel-france-location/" class="dc-pin"><span class="fi fi-fr"></span> France</a>
                        <a href="<?php echo e(SITE_URL); ?>/cheap-cpanel-uk-location/" class="dc-pin"><span class="fi fi-gb"></span> UK</a>
                        <a href="<?php echo e(SITE_URL); ?>/cheap-cpanel-netherlands-location/" class="dc-pin"><span class="fi fi-nl"></span> Netherlands</a>
                        <a href="<?php echo e(SITE_URL); ?>/cheap-cpanel-romania-location/" class="dc-pin dc-pin-hq"><span class="fi fi-ro"></span> Romania <span class="dc-hq-badge">HQ</span></a>
                        <a href="<?php echo e(SITE_URL); ?>/cheap-cpanel-turkey-location/" class="dc-pin"><span class="fi fi-tr"></span> Turkey</a>
                        <a href="<?php echo e(SITE_URL); ?>/cheap-cpanel-poland-location/" class="dc-pin"><span class="fi fi-pl"></span> Poland</a>
                        <a href="<?php echo e(SITE_URL); ?>/cheap-cpanel-austria-location/" class="dc-pin"><span class="fi fi-at"></span> Austria</a>
                    </div>
                </div>
                <div class="dc-continent">
                    <div class="dc-continent-label"><i class="fas fa-globe-americas"></i> Americas <span class="dc-continent-count">2</span></div>
                    <div class="dc-continent-locs">
                        <a href="<?php echo e(SITE_URL); ?>/cheap-cpanel-usa-location/" class="dc-pin"><span class="fi fi-us"></span> USA</a>
                        <a href="<?php echo e(SITE_URL); ?>/cheap-cpanel-canada-location/" class="dc-pin"><span class="fi fi-ca"></span> Canada</a>
                    </div>
                </div>
                <div class="dc-continent">
                    <div class="dc-continent-label"><i class="fas fa-globe-asia"></i> Asia <span class="dc-continent-count">5</span></div>
                    <div class="dc-continent-locs">
                        <a href="<?php echo e(SITE_URL); ?>/cheap-cpanel-india-location/" class="dc-pin"><span class="fi fi-in"></span> India</a>
                        <a href="<?php echo e(SITE_URL); ?>/cheap-cpanel-singapore-location/" class="dc-pin"><span class="fi fi-sg"></span> Singapore</a>
                        <a href="<?php echo e(SITE_URL); ?>/cheap-cpanel-japan-location/" class="dc-pin"><span class="fi fi-jp"></span> Japan</a>
                        <a href="<?php echo e(SITE_URL); ?>/cheap-cpanel-hong-kong-location/" class="dc-pin"><span class="fi fi-hk"></span> Hong Kong</a>
                        <a href="<?php echo e(SITE_URL); ?>/cheap-cpanel-thailand-location/" class="dc-pin"><span class="fi fi-th"></span> Thailand</a>
                    </div>
                </div>
                <div class="dc-continent">
                    <div class="dc-continent-label"><i class="fas fa-globe"></i> Oceania <span class="dc-continent-count">1</span></div>
                    <div class="dc-continent-locs">
                        <a href="<?php echo e(SITE_URL); ?>/cheap-cpanel-australia-location/" class="dc-pin"><span class="fi fi-au"></span> Australia</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ FAQ ═══════════════ -->
    <section class="faq-section reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag">FAQ</div>
                <h2>Frequently asked questions</h2>
                <p>Can't find your answer? Open a support ticket — we respond in under 10 minutes.</p>
            </div>

            <div class="faq-layout">
                <div class="faq-tabs">
                    <button class="faq-tab active" data-faq-target="faq-general"><i class="fas fa-server"></i> General</button>
                    <button class="faq-tab" data-faq-target="faq-technical"><i class="fas fa-cogs"></i> Technical</button>
                    <button class="faq-tab" data-faq-target="faq-billing"><i class="fas fa-credit-card"></i> Billing</button>
                </div>

                <div class="faq-panels">
                    <div class="faq-panel active" id="faq-general">
                        <div class="faq-item"><button class="faq-question"><span>What is Alpha Reseller hosting?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>Alpha Reseller is the highest reseller tier. You can create Master Reseller accounts, regular Reseller accounts, and cPanel accounts — forming a three-tier management hierarchy. It's built for established hosting companies and large agencies.</p></div></div>
                        <div class="faq-item"><button class="faq-question"><span>How does the three-tier hierarchy work?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>You (Alpha) create Master Reseller accounts. Each Master creates Reseller accounts. Each Reseller creates cPanel accounts for their end-users. Every tier gets its own WHM and white-label branding.</p></div></div>
                        <div class="faq-item"><button class="faq-question"><span>Who is Alpha Reseller for?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>Alpha Reseller is ideal for hosting companies that want to offer reseller programs, large agencies managing partner networks, or businesses that need multi-tier white-label hosting under their brand.</p></div></div>
                        <div class="faq-item"><button class="faq-question"><span>Can I also create cPanel accounts directly?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>Yes. As an Alpha Reseller you can create accounts at any tier — Master, Reseller, or cPanel — directly from your dashboard.</p></div></div>
                    </div>

                    <div class="faq-panel" id="faq-technical">
                        <div class="faq-item"><button class="faq-question"><span>Does each tier get its own WHM?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>Yes. You, your Masters, and your Resellers each get their own WHM interface to manage accounts at their level. End-users get cPanel.</p></div></div>
                        <div class="faq-item"><button class="faq-question"><span>Can I set resource limits per Master Reseller?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>Absolutely. You define disk, bandwidth, and account limits for each Master package. Masters then distribute resources to their Resellers, who distribute to cPanel accounts.</p></div></div>
                        <div class="faq-item"><button class="faq-question"><span>Is the tech stack the same as lower tiers?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>Yes — LiteSpeed, CloudLinux, Imunify360, NVMe SSDs, and 10 Gbit/s networking. The only difference is the management hierarchy and resource allocation.</p></div></div>
                        <div class="faq-item"><button class="faq-question"><span>Can I migrate from another provider?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>Yes, we offer free migrations. Our team will transfer your entire hierarchy — Master, Reseller, and cPanel accounts — to our infrastructure.</p></div></div>
                    </div>

                    <div class="faq-panel" id="faq-billing">
                        <div class="faq-item"><button class="faq-question"><span>Does the price increase on renewal?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>No — same price on every renewal. No hidden fees or surprise increases.</p></div></div>
                        <div class="faq-item"><button class="faq-question"><span>Can I add more disk space?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>Yes, additional disk is available at €0.15/GB. Add it during checkout or anytime from your client area.</p></div></div>
                        <div class="faq-item"><button class="faq-question"><span>Is Alpha Reseller the highest tier?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>Yes, Alpha Reseller is the maximum tier. For even more resources or custom configurations, contact our sales team for a tailored enterprise solution.</p></div></div>
                        <div class="faq-item"><button class="faq-question"><span>What payment methods do you accept?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>We accept credit/debit cards, PayPal, cryptocurrency (Bitcoin, USDT, etc.), and 10+ other payment methods.</p></div></div>
                    </div>
                </div>
            </div>

            <div class="faq-actions">
                <a href="<?php echo e(SITE_URL); ?>/contact-us/" class="btn-primary"><i class="fas fa-headset"></i> Open a Ticket</a>
                <a href="<?php echo e(SITE_URL); ?>/faq" class="btn-secondary">Browse All FAQ <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </section>

    <!-- ═══════════════ WHY CHOOSE US ═══════════════ -->
    <section class="why-us reveal">
        <div class="container">
            <div class="why-us-layout">
                <div class="why-us-intro">
                    <div class="section-tag">Advantages</div>
                    <h2 class="why-us-title">Why Choose Us?</h2>
                    <p class="why-us-desc">Enterprise hosting companies choose YottaSrc Alpha Reseller for unmatched control and reliability.</p>
                    <a href="#plans" class="btn-primary">Get Started <i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="why-us-grid">
                    <div class="why-us-card">
                        <div class="why-us-card-icon"><i class="fas fa-headset"></i></div>
                        <h4>24/7 Priority Support</h4>
                        <p>Priority support for Alpha accounts — our fastest response channel.</p>
                    </div>
                    <div class="why-us-card">
                        <div class="why-us-card-icon icon-green"><i class="fas fa-tachometer-alt"></i></div>
                        <h4>Enterprise Performance</h4>
                        <p>LiteSpeed + NVMe SSDs deliver blazing speed across your entire hierarchy.</p>
                    </div>
                    <div class="why-us-card">
                        <div class="why-us-card-icon icon-purple"><i class="fas fa-shield-alt"></i></div>
                        <h4>Security at Every Tier</h4>
                        <p>Imunify360 + daily backups across Masters, Resellers, and cPanel accounts.</p>
                    </div>
                    <div class="why-us-card">
                        <div class="why-us-card-icon icon-amber"><i class="fas fa-globe"></i></div>
                        <h4>Global Data Centers</h4>
                        <p>20+ locations across 4 continents for worldwide low-latency performance.</p>
                    </div>
                    <div class="why-us-card">
                        <div class="why-us-card-icon icon-green"><i class="fas fa-tags"></i></div>
                        <h4>Maximum Margins</h4>
                        <p>Three tiers of markup opportunity with same-price renewal.</p>
                    </div>
                    <div class="why-us-card">
                        <div class="why-us-card-icon icon-purple"><i class="fas fa-project-diagram"></i></div>
                        <h4>Full Hierarchy Control</h4>
                        <p>Manage your entire hosting empire from a single Alpha dashboard.</p>
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
                <div class="promo-cta-icon"><i class="fas fa-gem"></i></div>
                <h2>Ready for the ultimate reseller tier?</h2>
                <p>Launch your Alpha Reseller empire from €16.99 EUR / mo. Three-tier management, unlimited growth potential.</p>
                <a href="#plans" class="btn-primary">View Plans <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
