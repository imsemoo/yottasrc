<?php
/**
 * YottaSrc — Helper Functions
 * ============================
 * Reusable utility functions for the entire application.
 */

/**
 * Translation helper.
 * Returns the translated string for the given key, or the key itself as fallback.
 * Supports placeholder replacement: __('key', ['name' => 'John']) replaces :name
 *
 * @param  string $key            Translation key (flat array)
 * @param  array  $replacements   Associative array of [:placeholder => value]
 * @return string
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
 * Generate a versioned asset URL.
 *
 * @param  string $path  Relative path inside /static/
 * @return string
 */
function asset($path) {
    return BASE_PATH . '/static/' . ltrim($path, '/') . '?v=' . ASSETS_VERSION;
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
