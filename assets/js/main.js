/**
 * YottaSrc — Main JavaScript
 * ===========================
 * Organized into modules, all wrapped inside DOMContentLoaded.
 * No inline event handlers — all use addEventListener.
 */

document.addEventListener('DOMContentLoaded', function () {
    'use strict';

    /* ═══════════════════════════════════════════
       Module 1: Theme Toggle
       ═══════════════════════════════════════════ */
    const ThemeToggle = (function () {
        const toggle = document.getElementById('themeToggle');
        const html = document.documentElement;
        if (!toggle) return;

        const icon = toggle.querySelector('i');
        const STORAGE_KEY = 'yottasrc_theme';

        function set(theme) {
            html.setAttribute('data-theme', theme);
            if (icon) {
                icon.className = theme === 'dark' ? 'fas fa-sun' : 'fas fa-moon';
            }
            try {
                localStorage.setItem(STORAGE_KEY, theme);
            } catch (e) { /* localStorage unavailable */ }
        }

        function init() {
            // Restore saved preference
            try {
                const saved = localStorage.getItem(STORAGE_KEY);
                if (saved && (saved === 'dark' || saved === 'light')) {
                    set(saved);
                }
            } catch (e) { /* localStorage unavailable */ }

            toggle.addEventListener('click', function () {
                const current = html.getAttribute('data-theme');
                set(current === 'dark' ? 'light' : 'dark');
            });
        }

        return { init: init };
    })();


    /* ═══════════════════════════════════════════
       Module 2: Plan Tabs
       ═══════════════════════════════════════════ */
    const PlanTabs = (function () {
        const tabs = document.querySelectorAll('.plan-tab');
        const grids = document.querySelectorAll('.plans-grid');

        function init() {
            if (!tabs.length) return;

            tabs.forEach(function (tab) {
                tab.addEventListener('click', function () {
                    tabs.forEach(function (t) {
                        t.classList.remove('active');
                    });
                    tab.classList.add('active');

                    var target = tab.dataset.target;
                    grids.forEach(function (grid) {
                        grid.classList.toggle('active', grid.dataset.tab === target);
                    });
                });
            });
        }

        return { init: init };
    })();


    /* ═══════════════════════════════════════════
       Module 3: Scroll Reveal
       ═══════════════════════════════════════════ */
    const ScrollReveal = (function () {
        function init() {
            var reveals = document.querySelectorAll('.reveal');
            if (!reveals.length) return;

            var observer = new IntersectionObserver(function (entries) {
                entries.forEach(function (entry) {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                    }
                });
            }, {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            });

            reveals.forEach(function (el) {
                observer.observe(el);
            });
        }

        return { init: init };
    })();


    /* ═══════════════════════════════════════════
       Module 4: Counter Animation
       ═══════════════════════════════════════════ */
    const CounterAnimation = (function () {
        function animateCounters() {
            var counters = document.querySelectorAll('.stat-num, .stat-number');

            counters.forEach(function (counter) {
                var text = counter.textContent;
                var match = text.match(/^([\d,]+)/);
                if (!match) return;

                var target = parseInt(match[1].replace(/,/g, ''), 10);
                var suffix = text.replace(match[1], '');
                var duration = 1500;
                var start = performance.now();

                function update(now) {
                    var elapsed = now - start;
                    var progress = Math.min(elapsed / duration, 1);
                    var eased = 1 - Math.pow(1 - progress, 3);
                    var current = Math.floor(target * eased);

                    counter.innerHTML = current.toLocaleString() + suffix;

                    if (progress < 1) {
                        requestAnimationFrame(update);
                    }
                }

                requestAnimationFrame(update);
            });
        }

        function init() {
            var statsSection = document.querySelector('.proof-stats');
            if (!statsSection) return;

            var statsObserver = new IntersectionObserver(function (entries) {
                entries.forEach(function (entry) {
                    if (entry.isIntersecting) {
                        animateCounters();
                        statsObserver.disconnect();
                    }
                });
            }, { threshold: 0.3 });

            statsObserver.observe(statsSection);
        }

        return { init: init };
    })();


    /* ═══════════════════════════════════════════
       Module 5: Navigation Scroll Effect
       ═══════════════════════════════════════════ */
    const NavScroll = (function () {
        function init() {
            var navWrapper = document.getElementById('navWrapper');
            if (!navWrapper) return;

            window.addEventListener('scroll', function () {
                navWrapper.style.borderBottomColor = window.scrollY > 10
                    ? 'var(--bg-glass-border)'
                    : 'transparent';
            }, { passive: true });
        }

        return { init: init };
    })();


    /* ═══════════════════════════════════════════
       Module 6: Promo Bar Close
       ═══════════════════════════════════════════ */
    const PromoBar = (function () {
        function init() {
            var closeBtn = document.getElementById('promoClose');
            var promoBar = document.getElementById('promoBar');
            if (!closeBtn || !promoBar) return;

            closeBtn.addEventListener('click', function () {
                promoBar.classList.add('hidden');
            });
        }

        return { init: init };
    })();


    /* ═══════════════════════════════════════════
       Module 7: Plan CTA Buttons (replace inline onclick)
       ═══════════════════════════════════════════ */
    const PlanCTAs = (function () {
        function init() {
            var ctaButtons = document.querySelectorAll('.plan-cta[data-href]');
            ctaButtons.forEach(function (btn) {
                btn.addEventListener('click', function () {
                    var url = btn.getAttribute('data-href');
                    if (url) {
                        window.open(url, '_blank', 'noopener,noreferrer');
                    }
                });
            });
        }

        return { init: init };
    })();


    /* ═══════════════════════════════════════════
       Module 8: Switcher Dropdowns (Language & Currency)
       ═══════════════════════════════════════════ */
    const SwitcherDropdowns = (function () {
        function init() {
            var switchers = document.querySelectorAll('.switcher-dropdown');
            if (!switchers.length) return;

            switchers.forEach(function (switcher) {
                var toggle = switcher.querySelector('.switcher-toggle');
                if (!toggle) return;

                toggle.addEventListener('click', function (e) {
                    e.stopPropagation();

                    // Close all other switchers
                    switchers.forEach(function (other) {
                        if (other !== switcher) {
                            other.classList.remove('open');
                        }
                    });

                    // Toggle current
                    switcher.classList.toggle('open');
                });
            });

            // Close all switchers when clicking outside
            document.addEventListener('click', function (e) {
                if (!e.target.closest('.switcher-dropdown')) {
                    switchers.forEach(function (s) {
                        s.classList.remove('open');
                    });
                }
            });

            // Close on Escape key
            document.addEventListener('keydown', function (e) {
                if (e.key === 'Escape') {
                    switchers.forEach(function (s) {
                        s.classList.remove('open');
                    });
                }
            });
        }

        return { init: init };
    })();


    /* ═══════════════════════════════════════════
       Module 9: Mobile Drawer
       ═══════════════════════════════════════════ */
    const MobileDrawer = (function () {
        function init() {
            var toggleBtn = document.getElementById('mobileMenuToggle');
            var drawer = document.getElementById('mobileDrawer');
            var overlay = document.getElementById('mobileOverlay');
            var closeBtn = document.getElementById('mobileDrawerClose');
            if (!toggleBtn || !drawer || !overlay) return;

            function openDrawer() {
                drawer.classList.add('open');
                overlay.classList.add('active');
                document.body.style.overflow = 'hidden';
                toggleBtn.querySelector('i').className = 'fas fa-times';
            }

            function closeDrawer() {
                drawer.classList.remove('open');
                overlay.classList.remove('active');
                document.body.style.overflow = '';
                toggleBtn.querySelector('i').className = 'fas fa-bars';
            }

            toggleBtn.addEventListener('click', function () {
                if (drawer.classList.contains('open')) {
                    closeDrawer();
                } else {
                    openDrawer();
                }
            });

            if (closeBtn) {
                closeBtn.addEventListener('click', closeDrawer);
            }

            overlay.addEventListener('click', closeDrawer);

            document.addEventListener('keydown', function (e) {
                if (e.key === 'Escape' && drawer.classList.contains('open')) {
                    closeDrawer();
                }
            });

            // Accordion sub-menus
            var groups = drawer.querySelectorAll('.mobile-nav-group');
            groups.forEach(function (group) {
                var trigger = group.querySelector('.mobile-nav-trigger');
                if (!trigger) return;

                trigger.addEventListener('click', function () {
                    // Close other open groups
                    groups.forEach(function (other) {
                        if (other !== group) {
                            other.classList.remove('open');
                        }
                    });
                    group.classList.toggle('open');
                });
            });

            // Close drawer on window resize above mobile breakpoint
            window.addEventListener('resize', function () {
                if (window.innerWidth > 1024 && drawer.classList.contains('open')) {
                    closeDrawer();
                }
            });
        }

        return { init: init };
    })();


    /* ═══════════════════════════════════════════
       INITIALIZE ALL MODULES
       ═══════════════════════════════════════════ */
    ThemeToggle.init();
    PlanTabs.init();
    ScrollReveal.init();
    CounterAnimation.init();
    NavScroll.init();
    PromoBar.init();
    PlanCTAs.init();
    SwitcherDropdowns.init();
    MobileDrawer.init();
});
