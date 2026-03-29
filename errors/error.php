<?php
/**
 * Generic Error Page
 * ==================
 * Set any of these variables before requiring this file:
 *
 *   $error_code     — e.g. '403' (default: '')
 *   $error_title    — e.g. 'Access Denied'
 *   $error_desc     — custom description
 *   $error_variant  — 'danger' | 'warning' | '' (default: 'warning')
 *   $error_icon     — Font Awesome class (default: 'fa-triangle-exclamation')
 *   $error_badge    — Badge text (default: 'ERROR')
 */
$error_variant = $error_variant ?? 'warning';
$error_icon    = $error_icon    ?? 'fa-triangle-exclamation';
$error_code    = $error_code    ?? '';
$error_badge   = $error_badge   ?? 'ERROR';
$error_title   = $error_title   ?? 'Something went wrong';
$error_desc    = $error_desc    ?? 'An unexpected error occurred. Please try again or contact support if the problem persists.';

$error_secondary = $error_secondary ?? [
    'url'   => 'javascript:history.back()',
    'icon'  => 'fa-arrow-left',
    'label' => 'Go Back',
];

$error_links_label = $error_links_label ?? 'Need help?';
$error_links = $error_links ?? [
    ['url' => '/contact-us/',               'icon' => 'fas fa-headset', 'label' => 'Support'],
    ['url' => 'https://docs.yottasrc.com/', 'icon' => 'fas fa-book',   'label' => 'Documentation'],
    ['url' => '/',                           'icon' => 'fas fa-home',   'label' => 'Homepage'],
];

require __DIR__ . '/_layout.php';
