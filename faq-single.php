<?php
/**
 * YottaSrc — FAQ Single Article
 * ================================
 * Reusable single-article template for FAQ / knowledge base entries.
 */
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/topbar.php';
?>

    <!-- ═══════════════ ARTICLE HERO ═══════════════ -->
    <section class="article-hero">
        <div class="container">
            <div class="page-breadcrumb">
                <a href="<?php echo e(SITE_URL); ?>/"><?php echo e(__('breadcrumb_home')); ?></a>
                <i class="fas fa-chevron-right"></i>
                <a href="<?php echo e(SITE_URL); ?>/faq"><?php echo e(__('faqsingle_breadcrumb_faq')); ?></a>
                <i class="fas fa-chevron-right"></i>
                <span><?php echo e(__('faqsingle_breadcrumb_title')); ?></span>
            </div>
            <div class="article-hero-inner">
                <div class="article-category-badge"><?php echo e(__('faqsingle_category')); ?></div>
                <h1><?php echo e(__('faqsingle_title')); ?></h1>
                <div class="article-meta">
                    <span class="article-meta-item"><i class="fas fa-calendar-alt"></i> <?php echo e(__('faqsingle_date')); ?></span>
                    <span class="article-meta-item"><i class="fas fa-eye"></i> <?php echo e(__('faqsingle_views')); ?></span>
                    <span class="article-meta-item"><i class="fas fa-user"></i> <?php echo e(__('faqsingle_author')); ?></span>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ ARTICLE CONTENT ═══════════════ -->
    <section class="article-body">
        <div class="container">
            <div class="article-layout">
                <article class="article-content">
                    <h2>Overview</h2>
                    <p>Migrating your website to YottaSrc is completely free on all hosting plans. Our team handles the entire process — files, databases, emails, and DNS configuration — so you experience zero downtime.</p>

                    <h2>Option 1: Free Managed Migration</h2>
                    <p>This is the easiest approach. Simply open a support ticket after purchasing your hosting plan and provide your old host's login credentials. Our team will migrate everything for you within 24 hours.</p>

                    <h3>What We Need From You</h3>
                    <ul>
                        <li>cPanel login URL and credentials from your current host</li>
                        <li>Or FTP/SSH credentials and database access details</li>
                        <li>List of domains and email accounts to migrate</li>
                    </ul>

                    <div class="article-callout">
                        <i class="fas fa-shield-alt"></i>
                        <div>
                            <strong>Security Note:</strong> Your credentials are used only for migration purposes and are deleted immediately after the process is complete. You can also change your old host's password after the migration.
                        </div>
                    </div>

                    <h2>Option 2: Self-Migration via cPanel</h2>
                    <p>If you prefer to handle the migration yourself, you can use cPanel's built-in backup and restore tools.</p>

                    <h3>Step-by-Step Process</h3>
                    <ol>
                        <li><strong>Create a Full Backup</strong> — Log into your old cPanel, go to Backup Wizard, and generate a full account backup.</li>
                        <li><strong>Download the Backup</strong> — Save the backup file (usually a .tar.gz archive) to your local machine.</li>
                        <li><strong>Upload to YottaSrc</strong> — Log into your new YottaSrc cPanel, navigate to File Manager, and upload the backup to the home directory.</li>
                        <li><strong>Request Restore</strong> — Open a ticket requesting the backup to be restored, or use JetBackup if available on your plan.</li>
                    </ol>

                    <h2>Option 3: WordPress Migration Plugin</h2>
                    <p>For WordPress sites, you can use plugins like <strong>All-in-One WP Migration</strong> or <strong>Duplicator</strong> to export your site and import it on the new host.</p>

                    <div class="article-code-block">
                        <div class="code-header"><span>Steps</span></div>
                        <pre><code>1. Install "All-in-One WP Migration" on old site
2. Export → File (downloads a .wpress file)
3. Install WordPress on your YottaSrc hosting
4. Install the same plugin on the new site
5. Import → Upload the .wpress file
6. Update permalinks: Settings → Permalinks → Save</code></pre>
                    </div>

                    <h2>After Migration</h2>
                    <ul>
                        <li>Update your domain's nameservers to point to YottaSrc</li>
                        <li>Verify all files, databases, and email accounts are intact</li>
                        <li>Test your website thoroughly before canceling your old hosting</li>
                        <li>Enable SSL via cPanel → SSL/TLS (AutoSSL is automatic)</li>
                    </ul>

                    <h2>Need Help?</h2>
                    <p>Our support team is available 24/7 with an average response time under 10 minutes. Open a ticket or start a live chat and we'll guide you through the entire process.</p>
                </article>

                <aside class="article-sidebar">
                    <div class="sidebar-card">
                        <h5><?php echo e(__('faqsingle_sidebar_toc_title')); ?></h5>
                        <ul class="sidebar-toc">
                            <li><a href="#overview"><?php echo e(__('faqsingle_sidebar_toc1')); ?></a></li>
                            <li><a href="#managed"><?php echo e(__('faqsingle_sidebar_toc2')); ?></a></li>
                            <li><a href="#self"><?php echo e(__('faqsingle_sidebar_toc3')); ?></a></li>
                            <li><a href="#wordpress"><?php echo e(__('faqsingle_sidebar_toc4')); ?></a></li>
                            <li><a href="#after"><?php echo e(__('faqsingle_sidebar_toc5')); ?></a></li>
                        </ul>
                    </div>
                    <div class="sidebar-card sidebar-cta">
                        <h5><?php echo e(__('faqsingle_sidebar_cta_title')); ?></h5>
                        <p><?php echo e(__('faqsingle_sidebar_cta_desc')); ?></p>
                        <a href="<?php echo e(SITE_URL); ?>/contact-us/" class="btn-primary btn-sm"><?php echo e(__('faqsingle_sidebar_cta_btn')); ?></a>
                    </div>
                </aside>
            </div>
        </div>
    </section>

    <!-- ═══════════════ RELATED ARTICLES ═══════════════ -->
    <section class="related-articles reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag"><?php echo e(__('faqsingle_related_tag')); ?></div>
                <h2><?php echo e(__('faqsingle_related_title')); ?></h2>
            </div>
            <div class="related-grid">
                <a href="#" class="blog-card">
                    <div class="blog-card-thumb">
                        <span class="blog-cat-badge badge-hosting"><?php echo e(__('faqsingle_category')); ?></span>
                        <img src="https://images.unsplash.com/photo-1558494949-ef010cbdcc31?w=400&h=240&fit=crop" alt="<?php echo e(__('faqsingle_related1_title')); ?>" loading="lazy">
                    </div>
                    <div class="blog-card-body">
                        <h4><?php echo e(__('faqsingle_related1_title')); ?></h4>
                        <p><?php echo e(__('faqsingle_related1_desc')); ?></p>
                        <div class="blog-card-meta">
                            <span class="blog-meta-item"><i class="fas fa-calendar-alt"></i> <?php echo e(__('faqsingle_related1_date')); ?></span>
                            <span class="blog-meta-item"><i class="fas fa-eye"></i> <?php echo e(__('faqsingle_related1_views')); ?></span>
                        </div>
                    </div>
                </a>
                <a href="#" class="blog-card">
                    <div class="blog-card-thumb">
                        <span class="blog-cat-badge badge-hosting"><?php echo e(__('faqsingle_category')); ?></span>
                        <img src="https://images.unsplash.com/photo-1544197150-b99a580bb7a8?w=400&h=240&fit=crop" alt="<?php echo e(__('faqsingle_related2_title')); ?>" loading="lazy">
                    </div>
                    <div class="blog-card-body">
                        <h4><?php echo e(__('faqsingle_related2_title')); ?></h4>
                        <p><?php echo e(__('faqsingle_related2_desc')); ?></p>
                        <div class="blog-card-meta">
                            <span class="blog-meta-item"><i class="fas fa-calendar-alt"></i> <?php echo e(__('faqsingle_related2_date')); ?></span>
                            <span class="blog-meta-item"><i class="fas fa-eye"></i> <?php echo e(__('faqsingle_related2_views')); ?></span>
                        </div>
                    </div>
                </a>
                <a href="#" class="blog-card">
                    <div class="blog-card-thumb">
                        <span class="blog-cat-badge badge-hosting"><?php echo e(__('faqsingle_category')); ?></span>
                        <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=400&h=240&fit=crop" alt="<?php echo e(__('faqsingle_related3_title')); ?>" loading="lazy">
                    </div>
                    <div class="blog-card-body">
                        <h4><?php echo e(__('faqsingle_related3_title')); ?></h4>
                        <p><?php echo e(__('faqsingle_related3_desc')); ?></p>
                        <div class="blog-card-meta">
                            <span class="blog-meta-item"><i class="fas fa-calendar-alt"></i> <?php echo e(__('faqsingle_related3_date')); ?></span>
                            <span class="blog-meta-item"><i class="fas fa-eye"></i> <?php echo e(__('faqsingle_related3_views')); ?></span>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- ═══════════════ SUPPORT CTA ═══════════════ -->
    <section class="promo-cta reveal">
        <div class="container">
            <div class="promo-cta-inner">
                <div class="promo-cta-glow"></div>
                <div class="promo-cta-icon"><i class="fas fa-life-ring"></i></div>
                <h2><?php echo e(__('faqsingle_cta_title')); ?></h2>
                <p><?php echo e(__('faqsingle_cta_desc')); ?></p>
                <a href="<?php echo e(SITE_URL); ?>/contact-us/" class="btn-primary"><?php echo e(__('faqsingle_cta_btn')); ?> <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
