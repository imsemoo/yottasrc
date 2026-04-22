<?php
/**
 * Skeleton — Wizard Stepper
 * ============================
 * Horizontal step indicator (circles + connector lines) + a tall body
 * placeholder that mimics the wizard form panel underneath.
 *
 * Usage:
 *   $skel_stepper_count = 3;        // number of steps
 *   $skel_stepper_current = 0;      // index of the "active" placeholder circle
 *   $skel_stepper_panel = true;     // render the body panel placeholder
 *   $skel_stepper_rows  = 4;        // form rows inside the panel
 *   include 'components/skeleton-stepper.php';
 */
$count    = $skel_stepper_count   ?? 3;
$current  = $skel_stepper_current ?? 0;
$show_pan = $skel_stepper_panel   ?? true;
$rows     = $skel_stepper_rows    ?? 4;
?>
<div class="db-card db-mb">
    <div class="db-card-body">
        <div class="db-skeleton-stepper">
            <?php for ($i = 0; $i < $count; $i++): ?>
            <div class="db-skeleton-stepper__step<?php echo $i === $current ? ' is-active' : ''; ?>">
                <div class="db-skeleton-stepper__dot"></div>
                <div class="db-skeleton db-skeleton--text-sm" style="width: 80px; margin-top: 8px;"></div>
            </div>
            <?php if ($i < $count - 1): ?>
            <div class="db-skeleton-stepper__connector"></div>
            <?php endif; ?>
            <?php endfor; ?>
        </div>
    </div>
</div>

<?php if ($show_pan): ?>
<div class="db-card">
    <div class="db-card-body">
        <div class="db-skeleton db-skeleton--heading" style="width: 220px; margin-bottom: 8px;"></div>
        <div class="db-skeleton db-skeleton--text-sm" style="width: 65%; margin-bottom: 24px;"></div>

        <?php for ($i = 0; $i < $rows; $i++): ?>
        <div class="db-skeleton-form-group">
            <div class="db-skeleton db-skeleton--text-sm" style="width: 30%;"></div>
            <div class="db-skeleton" style="width: 100%; height: 40px; border-radius: var(--radius-sm);"></div>
        </div>
        <?php endfor; ?>

        <div style="display: flex; justify-content: space-between; margin-top: 24px;">
            <div class="db-skeleton db-skeleton--button" style="width: 100px;"></div>
            <div class="db-skeleton db-skeleton--button" style="width: 120px;"></div>
        </div>
    </div>
</div>
<?php endif; ?>
