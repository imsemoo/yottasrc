<?php
/**
 * YottaSrc Dashboard — Open New Ticket
 * ======================================
 * Notices → Form (department, service, subject, priority, message, attachments) → Submit
 */

$page_title = null;
$breadcrumbs_data = null;

require_once __DIR__ . '/../../layouts/config.php';

$page_title = __('ticket_new_title') . ' — ' . SITE_NAME;
$breadcrumbs_data = [
    ['label' => __('nav_dashboard'), 'url' => DASH_BASE_PATH . '/'],
    ['label' => __('tickets_title'), 'url' => DASH_BASE_PATH . '/pages/support/index.php'],
    ['label' => __('ticket_new_title'), 'url' => null],
];

require_once __DIR__ . '/../../layouts/shell.php';

$departments = [
    ['id' => 'technical', 'name' => __('dept_technical')],
    ['id' => 'billing',   'name' => __('dept_billing')],
    ['id' => 'sales',     'name' => __('dept_sales')],
    ['id' => 'abuse',     'name' => __('dept_abuse')],
];

$services = [
    ['id' => 0,    'name' => __('ticket_new_service_none')],
    ['id' => 1041, 'name' => 'Business Pro Hosting — yottasrc.com'],
    ['id' => 1038, 'name' => 'Starter VPS — api.yottasrc.com'],
    ['id' => 1035, 'name' => 'Reseller Basic — clients.designhub.io'],
    ['id' => 1029, 'name' => 'Enterprise Dedicated — erp.companyxyz.com'],
];

$priorities = [
    ['id' => 'low',    'name' => __('ticket_priority_low')],
    ['id' => 'medium', 'name' => __('ticket_priority_medium')],
    ['id' => 'high',   'name' => __('ticket_priority_high')],
    ['id' => 'urgent', 'name' => __('ticket_priority_urgent')],
];
?>

<?php
$ph_title = __('ticket_new_title');
$ph_desc = __('ticket_new_desc');
$ph_actions = '';
include __DIR__ . '/../../components/page-header.php';
?>

<!-- Grouped Notices Panel -->
<div class="db-notice-panel">
    <div class="db-notice-panel__header">
        <i class="fas fa-circle-info"></i>
        <div class="db-notice-panel__title"><?php echo e(__('ticket_new_notices_title')); ?></div>
    </div>
    <ul class="db-notice-panel__list">
        <li class="db-notice-panel__item db-notice-panel__item--warning">
            <i class="fas fa-triangle-exclamation"></i>
            <span><?php echo __('ticket_new_notice1'); ?></span>
        </li>
        <li class="db-notice-panel__item db-notice-panel__item--danger">
            <i class="fas fa-circle-exclamation"></i>
            <span><?php echo e(__('ticket_new_notice2')); ?></span>
        </li>
        <li class="db-notice-panel__item db-notice-panel__item--info">
            <i class="fas fa-clock"></i>
            <span><strong><?php echo e(__('ticket_new_business_hours')); ?></strong> <?php echo e(__('ticket_new_business_time')); ?></span>
        </li>
    </ul>
</div>

<!-- Ticket Form -->
<div class="db-card">
    <div class="db-card-body">

        <form class="db-form">
            <!-- Row: Department + Priority (2 columns) -->
            <div class="db-form-row">
                <div class="db-form-group">
                    <label class="db-form-label"><?php echo e(__('ticket_new_department')); ?></label>
                    <select class="db-select">
                        <?php foreach ($departments as $d): ?>
                        <option value="<?php echo e($d['id']); ?>"><?php echo e($d['name']); ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="db-form-group">
                    <label class="db-form-label"><?php echo e(__('ticket_new_priority')); ?></label>
                    <select class="db-select">
                        <?php foreach ($priorities as $p): ?>
                        <option value="<?php echo e($p['id']); ?>" <?php echo $p['id'] === 'medium' ? 'selected' : ''; ?>><?php echo e($p['name']); ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>

            <!-- Related Service (searchable combobox) -->
            <div class="db-form-group">
                <label class="db-form-label"><?php echo e(__('ticket_new_service')); ?></label>
                <div class="db-combobox" data-combobox>
                    <button type="button" class="db-combobox__input" data-combobox-trigger>
                        <i class="fas fa-magnifying-glass db-combobox__icon"></i>
                        <span class="db-combobox__value" data-combobox-label><?php echo e($services[0]['name']); ?></span>
                        <i class="fas fa-chevron-down db-combobox__caret"></i>
                    </button>
                    <input type="hidden" name="service_id" value="<?php echo e($services[0]['id']); ?>" data-combobox-value>
                    <div class="db-combobox__panel" data-combobox-panel>
                        <div class="db-combobox__search">
                            <i class="fas fa-magnifying-glass"></i>
                            <input type="text" placeholder="<?php echo e(__('ticket_new_service_search')); ?>" data-combobox-search>
                        </div>
                        <div class="db-combobox__list" data-combobox-list>
                            <?php foreach ($services as $s): ?>
                            <button type="button" class="db-combobox__option" data-combobox-option data-value="<?php echo e($s['id']); ?>" data-label="<?php echo e($s['name']); ?>">
                                <i class="fas fa-microchip"></i>
                                <span><?php echo e($s['name']); ?></span>
                            </button>
                            <?php endforeach; ?>
                            <div class="db-combobox__empty" data-combobox-empty><?php echo e(__('ticket_new_service_none_found')); ?></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Message -->
            <div class="db-form-group">
                <label class="db-form-label"><?php echo e(__('ticket_new_message')); ?></label>
                <textarea class="db-input db-textarea" rows="10" placeholder="<?php echo e(__('ticket_new_message_placeholder')); ?>"></textarea>
            </div>

            <!-- File Upload -->
            <div class="db-form-group">
                <label class="db-form-label"><?php echo e(__('ticket_new_attachments')); ?></label>
                <div class="db-file-upload">
                    <div class="db-file-upload__area">
                        <i class="fas fa-cloud-arrow-up"></i>
                        <span class="db-file-upload__text"><?php echo e(__('ticket_upload_hint')); ?></span>
                        <input type="file" multiple accept="image/*,.pdf,.zip,.doc,.docx,.txt" class="db-file-upload__input">
                    </div>
                </div>
            </div>

            <!-- Submit -->
            <div class="db-form-actions">
                <button type="button" class="db-btn db-btn--primary" onclick="DashToast.show('success','','<?php echo e(__('ticket_new_submit_success')); ?>')">
                    <i class="fas fa-paper-plane"></i> <?php echo e(__('ticket_new_submit')); ?>
                </button>
            </div>
        </form>
    </div>
</div>

<div class="db-toast-container" id="toastContainer"></div>

<script>
(function(){
    document.querySelectorAll('[data-combobox]').forEach(function(root){
        var trigger = root.querySelector('[data-combobox-trigger]');
        var panel   = root.querySelector('[data-combobox-panel]');
        var search  = root.querySelector('[data-combobox-search]');
        var list    = root.querySelector('[data-combobox-list]');
        var empty   = root.querySelector('[data-combobox-empty]');
        var label   = root.querySelector('[data-combobox-label]');
        var value   = root.querySelector('[data-combobox-value]');
        var options = Array.prototype.slice.call(list.querySelectorAll('[data-combobox-option]'));

        function open() {
            root.classList.add('is-open');
            setTimeout(function(){ search.focus(); search.select(); }, 20);
        }
        function close() { root.classList.remove('is-open'); }
        function toggle() { root.classList.contains('is-open') ? close() : open(); }

        function filter() {
            var q = (search.value || '').toLowerCase().trim();
            var shown = 0;
            options.forEach(function(o){
                var lbl = (o.getAttribute('data-label') || '').toLowerCase();
                var show = !q || lbl.indexOf(q) !== -1;
                o.style.display = show ? '' : 'none';
                if (show) shown++;
            });
            empty.style.display = shown === 0 ? '' : 'none';
        }

        function select(opt) {
            var v = opt.getAttribute('data-value');
            var l = opt.getAttribute('data-label');
            value.value = v;
            label.textContent = l;
            options.forEach(function(o){ o.classList.toggle('is-selected', o === opt); });
            close();
        }

        trigger.addEventListener('click', function(e){ e.preventDefault(); toggle(); });
        search.addEventListener('input', filter);
        options.forEach(function(o){
            o.addEventListener('click', function(e){ e.preventDefault(); select(o); });
        });
        document.addEventListener('click', function(e){
            if (!root.contains(e.target)) close();
        });
        document.addEventListener('keydown', function(e){
            if (e.key === 'Escape' && root.classList.contains('is-open')) close();
        });
    });
})();
</script>

<?php require_once __DIR__ . '/../../layouts/footer.php'; ?>
