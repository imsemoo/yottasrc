<?php
/**
 * YottaSrc — Cloud Servers
 * =========================
 * Template: Cloud product page — elastic instances, hourly billing, API automation
 * Sections: Hero (dashboard) → Pricing → Locations → Partners → Scalability → Billing → Deploy → API → Use Cases → FAQ → CTA
 */
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/topbar.php';
?>

    <!-- ═══════════════ CLOUD HERO (Immersive) ═══════════════ -->
    <section class="page-hero cloud-hero cloud-hero-immersive">
        <div class="cloud-hero-glow"></div>
        <div class="container">
            <div class="cloud-hero-center">
                <div class="page-breadcrumb">
                    <a href="<?php echo e(SITE_URL); ?>/">Home</a>
                    <i class="fas fa-chevron-right"></i>
                    <span>Cloud Servers</span>
                </div>
                <h1>Elastic <span class="highlight">Cloud Infrastructure</span><br>Billed by the Hour</h1>
                <p class="cloud-hero-desc">Deploy instances in seconds across 50+ global regions. Scale CPU, RAM, and storage on demand — pay only for what you use.</p>
                <div class="page-hero-ctas">
                    <a href="<?php echo e(CONSOLE_URL); ?>/cloud/" class="btn-primary">Launch Instance <i class="fas fa-arrow-right"></i></a>
                    <a href="#cloud-instances" class="btn-secondary">View Pricing <i class="fas fa-arrow-down"></i></a>
                </div>
            </div>

            <!-- Floating metric capsules -->
            <div class="cloud-hero-metrics">
                <div class="cloud-capsule">
                    <div class="capsule-icon"><i class="fas fa-globe-europe"></i></div>
                    <div class="capsule-info">
                        <span class="capsule-val">50+</span>
                        <span class="capsule-label">Global Regions</span>
                    </div>
                </div>
                <div class="cloud-capsule accent">
                    <div class="capsule-icon"><i class="fas fa-bolt"></i></div>
                    <div class="capsule-info">
                        <span class="capsule-val">€0.003</span>
                        <span class="capsule-label">Per Hour</span>
                    </div>
                </div>
                <div class="cloud-capsule">
                    <div class="capsule-icon"><i class="fas fa-shield-alt"></i></div>
                    <div class="capsule-info">
                        <span class="capsule-val">99.9%</span>
                        <span class="capsule-label">Uptime SLA</span>
                    </div>
                </div>
                <div class="cloud-capsule">
                    <div class="capsule-icon"><i class="fas fa-code"></i></div>
                    <div class="capsule-info">
                        <span class="capsule-val">REST</span>
                        <span class="capsule-label">Full API</span>
                    </div>
                </div>
            </div>

            <!-- Deploy terminal preview -->
            <div class="cloud-hero-terminal">
                <div class="cloud-term-header">
                    <div class="cloud-term-dots"><span></span><span></span><span></span></div>
                    <span class="cloud-term-title">~ cloud-deploy</span>
                </div>
                <div class="cloud-term-body">
                    <div class="cloud-term-line">
                        <span class="cloud-term-prompt">$</span>
                        <span class="cloud-term-cmd">yottasrc cloud deploy</span>
                        <span class="cloud-term-flag">--region</span><span class="cloud-term-eq">=</span><span class="cloud-term-val">eu-central</span>
                        <span class="cloud-term-flag">--plan</span><span class="cloud-term-eq">=</span><span class="cloud-term-val">cloud-4x</span>
                        <span class="cloud-term-flag">--os</span><span class="cloud-term-eq">=</span><span class="cloud-term-val">ubuntu-24.04</span>
                    </div>
                    <div class="cloud-term-line output">
                        <span class="cloud-term-ok">✓</span> Instance deployed in <strong>12s</strong> — IP: 185.xxx.xxx.xxx — Status: <span class="cloud-term-status">Running</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ CLOUD INSTANCES PRICING ═══════════════ -->
    <section class="cloud-pricing reveal" id="cloud-instances">
        <div class="container">
            <div class="section-header">
                <div class="section-tag">Instances</div>
                <h2>Cloud Instance Pricing</h2>
                <p>Transparent per-hour pricing — no hidden fees, no minimum contract. Scale from a single core to a full production cluster.</p>
            </div>

            <div class="cloud-table-wrap">
                <table class="cloud-table">
                    <thead>
                        <tr>
                            <th>Instance</th>
                            <th>vCPU</th>
                            <th>RAM</th>
                            <th>NVMe</th>
                            <th>Network</th>
                            <th>Hourly / Monthly</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>CLY1 x86</strong></td>
                            <td>1 Core</td>
                            <td>2 GB</td>
                            <td>25 GB</td>
                            <td>1 Gbit/s · 25TB</td>
                            <td><span class="cloud-price-hr">€0.0034/h</span><span class="cloud-price-mo">€1.99/mo</span></td>
                            <td><a href="<?php echo e(CONSOLE_URL); ?>/cloud/" class="cloud-buy" target="_blank" rel="noopener noreferrer">Deploy</a></td>
                        </tr>
                        <tr>
                            <td><strong>CLR1 x86</strong></td>
                            <td>1 Core</td>
                            <td>2 GB</td>
                            <td>20 GB</td>
                            <td>2 Gbit/s · 15TB</td>
                            <td><span class="cloud-price-hr">€0.0091/h</span><span class="cloud-price-mo">€4.55/mo</span></td>
                            <td><a href="<?php echo e(CONSOLE_URL); ?>/cloud/" class="cloud-buy" target="_blank" rel="noopener noreferrer">Deploy</a></td>
                        </tr>
                        <tr>
                            <td><strong>CLH1 Arm64</strong></td>
                            <td>2 Cores</td>
                            <td>4 GB</td>
                            <td>40 GB</td>
                            <td>10 Gbit/s · 30TB</td>
                            <td><span class="cloud-price-hr">€0.0097/h</span><span class="cloud-price-mo">€4.99/mo</span></td>
                            <td><a href="<?php echo e(CONSOLE_URL); ?>/cloud/" class="cloud-buy" target="_blank" rel="noopener noreferrer">Deploy</a></td>
                        </tr>
                        <tr>
                            <td><strong>CLH5 x86</strong></td>
                            <td>2 Cores</td>
                            <td>4 GB</td>
                            <td>40 GB</td>
                            <td>10 Gbit/s · 30TB</td>
                            <td><span class="cloud-price-hr">€0.0097/h</span><span class="cloud-price-mo">€4.99/mo</span></td>
                            <td><a href="<?php echo e(CONSOLE_URL); ?>/cloud/" class="cloud-buy" target="_blank" rel="noopener noreferrer">Deploy</a></td>
                        </tr>
                        <tr class="cloud-row-highlight">
                            <td><strong>CLY2 x86</strong> <span class="cloud-popular">Popular</span></td>
                            <td>2 Cores</td>
                            <td>4 GB</td>
                            <td>50 GB</td>
                            <td>10 Gbit/s · 25TB</td>
                            <td><span class="cloud-price-hr">€0.0086/h</span><span class="cloud-price-mo">€4.99/mo</span></td>
                            <td><a href="<?php echo e(CONSOLE_URL); ?>/cloud/" class="cloud-buy" target="_blank" rel="noopener noreferrer">Deploy</a></td>
                        </tr>
                        <tr>
                            <td><strong>CLK1 x86</strong></td>
                            <td>1 Core</td>
                            <td>1 GB</td>
                            <td>20 GB</td>
                            <td>10 Gbit/s · 15TB</td>
                            <td><span class="cloud-price-hr">€0.01/h</span><span class="cloud-price-mo">€5.20/mo</span></td>
                            <td><a href="<?php echo e(CONSOLE_URL); ?>/cloud/" class="cloud-buy" target="_blank" rel="noopener noreferrer">Deploy</a></td>
                        </tr>
                        <tr>
                            <td><strong>CLR2 x86</strong></td>
                            <td>1 Core</td>
                            <td>2 GB</td>
                            <td>20 GB</td>
                            <td>2 Gbit/s · 15TB</td>
                            <td><span class="cloud-price-hr">€0.0109/h</span><span class="cloud-price-mo">€5.85/mo</span></td>
                            <td><a href="<?php echo e(CONSOLE_URL); ?>/cloud/" class="cloud-buy" target="_blank" rel="noopener noreferrer">Deploy</a></td>
                        </tr>
                        <tr>
                            <td><strong>CLH6 x86</strong></td>
                            <td>2 Cores</td>
                            <td>2 GB</td>
                            <td>40 GB</td>
                            <td>10 Gbit/s · 30TB</td>
                            <td><span class="cloud-price-hr">€0.0111/h</span><span class="cloud-price-mo">€5.99/mo</span></td>
                            <td><a href="<?php echo e(CONSOLE_URL); ?>/cloud/" class="cloud-buy" target="_blank" rel="noopener noreferrer">Deploy</a></td>
                        </tr>
                        <tr>
                            <td><strong>CLR3 x86</strong></td>
                            <td>1 Core</td>
                            <td>3 GB</td>
                            <td>25 GB</td>
                            <td>2 Gbit/s · 15TB</td>
                            <td><span class="cloud-price-hr">€0.0118/h</span><span class="cloud-price-mo">€6.50/mo</span></td>
                            <td><a href="<?php echo e(CONSOLE_URL); ?>/cloud/" class="cloud-buy" target="_blank" rel="noopener noreferrer">Deploy</a></td>
                        </tr>
                        <tr>
                            <td><strong>CLR4 x86</strong></td>
                            <td>2 Cores</td>
                            <td>4 GB</td>
                            <td>40 GB</td>
                            <td>2 Gbit/s · 15TB</td>
                            <td><span class="cloud-price-hr">€0.0127/h</span><span class="cloud-price-mo">€7.15/mo</span></td>
                            <td><a href="<?php echo e(CONSOLE_URL); ?>/cloud/" class="cloud-buy" target="_blank" rel="noopener noreferrer">Deploy</a></td>
                        </tr>
                        <tr>
                            <td><strong>CLK2 x86</strong></td>
                            <td>1 Core</td>
                            <td>2 GB</td>
                            <td>20 GB</td>
                            <td>10 Gbit/s · 15TB</td>
                            <td><span class="cloud-price-hr">€0.0136/h</span><span class="cloud-price-mo">€7.80/mo</span></td>
                            <td><a href="<?php echo e(CONSOLE_URL); ?>/cloud/" class="cloud-buy" target="_blank" rel="noopener noreferrer">Deploy</a></td>
                        </tr>
                        <tr>
                            <td><strong>CLR5 x86</strong></td>
                            <td>2 Cores</td>
                            <td>4 GB</td>
                            <td>40 GB</td>
                            <td>2 Gbit/s · 15TB</td>
                            <td><span class="cloud-price-hr">€0.0145/h</span><span class="cloud-price-mo">€8.45/mo</span></td>
                            <td><a href="<?php echo e(CONSOLE_URL); ?>/cloud/" class="cloud-buy" target="_blank" rel="noopener noreferrer">Deploy</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="cloud-note">
                <p><i class="fas fa-info-circle"></i> Showing a selection of 50+ instance types available. Browse all configurations in the <a href="<?php echo e(CONSOLE_URL); ?>/cloud/">cloud console</a>.</p>
            </div>
        </div>
    </section>

    <!-- ═══════════════ GLOBAL CLOUD INFRASTRUCTURE ═══════════════ -->
    <section class="locations-section reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag">Regions</div>
                <h2>Global Cloud Infrastructure</h2>
                <p>Deploy instances across 50+ regions on 6 continents. Minimize latency by placing workloads close to your users.</p>
            </div>

            <div class="locations-tabs">
                <button class="loc-tab active" data-loc-target="cloud-europe"><i class="fas fa-globe-europe"></i> Europe</button>
                <button class="loc-tab" data-loc-target="cloud-asia"><i class="fas fa-globe-asia"></i> Asia</button>
                <button class="loc-tab" data-loc-target="cloud-africa"><i class="fas fa-globe-africa"></i> Africa</button>
                <button class="loc-tab" data-loc-target="cloud-south-america"><i class="fas fa-globe-americas"></i> South America</button>
                <button class="loc-tab" data-loc-target="cloud-north-america"><i class="fas fa-globe-americas"></i> North America</button>
                <button class="loc-tab" data-loc-target="cloud-oceania"><i class="fas fa-globe"></i> Oceania</button>
            </div>

            <div class="locations-panels">
                <div class="loc-panel active" id="cloud-europe">
                    <div class="loc-dir">
                        <a href="<?php echo e(SITE_URL); ?>/cloud/cheap-cloud-Netherland-location/" class="loc-entry"><span class="loc-signal green"></span><span class="fi fi-nl"></span><span class="loc-city">Amsterdam</span><span class="loc-ms">8 ms</span></a>
                        <a href="<?php echo e(SITE_URL); ?>/cloud/cheap-cloud-Germany-location/" class="loc-entry"><span class="loc-signal green"></span><span class="fi fi-de"></span><span class="loc-city">Frankfurt</span><span class="loc-ms">5 ms</span></a>
                        <a href="<?php echo e(SITE_URL); ?>/cloud/cheap-cloud-France-location/" class="loc-entry"><span class="loc-signal green"></span><span class="fi fi-fr"></span><span class="loc-city">Paris</span><span class="loc-ms">12 ms</span></a>
                        <a href="<?php echo e(SITE_URL); ?>/cloud/cheap-cloud-UK-location/" class="loc-entry"><span class="loc-signal green"></span><span class="fi fi-gb"></span><span class="loc-city">London</span><span class="loc-ms">15 ms</span></a>
                        <a href="<?php echo e(SITE_URL); ?>/cloud/cheap-cloud-Switzerland-location/" class="loc-entry"><span class="loc-signal green"></span><span class="fi fi-ch"></span><span class="loc-city">Zurich</span><span class="loc-ms">8 ms</span></a>
                        <a href="<?php echo e(SITE_URL); ?>/cloud/cheap-cloud-Belgium-location/" class="loc-entry"><span class="loc-signal green"></span><span class="fi fi-be"></span><span class="loc-city">Brussels</span><span class="loc-ms">10 ms</span></a>
                        <a href="<?php echo e(SITE_URL); ?>/cloud/cheap-cloud-Luxembourg-location/" class="loc-entry"><span class="loc-signal green"></span><span class="fi fi-lu"></span><span class="loc-city">Luxembourg</span><span class="loc-ms">10 ms</span></a>
                        <a href="<?php echo e(SITE_URL); ?>/cloud/cheap-cloud-Austria-location/" class="loc-entry"><span class="loc-signal green"></span><span class="fi fi-at"></span><span class="loc-city">Vienna</span><span class="loc-ms">12 ms</span></a>
                        <a href="<?php echo e(SITE_URL); ?>/cloud/cheap-cloud-Italy-location/" class="loc-entry"><span class="loc-signal green"></span><span class="fi fi-it"></span><span class="loc-city">Milan</span><span class="loc-ms">18 ms</span></a>
                        <a href="<?php echo e(SITE_URL); ?>/cloud/cheap-cloud-Denmark-location/" class="loc-entry"><span class="loc-signal green"></span><span class="fi fi-dk"></span><span class="loc-city">Copenhagen</span><span class="loc-ms">22 ms</span></a>
                        <a href="<?php echo e(SITE_URL); ?>/cloud/cheap-cloud-Ireland-location/" class="loc-entry"><span class="loc-signal green"></span><span class="fi fi-ie"></span><span class="loc-city">Dublin</span><span class="loc-ms">22 ms</span></a>
                        <a href="<?php echo e(SITE_URL); ?>/cloud/cheap-cloud-Poland-location/" class="loc-entry"><span class="loc-signal green"></span><span class="fi fi-pl"></span><span class="loc-city">Warsaw</span><span class="loc-ms">28 ms</span></a>
                        <a href="<?php echo e(SITE_URL); ?>/cloud/cheap-cloud-Spain-location/" class="loc-entry"><span class="loc-signal green"></span><span class="fi fi-es"></span><span class="loc-city">Madrid</span><span class="loc-ms">28 ms</span></a>
                        <a href="<?php echo e(SITE_URL); ?>/cloud/cheap-cloud-Norway-location/" class="loc-entry"><span class="loc-signal yellow"></span><span class="fi fi-no"></span><span class="loc-city">Oslo</span><span class="loc-ms">30 ms</span></a>
                        <a href="<?php echo e(SITE_URL); ?>/cloud/cheap-cloud-Serbia-location/" class="loc-entry"><span class="loc-signal yellow"></span><span class="fi fi-rs"></span><span class="loc-city">Belgrade</span><span class="loc-ms">32 ms</span></a>
                        <a href="<?php echo e(SITE_URL); ?>/cloud/cheap-cloud-Sweden-location/" class="loc-entry"><span class="loc-signal yellow"></span><span class="fi fi-se"></span><span class="loc-city">Stockholm</span><span class="loc-ms">32 ms</span></a>
                        <a href="<?php echo e(SITE_URL); ?>/cloud/cheap-cloud-Finland-location/" class="loc-entry"><span class="loc-signal yellow"></span><span class="fi fi-fi"></span><span class="loc-city">Helsinki</span><span class="loc-ms">35 ms</span></a>
                        <a href="<?php echo e(SITE_URL); ?>/cloud/cheap-cloud-Portugal-location/" class="loc-entry"><span class="loc-signal yellow"></span><span class="fi fi-pt"></span><span class="loc-city">Lisbon</span><span class="loc-ms">35 ms</span></a>
                        <a href="<?php echo e(SITE_URL); ?>/cloud/cheap-cloud-Estonia-location/" class="loc-entry"><span class="loc-signal yellow"></span><span class="fi fi-ee"></span><span class="loc-city">Tallinn</span><span class="loc-ms">36 ms</span></a>
                        <a href="<?php echo e(SITE_URL); ?>/cloud/cheap-cloud-Lithuania-location/" class="loc-entry"><span class="loc-signal yellow"></span><span class="fi fi-lt"></span><span class="loc-city">Vilnius</span><span class="loc-ms">38 ms</span></a>
                        <a href="<?php echo e(SITE_URL); ?>/cloud/cheap-cloud-Romania-location/" class="loc-entry"><span class="loc-signal yellow"></span><span class="fi fi-ro"></span><span class="loc-city">Bucharest</span><span class="loc-ms">38 ms</span></a>
                        <a href="<?php echo e(SITE_URL); ?>/cloud/cheap-cloud-Bulgaria-location/" class="loc-entry"><span class="loc-signal yellow"></span><span class="fi fi-bg"></span><span class="loc-city">Sofia</span><span class="loc-ms">40 ms</span></a>
                        <a href="<?php echo e(SITE_URL); ?>/cloud/cheap-cloud-Greece-location/" class="loc-entry"><span class="loc-signal yellow"></span><span class="fi fi-gr"></span><span class="loc-city">Athens</span><span class="loc-ms">42 ms</span></a>
                        <a href="<?php echo e(SITE_URL); ?>/cloud/cheap-cloud-Ukraine-location/" class="loc-entry"><span class="loc-signal yellow"></span><span class="fi fi-ua"></span><span class="loc-city">Kyiv</span><span class="loc-ms">42 ms</span></a>
                        <a href="<?php echo e(SITE_URL); ?>/cloud/cheap-cloud-Turkey-location/" class="loc-entry"><span class="loc-signal yellow"></span><span class="fi fi-tr"></span><span class="loc-city">Istanbul</span><span class="loc-ms">45 ms</span></a>
                        <a href="<?php echo e(SITE_URL); ?>/cloud/cheap-cloud-Russia-location/" class="loc-entry"><span class="loc-signal yellow"></span><span class="fi fi-ru"></span><span class="loc-city">Moscow</span><span class="loc-ms">48 ms</span></a>
                        <a href="<?php echo e(SITE_URL); ?>/cloud/cheap-cloud-Cyprus-location/" class="loc-entry"><span class="loc-signal yellow"></span><span class="fi fi-cy"></span><span class="loc-city">Nicosia</span><span class="loc-ms">55 ms</span></a>
                    </div>
                </div>
                <div class="loc-panel" id="cloud-asia">
                    <div class="loc-dir">
                        <a href="<?php echo e(SITE_URL); ?>/cloud/cheap-cloud-Israel-location/" class="loc-entry"><span class="loc-signal yellow"></span><span class="fi fi-il"></span><span class="loc-city">Tel Aviv</span><span class="loc-ms">58 ms</span></a>
                        <a href="<?php echo e(SITE_URL); ?>/cloud/cheap-cloud-UAE (Dubai)-location/" class="loc-entry"><span class="loc-signal orange"></span><span class="fi fi-ae"></span><span class="loc-city">Dubai</span><span class="loc-ms">95 ms</span></a>
                        <a href="<?php echo e(SITE_URL); ?>/cloud/cheap-cloud-India-location/" class="loc-entry"><span class="loc-signal orange"></span><span class="fi fi-in"></span><span class="loc-city">Mumbai</span><span class="loc-ms">120 ms</span></a>
                        <a href="<?php echo e(SITE_URL); ?>/cloud/cheap-cloud-Singapore-location/" class="loc-entry"><span class="loc-signal orange"></span><span class="fi fi-sg"></span><span class="loc-city">Singapore</span><span class="loc-ms">175 ms</span></a>
                        <a href="<?php echo e(SITE_URL); ?>/cloud/cheap-cloud-Malaysia-location/" class="loc-entry"><span class="loc-signal orange"></span><span class="fi fi-my"></span><span class="loc-city">Kuala Lumpur</span><span class="loc-ms">180 ms</span></a>
                        <a href="<?php echo e(SITE_URL); ?>/cloud/cheap-cloud-Hong Kong-location/" class="loc-entry"><span class="loc-signal orange"></span><span class="fi fi-hk"></span><span class="loc-city">Hong Kong</span><span class="loc-ms">195 ms</span></a>
                        <a href="<?php echo e(SITE_URL); ?>/cloud/cheap-cloud-Japan-location/" class="loc-entry"><span class="loc-signal red"></span><span class="fi fi-jp"></span><span class="loc-city">Tokyo</span><span class="loc-ms">230 ms</span></a>
                    </div>
                </div>
                <div class="loc-panel" id="cloud-africa">
                    <div class="loc-dir">
                        <a href="<?php echo e(SITE_URL); ?>/cloud/cheap-cloud-Morocco-location/" class="loc-entry"><span class="loc-signal yellow"></span><span class="fi fi-ma"></span><span class="loc-city">Casablanca</span><span class="loc-ms">45 ms</span></a>
                        <a href="<?php echo e(SITE_URL); ?>/cloud/cheap-cloud-Nigeria-location/" class="loc-entry"><span class="loc-signal orange"></span><span class="fi fi-ng"></span><span class="loc-city">Lagos</span><span class="loc-ms">110 ms</span></a>
                        <a href="<?php echo e(SITE_URL); ?>/cloud/cheap-cloud-South Africa-location/" class="loc-entry"><span class="loc-signal orange"></span><span class="fi fi-za"></span><span class="loc-city">Johannesburg</span><span class="loc-ms">160 ms</span></a>
                    </div>
                </div>
                <div class="loc-panel" id="cloud-south-america">
                    <div class="loc-dir">
                        <a href="<?php echo e(SITE_URL); ?>/cloud/cheap-cloud-Costa Rica-location/" class="loc-entry"><span class="loc-signal orange"></span><span class="fi fi-cr"></span><span class="loc-city">San José</span><span class="loc-ms">170 ms</span></a>
                        <a href="<?php echo e(SITE_URL); ?>/cloud/cheap-cloud-Colombia-location/" class="loc-entry"><span class="loc-signal orange"></span><span class="fi fi-co"></span><span class="loc-city">Bogotá</span><span class="loc-ms">175 ms</span></a>
                        <a href="<?php echo e(SITE_URL); ?>/cloud/cheap-cloud-Ecuador-location/" class="loc-entry"><span class="loc-signal orange"></span><span class="fi fi-ec"></span><span class="loc-city">Quito</span><span class="loc-ms">180 ms</span></a>
                        <a href="<?php echo e(SITE_URL); ?>/cloud/cheap-cloud-Peru-location/" class="loc-entry"><span class="loc-signal orange"></span><span class="fi fi-pe"></span><span class="loc-city">Lima</span><span class="loc-ms">185 ms</span></a>
                        <a href="<?php echo e(SITE_URL); ?>/cloud/cheap-cloud-Brazil-location/" class="loc-entry"><span class="loc-signal orange"></span><span class="fi fi-br"></span><span class="loc-city">São Paulo</span><span class="loc-ms">190 ms</span></a>
                        <a href="<?php echo e(SITE_URL); ?>/cloud/cheap-cloud-Bolivia-location/" class="loc-entry"><span class="loc-signal orange"></span><span class="fi fi-bo"></span><span class="loc-city">Santa Cruz</span><span class="loc-ms">195 ms</span></a>
                        <a href="<?php echo e(SITE_URL); ?>/cloud/cheap-cloud-Chile-location/" class="loc-entry"><span class="loc-signal red"></span><span class="fi fi-cl"></span><span class="loc-city">Santiago</span><span class="loc-ms">210 ms</span></a>
                        <a href="<?php echo e(SITE_URL); ?>/cloud/cheap-cloud-Argentina-location/" class="loc-entry"><span class="loc-signal red"></span><span class="fi fi-ar"></span><span class="loc-city">Buenos Aires</span><span class="loc-ms">215 ms</span></a>
                    </div>
                </div>
                <div class="loc-panel" id="cloud-north-america">
                    <div class="loc-dir">
                        <a href="<?php echo e(SITE_URL); ?>/cloud/cheap-cloud-USA-location/" class="loc-entry"><span class="loc-signal orange"></span><span class="fi fi-us"></span><span class="loc-city">Ashburn</span><span class="loc-ms">85 ms</span></a>
                        <a href="<?php echo e(SITE_URL); ?>/cloud/cheap-cloud-Canada-location/" class="loc-entry"><span class="loc-signal orange"></span><span class="fi fi-ca"></span><span class="loc-city">Toronto</span><span class="loc-ms">95 ms</span></a>
                        <a href="<?php echo e(SITE_URL); ?>/cloud/cheap-cloud-Mexico-location/" class="loc-entry"><span class="loc-signal orange"></span><span class="fi fi-mx"></span><span class="loc-city">Mexico City</span><span class="loc-ms">130 ms</span></a>
                    </div>
                </div>
                <div class="loc-panel" id="cloud-oceania">
                    <div class="loc-dir">
                        <a href="<?php echo e(SITE_URL); ?>/cloud/cheap-cloud-Australia-location/" class="loc-entry"><span class="loc-signal red"></span><span class="fi fi-au"></span><span class="loc-city">Sydney</span><span class="loc-ms">275 ms</span></a>
                    </div>
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

    <!-- ═══════════════ CLOUD PANEL PREVIEW ═══════════════ -->
    <section class="cloud-panel-preview reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag">Control Panel</div>
                <h2>Manage Everything from One Dashboard</h2>
                <p>A clean, powerful interface to deploy, monitor, and scale your cloud instances — no CLI required.</p>
            </div>

            <div class="panel-mockup">
                <!-- Sidebar -->
                <div class="panel-sidebar">
                    <div class="panel-sidebar-logo">
                        <span class="panel-logo-icon"><i class="fas fa-cube"></i></span>
                        <span class="panel-logo-text">YottaSrc</span>
                    </div>
                    <nav class="panel-nav">
                        <a class="panel-nav-item active"><i class="fas fa-th-large"></i> Dashboard</a>
                        <a class="panel-nav-item"><i class="fas fa-server"></i> Instances</a>
                        <a class="panel-nav-item"><i class="fas fa-network-wired"></i> Networking</a>
                        <a class="panel-nav-item"><i class="fas fa-database"></i> Volumes</a>
                        <a class="panel-nav-item"><i class="fas fa-shield-alt"></i> Firewalls</a>
                        <a class="panel-nav-item"><i class="fas fa-key"></i> SSH Keys</a>
                        <a class="panel-nav-item"><i class="fas fa-chart-line"></i> Monitoring</a>
                        <a class="panel-nav-item"><i class="fas fa-file-invoice-dollar"></i> Billing</a>
                    </nav>
                </div>

                <!-- Main content -->
                <div class="panel-main">
                    <!-- Top bar -->
                    <div class="panel-topbar">
                        <div class="panel-search">
                            <i class="fas fa-search"></i>
                            <span>Search instances, IPs, volumes…</span>
                        </div>
                        <div class="panel-topbar-actions">
                            <span class="panel-notif"><i class="fas fa-bell"></i></span>
                            <span class="panel-avatar">YS</span>
                        </div>
                    </div>

                    <!-- Stats row -->
                    <div class="panel-stats">
                        <div class="panel-stat">
                            <span class="panel-stat-val">12</span>
                            <span class="panel-stat-label">Instances</span>
                            <span class="panel-stat-badge up"><i class="fas fa-arrow-up"></i> 3</span>
                        </div>
                        <div class="panel-stat">
                            <span class="panel-stat-val">48</span>
                            <span class="panel-stat-label">vCPU Total</span>
                        </div>
                        <div class="panel-stat">
                            <span class="panel-stat-val">128 GB</span>
                            <span class="panel-stat-label">RAM Allocated</span>
                        </div>
                        <div class="panel-stat">
                            <span class="panel-stat-val">€43.20</span>
                            <span class="panel-stat-label">Month to Date</span>
                        </div>
                    </div>

                    <!-- Instance list -->
                    <div class="panel-instances">
                        <div class="panel-instances-head">
                            <span class="panel-instances-title">Active Instances</span>
                            <span class="panel-deploy-btn"><i class="fas fa-plus"></i> Deploy New</span>
                        </div>
                        <div class="panel-instance-row">
                            <span class="panel-inst-status running"></span>
                            <span class="panel-inst-name">web-prod-01</span>
                            <span class="panel-inst-spec">4 vCPU · 16 GB · Frankfurt</span>
                            <span class="panel-inst-ip">185.212.xxx.xxx</span>
                            <span class="panel-inst-badge">Running</span>
                        </div>
                        <div class="panel-instance-row">
                            <span class="panel-inst-status running"></span>
                            <span class="panel-inst-name">api-gateway</span>
                            <span class="panel-inst-spec">2 vCPU · 8 GB · Amsterdam</span>
                            <span class="panel-inst-ip">91.184.xxx.xxx</span>
                            <span class="panel-inst-badge">Running</span>
                        </div>
                        <div class="panel-instance-row">
                            <span class="panel-inst-status stopped"></span>
                            <span class="panel-inst-name">staging-db</span>
                            <span class="panel-inst-spec">8 vCPU · 32 GB · Ashburn</span>
                            <span class="panel-inst-ip">104.238.xxx.xxx</span>
                            <span class="panel-inst-badge off">Stopped</span>
                        </div>
                    </div>

                    <!-- Chart placeholder -->
                    <div class="panel-chart">
                        <div class="panel-chart-head">
                            <span class="panel-chart-title">CPU Usage — Last 24h</span>
                            <span class="panel-chart-legend"><span class="panel-dot primary"></span> web-prod-01 <span class="panel-dot green"></span> api-gateway</span>
                        </div>
                        <div class="panel-chart-area">
                            <svg viewBox="0 0 480 100" preserveAspectRatio="none" class="panel-chart-svg">
                                <defs>
                                    <linearGradient id="cpuGrad1" x1="0" y1="0" x2="0" y2="1">
                                        <stop offset="0%" stop-color="var(--brand-primary)" stop-opacity="0.3"/>
                                        <stop offset="100%" stop-color="var(--brand-primary)" stop-opacity="0"/>
                                    </linearGradient>
                                    <linearGradient id="cpuGrad2" x1="0" y1="0" x2="0" y2="1">
                                        <stop offset="0%" stop-color="var(--brand-secondary)" stop-opacity="0.2"/>
                                        <stop offset="100%" stop-color="var(--brand-secondary)" stop-opacity="0"/>
                                    </linearGradient>
                                </defs>
                                <path d="M0,80 C40,75 80,60 120,55 C160,50 200,65 240,40 C280,20 320,30 360,25 C400,22 440,35 480,30 L480,100 L0,100 Z" fill="url(#cpuGrad1)"/>
                                <path d="M0,80 C40,75 80,60 120,55 C160,50 200,65 240,40 C280,20 320,30 360,25 C400,22 440,35 480,30" fill="none" stroke="var(--brand-primary)" stroke-width="2"/>
                                <path d="M0,90 C40,88 80,82 120,78 C160,75 200,80 240,70 C280,60 320,65 360,58 C400,55 440,62 480,57 L480,100 L0,100 Z" fill="url(#cpuGrad2)"/>
                                <path d="M0,90 C40,88 80,82 120,78 C160,75 200,80 240,70 C280,60 320,65 360,58 C400,55 440,62 480,57" fill="none" stroke="var(--brand-secondary)" stroke-width="2"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ CLOUD SCALABILITY ═══════════════ -->
    <section class="cloud-scale reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag">Elastic Resources</div>
                <h2>Scale Every Dimension on Demand</h2>
                <p>Add CPU, RAM, storage, or regions instantly — no migrations, no downtime. Resources adjust to your workload.</p>
            </div>
            <div class="cloud-scale-grid">
                <div class="cloud-scale-card">
                    <div class="cloud-scale-icon"><i class="fas fa-microchip"></i></div>
                    <div class="cloud-scale-meter">
                        <div class="cloud-scale-bar" style="--bar-fill: 75%; --bar-color: var(--brand-primary);"></div>
                    </div>
                    <h4>Elastic vCPU</h4>
                    <p>Scale from 1 to 32 dedicated cores per instance. Burst when you need it, scale back when you don't.</p>
                    <span class="cloud-scale-range">1 – 32 Cores</span>
                </div>
                <div class="cloud-scale-card">
                    <div class="cloud-scale-icon icon-green"><i class="fas fa-memory"></i></div>
                    <div class="cloud-scale-meter">
                        <div class="cloud-scale-bar" style="--bar-fill: 60%; --bar-color: var(--brand-secondary);"></div>
                    </div>
                    <h4>Flexible RAM</h4>
                    <p>Allocate 1 GB to 128 GB of memory. Optimize for data-intensive workloads or lightweight services.</p>
                    <span class="cloud-scale-range">1 – 128 GB</span>
                </div>
                <div class="cloud-scale-card">
                    <div class="cloud-scale-icon icon-purple"><i class="fas fa-hdd"></i></div>
                    <div class="cloud-scale-meter">
                        <div class="cloud-scale-bar" style="--bar-fill: 50%; --bar-color: var(--brand-accent);"></div>
                    </div>
                    <h4>NVMe Storage</h4>
                    <p>High-performance NVMe SSDs from 20 GB to 2 TB. Ultra-low latency for databases and applications.</p>
                    <span class="cloud-scale-range">20 GB – 2 TB</span>
                </div>
                <div class="cloud-scale-card">
                    <div class="cloud-scale-icon icon-amber"><i class="fas fa-network-wired"></i></div>
                    <div class="cloud-scale-meter">
                        <div class="cloud-scale-bar" style="--bar-fill: 85%; --bar-color: var(--brand-warning);"></div>
                    </div>
                    <h4>Network Bandwidth</h4>
                    <p>Up to 10 Gbit/s connections with generous transfer. Deploy multi-region for global low-latency coverage.</p>
                    <span class="cloud-scale-range">1 – 10 Gbit/s</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ FLEXIBLE BILLING ═══════════════ -->
    <section class="cloud-billing reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag">Pay-As-You-Go</div>
                <h2>Only Pay for Compute Time Used</h2>
                <p>Hourly billing means you never overpay. Spin up for minutes or run for months — no contracts, no commitments.</p>
            </div>
            <div class="cloud-billing-compare">
                <div class="cloud-billing-card cloud-billing-old">
                    <div class="cloud-billing-label">Traditional Hosting</div>
                    <ul>
                        <li><i class="fas fa-times"></i> Fixed monthly plans</li>
                        <li><i class="fas fa-times"></i> Pay for idle resources</li>
                        <li><i class="fas fa-times"></i> Long-term contracts</li>
                        <li><i class="fas fa-times"></i> Manual scaling requests</li>
                        <li><i class="fas fa-times"></i> Overpay during low traffic</li>
                    </ul>
                </div>
                <div class="cloud-billing-vs">vs</div>
                <div class="cloud-billing-card cloud-billing-new">
                    <div class="cloud-billing-label">YottaSrc Cloud</div>
                    <ul>
                        <li><i class="fas fa-check"></i> Billed per hour of usage</li>
                        <li><i class="fas fa-check"></i> Pay only for what you use</li>
                        <li><i class="fas fa-check"></i> No minimum commitment</li>
                        <li><i class="fas fa-check"></i> Instant resource scaling</li>
                        <li><i class="fas fa-check"></i> Costs match your workload</li>
                    </ul>
                    <div class="cloud-billing-highlight">
                        <span class="cloud-billing-from">Starting from</span>
                        <span class="cloud-billing-price">€0.003<small>/hr</small></span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ CLOUD DEPLOY WORKFLOW ═══════════════ -->
    <section class="cloud-deploy reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag">Deploy</div>
                <h2>From Zero to Running in 3 Steps</h2>
                <p>No complex setups or lengthy verifications — just sign up, configure, and launch.</p>
            </div>
            <div class="cloud-deploy-flow">
                <div class="cloud-deploy-step">
                    <div class="cloud-deploy-num">1</div>
                    <div class="cloud-deploy-icon"><i class="fas fa-user-plus"></i></div>
                    <h4>Create &amp; Fund</h4>
                    <p>Sign up with email — no ID verification. Add funds starting from €5 via crypto, PayPal, or card.</p>
                </div>
                <div class="cloud-deploy-connector"><i class="fas fa-chevron-right"></i></div>
                <div class="cloud-deploy-step">
                    <div class="cloud-deploy-num">2</div>
                    <div class="cloud-deploy-icon icon-green"><i class="fas fa-sliders-h"></i></div>
                    <h4>Configure Instance</h4>
                    <p>Choose your region, OS, CPU, RAM, and storage. Or use the API to provision programmatically.</p>
                </div>
                <div class="cloud-deploy-connector"><i class="fas fa-chevron-right"></i></div>
                <div class="cloud-deploy-step">
                    <div class="cloud-deploy-num">3</div>
                    <div class="cloud-deploy-icon icon-purple"><i class="fas fa-rocket"></i></div>
                    <h4>Launch &amp; Scale</h4>
                    <p>Instance deploys in seconds. Hourly billing starts — scale up, down, or terminate anytime.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ API & AUTOMATION ═══════════════ -->
    <section class="api-section reveal">
        <div class="container">
            <div class="api-layout">
                <div class="api-text">
                    <div class="section-tag">Automation</div>
                    <h2>Programmatic Infrastructure</h2>
                    <p>Manage your entire cloud fleet through our REST API. Create, resize, snapshot, and destroy instances without touching the console. Built for CI/CD pipelines, auto-scaling, and reseller platforms.</p>
                    <div class="api-highlights">
                        <div class="api-highlight"><i class="fas fa-check-circle"></i> RESTful API with JSON responses</div>
                        <div class="api-highlight"><i class="fas fa-check-circle"></i> Manage instances, IPs &amp; snapshots</div>
                        <div class="api-highlight"><i class="fas fa-check-circle"></i> Webhook notifications</div>
                        <div class="api-highlight"><i class="fas fa-check-circle"></i> Reseller-ready with volume discounts</div>
                    </div>
                    <a href="https://docs.yottasrc.com/" class="btn-primary" target="_blank" rel="noopener noreferrer">API Documentation <i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="api-visual">
                    <div class="hero-terminal">
                        <div class="terminal-header">
                            <span class="terminal-dot red"></span>
                            <span class="terminal-dot yellow"></span>
                            <span class="terminal-dot green"></span>
                            <span class="terminal-title">cloud-api</span>
                        </div>
                        <div class="terminal-body">
                            <div><span class="cmd">$</span> curl -X POST <span class="val">api.yottasrc.com/v1/instances</span></div>
                            <div><span class="cmd">→</span> <span class="flag">region:</span> <span class="val">"eu-west-1"</span></div>
                            <div><span class="cmd">→</span> <span class="flag">type:</span> <span class="val">"CLY2"</span></div>
                            <div><span class="cmd">→</span> <span class="flag">image:</span> <span class="val">"ubuntu-24.04"</span></div>
                            <div>&nbsp;</div>
                            <div><span class="success">✓ Instance created</span> — id: <span class="val">i-8f3a2c</span></div>
                            <div><span class="success">✓ IPv4:</span> <span class="val">185.xxx.xxx.xxx</span></div>
                            <div><span class="success">✓ Billing:</span> <span class="val">€0.0086/hr</span></div>
                            <div><span class="success">✓ Status:</span> <span class="val">running</span><span class="terminal-cursor"></span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ CLOUD USE CASES (Swiper) ═══════════════ -->
    <section class="cloud-usecases reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag">Use Cases</div>
                <h2>Built for Modern Workloads</h2>
                <p>From SaaS platforms to machine learning — YottaSrc Cloud adapts to every application pattern.</p>
            </div>

            <div class="swiper cloud-usecases-swiper" id="cloudUsecasesSwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><div class="cloud-usecase-card">
                        <div class="cloud-usecase-icon"><i class="fas fa-layer-group"></i></div>
                        <h4>SaaS Platforms</h4>
                        <p>Multi-tenant applications with elastic compute. Scale instances per customer, isolate workloads per region.</p>
                        <ul class="cloud-usecase-list">
                            <li>Auto-scale with API</li>
                            <li>Per-tenant isolation</li>
                            <li>Multi-region deploy</li>
                        </ul>
                    </div></div>
                    <div class="swiper-slide"><div class="cloud-usecase-card">
                        <div class="cloud-usecase-icon icon-green"><i class="fas fa-cubes"></i></div>
                        <h4>Microservices</h4>
                        <p>Deploy containerized services across lightweight instances. Ideal for Kubernetes, Docker Swarm, or custom orchestration.</p>
                        <ul class="cloud-usecase-list">
                            <li>Lightweight instances</li>
                            <li>Container-ready</li>
                            <li>Service mesh support</li>
                        </ul>
                    </div></div>
                    <div class="swiper-slide"><div class="cloud-usecase-card">
                        <div class="cloud-usecase-icon icon-purple"><i class="fas fa-brain"></i></div>
                        <h4>AI &amp; ML Workloads</h4>
                        <p>High-memory instances for training and inference. Spin up GPU-ready cloud nodes and pay only for compute time.</p>
                        <ul class="cloud-usecase-list">
                            <li>High RAM instances</li>
                            <li>Burst compute</li>
                            <li>Hourly billing saves costs</li>
                        </ul>
                    </div></div>
                    <div class="swiper-slide"><div class="cloud-usecase-card">
                        <div class="cloud-usecase-icon icon-amber"><i class="fas fa-code-branch"></i></div>
                        <h4>CI/CD Pipelines</h4>
                        <p>Ephemeral build runners that spin up on commit and terminate after tests pass. API-driven for full automation.</p>
                        <ul class="cloud-usecase-list">
                            <li>API provisioning</li>
                            <li>Ephemeral instances</li>
                            <li>Zero idle costs</li>
                        </ul>
                    </div></div>
                    <div class="swiper-slide"><div class="cloud-usecase-card">
                        <div class="cloud-usecase-icon"><i class="fas fa-laptop-code"></i></div>
                        <h4>Dev Environments</h4>
                        <p>Isolated cloud workspaces for every developer. Consistent environments — create and destroy in seconds.</p>
                        <ul class="cloud-usecase-list">
                            <li>Per-developer instances</li>
                            <li>Snapshot &amp; restore</li>
                            <li>Cost-effective dev/test</li>
                        </ul>
                    </div></div>
                    <div class="swiper-slide"><div class="cloud-usecase-card">
                        <div class="cloud-usecase-icon icon-green"><i class="fas fa-database"></i></div>
                        <h4>Databases &amp; Caching</h4>
                        <p>NVMe-backed instances for high-IOPS databases. Deploy Redis, PostgreSQL, or MongoDB with predictable performance.</p>
                        <ul class="cloud-usecase-list">
                            <li>NVMe storage</li>
                            <li>Low-latency I/O</li>
                            <li>Persistent volumes</li>
                        </ul>
                    </div></div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ CLOUD FAQ ═══════════════ -->
    <section class="faq-section reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag">FAQ</div>
                <h2>Cloud Questions</h2>
                <p>Common questions about YottaSrc Cloud.</p>
            </div>
            <div class="faq-layout faq-layout--full">
                <div class="faq-panels">
                    <div class="faq-panel active" id="faq-cloud">
                        <div class="faq-item"><button class="faq-question"><span>What is YottaSrc Cloud?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>YottaSrc Cloud is a scalable cloud platform that unifies 10+ datacenter providers into a single console and API. Deploy instances across 50+ global regions with hourly billing and no commitments.</p></div></div>
                        <div class="faq-item"><button class="faq-question"><span>Do I need ID verification?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>No. Sign up with email and add a minimum €5 deposit to start deploying instances immediately.</p></div></div>
                        <div class="faq-item"><button class="faq-question"><span>How does hourly billing work?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>You are charged per hour while your instance is running. Stop or destroy instances anytime — billing stops immediately. Running a full month caps at the monthly price shown.</p></div></div>
                        <div class="faq-item"><button class="faq-question"><span>Can I scale resources after deployment?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>Yes. You can resize CPU, RAM, and storage via the console or API. Changes take effect without data loss.</p></div></div>
                        <div class="faq-item"><button class="faq-question"><span>Is there an API for automation?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>Yes. Our RESTful API lets you create, manage, snapshot, and destroy instances programmatically. Visit <a href="https://docs.yottasrc.com/">docs.yottasrc.com</a> for full documentation.</p></div></div>
                        <div class="faq-item"><button class="faq-question"><span>What payment methods do you accept?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>We accept credit cards, PayPal, cryptocurrency (Bitcoin, USDT, Tron), Perfect Money, Payeer, Alipay, Coinbase, and more.</p></div></div>
                    </div>
                </div>
            </div>
            <div class="faq-actions">
                <a href="<?php echo e(SITE_URL); ?>/cloud-faq/" class="btn-secondary">View All Cloud FAQ <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </section>

    <!-- ═══════════════ PROMOTIONS CTA ═══════════════ -->
    <section class="promo-cta reveal">
        <div class="container">
            <div class="promo-cta-inner">
                <div class="promo-cta-glow"></div>
                <div class="promo-cta-icon"><i class="fas fa-cloud"></i></div>
                <h2>Launch Your First Cloud Instance</h2>
                <p>Start with €5 — deploy in seconds, scale on demand, pay by the hour.</p>
                <a href="<?php echo e(CONSOLE_URL); ?>/cloud/" class="btn-primary">Get Started <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
