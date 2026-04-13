<?php
/**
 * Alert Component
 *
 * Usage:
 *   $alert_type = 'success'; // info, success, warning, error
 *   $alert_title = 'Saved!';
 *   $alert_message = 'Your changes have been saved.';
 *   $alert_dismissible = true;
 *   include __DIR__ . '/../components/alert.php';
 */

$alert_icons = [
    'info'    => 'fas fa-circle-info',
    'success' => 'fas fa-circle-check',
    'warning' => 'fas fa-triangle-exclamation',
    'error'   => 'fas fa-circle-xmark',
];
$icon = $alert_icons[$alert_type ?? 'info'] ?? $alert_icons['info'];
?>
<div class="db-alert db-alert--<?php echo e($alert_type ?? 'info'); ?>">
    <i class="db-alert-icon <?php echo $icon; ?>"></i>
    <div class="db-alert-content">
        <?php if (!empty($alert_title)): ?>
        <div class="db-alert-title"><?php echo e($alert_title); ?></div>
        <?php endif; ?>
        <?php if (!empty($alert_message)): ?>
        <div class="db-alert-message"><?php echo e($alert_message); ?></div>
        <?php endif; ?>
    </div>
    <?php if (!empty($alert_dismissible)): ?>
    <button class="db-alert-dismiss" onclick="this.closest('.db-alert').remove()" aria-label="<?php echo e(__('common_close')); ?>">
        <i class="fas fa-xmark"></i>
    </button>
    <?php endif; ?>
</div>
