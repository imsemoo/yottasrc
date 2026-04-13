<?php
/**
 * Error State Component
 *
 * Usage:
 *   $error_title = 'Something went wrong';
 *   $error_desc  = 'Failed to load data.';
 *   $error_retry = true;
 *   include __DIR__ . '/../components/error-state.php';
 */
?>
<div class="db-error-state">
    <div class="db-error-state-icon">
        <i class="fas fa-circle-exclamation"></i>
    </div>
    <h3 class="db-error-state-title"><?php echo e($error_title ?? __('common_error')); ?></h3>
    <p class="db-error-state-desc"><?php echo e($error_desc ?? __('common_error_desc')); ?></p>
    <?php if (!empty($error_retry)): ?>
    <button class="db-btn db-btn--secondary db-btn--sm" onclick="location.reload()">
        <i class="fas fa-rotate-right"></i> <?php echo e(__('common_retry')); ?>
    </button>
    <?php endif; ?>
</div>
