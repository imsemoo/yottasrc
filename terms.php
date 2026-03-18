<?php
/**
 * YottaSrc — Terms of Service
 * =============================
 */
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/topbar.php';

$legal_title     = 'Terms of Service';
$legal_breadcrumb = 'Terms of Service';
$legal_updated   = 'March 1, 2026';
$legal_content   = <<<'HTML'
<h2>1. Acceptance of Terms</h2>
<p>By accessing or using any services provided by YottaSrc ("we", "us", "our"), you agree to be bound by these Terms of Service. If you do not agree, you must not use our services.</p>

<h2>2. Services</h2>
<p>YottaSrc provides web hosting, VPS, cloud infrastructure, domain registration, reseller hosting, and related services. We reserve the right to modify, suspend, or discontinue any service at any time with reasonable notice.</p>

<h2>3. Account Registration</h2>
<ul>
    <li>You must provide accurate, complete, and current information during registration</li>
    <li>You are responsible for maintaining the confidentiality of your account credentials</li>
    <li>You are responsible for all activities that occur under your account</li>
    <li>You must be at least 18 years old to create an account</li>
    <li>One person or entity may not maintain more than one account without prior approval</li>
</ul>

<h2>4. Acceptable Use Policy</h2>
<p>You agree not to use our services for:</p>
<ul>
    <li>Any illegal activity or violation of applicable laws</li>
    <li>Hosting or distributing malware, viruses, or malicious code</li>
    <li>Sending spam, phishing, or unsolicited bulk communications</li>
    <li>Hosting content that infringes on intellectual property rights</li>
    <li>Launching or facilitating DDoS attacks</li>
    <li>Mining cryptocurrency without explicit authorization</li>
    <li>Hosting adult, pornographic, or obscene content</li>
    <li>Any activity that disrupts or degrades service for other users</li>
</ul>
<p>Violation of this policy may result in immediate suspension or termination without refund.</p>

<h2>5. Payment &amp; Billing</h2>
<ul>
    <li>All prices are listed in Euros (EUR) unless otherwise specified</li>
    <li>Payment is due at the time of order or before the invoice due date for renewals</li>
    <li>We accept credit cards, PayPal, cryptocurrency, bank transfer, and other methods as listed on our <a href="/payment-methods/">Payment Methods</a> page</li>
    <li>Late payments may result in service suspension after a grace period</li>
    <li>All fees are non-refundable except as outlined in our Refund Policy</li>
</ul>

<h2>6. Refund Policy</h2>
<p>We offer a 30-day money-back guarantee on shared hosting plans. The following are not eligible for refunds:</p>
<ul>
    <li>Domain registrations and renewals</li>
    <li>VPS and dedicated server plans after provisioning</li>
    <li>SSL certificates once issued</li>
    <li>Setup fees and administrative charges</li>
    <li>Services terminated due to AUP violations</li>
</ul>

<h2>7. Service Level Agreement (SLA)</h2>
<p>We guarantee 99.9% uptime for all hosting and VPS services. If we fail to meet this guarantee in any calendar month, you may request a service credit proportional to the downtime experienced. Scheduled maintenance windows are excluded from uptime calculations.</p>

<h2>8. Data &amp; Backups</h2>
<ul>
    <li>We perform regular backups as a courtesy but do not guarantee their availability or completeness</li>
    <li>You are solely responsible for maintaining your own backups</li>
    <li>We are not liable for any data loss resulting from hardware failure, software bugs, or user error</li>
</ul>

<h2>9. Intellectual Property</h2>
<p>All content, branding, and software provided by YottaSrc remain our intellectual property. You retain ownership of content you host on our infrastructure. You grant us a limited license to store, process, and transmit your content solely for the purpose of providing our services.</p>

<h2>10. Limitation of Liability</h2>
<p>To the maximum extent permitted by law, YottaSrc shall not be liable for any indirect, incidental, special, consequential, or punitive damages, including but not limited to loss of profits, data, or business opportunities, arising from your use of our services.</p>
<p>Our total liability for any claim shall not exceed the amount you paid to us in the 12 months preceding the claim.</p>

<h2>11. Termination</h2>
<ul>
    <li>You may cancel your services at any time through your client area</li>
    <li>We may suspend or terminate services for AUP violations, non-payment, or at our discretion with notice</li>
    <li>Upon termination, your data will be retained for 30 days before permanent deletion</li>
</ul>

<h2>12. Indemnification</h2>
<p>You agree to indemnify and hold harmless YottaSrc, its officers, employees, and partners from any claims, damages, or expenses arising from your use of our services or violation of these terms.</p>

<h2>13. Governing Law</h2>
<p>These Terms shall be governed by and construed in accordance with the laws of Romania. Any disputes shall be resolved in the competent courts of Bucharest, Romania.</p>

<h2>14. Changes to Terms</h2>
<p>We reserve the right to modify these Terms at any time. Material changes will be communicated via email or a prominent notice on our website. Continued use of our services after changes constitutes acceptance.</p>

<h2>15. Contact</h2>
<p>For questions about these Terms of Service, contact us at:</p>
<ul>
    <li><strong>Email:</strong> <a href="mailto:legal@yottasrc.com">legal@yottasrc.com</a></li>
    <li><strong>Support:</strong> <a href="https://yottasrc.com/contact/">Contact Page</a></li>
</ul>
HTML;

include __DIR__ . '/legal-template.php';
require_once __DIR__ . '/includes/footer.php';
?>
