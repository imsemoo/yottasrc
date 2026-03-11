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
                        <a href="<?php echo e(SITE_URL); ?>/">Home</a>
                        <i class="fas fa-chevron-right"></i>
                        <span>Blog</span>
                    </div>
                    <h1>YottaSrc <span class="highlight">Blog</span></h1>
                    <p class="page-hero-desc">Insights, tutorials, and updates from the YottaSrc team.</p>
                    <div class="blog-search-wrap">
                        <i class="fas fa-search"></i>
                        <input type="text" id="blogSearch" class="blog-search-input" placeholder="Search articles, tutorials, or guides..." autocomplete="off">
                    </div>
                    <div class="blog-hero-tags">
                        <button class="blog-tag active" data-category="all">All</button>
                        <button class="blog-tag" data-category="hosting">Hosting</button>
                        <button class="blog-tag" data-category="vps">VPS</button>
                        <button class="blog-tag" data-category="cloud">Cloud</button>
                        <button class="blog-tag" data-category="reseller">Reseller</button>
                        <button class="blog-tag" data-category="security">Security</button>
                        <button class="blog-tag" data-category="tutorials">Tutorials</button>
                        <button class="blog-tag" data-category="news">Company News</button>
                    </div>
                </div>
                <div class="page-hero-visual">
                    <svg viewBox="0 0 400 340" fill="none" xmlns="http://www.w3.org/2000/svg" class="hero-illustration" preserveAspectRatio="xMidYMid meet">
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
                        <!-- Floating elements -->
                        <rect x="20" y="100" width="38" height="38" rx="8" fill="var(--bg-card)" stroke="var(--border-primary)" stroke-width="1">
                            <animate attributeName="y" values="100;94;100" dur="4s" repeatCount="indefinite"/>
                        </rect>
                        <text x="39" y="125" text-anchor="middle" font-size="16" fill="var(--brand-primary)" opacity="0.6">
                            <animate attributeName="y" values="125;119;125" dur="4s" repeatCount="indefinite"/>&#x270E;
                        </text>
                        <rect x="342" y="120" width="38" height="38" rx="8" fill="var(--bg-card)" stroke="var(--border-primary)" stroke-width="1">
                            <animate attributeName="y" values="120;126;120" dur="5s" repeatCount="indefinite"/>
                        </rect>
                        <text x="361" y="145" text-anchor="middle" font-size="16" fill="var(--brand-secondary)" opacity="0.6">
                            <animate attributeName="y" values="145;151;145" dur="5s" repeatCount="indefinite"/>&#x1F4E1;
                        </text>
                        <!-- Floating dots -->
                        <circle cx="30" cy="250" r="3" fill="var(--brand-primary)" opacity="0.3"><animate attributeName="opacity" values="0.3;0.7;0.3" dur="3s" repeatCount="indefinite"/></circle>
                        <circle cx="380" cy="80" r="2" fill="var(--brand-accent)" opacity="0.3"><animate attributeName="opacity" values="0.2;0.6;0.2" dur="4s" repeatCount="indefinite"/></circle>
                        <!-- Notification badge -->
                        <rect x="310" y="260" width="70" height="30" rx="8" fill="var(--bg-card)" stroke="var(--border-primary)" stroke-width="1">
                            <animate attributeName="y" values="260;254;260" dur="3.5s" repeatCount="indefinite"/>
                        </rect>
                        <circle cx="324" cy="275" r="4" fill="var(--brand-secondary)" opacity="0.5">
                            <animate attributeName="cy" values="275;269;275" dur="3.5s" repeatCount="indefinite"/>
                        </circle>
                        <rect x="332" y="272" width="38" height="4" rx="2" fill="var(--text-tertiary)" opacity="0.3">
                            <animate attributeName="y" values="272;266;272" dur="3.5s" repeatCount="indefinite"/>
                        </rect>
                        <!-- Bookmark float -->
                        <rect x="20" y="200" width="34" height="34" rx="8" fill="var(--bg-card)" stroke="var(--border-primary)" stroke-width="1">
                            <animate attributeName="y" values="200;206;200" dur="4.5s" repeatCount="indefinite"/>
                        </rect>
                        <text x="37" y="223" text-anchor="middle" font-size="14" fill="var(--brand-accent)" opacity="0.6">
                            <animate attributeName="y" values="223;229;223" dur="4.5s" repeatCount="indefinite"/>&#x1F516;
                        </text>
                    </svg>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ FEATURED ARTICLE ═══════════════ -->
    <section class="blog-featured reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag">Featured</div>
                <h2>Editor's Pick</h2>
                <p>Our team's top recommendation for this week.</p>
            </div>

            <a href="#" class="blog-featured-card">
                <div class="blog-featured-img">
                    <div class="blog-img-placeholder">
                        <i class="fas fa-server"></i>
                    </div>
                    <span class="blog-cat-badge badge-vps">VPS</span>
                </div>
                <div class="blog-featured-body">
                    <h3>How to Choose the Right VPS for Your Project</h3>
                    <p>A practical guide to selecting the best VPS configuration for performance, scalability, and cost. Learn how to match CPU, RAM, and storage to your workload.</p>
                    <div class="blog-card-meta">
                        <span class="blog-meta-item"><i class="fas fa-user-circle"></i> YottaSrc Team</span>
                        <span class="blog-meta-item"><i class="fas fa-calendar-alt"></i> Mar 8, 2026</span>
                        <span class="blog-meta-item"><i class="fas fa-clock"></i> 8 min read</span>
                    </div>
                </div>
            </a>
        </div>
    </section>

    <!-- ═══════════════ BLOG GRID + SIDEBAR ═══════════════ -->
    <section class="blog-main reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag">Latest</div>
                <h2>Recent Articles</h2>
                <p>Stay up to date with hosting guides, infrastructure insights, and platform updates.</p>
            </div>

            <div class="blog-layout">
                <!-- ── Article Grid ── -->
                <div class="blog-grid" id="blogGrid">

                    <a href="#" class="blog-card" data-category="hosting">
                        <div class="blog-card-thumb">
                            <div class="blog-img-placeholder"><i class="fas fa-tachometer-alt"></i></div>
                            <span class="blog-cat-badge badge-hosting">Hosting</span>
                        </div>
                        <div class="blog-card-body">
                            <h4>cPanel vs DirectAdmin: Which Control Panel Is Best?</h4>
                            <p>An in-depth comparison of two popular control panels for shared and reseller hosting.</p>
                            <div class="blog-card-meta">
                                <span class="blog-meta-item"><i class="fas fa-clock"></i> 6 min</span>
                                <span class="blog-meta-item"><i class="fas fa-calendar-alt"></i> Mar 5, 2026</span>
                            </div>
                        </div>
                    </a>

                    <a href="#" class="blog-card" data-category="cloud">
                        <div class="blog-card-thumb">
                            <div class="blog-img-placeholder"><i class="fas fa-cloud-upload-alt"></i></div>
                            <span class="blog-cat-badge badge-cloud">Cloud</span>
                        </div>
                        <div class="blog-card-body">
                            <h4>Getting Started with Cloud Servers: A Beginner's Guide</h4>
                            <p>Everything you need to know to deploy your first cloud instance in under 5 minutes.</p>
                            <div class="blog-card-meta">
                                <span class="blog-meta-item"><i class="fas fa-clock"></i> 5 min</span>
                                <span class="blog-meta-item"><i class="fas fa-calendar-alt"></i> Mar 2, 2026</span>
                            </div>
                        </div>
                    </a>

                    <a href="#" class="blog-card" data-category="security">
                        <div class="blog-card-thumb">
                            <div class="blog-img-placeholder"><i class="fas fa-shield-alt"></i></div>
                            <span class="blog-cat-badge badge-security">Security</span>
                        </div>
                        <div class="blog-card-body">
                            <h4>Top 10 Server Security Practices Every Admin Should Know</h4>
                            <p>Protect your infrastructure with firewalls, SSH hardening, fail2ban, and more.</p>
                            <div class="blog-card-meta">
                                <span class="blog-meta-item"><i class="fas fa-clock"></i> 7 min</span>
                                <span class="blog-meta-item"><i class="fas fa-calendar-alt"></i> Feb 28, 2026</span>
                            </div>
                        </div>
                    </a>

                    <a href="#" class="blog-card" data-category="tutorials">
                        <div class="blog-card-thumb">
                            <div class="blog-img-placeholder"><i class="fas fa-terminal"></i></div>
                            <span class="blog-cat-badge badge-tutorials">Tutorial</span>
                        </div>
                        <div class="blog-card-body">
                            <h4>How to Deploy a Node.js App on a Linux VPS</h4>
                            <p>Step-by-step: Nginx reverse proxy, PM2 process manager, and SSL with Let's Encrypt.</p>
                            <div class="blog-card-meta">
                                <span class="blog-meta-item"><i class="fas fa-clock"></i> 10 min</span>
                                <span class="blog-meta-item"><i class="fas fa-calendar-alt"></i> Feb 24, 2026</span>
                            </div>
                        </div>
                    </a>

                    <a href="#" class="blog-card" data-category="reseller">
                        <div class="blog-card-thumb">
                            <div class="blog-img-placeholder"><i class="fas fa-sitemap"></i></div>
                            <span class="blog-cat-badge badge-reseller">Reseller</span>
                        </div>
                        <div class="blog-card-body">
                            <h4>Start Your Own Hosting Business: Reseller Hosting Guide</h4>
                            <p>Learn how to build a hosting brand with white-label reseller plans and WHM.</p>
                            <div class="blog-card-meta">
                                <span class="blog-meta-item"><i class="fas fa-clock"></i> 9 min</span>
                                <span class="blog-meta-item"><i class="fas fa-calendar-alt"></i> Feb 20, 2026</span>
                            </div>
                        </div>
                    </a>

                    <a href="#" class="blog-card" data-category="vps">
                        <div class="blog-card-thumb">
                            <div class="blog-img-placeholder"><i class="fab fa-linux"></i></div>
                            <span class="blog-cat-badge badge-vps">VPS</span>
                        </div>
                        <div class="blog-card-body">
                            <h4>KVM vs OpenVZ: Understanding VPS Virtualization</h4>
                            <p>Kernel-level isolation, dedicated resources, and why KVM is the industry standard.</p>
                            <div class="blog-card-meta">
                                <span class="blog-meta-item"><i class="fas fa-clock"></i> 5 min</span>
                                <span class="blog-meta-item"><i class="fas fa-calendar-alt"></i> Feb 16, 2026</span>
                            </div>
                        </div>
                    </a>

                    <a href="#" class="blog-card" data-category="hosting">
                        <div class="blog-card-thumb">
                            <div class="blog-img-placeholder"><i class="fas fa-bolt"></i></div>
                            <span class="blog-cat-badge badge-hosting">Hosting</span>
                        </div>
                        <div class="blog-card-body">
                            <h4>LiteSpeed vs Apache vs Nginx: Web Server Showdown</h4>
                            <p>Which web server delivers the best performance for WordPress and PHP workloads?</p>
                            <div class="blog-card-meta">
                                <span class="blog-meta-item"><i class="fas fa-clock"></i> 6 min</span>
                                <span class="blog-meta-item"><i class="fas fa-calendar-alt"></i> Feb 12, 2026</span>
                            </div>
                        </div>
                    </a>

                    <a href="#" class="blog-card" data-category="news">
                        <div class="blog-card-thumb">
                            <div class="blog-img-placeholder"><i class="fas fa-bullhorn"></i></div>
                            <span class="blog-cat-badge badge-news">News</span>
                        </div>
                        <div class="blog-card-body">
                            <h4>YottaSrc Expands to 5 New Data Center Locations</h4>
                            <p>New infrastructure in São Paulo, Mumbai, Tokyo, Sydney, and Johannesburg.</p>
                            <div class="blog-card-meta">
                                <span class="blog-meta-item"><i class="fas fa-clock"></i> 3 min</span>
                                <span class="blog-meta-item"><i class="fas fa-calendar-alt"></i> Feb 8, 2026</span>
                            </div>
                        </div>
                    </a>

                    <a href="#" class="blog-card" data-category="tutorials">
                        <div class="blog-card-thumb">
                            <div class="blog-img-placeholder"><i class="fas fa-database"></i></div>
                            <span class="blog-cat-badge badge-tutorials">Tutorial</span>
                        </div>
                        <div class="blog-card-body">
                            <h4>MySQL Performance Tuning for High-Traffic Websites</h4>
                            <p>Optimize queries, indexing, and buffer pools to handle millions of requests.</p>
                            <div class="blog-card-meta">
                                <span class="blog-meta-item"><i class="fas fa-clock"></i> 8 min</span>
                                <span class="blog-meta-item"><i class="fas fa-calendar-alt"></i> Feb 4, 2026</span>
                            </div>
                        </div>
                    </a>

                </div>

                <!-- ── Sidebar ── -->
                <aside class="blog-sidebar">

                    <!-- Popular Posts -->
                    <div class="blog-sidebar-card">
                        <h5 class="sidebar-card-title"><i class="fas fa-fire"></i> Popular Posts</h5>
                        <ul class="sidebar-posts">
                            <li><a href="#">
                                <span class="sidebar-post-num">01</span>
                                <div>
                                    <strong>How to Choose the Right VPS for Your Project</strong>
                                    <span class="sidebar-post-meta">8 min read</span>
                                </div>
                            </a></li>
                            <li><a href="#">
                                <span class="sidebar-post-num">02</span>
                                <div>
                                    <strong>Top 10 Server Security Practices</strong>
                                    <span class="sidebar-post-meta">7 min read</span>
                                </div>
                            </a></li>
                            <li><a href="#">
                                <span class="sidebar-post-num">03</span>
                                <div>
                                    <strong>LiteSpeed vs Apache vs Nginx</strong>
                                    <span class="sidebar-post-meta">6 min read</span>
                                </div>
                            </a></li>
                            <li><a href="#">
                                <span class="sidebar-post-num">04</span>
                                <div>
                                    <strong>Deploy a Node.js App on Linux VPS</strong>
                                    <span class="sidebar-post-meta">10 min read</span>
                                </div>
                            </a></li>
                            <li><a href="#">
                                <span class="sidebar-post-num">05</span>
                                <div>
                                    <strong>Getting Started with Cloud Servers</strong>
                                    <span class="sidebar-post-meta">5 min read</span>
                                </div>
                            </a></li>
                        </ul>
                    </div>

                    <!-- Categories -->
                    <div class="blog-sidebar-card">
                        <h5 class="sidebar-card-title"><i class="fas fa-folder"></i> Categories</h5>
                        <ul class="sidebar-categories">
                            <li><a href="#"><span>Hosting</span><span class="sidebar-cat-count">12</span></a></li>
                            <li><a href="#"><span>VPS</span><span class="sidebar-cat-count">9</span></a></li>
                            <li><a href="#"><span>Cloud</span><span class="sidebar-cat-count">7</span></a></li>
                            <li><a href="#"><span>Reseller</span><span class="sidebar-cat-count">5</span></a></li>
                            <li><a href="#"><span>Security</span><span class="sidebar-cat-count">8</span></a></li>
                            <li><a href="#"><span>Tutorials</span><span class="sidebar-cat-count">15</span></a></li>
                        </ul>
                    </div>

                    <!-- Newsletter -->
                    <div class="blog-sidebar-card blog-newsletter">
                        <div class="newsletter-icon"><i class="fas fa-paper-plane"></i></div>
                        <h5 class="sidebar-card-title">Stay Updated</h5>
                        <p>Get the latest hosting guides and infrastructure insights.</p>
                        <form class="newsletter-form" onsubmit="return false;">
                            <input type="email" placeholder="your@email.com" class="newsletter-input" required>
                            <button type="submit" class="btn-primary newsletter-btn">Subscribe</button>
                        </form>
                    </div>

                </aside>
            </div>

            <!-- ── No Results (search) ── -->
            <div class="blog-no-results" id="blogNoResults">
                <i class="fas fa-search"></i>
                <p>No articles found matching your search.</p>
            </div>

            <!-- ── Pagination ── -->
            <nav class="blog-pagination" id="blogPagination">
                <a href="#" class="pagination-btn pagination-prev disabled"><i class="fas fa-arrow-left"></i> Previous</a>
                <div class="pagination-pages">
                    <a href="#" class="pagination-num active">1</a>
                    <a href="#" class="pagination-num">2</a>
                    <a href="#" class="pagination-num">3</a>
                </div>
                <a href="#" class="pagination-btn pagination-next">Next <i class="fas fa-arrow-right"></i></a>
            </nav>
        </div>
    </section>

    <!-- ═══════════════ PROMOTIONS CTA ═══════════════ -->
    <section class="promo-cta reveal">
        <div class="container">
            <div class="promo-cta-inner">
                <div class="promo-cta-content">
                    <div class="section-tag">Get Started</div>
                    <h2>Ready to build something great?</h2>
                    <p>Explore our hosting, VPS, and cloud solutions — starting at €0.83/month.</p>
                    <div class="promo-cta-btns">
                        <a href="<?php echo e(SITE_URL); ?>/best-cpanel-hosting/" class="btn-primary"><i class="fas fa-rocket"></i> View Plans</a>
                        <a href="<?php echo e(SITE_URL); ?>/contact-us/" class="btn-secondary"><i class="fas fa-headset"></i> Talk to Sales</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
