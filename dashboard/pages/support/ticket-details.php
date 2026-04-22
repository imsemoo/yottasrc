<?php
/**
 * YottaSrc Dashboard — Ticket Details
 * =====================================
 * Structure: Header → Grid [Chat Container | Sidebar]
 * Chat container: messages + reply box as ONE block
 */

$page_title = null;
$breadcrumbs_data = null;
$nav_active_override = 'support';

require_once __DIR__ . '/../../layouts/config.php';

$ticket_id = $_GET['id'] ?? 'ENH-796520';

$page_title = __('ticket_detail_title') . ' — ' . SITE_NAME;
$breadcrumbs_data = [
    ['label' => __('nav_dashboard'), 'url' => DASH_BASE_PATH . '/'],
    ['label' => __('tickets_title'), 'url' => DASH_BASE_PATH . '/pages/support/index.php'],
    ['label' => '#' . e($ticket_id), 'url' => null],
];

require_once __DIR__ . '/../../layouts/shell.php';

/* ══════════════════════════════════════════════════════════════════════
   ███  TICKET DETAILS  ·  MOCK DATA BLOCK  (single source of truth)  ███
   ══════════════════════════════════════════════════════════════════════
   BACKEND TEAM — PLEASE READ:

   This page shows a single support ticket ($ticket_id from URL) —
   header meta, chat thread with attachments, and a flat attachments
   list for the sidebar.

   Wiring real data:
     • Look up $ticket_id in DB; populate $ticket + $messages.
     • $attachments is the de-duped flat list across ALL messages,
       shown in the sidebar. Can be derived from $messages if preferred.
     • $status_badge is a static mapping (status → badge color).
     • $is_open is AUTO-computed — do not edit manually.
   ══════════════════════════════════════════════════════════════════════ */

/* ──────────────────────────────────────────
   PAGE STATE
   ──────────────────────────────────────────
   'active' | 'loading' | 'error'
   ────────────────────────────────────────── */
$page_state = $_GET['state'] ?? 'active';

/* ──────────────────────────────────────────
   TICKET HEADER
   ──────────────────────────────────────────
   • id            → ticket id (from URL)
   • subject       → full subject line (already includes service info)
   • department    → 'Technical' | 'Billing' | 'Sales' | 'Abuse'
   • status        → 'new' | 'open' | 'answered' | 'customer_reply'
                     | 'in_progress' | 'on_hold' | 'closed' | 'solved'
   • priority      → 'low' | 'medium' | 'high' | 'urgent'
   • created       → relative time string
   • last_activity → relative time string
   • service       → linked service label (for sidebar service card)
   • service_url   → link to the service-details page
   ────────────────────────────────────────── */
$ticket = [
    'id'            => $ticket_id,
    'subject'       => 'Linux VPS/VDS | #151926 YTA6686328 107.161.168.236',
    'department'    => 'Technical',
    'status'        => 'answered',
    'priority'      => 'medium',
    'created'       => '11 minutes ago',
    'last_activity' => '7 minutes ago',
    'service'       => 'Linux VPS/VDS | #151926 YTA6686328 107.161.168.236',
    'service_url'   => DASH_BASE_PATH . '/pages/services/service-details.php?id=151926',
];

/* ──────────────────────────────────────────
   MESSAGES (chat thread, oldest → newest)
   ──────────────────────────────────────────
   Each message:
   • author       → display name
   • role         → 'customer' | 'staff'  (drives bubble style + side)
   • time         → relative time string
   • body         → plain text (newlines → <br> via nl2br)
   • attachments  → array; each:
       - name  → file name (used for download + icon lookup)
       - type  → 'image' | 'file'
       - size  → human-readable size string
       - url   → download URL (or lightbox src for images)
   ────────────────────────────────────────── */
$messages = [
    [
        'author' => 'islam dev', 'role' => 'customer', 'time' => '11 minutes ago',
        'body' => "Linux VPS/VDS YTA6686328 107.161.168.236\nStatus: Active\nService ID: #151926\n\nHi team,\n\nI'm experiencing connection issues with my VPS. The server console is showing intermittent CPU spikes and SSH keeps dropping. I've attached a few screenshots showing the error messages and the resource graphs.",
        'attachments' => [
            ['name' => 'console-error.png',   'type' => 'image', 'size' => '312 KB', 'url' => 'https://picsum.photos/seed/yotta-console/1280/800'],
            ['name' => 'cpu-spike-graph.png', 'type' => 'image', 'size' => '198 KB', 'url' => 'https://picsum.photos/seed/yotta-cpu/1280/800'],
            ['name' => 'ssh-disconnect.png',  'type' => 'image', 'size' => '256 KB', 'url' => 'https://picsum.photos/seed/yotta-ssh/1280/800'],
            ['name' => 'system-logs.txt',     'type' => 'file',  'size' => '4.7 KB', 'url' => '#'],
        ],
    ],
    [
        'author' => 'Florin G.', 'role' => 'staff', 'time' => '7 minutes ago',
        'body' => "Hello,\n\nThanks for reaching out — we've taken a look at your VPS and identified the cause of the CPU spikes. It appears to be a runaway cron job from a recent package update.\n\nWe've attached a screenshot of the recommended fix and a quick PDF guide. Please let us know if you have any further questions.\n\n---\nBest regards,\nYottaSrc Support Team",
        'attachments' => [
            ['name' => 'recommended-fix.png', 'type' => 'image', 'size' => '189 KB', 'url' => 'https://picsum.photos/seed/yotta-fix/1280/800'],
            ['name' => 'fix-guide.pdf',       'type' => 'file',  'size' => '118 KB', 'url' => '#'],
        ],
    ],
];

/* ──────────────────────────────────────────
   SIDEBAR ATTACHMENTS (flat de-duped list)
   ──────────────────────────────────────────
   For real data, you can derive this from $messages.
   Shape matches message attachments exactly.
   ────────────────────────────────────────── */
$attachments = [
    ['name' => 'console-error.png',   'type' => 'image', 'size' => '312 KB', 'url' => 'https://picsum.photos/seed/yotta-console/1280/800'],
    ['name' => 'cpu-spike-graph.png', 'type' => 'image', 'size' => '198 KB', 'url' => 'https://picsum.photos/seed/yotta-cpu/1280/800'],
    ['name' => 'ssh-disconnect.png',  'type' => 'image', 'size' => '256 KB', 'url' => 'https://picsum.photos/seed/yotta-ssh/1280/800'],
    ['name' => 'recommended-fix.png', 'type' => 'image', 'size' => '189 KB', 'url' => 'https://picsum.photos/seed/yotta-fix/1280/800'],
    ['name' => 'system-logs.txt',     'type' => 'file',  'size' => '4.7 KB', 'url' => '#'],
    ['name' => 'fix-guide.pdf',       'type' => 'file',  'size' => '118 KB', 'url' => '#'],
];

/* ──────────────────────────────────────────
   STATUS → badge-class  mapping
   ────────────────────────────────────────── */
$status_badge = [
    'new'            => 'pending',
    'open'           => 'pending',
    'answered'       => 'active',
    'customer_reply' => 'unpaid',
    'in_progress'    => 'pending',
    'on_hold'        => 'suspended',
    'closed'         => 'cancelled',
    'solved'         => 'paid',
];

/* ══════════════  END OF MOCK DATA  ══════════════ */

// File extension → icon class (used for non-image attachments).
function ticket_file_icon($name) {
    $ext = strtolower(pathinfo($name, PATHINFO_EXTENSION));
    $map = ['pdf'=>'fa-file-pdf','doc'=>'fa-file-word','docx'=>'fa-file-word','xls'=>'fa-file-excel','xlsx'=>'fa-file-excel','zip'=>'fa-file-zipper','rar'=>'fa-file-zipper','txt'=>'fa-file-lines','log'=>'fa-file-lines'];
    return $map[$ext] ?? 'fa-file';
}

// Auto-computed: ticket is open if status isn't 'closed'/'solved'.
$is_open = ($ticket['status'] !== 'closed' && $ticket['status'] !== 'solved');
?>

<?php if ($page_state === 'error'): ?>
    <?php $ph_title = '#' . e($ticket_id); $ph_desc = ''; $ph_actions = ''; include __DIR__ . '/../../components/page-header.php'; ?>
    <div class="db-card"><?php $error_retry = true; include __DIR__ . '/../../components/error-state.php'; ?></div>
<?php elseif ($page_state === 'loading'): ?>
    <?php $ph_title = '#' . e($ticket_id); $ph_desc = ''; $ph_actions = ''; include __DIR__ . '/../../components/page-header.php'; ?>
    <!-- Compact ticket header (title + meta + actions) -->
    <?php $skel_hero_meta_chips = 3; $skel_hero_actions = 3; include __DIR__ . '/../../components/skeleton-hero.php'; ?>
    <!-- Two-column: left = chat thread (reply box + bubbles), right = sidebar (info + attachments) -->
    <?php
        $skel_tcol_body_slot = __DIR__ . '/../../components/skeleton-chat.php';
        $skel_chat_messages  = 5;
        $skel_tcol_side_btns = 0;
        $skel_tcol_side_info = 6;
        include __DIR__ . '/../../components/skeleton-two-col.php';
    ?>
<?php else: ?>

<!-- Compact Header -->
<div class="db-ticket-header">
    <div class="db-ticket-header__info">
        <h1 class="db-ticket-header__title">#<?php echo e($ticket['id']); ?> — <?php echo e($ticket['subject']); ?></h1>
        <div class="db-ticket-header__meta">
            <span class="db-badge db-badge--<?php echo e($status_badge[$ticket['status']] ?? 'pending'); ?>"><?php echo e(__('ticket_status_' . $ticket['status'])); ?></span>
            <span class="db-ticket-header__sep">·</span>
            <span><?php echo e($ticket['department']); ?></span>
            <span class="db-ticket-header__sep">·</span>
            <span><?php echo e($ticket['created']); ?></span>
        </div>
    </div>
    <div class="db-ticket-header__actions">
        <a href="<?php echo DASH_BASE_PATH; ?>/pages/support/index.php" class="db-btn db-btn--ghost db-btn--sm"><i class="fas fa-arrow-left"></i></a>
        <button class="db-btn db-btn--ghost db-btn--sm" onclick="location.reload()"><i class="fas fa-rotate-right"></i></button>
        <?php if ($is_open): ?>
        <button class="db-btn db-btn--danger db-btn--sm" onclick="DashModal.open('closeTicketModal')"><i class="fas fa-xmark"></i> <?php echo e(__('ticket_close')); ?></button>
        <?php else: ?>
        <button class="db-btn db-btn--primary db-btn--sm" onclick="DashToast.show('success','','Ticket reopened.')"><i class="fas fa-rotate-left"></i> <?php echo e(__('ticket_reopen')); ?></button>
        <?php endif; ?>
    </div>
</div>

<!-- Grid: Chat + Sidebar (sidebar col-3 equivalent) -->
<div class="db-ticket-grid">
    <!-- LEFT: Chat Container (reply on top, messages below) -->
    <div class="db-chat-container">
        <?php if ($is_open): ?>
        <!-- Reply (inside container, TOP) -->
        <div class="db-chat-reply db-chat-reply--top" id="chatReply">
            <div class="db-chat-reply__header">
                <div class="db-chat-reply__title"><i class="fas fa-reply"></i> <?php echo e(__('ticket_reply')); ?></div>
                <div class="db-chat-reply__hint"><?php echo e(__('ticket_reply_hint')); ?></div>
            </div>
            <div class="db-chat-reply__body" id="chatReplyDrop">
                <textarea id="chatReplyText" rows="4" placeholder="<?php echo e(__('ticket_reply_placeholder')); ?>"></textarea>
                <div class="db-chat-reply__dropzone" id="chatDropHint">
                    <i class="fas fa-cloud-arrow-up"></i>
                    <span class="db-chat-reply__drophint-text"><?php echo e(__('ticket_drop_hint')); ?></span>
                    <span class="db-chat-reply__drophint-release"><?php echo e(__('ticket_drop_release')); ?></span>
                </div>
                <div class="db-chat-reply__files" id="chatReplyFiles"></div>
            </div>
            <div class="db-chat-reply__footer">
                <label class="db-btn db-btn--ghost db-btn--sm" for="chatReplyFileInput"><i class="fas fa-paperclip"></i> <?php echo e(__('ticket_new_attachments')); ?></label>
                <input type="file" multiple id="chatReplyFileInput" class="db-hidden-file-input">
                <button class="db-btn db-btn--primary db-btn--sm" id="chatReplySend"><i class="fas fa-paper-plane"></i> <?php echo e(__('ticket_reply_send')); ?></button>
            </div>
        </div>
        <?php endif; ?>

        <!-- Messages -->
        <div class="db-chat-messages">
            <?php foreach ($messages as $msg): ?>
            <div class="db-chat-bubble db-chat-bubble--<?php echo e($msg['role']); ?>">
                <div class="db-chat-bubble__name"><?php echo e($msg['author']); ?></div>
                <div class="db-chat-bubble__content">
                    <div class="db-chat-bubble__text"><?php echo nl2br(e($msg['body'])); ?></div>
                    <?php if (!empty($msg['attachments'])):
                        $imgs = array_filter($msg['attachments'], fn($a) => ($a['type'] ?? '') === 'image');
                        $files = array_filter($msg['attachments'], fn($a) => ($a['type'] ?? '') !== 'image');
                    ?>
                    <?php if (!empty($imgs)): ?>
                    <div class="db-chat-bubble__thumbs">
                        <?php foreach ($imgs as $att): ?>
                        <button type="button" class="db-chat-bubble__thumb" data-lightbox-src="<?php echo e($att['url']); ?>" data-lightbox-name="<?php echo e($att['name']); ?>" title="<?php echo e($att['name']); ?>">
                            <img src="<?php echo e($att['url']); ?>" alt="<?php echo e($att['name']); ?>" onerror="this.parentNode.classList.add('db-chat-bubble__thumb--fallback'); this.remove();">
                            <span class="db-chat-bubble__thumb-fallback"><i class="fas fa-image"></i></span>
                            <span class="db-chat-bubble__thumb-name"><?php echo e($att['name']); ?></span>
                        </button>
                        <?php endforeach; ?>
                    </div>
                    <?php endif; ?>
                    <?php if (!empty($files)): ?>
                    <div class="db-chat-bubble__files">
                        <?php foreach ($files as $att): ?>
                        <a href="<?php echo e($att['url']); ?>" download class="db-chat-bubble__file" onclick="DashToast.show('success','','Downloading <?php echo e($att['name']); ?>...')">
                            <i class="fas <?php echo e(ticket_file_icon($att['name'])); ?>"></i>
                            <span><?php echo e($att['name']); ?></span>
                            <span class="db-chat-bubble__file-meta"><?php echo e($att['size']); ?></span>
                            <i class="fas fa-download db-chat-bubble__file-action"></i>
                        </a>
                        <?php endforeach; ?>
                    </div>
                    <?php endif; ?>
                    <?php endif; ?>
                </div>
                <div class="db-chat-bubble__time">
                    <?php if ($msg['role'] === 'staff'): ?><i class="fas fa-check-double"></i><?php endif; ?>
                    <?php echo e($msg['time']); ?>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- RIGHT: Sidebar (col-3 equivalent, narrower) -->
    <div class="db-ticket-sidebar">
        <div class="db-ticket-sidebar__section">
            <div class="db-ticket-sidebar__title"><?php echo e(__('ticket_detail_title')); ?></div>
            <div class="db-info-list db-info-list--compact">
                <div class="db-info-item"><span class="db-info-label"><?php echo e(__('ticket_info_id')); ?></span><span class="db-info-value db-info-value--mono"><?php echo e($ticket['id']); ?></span></div>
                <div class="db-info-item"><span class="db-info-label"><?php echo e(__('ticket_info_department')); ?></span><span class="db-info-value"><?php echo e($ticket['department']); ?></span></div>
                <div class="db-info-item"><span class="db-info-label"><?php echo e(__('ticket_info_status')); ?></span><span class="db-badge db-badge--<?php echo e($status_badge[$ticket['status']] ?? 'pending'); ?>"><?php echo e(__('ticket_status_' . $ticket['status'])); ?></span></div>
                <div class="db-info-item"><span class="db-info-label"><?php echo e(__('ticket_info_priority')); ?></span><span class="db-info-value"><?php echo e(__('ticket_priority_' . $ticket['priority'])); ?></span></div>
                <div class="db-info-item"><span class="db-info-label"><?php echo e(__('ticket_info_created')); ?></span><span class="db-info-value"><?php echo e($ticket['created']); ?></span></div>
                <div class="db-info-item"><span class="db-info-label"><?php echo e(__('ticket_info_last_activity')); ?></span><span class="db-info-value"><?php echo e($ticket['last_activity']); ?></span></div>
            </div>
        </div>

        <div class="db-ticket-sidebar__divider"></div>

        <div class="db-ticket-sidebar__section">
            <div class="db-ticket-sidebar__title"><?php echo e(__('ticket_info_service')); ?></div>
            <a href="<?php echo e($ticket['service_url']); ?>" class="db-ticket-sidebar__service">
                <i class="fas fa-microchip"></i>
                <div class="db-ticket-sidebar__service-info">
                    <div class="db-ticket-sidebar__service-name"><?php echo e($ticket['service']); ?></div>
                    <div class="db-ticket-sidebar__service-link"><?php echo e(__('common_view')); ?> →</div>
                </div>
            </a>
        </div>

        <?php if (!empty($attachments)): ?>
        <div class="db-ticket-sidebar__divider"></div>
        <div class="db-ticket-sidebar__section">
            <div class="db-ticket-sidebar__title"><?php echo e(__('ticket_attachments')); ?> <span class="db-ticket-sidebar__count">(<?php echo count($attachments); ?>)</span></div>
            <?php foreach ($attachments as $att):
                $is_img = ($att['type'] ?? '') === 'image';
            ?>
            <?php if ($is_img): ?>
            <button type="button" class="db-attachment-item db-attachment-item--clickable" data-lightbox-src="<?php echo e($att['url']); ?>" data-lightbox-name="<?php echo e($att['name']); ?>">
                <div class="db-attachment-item__thumb">
                    <img src="<?php echo e($att['url']); ?>" alt="<?php echo e($att['name']); ?>" onerror="this.parentNode.classList.add('db-attachment-item__thumb--fallback'); this.remove();">
                    <i class="fas fa-image"></i>
                </div>
                <div class="db-attachment-item__info">
                    <div class="db-attachment-item__name"><?php echo e($att['name']); ?></div>
                    <div class="db-attachment-item__meta"><?php echo e(strtoupper(pathinfo($att['name'], PATHINFO_EXTENSION))); ?> · <?php echo e($att['size']); ?></div>
                </div>
                <span class="db-attachment-item__download" aria-hidden="true"><i class="fas fa-expand"></i></span>
            </button>
            <?php else: ?>
            <a href="<?php echo e($att['url']); ?>" download class="db-attachment-item db-attachment-item--clickable" onclick="DashToast.show('success','','Downloading <?php echo e($att['name']); ?>...')">
                <div class="db-attachment-item__icon"><i class="fas <?php echo e(ticket_file_icon($att['name'])); ?>"></i></div>
                <div class="db-attachment-item__info">
                    <div class="db-attachment-item__name"><?php echo e($att['name']); ?></div>
                    <div class="db-attachment-item__meta"><?php echo e(strtoupper(pathinfo($att['name'], PATHINFO_EXTENSION))); ?> · <?php echo e($att['size']); ?></div>
                </div>
                <span class="db-attachment-item__download" aria-hidden="true"><i class="fas fa-download"></i></span>
            </a>
            <?php endif; ?>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
    </div>
</div>

<!-- Lightbox for image preview -->
<div class="db-lightbox" id="ticketLightbox" role="dialog" aria-modal="true" aria-hidden="true">
    <button class="db-lightbox__close" type="button" aria-label="Close" data-lightbox-close><i class="fas fa-xmark"></i></button>
    <figure class="db-lightbox__figure">
        <img src="" alt="" id="ticketLightboxImg">
        <figcaption class="db-lightbox__caption" id="ticketLightboxCap"></figcaption>
    </figure>
</div>
<?php endif; ?>

<?php if ($is_open): ?>
<?php
$modal_id = 'closeTicketModal'; $modal_title = __('ticket_close'); $modal_size = 'sm';
include __DIR__ . '/../../components/modal.php';

$cb_desc = __('ticket_close_confirm');
$cb_icon = 'fa-xmark';
$cb_target_label = null; $cb_target_value = null; $cb_warn = null;
include __DIR__ . '/../../components/confirm-body.php';

$modal_footer = '<button class="db-btn db-btn--secondary" data-modal-close>' . e(__('common_cancel')) . '</button>
<button class="db-btn db-btn--danger" onclick="DashModal.close(this.closest(\'.db-modal-overlay\')); DashToast.show(\'success\',\'\',\'' . e(__('ticket_close_success')) . '\');">' . e(__('common_confirm')) . '</button>';
include __DIR__ . '/../../components/modal-end.php';
?>
<?php endif; ?>

<div class="db-toast-container" id="toastContainer"></div>

<script>
(function(){
    // ── Lightbox ──
    var lb = document.getElementById('ticketLightbox');
    if (lb) {
        var lbImg = document.getElementById('ticketLightboxImg');
        var lbCap = document.getElementById('ticketLightboxCap');
        function open(src, name) {
            lbImg.src = src; lbCap.textContent = name || '';
            lb.classList.add('is-active'); lb.setAttribute('aria-hidden','false');
            document.body.style.overflow = 'hidden';
        }
        function close() {
            lb.classList.remove('is-active'); lb.setAttribute('aria-hidden','true');
            lbImg.src = ''; document.body.style.overflow = '';
        }
        document.querySelectorAll('[data-lightbox-src]').forEach(function(el){
            el.addEventListener('click', function(e){
                e.preventDefault();
                open(el.getAttribute('data-lightbox-src'), el.getAttribute('data-lightbox-name'));
            });
        });
        lb.addEventListener('click', function(e){
            if (e.target === lb || e.target.closest('[data-lightbox-close]')) close();
        });
        document.addEventListener('keydown', function(e){
            if (e.key === 'Escape' && lb.classList.contains('is-active')) close();
        });
    }

    // ── Reply: drag & drop + file list + keyboard shortcut ──
    var drop = document.getElementById('chatReplyDrop');
    if (!drop) return;
    var fileInput = document.getElementById('chatReplyFileInput');
    var fileList = document.getElementById('chatReplyFiles');
    var sendBtn = document.getElementById('chatReplySend');
    var textarea = document.getElementById('chatReplyText');
    var queued = [];

    function fmtSize(b) {
        if (b < 1024) return b + ' B';
        if (b < 1024*1024) return (b/1024).toFixed(1) + ' KB';
        return (b/1024/1024).toFixed(1) + ' MB';
    }
    function render() {
        fileList.innerHTML = '';
        queued.forEach(function(f, i){
            var isImg = f.type && f.type.indexOf('image/') === 0;
            var item = document.createElement('div');
            item.className = 'db-chat-reply__file';
            item.innerHTML =
                '<i class="fas ' + (isImg ? 'fa-image' : 'fa-file') + '"></i>' +
                '<span class="db-chat-reply__file-name">' + f.name + '</span>' +
                '<span class="db-chat-reply__file-size">' + fmtSize(f.size) + '</span>' +
                '<button type="button" class="db-chat-reply__file-remove" aria-label="Remove"><i class="fas fa-xmark"></i></button>';
            item.querySelector('.db-chat-reply__file-remove').addEventListener('click', function(){
                queued.splice(i, 1); render();
                if (window.DashToast) DashToast.show('success','', '<?php echo e(__('ticket_file_removed')); ?>');
            });
            fileList.appendChild(item);
        });
    }
    function addFiles(files) {
        for (var i = 0; i < files.length; i++) queued.push(files[i]);
        render();
    }

    fileInput.addEventListener('change', function(){ addFiles(fileInput.files); fileInput.value = ''; });

    ['dragenter','dragover'].forEach(function(ev){
        drop.addEventListener(ev, function(e){ e.preventDefault(); drop.classList.add('is-dragging'); });
    });
    ['dragleave','drop'].forEach(function(ev){
        drop.addEventListener(ev, function(e){
            e.preventDefault();
            if (ev === 'dragleave' && drop.contains(e.relatedTarget)) return;
            drop.classList.remove('is-dragging');
            if (ev === 'drop' && e.dataTransfer && e.dataTransfer.files) addFiles(e.dataTransfer.files);
        });
    });

    function send() {
        if (window.DashToast) DashToast.show('success','', '<?php echo e(__('ticket_reply_success')); ?>');
        textarea.value = ''; queued = []; render();
    }
    sendBtn.addEventListener('click', send);
    textarea.addEventListener('keydown', function(e){
        if ((e.ctrlKey || e.metaKey) && e.key === 'Enter') { e.preventDefault(); send(); }
    });
})();
</script>

<?php require_once __DIR__ . '/../../layouts/footer.php'; ?>
