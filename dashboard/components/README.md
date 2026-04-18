# Dashboard Components — Reference

This folder contains shared PHP partials used across the dashboard
pages. Each partial is a small reusable block (empty state, modal,
pagination, …) that consumes a handful of PHP variables you set
**before** `include`-ing it.

The pattern is always:

```php
<?php
$some_var      = '…';
$another_var   = '…';
include __DIR__ . '/components/<partial>.php';
```

After including a partial, the variables are still defined — reset
or `unset()` them if you plan to include the partial again with
different values in the same request.

---

## Quick index

| Partial | What it renders | Key inputs |
|---|---|---|
| [`page-header.php`](page-header.php) | Page title + subtitle + action row | `$ph_title`, `$ph_desc`, `$ph_actions` |
| [`modal.php`](modal.php) + [`modal-end.php`](modal-end.php) | Modal shell (open + close tags) | `$modal_id`, `$modal_title`, `$modal_size`, `$modal_footer` |
| [`confirm-body.php`](confirm-body.php) | Body of a delete/confirm modal | `$cb_desc`, `$cb_target_*`, `$cb_warn`, `$cb_variant` |
| [`empty-state.php`](empty-state.php) | Full-page "nothing here" panel | `$es_icon`, `$es_title`, `$es_desc`, `$es_action` |
| [`table-empty.php`](table-empty.php) | `<tr>` shown inside a table when filter returns zero rows | `$te_colspan`, `$te_text` |
| [`pagination.php`](pagination.php) | Pagination bar (with ellipsis + prev/next) | `$pg_current`, `$pg_total`, `$pg_from`, `$pg_to`, `$pg_total_rows` |
| [`error-state.php`](error-state.php) | "Failed to load" retry card | `$error_retry` |
| [`alert.php`](alert.php) | Inline alert banner (info / warning / danger) | `$alert_type`, `$alert_msg` |
| [`account-tabs.php`](account-tabs.php) | Shared tab bar for Profile/Security/Settings | `$account_tab` |
| [`project-pro-hero.php`](project-pro-hero.php) | Seeded hero for Cloud Project pages | `$hero_eyebrow`, `$hero_title`, `$hero_sub`, `$hero_stats`, `$hero_actions` |
| [`verification-banner.php`](verification-banner.php) | "Verify your account" banner | `$is_verified` |
| [`skeleton-detail.php`](skeleton-detail.php) | Loading skeleton for detail pages | `$skel_info_rows`, `$skel_action_buttons` |
| [`skeleton-table.php`](skeleton-table.php) | Loading skeleton for table pages | `$skel_rows`, `$skel_cols`, `$skel_has_filters` |
| [`skeleton-stats.php`](skeleton-stats.php) | Loading skeleton for stat-card rows | `$skel_count` |
| [`phone-countries.php`](phone-countries.php) | Data array of ISO phone codes | (data only — no render) |

---

## Partials in detail

### page-header.php

Renders the hero above every page body (gradient ambient bg, display
title, optional subtitle + eyebrow, and an action row on the right).

```php
$ph_title   = __('invoices_title');
$ph_desc    = __('invoices_desc');
$ph_eyebrow = __('nav_billing');          // optional — small label above title
$ph_icon    = 'fa-file-invoice';          // optional — icon for the eyebrow
$ph_actions = '<a href="..." class="db-btn db-btn--primary">+ New</a>';
include __DIR__ . '/components/page-header.php';
```

---

### modal.php + modal-end.php

Two paired partials. `modal.php` opens the modal shell, then you
write the body, then `modal-end.php` closes it and optionally renders
the footer.

```php
$modal_id    = 'deleteServerModal';
$modal_title = __('srvd_delete_modal_title');
$modal_size  = 'sm';                      // 'sm' | '' (default md) | 'lg'
include __DIR__ . '/components/modal.php';
?>

  <!-- modal body goes here -->
  <p>Are you sure?</p>

<?php
$modal_footer = '<button class="db-btn db-btn--secondary" data-modal-close>Cancel</button>
                 <button class="db-btn db-btn--danger">Delete</button>';
include __DIR__ . '/components/modal-end.php';
```

---

### confirm-body.php

Body markup for delete/confirm dialogs. Use this inside a modal
instead of rolling your own markup so every confirm dialog shares
icon + layout.

```php
$cb_desc         = __('dom_delete_confirm_desc');
$cb_target_label = __('dom_tab_overview');
$cb_target_value = $domain['name'];
$cb_warn         = __('dom_delete_warn');         // optional
$cb_icon         = 'fa-triangle-exclamation';     // default, override if needed
$cb_variant      = 'danger';                      // 'danger'|'success'|'info'|'warning'
include __DIR__ . '/components/confirm-body.php';
```

---

### empty-state.php

Full-page "no items yet" panel. Wraps itself in `.db-card` by default.

```php
$es_icon   = 'fa-server';
$es_title  = __('services_empty_title');
$es_desc   = __('services_empty_desc');
$es_action = '<a href="..." class="db-btn db-btn--primary">+ Order</a>';
$es_variant = 'services';                 // 'services' (default) | 'cloud' | 'domains'
$es_compact = false;                      // true = tighter padding (for card sub-sections)
$es_no_wrap = false;                      // true = skip the outer .db-card
include __DIR__ . '/components/empty-state.php';
```

---

### table-empty.php

Renders a single `<tr>` inside a `<tbody>` when a filter returns zero
rows. Goes AFTER your normal `foreach` loop.

```php
<tbody>
  <?php foreach ($rows as $r): ?>
    <tr> … </tr>
  <?php endforeach; ?>

  <?php
  $te_colspan = 6;
  $te_text    = __('services_empty_search');
  $te_icon    = 'fa-magnifying-glass';    // default
  include __DIR__ . '/components/table-empty.php';
  ?>
</tbody>
```

---

### pagination.php

Professional pagination bar with ellipsis windowing and full a11y.

```php
$pg_current    = 2;
$pg_total      = 12;
$pg_from       = 11;
$pg_to         = 20;
$pg_total_rows = 235;
$pg_window     = 1;                        // sibling pages around current
$pg_page_url   = function ($p) { return '?page=' . $p; };  // optional
include __DIR__ . '/components/pagination.php';
```

The partial early-returns when `$pg_total <= 1` AND no `$pg_total_rows`
is set — so it's safe to include unconditionally.

Algorithm example outputs:

| current / total | rendered |
|---|---|
| 7 / 12 | `1 … 6 7 8 … 12` |
| 2 / 12 | `1 2 3 … 12` |
| 11 / 12 | `1 … 10 11 12` |
| 2 / 3   | `1 2 3` (no ellipsis) |

---

### error-state.php

Red/amber retry card, used in every page's `elseif ($page_state === 'error')`
branch.

```php
$error_retry = true;                       // shows the "Retry" button
include __DIR__ . '/components/error-state.php';
```

---

### alert.php

Inline notice banner for flash messages / warnings / errors at the
top of a page or card body.

```php
$alert_type = 'warning';                   // 'info' | 'warning' | 'danger' | 'success'
$alert_msg  = __('billing_low_balance');
include __DIR__ . '/components/alert.php';
```

---

### account-tabs.php

Shared tab bar across Profile / Security / Settings. Highlights the
current tab based on `$account_tab`.

```php
$account_tab = 'profile';                  // 'profile' | 'security' | 'settings'
include __DIR__ . '/components/account-tabs.php';
```

---

### project-pro-hero.php

The seeded, premium hero used on Cloud project pages (Servers,
Network, API). Pass stats and actions as pre-rendered HTML.

```php
$hero_eyebrow = __('project_pro_eyebrow_servers');
$hero_title   = $current_project['name'];
$hero_sub     = __('project_pro_sub_servers');
$hero_stats   = [
    ['icon' => 'fa-server',       'label' => __('…'), 'value' => 3, 'seed' => 0],
    ['icon' => 'fa-circle-check', 'label' => __('…'), 'value' => 2, 'seed' => 1],
];
$hero_actions = '<a href="…" class="ds-btn ds-btn--primary">+ New</a>';
include __DIR__ . '/components/project-pro-hero.php';
unset($hero_eyebrow, $hero_title, $hero_sub, $hero_stats, $hero_actions);
```

---

### verification-banner.php

Renders a "Please verify your account" banner above page content
when the user hasn't verified KYC. No-op when `$is_verified === true`.

```php
$is_verified = $user_kyc_status === 'verified';
include __DIR__ . '/components/verification-banner.php';
```

---

### skeleton-detail.php / skeleton-table.php / skeleton-stats.php

Loading placeholders. Used in each page's `elseif ($page_state === 'loading')`
branch to show gray boxes while data is fetched.

```php
// Detail page
$skel_info_rows      = 5;
$skel_action_buttons = 3;
include __DIR__ . '/components/skeleton-detail.php';

// Table page
$skel_rows         = 8;
$skel_cols         = 6;
$skel_has_filters  = true;
$skel_has_icon     = false;
include __DIR__ . '/components/skeleton-table.php';

// Stats-cards row
$skel_count = 4;
include __DIR__ . '/components/skeleton-stats.php';
```

---

### phone-countries.php

Not a render partial — just a `$phone_countries` array of
`[iso_code, name, dial_code, flag_emoji]` tuples. `require_once` it
wherever you need to render a country picker.

---

## How pages use these

Every page follows the same outline:

```php
<?php
// 1. Bootstrap (config, shell, etc.)
require_once __DIR__ . '/../../layouts/config.php';
require_once __DIR__ . '/../../layouts/shell.php';

// 2. MOCK DATA BLOCK — described in each page's top comment.
$stats = [...];
$rows  = [...];

// 3. Page header
$ph_title = __('…');
include __DIR__ . '/../../components/page-header.php';

// 4. Branch on $page_state
if ($page_state === 'error') {
    $error_retry = true;
    include __DIR__ . '/../../components/error-state.php';
} elseif ($page_state === 'loading') {
    include __DIR__ . '/../../components/skeleton-table.php';
} elseif ($page_state === 'empty') {
    $es_icon  = 'fa-…';
    $es_title = __('…');
    include __DIR__ . '/../../components/empty-state.php';
} else {
    // 5. Regular content
    // …table rows, cards, etc…
    include __DIR__ . '/../../components/pagination.php';
}
?>
```

The `MOCK DATA BLOCK` comment in each page describes the array
shapes the HTML expects — replace those arrays with DB queries
and the UI keeps working unchanged.
