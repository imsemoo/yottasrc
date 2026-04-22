<?php
/**
 * Skeleton — Tab Bar
 * ====================
 * Placeholder row of pill-shaped tab buttons. Matches the shape of
 * .db-tab-bar / .db-tabs / changelog-tabs / account-tabs.
 *
 * Usage:
 *   $skel_tabs_count = 4;
 *   include 'components/skeleton-tabs.php';
 */
$count = $skel_tabs_count ?? 4;
?>
<div class="db-skeleton-tabs">
    <?php for ($i = 0; $i < $count; $i++): ?>
    <div class="db-skeleton db-skeleton--button" style="width: <?php echo rand(90, 140); ?>px; height: 36px; border-radius: var(--radius-sm);"></div>
    <?php endfor; ?>
</div>
