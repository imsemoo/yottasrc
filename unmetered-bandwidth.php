<?php
/**
 * YottaSrc — Truly Unmetered Bandwidth
 * =====================================
 * Template: Network bandwidth showcase — distinct from dedicated/cloud templates
 * Sections: Immersive Hero (capsules + terminal) → Partners → Metered vs Unmetered Compare
 *           → Tier Pricing → World Map (carriers/POPs) → 3-Step Deploy
 *           → Feature Comparison Table → Use Case Bento → API Terminal → FAQ → CTA
 *
 * Built entirely with existing CSS classes — zero new CSS, zero new JS.
 */
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/topbar.php';
?>

    <!-- ═══════════════ IMMERSIVE HERO ═══════════════ -->
    <section class="page-hero cloud-hero cloud-hero-immersive">
        <div class="cloud-hero-glow"></div>
        <div class="container">
            <div class="cloud-hero-center">
                <div class="page-breadcrumb">
                    <a href="<?php echo e(SITE_URL); ?>/"><?php echo e(__('breadcrumb_home')); ?></a>
                    <i class="fas fa-chevron-right"></i>
                    <span><?php echo e(__('bandwidth_breadcrumb')); ?></span>
                </div>
                <h1><?php echo __('bandwidth_title'); ?></h1>
                <p class="cloud-hero-desc"><?php echo e(__('bandwidth_desc')); ?></p>
                <div class="page-hero-ctas">
                    <a href="<?php echo e(SITE_URL); ?>/contact-us/" class="btn-primary"><i class="fas fa-headset"></i> <?php echo e(__('bandwidth_hero_cta_sales')); ?></a>
                    <a href="#tiers" class="btn-secondary"><?php echo e(__('bandwidth_hero_cta_tiers')); ?> <i class="fas fa-arrow-down"></i></a>
                </div>
            </div>

            <!-- Floating metric capsules -->
            <div class="cloud-hero-metrics">
                <div class="cloud-capsule">
                    <div class="capsule-icon"><i class="fas fa-infinity"></i></div>
                    <div class="capsule-info">
                        <span class="capsule-val"><?php echo e(__('bandwidth_metric_unmetered_val')); ?></span>
                        <span class="capsule-label"><?php echo e(__('bandwidth_metric_unmetered_label')); ?></span>
                    </div>
                </div>
                <div class="cloud-capsule accent">
                    <div class="capsule-icon"><i class="fas fa-tachometer-alt"></i></div>
                    <div class="capsule-info">
                        <span class="capsule-val"><?php echo e(__('bandwidth_metric_port_val')); ?></span>
                        <span class="capsule-label"><?php echo e(__('bandwidth_metric_port_label')); ?></span>
                    </div>
                </div>
                <div class="cloud-capsule">
                    <div class="capsule-icon"><i class="fas fa-network-wired"></i></div>
                    <div class="capsule-info">
                        <span class="capsule-val"><?php echo e(__('bandwidth_metric_backbone_val')); ?></span>
                        <span class="capsule-label"><?php echo e(__('bandwidth_metric_backbone_label')); ?></span>
                    </div>
                </div>
                <div class="cloud-capsule">
                    <div class="capsule-icon"><i class="fas fa-globe"></i></div>
                    <div class="capsule-info">
                        <span class="capsule-val"><?php echo e(__('bandwidth_metric_pops_val')); ?></span>
                        <span class="capsule-label"><?php echo e(__('bandwidth_metric_pops_label')); ?></span>
                    </div>
                </div>
            </div>

            <!-- Live bandwidth terminal preview -->
            <div class="cloud-hero-terminal">
                <div class="cloud-term-header">
                    <div class="cloud-term-dots"><span></span><span></span><span></span></div>
                    <span class="cloud-term-title">~ bandwidth-monitor</span>
                </div>
                <div class="cloud-term-body">
                    <div class="cloud-term-line">
                        <span class="cloud-term-prompt">$</span>
                        <span class="cloud-term-cmd">yottasrc bandwidth status</span>
                        <span class="cloud-term-flag">--port</span><span class="cloud-term-eq">=</span><span class="cloud-term-val">10G</span>
                        <span class="cloud-term-flag">--region</span><span class="cloud-term-eq">=</span><span class="cloud-term-val">eu-de-fra</span>
                    </div>
                    <div class="cloud-term-line output">
                        <span class="cloud-term-ok">✓</span> Sustained: <strong>9.94 Gbit/s</strong> · Cap: <strong>∞ Unmetered</strong> · Throttling: <span class="cloud-term-status">None</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ PARTNERS — TIER-1 CARRIERS ═══════════════ -->
    <section class="partners">
        <div class="container">
            <span class="partners-label"><?php echo e(__('bandwidth_partners_label')); ?></span>
            <div class="partners-logos">
                <span class="partner-logo">Cogent</span>
                <span class="partner-logo">GTT</span>
                <span class="partner-logo">NTT</span>
                <span class="partner-logo">Lumen</span>
                <span class="partner-logo">Telia</span>
                <span class="partner-logo">Arelion</span>
                <span class="partner-logo">RETN</span>
                <span class="partner-logo">HE.net</span>
            </div>
        </div>
    </section>

    <!-- ═══════════════ KILLER COMPARISON: METERED vs TRULY UNMETERED ═══════════════ -->
    <section class="cloud-billing reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag"><?php echo e(__('bandwidth_compare_tag')); ?></div>
                <h2><?php echo e(__('bandwidth_compare_title')); ?></h2>
                <p><?php echo e(__('bandwidth_compare_desc')); ?></p>
            </div>
            <div class="cloud-billing-compare">
                <div class="cloud-billing-card cloud-billing-old">
                    <div class="cloud-billing-label"><?php echo e(__('bandwidth_compare_old_label')); ?></div>
                    <ul>
                        <li><i class="fas fa-times"></i> <?php echo e(__('bandwidth_compare_old_1')); ?></li>
                        <li><i class="fas fa-times"></i> <?php echo e(__('bandwidth_compare_old_2')); ?></li>
                        <li><i class="fas fa-times"></i> <?php echo e(__('bandwidth_compare_old_3')); ?></li>
                        <li><i class="fas fa-times"></i> <?php echo e(__('bandwidth_compare_old_4')); ?></li>
                        <li><i class="fas fa-times"></i> <?php echo e(__('bandwidth_compare_old_5')); ?></li>
                    </ul>
                </div>
                <div class="cloud-billing-vs">vs</div>
                <div class="cloud-billing-card cloud-billing-new">
                    <div class="cloud-billing-label"><?php echo e(__('bandwidth_compare_new_label')); ?></div>
                    <ul>
                        <li><i class="fas fa-check"></i> <?php echo e(__('bandwidth_compare_new_1')); ?></li>
                        <li><i class="fas fa-check"></i> <?php echo e(__('bandwidth_compare_new_2')); ?></li>
                        <li><i class="fas fa-check"></i> <?php echo e(__('bandwidth_compare_new_3')); ?></li>
                        <li><i class="fas fa-check"></i> <?php echo e(__('bandwidth_compare_new_4')); ?></li>
                        <li><i class="fas fa-check"></i> <?php echo e(__('bandwidth_compare_new_5')); ?></li>
                    </ul>
                    <div class="cloud-billing-highlight">
                        <span class="cloud-billing-from"><?php echo e(__('bandwidth_compare_from')); ?></span>
                        <span class="cloud-billing-price">∞<small><?php echo e(__('bandwidth_compare_price_suffix')); ?></small></span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ BANDWIDTH TIERS TABLE ═══════════════ -->
    <section class="cloud-pricing reveal" id="tiers">
        <div class="container">
            <div class="section-header">
                <div class="section-tag"><?php echo e(__('bandwidth_tiers_tag')); ?></div>
                <h2><?php echo e(__('bandwidth_tiers_title')); ?></h2>
                <p><?php echo e(__('bandwidth_tiers_desc')); ?></p>
            </div>

            <div class="cloud-table-wrap">
                <table class="cloud-table">
                    <thead>
                        <tr>
                            <th><?php echo e(__('bandwidth_table_tier')); ?></th>
                            <th><?php echo e(__('bandwidth_table_port')); ?></th>
                            <th><?php echo e(__('bandwidth_table_traffic')); ?></th>
                            <th><?php echo e(__('bandwidth_table_burst')); ?></th>
                            <th><?php echo e(__('bandwidth_table_best_for')); ?></th>
                            <th><?php echo e(__('bandwidth_table_price')); ?></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong><?php echo e(__('bandwidth_tier1_name')); ?></strong></td>
                            <td><strong><?php echo e(__('bandwidth_tier1_port')); ?></strong></td>
                            <td><i class="fas fa-infinity" style="color: var(--brand-secondary);"></i> <?php echo e(__('bandwidth_tier1_traffic')); ?></td>
                            <td><?php echo e(__('bandwidth_tier1_burst')); ?></td>
                            <td><?php echo e(__('bandwidth_tier1_best')); ?></td>
                            <td><span class="cloud-price-mo"><?php echo e(__('bandwidth_tier1_price')); ?><small><?php echo e(__('bandwidth_per_month')); ?></small></span></td>
                            <td><a href="<?php echo e(SITE_URL); ?>/contact-us/" class="cloud-buy"><?php echo e(__('bandwidth_table_order')); ?></a></td>
                        </tr>
                        <tr>
                            <td><strong><?php echo e(__('bandwidth_tier2_name')); ?></strong></td>
                            <td><strong><?php echo e(__('bandwidth_tier2_port')); ?></strong></td>
                            <td><i class="fas fa-infinity" style="color: var(--brand-secondary);"></i> <?php echo e(__('bandwidth_tier2_traffic')); ?></td>
                            <td><?php echo e(__('bandwidth_tier2_burst')); ?></td>
                            <td><?php echo e(__('bandwidth_tier2_best')); ?></td>
                            <td><span class="cloud-price-mo"><?php echo e(__('bandwidth_tier2_price')); ?><small><?php echo e(__('bandwidth_per_month')); ?></small></span></td>
                            <td><a href="<?php echo e(SITE_URL); ?>/contact-us/" class="cloud-buy"><?php echo e(__('bandwidth_table_order')); ?></a></td>
                        </tr>
                        <tr>
                            <td><strong><?php echo e(__('bandwidth_tier3_name')); ?></strong></td>
                            <td><strong><?php echo e(__('bandwidth_tier3_port')); ?></strong></td>
                            <td><i class="fas fa-infinity" style="color: var(--brand-secondary);"></i> <?php echo e(__('bandwidth_tier3_traffic')); ?></td>
                            <td><?php echo e(__('bandwidth_tier3_burst')); ?></td>
                            <td><?php echo e(__('bandwidth_tier3_best')); ?></td>
                            <td><span class="cloud-price-mo"><?php echo e(__('bandwidth_tier3_price')); ?><small><?php echo e(__('bandwidth_per_month')); ?></small></span></td>
                            <td><a href="<?php echo e(SITE_URL); ?>/contact-us/" class="cloud-buy"><?php echo e(__('bandwidth_table_order')); ?></a></td>
                        </tr>
                        <tr class="cloud-row-highlight">
                            <td><strong><?php echo e(__('bandwidth_tier4_name')); ?></strong> <span class="cloud-popular"><?php echo e(__('bandwidth_table_popular')); ?></span></td>
                            <td><strong><?php echo e(__('bandwidth_tier4_port')); ?></strong></td>
                            <td><i class="fas fa-infinity" style="color: var(--brand-secondary);"></i> <?php echo e(__('bandwidth_tier4_traffic')); ?></td>
                            <td><?php echo e(__('bandwidth_tier4_burst')); ?></td>
                            <td><?php echo e(__('bandwidth_tier4_best')); ?></td>
                            <td><span class="cloud-price-mo"><?php echo e(__('bandwidth_tier4_price')); ?><small><?php echo e(__('bandwidth_per_month')); ?></small></span></td>
                            <td><a href="<?php echo e(SITE_URL); ?>/contact-us/" class="cloud-buy"><?php echo e(__('bandwidth_table_order')); ?></a></td>
                        </tr>
                        <tr>
                            <td><strong><?php echo e(__('bandwidth_tier5_name')); ?></strong></td>
                            <td><strong><?php echo e(__('bandwidth_tier5_port')); ?></strong></td>
                            <td><i class="fas fa-infinity" style="color: var(--brand-secondary);"></i> <?php echo e(__('bandwidth_tier5_traffic')); ?></td>
                            <td><?php echo e(__('bandwidth_tier5_burst')); ?></td>
                            <td><?php echo e(__('bandwidth_tier5_best')); ?></td>
                            <td><span class="cloud-price-mo"><?php echo e(__('bandwidth_tier5_price')); ?></span></td>
                            <td><a href="<?php echo e(SITE_URL); ?>/contact-us/" class="cloud-buy"><?php echo e(__('bandwidth_table_quote')); ?></a></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="cloud-note">
                <p><i class="fas fa-info-circle"></i> <?php echo __('bandwidth_tiers_note', ['url' => e(SITE_URL) . '/contact-us/']); ?></p>
            </div>
        </div>
    </section>

    <!-- ═══════════════ INTERACTIVE WORLD MAP — CARRIER ROUTES ═══════════════ -->
    <section class="global reveal">
        <div class="container">
            <div class="global-layout">
                <div class="global-content">
                    <div class="section-tag"><?php echo e(__('bandwidth_map_tag')); ?></div>
                    <h2 class="global-title"><?php echo e(__('bandwidth_map_title')); ?></h2>
                    <p class="global-desc"><?php echo e(__('bandwidth_map_desc')); ?></p>

                    <div class="global-stats">
                        <div class="global-stat">
                            <div class="stat-number"><?php echo e(__('bandwidth_metric_pops_val')); ?></div>
                            <div class="stat-label"><?php echo e(__('bandwidth_metric_pops_label')); ?></div>
                        </div>
                        <div class="global-stat">
                            <div class="stat-number"><?php echo e(__('bandwidth_metric_backbone_val')); ?></div>
                            <div class="stat-label"><?php echo e(__('bandwidth_metric_backbone_label')); ?></div>
                        </div>
                        <div class="global-stat">
                            <div class="stat-number"><?php echo e(__('bandwidth_map_stat_carriers_val')); ?></div>
                            <div class="stat-label"><?php echo e(__('bandwidth_map_stat_carriers_label')); ?></div>
                        </div>
                        <div class="global-stat">
                            <div class="stat-number"><?php echo e(__('bandwidth_map_stat_uptime_val')); ?></div>
                            <div class="stat-label"><?php echo e(__('bandwidth_map_stat_uptime_label')); ?></div>
                        </div>
                    </div>

                    <a href="<?php echo e(SITE_URL); ?>/contact-us/" class="btn-secondary global-cta">
                        <?php echo e(__('bandwidth_map_cta')); ?> <i class="fas fa-arrow-right"></i>
                    </a>
                </div>

                <div class="global-map-visual">
                <div class="dc-map" id="dcMap">
                    <svg class="dc-map-svg" viewBox="0 0 1000 500" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg">
                        <defs>
                            <filter id="nodeGlow" x="-200%" y="-200%" width="500%" height="500%">
                                <feGaussianBlur in="SourceGraphic" stdDeviation="5" result="blur"/>
                                <feMerge><feMergeNode in="blur"/><feMergeNode in="SourceGraphic"/></feMerge>
                            </filter>
                            <filter id="hqGlow" x="-200%" y="-200%" width="500%" height="500%">
                                <feGaussianBlur in="SourceGraphic" stdDeviation="9" result="blur"/>
                                <feMerge><feMergeNode in="blur"/><feMergeNode in="SourceGraphic"/></feMerge>
                            </filter>
                        </defs>

                        <?php include __DIR__ . '/includes/world-map-paths.php'; ?>

                        <!-- Carrier route lines -->
                        <g class="dc-map-connections">
                            <path class="dc-connection-glow" d="M572,127 Q548,105 524,111"/>
                            <path class="dc-connection" d="M572,127 Q548,105 524,111"/>
                            <path class="dc-connection-glow" d="M572,127 Q430,90 285,142"/>
                            <path class="dc-connection" d="M572,127 Q430,90 285,142"/>
                            <path class="dc-connection-glow" d="M572,127 Q640,140 703,197"/>
                            <path class="dc-connection" d="M572,127 Q640,140 703,197"/>
                            <path class="dc-connection-glow" d="M572,127 Q730,95 888,151"/>
                            <path class="dc-connection" d="M572,127 Q730,95 888,151"/>
                            <path class="dc-connection-glow" d="M285,142 Q310,230 371,315"/>
                            <path class="dc-connection" d="M285,142 Q310,230 371,315"/>
                            <path class="dc-connection-glow" d="M703,197 Q750,215 788,246"/>
                            <path class="dc-connection" d="M703,197 Q750,215 788,246"/>
                            <path class="dc-connection-glow" d="M572,127 Q620,150 654,180"/>
                            <path class="dc-connection" d="M572,127 Q620,150 654,180"/>
                            <path class="dc-connection-glow" d="M888,151 Q900,250 920,344"/>
                            <path class="dc-connection" d="M888,151 Q900,250 920,344"/>
                        </g>

                        <!-- POP markers -->
                        <g class="dc-map-nodes">
                            <g class="dc-node dc-node-hq" data-dc="Romania (HQ)">
                                <circle cx="572" cy="127" r="18" class="dc-ring"/>
                                <circle cx="572" cy="127" r="9" class="dc-glow" filter="url(#hqGlow)"/>
                                <circle cx="572" cy="127" r="4.5" class="dc-dot"/>
                            </g>
                            <g class="dc-node" data-dc="Germany — Frankfurt" style="animation-delay:.2s">
                                <circle cx="524" cy="111" r="12" class="dc-ring" style="animation-delay:.2s"/>
                                <circle cx="524" cy="111" r="5" class="dc-glow" filter="url(#nodeGlow)"/>
                                <circle cx="524" cy="111" r="2.5" class="dc-dot"/>
                            </g>
                            <g class="dc-node" data-dc="Netherlands — Amsterdam" style="animation-delay:.4s">
                                <circle cx="514" cy="104" r="12" class="dc-ring" style="animation-delay:.4s"/>
                                <circle cx="514" cy="104" r="5" class="dc-glow" filter="url(#nodeGlow)"/>
                                <circle cx="514" cy="104" r="2.5" class="dc-dot"/>
                            </g>
                            <g class="dc-node" data-dc="France — Paris" style="animation-delay:.6s">
                                <circle cx="506" cy="114" r="12" class="dc-ring" style="animation-delay:.6s"/>
                                <circle cx="506" cy="114" r="5" class="dc-glow" filter="url(#nodeGlow)"/>
                                <circle cx="506" cy="114" r="2.5" class="dc-dot"/>
                            </g>
                            <g class="dc-node" data-dc="Finland — Helsinki" style="animation-delay:.8s">
                                <circle cx="569" cy="83" r="12" class="dc-ring" style="animation-delay:.8s"/>
                                <circle cx="569" cy="83" r="5" class="dc-glow" filter="url(#nodeGlow)"/>
                                <circle cx="569" cy="83" r="2.5" class="dc-dot"/>
                            </g>
                            <g class="dc-node" data-dc="Turkey — Istanbul" style="animation-delay:1s">
                                <circle cx="581" cy="136" r="12" class="dc-ring" style="animation-delay:1s"/>
                                <circle cx="581" cy="136" r="5" class="dc-glow" filter="url(#nodeGlow)"/>
                                <circle cx="581" cy="136" r="2.5" class="dc-dot"/>
                            </g>
                            <g class="dc-node" data-dc="USA — Virginia" style="animation-delay:1.2s">
                                <circle cx="285" cy="142" r="12" class="dc-ring" style="animation-delay:1.2s"/>
                                <circle cx="285" cy="142" r="5" class="dc-glow" filter="url(#nodeGlow)"/>
                                <circle cx="285" cy="142" r="2.5" class="dc-dot"/>
                            </g>
                            <g class="dc-node" data-dc="Canada — Toronto" style="animation-delay:1.4s">
                                <circle cx="279" cy="129" r="12" class="dc-ring" style="animation-delay:1.4s"/>
                                <circle cx="279" cy="129" r="5" class="dc-glow" filter="url(#nodeGlow)"/>
                                <circle cx="279" cy="129" r="2.5" class="dc-dot"/>
                            </g>
                            <g class="dc-node" data-dc="India — Mumbai" style="animation-delay:1.6s">
                                <circle cx="703" cy="197" r="12" class="dc-ring" style="animation-delay:1.6s"/>
                                <circle cx="703" cy="197" r="5" class="dc-glow" filter="url(#nodeGlow)"/>
                                <circle cx="703" cy="197" r="2.5" class="dc-dot"/>
                            </g>
                            <g class="dc-node" data-dc="Singapore" style="animation-delay:1.8s">
                                <circle cx="788" cy="246" r="12" class="dc-ring" style="animation-delay:1.8s"/>
                                <circle cx="788" cy="246" r="5" class="dc-glow" filter="url(#nodeGlow)"/>
                                <circle cx="788" cy="246" r="2.5" class="dc-dot"/>
                            </g>
                            <g class="dc-node" data-dc="Japan — Tokyo" style="animation-delay:2s">
                                <circle cx="888" cy="151" r="12" class="dc-ring" style="animation-delay:2s"/>
                                <circle cx="888" cy="151" r="5" class="dc-glow" filter="url(#nodeGlow)"/>
                                <circle cx="888" cy="151" r="2.5" class="dc-dot"/>
                            </g>
                            <g class="dc-node" data-dc="Australia — Sydney" style="animation-delay:2.2s">
                                <circle cx="920" cy="344" r="12" class="dc-ring" style="animation-delay:2.2s"/>
                                <circle cx="920" cy="344" r="5" class="dc-glow" filter="url(#nodeGlow)"/>
                                <circle cx="920" cy="344" r="2.5" class="dc-dot"/>
                            </g>
                            <g class="dc-node" data-dc="UAE — Dubai" style="animation-delay:2.4s">
                                <circle cx="654" cy="180" r="12" class="dc-ring" style="animation-delay:2.4s"/>
                                <circle cx="654" cy="180" r="5" class="dc-glow" filter="url(#nodeGlow)"/>
                                <circle cx="654" cy="180" r="2.5" class="dc-dot"/>
                            </g>
                            <g class="dc-node" data-dc="Brazil — São Paulo" style="animation-delay:2.6s">
                                <circle cx="371" cy="315" r="12" class="dc-ring" style="animation-delay:2.6s"/>
                                <circle cx="371" cy="315" r="5" class="dc-glow" filter="url(#nodeGlow)"/>
                                <circle cx="371" cy="315" r="2.5" class="dc-dot"/>
                            </g>
                        </g>
                    </svg>
                    <div class="dc-tooltip" id="dcTooltip"></div>
                </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ DEPLOY FLOW — 3 STEPS ═══════════════ -->
    <section class="cloud-deploy reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag"><?php echo e(__('bandwidth_deploy_tag')); ?></div>
                <h2><?php echo e(__('bandwidth_deploy_title')); ?></h2>
                <p><?php echo e(__('bandwidth_deploy_desc')); ?></p>
            </div>
            <div class="cloud-deploy-flow">
                <div class="cloud-deploy-step">
                    <div class="cloud-deploy-num">1</div>
                    <div class="cloud-deploy-icon"><i class="fas fa-sliders-h"></i></div>
                    <h4><?php echo __('bandwidth_deploy_step1_title'); ?></h4>
                    <p><?php echo e(__('bandwidth_deploy_step1_desc')); ?></p>
                </div>
                <div class="cloud-deploy-connector"><i class="fas fa-chevron-right"></i></div>
                <div class="cloud-deploy-step">
                    <div class="cloud-deploy-num">2</div>
                    <div class="cloud-deploy-icon icon-green"><i class="fas fa-globe-europe"></i></div>
                    <h4><?php echo e(__('bandwidth_deploy_step2_title')); ?></h4>
                    <p><?php echo e(__('bandwidth_deploy_step2_desc')); ?></p>
                </div>
                <div class="cloud-deploy-connector"><i class="fas fa-chevron-right"></i></div>
                <div class="cloud-deploy-step">
                    <div class="cloud-deploy-num">3</div>
                    <div class="cloud-deploy-icon icon-purple"><i class="fas fa-infinity"></i></div>
                    <h4><?php echo __('bandwidth_deploy_step3_title'); ?></h4>
                    <p><?php echo e(__('bandwidth_deploy_step3_desc')); ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ BANDWIDTH FEATURE COMPARISON TABLE ═══════════════ -->
    <section class="section-compare reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag"><?php echo e(__('bandwidth_feat_tag')); ?></div>
                <h2><?php echo e(__('bandwidth_feat_title')); ?></h2>
                <p><?php echo e(__('bandwidth_feat_desc')); ?></p>
            </div>
            <div class="compare-table-wrap">
                <table class="compare-table">
                    <thead>
                        <tr>
                            <th><?php echo e(__('bandwidth_feat_col_feature')); ?></th>
                            <th class="compare-highlight"><?php echo e(__('bandwidth_feat_col_yotta')); ?></th>
                            <th><?php echo e(__('bandwidth_feat_col_others')); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><i class="fas fa-infinity"></i> <?php echo e(__('bandwidth_feat_row_cap')); ?></td>
                            <td class="compare-highlight"><i class="fas fa-check-circle"></i> <?php echo e(__('bandwidth_feat_row_cap_yotta')); ?></td>
                            <td><i class="fas fa-times-circle"></i> <?php echo e(__('bandwidth_feat_row_cap_other')); ?></td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-ethernet"></i> <?php echo e(__('bandwidth_feat_row_port')); ?></td>
                            <td class="compare-highlight"><i class="fas fa-check-circle"></i> <?php echo e(__('bandwidth_feat_row_port_yotta')); ?></td>
                            <td><i class="fas fa-minus-circle"></i> <?php echo e(__('bandwidth_feat_row_port_other')); ?></td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-tags"></i> <?php echo e(__('bandwidth_feat_row_billing')); ?></td>
                            <td class="compare-highlight"><i class="fas fa-check-circle"></i> <?php echo e(__('bandwidth_feat_row_billing_yotta')); ?></td>
                            <td><i class="fas fa-times-circle"></i> <?php echo e(__('bandwidth_feat_row_billing_other')); ?></td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-route"></i> <?php echo e(__('bandwidth_feat_row_carrier')); ?></td>
                            <td class="compare-highlight"><i class="fas fa-check-circle"></i> <?php echo e(__('bandwidth_feat_row_carrier_yotta')); ?></td>
                            <td><i class="fas fa-minus-circle"></i> <?php echo e(__('bandwidth_feat_row_carrier_other')); ?></td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-project-diagram"></i> <?php echo e(__('bandwidth_feat_row_bgp')); ?></td>
                            <td class="compare-highlight"><i class="fas fa-check-circle"></i> <?php echo e(__('bandwidth_feat_row_bgp_yotta')); ?></td>
                            <td><i class="fas fa-times-circle"></i> <?php echo e(__('bandwidth_feat_row_bgp_other')); ?></td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-shield-alt"></i> <?php echo e(__('bandwidth_feat_row_ddos')); ?></td>
                            <td class="compare-highlight"><i class="fas fa-check-circle"></i> <?php echo e(__('bandwidth_feat_row_ddos_yotta')); ?></td>
                            <td><i class="fas fa-minus-circle"></i> <?php echo e(__('bandwidth_feat_row_ddos_other')); ?></td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-clock"></i> <?php echo e(__('bandwidth_feat_row_provision')); ?></td>
                            <td class="compare-highlight"><i class="fas fa-check-circle"></i> <?php echo e(__('bandwidth_feat_row_provision_yotta')); ?></td>
                            <td><i class="fas fa-minus-circle"></i> <?php echo e(__('bandwidth_feat_row_provision_other')); ?></td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-headset"></i> <?php echo e(__('bandwidth_feat_row_support')); ?></td>
                            <td class="compare-highlight"><i class="fas fa-check-circle"></i> <?php echo e(__('bandwidth_feat_row_support_yotta')); ?></td>
                            <td><i class="fas fa-minus-circle"></i> <?php echo e(__('bandwidth_feat_row_support_other')); ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- ═══════════════ USE CASES — BENTO GRID ═══════════════ -->
    <section class="bento-features reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag"><?php echo e(__('bandwidth_uc_tag')); ?></div>
                <h2><?php echo e(__('bandwidth_uc_title')); ?></h2>
                <p><?php echo e(__('bandwidth_uc_desc')); ?></p>
            </div>
            <div class="bento-grid">
                <div class="bento-card">
                    <div class="bento-card-icon"><i class="fas fa-photo-video"></i></div>
                    <h4><?php echo e(__('bandwidth_uc_streaming_title')); ?></h4>
                    <p><?php echo e(__('bandwidth_uc_streaming_desc')); ?></p>
                </div>
                <div class="bento-card">
                    <div class="bento-card-icon icon-green"><i class="fas fa-gamepad"></i></div>
                    <h4><?php echo e(__('bandwidth_uc_gaming_title')); ?></h4>
                    <p><?php echo e(__('bandwidth_uc_gaming_desc')); ?></p>
                </div>
                <div class="bento-card">
                    <div class="bento-card-icon icon-purple"><i class="fas fa-brain"></i></div>
                    <h4><?php echo e(__('bandwidth_uc_ai_title')); ?></h4>
                    <p><?php echo e(__('bandwidth_uc_ai_desc')); ?></p>
                </div>
                <div class="bento-card">
                    <div class="bento-card-icon icon-amber"><i class="fas fa-bullhorn"></i></div>
                    <h4><?php echo e(__('bandwidth_uc_adtech_title')); ?></h4>
                    <p><?php echo e(__('bandwidth_uc_adtech_desc')); ?></p>
                </div>
                <div class="bento-card">
                    <div class="bento-card-icon icon-blue"><i class="fas fa-database"></i></div>
                    <h4><?php echo e(__('bandwidth_uc_storage_title')); ?></h4>
                    <p><?php echo e(__('bandwidth_uc_storage_desc')); ?></p>
                </div>
                <div class="bento-card">
                    <div class="bento-card-icon icon-rose"><i class="fas fa-broadcast-tower"></i></div>
                    <h4><?php echo e(__('bandwidth_uc_live_title')); ?></h4>
                    <p><?php echo e(__('bandwidth_uc_live_desc')); ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ API & MONITORING TERMINAL ═══════════════ -->
    <section class="api-section reveal">
        <div class="container">
            <div class="api-layout">
                <div class="api-text">
                    <div class="section-tag"><?php echo e(__('bandwidth_api_tag')); ?></div>
                    <h2><?php echo e(__('bandwidth_api_title')); ?></h2>
                    <p><?php echo e(__('bandwidth_api_desc')); ?></p>
                    <div class="api-highlights">
                        <div class="api-highlight"><i class="fas fa-check-circle"></i> <?php echo __('bandwidth_api_highlight_1'); ?></div>
                        <div class="api-highlight"><i class="fas fa-check-circle"></i> <?php echo __('bandwidth_api_highlight_2'); ?></div>
                        <div class="api-highlight"><i class="fas fa-check-circle"></i> <?php echo __('bandwidth_api_highlight_3'); ?></div>
                        <div class="api-highlight"><i class="fas fa-check-circle"></i> <?php echo __('bandwidth_api_highlight_4'); ?></div>
                    </div>
                    <a href="https://docs.yottasrc.com/" class="btn-primary" target="_blank" rel="noopener noreferrer"><?php echo e(__('bandwidth_api_docs_btn')); ?> <i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="api-visual">
                    <div class="hero-terminal">
                        <div class="terminal-header">
                            <span class="terminal-dot red"></span>
                            <span class="terminal-dot yellow"></span>
                            <span class="terminal-dot green"></span>
                            <span class="terminal-title">bandwidth-api</span>
                        </div>
                        <div class="terminal-body">
                            <div><span class="cmd">$</span> curl -s <span class="val">api.yottasrc.com/v1/bandwidth/usage</span></div>
                            <div><span class="cmd">→</span> <span class="flag">port:</span> <span class="val">"10G"</span></div>
                            <div><span class="cmd">→</span> <span class="flag">region:</span> <span class="val">"eu-de-fra"</span></div>
                            <div>&nbsp;</div>
                            <div><span class="success">✓ sustained_gbps:</span> <span class="val">9.94</span></div>
                            <div><span class="success">✓ traffic_30d_tb:</span> <span class="val">2,847</span></div>
                            <div><span class="success">✓ overage_charges:</span> <span class="val">€0.00</span></div>
                            <div><span class="success">✓ throttled:</span> <span class="val">false</span><span class="terminal-cursor"></span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ FAQ ═══════════════ -->
    <section class="faq-section reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag"><?php echo e(__('bandwidth_faq_tag')); ?></div>
                <h2><?php echo e(__('bandwidth_faq_title')); ?></h2>
                <p><?php echo e(__('bandwidth_faq_desc')); ?></p>
            </div>
            <div class="faq-layout faq-layout--full">
                <div class="faq-panels">
                    <div class="faq-panel active" id="faq-bw-all">
                        <div class="faq-item">
                            <button class="faq-question"><span><?php echo e(__('bandwidth_faq_q1')); ?></span><i class="fas fa-chevron-down"></i></button>
                            <div class="faq-answer"><p><?php echo e(__('bandwidth_faq_a1')); ?></p></div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question"><span><?php echo e(__('bandwidth_faq_q2')); ?></span><i class="fas fa-chevron-down"></i></button>
                            <div class="faq-answer"><p><?php echo e(__('bandwidth_faq_a2')); ?></p></div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question"><span><?php echo e(__('bandwidth_faq_q3')); ?></span><i class="fas fa-chevron-down"></i></button>
                            <div class="faq-answer"><p><?php echo e(__('bandwidth_faq_a3')); ?></p></div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question"><span><?php echo e(__('bandwidth_faq_q4')); ?></span><i class="fas fa-chevron-down"></i></button>
                            <div class="faq-answer"><p><?php echo e(__('bandwidth_faq_a4')); ?></p></div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question"><span><?php echo e(__('bandwidth_faq_q5')); ?></span><i class="fas fa-chevron-down"></i></button>
                            <div class="faq-answer"><p><?php echo e(__('bandwidth_faq_a5')); ?></p></div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question"><span><?php echo e(__('bandwidth_faq_q6')); ?></span><i class="fas fa-chevron-down"></i></button>
                            <div class="faq-answer"><p><?php echo e(__('bandwidth_faq_a6')); ?></p></div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question"><span><?php echo e(__('bandwidth_faq_q7')); ?></span><i class="fas fa-chevron-down"></i></button>
                            <div class="faq-answer"><p><?php echo e(__('bandwidth_faq_a7')); ?></p></div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question"><span><?php echo e(__('bandwidth_faq_q8')); ?></span><i class="fas fa-chevron-down"></i></button>
                            <div class="faq-answer"><p><?php echo e(__('bandwidth_faq_a8')); ?></p></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="faq-actions">
                <a href="<?php echo e(SITE_URL); ?>/contact-us/" class="btn-primary"><?php echo e(__('bandwidth_faq_cta_sales')); ?> <i class="fas fa-headset"></i></a>
                <a href="<?php echo e(SITE_URL); ?>/faq" class="btn-secondary"><?php echo e(__('bandwidth_faq_cta_browse')); ?> <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </section>

    <!-- ═══════════════ PROMO CTA ═══════════════ -->
    <section class="promo-cta reveal">
        <div class="container">
            <div class="promo-cta-inner">
                <div class="promo-cta-glow"></div>
                <div class="promo-cta-icon"><i class="fas fa-infinity"></i></div>
                <h2><?php echo e(__('bandwidth_cta_title')); ?></h2>
                <p><?php echo e(__('bandwidth_cta_desc')); ?></p>
                <a href="<?php echo e(SITE_URL); ?>/contact-us/" class="btn-primary"><i class="fas fa-headset"></i> <?php echo e(__('bandwidth_cta_btn')); ?></a>
            </div>
        </div>
    </section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
