<?php
/**
 * Page Header Component
 *
 * Usage:
 *   $ph_title = 'Profile';
 *   $ph_desc  = 'Manage your personal information';
 *   $ph_actions = '<a href="#" class="db-btn db-btn--primary">Save</a>';
 *   include __DIR__ . '/../components/page-header.php';
 */
?>
<div class="db-page-header">
    <div class="db-page-header-left">
        <h1 class="db-page-header-title"><?php echo e($ph_title ?? ''); ?></h1>
        <?php if (!empty($ph_desc)): ?>
        <p class="db-page-header-desc"><?php echo e($ph_desc); ?></p>
        <?php endif; ?>
    </div>
    <?php if (!empty($ph_actions)): ?>
    <div class="db-page-header-actions">
        <?php echo $ph_actions; ?>
    </div>
    <?php endif; ?>
</div>
