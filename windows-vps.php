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
                        <a href="<?php echo e(SITE_URL); ?>/"><?php echo e(__('breadcrumb_home')); ?></a>
                        <i class="fas fa-chevron-right"></i>
                        <a href="<?php echo e(SITE_URL); ?>/vps/"><?php echo e(__('winvps_breadcrumb_vps')); ?></a>
                        <i class="fas fa-chevron-right"></i>
                        <span><?php echo e(__('winvps_breadcrumb')); ?></span>
                    </div>
                    <h1><?php echo __('winvps_title'); ?></h1>
                    <p class="page-hero-desc">
                        <?php echo e(__('winvps_desc')); ?>
                    </p>
                    <div class="page-hero-ctas">
                        <a href="#plans" class="btn-primary"><?php echo e(__('common_view_plans')); ?> <i class="fas fa-arrow-down"></i></a>
                        <a href="<?php echo e(SITE_URL); ?>/contact-us/" class="btn-secondary"><i class="fas fa-headset"></i> <?php echo e(__('common_talk_to_sales')); ?></a>
                    </div>
                    <div class="page-hero-badges">
                        <div class="hero-badge-item"><i class="fas fa-check"></i> <?php echo e(__('winvps_badge_rdp')); ?></div>
                        <div class="hero-badge-item"><i class="fas fa-check"></i> <?php echo e(__('winvps_badge_nvme')); ?></div>
                        <div class="hero-badge-item"><i class="fas fa-check"></i> <?php echo e(__('winvps_badge_network')); ?></div>
                        <div class="hero-badge-item"><i class="fas fa-check"></i> <?php echo e(__('winvps_badge_deploy')); ?></div>
                        <div class="hero-badge-item"><i class="fas fa-check"></i> <?php echo e(__('winvps_badge_locations')); ?></div>
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
                        <text x="82" y="258" text-anchor="middle" fill="var(--brand-primary)" font-size="10" opacity="0.6">&#8862;</text>
                        <!-- Taskbar icons -->
                        <rect x="102" y="248" width="16" height="14" rx="2" fill="var(--text-tertiary)" opacity="0.15"/>
                        <rect x="122" y="248" width="16" height="14" rx="2" fill="var(--text-tertiary)" opacity="0.15"/>
                        <rect x="142" y="248" width="16" height="14" rx="2" fill="var(--text-tertiary)" opacity="0.15"/>
                        <!-- Clock -->
                        <text x="350" y="258" text-anchor="middle" fill="var(--text-tertiary)" font-size="7" font-family="var(--font-mono)" opacity="0.5">14:32</text>

                        <!-- Desktop icons -->
                        <rect x="78" y="80" width="40" height="40" rx="6" fill="var(--brand-primary)" opacity="0.1"/>
                        <text x="98" y="105" text-anchor="middle" fill="var(--brand-primary)" font-size="16" opacity="0.5">&#128193;</text>
                        <text x="98" y="132" text-anchor="middle" fill="var(--text-tertiary)" font-size="6.5" font-family="var(--font-mono)" opacity="0.5">Files</text>

                        <rect x="138" y="80" width="40" height="40" rx="6" fill="var(--brand-secondary)" opacity="0.1"/>
                        <text x="158" y="105" text-anchor="middle" fill="var(--brand-secondary)" font-size="16" opacity="0.5">&#9881;</text>
                        <text x="158" y="132" text-anchor="middle" fill="var(--text-tertiary)" font-size="6.5" font-family="var(--font-mono)" opacity="0.5">Settings</text>

                        <rect x="78" y="148" width="40" height="40" rx="6" fill="var(--brand-accent)" opacity="0.1"/>
                        <text x="98" y="173" text-anchor="middle" fill="var(--brand-accent)" font-size="16" opacity="0.5">&#128421;</text>
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
            <span class="partners-label"><?php echo e(__('winvps_powered_by')); ?></span>
            <div class="partners-logos">
                <span class="partner-logo"><i class="fab fa-windows"></i> <?php echo e(__('winvps_partner_windows')); ?></span>
                <span class="partner-logo"><i class="fas fa-server"></i> <?php echo e(__('winvps_partner_kvm')); ?></span>
                <span class="partner-logo"><i class="fas fa-hdd"></i> <?php echo e(__('winvps_partner_nvme')); ?></span>
                <span class="partner-logo"><i class="fas fa-shield-alt"></i> <?php echo e(__('winvps_partner_antiddos')); ?></span>
                <span class="partner-logo"><i class="fas fa-network-wired"></i> <?php echo e(__('winvps_partner_network')); ?></span>
            </div>
        </div>
    </section>

    <!-- ═══════════════ PRICING PLANS ═══════════════ -->
    <section class="plans reveal" id="plans">
        <div class="container">
            <div class="section-header">
                <div class="section-tag"><?php echo e(__('winvps_plans_tag')); ?></div>
                <h2><?php echo e(__('winvps_plans_title')); ?></h2>
                <p><?php echo e(__('winvps_plans_desc')); ?></p>
            </div>

            <div class="plans-panel active" data-tab="win-vps">
                <div class="vps-rows-header">
                    <span><i class="fas fa-check-circle"></i> <?php echo e(__('winvps_plan_feat_rdp')); ?></span>
                    <span><i class="fas fa-check-circle"></i> <?php echo e(__('winvps_plan_feat_ipv4')); ?></span>
                    <span><i class="fab fa-windows"></i> <?php echo e(__('winvps_plan_feat_win')); ?></span>
                    <span><i class="fas fa-sync-alt"></i> <?php echo e(__('winvps_plan_feat_renewal')); ?></span>
                </div>
                <div class="vps-rows">
                    <!-- Win VPS 1 -->
                    <div class="vps-row">
                        <div class="vps-row-header">
                            <div class="vps-row-identity">
                                <span class="vps-row-toggle"><i class="fas fa-chevron-down"></i></span>
                                <span class="vps-row-name"><?php echo e(__('winvps_plan1_name')); ?></span>
                                <span class="vps-row-arch"><?php echo e(__('winvps_plan_arch_x86')); ?></span>
                            </div>
                            <div class="vps-row-specs">
                                <div class="vps-row-spec"><span class="vps-row-spec-val"><?php echo e(__('winvps_plan1_cpu')); ?></span><span class="vps-row-spec-label"><?php echo e(__('winvps_spec_label_cpu')); ?></span></div>
                                <div class="vps-row-spec"><span class="vps-row-spec-val"><?php echo e(__('winvps_plan1_ram')); ?></span><span class="vps-row-spec-label"><?php echo e(__('winvps_spec_label_ram')); ?></span></div>
                                <div class="vps-row-spec"><span class="vps-row-spec-val"><?php echo e(__('winvps_plan1_nvme')); ?></span><span class="vps-row-spec-label"><?php echo e(__('winvps_spec_label_nvme')); ?></span></div>
                                <div class="vps-row-spec"><span class="vps-row-spec-val"><?php echo e(__('winvps_plan1_network')); ?></span><span class="vps-row-spec-label"><?php echo e(__('winvps_spec_label_network')); ?></span></div>
                                <div class="vps-row-spec"><span class="vps-row-spec-val"><?php echo e(__('winvps_plan1_traffic')); ?></span><span class="vps-row-spec-label"><?php echo e(__('winvps_spec_label_traffic')); ?></span></div>
                            </div>
                            <div class="vps-row-action">
                                <div class="vps-row-price"><span class="vps-row-amount"><?php echo e(__('winvps_plan1_price')); ?></span><span class="vps-row-cycle"><?php echo e(__('winvps_plan_cycle')); ?></span></div>
                                <a href="<?php echo e(SITE_URL); ?>/contact-us/" class="vps-row-btn"><?php echo e(__('common_order_now')); ?></a>
                            </div>
                        </div>
                        <div class="vps-row-details">
                            <div class="vps-row-details-features">
                                <span><i class="fas fa-check-circle"></i> <?php echo __('winvps_feat_free_antiddos'); ?></span>
                                <span><i class="fas fa-check-circle"></i> <?php echo __('winvps_feat_uptime_sla'); ?></span>
                                <span><i class="fas fa-check-circle"></i> <?php echo __('winvps_feat_full_admin'); ?></span>
                                <span><i class="fas fa-check-circle"></i> <?php echo __('winvps_feat_rdp_included'); ?></span>
                                <span><i class="fas fa-check-circle"></i> <?php echo __('winvps_feat_247_support'); ?></span>
                                <span><i class="fas fa-check-circle"></i> <?php echo __('winvps_feat_dedicated_ip'); ?></span>
                            </div>
                            <div class="vps-row-details-locations">
                                <div class="vps-loc-pills">
                                    <span class="vps-loc-pill"><span class="fi fi-de"></span> <?php echo e(__('winvps_loc_frankfurt')); ?> <em><?php echo e(__('winvps_loc_frankfurt_latency')); ?></em></span>
                                    <span class="vps-loc-pill"><span class="fi fi-nl"></span> <?php echo e(__('winvps_loc_amsterdam')); ?> <em><?php echo e(__('winvps_loc_amsterdam_latency')); ?></em></span>
                                    <span class="vps-loc-pill"><span class="fi fi-gb"></span> <?php echo e(__('winvps_loc_london')); ?> <em><?php echo e(__('winvps_loc_london_latency')); ?></em></span>
                                    <span class="vps-loc-pill"><span class="fi fi-fi"></span> <?php echo e(__('winvps_loc_helsinki')); ?> <em><?php echo e(__('winvps_loc_helsinki_latency')); ?></em></span>
                                    <span class="vps-loc-pill"><span class="fi fi-us"></span> <?php echo e(__('winvps_loc_newyork')); ?> <em><?php echo e(__('winvps_loc_newyork_latency')); ?></em></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Win VPS 2 (Popular) -->
                    <div class="vps-row popular expanded">
                        <span class="vps-row-badge"><?php echo e(__('winvps_best_value')); ?></span>
                        <div class="vps-row-header">
                            <div class="vps-row-identity">
                                <span class="vps-row-toggle"><i class="fas fa-chevron-down"></i></span>
                                <span class="vps-row-name"><?php echo e(__('winvps_plan2_name')); ?></span>
                                <span class="vps-row-arch"><?php echo e(__('winvps_plan_arch_x86')); ?></span>
                            </div>
                            <div class="vps-row-specs">
                                <div class="vps-row-spec"><span class="vps-row-spec-val"><?php echo e(__('winvps_plan2_cpu')); ?></span><span class="vps-row-spec-label"><?php echo e(__('winvps_spec_label_cpu')); ?></span></div>
                                <div class="vps-row-spec"><span class="vps-row-spec-val"><?php echo e(__('winvps_plan2_ram')); ?></span><span class="vps-row-spec-label"><?php echo e(__('winvps_spec_label_ram')); ?></span></div>
                                <div class="vps-row-spec"><span class="vps-row-spec-val"><?php echo e(__('winvps_plan2_nvme')); ?></span><span class="vps-row-spec-label"><?php echo e(__('winvps_spec_label_nvme')); ?></span></div>
                                <div class="vps-row-spec"><span class="vps-row-spec-val"><?php echo e(__('winvps_plan2_network')); ?></span><span class="vps-row-spec-label"><?php echo e(__('winvps_spec_label_network')); ?></span></div>
                                <div class="vps-row-spec"><span class="vps-row-spec-val"><?php echo e(__('winvps_plan2_traffic')); ?></span><span class="vps-row-spec-label"><?php echo e(__('winvps_spec_label_traffic')); ?></span></div>
                            </div>
                            <div class="vps-row-action">
                                <div class="vps-row-price"><span class="vps-row-amount"><?php echo e(__('winvps_plan2_price')); ?></span><span class="vps-row-cycle"><?php echo e(__('winvps_plan_cycle')); ?></span></div>
                                <a href="<?php echo e(SITE_URL); ?>/contact-us/" class="vps-row-btn"><?php echo e(__('common_order_now')); ?></a>
                            </div>
                        </div>
                        <div class="vps-row-details">
                            <div class="vps-row-details-features">
                                <span><i class="fas fa-check-circle"></i> <?php echo __('winvps_feat_free_antiddos'); ?></span>
                                <span><i class="fas fa-check-circle"></i> <?php echo __('winvps_feat_uptime_sla'); ?></span>
                                <span><i class="fas fa-check-circle"></i> <?php echo __('winvps_feat_full_admin'); ?></span>
                                <span><i class="fas fa-check-circle"></i> <?php echo __('winvps_feat_rdp_included'); ?></span>
                                <span><i class="fas fa-check-circle"></i> <?php echo __('winvps_feat_247_support'); ?></span>
                                <span><i class="fas fa-check-circle"></i> <?php echo __('winvps_feat_dedicated_ip'); ?></span>
                            </div>
                            <div class="vps-row-details-locations">
                                <div class="vps-loc-pills">
                                    <span class="vps-loc-pill"><span class="fi fi-de"></span> <?php echo e(__('winvps_loc_frankfurt')); ?> <em><?php echo e(__('winvps_loc_frankfurt_latency')); ?></em></span>
                                    <span class="vps-loc-pill"><span class="fi fi-nl"></span> <?php echo e(__('winvps_loc_amsterdam')); ?> <em><?php echo e(__('winvps_loc_amsterdam_latency')); ?></em></span>
                                    <span class="vps-loc-pill"><span class="fi fi-gb"></span> <?php echo e(__('winvps_loc_london')); ?> <em><?php echo e(__('winvps_loc_london_latency')); ?></em></span>
                                    <span class="vps-loc-pill"><span class="fi fi-fi"></span> <?php echo e(__('winvps_loc_helsinki')); ?> <em><?php echo e(__('winvps_loc_helsinki_latency')); ?></em></span>
                                    <span class="vps-loc-pill"><span class="fi fi-us"></span> <?php echo e(__('winvps_loc_newyork')); ?> <em><?php echo e(__('winvps_loc_newyork_latency')); ?></em></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Win VPS 3 -->
                    <div class="vps-row">
                        <div class="vps-row-header">
                            <div class="vps-row-identity">
                                <span class="vps-row-toggle"><i class="fas fa-chevron-down"></i></span>
                                <span class="vps-row-name"><?php echo e(__('winvps_plan3_name')); ?></span>
                                <span class="vps-row-arch"><?php echo e(__('winvps_plan_arch_x86')); ?></span>
                            </div>
                            <div class="vps-row-specs">
                                <div class="vps-row-spec"><span class="vps-row-spec-val"><?php echo e(__('winvps_plan3_cpu')); ?></span><span class="vps-row-spec-label"><?php echo e(__('winvps_spec_label_cpu')); ?></span></div>
                                <div class="vps-row-spec"><span class="vps-row-spec-val"><?php echo e(__('winvps_plan3_ram')); ?></span><span class="vps-row-spec-label"><?php echo e(__('winvps_spec_label_ram')); ?></span></div>
                                <div class="vps-row-spec"><span class="vps-row-spec-val"><?php echo e(__('winvps_plan3_nvme')); ?></span><span class="vps-row-spec-label"><?php echo e(__('winvps_spec_label_nvme')); ?></span></div>
                                <div class="vps-row-spec"><span class="vps-row-spec-val"><?php echo e(__('winvps_plan3_network')); ?></span><span class="vps-row-spec-label"><?php echo e(__('winvps_spec_label_network')); ?></span></div>
                                <div class="vps-row-spec"><span class="vps-row-spec-val"><?php echo e(__('winvps_plan3_traffic')); ?></span><span class="vps-row-spec-label"><?php echo e(__('winvps_spec_label_traffic')); ?></span></div>
                            </div>
                            <div class="vps-row-action">
                                <div class="vps-row-price"><span class="vps-row-amount"><?php echo e(__('winvps_plan3_price')); ?></span><span class="vps-row-cycle"><?php echo e(__('winvps_plan_cycle')); ?></span></div>
                                <a href="<?php echo e(SITE_URL); ?>/contact-us/" class="vps-row-btn"><?php echo e(__('common_order_now')); ?></a>
                            </div>
                        </div>
                        <div class="vps-row-details">
                            <div class="vps-row-details-features">
                                <span><i class="fas fa-check-circle"></i> <?php echo __('winvps_feat_free_antiddos'); ?></span>
                                <span><i class="fas fa-check-circle"></i> <?php echo __('winvps_feat_uptime_sla'); ?></span>
                                <span><i class="fas fa-check-circle"></i> <?php echo __('winvps_feat_full_admin'); ?></span>
                                <span><i class="fas fa-check-circle"></i> <?php echo __('winvps_feat_rdp_included'); ?></span>
                                <span><i class="fas fa-check-circle"></i> <?php echo __('winvps_feat_247_support'); ?></span>
                                <span><i class="fas fa-check-circle"></i> <?php echo __('winvps_feat_dedicated_ip'); ?></span>
                            </div>
                            <div class="vps-row-details-locations">
                                <div class="vps-loc-pills">
                                    <span class="vps-loc-pill"><span class="fi fi-de"></span> <?php echo e(__('winvps_loc_frankfurt')); ?> <em><?php echo e(__('winvps_loc_frankfurt_latency')); ?></em></span>
                                    <span class="vps-loc-pill"><span class="fi fi-nl"></span> <?php echo e(__('winvps_loc_amsterdam')); ?> <em><?php echo e(__('winvps_loc_amsterdam_latency')); ?></em></span>
                                    <span class="vps-loc-pill"><span class="fi fi-gb"></span> <?php echo e(__('winvps_loc_london')); ?> <em><?php echo e(__('winvps_loc_london_latency')); ?></em></span>
                                    <span class="vps-loc-pill"><span class="fi fi-fi"></span> <?php echo e(__('winvps_loc_helsinki')); ?> <em><?php echo e(__('winvps_loc_helsinki_latency')); ?></em></span>
                                    <span class="vps-loc-pill"><span class="fi fi-us"></span> <?php echo e(__('winvps_loc_newyork')); ?> <em><?php echo e(__('winvps_loc_newyork_latency')); ?></em></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Win VPS 4 -->
                    <div class="vps-row">
                        <div class="vps-row-header">
                            <div class="vps-row-identity">
                                <span class="vps-row-toggle"><i class="fas fa-chevron-down"></i></span>
                                <span class="vps-row-name"><?php echo e(__('winvps_plan4_name')); ?></span>
                                <span class="vps-row-arch"><?php echo e(__('winvps_plan_arch_x86')); ?></span>
                            </div>
                            <div class="vps-row-specs">
                                <div class="vps-row-spec"><span class="vps-row-spec-val"><?php echo e(__('winvps_plan4_cpu')); ?></span><span class="vps-row-spec-label"><?php echo e(__('winvps_spec_label_cpu')); ?></span></div>
                                <div class="vps-row-spec"><span class="vps-row-spec-val"><?php echo e(__('winvps_plan4_ram')); ?></span><span class="vps-row-spec-label"><?php echo e(__('winvps_spec_label_ram')); ?></span></div>
                                <div class="vps-row-spec"><span class="vps-row-spec-val"><?php echo e(__('winvps_plan4_nvme')); ?></span><span class="vps-row-spec-label"><?php echo e(__('winvps_spec_label_nvme')); ?></span></div>
                                <div class="vps-row-spec"><span class="vps-row-spec-val"><?php echo e(__('winvps_plan4_network')); ?></span><span class="vps-row-spec-label"><?php echo e(__('winvps_spec_label_network')); ?></span></div>
                                <div class="vps-row-spec"><span class="vps-row-spec-val"><?php echo e(__('winvps_plan4_traffic')); ?></span><span class="vps-row-spec-label"><?php echo e(__('winvps_spec_label_traffic')); ?></span></div>
                            </div>
                            <div class="vps-row-action">
                                <div class="vps-row-price"><span class="vps-row-amount"><?php echo e(__('winvps_plan4_price')); ?></span><span class="vps-row-cycle"><?php echo e(__('winvps_plan_cycle')); ?></span></div>
                                <a href="<?php echo e(SITE_URL); ?>/contact-us/" class="vps-row-btn"><?php echo e(__('common_order_now')); ?></a>
                            </div>
                        </div>
                        <div class="vps-row-details">
                            <div class="vps-row-details-features">
                                <span><i class="fas fa-check-circle"></i> <?php echo __('winvps_feat_free_antiddos'); ?></span>
                                <span><i class="fas fa-check-circle"></i> <?php echo __('winvps_feat_uptime_sla'); ?></span>
                                <span><i class="fas fa-check-circle"></i> <?php echo __('winvps_feat_full_admin'); ?></span>
                                <span><i class="fas fa-check-circle"></i> <?php echo __('winvps_feat_rdp_included'); ?></span>
                                <span><i class="fas fa-check-circle"></i> <?php echo __('winvps_feat_247_support'); ?></span>
                                <span><i class="fas fa-check-circle"></i> <?php echo __('winvps_feat_dedicated_ip'); ?></span>
                            </div>
                            <div class="vps-row-details-locations">
                                <div class="vps-loc-pills">
                                    <span class="vps-loc-pill"><span class="fi fi-de"></span> <?php echo e(__('winvps_loc_frankfurt')); ?> <em><?php echo e(__('winvps_loc_frankfurt_latency')); ?></em></span>
                                    <span class="vps-loc-pill"><span class="fi fi-nl"></span> <?php echo e(__('winvps_loc_amsterdam')); ?> <em><?php echo e(__('winvps_loc_amsterdam_latency')); ?></em></span>
                                    <span class="vps-loc-pill"><span class="fi fi-gb"></span> <?php echo e(__('winvps_loc_london')); ?> <em><?php echo e(__('winvps_loc_london_latency')); ?></em></span>
                                    <span class="vps-loc-pill"><span class="fi fi-fi"></span> <?php echo e(__('winvps_loc_helsinki')); ?> <em><?php echo e(__('winvps_loc_helsinki_latency')); ?></em></span>
                                    <span class="vps-loc-pill"><span class="fi fi-us"></span> <?php echo e(__('winvps_loc_newyork')); ?> <em><?php echo e(__('winvps_loc_newyork_latency')); ?></em></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="article-callout">
                <i class="fas fa-info-circle"></i>
                <div>
                    <?php echo __('winvps_callout'); ?>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ SUPPORTED WINDOWS OS ═══════════════ -->
    <section class="win-os reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag"><?php echo e(__('winvps_os_tag')); ?></div>
                <h2><?php echo e(__('winvps_os_title')); ?></h2>
                <p><?php echo e(__('winvps_os_desc')); ?></p>
            </div>

            <div class="os-ticker-wrap">
                <div class="os-ticker">
                    <div class="os-ticker-track">
                        <div class="os-ticker-item">
                            <div class="os-ticker-icon"><i class="fab fa-windows"></i></div>
                            <div class="os-ticker-info">
                                <span class="os-ticker-name"><?php echo e(__('winvps_os_server2019')); ?></span>
                                <span class="os-ticker-ver"><?php echo e(__('winvps_os_edition_server')); ?></span>
                            </div>
                        </div>
                        <div class="os-ticker-item">
                            <div class="os-ticker-icon icon-green"><i class="fab fa-windows"></i></div>
                            <div class="os-ticker-info">
                                <span class="os-ticker-name"><?php echo e(__('winvps_os_server2022')); ?></span>
                                <span class="os-ticker-ver"><?php echo e(__('winvps_os_edition_server')); ?></span>
                            </div>
                        </div>
                        <div class="os-ticker-item">
                            <div class="os-ticker-icon icon-purple"><i class="fab fa-windows"></i></div>
                            <div class="os-ticker-info">
                                <span class="os-ticker-name"><?php echo e(__('winvps_os_win10')); ?></span>
                                <span class="os-ticker-ver"><?php echo e(__('winvps_os_edition_desktop')); ?></span>
                            </div>
                        </div>
                        <div class="os-ticker-item">
                            <div class="os-ticker-icon icon-amber"><i class="fab fa-windows"></i></div>
                            <div class="os-ticker-info">
                                <span class="os-ticker-name"><?php echo e(__('winvps_os_win11')); ?></span>
                                <span class="os-ticker-ver"><?php echo e(__('winvps_os_edition_desktop')); ?></span>
                            </div>
                        </div>
                        <!-- Duplicate set 1 for seamless loop -->
                        <div class="os-ticker-item">
                            <div class="os-ticker-icon"><i class="fab fa-windows"></i></div>
                            <div class="os-ticker-info">
                                <span class="os-ticker-name"><?php echo e(__('winvps_os_server2019')); ?></span>
                                <span class="os-ticker-ver"><?php echo e(__('winvps_os_edition_server')); ?></span>
                            </div>
                        </div>
                        <div class="os-ticker-item">
                            <div class="os-ticker-icon icon-green"><i class="fab fa-windows"></i></div>
                            <div class="os-ticker-info">
                                <span class="os-ticker-name"><?php echo e(__('winvps_os_server2022')); ?></span>
                                <span class="os-ticker-ver"><?php echo e(__('winvps_os_edition_server')); ?></span>
                            </div>
                        </div>
                        <div class="os-ticker-item">
                            <div class="os-ticker-icon icon-purple"><i class="fab fa-windows"></i></div>
                            <div class="os-ticker-info">
                                <span class="os-ticker-name"><?php echo e(__('winvps_os_win10')); ?></span>
                                <span class="os-ticker-ver"><?php echo e(__('winvps_os_edition_desktop')); ?></span>
                            </div>
                        </div>
                        <div class="os-ticker-item">
                            <div class="os-ticker-icon icon-amber"><i class="fab fa-windows"></i></div>
                            <div class="os-ticker-info">
                                <span class="os-ticker-name"><?php echo e(__('winvps_os_win11')); ?></span>
                                <span class="os-ticker-ver"><?php echo e(__('winvps_os_edition_desktop')); ?></span>
                            </div>
                        </div>
                        <!-- Duplicate set 2 -->
                        <div class="os-ticker-item">
                            <div class="os-ticker-icon"><i class="fab fa-windows"></i></div>
                            <div class="os-ticker-info">
                                <span class="os-ticker-name"><?php echo e(__('winvps_os_server2019')); ?></span>
                                <span class="os-ticker-ver"><?php echo e(__('winvps_os_edition_server')); ?></span>
                            </div>
                        </div>
                        <div class="os-ticker-item">
                            <div class="os-ticker-icon icon-green"><i class="fab fa-windows"></i></div>
                            <div class="os-ticker-info">
                                <span class="os-ticker-name"><?php echo e(__('winvps_os_server2022')); ?></span>
                                <span class="os-ticker-ver"><?php echo e(__('winvps_os_edition_server')); ?></span>
                            </div>
                        </div>
                        <div class="os-ticker-item">
                            <div class="os-ticker-icon icon-purple"><i class="fab fa-windows"></i></div>
                            <div class="os-ticker-info">
                                <span class="os-ticker-name"><?php echo e(__('winvps_os_win10')); ?></span>
                                <span class="os-ticker-ver"><?php echo e(__('winvps_os_edition_desktop')); ?></span>
                            </div>
                        </div>
                        <div class="os-ticker-item">
                            <div class="os-ticker-icon icon-amber"><i class="fab fa-windows"></i></div>
                            <div class="os-ticker-info">
                                <span class="os-ticker-name"><?php echo e(__('winvps_os_win11')); ?></span>
                                <span class="os-ticker-ver"><?php echo e(__('winvps_os_edition_desktop')); ?></span>
                            </div>
                        </div>
                        <!-- Duplicate set 3 -->
                        <div class="os-ticker-item">
                            <div class="os-ticker-icon"><i class="fab fa-windows"></i></div>
                            <div class="os-ticker-info">
                                <span class="os-ticker-name"><?php echo e(__('winvps_os_server2019')); ?></span>
                                <span class="os-ticker-ver"><?php echo e(__('winvps_os_edition_server')); ?></span>
                            </div>
                        </div>
                        <div class="os-ticker-item">
                            <div class="os-ticker-icon icon-green"><i class="fab fa-windows"></i></div>
                            <div class="os-ticker-info">
                                <span class="os-ticker-name"><?php echo e(__('winvps_os_server2022')); ?></span>
                                <span class="os-ticker-ver"><?php echo e(__('winvps_os_edition_server')); ?></span>
                            </div>
                        </div>
                        <div class="os-ticker-item">
                            <div class="os-ticker-icon icon-purple"><i class="fab fa-windows"></i></div>
                            <div class="os-ticker-info">
                                <span class="os-ticker-name"><?php echo e(__('winvps_os_win10')); ?></span>
                                <span class="os-ticker-ver"><?php echo e(__('winvps_os_edition_desktop')); ?></span>
                            </div>
                        </div>
                        <div class="os-ticker-item">
                            <div class="os-ticker-icon icon-amber"><i class="fab fa-windows"></i></div>
                            <div class="os-ticker-info">
                                <span class="os-ticker-name"><?php echo e(__('winvps_os_win11')); ?></span>
                                <span class="os-ticker-ver"><?php echo e(__('winvps_os_edition_desktop')); ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ USE CASES ═══════════════ -->
    <section class="win-usecases reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag"><?php echo e(__('winvps_usecases_tag')); ?></div>
                <h2><?php echo e(__('winvps_usecases_title')); ?></h2>
                <p><?php echo e(__('winvps_usecases_desc')); ?></p>
            </div>

            <div class="usecase-grid usecase-grid--3">
                <div class="feature-card">
                    <div class="feature-icon"><i class="fas fa-desktop"></i></div>
                    <h4><?php echo e(__('winvps_usecase_rdp_title')); ?></h4>
                    <p><?php echo e(__('winvps_usecase_rdp_desc')); ?></p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon icon-green"><i class="fas fa-chart-line"></i></div>
                    <h4><?php echo e(__('winvps_usecase_trading_title')); ?></h4>
                    <p><?php echo e(__('winvps_usecase_trading_desc')); ?></p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon icon-purple"><i class="fas fa-gamepad"></i></div>
                    <h4><?php echo e(__('winvps_usecase_game_title')); ?></h4>
                    <p><?php echo e(__('winvps_usecase_game_desc')); ?></p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon icon-amber"><i class="fas fa-building"></i></div>
                    <h4><?php echo e(__('winvps_usecase_enterprise_title')); ?></h4>
                    <p><?php echo e(__('winvps_usecase_enterprise_desc')); ?></p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon"><i class="fas fa-cloud-upload-alt"></i></div>
                    <h4><?php echo e(__('winvps_usecase_webhost_title')); ?></h4>
                    <p><?php echo e(__('winvps_usecase_webhost_desc')); ?></p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon icon-green"><i class="fas fa-robot"></i></div>
                    <h4><?php echo e(__('winvps_usecase_automation_title')); ?></h4>
                    <p><?php echo e(__('winvps_usecase_automation_desc')); ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ GLOBAL LOCATIONS ═══════════════ -->
    <section class="locations-section reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag"><?php echo e(__('winvps_locations_tag')); ?></div>
                <h2><?php echo e(__('winvps_locations_title')); ?></h2>
                <p><?php echo e(__('winvps_locations_desc')); ?></p>
            </div>

            <div class="locations-tabs">
                <button class="loc-tab active" data-loc-target="winvps-europe"><i class="fas fa-globe-europe"></i> <?php echo e(__('winvps_loc_europe')); ?></button>
                <button class="loc-tab" data-loc-target="winvps-north-america"><i class="fas fa-globe-americas"></i> <?php echo e(__('winvps_loc_north_america')); ?></button>
                <button class="loc-tab" data-loc-target="winvps-asia"><i class="fas fa-globe-asia"></i> <?php echo e(__('winvps_loc_asia')); ?></button>
            </div>

            <div class="locations-panels">
                <div class="loc-panel active" id="winvps-europe">
                    <div class="loc-card-grid">
                        <a class="location-card location-card--active"><span class="fi fi-de"></span> <?php echo e(__('country_germany')); ?></a>
                        <a class="location-card"><span class="fi fi-nl"></span> <?php echo e(__('country_netherlands')); ?></a>
                        <a class="location-card"><span class="fi fi-gb"></span> <?php echo e(__('country_united_kingdom')); ?></a>
                        <a class="location-card"><span class="fi fi-fi"></span> <?php echo e(__('country_finland')); ?></a>
                        <a class="location-card"><span class="fi fi-fr"></span> <?php echo e(__('country_france')); ?></a>
                        <a class="location-card"><span class="fi fi-pl"></span> <?php echo e(__('country_poland')); ?></a>
                        <a class="location-card"><span class="fi fi-ro"></span> <?php echo e(__('country_romania')); ?></a>
                        <a class="location-card"><span class="fi fi-se"></span> <?php echo e(__('country_sweden')); ?></a>
                    </div>
                </div>
                <div class="loc-panel" id="winvps-north-america">
                    <div class="loc-card-grid">
                        <a class="location-card"><span class="fi fi-us"></span> <?php echo e(__('country_usa')); ?></a>
                        <a class="location-card"><span class="fi fi-ca"></span> <?php echo e(__('country_canada')); ?></a>
                    </div>
                </div>
                <div class="loc-panel" id="winvps-asia">
                    <div class="loc-card-grid">
                        <a class="location-card"><span class="fi fi-sg"></span> <?php echo e(__('country_singapore')); ?></a>
                        <a class="location-card"><span class="fi fi-jp"></span> <?php echo e(__('country_japan')); ?></a>
                        <a class="location-card"><span class="fi fi-in"></span> <?php echo e(__('country_india')); ?></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ FAQ ═══════════════ -->
    <section class="faq-section reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag"><?php echo e(__('winvps_faq_tag')); ?></div>
                <h2><?php echo e(__('winvps_faq_title')); ?></h2>
                <p><?php echo e(__('winvps_faq_desc')); ?></p>
            </div>

            <div class="faq-layout faq-layout--full">
                <div class="faq-panels">
                    <div class="faq-panel active" id="faq-winvps">
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('winvps_faq_q1')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('winvps_faq_a1')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('winvps_faq_q2')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('winvps_faq_a2')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('winvps_faq_q3')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('winvps_faq_a3')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('winvps_faq_q4')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('winvps_faq_a4')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('winvps_faq_q5')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('winvps_faq_a5')); ?></p></div></div>
                    </div>
                </div>
            </div>

            <div class="faq-actions">
                <a href="<?php echo e(SITE_URL); ?>/contact-us/" class="btn-primary"><i class="fas fa-headset"></i> <?php echo e(__('common_open_ticket')); ?></a>
                <a href="<?php echo e(SITE_URL); ?>/faq" class="btn-secondary"><?php echo e(__('common_browse_faq')); ?> <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </section>

    <!-- ═══════════════ BOTTOM CTA ═══════════════ -->
    <section class="promo-cta reveal">
        <div class="container">
            <div class="promo-cta-inner">
                <div class="promo-cta-glow"></div>
                <div class="promo-cta-icon"><i class="fab fa-windows"></i></div>
                <h2><?php echo e(__('winvps_cta_title')); ?></h2>
                <p><?php echo e(__('winvps_cta_desc')); ?></p>
                <a href="#plans" class="btn-primary"><?php echo e(__('common_view_plans')); ?> <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
