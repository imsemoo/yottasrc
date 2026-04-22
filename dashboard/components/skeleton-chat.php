<?php
/**
 * Skeleton — Chat / Ticket Thread
 * =================================
 * Placeholder for a message thread with alternating left/right bubbles
 * plus a reply box at the top. Used for support ticket-details.
 *
 * Usage:
 *   $skel_chat_messages = 5;   // number of message bubbles
 *   include 'components/skeleton-chat.php';
 */
$messages = $skel_chat_messages ?? 5;
?>
<div class="db-skeleton-chat">
    <!-- Reply box (sits on top like a compose area) -->
    <div class="db-skeleton-chat__reply">
        <div class="db-skeleton db-skeleton--text-sm" style="width: 120px; margin-bottom: 10px;"></div>
        <div class="db-skeleton" style="width: 100%; height: 84px; border-radius: var(--radius-sm); margin-bottom: 10px;"></div>
        <div style="display: flex; justify-content: flex-end; gap: 8px;">
            <div class="db-skeleton db-skeleton--button" style="width: 100px;"></div>
            <div class="db-skeleton db-skeleton--button" style="width: 80px;"></div>
        </div>
    </div>

    <!-- Messages -->
    <?php for ($i = 0; $i < $messages; $i++):
        $is_self = ($i % 2 === 1);
        $width = rand(55, 80);
    ?>
    <div class="db-skeleton-chat__row<?php echo $is_self ? ' is-self' : ''; ?>">
        <?php if (!$is_self): ?>
        <div class="db-skeleton" style="width: 36px; height: 36px; border-radius: 999px; flex-shrink: 0;"></div>
        <?php endif; ?>
        <div class="db-skeleton-chat__bubble" style="max-width: <?php echo $width; ?>%;">
            <div class="db-skeleton db-skeleton--text" style="width: <?php echo rand(60, 100); ?>%;"></div>
            <div class="db-skeleton db-skeleton--text-sm" style="width: <?php echo rand(40, 80); ?>%;"></div>
            <div class="db-skeleton db-skeleton--text-sm" style="width: <?php echo rand(30, 60); ?>%;"></div>
        </div>
    </div>
    <?php endfor; ?>
</div>
