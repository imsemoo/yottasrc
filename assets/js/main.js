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
            swipers[key] = new Swiper(el, {
                slidesPerView: 1,
                spaceBetween: 12,
                grabCursor: true,
                loop: true,
                autoplay: {
                    delay: 4500,
                    disableOnInteraction: false,
                    pauseOnMouseEnter: true
                },
                pagination: {
                    el: el.querySelector('.swiper-pagination'),
                    clickable: true
                },
                breakpoints: {
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
       Module 22: Blog Filter & Search
       ═══════════════════════════════════════════ */
    const BlogHub = (function () {
        function init() {
            var searchInput = document.getElementById('blogSearch');
            var tags = document.querySelectorAll('.blog-tag');
            var cards = document.querySelectorAll('.blog-card[data-category]');
            var featuredCard = document.querySelector('.blog-featured-card');
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

                // Hide featured card when filtering by search or category
                if (featuredCard) {
                    featuredCard.closest('.blog-featured').style.display =
                        (query || activeCategory !== 'all') ? 'none' : '';
                }

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
    VpsRowToggle.init();
    BlogHub.init();
});
