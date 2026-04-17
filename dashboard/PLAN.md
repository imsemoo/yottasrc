# YottaSrc Dashboard — Master Plan
> Last updated: 2026-04-06

---

## Project Status

| Milestone | Status | Progress |
|-----------|--------|----------|
| M1 — Foundation & Account | ✅ Done | 13/13 |
| M2 — Services & Billing | ✅ Done + UX Refined | 12/12 |
| M3 — Support & Domains | ✅ Done | 4/4 |
| M4 — Cloud & Auth | ❌ Not Started | 0/8 |

---

## Pages Map

### Dashboard
| # | Page | Path | Milestone | Status |
|---|------|------|-----------|--------|
| 1 | Home | `/index.php` | — | Done |

### Account (M1)
| # | Page | Path | Milestone | Status |
|---|------|------|-----------|--------|
| 2 | Profile | `/pages/profile/index.php` | M1 | Done |
| 3 | Security | `/pages/profile/security.php` | M1 | Done |
| 4 | Settings | `/pages/profile/settings.php` | M1 | Done |

### Services (M2)
| # | Page | Path | Milestone | Status |
|---|------|------|-----------|--------|
| 5 | My Services | `/pages/services/index.php` | M2 | Done |
| 6 | Service Details | `/pages/services/service-details.php` | M2 | Done |

### Billing (M2)
| # | Page | Path | Milestone | Status |
|---|------|------|-----------|--------|
| 7 | Invoices | `/pages/billing/invoices.php` | M2 | Done |
| 8 | Invoice Details | `/pages/billing/invoice-details.php` | M2 | Done |
| 9 | Transactions | `/pages/billing/transactions.php` | M2 | Done |
| 10 | Credit Balance | `/pages/billing/credit-balance.php` | M2 | Done |
| 11 | Payment Methods | `/pages/billing/payment-methods.php` | M2 | Done |
| 12 | Add Funds | `/pages/billing/add-funds.php` | M2 | Done |

### Support (M3)
| # | Page | Path | Milestone | Status |
|---|------|------|-----------|--------|
| 13 | Tickets | `/pages/support/index.php` | M3 | Done |
| 14 | Ticket Details | `/pages/support/ticket-details.php` | M3 | Done |
| 15 | New Ticket | `/pages/support/new.php` | M3 | Done |

### Domains (M3)
| # | Page | Path | Milestone | Status |
|---|------|------|-----------|--------|
| 16 | Domains | `/pages/domains/index.php` | M3 | Done |

### Cloud (M4)
| # | Page | Path | Milestone | Status |
|---|------|------|-----------|--------|
| 17 | Cloud Servers | `/pages/cloud/index.php` | M4 | Not Started |
| 18 | Server Details | `/pages/cloud/server-details.php` | M4 | Not Started |

### Order (M2 — built early)
| # | Page | Path | Milestone | Status |
|---|------|------|-----------|--------|
| 19 | Order Service | `/pages/services/order.php` | M2 | Done |

### Auth (M4 — standalone, no shell)
| # | Page | Path | Milestone | Status |
|---|------|------|-----------|--------|
| 20 | Login | `/pages/auth/login.php` | M4 | Not Started |
| 21 | Register | `/pages/auth/register.php` | M4 | Not Started |
| 22 | Forgot Password | `/pages/auth/forgot.php` | M4 | Not Started |
| 23 | Reset Password | `/pages/auth/reset.php` | M4 | Not Started |

**Total: 23 pages (17 done, 6 to build)**

---

## Detail Pages — Full Breakdown

### Service Details (`services/service-details.php`)

**Layout:** Page header + tabbed content + sidebar panel

**Tabs:**
| Tab | Content |
|-----|---------|
| Overview | Service name, plan, IP, status badge, server info, created date, billing cycle |
| Usage | Disk, bandwidth, email accounts — progress bars |
| Billing | Linked invoices table, next due date, renewal amount |

**Sidebar Panel (right):**
- Status card (active/suspended/terminated)
- Quick actions: Login to cPanel, Visit Site, Copy IP
- Management actions: Upgrade/Downgrade, Change Password, Request Cancellation

**URL pattern:** `service-details.php?id=123`

---

### Invoice Details (`billing/invoice-details.php`)

**Layout:** Page header + invoice card + action bar

**Sections:**
| Section | Content |
|---------|---------|
| Invoice Header | Invoice #, date issued, due date, status badge |
| Client Info | Name, email, address |
| Line Items | Table: description, quantity, unit price, total |
| Totals | Subtotal, tax, credit applied, total due |
| Payment Info | Payment method used, transaction ID, date paid (if paid) |

**Actions:**
- Pay Now button (if unpaid/overdue)
- Download PDF
- Print

**URL pattern:** `invoice-details.php?id=456`

---

### Server Details (`cloud/server-details.php`)

**Layout:** Page header + tabbed content + action panel

**Supports multiple server types via a shared layout:**

| Server Type | Differences |
|-------------|-------------|
| VPS (KVM) | Full root access, OS reinstall, console access, snapshots |
| cPanel Server | WHM/cPanel login links, account list, additional cPanel actions |
| Game Server | Game-specific config, player slots, mod management |

**Common structure (all types):**

**Tabs:**
| Tab | Content |
|-----|---------|
| Overview | Hostname, IP, OS, region, status, created date, specs (CPU/RAM/Disk/BW) |
| Resources | Live resource usage — CPU, RAM, Disk, Bandwidth — progress bars + charts |
| Network | IP addresses, reverse DNS, firewall rules |
| Backups | Backup list, create backup, restore, schedule |
| Activity | Server event log (reboot, resize, etc.) |

**Action Panel (top-right or sidebar):**
- Power: Start / Stop / Restart / Force Stop
- Console: Open VNC/noVNC console
- Reinstall OS
- Resize / Upgrade
- Destroy Server (danger, modal confirm)

**Type-specific tab (shown conditionally):**
- cPanel: "Accounts" tab — list cPanel accounts, create, suspend
- VPS: "Snapshots" tab — create, restore, delete snapshots

**URL pattern:** `server-details.php?id=789`

---

### Ticket Details (`support/ticket-details.php`)

**Layout:** Page header + conversation thread + reply box

**Sections:**
| Section | Content |
|---------|---------|
| Ticket Header | Ticket #, subject, department, status, priority, created date |
| Thread | Chronological messages — user + staff, timestamps, attachments |
| Reply Box | Textarea + file upload + submit button |
| Sidebar Info | Related service, assigned agent, last reply time |

**Actions:**
- Reply
- Close ticket
- Reopen ticket (if closed)

**URL pattern:** `ticket-details.php?id=101`

---

## Global Layout System

### Tokens (from `tokens.css`)
```
Sidebar width:          260px  (collapsed: 72px)
Topbar height:          64px
Content padding:        24px
Content max-width:      1200px
Container max:          1320px
Container padding:      24px
Section gap:            60px
```

### Page Layout Structure
```
┌─────────────────────────────────────────────────┐
│ Topbar (fixed, 64px, full width)                │
├──────────┬──────────────────────────────────────┤
│ Sidebar  │  .db-content                         │
│ 260px    │  ┌──────────────────────────────────┐ │
│ fixed    │  │ Page Header                      │ │
│          │  │ (.db-page-header)                │ │
│          │  ├──────────────────────────────────┤ │
│          │  │ Page Body                        │ │
│          │  │ (max-width: 1200px)              │ │
│          │  │                                  │ │
│          │  │ Uses grid layouts:               │ │
│          │  │  .db-grid-2    → 1fr 1fr         │ │
│          │  │  .db-grid-3-1  → 2fr 1fr         │ │
│          │  │  .db-grid-1    → 1fr (full)      │ │
│          │  │                                  │ │
│          │  └──────────────────────────────────┘ │
├──────────┴──────────────────────────────────────┤
│ Footer (inside .db-content)                     │
└─────────────────────────────────────────────────┘
```

### Spacing Rules
```
Between sections:       24px  (gap in grid)
Card internal padding:  20px  (24px on large)
Page header margin-bottom: 24px
Table cell padding:     12px 16px
Form group gap:         20px
Form label margin:      8px bottom
Modal padding:          24px
```

### Grid Rules
```
.db-grid-1     → single column (full width tables, forms)
.db-grid-2     → 2 equal columns → 1 column on tablet
.db-grid-3-1   → 2fr 1fr (content + sidebar) → stacked on tablet
.db-grid-3     → 3 equal columns → 2 on tablet → 1 on mobile
```

### Breakpoints
```
Desktop:    > 1024px    → full layout
Tablet:     768-1024px  → sidebar collapsed, grids stack
Mobile:     < 768px     → sidebar drawer, single column
```

### Detail Page Layout (with sidebar panel)
```
.db-detail-layout {
    display: grid;
    grid-template-columns: 1fr 320px;   /* content + sidebar */
    gap: 24px;
}
@media (max-width: 1024px) {
    grid-template-columns: 1fr;          /* stacked */
}
```

---

## Component System

### Core Components (M1 — must build first)

| # | Component | CSS Class | PHP Include | Status |
|---|-----------|-----------|-------------|--------|
| 1 | Page Header | `.db-page-header` | `components/page-header.php` | Done |
| 2 | Data Table | `.db-table` | — (CSS only) | Done |
| 3 | Filter Bar | `.db-filters` | — (CSS only) | Done |
| 4 | Pagination | `.db-pagination` | `components/pagination.php` | Done |
| 5 | Form Input | `.db-input` | — (CSS only) | Done |
| 6 | Form Select | `.db-select` | — (CSS only) | Done |
| 7 | Form Textarea | `.db-textarea` | — (CSS only) | Done |
| 8 | Toggle Switch | `.db-toggle` | — (CSS only) | Done |
| 9 | Modal | `.db-modal` | `components/modal.php` | Done |
| 10 | Alert / Toast | `.db-alert` | `components/alert.php` | Done |
| 11 | Skeleton Loader | `.db-skeleton` | — (CSS only) | Done |
| 12 | Error State | `.db-error-state` | `components/error-state.php` | Done |
| 13 | Dropdown Menu | `.db-dropdown` | — (CSS only) | Done |

### Billing Components (M2)

| # | Component | CSS Class | PHP Include | Status |
|---|-----------|-----------|-------------|--------|
| 14 | Stat Summary Cards | `.db-stat-summary` | `components/stat-summary.php` | Not Started |
| 15 | Payment Method Card | `.db-payment-card` | `components/payment-card.php` | Not Started |
| 16 | Amount Input | `.db-amount-input` | `components/amount-input.php` | Not Started |
| 17 | Invoice Line Items | `.db-line-items` | — (page-specific) | Not Started |
| 18 | Detail Layout | `.db-detail-layout` | `components/detail-layout.php` | Not Started |
| 19 | Tab Navigation | `.db-tabs` | `components/tabs.php` | Not Started |
| 20 | Info List | `.db-info-list` | — (CSS only) | Not Started |

### Content Components (M3)

| # | Component | CSS Class | PHP Include | Status |
|---|-----------|-----------|-------------|--------|
| 21 | File Upload | `.db-upload` | `components/upload.php` | Not Started |
| 22 | Ticket Thread | `.db-thread` | `components/thread.php` | Not Started |
| 23 | Domain Search | `.db-domain-search` | `components/domain-search.php` | Not Started |

### Complex Components (M4)

| # | Component | CSS Class | PHP Include | Status |
|---|-----------|-----------|-------------|--------|
| 24 | Plan / Pricing Card | `.db-plan-card` | `components/plan-card.php` | Not Started |
| 25 | Server Card | `.db-server-card` | `components/server-card.php` | Not Started |
| 26 | Step Wizard | `.db-wizard` | `components/wizard.php` | Not Started |
| 27 | Auth Card Layout | `.db-auth-card` | `layouts/auth-shell.php` | Not Started |
| 28 | Region / OS Selector | `.db-selector` | `components/selector.php` | Not Started |
| 29 | Action Panel | `.db-action-panel` | `components/action-panel.php` | Not Started |
| 30 | Progress Bar | `.db-progress` | — (CSS only) | Not Started |
| 31 | Resource Meter | `.db-resource-meter` | `components/resource-meter.php` | Not Started |

### Already Built (from Home page)

- Buttons `.db-btn` — all variants (primary, secondary, danger, ghost, success, sizes)
- Badges `.db-badge` — all statuses (active, suspended, terminated, cancelled, pending, paid, unpaid, overdue, refunded)
- Cards `.db-card` — header/body/footer
- Hero `.db-hero`
- Action Cards `.db-action-card`
- Service Items `.db-service-item`
- Invoice Items `.db-invoice-item`
- Activity Items `.db-activity-item`
- Balance Card `.db-balance-card`
- Link Cards `.db-link-card`
- Empty States `.db-empty-state`
- Grid Layouts `.db-grid-*`

---

## States System

Every data component supports 4 states:

| State | Class | Description |
|-------|-------|-------------|
| Loading | `.db-skeleton` | Pulse animation, mimics content shape |
| Empty | `.db-empty-state` | Illustration + message + CTA |
| Error | `.db-error-state` | Icon + message + retry button |
| Active | — (default) | Normal rendered state |

### Skeleton Variants
```
.db-skeleton              → base (pulse animation)
.db-skeleton--text        → single line (14px h, random widths)
.db-skeleton--heading     → heading line (24px h)
.db-skeleton--avatar      → circle (40x40)
.db-skeleton--card        → full card placeholder
.db-skeleton--row         → table row (5 rows default)
.db-skeleton--badge       → small pill (60x22)
.db-skeleton--button      → button shape (100x36)
.db-skeleton--image       → rectangle (ratio-based)
```

Applied to: Tables, Cards, Lists, Stats, Detail pages

---

## Milestone Details

---

### MILESTONE 1 — Foundation & Account
> Build core components + simplest pages to validate patterns

**Components (build first):**
1. Page Header
2. Data Table
3. Filter Bar
4. Pagination
5. Form system (Input, Select, Textarea, Toggle)
6. Modal
7. Alert / Toast
8. Skeleton Loader (all variants)
9. Error State
10. Dropdown Menu

**Pages (build after components):**
1. Profile (`/pages/profile/index.php`)
2. Security (`/pages/profile/security.php`)
3. Settings (`/pages/profile/settings.php`)

**Tasks:**

- [x] 1. Build CSS for all 13 core components → `components.css`
- [x] 2. Build PHP includes → `/components/*.php`
- [x] 3. Build skeleton loading system (CSS animations)
- [x] 4. Build Profile page
- [x] 5. Build Security page
- [x] 6. Build Settings page
- [x] 7. Add translations → `lang/en.php` + `lang/ar.php`
- [x] 8. Add page JS → `static/js/pages/`
- [x] 9. Test all states (loading, empty, error, active)
- [x] 10. Test responsive (mobile, tablet, desktop)
- [x] 11. Test dark/light theme
- [x] 12. Test RTL (Arabic)
- [x] 13. Final review & cleanup

---

### MILESTONE 2 — Services & Billing
> Build data-heavy listing pages + detail pages

**New components:**
- Stat Summary Cards
- Payment Method Card
- Amount Input
- Detail Layout (content + sidebar grid)
- Tab Navigation
- Info List (key-value pairs)
- Invoice Line Items

**Pages (in order):**
1. My Services (table + filters)
2. Service Details (tabs + sidebar actions)
3. Invoices (table + stat cards)
4. Invoice Details (line items + pay action)
5. Transactions (table + export)
6. Credit Balance (balance card + history)
7. Payment Methods (card list + add/delete)
8. Add Funds (amount + payment + confirm)

**Tasks:**

- [x] 1. Build 7 billing/detail components
- [x] 2. Build My Services page
- [x] 3. Build Service Details page
- [x] 4. Build Invoices page
- [x] 5. Build Invoice Details page
- [x] 6. Build Transactions page
- [x] 7. Build Credit Balance page
- [x] 8. Build Payment Methods page
- [x] 9. Build Add Funds page
- [x] 10. Add translations
- [x] 11. Test all states + responsive + theme + RTL

---

### MILESTONE 3 — Support & Domains
> Build communication + domain management

**New components:**
- File Upload
- Ticket Thread (conversation view)
- Domain Search

**Pages (in order):**
1. Tickets list (table + priority/status)
2. Ticket Details (thread + reply box)
3. New Ticket (form + upload + service selector)
4. Domains (table + auto-renew + actions)

**Tasks:**

- [ ] 1. Build 3 content components
- [ ] 2. Build Tickets list page
- [ ] 3. Build Ticket Details page
- [ ] 4. Build New Ticket page
- [ ] 5. Build Domains page
- [ ] 6. Add translations
- [ ] 7. Test all states + responsive + theme + RTL

---

### MILESTONE 4 — Cloud, Order & Auth
> Build complex flows + authentication

**New components:**
- Plan / Pricing Card
- Server Card
- Step Wizard
- Auth Card Layout (`layouts/auth-shell.php` — standalone, no sidebar/topbar)
- Region / OS Selector
- Action Panel (power controls, danger actions)
- Progress Bar
- Resource Meter

**Pages (in order):**
1. Cloud Servers (server cards + empty state)
2. Server Details (tabs + action panel, multi-type support)
3. Order Service (category tabs + plan cards)
4. Login (standalone auth layout)
5. Register (standalone auth layout)
6. Forgot Password (standalone auth layout)
7. Reset Password (standalone auth layout)

**Tasks:**

- [ ] 1. Build auth shell layout (`layouts/auth-shell.php`)
- [ ] 2. Build 8 complex components
- [ ] 3. Build Cloud Servers page
- [ ] 4. Build Server Details page
- [ ] 5. Build Order Service page
- [ ] 6. Build Login page
- [ ] 7. Build Register page
- [ ] 8. Build Forgot Password page
- [ ] 9. Build Reset Password page
- [ ] 10. Add translations
- [ ] 11. Test all states + responsive + theme + RTL

---

## User Flows

### Manage Service
```
Dashboard → My Services → [Click service] → Service Details
  ├── Overview tab: plan info, IP, server details
  ├── Usage tab: disk, bandwidth bars
  ├── Billing tab: linked invoices
  ├── Sidebar: Login to cPanel, Visit Site, Copy IP
  ├── Actions: Upgrade, Change Password, Cancel
  └── Breadcrumb back to My Services
```

### Pay Invoice
```
Dashboard → Invoices → [Click invoice] → Invoice Details
  ├── View line items, totals
  ├── Pay Now → select method → confirm → success toast
  ├── Download PDF / Print
  └── Breadcrumb back to Invoices
```

### Open Support Ticket
```
Dashboard → Tickets → New Ticket
  ├── Select department
  ├── Select related service (optional)
  ├── Fill subject + message
  ├── Attach files (optional)
  ├── Submit → redirect to Ticket Details
  └── View thread, reply, close
```

### Deploy Cloud Server
```
Dashboard → Cloud → Deploy New (button)
  ├── Step 1: Select region
  ├── Step 2: Select OS
  ├── Step 3: Select plan (CPU/RAM/Disk)
  ├── Step 4: Configure (hostname, SSH key, label)
  ├── Step 5: Review summary → Deploy
  └── Redirect to Server Details (provisioning state)
```

### Add Funds
```
Dashboard → Add Funds
  ├── Enter amount or select preset ($10, $25, $50, $100)
  ├── Select payment method (or add new)
  ├── Confirm → payment processed
  └── Success → balance updated, redirect to Credit Balance
```

### Register Domain
```
Dashboard → Domains → Register (button)
  ├── Search domain name
  ├── Results: available TLDs + pricing
  ├── Select TLD + duration
  ├── Configure: nameservers, WHOIS privacy
  ├── Add to cart → Checkout → Payment
  └── Domain registered → appears in Domains list
```

### Account Management
```
Dashboard → Profile → edit personal info → save
Dashboard → Security → change password / enable 2FA / manage sessions
Dashboard → Settings → language, currency, theme, notifications
```

---

## Design Rules

1. **System First** — Components before pages, always
2. **Consistency** — Same spacing (24px), same radius (12px cards), same patterns
3. **Skeleton Loading** — Clean minimal skeletons on every data view
4. **Responsive** — 3 breakpoints: desktop > 1024, tablet 768-1024, mobile < 768
5. **Clean Code** — Modular PHP includes, one component = one file
6. **No Overdesign** — Build what's needed, nothing extra
7. **Dark/Light** — Both themes tested on every page
8. **RTL Ready** — Arabic layout tested on every page
9. **Detail pages** — Use consistent tab + sidebar pattern
10. **Empty states** — Every list/table has a contextual empty state with CTA

---

## Notes

- All data is demo/hardcoded (no backend yet)
- Preview mode is ON (`PREVIEW_MODE = true`)
- Base path auto-detected for dev/production
- CSS versioned via `dash_asset()` with `DASHBOARD_VERSION`
- Detail pages use `?id=` query param pattern
- Auth pages use standalone layout (no sidebar/topbar)
- Server details page handles multiple server types via conditional tabs
