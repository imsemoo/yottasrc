<?php
/**
 * YottaSrc Dashboard — Project API Access
 * ==========================================
 * Manage API keys scoped to this project:
 *   • Create keys (name + scope + optional expiry)
 *   • List keys with prefix, scopes, last-used, created
 *   • Regenerate / revoke keys
 *   • Link to full API documentation
 */

require_once __DIR__ . '/../../../layouts/config.php';
require_once __DIR__ . '/../../../layouts/project-helpers.php';

$project_id         = $_GET['id'] ?? '';
$current_project    = cloud_require_project($project_id);
$project_nav_active = 'api';

$page_title = __('project_nav_api') . ' — #' . $current_project['id'] . ' — ' . SITE_NAME;
$breadcrumbs_data = [
    ['label' => __('nav_dashboard'),       'url' => DASH_BASE_PATH . '/'],
    ['label' => __('cloud_title'),          'url' => DASH_BASE_PATH . '/pages/cloud/index.php'],
    ['label' => '#' . $current_project['id'] . ' - ' . $current_project['name'], 'url' => cloud_project_url('servers', $current_project['id'])],
    ['label' => __('project_nav_api'),     'url' => null],
];

require_once __DIR__ . '/../../../layouts/project-shell.php';

/* ══════════════════════════════════════════════════════════════════════
   ███  PROJECT API  ·  MOCK DATA BLOCK  (single source of truth)   ███
   ══════════════════════════════════════════════════════════════════════
   BACKEND TEAM — PLEASE READ:

   This page manages API keys scoped to the current project. The table
   below is auto-rendered from the $api_keys array.

   Wiring real data:
     • Replace $api_keys with a DB query scoped to $current_project['id'].
     • Keep the KEYS and SHAPE identical.
     • NEVER render the full secret on page load — only the prefix.
       After a fresh create/regenerate, show the full secret ONCE in
       the success toast / modal, then swap to prefix-only.
     • 'scopes' is a comma-separated list of scope ids
       (read_servers, write_servers, read_billing, …) — drives the
       permission badges shown in the table.
   ══════════════════════════════════════════════════════════════════════ */
$page_state = $_GET['state'] ?? 'active';

$api_keys = ($page_state === 'empty') ? [] : [
    [
        'id'         => 'ak_8f2e31',
        'name'       => 'Production automation',
        'prefix'     => 'ysk_live_8f2e31',
        'scopes'     => ['read_servers', 'write_servers', 'read_billing'],
        'last_used'  => '2 minutes ago',
        'last_ip'    => '185.225.49.42',
        'created'    => '2025-11-12',
        'expires'    => null,
        'status'     => 'active',
    ],
    [
        'id'         => 'ak_c5174a',
        'name'       => 'Staging bot',
        'prefix'     => 'ysk_live_c5174a',
        'scopes'     => ['read_servers'],
        'last_used'  => '3 hours ago',
        'last_ip'    => '51.222.18.77',
        'created'    => '2026-01-20',
        'expires'    => '2026-07-20',
        'status'     => 'active',
    ],
    [
        'id'         => 'ak_91b7d2',
        'name'       => 'WHMCS sync (legacy)',
        'prefix'     => 'ysk_live_91b7d2',
        'scopes'     => ['read_servers', 'read_billing'],
        'last_used'  => '14 days ago',
        'last_ip'    => '45.90.62.18',
        'created'    => '2025-06-01',
        'expires'    => null,
        'status'     => 'revoked',
    ],
];

/* Total / active / revoked — drives the hero stat tiles. */
$api_stats = [
    'total'   => count($api_keys),
    'active'  => count(array_filter($api_keys, fn($k) => $k['status'] === 'active')),
    'revoked' => count(array_filter($api_keys, fn($k) => $k['status'] === 'revoked')),
];

/* Scope → short label + color mapping for the badges. */
$scope_labels = [
    'read_servers'   => ['label' => 'servers:read',  'variant' => 'active'],
    'write_servers'  => ['label' => 'servers:write', 'variant' => 'pending'],
    'read_billing'   => ['label' => 'billing:read',  'variant' => 'unpaid'],
    'write_billing'  => ['label' => 'billing:write', 'variant' => 'pending'],
    'read_domains'   => ['label' => 'domains:read',  'variant' => 'active'],
    'write_domains'  => ['label' => 'domains:write', 'variant' => 'pending'],
];

/* Status → badge variant */
$status_badge = [
    'active'  => 'active',
    'revoked' => 'cancelled',
    'expired' => 'suspended',
];

/* ══════════════  END OF MOCK DATA  ══════════════ */
?>

<?php
$hero_eyebrow = __('project_pro_eyebrow_api');
$hero_title   = $current_project['name'];
$hero_sub     = __('project_pro_sub_api');
$hero_stats   = empty($api_keys) ? null : [
    ['icon' => 'fa-key',          'label' => __('project_api_stat_total'),   'value' => $api_stats['total'],   'seed' => 0],
    ['icon' => 'fa-circle-check', 'label' => __('domains_stat_active'),  'value' => $api_stats['active'],  'seed' => 1],
    ['icon' => 'fa-ban',          'label' => __('project_api_stat_revoked'), 'value' => $api_stats['revoked'], 'seed' => 3],
];
$hero_actions  = '<a href="https://docs.yottasrc.com/api" target="_blank" rel="noopener" class="ds-btn"><i class="fas fa-book"></i> <span>' . e(__('project_api_docs_btn')) . '</span></a>';
$hero_actions .= '<button type="button" class="ds-btn ds-btn--primary" onclick="DashModal.open(\'apiKeyCreateModal\')"><i class="fas fa-plus"></i> <span>' . e(__('project_api_create_btn')) . '</span></button>';
include __DIR__ . '/../../../components/project-pro-hero.php';
unset($hero_eyebrow, $hero_title, $hero_sub, $hero_stats, $hero_actions);
?>

<?php if ($page_state === 'error'): ?>
    <div class="db-card"><?php $error_retry = true; include __DIR__ . '/../../../components/error-state.php'; ?></div>

<?php elseif ($page_state === 'loading'): ?>
    <?php $skel_rows = 4; $skel_cols = 6; $skel_has_icon = true; $skel_has_filters = true; include __DIR__ . '/../../../components/skeleton-table.php'; ?>

<?php elseif (empty($api_keys)): ?>
    <?php
    ob_start();
    ?>
    <button type="button" class="db-btn db-btn--primary" onclick="DashModal.open('apiKeyCreateModal')">
        <i class="fas fa-plus"></i> <?php echo e(__('project_api_create_btn')); ?>
    </button>
    <?php
    $es_action = ob_get_clean();
    $es_icon   = 'fa-key';
    $es_title  = __('project_api_empty_title');
    $es_desc   = __('project_api_empty_desc');
    include __DIR__ . '/../../../components/empty-state.php';
    ?>

<?php else: ?>

    <!-- Quickstart card -->
    <div class="db-card db-api-quickstart">
        <div class="db-api-quickstart__head">
            <span class="db-api-quickstart__icon"><i class="fas fa-rocket"></i></span>
            <div>
                <h3 class="db-api-quickstart__title"><?php echo e(__('project_api_quickstart_title')); ?></h3>
                <p class="db-api-quickstart__sub"><?php echo e(__('project_api_quickstart_sub')); ?></p>
            </div>
            <a href="https://docs.yottasrc.com/api" target="_blank" rel="noopener" class="db-api-quickstart__docs">
                <i class="fas fa-book"></i> <?php echo e(__('project_api_full_docs')); ?>
            </a>
        </div>
        <div class="db-api-quickstart__code">
            <div class="db-api-quickstart__code-head">
                <span><i class="fas fa-terminal"></i> curl</span>
                <button type="button" class="db-api-quickstart__copy" data-copy-code="curlSample">
                    <i class="fas fa-copy"></i> <?php echo e(__('common_copy')); ?>
                </button>
            </div>
            <pre class="db-api-quickstart__pre" id="curlSample">curl https://api.yottasrc.com/v1/projects/<?php echo e($current_project['id']); ?>/servers \
    -H "Authorization: Bearer ysk_live_•••••••••••••••" \
    -H "Content-Type: application/json"</pre>
        </div>
    </div>

    <!-- API Keys table -->
    <div class="db-card db-mt">
        <!-- Filter bar -->
        <div class="db-fbar">
            <div class="db-fbar__top">
                <div class="db-fbar__search">
                    <i class="fas fa-magnifying-glass"></i>
                    <input type="text" data-table-search="apiKeysTable" placeholder="<?php echo e(__('project_api_search_ph')); ?>">
                </div>
                <div class="db-fbar__tools">
                    <select class="db-fbar__sort" data-table-filter="apiKeysTable" data-filter-key="status">
                        <option value=""><?php echo e(__('aff_ref_filter_all')); ?></option>
                        <option value="active"><?php echo e(__('status_active')); ?></option>
                        <option value="revoked"><?php echo e(__('project_api_status_revoked')); ?></option>
                    </select>
                    <?php include __DIR__ . '/../../../components/export-dropdown.php'; ?>
                </div>
            </div>
        </div>

        <div class="db-card-body--table db-card-body--no-border-top">
            <div class="db-table-wrapper">
                <table class="db-table" id="apiKeysTable" data-table-tools>
                    <thead>
                        <tr>
                            <th class="db-table-sortable" data-sort-key="name"><?php echo e(__('dom_dns_name')); ?> <span class="db-sort-icon"><i class="fas fa-sort"></i></span></th>
                            <th><?php echo e(__('project_api_col_key')); ?></th>
                            <th class="db-table-hide-tablet"><?php echo e(__('project_api_col_scopes')); ?></th>
                            <th class="db-table-sortable db-table-hide-mobile" data-sort-key="last_used"><?php echo e(__('project_api_col_last_used')); ?> <span class="db-sort-icon"><i class="fas fa-sort"></i></span></th>
                            <th class="db-table-sortable db-table-hide-mobile" data-sort-key="created"><?php echo e(__('srvd_backup_col_date')); ?> <span class="db-sort-icon"><i class="fas fa-sort"></i></span></th>
                            <th class="db-table-sortable" data-sort-key="status"><?php echo e(__('common_status')); ?> <span class="db-sort-icon"><i class="fas fa-sort"></i></span></th>
                            <th style="width:80px;"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($api_keys as $k):
                            $badge = $status_badge[$k['status']] ?? 'cancelled';
                        ?>
                        <tr data-row
                            data-name="<?php echo e(strtolower($k['name'])); ?>"
                            data-prefix="<?php echo e(strtolower($k['prefix'])); ?>"
                            data-status="<?php echo e($k['status']); ?>"
                            data-last_used="<?php echo e($k['last_used']); ?>"
                            data-created="<?php echo e($k['created']); ?>">
                            <td>
                                <div class="db-table-cell-main">
                                    <span class="db-table-cell-link"><?php echo e($k['name']); ?></span>
                                    <?php if (!empty($k['expires'])): ?>
                                    <span class="db-table-cell-sub"><i class="fas fa-clock"></i> <?php echo e(__('project_api_expires_on', ['date' => $k['expires']])); ?></span>
                                    <?php endif; ?>
                                </div>
                            </td>
                            <td>
                                <button type="button" class="db-api-key-chip" title="<?php echo e(__('common_copy')); ?>"
                                    onclick="DashCopy && DashCopy(this,'<?php echo e($k['prefix']); ?>');">
                                    <span class="db-api-key-chip__text"><?php echo e($k['prefix']); ?>••••</span>
                                    <i class="fas fa-copy db-api-key-chip__copy"></i>
                                </button>
                            </td>
                            <td class="db-table-hide-tablet">
                                <div class="db-api-scopes">
                                    <?php foreach ($k['scopes'] as $s):
                                        $sl = $scope_labels[$s] ?? ['label' => $s, 'variant' => 'pending'];
                                    ?>
                                    <span class="db-badge db-badge--<?php echo e($sl['variant']); ?> db-badge--sm"><?php echo e($sl['label']); ?></span>
                                    <?php endforeach; ?>
                                </div>
                            </td>
                            <td class="db-table-hide-mobile">
                                <span class="db-table-cell-sub"><?php echo e($k['last_used']); ?></span>
                                <?php if (!empty($k['last_ip'])): ?>
                                <div class="db-table-cell-sub db-table-cell-mono"><?php echo e($k['last_ip']); ?></div>
                                <?php endif; ?>
                            </td>
                            <td class="db-table-hide-mobile"><span class="db-table-cell-mono"><?php echo e($k['created']); ?></span></td>
                            <td>
                                <span class="db-badge db-badge--<?php echo e($badge); ?>">
                                    <?php echo e($k['status'] === 'revoked' ? __('project_api_status_revoked') : __('status_' . $k['status'])); ?>
                                </span>
                            </td>
                            <td>
                                <div class="db-row-actions db-row-actions--solid">
                                    <button type="button" class="db-row-action db-row-action--solid db-row-action--primary"
                                        data-tooltip="<?php echo e(__('common_view')); ?>"
                                        onclick="DashToast.show('info','','<?php echo e(__('common_view')); ?>: <?php echo e($k['name']); ?>');">
                                        <i class="fas fa-arrow-up-right-from-square"></i>
                                    </button>
                                    <div class="db-dropdown-wrapper">
                                        <button class="db-row-action db-row-action--solid db-row-action--menu" data-dropdown-toggle><i class="fas fa-ellipsis-vertical"></i></button>
                                        <div class="db-dropdown-menu">
                                            <button class="db-dropdown-item" onclick="DashToast.show('info','','<?php echo e(__('project_api_action_edit_soon')); ?>');"><i class="fas fa-pen"></i> <?php echo e(__('common_edit')); ?></button>
                                            <button class="db-dropdown-item" data-api-regenerate data-key-id="<?php echo e($k['id']); ?>" data-key-name="<?php echo e($k['name']); ?>"><i class="fas fa-rotate"></i> <?php echo e(__('project_api_action_regenerate')); ?></button>
                                            <?php if ($k['status'] === 'active'): ?>
                                            <div class="db-dropdown-divider"></div>
                                            <button class="db-dropdown-item db-dropdown-item--danger" data-api-revoke data-key-id="<?php echo e($k['id']); ?>" data-key-name="<?php echo e($k['name']); ?>"><i class="fas fa-ban"></i> <?php echo e(__('security_revoke')); ?></button>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                        <?php
                        $te_colspan = 7; $te_text = __('project_api_empty_search');
                        include __DIR__ . '/../../../components/table-empty.php';
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Pagination — built client-side by DashTablePager -->
        <div id="apiKeysPagination" data-pager-for="apiKeysTable" data-page-size="10"></div>
    </div>

    <!-- Security tips -->
    <div class="db-notice db-notice--info db-mt">
        <i class="fas fa-shield-halved"></i>
        <div>
            <strong><?php echo e(__('project_api_tip_title')); ?></strong>
            <span><?php echo e(__('project_api_tip_desc')); ?></span>
        </div>
    </div>

<?php endif; ?>

<!-- ═══ CREATE API KEY MODAL ═══ -->
<?php
$modal_id    = 'apiKeyCreateModal';
$modal_title = __('project_api_create_title');
$modal_size  = '';
include __DIR__ . '/../../../components/modal.php';
?>
    <form id="apiKeyCreateForm" onsubmit="return false;">
        <p class="db-modal-lead"><?php echo e(__('project_api_create_intro')); ?></p>

        <div class="db-form-group">
            <label class="db-form-label" for="apiKeyName"><?php echo e(__('dom_dns_name')); ?> <span class="db-required">*</span></label>
            <input type="text" id="apiKeyName" class="db-input" required minlength="3" maxlength="60" placeholder="<?php echo e(__('project_api_name_ph')); ?>">
            <div class="db-form-hint"><?php echo e(__('project_api_name_hint')); ?></div>
        </div>

        <div class="db-form-group">
            <label class="db-form-label"><?php echo e(__('project_api_col_scopes')); ?> <span class="db-required">*</span></label>
            <div class="db-api-scopes-pick">
                <?php foreach ($scope_labels as $id => $sl): ?>
                <label class="db-check-pill">
                    <input type="checkbox" name="scopes[]" value="<?php echo e($id); ?>" <?php echo str_starts_with($id, 'read_') ? 'checked' : ''; ?>>
                    <span class="db-check-pill__mark"><i class="fas fa-check"></i></span>
                    <span class="db-check-pill__label"><?php echo e($sl['label']); ?></span>
                </label>
                <?php endforeach; ?>
            </div>
            <div class="db-form-hint"><?php echo e(__('project_api_scopes_hint')); ?></div>
        </div>

        <div class="db-form-group">
            <label class="db-form-label" for="apiKeyExpiry"><?php echo e(__('project_api_expiry_label')); ?></label>
            <select id="apiKeyExpiry" class="db-input">
                <option value=""><?php echo e(__('project_api_expiry_never')); ?></option>
                <option value="30"><?php echo e(__('project_api_expiry_30')); ?></option>
                <option value="90"><?php echo e(__('project_api_expiry_90')); ?></option>
                <option value="365"><?php echo e(__('project_api_expiry_365')); ?></option>
            </select>
        </div>
    </form>
<?php
$modal_footer = '
    <button class="db-btn db-btn--secondary" data-modal-close>' . e(__('common_cancel')) . '</button>
    <button class="db-btn db-btn--primary" id="apiKeyCreateSubmit">
        <i class="fas fa-plus"></i> ' . e(__('project_api_create_submit')) . '
    </button>
';
include __DIR__ . '/../../../components/modal-end.php';
?>

<!-- ═══ NEW-KEY REVEAL MODAL (shown right after create) ═══ -->
<?php
$modal_id    = 'apiKeyRevealModal';
$modal_title = __('project_api_reveal_title');
$modal_size  = '';
include __DIR__ . '/../../../components/modal.php';
?>
    <div class="db-confirm-body">
        <div class="db-modal-icon db-modal-icon--warning"><i class="fas fa-key"></i></div>
        <p><?php echo e(__('project_api_reveal_desc')); ?></p>

        <div class="db-api-reveal">
            <code class="db-api-reveal__code" id="apiKeyRevealValue">ysk_live_8f2e31_DEMO_PLACEHOLDER_xxxx</code>
            <button type="button" class="db-api-reveal__copy" onclick="DashCopy(this, document.getElementById('apiKeyRevealValue').textContent);">
                <i class="fas fa-copy"></i> <?php echo e(__('common_copy')); ?>
            </button>
        </div>

        <div class="db-notice db-notice--danger db-confirm-body__warn">
            <i class="fas fa-triangle-exclamation"></i>
            <span><?php echo e(__('project_api_reveal_warn')); ?></span>
        </div>
    </div>
<?php
$modal_footer = '
    <button class="db-btn db-btn--primary" data-modal-close>
        <i class="fas fa-check"></i> ' . e(__('project_api_reveal_done')) . '
    </button>
';
include __DIR__ . '/../../../components/modal-end.php';
?>

<!-- ═══ REVOKE CONFIRM MODAL ═══ -->
<?php
$modal_id    = 'apiKeyRevokeModal';
$modal_title = __('project_api_revoke_title');
$modal_size  = 'sm';
include __DIR__ . '/../../../components/modal.php';
?>
    <div class="db-confirm-body">
        <div class="db-modal-icon db-modal-icon--danger"><i class="fas fa-ban"></i></div>
        <p><?php echo e(__('project_api_revoke_desc')); ?></p>
        <div class="db-confirm-summary">
            <div class="db-confirm-summary__row">
                <span><?php echo e(__('dom_dns_name')); ?></span>
                <span id="apiRevokeName" class="db-confirm-summary__target"></span>
            </div>
        </div>
        <div class="db-notice db-notice--danger db-confirm-body__warn">
            <i class="fas fa-triangle-exclamation"></i>
            <span><?php echo e(__('project_api_revoke_warn')); ?></span>
        </div>
    </div>
<?php
$modal_footer = '
    <button class="db-btn db-btn--secondary" data-modal-close>' . e(__('common_cancel')) . '</button>
    <button class="db-btn db-btn--danger" id="apiKeyRevokeConfirm">
        <i class="fas fa-ban"></i> ' . e(__('project_api_revoke_confirm')) . '
    </button>
';
include __DIR__ . '/../../../components/modal-end.php';
?>

<script>
document.addEventListener('DOMContentLoaded', function () {

    /* ───── Create API key → reveal ───── */
    var createBtn = document.getElementById('apiKeyCreateSubmit');
    if (createBtn) {
        createBtn.addEventListener('click', function () {
            var form = document.getElementById('apiKeyCreateForm');
            var nameInput = document.getElementById('apiKeyName');
            if (!form.reportValidity()) return;
            var scopes = form.querySelectorAll('input[name="scopes[]"]:checked');
            if (scopes.length === 0) {
                if (window.DashToast) DashToast.show('error', '', <?php echo json_encode(__('project_api_scopes_required')); ?>);
                return;
            }
            // Mock: backend would POST to /v1/projects/:id/keys and return the
            // full secret ONCE. We just fake it here.
            var fakeSecret = 'ysk_live_' + Math.random().toString(36).substring(2, 10) + '_' +
                             Math.random().toString(36).substring(2, 14) +
                             Math.random().toString(36).substring(2, 14);
            var revealValue = document.getElementById('apiKeyRevealValue');
            if (revealValue) revealValue.textContent = fakeSecret;
            DashModal.close(document.getElementById('apiKeyCreateModal'));
            setTimeout(function () {
                DashModal.open('apiKeyRevealModal');
                form.reset();
            }, 180);
        });
    }

    /* ───── Regenerate (dropdown item) ───── */
    document.querySelectorAll('[data-api-regenerate]').forEach(function (btn) {
        btn.addEventListener('click', function () {
            var name = btn.getAttribute('data-key-name');
            if (window.DashToast) DashToast.show('success', '', <?php echo json_encode(__('project_api_regenerate_done')); ?> + ' — ' + name);
            var fakeSecret = 'ysk_live_' + Math.random().toString(36).substring(2, 10) + '_' +
                             Math.random().toString(36).substring(2, 22);
            var revealValue = document.getElementById('apiKeyRevealValue');
            if (revealValue) revealValue.textContent = fakeSecret;
            setTimeout(function () {
                DashModal.open('apiKeyRevealModal');
            }, 200);
        });
    });

    /* ───── Revoke flow ───── */
    var revokeTarget = null;
    var revokeNameEl = document.getElementById('apiRevokeName');
    document.querySelectorAll('[data-api-revoke]').forEach(function (btn) {
        btn.addEventListener('click', function () {
            revokeTarget = btn.closest('tr');
            if (revokeNameEl) revokeNameEl.textContent = btn.getAttribute('data-key-name') || '';
            DashModal.open('apiKeyRevokeModal');
        });
    });

    var revokeConfirm = document.getElementById('apiKeyRevokeConfirm');
    if (revokeConfirm) {
        revokeConfirm.addEventListener('click', function () {
            if (revokeTarget) {
                // Flip the status column + hide the Revoke menu item.
                revokeTarget.setAttribute('data-status', 'revoked');
                var statusBadge = revokeTarget.querySelector('td:nth-last-child(2) .db-badge');
                if (statusBadge) {
                    statusBadge.className = 'db-badge db-badge--cancelled';
                    statusBadge.textContent = <?php echo json_encode(__('project_api_status_revoked')); ?>;
                }
                var menuItem = revokeTarget.querySelector('[data-api-revoke]');
                if (menuItem && menuItem.previousElementSibling) {
                    menuItem.previousElementSibling.remove();
                }
                if (menuItem) menuItem.remove();
            }
            DashModal.close(document.getElementById('apiKeyRevokeModal'));
            if (window.DashToast) DashToast.show('success', '', <?php echo json_encode(__('project_api_revoke_done')); ?>);
            revokeTarget = null;
        });
    }

    /* ───── Copy curl sample code ───── */
    document.querySelectorAll('[data-copy-code]').forEach(function (btn) {
        btn.addEventListener('click', function () {
            var codeEl = document.getElementById(btn.getAttribute('data-copy-code'));
            if (!codeEl) return;
            DashCopy(btn, codeEl.textContent);
        });
    });
});
</script>

<div class="db-toast-container" id="toastContainer"></div>
<?php require_once __DIR__ . '/../../../layouts/footer.php'; ?>
