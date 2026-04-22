<?php
/**
 * Skeleton — Responsive Card Grid
 * ==================================
 * A grid of equally-sized card placeholders. Great stand-in for any
 * page that lays out content as a responsive gallery (projects, services
 * catalog, order page product grids, etc).
 *
 * Usage:
 *   $skel_grid_count  = 6;        // number of cards
 *   $skel_grid_min    = 260;      // min width per card (px) for auto-fill
 *   $skel_grid_height = 180;      // each card height (px)
 *   $skel_grid_rich   = true;     // include icon + title + meta lines inside card
 *   include 'components/skeleton-grid.php';
 */
$count  = $skel_grid_count  ?? 6;
$min    = $skel_grid_min    ?? 260;
$height = $skel_grid_height ?? 180;
$rich   = $skel_grid_rich   ?? true;
?>
<div class="db-skeleton-grid" style="grid-template-columns: repeat(auto-fill, minmax(<?php echo (int)$min; ?>px, 1fr));">
    <?php for ($i = 0; $i < $count; $i++): ?>
    <div class="db-skeleton-grid__card" style="min-height: <?php echo (int)$height; ?>px;">
        <?php if ($rich): ?>
        <div class="db-skeleton-grid__head">
            <div class="db-skeleton" style="width: 36px; height: 36px; border-radius: var(--radius-sm);"></div>
            <div style="flex:1; display:flex; flex-direction:column; gap:6px; min-width: 0;">
                <div class="db-skeleton db-skeleton--text" style="width: <?php echo rand(50, 80); ?>%;"></div>
                <div class="db-skeleton db-skeleton--text-sm" style="width: <?php echo rand(30, 55); ?>%;"></div>
            </div>
        </div>
        <div class="db-skeleton-grid__body">
            <div class="db-skeleton" style="width: 100%; height: 48px; border-radius: var(--radius-sm);"></div>
            <div class="db-skeleton-grid__meta">
                <div class="db-skeleton db-skeleton--text-sm" style="width: 70px;"></div>
                <div class="db-skeleton db-skeleton--text-sm" style="width: 60px;"></div>
            </div>
        </div>
        <?php endif; ?>
    </div>
    <?php endfor; ?>
</div>
