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
                        <a href="<?php echo e(SITE_URL); ?>/">Home</a>
                        <i class="fas fa-chevron-right"></i>
                        <span>cPanel Hosting</span>
                    </div>
                    <h1>cPanel Hosting — <span class="highlight">Full Control</span>, Made Simple</h1>
                    <p class="page-hero-desc">
                        The world's most trusted hosting control panel, powered by LiteSpeed on NVMe SSDs. Manage domains, emails, files, databases, SSL, and backups — all from one intuitive cPanel dashboard across 20+ global locations.
                    </p>
                    <div class="page-hero-ctas">
                        <a href="#plans" class="btn-primary">View Plans <i class="fas fa-arrow-down"></i></a>
                        <a href="<?php echo e(SITE_URL); ?>/contact-us/" class="btn-secondary"><i class="fas fa-headset"></i> Talk to Sales</a>
                    </div>
                    <div class="page-hero-badges">
                        <div class="hero-badge-item"><i class="fas fa-check"></i> cPanel Control Panel</div>
                        <div class="hero-badge-item"><i class="fas fa-check"></i> LiteSpeed + NVMe SSD</div>
                        <div class="hero-badge-item"><i class="fas fa-check"></i> Free SSL &amp; Daily Backups</div>
                        <div class="hero-badge-item"><i class="fas fa-check"></i> 400+ 1-Click Apps</div>
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
            <span class="partners-label">Powered By</span>
            <div class="partners-logos">
                <span class="partner-logo"><i class="fas fa-bolt"></i> LiteSpeed</span>
                <span class="partner-logo"><i class="fas fa-shield-alt"></i> CloudLinux</span>
                <span class="partner-logo"><i class="fas fa-server"></i> cPanel</span>
                <span class="partner-logo"><i class="fas fa-hdd"></i> NVMe SSD</span>
                <span class="partner-logo"><i class="fas fa-robot"></i> Imunify360</span>
                <span class="partner-logo"><i class="fas fa-cloud-download-alt"></i> JetBackup</span>
                <span class="partner-logo"><i class="fas fa-th"></i> Softaculous</span>
            </div>
        </div>
    </section>

    <!-- ═══════════════ PRICING PLANS ═══════════════ -->
    <section class="plans reveal" id="plans">
        <div class="container">
            <div class="section-header">
                <div class="section-tag">Pricing</div>
                <h2>Simple, transparent pricing</h2>
                <p>Same price on renewal. No surprise increases. 30-day money-back guarantee on all plans.</p>
            </div>

            <div class="plans-panel active" data-tab="cpanel-hosting">
                <div class="swiper plans-swiper">
                    <div class="swiper-wrapper">
                        <!-- Gift -->
                        <div class="swiper-slide"><div class="plan-card">
                            <div class="plan-head"><div class="plan-name">Gift</div><span class="plan-save">Save 44%</span></div>
                            <div class="plan-target">For beginners</div>
                            <div class="plan-price">
                                <span class="old-price">€1.49</span>
                                <span class="current-price"><span class="currency">€</span><span class="amount">0.83</span><span class="period">EUR / mo</span></span>
                            </div>
                            <div class="plan-renewal"><i class="fas fa-check"></i> Same price on renewal</div>
                            <button class="plan-cta" data-href="<?php echo e(CP_URL); ?>/cart.php?a=add&pid=1">Choose Plan</button>
                            <div class="plan-resources">
                                <div class="plan-res"><i class="fas fa-microchip"></i><span class="res-val">1</span><span class="res-label">CPU Core</span></div>
                                <div class="plan-res"><i class="fas fa-memory"></i><span class="res-val">1.5 GB</span><span class="res-label">RAM</span></div>
                                <div class="plan-res"><i class="fas fa-hdd"></i><span class="res-val">5 GB</span><span class="res-label">NVMe Storage</span></div>
                                <div class="plan-res"><i class="fas fa-tachometer-alt"></i><span class="res-val">25 MB/s</span><span class="res-label">I/O Speed</span></div>
                            </div>
                            <div class="plan-divider"><span>Included</span></div>
                            <ul class="plan-features">
                                <li><i class="fas fa-globe"></i> Free Domain &amp; SSL</li>
                                <li><i class="fas fa-sitemap"></i> 3 Addon Domains</li>
                                <li><i class="fas fa-database"></i> 3 DB / 3 Emails</li>
                                <li><i class="fas fa-wifi"></i> Unlimited Bandwidth</li>
                                <li><i class="fab fa-php"></i> PHP 5.2–8.4 &amp; Node.js</li>
                                <li><i class="fas fa-terminal"></i> Terminal Access</li>
                                <li><i class="fas fa-map-marker-alt"></i> 20+ Locations</li>
                            </ul>
                        </div></div>

                        <!-- Mini Starter -->
                        <div class="swiper-slide"><div class="plan-card">
                            <div class="plan-head"><div class="plan-name">Mini Starter</div><span class="plan-save">Save 44%</span></div>
                            <div class="plan-target">For personal projects</div>
                            <div class="plan-price">
                                <span class="old-price">€2.99</span>
                                <span class="current-price"><span class="currency">€</span><span class="amount">1.67</span><span class="period">EUR / mo</span></span>
                            </div>
                            <div class="plan-renewal"><i class="fas fa-check"></i> Same price on renewal</div>
                            <button class="plan-cta" data-href="<?php echo e(CP_URL); ?>/cart.php?a=add&pid=2">Choose Plan</button>
                            <div class="plan-resources">
                                <div class="plan-res"><i class="fas fa-microchip"></i><span class="res-val">2</span><span class="res-label">CPU Cores</span></div>
                                <div class="plan-res"><i class="fas fa-memory"></i><span class="res-val">2 GB</span><span class="res-label">RAM</span></div>
                                <div class="plan-res"><i class="fas fa-hdd"></i><span class="res-val">10 GB</span><span class="res-label">NVMe Storage</span></div>
                                <div class="plan-res"><i class="fas fa-tachometer-alt"></i><span class="res-val">100 MB/s</span><span class="res-label">I/O Speed</span></div>
                            </div>
                            <div class="plan-divider"><span>Included</span></div>
                            <ul class="plan-features">
                                <li><i class="fas fa-globe"></i> Free Domain &amp; SSL</li>
                                <li><i class="fas fa-sitemap"></i> 10 Addon Domains</li>
                                <li><i class="fas fa-database"></i> 10 DB / 10 Emails</li>
                                <li><i class="fas fa-wifi"></i> Unlimited Bandwidth</li>
                                <li><i class="fab fa-php"></i> PHP 5.2–8.4 &amp; Node.js</li>
                                <li><i class="fas fa-terminal"></i> Terminal Access</li>
                                <li><i class="fas fa-map-marker-alt"></i> 20+ Locations</li>
                            </ul>
                        </div></div>

                        <!-- Starter -->
                        <div class="swiper-slide"><div class="plan-card">
                            <div class="plan-head"><div class="plan-name">Starter</div><span class="plan-save">Save 42%</span></div>
                            <div class="plan-target">For startups</div>
                            <div class="plan-price">
                                <span class="old-price">€3.99</span>
                                <span class="current-price"><span class="currency">€</span><span class="amount">2.33</span><span class="period">EUR / mo</span></span>
                            </div>
                            <div class="plan-renewal"><i class="fas fa-check"></i> Same price on renewal</div>
                            <button class="plan-cta" data-href="<?php echo e(CP_URL); ?>/cart.php?a=add&pid=3">Choose Plan</button>
                            <div class="plan-resources">
                                <div class="plan-res"><i class="fas fa-microchip"></i><span class="res-val">2.5</span><span class="res-label">CPU Cores</span></div>
                                <div class="plan-res"><i class="fas fa-memory"></i><span class="res-val">2.5 GB</span><span class="res-label">RAM</span></div>
                                <div class="plan-res"><i class="fas fa-hdd"></i><span class="res-val">15 GB</span><span class="res-label">NVMe Storage</span></div>
                                <div class="plan-res"><i class="fas fa-tachometer-alt"></i><span class="res-val">200 MB/s</span><span class="res-label">I/O Speed</span></div>
                            </div>
                            <div class="plan-divider"><span>Included</span></div>
                            <ul class="plan-features">
                                <li><i class="fas fa-globe"></i> Free Domain &amp; SSL</li>
                                <li><i class="fas fa-sitemap"></i> 15 Addon Domains</li>
                                <li><i class="fas fa-database"></i> 15 DB / 15 Emails</li>
                                <li><i class="fas fa-wifi"></i> Unlimited Bandwidth</li>
                                <li><i class="fab fa-php"></i> PHP 5.2–8.4 &amp; Node.js</li>
                                <li><i class="fas fa-terminal"></i> Terminal Access</li>
                                <li><i class="fas fa-map-marker-alt"></i> 20+ Locations</li>
                            </ul>
                        </div></div>

                        <!-- Premium (Popular) -->
                        <div class="swiper-slide"><div class="plan-card popular">
                            <div class="plan-badge">Most Popular</div>
                            <div class="plan-head"><div class="plan-name">Premium</div><span class="plan-save">Save 43%</span></div>
                            <div class="plan-target">For growing businesses</div>
                            <div class="plan-price">
                                <span class="old-price">€5.99</span>
                                <span class="current-price"><span class="currency">€</span><span class="amount">3.39</span><span class="period">EUR / mo</span></span>
                            </div>
                            <div class="plan-renewal"><i class="fas fa-check"></i> Same price on renewal</div>
                            <button class="plan-cta" data-href="<?php echo e(CP_URL); ?>/cart.php?a=add&pid=4">Choose Plan</button>
                            <div class="plan-resources">
                                <div class="plan-res"><i class="fas fa-microchip"></i><span class="res-val">3</span><span class="res-label">CPU Cores</span></div>
                                <div class="plan-res"><i class="fas fa-memory"></i><span class="res-val">3 GB</span><span class="res-label">RAM</span></div>
                                <div class="plan-res"><i class="fas fa-hdd"></i><span class="res-val">25 GB</span><span class="res-label">NVMe Storage</span></div>
                                <div class="plan-res"><i class="fas fa-tachometer-alt"></i><span class="res-val">300 MB/s</span><span class="res-label">I/O Speed</span></div>
                            </div>
                            <div class="plan-divider"><span>Included</span></div>
                            <ul class="plan-features">
                                <li><i class="fas fa-globe"></i> Free .com / .org / .net</li>
                                <li><i class="fas fa-sitemap"></i> 25 Addon Domains</li>
                                <li><i class="fas fa-database"></i> 25 DB / 25 Emails</li>
                                <li><i class="fas fa-wifi"></i> Unlimited BW &amp; SSL</li>
                                <li><i class="fab fa-php"></i> PHP 5.2–8.4 &amp; Node.js</li>
                                <li><i class="fas fa-terminal"></i> Terminal Access</li>
                                <li><i class="fas fa-map-marker-alt"></i> 20+ Locations</li>
                            </ul>
                        </div></div>

                        <!-- Platinum -->
                        <div class="swiper-slide"><div class="plan-card">
                            <div class="plan-head"><div class="plan-name">Platinum</div><span class="plan-save">Save 44%</span></div>
                            <div class="plan-target">For high-demand sites</div>
                            <div class="plan-price">
                                <span class="old-price">€7.49</span>
                                <span class="current-price"><span class="currency">€</span><span class="amount">4.22</span><span class="period">EUR / mo</span></span>
                            </div>
                            <div class="plan-renewal"><i class="fas fa-check"></i> Same price on renewal</div>
                            <button class="plan-cta" data-href="<?php echo e(CP_URL); ?>/cart.php?a=add&pid=5">Choose Plan</button>
                            <div class="plan-resources">
                                <div class="plan-res"><i class="fas fa-microchip"></i><span class="res-val">3.5</span><span class="res-label">CPU Cores</span></div>
                                <div class="plan-res"><i class="fas fa-memory"></i><span class="res-val">3.5 GB</span><span class="res-label">RAM</span></div>
                                <div class="plan-res"><i class="fas fa-hdd"></i><span class="res-val">50 GB</span><span class="res-label">NVMe Storage</span></div>
                                <div class="plan-res"><i class="fas fa-tachometer-alt"></i><span class="res-val">500 MB/s</span><span class="res-label">I/O Speed</span></div>
                            </div>
                            <div class="plan-divider"><span>Included</span></div>
                            <ul class="plan-features">
                                <li><i class="fas fa-globe"></i> Free .com / .org / .net</li>
                                <li><i class="fas fa-sitemap"></i> 50 Addon Domains</li>
                                <li><i class="fas fa-database"></i> 50 DB / 50 Emails</li>
                                <li><i class="fas fa-wifi"></i> Unlimited BW &amp; SSL</li>
                                <li><i class="fab fa-php"></i> PHP 5.2–8.4 &amp; Node.js</li>
                                <li><i class="fas fa-terminal"></i> Terminal Access</li>
                                <li><i class="fas fa-map-marker-alt"></i> 20+ Locations</li>
                            </ul>
                        </div></div>

                        <!-- Business -->
                        <div class="swiper-slide"><div class="plan-card">
                            <div class="plan-head"><div class="plan-name">Business</div><span class="plan-save">Save 43%</span></div>
                            <div class="plan-target">For businesses</div>
                            <div class="plan-price">
                                <span class="old-price">€12.99</span>
                                <span class="current-price"><span class="currency">€</span><span class="amount">7.42</span><span class="period">EUR / mo</span></span>
                            </div>
                            <div class="plan-renewal"><i class="fas fa-check"></i> Same price on renewal</div>
                            <button class="plan-cta" data-href="<?php echo e(CP_URL); ?>/cart.php?a=add&pid=6">Choose Plan</button>
                            <div class="plan-resources">
                                <div class="plan-res"><i class="fas fa-microchip"></i><span class="res-val">4</span><span class="res-label">CPU Cores</span></div>
                                <div class="plan-res"><i class="fas fa-memory"></i><span class="res-val">4 GB</span><span class="res-label">RAM</span></div>
                                <div class="plan-res"><i class="fas fa-hdd"></i><span class="res-val">75 GB</span><span class="res-label">NVMe Storage</span></div>
                                <div class="plan-res"><i class="fas fa-tachometer-alt"></i><span class="res-val">900 MB/s</span><span class="res-label">I/O Speed</span></div>
                            </div>
                            <div class="plan-divider"><span>Included</span></div>
                            <ul class="plan-features">
                                <li><i class="fas fa-globe"></i> Free .com / .org / .net</li>
                                <li><i class="fas fa-sitemap"></i> 100 Addon Domains</li>
                                <li><i class="fas fa-database"></i> 100 DB / 100 Emails</li>
                                <li><i class="fas fa-wifi"></i> Unlimited BW &amp; SSL</li>
                                <li><i class="fab fa-php"></i> PHP 5.2–8.4 &amp; Node.js</li>
                                <li><i class="fas fa-terminal"></i> Terminal Access</li>
                                <li><i class="fas fa-map-marker-alt"></i> 20+ Locations</li>
                            </ul>
                        </div></div>

                        <!-- Enterprise -->
                        <div class="swiper-slide"><div class="plan-card">
                            <div class="plan-head"><div class="plan-name">Enterprise</div><span class="plan-save">Save 42%</span></div>
                            <div class="plan-target">For enterprises</div>
                            <div class="plan-price">
                                <span class="old-price">€21.99</span>
                                <span class="current-price"><span class="currency">€</span><span class="amount">12.72</span><span class="period">EUR / mo</span></span>
                            </div>
                            <div class="plan-renewal"><i class="fas fa-check"></i> Same price on renewal</div>
                            <button class="plan-cta" data-href="<?php echo e(CP_URL); ?>/cart.php?a=add&pid=7">Choose Plan</button>
                            <div class="plan-resources">
                                <div class="plan-res"><i class="fas fa-microchip"></i><span class="res-val">5</span><span class="res-label">CPU Cores</span></div>
                                <div class="plan-res"><i class="fas fa-memory"></i><span class="res-val">5 GB</span><span class="res-label">RAM</span></div>
                                <div class="plan-res"><i class="fas fa-hdd"></i><span class="res-val">125 GB</span><span class="res-label">NVMe Storage</span></div>
                                <div class="plan-res"><i class="fas fa-tachometer-alt"></i><span class="res-val">1.5 GB/s</span><span class="res-label">I/O Speed</span></div>
                            </div>
                            <div class="plan-divider"><span>Included</span></div>
                            <ul class="plan-features">
                                <li><i class="fas fa-globe"></i> Free .com / .org / .net</li>
                                <li><i class="fas fa-sitemap"></i> Unlimited Domains</li>
                                <li><i class="fas fa-database"></i> Unlimited DB / Emails / FTP</li>
                                <li><i class="fas fa-wifi"></i> Unlimited BW &amp; SSL</li>
                                <li><i class="fab fa-php"></i> PHP 5.2–8.4 &amp; Node.js</li>
                                <li><i class="fas fa-terminal"></i> Terminal Access</li>
                                <li><i class="fas fa-map-marker-alt"></i> 20+ Locations</li>
                            </ul>
                        </div></div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>

            <div class="pricing-custom">
                <p>Didn't find what you need? <a href="<?php echo e(SITE_URL); ?>/contact-us/">Contact us</a> to build a custom hosting solution.</p>
            </div>
        </div>
    </section>

    <!-- ═══════════════ GLOBAL LOCATIONS ═══════════════ -->
    <section class="dc-showcase dc-showcase-compact reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag">Global Infrastructure</div>
                <h2>Deploy closer to your audience</h2>
                <p>Choose from 20+ server locations across 4 continents. Lower latency, faster load times, better SEO.</p>
            </div>

            <!-- Compact network stats strip -->
            <div class="dc-strip-stats">
                <div class="dc-strip-stat"><i class="fas fa-server"></i> <strong>20+</strong> Locations</div>
                <div class="dc-strip-stat"><i class="fas fa-network-wired"></i> <strong>10 Gbit/s</strong> Network</div>
                <div class="dc-strip-stat"><i class="fas fa-globe"></i> <strong>4</strong> Continents</div>
                <div class="dc-strip-stat"><i class="fas fa-tachometer-alt"></i> <strong>&lt;30ms</strong> Latency</div>
            </div>

            <!-- Modern continent-grouped location grid -->
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

    <!-- ═══════════════ WHY cPANEL HOSTING ═══════════════ -->
    <section class="cp-benefits reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag">Why cPanel</div>
                <h2>The control panel trusted by millions</h2>
                <p>cPanel is the industry standard for web hosting management — and every YottaSrc plan includes it.</p>
            </div>

            <div class="cp-benefits-grid">
                <div class="cp-security-card">
                    <div class="cp-security-icon"><i class="fas fa-th-large"></i></div>
                    <h4>Industry-Standard Panel</h4>
                    <p>cPanel is used by more hosting providers than any other control panel. A familiar, proven interface trusted worldwide.</p>
                </div>
                <div class="cp-security-card">
                    <div class="cp-security-icon icon-green"><i class="fas fa-mouse-pointer"></i></div>
                    <h4>Simple Site Management</h4>
                    <p>Manage files, emails, domains, DNS, and databases from a single visual dashboard — no command line required.</p>
                </div>
                <div class="cp-security-card">
                    <div class="cp-security-icon icon-purple"><i class="fas fa-th"></i></div>
                    <h4>1-Click App Installers</h4>
                    <p>Install WordPress, Joomla, Laravel, and 400+ more applications in seconds with Softaculous auto-installer.</p>
                </div>
                <div class="cp-security-card">
                    <div class="cp-security-icon icon-amber"><i class="fas fa-shield-alt"></i></div>
                    <h4>Built-In Security Tools</h4>
                    <p>SSL management, IP blocking, password-protected directories, Imunify360 firewall, and ModSecurity — all built right in.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ KEY FEATURES BENTO ═══════════════ -->
    <section class="bento-features reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag">Why cPanel Hosting</div>
                <h2>Everything you need to build, launch &amp; grow</h2>
                <p>Enterprise-grade tools included in every plan — from performance to security.</p>
            </div>

            <div class="bento-grid">
                <!-- Large card: LiteSpeed -->
                <div class="bento-card bento-lg">
                    <div class="bento-card-icon"><i class="fas fa-bolt"></i></div>
                    <h3>LiteSpeed Web Server</h3>
                    <p>Up to 12x faster than Apache. Built-in caching engine with LSCache for WordPress, Joomla, and more. Your pages load in milliseconds.</p>
                    <div class="bento-metrics">
                        <div class="bento-metric">
                            <span class="bento-metric-val">12x</span>
                            <span class="bento-metric-label">Faster than Apache</span>
                        </div>
                        <div class="bento-metric">
                            <span class="bento-metric-val">&lt;200ms</span>
                            <span class="bento-metric-label">Avg. Response Time</span>
                        </div>
                    </div>
                </div>

                <!-- Large card: Security -->
                <div class="bento-card bento-lg bento-green">
                    <div class="bento-card-icon icon-green"><i class="fas fa-shield-alt"></i></div>
                    <h3>Multi-Layer Security</h3>
                    <p>CloudLinux account isolation, Imunify360 AI-powered threat detection, free SSL certificates, and ModSecurity firewall — all active by default.</p>
                    <div class="bento-metrics">
                        <div class="bento-metric">
                            <span class="bento-metric-val">AI</span>
                            <span class="bento-metric-label">Malware Detection</span>
                        </div>
                        <div class="bento-metric">
                            <span class="bento-metric-val">24/7</span>
                            <span class="bento-metric-label">Firewall Active</span>
                        </div>
                    </div>
                </div>

                <!-- Small card: NVMe -->
                <div class="bento-card bento-sm">
                    <div class="bento-card-icon icon-purple"><i class="fas fa-hdd"></i></div>
                    <h4>NVMe SSD Storage</h4>
                    <p>Ultra-fast I/O for databases and file access.</p>
                </div>

                <!-- Small card: Dedicated Resources -->
                <div class="bento-card bento-sm">
                    <div class="bento-card-icon icon-amber"><i class="fas fa-microchip"></i></div>
                    <h4>Dedicated Resources</h4>
                    <p>Guaranteed CPU cores and RAM per account.</p>
                </div>

                <!-- Small card: Backups -->
                <div class="bento-card bento-sm">
                    <div class="bento-card-icon"><i class="fas fa-cloud-download-alt"></i></div>
                    <h4>JetBackup 5</h4>
                    <p>Automated daily backups with 1-click restore.</p>
                </div>

                <!-- Small card: Free SSL -->
                <div class="bento-card bento-sm">
                    <div class="bento-card-icon icon-green"><i class="fas fa-lock"></i></div>
                    <h4>Free SSL Certificates</h4>
                    <p>Auto-provisioned for every domain you add.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ cPANEL DASHBOARD PREVIEW ═══════════════ -->
    <section class="cp-dashboard-preview reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag">cPanel Dashboard</div>
                <h2>Manage your entire website from one screen</h2>
                <p>Files, emails, domains, databases, SSL certificates, and backups — every tool you need is organized inside your cPanel dashboard, ready in one click.</p>
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
                            <h4>File Manager &amp; FTP</h4>
                            <p>Upload, edit, and organize website files directly in your browser or via SFTP.</p>
                        </div>
                    </div>
                    <div class="cp-dash-feature">
                        <div class="cp-dash-feature-icon icon-green"><i class="fas fa-envelope"></i></div>
                        <div>
                            <h4>Email &amp; Domain Management</h4>
                            <p>Create email accounts, manage DNS zones, and add domains — all in one place.</p>
                        </div>
                    </div>
                    <div class="cp-dash-feature">
                        <div class="cp-dash-feature-icon icon-purple"><i class="fas fa-database"></i></div>
                        <div>
                            <h4>Databases &amp; Backups</h4>
                            <p>Create MySQL databases, access phpMyAdmin, and restore backups with JetBackup.</p>
                        </div>
                    </div>
                    <div class="cp-dash-feature">
                        <div class="cp-dash-feature-icon icon-amber"><i class="fas fa-lock"></i></div>
                        <div>
                            <h4>SSL &amp; Security Tools</h4>
                            <p>AutoSSL certificates, IP blocking, password directories, and Imunify360 — built in.</p>
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
                <div class="section-tag">What You Can Do</div>
                <h2>Everything from one place</h2>
                <p>cPanel puts every hosting tool at your fingertips — manage files, email, domains, databases, and more with just a few clicks.</p>
            </div>

            <div class="cp-tasks-grid">
                <div class="cp-task-card">
                    <div class="cp-task-icon"><i class="fas fa-folder-open"></i></div>
                    <h4>Manage Files</h4>
                    <p>Upload, edit, and organize files with the built-in File Manager or connect via FTP/SFTP.</p>
                    <ul class="cp-task-list">
                        <li>Drag &amp; drop uploads</li>
                        <li>Code editor built-in</li>
                        <li>Extract ZIP/TAR archives</li>
                    </ul>
                </div>
                <div class="cp-task-card">
                    <div class="cp-task-icon icon-green"><i class="fas fa-envelope"></i></div>
                    <h4>Create Email Accounts</h4>
                    <p>Set up professional email addresses on your domain with webmail, forwarding, and autoresponders.</p>
                    <ul class="cp-task-list">
                        <li>Unlimited email addresses</li>
                        <li>Webmail (Roundcube)</li>
                        <li>Spam filters &amp; DKIM</li>
                    </ul>
                </div>
                <div class="cp-task-card">
                    <div class="cp-task-icon icon-purple"><i class="fas fa-globe"></i></div>
                    <h4>Add Domains &amp; Subdomains</h4>
                    <p>Point multiple domains to your hosting, create subdomains, and manage DNS records.</p>
                    <ul class="cp-task-list">
                        <li>Addon &amp; parked domains</li>
                        <li>DNS Zone Editor</li>
                        <li>Redirect manager</li>
                    </ul>
                </div>
                <div class="cp-task-card">
                    <div class="cp-task-icon icon-amber"><i class="fas fa-database"></i></div>
                    <h4>MySQL Databases</h4>
                    <p>Create and manage MySQL/MariaDB databases with phpMyAdmin for visual administration.</p>
                    <ul class="cp-task-list">
                        <li>Create databases &amp; users</li>
                        <li>Import / Export SQL</li>
                        <li>phpMyAdmin included</li>
                    </ul>
                </div>
                <div class="cp-task-card">
                    <div class="cp-task-icon"><i class="fas fa-cloud-download-alt"></i></div>
                    <h4>Backup &amp; Restore</h4>
                    <p>JetBackup runs automated daily backups. Restore files, databases, or email with one click.</p>
                    <ul class="cp-task-list">
                        <li>Daily automated backups</li>
                        <li>Granular file restore</li>
                        <li>Download full backups</li>
                    </ul>
                </div>
                <div class="cp-task-card">
                    <div class="cp-task-icon icon-green"><i class="fas fa-th-large"></i></div>
                    <h4>Install 400+ Apps</h4>
                    <p>Use Softaculous to install WordPress, Joomla, Laravel, Magento, and 400+ more in one click.</p>
                    <ul class="cp-task-list">
                        <li>WordPress in 60 seconds</li>
                        <li>Auto-updates available</li>
                        <li>Staging environments</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ 1-CLICK INSTALLER ═══════════════ -->
    <section class="cp-installer reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag">1-Click Installer</div>
                <h2>Launch any app in seconds</h2>
                <p>Softaculous auto-installer with 400+ scripts. Install, update, and manage popular apps without touching code.</p>
            </div>

            <div class="cp-installer-grid">
                <div class="cp-installer-card">
                    <div class="cp-installer-logo"><i class="fab fa-wordpress"></i></div>
                    <h4>WordPress</h4>
                    <p>The world's most popular CMS. Build blogs, stores, portfolios — anything.</p>
                    <div class="cp-installer-meta"><span>60s install</span><span>Auto-updates</span></div>
                </div>
                <div class="cp-installer-card">
                    <div class="cp-installer-logo icon-green"><i class="fab fa-joomla"></i></div>
                    <h4>Joomla</h4>
                    <p>Flexible CMS for building advanced websites and online applications.</p>
                    <div class="cp-installer-meta"><span>60s install</span><span>Multilingual</span></div>
                </div>
                <div class="cp-installer-card">
                    <div class="cp-installer-logo icon-amber"><i class="fab fa-magento"></i></div>
                    <h4>Magento</h4>
                    <p>Enterprise-level e-commerce platform for scalable online stores.</p>
                    <div class="cp-installer-meta"><span>90s install</span><span>E-Commerce</span></div>
                </div>
                <div class="cp-installer-card">
                    <div class="cp-installer-logo icon-purple"><i class="fab fa-laravel"></i></div>
                    <h4>Laravel</h4>
                    <p>Modern PHP framework for building custom web applications fast.</p>
                    <div class="cp-installer-meta"><span>60s install</span><span>PHP Framework</span></div>
                </div>
            </div>

            <p class="cp-installer-footnote"><i class="fas fa-plus-circle"></i> Plus 400+ more apps including PrestaShop, Drupal, phpBB, Moodle, NextCloud, and more.</p>
        </div>
    </section>

    <!-- ═══════════════ EVERYTHING INCLUDED (FEATURES) ═══════════════ -->
    <section class="features-grid-section reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag">All-Inclusive</div>
                <h2>Premium tools, zero extra cost</h2>
                <p>Every plan comes fully loaded with the tools you need to succeed.</p>
            </div>

            <div class="swiper features-swiper" id="featuresSwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><div class="feature-card">
                        <div class="feature-icon"><i class="fas fa-microchip"></i></div>
                        <h4>Dedicated Resources</h4>
                        <p>Guaranteed CPU, RAM, and storage for optimal performance.</p>
                    </div></div>
                    <div class="swiper-slide"><div class="feature-card">
                        <div class="feature-icon icon-green"><i class="fas fa-shield-alt"></i></div>
                        <h4>CloudLinux</h4>
                        <p>Account isolation for server stability, security, and performance.</p>
                    </div></div>
                    <div class="swiper-slide"><div class="feature-card">
                        <div class="feature-icon icon-purple"><i class="fas fa-tachometer-alt"></i></div>
                        <h4>LiteSpeed</h4>
                        <p>Cutting-edge caching for blazing-fast page loads.</p>
                    </div></div>
                    <div class="swiper-slide"><div class="feature-card">
                        <div class="feature-icon icon-amber"><i class="fas fa-robot"></i></div>
                        <h4>Imunify360</h4>
                        <p>AI-powered malware detection, firewall, and threat prevention.</p>
                    </div></div>
                    <div class="swiper-slide"><div class="feature-card">
                        <div class="feature-icon"><i class="fas fa-cloud-download-alt"></i></div>
                        <h4>JetBackup 5</h4>
                        <p>Automated daily backups with easy one-click restoration.</p>
                    </div></div>
                    <div class="swiper-slide"><div class="feature-card">
                        <div class="feature-icon icon-green"><i class="fas fa-lock"></i></div>
                        <h4>Free SSL</h4>
                        <p>Unlimited SSL certificates for all your domains at no cost.</p>
                    </div></div>
                    <div class="swiper-slide"><div class="feature-card">
                        <div class="feature-icon icon-purple"><i class="fas fa-th"></i></div>
                        <h4>Softaculous</h4>
                        <p>One-click installer for 400+ apps, including WordPress.</p>
                    </div></div>
                    <div class="swiper-slide"><div class="feature-card">
                        <div class="feature-icon icon-amber"><i class="fas fa-paint-brush"></i></div>
                        <h4>SitePad &amp; SiteJet</h4>
                        <p>Drag-and-drop website builders for easy site creation.</p>
                    </div></div>
                    <div class="swiper-slide"><div class="feature-card">
                        <div class="feature-icon"><i class="fas fa-code"></i></div>
                        <h4>PHP 5.2 — 8.4</h4>
                        <p>Full version support with easy switching per domain.</p>
                    </div></div>
                    <div class="swiper-slide"><div class="feature-card">
                        <div class="feature-icon icon-green"><i class="fas fa-database"></i></div>
                        <h4>MySQL 8 / MariaDB</h4>
                        <p>Powerful optimized database engines for all workloads.</p>
                    </div></div>
                    <div class="swiper-slide"><div class="feature-card">
                        <div class="feature-icon icon-purple"><i class="fas fa-globe"></i></div>
                        <h4>Free Domain</h4>
                        <p>Get a free domain with select hosting plans.</p>
                    </div></div>
                    <div class="swiper-slide"><div class="feature-card">
                        <div class="feature-icon icon-amber"><i class="fas fa-undo"></i></div>
                        <h4>30-Day Money Back</h4>
                        <p>Risk-free hosting with a full refund policy for 30 days.</p>
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
                <div class="section-tag">Security &amp; Reliability</div>
                <h2>Protected around the clock</h2>
                <p>Every hosting account is secured by multiple defense layers — active 24/7, zero extra cost.</p>
            </div>

            <div class="cp-security-grid">
                <div class="cp-security-card">
                    <div class="cp-security-icon"><i class="fas fa-robot"></i></div>
                    <h4>Imunify360</h4>
                    <p>AI-powered malware scanning, proactive threat detection, and automatic cleanup — running continuously on every server.</p>
                </div>
                <div class="cp-security-card">
                    <div class="cp-security-icon icon-green"><i class="fas fa-user-shield"></i></div>
                    <h4>CloudLinux Isolation</h4>
                    <p>Each account runs in its own isolated CageFS environment. Other users on the server can never affect your site.</p>
                </div>
                <div class="cp-security-card">
                    <div class="cp-security-icon icon-purple"><i class="fas fa-lock"></i></div>
                    <h4>Free SSL / TLS</h4>
                    <p>AutoSSL provisions free certificates for every domain automatically. HTTPS everywhere — no configuration needed.</p>
                </div>
                <div class="cp-security-card">
                    <div class="cp-security-icon icon-amber"><i class="fas fa-fire-alt"></i></div>
                    <h4>ModSecurity WAF</h4>
                    <p>Web Application Firewall with curated rulesets blocks SQL injection, XSS, and common attack vectors in real time.</p>
                </div>
                <div class="cp-security-card">
                    <div class="cp-security-icon"><i class="fas fa-cloud-download-alt"></i></div>
                    <h4>Daily JetBackup</h4>
                    <p>Automated daily backups with granular restoration. Recover individual files, databases, or the full account anytime.</p>
                </div>
                <div class="cp-security-card">
                    <div class="cp-security-icon icon-green"><i class="fas fa-signal"></i></div>
                    <h4>99.9% Uptime SLA</h4>
                    <p>Redundant infrastructure with proactive monitoring and automatic failover ensures your site stays online.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ GETTING STARTED & MIGRATION ═══════════════ -->
    <section class="onboarding reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag">Get Started</div>
                <h2>Live in minutes, not hours</h2>
                <p>Launch a new site or migrate your existing one — our team handles the hard parts.</p>
            </div>

            <div class="onboarding-tracks">
                <div class="track">
                    <div class="track-icon"><i class="fas fa-rocket"></i></div>
                    <h3>New Website</h3>
                    <p>From sign-up to live in under 20 minutes</p>
                    <div class="track-steps">
                        <div class="track-step"><div class="step-num">1</div><div class="step-content"><h4>Create Account</h4><p>Sign up in 30 seconds — no credit card required</p></div></div>
                        <div class="track-step"><div class="step-num">2</div><div class="step-content"><h4>Choose Plan &amp; Location</h4><p>Pick from 20+ locations across 4 continents</p></div></div>
                        <div class="track-step"><div class="step-num">3</div><div class="step-content"><h4>Pay Your Way</h4><p>Card, PayPal, crypto, or 10+ payment methods</p></div></div>
                        <div class="track-step"><div class="step-num">4</div><div class="step-content"><h4>Install &amp; Go Live</h4><p>Use Softaculous to install WordPress in 60 seconds</p></div></div>
                    </div>
                </div>
                <div class="track">
                    <div class="track-icon"><i class="fas fa-truck"></i></div>
                    <h3>Free Migration</h3>
                    <p>We move everything — files, databases, emails, DNS</p>
                    <div class="track-steps">
                        <div class="track-step"><div class="step-num">1</div><div class="step-content"><h4>Buy Any Plan</h4><p>Choose the plan that fits your site</p></div></div>
                        <div class="track-step"><div class="step-num">2</div><div class="step-content"><h4>Open a Ticket</h4><p>Share your old host login details securely</p></div></div>
                        <div class="track-step"><div class="step-num">3</div><div class="step-content"><h4>We Handle It All</h4><p>Full migration with zero downtime guarantee</p></div></div>
                        <div class="track-step"><div class="step-num">4</div><div class="step-content"><h4>Verify &amp; Go Live</h4><p>Review your site — update DNS when ready</p></div></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ SOCIAL PROOF ═══════════════ -->
    <section class="social-proof reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag">Trusted Worldwide</div>
                <h2>Loved by 90,000+ clients</h2>
                <p>From solo developers to agencies — hear what our customers have to say.</p>
            </div>

            <div class="proof-stats">
                <div class="proof-stat">
                    <div class="stat-num">90K<span class="stat-suffix">+</span></div>
                    <div class="stat-text">Active Clients</div>
                </div>
                <div class="proof-stat">
                    <div class="stat-num">250K<span class="stat-suffix">+</span></div>
                    <div class="stat-text">Tickets Resolved</div>
                </div>
                <div class="proof-stat">
                    <div class="stat-num">2018</div>
                    <div class="stat-text">Founded</div>
                </div>
                <div class="proof-stat">
                    <div class="stat-num">30<span class="stat-suffix">+</span></div>
                    <div class="stat-text">Team Members</div>
                </div>
            </div>

            <div class="swiper testimonials-swiper" id="testimonialsSwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="testimonial-card">
                            <div class="testimonial-stars">&starf;&starf;&starf;&starf;&starf;</div>
                            <p class="testimonial-text">"I started with a bill of around $1.9, and now my bills exceed $600
                                per year, and I'm incredibly satisfied. Every issue gets resolved promptly, thanks to the
                                excellent customer support."</p>
                            <div class="testimonial-author">
                                <div class="testimonial-avatar">A</div>
                                <div>
                                    <div class="testimonial-name">Adel</div>
                                    <div class="testimonial-origin">Saudi Arabia</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="testimonial-card">
                            <div class="testimonial-stars">&starf;&starf;&starf;&starf;&starf;</div>
                            <p class="testimonial-text">"They just have the best support that I've ever seen. You never
                                expect to get a response instantly and that's just impressive! You can get servers anywhere
                                but you cannot find such good support."</p>
                            <div class="testimonial-author">
                                <div class="testimonial-avatar">M</div>
                                <div>
                                    <div class="testimonial-name">Mehrbod</div>
                                    <div class="testimonial-origin">Iran</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="testimonial-card">
                            <div class="testimonial-stars">&starf;&starf;&starf;&starf;&starf;</div>
                            <p class="testimonial-text">"The service that Yotta has provided is incredible and the support
                                they have given me migrating my websites from other hosting providers has been amazing, in
                                just a few minutes!"</p>
                            <div class="testimonial-author">
                                <div class="testimonial-avatar">J</div>
                                <div>
                                    <div class="testimonial-name">Juan Carlos</div>
                                    <div class="testimonial-origin">United Kingdom</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="testimonial-card">
                            <div class="testimonial-stars">&starf;&starf;&starf;&starf;&starf;</div>
                            <p class="testimonial-text">"I've been using YottaSrc for 3 years now. The uptime is flawless
                                and the speed is unmatched compared to my previous host. Migrating was painless —
                                their team handled everything."</p>
                            <div class="testimonial-author">
                                <div class="testimonial-avatar">D</div>
                                <div>
                                    <div class="testimonial-name">Dmitry</div>
                                    <div class="testimonial-origin">Germany</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="testimonial-card">
                            <div class="testimonial-stars">&starf;&starf;&starf;&starf;&starf;</div>
                            <p class="testimonial-text">"As a reseller, I need reliable infrastructure. YottaSrc delivers
                                consistently. My clients are happy with the performance and I love the competitive
                                pricing on renewal — no surprises."</p>
                            <div class="testimonial-author">
                                <div class="testimonial-avatar">F</div>
                                <div>
                                    <div class="testimonial-name">Fatima</div>
                                    <div class="testimonial-origin">UAE</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="testimonial-card">
                            <div class="testimonial-stars">&starf;&starf;&starf;&starf;&starf;</div>
                            <p class="testimonial-text">"Moved 12 WordPress sites to YottaSrc last year. Zero downtime
                                during migration and the LiteSpeed caching makes everything blazing fast. Their support
                                team is genuinely knowledgeable."</p>
                            <div class="testimonial-author">
                                <div class="testimonial-avatar">R</div>
                                <div>
                                    <div class="testimonial-name">Ricardo</div>
                                    <div class="testimonial-origin">Brazil</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="testimonial-card">
                            <div class="testimonial-stars">&starf;&starf;&starf;&starf;&starf;</div>
                            <p class="testimonial-text">"The cPanel hosting is top notch. SSL, backups, email — everything
                                just works. I used to spend hours on server issues with other providers. With Yotta,
                                I focus on building my business."</p>
                            <div class="testimonial-author">
                                <div class="testimonial-avatar">S</div>
                                <div>
                                    <div class="testimonial-name">Sarah</div>
                                    <div class="testimonial-origin">Egypt</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="testimonial-card">
                            <div class="testimonial-stars">&starf;&starf;&starf;&starf;&starf;</div>
                            <p class="testimonial-text">"Best VPS provider I've used. The setup was instant, and the
                                performance is rock solid. I run a Telegram bot and a Node.js app on the same VPS
                                with zero issues for over a year."</p>
                            <div class="testimonial-author">
                                <div class="testimonial-avatar">O</div>
                                <div>
                                    <div class="testimonial-name">Omar</div>
                                    <div class="testimonial-origin">Jordan</div>
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
                    Rated Excellent on Trustpilot — Read all 144+ reviews
                    <i class="fas fa-external-link-alt trustpilot-external-icon"></i>
                </a>
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
                        <div class="faq-item"><button class="faq-question"><span>How long does it take to activate my order?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>Orders are typically activated within 2 to 20 minutes. If your service is not activated within this time, please open a ticket.</p></div></div>
                        <div class="faq-item"><button class="faq-question"><span>Does hosting include a control panel?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>Yes, all our hosting plans include the latest version of cPanel, allowing you to manage your website, databases, emails, and more.</p></div></div>
                        <div class="faq-item"><button class="faq-question"><span>Do you offer a website builder tool?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>Yes, we provide SitePad and SiteJet — easy-to-use drag-and-drop website builders included in all hosting plans.</p></div></div>
                        <div class="faq-item"><button class="faq-question"><span>Do you allow adult/porn content?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>No, adult content is strictly prohibited on our hosting platform as outlined in our Terms of Service.</p></div></div>
                    </div>

                    <div class="faq-panel" id="faq-technical">
                        <div class="faq-item"><button class="faq-question"><span>What are the requirements for hosting a WordPress website?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>PHP version 7.4 or greater, MySQL version 5.6 or greater or MariaDB version 10.1 or greater, and HTTPS support. All included with our plans.</p></div></div>
                        <div class="faq-item"><button class="faq-question"><span>Which PHP versions are supported?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>We support PHP versions from 5.2 to 8.4 with easy per-domain switching via cPanel. Node.js is also available.</p></div></div>
                        <div class="faq-item"><button class="faq-question"><span>Can I upgrade my hosting plan?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>Yes, you can upgrade or downgrade your plan anytime from your client dashboard, or contact our sales team for assistance.</p></div></div>
                        <div class="faq-item"><button class="faq-question"><span>Do you offer free website migration?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>Yes, we offer free migration for all hosting plans. Simply open a ticket after purchase and our team will handle everything — files, databases, emails, and DNS.</p></div></div>
                    </div>

                    <div class="faq-panel" id="faq-billing">
                        <div class="faq-item"><button class="faq-question"><span>Can I get a refund for unused services?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>Refunds are available under specific conditions outlined in our Refund Policy. We offer a 30-day money-back guarantee on hosting plans.</p></div></div>
                        <div class="faq-item"><button class="faq-question"><span>What payment methods do you accept?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>We accept credit/debit cards, PayPal, cryptocurrency, and 10+ other payment methods for your convenience.</p></div></div>
                        <div class="faq-item"><button class="faq-question"><span>Does the price increase on renewal?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>No — you pay the same price on renewal. No surprises, no hidden fees, ever.</p></div></div>
                        <div class="faq-item"><button class="faq-question"><span>Can I get a postponement of payment?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>Yes, you can request a payment extension by contacting Sales support before your due date.</p></div></div>
                    </div>
                </div>
            </div>

            <div class="faq-actions">
                <a href="<?php echo e(SITE_URL); ?>/contact-us/" class="btn-primary"><i class="fas fa-headset"></i> Open a Ticket</a>
                <a href="<?php echo e(SITE_URL); ?>/faq" class="btn-secondary">Browse All FAQ <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </section>

    <!-- ═══════════════ BOTTOM CTA ═══════════════ -->
    <section class="promo-cta reveal">
        <div class="container">
            <div class="promo-cta-inner">
                <div class="promo-cta-glow"></div>
                <div class="promo-cta-icon"><i class="fas fa-rocket"></i></div>
                <h2>Ready to launch your website?</h2>
                <p>Get started with cPanel hosting from €0.83/month. Free domain, free SSL, free migration.</p>
                <a href="#plans" class="btn-primary">View Plans <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
