<?php
/**
 * Skeleton — Stat Cards Row
 *
 * Usage:
 *   $skel_stat_count = 4; // number of cards
 *   include 'components/skeleton-stats.php';
 */
$count = $skel_stat_count ?? 4;
?>
<div class="db-stats-row">
    <?php for ($i = 0; $i < $count; $i++): ?>
    <div class="db-skeleton-stat-card">
        <div class="db-skeleton" style="width: 44px; height: 44px; border-radius: var(--radius-md); flex-shrink: 0;"></div>
        <div style="flex: 1; display: flex; flex-direction: column; gap: 6px;">
            <div class="db-skeleton db-skeleton--heading" style="width: 40px;"></div>
            <div class="db-skeleton db-skeleton--text-sm" style="width: 70px;"></div>
        </div>
    </div>
    <?php endfor; ?>
</div>
