<?php
/**
 * YottaSrc — Blog / Knowledge Hub
 * =================================
 */
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/topbar.php';
?>

    <!-- ═══════════════ HERO ═══════════════ -->
    <section class="page-hero page-hero--compact">
        <div class="container">
            <div class="page-hero-split">
                <div class="page-hero-content">
                    <div class="page-breadcrumb">
                        <a href="<?php echo e(SITE_URL); ?>/"><?php echo e(__('breadcrumb_home')); ?></a>
                        <i class="fas fa-chevron-right"></i>
                        <span><?php echo e(__('blog_breadcrumb')); ?></span>
                    </div>
                    <h1><?php echo __('blog_title'); ?></h1>
                    <p class="page-hero-desc"><?php echo e(__('blog_desc')); ?></p>
                    <div class="blog-search-wrap">
                        <i class="fas fa-search"></i>
                        <input type="text" id="blogSearch" class="blog-search-input" placeholder="<?php echo e(__('blog_search_placeholder')); ?>" autocomplete="off">
                    </div>
                    <div class="blog-hero-tags">
                        <button class="blog-tag active" data-category="all"><?php echo e(__('blog_all')); ?></button>
                        <button class="blog-tag" data-category="hosting"><?php echo e(__('blog_cat_hosting')); ?></button>
                        <button class="blog-tag" data-category="vps"><?php echo e(__('blog_cat_vps')); ?></button>
                        <button class="blog-tag" data-category="cloud"><?php echo e(__('blog_cat_cloud')); ?></button>
                        <button class="blog-tag" data-category="reseller"><?php echo e(__('blog_cat_reseller')); ?></button>
                        <button class="blog-tag" data-category="security"><?php echo e(__('blog_cat_security')); ?></button>
                        <button class="blog-tag" data-category="tutorials"><?php echo e(__('blog_cat_tutorials')); ?></button>
                        <button class="blog-tag" data-category="news"><?php echo e(__('blog_cat_news')); ?></button>
                    </div>
                </div>
                <div class="page-hero-visual">
                    <svg viewBox="0 0 400 340" fill="none" xmlns="http://www.w3.org/2000/svg" class="hero-illustration" preserveAspectRatio="xMidYMid meet">
                        <style>
                            .float-a { animation: floatA 4s ease-in-out infinite; }
                            .float-b { animation: floatB 5s ease-in-out infinite; }
                            .float-c { animation: floatC 3.5s ease-in-out infinite; }
                            .float-d { animation: floatD 4.5s ease-in-out infinite; }
                            .pulse-a { animation: pulseA 3s ease-in-out infinite; }
                            .pulse-b { animation: pulseB 4s ease-in-out infinite; }
                            @keyframes floatA { 0%,100% { transform: translateY(0); } 50% { transform: translateY(-6px); } }
                            @keyframes floatB { 0%,100% { transform: translateY(0); } 50% { transform: translateY(6px); } }
                            @keyframes floatC { 0%,100% { transform: translateY(0); } 50% { transform: translateY(-6px); } }
                            @keyframes floatD { 0%,100% { transform: translateY(0); } 50% { transform: translateY(6px); } }
                            @keyframes pulseA { 0%,100% { opacity: 0.3; } 50% { opacity: 0.7; } }
                            @keyframes pulseB { 0%,100% { opacity: 0.2; } 50% { opacity: 0.6; } }
                        </style>
                        <!-- Browser frame -->
                        <rect x="50" y="30" width="300" height="200" rx="12" fill="var(--bg-card)" stroke="var(--border-primary)" stroke-width="1.5"/>
                        <rect x="50" y="30" width="300" height="28" rx="12" fill="var(--bg-tertiary)"/>
                        <rect x="50" y="46" width="300" height="12" fill="var(--bg-tertiary)"/>
                        <circle cx="70" cy="44" r="4" fill="var(--brand-error)" opacity="0.6"/>
                        <circle cx="84" cy="44" r="4" fill="var(--brand-warning)" opacity="0.6"/>
                        <circle cx="98" cy="44" r="4" fill="var(--brand-secondary)" opacity="0.6"/>
                        <rect x="160" y="39" width="120" height="10" rx="5" fill="var(--bg-card)" opacity="0.5"/>
                        <!-- Article card 1 (featured) -->
                        <rect x="68" y="72" width="180" height="24" rx="4" fill="var(--brand-primary)" opacity="0.12"/>
                        <rect x="74" y="78" width="60" height="5" rx="2.5" fill="var(--brand-primary)" opacity="0.5"/>
                        <rect x="74" y="86" width="40" height="4" rx="2" fill="var(--brand-primary)" opacity="0.25"/>
                        <!-- Text lines -->
                        <rect x="68" y="108" width="260" height="5" rx="2.5" fill="var(--text-tertiary)" opacity="0.15"/>
                        <rect x="68" y="120" width="220" height="5" rx="2.5" fill="var(--text-tertiary)" opacity="0.1"/>
                        <rect x="68" y="132" width="240" height="5" rx="2.5" fill="var(--text-tertiary)" opacity="0.08"/>
                        <!-- Grid cards row -->
                        <rect x="68" y="152" width="80" height="60" rx="6" fill="var(--bg-tertiary)" stroke="var(--border-primary)" stroke-width="0.8"/>
                        <rect x="74" y="158" width="68" height="24" rx="4" fill="var(--brand-accent)" opacity="0.1"/>
                        <rect x="74" y="188" width="44" height="4" rx="2" fill="var(--text-tertiary)" opacity="0.2"/>
                        <rect x="74" y="196" width="60" height="3" rx="1.5" fill="var(--text-tertiary)" opacity="0.1"/>
                        <rect x="160" y="152" width="80" height="60" rx="6" fill="var(--bg-tertiary)" stroke="var(--border-primary)" stroke-width="0.8"/>
                        <rect x="166" y="158" width="68" height="24" rx="4" fill="var(--brand-secondary)" opacity="0.1"/>
                        <rect x="166" y="188" width="44" height="4" rx="2" fill="var(--text-tertiary)" opacity="0.2"/>
                        <rect x="166" y="196" width="60" height="3" rx="1.5" fill="var(--text-tertiary)" opacity="0.1"/>
                        <rect x="252" y="152" width="80" height="60" rx="6" fill="var(--bg-tertiary)" stroke="var(--border-primary)" stroke-width="0.8"/>
                        <rect x="258" y="158" width="68" height="24" rx="4" fill="var(--brand-primary)" opacity="0.1"/>
                        <rect x="258" y="188" width="44" height="4" rx="2" fill="var(--text-tertiary)" opacity="0.2"/>
                        <rect x="258" y="196" width="60" height="3" rx="1.5" fill="var(--text-tertiary)" opacity="0.1"/>
                        <!-- Floating elements (CSS transform-based for GPU acceleration) -->
                        <g class="float-a">
                            <rect x="20" y="100" width="38" height="38" rx="8" fill="var(--bg-card)" stroke="var(--border-primary)" stroke-width="1"/>
                            <text x="39" y="125" text-anchor="middle" font-size="16" fill="var(--brand-primary)" opacity="0.6">&#x270E;</text>
                        </g>
                        <g class="float-b">
                            <rect x="342" y="120" width="38" height="38" rx="8" fill="var(--bg-card)" stroke="var(--border-primary)" stroke-width="1"/>
                            <text x="361" y="145" text-anchor="middle" font-size="16" fill="var(--brand-secondary)" opacity="0.6">&#x1F4E1;</text>
                        </g>
                        <!-- Floating dots -->
                        <circle cx="30" cy="250" r="3" fill="var(--brand-primary)" class="pulse-a"/>
                        <circle cx="380" cy="80" r="2" fill="var(--brand-accent)" class="pulse-b"/>
                        <!-- Notification badge -->
                        <g class="float-c">
                            <rect x="310" y="260" width="70" height="30" rx="8" fill="var(--bg-card)" stroke="var(--border-primary)" stroke-width="1"/>
                            <circle cx="324" cy="275" r="4" fill="var(--brand-secondary)" opacity="0.5"/>
                            <rect x="332" y="272" width="38" height="4" rx="2" fill="var(--text-tertiary)" opacity="0.3"/>
                        </g>
                        <!-- Bookmark float -->
                        <g class="float-d">
                            <rect x="20" y="200" width="34" height="34" rx="8" fill="var(--bg-card)" stroke="var(--border-primary)" stroke-width="1"/>
                            <text x="37" y="223" text-anchor="middle" font-size="14" fill="var(--brand-accent)" opacity="0.6">&#x1F516;</text>
                        </g>
                        </text>
                    </svg>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ BLOG GRID + SIDEBAR ═══════════════ -->
    <section class="blog-main reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag"><?php echo e(__('blog_section_tag')); ?></div>
                <h2><?php echo e(__('blog_section_title')); ?></h2>
                <p><?php echo e(__('blog_section_desc')); ?></p>
            </div>

            <div class="blog-layout">
                <!-- ── Article Grid ── -->
                <div class="blog-grid" id="blogGrid">

                    <a href="#" class="blog-card" data-category="hosting">
                        <div class="blog-card-thumb">
                            <img src="https://images.unsplash.com/photo-1558494949-ef010cbdcc31?w=600&h=340&fit=crop" alt="<?php echo e(__('blog_card1_title')); ?>" loading="lazy">
                            <span class="blog-cat-badge badge-hosting"><?php echo e(__('blog_cat_hosting')); ?></span>
                        </div>
                        <div class="blog-card-body">
                            <h4><?php echo e(__('blog_card1_title')); ?></h4>
                            <p><?php echo e(__('blog_card1_desc')); ?></p>
                            <div class="blog-card-meta">
                                <span class="blog-meta-item"><i class="fas fa-calendar-alt"></i> <?php echo e(__('blog_card1_date')); ?></span>
                                <span class="blog-meta-item"><i class="fas fa-eye"></i> <?php echo e(__('blog_card1_views')); ?></span>
                            </div>
                        </div>
                    </a>

                    <a href="#" class="blog-card" data-category="cloud">
                        <div class="blog-card-thumb">
                            <img src="https://images.unsplash.com/photo-1544197150-b99a580bb7a8?w=600&h=340&fit=crop" alt="<?php echo e(__('blog_card2_title')); ?>" loading="lazy">
                            <span class="blog-cat-badge badge-cloud"><?php echo e(__('blog_cat_cloud')); ?></span>
                        </div>
                        <div class="blog-card-body">
                            <h4><?php echo e(__('blog_card2_title')); ?></h4>
                            <p><?php echo e(__('blog_card2_desc')); ?></p>
                            <div class="blog-card-meta">
                                <span class="blog-meta-item"><i class="fas fa-calendar-alt"></i> <?php echo e(__('blog_card2_date')); ?></span>
                                <span class="blog-meta-item"><i class="fas fa-eye"></i> <?php echo e(__('blog_card2_views')); ?></span>
                            </div>
                        </div>
                    </a>
            <a href="#" class="blog-card" data-category="cloud">
                        <div class="blog-card-thumb">
                            <img src="https://images.unsplash.com/photo-1544197150-b99a580bb7a8?w=600&h=340&fit=crop" alt="<?php echo e(__('blog_card2_title')); ?>" loading="lazy">
                            <span class="blog-cat-badge badge-cloud"><?php echo e(__('blog_cat_cloud')); ?></span>
                        </div>
                        <div class="blog-card-body">
                            <h4><?php echo e(__('blog_card2_title')); ?></h4>
                            <p><?php echo e(__('blog_card2_desc')); ?></p>
                            <div class="blog-card-meta">
                                <span class="blog-meta-item"><i class="fas fa-calendar-alt"></i> <?php echo e(__('blog_card2_date')); ?></span>
                                <span class="blog-meta-item"><i class="fas fa-eye"></i> <?php echo e(__('blog_card2_views')); ?></span>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="blog-card" data-category="security">
                        <div class="blog-card-thumb">
                            <img src="https://images.unsplash.com/photo-1555949963-ff9fe0c870eb?w=600&h=340&fit=crop" alt="<?php echo e(__('blog_card3_title')); ?>" loading="lazy">
                            <span class="blog-cat-badge badge-security"><?php echo e(__('blog_cat_security')); ?></span>
                        </div>
                        <div class="blog-card-body">
                            <h4><?php echo e(__('blog_card3_title')); ?></h4>
                            <p><?php echo e(__('blog_card3_desc')); ?></p>
                            <div class="blog-card-meta">
                                <span class="blog-meta-item"><i class="fas fa-calendar-alt"></i> <?php echo e(__('blog_card3_date')); ?></span>
                                <span class="blog-meta-item"><i class="fas fa-eye"></i> <?php echo e(__('blog_card3_views')); ?></span>
                            </div>
                        </div>
                    </a>

                    <a href="#" class="blog-card" data-category="tutorials">
                        <div class="blog-card-thumb">
                            <img src="https://images.unsplash.com/photo-1627398242454-45a1465c2479?w=600&h=340&fit=crop" alt="<?php echo e(__('blog_card4_title')); ?>" loading="lazy">
                            <span class="blog-cat-badge badge-tutorials"><?php echo e(__('blog_card_badge_tutorial')); ?></span>
                        </div>
                        <div class="blog-card-body">
                            <h4><?php echo e(__('blog_card4_title')); ?></h4>
                            <p><?php echo e(__('blog_card4_desc')); ?></p>
                            <div class="blog-card-meta">
                                <span class="blog-meta-item"><i class="fas fa-calendar-alt"></i> <?php echo e(__('blog_card4_date')); ?></span>
                                <span class="blog-meta-item"><i class="fas fa-eye"></i> <?php echo e(__('blog_card4_views')); ?></span>
                            </div>
                        </div>
                    </a>

                    <a href="#" class="blog-card" data-category="reseller">
                        <div class="blog-card-thumb">
                            <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=600&h=340&fit=crop" alt="<?php echo e(__('blog_card5_title')); ?>" loading="lazy">
                            <span class="blog-cat-badge badge-reseller"><?php echo e(__('blog_cat_reseller')); ?></span>
                        </div>
                        <div class="blog-card-body">
                            <h4><?php echo e(__('blog_card5_title')); ?></h4>
                            <p><?php echo e(__('blog_card5_desc')); ?></p>
                            <div class="blog-card-meta">
                                <span class="blog-meta-item"><i class="fas fa-calendar-alt"></i> <?php echo e(__('blog_card5_date')); ?></span>
                                <span class="blog-meta-item"><i class="fas fa-eye"></i> <?php echo e(__('blog_card5_views')); ?></span>
                            </div>
                        </div>
                    </a>

                    <a href="#" class="blog-card" data-category="vps">
                        <div class="blog-card-thumb">
                            <img src="https://images.unsplash.com/photo-1597852074816-d933c7d2b988?w=600&h=340&fit=crop" alt="<?php echo e(__('blog_card6_title')); ?>" loading="lazy">
                            <span class="blog-cat-badge badge-vps"><?php echo e(__('blog_cat_vps')); ?></span>
                        </div>
                        <div class="blog-card-body">
                            <h4><?php echo e(__('blog_card6_title')); ?></h4>
                            <p><?php echo e(__('blog_card6_desc')); ?></p>
                            <div class="blog-card-meta">
                                <span class="blog-meta-item"><i class="fas fa-calendar-alt"></i> <?php echo e(__('blog_card6_date')); ?></span>
                                <span class="blog-meta-item"><i class="fas fa-eye"></i> <?php echo e(__('blog_card6_views')); ?></span>
                            </div>
                        </div>
                    </a>

                    <a href="#" class="blog-card" data-category="hosting">
                        <div class="blog-card-thumb">
                            <img src="https://images.unsplash.com/photo-1484417894907-623942c8ee29?w=600&h=340&fit=crop" alt="<?php echo e(__('blog_card7_title')); ?>" loading="lazy">
                            <span class="blog-cat-badge badge-hosting"><?php echo e(__('blog_cat_hosting')); ?></span>
                        </div>
                        <div class="blog-card-body">
                            <h4><?php echo e(__('blog_card7_title')); ?></h4>
                            <p><?php echo e(__('blog_card7_desc')); ?></p>
                            <div class="blog-card-meta">
                                <span class="blog-meta-item"><i class="fas fa-calendar-alt"></i> <?php echo e(__('blog_card7_date')); ?></span>
                                <span class="blog-meta-item"><i class="fas fa-eye"></i> <?php echo e(__('blog_card7_views')); ?></span>
                            </div>
                        </div>
                    </a>

                    <a href="#" class="blog-card" data-category="news">
                        <div class="blog-card-thumb">
                            <img src="https://images.unsplash.com/photo-1451187580459-43490279c0fa?w=600&h=340&fit=crop" alt="<?php echo e(__('blog_card8_title')); ?>" loading="lazy">
                            <span class="blog-cat-badge badge-news"><?php echo e(__('blog_card_badge_news')); ?></span>
                        </div>
                        <div class="blog-card-body">
                            <h4><?php echo e(__('blog_card8_title')); ?></h4>
                            <p><?php echo e(__('blog_card8_desc')); ?></p>
                            <div class="blog-card-meta">
                                <span class="blog-meta-item"><i class="fas fa-calendar-alt"></i> <?php echo e(__('blog_card8_date')); ?></span>
                                <span class="blog-meta-item"><i class="fas fa-eye"></i> <?php echo e(__('blog_card8_views')); ?></span>
                            </div>
                        </div>
                    </a>

                    <a href="#" class="blog-card" data-category="tutorials">
                        <div class="blog-card-thumb">
                            <img src="https://images.unsplash.com/photo-1544383835-bda2bc66a55d?w=600&h=340&fit=crop" alt="<?php echo e(__('blog_card9_title')); ?>" loading="lazy">
                            <span class="blog-cat-badge badge-tutorials"><?php echo e(__('blog_card_badge_tutorial')); ?></span>
                        </div>
                        <div class="blog-card-body">
                            <h4><?php echo e(__('blog_card9_title')); ?></h4>
                            <p><?php echo e(__('blog_card9_desc')); ?></p>
                            <div class="blog-card-meta">
                                <span class="blog-meta-item"><i class="fas fa-calendar-alt"></i> <?php echo e(__('blog_card9_date')); ?></span>
                                <span class="blog-meta-item"><i class="fas fa-eye"></i> <?php echo e(__('blog_card9_views')); ?></span>
                            </div>
                        </div>
                    </a>

                    <!-- ── Pagination ── -->
                    <nav class="blog-pagination" id="blogPagination">
                        <a href="#" class="pagination-btn pagination-prev disabled"><i class="fas fa-arrow-left"></i> <?php echo e(__('blog_previous')); ?></a>
                        <div class="pagination-pages">
                            <a href="#" class="pagination-num active">1</a>
                            <a href="#" class="pagination-num">2</a>
                            <a href="#" class="pagination-num">3</a>
                        </div>
                        <a href="#" class="pagination-btn pagination-next"><?php echo e(__('blog_next')); ?> <i class="fas fa-arrow-right"></i></a>
                    </nav>
                </div>

                <!-- ── Sidebar ── -->
                <aside class="blog-sidebar">

                    <!-- Popular Posts -->
                    <div class="blog-sidebar-card">
                        <h5 class="sidebar-card-title"><i class="fas fa-fire"></i> <?php echo e(__('blog_popular_posts')); ?></h5>
                        <ul class="sidebar-posts">
                            <li><a href="#">
                                <span class="sidebar-post-num">01</span>
                                <div>
                                    <strong><?php echo e(__('blog_sidebar_popular1')); ?></strong>
                                    <span class="sidebar-post-meta"><?php echo e(__('blog_sidebar_popular1_meta')); ?></span>
                                </div>
                            </a></li>
                            <li><a href="#">
                                <span class="sidebar-post-num">02</span>
                                <div>
                                    <strong><?php echo e(__('blog_sidebar_popular2')); ?></strong>
                                    <span class="sidebar-post-meta"><?php echo e(__('blog_sidebar_popular2_meta')); ?></span>
                                </div>
                            </a></li>
                            <li><a href="#">
                                <span class="sidebar-post-num">03</span>
                                <div>
                                    <strong><?php echo e(__('blog_sidebar_popular3')); ?></strong>
                                    <span class="sidebar-post-meta"><?php echo e(__('blog_sidebar_popular3_meta')); ?></span>
                                </div>
                            </a></li>
                            <li><a href="#">
                                <span class="sidebar-post-num">04</span>
                                <div>
                                    <strong><?php echo e(__('blog_sidebar_popular4')); ?></strong>
                                    <span class="sidebar-post-meta"><?php echo e(__('blog_sidebar_popular4_meta')); ?></span>
                                </div>
                            </a></li>
                            <li><a href="#">
                                <span class="sidebar-post-num">05</span>
                                <div>
                                    <strong><?php echo e(__('blog_sidebar_popular5')); ?></strong>
                                    <span class="sidebar-post-meta"><?php echo e(__('blog_sidebar_popular5_meta')); ?></span>
                                </div>
                            </a></li>
                        </ul>
                    </div>

                    <!-- Categories -->
                    <div class="blog-sidebar-card">
                        <h5 class="sidebar-card-title"><i class="fas fa-folder"></i> <?php echo e(__('blog_categories')); ?></h5>
                        <ul class="sidebar-categories">
                            <li><a href="#"><span><?php echo e(__('blog_cat_hosting')); ?></span><span class="sidebar-cat-count">12</span></a></li>
                            <li><a href="#"><span><?php echo e(__('blog_cat_vps')); ?></span><span class="sidebar-cat-count">9</span></a></li>
                            <li><a href="#"><span><?php echo e(__('blog_cat_cloud')); ?></span><span class="sidebar-cat-count">7</span></a></li>
                            <li><a href="#"><span><?php echo e(__('blog_cat_reseller')); ?></span><span class="sidebar-cat-count">5</span></a></li>
                            <li><a href="#"><span><?php echo e(__('blog_cat_security')); ?></span><span class="sidebar-cat-count">8</span></a></li>
                            <li><a href="#"><span><?php echo e(__('blog_cat_tutorials')); ?></span><span class="sidebar-cat-count">15</span></a></li>
                        </ul>
                    </div>

                    <!-- Newsletter -->
                    <div class="blog-sidebar-card blog-newsletter">
                        <div class="newsletter-icon"><i class="fas fa-paper-plane"></i></div>
                        <h5 class="sidebar-card-title"><?php echo e(__('blog_stay_updated')); ?></h5>
                        <p><?php echo e(__('blog_newsletter_desc')); ?></p>
                        <form class="newsletter-form" onsubmit="return false;">
                            <input type="email" placeholder="<?php echo e(__('blog_email_placeholder')); ?>" class="newsletter-input" required>
                            <button type="submit" class="btn-primary newsletter-btn"><?php echo e(__('blog_subscribe')); ?></button>
                        </form>
                    </div>

                </aside>
            </div>

            <!-- ── No Results (search) ── -->
            <div class="blog-no-results" id="blogNoResults">
                <i class="fas fa-search"></i>
                <p><?php echo e(__('blog_no_results')); ?></p>
            </div>

        </div>
    </section>

    <!-- ═══════════════ PROMOTIONS CTA ═══════════════ -->
    <section class="promo-cta reveal">
        <div class="container">
            <div class="promo-cta-inner">
                <div class="promo-cta-content">
                    <div class="section-tag"><?php echo e(__('blog_cta_tag')); ?></div>
                    <h2><?php echo e(__('blog_cta_title')); ?></h2>
                    <p><?php echo e(__('blog_cta_desc')); ?></p>
                    <div class="promo-cta-btns">
                        <a href="<?php echo e(SITE_URL); ?>/best-cpanel-hosting/" class="btn-primary"><i class="fas fa-rocket"></i> <?php echo e(__('blog_cta_btn_plans')); ?></a>
                        <a href="<?php echo e(SITE_URL); ?>/contact-us/" class="btn-secondary"><i class="fas fa-headset"></i> <?php echo e(__('blog_cta_btn_sales')); ?></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
