<?php
/**
 * Support PIN Component
 * ======================
 * Renders the user's Support PIN in two variants:
 *
 *   VARIANT "card"   — large card for the Profile page. Shows full PIN,
 *                      copy + refresh actions, explanation and a warning.
 *
 *   VARIANT "inline" — compact horizontal row. Good for page headers,
 *                      dropdowns, or anywhere that needs a quick glance.
 *
 * Usage:
 *   $spin_variant = 'card';   // or 'inline'
 *   include __DIR__ . '/../../components/support-pin.php';
 *
 * Reads $current_support_pin from layouts/config.php.
 *
 * The refresh icon is DECORATIVE ONLY — the PIN is fixed. When wired to
 * the backend, swap the onclick for a POST to /api/support-pin/regenerate.
 */

$spin_variant = $spin_variant ?? 'card';
$spin_pin     = $current_support_pin ?? 'YS-0000-0000';

if ($spin_variant === 'inline'):
?>
<div class="db-support-pin db-support-pin--inline" data-support-pin>
    <i class="fas fa-shield-halved db-support-pin__icon"></i>
    <span class="db-support-pin__label"><?php echo e(__('support_pin_label')); ?></span>
    <code class="db-support-pin__value" data-pin-value><?php echo e($spin_pin); ?></code>
    <button type="button" class="db-support-pin__btn" data-pin-copy title="<?php echo e(__('common_copy')); ?>" aria-label="<?php echo e(__('common_copy')); ?>">
        <i class="fas fa-copy"></i>
    </button>
    <button type="button" class="db-support-pin__btn" data-pin-refresh title="<?php echo e(__('support_pin_refresh')); ?>" aria-label="<?php echo e(__('support_pin_refresh')); ?>">
        <i class="fas fa-rotate"></i>
    </button>
</div>
<?php else: /* card */ ?>
<div class="db-card db-mt" data-support-pin>
    <div class="db-card-header">
        <h2 class="db-card-title">
            <i class="db-card-title-icon fas fa-shield-halved"></i>
            <?php echo e(__('support_pin_title')); ?>
        </h2>
    </div>
    <div class="db-card-body">
        <p class="db-support-pin__desc"><?php echo e(__('support_pin_desc')); ?></p>

        <div class="db-support-pin__row">
            <div class="db-support-pin__display">
                <span class="db-support-pin__display-label"><?php echo e(__('support_pin_your_pin')); ?></span>
                <code class="db-support-pin__display-value" data-pin-value><?php echo e($spin_pin); ?></code>
            </div>
            <div class="db-support-pin__actions">
                <button type="button" class="db-btn db-btn--secondary db-btn--sm" data-pin-copy>
                    <i class="fas fa-copy"></i> <?php echo e(__('common_copy')); ?>
                </button>
                <button type="button" class="db-btn db-btn--secondary db-btn--sm" data-pin-refresh title="<?php echo e(__('support_pin_refresh_hint')); ?>">
                    <i class="fas fa-rotate"></i> <?php echo e(__('support_pin_refresh')); ?>
                </button>
            </div>
        </div>

        <div class="db-alert db-alert--warning db-support-pin__warn">
            <i class="fas fa-triangle-exclamation db-alert-icon"></i>
            <div class="db-alert-content">
                <div class="db-alert-title"><?php echo e(__('support_pin_warn_title')); ?></div>
                <div class="db-alert-message"><?php echo e(__('support_pin_warn_desc')); ?></div>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>
