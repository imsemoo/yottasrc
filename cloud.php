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
                    <a href="<?php echo e(SITE_URL); ?>/"><?php echo e(__('breadcrumb_home')); ?></a>
                    <i class="fas fa-chevron-right"></i>
                    <span><?php echo e(__('cloud_breadcrumb')); ?></span>
                </div>
                <h1><?php echo __('cloud_title'); ?></h1>
                <p class="cloud-hero-desc"><?php echo e(__('cloud_desc')); ?></p>
                <div class="page-hero-ctas">
                    <a href="<?php echo e(CONSOLE_URL); ?>/cloud/" class="btn-primary"><?php echo e(__('cloud_cta_launch')); ?> <i class="fas fa-arrow-right"></i></a>
                    <a href="#cloud-instances" class="btn-secondary"><?php echo e(__('cloud_cta_pricing')); ?> <i class="fas fa-arrow-down"></i></a>
                </div>
            </div>

            <!-- Floating metric capsules -->
            <div class="cloud-hero-metrics">
                <div class="cloud-capsule">
                    <div class="capsule-icon"><i class="fas fa-globe-europe"></i></div>
                    <div class="capsule-info">
                        <span class="capsule-val">50+</span>
                        <span class="capsule-label"><?php echo e(__('cloud_metric_regions')); ?></span>
                    </div>
                </div>
                <div class="cloud-capsule accent">
                    <div class="capsule-icon"><i class="fas fa-bolt"></i></div>
                    <div class="capsule-info">
                        <span class="capsule-val">€0.003</span>
                        <span class="capsule-label"><?php echo e(__('cloud_metric_price')); ?></span>
                    </div>
                </div>
                <div class="cloud-capsule">
                    <div class="capsule-icon"><i class="fas fa-shield-alt"></i></div>
                    <div class="capsule-info">
                        <span class="capsule-val">99.9%</span>
                        <span class="capsule-label"><?php echo e(__('cloud_metric_uptime')); ?></span>
                    </div>
                </div>
                <div class="cloud-capsule">
                    <div class="capsule-icon"><i class="fas fa-code"></i></div>
                    <div class="capsule-info">
                        <span class="capsule-val">REST</span>
                        <span class="capsule-label"><?php echo e(__('cloud_metric_api')); ?></span>
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
                <div class="section-tag"><?php echo e(__('cloud_instances_tag')); ?></div>
                <h2><?php echo e(__('cloud_instances_title')); ?></h2>
                <p><?php echo e(__('cloud_instances_desc')); ?></p>
            </div>

            <div class="cloud-table-wrap">
                <table class="cloud-table">
                    <thead>
                        <tr>
                            <th><?php echo e(__('cloud_table_instance')); ?></th>
                            <th><?php echo e(__('cloud_table_vcpu')); ?></th>
                            <th><?php echo e(__('cloud_table_ram')); ?></th>
                            <th><?php echo e(__('cloud_table_nvme')); ?></th>
                            <th><?php echo e(__('cloud_table_network')); ?></th>
                            <th><?php echo e(__('cloud_table_price')); ?></th>
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
                            <td><a href="<?php echo e(CONSOLE_URL); ?>/cloud/" class="cloud-buy" target="_blank" rel="noopener noreferrer"><?php echo e(__('cloud_deploy')); ?></a></td>
                        </tr>
                        <tr>
                            <td><strong>CLR1 x86</strong></td>
                            <td>1 Core</td>
                            <td>2 GB</td>
                            <td>20 GB</td>
                            <td>2 Gbit/s · 15TB</td>
                            <td><span class="cloud-price-hr">€0.0091/h</span><span class="cloud-price-mo">€4.55/mo</span></td>
                            <td><a href="<?php echo e(CONSOLE_URL); ?>/cloud/" class="cloud-buy" target="_blank" rel="noopener noreferrer"><?php echo e(__('cloud_deploy')); ?></a></td>
                        </tr>
                        <tr>
                            <td><strong>CLH1 Arm64</strong></td>
                            <td>2 Cores</td>
                            <td>4 GB</td>
                            <td>40 GB</td>
                            <td>10 Gbit/s · 30TB</td>
                            <td><span class="cloud-price-hr">€0.0097/h</span><span class="cloud-price-mo">€4.99/mo</span></td>
                            <td><a href="<?php echo e(CONSOLE_URL); ?>/cloud/" class="cloud-buy" target="_blank" rel="noopener noreferrer"><?php echo e(__('cloud_deploy')); ?></a></td>
                        </tr>
                        <tr>
                            <td><strong>CLH5 x86</strong></td>
                            <td>2 Cores</td>
                            <td>4 GB</td>
                            <td>40 GB</td>
                            <td>10 Gbit/s · 30TB</td>
                            <td><span class="cloud-price-hr">€0.0097/h</span><span class="cloud-price-mo">€4.99/mo</span></td>
                            <td><a href="<?php echo e(CONSOLE_URL); ?>/cloud/" class="cloud-buy" target="_blank" rel="noopener noreferrer"><?php echo e(__('cloud_deploy')); ?></a></td>
                        </tr>
                        <tr class="cloud-row-highlight">
                            <td><strong>CLY2 x86</strong> <span class="cloud-popular"><?php echo e(__('cloud_table_popular')); ?></span></td>
                            <td>2 Cores</td>
                            <td>4 GB</td>
                            <td>50 GB</td>
                            <td>10 Gbit/s · 25TB</td>
                            <td><span class="cloud-price-hr">€0.0086/h</span><span class="cloud-price-mo">€4.99/mo</span></td>
                            <td><a href="<?php echo e(CONSOLE_URL); ?>/cloud/" class="cloud-buy" target="_blank" rel="noopener noreferrer"><?php echo e(__('cloud_deploy')); ?></a></td>
                        </tr>
                        <tr>
                            <td><strong>CLK1 x86</strong></td>
                            <td>1 Core</td>
                            <td>1 GB</td>
                            <td>20 GB</td>
                            <td>10 Gbit/s · 15TB</td>
                            <td><span class="cloud-price-hr">€0.01/h</span><span class="cloud-price-mo">€5.20/mo</span></td>
                            <td><a href="<?php echo e(CONSOLE_URL); ?>/cloud/" class="cloud-buy" target="_blank" rel="noopener noreferrer"><?php echo e(__('cloud_deploy')); ?></a></td>
                        </tr>
                        <tr>
                            <td><strong>CLR2 x86</strong></td>
                            <td>1 Core</td>
                            <td>2 GB</td>
                            <td>20 GB</td>
                            <td>2 Gbit/s · 15TB</td>
                            <td><span class="cloud-price-hr">€0.0109/h</span><span class="cloud-price-mo">€5.85/mo</span></td>
                            <td><a href="<?php echo e(CONSOLE_URL); ?>/cloud/" class="cloud-buy" target="_blank" rel="noopener noreferrer"><?php echo e(__('cloud_deploy')); ?></a></td>
                        </tr>
                        <tr>
                            <td><strong>CLH6 x86</strong></td>
                            <td>2 Cores</td>
                            <td>2 GB</td>
                            <td>40 GB</td>
                            <td>10 Gbit/s · 30TB</td>
                            <td><span class="cloud-price-hr">€0.0111/h</span><span class="cloud-price-mo">€5.99/mo</span></td>
                            <td><a href="<?php echo e(CONSOLE_URL); ?>/cloud/" class="cloud-buy" target="_blank" rel="noopener noreferrer"><?php echo e(__('cloud_deploy')); ?></a></td>
                        </tr>
                        <tr>
                            <td><strong>CLR3 x86</strong></td>
                            <td>1 Core</td>
                            <td>3 GB</td>
                            <td>25 GB</td>
                            <td>2 Gbit/s · 15TB</td>
                            <td><span class="cloud-price-hr">€0.0118/h</span><span class="cloud-price-mo">€6.50/mo</span></td>
                            <td><a href="<?php echo e(CONSOLE_URL); ?>/cloud/" class="cloud-buy" target="_blank" rel="noopener noreferrer"><?php echo e(__('cloud_deploy')); ?></a></td>
                        </tr>
                        <tr>
                            <td><strong>CLR4 x86</strong></td>
                            <td>2 Cores</td>
                            <td>4 GB</td>
                            <td>40 GB</td>
                            <td>2 Gbit/s · 15TB</td>
                            <td><span class="cloud-price-hr">€0.0127/h</span><span class="cloud-price-mo">€7.15/mo</span></td>
                            <td><a href="<?php echo e(CONSOLE_URL); ?>/cloud/" class="cloud-buy" target="_blank" rel="noopener noreferrer"><?php echo e(__('cloud_deploy')); ?></a></td>
                        </tr>
                        <tr>
                            <td><strong>CLK2 x86</strong></td>
                            <td>1 Core</td>
                            <td>2 GB</td>
                            <td>20 GB</td>
                            <td>10 Gbit/s · 15TB</td>
                            <td><span class="cloud-price-hr">€0.0136/h</span><span class="cloud-price-mo">€7.80/mo</span></td>
                            <td><a href="<?php echo e(CONSOLE_URL); ?>/cloud/" class="cloud-buy" target="_blank" rel="noopener noreferrer"><?php echo e(__('cloud_deploy')); ?></a></td>
                        </tr>
                        <tr>
                            <td><strong>CLR5 x86</strong></td>
                            <td>2 Cores</td>
                            <td>4 GB</td>
                            <td>40 GB</td>
                            <td>2 Gbit/s · 15TB</td>
                            <td><span class="cloud-price-hr">€0.0145/h</span><span class="cloud-price-mo">€8.45/mo</span></td>
                            <td><a href="<?php echo e(CONSOLE_URL); ?>/cloud/" class="cloud-buy" target="_blank" rel="noopener noreferrer"><?php echo e(__('cloud_deploy')); ?></a></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="cloud-note">
                <p><i class="fas fa-info-circle"></i> <?php echo __('cloud_table_note', ['url' => e(CONSOLE_URL) . '/cloud/']); ?></p>
            </div>
        </div>
    </section>

    <!-- ═══════════════ GLOBAL CLOUD INFRASTRUCTURE ═══════════════ -->
    <section class="locations-section reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag"><?php echo e(__('cloud_locations_tag')); ?></div>
                <h2><?php echo e(__('cloud_locations_title')); ?></h2>
                <p><?php echo e(__('cloud_locations_desc')); ?></p>
            </div>

            <div class="locations-tabs">
                <button class="loc-tab active" data-loc-target="cloud-europe"><i class="fas fa-globe-europe"></i> <?php echo e(__('cloud_loc_europe')); ?></button>
                <button class="loc-tab" data-loc-target="cloud-asia"><i class="fas fa-globe-asia"></i> <?php echo e(__('cloud_loc_asia')); ?></button>
                <button class="loc-tab" data-loc-target="cloud-africa"><i class="fas fa-globe-africa"></i> <?php echo e(__('cloud_loc_africa')); ?></button>
                <button class="loc-tab" data-loc-target="cloud-south-america"><i class="fas fa-globe-americas"></i> <?php echo e(__('cloud_loc_south_america')); ?></button>
                <button class="loc-tab" data-loc-target="cloud-north-america"><i class="fas fa-globe-americas"></i> <?php echo e(__('cloud_loc_north_america')); ?></button>
                <button class="loc-tab" data-loc-target="cloud-oceania"><i class="fas fa-globe"></i> <?php echo e(__('cloud_loc_oceania')); ?></button>
            </div>

            <div class="locations-panels">
                <div class="loc-panel active" id="cloud-europe">
                    <div class="loc-card-grid">
                        <a href="<?php echo e(SITE_URL); ?>/cloud/cheap-cloud-Netherland-location/" class="location-card"><span class="fi fi-nl"></span> Amsterdam, Netherlands <span class="loc-ms">8 ms</span></a>
                        <a href="<?php echo e(SITE_URL); ?>/cloud/cheap-cloud-Germany-location/" class="location-card location-card--active"><span class="fi fi-de"></span> Frankfurt, Germany <span class="loc-ms">5 ms</span></a>
                        <a href="<?php echo e(SITE_URL); ?>/cloud/cheap-cloud-France-location/" class="location-card"><span class="fi fi-fr"></span> Paris, France <span class="loc-ms">12 ms</span></a>
                        <a href="<?php echo e(SITE_URL); ?>/cloud/cheap-cloud-UK-location/" class="location-card"><span class="fi fi-gb"></span> London, UK <span class="loc-ms">15 ms</span></a>
                        <a href="<?php echo e(SITE_URL); ?>/cloud/cheap-cloud-Switzerland-location/" class="location-card"><span class="fi fi-ch"></span> Zurich, Switzerland <span class="loc-ms">8 ms</span></a>
                        <a href="<?php echo e(SITE_URL); ?>/cloud/cheap-cloud-Belgium-location/" class="location-card"><span class="fi fi-be"></span> Brussels, Belgium <span class="loc-ms">10 ms</span></a>
                        <a href="<?php echo e(SITE_URL); ?>/cloud/cheap-cloud-Luxembourg-location/" class="location-card"><span class="fi fi-lu"></span> Luxembourg <span class="loc-ms">10 ms</span></a>
                        <a href="<?php echo e(SITE_URL); ?>/cloud/cheap-cloud-Austria-location/" class="location-card"><span class="fi fi-at"></span> Vienna, Austria <span class="loc-ms">12 ms</span></a>
                        <a href="<?php echo e(SITE_URL); ?>/cloud/cheap-cloud-Italy-location/" class="location-card"><span class="fi fi-it"></span> Milan, Italy <span class="loc-ms">18 ms</span></a>
                        <a href="<?php echo e(SITE_URL); ?>/cloud/cheap-cloud-Denmark-location/" class="location-card"><span class="fi fi-dk"></span> Copenhagen, Denmark <span class="loc-ms">22 ms</span></a>
                        <a href="<?php echo e(SITE_URL); ?>/cloud/cheap-cloud-Ireland-location/" class="location-card"><span class="fi fi-ie"></span> Dublin, Ireland <span class="loc-ms">22 ms</span></a>
                        <a href="<?php echo e(SITE_URL); ?>/cloud/cheap-cloud-Poland-location/" class="location-card"><span class="fi fi-pl"></span> Warsaw, Poland <span class="loc-ms">28 ms</span></a>
                        <a href="<?php echo e(SITE_URL); ?>/cloud/cheap-cloud-Spain-location/" class="location-card"><span class="fi fi-es"></span> Madrid, Spain <span class="loc-ms">28 ms</span></a>
                        <a href="<?php echo e(SITE_URL); ?>/cloud/cheap-cloud-Norway-location/" class="location-card"><span class="fi fi-no"></span> Oslo, Norway <span class="loc-ms">30 ms</span></a>
                        <a href="<?php echo e(SITE_URL); ?>/cloud/cheap-cloud-Serbia-location/" class="location-card"><span class="fi fi-rs"></span> Belgrade, Serbia <span class="loc-ms">32 ms</span></a>
                        <a href="<?php echo e(SITE_URL); ?>/cloud/cheap-cloud-Sweden-location/" class="location-card"><span class="fi fi-se"></span> Stockholm, Sweden <span class="loc-ms">32 ms</span></a>
                        <a href="<?php echo e(SITE_URL); ?>/cloud/cheap-cloud-Finland-location/" class="location-card"><span class="fi fi-fi"></span> Helsinki, Finland <span class="loc-ms">35 ms</span></a>
                        <a href="<?php echo e(SITE_URL); ?>/cloud/cheap-cloud-Portugal-location/" class="location-card"><span class="fi fi-pt"></span> Lisbon, Portugal <span class="loc-ms">35 ms</span></a>
                        <a href="<?php echo e(SITE_URL); ?>/cloud/cheap-cloud-Estonia-location/" class="location-card"><span class="fi fi-ee"></span> Tallinn, Estonia <span class="loc-ms">36 ms</span></a>
                        <a href="<?php echo e(SITE_URL); ?>/cloud/cheap-cloud-Lithuania-location/" class="location-card"><span class="fi fi-lt"></span> Vilnius, Lithuania <span class="loc-ms">38 ms</span></a>
                        <a href="<?php echo e(SITE_URL); ?>/cloud/cheap-cloud-Romania-location/" class="location-card"><span class="fi fi-ro"></span> Bucharest, Romania <span class="loc-ms">38 ms</span></a>
                        <a href="<?php echo e(SITE_URL); ?>/cloud/cheap-cloud-Bulgaria-location/" class="location-card"><span class="fi fi-bg"></span> Sofia, Bulgaria <span class="loc-ms">40 ms</span></a>
                        <a href="<?php echo e(SITE_URL); ?>/cloud/cheap-cloud-Greece-location/" class="location-card"><span class="fi fi-gr"></span> Athens, Greece <span class="loc-ms">42 ms</span></a>
                        <a href="<?php echo e(SITE_URL); ?>/cloud/cheap-cloud-Ukraine-location/" class="location-card"><span class="fi fi-ua"></span> Kyiv, Ukraine <span class="loc-ms">42 ms</span></a>
                        <a href="<?php echo e(SITE_URL); ?>/cloud/cheap-cloud-Turkey-location/" class="location-card"><span class="fi fi-tr"></span> Istanbul, Turkey <span class="loc-ms">45 ms</span></a>
                        <a href="<?php echo e(SITE_URL); ?>/cloud/cheap-cloud-Russia-location/" class="location-card"><span class="fi fi-ru"></span> Moscow, Russia <span class="loc-ms">48 ms</span></a>
                        <a href="<?php echo e(SITE_URL); ?>/cloud/cheap-cloud-Cyprus-location/" class="location-card"><span class="fi fi-cy"></span> Nicosia, Cyprus <span class="loc-ms">55 ms</span></a>
                    </div>
                </div>
                <div class="loc-panel" id="cloud-asia">
                    <div class="loc-card-grid">
                        <a href="<?php echo e(SITE_URL); ?>/cloud/cheap-cloud-Israel-location/" class="location-card"><span class="fi fi-il"></span> Tel Aviv, Israel <span class="loc-ms">58 ms</span></a>
                        <a href="<?php echo e(SITE_URL); ?>/cloud/cheap-cloud-UAE (Dubai)-location/" class="location-card"><span class="fi fi-ae"></span> Dubai, UAE <span class="loc-ms">95 ms</span></a>
                        <a href="<?php echo e(SITE_URL); ?>/cloud/cheap-cloud-India-location/" class="location-card"><span class="fi fi-in"></span> Mumbai, India <span class="loc-ms">120 ms</span></a>
                        <a href="<?php echo e(SITE_URL); ?>/cloud/cheap-cloud-Singapore-location/" class="location-card"><span class="fi fi-sg"></span> Singapore <span class="loc-ms">175 ms</span></a>
                        <a href="<?php echo e(SITE_URL); ?>/cloud/cheap-cloud-Malaysia-location/" class="location-card"><span class="fi fi-my"></span> Kuala Lumpur, Malaysia <span class="loc-ms">180 ms</span></a>
                        <a href="<?php echo e(SITE_URL); ?>/cloud/cheap-cloud-Hong Kong-location/" class="location-card"><span class="fi fi-hk"></span> Hong Kong <span class="loc-ms">195 ms</span></a>
                        <a href="<?php echo e(SITE_URL); ?>/cloud/cheap-cloud-Japan-location/" class="location-card"><span class="fi fi-jp"></span> Tokyo, Japan <span class="loc-ms">230 ms</span></a>
                    </div>
                </div>
                <div class="loc-panel" id="cloud-africa">
                    <div class="loc-card-grid">
                        <a href="<?php echo e(SITE_URL); ?>/cloud/cheap-cloud-Morocco-location/" class="location-card"><span class="fi fi-ma"></span> Casablanca, Morocco <span class="loc-ms">45 ms</span></a>
                        <a href="<?php echo e(SITE_URL); ?>/cloud/cheap-cloud-Nigeria-location/" class="location-card"><span class="fi fi-ng"></span> Lagos, Nigeria <span class="loc-ms">110 ms</span></a>
                        <a href="<?php echo e(SITE_URL); ?>/cloud/cheap-cloud-South Africa-location/" class="location-card"><span class="fi fi-za"></span> Johannesburg, South Africa <span class="loc-ms">160 ms</span></a>
                    </div>
                </div>
                <div class="loc-panel" id="cloud-south-america">
                    <div class="loc-card-grid">
                        <a href="<?php echo e(SITE_URL); ?>/cloud/cheap-cloud-Costa Rica-location/" class="location-card"><span class="fi fi-cr"></span> San Jos&eacute;, Costa Rica <span class="loc-ms">170 ms</span></a>
                        <a href="<?php echo e(SITE_URL); ?>/cloud/cheap-cloud-Colombia-location/" class="location-card"><span class="fi fi-co"></span> Bogot&aacute;, Colombia <span class="loc-ms">175 ms</span></a>
                        <a href="<?php echo e(SITE_URL); ?>/cloud/cheap-cloud-Ecuador-location/" class="location-card"><span class="fi fi-ec"></span> Quito, Ecuador <span class="loc-ms">180 ms</span></a>
                        <a href="<?php echo e(SITE_URL); ?>/cloud/cheap-cloud-Peru-location/" class="location-card"><span class="fi fi-pe"></span> Lima, Peru <span class="loc-ms">185 ms</span></a>
                        <a href="<?php echo e(SITE_URL); ?>/cloud/cheap-cloud-Brazil-location/" class="location-card"><span class="fi fi-br"></span> S&atilde;o Paulo, Brazil <span class="loc-ms">190 ms</span></a>
                        <a href="<?php echo e(SITE_URL); ?>/cloud/cheap-cloud-Bolivia-location/" class="location-card"><span class="fi fi-bo"></span> Santa Cruz, Bolivia <span class="loc-ms">195 ms</span></a>
                        <a href="<?php echo e(SITE_URL); ?>/cloud/cheap-cloud-Chile-location/" class="location-card"><span class="fi fi-cl"></span> Santiago, Chile <span class="loc-ms">210 ms</span></a>
                        <a href="<?php echo e(SITE_URL); ?>/cloud/cheap-cloud-Argentina-location/" class="location-card"><span class="fi fi-ar"></span> Buenos Aires, Argentina <span class="loc-ms">215 ms</span></a>
                    </div>
                </div>
                <div class="loc-panel" id="cloud-north-america">
                    <div class="loc-card-grid">
                        <a href="<?php echo e(SITE_URL); ?>/cloud/cheap-cloud-USA-location/" class="location-card"><span class="fi fi-us"></span> Ashburn, USA <span class="loc-ms">85 ms</span></a>
                        <a href="<?php echo e(SITE_URL); ?>/cloud/cheap-cloud-Canada-location/" class="location-card"><span class="fi fi-ca"></span> Toronto, Canada <span class="loc-ms">95 ms</span></a>
                        <a href="<?php echo e(SITE_URL); ?>/cloud/cheap-cloud-Mexico-location/" class="location-card"><span class="fi fi-mx"></span> Mexico City, Mexico <span class="loc-ms">130 ms</span></a>
                    </div>
                </div>
                <div class="loc-panel" id="cloud-oceania">
                    <div class="loc-card-grid">
                        <a href="<?php echo e(SITE_URL); ?>/cloud/cheap-cloud-Australia-location/" class="location-card"><span class="fi fi-au"></span> Sydney, Australia <span class="loc-ms">275 ms</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ PARTNERS ═══════════════ -->
    <section class="partners">
        <div class="container">
            <span class="partners-label"><?php echo e(__('cloud_partners_label')); ?></span>
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
                <div class="section-tag"><?php echo e(__('cloud_panel_tag')); ?></div>
                <h2><?php echo e(__('cloud_panel_title')); ?></h2>
                <p><?php echo e(__('cloud_panel_desc')); ?></p>
            </div>

            <div class="panel-mockup">
                <!-- Sidebar -->
                <div class="panel-sidebar">
                    <div class="panel-sidebar-logo">
                        <span class="panel-logo-icon"><i class="fas fa-cube"></i></span>
                        <span class="panel-logo-text">YottaSrc</span>
                    </div>
                    <nav class="panel-nav">
                        <a class="panel-nav-item active"><i class="fas fa-th-large"></i> <?php echo e(__('cloud_panel_nav_dashboard')); ?></a>
                        <a class="panel-nav-item"><i class="fas fa-server"></i> <?php echo e(__('cloud_panel_nav_instances')); ?></a>
                        <a class="panel-nav-item"><i class="fas fa-network-wired"></i> <?php echo e(__('cloud_panel_nav_networking')); ?></a>
                        <a class="panel-nav-item"><i class="fas fa-database"></i> <?php echo e(__('cloud_panel_nav_volumes')); ?></a>
                        <a class="panel-nav-item"><i class="fas fa-shield-alt"></i> <?php echo e(__('cloud_panel_nav_firewalls')); ?></a>
                        <a class="panel-nav-item"><i class="fas fa-key"></i> <?php echo e(__('cloud_panel_nav_sshkeys')); ?></a>
                        <a class="panel-nav-item"><i class="fas fa-chart-line"></i> <?php echo e(__('cloud_panel_nav_monitoring')); ?></a>
                        <a class="panel-nav-item"><i class="fas fa-file-invoice-dollar"></i> <?php echo e(__('cloud_panel_nav_billing')); ?></a>
                    </nav>
                </div>

                <!-- Main content -->
                <div class="panel-main">
                    <!-- Top bar -->
                    <div class="panel-topbar">
                        <div class="panel-search">
                            <i class="fas fa-search"></i>
                            <span><?php echo e(__('cloud_panel_search')); ?></span>
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
                            <span class="panel-stat-label"><?php echo e(__('cloud_panel_stat_instances')); ?></span>
                            <span class="panel-stat-badge up"><i class="fas fa-arrow-up"></i> 3</span>
                        </div>
                        <div class="panel-stat">
                            <span class="panel-stat-val">48</span>
                            <span class="panel-stat-label"><?php echo e(__('cloud_panel_stat_vcpu')); ?></span>
                        </div>
                        <div class="panel-stat">
                            <span class="panel-stat-val">128 GB</span>
                            <span class="panel-stat-label"><?php echo e(__('cloud_panel_stat_ram')); ?></span>
                        </div>
                        <div class="panel-stat">
                            <span class="panel-stat-val">€43.20</span>
                            <span class="panel-stat-label"><?php echo e(__('cloud_panel_stat_mtd')); ?></span>
                        </div>
                    </div>

                    <!-- Instance list -->
                    <div class="panel-instances">
                        <div class="panel-instances-head">
                            <span class="panel-instances-title"><?php echo e(__('cloud_panel_active')); ?></span>
                            <span class="panel-deploy-btn"><i class="fas fa-plus"></i> <?php echo e(__('cloud_panel_deploy_new')); ?></span>
                        </div>
                        <div class="panel-instance-row">
                            <span class="panel-inst-status running"></span>
                            <span class="panel-inst-name">web-prod-01</span>
                            <span class="panel-inst-spec">4 vCPU · 16 GB · Frankfurt</span>
                            <span class="panel-inst-ip">185.212.xxx.xxx</span>
                            <span class="panel-inst-badge"><?php echo e(__('cloud_panel_running')); ?></span>
                        </div>
                        <div class="panel-instance-row">
                            <span class="panel-inst-status running"></span>
                            <span class="panel-inst-name">api-gateway</span>
                            <span class="panel-inst-spec">2 vCPU · 8 GB · Amsterdam</span>
                            <span class="panel-inst-ip">91.184.xxx.xxx</span>
                            <span class="panel-inst-badge"><?php echo e(__('cloud_panel_running')); ?></span>
                        </div>
                        <div class="panel-instance-row">
                            <span class="panel-inst-status stopped"></span>
                            <span class="panel-inst-name">staging-db</span>
                            <span class="panel-inst-spec">8 vCPU · 32 GB · Ashburn</span>
                            <span class="panel-inst-ip">104.238.xxx.xxx</span>
                            <span class="panel-inst-badge off"><?php echo e(__('cloud_panel_stopped')); ?></span>
                        </div>
                    </div>

                    <!-- Chart placeholder -->
                    <div class="panel-chart">
                        <div class="panel-chart-head">
                            <span class="panel-chart-title"><?php echo e(__('cloud_panel_chart_title')); ?></span>
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
                <div class="section-tag"><?php echo e(__('cloud_scale_tag')); ?></div>
                <h2><?php echo e(__('cloud_scale_title')); ?></h2>
                <p><?php echo e(__('cloud_scale_desc')); ?></p>
            </div>
            <div class="cloud-scale-grid">
                <div class="cloud-scale-card">
                    <div class="cloud-scale-icon"><i class="fas fa-microchip"></i></div>
                    <div class="cloud-scale-meter">
                        <div class="cloud-scale-bar" style="--bar-fill: 75%; --bar-color: var(--brand-primary);"></div>
                    </div>
                    <h4><?php echo e(__('cloud_scale_vcpu')); ?></h4>
                    <p><?php echo e(__('cloud_scale_vcpu_desc')); ?></p>
                    <span class="cloud-scale-range"><?php echo e(__('cloud_scale_vcpu_range')); ?></span>
                </div>
                <div class="cloud-scale-card">
                    <div class="cloud-scale-icon icon-green"><i class="fas fa-memory"></i></div>
                    <div class="cloud-scale-meter">
                        <div class="cloud-scale-bar" style="--bar-fill: 60%; --bar-color: var(--brand-secondary);"></div>
                    </div>
                    <h4><?php echo e(__('cloud_scale_ram')); ?></h4>
                    <p><?php echo e(__('cloud_scale_ram_desc')); ?></p>
                    <span class="cloud-scale-range"><?php echo e(__('cloud_scale_ram_range')); ?></span>
                </div>
                <div class="cloud-scale-card">
                    <div class="cloud-scale-icon icon-purple"><i class="fas fa-hdd"></i></div>
                    <div class="cloud-scale-meter">
                        <div class="cloud-scale-bar" style="--bar-fill: 50%; --bar-color: var(--brand-accent);"></div>
                    </div>
                    <h4><?php echo e(__('cloud_scale_nvme')); ?></h4>
                    <p><?php echo e(__('cloud_scale_nvme_desc')); ?></p>
                    <span class="cloud-scale-range"><?php echo e(__('cloud_scale_nvme_range')); ?></span>
                </div>
                <div class="cloud-scale-card">
                    <div class="cloud-scale-icon icon-amber"><i class="fas fa-network-wired"></i></div>
                    <div class="cloud-scale-meter">
                        <div class="cloud-scale-bar" style="--bar-fill: 85%; --bar-color: var(--brand-warning);"></div>
                    </div>
                    <h4><?php echo e(__('cloud_scale_network')); ?></h4>
                    <p><?php echo e(__('cloud_scale_network_desc')); ?></p>
                    <span class="cloud-scale-range"><?php echo e(__('cloud_scale_network_range')); ?></span>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ FLEXIBLE BILLING ═══════════════ -->
    <section class="cloud-billing reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag"><?php echo e(__('cloud_billing_tag')); ?></div>
                <h2><?php echo e(__('cloud_billing_title')); ?></h2>
                <p><?php echo e(__('cloud_billing_desc')); ?></p>
            </div>
            <div class="cloud-billing-compare">
                <div class="cloud-billing-card cloud-billing-old">
                    <div class="cloud-billing-label"><?php echo e(__('cloud_billing_old_label')); ?></div>
                    <ul>
                        <li><i class="fas fa-times"></i> <?php echo e(__('cloud_billing_old_1')); ?></li>
                        <li><i class="fas fa-times"></i> <?php echo e(__('cloud_billing_old_2')); ?></li>
                        <li><i class="fas fa-times"></i> <?php echo e(__('cloud_billing_old_3')); ?></li>
                        <li><i class="fas fa-times"></i> <?php echo e(__('cloud_billing_old_4')); ?></li>
                        <li><i class="fas fa-times"></i> <?php echo e(__('cloud_billing_old_5')); ?></li>
                    </ul>
                </div>
                <div class="cloud-billing-vs">vs</div>
                <div class="cloud-billing-card cloud-billing-new">
                    <div class="cloud-billing-label"><?php echo e(__('cloud_billing_new_label')); ?></div>
                    <ul>
                        <li><i class="fas fa-check"></i> <?php echo e(__('cloud_billing_new_1')); ?></li>
                        <li><i class="fas fa-check"></i> <?php echo e(__('cloud_billing_new_2')); ?></li>
                        <li><i class="fas fa-check"></i> <?php echo e(__('cloud_billing_new_3')); ?></li>
                        <li><i class="fas fa-check"></i> <?php echo e(__('cloud_billing_new_4')); ?></li>
                        <li><i class="fas fa-check"></i> <?php echo e(__('cloud_billing_new_5')); ?></li>
                    </ul>
                    <div class="cloud-billing-highlight">
                        <span class="cloud-billing-from"><?php echo e(__('cloud_billing_from')); ?></span>
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
                <div class="section-tag"><?php echo e(__('cloud_deploy_tag')); ?></div>
                <h2><?php echo e(__('cloud_deploy_title')); ?></h2>
                <p><?php echo e(__('cloud_deploy_desc')); ?></p>
            </div>
            <div class="cloud-deploy-flow">
                <div class="cloud-deploy-step">
                    <div class="cloud-deploy-num">1</div>
                    <div class="cloud-deploy-icon"><i class="fas fa-user-plus"></i></div>
                    <h4><?php echo __('cloud_deploy_step1_title'); ?></h4>
                    <p><?php echo e(__('cloud_deploy_step1_desc')); ?></p>
                </div>
                <div class="cloud-deploy-connector"><i class="fas fa-chevron-right"></i></div>
                <div class="cloud-deploy-step">
                    <div class="cloud-deploy-num">2</div>
                    <div class="cloud-deploy-icon icon-green"><i class="fas fa-sliders-h"></i></div>
                    <h4><?php echo e(__('cloud_deploy_step2_title')); ?></h4>
                    <p><?php echo e(__('cloud_deploy_step2_desc')); ?></p>
                </div>
                <div class="cloud-deploy-connector"><i class="fas fa-chevron-right"></i></div>
                <div class="cloud-deploy-step">
                    <div class="cloud-deploy-num">3</div>
                    <div class="cloud-deploy-icon icon-purple"><i class="fas fa-rocket"></i></div>
                    <h4><?php echo __('cloud_deploy_step3_title'); ?></h4>
                    <p><?php echo e(__('cloud_deploy_step3_desc')); ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ API & AUTOMATION ═══════════════ -->
    <section class="api-section reveal">
        <div class="container">
            <div class="api-layout">
                <div class="api-text">
                    <div class="section-tag"><?php echo e(__('cloud_api_tag')); ?></div>
                    <h2><?php echo e(__('cloud_api_title')); ?></h2>
                    <p><?php echo e(__('cloud_api_desc')); ?></p>
                    <div class="api-highlights">
                        <div class="api-highlight"><i class="fas fa-check-circle"></i> <?php echo __('cloud_api_highlight_1'); ?></div>
                        <div class="api-highlight"><i class="fas fa-check-circle"></i> <?php echo __('cloud_api_highlight_2'); ?></div>
                        <div class="api-highlight"><i class="fas fa-check-circle"></i> <?php echo __('cloud_api_highlight_3'); ?></div>
                        <div class="api-highlight"><i class="fas fa-check-circle"></i> <?php echo __('cloud_api_highlight_4'); ?></div>
                    </div>
                    <a href="https://docs.yottasrc.com/" class="btn-primary" target="_blank" rel="noopener noreferrer"><?php echo e(__('cloud_api_docs_btn')); ?> <i class="fas fa-arrow-right"></i></a>
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
                <div class="section-tag"><?php echo e(__('cloud_usecases_tag')); ?></div>
                <h2><?php echo e(__('cloud_usecases_title')); ?></h2>
                <p><?php echo e(__('cloud_usecases_desc')); ?></p>
            </div>

            <div class="swiper cloud-usecases-swiper" id="cloudUsecasesSwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><div class="cloud-usecase-card">
                        <div class="cloud-usecase-icon"><i class="fas fa-layer-group"></i></div>
                        <h4><?php echo e(__('cloud_uc_saas')); ?></h4>
                        <p><?php echo e(__('cloud_uc_saas_desc')); ?></p>
                        <ul class="cloud-usecase-list">
                            <li><?php echo e(__('cloud_uc_saas_1')); ?></li>
                            <li><?php echo e(__('cloud_uc_saas_2')); ?></li>
                            <li><?php echo e(__('cloud_uc_saas_3')); ?></li>
                        </ul>
                    </div></div>
                    <div class="swiper-slide"><div class="cloud-usecase-card">
                        <div class="cloud-usecase-icon icon-green"><i class="fas fa-cubes"></i></div>
                        <h4><?php echo e(__('cloud_uc_micro')); ?></h4>
                        <p><?php echo e(__('cloud_uc_micro_desc')); ?></p>
                        <ul class="cloud-usecase-list">
                            <li><?php echo e(__('cloud_uc_micro_1')); ?></li>
                            <li><?php echo e(__('cloud_uc_micro_2')); ?></li>
                            <li><?php echo e(__('cloud_uc_micro_3')); ?></li>
                        </ul>
                    </div></div>
                    <div class="swiper-slide"><div class="cloud-usecase-card">
                        <div class="cloud-usecase-icon icon-purple"><i class="fas fa-brain"></i></div>
                        <h4><?php echo __('cloud_uc_ai'); ?></h4>
                        <p><?php echo e(__('cloud_uc_ai_desc')); ?></p>
                        <ul class="cloud-usecase-list">
                            <li><?php echo e(__('cloud_uc_ai_1')); ?></li>
                            <li><?php echo e(__('cloud_uc_ai_2')); ?></li>
                            <li><?php echo e(__('cloud_uc_ai_3')); ?></li>
                        </ul>
                    </div></div>
                    <div class="swiper-slide"><div class="cloud-usecase-card">
                        <div class="cloud-usecase-icon icon-amber"><i class="fas fa-code-branch"></i></div>
                        <h4><?php echo e(__('cloud_uc_cicd')); ?></h4>
                        <p><?php echo e(__('cloud_uc_cicd_desc')); ?></p>
                        <ul class="cloud-usecase-list">
                            <li><?php echo e(__('cloud_uc_cicd_1')); ?></li>
                            <li><?php echo e(__('cloud_uc_cicd_2')); ?></li>
                            <li><?php echo e(__('cloud_uc_cicd_3')); ?></li>
                        </ul>
                    </div></div>
                    <div class="swiper-slide"><div class="cloud-usecase-card">
                        <div class="cloud-usecase-icon"><i class="fas fa-laptop-code"></i></div>
                        <h4><?php echo e(__('cloud_uc_dev')); ?></h4>
                        <p><?php echo e(__('cloud_uc_dev_desc')); ?></p>
                        <ul class="cloud-usecase-list">
                            <li><?php echo e(__('cloud_uc_dev_1')); ?></li>
                            <li><?php echo __('cloud_uc_dev_2'); ?></li>
                            <li><?php echo e(__('cloud_uc_dev_3')); ?></li>
                        </ul>
                    </div></div>
                    <div class="swiper-slide"><div class="cloud-usecase-card">
                        <div class="cloud-usecase-icon icon-green"><i class="fas fa-database"></i></div>
                        <h4><?php echo __('cloud_uc_db'); ?></h4>
                        <p><?php echo e(__('cloud_uc_db_desc')); ?></p>
                        <ul class="cloud-usecase-list">
                            <li><?php echo e(__('cloud_uc_db_1')); ?></li>
                            <li><?php echo e(__('cloud_uc_db_2')); ?></li>
                            <li><?php echo e(__('cloud_uc_db_3')); ?></li>
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
                <div class="section-tag"><?php echo e(__('cloud_faq_tag')); ?></div>
                <h2><?php echo e(__('cloud_faq_title')); ?></h2>
                <p><?php echo e(__('cloud_faq_desc')); ?></p>
            </div>
            <div class="faq-layout faq-layout--full">
                <div class="faq-panels">
                    <div class="faq-panel active" id="faq-cloud">
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('cloud_faq_q1')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('cloud_faq_a1')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('cloud_faq_q2')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('cloud_faq_a2')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('cloud_faq_q3')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('cloud_faq_a3')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('cloud_faq_q4')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('cloud_faq_a4')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('cloud_faq_q5')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo __('cloud_faq_a5'); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('cloud_faq_q6')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('cloud_faq_a6')); ?></p></div></div>
                    </div>
                </div>
            </div>
            <div class="faq-actions">
                <a href="<?php echo e(SITE_URL); ?>/cloud-faq/" class="btn-secondary"><?php echo e(__('cloud_faq_all_btn')); ?> <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </section>

    <!-- ═══════════════ COMPETITORS COMPARISON ═══════════════ -->
    <?php include __DIR__ . '/includes/section-competitors.php'; ?>

    <!-- ═══════════════ PROMOTIONS CTA ═══════════════ -->
    <section class="promo-cta reveal">
        <div class="container">
            <div class="promo-cta-inner">
                <div class="promo-cta-glow"></div>
                <div class="promo-cta-icon"><i class="fas fa-cloud"></i></div>
                <h2><?php echo e(__('cloud_cta_title')); ?></h2>
                <p><?php echo e(__('cloud_cta_desc')); ?></p>
                <a href="<?php echo e(CONSOLE_URL); ?>/cloud/" class="btn-primary"><?php echo e(__('cloud_cta_btn')); ?> <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
