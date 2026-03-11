<?php
/**
 * YottaSrc — FAQ Hub
 * ====================
 */
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/topbar.php';
?>

    <!-- ═══════════════ PAGE HERO ═══════════════ -->
    <section class="page-hero">
        <div class="container">
            <div class="page-hero-split">
                <div class="page-hero-content">
                    <div class="page-breadcrumb">
                        <a href="<?php echo e(SITE_URL); ?>/">Home</a>
                        <i class="fas fa-chevron-right"></i>
                        <span>FAQ</span>
                    </div>
                    <h1>Frequently Asked <span class="highlight">Questions</span></h1>
                    <p class="page-hero-desc">If you cannot find your answer here, you can always contact us. We will respond shortly!</p>
                    <div class="faq-search-wrap">
                        <i class="fas fa-search"></i>
                        <input type="text" id="faqSearch" class="faq-search-input" placeholder="Search for answers..." autocomplete="off">
                    </div>
                    <div class="page-hero-links">
                        <a href="https://docs.yottasrc.com/" class="btn-secondary btn-sm" target="_blank" rel="noopener noreferrer"><i class="fas fa-file-code"></i> Documentation</a>
                        <a href="<?php echo e(SITE_URL); ?>/contact-us/" class="btn-secondary btn-sm"><i class="fas fa-headset"></i> Open Ticket</a>
                        <a href="https://wiki.yottasrc.com/" class="btn-secondary btn-sm" target="_blank" rel="noopener noreferrer"><i class="fas fa-book-open"></i> Tutorials</a>
                        <a href="https://blog.yottasrc.com/" class="btn-secondary btn-sm" target="_blank" rel="noopener noreferrer"><i class="fas fa-rss"></i> Blog</a>
                    </div>
                </div>
                <div class="page-hero-visual">
                    <svg viewBox="0 0 400 360" fill="none" xmlns="http://www.w3.org/2000/svg" class="hero-illustration">
                        <!-- Central question circle -->
                        <circle cx="200" cy="160" r="70" fill="var(--bg-card)" stroke="var(--border-primary)" stroke-width="1.5"/>
                        <text x="200" y="185" text-anchor="middle" fill="var(--brand-primary)" font-size="72" font-weight="800" font-family="var(--font-display)" opacity="0.15">?</text>
                        <!-- Floating FAQ cards -->
                        <rect x="40" y="55" width="90" height="55" rx="10" fill="var(--bg-card)" stroke="var(--border-primary)" stroke-width="1"/>
                        <rect x="52" y="68" width="45" height="5" rx="2.5" fill="var(--brand-primary)" opacity="0.15"/>
                        <rect x="52" y="78" width="65" height="5" rx="2.5" fill="var(--brand-primary)" opacity="0.08"/>
                        <rect x="52" y="88" width="30" height="5" rx="2.5" fill="var(--brand-secondary)" opacity="0.12"/>
                        <rect x="270" y="70" width="90" height="55" rx="10" fill="var(--bg-card)" stroke="var(--border-primary)" stroke-width="1"/>
                        <rect x="282" y="83" width="45" height="5" rx="2.5" fill="var(--brand-accent)" opacity="0.15"/>
                        <rect x="282" y="93" width="65" height="5" rx="2.5" fill="var(--brand-accent)" opacity="0.08"/>
                        <rect x="282" y="103" width="30" height="5" rx="2.5" fill="var(--brand-secondary)" opacity="0.12"/>
                        <rect x="50" y="255" width="90" height="55" rx="10" fill="var(--bg-card)" stroke="var(--border-primary)" stroke-width="1"/>
                        <rect x="62" y="268" width="45" height="5" rx="2.5" fill="var(--brand-secondary)" opacity="0.15"/>
                        <rect x="62" y="278" width="65" height="5" rx="2.5" fill="var(--brand-secondary)" opacity="0.08"/>
                        <rect x="62" y="288" width="30" height="5" rx="2.5" fill="var(--brand-primary)" opacity="0.12"/>
                        <rect x="260" y="240" width="90" height="55" rx="10" fill="var(--bg-card)" stroke="var(--border-primary)" stroke-width="1"/>
                        <rect x="272" y="253" width="45" height="5" rx="2.5" fill="var(--brand-primary)" opacity="0.15"/>
                        <rect x="272" y="263" width="65" height="5" rx="2.5" fill="var(--brand-primary)" opacity="0.08"/>
                        <rect x="272" y="273" width="30" height="5" rx="2.5" fill="var(--brand-accent)" opacity="0.12"/>
                        <!-- Connection lines -->
                        <line x1="130" y1="82" x2="135" y2="135" stroke="var(--brand-primary)" stroke-width="1" stroke-dasharray="4 3" opacity="0.2"/>
                        <line x1="270" y1="97" x2="265" y2="140" stroke="var(--brand-accent)" stroke-width="1" stroke-dasharray="4 3" opacity="0.2"/>
                        <line x1="140" y1="282" x2="145" y2="225" stroke="var(--brand-secondary)" stroke-width="1" stroke-dasharray="4 3" opacity="0.2"/>
                        <line x1="260" y1="267" x2="255" y2="220" stroke="var(--brand-primary)" stroke-width="1" stroke-dasharray="4 3" opacity="0.2"/>
                        <!-- Floating dots -->
                        <circle cx="30" cy="170" r="3" fill="var(--brand-primary)" opacity="0.3"><animate attributeName="opacity" values="0.3;0.7;0.3" dur="3s" repeatCount="indefinite"/></circle>
                        <circle cx="370" cy="170" r="3" fill="var(--brand-secondary)" opacity="0.3"><animate attributeName="opacity" values="0.3;0.6;0.3" dur="4s" repeatCount="indefinite"/></circle>
                        <circle cx="200" cy="340" r="2" fill="var(--brand-accent)" opacity="0.3"><animate attributeName="opacity" values="0.2;0.5;0.2" dur="5s" repeatCount="indefinite"/></circle>
                    </svg>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ FAQ CATEGORIES (Swiper) ═══════════════ -->
    <section class="faq-categories reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag">Browse by Topic</div>
                <h2>Choose a category</h2>
                <p>Select a topic below to find answers to the most common questions.</p>
            </div>

            <div class="faq-cat-grid">
                <a href="<?php echo e(SITE_URL); ?>/hosting-faq/" class="faq-cat-card"><div class="faq-cat-icon"><i class="fas fa-server"></i></div><h4>Hosting FAQ</h4><p>cPanel hosting plans, features, limits, and common issues.</p><span class="faq-cat-arrow">View Questions <i class="fas fa-arrow-right"></i></span></a>
                <a href="<?php echo e(SITE_URL); ?>/telegram-bot-hosting-faq/" class="faq-cat-card"><div class="faq-cat-icon icon-blue"><i class="fab fa-telegram"></i></div><h4>Telegram Bot FAQ</h4><p>Telegram bot hosting setup, whitelisting, and management.</p><span class="faq-cat-arrow">View Questions <i class="fas fa-arrow-right"></i></span></a>
                <a href="<?php echo e(SITE_URL); ?>/vps-faq/" class="faq-cat-card"><div class="faq-cat-icon icon-green"><i class="fab fa-linux"></i></div><h4>VPS FAQ</h4><p>VPS/VDS plans, root access, KVM virtualization, and ports.</p><span class="faq-cat-arrow">View Questions <i class="fas fa-arrow-right"></i></span></a>
                <a href="<?php echo e(SITE_URL); ?>/vps-reseller-faq/" class="faq-cat-card"><div class="faq-cat-icon icon-purple"><i class="fas fa-cubes"></i></div><h4>VPS Reseller FAQ</h4><p>VPS reseller program, billing, and white-label options.</p><span class="faq-cat-arrow">View Questions <i class="fas fa-arrow-right"></i></span></a>
                <a href="<?php echo e(SITE_URL); ?>/reseller-faq/" class="faq-cat-card"><div class="faq-cat-icon icon-amber"><i class="fas fa-sitemap"></i></div><h4>Reseller FAQ</h4><p>cPanel reseller hosting, WHM access, and account management.</p><span class="faq-cat-arrow">View Questions <i class="fas fa-arrow-right"></i></span></a>
                <a href="<?php echo e(SITE_URL); ?>/windows-keys-faq/" class="faq-cat-card"><div class="faq-cat-icon icon-blue"><i class="fab fa-windows"></i></div><h4>Windows Keys FAQ</h4><p>Microsoft product keys, activation, and licensing questions.</p><span class="faq-cat-arrow">View Questions <i class="fas fa-arrow-right"></i></span></a>
                <a href="<?php echo e(SITE_URL); ?>/cloud-faq/" class="faq-cat-card"><div class="faq-cat-icon icon-green"><i class="fas fa-cloud"></i></div><h4>Cloud FAQ</h4><p>Cloud server provisioning, hourly billing, API access, and scaling.</p><span class="faq-cat-arrow">View Questions <i class="fas fa-arrow-right"></i></span></a>
                <a href="<?php echo e(SITE_URL); ?>/payment-methods-faq/" class="faq-cat-card"><div class="faq-cat-icon icon-amber"><i class="fas fa-credit-card"></i></div><h4>Payment Methods FAQ</h4><p>Accepted payment methods, invoicing, refunds, and auto-pay.</p><span class="faq-cat-arrow">View Questions <i class="fas fa-arrow-right"></i></span></a>
                <a href="<?php echo e(SITE_URL); ?>/dmca-faq/" class="faq-cat-card"><div class="faq-cat-icon icon-purple"><i class="fas fa-gavel"></i></div><h4>DMCA FAQ</h4><p>DMCA-ignored hosting locations, content policies, and takedown requests.</p><span class="faq-cat-arrow">View Questions <i class="fas fa-arrow-right"></i></span></a>
                <a href="<?php echo e(SITE_URL); ?>/affiliate-faq/" class="faq-cat-card"><div class="faq-cat-icon"><i class="fas fa-handshake"></i></div><h4>Affiliate FAQ</h4><p>Affiliate program, commissions, referral tracking, and payouts.</p><span class="faq-cat-arrow">View Questions <i class="fas fa-arrow-right"></i></span></a>
                <a href="<?php echo e(SITE_URL); ?>/wholesale-yottasrc-services-faq/" class="faq-cat-card"><div class="faq-cat-icon icon-green"><i class="fas fa-warehouse"></i></div><h4>Wholesale Services FAQ</h4><p>Wholesale pricing, bulk services, and partner programs.</p><span class="faq-cat-arrow">View Questions <i class="fas fa-arrow-right"></i></span></a>
            </div>
        </div>
    </section>

    <!-- ═══════════════ GENERAL FAQ ═══════════════ -->
    <section class="faq-section reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag">General</div>
                <h2>Common Questions</h2>
                <p>Quick answers to the most frequently asked questions about YottaSrc.</p>
            </div>

            <div class="faq-layout faq-layout--full">
                <div class="faq-panels">
                    <div class="faq-panel active" id="faq-general">
                        <div class="faq-item"><button class="faq-question"><span>How long does it take to activate my order?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>Orders are typically activated within 2 to 20 minutes. If your service is not activated within this time, please open a ticket.</p></div></div>
                        <div class="faq-item"><button class="faq-question"><span>How can I pay an invoice?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>Invoices can be paid online through your client account using any of the accepted payment methods.</p></div></div>
                        <div class="faq-item"><button class="faq-question"><span>How do I cancel a service?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>You can cancel any service from your client dashboard by selecting the service and clicking the cancel button. Note: Canceling a service does not automatically qualify for a refund.</p></div></div>
                        <div class="faq-item"><button class="faq-question"><span>Can I postpone my payment?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>Yes, you can request a payment extension by contacting Sales support before your due date.</p></div></div>
                        <div class="faq-item"><button class="faq-question"><span>Does hosting include a control panel?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>Yes, all our hosting plans include the latest version of cPanel, allowing you to manage your website, databases, emails, and more.</p></div></div>
                        <div class="faq-item"><button class="faq-question"><span>Can I get a refund for unused services?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>Yes, refunds are available but subject to our <a href="<?php echo e(SITE_URL); ?>/legal/refund-policy">Refund Policy</a>. We offer a 30-day money-back guarantee on hosting plans.</p></div></div>
                        <div class="faq-item"><button class="faq-question"><span>What security measures are in place?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>Our hosting services include firewalls, DDoS protection, SSL certificates, Imunify360, and CloudLinux. We conduct regular security audits.</p></div></div>
                        <div class="faq-item"><button class="faq-question"><span>Where can I check my billing status?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>You can view and download invoices anytime from your client account. We maintain full transparency — there are no hidden fees.</p></div></div>
                        <div class="faq-item"><button class="faq-question"><span>How can I upgrade or downgrade my hosting?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>Go to the upgrade/downgrade section in your dashboard, or contact our sales department for assistance.</p></div></div>
                    </div>
                    <div class="faq-no-results"><i class="fas fa-search"></i> No matching questions found. Try a different search term.</div>
                </div>
            </div>

            <div class="faq-actions">
                <a href="<?php echo e(SITE_URL); ?>/contact-us/" class="btn-primary"><i class="fas fa-headset"></i> Open a Ticket</a>
            </div>
        </div>
    </section>

    <!-- ═══════════════ SUPPORT CTA ═══════════════ -->
    <section class="faq-support-cta reveal">
        <div class="container">
            <div class="faq-support-inner">
                <div class="faq-support-icon"><i class="fas fa-life-ring"></i></div>
                <h2>Still need help?</h2>
                <p>Our support team is available 24/7 to assist you with any questions.</p>
                <div class="faq-support-btns">
                    <a href="<?php echo e(CONSOLE_URL); ?>/login" class="btn-primary"><i class="fas fa-ticket-alt"></i> Open a Ticket</a>
                    <a href="<?php echo e(SITE_URL); ?>/contact-us/" class="btn-secondary"><i class="fas fa-headset"></i> Contact Support</a>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ PROMOTIONS CTA ═══════════════ -->
    <section class="promo-cta reveal">
        <div class="container">
            <div class="promo-cta-inner">
                <div class="promo-cta-glow"></div>
                <div class="promo-cta-icon"><i class="fas fa-gift"></i></div>
                <h2>Get Exclusive Offers &amp; Promotions</h2>
                <p>Stay updated with the latest deals, discounts, and special promotions.</p>
                <a href="<?php echo e(SITE_URL); ?>/promotions" class="btn-primary">Check Promotions <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
