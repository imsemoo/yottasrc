<?php
/**
 * YottaSrc — Legal Page Template
 * ================================
 * Reusable template for legal/policy pages.
 * Set these variables before including:
 *   $legal_title       — Page title (e.g. "Privacy Policy")
 *   $legal_breadcrumb  — Breadcrumb label
 *   $legal_updated     — Last updated date
 *   $legal_content     — HTML content string
 */
$legal_title      = $legal_title ?? 'Legal';
$legal_breadcrumb = $legal_breadcrumb ?? $legal_title;
$legal_updated    = $legal_updated ?? '';
?>

    <!-- ═══════════════ HERO ═══════════════ -->
    <section class="page-hero">
        <div class="container">
            <div class="page-hero-content" >
                <div class="page-breadcrumb" >
                    <a href="<?php echo e(SITE_URL); ?>/"><?php echo e(__('breadcrumb_home')); ?></a>
                    <i class="fas fa-chevron-right"></i>
                    <a href="<?php echo e(SITE_URL); ?>/legal/">Legal</a>
                    <i class="fas fa-chevron-right"></i>
                    <span><?php echo e($legal_breadcrumb); ?></span>
                </div>
                <h1><?php echo $legal_title; ?></h1>
                <?php if ($legal_updated): ?>
                <p class="page-hero-desc">Last updated: <?php echo e($legal_updated); ?></p>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <!-- ═══════════════ LEGAL CONTENT ═══════════════ -->
    <section class="legal-content">
        <div class="container">
            <div class="legal-layout">
                <div class="legal-body">
                    <?php echo $legal_content ?? ''; ?>
                </div>
                <aside class="legal-sidebar">
                    <div class="legal-sidebar-card">
                        <h5><i class="fas fa-file-alt"></i> Legal Pages</h5>
                        <ul class="legal-nav">
                            <?php
                            $legal_pages = [
                                ['url' => '/terms/',                'label' => 'Terms of Service',  'icon' => 'fa-file-contract'],
                                ['url' => '/privacy-policy/',       'label' => 'Privacy Policy',    'icon' => 'fa-user-shield'],
                                ['url' => '/legal/refund-policy',   'label' => 'Refund Policy',     'icon' => 'fa-undo'],
                                ['url' => '/data/resource-usage/',  'label' => 'Fair Usage Policy',  'icon' => 'fa-balance-scale'],
                                ['url' => '/legal/sla/',            'label' => 'Service Level Agreement', 'icon' => 'fa-handshake'],
                                ['url' => '/legal/aup/',            'label' => 'Acceptable Use',    'icon' => 'fa-shield-alt'],
                            ];
                            foreach ($legal_pages as $lp):
                                $is_active = (strpos($_SERVER['REQUEST_URI'] ?? '', rtrim($lp['url'], '/')) !== false) ? ' active' : '';
                            ?>
                            <li>
                                <a href="<?php echo e(SITE_URL . $lp['url']); ?>" class="legal-nav-link<?php echo $is_active; ?>">
                                    <i class="fas <?php echo $lp['icon']; ?>"></i>
                                    <span><?php echo $lp['label']; ?></span>
                                </a>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <div class="legal-sidebar-card legal-sidebar-contact">
                        <div class="legal-contact-icon"><i class="fas fa-headset"></i></div>
                        <h5>Have Questions?</h5>
                        <p>Our support team is available 24/7 to help with any legal or billing questions.</p>
                        <a href="<?php echo e(SITE_URL); ?>/contact-us/" class="btn-primary btn-sm">Contact Support <i class="fas fa-arrow-right"></i></a>
                    </div>
                </aside>
            </div>
        </div>
    </section>
<?php
unset($legal_title, $legal_breadcrumb, $legal_updated, $legal_content);
?>
