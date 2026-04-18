<?php
/**
 * YottaSrc Dashboard — Project Context Helpers
 * ==============================================
 * Mock project data + lookup helpers used by project-scoped pages.
 * Backend will replace `cloud_get_project()` with a real query.
 */

/**
 * Mock project database — keyed by project ID.
 * Backend will replace this with a real lookup.
 */
function cloud_projects_mock() {
    return [
        '27389' => ['id' => '27389', 'name' => 'ahsplay',       'servers' => 1, 'created' => '2 days ago'],
        '27156' => ['id' => '27156', 'name' => 'website-prod',  'servers' => 3, 'created' => '1 week ago'],
        '26921' => ['id' => '26921', 'name' => 'staging-env',   'servers' => 2, 'created' => '3 weeks ago'],
    ];
}

/**
 * Look up a project by ID. Returns project array or null.
 */
function cloud_get_project($id) {
    $projects = cloud_projects_mock();
    return $projects[(string)$id] ?? null;
}

/**
 * Build URL for a project-scoped page.
 */
function cloud_project_url($page, $project_id, $extra = []) {
    $url = DASH_BASE_PATH . '/pages/cloud/project/' . $page . '.php?id=' . urlencode($project_id);
    foreach ($extra as $k => $v) {
        $url .= '&' . urlencode($k) . '=' . urlencode($v);
    }
    return $url;
}

/**
 * Require a valid project ID. Redirects to cloud hub if missing/invalid.
 * Returns the project array.
 */
function cloud_require_project($id) {
    $project = $id ? cloud_get_project($id) : null;
    if (!$project) {
        if (!headers_sent()) {
            header('Location: ' . DASH_BASE_PATH . '/pages/cloud/index.php');
            exit;
        }
    }
    return $project;
}

/**
 * Deterministic seed index (0-3) for a project ID.
 * Used to pick --seed-N color variable + identicon pattern.
 */
function cloud_project_seed($project_id) {
    $hash = crc32((string)$project_id);
    return abs($hash) % 4;
}

/**
 * Generate an SVG identicon for a project — 5x5 symmetric pattern.
 * Deterministic based on project_id hash.
 */
function cloud_project_identicon($project_id, $size = 40) {
    $seed_idx = cloud_project_seed($project_id);
    $hash = md5((string)$project_id);
    $cells_per_side = 5;
    $cell_size = $size / $cells_per_side;
    $cells = '';
    // Build left half (3 cols), mirror to right
    for ($y = 0; $y < $cells_per_side; $y++) {
        for ($x = 0; $x < 3; $x++) {
            $byte = hexdec(substr($hash, ($y * 3 + $x) * 2, 2));
            if ($byte > 120) {
                $cx = $x * $cell_size;
                $cy = $y * $cell_size;
                $cells .= sprintf('<rect x="%.2f" y="%.2f" width="%.2f" height="%.2f"/>', $cx, $cy, $cell_size, $cell_size);
                if ($x < 2) {
                    $mirror_x = (4 - $x) * $cell_size;
                    $cells .= sprintf('<rect x="%.2f" y="%.2f" width="%.2f" height="%.2f"/>', $mirror_x, $cy, $cell_size, $cell_size);
                }
            }
        }
    }
    return sprintf(
        '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 %d %d" width="%d" height="%d" class="db-identicon" data-seed="%d"><g fill="rgb(var(--seed-%d))">%s</g></svg>',
        $size, $size, $size, $size, $seed_idx, $seed_idx, $cells
    );
}

/**
 * Generate an SVG sparkline from an array of values.
 * Returns inline SVG sized to the container.
 */
function cloud_sparkline($values, $w = 120, $h = 36, $color = 'currentColor') {
    if (empty($values)) return '';
    $max = max($values);
    $min = min($values);
    $range = max(0.01, $max - $min);
    $count = count($values);
    $step_x = $w / max(1, $count - 1);
    $points = [];
    foreach ($values as $i => $v) {
        $x = $i * $step_x;
        $y = $h - (($v - $min) / $range) * ($h - 4) - 2;
        $points[] = sprintf('%.2f,%.2f', $x, $y);
    }
    $poly = implode(' ', $points);
    // Build area polygon (close to bottom)
    $area = $poly . sprintf(' %.2f,%d 0,%d', $w, $h, $h);
    return sprintf(
        '<svg class="db-sparkline" viewBox="0 0 %d %d" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">' .
        '<defs><linearGradient id="spark-%s" x1="0" x2="0" y1="0" y2="1"><stop offset="0%%" stop-color="%s" stop-opacity="0.35"/><stop offset="100%%" stop-color="%s" stop-opacity="0"/></linearGradient></defs>' .
        '<polygon points="%s" fill="url(#spark-%s)"/>' .
        '<polyline points="%s" fill="none" stroke="%s" stroke-width="1.5" stroke-linejoin="round" stroke-linecap="round"/>' .
        '</svg>',
        $w, $h, md5($poly), $color, $color, $area, md5($poly), $poly, $color
    );
}
