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
                <h1>Tutorials &amp; <span class="highlight">Knowledge Base</span></h1>
                <p class="page-hero-desc">
                    Step-by-step guides, server management tips, and hosting best practices — written by the YottaSrc team.
                </p>
                <div class="tut-search-wrap">
                    <i class="fas fa-search"></i>
                    <input type="text" class="tut-search-input" id="tutorialSearch" placeholder="Search tutorials..." autocomplete="off">
                </div>
                <div class="tut-filter-bar">
                    <button class="tut-filter-btn active" data-filter="all">All</button>
                    <button class="tut-filter-btn" data-filter="hosting">Hosting</button>
                    <button class="tut-filter-btn" data-filter="vps">VPS</button>
                    <button class="tut-filter-btn" data-filter="cloud">Cloud</button>
                    <button class="tut-filter-btn" data-filter="security">Security</button>
                    <button class="tut-filter-btn" data-filter="reseller">Reseller</button>
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
                                <span class="tut-cat-badge badge-vps">VPS</span>
                                <h4>How to Deploy a Node.js App on VPS</h4>
                                <p>Complete guide to deploying Node.js with PM2 and Nginx reverse proxy on Ubuntu.</p>
                                <div class="tut-card-meta">
                                    <span><i class="fas fa-calendar-alt"></i> Feb 28, 2026</span>
                                    <span><i class="fas fa-eye"></i> 6,780 views</span>
                                </div>
                            </div>
                        </a>

                        <a href="#" class="tut-card" data-category="security">
                            <div class="tut-card-icon tut-icon-security"><i class="fas fa-shield-alt"></i></div>
                            <div class="tut-card-body">
                                <span class="tut-cat-badge badge-security">Security</span>
                                <h4>Essential VPS Security Checklist for 2026</h4>
                                <p>Firewall rules, SSH hardening, fail2ban, and more — secure your Linux VPS from day one.</p>
                                <div class="tut-card-meta">
                                    <span><i class="fas fa-calendar-alt"></i> Feb 18, 2026</span>
                                    <span><i class="fas fa-eye"></i> 3,900 views</span>
                                </div>
                            </div>
                        </a>

                        <a href="#" class="tut-card" data-category="vps">
                            <div class="tut-card-icon tut-icon-vps"><i class="fab fa-docker"></i></div>
                            <div class="tut-card-body">
                                <span class="tut-cat-badge badge-vps">VPS</span>
                                <h4>Getting Started with Docker on Your VPS</h4>
                                <p>A beginner-friendly guide to installing and running Docker containers on a Linux VPS.</p>
                                <div class="tut-card-meta">
                                    <span><i class="fas fa-calendar-alt"></i> Feb 10, 2026</span>
                                    <span><i class="fas fa-eye"></i> 5,100 views</span>
                                </div>
                            </div>
                        </a>

                        <a href="#" class="tut-card" data-category="hosting">
                            <div class="tut-card-icon tut-icon-hosting"><i class="fas fa-database"></i></div>
                            <div class="tut-card-body">
                                <span class="tut-cat-badge badge-hosting">Hosting</span>
                                <h4>Optimizing MySQL Performance on Your VPS</h4>
                                <p>Learn how to tune MySQL configuration for better query performance and lower memory usage.</p>
                                <div class="tut-card-meta">
                                    <span><i class="fas fa-calendar-alt"></i> Feb 22, 2026</span>
                                    <span><i class="fas fa-eye"></i> 4,500 views</span>
                                </div>
                            </div>
                        </a>

                        <a href="#" class="tut-card" data-category="hosting">
                            <div class="tut-card-icon tut-icon-hosting"><i class="fab fa-wordpress"></i></div>
                            <div class="tut-card-body">
                                <span class="tut-cat-badge badge-hosting">Hosting</span>
                                <h4>Speed Up WordPress: The Definitive Guide</h4>
                                <p>Caching, CDN, image optimization, and code minification — get your WordPress site loading in under 1 second.</p>
                                <div class="tut-card-meta">
                                    <span><i class="fas fa-calendar-alt"></i> Jan 30, 2026</span>
                                    <span><i class="fas fa-eye"></i> 8,200 views</span>
                                </div>
                            </div>
                        </a>

                        <a href="#" class="tut-card" data-category="cloud">
                            <div class="tut-card-icon tut-icon-cloud"><i class="fas fa-cloud"></i></div>
                            <div class="tut-card-body">
                                <span class="tut-cat-badge badge-cloud">Cloud</span>
                                <h4>Automate Cloud Deployments with the YottaSrc API</h4>
                                <p>Use our REST API to create, manage, and destroy cloud instances programmatically.</p>
                                <div class="tut-card-meta">
                                    <span><i class="fas fa-calendar-alt"></i> Jan 15, 2026</span>
                                    <span><i class="fas fa-eye"></i> 3,400 views</span>
                                </div>
                            </div>
                        </a>

                        <a href="#" class="tut-card" data-category="reseller">
                            <div class="tut-card-icon tut-icon-reseller"><i class="fas fa-store"></i></div>
                            <div class="tut-card-body">
                                <span class="tut-cat-badge badge-reseller">Reseller</span>
                                <h4>How to Start a Web Hosting Business in 2026</h4>
                                <p>From choosing a reseller plan to branding and billing — everything you need to launch your hosting company.</p>
                                <div class="tut-card-meta">
                                    <span><i class="fas fa-calendar-alt"></i> Jan 8, 2026</span>
                                    <span><i class="fas fa-eye"></i> 7,100 views</span>
                                </div>
                            </div>
                        </a>

                        <a href="#" class="tut-card" data-category="security">
                            <div class="tut-card-icon tut-icon-security"><i class="fas fa-lock"></i></div>
                            <div class="tut-card-body">
                                <span class="tut-cat-badge badge-security">Security</span>
                                <h4>SSL Certificates Explained: Free vs. Paid</h4>
                                <p>Understand the differences between Let's Encrypt, Comodo, and wildcard SSL — and when each makes sense.</p>
                                <div class="tut-card-meta">
                                    <span><i class="fas fa-calendar-alt"></i> Dec 20, 2025</span>
                                    <span><i class="fas fa-eye"></i> 5,600 views</span>
                                </div>
                            </div>
                        </a>

                        <a href="#" class="tut-card" data-category="cloud">
                            <div class="tut-card-icon tut-icon-cloud"><i class="fas fa-balance-scale"></i></div>
                            <div class="tut-card-body">
                                <span class="tut-cat-badge badge-cloud">Cloud</span>
                                <h4>Setting Up Load Balancing on Cloud Instances</h4>
                                <p>Distribute traffic across multiple cloud instances for high availability and zero downtime.</p>
                                <div class="tut-card-meta">
                                    <span><i class="fas fa-calendar-alt"></i> Dec 12, 2025</span>
                                    <span><i class="fas fa-eye"></i> 2,900 views</span>
                                </div>
                            </div>
                        </a>

                        <a href="#" class="tut-card" data-category="hosting">
                            <div class="tut-card-icon tut-icon-hosting"><i class="fas fa-envelope"></i></div>
                            <div class="tut-card-body">
                                <span class="tut-cat-badge badge-hosting">Hosting</span>
                                <h4>Setting Up Professional Email with cPanel</h4>
                                <p>Create email accounts, configure SPF/DKIM/DMARC, and ensure 100% inbox delivery.</p>
                                <div class="tut-card-meta">
                                    <span><i class="fas fa-calendar-alt"></i> Dec 5, 2025</span>
                                    <span><i class="fas fa-eye"></i> 4,100 views</span>
                                </div>
                            </div>
                        </a>

                    </div>

                    <!-- No Results -->
                    <div class="blog-no-results" id="tutorialNoResults">
                        <i class="fas fa-search"></i>
                        <p>No tutorials found matching your search.</p>
                    </div>

                    <!-- Pagination -->
                    <div class="blog-pagination">
                        <a class="pagination-btn disabled"><i class="fas fa-arrow-left"></i> <span>Previous</span></a>
                        <div class="pagination-pages">
                            <a class="pagination-num active">1</a>
                            <a class="pagination-num">2</a>
                            <a class="pagination-num">3</a>
                        </div>
                        <a class="pagination-btn"><span>Next</span> <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- Sidebar -->
                <aside class="blog-sidebar">
                    <!-- Popular Tutorials -->
                    <div class="blog-sidebar-card">
                        <h5 class="sidebar-card-title"><i class="fas fa-fire"></i> Popular Tutorials</h5>
                        <ul class="sidebar-posts">
                            <li><a href="#">
                                <span class="sidebar-post-num">01</span>
                                <div>
                                    <strong>Speed Up WordPress: The Definitive Guide</strong>
                                    <span class="sidebar-post-meta">8,200 views</span>
                                </div>
                            </a></li>
                            <li><a href="#">
                                <span class="sidebar-post-num">02</span>
                                <div>
                                    <strong>How to Start a Web Hosting Business</strong>
                                    <span class="sidebar-post-meta">7,100 views</span>
                                </div>
                            </a></li>
                            <li><a href="<?php echo e(SITE_URL); ?>/tutorials/deploy-nodejs-vps/">
                                <span class="sidebar-post-num">03</span>
                                <div>
                                    <strong>Deploy a Node.js App on VPS</strong>
                                    <span class="sidebar-post-meta">6,780 views</span>
                                </div>
                            </a></li>
                            <li><a href="#">
                                <span class="sidebar-post-num">04</span>
                                <div>
                                    <strong>SSL Certificates: Free vs. Paid</strong>
                                    <span class="sidebar-post-meta">5,600 views</span>
                                </div>
                            </a></li>
                        </ul>
                    </div>

                    <!-- Categories -->
                    <div class="blog-sidebar-card">
                        <h5 class="sidebar-card-title"><i class="fas fa-folder"></i> Categories</h5>
                        <ul class="sidebar-categories">
                            <li><a href="#"><span>Hosting</span> <span class="sidebar-cat-count">3</span></a></li>
                            <li><a href="#"><span>VPS</span> <span class="sidebar-cat-count">2</span></a></li>
                            <li><a href="#"><span>Cloud</span> <span class="sidebar-cat-count">2</span></a></li>
                            <li><a href="#"><span>Security</span> <span class="sidebar-cat-count">2</span></a></li>
                            <li><a href="#"><span>Reseller</span> <span class="sidebar-cat-count">1</span></a></li>
                        </ul>
                    </div>

                    <!-- Newsletter -->
                    <div class="blog-sidebar-card blog-newsletter">
                        <div class="newsletter-icon"><i class="fas fa-envelope"></i></div>
                        <h5 class="sidebar-card-title">Stay Updated</h5>
                        <p>Get new tutorials and hosting tips delivered to your inbox.</p>
                        <form class="newsletter-form" onsubmit="return false;">
                            <input type="email" class="newsletter-input" placeholder="your@email.com">
                            <button class="btn-primary newsletter-btn">Subscribe <i class="fas fa-arrow-right"></i></button>
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
                <h2>Ready to get started?</h2>
                <p>Deploy your hosting, VPS, or cloud infrastructure in minutes. Same price on renewal, no hidden fees.</p>
                <a href="<?php echo e(SITE_URL); ?>/vps/" class="btn-primary">View Plans <i class="fas fa-arrow-right"></i></a>
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
