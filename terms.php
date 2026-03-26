<?php
/**
 * YottaSrc — Terms of Service
 * =============================
 */
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/topbar.php';

$legal_title     = __('terms_title');
$legal_breadcrumb = __('terms_title');
$legal_updated   = __('terms_updated');
$legal_content   = __('terms_content');

include __DIR__ . '/legal-template.php';
require_once __DIR__ . '/includes/footer.php';
?>
