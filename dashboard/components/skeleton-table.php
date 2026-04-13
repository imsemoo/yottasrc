<?php
/**
 * Skeleton — Table inside card
 *
 * Usage:
 *   $skel_rows = 6;           // number of rows
 *   $skel_cols = 5;           // columns per row
 *   $skel_has_icon = true;    // first col has icon square
 *   $skel_has_filters = true; // show filter bar skeleton
 *   include 'components/skeleton-table.php';
 */
$rows = $skel_rows ?? 6;
$cols = $skel_cols ?? 4;
$has_icon = $skel_has_icon ?? false;
$has_filters = $skel_has_filters ?? true;
$col_widths = ['60%', '70px', '64px', '60px', '70px'];
?>
<div class="db-card">
    <div class="db-card-body--table">
        <?php if ($has_filters): ?>
        <div style="padding: 16px 22px 12px; display: flex; gap: 10px;">
            <div class="db-skeleton" style="height: 38px; flex: 1; max-width: 260px; border-radius: var(--radius-sm);"></div>
            <div class="db-skeleton" style="height: 38px; width: 130px; border-radius: var(--radius-sm);"></div>
        </div>
        <?php endif; ?>
        <?php for ($i = 0; $i < $rows; $i++): ?>
        <div class="db-skeleton-table-row">
            <?php if ($has_icon): ?>
            <div class="db-skeleton" style="width: 34px; height: 34px; border-radius: var(--radius-sm); flex-shrink: 0;"></div>
            <?php endif; ?>
            <div style="flex: 2; display: flex; flex-direction: column; gap: 4px;">
                <div class="db-skeleton db-skeleton--text" style="width: <?php echo rand(40, 70); ?>%;"></div>
                <div class="db-skeleton db-skeleton--text-sm" style="width: <?php echo rand(30, 55); ?>%;"></div>
            </div>
            <?php for ($c = 1; $c < min($cols, 5); $c++): ?>
            <div class="db-skeleton db-skeleton--<?php echo $c === 2 ? 'badge' : 'text'; ?>" style="width: <?php echo $col_widths[$c] ?? '60px'; ?>; flex-shrink: 0;"></div>
            <?php endfor; ?>
        </div>
        <?php endfor; ?>
    </div>
</div>
