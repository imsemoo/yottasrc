<?php
/**
 * YottaSrc — Linux VPS
 * =====================
 * Sections: Hero → Partners → Pricing (table) → Locations → OS → Infrastructure → Use Cases → Deploy → Security → Features → Why Us → FAQ → CTA
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
                        <span>Linux VPS</span>
                    </div>
                    <h1>Virtual Servers — <span class="highlight">Built for Performance</span></h1>
                    <p class="page-hero-desc">
                        Deploy high-performance KVM virtual servers with dedicated resources, NVMe storage, and 10Gbit/s networking across 50+ global locations. Full root access, instant provisioning.
                    </p>
                    <div class="page-hero-ctas">
                        <a href="#plans" class="btn-primary">View Plans <i class="fas fa-arrow-down"></i></a>
                        <a href="<?php echo e(SITE_URL); ?>/contact-us/" class="btn-secondary"><i class="fas fa-headset"></i> Talk to Sales</a>
                    </div>
                    <div class="page-hero-badges">
                        <div class="hero-badge-item"><i class="fas fa-check"></i> Dedicated Resources</div>
                        <div class="hero-badge-item"><i class="fas fa-check"></i> Full Root Access</div>
                        <div class="hero-badge-item"><i class="fas fa-check"></i> NVMe SSD</div>
                        <div class="hero-badge-item"><i class="fas fa-check"></i> 10 Gbit/s Network</div>
                        <div class="hero-badge-item"><i class="fas fa-check"></i> Instant Deploy</div>
                    </div>
                </div>
                <div class="page-hero-visual">
                    <svg viewBox="0 0 420 380" fill="none" xmlns="http://www.w3.org/2000/svg" class="hero-illustration" aria-label="VPS server infrastructure illustration">
                        <!-- Main server rack -->
                        <rect x="80" y="30" width="260" height="320" rx="16" fill="var(--bg-card)" stroke="var(--border-primary)" stroke-width="1.5"/>
                        <!-- Rack header -->
                        <rect x="80" y="30" width="260" height="36" rx="16" fill="var(--bg-tertiary)"/>
                        <rect x="80" y="50" width="260" height="16" fill="var(--bg-tertiary)"/>
                        <circle cx="102" cy="48" r="4" fill="var(--brand-error)" opacity="0.5"/>
                        <circle cx="116" cy="48" r="4" fill="var(--brand-warning)" opacity="0.5"/>
                        <circle cx="130" cy="48" r="4" fill="var(--brand-secondary)" opacity="0.5"/>
                        <text x="210" y="53" text-anchor="middle" fill="var(--text-tertiary)" font-size="10" font-family="var(--font-mono)" font-weight="600" opacity="0.5">VPS — Server Node</text>

                        <!-- Server unit 1 -->
                        <rect x="98" y="78" width="224" height="52" rx="8" fill="var(--bg-tertiary)" stroke="var(--border-primary)" stroke-width="0.8"/>
                        <rect x="110" y="90" width="8" height="28" rx="2" fill="var(--brand-primary)" opacity="0.3"/>
                        <rect x="122" y="90" width="8" height="28" rx="2" fill="var(--brand-primary)" opacity="0.5"/>
                        <rect x="134" y="90" width="8" height="28" rx="2" fill="var(--brand-primary)" opacity="0.2"/>
                        <rect x="146" y="90" width="8" height="28" rx="2" fill="var(--brand-primary)" opacity="0.7"/>
                        <circle cx="298" cy="92" r="4" fill="var(--brand-secondary)" opacity="0.8"><animate attributeName="opacity" values="0.4;0.8;0.4" dur="2s" repeatCount="indefinite"/></circle>
                        <circle cx="298" cy="104" r="4" fill="var(--brand-primary)" opacity="0.4"><animate attributeName="opacity" values="0.2;0.6;0.2" dur="3s" repeatCount="indefinite"/></circle>
                        <text x="180" y="108" fill="var(--text-tertiary)" font-size="8" font-family="var(--font-mono)" opacity="0.5">4 vCPU · 8GB RAM</text>

                        <!-- Server unit 2 -->
                        <rect x="98" y="140" width="224" height="52" rx="8" fill="var(--bg-tertiary)" stroke="var(--border-primary)" stroke-width="0.8"/>
                        <rect x="110" y="152" width="8" height="28" rx="2" fill="var(--brand-secondary)" opacity="0.4"/>
                        <rect x="122" y="152" width="8" height="28" rx="2" fill="var(--brand-secondary)" opacity="0.6"/>
                        <rect x="134" y="152" width="8" height="28" rx="2" fill="var(--brand-secondary)" opacity="0.3"/>
                        <rect x="146" y="152" width="8" height="28" rx="2" fill="var(--brand-secondary)" opacity="0.8"/>
                        <circle cx="298" cy="154" r="4" fill="var(--brand-secondary)" opacity="0.6"><animate attributeName="opacity" values="0.3;0.7;0.3" dur="2.5s" repeatCount="indefinite"/></circle>
                        <circle cx="298" cy="166" r="4" fill="var(--brand-primary)" opacity="0.5"><animate attributeName="opacity" values="0.3;0.5;0.3" dur="4s" repeatCount="indefinite"/></circle>
                        <text x="180" y="170" fill="var(--text-tertiary)" font-size="8" font-family="var(--font-mono)" opacity="0.5">2 vCPU · 4GB RAM</text>

                        <!-- Server unit 3 -->
                        <rect x="98" y="202" width="224" height="52" rx="8" fill="var(--bg-tertiary)" stroke="var(--border-primary)" stroke-width="0.8"/>
                        <rect x="110" y="214" width="8" height="28" rx="2" fill="var(--brand-accent)" opacity="0.3"/>
                        <rect x="122" y="214" width="8" height="28" rx="2" fill="var(--brand-accent)" opacity="0.5"/>
                        <rect x="134" y="214" width="8" height="28" rx="2" fill="var(--brand-accent)" opacity="0.7"/>
                        <rect x="146" y="214" width="8" height="28" rx="2" fill="var(--brand-accent)" opacity="0.4"/>
                        <circle cx="298" cy="216" r="4" fill="var(--brand-secondary)" opacity="0.5"><animate attributeName="opacity" values="0.5;0.9;0.5" dur="1.8s" repeatCount="indefinite"/></circle>
                        <circle cx="298" cy="228" r="4" fill="var(--brand-warning)" opacity="0.3"><animate attributeName="opacity" values="0.2;0.4;0.2" dur="3.5s" repeatCount="indefinite"/></circle>
                        <text x="180" y="232" fill="var(--text-tertiary)" font-size="8" font-family="var(--font-mono)" opacity="0.5">8 vCPU · 16GB RAM</text>

                        <!-- Network bar -->
                        <rect x="98" y="270" width="224" height="28" rx="6" fill="var(--brand-primary)" opacity="0.06" stroke="var(--brand-primary)" stroke-width="0.5" stroke-opacity="0.15"/>
                        <text x="210" y="288" text-anchor="middle" fill="var(--brand-primary)" font-size="9" font-weight="700" font-family="var(--font-mono)" opacity="0.5">10 Gbit/s · NVMe SSD · KVM</text>

                        <!-- Uptime badge -->
                        <rect x="98" y="310" width="90" height="24" rx="6" fill="var(--brand-secondary)" opacity="0.08" stroke="var(--brand-secondary)" stroke-width="0.5" stroke-opacity="0.2"/>
                        <text x="143" y="326" text-anchor="middle" fill="var(--brand-secondary)" font-size="9" font-weight="700" font-family="var(--font-mono)" opacity="0.6">99.9% Uptime</text>

                        <!-- Location badge -->
                        <rect x="198" y="310" width="124" height="24" rx="6" fill="var(--brand-accent)" opacity="0.08" stroke="var(--brand-accent)" stroke-width="0.5" stroke-opacity="0.2"/>
                        <text x="260" y="326" text-anchor="middle" fill="var(--brand-accent)" font-size="9" font-weight="700" font-family="var(--font-mono)" opacity="0.6">50+ Locations</text>

                        <!-- Floating indicators -->
                        <circle cx="55" cy="100" r="3" fill="var(--brand-primary)" opacity="0.3"><animate attributeName="opacity" values="0.3;0.7;0.3" dur="3s" repeatCount="indefinite"/></circle>
                        <circle cx="380" cy="340" r="3" fill="var(--brand-secondary)" opacity="0.3"><animate attributeName="opacity" values="0.3;0.6;0.3" dur="4s" repeatCount="indefinite"/></circle>
                        <circle cx="370" cy="50" r="2" fill="var(--brand-accent)" opacity="0.3"><animate attributeName="opacity" values="0.2;0.5;0.2" dur="5s" repeatCount="indefinite"/></circle>
                    </svg>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ PARTNERS ═══════════════ -->
    <section class="partners">
        <div class="container">
            <span class="partners-label">Our partners, the world's best</span>
            <div class="partners-logos">
                <span class="partner-logo">Equinix</span>
                <span class="partner-logo">Hetzner</span>
                <span class="partner-logo">OVHcloud</span>
                <span class="partner-logo">Leaseweb</span>
                <span class="partner-logo">Ionos</span>
                <span class="partner-logo">Kamatera</span>
                <span class="partner-logo">Cogent</span>
                <span class="partner-logo">Myloc</span>
            </div>
        </div>
    </section>

    <!-- ═══════════════ VPS PLANS (Row Style) ═══════════════ -->
    <section class="vps-pricing reveal" id="plans">
        <div class="container">
            <div class="section-header">
                <div class="section-tag">Pricing</div>
                <h2>VPS Linux Plans</h2>
                <p>Dedicated resources, transparent pricing, same price on renewal. Pick a tier that matches your workload.</p>
            </div>

            <div class="plans-tabs">
                <button class="plan-tab active" data-target="vps-yta">YTA (Budget)</button>
                <button class="plan-tab" data-target="vps-ha">HA (10Gbit/s)</button>
                <button class="plan-tab" data-target="vps-de">DE (Arm64)</button>
                <button class="plan-tab" data-target="vps-ml">ML</button>
            </div>

            <!-- YTA Plans -->
            <div class="plans-panel active" data-tab="vps-yta">
                <div class="vps-rows-header">
                    <span><i class="fas fa-check-circle"></i> Full Root SSH &amp; KVM Isolation</span>
                    <span><i class="fas fa-check-circle"></i> IPv4 &amp; IPv6</span>
                    <span><i class="fas fa-map-marker-alt"></i> Germany +5 locations</span>
                    <span><i class="fas fa-sync-alt"></i> Same price on renewal</span>
                </div>
                <div class="vps-rows">
                    <div class="vps-row">
                        <div class="vps-row-header">
                            <div class="vps-row-identity">
                                <span class="vps-row-toggle"><i class="fas fa-chevron-down"></i></span>
                                <span class="vps-row-name">VPS YTA 1</span>
                                <span class="vps-row-arch">x86</span>
                            </div>
                            <div class="vps-row-specs">
                                <div class="vps-row-spec"><span class="vps-row-spec-val">1 Core</span><span class="vps-row-spec-label">CPU</span></div>
                                <div class="vps-row-spec"><span class="vps-row-spec-val">2 GB</span><span class="vps-row-spec-label">RAM</span></div>
                                <div class="vps-row-spec"><span class="vps-row-spec-val">25 GB</span><span class="vps-row-spec-label">NVMe</span></div>
                                <div class="vps-row-spec"><span class="vps-row-spec-val">1 Gbit/s</span><span class="vps-row-spec-label">Network</span></div>
                                <div class="vps-row-spec"><span class="vps-row-spec-val">25 TB</span><span class="vps-row-spec-label">Traffic</span></div>
                            </div>
                            <div class="vps-row-action">
                                <div class="vps-row-price"><span class="vps-row-amount">€2.75</span><span class="vps-row-cycle">/mo</span></div>
                                <a href="<?php echo e(SITE_URL); ?>/vps/" class="vps-row-btn">Order Now</a>
                            </div>
                        </div>
                        <div class="vps-row-details">
                            <div class="vps-row-details-features">
                                <span><i class="fas fa-check-circle"></i> <strong>FREE</strong> Anti-DDoS</span>
                                <span><i class="fas fa-check-circle"></i> <strong>99%</strong> Uptime Guarantee</span>
                                <span><i class="fas fa-check-circle"></i> <strong>Fair Usage</strong> Traffic</span>
                                <span><i class="fas fa-check-circle"></i> <strong>1</strong> Backup Point</span>
                                <span><i class="fas fa-check-circle"></i> <strong>24/7</strong> Expert Support</span>
                                <span><i class="fas fa-check-circle"></i> <strong>Dedicated</strong> IP Address</span>
                            </div>
                            <div class="vps-row-details-locations">
                                <div class="vps-loc-pills">
                                    <span class="vps-loc-pill"><span class="fi fi-tr"></span> Istanbul <em>~12ms</em></span>
                                    <span class="vps-loc-pill"><span class="fi fi-de"></span> Frankfurt <em>~8ms</em></span>
                                    <span class="vps-loc-pill"><span class="fi fi-gb"></span> London <em>~15ms</em></span>
                                    <span class="vps-loc-pill"><span class="fi fi-bg"></span> Sofia <em>~18ms</em></span>
                                    <span class="vps-loc-pill"><span class="fi fi-us"></span> New York <em>~78ms</em></span>
                                    <span class="vps-loc-pill"><span class="fi fi-au"></span> Sydney <em>~240ms</em></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="vps-row popular expanded">
                        <span class="vps-row-badge">Best Value</span>
                        <div class="vps-row-header">
                            <div class="vps-row-identity">
                                <span class="vps-row-toggle"><i class="fas fa-chevron-down"></i></span>
                                <span class="vps-row-name">VPS YTA 2</span>
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
                                <div class="vps-row-price"><span class="vps-row-amount">€5.15</span><span class="vps-row-cycle">/mo</span></div>
                                <a href="<?php echo e(SITE_URL); ?>/vps/" class="vps-row-btn">Order Now</a>
                            </div>
                        </div>
                        <div class="vps-row-details">
                            <div class="vps-row-details-features">
                                <span><i class="fas fa-check-circle"></i> <strong>FREE</strong> Anti-DDoS</span>
                                <span><i class="fas fa-check-circle"></i> <strong>99%</strong> Uptime Guarantee</span>
                                <span><i class="fas fa-check-circle"></i> <strong>Fair Usage</strong> Traffic</span>
                                <span><i class="fas fa-check-circle"></i> <strong>2</strong> Backup Points</span>
                                <span><i class="fas fa-check-circle"></i> <strong>24/7</strong> Expert Support</span>
                                <span><i class="fas fa-check-circle"></i> <strong>Dedicated</strong> IP Address</span>
                            </div>
                            <div class="vps-row-details-locations">
                                <div class="vps-loc-pills">
                                    <span class="vps-loc-pill"><span class="fi fi-tr"></span> Istanbul <em>~12ms</em></span>
                                    <span class="vps-loc-pill"><span class="fi fi-de"></span> Frankfurt <em>~8ms</em></span>
                                    <span class="vps-loc-pill"><span class="fi fi-gb"></span> London <em>~15ms</em></span>
                                    <span class="vps-loc-pill"><span class="fi fi-bg"></span> Sofia <em>~18ms</em></span>
                                    <span class="vps-loc-pill"><span class="fi fi-us"></span> New York <em>~78ms</em></span>
                                    <span class="vps-loc-pill"><span class="fi fi-au"></span> Sydney <em>~240ms</em></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="vps-row">
                        <div class="vps-row-header">
                            <div class="vps-row-identity">
                                <span class="vps-row-toggle"><i class="fas fa-chevron-down"></i></span>
                                <span class="vps-row-name">VPS YTA 3</span>
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
                                <div class="vps-row-price"><span class="vps-row-amount">€7.97</span><span class="vps-row-cycle">/mo</span></div>
                                <a href="<?php echo e(SITE_URL); ?>/vps/" class="vps-row-btn">Order Now</a>
                            </div>
                        </div>
                        <div class="vps-row-details">
                            <div class="vps-row-details-features">
                                <span><i class="fas fa-check-circle"></i> <strong>FREE</strong> Anti-DDoS</span>
                                <span><i class="fas fa-check-circle"></i> <strong>99%</strong> Uptime Guarantee</span>
                                <span><i class="fas fa-check-circle"></i> <strong>Fair Usage</strong> Traffic</span>
                                <span><i class="fas fa-check-circle"></i> <strong>2</strong> Backup Points</span>
                                <span><i class="fas fa-check-circle"></i> <strong>24/7</strong> Expert Support</span>
                                <span><i class="fas fa-check-circle"></i> <strong>Dedicated</strong> IP Address</span>
                            </div>
                            <div class="vps-row-details-locations">
                                <div class="vps-loc-pills">
                                    <span class="vps-loc-pill"><span class="fi fi-tr"></span> Istanbul <em>~12ms</em></span>
                                    <span class="vps-loc-pill"><span class="fi fi-de"></span> Frankfurt <em>~8ms</em></span>
                                    <span class="vps-loc-pill"><span class="fi fi-gb"></span> London <em>~15ms</em></span>
                                    <span class="vps-loc-pill"><span class="fi fi-bg"></span> Sofia <em>~18ms</em></span>
                                    <span class="vps-loc-pill"><span class="fi fi-us"></span> New York <em>~78ms</em></span>
                                    <span class="vps-loc-pill"><span class="fi fi-au"></span> Sydney <em>~240ms</em></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- HA Plans -->
            <div class="plans-panel" data-tab="vps-ha">
                <div class="vps-rows-header">
                    <span><i class="fas fa-check-circle"></i> Full Root SSH &amp; KVM Isolation</span>
                    <span><i class="fas fa-check-circle"></i> IPv4</span>
                    <span><i class="fas fa-map-marker-alt"></i> Germany +12 locations</span>
                    <span><i class="fas fa-sync-alt"></i> Same price on renewal</span>
                </div>
                <div class="vps-rows">
                    <div class="vps-row">
                        <div class="vps-row-header">
                            <div class="vps-row-identity">
                                <span class="vps-row-toggle"><i class="fas fa-chevron-down"></i></span>
                                <span class="vps-row-name">VPS HA 1</span>
                                <span class="vps-row-arch">x86</span>
                            </div>
                            <div class="vps-row-specs">
                                <div class="vps-row-spec"><span class="vps-row-spec-val">1 Core</span><span class="vps-row-spec-label">CPU</span></div>
                                <div class="vps-row-spec"><span class="vps-row-spec-val">1 GB</span><span class="vps-row-spec-label">RAM</span></div>
                                <div class="vps-row-spec"><span class="vps-row-spec-val">20 GB</span><span class="vps-row-spec-label">NVMe</span></div>
                                <div class="vps-row-spec"><span class="vps-row-spec-val">10 Gbit/s</span><span class="vps-row-spec-label">Network</span></div>
                                <div class="vps-row-spec"><span class="vps-row-spec-val">15 TB</span><span class="vps-row-spec-label">Traffic</span></div>
                            </div>
                            <div class="vps-row-action">
                                <div class="vps-row-price"><span class="vps-row-amount">€4.72</span><span class="vps-row-cycle">/mo</span></div>
                                <a href="<?php echo e(SITE_URL); ?>/vps/" class="vps-row-btn">Order Now</a>
                            </div>
                        </div>
                        <div class="vps-row-details">
                            <div class="vps-row-details-features">
                                <span><i class="fas fa-check-circle"></i> <strong>FREE</strong> Anti-DDoS</span>
                                <span><i class="fas fa-check-circle"></i> <strong>99%</strong> Uptime Guarantee</span>
                                <span><i class="fas fa-check-circle"></i> <strong>Fair Usage</strong> Traffic</span>
                                <span><i class="fas fa-check-circle"></i> <strong>1</strong> Backup Point</span>
                                <span><i class="fas fa-check-circle"></i> <strong>24/7</strong> Expert Support</span>
                                <span><i class="fas fa-check-circle"></i> <strong>Dedicated</strong> IP Address</span>
                            </div>
                            <div class="vps-row-details-locations">
                                <div class="vps-loc-pills">
                                    <span class="vps-loc-pill"><span class="fi fi-tr"></span> Istanbul <em>~12ms</em></span>
                                    <span class="vps-loc-pill"><span class="fi fi-de"></span> Frankfurt <em>~8ms</em></span>
                                    <span class="vps-loc-pill"><span class="fi fi-gb"></span> London <em>~15ms</em></span>
                                    <span class="vps-loc-pill"><span class="fi fi-bg"></span> Sofia <em>~18ms</em></span>
                                    <span class="vps-loc-pill"><span class="fi fi-us"></span> Ashburn <em>~78ms</em></span>
                                    <span class="vps-loc-pill"><span class="fi fi-ca"></span> Toronto <em>~85ms</em></span>
                                    <span class="vps-loc-pill"><span class="fi fi-il"></span> Tel Aviv <em>~35ms</em></span>
                                    <span class="vps-loc-pill"><span class="fi fi-au"></span> Sydney <em>~240ms</em></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="vps-row popular expanded">
                        <span class="vps-row-badge">Popular</span>
                        <div class="vps-row-header">
                            <div class="vps-row-identity">
                                <span class="vps-row-toggle"><i class="fas fa-chevron-down"></i></span>
                                <span class="vps-row-name">VPS HA 2</span>
                                <span class="vps-row-arch">x86</span>
                            </div>
                            <div class="vps-row-specs">
                                <div class="vps-row-spec"><span class="vps-row-spec-val">1 Core</span><span class="vps-row-spec-label">CPU</span></div>
                                <div class="vps-row-spec"><span class="vps-row-spec-val">2 GB</span><span class="vps-row-spec-label">RAM</span></div>
                                <div class="vps-row-spec"><span class="vps-row-spec-val">20 GB</span><span class="vps-row-spec-label">NVMe</span></div>
                                <div class="vps-row-spec"><span class="vps-row-spec-val">10 Gbit/s</span><span class="vps-row-spec-label">Network</span></div>
                                <div class="vps-row-spec"><span class="vps-row-spec-val">15 TB</span><span class="vps-row-spec-label">Traffic</span></div>
                            </div>
                            <div class="vps-row-action">
                                <div class="vps-row-price"><span class="vps-row-amount">€7.50</span><span class="vps-row-cycle">/mo</span></div>
                                <a href="<?php echo e(SITE_URL); ?>/vps/" class="vps-row-btn">Order Now</a>
                            </div>
                        </div>
                        <div class="vps-row-details">
                            <div class="vps-row-details-features">
                                <span><i class="fas fa-check-circle"></i> <strong>FREE</strong> Anti-DDoS</span>
                                <span><i class="fas fa-check-circle"></i> <strong>99%</strong> Uptime Guarantee</span>
                                <span><i class="fas fa-check-circle"></i> <strong>Fair Usage</strong> Traffic</span>
                                <span><i class="fas fa-check-circle"></i> <strong>2</strong> Backup Points</span>
                                <span><i class="fas fa-check-circle"></i> <strong>24/7</strong> Expert Support</span>
                                <span><i class="fas fa-check-circle"></i> <strong>Dedicated</strong> IP Address</span>
                            </div>
                            <div class="vps-row-details-locations">
                                <div class="vps-loc-pills">
                                    <span class="vps-loc-pill"><span class="fi fi-tr"></span> Istanbul <em>~12ms</em></span>
                                    <span class="vps-loc-pill"><span class="fi fi-de"></span> Frankfurt <em>~8ms</em></span>
                                    <span class="vps-loc-pill"><span class="fi fi-gb"></span> London <em>~15ms</em></span>
                                    <span class="vps-loc-pill"><span class="fi fi-bg"></span> Sofia <em>~18ms</em></span>
                                    <span class="vps-loc-pill"><span class="fi fi-us"></span> Ashburn <em>~78ms</em></span>
                                    <span class="vps-loc-pill"><span class="fi fi-ca"></span> Toronto <em>~85ms</em></span>
                                    <span class="vps-loc-pill"><span class="fi fi-il"></span> Tel Aviv <em>~35ms</em></span>
                                    <span class="vps-loc-pill"><span class="fi fi-au"></span> Sydney <em>~240ms</em></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- DE Plans (Arm64) -->
            <div class="plans-panel" data-tab="vps-de">
                <div class="vps-rows-header">
                    <span><i class="fas fa-check-circle"></i> Full Root SSH &amp; KVM · Arm64</span>
                    <span><i class="fas fa-check-circle"></i> IPv4 &amp; IPv6</span>
                    <span><i class="fas fa-map-marker-alt"></i> Germany +1 location</span>
                    <span><i class="fas fa-sync-alt"></i> Same price on renewal</span>
                </div>
                <div class="vps-rows">
                    <div class="vps-row popular expanded">
                        <span class="vps-row-badge">Arm64</span>
                        <div class="vps-row-header">
                            <div class="vps-row-identity">
                                <span class="vps-row-toggle"><i class="fas fa-chevron-down"></i></span>
                                <span class="vps-row-name">VPS DE 1</span>
                                <span class="vps-row-arch">Arm64</span>
                            </div>
                            <div class="vps-row-specs">
                                <div class="vps-row-spec"><span class="vps-row-spec-val">2 Cores</span><span class="vps-row-spec-label">CPU</span></div>
                                <div class="vps-row-spec"><span class="vps-row-spec-val">4 GB</span><span class="vps-row-spec-label">RAM</span></div>
                                <div class="vps-row-spec"><span class="vps-row-spec-val">40 GB</span><span class="vps-row-spec-label">NVMe</span></div>
                                <div class="vps-row-spec"><span class="vps-row-spec-val">10 Gbit/s</span><span class="vps-row-spec-label">Network</span></div>
                                <div class="vps-row-spec"><span class="vps-row-spec-val">30 TB</span><span class="vps-row-spec-label">Traffic</span></div>
                            </div>
                            <div class="vps-row-action">
                                <div class="vps-row-price"><span class="vps-row-amount">€5.49</span><span class="vps-row-cycle">/mo</span></div>
                                <a href="<?php echo e(SITE_URL); ?>/vps/" class="vps-row-btn">Order Now</a>
                            </div>
                        </div>
                        <div class="vps-row-details">
                            <div class="vps-row-details-features">
                                <span><i class="fas fa-check-circle"></i> <strong>FREE</strong> Anti-DDoS</span>
                                <span><i class="fas fa-check-circle"></i> <strong>99%</strong> Uptime Guarantee</span>
                                <span><i class="fas fa-check-circle"></i> <strong>Fair Usage</strong> Traffic</span>
                                <span><i class="fas fa-check-circle"></i> <strong>2</strong> Backup Points</span>
                                <span><i class="fas fa-check-circle"></i> <strong>24/7</strong> Expert Support</span>
                                <span><i class="fas fa-check-circle"></i> <strong>Dedicated</strong> IP Address</span>
                            </div>
                            <div class="vps-row-details-locations">
                                <div class="vps-loc-pills">
                                    <span class="vps-loc-pill"><span class="fi fi-de"></span> Frankfurt <em>~8ms</em></span>
                                    <span class="vps-loc-pill"><span class="fi fi-us"></span> Ashburn <em>~78ms</em></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ML Plans -->
            <div class="plans-panel" data-tab="vps-ml">
                <div class="vps-rows-header">
                    <span><i class="fas fa-check-circle"></i> Full Root SSH &amp; KVM · x86</span>
                    <span><i class="fas fa-check-circle"></i> IPv4 &amp; IPv6</span>
                    <span><i class="fas fa-map-marker-alt"></i> Germany +1 location</span>
                    <span><i class="fas fa-sync-alt"></i> Same price on renewal</span>
                </div>
                <div class="vps-rows">
                    <div class="vps-row popular expanded">
                        <span class="vps-row-badge">ML</span>
                        <div class="vps-row-header">
                            <div class="vps-row-identity">
                                <span class="vps-row-toggle"><i class="fas fa-chevron-down"></i></span>
                                <span class="vps-row-name">VPS ML 1</span>
                                <span class="vps-row-arch">x86</span>
                            </div>
                            <div class="vps-row-specs">
                                <div class="vps-row-spec"><span class="vps-row-spec-val">2 Cores</span><span class="vps-row-spec-label">CPU</span></div>
                                <div class="vps-row-spec"><span class="vps-row-spec-val">4 GB</span><span class="vps-row-spec-label">RAM</span></div>
                                <div class="vps-row-spec"><span class="vps-row-spec-val">40 GB</span><span class="vps-row-spec-label">NVMe</span></div>
                                <div class="vps-row-spec"><span class="vps-row-spec-val">10 Gbit/s</span><span class="vps-row-spec-label">Network</span></div>
                                <div class="vps-row-spec"><span class="vps-row-spec-val">30 TB</span><span class="vps-row-spec-label">Traffic</span></div>
                            </div>
                            <div class="vps-row-action">
                                <div class="vps-row-price"><span class="vps-row-amount">€5.49</span><span class="vps-row-cycle">/mo</span></div>
                                <a href="<?php echo e(SITE_URL); ?>/vps/" class="vps-row-btn">Order Now</a>
                            </div>
                        </div>
                        <div class="vps-row-details">
                            <div class="vps-row-details-features">
                                <span><i class="fas fa-check-circle"></i> <strong>FREE</strong> Anti-DDoS</span>
                                <span><i class="fas fa-check-circle"></i> <strong>99%</strong> Uptime Guarantee</span>
                                <span><i class="fas fa-check-circle"></i> <strong>Fair Usage</strong> Traffic</span>
                                <span><i class="fas fa-check-circle"></i> <strong>2</strong> Backup Points</span>
                                <span><i class="fas fa-check-circle"></i> <strong>24/7</strong> Expert Support</span>
                                <span><i class="fas fa-check-circle"></i> <strong>Dedicated</strong> IP Address</span>
                            </div>
                            <div class="vps-row-details-locations">
                                <div class="vps-loc-pills">
                                    <span class="vps-loc-pill"><span class="fi fi-de"></span> Frankfurt <em>~8ms</em></span>
                                    <span class="vps-loc-pill"><span class="fi fi-us"></span> Ashburn <em>~78ms</em></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pricing-custom">
                <p>Need more resources? <a href="<?php echo e(SITE_URL); ?>/contact-us/">Contact us</a> for custom VPS configurations.</p>
            </div>
        </div>
    </section>

    <!-- ═══════════════ GLOBAL LOCATIONS ═══════════════ -->
    <section class="locations-section reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag">Locations</div>
                <h2>50+ Global Datacenter Locations</h2>
                <p>Deploy your VPS infrastructure where it matters — close to your users, across 6 continents.</p>
            </div>

            <div class="locations-tabs">
                <button class="loc-tab active" data-loc-target="vps-europe"><i class="fas fa-globe-europe"></i> Europe</button>
                <button class="loc-tab" data-loc-target="vps-asia"><i class="fas fa-globe-asia"></i> Asia</button>
                <button class="loc-tab" data-loc-target="vps-africa"><i class="fas fa-globe-africa"></i> Africa</button>
                <button class="loc-tab" data-loc-target="vps-south-america"><i class="fas fa-globe-americas"></i> South America</button>
                <button class="loc-tab" data-loc-target="vps-north-america"><i class="fas fa-globe-americas"></i> North America</button>
                <button class="loc-tab" data-loc-target="vps-oceania"><i class="fas fa-globe"></i> Oceania</button>
            </div>

            <div class="locations-panels">
                <div class="loc-panel active" id="vps-europe">
                    <div class="loc-card-grid">
                        <a href="<?php echo e(SITE_URL); ?>/vps/cheap-vps-Netherland-location/" class="location-card location-card--active"><span class="fi fi-nl"></span> Netherlands</a>
                        <a href="<?php echo e(SITE_URL); ?>/vps/cheap-vps-France-location/" class="location-card"><span class="fi fi-fr"></span> France</a>
                        <a href="<?php echo e(SITE_URL); ?>/vps/cheap-vps-Turkey-location/" class="location-card"><span class="fi fi-tr"></span> Turkey</a>
                        <a href="<?php echo e(SITE_URL); ?>/vps/cheap-vps-Germany-location/" class="location-card"><span class="fi fi-de"></span> Germany</a>
                        <a href="<?php echo e(SITE_URL); ?>/vps/cheap-vps-UK-location/" class="location-card"><span class="fi fi-gb"></span> United Kingdom</a>
                        <a href="<?php echo e(SITE_URL); ?>/vps/cheap-vps-Finland-location/" class="location-card"><span class="fi fi-fi"></span> Finland</a>
                        <a href="<?php echo e(SITE_URL); ?>/vps/cheap-vps-Italy-location/" class="location-card"><span class="fi fi-it"></span> Italy</a>
                        <a href="<?php echo e(SITE_URL); ?>/vps/cheap-vps-Serbia-location/" class="location-card"><span class="fi fi-rs"></span> Serbia</a>
                        <a href="<?php echo e(SITE_URL); ?>/vps/cheap-vps-Greece-location/" class="location-card"><span class="fi fi-gr"></span> Greece</a>
                        <a href="<?php echo e(SITE_URL); ?>/vps/cheap-vps-Lithuania-location/" class="location-card"><span class="fi fi-lt"></span> Lithuania</a>
                        <a href="<?php echo e(SITE_URL); ?>/vps/cheap-vps-Luxembourg-location/" class="location-card"><span class="fi fi-lu"></span> Luxembourg</a>
                        <a href="<?php echo e(SITE_URL); ?>/vps/cheap-vps-Poland-location/" class="location-card"><span class="fi fi-pl"></span> Poland</a>
                        <a href="<?php echo e(SITE_URL); ?>/vps/cheap-vps-Portugal-location/" class="location-card"><span class="fi fi-pt"></span> Portugal</a>
                        <a href="<?php echo e(SITE_URL); ?>/vps/cheap-vps-Ireland-location/" class="location-card"><span class="fi fi-ie"></span> Ireland</a>
                        <a href="<?php echo e(SITE_URL); ?>/vps/cheap-vps-Russia-location/" class="location-card"><span class="fi fi-ru"></span> Russia</a>
                        <a href="<?php echo e(SITE_URL); ?>/vps/cheap-vps-Switzerland-location/" class="location-card"><span class="fi fi-ch"></span> Switzerland</a>
                        <a href="<?php echo e(SITE_URL); ?>/vps/cheap-vps-Ukraine-location/" class="location-card"><span class="fi fi-ua"></span> Ukraine</a>
                        <a href="<?php echo e(SITE_URL); ?>/vps/cheap-vps-Austria-location/" class="location-card"><span class="fi fi-at"></span> Austria</a>
                        <a href="<?php echo e(SITE_URL); ?>/vps/cheap-vps-Spain-location/" class="location-card"><span class="fi fi-es"></span> Spain</a>
                        <a href="<?php echo e(SITE_URL); ?>/vps/cheap-vps-Sweden-location/" class="location-card"><span class="fi fi-se"></span> Sweden</a>
                        <a href="<?php echo e(SITE_URL); ?>/vps/cheap-vps-Romania-location/" class="location-card"><span class="fi fi-ro"></span> Romania</a>
                        <a href="<?php echo e(SITE_URL); ?>/vps/cheap-vps-Norway-location/" class="location-card"><span class="fi fi-no"></span> Norway</a>
                        <a href="<?php echo e(SITE_URL); ?>/vps/cheap-vps-Estonia-location/" class="location-card"><span class="fi fi-ee"></span> Estonia</a>
                        <a href="<?php echo e(SITE_URL); ?>/vps/cheap-vps-Bulgaria-location/" class="location-card"><span class="fi fi-bg"></span> Bulgaria</a>
                        <a href="<?php echo e(SITE_URL); ?>/vps/cheap-vps-Belgium-location/" class="location-card"><span class="fi fi-be"></span> Belgium</a>
                        <a href="<?php echo e(SITE_URL); ?>/vps/cheap-vps-Cyprus-location/" class="location-card"><span class="fi fi-cy"></span> Cyprus</a>
                        <a href="<?php echo e(SITE_URL); ?>/vps/cheap-vps-Denmark-location/" class="location-card"><span class="fi fi-dk"></span> Denmark</a>
                    </div>
                </div>
                <div class="loc-panel" id="vps-asia">
                    <div class="loc-card-grid">
                        <a href="<?php echo e(SITE_URL); ?>/vps/cheap-vps-India-location/" class="location-card"><span class="fi fi-in"></span> India</a>
                        <a href="<?php echo e(SITE_URL); ?>/vps/cheap-vps-Malaysia-location/" class="location-card"><span class="fi fi-my"></span> Malaysia</a>
                        <a href="<?php echo e(SITE_URL); ?>/vps/cheap-vps-Singapore-location/" class="location-card"><span class="fi fi-sg"></span> Singapore</a>
                        <a href="<?php echo e(SITE_URL); ?>/vps/cheap-vps-Israel-location/" class="location-card"><span class="fi fi-il"></span> Israel</a>
                        <a href="<?php echo e(SITE_URL); ?>/vps/cheap-vps-Hong Kong-location/" class="location-card"><span class="fi fi-hk"></span> Hong Kong</a>
                        <a href="<?php echo e(SITE_URL); ?>/vps/cheap-vps-Japan-location/" class="location-card"><span class="fi fi-jp"></span> Japan</a>
                        <a href="<?php echo e(SITE_URL); ?>/vps/cheap-vps-UAE (Dubai)-location/" class="location-card"><span class="fi fi-ae"></span> UAE (Dubai)</a>
                    </div>
                </div>
                <div class="loc-panel" id="vps-africa">
                    <div class="loc-card-grid">
                        <a href="<?php echo e(SITE_URL); ?>/vps/cheap-vps-Morocco-location/" class="location-card"><span class="fi fi-ma"></span> Morocco</a>
                        <a href="<?php echo e(SITE_URL); ?>/vps/cheap-vps-Nigeria-location/" class="location-card"><span class="fi fi-ng"></span> Nigeria</a>
                        <a href="<?php echo e(SITE_URL); ?>/vps/cheap-vps-South Africa-location/" class="location-card"><span class="fi fi-za"></span> South Africa</a>
                    </div>
                </div>
                <div class="loc-panel" id="vps-south-america">
                    <div class="loc-card-grid">
                        <a href="<?php echo e(SITE_URL); ?>/vps/cheap-vps-Peru-location/" class="location-card"><span class="fi fi-pe"></span> Peru</a>
                        <a href="<?php echo e(SITE_URL); ?>/vps/cheap-vps-Bolivia-location/" class="location-card"><span class="fi fi-bo"></span> Bolivia</a>
                        <a href="<?php echo e(SITE_URL); ?>/vps/cheap-vps-Chile-location/" class="location-card"><span class="fi fi-cl"></span> Chile</a>
                        <a href="<?php echo e(SITE_URL); ?>/vps/cheap-vps-Costa Rica-location/" class="location-card"><span class="fi fi-cr"></span> Costa Rica</a>
                        <a href="<?php echo e(SITE_URL); ?>/vps/cheap-vps-Brazil-location/" class="location-card"><span class="fi fi-br"></span> Brazil</a>
                        <a href="<?php echo e(SITE_URL); ?>/vps/cheap-vps-Argentina-location/" class="location-card"><span class="fi fi-ar"></span> Argentina</a>
                        <a href="<?php echo e(SITE_URL); ?>/vps/cheap-vps-Colombia-location/" class="location-card"><span class="fi fi-co"></span> Colombia</a>
                        <a href="<?php echo e(SITE_URL); ?>/vps/cheap-vps-Ecuador-location/" class="location-card"><span class="fi fi-ec"></span> Ecuador</a>
                    </div>
                </div>
                <div class="loc-panel" id="vps-north-america">
                    <div class="loc-card-grid">
                        <a href="<?php echo e(SITE_URL); ?>/vps/cheap-vps-USA-location/" class="location-card"><span class="fi fi-us"></span> USA</a>
                        <a href="<?php echo e(SITE_URL); ?>/vps/cheap-vps-Canada-location/" class="location-card"><span class="fi fi-ca"></span> Canada</a>
                        <a href="<?php echo e(SITE_URL); ?>/vps/cheap-vps-Mexico-location/" class="location-card"><span class="fi fi-mx"></span> Mexico</a>
                    </div>
                </div>
                <div class="loc-panel" id="vps-oceania">
                    <div class="loc-card-grid">
                        <a href="<?php echo e(SITE_URL); ?>/vps/cheap-vps-Australia-location/" class="location-card"><span class="fi fi-au"></span> Australia</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ OPERATING SYSTEMS & APPS ═══════════════ -->
    <section class="vps-os reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag">Deploy Ready</div>
                <h2>Operating Systems, Apps &amp; Deployment Options</h2>
                <p>Pre-configured images ready to deploy. Reinstall any time from the control panel at no extra cost.</p>
            </div>

            <!-- OS Ticker — auto-scrolling marquee -->
            <div class="os-ticker-wrap">
                <div class="os-ticker">
                    <div class="os-ticker-track">
                        <div class="os-ticker-item">
                            <div class="os-ticker-icon"><i class="fab fa-ubuntu"></i></div>
                            <div class="os-ticker-info">
                                <span class="os-ticker-name">Ubuntu</span>
                                <span class="os-ticker-ver">24.04 LTS</span>
                            </div>
                        </div>
                        <div class="os-ticker-item">
                            <div class="os-ticker-icon icon-green"><i class="fab fa-linux"></i></div>
                            <div class="os-ticker-info">
                                <span class="os-ticker-name">Debian</span>
                                <span class="os-ticker-ver">12 Bookworm</span>
                            </div>
                        </div>
                        <div class="os-ticker-item">
                            <div class="os-ticker-icon icon-purple"><i class="fab fa-centos"></i></div>
                            <div class="os-ticker-info">
                                <span class="os-ticker-name">AlmaLinux</span>
                                <span class="os-ticker-ver">9</span>
                            </div>
                        </div>
                        <div class="os-ticker-item">
                            <div class="os-ticker-icon icon-amber"><i class="fab fa-centos"></i></div>
                            <div class="os-ticker-info">
                                <span class="os-ticker-name">CentOS</span>
                                <span class="os-ticker-ver">Stream 9</span>
                            </div>
                        </div>
                        <div class="os-ticker-item">
                            <div class="os-ticker-icon"><i class="fab fa-fedora"></i></div>
                            <div class="os-ticker-info">
                                <span class="os-ticker-name">Fedora</span>
                                <span class="os-ticker-ver">40</span>
                            </div>
                        </div>
                        <div class="os-ticker-item">
                            <div class="os-ticker-icon icon-green"><i class="fab fa-suse"></i></div>
                            <div class="os-ticker-info">
                                <span class="os-ticker-name">Rocky Linux</span>
                                <span class="os-ticker-ver">9</span>
                            </div>
                        </div>
                        <div class="os-ticker-item">
                            <div class="os-ticker-icon icon-purple"><i class="fab fa-docker"></i></div>
                            <div class="os-ticker-info">
                                <span class="os-ticker-name">Docker</span>
                                <span class="os-ticker-ver">Pre-installed</span>
                            </div>
                        </div>
                        <div class="os-ticker-item">
                            <div class="os-ticker-icon icon-amber"><i class="fas fa-server"></i></div>
                            <div class="os-ticker-info">
                                <span class="os-ticker-name">Proxmox</span>
                                <span class="os-ticker-ver">VE 8</span>
                            </div>
                        </div>
                        <!-- Duplicate set for seamless loop -->
                        <div class="os-ticker-item">
                            <div class="os-ticker-icon"><i class="fab fa-ubuntu"></i></div>
                            <div class="os-ticker-info">
                                <span class="os-ticker-name">Ubuntu</span>
                                <span class="os-ticker-ver">24.04 LTS</span>
                            </div>
                        </div>
                        <div class="os-ticker-item">
                            <div class="os-ticker-icon icon-green"><i class="fab fa-linux"></i></div>
                            <div class="os-ticker-info">
                                <span class="os-ticker-name">Debian</span>
                                <span class="os-ticker-ver">12 Bookworm</span>
                            </div>
                        </div>
                        <div class="os-ticker-item">
                            <div class="os-ticker-icon icon-purple"><i class="fab fa-centos"></i></div>
                            <div class="os-ticker-info">
                                <span class="os-ticker-name">AlmaLinux</span>
                                <span class="os-ticker-ver">9</span>
                            </div>
                        </div>
                        <div class="os-ticker-item">
                            <div class="os-ticker-icon icon-amber"><i class="fab fa-centos"></i></div>
                            <div class="os-ticker-info">
                                <span class="os-ticker-name">CentOS</span>
                                <span class="os-ticker-ver">Stream 9</span>
                            </div>
                        </div>
                        <div class="os-ticker-item">
                            <div class="os-ticker-icon"><i class="fab fa-fedora"></i></div>
                            <div class="os-ticker-info">
                                <span class="os-ticker-name">Fedora</span>
                                <span class="os-ticker-ver">40</span>
                            </div>
                        </div>
                        <div class="os-ticker-item">
                            <div class="os-ticker-icon icon-green"><i class="fab fa-suse"></i></div>
                            <div class="os-ticker-info">
                                <span class="os-ticker-name">Rocky Linux</span>
                                <span class="os-ticker-ver">9</span>
                            </div>
                        </div>
                        <div class="os-ticker-item">
                            <div class="os-ticker-icon icon-purple"><i class="fab fa-docker"></i></div>
                            <div class="os-ticker-info">
                                <span class="os-ticker-name">Docker</span>
                                <span class="os-ticker-ver">Pre-installed</span>
                            </div>
                        </div>
                        <div class="os-ticker-item">
                            <div class="os-ticker-icon icon-amber"><i class="fas fa-server"></i></div>
                            <div class="os-ticker-info">
                                <span class="os-ticker-name">Proxmox</span>
                                <span class="os-ticker-ver">VE 8</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Available versions detail grid -->
            <!-- <div class="os-version-grid">
                <div class="os-version-card">
                    <div class="os-version-header"><i class="fab fa-ubuntu"></i> Ubuntu</div>
                    <div class="os-version-tags">
                        <span class="os-vtag">20.04 LTS</span>
                        <span class="os-vtag">22.04 LTS</span>
                        <span class="os-vtag active">24.04 LTS</span>
                    </div>
                </div>
                <div class="os-version-card">
                    <div class="os-version-header"><i class="fab fa-linux"></i> Debian</div>
                    <div class="os-version-tags">
                        <span class="os-vtag">11 Bullseye</span>
                        <span class="os-vtag active">12 Bookworm</span>
                    </div>
                </div>
                <div class="os-version-card">
                    <div class="os-version-header"><i class="fab fa-centos"></i> AlmaLinux</div>
                    <div class="os-version-tags">
                        <span class="os-vtag">8</span>
                        <span class="os-vtag active">9</span>
                    </div>
                </div>
                <div class="os-version-card">
                    <div class="os-version-header"><i class="fab fa-centos"></i> CentOS</div>
                    <div class="os-version-tags">
                        <span class="os-vtag">7</span>
                        <span class="os-vtag">Stream 8</span>
                        <span class="os-vtag active">Stream 9</span>
                    </div>
                </div>
                <div class="os-version-card">
                    <div class="os-version-header"><i class="fab fa-fedora"></i> Fedora</div>
                    <div class="os-version-tags">
                        <span class="os-vtag">39</span>
                        <span class="os-vtag active">40</span>
                    </div>
                </div>
                <div class="os-version-card">
                    <div class="os-version-header"><i class="fab fa-suse"></i> Rocky Linux</div>
                    <div class="os-version-tags">
                        <span class="os-vtag">8</span>
                        <span class="os-vtag active">9</span>
                    </div>
                </div>
            </div> -->
        </div>
    </section>

    <!-- ═══════════════ INFRASTRUCTURE METRICS ═══════════════ -->
    <section class="vps-infra reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag">Infrastructure</div>
                <h2>Enterprise-grade hardware, dedicated to you</h2>
                <p>Every VPS runs on isolated KVM instances with dedicated CPU, RAM, and NVMe storage — no noisy neighbors, no throttling.</p>
            </div>
            <div class="vps-infra-grid">
                <div class="vps-infra-card">
                    <div class="vps-infra-icon"><i class="fas fa-microchip"></i></div>
                    <div class="vps-infra-value">Up to 8</div>
                    <div class="vps-infra-label">Dedicated vCPU Cores</div>
                    <p>Intel/AMD x86 and Arm64 processors with guaranteed clock speeds and full isolation.</p>
                </div>
                <div class="vps-infra-card">
                    <div class="vps-infra-icon icon-green"><i class="fas fa-hdd"></i></div>
                    <div class="vps-infra-value">NVMe SSD</div>
                    <div class="vps-infra-label">Storage on All Plans</div>
                    <p>Ultra-fast NVMe solid-state drives for I/O-intensive workloads — up to 400GB per server.</p>
                </div>
                <div class="vps-infra-card">
                    <div class="vps-infra-icon icon-purple"><i class="fas fa-network-wired"></i></div>
                    <div class="vps-infra-value">10 Gbit/s</div>
                    <div class="vps-infra-label">Network Uplink</div>
                    <p>High-throughput connectivity with up to 30TB bandwidth. Low latency across all regions.</p>
                </div>
                <div class="vps-infra-card">
                    <div class="vps-infra-icon icon-amber"><i class="fas fa-globe-americas"></i></div>
                    <div class="vps-infra-value">50+</div>
                    <div class="vps-infra-label">Global Locations</div>
                    <p>Deploy your server close to your users — from Europe and North America to Asia and beyond.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ VPS USE CASES ═══════════════ -->
    <section class="vps-usecases reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag">Use Cases</div>
                <h2>What can you run on a VPS?</h2>
                <p>From web applications to game servers — a VPS gives you dedicated resources and full control for any workload.</p>
            </div>
            <div class="vps-usecases-grid">
                <div class="vps-usecase-card">
                    <div class="vps-usecase-icon"><i class="fas fa-globe"></i></div>
                    <h4>Web Applications</h4>
                    <p>Host websites, APIs, and web apps with full stack control — Node.js, Python, PHP, Ruby, and more.</p>
                    <ul class="vps-usecase-list">
                        <li>WordPress &amp; WooCommerce</li>
                        <li>Custom APIs &amp; backends</li>
                        <li>SaaS applications</li>
                    </ul>
                </div>
                <div class="vps-usecase-card">
                    <div class="vps-usecase-icon icon-green"><i class="fas fa-gamepad"></i></div>
                    <h4>Game Servers</h4>
                    <p>Low-latency multiplayer servers with dedicated CPU and high-speed networking for smooth gameplay.</p>
                    <ul class="vps-usecase-list">
                        <li>Minecraft &amp; FiveM</li>
                        <li>CS2 &amp; Valheim</li>
                        <li>Custom game engines</li>
                    </ul>
                </div>
                <div class="vps-usecase-card">
                    <div class="vps-usecase-icon icon-purple"><i class="fas fa-chart-line"></i></div>
                    <h4>Trading &amp; Bots</h4>
                    <p>Run trading algorithms, forex bots, and crypto strategies on always-on servers with minimal latency.</p>
                    <ul class="vps-usecase-list">
                        <li>MetaTrader 4/5</li>
                        <li>Crypto bots &amp; arbitrage</li>
                        <li>24/7 uptime guaranteed</li>
                    </ul>
                </div>
                <div class="vps-usecase-card">
                    <div class="vps-usecase-icon icon-amber"><i class="fas fa-brain"></i></div>
                    <h4>AI &amp; ML Workloads</h4>
                    <p>Train models, run inference pipelines, and deploy AI services with high-memory VPS configurations.</p>
                    <ul class="vps-usecase-list">
                        <li>Model training &amp; fine-tuning</li>
                        <li>LLM inference endpoints</li>
                        <li>Data processing pipelines</li>
                    </ul>
                </div>
                <div class="vps-usecase-card">
                    <div class="vps-usecase-icon icon-green"><i class="fas fa-code-branch"></i></div>
                    <h4>Dev &amp; CI/CD</h4>
                    <p>Staging environments, build runners, and private dev servers with instant provisioning.</p>
                    <ul class="vps-usecase-list">
                        <li>GitHub Actions runners</li>
                        <li>Docker &amp; Kubernetes</li>
                        <li>Staging &amp; preview deploys</li>
                    </ul>
                </div>
                <div class="vps-usecase-card">
                    <div class="vps-usecase-icon icon-purple"><i class="fas fa-database"></i></div>
                    <h4>Databases &amp; Storage</h4>
                    <p>Self-managed database servers with NVMe-backed performance and full configuration control.</p>
                    <ul class="vps-usecase-list">
                        <li>MySQL, PostgreSQL, MongoDB</li>
                        <li>Redis &amp; Elasticsearch</li>
                        <li>S3-compatible object storage</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ DEPLOY FLOW ═══════════════ -->
    <section class="vps-deploy reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag">Get Started</div>
                <h2>Deploy your server in 3 steps</h2>
                <p>From sign-up to a running server — it takes less than 5 minutes.</p>
            </div>
            <div class="vps-deploy-steps">
                <div class="vps-deploy-step">
                    <div class="vps-step-num">1</div>
                    <h4>Choose a Location</h4>
                    <p>Pick from 50+ global datacenter locations closest to your users for the lowest latency.</p>
                </div>
                <div class="vps-deploy-connector"><i class="fas fa-arrow-right"></i></div>
                <div class="vps-deploy-step">
                    <div class="vps-step-num">2</div>
                    <h4>Select Your Config</h4>
                    <p>Pick your CPU, RAM, storage, and OS. Choose from YTA, HA, DE, or ML plan tiers.</p>
                </div>
                <div class="vps-deploy-connector"><i class="fas fa-arrow-right"></i></div>
                <div class="vps-deploy-step">
                    <div class="vps-step-num">3</div>
                    <h4>Deploy &amp; Connect</h4>
                    <p>Your VPS is provisioned in minutes. SSH in with root access and start building.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ SECURITY & RELIABILITY ═══════════════ -->
    <section class="vps-security reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag">Security</div>
                <h2>Built-in security &amp; reliability</h2>
                <p>Every VPS comes with enterprise-level protections — from network-layer DDoS mitigation to automated backups.</p>
            </div>
            <div class="vps-security-grid">
                <div class="cp-security-card">
                    <div class="cp-security-icon"><i class="fas fa-shield-alt"></i></div>
                    <h4>DDoS Protection</h4>
                    <p>Network-level DDoS mitigation included on every plan. Advanced protection available as add-on.</p>
                </div>
                <div class="cp-security-card">
                    <div class="cp-security-icon icon-green"><i class="fas fa-eye"></i></div>
                    <h4>24/7 Monitoring</h4>
                    <p>Continuous infrastructure monitoring with automated alerts for network, CPU, and disk anomalies.</p>
                </div>
                <div class="cp-security-card">
                    <div class="cp-security-icon icon-purple"><i class="fas fa-database"></i></div>
                    <h4>Automated Backups</h4>
                    <p>Schedule regular backups through the control panel. Restore snapshots at any time with one click.</p>
                </div>
                <div class="cp-security-card">
                    <div class="cp-security-icon icon-amber"><i class="fas fa-server"></i></div>
                    <h4>KVM Isolation</h4>
                    <p>Full hardware-level virtualization ensures complete isolation between all virtual machines on each host.</p>
                </div>
                <div class="cp-security-card">
                    <div class="cp-security-icon icon-green"><i class="fas fa-lock"></i></div>
                    <h4>SSH Key Auth</h4>
                    <p>Deploy with SSH key authentication for secure, password-less access to your server.</p>
                </div>
                <div class="cp-security-card">
                    <div class="cp-security-icon icon-purple"><i class="fas fa-network-wired"></i></div>
                    <h4>99.9% Uptime SLA</h4>
                    <p>Enterprise-grade network redundancy with Tier III+ datacenters and multiple upstream providers.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ VPS FEATURES (Swiper) ═══════════════ -->
    <section class="features-grid-section reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag">Features</div>
                <h2>Everything included with every plan</h2>
                <p>No hidden extras — full root access, KVM isolation, NVMe storage, and more come standard.</p>
            </div>

            <div class="swiper features-swiper" id="featuresSwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><div class="feature-card"><div class="feature-icon"><i class="fas fa-terminal"></i></div><h4>Full Root Access</h4><p>Complete SSH root access with all ports open (except 25).</p></div></div>
                    <div class="swiper-slide"><div class="feature-card"><div class="feature-icon icon-green"><i class="fas fa-layer-group"></i></div><h4>KVM Virtualization</h4><p>Full virtualization for maximum performance and isolation.</p></div></div>
                    <div class="swiper-slide"><div class="feature-card"><div class="feature-icon icon-purple"><i class="fas fa-hdd"></i></div><h4>NVMe SSD Storage</h4><p>Ultra-fast storage on all plans for optimal I/O performance.</p></div></div>
                    <div class="swiper-slide"><div class="feature-card"><div class="feature-icon icon-amber"><i class="fas fa-network-wired"></i></div><h4>10 Gbit/s Network</h4><p>High-speed connectivity with up to 30TB bandwidth.</p></div></div>
                    <div class="swiper-slide"><div class="feature-card"><div class="feature-icon"><i class="fas fa-shield-alt"></i></div><h4>DDoS Protection</h4><p>Advanced protection against distributed denial-of-service attacks.</p></div></div>
                    <div class="swiper-slide"><div class="feature-card"><div class="feature-icon icon-green"><i class="fas fa-exchange-alt"></i></div><h4>IP Management</h4><p>Add, change, or delete IPs according to your requirements.</p></div></div>
                    <div class="swiper-slide"><div class="feature-card"><div class="feature-icon icon-purple"><i class="fab fa-linux"></i></div><h4>Linux OS Options</h4><p>Ubuntu, AlmaLinux, Debian, CentOS, and more.</p></div></div>
                    <div class="swiper-slide"><div class="feature-card"><div class="feature-icon icon-amber"><i class="fas fa-microchip"></i></div><h4>Intel/AMD &amp; Arm64</h4><p>Choose x86 or Arm64 architecture to match your workload.</p></div></div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ WHY CHOOSE US ═══════════════ -->
    <section class="why-us reveal">
        <div class="container">
            <div class="why-us-layout">
                <div class="why-us-intro">
                    <div class="section-tag">Advantages</div>
                    <h2 class="why-us-title">Why YottaSrc VPS?</h2>
                    <p class="why-us-desc">Enterprise-grade infrastructure with responsive human support.</p>
                </div>
                <div class="why-us-grid">
                    <div class="why-us-card"><div class="why-us-card-icon"><i class="fas fa-headset"></i></div><h4>24/7 Expert Support</h4><p>Average response time: 10 minutes.</p></div>
                    <div class="why-us-card"><div class="why-us-card-icon icon-green"><i class="fas fa-tachometer-alt"></i></div><h4>10 Gbit/s Network</h4><p>High-speed connectivity in 50+ global locations.</p></div>
                    <div class="why-us-card"><div class="why-us-card-icon icon-purple"><i class="fas fa-shield-alt"></i></div><h4>DDoS Protection</h4><p>Advanced protection included with every plan.</p></div>
                    <div class="why-us-card"><div class="why-us-card-icon icon-amber"><i class="fas fa-globe"></i></div><h4>50+ Locations</h4><p>Own DC in Romania + partner facilities worldwide.</p></div>
                    <div class="why-us-card"><div class="why-us-card-icon icon-green"><i class="fas fa-tags"></i></div><h4>Same Price on Renewal</h4><p>No surprises. No hidden fees ever.</p></div>
                    <div class="why-us-card"><div class="why-us-card-icon icon-purple"><i class="fas fa-terminal"></i></div><h4>Full Root Access</h4><p>Complete control over your server environment.</p></div>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ VPS FAQ ═══════════════ -->
    <section class="faq-section reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag">FAQ</div>
                <h2>Frequently asked questions</h2>
                <p>Everything you need to know about our VPS/VDS services — from setup to billing.</p>
            </div>
            <div class="faq-layout">
                <div class="faq-tabs">
                    <button class="faq-tab active" data-faq-target="faq-vps-general"><i class="fas fa-server"></i> General</button>
                    <button class="faq-tab" data-faq-target="faq-vps-technical"><i class="fas fa-cogs"></i> Technical</button>
                    <button class="faq-tab" data-faq-target="faq-vps-billing"><i class="fas fa-file-invoice-dollar"></i> Billing</button>
                </div>
                <div class="faq-panels">
                    <div class="faq-panel active" id="faq-vps-general">
                        <div class="faq-item"><button class="faq-question"><span>What virtualization technology is used?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>We use KVM (Kernel-based Virtual Machine) which provides full hardware virtualization for maximum performance, stability, and isolation between virtual servers.</p></div></div>
                        <div class="faq-item"><button class="faq-question"><span>How long does activation take?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>VPS servers are typically activated within 2 to 20 minutes after payment confirmation. You'll receive login credentials automatically via email.</p></div></div>
                        <div class="faq-item"><button class="faq-question"><span>What operating systems are available?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>We offer Ubuntu, Debian, AlmaLinux, CentOS, and more. You can reinstall with a different OS any time from the control panel at no extra cost.</p></div></div>
                        <div class="faq-item"><button class="faq-question"><span>Can I change my server location?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>You can request a location change by contacting support. Data migration may be required depending on your current setup.</p></div></div>
                    </div>
                    <div class="faq-panel" id="faq-vps-technical">
                        <div class="faq-item"><button class="faq-question"><span>Do I get full root access?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>Yes, all VPS plans come with full root/admin SSH access. All ports are open except port 25 (to prevent spam). You have complete control over your server environment.</p></div></div>
                        <div class="faq-item"><button class="faq-question"><span>Do VPS plans include DDoS protection?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>Yes, all VPS plans include basic DDoS protection to keep your server safe. Advanced protection is available as an add-on for higher-risk deployments.</p></div></div>
                        <div class="faq-item"><button class="faq-question"><span>Can I upgrade my VPS later?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>Absolutely. You can upgrade your CPU, RAM, and storage at any time through the control panel or by contacting support. Upgrades are applied with minimal downtime.</p></div></div>
                        <div class="faq-item"><button class="faq-question"><span>What is the difference between YTA and HA plans?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>YTA plans are budget-friendly and great for starting out. HA plans offer high-availability infrastructure with 10Gbit/s networking and more locations for mission-critical workloads.</p></div></div>
                    </div>
                    <div class="faq-panel" id="faq-vps-billing">
                        <div class="faq-item"><button class="faq-question"><span>Is the renewal price the same?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>Yes — what you see is what you pay. There are no hidden fees and your renewal price is always the same as the initial price. No surprises.</p></div></div>
                        <div class="faq-item"><button class="faq-question"><span>What payment methods are accepted?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>We accept credit/debit cards, PayPal, bank transfers, and cryptocurrency payments. All transactions are secure and encrypted.</p></div></div>
                        <div class="faq-item"><button class="faq-question"><span>Can I get a refund?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>We offer a money-back guarantee within the first 7 days. If you're not satisfied with the service, contact our support team for a full refund.</p></div></div>
                        <div class="faq-item"><button class="faq-question"><span>Do you offer longer billing cycles?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>Yes, we offer monthly, quarterly, semi-annual, and annual billing cycles. Longer periods may include additional discounts.</p></div></div>
                    </div>
                </div>
            </div>
            <div class="faq-actions">
                <a href="<?php echo e(SITE_URL); ?>/contact-us/" class="btn-primary">Open a Ticket <i class="fas fa-headset"></i></a>
                <a href="<?php echo e(SITE_URL); ?>/faq" class="btn-secondary">Browse All FAQ <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </section>

    <!-- ═══════════════ COMPETITORS COMPARISON ═══════════════ -->
    <section class="section-compare reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag">Comparison</div>
                <h2>Why YottaSrc VPS beats the competition</h2>
                <p>See how our Linux VPS stacks up against other providers on performance, pricing, and flexibility.</p>
            </div>

            <div class="compare-table-wrap">
                <table class="compare-table">
                    <thead>
                        <tr>
                            <th>Feature</th>
                            <th class="compare-highlight">YottaSrc VPS</th>
                            <th>Other VPS Providers</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><i class="fas fa-coins"></i> Starting Price</td>
                            <td class="compare-highlight"><i class="fas fa-check-circle"></i> From €2.75/mo</td>
                            <td><i class="fas fa-minus-circle"></i> From $5–6/mo</td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-microchip"></i> Virtualization</td>
                            <td class="compare-highlight"><i class="fas fa-check-circle"></i> Full KVM isolation</td>
                            <td><i class="fas fa-minus-circle"></i> Often OpenVZ / shared</td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-hdd"></i> Storage</td>
                            <td class="compare-highlight"><i class="fas fa-check-circle"></i> NVMe SSD on all plans</td>
                            <td><i class="fas fa-minus-circle"></i> SATA SSD or HDD common</td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-network-wired"></i> Network</td>
                            <td class="compare-highlight"><i class="fas fa-check-circle"></i> Up to 10 Gbit/s</td>
                            <td><i class="fas fa-minus-circle"></i> 1 Gbit/s typical</td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-globe"></i> Locations</td>
                            <td class="compare-highlight"><i class="fas fa-check-circle"></i> 50+ regions, 6 continents</td>
                            <td><i class="fas fa-minus-circle"></i> 5–15 regions</td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-terminal"></i> Root Access</td>
                            <td class="compare-highlight"><i class="fas fa-check-circle"></i> Full root SSH on all plans</td>
                            <td><i class="fas fa-check-circle"></i> Usually available</td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-shield-alt"></i> DDoS Protection</td>
                            <td class="compare-highlight"><i class="fas fa-check-circle"></i> Free on all plans</td>
                            <td><i class="fas fa-times-circle"></i> Paid add-on or limited</td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-tag"></i> Renewal Price</td>
                            <td class="compare-highlight"><i class="fas fa-check-circle"></i> Same price on renewal</td>
                            <td><i class="fas fa-times-circle"></i> 2–3× price increase</td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-credit-card"></i> Crypto Payments</td>
                            <td class="compare-highlight"><i class="fas fa-check-circle"></i> BTC, USDT, TRX &amp; more</td>
                            <td><i class="fas fa-times-circle"></i> Cards/PayPal only</td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-headset"></i> Support</td>
                            <td class="compare-highlight"><i class="fas fa-check-circle"></i> &lt;10 min response, 24/7</td>
                            <td><i class="fas fa-minus-circle"></i> Ticket-based, hours to days</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- ═══════════════ PROMOTIONS CTA ═══════════════ -->
    <section class="promo-cta reveal">
        <div class="container">
            <div class="promo-cta-inner">
                <div class="promo-cta-glow"></div>
                <div class="promo-cta-icon"><i class="fas fa-rocket"></i></div>
                <h2>Ready to deploy your server?</h2>
                <p>Get started with a high-performance VPS in minutes. No hidden fees, same price on renewal.</p>
                <a href="#plans" class="btn-primary">View Plans <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
