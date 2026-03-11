<?php
/**
 * YottaSrc — Dedicated Servers
 * =============================
 * Template: Enterprise bare-metal infrastructure — power, reliability, custom configs
 * Sections: Hero → Partners → Hardware → Config → Use Cases → Offers → Reliability → Performance → Why Us → FAQ → CTA
 */
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/topbar.php';
?>

    <!-- ═══════════════ HERO ═══════════════ -->
    <section class="page-hero ds-hero">
        <div class="container">
            <div class="page-hero-split">
                <div class="page-hero-content">
                    <div class="page-breadcrumb">
                        <a href="<?php echo e(SITE_URL); ?>/">Home</a>
                        <i class="fas fa-chevron-right"></i>
                        <span>Dedicated Servers</span>
                    </div>
                    <h1>Bare-Metal <span class="highlight">Dedicated Servers</span> for Enterprise Workloads</h1>
                    <p class="page-hero-desc">
                        Full hardware isolation, up to 100 Gbit/s connectivity, 900 TB bandwidth, and custom configurations — premium single-tenant servers deployed in Tier III+ datacenters worldwide.
                    </p>
                    <div class="page-hero-ctas">
                        <a href="<?php echo e(SITE_URL); ?>/contact-us/" class="btn-primary"><i class="fas fa-headset"></i> Contact Sales</a>
                        <a href="#offers" class="btn-secondary">View Offers <i class="fas fa-arrow-down"></i></a>
                    </div>
                    <div class="page-hero-badges">
                        <div class="hero-badge-item"><i class="fas fa-check"></i> Bare-Metal Performance</div>
                        <div class="hero-badge-item"><i class="fas fa-check"></i> Up to 100 Gbit/s</div>
                        <div class="hero-badge-item"><i class="fas fa-check"></i> 900 TB Bandwidth</div>
                        <div class="hero-badge-item"><i class="fas fa-check"></i> Custom Configurations</div>
                        <div class="hero-badge-item"><i class="fas fa-check"></i> BGP / ASN Support</div>
                    </div>
                </div>
                <div class="page-hero-visual">
                    <svg viewBox="0 0 420 380" fill="none" xmlns="http://www.w3.org/2000/svg" class="hero-illustration" aria-label="Dedicated server rack illustration">
                        <!-- Main server chassis -->
                        <rect x="70" y="20" width="280" height="340" rx="16" fill="var(--bg-card)" stroke="var(--border-primary)" stroke-width="1.5"/>
                        <!-- Chassis header -->
                        <rect x="70" y="20" width="280" height="36" rx="16" fill="var(--bg-tertiary)"/>
                        <rect x="70" y="40" width="280" height="16" fill="var(--bg-tertiary)"/>
                        <circle cx="92" cy="38" r="4" fill="var(--brand-error)" opacity="0.5"/>
                        <circle cx="106" cy="38" r="4" fill="var(--brand-warning)" opacity="0.5"/>
                        <circle cx="120" cy="38" r="4" fill="var(--brand-secondary)" opacity="0.5"/>
                        <text x="210" y="43" text-anchor="middle" fill="var(--text-tertiary)" font-size="10" font-family="var(--font-mono)" font-weight="600" opacity="0.5">DEDICATED — BARE METAL</text>

                        <!-- Rack Unit 1: CPU -->
                        <rect x="88" y="68" width="244" height="44" rx="8" fill="var(--bg-tertiary)" stroke="var(--border-primary)" stroke-width="0.8"/>
                        <rect x="100" y="78" width="10" height="24" rx="2" fill="var(--brand-primary)" opacity="0.7"><animate attributeName="opacity" values="0.4;0.7;0.4" dur="2s" repeatCount="indefinite"/></rect>
                        <rect x="114" y="78" width="10" height="24" rx="2" fill="var(--brand-primary)" opacity="0.5"><animate attributeName="opacity" values="0.3;0.6;0.3" dur="2.5s" repeatCount="indefinite"/></rect>
                        <rect x="128" y="78" width="10" height="24" rx="2" fill="var(--brand-primary)" opacity="0.6"><animate attributeName="opacity" values="0.5;0.8;0.5" dur="1.8s" repeatCount="indefinite"/></rect>
                        <rect x="142" y="78" width="10" height="24" rx="2" fill="var(--brand-primary)" opacity="0.4"><animate attributeName="opacity" values="0.2;0.5;0.2" dur="3s" repeatCount="indefinite"/></rect>
                        <text x="200" y="94" fill="var(--text-tertiary)" font-size="8" font-family="var(--font-mono)" opacity="0.5">2× Intel Xeon · 64 Cores</text>
                        <circle cx="310" cy="82" r="4" fill="var(--brand-secondary)" opacity="0.8"><animate attributeName="opacity" values="0.4;0.8;0.4" dur="2s" repeatCount="indefinite"/></circle>
                        <circle cx="310" cy="96" r="4" fill="var(--brand-primary)" opacity="0.4"><animate attributeName="opacity" values="0.2;0.5;0.2" dur="3s" repeatCount="indefinite"/></circle>

                        <!-- Rack Unit 2: RAM -->
                        <rect x="88" y="120" width="244" height="44" rx="8" fill="var(--bg-tertiary)" stroke="var(--border-primary)" stroke-width="0.8"/>
                        <rect x="100" y="130" width="10" height="24" rx="2" fill="var(--brand-secondary)" opacity="0.5"><animate attributeName="opacity" values="0.3;0.6;0.3" dur="2.2s" repeatCount="indefinite"/></rect>
                        <rect x="114" y="130" width="10" height="24" rx="2" fill="var(--brand-secondary)" opacity="0.7"><animate attributeName="opacity" values="0.5;0.8;0.5" dur="1.6s" repeatCount="indefinite"/></rect>
                        <rect x="128" y="130" width="10" height="24" rx="2" fill="var(--brand-secondary)" opacity="0.4"><animate attributeName="opacity" values="0.2;0.5;0.2" dur="2.8s" repeatCount="indefinite"/></rect>
                        <rect x="142" y="130" width="10" height="24" rx="2" fill="var(--brand-secondary)" opacity="0.6"><animate attributeName="opacity" values="0.4;0.7;0.4" dur="3.2s" repeatCount="indefinite"/></rect>
                        <text x="200" y="146" fill="var(--text-tertiary)" font-size="8" font-family="var(--font-mono)" opacity="0.5">512 GB DDR4 ECC</text>
                        <circle cx="310" cy="134" r="4" fill="var(--brand-secondary)" opacity="0.6"><animate attributeName="opacity" values="0.3;0.7;0.3" dur="2.5s" repeatCount="indefinite"/></circle>
                        <circle cx="310" cy="148" r="4" fill="var(--brand-accent)" opacity="0.3"><animate attributeName="opacity" values="0.2;0.4;0.2" dur="4s" repeatCount="indefinite"/></circle>

                        <!-- Rack Unit 3: Storage -->
                        <rect x="88" y="172" width="244" height="44" rx="8" fill="var(--bg-tertiary)" stroke="var(--border-primary)" stroke-width="0.8"/>
                        <rect x="100" y="182" width="10" height="24" rx="2" fill="var(--brand-accent)" opacity="0.4"><animate attributeName="opacity" values="0.2;0.5;0.2" dur="2.4s" repeatCount="indefinite"/></rect>
                        <rect x="114" y="182" width="10" height="24" rx="2" fill="var(--brand-accent)" opacity="0.6"><animate attributeName="opacity" values="0.4;0.7;0.4" dur="1.9s" repeatCount="indefinite"/></rect>
                        <rect x="128" y="182" width="10" height="24" rx="2" fill="var(--brand-accent)" opacity="0.5"><animate attributeName="opacity" values="0.3;0.6;0.3" dur="2.7s" repeatCount="indefinite"/></rect>
                        <rect x="142" y="182" width="10" height="24" rx="2" fill="var(--brand-accent)" opacity="0.3"><animate attributeName="opacity" values="0.2;0.4;0.2" dur="3.5s" repeatCount="indefinite"/></rect>
                        <text x="200" y="198" fill="var(--text-tertiary)" font-size="8" font-family="var(--font-mono)" opacity="0.5">4× NVMe SSD · RAID</text>
                        <circle cx="310" cy="186" r="4" fill="var(--brand-warning)" opacity="0.5"><animate attributeName="opacity" values="0.3;0.6;0.3" dur="2s" repeatCount="indefinite"/></circle>
                        <circle cx="310" cy="200" r="4" fill="var(--brand-accent)" opacity="0.4"><animate attributeName="opacity" values="0.2;0.5;0.2" dur="3s" repeatCount="indefinite"/></circle>

                        <!-- Rack Unit 4: Network -->
                        <rect x="88" y="224" width="244" height="44" rx="8" fill="var(--bg-tertiary)" stroke="var(--border-primary)" stroke-width="0.8"/>
                        <rect x="100" y="234" width="10" height="24" rx="2" fill="var(--brand-warning)" opacity="0.6"><animate attributeName="opacity" values="0.4;0.7;0.4" dur="1.5s" repeatCount="indefinite"/></rect>
                        <rect x="114" y="234" width="10" height="24" rx="2" fill="var(--brand-warning)" opacity="0.4"><animate attributeName="opacity" values="0.2;0.5;0.2" dur="2.1s" repeatCount="indefinite"/></rect>
                        <rect x="128" y="234" width="10" height="24" rx="2" fill="var(--brand-warning)" opacity="0.7"><animate attributeName="opacity" values="0.5;0.8;0.5" dur="1.7s" repeatCount="indefinite"/></rect>
                        <rect x="142" y="234" width="10" height="24" rx="2" fill="var(--brand-warning)" opacity="0.5"><animate attributeName="opacity" values="0.3;0.6;0.3" dur="2.6s" repeatCount="indefinite"/></rect>
                        <text x="200" y="250" fill="var(--text-tertiary)" font-size="8" font-family="var(--font-mono)" opacity="0.5">100 Gbit/s · BGP Ready</text>
                        <circle cx="310" cy="238" r="4" fill="var(--brand-primary)" opacity="0.5"><animate attributeName="opacity" values="0.3;0.6;0.3" dur="2.3s" repeatCount="indefinite"/></circle>
                        <circle cx="310" cy="252" r="4" fill="var(--brand-secondary)" opacity="0.4"><animate attributeName="opacity" values="0.2;0.5;0.2" dur="3.1s" repeatCount="indefinite"/></circle>

                        <!-- Bottom badges -->
                        <rect x="88" y="282" width="100" height="24" rx="6" fill="var(--brand-primary)" opacity="0.08" stroke="var(--brand-primary)" stroke-width="0.5" stroke-opacity="0.2"/>
                        <text x="138" y="298" text-anchor="middle" fill="var(--brand-primary)" font-size="9" font-weight="700" font-family="var(--font-mono)" opacity="0.5">100 Gbit/s</text>
                        <rect x="196" y="282" width="70" height="24" rx="6" fill="var(--brand-secondary)" opacity="0.08" stroke="var(--brand-secondary)" stroke-width="0.5" stroke-opacity="0.2"/>
                        <text x="231" y="298" text-anchor="middle" fill="var(--brand-secondary)" font-size="9" font-weight="700" font-family="var(--font-mono)" opacity="0.5">900 TB</text>
                        <rect x="274" y="282" width="58" height="24" rx="6" fill="var(--brand-accent)" opacity="0.08" stroke="var(--brand-accent)" stroke-width="0.5" stroke-opacity="0.2"/>
                        <text x="303" y="298" text-anchor="middle" fill="var(--brand-accent)" font-size="9" font-weight="700" font-family="var(--font-mono)" opacity="0.5">BGP</text>

                        <!-- Network cables -->
                        <line x1="210" y1="360" x2="210" y2="376" stroke="var(--brand-primary)" stroke-width="2" stroke-dasharray="4 3" opacity="0.3"/>
                        <line x1="180" y1="360" x2="180" y2="372" stroke="var(--brand-secondary)" stroke-width="1.5" stroke-dasharray="4 3" opacity="0.25"/>
                        <line x1="240" y1="360" x2="240" y2="372" stroke="var(--brand-accent)" stroke-width="1.5" stroke-dasharray="4 3" opacity="0.25"/>

                        <!-- Floating indicators -->
                        <circle cx="45" cy="90" r="3" fill="var(--brand-primary)" opacity="0.3"><animate attributeName="opacity" values="0.3;0.7;0.3" dur="3s" repeatCount="indefinite"/></circle>
                        <circle cx="390" cy="340" r="3" fill="var(--brand-secondary)" opacity="0.3"><animate attributeName="opacity" values="0.3;0.6;0.3" dur="4s" repeatCount="indefinite"/></circle>
                        <circle cx="380" cy="50" r="2" fill="var(--brand-accent)" opacity="0.3"><animate attributeName="opacity" values="0.2;0.5;0.2" dur="5s" repeatCount="indefinite"/></circle>
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
                <span class="partner-logo">Cogent</span>
                <span class="partner-logo">Myloc</span>
                <span class="partner-logo">DataPacket</span>
            </div>
        </div>
    </section>

    <!-- ═══════════════ HARDWARE POWER ═══════════════ -->
    <section class="ds-hardware reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag">Hardware</div>
                <h2>Enterprise-Grade Bare-Metal Hardware</h2>
                <p>Every dedicated server runs on single-tenant hardware — no virtualization overhead, no shared resources, no noisy neighbors.</p>
            </div>
            <div class="ds-hardware-grid">
                <div class="ds-hardware-card">
                    <div class="ds-hardware-icon"><i class="fas fa-microchip"></i></div>
                    <div class="ds-hardware-value">Up to 128</div>
                    <div class="ds-hardware-label">CPU Cores</div>
                    <p>Intel Xeon &amp; AMD EPYC processors — single or dual socket configurations with high clock speeds and enterprise-grade reliability.</p>
                </div>
                <div class="ds-hardware-card">
                    <div class="ds-hardware-icon icon-green"><i class="fas fa-memory"></i></div>
                    <div class="ds-hardware-value">Up to 512 GB</div>
                    <div class="ds-hardware-label">DDR4 ECC RAM</div>
                    <p>Error-correcting memory for data integrity in mission-critical workloads. Scale to 512GB with dual-socket configurations.</p>
                </div>
                <div class="ds-hardware-card">
                    <div class="ds-hardware-icon icon-purple"><i class="fas fa-hdd"></i></div>
                    <div class="ds-hardware-value">NVMe SSD</div>
                    <div class="ds-hardware-label">High-IOPS Storage</div>
                    <p>Enterprise NVMe solid-state drives with hardware RAID options. Up to 8TB per server for I/O-intensive applications.</p>
                </div>
                <div class="ds-hardware-card">
                    <div class="ds-hardware-icon icon-amber"><i class="fas fa-network-wired"></i></div>
                    <div class="ds-hardware-value">100 Gbit/s</div>
                    <div class="ds-hardware-label">Network Uplink</div>
                    <p>Premium bandwidth with 1G, 10G, 40G, and 100G port options. Up to 900TB monthly transfer with BGP and ASN support.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ CUSTOM CONFIGURATION ═══════════════ -->
    <section class="ds-config reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag">Customizable</div>
                <h2>Build Your Server, Your Way</h2>
                <p>Every dedicated server is configured to your exact specifications. Choose your hardware, pick your location, and we&rsquo;ll build it.</p>
            </div>
            <div class="ds-config-grid">
                <div class="ds-config-item">
                    <div class="ds-config-num">01</div>
                    <div class="ds-config-icon"><i class="fas fa-microchip"></i></div>
                    <h4>CPU</h4>
                    <p>Intel Xeon, AMD EPYC, or Ryzen — from 4 cores to 128-core dual-socket beasts.</p>
                </div>
                <div class="ds-config-item">
                    <div class="ds-config-num">02</div>
                    <div class="ds-config-icon icon-green"><i class="fas fa-memory"></i></div>
                    <h4>RAM</h4>
                    <p>From 32GB to 512GB DDR4 ECC. Choose the memory configuration that fits your workload.</p>
                </div>
                <div class="ds-config-item">
                    <div class="ds-config-num">03</div>
                    <div class="ds-config-icon icon-purple"><i class="fas fa-hdd"></i></div>
                    <h4>Storage</h4>
                    <p>NVMe SSD, SATA SSD, or HDD. Single drives, RAID arrays, or mixed configurations.</p>
                </div>
                <div class="ds-config-item">
                    <div class="ds-config-num">04</div>
                    <div class="ds-config-icon icon-amber"><i class="fas fa-tachometer-alt"></i></div>
                    <h4>Bandwidth</h4>
                    <p>1G to 100G port speeds with 150TB to 900TB monthly transfer. Unmetered options available.</p>
                </div>
                <div class="ds-config-item">
                    <div class="ds-config-num">05</div>
                    <div class="ds-config-icon"><i class="fas fa-globe-europe"></i></div>
                    <h4>Location</h4>
                    <p>France, Netherlands, Germany, UK, Turkey, USA — Tier III+ datacenters worldwide.</p>
                </div>
                <div class="ds-config-item">
                    <div class="ds-config-num">06</div>
                    <div class="ds-config-icon icon-green"><i class="fas fa-shield-alt"></i></div>
                    <h4>Add-ons</h4>
                    <p>DDoS protection, BGP sessions, additional IPs, IPMI access, managed services, and more.</p>
                </div>
            </div>
            <div class="ds-config-cta">
                <p>Need a custom configuration? Our team will build a server tailored to your requirements.</p>
                <a href="<?php echo e(SITE_URL); ?>/contact-us/" class="btn-primary"><i class="fas fa-tools"></i> Request Custom Build</a>
            </div>
        </div>
    </section>

    <!-- ═══════════════ USE CASES ═══════════════ -->
    <section class="ds-usecases reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag">Use Cases</div>
                <h2>Built for the Most Demanding Workloads</h2>
                <p>Dedicated servers deliver the raw power, isolation, and control needed for enterprise-scale applications.</p>
            </div>
            <div class="swiper ds-usecases-swiper" id="dsUsecasesSwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="ds-usecase-card">
                            <div class="ds-usecase-icon"><i class="fas fa-cloud"></i></div>
                            <h4>Large SaaS Platforms</h4>
                            <p>Run multi-tenant SaaS applications with predictable performance, full hardware isolation, and the bandwidth to handle millions of users.</p>
                            <ul class="ds-usecase-list">
                                <li>High-concurrency web apps</li>
                                <li>Multi-tenant architectures</li>
                                <li>Real-time collaboration tools</li>
                            </ul>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="ds-usecase-card">
                            <div class="ds-usecase-icon icon-green"><i class="fas fa-database"></i></div>
                            <h4>Big Databases</h4>
                            <p>High-memory, NVMe-backed servers for large-scale databases that demand consistent low-latency reads and writes.</p>
                            <ul class="ds-usecase-list">
                                <li>MySQL &amp; PostgreSQL clusters</li>
                                <li>MongoDB &amp; Elasticsearch</li>
                                <li>Data warehousing &amp; analytics</li>
                            </ul>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="ds-usecase-card">
                            <div class="ds-usecase-icon icon-purple"><i class="fas fa-video"></i></div>
                            <h4>Streaming &amp; Media</h4>
                            <p>Deliver video on demand, live streams, and media platforms with massive bandwidth and uninterrupted throughput.</p>
                            <ul class="ds-usecase-list">
                                <li>IPTV &amp; OTT platforms</li>
                                <li>Video transcoding farms</li>
                                <li>CDN origin servers</li>
                            </ul>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="ds-usecase-card">
                            <div class="ds-usecase-icon icon-amber"><i class="fas fa-gamepad"></i></div>
                            <h4>Game Servers</h4>
                            <p>Low-latency, high-tick-rate game servers with dedicated CPU cores and premium network routes for competitive gameplay.</p>
                            <ul class="ds-usecase-list">
                                <li>Multiplayer game hosting</li>
                                <li>FiveM &amp; custom engines</li>
                                <li>Global player base support</li>
                            </ul>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="ds-usecase-card">
                            <div class="ds-usecase-icon icon-purple"><i class="fas fa-brain"></i></div>
                            <h4>AI &amp; Machine Learning</h4>
                            <p>Train large models, run inference at scale, and process massive datasets on high-core-count servers with up to 512GB RAM.</p>
                            <ul class="ds-usecase-list">
                                <li>Model training &amp; fine-tuning</li>
                                <li>LLM inference endpoints</li>
                                <li>Data processing pipelines</li>
                            </ul>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="ds-usecase-card">
                            <div class="ds-usecase-icon icon-green"><i class="fas fa-server"></i></div>
                            <h4>Virtualization &amp; Private Cloud</h4>
                            <p>Build your own private cloud with Proxmox, VMware, or KVM — full control over hypervisor and networking layer.</p>
                            <ul class="ds-usecase-list">
                                <li>Proxmox &amp; VMware clusters</li>
                                <li>Custom VPS reselling</li>
                                <li>Multi-VM orchestration</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ DEDICATED SERVER OFFERS ═══════════════ -->
    <section class="cloud-pricing reveal" id="offers">
        <div class="container">
            <div class="section-header">
                <div class="section-tag">Offers</div>
                <h2>Dedicated Server Offers</h2>
                <p>Pre-configured bare-metal servers ready for deployment. Need something different? Contact us for custom builds.</p>
            </div>

            <div class="cloud-table-wrap">
                <table class="cloud-table">
                    <thead>
                        <tr>
                            <th>Server</th>
                            <th>CPU</th>
                            <th>RAM</th>
                            <th>Storage</th>
                            <th>Port</th>
                            <th>Bandwidth</th>
                            <th>Location</th>
                            <th>Price</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>DS-1</strong></td>
                            <td><strong>AMD Ryzen 9 3900X</strong></td>
                            <td>64 GB DDR4</td>
                            <td>1 × 960 GB NVMe</td>
                            <td>1 Gbit/s</td>
                            <td>150 TB</td>
                            <td><span class="fi fi-fr"></span> France</td>
                            <td><span class="cloud-price-mo">€70<small>/mo</small></span></td>
                            <td><a href="<?php echo e(SITE_URL); ?>/contact-us/" class="cloud-buy">Order</a></td>
                        </tr>
                        <tr>
                            <td><strong>DS-2</strong></td>
                            <td><strong>2× Intel E5-2667v4</strong></td>
                            <td>128 GB DDR4</td>
                            <td>2 × 1 TB SSD</td>
                            <td>1 Gbit/s</td>
                            <td>150 TB</td>
                            <td><span class="fi fi-fr"></span> France</td>
                            <td><span class="cloud-price-mo">€74<small>/mo</small></span></td>
                            <td><a href="<?php echo e(SITE_URL); ?>/contact-us/" class="cloud-buy">Order</a></td>
                        </tr>
                        <tr class="cloud-row-highlight">
                            <td><strong>DS-3</strong> <span class="cloud-popular">Popular</span></td>
                            <td><strong>2× E5-2640v4</strong></td>
                            <td>64 GB DDR4</td>
                            <td>1 × 960 GB SSD</td>
                            <td>10 Gbit/s</td>
                            <td>150 TB</td>
                            <td><span class="fi fi-fr"></span> France</td>
                            <td><span class="cloud-price-mo">€85<small>/mo</small></span></td>
                            <td><a href="<?php echo e(SITE_URL); ?>/contact-us/" class="cloud-buy">Order</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="cloud-note">
                <p><i class="fas fa-info-circle"></i> Need more options? <a href="<?php echo e(SITE_URL); ?>/contact-us/">Contact us</a> for custom configurations, IPTV/VPN-optimized servers, high-bandwidth setups, and DMCA-ignored locations. Delivery takes 1–7 business days.</p>
            </div>
        </div>
    </section>

    <!-- ═══════════════ ENTERPRISE RELIABILITY ═══════════════ -->
    <section class="ds-reliability reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag">Reliability</div>
                <h2>Enterprise Infrastructure You Can Trust</h2>
                <p>Built-in redundancy, advanced protection, and 24/7 expert support — so you can focus on your business.</p>
            </div>
            <div class="ds-reliability-grid">
                <div class="ds-reliability-card">
                    <div class="ds-reliability-icon"><i class="fas fa-shield-alt"></i></div>
                    <h4>DDoS Protection</h4>
                    <p>Network-level DDoS mitigation included on every server. Advanced protection available for high-risk deployments.</p>
                </div>
                <div class="ds-reliability-card">
                    <div class="ds-reliability-icon icon-green"><i class="fas fa-headset"></i></div>
                    <h4>24/7 Expert Support</h4>
                    <p>Average response time: 10 minutes. Our infrastructure team is available around the clock for hardware and network issues.</p>
                </div>
                <div class="ds-reliability-card">
                    <div class="ds-reliability-icon icon-purple"><i class="fas fa-globe"></i></div>
                    <h4>Global Infrastructure</h4>
                    <p>Tier III+ datacenters across Europe and North America — redundant power, cooling, and network connectivity.</p>
                </div>
                <div class="ds-reliability-card">
                    <div class="ds-reliability-icon icon-amber"><i class="fas fa-project-diagram"></i></div>
                    <h4>Redundant Networking</h4>
                    <p>Multiple Tier-1 upstream providers with automatic failover. BGP routing for optimal path selection.</p>
                </div>
                <div class="ds-reliability-card">
                    <div class="ds-reliability-icon icon-green"><i class="fas fa-clock"></i></div>
                    <h4>99.99% Uptime SLA</h4>
                    <p>Enterprise SLA with guaranteed uptime. Proactive monitoring and instant hardware replacement in case of failure.</p>
                </div>
                <div class="ds-reliability-card">
                    <div class="ds-reliability-icon icon-purple"><i class="fas fa-key"></i></div>
                    <h4>IPMI / KVM Access</h4>
                    <p>Out-of-band management with IPMI and KVM-over-IP for full remote control — even when the OS is unreachable.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ PERFORMANCE HIGHLIGHTS ═══════════════ -->
    <section class="ds-perf reveal">
        <div class="container">
            <div class="ds-perf-layout">
                <div class="ds-perf-content">
                    <div class="section-tag">Performance</div>
                    <h2 class="ds-perf-title">Raw Power, Zero Overhead</h2>
                    <p class="ds-perf-desc">No hypervisor, no shared resources — your dedicated server delivers 100% of the hardware performance directly to your workloads.</p>
                    <ul class="ds-perf-highlights">
                        <li><i class="fas fa-bolt"></i> <strong>Bare-metal performance</strong> — no virtualization overhead</li>
                        <li><i class="fas fa-lock"></i> <strong>Full hardware isolation</strong> — single-tenant security</li>
                        <li><i class="fas fa-network-wired"></i> <strong>Premium connectivity</strong> — multiple Tier-1 providers</li>
                        <li><i class="fas fa-tools"></i> <strong>Custom hardware</strong> — configured to your exact needs</li>
                    </ul>
                </div>
                <div class="ds-perf-stats">
                    <div class="ds-perf-stat-card">
                        <div class="ds-perf-stat-value">100<span>Gbit/s</span></div>
                        <div class="ds-perf-stat-label">Max Network Speed</div>
                    </div>
                    <div class="ds-perf-stat-card">
                        <div class="ds-perf-stat-value">900<span>TB</span></div>
                        <div class="ds-perf-stat-label">Monthly Bandwidth</div>
                    </div>
                    <div class="ds-perf-stat-card">
                        <div class="ds-perf-stat-value">6<span>+</span></div>
                        <div class="ds-perf-stat-label">Global Locations</div>
                    </div>
                    <div class="ds-perf-stat-card">
                        <div class="ds-perf-stat-value">99.99<span>%</span></div>
                        <div class="ds-perf-stat-label">Uptime SLA</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ WHY YOTTASRC DEDICATED ═══════════════ -->
    <section class="why-us reveal">
        <div class="container">
            <div class="why-us-layout">
                <div class="why-us-intro">
                    <div class="section-tag">Advantages</div>
                    <h2 class="why-us-title">Why YottaSrc Dedicated?</h2>
                    <p class="why-us-desc">Enterprise-grade hardware with hands-on expert support. No middlemen, no templates — every server is built for your specific requirements.</p>
                    <a href="<?php echo e(SITE_URL); ?>/contact-us/" class="btn-primary why-us-cta"><i class="fas fa-headset"></i> Talk to Sales</a>
                </div>
                <div class="why-us-grid">
                    <div class="why-us-card"><div class="why-us-card-icon"><i class="fas fa-server"></i></div><h4>Single-Tenant Hardware</h4><p>No shared resources. The entire physical server is dedicated exclusively to your workloads.</p></div>
                    <div class="why-us-card"><div class="why-us-card-icon icon-green"><i class="fas fa-tachometer-alt"></i></div><h4>Up to 100 Gbit/s</h4><p>Premium connectivity options from 1G to 100G with up to 900TB monthly transfer.</p></div>
                    <div class="why-us-card"><div class="why-us-card-icon icon-purple"><i class="fas fa-cogs"></i></div><h4>Custom Configurations</h4><p>Choose CPU, RAM, storage, bandwidth, and location — we build it to your exact specifications.</p></div>
                    <div class="why-us-card"><div class="why-us-card-icon icon-amber"><i class="fas fa-network-wired"></i></div><h4>BGP / ASN Support</h4><p>Announce your own IP ranges via BGP sessions. Full routing control for network professionals.</p></div>
                    <div class="why-us-card"><div class="why-us-card-icon icon-green"><i class="fas fa-tags"></i></div><h4>Transparent Pricing</h4><p>No hidden fees, no surprise renewals. Same price on renewal, always.</p></div>
                    <div class="why-us-card"><div class="why-us-card-icon icon-purple"><i class="fas fa-headset"></i></div><h4>10-Min Response Time</h4><p>24/7 expert support with average 10-minute response. Real engineers, not chatbots.</p></div>
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
                <p>Everything you need to know about our dedicated servers — from ordering to management.</p>
            </div>
            <div class="faq-layout faq-layout--full">
                <div class="faq-panels">
                    <div class="faq-panel active" id="faq-ds-all">
                        <div class="faq-item">
                            <button class="faq-question"><span>How long does delivery take?</span><i class="fas fa-chevron-down"></i></button>
                            <div class="faq-answer"><p>Pre-configured servers from our offers list are typically delivered within 1–3 business days. Custom builds may take up to 7 business days depending on hardware availability and configuration complexity.</p></div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question"><span>Can I customize the server hardware?</span><i class="fas fa-chevron-down"></i></button>
                            <div class="faq-answer"><p>Absolutely. We offer full hardware customization — CPU, RAM, storage type and capacity, network port speed, bandwidth packages, and add-ons like DDoS protection, IPMI access, and additional IPs. Contact our sales team with your requirements.</p></div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question"><span>Do you offer BGP sessions?</span><i class="fas fa-chevron-down"></i></button>
                            <div class="faq-answer"><p>Yes, we support BGP sessions for customers who need to announce their own IP ranges via their ASN. This is available as an add-on for dedicated servers in supported locations.</p></div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question"><span>What locations are available?</span><i class="fas fa-chevron-down"></i></button>
                            <div class="faq-answer"><p>We currently offer dedicated servers in France, Netherlands, Germany, United Kingdom, Turkey, and the United States. All facilities are Tier III+ certified with redundant power, cooling, and network connectivity.</p></div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question"><span>Is DDoS protection included?</span><i class="fas fa-chevron-down"></i></button>
                            <div class="faq-answer"><p>Basic network-level DDoS protection is included with every server. Advanced protection with higher mitigation capacity is available as a paid add-on for servers in supported locations.</p></div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question"><span>Do you offer DMCA-ignored servers?</span><i class="fas fa-chevron-down"></i></button>
                            <div class="faq-answer"><p>Yes, we offer DMCA-ignored dedicated servers in select locations. Contact our sales team to discuss your requirements and available options.</p></div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question"><span>What payment methods are accepted?</span><i class="fas fa-chevron-down"></i></button>
                            <div class="faq-answer"><p>We accept credit/debit cards, PayPal, bank transfers, and cryptocurrency payments. All transactions are secure and encrypted.</p></div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question"><span>Can I upgrade my server later?</span><i class="fas fa-chevron-down"></i></button>
                            <div class="faq-answer"><p>Hardware upgrades such as additional RAM, storage, or network upgrades can be arranged by contacting our support team. Some upgrades may require brief downtime for physical installation.</p></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="faq-actions">
                <a href="<?php echo e(SITE_URL); ?>/contact-us/" class="btn-primary">Contact Sales <i class="fas fa-headset"></i></a>
                <a href="<?php echo e(SITE_URL); ?>/faq" class="btn-secondary">Browse All FAQ <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </section>

    <!-- ═══════════════ CTA ═══════════════ -->
    <section class="promo-cta reveal">
        <div class="container">
            <div class="promo-cta-inner">
                <div class="promo-cta-glow"></div>
                <div class="promo-cta-icon"><i class="fas fa-server"></i></div>
                <h2>Need a Custom Dedicated Server?</h2>
                <p>Our infrastructure team will design and deploy a server tailored to your exact requirements. Contact sales for a personalized quote.</p>
                <a href="<?php echo e(SITE_URL); ?>/contact-us/" class="btn-primary"><i class="fas fa-headset"></i> Contact Sales</a>
            </div>
        </div>
    </section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
