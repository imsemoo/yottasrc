<?php
/**
 * Skeleton — Two-Column Detail Layout
 * =====================================
 * Renders a .db-detail-layout with a richer left card (tabs + rows) and
 * a right sidebar with action buttons + info block. Fits service-details,
 * invoice-details and ticket-details.
 *
 * Usage:
 *   $skel_tcol_tabs        = 6;   // tab placeholders on the left
 *   $skel_tcol_rows        = 6;   // info/list rows in the main card
 *   $skel_tcol_side_btns   = 4;   // action buttons in the right sidebar
 *   $skel_tcol_side_info   = 4;   // info rows in the right sidebar
 *   $skel_tcol_body_slot   = null // optional: include path for a custom left-body (e.g. skeleton-chat)
 *   include 'components/skeleton-two-col.php';
 */
$tabs      = $skel_tcol_tabs      ?? 6;
$rows      = $skel_tcol_rows      ?? 6;
$side_btns = $skel_tcol_side_btns ?? 4;
$side_info = $skel_tcol_side_info ?? 4;
$body_slot = $skel_tcol_body_slot ?? null;
?>
<div class="db-detail-layout">
    <div>
        <?php if ($body_slot): ?>
            <?php include $body_slot; ?>
        <?php else: ?>
        <div class="db-card">
            <?php if ($tabs > 0): ?>
            <!-- Tabs row -->
            <div style="padding: 14px 20px; border-bottom: 1px solid var(--border-secondary); display: flex; gap: 8px; overflow: hidden;">
                <?php for ($i = 0; $i < $tabs; $i++): ?>
                <div class="db-skeleton" style="width: <?php echo rand(70, 110); ?>px; height: 28px; border-radius: var(--radius-sm); flex-shrink: 0;"></div>
                <?php endfor; ?>
            </div>
            <?php endif; ?>
            <div class="db-card-body">
                <?php for ($i = 0; $i < $rows; $i++): ?>
                <div style="display: flex; justify-content: space-between; align-items: center; padding: 12px 0; border-bottom: 1px solid var(--border-secondary); gap: 16px;">
                    <div class="db-skeleton db-skeleton--text" style="width: <?php echo rand(22, 38); ?>%;"></div>
                    <div class="db-skeleton db-skeleton--text" style="width: <?php echo rand(30, 50); ?>%;"></div>
                </div>
                <?php endfor; ?>
            </div>
        </div>
        <?php endif; ?>
    </div>

    <div>
        <?php if ($side_btns > 0): ?>
        <!-- Right sidebar: primary CTA + action buttons -->
        <div class="db-card db-mb">
            <div class="db-card-body" style="display: flex; flex-direction: column; gap: 10px;">
                <div class="db-skeleton" style="width: 100%; height: 44px; border-radius: var(--radius-md);"></div>
                <?php for ($i = 0; $i < $side_btns; $i++): ?>
                <div class="db-skeleton db-skeleton--button" style="width: 100%; height: 36px;"></div>
                <?php endfor; ?>
            </div>
        </div>
        <?php endif; ?>

        <div class="db-card">
            <div class="db-card-body">
                <div class="db-skeleton db-skeleton--text" style="width: 50%; margin-bottom: 14px;"></div>
                <?php for ($i = 0; $i < $side_info; $i++): ?>
                <div style="display: flex; justify-content: space-between; padding: 8px 0; border-bottom: 1px solid var(--border-secondary);">
                    <div class="db-skeleton db-skeleton--text-sm" style="width: 40%;"></div>
                    <div class="db-skeleton db-skeleton--text-sm" style="width: 35%;"></div>
                </div>
                <?php endfor; ?>
            </div>
        </div>
    </div>
</div>
