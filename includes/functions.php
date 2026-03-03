<?php
/**
 * YottaSrc — Helper Functions
 * ============================
 * Reusable utility functions for the entire application.
 */

/**
 * Translation helper.
 * Returns the translated string for the given key, or the key itself as fallback.
 *
 * @param  string $key  Translation key (dot notation not used — flat array)
 * @return string
 */
function __($key) {
    global $lang;
    return $lang[$key] ?? $key;
}

/**
 * Generate a versioned asset URL.
 *
 * @param  string $path  Relative path inside /assets/
 * @return string
 */
function asset($path) {
    return BASE_PATH . '/assets/' . ltrim($path, '/') . '?v=' . ASSETS_VERSION;
}

/**
 * Safely output an HTML-escaped string.
 *
 * @param  string $string
 * @return string
 */
function e($string) {
    return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
}

/**
 * Check if we are in preview / development mode.
 *
 * @return bool
 */
function is_preview() {
    return defined('PREVIEW_MODE') && PREVIEW_MODE === true;
}
