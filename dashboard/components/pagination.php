<?php
/**
 * Pagination Component
 *
 * Usage:
 *   $pg_current = 1;
 *   $pg_total   = 5;
 *   $pg_showing  = '1-10';
 *   $pg_of       = 47;
 *   include __DIR__ . '/../components/pagination.php';
 */
$current = $pg_current ?? 1;
$total = $pg_total ?? 1;
?>
<div class="db-pagination">
    <div class="db-pagination-info">
        <?php echo e(__('common_showing')); ?> <?php echo e($pg_showing ?? '0'); ?> <?php echo e(__('common_of')); ?> <?php echo e($pg_of ?? 0); ?> <?php echo e(__('common_entries')); ?>
    </div>
    <div class="db-pagination-pages">
        <button class="db-pagination-btn" <?php echo $current <= 1 ? 'disabled' : ''; ?> aria-label="<?php echo e(__('common_previous')); ?>">
            <i class="fas fa-chevron-left"></i>
        </button>
        <?php for ($i = 1; $i <= $total; $i++): ?>
        <button class="db-pagination-btn<?php echo $i === $current ? ' active' : ''; ?>"><?php echo $i; ?></button>
        <?php endfor; ?>
        <button class="db-pagination-btn" <?php echo $current >= $total ? 'disabled' : ''; ?> aria-label="<?php echo e(__('common_next')); ?>">
            <i class="fas fa-chevron-right"></i>
        </button>
    </div>
</div>
