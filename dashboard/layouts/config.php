<?php
/**
 * YottaSrc Dashboard — Configuration
 * ====================================
 * Extends the main site config with dashboard-specific settings.
 */

// ── Dashboard Constants ──
define('DASHBOARD_VERSION', '1.0.0');

// ── Base Path (auto-detect for local dev vs production) ──
$_dashBasePath = '';
if (php_sapi_name() !== 'cli') {
    $docRoot = realpath($_SERVER['DOCUMENT_ROOT'] ?? '');
    $appRoot = realpath(__DIR__ . '/..');
    if ($docRoot && $appRoot && $docRoot !== $appRoot && strpos($appRoot, $docRoot) === 0) {
        $_dashBasePath = str_replace('\\', '/', substr($appRoot, strlen($docRoot)));
    }
}
define('DASH_BASE_PATH', $_dashBasePath);

// ── Environment ──
define('SITE_NAME',       'YottaSrc');
define('SITE_URL',        'https://yottasrc.com');
define('CONSOLE_URL',     'https://console.yottasrc.com');
define('CONSOLE_ASSETS',  'https://console.yottasrc.com/assets/images');
define('CP_URL',          'https://cp.yottasrc.com');
define('WIKI_URL',        'https://wiki.yottasrc.com');
define('DOCS_URL',        'https://docs.yottasrc.com');
define('BLOG_URL',        'https://blog.yottasrc.com');
define('PREVIEW_MODE',    true);

// ── Language ──
$supported_languages = ['en', 'ar'];
$default_language    = 'en';

$current_lang = $_GET['lang'] ?? $_COOKIE['yottasrc_lang'] ?? $default_language;
if (!in_array($current_lang, $supported_languages, true)) {
    $current_lang = $default_language;
}

if (!headers_sent()) {
    setcookie('yottasrc_lang', $current_lang, time() + (86400 * 30), '/');
}

// Load dashboard language file
$lang_file = __DIR__ . '/../lang/' . $current_lang . '.php';
if (file_exists($lang_file)) {
    $lang = require $lang_file;
} else {
    $lang = require __DIR__ . '/../lang/en.php';
}

$text_direction = ($current_lang === 'ar') ? 'rtl' : 'ltr';

// ── Currency ──
$supported_currencies = [
    'EUR' => ['symbol' => '€',   'name_en' => 'Euro',           'name_ar' => 'يورو'],
    'USD' => ['symbol' => '$',   'name_en' => 'US Dollar',      'name_ar' => 'دولار أمريكي'],
    'GBP' => ['symbol' => '£',   'name_en' => 'British Pound',  'name_ar' => 'جنيه إسترليني'],
    'SAR' => ['symbol' => '﷼',  'name_en' => 'Saudi Riyal',    'name_ar' => 'ريال سعودي'],
    'EGP' => ['symbol' => 'E£',  'name_en' => 'Egyptian Pound', 'name_ar' => 'جنيه مصري'],
    'AED' => ['symbol' => 'د.إ', 'name_en' => 'UAE Dirham',     'name_ar' => 'درهم إماراتي'],
];
$default_currency = 'EUR';

$current_currency = $_GET['currency'] ?? $_COOKIE['yottasrc_currency'] ?? $default_currency;
if (!array_key_exists($current_currency, $supported_currencies)) {
    $current_currency = $default_currency;
}

if (!headers_sent()) {
    setcookie('yottasrc_currency', $current_currency, time() + (86400 * 30), '/');
}

/* ──────────────────────────────────────────
   SUPPORT PIN  (mock — backend: replace with users.support_pin)
   ──────────────────────────────────────────
   Fixed PIN each client shares with our support team for identity
   verification. No refresh logic here — the refresh icon in the UI is
   decorative only; regeneration is handled server-side when called.
   ────────────────────────────────────────── */
$current_support_pin = 'YS-4827-9361';

// ── Load Functions ──
require_once __DIR__ . '/functions.php';
