<?php
/**
 * YottaSrc — Microsoft Key Detail / Order Page
 * ==============================================
 * Shows a single Microsoft license key product with details,
 * features, activation guide, and order button.
 * Example: Windows 10/11 Pro 1PC Retail Online
 */
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/topbar.php';

// ── Product data (will come from DB in production) ──
$product = [
    'name'       => 'Windows 10/11 Pro — 1 PC',
    'type'       => 'Retail Key · Instant Online Activation',
    'price'      => '€6.99',
    'old_price'  => '€14.99',
    'badge'      => 'Best Seller',
    'badge_type' => 'primary',
    'sku'        => 'WIN-PRO-1PC-RETAIL',
    'stock'      => true,
    'delivery'   => 'Instant (Email + Dashboard)',
    'activation' => 'Online — Automatic',
    'platform'   => '1 PC · Lifetime',
    'compatible' => 'Windows 10 & 11',
];
?>

    <!-- ═══════════════ HERO ═══════════════ -->
    <section class="page-hero ms-hero ms-detail-hero">
        <div class="container">
            <div class="page-breadcrumb">
                <a href="<?php echo e(SITE_URL); ?>/">Home</a>
                <i class="fas fa-chevron-right"></i>
                <a href="<?php echo e(SITE_URL); ?>/microsoft-products/">Microsoft</a>
                <i class="fas fa-chevron-right"></i>
                <a href="<?php echo e(SITE_URL); ?>/licenses/keys/">Keys</a>
                <i class="fas fa-chevron-right"></i>
                <span><?php echo e($product['name']); ?></span>
            </div>
        </div>
    </section>

    <!-- ═══════════════ PRODUCT DETAIL ═══════════════ -->
    <section class="mkd-detail reveal">
        <div class="container">
            <div class="mkd-layout">

                <!-- Left: Product Info -->
                <div class="mkd-main">
                    <div class="mkd-product-header">
                        <div class="mkd-product-icon">
                            <i class="fab fa-microsoft"></i>
                        </div>
                        <div>
                            <h1 class="mkd-product-title"><?php echo e($product['name']); ?></h1>
                            <p class="mkd-product-type"><?php echo e($product['type']); ?></p>
                        </div>
                    </div>

                    <!-- Key Features -->
                    <div class="mkd-section">
                        <h2><i class="fas fa-star"></i> Key Features</h2>
                        <div class="mkd-features-grid">
                            <div class="mkd-feature">
                                <div class="mkd-feature-icon"><i class="fas fa-bolt"></i></div>
                                <div>
                                    <strong>Instant Delivery</strong>
                                    <span>Key delivered via email &amp; dashboard within seconds of payment.</span>
                                </div>
                            </div>
                            <div class="mkd-feature">
                                <div class="mkd-feature-icon"><i class="fas fa-certificate"></i></div>
                                <div>
                                    <strong>Genuine Microsoft Key</strong>
                                    <span>100% authentic — activates directly on Microsoft servers.</span>
                                </div>
                            </div>
                            <div class="mkd-feature">
                                <div class="mkd-feature-icon"><i class="fas fa-infinity"></i></div>
                                <div>
                                    <strong>Lifetime License</strong>
                                    <span>One-time purchase. No subscription, no recurring fees.</span>
                                </div>
                            </div>
                            <div class="mkd-feature">
                                <div class="mkd-feature-icon"><i class="fas fa-sync-alt"></i></div>
                                <div>
                                    <strong>Free Replacement</strong>
                                    <span>If your key doesn't activate, we replace it free of charge.</span>
                                </div>
                            </div>
                            <div class="mkd-feature">
                                <div class="mkd-feature-icon"><i class="fas fa-laptop"></i></div>
                                <div>
                                    <strong>Windows 10 &amp; 11 Compatible</strong>
                                    <span>Works on both Windows 10 and Windows 11 — upgrade anytime.</span>
                                </div>
                            </div>
                            <div class="mkd-feature">
                                <div class="mkd-feature-icon"><i class="fas fa-headset"></i></div>
                                <div>
                                    <strong>24/7 Support</strong>
                                    <span>Need help activating? Our team is available around the clock.</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- How to Activate -->
                    <div class="mkd-section">
                        <h2><i class="fas fa-clipboard-check"></i> How to Activate</h2>
                        <div class="mkd-steps">
                            <div class="mkd-step">
                                <div class="mkd-step-num">1</div>
                                <div>
                                    <strong>Purchase &amp; Receive Key</strong>
                                    <span>Complete your order — the product key is delivered instantly to your email and dashboard.</span>
                                </div>
                            </div>
                            <div class="mkd-step">
                                <div class="mkd-step-num">2</div>
                                <div>
                                    <strong>Open Settings</strong>
                                    <span>Go to <code>Settings → System → Activation</code> on your Windows PC.</span>
                                </div>
                            </div>
                            <div class="mkd-step">
                                <div class="mkd-step-num">3</div>
                                <div>
                                    <strong>Enter Product Key</strong>
                                    <span>Click "Change product key" and paste the key you received.</span>
                                </div>
                            </div>
                            <div class="mkd-step">
                                <div class="mkd-step-num">4</div>
                                <div>
                                    <strong>Activated!</strong>
                                    <span>Windows activates online automatically. You're all set — enjoy your genuine license.</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- What's Included -->
                    <div class="mkd-section">
                        <h2><i class="fas fa-box-open"></i> What's Included</h2>
                        <ul class="mkd-included-list">
                            <li><i class="fas fa-check"></i> 1× Genuine Windows 10/11 Pro Product Key</li>
                            <li><i class="fas fa-check"></i> Instant digital delivery (no physical shipment)</li>
                            <li><i class="fas fa-check"></i> Official Microsoft online activation</li>
                            <li><i class="fas fa-check"></i> Full Windows Pro features: BitLocker, Remote Desktop, Hyper-V</li>
                            <li><i class="fas fa-check"></i> Free upgrade path from Windows 10 to 11</li>
                            <li><i class="fas fa-check"></i> Lifetime validity — no expiry</li>
                        </ul>
                    </div>
                </div>

                <!-- Right: Order Sidebar -->
                <aside class="mkd-sidebar">
                    <div class="mkd-order-card">
                        <?php if ($product['badge']): ?>
                        <div class="mkd-badge mkd-badge-<?php echo e($product['badge_type']); ?>"><?php echo e($product['badge']); ?></div>
                        <?php endif; ?>

                        <div class="mkd-price-block">
                            <span class="mkd-old-price"><?php echo e($product['old_price']); ?></span>
                            <span class="mkd-current-price"><?php echo e($product['price']); ?></span>
                            <span class="mkd-save-tag"><i class="fas fa-tag"></i> Save <?php echo round((1 - floatval(str_replace('€', '', $product['price'])) / floatval(str_replace('€', '', $product['old_price']))) * 100); ?>%</span>
                        </div>

                        <div class="mkd-meta-grid">
                            <div class="mkd-meta-item">
                                <i class="fas fa-barcode"></i>
                                <div><strong>SKU</strong><span><?php echo e($product['sku']); ?></span></div>
                            </div>
                            <div class="mkd-meta-item">
                                <i class="fas fa-truck"></i>
                                <div><strong>Delivery</strong><span><?php echo e($product['delivery']); ?></span></div>
                            </div>
                            <div class="mkd-meta-item">
                                <i class="fas fa-shield-alt"></i>
                                <div><strong>Activation</strong><span><?php echo e($product['activation']); ?></span></div>
                            </div>
                            <div class="mkd-meta-item">
                                <i class="fas fa-desktop"></i>
                                <div><strong>License</strong><span><?php echo e($product['platform']); ?></span></div>
                            </div>
                        </div>

                        <?php if ($product['stock']): ?>
                        <div class="mkd-stock mkd-in-stock"><i class="fas fa-check-circle"></i> In Stock — Ready for Instant Delivery</div>
                        <?php else: ?>
                        <div class="mkd-stock mkd-out-stock"><i class="fas fa-times-circle"></i> Currently Unavailable</div>
                        <?php endif; ?>

                        <div class="mkd-qty-row">
                            <label for="mkdQty">Quantity</label>
                            <div class="mkd-qty-control">
                                <button type="button" class="mkd-qty-btn" id="mkdQtyMinus"><i class="fas fa-minus"></i></button>
                                <input type="number" class="mkd-qty-input" id="mkdQty" value="1" min="1" max="100">
                                <button type="button" class="mkd-qty-btn" id="mkdQtyPlus"><i class="fas fa-plus"></i></button>
                            </div>
                        </div>

                        <button class="mkd-order-btn" data-type="keys" type="button">
                            <i class="fas fa-shopping-cart"></i> Order Now — <?php echo e($product['price']); ?>
                        </button>

                        <div class="mkd-trust-row">
                            <span><i class="fas fa-lock"></i> Secure Checkout</span>
                            <span><i class="fas fa-undo"></i> Refund Policy</span>
                            <span><i class="fas fa-headset"></i> 24/7 Support</span>
                        </div>
                    </div>

                    <!-- Volume Pricing -->
                    <div class="mkd-volume-card">
                        <h4><i class="fas fa-layer-group"></i> Volume Discounts</h4>
                        <table class="mkd-volume-table">
                            <thead><tr><th>Quantity</th><th>Unit Price</th><th>Savings</th></tr></thead>
                            <tbody>
                                <tr><td>1 – 9</td><td>€6.99</td><td>—</td></tr>
                                <tr><td>10 – 49</td><td>€5.99</td><td class="mkd-save">14% off</td></tr>
                                <tr><td>50 – 199</td><td>€4.99</td><td class="mkd-save">29% off</td></tr>
                                <tr class="mkd-vol-highlight"><td>200+</td><td>€3.99</td><td class="mkd-save">43% off</td></tr>
                            </tbody>
                        </table>
                        <p class="mkd-volume-note"><i class="fas fa-info-circle"></i> Need custom pricing? <a href="<?php echo e(SITE_URL); ?>/contact-us/">Contact Sales</a></p>
                    </div>

                    <!-- Payment Methods -->
                    <div class="mkd-payments-card">
                        <h4><i class="fas fa-credit-card"></i> We Accept</h4>
                        <div class="mkd-pay-icons">
                            <i class="fab fa-cc-visa"></i>
                            <i class="fab fa-cc-mastercard"></i>
                            <i class="fab fa-cc-paypal"></i>
                            <i class="fab fa-cc-stripe"></i>
                            <i class="fab fa-bitcoin"></i>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </section>

    <!-- ═══════════════ RELATED PRODUCTS ═══════════════ -->
    <section class="mkd-related reveal">
        <div class="container">
            <div class="section-header">
                <span class="section-tag"><i class="fas fa-th-large"></i> Related Products</span>
                <h2>You May Also Like</h2>
                <p>Explore other popular Microsoft license keys.</p>
            </div>
            <div class="mkd-related-grid">
                <div class="mkd-related-card">
                    <div class="mkd-rc-icon"><i class="fab fa-microsoft"></i></div>
                    <h4>Windows 10/11 Pro — 1 PC (OEM)</h4>
                    <p>OEM license — ties to one device, non-transferable. Budget option.</p>
                    <div class="mkd-rc-price">€3.99</div>
                    <a href="#" class="mkd-rc-btn">View Details <i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="mkd-related-card">
                    <div class="mkd-rc-icon"><i class="fab fa-microsoft"></i></div>
                    <h4>Office 2021 Professional Plus</h4>
                    <p>Full Office suite — Word, Excel, PowerPoint, Outlook, Access, Publisher.</p>
                    <div class="mkd-rc-price">€3.50</div>
                    <a href="#" class="mkd-rc-btn">View Details <i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="mkd-related-card">
                    <div class="mkd-rc-icon"><i class="fab fa-microsoft"></i></div>
                    <h4>Windows Server 2022 Standard</h4>
                    <p>Latest server OS — Hyper-V, containers, Azure hybrid support.</p>
                    <div class="mkd-rc-price">€12.00</div>
                    <a href="#" class="mkd-rc-btn">View Details <i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="mkd-related-card">
                    <div class="mkd-rc-icon"><i class="fab fa-microsoft"></i></div>
                    <h4>Visual Studio 2022 Professional</h4>
                    <p>Full IDE for .NET, C++, Python, and web development.</p>
                    <div class="mkd-rc-price">€12.00</div>
                    <a href="#" class="mkd-rc-btn">View Details <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ FAQ ═══════════════ -->
    <section class="mkd-faq reveal">
        <div class="container">
            <div class="section-header">
                <span class="section-tag"><i class="fas fa-question-circle"></i> FAQ</span>
                <h2>Common Questions</h2>
            </div>
            <div class="faq-list" style="max-width:800px;margin:0 auto;">
                <div class="faq-item">
                    <button class="faq-question">Is this a genuine Microsoft product key? <i class="fas fa-chevron-down"></i></button>
                    <div class="faq-answer"><p>Yes — all our keys are 100% genuine and activate directly on Microsoft's official activation servers. You'll see "Windows is activated with a digital license" in your Settings.</p></div>
                </div>
                <div class="faq-item">
                    <button class="faq-question">What's the difference between Retail and OEM? <i class="fas fa-chevron-down"></i></button>
                    <div class="faq-answer"><p><strong>Retail keys</strong> can be transferred to a new PC if you deactivate the old one. <strong>OEM keys</strong> are tied permanently to the first device they're activated on. Retail is more flexible; OEM is cheaper.</p></div>
                </div>
                <div class="faq-item">
                    <button class="faq-question">Can I upgrade from Windows 10 to 11 with this key? <i class="fas fa-chevron-down"></i></button>
                    <div class="faq-answer"><p>Yes. This key works on both Windows 10 and Windows 11. If you're on Windows 10, you can upgrade to 11 for free — your license carries over automatically.</p></div>
                </div>
                <div class="faq-item">
                    <button class="faq-question">How fast is delivery? <i class="fas fa-chevron-down"></i></button>
                    <div class="faq-answer"><p>Instant. As soon as payment is confirmed, the key is delivered to your email and appears in your YottaSrc dashboard. Typically within 1–2 minutes.</p></div>
                </div>
                <div class="faq-item">
                    <button class="faq-question">What if the key doesn't work? <i class="fas fa-chevron-down"></i></button>
                    <div class="faq-answer"><p>We offer free replacement. Contact our 24/7 support team and we'll issue a new key immediately — no questions asked.</p></div>
                </div>
            </div>
        </div>
    </section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
