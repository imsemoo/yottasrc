<?php
/**
 * Modal Component
 *
 * Usage:
 *   $modal_id = 'confirmDelete';
 *   $modal_title = 'Confirm Delete';
 *   $modal_size = ''; // sm, lg, or empty for default
 *   include __DIR__ . '/../components/modal.php';
 *   // Content goes in $modal_body_content before include,
 *   // or use slots approach below.
 *
 * This outputs the shell. Page JS controls open/close via .is-active class.
 */
$size_class = !empty($modal_size) ? ' db-modal--' . $modal_size : '';
?>
<div class="db-modal-overlay" id="<?php echo e($modal_id ?? 'modal'); ?>">
    <div class="db-modal<?php echo $size_class; ?>">
        <div class="db-modal-header">
            <h3 class="db-modal-title"><?php echo e($modal_title ?? ''); ?></h3>
            <button class="db-modal-close" data-modal-close aria-label="<?php echo e(__('common_close')); ?>">
                <i class="fas fa-xmark"></i>
            </button>
        </div>
        <div class="db-modal-body">
