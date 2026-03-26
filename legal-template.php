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
$legal_title      = $legal_title ?? __('legal_breadcrumb_legal');
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
                    <a href="<?php echo e(SITE_URL); ?>/legal/"><?php echo e(__('legal_breadcrumb_legal')); ?></a>
                    <i class="fas fa-chevron-right"></i>
                    <span><?php echo e($legal_breadcrumb); ?></span>
                </div>
                <h1><?php echo $legal_title; ?></h1>
                <?php if ($legal_updated): ?>
                <p class="page-hero-desc"><?php echo e(__('legal_last_updated')); ?> <?php echo e($legal_updated); ?></p>
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
                        <h5><i class="fas fa-file-alt"></i> <?php echo e(__('legal_sidebar_title')); ?></h5>
                        <ul class="legal-nav">
                            <?php
                            $legal_pages = [
                                ['url' => '/terms/',                'label' => __('legal_nav_terms'),       'icon' => 'fa-file-contract'],
                                ['url' => '/privacy-policy/',       'label' => __('legal_nav_privacy'),     'icon' => 'fa-user-shield'],
                                ['url' => '/legal/refund-policy',   'label' => __('legal_nav_refund'),      'icon' => 'fa-undo'],
                                ['url' => '/data/resource-usage/',  'label' => __('legal_nav_fair_usage'),  'icon' => 'fa-balance-scale'],
                                ['url' => '/legal/sla/',            'label' => __('legal_nav_sla'),         'icon' => 'fa-handshake'],
                                ['url' => '/legal/aup/',            'label' => __('legal_nav_aup'),         'icon' => 'fa-shield-alt'],
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
                        <h5><?php echo e(__('legal_sidebar_questions')); ?></h5>
                        <p><?php echo e(__('legal_sidebar_questions_desc')); ?></p>
                        <a href="<?php echo e(SITE_URL); ?>/contact-us/" class="btn-primary btn-sm"><?php echo e(__('legal_sidebar_contact_btn')); ?> <i class="fas fa-arrow-right"></i></a>
                    </div>
                </aside>
            </div>
        </div>
    </section>
<?php
unset($legal_title, $legal_breadcrumb, $legal_updated, $legal_content);
?>
