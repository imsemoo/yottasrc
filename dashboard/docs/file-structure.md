# Dashboard File Structure
> Complete project map with file descriptions.

---

```
dashboard/
│
├── index.php                          ← Home page (dashboard overview)
├── PLAN.md                            ← Master plan + milestone tracking
│
├── layouts/                           ← Shell & shared layout
│   ├── config.php                     ← App config, language, currency detection
│   ├── functions.php                  ← Helper functions (__(), e(), format_money(), etc.)
│   ├── shell.php                      ← Main wrapper (includes header + sidebar + topbar)
│   ├── header.php                     ← <head> tag, fonts, CSS, theme script
│   ├── sidebar.php                    ← Left navigation menu
│   ├── topbar.php                     ← Top bar (breadcrumbs, search, user menu)
│   └── footer.php                     ← Closes shell, search overlay, loads JS
│
├── components/                        ← Reusable PHP components
│   ├── page-header.php                ← Page title + description + action buttons
│   ├── alert.php                      ← Inline alert (info/success/warning/error)
│   ├── modal.php                      ← Modal opening (header + body start)
│   ├── modal-end.php                  ← Modal closing (body end + footer)
│   ├── error-state.php                ← Error state with retry button
│   ├── pagination.php                 ← Table pagination (prev/next + page numbers)
│   ├── phone-countries.php            ← Country data for phone input (40 countries)
│   ├── skeleton-stats.php             ← Skeleton: stat card row
│   ├── skeleton-table.php             ← Skeleton: table with filters
│   └── skeleton-detail.php            ← Skeleton: detail page (content + sidebar)
│
├── pages/
│   ├── services/
│   │   ├── index.php                  ← My Services (table + stats + filters)
│   │   ├── order.php                  ← Order New Service (plan cards + billing toggle)
│   │   └── service-details.php        ← Service detail (tabs: overview/usage/billing + actions)
│   │
│   ├── billing/
│   │   ├── invoices.php               ← Invoices list (table + stats)
│   │   ├── invoice-details.php        ← Invoice detail (line items + totals + pay)
│   │   ├── transactions.php           ← Transaction history (table + type filters)
│   │   ├── credit-balance.php         ← Credit balance card + history table
│   │   ├── payment-methods.php        ← Saved payment methods (cards + dropdown actions)
│   │   └── add-funds.php              ← Add funds (presets + amount + payment + summary)
│   │
│   ├── profile/
│   │   ├── index.php                  ← Profile (avatar + personal info + address forms)
│   │   ├── security.php               ← Security (password + 2FA + sessions)
│   │   └── settings.php               ← Settings (language/currency/theme + notifications)
│   │
│   ├── support/                       ← M3 (not built yet)
│   ├── domains/                       ← M3 (not built yet)
│   ├── cloud/                         ← M4 (not built yet)
│   └── auth/                          ← M4 (not built yet)
│
├── lang/
│   ├── en.php                         ← English translations (~400 keys)
│   └── ar.php                         ← Arabic translations (~400 keys)
│
├── static/
│   ├── css/
│   │   ├── tokens.css                 ← Design tokens (colors, spacing, radius, fonts)
│   │   ├── dashboard.css              ← Shell layout (sidebar, topbar, content area)
│   │   └── components.css             ← All component styles (~4100 lines)
│   │
│   ├── js/
│   │   ├── dashboard.js               ← Core JS (theme, sidebar, modal, toast, dropdown, validation)
│   │   └── pages/
│   │       ├── profile.js             ← Profile form messages
│   │       ├── security.js            ← Password strength + revoke modal
│   │       ├── settings.js            ← Theme/language/currency switching + close account modal
│   │       ├── service-details.js     ← Tab switching
│   │       ├── order.js               ← Category tabs + billing cycle toggle
│   │       └── add-funds.js           ← Amount presets + live summary calculation
│   │
│   └── images/
│       ├── favicon.png
│       ├── logo_dark.png
│       └── logo_light.png
│
└── docs/
    ├── skeleton-loading.md            ← Skeleton system documentation (for backend devs)
    └── file-structure.md              ← This file
```

---

## How a Page Loads

```
Browser requests → /pages/services/index.php

  1. config.php       → language detection, currency, constants
  2. functions.php    → helper functions loaded
  3. shell.php        → header.php (HTML head + CSS)
                      → sidebar.php (navigation)
                      → topbar.php (breadcrumbs + user menu)
                      → <main> opens

  4. Page content     → page-header component
                      → state branching (loading/error/empty/active)
                      → table/cards/forms with demo data

  5. footer.php       → search overlay
                      → dashboard.js (core)
                      → pages/service.js (page-specific, if $page_js set)
                      → </body></html>
```

---

## Key Conventions

| Convention | Details |
|-----------|---------|
| **Page state** | `$page_state = $_GET['state'] ?? 'active'` — every page |
| **Translations** | `__('key')` — from `lang/{en,ar}.php` |
| **Escaping** | `e($string)` — all user-facing output |
| **Assets** | `dash_asset('css/file.css')` — adds `?v=1.0.0` |
| **Money** | `format_money($amount)` — uses selected currency |
| **Page-specific JS** | `$page_js = 'pages/file.js'` — before config.php |
| **Components** | `include __DIR__ . '/../../components/name.php'` |
| **Card spacing** | `.db-mb` class (24px) instead of inline styles |

---

## What's Built vs Pending

| Module | Pages | Status |
|--------|-------|--------|
| Dashboard Home | 1 | Done |
| Account (Profile/Security/Settings) | 3 | Done (M1) |
| Services (List/Detail/Order) | 3 | Done (M2) |
| Billing (Invoices/Transactions/Balance/Methods/Funds) | 6 | Done (M2) |
| Support (Tickets/New/Detail) | 3 | Pending (M3) |
| Domains | 1 | Pending (M3) |
| Cloud (List/Detail) | 2 | Pending (M4) |
| Auth (Login/Register/Forgot/Reset) | 4 | Pending (M4) |
| **Total** | **23** | **13 done / 10 pending** |
