# Skeleton Loading System
> For backend developers integrating with the dashboard.

---

## How It Works

Every page supports 4 states controlled by a `$page_state` variable:

| State | Value | What Renders |
|-------|-------|-------------|
| Active | `'active'` | Real data (default) |
| Loading | `'loading'` | Skeleton placeholders |
| Empty | `'empty'` | Empty state illustration + CTA |
| Error | `'error'` | Error message + retry button |

### Current Implementation (Demo)

Right now, state is set via query parameter for testing:

```php
$page_state = $_GET['state'] ?? 'active';
```

**Test URLs:**
```
/pages/services/index.php              → active (real data)
/pages/services/index.php?state=loading → skeleton
/pages/services/index.php?state=empty   → empty state
/pages/services/index.php?state=error   → error state
```

---

## Backend Integration

When you connect the backend, replace the demo `$page_state` logic with your actual data fetching:

### Option 1: Server-Side Rendering (Recommended)

```php
// Replace this:
$page_state = $_GET['state'] ?? 'active';

// With this:
try {
    $services = $api->getServices();

    if (empty($services)) {
        $page_state = 'empty';
    } else {
        $page_state = 'active';
    }
} catch (Exception $e) {
    $page_state = 'error';
    $error_message = $e->getMessage();
}
```

The skeleton state (`loading`) is not needed server-side because the page loads with data. Use it only if you implement AJAX/fetch loading (see Option 2).

### Option 2: Client-Side Loading (AJAX)

If you load data via JavaScript after page load:

**Step 1:** Default the page to loading state:
```php
$page_state = 'loading';
```

**Step 2:** JavaScript fetches data and swaps the content:
```javascript
// Page loads with skeleton visible
fetch('/api/services')
    .then(res => res.json())
    .then(data => {
        if (data.length === 0) {
            showState('empty');
        } else {
            renderTable(data);
            showState('active');
        }
    })
    .catch(() => {
        showState('error');
    });
```

---

## Page Structure Pattern

Every page follows this pattern:

```php
<?php
// 1. Config + shell
require_once __DIR__ . '/../../layouts/config.php';
require_once __DIR__ . '/../../layouts/shell.php';

// 2. Determine state
$page_state = 'active'; // ← replace with your logic

// 3. Page header (always renders)
$ph_title = __('services_title');
$ph_desc = __('services_desc');
include __DIR__ . '/../../components/page-header.php';

// 4. State branching
if ($page_state === 'error'): ?>
    <div class="db-card">
        <?php $error_retry = true; include 'components/error-state.php'; ?>
    </div>

<?php elseif ($page_state === 'loading'): ?>
    <?php include 'components/skeleton-stats.php'; ?>
    <?php include 'components/skeleton-table.php'; ?>

<?php elseif ($page_state === 'empty'): ?>
    <!-- Empty state with CTA -->

<?php else: ?>
    <!-- Real content with $data -->

<?php endif; ?>
<?php require_once 'layouts/footer.php'; ?>
```

**Key rule:** The `if/elseif/else` ensures only ONE state renders. No duplicate DOM.

---

## Reusable Skeleton Components

Located in `/components/`:

### skeleton-stats.php
Renders a row of stat card placeholders.

```php
$skel_stat_count = 4;  // number of cards (default: 4)
include 'components/skeleton-stats.php';
```

Output: 4 cards in a grid, each with an icon placeholder + text lines.

### skeleton-table.php
Renders a full table card with optional filters and rows.

```php
$skel_rows = 6;            // number of rows (default: 6)
$skel_cols = 4;            // columns per row (default: 4)
$skel_has_icon = true;     // first column has icon square (default: false)
$skel_has_filters = true;  // show search + filter bar (default: true)
include 'components/skeleton-table.php';
```

Output: A `.db-card` containing filter bar skeleton + N table rows.

### skeleton-detail.php
Renders a detail page layout (content + sidebar).

```php
$skel_info_rows = 6;       // info key-value rows (default: 6)
$skel_action_buttons = 4;  // sidebar action buttons (default: 4)
include 'components/skeleton-detail.php';
```

Output: 2-column `.db-detail-layout` with tab skeleton + info rows on left, action buttons on right.

---

## CSS Classes Reference

| Class | What It Does |
|-------|-------------|
| `.db-skeleton` | Base class — adds background color + pulse animation |
| `.db-skeleton--text` | Text line (14px height, 80% width) |
| `.db-skeleton--text-sm` | Small text (11px height, 60% width) |
| `.db-skeleton--heading` | Heading (22px height, 45% width) |
| `.db-skeleton--avatar` | Circle (40x40) |
| `.db-skeleton--badge` | Pill shape (22px height, 64px width) |
| `.db-skeleton--button` | Button shape (36px height, 100px width) |
| `.db-skeleton--card` | Full card (120px height) |

### Width Override
All skeleton elements accept inline `style="width: X%"` to vary widths:

```html
<div class="db-skeleton db-skeleton--text" style="width: 45%;"></div>
```

### Container Classes
| Class | What It Does |
|-------|-------------|
| `.db-skeleton-table-row` | Flex row mimicking a table row (padding + border) |
| `.db-skeleton-stat-card` | Mimics a stat summary card |
| `.db-skeleton-form-row` | 2-column grid for form fields |
| `.db-skeleton-form-group` | Label + input skeleton pair |
| `.db-skeleton-session` | Mimics a session list item |
| `.db-skeleton-setting` | Mimics a settings row |

---

## Pulse Animation

The skeleton uses a CSS keyframe animation:

```css
@keyframes db-skeleton-pulse {
    0%, 100% { opacity: 0.4; }
    50% { opacity: 0.8; }
}
```

- Duration: **1.8s** (slow, calm)
- Respects `prefers-reduced-motion` — disables animation for accessibility

---

## Which Pages Support Which States

| Page | loading | empty | error | active |
|------|---------|-------|-------|--------|
| services/index.php | skeleton-stats + skeleton-table | stats(0) + empty illustration | error-state | stats + table |
| services/order.php | tab + card skeletons | — | error-state | tabs + plan cards |
| services/service-details.php | skeleton-detail | — | error-state | tabs + info + sidebar |
| billing/invoices.php | skeleton-stats + skeleton-table | stats(0) + empty illustration | error-state | stats + table |
| billing/invoice-details.php | skeleton-detail | — | error-state | line items + sidebar |
| billing/transactions.php | skeleton-table | empty illustration | error-state | table |
| billing/credit-balance.php | balance skeleton + skeleton-table | balance(0) + empty | error-state | balance + table |
| billing/payment-methods.php | card skeletons | empty illustration | error-state | card list |
| billing/add-funds.php | form + summary skeletons | — | error-state | amount + methods + summary |
| profile/index.php | avatar + form skeletons | — | error-state | avatar + forms |
| profile/security.php | form + session skeletons | — | error-state | password + 2FA + sessions |
| profile/settings.php | setting row skeletons | — | error-state | preferences + toggles |

---

## Quick Checklist for New Pages

When building a new page:

1. Add `$page_state` variable after loading config
2. Add `if/elseif/else` branching with all 4 states
3. Use reusable skeleton components where possible
4. For custom layouts, build inline skeletons matching the real content structure
5. Ensure zero real data renders in loading/error/empty states
6. Test with `?state=loading`, `?state=empty`, `?state=error`
