<?php
/**
 * Export Dropdown
 * ================
 * Single button + dropdown with CSV / Excel / Print actions.
 * Drop-in replacement for the single `DashExport('csv')` buttons so every
 * table offers the same export options. Relies on the dashboard-wide
 * row-dropdown system (`data-dropdown-toggle`).
 *
 * Usage:
 *   include __DIR__ . '/../components/export-dropdown.php';
 */
?>
<div class="db-dropdown-wrapper">
    <button type="button" class="db-view-switch__btn" data-dropdown-toggle title="<?php echo e(__('toolbar_export')); ?>" aria-label="<?php echo e(__('toolbar_export')); ?>">
        <i class="fas fa-download"></i>
    </button>
    <div class="db-dropdown-menu">
        <button type="button" class="db-dropdown-item" onclick="DashExport('csv')">
            <i class="fas fa-file-csv"></i> CSV
        </button>
        <button type="button" class="db-dropdown-item" onclick="DashExport('excel')">
            <i class="fas fa-file-excel"></i> Excel
        </button>
        <button type="button" class="db-dropdown-item" onclick="DashExport('print')">
            <i class="fas fa-print"></i> <?php echo e(__('toolbar_print')); ?>
        </button>
    </div>
</div>
