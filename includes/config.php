<?php
/**
 * YottaSrc — Global Configuration
 * ================================
 * Site-wide settings, language loader, and shared constants.
 */

// ── Environment ──
define('SITE_NAME',        'YottaSrc');
define('SITE_URL',         'https://yottasrc.com');
define('CONSOLE_URL',      'https://console.yottasrc.com');
define('CP_URL',           'https://cp.yottasrc.com');
define('ASSETS_VERSION',   '1.0.0');

// ── Base Path (auto-detect for local dev vs production) ──
// On Laragon with localhost/yottasrc → BASE_PATH = '/yottasrc'
// On yottasrc.test or production     → BASE_PATH = ''
$_basePath = '';
if (php_sapi_name() !== 'cli') {
    $docRoot  = realpath($_SERVER['DOCUMENT_ROOT'] ?? '');
    $appRoot  = realpath(__DIR__ . '/..');
    if ($docRoot && $appRoot && $docRoot !== $appRoot && strpos($appRoot, $docRoot) === 0) {
        $_basePath = str_replace('\\', '/', substr($appRoot, strlen($docRoot)));
    }
}
define('BASE_PATH', $_basePath);

// ── Preview Mode (set to false in production) ──
define('PREVIEW_MODE', true);

// ── Language ──
$supported_languages = ['en', 'ar'];
$default_language    = 'en';

// Detect language from query string, cookie, or default
$current_lang = $_GET['lang'] ?? $_COOKIE['yottasrc_lang'] ?? $default_language;
if (!in_array($current_lang, $supported_languages, true)) {
    $current_lang = $default_language;
}

// Set language cookie (30 days)
if (!headers_sent()) {
    setcookie('yottasrc_lang', $current_lang, time() + (86400 * 30), '/');
}

// Load language file
$lang_file = __DIR__ . '/../lang/' . $current_lang . '.php';
if (file_exists($lang_file)) {
    $lang = require $lang_file;
} else {
    $lang = require __DIR__ . '/../lang/en.php';
}

// Direction for RTL support
$text_direction = ($current_lang === 'ar') ? 'rtl' : 'ltr';

// ── Currency ──
$supported_currencies = [
    'EUR' => ['symbol' => '€',  'name_en' => 'Euro',           'name_ar' => 'يورو'],
    'USD' => ['symbol' => '$',  'name_en' => 'US Dollar',      'name_ar' => 'دولار أمريكي'],
    'GBP' => ['symbol' => '£',  'name_en' => 'British Pound',  'name_ar' => 'جنيه إسترليني'],
    'SAR' => ['symbol' => '﷼', 'name_en' => 'Saudi Riyal',    'name_ar' => 'ريال سعودي'],
    'EGP' => ['symbol' => 'E£', 'name_en' => 'Egyptian Pound', 'name_ar' => 'جنيه مصري'],
    'AED' => ['symbol' => 'د.إ', 'name_en' => 'UAE Dirham',   'name_ar' => 'درهم إماراتي'],
];
$default_currency = 'EUR';

$current_currency = $_GET['currency'] ?? $_COOKIE['yottasrc_currency'] ?? $default_currency;
if (!array_key_exists($current_currency, $supported_currencies)) {
    $current_currency = $default_currency;
}

if (!headers_sent()) {
    setcookie('yottasrc_currency', $current_currency, time() + (86400 * 30), '/');
}

// ── Load Functions ──
require_once __DIR__ . '/functions.php';
