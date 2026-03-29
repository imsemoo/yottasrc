<?php
/**
 * 404 — Page Not Found
 */
$error_icon    = 'fa-compass';
$error_code    = '404';
$error_badge   = 'PAGE NOT FOUND';
$error_title   = 'Page not found';
$error_desc    = 'The page you\'re looking for doesn\'t exist or has been moved. Check the URL or head back home.';

$error_secondary = [
    'url'   => '/contact-us/',
    'icon'  => 'fa-headset',
    'label' => 'Contact Support',
];

$error_links_label = 'Popular destinations';
$error_links = [
    ['url' => '/best-cpanel-hosting/', 'icon' => 'fas fa-server',   'label' => 'cPanel Hosting'],
    ['url' => '/vps/',                 'icon' => 'fab fa-linux',     'label' => 'VPS Servers'],
    ['url' => '/cloud/',               'icon' => 'fas fa-cloud',     'label' => 'Cloud Servers'],
    ['url' => '/domains-registration/','icon' => 'fas fa-globe',     'label' => 'Domains'],
];

require __DIR__ . '/_layout.php';
