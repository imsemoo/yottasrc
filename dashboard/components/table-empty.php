<?php
/**
 * Table-Empty Partial
 * ======================
 * Unified markup for in-table "no results" rows (filter/search
 * returned zero items). Renders a single <tr> with centered icon + text,
 * spanning the table's column count.
 *
 * Expected variables (set before include):
 *   $te_colspan (int)              — number of columns to span
 *   $te_text    (string)           — "no results" message
 *   $te_icon    (string|null)      — Font Awesome icon (default: fa-magnifying-glass)
 *   $te_id      (string|null)      — optional id for JS toggling
 *   $te_hidden  (bool|null)        — if true renders hidden (for JS-controlled empties)
 *
 * Example (inside <tbody>):
 *   $te_colspan = 6;
 *   $te_text    = __('services_empty_search');
 *   include __DIR__ . '/../components/table-empty.php';
 */
$te_icon   = $te_icon ?? 'fa-magnifying-glass';
$te_hidden = !empty($te_hidden);
?>
<tr data-table-empty<?php echo $te_hidden ? ' hidden' : ''; ?><?php if (!empty($te_id)): ?> id="<?php echo e($te_id); ?>"<?php endif; ?>>
    <td colspan="<?php echo (int)$te_colspan; ?>">
        <div class="db-table-empty-state">
            <i class="fas <?php echo e($te_icon); ?>"></i>
            <?php echo e($te_text ?? ''); ?>
        </div>
    </td>
</tr>
