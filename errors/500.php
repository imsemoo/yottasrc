<?php
/**
 * 500 — Internal Server Error
 */
$error_variant = 'danger';
$error_icon    = 'fa-server';
$error_code    = '500';
$error_badge   = 'SERVER ERROR';
$error_title   = 'Something went wrong';
$error_desc    = 'Our servers hit an unexpected error. The team has been notified and is working on a fix. Please try again shortly.';

$error_secondary = [
    'url'   => '/contact-us/',
    'icon'  => 'fa-bug',
    'label' => 'Report Issue',
];

$error_links_label = 'While you wait';
$error_links = [
    ['url' => 'https://status.yottasrc.com', 'icon' => 'fas fa-signal',  'label' => 'System Status'],
    ['url' => '/contact-us/',                 'icon' => 'fas fa-headset', 'label' => 'Support'],
    ['url' => 'https://docs.yottasrc.com/',   'icon' => 'fas fa-book',   'label' => 'Documentation'],
];

$error_ref = 'REF-' . strtoupper(substr(md5(time()), 0, 8));

require __DIR__ . '/_layout.php';
