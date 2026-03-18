<?php
/**
 * YottaSrc — Domain Registration
 * ================================
 * Domain search, TLD pricing, and registration page.
 */
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/topbar.php';
?>

    <!-- ═══════════════ HERO ═══════════════ -->
    <section class="page-hero">
        <div class="container">
            <div class="page-hero-content" style="text-align:center;max-width:760px;margin:0 auto;">
                <div class="page-breadcrumb" style="justify-content:center;">
                    <a href="<?php echo e(SITE_URL); ?>/">Home</a>
                    <i class="fas fa-chevron-right"></i>
                    <a href="<?php echo e(SITE_URL); ?>/domains-registration/">Domains</a>
                    <i class="fas fa-chevron-right"></i>
                    <span>Register</span>
                </div>
                <h1>Find Your Perfect <span class="highlight">Domain Name</span></h1>
                <p class="page-hero-desc">
                    Search from 500+ TLDs and register your domain in seconds. Free WHOIS privacy, DNS management, and email forwarding included with every domain.
                </p>
                <div class="page-hero-badges" style="justify-content:center;">
                    <div class="hero-badge-item"><i class="fas fa-check"></i> 500+ TLDs</div>
                    <div class="hero-badge-item"><i class="fas fa-check"></i> Free WHOIS Privacy</div>
                    <div class="hero-badge-item"><i class="fas fa-check"></i> Free DNS Management</div>
                    <div class="hero-badge-item"><i class="fas fa-check"></i> Instant Activation</div>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ DOMAIN SEARCH ═══════════════ -->
    <section class="domain-search-section reveal">
        <div class="container">
            <div class="domain-search-box">
                <h2>Search for a domain</h2>
                <form class="domain-search-form" action="<?php echo e(CP_URL); ?>/cart.php?a=add&domain=register" method="get">
                    <div class="domain-search-input-wrap">
                        <i class="fas fa-globe"></i>
                        <input type="text" name="query" placeholder="Enter your domain name..." autocomplete="off" required>
                        <button type="submit" class="btn-primary">Search <i class="fas fa-search"></i></button>
                    </div>
                </form>
                <div class="domain-search-suggestions">
                    <span class="domain-tld-chip">.com</span>
                    <span class="domain-tld-chip">.net</span>
                    <span class="domain-tld-chip">.org</span>
                    <span class="domain-tld-chip">.io</span>
                    <span class="domain-tld-chip">.dev</span>
                    <span class="domain-tld-chip">.co</span>
                    <span class="domain-tld-chip">.me</span>
                    <span class="domain-tld-chip">.store</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ POPULAR TLD PRICING ═══════════════ -->
    <section class="domain-pricing reveal" id="pricing">
        <div class="container">
            <div class="section-header">
                <div class="section-tag">Pricing</div>
                <h2>Popular domain extensions</h2>
                <p>Competitive pricing on the most popular TLDs. All domains include free WHOIS privacy.</p>
            </div>

            <div class="domain-tld-grid">
                <div class="domain-tld-card">
                    <div class="domain-tld-name">.com</div>
                    <div class="domain-tld-desc">The world's most popular extension</div>
                    <div class="domain-tld-price"><span class="currency">€</span><span class="amount">9.99</span><span class="period">/year</span></div>
                    <div class="domain-tld-renewal">Renewal: €12.99/yr</div>
                    <a href="<?php echo e(CP_URL); ?>/cart.php?a=add&domain=register" class="btn-primary btn-sm">Register</a>
                </div>
                <div class="domain-tld-card">
                    <div class="domain-tld-name">.net</div>
                    <div class="domain-tld-desc">For network and tech businesses</div>
                    <div class="domain-tld-price"><span class="currency">€</span><span class="amount">11.99</span><span class="period">/year</span></div>
                    <div class="domain-tld-renewal">Renewal: €14.99/yr</div>
                    <a href="<?php echo e(CP_URL); ?>/cart.php?a=add&domain=register" class="btn-primary btn-sm">Register</a>
                </div>
                <div class="domain-tld-card">
                    <div class="domain-tld-name">.org</div>
                    <div class="domain-tld-desc">For organizations and nonprofits</div>
                    <div class="domain-tld-price"><span class="currency">€</span><span class="amount">10.99</span><span class="period">/year</span></div>
                    <div class="domain-tld-renewal">Renewal: €13.99/yr</div>
                    <a href="<?php echo e(CP_URL); ?>/cart.php?a=add&domain=register" class="btn-primary btn-sm">Register</a>
                </div>
                <div class="domain-tld-card domain-tld-card--popular">
                    <div class="domain-tld-badge">Popular</div>
                    <div class="domain-tld-name">.io</div>
                    <div class="domain-tld-desc">For tech startups and SaaS</div>
                    <div class="domain-tld-price"><span class="currency">€</span><span class="amount">29.99</span><span class="period">/year</span></div>
                    <div class="domain-tld-renewal">Renewal: €39.99/yr</div>
                    <a href="<?php echo e(CP_URL); ?>/cart.php?a=add&domain=register" class="btn-primary btn-sm">Register</a>
                </div>
                <div class="domain-tld-card">
                    <div class="domain-tld-name">.dev</div>
                    <div class="domain-tld-desc">For developers and portfolios</div>
                    <div class="domain-tld-price"><span class="currency">€</span><span class="amount">14.99</span><span class="period">/year</span></div>
                    <div class="domain-tld-renewal">Renewal: €16.99/yr</div>
                    <a href="<?php echo e(CP_URL); ?>/cart.php?a=add&domain=register" class="btn-primary btn-sm">Register</a>
                </div>
                <div class="domain-tld-card">
                    <div class="domain-tld-name">.co</div>
                    <div class="domain-tld-desc">Short and brandable alternative</div>
                    <div class="domain-tld-price"><span class="currency">€</span><span class="amount">24.99</span><span class="period">/year</span></div>
                    <div class="domain-tld-renewal">Renewal: €29.99/yr</div>
                    <a href="<?php echo e(CP_URL); ?>/cart.php?a=add&domain=register" class="btn-primary btn-sm">Register</a>
                </div>
                <div class="domain-tld-card">
                    <div class="domain-tld-name">.me</div>
                    <div class="domain-tld-desc">For personal brands and portfolios</div>
                    <div class="domain-tld-price"><span class="currency">€</span><span class="amount">8.99</span><span class="period">/year</span></div>
                    <div class="domain-tld-renewal">Renewal: €19.99/yr</div>
                    <a href="<?php echo e(CP_URL); ?>/cart.php?a=add&domain=register" class="btn-primary btn-sm">Register</a>
                </div>
                <div class="domain-tld-card">
                    <div class="domain-tld-name">.store</div>
                    <div class="domain-tld-desc">For e-commerce and online shops</div>
                    <div class="domain-tld-price"><span class="currency">€</span><span class="amount">4.99</span><span class="period">/year</span></div>
                    <div class="domain-tld-renewal">Renewal: €39.99/yr</div>
                    <a href="<?php echo e(CP_URL); ?>/cart.php?a=add&domain=register" class="btn-primary btn-sm">Register</a>
                </div>
            </div>

            <div class="pricing-custom">
                <p>Looking for a different extension? <a href="<?php echo e(CP_URL); ?>/cart.php?a=add&domain=register">Browse all 500+ TLDs</a> in our domain search.</p>
            </div>
        </div>
    </section>

    <!-- ═══════════════ ALL TLD PRICING TABLE ═══════════════ -->
    <section class="domain-all-tlds reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag">All Extensions</div>
                <h2>Complete domain pricing</h2>
                <p>Register, transfer, or renew — compare all prices at a glance.</p>
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
                            <td><a href="<?php echo e(CP_URL); ?>/cart.php?a=add&domain=register" class="btn-primary btn-sm">Register</a></td>
                        </tr>
                        <tr data-category="popular">
                            <td><span class="tld-ext">.net</span></td>
                            <td><span class="tld-price">€15.99</span><span class="tld-period">/yr</span></td>
                            <td><span class="tld-price">€15.99</span><span class="tld-period">/yr</span></td>
                            <td><span class="tld-price">€19.99</span><span class="tld-period">/yr</span></td>
                            <td><a href="<?php echo e(CP_URL); ?>/cart.php?a=add&domain=register" class="btn-primary btn-sm">Register</a></td>
                        </tr>
                        <tr data-category="popular">
                            <td><span class="tld-ext">.org</span><span class="tld-badge tld-badge--hot">Hot</span></td>
                            <td><span class="tld-price">€14.99</span><span class="tld-period">/yr</span></td>
                            <td><span class="tld-price">€14.99</span><span class="tld-period">/yr</span></td>
                            <td><span class="tld-price">€17.99</span><span class="tld-period">/yr</span></td>
                            <td><a href="<?php echo e(CP_URL); ?>/cart.php?a=add&domain=register" class="btn-primary btn-sm">Register</a></td>
                        </tr>
                        <tr data-category="popular">
                            <td><span class="tld-ext">.io</span><span class="tld-badge tld-badge--hot">Hot</span></td>
                            <td><span class="tld-price">€39.00</span><span class="tld-period">/yr</span></td>
                            <td><span class="tld-price">€59.99</span><span class="tld-period">/yr</span></td>
                            <td><span class="tld-price">€70.99</span><span class="tld-period">/yr</span></td>
                            <td><a href="<?php echo e(CP_URL); ?>/cart.php?a=add&domain=register" class="btn-primary btn-sm">Register</a></td>
                        </tr>
                        <tr data-category="popular">
                            <td><span class="tld-ext">.dev</span></td>
                            <td><span class="tld-price">€14.99</span><span class="tld-period">/yr</span></td>
                            <td><span class="tld-price">€14.99</span><span class="tld-period">/yr</span></td>
                            <td><span class="tld-price">€16.99</span><span class="tld-period">/yr</span></td>
                            <td><a href="<?php echo e(CP_URL); ?>/cart.php?a=add&domain=register" class="btn-primary btn-sm">Register</a></td>
                        </tr>
                        <tr data-category="popular">
                            <td><span class="tld-ext">.co</span></td>
                            <td><span class="tld-price">€24.99</span><span class="tld-period">/yr</span></td>
                            <td><span class="tld-price">€24.99</span><span class="tld-period">/yr</span></td>
                            <td><span class="tld-price">€29.99</span><span class="tld-period">/yr</span></td>
                            <td><a href="<?php echo e(CP_URL); ?>/cart.php?a=add&domain=register" class="btn-primary btn-sm">Register</a></td>
                        </tr>
                        <tr data-category="sale">
                            <td><span class="tld-ext">.info</span><span class="tld-badge tld-badge--sale">Sale</span></td>
                            <td><span class="tld-price">€4.99</span><span class="tld-period">/yr</span></td>
                            <td><span class="tld-price">€31.99</span><span class="tld-period">/yr</span></td>
                            <td><span class="tld-price">€34.99</span><span class="tld-period">/yr</span></td>
                            <td><a href="<?php echo e(CP_URL); ?>/cart.php?a=add&domain=register" class="btn-primary btn-sm">Register</a></td>
                        </tr>
                        <tr data-category="sale">
                            <td><span class="tld-ext">.top</span><span class="tld-badge tld-badge--sale">Sale</span></td>
                            <td><span class="tld-price">€3.99</span><span class="tld-period">/yr</span></td>
                            <td><span class="tld-price">€10.99</span><span class="tld-period">/yr</span></td>
                            <td><span class="tld-price">€12.99</span><span class="tld-period">/yr</span></td>
                            <td><a href="<?php echo e(CP_URL); ?>/cart.php?a=add&domain=register" class="btn-primary btn-sm">Register</a></td>
                        </tr>
                        <tr data-category="sale">
                            <td><span class="tld-ext">.store</span><span class="tld-badge tld-badge--sale">Sale</span></td>
                            <td><span class="tld-price">€4.99</span><span class="tld-period">/yr</span></td>
                            <td><span class="tld-price">€4.99</span><span class="tld-period">/yr</span></td>
                            <td><span class="tld-price">€39.99</span><span class="tld-period">/yr</span></td>
                            <td><a href="<?php echo e(CP_URL); ?>/cart.php?a=add&domain=register" class="btn-primary btn-sm">Register</a></td>
                        </tr>
                        <tr data-category="sale">
                            <td><span class="tld-ext">.xyz</span><span class="tld-badge tld-badge--sale">Sale</span></td>
                            <td><span class="tld-price">€1.99</span><span class="tld-period">/yr</span></td>
                            <td><span class="tld-price">€9.99</span><span class="tld-period">/yr</span></td>
                            <td><span class="tld-price">€12.99</span><span class="tld-period">/yr</span></td>
                            <td><a href="<?php echo e(CP_URL); ?>/cart.php?a=add&domain=register" class="btn-primary btn-sm">Register</a></td>
                        </tr>
                        <tr data-category="sale">
                            <td><span class="tld-ext">.icu</span><span class="tld-badge tld-badge--new">New</span></td>
                            <td><span class="tld-price">€1.99</span><span class="tld-period">/yr</span></td>
                            <td><span class="tld-price">€12.00</span><span class="tld-period">/yr</span></td>
                            <td><span class="tld-price">€11.00</span><span class="tld-period">/yr</span></td>
                            <td><a href="<?php echo e(CP_URL); ?>/cart.php?a=add&domain=register" class="btn-primary btn-sm">Register</a></td>
                        </tr>
                        <tr data-category="country">
                            <td><span class="tld-ext">.eu</span></td>
                            <td><span class="tld-price">€7.99</span><span class="tld-period">/yr</span></td>
                            <td><span class="tld-price">€7.99</span><span class="tld-period">/yr</span></td>
                            <td><span class="tld-price">€9.99</span><span class="tld-period">/yr</span></td>
                            <td><a href="<?php echo e(CP_URL); ?>/cart.php?a=add&domain=register" class="btn-primary btn-sm">Register</a></td>
                        </tr>
                        <tr data-category="country">
                            <td><span class="tld-ext">.de</span></td>
                            <td><span class="tld-price">€8.99</span><span class="tld-period">/yr</span></td>
                            <td><span class="tld-price">€8.99</span><span class="tld-period">/yr</span></td>
                            <td><span class="tld-price">€10.99</span><span class="tld-period">/yr</span></td>
                            <td><a href="<?php echo e(CP_URL); ?>/cart.php?a=add&domain=register" class="btn-primary btn-sm">Register</a></td>
                        </tr>
                        <tr data-category="country">
                            <td><span class="tld-ext">.ru</span></td>
                            <td><span class="tld-price">€5.99</span><span class="tld-period">/yr</span></td>
                            <td><span class="tld-price">€1.99</span><span class="tld-period">/yr</span></td>
                            <td><span class="tld-price">€6.99</span><span class="tld-period">/yr</span></td>
                            <td><a href="<?php echo e(CP_URL); ?>/cart.php?a=add&domain=register" class="btn-primary btn-sm">Register</a></td>
                        </tr>
                        <tr data-category="country">
                            <td><span class="tld-ext">.me</span></td>
                            <td><span class="tld-price">€8.99</span><span class="tld-period">/yr</span></td>
                            <td><span class="tld-price">€14.99</span><span class="tld-period">/yr</span></td>
                            <td><span class="tld-price">€19.99</span><span class="tld-period">/yr</span></td>
                            <td><a href="<?php echo e(CP_URL); ?>/cart.php?a=add&domain=register" class="btn-primary btn-sm">Register</a></td>
                        </tr>
                        <tr class="tld-table-empty">
                            <td colspan="5">No extensions found matching your search.</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="tld-table-footer">
                <p>Prices shown in EUR. All domains include free WHOIS privacy. <a href="<?php echo e(CP_URL); ?>/cart.php?a=add&domain=register">Browse all 500+ TLDs</a></p>
            </div>
        </div>
    </section>

    <!-- ═══════════════ FEATURES ═══════════════ -->
    <section class="bento-features reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag">Included Free</div>
                <h2>Everything you need with every domain</h2>
                <p>No hidden fees — essential domain tools are included at no extra cost.</p>
            </div>

            <div class="bento-grid">
                <div class="bento-card bento-sm">
                    <div class="bento-card-icon"><i class="fas fa-user-shield"></i></div>
                    <h4>Free WHOIS Privacy</h4>
                    <p>Your personal information is hidden from public WHOIS lookups at no charge. Enabled by default on all eligible TLDs.</p>
                </div>
                <div class="bento-card bento-sm">
                    <div class="bento-card-icon icon-green"><i class="fas fa-dns"></i></div>
                    <h3>DNS Management</h3>
                    <p>Full DNS zone editor with support for A, AAAA, CNAME, MX, TXT, SRV, and CAA records.</p>
                </div>
                <div class="bento-card bento-sm">
                    <div class="bento-card-icon icon-blue"><i class="fas fa-envelope-open-text"></i></div>
                    <h3>Email Forwarding</h3>
                    <p>Forward emails from your domain to any inbox — set up unlimited aliases for free.</p>
                </div>
                <div class="bento-card bento-sm">
                    <div class="bento-card-icon icon-purple"><i class="fas fa-lock"></i></div>
                    <h3>Domain Lock</h3>
                    <p>Prevent unauthorized transfers with registrar lock protection on your domain.</p>
                </div>
                <div class="bento-card bento-sm">
                    <div class="bento-card-icon icon-amber"><i class="fas fa-sync-alt"></i></div>
                    <h3>Easy Renewals</h3>
                    <p>Auto-renew or manual renewal — manage everything from your client dashboard.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ WHY CHOOSE US ═══════════════ -->
    <section class="features-section reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag">Why YottaSrc</div>
                <h2>Why register domains with us?</h2>
            </div>

            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon"><i class="fas fa-bolt"></i></div>
                    <h4>Instant Registration</h4>
                    <p>Your domain is registered and active within seconds of payment.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon icon-green"><i class="fas fa-shield-alt"></i></div>
                    <h4>Theft Protection</h4>
                    <p>Domain lock and WHOIS privacy protect your domain from hijacking.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon icon-blue"><i class="fas fa-headset"></i></div>
                    <h4>24/7 Support</h4>
                    <p>Expert support available around the clock for any domain-related queries.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon icon-purple"><i class="fas fa-server"></i></div>
                    <h4>Bundle with Hosting</h4>
                    <p>Get a free domain with eligible hosting plans — manage everything in one place.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon icon-amber"><i class="fas fa-exchange-alt"></i></div>
                    <h4>Easy Transfers</h4>
                    <p>Transfer domains to YottaSrc easily with no downtime and free 1-year extension.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon icon-rose"><i class="fas fa-globe-americas"></i></div>
                    <h4>500+ Extensions</h4>
                    <p>Choose from classic TLDs, country codes, and new gTLDs for any project.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ FAQ ═══════════════ -->
    <section class="faq-section reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag">FAQ</div>
                <h2>Domain registration FAQ</h2>
            </div>

            <div class="faq-layout faq-layout--full">
                <div class="faq-panels">
                    <div class="faq-panel active" id="faq-domains">
                        <div class="faq-item"><button class="faq-question"><span>How do I register a domain?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>Use our domain search tool above to find an available domain. Add it to your cart, complete payment, and your domain will be registered instantly.</p></div></div>
                        <div class="faq-item"><button class="faq-question"><span>Is WHOIS privacy really free?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>Yes — we include WHOIS privacy protection at no additional cost on all eligible TLDs. Your personal information is hidden from public lookups by default.</p></div></div>
                        <div class="faq-item"><button class="faq-question"><span>Can I transfer my domain to YottaSrc?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>Absolutely. Visit our <a href="<?php echo e(SITE_URL); ?>/domains-transfer/">Domain Transfer</a> page to initiate a transfer. You'll get a free 1-year extension with every transfer.</p></div></div>
                        <div class="faq-item"><button class="faq-question"><span>Do you support all TLDs?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>We support over 500 TLDs including .com, .net, .org, .io, country codes, and new gTLDs. Search our domain tool to check availability and pricing for any extension.</p></div></div>
                        <div class="faq-item"><button class="faq-question"><span>Can I get a free domain with hosting?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>Yes — Premium and above hosting plans include a free .com, .net, or .org domain for the first year. The domain is registered automatically during hosting setup.</p></div></div>
                    </div>
                </div>
            </div>

            <div class="faq-actions">
                <a href="<?php echo e(SITE_URL); ?>/contact/" class="btn-primary"><i class="fas fa-headset"></i> Contact Support</a>
                <a href="<?php echo e(SITE_URL); ?>/faq/" class="btn-secondary">Browse All FAQ <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </section>

    <!-- ═══════════════ BOTTOM CTA ═══════════════ -->
    <section class="promo-cta reveal">
        <div class="container">
            <div class="promo-cta-inner">
                <div class="promo-cta-glow"></div>
                <div class="promo-cta-icon"><i class="fas fa-globe"></i></div>
                <h2>Claim your domain today</h2>
                <p>Secure your perfect domain before someone else does. Starting from just €4.99/year.</p>
                <a href="#" onclick="document.querySelector('.domain-search-form input').focus();return false;" class="btn-primary">Search Domains <i class="fas fa-arrow-up"></i></a>
            </div>
        </div>
    </section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
