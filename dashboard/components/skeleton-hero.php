<?php
/**
 * Skeleton — Hero Banner
 * ========================
 * Wide banner placeholder used for pages whose active state shows a
 * prominent header strip (invoice hero, cloud mission control, etc.).
 *
 * Usage:
 *   $skel_hero_meta_chips = 3;   // number of secondary chips under the title
 *   $skel_hero_actions    = 2;   // number of action-button placeholders on the right
 *   include 'components/skeleton-hero.php';
 */
$meta_chips = $skel_hero_meta_chips ?? 3;
$action_btns = $skel_hero_actions  ?? 2;
?>
<div class="db-skeleton-hero">
    <div class="db-skeleton-hero__left">
        <div class="db-skeleton db-skeleton--badge" style="width: 90px;"></div>
        <div class="db-skeleton db-skeleton--heading" style="width: 320px; height: 28px; margin-top: 10px;"></div>
        <div class="db-skeleton-hero__meta">
            <?php for ($i = 0; $i < $meta_chips; $i++): ?>
            <div class="db-skeleton db-skeleton--text-sm" style="width: <?php echo rand(60, 130); ?>px;"></div>
            <?php endfor; ?>
        </div>
    </div>
    <div class="db-skeleton-hero__right">
        <?php for ($i = 0; $i < $action_btns; $i++): ?>
        <div class="db-skeleton db-skeleton--button" style="width: 110px; height: 38px;"></div>
        <?php endfor; ?>
    </div>
</div>
