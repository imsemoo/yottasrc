<?php
/**
 * YottaSrc — Microsoft Licenses Hub
 * ====================================
 * Full Microsoft product catalog — Windows, Office, Server, Visual Studio,
 * Project, Visio. Browse categories, compare editions, order via support.
 */
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/topbar.php';
?>

    <!-- ═══════════════ HERO ═══════════════ -->
    <section class="page-hero ms-hero">
        <div class="container">
            <div class="page-hero-split">
                <div class="page-hero-content">
                    <div class="page-breadcrumb">
                        <a href="<?php echo e(SITE_URL); ?>/"><?php echo e(__('breadcrumb_home')); ?></a>
                        <i class="fas fa-chevron-right"></i>
                        <a href="<?php echo e(SITE_URL); ?>/microsoft-products/"><?php echo e(__('mslicenses_breadcrumb_ms')); ?></a>
                        <i class="fas fa-chevron-right"></i>
                        <span><?php echo e(__('mslicenses_breadcrumb')); ?></span>
                    </div>
                    <h1><?php echo __('mslicenses_hero_title'); ?></h1>
                    <p class="page-hero-desc">
                        <?php echo e(__('mslicenses_hero_desc')); ?>
                    </p>
                    <div class="page-hero-ctas">
                        <a href="#catalog" class="btn-primary"><?php echo e(__('mslicenses_hero_cta_primary')); ?> <i class="fas fa-arrow-down"></i></a>
                        <a href="<?php echo e(SITE_URL); ?>/contact-us/" class="btn-secondary"><i class="fas fa-headset"></i> <?php echo e(__('mslicenses_hero_cta_secondary')); ?></a>
                    </div>
                    <div class="page-hero-badges">
                        <div class="hero-badge-item"><i class="fas fa-check"></i> <?php echo e(__('mslicenses_hero_badge1')); ?></div>
                        <div class="hero-badge-item"><i class="fas fa-check"></i> <?php echo e(__('mslicenses_hero_badge2')); ?></div>
                        <div class="hero-badge-item"><i class="fas fa-check"></i> <?php echo e(__('mslicenses_hero_badge3')); ?></div>
                        <div class="hero-badge-item"><i class="fas fa-check"></i> <?php echo e(__('mslicenses_hero_badge4')); ?></div>
                    </div>
                </div>
                <div class="page-hero-visual">
                    <svg viewBox="0 0 440 400" fill="none" xmlns="http://www.w3.org/2000/svg" class="hero-illustration" aria-label="Microsoft products catalog">
                        <!-- Window Frame -->
                        <rect x="20" y="20" width="400" height="360" rx="16" fill="var(--bg-card)" stroke="var(--border-primary)" stroke-width="1.5"/>
                        <rect x="20" y="20" width="400" height="38" rx="16" fill="var(--bg-tertiary)"/>
                        <rect x="20" y="42" width="400" height="16" fill="var(--bg-tertiary)"/>
                        <circle cx="42" cy="39" r="5" fill="var(--brand-error)" opacity="0.6"/>
                        <circle cx="58" cy="39" r="5" fill="var(--brand-warning)" opacity="0.6"/>
                        <circle cx="74" cy="39" r="5" fill="var(--brand-secondary)" opacity="0.6"/>
                        <text x="220" y="44" text-anchor="middle" fill="var(--text-tertiary)" font-size="11" font-family="var(--font-mono)" font-weight="600" opacity="0.6">Microsoft Licenses — Product Catalog</text>

                        <!-- Category grid header -->
                        <text x="40" y="82" fill="var(--brand-primary)" font-size="9" font-family="var(--font-display)" font-weight="700" letter-spacing="0.8" opacity="0.7">PRODUCT CATEGORIES</text>
                        <line x1="40" y1="88" x2="400" y2="88" stroke="var(--border-primary)" stroke-width="0.6"/>

                        <!-- Windows card -->
                        <rect x="40" y="96" width="110" height="90" rx="10" fill="var(--bg-tertiary)"/>
                        <rect x="56" y="108" width="28" height="28" rx="6" fill="var(--brand-primary)" opacity="0.12"/>
                        <text x="70" y="126" text-anchor="middle" fill="var(--brand-primary)" font-size="16" opacity="0.6">⊞</text>
                        <text x="56" y="152" fill="var(--text-secondary)" font-size="8.5" font-family="var(--font-display)" font-weight="700" opacity="0.8">Windows</text>
                        <text x="56" y="165" fill="var(--text-tertiary)" font-size="6.5" font-family="var(--font-mono)" opacity="0.5">From €3.50</text>
                        <rect x="56" y="172" width="38" height="10" rx="5" fill="var(--brand-secondary)" opacity="0.15"/>
                        <text x="75" y="180" text-anchor="middle" fill="var(--brand-secondary)" font-size="5.5" font-family="var(--font-mono)" font-weight="600" opacity="0.6">In Stock</text>

                        <!-- Office card -->
                        <rect x="165" y="96" width="110" height="90" rx="10" fill="var(--bg-tertiary)"/>
                        <rect x="181" y="108" width="28" height="28" rx="6" fill="var(--brand-warning)" opacity="0.12"/>
                        <text x="195" y="127" text-anchor="middle" fill="var(--brand-warning)" font-size="14" opacity="0.6">📋</text>
                        <text x="181" y="152" fill="var(--text-secondary)" font-size="8.5" font-family="var(--font-display)" font-weight="700" opacity="0.8">Office</text>
                        <text x="181" y="165" fill="var(--text-tertiary)" font-size="6.5" font-family="var(--font-mono)" opacity="0.5">From €1.50</text>
                        <rect x="181" y="172" width="42" height="10" rx="5" fill="var(--brand-primary)" opacity="0.15"/>
                        <text x="202" y="180" text-anchor="middle" fill="var(--brand-primary)" font-size="5.5" font-family="var(--font-mono)" font-weight="600" opacity="0.6">Best Sell</text>

                        <!-- Server card -->
                        <rect x="290" y="96" width="110" height="90" rx="10" fill="var(--bg-tertiary)"/>
                        <rect x="306" y="108" width="28" height="28" rx="6" fill="var(--brand-accent)" opacity="0.12"/>
                        <text x="320" y="127" text-anchor="middle" fill="var(--brand-accent)" font-size="14" opacity="0.6">🖥</text>
                        <text x="306" y="152" fill="var(--text-secondary)" font-size="8.5" font-family="var(--font-display)" font-weight="700" opacity="0.8">Server</text>
                        <text x="306" y="165" fill="var(--text-tertiary)" font-size="6.5" font-family="var(--font-mono)" opacity="0.5">From €8.00</text>
                        <rect x="306" y="172" width="38" height="10" rx="5" fill="var(--brand-secondary)" opacity="0.15"/>
                        <text x="325" y="180" text-anchor="middle" fill="var(--brand-secondary)" font-size="5.5" font-family="var(--font-mono)" font-weight="600" opacity="0.6">In Stock</text>

                        <!-- Second row: VS, Project, Visio -->
                        <rect x="40" y="200" width="110" height="90" rx="10" fill="var(--bg-tertiary)"/>
                        <rect x="56" y="212" width="28" height="28" rx="6" fill="var(--brand-accent)" opacity="0.12"/>
                        <text x="70" y="230" text-anchor="middle" fill="var(--brand-accent)" font-size="14" opacity="0.6">🔧</text>
                        <text x="56" y="256" fill="var(--text-secondary)" font-size="8.5" font-family="var(--font-display)" font-weight="700" opacity="0.8">Visual Studio</text>
                        <text x="56" y="269" fill="var(--text-tertiary)" font-size="6.5" font-family="var(--font-mono)" opacity="0.5">From €12.00</text>

                        <rect x="165" y="200" width="110" height="90" rx="10" fill="var(--bg-tertiary)"/>
                        <rect x="181" y="212" width="28" height="28" rx="6" fill="var(--brand-secondary)" opacity="0.12"/>
                        <text x="195" y="230" text-anchor="middle" fill="var(--brand-secondary)" font-size="14" opacity="0.6">📊</text>
                        <text x="181" y="256" fill="var(--text-secondary)" font-size="8.5" font-family="var(--font-display)" font-weight="700" opacity="0.8">Project</text>
                        <text x="181" y="269" fill="var(--text-tertiary)" font-size="6.5" font-family="var(--font-mono)" opacity="0.5">From €4.00</text>

                        <rect x="290" y="200" width="110" height="90" rx="10" fill="var(--bg-tertiary)"/>
                        <rect x="306" y="212" width="28" height="28" rx="6" fill="var(--brand-warning)" opacity="0.12"/>
                        <text x="320" y="230" text-anchor="middle" fill="var(--brand-warning)" font-size="14" opacity="0.6">📐</text>
                        <text x="306" y="256" fill="var(--text-secondary)" font-size="8.5" font-family="var(--font-display)" font-weight="700" opacity="0.8">Visio</text>
                        <text x="306" y="269" fill="var(--text-tertiary)" font-size="6.5" font-family="var(--font-mono)" opacity="0.5">From €4.50</text>

                        <!-- Stats bar -->
                        <rect x="40" y="304" width="360" height="28" rx="8" fill="var(--bg-card)" stroke="var(--border-primary)" stroke-width="0.5"/>
                        <text x="220" y="322" text-anchor="middle" fill="var(--text-tertiary)" font-size="8" font-family="var(--font-mono)" opacity="0.5">50+ Products · 6 Categories · Instant Delivery · Official Activation</text>

                        <!-- Floating badge -->
                        <rect x="350" y="4" width="86" height="36" rx="10" fill="var(--bg-card)" stroke="var(--border-primary)" stroke-width="1">
                            <animate attributeName="y" values="4;10;4" dur="5s" repeatCount="indefinite"/>
                        </rect>
                        <text x="368" y="19" fill="var(--text-tertiary)" font-size="7" font-family="var(--font-mono)" font-weight="600" opacity="0.6">
                            PRODUCTS
                            <animate attributeName="y" values="19;25;19" dur="5s" repeatCount="indefinite"/>
                        </text>
                        <text x="368" y="33" fill="var(--brand-secondary)" font-size="13" font-family="var(--font-display)" font-weight="800" opacity="0.8">
                            50+
                            <animate attributeName="y" values="33;39;33" dur="5s" repeatCount="indefinite"/>
                        </text>

                        <circle cx="8" cy="120" r="3" fill="var(--brand-primary)" opacity="0.25">
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
            <span class="partners-label"><?php echo e(__('mslicenses_partners_label')); ?></span>
            <div class="partners-logos">
                <span class="partner-logo"><i class="fab fa-windows"></i> Windows 11</span>
                <span class="partner-logo"><i class="fab fa-windows"></i> Windows 10</span>
                <span class="partner-logo"><i class="fab fa-microsoft"></i> Office 365</span>
                <span class="partner-logo"><i class="fab fa-microsoft"></i> Office 2021</span>
                <span class="partner-logo"><i class="fab fa-windows"></i> Server 2022</span>
                <span class="partner-logo"><i class="fab fa-microsoft"></i> Visual Studio</span>
                <span class="partner-logo"><i class="fab fa-microsoft"></i> Project</span>
                <span class="partner-logo"><i class="fab fa-microsoft"></i> Visio</span>
            </div>
        </div>
    </section>

    <!-- ═══════════════ CATEGORY NAVIGATION ═══════════════ -->
    <section class="ms-cat-nav reveal" id="catalog">
        <div class="container">
            <div class="section-header">
                <div class="section-tag"><?php echo e(__('mslicenses_catalog_tag')); ?></div>
                <h2><?php echo e(__('mslicenses_catalog_title')); ?></h2>
                <p><?php echo e(__('mslicenses_catalog_desc')); ?></p>
            </div>

            <!-- Search Bar -->
            <div class="ms-search-wrap">
                <i class="fas fa-search ms-search-icon"></i>
                <input type="text" id="msProductSearch" class="ms-search-input" placeholder="<?php echo e(__('mslicenses_search_ph')); ?>" autocomplete="off">
                <span class="ms-search-clear" id="msSearchClear" title="Clear search">&times;</span>
            </div>

            <!-- Category Cards -->
            <div class="ms-cat-grid">
                <a href="#cat-windows" class="ms-cat-card">
                    <div class="ms-cat-card-icon"><i class="fab fa-windows"></i></div>
                    <div class="ms-cat-card-body">
                        <h3><?php echo e(__('mslicenses_cat_windows')); ?></h3>
                        <span class="ms-cat-count">7 Products</span>
                        <span class="ms-cat-price">From €3.50</span>
                    </div>
                    <i class="fas fa-arrow-right ms-cat-arrow"></i>
                </a>
                <a href="#cat-office" class="ms-cat-card">
                    <div class="ms-cat-card-icon icon-amber"><i class="fab fa-microsoft"></i></div>
                    <div class="ms-cat-card-body">
                        <h3><?php echo e(__('mslicenses_cat_office')); ?></h3>
                        <span class="ms-cat-count">7 Products</span>
                        <span class="ms-cat-price">From €1.50</span>
                    </div>
                    <i class="fas fa-arrow-right ms-cat-arrow"></i>
                </a>
                <a href="#cat-server" class="ms-cat-card">
                    <div class="ms-cat-card-icon icon-purple"><i class="fas fa-server"></i></div>
                    <div class="ms-cat-card-body">
                        <h3><?php echo e(__('mslicenses_cat_server')); ?></h3>
                        <span class="ms-cat-count">5 Products</span>
                        <span class="ms-cat-price">From €8.00</span>
                    </div>
                    <i class="fas fa-arrow-right ms-cat-arrow"></i>
                </a>
                <a href="#cat-devtools" class="ms-cat-card">
                    <div class="ms-cat-card-icon icon-green"><i class="fas fa-tools"></i></div>
                    <div class="ms-cat-card-body">
                        <h3><?php echo __('mslicenses_cat_devtools'); ?></h3>
                        <span class="ms-cat-count">6 Products</span>
                        <span class="ms-cat-price">From €3.50</span>
                    </div>
                    <i class="fas fa-arrow-right ms-cat-arrow"></i>
                </a>
            </div>

            <!-- No results message -->
            <div class="ms-search-empty" id="msSearchEmpty" hidden>
                <i class="fas fa-search"></i>
                <p><?php echo e(__('mslicenses_search_empty')); ?></p>
            </div>
        </div>
    </section>

    <!-- ═══════════════ PRODUCT CATALOG ═══════════════ -->
    <section class="ms-products reveal">
        <div class="container">

            <!-- Windows Licenses -->
            <div class="ms-category" id="cat-windows">
                <div class="ms-category-header">
                    <div class="ms-category-icon"><i class="fab fa-windows"></i></div>
                    <div class="ms-category-info">
                        <h3><?php echo e(__('mslicenses_windows_title')); ?></h3>
                        <p><?php echo e(__('mslicenses_windows_desc')); ?></p>
                    </div>
                </div>
                <div class="ms-product-grid">
                    <div class="ms-product-card">
                        <img src="<?php echo BASE_PATH; ?>/static/images/products/windows-11.svg" alt="Windows 11 Pro" class="ms-product-img">
                        <div class="ms-product-name">Windows 11 Pro <span class="ms-product-badge">Retail</span></div>
                        <p class="ms-product-desc">Full retail key — instant online activation via Microsoft servers.</p>
                        <div class="ms-product-price">€6.50</div>
                        <p class="ms-reseller-note">Reseller price from €5.00 (10+ keys)</p>
                        <button type="button" class="ms-order-btn"><?php echo e(__('mslicenses_order_btn')); ?> <i class="fas fa-arrow-right"></i></button>
                    </div>
                    <div class="ms-product-card">
                        <img src="<?php echo BASE_PATH; ?>/static/images/products/windows-11.svg" alt="Windows 11 Pro" class="ms-product-img">
                        <div class="ms-product-name">Windows 11 Pro <span class="ms-product-badge badge-alt">Phone</span></div>
                        <p class="ms-product-desc">Genuine key — activated via Microsoft's free automated phone line.</p>
                        <div class="ms-product-price">€3.50</div>
                        <p class="ms-reseller-note">Reseller price from €2.50 (10+ keys)</p>
                        <button type="button" class="ms-order-btn"><?php echo e(__('mslicenses_order_btn')); ?> <i class="fas fa-arrow-right"></i></button>
                    </div>
                    <div class="ms-product-card">
                        <img src="<?php echo BASE_PATH; ?>/static/images/products/windows-11.svg" alt="Windows 11 Home" class="ms-product-img">
                        <div class="ms-product-name">Windows 11 Home <span class="ms-product-badge">Retail</span></div>
                        <p class="ms-product-desc">Home edition retail key with instant online activation.</p>
                        <div class="ms-product-price">€5.50</div>
                        <p class="ms-reseller-note">Reseller price from €4.00 (10+ keys)</p>
                        <button type="button" class="ms-order-btn"><?php echo e(__('mslicenses_order_btn')); ?> <i class="fas fa-arrow-right"></i></button>
                    </div>
                    <div class="ms-product-card">
                        <img src="<?php echo BASE_PATH; ?>/static/images/products/windows-10.svg" alt="Windows 10 Pro" class="ms-product-img">
                        <div class="ms-product-name">Windows 10 Pro <span class="ms-product-badge">Retail</span></div>
                        <p class="ms-product-desc">Full retail key for Windows 10 Professional — online activation.</p>
                        <div class="ms-product-price">€5.00</div>
                        <p class="ms-reseller-note">Reseller price from €3.50 (10+ keys)</p>
                        <button type="button" class="ms-order-btn"><?php echo e(__('mslicenses_order_btn')); ?> <i class="fas fa-arrow-right"></i></button>
                    </div>
                    <div class="ms-product-card">
                        <img src="<?php echo BASE_PATH; ?>/static/images/products/windows-10.svg" alt="Windows 10 Pro" class="ms-product-img">
                        <div class="ms-product-name">Windows 10 Pro <span class="ms-product-badge badge-alt">Phone</span></div>
                        <p class="ms-product-desc">Genuine key activated via Microsoft's free automated phone system.</p>
                        <div class="ms-product-price">€3.50</div>
                        <p class="ms-reseller-note">Reseller price from €2.50 (10+ keys)</p>
                        <button type="button" class="ms-order-btn"><?php echo e(__('mslicenses_order_btn')); ?> <i class="fas fa-arrow-right"></i></button>
                    </div>
                    <div class="ms-product-card">
                        <img src="<?php echo BASE_PATH; ?>/static/images/products/windows-10.svg" alt="Windows 10 Home" class="ms-product-img">
                        <div class="ms-product-name">Windows 10 Home <span class="ms-product-badge">Retail</span></div>
                        <p class="ms-product-desc">Home edition retail key with instant online activation.</p>
                        <div class="ms-product-price">€4.50</div>
                        <p class="ms-reseller-note">Reseller price from €3.00 (10+ keys)</p>
                        <button type="button" class="ms-order-btn"><?php echo e(__('mslicenses_order_btn')); ?> <i class="fas fa-arrow-right"></i></button>
                    </div>
                    <div class="ms-product-card">
                        <img src="<?php echo BASE_PATH; ?>/static/images/products/windows-10.svg" alt="Windows 10 Enterprise" class="ms-product-img">
                        <div class="ms-product-name">Windows 10 Enterprise <span class="ms-product-badge badge-alt">LTSC</span></div>
                        <p class="ms-product-desc">Long-Term Servicing Channel — ideal for enterprise and kiosk deployments.</p>
                        <div class="ms-product-price">€8.00</div>
                        <p class="ms-reseller-note">Reseller price from €6.00 (10+ keys)</p>
                        <button type="button" class="ms-order-btn"><?php echo e(__('mslicenses_order_btn')); ?> <i class="fas fa-arrow-right"></i></button>
                    </div>
                </div>
            </div>

            <!-- Office Licenses -->
            <div class="ms-category" id="cat-office">
                <div class="ms-category-header">
                    <div class="ms-category-icon icon-amber"><i class="fab fa-microsoft"></i></div>
                    <div class="ms-category-info">
                        <h3><?php echo e(__('mslicenses_office_title')); ?></h3>
                        <p><?php echo e(__('mslicenses_office_desc')); ?></p>
                    </div>
                </div>
                <div class="ms-product-grid">
                    <div class="ms-product-card">
                        <img src="<?php echo BASE_PATH; ?>/static/images/products/office-365.svg" alt="Office 365 Personal" class="ms-product-img">
                        <div class="ms-product-name">Office 365 Personal <span class="ms-product-badge badge-alt">1 Year</span></div>
                        <p class="ms-product-desc">1 user subscription with Word, Excel, PowerPoint, Outlook, and 1TB OneDrive.</p>
                        <div class="ms-product-price">€1.50</div>
                        <p class="ms-reseller-note">Reseller price from €1.00 (10+ keys)</p>
                        <button type="button" class="ms-order-btn"><?php echo e(__('mslicenses_order_btn')); ?> <i class="fas fa-arrow-right"></i></button>
                    </div>
                    <div class="ms-product-card">
                        <img src="<?php echo BASE_PATH; ?>/static/images/products/office-365.svg" alt="Office 365 Family" class="ms-product-img">
                        <div class="ms-product-name">Office 365 Family <span class="ms-product-badge badge-alt">1 Year</span></div>
                        <p class="ms-product-desc">Up to 6 users — includes all Office apps, 6TB OneDrive total.</p>
                        <div class="ms-product-price">€3.00</div>
                        <p class="ms-reseller-note">Reseller price from €2.00 (10+ keys)</p>
                        <button type="button" class="ms-order-btn"><?php echo e(__('mslicenses_order_btn')); ?> <i class="fas fa-arrow-right"></i></button>
                    </div>
                    <div class="ms-product-card">
                        <img src="<?php echo BASE_PATH; ?>/static/images/products/office-2021.svg" alt="Office 2021 Pro Plus" class="ms-product-img">
                        <div class="ms-product-name">Office 2021 Professional Plus <span class="ms-product-badge">Lifetime</span></div>
                        <p class="ms-product-desc">One-time purchase — Word, Excel, PowerPoint, Outlook, Access, Publisher.</p>
                        <div class="ms-product-price">€3.50</div>
                        <p class="ms-reseller-note">Reseller price from €2.50 (10+ keys)</p>
                        <button type="button" class="ms-order-btn"><?php echo e(__('mslicenses_order_btn')); ?> <i class="fas fa-arrow-right"></i></button>
                    </div>
                    <div class="ms-product-card">
                        <img src="<?php echo BASE_PATH; ?>/static/images/products/office-2021.svg" alt="Office 2021 Pro Plus" class="ms-product-img">
                        <div class="ms-product-name">Office 2021 Pro Plus <span class="ms-product-badge badge-alt">Phone</span></div>
                        <p class="ms-product-desc">Same Office suite — activated via Microsoft's free phone system.</p>
                        <div class="ms-product-price">€2.00</div>
                        <p class="ms-reseller-note">Reseller price from €1.50 (10+ keys)</p>
                        <button type="button" class="ms-order-btn"><?php echo e(__('mslicenses_order_btn')); ?> <i class="fas fa-arrow-right"></i></button>
                    </div>
                    <div class="ms-product-card">
                        <img src="<?php echo BASE_PATH; ?>/static/images/products/office-2019.svg" alt="Office 2019 Pro Plus" class="ms-product-img">
                        <div class="ms-product-name">Office 2019 Professional Plus <span class="ms-product-badge">Lifetime</span></div>
                        <p class="ms-product-desc">Legacy version — reliable and lightweight for older hardware.</p>
                        <div class="ms-product-price">€2.50</div>
                        <p class="ms-reseller-note">Reseller price from €1.50 (10+ keys)</p>
                        <button type="button" class="ms-order-btn"><?php echo e(__('mslicenses_order_btn')); ?> <i class="fas fa-arrow-right"></i></button>
                    </div>
                    <div class="ms-product-card">
                        <img src="<?php echo BASE_PATH; ?>/static/images/products/office-2016.svg" alt="Office 2016 Pro Plus" class="ms-product-img">
                        <div class="ms-product-name">Office 2016 Professional Plus <span class="ms-product-badge badge-alt">Phone</span></div>
                        <p class="ms-product-desc">Budget-friendly option with phone activation. Full Office suite.</p>
                        <div class="ms-product-price">€1.50</div>
                        <p class="ms-reseller-note">Reseller price from €1.00 (10+ keys)</p>
                        <button type="button" class="ms-order-btn"><?php echo e(__('mslicenses_order_btn')); ?> <i class="fas fa-arrow-right"></i></button>
                    </div>
                    <div class="ms-product-card">
                        <img src="<?php echo BASE_PATH; ?>/static/images/products/outlook.svg" alt="Outlook 2021" class="ms-product-img">
                        <div class="ms-product-name">Outlook 2021 <span class="ms-product-badge">Lifetime</span></div>
                        <p class="ms-product-desc">Standalone Outlook email client — one-time purchase, no subscription.</p>
                        <div class="ms-product-price">€2.00</div>
                        <p class="ms-reseller-note">Reseller price from €1.50 (10+ keys)</p>
                        <button type="button" class="ms-order-btn"><?php echo e(__('mslicenses_order_btn')); ?> <i class="fas fa-arrow-right"></i></button>
                    </div>
                </div>
            </div>

            <!-- Windows Server -->
            <div class="ms-category" id="cat-server">
                <div class="ms-category-header">
                    <div class="ms-category-icon icon-purple"><i class="fas fa-server"></i></div>
                    <div class="ms-category-info">
                        <h3><?php echo e(__('mslicenses_server_title')); ?></h3>
                        <p><?php echo e(__('mslicenses_server_desc')); ?></p>
                    </div>
                </div>
                <div class="ms-product-grid">
                    <div class="ms-product-card">
                        <img src="<?php echo BASE_PATH; ?>/static/images/products/windows-server.svg" alt="Windows Server 2022" class="ms-product-img">
                        <div class="ms-product-name">Windows Server 2022 Standard <span class="ms-product-badge">Retail</span></div>
                        <p class="ms-product-desc">Latest server OS — Hyper-V, containers, Azure hybrid support.</p>
                        <div class="ms-product-price">€12.00</div>
                        <p class="ms-reseller-note">Reseller price from €9.00 (10+ keys)</p>
                        <button type="button" class="ms-order-btn"><?php echo e(__('mslicenses_order_btn')); ?> <i class="fas fa-arrow-right"></i></button>
                    </div>
                    <div class="ms-product-card">
                        <img src="<?php echo BASE_PATH; ?>/static/images/products/windows-server.svg" alt="Windows Server 2022" class="ms-product-img">
                        <div class="ms-product-name">Windows Server 2022 Datacenter <span class="ms-product-badge">Retail</span></div>
                        <p class="ms-product-desc">Unlimited VMs, shielded VMs, Storage Spaces Direct, and full Hyper-V.</p>
                        <div class="ms-product-price">€18.00</div>
                        <p class="ms-reseller-note">Reseller price from €14.00 (10+ keys)</p>
                        <button type="button" class="ms-order-btn"><?php echo e(__('mslicenses_order_btn')); ?> <i class="fas fa-arrow-right"></i></button>
                    </div>
                    <div class="ms-product-card">
                        <img src="<?php echo BASE_PATH; ?>/static/images/products/windows-server.svg" alt="Windows Server 2019" class="ms-product-img">
                        <div class="ms-product-name">Windows Server 2019 Standard <span class="ms-product-badge">Retail</span></div>
                        <p class="ms-product-desc">Proven server OS — Active Directory, IIS, DNS, and Hyper-V.</p>
                        <div class="ms-product-price">€10.00</div>
                        <p class="ms-reseller-note">Reseller price from €7.50 (10+ keys)</p>
                        <button type="button" class="ms-order-btn"><?php echo e(__('mslicenses_order_btn')); ?> <i class="fas fa-arrow-right"></i></button>
                    </div>
                    <div class="ms-product-card">
                        <img src="<?php echo BASE_PATH; ?>/static/images/products/windows-server.svg" alt="Windows Server 2019" class="ms-product-img">
                        <div class="ms-product-name">Windows Server 2019 Datacenter <span class="ms-product-badge">Retail</span></div>
                        <p class="ms-product-desc">Full datacenter features with unlimited containers and VMs.</p>
                        <div class="ms-product-price">€15.00</div>
                        <p class="ms-reseller-note">Reseller price from €11.00 (10+ keys)</p>
                        <button type="button" class="ms-order-btn"><?php echo e(__('mslicenses_order_btn')); ?> <i class="fas fa-arrow-right"></i></button>
                    </div>
                    <div class="ms-product-card">
                        <img src="<?php echo BASE_PATH; ?>/static/images/products/sql-server.svg" alt="SQL Server 2019" class="ms-product-img">
                        <div class="ms-product-name">SQL Server 2019 Standard <span class="ms-product-badge">Retail</span></div>
                        <p class="ms-product-desc">Enterprise database engine — full T-SQL, reporting, and analytics.</p>
                        <div class="ms-product-price">€8.00</div>
                        <p class="ms-reseller-note">Reseller price from €6.00 (10+ keys)</p>
                        <button type="button" class="ms-order-btn"><?php echo e(__('mslicenses_order_btn')); ?> <i class="fas fa-arrow-right"></i></button>
                    </div>
                </div>
            </div>

            <!-- Visual Studio, Project, Visio -->
            <div class="ms-category" id="cat-devtools">
                <div class="ms-category-header">
                    <div class="ms-category-icon icon-green"><i class="fas fa-tools"></i></div>
                    <div class="ms-category-info">
                        <h3><?php echo __('mslicenses_devtools_title'); ?></h3>
                        <p><?php echo e(__('mslicenses_devtools_desc')); ?></p>
                    </div>
                </div>
                <div class="ms-product-grid">
                    <div class="ms-product-card">
                        <img src="<?php echo BASE_PATH; ?>/static/images/products/visual-studio.svg" alt="Visual Studio 2022" class="ms-product-img">
                        <div class="ms-product-name">Visual Studio 2022 Professional <span class="ms-product-badge">Lifetime</span></div>
                        <p class="ms-product-desc">Full IDE for .NET, C++, Python, and web development.</p>
                        <div class="ms-product-price">€12.00</div>
                        <p class="ms-reseller-note">Reseller price from €9.00 (10+ keys)</p>
                        <button type="button" class="ms-order-btn"><?php echo e(__('mslicenses_order_btn')); ?> <i class="fas fa-arrow-right"></i></button>
                    </div>
                    <div class="ms-product-card">
                        <img src="<?php echo BASE_PATH; ?>/static/images/products/visual-studio.svg" alt="Visual Studio 2022" class="ms-product-img">
                        <div class="ms-product-name">Visual Studio 2022 Enterprise <span class="ms-product-badge">Lifetime</span></div>
                        <p class="ms-product-desc">Enterprise IDE — IntelliTest, Live Unit Testing, Architecture tools.</p>
                        <div class="ms-product-price">€18.00</div>
                        <p class="ms-reseller-note">Reseller price from €14.00 (10+ keys)</p>
                        <button type="button" class="ms-order-btn"><?php echo e(__('mslicenses_order_btn')); ?> <i class="fas fa-arrow-right"></i></button>
                    </div>
                    <div class="ms-product-card">
                        <img src="<?php echo BASE_PATH; ?>/static/images/products/project.svg" alt="Project 2021" class="ms-product-img">
                        <div class="ms-product-name">Project 2021 Professional <span class="ms-product-badge">Lifetime</span></div>
                        <p class="ms-product-desc">Project management with Gantt charts, timelines, and resource tracking.</p>
                        <div class="ms-product-price">€4.00</div>
                        <p class="ms-reseller-note">Reseller price from €3.00 (10+ keys)</p>
                        <button type="button" class="ms-order-btn"><?php echo e(__('mslicenses_order_btn')); ?> <i class="fas fa-arrow-right"></i></button>
                    </div>
                    <div class="ms-product-card">
                        <img src="<?php echo BASE_PATH; ?>/static/images/products/project.svg" alt="Project 2019" class="ms-product-img">
                        <div class="ms-product-name">Project 2019 Professional <span class="ms-product-badge">Lifetime</span></div>
                        <p class="ms-product-desc">Legacy version — full project management features at a lower price.</p>
                        <div class="ms-product-price">€3.50</div>
                        <p class="ms-reseller-note">Reseller price from €2.50 (10+ keys)</p>
                        <button type="button" class="ms-order-btn"><?php echo e(__('mslicenses_order_btn')); ?> <i class="fas fa-arrow-right"></i></button>
                    </div>
                    <div class="ms-product-card">
                        <img src="<?php echo BASE_PATH; ?>/static/images/products/visio.svg" alt="Visio 2021" class="ms-product-img">
                        <div class="ms-product-name">Visio 2021 Professional <span class="ms-product-badge">Lifetime</span></div>
                        <p class="ms-product-desc">Diagrams, flowcharts, and network topology visualization.</p>
                        <div class="ms-product-price">€4.50</div>
                        <p class="ms-reseller-note">Reseller price from €3.50 (10+ keys)</p>
                        <button type="button" class="ms-order-btn"><?php echo e(__('mslicenses_order_btn')); ?> <i class="fas fa-arrow-right"></i></button>
                    </div>
                    <div class="ms-product-card">
                        <img src="<?php echo BASE_PATH; ?>/static/images/products/visio.svg" alt="Visio 2019" class="ms-product-img">
                        <div class="ms-product-name">Visio 2019 Professional <span class="ms-product-badge">Lifetime</span></div>
                        <p class="ms-product-desc">Legacy version with full diagramming and visualization tools.</p>
                        <div class="ms-product-price">€3.50</div>
                        <p class="ms-reseller-note">Reseller price from €2.50 (10+ keys)</p>
                        <button type="button" class="ms-order-btn"><?php echo e(__('mslicenses_order_btn')); ?> <i class="fas fa-arrow-right"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ WHY BUY FROM US ═══════════════ -->
    <section class="cp-benefits ms-whybuy reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag"><?php echo e(__('mslicenses_why_tag')); ?></div>
                <h2><?php echo e(__('mslicenses_why_title')); ?></h2>
                <p><?php echo e(__('mslicenses_why_desc')); ?></p>
            </div>

            <div class="cp-benefits-grid">
                <div class="cp-security-card">
                    <div class="cp-security-icon"><i class="fas fa-shield-alt"></i></div>
                    <h4><?php echo e(__('mslicenses_why_genuine_title')); ?></h4>
                    <p><?php echo e(__('mslicenses_why_genuine_desc')); ?></p>
                </div>
                <div class="cp-security-card">
                    <div class="cp-security-icon icon-green"><i class="fas fa-bolt"></i></div>
                    <h4><?php echo e(__('mslicenses_why_delivery_title')); ?></h4>
                    <p><?php echo e(__('mslicenses_why_delivery_desc')); ?></p>
                </div>
                <div class="cp-security-card">
                    <div class="cp-security-icon icon-purple"><i class="fas fa-sync-alt"></i></div>
                    <h4><?php echo e(__('mslicenses_why_replace_title')); ?></h4>
                    <p><?php echo e(__('mslicenses_why_replace_desc')); ?></p>
                </div>
                <div class="cp-security-card">
                    <div class="cp-security-icon icon-amber"><i class="fas fa-tags"></i></div>
                    <h4><?php echo e(__('mslicenses_why_price_title')); ?></h4>
                    <p><?php echo e(__('mslicenses_why_price_desc')); ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ HOW TO ORDER ═══════════════ -->
    <section class="ms-steps reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag"><?php echo e(__('mslicenses_steps_tag')); ?></div>
                <h2><?php echo e(__('mslicenses_steps_title')); ?></h2>
                <p><?php echo e(__('mslicenses_steps_desc')); ?></p>
            </div>

            <div class="vps-steps-grid">
                <div class="vps-step-card">
                    <span class="vps-step-num">1</span>
                    <div class="vps-step-icon"><i class="fas fa-mouse-pointer"></i></div>
                    <h4><?php echo e(__('mslicenses_step1_title')); ?></h4>
                    <p><?php echo e(__('mslicenses_step1_desc')); ?></p>
                </div>
                <div class="vps-step-card">
                    <span class="vps-step-num">2</span>
                    <div class="vps-step-icon icon-green"><i class="fas fa-credit-card"></i></div>
                    <h4><?php echo e(__('mslicenses_step2_title')); ?></h4>
                    <p><?php echo e(__('mslicenses_step2_desc')); ?></p>
                </div>
                <div class="vps-step-card">
                    <span class="vps-step-num">3</span>
                    <div class="vps-step-icon icon-purple"><i class="fas fa-key"></i></div>
                    <h4><?php echo e(__('mslicenses_step3_title')); ?></h4>
                    <p><?php echo e(__('mslicenses_step3_desc')); ?></p>
                </div>
                <div class="vps-step-card">
                    <span class="vps-step-num">4</span>
                    <div class="vps-step-icon icon-amber"><i class="fas fa-check-circle"></i></div>
                    <h4><?php echo __('mslicenses_step4_title'); ?></h4>
                    <p><?php echo e(__('mslicenses_step4_desc')); ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ VOLUME PRICING ═══════════════ -->
    <section class="ms-discount reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag"><?php echo e(__('mslicenses_volume_tag')); ?></div>
                <h2><?php echo e(__('mslicenses_volume_title')); ?></h2>
                <p><?php echo e(__('mslicenses_volume_desc')); ?></p>
            </div>

            <div class="ms-discount-table-wrap">
                <table class="ms-discount-table">
                    <thead>
                        <tr>
                            <th><?php echo e(__('mslicenses_volume_th_qty')); ?></th>
                            <th><?php echo e(__('mslicenses_volume_th_discount')); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td>10+ keys</td><td>5%</td></tr>
                        <tr><td>25+ keys</td><td>10%</td></tr>
                        <tr><td>50+ keys</td><td>15%</td></tr>
                        <tr class="ms-discount-highlight"><td>100+ keys</td><td><?php echo e(__('mslicenses_volume_custom')); ?></td></tr>
                    </tbody>
                </table>
            </div>

            <p class="ms-discount-note"><?php echo __('mslicenses_volume_note', ['url' => e(SITE_URL) . '/contact-us/']); ?></p>
        </div>
    </section>

    <!-- ═══════════════ FAQ ═══════════════ -->
    <section class="faq-section reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag"><?php echo e(__('mslicenses_faq_tag')); ?></div>
                <h2><?php echo e(__('mslicenses_faq_title')); ?></h2>
                <p><?php echo e(__('mslicenses_faq_desc')); ?></p>
            </div>

            <div class="faq-layout">
                <div class="faq-tabs">
                    <button class="faq-tab active" data-faq-target="faq-general"><i class="fas fa-key"></i> <?php echo e(__('mslicenses_faq_tab_general')); ?></button>
                    <button class="faq-tab" data-faq-target="faq-technical"><i class="fas fa-cogs"></i> <?php echo e(__('mslicenses_faq_tab_technical')); ?></button>
                    <button class="faq-tab" data-faq-target="faq-billing"><i class="fas fa-credit-card"></i> <?php echo e(__('mslicenses_faq_tab_billing')); ?></button>
                </div>

                <div class="faq-panels">
                    <div class="faq-panel active" id="faq-general">
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('mslicenses_faq_gen_q1')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('mslicenses_faq_gen_a1')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('mslicenses_faq_gen_q2')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('mslicenses_faq_gen_a2')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('mslicenses_faq_gen_q3')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('mslicenses_faq_gen_a3')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('mslicenses_faq_gen_q4')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('mslicenses_faq_gen_a4')); ?></p></div></div>
                    </div>

                    <div class="faq-panel" id="faq-technical">
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('mslicenses_faq_tech_q1')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('mslicenses_faq_tech_a1')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('mslicenses_faq_tech_q2')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('mslicenses_faq_tech_a2')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('mslicenses_faq_tech_q3')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('mslicenses_faq_tech_a3')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('mslicenses_faq_tech_q4')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('mslicenses_faq_tech_a4')); ?></p></div></div>
                    </div>

                    <div class="faq-panel" id="faq-billing">
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('mslicenses_faq_bill_q1')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('mslicenses_faq_bill_a1')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('mslicenses_faq_bill_q2')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('mslicenses_faq_bill_a2')); ?></p></div></div>
                        <div class="faq-item"><button class="faq-question"><span><?php echo e(__('mslicenses_faq_bill_q3')); ?></span><i class="fas fa-chevron-down"></i></button><div class="faq-answer"><p><?php echo e(__('mslicenses_faq_bill_a3')); ?></p></div></div>
                    </div>
                </div>
            </div>

            <div class="faq-actions">
                <a href="<?php echo e(SITE_URL); ?>/contact-us/" class="btn-primary"><i class="fas fa-headset"></i> <?php echo e(__('mslicenses_faq_cta_ticket')); ?></a>
                <a href="<?php echo e(SITE_URL); ?>/faq" class="btn-secondary"><?php echo e(__('mslicenses_faq_cta_browse')); ?> <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </section>

    <!-- ═══════════════ WHY CHOOSE US ═══════════════ -->
    <section class="why-us reveal">
        <div class="container">
            <div class="why-us-layout">
                <div class="why-us-intro">
                    <div class="section-tag"><?php echo e(__('mslicenses_whyus_tag')); ?></div>
                    <h2 class="why-us-title"><?php echo e(__('mslicenses_whyus_title')); ?></h2>
                    <p class="why-us-desc"><?php echo e(__('mslicenses_whyus_desc')); ?></p>
                    <a href="<?php echo e(SITE_URL); ?>/contact-us/" class="btn-primary"><?php echo e(__('mslicenses_whyus_cta')); ?> <i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="why-us-grid">
                    <div class="why-us-card">
                        <div class="why-us-card-icon"><i class="fas fa-certificate"></i></div>
                        <h4><?php echo e(__('mslicenses_whyus_card1_title')); ?></h4>
                        <p><?php echo e(__('mslicenses_whyus_card1_desc')); ?></p>
                    </div>
                    <div class="why-us-card">
                        <div class="why-us-card-icon icon-green"><i class="fas fa-bolt"></i></div>
                        <h4><?php echo e(__('mslicenses_whyus_card2_title')); ?></h4>
                        <p><?php echo e(__('mslicenses_whyus_card2_desc')); ?></p>
                    </div>
                    <div class="why-us-card">
                        <div class="why-us-card-icon icon-purple"><i class="fas fa-sync-alt"></i></div>
                        <h4><?php echo e(__('mslicenses_whyus_card3_title')); ?></h4>
                        <p><?php echo e(__('mslicenses_whyus_card3_desc')); ?></p>
                    </div>
                    <div class="why-us-card">
                        <div class="why-us-card-icon icon-amber"><i class="fas fa-headset"></i></div>
                        <h4><?php echo e(__('mslicenses_whyus_card4_title')); ?></h4>
                        <p><?php echo e(__('mslicenses_whyus_card4_desc')); ?></p>
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
                <div class="promo-cta-icon"><i class="fab fa-microsoft"></i></div>
                <h2><?php echo e(__('mslicenses_cta_title')); ?></h2>
                <p><?php echo e(__('mslicenses_cta_desc')); ?></p>
                <a href="#catalog" class="btn-primary"><?php echo e(__('mslicenses_cta_button')); ?> <i class="fas fa-arrow-up"></i></a>
            </div>
        </div>
    </section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
