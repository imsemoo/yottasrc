<?php
/**
 * YottaSrc Dashboard — My Services
 * ==================================
 * Dual view: Table (default) + Cards, with advanced filtering.
 */

$page_title = null;
$breadcrumbs_data = null;
$page_js = 'pages/services-list.js';

require_once __DIR__ . '/../../layouts/config.php';

$page_title = __('services_title') . ' — ' . SITE_NAME;
$breadcrumbs_data = [
    ['label' => __('nav_dashboard'), 'url' => DASH_BASE_PATH . '/'],
    ['label' => __('nav_my_services'), 'url' => null],
];

require_once __DIR__ . '/../../layouts/shell.php';

$page_state = $_GET['state'] ?? 'active';
$stats = ['total' => 8, 'active' => 5, 'suspended' => 1, 'pending' => 2];

$services = [
    ['id' => 1041, 'name' => 'Business Pro Hosting',  'type' => 'Shared Hosting',    'domain' => 'yottasrc.com',         'ip' => '185.230.120.41', 'status' => 'active',    'cycle' => 'Monthly',  'amount' => 24.99,  'due_date' => '2026-04-15'],
    ['id' => 1038, 'name' => 'Starter VPS',           'type' => 'VPS Server',         'domain' => 'api.yottasrc.com',     'ip' => '185.230.120.55', 'status' => 'active',    'cycle' => 'Monthly',  'amount' => 49.99,  'due_date' => '2026-04-20'],
    ['id' => 1035, 'name' => 'Reseller Basic',        'type' => 'Reseller Hosting',   'domain' => 'clients.designhub.io', 'ip' => '185.230.120.78', 'status' => 'active',    'cycle' => 'Annually', 'amount' => 199.99, 'due_date' => '2027-01-10'],
    ['id' => 1032, 'name' => 'WordPress Premium',     'type' => 'WordPress Hosting',  'domain' => 'blog.example.com',     'ip' => '185.230.120.90', 'status' => 'suspended', 'cycle' => 'Monthly',  'amount' => 14.99,  'due_date' => '2026-03-25'],
    ['id' => 1029, 'name' => 'Enterprise Dedicated',  'type' => 'Dedicated Server',   'domain' => 'erp.companyxyz.com',   'ip' => '185.230.121.10', 'status' => 'active',    'cycle' => 'Monthly',  'amount' => 149.99, 'due_date' => '2026-04-01'],
    ['id' => 1027, 'name' => 'SSL Certificate',       'type' => 'SSL / Security',     'domain' => 'yottasrc.com',         'ip' => '—',              'status' => 'active',    'cycle' => 'Annually', 'amount' => 39.99,  'due_date' => '2027-03-15'],
    ['id' => 1024, 'name' => 'Email Pro Suite',       'type' => 'Email Hosting',      'domain' => 'mail.yottasrc.com',    'ip' => '185.230.120.44', 'status' => 'pending',   'cycle' => 'Monthly',  'amount' => 9.99,   'due_date' => '2026-04-15'],
    ['id' => 1020, 'name' => 'Development Sandbox',   'type' => 'VPS Server',         'domain' => 'dev.yottasrc.com',     'ip' => '185.230.120.62', 'status' => 'pending',   'cycle' => 'Monthly',  'amount' => 29.99,  'due_date' => '2026-04-15'],
];

$type_icons = [
    'Shared Hosting'    => ['fas fa-server',        'primary'],
    'VPS Server'        => ['fas fa-microchip',     'accent'],
    'Reseller Hosting'  => ['fas fa-users',         'secondary'],
    'WordPress Hosting' => ['fab fa-wordpress',      'primary'],
    'Dedicated Server'  => ['fas fa-database',      'warning'],
    'SSL / Security'    => ['fas fa-shield-halved', 'secondary'],
    'Email Hosting'     => ['fas fa-envelope',      'primary'],
];
?>

<?php
$ph_title = __('services_title');
$ph_desc = __('services_desc');
$ph_actions = '<a href="' . DASH_BASE_PATH . '/pages/services/order.php" class="db-btn db-btn--primary"><i class="fas fa-plus"></i> ' . e(__('services_order_new')) . '</a>';
include __DIR__ . '/../../components/page-header.php';
?>

<?php if ($page_state === 'error'): ?>
    <div class="db-card"><?php $error_retry = true; include __DIR__ . '/../../components/error-state.php'; ?></div>

<?php elseif ($page_state === 'loading'): ?>
    <div class="db-card" style="padding:16px 18px;">
        <div class="db-skeleton" style="height:42px; border-radius:var(--radius-sm); margin-bottom:14px;"></div>
        <div class="db-skeleton" style="height:42px; border-radius:var(--radius-sm); margin-bottom:14px;"></div>
        <?php for ($i = 0; $i < 5; $i++): ?>
        <div class="db-skeleton" style="height:52px; border-radius:var(--radius-xs); margin-bottom:4px;"></div>
        <?php endfor; ?>
    </div>

<?php elseif ($page_state === 'empty'): ?>
    <div class="db-card">
        <div class="db-empty-state">
            <div class="db-empty-illustration db-empty-illustration--services"><i class="fas fa-server"></i></div>
            <h3 class="db-empty-title"><?php echo e(__('services_empty_title')); ?></h3>
            <p class="db-empty-desc"><?php echo e(__('services_empty_desc')); ?></p>
            <a href="<?php echo DASH_BASE_PATH; ?>/pages/services/order.php" class="db-btn db-btn--primary"><i class="fas fa-plus"></i> <?php echo e(__('services_order_new')); ?></a>
        </div>
    </div>

<?php else: ?>
    <div class="db-card">
        <!-- ═══ FILTER BAR ═══ -->
        <div class="db-fbar">
            <!-- Row 1: Search + View switcher -->
            <div class="db-fbar__top">
                <div class="db-fbar__search">
                    <i class="fas fa-magnifying-glass"></i>
                    <input type="text" id="svcSearch" data-table-search="servicesTable" placeholder="<?php echo e(__('services_search_placeholder')); ?>">
                </div>
                <div class="db-fbar__tools">
                    <select class="db-fbar__sort" id="svcSort" data-table-filter="servicesTable" data-filter-key="status">
                        <option value=""><?php echo e(__('services_filter_all')); ?></option>
                        <option value="active"><?php echo e(__('status_active')); ?></option>
                        <option value="suspended"><?php echo e(__('status_suspended')); ?></option>
                        <option value="pending"><?php echo e(__('status_pending')); ?></option>
                    </select>
                    <button class="db-view-switch__btn" onclick="DashExport('csv')" title="Export CSV"><i class="fas fa-download"></i></button>
                    <div class="db-view-switch" id="viewSwitch">
                        <button class="db-view-switch__btn active" data-view="table" title="Table"><i class="fas fa-list"></i></button>
                        <button class="db-view-switch__btn" data-view="cards" title="Cards"><i class="fas fa-grip"></i></button>
                    </div>
                </div>
            </div>
            <!-- Row 2: Status segmented tabs (wired via DashTable) -->
            <div class="db-fbar__bottom">
                <div class="db-seg-tabs" data-table-tabs="servicesTable" data-tab-key="status">
                    <button type="button" class="db-seg-tab active" data-tab-value="all"><?php echo e(__('services_filter_all')); ?> <span class="db-seg-tab__count"><?php echo $stats['total']; ?></span></button>
                    <button type="button" class="db-seg-tab" data-tab-value="active"><?php echo e(__('status_active')); ?> <span class="db-seg-tab__count"><?php echo $stats['active']; ?></span></button>
                    <button type="button" class="db-seg-tab" data-tab-value="suspended"><?php echo e(__('status_suspended')); ?> <span class="db-seg-tab__count"><?php echo $stats['suspended']; ?></span></button>
                    <button type="button" class="db-seg-tab" data-tab-value="pending"><?php echo e(__('status_pending')); ?> <span class="db-seg-tab__count"><?php echo $stats['pending']; ?></span></button>
                </div>
            </div>
        </div>

        <!-- ═══ TABLE VIEW (default) ═══ -->
        <div class="db-view" id="view-table">
            <div class="db-card-body--table" style="border-top:none;">
                <div class="db-table-wrapper">
                    <table class="db-table" id="servicesTable" data-table-tools>
                        <thead>
                            <tr>
                                <th class="db-table-sortable" data-sort-key="name"><?php echo e(__('services_col_service')); ?> <span class="db-sort-icon"><i class="fas fa-sort"></i></span></th>
                                <th class="db-table-sortable" data-sort-key="status"><?php echo e(__('common_status')); ?> <span class="db-sort-icon"><i class="fas fa-sort"></i></span></th>
                                <th class="db-table-hide-tablet db-table-sortable" data-sort-key="cycle"><?php echo e(__('services_col_cycle')); ?> <span class="db-sort-icon"><i class="fas fa-sort"></i></span></th>
                                <th class="db-table-hide-mobile db-table-sortable" data-sort-key="due_date"><?php echo e(__('services_col_due')); ?> <span class="db-sort-icon"><i class="fas fa-sort"></i></span></th>
                                <th class="db-table-sortable db-table-cell--right" data-sort-key="amount"><?php echo e(__('services_col_amount')); ?> <span class="db-sort-icon"><i class="fas fa-sort"></i></span></th>
                                <th style="width:80px;"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($services as $svc):
                                $icon_data = $type_icons[$svc['type']] ?? ['fas fa-cube', 'primary'];
                                $detail_url = DASH_BASE_PATH . '/pages/services/service-details.php?id=' . $svc['id'];
                            ?>
                            <tr class="db-table-row-link"
                                data-row
                                data-name="<?php echo e(strtolower($svc['name'])); ?>"
                                data-domain="<?php echo e(strtolower($svc['domain'])); ?>"
                                data-status="<?php echo e($svc['status']); ?>"
                                data-cycle="<?php echo e($svc['cycle']); ?>"
                                data-due_date="<?php echo e($svc['due_date']); ?>"
                                data-amount="<?php echo e($svc['amount']); ?>"
                                onclick="window.location='<?php echo $detail_url; ?>'">
                                <td>
                                    <div class="db-table-cell-with-icon">
                                        <div class="db-table-icon db-table-icon--<?php echo $icon_data[1]; ?>"><i class="<?php echo $icon_data[0]; ?>"></i></div>
                                        <div>
                                            <div class="db-table-cell-main"><?php echo e($svc['name']); ?></div>
                                            <div class="db-table-cell-sub"><?php echo e($svc['domain']); ?><?php echo $svc['ip'] !== '—' ? ' · ' . e($svc['ip']) : ''; ?></div>
                                        </div>
                                    </div>
                                </td>
                                <td><span class="db-badge db-badge--<?php echo e($svc['status']); ?>"><?php echo e(__('status_' . $svc['status'])); ?></span></td>
                                <td class="db-table-hide-tablet"><?php echo e($svc['cycle']); ?></td>
                                <td class="db-table-hide-mobile"><?php echo e($svc['due_date']); ?></td>
                                <td class="db-table-cell--right"><span class="db-table-cell-amount"><?php echo format_money($svc['amount']); ?></span></td>
                                <td>
                                    <div class="db-row-actions db-row-actions--solid" onclick="event.stopPropagation();">
                                        <a href="<?php echo $detail_url; ?>" class="db-row-action db-row-action--solid db-row-action--primary" data-tooltip="<?php echo e(__('services_manage')); ?>"><i class="fas fa-arrow-up-right-from-square"></i></a>
                                        <div class="db-dropdown-wrapper">
                                            <button class="db-row-action db-row-action--solid db-row-action--menu" data-dropdown-toggle><i class="fas fa-ellipsis-vertical"></i></button>
                                            <div class="db-dropdown-menu">
                                                <a href="<?php echo $detail_url; ?>" class="db-dropdown-item"><i class="fas fa-eye"></i> <?php echo e(__('common_view')); ?></a>
                                                <button class="db-dropdown-item" onclick="DashToast.show('info','','Redirecting to cPanel...')"><i class="fas fa-right-to-bracket"></i> <?php echo e(__('services_action_login')); ?></button>
                                                <button class="db-dropdown-item" onclick="DashToast.show('info','','Upgrade coming soon.')"><i class="fas fa-arrow-up-right-dots"></i> <?php echo e(__('services_action_upgrade')); ?></button>
                                                <div class="db-dropdown-divider"></div>
                                                <button class="db-dropdown-item db-dropdown-item--danger" onclick="DashToast.show('warning','','Cancellation coming soon.')"><i class="fas fa-xmark"></i> <?php echo e(__('services_action_cancel')); ?></button>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                            <tr data-table-empty>
                                <td colspan="6"><div class="db-table-empty-state"><i class="fas fa-magnifying-glass"></i> <?php echo e(__('services_empty_search')); ?></div></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- ═══ CARDS VIEW ═══ -->
        <div class="db-view" id="view-cards" style="display:none;">
            <div class="db-svc-cards" style="padding:14px 18px;">
                <?php foreach ($services as $svc):
                    $icon_data = $type_icons[$svc['type']] ?? ['fas fa-cube', 'primary'];
                    $detail_url = DASH_BASE_PATH . '/pages/services/service-details.php?id=' . $svc['id'];
                ?>
                <div class="db-svc-card db-svc-card--<?php echo e($svc['status']); ?>"
                     data-svc-card
                     data-name="<?php echo e(strtolower($svc['name'])); ?>"
                     data-domain="<?php echo e(strtolower($svc['domain'])); ?>"
                     data-status="<?php echo e($svc['status']); ?>">
                    <div class="db-svc-card__top">
                        <div class="db-svc-card__icon db-svc-card__icon--<?php echo $icon_data[1]; ?>"><i class="<?php echo $icon_data[0]; ?>"></i></div>
                        <div class="db-svc-card__title">
                            <a href="<?php echo $detail_url; ?>" class="db-svc-card__name"><?php echo e($svc['name']); ?></a>
                            <div class="db-svc-card__domain"><?php echo e($svc['domain']); ?> <?php if ($svc['ip'] !== '—'): ?><span class="db-svc-card__ip"><?php echo e($svc['ip']); ?></span><?php endif; ?></div>
                        </div>
                        <span class="db-badge db-badge--<?php echo e($svc['status']); ?>"><?php echo e(__('status_' . $svc['status'])); ?></span>
                    </div>
                    <div class="db-svc-card__bottom">
                        <div class="db-svc-card__meta">
                            <span class="db-svc-card__tag"><?php echo e($svc['type']); ?></span>
                            <span class="db-svc-card__tag"><?php echo e($svc['cycle']); ?></span>
                            <span class="db-svc-card__due"><?php echo e(__('services_col_due')); ?>: <?php echo e($svc['due_date']); ?></span>
                        </div>
                        <div class="db-svc-card__right">
                            <div class="db-svc-card__price"><?php echo format_money($svc['amount']); ?><span>/<?php echo e(strtolower(substr($svc['cycle'], 0, 2))); ?></span></div>
                            <a href="<?php echo $detail_url; ?>" class="db-btn db-btn--primary db-btn--sm db-svc-card__manage"><?php echo e(__('services_manage')); ?> <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- ═══ PAGINATION ═══ -->
        <div class="db-pagination-bar">
            <div class="db-pagination-bar__info"><?php echo e(__('services_showing', ['from' => 1, 'to' => count($services), 'total' => $stats['total']])); ?></div>
            <div class="db-pagination-bar__nav">
                <button class="db-pagination-bar__btn" disabled><i class="fas fa-chevron-left"></i> <?php echo e(__('common_previous')); ?></button>
                <span class="db-pagination-bar__page active">1</span>
                <button class="db-pagination-bar__btn" disabled><?php echo e(__('common_next')); ?> <i class="fas fa-chevron-right"></i></button>
            </div>
        </div>
    </div>
<?php endif; ?>

<div class="db-toast-container" id="toastContainer"></div>

<script>
/* Mirror DashTable's table filter to the cards view */
(function () {
    var table = document.getElementById('servicesTable');
    if (!table) return;
    var cards = document.querySelectorAll('[data-svc-card]');

    function applyToCards(detail) {
        var queries = detail.queries || [];
        var filters = detail.filters || [];
        cards.forEach(function (card) {
            var text = '';
            for (var i = 0; i < card.attributes.length; i++) {
                var a = card.attributes[i];
                if (a.name.indexOf('data-') === 0 && a.name !== 'data-svc-card') {
                    text += ' ' + a.value.toLowerCase();
                }
            }
            text += ' ' + (card.textContent || '').toLowerCase();
            var searchOk = queries.every(function (q) { return text.indexOf(q) !== -1; });
            var filterOk = filters.every(function (f) {
                return (card.getAttribute('data-' + f.key) || '').toLowerCase() === f.val;
            });
            card.style.display = (searchOk && filterOk) ? '' : 'none';
        });
    }

    table.addEventListener('dashtable:filter', function (e) { applyToCards(e.detail); });
})();
</script>

<?php require_once __DIR__ . '/../../layouts/footer.php'; ?>
