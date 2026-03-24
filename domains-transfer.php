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
                    <a href="<?php echo e(SITE_URL); ?>/">Home</a>
                    <i class="fas fa-chevron-right"></i>
                    <a href="<?php echo e(SITE_URL); ?>/domains-registration/">Domains</a>
                    <i class="fas fa-chevron-right"></i>
                    <span>Transfer</span>
                </div>
                <h1>Transfer Your <span class="highlight">Domains</span> to YottaSrc</h1>
                <p class="page-hero-desc">
                    Move your domains to YottaSrc in minutes. Get a free 1-year extension, free WHOIS privacy, and premium DNS — all at no extra cost.
                </p>
                <div class="page-hero-badges" >
                    <div class="hero-badge-item"><i class="fas fa-check"></i> Free 1-Year Extension</div>
                    <div class="hero-badge-item"><i class="fas fa-check"></i> Free WHOIS Privacy</div>
                    <div class="hero-badge-item"><i class="fas fa-check"></i> Zero Downtime</div>
                    <div class="hero-badge-item"><i class="fas fa-check"></i> 24/7 Support</div>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ DOMAIN TRANSFER SEARCH ═══════════════ -->
    <section class="domain-search-section reveal">
        <div class="container">
            <div class="domain-search-box">
                <h2>Start your domain transfer</h2>
                <form class="domain-search-form" action="<?php echo e(CP_URL); ?>/cart.php?a=add&domain=transfer" method="get">
                    <div class="domain-search-input-wrap">
                        <i class="fas fa-exchange-alt"></i>
                        <input type="text" name="domain" placeholder="Enter domain to transfer (e.g. example.com)" autocomplete="off" required>
                        <button type="submit" class="btn-primary">Transfer <i class="fas fa-arrow-right"></i></button>
                    </div>
                </form>
                <p class="domain-search-note">Make sure your domain is unlocked and you have the EPP/auth code from your current registrar.</p>
            </div>
        </div>
    </section>

    <!-- ═══════════════ HOW IT WORKS ═══════════════ -->
    <section class="onboarding reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag">How It Works</div>
                <h2>Transfer in 4 easy steps</h2>
                <p>The entire process is automated and usually completes within 5–7 days.</p>
            </div>

            <div class="vps-steps-grid">
                <div class="vps-step-card">
                    <div class="vps-step-num">1</div>
                    <div class="vps-step-icon"><i class="fas fa-unlock"></i></div>
                    <h4>Unlock Domain</h4>
                    <p>Log into your current registrar and disable the domain lock (transfer lock).</p>
                </div>
                <div class="vps-step-card">
                    <div class="vps-step-num">2</div>
                    <div class="vps-step-icon icon-green"><i class="fas fa-key"></i></div>
                    <h4>Get Auth Code</h4>
                    <p>Request the EPP/authorization code from your current registrar.</p>
                </div>
                <div class="vps-step-card">
                    <div class="vps-step-num">3</div>
                    <div class="vps-step-icon icon-purple"><i class="fas fa-shopping-cart"></i></div>
                    <h4>Initiate Transfer</h4>
                    <p>Enter your domain above, provide the auth code, and complete payment.</p>
                </div>
                <div class="vps-step-card">
                    <div class="vps-step-num">4</div>
                    <div class="vps-step-icon icon-amber"><i class="fas fa-check-circle"></i></div>
                    <h4>Confirm &amp; Done</h4>
                    <p>Approve the transfer email. Your domain moves to YottaSrc with a free 1-year extension.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ TRANSFER PRICING ═══════════════ -->
    <section class="domain-pricing reveal" id="pricing">
        <div class="container">
            <div class="section-header">
                <div class="section-tag">Pricing</div>
                <h2>Transfer pricing by TLD</h2>
                <p>Transfer fee includes a free 1-year extension on your domain's expiry date.</p>
            </div>

            <div class="domain-tld-grid">
                <div class="domain-tld-card">
                    <div class="domain-tld-name">.com</div>
                    <div class="domain-tld-desc">+ 1 year free extension</div>
                    <div class="domain-tld-price"><span class="currency">€</span><span class="amount">9.99</span><span class="period">/transfer</span></div>
                    <a href="<?php echo e(CP_URL); ?>/cart.php?a=add&domain=transfer" class="btn-primary btn-sm">Transfer</a>
                </div>
                <div class="domain-tld-card">
                    <div class="domain-tld-name">.net</div>
                    <div class="domain-tld-desc">+ 1 year free extension</div>
                    <div class="domain-tld-price"><span class="currency">€</span><span class="amount">11.99</span><span class="period">/transfer</span></div>
                    <a href="<?php echo e(CP_URL); ?>/cart.php?a=add&domain=transfer" class="btn-primary btn-sm">Transfer</a>
                </div>
                <div class="domain-tld-card">
                    <div class="domain-tld-name">.org</div>
                    <div class="domain-tld-desc">+ 1 year free extension</div>
                    <div class="domain-tld-price"><span class="currency">€</span><span class="amount">10.99</span><span class="period">/transfer</span></div>
                    <a href="<?php echo e(CP_URL); ?>/cart.php?a=add&domain=transfer" class="btn-primary btn-sm">Transfer</a>
                </div>
                <div class="domain-tld-card">
                    <div class="domain-tld-name">.io</div>
                    <div class="domain-tld-desc">+ 1 year free extension</div>
                    <div class="domain-tld-price"><span class="currency">€</span><span class="amount">29.99</span><span class="period">/transfer</span></div>
                    <a href="<?php echo e(CP_URL); ?>/cart.php?a=add&domain=transfer" class="btn-primary btn-sm">Transfer</a>
                </div>
                <div class="domain-tld-card">
                    <div class="domain-tld-name">.dev</div>
                    <div class="domain-tld-desc">+ 1 year free extension</div>
                    <div class="domain-tld-price"><span class="currency">€</span><span class="amount">14.99</span><span class="period">/transfer</span></div>
                    <a href="<?php echo e(CP_URL); ?>/cart.php?a=add&domain=transfer" class="btn-primary btn-sm">Transfer</a>
                </div>
                <div class="domain-tld-card">
                    <div class="domain-tld-name">.co</div>
                    <div class="domain-tld-desc">+ 1 year free extension</div>
                    <div class="domain-tld-price"><span class="currency">€</span><span class="amount">24.99</span><span class="period">/transfer</span></div>
                    <a href="<?php echo e(CP_URL); ?>/cart.php?a=add&domain=transfer" class="btn-primary btn-sm">Transfer</a>
                </div>
                <div class="domain-tld-card">
                    <div class="domain-tld-name">.xyz</div>
                    <div class="domain-tld-desc">+ 1 year free extension</div>
                    <div class="domain-tld-price"><span class="currency">€</span><span class="amount">9.99</span><span class="period">/transfer</span></div>
                    <a href="<?php echo e(CP_URL); ?>/cart.php?a=add&domain=transfer" class="btn-primary btn-sm">Transfer</a>
                </div>
                <div class="domain-tld-card">
                    <div class="domain-tld-name">.me</div>
                    <div class="domain-tld-desc">+ 1 year free extension</div>
                    <div class="domain-tld-price"><span class="currency">€</span><span class="amount">14.99</span><span class="period">/transfer</span></div>
                    <a href="<?php echo e(CP_URL); ?>/cart.php?a=add&domain=transfer" class="btn-primary btn-sm">Transfer</a>
                </div>
            </div>

            <div class="pricing-custom">
                <p>Need to transfer a different TLD? <a href="<?php echo e(CP_URL); ?>/cart.php?a=add&domain=transfer">Check pricing</a> for any extension.</p>
            </div>
        </div>
    </section>

    <!-- ═══════════════ ALL TLD PRICING TABLE ═══════════════ -->
    <section class="domain-all-tlds reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag">All Extensions</div>
                <h2>Complete transfer pricing</h2>
                <p>Compare register, transfer, and renewal prices for every TLD.</p>
            </div>

            <div class="tld-table-controls">
                <div class="tld-table-filters">
                    <button class="tld-filter active" data-filter="all">All</button>
                    <button class="tld-filter" data-filter="popular"><i class="fas fa-fire"></i> Popular</button>
                    <button class="tld-filter" data-filter="sale"><i class="fas fa-tag"></i> On Sale</button>
                    <button class="tld-filter" data-filter="country"><i class="fas fa-flag"></i> Country</button>
                </div>
                <div class="tld-table-search">
                    <i class="fas fa-search"></i>
                    <input type="text" placeholder="Search extension..." class="tld-search-input">
                </div>
            </div>

            <div class="tld-table-wrap">
                <table class="tld-table">
                    <thead>
                        <tr>
                            <th>Extension</th>
                            <th>Register</th>
                            <th>Transfer</th>
                            <th>Renew</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr data-category="popular">
                            <td><span class="tld-ext">.com</span><span class="tld-badge tld-badge--hot">Hot</span></td>
                            <td><span class="tld-price">€11.99</span><span class="tld-period">/yr</span></td>
                            <td><span class="tld-price">€11.99</span><span class="tld-period">/yr</span></td>
                            <td><span class="tld-price">€14.99</span><span class="tld-period">/yr</span></td>
                            <td><a href="<?php echo e(CP_URL); ?>/cart.php?a=add&domain=transfer" class="btn-primary btn-sm">Transfer</a></td>
                        </tr>
                        <tr data-category="popular">
                            <td><span class="tld-ext">.net</span></td>
                            <td><span class="tld-price">€15.99</span><span class="tld-period">/yr</span></td>
                            <td><span class="tld-price">€15.99</span><span class="tld-period">/yr</span></td>
                            <td><span class="tld-price">€19.99</span><span class="tld-period">/yr</span></td>
                            <td><a href="<?php echo e(CP_URL); ?>/cart.php?a=add&domain=transfer" class="btn-primary btn-sm">Transfer</a></td>
                        </tr>
                        <tr data-category="popular">
                            <td><span class="tld-ext">.org</span><span class="tld-badge tld-badge--hot">Hot</span></td>
                            <td><span class="tld-price">€14.99</span><span class="tld-period">/yr</span></td>
                            <td><span class="tld-price">€14.99</span><span class="tld-period">/yr</span></td>
                            <td><span class="tld-price">€17.99</span><span class="tld-period">/yr</span></td>
                            <td><a href="<?php echo e(CP_URL); ?>/cart.php?a=add&domain=transfer" class="btn-primary btn-sm">Transfer</a></td>
                        </tr>
                        <tr data-category="popular">
                            <td><span class="tld-ext">.io</span><span class="tld-badge tld-badge--hot">Hot</span></td>
                            <td><span class="tld-price">€39.00</span><span class="tld-period">/yr</span></td>
                            <td><span class="tld-price">€59.99</span><span class="tld-period">/yr</span></td>
                            <td><span class="tld-price">€70.99</span><span class="tld-period">/yr</span></td>
                            <td><a href="<?php echo e(CP_URL); ?>/cart.php?a=add&domain=transfer" class="btn-primary btn-sm">Transfer</a></td>
                        </tr>
                        <tr data-category="popular">
                            <td><span class="tld-ext">.dev</span></td>
                            <td><span class="tld-price">€14.99</span><span class="tld-period">/yr</span></td>
                            <td><span class="tld-price">€14.99</span><span class="tld-period">/yr</span></td>
                            <td><span class="tld-price">€16.99</span><span class="tld-period">/yr</span></td>
                            <td><a href="<?php echo e(CP_URL); ?>/cart.php?a=add&domain=transfer" class="btn-primary btn-sm">Transfer</a></td>
                        </tr>
                        <tr data-category="popular">
                            <td><span class="tld-ext">.co</span></td>
                            <td><span class="tld-price">€24.99</span><span class="tld-period">/yr</span></td>
                            <td><span class="tld-price">€24.99</span><span class="tld-period">/yr</span></td>
                            <td><span class="tld-price">€29.99</span><span class="tld-period">/yr</span></td>
                            <td><a href="<?php echo e(CP_URL); ?>/cart.php?a=add&domain=transfer" class="btn-primary btn-sm">Transfer</a></td>
                        </tr>
                        <tr data-category="sale">
                            <td><span class="tld-ext">.info</span><span class="tld-badge tld-badge--sale">Sale</span></td>
                            <td><span class="tld-price">€4.99</span><span class="tld-period">/yr</span></td>
                            <td><span class="tld-price">€31.99</span><span class="tld-period">/yr</span></td>
                            <td><span class="tld-price">€34.99</span><span class="tld-period">/yr</span></td>
                            <td><a href="<?php echo e(CP_URL); ?>/cart.php?a=add&domain=transfer" class="btn-primary btn-sm">Transfer</a></td>
                        </tr>
                        <tr data-category="sale">
                            <td><span class="tld-ext">.top</span><span class="tld-badge tld-badge--sale">Sale</span></td>
                            <td><span class="tld-price">€3.99</span><span class="tld-period">/yr</span></td>
                            <td><span class="tld-price">€10.99</span><span class="tld-period">/yr</span></td>
                            <td><span class="tld-price">€12.99</span><span class="tld-period">/yr</span></td>
                            <td><a href="<?php echo e(CP_URL); ?>/cart.php?a=add&domain=transfer" class="btn-primary btn-sm">Transfer</a></td>
                        </tr>
                        <tr data-category="sale">
                            <td><span class="tld-ext">.store</span><span class="tld-badge tld-badge--sale">Sale</span></td>
                            <td><span class="tld-price">€4.99</span><span class="tld-period">/yr</span></td>
                            <td><span class="tld-price">€4.99</span><span class="tld-period">/yr</span></td>
                            <td><span class="tld-price">€39.99</span><span class="tld-period">/yr</span></td>
                            <td><a href="<?php echo e(CP_URL); ?>/cart.php?a=add&domain=transfer" class="btn-primary btn-sm">Transfer</a></td>
                        </tr>
                        <tr data-category="sale">
                            <td><span class="tld-ext">.xyz</span><span class="tld-badge tld-badge--sale">Sale</span></td>
                            <td><span class="tld-price">€1.99</span><span class="tld-period">/yr</span></td>
                            <td><span class="tld-price">€9.99</span><span class="tld-period">/yr</span></td>
                            <td><span class="tld-price">€12.99</span><span class="tld-period">/yr</span></td>
                            <td><a href="<?php echo e(CP_URL); ?>/cart.php?a=add&domain=transfer" class="btn-primary btn-sm">Transfer</a></td>
                        </tr>
                        <tr data-category="sale">
                            <td><span class="tld-ext">.icu</span><span class="tld-badge tld-badge--new">New</span></td>
                            <td><span class="tld-price">€1.99</span><span class="tld-period">/yr</span></td>
                            <td><span class="tld-price">€12.00</span><span class="tld-period">/yr</span></td>
                            <td><span class="tld-price">€11.00</span><span class="tld-period">/yr</span></td>
                            <td><a href="<?php echo e(CP_URL); ?>/cart.php?a=add&domain=transfer" class="btn-primary btn-sm">Transfer</a></td>
                        </tr>
                        <tr data-category="country">
                            <td><span class="tld-ext">.eu</span></td>
                            <td><span class="tld-price">€7.99</span><span class="tld-period">/yr</span></td>
                            <td><span class="tld-price">€7.99</span><span class="tld-period">/yr</span></td>
                            <td><span class="tld-price">€9.99</span><span class="tld-period">/yr</span></td>
                            <td><a href="<?php echo e(CP_URL); ?>/cart.php?a=add&domain=transfer" class="btn-primary btn-sm">Transfer</a></td>
                        </tr>
                        <tr data-category="country">
                            <td><span class="tld-ext">.de</span></td>
                            <td><span class="tld-price">€8.99</span><span class="tld-period">/yr</span></td>
                            <td><span class="tld-price">€8.99</span><span class="tld-period">/yr</span></td>
                            <td><span class="tld-price">€10.99</span><span class="tld-period">/yr</span></td>
                            <td><a href="<?php echo e(CP_URL); ?>/cart.php?a=add&domain=transfer" class="btn-primary btn-sm">Transfer</a></td>
                        </tr>
                        <tr data-category="country">
                            <td><span class="tld-ext">.ru</span></td>
                            <td><span class="tld-price">€5.99</span><span class="tld-period">/yr</span></td>
                            <td><span class="tld-price">€1.99</span><span class="tld-period">/yr</span></td>
                            <td><span class="tld-price">€6.99</span><span class="tld-period">/yr</span></td>
                            <td><a href="<?php echo e(CP_URL); ?>/cart.php?a=add&domain=transfer" class="btn-primary btn-sm">Transfer</a></td>
                        </tr>
                        <tr data-category="country">
                            <td><span class="tld-ext">.me</span></td>
                            <td><span class="tld-price">€8.99</span><span class="tld-period">/yr</span></td>
                            <td><span class="tld-price">€14.99</span><span class="tld-period">/yr</span></td>
                            <td><span class="tld-price">€19.99</span><span class="tld-period">/yr</span></td>
                            <td><a href="<?php echo e(CP_URL); ?>/cart.php?a=add&domain=transfer" class="btn-primary btn-sm">Transfer</a></td>
                        </tr>
                        <tr class="tld-table-empty">
                            <td colspan="5">No extensions found matching your search.</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="tld-table-footer">
                <p>Prices shown in EUR. Every transfer includes a free 1-year extension. <a href="<?php echo e(CP_URL); ?>/cart.php?a=add&domain=transfer">Browse all TLDs</a></p>
            </div>
        </div>
    </section>

    <!-- ═══════════════ WHY TRANSFER ═══════════════ -->
    <section class="bento-features reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag">Benefits</div>
                <h2>Why transfer to YottaSrc?</h2>
                <p>Better pricing, better tools, better support — all in one place.</p>
            </div>

            <div class="bento-grid">
                <div class="bento-card bento-sm">
                    <div class="bento-card-icon"><i class="fas fa-gift"></i></div>
                    <h4>Free 1-Year Extension</h4>
                    <p>Every transfer includes a complimentary 1-year extension added to your current expiry date at no additional cost.</p>
                </div>
                <div class="bento-card bento-sm">
                    <div class="bento-card-icon icon-green"><i class="fas fa-user-shield"></i></div>
                    <h3>Free WHOIS Privacy</h3>
                    <p>Your personal details are protected from public WHOIS queries at no extra charge.</p>
                </div>
                <div class="bento-card bento-sm">
                    <div class="bento-card-icon icon-blue"><i class="fas fa-tachometer-alt"></i></div>
                    <h3>Premium DNS</h3>
                    <p>Anycast DNS infrastructure for faster resolution and better uptime globally.</p>
                </div>
                <div class="bento-card bento-sm">
                    <div class="bento-card-icon icon-purple"><i class="fas fa-layer-group"></i></div>
                    <h3>Unified Management</h3>
                    <p>Manage domains, hosting, VPS, and cloud all from one client dashboard.</p>
                </div>
                <div class="bento-card bento-sm">
                    <div class="bento-card-icon icon-amber"><i class="fas fa-headset"></i></div>
                    <h3>Transfer Assistance</h3>
                    <p>Need help? Our support team will guide you through every step of the transfer process.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ FAQ ═══════════════ -->
    <section class="faq-section reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag">FAQ</div>
                <h2>Domain transfer FAQ</h2>
            </div>

            <div class="faq-layout faq-layout--full">
                <div class="faq-panels">
                    <div class="faq-panel active" id="faq-transfer">
                        <div class="faq-item"><button class="faq-question"><span>How long does a domain transfer take?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>Most transfers complete within 5–7 days. Some registrars process faster (within hours) if the transfer is approved quickly. The process is fully automated.</p></div></div>
                        <div class="faq-item"><button class="faq-question"><span>Will my website go down during the transfer?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>No. Domain transfers only change the registrar — your DNS records remain intact. There is zero downtime during the transfer process as long as you don't modify DNS settings.</p></div></div>
                        <div class="faq-item"><button class="faq-question"><span>What is an EPP/auth code?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>An EPP (Extensible Provisioning Protocol) code is a unique authorization key required to transfer a domain. You can request it from your current registrar's control panel or support.</p></div></div>
                        <div class="faq-item"><button class="faq-question"><span>Can I transfer a recently registered domain?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>ICANN requires domains to be at least 60 days old before they can be transferred. If your domain was registered less than 60 days ago, you'll need to wait.</p></div></div>
                        <div class="faq-item"><button class="faq-question"><span>Do I get a refund if the transfer fails?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>Yes — if a transfer fails for any reason, the transfer fee is automatically refunded to your account credit or original payment method.</p></div></div>
                    </div>
                </div>
            </div>

            <div class="faq-actions">
                <a href="<?php echo e(SITE_URL); ?>/contact/" class="btn-primary"><i class="fas fa-headset"></i> Get Transfer Help</a>
                <a href="<?php echo e(SITE_URL); ?>/faq/" class="btn-secondary">Browse All FAQ <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </section>

    <!-- ═══════════════ BOTTOM CTA ═══════════════ -->
    <section class="promo-cta reveal">
        <div class="container">
            <div class="promo-cta-inner">
                <div class="promo-cta-glow"></div>
                <div class="promo-cta-icon"><i class="fas fa-exchange-alt"></i></div>
                <h2>Transfer your domains today</h2>
                <p>Get a free 1-year extension and premium DNS with every transfer.</p>
                <a href="#" onclick="document.querySelector('.domain-search-form input').focus();return false;" class="btn-primary">Start Transfer <i class="fas fa-arrow-up"></i></a>
            </div>
        </div>
    </section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
