<?php
/**
 * Error Page — Shared Layout
 * ==========================
 * All error pages include this file after setting their config variables.
 *
 * Required:
 *   $error_icon    — Font Awesome class (e.g. 'fa-compass')
 *   $error_code    — HTTP status code (e.g. '404') or '' to hide
 *   $error_badge   — Badge label (e.g. 'PAGE NOT FOUND')
 *   $error_title   — Page heading
 *   $error_desc    — Description paragraph
 *
 * Optional:
 *   $error_variant       — CSS modifier: '' (blue), 'danger' (red), 'warning' (amber)
 *   $error_secondary     — ['url' => '...', 'icon' => 'fa-...', 'label' => '...']
 *   $error_links         — [['url' => '...', 'icon' => 'fa-...', 'label' => '...'], ...]
 *   $error_links_label   — Label above links grid (e.g. 'Popular destinations')
 *   $error_ref           — Reference code string (shown in meta line)
 */

// Defaults
$error_variant     = $error_variant     ?? '';
$error_secondary   = $error_secondary   ?? null;
$error_links       = $error_links       ?? [];
$error_links_label = $error_links_label ?? 'Helpful links';
$error_ref         = $error_ref         ?? '';

$variant_class = $error_variant ? ' error-page--' . $error_variant : '';

require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/header.php';
?>

<div class="error-page<?php echo $variant_class; ?>">
    <div class="error-card">

        <!-- Icon -->
        <div class="error-icon">
            <i class="fas <?php echo e($error_icon); ?>"></i>
        </div>

        <!-- Badge -->
        <div class="error-badge">
            <i class="fas fa-circle"></i>
            <?php echo e($error_badge); ?>
        </div>

        <!-- Code -->
        <?php if ($error_code !== ''): ?>
            <div class="error-code"><span><?php echo e($error_code); ?></span></div>
        <?php endif; ?>

        <!-- Title & Description -->
        <h1 class="error-title"><?php echo e($error_title); ?></h1>
        <p class="error-desc"><?php echo e($error_desc); ?></p>

        <!-- Actions -->
        <div class="error-actions">
            <a href="<?php echo e(SITE_URL); ?>/" class="error-btn error-btn-primary">
                <i class="fas fa-home"></i> Back to Home
            </a>
            <?php if ($error_secondary): ?>
                <a href="<?php echo e($error_secondary['url']); ?>" class="error-btn error-btn-ghost"<?php echo (str_starts_with($error_secondary['url'], 'http') && !str_contains($error_secondary['url'], parse_url(SITE_URL, PHP_URL_HOST))) ? ' target="_blank" rel="noopener"' : ''; ?>>
                    <i class="fas <?php echo e($error_secondary['icon']); ?>"></i>
                    <?php echo e($error_secondary['label']); ?>
                </a>
            <?php endif; ?>
        </div>

        <!-- Helper Links -->
        <?php if (!empty($error_links)): ?>
            <div class="error-links">
                <div class="error-links-label"><?php echo e($error_links_label); ?></div>
                <div class="error-links-grid">
                    <?php foreach ($error_links as $link): ?>
                        <a href="<?php echo e($link['url']); ?>" class="error-link"<?php echo (str_starts_with($link['url'], 'http') && !str_contains($link['url'], parse_url(SITE_URL, PHP_URL_HOST))) ? ' target="_blank" rel="noopener"' : ''; ?>>
                            <i class="<?php echo e($link['icon']); ?>"></i>
                            <?php echo e($link['label']); ?>
                        </a>
                    <?php endforeach; ?>
                </div>

                <?php if ($error_ref): ?>
                    <div class="error-meta">
                        Error reference: <code><?php echo e($error_ref); ?></code>
                    </div>
                <?php endif; ?>
            </div>
        <?php endif; ?>

    </div>
</div>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
