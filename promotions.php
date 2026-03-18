<?php
/**
 * YottaSrc — Promotions
 * ======================
 * Active promotions and limited-time offers.
 */
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/topbar.php';
?>

    <!-- ═══════════════ HERO ═══════════════ -->
    <section class="page-hero">
        <div class="container">
            <div class="page-hero-content" style="text-align:center;max-width:720px;margin:0 auto;">
                <div class="page-breadcrumb" style="justify-content:center;">
                    <a href="<?php echo e(SITE_URL); ?>/">Home</a>
                    <i class="fas fa-chevron-right"></i>
                    <span>Promotions</span>
                </div>
                <h1>Current <span class="highlight">Promotions</span> &amp; Deals</h1>
                <p class="page-hero-desc">
                    Save big on hosting, VPS, cloud, and reseller plans. Limited-time offers you don't want to miss.
                </p>
            </div>
        </div>
    </section>

    <!-- ═══════════════ ACTIVE PROMOTIONS ═══════════════ -->
    <section class="promo-offers reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag">Active Promos</div>
                <h2>Current offers</h2>
                <p>Copy the promo code and apply it at checkout to claim your discount.</p>
            </div>

            <div class="promo-offers-grid promo-offers-grid--2col">
                <!-- Promo 1: cPanel 10% -->
                <div class="promo-offer-card">
                    <div class="promo-offer-badge promo-badge-green">Active</div>
                    <div class="promo-offer-discount">10% OFF</div>
                    <h3>Discount 10% for cPanel hosting packages</h3>
                    <ul class="promo-detail-list">
                        <li><i class="fas fa-percent"></i> Percentage: <strong>10%</strong></li>
                        <li><i class="fas fa-calendar-alt"></i> Expires: <strong>July 1, 2026</strong></li>
                        <li><i class="fas fa-sync-alt"></i> Billing Cycle: <strong>All Cycles</strong></li>
                        <li><i class="fas fa-receipt"></i> One-time discount for the first month</li>
                        <li><i class="fas fa-users"></i> Eligible for both old and new clients</li>
                    </ul>
                    <div class="promo-code-wrap">
                        <code class="promo-code-text">cPanel_10OFF</code>
                        <button class="promo-code-copy" data-code="cPanel_10OFF" title="Copy code"><i class="fas fa-copy"></i></button>
                    </div>
                </div>

                <!-- Promo 2: WordPress 15% -->
                <div class="promo-offer-card">
                    <div class="promo-offer-badge promo-badge-green">Active</div>
                    <div class="promo-offer-discount">15% OFF</div>
                    <h3>Discount 15% for WordPress hosting packages</h3>
                    <ul class="promo-detail-list">
                        <li><i class="fas fa-percent"></i> Percentage: <strong>15%</strong></li>
                        <li><i class="fas fa-calendar-alt"></i> Expires: <strong>July 1, 2026</strong></li>
                        <li><i class="fas fa-sync-alt"></i> Billing Cycle: <strong>All Cycles</strong></li>
                        <li><i class="fas fa-receipt"></i> One-time discount for the first month</li>
                        <li><i class="fas fa-users"></i> Eligible for both old and new clients</li>
                    </ul>
                    <div class="promo-code-wrap">
                        <code class="promo-code-text">WP_15OFF</code>
                        <button class="promo-code-copy" data-code="WP_15OFF" title="Copy code"><i class="fas fa-copy"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ EXPIRED PROMOTIONS ═══════════════ -->
    <section class="promo-expired reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag">Past Deals</div>
                <h2>Expired promotions</h2>
                <p>These offers are no longer available.</p>
            </div>

            <div class="promo-expired-list">
                <div class="promo-expired-item"><i class="fas fa-tag"></i><span>Ramadan 2026: 10% OFF Recurring on Hosting &amp; VPS</span><span class="promo-expired-tag">Expired</span></div>
                <div class="promo-expired-item"><i class="fas fa-tag"></i><span>New Year: 10% off VPS/VDS and Servers services (Lifetime)</span><span class="promo-expired-tag">Expired</span></div>
                <div class="promo-expired-item"><i class="fas fa-tag"></i><span>New Year: 20% off VPS/VDS and Servers services (Lifetime)</span><span class="promo-expired-tag">Expired</span></div>
                <div class="promo-expired-item"><i class="fas fa-tag"></i><span>New Year: 20% off cPanel &amp; WordPress hosting (Lifetime)</span><span class="promo-expired-tag">Expired</span></div>
                <div class="promo-expired-item"><i class="fas fa-tag"></i><span>New Year: 35% off cPanel &amp; WordPress hosting (Lifetime)</span><span class="promo-expired-tag">Expired</span></div>
                <div class="promo-expired-item"><i class="fas fa-tag"></i><span>Cyber Monday: 10% OFF on all services (Lifetime)</span><span class="promo-expired-tag">Expired</span></div>
                <div class="promo-expired-item"><i class="fas fa-tag"></i><span>10% off on all products</span><span class="promo-expired-tag">Expired</span></div>
                <div class="promo-expired-item"><i class="fas fa-tag"></i><span>Summer Sale: 12% off on all services</span><span class="promo-expired-tag">Expired</span></div>
                <div class="promo-expired-item"><i class="fas fa-tag"></i><span>YottaSrc Speaks Your Language! 10% Discount</span><span class="promo-expired-tag">Expired</span></div>
                <div class="promo-expired-item"><i class="fas fa-tag"></i><span>20% Off all VPS Windows Plans</span><span class="promo-expired-tag">Expired</span></div>
                <div class="promo-expired-item"><i class="fas fa-tag"></i><span>Happy Easter: 10% discount for any service</span><span class="promo-expired-tag">Expired</span></div>
                <div class="promo-expired-item"><i class="fas fa-tag"></i><span>10% Lifetime discount for any service</span><span class="promo-expired-tag">Expired</span></div>
                <div class="promo-expired-item"><i class="fas fa-tag"></i><span>Ramadan 2025 Special: 12% Off All Services</span><span class="promo-expired-tag">Expired</span></div>
                <div class="promo-expired-item"><i class="fas fa-tag"></i><span>Black Friday: 30% off hosting services</span><span class="promo-expired-tag">Expired</span></div>
                <div class="promo-expired-item"><i class="fas fa-tag"></i><span>Black Friday: 15% off Servers/VPS services</span><span class="promo-expired-tag">Expired</span></div>
                <div class="promo-expired-item"><i class="fas fa-tag"></i><span>25% off cPanel hosting packages (First 3 months)</span><span class="promo-expired-tag">Expired</span></div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ HOW TO REDEEM ═══════════════ -->
    <section class="promo-redeem reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag">How It Works</div>
                <h2>Redeem your discount</h2>
                <p>Applying a promotion is quick and easy.</p>
            </div>

            <div class="redeem-steps">
                <div class="redeem-step">
                    <div class="redeem-step-icon"><i class="fas fa-shopping-cart"></i></div>
                    <div class="redeem-step-num">Step 1</div>
                    <h4>Choose a Service</h4>
                    <p>Browse our hosting, VPS, cloud, or reseller plans and add your preferred plan to the cart.</p>
                </div>
                <div class="redeem-step">
                    <div class="redeem-step-icon icon-green"><i class="fas fa-copy"></i></div>
                    <div class="redeem-step-num">Step 2</div>
                    <h4>Copy Promo Code</h4>
                    <p>Click the copy button next to any active promo code above to copy it to your clipboard.</p>
                </div>
                <div class="redeem-step">
                    <div class="redeem-step-icon icon-blue"><i class="fas fa-paste"></i></div>
                    <div class="redeem-step-num">Step 3</div>
                    <h4>Paste at Checkout</h4>
                    <p>Paste the code in the "Promo Code" field on the checkout page and click apply.</p>
                </div>
                <div class="redeem-step">
                    <div class="redeem-step-icon icon-purple"><i class="fas fa-rocket"></i></div>
                    <div class="redeem-step-num">Step 4</div>
                    <h4>Complete &amp; Launch</h4>
                    <p>Pay with your preferred method and your service activates instantly with the discount applied.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ BOTTOM CTA ═══════════════ -->
    <section class="promo-cta reveal">
        <div class="container">
            <div class="promo-cta-inner">
                <div class="promo-cta-glow"></div>
                <div class="promo-cta-icon"><i class="fas fa-percentage"></i></div>
                <h2>Don't miss out!</h2>
                <p>Sign up for our newsletter to be the first to know about new promotions and exclusive deals.</p>
                <a href="<?php echo e(SITE_URL); ?>/cpanel-hosting/" class="btn-primary">Get Started <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
