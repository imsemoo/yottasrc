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
                        <a href="<?php echo e(SITE_URL); ?>/"><?php echo e(__('breadcrumb_home')); ?></a>
                        <i class="fas fa-chevron-right"></i>
                        <span><?php echo e(__('vps_breadcrumb')); ?></span>
                    </div>
                    <h1><?php echo __('vps_title'); ?></h1>
                    <p class="page-hero-desc">
                        <?php echo e(__('vps_desc')); ?>
                    </p>
                    <div class="page-hero-ctas">
                        <a href="#plans" class="btn-primary"><?php echo e(__('common_view_plans')); ?> <i class="fas fa-arrow-down"></i></a>
                        <a href="<?php echo e(SITE_URL); ?>/contact-us/" class="btn-secondary"><i class="fas fa-headset"></i> <?php echo e(__('common_talk_to_sales')); ?></a>
                    </div>
                    <div class="page-hero-badges">
                        <div class="hero-badge-item"><i class="fas fa-check"></i> <?php echo e(__('vps_badge1')); ?></div>
                        <div class="hero-badge-item"><i class="fas fa-check"></i> <?php echo e(__('vps_badge2')); ?></div>
                        <div class="hero-badge-item"><i class="fas fa-check"></i> <?php echo e(__('vps_badge3')); ?></div>
                        <div class="hero-badge-item"><i class="fas fa-check"></i> <?php echo e(__('vps_badge4')); ?></div>
                        <div class="hero-badge-item"><i class="fas fa-check"></i> <?php echo e(__('vps_badge5')); ?></div>
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
            <span class="partners-label"><?php echo e(__('vps_partners_label')); ?></span>
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
                <div class="section-tag"><?php echo e(__('plans_tag')); ?></div>
                <h2><?php echo e(__('vps_plans_title')); ?></h2>
                <p><?php echo e(__('vps_plans_desc')); ?></p>
            </div>

            <div class="plans-tabs">
                <button class="plan-tab active" data-target="vps-yta"><?php echo e(__('vps_tab_yta')); ?></button>
                <button class="plan-tab" data-target="vps-ha"><?php echo e(__('vps_tab_ha')); ?></button>
                <button class="plan-tab" data-target="vps-de"><?php echo e(__('vps_tab_de')); ?></button>
                <button class="plan-tab" data-target="vps-ml"><?php echo e(__('vps_tab_ml')); ?></button>
            </div>

            <!-- YTA Plans -->
            <div class="plans-panel active" data-tab="vps-yta">
                <div class="vps-rows-header">
                    <span><i class="fas fa-check-circle"></i> <?php echo __('vps_yta_h1'); ?></span>
                    <span><i class="fas fa-check-circle"></i> <?php echo __('vps_yta_h2'); ?></span>
                    <span><i class="fas fa-map-marker-alt"></i> <?php echo e(__('vps_yta_h3')); ?></span>
                    <span><i class="fas fa-sync-alt"></i> <?php echo e(__('plans_same_renewal')); ?></span>
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
                                <div class="vps-row-spec"><span class="vps-row-spec-val">1 Core</span><span class="vps-row-spec-label"><?php echo e(__('vps_spec_cpu')); ?></span></div>
                                <div class="vps-row-spec"><span class="vps-row-spec-val">2 GB</span><span class="vps-row-spec-label"><?php echo e(__('vps_spec_ram')); ?></span></div>
                                <div class="vps-row-spec"><span class="vps-row-spec-val">25 GB</span><span class="vps-row-spec-label"><?php echo e(__('vps_spec_nvme')); ?></span></div>
                                <div class="vps-row-spec"><span class="vps-row-spec-val">1 Gbit/s</span><span class="vps-row-spec-label"><?php echo e(__('vps_spec_network')); ?></span></div>
                                <div class="vps-row-spec"><span class="vps-row-spec-val">25 TB</span><span class="vps-row-spec-label"><?php echo e(__('vps_spec_traffic')); ?></span></div>
                            </div>
                            <div class="vps-row-action">
                                <div class="vps-row-price"><span class="vps-row-amount">€2.75</span><span class="vps-row-cycle"><?php echo e(__('vps_per_mo')); ?></span></div>
                                <a href="<?php echo e(SITE_URL); ?>/vps/" class="vps-row-btn"><?php echo e(__('common_order_now')); ?></a>
                            </div>
                        </div>
                        <div class="vps-row-details">
                            <div class="vps-row-details-features">
                                <span><i class="fas fa-check-circle"></i> <?php echo __('vps_feat_antiddos'); ?></span>
                                <span><i class="fas fa-check-circle"></i> <?php echo __('vps_feat_uptime_99'); ?></span>
                                <span><i class="fas fa-check-circle"></i> <?php echo __('vps_feat_fair_traffic'); ?></span>
                                <span><i class="fas fa-check-circle"></i> <?php echo __('vps_feat_backup_1'); ?></span>
                                <span><i class="fas fa-check-circle"></i> <?php echo __('vps_feat_support'); ?></span>
                                <span><i class="fas fa-check-circle"></i> <?php echo __('vps_feat_dedicated_ip'); ?></span>
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
                        <span class="vps-row-badge"><?php echo e(__('vps_badge_best_value')); ?></span>
                        <div class="vps-row-header">
                            <div class="vps-row-identity">
                                <span class="vps-row-toggle"><i class="fas fa-chevron-down"></i></span>
                                <span class="vps-row-name">VPS YTA 2</span>
                                <span class="vps-row-arch">x86</span>
                            </div>
                            <div class="vps-row-specs">
                                <div class="vps-row-spec"><span class="vps-row-spec-val">2 Cores</span><span class="vps-row-spec-label"><?php echo e(__('vps_spec_cpu')); ?></span></div>
                                <div class="vps-row-spec"><span class="vps-row-spec-val">4 GB</span><span class="vps-row-spec-label"><?php echo e(__('vps_spec_ram')); ?></span></div>
                                <div class="vps-row-spec"><span class="vps-row-spec-val">50 GB</span><span class="vps-row-spec-label"><?php echo e(__('vps_spec_nvme')); ?></span></div>
                                <div class="vps-row-spec"><span class="vps-row-spec-val">10 Gbit/s</span><span class="vps-row-spec-label"><?php echo e(__('vps_spec_network')); ?></span></div>
                                <div class="vps-row-spec"><span class="vps-row-spec-val">25 TB</span><span class="vps-row-spec-label"><?php echo e(__('vps_spec_traffic')); ?></span></div>
                            </div>
                            <div class="vps-row-action">
                                <div class="vps-row-price"><span class="vps-row-amount">€5.15</span><span class="vps-row-cycle"><?php echo e(__('vps_per_mo')); ?></span></div>
                                <a href="<?php echo e(SITE_URL); ?>/vps/" class="vps-row-btn"><?php echo e(__('common_order_now')); ?></a>
                            </div>
                        </div>
                        <div class="vps-row-details">
                            <div class="vps-row-details-features">
                                <span><i class="fas fa-check-circle"></i> <?php echo __('vps_feat_antiddos'); ?></span>
                                <span><i class="fas fa-check-circle"></i> <?php echo __('vps_feat_uptime_99'); ?></span>
                                <span><i class="fas fa-check-circle"></i> <?php echo __('vps_feat_fair_traffic'); ?></span>
                                <span><i class="fas fa-check-circle"></i> <?php echo __('vps_feat_backup_2'); ?></span>
                                <span><i class="fas fa-check-circle"></i> <?php echo __('vps_feat_support'); ?></span>
                                <span><i class="fas fa-check-circle"></i> <?php echo __('vps_feat_dedicated_ip'); ?></span>
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
                                <div class="vps-row-spec"><span class="vps-row-spec-val">4 Cores</span><span class="vps-row-spec-label"><?php echo e(__('vps_spec_cpu')); ?></span></div>
                                <div class="vps-row-spec"><span class="vps-row-spec-val">8 GB</span><span class="vps-row-spec-label"><?php echo e(__('vps_spec_ram')); ?></span></div>
                                <div class="vps-row-spec"><span class="vps-row-spec-val">100 GB</span><span class="vps-row-spec-label"><?php echo e(__('vps_spec_nvme')); ?></span></div>
                                <div class="vps-row-spec"><span class="vps-row-spec-val">10 Gbit/s</span><span class="vps-row-spec-label"><?php echo e(__('vps_spec_network')); ?></span></div>
                                <div class="vps-row-spec"><span class="vps-row-spec-val">30 TB</span><span class="vps-row-spec-label"><?php echo e(__('vps_spec_traffic')); ?></span></div>
                            </div>
                            <div class="vps-row-action">
                                <div class="vps-row-price"><span class="vps-row-amount">€7.97</span><span class="vps-row-cycle"><?php echo e(__('vps_per_mo')); ?></span></div>
                                <a href="<?php echo e(SITE_URL); ?>/vps/" class="vps-row-btn"><?php echo e(__('common_order_now')); ?></a>
                            </div>
                        </div>
                        <div class="vps-row-details">
                            <div class="vps-row-details-features">
                                <span><i class="fas fa-check-circle"></i> <?php echo __('vps_feat_antiddos'); ?></span>
                                <span><i class="fas fa-check-circle"></i> <?php echo __('vps_feat_uptime_99'); ?></span>
                                <span><i class="fas fa-check-circle"></i> <?php echo __('vps_feat_fair_traffic'); ?></span>
                                <span><i class="fas fa-check-circle"></i> <?php echo __('vps_feat_backup_2'); ?></span>
                                <span><i class="fas fa-check-circle"></i> <?php echo __('vps_feat_support'); ?></span>
                                <span><i class="fas fa-check-circle"></i> <?php echo __('vps_feat_dedicated_ip'); ?></span>
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
                    <span><i class="fas fa-check-circle"></i> <?php echo __('vps_ha_h1'); ?></span>
                    <span><i class="fas fa-check-circle"></i> <?php echo __('vps_ha_h2'); ?></span>
                    <span><i class="fas fa-map-marker-alt"></i> <?php echo e(__('vps_ha_h3')); ?></span>
                    <span><i class="fas fa-sync-alt"></i> <?php echo e(__('plans_same_renewal')); ?></span>
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
                                <div class="vps-row-spec"><span class="vps-row-spec-val">1 Core</span><span class="vps-row-spec-label"><?php echo e(__('vps_spec_cpu')); ?></span></div>
                                <div class="vps-row-spec"><span class="vps-row-spec-val">1 GB</span><span class="vps-row-spec-label"><?php echo e(__('vps_spec_ram')); ?></span></div>
                                <div class="vps-row-spec"><span class="vps-row-spec-val">20 GB</span><span class="vps-row-spec-label"><?php echo e(__('vps_spec_nvme')); ?></span></div>
                                <div class="vps-row-spec"><span class="vps-row-spec-val">10 Gbit/s</span><span class="vps-row-spec-label"><?php echo e(__('vps_spec_network')); ?></span></div>
                                <div class="vps-row-spec"><span class="vps-row-spec-val">15 TB</span><span class="vps-row-spec-label"><?php echo e(__('vps_spec_traffic')); ?></span></div>
                            </div>
                            <div class="vps-row-action">
                                <div class="vps-row-price"><span class="vps-row-amount">€4.72</span><span class="vps-row-cycle"><?php echo e(__('vps_per_mo')); ?></span></div>
                                <a href="<?php echo e(SITE_URL); ?>/vps/" class="vps-row-btn"><?php echo e(__('common_order_now')); ?></a>
                            </div>
                        </div>
                        <div class="vps-row-details">
                            <div class="vps-row-details-features">
                                <span><i class="fas fa-check-circle"></i> <?php echo __('vps_feat_antiddos'); ?></span>
                                <span><i class="fas fa-check-circle"></i> <?php echo __('vps_feat_uptime_99'); ?></span>
                                <span><i class="fas fa-check-circle"></i> <?php echo __('vps_feat_fair_traffic'); ?></span>
                                <span><i class="fas fa-check-circle"></i> <?php echo __('vps_feat_backup_1'); ?></span>
                                <span><i class="fas fa-check-circle"></i> <?php echo __('vps_feat_support'); ?></span>
                                <span><i class="fas fa-check-circle"></i> <?php echo __('vps_feat_dedicated_ip'); ?></span>
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
                        <span class="vps-row-badge"><?php echo e(__('vps_badge_popular')); ?></span>
                        <div class="vps-row-header">
                            <div class="vps-row-identity">
                                <span class="vps-row-toggle"><i class="fas fa-chevron-down"></i></span>
                                <span class="vps-row-name">VPS HA 2</span>
                                <span class="vps-row-arch">x86</span>
                            </div>
                            <div class="vps-row-specs">
                                <div class="vps-row-spec"><span class="vps-row-spec-val">1 Core</span><span class="vps-row-spec-label"><?php echo e(__('vps_spec_cpu')); ?></span></div>
                                <div class="vps-row-spec"><span class="vps-row-spec-val">2 GB</span><span class="vps-row-spec-label"><?php echo e(__('vps_spec_ram')); ?></span></div>
                                <div class="vps-row-spec"><span class="vps-row-spec-val">20 GB</span><span class="vps-row-spec-label"><?php echo e(__('vps_spec_nvme')); ?></span></div>
                                <div class="vps-row-spec"><span class="vps-row-spec-val">10 Gbit/s</span><span class="vps-row-spec-label"><?php echo e(__('vps_spec_network')); ?></span></div>
                                <div class="vps-row-spec"><span class="vps-row-spec-val">15 TB</span><span class="vps-row-spec-label"><?php echo e(__('vps_spec_traffic')); ?></span></div>
                            </div>
                            <div class="vps-row-action">
                                <div class="vps-row-price"><span class="vps-row-amount">€7.50</span><span class="vps-row-cycle"><?php echo e(__('vps_per_mo')); ?></span></div>
                                <a href="<?php echo e(SITE_URL); ?>/vps/" class="vps-row-btn"><?php echo e(__('common_order_now')); ?></a>
                            </div>
                        </div>
                        <div class="vps-row-details">
                            <div class="vps-row-details-features">
                                <span><i class="fas fa-check-circle"></i> <?php echo __('vps_feat_antiddos'); ?></span>
                                <span><i class="fas fa-check-circle"></i> <?php echo __('vps_feat_uptime_99'); ?></span>
                                <span><i class="fas fa-check-circle"></i> <?php echo __('vps_feat_fair_traffic'); ?></span>
                                <span><i class="fas fa-check-circle"></i> <?php echo __('vps_feat_backup_2'); ?></span>
                                <span><i class="fas fa-check-circle"></i> <?php echo __('vps_feat_support'); ?></span>
                                <span><i class="fas fa-check-circle"></i> <?php echo __('vps_feat_dedicated_ip'); ?></span>
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
                    <span><i class="fas fa-check-circle"></i> <?php echo __('vps_de_h1'); ?></span>
                    <span><i class="fas fa-check-circle"></i> <?php echo __('vps_de_h2'); ?></span>
                    <span><i class="fas fa-map-marker-alt"></i> <?php echo e(__('vps_de_h3')); ?></span>
                    <span><i class="fas fa-sync-alt"></i> <?php echo e(__('plans_same_renewal')); ?></span>
                </div>
                <div class="vps-rows">
                    <div class="vps-row popular expanded">
                        <span class="vps-row-badge"><?php echo e(__('vps_badge_arm64')); ?></span>
                        <div class="vps-row-header">
                            <div class="vps-row-identity">
                                <span class="vps-row-toggle"><i class="fas fa-chevron-down"></i></span>
                                <span class="vps-row-name">VPS DE 1</span>
                                <span class="vps-row-arch">Arm64</span>
                            </div>
                            <div class="vps-row-specs">
                                <div class="vps-row-spec"><span class="vps-row-spec-val">2 Cores</span><span class="vps-row-spec-label"><?php echo e(__('vps_spec_cpu')); ?></span></div>
                                <div class="vps-row-spec"><span class="vps-row-spec-val">4 GB</span><span class="vps-row-spec-label"><?php echo e(__('vps_spec_ram')); ?></span></div>
                                <div class="vps-row-spec"><span class="vps-row-spec-val">40 GB</span><span class="vps-row-spec-label"><?php echo e(__('vps_spec_nvme')); ?></span></div>
                                <div class="vps-row-spec"><span class="vps-row-spec-val">10 Gbit/s</span><span class="vps-row-spec-label"><?php echo e(__('vps_spec_network')); ?></span></div>
                                <div class="vps-row-spec"><span class="vps-row-spec-val">30 TB</span><span class="vps-row-spec-label"><?php echo e(__('vps_spec_traffic')); ?></span></div>
                            </div>
                            <div class="vps-row-action">
                                <div class="vps-row-price"><span class="vps-row-amount">€5.49</span><span class="vps-row-cycle"><?php echo e(__('vps_per_mo')); ?></span></div>
                                <a href="<?php echo e(SITE_URL); ?>/vps/" class="vps-row-btn"><?php echo e(__('common_order_now')); ?></a>
                            </div>
                        </div>
                        <div class="vps-row-details">
                            <div class="vps-row-details-features">
                                <span><i class="fas fa-check-circle"></i> <?php echo __('vps_feat_antiddos'); ?></span>
                                <span><i class="fas fa-check-circle"></i> <?php echo __('vps_feat_uptime_99'); ?></span>
                                <span><i class="fas fa-check-circle"></i> <?php echo __('vps_feat_fair_traffic'); ?></span>
                                <span><i class="fas fa-check-circle"></i> <?php echo __('vps_feat_backup_2'); ?></span>
                                <span><i class="fas fa-check-circle"></i> <?php echo __('vps_feat_support'); ?></span>
                                <span><i class="fas fa-check-circle"></i> <?php echo __('vps_feat_dedicated_ip'); ?></span>
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
                    <span><i class="fas fa-check-circle"></i> <?php echo __('vps_ml_h1'); ?></span>
                    <span><i class="fas fa-check-circle"></i> <?php echo __('vps_ml_h2'); ?></span>
                    <span><i class="fas fa-map-marker-alt"></i> <?php echo e(__('vps_ml_h3')); ?></span>
                    <span><i class="fas fa-sync-alt"></i> <?php echo e(__('plans_same_renewal')); ?></span>
                </div>
                <div class="vps-rows">
                    <div class="vps-row popular expanded">
                        <span class="vps-row-badge"><?php echo e(__('vps_badge_ml')); ?></span>
                        <div class="vps-row-header">
                            <div class="vps-row-identity">
                                <span class="vps-row-toggle"><i class="fas fa-chevron-down"></i></span>
                                <span class="vps-row-name">VPS ML 1</span>
                                <span class="vps-row-arch">x86</span>
                            </div>
                            <div class="vps-row-specs">
                                <div class="vps-row-spec"><span class="vps-row-spec-val">2 Cores</span><span class="vps-row-spec-label"><?php echo e(__('vps_spec_cpu')); ?></span></div>
                                <div class="vps-row-spec"><span class="vps-row-spec-val">4 GB</span><span class="vps-row-spec-label"><?php echo e(__('vps_spec_ram')); ?></span></div>
                                <div class="vps-row-spec"><span class="vps-row-spec-val">40 GB</span><span class="vps-row-spec-label"><?php echo e(__('vps_spec_nvme')); ?></span></div>
                                <div class="vps-row-spec"><span class="vps-row-spec-val">10 Gbit/s</span><span class="vps-row-spec-label"><?php echo e(__('vps_spec_network')); ?></span></div>
                                <div class="vps-row-spec"><span class="vps-row-spec-val">30 TB</span><span class="vps-row-spec-label"><?php echo e(__('vps_spec_traffic')); ?></span></div>
                            </div>
                            <div class="vps-row-action">
                                <div class="vps-row-price"><span class="vps-row-amount">€5.49</span><span class="vps-row-cycle"><?php echo e(__('vps_per_mo')); ?></span></div>
                                <a href="<?php echo e(SITE_URL); ?>/vps/" class="vps-row-btn"><?php echo e(__('common_order_now')); ?></a>
                            </div>
                        </div>
                        <div class="vps-row-details">
                            <div class="vps-row-details-features">
                                <span><i class="fas fa-check-circle"></i> <?php echo __('vps_feat_antiddos'); ?></span>
                                <span><i class="fas fa-check-circle"></i> <?php echo __('vps_feat_uptime_99'); ?></span>
                                <span><i class="fas fa-check-circle"></i> <?php echo __('vps_feat_fair_traffic'); ?></span>
                                <span><i class="fas fa-check-circle"></i> <?php echo __('vps_feat_backup_2'); ?></span>
                                <span><i class="fas fa-check-circle"></i> <?php echo __('vps_feat_support'); ?></span>
                                <span><i class="fas fa-check-circle"></i> <?php echo __('vps_feat_dedicated_ip'); ?></span>
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
                <p><?php echo __('vps_custom_config', ['url' => e(SITE_URL) . '/contact-us/']); ?></p>
            </div>
        </div>
    </section>

    <!-- ═══════════════ GLOBAL LOCATIONS ═══════════════ -->
    <section class="locations-section reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag"><?php echo e(__('vps_loc_tag')); ?></div>
                <h2><?php echo e(__('vps_loc_title')); ?></h2>
                <p><?php echo e(__('vps_loc_desc')); ?></p>
            </div>

            <div class="locations-tabs">
                <button class="loc-tab active" data-loc-target="vps-europe"><i class="fas fa-globe-europe"></i> <?php echo e(__('vps_loc_europe')); ?></button>
                <button class="loc-tab" data-loc-target="vps-asia"><i class="fas fa-globe-asia"></i> <?php echo e(__('vps_loc_asia')); ?></button>
                <button class="loc-tab" data-loc-target="vps-africa"><i class="fas fa-globe-africa"></i> <?php echo e(__('vps_loc_africa')); ?></button>
                <button class="loc-tab" data-loc-target="vps-south-america"><i class="fas fa-globe-americas"></i> <?php echo e(__('vps_loc_south_america')); ?></button>
                <button class="loc-tab" data-loc-target="vps-north-america"><i class="fas fa-globe-americas"></i> <?php echo e(__('vps_loc_north_america')); ?></button>
                <button class="loc-tab" data-loc-target="vps-oceania"><i class="fas fa-globe"></i> <?php echo e(__('vps_loc_oceania')); ?></button>
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
                <div class="section-tag"><?php echo e(__('vps_os_tag')); ?></div>
                <h2><?php echo __('vps_os_title'); ?></h2>
                <p><?php echo e(__('vps_os_desc')); ?></p>
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
                <div class="section-tag"><?php echo e(__('vps_infra_tag')); ?></div>
                <h2><?php echo e(__('vps_infra_title')); ?></h2>
                <p><?php echo e(__('vps_infra_desc')); ?></p>
            </div>
            <div class="vps-infra-grid">
                <div class="vps-infra-card">
                    <div class="vps-infra-icon"><i class="fas fa-microchip"></i></div>
                    <div class="vps-infra-value"><?php echo e(__('vps_infra_cpu_val')); ?></div>
                    <div class="vps-infra-label"><?php echo e(__('vps_infra_cpu_label')); ?></div>
                    <p><?php echo e(__('vps_infra_cpu_desc')); ?></p>
                </div>
                <div class="vps-infra-card">
                    <div class="vps-infra-icon icon-green"><i class="fas fa-hdd"></i></div>
                    <div class="vps-infra-value"><?php echo e(__('vps_infra_storage_val')); ?></div>
                    <div class="vps-infra-label"><?php echo e(__('vps_infra_storage_label')); ?></div>
                    <p><?php echo e(__('vps_infra_storage_desc')); ?></p>
                </div>
                <div class="vps-infra-card">
                    <div class="vps-infra-icon icon-purple"><i class="fas fa-network-wired"></i></div>
                    <div class="vps-infra-value"><?php echo e(__('vps_infra_network_val')); ?></div>
                    <div class="vps-infra-label"><?php echo e(__('vps_infra_network_label')); ?></div>
                    <p><?php echo e(__('vps_infra_network_desc')); ?></p>
                </div>
                <div class="vps-infra-card">
                    <div class="vps-infra-icon icon-amber"><i class="fas fa-globe-americas"></i></div>
                    <div class="vps-infra-value"><?php echo e(__('vps_infra_loc_val')); ?></div>
                    <div class="vps-infra-label"><?php echo e(__('vps_infra_loc_label')); ?></div>
                    <p><?php echo e(__('vps_infra_loc_desc')); ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ VPS USE CASES ═══════════════ -->
    <section class="vps-usecases reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag"><?php echo e(__('vps_uc_tag')); ?></div>
                <h2><?php echo e(__('vps_uc_title')); ?></h2>
                <p><?php echo e(__('vps_uc_desc')); ?></p>
            </div>
            <div class="vps-usecases-grid">
                <div class="vps-usecase-card">
                    <div class="vps-usecase-icon"><i class="fas fa-globe"></i></div>
                    <h4><?php echo e(__('vps_uc_web_title')); ?></h4>
                    <p><?php echo e(__('vps_uc_web_desc')); ?></p>
                    <ul class="vps-usecase-list">
                        <li><?php echo __('vps_uc_web_li1'); ?></li>
                        <li><?php echo __('vps_uc_web_li2'); ?></li>
                        <li><?php echo e(__('vps_uc_web_li3')); ?></li>
                    </ul>
                </div>
                <div class="vps-usecase-card">
                    <div class="vps-usecase-icon icon-green"><i class="fas fa-gamepad"></i></div>
                    <h4><?php echo e(__('vps_uc_game_title')); ?></h4>
                    <p><?php echo e(__('vps_uc_game_desc')); ?></p>
                    <ul class="vps-usecase-list">
                        <li><?php echo __('vps_uc_game_li1'); ?></li>
                        <li><?php echo __('vps_uc_game_li2'); ?></li>
                        <li><?php echo e(__('vps_uc_game_li3')); ?></li>
                    </ul>
                </div>
                <div class="vps-usecase-card">
                    <div class="vps-usecase-icon icon-purple"><i class="fas fa-chart-line"></i></div>
                    <h4><?php echo __('vps_uc_trade_title'); ?></h4>
                    <p><?php echo e(__('vps_uc_trade_desc')); ?></p>
                    <ul class="vps-usecase-list">
                        <li><?php echo e(__('vps_uc_trade_li1')); ?></li>
                        <li><?php echo __('vps_uc_trade_li2'); ?></li>
                        <li><?php echo e(__('vps_uc_trade_li3')); ?></li>
                    </ul>
                </div>
                <div class="vps-usecase-card">
                    <div class="vps-usecase-icon icon-amber"><i class="fas fa-brain"></i></div>
                    <h4><?php echo __('vps_uc_ai_title'); ?></h4>
                    <p><?php echo e(__('vps_uc_ai_desc')); ?></p>
                    <ul class="vps-usecase-list">
                        <li><?php echo __('vps_uc_ai_li1'); ?></li>
                        <li><?php echo e(__('vps_uc_ai_li2')); ?></li>
                        <li><?php echo e(__('vps_uc_ai_li3')); ?></li>
                    </ul>
                </div>
                <div class="vps-usecase-card">
                    <div class="vps-usecase-icon icon-green"><i class="fas fa-code-branch"></i></div>
                    <h4><?php echo __('vps_uc_dev_title'); ?></h4>
                    <p><?php echo e(__('vps_uc_dev_desc')); ?></p>
                    <ul class="vps-usecase-list">
                        <li><?php echo e(__('vps_uc_dev_li1')); ?></li>
                        <li><?php echo __('vps_uc_dev_li2'); ?></li>
                        <li><?php echo __('vps_uc_dev_li3'); ?></li>
                    </ul>
                </div>
                <div class="vps-usecase-card">
                    <div class="vps-usecase-icon icon-purple"><i class="fas fa-database"></i></div>
                    <h4><?php echo __('vps_uc_db_title'); ?></h4>
                    <p><?php echo e(__('vps_uc_db_desc')); ?></p>
                    <ul class="vps-usecase-list">
                        <li><?php echo e(__('vps_uc_db_li1')); ?></li>
                        <li><?php echo __('vps_uc_db_li2'); ?></li>
                        <li><?php echo e(__('vps_uc_db_li3')); ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ DEPLOY FLOW ═══════════════ -->
    <section class="vps-deploy reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag"><?php echo e(__('vps_deploy_tag')); ?></div>
                <h2><?php echo e(__('vps_deploy_title')); ?></h2>
                <p><?php echo e(__('vps_deploy_desc')); ?></p>
            </div>
            <div class="vps-deploy-steps">
                <div class="vps-deploy-step">
                    <div class="vps-step-num">1</div>
                    <h4><?php echo e(__('vps_deploy_step1_title')); ?></h4>
                    <p><?php echo e(__('vps_deploy_step1_desc')); ?></p>
                </div>
                <div class="vps-deploy-connector"><i class="fas fa-arrow-right"></i></div>
                <div class="vps-deploy-step">
                    <div class="vps-step-num">2</div>
                    <h4><?php echo e(__('vps_deploy_step2_title')); ?></h4>
                    <p><?php echo e(__('vps_deploy_step2_desc')); ?></p>
                </div>
                <div class="vps-deploy-connector"><i class="fas fa-arrow-right"></i></div>
                <div class="vps-deploy-step">
                    <div class="vps-step-num">3</div>
                    <h4><?php echo __('vps_deploy_step3_title'); ?></h4>
                    <p><?php echo e(__('vps_deploy_step3_desc')); ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ SECURITY & RELIABILITY ═══════════════ -->
    <section class="vps-security reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag"><?php echo e(__('vps_sec_tag')); ?></div>
                <h2><?php echo __('vps_sec_title'); ?></h2>
                <p><?php echo e(__('vps_sec_desc')); ?></p>
            </div>
            <div class="vps-security-grid">
                <div class="cp-security-card">
                    <div class="cp-security-icon"><i class="fas fa-shield-alt"></i></div>
                    <h4><?php echo e(__('vps_sec_ddos_title')); ?></h4>
                    <p><?php echo e(__('vps_sec_ddos_desc')); ?></p>
                </div>
                <div class="cp-security-card">
                    <div class="cp-security-icon icon-green"><i class="fas fa-eye"></i></div>
                    <h4><?php echo e(__('vps_sec_monitor_title')); ?></h4>
                    <p><?php echo e(__('vps_sec_monitor_desc')); ?></p>
                </div>
                <div class="cp-security-card">
                    <div class="cp-security-icon icon-purple"><i class="fas fa-database"></i></div>
                    <h4><?php echo e(__('vps_sec_backup_title')); ?></h4>
                    <p><?php echo e(__('vps_sec_backup_desc')); ?></p>
                </div>
                <div class="cp-security-card">
                    <div class="cp-security-icon icon-amber"><i class="fas fa-server"></i></div>
                    <h4><?php echo e(__('vps_sec_kvm_title')); ?></h4>
                    <p><?php echo e(__('vps_sec_kvm_desc')); ?></p>
                </div>
                <div class="cp-security-card">
                    <div class="cp-security-icon icon-green"><i class="fas fa-lock"></i></div>
                    <h4><?php echo e(__('vps_sec_ssh_title')); ?></h4>
                    <p><?php echo e(__('vps_sec_ssh_desc')); ?></p>
                </div>
                <div class="cp-security-card">
                    <div class="cp-security-icon icon-purple"><i class="fas fa-network-wired"></i></div>
                    <h4><?php echo e(__('vps_sec_uptime_title')); ?></h4>
                    <p><?php echo e(__('vps_sec_uptime_desc')); ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ VPS FEATURES (Swiper) ═══════════════ -->
    <section class="features-grid-section reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag"><?php echo e(__('vps_features_tag')); ?></div>
                <h2><?php echo e(__('vps_features_title')); ?></h2>
                <p><?php echo e(__('vps_features_desc')); ?></p>
            </div>

            <div class="swiper features-swiper" id="featuresSwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><div class="feature-card"><div class="feature-icon"><i class="fas fa-terminal"></i></div><h4><?php echo e(__('vps_feat_root_title')); ?></h4><p><?php echo e(__('vps_feat_root_desc')); ?></p></div></div>
                    <div class="swiper-slide"><div class="feature-card"><div class="feature-icon icon-green"><i class="fas fa-layer-group"></i></div><h4><?php echo e(__('vps_feat_kvm_title')); ?></h4><p><?php echo e(__('vps_feat_kvm_desc')); ?></p></div></div>
                    <div class="swiper-slide"><div class="feature-card"><div class="feature-icon icon-purple"><i class="fas fa-hdd"></i></div><h4><?php echo e(__('vps_feat_nvme_title')); ?></h4><p><?php echo e(__('vps_feat_nvme_desc')); ?></p></div></div>
                    <div class="swiper-slide"><div class="feature-card"><div class="feature-icon icon-amber"><i class="fas fa-network-wired"></i></div><h4><?php echo e(__('vps_feat_net_title')); ?></h4><p><?php echo e(__('vps_feat_net_desc')); ?></p></div></div>
                    <div class="swiper-slide"><div class="feature-card"><div class="feature-icon"><i class="fas fa-shield-alt"></i></div><h4><?php echo e(__('vps_feat_ddos_title')); ?></h4><p><?php echo e(__('vps_feat_ddos_desc')); ?></p></div></div>
                    <div class="swiper-slide"><div class="feature-card"><div class="feature-icon icon-green"><i class="fas fa-exchange-alt"></i></div><h4><?php echo e(__('vps_feat_ip_title')); ?></h4><p><?php echo e(__('vps_feat_ip_desc')); ?></p></div></div>
                    <div class="swiper-slide"><div class="feature-card"><div class="feature-icon icon-purple"><i class="fab fa-linux"></i></div><h4><?php echo e(__('vps_feat_os_title')); ?></h4><p><?php echo e(__('vps_feat_os_desc')); ?></p></div></div>
                    <div class="swiper-slide"><div class="feature-card"><div class="feature-icon icon-amber"><i class="fas fa-microchip"></i></div><h4><?php echo __('vps_feat_arch_title'); ?></h4><p><?php echo e(__('vps_feat_arch_desc')); ?></p></div></div>
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
                    <div class="section-tag"><?php echo e(__('vps_why_tag')); ?></div>
                    <h2 class="why-us-title"><?php echo e(__('vps_why_title')); ?></h2>
                    <p class="why-us-desc"><?php echo e(__('vps_why_desc')); ?></p>
                </div>
                <div class="why-us-grid">
                    <div class="why-us-card"><div class="why-us-card-icon"><i class="fas fa-headset"></i></div><h4><?php echo e(__('vps_why_support_title')); ?></h4><p><?php echo e(__('vps_why_support_desc')); ?></p></div>
                    <div class="why-us-card"><div class="why-us-card-icon icon-green"><i class="fas fa-tachometer-alt"></i></div><h4><?php echo e(__('vps_why_net_title')); ?></h4><p><?php echo e(__('vps_why_net_desc')); ?></p></div>
                    <div class="why-us-card"><div class="why-us-card-icon icon-purple"><i class="fas fa-shield-alt"></i></div><h4><?php echo e(__('vps_why_ddos_title')); ?></h4><p><?php echo e(__('vps_why_ddos_desc')); ?></p></div>
                    <div class="why-us-card"><div class="why-us-card-icon icon-amber"><i class="fas fa-globe"></i></div><h4><?php echo e(__('vps_why_loc_title')); ?></h4><p><?php echo e(__('vps_why_loc_desc')); ?></p></div>
                    <div class="why-us-card"><div class="why-us-card-icon icon-green"><i class="fas fa-tags"></i></div><h4><?php echo e(__('vps_why_renewal_title')); ?></h4><p><?php echo e(__('vps_why_renewal_desc')); ?></p></div>
                    <div class="why-us-card"><div class="why-us-card-icon icon-purple"><i class="fas fa-terminal"></i></div><h4><?php echo e(__('vps_why_root_title')); ?></h4><p><?php echo e(__('vps_why_root_desc')); ?></p></div>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ VPS FAQ ═══════════════ -->
    <section class="faq-section reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag"><?php echo e(__('vps_faq_tag')); ?></div>
                <h2><?php echo e(__('vps_faq_title')); ?></h2>
                <p><?php echo e(__('vps_faq_desc')); ?></p>
            </div>
            <div class="faq-layout">
                <div class="faq-tabs">
                    <button class="faq-tab active" data-faq-target="faq-vps-general"><i class="fas fa-server"></i> <?php echo e(__('vps_faq_tab_general')); ?></button>
                    <button class="faq-tab" data-faq-target="faq-vps-technical"><i class="fas fa-cogs"></i> <?php echo e(__('vps_faq_tab_technical')); ?></button>
                    <button class="faq-tab" data-faq-target="faq-vps-billing"><i class="fas fa-file-invoice-dollar"></i> <?php echo e(__('vps_faq_tab_billing')); ?></button>
                </div>
                <div class="faq-panels">
                    <div class="faq-panel active" id="faq-vps-general">
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('vps_faq_g1_q')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('vps_faq_g1_a')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('vps_faq_g2_q')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('vps_faq_g2_a')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('vps_faq_g3_q')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('vps_faq_g3_a')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('vps_faq_g4_q')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('vps_faq_g4_a')); ?></p></div></div>
                    </div>
                    <div class="faq-panel" id="faq-vps-technical">
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('vps_faq_t1_q')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('vps_faq_t1_a')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('vps_faq_t2_q')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('vps_faq_t2_a')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('vps_faq_t3_q')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('vps_faq_t3_a')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('vps_faq_t4_q')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('vps_faq_t4_a')); ?></p></div></div>
                    </div>
                    <div class="faq-panel" id="faq-vps-billing">
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('vps_faq_b1_q')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('vps_faq_b1_a')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('vps_faq_b2_q')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('vps_faq_b2_a')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('vps_faq_b3_q')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('vps_faq_b3_a')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('vps_faq_b4_q')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('vps_faq_b4_a')); ?></p></div></div>
                    </div>
                </div>
            </div>
            <div class="faq-actions">
                <a href="<?php echo e(SITE_URL); ?>/contact-us/" class="btn-primary"><?php echo e(__('common_open_ticket')); ?> <i class="fas fa-headset"></i></a>
                <a href="<?php echo e(SITE_URL); ?>/faq" class="btn-secondary"><?php echo e(__('common_browse_faq')); ?> <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </section>

    <!-- ═══════════════ COMPETITORS COMPARISON ═══════════════ -->
    <section class="section-compare reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag"><?php echo e(__('vps_cmp_tag')); ?></div>
                <h2><?php echo e(__('vps_cmp_title')); ?></h2>
                <p><?php echo e(__('vps_cmp_desc')); ?></p>
            </div>

            <div class="compare-table-wrap">
                <table class="compare-table">
                    <thead>
                        <tr>
                            <th><?php echo e(__('vps_cmp_th_feature')); ?></th>
                            <th class="compare-highlight"><?php echo e(__('vps_cmp_th_yottasrc')); ?></th>
                            <th><?php echo e(__('vps_cmp_th_others')); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><i class="fas fa-coins"></i> <?php echo e(__('vps_cmp_price')); ?></td>
                            <td class="compare-highlight"><i class="fas fa-check-circle"></i> <?php echo e(__('vps_cmp_price_us')); ?></td>
                            <td><i class="fas fa-minus-circle"></i> <?php echo e(__('vps_cmp_price_them')); ?></td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-microchip"></i> <?php echo e(__('vps_cmp_virt')); ?></td>
                            <td class="compare-highlight"><i class="fas fa-check-circle"></i> <?php echo e(__('vps_cmp_virt_us')); ?></td>
                            <td><i class="fas fa-minus-circle"></i> <?php echo e(__('vps_cmp_virt_them')); ?></td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-hdd"></i> <?php echo e(__('vps_cmp_storage')); ?></td>
                            <td class="compare-highlight"><i class="fas fa-check-circle"></i> <?php echo e(__('vps_cmp_storage_us')); ?></td>
                            <td><i class="fas fa-minus-circle"></i> <?php echo e(__('vps_cmp_storage_them')); ?></td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-network-wired"></i> <?php echo e(__('vps_cmp_network')); ?></td>
                            <td class="compare-highlight"><i class="fas fa-check-circle"></i> <?php echo e(__('vps_cmp_network_us')); ?></td>
                            <td><i class="fas fa-minus-circle"></i> <?php echo e(__('vps_cmp_network_them')); ?></td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-globe"></i> <?php echo e(__('vps_cmp_locations')); ?></td>
                            <td class="compare-highlight"><i class="fas fa-check-circle"></i> <?php echo e(__('vps_cmp_locations_us')); ?></td>
                            <td><i class="fas fa-minus-circle"></i> <?php echo e(__('vps_cmp_locations_them')); ?></td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-terminal"></i> <?php echo e(__('vps_cmp_root')); ?></td>
                            <td class="compare-highlight"><i class="fas fa-check-circle"></i> <?php echo e(__('vps_cmp_root_us')); ?></td>
                            <td><i class="fas fa-check-circle"></i> <?php echo e(__('vps_cmp_root_them')); ?></td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-shield-alt"></i> <?php echo e(__('vps_cmp_ddos')); ?></td>
                            <td class="compare-highlight"><i class="fas fa-check-circle"></i> <?php echo e(__('vps_cmp_ddos_us')); ?></td>
                            <td><i class="fas fa-times-circle"></i> <?php echo e(__('vps_cmp_ddos_them')); ?></td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-tag"></i> <?php echo e(__('vps_cmp_renewal')); ?></td>
                            <td class="compare-highlight"><i class="fas fa-check-circle"></i> <?php echo e(__('vps_cmp_renewal_us')); ?></td>
                            <td><i class="fas fa-times-circle"></i> <?php echo e(__('vps_cmp_renewal_them')); ?></td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-credit-card"></i> <?php echo e(__('vps_cmp_crypto')); ?></td>
                            <td class="compare-highlight"><i class="fas fa-check-circle"></i> <?php echo __('vps_cmp_crypto_us'); ?></td>
                            <td><i class="fas fa-times-circle"></i> <?php echo e(__('vps_cmp_crypto_them')); ?></td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-headset"></i> <?php echo e(__('vps_cmp_support')); ?></td>
                            <td class="compare-highlight"><i class="fas fa-check-circle"></i> <?php echo __('vps_cmp_support_us'); ?></td>
                            <td><i class="fas fa-minus-circle"></i> <?php echo e(__('vps_cmp_support_them')); ?></td>
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
                <h2><?php echo e(__('vps_cta_title')); ?></h2>
                <p><?php echo e(__('vps_cta_desc')); ?></p>
                <a href="#plans" class="btn-primary"><?php echo e(__('common_view_plans')); ?> <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
