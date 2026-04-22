<?php
/**
 * Skeleton — Vertical Timeline (changelog)
 * ==========================================
 * Mirrors the .db-changelog entry shape (date bubble + spine + release card
 * with section labels and bullet lists).
 *
 * Usage:
 *   $skel_timeline_entries = 4;
 *   include 'components/skeleton-timeline.php';
 */
$entries = $skel_timeline_entries ?? 4;
?>
<div class="db-skeleton-timeline">
    <?php for ($i = 0; $i < $entries; $i++):
        $is_last = ($i === $entries - 1);
        $section_count = ($i === 0) ? 3 : 2; // latest gets 3 sections, others 2
    ?>
    <div class="db-skeleton-timeline__entry<?php echo $is_last ? ' is-last' : ''; ?>">
        <div class="db-skeleton-timeline__spine">
            <div class="db-skeleton-timeline__bubble"></div>
        </div>
        <div class="db-skeleton-timeline__body">
            <div class="db-skeleton-timeline__head">
                <div class="db-skeleton db-skeleton--heading" style="width: 120px;"></div>
                <div class="db-skeleton db-skeleton--badge" style="width: 60px;"></div>
            </div>
            <div class="db-skeleton db-skeleton--text-sm" style="width: 80%; max-width: 520px; margin: 8px 0 14px 0;"></div>

            <div class="db-skeleton-timeline__card">
                <?php for ($s = 0; $s < $section_count; $s++): ?>
                <div class="db-skeleton-timeline__section">
                    <div class="db-skeleton-timeline__section-head">
                        <div class="db-skeleton" style="width: 28px; height: 28px; border-radius: var(--radius-sm);"></div>
                        <div class="db-skeleton db-skeleton--text-sm" style="width: 110px;"></div>
                    </div>
                    <div class="db-skeleton-timeline__bullets">
                        <?php for ($b = 0; $b < rand(2, 4); $b++): ?>
                        <div class="db-skeleton db-skeleton--text-sm" style="width: <?php echo rand(55, 90); ?>%;"></div>
                        <?php endfor; ?>
                    </div>
                </div>
                <?php endfor; ?>
            </div>
        </div>
    </div>
    <?php endfor; ?>
</div>
