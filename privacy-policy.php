<?php
/**
 * YottaSrc — Privacy Policy
 * ==========================
 */
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/topbar.php';

$legal_title     = 'Privacy Policy';
$legal_breadcrumb = 'Privacy Policy';
$legal_updated   = 'March 1, 2026';
$legal_content   = <<<'HTML'
<h2>1. Introduction</h2>
<p>YottaSrc ("we", "us", "our") is committed to protecting your privacy. This Privacy Policy explains how we collect, use, disclose, and safeguard your information when you visit our website or use our services.</p>
<p>By using our services, you agree to the collection and use of information in accordance with this policy.</p>

<h2>2. Information We Collect</h2>
<h3>2.1 Personal Information</h3>
<p>We may collect personally identifiable information that you voluntarily provide, including but not limited to:</p>
<ul>
    <li>Full name and contact details (email, phone number, address)</li>
    <li>Billing and payment information</li>
    <li>Account credentials</li>
    <li>Government-issued ID (for verification purposes only)</li>
    <li>Communication records (support tickets, emails)</li>
</ul>

<h3>2.2 Automatically Collected Information</h3>
<p>When you access our website or services, we automatically collect:</p>
<ul>
    <li>IP address and geolocation data</li>
    <li>Browser type and version</li>
    <li>Operating system</li>
    <li>Pages visited and time spent</li>
    <li>Referring website URLs</li>
    <li>Cookies and similar tracking technologies</li>
</ul>

<h2>3. How We Use Your Information</h2>
<p>We use the information we collect for the following purposes:</p>
<ul>
    <li>To provide, maintain, and improve our services</li>
    <li>To process transactions and send billing notifications</li>
    <li>To respond to support requests and communicate with you</li>
    <li>To detect and prevent fraud, abuse, and security threats</li>
    <li>To comply with legal obligations</li>
    <li>To send promotional communications (with your consent)</li>
    <li>To analyze usage patterns and improve user experience</li>
</ul>

<h2>4. Data Sharing &amp; Disclosure</h2>
<p>We do not sell your personal information. We may share your data with:</p>
<ul>
    <li><strong>Service providers:</strong> Payment processors, domain registrars, and infrastructure partners necessary to deliver our services</li>
    <li><strong>Legal authorities:</strong> When required by law, court order, or to protect our rights</li>
    <li><strong>Business transfers:</strong> In connection with a merger, acquisition, or sale of assets</li>
</ul>

<h2>5. Data Retention</h2>
<p>We retain your personal data for as long as your account is active or as needed to provide services. After account termination, we retain data for a reasonable period to comply with legal obligations, resolve disputes, and enforce agreements.</p>

<h2>6. Data Security</h2>
<p>We implement industry-standard security measures including:</p>
<ul>
    <li>256-bit SSL/TLS encryption for all data in transit</li>
    <li>Encrypted storage for sensitive data at rest</li>
    <li>Regular security audits and vulnerability assessments</li>
    <li>Access controls and multi-factor authentication for staff</li>
    <li>PCI DSS compliance for payment processing</li>
</ul>

<h2>7. Cookies</h2>
<p>We use cookies and similar technologies to enhance your experience, analyze traffic, and personalize content. You can control cookie preferences through your browser settings. Disabling cookies may affect the functionality of our services.</p>

<h2>8. Your Rights</h2>
<p>Depending on your jurisdiction, you may have the right to:</p>
<ul>
    <li>Access the personal data we hold about you</li>
    <li>Request correction of inaccurate data</li>
    <li>Request deletion of your personal data</li>
    <li>Object to or restrict processing of your data</li>
    <li>Data portability</li>
    <li>Withdraw consent at any time</li>
</ul>
<p>To exercise any of these rights, please contact us at <a href="mailto:privacy@yottasrc.com">privacy@yottasrc.com</a>.</p>

<h2>9. Third-Party Links</h2>
<p>Our website may contain links to third-party websites. We are not responsible for the privacy practices of these external sites. We encourage you to review their privacy policies.</p>

<h2>10. Children's Privacy</h2>
<p>Our services are not directed to individuals under 18. We do not knowingly collect personal information from minors. If we become aware that we have collected data from a minor, we will take steps to delete it promptly.</p>

<h2>11. Changes to This Policy</h2>
<p>We may update this Privacy Policy from time to time. Changes will be posted on this page with an updated "Last updated" date. Continued use of our services after changes constitutes acceptance of the revised policy.</p>

<h2>12. Contact Us</h2>
<p>If you have questions about this Privacy Policy, contact us at:</p>
<ul>
    <li><strong>Email:</strong> <a href="mailto:privacy@yottasrc.com">privacy@yottasrc.com</a></li>
    <li><strong>Support:</strong> <a href="https://yottasrc.com/contact/">Contact Page</a></li>
</ul>
HTML;

include __DIR__ . '/legal-template.php';
require_once __DIR__ . '/includes/footer.php';
?>
