<?php
/**
 * YottaSrc — Windows VPS
 * ========================
 * Windows VPS servers with RDP access, full admin, NVMe SSD.
 */
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/topbar.php';
?>

    <!-- ═══════════════ HERO ═══════════════ -->
    <section class="page-hero vps-hero">
        <div class="container">
            <div class="page-hero-split">
                <div class="page-hero-content">
                    <div class="page-breadcrumb">
                        <a href="<?php echo e(SITE_URL); ?>/">Home</a>
                        <i class="fas fa-chevron-right"></i>
                        <a href="<?php echo e(SITE_URL); ?>/vps/">VPS</a>
                        <i class="fas fa-chevron-right"></i>
                        <span>Windows VPS</span>
                    </div>
                    <h1>Windows VPS Servers — <span class="highlight">Full Admin Access</span></h1>
                    <p class="page-hero-desc">
                        Deploy Windows VPS instances with full RDP access, dedicated resources, and NVMe SSD storage. Run Windows Server 2019/2022 or Windows 10/11 — ideal for RDP hosting, trading bots, game servers, and enterprise apps.
                    </p>
                    <div class="page-hero-ctas">
                        <a href="#plans" class="btn-primary">View Plans <i class="fas fa-arrow-down"></i></a>
                        <a href="<?php echo e(SITE_URL); ?>/contact-us/" class="btn-secondary"><i class="fas fa-headset"></i> Talk to Sales</a>
                    </div>
                    <div class="page-hero-badges">
                        <div class="hero-badge-item"><i class="fas fa-check"></i> Full RDP Access</div>
                        <div class="hero-badge-item"><i class="fas fa-check"></i> NVMe SSD Storage</div>
                        <div class="hero-badge-item"><i class="fas fa-check"></i> 10 Gbit/s Network</div>
                        <div class="hero-badge-item"><i class="fas fa-check"></i> Instant Deploy</div>
                        <div class="hero-badge-item"><i class="fas fa-check"></i> 20+ Locations</div>
                    </div>
                </div>
                <div class="page-hero-visual">
                    <svg viewBox="0 0 440 400" fill="none" xmlns="http://www.w3.org/2000/svg" class="hero-illustration" aria-label="Windows VPS illustration">
                        <!-- Monitor Frame -->
                        <rect x="60" y="30" width="320" height="240" rx="16" fill="var(--bg-card)" stroke="var(--border-primary)" stroke-width="1.5"/>
                        <rect x="60" y="30" width="320" height="36" rx="16" fill="var(--bg-tertiary)"/>
                        <rect x="60" y="50" width="320" height="16" fill="var(--bg-tertiary)"/>
                        <circle cx="82" cy="48" r="5" fill="var(--brand-error)" opacity="0.6"/>
                        <circle cx="98" cy="48" r="5" fill="var(--brand-warning)" opacity="0.6"/>
                        <circle cx="114" cy="48" r="5" fill="var(--brand-secondary)" opacity="0.6"/>
                        <text x="260" y="53" text-anchor="middle" fill="var(--text-tertiary)" font-size="10" font-family="var(--font-mono)" font-weight="600" opacity="0.5">Remote Desktop — Windows VPS</text>

                        <!-- Windows desktop area -->
                        <rect x="60" y="66" width="320" height="204" fill="var(--bg-secondary)"/>

                        <!-- Taskbar -->
                        <rect x="60" y="240" width="320" height="30" fill="var(--bg-tertiary)" stroke="var(--border-primary)" stroke-width="0.5"/>
                        <!-- Start button -->
                        <rect x="70" y="246" width="24" height="18" rx="3" fill="var(--brand-primary)" opacity="0.2"/>
                        <text x="82" y="258" text-anchor="middle" fill="var(--brand-primary)" font-size="10" opacity="0.6">⊞</text>
                        <!-- Taskbar icons -->
                        <rect x="102" y="248" width="16" height="14" rx="2" fill="var(--text-tertiary)" opacity="0.15"/>
                        <rect x="122" y="248" width="16" height="14" rx="2" fill="var(--text-tertiary)" opacity="0.15"/>
                        <rect x="142" y="248" width="16" height="14" rx="2" fill="var(--text-tertiary)" opacity="0.15"/>
                        <!-- Clock -->
                        <text x="350" y="258" text-anchor="middle" fill="var(--text-tertiary)" font-size="7" font-family="var(--font-mono)" opacity="0.5">14:32</text>

                        <!-- Desktop icons -->
                        <rect x="78" y="80" width="40" height="40" rx="6" fill="var(--brand-primary)" opacity="0.1"/>
                        <text x="98" y="105" text-anchor="middle" fill="var(--brand-primary)" font-size="16" opacity="0.5">📁</text>
                        <text x="98" y="132" text-anchor="middle" fill="var(--text-tertiary)" font-size="6.5" font-family="var(--font-mono)" opacity="0.5">Files</text>

                        <rect x="138" y="80" width="40" height="40" rx="6" fill="var(--brand-secondary)" opacity="0.1"/>
                        <text x="158" y="105" text-anchor="middle" fill="var(--brand-secondary)" font-size="16" opacity="0.5">⚙</text>
                        <text x="158" y="132" text-anchor="middle" fill="var(--text-tertiary)" font-size="6.5" font-family="var(--font-mono)" opacity="0.5">Settings</text>

                        <rect x="78" y="148" width="40" height="40" rx="6" fill="var(--brand-accent)" opacity="0.1"/>
                        <text x="98" y="173" text-anchor="middle" fill="var(--brand-accent)" font-size="16" opacity="0.5">🖥</text>
                        <text x="98" y="200" text-anchor="middle" fill="var(--text-tertiary)" font-size="6.5" font-family="var(--font-mono)" opacity="0.5">Terminal</text>

                        <!-- Server Manager window -->
                        <rect x="190" y="80" width="170" height="130" rx="8" fill="var(--bg-card)" stroke="var(--border-primary)" stroke-width="1"/>
                        <rect x="190" y="80" width="170" height="20" rx="8" fill="var(--bg-tertiary)"/>
                        <rect x="190" y="92" width="170" height="8" fill="var(--bg-tertiary)"/>
                        <text x="250" y="94" fill="var(--text-tertiary)" font-size="7" font-family="var(--font-mono)" opacity="0.5">Server Manager</text>
                        <!-- Server stats -->
                        <text x="200" y="118" fill="var(--text-secondary)" font-size="7.5" font-family="var(--font-display)" font-weight="600" opacity="0.6">System Status</text>
                        <rect x="200" y="124" width="80" height="4" rx="2" fill="var(--bg-tertiary)"/>
                        <rect x="200" y="124" width="60" height="4" rx="2" fill="var(--brand-secondary)" opacity="0.5"/>
                        <text x="290" y="128" fill="var(--text-tertiary)" font-size="6" font-family="var(--font-mono)" opacity="0.5">CPU 32%</text>
                        <rect x="200" y="136" width="80" height="4" rx="2" fill="var(--bg-tertiary)"/>
                        <rect x="200" y="136" width="35" height="4" rx="2" fill="var(--brand-primary)" opacity="0.5"/>
                        <text x="290" y="140" fill="var(--text-tertiary)" font-size="6" font-family="var(--font-mono)" opacity="0.5">RAM 44%</text>
                        <rect x="200" y="148" width="80" height="4" rx="2" fill="var(--bg-tertiary)"/>
                        <rect x="200" y="148" width="25" height="4" rx="2" fill="var(--brand-accent)" opacity="0.5"/>
                        <text x="290" y="152" fill="var(--text-tertiary)" font-size="6" font-family="var(--font-mono)" opacity="0.5">Disk 20%</text>

                        <!-- Monitor stand -->
                        <rect x="190" y="272" width="60" height="8" rx="2" fill="var(--bg-tertiary)" stroke="var(--border-primary)" stroke-width="0.5"/>
                        <rect x="170" y="280" width="100" height="6" rx="3" fill="var(--bg-tertiary)" stroke="var(--border-primary)" stroke-width="0.5"/>

                        <!-- Floating badges -->
                        <rect x="350" y="10" width="86" height="36" rx="10" fill="var(--bg-card)" stroke="var(--border-primary)" stroke-width="1">
                            <animate attributeName="y" values="10;16;10" dur="5s" repeatCount="indefinite"/>
                        </rect>
                        <text x="370" y="25" fill="var(--text-tertiary)" font-size="7" font-family="var(--font-mono)" font-weight="600" opacity="0.6">
                            NETWORK
                            <animate attributeName="y" values="25;31;25" dur="5s" repeatCount="indefinite"/>
                        </text>
                        <text x="370" y="39" fill="var(--brand-primary)" font-size="12" font-family="var(--font-display)" font-weight="800" opacity="0.8">
                            10 Gbit/s
                            <animate attributeName="y" values="39;45;39" dur="5s" repeatCount="indefinite"/>
                        </text>

                        <rect x="0" y="300" width="82" height="36" rx="10" fill="var(--bg-card)" stroke="var(--border-primary)" stroke-width="1">
                            <animate attributeName="y" values="300;294;300" dur="6s" repeatCount="indefinite"/>
                        </rect>
                        <text x="16" y="315" fill="var(--text-tertiary)" font-size="7" font-family="var(--font-mono)" font-weight="600" opacity="0.6">
                            RDP
                            <animate attributeName="y" values="315;309;315" dur="6s" repeatCount="indefinite"/>
                        </text>
                        <text x="16" y="329" fill="var(--brand-secondary)" font-size="12" font-family="var(--font-display)" font-weight="800" opacity="0.8">
                            Active
                            <animate attributeName="y" values="329;323;329" dur="6s" repeatCount="indefinite"/>
                        </text>
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
                <span class="partner-logo"><i class="fab fa-windows"></i> Windows</span>
                <span class="partner-logo"><i class="fas fa-server"></i> KVM</span>
                <span class="partner-logo"><i class="fas fa-hdd"></i> NVMe SSD</span>
                <span class="partner-logo"><i class="fas fa-shield-alt"></i> Anti-DDoS</span>
                <span class="partner-logo"><i class="fas fa-network-wired"></i> 10 Gbit/s</span>
            </div>
        </div>
    </section>

    <!-- ═══════════════ PRICING PLANS ═══════════════ -->
    <section class="plans reveal" id="plans">
        <div class="container">
            <div class="section-header">
                <div class="section-tag">Pricing</div>
                <h2>Windows VPS Plans</h2>
                <p>Full admin RDP access, dedicated resources, NVMe SSD. Same price on renewal.</p>
            </div>

            <div class="plans-panel active" data-tab="win-vps">
                <div class="vps-rows-header">
                    <span><i class="fas fa-check-circle"></i> Full Admin RDP Access</span>
                    <span><i class="fas fa-check-circle"></i> Dedicated IPv4</span>
                    <span><i class="fab fa-windows"></i> Windows Included</span>
                    <span><i class="fas fa-sync-alt"></i> Same price on renewal</span>
                </div>
                <div class="vps-rows">
                    <!-- Win VPS 1 -->
                    <div class="vps-row">
                        <div class="vps-row-header">
                            <div class="vps-row-identity">
                                <span class="vps-row-toggle"><i class="fas fa-chevron-down"></i></span>
                                <span class="vps-row-name">Win VPS 1</span>
                                <span class="vps-row-arch">x86</span>
                            </div>
                            <div class="vps-row-specs">
                                <div class="vps-row-spec"><span class="vps-row-spec-val">2 Cores</span><span class="vps-row-spec-label">CPU</span></div>
                                <div class="vps-row-spec"><span class="vps-row-spec-val">4 GB</span><span class="vps-row-spec-label">RAM</span></div>
                                <div class="vps-row-spec"><span class="vps-row-spec-val">50 GB</span><span class="vps-row-spec-label">NVMe</span></div>
                                <div class="vps-row-spec"><span class="vps-row-spec-val">10 Gbit/s</span><span class="vps-row-spec-label">Network</span></div>
                                <div class="vps-row-spec"><span class="vps-row-spec-val">25 TB</span><span class="vps-row-spec-label">Traffic</span></div>
                            </div>
                            <div class="vps-row-action">
                                <div class="vps-row-price"><span class="vps-row-amount">€8.99</span><span class="vps-row-cycle">/mo</span></div>
                                <a href="<?php echo e(SITE_URL); ?>/contact-us/" class="vps-row-btn">Order Now</a>
                            </div>
                        </div>
                        <div class="vps-row-details">
                            <div class="vps-row-details-features">
                                <span><i class="fas fa-check-circle"></i> <strong>FREE</strong> Anti-DDoS</span>
                                <span><i class="fas fa-check-circle"></i> <strong>99%</strong> Uptime SLA</span>
                                <span><i class="fas fa-check-circle"></i> <strong>Full</strong> Admin Access</span>
                                <span><i class="fas fa-check-circle"></i> <strong>RDP</strong> Included</span>
                                <span><i class="fas fa-check-circle"></i> <strong>24/7</strong> Support</span>
                                <span><i class="fas fa-check-circle"></i> <strong>Dedicated</strong> IP</span>
                            </div>
                        </div>
                    </div>

                    <!-- Win VPS 2 (Popular) -->
                    <div class="vps-row popular expanded">
                        <span class="vps-row-badge">Best Value</span>
                        <div class="vps-row-header">
                            <div class="vps-row-identity">
                                <span class="vps-row-toggle"><i class="fas fa-chevron-down"></i></span>
                                <span class="vps-row-name">Win VPS 2</span>
                                <span class="vps-row-arch">x86</span>
                            </div>
                            <div class="vps-row-specs">
                                <div class="vps-row-spec"><span class="vps-row-spec-val">4 Cores</span><span class="vps-row-spec-label">CPU</span></div>
                                <div class="vps-row-spec"><span class="vps-row-spec-val">8 GB</span><span class="vps-row-spec-label">RAM</span></div>
                                <div class="vps-row-spec"><span class="vps-row-spec-val">100 GB</span><span class="vps-row-spec-label">NVMe</span></div>
                                <div class="vps-row-spec"><span class="vps-row-spec-val">10 Gbit/s</span><span class="vps-row-spec-label">Network</span></div>
                                <div class="vps-row-spec"><span class="vps-row-spec-val">30 TB</span><span class="vps-row-spec-label">Traffic</span></div>
                            </div>
                            <div class="vps-row-action">
                                <div class="vps-row-price"><span class="vps-row-amount">€14.99</span><span class="vps-row-cycle">/mo</span></div>
                                <a href="<?php echo e(SITE_URL); ?>/contact-us/" class="vps-row-btn">Order Now</a>
                            </div>
                        </div>
                        <div class="vps-row-details">
                            <div class="vps-row-details-features">
                                <span><i class="fas fa-check-circle"></i> <strong>FREE</strong> Anti-DDoS</span>
                                <span><i class="fas fa-check-circle"></i> <strong>99%</strong> Uptime SLA</span>
                                <span><i class="fas fa-check-circle"></i> <strong>Full</strong> Admin Access</span>
                                <span><i class="fas fa-check-circle"></i> <strong>RDP</strong> Included</span>
                                <span><i class="fas fa-check-circle"></i> <strong>24/7</strong> Support</span>
                                <span><i class="fas fa-check-circle"></i> <strong>Dedicated</strong> IP</span>
                            </div>
                        </div>
                    </div>

                    <!-- Win VPS 3 -->
                    <div class="vps-row">
                        <div class="vps-row-header">
                            <div class="vps-row-identity">
                                <span class="vps-row-toggle"><i class="fas fa-chevron-down"></i></span>
                                <span class="vps-row-name">Win VPS 3</span>
                                <span class="vps-row-arch">x86</span>
                            </div>
                            <div class="vps-row-specs">
                                <div class="vps-row-spec"><span class="vps-row-spec-val">6 Cores</span><span class="vps-row-spec-label">CPU</span></div>
                                <div class="vps-row-spec"><span class="vps-row-spec-val">16 GB</span><span class="vps-row-spec-label">RAM</span></div>
                                <div class="vps-row-spec"><span class="vps-row-spec-val">200 GB</span><span class="vps-row-spec-label">NVMe</span></div>
                                <div class="vps-row-spec"><span class="vps-row-spec-val">10 Gbit/s</span><span class="vps-row-spec-label">Network</span></div>
                                <div class="vps-row-spec"><span class="vps-row-spec-val">40 TB</span><span class="vps-row-spec-label">Traffic</span></div>
                            </div>
                            <div class="vps-row-action">
                                <div class="vps-row-price"><span class="vps-row-amount">€24.99</span><span class="vps-row-cycle">/mo</span></div>
                                <a href="<?php echo e(SITE_URL); ?>/contact-us/" class="vps-row-btn">Order Now</a>
                            </div>
                        </div>
                        <div class="vps-row-details">
                            <div class="vps-row-details-features">
                                <span><i class="fas fa-check-circle"></i> <strong>FREE</strong> Anti-DDoS</span>
                                <span><i class="fas fa-check-circle"></i> <strong>99%</strong> Uptime SLA</span>
                                <span><i class="fas fa-check-circle"></i> <strong>Full</strong> Admin Access</span>
                                <span><i class="fas fa-check-circle"></i> <strong>RDP</strong> Included</span>
                                <span><i class="fas fa-check-circle"></i> <strong>24/7</strong> Support</span>
                                <span><i class="fas fa-check-circle"></i> <strong>Dedicated</strong> IP</span>
                            </div>
                        </div>
                    </div>

                    <!-- Win VPS 4 -->
                    <div class="vps-row">
                        <div class="vps-row-header">
                            <div class="vps-row-identity">
                                <span class="vps-row-toggle"><i class="fas fa-chevron-down"></i></span>
                                <span class="vps-row-name">Win VPS 4</span>
                                <span class="vps-row-arch">x86</span>
                            </div>
                            <div class="vps-row-specs">
                                <div class="vps-row-spec"><span class="vps-row-spec-val">8 Cores</span><span class="vps-row-spec-label">CPU</span></div>
                                <div class="vps-row-spec"><span class="vps-row-spec-val">32 GB</span><span class="vps-row-spec-label">RAM</span></div>
                                <div class="vps-row-spec"><span class="vps-row-spec-val">400 GB</span><span class="vps-row-spec-label">NVMe</span></div>
                                <div class="vps-row-spec"><span class="vps-row-spec-val">10 Gbit/s</span><span class="vps-row-spec-label">Network</span></div>
                                <div class="vps-row-spec"><span class="vps-row-spec-val">50 TB</span><span class="vps-row-spec-label">Traffic</span></div>
                            </div>
                            <div class="vps-row-action">
                                <div class="vps-row-price"><span class="vps-row-amount">€44.99</span><span class="vps-row-cycle">/mo</span></div>
                                <a href="<?php echo e(SITE_URL); ?>/contact-us/" class="vps-row-btn">Order Now</a>
                            </div>
                        </div>
                        <div class="vps-row-details">
                            <div class="vps-row-details-features">
                                <span><i class="fas fa-check-circle"></i> <strong>FREE</strong> Anti-DDoS</span>
                                <span><i class="fas fa-check-circle"></i> <strong>99%</strong> Uptime SLA</span>
                                <span><i class="fas fa-check-circle"></i> <strong>Full</strong> Admin Access</span>
                                <span><i class="fas fa-check-circle"></i> <strong>RDP</strong> Included</span>
                                <span><i class="fas fa-check-circle"></i> <strong>24/7</strong> Support</span>
                                <span><i class="fas fa-check-circle"></i> <strong>Dedicated</strong> IP</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ SUPPORTED WINDOWS OS ═══════════════ -->
    <section class="win-os reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag">Operating Systems</div>
                <h2>Supported Windows versions</h2>
                <p>Choose your preferred Windows edition during server deployment.</p>
            </div>

            <div class="win-os-grid">
                <div class="feature-card">
                    <div class="feature-icon"><i class="fab fa-windows"></i></div>
                    <h4>Windows Server 2019</h4>
                    <p>Standard &amp; Datacenter editions with Long-Term Servicing Channel (LTSC) support. Ideal for production workloads.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon icon-green"><i class="fab fa-windows"></i></div>
                    <h4>Windows Server 2022</h4>
                    <p>Latest server OS with advanced security, Azure hybrid capabilities, and improved container support.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon icon-purple"><i class="fab fa-windows"></i></div>
                    <h4>Windows 10 / 11</h4>
                    <p>Desktop editions for RDP workstations, trading platforms, development environments, and remote access.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ USE CASES ═══════════════ -->
    <section class="win-usecases reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag">Use Cases</div>
                <h2>What can you do with a Windows VPS?</h2>
                <p>From remote desktops to automated trading — Windows VPS handles it all.</p>
            </div>

            <div class="usecase-grid">
                <div class="feature-card">
                    <div class="feature-icon"><i class="fas fa-desktop"></i></div>
                    <h4>RDP Hosting</h4>
                    <p>Remote desktop access from anywhere. Run Windows applications, browse, and work as if you're on a local machine.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon icon-green"><i class="fas fa-chart-line"></i></div>
                    <h4>Trading Bots</h4>
                    <p>Run MetaTrader, forex bots, and crypto trading algorithms 24/7 with low-latency connectivity and guaranteed uptime.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon icon-purple"><i class="fas fa-gamepad"></i></div>
                    <h4>Game Servers</h4>
                    <p>Host Windows-based game servers with dedicated resources, NVMe storage, and high-bandwidth networking.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon icon-amber"><i class="fas fa-building"></i></div>
                    <h4>Enterprise Apps</h4>
                    <p>Run .NET applications, SQL Server, Active Directory, IIS, and other Windows-native enterprise software.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ INFRASTRUCTURE ═══════════════ -->
    <section class="dc-showcase dc-showcase-compact reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag">Infrastructure</div>
                <h2>Global Windows VPS locations</h2>
                <p>Deploy your Windows VPS close to your users for the lowest possible latency.</p>
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
                        <a class="dc-pin"><span class="fi fi-fi"></span> Finland</a>
                        <a class="dc-pin"><span class="fi fi-de"></span> Germany</a>
                        <a class="dc-pin"><span class="fi fi-fr"></span> France</a>
                        <a class="dc-pin"><span class="fi fi-gb"></span> UK</a>
                        <a class="dc-pin"><span class="fi fi-nl"></span> Netherlands</a>
                        <a class="dc-pin dc-pin-hq"><span class="fi fi-ro"></span> Romania <span class="dc-hq-badge">HQ</span></a>
                        <a class="dc-pin"><span class="fi fi-tr"></span> Turkey</a>
                        <a class="dc-pin"><span class="fi fi-pl"></span> Poland</a>
                        <a class="dc-pin"><span class="fi fi-at"></span> Austria</a>
                    </div>
                </div>
                <div class="dc-continent">
                    <div class="dc-continent-label"><i class="fas fa-globe-americas"></i> Americas <span class="dc-continent-count">2</span></div>
                    <div class="dc-continent-locs">
                        <a class="dc-pin"><span class="fi fi-us"></span> USA</a>
                        <a class="dc-pin"><span class="fi fi-ca"></span> Canada</a>
                    </div>
                </div>
                <div class="dc-continent">
                    <div class="dc-continent-label"><i class="fas fa-globe-asia"></i> Asia <span class="dc-continent-count">5</span></div>
                    <div class="dc-continent-locs">
                        <a class="dc-pin"><span class="fi fi-in"></span> India</a>
                        <a class="dc-pin"><span class="fi fi-sg"></span> Singapore</a>
                        <a class="dc-pin"><span class="fi fi-jp"></span> Japan</a>
                        <a class="dc-pin"><span class="fi fi-hk"></span> Hong Kong</a>
                        <a class="dc-pin"><span class="fi fi-th"></span> Thailand</a>
                    </div>
                </div>
                <div class="dc-continent">
                    <div class="dc-continent-label"><i class="fas fa-globe"></i> Oceania <span class="dc-continent-count">1</span></div>
                    <div class="dc-continent-locs">
                        <a class="dc-pin"><span class="fi fi-au"></span> Australia</a>
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
                <h2>Windows VPS FAQ</h2>
                <p>Can't find your answer? Open a support ticket — we respond in under 10 minutes.</p>
            </div>

            <div class="faq-layout faq-layout--full">
                <div class="faq-panels">
                    <div class="faq-panel active" id="faq-winvps">
                        <div class="faq-item"><button class="faq-question"><span>Is the Windows license included?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>Yes, the Windows OS license is included in the VPS price. You can choose between Windows Server 2019, 2022, or Windows 10/11 during deployment.</p></div></div>
                        <div class="faq-item"><button class="faq-question"><span>How do I connect to my Windows VPS?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>Use the built-in Remote Desktop Connection (RDP) client on Windows, or Microsoft Remote Desktop on macOS/iOS/Android. We provide your IP, username, and password after deployment.</p></div></div>
                        <div class="faq-item"><button class="faq-question"><span>Can I install any software?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>Yes, you have full administrator access and can install any software that doesn't violate our Acceptable Use Policy.</p></div></div>
                        <div class="faq-item"><button class="faq-question"><span>How long does deployment take?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>Windows VPS instances are typically deployed within 5–15 minutes after payment confirmation.</p></div></div>
                        <div class="faq-item"><button class="faq-question"><span>Can I upgrade my plan later?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>Yes, you can upgrade your Windows VPS resources (CPU, RAM, storage) at any time through your client dashboard or by contacting support.</p></div></div>
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
                <div class="promo-cta-icon"><i class="fab fa-windows"></i></div>
                <h2>Ready to deploy your Windows VPS?</h2>
                <p>Get started with a Windows VPS from €8.99/month. Full RDP access, NVMe SSD, 10 Gbit/s.</p>
                <a href="#plans" class="btn-primary">View Plans <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
