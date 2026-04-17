<?php
/**
 * YottaSrc Dashboard — Project Network
 * ======================================
 * Lists all IP addresses assigned within a project (across all servers).
 */

require_once __DIR__ . '/../../../layouts/config.php';
require_once __DIR__ . '/../../../layouts/project-helpers.php';

$project_id         = $_GET['id'] ?? '';
$current_project    = cloud_require_project($project_id);
$project_nav_active = 'network';

$page_title = __('project_page_network') . ' — #' . $current_project['id'] . ' — ' . SITE_NAME;
$breadcrumbs_data = [
    ['label' => __('nav_dashboard'),       'url' => DASH_BASE_PATH . '/'],
    ['label' => __('cloud_title'),          'url' => DASH_BASE_PATH . '/pages/cloud/index.php'],
    ['label' => '#' . $current_project['id'] . ' - ' . $current_project['name'], 'url' => cloud_project_url('servers', $current_project['id'])],
    ['label' => __('project_page_network'), 'url' => null],
];

require_once __DIR__ . '/../../../layouts/project-shell.php';

$page_state = $_GET['state'] ?? 'active';

// Mock data — IP addresses in this project
$ips = ($page_state === 'empty') ? [] : [
    [
        'id'       => 1,
        'ip'       => '107.161.174.200',
        'type'     => 'primary',
        'rdns'     => null,
        'protocol' => 'IPv4',
        'server'   => 'CLY806752',
    ],
    [
        'id'       => 2,
        'ip'       => '2a06:8ec0::1234:5678',
        'type'     => 'primary',
        'rdns'     => 'srv1.example.com',
        'protocol' => 'IPv6',
        'server'   => 'CLY806752',
    ],
    [
        'id'       => 3,
        'ip'       => '107.161.174.201',
        'type'     => 'additional',
        'rdns'     => null,
        'protocol' => 'IPv4',
        'server'   => 'CLY806752',
    ],
];

$type_badge = [
    'primary'    => 'pending',
    'additional' => 'active',
    'reserved'   => 'unpaid',
];
?>

<!-- Page header -->
<div class="db-proj-header">
    <div class="db-proj-header__title">
        <h1 class="db-proj-header__heading">
            <?php echo e(__('project_network_list_title')); ?>,
            <span><?php echo e(__('project_label_project')); ?></span>
            <span class="db-proj-header__id">#<?php echo e($current_project['id']); ?></span>
        </h1>
    </div>
    <div class="db-proj-header__actions">
        <a href="<?php echo e(cloud_project_url('create-server', $current_project['id'])); ?>" class="db-btn db-btn--primary">
            <i class="fas fa-plus"></i> <?php echo e(__('project_create_server')); ?>
        </a>
    </div>
</div>

<?php if ($page_state === 'error'): ?>
    <div class="db-card"><?php $error_retry = true; include __DIR__ . '/../../../components/error-state.php'; ?></div>

<?php elseif ($page_state === 'loading'): ?>
    <?php $skel_rows = 3; $skel_cols = 7; $skel_has_icon = false; $skel_has_filters = true; include __DIR__ . '/../../../components/skeleton-table.php'; ?>

<?php elseif (empty($ips)): ?>
    <div class="db-card">
        <div class="db-card-body" style="padding:36px 28px;">
            <div class="db-empty-state">
                <div class="db-empty-illustration db-empty-illustration--services"><i class="fas fa-network-wired"></i></div>
                <h3 class="db-empty-title"><?php echo e(__('project_no_ips_title')); ?></h3>
                <p class="db-empty-desc"><?php echo e(__('project_no_ips_desc')); ?></p>
                <div class="db-empty-hint">
                    <i class="fas fa-circle-info"></i>
                    <span>
                        <?php echo e(__('project_no_ips_hint_prefix')); ?>
                        <a href="<?php echo e(cloud_project_url('create-server', $current_project['id'])); ?>" class="db-empty-hint__link">
                            <?php echo e(__('project_create_server')); ?>
                        </a>
                        <?php echo e(__('project_no_ips_hint_suffix')); ?>
                    </span>
                </div>
            </div>
        </div>
    </div>

<?php else: ?>

    <!-- Stats row -->
    <div class="db-stats-row">
        <div class="db-stat-card">
            <div class="db-stat-card-icon db-stat-card-icon--primary"><i class="fas fa-globe"></i></div>
            <div class="db-stat-card-body">
                <div class="db-stat-card-value"><?php echo count($ips); ?></div>
                <div class="db-stat-card-label"><?php echo e(__('project_ip_stat_total')); ?></div>
            </div>
        </div>
        <div class="db-stat-card">
            <div class="db-stat-card-icon db-stat-card-icon--secondary"><i class="fas fa-circle-dot"></i></div>
            <div class="db-stat-card-body">
                <div class="db-stat-card-value"><?php echo count(array_filter($ips, fn($x) => $x['protocol'] === 'IPv4')); ?></div>
                <div class="db-stat-card-label">IPv4</div>
            </div>
        </div>
        <div class="db-stat-card">
            <div class="db-stat-card-icon db-stat-card-icon--accent"><i class="fas fa-infinity"></i></div>
            <div class="db-stat-card-body">
                <div class="db-stat-card-value"><?php echo count(array_filter($ips, fn($x) => $x['protocol'] === 'IPv6')); ?></div>
                <div class="db-stat-card-label">IPv6</div>
            </div>
        </div>
        <div class="db-stat-card">
            <div class="db-stat-card-icon db-stat-card-icon--warning"><i class="fas fa-star"></i></div>
            <div class="db-stat-card-body">
                <div class="db-stat-card-value"><?php echo count(array_filter($ips, fn($x) => $x['type'] === 'primary')); ?></div>
                <div class="db-stat-card-label"><?php echo e(__('project_ip_stat_primary')); ?></div>
            </div>
        </div>
    </div>

    <!-- Network table -->
    <div class="db-card">
        <div class="db-card-body--table">
            <div class="db-fbar">
                <div class="db-fbar__top">
                    <div class="db-fbar__search">
                        <i class="fas fa-magnifying-glass"></i>
                        <input type="text" data-table-search="networkTable" placeholder="<?php echo e(__('project_network_search')); ?>">
                    </div>
                    <div class="db-fbar__tools">
                        <select class="db-fbar__sort" data-table-filter="networkTable" data-filter-key="protocol">
                            <option value=""><?php echo e(__('project_filter_all_protocols')); ?></option>
                            <option value="IPv4">IPv4</option>
                            <option value="IPv6">IPv6</option>
                        </select>
                        <select class="db-fbar__sort" data-table-filter="networkTable" data-filter-key="type">
                            <option value=""><?php echo e(__('project_filter_all_types')); ?></option>
                            <option value="primary"><?php echo e(__('project_ip_type_primary')); ?></option>
                            <option value="additional"><?php echo e(__('project_ip_type_additional')); ?></option>
                        </select>
                        <button class="db-view-switch__btn" onclick="DashExport('csv')" title="Export CSV"><i class="fas fa-download"></i></button>
                    </div>
                </div>
            </div>

            <div class="db-table-wrapper">
                <table class="db-table" id="networkTable" data-table-tools>
                    <thead>
                        <tr>
                            <th style="width:50px;">#</th>
                            <th class="db-table-sortable" data-sort-key="ip"><?php echo e(__('project_col_ip')); ?> <span class="db-sort-icon"><i class="fas fa-sort"></i></span></th>
                            <th class="db-table-sortable" style="width:120px;" data-sort-key="type"><?php echo e(__('project_col_type')); ?> <span class="db-sort-icon"><i class="fas fa-sort"></i></span></th>
                            <th class="db-table-hide-mobile" data-sort-key="rdns">rDNS</th>
                            <th class="db-table-sortable db-table-hide-tablet" style="width:100px;" data-sort-key="protocol"><?php echo e(__('project_col_protocol')); ?> <span class="db-sort-icon"><i class="fas fa-sort"></i></span></th>
                            <th class="db-table-sortable" data-sort-key="server"><?php echo e(__('project_col_assigned_server')); ?> <span class="db-sort-icon"><i class="fas fa-sort"></i></span></th>
                            <th style="width:60px;"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($ips as $ip):
                            $badge = $type_badge[$ip['type']] ?? 'pending';
                        ?>
                        <tr data-row
                            data-ip="<?php echo e(strtolower($ip['ip'])); ?>"
                            data-type="<?php echo e($ip['type']); ?>"
                            data-rdns="<?php echo e($ip['rdns'] ? strtolower($ip['rdns']) : ''); ?>"
                            data-protocol="<?php echo e($ip['protocol']); ?>"
                            data-server="<?php echo e(strtolower($ip['server'])); ?>">
                            <td><?php echo e($ip['id']); ?></td>
                            <td>
                                <span class="db-proj-server-ip">
                                    <i class="fas fa-ethernet"></i>
                                    <?php echo e($ip['ip']); ?>
                                </span>
                            </td>
                            <td>
                                <span class="db-badge db-badge--<?php echo e($badge); ?>">
                                    <?php echo e(__('project_ip_type_' . $ip['type'])); ?>
                                </span>
                            </td>
                            <td class="db-table-hide-mobile">
                                <?php if ($ip['rdns']): ?>
                                    <span class="db-proj-rdns"><?php echo e($ip['rdns']); ?></span>
                                <?php else: ?>
                                    <span class="db-proj-rdns db-proj-rdns--empty">—</span>
                                <?php endif; ?>
                            </td>
                            <td class="db-table-hide-tablet">
                                <span class="db-proj-protocol db-proj-protocol--<?php echo strtolower($ip['protocol']); ?>">
                                    <?php echo e($ip['protocol']); ?>
                                </span>
                            </td>
                            <td>
                                <a href="#" onclick="event.preventDefault(); DashToast.show('info','','<?php echo e(__('project_server_coming')); ?>');" class="db-proj-server-link">
                                    <i class="fas fa-server"></i>
                                    <?php echo e($ip['server']); ?>
                                </a>
                            </td>
                            <td>
                                <div class="db-row-actions db-row-actions--solid">
                                    <div class="db-dropdown-wrapper">
                                        <button class="db-row-action db-row-action--solid db-row-action--menu" data-dropdown-toggle><i class="fas fa-ellipsis-vertical"></i></button>
                                        <div class="db-dropdown-menu">
                                            <button class="db-dropdown-item" data-rdns-edit data-ip="<?php echo e($ip['ip']); ?>" data-rdns-current="<?php echo e($ip['rdns'] ?? ''); ?>"><i class="fas fa-edit"></i> <?php echo e(__('project_ip_action_rdns')); ?></button>
                                            <button class="db-dropdown-item" onclick="DashModal.open('netInstructionsModal')"><i class="fas fa-book"></i> <?php echo e(__('project_ip_action_instructions')); ?></button>
                                            <?php if ($ip['type'] !== 'primary'): ?>
                                            <div class="db-dropdown-divider"></div>
                                            <button class="db-dropdown-item db-dropdown-item--danger" data-remove-ip data-ip="<?php echo e($ip['ip']); ?>"><i class="fas fa-trash"></i> <?php echo e(__('project_ip_action_remove')); ?></button>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                        <tr data-table-empty>
                            <td colspan="7"><div class="db-table-empty-state"><i class="fas fa-magnifying-glass"></i> <?php echo e(__('project_network_empty_search')); ?></div></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

<?php endif; ?>

<!-- ═══ rDNS EDIT MODAL ═══ -->
<?php
$modal_id    = 'rdnsModal';
$modal_title = __('project_rdns_modal_title');
$modal_size  = 'sm';
include __DIR__ . '/../../../components/modal.php';
?>
    <form onsubmit="return false;">
        <p class="db-modal-lead"><?php echo e(__('project_rdns_modal_desc')); ?></p>
        <div class="db-form-group">
            <label class="db-form-label"><?php echo e(__('project_rdns_modal_ip_label')); ?></label>
            <input type="text" class="db-input" id="rdnsModalIp" readonly style="font-family:var(--font-mono); background:var(--bg-tertiary);">
        </div>
        <div class="db-form-group">
            <label class="db-form-label" for="rdnsModalValue"><?php echo e(__('project_rdns_modal_value_label')); ?> <span class="db-form-label-meta">(<?php echo e(__('common_optional')); ?>)</span></label>
            <input type="text" class="db-input" id="rdnsModalValue" placeholder="srv1.example.com" autocomplete="off">
            <div class="db-form-hint"><?php echo e(__('project_rdns_modal_hint')); ?></div>
        </div>
    </form>
<?php
$modal_footer = '
    <button class="db-btn db-btn--secondary" data-modal-close>' . e(__('common_cancel')) . '</button>
    <button class="db-btn db-btn--primary" id="rdnsModalSave">
        <i class="fas fa-floppy-disk"></i> ' . e(__('common_save')) . '
    </button>
';
include __DIR__ . '/../../../components/modal-end.php';
?>

<!-- ═══ REMOVE IP CONFIRM MODAL ═══ -->
<?php
$modal_id    = 'removeIpModal';
$modal_title = __('project_remove_ip_title');
$modal_size  = 'sm';
include __DIR__ . '/../../../components/modal.php';
?>
    <div class="db-confirm-body">
        <div class="db-modal-icon db-modal-icon--danger"><i class="fas fa-triangle-exclamation"></i></div>
        <p id="removeIpText"></p>
        <div class="db-notice db-notice--warning" style="margin-top:10px; text-align:start;">
            <i class="fas fa-triangle-exclamation"></i>
            <span><?php echo e(__('project_remove_ip_warn')); ?></span>
        </div>
    </div>
<?php
$modal_footer = '
    <button class="db-btn db-btn--secondary" data-modal-close>' . e(__('common_cancel')) . '</button>
    <button class="db-btn db-btn--danger" id="removeIpConfirm">
        <i class="fas fa-trash"></i> ' . e(__('project_remove_ip_confirm')) . '
    </button>
';
include __DIR__ . '/../../../components/modal-end.php';
?>

<!-- ═══ INSTRUCTIONS MODAL (Network page) ═══ -->
<?php
$modal_id    = 'netInstructionsModal';
$modal_title = __('project_ip_action_instructions');
$modal_size  = '';
include __DIR__ . '/../../../components/modal.php';
?>
    <p class="db-modal-lead"><?php echo e(__('project_instructions_desc')); ?></p>
    <div class="db-instructions">
        <div class="db-instructions__step">
            <div class="db-instructions__num">1</div>
            <div class="db-instructions__body">
                <h4><?php echo e(__('project_instructions_s1_title')); ?></h4>
                <p><?php echo e(__('project_instructions_s1_desc')); ?></p>
                <code class="db-instructions__code">sudo nano /etc/netplan/01-netcfg.yaml</code>
            </div>
        </div>
        <div class="db-instructions__step">
            <div class="db-instructions__num">2</div>
            <div class="db-instructions__body">
                <h4><?php echo e(__('project_instructions_s2_title')); ?></h4>
                <p><?php echo e(__('project_instructions_s2_desc')); ?></p>
                <code class="db-instructions__code">sudo netplan apply</code>
            </div>
        </div>
        <div class="db-instructions__step">
            <div class="db-instructions__num">3</div>
            <div class="db-instructions__body">
                <h4><?php echo e(__('project_instructions_s3_title')); ?></h4>
                <p><?php echo e(__('project_instructions_s3_desc')); ?></p>
                <code class="db-instructions__code">ip addr show</code>
            </div>
        </div>
    </div>
<?php
$modal_footer = '<button class="db-btn db-btn--secondary" data-modal-close>' . e(__('common_close')) . '</button>';
include __DIR__ . '/../../../components/modal-end.php';
?>

<div class="db-toast-container" id="toastContainer"></div>

<script>
/* ═══ rDNS Edit ═══ */
(function () {
    var modal = document.getElementById('rdnsModal');
    var ipEl = document.getElementById('rdnsModalIp');
    var valueEl = document.getElementById('rdnsModalValue');
    var saveBtn = document.getElementById('rdnsModalSave');
    var currentRow = null;

    document.querySelectorAll('[data-rdns-edit]').forEach(function (btn) {
        btn.addEventListener('click', function () {
            var ip = btn.getAttribute('data-ip');
            var current = btn.getAttribute('data-rdns-current') || '';
            currentRow = btn.closest('tr[data-row]');
            ipEl.value = ip;
            valueEl.value = current;
            DashModal.open('rdnsModal');
            setTimeout(function () { valueEl.focus(); }, 100);
        });
    });

    saveBtn.addEventListener('click', function () {
        var val = (valueEl.value || '').trim();
        if (val && !/^[a-z0-9.-]+$/i.test(val)) {
            if (window.DashToast) DashToast.show('error', '', <?php echo json_encode(__('srvd_rdns_invalid')); ?>);
            return;
        }
        // Update table row
        if (currentRow) {
            var viewCell = currentRow.querySelector('.db-proj-rdns');
            if (viewCell) {
                viewCell.textContent = val || '—';
                viewCell.classList.toggle('db-proj-rdns--empty', !val);
            }
        }
        DashModal.close(modal);
        if (window.DashToast) DashToast.show('success', '', <?php echo json_encode(__('srvd_rdns_saved')); ?>);
    });
})();

/* ═══ Remove IP ═══ */
(function () {
    var modal = document.getElementById('removeIpModal');
    var textEl = document.getElementById('removeIpText');
    var confirmBtn = document.getElementById('removeIpConfirm');
    var targetRow = null;
    var targetIp = '';

    document.querySelectorAll('[data-remove-ip]').forEach(function (btn) {
        btn.addEventListener('click', function () {
            targetIp = btn.getAttribute('data-ip');
            targetRow = btn.closest('tr[data-row]');
            textEl.textContent = <?php echo json_encode(__('project_remove_ip_desc')); ?> + ' ' + targetIp + '?';
            DashModal.open('removeIpModal');
        });
    });

    confirmBtn.addEventListener('click', function () {
        if (targetRow) {
            targetRow.style.transition = 'opacity 0.3s, transform 0.3s';
            targetRow.style.opacity = '0';
            targetRow.style.transform = 'translateX(-14px)';
            setTimeout(function () { targetRow.remove(); }, 320);
        }
        DashModal.close(modal);
        if (window.DashToast) DashToast.show('success', '', <?php echo json_encode(__('project_remove_ip_done')); ?> + ' ' + targetIp);
    });
})();
</script>

<?php require_once __DIR__ . '/../../../layouts/footer.php'; ?>
