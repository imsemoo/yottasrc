/**
 * YottaSrc — Main JavaScript
 * ===========================
 * Organized into modules, all wrapped inside DOMContentLoaded.
 * No inline event handlers — all use addEventListener.
 */

document.addEventListener('DOMContentLoaded', function () {
    'use strict';

    var isRTL = document.documentElement.getAttribute('dir') === 'rtl';

    /* ═══════════════════════════════════════════
       Module 1: Theme Toggle
       ═══════════════════════════════════════════ */
    const ThemeToggle = (function () {
        const toggle = document.getElementById('themeToggle');
        const html = document.documentElement;
        if (!toggle) return { init: function () {} };

        const STORAGE_KEY = 'yottasrc_theme';

        function set(theme) {
            html.setAttribute('data-theme', theme);
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
        const panels = document.querySelectorAll('.plans-panel');
        var swipers = {};

        function initSwiper(panel) {
            var el = panel.querySelector('.plans-swiper');
            if (!el || typeof Swiper === 'undefined') return;
            var key = panel.dataset.tab;
            if (swipers[key]) return;

            var isHome = !!el.closest('.home-plans');

            swipers[key] = new Swiper(el, {
                rtl: isRTL,
                slidesPerView: 1,
                spaceBetween: isHome ? 20 : 12,
                grabCursor: true,
                loop: !isHome,
                autoplay: isHome ? false : {
                    delay: 4500,
                    disableOnInteraction: false,
                    pauseOnMouseEnter: true
                },
                pagination: {
                    el: el.querySelector('.swiper-pagination'),
                    clickable: true
                },
                breakpoints: isHome ? {
                    480: { slidesPerView: 2, spaceBetween: 16 },
                    768: { slidesPerView: 3, spaceBetween: 20 }
                } : {
                    480: { slidesPerView: 2 },
                    768: { slidesPerView: 3 },
                    1024: { slidesPerView: 4 }
                }
            });
        }

        function init() {
            if (!panels.length) return;

            // Init swiper for the active panel(s)
            panels.forEach(function (p) {
                if (p.classList.contains('active')) initSwiper(p);
            });

            tabs.forEach(function (tab) {
                tab.addEventListener('click', function () {
                    tabs.forEach(function (t) { t.classList.remove('active'); });
                    tab.classList.add('active');

                    var target = tab.dataset.target;
                    panels.forEach(function (panel) {
                        var isActive = panel.dataset.tab === target;
                        panel.classList.toggle('active', isActive);
                        if (isActive) initSwiper(panel);
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
                threshold: 0.05,
                rootMargin: '0px 0px -20px 0px'
            });

            reveals.forEach(function (el) {
                var rect = el.getBoundingClientRect();
                if (rect.top < window.innerHeight && rect.bottom > 0) {
                    el.classList.add('visible');
                } else {
                    observer.observe(el);
                }
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

        function animateHeroStats(container) {
            var nums = container.querySelectorAll('.hero-stat-num[data-count]');
            nums.forEach(function (el) {
                var target = parseInt(el.getAttribute('data-count'), 10);
                if (isNaN(target)) return;
                var duration = 1500;
                var start = performance.now();

                function update(now) {
                    var elapsed = now - start;
                    var progress = Math.min(elapsed / duration, 1);
                    var eased = 1 - Math.pow(1 - progress, 3);
                    el.textContent = Math.floor(target * eased);
                    if (progress < 1) requestAnimationFrame(update);
                }
                requestAnimationFrame(update);
            });
        }

        function init() {
            var statsSection = document.querySelector('.proof-stats');
            if (statsSection) {
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

            var heroStats = document.querySelectorAll('.page-hero-stats, .dc-hero-stats');
            heroStats.forEach(function (hs) {
                var heroObserver = new IntersectionObserver(function (entries) {
                    entries.forEach(function (entry) {
                        if (entry.isIntersecting) {
                            animateHeroStats(entry.target);
                            heroObserver.disconnect();
                        }
                    });
                }, { threshold: 0.3 });
                heroObserver.observe(hs);
            });
        }

        return { init: init };
    })();


    /* ═══════════════════════════════════════════
       Module 5: Navigation Scroll Effect
       ═══════════════════════════════════════════ */
    const NavScroll = (function () {
        function init() {
            var header = document.getElementById('navWrapper');
            if (!header) return;

            var lastY = 0;
            var ticking = false;
            var threshold = 80;

            window.addEventListener('scroll', function () {
                if (!ticking) {
                    requestAnimationFrame(function () {
                        var y = window.pageYOffset;
                        if (y <= threshold) {
                            header.classList.remove('nav-hidden');
                        } else if (y > lastY + 5) {
                            header.classList.add('nav-hidden');
                        } else if (y < lastY - 5) {
                            header.classList.remove('nav-hidden');
                        }
                        lastY = y;
                        ticking = false;
                    });
                    ticking = true;
                }
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
        function extractPlanData(btn) {
            var card = btn.closest('.plan-card');
            if (!card) return null;
            var nameEl = card.querySelector('.plan-name');
            var amountEl = card.querySelector('.current-price .amount');
            var currencyEl = card.querySelector('.current-price .currency');
            var periodEl = card.querySelector('.current-price .period');
            return {
                name: nameEl ? nameEl.textContent.trim() : 'Plan',
                amount: amountEl ? parseFloat(amountEl.textContent.trim()) : 0,
                currency: currencyEl ? currencyEl.textContent.trim() : '$',
                period: periodEl ? periodEl.textContent.trim() : '/mo',
                url: btn.getAttribute('data-href') || '',
                type: btn.getAttribute('data-type') || (card ? card.getAttribute('data-type') : '') || 'hosting'
            };
        }

        function init() {
            var ctaButtons = document.querySelectorAll('.plan-cta');
            ctaButtons.forEach(function (btn) {
                btn.addEventListener('click', function () {
                    var planData = extractPlanData(btn);
                    if (typeof OrderModal !== 'undefined') {
                        OrderModal.open(planData);
                    }
                });
            });
        }

        return { init: init };
    })();


    /* ═══════════════════════════════════════════
       Module 7b: VPS CTA Buttons — open modal with type=vps
       ═══════════════════════════════════════════ */
    const VpsCTAs = (function () {
        function init() {
            document.querySelectorAll('.vps-row-btn').forEach(function (btn) {
                btn.addEventListener('click', function (e) {
                    e.preventDefault();
                    var row = btn.closest('.vps-row');
                    if (!row) return;
                    var nameEl = row.querySelector('.vps-row-name');
                    var amountEl = row.querySelector('.vps-row-amount');
                    var rawAmount = amountEl ? amountEl.textContent.trim() : '0';
                    var currency = rawAmount.replace(/[\d.,]/g, '') || '€';
                    var amount = parseFloat(rawAmount.replace(/[^\d.,]/g, '').replace(',', '.')) || 0;
                    var planData = {
                        name: nameEl ? nameEl.textContent.trim() : 'VPS',
                        amount: amount,
                        currency: currency,
                        period: '/mo',
                        url: btn.getAttribute('href') || '',
                        type: 'vps'
                    };
                    if (typeof OrderModal !== 'undefined') {
                        OrderModal.open(planData);
                    }
                });
            });
        }
        return { init: init };
    })();


    /* ═══════════════════════════════════════════
       Module 7c: MS Keys CTA Buttons — open modal with type=keys
       ═══════════════════════════════════════════ */
    const MsKeysCTAs = (function () {
        function extractFromCard(btn) {
            var card = btn.closest('.ms-product-card');
            if (!card) return null;
            var nameEl = card.querySelector('.ms-product-name');
            var priceEl = card.querySelector('.ms-product-price');
            var rawPrice = priceEl ? priceEl.textContent.trim() : '0';
            var currency = rawPrice.replace(/[\d.,]/g, '') || '€';
            var amount = parseFloat(rawPrice.replace(/[^\d.,]/g, '').replace(',', '.')) || 0;
            var name = nameEl ? nameEl.textContent.trim() : 'License Key';
            var badgeEl = nameEl ? nameEl.querySelector('.ms-product-badge') : null;
            if (badgeEl) name = name.replace(badgeEl.textContent.trim(), '').trim();
            return { name: name, amount: amount, currency: currency, period: '', url: '', type: 'keys' };
        }

        function extractFromDetailPage(btn) {
            var nameEl = document.querySelector('.mkd-product-title');
            var priceEl = document.querySelector('.mkd-current-price');
            var rawPrice = priceEl ? priceEl.textContent.trim() : '0';
            var currency = rawPrice.replace(/[\d.,]/g, '') || '€';
            var amount = parseFloat(rawPrice.replace(/[^\d.,]/g, '').replace(',', '.')) || 0;
            var qty = document.getElementById('mkdQty');
            var q = qty ? parseInt(qty.value) || 1 : 1;
            return {
                name: nameEl ? nameEl.textContent.trim() : 'License Key',
                amount: amount * q,
                currency: currency,
                period: '',
                url: '',
                type: 'keys'
            };
        }

        function init() {
            // Use event delegation for reliability
            document.addEventListener('click', function (e) {
                var btn = e.target.closest('.ms-order-btn');
                if (btn) {
                    e.preventDefault();
                    e.stopPropagation();
                    var planData = extractFromCard(btn);
                    if (planData && typeof OrderModal !== 'undefined') {
                        OrderModal.open(planData);
                    }
                    return;
                }

                var mkdBtn = e.target.closest('.mkd-order-btn');
                if (mkdBtn) {
                    e.preventDefault();
                    e.stopPropagation();
                    var data = extractFromDetailPage(mkdBtn);
                    if (data && typeof OrderModal !== 'undefined') {
                        OrderModal.open(data);
                    }
                }
            });
        }
        return { init: init };
    })();


    /* ═══════════════════════════════════════════
       Module 8: Switcher Dropdowns (Language & Currency)
       ═══════════════════════════════════════════ */
    const SwitcherDropdowns = (function () {
        function closeAll() {
            document.querySelectorAll('.switcher-dropdown.open').forEach(function (s) {
                s.classList.remove('open');
            });
        }

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

            // Close switchers when hovering over nav links (bottom tier)
            var navLinks = document.querySelector('.nav-links');
            if (navLinks) {
                navLinks.addEventListener('mouseenter', closeAll);
            }

            // Close all switchers when clicking outside
            document.addEventListener('click', function (e) {
                if (!e.target.closest('.switcher-dropdown')) {
                    closeAll();
                }
            });

            // Close on Escape key
            document.addEventListener('keydown', function (e) {
                if (e.key === 'Escape') {
                    closeAll();
                }
            });
        }

        return { init: init, closeAll: closeAll };
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
       Module 10: FAQ Tabs & Accordion
       ═══════════════════════════════════════════ */
    const FAQSection = (function () {
        function init() {
            var faqTabs = document.querySelectorAll('.faq-tab');
            var faqPanels = document.querySelectorAll('.faq-panel');

            // Tab switching (only if tabs exist)
            faqTabs.forEach(function (tab) {
                tab.addEventListener('click', function () {
                    faqTabs.forEach(function (t) { t.classList.remove('active'); });
                    tab.classList.add('active');

                    var target = tab.dataset.faqTarget;
                    faqPanels.forEach(function (panel) {
                        panel.classList.toggle('active', panel.id === target);
                    });

                    // Close all open items when switching tabs
                    document.querySelectorAll('.faq-item.open').forEach(function (item) {
                        item.classList.remove('open');
                        var answer = item.querySelector('.faq-answer');
                        if (answer) answer.style.maxHeight = null;
                    });

                    // Open first item in the newly active panel
                    var newPanel = document.getElementById(target);
                    if (newPanel) {
                        var firstItem = newPanel.querySelector('.faq-item');
                        if (firstItem) {
                            firstItem.classList.add('open');
                            var firstAnswer = firstItem.querySelector('.faq-answer');
                            if (firstAnswer) firstAnswer.style.maxHeight = firstAnswer.scrollHeight + 'px';
                        }
                    }
                });
            });

            // Accordion
            var questions = document.querySelectorAll('.faq-question');
            questions.forEach(function (question) {
                question.addEventListener('click', function () {
                    var item = question.closest('.faq-item');
                    var panel = item.closest('.faq-panel');
                    var answer = item.querySelector('.faq-answer');
                    var isOpen = item.classList.contains('open');

                    // Close other items in the same panel
                    panel.querySelectorAll('.faq-item.open').forEach(function (openItem) {
                        if (openItem !== item) {
                            openItem.classList.remove('open');
                            var openAnswer = openItem.querySelector('.faq-answer');
                            if (openAnswer) openAnswer.style.maxHeight = null;
                        }
                    });

                    // Toggle current
                    if (isOpen) {
                        item.classList.remove('open');
                        answer.style.maxHeight = null;
                    } else {
                        item.classList.add('open');
                        answer.style.maxHeight = answer.scrollHeight + 'px';
                    }
                });
            });

            // Open first FAQ item in active panel by default
            var activePanel = document.querySelector('.faq-panel.active');
            if (activePanel) {
                var firstItem = activePanel.querySelector('.faq-item');
                if (firstItem) {
                    firstItem.classList.add('open');
                    var firstAnswer = firstItem.querySelector('.faq-answer');
                    if (firstAnswer) firstAnswer.style.maxHeight = firstAnswer.scrollHeight + 'px';
                }
            }

            // Search filter
            var searchInput = document.getElementById('faqSearch');
            if (searchInput) {
                var faqItems = document.querySelectorAll('.faq-item');
                var noResults = document.querySelector('.faq-no-results');

                searchInput.addEventListener('input', function () {
                    var query = this.value.toLowerCase().trim();
                    var visibleCount = 0;

                    faqItems.forEach(function (item) {
                        var questionText = item.querySelector('.faq-question span');
                        var answerText = item.querySelector('.faq-answer p');
                        var text = (questionText ? questionText.textContent : '') + ' ' + (answerText ? answerText.textContent : '');

                        if (!query || text.toLowerCase().indexOf(query) !== -1) {
                            item.style.display = '';
                            visibleCount++;
                        } else {
                            item.style.display = 'none';
                            item.classList.remove('open');
                            var answer = item.querySelector('.faq-answer');
                            if (answer) answer.style.maxHeight = null;
                        }
                    });

                    if (noResults) {
                        noResults.style.display = (query && visibleCount === 0) ? 'block' : 'none';
                    }
                });
            }
        }

        return { init: init };
    })();


    /* ═══════════════════════════════════════════
       Module 11: Testimonials Swiper
       ═══════════════════════════════════════════ */
    const TestimonialsCarousel = (function () {
        function init() {
            var el = document.getElementById('testimonialsSwiper');
            if (!el || typeof Swiper === 'undefined') return;

            new Swiper(el, {
                rtl: isRTL,
                slidesPerView: 1,
                spaceBetween: 20,
                grabCursor: true,
                loop: true,
                autoplay: {
                    delay: 4000,
                    disableOnInteraction: false,
                    pauseOnMouseEnter: true
                },
                pagination: {
                    el: '.testimonials-swiper .swiper-pagination',
                    clickable: true
                },
                breakpoints: {
                    640: { slidesPerView: 2 },
                    1024: { slidesPerView: 3 }
                }
            });
        }

        return { init: init };
    })();


    /* ═══════════════════════════════════════════
       Module 12: Tech Stack Swiper
       ═══════════════════════════════════════════ */
    const TechSwiper = (function () {
        function init() {
            var el = document.getElementById('techSwiper');
            if (!el || typeof Swiper === 'undefined') return;

            new Swiper(el, {
                rtl: isRTL,
                slidesPerView: 2,
                spaceBetween: 16,
                grabCursor: true,
                loop: true,
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false,
                    pauseOnMouseEnter: true
                },
                pagination: {
                    el: '.tech-swiper .swiper-pagination',
                    clickable: true
                },
                breakpoints: {
                    640: { slidesPerView: 3 },
                    1024: { slidesPerView: 4 },
                    1280: { slidesPerView: 6 }
                }
            });
        }

        return { init: init };
    })();


    /* ═══════════════════════════════════════════
       Module 13: Timeline Swiper (About page)
       ═══════════════════════════════════════════ */
    const TimelineSwiper = (function () {
        function init() {
            var el = document.getElementById('timelineSwiper');
            if (!el || typeof Swiper === 'undefined') return;

            new Swiper(el, {
                rtl: isRTL,
                slidesPerView: 2,
                spaceBetween: 16,
                grabCursor: true,
                loop: true,
                autoplay: {
                    delay: 3500,
                    disableOnInteraction: false,
                    pauseOnMouseEnter: true
                },
                pagination: {
                    el: '.timeline-swiper .swiper-pagination',
                    clickable: true
                },
                breakpoints: {
                    640: { slidesPerView: 3 },
                    1024: { slidesPerView: 4 },
                    1280: { slidesPerView: 5 }
                }
            });
        }

        return { init: init };
    })();


    /* ═══════════════════════════════════════════
       Module 14: Team Swiper (About page)
       ═══════════════════════════════════════════ */
    const TeamSwiper = (function () {
        function init() {
            var el = document.getElementById('teamSwiper');
            if (!el || typeof Swiper === 'undefined') return;

            new Swiper(el, {
                rtl: isRTL,
                slidesPerView: 2,
                spaceBetween: 16,
                grabCursor: true,
                loop: true,
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false,
                    pauseOnMouseEnter: true
                },
                pagination: {
                    el: '.team-swiper .swiper-pagination',
                    clickable: true
                },
                breakpoints: {
                    640: { slidesPerView: 3 },
                    1024: { slidesPerView: 4 },
                    1280: { slidesPerView: 5 }
                }
            });
        }

        return { init: init };
    })();


    /* ═══════════════════════════════════════════
       Module 15: Services Swiper
       ═══════════════════════════════════════════ */
    const ServicesSwiper = (function () {
        function init() {
            var el = document.getElementById('servicesSwiper');
            if (!el || typeof Swiper === 'undefined') return;

            new Swiper(el, {
                rtl: isRTL,
                slidesPerView: 1,
                spaceBetween: 20,
                grabCursor: true,
                loop: true,
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false,
                    pauseOnMouseEnter: true
                },
                pagination: {
                    el: '.services-swiper .swiper-pagination',
                    clickable: true
                },
                breakpoints: {
                    640: { slidesPerView: 2 },
                    1024: { slidesPerView: 3 }
                }
            });
        }

        return { init: init };
    })();


    /* ═══════════════════════════════════════════
       Module 16: Tutorials Swiper
       ═══════════════════════════════════════════ */
    const TutorialsSwiper = (function () {
        function init() {
            var el = document.getElementById('tutorialsSwiper');
            if (!el || typeof Swiper === 'undefined') return;

            new Swiper(el, {
                rtl: isRTL,
                slidesPerView: 1,
                spaceBetween: 20,
                grabCursor: true,
                loop: true,
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false,
                    pauseOnMouseEnter: true
                },
                pagination: {
                    el: '.tutorials-swiper .swiper-pagination',
                    clickable: true
                },
                breakpoints: {
                    640: { slidesPerView: 2 },
                    1024: { slidesPerView: 3 }
                }
            });
        }

        return { init: init };
    })();


    /* ═══════════════════════════════════════════
       Module 17: DC Map Tooltips
       ═══════════════════════════════════════════ */
    const DCMapTooltips = (function () {
        var DC_INFO = {
            'Romania (HQ)':    { city: 'Bucharest',  region: 'Romania · HQ' },
            'Germany':         { city: 'Frankfurt',   region: 'Germany' },
            'Netherlands':     { city: 'Amsterdam',   region: 'Netherlands' },
            'France':          { city: 'Paris',       region: 'France' },
            'Finland':         { city: 'Helsinki',    region: 'Finland' },
            'Turkey':          { city: 'Istanbul',    region: 'Turkey' },
            'USA (Virginia)':  { city: 'Ashburn',     region: 'Virginia, USA' },
            'Canada':          { city: 'Toronto',     region: 'Ontario, Canada' },
            'India':           { city: 'Mumbai',      region: 'India' },
            'Singapore':       { city: 'Singapore',   region: 'Southeast Asia' },
            'Japan':           { city: 'Tokyo',       region: 'Japan' },
            'Australia':       { city: 'Sydney',      region: 'Australia' },
            'UAE':             { city: 'Dubai',       region: 'United Arab Emirates' },
            'Brazil':          { city: 'São Paulo',   region: 'Brazil' }
        };

        function setup(mapId, tipId) {
            var map = document.getElementById(mapId);
            if (!map) return;
            var tip = document.getElementById(tipId);
            if (!tip) return;

            var svgEl = map.querySelector('.dc-map-svg');
            var VB_W = 1000, VB_H = 500;

            /* — Staggered reveal via IntersectionObserver — */
            var nodes = map.querySelectorAll('.dc-node');
            var observer = new IntersectionObserver(function (entries) {
                entries.forEach(function (entry) {
                    if (!entry.isIntersecting) return;
                    map.classList.add('dc-map--visible');
                    nodes.forEach(function (n, i) {
                        n.style.transitionDelay = (i * 0.12) + 's';
                    });
                    observer.unobserve(entry.target);
                });
            }, { threshold: 0.15 });
            observer.observe(map);

            /* — Tooltip — */
            tip.innerHTML = '<span class="dc-tooltip-indicator"></span>'
                + '<span class="dc-tooltip-text">'
                + '<span class="dc-tooltip-city"></span>'
                + '<span class="dc-tooltip-region"></span>'
                + '</span>';

            var tipCity = tip.querySelector('.dc-tooltip-city');
            var tipRegion = tip.querySelector('.dc-tooltip-region');

            map.addEventListener('mouseover', function (e) {
                var node = e.target.closest('.dc-node');
                if (!node) return;
                var key = node.getAttribute('data-dc');
                if (!key) return;
                var info = DC_INFO[key] || { city: key, region: '' };

                tipCity.textContent = info.city;
                tipRegion.textContent = info.region;

                if (node.classList.contains('dc-node-hq')) {
                    tip.classList.add('dc-tooltip--hq');
                } else {
                    tip.classList.remove('dc-tooltip--hq');
                }

                tip.classList.add('visible');

                var dot = node.querySelector('.dc-dot');
                var mapRect = map.getBoundingClientRect();
                var svgRect = svgEl.getBoundingClientRect();
                var sx = svgRect.width / VB_W;
                var sy = svgRect.height / VB_H;
                var cx = parseFloat(dot.getAttribute('cx'));
                var cy = parseFloat(dot.getAttribute('cy'));
                var px = cx * sx + svgRect.left - mapRect.left;
                var py = cy * sy + svgRect.top - mapRect.top;

                tip.style.left = px + 'px';
                tip.style.top = (py - 42) + 'px';
                tip.style.transform = 'translateX(-50%)';
            });

            map.addEventListener('mouseout', function (e) {
                if (!e.target.closest('.dc-node')) {
                    tip.classList.remove('visible');
                }
            });

            map.addEventListener('mouseleave', function () {
                tip.classList.remove('visible');
            });
        }

        function init() {
            setup('dcMap', 'dcTooltip');
            setup('dcMapAbout', 'dcTooltipAbout');
        }

        return { init: init };
    })();


    /* ═══════════════════════════════════════════
       Module 18: Features Swiper (Hosting pages)
       ═══════════════════════════════════════════ */
    const FeaturesSwiper = (function () {
        function init() {
            var el = document.getElementById('featuresSwiper');
            if (!el || typeof Swiper === 'undefined') return;

            new Swiper(el, {
                rtl: isRTL,
                slidesPerView: 2,
                spaceBetween: 16,
                grabCursor: true,
                loop: true,
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false,
                    pauseOnMouseEnter: true
                },
                pagination: {
                    el: '.features-swiper .swiper-pagination',
                    clickable: true
                },
                breakpoints: {
                    640: { slidesPerView: 3 },
                    1024: { slidesPerView: 4 }
                }
            });
        }

        return { init: init };
    })();


    /* ═══════════════════════════════════════════
       Module 19: Cloud Use Cases Swiper
       ═══════════════════════════════════════════ */
    const CloudUsecasesSwiper = (function () {
        function init() {
            var el = document.getElementById('cloudUsecasesSwiper');
            if (!el || typeof Swiper === 'undefined') return;

            new Swiper(el, {
                rtl: isRTL,
                slidesPerView: 1,
                spaceBetween: 20,
                grabCursor: true,
                loop: true,
                autoplay: {
                    delay: 4000,
                    disableOnInteraction: false,
                    pauseOnMouseEnter: true
                },
                pagination: {
                    el: '.cloud-usecases-swiper .swiper-pagination',
                    clickable: true
                },
                breakpoints: {
                    640: { slidesPerView: 2 },
                    1024: { slidesPerView: 3 }
                }
            });
        }

        return { init: init };
    })();


    /* ═══════════════════════════════════════════
       Module 20: Dedicated Use Cases Swiper
       ═══════════════════════════════════════════ */
    const DsUsecasesSwiper = (function () {
        function init() {
            var el = document.getElementById('dsUsecasesSwiper');
            if (!el || typeof Swiper === 'undefined') return;

            new Swiper(el, {
                rtl: isRTL,
                slidesPerView: 1,
                spaceBetween: 20,
                grabCursor: true,
                loop: true,
                autoplay: {
                    delay: 4500,
                    disableOnInteraction: false,
                    pauseOnMouseEnter: true
                },
                pagination: {
                    el: '.ds-usecases-swiper .swiper-pagination',
                    clickable: true
                },
                breakpoints: {
                    640: { slidesPerView: 2 },
                    1024: { slidesPerView: 3 }
                }
            });
        }

        return { init: init };
    })();


    /* ═══════════════════════════════════════════
       Module 21: Location Tabs (Hosting pages)
       ═══════════════════════════════════════════ */
    const LocationTabs = (function () {
        function init() {
            var tabs = document.querySelectorAll('.loc-tab');
            if (!tabs.length) return;

            tabs.forEach(function (tab) {
                tab.addEventListener('click', function () {
                    var target = this.getAttribute('data-loc-target');
                    if (!target) return;

                    tabs.forEach(function (t) { t.classList.remove('active'); });
                    document.querySelectorAll('.loc-panel').forEach(function (p) { p.classList.remove('active'); });

                    this.classList.add('active');
                    var panel = document.getElementById(target);
                    if (panel) panel.classList.add('active');
                });
            });
        }

        return { init: init };
    })();


    /* ═══════════════════════════════════════════
       Module 21b: Location Card Active State
       ═══════════════════════════════════════════ */
    const LocationCardActive = (function () {
        function init() {
            document.addEventListener('click', function (e) {
                var card = e.target.closest('.location-card');
                if (!card) return;

                var grid = card.closest('.loc-card-grid, .dc-continent-locs, .dc-country-grid');
                if (!grid) return;

                grid.querySelectorAll('.location-card').forEach(function (c) {
                    c.classList.remove('location-card--active');
                });
                card.classList.add('location-card--active');
            });
        }

        return { init: init };
    })();


    /* ═══════════════════════════════════════════
       Module 22: Blog Filter & Search
       ═══════════════════════════════════════════ */
    const BlogHub = (function () {
        function init() {
            var searchInput = document.getElementById('blogSearch');
            var tags = document.querySelectorAll('.blog-tag');
            var cards = document.querySelectorAll('.blog-card[data-category]');
            var noResults = document.getElementById('blogNoResults');
            var pagination = document.getElementById('blogPagination');

            if (!cards.length) return;

            var activeCategory = 'all';

            function filterCards() {
                var query = searchInput ? searchInput.value.toLowerCase().trim() : '';
                var visibleCount = 0;

                cards.forEach(function (card) {
                    var category = card.getAttribute('data-category') || '';
                    var title = card.querySelector('h4');
                    var excerpt = card.querySelector('.blog-card-body > p');
                    var text = (title ? title.textContent : '') + ' ' + (excerpt ? excerpt.textContent : '');

                    var matchesCat = (activeCategory === 'all' || category === activeCategory);
                    var matchesSearch = (!query || text.toLowerCase().indexOf(query) !== -1);

                    if (matchesCat && matchesSearch) {
                        card.style.display = '';
                        visibleCount++;
                    } else {
                        card.style.display = 'none';
                    }
                });

                if (noResults) {
                    noResults.style.display = visibleCount === 0 ? 'block' : 'none';
                }

                if (pagination) {
                    pagination.style.display = (query || activeCategory !== 'all') ? 'none' : '';
                }
            }

            // Category tags
            tags.forEach(function (tag) {
                tag.addEventListener('click', function () {
                    tags.forEach(function (t) { t.classList.remove('active'); });
                    tag.classList.add('active');
                    activeCategory = tag.getAttribute('data-category') || 'all';
                    filterCards();
                });
            });

            // Search
            if (searchInput) {
                searchInput.addEventListener('input', filterCards);
            }
        }

        return { init: init };
    })();


    /* ═══════════════════════════════════════════
       Module 23: VPS Row Expand/Collapse
       ═══════════════════════════════════════════ */
    const VpsRowToggle = (function () {
        function init() {
            var rows = document.querySelectorAll('.vps-row');
            if (!rows.length) return;

            rows.forEach(function (row) {
                row.addEventListener('click', function (e) {
                    // Don't toggle if clicking the order button or a link
                    if (e.target.closest('.vps-row-btn') || e.target.closest('a')) return;

                    row.classList.toggle('expanded');
                });
            });
        }

        return { init: init };
    })();


    /* ═══════════════════════════════════════════
       Module 24: Partners Marquee
       ═══════════════════════════════════════════ */
    const PartnersMarquee = (function () {
        function init() {
            var containers = document.querySelectorAll('.partners-logos');
            containers.forEach(function (container) {
                var logos = Array.from(container.children);
                if (logos.length < 2) return;

                // Build first track — duplicate logos enough times so track is always wider than viewport
                var track1 = document.createElement('div');
                track1.className = 'partners-track';
                var copies = Math.max(2, Math.ceil(6 / logos.length));
                for (var c = 0; c < copies; c++) {
                    logos.forEach(function (logo) {
                        track1.appendChild(logo.cloneNode(true));
                    });
                }

                // Clone track for seamless infinite loop
                var track2 = track1.cloneNode(true);
                track2.setAttribute('aria-hidden', 'true');

                // Replace container contents with the two tracks
                container.innerHTML = '';
                container.appendChild(track1);
                container.appendChild(track2);
                container.classList.add('partners-marquee');

                // Click to pause, auto-resume after 3s
                container.addEventListener('click', function () {
                    container.classList.add('partners-paused');
                    clearTimeout(container._resumeTimer);
                    container._resumeTimer = setTimeout(function () {
                        container.classList.remove('partners-paused');
                    }, 3000);
                });
            });
        }

        return { init: init };
    })();


    /* ═══════════════════════════════════════════
       Module 25: Order Modal (Multi-Step Wizard) — v2 Professional
       ═══════════════════════════════════════════ */
    const OrderModal = (function () {
        var overlay, body, progressFill, stepsNav, stepNumEl, stepTotalEl;
        var backBtn, nextBtn;
        var currentStep = 1;
        var totalSteps = 7;
        var planData = {};
        var discounts = { 1: 0, 3: 5, 6: 10, 12: 15, 24: 25, 36: 30 };

        function init() {
            overlay = document.getElementById('orderModal');
            if (!overlay) return;

            body = document.getElementById('omBody');
            progressFill = document.getElementById('omProgressFill');
            stepsNav = document.getElementById('omStepsNav');
            stepNumEl = document.getElementById('omStepNum');
            stepTotalEl = document.getElementById('omTotalSteps');
            backBtn = document.getElementById('omBack');
            nextBtn = document.getElementById('omNext');

            // VPS Config badge listeners
            initConfigBadges();

            // Close triggers
            document.getElementById('omClose').addEventListener('click', close);
            overlay.addEventListener('click', function (e) {
                if (e.target === overlay) close();
            });
            document.addEventListener('keydown', function (e) {
                if (e.key === 'Escape' && overlay.classList.contains('om-open')) close();
            });

            // Navigation
            backBtn.addEventListener('click', prevStep);
            nextBtn.addEventListener('click', nextStepHandler);

            // Step dots (allow clicking completed/active steps)
            stepsNav.querySelectorAll('.om-step-dot').forEach(function (dot) {
                dot.addEventListener('click', function () {
                    var target = parseInt(dot.getAttribute('data-step'));
                    if (target < currentStep) goToStep(target);
                });
            });

            // Location tabs
            initTabSwitcher('omLocTabs', 'om-loc-tab', 'data-continent', 'omLocGrid', 'om-loc-group', 'data-continent');

            // Domain tabs
            initDomainTabs();

            // Domain search (register / transfer mock results)
            initDomainSearch();

            // Account tabs
            initAccountTabs();

            // Eye toggle buttons
            overlay.querySelectorAll('.om-eye-toggle').forEach(function (btn) {
                btn.addEventListener('click', function () {
                    var input = btn.parentElement.querySelector('input');
                    var icon = btn.querySelector('i');
                    if (input.type === 'password') {
                        input.type = 'text';
                        icon.classList.replace('fa-eye', 'fa-eye-slash');
                    } else {
                        input.type = 'password';
                        icon.classList.replace('fa-eye-slash', 'fa-eye');
                    }
                });
            });

            // Populate country select
            populateCountries();

            // Add pulse animation on card selection
            initSelectionPulse();
        }

        function initSelectionPulse() {
            // Add pulse + card float effect on selection for billing, location, payment cards
            ['om-billing-card', 'om-loc-card', 'om-pay-card'].forEach(function (cls) {
                overlay.querySelectorAll('.' + cls + ' input').forEach(function (input) {
                    input.addEventListener('change', function () {
                        var card = input.closest('.' + cls);
                        if (!card) return;
                        var inner = card.querySelector('.om-billing-inner, .om-pay-inner') || card;
                        inner.classList.remove('om-pulse');
                        void inner.offsetWidth; // force reflow
                        inner.classList.add('om-pulse');
                    });
                });
            });
        }

        function initTabSwitcher(tabsId, tabClass, tabAttr, gridId, groupClass, groupAttr) {
            var container = document.getElementById(tabsId);
            var grid = document.getElementById(gridId);
            if (!container || !grid) return;

            container.querySelectorAll('.' + tabClass).forEach(function (tab) {
                tab.addEventListener('click', function () {
                    container.querySelectorAll('.' + tabClass).forEach(function (t) { t.classList.remove('active'); });
                    tab.classList.add('active');
                    var val = tab.getAttribute(tabAttr);
                    grid.querySelectorAll('.' + groupClass).forEach(function (g) {
                        g.classList.toggle('active', g.getAttribute(groupAttr) === val);
                    });
                });
            });
        }

        function initDomainTabs() {
            var tabsEl = document.getElementById('omDomainTabs');
            if (!tabsEl) return;
            tabsEl.querySelectorAll('.om-domain-tab').forEach(function (tab) {
                tab.addEventListener('click', function () {
                    tabsEl.querySelectorAll('.om-domain-tab').forEach(function (t) { t.classList.remove('active'); });
                    tab.classList.add('active');
                    var val = tab.getAttribute('data-dtab');
                    overlay.querySelectorAll('.om-domain-panel').forEach(function (p) {
                        p.classList.toggle('active', p.getAttribute('data-dtab') === val);
                    });
                });
            });
        }

        function initDomainSearch() {
            var searchBtn = document.getElementById('omDomainSearch');
            var transferBtn = document.getElementById('omTransferSearch');

            if (searchBtn) {
                searchBtn.addEventListener('click', function () {
                    var input = document.getElementById('omDomainInput');
                    var results = document.getElementById('omDomainResults');
                    if (!input || !results) return;
                    var val = input.value.trim();
                    if (!val) {
                        showStepAlert(3, 'Please enter a domain name.', 'error');
                        return;
                    }
                    var domain = val.indexOf('.') === -1 ? val + '.com' : val;
                    var isAvailable = Math.random() > 0.4;
                    results.innerHTML =
                        '<div class="om-domain-result ' + (isAvailable ? 'om-domain-available' : 'om-domain-taken') + '">' +
                            '<div class="om-domain-result-left">' +
                                '<span class="om-domain-status-icon"><i class="fas ' + (isAvailable ? 'fa-check-circle' : 'fa-times-circle') + '"></i></span>' +
                                '<div class="om-domain-result-info">' +
                                    '<strong>' + domain + '</strong>' +
                                    '<span>' + (isAvailable ? 'This domain is available!' : 'This domain is already registered.') + '</span>' +
                                '</div>' +
                            '</div>' +
                            '<div class="om-domain-result-right">' +
                                (isAvailable
                                    ? '<span class="om-domain-price">€9.99<small>/yr</small></span><button type="button" class="om-domain-select-btn"><i class="fas fa-plus"></i> Register</button>'
                                    : '<span class="om-domain-badge-taken">Taken</span>') +
                            '</div>' +
                        '</div>';
                    if (!isAvailable) {
                        results.innerHTML +=
                            '<div class="om-domain-suggestions">' +
                                '<span class="om-domain-sug-label">Try these alternatives:</span>' +
                                '<div class="om-domain-result om-domain-available om-domain-alt">' +
                                    '<div class="om-domain-result-left">' +
                                        '<span class="om-domain-status-icon"><i class="fas fa-check-circle"></i></span>' +
                                        '<div class="om-domain-result-info"><strong>' + val.split('.')[0] + '.net</strong><span>Available</span></div>' +
                                    '</div>' +
                                    '<div class="om-domain-result-right">' +
                                        '<span class="om-domain-price">€11.99<small>/yr</small></span><button type="button" class="om-domain-select-btn"><i class="fas fa-plus"></i> Register</button>' +
                                    '</div>' +
                                '</div>' +
                                '<div class="om-domain-result om-domain-available om-domain-alt">' +
                                    '<div class="om-domain-result-left">' +
                                        '<span class="om-domain-status-icon"><i class="fas fa-check-circle"></i></span>' +
                                        '<div class="om-domain-result-info"><strong>' + val.split('.')[0] + '.org</strong><span>Available</span></div>' +
                                    '</div>' +
                                    '<div class="om-domain-result-right">' +
                                        '<span class="om-domain-price">€12.49<small>/yr</small></span><button type="button" class="om-domain-select-btn"><i class="fas fa-plus"></i> Register</button>' +
                                    '</div>' +
                                '</div>' +
                            '</div>';
                    }
                });
            }

            if (transferBtn) {
                transferBtn.addEventListener('click', function () {
                    var input = document.getElementById('omTransferInput');
                    var results = document.getElementById('omTransferResults');
                    if (!input || !results) return;
                    var val = input.value.trim();
                    if (!val) {
                        showStepAlert(3, 'Please enter a domain to transfer.', 'error');
                        return;
                    }
                    var domain = val.indexOf('.') === -1 ? val + '.com' : val;
                    var eligible = Math.random() > 0.3;
                    results.innerHTML =
                        '<div class="om-domain-result ' + (eligible ? 'om-domain-transfer-ok' : 'om-domain-transfer-no') + '">' +
                            '<div class="om-domain-result-left">' +
                                '<span class="om-domain-status-icon"><i class="fas ' + (eligible ? 'fa-exchange-alt' : 'fa-lock') + '"></i></span>' +
                                '<div class="om-domain-result-info">' +
                                    '<strong>' + domain + '</strong>' +
                                    '<span>' + (eligible ? 'Eligible for transfer. EPP code required.' : 'Domain is locked or recently registered. Try again later.') + '</span>' +
                                '</div>' +
                            '</div>' +
                            '<div class="om-domain-result-right">' +
                                (eligible
                                    ? '<span class="om-domain-price">€8.99<small>/yr</small></span><button type="button" class="om-domain-select-btn om-transfer-btn"><i class="fas fa-exchange-alt"></i> Transfer</button>'
                                    : '<span class="om-domain-badge-locked"><i class="fas fa-lock"></i> Locked</span>') +
                            '</div>' +
                        '</div>';
                });
            }
        }

        function initAccountTabs() {
            var tabsEl = document.getElementById('omAccountTabs');
            if (!tabsEl) return;
            tabsEl.querySelectorAll('.om-account-tab').forEach(function (tab) {
                tab.addEventListener('click', function () {
                    tabsEl.querySelectorAll('.om-account-tab').forEach(function (t) { t.classList.remove('active'); });
                    tab.classList.add('active');
                    var val = tab.getAttribute('data-atab');
                    overlay.querySelectorAll('.om-account-panel').forEach(function (p) {
                        p.classList.toggle('active', p.getAttribute('data-atab') === val);
                    });
                });
            });
        }

        function populateCountries() {
            var searchInput = document.getElementById('omRegCountrySearch');
            var hiddenInput = document.getElementById('omRegCountry');
            var dropdown = document.getElementById('omCountryDropdown');
            var wrap = document.getElementById('omCountryWrap');
            if (!searchInput || !dropdown || !wrap) return;

            var countries = [
                'Afghanistan','Albania','Algeria','Argentina','Armenia','Australia','Austria','Azerbaijan',
                'Bahrain','Bangladesh','Belarus','Belgium','Bolivia','Bosnia','Brazil','Bulgaria',
                'Cambodia','Cameroon','Canada','Chile','China','Colombia','Croatia','Czech Republic',
                'Denmark','Ecuador','Egypt','Estonia','Ethiopia','Finland','France',
                'Georgia','Germany','Ghana','Greece','Honduras','Hong Kong','Hungary',
                'Iceland','India','Indonesia','Iran','Iraq','Ireland','Israel','Italy',
                'Japan','Jordan','Kazakhstan','Kenya','Kuwait','Kyrgyzstan',
                'Latvia','Lebanon','Libya','Lithuania','Luxembourg',
                'Malaysia','Mexico','Moldova','Mongolia','Morocco','Myanmar',
                'Nepal','Netherlands','New Zealand','Nigeria','North Macedonia','Norway',
                'Oman','Pakistan','Palestine','Panama','Peru','Philippines','Poland','Portugal',
                'Qatar','Romania','Russia','Rwanda',
                'Saudi Arabia','Senegal','Serbia','Singapore','Slovakia','Slovenia','Somalia','South Africa','South Korea','Spain','Sri Lanka','Sudan','Sweden','Switzerland','Syria',
                'Taiwan','Tanzania','Thailand','Tunisia','Turkey',
                'UAE','UK','USA','Uganda','Ukraine','Uruguay','Uzbekistan',
                'Venezuela','Vietnam','Yemen','Zambia','Zimbabwe'
            ];

            function renderOptions(filter) {
                dropdown.innerHTML = '';
                var q = (filter || '').toLowerCase();
                countries.forEach(function (c) {
                    if (q && c.toLowerCase().indexOf(q) === -1) return;
                    var div = document.createElement('div');
                    div.className = 'om-select-option';
                    if (hiddenInput && hiddenInput.value === c) div.classList.add('selected');
                    div.textContent = c;
                    div.setAttribute('data-value', c);
                    div.addEventListener('click', function () {
                        if (hiddenInput) hiddenInput.value = c;
                        searchInput.value = c;
                        wrap.classList.remove('open');
                    });
                    dropdown.appendChild(div);
                });
            }

            searchInput.addEventListener('focus', function () {
                renderOptions(searchInput.value);
                wrap.classList.add('open');
            });

            searchInput.addEventListener('input', function () {
                renderOptions(searchInput.value);
                if (!wrap.classList.contains('open')) wrap.classList.add('open');
            });

            document.addEventListener('click', function (e) {
                if (!wrap.contains(e.target)) {
                    wrap.classList.remove('open');
                }
            });

            renderOptions('');
        }

        function open(data) {
            if (!overlay) return;

            planData = data || {};
            currentStep = 1;

            // Set plan chip
            var chip = document.getElementById('omPlanChip');
            if (chip) chip.textContent = planData.name || 'Plan';

            // Handle modal variants (vps, keys, default hosting)
            try { setupVariant(planData.type || 'hosting'); } catch (e) { console.warn('[OrderModal] variant error', e); }

            // Populate billing prices
            try { populateBillingPrices(); } catch (e) { console.warn('[OrderModal] billing error', e); }

            // Reset UI
            try { resetForm(); } catch (e) { console.warn('[OrderModal] resetForm error', e); }

            // Ensure step 1 panel is active
            try { goToStep(1, 'forward'); } catch (e) { console.warn('[OrderModal] goToStep error', e); }

            // Show
            overlay.classList.add('om-open');
            overlay.setAttribute('aria-hidden', 'false');
            document.body.style.overflow = 'hidden';

            // Focus close button after animation
            setTimeout(function () {
                var firstFocusable = overlay.querySelector('.om-close');
                if (firstFocusable) firstFocusable.focus();
            }, 150);
        }

        function setupVariant(type) {
            // Gather all step-3 variant panels by their CSS class
            var allStep3 = overlay.querySelectorAll('.om-panel[data-panel="3"], .om-panel[data-panel="3-vps"], .om-panel[data-panel="3-keys"], .om-panel[data-panel="3-domain"]');
            var domainPanel = null, vpsPanel = null, keysPanel = null;
            allStep3.forEach(function (p) {
                if (p.classList.contains('om-panel-domain')) domainPanel = p;
                else if (p.classList.contains('om-panel-vps')) vpsPanel = p;
                else if (p.classList.contains('om-panel-keys')) keysPanel = p;
            });
            var locationPanel = overlay.querySelector('.om-panel[data-panel="2"]');
            var vpsConfigPanel = overlay.querySelector('.om-panel-vps-config');
            var step2Dot = overlay.querySelector('.om-step-dot[data-step="2"]');
            var step2Line = step2Dot ? step2Dot.previousElementSibling : null;
            var step3Dot = overlay.querySelector('.om-step-dot[data-step="3"]');
            var step4Dot = overlay.querySelector('.om-step-dot[data-step="4"]');
            var step4Line = overlay.querySelector('.om-step-line-4');

            // Reset: restore defaults (hosting mode)
            if (domainPanel) { domainPanel.style.display = ''; domainPanel.setAttribute('data-panel', '3'); }
            if (vpsPanel) { vpsPanel.style.display = 'none'; vpsPanel.setAttribute('data-panel', '3-vps'); }
            if (keysPanel) { keysPanel.style.display = 'none'; keysPanel.setAttribute('data-panel', '3-keys'); }
            if (locationPanel) locationPanel.style.display = '';
            if (vpsConfigPanel) vpsConfigPanel.style.display = 'none';
            if (step2Dot) step2Dot.style.display = '';
            if (step2Line) step2Line.style.display = '';
            if (step3Dot) { var lbl3 = step3Dot.querySelector('.om-dot-label'); if (lbl3) lbl3.textContent = 'Domain'; }
            if (step4Dot) step4Dot.style.display = 'none';
            if (step4Line) step4Line.style.display = 'none';
            overlay.classList.remove('om-variant-keys', 'om-variant-vps');

            if (type === 'vps') {
                // Hide domain, show VPS OS as step 3
                if (domainPanel) { domainPanel.style.display = 'none'; domainPanel.setAttribute('data-panel', '3-domain'); }
                if (vpsPanel) { vpsPanel.style.display = ''; vpsPanel.setAttribute('data-panel', '3'); }
                if (step3Dot) { var l = step3Dot.querySelector('.om-dot-label'); if (l) l.textContent = 'OS'; }
                // Show VPS Config as step 4
                if (vpsConfigPanel) vpsConfigPanel.style.display = '';
                if (step4Dot) step4Dot.style.display = '';
                if (step4Line) step4Line.style.display = '';
                overlay.classList.add('om-variant-vps');
            } else if (type === 'keys') {
                // Hide domain, show keys details as step 3; skip location & config
                if (domainPanel) { domainPanel.style.display = 'none'; domainPanel.setAttribute('data-panel', '3-domain'); }
                if (keysPanel) { keysPanel.style.display = ''; keysPanel.setAttribute('data-panel', '3'); }
                if (step3Dot) { var l2 = step3Dot.querySelector('.om-dot-label'); if (l2) l2.textContent = 'Details'; }
                if (locationPanel) locationPanel.style.display = 'none';
                if (step2Dot) step2Dot.style.display = 'none';
                if (step2Line) step2Line.style.display = 'none';
                overlay.classList.add('om-variant-keys');
                // Populate keys info
                var kp = document.getElementById('omKeysProduct');
                if (kp) kp.textContent = planData.name || 'License Key';
                var kpr = document.getElementById('omKeysPrice');
                if (kpr) kpr.value = (planData.currency || '€') + (planData.amount || 0).toFixed(2);
            }
        }

        function initConfigBadges() {
            var badgeAddIp = document.getElementById('omBadgeAddIp');
            var badgeChangeIp = document.getElementById('omBadgeChangeIp');

            overlay.querySelectorAll('input[name="om-addip"]').forEach(function (r) {
                r.addEventListener('change', function () {
                    if (badgeAddIp) badgeAddIp.innerHTML = '<i class="fas fa-circle"></i> ' + (r.getAttribute('data-label') || 'No additional IPs');
                });
            });
            overlay.querySelectorAll('input[name="om-changeip"]').forEach(function (r) {
                r.addEventListener('change', function () {
                    if (badgeChangeIp) badgeChangeIp.innerHTML = '<i class="fas fa-circle"></i> ' + (r.getAttribute('data-label') || 'No need IP changes');
                });
            });
        }

        function close() {
            overlay.classList.remove('om-open');
            overlay.setAttribute('aria-hidden', 'true');
            document.body.style.overflow = '';
        }

        function populateBillingPrices() {
            var monthlyPrice = planData.amount || 0;
            var curr = planData.currency || '$';

            overlay.querySelectorAll('.om-billing-card').forEach(function (card) {
                var months = parseInt(card.getAttribute('data-months'));
                var disc = discounts[months] || 0;
                var total = monthlyPrice * months * (1 - disc / 100);
                var perMonth = months > 0 ? total / months : total;
                var priceEl = card.querySelector('[data-price-el]');
                if (priceEl) {
                    priceEl.textContent = curr + total.toFixed(2);
                }
                var permoEl = card.querySelector('[data-permo-el]');
                if (permoEl) {
                    if (months > 1) {
                        permoEl.textContent = curr + perMonth.toFixed(2) + '/mo';
                    } else {
                        permoEl.textContent = 'per month';
                    }
                }
            });
        }

        function resetForm() {
            // Default selection: 1 month billing
            var firstBilling = overlay.querySelector('.om-billing-card input[value="1"]');
            if (firstBilling) firstBilling.checked = true;

            // Clear other selections
            overlay.querySelectorAll('input[name="om-location"]').forEach(function (r) { r.checked = false; });
            overlay.querySelectorAll('input[name="om-payment"]').forEach(function (r) { r.checked = false; });

            // Reset VPS config radios to defaults
            var defaultAddIp = overlay.querySelector('input[name="om-addip"][value="0"]');
            if (defaultAddIp) defaultAddIp.checked = true;
            var defaultChangeIp = overlay.querySelector('input[name="om-changeip"][value="0"]');
            if (defaultChangeIp) defaultChangeIp.checked = true;
            var hostnameInput = document.getElementById('omVpsHostname');
            if (hostnameInput) hostnameInput.value = '';
            // Reset badges
            var badgeAddIp = document.getElementById('omBadgeAddIp');
            if (badgeAddIp) badgeAddIp.innerHTML = '<i class="fas fa-circle"></i> No additional IPs';
            var badgeChangeIp = document.getElementById('omBadgeChangeIp');
            if (badgeChangeIp) badgeChangeIp.innerHTML = '<i class="fas fa-circle"></i> No need IP changes';

            // Reset domain inputs
            var domainInput = document.getElementById('omDomainInput');
            if (domainInput) domainInput.value = '';
            var transferInput = document.getElementById('omTransferInput');
            if (transferInput) transferInput.value = '';
            var existingInput = document.getElementById('omExistingInput');
            if (existingInput) existingInput.value = '';

            // Clear results
            var dr = document.getElementById('omDomainResults');
            if (dr) dr.innerHTML = '';
            var tr = document.getElementById('omTransferResults');
            if (tr) tr.innerHTML = '';

            // Reset checkboxes
            var termsEl = document.getElementById('omTerms');
            if (termsEl) termsEl.checked = false;
            var refundEl = document.getElementById('omRefund');
            if (refundEl) refundEl.checked = false;

            // Promo
            var promoInput = document.getElementById('omPromoInput');
            if (promoInput) promoInput.value = '';
            var promoResult = document.getElementById('omPromoResult');
            if (promoResult) promoResult.innerHTML = '';
        }

        function goToStep(step, direction) {
            if (step < 1 || step > totalSteps) return;
            var dir = direction || (step > currentStep ? 'forward' : 'back');
            currentStep = step;

            // Switch panels
            overlay.querySelectorAll('.om-panel').forEach(function (p) { p.classList.remove('active', 'om-slide-back'); });
            var target = overlay.querySelector('.om-panel[data-panel="' + step + '"]');
            if (target) {
                target.classList.add('active');
                if (dir === 'back') target.classList.add('om-slide-back');
            }

            // Scroll body to top
            if (body) body.scrollTop = 0;

            // Update summary if on last visible step
            var vs = getVisibleSteps();
            if (step === vs[vs.length - 1]) updateSummary();

            updateUI();
        }

        function getVisibleSteps() {
            var steps = [];
            for (var i = 1; i <= totalSteps; i++) {
                if (isStepVisible(i)) steps.push(i);
            }
            return steps;
        }

        function updateUI() {
            var visibleSteps = getVisibleSteps();
            var currentIdx = visibleSteps.indexOf(currentStep);
            if (currentIdx === -1) currentIdx = 0;

            // Progress fill (based on visible steps)
            var pct = visibleSteps.length > 1 ? (currentIdx / (visibleSteps.length - 1)) * 100 : 100;
            if (progressFill) progressFill.style.width = pct + '%';

            // Step counter (visible position)
            if (stepNumEl) stepNumEl.textContent = currentIdx + 1;
            if (stepTotalEl) stepTotalEl.textContent = visibleSteps.length;

            // Step dots
            stepsNav.querySelectorAll('.om-step-dot').forEach(function (dot) {
                var s = parseInt(dot.getAttribute('data-step'));
                dot.classList.remove('active', 'completed');
                if (s === currentStep) dot.classList.add('active');
                else if (s < currentStep) dot.classList.add('completed');
            });

            // Step connecting lines
            stepsNav.querySelectorAll('.om-step-line').forEach(function (line, idx) {
                var stepBefore = idx + 1;
                line.classList.toggle('om-line-done', stepBefore < currentStep);
            });

            // Back button
            if (backBtn) {
                backBtn.classList.toggle('om-hidden', currentStep === 1);
            }

            // Next button text — check if this is the last visible step
            var isLastStep = (currentIdx === visibleSteps.length - 1);
            if (nextBtn) {
                nextBtn.classList.remove('om-btn-submit');
                if (isLastStep) {
                    nextBtn.innerHTML = '<i class="fas fa-lock"></i> Place Order';
                    nextBtn.classList.add('om-btn-submit');
                } else {
                    nextBtn.innerHTML = 'Continue <i class="fas fa-arrow-right"></i>';
                }
            }
        }

        function isStepVisible(step) {
            var panel = overlay.querySelector('.om-panel[data-panel="' + step + '"]');
            return panel && panel.style.display !== 'none';
        }

        function prevStep() {
            var s = currentStep - 1;
            while (s >= 1 && !isStepVisible(s)) s--;
            if (s >= 1) goToStep(s, 'back');
        }

        function nextStepHandler() {
            if (!validateStep(currentStep)) return;

            var s = currentStep + 1;
            while (s <= totalSteps && !isStepVisible(s)) s++;
            if (s <= totalSteps) {
                goToStep(s, 'forward');
            } else {
                submitOrder();
            }
        }

        function validateStep(step) {
            switch (step) {
                case 1:
                    if (!overlay.querySelector('input[name="om-billing"]:checked')) {
                        showStepAlert(step, 'Please select a billing cycle.', 'error');
                        shakePanel(step);
                        return false;
                    }
                    return true;
                case 2:
                    if (!overlay.querySelector('input[name="om-location"]:checked')) {
                        showStepAlert(step, 'Please select a server location.', 'error');
                        shakePanel(step);
                        return false;
                    }
                    return true;
                case 3:
                    return true;
                case 4:
                    return true;
                case 5:
                    if (!overlay.querySelector('input[name="om-payment"]:checked')) {
                        showStepAlert(step, 'Please select a payment method.', 'error');
                        shakePanel(step);
                        return false;
                    }
                    return true;
                case 6:
                    return true;
                case 7:
                    var termsChecked = document.getElementById('omTerms');
                    var refundChecked = document.getElementById('omRefund');
                    if (!termsChecked || !termsChecked.checked || !refundChecked || !refundChecked.checked) {
                        showStepAlert(step, 'Please agree to the Terms & Refund Policy.', 'error');
                        shakePanel(step);
                        return false;
                    }
                    return true;
                default:
                    return true;
            }
        }

        function shakePanel(step) {
            var panel = overlay.querySelector('.om-panel[data-panel="' + step + '"]');
            if (!panel) return;
            panel.classList.remove('om-shake');
            void panel.offsetWidth;
            panel.classList.add('om-shake');
            panel.addEventListener('animationend', function handler() {
                panel.classList.remove('om-shake');
                panel.removeEventListener('animationend', handler);
            });
        }

        function showStepAlert(step, message, type) {
            var panel = overlay.querySelector('.om-panel[data-panel="' + step + '"]');
            if (!panel) return;
            panel.querySelectorAll('.om-alert').forEach(function (a) { a.remove(); });
            var alert = document.createElement('div');
            alert.className = 'om-alert om-alert-' + type;
            var icon = type === 'error' ? 'fa-exclamation-circle' :
                       type === 'success' ? 'fa-check-circle' : 'fa-exclamation-triangle';
            alert.innerHTML = '<i class="fas ' + icon + '"></i> ' + message;
            var panelHead = panel.querySelector('.om-panel-head');
            if (panelHead && panelHead.nextSibling) {
                panel.insertBefore(alert, panelHead.nextSibling);
            } else {
                panel.insertBefore(alert, panel.firstChild);
            }
            setTimeout(function () {
                if (alert.parentNode) alert.remove();
            }, 4000);
        }

        function getSelectedValue(name) {
            var el = overlay.querySelector('input[name="' + name + '"]:checked');
            return el ? el.value : '';
        }

        function getSelectedLabel(name) {
            var el = overlay.querySelector('input[name="' + name + '"]:checked');
            if (!el) return '—';
            var card = el.closest('label');
            if (!card) return el.value;
            var nameSpan = card.querySelector('.om-loc-name') || card.querySelector('.om-pay-name') || card.querySelector('.om-billing-period');
            return nameSpan ? nameSpan.textContent.trim() : el.value;
        }

        function getDomainValue() {
            var activeDTab = overlay.querySelector('.om-domain-tab.active');
            if (!activeDTab) return '—';
            var mode = activeDTab.getAttribute('data-dtab');
            if (mode === 'register') {
                var v = document.getElementById('omDomainInput');
                return v && v.value.trim() ? v.value.trim() : 'Not specified';
            } else if (mode === 'transfer') {
                var t = document.getElementById('omTransferInput');
                return t && t.value.trim() ? t.value.trim() : 'Not specified';
            } else {
                var e = document.getElementById('omExistingInput');
                return e && e.value.trim() ? e.value.trim() : 'Will update later';
            }
        }

        function updateSummary() {
            var curr = planData.currency || '$';
            var monthlyPrice = planData.amount || 0;
            var months = parseInt(getSelectedValue('om-billing')) || 1;
            var disc = discounts[months] || 0;
            var subtotal = monthlyPrice * months * (1 - disc / 100);

            // Gateway fee
            var payCard = overlay.querySelector('input[name="om-payment"]:checked');
            var feePct = 0;
            var feeFix = 0;
            if (payCard) {
                var label = payCard.closest('.om-pay-card');
                if (label) {
                    feePct = parseFloat(label.getAttribute('data-fee-pct')) || 0;
                    feeFix = parseFloat(label.getAttribute('data-fee-fix')) || 0;
                }
            }
            var feeAmount = subtotal * (feePct / 100) + feeFix;
            var total = subtotal + feeAmount;

            // Populate summary
            var prodEl = document.getElementById('omSumProduct');
            if (prodEl) prodEl.textContent = planData.name || '—';

            var billEl = document.getElementById('omSumBilling');
            if (billEl) billEl.textContent = getSelectedLabel('om-billing');

            var locEl = document.getElementById('omSumLocation');
            if (locEl) locEl.textContent = getSelectedLabel('om-location');

            var domEl = document.getElementById('omSumDomain');
            if (domEl) domEl.textContent = getDomainValue();

            var payEl = document.getElementById('omSumPayment');
            if (payEl) payEl.textContent = getSelectedLabel('om-payment');

            var subEl = document.getElementById('omSumSubtotal');
            if (subEl) subEl.textContent = curr + subtotal.toFixed(2);

            // Fee row
            var feeRow = document.getElementById('omSumFeeRow');
            var feeEl = document.getElementById('omSumFee');
            if (feeRow && feeEl) {
                if (feeAmount > 0) {
                    feeRow.classList.add('om-visible');
                    feeEl.textContent = '+' + curr + feeAmount.toFixed(2);
                } else {
                    feeRow.classList.remove('om-visible');
                }
            }

            var totalEl = document.getElementById('omSumTotal');
            if (totalEl) totalEl.textContent = curr + total.toFixed(2);
        }

        function submitOrder() {
            var orderData = {
                plan: planData.name,
                planUrl: planData.url,
                billing: getSelectedValue('om-billing'),
                location: getSelectedValue('om-location'),
                domain: getDomainValue(),
                payment: getSelectedValue('om-payment'),
                promo: (document.getElementById('omPromoInput') || {}).value || ''
            };

            if (planData.url) {
                var url = planData.url;
                var sep = url.indexOf('?') !== -1 ? '&' : '?';
                url += sep + 'billingcycle=' + encodeURIComponent(orderData.billing);
                if (orderData.location) url += '&location=' + encodeURIComponent(orderData.location);
                if (orderData.payment) url += '&gateway=' + encodeURIComponent(orderData.payment);
                if (orderData.promo) url += '&promo=' + encodeURIComponent(orderData.promo);
                window.open(url, '_blank', 'noopener,noreferrer');
            }
            close();
        }

        return { init: init, open: open, close: close };
    })();


    /* ═══════════════════════════════════════════
       Module: MS Product Search
       ═══════════════════════════════════════════ */
    const MsProductSearch = (function () {
        const input = document.getElementById('msProductSearch');
        const clearBtn = document.getElementById('msSearchClear');
        const emptyMsg = document.getElementById('msSearchEmpty');
        if (!input) return { init: function () {} };

        const categories = document.querySelectorAll('.ms-products .ms-category');
        const catNav = document.querySelector('.ms-cat-grid');

        function filter() {
            const q = input.value.trim().toLowerCase();
            clearBtn.classList.toggle('visible', q.length > 0);

            if (!q) {
                // Show everything
                categories.forEach(function (cat) {
                    cat.style.display = '';
                    cat.querySelectorAll('.ms-product-card').forEach(function (c) {
                        c.style.display = '';
                    });
                });
                if (catNav) catNav.style.display = '';
                if (emptyMsg) emptyMsg.hidden = true;
                return;
            }

            // Hide category nav when searching
            if (catNav) catNav.style.display = 'none';

            var totalVisible = 0;
            categories.forEach(function (cat) {
                var cards = cat.querySelectorAll('.ms-product-card');
                var catVisible = 0;
                cards.forEach(function (card) {
                    var name = (card.querySelector('.ms-product-name') || {}).textContent || '';
                    var desc = (card.querySelector('.ms-product-desc') || {}).textContent || '';
                    var match = name.toLowerCase().indexOf(q) !== -1 || desc.toLowerCase().indexOf(q) !== -1;
                    card.style.display = match ? '' : 'none';
                    if (match) catVisible++;
                });
                cat.style.display = catVisible > 0 ? '' : 'none';
                totalVisible += catVisible;
            });

            if (emptyMsg) emptyMsg.hidden = totalVisible > 0;
        }

        function init() {
            input.addEventListener('input', filter);
            clearBtn.addEventListener('click', function () {
                input.value = '';
                filter();
                input.focus();
            });
        }

        return { init: init };
    })();

    /* ═══════════════════════════════════════════
       Module: Smooth Hero SVG Animations
       Converts SMIL <animate> → CSS transform/opacity
       for GPU-composited, jank-free rendering.
       ═══════════════════════════════════════════ */
    const SmoothHeroAnims = (function () {
        function init() {
            var svgs = document.querySelectorAll('.page-hero-visual svg');
            if (!svgs.length) return;

            svgs.forEach(function (svg) {
                var anims = svg.querySelectorAll('animate');
                if (!anims.length) return;

                var rules = '';
                var idx = 0;

                anims.forEach(function (anim) {
                    var attr = anim.getAttribute('attributeName');
                    var raw = anim.getAttribute('values');
                    if (!raw) { anim.remove(); return; }
                    var vals = raw.split(';');
                    var dur = anim.getAttribute('dur') || '3s';
                    var delay = anim.getAttribute('begin') || '0s';
                    var parent = anim.parentElement;
                    if (!parent || vals.length < 2) { anim.remove(); return; }

                    var name = '_ha' + idx++;

                    if (attr === 'y' || attr === 'cy') {
                        var from = parseFloat(vals[0]);
                        var mid  = parseFloat(vals[1]);
                        var diff = mid - from;
                        rules += '@keyframes ' + name +
                            '{0%,100%{transform:translateY(0)}' +
                            '50%{transform:translateY(' + diff + 'px)}}';
                        parent.style.animation = name + ' ' + dur + ' ease-in-out ' + delay + ' infinite';
                        parent.style.willChange = 'transform';
                    } else if (attr === 'opacity') {
                        rules += '@keyframes ' + name +
                            '{0%,100%{opacity:' + vals[0] + '}' +
                            '50%{opacity:' + vals[1] + '}}';
                        parent.removeAttribute('opacity');
                        parent.style.animation = name + ' ' + dur + ' ease-in-out ' + delay + ' infinite';
                    } else if (attr === 'r') {
                        rules += '@keyframes ' + name +
                            '{0%,100%{r:' + vals[0] + '}' +
                            '50%{r:' + vals[1] + '}}';
                        parent.style.animation = name + ' ' + dur + ' ease-in-out ' + delay + ' infinite';
                    }

                    anim.remove();
                });

                if (rules) {
                    var s = document.createElementNS('http://www.w3.org/2000/svg', 'style');
                    s.textContent = rules;
                    svg.insertBefore(s, svg.firstChild);
                }
            });
        }

        return { init: init };
    })();

    /* ═══════════════════════════════════════════
       PROMO CODE COPY
       ═══════════════════════════════════════════ */
    const PromoCodeCopy = (function () {
        function init() {
            document.querySelectorAll('.promo-code-copy').forEach(function (btn) {
                btn.addEventListener('click', function () {
                    const code = btn.getAttribute('data-code');
                    if (!code) return;
                    navigator.clipboard.writeText(code).then(function () {
                        btn.classList.add('copied');
                        const icon = btn.querySelector('i');
                        if (icon) {
                            icon.className = 'fas fa-check';
                            setTimeout(function () {
                                icon.className = 'fas fa-copy';
                                btn.classList.remove('copied');
                            }, 2000);
                        }
                    });
                });
            });
        }
        return { init: init };
    })();

    /* ═══════════════════════════════════════════
       DC LOCATION EXPAND / COLLAPSE
       ═══════════════════════════════════════════ */
    const DCLocationExpand = (function () {
        function init() {
            document.querySelectorAll('[data-dc-expand]').forEach(function (card) {
                var btn = card.querySelector('.dc-loc-header');
                if (!btn) return;
                btn.addEventListener('click', function () {
                    var wasOpen = card.classList.contains('open');
                    // Close all siblings in the same region
                    var region = card.closest('.dc-region');
                    if (region) {
                        region.querySelectorAll('[data-dc-expand].open').forEach(function (c) {
                            c.classList.remove('open');
                        });
                    }
                    // Toggle clicked card
                    if (!wasOpen) card.classList.add('open');
                });
            });
        }
        return { init: init };
    })();

    /* ═══════════════════════════════════════════
       TLD TABLE FILTER & SEARCH
       ═══════════════════════════════════════════ */
    const TldTableFilter = (function () {
        var PER_PAGE = 10;

        function init() {
            document.querySelectorAll('.domain-all-tlds').forEach(function (section) {
                var filters = section.querySelectorAll('.tld-filter');
                var searchInput = section.querySelector('.tld-search-input');
                var rows = Array.from(section.querySelectorAll('.tld-table tbody tr[data-category]'));
                var activeFilter = 'all';
                var currentPage = 1;

                // Build pagination UI
                var paginationWrap = document.createElement('div');
                paginationWrap.className = 'tld-pagination';
                var tableWrap = section.querySelector('.tld-table-wrap');
                if (tableWrap) tableWrap.parentNode.insertBefore(paginationWrap, tableWrap.nextSibling);

                filters.forEach(function (btn) {
                    btn.addEventListener('click', function () {
                        filters.forEach(function (f) { f.classList.remove('active'); });
                        btn.classList.add('active');
                        activeFilter = btn.getAttribute('data-filter');
                        currentPage = 1;
                        applyFilters();
                    });
                });

                if (searchInput) {
                    searchInput.addEventListener('input', function () {
                        currentPage = 1;
                        applyFilters();
                    });
                }

                function getVisibleRows() {
                    var term = searchInput ? searchInput.value.trim().toLowerCase() : '';
                    var visible = [];
                    rows.forEach(function (row) {
                        var cat = row.getAttribute('data-category');
                        var ext = row.querySelector('.tld-ext');
                        var name = ext ? ext.textContent.toLowerCase() : '';
                        var matchCat = activeFilter === 'all' || cat === activeFilter;
                        var matchSearch = !term || name.indexOf(term) !== -1;
                        if (matchCat && matchSearch) visible.push(row);
                    });
                    return visible;
                }

                function applyFilters() {
                    var visible = getVisibleRows();
                    var totalPages = Math.max(1, Math.ceil(visible.length / PER_PAGE));
                    if (currentPage > totalPages) currentPage = totalPages;

                    var startIdx = (currentPage - 1) * PER_PAGE;
                    var endIdx = startIdx + PER_PAGE;

                    rows.forEach(function (row) { row.classList.add('tld-hidden'); });
                    visible.forEach(function (row, i) {
                        if (i >= startIdx && i < endIdx) row.classList.remove('tld-hidden');
                    });

                    var emptyRow = section.querySelector('.tld-table-empty');
                    if (emptyRow) emptyRow.classList.toggle('visible', visible.length === 0);

                    renderPagination(totalPages, visible.length);
                }

                function renderPagination(totalPages, totalItems) {
                    if (totalPages <= 1) { paginationWrap.innerHTML = ''; return; }
                    var html = '<button class="tld-page-btn tld-page-prev" ' + (currentPage <= 1 ? 'disabled' : '') + '><i class="fas fa-chevron-left"></i></button>';
                    var startPage = Math.max(1, currentPage - 2);
                    var endPage = Math.min(totalPages, startPage + 4);
                    if (endPage - startPage < 4) startPage = Math.max(1, endPage - 4);
                    for (var p = startPage; p <= endPage; p++) {
                        html += '<button class="tld-page-btn' + (p === currentPage ? ' active' : '') + '" data-page="' + p + '">' + p + '</button>';
                    }
                    html += '<button class="tld-page-btn tld-page-next" ' + (currentPage >= totalPages ? 'disabled' : '') + '><i class="fas fa-chevron-right"></i></button>';
                    html += '<span class="tld-page-info">' + totalItems + ' extensions</span>';
                    paginationWrap.innerHTML = html;

                    paginationWrap.querySelectorAll('.tld-page-btn[data-page]').forEach(function (btn) {
                        btn.addEventListener('click', function () {
                            currentPage = parseInt(btn.getAttribute('data-page'), 10);
                            applyFilters();
                        });
                    });
                    var prev = paginationWrap.querySelector('.tld-page-prev');
                    var next = paginationWrap.querySelector('.tld-page-next');
                    if (prev) prev.addEventListener('click', function () { if (currentPage > 1) { currentPage--; applyFilters(); } });
                    if (next) next.addEventListener('click', function () { if (currentPage < totalPages) { currentPage++; applyFilters(); } });
                }

                applyFilters();
            });
        }
        return { init: init };
    })();

    /* ═══════════════════════════════════════════
       Module 28: Microsoft Key Detail — Qty Controls
       ═══════════════════════════════════════════ */
    const MsKeyDetail = (function () {
        function init() {
            var minus = document.getElementById('mkdQtyMinus');
            var plus = document.getElementById('mkdQtyPlus');
            var input = document.getElementById('mkdQty');
            if (!minus || !plus || !input) return;

            minus.addEventListener('click', function () {
                var v = parseInt(input.value) || 1;
                if (v > 1) input.value = v - 1;
                updateOrderBtn();
            });
            plus.addEventListener('click', function () {
                var v = parseInt(input.value) || 1;
                var max = parseInt(input.max) || 100;
                if (v < max) input.value = v + 1;
                updateOrderBtn();
            });
            input.addEventListener('change', function () {
                var v = parseInt(input.value) || 1;
                var max = parseInt(input.max) || 100;
                if (v < 1) v = 1;
                if (v > max) v = max;
                input.value = v;
                updateOrderBtn();
            });

            function updateOrderBtn() {
                var btn = document.querySelector('.mkd-order-btn');
                if (!btn) return;
                var baseText = btn.getAttribute('data-base-label');
                if (!baseText) {
                    baseText = btn.textContent.trim();
                    btn.setAttribute('data-base-label', baseText);
                }
                var qty = parseInt(input.value) || 1;
                if (qty > 1) {
                    var match = baseText.match(/[\€\$\£][\d\.]+/);
                    if (match) {
                        var unit = parseFloat(match[0].replace(/[^\d.]/g, ''));
                        var symbol = match[0].replace(/[\d.]/g, '');
                        var total = (unit * qty).toFixed(2);
                        btn.innerHTML = '<i class="fas fa-shopping-cart"></i> Order ' + qty + '× — ' + symbol + total;
                    }
                } else {
                    btn.innerHTML = '<i class="fas fa-shopping-cart"></i> ' + baseText.replace(/^.*?Order/, 'Order');
                }
            }
        }
        return { init: init };
    })();


    /* ═══════════════════════════════════════════
       INITIALIZE ALL MODULES
       ═══════════════════════════════════════════ */
    ThemeToggle.init();
    SmoothHeroAnims.init();
    PlanTabs.init();
    ScrollReveal.init();
    CounterAnimation.init();
    NavScroll.init();
    PromoBar.init();
    PlanCTAs.init();
    VpsCTAs.init();
    MsKeysCTAs.init();
    SwitcherDropdowns.init();
    MobileDrawer.init();
    FAQSection.init();
    TestimonialsCarousel.init();
    TechSwiper.init();
    ServicesSwiper.init();
    TutorialsSwiper.init();
    TimelineSwiper.init();
    TeamSwiper.init();
    DCMapTooltips.init();
    FeaturesSwiper.init();
    CloudUsecasesSwiper.init();
    DsUsecasesSwiper.init();
    LocationTabs.init();
    LocationCardActive.init();
    VpsRowToggle.init();
    BlogHub.init();
    PartnersMarquee.init();
    OrderModal.init();
    MsProductSearch.init();
    PromoCodeCopy.init();
    DCLocationExpand.init();
    TldTableFilter.init();
    MsKeyDetail.init();
});
