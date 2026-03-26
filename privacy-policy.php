<?php
/**
 * YottaSrc — Privacy Policy
 * ==========================
 */
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/topbar.php';

$legal_title     = __('privacy_title');
$legal_breadcrumb = __('privacy_title');
$legal_updated   = __('privacy_updated');
$legal_content   = __('privacy_content');

include __DIR__ . '/legal-template.php';
require_once __DIR__ . '/includes/footer.php';
?>
