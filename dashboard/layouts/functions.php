<?php
/**
 * YottaSrc Dashboard — Helper Functions
 * =======================================
 * Reusable utility functions for the dashboard.
 */

/**
 * Translation helper.
 *
 * Supports placeholder replacement:
 *   __('dash_upcoming_days', ['count' => 31])
 *   // "dash_upcoming_days" => ":count days" → "31 days"
 *
 * @param  string $key          Dot-style or flat translation key.
 * @param  array  $replacements Associative array of [placeholder => value].
 *                              Supports both `:name` and `{name}` placeholder
 *                              styles in the translation string.
 * @return string               Translated string (falls back to the key itself).
 */
function __($key, $replacements = []) {
    global $lang;
    $text = $lang[$key] ?? $key;

    foreach ($replacements as $placeholder => $value) {
        $v = (string) $value;
        // Laravel-style :name
        $text = str_replace(':' . $placeholder, $v, $text);
        // Curly-brace {name} style (also supports {name})
        $text = str_replace('{' . $placeholder . '}', $v, $text);
    }

    return $text;
}

/**
 * Generate a versioned dashboard asset URL.
 * Uses filemtime() for auto cache-busting when any static file changes.
 * Falls back to DASHBOARD_VERSION if file doesn't exist (e.g. external URLs).
 */
function dash_asset($path) {
    $clean = ltrim($path, '/');
    $abs = __DIR__ . '/../static/' . $clean;
    $ver = file_exists($abs) ? filemtime($abs) : DASHBOARD_VERSION;
    return DASH_BASE_PATH . '/static/' . $clean . '?v=' . $ver;
}

/**
 * Safely output an HTML-escaped string.
 */
function e($string) {
    return htmlspecialchars((string)$string, ENT_QUOTES, 'UTF-8');
}

/**
 * Check if we are in preview / development mode.
 */
function is_preview() {
    return defined('PREVIEW_MODE') && PREVIEW_MODE === true;
}

/**
 * Get the current page identifier used for active nav highlighting.
 * Returns a slug like 'dashboard', 'services', 'invoices', 'security', etc.
 *
 * A page can override detection by setting $nav_active_override before the
 * shell is included. This is useful for detail pages that should keep a
 * parent group lit (e.g. service-details → 'services').
 *
 * URL-based detection rules:
 *   /dashboard/                         → 'dashboard'
 *   /dashboard/pages/X/index.php        → X        (the folder name)
 *   /dashboard/pages/X/Y.php            → Y        (.php stripped)
 *   /dashboard/pages/X/Y/Z.php (deeper) → X        (top-level group)
 */
function current_page() {
    global $nav_active_override;
    if (!empty($nav_active_override)) {
        return $nav_active_override;
    }

    $uri = $_SERVER['REQUEST_URI'] ?? '';
    $path = parse_url($uri, PHP_URL_PATH);
    $path = rtrim($path, '/');

    if (preg_match('#/dashboard/?$#', $path)) {
        return 'dashboard';
    }

    if (preg_match('#/dashboard/pages/([^/]+)(?:/([^/]+))?(?:/([^/?]+))?#', $path, $m)) {
        $folder = $m[1] ?? '';
        $seg2   = $m[2] ?? '';
        $seg3   = $m[3] ?? '';

        // Deep path (folder/sub/file.php): light up the top-level folder
        if ($seg3 !== '') {
            return $folder;
        }

        $page = preg_replace('/\.php$/', '', $seg2);
        if ($page === '' || $page === 'index') {
            return $folder;
        }
        return $page;
    }

    return 'dashboard';
}

/**
 * Check if a nav item should be marked active.
 */
function is_active($page) {
    return current_page() === $page ? ' active' : '';
}

/**
 * Check if a nav group should be expanded (has an active child).
 */
function is_group_open($pages) {
    $current = current_page();
    foreach ($pages as $page) {
        if ($current === $page) return ' open';
    }
    return '';
}

/**
 * Format a currency amount for display.
 *
 * @param  float|int|string  $amount    — the raw number (e.g. 3.42, -149.99)
 * @param  int               $decimals  — number of decimal places (default 2,
 *                                        use 4 for hourly prices like €0.0097)
 * @param  string|null       $currency  — ISO currency code override; falls back
 *                                        to the user's $current_currency session
 * @return string  e.g. "€3.42" or "$3.42"
 */
function format_money($amount, $decimals = 2, $currency = null) {
    global $current_currency, $supported_currencies;
    $cur = $currency ?? $current_currency;
    $symbol = $supported_currencies[$cur]['symbol'] ?? '€';
    return $symbol . number_format((float)$amount, (int)$decimals);
}

/**
 * Generate breadcrumb data from page context.
 * Returns array of ['label' => string, 'url' => string|null].
 */
function breadcrumbs($items) {
    return $items;
}
