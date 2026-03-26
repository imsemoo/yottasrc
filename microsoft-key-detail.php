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
                <a href="<?php echo e(SITE_URL); ?>/"><?php echo e(__('breadcrumb_home')); ?></a>
                <i class="fas fa-chevron-right"></i>
                <a href="<?php echo e(SITE_URL); ?>/microsoft-products/"><?php echo e(__('msdetail_breadcrumb_ms')); ?></a>
                <i class="fas fa-chevron-right"></i>
                <a href="<?php echo e(SITE_URL); ?>/licenses/keys/"><?php echo e(__('msdetail_breadcrumb_keys')); ?></a>
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
                        <h2><i class="fas fa-star"></i> <?php echo e(__('msdetail_features_title')); ?></h2>
                        <div class="mkd-features-grid">
                            <div class="mkd-feature">
                                <div class="mkd-feature-icon"><i class="fas fa-bolt"></i></div>
                                <div>
                                    <strong><?php echo e(__('msdetail_feat_delivery_title')); ?></strong>
                                    <span><?php echo __('msdetail_feat_delivery_desc'); ?></span>
                                </div>
                            </div>
                            <div class="mkd-feature">
                                <div class="mkd-feature-icon"><i class="fas fa-certificate"></i></div>
                                <div>
                                    <strong><?php echo e(__('msdetail_feat_genuine_title')); ?></strong>
                                    <span><?php echo e(__('msdetail_feat_genuine_desc')); ?></span>
                                </div>
                            </div>
                            <div class="mkd-feature">
                                <div class="mkd-feature-icon"><i class="fas fa-infinity"></i></div>
                                <div>
                                    <strong><?php echo e(__('msdetail_feat_lifetime_title')); ?></strong>
                                    <span><?php echo e(__('msdetail_feat_lifetime_desc')); ?></span>
                                </div>
                            </div>
                            <div class="mkd-feature">
                                <div class="mkd-feature-icon"><i class="fas fa-sync-alt"></i></div>
                                <div>
                                    <strong><?php echo e(__('msdetail_feat_replace_title')); ?></strong>
                                    <span><?php echo e(__('msdetail_feat_replace_desc')); ?></span>
                                </div>
                            </div>
                            <div class="mkd-feature">
                                <div class="mkd-feature-icon"><i class="fas fa-laptop"></i></div>
                                <div>
                                    <strong><?php echo __('msdetail_feat_compat_title'); ?></strong>
                                    <span><?php echo e(__('msdetail_feat_compat_desc')); ?></span>
                                </div>
                            </div>
                            <div class="mkd-feature">
                                <div class="mkd-feature-icon"><i class="fas fa-headset"></i></div>
                                <div>
                                    <strong><?php echo e(__('msdetail_feat_support_title')); ?></strong>
                                    <span><?php echo e(__('msdetail_feat_support_desc')); ?></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- How to Activate -->
                    <div class="mkd-section">
                        <h2><i class="fas fa-clipboard-check"></i> <?php echo e(__('msdetail_activate_title')); ?></h2>
                        <div class="mkd-steps">
                            <div class="mkd-step">
                                <div class="mkd-step-num">1</div>
                                <div>
                                    <strong><?php echo __('msdetail_activate_step1_title'); ?></strong>
                                    <span><?php echo e(__('msdetail_activate_step1_desc')); ?></span>
                                </div>
                            </div>
                            <div class="mkd-step">
                                <div class="mkd-step-num">2</div>
                                <div>
                                    <strong><?php echo e(__('msdetail_activate_step2_title')); ?></strong>
                                    <span><?php echo __('msdetail_activate_step2_desc'); ?></span>
                                </div>
                            </div>
                            <div class="mkd-step">
                                <div class="mkd-step-num">3</div>
                                <div>
                                    <strong><?php echo e(__('msdetail_activate_step3_title')); ?></strong>
                                    <span><?php echo e(__('msdetail_activate_step3_desc')); ?></span>
                                </div>
                            </div>
                            <div class="mkd-step">
                                <div class="mkd-step-num">4</div>
                                <div>
                                    <strong><?php echo e(__('msdetail_activate_step4_title')); ?></strong>
                                    <span><?php echo e(__('msdetail_activate_step4_desc')); ?></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- What's Included -->
                    <div class="mkd-section">
                        <h2><i class="fas fa-box-open"></i> <?php echo e(__('msdetail_included_title')); ?></h2>
                        <ul class="mkd-included-list">
                            <li><i class="fas fa-check"></i> <?php echo e(__('msdetail_included_1')); ?></li>
                            <li><i class="fas fa-check"></i> <?php echo e(__('msdetail_included_2')); ?></li>
                            <li><i class="fas fa-check"></i> <?php echo e(__('msdetail_included_3')); ?></li>
                            <li><i class="fas fa-check"></i> <?php echo e(__('msdetail_included_4')); ?></li>
                            <li><i class="fas fa-check"></i> <?php echo e(__('msdetail_included_5')); ?></li>
                            <li><i class="fas fa-check"></i> <?php echo e(__('msdetail_included_6')); ?></li>
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
                            <span class="mkd-save-tag"><i class="fas fa-tag"></i> <?php echo e(__('msdetail_save', ['percent' => round((1 - floatval(str_replace('€', '', $product['price'])) / floatval(str_replace('€', '', $product['old_price']))) * 100)])); ?></span>
                        </div>

                        <div class="mkd-meta-grid">
                            <div class="mkd-meta-item">
                                <i class="fas fa-barcode"></i>
                                <div><strong><?php echo e(__('msdetail_meta_sku')); ?></strong><span><?php echo e($product['sku']); ?></span></div>
                            </div>
                            <div class="mkd-meta-item">
                                <i class="fas fa-truck"></i>
                                <div><strong><?php echo e(__('msdetail_meta_delivery')); ?></strong><span><?php echo e($product['delivery']); ?></span></div>
                            </div>
                            <div class="mkd-meta-item">
                                <i class="fas fa-shield-alt"></i>
                                <div><strong><?php echo e(__('msdetail_meta_activation')); ?></strong><span><?php echo e($product['activation']); ?></span></div>
                            </div>
                            <div class="mkd-meta-item">
                                <i class="fas fa-desktop"></i>
                                <div><strong><?php echo e(__('msdetail_meta_license')); ?></strong><span><?php echo e($product['platform']); ?></span></div>
                            </div>
                        </div>

                        <?php if ($product['stock']): ?>
                        <div class="mkd-stock mkd-in-stock"><i class="fas fa-check-circle"></i> <?php echo e(__('msdetail_in_stock')); ?></div>
                        <?php else: ?>
                        <div class="mkd-stock mkd-out-stock"><i class="fas fa-times-circle"></i> <?php echo e(__('msdetail_out_of_stock')); ?></div>
                        <?php endif; ?>

                        <div class="mkd-qty-row">
                            <label for="mkdQty"><?php echo e(__('msdetail_qty_label')); ?></label>
                            <div class="mkd-qty-control">
                                <button type="button" class="mkd-qty-btn" id="mkdQtyMinus"><i class="fas fa-minus"></i></button>
                                <input type="number" class="mkd-qty-input" id="mkdQty" value="1" min="1" max="100">
                                <button type="button" class="mkd-qty-btn" id="mkdQtyPlus"><i class="fas fa-plus"></i></button>
                            </div>
                        </div>

                        <button class="mkd-order-btn" data-type="keys" type="button">
                            <i class="fas fa-shopping-cart"></i> <?php echo e(__('msdetail_order_btn', ['price' => $product['price']])); ?>
                        </button>

                        <div class="mkd-trust-row">
                            <span><i class="fas fa-lock"></i> <?php echo e(__('msdetail_trust_secure')); ?></span>
                            <span><i class="fas fa-undo"></i> <?php echo e(__('msdetail_trust_refund')); ?></span>
                            <span><i class="fas fa-headset"></i> <?php echo e(__('msdetail_trust_support')); ?></span>
                        </div>
                    </div>

                    <!-- Volume Pricing -->
                    <div class="mkd-volume-card">
                        <h4><i class="fas fa-layer-group"></i> <?php echo e(__('msdetail_volume_title')); ?></h4>
                        <table class="mkd-volume-table">
                            <thead><tr><th><?php echo e(__('msdetail_volume_th_qty')); ?></th><th><?php echo e(__('msdetail_volume_th_price')); ?></th><th><?php echo e(__('msdetail_volume_th_savings')); ?></th></tr></thead>
                            <tbody>
                                <tr><td>1 – 9</td><td>€6.99</td><td>—</td></tr>
                                <tr><td>10 – 49</td><td>€5.99</td><td class="mkd-save">14% off</td></tr>
                                <tr><td>50 – 199</td><td>€4.99</td><td class="mkd-save">29% off</td></tr>
                                <tr class="mkd-vol-highlight"><td>200+</td><td>€3.99</td><td class="mkd-save">43% off</td></tr>
                            </tbody>
                        </table>
                        <p class="mkd-volume-note"><i class="fas fa-info-circle"></i> <?php echo __('msdetail_volume_note', ['url' => e(SITE_URL) . '/contact-us/']); ?></p>
                    </div>

                    <!-- Payment Methods -->
                    <div class="mkd-payments-card">
                        <h4><i class="fas fa-credit-card"></i> <?php echo e(__('msdetail_payments_title')); ?></h4>
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
                <span class="section-tag"><i class="fas fa-th-large"></i> <?php echo e(__('msdetail_related_tag')); ?></span>
                <h2><?php echo e(__('msdetail_related_title')); ?></h2>
                <p><?php echo e(__('msdetail_related_desc')); ?></p>
            </div>
            <div class="mkd-related-grid">
                <div class="mkd-related-card">
                    <div class="mkd-rc-icon"><i class="fab fa-microsoft"></i></div>
                    <h4>Windows 10/11 Pro — 1 PC (OEM)</h4>
                    <p>OEM license — ties to one device, non-transferable. Budget option.</p>
                    <div class="mkd-rc-price">€3.99</div>
                    <a href="#" class="mkd-rc-btn"><?php echo e(__('msdetail_related_view')); ?> <i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="mkd-related-card">
                    <div class="mkd-rc-icon"><i class="fab fa-microsoft"></i></div>
                    <h4>Office 2021 Professional Plus</h4>
                    <p>Full Office suite — Word, Excel, PowerPoint, Outlook, Access, Publisher.</p>
                    <div class="mkd-rc-price">€3.50</div>
                    <a href="#" class="mkd-rc-btn"><?php echo e(__('msdetail_related_view')); ?> <i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="mkd-related-card">
                    <div class="mkd-rc-icon"><i class="fab fa-microsoft"></i></div>
                    <h4>Windows Server 2022 Standard</h4>
                    <p>Latest server OS — Hyper-V, containers, Azure hybrid support.</p>
                    <div class="mkd-rc-price">€12.00</div>
                    <a href="#" class="mkd-rc-btn"><?php echo e(__('msdetail_related_view')); ?> <i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="mkd-related-card">
                    <div class="mkd-rc-icon"><i class="fab fa-microsoft"></i></div>
                    <h4>Visual Studio 2022 Professional</h4>
                    <p>Full IDE for .NET, C++, Python, and web development.</p>
                    <div class="mkd-rc-price">€12.00</div>
                    <a href="#" class="mkd-rc-btn"><?php echo e(__('msdetail_related_view')); ?> <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ FAQ ═══════════════ -->
    <section class="mkd-faq reveal">
        <div class="container">
            <div class="section-header">
                <span class="section-tag"><i class="fas fa-question-circle"></i> <?php echo e(__('msdetail_faq_tag')); ?></span>
                <h2><?php echo e(__('msdetail_faq_title')); ?></h2>
            </div>
            <div class="faq-layout faq-layout--full" style="max-width:800px;margin:0 auto;">
                <div class="faq-panels">
                    <div class="faq-panel active" id="faq-mkd-all">
                        <div class="faq-item">
                            <button class="faq-question"><span><?php echo e(__('msdetail_faq_q1')); ?></span><i class="fas fa-chevron-down"></i></button>
                            <div class="faq-answer"><p><?php echo __('msdetail_faq_a1'); ?></p></div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question"><span><?php echo e(__('msdetail_faq_q2')); ?></span><i class="fas fa-chevron-down"></i></button>
                            <div class="faq-answer"><p><?php echo __('msdetail_faq_a2'); ?></p></div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question"><span><?php echo e(__('msdetail_faq_q3')); ?></span><i class="fas fa-chevron-down"></i></button>
                            <div class="faq-answer"><p><?php echo e(__('msdetail_faq_a3')); ?></p></div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question"><span><?php echo e(__('msdetail_faq_q4')); ?></span><i class="fas fa-chevron-down"></i></button>
                            <div class="faq-answer"><p><?php echo e(__('msdetail_faq_a4')); ?></p></div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question"><span><?php echo e(__('msdetail_faq_q5')); ?></span><i class="fas fa-chevron-down"></i></button>
                            <div class="faq-answer"><p><?php echo e(__('msdetail_faq_a5')); ?></p></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
