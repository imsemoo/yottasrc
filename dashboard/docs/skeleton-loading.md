# Skeleton Loading
> How to show loading placeholders while the backend fetches data.

---

## Overview

Skeletons are greyed-out shapes that mimic the real UI while data is being fetched. They reduce perceived wait time and prevent layout shift when the real content arrives.

The dashboard ships **ten page-level skeleton partials** (for full-page loading states) plus a set of **primitive classes** (for inline bits inside a custom layout).

- No external dependencies, no JS required for the pulse animation
- Uses the same tokens as the rest of the UI, so dark/light themes work automatically

---

## When to use a skeleton

Show a skeleton **only when the delay is noticeable** (>300ms) and you know the shape of the content that's coming. Rule of thumb:

| Scenario | Use |
|---|---|
| Full page waiting on DB/API | Skeleton partial (pick the one whose shape matches) |
| Table/list with filter bar | `skeleton-table.php` |
| KPI stat cards row | `skeleton-stats.php` |
| Generic content + action sidebar | `skeleton-detail.php` |
| Wide banner with title + chips + actions (invoice, service hero) | `skeleton-hero.php` |
| Pill-shaped tab bar | `skeleton-tabs.php` |
| Responsive card grid (projects, catalog, product cards) | `skeleton-grid.php` |
| Wizard with stepper (verification, create-server) | `skeleton-stepper.php` |
| Support ticket chat thread | `skeleton-chat.php` |
| Changelog / release-notes timeline | `skeleton-timeline.php` |
| Detail page with tabs + action sidebar (service / invoice / ticket details) | `skeleton-two-col.php` |
| Instant response (<300ms) | No skeleton — just render |
| Unknown content shape | Use a spinner, not a skeleton |

---

## Pattern: `$page_state` switch

Every page in the dashboard already supports a `?state=` URL parameter for design-state previews:

```php
// Top of a page
$page_state = $_GET['state'] ?? 'active';
// Possible values: 'active' | 'loading' | 'error' | 'empty'
```

The backend wires this the same way — set `$page_state = 'loading'` while the data fetch is in flight, `'error'` on failure, `'empty'` when the query returns zero rows, or `'active'` with the real data. The template then branches:

```php
<?php if ($page_state === 'loading'): ?>
    <?php include __DIR__ . '/../components/skeleton-table.php'; ?>

<?php elseif ($page_state === 'error'): ?>
    <?php include __DIR__ . '/../components/error-state.php'; ?>

<?php elseif (empty($rows)): ?>
    <?php include __DIR__ . '/../components/empty-state.php'; ?>

<?php else: ?>
    <!-- real content -->
<?php endif; ?>
```

You can preview any state without touching code by appending `?state=loading` (or `error`, `empty`) to the URL.

---

## Page-level partials

### 1. `skeleton-table.php` — table with filter bar

Use for any list/table page (servers, invoices, tickets, etc).

```php
<?php
$skel_rows        = 6;      // number of placeholder rows (default 6)
$skel_cols        = 5;      // columns per row (max 5, default 4)
$skel_has_icon    = true;   // show a 34x34 icon square on the first column
$skel_has_filters = true;   // show a search+filter bar skeleton above the rows
include __DIR__ . '/../../components/skeleton-table.php';
?>
```

Produces a `.db-card` wrapping a filter-bar stub and N rows with varied widths.

### 2. `skeleton-stats.php` — KPI card row

Use for the stat card grids at the top of a page (Total Servers / Running / Stopped / etc).

```php
<?php
$skel_stat_count = 4;  // number of cards in the row (default 4)
include __DIR__ . '/../../components/skeleton-stats.php';
?>
```

Renders a `.db-stats-row` with N `.db-skeleton-stat-card` items, each showing an icon square + heading line + sub-text line.

### 3. `skeleton-detail.php` — generic content + sidebar

Quick two-column placeholder (tab stub + N info rows on the left, N buttons on the right). Use for simple detail screens. For richer detail pages with a real tab bar and sidebar info block, prefer `skeleton-two-col.php` below.

```php
<?php
$skel_info_rows      = 6;
$skel_action_buttons = 4;
include __DIR__ . '/../../components/skeleton-detail.php';
?>
```

### 4. `skeleton-hero.php` — banner strip

For pages whose active state opens with a prominent header bar (invoice-details hero, service Command Center hero, cloud mission control).

```php
<?php
$skel_hero_meta_chips = 3;   // chips under the title (status, due date, type…)
$skel_hero_actions    = 2;   // action-button placeholders on the right
include __DIR__ . '/../../components/skeleton-hero.php';
?>
```

### 5. `skeleton-tabs.php` — tab bar

Pill-shaped tab buttons. Matches `.db-tab-bar`, `.db-tabs`, `account-tabs`, `changelog-tabs`.

```php
<?php
$skel_tabs_count = 4;
include __DIR__ . '/../../components/skeleton-tabs.php';
?>
```

### 6. `skeleton-grid.php` — responsive card grid

For pages that lay out content as a gallery (cloud Projects, services catalog, order page product grids).

```php
<?php
$skel_grid_count  = 6;     // number of cards
$skel_grid_min    = 260;   // min width per card (px) — fed into auto-fill
$skel_grid_height = 180;   // each card min-height (px)
$skel_grid_rich   = true;  // include icon + title + meta bits inside each card
include __DIR__ . '/../../components/skeleton-grid.php';
?>
```

### 7. `skeleton-stepper.php` — wizard stepper + panel

For multi-step wizards (verification, cloud create-server).

```php
<?php
$skel_stepper_count   = 4;       // number of steps
$skel_stepper_current = 0;       // index of the visually active step
$skel_stepper_panel   = true;    // render the body panel placeholder too
$skel_stepper_rows    = 5;       // form rows inside the panel
include __DIR__ . '/../../components/skeleton-stepper.php';
?>
```

Renders a horizontal step indicator (circles + connector lines) above a tall form-panel placeholder.

### 8. `skeleton-chat.php` — ticket / chat thread

Reply-box on top + alternating left/right chat bubbles. Use inside `skeleton-two-col.php` via its `body_slot` option, or stand-alone for chat-only pages.

```php
<?php
$skel_chat_messages = 5;
include __DIR__ . '/../../components/skeleton-chat.php';
?>
```

### 9. `skeleton-timeline.php` — changelog timeline

Mirrors the `.db-changelog` entry shape (date bubble + vertical spine + release card with sections and bullet lists). Use on the Changelog page.

```php
<?php
$skel_timeline_entries = 4;
include __DIR__ . '/../../components/skeleton-timeline.php';
?>
```

### 10. `skeleton-two-col.php` — detail page (richer)

Replacement for `skeleton-detail.php` when the active page has a real tab bar + richer right sidebar. Used by service-details, invoice-details, ticket-details.

```php
<?php
$skel_tcol_tabs       = 6;   // tab placeholders on the left (set 0 to hide the tab bar)
$skel_tcol_rows       = 6;   // info/list rows under the tabs
$skel_tcol_side_btns  = 4;   // action buttons in the right sidebar (0 to hide the actions card)
$skel_tcol_side_info  = 4;   // info rows in the right sidebar

// Optional: swap the left body for a custom skeleton (e.g. the chat one)
$skel_tcol_body_slot = __DIR__ . '/../../components/skeleton-chat.php';
$skel_chat_messages  = 5;

include __DIR__ . '/../../components/skeleton-two-col.php';
?>
```

---

## Primitives (for custom layouts)

When none of the three partials fit, compose your own skeleton from the primitive classes. Each `.db-skeleton` element is a grey block with the shared pulse animation; the modifier classes give it sensible default dimensions.

| Class | Size | Typical use |
|---|---|---|
| `.db-skeleton` | — | Base. Always required. Pair with a modifier or set width/height inline. |
| `.db-skeleton--text` | ~14px tall, 80% wide | A line of body text |
| `.db-skeleton--text-sm` | ~11px tall, 60% wide | A small caption line |
| `.db-skeleton--heading` | ~22px tall, 45% wide | A heading/title line |
| `.db-skeleton--avatar` | 40x40 circle | A user avatar |
| `.db-skeleton--badge` | ~22x64 pill | A status badge |
| `.db-skeleton--button` | ~36x100 | A button |
| `.db-skeleton--image` | 16:9 block | An image/thumbnail |
| `.db-skeleton--card` | ~120px tall | A whole card placeholder |

### Inline example — mixed primitives

```html
<div class="db-card">
    <div class="db-card-body" style="display:flex; gap:16px; align-items:center;">
        <div class="db-skeleton db-skeleton--avatar"></div>
        <div style="flex:1; display:flex; flex-direction:column; gap:6px;">
            <div class="db-skeleton db-skeleton--heading"></div>
            <div class="db-skeleton db-skeleton--text"></div>
        </div>
        <div class="db-skeleton db-skeleton--button"></div>
    </div>
</div>
```

### Layout helpers

- `.db-skeleton-row` — gives a flex row with standard gap/padding, for composing row placeholders.
- `.db-skeleton-form-group` — label + input placeholder, vertically stacked.
- `.db-skeleton-form-row` — two form-groups side by side, stacks on mobile.

---

## Animation & accessibility

- The pulse uses the `db-skeleton-pulse` keyframe (1.8s ease-in-out, opacity 0.4 → 0.8 → 0.4). Defined once in `components.css` and reused by every `.db-skeleton`.
- Skeletons are **decorative** — do not announce them to screen readers. The surrounding page should set `aria-busy="true"` on the region being replaced so assistive tech knows content is loading:

```html
<main aria-busy="true">
    <?php include 'components/skeleton-table.php'; ?>
</main>
```

Flip `aria-busy` to `"false"` once real content is rendered.

---

## Swap to real content

Two common approaches depending on how the data is loaded:

### Server-render (PHP)

Branch on `$page_state` as shown in the *Pattern* section above. The browser never sees the skeleton — by the time the response arrives, `$page_state` is already `'active'`. Useful for graceful progressive enhancement when a downstream query is slow but still server-side.

### Client-render (AJAX)

Render the skeleton in the initial HTML. After `fetch()` resolves, replace the skeleton's wrapper `innerHTML` with the real markup. No framework needed:

```html
<div id="serversList">
    <?php include 'components/skeleton-table.php'; ?>
</div>

<script>
fetch('/api/cloud/servers')
    .then(function (r) { return r.text(); })
    .then(function (html) {
        var el = document.getElementById('serversList');
        el.innerHTML = html;
        el.setAttribute('aria-busy', 'false');
    });
</script>
```

The backend endpoint returns the same markup the `active` branch would have rendered — no client-side templating needed.

---

## Don'ts

- Don't leave a skeleton on screen for >5s — switch to an error state.
- Don't animate a skeleton that's already hidden (`display:none`) — browsers keep the animation running and waste CPU. Remove the element from the DOM instead.
- Don't build skeletons with `background-image: linear-gradient(...)` shimmer effects — the project uses a simpler opacity pulse by design.
- Don't use skeletons for actions the user just triggered (saving a form, deleting a row). Use a spinner on the button and disable it. Skeletons are for *initial* loads only.
