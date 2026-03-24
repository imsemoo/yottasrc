<?php
/**
 * YottaSrc — Datacenter Infrastructure
 * ======================================
 * Global datacenter infrastructure overview page.
 */
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/topbar.php';
?>

    <!-- ═══════════════ HERO ═══════════════ -->
    <section class="page-hero">
        <div class="container">
            <div class="page-hero-content">
                <div class="page-breadcrumb" >
                    <a href="<?php echo e(SITE_URL); ?>/">Home</a>
                    <i class="fas fa-chevron-right"></i>
                    <span>Datacenter</span>
                </div>
                <h1>Enterprise-Grade <span class="highlight">Infrastructure</span></h1>
                <p class="page-hero-desc">
                    Our global network spans 50+ locations across 6 continents — powered by Tier III+ datacenters, redundant networking, and enterprise hardware built for maximum uptime and performance.
                </p>
                <div class="dc-hero-stats">
                    <div class="dc-hero-stat">
                        <div class="dc-hero-stat-icon"><i class="fas fa-map-marker-alt"></i></div>
                        <div class="dc-hero-stat-body">
                            <div class="dc-hero-stat-value"><span class="hero-stat-num" data-count="50">0</span><span class="dc-hero-stat-suffix">+</span></div>
                            <div class="dc-hero-stat-label">Locations</div>
                        </div>
                    </div>
                    <div class="dc-hero-stat">
                        <div class="dc-hero-stat-icon"><i class="fas fa-globe-americas"></i></div>
                        <div class="dc-hero-stat-body">
                            <div class="dc-hero-stat-value"><span class="hero-stat-num" data-count="6">0</span></div>
                            <div class="dc-hero-stat-label">Continents</div>
                        </div>
                    </div>
                    <div class="dc-hero-stat">
                        <div class="dc-hero-stat-icon"><i class="fas fa-shield-alt"></i></div>
                        <div class="dc-hero-stat-body">
                            <div class="dc-hero-stat-value"><span class="hero-stat-num" data-count="99">0</span><span class="dc-hero-stat-suffix">.9%</span></div>
                            <div class="dc-hero-stat-label">Uptime SLA</div>
                        </div>
                    </div>
                    <div class="dc-hero-stat">
                        <div class="dc-hero-stat-icon"><i class="fas fa-network-wired"></i></div>
                        <div class="dc-hero-stat-body">
                            <div class="dc-hero-stat-value"><span class="hero-stat-num" data-count="10">0</span><span class="dc-hero-stat-suffix"> Gbit/s</span></div>
                            <div class="dc-hero-stat-label">Network</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ INFRASTRUCTURE OVERVIEW ═══════════════ -->
    <section class="bento-features reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag">Infrastructure</div>
                <h2>Built for reliability at scale</h2>
                <p>Every component of our infrastructure is designed with redundancy, performance, and security in mind.</p>
            </div>

            <div class="bento-grid">
                <div class="bento-card bento-sm">
                    <div class="bento-card-icon"><i class="fas fa-building"></i></div>
                    <h4>Tier III+ Datacenters</h4>
                    <p>Tier III/IV certified facilities with N+1 redundancy, 99.982%+ guaranteed uptime, and dual utility feeds.</p>
                </div>
                <div class="bento-card bento-sm">
                    <div class="bento-card-icon icon-green"><i class="fas fa-bolt"></i></div>
                    <h3>Redundant Power</h3>
                    <p>Dual utility feeds, N+1 UPS systems, and on-site diesel generators ensure zero-downtime power delivery.</p>
                </div>
                <div class="bento-card bento-sm">
                    <div class="bento-card-icon icon-blue"><i class="fas fa-snowflake"></i></div>
                    <h3>Advanced Cooling</h3>
                    <p>Hot/cold aisle containment with precision CRAC units maintaining optimal temperature and humidity.</p>
                </div>
                <div class="bento-card bento-sm">
                    <div class="bento-card-icon icon-purple"><i class="fas fa-shield-alt"></i></div>
                    <h3>Physical Security</h3>
                    <p>24/7 on-site security, biometric access, CCTV monitoring, and mantrap entry at all facilities.</p>
                </div>
                <div class="bento-card bento-sm">
                    <div class="bento-card-icon icon-amber"><i class="fas fa-fire-extinguisher"></i></div>
                    <h3>Fire Suppression</h3>
                    <p>VESDA early-warning smoke detection and FM-200 gas-based fire suppression systems.</p>
                </div>
                <div class="bento-card bento-sm">
                    <div class="bento-card-icon icon-rose"><i class="fas fa-plug"></i></div>
                    <h3>Redundant Connectivity</h3>
                    <p>Diverse fiber paths from multiple carriers with automatic failover — no single point of network failure.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ DATACENTER LOCATIONS MAP ═══════════════ -->
<?php
$dc_heading = 'Our global datacenter network';
$dc_desc = 'Deploy across 20+ locations worldwide. Each facility meets our strict requirements for power, connectivity, and security.';
include __DIR__ . '/includes/section-dc-showcase.php';
?>

    <!-- ═══════════════ LOCATION DETAILS ═══════════════ -->
    <section class="dc-locations reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag">Locations</div>
                <h2>Datacenter details by location</h2>
                <p>Click any location to view its datacenter operator, specifications, and capabilities.</p>
            </div>

            <div class="dc-locations-inner">
            <!-- ── Europe ── -->
            <div class="dc-region">
                <div class="dc-region-label"><i class="fas fa-globe-europe"></i> Europe</div>

                <div class="dc-loc-card open" data-dc-expand>
                    <button class="dc-loc-header">
                        <span class="dc-loc-flag"><span class="fi fi-ro"></span></span>
                        <span class="dc-loc-name">Bucharest, Romania <span class="dc-hq-pill">HQ</span></span>
                        <span class="dc-loc-operator">M247 / Voxility</span>
                        <span class="dc-loc-tier">Tier III</span>
                        <i class="fas fa-chevron-down dc-loc-arrow"></i>
                    </button>
                    <div class="dc-loc-body">
                        <div class="dc-loc-details">
                            <div class="dc-loc-detail"><i class="fas fa-building"></i><strong>Operator:</strong> M247 (formerly Voxility) — Bucharest DC1</div>
                            <div class="dc-loc-detail"><i class="fas fa-bolt"></i><strong>Power:</strong> 2N redundant UPS, on-site diesel generators, dual utility feeds</div>
                            <div class="dc-loc-detail"><i class="fas fa-snowflake"></i><strong>Cooling:</strong> N+1 precision CRAC units, hot/cold aisle containment</div>
                            <div class="dc-loc-detail"><i class="fas fa-network-wired"></i><strong>Network:</strong> 10 Gbit/s uplinks, Cogent, NTT, GTT, DE-CIX peering</div>
                            <div class="dc-loc-detail"><i class="fas fa-shield-alt"></i><strong>Security:</strong> 24/7 on-site guards, biometric access, CCTV, mantrap</div>
                            <div class="dc-loc-detail"><i class="fas fa-certificate"></i><strong>Certifications:</strong> ISO 27001, SOC 2, PCI DSS</div>
                            <div class="dc-loc-detail"><i class="fas fa-tachometer-alt"></i><strong>DDoS Protection:</strong> Up to 1 Tbps mitigation capacity</div>
                        </div>
                    </div>
                </div>

                <div class="dc-loc-card" data-dc-expand>
                    <button class="dc-loc-header">
                        <span class="dc-loc-flag"><span class="fi fi-de"></span></span>
                        <span class="dc-loc-name">Frankfurt, Germany</span>
                        <span class="dc-loc-operator">Hetzner</span>
                        <span class="dc-loc-tier">Tier III+</span>
                        <i class="fas fa-chevron-down dc-loc-arrow"></i>
                    </button>
                    <div class="dc-loc-body">
                        <div class="dc-loc-details">
                            <div class="dc-loc-detail"><i class="fas fa-building"></i><strong>Operator:</strong> Hetzner Online — Falkenstein / Frankfurt DC</div>
                            <div class="dc-loc-detail"><i class="fas fa-bolt"></i><strong>Power:</strong> 2N UPS systems, diesel generators with 48h fuel reserve</div>
                            <div class="dc-loc-detail"><i class="fas fa-snowflake"></i><strong>Cooling:</strong> Free-cooling with CRAC backup, PUE 1.2</div>
                            <div class="dc-loc-detail"><i class="fas fa-network-wired"></i><strong>Network:</strong> 10 Gbit/s, DE-CIX Frankfurt peering, Tier-1 transit</div>
                            <div class="dc-loc-detail"><i class="fas fa-shield-alt"></i><strong>Security:</strong> 24/7 surveillance, electronic access control, CCTV</div>
                            <div class="dc-loc-detail"><i class="fas fa-certificate"></i><strong>Certifications:</strong> ISO 27001, TÜV certified, EN 50600</div>
                            <div class="dc-loc-detail"><i class="fas fa-tachometer-alt"></i><strong>DDoS Protection:</strong> Integrated volumetric DDoS mitigation</div>
                        </div>
                    </div>
                </div>

                <div class="dc-loc-card" data-dc-expand>
                    <button class="dc-loc-header">
                        <span class="dc-loc-flag"><span class="fi fi-fi"></span></span>
                        <span class="dc-loc-name">Helsinki, Finland</span>
                        <span class="dc-loc-operator">Hetzner</span>
                        <span class="dc-loc-tier">Tier III</span>
                        <i class="fas fa-chevron-down dc-loc-arrow"></i>
                    </button>
                    <div class="dc-loc-body">
                        <div class="dc-loc-details">
                            <div class="dc-loc-detail"><i class="fas fa-building"></i><strong>Operator:</strong> Hetzner Online — Helsinki DC Park</div>
                            <div class="dc-loc-detail"><i class="fas fa-bolt"></i><strong>Power:</strong> 2N UPS, diesel generators, renewable energy grid</div>
                            <div class="dc-loc-detail"><i class="fas fa-snowflake"></i><strong>Cooling:</strong> Natural cold air cooling (Nordic climate advantage), PUE 1.15</div>
                            <div class="dc-loc-detail"><i class="fas fa-network-wired"></i><strong>Network:</strong> 10 Gbit/s, FICIX Helsinki peering, low-latency to Nordics &amp; Russia</div>
                            <div class="dc-loc-detail"><i class="fas fa-shield-alt"></i><strong>Security:</strong> 24/7 monitoring, biometric/card access, fenced perimeter</div>
                            <div class="dc-loc-detail"><i class="fas fa-certificate"></i><strong>Certifications:</strong> ISO 27001, EN 50600</div>
                            <div class="dc-loc-detail"><i class="fas fa-tachometer-alt"></i><strong>DDoS Protection:</strong> Upstream filtering with Hetzner DDoS shield</div>
                        </div>
                    </div>
                </div>

                <div class="dc-loc-card" data-dc-expand>
                    <button class="dc-loc-header">
                        <span class="dc-loc-flag"><span class="fi fi-fr"></span></span>
                        <span class="dc-loc-name">Paris, France</span>
                        <span class="dc-loc-operator">OVHcloud</span>
                        <span class="dc-loc-tier">Tier III+</span>
                        <i class="fas fa-chevron-down dc-loc-arrow"></i>
                    </button>
                    <div class="dc-loc-body">
                        <div class="dc-loc-details">
                            <div class="dc-loc-detail"><i class="fas fa-building"></i><strong>Operator:</strong> OVHcloud — Gravelines / Roubaix DC</div>
                            <div class="dc-loc-detail"><i class="fas fa-bolt"></i><strong>Power:</strong> 2N UPS, on-site generators, dual grid feeds</div>
                            <div class="dc-loc-detail"><i class="fas fa-snowflake"></i><strong>Cooling:</strong> OVH water-cooling technology, energy-efficient design</div>
                            <div class="dc-loc-detail"><i class="fas fa-network-wired"></i><strong>Network:</strong> 10 Gbit/s, France-IX peering, OVH global backbone</div>
                            <div class="dc-loc-detail"><i class="fas fa-shield-alt"></i><strong>Security:</strong> 24/7 guards, badge access, CCTV, anti-intrusion</div>
                            <div class="dc-loc-detail"><i class="fas fa-certificate"></i><strong>Certifications:</strong> ISO 27001, SOC 1/2, HDS (health data hosting)</div>
                            <div class="dc-loc-detail"><i class="fas fa-tachometer-alt"></i><strong>DDoS Protection:</strong> OVH VAC anti-DDoS (up to 1.3 Tbps)</div>
                        </div>
                    </div>
                </div>

                <div class="dc-loc-card" data-dc-expand>
                    <button class="dc-loc-header">
                        <span class="dc-loc-flag"><span class="fi fi-gb"></span></span>
                        <span class="dc-loc-name">London, UK</span>
                        <span class="dc-loc-operator">Equinix</span>
                        <span class="dc-loc-tier">Tier III+</span>
                        <i class="fas fa-chevron-down dc-loc-arrow"></i>
                    </button>
                    <div class="dc-loc-body">
                        <div class="dc-loc-details">
                            <div class="dc-loc-detail"><i class="fas fa-building"></i><strong>Operator:</strong> Equinix — LD5 Slough Campus</div>
                            <div class="dc-loc-detail"><i class="fas fa-bolt"></i><strong>Power:</strong> 2N UPS, dual A+B feeds, diesel rotary UPS</div>
                            <div class="dc-loc-detail"><i class="fas fa-snowflake"></i><strong>Cooling:</strong> Chilled water system with N+1 redundancy</div>
                            <div class="dc-loc-detail"><i class="fas fa-network-wired"></i><strong>Network:</strong> 10 Gbit/s, LINX peering, Tier-1 transit (Lumen, Cogent)</div>
                            <div class="dc-loc-detail"><i class="fas fa-shield-alt"></i><strong>Security:</strong> Mantrap, biometric + card, 24/7 NOC, CCTV</div>
                            <div class="dc-loc-detail"><i class="fas fa-certificate"></i><strong>Certifications:</strong> ISO 27001, SOC 2, PCI DSS, HIPAA</div>
                            <div class="dc-loc-detail"><i class="fas fa-tachometer-alt"></i><strong>DDoS Protection:</strong> Multi-layer upstream + on-prem mitigation</div>
                        </div>
                    </div>
                </div>

                <div class="dc-loc-card" data-dc-expand>
                    <button class="dc-loc-header">
                        <span class="dc-loc-flag"><span class="fi fi-nl"></span></span>
                        <span class="dc-loc-name">Amsterdam, Netherlands</span>
                        <span class="dc-loc-operator">Iron Mountain</span>
                        <span class="dc-loc-tier">Tier III</span>
                        <i class="fas fa-chevron-down dc-loc-arrow"></i>
                    </button>
                    <div class="dc-loc-body">
                        <div class="dc-loc-details">
                            <div class="dc-loc-detail"><i class="fas fa-building"></i><strong>Operator:</strong> Iron Mountain (AMS-1) — Science Park Amsterdam</div>
                            <div class="dc-loc-detail"><i class="fas fa-bolt"></i><strong>Power:</strong> 2N UPS, diesel generators, dual utility feeds</div>
                            <div class="dc-loc-detail"><i class="fas fa-snowflake"></i><strong>Cooling:</strong> Precision air cooling with hot/cold aisle containment</div>
                            <div class="dc-loc-detail"><i class="fas fa-network-wired"></i><strong>Network:</strong> 10 Gbit/s, AMS-IX peering, NL-IX, direct carrier access</div>
                            <div class="dc-loc-detail"><i class="fas fa-shield-alt"></i><strong>Security:</strong> 24/7 NOC, biometric, mantrap, perimeter fencing</div>
                            <div class="dc-loc-detail"><i class="fas fa-certificate"></i><strong>Certifications:</strong> ISO 27001, SOC 2, PCI DSS</div>
                            <div class="dc-loc-detail"><i class="fas fa-tachometer-alt"></i><strong>DDoS Protection:</strong> Upstream scrubbing + local mitigation</div>
                        </div>
                    </div>
                </div>

                <div class="dc-loc-card" data-dc-expand>
                    <button class="dc-loc-header">
                        <span class="dc-loc-flag"><span class="fi fi-tr"></span></span>
                        <span class="dc-loc-name">Istanbul, Turkey</span>
                        <span class="dc-loc-operator">Turkcell</span>
                        <span class="dc-loc-tier">Tier III</span>
                        <i class="fas fa-chevron-down dc-loc-arrow"></i>
                    </button>
                    <div class="dc-loc-body">
                        <div class="dc-loc-details">
                            <div class="dc-loc-detail"><i class="fas fa-building"></i><strong>Operator:</strong> Turkcell Data Center — Esenyurt Campus</div>
                            <div class="dc-loc-detail"><i class="fas fa-bolt"></i><strong>Power:</strong> 2N UPS, on-site generators, dual utility grid</div>
                            <div class="dc-loc-detail"><i class="fas fa-snowflake"></i><strong>Cooling:</strong> N+1 precision CRAC, hot/cold aisle</div>
                            <div class="dc-loc-detail"><i class="fas fa-network-wired"></i><strong>Network:</strong> 10 Gbit/s, Turkish IX peering, transit to EU &amp; MENA</div>
                            <div class="dc-loc-detail"><i class="fas fa-shield-alt"></i><strong>Security:</strong> 24/7 security, biometric, CCTV, access logging</div>
                            <div class="dc-loc-detail"><i class="fas fa-certificate"></i><strong>Certifications:</strong> ISO 27001, Uptime Institute Tier III</div>
                            <div class="dc-loc-detail"><i class="fas fa-tachometer-alt"></i><strong>DDoS Protection:</strong> Volumetric DDoS filtering at edge</div>
                        </div>
                    </div>
                </div>

                <div class="dc-loc-card" data-dc-expand>
                    <button class="dc-loc-header">
                        <span class="dc-loc-flag"><span class="fi fi-pl"></span></span>
                        <span class="dc-loc-name">Warsaw, Poland</span>
                        <span class="dc-loc-operator">Beyond.pl</span>
                        <span class="dc-loc-tier">Tier III+</span>
                        <i class="fas fa-chevron-down dc-loc-arrow"></i>
                    </button>
                    <div class="dc-loc-body">
                        <div class="dc-loc-details">
                            <div class="dc-loc-detail"><i class="fas fa-building"></i><strong>Operator:</strong> Beyond.pl — Data Center 2 Poznań</div>
                            <div class="dc-loc-detail"><i class="fas fa-bolt"></i><strong>Power:</strong> 2N+1 UPS, DRUPS, diesel generators, dual A+B feeds</div>
                            <div class="dc-loc-detail"><i class="fas fa-snowflake"></i><strong>Cooling:</strong> Free-cooling with N+1 CRAC backup</div>
                            <div class="dc-loc-detail"><i class="fas fa-network-wired"></i><strong>Network:</strong> 10 Gbit/s, PLIX peering, DE-CIX, Tier-1 transit</div>
                            <div class="dc-loc-detail"><i class="fas fa-shield-alt"></i><strong>Security:</strong> 24/7 NOC, multi-layer access control, CCTV</div>
                            <div class="dc-loc-detail"><i class="fas fa-certificate"></i><strong>Certifications:</strong> ISO 27001, EN 50600, Uptime Tier III Design</div>
                            <div class="dc-loc-detail"><i class="fas fa-tachometer-alt"></i><strong>DDoS Protection:</strong> Multi-vector DDoS mitigation at edge</div>
                        </div>
                    </div>
                </div>

                <div class="dc-loc-card" data-dc-expand>
                    <button class="dc-loc-header">
                        <span class="dc-loc-flag"><span class="fi fi-at"></span></span>
                        <span class="dc-loc-name">Vienna, Austria</span>
                        <span class="dc-loc-operator">Interxion</span>
                        <span class="dc-loc-tier">Tier III</span>
                        <i class="fas fa-chevron-down dc-loc-arrow"></i>
                    </button>
                    <div class="dc-loc-body">
                        <div class="dc-loc-details">
                            <div class="dc-loc-detail"><i class="fas fa-building"></i><strong>Operator:</strong> Interxion (Digital Realty) — VIE1/VIE2</div>
                            <div class="dc-loc-detail"><i class="fas fa-bolt"></i><strong>Power:</strong> 2N UPS, diesel generators, renewable energy sourced</div>
                            <div class="dc-loc-detail"><i class="fas fa-snowflake"></i><strong>Cooling:</strong> N+1 chilled water, free-cooling capable</div>
                            <div class="dc-loc-detail"><i class="fas fa-network-wired"></i><strong>Network:</strong> 10 Gbit/s, VIX peering, direct connection to CEE networks</div>
                            <div class="dc-loc-detail"><i class="fas fa-shield-alt"></i><strong>Security:</strong> 24/7 NOC, biometric + card, CCTV, mantrap</div>
                            <div class="dc-loc-detail"><i class="fas fa-certificate"></i><strong>Certifications:</strong> ISO 27001, SOC 2, EN 50600</div>
                            <div class="dc-loc-detail"><i class="fas fa-tachometer-alt"></i><strong>DDoS Protection:</strong> Upstream scrubbing + local mitigation</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ── Americas ── -->
            <div class="dc-region">
                <div class="dc-region-label"><i class="fas fa-globe-americas"></i> Americas</div>

                <div class="dc-loc-card" data-dc-expand>
                    <button class="dc-loc-header">
                        <span class="dc-loc-flag"><span class="fi fi-us"></span></span>
                        <span class="dc-loc-name">New York / Dallas, USA</span>
                        <span class="dc-loc-operator">Equinix / CoreSite</span>
                        <span class="dc-loc-tier">Tier III+</span>
                        <i class="fas fa-chevron-down dc-loc-arrow"></i>
                    </button>
                    <div class="dc-loc-body">
                        <div class="dc-loc-details">
                            <div class="dc-loc-detail"><i class="fas fa-building"></i><strong>Operator:</strong> Equinix NY5 / CoreSite DA1 — Carrier-neutral facilities</div>
                            <div class="dc-loc-detail"><i class="fas fa-bolt"></i><strong>Power:</strong> 2N UPS, diesel generators, dual A+B feeds, 99.999% uptime SLA</div>
                            <div class="dc-loc-detail"><i class="fas fa-snowflake"></i><strong>Cooling:</strong> Chilled water with N+1 redundancy, hot/cold aisle containment</div>
                            <div class="dc-loc-detail"><i class="fas fa-network-wired"></i><strong>Network:</strong> 10 Gbit/s, Equinix IX / CoreSite Open Cloud Exchange, Tier-1 transit</div>
                            <div class="dc-loc-detail"><i class="fas fa-shield-alt"></i><strong>Security:</strong> Mantrap, biometric + badge, 24/7 NOC/SOC, CCTV, vehicle barriers</div>
                            <div class="dc-loc-detail"><i class="fas fa-certificate"></i><strong>Certifications:</strong> SOC 2 Type II, ISO 27001, PCI DSS, HIPAA</div>
                            <div class="dc-loc-detail"><i class="fas fa-tachometer-alt"></i><strong>DDoS Protection:</strong> Multi-Tbps scrubbing via upstream + Arbor/Cloudflare</div>
                        </div>
                    </div>
                </div>

                <div class="dc-loc-card" data-dc-expand>
                    <button class="dc-loc-header">
                        <span class="dc-loc-flag"><span class="fi fi-ca"></span></span>
                        <span class="dc-loc-name">Toronto, Canada</span>
                        <span class="dc-loc-operator">OVHcloud</span>
                        <span class="dc-loc-tier">Tier III</span>
                        <i class="fas fa-chevron-down dc-loc-arrow"></i>
                    </button>
                    <div class="dc-loc-body">
                        <div class="dc-loc-details">
                            <div class="dc-loc-detail"><i class="fas fa-building"></i><strong>Operator:</strong> OVHcloud — BHS (Beauharnois) Data Center</div>
                            <div class="dc-loc-detail"><i class="fas fa-bolt"></i><strong>Power:</strong> 2N UPS, diesel generators, hydroelectric grid (Quebec)</div>
                            <div class="dc-loc-detail"><i class="fas fa-snowflake"></i><strong>Cooling:</strong> OVH water-cooling + Canadian climate-assisted free-cooling</div>
                            <div class="dc-loc-detail"><i class="fas fa-network-wired"></i><strong>Network:</strong> 10 Gbit/s, TorIX peering, OVH backbone to US/EU</div>
                            <div class="dc-loc-detail"><i class="fas fa-shield-alt"></i><strong>Security:</strong> On-site guards, badge access, CCTV, fenced perimeter</div>
                            <div class="dc-loc-detail"><i class="fas fa-certificate"></i><strong>Certifications:</strong> SOC 1/2, ISO 27001, PIPEDA compliant</div>
                            <div class="dc-loc-detail"><i class="fas fa-tachometer-alt"></i><strong>DDoS Protection:</strong> OVH VAC anti-DDoS infrastructure</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ── Asia ── -->
            <div class="dc-region">
                <div class="dc-region-label"><i class="fas fa-globe-asia"></i> Asia</div>

                <div class="dc-loc-card" data-dc-expand>
                    <button class="dc-loc-header">
                        <span class="dc-loc-flag"><span class="fi fi-in"></span></span>
                        <span class="dc-loc-name">Mumbai, India</span>
                        <span class="dc-loc-operator">Yotta Infrastructure</span>
                        <span class="dc-loc-tier">Tier IV</span>
                        <i class="fas fa-chevron-down dc-loc-arrow"></i>
                    </button>
                    <div class="dc-loc-body">
                        <div class="dc-loc-details">
                            <div class="dc-loc-detail"><i class="fas fa-building"></i><strong>Operator:</strong> Yotta Infrastructure — NM1 Navi Mumbai</div>
                            <div class="dc-loc-detail"><i class="fas fa-bolt"></i><strong>Power:</strong> 2(N+1) UPS, diesel generators, dual HT feeds, Tier IV power</div>
                            <div class="dc-loc-detail"><i class="fas fa-snowflake"></i><strong>Cooling:</strong> N+1 precision PAC units, chilled water, hot/cold aisle</div>
                            <div class="dc-loc-detail"><i class="fas fa-network-wired"></i><strong>Network:</strong> 10 Gbit/s, NIXI/DECIX Mumbai peering, Tier-1 transit to APAC</div>
                            <div class="dc-loc-detail"><i class="fas fa-shield-alt"></i><strong>Security:</strong> 5-layer physical security, biometric, CCTV, armed guards</div>
                            <div class="dc-loc-detail"><i class="fas fa-certificate"></i><strong>Certifications:</strong> Uptime Tier IV, ISO 27001, SOC 2, PCI DSS</div>
                            <div class="dc-loc-detail"><i class="fas fa-tachometer-alt"></i><strong>DDoS Protection:</strong> On-prem + upstream multi-Tbps scrubbing</div>
                        </div>
                    </div>
                </div>

                <div class="dc-loc-card" data-dc-expand>
                    <button class="dc-loc-header">
                        <span class="dc-loc-flag"><span class="fi fi-sg"></span></span>
                        <span class="dc-loc-name">Singapore</span>
                        <span class="dc-loc-operator">Equinix</span>
                        <span class="dc-loc-tier">Tier III+</span>
                        <i class="fas fa-chevron-down dc-loc-arrow"></i>
                    </button>
                    <div class="dc-loc-body">
                        <div class="dc-loc-details">
                            <div class="dc-loc-detail"><i class="fas fa-building"></i><strong>Operator:</strong> Equinix — SG1/SG3 Singapore Campus</div>
                            <div class="dc-loc-detail"><i class="fas fa-bolt"></i><strong>Power:</strong> 2N UPS, diesel generators, dual utility feeds</div>
                            <div class="dc-loc-detail"><i class="fas fa-snowflake"></i><strong>Cooling:</strong> Chilled water with N+1 CRAC, tropical-optimized</div>
                            <div class="dc-loc-detail"><i class="fas fa-network-wired"></i><strong>Network:</strong> 10 Gbit/s, SGIX peering, submarine cable hub for APAC</div>
                            <div class="dc-loc-detail"><i class="fas fa-shield-alt"></i><strong>Security:</strong> Mantrap, biometric, 24/7 NOC, CCTV, vehicle barriers</div>
                            <div class="dc-loc-detail"><i class="fas fa-certificate"></i><strong>Certifications:</strong> ISO 27001, SOC 2, MTCS (Singapore), PCI DSS</div>
                            <div class="dc-loc-detail"><i class="fas fa-tachometer-alt"></i><strong>DDoS Protection:</strong> On-prem Arbor + upstream transit scrubbing</div>
                        </div>
                    </div>
                </div>

                <div class="dc-loc-card" data-dc-expand>
                    <button class="dc-loc-header">
                        <span class="dc-loc-flag"><span class="fi fi-jp"></span></span>
                        <span class="dc-loc-name">Tokyo, Japan</span>
                        <span class="dc-loc-operator">Equinix</span>
                        <span class="dc-loc-tier">Tier III+</span>
                        <i class="fas fa-chevron-down dc-loc-arrow"></i>
                    </button>
                    <div class="dc-loc-body">
                        <div class="dc-loc-details">
                            <div class="dc-loc-detail"><i class="fas fa-building"></i><strong>Operator:</strong> Equinix — TY2/TY5 Tokyo Campus</div>
                            <div class="dc-loc-detail"><i class="fas fa-bolt"></i><strong>Power:</strong> 2N UPS, seismic-rated generators, dual grid feeds</div>
                            <div class="dc-loc-detail"><i class="fas fa-snowflake"></i><strong>Cooling:</strong> Chilled water with N+1, earthquake-resistant HVAC</div>
                            <div class="dc-loc-detail"><i class="fas fa-network-wired"></i><strong>Network:</strong> 10 Gbit/s, JPNAP/JPIX peering, NTT/KDDI transit</div>
                            <div class="dc-loc-detail"><i class="fas fa-shield-alt"></i><strong>Security:</strong> Mantrap, biometric, 24/7 NOC, seismic isolation</div>
                            <div class="dc-loc-detail"><i class="fas fa-certificate"></i><strong>Certifications:</strong> ISO 27001, SOC 2, FISC (Japan financial)</div>
                            <div class="dc-loc-detail"><i class="fas fa-tachometer-alt"></i><strong>DDoS Protection:</strong> Multi-layer DDoS mitigation with Arbor</div>
                        </div>
                    </div>
                </div>

                <div class="dc-loc-card" data-dc-expand>
                    <button class="dc-loc-header">
                        <span class="dc-loc-flag"><span class="fi fi-hk"></span></span>
                        <span class="dc-loc-name">Hong Kong</span>
                        <span class="dc-loc-operator">Equinix</span>
                        <span class="dc-loc-tier">Tier III+</span>
                        <i class="fas fa-chevron-down dc-loc-arrow"></i>
                    </button>
                    <div class="dc-loc-body">
                        <div class="dc-loc-details">
                            <div class="dc-loc-detail"><i class="fas fa-building"></i><strong>Operator:</strong> Equinix — HK1/HK5 Kwai Chung</div>
                            <div class="dc-loc-detail"><i class="fas fa-bolt"></i><strong>Power:</strong> 2N UPS, diesel generators, dual feeds from CLP Power</div>
                            <div class="dc-loc-detail"><i class="fas fa-snowflake"></i><strong>Cooling:</strong> N+1 chilled water, hot/cold aisle containment</div>
                            <div class="dc-loc-detail"><i class="fas fa-network-wired"></i><strong>Network:</strong> 10 Gbit/s, HKIX peering, submarine cable hub for Asia</div>
                            <div class="dc-loc-detail"><i class="fas fa-shield-alt"></i><strong>Security:</strong> Mantrap, biometric, 24/7 NOC, CCTV, vehicle barriers</div>
                            <div class="dc-loc-detail"><i class="fas fa-certificate"></i><strong>Certifications:</strong> ISO 27001, SOC 2, PCI DSS</div>
                            <div class="dc-loc-detail"><i class="fas fa-tachometer-alt"></i><strong>DDoS Protection:</strong> Upstream + on-prem DDoS scrubbing</div>
                        </div>
                    </div>
                </div>

                <div class="dc-loc-card" data-dc-expand>
                    <button class="dc-loc-header">
                        <span class="dc-loc-flag"><span class="fi fi-th"></span></span>
                        <span class="dc-loc-name">Bangkok, Thailand</span>
                        <span class="dc-loc-operator">SUPERNAP</span>
                        <span class="dc-loc-tier">Tier IV</span>
                        <i class="fas fa-chevron-down dc-loc-arrow"></i>
                    </button>
                    <div class="dc-loc-body">
                        <div class="dc-loc-details">
                            <div class="dc-loc-detail"><i class="fas fa-building"></i><strong>Operator:</strong> SUPERNAP (Thailand) — STT GDC</div>
                            <div class="dc-loc-detail"><i class="fas fa-bolt"></i><strong>Power:</strong> 2(N+1) UPS, diesel generators, dual grid, Tier IV design</div>
                            <div class="dc-loc-detail"><i class="fas fa-snowflake"></i><strong>Cooling:</strong> N+1 chilled water, hot/cold aisle, tropical-designed HVAC</div>
                            <div class="dc-loc-detail"><i class="fas fa-network-wired"></i><strong>Network:</strong> 10 Gbit/s, BKNIX peering, transit to ASEAN/APAC</div>
                            <div class="dc-loc-detail"><i class="fas fa-shield-alt"></i><strong>Security:</strong> 6-layer security, biometric, 24/7 guards, CCTV</div>
                            <div class="dc-loc-detail"><i class="fas fa-certificate"></i><strong>Certifications:</strong> Uptime Tier IV, ISO 27001, PCI DSS</div>
                            <div class="dc-loc-detail"><i class="fas fa-tachometer-alt"></i><strong>DDoS Protection:</strong> On-prem + upstream DDoS mitigation</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ── Oceania ── -->
            <div class="dc-region">
                <div class="dc-region-label"><i class="fas fa-globe"></i> Oceania</div>

                <div class="dc-loc-card" data-dc-expand>
                    <button class="dc-loc-header">
                        <span class="dc-loc-flag"><span class="fi fi-au"></span></span>
                        <span class="dc-loc-name">Sydney, Australia</span>
                        <span class="dc-loc-operator">Equinix</span>
                        <span class="dc-loc-tier">Tier III+</span>
                        <i class="fas fa-chevron-down dc-loc-arrow"></i>
                    </button>
                    <div class="dc-loc-body">
                        <div class="dc-loc-details">
                            <div class="dc-loc-detail"><i class="fas fa-building"></i><strong>Operator:</strong> Equinix — SY4/SY5 Sydney Campus</div>
                            <div class="dc-loc-detail"><i class="fas fa-bolt"></i><strong>Power:</strong> 2N UPS, diesel generators, dual utility feeds</div>
                            <div class="dc-loc-detail"><i class="fas fa-snowflake"></i><strong>Cooling:</strong> N+1 chilled water, hot/cold aisle containment</div>
                            <div class="dc-loc-detail"><i class="fas fa-network-wired"></i><strong>Network:</strong> 10 Gbit/s, IX Australia peering, submarine cable hub for APAC</div>
                            <div class="dc-loc-detail"><i class="fas fa-shield-alt"></i><strong>Security:</strong> Mantrap, biometric, 24/7 NOC, CCTV, vehicle barriers</div>
                            <div class="dc-loc-detail"><i class="fas fa-certificate"></i><strong>Certifications:</strong> ISO 27001, SOC 2, IRAP (Australian Gov), PCI DSS</div>
                            <div class="dc-loc-detail"><i class="fas fa-tachometer-alt"></i><strong>DDoS Protection:</strong> Multi-Tbps edge scrubbing</div>
                        </div>
                    </div>
                </div>
            </div>
            </div><!-- /.dc-locations-inner -->
        </div>
    </section>

    <!-- ═══════════════ SERVER SPECIFICATIONS ═══════════════ -->
    <section class="dc-specs reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag">Hardware</div>
                <h2>Enterprise server specifications</h2>
                <p>We deploy only enterprise-grade hardware from trusted manufacturers.</p>
            </div>

            <div class="dc-specs-grid">
                <div class="dc-spec-card">
                    <div class="dc-spec-icon"><i class="fas fa-microchip"></i></div>
                    <h3>Processors</h3>
                    <ul>
                        <li>AMD EPYC 7003/9004 Series</li>
                        <li>Intel Xeon Scalable (4th/5th Gen)</li>
                        <li>Up to 128 cores per node</li>
                        <li>Hardware-level virtualization (AMD-V / VT-x)</li>
                    </ul>
                </div>
                <div class="dc-spec-card">
                    <div class="dc-spec-icon icon-green"><i class="fas fa-memory"></i></div>
                    <h3>Memory</h3>
                    <ul>
                        <li>DDR5 ECC Registered RAM</li>
                        <li>Up to 2 TB per node</li>
                        <li>Multi-channel configuration</li>
                        <li>Error-correcting for data integrity</li>
                    </ul>
                </div>
                <div class="dc-spec-card">
                    <div class="dc-spec-icon icon-blue"><i class="fas fa-hdd"></i></div>
                    <h3>Storage</h3>
                    <ul>
                        <li>NVMe Gen4 SSDs (Samsung, Intel)</li>
                        <li>RAID-10 arrays for redundancy</li>
                        <li>Up to 7 GB/s sequential read</li>
                        <li>Hot-swappable drive bays</li>
                    </ul>
                </div>
                <div class="dc-spec-card">
                    <div class="dc-spec-icon icon-purple"><i class="fas fa-network-wired"></i></div>
                    <h3>Networking</h3>
                    <ul>
                        <li>10 Gbit/s uplinks per node</li>
                        <li>Redundant top-of-rack switches</li>
                        <li>BGP peering with Tier-1 carriers</li>
                        <li>Private VLAN isolation</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ NETWORK ═══════════════ -->
    <section class="bento-features reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag">Network</div>
                <h2>Premium global network</h2>
                <p>Multi-homed connectivity with direct peering to major ISPs and content delivery networks.</p>
            </div>

            <div class="bento-grid">
                <div class="bento-card bento-sm">
                    <div class="bento-card-icon"><i class="fas fa-tachometer-alt"></i></div>
                    <h3>10 Gbit/s Ports</h3>
                    <p>Every server connects via 10 Gbit/s network ports for maximum throughput and minimal latency.</p>
                </div>
                <div class="bento-card bento-sm">
                    <div class="bento-card-icon icon-green"><i class="fas fa-project-diagram"></i></div>
                    <h3>BGP Multi-Homing</h3>
                    <p>Multi-homed BGP connectivity with automatic failover ensures packets always find the optimal path.</p>
                </div>
                <div class="bento-card bento-sm">
                    <div class="bento-card-icon icon-blue"><i class="fas fa-globe"></i></div>
                    <h3>Tier-1 Transit</h3>
                    <p>Direct peering with Cogent, Lumen, NTT, GTT, and other Tier-1 transit providers worldwide.</p>
                </div>
                <div class="bento-card bento-sm">
                    <div class="bento-card-icon icon-purple"><i class="fas fa-shield-alt"></i></div>
                    <h3>DDoS Protection</h3>
                    <p>Enterprise anti-DDoS mitigation with up to 1 Tbps scrubbing capacity at every PoP.</p>
                </div>
                <div class="bento-card bento-sm">
                    <div class="bento-card-icon icon-amber"><i class="fas fa-clock"></i></div>
                    <h3>Sub-30ms Latency</h3>
                    <p>50+ strategically placed locations with intelligent routing, anycast DNS, and direct peering agreements.</p>
                </div>
                <div class="bento-card bento-sm">
                    <div class="bento-card-icon icon-rose"><i class="fas fa-chart-area"></i></div>
                    <h3>Real-Time Monitoring</h3>
                    <p>Per-port traffic graphs, bandwidth utilization, and latency metrics available 24/7 from your control panel.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ SECURITY ═══════════════ -->
    <section class="features-section reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag">Security</div>
                <h2>Multi-layer security architecture</h2>
                <p>From physical access to data encryption, security is embedded at every layer.</p>
            </div>

            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon"><i class="fas fa-fingerprint"></i></div>
                    <h4>Biometric Access</h4>
                    <p>Multi-factor authentication including biometric scanners and key cards at all datacenter entry points.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon icon-green"><i class="fas fa-video"></i></div>
                    <h4>24/7 CCTV</h4>
                    <p>High-resolution camera surveillance with 90-day retention covering all facility areas.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon icon-blue"><i class="fas fa-user-shield"></i></div>
                    <h4>On-Site Guards</h4>
                    <p>Professional security personnel on-site 24/7/365 at every datacenter facility.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon icon-purple"><i class="fas fa-lock"></i></div>
                    <h4>Data Encryption</h4>
                    <p>AES-256 encryption at rest and TLS 1.3 in transit for all customer data.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon icon-amber"><i class="fas fa-clipboard-check"></i></div>
                    <h4>Compliance</h4>
                    <p>SOC 2 Type II, ISO 27001, PCI DSS compliant facilities for regulated workloads.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon icon-rose"><i class="fas fa-bug"></i></div>
                    <h4>Vulnerability Scanning</h4>
                    <p>Regular penetration testing and vulnerability assessments across all infrastructure.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ SLA & UPTIME GUARANTEE ═══════════════ -->
    <section class="dc-sla reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag">Reliability</div>
                <h2>Uptime you can count on</h2>
                <p>Backed by contractual guarantees and proactive monitoring — because every second of downtime matters.</p>
            </div>

            <div class="dc-sla-grid">
                <div class="dc-sla-card dc-sla-main">
                    <div class="dc-sla-percent">99.9<span>%</span></div>
                    <div class="dc-sla-label">Guaranteed Uptime SLA</div>
                    <p>Our standard SLA guarantees 99.9% network and infrastructure uptime. If we fall short, you receive automatic service credits — no questions asked.</p>
                </div>
                <div class="dc-sla-card">
                    <div class="dc-sla-icon"><i class="fas fa-heartbeat"></i></div>
                    <h4>24/7 Monitoring</h4>
                    <p>Real-time health checks every 30 seconds across all nodes, with instant alerting to our NOC team.</p>
                </div>
                <div class="dc-sla-card">
                    <div class="dc-sla-icon icon-green"><i class="fas fa-sync-alt"></i></div>
                    <h4>Automatic Failover</h4>
                    <p>Redundant systems detect failures and reroute traffic instantly — often before you even notice.</p>
                </div>
                <div class="dc-sla-card">
                    <div class="dc-sla-icon icon-blue"><i class="fas fa-headset"></i></div>
                    <h4>Rapid Response</h4>
                    <p>Critical incidents are acknowledged within 15 minutes and escalated to senior engineers immediately.</p>
                </div>
                <div class="dc-sla-card">
                    <div class="dc-sla-icon icon-purple"><i class="fas fa-file-contract"></i></div>
                    <h4>Service Credit Policy</h4>
                    <p>Transparent credit policy with up to 100% refund for extended outages exceeding SLA commitments.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ GREEN ENERGY ═══════════════ -->
    <section class="dc-green reveal">
        <div class="container">
            <div class="dc-green-wrap">
                <div class="dc-green-content">
                    <div class="section-tag">Sustainability</div>
                    <h2>Committed to a greener future</h2>
                    <p>We partner with datacenter operators who prioritize energy efficiency and environmental responsibility.</p>
                    <div class="dc-green-stats">
                        <div class="dc-green-stat">
                            <span class="dc-green-stat-num">1.2</span>
                            <span class="dc-green-stat-label">Average PUE</span>
                        </div>
                        <div class="dc-green-stat">
                            <span class="dc-green-stat-num">60%</span>
                            <span class="dc-green-stat-label">Renewable Sources</span>
                        </div>
                        <div class="dc-green-stat">
                            <span class="dc-green-stat-num">0</span>
                            <span class="dc-green-stat-label">Target Net Carbon</span>
                        </div>
                    </div>
                </div>
                <div class="dc-green-features">
                    <div class="dc-green-item">
                        <i class="fas fa-leaf"></i>
                        <div>
                            <strong>Renewable Energy</strong>
                            <p>Multiple locations powered by wind, solar, and hydroelectric grids — including Helsinki, Toronto, and Frankfurt.</p>
                        </div>
                    </div>
                    <div class="dc-green-item">
                        <i class="fas fa-wind"></i>
                        <div>
                            <strong>Free-Cooling Technology</strong>
                            <p>Nordic and Canadian facilities leverage outside air for cooling, drastically reducing energy consumption.</p>
                        </div>
                    </div>
                    <div class="dc-green-item">
                        <i class="fas fa-recycle"></i>
                        <div>
                            <strong>Hardware Lifecycle</strong>
                            <p>Responsible recycling and refurbishment programs for decommissioned hardware across all facilities.</p>
                        </div>
                    </div>
                    <div class="dc-green-item">
                        <i class="fas fa-chart-line"></i>
                        <div>
                            <strong>PUE Optimization</strong>
                            <p>Continuous monitoring and optimization of Power Usage Effectiveness to minimize wasted energy.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ LOOKING GLASS ═══════════════ -->
    <section class="dc-looking-glass reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag">Network Tools</div>
                <h2>Test our network yourself</h2>
                <p>Use our regional test endpoints to verify latency and download speeds from the location nearest to you.</p>
            </div>

            <div class="dc-lg-grid">
                <div class="dc-lg-card">
                    <span class="dc-lg-flag"><span class="fi fi-de"></span></span>
                    <div class="dc-lg-info">
                        <strong>Frankfurt, DE</strong>
                        <span class="dc-lg-ip">de-lg.yottasrc.com</span>
                    </div>
                    <span class="dc-lg-badge">Europe</span>
                </div>
                <div class="dc-lg-card">
                    <span class="dc-lg-flag"><span class="fi fi-us"></span></span>
                    <div class="dc-lg-info">
                        <strong>New York, US</strong>
                        <span class="dc-lg-ip">us-lg.yottasrc.com</span>
                    </div>
                    <span class="dc-lg-badge">Americas</span>
                </div>
                <div class="dc-lg-card">
                    <span class="dc-lg-flag"><span class="fi fi-sg"></span></span>
                    <div class="dc-lg-info">
                        <strong>Singapore</strong>
                        <span class="dc-lg-ip">sg-lg.yottasrc.com</span>
                    </div>
                    <span class="dc-lg-badge">Asia</span>
                </div>
                <div class="dc-lg-card">
                    <span class="dc-lg-flag"><span class="fi fi-au"></span></span>
                    <div class="dc-lg-info">
                        <strong>Sydney, AU</strong>
                        <span class="dc-lg-ip">au-lg.yottasrc.com</span>
                    </div>
                    <span class="dc-lg-badge">Oceania</span>
                </div>
                <div class="dc-lg-card">
                    <span class="dc-lg-flag"><span class="fi fi-ro"></span></span>
                    <div class="dc-lg-info">
                        <strong>Bucharest, RO</strong>
                        <span class="dc-lg-ip">ro-lg.yottasrc.com</span>
                    </div>
                    <span class="dc-lg-badge dc-lg-hq">HQ</span>
                </div>
                <div class="dc-lg-card">
                    <span class="dc-lg-flag"><span class="fi fi-jp"></span></span>
                    <div class="dc-lg-info">
                        <strong>Tokyo, JP</strong>
                        <span class="dc-lg-ip">jp-lg.yottasrc.com</span>
                    </div>
                    <span class="dc-lg-badge">Asia</span>
                </div>
            </div>

            <p class="dc-lg-note"><i class="fas fa-info-circle"></i> These are representative test endpoints. Actual production IPs are assigned upon service provisioning.</p>
        </div>
    </section>

    <!-- ═══════════════ BOTTOM CTA ═══════════════ -->
    <section class="promo-cta reveal">
        <div class="container">
            <div class="promo-cta-inner">
                <div class="promo-cta-glow"></div>
                <div class="promo-cta-icon"><i class="fas fa-server"></i></div>
                <h2>Deploy on enterprise infrastructure</h2>
                <p>Launch your project on hardware and network you can trust — starting from €0.83/month.</p>
                <a href="<?php echo e(SITE_URL); ?>/cpanel-hosting/" class="btn-primary">Get Started <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
