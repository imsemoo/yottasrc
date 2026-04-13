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
 * @param  array  $replacements Associative array of [:placeholder => value].
 * @return string               Translated string (falls back to the key itself).
 */
function __($key, $replacements = []) {
    global $lang;
    $text = $lang[$key] ?? $key;

    foreach ($replacements as $placeholder => $value) {
        $text = str_replace(':' . $placeholder, (string) $value, $text);
    }

    return $text;
}

/**
 * Generate a versioned dashboard asset URL.
 */
function dash_asset($path) {
    return DASH_BASE_PATH . '/static/' . ltrim($path, '/') . '?v=' . DASHBOARD_VERSION;
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
 * Get the current page identifier from the URL for active nav highlighting.
 * Returns a string like 'dashboard', 'services', 'invoices', etc.
 */
function current_page() {
    $uri = $_SERVER['REQUEST_URI'] ?? '';
    $path = parse_url($uri, PHP_URL_PATH);
    $path = rtrim($path, '/');

    // Extract the last segment after /dashboard/
    if (preg_match('#/dashboard/pages/([^/]+)(?:/([^/?]+))?#', $path, $m)) {
        return $m[2] ?? $m[1];
    }

    // Dashboard root
    if (preg_match('#/dashboard/?$#', $path)) {
        return 'dashboard';
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
 * Format currency amount.
 */
function format_money($amount, $currency = null) {
    global $current_currency, $supported_currencies;
    $cur = $currency ?? $current_currency;
    $symbol = $supported_currencies[$cur]['symbol'] ?? '€';
    return $symbol . number_format((float)$amount, 2);
}

/**
 * Generate breadcrumb data from page context.
 * Returns array of ['label' => string, 'url' => string|null].
 */
function breadcrumbs($items) {
    return $items;
}
