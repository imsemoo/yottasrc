<?php
/**
 * YottaSrc Dashboard — Language: English
 * ========================================
 */

return [
    // ── Navigation ──
    'nav_main'              => 'Main',
    'nav_dashboard'         => 'Dashboard',
    'nav_services'          => 'Services',
    'nav_cloud_servers'     => 'Cloud Servers',
    'nav_domains'           => 'Domains',
    'nav_billing'           => 'Billing',
    'nav_invoices'          => 'Invoices',
    'nav_payment_methods'   => 'Payment Methods',
    'nav_credit_balance'    => 'Credit Balance',
    'nav_add_funds'         => 'Add Funds',
    'nav_support'           => 'Support',
    'nav_tickets'           => 'Tickets',
    'nav_new_ticket'        => 'Open New Ticket',
    'nav_account'           => 'Account',
    'nav_profile'           => 'Profile',
    'nav_security'          => 'Security',
    'nav_settings'          => 'Settings',
    'nav_logout'            => 'Logout',
    'nav_whatsnew'          => 'What\'s New',

    // ── Dashboard footer ──
    'footer_rights_reserved'=> 'All rights reserved.',
    'footer_version'        => 'v{version}',
    'footer_quick_links'    => 'Quick links',
    'footer_about_us'       => 'About',
    'footer_contact'        => 'Contact',
    'footer_refund'         => 'Refund',
    'footer_report_abuse'   => 'Report Abuse',

    // ── Changelog / Feature Request / Report Bug ──
    'changelog_title'                   => 'Changelog',
    'changelog_desc'                    => 'Track every improvement, new feature and fix shipped to YottaSrc.',
    'changelog_tab_feature'             => 'Request a Feature',
    'changelog_tab_bug'                 => 'Report a Bug',
    'changelog_version_prefix'          => 'Version',
    'changelog_latest_badge'            => 'Latest',
    'changelog_section_new_features'    => 'New Features',
    'changelog_section_improvements'    => 'Improvements',
    'changelog_section_bug_fixes'       => 'Bug Fixes',

    // Feature Request
    'changelog_feature_desc'            => 'Shape the product — tell us what you\'d love to see next.',
    'feature_submit_title'              => 'Share your idea',
    'feature_hint_share'                => 'Describe what you\'d like to see and what problem it solves for you.',
    'feature_hint_team'                 => 'The most-requested ideas are reviewed by our product team for the roadmap.',
    'feature_hint_duplicate'            => 'Please check the roadmap below to avoid duplicates.',
    'feature_submit_label'              => 'Your idea',
    'feature_submit_placeholder'        => 'I\'d love a way to... because...',
    'feature_submit_btn'                => 'Send Idea',
    'feature_submit_toast'              => 'Thanks! Your feature request has been submitted.',
    'feature_roadmap_title'             => 'On the Roadmap',
    'feature_roadmap_desc'              => 'Ideas already queued or being worked on.',
    'feature_roadmap_col_empty'         => 'Nothing here yet.',
    'feature_status_planned'            => 'Planned',
    'feature_status_planned_desc'       => 'Approved ideas waiting in the queue.',
    'feature_status_in_progress'        => 'In Progress',
    'feature_status_in_progress_desc'   => 'Being built right now — shipping soon.',
    'feature_status_under_review'       => 'Under Review',
    'feature_status_under_review_desc'  => 'We\'re validating demand and scope.',

    // Report Bug
    'changelog_bug_desc'                => 'Something off? Let us know — rewards for qualifying reports.',
    'bug_submit_title'                  => 'Describe the bug',
    'bug_hint_details'                  => 'Tell us what you did, what you expected, and what actually happened.',
    'bug_hint_screenshot'               => 'Attach a screenshot if it helps explain the issue.',
    'bug_hint_review'                   => 'Our team reviews each report within 48 hours.',
    'bug_severity_label'                => 'Severity',
    'bug_severity_critical'             => 'Critical',
    'bug_severity_high'                 => 'High',
    'bug_severity_medium'               => 'Medium',
    'bug_severity_low'                  => 'Low',
    'bug_area_label'                    => 'Affected area',
    'bug_area_placeholder'              => 'e.g. Invoices, Cloud Servers, Checkout',
    'bug_submit_label'                  => 'Bug description',
    'bug_submit_placeholder'            => 'Steps to reproduce, expected result, actual result...',
    'bug_submit_btn'                    => 'Submit Report',
    'bug_submit_toast'                  => 'Thanks! Your bug report has been submitted.',
    'bug_screenshot_label'              => 'Screenshot (optional)',
    'bug_screenshot_hint'               => 'Drop an image here or click to choose',
    'bug_rewards_title'                 => 'Reward Tiers',
    'bug_rewards_desc'                  => 'Rewards depend on severity and impact of the reported issue.',
    'bug_rewards_note_title'            => 'Good to know',
    'bug_rewards_note_desc'             => 'Rewards are discretionary and apply to first-reported, reproducible issues that are not already known. Duplicates, theoretical reports or issues out of scope do not qualify.',

    // What\'s New slide-in panel
    'whatsnew_view_all'                 => 'View full changelog',
    'whatsnew_badge_new'                => 'NEW',

    // ── Top Bar ──
    'topbar_search'         => 'Search...',
    'topbar_new_order'      => 'New Order',
    'topbar_new_ticket'     => 'New Ticket',
    'topbar_notifications'  => 'Notifications',
    'topbar_no_notifications' => 'No new notifications',

    // ── Dashboard Home ──
    'dash_welcome'          => 'Welcome back',
    'dash_last_login'       => 'Last login',
    'dash_active_services'  => 'Active Services',
    'dash_active_domains'   => 'Active Domains',
    'dash_unpaid_invoices'  => 'Unpaid Invoices',
    'dash_order_service'    => 'Order Service',
    'dash_deploy_server'    => 'Deploy Server',
    'dash_open_ticket'      => 'Open Ticket',
    'dash_latest_invoices'  => 'Latest Invoices',
    'dash_recent_activity'  => 'Recent Activity',
    'dash_view_all'         => 'View All',
    'dash_tutorials'        => 'Tutorials',
    'dash_api_docs'         => 'API Documentation',

    'dash_upcoming_progress' => 'Billing period: {pct}% elapsed',

    // ── Monthly Overview (home sparkline row) ──
    'dash_mo_spending'      => 'Spending this month',
    'dash_mo_servers'       => 'Active Cloud Servers',
    'dash_mo_invoices'      => 'Invoices Paid (YTD)',
    'dash_mo_servers_unit'  => '',
    'dash_mo_invoices_unit' => '',
    'dash_mo_servers_hint'  => ':total running across your account',
    'dash_mo_invoices_hint' => 'All invoices settled on time',
    'dash_last_paid'        => 'Last paid on {date}',

    // ── Spending trend chart card (home) ──
    'dash_spend_title'         => 'Spending — last 30 days',
    'dash_spend_of_projected'  => 'of {total} projected this month ({pct}%)',
    'dash_spend_last_30'       => 'Last 30 days',

    // ── Bandwidth chart card (home) — kept for backward compat ──
    'dash_bw_30_days_ago'   => '30 days ago',
    'dash_bw_today'         => 'Today',

    // ── Balance Widget ──
    'balance_total'         => 'Account Balance',
    'balance_site'          => 'Site',
    'balance_cloud'         => 'Cloud',
    'balance_empty'             => 'Empty',
    'balance_spent_month'       => 'Spent this month',
    'balance_spent_txn_count'   => '{count} transactions',
    'balance_auto_recharge'     => 'Auto-recharge',
    'balance_enable'            => 'Enable',
    'balance_last_deposit'      => 'Last deposit',
    'balance_no_deposit'        => 'No deposits yet',

    // ── Common ──
    'common_manage'         => 'Manage',
    'common_view'           => 'View',
    'common_open'           => 'Open',
    'common_copy'           => 'Copy',
    'common_details'        => 'Details',
    'common_enabled'        => 'Enabled',
    'common_disabled'       => 'Disabled',
    'common_configure'      => 'Configure',
    'common_edit'           => 'Edit',
    'common_delete'         => 'Delete',
    'common_save'           => 'Save Changes',
    'common_cancel'         => 'Cancel',
    'common_confirm'        => 'Confirm',
    'common_close'          => 'Close',
    'common_retry'          => 'Retry',
    'common_hide_stats'     => 'Hide Stats',
    'common_show_stats'     => 'Show Stats',
    'common_statistics'     => 'Statistics',
    'common_error'          => 'Something went wrong',
    'common_error_desc'     => 'Failed to load data. Please try again.',
    'common_previous'       => 'Previous',
    'common_next'           => 'Next',
    'common_pagination'     => 'Pagination',
    'common_showing_range'  => 'Showing {from}–{to} of {total}',
    'common_search'         => 'Search',
    'common_status'         => 'Status',

    // ── Toolbar ──
    'toolbar_export'        => 'Export',
    'toolbar_print'         => 'Print',
    'toolbar_all_types'     => 'All Types',

    // ── Statuses ──
    'status_active'         => 'Active',
    'status_suspended'      => 'Suspended',
    'status_terminated'     => 'Terminated',
    'status_cancelled'      => 'Cancelled',
    'status_pending'        => 'Pending',
    'status_paid'           => 'Paid',
    'status_unpaid'         => 'Unpaid',
    'status_overdue'        => 'Overdue',

    // ── Theme ──
    'theme_dark'            => 'Dark',
    'theme_light'           => 'Light',
    'theme_toggle'          => 'Toggle theme',

    // ── Language ──
    'language'              => 'Language',

    // ── Dashboard — Stat Hints ──
    'dash_hint_this_month'  => '+:count this month',
    'dash_hint_no_changes'  => 'No changes',
    'dash_hint_all_paid'    => 'All paid',

    // ── Dashboard — Action Descriptions ──
    'dash_order_service_desc'    => 'Browse hosting & server plans',
    'dash_deploy_server_desc'    => 'Launch a cloud server instantly',
    'dash_register_domain_desc'  => 'Find & register your domain',
    'dash_add_funds_desc'        => 'Top up your account balance',
    'dash_open_ticket_desc'      => 'Get help from our team',

    // ── Dashboard — Upcoming Payment ──
    'dash_upcoming_payment' => 'Upcoming Payment',
    'dash_upcoming_due'     => ':amount due on :date',
    'dash_upcoming_days'    => ':count days',

    // ── Dashboard — Services ──
    'dash_due'              => 'Due',

    // ── Dashboard — Cloud Empty State ──

    // ── Dashboard — Invoices ──

    // ── Dashboard — Activity ──
    'dash_activity_invoice_paid'     => 'Invoice #:id paid successfully',
    'dash_activity_service_activated' => ':service activated',
    'dash_activity_login'            => 'Login successful',

    // ── Dashboard — Section Headings ──
    'dash_balance_resources' => 'Balance & Resources',
    'dash_tutorials_desc'    => 'Step-by-step guides',
    'dash_api_docs_desc'     => 'Cloud & API reference',

    // ── Day Abbreviations ──

    // ── Topbar Extra ──

    // ── Accessibility ──

    // ── Meta ──
    'meta_title'            => 'Dashboard — YottaSrc',
    'meta_description'      => 'Manage your YottaSrc services, billing, and account settings.',

    // ── Profile ──
    'profile_street'        => 'Street Address',
    'profile_state'         => 'State / Region',
    'profile_postal_code'   => 'Postal Code',
    'profile_first_name_placeholder' => 'Enter your first name',
    'profile_last_name_placeholder'  => 'Enter your last name',
    'profile_phone_placeholder'      => '100 123 4567',
    'profile_company_placeholder'    => 'Your company name',
    'profile_street_placeholder'     => 'Street name and number',
    'profile_city_placeholder'       => 'Your city',
    'profile_state_placeholder'      => 'State or region',
    'profile_postal_placeholder'     => 'Postal / ZIP code',
    'profile_saved'                  => 'Profile updated successfully',
    'profile_settings_title'         => 'Profile Settings',
    'profile_settings_desc'          => 'Manage your account details, security, and preferences',
    'profile_section_personal'       => 'Personal Details',
    'profile_update_details'         => 'Update Details',
    'profile_verified'               => 'Verified',
    'profile_change_email'           => 'Change Email?',
    'profile_change_email_desc'      => 'Enter your new email address. We will send a verification link to confirm the change.',
    'profile_new_email'              => 'New Email Address',
    'profile_new_email_placeholder'  => 'Enter new email address',
    'profile_change_email_btn'       => 'Send Verification',
    'profile_change_email_sent'      => 'Verification link sent to your new email.',

    // Linked social accounts
    'profile_linked_title'           => 'Linked Accounts',
    'profile_linked_connected'       => 'Connected',
    'profile_linked_not_connected'   => 'Not Connected',
    'profile_linked_as'              => 'Linked as',
    'profile_linked_connect'         => 'Connect',
    'profile_linked_connect_desc'    => 'Sign in faster next time by connecting your :provider account.',
    'profile_linked_connect_toast'   => 'Redirecting to :provider to complete the link...',
    'profile_linked_unlink'          => 'Unlink',
    'profile_linked_unlink_title'    => 'Unlink :provider Account',
    'profile_linked_unlink_confirm'  => 'Are you sure you want to unlink your :provider account? You will no longer be able to sign in using :provider.',
    'profile_linked_unlink_warn'     => 'Make sure you have a password set before unlinking. If you do not, you may lose access to your account and need to request a password reset to sign in again.',
    'profile_linked_unlink_toast'    => ':provider account unlinked successfully.',
    'profile_linked_warning_title'   => 'Make sure you have a password set',
    'profile_linked_warning_desc'    => 'Unlinking a social account removes that login method. If you have not set an account password, you may lose access and need to reset your password via email to sign back in.',

    // Support PIN
    'support_pin_title'         => 'Support PIN',
    'support_pin_label'         => 'Support PIN:',
    'support_pin_your_pin'      => 'Your PIN',
    'support_pin_desc'          => 'Share this PIN with our support team when you contact us. It lets them verify your identity securely without asking for sensitive account details.',
    'support_pin_refresh'       => 'Refresh',
    'support_pin_refresh_hint'  => 'Request a new PIN from support',
    'support_pin_warn_title'    => 'Keep your PIN private',
    'support_pin_warn_desc'     => 'Never share this PIN publicly, post it online, or give it to anyone outside of our official support channels.',
    'support_pin_banner_hint'   => 'Have this ready when you open a ticket.',

    // Promo / news bar (matches the main site marquee)
    'promo_text'        => 'Ramadan 2026 Offer!',
    'promo_description' => 'Get <strong>10% OFF Recurring</strong> on any service with code <strong>RAMADAN2026</strong> — Ends 15/03/2026.',
    'promo_cta'         => 'Claim Discount →',
    'promo_close'       => 'Close promo bar',

    // View switcher labels
    'view_table'        => 'Table',
    'view_cards'        => 'Cards',

    // ── Security ──
    'security_change_password'  => 'Change Password',
    'security_sessions_title'   => 'Active Sessions',
    'security_current_session'  => '(this device)',
    'security_revoke'           => 'Revoke',
    'security_revoke_all'       => 'Revoke All Others',
    'security_revoke_all_confirm' => 'This will sign out all other sessions. Your current session will not be affected.',
    'security_reset_title'        => 'Reset via Email',
    'security_reset_desc'         => 'We will send a password reset link to your registered email address.',
    'security_reset_btn'          => 'Send Reset Link',
    'security_reset_sent'         => 'Password reset link sent to your email.',
    'security_features_title'     => 'Security Settings',
    'security_feat_2fa'           => 'Two-Factor Authentication',
    'security_feat_2fa_desc'      => 'Adds an extra layer of security using a code from an app (like Google Authenticator). If enabled, you must enter the app code to login.',
    'security_feat_email_login'   => 'Email Login Code',
    'security_feat_email_login_desc' => 'You\'ll get a login code by email. If enabled, you can login using email code or any other enabled method.',
    'security_feat_telegram'      => 'Telegram Login Code',
    'security_feat_telegram_desc' => 'Login code will be sent via Telegram. If enabled, you can login using Telegram received code or any other enabled method.',
    'security_feat_sms'           => 'SMS Login Code',
    'security_feat_sms_desc'      => 'Receive login code by SMS to your phone. If enabled, you can login using SMS received code or any other enabled method.',
    'security_feat_sso'           => 'Single Sign-On',
    'security_feat_sso_desc'      => 'Third-party applications use Single Sign-On (SSO) to access your billing account without requiring you to login again.',
    'security_feat_disable'       => 'Disable',
    'security_feat_not_enabled'   => 'Not Enabled',
    'security_feat_enable_confirm'  => 'Are you sure you want to enable :feature?',
    'security_feat_disable_confirm' => 'Are you sure you want to disable :feature?',
    'security_feat_enabled_toast'   => 'Feature enabled successfully.',
    'security_feat_disabled_toast'  => 'Feature disabled successfully.',
    'security_session_revoked'      => 'Session revoked successfully.',
    'security_all_revoked'          => 'All other sessions have been revoked.',

    // ── Settings ──
    'settings_general'          => 'General Preferences',
    'settings_language_desc'    => 'Select your preferred dashboard language',
    'settings_currency'         => 'Currency',
    'settings_currency_desc'    => 'Choose how prices are displayed',
    'settings_theme'            => 'Theme',
    'settings_theme_desc'       => 'Choose between dark and light mode',
    'settings_email_notifications'  => 'Email Notifications',
    'settings_telegram_notifications' => 'Telegram Notifications',

    // Notification categories (matching reference)
    'notif_product'       => 'Product Emails',
    'notif_product_desc'  => 'Receive emails with important account details such as hosting information, server access, suspensions, and more.',
    'notif_invoice'       => 'Invoice Emails',
    'notif_invoice_desc'  => 'New Invoices, Reminders, & Overdue Notices',
    'notif_support'       => 'Support Emails',
    'notif_support_desc'  => 'Receive email notifications for all support tickets you open.',
    'notif_domain'        => 'Domain Emails',
    'notif_domain_desc'   => 'Registration/Transfer Confirmation & Renewal Notices',
    'notif_general'       => 'General Emails',
    'notif_general_desc'  => 'All account related emails',
    'notif_affiliate'     => 'Affiliate Emails',
    'notif_affiliate_desc' => 'Receive Affiliate Notifications.',
    'notif_marketing'     => 'Marketing Emails',
    'notif_marketing_desc' => 'Receive emails regarding offers, discounts and news from YottaSrc',
    'settings_danger_zone'          => 'Danger Zone',
    'settings_close_account'        => 'Close Account',
    'settings_close_account_desc'   => 'Permanently delete your account and all associated data. This action cannot be undone.',
    'settings_close_account_confirm' => 'Are you sure you want to close your account? All your services will be terminated and your data will be permanently deleted.',

    // ── Validation ──
    'validation_required'       => 'This field is required',

    // ── Services (M2) ──
    'services_title'            => 'My Services',
    'services_desc'             => 'Manage and monitor all your active services',
    'services_search_placeholder' => 'Search services...',
    'services_col_due'          => 'Next Due',
    'services_empty_title'      => 'No Services Yet',
    'services_empty_desc'       => 'Get started by ordering your first hosting service.',
    'services_detail_title'     => 'Service Details',
    'services_info_plan'        => 'Plan',
    'services_info_next_due'    => 'Next Due Date',
    'services_action_login'     => 'Login to cPanel',
    'services_action_cancel'    => 'Request Cancellation',

    // Service Details — Tabs
    'services_tab_reinstall'    => 'Reinstall',
    'services_tab_upgrade'      => 'Upgrade / Downgrade',

    // Service Details — Overview
    'services_info_hostname'        => 'Hostname',
    'services_power_off'            => 'Power OFF',
    'services_reboot'               => 'Reboot',
    'services_console'              => 'Console',
    'services_change_location'      => 'Change VPS Location',
    'services_bw_reset_notice'      => 'The bandwidth will reset automatically on the 1st of every month.',
    'services_bw_percent'           => 'Usage',
    'services_bw_faq_title'         => 'FAQ Questions',
    'services_bw_faq1_q'            => 'How is additional traffic billed?',
    'services_bw_faq1_a'            => 'If you use more traffic than your package includes, we charge for the extra usage per terabyte (TB). We always round up to the nearest full TB.',
    'services_bw_faq2_q'            => 'Is the bandwidth unlimited for all servers?',
    'services_bw_faq2_a'            => 'No, each server plan has its own bandwidth allocation. Some premium plans may offer unlimited bandwidth.',
    'services_bw_faq3_q'            => 'How can I check my remaining bandwidth?',
    'services_bw_faq3_a'            => 'Your current bandwidth usage is displayed on this page. The progress bar shows how much of your allocation has been used.',
    'services_bw_faq4_q'            => 'Can I increase my bandwidth if I exceed the limit?',
    'services_bw_faq4_a'            => 'Yes, you can upgrade your server plan to get a higher bandwidth allocation. Visit the Upgrade/Downgrade tab.',

    // Service Details — Network
    'services_network_public'       => 'Public Network',
    'services_network_change_ip'    => 'Change IP',
    'services_network_change_ip_msg'=> 'IP change request submitted.',
    'services_network_notice'       => 'Changing the IP in this package requires you to reboot the server directly from the dashboard here, not from the terminal, for it to be installed automatically.',

    // Service Details — Bandwidth
    'services_bw_used'          => 'Used',
    'services_bw_speed'         => 'Port Speed',

    // Service Details — Reinstall
    'services_reinstall_title'  => 'Server Reinstall/Rebuild',
    'services_reinstall_note1'  => 'This is where you can reinstall/rebuild your operating system, enabling you to switch to different distributions and versions.',
    'services_reinstall_note2'  => 'Please note that all your files will be deleted during this process, and it cannot be restored.',
    'services_reinstall_note3'  => 'Upon selecting the desired OS below, a dialogue will prompt you to confirm the installation process. You can retrieve the new password from the Overview section.',
    'services_reinstall_warning'=> 'Installing Ubuntu 22, Ubuntu 24, or AlmaLinux 9 on servers with 1GB RAM may cause performance issues or server creation failures. Always check functionality after installation.',
    'services_reinstall_confirm'=> 'Are you sure you want to reinstall the OS? All data will be permanently deleted.',
    'services_reinstall_success'=> 'OS reinstall initiated. Please wait a few minutes.',

    // Service Details — Billing
    'services_billing_days_left'        => 'days left',
    'services_billing_renewal_invoice'  => 'Renewal Invoice',
    'services_billing_renewal_desc'     => 'Generate the next renewal invoice in advance to renew this service early. (<strong>:amount</strong>).<br>If not generated manually, the renewal invoice will be created automatically <strong>:days days before</strong> the due date <strong>:date</strong>.',
    'services_billing_generate_renewal' => 'Generate Renewal Invoice',
    'services_billing_renewal_generated'=> 'Renewal invoice generated successfully.',
    'services_billing_cycle_desc'       => 'Your current billing cycle is <strong>:cycle</strong>.<br>You may change the billing cycle effective from <strong>:date</strong>, provided no renewal invoice has been generated.',
    'services_billing_change_cycle'     => 'Change Billing Cycle',
    'services_billing_cycle_change_msg' => 'Billing cycle change options coming soon.',
    'services_billing_auto_renew'       => 'Renew Service & Generate Invoice',
    'services_billing_auto_renew_desc'  => 'When enabled, your service will renew automatically, and a renewal invoice will be generated <strong>:days days before</strong> the due date.',
    'services_billing_auto_renew_warning'=> 'Disable this option to stop automatic renewals and prevent future renewal invoices.',
    'services_billing_auto_renew_off'   => 'Auto-renew disabled.',
    'services_billing_credit_renewal'   => 'Renewal via Credit Balance',
    'services_billing_credit_renewal_desc'=> 'When enabled, your available credit balance will be used automatically to pay renewal invoices for this service. Please ensure sufficient credit is available before the due date. You may disable this option at any time and pay invoices manually.',
    'services_billing_credit_on'        => 'Credit balance renewal enabled.',
    'services_billing_credit_off'       => 'Credit balance renewal disabled.',

    // Service Details — Upgrade
    'services_upgrade_note1'    => 'When upgrading, you will only be charged for the remaining days until your due date. After that, the full package price will apply.',
    'services_upgrade_note2'    => 'Select a package and confirm to generate an invoice. The change will be applied automatically after payment.',
    'services_upgrade_note3'    => 'If a renewal invoice has already been generated, it must be paid before requesting an upgrade or downgrade.',
    'services_upgrade_note4'    => 'Only one upgrade or downgrade request may be active at a time. Any existing order or invoice must be cancelled before creating a new one.',
    'services_upgrade_prorate_note'   => 'Pro-rated — {days} days left in the current cycle',
    'services_upgrade_prorate_short'  => 'Pro-rated for {days} remaining days',
    'services_upgrade_btn'      => 'Upgrade',
    'services_upgrade_processing'=> 'Processing upgrade request...',

    // Service Details — Cancel
    'services_cancel_confirm'   => 'Are you sure you want to request cancellation for this service? This action cannot be easily reversed.',
    'services_cancel_success'   => 'Cancellation request submitted.',

    // ── Order Service (M2) ──
    'order_title'               => 'Order New Service',
    'order_desc'                => 'Choose a plan that fits your needs',
    'order_cat_hosting'         => 'Website Hosting',
    'order_cat_vps'             => 'VPS/VDS',
    'order_cat_reseller'        => 'Reseller',
    'order_cat_domains'         => 'Domains',
    'order_cat_mskeys'          => 'Microsoft keys',
    'order_redirect_msg'        => 'Redirecting to product page...',
    'order_from'                => 'from',

    // Order — Category descriptions
    'order_cat_hosting_desc'    => 'Reliable web hosting with cPanel, WordPress, and more',
    'order_cat_vps_desc'        => 'Full root access VPS with NVMe SSD and dedicated resources',
    'order_cat_reseller_desc'   => 'Start your own hosting business with white-label solutions',
    'order_cat_domains_desc'    => 'Register or transfer your domain names',
    'order_cat_mskeys_desc'     => 'Genuine Microsoft product keys at competitive prices',

    // Order — Product descriptions
    'order_prod_cpanel_desc'        => 'Full-featured cPanel hosting with one-click installs',
    'order_prod_wp_desc'            => 'Optimized WordPress hosting with staging & caching',
    'order_prod_telegram_desc'      => 'Dedicated hosting for Telegram bots and scripts',
    'order_prod_dmca_cpanel_desc'   => 'Offshore cPanel hosting with DMCA ignored policy',
    'order_prod_linux_vps_desc'     => 'KVM VPS with full root access and NVMe storage',
    'order_prod_win_vps_desc'       => 'Windows Server VPS with RDP access',
    'order_prod_dmca_vps_desc'      => 'Offshore VPS with DMCA ignored policy',
    'order_prod_reseller_desc'      => 'WHM/cPanel reseller hosting with white-label',
    'order_prod_master_reseller_desc'=> 'Create sub-reseller accounts under your brand',
    'order_prod_alpha_reseller_desc' => 'Premium tier with maximum resources and priority support',
    'order_prod_ms_reseller_desc'   => 'Resell Microsoft product keys to your customers',
    'order_prod_register_domain'    => 'Register New Domain',
    'order_prod_register_domain_desc'=> 'Search and register your perfect domain name',
    'order_prod_transfer_domain_desc'=> 'Transfer your existing domain to YottaSrc',
    'order_prod_win_keys_desc'      => 'Windows 10/11 Pro and Server licenses',
    'order_prod_office_keys_desc'   => 'Microsoft Office 2019/2021/365 licenses',
    'order_prod_vs_keys_desc'       => 'Visual Studio Professional and Enterprise',
    'order_prod_project_keys_desc'  => 'Microsoft Project Standard and Professional',
    'order_mo'                  => 'mo',

    // ── Invoices (M2) ──
    'invoices_desc'             => 'View and manage all your invoices',
    'invoices_search_placeholder' => 'Search invoices...',
    'invoices_col_invoice'      => 'Invoice',
    'invoices_empty_title'      => 'No Invoices Yet',
    'invoices_empty_desc'       => 'Your invoices will appear here when generated.',
    'invoices_detail_title'     => 'Invoice Details',
    'invoices_pay_now'          => 'Pay Now',
    'invoices_download'         => 'Download Invoice',
    'invoices_download_success' => 'Invoice downloaded.',
    'invoices_download_failed'  => 'Could not download the invoice. Please try again.',
    'invoices_subtotal'         => 'Subtotal',
    'invoices_total_due'        => 'Total Due',
    'invoices_type_new_service' => 'New Service',
    'invoices_type_renewal'     => 'Renewal',
    'invoices_invoiced_to'      => 'INVOICED TO',
    'invoices_meta_invoice_no'  => 'Invoice No',
    'invoices_meta_issued'      => 'Issued Date',
    'invoices_select_method'    => 'Select Payment Method:',
    'invoices_share_msg'        => 'Invoice link copied to clipboard.',
    'invoices_cancel_invoice'   => 'Cancel Invoice',
    'invoices_cancel_confirm'   => 'Are you sure you want to cancel this invoice? This action cannot be undone.',
    'invoices_cancel_success'   => 'Invoice cancelled successfully.',
    'invoices_due_by'           => 'Due by',
    'invoices_outstanding'      => 'Outstanding Invoices',
    'invoices_transaction_info' => 'Payment Completed',
    'invoices_txn_id'           => 'Transaction ID',
    'invoices_txn_date'         => 'Payment Date',
    'invoices_txn_method'       => 'Payment Method',
    'invoices_txn_amount'       => 'Amount Paid',
    'invoices_paid_title'       => 'Invoice Paid',
    'invoices_paid_desc'        => 'This invoice has been paid successfully. Thank you!',

    // ── Transactions (M2) ──
    'transactions_desc'         => 'Complete history of all financial transactions',
    'transactions_empty_title'  => 'No Transactions',
    'transactions_empty_desc'   => 'Your transaction history will appear here.',
    'txn_total_in'              => 'Total Inflows',
    'txn_total_out'             => 'Total Outflows',
    'txn_net_change'            => 'Net Change',
    'txn_total_count'           => 'Transactions',
    'txn_balance_after'         => 'Balance',
    'txn_date_all'              => 'All Time',
    'txn_date_7'                => 'Last 7 Days',
    'txn_date_30'               => 'Last 30 Days',
    'txn_date_90'               => 'Last 90 Days',
    'transactions_type_credit'  => 'Credit',
    'transactions_type_invoice' => 'Invoice',

    // ── Credit Balance (M2) ──
    'credit_title'              => 'Credit Balance',
    'credit_desc'               => 'Your account credit balance and history',
    'credit_col_date'           => 'Date',
    'credit_col_description'    => 'Description',
    'credit_col_balance'        => 'Balance After',
    'credit_empty_title'        => 'No Credit History',
    'credit_empty_desc'         => 'Your credit transactions will appear here.',
    'credit_wallet_sub'         => 'Used for services, invoices, and renewals',
    'credit_quick_add'          => 'Quick Add',
    'credit_custom_amount'      => 'Custom',
    'credit_total_added'        => 'Total Added',
    'credit_total_spent'        => 'Total Spent',
    'credit_last_txn'           => 'Last Transaction',
    'credit_search_history'     => 'Search transactions...',
    'credit_filter_all'         => 'All Types',
    'credit_type_added'         => 'Funds Added',
    'credit_type_payment'       => 'Payment',
    'credit_type_refund'        => 'Refund',

    // ── Payment Methods (M2) ──
    'payment_methods_desc'      => 'Manage your saved payment methods',
    'payment_methods_add'       => 'Add New Method',
    'payment_methods_default'   => 'Default',
    'payment_methods_set_default' => 'Set as Default',
    'payment_methods_remove'    => 'Remove',
    'payment_methods_remove_confirm' => 'Are you sure you want to remove this payment method?',
    'payment_methods_empty_title' => 'No Payment Methods',
    'payment_methods_empty_desc' => 'Add a payment method to make payments faster.',
    'payment_methods_expires'   => 'Expires',
    'payment_methods_settings'   => 'Payment Settings',
    'payment_methods_saved'      => 'Saved Payment Methods',
    'payment_methods_auto_card'  => 'Automatic Credit/Debit Card Payment',
    'payment_methods_auto_balance' => 'Automatic Credit Balance (Funds) Payment',

    // Payment Methods — Wizard
    'pm_banner_title'       => 'Credit Card for Automatic Payment',
    'pm_banner_text'        => 'YottaSrc supports more than 7 Payment Methods. For automatic payment and to avoid suspension, we advise you to add a credit card to your account or simply add enough funds to your account from any preferred payment method.',
    'pm_and_more'           => 'And more...',
    'pm_auto_save_hint'     => 'You can add a debit/credit card for automatic payments when paying any invoice by selecting the checkbox "Save my payment information for future purchases" during the payment process.',
    'pm_add_card_first'     => 'Please add a credit/debit card first.',
    'pm_auto_card_desc_full'=> 'Enabling it will allow automatic withdrawal of payment amounts from a credit/debit card for all unpaid invoices. Disabling it will turn off auto payment and service renewal. (Note: You should add a credit/debit card.)',
    'pm_auto_balance_desc_full' => 'Enabling it will allow automatic withdrawal of payment amounts from credit balance and funds for all unpaid invoices. Disabling it will turn off auto payment and service renewal. (Note: You should have enough funds)',
    'pm_methods_count'      => 'saved',
    'pm_step_details'       => 'Details',
    'pm_choose_type'        => 'Choose payment method type:',
    'pm_type_card'          => 'Credit / Debit Card',
    'pm_type_card_desc'     => 'Visa, Mastercard, Amex',
    'pm_type_paypal_desc'   => 'Link your PayPal account',
    'pm_type_crypto'        => 'Cryptocurrency',
    'pm_type_crypto_desc'   => 'BTC, ETH, USDT & more',
    'pm_type_bank'          => 'Bank Transfer',
    'pm_type_bank_desc'     => 'Direct bank wire transfer',
    'pm_card_number'        => 'Card Number',
    'pm_card_expiry'        => 'Expiry Date',
    'pm_card_cvv'           => 'CVV',
    'pm_card_name'          => 'Cardholder Name',
    'pm_card_name_placeholder' => 'Name on card',
    'pm_confirm_title'      => 'Ready to Save',
    'pm_confirm_desc'       => 'Your payment method will be securely saved for future transactions.',
    'pm_set_default_new'    => 'Set as default payment method',
    'pm_save_method'        => 'Save Method',
    'pm_added_success'      => 'Payment method added successfully.',
    'common_back'           => 'Back',

    // ── Add Funds (M2) ──
    'add_funds_desc'            => 'Top up your account balance',
    'add_funds_current_balance' => 'Current Balance',
    'add_funds_adding'          => 'Adding',
    'add_funds_new_balance'     => 'New Balance',
    'add_funds_min'             => 'Minimum: :amount',
    'add_funds_max'             => 'Maximum: :amount',
    'add_funds_choose_amount'   => 'Choose Amount',
    'add_funds_or_custom'       => 'Or enter a custom amount',
    'add_funds_via'             => 'Via',
    'add_funds_trust_secure'    => 'Secure & encrypted payment',
    'add_funds_trust_instant'   => 'Instant credit to balance',
    'add_funds_trust_no_fees'   => 'No hidden fees',

    // ── Support / Tickets (M3) ──
    'tickets_title'             => 'Support Tickets',
    'tickets_desc'              => 'Get help from our support team',
    'tickets_create'            => 'Create Ticket',
    'tickets_stat_total'        => 'Total Tickets',
    'tickets_stat_closed'       => 'Closed & Solved',
    'tickets_stat_progress'     => 'In Progress',
    'tickets_col_id'            => 'Ticket ID',
    'tickets_col_subject'       => 'Subject',
    'tickets_col_last_update'   => 'Last Update',
    'tickets_empty_title'       => 'No Tickets Yet',
    'tickets_empty_desc'        => 'Need help? Open a support ticket and we\'ll get back to you.',
    'tickets_search'            => 'Search tickets...',

    // Ticket statuses
    'ticket_status_answered'    => 'Answered',
    'ticket_status_customer_reply' => 'Customer Reply',
    'ticket_status_closed'      => 'Closed',

    // Ticket priorities
    'ticket_priority_urgent'    => 'Urgent',

    // Ticket Details
    'ticket_detail_title'       => 'Ticket Details',
    'ticket_reply'              => 'Add Reply',
    'ticket_reply_placeholder'  => 'Type your reply here...',
    'ticket_upload_hint'        => 'You can upload up to 4 files. Use the CTRL key to select more than one file at a time.',
    'ticket_close'              => 'Close Ticket',
    'ticket_reopen'             => 'Reopen Ticket',
    'ticket_info_id'            => 'Ticket',
    'ticket_info_created'       => 'Create Date',
    'ticket_info_last_activity' => 'Last Activity',
    'ticket_info_service'       => 'Service',
    'ticket_attachments'        => 'Attachments',
    'ticket_close_confirm'      => 'Are you sure you want to close this ticket?',
    'ticket_close_success'      => 'Ticket closed successfully.',
    'ticket_reply_success'      => 'Reply sent successfully.',
    'ticket_reply_send'         => 'Send Reply',
    'ticket_reply_hint'         => 'Press Ctrl+Enter to send',
    'ticket_drop_hint'          => 'Drag & drop files here, or click to browse',
    'ticket_drop_release'       => 'Release to drop files',
    'ticket_file_removed'       => 'File removed',
    'ticket_empty_search'       => 'No tickets match your search.',

    // New Ticket
    'ticket_new_desc'           => 'Submit a support request',
    'ticket_new_notice1'        => 'Before opening a support ticket, please check our <strong>Documentation</strong>, <strong>Tutorial</strong>, and <strong>FAQ</strong> pages. They cover many common questions.',
    'ticket_new_notice2'        => 'To get faster help, please don\'t open more than one ticket for the same issue or reply too many times to the same ticket, as this may slow things down.',
    'ticket_new_notices_title'  => 'Before you continue',
    'ticket_new_service_search' => 'Search for a service...',
    'ticket_new_service_none_found' => 'No services found',
    'ticket_new_department'     => 'Department',
    'ticket_new_service'        => 'Related Service',
    'ticket_new_service_none'   => 'None',
    'ticket_new_message'        => 'Message',
    'ticket_new_message_placeholder' => 'Describe your issue in detail...',
    'ticket_new_priority'       => 'Priority',
    'ticket_attach_too_big'     => 'Some files were skipped because they exceed 10 MB.',
    'ticket_new_submit'         => 'Open Ticket',
    'ticket_new_submit_success' => 'Ticket submitted successfully.',
    'ticket_new_business_hours' => 'Our Support Business Hours:',
    'ticket_new_business_time'  => 'Monday - Saturday, 10 AM - 11 PM EEST',

    // Departments
    'dept_technical'            => 'Technical',
    'dept_billing'              => 'Billing',
    'dept_sales'                => 'Sales',
    'dept_abuse'                => 'Abuse',

    // ── Domains (M3) ──
    'domains_title'             => 'My Domains',
    'domains_desc'              => 'Manage your registered domains',
    'domains_register'          => 'Register Domain',
    'domains_transfer'          => 'Transfer Domain',
    'domains_stat_total'        => 'Total Domains',
    'domains_stat_active'       => 'Active',
    'domains_stat_expiring'     => 'Expiring Soon',
    'domains_stat_expired'      => 'Expired',
    'domains_col_domain'        => 'Domain',
    'domains_col_registered'    => 'Registered',
    'domains_col_expires'       => 'Expires',
    'domains_col_auto_renew'    => 'Auto Renew',
    'domains_search'            => 'Search domains...',
    'domains_empty_search'      => 'No domains match your search.',
    'invoices_empty_search'     => 'No invoices match your search.',
    'services_empty_search'     => 'No services match your search.',
    'transactions_empty_search' => 'No transactions match your search.',
    'credit_empty_search'       => 'No history entries match your search.',
    'domains_filter_all'        => 'All Statuses',
    'domains_empty_title'       => 'No Domains Yet',
    'domains_empty_desc'        => 'Register or transfer your first domain to get started.',
    'domains_renew'             => 'Renew',
    'domains_lock'              => 'Lock',
    'domains_unlock'            => 'Unlock',
    'domain_status_expiring'    => 'Expiring',
    'domain_status_expired'     => 'Expired',

    // ── Auth (M4) ──
    'auth_terms'                => 'Terms',
    'auth_privacy'              => 'Privacy',

    // Common fields
    'auth_email'                => 'Email Address',
    'auth_email_placeholder'    => 'you@example.com',
    'auth_password'             => 'Password',
    'auth_password_placeholder' => 'Enter your password',
    'auth_password_create_placeholder' => 'At least 8 characters',
    'auth_confirm_password'     => 'Confirm Password',
    'auth_confirm_placeholder'  => 'Re-enter your password',
    'auth_new_password'         => 'New Password',
    'auth_first_name'           => 'First Name',
    'auth_first_name_placeholder' => 'John',
    'auth_last_name'            => 'Last Name',
    'auth_last_name_placeholder' => 'Doe',
    'auth_remember_me'          => 'Remember me',
    'auth_forgot_password'      => 'Forgot password?',
    'auth_or_continue'          => 'Or continue with',

    // Login
    'auth_login_heading'        => 'Welcome back',
    'auth_login_subheading'     => 'Sign in to your YottaSrc account to continue',
    'auth_login_btn'            => 'Sign In',
    'auth_login_link'           => 'Sign in',
    'auth_login_now'            => 'Sign in now',
    'auth_no_account'           => 'Don\'t have an account?',

    // Register
    'auth_register_title'       => 'Create Account',
    'auth_register_subtitle'    => 'Sign up account with YottaSrc.',
    'auth_register_btn'         => 'Register',
    'auth_register_link'        => 'Create one',
    'auth_have_account'         => 'Already have an account?',
    'auth_terms_agree'          => 'I agree to the <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a>',
    'auth_register_welcome_notice' => 'YottaSrc welcomes and accepts clients from all countries without exception. We encourage using accurate information during registration; if our system detects any fake or incorrect data, accounts and services may be suspended or closed without notice.',
    'auth_register_social_label' => 'Register with social account (optional)',
    'auth_optional'             => 'Optional',
    'auth_country_search'       => 'Search country...',
    'auth_country_empty'        => 'No countries found',
    'auth_step_confirm'         => 'Confirm',
    'auth_next_step'            => 'Next Step',
    'auth_back'                 => 'Back',
    'auth_review_title'         => 'Review Your Information',
    'auth_full_name'            => 'Full Name',
    'auth_terms_required'       => 'Please accept the Terms of Service to continue.',

    // Contact & Address fields
    'auth_country'              => 'Country',
    'auth_phone'                => 'Phone Number',
    'auth_phone_placeholder'    => 'Enter number',
    'auth_city'                 => 'City',
    'auth_city_placeholder'     => 'Enter your city',
    'auth_state'                => 'State',
    'auth_state_placeholder'    => 'Enter your state',
    'auth_address'              => 'Address',
    'auth_address_placeholder'  => 'Enter your address',
    'auth_postcode'             => 'Postcode',
    'auth_postcode_placeholder' => 'Enter your postcode',
    'auth_company'              => 'Company',
    'auth_company_placeholder'  => 'Enter company name',

    // Captcha
    'auth_captcha_success'      => 'Success!',
    'auth_captcha_privacy'      => 'Privacy · Help',

    // Password strength
    'auth_pwd_weak'             => 'Weak',
    'auth_pwd_fair'             => 'Fair',
    'auth_pwd_good'             => 'Good',
    'auth_pwd_strong'           => 'Strong',
    'auth_pwd_mismatch'         => 'Passwords do not match.',

    // Forgot Password
    'auth_forgot_title'         => 'Forgot Password',
    'auth_forgot_heading'       => 'Forgot your password?',
    'auth_forgot_subheading'    => 'No worries — we\'ll send you reset instructions',
    'auth_forgot_info'          => 'Enter the email address associated with your account and we\'ll email you a secure link to reset your password.',
    'auth_forgot_btn'           => 'Send Reset Link',
    'auth_forgot_sent_title'    => 'Check your email',
    'auth_forgot_sent_desc'     => 'We\'ve sent a password reset link to your email address. Please check your inbox and spam folder.',
    'auth_back_to_login'        => 'Back to login',
    'auth_remembered'           => 'Remembered your password?',

    // Reset Password
    'auth_reset_heading'        => 'Set a new password',
    'auth_reset_subheading'     => 'Choose a strong password to secure your account',
    'auth_reset_btn'            => 'Reset Password',
    'auth_reset_done_title'     => 'Password updated',
    'auth_reset_done_desc'      => 'Your password has been changed successfully. You can now sign in with your new password.',
    'auth_reset_expired_title'  => 'Link expired',
    'auth_reset_expired_desc'   => 'This password reset link has expired or is no longer valid. Please request a new one.',
    'auth_request_new_link'     => 'Request new link',

    // ── Verification (M4) ──
    'verify_title'              => 'Account Verification',

    // Banner (shown on other pages)
    'verify_banner_label'       => 'Verification',
    'verify_banner_text'        => 'Since you are a new customer, you need to verify your account before using Cloud Servers.',
    'verify_banner_cta'         => 'Verify now',

    // Stepper

    // Buttons
    'verify_submit'             => 'Submit Verification',
    'verify_submitting'         => 'Submitting...',
    'verify_back_dashboard'     => 'Back to Dashboard',

    // Step 1 — Information form
    'verify_purpose'            => 'Purpose of Cloud Servers',
    'verify_purpose_website'    => 'Website Hosting',
    'verify_purpose_app'        => 'App Development',
    'verify_purpose_gaming'     => 'Gaming Server',
    'verify_purpose_data'       => 'Data Processing',
    'verify_purpose_ml'         => 'Machine Learning / AI',
    'verify_purpose_crypto'     => 'Cryptocurrency / Blockchain',
    'verify_purpose_vpn'        => 'VPN / Proxy',
    'verify_purpose_other'      => 'Other',

    'verify_entity_type'        => 'Entity Type',
    'verify_entity_individual'  => 'Individual',
    'verify_entity_business'    => 'Business',
    'verify_entity_government'  => 'Government',
    'verify_entity_nonprofit'   => 'Non-Profit',

    'verify_language'           => 'Preferred Language',

    'verify_referral'           => 'Referral Source',
    'verify_referral_search'    => 'Online Search',
    'verify_referral_social'    => 'Social Media',
    'verify_referral_friend'    => 'Friend / Word of Mouth',
    'verify_referral_forum'     => 'Forum / Community',
    'verify_referral_youtube'   => 'YouTube',
    'verify_referral_ad'        => 'Advertisement',

    // Step 2 — Payment
    'verify_amount_label'       => 'Initial deposit amount',
    'verify_generate_invoice'   => 'Generate Invoice',
    'verify_invoice_generated'  => 'Invoice generated. Check your email or the Invoices section.',
    'verify_min_amount_error'   => 'Minimum deposit is €5 EUR.',

    // Step 3 — Finish (review + submit)
    'verify_tos_agree'          => 'I agree to the <a href="#">Terms of Service</a>, <a href="#">Refund Policy</a>, and confirm the information above is accurate.',

    // Success state

    // Info card (below wizard)

    // ── Cloud Hub (M4) ──
    'cloud_title'                  => 'Cloud Servers',

    // Tabs
    'cloud_tab_projects'           => 'Projects',
    'cloud_tab_limits'             => 'Limits',
    'cloud_tab_referral'           => 'Referral',

    // Projects tab
    'cloud_new_project'            => '+ New Project',
    'cloud_project_actions'        => 'Project actions',
    'cloud_project_open'           => 'Open Project',
    'cloud_project_rename'         => 'Rename',
    'cloud_project_copy_id'        => 'Copy Project ID',
    'cloud_project_delete'         => 'Delete Project',
    'cloud_projects_warn'          => '<strong>To create a cloud server</strong>, you must first create a project. You cannot create a server directly without a project.',

    // Billing tab
    'cloud_bill_last_invoice'      => 'Last Invoice',
    'cloud_bill_next_charge'       => 'Next Charge',
    'cloud_bill_lifetime'          => 'Lifetime',
    'cloud_bill_total_spent'       => 'Total spent',
    'cloud_autorecharge_title'     => 'Auto-Recharge',
    'cloud_autorecharge_on'        => 'Automatically add funds when balance falls below the threshold.',
    'cloud_autorecharge_off'       => 'Auto-recharge is currently disabled. Enable it to avoid service interruption.',
    'cloud_autorecharge_enabled'   => 'Auto-recharge enabled',
    'cloud_autorecharge_disabled'  => 'Auto-recharge disabled',
    'cloud_billing_invoices_link_text' => 'View all your cloud invoices and payment history in the',
    'cloud_billing_invoices_link'  => 'Invoices section',

    // Billing — per-project usage breakdown
    'cloud_bill_usage_title'       => 'Usage by Project · :month',
    'cloud_bill_usage_total'       => 'Total this month:',
    'cloud_bill_usage_col_project' => 'Project',
    'cloud_bill_usage_col_usage'   => 'Usage',
    'cloud_bill_usage_col_share'   => 'Share',
    'cloud_px_running'             => ':n running',
    'cloud_px_stopped_short'       => 'stopped',

    // Limits tab
    'cloud_limits_desc'            => 'Each customer has a set amount of limits, and these are shared across all the projects they start.',
    'cloud_limits_cta_text'        => 'If you want more resources, just let us know and we\'ll be glad to help you out.',
    'cloud_limits_increase'        => 'Limit Increase',
    'cloud_limit_ips'              => 'IPs',
    'cloud_limit_terminate'        => 'Terminate / Month',

    // Limit Increase modal
    'cloud_limit_req_modal_title'  => 'Request Limit Increase',
    'cloud_limit_req_intro'        => 'Raise the desired limit for any resource you need more of. Our team usually responds within 1 business day.',
    'cloud_limit_req_current'      => 'Current',
    'cloud_limit_req_desired'      => 'Desired',
    'cloud_limit_req_reason'       => 'Reason',
    'cloud_limit_req_reason_ph'    => 'Briefly describe what you\'re building or why you need the increase…',
    'cloud_limit_req_submit'       => 'Submit Request',
    'cloud_limit_req_sent'         => 'Your request has been submitted. Our team will review it shortly.',
    'cloud_limit_req_history'      => 'Past Requests',
    'cloud_limit_req_col_type'     => 'Resource',
    'cloud_limit_req_col_from'     => 'From',
    'cloud_limit_req_col_to'       => 'To',
    'cloud_limit_req_empty'        => 'No previous limit increase requests.',

    // Referral tab
    'cloud_referral_referrals'     => 'Referrals',
    'cloud_referral_pending'       => 'Pending',
    'cloud_promo_15_title'         => 'Get €15',
    'cloud_promo_15_desc'          => 'Spend €200 EUR on cloud servers and receive a one-time €15 EUR cloud credit reward.',
    'cloud_promo_10_title'         => 'Get €10',
    'cloud_promo_10_desc'          => 'Get €10 EUR in cloud credits for every referral spending over €100 EUR.',
    'cloud_referral_code_coming'   => 'In the next console update, the new REFERRALS system will be available.',

    // New Project modal
    'cloud_new_project_modal_title' => 'Create New Project',
    'cloud_new_project_modal_desc'  => 'Projects help you organize your cloud servers. Each project has its own servers, network, and API keys.',
    'cloud_deploy_pick_title'       => 'Deploy Server — Pick a Project',
    'cloud_deploy_pick_desc'        => 'Choose which project the new server will belong to.',
    'cloud_deploy_pick_new_project' => 'Or create a new project',
    'cloud_project_name_label'      => 'Project Name',
    'cloud_project_name_placeholder' => 'e.g. my-website',
    'cloud_project_name_hint'       => '3–30 characters. Letters, numbers, dashes, and underscores only.',
    'cloud_project_desc_placeholder' => 'Brief description of this project...',
    'cloud_new_project_modal_notice' => 'A unique <strong>Project ID</strong> will be auto-generated. You can rename the project anytime from its settings.',
    'cloud_create_project'          => 'Create Project',
    'cloud_creating'                => 'Creating...',
    'cloud_project_created'         => 'Project :id created successfully.',
    'common_optional'               => 'optional',
    'common_increase'               => 'Increase',
    'common_decrease'               => 'Decrease',

    // ── Project Context (M4 Phase 3) ──
    'project_badge_label'           => 'Project ID',
    'project_nav_aria'              => 'Project navigation',
    'project_nav_api'                => 'API Access',
    'project_nav_main_dashboard'    => 'Main Dashboard',

    // Project — Servers page
    'project_col_os'                => 'OS',
    'project_col_created'           => 'Created At',
    'project_servers_empty_search'  => 'No servers match your search.',
    'project_servers_search_ph'     => 'Search by name, IP, OS, location…',
    'project_no_servers_title'      => 'No Servers!',
    'project_no_servers_desc'       => 'You don\'t have any servers in this project yet.',
    'project_no_servers_hint_prefix' => 'To create one, please click on',
    'project_no_servers_hint_suffix' => 'above.',

    // Project — Network page
    'project_col_protocol'          => 'Protocol',
    'project_col_assigned_server'   => 'Assigned Server',
    'project_ip_type_primary'       => 'Primary IP',
    'project_ip_type_additional'    => 'Additional',
    'project_ip_stat_total'         => 'Total IPs',
    'project_ip_action_rdns'        => 'Edit rDNS',
    'project_ip_action_remove'      => 'Remove IP',
    'project_network_search'        => 'Search IPs or servers...',
    'project_network_empty_search'  => 'No IP addresses match your search.',
    'project_filter_all_protocols'  => 'All Protocols',
    'project_no_ips_title'          => 'No Network Addresses!',
    'project_no_ips_desc'           => 'IP addresses are assigned automatically when you create servers.',
    'project_no_ips_hint_prefix'    => 'To get your first IP, just click on',
    'project_no_ips_hint_suffix'    => 'above and deploy a server.',
    'project_server_coming'         => 'Server details view will be available soon.',

    // Project — API Access page

    // Project — API Access (live UI)
    'project_api_docs_btn'          => 'Documentation',
    'project_api_create_btn'        => 'Create API Key',
    'project_api_full_docs'         => 'Full documentation',
    'project_api_stat_total'        => 'Total Keys',
    'project_api_stat_revoked'      => 'Revoked',
    'project_api_quickstart_title'  => 'Quickstart',
    'project_api_quickstart_sub'    => 'Make your first call in under a minute.',
    'project_api_search_ph'         => 'Search by name, prefix…',
    'project_api_col_key'           => 'Key',
    'project_api_col_scopes'        => 'Scopes',
    'project_api_col_last_used'     => 'Last Used',
    'project_api_expires_on'        => 'Expires :date',
    'project_api_status_revoked'    => 'Revoked',
    'project_api_action_regenerate' => 'Regenerate',
    'project_api_action_edit_soon'  => 'Editing keys is coming soon.',
    'project_api_empty_title'       => 'No API keys yet',
    'project_api_empty_desc'        => 'Create your first key to start integrating with the YottaSrc API.',
    'project_api_empty_search'      => 'No keys match your filters.',
    'project_api_tip_title'         => 'Keep your keys safe',
    'project_api_tip_desc'          => 'Never commit keys to source control. Rotate regularly and revoke any key you suspect is compromised.',

    // Project — API Access modals
    'project_api_create_title'      => 'Create New API Key',
    'project_api_create_intro'      => 'Give the key a memorable name, pick the scopes it\'s allowed to call, and optionally set an expiry.',
    'project_api_name_ph'           => 'e.g. Production automation',
    'project_api_name_hint'         => 'Only you can see this name. Use something that helps you identify where it\'s used.',
    'project_api_scopes_hint'       => 'Grant the minimum set of scopes needed for your integration.',
    'project_api_scopes_required'   => 'Pick at least one scope.',
    'project_api_expiry_label'      => 'Expires after',
    'project_api_expiry_never'      => 'Never',
    'project_api_expiry_30'         => '30 days',
    'project_api_expiry_90'         => '90 days',
    'project_api_expiry_365'        => '1 year',
    'project_api_create_submit'     => 'Create Key',
    'project_api_reveal_title'      => 'Your new API key',
    'project_api_reveal_desc'       => 'Copy this key now. For security reasons you won\'t be able to see it again.',
    'project_api_reveal_warn'       => 'This is the only time the full key is shown. Store it in a secret manager immediately.',
    'project_api_reveal_done'       => 'I\'ve saved it — continue',
    'project_api_regenerate_done'   => 'A new secret has been generated',
    'project_api_revoke_title'      => 'Revoke API Key',
    'project_api_revoke_desc'       => 'Revoking a key immediately disables it. Any integration using it will stop working.',
    'project_api_revoke_warn'       => 'This action cannot be undone.',
    'project_api_revoke_confirm'    => 'Yes, revoke',
    'project_api_revoke_done'       => 'API key has been revoked',

    // ── Create Server Wizard (M4 Phase 5) ──
    'create_server_title'           => 'Create New Server',
    'create_order_summary'          => 'Order Summary',
    'create_label_package'          => 'Package',
    'create_label_image'            => 'Image',
    'create_label_total_mo'         => 'Total / Mo',
    'create_label_total_h'          => 'Total / h',

    // Nav buttons
    'create_nav_select_resources'   => 'Select Resources',
    'create_nav_select_location'    => 'Select Location',
    'create_nav_select_package'     => 'Select Package',
    'create_nav_select_image'       => 'Select Image',
    'create_nav_create_server'      => 'Create Server',

    // Step 1
    'create_step1_os_title'         => 'Select OS',
    'create_step1_resources_title' => 'Select Resources',
    'create_os_linux'               => 'Linux OS',
    'create_os_windows'             => 'Windows OS',

    // Step 2
    'create_region_europe'          => 'Europe',
    'create_region_north_america'   => 'North America',
    'create_location_info'          => 'Is your location not listed here? For other locations, you can place a monthly order from the pricing page. Locations available for hourly billing will be added gradually.',

    // Step 3
    'create_pkg_cores'              => 'Core',
    'create_package_popular'        => 'Popular',

    // Step 4
    'create_image_warning'          => 'Installing Ubuntu 22, Ubuntu 24, or AlmaLinux 9 on servers with 1GB RAM may cause performance issues or server creation failures. Always check functionality after installation.',

    // Validation
    'create_validate_step1'         => 'Please select OS and resource type.',
    'create_validate_step2'         => 'Please select a location.',
    'create_validate_step3'         => 'Please select a package.',
    'create_validate_step4'         => 'Please select an OS image.',

    // Confirm modal
    'create_confirm_title'          => 'Create Server',
    'create_confirm_desc'           => 'Are you sure you want to create a new server with the following configuration?',
    'create_confirm_yes'            => 'Yes, Create',

    // Verification gate
    'create_gate_title'             => 'Something is wrong!',
    'create_gate_desc'              => 'You should complete the verification process first before creating any servers.',
    'create_gate_cta'               => 'Complete Verification',

    // ── Server Details (M4 Phase 6) ──
    'srvd_action_restart'           => 'Restart',
    'srvd_action_stop'              => 'Stop',
    'srvd_action_snapshot'          => 'Take Snapshot',
    'srvd_power_on'                 => 'Power ON',
    'srvd_power_off'                => 'Power OFF',
    'srvd_power_turned_on'          => 'Server powered on.',
    'srvd_power_turned_off'         => 'Server powered off.',

    'srvd_warn_label'               => 'Warning',
    'srvd_warn_text'                => '— The server was just created moments ago. Please allow 2-5 minutes for it to become fully operational. This message will automatically disappear shortly.',

    // Tabs
    'srvd_tab_bandwidth'            => 'Bandwidth',
    'srvd_tab_reinstall'            => 'Reinstall',
    'srvd_tab_upgrade'              => 'Upgrade Server',
    'srvd_tab_abuse'                => 'Abuse',
    'srvd_tab_activities'           => 'Activities',
    'srvd_tab_pricing'              => 'Pricing',

    // Overview tab
    'srvd_overview_access_title'    => 'Remote Desktop Access & Usage',
    'srvd_spec_cpu'                 => 'Server CPU',
    'srvd_spec_ram'                 => 'Server RAM',
    'srvd_spec_ssd'                 => 'Server SSD',

    // Network tab
    'srvd_network_main_ip'          => 'Main IP',
    'srvd_network_notice_1'         => 'Here, you\'ll find the primary IPs assigned to your server.',
    'srvd_network_notice_2'         => 'Occasionally, the primary IP may be deleted or replaced, depending on the cloud provider\'s policies.',
    'srvd_network_notice_3'         => 'If you delete an IP within 7 days of creating it, you\'ll be charged <strong>25% of the monthly cost of the IP</strong>. This is to prevent abuses of our resources.',
    'srvd_network_notice_4'         => 'Certain packages include IPv6 capability. You can activate it by clicking the "Add IPv6" button. If you don\'t see this button, your current package doesn\'t support IPv6.',
    'srvd_network_add_primary'      => 'Add Primary IP',
    'srvd_network_add_ipv6'         => 'Add IPv6',
    'srvd_network_add_additional'   => 'Add Additional IP',
    'srvd_network_additional_title' => 'Additional IPs',
    'srvd_network_add_notice_1'     => 'You can add up to 3 additional IPs to your current server, but keep in mind your account has a maximum limit of 5 IPs.',
    'srvd_network_add_notice_2'     => 'You can\'t move IPs from one server to another.',
    'srvd_network_add_notice_3'     => 'If you delete an IP within 7 days of creating it, you\'ll be charged <strong>25% of the monthly cost</strong>. This is to prevent abuses of our resources.',
    'srvd_network_add_notice_4'     => 'If you need more resources or a higher IP limit, feel free to <a href="#">request them here</a>.',
    'srvd_network_additional_empty' => 'No additional IPs have been added yet. To add one, simply click on the "Add Additional IP" button.',
    'srvd_network_instructions'     => 'Show Instructions',

    // Bandwidth tab
    'srvd_bw_title'                 => 'Bandwidth Usage',
    'srvd_bw_over_btn'              => 'Enable Over Bandwidth',
    'srvd_bw_reset_btn'             => 'Reset Bandwidth',
    'srvd_bw_reset_done'            => 'Bandwidth counter reset.',
    'srvd_bw_this_month'            => 'this month',
    'srvd_bw_today'                 => 'Today {gb} GB',
    'srvd_bw_avg'                   => 'Avg {gb} GB/day',
    'srvd_bw_tt_day'                => 'Day −{n}',

    // Tab bar — new tabs (backup + firewall)
    'srvd_tab_backup'               => 'Backup',
    'srvd_tab_firewall'             => 'Firewall',

    // Transfer to Project
    'srvd_action_transfer'          => 'Transfer to Project',
    'srvd_transfer_modal_title'     => 'Transfer Server to Another Project',
    'srvd_transfer_modal_desc'      => 'Move the server {server} to a different project. Billing, tags, and permissions will follow the new project.',
    'srvd_transfer_current_project' => 'Current project',
    'srvd_transfer_target_label'    => 'Target project',
    'srvd_transfer_pick_placeholder'=> '— Pick a project —',
    'srvd_transfer_no_other_projects' => 'You only have one project. Create another project first to transfer the server.',
    'srvd_transfer_warn'            => 'The server will be briefly unavailable while being reassigned.',
    'srvd_transfer_confirm'         => 'Transfer Server',

    // Type-to-confirm shared label
    'srvd_type_to_confirm'          => 'Type {word} below to confirm',

    // Delete modal extras
    'srvd_delete_modal_warn'        => 'This action cannot be undone. All data, snapshots, and backups will be permanently erased.',

    // Backup tab
    'srvd_backup_title'             => 'Automatic Backups',
    'srvd_backup_notice_1'          => 'Backups cost {pct} of the server\'s monthly price.',
    'srvd_backup_notice_2'          => 'Daily snapshots are retained for the last {days} days.',
    'srvd_backup_notice_3'          => 'Disabling backups will permanently delete existing snapshots.',
    'srvd_backup_monthly_cost'      => 'Monthly cost',
    'srvd_backup_enable'            => 'Enable Backups',
    'srvd_backup_disable'           => 'Disable Backups',
    'srvd_backup_enabled_toast'     => 'Backups enabled. First snapshot will run tonight.',
    'srvd_backup_disabled_toast'    => 'Backups disabled. Existing snapshots remain until the end of the billing cycle.',
    'srvd_backup_available'         => 'Available Backups',
    'srvd_backup_create_manual'     => 'Create Backup Now',
    'srvd_backup_manual_toast'      => 'Manual backup queued. This takes ~5 minutes.',
    'srvd_backup_empty'             => 'No backups yet. Enable automatic backups or create one manually.',
    'srvd_backup_col_id'            => 'Backup ID',
    'srvd_backup_col_date'          => 'Created',
    'srvd_backup_col_size'          => 'Size',
    'srvd_backup_restore'           => 'Restore',
    'srvd_backup_restore_toast'     => 'Restore started. The server will reboot shortly.',
    'srvd_backup_download'          => 'Download',
    'srvd_backup_clone'             => 'Clone to new server',

    // Firewall tab
    'srvd_firewall_add_rule'        => 'Add Rule',
    'srvd_firewall_rule_title'      => 'Firewall Rule',
    'srvd_firewall_save_rule'       => 'Save Rule',
    'srvd_firewall_saved_toast'     => 'Firewall rule saved.',
    'srvd_firewall_deleted_toast'   => 'Firewall rule removed.',
    'srvd_firewall_duplicate'       => 'Duplicate',
    'srvd_firewall_empty'           => 'No firewall rules yet. Click "Add Rule" to create your first rule.',
    'srvd_firewall_notice_1'        => 'Rules are evaluated top-to-bottom; the first match wins.',
    'srvd_firewall_notice_2'        => 'Default policy for unmatched traffic is ALLOW (inbound) / ALLOW (outbound).',
    'srvd_firewall_notice_3'        => 'Blocking SSH (port 22) may lock you out. Double-check before saving.',
    'srvd_firewall_col_action'      => 'Action',
    'srvd_firewall_col_direction'   => 'Direction',
    'srvd_firewall_col_note'        => 'Note',
    'srvd_firewall_action_allow'    => 'Allow',
    'srvd_firewall_action_allow_sub'=> 'Permit matching traffic',
    'srvd_firewall_action_deny'     => 'Deny',
    'srvd_firewall_action_deny_sub' => 'Block matching traffic',
    'srvd_firewall_dir_inbound'     => 'Inbound',
    'srvd_firewall_dir_outbound'    => 'Outbound',
    'srvd_firewall_any'             => 'Any',
    'srvd_firewall_port_hint'       => 'single port, list, or range',
    'srvd_firewall_source_hint'     => 'IP, CIDR, or "any" for 0.0.0.0/0',

    // Abuse tab — reports table columns
    'srvd_abuse_col_date'           => 'Reported',
    'srvd_abuse_col_source'         => 'Reporter',
    'srvd_abuse_col_summary'        => 'Summary',

    // Pricing tab — billing records table
    'srvd_pricing_col_hours'        => 'Hours',
    'srvd_pricing_col_ips'          => 'IPs',
    'srvd_pricing_col_bandwidth'    => 'Bandwidth',
    'srvd_pricing_col_total'        => 'Total',
    'srvd_pricing_total_so_far'     => 'Total this month so far',

    // Reinstall tab
    'srvd_reinstall_title'          => 'Server Reinstall / Rebuild',
    'srvd_reinstall_notice_1'       => 'This is where you can reinstall/rebuild your operating system, enabling you to switch to different distributions and versions.',
    'srvd_reinstall_notice_2'       => 'Please note that all your files will be deleted during this process, <strong>and it cannot be restored</strong>.',
    'srvd_reinstall_notice_3'       => 'Upon selecting the desired OS below, a dialogue will prompt you to confirm the installation process. You can retrieve the new password from the Overview section.',
    'srvd_reinstall_btn'            => 'Reinstall Now',

    // Upgrade tab
    'srvd_upgrade_warn'             => 'Once a server is upgraded, it can\'t be downgraded because the disk size cannot be safely reduced or shrunk.',
    'srvd_upgrade_current_label'    => 'Your Current Package is:',

    // Abuse tab
    'srvd_abuse_title'              => 'Important Notes',
    'srvd_abuse_firewall'           => 'Firewall Rules',
    'srvd_abuse_notice_1_b'         => 'Enable the firewall on your server. Never ignore this!',
    'srvd_abuse_notice_1'           => 'It will protect you from unexpected abuse reports. Close all ports, especially UDP, and open the TCP ports you need.',
    'srvd_abuse_notice_2'           => 'If there\'s any abuse report about network attacks, IP attacks, or port scanning, the server will be permanently suspended. Don\'t open a ticket and say you forgot to enable the firewall!',
    'srvd_abuse_notice_3'           => 'In other cases, a ticket will be opened, and you\'ll be given time to respond and solve the problem. Provide us with details about the reason. If you fail to respond by the deadline, the server may be suspended at any time.',
    'srvd_abuse_notice_4'           => 'Remember, we partner with several data centers, each managing abuse reports differently. We can\'t control everything, and the final decision isn\'t always ours.',
    'srvd_abuse_notice_5'           => 'You can click on the button above \'Firewall Rules\' to get complete protection, which will help you avoid any future abuse reports.',
    'srvd_abuse_reports_title'      => 'Abuse Reports',
    'srvd_abuse_pending'            => 'Pending',
    'srvd_abuse_review'             => 'In Review',
    'srvd_abuse_suspended'          => 'Suspended',
    'srvd_abuse_solved'             => 'Solved',
    'srvd_abuse_ok'                 => 'Yey! Everything is OK!',
    'srvd_abuse_search_ph'          => 'Search by ID, type, reporter…',
    'srvd_abuse_empty_search'       => 'No reports match your filters.',

    // Activities tab
    'srvd_activities_title'         => 'Server Activities',
    'srvd_activities_col'           => 'Activity',

    // Pricing tab
    'srvd_pricing_title'            => 'Cost & Usage (:month)',
    'srvd_pricing_notice_1'         => 'The cost displayed in the boxes below is per hour and is calculated only for the current month.',
    'srvd_pricing_notice_2'         => 'Any Primary or additional IPs that are added or removed will also be factored into the calculation here.',
    'srvd_pricing_notice_3'         => 'Keep in mind that deleting IPs within 7 days of use will result in a deduction of 25% of their monthly price.',
    'srvd_pricing_notice_4'         => 'The table below provides comprehensive details of the server\'s cost and usage for all months of operation.',
    'srvd_pricing_notice_5'         => 'Certain cost add-ons are refreshed every 24 hours.',
    'srvd_pricing_notice_6'         => 'You will pay a maximum of <strong>€7.49</strong> for using the server for up to 720 hours from 01/04/2026 to 30/04/2026. If you pay more and reach 720 hours, the extra amount will be refunded. For less than 720 hours, the hourly rate applies.',
    'srvd_pricing_hourly'           => 'Hourly Price',
    'srvd_pricing_monthly'          => 'Monthly Price',
    'srvd_pricing_cycle'            => 'Current Cycle',
    'srvd_pricing_bk_server'        => 'Server',
    'srvd_pricing_bk_primary_ips'   => 'Primary IPs',
    'srvd_pricing_so_far_label'     => 'used so far this month',
    'srvd_pricing_projected_label'  => 'Projected month-end total',
    'srvd_pricing_of_month'         => 'of month',
    'srvd_pricing_hint_on_track'    => 'On track — projected at {pct}% of the monthly plan.',
    'srvd_pricing_hint_over'        => 'Pace is high — projected at {pct}% of the monthly plan. Review usage.',
    'srvd_pricing_breakdown_title'  => 'Cost breakdown',
    'srvd_pricing_notes_title'      => 'Billing notes & fine print',
    'srvd_pricing_billing_records'  => 'Billing Records',
    'srvd_pricing_check_billing'    => 'Check Billing',
    'srvd_pricing_records_desc'     => 'All payments made to the server for each month are displayed below.',
    'srvd_pricing_no_usage'         => 'No usage has been recorded for this server yet.',

    // Delete tab
    'srvd_delete_title'             => 'Server Delete',
    'srvd_delete_desc'              => 'When you delete your server, all ongoing tasks will stop, and the server\'s disk data and backups will be permanently removed.',
    'srvd_delete_warning'           => 'Please note that once deleted, the data cannot be recovered.',
    'srvd_delete_confirm_text'      => 'Additionally, clicking on the "Delete Server" button will prompt a dialogue box for confirmation.',
    'srvd_delete_limit_text'        => 'Please be aware that only up to 15 server terminations are allowed per month.',
    'srvd_delete_count_label'       => 'Number of terminations this month',
    'srvd_delete_btn'               => 'Delete Server',
    'srvd_delete_modal_title'       => 'Delete Server?',
    'srvd_delete_modal_desc'        => 'Are you sure you want to permanently delete server :server? This action cannot be undone.',
    'srvd_delete_confirm_btn'       => 'Yes, Delete',

    // ── Service Details — Tutorials (Phase 7) ──
    'services_tutorials_title'      => 'Tutorials & Guides',
    'services_tutorial_q1'          => 'How to access your server via SSH / RDP?',
    'services_tutorial_a1'          => 'Use the IP, username, and password shown above. For Linux, connect via SSH on port 22. For Windows, use Remote Desktop Connection on port 3389.',
    'services_tutorial_q2'          => 'How to reset your server password?',
    'services_tutorial_a2'          => 'Go to the server actions menu and select "Reset Password". A new password will be generated and displayed in the Overview tab within minutes.',
    'services_tutorial_q3'          => 'How to see your login history?',
    'services_tutorial_a3'          => 'Login history is tracked in the Activities tab of your server. It shows every session with IP, timestamp, and duration.',
    'services_tutorial_q4'          => 'I can\'t access my server. What should I do?',
    'services_tutorial_a4'          => 'First, ensure the firewall is not blocking your IP. Try pinging the server. If still unreachable, <a href="#">open a support ticket</a> with full details and we\'ll investigate within 10 hours.',

    // ── Server Details — interactive actions (Phase 8 fixes) ──
    'common_save'                   => 'Save',
    'common_close'                  => 'Close',
    'common_remove'                 => 'Remove',

    // Rename server
    'srvd_rename'                   => 'Rename server',
    'srvd_rename_success'           => 'Server renamed successfully.',
    'srvd_rename_invalid'           => 'Name must be 3-30 characters.',

    // Action confirms (Restart, Stop, Snapshot, Reset Password)
    'srvd_action_restart_heading'   => 'Restart Server?',
    'srvd_action_restart_text'      => 'The server will be restarted immediately. Running services will be briefly interrupted.',
    'srvd_action_restart_confirm'   => 'Restart Now',
    'srvd_action_restart_done'      => 'Server restart initiated.',
    'srvd_action_stop_heading'      => 'Stop Server?',
    'srvd_action_stop_text'         => 'The server will be powered off. Your data will be preserved, but the server will be unreachable until you start it again.',
    'srvd_action_stop_confirm'      => 'Stop Server',
    'srvd_action_stop_done'         => 'Server is shutting down.',
    'srvd_action_snapshot_heading'  => 'Take Snapshot?',
    'srvd_action_snapshot_text'     => 'A full snapshot of the server will be created. You can restore from it later. This may take a few minutes.',
    'srvd_action_snapshot_confirm'  => 'Create Snapshot',
    'srvd_action_snapshot_done'     => 'Snapshot scheduled. You\'ll be notified when ready.',
    'srvd_action_reset_pw_heading'  => 'Reset Password?',
    'srvd_action_reset_pw_text'     => 'A new random password will be generated and shown in the Overview tab. Your existing sessions will be terminated.',
    'srvd_action_reset_pw_confirm'  => 'Reset Password',
    'srvd_action_reset_pw_done'     => 'New password generated. Check the Overview tab.',

    // Add IP modal
    'srvd_add_ip_title'             => 'Add IP Address',
    'srvd_add_ip_title_ipv6'        => 'Add IPv6 Address',
    'srvd_add_ip_desc_primary'      => 'Add a new primary IPv4 address for your server.',
    'srvd_add_ip_desc_ipv6'         => 'Add an IPv6 address to your server. Supports /64 subnets.',
    'srvd_add_ip_desc_additional'   => 'Add an additional IP for services that need multiple endpoints.',
    'srvd_add_ip_ipv4_sub'          => 'Standard · widely supported',
    'srvd_add_ip_ipv6_sub'          => 'Modern · larger address space',
    'srvd_add_ip_rdns_label'        => 'Reverse DNS (rDNS)',
    'srvd_add_ip_rdns_hint'         => 'Must be a valid hostname (letters, numbers, dots, hyphens).',
    'srvd_add_ip_notice'            => '<strong>Note:</strong> If you delete this IP within 7 days, you\'ll be charged 25% of the monthly cost.',
    'srvd_add_ip_submit'            => 'Add IP',
    'srvd_add_ip_adding'            => 'Adding...',
    'srvd_add_ip_success'           => 'IP added:',

    // rDNS edit (inline prompt — server-details)
    'srvd_rdns_prompt'              => 'Enter reverse DNS hostname (empty to clear):',
    'srvd_rdns_invalid'             => 'Invalid hostname format.',
    'srvd_rdns_saved'               => 'rDNS updated successfully.',

    // Bandwidth toggle
    'srvd_bw_over_enabled'          => 'Over Bandwidth Enabled',
    'srvd_bw_over_on'               => 'Over-bandwidth is now enabled. Extra usage billed at €0.99/TB.',
    'srvd_bw_over_off'              => 'Over-bandwidth disabled.',

    // Reinstall modal
    'srvd_reinstall_modal_title'    => 'Reinstall Server?',
    'srvd_reinstall_modal_desc'     => 'The server will be wiped and reinstalled with the selected OS.',
    'srvd_reinstall_modal_target_os' => 'Target OS',
    'srvd_reinstall_modal_current'  => 'Current OS',
    'srvd_reinstall_modal_warn'     => 'All your files will be deleted and cannot be restored.',
    'srvd_reinstall_starting'       => 'Starting...',
    'srvd_reinstall_started'        => 'Reinstall started. This may take 5-10 minutes.',

    // Upgrade modal
    'srvd_upgrade_modal_title'      => 'Upgrade Server?',
    'srvd_upgrade_modal_desc'       => 'Your server will be upgraded to the new package. This can\'t be undone.',
    'srvd_upgrade_modal_new'        => 'New Package',
    'srvd_upgrade_modal_new_price'  => 'New Price',
    'srvd_upgrade_modal_confirm'    => 'Upgrade Now',
    'srvd_upgrade_upgrading'        => 'Upgrading...',
    'srvd_upgrade_started'          => 'Upgrade started. Server will reboot.',

    // Firewall modal (overview-level strings — tab-level keys live above)
    'srvd_firewall_intro'           => 'Configure inbound firewall rules for your server. Rules are applied in order from top to bottom.',
    'srvd_firewall_col_port'        => 'Port',
    'srvd_firewall_add_coming'      => 'Rule editor coming soon.',
    'srvd_firewall_saved'           => 'Firewall rules saved.',

    // Console modal
    'srvd_console_title'            => 'Web Console',
    'srvd_console_connected'        => 'Connected',
    'srvd_console_clear'            => 'Clear console',
    'srvd_console_type_help'        => 'Type `help` to see available commands.',
    'srvd_console_placeholder'      => 'Type a command and press Enter...',

    // Instructions modal (server-details)
    'srvd_instructions_title'       => 'IP Setup Instructions',
    'srvd_instructions_desc'        => 'Follow these steps to configure the IP address on your server.',
    'srvd_instructions_s1_title'    => '1. Assign the IP to your network interface',
    'srvd_instructions_s1_desc'     => 'Add the IP address to your primary interface (usually eth0):',
    'srvd_instructions_s2_title'    => '2. Configure the default route',
    'srvd_instructions_s2_desc'     => 'Set the default gateway so outbound traffic uses your new IP:',
    'srvd_instructions_s3_title'    => '3. Test connectivity',
    'srvd_instructions_s3_desc'     => 'Verify the IP works by pinging a public DNS server:',
    'srvd_instructions_view_docs'   => 'View Full Documentation',
    'srvd_instructions_docs_coming' => 'Documentation portal coming soon.',
    'common_confirm'                => 'Confirm',

    // Network page — rDNS modal
    'project_rdns_modal_title'      => 'Edit Reverse DNS',
    'project_rdns_modal_desc'       => 'Reverse DNS maps your IP back to a hostname (useful for email sending, etc.).',
    'project_rdns_modal_ip_label'   => 'IP Address',
    'project_rdns_modal_value_label' => 'Reverse DNS Hostname',
    'project_rdns_modal_hint'       => 'Leave empty to clear. Changes take up to 15 minutes to propagate globally.',

    // Network page — Remove IP
    'project_remove_ip_title'       => 'Remove IP?',
    'project_remove_ip_desc'        => 'Are you sure you want to remove this IP?',
    'project_remove_ip_warn'        => 'If you remove this IP within 7 days of adding it, you\'ll be charged 25% of the monthly cost.',
    'project_remove_ip_confirm'     => 'Yes, Remove',
    'project_remove_ip_done'        => 'IP removed:',

    // Network page — Instructions
    'project_instructions_desc'     => 'Follow these steps to configure the IP on Ubuntu/Debian with Netplan.',
    'project_instructions_s1_title' => '1. Edit the netplan configuration',
    'project_instructions_s1_desc'  => 'Open the netplan YAML file and add your IP to the addresses list:',
    'project_instructions_s2_title' => '2. Apply the configuration',
    'project_instructions_s2_desc'  => 'After saving, apply the new network configuration:',
    'project_instructions_s3_title' => '3. Verify the changes',
    'project_instructions_s3_desc'  => 'Confirm the IP is now active on the interface:',

    // Cloud Hub — project rename/delete
    'cloud_project_rename_title'    => 'Rename Project',
    'cloud_project_rename_desc'     => 'Change the display name of this project. The Project ID will not change.',
    'cloud_project_rename_id_label' => 'Project ID (cannot be changed)',
    'cloud_project_rename_name_label' => 'New Name',
    'cloud_project_rename_success'  => 'Project renamed successfully.',
    'cloud_project_rename_invalid'  => 'Name must be 3-30 characters (letters, numbers, dashes only).',
    'cloud_project_delete_title'    => 'Delete Project?',
    'cloud_project_delete_desc'     => 'This will permanently delete the project and all its resources.',
    'cloud_project_delete_warn'     => 'All servers, IPs, and API keys in this project will be destroyed. This cannot be undone.',
    'cloud_project_delete_confirm'  => 'Yes, Delete Project',
    'cloud_project_delete_done'     => 'Project deleted successfully.',

    // ═══ M4 PREMIUM — Mission Control hero ═══
    'cloud_hero_eyebrow'            => 'Mission Control',
    'cloud_hero_sub'                => 'A live view of every server, cost and region across your account.',
    'cloud_hero_deploy_cta'         => 'Deploy Server',
    'cloud_new_project_short'       => 'New Project',
    'cloud_hero_active_servers'     => 'Active Servers',
    'cloud_hero_mtd_cost'           => 'Month-to-Date Cost',
    'cloud_hero_bandwidth'          => 'Bandwidth',
    'cloud_hero_regions'            => 'Regions',
    'cloud_hero_regions_active'     => 'active',
    'cloud_hero_aria'               => 'Account overview',

    // ═══ Project cards (premium) ═══
    'cloud_px_servers'              => 'Servers',
    'cloud_px_cpu_avg'              => 'CPU avg',
    'cloud_px_monthly'              => 'This month',
    'cloud_px_new_sub'              => 'Organize servers, keys and quotas',

    // ═══ Empty state ═══
    'cloud_empty_title'             => 'Launch your first project',
    'cloud_empty_desc'              => 'Projects keep your servers, API keys and quotas tidy — each one is its own little cloud.',
    'cloud_empty_tip1'              => 'Group related servers',
    'cloud_empty_tip2'              => 'Scoped API keys per project',
    'cloud_empty_tip3'              => 'Separate quotas & billing tags',

    // ═══ Billing (premium) ═══
    'cloud_bx_current_month'        => 'Month-to-date',
    'cloud_bx_projected'            => 'Projected total:',
    'cloud_bx_based_on_usage'       => 'based on current usage',
    'common_paid'                   => 'Paid',

    // ═══ Limits (premium) ═══
    'cloud_lx_eyebrow'              => 'Account Quota',
    'cloud_lx_title'                => 'Resource Limits',

    // ═══ Referral (premium) ═══
    'cloud_rx_eyebrow'              => 'Invite & Earn',
    'cloud_rx_title'                => 'Share YottaSrc, earn credits',
    'cloud_rx_sub'                  => 'Send your link to a friend. When they spend, you both get rewarded.',
    'cloud_rx_code_label'           => 'Your code',
    'cloud_rx_link_label'           => 'Invite link',
    'cloud_rx_code_copied'          => 'Referral code copied.',
    'cloud_rx_link_copied'          => 'Invite link copied.',
    'cloud_rx_share'                => 'Share via',
    'cloud_rx_share_subject'        => 'Join me on YottaSrc Cloud',
    'cloud_rx_share_body'           => 'Spin up powerful cloud servers in seconds — use my invite link:',
    'cloud_rx_stat_signups'         => 'friends signed up',
    'cloud_rx_stat_pending_sub'     => 'awaiting payout',
    'cloud_rx_stat_paid_sub'        => 'credited to your account',
    'cloud_rx_rewards_title'        => 'How rewards stack up',
    'cloud_rx_rewards_sub'          => 'Two bonuses trigger automatically when your referrals hit the spend targets.',
    'cloud_rx_reward_per_signup'    => 'per referral',

    // ═══ M4 PREMIUM — Server Details hero + telemetry ═══
    'srvd_hero_plan'               => 'Plan',
    'srvd_hero_uptime'             => 'Uptime',
    'srvd_status_running'          => 'Running',
    'srvd_status_stopped'          => 'Stopped',

    // Telemetry strip labels
    'srvd_tele_cpu'                => 'CPU',
    'srvd_tele_ram'                => 'Memory',
    'srvd_tele_disk'               => 'Disk',
    'srvd_tele_net'                => 'Network',
    'srvd_tele_mbps'               => 'Mbps in/out',

    // Remote Access card
    'srvd_access_sub'              => 'Copy any field to your clipboard in one click.',
    'srvd_access_reveal'           => 'Show / hide password',
    'srvd_access_ip_copied'        => 'IP address copied.',
    'srvd_access_username_copied'  => 'Username copied.',
    'srvd_access_password_copied'  => 'Password copied.',

    // Specs
    'srvd_specs_sub'               => 'Hardware and billing overview for this server.',
    'srvd_spec_cores'              => 'cores',
    'srvd_spec_status_sub'         => 'all systems nominal',
    'srvd_spec_cycle'              => 'Plan Cost',

    // ═══ M4 PREMIUM — Create Server wizard ═══
    'create_cs_step_prefix'        => 'Step',
    'create_cs_step1_label'        => 'Resources',
    'create_cs_step4_label'        => 'Image',
    'create_cs_step1_title'        => 'What kind of machine do you need?',
    'create_cs_step1_sub'          => 'Pick the operating system family and whether you want shared or dedicated resources. You can change these at deploy time only.',
    'create_cs_step2_title'        => 'Where should it live?',
    'create_cs_step2_sub'          => 'Closer to your users means lower latency. Choose the region and datacenter that fits your workload.',
    'create_cs_step3_title'        => 'Size the hardware',
    'create_cs_step3_sub'          => 'Pick a plan — you can upgrade the CPU, RAM and disk anytime from the server\'s settings.',
    'create_cs_step4_title'        => 'Choose an image',
    'create_cs_step4_sub'          => 'Your server boots into this operating system on first start. You can reinstall with a different image later.',

    // ═══ M4 PREMIUM — Project Pro hero (servers / network / api) ═══
    'project_pro_eyebrow_api'      => 'API',
    'project_pro_sub_servers'      => 'All servers in this project. Click a row to open the server details.',
    'project_pro_sub_network'      => 'Every IP assigned inside this project. Edit rDNS or remove any address you no longer need.',
    'project_pro_sub_api'          => 'Programmatic access to your servers, IPs and billing — coming soon.',
    'project_pro_stat_total'       => 'Total Servers',
    'project_pro_stat_primary'     => 'Primary',

    // ═══ M4 PREMIUM — Verification intro ═══

    // Split layout — context panel

    // Progress + nav
    'verify_vx_continue'           => 'Continue',

    // Step 1
    'verify_vx_step1_title'        => 'Tell us what you\'re building',
    'verify_vx_step1_sub'          => 'This helps us tailor your setup and keep the platform secure. Takes under a minute.',
    'verify_vx_q_purpose'          => 'What will you use your servers for?',
    'verify_vx_q_entity'           => 'Are you an individual or a business?',
    'verify_vx_q_language'         => 'Preferred language',
    'verify_vx_q_referral'         => 'How did you hear about us?',

    // Step 2
    'verify_vx_step2_title'        => 'Fund your account',
    'verify_vx_step2_sub'          => 'A small starting balance (€5 minimum) activates your account. It goes straight into your wallet — use it for servers, domains, anything.',

    // Step 3
    'verify_vx_step3_title'        => 'Review and submit',
    'verify_vx_step3_sub'          => 'Everything looks good? Tick the box and send it over to our team.',

    // Success state
    'verify_vx_done_eyebrow'       => 'Submitted',
    'verify_vx_done_title'         => 'You\'re all set',
    'verify_vx_done_sub'           => 'We got your application. Our team reviews every account and most are approved within a business day. We\'ll email you the moment it\'s done.',
    'verify_vx_done_meanwhile'     => 'While you wait…',
    'verify_vx_done_item1_title'   => 'Explore the dashboard',
    'verify_vx_done_item1_desc'    => 'Tour the features and get a feel for the console.',
    'verify_vx_done_item2_title'   => 'Read the cloud docs',
    'verify_vx_done_item2_desc'    => 'Setup guides, server examples, best practices.',
    'verify_vx_done_item3_title'   => 'Need a hand?',
    'verify_vx_done_item3_desc'    => 'Our team is one message away — we usually reply in minutes.',

    // Simplified Verification (matches Create Server pattern)
    'verify_vx_intro_title'        => 'Verify your account',
    'verify_vx_intro_sub'          => 'A quick 3-step check that unlocks Cloud Servers. Takes under two minutes.',
    'verify_vx_step_nav_info'      => 'Your info',
    'verify_vx_step_nav_pay'       => 'Starting balance',
    'verify_vx_step_nav_review'    => 'Review',
    'verify_vx_note_title'         => 'A few things to know',
    'verify_vx_note_desc'          => 'The balance is yours to spend on anything. Spam, crypto mining, and port-25 outbound are prohibited. Non-refundable on rejection (approval rate >95%).',

    // UX polish: time estimate, destination CTAs, field hints

    // Cloud Hub small UX polish
    'common_dismiss'               => 'Dismiss',
    'cloud_px_most_recent'         => 'Most recent',
    'cloud_empty_protip'           => 'Pro tip: keep one project per environment (prod · staging · dev).',

    // Create Server Step 1 — OS + Resources descriptions
    'create_os_linux_desc'         => 'Open-source. Ubuntu, Debian, Rocky & more.',
    'create_os_windows_desc'       => 'RDP access. Windows Server 2025 down to 2012.',
    'create_res_shared_desc'       => 'Cost-effective. Great for websites, dev & light APIs.',
    'create_res_dedicated_desc'    => 'Guaranteed cores. For gaming, heavy apps & production.',

    // ═══ Domain Details ═══
    'dom_registered'          => 'Registered',
    'dom_expires'             => 'Expires',
    'dom_locked'              => 'Transfer locked',
    'dom_unlocked'            => 'Transfer unlocked',
    'dom_actions'             => 'Actions',
    'dom_renew_now'           => 'Renew now',
    'dom_manage_dns'          => 'Manage DNS',
    'dom_transfer_out'        => 'Transfer out',
    'dom_get_epp'             => 'Get EPP code',
    'dom_edit_contacts'       => 'Edit contacts',
    'dom_delete_domain'       => 'Delete domain',

    // Hero stats
    'dom_days'                => 'days',
    'dom_days_left'           => 'Days until expiry',
    'dom_days_expired'        => 'Expired since',
    'dom_today'               => 'Expires today',
    'dom_dns_records'         => 'DNS Records',
    'dom_across_types'        => 'across record types',
    'dom_nameservers'         => 'Nameservers',
    'dom_authoritative'       => 'authoritative',
    'dom_auto_renew'          => 'Auto-renew',
    'dom_on'                  => 'On',
    'dom_off'                 => 'Off',
    'dom_autorenew_on_sub'    => 'renews automatically',
    'dom_autorenew_off_sub'   => 'you renew manually',

    // Tabs
    'dom_tab_overview'        => 'Overview',
    'dom_tab_dns'             => 'DNS',
    'dom_tab_whois'           => 'WHOIS',

    // Overview
    'dom_key_dates'           => 'Key dates',
    'dom_key_dates_sub'       => 'When the domain was registered and when it\'s up for renewal.',
    'dom_renewal_price'       => 'Renewal price',
    'dom_year'                => 'year',
    'dom_protection'          => 'Protection',
    'dom_protection_sub'      => 'Lock down your domain and keep registrant info private.',
    'dom_auto_renew_desc'     => 'We\'ll charge your payment method before expiry to keep the domain yours.',
    'dom_transfer_lock'       => 'Transfer lock',
    'dom_transfer_lock_desc'  => 'Blocks outbound transfers until you unlock it. Recommended.',
    'dom_whois_privacy'       => 'WHOIS privacy',
    'dom_whois_privacy_desc'  => 'Hide your contact details from public WHOIS lookups.',
    'dom_dnssec_desc'         => 'Cryptographic signatures prevent DNS spoofing.',

    // DNS tab
    'dom_dns_sub'             => 'A, AAAA, CNAME, MX, TXT and more. TTL in seconds.',
    'dom_add_record'          => 'Add record',
    'dom_dns_type'            => 'Type',
    'dom_dns_name'            => 'Name',
    'dom_dns_value'           => 'Value',
    'dom_dns_ttl'             => 'TTL',
    'dom_dns_empty_title'     => 'No DNS records yet',
    'dom_dns_empty_desc'      => 'Add an A or CNAME record to point this domain somewhere.',
    'dom_copy_value'          => 'Copy value',
    'dom_dns_modal_title_add' => 'Add DNS Record',
    'dom_dns_modal_title_edit' => 'Edit DNS Record',
    'dom_dns_name_hint'       => 'Use @ for the root domain, or a subdomain like "www" or "api".',
    'dom_dns_delete_title'    => 'Delete DNS Record',
    'dom_dns_delete_desc'     => 'This record will be removed immediately and may take up to 1 hour to propagate.',
    'dom_dns_saved_add'       => 'DNS record added',
    'dom_dns_saved_edit'      => 'DNS record updated',
    'dom_dns_deleted'         => 'DNS record deleted',

    // Nameservers tab
    'dom_nameservers_sub'     => 'The servers that answer DNS queries for this domain.',
    'dom_ns_use_defaults'     => 'Use defaults',
    'dom_ns_add_more'         => 'Add another nameserver',
    'dom_ns_max_warn'         => 'Maximum 8 nameservers allowed.',
    'dom_ns_invalid'          => 'Provide at least two valid hostnames.',
    'dom_ns_saved'            => 'Nameservers updated. Propagation can take up to 48 hours.',
    'dom_ns_defaults_applied' => 'Default YottaSrc nameservers loaded — click Save to apply.',
    'dom_ns_propagation_hint' => 'Changes to nameservers can take up to 48 hours to fully propagate across the internet.',

    // Glue records tab
    'dom_tab_glue'            => 'Glue Records',
    'dom_glue_title'          => 'Private Nameservers (Glue Records)',
    'dom_glue_sub'             => 'Register your own nameserver hosts under this domain (e.g. ns1.yourdomain.com) with the IP addresses they resolve to.',
    'dom_glue_add'             => 'Add glue record',
    'dom_glue_col_host'        => 'Host',
    'dom_glue_col_ipv4'        => 'IPv4',
    'dom_glue_col_ipv6'        => 'IPv6',
    'dom_glue_empty_title'     => 'No glue records yet',
    'dom_glue_empty_desc'      => 'Glue records are only needed if you\'re hosting nameservers on this domain itself.',
    'dom_glue_modal_title_add' => 'Add Glue Record',
    'dom_glue_modal_title_edit' => 'Edit Glue Record',
    'dom_glue_modal_intro'     => 'Create a private nameserver host within this domain. The IP you enter is what the registry hands out when someone resolves this hostname.',
    'dom_glue_host_hint'       => 'Must end in .:domain — e.g. ns1.:domain',
    'dom_glue_delete_title'    => 'Delete Glue Record',
    'dom_glue_delete_desc'     => 'Removing this glue record will break any domain using it as a nameserver.',
    'dom_glue_saved_add'       => 'Glue record added',
    'dom_glue_saved_edit'      => 'Glue record updated',
    'dom_glue_deleted'         => 'Glue record deleted',

    // EPP code modal
    'dom_epp_modal_title'     => 'EPP Transfer Code',
    'dom_epp_modal_desc'      => 'This code authorises a transfer of this domain to another registrar. Treat it like a password.',
    'dom_epp_modal_note'      => 'The code is hidden by default. Click Reveal to show it, and copy it to share with your new registrar.',
    'dom_epp_hide'            => 'Hide',
    'common_remove'           => 'Remove',

    // WHOIS
    'dom_whois_title'         => 'Registrant contact',
    'dom_whois_registrant'    => 'Registrant',
    'dom_whois_org'           => 'Organization',
    'dom_whois_email'         => 'Email',
    'dom_whois_registrar'     => 'Registrar',
    'dom_whois_privacy_on_sub'  => 'WHOIS privacy is on — public lookups see our mask, not your details.',
    'dom_whois_privacy_off_sub' => 'WHOIS privacy is off — your contact details are publicly visible.',

    // Settings
    'dom_settings_sub'        => 'Rare actions — transfers, deletion, and the auth code you need to move the domain elsewhere.',
    'dom_get_epp_desc'        => 'The auth code you\'ll need to transfer this domain to another registrar.',
    'dom_request_code'        => 'Request code',
    'dom_transfer_out_desc'   => 'Move this domain to another registrar. Transfer lock must be off.',
    'dom_transfer_start'      => 'Start transfer',
    'dom_delete_desc'         => 'Permanent. The domain will be released and may be re-registered by anyone.',
    'dom_delete_confirm_desc' => 'You\'re about to permanently delete this domain.',
    'dom_delete_warn'         => 'This action cannot be undone. You will lose control of the domain.',
    'dom_delete_confirm_yes'  => 'Yes, delete it',
    'dom_delete_done'         => 'Domain deleted.',

    // Toasts
    'dom_renewing_toast'      => 'Renewal started — check your invoices.',
    'dom_action_transfer_toast' => 'Transfer-out wizard coming soon.',
    'dom_action_contacts_toast' => 'Contact editor coming soon.',
    'dom_autorenew_on_toast'  => 'Auto-renew enabled.',
    'dom_autorenew_off_toast' => 'Auto-renew disabled.',
    'dom_lock_on_toast'       => 'Transfer lock enabled.',
    'dom_lock_off_toast'      => 'Transfer lock disabled.',
    'dom_privacy_on_toast'    => 'WHOIS privacy enabled.',
    'dom_privacy_off_toast'   => 'WHOIS privacy disabled.',
    'dom_dnssec_on_toast'     => 'DNSSEC enabled.',
    'dom_dnssec_off_toast'    => 'DNSSEC disabled.',

    // ═══ M4 PREMIUM — API roadmap ═══

    // ═══ AFFILIATES PAGE ═══
    'aff_title'                   => 'Affiliates',
    'aff_hero_eyebrow'            => 'Affiliate Program',
    'aff_hero_title'              => 'Earn money every time a friend signs up.',
    'aff_hero_sub'                => 'Share your unique link. When someone subscribes using it, you get a commission credited to your account — automatically.',
    'aff_code_label'              => 'Your Code',
    'aff_link_label'              => 'Your Link',
    'aff_code_copied'             => 'Affiliate code copied.',
    'aff_link_copied'             => 'Affiliate link copied.',
    'aff_share'                   => 'Share',
    'aff_share_subject'           => 'Check out YottaSrc — great hosting, great price',
    'aff_share_body'              => 'I\'ve been using YottaSrc for my servers. Fast, reliable and priced fairly. Use my link to sign up:',

    // Enable state (program disabled)
    'aff_enable_btn'              => 'Enable Affiliate Program',
    'aff_enable_terms_prefix'     => 'By enabling, you agree to the',
    'aff_enable_terms_link'       => 'Affiliate Terms',
    'aff_terms_coming'            => 'Affiliate Terms page is coming soon.',
    'aff_enable_modal_title'      => 'Enable Affiliate Program',
    'aff_enable_modal_desc'       => 'Turn on the Affiliate Program and instantly get a unique referral link. You can stop any time.',
    'aff_enable_modal_agree_prefix' => 'I agree to the',
    'aff_enable_modal_agree_link' => 'Affiliate Terms of Service',
    'aff_enable_modal_confirm'    => 'Enable now',
    'aff_enable_done'             => 'Affiliate Program enabled — your link is ready.',

    // Benefits strip
    'aff_benefit_commission_title' => 'Recurring commission',
    'aff_benefit_commission_desc' => '10% of every payment your referrals make — not just the first one.',
    'aff_benefit_lifetime_title'  => 'Lifetime attribution',
    'aff_benefit_lifetime_desc'   => 'Once someone joins through your link, they stay yours. Cookies last 90 days.',
    'aff_benefit_payout_title'    => 'Flexible payouts',
    'aff_benefit_payout_desc'     => 'Withdraw to credit balance, bank wire, or crypto once you reach :min.',

    // Rewards ladder
    'aff_rewards_title'           => 'Reward Ladder',
    'aff_rewards_sub'             => 'Every confirmed referral earns you commission on their first payment.',
    'aff_reward_10_title'         => 'Standard signup',
    'aff_reward_10_desc'          => '€10 credit for every referral whose first payment is above €100.',
    'aff_reward_15_title'         => 'Big spender bonus',
    'aff_reward_15_desc'          => '€15 one-time bonus if the referral spends €200+ in their first month.',
    'aff_reward_per_signup'       => 'per signup',
    'aff_reward_one_time'         => 'one-time bonus',

    // Stats
    'aff_stat_visitors'           => 'Visitors',
    'aff_stat_visitors_sub'       => 'Unique visits on your link',
    'aff_stat_signups'            => 'Signups',
    'aff_stat_signups_sub'        => 'Conversion rate: :rate%',
    'aff_stat_earned'             => 'Lifetime Earned',
    'aff_stat_earned_sub'         => ':paid already paid out',
    'aff_stat_available'          => 'Available Balance',
    'aff_stat_pending_sub'        => ':pending still pending',

    // Withdraw bar + modal
    'aff_withdraw_title'          => 'Ready to cash out?',
    'aff_withdraw_ready'          => 'You have :amount available. Request a withdrawal any time.',
    'aff_withdraw_not_ready'      => 'Earn :needed more to reach the :min minimum payout.',
    'aff_withdraw_btn'            => 'Request withdrawal',
    'aff_withdraw_modal_title'    => 'Request Withdrawal',
    'aff_withdraw_modal_intro'    => ':available available. Pick an amount and payout method.',
    'aff_withdraw_amount_hint'    => 'Min :min · Max :available',
    'aff_withdraw_method'         => 'Payout method',
    'aff_withdraw_submit'         => 'Submit request',
    'aff_withdraw_submitted'      => 'Withdrawal request submitted — you\'ll hear back within 3 business days.',
    'aff_withdraw_sla_note'       => 'Requests are processed within 3 business days. You\'ll get an email when the payout is sent.',

    // Payout methods
    'aff_method_credit'           => 'Account Credit',
    'aff_method_credit_desc'      => 'Instant — added to your wallet balance',
    'aff_method_bank'             => 'Bank Wire',
    'aff_method_bank_desc'        => '2–5 business days, SWIFT/IBAN',
    'aff_method_crypto'           => 'Crypto',
    'aff_method_crypto_desc'      => 'BTC / USDT — 24–48 hours after approval',
    'aff_payout_details_label_credit' => 'Note (optional)',
    'aff_payout_details_label_bank'   => 'Bank details',
    'aff_payout_details_label_crypto' => 'Wallet address',
    'aff_payout_details_ph_credit'    => 'Optional note — leave empty to credit your default wallet.',
    'aff_payout_details_ph_bank'      => 'IBAN, BIC/SWIFT, account holder name, bank name',
    'aff_payout_details_ph_crypto'    => 'e.g. bc1q... (BTC) or TRC20 USDT address',

    // Referrals table
    'aff_ref_title'               => 'My Referrals',
    'aff_ref_search_ph'           => 'Search by email or source…',
    'aff_ref_filter_all'          => 'All Statuses',
    'aff_ref_col_user'            => 'User',
    'aff_ref_col_source'          => 'Source',
    'aff_ref_col_amount'          => 'Commission',
    'aff_ref_empty_search'        => 'No referrals match your filters.',

    // Payouts table
    'aff_pay_title'               => 'Payout History',
    'aff_pay_col_ref'             => 'Reference',
    'aff_pay_col_method'          => 'Method',
    'aff_pay_empty_title'         => 'No payouts yet',
    'aff_pay_empty_desc'          => 'Once you request your first withdrawal, it\'ll show up here.',

    // Status badges
    'aff_status_confirmed'        => 'Confirmed',
    'aff_status_rejected'         => 'Rejected',

    // How-it-works footer
    'aff_how_title'               => 'How it works',
    'aff_how_1_title'             => 'Share your link.',
    'aff_how_1_desc'              => 'Post it anywhere — blog, Twitter, email signature, chat groups.',
    'aff_how_2_title'             => 'Your friend signs up.',
    'aff_how_2_desc'              => 'When they land on YottaSrc via your link, the referral is tracked for 90 days.',
    'aff_how_3_title'             => 'You get paid.',
    'aff_how_3_desc'              => 'Once they make their first payment, commission drops into your available balance.',
    'aff_how_4_title'             => 'Cash out.',
    'aff_how_4_desc'              => 'Withdraw anytime above €50 — instantly to wallet credit, or via bank/crypto.',

    // ═══ SERVICE DETAILS — shared ═══
    'services_status_suspended'   => 'Suspended',
    'services_rename_soon'        => 'Renaming services is coming soon.',
    'common_reveal'               => 'Reveal',
    'common_all'                  => 'All',


    // cPanel detail
    'cpanel_login_btn'            => 'Login to cPanel',
    'cpanel_login_redirect'       => 'Opening cPanel in a new tab…',
    'cpanel_apps'                 => 'Applications',
    'cpanel_apps_redirect'        => 'Opening Softaculous in a new tab…',
    'cpanel_service_info'         => 'Service Information',
    'cpanel_service_info_sub'     => 'Copy any field to your clipboard in one click.',
    'cpanel_specs_status'         => 'Specifications & Status',
    'cpanel_domain'               => 'Domain',
    'cpanel_username'             => 'Username',
    'cpanel_ip'                   => 'IP',
    'cpanel_hostname'             => 'Hostname',
    'cpanel_fact_location'        => 'Location',
    'cpanel_pack_specs'           => 'Package Specifications',
    'cpanel_pack_resources'       => 'Package Resources',
    'cpanel_dedicated'            => 'Dedicated Resources',
    'cpanel_shared'               => 'Shared Resources',
    'cpanel_chip_domains'         => 'Domains',
    'cpanel_chip_email'           => 'Email',
    'cpanel_chip_ftp'             => 'FTP',
    'cpanel_chip_databases'       => 'Databases',
    'cpanel_chip_terminal_yes'    => 'Terminal Access',
    'cpanel_chip_terminal_no'     => 'No Terminal Access',
    'cpanel_tutorials_title'      => 'Tutorials',
    'cpanel_tutorial_coming'      => 'Video tutorials are coming soon.',

    // cPanel tabs
    'cpanel_tab_domains'          => 'Domains',
    'cpanel_tab_email'            => 'Email Accounts',
    'cpanel_tab_ftp'              => 'FTP Accounts',
    'cpanel_tab_upgrade'          => 'Upgrade / Downgrade',

    // cPanel actions + modals
    'cpanel_action_reset_password' => 'Reset cPanel password',
    'cpanel_action_backup'        => 'Download full backup',
    'cpanel_action_restart'       => 'Restart services',
    'cpanel_action_terminate'     => 'Terminate service',
    'cpanel_terminate_title'      => 'Terminate cPanel Service',
    'cpanel_terminate_desc'       => 'Terminating this service removes all files, databases, emails, and backups permanently.',
    'cpanel_terminate_warn'       => 'This action cannot be undone.',
    'cpanel_terminate_confirm'    => 'Yes, terminate',
    'cpanel_terminate_done'       => 'Termination request submitted.',
    'cpanel_manage_in_cpanel'     => 'Opening cPanel in a new tab…',
    'cpanel_ns_title'             => 'Nameservers',
    'cpanel_ns_sub'               => 'Point your domain to these nameservers to serve it from this cPanel account.',
    'cpanel_ns_note'              => 'DNS changes can take up to 48 hours to propagate globally.',
    'cpanel_dom_col_root'         => 'Document Root',
    'cpanel_db_title'             => 'Databases',
    'cpanel_db_col_users'         => 'Users',
    'cpanel_ftp_col_quota'        => 'Quota',
    'cpanel_billing_title'        => 'Linked Invoices',
    'cpanel_inv_date'             => 'Issued',
    'cpanel_inv_due'              => 'Due',
    'cpanel_upgrade_sub'          => 'Switch between available plans any time.',
    'cpanel_upgrade_hint'         => 'Changing your plan is pro-rated — you only pay the difference for the remaining days in the current cycle.',
    'cpanel_upgrade_browse'       => 'Browse plans',
    'cpanel_upgrade_current_pkg'  => 'Your current package',
    'cpanel_upgrade_current_label'=> 'Current plan',
    'cpanel_upgrade_packages_title' => 'Available packages',
    'cpanel_upgrade_switch_to'    => 'Switch to {pkg}',
    'cpanel_upgrade_queued'       => 'Upgrade request queued. You will receive a pro-rated invoice.',
    'cpanel_upgrade_note_1'       => 'Your data, domains, databases, and emails remain untouched during the switch.',
    'cpanel_upgrade_note_2'       => 'The new quota takes effect within a few minutes after the pro-rated invoice is paid.',
    'cpanel_upgrade_note_3'       => 'Downgrades may cause usage to exceed the new limits — free up space first.',
    'cpanel_up_pkg_starter'       => 'Starter',
    'cpanel_up_pkg_business'      => 'Business',
    'cpanel_up_pkg_pro'           => 'Pro',
    'cpanel_up_pkg_enterprise'    => 'Enterprise',
    'cpanel_up_spec_email'        => 'Email',
    'cpanel_up_spec_db'           => 'DB',

    // Reseller detail
    'reseller_login_btn'          => 'Login to WHM',
    'reseller_action_whm_reset'   => 'Reset WHM password',
    'reseller_action_backup'      => 'Download reseller backup',
    'reseller_tab_cpanels'        => 'cPanel Accounts',
    'reseller_cpanels_title'      => 'Child cPanel Accounts',
    'reseller_search_cpanels'     => 'Search by username or domain…',
    'reseller_manage_whm'         => 'Manage in WHM',
    'reseller_manage_in_whm'      => 'Opening WHM in a new tab…',
    'reseller_col_disk'           => 'Disk',
    'reseller_col_owner'          => 'cPanel Owner',
    'reseller_login_as'           => 'Login as user',
    'reseller_change_pkg'         => 'Change package',
    'reseller_suspend'            => 'Suspend',
    'reseller_unsuspend'          => 'Unsuspend',
    'reseller_terminate_cpanel'   => 'Terminate cPanel',
    'reseller_no_cpanels'         => 'No cPanel accounts match your filters.',
    'reseller_per_cpanel'         => 'Resources per cPanel',
    'reseller_resources_per_cpanel' => 'Per-cPanel limits',
    'reseller_domains_all'        => 'All Domains (across cPanels)',
    'reseller_upgrade_hint'       => 'Upgrading a reseller plan increases your cPanel slots, storage, and bandwidth.',
    'reseller_upgrade_sub'        => 'Pick a larger reseller tier or scale down — child accounts keep running.',
    'reseller_upgrade_packages_title' => 'Available reseller tiers',
    'reseller_upgrade_note_1'     => 'All existing child cPanel accounts continue running during the switch.',
    'reseller_upgrade_note_2'     => 'WHM stays at the same URL; only resource limits change.',
    'reseller_upgrade_note_3'     => 'Downgrading below your current storage/account usage is blocked.',
    'reseller_up_pkg_starter'     => 'Reseller Starter',
    'reseller_up_pkg_growth'      => 'Reseller Growth',
    'reseller_up_pkg_pro'         => 'Reseller Pro',
    'reseller_up_pkg_master'      => 'Master Reseller',
    'reseller_up_spec_accounts'   => 'cPanel accounts',
    'reseller_up_spec_whitelabel' => 'White-label NS',

    // Keys detail
    'keys_activate_guide'         => 'Activation Guide',
    'keys_reveal'                 => 'Reveal key',
    'keys_hide'                   => 'Hide key',
    'keys_invoices_title'         => 'Invoices List',
    'keys_col_num'                => '#',
    'keys_col_date'               => 'Invoice Date',
    'keys_col_due'                => 'Due Date',
    'keys_col_amount'             => 'Amount',
    'keys_col_status'             => 'Payment Status',
    'keys_no_invoices'            => 'No invoices found.',

    // cPanel detail — extra UI strings
    'cpanel_billing_info'         => 'Billing Information',
    'cpanel_bf_reg'               => 'Registration Date',
    'cpanel_bf_cycle'             => 'Billing Cycle',
    'cpanel_bf_renewal'           => 'Renewal Price',
    'cpanel_bf_due'               => 'Next Due Date',
    'cpanel_bf_days_left'         => ':n days left',
    'cpanel_billing_tools'        => 'Billing Tools',
    'cpanel_billing_lifetime_paid' => 'Paid lifetime',
    'cpanel_billing_outstanding'   => 'Outstanding',
    'cpanel_billing_next_due'      => 'Next due',
    'cpanel_bt_renew_now_title'    => 'Renew now',
    'cpanel_bt_renew_now_desc'     => 'Generate an invoice for the next cycle right away and extend the due date.',
    'cpanel_bt_renew_now_queued'   => 'Renewal invoice has been generated.',
    'cpanel_bt_change_cycle_title' => 'Change billing cycle',
    'cpanel_bt_change_cycle_desc'  => 'Switch between monthly, quarterly, or yearly billing.',
    'cpanel_bt_change_cycle_btn'   => 'Change cycle',
    'cpanel_bt_change_cycle_soon'  => 'Billing cycle changes will be available soon.',
    'cpanel_bt_renew_title'       => 'Renew Service & Generate Invoice',
    'cpanel_bt_renew_desc'        => 'When enabled, your service will renew automatically, and a renewal invoice will be generated <strong>6 days before</strong> the due date.',
    'cpanel_bt_renew_on'          => 'Auto-renewal is enabled',
    'cpanel_bt_renew_off'         => 'Auto-renewal is disabled',

    'cpanel_dom_create'           => 'Create New Domain / Subdomain',
    'cpanel_dom_manage'           => 'Manage Domains',
    'cpanel_dom_file_manager'     => 'File Manager',
    'cpanel_dom_main_badge'       => 'Main Domain',
    'cpanel_dom_change_main'      => 'Change Main Domain',
    'cpanel_dom_remove'           => 'Remove Domain',

    'cpanel_db_create'            => 'Create New Database',
    'cpanel_db_phpmyadmin'        => 'Open phpMyAdmin',
    'cpanel_db_manager'           => 'Open Database Manager',
    'cpanel_db_empty_line'        => 'No databases found. Click here to add one.',

    'cpanel_email_create'         => 'Create New Email',
    'cpanel_email_manage'         => 'Manage Email Accounts',
    'cpanel_email_empty_line'     => 'No email accounts found. Click here to add one.',

    'cpanel_ftp_open_mgr'         => 'Open FTP Manager',
    'cpanel_ftp_main'             => 'Main',
    'cpanel_ftp_col_folder'       => 'Folder Path',
    'cpanel_ftp_hostname'         => 'Hostname',
    'cpanel_ftp_ip'               => 'IP',
    'cpanel_ftp_port'             => 'Port',

    // Reseller — extra
    'reseller_ns_whitelabel'      => 'You may use the nameservers above, as they are white-labeled. If you wish to set up private nameservers, :tutorial and use the IP addresses provided below.',
    'reseller_ns_tutorial'        => 'view the tutorial',
    'reseller_ns_notes'           => 'Notes',
    'reseller_ns_notes_1'         => 'Ensure your domain is using the correct nameservers provided by us.',
];
