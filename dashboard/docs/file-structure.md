# Dashboard File Structure
> Complete project map with file descriptions.

---

```
dashboard/
│
├── index.php                          ← Dashboard home (overview)
├── PLAN.md                            ← Master plan + milestone tracking
│
├── layouts/                           ← Shell & shared layouts
│   ├── config.php                     ← App config, language, currency, Support PIN mock
│   ├── functions.php                  ← Helpers (__(), e(), format_money(), current_page()…)
│   ├── header.php                     ← <head>, fonts, CSS, theme bootstrap
│   ├── shell.php                      ← Main wrapper (promo bar + sidebar + topbar + main)
│   ├── sidebar.php                    ← Left navigation menu
│   ├── topbar.php                     ← Top bar (breadcrumbs, search, lang, user menu + What's New)
│   ├── footer.php                     ← Closes shell, search overlay, What's New panel, JS
│   ├── auth-shell.php                 ← Auth pages wrapper (login/register/forgot/reset)
│   ├── auth-footer.php                ← Auth pages closing scripts
│   ├── project-helpers.php            ← Cloud-project URL + lookup helpers
│   ├── project-shell.php              ← Cloud-project wrapper (project sidebar variant)
│   └── project-sidebar.php            ← Cloud-project scoped sidebar (Servers / API / Network)
│
├── components/                        ← Reusable PHP components
│   ├── page-header.php                ← Page title + description + action buttons
│   ├── account-tabs.php               ← Top tabs for Profile / Security / Settings
│   ├── changelog-tabs.php             ← Top tabs for Changelog / Feature Request / Report Bug
│   ├── alert.php                      ← Inline alert (info/success/warning/error)
│   ├── modal.php                      ← Modal opening (header + body start)
│   ├── modal-end.php                  ← Modal closing (body end + footer)
│   ├── confirm-body.php               ← Unified body for destructive confirm modals
│   ├── error-state.php                ← Error state with retry button
│   ├── empty-state.php                ← Empty state with icon + CTA
│   ├── table-empty.php                ← "No results" row (used by DashTable filter)
│   ├── pagination.php                 ← Static PHP pagination (legacy; prefer DashTablePager)
│   ├── phone-countries.php            ← Country data for phone input (40 countries)
│   ├── verification-banner.php        ← Dismissible "finish account verification" banner
│   ├── project-pro-hero.php           ← Cloud project hero strip (name + stats + actions)
│   ├── promo-bar.php                  ← Marquee offer bar at top of dashboard
│   ├── support-pin.php                ← Support PIN component (variants: card | inline)
│   ├── export-dropdown.php            ← CSV / Excel / Print dropdown for table toolbars
│   ├── changelog-data.php             ← Mock data for Changelog, Roadmap, Reward Tiers
│   ├── changelog-panel.php            ← "What's New" slide-in panel (included once in footer)
│   │
│   ├── skeleton-stats.php             ← Skeleton: stat card row
│   ├── skeleton-table.php             ← Skeleton: table with filters
│   ├── skeleton-detail.php            ← Skeleton: generic 2-col (content + sidebar)
│   ├── skeleton-hero.php              ← Skeleton: hero banner (title + chips + actions)
│   ├── skeleton-tabs.php              ← Skeleton: tab bar pill row
│   ├── skeleton-grid.php              ← Skeleton: responsive card grid
│   ├── skeleton-stepper.php           ← Skeleton: wizard stepper + form panel
│   ├── skeleton-chat.php              ← Skeleton: ticket/chat thread (alternating bubbles)
│   ├── skeleton-timeline.php          ← Skeleton: changelog timeline (date bubbles + spine)
│   └── skeleton-two-col.php           ← Skeleton: detail 2-col (tabs + rows + sidebar, accepts body slot)
│
├── pages/
│   ├── auth/
│   │   ├── login.php                  ← Email + password + social (Google/FB/X/GitHub)
│   │   ├── register.php               ← Multi-section registration form
│   │   ├── forgot.php                 ← Request password reset email
│   │   └── reset.php                  ← Reset via token
│   │
│   ├── services/
│   │   ├── index.php                  ← My Services (table/cards toggle + filters + tabs)
│   │   ├── order.php                  ← Order New Service (5 category sections)
│   │   ├── service-details.php        ← Service Command Center (hero + tabs + sidebar)
│   │   └── partials/
│   │       └── reseller.php           ← Reseller cPanels sub-view
│   │
│   ├── billing/
│   │   ├── invoices.php               ← Invoices list (outstanding bar + table)
│   │   ├── invoice-details.php        ← Invoice checkout-style detail (hero + 2-col + sticky pay)
│   │   ├── transactions.php           ← Grouped-by-month transactions
│   │   ├── credit-balance.php         ← Balance card + history table
│   │   ├── payment-methods.php        ← Saved payment methods
│   │   └── add-funds.php              ← Amount + method + summary
│   │
│   ├── cloud/
│   │   ├── index.php                  ← Cloud Mission Control (hero stats + 4 tabs: Projects / Billing / Limits / Referral)
│   │   └── project/
│   │       ├── servers.php            ← Project servers (table/cards toggle + pagination)
│   │       ├── server-details.php     ← Single server (9 tabs + sticky control panel)
│   │       ├── create-server.php      ← 4-step wizard (Plan → Location → OS → Confirm)
│   │       ├── network.php            ← Project-scoped IP list
│   │       └── api.php                ← Project-scoped API keys
│   │
│   ├── domains/
│   │   ├── index.php                  ← Domains list (table/cards toggle + pagination)
│   │   └── details.php                ← Single domain (Overview / DNS / Nameservers / WHOIS / Settings)
│   │
│   ├── support/
│   │   ├── index.php                  ← Tickets list (with Support PIN banner)
│   │   ├── new.php                    ← Open new ticket
│   │   └── ticket-details.php         ← Chat thread + sidebar
│   │
│   ├── profile/
│   │   ├── index.php                  ← Profile (form + Linked Accounts + Support PIN card)
│   │   ├── security.php               ← Password reset, 2FA, login methods, sessions
│   │   └── settings.php               ← Language / currency / theme + notifications
│   │
│   ├── affiliates/
│   │   └── index.php                  ← Referral stats + code + referrals table
│   │
│   ├── changelog/                     ← Roadmap + release notes hub
│   │   ├── index.php                  ← Changelog timeline (grouped by version)
│   │   ├── feature-request.php       ← Share ideas + product roadmap
│   │   └── report-bug.php             ← Report bug form + reward tiers
│   │
│   └── verification/
│       └── index.php                  ← Account verification wizard (3 steps)
│
├── lang/
│   ├── en.php                         ← English translations
│   └── ar.php                         ← Arabic translations
│
├── static/
│   ├── css/
│   │   ├── tokens.css                 ← Design tokens (colors, spacing, radius, fonts)
│   │   ├── dashboard.css              ← Shell layout (sidebar, topbar, promo bar, content)
│   │   └── components.css             ← All component styles (large — read by section)
│   │   └── auth/                      ← Auth page styles (login / register / forgot / reset)
│   │
│   ├── js/
│   │   ├── dashboard.js               ← Core JS:
│   │   │                                 ThemeToggle · Sidebar (+ hover-to-expand) · TopbarDropdowns
│   │   │                                 Search (with suggestions) · Modal · FormValidation · Toast
│   │   │                                 RowDropdown · PasswordToggle · AutoSkeleton · DashExport
│   │   │                                 DashTable · DashTablePager (with page-size selector)
│   │   │                                 View-Switcher (table ⇄ cards) · Support-PIN handler
│   │   └── pages/                     ← Page-specific JS (loaded via $page_js)
│   │
│   └── images/                        ← logos, favicons, brand icons
│
├── website/                           ← Main marketing site (sibling — not part of dashboard)
│
└── docs/
    ├── file-structure.md              ← This file
    ├── skeleton-loading.md            ← Skeleton system reference
    └── modal-system.md                ← Modal API reference
```

---

## How a Page Loads

```
Browser requests → /pages/services/index.php

  1. config.php        → language, currency, Support PIN mock
  2. functions.php     → helpers available
  3. shell.php         → header.php (HTML head + CSS)
                       → promo-bar.php (marquee above shell)
                       → sidebar.php (navigation)
                       → topbar.php (breadcrumbs + user menu + What's New entry)
                       → <main> opens

  4. Page content      → page-header component
                       → account-tabs / changelog-tabs (where applicable)
                       → state branching (loading / error / empty / active)
                       → table / cards / forms with demo data

  5. footer.php        → What's New slide-in panel (outside .db-shell)
                       → Search overlay + shuffled suggestions
                       → dashboard.js (core)
                       → pages/<file>.js (if $page_js set)
                       → </body></html>
```

---

## Key Conventions

| Convention | Details |
|-----------|---------|
| **Page state** | `$page_state = $_GET['state'] ?? 'active'` on every page |
| **Nav active override** | `$nav_active_override = 'services'` for detail pages so the parent sidebar item stays lit |
| **Translations** | `__('key')` — from `lang/{en,ar}.php` |
| **Escaping** | `e($string)` — all user-facing output |
| **Assets** | `dash_asset('css/file.css')` — adds `?v=<mtime>` cache-buster |
| **Money** | `format_money($amount)` — uses selected currency |
| **Page-specific JS** | `$page_js = 'pages/file.js'` — before config.php |
| **Components** | `include __DIR__ . '/../../components/name.php'` |
| **Table toolbar** | `data-table-tools` on `<table>`, `data-pager-for` on the pagination div |
| **Card spacing** | `.db-mb` (24px) / `.db-mt` (20px) instead of inline styles |

---

## What's Built

| Module | Pages | Status |
|--------|-------|--------|
| Dashboard Home | 1 | Done |
| Account (Profile / Security / Settings) | 3 | Done |
| Services (List / Order / Detail) | 3 | Done |
| Billing (Invoices / Invoice Details / Transactions / Balance / Methods / Funds) | 6 | Done |
| Support (List / New / Detail) | 3 | Done |
| Domains (List / Detail) | 2 | Done |
| Cloud (Hub / Servers / Server Details / Create / Network / API) | 6 | Done |
| Affiliates | 1 | Done |
| Verification | 1 | Done |
| Changelog / Feature Request / Report Bug | 3 | Done |
| Auth (Login / Register / Forgot / Reset) | 4 | Done |
| **Total** | **33** | **All built** |
