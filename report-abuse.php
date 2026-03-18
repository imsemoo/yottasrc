<?php
/**
 * YottaSrc — Report Abuse
 * ========================
 * Abuse reporting form page.
 */
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/topbar.php';
?>

    <!-- ═══════════════ HERO ═══════════════ -->
    <section class="page-hero">
        <div class="container">
            <div class="page-hero-content" style="text-align:center;max-width:720px;margin:0 auto;">
                <div class="page-breadcrumb" style="justify-content:center;">
                    <a href="<?php echo e(SITE_URL); ?>/">Home</a>
                    <i class="fas fa-chevron-right"></i>
                    <a href="<?php echo e(SITE_URL); ?>/legal/">Legal</a>
                    <i class="fas fa-chevron-right"></i>
                    <span>Report Abuse</span>
                </div>
                <h1>Report <span class="highlight">Abuse</span></h1>
                <p class="page-hero-desc">
                    We take abuse reports seriously. If you've identified content or activity on our network that violates our Acceptable Use Policy, please let us know using the form below.
                </p>
            </div>
        </div>
    </section>

    <!-- ═══════════════ EXPLANATION ═══════════════ -->
    <section class="abuse-info reveal">
        <div class="container">
            <div class="abuse-info-grid">
                <div class="abuse-info-card">
                    <div class="bento-card-icon"><i class="fas fa-exclamation-triangle"></i></div>
                    <h3>What qualifies as abuse?</h3>
                    <ul>
                        <li>Spam or unsolicited bulk emails</li>
                        <li>Phishing or fraud attempts</li>
                        <li>Malware or botnet hosting</li>
                        <li>Copyright or trademark infringement</li>
                        <li>DDoS attacks originating from our network</li>
                        <li>Illegal content of any kind</li>
                    </ul>
                </div>
                <div class="abuse-info-card">
                    <div class="bento-card-icon icon-green"><i class="fas fa-clipboard-check"></i></div>
                    <h3>What happens next?</h3>
                    <ul>
                        <li>Your report is reviewed by our abuse team within 24 hours</li>
                        <li>We investigate the claim and gather evidence</li>
                        <li>Violating services are suspended or terminated</li>
                        <li>You receive a confirmation once action is taken</li>
                        <li>Repeat offenders are permanently banned</li>
                        <li>We cooperate with law enforcement when required</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ ABUSE FORM ═══════════════ -->
    <section class="abuse-form-section reveal">
        <div class="container">
            <div class="abuse-form-wrap">
                <div class="section-header">
                    <h2>Submit an abuse report</h2>
                    <p>Provide as much detail as possible so we can investigate promptly.</p>
                </div>

                <form class="abuse-form" action="#" method="post" id="abuseForm">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="abuse-name">Your Name <span class="required">*</span></label>
                            <input type="text" id="abuse-name" name="name" placeholder="John Doe" required>
                        </div>
                        <div class="form-group">
                            <label for="abuse-email">Your Email <span class="required">*</span></label>
                            <input type="email" id="abuse-email" name="email" placeholder="john@example.com" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="abuse-type">Abuse Type <span class="required">*</span></label>
                            <select id="abuse-type" name="type" required>
                                <option value="" disabled selected>Select abuse type</option>
                                <option value="spam">Spam / Unsolicited Email</option>
                                <option value="phishing">Phishing / Fraud</option>
                                <option value="malware">Malware / Botnet</option>
                                <option value="copyright">Copyright Infringement</option>
                                <option value="ddos">DDoS Attack</option>
                                <option value="illegal">Illegal Content</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="abuse-target">Domain / IP Address <span class="required">*</span></label>
                            <input type="text" id="abuse-target" name="target" placeholder="example.com or 192.168.1.1" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="abuse-description">Description <span class="required">*</span></label>
                        <textarea id="abuse-description" name="description" rows="6" placeholder="Describe the abuse in detail, including dates, times, and any relevant context..." required></textarea>
                    </div>

                    <div class="form-group">
                        <label for="abuse-evidence">Evidence URL</label>
                        <input type="url" id="abuse-evidence" name="evidence" placeholder="https://pastebin.com/... or link to screenshots">
                        <span class="form-hint">Paste a link to screenshots, logs, email headers, or any supporting evidence.</span>
                    </div>

                    <button type="submit" class="btn-primary"><i class="fas fa-paper-plane"></i> Submit Report</button>
                </form>
            </div>
        </div>
    </section>

    <!-- ═══════════════ BOTTOM CTA ═══════════════ -->
    <section class="promo-cta reveal">
        <div class="container">
            <div class="promo-cta-inner">
                <div class="promo-cta-glow"></div>
                <div class="promo-cta-icon"><i class="fas fa-headset"></i></div>
                <h2>Need urgent help?</h2>
                <p>For time-sensitive abuse cases, contact our abuse team directly at <strong>abuse@yottasrc.com</strong>.</p>
                <a href="<?php echo e(SITE_URL); ?>/contact/" class="btn-primary">Contact Support <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
