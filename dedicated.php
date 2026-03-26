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
                        <a href="<?php echo e(SITE_URL); ?>/"><?php echo e(__('breadcrumb_home')); ?></a>
                        <i class="fas fa-chevron-right"></i>
                        <span><?php echo e(__('dedicated_breadcrumb')); ?></span>
                    </div>
                    <h1><?php echo __('dedicated_title'); ?></h1>
                    <p class="page-hero-desc">
                        <?php echo e(__('dedicated_desc')); ?>
                    </p>
                    <div class="page-hero-ctas">
                        <a href="<?php echo e(SITE_URL); ?>/contact-us/" class="btn-primary"><i class="fas fa-headset"></i> <?php echo e(__('dedicated_hero_cta_sales')); ?></a>
                        <a href="#offers" class="btn-secondary"><?php echo e(__('dedicated_hero_cta_offers')); ?> <i class="fas fa-arrow-down"></i></a>
                    </div>
                    <div class="page-hero-badges">
                        <div class="hero-badge-item"><i class="fas fa-check"></i> <?php echo e(__('dedicated_badge_baremetal')); ?></div>
                        <div class="hero-badge-item"><i class="fas fa-check"></i> <?php echo e(__('dedicated_badge_100g')); ?></div>
                        <div class="hero-badge-item"><i class="fas fa-check"></i> <?php echo e(__('dedicated_badge_900tb')); ?></div>
                        <div class="hero-badge-item"><i class="fas fa-check"></i> <?php echo e(__('dedicated_badge_custom')); ?></div>
                        <div class="hero-badge-item"><i class="fas fa-check"></i> <?php echo e(__('dedicated_badge_bgp')); ?></div>
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
            <span class="partners-label"><?php echo e(__('dedicated_partners_label')); ?></span>
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
                <div class="section-tag"><?php echo e(__('dedicated_hardware_tag')); ?></div>
                <h2><?php echo e(__('dedicated_hardware_title')); ?></h2>
                <p><?php echo e(__('dedicated_hardware_desc')); ?></p>
            </div>
            <div class="ds-hardware-grid">
                <div class="ds-hardware-card">
                    <div class="ds-hardware-icon"><i class="fas fa-microchip"></i></div>
                    <div class="ds-hardware-value"><?php echo e(__('dedicated_hw_cpu_value')); ?></div>
                    <div class="ds-hardware-label"><?php echo e(__('dedicated_hw_cpu_label')); ?></div>
                    <p><?php echo e(__('dedicated_hw_cpu_desc')); ?></p>
                </div>
                <div class="ds-hardware-card">
                    <div class="ds-hardware-icon icon-green"><i class="fas fa-memory"></i></div>
                    <div class="ds-hardware-value"><?php echo e(__('dedicated_hw_ram_value')); ?></div>
                    <div class="ds-hardware-label"><?php echo e(__('dedicated_hw_ram_label')); ?></div>
                    <p><?php echo e(__('dedicated_hw_ram_desc')); ?></p>
                </div>
                <div class="ds-hardware-card">
                    <div class="ds-hardware-icon icon-purple"><i class="fas fa-hdd"></i></div>
                    <div class="ds-hardware-value"><?php echo e(__('dedicated_hw_storage_value')); ?></div>
                    <div class="ds-hardware-label"><?php echo e(__('dedicated_hw_storage_label')); ?></div>
                    <p><?php echo e(__('dedicated_hw_storage_desc')); ?></p>
                </div>
                <div class="ds-hardware-card">
                    <div class="ds-hardware-icon icon-amber"><i class="fas fa-network-wired"></i></div>
                    <div class="ds-hardware-value"><?php echo e(__('dedicated_hw_network_value')); ?></div>
                    <div class="ds-hardware-label"><?php echo e(__('dedicated_hw_network_label')); ?></div>
                    <p><?php echo e(__('dedicated_hw_network_desc')); ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ CUSTOM CONFIGURATION ═══════════════ -->
    <section class="ds-config reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag"><?php echo e(__('dedicated_config_tag')); ?></div>
                <h2><?php echo e(__('dedicated_config_title')); ?></h2>
                <p><?php echo e(__('dedicated_config_desc')); ?></p>
            </div>
            <div class="ds-config-grid">
                <div class="ds-config-item">
                    <div class="ds-config-num">01</div>
                    <div class="ds-config-icon"><i class="fas fa-microchip"></i></div>
                    <h4><?php echo e(__('dedicated_config_cpu_title')); ?></h4>
                    <p><?php echo e(__('dedicated_config_cpu_desc')); ?></p>
                </div>
                <div class="ds-config-item">
                    <div class="ds-config-num">02</div>
                    <div class="ds-config-icon icon-green"><i class="fas fa-memory"></i></div>
                    <h4><?php echo e(__('dedicated_config_ram_title')); ?></h4>
                    <p><?php echo e(__('dedicated_config_ram_desc')); ?></p>
                </div>
                <div class="ds-config-item">
                    <div class="ds-config-num">03</div>
                    <div class="ds-config-icon icon-purple"><i class="fas fa-hdd"></i></div>
                    <h4><?php echo e(__('dedicated_config_storage_title')); ?></h4>
                    <p><?php echo e(__('dedicated_config_storage_desc')); ?></p>
                </div>
                <div class="ds-config-item">
                    <div class="ds-config-num">04</div>
                    <div class="ds-config-icon icon-amber"><i class="fas fa-tachometer-alt"></i></div>
                    <h4><?php echo e(__('dedicated_config_bw_title')); ?></h4>
                    <p><?php echo e(__('dedicated_config_bw_desc')); ?></p>
                </div>
                <div class="ds-config-item">
                    <div class="ds-config-num">05</div>
                    <div class="ds-config-icon"><i class="fas fa-globe-europe"></i></div>
                    <h4><?php echo e(__('dedicated_config_loc_title')); ?></h4>
                    <p><?php echo e(__('dedicated_config_loc_desc')); ?></p>
                </div>
                <div class="ds-config-item">
                    <div class="ds-config-num">06</div>
                    <div class="ds-config-icon icon-green"><i class="fas fa-shield-alt"></i></div>
                    <h4><?php echo e(__('dedicated_config_addon_title')); ?></h4>
                    <p><?php echo e(__('dedicated_config_addon_desc')); ?></p>
                </div>
            </div>
            <div class="ds-config-cta">
                <p><?php echo e(__('dedicated_config_cta_text')); ?></p>
                <a href="<?php echo e(SITE_URL); ?>/contact-us/" class="btn-primary"><i class="fas fa-tools"></i> <?php echo e(__('dedicated_config_cta_btn')); ?></a>
            </div>
        </div>
    </section>

    <!-- ═══════════════ USE CASES ═══════════════ -->
    <section class="ds-usecases reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag"><?php echo e(__('dedicated_usecases_tag')); ?></div>
                <h2><?php echo e(__('dedicated_usecases_title')); ?></h2>
                <p><?php echo e(__('dedicated_usecases_desc')); ?></p>
            </div>
            <div class="swiper ds-usecases-swiper" id="dsUsecasesSwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="ds-usecase-card">
                            <div class="ds-usecase-icon"><i class="fas fa-cloud"></i></div>
                            <h4><?php echo e(__('dedicated_uc_saas_title')); ?></h4>
                            <p><?php echo e(__('dedicated_uc_saas_desc')); ?></p>
                            <ul class="ds-usecase-list">
                                <li><?php echo e(__('dedicated_uc_saas_li1')); ?></li>
                                <li><?php echo e(__('dedicated_uc_saas_li2')); ?></li>
                                <li><?php echo e(__('dedicated_uc_saas_li3')); ?></li>
                            </ul>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="ds-usecase-card">
                            <div class="ds-usecase-icon icon-green"><i class="fas fa-database"></i></div>
                            <h4><?php echo e(__('dedicated_uc_db_title')); ?></h4>
                            <p><?php echo e(__('dedicated_uc_db_desc')); ?></p>
                            <ul class="ds-usecase-list">
                                <li><?php echo e(__('dedicated_uc_db_li1')); ?></li>
                                <li><?php echo e(__('dedicated_uc_db_li2')); ?></li>
                                <li><?php echo e(__('dedicated_uc_db_li3')); ?></li>
                            </ul>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="ds-usecase-card">
                            <div class="ds-usecase-icon icon-purple"><i class="fas fa-video"></i></div>
                            <h4><?php echo e(__('dedicated_uc_media_title')); ?></h4>
                            <p><?php echo e(__('dedicated_uc_media_desc')); ?></p>
                            <ul class="ds-usecase-list">
                                <li><?php echo e(__('dedicated_uc_media_li1')); ?></li>
                                <li><?php echo e(__('dedicated_uc_media_li2')); ?></li>
                                <li><?php echo e(__('dedicated_uc_media_li3')); ?></li>
                            </ul>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="ds-usecase-card">
                            <div class="ds-usecase-icon icon-amber"><i class="fas fa-gamepad"></i></div>
                            <h4><?php echo e(__('dedicated_uc_game_title')); ?></h4>
                            <p><?php echo e(__('dedicated_uc_game_desc')); ?></p>
                            <ul class="ds-usecase-list">
                                <li><?php echo e(__('dedicated_uc_game_li1')); ?></li>
                                <li><?php echo e(__('dedicated_uc_game_li2')); ?></li>
                                <li><?php echo e(__('dedicated_uc_game_li3')); ?></li>
                            </ul>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="ds-usecase-card">
                            <div class="ds-usecase-icon icon-purple"><i class="fas fa-brain"></i></div>
                            <h4><?php echo e(__('dedicated_uc_ai_title')); ?></h4>
                            <p><?php echo e(__('dedicated_uc_ai_desc')); ?></p>
                            <ul class="ds-usecase-list">
                                <li><?php echo e(__('dedicated_uc_ai_li1')); ?></li>
                                <li><?php echo e(__('dedicated_uc_ai_li2')); ?></li>
                                <li><?php echo e(__('dedicated_uc_ai_li3')); ?></li>
                            </ul>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="ds-usecase-card">
                            <div class="ds-usecase-icon icon-green"><i class="fas fa-server"></i></div>
                            <h4><?php echo e(__('dedicated_uc_virt_title')); ?></h4>
                            <p><?php echo e(__('dedicated_uc_virt_desc')); ?></p>
                            <ul class="ds-usecase-list">
                                <li><?php echo e(__('dedicated_uc_virt_li1')); ?></li>
                                <li><?php echo e(__('dedicated_uc_virt_li2')); ?></li>
                                <li><?php echo e(__('dedicated_uc_virt_li3')); ?></li>
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
                <div class="section-tag"><?php echo e(__('dedicated_offers_tag')); ?></div>
                <h2><?php echo e(__('dedicated_offers_title')); ?></h2>
                <p><?php echo e(__('dedicated_offers_desc')); ?></p>
            </div>

            <div class="cloud-table-wrap">
                <table class="cloud-table">
                    <thead>
                        <tr>
                            <th><?php echo e(__('dedicated_table_server')); ?></th>
                            <th><?php echo e(__('dedicated_table_cpu')); ?></th>
                            <th><?php echo e(__('dedicated_table_ram')); ?></th>
                            <th><?php echo e(__('dedicated_table_storage')); ?></th>
                            <th><?php echo e(__('dedicated_table_port')); ?></th>
                            <th><?php echo e(__('dedicated_table_bandwidth')); ?></th>
                            <th><?php echo e(__('dedicated_table_location')); ?></th>
                            <th><?php echo e(__('dedicated_table_price')); ?></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong><?php echo e(__('dedicated_offer_ds1_name')); ?></strong></td>
                            <td><strong><?php echo e(__('dedicated_offer_ds1_cpu')); ?></strong></td>
                            <td><?php echo e(__('dedicated_offer_ds1_ram')); ?></td>
                            <td><?php echo e(__('dedicated_offer_ds1_storage')); ?></td>
                            <td><?php echo e(__('dedicated_offer_ds1_port')); ?></td>
                            <td><?php echo e(__('dedicated_offer_ds1_bw')); ?></td>
                            <td><span class="fi fi-fr"></span> <?php echo e(__('dedicated_offer_ds1_location')); ?></td>
                            <td><span class="cloud-price-mo"><?php echo e(__('dedicated_offer_ds1_price')); ?><small><?php echo e(__('dedicated_offer_per_month')); ?></small></span></td>
                            <td><a href="<?php echo e(SITE_URL); ?>/contact-us/" class="cloud-buy"><?php echo e(__('dedicated_table_order')); ?></a></td>
                        </tr>
                        <tr>
                            <td><strong><?php echo e(__('dedicated_offer_ds2_name')); ?></strong></td>
                            <td><strong><?php echo e(__('dedicated_offer_ds2_cpu')); ?></strong></td>
                            <td><?php echo e(__('dedicated_offer_ds2_ram')); ?></td>
                            <td><?php echo e(__('dedicated_offer_ds2_storage')); ?></td>
                            <td><?php echo e(__('dedicated_offer_ds2_port')); ?></td>
                            <td><?php echo e(__('dedicated_offer_ds2_bw')); ?></td>
                            <td><span class="fi fi-fr"></span> <?php echo e(__('dedicated_offer_ds2_location')); ?></td>
                            <td><span class="cloud-price-mo"><?php echo e(__('dedicated_offer_ds2_price')); ?><small><?php echo e(__('dedicated_offer_per_month')); ?></small></span></td>
                            <td><a href="<?php echo e(SITE_URL); ?>/contact-us/" class="cloud-buy"><?php echo e(__('dedicated_table_order')); ?></a></td>
                        </tr>
                        <tr class="cloud-row-highlight">
                            <td><strong><?php echo e(__('dedicated_offer_ds3_name')); ?></strong> <span class="cloud-popular"><?php echo e(__('dedicated_table_popular')); ?></span></td>
                            <td><strong><?php echo e(__('dedicated_offer_ds3_cpu')); ?></strong></td>
                            <td><?php echo e(__('dedicated_offer_ds3_ram')); ?></td>
                            <td><?php echo e(__('dedicated_offer_ds3_storage')); ?></td>
                            <td><?php echo e(__('dedicated_offer_ds3_port')); ?></td>
                            <td><?php echo e(__('dedicated_offer_ds3_bw')); ?></td>
                            <td><span class="fi fi-fr"></span> <?php echo e(__('dedicated_offer_ds3_location')); ?></td>
                            <td><span class="cloud-price-mo"><?php echo e(__('dedicated_offer_ds3_price')); ?><small><?php echo e(__('dedicated_offer_per_month')); ?></small></span></td>
                            <td><a href="<?php echo e(SITE_URL); ?>/contact-us/" class="cloud-buy"><?php echo e(__('dedicated_table_order')); ?></a></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="cloud-note">
                <p><i class="fas fa-info-circle"></i> <?php echo __('dedicated_offers_note', ['url' => e(SITE_URL) . '/contact-us/']); ?></p>
            </div>
        </div>
    </section>

    <!-- ═══════════════ ENTERPRISE RELIABILITY ═══════════════ -->
    <section class="ds-reliability reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag"><?php echo e(__('dedicated_reliability_tag')); ?></div>
                <h2><?php echo e(__('dedicated_reliability_title')); ?></h2>
                <p><?php echo e(__('dedicated_reliability_desc')); ?></p>
            </div>
            <div class="ds-reliability-grid">
                <div class="ds-reliability-card">
                    <div class="ds-reliability-icon"><i class="fas fa-shield-alt"></i></div>
                    <h4><?php echo e(__('dedicated_rel_ddos_title')); ?></h4>
                    <p><?php echo e(__('dedicated_rel_ddos_desc')); ?></p>
                </div>
                <div class="ds-reliability-card">
                    <div class="ds-reliability-icon icon-green"><i class="fas fa-headset"></i></div>
                    <h4><?php echo e(__('dedicated_rel_support_title')); ?></h4>
                    <p><?php echo e(__('dedicated_rel_support_desc')); ?></p>
                </div>
                <div class="ds-reliability-card">
                    <div class="ds-reliability-icon icon-purple"><i class="fas fa-globe"></i></div>
                    <h4><?php echo e(__('dedicated_rel_global_title')); ?></h4>
                    <p><?php echo e(__('dedicated_rel_global_desc')); ?></p>
                </div>
                <div class="ds-reliability-card">
                    <div class="ds-reliability-icon icon-amber"><i class="fas fa-project-diagram"></i></div>
                    <h4><?php echo e(__('dedicated_rel_network_title')); ?></h4>
                    <p><?php echo e(__('dedicated_rel_network_desc')); ?></p>
                </div>
                <div class="ds-reliability-card">
                    <div class="ds-reliability-icon icon-green"><i class="fas fa-clock"></i></div>
                    <h4><?php echo e(__('dedicated_rel_uptime_title')); ?></h4>
                    <p><?php echo e(__('dedicated_rel_uptime_desc')); ?></p>
                </div>
                <div class="ds-reliability-card">
                    <div class="ds-reliability-icon icon-purple"><i class="fas fa-key"></i></div>
                    <h4><?php echo e(__('dedicated_rel_ipmi_title')); ?></h4>
                    <p><?php echo e(__('dedicated_rel_ipmi_desc')); ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ PERFORMANCE HIGHLIGHTS ═══════════════ -->
    <section class="ds-perf reveal">
        <div class="container">
            <div class="ds-perf-layout">
                <div class="ds-perf-content">
                    <div class="section-tag"><?php echo e(__('dedicated_perf_tag')); ?></div>
                    <h2 class="ds-perf-title"><?php echo e(__('dedicated_perf_title')); ?></h2>
                    <p class="ds-perf-desc"><?php echo e(__('dedicated_perf_desc')); ?></p>
                    <ul class="ds-perf-highlights">
                        <li><i class="fas fa-bolt"></i> <?php echo __('dedicated_perf_li1'); ?></li>
                        <li><i class="fas fa-lock"></i> <?php echo __('dedicated_perf_li2'); ?></li>
                        <li><i class="fas fa-network-wired"></i> <?php echo __('dedicated_perf_li3'); ?></li>
                        <li><i class="fas fa-tools"></i> <?php echo __('dedicated_perf_li4'); ?></li>
                    </ul>
                </div>
                <div class="ds-perf-stats">
                    <div class="ds-perf-stat-card">
                        <div class="ds-perf-stat-value"><?php echo e(__('dedicated_perf_stat1_value')); ?><span><?php echo e(__('dedicated_perf_stat1_unit')); ?></span></div>
                        <div class="ds-perf-stat-label"><?php echo e(__('dedicated_perf_stat1_label')); ?></div>
                    </div>
                    <div class="ds-perf-stat-card">
                        <div class="ds-perf-stat-value"><?php echo e(__('dedicated_perf_stat2_value')); ?><span><?php echo e(__('dedicated_perf_stat2_unit')); ?></span></div>
                        <div class="ds-perf-stat-label"><?php echo e(__('dedicated_perf_stat2_label')); ?></div>
                    </div>
                    <div class="ds-perf-stat-card">
                        <div class="ds-perf-stat-value"><?php echo e(__('dedicated_perf_stat3_value')); ?><span><?php echo e(__('dedicated_perf_stat3_unit')); ?></span></div>
                        <div class="ds-perf-stat-label"><?php echo e(__('dedicated_perf_stat3_label')); ?></div>
                    </div>
                    <div class="ds-perf-stat-card">
                        <div class="ds-perf-stat-value"><?php echo e(__('dedicated_perf_stat4_value')); ?><span><?php echo e(__('dedicated_perf_stat4_unit')); ?></span></div>
                        <div class="ds-perf-stat-label"><?php echo e(__('dedicated_perf_stat4_label')); ?></div>
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
                    <div class="section-tag"><?php echo e(__('dedicated_why_tag')); ?></div>
                    <h2 class="why-us-title"><?php echo e(__('dedicated_why_title')); ?></h2>
                    <p class="why-us-desc"><?php echo e(__('dedicated_why_desc')); ?></p>
                    <a href="<?php echo e(SITE_URL); ?>/contact-us/" class="btn-primary why-us-cta"><i class="fas fa-headset"></i> <?php echo e(__('dedicated_why_cta')); ?></a>
                </div>
                <div class="why-us-grid">
                    <div class="why-us-card"><div class="why-us-card-icon"><i class="fas fa-server"></i></div><h4><?php echo e(__('dedicated_why_hw_title')); ?></h4><p><?php echo e(__('dedicated_why_hw_desc')); ?></p></div>
                    <div class="why-us-card"><div class="why-us-card-icon icon-green"><i class="fas fa-tachometer-alt"></i></div><h4><?php echo e(__('dedicated_why_speed_title')); ?></h4><p><?php echo e(__('dedicated_why_speed_desc')); ?></p></div>
                    <div class="why-us-card"><div class="why-us-card-icon icon-purple"><i class="fas fa-cogs"></i></div><h4><?php echo e(__('dedicated_why_custom_title')); ?></h4><p><?php echo e(__('dedicated_why_custom_desc')); ?></p></div>
                    <div class="why-us-card"><div class="why-us-card-icon icon-amber"><i class="fas fa-network-wired"></i></div><h4><?php echo e(__('dedicated_why_bgp_title')); ?></h4><p><?php echo e(__('dedicated_why_bgp_desc')); ?></p></div>
                    <div class="why-us-card"><div class="why-us-card-icon icon-green"><i class="fas fa-tags"></i></div><h4><?php echo e(__('dedicated_why_pricing_title')); ?></h4><p><?php echo e(__('dedicated_why_pricing_desc')); ?></p></div>
                    <div class="why-us-card"><div class="why-us-card-icon icon-purple"><i class="fas fa-headset"></i></div><h4><?php echo e(__('dedicated_why_response_title')); ?></h4><p><?php echo e(__('dedicated_why_response_desc')); ?></p></div>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ FAQ ═══════════════ -->
    <section class="faq-section reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag"><?php echo e(__('dedicated_faq_tag')); ?></div>
                <h2><?php echo e(__('dedicated_faq_title')); ?></h2>
                <p><?php echo e(__('dedicated_faq_desc')); ?></p>
            </div>
            <div class="faq-layout faq-layout--full">
                <div class="faq-panels">
                    <div class="faq-panel active" id="faq-ds-all">
                        <div class="faq-item">
                            <button class="faq-question"><span><?php echo e(__('dedicated_faq_q1')); ?></span><i class="fas fa-chevron-down"></i></button>
                            <div class="faq-answer"><p><?php echo e(__('dedicated_faq_a1')); ?></p></div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question"><span><?php echo e(__('dedicated_faq_q2')); ?></span><i class="fas fa-chevron-down"></i></button>
                            <div class="faq-answer"><p><?php echo e(__('dedicated_faq_a2')); ?></p></div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question"><span><?php echo e(__('dedicated_faq_q3')); ?></span><i class="fas fa-chevron-down"></i></button>
                            <div class="faq-answer"><p><?php echo e(__('dedicated_faq_a3')); ?></p></div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question"><span><?php echo e(__('dedicated_faq_q4')); ?></span><i class="fas fa-chevron-down"></i></button>
                            <div class="faq-answer"><p><?php echo e(__('dedicated_faq_a4')); ?></p></div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question"><span><?php echo e(__('dedicated_faq_q5')); ?></span><i class="fas fa-chevron-down"></i></button>
                            <div class="faq-answer"><p><?php echo e(__('dedicated_faq_a5')); ?></p></div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question"><span><?php echo e(__('dedicated_faq_q6')); ?></span><i class="fas fa-chevron-down"></i></button>
                            <div class="faq-answer"><p><?php echo e(__('dedicated_faq_a6')); ?></p></div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question"><span><?php echo e(__('dedicated_faq_q7')); ?></span><i class="fas fa-chevron-down"></i></button>
                            <div class="faq-answer"><p><?php echo e(__('dedicated_faq_a7')); ?></p></div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question"><span><?php echo e(__('dedicated_faq_q8')); ?></span><i class="fas fa-chevron-down"></i></button>
                            <div class="faq-answer"><p><?php echo e(__('dedicated_faq_a8')); ?></p></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="faq-actions">
                <a href="<?php echo e(SITE_URL); ?>/contact-us/" class="btn-primary"><?php echo e(__('dedicated_faq_cta_sales')); ?> <i class="fas fa-headset"></i></a>
                <a href="<?php echo e(SITE_URL); ?>/faq" class="btn-secondary"><?php echo e(__('dedicated_faq_cta_browse')); ?> <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </section>

    <!-- ═══════════════ CTA ═══════════════ -->
    <section class="promo-cta reveal">
        <div class="container">
            <div class="promo-cta-inner">
                <div class="promo-cta-glow"></div>
                <div class="promo-cta-icon"><i class="fas fa-server"></i></div>
                <h2><?php echo e(__('dedicated_cta_title')); ?></h2>
                <p><?php echo e(__('dedicated_cta_desc')); ?></p>
                <a href="<?php echo e(SITE_URL); ?>/contact-us/" class="btn-primary"><i class="fas fa-headset"></i> <?php echo e(__('dedicated_cta_btn')); ?></a>
            </div>
        </div>
    </section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
