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
            <!-- Suggestions rendered by JS (see DashSearchSuggestions in dashboard.js) -->
        </div>
    </div>
</div>

<!-- Mock search suggestions (frontend-only; backend should replace with real index) -->
<script>
window.__dashSearchSuggestions = [
    { type: 'page',    icon: 'fas fa-table-cells',        label: '<?php echo e(__('nav_dashboard')); ?>',         href: '<?php echo e(DASH_BASE_PATH); ?>/' },
    { type: 'page',    icon: 'fas fa-server',             label: '<?php echo e(__('services_title')); ?>',       href: '<?php echo e(DASH_BASE_PATH); ?>/pages/services/index.php' },
    { type: 'page',    icon: 'fas fa-plus',               label: '<?php echo e(__('order_title')); ?>',         href: '<?php echo e(DASH_BASE_PATH); ?>/pages/services/order.php' },
    { type: 'page',    icon: 'fas fa-cloud',              label: '<?php echo e(__('nav_cloud_servers')); ?>',     href: '<?php echo e(DASH_BASE_PATH); ?>/pages/cloud/index.php' },
    { type: 'page',    icon: 'fas fa-globe',              label: '<?php echo e(__('nav_domains')); ?>',           href: '<?php echo e(DASH_BASE_PATH); ?>/pages/domains/index.php' },
    { type: 'page',    icon: 'fas fa-file-lines',         label: '<?php echo e(__('nav_invoices')); ?>',          href: '<?php echo e(DASH_BASE_PATH); ?>/pages/billing/invoices.php' },
    { type: 'page',    icon: 'fas fa-credit-card',        label: '<?php echo e(__('nav_payment_methods')); ?>',   href: '<?php echo e(DASH_BASE_PATH); ?>/pages/billing/payment-methods.php' },
    { type: 'page',    icon: 'fas fa-wallet',             label: '<?php echo e(__('nav_credit_balance')); ?>',    href: '<?php echo e(DASH_BASE_PATH); ?>/pages/billing/credit-balance.php' },
    { type: 'page',    icon: 'fas fa-arrow-right-arrow-left', label: '<?php echo e(__('txn_total_count')); ?>',  href: '<?php echo e(DASH_BASE_PATH); ?>/pages/billing/transactions.php' },
    { type: 'page',    icon: 'fas fa-circle-plus',        label: '<?php echo e(__('nav_add_funds')); ?>',         href: '<?php echo e(DASH_BASE_PATH); ?>/pages/billing/add-funds.php' },
    { type: 'page',    icon: 'fas fa-handshake-angle',    label: '<?php echo e(__('aff_title')); ?>',        href: '<?php echo e(DASH_BASE_PATH); ?>/pages/affiliates/index.php' },
    { type: 'page',    icon: 'fas fa-message',            label: '<?php echo e(__('nav_tickets')); ?>',           href: '<?php echo e(DASH_BASE_PATH); ?>/pages/support/index.php' },
    { type: 'page',    icon: 'fas fa-plus',               label: '<?php echo e(__('nav_new_ticket')); ?>',        href: '<?php echo e(DASH_BASE_PATH); ?>/pages/support/new.php' },
    { type: 'page',    icon: 'fas fa-user',               label: '<?php echo e(__('nav_profile')); ?>',           href: '<?php echo e(DASH_BASE_PATH); ?>/pages/profile/index.php' },
    { type: 'page',    icon: 'fas fa-shield-halved',      label: '<?php echo e(__('nav_security')); ?>',          href: '<?php echo e(DASH_BASE_PATH); ?>/pages/profile/security.php' },
    { type: 'page',    icon: 'fas fa-gear',               label: '<?php echo e(__('nav_settings')); ?>',          href: '<?php echo e(DASH_BASE_PATH); ?>/pages/profile/settings.php' },

    { type: 'invoice', icon: 'fas fa-file-invoice-dollar', label: 'INV-1038 — Business Pro Hosting', meta: '€24.99 · Paid',  href: '<?php echo e(DASH_BASE_PATH); ?>/pages/billing/invoice-details.php?id=INV-1038' },
    { type: 'invoice', icon: 'fas fa-file-invoice-dollar', label: 'INV-1035 — Email Pro Suite',      meta: '€9.99 · Paid',   href: '<?php echo e(DASH_BASE_PATH); ?>/pages/billing/invoice-details.php?id=INV-1035' },
    { type: 'invoice', icon: 'fas fa-file-invoice-dollar', label: 'INV-1032 — Starter VPS',          meta: '€49.99 · Paid',  href: '<?php echo e(DASH_BASE_PATH); ?>/pages/billing/invoice-details.php?id=INV-1032' },

    { type: 'service', icon: 'fab fa-linux',     label: 'my-cpanel-server.yottasrc.com', meta: 'cPanel Hosting · Active', href: '<?php echo e(DASH_BASE_PATH); ?>/pages/services/service-details.php?id=151926' },
    { type: 'service', icon: 'fab fa-windows',   label: 'win-prod-01',                   meta: 'Windows VPS · Active',    href: '<?php echo e(DASH_BASE_PATH); ?>/pages/services/service-details.php?id=151927' },

    { type: 'domain',  icon: 'fas fa-globe',     label: 'yottasrc.com',   meta: 'Expires 2026-10-12', href: '<?php echo e(DASH_BASE_PATH); ?>/pages/domains/details.php?domain=yottasrc.com' },
    { type: 'domain',  icon: 'fas fa-globe',     label: 'example.net',    meta: 'Expires 2026-07-01', href: '<?php echo e(DASH_BASE_PATH); ?>/pages/domains/details.php?domain=example.net' },

    { type: 'ticket',  icon: 'fas fa-headset',   label: 'ENH-796520 — Linux VPS/VDS', meta: 'Technical · Answered',     href: '<?php echo e(DASH_BASE_PATH); ?>/pages/support/ticket-details.php?id=ENH-796520' },
    { type: 'ticket',  icon: 'fas fa-headset',   label: 'ENH-796515 — cPanel access', meta: 'Technical · In Progress',  href: '<?php echo e(DASH_BASE_PATH); ?>/pages/support/ticket-details.php?id=ENH-796515' },
];
</script>

        </main><!-- /.db-content (opened in layouts/shell.php or project-shell.php) -->
        <?php include __DIR__ . '/../components/dashboard-footer.php'; ?>
    </div><!-- /.db-main -->
</div><!-- /.db-shell -->

<!-- What's New slide-in panel (mounted outside .db-shell so it layers
     cleanly over everything, regardless of sidebar / topbar stacking) -->
<?php include __DIR__ . '/../components/changelog-panel.php'; ?>

<!-- Dashboard JavaScript -->
<script src="<?php echo dash_asset('js/dashboard.js'); ?>"></script>
<?php if (isset($page_js)): ?>
<script src="<?php echo dash_asset('js/' . $page_js); ?>"></script>
<?php endif; ?>
</body>

</html>
