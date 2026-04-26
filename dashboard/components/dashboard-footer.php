<?php
/**
 * Dashboard Footer — compact strip at the bottom of every page.
 * Mirrors the old console: copyright left, quick links right.
 *
 * Stays inside .db-main so it sits within the content column (does not
 * span under the sidebar) and scrolls with the page rather than sticking.
 */
$footer_year = date('Y');
$footer_links = [
    ['label' => __('footer_about_us'),    'url' => (defined('SITE_URL') ? SITE_URL : '') . '/about'],
    ['label' => __('footer_contact'),     'url' => (defined('SITE_URL') ? SITE_URL : '') . '/contact-us/'],
    ['label' => __('nav_tickets'),        'url' => DASH_BASE_PATH . '/pages/support/index.php'],
    ['label' => __('auth_terms'),       'url' => (defined('SITE_URL') ? SITE_URL : '') . '/terms/'],
    ['label' => __('auth_privacy'),     'url' => (defined('SITE_URL') ? SITE_URL : '') . '/privacy-policy/'],
    ['label' => __('footer_refund'),      'url' => (defined('SITE_URL') ? SITE_URL : '') . '/legal/refund-policy'],
    ['label' => __('footer_report_abuse'),'url' => (defined('SITE_URL') ? SITE_URL : '') . '/report-abuse/'],
];
?>
<footer class="db-footer" role="contentinfo">
    <div class="db-footer__inner">
        <div class="db-footer__left">
            <span class="db-footer__copy">
                &copy; <?php echo (int)$footer_year; ?> <?php echo e(SITE_NAME); ?>. <?php echo e(__('footer_rights_reserved')); ?>
            </span>
            <span class="db-footer__divider" aria-hidden="true">·</span>
            <a href="<?php echo e(DASH_BASE_PATH); ?>/pages/changelog/index.php" class="db-footer__link db-footer__link--muted">
                <i class="fas fa-code-branch"></i>
                <?php echo e(__('footer_version', ['version' => defined('DASH_VERSION') ? DASH_VERSION : '2.2.2'])); ?>
            </a>
        </div>

        <nav class="db-footer__links" aria-label="<?php echo e(__('footer_quick_links')); ?>">
            <?php foreach ($footer_links as $i => $ln):
                if ($i > 0): ?><span class="db-footer__sep" aria-hidden="true">·</span><?php endif; ?>
                <a href="<?php echo e($ln['url']); ?>" class="db-footer__link"><?php echo e($ln['label']); ?></a>
            <?php endforeach; ?>
        </nav>
    </div>
</footer>
