<?php
/**
 * What's New — slide-in side panel
 * ==================================
 * Compact view of the latest releases. Opened from the user dropdown
 * ("New Features") or from anywhere via `DashWhatsNew.open()`.
 *
 * Included once in layouts/footer.php.
 */
require_once __DIR__ . '/changelog-data.php';

// Only show the 3 most recent entries in the panel — enough to scan.
$panel_entries = array_slice($changelog ?? [], 0, 3);
?>
<div class="db-whatsnew-overlay" id="whatsnewOverlay" aria-hidden="true">
    <aside class="db-whatsnew-panel" id="whatsnewPanel" role="dialog" aria-labelledby="whatsnewTitle">
        <header class="db-whatsnew-panel__head">
            <div class="db-whatsnew-panel__title-wrap">
                <span class="db-whatsnew-panel__icon"><i class="fas fa-wand-magic-sparkles"></i></span>
                <h2 id="whatsnewTitle" class="db-whatsnew-panel__title"><?php echo e(__('nav_whatsnew')); ?></h2>
            </div>
            <button class="db-whatsnew-panel__close" data-whatsnew-close aria-label="<?php echo e(__('common_close')); ?>">
                <i class="fas fa-xmark"></i>
            </button>
        </header>

        <div class="db-whatsnew-panel__body db-scroll-themed">
            <?php foreach ($panel_entries as $index => $release):
                $t = strtotime($release['date']);
                $is_first = ($index === 0);
            ?>
            <article class="db-whatsnew-entry<?php echo $is_first ? ' db-whatsnew-entry--latest' : ''; ?>">
                <div class="db-whatsnew-entry__meta">
                    <span class="db-whatsnew-entry__date"><?php echo e(date('j M Y', $t)); ?></span>
                    <span class="db-whatsnew-entry__version">v<?php echo e($release['version']); ?></span>
                    <?php if ($release['channel'] === 'beta'): ?>
                    <span class="db-badge db-badge--pending db-badge--inline">Beta</span>
                    <?php elseif ($is_first): ?>
                    <span class="db-badge db-badge--active db-badge--inline"><?php echo e(__('changelog_latest_badge')); ?></span>
                    <?php endif; ?>
                </div>

                <?php if (!empty($release['highlight'])): ?>
                <p class="db-whatsnew-entry__highlight"><?php echo e($release['highlight']); ?></p>
                <?php endif; ?>

                <?php
                $section_meta = [
                    'new_features' => ['label' => __('changelog_section_new_features'), 'color' => 'primary'],
                    'improvements' => ['label' => __('changelog_section_improvements'), 'color' => 'accent'],
                    'bug_fixes'    => ['label' => __('changelog_section_bug_fixes'),    'color' => 'secondary'],
                ];
                foreach ($section_meta as $key => $meta):
                    if (empty($release['sections'][$key])) continue;
                    $items = $release['sections'][$key];
                ?>
                <div class="db-whatsnew-section">
                    <h4 class="db-whatsnew-section__label db-whatsnew-section__label--<?php echo e($meta['color']); ?>">
                        <?php echo e($meta['label']); ?>
                    </h4>
                    <ul class="db-whatsnew-section__list">
                        <?php foreach ($items as $item):
                            if (is_array($item)): ?>
                            <li><strong><?php echo e($item['title']); ?>:</strong> <?php echo e($item['desc']); ?></li>
                        <?php else: ?>
                            <li><?php echo e($item); ?></li>
                        <?php endif; endforeach; ?>
                    </ul>
                </div>
                <?php endforeach; ?>
            </article>
            <?php endforeach; ?>
        </div>

        <footer class="db-whatsnew-panel__foot">
            <a href="<?php echo e(DASH_BASE_PATH); ?>/pages/changelog/index.php" class="db-btn db-btn--secondary db-btn--full" id="whatsnewViewAll">
                <i class="fas fa-list-ul"></i> <?php echo e(__('whatsnew_view_all')); ?>
            </a>
        </footer>
    </aside>
</div>

<script>
(function () {
    var overlay = document.getElementById('whatsnewOverlay');
    var panel   = document.getElementById('whatsnewPanel');
    if (!overlay || !panel) return;

    function open() {
        // Close any topbar dropdown sitting behind the panel before we open it
        document.querySelectorAll('.db-topbar-user.open, .db-switcher-dropdown.open, .db-notif-dropdown.open')
            .forEach(function (el) { el.classList.remove('open'); });
        overlay.classList.add('is-active');
        overlay.setAttribute('aria-hidden', 'false');
        document.body.style.overflow = 'hidden';
    }
    function close() {
        overlay.classList.remove('is-active');
        overlay.setAttribute('aria-hidden', 'true');
        document.body.style.overflow = '';
    }

    // Trigger: anything with data-whatsnew-open
    document.addEventListener('click', function (e) {
        var opener = e.target.closest('[data-whatsnew-open]');
        if (opener) {
            e.preventDefault();
            e.stopPropagation();
            open();
            return;
        }
        var closer = e.target.closest('[data-whatsnew-close]');
        if (closer) {
            e.preventDefault();
            close();
        }
    });

    // Defensive wiring: the "View full changelog" link sometimes swallows
    // clicks on browsers where parent stacking contexts interact badly with
    // the sliding-in overlay. Force-navigate on click as a fallback.
    var viewAll = document.getElementById('whatsnewViewAll');
    if (viewAll) {
        viewAll.addEventListener('click', function (e) {
            var href = viewAll.getAttribute('href');
            if (!href) return;
            e.stopPropagation();
            // let the <a> navigate naturally; we just make sure nothing above
            // us called preventDefault before we got here
            if (e.defaultPrevented) {
                window.location.href = href;
            }
        });
    }

    // Click on backdrop to close
    overlay.addEventListener('click', function (e) {
        if (e.target === overlay) close();
    });

    // ESC to close
    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape' && overlay.classList.contains('is-active')) close();
    });

    window.DashWhatsNew = { open: open, close: close };
})();
</script>
