<?php
/**
 * YottaSrc — Tutorials & Knowledge Base
 * =======================================
 * Listing page for all tutorials, guides, and how-to articles.
 * Filterable by category with search and sidebar.
 */
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/topbar.php';
?>

    <!-- ═══════════════ HERO ═══════════════ -->
    <section class="page-hero tutorials-hero">
        <div class="container">
            <div class="page-hero-content" >
                <div class="page-breadcrumb">
                    <a href="<?php echo e(SITE_URL); ?>/"><?php echo e(__('breadcrumb_home')); ?></a>
                    <i class="fas fa-chevron-right"></i>
                    <span><?php echo e(__('tutorials_breadcrumb')); ?></span>
                </div>
                <h1><?php echo __('tutorials_title'); ?></h1>
                <p class="page-hero-desc">
                    <?php echo e(__('tutorials_desc')); ?>
                </p>
                <div class="tut-search-wrap">
                    <i class="fas fa-search"></i>
                    <input type="text" class="tut-search-input" id="tutorialSearch" placeholder="<?php echo e(__('tutorials_search_ph')); ?>" autocomplete="off">
                </div>
                <div class="tut-filter-bar">
                    <button class="tut-filter-btn active" data-filter="all"><?php echo e(__('tutorials_filter_all')); ?></button>
                    <button class="tut-filter-btn" data-filter="hosting"><?php echo e(__('tutorials_filter_hosting')); ?></button>
                    <button class="tut-filter-btn" data-filter="vps"><?php echo e(__('tutorials_filter_vps')); ?></button>
                    <button class="tut-filter-btn" data-filter="cloud"><?php echo e(__('tutorials_filter_cloud')); ?></button>
                    <button class="tut-filter-btn" data-filter="security"><?php echo e(__('tutorials_filter_security')); ?></button>
                    <button class="tut-filter-btn" data-filter="reseller"><?php echo e(__('tutorials_filter_reseller')); ?></button>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ TUTORIALS GRID ═══════════════ -->
    <section class="blog-main">
        <div class="container">
            <div class="blog-layout">
                <div>
                    <div class="tut-grid" id="tutorialGrid">

                        <a href="<?php echo e(SITE_URL); ?>/tutorials/deploy-nodejs-vps/" class="tut-card" data-category="vps">
                            <div class="tut-card-icon tut-icon-vps"><i class="fas fa-server"></i></div>
                            <div class="tut-card-body">
                                <span class="tut-cat-badge badge-vps"><?php echo e(__('tutorials_filter_vps')); ?></span>
                                <h4><?php echo e(__('tut_card1_title')); ?></h4>
                                <p><?php echo e(__('tut_card1_desc')); ?></p>
                                <div class="tut-card-meta">
                                    <span><i class="fas fa-calendar-alt"></i> <?php echo e(__('tut_card1_date')); ?></span>
                                    <span><i class="fas fa-eye"></i> <?php echo e(__('tut_card1_views')); ?></span>
                                </div>
                            </div>
                        </a>

                        <a href="#" class="tut-card" data-category="security">
                            <div class="tut-card-icon tut-icon-security"><i class="fas fa-shield-alt"></i></div>
                            <div class="tut-card-body">
                                <span class="tut-cat-badge badge-security"><?php echo e(__('tutorials_filter_security')); ?></span>
                                <h4><?php echo e(__('tut_card2_title')); ?></h4>
                                <p><?php echo e(__('tut_card2_desc')); ?></p>
                                <div class="tut-card-meta">
                                    <span><i class="fas fa-calendar-alt"></i> <?php echo e(__('tut_card2_date')); ?></span>
                                    <span><i class="fas fa-eye"></i> <?php echo e(__('tut_card2_views')); ?></span>
                                </div>
                            </div>
                        </a>

                        <a href="#" class="tut-card" data-category="vps">
                            <div class="tut-card-icon tut-icon-vps"><i class="fab fa-docker"></i></div>
                            <div class="tut-card-body">
                                <span class="tut-cat-badge badge-vps"><?php echo e(__('tutorials_filter_vps')); ?></span>
                                <h4><?php echo e(__('tut_card3_title')); ?></h4>
                                <p><?php echo e(__('tut_card3_desc')); ?></p>
                                <div class="tut-card-meta">
                                    <span><i class="fas fa-calendar-alt"></i> <?php echo e(__('tut_card3_date')); ?></span>
                                    <span><i class="fas fa-eye"></i> <?php echo e(__('tut_card3_views')); ?></span>
                                </div>
                            </div>
                        </a>

                        <a href="#" class="tut-card" data-category="hosting">
                            <div class="tut-card-icon tut-icon-hosting"><i class="fas fa-database"></i></div>
                            <div class="tut-card-body">
                                <span class="tut-cat-badge badge-hosting"><?php echo e(__('tutorials_filter_hosting')); ?></span>
                                <h4><?php echo e(__('tut_card4_title')); ?></h4>
                                <p><?php echo e(__('tut_card4_desc')); ?></p>
                                <div class="tut-card-meta">
                                    <span><i class="fas fa-calendar-alt"></i> <?php echo e(__('tut_card4_date')); ?></span>
                                    <span><i class="fas fa-eye"></i> <?php echo e(__('tut_card4_views')); ?></span>
                                </div>
                            </div>
                        </a>

                        <a href="#" class="tut-card" data-category="hosting">
                            <div class="tut-card-icon tut-icon-hosting"><i class="fab fa-wordpress"></i></div>
                            <div class="tut-card-body">
                                <span class="tut-cat-badge badge-hosting"><?php echo e(__('tutorials_filter_hosting')); ?></span>
                                <h4><?php echo e(__('tut_card5_title')); ?></h4>
                                <p><?php echo e(__('tut_card5_desc')); ?></p>
                                <div class="tut-card-meta">
                                    <span><i class="fas fa-calendar-alt"></i> <?php echo e(__('tut_card5_date')); ?></span>
                                    <span><i class="fas fa-eye"></i> <?php echo e(__('tut_card5_views')); ?></span>
                                </div>
                            </div>
                        </a>

                        <a href="#" class="tut-card" data-category="cloud">
                            <div class="tut-card-icon tut-icon-cloud"><i class="fas fa-cloud"></i></div>
                            <div class="tut-card-body">
                                <span class="tut-cat-badge badge-cloud"><?php echo e(__('tutorials_filter_cloud')); ?></span>
                                <h4><?php echo e(__('tut_card6_title')); ?></h4>
                                <p><?php echo e(__('tut_card6_desc')); ?></p>
                                <div class="tut-card-meta">
                                    <span><i class="fas fa-calendar-alt"></i> <?php echo e(__('tut_card6_date')); ?></span>
                                    <span><i class="fas fa-eye"></i> <?php echo e(__('tut_card6_views')); ?></span>
                                </div>
                            </div>
                        </a>

                        <a href="#" class="tut-card" data-category="reseller">
                            <div class="tut-card-icon tut-icon-reseller"><i class="fas fa-store"></i></div>
                            <div class="tut-card-body">
                                <span class="tut-cat-badge badge-reseller"><?php echo e(__('tutorials_filter_reseller')); ?></span>
                                <h4><?php echo e(__('tut_card7_title')); ?></h4>
                                <p><?php echo e(__('tut_card7_desc')); ?></p>
                                <div class="tut-card-meta">
                                    <span><i class="fas fa-calendar-alt"></i> <?php echo e(__('tut_card7_date')); ?></span>
                                    <span><i class="fas fa-eye"></i> <?php echo e(__('tut_card7_views')); ?></span>
                                </div>
                            </div>
                        </a>

                        <a href="#" class="tut-card" data-category="security">
                            <div class="tut-card-icon tut-icon-security"><i class="fas fa-lock"></i></div>
                            <div class="tut-card-body">
                                <span class="tut-cat-badge badge-security"><?php echo e(__('tutorials_filter_security')); ?></span>
                                <h4><?php echo e(__('tut_card8_title')); ?></h4>
                                <p><?php echo e(__('tut_card8_desc')); ?></p>
                                <div class="tut-card-meta">
                                    <span><i class="fas fa-calendar-alt"></i> <?php echo e(__('tut_card8_date')); ?></span>
                                    <span><i class="fas fa-eye"></i> <?php echo e(__('tut_card8_views')); ?></span>
                                </div>
                            </div>
                        </a>

                        <a href="#" class="tut-card" data-category="cloud">
                            <div class="tut-card-icon tut-icon-cloud"><i class="fas fa-balance-scale"></i></div>
                            <div class="tut-card-body">
                                <span class="tut-cat-badge badge-cloud"><?php echo e(__('tutorials_filter_cloud')); ?></span>
                                <h4><?php echo e(__('tut_card9_title')); ?></h4>
                                <p><?php echo e(__('tut_card9_desc')); ?></p>
                                <div class="tut-card-meta">
                                    <span><i class="fas fa-calendar-alt"></i> <?php echo e(__('tut_card9_date')); ?></span>
                                    <span><i class="fas fa-eye"></i> <?php echo e(__('tut_card9_views')); ?></span>
                                </div>
                            </div>
                        </a>

                        <a href="#" class="tut-card" data-category="hosting">
                            <div class="tut-card-icon tut-icon-hosting"><i class="fas fa-envelope"></i></div>
                            <div class="tut-card-body">
                                <span class="tut-cat-badge badge-hosting"><?php echo e(__('tutorials_filter_hosting')); ?></span>
                                <h4><?php echo e(__('tut_card10_title')); ?></h4>
                                <p><?php echo e(__('tut_card10_desc')); ?></p>
                                <div class="tut-card-meta">
                                    <span><i class="fas fa-calendar-alt"></i> <?php echo e(__('tut_card10_date')); ?></span>
                                    <span><i class="fas fa-eye"></i> <?php echo e(__('tut_card10_views')); ?></span>
                                </div>
                            </div>
                        </a>

                    </div>

                    <!-- No Results -->
                    <div class="blog-no-results" id="tutorialNoResults">
                        <i class="fas fa-search"></i>
                        <p><?php echo e(__('tutorials_no_results')); ?></p>
                    </div>

                    <!-- Pagination -->
                    <div class="blog-pagination">
                        <a class="pagination-btn disabled"><i class="fas fa-arrow-left"></i> <span><?php echo e(__('tutorials_pagination_prev')); ?></span></a>
                        <div class="pagination-pages">
                            <a class="pagination-num active">1</a>
                            <a class="pagination-num">2</a>
                            <a class="pagination-num">3</a>
                        </div>
                        <a class="pagination-btn"><span><?php echo e(__('tutorials_pagination_next')); ?></span> <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- Sidebar -->
                <aside class="blog-sidebar">
                    <!-- Popular Tutorials -->
                    <div class="blog-sidebar-card">
                        <h5 class="sidebar-card-title"><i class="fas fa-fire"></i> <?php echo e(__('tutorials_sidebar_popular')); ?></h5>
                        <ul class="sidebar-posts">
                            <li><a href="#">
                                <span class="sidebar-post-num">01</span>
                                <div>
                                    <strong><?php echo e(__('tutorials_sidebar_popular1')); ?></strong>
                                    <span class="sidebar-post-meta"><?php echo e(__('tutorials_sidebar_popular1_meta')); ?></span>
                                </div>
                            </a></li>
                            <li><a href="#">
                                <span class="sidebar-post-num">02</span>
                                <div>
                                    <strong><?php echo e(__('tutorials_sidebar_popular2')); ?></strong>
                                    <span class="sidebar-post-meta"><?php echo e(__('tutorials_sidebar_popular2_meta')); ?></span>
                                </div>
                            </a></li>
                            <li><a href="<?php echo e(SITE_URL); ?>/tutorials/deploy-nodejs-vps/">
                                <span class="sidebar-post-num">03</span>
                                <div>
                                    <strong><?php echo e(__('tutorials_sidebar_popular3')); ?></strong>
                                    <span class="sidebar-post-meta"><?php echo e(__('tutorials_sidebar_popular3_meta')); ?></span>
                                </div>
                            </a></li>
                            <li><a href="#">
                                <span class="sidebar-post-num">04</span>
                                <div>
                                    <strong><?php echo e(__('tutorials_sidebar_popular4')); ?></strong>
                                    <span class="sidebar-post-meta"><?php echo e(__('tutorials_sidebar_popular4_meta')); ?></span>
                                </div>
                            </a></li>
                        </ul>
                    </div>

                    <!-- Categories -->
                    <div class="blog-sidebar-card">
                        <h5 class="sidebar-card-title"><i class="fas fa-folder"></i> <?php echo e(__('tutorials_sidebar_categories')); ?></h5>
                        <ul class="sidebar-categories">
                            <li><a href="#"><span><?php echo e(__('tutorials_filter_hosting')); ?></span> <span class="sidebar-cat-count">3</span></a></li>
                            <li><a href="#"><span><?php echo e(__('tutorials_filter_vps')); ?></span> <span class="sidebar-cat-count">2</span></a></li>
                            <li><a href="#"><span><?php echo e(__('tutorials_filter_cloud')); ?></span> <span class="sidebar-cat-count">2</span></a></li>
                            <li><a href="#"><span><?php echo e(__('tutorials_filter_security')); ?></span> <span class="sidebar-cat-count">2</span></a></li>
                            <li><a href="#"><span><?php echo e(__('tutorials_filter_reseller')); ?></span> <span class="sidebar-cat-count">1</span></a></li>
                        </ul>
                    </div>

                    <!-- Newsletter -->
                    <div class="blog-sidebar-card blog-newsletter">
                        <div class="newsletter-icon"><i class="fas fa-envelope"></i></div>
                        <h5 class="sidebar-card-title"><?php echo e(__('tutorials_sidebar_newsletter_title')); ?></h5>
                        <p><?php echo e(__('tutorials_sidebar_newsletter_desc')); ?></p>
                        <form class="newsletter-form" onsubmit="return false;">
                            <input type="email" class="newsletter-input" placeholder="<?php echo e(__('tutorials_sidebar_newsletter_ph')); ?>">
                            <button class="btn-primary newsletter-btn"><?php echo e(__('tutorials_sidebar_newsletter_btn')); ?> <i class="fas fa-arrow-right"></i></button>
                        </form>
                    </div>
                </aside>
            </div>
        </div>
    </section>

    <!-- ═══════════════ BOTTOM CTA ═══════════════ -->
    <section class="promo-cta reveal">
        <div class="container">
            <div class="promo-cta-inner">
                <div class="promo-cta-glow"></div>
                <div class="promo-cta-icon"><i class="fas fa-rocket"></i></div>
                <h2><?php echo e(__('tutorials_cta_title')); ?></h2>
                <p><?php echo e(__('tutorials_cta_desc')); ?></p>
                <a href="<?php echo e(SITE_URL); ?>/vps/" class="btn-primary"><?php echo e(__('tutorials_cta_btn')); ?> <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </section>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        'use strict';

        var searchInput = document.getElementById('tutorialSearch');
        var grid = document.getElementById('tutorialGrid');
        var noResults = document.getElementById('tutorialNoResults');
        var tags = document.querySelectorAll('.tut-filter-btn');
        var cards = grid ? grid.querySelectorAll('.tut-card') : [];
        var activeFilter = 'all';

        function filterCards() {
            var query = searchInput ? searchInput.value.toLowerCase().trim() : '';
            var visibleCount = 0;

            cards.forEach(function(card) {
                var category = card.getAttribute('data-category') || '';
                var text = card.textContent.toLowerCase();
                var matchesFilter = (activeFilter === 'all' || category === activeFilter);
                var matchesSearch = (!query || text.indexOf(query) !== -1);

                if (matchesFilter && matchesSearch) {
                    card.style.display = '';
                    visibleCount++;
                } else {
                    card.style.display = 'none';
                }
            });

            if (noResults) {
                noResults.style.display = visibleCount === 0 ? 'block' : 'none';
            }
        }

        tags.forEach(function(tag) {
            tag.addEventListener('click', function() {
                tags.forEach(function(t) { t.classList.remove('active'); });
                tag.classList.add('active');
                activeFilter = tag.getAttribute('data-filter') || 'all';
                filterCards();
            });
        });

        if (searchInput) {
            searchInput.addEventListener('input', filterCards);
        }
    });
    </script>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
