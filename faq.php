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
    <section class="page-hero page-hero--compact">
        <div class="container">
            <div class="page-hero-split">
                <div class="page-hero-content">
                    <div class="page-breadcrumb">
                        <a href="<?php echo e(SITE_URL); ?>/">Home</a>
                        <i class="fas fa-chevron-right"></i>
                        <span>FAQ</span>
                    </div>
                    <h1>Frequently Asked <span class="highlight">Questions</span></h1>
                    <p class="page-hero-desc">Can't find your answer? You can always contact us or open a support ticket — we respond within minutes.</p>
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
                        <circle cx="200" cy="160" r="70" fill="var(--bg-tertiary)" stroke="var(--brand-primary)" stroke-width="1" opacity="0.85"/>
                        <text x="200" y="185" text-anchor="middle" fill="var(--brand-primary)" font-size="72" font-weight="800" font-family="var(--font-display)" opacity="0.25">?</text>
                        <!-- Floating FAQ cards -->
                        <rect x="40" y="55" width="90" height="55" rx="10" fill="var(--bg-tertiary)" stroke="var(--brand-primary)" stroke-width="0.8" opacity="0.9"/>
                        <rect x="52" y="68" width="45" height="5" rx="2.5" fill="var(--brand-primary)" opacity="0.3"/>
                        <rect x="52" y="78" width="65" height="5" rx="2.5" fill="var(--brand-primary)" opacity="0.15"/>
                        <rect x="52" y="88" width="30" height="5" rx="2.5" fill="var(--brand-secondary)" opacity="0.25"/>
                        <rect x="270" y="70" width="90" height="55" rx="10" fill="var(--bg-tertiary)" stroke="var(--brand-accent)" stroke-width="0.8" opacity="0.9"/>
                        <rect x="282" y="83" width="45" height="5" rx="2.5" fill="var(--brand-accent)" opacity="0.3"/>
                        <rect x="282" y="93" width="65" height="5" rx="2.5" fill="var(--brand-accent)" opacity="0.15"/>
                        <rect x="282" y="103" width="30" height="5" rx="2.5" fill="var(--brand-secondary)" opacity="0.25"/>
                        <rect x="50" y="255" width="90" height="55" rx="10" fill="var(--bg-tertiary)" stroke="var(--brand-secondary)" stroke-width="0.8" opacity="0.9"/>
                        <rect x="62" y="268" width="45" height="5" rx="2.5" fill="var(--brand-secondary)" opacity="0.3"/>
                        <rect x="62" y="278" width="65" height="5" rx="2.5" fill="var(--brand-secondary)" opacity="0.15"/>
                        <rect x="62" y="288" width="30" height="5" rx="2.5" fill="var(--brand-primary)" opacity="0.25"/>
                        <rect x="260" y="240" width="90" height="55" rx="10" fill="var(--bg-tertiary)" stroke="var(--brand-primary)" stroke-width="0.8" opacity="0.9"/>
                        <rect x="272" y="253" width="45" height="5" rx="2.5" fill="var(--brand-primary)" opacity="0.3"/>
                        <rect x="272" y="263" width="65" height="5" rx="2.5" fill="var(--brand-primary)" opacity="0.15"/>
                        <rect x="272" y="273" width="30" height="5" rx="2.5" fill="var(--brand-accent)" opacity="0.25"/>
                        <!-- Connection lines -->
                        <line x1="130" y1="82" x2="135" y2="135" stroke="var(--brand-primary)" stroke-width="1" stroke-dasharray="4 3" opacity="0.3"/>
                        <line x1="270" y1="97" x2="265" y2="140" stroke="var(--brand-accent)" stroke-width="1" stroke-dasharray="4 3" opacity="0.3"/>
                        <line x1="140" y1="282" x2="145" y2="225" stroke="var(--brand-secondary)" stroke-width="1" stroke-dasharray="4 3" opacity="0.3"/>
                        <line x1="260" y1="267" x2="255" y2="220" stroke="var(--brand-primary)" stroke-width="1" stroke-dasharray="4 3" opacity="0.3"/>
                        <!-- Floating dots -->
                        <circle cx="30" cy="170" r="3" fill="var(--brand-primary)" opacity="0.3"><animate attributeName="opacity" values="0.3;0.7;0.3" dur="3s" repeatCount="indefinite"/></circle>
                        <circle cx="370" cy="170" r="3" fill="var(--brand-secondary)" opacity="0.3"><animate attributeName="opacity" values="0.3;0.6;0.3" dur="4s" repeatCount="indefinite"/></circle>
                        <circle cx="200" cy="340" r="2" fill="var(--brand-accent)" opacity="0.3"><animate attributeName="opacity" values="0.2;0.5;0.2" dur="5s" repeatCount="indefinite"/></circle>
                    </svg>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ ALL FAQ — Tabbed Accordion ═══════════════ -->
    <section class="faq-section faq-hub-section reveal">
        <div class="container">
            <div class="faq-tabs">
                <button class="faq-tab active" data-faq-target="faq-general"><i class="fas fa-circle-question"></i> General</button>
                <button class="faq-tab" data-faq-target="faq-hosting"><i class="fas fa-server"></i> Hosting</button>
                <button class="faq-tab" data-faq-target="faq-vps"><i class="fab fa-linux"></i> VPS</button>
                <button class="faq-tab" data-faq-target="faq-cloud"><i class="fas fa-cloud"></i> Cloud</button>
                <button class="faq-tab" data-faq-target="faq-reseller"><i class="fas fa-sitemap"></i> Reseller</button>
                <button class="faq-tab" data-faq-target="faq-windows"><i class="fab fa-windows"></i> Windows &amp; Licenses</button>
                <button class="faq-tab" data-faq-target="faq-payment"><i class="fas fa-credit-card"></i> Payment</button>
                <button class="faq-tab" data-faq-target="faq-affiliate"><i class="fas fa-handshake"></i> Affiliate</button>
            </div>

            <div class="faq-layout faq-layout--full">
                <div class="faq-panels">

                    <!-- ── General ── -->
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

                    <!-- ── Hosting ── -->
                    <div class="faq-panel" id="faq-hosting">
                        <div class="faq-item"><button class="faq-question"><span>What is cPanel hosting?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>cPanel hosting provides a graphical interface for managing your web server. You can create email accounts, manage files, set up databases, install apps, and configure DNS — all from a single dashboard.</p></div></div>
                        <div class="faq-item"><button class="faq-question"><span>Which web server do you use?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>All hosting plans run on LiteSpeed Enterprise web server with LSCache, delivering significantly faster page loads compared to Apache.</p></div></div>
                        <div class="faq-item"><button class="faq-question"><span>Can I host multiple websites on one plan?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>Yes. All plans except the starter tier support addon domains, allowing you to host multiple websites under a single hosting account.</p></div></div>
                        <div class="faq-item"><button class="faq-question"><span>Do you offer free website migration?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>Absolutely. Open a support ticket after purchasing your plan, provide your old host credentials, and our team will migrate everything — files, databases, emails — within 24 hours at no extra cost.</p></div></div>
                        <div class="faq-item"><button class="faq-question"><span>Is SSL included for free?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>Yes. AutoSSL is enabled on all hosting accounts and automatically provisions and renews free SSL certificates for every domain.</p></div></div>
                        <div class="faq-item"><button class="faq-question"><span>How are backups handled?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>We provide free daily automated backups via JetBackup. You can restore files, databases, emails, or your entire account with a single click from cPanel.</p></div></div>
                        <div class="faq-item"><button class="faq-question"><span>What happens if I exceed my disk or bandwidth limits?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>You will receive a notification when you approach your limits. Your site will not go offline immediately — we'll give you time to upgrade or optimise. You can upgrade your plan at any time from the dashboard.</p></div></div>
                    </div>

                    <!-- ── VPS ── -->
                    <div class="faq-panel" id="faq-vps">
                        <div class="faq-item"><button class="faq-question"><span>What is the difference between VPS and shared hosting?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>A VPS gives you dedicated CPU, RAM, and storage resources with full root access. Shared hosting shares resources across multiple users. VPS is ideal for applications that require more control, performance, or custom software.</p></div></div>
                        <div class="faq-item"><button class="faq-question"><span>Do I get full root access?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>Yes. All VPS/VDS plans include full root (Linux) or Administrator (Windows) access. You have complete control over your server environment.</p></div></div>
                        <div class="faq-item"><button class="faq-question"><span>What virtualization technology do you use?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>We use KVM (Kernel-based Virtual Machine) virtualization, which provides true hardware isolation and guaranteed resources for each VPS instance.</p></div></div>
                        <div class="faq-item"><button class="faq-question"><span>Can I install any operating system?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>Yes. We offer a wide selection of OS templates including Ubuntu, Debian, CentOS, AlmaLinux, Rocky Linux, and Windows Server. You can also mount a custom ISO.</p></div></div>
                        <div class="faq-item"><button class="faq-question"><span>Is DDoS protection included?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>Yes. All VPS plans include enterprise-grade DDoS mitigation at no additional cost to keep your server protected against volumetric attacks.</p></div></div>
                        <div class="faq-item"><button class="faq-question"><span>Can I upgrade my VPS resources later?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>Yes. You can scale your VPS plan up or down at any time from your client dashboard. Resource changes are applied within minutes.</p></div></div>
                    </div>

                    <!-- ── Cloud ── -->
                    <div class="faq-panel" id="faq-cloud">
                        <div class="faq-item"><button class="faq-question"><span>How does cloud billing work?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>Cloud servers are billed hourly based on the resources allocated. You only pay for what you use. You can create and destroy instances at any time and billing stops immediately when you delete a server.</p></div></div>
                        <div class="faq-item"><button class="faq-question"><span>Can I manage cloud servers via API?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>Yes. We provide a full REST API that lets you create, manage, resize, and destroy cloud instances programmatically. API documentation is available in your dashboard.</p></div></div>
                        <div class="faq-item"><button class="faq-question"><span>What cloud server locations are available?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>Cloud servers are available in 20+ locations across Europe, Americas, Asia, and Oceania. You can deploy instances in multiple regions simultaneously.</p></div></div>
                        <div class="faq-item"><button class="faq-question"><span>Can I take snapshots of my cloud server?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>Yes. You can create point-in-time snapshots of your cloud server and use them to restore or clone instances. Snapshots are stored independently of the server.</p></div></div>
                        <div class="faq-item"><button class="faq-question"><span>Is there a minimum commitment period?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>No. Cloud servers have no minimum commitment. You can spin up an instance for a few hours and delete it — you only pay for the time used.</p></div></div>
                    </div>

                    <!-- ── Reseller ── -->
                    <div class="faq-panel" id="faq-reseller">
                        <div class="faq-item"><button class="faq-question"><span>What is reseller hosting?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>Reseller hosting lets you create and sell cPanel hosting accounts under your own brand. You get WHM (Web Host Manager) access to manage all your clients' accounts from one place.</p></div></div>
                        <div class="faq-item"><button class="faq-question"><span>What is the difference between cPanel Reseller, Master Reseller, and Alpha Reseller?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><strong>cPanel Reseller</strong> creates and manages cPanel accounts. <strong>Master Reseller</strong> can also create Reseller accounts (2-tier). <strong>Alpha Reseller</strong> can create Master accounts too (3-tier hierarchy).</p></div></div>
                        <div class="faq-item"><button class="faq-question"><span>Can I use my own branding?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>Yes. All reseller plans support full white-label branding. Your clients will see your company name — YottaSrc branding is completely hidden.</p></div></div>
                        <div class="faq-item"><button class="faq-question"><span>How do I bill my own clients?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>You set your own pricing and billing cycle. Most resellers use WHMCS or Blesta for automated billing. We also offer a free WHMReseller plugin for WHM-based billing management.</p></div></div>
                        <div class="faq-item"><button class="faq-question"><span>Is there a limit on how many accounts I can create?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>The number of accounts depends on your plan. Higher-tier plans offer more accounts and disk space. You can upgrade at any time as your business grows.</p></div></div>
                        <div class="faq-item"><button class="faq-question"><span>What about VPS Reseller?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>VPS Reseller lets you sell VPS instances under your own brand using the SolusVM panel. You manage resources and create VPS containers for your clients with full white-label support.</p></div></div>
                    </div>

                    <!-- ── Windows & Licenses ── -->
                    <div class="faq-panel" id="faq-windows">
                        <div class="faq-item"><button class="faq-question"><span>Are the Microsoft licenses genuine?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>Yes. All Microsoft product keys we sell are genuine retail or volume licenses sourced from authorized distributors. They activate directly with Microsoft servers.</p></div></div>
                        <div class="faq-item"><button class="faq-question"><span>How do I receive my product key?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>Product keys are delivered instantly to your client account after payment. You will also receive an email with your license key and activation instructions.</p></div></div>
                        <div class="faq-item"><button class="faq-question"><span>Do you offer Windows VPS?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>Yes. We offer Windows VPS with pre-installed Windows Server editions and RDP access. Windows licenses are included in the VPS price — no extra license fee required.</p></div></div>
                        <div class="faq-item"><button class="faq-question"><span>Can I transfer my license to another device?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>Retail keys can typically be transferred to a new device after deactivating on the old one. Volume/OEM keys are bound to the original hardware. Check the specific product for details.</p></div></div>
                        <div class="faq-item"><button class="faq-question"><span>What if my key doesn't activate?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>If you encounter any activation issues, open a support ticket immediately. We will either resolve the issue or provide a replacement key at no extra cost.</p></div></div>
                    </div>

                    <!-- ── Payment ── -->
                    <div class="faq-panel" id="faq-payment">
                        <div class="faq-item"><button class="faq-question"><span>What payment methods do you accept?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>We accept credit/debit cards (Visa, Mastercard, AMEX), PayPal, cryptocurrency (BTC, ETH, USDT, and more), bank transfers, and several regional payment methods.</p></div></div>
                        <div class="faq-item"><button class="faq-question"><span>Do prices increase on renewal?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>No. Unlike many hosting providers, our renewal price is the same as the initial purchase price. No surprise increases.</p></div></div>
                        <div class="faq-item"><button class="faq-question"><span>Do you offer a money-back guarantee?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>Yes. We offer a 30-day money-back guarantee on all hosting and reseller plans. VPS and cloud services are non-refundable but can be cancelled at any time.</p></div></div>
                        <div class="faq-item"><button class="faq-question"><span>Can I pay with cryptocurrency?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>Yes. We accept Bitcoin, Ethereum, USDT, Litecoin, and 50+ other cryptocurrencies via our integrated crypto payment gateway.</p></div></div>
                        <div class="faq-item"><button class="faq-question"><span>Is auto-pay available?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>Yes. You can enable automatic payments from your client dashboard using a saved credit card or PayPal. This ensures your services are never interrupted.</p></div></div>
                    </div>

                    <!-- ── Affiliate ── -->
                    <div class="faq-panel" id="faq-affiliate">
                        <div class="faq-item"><button class="faq-question"><span>How does the affiliate program work?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>Share your unique referral link. When someone signs up and makes a purchase through your link, you earn a commission on every qualifying sale. It's free to join.</p></div></div>
                        <div class="faq-item"><button class="faq-question"><span>How much commission do I earn?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>Commission rates vary by product. Hosting and reseller plans offer up to 30% recurring commission. VPS and cloud products offer flat-rate commissions per sale.</p></div></div>
                        <div class="faq-item"><button class="faq-question"><span>When do I get paid?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>Payouts are processed monthly after a 30-day holding period. You can choose to receive payment via PayPal, bank transfer, or account credit.</p></div></div>
                        <div class="faq-item"><button class="faq-question"><span>Is there a minimum payout threshold?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>Yes. The minimum payout threshold is $25. Once your balance reaches this amount, your earnings will be included in the next payout cycle.</p></div></div>
                        <div class="faq-item"><button class="faq-question"><span>Can I track my referrals?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>Yes. Your affiliate dashboard shows real-time statistics including clicks, signups, conversions, and commission earnings.</p></div></div>
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
