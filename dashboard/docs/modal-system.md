# Modal System
> How to use modals in the dashboard.

---

## Overview

The modal system is built into `dashboard.js` and exposed globally as `DashModal`.

- No external dependencies
- Supports ESC to close, overlay click to close, body scroll lock
- Animated entry/exit

---

## Quick Usage

### 1. Create the modal HTML

Use the PHP component pair (`modal.php` + `modal-end.php`):

```php
<?php
$modal_id = 'myModal';           // unique ID
$modal_title = 'Confirm Action';  // header title
$modal_size = 'sm';               // '' (480px), 'sm' (380px), 'lg' (640px)
include __DIR__ . '/../../components/modal.php';
?>

<!-- Your content here -->
<p>Are you sure?</p>

<?php
$modal_footer = '
    <button class="db-btn db-btn--secondary" data-modal-close>Cancel</button>
    <button class="db-btn db-btn--primary" onclick="doSomething()">Confirm</button>';
include __DIR__ . '/../../components/modal-end.php';
?>
```

### 2. Open the modal

**Option A — JavaScript:**
```javascript
DashModal.open('myModal');
```

**Option B — HTML attribute:**
```html
<button data-modal-open="myModal">Open</button>
```

**Option C — Inline onclick:**
```html
<button onclick="DashModal.open('myModal')">Open</button>
```

### 3. Close the modal

**From a button inside the modal:**
```html
<button data-modal-close>Cancel</button>
```

**From JavaScript:**
```javascript
DashModal.close(overlayElement);
```

**Automatic triggers:**
- Press `ESC` key
- Click the overlay background
- Click the `×` close button in header

---

## HTML Structure

```html
<div class="db-modal-overlay" id="myModal">
    <div class="db-modal db-modal--sm">
        <div class="db-modal-header">
            <h3 class="db-modal-title">Title</h3>
            <button class="db-modal-close" data-modal-close>
                <i class="fas fa-xmark"></i>
            </button>
        </div>
        <div class="db-modal-body">
            <!-- content -->
        </div>
        <div class="db-modal-footer">
            <!-- buttons -->
        </div>
    </div>
</div>
```

---

## Sizes

| Class | Max Width |
|-------|-----------|
| (default) | 480px |
| `.db-modal--sm` | 380px |
| `.db-modal--lg` | 640px |

---

## Confirm Dialog Pattern

For simple yes/no confirmations:

```php
<?php
$modal_id = 'confirmDelete';
$modal_title = 'Delete Item';
$modal_size = 'sm';
include 'components/modal.php';
?>
<div class="db-confirm-body">
    <div class="db-modal-icon db-modal-icon--danger">
        <i class="fas fa-trash-can"></i>
    </div>
    <p>Are you sure you want to delete this item?</p>
</div>
<?php
$modal_footer = '
    <button class="db-btn db-btn--secondary" data-modal-close>Cancel</button>
    <button class="db-btn db-btn--danger"
        onclick="DashModal.close(this.closest(\'.db-modal-overlay\'));
                 DashToast.show(\'success\', \'\', \'Item deleted.\');">
        Delete
    </button>';
include 'components/modal-end.php';
?>
```

---

## Icon Variants

| Class | Color |
|-------|-------|
| `.db-modal-icon--danger` | Red background |
| `.db-modal-icon--success` | Green background |

---

## JavaScript API

```javascript
// Open by ID
DashModal.open('myModal');

// Close specific overlay
DashModal.close(document.getElementById('myModal'));

// The system auto-initializes on DOMContentLoaded
// It registers: data-modal-close buttons, overlay clicks, ESC key
```

---

## Integration with Toast

Common pattern — close modal then show toast:

```javascript
onclick="DashModal.close(this.closest('.db-modal-overlay'));
         DashToast.show('success', '', 'Action completed.');"
```

---

## Notes

- Modals use `position: fixed` with `z-index: 1000`
- Body scroll is locked when a modal is open (`overflow: hidden`)
- On mobile (< 768px), modals slide up from bottom (sheet style)
- All modal HTML should be placed **outside** the main content flow (before `footer.php`)
