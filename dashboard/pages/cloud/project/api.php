<?php
/**
 * YottaSrc Dashboard — Project API Access
 * ==========================================
 * API keys + documentation + integration info.
 * Currently "under construction" (matches reference screenshot).
 */

require_once __DIR__ . '/../../../layouts/config.php';
require_once __DIR__ . '/../../../layouts/project-helpers.php';

$project_id         = $_GET['id'] ?? '';
$current_project    = cloud_require_project($project_id);
$project_nav_active = 'api';

$page_title = __('project_page_api') . ' — #' . $current_project['id'] . ' — ' . SITE_NAME;
$breadcrumbs_data = [
    ['label' => __('nav_dashboard'),       'url' => DASH_BASE_PATH . '/'],
    ['label' => __('cloud_title'),          'url' => DASH_BASE_PATH . '/pages/cloud/index.php'],
    ['label' => '#' . $current_project['id'] . ' - ' . $current_project['name'], 'url' => cloud_project_url('servers', $current_project['id'])],
    ['label' => __('project_page_api'),     'url' => null],
];

require_once __DIR__ . '/../../../layouts/project-shell.php';

$page_state = $_GET['state'] ?? 'active';
?>

<div class="db-proj-header">
    <div class="db-proj-header__title">
        <h1 class="db-proj-header__heading">
            <i class="fas fa-code" style="color:var(--brand-accent); font-size:0.9em; margin-inline-end:6px;"></i>
            <?php echo e(__('project_api_title')); ?>
        </h1>
    </div>
</div>

<?php if ($page_state === 'error'): ?>
    <div class="db-card"><?php $error_retry = true; include __DIR__ . '/../../../components/error-state.php'; ?></div>

<?php elseif ($page_state === 'loading'): ?>
    <div class="db-card">
        <div class="db-card-body" style="padding:24px;">
            <div class="db-skeleton db-skeleton--heading" style="width:30%; margin-bottom:18px;"></div>
            <div class="db-skeleton db-skeleton--text" style="width:95%; margin-bottom:10px;"></div>
            <div class="db-skeleton db-skeleton--text" style="width:88%; margin-bottom:10px;"></div>
            <div class="db-skeleton db-skeleton--text" style="width:70%; margin-bottom:20px;"></div>
            <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(160px, 1fr)); gap:10px; margin-bottom:20px;">
                <?php for ($i = 0; $i < 5; $i++): ?>
                <div class="db-skeleton" style="height:44px; border-radius:var(--radius-sm);"></div>
                <?php endfor; ?>
            </div>
            <div class="db-skeleton" style="height:80px; border-radius:var(--radius-md);"></div>
        </div>
    </div>
    <div class="db-card" style="margin-top:14px;">
        <div class="db-card-body" style="padding:24px;">
            <div class="db-skeleton db-skeleton--heading" style="width:25%; margin-bottom:16px;"></div>
            <div style="display:grid; grid-template-columns:repeat(2, 1fr); gap:14px;">
                <?php for ($i = 0; $i < 4; $i++): ?>
                <div class="db-skeleton" style="height:92px; border-radius:var(--radius-md);"></div>
                <?php endfor; ?>
            </div>
        </div>
    </div>

<?php else: ?>

<!-- Description card -->
<div class="db-card db-api-card">
    <div class="db-card-header">
        <h3 class="db-card-title">
            <i class="fas fa-code"></i>
            <?php echo e(__('project_api_intro_title')); ?>
        </h3>
    </div>
    <div class="db-card-body">
        <p class="db-api-desc">
            <?php echo __('project_api_intro_desc'); ?>
        </p>

        <!-- Integration logos -->
        <div class="db-api-integrations">
            <div class="db-api-integration">
                <i class="fas fa-globe"></i>
                <span>HTTPS / REST</span>
            </div>
            <div class="db-api-integration">
                <i class="fas fa-code"></i>
                <span>JSON Format</span>
            </div>
            <div class="db-api-integration">
                <i class="fas fa-puzzle-piece"></i>
                <span>WHMCS / Blesta</span>
            </div>
            <div class="db-api-integration">
                <i class="fab fa-php"></i>
                <span>PHP Library</span>
            </div>
            <div class="db-api-integration">
                <i class="fab fa-python"></i>
                <span>Python Library</span>
            </div>
        </div>

        <!-- Under construction notice -->
        <div class="db-api-notice">
            <div class="db-api-notice__icon">
                <i class="fas fa-hammer"></i>
            </div>
            <div class="db-api-notice__body">
                <div class="db-api-notice__title"><?php echo e(__('project_api_construction_title')); ?></div>
                <p class="db-api-notice__text">
                    <?php echo __('project_api_construction_desc'); ?>
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Preview card (coming soon features) -->
<div class="db-card db-api-preview">
    <div class="db-card-header">
        <h3 class="db-card-title">
            <i class="fas fa-wand-magic-sparkles"></i>
            <?php echo e(__('project_api_preview_title')); ?>
        </h3>
    </div>
    <div class="db-card-body">
        <div class="db-api-feature-grid">
            <div class="db-api-feature">
                <div class="db-api-feature__icon"><i class="fas fa-key"></i></div>
                <div class="db-api-feature__body">
                    <h4 class="db-api-feature__title"><?php echo e(__('project_api_feat_keys_title')); ?></h4>
                    <p class="db-api-feature__desc"><?php echo e(__('project_api_feat_keys_desc')); ?></p>
                </div>
                <span class="db-api-feature__badge"><?php echo e(__('common_soon')); ?></span>
            </div>

            <div class="db-api-feature">
                <div class="db-api-feature__icon"><i class="fas fa-server"></i></div>
                <div class="db-api-feature__body">
                    <h4 class="db-api-feature__title"><?php echo e(__('project_api_feat_servers_title')); ?></h4>
                    <p class="db-api-feature__desc"><?php echo e(__('project_api_feat_servers_desc')); ?></p>
                </div>
                <span class="db-api-feature__badge"><?php echo e(__('common_soon')); ?></span>
            </div>

            <div class="db-api-feature">
                <div class="db-api-feature__icon"><i class="fas fa-bolt"></i></div>
                <div class="db-api-feature__body">
                    <h4 class="db-api-feature__title"><?php echo e(__('project_api_feat_webhooks_title')); ?></h4>
                    <p class="db-api-feature__desc"><?php echo e(__('project_api_feat_webhooks_desc')); ?></p>
                </div>
                <span class="db-api-feature__badge"><?php echo e(__('common_soon')); ?></span>
            </div>

            <div class="db-api-feature">
                <div class="db-api-feature__icon"><i class="fas fa-chart-line"></i></div>
                <div class="db-api-feature__body">
                    <h4 class="db-api-feature__title"><?php echo e(__('project_api_feat_analytics_title')); ?></h4>
                    <p class="db-api-feature__desc"><?php echo e(__('project_api_feat_analytics_desc')); ?></p>
                </div>
                <span class="db-api-feature__badge"><?php echo e(__('common_soon')); ?></span>
            </div>
        </div>

        <!-- Notify me button -->
        <div class="db-api-notify">
            <button class="db-btn db-btn--primary" onclick="DashToast.show('success','','<?php echo e(__('project_api_notify_success')); ?>')">
                <i class="fas fa-bell"></i>
                <?php echo e(__('project_api_notify_btn')); ?>
            </button>
            <a href="#" onclick="event.preventDefault(); DashToast.show('info','','Changelog is coming soon.')" class="db-api-changelog-link">
                <i class="fas fa-newspaper"></i>
                <?php echo e(__('project_api_changelog_link')); ?>
            </a>
        </div>
    </div>
</div>

<?php endif; ?>

<div class="db-toast-container" id="toastContainer"></div>
<?php require_once __DIR__ . '/../../../layouts/footer.php'; ?>
