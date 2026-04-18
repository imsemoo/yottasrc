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

/* ══════════════════════════════════════════════════════════════════════
   ███  PROJECT API  ·  NO MOCK DATA NEEDED                         ███
   ══════════════════════════════════════════════════════════════════════
   This page is a "coming soon" announcement for the API feature.
   It only reads $page_state from the URL (for design states) and
   renders static marketing copy. No DB data to wire — when the API
   launches, replace this file entirely with the real API config UI.
   ══════════════════════════════════════════════════════════════════════ */
$page_state = $_GET['state'] ?? 'active';
?>

<?php
$hero_eyebrow = __('project_pro_eyebrow_api');
$hero_title   = $current_project['name'];
$hero_sub     = __('project_pro_sub_api');
$hero_stats   = null;
$hero_actions = '<button type="button" class="ds-btn ds-btn--primary" onclick="DashToast.show(\'success\',\'\',' . json_encode(__('project_api_notify_success')) . ')"><i class="fas fa-bell"></i> <span>' . e(__('project_api_notify_btn')) . '</span></button>';
include __DIR__ . '/../../../components/project-pro-hero.php';
unset($hero_eyebrow, $hero_title, $hero_sub, $hero_stats, $hero_actions);
?>

<?php if ($page_state === 'error'): ?>
    <div class="db-card"><?php $error_retry = true; include __DIR__ . '/../../../components/error-state.php'; ?></div>

<?php elseif ($page_state === 'loading'): ?>
    <div class="db-card">
        <div class="db-card-body db-card-body--lg">
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
    <div class="db-card db-mt-sm">
        <div class="db-card-body db-card-body--lg">
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

<!-- Roadmap timeline (replaces old feature grid) -->
<div class="db-api-roadmap">
    <div class="db-api-roadmap__head">
        <h3 class="db-api-roadmap__title">
            <i class="fas fa-route"></i>
            <?php echo e(__('project_api_roadmap_title')); ?>
        </h3>
        <p class="db-api-roadmap__sub"><?php echo e(__('project_api_roadmap_sub')); ?></p>
    </div>

    <ol class="db-api-roadmap__list">
        <?php
        $roadmap = [
            ['icon' => 'fa-key',         'title' => __('project_api_feat_keys_title'),     'desc' => __('project_api_feat_keys_desc'),     'status' => 'in_progress', 'eta' => __('project_api_eta_next')],
            ['icon' => 'fa-server',      'title' => __('project_api_feat_servers_title'),  'desc' => __('project_api_feat_servers_desc'),  'status' => 'in_progress', 'eta' => __('project_api_eta_next')],
            ['icon' => 'fa-bolt',        'title' => __('project_api_feat_webhooks_title'), 'desc' => __('project_api_feat_webhooks_desc'), 'status' => 'planned',     'eta' => __('project_api_eta_soon')],
            ['icon' => 'fa-chart-line',  'title' => __('project_api_feat_analytics_title'),'desc' => __('project_api_feat_analytics_desc'),'status' => 'planned',     'eta' => __('project_api_eta_later')],
        ];
        foreach ($roadmap as $i => $item):
        ?>
        <li class="db-api-roadmap__item" data-status="<?php echo e($item['status']); ?>">
            <div class="db-api-roadmap__dot">
                <i class="fas <?php echo e($item['icon']); ?>"></i>
            </div>
            <div class="db-api-roadmap__card">
                <div class="db-api-roadmap__card-head">
                    <h4 class="db-api-roadmap__card-title"><?php echo e($item['title']); ?></h4>
                    <span class="db-api-roadmap__status db-api-roadmap__status--<?php echo e($item['status']); ?>">
                        <?php echo e($item['status'] === 'in_progress' ? __('project_api_status_in_progress') : __('project_api_status_planned')); ?>
                    </span>
                </div>
                <p class="db-api-roadmap__card-desc"><?php echo e($item['desc']); ?></p>
                <div class="db-api-roadmap__eta">
                    <i class="fas fa-clock"></i> <?php echo e($item['eta']); ?>
                </div>
            </div>
        </li>
        <?php endforeach; ?>
    </ol>

    <!-- Notify me + changelog -->
    <div class="db-api-roadmap__cta-row">
        <button class="db-btn db-btn--primary" onclick="DashToast.show('success','','<?php echo e(__('project_api_notify_success')); ?>')">
            <i class="fas fa-bell"></i>
            <?php echo e(__('project_api_notify_btn')); ?>
        </button>
        <a href="#" onclick="event.preventDefault(); DashToast.show('info','','Changelog is coming soon.')" class="db-api-roadmap__link">
            <i class="fas fa-newspaper"></i>
            <?php echo e(__('project_api_changelog_link')); ?>
        </a>
    </div>
</div>

<?php endif; ?>

<div class="db-toast-container" id="toastContainer"></div>
<?php require_once __DIR__ . '/../../../layouts/footer.php'; ?>
