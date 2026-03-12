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
                        <a href="<?php echo e(SITE_URL); ?>/">Home</a>
                        <i class="fas fa-chevron-right"></i>
                        <a href="<?php echo e(SITE_URL); ?>/cpanel-reseller/">Reseller</a>
                        <i class="fas fa-chevron-right"></i>
                        <span>cPanel Reseller</span>
                    </div>
                    <h1>cPanel Reseller — <span class="highlight">Launch Your Hosting Brand</span></h1>
                    <p class="page-hero-desc">
                        Start your own hosting company today. Create and manage client accounts under your own brand with WHM &amp; cPanel — custom plans, custom nameservers, and zero trace of YottaSrc. Powered by enterprise infrastructure across 20+ global locations.
                    </p>
                    <div class="page-hero-ctas">
                        <a href="#plans" class="btn-primary">View Plans <i class="fas fa-arrow-down"></i></a>
                        <a href="<?php echo e(SITE_URL); ?>/contact-us/" class="btn-secondary"><i class="fas fa-headset"></i> Talk to Sales</a>
                    </div>
                    <div class="page-hero-badges">
                        <div class="hero-badge-item"><i class="fas fa-check"></i> Your Brand, Your Clients</div>
                        <div class="hero-badge-item"><i class="fas fa-check"></i> WHM Control Panel</div>
                        <div class="hero-badge-item"><i class="fas fa-check"></i> White-Label Hosting</div>
                        <div class="hero-badge-item"><i class="fas fa-check"></i> 20+ Locations</div>
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

    <!-- ═══════════════ PRICING PLANS (reused from cPanel Hosting) ═══════════════ -->
    <section class="plans reveal" id="plans">
        <div class="container">
            <div class="section-header">
                <div class="section-tag">Pricing</div>
                <h2>cPanel Reseller plans</h2>
                <p>Start your hosting business with affordable reseller plans. Same price on renewal — no surprises.</p>
            </div>

            <div class="plans-panel active" data-tab="cpanel-reseller">
                <div class="swiper plans-swiper">
                    <div class="swiper-wrapper">
                        <!-- Starter -->
                        <div class="swiper-slide"><div class="plan-card">
                            <div class="plan-head"><div class="plan-name">Starter</div><span class="plan-save">Save 75%</span></div>
                            <div class="plan-target">Your first step in hosting</div>
                            <div class="plan-price">
                                <span class="old-price">€13.99</span>
                                <span class="current-price"><span class="currency">€</span><span class="amount">3.49</span><span class="period">EUR / mo</span></span>
                            </div>
                            <div class="plan-renewal"><i class="fas fa-check"></i> Same price on renewal</div>
                            <button class="plan-cta" data-href="<?php echo e(CP_URL); ?>/order/reseller-hosting/starter">Choose Plan</button>
                            <div class="plan-resources">
                                <div class="plan-res"><i class="fas fa-hdd"></i><span class="res-val">15 GB</span><span class="res-label">NVMe SSD</span></div>
                                <div class="plan-res"><i class="fas fa-wifi"></i><span class="res-val">Unlimited</span><span class="res-label">Bandwidth</span></div>
                                <div class="plan-res"><i class="fas fa-users"></i><span class="res-val">15</span><span class="res-label">cPanel Accounts</span></div>
                                <div class="plan-res"><i class="fas fa-database"></i><span class="res-val">15 GB</span><span class="res-label">MySQL Disk</span></div>
                            </div>
                            <div class="plan-divider"><span>Included</span></div>
                            <ul class="plan-features">
                                <li><i class="fas fa-users-cog"></i> Free WHM Control Panel</li>
                                <li><i class="fas fa-lock"></i> Free SSL &amp; Daily Backups</li>
                                <li><i class="fas fa-server"></i> Private Nameservers</li>
                                <li><i class="fas fa-palette"></i> White-Label Branding</li>
                                <li><i class="fas fa-bolt"></i> LiteSpeed + CloudLinux</li>
                                <li><i class="fas fa-shield-alt"></i> Imunify360 Security</li>
                                <li><i class="fas fa-map-marker-alt"></i> 15+ Global Locations</li>
                            </ul>
                        </div></div>

                        <!-- Essential (Popular) -->
                        <div class="swiper-slide"><div class="plan-card popular">
                            <div class="plan-badge">Most Popular</div>
                            <div class="plan-head"><div class="plan-name">Essential</div><span class="plan-save">Save 40%</span></div>
                            <div class="plan-target">Entry-level reseller</div>
                            <div class="plan-price">
                                <span class="old-price">€10.82</span>
                                <span class="current-price"><span class="currency">€</span><span class="amount">6.49</span><span class="period">EUR / mo</span></span>
                            </div>
                            <div class="plan-renewal"><i class="fas fa-check"></i> Same price on renewal</div>
                            <button class="plan-cta" data-href="<?php echo e(CP_URL); ?>/order/reseller-hosting/essential">Choose Plan</button>
                            <div class="plan-resources">
                                <div class="plan-res"><i class="fas fa-hdd"></i><span class="res-val">40 GB</span><span class="res-label">NVMe SSD</span></div>
                                <div class="plan-res"><i class="fas fa-wifi"></i><span class="res-val">Unlimited</span><span class="res-label">Bandwidth</span></div>
                                <div class="plan-res"><i class="fas fa-users"></i><span class="res-val">Unlimited</span><span class="res-label">cPanel Accounts</span></div>
                                <div class="plan-res"><i class="fas fa-database"></i><span class="res-val">40 GB</span><span class="res-label">MySQL Disk</span></div>
                            </div>
                            <div class="plan-divider"><span>Included</span></div>
                            <ul class="plan-features">
                                <li><i class="fas fa-users-cog"></i> Free WHM Control Panel</li>
                                <li><i class="fas fa-lock"></i> Free SSL &amp; Daily Backups</li>
                                <li><i class="fas fa-server"></i> Private Nameservers</li>
                                <li><i class="fas fa-palette"></i> White-Label Branding</li>
                                <li><i class="fas fa-bolt"></i> LiteSpeed + CloudLinux</li>
                                <li><i class="fas fa-shield-alt"></i> Imunify360 Security</li>
                                <li><i class="fas fa-map-marker-alt"></i> 15+ Global Locations</li>
                            </ul>
                        </div></div>

                        <!-- Advance -->
                        <div class="swiper-slide"><div class="plan-card">
                            <div class="plan-head"><div class="plan-name">Advance</div><span class="plan-save">Save 15%</span></div>
                            <div class="plan-target">Scalable performance</div>
                            <div class="plan-price">
                                <span class="old-price">€15.28</span>
                                <span class="current-price"><span class="currency">€</span><span class="amount">12.99</span><span class="period">EUR / mo</span></span>
                            </div>
                            <div class="plan-renewal"><i class="fas fa-check"></i> Same price on renewal</div>
                            <button class="plan-cta" data-href="<?php echo e(CP_URL); ?>/order/reseller-hosting/advance">Choose Plan</button>
                            <div class="plan-resources">
                                <div class="plan-res"><i class="fas fa-hdd"></i><span class="res-val">80 GB</span><span class="res-label">NVMe SSD</span></div>
                                <div class="plan-res"><i class="fas fa-wifi"></i><span class="res-val">Unlimited</span><span class="res-label">Bandwidth</span></div>
                                <div class="plan-res"><i class="fas fa-users"></i><span class="res-val">Unlimited</span><span class="res-label">cPanel Accounts</span></div>
                                <div class="plan-res"><i class="fas fa-database"></i><span class="res-val">80 GB</span><span class="res-label">MySQL Disk</span></div>
                            </div>
                            <div class="plan-divider"><span>Included</span></div>
                            <ul class="plan-features">
                                <li><i class="fas fa-users-cog"></i> Free WHM Control Panel</li>
                                <li><i class="fas fa-lock"></i> Free SSL &amp; Daily Backups</li>
                                <li><i class="fas fa-server"></i> Private Nameservers</li>
                                <li><i class="fas fa-palette"></i> White-Label Branding</li>
                                <li><i class="fas fa-bolt"></i> LiteSpeed + CloudLinux</li>
                                <li><i class="fas fa-shield-alt"></i> Imunify360 Security</li>
                                <li><i class="fas fa-map-marker-alt"></i> 15+ Global Locations</li>
                            </ul>
                        </div></div>

                        <!-- Pro -->
                        <div class="swiper-slide"><div class="plan-card">
                            <div class="plan-head"><div class="plan-name">Pro</div><span class="plan-save">Save 45%</span></div>
                            <div class="plan-target">High-performance hosting</div>
                            <div class="plan-price">
                                <span class="old-price">€43.62</span>
                                <span class="current-price"><span class="currency">€</span><span class="amount">23.99</span><span class="period">EUR / mo</span></span>
                            </div>
                            <div class="plan-renewal"><i class="fas fa-check"></i> Same price on renewal</div>
                            <button class="plan-cta" data-href="<?php echo e(CP_URL); ?>/order/reseller-hosting/pro">Choose Plan</button>
                            <div class="plan-resources">
                                <div class="plan-res"><i class="fas fa-hdd"></i><span class="res-val">120 GB</span><span class="res-label">NVMe SSD</span></div>
                                <div class="plan-res"><i class="fas fa-wifi"></i><span class="res-val">Unlimited</span><span class="res-label">Bandwidth</span></div>
                                <div class="plan-res"><i class="fas fa-users"></i><span class="res-val">Unlimited</span><span class="res-label">cPanel Accounts</span></div>
                                <div class="plan-res"><i class="fas fa-database"></i><span class="res-val">120 GB</span><span class="res-label">MySQL Disk</span></div>
                            </div>
                            <div class="plan-divider"><span>Included</span></div>
                            <ul class="plan-features">
                                <li><i class="fas fa-users-cog"></i> Free WHM Control Panel</li>
                                <li><i class="fas fa-lock"></i> Free SSL &amp; Daily Backups</li>
                                <li><i class="fas fa-server"></i> Private Nameservers</li>
                                <li><i class="fas fa-palette"></i> White-Label Branding</li>
                                <li><i class="fas fa-bolt"></i> LiteSpeed + CloudLinux</li>
                                <li><i class="fas fa-shield-alt"></i> Imunify360 Security</li>
                                <li><i class="fas fa-map-marker-alt"></i> 15+ Global Locations</li>
                            </ul>
                        </div></div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>

            <div class="pricing-custom">
                <p>Need more resources? Explore <a href="<?php echo e(SITE_URL); ?>/master-reseller/">Master Reseller</a> or <a href="<?php echo e(SITE_URL); ?>/alpha-reseller/">Alpha Reseller</a> for higher tiers. Extra disk at €0.15/GB.</p>
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

    <!-- ═══════════════ RESELLER BUSINESS ADVANTAGES ═══════════════ -->
    <section class="cp-benefits reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag">Why Resell</div>
                <h2>Build your own hosting brand</h2>
                <p>Reseller hosting gives you everything you need to launch a hosting business — with zero server management.</p>
            </div>

            <div class="cp-benefits-grid">
                <div class="cp-security-card">
                    <div class="cp-security-icon"><i class="fas fa-hand-holding-usd"></i></div>
                    <h4>Set Your Own Pricing</h4>
                    <p>Define your own hosting packages and pricing. Keep 100% of the profit from every client you onboard.</p>
                </div>
                <div class="cp-security-card">
                    <div class="cp-security-icon icon-green"><i class="fas fa-users-cog"></i></div>
                    <h4>WHM Control Panel</h4>
                    <p>Manage all client accounts from a single WHM dashboard. Create, suspend, and allocate resources in seconds.</p>
                </div>
                <div class="cp-security-card">
                    <div class="cp-security-icon icon-purple"><i class="fas fa-chart-line"></i></div>
                    <h4>Scalable Business</h4>
                    <p>Start small and grow. Upgrade to Master or Alpha Reseller anytime as your client base expands.</p>
                </div>
                <div class="cp-security-card">
                    <div class="cp-security-icon icon-amber"><i class="fas fa-headset"></i></div>
                    <h4>We Handle the Backend</h4>
                    <p>Server maintenance, security updates, and hardware — all managed by us. You focus on growing your business.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ WHITE-LABEL FEATURES ═══════════════ -->
    <section class="bento-features reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag">White-Label</div>
                <h2>Your brand, your business</h2>
                <p>Everything your clients see is 100% your brand. YottaSrc operates completely behind the scenes.</p>
            </div>

            <div class="bento-grid">
                <div class="bento-card bento-lg">
                    <div class="bento-card-icon"><i class="fas fa-palette"></i></div>
                    <h3>Complete White-Labeling</h3>
                    <p>Private nameservers (ns1.yourdomain.com), custom branding in cPanel, and your own support URLs. Clients see only your brand identity — never ours.</p>
                    <div class="bento-metrics">
                        <div class="bento-metric">
                            <span class="bento-metric-val">Private</span>
                            <span class="bento-metric-label">Nameservers</span>
                        </div>
                        <div class="bento-metric">
                            <span class="bento-metric-val">100%</span>
                            <span class="bento-metric-label">Your Brand</span>
                        </div>
                    </div>
                </div>

                <div class="bento-card bento-lg bento-green">
                    <div class="bento-card-icon icon-green"><i class="fas fa-users-cog"></i></div>
                    <h3>Account Management</h3>
                    <p>Create, modify, suspend, and terminate cPanel accounts. Set individual resource limits for each client — disk space, bandwidth, email accounts, and databases.</p>
                    <div class="bento-metrics">
                        <div class="bento-metric">
                            <span class="bento-metric-val">1-Click</span>
                            <span class="bento-metric-label">Account Creation</span>
                        </div>
                        <div class="bento-metric">
                            <span class="bento-metric-val">Custom</span>
                            <span class="bento-metric-label">Resource Limits</span>
                        </div>
                    </div>
                </div>

                <div class="bento-card bento-sm">
                    <div class="bento-card-icon icon-purple"><i class="fas fa-hdd"></i></div>
                    <h4>NVMe SSD Storage</h4>
                    <p>Ultra-fast I/O for all client accounts.</p>
                </div>
                <div class="bento-card bento-sm">
                    <div class="bento-card-icon icon-amber"><i class="fas fa-shield-alt"></i></div>
                    <h4>Imunify360 Security</h4>
                    <p>AI-powered protection for every account.</p>
                </div>
                <div class="bento-card bento-sm">
                    <div class="bento-card-icon"><i class="fas fa-cloud-download-alt"></i></div>
                    <h4>JetBackup Daily</h4>
                    <p>Automated backups with granular restore.</p>
                </div>
                <div class="bento-card bento-sm">
                    <div class="bento-card-icon icon-green"><i class="fas fa-lock"></i></div>
                    <h4>Free SSL for All</h4>
                    <p>AutoSSL for every client domain you add.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ CHOOSE YOUR LEVEL ═══════════════ -->
    <section class="rs-hierarchy reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag">Reseller Tiers</div>
                <h2>Choose your level</h2>
                <p>YottaSrc offers three reseller tiers. cPanel Reseller is perfect for getting started — upgrade anytime as you grow.</p>
            </div>

            <div class="rs-tiers-grid">
                <div class="rs-tier-card rs-tier-active">
                    <div class="rs-tier-badge">You are here</div>
                    <div class="rs-tier-icon"><i class="fas fa-user-tie"></i></div>
                    <h4>cPanel Reseller</h4>
                    <p>Create &amp; manage cPanel accounts for your clients. Ideal for freelancers and small agencies.</p>
                    <ul class="rs-tier-perks">
                        <li><i class="fas fa-check"></i> WHM Access</li>
                        <li><i class="fas fa-check"></i> Create cPanel Accounts</li>
                        <li><i class="fas fa-check"></i> White-Label Branding</li>
                    </ul>
                </div>
                <div class="rs-tier-card">
                    <div class="rs-tier-icon icon-green"><i class="fas fa-crown"></i></div>
                    <h4>Master Reseller</h4>
                    <p>Create reseller accounts that can in turn create their own cPanel accounts.</p>
                    <ul class="rs-tier-perks">
                        <li><i class="fas fa-check"></i> Everything in Reseller</li>
                        <li><i class="fas fa-check"></i> Create Reseller Accounts</li>
                        <li><i class="fas fa-check"></i> Multi-Tier Management</li>
                    </ul>
                    <a href="<?php echo e(SITE_URL); ?>/master-reseller/" class="rs-tier-link">Learn More <i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="rs-tier-card">
                    <div class="rs-tier-icon icon-purple"><i class="fas fa-gem"></i></div>
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
                <h2>Deploy closer to your clients</h2>
                <p>Choose from 20+ server locations across 4 continents. Lower latency, faster load times, better SEO.</p>
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

    <!-- ═══════════════ LAUNCH IN 4 STEPS ═══════════════ -->
    <section class="onboarding reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag">Get Started</div>
                <h2>Launch in 4 simple steps</h2>
                <p>Go from sign-up to running your own hosting brand in under 30 minutes.</p>
            </div>

            <div class="onboarding-tracks">
                <div class="track">
                    <div class="track-icon"><i class="fas fa-rocket"></i></div>
                    <h3>Start Your Business</h3>
                    <p>From zero to hosting provider in minutes</p>
                    <div class="track-steps">
                        <div class="track-step"><div class="step-num">1</div><div class="step-content"><h4>Pick a Plan</h4><p>Choose Essential, Advance, or Pro based on your needs</p></div></div>
                        <div class="track-step"><div class="step-num">2</div><div class="step-content"><h4>Choose Location</h4><p>Select from 15+ global server locations</p></div></div>
                        <div class="track-step"><div class="step-num">3</div><div class="step-content"><h4>Set Up WHM</h4><p>Log into WHM, configure nameservers and branding</p></div></div>
                        <div class="track-step"><div class="step-num">4</div><div class="step-content"><h4>Onboard Clients</h4><p>Create cPanel accounts and start selling!</p></div></div>
                    </div>
                </div>
                <div class="track">
                    <div class="track-icon"><i class="fas fa-life-ring"></i></div>
                    <h3>We Support You</h3>
                    <p>24/7 technical support for your reseller account</p>
                    <div class="track-steps">
                        <div class="track-step"><div class="step-num">1</div><div class="step-content"><h4>Server Management</h4><p>Hardware, OS updates, and security patches — all on us</p></div></div>
                        <div class="track-step"><div class="step-num">2</div><div class="step-content"><h4>Free Migrations</h4><p>Moving from another reseller? We transfer everything free</p></div></div>
                        <div class="track-step"><div class="step-num">3</div><div class="step-content"><h4>Knowledge Base</h4><p>Docs, tutorials, and guides to help you grow</p></div></div>
                        <div class="track-step"><div class="step-num">4</div><div class="step-content"><h4>Scale Anytime</h4><p>Upgrade to Master or Alpha Reseller as your business grows</p></div></div>
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
                        <div class="faq-item"><button class="faq-question"><span>What is reseller hosting?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>Reseller hosting allows you to purchase hosting resources (disk, bandwidth) and resell them to your own clients under your brand. You manage client accounts via WHM while we handle the server infrastructure.</p></div></div>
                        <div class="faq-item"><button class="faq-question"><span>What is the difference between Reseller, Master, and Alpha?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>A Reseller can create cPanel accounts. A Master Reseller can create Reseller accounts (who create cPanel accounts). An Alpha Reseller can create Master, Reseller, and cPanel accounts — forming a full multi-tier hierarchy.</p></div></div>
                        <div class="faq-item"><button class="faq-question"><span>Will my clients know I'm using YottaSrc?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>No. With white-label branding, private nameservers, and custom cPanel themes, your clients will see only your brand. YottaSrc operates completely behind the scenes.</p></div></div>
                        <div class="faq-item"><button class="faq-question"><span>How quickly is my reseller account activated?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>Reseller accounts are activated within 2 to 20 minutes after payment confirmation. You'll receive WHM login details via email.</p></div></div>
                    </div>

                    <div class="faq-panel" id="faq-technical">
                        <div class="faq-item"><button class="faq-question"><span>Do I get WHM access?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>Yes, all reseller plans include full WHM (Web Host Manager) access. You can create and manage cPanel accounts, configure packages, set nameservers, and more.</p></div></div>
                        <div class="faq-item"><button class="faq-question"><span>Can I set custom hosting packages for my clients?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>Absolutely. In WHM you can create unlimited package templates with custom disk, bandwidth, email, and database limits. Each client account can have different resources.</p></div></div>
                        <div class="faq-item"><button class="faq-question"><span>Which PHP versions are supported?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>We support PHP 5.2 to 8.4 with per-domain switching. Node.js is also available for your clients.</p></div></div>
                        <div class="faq-item"><button class="faq-question"><span>Can I oversell resources?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>Yes, WHM supports overselling. You can allocate more total resources across clients than your plan limit, though actual usage is still bound by your plan.</p></div></div>
                    </div>

                    <div class="faq-panel" id="faq-billing">
                        <div class="faq-item"><button class="faq-question"><span>Does the price increase on renewal?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>No — you pay the same price on renewal. No surprises, no hidden fees.</p></div></div>
                        <div class="faq-item"><button class="faq-question"><span>Can I add more disk space?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>Yes, additional disk space is available at €0.15/GB. You can add it during checkout or anytime from your client dashboard.</p></div></div>
                        <div class="faq-item"><button class="faq-question"><span>What payment methods do you accept?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>We accept credit/debit cards, PayPal, cryptocurrency (Bitcoin, USDT, etc.), and 10+ other payment methods.</p></div></div>
                        <div class="faq-item"><button class="faq-question"><span>Can I upgrade to Master or Alpha Reseller later?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>Yes, you can upgrade your reseller tier anytime from your client dashboard or by contacting our sales team.</p></div></div>
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
                    <p class="why-us-desc">Thousands of resellers trust YottaSrc to power their hosting businesses worldwide.</p>
                    <a href="#plans" class="btn-primary">Get Started <i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="why-us-grid">
                    <div class="why-us-card">
                        <div class="why-us-card-icon"><i class="fas fa-headset"></i></div>
                        <h4>24/7 Expert Support</h4>
                        <p>Our dedicated team is available around the clock to assist you with any issues.</p>
                    </div>
                    <div class="why-us-card">
                        <div class="why-us-card-icon icon-green"><i class="fas fa-tachometer-alt"></i></div>
                        <h4>High-Speed Performance</h4>
                        <p>LiteSpeed + NVMe SSDs deliver blazing-fast hosting for all your clients.</p>
                    </div>
                    <div class="why-us-card">
                        <div class="why-us-card-icon icon-purple"><i class="fas fa-shield-alt"></i></div>
                        <h4>Secure &amp; Reliable</h4>
                        <p>Multi-layer security with Imunify360 and 99.9% uptime SLA.</p>
                    </div>
                    <div class="why-us-card">
                        <div class="why-us-card-icon icon-amber"><i class="fas fa-globe"></i></div>
                        <h4>Global Data Centers</h4>
                        <p>15+ locations across 4 continents for low-latency hosting.</p>
                    </div>
                    <div class="why-us-card">
                        <div class="why-us-card-icon icon-green"><i class="fas fa-tags"></i></div>
                        <h4>Competitive Pricing</h4>
                        <p>Affordable plans with same-price renewal — maximize your profit margins.</p>
                    </div>
                    <div class="why-us-card">
                        <div class="why-us-card-icon icon-purple"><i class="fas fa-level-up-alt"></i></div>
                        <h4>Seamless Upgrades</h4>
                        <p>Upgrade to Master or Alpha Reseller anytime as your business scales.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ COMPETITORS COMPARISON ═══════════════ -->
    <section class="rs-compare reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag">Comparison</div>
                <h2>Why YottaSrc is better</h2>
                <p>See how our reseller hosting stacks up against the competition.</p>
            </div>

            <div class="compare-table-wrap">
                <table class="compare-table">
                    <thead>
                        <tr>
                            <th>Feature</th>
                            <th class="compare-highlight">YottaSrc</th>
                            <th>Typical Hosting</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>NVMe SSD Storage</td>
                            <td class="compare-highlight"><i class="fas fa-check-circle"></i> Full NVMe</td>
                            <td><i class="fas fa-minus-circle"></i> Limited / HDD</td>
                        </tr>
                        <tr>
                            <td>High I/O Speed</td>
                            <td class="compare-highlight"><i class="fas fa-check-circle"></i> 100 MB/s</td>
                            <td><i class="fas fa-minus-circle"></i> Slow shared I/O</td>
                        </tr>
                        <tr>
                            <td>LiteSpeed Web Server</td>
                            <td class="compare-highlight"><i class="fas fa-check-circle"></i> Included</td>
                            <td><i class="fas fa-minus-circle"></i> Apache only</td>
                        </tr>
                        <tr>
                            <td>Free Migration</td>
                            <td class="compare-highlight"><i class="fas fa-check-circle"></i> Free</td>
                            <td><i class="fas fa-times-circle"></i> Paid or none</td>
                        </tr>
                        <tr>
                            <td>Same Price on Renewal</td>
                            <td class="compare-highlight"><i class="fas fa-check-circle"></i> Guaranteed</td>
                            <td><i class="fas fa-times-circle"></i> Price increase</td>
                        </tr>
                        <tr>
                            <td>White-Label Branding</td>
                            <td class="compare-highlight"><i class="fas fa-check-circle"></i> Full</td>
                            <td><i class="fas fa-minus-circle"></i> Partial</td>
                        </tr>
                        <tr>
                            <td>Free SSL &amp; Backups</td>
                            <td class="compare-highlight"><i class="fas fa-check-circle"></i> Included</td>
                            <td><i class="fas fa-times-circle"></i> Extra cost</td>
                        </tr>
                        <tr>
                            <td>24/7 Expert Support</td>
                            <td class="compare-highlight"><i class="fas fa-check-circle"></i> &lt;10 min response</td>
                            <td><i class="fas fa-minus-circle"></i> Limited hours</td>
                        </tr>
                        <tr>
                            <td>Global Locations</td>
                            <td class="compare-highlight"><i class="fas fa-check-circle"></i> 20+ locations</td>
                            <td><i class="fas fa-minus-circle"></i> 1–3 regions</td>
                        </tr>
                        <tr>
                            <td>Imunify360 Security</td>
                            <td class="compare-highlight"><i class="fas fa-check-circle"></i> AI-powered</td>
                            <td><i class="fas fa-times-circle"></i> Basic firewall</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- ═══════════════ ClouDNS PARTNERSHIP ═══════════════ -->
    <?php include __DIR__ . '/includes/section-cloudns.php'; ?>

    <!-- ═══════════════ MAILCHANNELS PARTNERSHIP ═══════════════ -->
    <?php include __DIR__ . '/includes/section-mailchannels.php'; ?>

    <!-- ═══════════════ BOTTOM CTA ═══════════════ -->
    <section class="promo-cta reveal">
        <div class="container">
            <div class="promo-cta-inner">
                <div class="promo-cta-glow"></div>
                <div class="promo-cta-icon"><i class="fas fa-rocket"></i></div>
                <h2>Ready to start your hosting business?</h2>
                <p>Launch your brand with cPanel Reseller hosting from €3.49 EUR / mo. WHM included, white-label ready.</p>
                <a href="#plans" class="btn-primary">View Plans <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
