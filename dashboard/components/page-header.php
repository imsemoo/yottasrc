<?php
/**
 * Page Header Component
 * =======================
 * Renders a compact DS-hero above any page body. Auto-inherits the M4
 * design-system look (gradient ambient bg, display title, sub, action row)
 * so every page that `include`s this stays visually unified.
 *
 * Variables (set before include):
 *   $ph_title   (string)           — page title (shown as h1)
 *   $ph_desc    (string|null)      — optional subtitle
 *   $ph_actions (string|null)      — raw HTML for the right-side action row
 *   $ph_eyebrow (string|null)      — optional small label above the title
 *   $ph_icon    (string|null)      — optional Font Awesome class for eyebrow icon
 *
 * Legacy class `.db-page-header` is kept on the root so any page-specific
 * overrides continue to apply, but layout + styling comes from `.ds-hero`.
 */
?>
<section class="ds-hero ds-hero--compact db-page-header">
    <div class="ds-hero__top">
        <div class="ds-hero__title-block db-page-header-left">
            <?php if (!empty($ph_eyebrow)): ?>
            <span class="ds-eyebrow">
                <?php if (!empty($ph_icon)): ?><i class="fas <?php echo e($ph_icon); ?>"></i><?php endif; ?>
                <?php echo e($ph_eyebrow); ?>
            </span>
            <?php endif; ?>
            <h1 class="ds-hero__title db-page-header-title" style="margin-top:<?php echo !empty($ph_eyebrow) ? '10px' : '0'; ?>;"><?php echo e($ph_title ?? ''); ?></h1>
            <?php if (!empty($ph_desc)): ?>
            <p class="ds-hero__sub db-page-header-desc"><?php echo e($ph_desc); ?></p>
            <?php endif; ?>
        </div>
        <?php if (!empty($ph_actions)): ?>
        <div class="ds-hero__actions db-page-header-actions">
            <?php echo $ph_actions; ?>
        </div>
        <?php endif; ?>
    </div>
</section>
