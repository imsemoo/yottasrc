<?php
/**
 * Pagination Partial (unified)
 * ================================
 * Renders a professional pagination bar with:
 *   - "Showing X–Y of Z" info (optional)
 *   - Prev / Next buttons (disabled at boundaries)
 *   - Page-number buttons with ellipsis windowing
 *   - Full RTL + a11y (aria-label, aria-current, <nav>)
 *
 * Expected variables (set before include):
 *   $pg_current     (int)             — current page, 1-based (default 1)
 *   $pg_total       (int)             — total number of pages (default 1)
 *   $pg_from        (int|null)        — first row index shown (for "showing X–Y")
 *   $pg_to          (int|null)        — last row index shown
 *   $pg_total_rows  (int|null)        — total rows available
 *   $pg_window      (int|null)        — sibling pages shown around current (default 1)
 *   $pg_page_url    (callable|null)   — function($page) returning href. If null,
 *                                        renders <button type="button"> with data-page
 *   $pg_compact     (bool|null)       — hide info on small screens (default true)
 *   $pg_aria_label  (string|null)     — aria-label for <nav>
 *
 * Nothing is rendered when $pg_total <= 1 and no info is provided.
 *
 * Example:
 *   $pg_current = 2; $pg_total = 5;
 *   $pg_from = 11; $pg_to = 20; $pg_total_rows = 47;
 *   include __DIR__ . '/../components/pagination.php';
 */

$pg_current    = max(1, (int)($pg_current ?? 1));
$pg_total      = max(1, (int)($pg_total ?? 1));
$pg_window     = max(0, (int)($pg_window ?? 1));
$pg_from       = $pg_from ?? null;
$pg_to         = $pg_to ?? null;
$pg_total_rows = $pg_total_rows ?? null;
$pg_page_url   = (isset($pg_page_url) && is_callable($pg_page_url)) ? $pg_page_url : null;
$pg_aria_label = $pg_aria_label ?? __('common_pagination');

// Early-exit: nothing to render
if ($pg_total <= 1 && $pg_total_rows === null) {
    return;
}

// Build page list with ellipsis: [1, '...', current-1, current, current+1, '...', total]
$pg_current = min($pg_current, $pg_total);
$pages = [];
$left_edge  = max(1, $pg_current - $pg_window);
$right_edge = min($pg_total, $pg_current + $pg_window);

for ($i = 1; $i <= $pg_total; $i++) {
    $in_window = $i === 1 || $i === $pg_total || ($i >= $left_edge && $i <= $right_edge);
    if ($in_window) {
        $pages[] = $i;
    } elseif (end($pages) !== '…') {
        $pages[] = '…';
    }
}

/**
 * Helper: render a single page cell (button/link/ellipsis).
 */
$render_page = function ($entry) use ($pg_current, $pg_page_url) {
    if ($entry === '…') {
        echo '<span class="db-pagination-bar__ellipsis" aria-hidden="true">…</span>';
        return;
    }
    $is_active = ($entry === $pg_current);
    $classes   = 'db-pagination-bar__page' . ($is_active ? ' active' : '');
    $attrs     = $is_active ? ' aria-current="page"' : '';
    if ($pg_page_url && !$is_active) {
        $href = $pg_page_url($entry);
        echo '<a href="' . e($href) . '" class="' . $classes . '"' . $attrs . '>' . (int)$entry . '</a>';
    } else {
        echo '<button type="button" class="' . $classes . '"' . $attrs . ' data-page="' . (int)$entry . '"' . ($is_active ? ' aria-disabled="true"' : '') . '>' . (int)$entry . '</button>';
    }
};

$prev_disabled = $pg_current <= 1;
$next_disabled = $pg_current >= $pg_total;
$prev_page     = max(1, $pg_current - 1);
$next_page     = min($pg_total, $pg_current + 1);
?>
<nav class="db-pagination-bar" aria-label="<?php echo e($pg_aria_label); ?>">
    <?php if ($pg_from !== null && $pg_to !== null && $pg_total_rows !== null): ?>
    <div class="db-pagination-bar__info">
        <?php echo e(__('common_showing_range', ['from' => $pg_from, 'to' => $pg_to, 'total' => $pg_total_rows])); ?>
    </div>
    <?php endif; ?>

    <?php if ($pg_total > 1): ?>
    <div class="db-pagination-bar__nav">
        <?php
        // Prev button
        $prev_class = 'db-pagination-bar__btn db-pagination-bar__btn--nav';
        if ($pg_page_url && !$prev_disabled):
        ?>
        <a href="<?php echo e($pg_page_url($prev_page)); ?>" class="<?php echo $prev_class; ?>" aria-label="<?php echo e(__('common_previous')); ?>">
            <i class="fas fa-chevron-left db-pagination-bar__chevron" aria-hidden="true"></i>
        </a>
        <?php else: ?>
        <button type="button" class="<?php echo $prev_class; ?>" <?php echo $prev_disabled ? 'disabled' : ''; ?> aria-label="<?php echo e(__('common_previous')); ?>" data-page="<?php echo (int)$prev_page; ?>">
            <i class="fas fa-chevron-left db-pagination-bar__chevron" aria-hidden="true"></i>
        </button>
        <?php endif; ?>

        <?php foreach ($pages as $p) { $render_page($p); } ?>

        <?php
        // Next button
        $next_class = 'db-pagination-bar__btn db-pagination-bar__btn--nav';
        if ($pg_page_url && !$next_disabled):
        ?>
        <a href="<?php echo e($pg_page_url($next_page)); ?>" class="<?php echo $next_class; ?>" aria-label="<?php echo e(__('common_next')); ?>">
            <i class="fas fa-chevron-right db-pagination-bar__chevron" aria-hidden="true"></i>
        </a>
        <?php else: ?>
        <button type="button" class="<?php echo $next_class; ?>" <?php echo $next_disabled ? 'disabled' : ''; ?> aria-label="<?php echo e(__('common_next')); ?>" data-page="<?php echo (int)$next_page; ?>">
            <i class="fas fa-chevron-right db-pagination-bar__chevron" aria-hidden="true"></i>
        </button>
        <?php endif; ?>
    </div>
    <?php endif; ?>
</nav>
