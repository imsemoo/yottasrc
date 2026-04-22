<?php
/**
 * Changelog Data (mock)
 * ======================
 * Single source of truth for the Changelog page and the "New Features"
 * slide-in panel. Newest entries first.
 *
 * BACKEND TEAM — replace this array with:
 *   SELECT * FROM changelog_entries ORDER BY released_at DESC
 *
 * Each entry shape:
 *   • date      → 'YYYY-MM-DD'
 *   • version   → string ("2.2.2")
 *   • channel   → 'stable' | 'beta'  (drives the version badge colour)
 *   • highlight → string|null        (one-line summary shown in the panel)
 *   • sections  → array keyed by section type:
 *       - 'new_features' → list of ['title' => ..., 'desc' => ...]  OR plain strings
 *       - 'improvements' → plain strings
 *       - 'bug_fixes'    → plain strings
 *
 * Section titles are localised in lang/*.php (changelog_section_*).
 */

$changelog = [
    [
        'date'      => '2026-02-07',
        'version'   => '2.2.2',
        'channel'   => 'stable',
        'highlight' => 'VPS/VDS console, richer location tools, and two new languages.',
        'sections'  => [
            'new_features' => [
                ['title' => 'VPS / VDS Management Console', 'desc' => 'You can now fully manage your VPS and VDS services directly from the new console with complete control.'],
                ['title' => 'IP & Location Management',     'desc' => 'Change the IP address and server location directly from your service page for supported packages.'],
                ['title' => 'Redesigned Services Main Page','desc' => 'Easier to find and manage all your services alongside their current status at a glance.'],
                ['title' => 'New Language Support',         'desc' => 'Russian and Hindi are now available across the main site and dashboard.'],
            ],
            'improvements' => [
                'Improved service-management performance.',
                'Better usability across the dashboard and services pages.',
                'General stability improvements and minor bug fixes.',
            ],
        ],
    ],
    [
        'date'      => '2026-01-20',
        'version'   => '2.2.1',
        'channel'   => 'stable',
        'highlight' => 'Full Turkish support and smoother language switching.',
        'sections'  => [
            'new_features' => [
                ['title' => 'Full Turkish Language Support', 'desc' => 'Website and dashboard are now fully available in Turkish, including tutorials and blog content.'],
                ['title' => 'More Languages Coming Soon',    'desc' => 'Polish, Portuguese and Japanese are actively being added next.'],
            ],
            'improvements' => [
                'Enhanced language-switching performance across the dashboard.',
                'Improved translation consistency for tutorials and blog articles.',
                'General stability improvements and minor bug fixes.',
            ],
        ],
    ],
    [
        'date'      => '2026-01-16',
        'version'   => '2.2',
        'channel'   => 'stable',
        'highlight' => 'New hosting management dashboard + cPanel / WordPress / Telegram packages.',
        'sections'  => [
            'new_features' => [
                ['title' => 'New Hosting Management Dashboard', 'desc' => 'Manage and control all hosting packages from the new dashboard.'],
                ['title' => 'Support for More Hosting Types',   'desc' => 'cPanel Hosting, WordPress Hosting, Telegram Hosting and all reseller packages are supported.'],
            ],
            'improvements' => [
                'Faster dashboard performance.',
                'Small fixes and improvements for better stability.',
            ],
        ],
    ],
    [
        'date'      => '2026-01-02',
        'version'   => '2.1.1',
        'channel'   => 'stable',
        'highlight' => 'Cloud server upgrades, project transfers, and service creation dates.',
        'sections'  => [
            'new_features' => [
                ['title' => 'Cloud Server Upgrade', 'desc' => 'Upgrade hourly cloud servers in place without losing your workload.'],
                ['title' => 'Project Transfer',     'desc' => 'Move hourly cloud servers between projects easily.'],
                ['title' => 'Service Creation Date','desc' => 'Added creation date to every service record.'],
            ],
            'bug_fixes' => [
                'General bug fixes and performance improvements.',
            ],
        ],
    ],
    [
        'date'      => '2025-10-13',
        'version'   => '2.1',
        'channel'   => 'stable',
        'highlight' => 'Unified dashboard: one place for hourly cloud, monthly plans, and billing.',
        'sections'  => [
            'new_features' => [
                ['title' => 'Unified Dashboard',       'desc' => 'The console is now the main dashboard for all services — hourly cloud and monthly plans — in one place.'],
                ['title' => 'New Billing Section',     'desc' => 'All invoices are now in one view with advanced management features.'],
                ['title' => 'Invoice Management',      'desc' => 'Change invoice status directly from the dashboard.'],
                ['title' => 'Funds Transfer',          'desc' => 'Transfer funds between Cloud Funds and Site Funds.'],
                ['title' => 'Windows Servers Added',   'desc' => 'Windows hourly servers with Windows 7/10/11 support and more.'],
                ['title' => 'Service Integration',     'desc' => 'All services now appear in the console and will soon be fully manageable here.'],
                ['title' => 'Support Tickets',         'desc' => 'Open tickets for any service directly from the console.'],
            ],
            'improvements' => [
                'Easier navigation and faster access to all services.',
            ],
            'bug_fixes' => [
                'Fixed sorting when listing servers by newest created.',
                'Minor RTL (right-to-left) layout fixes.',
                'General bug fixes and performance enhancements across the platform.',
            ],
        ],
    ],
    [
        'date'      => '2025-04-23',
        'version'   => '1.4',
        'channel'   => 'stable',
        'highlight' => 'New deployment locations, 2FA, SMS verification, bandwidth boost.',
        'sections'  => [
            'new_features' => [
                ['title' => 'New Locations Added',    'desc' => 'Additional server deployment locations are now available for improved coverage.'],
                ['title' => 'Security Settings Page', 'desc' => 'Edit your profile and security settings directly from the new Security Settings page.'],
                ['title' => 'Advanced Login Security','desc' => 'Two-Factor Authentication (2FA), email-based verification, Telegram login notifications, and SMS verification.'],
                ['title' => 'Currency Selector Added','desc' => 'Change your preferred billing currency (not applicable to cloud services).'],
                ['title' => 'Bandwidth Increased',    'desc' => 'Selected VPS/VDS packages now include higher bandwidth at the same cost.'],
                ['title' => 'Page-by-Page Documentation', 'desc' => 'Documentation across every major page to help guide you through using available features effectively.'],
                ['title' => 'Unified Ticket System',  'desc' => 'Streamlined support and communication.'],
            ],
            'improvements' => [
                'Redesigned login and registration pages for smoother UX.',
                'Performance improvements across the platform for a faster experience.',
            ],
            'bug_fixes' => [
                'General bug fixes.',
            ],
        ],
    ],
    [
        'date'      => '2024-12-09',
        'version'   => '1.2',
        'channel'   => 'stable',
        'highlight' => 'Turkey location, new packages, and redesigned main dashboard.',
        'sections'  => [
            'new_features' => [
                ['title' => 'Turkey Location', 'desc' => 'New Turkey location with dedicated resources, starting at €1.99.'],
                ['title' => 'New Packages',    'desc' => 'Added new packages and locations across the platform.'],
            ],
            'improvements' => [
                'Improved the main dashboard interface.',
                'Increased flexibility for editing server names.',
            ],
            'bug_fixes' => [
                'General bug fixes and performance improvements.',
            ],
        ],
    ],
    [
        'date'      => '2024-09-18',
        'version'   => '1.14',
        'channel'   => 'beta',
        'highlight' => 'Google login, custom verification amount, stricter reCAPTCHA.',
        'sections'  => [
            'new_features' => [
                ['title' => 'Custom Verification Amount', 'desc' => 'Specify a custom amount for account verification.'],
                ['title' => 'Google Login',               'desc' => 'Integrated Google login functionality.'],
                ['title' => 'Server Termination Limits',  'desc' => 'Increase server termination limits separately per service.'],
            ],
            'improvements' => [
                'Enhanced Google reCAPTCHA security for login.',
                'General bug fixes and performance improvements.',
            ],
        ],
    ],
    [
        'date'      => '2024-07-06',
        'version'   => '1.12',
        'channel'   => 'beta',
        'highlight' => 'YottaSrc Cloud launches with 40+ locations and hourly billing.',
        'sections'  => [
            'new_features' => [
                ['title' => 'YottaSrc Cloud Released',    'desc' => 'Includes more than 6 partner datacenter providers, along with YottaSrc\'s own datacenter.'],
                ['title' => 'Hourly Payment',             'desc' => 'Pay-as-you-go billing model.'],
                ['title' => '40+ Locations',              'desc' => 'Available in over 40 locations worldwide.'],
            ],
            'improvements' => [
                'Upcoming: all YottaSrc services (cPanel hosting, VPS/VDS, etc.) will land in the unified console.',
                'Upcoming: a single API will enable integration of all YottaSrc services into any website.',
            ],
        ],
    ],
];

/* ──────────────────────────────────────────
   COMING FEATURES  (roadmap — Feature Request page)
   ──────────────────────────────────────────
   Simple roadmap list. Each row:
   • title  → short label
   • status → 'planned' | 'in_progress' | 'under_review'
   ────────────────────────────────────────── */
$coming_features = [
    ['title' => 'Backup section for cloud servers',  'status' => 'in_progress'],
    ['title' => 'Firewall section for cloud servers','status' => 'in_progress'],
    ['title' => 'Enable over-bandwidth usage',       'status' => 'planned'],
    ['title' => 'Team/organization accounts',        'status' => 'under_review'],
    ['title' => 'API tokens with scoped permissions','status' => 'planned'],
    ['title' => 'Monthly spend alerts',              'status' => 'under_review'],
];

/* ──────────────────────────────────────────
   BUG REWARD TIERS  (Report Bug page)
   ──────────────────────────────────────────
   Static info so the client knows what to expect.
   ────────────────────────────────────────── */
$bug_reward_tiers = [
    ['severity' => 'critical', 'range' => '€250 – €500', 'desc' => 'Remote code execution, privilege escalation, data exposure affecting many users.', 'color' => 'error'],
    ['severity' => 'high',     'range' => '€100 – €250', 'desc' => 'Exploitable flaws that impact billing, auth, or account isolation.',            'color' => 'warning'],
    ['severity' => 'medium',   'range' => '€30 – €100',  'desc' => 'Functional bugs that block a feature or produce incorrect results.',            'color' => 'primary'],
    ['severity' => 'low',      'range' => '€10 – €30',   'desc' => 'Visual glitches, typos, minor UI inconsistencies.',                              'color' => 'secondary'],
];
