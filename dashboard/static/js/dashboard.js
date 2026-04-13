/**
 * YottaSrc Dashboard — Shell JavaScript
 * ========================================
 * Sidebar toggle, theme persistence, dropdowns (topbar + row actions),
 * modals, toasts, form validation, password toggle, search overlay.
 *
 * IMPORTANT: All click handling uses a single delegated handler to avoid
 * conflicts between capture/bubble phase and stopPropagation issues.
 */

(function () {
    'use strict';

    // ═══════════════════════════════════════════
    // Theme Toggle
    // ═══════════════════════════════════════════

    const ThemeToggle = {
        STORAGE_KEY: 'yottasrc_theme',

        init() {
            this.btn = document.getElementById('themeToggle');
            if (!this.btn) return;

            this.btn.addEventListener('click', () => {
                const current = document.documentElement.getAttribute('data-theme') || 'dark';
                const next = current === 'dark' ? 'light' : 'dark';
                document.documentElement.setAttribute('data-theme', next);
                localStorage.setItem(this.STORAGE_KEY, next);
            });
        }
    };


    // ═══════════════════════════════════════════
    // Sidebar
    // ═══════════════════════════════════════════

    const Sidebar = {
        STORAGE_KEY: 'yottasrc_sidebar',

        init() {
            this.sidebar = document.getElementById('sidebar');
            this.overlay = document.getElementById('sidebarOverlay');
            this.toggleBtn = document.getElementById('sidebarToggle');
            this.collapseBtn = document.getElementById('sidebarCollapse');

            if (!this.sidebar) return;

            // Restore collapsed state (desktop only)
            if (window.innerWidth > 1024) {
                const saved = localStorage.getItem(this.STORAGE_KEY);
                if (saved === 'collapsed') {
                    this.sidebar.classList.add('collapsed');
                    const shell = document.querySelector('.db-shell');
                    if (shell) shell.classList.add('db-shell--collapsed');
                }
            }

            // Clean up anti-flash class (was added in header.php before DOM load)
            document.documentElement.classList.remove('db-sidebar-will-collapse');

            if (this.toggleBtn) {
                this.toggleBtn.addEventListener('click', () => this.mobileToggle());
            }

            if (this.overlay) {
                this.overlay.addEventListener('click', () => this.mobileClose());
            }

            if (this.collapseBtn) {
                this.collapseBtn.addEventListener('click', () => {
                    if (window.innerWidth > 1024) {
                        this.toggleCollapse();
                    } else {
                        this.mobileClose();
                    }
                });
            }

            this.initExpandGroups();
        },

        toggleCollapse() {
            const isCollapsed = this.sidebar.classList.toggle('collapsed');
            localStorage.setItem(this.STORAGE_KEY, isCollapsed ? 'collapsed' : 'expanded');
            const shell = document.querySelector('.db-shell');
            if (shell) shell.classList.toggle('db-shell--collapsed', isCollapsed);
        },

        mobileToggle() {
            this.sidebar.classList.contains('open') ? this.mobileClose() : this.mobileOpen();
        },

        mobileOpen() {
            this.sidebar.classList.add('open');
            if (this.overlay) this.overlay.classList.add('visible');
            document.body.style.overflow = 'hidden';
        },

        mobileClose() {
            this.sidebar.classList.remove('open');
            if (this.overlay) this.overlay.classList.remove('visible');
            document.body.style.overflow = '';
        },

        initExpandGroups() {
            this.sidebar.querySelectorAll('.db-nav-expand-trigger').forEach(trigger => {
                const parent = trigger.closest('.db-nav-expand');
                trigger.addEventListener('click', () => {
                    if (window.innerWidth > 1024 && this.sidebar.classList.contains('collapsed')) return;
                    parent.classList.toggle('open');
                });
            });
        }
    };


    // ═══════════════════════════════════════════
    // Topbar Dropdowns (lang, notif, user menu)
    // ═══════════════════════════════════════════
    // These use the .open class + CSS visibility/opacity transitions.

    const TopbarDropdowns = {
        containers: [],

        init() {
            const ids = [
                { container: 'langSwitcher', btn: null, selector: '.db-switcher-toggle' },
                { container: 'notifDropdown', btn: 'notifBtn', selector: null },
                { container: 'userMenu', btn: 'userMenuBtn', selector: null },
            ];

            ids.forEach(cfg => {
                const container = document.getElementById(cfg.container);
                if (!container) return;
                const btn = cfg.btn ? document.getElementById(cfg.btn) : container.querySelector(cfg.selector);
                if (!btn) return;

                this.containers.push(container);

                btn.addEventListener('click', (e) => {
                    e.stopPropagation();
                    const isOpen = container.classList.contains('open');

                    // Close all topbar dropdowns first
                    this.closeAll();

                    // Toggle this one
                    if (!isOpen) {
                        container.classList.add('open');
                    }
                });
            });
        },

        closeAll() {
            this.containers.forEach(c => c.classList.remove('open'));
        }
    };


    // ═══════════════════════════════════════════
    // Row Action Dropdowns (table ⋮ menus)
    // ═══════════════════════════════════════════
    // Supports: hover open (desktop), click toggle, close on leave.
    // Menu is moved to <body> to escape overflow clipping.

    const RowDropdown = {
        activeMenu: null,
        activeToggle: null,
        activeWrapper: null,
        originalParent: null,
        closeTimer: null,
        HOVER_DELAY: 150,

        init() {
            // Use mouseover/mouseout (they bubble) for delegated hover detection
            document.addEventListener('mouseover', (e) => {
                const wrapper = e.target.closest('.db-dropdown-wrapper');
                if (!wrapper || this.isMobile()) return;

                const toggle = wrapper.querySelector('[data-dropdown-toggle]');
                if (!toggle) return;

                this.cancelClose();

                const menu = wrapper.querySelector('.db-dropdown-menu');
                if (menu && this.activeMenu !== menu) {
                    this.open(toggle);
                }
            });

            document.addEventListener('mouseout', (e) => {
                if (this.isMobile()) return;
                const wrapper = e.target.closest('.db-dropdown-wrapper');
                if (!wrapper) return;

                // Check if mouse moved to another element inside the same wrapper
                const related = e.relatedTarget;
                if (related && wrapper.contains(related)) return;

                // Check if mouse moved to the detached menu (in <body>)
                if (related && this.activeMenu && this.activeMenu.contains(related)) return;

                if (this.activeWrapper === wrapper) {
                    this.scheduleClose();
                }
            });
        },

        isMobile() {
            // Only treat as mobile if screen is small — NOT based on touch support
            // (modern laptops have touch screens but should still get hover)
            return window.innerWidth <= 1024;
        },

        scheduleClose() {
            this.cancelClose();
            this.closeTimer = setTimeout(() => {
                this.close();
            }, this.HOVER_DELAY);
        },

        cancelClose() {
            if (this.closeTimer) {
                clearTimeout(this.closeTimer);
                this.closeTimer = null;
            }
        },

        open(toggle) {
            const wrapper = toggle.closest('.db-dropdown-wrapper');
            const menu = wrapper ? wrapper.querySelector('.db-dropdown-menu') : null;
            if (!menu) return;

            // Already open? toggle = close (click behavior)
            if (this.activeMenu === menu) {
                this.close();
                return;
            }

            this.close();

            this.originalParent = menu.parentElement;
            this.activeToggle = toggle;
            this.activeMenu = menu;
            this.activeWrapper = wrapper;

            // Move to body to escape overflow clipping
            document.body.appendChild(menu);
            this.position();
            menu.classList.add('is-open');

            // Track hover on the detached menu itself
            menu._onEnter = () => this.cancelClose();
            menu._onLeave = () => this.scheduleClose();
            menu.addEventListener('mouseenter', menu._onEnter);
            menu.addEventListener('mouseleave', menu._onLeave);
        },

        position() {
            const menu = this.activeMenu;
            const toggle = this.activeToggle;
            if (!menu || !toggle) return;

            const rect = toggle.getBoundingClientRect();
            const isRtl = document.documentElement.dir === 'rtl';

            // Measure
            menu.style.visibility = 'hidden';
            menu.style.display = 'block';
            const menuW = menu.offsetWidth;
            const menuH = menu.offsetHeight;
            menu.style.visibility = '';

            let top = rect.bottom + 6;
            let left = isRtl ? rect.left : (rect.right - menuW);

            if (left < 8) left = 8;
            if (left + menuW > window.innerWidth - 8) left = window.innerWidth - menuW - 8;
            if (top + menuH > window.innerHeight - 8) top = rect.top - menuH - 6;

            menu.style.top = top + 'px';
            menu.style.left = left + 'px';
        },

        close() {
            this.cancelClose();

            if (this.activeMenu) {
                // Remove hover listeners from detached menu
                if (this.activeMenu._onEnter) {
                    this.activeMenu.removeEventListener('mouseenter', this.activeMenu._onEnter);
                    this.activeMenu.removeEventListener('mouseleave', this.activeMenu._onLeave);
                    delete this.activeMenu._onEnter;
                    delete this.activeMenu._onLeave;
                }

                this.activeMenu.classList.remove('is-open');
                this.activeMenu.style.display = '';
                this.activeMenu.style.top = '';
                this.activeMenu.style.left = '';

                if (this.originalParent) {
                    this.originalParent.appendChild(this.activeMenu);
                }

                this.activeMenu = null;
                this.activeToggle = null;
                this.activeWrapper = null;
                this.originalParent = null;
            }
        }
    };


    // ═══════════════════════════════════════════
    // SINGLE Global Click Handler
    // ═══════════════════════════════════════════

    function initGlobalClickHandler() {
        document.addEventListener('click', (e) => {

            // 1) Row dropdown toggle (⋮ button) — click support (mobile + a11y)
            const rowToggle = e.target.closest('[data-dropdown-toggle]');
            if (rowToggle) {
                e.preventDefault();
                e.stopPropagation();
                RowDropdown.cancelClose();
                TopbarDropdowns.closeAll();
                RowDropdown.open(rowToggle);
                return;
            }

            // 2) Click inside an open row dropdown menu item — run action then close
            if (e.target.closest('.db-dropdown-menu.is-open .db-dropdown-item')) {
                RowDropdown.cancelClose();
                setTimeout(() => RowDropdown.close(), 60);
                return;
            }

            // 3) Click inside open menu (not an item) — keep open
            if (RowDropdown.activeMenu && RowDropdown.activeMenu.contains(e.target)) {
                return;
            }

            // 4) Close row dropdown if clicking outside
            if (RowDropdown.activeMenu) {
                RowDropdown.close();
            }

            // 5) Close topbar dropdowns if clicking outside them
            let insideTopbar = false;
            TopbarDropdowns.containers.forEach(c => {
                if (c.contains(e.target)) insideTopbar = true;
            });
            if (!insideTopbar) {
                TopbarDropdowns.closeAll();
            }
        });
    }


    // ═══════════════════════════════════════════
    // Search Overlay (Ctrl+K)
    // ═══════════════════════════════════════════

    const Search = {
        init() {
            this.overlay = document.getElementById('searchOverlay');
            this.input = document.getElementById('searchInput');
            this.trigger = document.getElementById('searchTrigger');

            if (!this.overlay || !this.input) return;

            if (this.trigger) {
                this.trigger.addEventListener('click', () => this.open());
            }

            document.addEventListener('keydown', (e) => {
                if ((e.ctrlKey || e.metaKey) && e.key === 'k') {
                    e.preventDefault();
                    this.isOpen() ? this.close() : this.open();
                }
            });

            this.overlay.addEventListener('click', (e) => {
                if (e.target === this.overlay) this.close();
            });
        },

        isOpen() {
            return this.overlay.classList.contains('visible');
        },

        open() {
            this.overlay.classList.add('visible');
            document.body.style.overflow = 'hidden';
            setTimeout(() => this.input.focus(), 100);
        },

        close() {
            this.overlay.classList.remove('visible');
            document.body.style.overflow = '';
            this.input.value = '';
        }
    };


    // ═══════════════════════════════════════════
    // Modal System
    // ═══════════════════════════════════════════

    const Modal = {
        open(id) {
            const overlay = document.getElementById(id);
            if (overlay) {
                overlay.classList.add('is-active');
                document.body.style.overflow = 'hidden';
            }
        },
        close(overlay) {
            if (overlay) {
                overlay.classList.remove('is-active');
                document.body.style.overflow = '';
            }
        },
        init() {
            document.querySelectorAll('[data-modal-close]').forEach(btn => {
                btn.addEventListener('click', () => {
                    Modal.close(btn.closest('.db-modal-overlay'));
                });
            });

            document.querySelectorAll('.db-modal-overlay').forEach(overlay => {
                overlay.addEventListener('click', e => {
                    if (e.target === overlay) Modal.close(overlay);
                });
            });

            document.querySelectorAll('[data-modal-open]').forEach(btn => {
                btn.addEventListener('click', () => {
                    Modal.open(btn.getAttribute('data-modal-open'));
                });
            });
        }
    };

    window.DashModal = Modal;


    // ═══════════════════════════════════════════
    // Password Toggle
    // ═══════════════════════════════════════════

    const PasswordToggle = {
        init() {
            document.querySelectorAll('[data-toggle-password]').forEach(btn => {
                btn.addEventListener('click', () => {
                    const wrapper = btn.closest('.db-input-password-wrapper');
                    const input = wrapper ? wrapper.querySelector('.db-input') : null;
                    if (!input) return;
                    const icon = btn.querySelector('i');
                    if (input.type === 'password') {
                        input.type = 'text';
                        icon.classList.replace('fa-eye', 'fa-eye-slash');
                    } else {
                        input.type = 'password';
                        icon.classList.replace('fa-eye-slash', 'fa-eye');
                    }
                });
            });
        }
    };


    // ═══════════════════════════════════════════
    // Toast Notifications
    // ═══════════════════════════════════════════

    const Toast = {
        show(type, title, message, duration) {
            duration = duration || 4000;
            const container = document.getElementById('toastContainer');
            if (!container) return;

            const icons = {
                info: 'fas fa-circle-info',
                success: 'fas fa-circle-check',
                warning: 'fas fa-triangle-exclamation',
                error: 'fas fa-circle-xmark'
            };

            const toast = document.createElement('div');
            toast.className = 'db-alert db-alert--' + type + ' db-toast';
            toast.innerHTML =
                '<i class="db-alert-icon ' + (icons[type] || icons.info) + '"></i>' +
                '<div class="db-alert-content">' +
                (title ? '<div class="db-alert-title">' + title + '</div>' : '') +
                (message ? '<div class="db-alert-message">' + message + '</div>' : '') +
                '</div>' +
                '<button class="db-alert-dismiss" aria-label="Close"><i class="fas fa-xmark"></i></button>';

            container.appendChild(toast);
            toast.querySelector('.db-alert-dismiss').addEventListener('click', () => Toast.remove(toast));
            setTimeout(() => Toast.remove(toast), duration);
        },
        remove(toast) {
            if (!toast || toast.classList.contains('is-leaving')) return;
            toast.classList.add('is-leaving');
            setTimeout(() => toast.remove(), 200);
        }
    };

    window.DashToast = Toast;


    // ═══════════════════════════════════════════
    // Form Validation
    // ═══════════════════════════════════════════

    const FormValidation = {
        init() {
            document.querySelectorAll('form[novalidate]').forEach(form => {
                form.addEventListener('submit', e => {
                    e.preventDefault();
                    if (FormValidation.validate(form)) {
                        if (window.DashToast) {
                            DashToast.show('success', '', form.dataset.successMessage || 'Changes saved successfully.');
                        }
                    }
                });

                form.querySelectorAll('.db-input, .db-select, .db-textarea').forEach(input => {
                    input.addEventListener('input', () => {
                        const group = input.closest('.db-form-group');
                        if (group) {
                            group.classList.remove('db-form-group--error');
                            const err = group.querySelector('.db-form-error');
                            if (err) err.hidden = true;
                        }
                        input.classList.remove('db-input--error');
                    });
                });
            });
        },
        validate(form) {
            let valid = true;
            form.querySelectorAll('[data-validate]').forEach(group => {
                const input = group.querySelector('.db-input, .db-select, .db-textarea');
                if (!input) return;

                const rule = group.dataset.validate;
                const errorEl = group.querySelector('.db-form-error');
                let isValid = true;

                if (rule === 'required' && !input.value.trim()) isValid = false;
                else if (rule === 'match') {
                    const matchField = form.querySelector('[name="' + group.dataset.matchField + '"]');
                    if (matchField && input.value !== matchField.value) isValid = false;
                }

                if (input.minLength > 0 && input.value.length < input.minLength) isValid = false;

                if (!isValid) {
                    valid = false;
                    group.classList.add('db-form-group--error');
                    input.classList.add('db-input--error');
                    if (errorEl) errorEl.hidden = false;
                } else {
                    group.classList.remove('db-form-group--error');
                    input.classList.remove('db-input--error');
                    if (errorEl) errorEl.hidden = true;
                }
            });
            return valid;
        }
    };

    window.DashForm = FormValidation;


    // ═══════════════════════════════════════════
    // Auto Skeleton Loading
    // ═══════════════════════════════════════════

    const AutoSkeleton = {
        init() {
            document.querySelectorAll('[data-skeleton-auto]').forEach(wrapper => {
                const skeleton = wrapper.querySelector('.db-skeleton-zone');
                const content = wrapper.querySelector('.db-content-zone');
                if (!skeleton || !content) return;

                content.style.display = 'none';
                const delay = parseInt(wrapper.dataset.skeletonAuto) || 600;
                setTimeout(() => {
                    skeleton.style.display = 'none';
                    content.style.display = '';
                }, delay);
            });
        }
    };


    // ═══════════════════════════════════════════
    // Global Escape Key Handler
    // ═══════════════════════════════════════════

    function initEscapeHandler() {
        document.addEventListener('keydown', (e) => {
            if (e.key !== 'Escape') return;

            // Close modals first
            const activeModals = document.querySelectorAll('.db-modal-overlay.is-active');
            if (activeModals.length) {
                activeModals.forEach(o => Modal.close(o));
                return;
            }

            // Close search overlay
            if (Search.isOpen && Search.isOpen()) {
                Search.close();
                return;
            }

            // Close row dropdown
            if (RowDropdown.activeMenu) {
                RowDropdown.close();
                return;
            }

            // Close topbar dropdowns
            TopbarDropdowns.closeAll();
        });
    }


    // ═══════════════════════════════════════════
    // Reposition Row Dropdown on Scroll/Resize
    // ═══════════════════════════════════════════

    function initScrollReposition() {
        window.addEventListener('scroll', () => {
            if (RowDropdown.activeMenu) RowDropdown.position();
        }, true);

        window.addEventListener('resize', () => {
            if (RowDropdown.activeMenu) RowDropdown.position();
        });
    }


    // ═══════════════════════════════════════════
    // Initialize Everything
    // ═══════════════════════════════════════════

    document.addEventListener('DOMContentLoaded', () => {
        ThemeToggle.init();
        Sidebar.init();
        TopbarDropdowns.init();
        Search.init();
        Modal.init();
        PasswordToggle.init();
        FormValidation.init();
        RowDropdown.init();
        AutoSkeleton.init();

        // Single global click handler — no conflicts
        initGlobalClickHandler();
        initEscapeHandler();
        initScrollReposition();
    });

})();

/**
 * Filter tabs + search — works with both .db-seg-tab and .db-status-tab
 * Filters both table rows (tr[data-status]) and service cards (.db-svc-row[data-status])
 */
(function () {
    document.addEventListener('DOMContentLoaded', function () {
        var tabs = document.querySelectorAll('.db-seg-tab[data-filter], .db-status-tab[data-filter]');
        if (!tabs.length) return;

        // Find filterable items (table rows or service cards)
        var items = document.querySelectorAll('tr[data-status], .db-svc-row[data-status], .db-svc-card[data-status]');
        if (!items.length) return;

        function getActiveFilter() {
            var active = document.querySelector('.db-seg-tab.active[data-filter], .db-status-tab.active[data-filter]');
            return active ? active.dataset.filter : 'all';
        }

        function getSearchQuery() {
            var input = document.querySelector('.db-fbar__search input, .db-control-bar__search input, .db-filterbar__search input, .db-toolbar__search input');
            return input ? input.value.toLowerCase().trim() : '';
        }

        function applyFilters() {
            var filter = getActiveFilter();
            var q = getSearchQuery();
            items.forEach(function (item) {
                var statusMatch = filter === 'all' || item.dataset.status === filter;
                var textMatch = !q || item.textContent.toLowerCase().indexOf(q) !== -1;
                item.style.display = (statusMatch && textMatch) ? '' : 'none';
            });
        }

        // Tab clicks
        tabs.forEach(function (tab) {
            tab.addEventListener('click', function () {
                tabs.forEach(function (t) { t.classList.remove('active'); });
                tab.classList.add('active');
                applyFilters();
            });
        });

        // Search input
        var searchInput = document.querySelector('.db-fbar__search input, .db-control-bar__search input, .db-filterbar__search input, .db-toolbar__search input');
        if (searchInput) {
            searchInput.addEventListener('input', applyFilters);
        }
    });
})();

/**
 * Payment card radio toggle — works with .db-pay-card
 */
(function () {
    document.addEventListener('DOMContentLoaded', function () {
        var cards = document.querySelectorAll('.db-pay-card');
        if (!cards.length) return;

        cards.forEach(function (card) {
            card.addEventListener('click', function () {
                cards.forEach(function (c) { c.classList.remove('db-pay-card--active'); });
                card.classList.add('db-pay-card--active');
                var radio = card.querySelector('input[type="radio"]');
                if (radio) radio.checked = true;
            });
        });
    });
})();

/**
 * Table sorting — click header to sort
 */
(function () {
    document.addEventListener('DOMContentLoaded', function () {
        document.querySelectorAll('.db-table-sortable').forEach(function (th) {
            th.addEventListener('click', function () {
                var table = th.closest('table');
                if (!table) return;
                var tbody = table.querySelector('tbody');
                if (!tbody) return;

                var idx = Array.from(th.parentNode.children).indexOf(th);
                var rows = Array.from(tbody.querySelectorAll('tr'));
                var icon = th.querySelector('.db-sort-icon i');

                // Determine direction
                var asc = !th.classList.contains('db-table-sorted--asc');
                table.querySelectorAll('.db-table-sortable').forEach(function (h) {
                    h.classList.remove('db-table-sorted', 'db-table-sorted--asc', 'db-table-sorted--desc');
                    var ic = h.querySelector('.db-sort-icon i');
                    if (ic) ic.className = 'fas fa-sort';
                });

                th.classList.add('db-table-sorted', asc ? 'db-table-sorted--asc' : 'db-table-sorted--desc');
                if (icon) icon.className = asc ? 'fas fa-sort-up' : 'fas fa-sort-down';

                rows.sort(function (a, b) {
                    var aText = (a.children[idx] || {}).textContent || '';
                    var bText = (b.children[idx] || {}).textContent || '';
                    // Try numeric
                    var aNum = parseFloat(aText.replace(/[^0-9.-]/g, ''));
                    var bNum = parseFloat(bText.replace(/[^0-9.-]/g, ''));
                    if (!isNaN(aNum) && !isNaN(bNum)) {
                        return asc ? aNum - bNum : bNum - aNum;
                    }
                    return asc ? aText.localeCompare(bText) : bText.localeCompare(aText);
                });

                rows.forEach(function (r) { tbody.appendChild(r); });
            });
        });
    });
})();

/**
 * Copy to clipboard helper
 */
function DashCopy(el, text) {
    if (!navigator.clipboard) return;
    navigator.clipboard.writeText(text).then(function () {
        if (typeof DashToast !== 'undefined') {
            DashToast.show('success', '', 'Copied to clipboard');
        }
    });
}

/**
 * Table export — CSV download from any visible table
 */
function DashExport(format) {
    var tables = document.querySelectorAll('.db-table');
    if (!tables.length) { DashToast.show('info', '', 'No data to export.'); return; }

    var rows = [];
    var headersAdded = false;

    tables.forEach(function(table) {
        // Headers (only from first table that has them)
        if (!headersAdded) {
            var ths = table.querySelectorAll('thead th');
            if (ths.length) {
                var headers = [];
                ths.forEach(function(th) { var t = th.textContent.trim(); if (t) headers.push(t); });
                if (headers.length) { rows.push(headers); headersAdded = true; }
            }
        }

        // Data rows (visible only)
        table.querySelectorAll('tbody tr').forEach(function(tr) {
            if (tr.style.display === 'none') return;
            var cells = [];
            tr.querySelectorAll('td').forEach(function(td) {
                cells.push(td.textContent.trim().replace(/\s+/g, ' '));
            });
            if (cells.length) rows.push(cells);
        });
    });

    if (rows.length <= 1) { DashToast.show('info', '', 'No data to export.'); return; }

    if (format === 'csv' || format === 'excel') {
        var sep = format === 'excel' ? '\t' : ',';
        var ext = format === 'excel' ? '.xls' : '.csv';
        var content = rows.map(function(r) {
            return r.map(function(c) { return '"' + c.replace(/"/g, '""') + '"'; }).join(sep);
        }).join('\n');

        // For CSV: add sep hint so Excel knows the delimiter
        if (format === 'csv') content = 'sep=,\n' + content;

        var bom = '\uFEFF';
        var mime = format === 'excel' ? 'application/vnd.ms-excel' : 'text/csv';
        var blob = new Blob([bom + content], { type: mime + ';charset=utf-8;' });
        var url = URL.createObjectURL(blob);
        var a = document.createElement('a');
        a.href = url;
        a.download = 'export_' + new Date().toISOString().slice(0,10) + ext;
        document.body.appendChild(a);
        a.click();
        document.body.removeChild(a);
        URL.revokeObjectURL(url);
        DashToast.show('success', '', 'File downloaded successfully.');
    } else if (format === 'print') {
        window.print();
    }
}


/* ═══════════════════════════════════════════════════════════
   DashTable — reusable client-side search / filter / sort
   ═══════════════════════════════════════════════════════════
   Markup contract:

   <table id="myTable" class="db-table" data-table-tools>
       <thead>
           <th class="db-table-sortable" data-sort-key="name">Name</th>
           ...
       </thead>
       <tbody>
           <tr data-row data-name="..." data-status="active" data-amount="129.99">...</tr>
           ...
           <tr data-table-empty><td colspan="N">No results.</td></tr>
       </tbody>
   </table>

   Search input:
   <input type="text" data-table-search="myTable">

   Filter select (matches against data-{key} on row):
   <select data-table-filter="myTable" data-filter-key="status">
       <option value="">All</option>
       <option value="active">Active</option>
   </select>

   Auto-init on DOMContentLoaded for any table with [data-table-tools].
   ═══════════════════════════════════════════════════════════ */

window.DashTable = (function () {
    function getRowSearchText(row) {
        if (row._searchText !== undefined) return row._searchText;
        var text = '';
        for (var i = 0; i < row.attributes.length; i++) {
            var attr = row.attributes[i];
            if (attr.name.indexOf('data-') === 0 && attr.name !== 'data-row') {
                text += ' ' + attr.value.toLowerCase();
            }
        }
        // Also include visible text content as a fallback
        text += ' ' + (row.textContent || '').toLowerCase();
        row._searchText = text;
        return text;
    }

    function compareValues(va, vb, dir) {
        // Numeric
        var na = parseFloat(va);
        var nb = parseFloat(vb);
        if (!isNaN(na) && !isNaN(nb) && (va || '').toString().match(/^-?\d/)) {
            return (na - nb) * dir;
        }
        // Date
        var da = Date.parse(va);
        var db = Date.parse(vb);
        if (!isNaN(da) && !isNaN(db)) {
            return (da - db) * dir;
        }
        // String
        if (va < vb) return -1 * dir;
        if (va > vb) return  1 * dir;
        return 0;
    }

    function init(table) {
        if (!table || table.dataset.dashTableInit === '1') return;
        table.dataset.dashTableInit = '1';

        var tableId = table.id;
        var tbody = table.querySelector('tbody');
        if (!tbody) return;

        var rows = Array.prototype.slice.call(tbody.querySelectorAll('tr[data-row]'));
        var emptyRow = tbody.querySelector('[data-table-empty]');
        if (emptyRow) emptyRow.style.display = 'none';

        var searchInputs = tableId
            ? document.querySelectorAll('[data-table-search="' + tableId + '"]')
            : [];
        var filterSelects = tableId
            ? document.querySelectorAll('[data-table-filter="' + tableId + '"]')
            : [];
        var tabContainers = tableId
            ? document.querySelectorAll('[data-table-tabs="' + tableId + '"]')
            : [];
        var sortHeaders = table.querySelectorAll('.db-table-sortable[data-sort-key]');

        var sortState = { key: null, dir: 1 };
        var tabFilters = {}; // key -> value (set by tab containers)

        function applyFilters() {
            var queries = [];
            searchInputs.forEach(function (inp) {
                var v = (inp.value || '').toLowerCase().trim();
                if (v) queries.push(v);
            });

            var filters = [];
            filterSelects.forEach(function (sel) {
                var key = sel.getAttribute('data-filter-key');
                var val = sel.value;
                if (key && val) filters.push({ key: key, val: val.toLowerCase() });
            });
            // Merge tab filters
            Object.keys(tabFilters).forEach(function (k) {
                filters.push({ key: k, val: tabFilters[k] });
            });

            var visible = 0;
            rows.forEach(function (row) {
                var text = getRowSearchText(row);
                var searchOk = queries.every(function (q) { return text.indexOf(q) !== -1; });
                var filterOk = filters.every(function (f) {
                    return (row.getAttribute('data-' + f.key) || '').toLowerCase() === f.val;
                });
                var show = searchOk && filterOk;
                row.style.display = show ? '' : 'none';
                if (show) visible++;
            });

            // Also fire a custom event so pages can react (e.g. filter cards view)
            table.dispatchEvent(new CustomEvent('dashtable:filter', {
                detail: { queries: queries, filters: filters, visible: visible }
            }));

            if (emptyRow) emptyRow.style.display = (visible === 0 && rows.length > 0) ? '' : 'none';
        }

        function sortBy(key) {
            if (sortState.key === key) {
                sortState.dir = -sortState.dir;
            } else {
                sortState.key = key;
                sortState.dir = 1;
            }

            var sorted = rows.slice().sort(function (a, b) {
                var va = (a.getAttribute('data-' + key) || '').toLowerCase();
                var vb = (b.getAttribute('data-' + key) || '').toLowerCase();
                return compareValues(va, vb, sortState.dir);
            });

            sorted.forEach(function (row) {
                if (emptyRow) tbody.insertBefore(row, emptyRow);
                else tbody.appendChild(row);
            });

            sortHeaders.forEach(function (th) {
                th.classList.remove('is-sorted-asc', 'is-sorted-desc');
                if (th.getAttribute('data-sort-key') === key) {
                    th.classList.add(sortState.dir === 1 ? 'is-sorted-asc' : 'is-sorted-desc');
                }
            });
        }

        // Wire events
        searchInputs.forEach(function (inp) {
            inp.addEventListener('input', applyFilters);
        });
        filterSelects.forEach(function (sel) {
            sel.addEventListener('change', applyFilters);
        });
        sortHeaders.forEach(function (th) {
            th.style.cursor = 'pointer';
            th.addEventListener('click', function () {
                var key = th.getAttribute('data-sort-key');
                if (key) sortBy(key);
            });
        });
        tabContainers.forEach(function (container) {
            var key = container.getAttribute('data-tab-key');
            if (!key) return;
            var btns = container.querySelectorAll('[data-tab-value]');
            btns.forEach(function (btn) {
                btn.addEventListener('click', function () {
                    var val = (btn.getAttribute('data-tab-value') || '').toLowerCase();
                    if (val && val !== 'all') tabFilters[key] = val;
                    else delete tabFilters[key];
                    btns.forEach(function (b) { b.classList.remove('active'); });
                    btn.classList.add('active');
                    applyFilters();
                });
            });
        });
    }

    function initAll(root) {
        (root || document).querySelectorAll('table[data-table-tools]').forEach(init);
    }

    return { init: init, initAll: initAll };
})();

document.addEventListener('DOMContentLoaded', function () {
    DashTable.initAll();
});
