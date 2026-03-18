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
                        <a href="<?php echo e(SITE_URL); ?>/">Home</a>
                        <i class="fas fa-chevron-right"></i>
                        <span>Wholesale</span>
                    </div>
                    <h1>Wholesale Reselling — <span class="highlight">Maximum Margins</span></h1>
                    <p class="page-hero-desc">
                        Buy YottaSrc services at deeply discounted wholesale rates and resell them under your own brand. Designed for agencies, MSPs, and large-scale resellers who need volume pricing with full white-label flexibility.
                    </p>
                    <div class="page-hero-ctas">
                        <a href="<?php echo e(SITE_URL); ?>/contact/" class="btn-primary">Request Wholesale Access <i class="fas fa-arrow-right"></i></a>
                        <a href="#services" class="btn-secondary"><i class="fas fa-arrow-down"></i> Learn More</a>
                    </div>
                    <div class="page-hero-badges">
                        <div class="hero-badge-item"><i class="fas fa-check"></i> Up to 13% Discount</div>
                        <div class="hero-badge-item"><i class="fas fa-check"></i> Full White-Label</div>
                        <div class="hero-badge-item"><i class="fas fa-check"></i> Priority Support</div>
                        <div class="hero-badge-item"><i class="fas fa-check"></i> WHMCS &amp; API Ready</div>
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
                <div class="section-tag">Wholesale Program</div>
                <h2>What is wholesale reselling?</h2>
                <p>Wholesale is our highest-tier partnership — buy at cost-plus pricing and keep the largest margins in the industry.</p>
            </div>

            <div class="bento-grid">
                <div class="bento-card bento-sm">
                    <div class="bento-card-icon"><i class="fas fa-warehouse"></i></div>
                    <h4>Bulk Volume Pricing</h4>
                    <p>Purchase individual services at deeply discounted unit prices. The more you sell, the lower your per-unit cost.</p>
                </div>
                <div class="bento-card bento-sm">
                    <div class="bento-card-icon icon-green"><i class="fas fa-user-secret"></i></div>
                    <h3>100% White-Label</h3>
                    <p>Your clients never see YottaSrc. Use your own brand, nameservers, control panel theme, and support portal.</p>
                </div>
                <div class="bento-card bento-sm">
                    <div class="bento-card-icon icon-blue"><i class="fas fa-cogs"></i></div>
                    <h3>WHMCS &amp; API</h3>
                    <p>Automate provisioning with our WHMCS module or REST API. Full lifecycle management for every product type.</p>
                </div>
                <div class="bento-card bento-sm">
                    <div class="bento-card-icon icon-purple"><i class="fas fa-headset"></i></div>
                    <h3>Priority Support</h3>
                    <p>Wholesale partners get a dedicated account manager and priority ticket queue with guaranteed response times.</p>
                </div>
                <div class="bento-card bento-sm">
                    <div class="bento-card-icon icon-amber"><i class="fas fa-chart-line"></i></div>
                    <h3>Partner Dashboard</h3>
                    <p>Track revenue, client count, service usage, and billing in a single wholesale partner dashboard.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ PRICING PLANS ═══════════════ -->
    <section class="ws-tiers reveal" id="plans">
        <div class="container">
            <div class="section-header">
                <div class="section-tag">Pricing</div>
                <h2>Simple pricing, no hidden fees</h2>
                <p>Choose the wholesale tier that fits your business. Upgrade anytime as you scale.</p>
            </div>

            <div class="ws-tiers-stack">
                <div class="ws-tier">
                    <div class="ws-tier-discount" style="--tier-pct: 30%">
                        <span class="ws-tier-pct">4%</span>
                        <span class="ws-tier-pct-label">Discount</span>
                    </div>
                    <div class="ws-tier-info">
                        <div class="ws-tier-name">Starter</div>
                        <div class="ws-tier-target">For Startups</div>
                    </div>
                    <div class="ws-tier-meta">
                        <span class="ws-tier-chip"><i class="fas fa-hdd"></i> VPS/VDS Only</span>
                        <span class="ws-tier-chip"><i class="fas fa-headset"></i> 24/7</span>
                    </div>
                    <div class="ws-tier-price">
                        <span class="ws-tier-currency">€</span><span class="ws-tier-amount">9.9</span><span class="ws-tier-period">/mo</span>
                    </div>
                    <a href="<?php echo e(SITE_URL); ?>/contact/" class="ws-tier-cta">Get Started <i class="fas fa-arrow-right"></i></a>
                </div>

                <div class="ws-tier">
                    <div class="ws-tier-discount" style="--tier-pct: 53%">
                        <span class="ws-tier-pct">7%</span>
                        <span class="ws-tier-pct-label">Discount</span>
                    </div>
                    <div class="ws-tier-info">
                        <div class="ws-tier-name">Platinum</div>
                        <div class="ws-tier-target">For Growing Business</div>
                    </div>
                    <div class="ws-tier-meta">
                        <span class="ws-tier-chip"><i class="fas fa-layer-group"></i> All Services</span>
                        <span class="ws-tier-chip"><i class="fas fa-headset"></i> 24/7</span>
                    </div>
                    <div class="ws-tier-price">
                        <span class="ws-tier-currency">€</span><span class="ws-tier-amount">14.99</span><span class="ws-tier-period">/mo</span>
                    </div>
                    <a href="<?php echo e(SITE_URL); ?>/contact/" class="ws-tier-cta">Get Started <i class="fas fa-arrow-right"></i></a>
                </div>

                <div class="ws-tier ws-tier--popular">
                    <div class="ws-tier-badge">Most Popular</div>
                    <div class="ws-tier-discount" style="--tier-pct: 76%">
                        <span class="ws-tier-pct">10%</span>
                        <span class="ws-tier-pct-label">Discount</span>
                    </div>
                    <div class="ws-tier-info">
                        <div class="ws-tier-name">Business</div>
                        <div class="ws-tier-target">Professional Plan</div>
                    </div>
                    <div class="ws-tier-meta">
                        <span class="ws-tier-chip"><i class="fas fa-layer-group"></i> All Services</span>
                        <span class="ws-tier-chip"><i class="fas fa-headset"></i> 24/7</span>
                    </div>
                    <div class="ws-tier-price">
                        <span class="ws-tier-currency">€</span><span class="ws-tier-amount">19.99</span><span class="ws-tier-period">/mo</span>
                    </div>
                    <a href="<?php echo e(SITE_URL); ?>/contact/" class="ws-tier-cta ws-tier-cta--primary">Get Started <i class="fas fa-arrow-right"></i></a>
                </div>

                <div class="ws-tier">
                    <div class="ws-tier-discount" style="--tier-pct: 100%">
                        <span class="ws-tier-pct">13%</span>
                        <span class="ws-tier-pct-label">Discount</span>
                    </div>
                    <div class="ws-tier-info">
                        <div class="ws-tier-name">Enterprise</div>
                        <div class="ws-tier-target">Enterprise Businesses</div>
                    </div>
                    <div class="ws-tier-meta">
                        <span class="ws-tier-chip"><i class="fas fa-layer-group"></i> All Services</span>
                        <span class="ws-tier-chip"><i class="fas fa-headset"></i> 24/7</span>
                    </div>
                    <div class="ws-tier-price">
                        <span class="ws-tier-currency">€</span><span class="ws-tier-amount">24.49</span><span class="ws-tier-period">/mo</span>
                    </div>
                    <a href="<?php echo e(SITE_URL); ?>/contact/" class="ws-tier-cta">Get Started <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>
    </section>

    <!-- ═══════════════ SERVICES INCLUDED ═══════════════ -->
    <section class="wholesale-services reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag">Services</div>
                <h2>What can you resell?</h2>
                <p>Every YottaSrc product is available at wholesale pricing.</p>
            </div>

            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon"><i class="fas fa-server"></i></div>
                    <h4>cPanel Hosting</h4>
                    <p>Shared hosting with LiteSpeed, NVMe, and cPanel — all plans from Mini to Enterprise.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon icon-green"><i class="fab fa-wordpress"></i></div>
                    <h4>WordPress Hosting</h4>
                    <p>Optimized WordPress hosting with staging, auto-updates, and LiteSpeed Cache built in.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon icon-blue"><i class="fas fa-cloud"></i></div>
                    <h4>Cloud Servers</h4>
                    <p>Scalable cloud instances across 50+ regions with hourly billing and full root access.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon icon-purple"><i class="fas fa-hdd"></i></div>
                    <h4>VPS / VDS</h4>
                    <p>Linux and Windows VPS with dedicated resources, SSD storage, and instant deployment.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon icon-amber"><i class="fas fa-network-wired"></i></div>
                    <h4>Dedicated Servers</h4>
                    <p>Bare-metal dedicated servers with full hardware isolation and custom configurations.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon icon-rose"><i class="fas fa-globe"></i></div>
                    <h4>Domain Names</h4>
                    <p>Register and manage domains across 500+ TLDs at wholesale registrar pricing.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon"><i class="fas fa-certificate"></i></div>
                    <h4>SSL Certificates</h4>
                    <p>DV, OV, and EV SSL certificates from trusted CAs at partner-exclusive rates.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon icon-green"><i class="fab fa-microsoft"></i></div>
                    <h4>Microsoft Licenses</h4>
                    <p>Windows, Office, RDS CALs, and other Microsoft products at volume pricing.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon icon-blue"><i class="fas fa-envelope"></i></div>
                    <h4>Email Hosting</h4>
                    <p>Professional email solutions with custom domains, webmail, and IMAP/POP3 support.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ BENEFITS ═══════════════ -->
    <section class="bento-features reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag">Why Wholesale</div>
                <h2>Benefits of the wholesale program</h2>
                <p>Everything you need to run a profitable hosting business at scale.</p>
            </div>

            <div class="bento-grid">
                <div class="bento-card bento-sm">
                    <div class="bento-card-icon"><i class="fas fa-percentage"></i></div>
                    <h3>Up to 13% Discount</h3>
                    <p>Tiered wholesale pricing from 4% to 13% off — set your own retail prices and keep the margin.</p>
                </div>
                <div class="bento-card bento-sm">
                    <div class="bento-card-icon icon-green"><i class="fas fa-infinity"></i></div>
                    <h3>No Minimums</h3>
                    <p>No minimum order quantities or monthly commitments. Start small and scale as your client base grows.</p>
                </div>
                <div class="bento-card bento-sm">
                    <div class="bento-card-icon icon-blue"><i class="fas fa-file-invoice-dollar"></i></div>
                    <h3>Consolidated Billing</h3>
                    <p>One invoice for all services. Simplify your accounting with monthly consolidated billing.</p>
                </div>
                <div class="bento-card bento-sm">
                    <div class="bento-card-icon icon-purple"><i class="fas fa-handshake"></i></div>
                    <h3>Dedicated Account Manager</h3>
                    <p>Get a personal account manager who understands your business and helps you grow.</p>
                </div>
                <div class="bento-card bento-sm">
                    <div class="bento-card-icon icon-amber"><i class="fas fa-rocket"></i></div>
                    <h4>Instant Provisioning</h4>
                    <p>All services provisioned instantly. Clients get their services within seconds of payment — fully automated lifecycle.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ COMPARISON: WHOLESALE vs RESELLER ═══════════════ -->
    <section class="wholesale-compare reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag">Comparison</div>
                <h2>Wholesale vs. Standard Reseller</h2>
                <p>See how wholesale stacks up against our standard reseller plans.</p>
            </div>

            <div class="compare-table-wrap">
                <table class="compare-table">
                    <thead>
                        <tr>
                            <th>Feature</th>
                            <th>Standard Reseller</th>
                            <th class="compare-highlight">Wholesale Partner</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Pricing Model</td>
                            <td>Fixed resource pool</td>
                            <td class="compare-highlight">Per-unit cost-plus</td>
                        </tr>
                        <tr>
                            <td>Discount Level</td>
                            <td>Up to 13% off</td>
                            <td class="compare-highlight">Up to 13% off (tiered)</td>
                        </tr>
                        <tr>
                            <td>Product Range</td>
                            <td>Hosting only</td>
                            <td class="compare-highlight">All products (Hosting, VPS, Cloud, Domains, SSL)</td>
                        </tr>
                        <tr>
                            <td>White-Label</td>
                            <td><i class="fas fa-check text-green"></i> Partial</td>
                            <td class="compare-highlight"><i class="fas fa-check text-green"></i> Full</td>
                        </tr>
                        <tr>
                            <td>API Access</td>
                            <td><i class="fas fa-times text-red"></i> Limited</td>
                            <td class="compare-highlight"><i class="fas fa-check text-green"></i> Full REST API</td>
                        </tr>
                        <tr>
                            <td>WHMCS Module</td>
                            <td><i class="fas fa-check text-green"></i> Basic</td>
                            <td class="compare-highlight"><i class="fas fa-check text-green"></i> Advanced</td>
                        </tr>
                        <tr>
                            <td>Account Manager</td>
                            <td><i class="fas fa-times text-red"></i> No</td>
                            <td class="compare-highlight"><i class="fas fa-check text-green"></i> Dedicated</td>
                        </tr>
                        <tr>
                            <td>Support Priority</td>
                            <td>Standard</td>
                            <td class="compare-highlight">Priority queue</td>
                        </tr>
                        <tr>
                            <td>Billing</td>
                            <td>Per-plan invoicing</td>
                            <td class="compare-highlight">Consolidated monthly</td>
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
                <div class="section-tag">Get Started</div>
                <h2>How to become a wholesale partner</h2>
                <p>Join our wholesale program in a few simple steps.</p>
            </div>

            <div class="vps-steps-grid">
                <div class="vps-step-card">
                    <div class="vps-step-num">1</div>
                    <div class="vps-step-icon"><i class="fas fa-paper-plane"></i></div>
                    <h4>Apply</h4>
                    <p>Contact our sales team with details about your business, expected volume, and target markets.</p>
                </div>
                <div class="vps-step-card">
                    <div class="vps-step-num">2</div>
                    <div class="vps-step-icon icon-green"><i class="fas fa-user-check"></i></div>
                    <h4>Get Approved</h4>
                    <p>Our team reviews your application and sets up your wholesale account with custom pricing tiers.</p>
                </div>
                <div class="vps-step-card">
                    <div class="vps-step-num">3</div>
                    <div class="vps-step-icon icon-purple"><i class="fas fa-plug"></i></div>
                    <h4>Integrate</h4>
                    <p>Connect via our WHMCS module or API. We help you set up automation and branding.</p>
                </div>
                <div class="vps-step-card">
                    <div class="vps-step-num">4</div>
                    <div class="vps-step-icon icon-amber"><i class="fas fa-rocket"></i></div>
                    <h4>Start Selling</h4>
                    <p>List services on your storefront, set your own prices, and start earning from day one.</p>
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
            </div>

            <div class="faq-layout faq-layout--full">
                <div class="faq-panels">
                    <div class="faq-panel active" id="faq-wholesale">
                        <div class="faq-item"><button class="faq-question"><span>What is the difference between wholesale and reseller?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>Standard reseller plans give you a fixed resource pool to divide among clients. Wholesale gives you per-unit pricing on every YottaSrc product — hosting, VPS, cloud, domains, and SSL — with deeper discounts and full automation.</p></div></div>
                        <div class="faq-item"><button class="faq-question"><span>Is there a minimum order or commitment?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>No, there are no minimum order quantities or monthly commitments. You pay only for what you sell.</p></div></div>
                        <div class="faq-item"><button class="faq-question"><span>Can I set my own pricing?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>Absolutely. You buy at wholesale cost and set whatever retail prices you want. The margin is entirely yours.</p></div></div>
                        <div class="faq-item"><button class="faq-question"><span>Do my clients contact YottaSrc for support?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>No — your clients contact you. You handle first-line support and can escalate to our priority queue when needed. Your clients never interact with YottaSrc directly.</p></div></div>
                        <div class="faq-item"><button class="faq-question"><span>How do I get started?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>Contact our sales team via the button above or email <a href="mailto:sales@yottasrc.com">sales@yottasrc.com</a>. We'll review your application and set up your wholesale account within 24–48 hours.</p></div></div>
                    </div>
                </div>
            </div>

            <div class="faq-actions">
                <a href="<?php echo e(SITE_URL); ?>/contact/" class="btn-primary"><i class="fas fa-headset"></i> Contact Sales</a>
                <a href="<?php echo e(SITE_URL); ?>/faq/" class="btn-secondary">Browse All FAQ <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </section>

    <!-- ═══════════════ BOTTOM CTA ═══════════════ -->
    <section class="promo-cta reveal">
        <div class="container">
            <div class="promo-cta-inner">
                <div class="promo-cta-glow"></div>
                <div class="promo-cta-icon"><i class="fas fa-handshake"></i></div>
                <h2>Ready to scale your hosting business?</h2>
                <p>Join the YottaSrc wholesale program and get the best margins in the industry.</p>
                <a href="<?php echo e(SITE_URL); ?>/contact/" class="btn-primary">Apply for Wholesale <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
