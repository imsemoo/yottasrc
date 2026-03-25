<?php
/**
 * YottaSrc — Microsoft Keys Reseller
 * ====================================
 * Resell Microsoft license keys (Windows, Office) under your brand.
 */
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/topbar.php';
?>

    <!-- ═══════════════ HERO ═══════════════ -->
    <section class="page-hero ms-hero reveal">
        <div class="container">
            <div class="page-hero-split">
                <div class="page-hero-content">
                    <div class="page-breadcrumb">
                        <a href="<?php echo e(SITE_URL); ?>/"><?php echo e(__('breadcrumb_home')); ?></a>
                        <i class="fas fa-chevron-right"></i>
                        <a href="<?php echo e(SITE_URL); ?>/microsoft-products/">Microsoft</a>
                        <i class="fas fa-chevron-right"></i>
                        <span><?php echo e(__('mskeys_breadcrumb')); ?></span>
                    </div>
                    <h1>Microsoft Keys Reseller — <span class="highlight">Resell Licenses at Scale</span></h1>
                    <p class="page-hero-desc">
                        Join our reseller program and sell genuine Microsoft license keys — Windows, Office, Server, and more — under your own brand. Volume discounts, instant digital delivery, and dedicated support.
                    </p>
                    <div class="page-hero-ctas">
                        <a href="#products" class="btn-primary">Get Started <i class="fas fa-arrow-down"></i></a>
                        <a href="<?php echo e(SITE_URL); ?>/contact-us/" class="btn-secondary"><i class="fas fa-headset"></i> Talk to Sales</a>
                    </div>
                    <div class="page-hero-badges">
                        <div class="hero-badge-item"><i class="fas fa-check"></i> Wholesale Pricing</div>
                        <div class="hero-badge-item"><i class="fas fa-check"></i> Instant Digital Delivery</div>
                        <div class="hero-badge-item"><i class="fas fa-check"></i> Genuine Microsoft Licenses</div>
                        <div class="hero-badge-item"><i class="fas fa-check"></i> Dedicated Reseller Support</div>
                    </div>
                </div>
                <div class="page-hero-visual">
                    <svg viewBox="0 0 440 400" fill="none" xmlns="http://www.w3.org/2000/svg" class="hero-illustration" aria-label="Microsoft license keys illustration">
                        <!-- Window Frame -->
                        <rect x="20" y="20" width="400" height="360" rx="16" fill="var(--bg-card)" stroke="var(--border-primary)" stroke-width="1.5"/>
                        <rect x="20" y="20" width="400" height="38" rx="16" fill="var(--bg-tertiary)"/>
                        <rect x="20" y="42" width="400" height="16" fill="var(--bg-tertiary)"/>
                        <circle cx="42" cy="39" r="5" fill="var(--brand-error)" opacity="0.6"/>
                        <circle cx="58" cy="39" r="5" fill="var(--brand-warning)" opacity="0.6"/>
                        <circle cx="74" cy="39" r="5" fill="var(--brand-secondary)" opacity="0.6"/>
                        <text x="220" y="44" text-anchor="middle" fill="var(--text-tertiary)" font-size="11" font-family="var(--font-mono)" font-weight="600" opacity="0.6">License Keys — Reseller Panel</text>

                        <!-- Product category cards -->
                        <text x="40" y="82" fill="var(--brand-primary)" font-size="9" font-family="var(--font-display)" font-weight="700" letter-spacing="0.8" opacity="0.7">PRODUCT CATALOG</text>
                        <line x1="40" y1="88" x2="400" y2="88" stroke="var(--border-primary)" stroke-width="0.6"/>

                        <!-- Windows Card -->
                        <rect x="40" y="96" width="170" height="80" rx="10" fill="var(--bg-tertiary)"/>
                        <rect x="52" y="108" width="28" height="28" rx="6" fill="var(--brand-primary)" opacity="0.12"/>
                        <text x="66" y="126" text-anchor="middle" fill="var(--brand-primary)" font-size="16" font-family="var(--font-body)" opacity="0.6"><tspan>⊞</tspan></text>
                        <text x="92" y="118" fill="var(--text-secondary)" font-size="10" font-family="var(--font-display)" font-weight="700" opacity="0.8">Windows Keys</text>
                        <text x="92" y="132" fill="var(--text-tertiary)" font-size="7.5" font-family="var(--font-mono)" opacity="0.5">8 products · From €3.50</text>
                        <rect x="52" y="148" width="50" height="18" rx="9" fill="var(--brand-primary)" opacity="0.1"/>
                        <text x="77" y="160" text-anchor="middle" fill="var(--brand-primary)" font-size="7.5" font-family="var(--font-mono)" font-weight="600" opacity="0.6">Popular</text>
                        <rect x="108" y="148" width="44" height="18" rx="9" fill="var(--brand-secondary)" opacity="0.1"/>
                        <text x="130" y="160" text-anchor="middle" fill="var(--brand-secondary)" font-size="7.5" font-family="var(--font-mono)" font-weight="600" opacity="0.6">In Stock</text>

                        <!-- Office Card -->
                        <rect x="230" y="96" width="170" height="80" rx="10" fill="var(--bg-tertiary)"/>
                        <rect x="242" y="108" width="28" height="28" rx="6" fill="var(--brand-warning)" opacity="0.12"/>
                        <text x="256" y="127" text-anchor="middle" fill="var(--brand-warning)" font-size="14" font-family="var(--font-body)"><tspan>📋</tspan></text>
                        <text x="282" y="118" fill="var(--text-secondary)" font-size="10" font-family="var(--font-display)" font-weight="700" opacity="0.8">Office Keys</text>
                        <text x="282" y="132" fill="var(--text-tertiary)" font-size="7.5" font-family="var(--font-mono)" opacity="0.5">9 products · From €1.50</text>
                        <rect x="242" y="148" width="48" height="18" rx="9" fill="var(--brand-warning)" opacity="0.1"/>
                        <text x="266" y="160" text-anchor="middle" fill="var(--brand-warning)" font-size="7.5" font-family="var(--font-mono)" font-weight="600" opacity="0.6">Best Sell</text>
                        <rect x="296" y="148" width="44" height="18" rx="9" fill="var(--brand-secondary)" opacity="0.1"/>
                        <text x="318" y="160" text-anchor="middle" fill="var(--brand-secondary)" font-size="7.5" font-family="var(--font-mono)" font-weight="600" opacity="0.6">In Stock</text>

                        <!-- Recent Orders section -->
                        <text x="40" y="202" fill="var(--brand-primary)" font-size="9" font-family="var(--font-display)" font-weight="700" letter-spacing="0.8" opacity="0.7">RECENT ORDERS</text>
                        <line x1="40" y1="208" x2="400" y2="208" stroke="var(--border-primary)" stroke-width="0.6"/>

                        <!-- Order Row 1 -->
                        <rect x="40" y="216" width="360" height="36" rx="8" fill="var(--bg-tertiary)"/>
                        <text x="55" y="238" fill="var(--text-tertiary)" font-size="8" font-family="var(--font-mono)" opacity="0.5">#10234</text>
                        <text x="108" y="238" fill="var(--text-secondary)" font-size="8.5" font-family="var(--font-body)" font-weight="600" opacity="0.7">Win 11 Pro × 5</text>
                        <text x="270" y="238" fill="var(--brand-primary)" font-size="8.5" font-family="var(--font-mono)" font-weight="700" opacity="0.7">€17.50</text>
                        <rect x="340" y="226" width="50" height="18" rx="9" fill="var(--brand-secondary)" opacity="0.15"/>
                        <text x="365" y="238" text-anchor="middle" fill="var(--brand-secondary)" font-size="7" font-family="var(--font-mono)" font-weight="600" opacity="0.7">Delivered</text>

                        <!-- Order Row 2 -->
                        <rect x="40" y="260" width="360" height="36" rx="8" fill="var(--bg-tertiary)"/>
                        <text x="55" y="282" fill="var(--text-tertiary)" font-size="8" font-family="var(--font-mono)" opacity="0.5">#10233</text>
                        <text x="108" y="282" fill="var(--text-secondary)" font-size="8.5" font-family="var(--font-body)" font-weight="600" opacity="0.7">Office 2021 Pro × 3</text>
                        <text x="270" y="282" fill="var(--brand-primary)" font-size="8.5" font-family="var(--font-mono)" font-weight="700" opacity="0.7">€8.70</text>
                        <rect x="340" y="270" width="50" height="18" rx="9" fill="var(--brand-secondary)" opacity="0.15"/>
                        <text x="365" y="282" text-anchor="middle" fill="var(--brand-secondary)" font-size="7" font-family="var(--font-mono)" font-weight="600" opacity="0.7">Delivered</text>

                        <!-- Order Row 3 -->
                        <rect x="40" y="304" width="360" height="36" rx="8" fill="var(--bg-tertiary)"/>
                        <text x="55" y="326" fill="var(--text-tertiary)" font-size="8" font-family="var(--font-mono)" opacity="0.5">#10232</text>
                        <text x="108" y="326" fill="var(--text-secondary)" font-size="8.5" font-family="var(--font-body)" font-weight="600" opacity="0.7">Office 365 × 10</text>
                        <text x="270" y="326" fill="var(--brand-primary)" font-size="8.5" font-family="var(--font-mono)" font-weight="700" opacity="0.7">€15.00</text>
                        <rect x="340" y="314" width="50" height="18" rx="9" fill="var(--brand-secondary)" opacity="0.15"/>
                        <text x="365" y="326" text-anchor="middle" fill="var(--brand-secondary)" font-size="7" font-family="var(--font-mono)" font-weight="600" opacity="0.7">Delivered</text>

                        <!-- Summary bar -->
                        <rect x="40" y="350" width="360" height="20" rx="6" fill="var(--bg-card)" stroke="var(--border-primary)" stroke-width="0.5"/>
                        <text x="220" y="364" text-anchor="middle" fill="var(--text-tertiary)" font-size="7.5" font-family="var(--font-mono)" opacity="0.5">Total Revenue: €4,230.00 · 1,247 Keys Delivered · 0 Pending</text>

                        <!-- Floating badges -->
                        <rect x="356" y="2" width="80" height="36" rx="10" fill="var(--bg-card)" stroke="var(--border-primary)" stroke-width="1">
                            <animate attributeName="y" values="2;8;2" dur="5s" repeatCount="indefinite"/>
                        </rect>
                        <text x="372" y="17" fill="var(--text-tertiary)" font-size="7" font-family="var(--font-mono)" font-weight="600" opacity="0.6">
                            KEYS SOLD
                            <animate attributeName="y" values="17;23;17" dur="5s" repeatCount="indefinite"/>
                        </text>
                        <text x="372" y="31" fill="var(--brand-secondary)" font-size="13" font-family="var(--font-display)" font-weight="800" opacity="0.8">
                            1,247
                            <animate attributeName="y" values="31;37;31" dur="5s" repeatCount="indefinite"/>
                        </text>

                        <circle cx="8" cy="80" r="3" fill="var(--brand-primary)" opacity="0.25">
                            <animate attributeName="opacity" values="0.25;0.6;0.25" dur="3s" repeatCount="indefinite"/>
                        </circle>
                    </svg>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ PARTNERS STRIP ═══════════════ -->
    <section class="partners">
        <div class="container">
            <span class="partners-label">Products Include</span>
            <div class="partners-logos">
                <span class="partner-logo"><i class="fab fa-windows"></i> Windows 11</span>
                <span class="partner-logo"><i class="fab fa-windows"></i> Windows 10</span>
                <span class="partner-logo"><i class="fab fa-microsoft"></i> Office 365</span>
                <span class="partner-logo"><i class="fab fa-microsoft"></i> Office 2021</span>
                <span class="partner-logo"><i class="fab fa-windows"></i> Server 2022</span>
                <span class="partner-logo"><i class="fab fa-microsoft"></i> Visio &amp; Project</span>
            </div>
        </div>
    </section>

    <!-- ═══════════════ PRODUCT CATEGORIES ═══════════════ -->
    <section class="ms-catalog reveal" id="products">
        <div class="container">
            <div class="section-header">
                <div class="section-tag">Catalog</div>
                <h2>Products available for reselling</h2>
                <p>Resell genuine Microsoft license keys across all major product lines under your own brand.</p>
            </div>

            <div class="cp-benefits-grid">
                <div class="cp-security-card">
                    <div class="cp-security-icon"><i class="fab fa-windows"></i></div>
                    <h4>Windows Licenses</h4>
                    <p>Windows 11, Windows 10, and legacy versions. Home, Pro, and Enterprise editions available as retail and phone activation keys.</p>
                </div>
                <div class="cp-security-card">
                    <div class="cp-security-icon icon-amber"><i class="fab fa-microsoft"></i></div>
                    <h4>Office Licenses</h4>
                    <p>Office 365, Office 2021, 2019, and 2016. Subscriptions and lifetime licenses for single and multi-device use.</p>
                </div>
                <div class="cp-security-card">
                    <div class="cp-security-icon icon-purple"><i class="fas fa-server"></i></div>
                    <h4>Windows Server Licenses</h4>
                    <p>Windows Server 2022 and 2019 — Standard and Datacenter editions. SQL Server keys also available.</p>
                </div>
                <div class="cp-security-card">
                    <div class="cp-security-icon icon-green"><i class="fas fa-building"></i></div>
                    <h4>Enterprise Products</h4>
                    <p>Visio, Project, and other Microsoft enterprise tools. Retail and volume license keys for business clients.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ WHY RESELL + GENUINE LICENSES (MERGED) ═══════════════ -->
    <section class="cp-benefits ms-combined reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag">Why Resell</div>
                <h2>Why resell genuine Microsoft licenses?</h2>
                <p>100% digital, authentic keys — no shipping, no warehousing, maximum profit and client trust.</p>
            </div>

            <div class="cp-benefits-grid">
                <div class="cp-security-card">
                    <div class="cp-security-icon"><i class="fas fa-hand-holding-usd"></i></div>
                    <h4>High Profit Margins</h4>
                    <p>Wholesale pricing from €1.50 per key. Set your own retail price and keep 100% of the profit.</p>
                </div>
                <div class="cp-security-card">
                    <div class="cp-security-icon icon-green"><i class="fas fa-bolt"></i></div>
                    <h4>Instant Digital Delivery</h4>
                    <p>Keys are delivered instantly after purchase — no waiting, no physical stock. Clients get keys in seconds.</p>
                </div>
                <div class="cp-security-card">
                    <div class="cp-security-icon icon-purple"><i class="fas fa-box-open"></i></div>
                    <h4>No Inventory Required</h4>
                    <p>Zero storage, zero shipping, zero overhead. List products and fulfill orders with no physical stock needed.</p>
                </div>
                <div class="cp-security-card">
                    <div class="cp-security-icon icon-amber"><i class="fas fa-globe"></i></div>
                    <h4>Global Demand</h4>
                    <p>Microsoft licenses sell worldwide — Windows and Office are used by billions. Evergreen demand for your business.</p>
                </div>
                <div class="cp-security-card">
                    <div class="cp-security-icon"><i class="fas fa-shield-alt"></i></div>
                    <h4>Genuine Activation Keys</h4>
                    <p>Keys activate directly with Microsoft's official servers. No workarounds, no risk.</p>
                </div>
                <div class="cp-security-card">
                    <div class="cp-security-icon icon-green"><i class="fas fa-certificate"></i></div>
                    <h4>Global Activation</h4>
                    <p>Licenses work in most regions worldwide. Sell to clients anywhere on the globe.</p>
                </div>
                <div class="cp-security-card">
                    <div class="cp-security-icon icon-purple"><i class="fas fa-sync-alt"></i></div>
                    <h4>Replacement Guarantee</h4>
                    <p>If a key has an issue, it will be replaced quickly — no questions asked.</p>
                </div>
                <div class="cp-security-card">
                    <div class="cp-security-icon icon-amber"><i class="fas fa-headset"></i></div>
                    <h4>Dedicated Reseller Support</h4>
                    <p>Personal account manager and priority support for all reseller orders and inquiries.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ VOLUME PRICING ═══════════════ -->
    <section class="ms-discount reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag">Volume Pricing</div>
                <h2>Reseller discount structure</h2>
                <p>The more you order, the more you save. Discounts are applied per order through our support team.</p>
            </div>

            <div class="ms-discount-table-wrap">
                <table class="ms-discount-table">
                    <thead>
                        <tr>
                            <th>Order Quantity</th>
                            <th>Discount</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td>10+ keys</td><td>5%</td></tr>
                        <tr><td>25+ keys</td><td>10%</td></tr>
                        <tr><td>50+ keys</td><td>15%</td></tr>
                        <tr class="ms-discount-highlight"><td>100+ keys</td><td>Custom reseller pricing</td></tr>
                    </tbody>
                </table>
            </div>

            <div class="pricing-custom">
                <p>Orders are placed through support tickets. Discounts are applied based on quantity. <a href="<?php echo e(SITE_URL); ?>/contact-us/">Contact support</a> to place an order.</p>
            </div>

            <p class="ms-discount-note">Discounts are applied per order.<br>Contact support to request reseller pricing based on quantity.</p>
        </div>
    </section>

    <!-- ═══════════════ HOW TO START ═══════════════ -->
    <section class="ms-steps reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag">Get Started</div>
                <h2>How to start reselling</h2>
                <p>From registration to your first sale in four simple steps.</p>
            </div>

            <div class="vps-steps-grid">
                <div class="vps-step-card">
                    <span class="vps-step-num">1</span>
                    <div class="vps-step-icon"><i class="fas fa-user-plus"></i></div>
                    <h4>Create Reseller Account</h4>
                    <p>Register on our platform and get access to the reseller dashboard.</p>
                </div>
                <div class="vps-step-card">
                    <span class="vps-step-num">2</span>
                    <div class="vps-step-icon icon-green"><i class="fas fa-headset"></i></div>
                    <h4>Contact Support</h4>
                    <p>Open a support ticket with the products and quantities you need.</p>
                </div>
                <div class="vps-step-card">
                    <span class="vps-step-num">3</span>
                    <div class="vps-step-icon icon-purple"><i class="fas fa-tags"></i></div>
                    <h4>Receive Pricing</h4>
                    <p>Get your personalized discounted pricing based on order volume.</p>
                </div>
                <div class="vps-step-card">
                    <span class="vps-step-num">4</span>
                    <div class="vps-step-icon icon-amber"><i class="fas fa-rocket"></i></div>
                    <h4>Start Selling</h4>
                    <p>Receive your keys and start selling licenses to your clients.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ FAQ ═══════════════ -->
    <section class="faq-section reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag">FAQ</div>
                <h2>Frequently asked questions</h2>
                <p>Can't find your answer? Open a support ticket — we respond in under 10 minutes.</p>
            </div>

            <div class="faq-layout">
                <div class="faq-tabs">
                    <button class="faq-tab active" data-faq-target="faq-general"><i class="fas fa-key"></i> General</button>
                    <button class="faq-tab" data-faq-target="faq-technical"><i class="fas fa-cogs"></i> Technical</button>
                    <button class="faq-tab" data-faq-target="faq-billing"><i class="fas fa-credit-card"></i> Billing</button>
                </div>

                <div class="faq-panels">
                    <div class="faq-panel active" id="faq-general">
                        <div class="faq-item"><button class="faq-question"><span>Are the keys genuine?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>Yes, all keys are genuine Microsoft license keys. They activate directly through Microsoft's activation servers.</p></div></div>
                        <div class="faq-item"><button class="faq-question"><span>What does "Phone Activation" mean?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>Phone activation keys require calling Microsoft's automated activation line to complete activation. The process takes about 5 minutes and is free. These keys are cheaper than retail keys.</p></div></div>
                        <div class="faq-item"><button class="faq-question"><span>What does "Retail Key" mean?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>Retail keys activate online automatically — just enter the key and it activates instantly. No phone call needed. These are premium keys with a higher price.</p></div></div>
                        <div class="faq-item"><button class="faq-question"><span>Are the keys transferable?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>Retail keys can be transferred to a new computer. Phone activation and bind keys are generally tied to the hardware they're first activated on.</p></div></div>
                    </div>

                    <div class="faq-panel" id="faq-technical">
                        <div class="faq-item"><button class="faq-question"><span>How are keys delivered?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>Keys are delivered digitally via email and your reseller dashboard immediately after payment confirmation.</p></div></div>
                        <div class="faq-item"><button class="faq-question"><span>How do I place an order?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>Open a support ticket with the products and quantities you need. Our team will process your order and deliver the keys to your dashboard.</p></div></div>
                        <div class="faq-item"><button class="faq-question"><span>What if a key doesn't activate?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>If a key fails to activate through no fault of the user, we replace it free of charge. Our replacement rate is less than 0.1%.</p></div></div>
                        <div class="faq-item"><button class="faq-question"><span>Do you track stock levels?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>Yes, stock levels are visible in your reseller dashboard. Contact support if you need availability info for specific products.</p></div></div>
                    </div>

                    <div class="faq-panel" id="faq-billing">
                        <div class="faq-item"><button class="faq-question"><span>Is there a minimum order?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>No minimum order required. You can purchase a single key or order in bulk. Volume discounts available for large orders.</p></div></div>
                        <div class="faq-item"><button class="faq-question"><span>Do you offer volume discounts?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>Yes, bulk orders of 50+ keys qualify for additional discounts. Contact our sales team for volume pricing.</p></div></div>
                        <div class="faq-item"><button class="faq-question"><span>What payment methods do you accept?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>Credit/debit cards, PayPal, cryptocurrency (Bitcoin, USDT, etc.), and 10+ other payment methods.</p></div></div>
                        <div class="faq-item"><button class="faq-question"><span>Can I get a refund?</span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p>Unused keys can be refunded within 24 hours of purchase. Once a key has been activated, it cannot be refunded — but defective keys are always replaced.</p></div></div>
                    </div>
                </div>
            </div>

            <div class="faq-actions">
                <a href="<?php echo e(SITE_URL); ?>/contact-us/" class="btn-primary"><i class="fas fa-headset"></i> Open a Ticket</a>
                <a href="<?php echo e(SITE_URL); ?>/faq" class="btn-secondary">Browse All FAQ <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </section>

    <!-- ═══════════════ WHY CHOOSE US ═══════════════ -->
    <section class="why-us reveal">
        <div class="container">
            <div class="why-us-layout">
                <div class="why-us-intro">
                    <div class="section-tag">Advantages</div>
                    <h2 class="why-us-title">Why Choose Us?</h2>
                    <p class="why-us-desc">Thousands of resellers trust YottaSrc for genuine Microsoft keys at wholesale prices.</p>
                    <a href="<?php echo e(SITE_URL); ?>/contact-us/" class="btn-primary">Contact Sales <i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="why-us-grid">
                    <div class="why-us-card">
                        <div class="why-us-card-icon"><i class="fas fa-bolt"></i></div>
                        <h4>Instant Delivery</h4>
                        <p>All keys delivered digitally within seconds of purchase confirmation.</p>
                    </div>
                    <div class="why-us-card">
                        <div class="why-us-card-icon icon-green"><i class="fas fa-certificate"></i></div>
                        <h4>100% Genuine Keys</h4>
                        <p>All keys activate directly through Microsoft. Less than 0.1% replacement rate.</p>
                    </div>
                    <div class="why-us-card">
                        <div class="why-us-card-icon icon-purple"><i class="fas fa-tags"></i></div>
                        <h4>Wholesale Pricing</h4>
                        <p>Reseller pricing from €1.50/key with volume discounts available.</p>
                    </div>
                    <div class="why-us-card">
                        <div class="why-us-card-icon icon-amber"><i class="fas fa-headset"></i></div>
                        <h4>Dedicated Reseller Support</h4>
                        <p>Personal account manager and priority support for all reseller orders.</p>
                    </div>
                    <div class="why-us-card">
                        <div class="why-us-card-icon icon-green"><i class="fas fa-headset"></i></div>
                        <h4>24/7 Support</h4>
                        <p>Dedicated reseller support with under 10 minute response times.</p>
                    </div>
                    <div class="why-us-card">
                        <div class="why-us-card-icon icon-purple"><i class="fas fa-sync-alt"></i></div>
                        <h4>Free Replacements</h4>
                        <p>Any key that fails to activate is replaced free of charge, no questions asked.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ BOTTOM CTA ═══════════════ -->
    <section class="promo-cta reveal">
        <div class="container">
            <div class="promo-cta-inner">
                <div class="promo-cta-glow"></div>
                <div class="promo-cta-icon"><i class="fas fa-key"></i></div>
                <h2>Ready to resell Microsoft license keys?</h2>
                <p>Join our reseller program. Volume discounts, genuine licenses, and dedicated support for every order.</p>
                <a href="<?php echo e(SITE_URL); ?>/contact-us/" class="btn-primary">Contact Sales <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
