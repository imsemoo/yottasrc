# YottaSrc Translation System

## Overview

YottaSrc uses a **flat PHP array** translation system. Each language has its own `.php` file that returns a key-value array. A global helper function `__()` retrieves translated strings by key.

**Currently supported languages:** English (`en`), Arabic (`ar`)

---

## File Structure

```
/lang/
  en.php          ← English translations (front-end pages)
  ar.php          ← Arabic translations (front-end pages)

/dashboard/lang/
  en.php          ← English translations (dashboard)
  ar.php          ← Arabic translations (dashboard)

/includes/
  config.php      ← Language detection + loading
  functions.php   ← __() helper function

/dashboard/layouts/
  config.php      ← Dashboard language detection + loading
  functions.php   ← Dashboard __() helper function
```

The front-end and dashboard have **separate** language files and configs, but use the **same** system and conventions.

---

## How It Works

### 1. Language Detection (`config.php`)

```
Query string (?lang=ar) → Cookie → Default (en)
```

The language is detected on each request and stored in a cookie for 30 days.

### 2. Language File Loading

```php
$lang = require __DIR__ . '/../lang/' . $current_lang . '.php';
```

Falls back to `en.php` if the requested file doesn't exist.

### 3. Translation Helper

```php
// Basic usage
echo __('nav_hosting');
// Output: "Hosting" (en) or "الاستضافة" (ar)

// With placeholders
echo __('footer_copyright', ['year' => 2026, 'site_name' => 'YottaSrc']);
// Output: "© 2018 – 2026 YottaSrc. All rights reserved."

// With HTML escaping (recommended for user-facing output)
echo e(__('nav_hosting'));
```

### 4. Placeholder Syntax

Use `:name` in translation values:

```php
// In en.php:
'footer_copyright' => '© 2018 – :year :site_name. All rights reserved.',

// Usage:
__('footer_copyright', ['year' => date('Y'), 'site_name' => SITE_NAME])
```

### 5. HTML in Translations

Some values contain HTML (e.g. `<strong>` tags). For these, use `__()` directly without `e()`:

```php
// Contains <strong> tags — don't escape
echo __('promo_description');

// Plain text — escape it
echo e(__('nav_hosting'));
```

---

## How to Use in Templates

### Replace hardcoded text

**Before:**
```html
<h2>Why YottaSrc?</h2>
<p>We combine enterprise-grade infrastructure...</p>
```

**After:**
```php
<h2><?php echo e(__('why_title')); ?></h2>
<p><?php echo e(__('why_desc')); ?></p>
```

### Replace inline language conditionals

**Before:**
```php
<?php echo ($current_lang === 'ar') ? 'اللغة' : 'Language'; ?>
```

**After:**
```php
<?php echo e(__('nav_language')); ?>
```

### Attributes (aria-label, title, placeholder)

```php
<button aria-label="<?php echo e(__('nav_toggle_theme')); ?>">
<input placeholder="<?php echo e(__('om_domain_search_ph')); ?>">
```

---

## Adding New Translations

### Step 1: Add the key to `en.php`

```php
// In /lang/en.php
'page_new_key' => 'English text here',
```

### Step 2: Add the same key to `ar.php`

```php
// In /lang/ar.php
'page_new_key' => 'النص العربي هنا',
```

### Step 3: Use it in a template

```php
<?php echo e(__('page_new_key')); ?>
```

---

## Key Naming Convention

Keys use the format: `{section}_{identifier}`

| Prefix | Section |
|--------|---------|
| `nav_` | Navigation links and buttons |
| `hero_` | Homepage hero section |
| `plans_` | Pricing/plans section |
| `tech_` | Technology stack section |
| `why_` | Why YottaSrc section |
| `global_` | Global infrastructure section |
| `proof_` | Social proof / testimonials |
| `footer_` | Footer content |
| `compare_` | Competitors comparison table |
| `cloudns_` | ClouDNS partnership section |
| `mailchannels_` | MailChannels partnership section |
| `dc_` | Datacenter showcase section |
| `country_` | Country names |
| `om_` | Order modal |
| `feature_` | Plan feature list items |
| `spec_` | Plan spec labels |
| `services_` | Services selector |
| `promo_` | Promo bar |
| `cta_` | Call-to-action sections |
| `meta_` | SEO meta tags |

---

## Adding a New Language

1. Copy `en.php` to `{code}.php` (e.g. `fr.php`)
2. Translate all values (keep keys identical)
3. Add the language code to `$supported_languages` in both:
   - `/includes/config.php`
   - `/dashboard/layouts/config.php`
4. Add the language option to the switcher in `/includes/header.php`:
   ```php
   $lang_options = [
       'en' => ['flag' => 'gb', 'label' => __('lang_en')],
       'ar' => ['flag' => 'sa', 'label' => __('lang_ar')],
       'fr' => ['flag' => 'fr', 'label' => __('lang_fr')],  // new
   ];
   ```
5. Add the `lang_fr` key to all language files

---

## Best Practices

1. **Never duplicate keys** — search for existing keys before creating new ones
2. **Use `e()` for plain text** — only skip it when the value intentionally contains HTML
3. **Keep keys descriptive** — `plans_target_starter` not `pt1`
4. **Keep en.php and ar.php in sync** — every key in `en.php` must exist in `ar.php`
5. **Use placeholders for dynamic content** — don't concatenate strings
6. **Don't translate** brand names (YottaSrc, cPanel, LiteSpeed), technical terms (NVMe, KVM), or URLs

---

## Notes for Backend Team

- The `$lang` array is a **global variable** loaded once in `config.php`
- The `__()` function is defined in `functions.php` and available everywhere after config loads
- RTL direction is handled automatically via `$text_direction` variable
- Currency names are stored in `config.php` as `name_en` / `name_ar` (not in the lang files)
- The system does **not** use any framework — it's pure PHP, easy to integrate with any backend
- If migrating to a framework later, replace `__()` with the framework's translation function
- Dashboard and front-end have **separate** language files — changes to one don't affect the other
