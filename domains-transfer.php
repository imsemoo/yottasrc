<?php
/**
 * YottaSrc — Domain Transfer
 * ============================
 * Transfer your existing domains to YottaSrc.
 */
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/topbar.php';
?>

    <!-- ═══════════════ HERO ═══════════════ -->
    <section class="page-hero">
        <div class="container">
            <div class="page-hero-content" >
                <div class="page-breadcrumb" >
                    <a href="<?php echo e(SITE_URL); ?>/"><?php echo e(__('breadcrumb_home')); ?></a>
                    <i class="fas fa-chevron-right"></i>
                    <a href="<?php echo e(SITE_URL); ?>/domains-registration/"><?php echo e(__('domains_transfer_breadcrumb_parent')); ?></a>
                    <i class="fas fa-chevron-right"></i>
                    <span><?php echo e(__('domains_transfer_breadcrumb')); ?></span>
                </div>
                <h1><?php echo __('domains_transfer_title'); ?></h1>
                <p class="page-hero-desc">
                    <?php echo e(__('domains_transfer_desc')); ?>
                </p>
                <div class="page-hero-badges" >
                    <div class="hero-badge-item"><i class="fas fa-check"></i> <?php echo e(__('domains_transfer_badge1')); ?></div>
                    <div class="hero-badge-item"><i class="fas fa-check"></i> <?php echo e(__('domains_transfer_badge2')); ?></div>
                    <div class="hero-badge-item"><i class="fas fa-check"></i> <?php echo e(__('domains_transfer_badge3')); ?></div>
                    <div class="hero-badge-item"><i class="fas fa-check"></i> <?php echo e(__('domains_transfer_badge4')); ?></div>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ DOMAIN TRANSFER SEARCH ═══════════════ -->
    <section class="domain-search-section reveal">
        <div class="container">
            <div class="domain-search-box">
                <h2><?php echo e(__('domains_transfer_search_title')); ?></h2>
                <form class="domain-search-form" action="<?php echo e(CP_URL); ?>/cart.php?a=add&domain=transfer" method="get">
                    <div class="domain-search-input-wrap">
                        <i class="fas fa-exchange-alt"></i>
                        <input type="text" name="domain" placeholder="<?php echo e(__('domains_transfer_search_placeholder')); ?>" autocomplete="off" required>
                        <button type="submit" class="btn-primary"><?php echo e(__('domains_transfer_search_btn')); ?> <i class="fas fa-arrow-right"></i></button>
                    </div>
                </form>
                <p class="domain-search-note"><?php echo e(__('domains_transfer_search_note')); ?></p>
            </div>
        </div>
    </section>

    <!-- ═══════════════ HOW IT WORKS ═══════════════ -->
    <section class="onboarding reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag"><?php echo e(__('domains_transfer_steps_tag')); ?></div>
                <h2><?php echo e(__('domains_transfer_steps_title')); ?></h2>
                <p><?php echo e(__('domains_transfer_steps_desc')); ?></p>
            </div>

            <div class="vps-steps-grid">
                <div class="vps-step-card">
                    <div class="vps-step-num">1</div>
                    <div class="vps-step-icon"><i class="fas fa-unlock"></i></div>
                    <h4><?php echo e(__('domains_transfer_step1_title')); ?></h4>
                    <p><?php echo e(__('domains_transfer_step1_desc')); ?></p>
                </div>
                <div class="vps-step-card">
                    <div class="vps-step-num">2</div>
                    <div class="vps-step-icon icon-green"><i class="fas fa-key"></i></div>
                    <h4><?php echo e(__('domains_transfer_step2_title')); ?></h4>
                    <p><?php echo e(__('domains_transfer_step2_desc')); ?></p>
                </div>
                <div class="vps-step-card">
                    <div class="vps-step-num">3</div>
                    <div class="vps-step-icon icon-purple"><i class="fas fa-shopping-cart"></i></div>
                    <h4><?php echo e(__('domains_transfer_step3_title')); ?></h4>
                    <p><?php echo e(__('domains_transfer_step3_desc')); ?></p>
                </div>
                <div class="vps-step-card">
                    <div class="vps-step-num">4</div>
                    <div class="vps-step-icon icon-amber"><i class="fas fa-check-circle"></i></div>
                    <h4><?php echo e(__('domains_transfer_step4_title')); ?></h4>
                    <p><?php echo e(__('domains_transfer_step4_desc')); ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ TRANSFER PRICING ═══════════════ -->
    <section class="domain-pricing reveal" id="pricing">
        <div class="container">
            <div class="section-header">
                <div class="section-tag"><?php echo e(__('domains_transfer_pricing_tag')); ?></div>
                <h2><?php echo e(__('domains_transfer_pricing_title')); ?></h2>
                <p><?php echo e(__('domains_transfer_pricing_desc')); ?></p>
            </div>

            <div class="domain-tld-grid">
                <div class="domain-tld-card">
                    <div class="domain-tld-name">.com</div>
                    <div class="domain-tld-desc"><?php echo e(__('domains_transfer_free_ext')); ?></div>
                    <div class="domain-tld-price"><span class="currency">€</span><span class="amount">9.99</span><span class="period">/<?php echo e(__('domains_transfer_per_transfer')); ?></span></div>
                    <a href="<?php echo e(CP_URL); ?>/cart.php?a=add&domain=transfer" class="btn-primary btn-sm"><?php echo e(__('domains_transfer_btn')); ?></a>
                </div>
                <div class="domain-tld-card">
                    <div class="domain-tld-name">.net</div>
                    <div class="domain-tld-desc"><?php echo e(__('domains_transfer_free_ext')); ?></div>
                    <div class="domain-tld-price"><span class="currency">€</span><span class="amount">11.99</span><span class="period">/<?php echo e(__('domains_transfer_per_transfer')); ?></span></div>
                    <a href="<?php echo e(CP_URL); ?>/cart.php?a=add&domain=transfer" class="btn-primary btn-sm"><?php echo e(__('domains_transfer_btn')); ?></a>
                </div>
                <div class="domain-tld-card">
                    <div class="domain-tld-name">.org</div>
                    <div class="domain-tld-desc"><?php echo e(__('domains_transfer_free_ext')); ?></div>
                    <div class="domain-tld-price"><span class="currency">€</span><span class="amount">10.99</span><span class="period">/<?php echo e(__('domains_transfer_per_transfer')); ?></span></div>
                    <a href="<?php echo e(CP_URL); ?>/cart.php?a=add&domain=transfer" class="btn-primary btn-sm"><?php echo e(__('domains_transfer_btn')); ?></a>
                </div>
                <div class="domain-tld-card">
                    <div class="domain-tld-name">.io</div>
                    <div class="domain-tld-desc"><?php echo e(__('domains_transfer_free_ext')); ?></div>
                    <div class="domain-tld-price"><span class="currency">€</span><span class="amount">29.99</span><span class="period">/<?php echo e(__('domains_transfer_per_transfer')); ?></span></div>
                    <a href="<?php echo e(CP_URL); ?>/cart.php?a=add&domain=transfer" class="btn-primary btn-sm"><?php echo e(__('domains_transfer_btn')); ?></a>
                </div>
                <div class="domain-tld-card">
                    <div class="domain-tld-name">.dev</div>
                    <div class="domain-tld-desc"><?php echo e(__('domains_transfer_free_ext')); ?></div>
                    <div class="domain-tld-price"><span class="currency">€</span><span class="amount">14.99</span><span class="period">/<?php echo e(__('domains_transfer_per_transfer')); ?></span></div>
                    <a href="<?php echo e(CP_URL); ?>/cart.php?a=add&domain=transfer" class="btn-primary btn-sm"><?php echo e(__('domains_transfer_btn')); ?></a>
                </div>
                <div class="domain-tld-card">
                    <div class="domain-tld-name">.co</div>
                    <div class="domain-tld-desc"><?php echo e(__('domains_transfer_free_ext')); ?></div>
                    <div class="domain-tld-price"><span class="currency">€</span><span class="amount">24.99</span><span class="period">/<?php echo e(__('domains_transfer_per_transfer')); ?></span></div>
                    <a href="<?php echo e(CP_URL); ?>/cart.php?a=add&domain=transfer" class="btn-primary btn-sm"><?php echo e(__('domains_transfer_btn')); ?></a>
                </div>
                <div class="domain-tld-card">
                    <div class="domain-tld-name">.xyz</div>
                    <div class="domain-tld-desc"><?php echo e(__('domains_transfer_free_ext')); ?></div>
                    <div class="domain-tld-price"><span class="currency">€</span><span class="amount">9.99</span><span class="period">/<?php echo e(__('domains_transfer_per_transfer')); ?></span></div>
                    <a href="<?php echo e(CP_URL); ?>/cart.php?a=add&domain=transfer" class="btn-primary btn-sm"><?php echo e(__('domains_transfer_btn')); ?></a>
                </div>
                <div class="domain-tld-card">
                    <div class="domain-tld-name">.me</div>
                    <div class="domain-tld-desc"><?php echo e(__('domains_transfer_free_ext')); ?></div>
                    <div class="domain-tld-price"><span class="currency">€</span><span class="amount">14.99</span><span class="period">/<?php echo e(__('domains_transfer_per_transfer')); ?></span></div>
                    <a href="<?php echo e(CP_URL); ?>/cart.php?a=add&domain=transfer" class="btn-primary btn-sm"><?php echo e(__('domains_transfer_btn')); ?></a>
                </div>
            </div>

            <div class="pricing-custom">
                <p><?php echo __('domains_transfer_pricing_other'); ?></p>
            </div>
        </div>
    </section>

    <!-- ═══════════════ ALL TLD PRICING TABLE ═══════════════ -->
    <section class="domain-all-tlds reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag"><?php echo e(__('domains_transfer_all_ext_tag')); ?></div>
                <h2><?php echo e(__('domains_transfer_all_ext_title')); ?></h2>
                <p><?php echo e(__('domains_transfer_all_ext_desc')); ?></p>
            </div>

            <div class="tld-table-controls">
                <div class="tld-table-filters">
                    <button class="tld-filter active" data-filter="all"><?php echo e(__('domains_transfer_filter_all')); ?></button>
                    <button class="tld-filter" data-filter="popular"><i class="fas fa-fire"></i> <?php echo e(__('domains_transfer_filter_popular')); ?></button>
                    <button class="tld-filter" data-filter="sale"><i class="fas fa-tag"></i> <?php echo e(__('domains_transfer_filter_sale')); ?></button>
                    <button class="tld-filter" data-filter="country"><i class="fas fa-flag"></i> <?php echo e(__('domains_transfer_filter_country')); ?></button>
                </div>
                <div class="tld-table-search">
                    <i class="fas fa-search"></i>
                    <input type="text" placeholder="<?php echo e(__('domains_transfer_search_ext_placeholder')); ?>" class="tld-search-input">
                </div>
            </div>

            <div class="tld-table-wrap">
                <table class="tld-table">
                    <thead>
                        <tr>
                            <th><?php echo e(__('domains_transfer_th_extension')); ?></th>
                            <th><?php echo e(__('domains_transfer_th_register')); ?></th>
                            <th><?php echo e(__('domains_transfer_th_transfer')); ?></th>
                            <th><?php echo e(__('domains_transfer_th_renew')); ?></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr data-category="popular">
                            <td><span class="tld-ext">.com</span><span class="tld-badge tld-badge--hot"><?php echo e(__('domains_transfer_badge_hot')); ?></span></td>
                            <td><span class="tld-price">€11.99</span><span class="tld-period">/<?php echo e(__('domains_transfer_yr')); ?></span></td>
                            <td><span class="tld-price">€11.99</span><span class="tld-period">/<?php echo e(__('domains_transfer_yr')); ?></span></td>
                            <td><span class="tld-price">€14.99</span><span class="tld-period">/<?php echo e(__('domains_transfer_yr')); ?></span></td>
                            <td><a href="<?php echo e(CP_URL); ?>/cart.php?a=add&domain=transfer" class="btn-primary btn-sm"><?php echo e(__('domains_transfer_btn')); ?></a></td>
                        </tr>
                        <tr data-category="popular">
                            <td><span class="tld-ext">.net</span></td>
                            <td><span class="tld-price">€15.99</span><span class="tld-period">/<?php echo e(__('domains_transfer_yr')); ?></span></td>
                            <td><span class="tld-price">€15.99</span><span class="tld-period">/<?php echo e(__('domains_transfer_yr')); ?></span></td>
                            <td><span class="tld-price">€19.99</span><span class="tld-period">/<?php echo e(__('domains_transfer_yr')); ?></span></td>
                            <td><a href="<?php echo e(CP_URL); ?>/cart.php?a=add&domain=transfer" class="btn-primary btn-sm"><?php echo e(__('domains_transfer_btn')); ?></a></td>
                        </tr>
                        <tr data-category="popular">
                            <td><span class="tld-ext">.org</span><span class="tld-badge tld-badge--hot"><?php echo e(__('domains_transfer_badge_hot')); ?></span></td>
                            <td><span class="tld-price">€14.99</span><span class="tld-period">/<?php echo e(__('domains_transfer_yr')); ?></span></td>
                            <td><span class="tld-price">€14.99</span><span class="tld-period">/<?php echo e(__('domains_transfer_yr')); ?></span></td>
                            <td><span class="tld-price">€17.99</span><span class="tld-period">/<?php echo e(__('domains_transfer_yr')); ?></span></td>
                            <td><a href="<?php echo e(CP_URL); ?>/cart.php?a=add&domain=transfer" class="btn-primary btn-sm"><?php echo e(__('domains_transfer_btn')); ?></a></td>
                        </tr>
                        <tr data-category="popular">
                            <td><span class="tld-ext">.io</span><span class="tld-badge tld-badge--hot"><?php echo e(__('domains_transfer_badge_hot')); ?></span></td>
                            <td><span class="tld-price">€39.00</span><span class="tld-period">/<?php echo e(__('domains_transfer_yr')); ?></span></td>
                            <td><span class="tld-price">€59.99</span><span class="tld-period">/<?php echo e(__('domains_transfer_yr')); ?></span></td>
                            <td><span class="tld-price">€70.99</span><span class="tld-period">/<?php echo e(__('domains_transfer_yr')); ?></span></td>
                            <td><a href="<?php echo e(CP_URL); ?>/cart.php?a=add&domain=transfer" class="btn-primary btn-sm"><?php echo e(__('domains_transfer_btn')); ?></a></td>
                        </tr>
                        <tr data-category="popular">
                            <td><span class="tld-ext">.dev</span></td>
                            <td><span class="tld-price">€14.99</span><span class="tld-period">/<?php echo e(__('domains_transfer_yr')); ?></span></td>
                            <td><span class="tld-price">€14.99</span><span class="tld-period">/<?php echo e(__('domains_transfer_yr')); ?></span></td>
                            <td><span class="tld-price">€16.99</span><span class="tld-period">/<?php echo e(__('domains_transfer_yr')); ?></span></td>
                            <td><a href="<?php echo e(CP_URL); ?>/cart.php?a=add&domain=transfer" class="btn-primary btn-sm"><?php echo e(__('domains_transfer_btn')); ?></a></td>
                        </tr>
                        <tr data-category="popular">
                            <td><span class="tld-ext">.co</span></td>
                            <td><span class="tld-price">€24.99</span><span class="tld-period">/<?php echo e(__('domains_transfer_yr')); ?></span></td>
                            <td><span class="tld-price">€24.99</span><span class="tld-period">/<?php echo e(__('domains_transfer_yr')); ?></span></td>
                            <td><span class="tld-price">€29.99</span><span class="tld-period">/<?php echo e(__('domains_transfer_yr')); ?></span></td>
                            <td><a href="<?php echo e(CP_URL); ?>/cart.php?a=add&domain=transfer" class="btn-primary btn-sm"><?php echo e(__('domains_transfer_btn')); ?></a></td>
                        </tr>
                        <tr data-category="sale">
                            <td><span class="tld-ext">.info</span><span class="tld-badge tld-badge--sale"><?php echo e(__('domains_transfer_badge_sale')); ?></span></td>
                            <td><span class="tld-price">€4.99</span><span class="tld-period">/<?php echo e(__('domains_transfer_yr')); ?></span></td>
                            <td><span class="tld-price">€31.99</span><span class="tld-period">/<?php echo e(__('domains_transfer_yr')); ?></span></td>
                            <td><span class="tld-price">€34.99</span><span class="tld-period">/<?php echo e(__('domains_transfer_yr')); ?></span></td>
                            <td><a href="<?php echo e(CP_URL); ?>/cart.php?a=add&domain=transfer" class="btn-primary btn-sm"><?php echo e(__('domains_transfer_btn')); ?></a></td>
                        </tr>
                        <tr data-category="sale">
                            <td><span class="tld-ext">.top</span><span class="tld-badge tld-badge--sale"><?php echo e(__('domains_transfer_badge_sale')); ?></span></td>
                            <td><span class="tld-price">€3.99</span><span class="tld-period">/<?php echo e(__('domains_transfer_yr')); ?></span></td>
                            <td><span class="tld-price">€10.99</span><span class="tld-period">/<?php echo e(__('domains_transfer_yr')); ?></span></td>
                            <td><span class="tld-price">€12.99</span><span class="tld-period">/<?php echo e(__('domains_transfer_yr')); ?></span></td>
                            <td><a href="<?php echo e(CP_URL); ?>/cart.php?a=add&domain=transfer" class="btn-primary btn-sm"><?php echo e(__('domains_transfer_btn')); ?></a></td>
                        </tr>
                        <tr data-category="sale">
                            <td><span class="tld-ext">.store</span><span class="tld-badge tld-badge--sale"><?php echo e(__('domains_transfer_badge_sale')); ?></span></td>
                            <td><span class="tld-price">€4.99</span><span class="tld-period">/<?php echo e(__('domains_transfer_yr')); ?></span></td>
                            <td><span class="tld-price">€4.99</span><span class="tld-period">/<?php echo e(__('domains_transfer_yr')); ?></span></td>
                            <td><span class="tld-price">€39.99</span><span class="tld-period">/<?php echo e(__('domains_transfer_yr')); ?></span></td>
                            <td><a href="<?php echo e(CP_URL); ?>/cart.php?a=add&domain=transfer" class="btn-primary btn-sm"><?php echo e(__('domains_transfer_btn')); ?></a></td>
                        </tr>
                        <tr data-category="sale">
                            <td><span class="tld-ext">.xyz</span><span class="tld-badge tld-badge--sale"><?php echo e(__('domains_transfer_badge_sale')); ?></span></td>
                            <td><span class="tld-price">€1.99</span><span class="tld-period">/<?php echo e(__('domains_transfer_yr')); ?></span></td>
                            <td><span class="tld-price">€9.99</span><span class="tld-period">/<?php echo e(__('domains_transfer_yr')); ?></span></td>
                            <td><span class="tld-price">€12.99</span><span class="tld-period">/<?php echo e(__('domains_transfer_yr')); ?></span></td>
                            <td><a href="<?php echo e(CP_URL); ?>/cart.php?a=add&domain=transfer" class="btn-primary btn-sm"><?php echo e(__('domains_transfer_btn')); ?></a></td>
                        </tr>
                        <tr data-category="sale">
                            <td><span class="tld-ext">.icu</span><span class="tld-badge tld-badge--new"><?php echo e(__('domains_transfer_badge_new')); ?></span></td>
                            <td><span class="tld-price">€1.99</span><span class="tld-period">/<?php echo e(__('domains_transfer_yr')); ?></span></td>
                            <td><span class="tld-price">€12.00</span><span class="tld-period">/<?php echo e(__('domains_transfer_yr')); ?></span></td>
                            <td><span class="tld-price">€11.00</span><span class="tld-period">/<?php echo e(__('domains_transfer_yr')); ?></span></td>
                            <td><a href="<?php echo e(CP_URL); ?>/cart.php?a=add&domain=transfer" class="btn-primary btn-sm"><?php echo e(__('domains_transfer_btn')); ?></a></td>
                        </tr>
                        <tr data-category="country">
                            <td><span class="tld-ext">.eu</span></td>
                            <td><span class="tld-price">€7.99</span><span class="tld-period">/<?php echo e(__('domains_transfer_yr')); ?></span></td>
                            <td><span class="tld-price">€7.99</span><span class="tld-period">/<?php echo e(__('domains_transfer_yr')); ?></span></td>
                            <td><span class="tld-price">€9.99</span><span class="tld-period">/<?php echo e(__('domains_transfer_yr')); ?></span></td>
                            <td><a href="<?php echo e(CP_URL); ?>/cart.php?a=add&domain=transfer" class="btn-primary btn-sm"><?php echo e(__('domains_transfer_btn')); ?></a></td>
                        </tr>
                        <tr data-category="country">
                            <td><span class="tld-ext">.de</span></td>
                            <td><span class="tld-price">€8.99</span><span class="tld-period">/<?php echo e(__('domains_transfer_yr')); ?></span></td>
                            <td><span class="tld-price">€8.99</span><span class="tld-period">/<?php echo e(__('domains_transfer_yr')); ?></span></td>
                            <td><span class="tld-price">€10.99</span><span class="tld-period">/<?php echo e(__('domains_transfer_yr')); ?></span></td>
                            <td><a href="<?php echo e(CP_URL); ?>/cart.php?a=add&domain=transfer" class="btn-primary btn-sm"><?php echo e(__('domains_transfer_btn')); ?></a></td>
                        </tr>
                        <tr data-category="country">
                            <td><span class="tld-ext">.ru</span></td>
                            <td><span class="tld-price">€5.99</span><span class="tld-period">/<?php echo e(__('domains_transfer_yr')); ?></span></td>
                            <td><span class="tld-price">€1.99</span><span class="tld-period">/<?php echo e(__('domains_transfer_yr')); ?></span></td>
                            <td><span class="tld-price">€6.99</span><span class="tld-period">/<?php echo e(__('domains_transfer_yr')); ?></span></td>
                            <td><a href="<?php echo e(CP_URL); ?>/cart.php?a=add&domain=transfer" class="btn-primary btn-sm"><?php echo e(__('domains_transfer_btn')); ?></a></td>
                        </tr>
                        <tr data-category="country">
                            <td><span class="tld-ext">.me</span></td>
                            <td><span class="tld-price">€8.99</span><span class="tld-period">/<?php echo e(__('domains_transfer_yr')); ?></span></td>
                            <td><span class="tld-price">€14.99</span><span class="tld-period">/<?php echo e(__('domains_transfer_yr')); ?></span></td>
                            <td><span class="tld-price">€19.99</span><span class="tld-period">/<?php echo e(__('domains_transfer_yr')); ?></span></td>
                            <td><a href="<?php echo e(CP_URL); ?>/cart.php?a=add&domain=transfer" class="btn-primary btn-sm"><?php echo e(__('domains_transfer_btn')); ?></a></td>
                        </tr>
                        <tr class="tld-table-empty">
                            <td colspan="5"><?php echo e(__('domains_transfer_no_results')); ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="tld-table-footer">
                <p><?php echo __('domains_transfer_table_footer'); ?></p>
            </div>
        </div>
    </section>

    <!-- ═══════════════ WHY TRANSFER ═══════════════ -->
    <section class="bento-features reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag"><?php echo e(__('domains_transfer_benefits_tag')); ?></div>
                <h2><?php echo e(__('domains_transfer_benefits_title')); ?></h2>
                <p><?php echo e(__('domains_transfer_benefits_desc')); ?></p>
            </div>

            <div class="bento-grid">
                <div class="bento-card bento-sm">
                    <div class="bento-card-icon"><i class="fas fa-gift"></i></div>
                    <h4><?php echo e(__('domains_transfer_ben_ext_title')); ?></h4>
                    <p><?php echo e(__('domains_transfer_ben_ext_desc')); ?></p>
                </div>
                <div class="bento-card bento-sm">
                    <div class="bento-card-icon icon-green"><i class="fas fa-user-shield"></i></div>
                    <h3><?php echo e(__('domains_transfer_ben_whois_title')); ?></h3>
                    <p><?php echo e(__('domains_transfer_ben_whois_desc')); ?></p>
                </div>
                <div class="bento-card bento-sm">
                    <div class="bento-card-icon icon-blue"><i class="fas fa-tachometer-alt"></i></div>
                    <h3><?php echo e(__('domains_transfer_ben_dns_title')); ?></h3>
                    <p><?php echo e(__('domains_transfer_ben_dns_desc')); ?></p>
                </div>
                <div class="bento-card bento-sm">
                    <div class="bento-card-icon icon-purple"><i class="fas fa-layer-group"></i></div>
                    <h3><?php echo e(__('domains_transfer_ben_unified_title')); ?></h3>
                    <p><?php echo e(__('domains_transfer_ben_unified_desc')); ?></p>
                </div>
                <div class="bento-card bento-sm">
                    <div class="bento-card-icon icon-amber"><i class="fas fa-headset"></i></div>
                    <h3><?php echo e(__('domains_transfer_ben_assist_title')); ?></h3>
                    <p><?php echo e(__('domains_transfer_ben_assist_desc')); ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ FAQ ═══════════════ -->
    <section class="faq-section reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag"><?php echo e(__('domains_transfer_faq_tag')); ?></div>
                <h2><?php echo e(__('domains_transfer_faq_title')); ?></h2>
            </div>

            <div class="faq-layout faq-layout--full">
                <div class="faq-panels">
                    <div class="faq-panel active" id="faq-transfer">
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('domains_transfer_faq1_q')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('domains_transfer_faq1_a')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('domains_transfer_faq2_q')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('domains_transfer_faq2_a')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('domains_transfer_faq3_q')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('domains_transfer_faq3_a')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('domains_transfer_faq4_q')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('domains_transfer_faq4_a')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('domains_transfer_faq5_q')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('domains_transfer_faq5_a')); ?></p></div></div>
                    </div>
                </div>
            </div>

            <div class="faq-actions">
                <a href="<?php echo e(SITE_URL); ?>/contact/" class="btn-primary"><i class="fas fa-headset"></i> <?php echo e(__('domains_transfer_get_help')); ?></a>
                <a href="<?php echo e(SITE_URL); ?>/faq/" class="btn-secondary"><?php echo e(__('domains_transfer_browse_faq')); ?> <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </section>

    <!-- ═══════════════ BOTTOM CTA ═══════════════ -->
    <section class="promo-cta reveal">
        <div class="container">
            <div class="promo-cta-inner">
                <div class="promo-cta-glow"></div>
                <div class="promo-cta-icon"><i class="fas fa-exchange-alt"></i></div>
                <h2><?php echo e(__('domains_transfer_cta_title')); ?></h2>
                <p><?php echo e(__('domains_transfer_cta_desc')); ?></p>
                <a href="#" onclick="document.querySelector('.domain-search-form input').focus();return false;" class="btn-primary"><?php echo e(__('domains_transfer_cta_btn')); ?> <i class="fas fa-arrow-up"></i></a>
            </div>
        </div>
    </section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
