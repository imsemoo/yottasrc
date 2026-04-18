<?php
/**
 * Confirm-Body Partial
 * ======================
 * Unified body markup for delete/destructive confirmation modals.
 * Used INSIDE the modal wrapper, between `components/modal.php` and
 * `components/modal-end.php`. Ensures every confirm dialog across
 * the dashboard has identical icon, structure and tone.
 *
 * Expected variables (set before include):
 *   $cb_desc           (string)           — main confirmation question
 *   $cb_target_label   (string|null)      — summary row label ("Project", "Server")
 *   $cb_target_value   (string|null)      — target id/name shown in red mono
 *   $cb_warn           (string|null)      — extra danger notice text
 *   $cb_icon           (string|null)      — override icon class (default fa-triangle-exclamation)
 *   $cb_variant        (string|null)      — icon tint variant: danger (default), success, info, warning
 *
 * Example:
 *   $cb_desc         = __('cloud_project_delete_desc');
 *   $cb_target_label = __('cloud_project_delete_project');
 *   $cb_target_value = '#' . $id . ' — ' . $name;
 *   $cb_warn         = __('cloud_project_delete_warn');
 *   include __DIR__ . '/../../components/confirm-body.php';
 */
$cb_variant = $cb_variant ?? 'danger';
?>
<div class="db-confirm-body">
    <div class="db-modal-icon db-modal-icon--<?php echo e($cb_variant); ?>">
        <i class="fas <?php echo e($cb_icon ?? 'fa-triangle-exclamation'); ?>"></i>
    </div>
    <p><?php echo e($cb_desc ?? ''); ?></p>

    <?php if (!empty($cb_target_label) && !empty($cb_target_value)): ?>
    <div class="db-confirm-summary">
        <div class="db-confirm-summary__row">
            <span><?php echo e($cb_target_label); ?></span>
            <span class="db-confirm-summary__target"><?php echo e($cb_target_value); ?></span>
        </div>
    </div>
    <?php endif; ?>

    <?php if (!empty($cb_warn)): ?>
    <div class="db-notice db-notice--danger db-confirm-body__warn">
        <i class="fas fa-triangle-exclamation"></i>
        <span><?php echo e($cb_warn); ?></span>
    </div>
    <?php endif; ?>
</div>
