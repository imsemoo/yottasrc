<?php
/**
 * Alerts Demo — Component Showcase
 * =================================
 * Copy-paste ready alert examples for the team.
 */
$page_title = 'Alerts & Notifications — Component Demo';
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/header.php';
?>

<!-- ═══════════════ ALERTS SHOWCASE ═══════════════ -->
<section style="padding: var(--section-gap) 0;">
    <div class="container" style="max-width: 820px;">

        <div style="text-align:center; margin-bottom:48px;">
            <h1 style="font-family:var(--font-display); font-size:32px; font-weight:800; color:var(--text-primary); margin-bottom:12px;">
                Alert System
            </h1>
            <p style="font-family:var(--font-body); font-size:15px; color:var(--text-secondary); max-width:500px; margin:0 auto;">
                Reusable alert components. Copy the HTML below directly into any page.
            </p>
        </div>

        <!-- ═══════════════════════════════════════
             1. BASIC ALERTS
        ════════════════════════════════════════ -->
        <h2 style="font-family:var(--font-display); font-size:18px; font-weight:700; color:var(--text-primary); margin-bottom:20px;">
            Basic Alerts
        </h2>

        <!-- Success -->
        <div class="alert alert-success">
            <div class="alert-icon"><i class="fas fa-check-circle"></i></div>
            <div class="alert-content">
                <div class="alert-title">Success</div>
                <p>Your account has been created successfully. Welcome aboard!</p>
            </div>
        </div>

        <!-- Error -->
        <div class="alert alert-error">
            <div class="alert-icon"><i class="fas fa-times-circle"></i></div>
            <div class="alert-content">
                <div class="alert-title">Error</div>
                <p>Payment failed. Your card was declined. Please try a different payment method.</p>
            </div>
        </div>

        <!-- Warning -->
        <div class="alert alert-warning">
            <div class="alert-icon"><i class="fas fa-exclamation-triangle"></i></div>
            <div class="alert-content">
                <div class="alert-title">Warning</div>
                <p>Your hosting plan expires in 3 days. <a href="#">Renew now</a> to avoid service interruption.</p>
            </div>
        </div>

        <!-- Info -->
        <div class="alert alert-info">
            <div class="alert-icon"><i class="fas fa-info-circle"></i></div>
            <div class="alert-content">
                <div class="alert-title">Information</div>
                <p>Scheduled maintenance will occur on March 30, 2026 between 02:00–04:00 UTC.</p>
            </div>
        </div>


        <!-- ═══════════════════════════════════════
             2. DISMISSIBLE ALERTS
        ════════════════════════════════════════ -->
        <h2 style="font-family:var(--font-display); font-size:18px; font-weight:700; color:var(--text-primary); margin:40px 0 20px;">
            Dismissible Alerts
        </h2>

        <div class="alert alert-success">
            <div class="alert-icon"><i class="fas fa-check-circle"></i></div>
            <div class="alert-content">
                <div class="alert-title">Order confirmed</div>
                <p>Invoice #YT-20261234 has been generated. <a href="#">View invoice</a></p>
            </div>
            <button class="alert-close" aria-label="Close"><i class="fas fa-times"></i></button>
        </div>

        <div class="alert alert-error">
            <div class="alert-icon"><i class="fas fa-times-circle"></i></div>
            <div class="alert-content">
                <div class="alert-title">Connection lost</div>
                <p>Unable to reach the server. Check your internet connection and try again.</p>
            </div>
            <button class="alert-close" aria-label="Close"><i class="fas fa-times"></i></button>
        </div>

        <div class="alert alert-warning">
            <div class="alert-icon"><i class="fas fa-exclamation-triangle"></i></div>
            <div class="alert-content">
                <p>Your disk usage is at 92%. Consider upgrading your plan or cleaning up files.</p>
            </div>
            <button class="alert-close" aria-label="Close"><i class="fas fa-times"></i></button>
        </div>

        <div class="alert alert-info">
            <div class="alert-icon"><i class="fas fa-info-circle"></i></div>
            <div class="alert-content">
                <p>Two-factor authentication is now available. <a href="#">Enable it</a> for added security.</p>
            </div>
            <button class="alert-close" aria-label="Close"><i class="fas fa-times"></i></button>
        </div>


        <!-- ═══════════════════════════════════════
             3. COMPACT ALERTS
        ════════════════════════════════════════ -->
        <h2 style="font-family:var(--font-display); font-size:18px; font-weight:700; color:var(--text-primary); margin:40px 0 20px;">
            Compact Alerts
        </h2>

        <div class="alert alert-success alert-compact">
            <div class="alert-icon"><i class="fas fa-check-circle"></i></div>
            <div class="alert-content">
                <p>Settings saved.</p>
            </div>
        </div>

        <div class="alert alert-error alert-compact">
            <div class="alert-icon"><i class="fas fa-times-circle"></i></div>
            <div class="alert-content">
                <p>Invalid email address.</p>
            </div>
        </div>

        <div class="alert alert-warning alert-compact">
            <div class="alert-icon"><i class="fas fa-exclamation-triangle"></i></div>
            <div class="alert-content">
                <p>SSL certificate expires in 7 days.</p>
            </div>
        </div>

        <div class="alert alert-info alert-compact">
            <div class="alert-icon"><i class="fas fa-info-circle"></i></div>
            <div class="alert-content">
                <p>Your DNS changes may take up to 48 hours to propagate.</p>
            </div>
        </div>


        <!-- ═══════════════════════════════════════
             4. INLINE ALERTS
        ════════════════════════════════════════ -->
        <h2 style="font-family:var(--font-display); font-size:18px; font-weight:700; color:var(--text-primary); margin:40px 0 20px;">
            Inline Alerts
        </h2>

        <div class="alert alert-success alert-inline">
            <div class="alert-icon"><i class="fas fa-check-circle"></i></div>
            <div class="alert-content">
                <p>Domain verified successfully.</p>
            </div>
        </div>

        <div class="alert alert-error alert-inline">
            <div class="alert-icon"><i class="fas fa-times-circle"></i></div>
            <div class="alert-content">
                <p>Password must be at least 8 characters.</p>
            </div>
        </div>

        <div class="alert alert-warning alert-inline">
            <div class="alert-icon"><i class="fas fa-exclamation-triangle"></i></div>
            <div class="alert-content">
                <p>This action cannot be undone.</p>
            </div>
        </div>

        <div class="alert alert-info alert-inline">
            <div class="alert-icon"><i class="fas fa-info-circle"></i></div>
            <div class="alert-content">
                <p>Need help? <a href="#">Contact support</a></p>
            </div>
        </div>


        <!-- ═══════════════════════════════════════
             5. ALERTS WITH ACTIONS
        ════════════════════════════════════════ -->
        <h2 style="font-family:var(--font-display); font-size:18px; font-weight:700; color:var(--text-primary); margin:40px 0 20px;">
            Alerts with Actions
        </h2>

        <div class="alert alert-warning">
            <div class="alert-icon"><i class="fas fa-exclamation-triangle"></i></div>
            <div class="alert-content">
                <div class="alert-title">Subscription expiring</div>
                <p>Your VPS plan will expire on April 5, 2026. Renew to keep your server running.</p>
                <div class="alert-actions">
                    <button class="alert-btn alert-btn-primary">Renew Now</button>
                    <button class="alert-btn alert-btn-ghost">Remind Later</button>
                </div>
            </div>
            <button class="alert-close" aria-label="Close"><i class="fas fa-times"></i></button>
        </div>

        <div class="alert alert-error">
            <div class="alert-icon"><i class="fas fa-times-circle"></i></div>
            <div class="alert-content">
                <div class="alert-title">Payment overdue</div>
                <p>Invoice #YT-20261200 is 5 days overdue. Service may be suspended.</p>
                <div class="alert-actions">
                    <button class="alert-btn alert-btn-primary">Pay Now</button>
                    <button class="alert-btn alert-btn-ghost">View Invoice</button>
                </div>
            </div>
        </div>

        <div class="alert alert-info">
            <div class="alert-icon"><i class="fas fa-info-circle"></i></div>
            <div class="alert-content">
                <div class="alert-title">New feature available</div>
                <p>Cloud auto-scaling is now available for all VPS plans. Try it out today.</p>
                <div class="alert-actions">
                    <button class="alert-btn alert-btn-primary">Learn More</button>
                    <button class="alert-btn alert-btn-ghost">Dismiss</button>
                </div>
            </div>
        </div>

        <div class="alert alert-success">
            <div class="alert-icon"><i class="fas fa-check-circle"></i></div>
            <div class="alert-content">
                <div class="alert-title">Backup completed</div>
                <p>Full server backup completed at 03:15 UTC. 2.4 GB archived.</p>
                <div class="alert-actions">
                    <button class="alert-btn alert-btn-primary">Download</button>
                    <button class="alert-btn alert-btn-ghost">View Details</button>
                </div>
            </div>
        </div>


        <!-- ═══════════════════════════════════════
             6. AUTO-DISMISS ALERTS
        ════════════════════════════════════════ -->
        <h2 style="font-family:var(--font-display); font-size:18px; font-weight:700; color:var(--text-primary); margin:40px 0 20px;">
            Auto-dismiss Alerts (with progress bar)
        </h2>
        <p style="font-family:var(--font-body); font-size:13.5px; color:var(--text-tertiary); margin-bottom:16px;">
            These alerts will automatically disappear. Add <code style="font-family:var(--font-mono); background:var(--bg-tertiary); padding:2px 6px; border-radius:4px; font-size:12px;">data-auto-dismiss="5000"</code> to set duration in ms.
        </p>

        <div class="alert alert-success" data-auto-dismiss="8000">
            <div class="alert-icon"><i class="fas fa-check-circle"></i></div>
            <div class="alert-content">
                <p>File uploaded successfully. This alert will disappear in 8 seconds.</p>
            </div>
            <div class="alert-progress"></div>
        </div>

        <div class="alert alert-info" data-auto-dismiss="10000">
            <div class="alert-icon"><i class="fas fa-info-circle"></i></div>
            <div class="alert-content">
                <p>Tip: You can press <strong>Ctrl+K</strong> to search anywhere. Dismisses in 10 seconds.</p>
            </div>
            <button class="alert-close" aria-label="Close"><i class="fas fa-times"></i></button>
            <div class="alert-progress"></div>
        </div>


        <!-- ═══════════════════════════════════════
             7. DESCRIPTION-ONLY (NO TITLE)
        ════════════════════════════════════════ -->
        <h2 style="font-family:var(--font-display); font-size:18px; font-weight:700; color:var(--text-primary); margin:40px 0 20px;">
            Description Only (No Title)
        </h2>

        <div class="alert alert-success">
            <div class="alert-icon"><i class="fas fa-check-circle"></i></div>
            <div class="alert-content">
                <p>Your changes have been saved.</p>
            </div>
        </div>

        <div class="alert alert-error">
            <div class="alert-icon"><i class="fas fa-times-circle"></i></div>
            <div class="alert-content">
                <p>Something went wrong. Please try again or <a href="#">contact support</a>.</p>
            </div>
        </div>

        <div class="alert alert-warning">
            <div class="alert-icon"><i class="fas fa-exclamation-triangle"></i></div>
            <div class="alert-content">
                <p>You have unsaved changes. Are you sure you want to leave?</p>
            </div>
        </div>

        <div class="alert alert-info">
            <div class="alert-icon"><i class="fas fa-info-circle"></i></div>
            <div class="alert-content">
                <p>We recommend enabling automatic backups for your production servers.</p>
            </div>
        </div>

    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
