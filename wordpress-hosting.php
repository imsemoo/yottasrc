<?php
/**
 * YottaSrc — WordPress Hosting
 * ==============================
 * Managed WordPress Hosting — optimized stack for WordPress sites.
 */
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/topbar.php';
?>

    <!-- ═══════════════ HERO ═══════════════ -->
    <section class="page-hero wp-hero">
        <div class="container">
            <div class="page-hero-split">
                <div class="page-hero-content">
                    <div class="page-breadcrumb">
                        <a href="<?php echo e(SITE_URL); ?>/">Home</a>
                        <i class="fas fa-chevron-right"></i>
                        <span>WordPress Hosting</span>
                    </div>
                    <h1>Managed WordPress Hosting — <span class="highlight">Built for Speed</span></h1>
                    <p class="page-hero-desc">
                        WordPress hosting optimized from the ground up. LiteSpeed with LSCache, NVMe SSD storage, automatic updates, malware protection, and daily backups — all managed for you across 20+ global locations.
                    </p>
                    <div class="page-hero-ctas">
                        <a href="#plans" class="btn-primary">View Plans <i class="fas fa-arrow-down"></i></a>
                        <a href="<?php echo e(SITE_URL); ?>/contact-us/" class="btn-secondary"><i class="fas fa-headset"></i> Talk to Sales</a>
                    </div>
                    <div class="page-hero-badges">
                        <div class="hero-badge-item"><i class="fas fa-check"></i> LiteSpeed + LSCache</div>
                        <div class="hero-badge-item"><i class="fas fa-check"></i> Auto Updates &amp; Backups</div>
                        <div class="hero-badge-item"><i class="fas fa-check"></i> Malware Protection</div>
                        <div class="hero-badge-item"><i class="fas fa-check"></i> 1-Click WordPress Install</div>
                    </div>
                </div>
                <div class="page-hero-visual">
                    <svg viewBox="0 0 440 400" fill="none" xmlns="http://www.w3.org/2000/svg" class="hero-illustration" aria-label="WordPress dashboard illustration">
                        <!-- Window Frame -->
                        <rect x="20" y="20" width="400" height="360" rx="16" fill="var(--bg-card)" stroke="var(--border-primary)" stroke-width="1.5"/>
                        <rect x="20" y="20" width="400" height="38" rx="16" fill="var(--bg-tertiary)"/>
                        <rect x="20" y="42" width="400" height="16" fill="var(--bg-tertiary)"/>
                        <circle cx="42" cy="39" r="5" fill="var(--brand-error)" opacity="0.6"/>
                        <circle cx="58" cy="39" r="5" fill="var(--brand-warning)" opacity="0.6"/>
                        <circle cx="74" cy="39" r="5" fill="var(--brand-secondary)" opacity="0.6"/>
                        <text x="220" y="44" text-anchor="middle" fill="var(--text-tertiary)" font-size="11" font-family="var(--font-mono)" font-weight="600" opacity="0.6">WordPress — Dashboard</text>

                        <!-- Sidebar -->
                        <rect x="20" y="58" width="100" height="322" fill="var(--bg-tertiary)" opacity="0.5"/>
                        <line x1="120" y1="58" x2="120" y2="380" stroke="var(--border-primary)" stroke-width="1"/>
                        <!-- WP logo -->
                        <circle cx="70" cy="78" r="12" fill="var(--brand-primary)" opacity="0.15"/>
                        <text x="70" y="83" text-anchor="middle" fill="var(--brand-primary)" font-size="14" font-family="var(--font-body)" font-weight="800" opacity="0.6">W</text>
                        <!-- Nav items -->
                        <rect x="32" y="100" width="76" height="7" rx="3" fill="var(--brand-primary)" opacity="0.18"/>
                        <rect x="32" y="118" width="60" height="6" rx="3" fill="var(--text-tertiary)" opacity="0.12"/>
                        <rect x="32" y="134" width="68" height="6" rx="3" fill="var(--text-tertiary)" opacity="0.12"/>
                        <rect x="32" y="150" width="52" height="6" rx="3" fill="var(--text-tertiary)" opacity="0.12"/>
                        <rect x="32" y="166" width="72" height="6" rx="3" fill="var(--text-tertiary)" opacity="0.12"/>
                        <rect x="32" y="182" width="56" height="6" rx="3" fill="var(--text-tertiary)" opacity="0.12"/>

                        <!-- Dashboard Stats -->
                        <text x="134" y="82" fill="var(--text-secondary)" font-size="10" font-family="var(--font-display)" font-weight="700" opacity="0.7">At a Glance</text>

                        <!-- Stat card 1: Posts -->
                        <rect x="134" y="92" width="112" height="56" rx="8" fill="var(--bg-tertiary)" stroke="var(--border-primary)" stroke-width="0.8"/>
                        <text x="148" y="118" fill="var(--brand-primary)" font-size="18" font-family="var(--font-display)" font-weight="800" opacity="0.7">47</text>
                        <text x="148" y="134" fill="var(--text-tertiary)" font-size="7.5" font-family="var(--font-mono)" opacity="0.5">Published Posts</text>

                        <!-- Stat card 2: Pages -->
                        <rect x="258" y="92" width="112" height="56" rx="8" fill="var(--bg-tertiary)" stroke="var(--border-primary)" stroke-width="0.8"/>
                        <text x="272" y="118" fill="var(--brand-secondary)" font-size="18" font-family="var(--font-display)" font-weight="800" opacity="0.7">12</text>
                        <text x="272" y="134" fill="var(--text-tertiary)" font-size="7.5" font-family="var(--font-mono)" opacity="0.5">Pages</text>

                        <!-- Performance card -->
                        <text x="134" y="172" fill="var(--text-secondary)" font-size="10" font-family="var(--font-display)" font-weight="700" opacity="0.7">Performance</text>
                        <rect x="134" y="182" width="236" height="72" rx="10" fill="var(--bg-tertiary)" stroke="var(--border-primary)" stroke-width="0.8"/>
                        <!-- Mini chart bars -->
                        <rect x="152" y="224" width="12" height="20" rx="2" fill="var(--brand-primary)" opacity="0.3"/>
                        <rect x="170" y="214" width="12" height="30" rx="2" fill="var(--brand-primary)" opacity="0.4"/>
                        <rect x="188" y="208" width="12" height="36" rx="2" fill="var(--brand-primary)" opacity="0.5"/>
                        <rect x="206" y="200" width="12" height="44" rx="2" fill="var(--brand-primary)" opacity="0.6"/>
                        <rect x="224" y="204" width="12" height="40" rx="2" fill="var(--brand-primary)" opacity="0.55"/>
                        <rect x="242" y="196" width="12" height="48" rx="2" fill="var(--brand-primary)" opacity="0.7"/>
                        <rect x="260" y="192" width="12" height="52" rx="2" fill="var(--brand-secondary)" opacity="0.8">
                            <animate attributeName="opacity" values="0.6;0.8;0.6" dur="2s" repeatCount="indefinite"/>
                        </rect>
                        <text x="300" y="210" fill="var(--brand-secondary)" font-size="14" font-family="var(--font-display)" font-weight="800" opacity="0.7">A+</text>
                        <text x="300" y="224" fill="var(--text-tertiary)" font-size="7" font-family="var(--font-mono)" opacity="0.5">PageSpeed</text>

                        <!-- Plugins section -->
                        <text x="134" y="278" fill="var(--text-secondary)" font-size="10" font-family="var(--font-display)" font-weight="700" opacity="0.7">Active Plugins</text>
                        <rect x="134" y="288" width="112" height="36" rx="8" fill="var(--bg-tertiary)" stroke="var(--border-primary)" stroke-width="0.8"/>
                        <text x="148" y="310" fill="var(--text-secondary)" font-size="8" font-family="var(--font-body)" font-weight="600" opacity="0.6">LSCache</text>
                        <circle cx="228" cy="306" r="6" fill="var(--brand-secondary)" opacity="0.3"/>
                        <text x="228" y="309" text-anchor="middle" fill="var(--brand-secondary)" font-size="7" font-family="var(--font-mono)" font-weight="700" opacity="0.7">✓</text>

                        <rect x="258" y="288" width="112" height="36" rx="8" fill="var(--bg-tertiary)" stroke="var(--border-primary)" stroke-width="0.8"/>
                        <text x="272" y="310" fill="var(--text-secondary)" font-size="8" font-family="var(--font-body)" font-weight="600" opacity="0.6">Imunify360</text>
                        <circle cx="352" cy="306" r="6" fill="var(--brand-secondary)" opacity="0.3"/>
                        <text x="352" y="309" text-anchor="middle" fill="var(--brand-secondary)" font-size="7" font-family="var(--font-mono)" font-weight="700" opacity="0.7">✓</text>

                        <!-- Floating badges -->
                        <rect x="350" y="2" width="86" height="36" rx="10" fill="var(--bg-card)" stroke="var(--border-primary)" stroke-width="1">
                            <animate attributeName="y" values="2;8;2" dur="5s" repeatCount="indefinite"/>
                        </rect>
                        <text x="370" y="17" fill="var(--text-tertiary)" font-size="7" font-family="var(--font-mono)" font-weight="600" opacity="0.6">
                            TTFB
                            <animate attributeName="y" values="17;23;17" dur="5s" repeatCount="indefinite"/>
                        </text>
                        <text x="370" y="31" fill="var(--brand-secondary)" font-size="13" font-family="var(--font-display)" font-weight="800" opacity="0.8">
                            &lt;120ms
                            <animate attributeName="y" values="31;37;31" dur="5s" repeatCount="indefinite"/>
                        </text>

                        <rect x="0" y="320" width="82" height="36" rx="10" fill="var(--bg-card)" stroke="var(--border-primary)" stroke-width="1">
                            <animate attributeName="y" values="320;314;320" dur="6s" repeatCount="indefinite"/>
                        </rect>
                        <text x="16" y="335" fill="var(--text-tertiary)" font-size="7" font-family="var(--font-mono)" font-weight="600" opacity="0.6">
                            CACHE
                            <animate attributeName="y" values="335;329;335" dur="6s" repeatCount="indefinite"/>
                        </text>
                        <text x="16" y="349" fill="var(--brand-primary)" font-size="13" font-family="var(--font-display)" font-weight="800" opacity="0.8">
                            HIT
                            <animate attributeName="y" values="349;343;349" dur="6s" repeatCount="indefinite"/>
                        </text>
                    </svg>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ POWERED BY STRIP ═══════════════ -->
    <section class="partners">
        <div class="container">
            <span class="partners-label">Optimized With</span>
            <div class="partners-logos">
                <span class="partner-logo"><i class="fab fa-wordpress"></i> WordPress</span>
                <span class="partner-logo"><i class="fas fa-bolt"></i> LiteSpeed</span>
                <span class="partner-logo"><i class="fas fa-shield-alt"></i> Imunify360</span>
                <span class="partner-logo"><i class="fas fa-hdd"></i> NVMe SSD</span>
                <span class="partner-logo"><i class="fas fa-cloud-download-alt"></i> JetBackup</span>
                <span class="partner-logo"><i class="fas fa-server"></i> cPanel</span>
                <span class="partner-logo"><i class="fas fa-th"></i> Softaculous</span>
            </div>
        </div>
    </section>

    <!-- ═══════════════ PRICING PLANS ═══════════════ -->
    <section class="plans reveal" id="plans">
        <div class="container">
            <div class="section-header">
                <div class="section-tag">Pricing</div>
                <h2>WordPress Hosting Plans</h2>
                <p>Optimized for WordPress. Same price on renewal. 30-day money-back guarantee.</p>
            </div>

            <div class="plans-panel active" data-tab="wp-hosting">
                <div class="swiper plans-swiper">
                    <div class="swiper-wrapper">
                        <!-- WP Starter -->
                        <div class="swiper-slide"><div class="plan-card">
                            <div class="plan-head"><div class="plan-name">WP Starter</div><span class="plan-save">Save 44%</span></div>
                            <div class="plan-target">For personal blogs</div>
                            <div class="plan-price">
                                <span class="old-price">€2.99</span>
                                <span class="current-price"><span class="currency">€</span><span class="amount">1.67</span><span class="period">EUR / mo</span></span>
                            </div>
                            <div class="plan-renewal"><i class="fas fa-check"></i> Same price on renewal</div>
                            <button class="plan-cta" data-href="<?php echo e(CP_URL); ?>/cart.php?a=add&pid=2">Choose Plan</button>
                            <div class="plan-resources">
                                <div class="plan-res"><i class="fas fa-microchip"></i><span class="res-val">2</span><span class="res-label">CPU Cores</span></div>
                                <div class="plan-res"><i class="fas fa-memory"></i><span class="res-val">2 GB</span><span class="res-label">RAM</span></div>
                                <div class="plan-res"><i class="fas fa-hdd"></i><span class="res-val">10 GB</span><span class="res-label">NVMe SSD</span></div>
                                <div class="plan-res"><i class="fas fa-tachometer-alt"></i><span class="res-val">100 MB/s</span><span class="res-label">I/O Speed</span></div>
                            </div>
                            <div class="plan-divider"><span>WordPress Optimized</span></div>
                            <ul class="plan-features">
                                <li><i class="fab fa-wordpress"></i> 1-Click WP Install</li>
                                <li><i class="fas fa-bolt"></i> LiteSpeed + LSCache</li>
                                <li><i class="fas fa-globe"></i> Free Domain &amp; SSL</li>
                                <li><i class="fas fa-shield-alt"></i> Malware Protection</li>
                                <li><i class="fas fa-cloud-download-alt"></i> Daily Backups</li>
                                <li><i class="fas fa-sync-alt"></i> Auto Core Updates</li>
                                <li><i class="fas fa-map-marker-alt"></i> 20+ Locations</li>
                            </ul>
                        </div></div>

                        <!-- WP Premium (Popular) -->
                        <div class="swiper-slide"><div class="plan-card popular">
                            <div class="plan-badge">Most Popular</div>
                            <div class="plan-head"><div class="plan-name">WP Premium</div><span class="plan-save">Save 43%</span></div>
                            <div class="plan-target">For growing sites</div>
                            <div class="plan-price">
                                <span class="old-price">€5.99</span>
                                <span class="current-price"><span class="currency">€</span><span class="amount">3.39</span><span class="period">EUR / mo</span></span>
                            </div>
                            <div class="plan-renewal"><i class="fas fa-check"></i> Same price on renewal</div>
                            <button class="plan-cta" data-href="<?php echo e(CP_URL); ?>/cart.php?a=add&pid=4">Choose Plan</button>
                            <div class="plan-resources">
                                <div class="plan-res"><i class="fas fa-microchip"></i><span class="res-val">3</span><span class="res-label">CPU Cores</span></div>
                                <div class="plan-res"><i class="fas fa-memory"></i><span class="res-val">3 GB</span><span class="res-label">RAM</span></div>
                                <div class="plan-res"><i class="fas fa-hdd"></i><span class="res-val">25 GB</span><span class="res-label">NVMe SSD</span></div>
                                <div class="plan-res"><i class="fas fa-tachometer-alt"></i><span class="res-val">300 MB/s</span><span class="res-label">I/O Speed</span></div>
                            </div>
                            <div class="plan-divider"><span>WordPress Optimized</span></div>
                            <ul class="plan-features">
                                <li><i class="fab fa-wordpress"></i> 1-Click WP Install</li>
                                <li><i class="fas fa-bolt"></i> LiteSpeed + LSCache</li>
                                <li><i class="fas fa-globe"></i> Free .com / .org / .net</li>
                                <li><i class="fas fa-shield-alt"></i> Malware Protection</li>
                                <li><i class="fas fa-cloud-download-alt"></i> Daily Backups</li>
                                <li><i class="fas fa-sync-alt"></i> Auto Core Updates</li>
                                <li><i class="fas fa-map-marker-alt"></i> 20+ Locations</li>
                            </ul>
                        </div></div>

                        <!-- WP Business -->
                        <div class="swiper-slide"><div class="plan-card">
                            <div class="plan-head"><div class="plan-name">WP Business</div><span class="plan-save">Save 43%</span></div>
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
                                <div class="plan-res"><i class="fas fa-hdd"></i><span class="res-val">75 GB</span><span class="res-label">NVMe SSD</span></div>
                                <div class="plan-res"><i class="fas fa-tachometer-alt"></i><span class="res-val">900 MB/s</span><span class="res-label">I/O Speed</span></div>
                            </div>
                            <div class="plan-divider"><span>WordPress Optimized</span></div>
                            <ul class="plan-features">
                                <li><i class="fab fa-wordpress"></i> 1-Click WP Install</li>
                                <li><i class="fas fa-bolt"></i> LiteSpeed + LSCache</li>
                                <li><i class="fas fa-globe"></i> Free .com / .org / .net</li>
                                <li><i class="fas fa-shield-alt"></i> Malware Protection</li>
                                <li><i class="fas fa-cloud-download-alt"></i> Daily Backups</li>
                                <li><i class="fas fa-sync-alt"></i> Auto Core Updates</li>
                                <li><i class="fas fa-map-marker-alt"></i> 20+ Locations</li>
                            </ul>
                        </div></div>

                        <!-- WP Enterprise -->
                        <div class="swiper-slide"><div class="plan-card">
                            <div class="plan-head"><div class="plan-name">WP Enterprise</div><span class="plan-save">Save 42%</span></div>
                            <div class="plan-target">For high-traffic sites</div>
                            <div class="plan-price">
                                <span class="old-price">€21.99</span>
                                <span class="current-price"><span class="currency">€</span><span class="amount">12.72</span><span class="period">EUR / mo</span></span>
                            </div>
                            <div class="plan-renewal"><i class="fas fa-check"></i> Same price on renewal</div>
                            <button class="plan-cta" data-href="<?php echo e(CP_URL); ?>/cart.php?a=add&pid=7">Choose Plan</button>
                            <div class="plan-resources">
                                <div class="plan-res"><i class="fas fa-microchip"></i><span class="res-val">5</span><span class="res-label">CPU Cores</span></div>
                                <div class="plan-res"><i class="fas fa-memory"></i><span class="res-val">5 GB</span><span class="res-label">RAM</span></div>
                                <div class="plan-res"><i class="fas fa-hdd"></i><span class="res-val">125 GB</span><span class="res-label">NVMe SSD</span></div>
                                <div class="plan-res"><i class="fas fa-tachometer-alt"></i><span class="res-val">1.5 GB/s</span><span class="res-label">I/O Speed</span></div>
                            </div>
                            <div class="plan-divider"><span>WordPress Optimized</span></div>
                            <ul class="plan-features">
                                <li><i class="fab fa-wordpress"></i> 1-Click WP Install</li>
                                <li><i class="fas fa-bolt"></i> LiteSpeed + LSCache</li>
                                <li><i class="fas fa-globe"></i> Free .com / .org / .net</li>
                                <li><i class="fas fa-shield-alt"></i> Malware Protection</li>
                                <li><i class="fas fa-cloud-download-alt"></i> Daily Backups</li>
                                <li><i class="fas fa-sync-alt"></i> Auto Core Updates</li>
                                <li><i class="fas fa-map-marker-alt"></i> 20+ Locations</li>
                            </ul>
                        </div></div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ WORDPRESS OPTIMIZED FEATURES ═══════════════ -->
    <section class="wp-features reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag">WordPress Optimized</div>
                <h2>Built for WordPress performance</h2>
                <p>Every layer of our stack is tuned specifically for WordPress — from server to cache to security.</p>
            </div>

            <div class="bento-grid">
                <div class="bento-card bento-sm">
                    <div class="bento-card-icon"><i class="fas fa-bolt"></i></div>
                    <h4>LiteSpeed + LSCache</h4>
                    <p>Server-level caching for WordPress. Pages served from cache without touching PHP — sub-200ms response times.</p>
                </div>

                <div class="bento-card bento-sm">
                    <div class="bento-card-icon icon-green"><i class="fas fa-sync-alt"></i></div>
                    <h4>Automatic Updates</h4>
                    <p>WordPress core updates applied automatically. Always run the latest stable version without lifting a finger.</p>
                </div>

                <div class="bento-card bento-sm">
                    <div class="bento-card-icon icon-purple"><i class="fas fa-shield-alt"></i></div>
                    <h4>Malware Protection</h4>
                    <p>Imunify360 AI-powered scanning blocks threats before they reach your WordPress install.</p>
                </div>

                <div class="bento-card bento-sm">
                    <div class="bento-card-icon icon-amber"><i class="fas fa-cloud-download-alt"></i></div>
                    <h4>Daily Backups</h4>
                    <p>Automatic daily backups via JetBackup with one-click restore from cPanel.</p>
                </div>

                <div class="bento-card bento-sm">
                    <div class="bento-card-icon"><i class="fas fa-hdd"></i></div>
                    <h4>NVMe SSD Storage</h4>
                    <p>Ultra-fast storage for your WordPress database and media files.</p>
                </div>

                <div class="bento-card bento-sm">
                    <div class="bento-card-icon icon-green"><i class="fas fa-th"></i></div>
                    <h4>1-Click Install</h4>
                    <p>Deploy WordPress in seconds via Softaculous — themes and plugins included.</p>
                </div>

                <div class="bento-card bento-sm">
                    <div class="bento-card-icon icon-blue"><i class="fas fa-globe"></i></div>
                    <h4>Free CDN</h4>
                    <p>Integrated content delivery network for faster global page loads.</p>
                </div>

                <div class="bento-card bento-sm">
                    <div class="bento-card-icon icon-rose"><i class="fas fa-database"></i></div>
                    <h4>Optimized MySQL</h4>
                    <p>Tuned MariaDB with query caching and InnoDB optimization for faster WordPress database queries.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ WORDPRESS DASHBOARD PREVIEW ═══════════════ -->
    <section class="wp-preview reveal">
        <div class="container">
            <div class="global-layout">
                <div class="global-content">
                    <div class="section-tag">Dashboard</div>
                    <h2 class="global-title">Manage everything from cPanel</h2>
                    <p class="global-desc">Your WordPress hosting comes with the full cPanel dashboard — manage files, databases, emails, domains, SSL certificates, and backups from one intuitive interface. No command line required.</p>
                    <div class="wp-preview-features">
                        <div class="wp-preview-item"><i class="fas fa-check-circle"></i> WordPress Manager (Softaculous)</div>
                        <div class="wp-preview-item"><i class="fas fa-check-circle"></i> File Manager &amp; FTP</div>
                        <div class="wp-preview-item"><i class="fas fa-check-circle"></i> phpMyAdmin Database Access</div>
                        <div class="wp-preview-item"><i class="fas fa-check-circle"></i> Email Account Management</div>
                        <div class="wp-preview-item"><i class="fas fa-check-circle"></i> SSL / TLS Configuration</div>
                        <div class="wp-preview-item"><i class="fas fa-check-circle"></i> JetBackup Restore</div>
                    </div>
                </div>
                <div class="global-visual">
                    <svg viewBox="0 0 400 300" fill="none" xmlns="http://www.w3.org/2000/svg" class="wp-dash-illustration">
                        <rect x="10" y="10" width="380" height="280" rx="14" fill="var(--bg-card)" stroke="var(--border-primary)" stroke-width="1.5"/>
                        <rect x="10" y="10" width="380" height="32" rx="14" fill="var(--bg-tertiary)"/>
                        <rect x="10" y="30" width="380" height="12" fill="var(--bg-tertiary)"/>
                        <circle cx="30" cy="26" r="4" fill="var(--brand-error)" opacity="0.5"/>
                        <circle cx="42" cy="26" r="4" fill="var(--brand-warning)" opacity="0.5"/>
                        <circle cx="54" cy="26" r="4" fill="var(--brand-secondary)" opacity="0.5"/>
                        <!-- Grid of dashboard tiles -->
                        <rect x="24" y="56" width="110" height="60" rx="8" fill="var(--bg-tertiary)" stroke="var(--border-primary)" stroke-width="0.8"/>
                        <text x="79" y="82" text-anchor="middle" fill="var(--brand-primary)" font-size="14" opacity="0.6">📁</text>
                        <text x="79" y="102" text-anchor="middle" fill="var(--text-tertiary)" font-size="7.5" font-family="var(--font-mono)" opacity="0.5">File Manager</text>
                        <rect x="146" y="56" width="110" height="60" rx="8" fill="var(--bg-tertiary)" stroke="var(--border-primary)" stroke-width="0.8"/>
                        <text x="201" y="82" text-anchor="middle" fill="var(--brand-secondary)" font-size="14" opacity="0.6">✉</text>
                        <text x="201" y="102" text-anchor="middle" fill="var(--text-tertiary)" font-size="7.5" font-family="var(--font-mono)" opacity="0.5">Email Accounts</text>
                        <rect x="268" y="56" width="110" height="60" rx="8" fill="var(--bg-tertiary)" stroke="var(--border-primary)" stroke-width="0.8"/>
                        <text x="323" y="82" text-anchor="middle" fill="var(--brand-accent)" font-size="14" opacity="0.6">⛃</text>
                        <text x="323" y="102" text-anchor="middle" fill="var(--text-tertiary)" font-size="7.5" font-family="var(--font-mono)" opacity="0.5">Databases</text>
                        <rect x="24" y="128" width="110" height="60" rx="8" fill="var(--bg-tertiary)" stroke="var(--border-primary)" stroke-width="0.8"/>
                        <text x="79" y="154" text-anchor="middle" fill="var(--brand-warning)" font-size="14" opacity="0.6">🔒</text>
                        <text x="79" y="174" text-anchor="middle" fill="var(--text-tertiary)" font-size="7.5" font-family="var(--font-mono)" opacity="0.5">SSL / TLS</text>
                        <rect x="146" y="128" width="110" height="60" rx="8" fill="var(--bg-tertiary)" stroke="var(--border-primary)" stroke-width="0.8"/>
                        <text x="201" y="154" text-anchor="middle" fill="var(--brand-primary)" font-size="14" opacity="0.6">💾</text>
                        <text x="201" y="174" text-anchor="middle" fill="var(--text-tertiary)" font-size="7.5" font-family="var(--font-mono)" opacity="0.5">Backups</text>
                        <rect x="268" y="128" width="110" height="60" rx="8" fill="var(--bg-tertiary)" stroke="var(--border-primary)" stroke-width="0.8"/>
                        <text x="323" y="154" text-anchor="middle" fill="var(--brand-secondary)" font-size="14" opacity="0.6">🌐</text>
                        <text x="323" y="174" text-anchor="middle" fill="var(--text-tertiary)" font-size="7.5" font-family="var(--font-mono)" opacity="0.5">Domains</text>
                        <!-- Usage bars -->
                        <text x="24" y="210" fill="var(--text-tertiary)" font-size="7" font-family="var(--font-mono)" opacity="0.5">Disk Usage</text>
                        <rect x="24" y="216" width="354" height="6" rx="3" fill="var(--bg-tertiary)"/>
                        <rect x="24" y="216" width="150" height="6" rx="3" fill="var(--brand-primary)" opacity="0.5"/>
                        <text x="24" y="240" fill="var(--text-tertiary)" font-size="7" font-family="var(--font-mono)" opacity="0.5">Bandwidth</text>
                        <rect x="24" y="246" width="354" height="6" rx="3" fill="var(--bg-tertiary)"/>
                        <rect x="24" y="246" width="80" height="6" rx="3" fill="var(--brand-secondary)" opacity="0.5"/>
                    </svg>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ GLOBAL LOCATIONS ═══════════════ -->
<?php
$dc_heading = 'Deploy closer to your audience';
include __DIR__ . '/includes/section-dc-showcase.php';
?>

    <!-- ═══════════════ ClouDNS ═══════════════ -->
<?php include __DIR__ . '/includes/section-cloudns.php'; ?>

    <!-- ═══════════════ MailChannels ═══════════════ -->
<?php include __DIR__ . '/includes/section-mailchannels.php'; ?>

    <!-- ═══════════════ COMPETITORS ═══════════════ -->
<?php include __DIR__ . '/includes/section-competitors.php'; ?>

    <!-- ═══════════════ FAQ ═══════════════ -->
    <section class="faq-section reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag">FAQ</div>
                <h2>WordPress Hosting FAQ</h2>
                <p>Can't find your answer? Open a support ticket — we respond in under 10 minutes.</p>
            </div>

            <div class="faq-layout">
                <div class="faq-tabs">
                    <button class="faq-tab active" data-faq-target="faq-wp-general"><i class="fas fa-server"></i> General</button>
                    <button class="faq-tab" data-faq-target="faq-wp-technical"><i class="fas fa-cogs"></i> Technical</button>
                    <button class="faq-tab" data-faq-target="faq-wp-billing"><i class="fas fa-credit-card"></i> Billing</button>
                </div>

                <div class="faq-panels">
                    <div class="faq-panel active" id="faq-wp-general">
                        <div class="faq-item"><button class="faq-question"><span>Is WordPress pre-installed?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>WordPress can be installed with a single click via Softaculous after activating your hosting plan. The process takes about 30 seconds.</p></div></div>
                        <div class="faq-item"><button class="faq-question"><span>Can I migrate my existing WordPress site?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>Yes, we offer free managed migration for all WordPress hosting plans. Simply open a ticket and our team will handle everything — files, database, and configuration.</p></div></div>
                        <div class="faq-item"><button class="faq-question"><span>Do you manage WordPress updates?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>WordPress core auto-updates are enabled by default. Plugin and theme updates can be managed from your WordPress dashboard or configured for auto-updates.</p></div></div>
                    </div>

                    <div class="faq-panel" id="faq-wp-technical">
                        <div class="faq-item"><button class="faq-question"><span>Which PHP versions are supported?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>We support PHP 7.4 through 8.4 with easy per-domain switching via cPanel. WordPress recommends PHP 8.0 or higher.</p></div></div>
                        <div class="faq-item"><button class="faq-question"><span>Is LiteSpeed Cache included?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>Yes, LiteSpeed Web Server is included on all plans. Install the free LiteSpeed Cache plugin from WordPress to enable server-level caching, image optimization, and CDN integration.</p></div></div>
                        <div class="faq-item"><button class="faq-question"><span>How do backups work?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>Daily automated backups are created via JetBackup. You can restore files, databases, or emails individually from cPanel at any time.</p></div></div>
                    </div>

                    <div class="faq-panel" id="faq-wp-billing">
                        <div class="faq-item"><button class="faq-question"><span>Does the price increase on renewal?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>No — you pay the same price on renewal. No surprises, no hidden fees, ever.</p></div></div>
                        <div class="faq-item"><button class="faq-question"><span>Is there a money-back guarantee?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>Yes, we offer a 30-day money-back guarantee on all WordPress hosting plans.</p></div></div>
                        <div class="faq-item"><button class="faq-question"><span>What payment methods do you accept?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>We accept credit/debit cards, PayPal, cryptocurrency, and 10+ other payment methods.</p></div></div>
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
                <div class="promo-cta-icon"><i class="fab fa-wordpress"></i></div>
                <h2>Ready to launch your WordPress site?</h2>
                <p>Get started with managed WordPress hosting from €1.67/month. LiteSpeed, NVMe SSD, free migration.</p>
                <a href="#plans" class="btn-primary">View Plans <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
