<?php
/**
 * Skeleton — Detail page (content + sidebar)
 *
 * Usage:
 *   $skel_info_rows = 6;
 *   $skel_action_buttons = 4;
 *   include 'components/skeleton-detail.php';
 */
$info_rows = $skel_info_rows ?? 6;
$action_btns = $skel_action_buttons ?? 4;
?>
<div class="db-detail-layout">
    <div>
        <div class="db-card">
            <div class="db-card-body">
                <!-- Tab skeleton -->
                <div style="display: flex; gap: 8px; border-bottom: 1px solid var(--border-primary); margin-bottom: 24px; padding-bottom: 12px;">
                    <div class="db-skeleton" style="width: 90px; height: 20px; border-radius: var(--radius-xs);"></div>
                    <div class="db-skeleton" style="width: 70px; height: 20px; border-radius: var(--radius-xs);"></div>
                    <div class="db-skeleton" style="width: 70px; height: 20px; border-radius: var(--radius-xs);"></div>
                </div>
                <!-- Info rows -->
                <?php for ($i = 0; $i < $info_rows; $i++): ?>
                <div style="display: flex; justify-content: space-between; padding: 12px 0; border-bottom: 1px solid var(--border-secondary);">
                    <div class="db-skeleton db-skeleton--text" style="width: <?php echo rand(25, 35); ?>%;"></div>
                    <div class="db-skeleton db-skeleton--text" style="width: <?php echo rand(30, 45); ?>%;"></div>
                </div>
                <?php endfor; ?>
            </div>
        </div>
    </div>
    <div>
        <div class="db-card">
            <div class="db-card-body" style="display: flex; flex-direction: column; gap: 8px;">
                <?php for ($i = 0; $i < $action_btns; $i++): ?>
                <div class="db-skeleton db-skeleton--button" style="width: 100%; height: 38px;"></div>
                <?php endfor; ?>
            </div>
        </div>
    </div>
</div>
