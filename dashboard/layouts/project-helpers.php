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
