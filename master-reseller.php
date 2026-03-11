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
                        <a href="<?php echo e(SITE_URL); ?>/">Home</a>
                        <i class="fas fa-chevron-right"></i>
                        <a href="<?php echo e(SITE_URL); ?>/cpanel-reseller/">Reseller</a>
                        <i class="fas fa-chevron-right"></i>
                        <span>Master Reseller</span>
                    </div>
                    <h1>Master Reseller — <span class="highlight">Scale Your Reseller Network</span></h1>
                    <p class="page-hero-desc">
                        Go beyond a single brand — create and manage multiple reseller accounts, each with their own WHM and client base. Master Reseller gives you two-tier control to build a hosting network that grows with your business.
                    </p>
                    <div class="page-hero-ctas">
                        <a href="#plans" class="btn-primary">View Plans <i class="fas fa-arrow-down"></i></a>
                        <a href="<?php echo e(SITE_URL); ?>/contact-us/" class="btn-secondary"><i class="fas fa-headset"></i> Talk to Sales</a>
                    </div>
                    <div class="page-hero-badges">
                        <div class="hero-badge-item"><i class="fas fa-check"></i> Create Reseller Accounts</div>
                        <div class="hero-badge-item"><i class="fas fa-check"></i> Two-Tier Management</div>
                        <div class="hero-badge-item"><i class="fas fa-check"></i> White-Label at Every Level</div>
                        <div class="hero-badge-item"><i class="fas fa-check"></i> 20+ Locations</div>
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
                <h2>Master Reseller plans</h2>
                <p>Two-tier management starting from €11.99 EUR / mo. Same price on renewal — no surprises.</p>
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
                            <div class="plan-target">For new hosting businesses</div>
                            <div class="plan-price">
                                <span class="old-price">€19.99</span>
                                <span class="current-price"><span class="currency">€</span><span class="amount">11.99</span><span class="period">EUR / mo</span></span>
                            </div>
                            <div class="plan-renewal"><i class="fas fa-check"></i> Same price on renewal</div>
                            <button class="plan-cta" data-href="<?php echo e(CP_URL); ?>/order/master-reseller-cpanel/master-starter">Choose Plan</button>
                            <div class="plan-resources">
                                <div class="plan-res"><i class="fas fa-hdd"></i><span class="res-val">50 GB</span><span class="res-label">NVMe SSD</span></div>
                                <div class="plan-res"><i class="fas fa-wifi"></i><span class="res-val">1.5 TB</span><span class="res-label">Bandwidth</span></div>
                                <div class="plan-res"><i class="fas fa-sitemap"></i><span class="res-val">Unlimited</span><span class="res-label">Reseller Accounts</span></div>
                                <div class="plan-res"><i class="fas fa-database"></i><span class="res-val">50 GB</span><span class="res-label">MySQL Disk</span></div>
                            </div>
                            <div class="plan-divider"><span>Included</span></div>
                            <ul class="plan-features">
                                <li><i class="fas fa-sitemap"></i> Create Reseller Accounts</li>
                                <li><i class="fas fa-users-cog"></i> Each Reseller gets WHM</li>
                                <li><i class="fas fa-lock"></i> Free SSL &amp; Daily Backups</li>
                                <li><i class="fas fa-palette"></i> White-Label Branding</li>
                                <li><i class="fas fa-bolt"></i> LiteSpeed + CloudLinux</li>
                                <li><i class="fas fa-shield-alt"></i> Imunify360 Security</li>
                                <li><i class="fas fa-map-marker-alt"></i> 20+ Global Locations</li>
                            </ul>
                        </div></div>

                        <!-- Master Essential -->
                        <div class="swiper-slide"><div class="plan-card">
                            <div class="plan-head">
                                <div class="plan-name">Master Essential</div>
                                <span class="plan-save">Save 35%</span>
                            </div>
                            <div class="plan-target">For small agencies</div>
                            <div class="plan-price">
                                <span class="old-price">€25.99</span>
                                <span class="current-price"><span class="currency">€</span><span class="amount">16.99</span><span class="period">EUR / mo</span></span>
                            </div>
                            <div class="plan-renewal"><i class="fas fa-check"></i> Same price on renewal</div>
                            <button class="plan-cta" data-href="<?php echo e(CP_URL); ?>/order/master-reseller-cpanel/master-essential">Choose Plan</button>
                            <div class="plan-resources">
                                <div class="plan-res"><i class="fas fa-hdd"></i><span class="res-val">75 GB</span><span class="res-label">NVMe SSD</span></div>
                                <div class="plan-res"><i class="fas fa-wifi"></i><span class="res-val">2 TB</span><span class="res-label">Bandwidth</span></div>
                                <div class="plan-res"><i class="fas fa-sitemap"></i><span class="res-val">Unlimited</span><span class="res-label">Reseller Accounts</span></div>
                                <div class="plan-res"><i class="fas fa-database"></i><span class="res-val">75 GB</span><span class="res-label">MySQL Disk</span></div>
                            </div>
                            <div class="plan-divider"><span>Included</span></div>
                            <ul class="plan-features">
                                <li><i class="fas fa-sitemap"></i> Create Reseller Accounts</li>
                                <li><i class="fas fa-users-cog"></i> Each Reseller gets WHM</li>
                                <li><i class="fas fa-lock"></i> Free SSL &amp; Daily Backups</li>
                                <li><i class="fas fa-palette"></i> White-Label Branding</li>
                                <li><i class="fas fa-bolt"></i> LiteSpeed + CloudLinux</li>
                                <li><i class="fas fa-shield-alt"></i> Imunify360 Security</li>
                                <li><i class="fas fa-map-marker-alt"></i> 20+ Global Locations</li>
                            </ul>
                        </div></div>

                        <!-- Master Pro (Popular) -->
                        <div class="swiper-slide"><div class="plan-card popular">
                            <div class="plan-badge">Most Popular</div>
                            <div class="plan-head">
                                <div class="plan-name">Master Pro</div>
                                <span class="plan-save">Save 40%</span>
                            </div>
                            <div class="plan-target">For growing hosting networks</div>
                            <div class="plan-price">
                                <span class="old-price">€35.99</span>
                                <span class="current-price"><span class="currency">€</span><span class="amount">21.59</span><span class="period">EUR / mo</span></span>
                            </div>
                            <div class="plan-renewal"><i class="fas fa-check"></i> Same price on renewal</div>
                            <button class="plan-cta" data-href="<?php echo e(CP_URL); ?>/order/master-reseller-cpanel/master-pro">Choose Plan</button>
                            <div class="plan-resources">
                                <div class="plan-res"><i class="fas fa-hdd"></i><span class="res-val">100 GB</span><span class="res-label">NVMe SSD</span></div>
                                <div class="plan-res"><i class="fas fa-wifi"></i><span class="res-val">3 TB</span><span class="res-label">Bandwidth</span></div>
                                <div class="plan-res"><i class="fas fa-sitemap"></i><span class="res-val">Unlimited</span><span class="res-label">Reseller Accounts</span></div>
                                <div class="plan-res"><i class="fas fa-database"></i><span class="res-val">100 GB</span><span class="res-label">MySQL Disk</span></div>
                            </div>
                            <div class="plan-divider"><span>Included</span></div>
                            <ul class="plan-features">
                                <li><i class="fas fa-sitemap"></i> Create Reseller Accounts</li>
                                <li><i class="fas fa-users-cog"></i> Each Reseller gets WHM</li>
                                <li><i class="fas fa-lock"></i> Free SSL &amp; Daily Backups</li>
                                <li><i class="fas fa-palette"></i> White-Label Branding</li>
                                <li><i class="fas fa-bolt"></i> LiteSpeed + CloudLinux</li>
                                <li><i class="fas fa-shield-alt"></i> Imunify360 Security</li>
                                <li><i class="fas fa-map-marker-alt"></i> 20+ Global Locations</li>
                            </ul>
                        </div></div>

                        <!-- Master Advanced -->
                        <div class="swiper-slide"><div class="plan-card">
                            <div class="plan-head">
                                <div class="plan-name">Master Advanced</div>
                                <span class="plan-save">Save 30%</span>
                            </div>
                            <div class="plan-target">For established companies</div>
                            <div class="plan-price">
                                <span class="old-price">€57.13</span>
                                <span class="current-price"><span class="currency">€</span><span class="amount">39.99</span><span class="period">EUR / mo</span></span>
                            </div>
                            <div class="plan-renewal"><i class="fas fa-check"></i> Same price on renewal</div>
                            <button class="plan-cta" data-href="<?php echo e(CP_URL); ?>/order/master-reseller-cpanel/master-advanced">Choose Plan</button>
                            <div class="plan-resources">
                                <div class="plan-res"><i class="fas fa-hdd"></i><span class="res-val">200 GB</span><span class="res-label">NVMe SSD</span></div>
                                <div class="plan-res"><i class="fas fa-wifi"></i><span class="res-val">Unlimited</span><span class="res-label">Bandwidth</span></div>
                                <div class="plan-res"><i class="fas fa-sitemap"></i><span class="res-val">Unlimited</span><span class="res-label">Reseller Accounts</span></div>
                                <div class="plan-res"><i class="fas fa-database"></i><span class="res-val">200 GB</span><span class="res-label">MySQL Disk</span></div>
                            </div>
                            <div class="plan-divider"><span>Included</span></div>
                            <ul class="plan-features">
                                <li><i class="fas fa-sitemap"></i> Create Reseller Accounts</li>
                                <li><i class="fas fa-users-cog"></i> Each Reseller gets WHM</li>
                                <li><i class="fas fa-lock"></i> Free SSL &amp; Daily Backups</li>
                                <li><i class="fas fa-palette"></i> White-Label Branding</li>
                                <li><i class="fas fa-bolt"></i> LiteSpeed + CloudLinux</li>
                                <li><i class="fas fa-shield-alt"></i> Imunify360 Security</li>
                                <li><i class="fas fa-map-marker-alt"></i> 20+ Global Locations</li>
                            </ul>
                        </div></div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>

            <div class="pricing-custom">
                <p>Need the highest tier? Explore <a href="<?php echo e(SITE_URL); ?>/alpha-reseller/">Alpha Reseller</a> to create Masters, Resellers, and cPanel accounts. Extra disk at €0.15/GB.</p>
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

    <!-- ═══════════════ WHY MASTER RESELLER ═══════════════ -->
    <section class="cp-benefits reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag">Why Master Reseller</div>
                <h2>Scale beyond a single reseller</h2>
                <p>Master Reseller unlocks two-tier management — create your own resellers who manage their own clients.</p>
            </div>

            <div class="cp-benefits-grid">
                <div class="cp-security-card">
                    <div class="cp-security-icon"><i class="fas fa-sitemap"></i></div>
                    <h4>Two-Tier Management</h4>
                    <p>Create Reseller accounts that create their own cPanel accounts. Built for agencies and hosting companies.</p>
                </div>
                <div class="cp-security-card">
                    <div class="cp-security-icon icon-green"><i class="fas fa-users"></i></div>
                    <h4>Unlimited Sub-Resellers</h4>
                    <p>No cap on how many reseller accounts you can create. Scale your hosting network without limits.</p>
                </div>
                <div class="cp-security-card">
                    <div class="cp-security-icon icon-purple"><i class="fas fa-palette"></i></div>
                    <h4>Full White-Label</h4>
                    <p>Every tier is white-labeled — your resellers get their own branding, and their clients see their brand.</p>
                </div>
                <div class="cp-security-card">
                    <div class="cp-security-icon icon-amber"><i class="fas fa-chart-line"></i></div>
                    <h4>Resource Oversight</h4>
                    <p>Monitor and allocate resources across all resellers. See disk, bandwidth, and account usage at a glance.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ BENTO FEATURES ═══════════════ -->
    <section class="bento-features reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag">Features</div>
                <h2>Master-level control &amp; tools</h2>
                <p>All the tools you need to run a multi-tier hosting business from a single dashboard.</p>
            </div>

            <div class="bento-grid">
                <div class="bento-card bento-lg bento-featured">
                    <div class="bento-card-icon"><i class="fas fa-layer-group"></i></div>
                    <h3>Tiered Account Management</h3>
                    <p>Create reseller packages with preset limits. Each reseller gets their own WHM to manage their clients independently — while you maintain oversight of all resources.</p>
                    <div class="bento-metrics">
                        <div class="bento-metric">
                            <span class="bento-metric-val">Unlimited</span>
                            <span class="bento-metric-label">Reseller Accounts</span>
                        </div>
                        <div class="bento-metric">
                            <span class="bento-metric-val">Full WHM</span>
                            <span class="bento-metric-label">For Each Reseller</span>
                        </div>
                    </div>
                </div>

                <div class="bento-card bento-lg bento-green">
                    <div class="bento-card-icon icon-green"><i class="fas fa-chart-pie"></i></div>
                    <h3>Resource Distribution</h3>
                    <p>Allocate disk space, bandwidth, and cPanel account limits to each reseller. Track usage in real time. Overselling supported for optimal resource utilization.</p>
                    <div class="bento-metrics">
                        <div class="bento-metric">
                            <span class="bento-metric-val">Scalable</span>
                            <span class="bento-metric-label">Disk Allocation</span>
                        </div>
                        <div class="bento-metric">
                            <span class="bento-metric-val">Real-Time</span>
                            <span class="bento-metric-label">Usage Monitoring</span>
                        </div>
                    </div>
                </div>

                <div class="bento-card bento-sm">
                    <div class="bento-card-icon icon-purple"><i class="fas fa-lock"></i></div>
                    <h4>Free SSL for All</h4>
                    <p>AutoSSL for every domain across all tiers.</p>
                </div>
                <div class="bento-card bento-sm">
                    <div class="bento-card-icon icon-amber"><i class="fas fa-cloud-download-alt"></i></div>
                    <h4>JetBackup Included</h4>
                    <p>Automated daily backups for all accounts.</p>
                </div>
                <div class="bento-card bento-sm">
                    <div class="bento-card-icon"><i class="fas fa-bolt"></i></div>
                    <h4>LiteSpeed Enterprise</h4>
                    <p>Fastest web server for all client sites.</p>
                </div>
                <div class="bento-card bento-sm">
                    <div class="bento-card-icon icon-green"><i class="fas fa-robot"></i></div>
                    <h4>Imunify360</h4>
                    <p>AI security across every account tier.</p>
                </div>
                <div class="bento-card bento-sm">
                    <div class="bento-card-icon icon-amber"><i class="fas fa-plug"></i></div>
                    <h4>WHMReseller Plugin</h4>
                    <p>Create and manage reseller accounts directly from WHM.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ WHY MASTER IS POWERFUL ═══════════════ -->
    <section class="ms-power reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag">Advantages</div>
                <h2>Why Master Reseller is powerful</h2>
                <p>Go beyond basic reselling. Master Reseller gives you the tools to build a real hosting company.</p>
            </div>

            <div class="cp-benefits-grid">
                <div class="cp-security-card">
                    <div class="cp-security-icon"><i class="fas fa-users-cog"></i></div>
                    <h4>Create Unlimited Reseller Accounts</h4>
                    <p>Each reseller you create gets their own WHM dashboard to manage clients — your own white-label hosting network.</p>
                </div>
                <div class="cp-security-card">
                    <div class="cp-security-icon icon-green"><i class="fas fa-building"></i></div>
                    <h4>Manage Multiple Businesses</h4>
                    <p>Run separate hosting brands under one Master account. Each brand can have its own pricing, branding, and client base.</p>
                </div>
                <div class="cp-security-card">
                    <div class="cp-security-icon icon-purple"><i class="fas fa-terminal"></i></div>
                    <h4>Advanced WHM Privileges</h4>
                    <p>Full WHM2 access with resource allocation, package management, DNS clustering, and server-level configuration.</p>
                </div>
                <div class="cp-security-card">
                    <div class="cp-security-icon icon-amber"><i class="fas fa-palette"></i></div>
                    <h4>Full White-Label Control</h4>
                    <p>Custom nameservers, custom cPanel themes, branded login pages — your resellers and clients never see YottaSrc.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ HIERARCHY EXPLANATION ═══════════════ -->
    <section class="rs-hierarchy reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag">Reseller Tiers</div>
                <h2>Your position in the hierarchy</h2>
                <p>Master Reseller sits at the second tier — giving you control over resellers and their clients alike.</p>
            </div>

            <div class="rs-tiers-grid">
                <div class="rs-tier-card">
                    <div class="rs-tier-icon"><i class="fas fa-user-tie"></i></div>
                    <span class="rs-tier-level">Level 1</span>
                    <h4>cPanel Reseller</h4>
                    <p>Create &amp; manage cPanel accounts for your clients. Great for freelancers and getting started.</p>
                    <ul class="rs-tier-perks">
                        <li><i class="fas fa-check"></i> WHM Access</li>
                        <li><i class="fas fa-check"></i> Create cPanel Accounts</li>
                        <li><i class="fas fa-check"></i> White-Label Branding</li>
                    </ul>
                    <a href="<?php echo e(SITE_URL); ?>/cpanel-reseller/" class="rs-tier-link">Learn More <i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="rs-tier-card rs-tier-active">
                    <div class="rs-tier-badge">You are here</div>
                    <div class="rs-tier-icon icon-green"><i class="fas fa-crown"></i></div>
                    <span class="rs-tier-level">Level 2</span>
                    <h4>Master Reseller</h4>
                    <p>Create reseller accounts that in turn create their own cPanel accounts. Two-tier management.</p>
                    <ul class="rs-tier-perks">
                        <li><i class="fas fa-check"></i> Everything in Reseller</li>
                        <li><i class="fas fa-check"></i> Create Reseller Accounts</li>
                        <li><i class="fas fa-check"></i> Multi-Tier Management</li>
                    </ul>
                </div>
                <div class="rs-tier-card">
                    <div class="rs-tier-icon icon-purple"><i class="fas fa-gem"></i></div>
                    <span class="rs-tier-level">Level 3</span>
                    <h4>Alpha Reseller</h4>
                    <p>The highest tier — create Master, Reseller, and cPanel accounts. Full enterprise control.</p>
                    <ul class="rs-tier-perks">
                        <li><i class="fas fa-check"></i> Everything in Master</li>
                        <li><i class="fas fa-check"></i> Create Master Accounts</li>
                        <li><i class="fas fa-check"></i> Enterprise Scale</li>
                    </ul>
                    <a href="<?php echo e(SITE_URL); ?>/alpha-reseller/" class="rs-tier-link">Learn More <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ GLOBAL INFRASTRUCTURE (compact) ═══════════════ -->
    <section class="dc-showcase dc-showcase-compact reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag">Global Infrastructure</div>
                <h2>Deploy anywhere in the world</h2>
                <p>Your resellers choose from 20+ locations. Each server features enterprise hardware and low-latency networking.</p>
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
                        <div class="faq-item"><button class="faq-question"><span>What is Master Reseller hosting?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>Master Reseller hosting lets you create reseller accounts. Each reseller gets their own WHM and can create cPanel accounts for their clients. It's a two-tier structure ideal for hosting companies and agencies.</p></div></div>
                        <div class="faq-item"><button class="faq-question"><span>How is Master Reseller different from regular Reseller?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>A regular Reseller creates cPanel accounts for end-users. A Master Reseller creates Reseller accounts — who then create cPanel accounts for their own clients. It adds one extra management tier.</p></div></div>
                        <div class="faq-item"><button class="faq-question"><span>Can my resellers see that I'm using YottaSrc?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>No. White-label branding is included at every tier. Your resellers and their clients see only the brand configured by each tier above them.</p></div></div>
                        <div class="faq-item"><button class="faq-question"><span>Can I create both Reseller and cPanel accounts?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>Yes, as a Master Reseller you can create both Reseller accounts and regular cPanel accounts directly from your WHM dashboard.</p></div></div>
                    </div>

                    <div class="faq-panel" id="faq-technical">
                        <div class="faq-item"><button class="faq-question"><span>Do my resellers get their own WHM?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>Yes, every reseller account you create gets full WHM access to manage their own cPanel accounts, set packages, and configure nameservers.</p></div></div>
                        <div class="faq-item"><button class="faq-question"><span>Can I set resource limits per reseller?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>Absolutely. You define disk, bandwidth, and cPanel account limits for each reseller package. Resellers can then distribute those resources among their own clients.</p></div></div>
                        <div class="faq-item"><button class="faq-question"><span>Are the server specs the same across all tiers?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>Yes — LiteSpeed, CloudLinux, Imunify360, NVMe SSDs, and 10 Gbit/s networking are included in every tier. The difference is in management level and allocated resources.</p></div></div>
                        <div class="faq-item"><button class="faq-question"><span>Can I oversell resources?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>Yes, overselling is supported. You can allocate more total resources to resellers than your plan's hard limit. Actual usage is still bounded by the plan.</p></div></div>
                    </div>

                    <div class="faq-panel" id="faq-billing">
                        <div class="faq-item"><button class="faq-question"><span>Does the price increase on renewal?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>Never. You pay the same price on renewal — no surprise increases, no hidden fees.</p></div></div>
                        <div class="faq-item"><button class="faq-question"><span>Can I add more disk space?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>Yes, additional disk is available at €0.15/GB. You can add it during checkout or anytime from your client area.</p></div></div>
                        <div class="faq-item"><button class="faq-question"><span>Can I upgrade to Alpha Reseller?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>Yes, you can upgrade to Alpha Reseller anytime. This gives you the ability to create Master, Reseller, and cPanel accounts — the highest management tier available.</p></div></div>
                        <div class="faq-item"><button class="faq-question"><span>What payment methods are accepted?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>We accept credit/debit cards, PayPal, cryptocurrency (Bitcoin, USDT, etc.), and 10+ other methods.</p></div></div>
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
                    <p class="why-us-desc">Hosting companies worldwide trust YottaSrc Master Reseller to power their multi-tier operations.</p>
                    <a href="#plans" class="btn-primary">Get Started <i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="why-us-grid">
                    <div class="why-us-card">
                        <div class="why-us-card-icon"><i class="fas fa-headset"></i></div>
                        <h4>24/7 Expert Support</h4>
                        <p>Dedicated support team available around the clock for you and your resellers.</p>
                    </div>
                    <div class="why-us-card">
                        <div class="why-us-card-icon icon-green"><i class="fas fa-tachometer-alt"></i></div>
                        <h4>Enterprise Performance</h4>
                        <p>LiteSpeed + NVMe SSDs deliver top-tier speed for all your reseller clients.</p>
                    </div>
                    <div class="why-us-card">
                        <div class="why-us-card-icon icon-purple"><i class="fas fa-shield-alt"></i></div>
                        <h4>Multi-Layer Security</h4>
                        <p>Imunify360, daily backups, and 99.9% uptime SLA protect every account.</p>
                    </div>
                    <div class="why-us-card">
                        <div class="why-us-card-icon icon-amber"><i class="fas fa-globe"></i></div>
                        <h4>Global Infrastructure</h4>
                        <p>20+ locations across 4 continents for worldwide low-latency hosting.</p>
                    </div>
                    <div class="why-us-card">
                        <div class="why-us-card-icon icon-green"><i class="fas fa-tags"></i></div>
                        <h4>Profitable Pricing</h4>
                        <p>Low base cost with same-price renewal lets you build healthy profit margins.</p>
                    </div>
                    <div class="why-us-card">
                        <div class="why-us-card-icon icon-purple"><i class="fas fa-level-up-alt"></i></div>
                        <h4>Upgrade to Alpha</h4>
                        <p>Scale to Alpha Reseller for three-tier management as your empire grows.</p>
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
                <div class="promo-cta-icon"><i class="fas fa-crown"></i></div>
                <h2>Ready to scale your hosting empire?</h2>
                <p>Start your Master Reseller business from €11.99 EUR / mo. Create unlimited reseller accounts, each with their own WHM.</p>
                <a href="#plans" class="btn-primary">View Plans <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
