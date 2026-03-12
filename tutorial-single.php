<?php
/**
 * YottaSrc — Tutorial Single Article
 * =====================================
 * Reusable single-article template for tutorials.
 */
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/topbar.php';
?>

    <!-- ═══════════════ ARTICLE HERO ═══════════════ -->
    <section class="article-hero">
        <div class="container">
            <div class="page-breadcrumb">
                <a href="<?php echo e(SITE_URL); ?>/">Home</a>
                <i class="fas fa-chevron-right"></i>
                <a href="<?php echo e(SITE_URL); ?>/faq">Knowledge Base</a>
                <i class="fas fa-chevron-right"></i>
                <span>How to Deploy a Node.js App on VPS</span>
            </div>
            <div class="article-hero-inner">
                <div class="article-category-badge">Tutorials</div>
                <h1>How to Deploy a Node.js App on VPS</h1>
                <div class="article-meta">
                    <span class="article-meta-item"><i class="fas fa-calendar-alt"></i> February 28, 2026</span>
                    <span class="article-meta-item"><i class="fas fa-eye"></i> 6,780 views</span>
                    <span class="article-meta-item"><i class="fas fa-user"></i> YottaSrc Team</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ ARTICLE CONTENT ═══════════════ -->
    <section class="article-body">
        <div class="container">
            <div class="article-layout">
                <article class="article-content">
                    <img src="https://images.unsplash.com/photo-1627398242454-45a1465c2479?w=900&h=400&fit=crop" alt="Node.js deployment" class="article-cover" loading="lazy">

                    <h2>Prerequisites</h2>
                    <p>Before you begin, make sure you have the following:</p>
                    <ul>
                        <li>A VPS with Ubuntu 22.04 or later (any YottaSrc VPS plan works)</li>
                        <li>SSH access with root or sudo privileges</li>
                        <li>A domain name pointed to your VPS IP address</li>
                        <li>Basic familiarity with the Linux terminal</li>
                    </ul>

                    <h2>Step 1: Update Your Server</h2>
                    <p>Start by updating the system packages to ensure you have the latest security patches and dependencies.</p>

                    <div class="article-code-block">
                        <div class="code-header"><span>Bash</span></div>
                        <pre><code>sudo apt update &amp;&amp; sudo apt upgrade -y</code></pre>
                    </div>

                    <h2>Step 2: Install Node.js</h2>
                    <p>We recommend using NodeSource to install the latest LTS version of Node.js. At the time of writing, Node.js 20 LTS is the recommended version.</p>

                    <div class="article-code-block">
                        <div class="code-header"><span>Bash</span></div>
                        <pre><code>curl -fsSL https://deb.nodesource.com/setup_20.x | sudo -E bash -
sudo apt install -y nodejs
node --version
npm --version</code></pre>
                    </div>

                    <h2>Step 3: Upload Your Application</h2>
                    <p>Transfer your Node.js project files to the server. You can use Git, SCP, or SFTP. Here's an example using Git:</p>

                    <div class="article-code-block">
                        <div class="code-header"><span>Bash</span></div>
                        <pre><code>cd /var/www
git clone https://github.com/youruser/yourapp.git
cd yourapp
npm install --production</code></pre>
                    </div>

                    <h2>Step 4: Set Up PM2 Process Manager</h2>
                    <p>PM2 keeps your Node.js application running in the background and automatically restarts it if it crashes or if the server reboots.</p>

                    <div class="article-code-block">
                        <div class="code-header"><span>Bash</span></div>
                        <pre><code>sudo npm install -g pm2
pm2 start app.js --name "myapp"
pm2 startup systemd
pm2 save</code></pre>
                    </div>

                    <h2>Step 5: Configure Nginx Reverse Proxy</h2>
                    <p>Nginx acts as a reverse proxy, forwarding HTTP requests to your Node.js app running on a local port. This also allows you to serve static files efficiently and add SSL.</p>

                    <div class="article-code-block">
                        <div class="code-header"><span>Nginx</span></div>
                        <pre><code>server {
    listen 80;
    server_name yourdomain.com;

    location / {
        proxy_pass http://127.0.0.1:3000;
        proxy_http_version 1.1;
        proxy_set_header Upgrade $http_upgrade;
        proxy_set_header Connection 'upgrade';
        proxy_set_header Host $host;
        proxy_cache_bypass $http_upgrade;
    }
}</code></pre>
                    </div>

                    <div class="article-callout">
                        <i class="fas fa-lightbulb"></i>
                        <div>
                            <strong>Pro Tip:</strong> Use Let's Encrypt with Certbot to add a free SSL certificate: <code>sudo certbot --nginx -d yourdomain.com</code>
                        </div>
                    </div>

                    <h2>Step 6: Test Your Deployment</h2>
                    <p>Visit your domain in a browser to verify everything is working. Check PM2 status and Nginx logs if you encounter any issues:</p>

                    <div class="article-code-block">
                        <div class="code-header"><span>Bash</span></div>
                        <pre><code>pm2 status
pm2 logs myapp
sudo tail -f /var/log/nginx/error.log</code></pre>
                    </div>

                    <h2>Conclusion</h2>
                    <p>Your Node.js application is now live on your YottaSrc VPS with PM2 for process management and Nginx as a reverse proxy. This setup provides production-ready reliability with minimal overhead.</p>
                </article>

                <aside class="article-sidebar">
                    <div class="sidebar-card">
                        <h5>Steps</h5>
                        <ul class="sidebar-toc">
                            <li><a href="#prerequisites">Prerequisites</a></li>
                            <li><a href="#update">Update Your Server</a></li>
                            <li><a href="#nodejs">Install Node.js</a></li>
                            <li><a href="#upload">Upload Your Application</a></li>
                            <li><a href="#pm2">Set Up PM2</a></li>
                            <li><a href="#nginx">Configure Nginx</a></li>
                            <li><a href="#test">Test Your Deployment</a></li>
                        </ul>
                    </div>
                    <div class="sidebar-card sidebar-cta">
                        <h5>Need a VPS?</h5>
                        <p>Deploy your server in minutes with NVMe SSD and 10 Gbit/s network.</p>
                        <a href="<?php echo e(SITE_URL); ?>/vps/" class="btn-primary btn-sm">View VPS Plans</a>
                    </div>
                </aside>
            </div>
        </div>
    </section>

    <!-- ═══════════════ RELATED ARTICLES ═══════════════ -->
    <section class="related-articles reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag">Keep Reading</div>
                <h2>Related Tutorials</h2>
            </div>
            <div class="related-grid">
                <a href="#" class="blog-card">
                    <div class="blog-card-thumb">
                        <span class="blog-cat-badge badge-tutorials">Tutorials</span>
                        <img src="https://images.unsplash.com/photo-1544383835-bda2bc66a55d?w=400&h=240&fit=crop" alt="MySQL tutorial" loading="lazy">
                    </div>
                    <div class="blog-card-body">
                        <h4>Optimizing MySQL Performance on Your VPS</h4>
                        <p>Learn how to tune MySQL configuration for better query performance and lower memory usage.</p>
                        <div class="blog-card-meta">
                            <span class="blog-meta-item"><i class="fas fa-calendar-alt"></i> Feb 22, 2026</span>
                            <span class="blog-meta-item"><i class="fas fa-eye"></i> 4,500 views</span>
                        </div>
                    </div>
                </a>
                <a href="#" class="blog-card">
                    <div class="blog-card-thumb">
                        <span class="blog-cat-badge badge-security">Security</span>
                        <img src="https://images.unsplash.com/photo-1555949963-ff9fe0c870eb?w=400&h=240&fit=crop" alt="VPS security" loading="lazy">
                    </div>
                    <div class="blog-card-body">
                        <h4>Essential VPS Security Checklist for 2026</h4>
                        <p>Firewall rules, SSH hardening, fail2ban, and more — secure your Linux VPS from day one.</p>
                        <div class="blog-card-meta">
                            <span class="blog-meta-item"><i class="fas fa-calendar-alt"></i> Feb 18, 2026</span>
                            <span class="blog-meta-item"><i class="fas fa-eye"></i> 3,900 views</span>
                        </div>
                    </div>
                </a>
                <a href="#" class="blog-card">
                    <div class="blog-card-thumb">
                        <span class="blog-cat-badge badge-vps">VPS</span>
                        <img src="https://images.unsplash.com/photo-1597852074816-d933c7d2b988?w=400&h=240&fit=crop" alt="Docker on VPS" loading="lazy">
                    </div>
                    <div class="blog-card-body">
                        <h4>Getting Started with Docker on Your VPS</h4>
                        <p>A beginner-friendly guide to installing and running Docker containers on a Linux VPS.</p>
                        <div class="blog-card-meta">
                            <span class="blog-meta-item"><i class="fas fa-calendar-alt"></i> Feb 10, 2026</span>
                            <span class="blog-meta-item"><i class="fas fa-eye"></i> 5,100 views</span>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- ═══════════════ BOTTOM CTA ═══════════════ -->
    <section class="promo-cta reveal">
        <div class="container">
            <div class="promo-cta-inner">
                <div class="promo-cta-glow"></div>
                <div class="promo-cta-icon"><i class="fas fa-rocket"></i></div>
                <h2>Ready to deploy your server?</h2>
                <p>Get started with a high-performance VPS from €2.99/month. Full root access, NVMe SSD, 10 Gbit/s.</p>
                <a href="<?php echo e(SITE_URL); ?>/vps/#plans" class="btn-primary">View VPS Plans <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
