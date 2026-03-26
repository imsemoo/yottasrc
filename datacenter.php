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
                    <a href="<?php echo e(SITE_URL); ?>/"><?php echo e(__('breadcrumb_home')); ?></a>
                    <i class="fas fa-chevron-right"></i>
                    <span><?php echo e(__('datacenter_breadcrumb')); ?></span>
                </div>
                <h1><?php echo __('datacenter_title'); ?></h1>
                <p class="page-hero-desc">
                    <?php echo e(__('datacenter_desc')); ?>
                </p>
                <div class="dc-hero-stats">
                    <div class="dc-hero-stat">
                        <div class="dc-hero-stat-icon"><i class="fas fa-map-marker-alt"></i></div>
                        <div class="dc-hero-stat-body">
                            <div class="dc-hero-stat-value"><span class="hero-stat-num" data-count="50">0</span><span class="dc-hero-stat-suffix">+</span></div>
                            <div class="dc-hero-stat-label"><?php echo e(__('dc_hero_stat_locations')); ?></div>
                        </div>
                    </div>
                    <div class="dc-hero-stat">
                        <div class="dc-hero-stat-icon"><i class="fas fa-globe-americas"></i></div>
                        <div class="dc-hero-stat-body">
                            <div class="dc-hero-stat-value"><span class="hero-stat-num" data-count="6">0</span></div>
                            <div class="dc-hero-stat-label"><?php echo e(__('dc_hero_stat_continents')); ?></div>
                        </div>
                    </div>
                    <div class="dc-hero-stat">
                        <div class="dc-hero-stat-icon"><i class="fas fa-shield-alt"></i></div>
                        <div class="dc-hero-stat-body">
                            <div class="dc-hero-stat-value"><span class="hero-stat-num" data-count="99">0</span><span class="dc-hero-stat-suffix">.9%</span></div>
                            <div class="dc-hero-stat-label"><?php echo e(__('dc_hero_stat_uptime')); ?></div>
                        </div>
                    </div>
                    <div class="dc-hero-stat">
                        <div class="dc-hero-stat-icon"><i class="fas fa-network-wired"></i></div>
                        <div class="dc-hero-stat-body">
                            <div class="dc-hero-stat-value"><span class="hero-stat-num" data-count="10">0</span><span class="dc-hero-stat-suffix"> Gbit/s</span></div>
                            <div class="dc-hero-stat-label"><?php echo e(__('dc_hero_stat_network')); ?></div>
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
                <div class="section-tag"><?php echo e(__('dc_infra_tag')); ?></div>
                <h2><?php echo e(__('dc_infra_heading')); ?></h2>
                <p><?php echo e(__('dc_infra_desc')); ?></p>
            </div>

            <div class="bento-grid">
                <div class="bento-card bento-sm">
                    <div class="bento-card-icon"><i class="fas fa-building"></i></div>
                    <h4><?php echo e(__('dc_infra_tier_title')); ?></h4>
                    <p><?php echo e(__('dc_infra_tier_desc')); ?></p>
                </div>
                <div class="bento-card bento-sm">
                    <div class="bento-card-icon icon-green"><i class="fas fa-bolt"></i></div>
                    <h3><?php echo e(__('dc_infra_power_title')); ?></h3>
                    <p><?php echo e(__('dc_infra_power_desc')); ?></p>
                </div>
                <div class="bento-card bento-sm">
                    <div class="bento-card-icon icon-blue"><i class="fas fa-snowflake"></i></div>
                    <h3><?php echo e(__('dc_infra_cooling_title')); ?></h3>
                    <p><?php echo e(__('dc_infra_cooling_desc')); ?></p>
                </div>
                <div class="bento-card bento-sm">
                    <div class="bento-card-icon icon-purple"><i class="fas fa-shield-alt"></i></div>
                    <h3><?php echo e(__('dc_infra_security_title')); ?></h3>
                    <p><?php echo e(__('dc_infra_security_desc')); ?></p>
                </div>
                <div class="bento-card bento-sm">
                    <div class="bento-card-icon icon-amber"><i class="fas fa-fire-extinguisher"></i></div>
                    <h3><?php echo e(__('dc_infra_fire_title')); ?></h3>
                    <p><?php echo e(__('dc_infra_fire_desc')); ?></p>
                </div>
                <div class="bento-card bento-sm">
                    <div class="bento-card-icon icon-rose"><i class="fas fa-plug"></i></div>
                    <h3><?php echo e(__('dc_infra_connect_title')); ?></h3>
                    <p><?php echo e(__('dc_infra_connect_desc')); ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ DATACENTER LOCATIONS MAP ═══════════════ -->
<?php
$dc_heading = __('dc_map_heading');
$dc_desc = __('dc_map_desc');
include __DIR__ . '/includes/section-dc-showcase.php';
?>

    <!-- ═══════════════ LOCATION DETAILS ═══════════════ -->
    <section class="dc-locations reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag"><?php echo e(__('dc_loc_tag')); ?></div>
                <h2><?php echo e(__('dc_loc_heading')); ?></h2>
                <p><?php echo e(__('dc_loc_desc')); ?></p>
            </div>

            <div class="dc-locations-inner">
            <!-- ── Europe ── -->
            <div class="dc-region">
                <div class="dc-region-label"><i class="fas fa-globe-europe"></i> <?php echo e(__('dc_region_europe')); ?></div>

                <div class="dc-loc-card open" data-dc-expand>
                    <button class="dc-loc-header">
                        <span class="dc-loc-flag"><span class="fi fi-ro"></span></span>
                        <span class="dc-loc-name"><?php echo e(__('dc_loc_bucharest')); ?> <span class="dc-hq-pill"><?php echo e(__('dc_loc_hq')); ?></span></span>
                        <span class="dc-loc-operator"><?php echo e(__('dc_loc_bucharest_op')); ?></span>
                        <span class="dc-loc-tier">Tier III</span>
                        <i class="fas fa-chevron-down dc-loc-arrow"></i>
                    </button>
                    <div class="dc-loc-body">
                        <div class="dc-loc-details">
                            <div class="dc-loc-detail"><i class="fas fa-building"></i><strong><?php echo e(__('dc_loc_label_operator')); ?></strong> <?php echo e(__('dc_loc_bucharest_op')); ?></div>
                            <div class="dc-loc-detail"><i class="fas fa-bolt"></i><strong><?php echo e(__('dc_loc_label_power')); ?></strong> <?php echo e(__('dc_loc_bucharest_power')); ?></div>
                            <div class="dc-loc-detail"><i class="fas fa-snowflake"></i><strong><?php echo e(__('dc_loc_label_cooling')); ?></strong> <?php echo e(__('dc_loc_bucharest_cooling')); ?></div>
                            <div class="dc-loc-detail"><i class="fas fa-network-wired"></i><strong><?php echo e(__('dc_loc_label_network')); ?></strong> <?php echo e(__('dc_loc_bucharest_network')); ?></div>
                            <div class="dc-loc-detail"><i class="fas fa-shield-alt"></i><strong><?php echo e(__('dc_loc_label_security')); ?></strong> <?php echo e(__('dc_loc_bucharest_security')); ?></div>
                            <div class="dc-loc-detail"><i class="fas fa-certificate"></i><strong><?php echo e(__('dc_loc_label_certs')); ?></strong> <?php echo e(__('dc_loc_bucharest_certs')); ?></div>
                            <div class="dc-loc-detail"><i class="fas fa-tachometer-alt"></i><strong><?php echo e(__('dc_loc_label_ddos')); ?></strong> <?php echo e(__('dc_loc_bucharest_ddos')); ?></div>
                        </div>
                    </div>
                </div>

                <div class="dc-loc-card" data-dc-expand>
                    <button class="dc-loc-header">
                        <span class="dc-loc-flag"><span class="fi fi-de"></span></span>
                        <span class="dc-loc-name"><?php echo e(__('dc_loc_frankfurt')); ?></span>
                        <span class="dc-loc-operator">Hetzner</span>
                        <span class="dc-loc-tier">Tier III+</span>
                        <i class="fas fa-chevron-down dc-loc-arrow"></i>
                    </button>
                    <div class="dc-loc-body">
                        <div class="dc-loc-details">
                            <div class="dc-loc-detail"><i class="fas fa-building"></i><strong><?php echo e(__('dc_loc_label_operator')); ?></strong> <?php echo e(__('dc_loc_frankfurt_op')); ?></div>
                            <div class="dc-loc-detail"><i class="fas fa-bolt"></i><strong><?php echo e(__('dc_loc_label_power')); ?></strong> <?php echo e(__('dc_loc_frankfurt_power')); ?></div>
                            <div class="dc-loc-detail"><i class="fas fa-snowflake"></i><strong><?php echo e(__('dc_loc_label_cooling')); ?></strong> <?php echo e(__('dc_loc_frankfurt_cooling')); ?></div>
                            <div class="dc-loc-detail"><i class="fas fa-network-wired"></i><strong><?php echo e(__('dc_loc_label_network')); ?></strong> <?php echo e(__('dc_loc_frankfurt_network')); ?></div>
                            <div class="dc-loc-detail"><i class="fas fa-shield-alt"></i><strong><?php echo e(__('dc_loc_label_security')); ?></strong> <?php echo e(__('dc_loc_frankfurt_security')); ?></div>
                            <div class="dc-loc-detail"><i class="fas fa-certificate"></i><strong><?php echo e(__('dc_loc_label_certs')); ?></strong> <?php echo e(__('dc_loc_frankfurt_certs')); ?></div>
                            <div class="dc-loc-detail"><i class="fas fa-tachometer-alt"></i><strong><?php echo e(__('dc_loc_label_ddos')); ?></strong> <?php echo e(__('dc_loc_frankfurt_ddos')); ?></div>
                        </div>
                    </div>
                </div>

                <div class="dc-loc-card" data-dc-expand>
                    <button class="dc-loc-header">
                        <span class="dc-loc-flag"><span class="fi fi-fi"></span></span>
                        <span class="dc-loc-name"><?php echo e(__('dc_loc_helsinki')); ?></span>
                        <span class="dc-loc-operator">Hetzner</span>
                        <span class="dc-loc-tier">Tier III</span>
                        <i class="fas fa-chevron-down dc-loc-arrow"></i>
                    </button>
                    <div class="dc-loc-body">
                        <div class="dc-loc-details">
                            <div class="dc-loc-detail"><i class="fas fa-building"></i><strong><?php echo e(__('dc_loc_label_operator')); ?></strong> <?php echo e(__('dc_loc_helsinki_op')); ?></div>
                            <div class="dc-loc-detail"><i class="fas fa-bolt"></i><strong><?php echo e(__('dc_loc_label_power')); ?></strong> <?php echo e(__('dc_loc_helsinki_power')); ?></div>
                            <div class="dc-loc-detail"><i class="fas fa-snowflake"></i><strong><?php echo e(__('dc_loc_label_cooling')); ?></strong> <?php echo e(__('dc_loc_helsinki_cooling')); ?></div>
                            <div class="dc-loc-detail"><i class="fas fa-network-wired"></i><strong><?php echo e(__('dc_loc_label_network')); ?></strong> <?php echo e(__('dc_loc_helsinki_network')); ?></div>
                            <div class="dc-loc-detail"><i class="fas fa-shield-alt"></i><strong><?php echo e(__('dc_loc_label_security')); ?></strong> <?php echo e(__('dc_loc_helsinki_security')); ?></div>
                            <div class="dc-loc-detail"><i class="fas fa-certificate"></i><strong><?php echo e(__('dc_loc_label_certs')); ?></strong> <?php echo e(__('dc_loc_helsinki_certs')); ?></div>
                            <div class="dc-loc-detail"><i class="fas fa-tachometer-alt"></i><strong><?php echo e(__('dc_loc_label_ddos')); ?></strong> <?php echo e(__('dc_loc_helsinki_ddos')); ?></div>
                        </div>
                    </div>
                </div>

                <div class="dc-loc-card" data-dc-expand>
                    <button class="dc-loc-header">
                        <span class="dc-loc-flag"><span class="fi fi-fr"></span></span>
                        <span class="dc-loc-name"><?php echo e(__('dc_loc_paris')); ?></span>
                        <span class="dc-loc-operator">OVHcloud</span>
                        <span class="dc-loc-tier">Tier III+</span>
                        <i class="fas fa-chevron-down dc-loc-arrow"></i>
                    </button>
                    <div class="dc-loc-body">
                        <div class="dc-loc-details">
                            <div class="dc-loc-detail"><i class="fas fa-building"></i><strong><?php echo e(__('dc_loc_label_operator')); ?></strong> <?php echo e(__('dc_loc_paris_op')); ?></div>
                            <div class="dc-loc-detail"><i class="fas fa-bolt"></i><strong><?php echo e(__('dc_loc_label_power')); ?></strong> <?php echo e(__('dc_loc_paris_power')); ?></div>
                            <div class="dc-loc-detail"><i class="fas fa-snowflake"></i><strong><?php echo e(__('dc_loc_label_cooling')); ?></strong> <?php echo e(__('dc_loc_paris_cooling')); ?></div>
                            <div class="dc-loc-detail"><i class="fas fa-network-wired"></i><strong><?php echo e(__('dc_loc_label_network')); ?></strong> <?php echo e(__('dc_loc_paris_network')); ?></div>
                            <div class="dc-loc-detail"><i class="fas fa-shield-alt"></i><strong><?php echo e(__('dc_loc_label_security')); ?></strong> <?php echo e(__('dc_loc_paris_security')); ?></div>
                            <div class="dc-loc-detail"><i class="fas fa-certificate"></i><strong><?php echo e(__('dc_loc_label_certs')); ?></strong> <?php echo e(__('dc_loc_paris_certs')); ?></div>
                            <div class="dc-loc-detail"><i class="fas fa-tachometer-alt"></i><strong><?php echo e(__('dc_loc_label_ddos')); ?></strong> <?php echo e(__('dc_loc_paris_ddos')); ?></div>
                        </div>
                    </div>
                </div>

                <div class="dc-loc-card" data-dc-expand>
                    <button class="dc-loc-header">
                        <span class="dc-loc-flag"><span class="fi fi-gb"></span></span>
                        <span class="dc-loc-name"><?php echo e(__('dc_loc_london')); ?></span>
                        <span class="dc-loc-operator">Equinix</span>
                        <span class="dc-loc-tier">Tier III+</span>
                        <i class="fas fa-chevron-down dc-loc-arrow"></i>
                    </button>
                    <div class="dc-loc-body">
                        <div class="dc-loc-details">
                            <div class="dc-loc-detail"><i class="fas fa-building"></i><strong><?php echo e(__('dc_loc_label_operator')); ?></strong> <?php echo e(__('dc_loc_london_op')); ?></div>
                            <div class="dc-loc-detail"><i class="fas fa-bolt"></i><strong><?php echo e(__('dc_loc_label_power')); ?></strong> <?php echo e(__('dc_loc_london_power')); ?></div>
                            <div class="dc-loc-detail"><i class="fas fa-snowflake"></i><strong><?php echo e(__('dc_loc_label_cooling')); ?></strong> <?php echo e(__('dc_loc_london_cooling')); ?></div>
                            <div class="dc-loc-detail"><i class="fas fa-network-wired"></i><strong><?php echo e(__('dc_loc_label_network')); ?></strong> <?php echo e(__('dc_loc_london_network')); ?></div>
                            <div class="dc-loc-detail"><i class="fas fa-shield-alt"></i><strong><?php echo e(__('dc_loc_label_security')); ?></strong> <?php echo e(__('dc_loc_london_security')); ?></div>
                            <div class="dc-loc-detail"><i class="fas fa-certificate"></i><strong><?php echo e(__('dc_loc_label_certs')); ?></strong> <?php echo e(__('dc_loc_london_certs')); ?></div>
                            <div class="dc-loc-detail"><i class="fas fa-tachometer-alt"></i><strong><?php echo e(__('dc_loc_label_ddos')); ?></strong> <?php echo e(__('dc_loc_london_ddos')); ?></div>
                        </div>
                    </div>
                </div>

                <div class="dc-loc-card" data-dc-expand>
                    <button class="dc-loc-header">
                        <span class="dc-loc-flag"><span class="fi fi-nl"></span></span>
                        <span class="dc-loc-name"><?php echo e(__('dc_loc_amsterdam')); ?></span>
                        <span class="dc-loc-operator">Iron Mountain</span>
                        <span class="dc-loc-tier">Tier III</span>
                        <i class="fas fa-chevron-down dc-loc-arrow"></i>
                    </button>
                    <div class="dc-loc-body">
                        <div class="dc-loc-details">
                            <div class="dc-loc-detail"><i class="fas fa-building"></i><strong><?php echo e(__('dc_loc_label_operator')); ?></strong> <?php echo e(__('dc_loc_amsterdam_op')); ?></div>
                            <div class="dc-loc-detail"><i class="fas fa-bolt"></i><strong><?php echo e(__('dc_loc_label_power')); ?></strong> <?php echo e(__('dc_loc_amsterdam_power')); ?></div>
                            <div class="dc-loc-detail"><i class="fas fa-snowflake"></i><strong><?php echo e(__('dc_loc_label_cooling')); ?></strong> <?php echo e(__('dc_loc_amsterdam_cooling')); ?></div>
                            <div class="dc-loc-detail"><i class="fas fa-network-wired"></i><strong><?php echo e(__('dc_loc_label_network')); ?></strong> <?php echo e(__('dc_loc_amsterdam_network')); ?></div>
                            <div class="dc-loc-detail"><i class="fas fa-shield-alt"></i><strong><?php echo e(__('dc_loc_label_security')); ?></strong> <?php echo e(__('dc_loc_amsterdam_security')); ?></div>
                            <div class="dc-loc-detail"><i class="fas fa-certificate"></i><strong><?php echo e(__('dc_loc_label_certs')); ?></strong> <?php echo e(__('dc_loc_amsterdam_certs')); ?></div>
                            <div class="dc-loc-detail"><i class="fas fa-tachometer-alt"></i><strong><?php echo e(__('dc_loc_label_ddos')); ?></strong> <?php echo e(__('dc_loc_amsterdam_ddos')); ?></div>
                        </div>
                    </div>
                </div>

                <div class="dc-loc-card" data-dc-expand>
                    <button class="dc-loc-header">
                        <span class="dc-loc-flag"><span class="fi fi-tr"></span></span>
                        <span class="dc-loc-name"><?php echo e(__('dc_loc_istanbul')); ?></span>
                        <span class="dc-loc-operator">Turkcell</span>
                        <span class="dc-loc-tier">Tier III</span>
                        <i class="fas fa-chevron-down dc-loc-arrow"></i>
                    </button>
                    <div class="dc-loc-body">
                        <div class="dc-loc-details">
                            <div class="dc-loc-detail"><i class="fas fa-building"></i><strong><?php echo e(__('dc_loc_label_operator')); ?></strong> <?php echo e(__('dc_loc_istanbul_op')); ?></div>
                            <div class="dc-loc-detail"><i class="fas fa-bolt"></i><strong><?php echo e(__('dc_loc_label_power')); ?></strong> <?php echo e(__('dc_loc_istanbul_power')); ?></div>
                            <div class="dc-loc-detail"><i class="fas fa-snowflake"></i><strong><?php echo e(__('dc_loc_label_cooling')); ?></strong> <?php echo e(__('dc_loc_istanbul_cooling')); ?></div>
                            <div class="dc-loc-detail"><i class="fas fa-network-wired"></i><strong><?php echo e(__('dc_loc_label_network')); ?></strong> <?php echo e(__('dc_loc_istanbul_network')); ?></div>
                            <div class="dc-loc-detail"><i class="fas fa-shield-alt"></i><strong><?php echo e(__('dc_loc_label_security')); ?></strong> <?php echo e(__('dc_loc_istanbul_security')); ?></div>
                            <div class="dc-loc-detail"><i class="fas fa-certificate"></i><strong><?php echo e(__('dc_loc_label_certs')); ?></strong> <?php echo e(__('dc_loc_istanbul_certs')); ?></div>
                            <div class="dc-loc-detail"><i class="fas fa-tachometer-alt"></i><strong><?php echo e(__('dc_loc_label_ddos')); ?></strong> <?php echo e(__('dc_loc_istanbul_ddos')); ?></div>
                        </div>
                    </div>
                </div>

                <div class="dc-loc-card" data-dc-expand>
                    <button class="dc-loc-header">
                        <span class="dc-loc-flag"><span class="fi fi-pl"></span></span>
                        <span class="dc-loc-name"><?php echo e(__('dc_loc_warsaw')); ?></span>
                        <span class="dc-loc-operator">Beyond.pl</span>
                        <span class="dc-loc-tier">Tier III+</span>
                        <i class="fas fa-chevron-down dc-loc-arrow"></i>
                    </button>
                    <div class="dc-loc-body">
                        <div class="dc-loc-details">
                            <div class="dc-loc-detail"><i class="fas fa-building"></i><strong><?php echo e(__('dc_loc_label_operator')); ?></strong> <?php echo e(__('dc_loc_warsaw_op')); ?></div>
                            <div class="dc-loc-detail"><i class="fas fa-bolt"></i><strong><?php echo e(__('dc_loc_label_power')); ?></strong> <?php echo e(__('dc_loc_warsaw_power')); ?></div>
                            <div class="dc-loc-detail"><i class="fas fa-snowflake"></i><strong><?php echo e(__('dc_loc_label_cooling')); ?></strong> <?php echo e(__('dc_loc_warsaw_cooling')); ?></div>
                            <div class="dc-loc-detail"><i class="fas fa-network-wired"></i><strong><?php echo e(__('dc_loc_label_network')); ?></strong> <?php echo e(__('dc_loc_warsaw_network')); ?></div>
                            <div class="dc-loc-detail"><i class="fas fa-shield-alt"></i><strong><?php echo e(__('dc_loc_label_security')); ?></strong> <?php echo e(__('dc_loc_warsaw_security')); ?></div>
                            <div class="dc-loc-detail"><i class="fas fa-certificate"></i><strong><?php echo e(__('dc_loc_label_certs')); ?></strong> <?php echo e(__('dc_loc_warsaw_certs')); ?></div>
                            <div class="dc-loc-detail"><i class="fas fa-tachometer-alt"></i><strong><?php echo e(__('dc_loc_label_ddos')); ?></strong> <?php echo e(__('dc_loc_warsaw_ddos')); ?></div>
                        </div>
                    </div>
                </div>

                <div class="dc-loc-card" data-dc-expand>
                    <button class="dc-loc-header">
                        <span class="dc-loc-flag"><span class="fi fi-at"></span></span>
                        <span class="dc-loc-name"><?php echo e(__('dc_loc_vienna')); ?></span>
                        <span class="dc-loc-operator">Interxion</span>
                        <span class="dc-loc-tier">Tier III</span>
                        <i class="fas fa-chevron-down dc-loc-arrow"></i>
                    </button>
                    <div class="dc-loc-body">
                        <div class="dc-loc-details">
                            <div class="dc-loc-detail"><i class="fas fa-building"></i><strong><?php echo e(__('dc_loc_label_operator')); ?></strong> <?php echo e(__('dc_loc_vienna_op')); ?></div>
                            <div class="dc-loc-detail"><i class="fas fa-bolt"></i><strong><?php echo e(__('dc_loc_label_power')); ?></strong> <?php echo e(__('dc_loc_vienna_power')); ?></div>
                            <div class="dc-loc-detail"><i class="fas fa-snowflake"></i><strong><?php echo e(__('dc_loc_label_cooling')); ?></strong> <?php echo e(__('dc_loc_vienna_cooling')); ?></div>
                            <div class="dc-loc-detail"><i class="fas fa-network-wired"></i><strong><?php echo e(__('dc_loc_label_network')); ?></strong> <?php echo e(__('dc_loc_vienna_network')); ?></div>
                            <div class="dc-loc-detail"><i class="fas fa-shield-alt"></i><strong><?php echo e(__('dc_loc_label_security')); ?></strong> <?php echo e(__('dc_loc_vienna_security')); ?></div>
                            <div class="dc-loc-detail"><i class="fas fa-certificate"></i><strong><?php echo e(__('dc_loc_label_certs')); ?></strong> <?php echo e(__('dc_loc_vienna_certs')); ?></div>
                            <div class="dc-loc-detail"><i class="fas fa-tachometer-alt"></i><strong><?php echo e(__('dc_loc_label_ddos')); ?></strong> <?php echo e(__('dc_loc_vienna_ddos')); ?></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ── Americas ── -->
            <div class="dc-region">
                <div class="dc-region-label"><i class="fas fa-globe-americas"></i> <?php echo e(__('dc_region_americas')); ?></div>

                <div class="dc-loc-card" data-dc-expand>
                    <button class="dc-loc-header">
                        <span class="dc-loc-flag"><span class="fi fi-us"></span></span>
                        <span class="dc-loc-name"><?php echo e(__('dc_loc_usa')); ?></span>
                        <span class="dc-loc-operator">Equinix / CoreSite</span>
                        <span class="dc-loc-tier">Tier III+</span>
                        <i class="fas fa-chevron-down dc-loc-arrow"></i>
                    </button>
                    <div class="dc-loc-body">
                        <div class="dc-loc-details">
                            <div class="dc-loc-detail"><i class="fas fa-building"></i><strong><?php echo e(__('dc_loc_label_operator')); ?></strong> <?php echo e(__('dc_loc_usa_op')); ?></div>
                            <div class="dc-loc-detail"><i class="fas fa-bolt"></i><strong><?php echo e(__('dc_loc_label_power')); ?></strong> <?php echo e(__('dc_loc_usa_power')); ?></div>
                            <div class="dc-loc-detail"><i class="fas fa-snowflake"></i><strong><?php echo e(__('dc_loc_label_cooling')); ?></strong> <?php echo e(__('dc_loc_usa_cooling')); ?></div>
                            <div class="dc-loc-detail"><i class="fas fa-network-wired"></i><strong><?php echo e(__('dc_loc_label_network')); ?></strong> <?php echo e(__('dc_loc_usa_network')); ?></div>
                            <div class="dc-loc-detail"><i class="fas fa-shield-alt"></i><strong><?php echo e(__('dc_loc_label_security')); ?></strong> <?php echo e(__('dc_loc_usa_security')); ?></div>
                            <div class="dc-loc-detail"><i class="fas fa-certificate"></i><strong><?php echo e(__('dc_loc_label_certs')); ?></strong> <?php echo e(__('dc_loc_usa_certs')); ?></div>
                            <div class="dc-loc-detail"><i class="fas fa-tachometer-alt"></i><strong><?php echo e(__('dc_loc_label_ddos')); ?></strong> <?php echo e(__('dc_loc_usa_ddos')); ?></div>
                        </div>
                    </div>
                </div>

                <div class="dc-loc-card" data-dc-expand>
                    <button class="dc-loc-header">
                        <span class="dc-loc-flag"><span class="fi fi-ca"></span></span>
                        <span class="dc-loc-name"><?php echo e(__('dc_loc_toronto')); ?></span>
                        <span class="dc-loc-operator">OVHcloud</span>
                        <span class="dc-loc-tier">Tier III</span>
                        <i class="fas fa-chevron-down dc-loc-arrow"></i>
                    </button>
                    <div class="dc-loc-body">
                        <div class="dc-loc-details">
                            <div class="dc-loc-detail"><i class="fas fa-building"></i><strong><?php echo e(__('dc_loc_label_operator')); ?></strong> <?php echo e(__('dc_loc_toronto_op')); ?></div>
                            <div class="dc-loc-detail"><i class="fas fa-bolt"></i><strong><?php echo e(__('dc_loc_label_power')); ?></strong> <?php echo e(__('dc_loc_toronto_power')); ?></div>
                            <div class="dc-loc-detail"><i class="fas fa-snowflake"></i><strong><?php echo e(__('dc_loc_label_cooling')); ?></strong> <?php echo e(__('dc_loc_toronto_cooling')); ?></div>
                            <div class="dc-loc-detail"><i class="fas fa-network-wired"></i><strong><?php echo e(__('dc_loc_label_network')); ?></strong> <?php echo e(__('dc_loc_toronto_network')); ?></div>
                            <div class="dc-loc-detail"><i class="fas fa-shield-alt"></i><strong><?php echo e(__('dc_loc_label_security')); ?></strong> <?php echo e(__('dc_loc_toronto_security')); ?></div>
                            <div class="dc-loc-detail"><i class="fas fa-certificate"></i><strong><?php echo e(__('dc_loc_label_certs')); ?></strong> <?php echo e(__('dc_loc_toronto_certs')); ?></div>
                            <div class="dc-loc-detail"><i class="fas fa-tachometer-alt"></i><strong><?php echo e(__('dc_loc_label_ddos')); ?></strong> <?php echo e(__('dc_loc_toronto_ddos')); ?></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ── Asia ── -->
            <div class="dc-region">
                <div class="dc-region-label"><i class="fas fa-globe-asia"></i> <?php echo e(__('dc_region_asia')); ?></div>

                <div class="dc-loc-card" data-dc-expand>
                    <button class="dc-loc-header">
                        <span class="dc-loc-flag"><span class="fi fi-in"></span></span>
                        <span class="dc-loc-name"><?php echo e(__('dc_loc_mumbai')); ?></span>
                        <span class="dc-loc-operator">Yotta Infrastructure</span>
                        <span class="dc-loc-tier">Tier IV</span>
                        <i class="fas fa-chevron-down dc-loc-arrow"></i>
                    </button>
                    <div class="dc-loc-body">
                        <div class="dc-loc-details">
                            <div class="dc-loc-detail"><i class="fas fa-building"></i><strong><?php echo e(__('dc_loc_label_operator')); ?></strong> <?php echo e(__('dc_loc_mumbai_op')); ?></div>
                            <div class="dc-loc-detail"><i class="fas fa-bolt"></i><strong><?php echo e(__('dc_loc_label_power')); ?></strong> <?php echo e(__('dc_loc_mumbai_power')); ?></div>
                            <div class="dc-loc-detail"><i class="fas fa-snowflake"></i><strong><?php echo e(__('dc_loc_label_cooling')); ?></strong> <?php echo e(__('dc_loc_mumbai_cooling')); ?></div>
                            <div class="dc-loc-detail"><i class="fas fa-network-wired"></i><strong><?php echo e(__('dc_loc_label_network')); ?></strong> <?php echo e(__('dc_loc_mumbai_network')); ?></div>
                            <div class="dc-loc-detail"><i class="fas fa-shield-alt"></i><strong><?php echo e(__('dc_loc_label_security')); ?></strong> <?php echo e(__('dc_loc_mumbai_security')); ?></div>
                            <div class="dc-loc-detail"><i class="fas fa-certificate"></i><strong><?php echo e(__('dc_loc_label_certs')); ?></strong> <?php echo e(__('dc_loc_mumbai_certs')); ?></div>
                            <div class="dc-loc-detail"><i class="fas fa-tachometer-alt"></i><strong><?php echo e(__('dc_loc_label_ddos')); ?></strong> <?php echo e(__('dc_loc_mumbai_ddos')); ?></div>
                        </div>
                    </div>
                </div>

                <div class="dc-loc-card" data-dc-expand>
                    <button class="dc-loc-header">
                        <span class="dc-loc-flag"><span class="fi fi-sg"></span></span>
                        <span class="dc-loc-name"><?php echo e(__('dc_loc_singapore')); ?></span>
                        <span class="dc-loc-operator">Equinix</span>
                        <span class="dc-loc-tier">Tier III+</span>
                        <i class="fas fa-chevron-down dc-loc-arrow"></i>
                    </button>
                    <div class="dc-loc-body">
                        <div class="dc-loc-details">
                            <div class="dc-loc-detail"><i class="fas fa-building"></i><strong><?php echo e(__('dc_loc_label_operator')); ?></strong> <?php echo e(__('dc_loc_singapore_op')); ?></div>
                            <div class="dc-loc-detail"><i class="fas fa-bolt"></i><strong><?php echo e(__('dc_loc_label_power')); ?></strong> <?php echo e(__('dc_loc_singapore_power')); ?></div>
                            <div class="dc-loc-detail"><i class="fas fa-snowflake"></i><strong><?php echo e(__('dc_loc_label_cooling')); ?></strong> <?php echo e(__('dc_loc_singapore_cooling')); ?></div>
                            <div class="dc-loc-detail"><i class="fas fa-network-wired"></i><strong><?php echo e(__('dc_loc_label_network')); ?></strong> <?php echo e(__('dc_loc_singapore_network')); ?></div>
                            <div class="dc-loc-detail"><i class="fas fa-shield-alt"></i><strong><?php echo e(__('dc_loc_label_security')); ?></strong> <?php echo e(__('dc_loc_singapore_security')); ?></div>
                            <div class="dc-loc-detail"><i class="fas fa-certificate"></i><strong><?php echo e(__('dc_loc_label_certs')); ?></strong> <?php echo e(__('dc_loc_singapore_certs')); ?></div>
                            <div class="dc-loc-detail"><i class="fas fa-tachometer-alt"></i><strong><?php echo e(__('dc_loc_label_ddos')); ?></strong> <?php echo e(__('dc_loc_singapore_ddos')); ?></div>
                        </div>
                    </div>
                </div>

                <div class="dc-loc-card" data-dc-expand>
                    <button class="dc-loc-header">
                        <span class="dc-loc-flag"><span class="fi fi-jp"></span></span>
                        <span class="dc-loc-name"><?php echo e(__('dc_loc_tokyo')); ?></span>
                        <span class="dc-loc-operator">Equinix</span>
                        <span class="dc-loc-tier">Tier III+</span>
                        <i class="fas fa-chevron-down dc-loc-arrow"></i>
                    </button>
                    <div class="dc-loc-body">
                        <div class="dc-loc-details">
                            <div class="dc-loc-detail"><i class="fas fa-building"></i><strong><?php echo e(__('dc_loc_label_operator')); ?></strong> <?php echo e(__('dc_loc_tokyo_op')); ?></div>
                            <div class="dc-loc-detail"><i class="fas fa-bolt"></i><strong><?php echo e(__('dc_loc_label_power')); ?></strong> <?php echo e(__('dc_loc_tokyo_power')); ?></div>
                            <div class="dc-loc-detail"><i class="fas fa-snowflake"></i><strong><?php echo e(__('dc_loc_label_cooling')); ?></strong> <?php echo e(__('dc_loc_tokyo_cooling')); ?></div>
                            <div class="dc-loc-detail"><i class="fas fa-network-wired"></i><strong><?php echo e(__('dc_loc_label_network')); ?></strong> <?php echo e(__('dc_loc_tokyo_network')); ?></div>
                            <div class="dc-loc-detail"><i class="fas fa-shield-alt"></i><strong><?php echo e(__('dc_loc_label_security')); ?></strong> <?php echo e(__('dc_loc_tokyo_security')); ?></div>
                            <div class="dc-loc-detail"><i class="fas fa-certificate"></i><strong><?php echo e(__('dc_loc_label_certs')); ?></strong> <?php echo e(__('dc_loc_tokyo_certs')); ?></div>
                            <div class="dc-loc-detail"><i class="fas fa-tachometer-alt"></i><strong><?php echo e(__('dc_loc_label_ddos')); ?></strong> <?php echo e(__('dc_loc_tokyo_ddos')); ?></div>
                        </div>
                    </div>
                </div>

                <div class="dc-loc-card" data-dc-expand>
                    <button class="dc-loc-header">
                        <span class="dc-loc-flag"><span class="fi fi-hk"></span></span>
                        <span class="dc-loc-name"><?php echo e(__('dc_loc_hongkong')); ?></span>
                        <span class="dc-loc-operator">Equinix</span>
                        <span class="dc-loc-tier">Tier III+</span>
                        <i class="fas fa-chevron-down dc-loc-arrow"></i>
                    </button>
                    <div class="dc-loc-body">
                        <div class="dc-loc-details">
                            <div class="dc-loc-detail"><i class="fas fa-building"></i><strong><?php echo e(__('dc_loc_label_operator')); ?></strong> <?php echo e(__('dc_loc_hongkong_op')); ?></div>
                            <div class="dc-loc-detail"><i class="fas fa-bolt"></i><strong><?php echo e(__('dc_loc_label_power')); ?></strong> <?php echo e(__('dc_loc_hongkong_power')); ?></div>
                            <div class="dc-loc-detail"><i class="fas fa-snowflake"></i><strong><?php echo e(__('dc_loc_label_cooling')); ?></strong> <?php echo e(__('dc_loc_hongkong_cooling')); ?></div>
                            <div class="dc-loc-detail"><i class="fas fa-network-wired"></i><strong><?php echo e(__('dc_loc_label_network')); ?></strong> <?php echo e(__('dc_loc_hongkong_network')); ?></div>
                            <div class="dc-loc-detail"><i class="fas fa-shield-alt"></i><strong><?php echo e(__('dc_loc_label_security')); ?></strong> <?php echo e(__('dc_loc_hongkong_security')); ?></div>
                            <div class="dc-loc-detail"><i class="fas fa-certificate"></i><strong><?php echo e(__('dc_loc_label_certs')); ?></strong> <?php echo e(__('dc_loc_hongkong_certs')); ?></div>
                            <div class="dc-loc-detail"><i class="fas fa-tachometer-alt"></i><strong><?php echo e(__('dc_loc_label_ddos')); ?></strong> <?php echo e(__('dc_loc_hongkong_ddos')); ?></div>
                        </div>
                    </div>
                </div>

                <div class="dc-loc-card" data-dc-expand>
                    <button class="dc-loc-header">
                        <span class="dc-loc-flag"><span class="fi fi-th"></span></span>
                        <span class="dc-loc-name"><?php echo e(__('dc_loc_bangkok')); ?></span>
                        <span class="dc-loc-operator">SUPERNAP</span>
                        <span class="dc-loc-tier">Tier IV</span>
                        <i class="fas fa-chevron-down dc-loc-arrow"></i>
                    </button>
                    <div class="dc-loc-body">
                        <div class="dc-loc-details">
                            <div class="dc-loc-detail"><i class="fas fa-building"></i><strong><?php echo e(__('dc_loc_label_operator')); ?></strong> <?php echo e(__('dc_loc_bangkok_op')); ?></div>
                            <div class="dc-loc-detail"><i class="fas fa-bolt"></i><strong><?php echo e(__('dc_loc_label_power')); ?></strong> <?php echo e(__('dc_loc_bangkok_power')); ?></div>
                            <div class="dc-loc-detail"><i class="fas fa-snowflake"></i><strong><?php echo e(__('dc_loc_label_cooling')); ?></strong> <?php echo e(__('dc_loc_bangkok_cooling')); ?></div>
                            <div class="dc-loc-detail"><i class="fas fa-network-wired"></i><strong><?php echo e(__('dc_loc_label_network')); ?></strong> <?php echo e(__('dc_loc_bangkok_network')); ?></div>
                            <div class="dc-loc-detail"><i class="fas fa-shield-alt"></i><strong><?php echo e(__('dc_loc_label_security')); ?></strong> <?php echo e(__('dc_loc_bangkok_security')); ?></div>
                            <div class="dc-loc-detail"><i class="fas fa-certificate"></i><strong><?php echo e(__('dc_loc_label_certs')); ?></strong> <?php echo e(__('dc_loc_bangkok_certs')); ?></div>
                            <div class="dc-loc-detail"><i class="fas fa-tachometer-alt"></i><strong><?php echo e(__('dc_loc_label_ddos')); ?></strong> <?php echo e(__('dc_loc_bangkok_ddos')); ?></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ── Oceania ── -->
            <div class="dc-region">
                <div class="dc-region-label"><i class="fas fa-globe"></i> <?php echo e(__('dc_region_oceania')); ?></div>

                <div class="dc-loc-card" data-dc-expand>
                    <button class="dc-loc-header">
                        <span class="dc-loc-flag"><span class="fi fi-au"></span></span>
                        <span class="dc-loc-name"><?php echo e(__('dc_loc_sydney')); ?></span>
                        <span class="dc-loc-operator">Equinix</span>
                        <span class="dc-loc-tier">Tier III+</span>
                        <i class="fas fa-chevron-down dc-loc-arrow"></i>
                    </button>
                    <div class="dc-loc-body">
                        <div class="dc-loc-details">
                            <div class="dc-loc-detail"><i class="fas fa-building"></i><strong><?php echo e(__('dc_loc_label_operator')); ?></strong> <?php echo e(__('dc_loc_sydney_op')); ?></div>
                            <div class="dc-loc-detail"><i class="fas fa-bolt"></i><strong><?php echo e(__('dc_loc_label_power')); ?></strong> <?php echo e(__('dc_loc_sydney_power')); ?></div>
                            <div class="dc-loc-detail"><i class="fas fa-snowflake"></i><strong><?php echo e(__('dc_loc_label_cooling')); ?></strong> <?php echo e(__('dc_loc_sydney_cooling')); ?></div>
                            <div class="dc-loc-detail"><i class="fas fa-network-wired"></i><strong><?php echo e(__('dc_loc_label_network')); ?></strong> <?php echo e(__('dc_loc_sydney_network')); ?></div>
                            <div class="dc-loc-detail"><i class="fas fa-shield-alt"></i><strong><?php echo e(__('dc_loc_label_security')); ?></strong> <?php echo e(__('dc_loc_sydney_security')); ?></div>
                            <div class="dc-loc-detail"><i class="fas fa-certificate"></i><strong><?php echo e(__('dc_loc_label_certs')); ?></strong> <?php echo e(__('dc_loc_sydney_certs')); ?></div>
                            <div class="dc-loc-detail"><i class="fas fa-tachometer-alt"></i><strong><?php echo e(__('dc_loc_label_ddos')); ?></strong> <?php echo e(__('dc_loc_sydney_ddos')); ?></div>
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
                <div class="section-tag"><?php echo e(__('dc_specs_tag')); ?></div>
                <h2><?php echo e(__('dc_specs_heading')); ?></h2>
                <p><?php echo e(__('dc_specs_desc')); ?></p>
            </div>

            <div class="dc-specs-grid">
                <div class="dc-spec-card">
                    <div class="dc-spec-icon"><i class="fas fa-microchip"></i></div>
                    <h3><?php echo e(__('dc_specs_cpu_title')); ?></h3>
                    <ul>
                        <li><?php echo e(__('dc_specs_cpu_1')); ?></li>
                        <li><?php echo e(__('dc_specs_cpu_2')); ?></li>
                        <li><?php echo e(__('dc_specs_cpu_3')); ?></li>
                        <li><?php echo e(__('dc_specs_cpu_4')); ?></li>
                    </ul>
                </div>
                <div class="dc-spec-card">
                    <div class="dc-spec-icon icon-green"><i class="fas fa-memory"></i></div>
                    <h3><?php echo e(__('dc_specs_mem_title')); ?></h3>
                    <ul>
                        <li><?php echo e(__('dc_specs_mem_1')); ?></li>
                        <li><?php echo e(__('dc_specs_mem_2')); ?></li>
                        <li><?php echo e(__('dc_specs_mem_3')); ?></li>
                        <li><?php echo e(__('dc_specs_mem_4')); ?></li>
                    </ul>
                </div>
                <div class="dc-spec-card">
                    <div class="dc-spec-icon icon-blue"><i class="fas fa-hdd"></i></div>
                    <h3><?php echo e(__('dc_specs_stor_title')); ?></h3>
                    <ul>
                        <li><?php echo e(__('dc_specs_stor_1')); ?></li>
                        <li><?php echo e(__('dc_specs_stor_2')); ?></li>
                        <li><?php echo e(__('dc_specs_stor_3')); ?></li>
                        <li><?php echo e(__('dc_specs_stor_4')); ?></li>
                    </ul>
                </div>
                <div class="dc-spec-card">
                    <div class="dc-spec-icon icon-purple"><i class="fas fa-network-wired"></i></div>
                    <h3><?php echo e(__('dc_specs_net_title')); ?></h3>
                    <ul>
                        <li><?php echo e(__('dc_specs_net_1')); ?></li>
                        <li><?php echo e(__('dc_specs_net_2')); ?></li>
                        <li><?php echo e(__('dc_specs_net_3')); ?></li>
                        <li><?php echo e(__('dc_specs_net_4')); ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ NETWORK ═══════════════ -->
    <section class="bento-features reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag"><?php echo e(__('dc_net_tag')); ?></div>
                <h2><?php echo e(__('dc_net_heading')); ?></h2>
                <p><?php echo e(__('dc_net_desc')); ?></p>
            </div>

            <div class="bento-grid">
                <div class="bento-card bento-sm">
                    <div class="bento-card-icon"><i class="fas fa-tachometer-alt"></i></div>
                    <h3><?php echo e(__('dc_net_ports_title')); ?></h3>
                    <p><?php echo e(__('dc_net_ports_desc')); ?></p>
                </div>
                <div class="bento-card bento-sm">
                    <div class="bento-card-icon icon-green"><i class="fas fa-project-diagram"></i></div>
                    <h3><?php echo e(__('dc_net_bgp_title')); ?></h3>
                    <p><?php echo e(__('dc_net_bgp_desc')); ?></p>
                </div>
                <div class="bento-card bento-sm">
                    <div class="bento-card-icon icon-blue"><i class="fas fa-globe"></i></div>
                    <h3><?php echo e(__('dc_net_transit_title')); ?></h3>
                    <p><?php echo e(__('dc_net_transit_desc')); ?></p>
                </div>
                <div class="bento-card bento-sm">
                    <div class="bento-card-icon icon-purple"><i class="fas fa-shield-alt"></i></div>
                    <h3><?php echo e(__('dc_net_ddos_title')); ?></h3>
                    <p><?php echo e(__('dc_net_ddos_desc')); ?></p>
                </div>
                <div class="bento-card bento-sm">
                    <div class="bento-card-icon icon-amber"><i class="fas fa-clock"></i></div>
                    <h3><?php echo e(__('dc_net_latency_title')); ?></h3>
                    <p><?php echo e(__('dc_net_latency_desc')); ?></p>
                </div>
                <div class="bento-card bento-sm">
                    <div class="bento-card-icon icon-rose"><i class="fas fa-chart-area"></i></div>
                    <h3><?php echo e(__('dc_net_monitor_title')); ?></h3>
                    <p><?php echo e(__('dc_net_monitor_desc')); ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ SECURITY ═══════════════ -->
    <section class="features-section reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag"><?php echo e(__('dc_sec_tag')); ?></div>
                <h2><?php echo e(__('dc_sec_heading')); ?></h2>
                <p><?php echo e(__('dc_sec_desc')); ?></p>
            </div>

            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon"><i class="fas fa-fingerprint"></i></div>
                    <h4><?php echo e(__('dc_sec_bio_title')); ?></h4>
                    <p><?php echo e(__('dc_sec_bio_desc')); ?></p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon icon-green"><i class="fas fa-video"></i></div>
                    <h4><?php echo e(__('dc_sec_cctv_title')); ?></h4>
                    <p><?php echo e(__('dc_sec_cctv_desc')); ?></p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon icon-blue"><i class="fas fa-user-shield"></i></div>
                    <h4><?php echo e(__('dc_sec_guards_title')); ?></h4>
                    <p><?php echo e(__('dc_sec_guards_desc')); ?></p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon icon-purple"><i class="fas fa-lock"></i></div>
                    <h4><?php echo e(__('dc_sec_encrypt_title')); ?></h4>
                    <p><?php echo e(__('dc_sec_encrypt_desc')); ?></p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon icon-amber"><i class="fas fa-clipboard-check"></i></div>
                    <h4><?php echo e(__('dc_sec_comply_title')); ?></h4>
                    <p><?php echo e(__('dc_sec_comply_desc')); ?></p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon icon-rose"><i class="fas fa-bug"></i></div>
                    <h4><?php echo e(__('dc_sec_vuln_title')); ?></h4>
                    <p><?php echo e(__('dc_sec_vuln_desc')); ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ SLA & UPTIME GUARANTEE ═══════════════ -->
    <section class="dc-sla reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag"><?php echo e(__('dc_sla_tag')); ?></div>
                <h2><?php echo e(__('dc_sla_heading')); ?></h2>
                <p><?php echo e(__('dc_sla_desc')); ?></p>
            </div>

            <div class="dc-sla-grid">
                <div class="dc-sla-card dc-sla-main">
                    <div class="dc-sla-percent">99.9<span>%</span></div>
                    <div class="dc-sla-label"><?php echo e(__('dc_sla_label')); ?></div>
                    <p><?php echo e(__('dc_sla_main_desc')); ?></p>
                </div>
                <div class="dc-sla-card">
                    <div class="dc-sla-icon"><i class="fas fa-heartbeat"></i></div>
                    <h4><?php echo e(__('dc_sla_monitor_title')); ?></h4>
                    <p><?php echo e(__('dc_sla_monitor_desc')); ?></p>
                </div>
                <div class="dc-sla-card">
                    <div class="dc-sla-icon icon-green"><i class="fas fa-sync-alt"></i></div>
                    <h4><?php echo e(__('dc_sla_failover_title')); ?></h4>
                    <p><?php echo e(__('dc_sla_failover_desc')); ?></p>
                </div>
                <div class="dc-sla-card">
                    <div class="dc-sla-icon icon-blue"><i class="fas fa-headset"></i></div>
                    <h4><?php echo e(__('dc_sla_response_title')); ?></h4>
                    <p><?php echo e(__('dc_sla_response_desc')); ?></p>
                </div>
                <div class="dc-sla-card">
                    <div class="dc-sla-icon icon-purple"><i class="fas fa-file-contract"></i></div>
                    <h4><?php echo e(__('dc_sla_credit_title')); ?></h4>
                    <p><?php echo e(__('dc_sla_credit_desc')); ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ GREEN ENERGY ═══════════════ -->
    <section class="dc-green reveal">
        <div class="container">
            <div class="dc-green-wrap">
                <div class="dc-green-content">
                    <div class="section-tag"><?php echo e(__('dc_green_tag')); ?></div>
                    <h2><?php echo e(__('dc_green_heading')); ?></h2>
                    <p><?php echo e(__('dc_green_desc')); ?></p>
                    <div class="dc-green-stats">
                        <div class="dc-green-stat">
                            <span class="dc-green-stat-num">1.2</span>
                            <span class="dc-green-stat-label"><?php echo e(__('dc_green_pue_label')); ?></span>
                        </div>
                        <div class="dc-green-stat">
                            <span class="dc-green-stat-num">60%</span>
                            <span class="dc-green-stat-label"><?php echo e(__('dc_green_renew_label')); ?></span>
                        </div>
                        <div class="dc-green-stat">
                            <span class="dc-green-stat-num">0</span>
                            <span class="dc-green-stat-label"><?php echo e(__('dc_green_carbon_label')); ?></span>
                        </div>
                    </div>
                </div>
                <div class="dc-green-features">
                    <div class="dc-green-item">
                        <i class="fas fa-leaf"></i>
                        <div>
                            <strong><?php echo e(__('dc_green_renew_title')); ?></strong>
                            <p><?php echo e(__('dc_green_renew_desc')); ?></p>
                        </div>
                    </div>
                    <div class="dc-green-item">
                        <i class="fas fa-wind"></i>
                        <div>
                            <strong><?php echo e(__('dc_green_cool_title')); ?></strong>
                            <p><?php echo e(__('dc_green_cool_desc')); ?></p>
                        </div>
                    </div>
                    <div class="dc-green-item">
                        <i class="fas fa-recycle"></i>
                        <div>
                            <strong><?php echo e(__('dc_green_hw_title')); ?></strong>
                            <p><?php echo e(__('dc_green_hw_desc')); ?></p>
                        </div>
                    </div>
                    <div class="dc-green-item">
                        <i class="fas fa-chart-line"></i>
                        <div>
                            <strong><?php echo e(__('dc_green_pue_title')); ?></strong>
                            <p><?php echo e(__('dc_green_pue_desc')); ?></p>
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
                <div class="section-tag"><?php echo e(__('dc_lg_tag')); ?></div>
                <h2><?php echo e(__('dc_lg_heading')); ?></h2>
                <p><?php echo e(__('dc_lg_desc')); ?></p>
            </div>

            <div class="dc-lg-grid">
                <div class="dc-lg-card">
                    <span class="dc-lg-flag"><span class="fi fi-de"></span></span>
                    <div class="dc-lg-info">
                        <strong><?php echo e(__('dc_lg_frankfurt')); ?></strong>
                        <span class="dc-lg-ip">de-lg.yottasrc.com</span>
                    </div>
                    <span class="dc-lg-badge"><?php echo e(__('dc_lg_badge_europe')); ?></span>
                </div>
                <div class="dc-lg-card">
                    <span class="dc-lg-flag"><span class="fi fi-us"></span></span>
                    <div class="dc-lg-info">
                        <strong><?php echo e(__('dc_lg_newyork')); ?></strong>
                        <span class="dc-lg-ip">us-lg.yottasrc.com</span>
                    </div>
                    <span class="dc-lg-badge"><?php echo e(__('dc_lg_badge_americas')); ?></span>
                </div>
                <div class="dc-lg-card">
                    <span class="dc-lg-flag"><span class="fi fi-sg"></span></span>
                    <div class="dc-lg-info">
                        <strong><?php echo e(__('dc_lg_singapore')); ?></strong>
                        <span class="dc-lg-ip">sg-lg.yottasrc.com</span>
                    </div>
                    <span class="dc-lg-badge"><?php echo e(__('dc_lg_badge_asia')); ?></span>
                </div>
                <div class="dc-lg-card">
                    <span class="dc-lg-flag"><span class="fi fi-au"></span></span>
                    <div class="dc-lg-info">
                        <strong><?php echo e(__('dc_lg_sydney')); ?></strong>
                        <span class="dc-lg-ip">au-lg.yottasrc.com</span>
                    </div>
                    <span class="dc-lg-badge"><?php echo e(__('dc_lg_badge_oceania')); ?></span>
                </div>
                <div class="dc-lg-card">
                    <span class="dc-lg-flag"><span class="fi fi-ro"></span></span>
                    <div class="dc-lg-info">
                        <strong><?php echo e(__('dc_lg_bucharest')); ?></strong>
                        <span class="dc-lg-ip">ro-lg.yottasrc.com</span>
                    </div>
                    <span class="dc-lg-badge dc-lg-hq"><?php echo e(__('dc_loc_hq')); ?></span>
                </div>
                <div class="dc-lg-card">
                    <span class="dc-lg-flag"><span class="fi fi-jp"></span></span>
                    <div class="dc-lg-info">
                        <strong><?php echo e(__('dc_lg_tokyo')); ?></strong>
                        <span class="dc-lg-ip">jp-lg.yottasrc.com</span>
                    </div>
                    <span class="dc-lg-badge"><?php echo e(__('dc_lg_badge_asia')); ?></span>
                </div>
            </div>

            <p class="dc-lg-note"><i class="fas fa-info-circle"></i> <?php echo e(__('dc_lg_note')); ?></p>
        </div>
    </section>

    <!-- ═══════════════ BOTTOM CTA ═══════════════ -->
    <section class="promo-cta reveal">
        <div class="container">
            <div class="promo-cta-inner">
                <div class="promo-cta-glow"></div>
                <div class="promo-cta-icon"><i class="fas fa-server"></i></div>
                <h2><?php echo e(__('dc_cta_heading')); ?></h2>
                <p><?php echo e(__('dc_cta_desc')); ?></p>
                <a href="<?php echo e(SITE_URL); ?>/cpanel-hosting/" class="btn-primary"><?php echo e(__('dc_cta_btn')); ?> <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
