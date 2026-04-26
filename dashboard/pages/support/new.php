<?php
/**
 * YottaSrc Dashboard — Open New Ticket
 * ======================================
 * Notices → Form (department, service, subject, priority, message, attachments) → Submit
 */

$page_title = null;
$breadcrumbs_data = null;

require_once __DIR__ . '/../../layouts/config.php';

$page_title = __('nav_new_ticket') . ' — ' . SITE_NAME;
$breadcrumbs_data = [
    ['label' => __('nav_dashboard'), 'url' => DASH_BASE_PATH . '/'],
    ['label' => __('tickets_title'), 'url' => DASH_BASE_PATH . '/pages/support/index.php'],
    ['label' => __('nav_new_ticket'), 'url' => null],
];

require_once __DIR__ . '/../../layouts/shell.php';

/* ══════════════════════════════════════════════════════════════════════
   ███  NEW TICKET  ·  MOCK DATA BLOCK  (single source of truth)  ███
   ══════════════════════════════════════════════════════════════════════
   BACKEND TEAM — PLEASE READ:

   Three dropdowns on the New Ticket form. All three are static /
   semi-static catalogs — replace with DB/config lookups.
   ══════════════════════════════════════════════════════════════════════ */

/* ──────────────────────────────────────────
   DEPARTMENTS  (select options — ticket routing)
   Extend when adding a new department.
   ────────────────────────────────────────── */
$departments = [
    ['id' => 'technical', 'name' => __('dept_technical')],
    ['id' => 'billing',   'name' => __('dept_billing')],
    ['id' => 'sales',     'name' => __('dept_sales')],
    ['id' => 'abuse',     'name' => __('dept_abuse')],
];

/* ──────────────────────────────────────────
   SERVICES  (select options — "Related Service")
   ──────────────────────────────────────────
   • id = 0 → "No related service" (always first)
   • Other rows come from the user's active services.
   ────────────────────────────────────────── */
$services = [
    ['id' => 0,    'name' => __('ticket_new_service_none')],
    ['id' => 1041, 'name' => 'Business Pro Hosting — yottasrc.com'],
    ['id' => 1038, 'name' => 'Starter VPS — api.yottasrc.com'],
    ['id' => 1035, 'name' => 'Reseller Basic — clients.designhub.io'],
    ['id' => 1029, 'name' => 'Enterprise Dedicated — erp.companyxyz.com'],
];

/* ──────────────────────────────────────────
   PRIORITIES  (select options — SLA routing)
   ────────────────────────────────────────── */
$priorities = [
    ['id' => 'low',    'name' => __('bug_severity_low')],
    ['id' => 'medium', 'name' => __('bug_severity_medium')],
    ['id' => 'high',   'name' => __('bug_severity_high')],
    ['id' => 'urgent', 'name' => __('ticket_priority_urgent')],
];

/* ══════════════  END OF MOCK DATA  ══════════════ */
?>

<?php
$ph_title = __('nav_new_ticket');
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
                <label class="db-form-label"><?php echo e(__('ticket_attachments')); ?></label>
                <div class="db-file-upload" id="ticketAttachments">
                    <label class="db-file-upload__area" for="ticketAttachmentsInput">
                        <i class="fas fa-cloud-arrow-up"></i>
                        <span class="db-file-upload__text"><?php echo e(__('ticket_upload_hint')); ?></span>
                        <input type="file" id="ticketAttachmentsInput" name="attachments[]" multiple
                               accept="image/*,.pdf,.zip,.doc,.docx,.txt" class="db-file-upload__input">
                    </label>
                    <ul class="db-file-upload__list" id="ticketAttachmentsList" hidden></ul>
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
/* ═══════════════════════════════════════════
   TICKET ATTACHMENTS — selected-files list + drag/drop + remove
   ═══════════════════════════════════════════ */
(function () {
    var wrap  = document.getElementById('ticketAttachments');
    var input = document.getElementById('ticketAttachmentsInput');
    var list  = document.getElementById('ticketAttachmentsList');
    if (!wrap || !input || !list) return;

    var maxSize = 10 * 1024 * 1024; // 10MB per file

    function fileIcon(name) {
        var ext = (name.split('.').pop() || '').toLowerCase();
        if (['png','jpg','jpeg','gif','webp','svg'].indexOf(ext) !== -1) return 'fa-image';
        if (['pdf'].indexOf(ext) !== -1)                                 return 'fa-file-pdf';
        if (['zip','rar','7z'].indexOf(ext) !== -1)                      return 'fa-file-zipper';
        if (['doc','docx'].indexOf(ext) !== -1)                          return 'fa-file-word';
        if (['txt','log','md'].indexOf(ext) !== -1)                      return 'fa-file-lines';
        return 'fa-file';
    }

    function formatSize(bytes) {
        if (!bytes) return '0 B';
        var units = ['B', 'KB', 'MB', 'GB'];
        var i = Math.floor(Math.log(bytes) / Math.log(1024));
        return (bytes / Math.pow(1024, i)).toFixed(i === 0 ? 0 : 1) + ' ' + units[i];
    }

    function render() {
        list.innerHTML = '';
        var files = Array.prototype.slice.call(input.files || []);
        if (!files.length) {
            list.hidden = true;
            return;
        }
        list.hidden = false;
        files.forEach(function (f, idx) {
            var li = document.createElement('li');
            li.className = 'db-file-upload__item';
            li.innerHTML =
                '<span class="db-file-upload__item-icon"><i class="fas ' + fileIcon(f.name) + '"></i></span>' +
                '<span class="db-file-upload__item-info">' +
                    '<span class="db-file-upload__item-name"></span>' +
                    '<span class="db-file-upload__item-size"></span>' +
                '</span>' +
                '<button type="button" class="db-file-upload__item-remove" aria-label="Remove"><i class="fas fa-xmark"></i></button>';
            li.querySelector('.db-file-upload__item-name').textContent = f.name;
            li.querySelector('.db-file-upload__item-size').textContent = formatSize(f.size);
            li.querySelector('.db-file-upload__item-remove').addEventListener('click', function (e) {
                e.preventDefault();
                e.stopPropagation();
                removeFile(idx);
            });
            list.appendChild(li);
        });
    }

    function rebuildInputFiles(nextFiles) {
        // DataTransfer lets us reassign FileList contents — needed because
        // input.files is a read-only FileList.
        var dt = new DataTransfer();
        nextFiles.forEach(function (f) { dt.items.add(f); });
        input.files = dt.files;
    }

    function addFiles(newFiles) {
        var existing = Array.prototype.slice.call(input.files || []);
        var combined = existing.slice();
        var rejectedBig = 0;
        newFiles.forEach(function (f) {
            if (f.size > maxSize) { rejectedBig++; return; }
            // De-dup by name + size
            var dup = combined.some(function (x) { return x.name === f.name && x.size === f.size; });
            if (!dup) combined.push(f);
        });
        rebuildInputFiles(combined);
        render();
        if (rejectedBig && window.DashToast) {
            DashToast.show('warning', '', <?php echo json_encode(__('ticket_attach_too_big')); ?>);
        }
    }

    function removeFile(idx) {
        var files = Array.prototype.slice.call(input.files || []);
        files.splice(idx, 1);
        rebuildInputFiles(files);
        render();
    }

    input.addEventListener('change', function () {
        // Browsers replace input.files on each pick — preserve previous selection
        // by adding only the newly-picked files on top.
        var picked = Array.prototype.slice.call(input.files || []);
        // Reset so we can programmatically decide the final file list.
        rebuildInputFiles([]);
        addFiles(picked);
    });

    // Drag & drop onto the dashed area
    var area = wrap.querySelector('.db-file-upload__area');
    ['dragenter', 'dragover'].forEach(function (ev) {
        area.addEventListener(ev, function (e) {
            e.preventDefault();
            e.stopPropagation();
            wrap.classList.add('is-dragover');
        });
    });
    ['dragleave', 'drop'].forEach(function (ev) {
        area.addEventListener(ev, function (e) {
            e.preventDefault();
            e.stopPropagation();
            wrap.classList.remove('is-dragover');
        });
    });
    area.addEventListener('drop', function (e) {
        if (e.dataTransfer && e.dataTransfer.files && e.dataTransfer.files.length) {
            addFiles(Array.prototype.slice.call(e.dataTransfer.files));
        }
    });
})();

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
