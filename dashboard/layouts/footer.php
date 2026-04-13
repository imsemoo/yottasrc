<?php
/**
 * YottaSrc Dashboard — Footer
 * Closes shell, loads scripts.
 */
?>

<!-- Search Overlay (Ctrl+K) -->
<div class="db-search-overlay" id="searchOverlay">
    <div class="db-search-modal">
        <div class="db-search-input-wrap">
            <i class="fas fa-magnifying-glass"></i>
            <input type="text" class="db-search-input" id="searchInput" placeholder="<?php echo e(__('topbar_search')); ?>" autocomplete="off">
            <kbd class="db-search-input-esc">ESC</kbd>
        </div>
        <div class="db-search-body" id="searchBody">
            <div class="db-search-empty"><?php echo e(__('topbar_search_hint')); ?></div>
        </div>
    </div>
</div>

    </div><!-- /.db-main -->
</div><!-- /.db-shell -->

<!-- Dashboard JavaScript -->
<script src="<?php echo dash_asset('js/dashboard.js'); ?>"></script>
<?php if (isset($page_js)): ?>
<script src="<?php echo dash_asset('js/' . $page_js); ?>"></script>
<?php endif; ?>
</body>

</html>
