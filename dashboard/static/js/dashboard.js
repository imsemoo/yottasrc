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

            // Restore collapsed state (desktop only).
            // Pages can force collapse by setting data-force-collapse-sidebar
            // on <body> (set via $force_collapse_sidebar PHP flag before shell).
            if (window.innerWidth > 1024) {
                const saved = localStorage.getItem(this.STORAGE_KEY);
                const forced = document.body.hasAttribute('data-force-collapse-sidebar');
                if (saved === 'collapsed' || forced) {
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
            this.initHoverExpand();
        },

        // Hover-to-expand: when the sidebar is collapsed, hovering it adds
        // `.is-hover-expanded` so CSS shows the full-width overlay state.
        //
        // ENTER_DELAY: we wait before triggering the expand so:
        //   1. Mouse passes don't accidentally pop the sidebar open.
        //   2. The user has time to click the chevron button (which sits at
        //      the right edge of the collapsed sidebar) without the sidebar
        //      sliding away from the cursor mid-click.
        //
        // LEAVE_DELAY: small grace period on exit so quick re-entries don't
        //   cause a flash when the chevron shifts with the edge.
        //
        // The chevron itself bypasses the delay (handled below) — clicking
        // it is an explicit user intent to commit the expanded state.
        initHoverExpand() {
            const ENTER_DELAY = 350;
            const LEAVE_DELAY = 220;
            let enterTimer = null;
            let leaveTimer = null;

            const cancelTimers = () => {
                if (enterTimer) { clearTimeout(enterTimer); enterTimer = null; }
                if (leaveTimer) { clearTimeout(leaveTimer); leaveTimer = null; }
            };

            const enter = () => {
                if (window.innerWidth <= 1024) return;
                if (!this.sidebar.classList.contains('collapsed')) return;
                cancelTimers();
                enterTimer = setTimeout(() => {
                    // Re-check state at fire time — user may have already
                    // clicked the chevron to permanently expand.
                    if (this.sidebar.classList.contains('collapsed')) {
                        this.sidebar.classList.add('is-hover-expanded');
                    }
                    enterTimer = null;
                }, ENTER_DELAY);
            };

            const leave = () => {
                cancelTimers();
                leaveTimer = setTimeout(() => {
                    // Only reset submenus when we were in the transient
                    // hover-expanded state. If the sidebar is permanently
                    // expanded, the user's explicit click on Services should
                    // persist until they click it again — never auto-close
                    // on mouse leave.
                    const wasHoverExpanded = this.sidebar.classList.contains('is-hover-expanded');
                    this.sidebar.classList.remove('is-hover-expanded');
                    if (wasHoverExpanded) {
                        this.sidebar.querySelectorAll('.db-nav-expand.open')
                            .forEach(el => el.classList.remove('open'));
                    }
                    leaveTimer = null;
                }, LEAVE_DELAY);
            };

            this.sidebar.addEventListener('mouseenter', enter);
            this.sidebar.addEventListener('mouseleave', leave);

            // The chevron button is the explicit "I want to expand" intent.
            // Cancel any pending hover-timer so the button click is committed
            // immediately as a permanent toggle, never as a transient hover.
            if (this.collapseBtn) {
                this.collapseBtn.addEventListener('mouseenter', cancelTimers);
                this.collapseBtn.addEventListener('mousedown',  cancelTimers);
            }
        },

        toggleCollapse() {
            const isCollapsed = this.sidebar.classList.toggle('collapsed');
            // Always strip the transient hover-expanded class on a click
            // toggle. Otherwise it stays around and the next collapse pops
            // straight into the hover state (visually confusing).
            this.sidebar.classList.remove('is-hover-expanded');
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
                    // Block inline toggle only when sidebar is collapsed AND not
                    // hover-expanded. In hover-expanded state, the full layout
                    // is visible, so the user expects the submenu to open inline.
                    if (
                        window.innerWidth > 1024 &&
                        this.sidebar.classList.contains('collapsed') &&
                        !this.sidebar.classList.contains('is-hover-expanded')
                    ) {
                        return;
                    }
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
        // Sample size for the "no query yet" state — shuffles on every open
        // so the user sees different examples each time they launch search.
        SAMPLE_SIZE: 8,

        init() {
            this.overlay = document.getElementById('searchOverlay');
            this.input = document.getElementById('searchInput');
            this.body = document.getElementById('searchBody');
            this.trigger = document.getElementById('searchTrigger');
            this.suggestions = Array.isArray(window.__dashSearchSuggestions)
                ? window.__dashSearchSuggestions.slice()
                : [];

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

            this.input.addEventListener('input', () => {
                this.render(this.input.value.trim().toLowerCase());
            });

            this.input.addEventListener('keydown', (e) => {
                if (e.key === 'Enter') {
                    const first = this.body && this.body.querySelector('.db-search-suggestion');
                    if (first && first.dataset.href) {
                        window.location.href = first.dataset.href;
                    }
                }
            });
        },

        isOpen() {
            return this.overlay.classList.contains('visible');
        },

        open() {
            this.overlay.classList.add('visible');
            document.body.style.overflow = 'hidden';
            this.render('');
            setTimeout(() => this.input.focus(), 100);
        },

        close() {
            this.overlay.classList.remove('visible');
            document.body.style.overflow = '';
            this.input.value = '';
        },

        // Fisher–Yates shuffle
        shuffle(arr) {
            const a = arr.slice();
            for (let i = a.length - 1; i > 0; i--) {
                const j = Math.floor(Math.random() * (i + 1));
                [a[i], a[j]] = [a[j], a[i]];
            }
            return a;
        },

        render(query) {
            if (!this.body || !this.suggestions.length) return;

            let items;
            let heading;
            if (!query) {
                // No query — show a random sample as "try these" examples
                items = this.shuffle(this.suggestions).slice(0, this.SAMPLE_SIZE);
                heading = 'Try searching for';
            } else {
                items = this.suggestions.filter(s => {
                    const hay = (s.label + ' ' + (s.meta || '') + ' ' + (s.type || '')).toLowerCase();
                    return hay.includes(query);
                });
                heading = items.length ? 'Results' : '';
            }

            if (!items.length) {
                this.body.innerHTML = '<div class="db-search-empty">No matches for "' + this.escape(query) + '"</div>';
                return;
            }

            const parts = ['<div class="db-search-section-label">' + heading + '</div>'];
            items.forEach(s => {
                parts.push(
                    '<a href="' + s.href + '" data-href="' + s.href + '" class="db-search-suggestion">' +
                        '<span class="db-search-suggestion__icon"><i class="' + s.icon + '"></i></span>' +
                        '<span class="db-search-suggestion__body">' +
                            '<span class="db-search-suggestion__label">' + this.highlight(s.label, query) + '</span>' +
                            (s.meta ? '<span class="db-search-suggestion__meta">' + this.escape(s.meta) + '</span>' : '') +
                        '</span>' +
                        '<span class="db-search-suggestion__type">' + this.escape(s.type || '') + '</span>' +
                    '</a>'
                );
            });
            this.body.innerHTML = parts.join('');
        },

        escape(str) {
            return String(str).replace(/[&<>"']/g, m => ({'&':'&amp;','<':'&lt;','>':'&gt;','"':'&quot;',"'":'&#39;'}[m]));
        },

        highlight(text, query) {
            const esc = this.escape(text);
            if (!query) return esc;
            const q = this.escape(query);
            const re = new RegExp('(' + q.replace(/[-/\\^$*+?.()|[\]{}]/g, '\\$&') + ')', 'ig');
            return esc.replace(re, '<mark>$1</mark>');
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
    // Type-to-confirm (destructive actions safety)
    // ───────────────────────────────────────────
    // Usage (markup):
    //   <input class="db-type-to-confirm__input"
    //          data-type-to-confirm="DELETE"
    //          data-type-to-confirm-target="#myConfirmBtn">
    //   <button id="myConfirmBtn" disabled>Delete</button>
    //
    // The button stays disabled until the user types the exact word
    // (case-insensitive by default, trimmed of whitespace).
    // ═══════════════════════════════════════════
    const TypeToConfirm = {
        init() {
            document.querySelectorAll('.db-type-to-confirm__input').forEach(input => {
                const expected = (input.getAttribute('data-type-to-confirm') || '').trim();
                const targetSel = input.getAttribute('data-type-to-confirm-target');
                const target    = targetSel ? document.querySelector(targetSel) : null;
                if (!expected || !target) return;

                const sync = () => {
                    const match = input.value.trim().toUpperCase() === expected.toUpperCase();
                    target.disabled = !match;
                    input.classList.toggle('is-valid', match && input.value.length > 0);
                };

                input.addEventListener('input', sync);

                // Reset when the modal it lives inside is closed, so reopening
                // starts fresh and the confirm button is disabled again.
                const modalRoot = input.closest('.db-modal-overlay');
                if (modalRoot) {
                    const observer = new MutationObserver(() => {
                        if (!modalRoot.classList.contains('is-active')) {
                            input.value = '';
                            sync();
                        }
                    });
                    observer.observe(modalRoot, { attributes: true, attributeFilter: ['class'] });
                }

                sync();
            });
        }
    };


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
        TypeToConfirm.init();
        PasswordToggle.init();
        FormValidation.init();
        RowDropdown.init();

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
 * View Switcher — toggle Table <-> Cards view on any page.
 *
 * Markup contract:
 *   <div class="db-view-switch" data-view-switch="<storageKey>">
 *       <button class="db-view-switch__btn active" data-view="table">...</button>
 *       <button class="db-view-switch__btn" data-view="cards">...</button>
 *   </div>
 *   <div class="db-view" id="view-table">...</div>
 *   <div class="db-view" id="view-cards">...</div>
 *
 * localStorage key comes from `data-view-switch` on the container (fallback
 * 'dash_view') so multiple pages can persist independently.
 */
(function () {
    document.addEventListener('DOMContentLoaded', function () {
        document.querySelectorAll('.db-view-switch').forEach(function (container) {
            if (container.dataset.dashViewInit === '1') return;
            container.dataset.dashViewInit = '1';

            var scope = container.closest('.db-card, body') || document;
            var buttons = container.querySelectorAll('.db-view-switch__btn[data-view]');
            var views   = scope.querySelectorAll('.db-view');
            if (!buttons.length || !views.length) return;

            var key = 'yotta_view_' + (container.dataset.viewSwitch || 'default');

            function apply(mode) {
                buttons.forEach(function (b) { b.classList.toggle('active', b.dataset.view === mode); });
                views.forEach(function (v) { v.style.display = v.id === 'view-' + mode ? '' : 'none'; });
                try { localStorage.setItem(key, mode); } catch (e) {}
            }

            var saved = null;
            try { saved = localStorage.getItem(key); } catch (e) {}
            if (saved === 'cards' || saved === 'table') apply(saved);

            buttons.forEach(function (btn) {
                btn.addEventListener('click', function () { apply(btn.dataset.view); });
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
 * Support PIN — wires up [data-support-pin] blocks anywhere on the page.
 * Copy button pulls the text from [data-pin-value]; refresh is decorative
 * only (backend handles regeneration server-side, this just flashes the icon
 * and shows a toast so the user gets feedback).
 */
document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('[data-support-pin]').forEach(function (root) {
        var valueEl = root.querySelector('[data-pin-value]');
        if (!valueEl) return;

        root.querySelectorAll('[data-pin-copy]').forEach(function (btn) {
            btn.addEventListener('click', function (e) {
                e.preventDefault();
                e.stopPropagation();
                DashCopy(btn, valueEl.textContent.trim());
            });
        });

        root.querySelectorAll('[data-pin-refresh]').forEach(function (btn) {
            btn.addEventListener('click', function (e) {
                e.preventDefault();
                e.stopPropagation();
                var icon = btn.querySelector('i');
                if (icon) {
                    icon.classList.add('fa-spin');
                    setTimeout(function () { icon.classList.remove('fa-spin'); }, 600);
                }
                if (typeof DashToast !== 'undefined') {
                    DashToast.show('info', '', 'Contact support to regenerate your PIN.');
                }
            });
        });
    });
});

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

            // Notify listeners (e.g. DashTablePager) so they can re-render
            // based on the new row order.
            table.dispatchEvent(new CustomEvent('dashtable:sort', {
                detail: { key: key, dir: sortState.dir }
            }));
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


/* ═══════════════════════════════════════════════════════════
   DashTablePager — client-side pagination for any [data-table-tools]
   ═══════════════════════════════════════════════════════════
   Markup contract:

   <table id="serversTable" data-table-tools>...</table>
   <div data-pager-for="serversTable" data-page-size="10"></div>

   • Works hand-in-hand with DashTable: search/filter/sort all still apply.
   • Reads rows AFTER DashTable filter runs, shows only the current page.
   • Listens for the 'dashtable:filter' event to reset to page 1.
   • Uses a marker attribute [data-pager-hidden] so we can distinguish
     rows hidden-by-filter (DashTable) vs hidden-by-pager (us).
   ═══════════════════════════════════════════════════════════ */
window.DashTablePager = (function () {
    var PAGE_SIZES = [10, 25, 50, 100];

    function sizeKey(tableId) { return 'yotta_pager_size_' + tableId; }
    function loadSize(tableId, defaultSize) {
        try {
            var v = parseInt(localStorage.getItem(sizeKey(tableId)), 10);
            if (PAGE_SIZES.indexOf(v) >= 0) return v;
        } catch (e) {}
        return defaultSize;
    }
    function saveSize(tableId, size) {
        try { localStorage.setItem(sizeKey(tableId), String(size)); } catch (e) {}
    }

    function buildPageList(current, total, edgeWindow) {
        var pages = [];
        var left  = Math.max(1, current - edgeWindow);
        var right = Math.min(total, current + edgeWindow);
        for (var i = 1; i <= total; i++) {
            if (i === 1 || i === total || (i >= left && i <= right)) {
                pages.push(i);
            } else if (pages[pages.length - 1] !== '…') {
                pages.push('…');
            }
        }
        return pages;
    }

    function init(container) {
        if (!container || container.dataset.dashPagerInit === '1') return;
        var tableId     = container.getAttribute('data-pager-for');
        var defaultSize = parseInt(container.getAttribute('data-page-size'), 10) || 10;
        var table       = tableId && document.getElementById(tableId);
        if (!table) return;
        var tbody = table.querySelector('tbody');
        if (!tbody) return;
        container.dataset.dashPagerInit = '1';

        var state = {
            page: 1,
            pageSize: loadSize(tableId, defaultSize)
        };

        // A row is "available" (i.e. filter-visible) when DashTable did NOT
        // hide it. We detect that by reading current display: rows we hid
        // ourselves are tagged with [data-pager-hidden].
        function getAvailableRows() {
            var rows = Array.prototype.slice.call(tbody.querySelectorAll('tr[data-row]'));
            return rows.filter(function (r) {
                if (r.hasAttribute('data-pager-hidden')) return true;      // we hid it (page)
                return r.style.display !== 'none';                          // DashTable kept it
            });
        }

        function applyPage() {
            var rows    = getAvailableRows();
            var total   = rows.length;
            var pages   = Math.max(1, Math.ceil(total / state.pageSize));
            if (state.page > pages) state.page = pages;
            if (state.page < 1)     state.page = 1;
            var from    = (state.page - 1) * state.pageSize;
            var to      = Math.min(from + state.pageSize, total);

            rows.forEach(function (row, idx) {
                var onPage = (idx >= from && idx < to);
                if (onPage) {
                    row.removeAttribute('data-pager-hidden');
                    row.style.display = '';
                } else {
                    row.setAttribute('data-pager-hidden', '1');
                    row.style.display = 'none';
                }
            });

            renderBar(state.page, pages, total === 0 ? 0 : from + 1, to, total);
        }

        function renderBar(current, totalPages, from, to, totalRows) {
            var parts = ['<nav class="db-pagination-bar" aria-label="Pagination">'];
            parts.push('<div class="db-pagination-bar__left">');
            if (totalRows === 0) {
                parts.push('<div class="db-pagination-bar__info">No results</div>');
            } else {
            parts.push('<div class="db-pagination-bar__info">Showing ' + from + '\u2013' + to + ' of ' + totalRows + '</div>');
            }
            parts.push(
                '<label class="db-pagination-bar__size">' +
                  '<span>Show</span>' +
                  '<select data-page-size-select aria-label="Rows per page">' +
                    PAGE_SIZES.map(function (n) {
                        return '<option value="' + n + '"' + (n === state.pageSize ? ' selected' : '') + '>' + n + '</option>';
                    }).join('') +
                  '</select>' +
                  '<span>per page</span>' +
                '</label>'
            );
            parts.push('</div>');

            if (totalPages > 1) {
                parts.push('<div class="db-pagination-bar__nav">');
                parts.push(
                    '<button type="button" class="db-pagination-bar__btn db-pagination-bar__btn--nav"' +
                    (current <= 1 ? ' disabled' : '') +
                    ' data-page="' + (current - 1) + '" aria-label="Previous">' +
                    '<i class="fas fa-chevron-left db-pagination-bar__chevron" aria-hidden="true"></i></button>'
                );
                buildPageList(current, totalPages, 1).forEach(function (p) {
                    if (p === '…') {
                        parts.push('<span class="db-pagination-bar__ellipsis" aria-hidden="true">\u2026</span>');
                    } else {
                        var isActive = (p === current);
                        parts.push(
                            '<button type="button" class="db-pagination-bar__page' +
                            (isActive ? ' active' : '') + '"' +
                            (isActive ? ' aria-current="page" aria-disabled="true"' : '') +
                            ' data-page="' + p + '">' + p + '</button>'
                        );
                    }
                });
                parts.push(
                    '<button type="button" class="db-pagination-bar__btn db-pagination-bar__btn--nav"' +
                    (current >= totalPages ? ' disabled' : '') +
                    ' data-page="' + (current + 1) + '" aria-label="Next">' +
                    '<i class="fas fa-chevron-right db-pagination-bar__chevron" aria-hidden="true"></i></button>'
                );
                parts.push('</div>');
            }
            parts.push('</nav>');
            container.innerHTML = parts.join('');

            // Wire page buttons
            container.querySelectorAll('[data-page]').forEach(function (btn) {
                btn.addEventListener('click', function (e) {
                    e.preventDefault();
                    e.stopPropagation();
                    if (btn.hasAttribute('disabled') || btn.getAttribute('aria-disabled') === 'true') return;
                    var target = parseInt(btn.getAttribute('data-page'), 10);
                    if (!target || target === current) return;
                    state.page = target;
                    applyPage();
                    // Scroll the table back into view so the user sees the new page
                    var yOffset = -80;
                    var top = table.getBoundingClientRect().top + window.pageYOffset + yOffset;
                    window.scrollTo({ top: top, behavior: 'smooth' });
                });
            });

            // Wire page-size selector
            var sel = container.querySelector('[data-page-size-select]');
            if (sel) {
                sel.addEventListener('change', function () {
                    var n = parseInt(sel.value, 10);
                    if (PAGE_SIZES.indexOf(n) < 0) return;
                    state.pageSize = n;
                    state.page = 1;
                    saveSize(tableId, n);
                    applyPage();
                });
            }
        }

        // When search/filter changes, snap back to page 1 and re-paginate.
        table.addEventListener('dashtable:filter', function () {
            state.page = 1;
            applyPage();
        });

        // Sort doesn't reset the page — user stays on whatever page they
        // were viewing — but we need to re-slice since DOM order changed.
        table.addEventListener('dashtable:sort', function () {
            applyPage();
        });

        applyPage();
    }

    function initAll(root) {
        (root || document).querySelectorAll('[data-pager-for]').forEach(init);
    }

    return { init: init, initAll: initAll };
})();

document.addEventListener('DOMContentLoaded', function () {
    DashTablePager.initAll();
});


/* ═══════════════════════════════════════════════════════════
   DashStatsToggle — reusable collapse/expand for hero stats
   ═══════════════════════════════════════════════════════════
   Markup contract:

   <div data-collapsible-stats data-stats-key="proj-hero">...stat cards...</div>
   <button type="button" class="db-stats-toggle"
           data-stats-toggle="proj-hero"
           aria-expanded="true"
           aria-controls="..."
           data-label-hide="Hide Stats"
           data-label-show="Show Stats">
       <i class="fas fa-chevron-up db-stats-toggle__icon"></i>
       <span class="db-stats-toggle__label">Hide Stats</span>
   </button>

   • State persisted per key in localStorage ("dash:stats:<key>" = "1" collapsed, "0" expanded).
   • Default state: expanded (no surprise to first-time visitors).
   • Works for any number of pairs on the page.
   ═══════════════════════════════════════════════════════════ */
window.DashStatsToggle = (function () {
    var STORAGE_PREFIX = 'dash:stats:';

    function readState(key) {
        try { return localStorage.getItem(STORAGE_PREFIX + key) === '1'; }
        catch (e) { return false; }
    }

    function writeState(key, collapsed) {
        try { localStorage.setItem(STORAGE_PREFIX + key, collapsed ? '1' : '0'); }
        catch (e) { /* storage unavailable — still animate for the session */ }
    }

    function apply(panel, btn, collapsed, animate) {
        if (!animate) panel.style.transition = 'none';
        panel.classList.toggle('is-collapsed', collapsed);
        if (!animate) {
            // Force reflow, then restore transition
            void panel.offsetHeight;
            panel.style.transition = '';
        }
        if (btn) {
            btn.setAttribute('aria-expanded', collapsed ? 'false' : 'true');
            // Only swap the label text if both hide/show strings are
            // provided; otherwise keep whatever static label is in markup.
            var hideLabel = btn.getAttribute('data-label-hide');
            var showLabel = btn.getAttribute('data-label-show');
            var label = btn.querySelector('.db-stats-toggle__label');
            if (label && hideLabel && showLabel) {
                label.textContent = collapsed ? showLabel : hideLabel;
            }
        }
    }

    function init(btn) {
        if (!btn || btn.dataset.dashStatsToggleInit === '1') return;
        btn.dataset.dashStatsToggleInit = '1';

        var key = btn.getAttribute('data-stats-toggle');
        if (!key) return;
        var panel = document.querySelector('[data-collapsible-stats][data-stats-key="' + key + '"]');
        if (!panel) return;

        // Restore persisted state (no animation on first paint)
        apply(panel, btn, readState(key), false);

        btn.addEventListener('click', function () {
            var nextCollapsed = !panel.classList.contains('is-collapsed');
            apply(panel, btn, nextCollapsed, true);
            writeState(key, nextCollapsed);
        });
    }

    function initAll(root) {
        (root || document).querySelectorAll('[data-stats-toggle]').forEach(init);
    }

    return { init: init, initAll: initAll };
})();

document.addEventListener('DOMContentLoaded', function () {
    DashStatsToggle.initAll();
});


/* ═══════════════════════════════════════════════════════════
   DashTabs — reusable content tab system (in-page JS swap)
   ═══════════════════════════════════════════════════════════
   Markup contract:

   <div class="db-tab-bar" data-tab-bar data-tab-content="#myTabs">
       <button class="db-tab-bar__btn is-active" data-tab-target="overview">
           <i class="fas fa-house"></i> Overview
       </button>
       <button class="db-tab-bar__btn" data-tab-target="settings">
           <i class="fas fa-gear"></i> Settings
       </button>
   </div>

   <div id="myTabs">
       <div class="db-tab-pane is-active" data-tab-pane="overview">...</div>
       <div class="db-tab-pane" data-tab-pane="settings">...</div>
   </div>

   Features:
   - Click a tab to swap content without page reload
   - URL hash sync (#tab-overview) for direct linking + browser back/forward
   - Keyboard support (Arrow Left/Right + Home/End)
   - Auto-init on DOMContentLoaded for any [data-tab-bar]
   - Emits 'dashtabs:change' custom event on the bar
   ═══════════════════════════════════════════════════════════ */

window.DashTabs = (function () {
    function init(bar) {
        if (!bar || bar.dataset.dashTabsInit === '1') return;
        bar.dataset.dashTabsInit = '1';

        var btns = Array.prototype.slice.call(bar.querySelectorAll('[data-tab-target]'));
        var contentSelector = bar.getAttribute('data-tab-content');
        var content = contentSelector ? document.querySelector(contentSelector) : null;
        var hashPrefix = bar.getAttribute('data-tab-hash-prefix') || 'tab-';
        var syncUrl = bar.getAttribute('data-tab-no-url') !== '1';

        function activate(target, opts) {
            if (!target) return;
            opts = opts || {};
            var found = false;

            btns.forEach(function (b) {
                var match = b.getAttribute('data-tab-target') === target;
                b.classList.toggle('is-active', match);
                if (match) found = true;
            });

            if (!found) return;

            if (content) {
                // Only toggle DIRECT-child panes so nested tab bars
                // (e.g. the Abuse sub-tabs inside the main Server tabs)
                // keep their own state intact.
                content.querySelectorAll(':scope > [data-tab-pane]').forEach(function (p) {
                    p.classList.toggle('is-active', p.getAttribute('data-tab-pane') === target);
                });
            }

            if (syncUrl && !opts.skipUrl && history.replaceState) {
                try {
                    history.replaceState(null, '', '#' + hashPrefix + target);
                } catch (err) { /* ignore — restricted context (file://, sandbox, etc.) */ }
            }

            // Fire custom event
            bar.dispatchEvent(new CustomEvent('dashtabs:change', {
                detail: { target: target }
            }));
        }

        btns.forEach(function (b, idx) {
            b.addEventListener('click', function (e) {
                e.preventDefault();
                activate(b.getAttribute('data-tab-target'));
            });
            // Keyboard arrow navigation
            b.addEventListener('keydown', function (e) {
                var next = null;
                if (e.key === 'ArrowRight' || e.key === 'ArrowDown') next = btns[idx + 1] || btns[0];
                else if (e.key === 'ArrowLeft' || e.key === 'ArrowUp') next = btns[idx - 1] || btns[btns.length - 1];
                else if (e.key === 'Home') next = btns[0];
                else if (e.key === 'End') next = btns[btns.length - 1];
                if (next) {
                    e.preventDefault();
                    next.focus();
                    activate(next.getAttribute('data-tab-target'));
                }
            });
        });

        // Initialize from URL hash if present
        if (syncUrl) {
            var hash = (window.location.hash || '').replace('#', '');
            if (hash.indexOf(hashPrefix) === 0) {
                var target = hash.substring(hashPrefix.length);
                if (bar.querySelector('[data-tab-target="' + target + '"]')) {
                    activate(target, { skipUrl: true });
                }
            }
        }
    }

    function initAll(root) {
        (root || document).querySelectorAll('[data-tab-bar]').forEach(init);
    }

    return { init: init, initAll: initAll };
})();

document.addEventListener('DOMContentLoaded', function () {
    DashTabs.initAll();
});
