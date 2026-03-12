<?php
/**
 * YottaSrc — VPS Reseller
 * ====================================
 * VPS Reseller — resell VPS infrastructure to your clients with full white-label control.
 */
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/topbar.php';
?>

    <!-- ═══════════════ HERO ═══════════════ -->
    <section class="page-hero vps-hero reveal">
        <div class="container">
            <div class="page-hero-split">
                <div class="page-hero-content">
                    <div class="page-breadcrumb">
                        <a href="<?php echo e(SITE_URL); ?>/">Home</a>
                        <i class="fas fa-chevron-right"></i>
                        <a href="<?php echo e(SITE_URL); ?>/cpanel-reseller/">Reseller</a>
                        <i class="fas fa-chevron-right"></i>
                        <span>VPS Reseller</span>
                    </div>
                    <h1>VPS Reseller — <span class="highlight">Sell Cloud Infrastructure</span></h1>
                    <p class="page-hero-desc">
                        Resell VPS instances under your own brand. Provision KVM-powered virtual servers for your clients via API or dashboard — with full white-label control and competitive margins.
                    </p>
                    <div class="page-hero-ctas">
                        <a href="#plans" class="btn-primary">View Plans <i class="fas fa-arrow-down"></i></a>
                        <a href="<?php echo e(SITE_URL); ?>/contact-us/" class="btn-secondary"><i class="fas fa-headset"></i> Talk to Sales</a>
                    </div>
                    <div class="page-hero-badges">
                        <div class="hero-badge-item"><i class="fas fa-check"></i> KVM Virtualization</div>
                        <div class="hero-badge-item"><i class="fas fa-check"></i> API Provisioning</div>
                        <div class="hero-badge-item"><i class="fas fa-check"></i> White-Label Dashboard</div>
                        <div class="hero-badge-item"><i class="fas fa-check"></i> 20+ Locations</div>
                    </div>
                </div>
                <div class="page-hero-visual">
                    <svg viewBox="0 0 440 400" fill="none" xmlns="http://www.w3.org/2000/svg" class="hero-illustration" aria-label="VPS Reseller infrastructure illustration">
                        <!-- Window Frame -->
                        <rect x="20" y="20" width="400" height="360" rx="16" fill="var(--bg-card)" stroke="var(--border-primary)" stroke-width="1.5"/>
                        <rect x="20" y="20" width="400" height="38" rx="16" fill="var(--bg-tertiary)"/>
                        <rect x="20" y="42" width="400" height="16" fill="var(--bg-tertiary)"/>
                        <circle cx="42" cy="39" r="5" fill="var(--brand-error)" opacity="0.6"/>
                        <circle cx="58" cy="39" r="5" fill="var(--brand-warning)" opacity="0.6"/>
                        <circle cx="74" cy="39" r="5" fill="var(--brand-secondary)" opacity="0.6"/>
                        <text x="220" y="44" text-anchor="middle" fill="var(--text-tertiary)" font-size="11" font-family="var(--font-mono)" font-weight="600" opacity="0.6">VPS Reseller — Dashboard</text>

                        <!-- Left side: Server rack visual -->
                        <rect x="32" y="68" width="80" height="290" rx="8" fill="var(--bg-tertiary)" opacity="0.5"/>
                        <text x="72" y="84" text-anchor="middle" fill="var(--text-tertiary)" font-size="7" font-family="var(--font-mono)" font-weight="700" opacity="0.4">INFRASTRUCTURE</text>

                        <!-- Server nodes -->
                        <rect x="38" y="94" width="68" height="28" rx="6" fill="var(--bg-card)" stroke="var(--brand-primary)" stroke-width="0.8"/>
                        <circle cx="52" cy="108" r="4" fill="var(--brand-secondary)" opacity="0.6"/>
                        <text x="76" y="112" text-anchor="middle" fill="var(--text-tertiary)" font-size="7" font-family="var(--font-mono)" opacity="0.5">Node-EU01</text>

                        <rect x="38" y="130" width="68" height="28" rx="6" fill="var(--bg-card)" stroke="var(--brand-primary)" stroke-width="0.8"/>
                        <circle cx="52" cy="144" r="4" fill="var(--brand-secondary)" opacity="0.6"/>
                        <text x="76" y="148" text-anchor="middle" fill="var(--text-tertiary)" font-size="7" font-family="var(--font-mono)" opacity="0.5">Node-US01</text>

                        <rect x="38" y="166" width="68" height="28" rx="6" fill="var(--bg-card)" stroke="var(--brand-primary)" stroke-width="0.8"/>
                        <circle cx="52" cy="180" r="4" fill="var(--brand-secondary)" opacity="0.6"/>
                        <text x="76" y="184" text-anchor="middle" fill="var(--text-tertiary)" font-size="7" font-family="var(--font-mono)" opacity="0.5">Node-AS01</text>

                        <rect x="38" y="202" width="68" height="28" rx="6" fill="var(--bg-card)" stroke="var(--brand-primary)" stroke-width="0.8"/>
                        <circle cx="52" cy="216" r="4" fill="var(--brand-warning)" opacity="0.6"/>
                        <text x="76" y="220" text-anchor="middle" fill="var(--text-tertiary)" font-size="7" font-family="var(--font-mono)" opacity="0.5">Node-EU02</text>

                        <!-- Right side: VPS instances list -->
                        <text x="128" y="82" fill="var(--brand-primary)" font-size="9" font-family="var(--font-display)" font-weight="700" letter-spacing="0.8" opacity="0.7">CLIENT VPS INSTANCES</text>
                        <line x1="128" y1="88" x2="406" y2="88" stroke="var(--border-primary)" stroke-width="0.6"/>

                        <!-- VPS Instance Row 1 -->
                        <rect x="128" y="96" width="278" height="42" rx="8" fill="var(--bg-tertiary)"/>
                        <circle cx="148" cy="117" r="10" fill="var(--brand-primary)" opacity="0.15"/>
                        <text x="148" y="121" text-anchor="middle" fill="var(--brand-primary)" font-size="9" font-family="var(--font-body)" font-weight="700" opacity="0.7">V1</text>
                        <text x="170" y="111" fill="var(--text-secondary)" font-size="8.5" font-family="var(--font-body)" font-weight="600" opacity="0.7">client-web-prod (2 vCPU · 4 GB)</text>
                        <text x="170" y="125" fill="var(--text-tertiary)" font-size="7" font-family="var(--font-mono)" opacity="0.5">Finland · 80 GB NVMe · Running</text>
                        <rect x="358" y="107" width="40" height="16" rx="8" fill="var(--brand-secondary)" opacity="0.15"/>
                        <text x="378" y="118" text-anchor="middle" fill="var(--brand-secondary)" font-size="7" font-family="var(--font-mono)" font-weight="600" opacity="0.7">Live</text>

                        <!-- VPS Instance Row 2 -->
                        <rect x="128" y="146" width="278" height="42" rx="8" fill="var(--bg-tertiary)"/>
                        <circle cx="148" cy="167" r="10" fill="var(--brand-secondary)" opacity="0.15"/>
                        <text x="148" y="171" text-anchor="middle" fill="var(--brand-secondary)" font-size="9" font-family="var(--font-body)" font-weight="700" opacity="0.7">V2</text>
                        <text x="170" y="161" fill="var(--text-secondary)" font-size="8.5" font-family="var(--font-body)" font-weight="600" opacity="0.7">app-server-staging (4 vCPU · 8 GB)</text>
                        <text x="170" y="175" fill="var(--text-tertiary)" font-size="7" font-family="var(--font-mono)" opacity="0.5">Germany · 160 GB NVMe · Running</text>
                        <rect x="358" y="157" width="40" height="16" rx="8" fill="var(--brand-secondary)" opacity="0.15"/>
                        <text x="378" y="168" text-anchor="middle" fill="var(--brand-secondary)" font-size="7" font-family="var(--font-mono)" font-weight="600" opacity="0.7">Live</text>

                        <!-- VPS Instance Row 3 -->
                        <rect x="128" y="196" width="278" height="42" rx="8" fill="var(--bg-tertiary)"/>
                        <circle cx="148" cy="217" r="10" fill="var(--brand-accent)" opacity="0.15"/>
                        <text x="148" y="221" text-anchor="middle" fill="var(--brand-accent)" font-size="9" font-family="var(--font-body)" font-weight="700" opacity="0.7">V3</text>
                        <text x="170" y="211" fill="var(--text-secondary)" font-size="8.5" font-family="var(--font-body)" font-weight="600" opacity="0.7">database-cluster (8 vCPU · 16 GB)</text>
                        <text x="170" y="225" fill="var(--text-tertiary)" font-size="7" font-family="var(--font-mono)" opacity="0.5">USA · 320 GB NVMe · Running</text>
                        <rect x="358" y="207" width="40" height="16" rx="8" fill="var(--brand-secondary)" opacity="0.15"/>
                        <text x="378" y="218" text-anchor="middle" fill="var(--brand-secondary)" font-size="7" font-family="var(--font-mono)" font-weight="600" opacity="0.7">Live</text>

                        <!-- Summary bar -->
                        <rect x="128" y="256" width="278" height="50" rx="10" fill="var(--bg-card)" stroke="var(--border-primary)" stroke-width="0.8"/>
                        <text x="175" y="278" text-anchor="middle" fill="var(--brand-primary)" font-size="16" font-family="var(--font-display)" font-weight="800" opacity="0.8">12</text>
                        <text x="175" y="296" text-anchor="middle" fill="var(--text-tertiary)" font-size="7" font-family="var(--font-mono)" opacity="0.5">Active VPS</text>
                        <line x1="220" y1="264" x2="220" y2="300" stroke="var(--border-primary)" stroke-width="0.6"/>
                        <text x="267" y="278" text-anchor="middle" fill="var(--brand-secondary)" font-size="16" font-family="var(--font-display)" font-weight="800" opacity="0.8">48 vCPU</text>
                        <text x="267" y="296" text-anchor="middle" fill="var(--text-tertiary)" font-size="7" font-family="var(--font-mono)" opacity="0.5">Allocated</text>
                        <line x1="322" y1="264" x2="322" y2="300" stroke="var(--border-primary)" stroke-width="0.6"/>
                        <text x="367" y="278" text-anchor="middle" fill="var(--brand-accent)" font-size="16" font-family="var(--font-display)" font-weight="800" opacity="0.8">3.2 TB</text>
                        <text x="367" y="296" text-anchor="middle" fill="var(--text-tertiary)" font-size="7" font-family="var(--font-mono)" opacity="0.5">Storage</text>

                        <!-- + Deploy VPS button -->
                        <rect x="128" y="322" width="120" height="30" rx="8" fill="var(--brand-primary)" opacity="0.12" stroke="var(--brand-primary)" stroke-width="0.8" stroke-dasharray="4 2"/>
                        <text x="188" y="341" text-anchor="middle" fill="var(--brand-primary)" font-size="10" font-family="var(--font-body)" font-weight="600" opacity="0.6">+ Deploy VPS</text>

                        <!-- API badge -->
                        <rect x="265" y="322" width="140" height="30" rx="8" fill="var(--bg-tertiary)"/>
                        <text x="335" y="338" text-anchor="middle" fill="var(--text-tertiary)" font-size="8" font-family="var(--font-mono)" opacity="0.5">API: POST /v1/vps/create</text>

                        <!-- Floating badges -->
                        <rect x="356" y="2" width="80" height="36" rx="10" fill="var(--bg-card)" stroke="var(--border-primary)" stroke-width="1">
                            <animate attributeName="y" values="2;8;2" dur="5s" repeatCount="indefinite"/>
                        </rect>
                        <text x="372" y="17" fill="var(--text-tertiary)" font-size="7" font-family="var(--font-mono)" font-weight="600" opacity="0.6">
                            CLIENTS
                            <animate attributeName="y" values="17;23;17" dur="5s" repeatCount="indefinite"/>
                        </text>
                        <text x="372" y="31" fill="var(--brand-secondary)" font-size="13" font-family="var(--font-display)" font-weight="800" opacity="0.8">
                            8 Active
                            <animate attributeName="y" values="31;37;31" dur="5s" repeatCount="indefinite"/>
                        </text>

                        <circle cx="8" cy="100" r="3" fill="var(--brand-primary)" opacity="0.25">
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
                <span class="partner-logo"><i class="fas fa-microchip"></i> KVM</span>
                <span class="partner-logo"><i class="fas fa-hdd"></i> NVMe SSD</span>
                <span class="partner-logo"><i class="fas fa-network-wired"></i> 10 Gbit/s</span>
                <span class="partner-logo"><i class="fas fa-shield-alt"></i> DDoS Protection</span>
                <span class="partner-logo"><i class="fas fa-code"></i> REST API</span>
                <span class="partner-logo"><i class="fas fa-globe"></i> 20+ Locations</span>
            </div>
        </div>
    </section>

    <!-- ═══════════════ PRICING PLANS ═══════════════ -->
    <section class="plans reveal" id="plans">
        <div class="container">
            <div class="section-header">
                <div class="section-tag">Pricing</div>
                <h2>VPS Reseller plans</h2>
                <p>Wholesale VPS pricing with volume tiers. The more you sell, the better your margins.</p>
            </div>

            <div class="plans-panel active" data-tab="vps-reseller">
                <div class="swiper plans-swiper">
                    <div class="swiper-wrapper">
                        <!-- Starter Pool -->
                        <div class="swiper-slide"><div class="plan-card">
                            <div class="plan-head"><div class="plan-name">Starter Pool</div><span class="plan-save">Save 25%</span></div>
                            <div class="plan-target">Up to 10 VPS instances</div>
                            <div class="plan-price">
                                <span class="old-price">€39.99</span>
                                <span class="current-price"><span class="currency">€</span><span class="amount">29.99</span><span class="period">EUR / mo</span></span>
                            </div>
                            <div class="plan-renewal"><i class="fas fa-check"></i> Same price on renewal</div>
                            <button class="plan-cta" data-href="<?php echo e(CP_URL); ?>/order/vps-reseller/starter-pool">Choose Plan</button>
                            <div class="plan-resources">
                                <div class="plan-res"><i class="fas fa-microchip"></i><span class="res-val">16 vCPU</span><span class="res-label">Total CPU Pool</span></div>
                                <div class="plan-res"><i class="fas fa-memory"></i><span class="res-val">32 GB</span><span class="res-label">RAM Pool</span></div>
                                <div class="plan-res"><i class="fas fa-hdd"></i><span class="res-val">500 GB</span><span class="res-label">NVMe Storage</span></div>
                                <div class="plan-res"><i class="fas fa-wifi"></i><span class="res-val">10 TB</span><span class="res-label">Bandwidth</span></div>
                            </div>
                            <div class="plan-divider"><span>Included</span></div>
                            <ul class="plan-features">
                                <li><i class="fas fa-server"></i> KVM Virtualization</li>
                                <li><i class="fas fa-code"></i> REST API Access</li>
                                <li><i class="fas fa-palette"></i> White-Label Dashboard</li>
                                <li><i class="fas fa-shield-alt"></i> DDoS Protection</li>
                                <li><i class="fas fa-camera"></i> VPS Snapshots</li>
                                <li><i class="fas fa-map-marker-alt"></i> 20+ Locations</li>
                                <li><i class="fas fa-cogs"></i> WHMCS Module</li>
                            </ul>
                        </div></div>

                        <!-- Growth Pool (Popular) -->
                        <div class="swiper-slide"><div class="plan-card popular">
                            <div class="plan-badge">Most Popular</div>
                            <div class="plan-head"><div class="plan-name">Growth Pool</div><span class="plan-save">Save 30%</span></div>
                            <div class="plan-target">Up to 25 VPS instances</div>
                            <div class="plan-price">
                                <span class="old-price">€99.99</span>
                                <span class="current-price"><span class="currency">€</span><span class="amount">69.99</span><span class="period">EUR / mo</span></span>
                            </div>
                            <div class="plan-renewal"><i class="fas fa-check"></i> Same price on renewal</div>
                            <button class="plan-cta" data-href="<?php echo e(CP_URL); ?>/order/vps-reseller/growth-pool">Choose Plan</button>
                            <div class="plan-resources">
                                <div class="plan-res"><i class="fas fa-microchip"></i><span class="res-val">48 vCPU</span><span class="res-label">Total CPU Pool</span></div>
                                <div class="plan-res"><i class="fas fa-memory"></i><span class="res-val">96 GB</span><span class="res-label">RAM Pool</span></div>
                                <div class="plan-res"><i class="fas fa-hdd"></i><span class="res-val">1.5 TB</span><span class="res-label">NVMe Storage</span></div>
                                <div class="plan-res"><i class="fas fa-wifi"></i><span class="res-val">30 TB</span><span class="res-label">Bandwidth</span></div>
                            </div>
                            <div class="plan-divider"><span>Included</span></div>
                            <ul class="plan-features">
                                <li><i class="fas fa-server"></i> KVM Virtualization</li>
                                <li><i class="fas fa-code"></i> REST API Access</li>
                                <li><i class="fas fa-palette"></i> White-Label Dashboard</li>
                                <li><i class="fas fa-shield-alt"></i> DDoS Protection</li>
                                <li><i class="fas fa-camera"></i> VPS Snapshots</li>
                                <li><i class="fas fa-map-marker-alt"></i> 20+ Locations</li>
                                <li><i class="fas fa-cogs"></i> WHMCS + Blesta Module</li>
                            </ul>
                        </div></div>

                        <!-- Scale Pool -->
                        <div class="swiper-slide"><div class="plan-card">
                            <div class="plan-head"><div class="plan-name">Scale Pool</div><span class="plan-save">Save 25%</span></div>
                            <div class="plan-target">Up to 50 VPS instances</div>
                            <div class="plan-price">
                                <span class="old-price">€159.99</span>
                                <span class="current-price"><span class="currency">€</span><span class="amount">119.99</span><span class="period">EUR / mo</span></span>
                            </div>
                            <div class="plan-renewal"><i class="fas fa-check"></i> Same price on renewal</div>
                            <button class="plan-cta" data-href="<?php echo e(CP_URL); ?>/order/vps-reseller/scale-pool">Choose Plan</button>
                            <div class="plan-resources">
                                <div class="plan-res"><i class="fas fa-microchip"></i><span class="res-val">80 vCPU</span><span class="res-label">Total CPU Pool</span></div>
                                <div class="plan-res"><i class="fas fa-memory"></i><span class="res-val">160 GB</span><span class="res-label">RAM Pool</span></div>
                                <div class="plan-res"><i class="fas fa-hdd"></i><span class="res-val">2.5 TB</span><span class="res-label">NVMe Storage</span></div>
                                <div class="plan-res"><i class="fas fa-wifi"></i><span class="res-val">50 TB</span><span class="res-label">Bandwidth</span></div>
                            </div>
                            <div class="plan-divider"><span>Included</span></div>
                            <ul class="plan-features">
                                <li><i class="fas fa-server"></i> KVM Virtualization</li>
                                <li><i class="fas fa-code"></i> REST API + Webhooks</li>
                                <li><i class="fas fa-palette"></i> White-Label Dashboard</li>
                                <li><i class="fas fa-shield-alt"></i> Advanced DDoS Mitigation</li>
                                <li><i class="fas fa-camera"></i> VPS Snapshots + Backups</li>
                                <li><i class="fas fa-map-marker-alt"></i> 20+ Locations</li>
                                <li><i class="fas fa-cogs"></i> WHMCS + Blesta Module</li>
                            </ul>
                        </div></div>

                        <!-- Enterprise Pool -->
                        <div class="swiper-slide"><div class="plan-card">
                            <div class="plan-head"><div class="plan-name">Enterprise Pool</div><span class="plan-save">Save 35%</span></div>
                            <div class="plan-target">Unlimited VPS instances</div>
                            <div class="plan-price">
                                <span class="old-price">€229.99</span>
                                <span class="current-price"><span class="currency">€</span><span class="amount">149.99</span><span class="period">EUR / mo</span></span>
                            </div>
                            <div class="plan-renewal"><i class="fas fa-check"></i> Same price on renewal</div>
                            <button class="plan-cta" data-href="<?php echo e(CP_URL); ?>/order/vps-reseller/enterprise-pool">Choose Plan</button>
                            <div class="plan-resources">
                                <div class="plan-res"><i class="fas fa-microchip"></i><span class="res-val">128 vCPU</span><span class="res-label">Total CPU Pool</span></div>
                                <div class="plan-res"><i class="fas fa-memory"></i><span class="res-val">256 GB</span><span class="res-label">RAM Pool</span></div>
                                <div class="plan-res"><i class="fas fa-hdd"></i><span class="res-val">4 TB</span><span class="res-label">NVMe Storage</span></div>
                                <div class="plan-res"><i class="fas fa-wifi"></i><span class="res-val">Unlimited</span><span class="res-label">Bandwidth</span></div>
                            </div>
                            <div class="plan-divider"><span>Included</span></div>
                            <ul class="plan-features">
                                <li><i class="fas fa-server"></i> KVM Virtualization</li>
                                <li><i class="fas fa-code"></i> REST API + Webhooks</li>
                                <li><i class="fas fa-palette"></i> White-Label Dashboard</li>
                                <li><i class="fas fa-shield-alt"></i> Advanced DDoS Mitigation</li>
                                <li><i class="fas fa-camera"></i> VPS Snapshots + Backups</li>
                                <li><i class="fas fa-map-marker-alt"></i> 20+ Locations</li>
                                <li><i class="fas fa-headset"></i> Priority Support</li>
                            </ul>
                        </div></div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>

            <div class="pricing-custom">
                <p>Need a custom resource pool? <a href="<?php echo e(SITE_URL); ?>/contact-us/">Contact our sales team</a> for tailored enterprise configurations.</p>
            </div>
        </div>
    </section>

    <!-- ═══════════════ WHY VPS RESELLING ═══════════════ -->
    <section class="cp-benefits reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag">Why Resell VPS</div>
                <h2>Profit from cloud infrastructure</h2>
                <p>Offer dedicated cloud resources under your brand — zero hardware investment, maximum margins.</p>
            </div>

            <div class="cp-benefits-grid">
                <div class="cp-security-card">
                    <div class="cp-security-icon"><i class="fas fa-code"></i></div>
                    <h4>API Automation</h4>
                    <p>Deploy and manage VPS instances via REST API. Automate provisioning through WHMCS, Blesta, or custom integrations.</p>
                </div>
                <div class="cp-security-card">
                    <div class="cp-security-icon icon-green"><i class="fas fa-palette"></i></div>
                    <h4>White-Label Dashboard</h4>
                    <p>Clients manage servers through your branded dashboard — your logo, your domain, your identity. Zero trace of YottaSrc.</p>
                </div>
                <div class="cp-security-card">
                    <div class="cp-security-icon icon-purple"><i class="fas fa-cubes"></i></div>
                    <h4>Scalable VPS Pools</h4>
                    <p>Start with a small resource pool and scale on demand. Add CPU, RAM, and storage to your pool as your client base grows.</p>
                </div>
                <div class="cp-security-card">
                    <div class="cp-security-icon icon-amber"><i class="fas fa-hand-holding-usd"></i></div>
                    <h4>Competitive Margins</h4>
                    <p>Wholesale pricing with volume discounts. Set your own prices and keep 100% of the profit from every client.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ BENTO FEATURES ═══════════════ -->
    <section class="bento-features reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag">Features</div>
                <h2>Everything you need to resell VPS</h2>
                <p>Provision, manage, and scale VPS instances for your clients with powerful tools.</p>
            </div>

            <div class="bento-grid">
                <div class="bento-card bento-lg">
                    <div class="bento-card-icon"><i class="fas fa-terminal"></i></div>
                    <h3>REST API &amp; Automation</h3>
                    <p>Full API access for provisioning, scaling, snapshotting, and managing VPS instances. Integrate with WHMCS, Blesta, or build custom frontends. Webhooks for real-time event notifications.</p>
                    <div class="bento-metrics">
                        <div class="bento-metric">
                            <span class="bento-metric-val">REST</span>
                            <span class="bento-metric-label">API v2</span>
                        </div>
                        <div class="bento-metric">
                            <span class="bento-metric-val">Webhooks</span>
                            <span class="bento-metric-label">Real-Time</span>
                        </div>
                    </div>
                </div>

                <div class="bento-card bento-lg bento-green">
                    <div class="bento-card-icon icon-green"><i class="fas fa-expand-arrows-alt"></i></div>
                    <h3>Instant Scaling</h3>
                    <p>Scale VPS resources up or down instantly — CPU, RAM, and storage. No downtime required for most upgrades. Clients can scale from their dashboard or you can manage it via API.</p>
                    <div class="bento-metrics">
                        <div class="bento-metric">
                            <span class="bento-metric-val">0s</span>
                            <span class="bento-metric-label">Scale Downtime</span>
                        </div>
                        <div class="bento-metric">
                            <span class="bento-metric-val">CPU/RAM/SSD</span>
                            <span class="bento-metric-label">All Scalable</span>
                        </div>
                    </div>
                </div>

                <div class="bento-card bento-sm">
                    <div class="bento-card-icon icon-purple"><i class="fas fa-camera"></i></div>
                    <h4>VPS Snapshots</h4>
                    <p>On-demand snapshots for backup and cloning.</p>
                </div>
                <div class="bento-card bento-sm">
                    <div class="bento-card-icon icon-amber"><i class="fas fa-shield-alt"></i></div>
                    <h4>DDoS Protection</h4>
                    <p>Enterprise DDoS mitigation at every location.</p>
                </div>
                <div class="bento-card bento-sm">
                    <div class="bento-card-icon"><i class="fas fa-network-wired"></i></div>
                    <h4>Private Networking</h4>
                    <p>VLAN and private IPs between VPS instances.</p>
                </div>
                <div class="bento-card bento-sm">
                    <div class="bento-card-icon icon-green"><i class="fas fa-compact-disc"></i></div>
                    <h4>OS Templates</h4>
                    <p>Ubuntu, Debian, CentOS, Windows, and more.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ AUTOMATION & INTEGRATION ═══════════════ -->
    <section class="vps-automation reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag">Developer Tools</div>
                <h2>Automation &amp; Integration</h2>
                <p>Automate every aspect of VPS provisioning through our API, modules, and webhooks.</p>
            </div>

            <div class="vps-auto-grid">
                <div class="vps-auto-features">
                    <div class="vps-auto-item">
                        <div class="vps-auto-icon"><i class="fas fa-cogs"></i></div>
                        <div class="vps-auto-text">
                            <h4>WHMCS Module</h4>
                            <p>Native WHMCS module for automated provisioning, suspension, and resource management. Zero manual intervention.</p>
                        </div>
                    </div>
                    <div class="vps-auto-item">
                        <div class="vps-auto-icon icon-green"><i class="fas fa-code"></i></div>
                        <div class="vps-auto-text">
                            <h4>REST API Provisioning</h4>
                            <p>Create, destroy, resize, and snapshot VPS instances programmatically. Full CRUD operations with token-based auth.</p>
                        </div>
                    </div>
                    <div class="vps-auto-item">
                        <div class="vps-auto-icon icon-purple"><i class="fas fa-bell"></i></div>
                        <div class="vps-auto-text">
                            <h4>Webhook Events</h4>
                            <p>Real-time HTTP callbacks for creation, deletion, scaling, status changes, and failure events.</p>
                        </div>
                    </div>
                    <div class="vps-auto-item">
                        <div class="vps-auto-icon icon-amber"><i class="fas fa-rocket"></i></div>
                        <div class="vps-auto-text">
                            <h4>Automated Deployment</h4>
                            <p>Pre-configured OS templates, cloud-init scripts, and SSH key injection for instant server provisioning.</p>
                        </div>
                    </div>
                    <div class="vps-auto-item">
                        <div class="vps-auto-icon"><i class="fas fa-expand-arrows-alt"></i></div>
                        <div class="vps-auto-text">
                            <h4>Instant Scaling</h4>
                            <p>Scale CPU, RAM, and disk via a single API call. Most upgrades apply without reboot or downtime.</p>
                        </div>
                    </div>
                </div>
                <div class="vps-auto-preview">
                    <div class="vps-code-card">
                        <div class="vps-code-header">
                            <div class="vps-code-dots">
                                <span></span><span></span><span></span>
                            </div>
                            <span class="vps-code-title">POST /v1/vps/create</span>
                        </div>
                        <pre class="vps-code-body"><code>{
  "hostname": "client-web-01",
  "plan": "vps-2cpu-4gb",
  "location": "finland",
  "os": "ubuntu-24.04",
  "ssh_keys": ["key-abc123"],
  "backups": true,
  "label": "Production Web"
}

// Response: 201 Created
{
  "id": "vps-9f3a7b",
  "status": "provisioning",
  "ipv4": "185.x.x.x",
  "ready_in": "~45s"
}</code></pre>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ GLOBAL INFRASTRUCTURE (compact) ═══════════════ -->
    <section class="dc-showcase dc-showcase-compact reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag">Global Infrastructure</div>
                <h2>Deploy VPS worldwide</h2>
                <p>Your clients choose from premium locations with enterprise hardware and low-latency networking.</p>
            </div>

            <div class="dc-strip-stats">
                <div class="dc-strip-stat"><i class="fas fa-server"></i> <strong>6</strong> Locations</div>
                <div class="dc-strip-stat"><i class="fas fa-network-wired"></i> <strong>10 Gbit/s</strong> Network</div>
                <div class="dc-strip-stat"><i class="fas fa-shield-alt"></i> <strong>Anti-DDoS</strong> Included</div>
                <div class="dc-strip-stat"><i class="fas fa-tachometer-alt"></i> <strong>&lt;30ms</strong> Latency</div>
            </div>

            <div class="dc-country-grid">
                <a href="<?php echo e(SITE_URL); ?>/cheap-cpanel-france-location/" class="dc-country-card">
                    <span class="fi fi-fr"></span>
                    <span>France</span>
                </a>
                <a href="<?php echo e(SITE_URL); ?>/cheap-cpanel-germany-location/" class="dc-country-card">
                    <span class="fi fi-de"></span>
                    <span>Germany</span>
                </a>
                <a href="<?php echo e(SITE_URL); ?>/cheap-cpanel-uk-location/" class="dc-country-card">
                    <span class="fi fi-gb"></span>
                    <span>UK</span>
                </a>
                <a href="<?php echo e(SITE_URL); ?>/cheap-cpanel-netherlands-location/" class="dc-country-card">
                    <span class="fi fi-nl"></span>
                    <span>Netherlands</span>
                </a>
                <a href="<?php echo e(SITE_URL); ?>/cheap-cpanel-turkey-location/" class="dc-country-card">
                    <span class="fi fi-tr"></span>
                    <span>Turkey</span>
                </a>
                <a href="<?php echo e(SITE_URL); ?>/cheap-cpanel-usa-location/" class="dc-country-card">
                    <span class="fi fi-us"></span>
                    <span>USA</span>
                </a>
            </div>
        </div>
    </section>

    <!-- ═══════════════ HOW IT WORKS ═══════════════ -->
    <section class="onboarding reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag">Get Started</div>
                <h2>Launch your VPS business</h2>
                <p>Go from sign-up to provisioning client VPS instances in four simple steps.</p>
            </div>

            <div class="vps-steps-grid">
                <div class="vps-step-card">
                    <div class="vps-step-num">1</div>
                    <div class="vps-step-icon"><i class="fas fa-user-plus"></i></div>
                    <h4>Create Account</h4>
                    <p>Sign up for a VPS Reseller account and pick your resource pool tier.</p>
                </div>
                <div class="vps-step-card">
                    <div class="vps-step-num">2</div>
                    <div class="vps-step-icon icon-green"><i class="fas fa-sliders-h"></i></div>
                    <h4>Configure VPS Pools</h4>
                    <p>Define VPS templates, OS options, and resource allocations for your clients.</p>
                </div>
                <div class="vps-step-card">
                    <div class="vps-step-num">3</div>
                    <div class="vps-step-icon icon-purple"><i class="fas fa-tags"></i></div>
                    <h4>Set Pricing</h4>
                    <p>Set your own retail prices via WHMCS, Blesta, or your custom frontend.</p>
                </div>
                <div class="vps-step-card">
                    <div class="vps-step-num">4</div>
                    <div class="vps-step-icon icon-amber"><i class="fas fa-rocket"></i></div>
                    <h4>Start Selling</h4>
                    <p>Clients order VPS through your branded storefront — provisioned automatically.</p>
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
                        <div class="faq-item"><button class="faq-question"><span>What is VPS Reseller?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>VPS Reseller lets you purchase a pool of cloud resources (CPU, RAM, storage) and resell them as individual VPS instances to your own clients, under your own brand.</p></div></div>
                        <div class="faq-item"><button class="faq-question"><span>Do I need technical expertise?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>You'll need basic familiarity with API integration or billing platform configuration (WHMCS/Blesta). The VPS provisioning itself is fully automated — your clients manage their own servers.</p></div></div>
                        <div class="faq-item"><button class="faq-question"><span>Can my clients install any OS?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>Yes. Clients can choose from Ubuntu, Debian, CentOS, AlmaLinux, Rocky Linux, Windows Server, and custom ISO uploads.</p></div></div>
                        <div class="faq-item"><button class="faq-question"><span>Is the dashboard white-labeled?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>Yes, fully. You set your logo, brand colors, and custom domain. Your clients see only your brand when managing their VPS instances.</p></div></div>
                    </div>

                    <div class="faq-panel" id="faq-technical">
                        <div class="faq-item"><button class="faq-question"><span>What virtualization technology is used?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>All VPS instances use KVM (Kernel-based Virtual Machine) virtualization with dedicated resources — no overselling of CPU or RAM.</p></div></div>
                        <div class="faq-item"><button class="faq-question"><span>Can clients scale their VPS?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>Yes, clients can scale CPU, RAM, and storage from their dashboard (or you can manage it via API). Most upgrades require no downtime.</p></div></div>
                        <div class="faq-item"><button class="faq-question"><span>Is DDoS protection included?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>Yes, enterprise-grade DDoS mitigation is included at every location. No additional cost for standard protection levels.</p></div></div>
                        <div class="faq-item"><button class="faq-question"><span>Do you offer an SLA?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>Yes, we guarantee 99.9% uptime SLA across all locations. Credit is issued for any downtime exceeding the SLA threshold.</p></div></div>
                    </div>

                    <div class="faq-panel" id="faq-billing">
                        <div class="faq-item"><button class="faq-question"><span>How does pool pricing work?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>You purchase a resource pool (CPU, RAM, Storage) at a fixed monthly rate. You divide this pool into individual VPS instances for your clients and set your own pricing.</p></div></div>
                        <div class="faq-item"><button class="faq-question"><span>Can I add more resources?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>Yes, you can add additional CPU, RAM, or storage to your pool anytime. You can also upgrade to a larger pool tier.</p></div></div>
                        <div class="faq-item"><button class="faq-question"><span>Does the price increase on renewal?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>No — same price on every renewal. No lock-in contracts and no surprise increases.</p></div></div>
                        <div class="faq-item"><button class="faq-question"><span>What payment methods do you accept?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>Credit/debit cards, PayPal, cryptocurrency (Bitcoin, USDT, etc.), and 10+ other methods.</p></div></div>
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
                    <p class="why-us-desc">VPS resellers worldwide trust YottaSrc for reliable infrastructure and powerful APIs.</p>
                    <a href="#plans" class="btn-primary">Get Started <i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="why-us-grid">
                    <div class="why-us-card">
                        <div class="why-us-card-icon"><i class="fas fa-headset"></i></div>
                        <h4>24/7 Priority Support</h4>
                        <p>Dedicated infrastructure support team available around the clock.</p>
                    </div>
                    <div class="why-us-card">
                        <div class="why-us-card-icon icon-green"><i class="fas fa-microchip"></i></div>
                        <h4>Enterprise Hardware</h4>
                        <p>AMD EPYC &amp; Intel Xeon with NVMe SSDs and 10 Gbit/s networking.</p>
                    </div>
                    <div class="why-us-card">
                        <div class="why-us-card-icon icon-purple"><i class="fas fa-shield-alt"></i></div>
                        <h4>DDoS Protected</h4>
                        <p>Enterprise DDoS mitigation at all locations, included at no extra cost.</p>
                    </div>
                    <div class="why-us-card">
                        <div class="why-us-card-icon icon-amber"><i class="fas fa-globe"></i></div>
                        <h4>20+ Global Locations</h4>
                        <p>Deploy VPS instances across 4 continents for worldwide coverage.</p>
                    </div>
                    <div class="why-us-card">
                        <div class="why-us-card-icon icon-green"><i class="fas fa-code"></i></div>
                        <h4>Full API Access</h4>
                        <p>REST API v2 with webhooks for complete automation and integration.</p>
                    </div>
                    <div class="why-us-card">
                        <div class="why-us-card-icon icon-purple"><i class="fas fa-chart-line"></i></div>
                        <h4>Scalable Resources</h4>
                        <p>Start small and scale your resource pool as your client base grows.</p>
                    </div>
                </div>
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
                <div class="promo-cta-icon"><i class="fas fa-server"></i></div>
                <h2>Ready to resell cloud infrastructure?</h2>
                <p>Start with a resource pool from <strong>€29.99 EUR / mo</strong>. KVM-powered, API-provisioned, fully white-labeled.</p>
                <a href="#plans" class="btn-primary">View Plans <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
