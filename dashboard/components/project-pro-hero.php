<?php
/**
 * Project Pro Hero
 * ==================
 * Premium header for project-scoped pages (servers, network, api, ...).
 * Composed from the M4 design-system primitives: .ds-hero + .ds-eyebrow +
 * .ds-stat. Seeded by the project's identity colour via --hero-seed.
 *
 * Expected variables (set before include):
 *   $current_project                — project array (required; set by project-shell.php)
 *   $hero_eyebrow   (string)        — page label e.g. "Servers", "Network"
 *   $hero_title     (string)        — page-specific headline
 *   $hero_sub       (string|null)   — optional subtitle
 *   $hero_stats     (array|null)    — optional list of ['icon', 'label', 'value', 'seed'?]
 *   $hero_actions   (string|null)   — optional raw HTML for the right-side action row
 *
 * Backend: this is pure presentational — no data fetching here.
 */
if (empty($current_project)) return;
$__pro_seed = cloud_project_seed($current_project['id']);
?>
<section class="ds-hero ds-hero--seeded" style="--hero-seed: var(--seed-<?php echo $__pro_seed; ?>);">
    <div class="ds-hero__top">
        <div class="ds-hero__identity">
            <div class="ds-hero__avatar">
                <?php echo cloud_project_identicon($current_project['id'], 36); ?>
            </div>
            <div class="ds-hero__title-block">
                <div class="ds-hero__meta-top">
                    <span class="ds-eyebrow ds-eyebrow--seeded"><?php echo e($hero_eyebrow ?? ''); ?></span>
                    <span class="ds-hero__meta-sep">·</span>
                    <a href="<?php echo e(cloud_project_url('servers', $current_project['id'])); ?>" class="db-proj-home-link">
                        <span class="db-proj-home-link__id">#<?php echo e($current_project['id']); ?></span>
                        <span class="db-proj-home-link__name"><?php echo e($current_project['name']); ?></span>
                    </a>
                </div>
                <h1 class="ds-hero__title"><?php echo e($hero_title ?? ''); ?></h1>
                <?php if (!empty($hero_sub)): ?>
                <p class="ds-hero__sub"><?php echo e($hero_sub); ?></p>
                <?php endif; ?>
            </div>
        </div>

        <?php if (!empty($hero_actions)): ?>
        <div class="ds-hero__actions">
            <?php echo $hero_actions; ?>
        </div>
        <?php endif; ?>
    </div>

    <?php
    $__pro_stats_key    = 'proj-' . $current_project['id'];
    $__pro_has_stats    = !empty($hero_stats) && is_array($hero_stats);
    $__pro_hide_label   = __('common_hide_stats');
    $__pro_show_label   = __('common_show_stats');
    ?>
    <?php if ($__pro_has_stats): ?>
    <div class="ds-hero__stats" id="proStats-<?php echo e($current_project['id']); ?>"
         data-collapsible-stats data-stats-key="<?php echo e($__pro_stats_key); ?>">
        <div class="ds-stat-grid">
            <?php foreach ($hero_stats as $st):
                $seed = $st['seed'] ?? 0;
            ?>
            <div class="ds-stat ds-stat--glass ds-stat--row" style="--stat-seed: var(--seed-<?php echo (int)$seed; ?>);">
                <div class="ds-stat__icon-box"><i class="fas <?php echo e($st['icon']); ?>"></i></div>
                <div class="ds-stat__body">
                    <div class="ds-stat__label"><?php echo e($st['label']); ?></div>
                    <div class="ds-stat__num"><?php echo e($st['value']); ?></div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="db-stats-rail">
        <button type="button" class="db-stats-toggle"
                data-stats-toggle="<?php echo e($__pro_stats_key); ?>"
                aria-expanded="true"
                aria-controls="proStats-<?php echo e($current_project['id']); ?>"
                title="<?php echo e($__pro_hide_label); ?>">
            <span class="db-stats-toggle__label"><?php echo e(__('common_statistics')); ?></span>
            <i class="fas fa-chevron-up db-stats-toggle__icon"></i>
        </button>
    </div>
    <?php endif; ?>
</section>
