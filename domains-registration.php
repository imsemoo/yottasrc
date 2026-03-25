<?php
/**
 * YottaSrc — Domain Registration
 * ================================
 * Domain search, TLD pricing, and registration page.
 */
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/topbar.php';
?>

    <!-- ═══════════════ HERO ═══════════════ -->
    <section class="page-hero">
        <div class="container">
            <div class="page-hero-content" >
                <div class="page-breadcrumb">
                    <a href="<?php echo e(SITE_URL); ?>/"><?php echo e(__('breadcrumb_home')); ?></a>
                    <i class="fas fa-chevron-right"></i>
                    <a href="<?php echo e(SITE_URL); ?>/domains-registration/"><?php echo e(__('domains_reg_breadcrumb_parent')); ?></a>
                    <i class="fas fa-chevron-right"></i>
                    <span><?php echo e(__('domains_reg_breadcrumb')); ?></span>
                </div>
                <h1><?php echo __('domains_reg_title'); ?></h1>
                <p class="page-hero-desc">
                    <?php echo e(__('domains_reg_desc')); ?>
                </p>
                <div class="page-hero-badges" >
                    <div class="hero-badge-item"><i class="fas fa-check"></i> <?php echo e(__('domains_reg_badge1')); ?></div>
                    <div class="hero-badge-item"><i class="fas fa-check"></i> <?php echo e(__('domains_reg_badge2')); ?></div>
                    <div class="hero-badge-item"><i class="fas fa-check"></i> <?php echo e(__('domains_reg_badge3')); ?></div>
                    <div class="hero-badge-item"><i class="fas fa-check"></i> <?php echo e(__('domains_reg_badge4')); ?></div>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ DOMAIN SEARCH ═══════════════ -->
    <section class="domain-search-section reveal">
        <div class="container">
            <div class="domain-search-box">
                <h2><?php echo e(__('domains_reg_search_title')); ?></h2>
                <form class="domain-search-form" action="<?php echo e(CP_URL); ?>/cart.php?a=add&domain=register" method="get">
                    <div class="domain-search-input-wrap">
                        <i class="fas fa-globe"></i>
                        <input type="text" name="query" placeholder="<?php echo e(__('domains_reg_search_placeholder')); ?>" autocomplete="off" required>
                        <button type="submit" class="btn-primary"><?php echo e(__('domains_reg_search_btn')); ?> <i class="fas fa-search"></i></button>
                    </div>
                </form>
                <div class="domain-search-suggestions">
                    <span class="domain-tld-chip">.com</span>
                    <span class="domain-tld-chip">.net</span>
                    <span class="domain-tld-chip">.org</span>
                    <span class="domain-tld-chip">.io</span>
                    <span class="domain-tld-chip">.dev</span>
                    <span class="domain-tld-chip">.co</span>
                    <span class="domain-tld-chip">.me</span>
                    <span class="domain-tld-chip">.store</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ POPULAR TLD PRICING ═══════════════ -->
    <section class="domain-pricing reveal" id="pricing">
        <div class="container">
            <div class="section-header">
                <div class="section-tag"><?php echo e(__('domains_reg_pricing_tag')); ?></div>
                <h2><?php echo e(__('domains_reg_pricing_title')); ?></h2>
                <p><?php echo e(__('domains_reg_pricing_desc')); ?></p>
            </div>

            <div class="domain-tld-grid">
                <div class="domain-tld-card">
                    <div class="domain-tld-name">.com</div>
                    <div class="domain-tld-desc"><?php echo e(__('domains_reg_tld_com_desc')); ?></div>
                    <div class="domain-tld-price"><span class="currency">€</span><span class="amount">9.99</span><span class="period">/<?php echo e(__('domains_reg_year')); ?></span></div>
                    <div class="domain-tld-renewal"><?php echo e(__('domains_reg_renewal')); ?>: €12.99/<?php echo e(__('domains_reg_yr')); ?></div>
                    <a href="<?php echo e(CP_URL); ?>/cart.php?a=add&domain=register" class="btn-primary btn-sm"><?php echo e(__('domains_reg_register_btn')); ?></a>
                </div>
                <div class="domain-tld-card">
                    <div class="domain-tld-name">.net</div>
                    <div class="domain-tld-desc"><?php echo e(__('domains_reg_tld_net_desc')); ?></div>
                    <div class="domain-tld-price"><span class="currency">€</span><span class="amount">11.99</span><span class="period">/<?php echo e(__('domains_reg_year')); ?></span></div>
                    <div class="domain-tld-renewal"><?php echo e(__('domains_reg_renewal')); ?>: €14.99/<?php echo e(__('domains_reg_yr')); ?></div>
                    <a href="<?php echo e(CP_URL); ?>/cart.php?a=add&domain=register" class="btn-primary btn-sm"><?php echo e(__('domains_reg_register_btn')); ?></a>
                </div>
                <div class="domain-tld-card">
                    <div class="domain-tld-name">.org</div>
                    <div class="domain-tld-desc"><?php echo e(__('domains_reg_tld_org_desc')); ?></div>
                    <div class="domain-tld-price"><span class="currency">€</span><span class="amount">10.99</span><span class="period">/<?php echo e(__('domains_reg_year')); ?></span></div>
                    <div class="domain-tld-renewal"><?php echo e(__('domains_reg_renewal')); ?>: €13.99/<?php echo e(__('domains_reg_yr')); ?></div>
                    <a href="<?php echo e(CP_URL); ?>/cart.php?a=add&domain=register" class="btn-primary btn-sm"><?php echo e(__('domains_reg_register_btn')); ?></a>
                </div>
                <div class="domain-tld-card domain-tld-card--popular">
                    <div class="domain-tld-badge"><?php echo e(__('domains_reg_popular')); ?></div>
                    <div class="domain-tld-name">.io</div>
                    <div class="domain-tld-desc"><?php echo e(__('domains_reg_tld_io_desc')); ?></div>
                    <div class="domain-tld-price"><span class="currency">€</span><span class="amount">29.99</span><span class="period">/<?php echo e(__('domains_reg_year')); ?></span></div>
                    <div class="domain-tld-renewal"><?php echo e(__('domains_reg_renewal')); ?>: €39.99/<?php echo e(__('domains_reg_yr')); ?></div>
                    <a href="<?php echo e(CP_URL); ?>/cart.php?a=add&domain=register" class="btn-primary btn-sm"><?php echo e(__('domains_reg_register_btn')); ?></a>
                </div>
                <div class="domain-tld-card">
                    <div class="domain-tld-name">.dev</div>
                    <div class="domain-tld-desc"><?php echo e(__('domains_reg_tld_dev_desc')); ?></div>
                    <div class="domain-tld-price"><span class="currency">€</span><span class="amount">14.99</span><span class="period">/<?php echo e(__('domains_reg_year')); ?></span></div>
                    <div class="domain-tld-renewal"><?php echo e(__('domains_reg_renewal')); ?>: €16.99/<?php echo e(__('domains_reg_yr')); ?></div>
                    <a href="<?php echo e(CP_URL); ?>/cart.php?a=add&domain=register" class="btn-primary btn-sm"><?php echo e(__('domains_reg_register_btn')); ?></a>
                </div>
                <div class="domain-tld-card">
                    <div class="domain-tld-name">.co</div>
                    <div class="domain-tld-desc"><?php echo e(__('domains_reg_tld_co_desc')); ?></div>
                    <div class="domain-tld-price"><span class="currency">€</span><span class="amount">24.99</span><span class="period">/<?php echo e(__('domains_reg_year')); ?></span></div>
                    <div class="domain-tld-renewal"><?php echo e(__('domains_reg_renewal')); ?>: €29.99/<?php echo e(__('domains_reg_yr')); ?></div>
                    <a href="<?php echo e(CP_URL); ?>/cart.php?a=add&domain=register" class="btn-primary btn-sm"><?php echo e(__('domains_reg_register_btn')); ?></a>
                </div>
                <div class="domain-tld-card">
                    <div class="domain-tld-name">.me</div>
                    <div class="domain-tld-desc"><?php echo e(__('domains_reg_tld_me_desc')); ?></div>
                    <div class="domain-tld-price"><span class="currency">€</span><span class="amount">8.99</span><span class="period">/<?php echo e(__('domains_reg_year')); ?></span></div>
                    <div class="domain-tld-renewal"><?php echo e(__('domains_reg_renewal')); ?>: €19.99/<?php echo e(__('domains_reg_yr')); ?></div>
                    <a href="<?php echo e(CP_URL); ?>/cart.php?a=add&domain=register" class="btn-primary btn-sm"><?php echo e(__('domains_reg_register_btn')); ?></a>
                </div>
                <div class="domain-tld-card">
                    <div class="domain-tld-name">.store</div>
                    <div class="domain-tld-desc"><?php echo e(__('domains_reg_tld_store_desc')); ?></div>
                    <div class="domain-tld-price"><span class="currency">€</span><span class="amount">4.99</span><span class="period">/<?php echo e(__('domains_reg_year')); ?></span></div>
                    <div class="domain-tld-renewal"><?php echo e(__('domains_reg_renewal')); ?>: €39.99/<?php echo e(__('domains_reg_yr')); ?></div>
                    <a href="<?php echo e(CP_URL); ?>/cart.php?a=add&domain=register" class="btn-primary btn-sm"><?php echo e(__('domains_reg_register_btn')); ?></a>
                </div>
            </div>

            <div class="pricing-custom">
                <p><?php echo __('domains_reg_browse_all'); ?></p>
            </div>
        </div>
    </section>

    <!-- ═══════════════ ALL TLD PRICING TABLE ═══════════════ -->
    <section class="domain-all-tlds reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag"><?php echo e(__('domains_reg_all_ext_tag')); ?></div>
                <h2><?php echo e(__('domains_reg_all_ext_title')); ?></h2>
                <p><?php echo e(__('domains_reg_all_ext_desc')); ?></p>
            </div>

            <div class="tld-table-controls">
                <div class="tld-table-filters">
                    <button class="tld-filter active" data-filter="all"><?php echo e(__('domains_reg_filter_all')); ?></button>
                    <button class="tld-filter" data-filter="popular"><i class="fas fa-fire"></i> <?php echo e(__('domains_reg_filter_popular')); ?></button>
                    <button class="tld-filter" data-filter="sale"><i class="fas fa-tag"></i> <?php echo e(__('domains_reg_filter_sale')); ?></button>
                    <button class="tld-filter" data-filter="country"><i class="fas fa-flag"></i> <?php echo e(__('domains_reg_filter_country')); ?></button>
                </div>
                <div class="tld-table-search">
                    <i class="fas fa-search"></i>
                    <input type="text" placeholder="<?php echo e(__('domains_reg_search_ext_placeholder')); ?>" class="tld-search-input">
                </div>
            </div>

            <div class="tld-table-wrap">
                <table class="tld-table">
                    <thead>
                        <tr>
                            <th><?php echo e(__('domains_reg_th_extension')); ?></th>
                            <th><?php echo e(__('domains_reg_th_register')); ?></th>
                            <th><?php echo e(__('domains_reg_th_transfer')); ?></th>
                            <th><?php echo e(__('domains_reg_th_renew')); ?></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr data-category="popular">
                            <td><span class="tld-ext">.com</span><span class="tld-badge tld-badge--hot"><?php echo e(__('domains_reg_badge_hot')); ?></span></td>
                            <td><span class="tld-price">€11.99</span><span class="tld-period">/<?php echo e(__('domains_reg_yr')); ?></span></td>
                            <td><span class="tld-price">€11.99</span><span class="tld-period">/<?php echo e(__('domains_reg_yr')); ?></span></td>
                            <td><span class="tld-price">€14.99</span><span class="tld-period">/<?php echo e(__('domains_reg_yr')); ?></span></td>
                            <td><a href="<?php echo e(CP_URL); ?>/cart.php?a=add&domain=register" class="btn-primary btn-sm"><?php echo e(__('domains_reg_register_btn')); ?></a></td>
                        </tr>
                        <tr data-category="popular">
                            <td><span class="tld-ext">.net</span></td>
                            <td><span class="tld-price">€15.99</span><span class="tld-period">/<?php echo e(__('domains_reg_yr')); ?></span></td>
                            <td><span class="tld-price">€15.99</span><span class="tld-period">/<?php echo e(__('domains_reg_yr')); ?></span></td>
                            <td><span class="tld-price">€19.99</span><span class="tld-period">/<?php echo e(__('domains_reg_yr')); ?></span></td>
                            <td><a href="<?php echo e(CP_URL); ?>/cart.php?a=add&domain=register" class="btn-primary btn-sm"><?php echo e(__('domains_reg_register_btn')); ?></a></td>
                        </tr>
                        <tr data-category="popular">
                            <td><span class="tld-ext">.org</span><span class="tld-badge tld-badge--hot"><?php echo e(__('domains_reg_badge_hot')); ?></span></td>
                            <td><span class="tld-price">€14.99</span><span class="tld-period">/<?php echo e(__('domains_reg_yr')); ?></span></td>
                            <td><span class="tld-price">€14.99</span><span class="tld-period">/<?php echo e(__('domains_reg_yr')); ?></span></td>
                            <td><span class="tld-price">€17.99</span><span class="tld-period">/<?php echo e(__('domains_reg_yr')); ?></span></td>
                            <td><a href="<?php echo e(CP_URL); ?>/cart.php?a=add&domain=register" class="btn-primary btn-sm"><?php echo e(__('domains_reg_register_btn')); ?></a></td>
                        </tr>
                        <tr data-category="popular">
                            <td><span class="tld-ext">.io</span><span class="tld-badge tld-badge--hot"><?php echo e(__('domains_reg_badge_hot')); ?></span></td>
                            <td><span class="tld-price">€39.00</span><span class="tld-period">/<?php echo e(__('domains_reg_yr')); ?></span></td>
                            <td><span class="tld-price">€59.99</span><span class="tld-period">/<?php echo e(__('domains_reg_yr')); ?></span></td>
                            <td><span class="tld-price">€70.99</span><span class="tld-period">/<?php echo e(__('domains_reg_yr')); ?></span></td>
                            <td><a href="<?php echo e(CP_URL); ?>/cart.php?a=add&domain=register" class="btn-primary btn-sm"><?php echo e(__('domains_reg_register_btn')); ?></a></td>
                        </tr>
                        <tr data-category="popular">
                            <td><span class="tld-ext">.dev</span></td>
                            <td><span class="tld-price">€14.99</span><span class="tld-period">/<?php echo e(__('domains_reg_yr')); ?></span></td>
                            <td><span class="tld-price">€14.99</span><span class="tld-period">/<?php echo e(__('domains_reg_yr')); ?></span></td>
                            <td><span class="tld-price">€16.99</span><span class="tld-period">/<?php echo e(__('domains_reg_yr')); ?></span></td>
                            <td><a href="<?php echo e(CP_URL); ?>/cart.php?a=add&domain=register" class="btn-primary btn-sm"><?php echo e(__('domains_reg_register_btn')); ?></a></td>
                        </tr>
                        <tr data-category="popular">
                            <td><span class="tld-ext">.co</span></td>
                            <td><span class="tld-price">€24.99</span><span class="tld-period">/<?php echo e(__('domains_reg_yr')); ?></span></td>
                            <td><span class="tld-price">€24.99</span><span class="tld-period">/<?php echo e(__('domains_reg_yr')); ?></span></td>
                            <td><span class="tld-price">€29.99</span><span class="tld-period">/<?php echo e(__('domains_reg_yr')); ?></span></td>
                            <td><a href="<?php echo e(CP_URL); ?>/cart.php?a=add&domain=register" class="btn-primary btn-sm"><?php echo e(__('domains_reg_register_btn')); ?></a></td>
                        </tr>
                        <tr data-category="sale">
                            <td><span class="tld-ext">.info</span><span class="tld-badge tld-badge--sale"><?php echo e(__('domains_reg_badge_sale')); ?></span></td>
                            <td><span class="tld-price">€4.99</span><span class="tld-period">/<?php echo e(__('domains_reg_yr')); ?></span></td>
                            <td><span class="tld-price">€31.99</span><span class="tld-period">/<?php echo e(__('domains_reg_yr')); ?></span></td>
                            <td><span class="tld-price">€34.99</span><span class="tld-period">/<?php echo e(__('domains_reg_yr')); ?></span></td>
                            <td><a href="<?php echo e(CP_URL); ?>/cart.php?a=add&domain=register" class="btn-primary btn-sm"><?php echo e(__('domains_reg_register_btn')); ?></a></td>
                        </tr>
                        <tr data-category="sale">
                            <td><span class="tld-ext">.top</span><span class="tld-badge tld-badge--sale"><?php echo e(__('domains_reg_badge_sale')); ?></span></td>
                            <td><span class="tld-price">€3.99</span><span class="tld-period">/<?php echo e(__('domains_reg_yr')); ?></span></td>
                            <td><span class="tld-price">€10.99</span><span class="tld-period">/<?php echo e(__('domains_reg_yr')); ?></span></td>
                            <td><span class="tld-price">€12.99</span><span class="tld-period">/<?php echo e(__('domains_reg_yr')); ?></span></td>
                            <td><a href="<?php echo e(CP_URL); ?>/cart.php?a=add&domain=register" class="btn-primary btn-sm"><?php echo e(__('domains_reg_register_btn')); ?></a></td>
                        </tr>
                        <tr data-category="sale">
                            <td><span class="tld-ext">.store</span><span class="tld-badge tld-badge--sale"><?php echo e(__('domains_reg_badge_sale')); ?></span></td>
                            <td><span class="tld-price">€4.99</span><span class="tld-period">/<?php echo e(__('domains_reg_yr')); ?></span></td>
                            <td><span class="tld-price">€4.99</span><span class="tld-period">/<?php echo e(__('domains_reg_yr')); ?></span></td>
                            <td><span class="tld-price">€39.99</span><span class="tld-period">/<?php echo e(__('domains_reg_yr')); ?></span></td>
                            <td><a href="<?php echo e(CP_URL); ?>/cart.php?a=add&domain=register" class="btn-primary btn-sm"><?php echo e(__('domains_reg_register_btn')); ?></a></td>
                        </tr>
                        <tr data-category="sale">
                            <td><span class="tld-ext">.xyz</span><span class="tld-badge tld-badge--sale"><?php echo e(__('domains_reg_badge_sale')); ?></span></td>
                            <td><span class="tld-price">€1.99</span><span class="tld-period">/<?php echo e(__('domains_reg_yr')); ?></span></td>
                            <td><span class="tld-price">€9.99</span><span class="tld-period">/<?php echo e(__('domains_reg_yr')); ?></span></td>
                            <td><span class="tld-price">€12.99</span><span class="tld-period">/<?php echo e(__('domains_reg_yr')); ?></span></td>
                            <td><a href="<?php echo e(CP_URL); ?>/cart.php?a=add&domain=register" class="btn-primary btn-sm"><?php echo e(__('domains_reg_register_btn')); ?></a></td>
                        </tr>
                        <tr data-category="sale">
                            <td><span class="tld-ext">.icu</span><span class="tld-badge tld-badge--new"><?php echo e(__('domains_reg_badge_new')); ?></span></td>
                            <td><span class="tld-price">€1.99</span><span class="tld-period">/<?php echo e(__('domains_reg_yr')); ?></span></td>
                            <td><span class="tld-price">€12.00</span><span class="tld-period">/<?php echo e(__('domains_reg_yr')); ?></span></td>
                            <td><span class="tld-price">€11.00</span><span class="tld-period">/<?php echo e(__('domains_reg_yr')); ?></span></td>
                            <td><a href="<?php echo e(CP_URL); ?>/cart.php?a=add&domain=register" class="btn-primary btn-sm"><?php echo e(__('domains_reg_register_btn')); ?></a></td>
                        </tr>
                        <tr data-category="country">
                            <td><span class="tld-ext">.eu</span></td>
                            <td><span class="tld-price">€7.99</span><span class="tld-period">/<?php echo e(__('domains_reg_yr')); ?></span></td>
                            <td><span class="tld-price">€7.99</span><span class="tld-period">/<?php echo e(__('domains_reg_yr')); ?></span></td>
                            <td><span class="tld-price">€9.99</span><span class="tld-period">/<?php echo e(__('domains_reg_yr')); ?></span></td>
                            <td><a href="<?php echo e(CP_URL); ?>/cart.php?a=add&domain=register" class="btn-primary btn-sm"><?php echo e(__('domains_reg_register_btn')); ?></a></td>
                        </tr>
                        <tr data-category="country">
                            <td><span class="tld-ext">.de</span></td>
                            <td><span class="tld-price">€8.99</span><span class="tld-period">/<?php echo e(__('domains_reg_yr')); ?></span></td>
                            <td><span class="tld-price">€8.99</span><span class="tld-period">/<?php echo e(__('domains_reg_yr')); ?></span></td>
                            <td><span class="tld-price">€10.99</span><span class="tld-period">/<?php echo e(__('domains_reg_yr')); ?></span></td>
                            <td><a href="<?php echo e(CP_URL); ?>/cart.php?a=add&domain=register" class="btn-primary btn-sm"><?php echo e(__('domains_reg_register_btn')); ?></a></td>
                        </tr>
                        <tr data-category="country">
                            <td><span class="tld-ext">.ru</span></td>
                            <td><span class="tld-price">€5.99</span><span class="tld-period">/<?php echo e(__('domains_reg_yr')); ?></span></td>
                            <td><span class="tld-price">€1.99</span><span class="tld-period">/<?php echo e(__('domains_reg_yr')); ?></span></td>
                            <td><span class="tld-price">€6.99</span><span class="tld-period">/<?php echo e(__('domains_reg_yr')); ?></span></td>
                            <td><a href="<?php echo e(CP_URL); ?>/cart.php?a=add&domain=register" class="btn-primary btn-sm"><?php echo e(__('domains_reg_register_btn')); ?></a></td>
                        </tr>
                        <tr data-category="country">
                            <td><span class="tld-ext">.me</span></td>
                            <td><span class="tld-price">€8.99</span><span class="tld-period">/<?php echo e(__('domains_reg_yr')); ?></span></td>
                            <td><span class="tld-price">€14.99</span><span class="tld-period">/<?php echo e(__('domains_reg_yr')); ?></span></td>
                            <td><span class="tld-price">€19.99</span><span class="tld-period">/<?php echo e(__('domains_reg_yr')); ?></span></td>
                            <td><a href="<?php echo e(CP_URL); ?>/cart.php?a=add&domain=register" class="btn-primary btn-sm"><?php echo e(__('domains_reg_register_btn')); ?></a></td>
                        </tr>
                        <tr class="tld-table-empty">
                            <td colspan="5"><?php echo e(__('domains_reg_no_results')); ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="tld-table-footer">
                <p><?php echo __('domains_reg_table_footer'); ?></p>
            </div>
        </div>
    </section>

    <!-- ═══════════════ FEATURES ═══════════════ -->
    <section class="bento-features reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag"><?php echo e(__('domains_reg_features_tag')); ?></div>
                <h2><?php echo e(__('domains_reg_features_title')); ?></h2>
                <p><?php echo e(__('domains_reg_features_desc')); ?></p>
            </div>

            <div class="bento-grid">
                <div class="bento-card bento-sm">
                    <div class="bento-card-icon"><i class="fas fa-user-shield"></i></div>
                    <h4><?php echo e(__('domains_reg_feat_whois_title')); ?></h4>
                    <p><?php echo e(__('domains_reg_feat_whois_desc')); ?></p>
                </div>
                <div class="bento-card bento-sm">
                    <div class="bento-card-icon icon-green"><i class="fas fa-server"></i></div>
                    <h3><?php echo e(__('domains_reg_feat_dns_title')); ?></h3>
                    <p><?php echo e(__('domains_reg_feat_dns_desc')); ?></p>
                </div>
                <div class="bento-card bento-sm">
                    <div class="bento-card-icon icon-blue"><i class="fas fa-envelope-open-text"></i></div>
                    <h3><?php echo e(__('domains_reg_feat_email_title')); ?></h3>
                    <p><?php echo e(__('domains_reg_feat_email_desc')); ?></p>
                </div>
                <div class="bento-card bento-sm">
                    <div class="bento-card-icon icon-purple"><i class="fas fa-lock"></i></div>
                    <h3><?php echo e(__('domains_reg_feat_lock_title')); ?></h3>
                    <p><?php echo e(__('domains_reg_feat_lock_desc')); ?></p>
                </div>
                <div class="bento-card bento-sm">
                    <div class="bento-card-icon icon-amber"><i class="fas fa-sync-alt"></i></div>
                    <h3><?php echo e(__('domains_reg_feat_renewal_title')); ?></h3>
                    <p><?php echo e(__('domains_reg_feat_renewal_desc')); ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ WHY CHOOSE US ═══════════════ -->
    <section class="features-section reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag"><?php echo e(__('domains_reg_why_tag')); ?></div>
                <h2><?php echo e(__('domains_reg_why_title')); ?></h2>
            </div>

            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon"><i class="fas fa-bolt"></i></div>
                    <h4><?php echo e(__('domains_reg_why_instant_title')); ?></h4>
                    <p><?php echo e(__('domains_reg_why_instant_desc')); ?></p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon icon-green"><i class="fas fa-shield-alt"></i></div>
                    <h4><?php echo e(__('domains_reg_why_theft_title')); ?></h4>
                    <p><?php echo e(__('domains_reg_why_theft_desc')); ?></p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon icon-blue"><i class="fas fa-headset"></i></div>
                    <h4><?php echo e(__('domains_reg_why_support_title')); ?></h4>
                    <p><?php echo e(__('domains_reg_why_support_desc')); ?></p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon icon-purple"><i class="fas fa-server"></i></div>
                    <h4><?php echo e(__('domains_reg_why_bundle_title')); ?></h4>
                    <p><?php echo e(__('domains_reg_why_bundle_desc')); ?></p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon icon-amber"><i class="fas fa-exchange-alt"></i></div>
                    <h4><?php echo e(__('domains_reg_why_transfer_title')); ?></h4>
                    <p><?php echo e(__('domains_reg_why_transfer_desc')); ?></p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon icon-rose"><i class="fas fa-globe-americas"></i></div>
                    <h4><?php echo e(__('domains_reg_why_extensions_title')); ?></h4>
                    <p><?php echo e(__('domains_reg_why_extensions_desc')); ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ FAQ ═══════════════ -->
    <section class="faq-section reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag"><?php echo e(__('domains_reg_faq_tag')); ?></div>
                <h2><?php echo e(__('domains_reg_faq_title')); ?></h2>
            </div>

            <div class="faq-layout faq-layout--full">
                <div class="faq-panels">
                    <div class="faq-panel active" id="faq-domains">
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('domains_reg_faq1_q')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('domains_reg_faq1_a')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('domains_reg_faq2_q')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('domains_reg_faq2_a')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('domains_reg_faq3_q')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo __('domains_reg_faq3_a'); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('domains_reg_faq4_q')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('domains_reg_faq4_a')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('domains_reg_faq5_q')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('domains_reg_faq5_a')); ?></p></div></div>
                    </div>
                </div>
            </div>

            <div class="faq-actions">
                <a href="<?php echo e(SITE_URL); ?>/contact/" class="btn-primary"><i class="fas fa-headset"></i> <?php echo e(__('domains_reg_contact_support')); ?></a>
                <a href="<?php echo e(SITE_URL); ?>/faq/" class="btn-secondary"><?php echo e(__('domains_reg_browse_faq')); ?> <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </section>

    <!-- ═══════════════ BOTTOM CTA ═══════════════ -->
    <section class="promo-cta reveal">
        <div class="container">
            <div class="promo-cta-inner">
                <div class="promo-cta-glow"></div>
                <div class="promo-cta-icon"><i class="fas fa-globe"></i></div>
                <h2><?php echo e(__('domains_reg_cta_title')); ?></h2>
                <p><?php echo e(__('domains_reg_cta_desc')); ?></p>
                <a href="#" onclick="document.querySelector('.domain-search-form input').focus();return false;" class="btn-primary"><?php echo e(__('domains_reg_cta_btn')); ?> <i class="fas fa-arrow-up"></i></a>
            </div>
        </div>
    </section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
