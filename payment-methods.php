<?php
/**
 * YottaSrc — Payment Methods
 * ===========================
 * Accepted payment methods overview page.
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
                    <a href="<?php echo e(SITE_URL); ?>/"><?php echo e(__('breadcrumb_home')); ?></a>
                    <i class="fas fa-chevron-right"></i>
                    <span><?php echo e(__('payments_breadcrumb')); ?></span>
                </div>
                <h1><?php echo __('payments_title'); ?></h1>
                <p class="page-hero-desc">
                    <?php echo e(__('payments_desc')); ?>
                </p>
            </div>
        </div>
    </section>

    <!-- ═══════════════ PAYMENT METHODS GRID ═══════════════ -->
    <section class="payment-methods reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag"><?php echo e(__('payments_methods_tag')); ?></div>
                <h2><?php echo e(__('payments_methods_title')); ?></h2>
                <p><?php echo e(__('payments_methods_desc')); ?></p>
            </div>

            <div class="payment-grid">
                <div class="payment-card">
                    <div class="payment-card-icon"><i class="fas fa-credit-card"></i></div>
                    <h3><?php echo e(__('payments_card_title')); ?></h3>
                    <p><?php echo e(__('payments_card_desc')); ?></p>
                    <div class="payment-card-brands">
                        <span class="payment-brand"><i class="fab fa-cc-visa"></i></span>
                        <span class="payment-brand"><i class="fab fa-cc-mastercard"></i></span>
                        <span class="payment-brand"><i class="fab fa-cc-amex"></i></span>
                    </div>
                </div>

                <div class="payment-card">
                    <div class="payment-card-icon icon-blue"><i class="fab fa-paypal"></i></div>
                    <h3><?php echo e(__('payments_paypal_title')); ?></h3>
                    <p><?php echo e(__('payments_paypal_desc')); ?></p>
                    <div class="payment-card-brands">
                        <span class="payment-brand"><i class="fab fa-cc-paypal"></i></span>
                    </div>
                </div>

                <div class="payment-card">
                    <div class="payment-card-icon icon-green"><i class="fab fa-bitcoin"></i></div>
                    <h3><?php echo e(__('payments_crypto_title')); ?></h3>
                    <p><?php echo e(__('payments_crypto_desc')); ?></p>
                    <div class="payment-card-brands">
                        <span class="payment-brand"><i class="fab fa-bitcoin"></i></span>
                        <span class="payment-brand"><i class="fab fa-ethereum"></i></span>
                    </div>
                </div>

                <div class="payment-card">
                    <div class="payment-card-icon icon-purple"><i class="fas fa-university"></i></div>
                    <h3><?php echo e(__('payments_bank_title')); ?></h3>
                    <p><?php echo e(__('payments_bank_desc')); ?></p>
                    <div class="payment-card-brands">
                        <span class="payment-brand"><i class="fas fa-building-columns"></i></span>
                    </div>
                </div>

                <div class="payment-card">
                    <div class="payment-card-icon icon-amber"><i class="fas fa-wallet"></i></div>
                    <h3><?php echo e(__('payments_credit_title')); ?></h3>
                    <p><?php echo e(__('payments_credit_desc')); ?></p>
                    <div class="payment-card-brands">
                        <span class="payment-brand"><i class="fas fa-coins"></i></span>
                    </div>
                </div>

                <div class="payment-card">
                    <div class="payment-card-icon icon-rose"><i class="fas fa-globe"></i></div>
                    <h3><?php echo e(__('payments_regional_title')); ?></h3>
                    <p><?php echo e(__('payments_regional_desc')); ?></p>
                    <div class="payment-card-brands">
                        <span class="payment-brand"><i class="fas fa-mobile-alt"></i></span>
                        <span class="payment-brand"><i class="fas fa-money-bill-wave"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ PAYMENT PARTNERS ═══════════════ -->
    <section class="pay-partners reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag"><?php echo e(__('payments_partners_tag')); ?></div>
                <h2><?php echo e(__('payments_partners_title')); ?></h2>
                <p><?php echo e(__('payments_partners_desc')); ?></p>
            </div>

            <div class="pay-partners-grid">
                <div class="pay-partner-card">
                    <div class="pay-partner-logo">
                        <i class="fab fa-stripe-s"></i>
                    </div>
                    <h4><?php echo e(__('payments_stripe_title')); ?></h4>
                    <p><?php echo __('payments_stripe_desc'); ?></p>
                </div>
                <div class="pay-partner-card">
                    <div class="pay-partner-logo pay-partner-logo--paypal">
                        <i class="fab fa-paypal"></i>
                    </div>
                    <h4><?php echo e(__('payments_paypal_partner_title')); ?></h4>
                    <p><?php echo __('payments_paypal_partner_desc'); ?></p>
                </div>
                <div class="pay-partner-card">
                    <div class="pay-partner-logo pay-partner-logo--crypto">
                        <i class="fas fa-coins"></i>
                    </div>
                    <h4>Cryptomus</h4>
                    <p>50+ cryptocurrencies including BTC, ETH &amp; USDT</p>
                </div>
                <div class="pay-partner-card">
                    <div class="pay-partner-logo pay-partner-logo--binance">
                        <i class="fas fa-wallet"></i>
                    </div>
                    <h4>Binance Pay</h4>
                    <p>Direct crypto payments via Binance wallet</p>
                </div>
                <div class="pay-partner-card">
                    <div class="pay-partner-logo pay-partner-logo--coinbase">
                        <i class="fab fa-bitcoin"></i>
                    </div>
                    <h4>Coinbase</h4>
                    <p>Cryptocurrency payments powered by Coinbase Commerce</p>
                </div>
                <div class="pay-partner-card">
                    <div class="pay-partner-logo pay-partner-logo--plisio">
                        <i class="fas fa-link"></i>
                    </div>
                    <h4>Plisio</h4>
                    <p>Multi-crypto gateway with auto-conversion</p>
                </div>
                <div class="pay-partner-card">
                    <div class="pay-partner-logo pay-partner-logo--alipay">
                        <i class="fab fa-alipay"></i>
                    </div>
                    <h4>Alipay</h4>
                    <p>Popular payment gateway across Asia</p>
                </div>
                <div class="pay-partner-card">
                    <div class="pay-partner-logo pay-partner-logo--revolut">
                        <i class="fas fa-sync-alt"></i>
                    </div>
                    <h4>Revolut Pay</h4>
                    <p>Fast payments via Revolut account</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ SECURITY & TRUST ═══════════════ -->
    <section class="pay-security reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag">Security</div>
                <h2>Your payments are safe with us</h2>
                <p>We take payment security seriously. Every transaction is encrypted and handled by trusted processors.</p>
            </div>

            <div class="pay-sec-grid">
                <div class="pay-sec-card">
                    <div class="pay-sec-icon"><i class="fas fa-shield-alt"></i></div>
                    <h3>PCI DSS Compliant</h3>
                    <p>Our payment infrastructure meets Payment Card Industry Data Security Standards. Your card data never touches our servers — it's processed directly by certified payment gateways.</p>
                </div>
                <div class="pay-sec-card">
                    <div class="pay-sec-icon icon-green"><i class="fas fa-lock"></i></div>
                    <h3>256-bit SSL Encryption</h3>
                    <p>All payment pages are secured with TLS 1.3 encryption to protect your data in transit.</p>
                </div>
                <div class="pay-sec-card">
                    <div class="pay-sec-icon icon-blue"><i class="fas fa-redo-alt"></i></div>
                    <h3>Auto-Renewal</h3>
                    <p>Enable automatic billing to keep your services running without interruption.</p>
                </div>
                <div class="pay-sec-card">
                    <div class="pay-sec-icon icon-purple"><i class="fas fa-file-invoice"></i></div>
                    <h3>Transparent Invoicing</h3>
                    <p>Receive detailed invoices for every transaction, downloadable from your client area.</p>
                </div>
                <div class="pay-sec-card">
                    <div class="pay-sec-icon icon-amber"><i class="fas fa-hand-holding-usd"></i></div>
                    <h3>30-Day Money-Back</h3>
                    <p>Not satisfied? Get a full refund within 30 days on eligible hosting plans.</p>
                </div>
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
                <p>Choose a service, pick your preferred payment method, and launch in minutes.</p>
                <a href="<?php echo e(SITE_URL); ?>/cpanel-hosting/" class="btn-primary">Browse Services <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
