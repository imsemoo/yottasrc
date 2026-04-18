<?php
/**
 * Empty-State Partial
 * ======================
 * Unified markup for full-page empty states (no items yet).
 * Wraps itself in `.db-card` so callers can drop it in directly.
 *
 * Expected variables (set before include):
 *   $es_icon     (string)              — Font Awesome icon class (e.g. 'fa-server')
 *   $es_title    (string)              — title
 *   $es_desc     (string|null)         — optional description
 *   $es_action   (string|null)         — raw HTML for the CTA button (link or button)
 *   $es_variant  (string|null)         — tint variant: services (default), cloud, domains
 *   $es_compact  (bool|null)           — if true uses tighter padding (for card sub-sections)
 *   $es_no_wrap  (bool|null)           — if true skips the outer .db-card wrapper
 *
 * Example:
 *   $es_icon   = 'fa-server';
 *   $es_title  = __('services_empty_title');
 *   $es_desc   = __('services_empty_desc');
 *   $es_action = '<a href="..." class="db-btn db-btn--primary"><i class="fas fa-plus"></i> Order</a>';
 *   include __DIR__ . '/../components/empty-state.php';
 */
$es_variant = $es_variant ?? 'services';
$es_compact = !empty($es_compact);
$es_no_wrap = !empty($es_no_wrap);
$es_extra_class = $es_compact ? ' db-empty-state--compact' : '';
?>
<?php if (!$es_no_wrap): ?><div class="db-card"><?php endif; ?>
<div class="db-empty-state<?php echo $es_extra_class; ?>">
    <div class="db-empty-illustration db-empty-illustration--<?php echo e($es_variant); ?>">
        <i class="fas <?php echo e($es_icon); ?>"></i>
    </div>
    <h3 class="db-empty-title"><?php echo e($es_title ?? ''); ?></h3>
    <?php if (!empty($es_desc)): ?>
    <p class="db-empty-desc"><?php echo e($es_desc); ?></p>
    <?php endif; ?>
    <?php if (!empty($es_action)): ?>
    <?php echo $es_action; ?>
    <?php endif; ?>
</div>
<?php if (!$es_no_wrap): ?></div><?php endif; ?>
