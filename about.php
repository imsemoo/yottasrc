<?php
/**
 * YottaSrc — About Us
 * ====================
 */
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/topbar.php';
?>

    <!-- ═══════════════ PAGE HERO ═══════════════ -->
    <section class="page-hero">
        <div class="container">
            <div class="page-hero-split">
                <div class="page-hero-content">
                    <div class="page-breadcrumb">
                        <a href="<?php echo e(SITE_URL); ?>/"><?php echo e(__('breadcrumb_home')); ?></a>
                        <i class="fas fa-chevron-right"></i>
                        <span><?php echo e(__('about_breadcrumb')); ?></span>
                    </div>
                    <h1><?php echo __('about_title'); ?></h1>
                    <p class="page-hero-desc"><?php echo e(__('about_desc')); ?></p>
                    <div class="page-hero-badges">
                        <div class="hero-badge-item"><i class="fas fa-check"></i> <?php echo e(__('about_badge1')); ?></div>
                        <div class="hero-badge-item"><i class="fas fa-check"></i> <?php echo e(__('about_badge2')); ?></div>
                    </div>
                    <div class="page-hero-stats about-stats">
                        <div class="page-hero-stat">
                            <span class="stat-num">90K<span class="stat-suffix">+</span></span>
                            <span class="stat-text"><?php echo e(__('about_stat_clients')); ?></span>
                        </div>
                        <div class="page-hero-stat">
                            <span class="stat-num">50<span class="stat-suffix">+</span></span>
                            <span class="stat-text"><?php echo e(__('about_stat_locations')); ?></span>
                        </div>
                        <div class="page-hero-stat">
                            <span class="stat-num">2018</span>
                            <span class="stat-text"><?php echo e(__('about_stat_founded')); ?></span>
                        </div>
                        <div class="page-hero-stat">
                            <span class="stat-num">30<span class="stat-suffix">+</span></span>
                            <span class="stat-text"><?php echo e(__('about_stat_team')); ?></span>
                        </div>
                    </div>
                </div>
                <div class="page-hero-visual">
                    <svg viewBox="0 0 420 380" fill="none" xmlns="http://www.w3.org/2000/svg" class="hero-illustration" preserveAspectRatio="xMidYMid meet" aria-label="YottaSrc global infrastructure illustration">
                        <!-- Central datacenter node -->
                        <g>
                            <!-- Outer ring pulse -->
                            <circle cx="210" cy="175" r="52" fill="var(--brand-primary)" opacity="0.03">
                                <animate attributeName="r" values="52;62;52" dur="4s" repeatCount="indefinite"/>
                                <animate attributeName="opacity" values="0.03;0.01;0.03" dur="4s" repeatCount="indefinite"/>
                            </circle>
                            <!-- Orbit ring 1 -->
                            <circle cx="210" cy="175" r="110" fill="none" stroke="var(--border-primary)" stroke-width="0.8" stroke-dasharray="4 4" opacity="0.3"/>
                            <!-- Orbit ring 2 -->
                            <circle cx="210" cy="175" r="150" fill="none" stroke="var(--border-primary)" stroke-width="0.5" stroke-dasharray="2 6" opacity="0.15"/>

                            <!-- Connection lines from HQ to satellite nodes -->
                            <line x1="210" y1="175" x2="95" y2="85" stroke="var(--brand-primary)" stroke-width="0.8" stroke-dasharray="4 3" opacity="0.18"/>
                            <line x1="210" y1="175" x2="330" y2="80" stroke="var(--brand-primary)" stroke-width="0.8" stroke-dasharray="4 3" opacity="0.18"/>
                            <line x1="210" y1="175" x2="70" y2="200" stroke="var(--brand-primary)" stroke-width="0.8" stroke-dasharray="4 3" opacity="0.18"/>
                            <line x1="210" y1="175" x2="355" y2="195" stroke="var(--brand-primary)" stroke-width="0.8" stroke-dasharray="4 3" opacity="0.18"/>
                            <line x1="210" y1="175" x2="110" y2="285" stroke="var(--brand-primary)" stroke-width="0.8" stroke-dasharray="4 3" opacity="0.18"/>
                            <line x1="210" y1="175" x2="320" y2="280" stroke="var(--brand-primary)" stroke-width="0.8" stroke-dasharray="4 3" opacity="0.18"/>

                            <!-- Animated data particles along lines -->
                            <circle r="2" fill="var(--brand-primary)" opacity="0.5">
                                <animateMotion dur="3s" repeatCount="indefinite" path="M210,175 L95,85"/>
                            </circle>
                            <circle r="2" fill="var(--brand-secondary)" opacity="0.5">
                                <animateMotion dur="3.5s" repeatCount="indefinite" path="M210,175 L355,195"/>
                            </circle>
                            <circle r="2" fill="var(--brand-accent)" opacity="0.5">
                                <animateMotion dur="4s" repeatCount="indefinite" path="M210,175 L320,280"/>
                            </circle>
                        </g>

                        <!-- HQ Central — Server building icon -->
                        <g>
                            <rect x="185" y="148" width="50" height="54" rx="10" fill="var(--bg-card)" stroke="var(--brand-primary)" stroke-width="1.5"/>
                            <!-- Server unit lines -->
                            <rect x="194" y="157" width="32" height="8" rx="2" fill="var(--brand-primary)" opacity="0.12"/>
                            <circle cx="222" cy="161" r="2" fill="var(--brand-secondary)" opacity="0.7">
                                <animate attributeName="opacity" values="0.5;1;0.5" dur="1.5s" repeatCount="indefinite"/>
                            </circle>
                            <rect x="194" y="169" width="32" height="8" rx="2" fill="var(--brand-primary)" opacity="0.12"/>
                            <circle cx="222" cy="173" r="2" fill="var(--brand-secondary)" opacity="0.6">
                                <animate attributeName="opacity" values="0.3;0.8;0.3" dur="2s" repeatCount="indefinite"/>
                            </circle>
                            <rect x="194" y="181" width="32" height="8" rx="2" fill="var(--brand-primary)" opacity="0.12"/>
                            <circle cx="222" cy="185" r="2" fill="var(--brand-primary)" opacity="0.4">
                                <animate attributeName="opacity" values="0.2;0.6;0.2" dur="2.5s" repeatCount="indefinite"/>
                            </circle>
                            <!-- HQ label -->
                            <rect x="194" y="206" width="32" height="14" rx="4" fill="var(--brand-primary)" opacity="0.12"/>
                            <text x="210" y="216" text-anchor="middle" fill="var(--brand-primary)" font-size="7.5" font-family="var(--font-mono)" font-weight="700" opacity="0.7">HQ</text>
                        </g>

                        <!-- Satellite node: US West -->
                        <g>
                            <circle cx="95" cy="85" r="16" fill="var(--bg-card)" stroke="var(--border-primary)" stroke-width="1"/>
                            <rect x="86" y="78" width="18" height="14" rx="3" fill="var(--brand-secondary)" opacity="0.1"/>
                            <text x="95" y="89" text-anchor="middle" fill="var(--brand-secondary)" font-size="8" font-weight="700" opacity="0.5">US</text>
                            <circle cx="95" cy="68" r="3" fill="var(--brand-secondary)" opacity="0.4">
                                <animate attributeName="opacity" values="0.3;0.7;0.3" dur="2s" repeatCount="indefinite"/>
                            </circle>
                        </g>

                        <!-- Satellite node: EU -->
                        <g>
                            <circle cx="330" cy="80" r="16" fill="var(--bg-card)" stroke="var(--border-primary)" stroke-width="1"/>
                            <rect x="321" y="73" width="18" height="14" rx="3" fill="var(--brand-accent)" opacity="0.1"/>
                            <text x="330" y="84" text-anchor="middle" fill="var(--brand-accent)" font-size="8" font-weight="700" opacity="0.5">EU</text>
                            <circle cx="330" cy="63" r="3" fill="var(--brand-accent)" opacity="0.4">
                                <animate attributeName="opacity" values="0.2;0.6;0.2" dur="2.5s" repeatCount="indefinite"/>
                            </circle>
                        </g>

                        <!-- Satellite node: ME (Middle East) -->
                        <g>
                            <circle cx="70" cy="200" r="16" fill="var(--bg-card)" stroke="var(--border-primary)" stroke-width="1"/>
                            <rect x="61" y="193" width="18" height="14" rx="3" fill="var(--brand-warning)" opacity="0.1"/>
                            <text x="70" y="204" text-anchor="middle" fill="var(--brand-warning)" font-size="7.5" font-weight="700" opacity="0.5">ME</text>
                            <circle cx="70" cy="183" r="3" fill="var(--brand-warning)" opacity="0.4">
                                <animate attributeName="opacity" values="0.3;0.7;0.3" dur="3s" repeatCount="indefinite"/>
                            </circle>
                        </g>

                        <!-- Satellite node: Asia -->
                        <g>
                            <circle cx="355" cy="195" r="16" fill="var(--bg-card)" stroke="var(--border-primary)" stroke-width="1"/>
                            <rect x="345" y="188" width="20" height="14" rx="3" fill="var(--brand-primary)" opacity="0.1"/>
                            <text x="355" y="199" text-anchor="middle" fill="var(--brand-primary)" font-size="7.5" font-weight="700" opacity="0.5">ASIA</text>
                            <circle cx="355" cy="178" r="3" fill="var(--brand-primary)" opacity="0.4">
                                <animate attributeName="opacity" values="0.2;0.5;0.2" dur="3.5s" repeatCount="indefinite"/>
                            </circle>
                        </g>

                        <!-- Satellite node: SA (South America) -->
                        <g>
                            <circle cx="110" cy="285" r="16" fill="var(--bg-card)" stroke="var(--border-primary)" stroke-width="1"/>
                            <rect x="102" y="278" width="16" height="14" rx="3" fill="var(--brand-secondary)" opacity="0.1"/>
                            <text x="110" y="289" text-anchor="middle" fill="var(--brand-secondary)" font-size="7.5" font-weight="700" opacity="0.5">SA</text>
                            <circle cx="110" cy="268" r="3" fill="var(--brand-secondary)" opacity="0.3">
                                <animate attributeName="opacity" values="0.2;0.5;0.2" dur="2.8s" repeatCount="indefinite"/>
                            </circle>
                        </g>

                        <!-- Satellite node: AU -->
                        <g>
                            <circle cx="320" cy="280" r="16" fill="var(--bg-card)" stroke="var(--border-primary)" stroke-width="1"/>
                            <rect x="312" y="273" width="16" height="14" rx="3" fill="var(--brand-accent)" opacity="0.1"/>
                            <text x="320" y="284" text-anchor="middle" fill="var(--brand-accent)" font-size="7.5" font-weight="700" opacity="0.5">AU</text>
                            <circle cx="320" cy="263" r="3" fill="var(--brand-accent)" opacity="0.3">
                                <animate attributeName="opacity" values="0.3;0.6;0.3" dur="3.2s" repeatCount="indefinite"/>
                            </circle>
                        </g>

                        <!-- Floating badge: Uptime (top-right) -->
                        <g>
                            <rect x="338" y="14" width="76" height="36" rx="10" fill="var(--bg-card)" stroke="var(--border-primary)" stroke-width="1">
                                <animate attributeName="y" values="14;20;14" dur="5s" repeatCount="indefinite"/>
                            </rect>
                            <text x="354" y="29" fill="var(--text-tertiary)" font-size="7" font-family="var(--font-mono)" font-weight="600" opacity="0.5">
                                UPTIME
                                <animate attributeName="y" values="29;35;29" dur="5s" repeatCount="indefinite"/>
                            </text>
                            <text x="354" y="43" fill="var(--brand-secondary)" font-size="13" font-family="var(--font-display)" font-weight="800" opacity="0.7">
                                99.9%
                                <animate attributeName="y" values="43;49;43" dur="5s" repeatCount="indefinite"/>
                            </text>
                        </g>

                        <!-- Floating badge: Since (bottom-left) -->
                        <g>
                            <rect x="4" y="310" width="80" height="36" rx="10" fill="var(--bg-card)" stroke="var(--border-primary)" stroke-width="1">
                                <animate attributeName="y" values="310;304;310" dur="6s" repeatCount="indefinite"/>
                            </rect>
                            <text x="20" y="325" fill="var(--text-tertiary)" font-size="7" font-family="var(--font-mono)" font-weight="600" opacity="0.5">
                                SINCE
                                <animate attributeName="y" values="325;319;325" dur="6s" repeatCount="indefinite"/>
                            </text>
                            <text x="20" y="339" fill="var(--brand-primary)" font-size="14" font-family="var(--font-display)" font-weight="800" opacity="0.7">
                                2018
                                <animate attributeName="y" values="339;333;339" dur="6s" repeatCount="indefinite"/>
                            </text>
                        </g>

                        <!-- Floating badge: Locations (top-left) -->
                        <g>
                            <rect x="4" y="18" width="72" height="36" rx="10" fill="var(--bg-card)" stroke="var(--border-primary)" stroke-width="1">
                                <animate attributeName="y" values="18;24;18" dur="5.5s" repeatCount="indefinite"/>
                            </rect>
                            <text x="18" y="33" fill="var(--text-tertiary)" font-size="7" font-family="var(--font-mono)" font-weight="600" opacity="0.5">
                                LOCATIONS
                                <animate attributeName="y" values="33;39;33" dur="5.5s" repeatCount="indefinite"/>
                            </text>
                            <text x="18" y="47" fill="var(--brand-accent)" font-size="14" font-family="var(--font-display)" font-weight="800" opacity="0.7">
                                50+
                                <animate attributeName="y" values="47;53;47" dur="5.5s" repeatCount="indefinite"/>
                            </text>
                        </g>

                        <!-- Decorative dots -->
                        <circle cx="170" cy="30" r="2" fill="var(--brand-primary)" opacity="0.2">
                            <animate attributeName="opacity" values="0.15;0.4;0.15" dur="3s" repeatCount="indefinite"/>
                        </circle>
                        <circle cx="250" cy="350" r="2" fill="var(--brand-secondary)" opacity="0.2">
                            <animate attributeName="opacity" values="0.15;0.35;0.15" dur="4s" repeatCount="indefinite"/>
                        </circle>
                    </svg>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ COMPANY INTRO ═══════════════ -->
    <section class="company-intro reveal">
        <div class="container">
            <div class="intro-layout">
                <div class="intro-text">
                    <div class="section-tag"><?php echo e(__('about_intro_tag')); ?></div>
                    <h2><?php echo e(__('about_intro_title')); ?></h2>
                    <p><?php echo e(__('about_intro_desc1')); ?></p>
                    <p><?php echo e(__('about_intro_desc2')); ?></p>
                    <div class="intro-highlights">
                        <div class="intro-highlight">
                            <i class="fas fa-check-circle"></i>
                            <span><?php echo e(__('about_intro_highlight1')); ?></span>
                        </div>
                        <div class="intro-highlight">
                            <i class="fas fa-check-circle"></i>
                            <span><?php echo e(__('about_intro_highlight2')); ?></span>
                        </div>
                        <div class="intro-highlight">
                            <i class="fas fa-check-circle"></i>
                            <span><?php echo e(__('about_intro_highlight3')); ?></span>
                        </div>
                        <div class="intro-highlight">
                            <i class="fas fa-check-circle"></i>
                            <span><?php echo e(__('about_intro_highlight4')); ?></span>
                        </div>
                    </div>
                </div>
                <div class="intro-visual">
                    <div class="intro-cards-grid">
                        <div class="intro-card">
                            <div class="ic-icon"><i class="fas fa-server"></i></div>
                            <div class="ic-label"><?php echo e(__('about_intro_card1_label')); ?></div>
                            <div class="ic-val"><?php echo e(__('about_intro_card1_val')); ?></div>
                        </div>
                        <div class="intro-card">
                            <div class="ic-icon ic-icon-green"><i class="fas fa-cloud"></i></div>
                            <div class="ic-label"><?php echo e(__('about_intro_card2_label')); ?></div>
                            <div class="ic-val"><?php echo e(__('about_intro_card2_val')); ?></div>
                        </div>
                        <div class="intro-card">
                            <div class="ic-icon ic-icon-purple"><i class="fab fa-linux"></i></div>
                            <div class="ic-label"><?php echo e(__('about_intro_card3_label')); ?></div>
                            <div class="ic-val"><?php echo e(__('about_intro_card3_val')); ?></div>
                        </div>
                        <div class="intro-card">
                            <div class="ic-icon ic-icon-amber"><i class="fas fa-globe"></i></div>
                            <div class="ic-label"><?php echo e(__('about_intro_card4_label')); ?></div>
                            <div class="ic-val"><?php echo e(__('about_intro_card4_val')); ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ TIMELINE ═══════════════ -->
    <section class="timeline-section reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag"><?php echo e(__('about_timeline_tag')); ?></div>
                <h2><?php echo e(__('about_timeline_title')); ?></h2>
                <p><?php echo e(__('about_timeline_desc')); ?></p>
            </div>

            <div class="swiper timeline-swiper" id="timelineSwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="tl-card">
                            <div class="tl-year">2018</div>
                            <div class="tl-icon"><i class="fas fa-rocket"></i></div>
                            <h4><?php echo e(__('about_timeline_2018_title')); ?></h4>
                            <p><?php echo e(__('about_timeline_2018_desc')); ?></p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="tl-card">
                            <div class="tl-year">2019</div>
                            <div class="tl-icon tl-icon-green"><i class="fas fa-flask"></i></div>
                            <h4><?php echo e(__('about_timeline_2019_title')); ?></h4>
                            <p><?php echo e(__('about_timeline_2019_desc')); ?></p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="tl-card">
                            <div class="tl-year">2020</div>
                            <div class="tl-icon tl-icon-purple"><i class="fas fa-bolt"></i></div>
                            <h4><?php echo e(__('about_timeline_2020_title')); ?></h4>
                            <p><?php echo e(__('about_timeline_2020_desc')); ?></p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="tl-card">
                            <div class="tl-year">2021</div>
                            <div class="tl-icon tl-icon-amber"><i class="fas fa-globe-americas"></i></div>
                            <h4><?php echo e(__('about_timeline_2021_title')); ?></h4>
                            <p><?php echo e(__('about_timeline_2021_desc')); ?></p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="tl-card">
                            <div class="tl-year">2022</div>
                            <div class="tl-icon"><i class="fas fa-server"></i></div>
                            <h4><?php echo __('about_timeline_2022_title'); ?></h4>
                            <p><?php echo e(__('about_timeline_2022_desc')); ?></p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="tl-card">
                            <div class="tl-year">2023</div>
                            <div class="tl-icon tl-icon-green"><i class="fas fa-tachometer-alt"></i></div>
                            <h4><?php echo e(__('about_timeline_2023_title')); ?></h4>
                            <p><?php echo e(__('about_timeline_2023_desc')); ?></p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="tl-card">
                            <div class="tl-year">2024</div>
                            <div class="tl-icon tl-icon-purple"><i class="fas fa-users"></i></div>
                            <h4><?php echo e(__('about_timeline_2024_title')); ?></h4>
                            <p><?php echo e(__('about_timeline_2024_desc')); ?></p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="tl-card tl-card-active">
                            <div class="tl-year">2025</div>
                            <div class="tl-icon tl-icon-amber"><i class="fas fa-network-wired"></i></div>
                            <h4><?php echo e(__('about_timeline_2025_title')); ?></h4>
                            <p><?php echo e(__('about_timeline_2025_desc')); ?></p>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ DATA CENTERS ═══════════════ -->
    <section class="global reveal">
        <div class="container">
            <div class="global-layout">
                <div class="global-content">
                    <div class="section-tag"><?php echo e(__('about_dc_tag')); ?></div>
                    <h2 class="global-title"><?php echo e(__('about_dc_title')); ?></h2>
                    <p class="global-desc"><?php echo e(__('about_dc_desc1')); ?></p>
                    <p class="global-desc"><?php echo e(__('about_dc_desc2')); ?></p>
                    <div class="global-stats">
                        <div class="global-stat">
                            <div class="stat-number">50+</div>
                            <div class="stat-label"><?php echo e(__('about_dc_stat_locations')); ?></div>
                        </div>
                        <div class="global-stat">
                            <div class="stat-number">100+</div>
                            <div class="stat-label"><?php echo e(__('about_dc_stat_capacity')); ?></div>
                        </div>
                        <div class="global-stat">
                            <div class="stat-number">8</div>
                            <div class="stat-label"><?php echo e(__('about_dc_stat_partners')); ?></div>
                        </div>
                        <div class="global-stat">
                            <div class="stat-number">6</div>
                            <div class="stat-label"><?php echo e(__('about_dc_stat_continents')); ?></div>
                        </div>
                    </div>
                </div>
                <div class="global-map-visual">
                    <div class="dc-map" id="dcMapAbout">
                        <svg class="dc-map-svg" viewBox="0 0 1000 500" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg">
                            <defs>
                                <filter id="nodeGlowAbout" x="-200%" y="-200%" width="500%" height="500%">
                                    <feGaussianBlur in="SourceGraphic" stdDeviation="5" result="blur"/>
                                    <feMerge><feMergeNode in="blur"/><feMergeNode in="SourceGraphic"/></feMerge>
                                </filter>
                                <filter id="hqGlowAbout" x="-200%" y="-200%" width="500%" height="500%">
                                    <feGaussianBlur in="SourceGraphic" stdDeviation="9" result="blur"/>
                                    <feMerge><feMergeNode in="blur"/><feMergeNode in="SourceGraphic"/></feMerge>
                                </filter>
                            </defs>
                            <!-- Real world map continents -->
                            <?php include __DIR__ . '/includes/world-map-paths.php'; ?>

                            <!-- Subtle connection lines between key regions -->
                            <g class="dc-map-connections">
                                <path class="dc-connection-glow" d="M572,127 Q548,105 524,111"/>
                                <path class="dc-connection" d="M572,127 Q548,105 524,111"/>
                                <path class="dc-connection-glow" d="M572,127 Q430,90 285,142"/>
                                <path class="dc-connection" d="M572,127 Q430,90 285,142"/>
                                <path class="dc-connection-glow" d="M572,127 Q640,140 703,197"/>
                                <path class="dc-connection" d="M572,127 Q640,140 703,197"/>
                                <path class="dc-connection-glow" d="M572,127 Q730,95 888,151"/>
                                <path class="dc-connection" d="M572,127 Q730,95 888,151"/>
                                <path class="dc-connection-glow" d="M285,142 Q310,230 371,315"/>
                                <path class="dc-connection" d="M285,142 Q310,230 371,315"/>
                                <path class="dc-connection-glow" d="M703,197 Q750,215 788,246"/>
                                <path class="dc-connection" d="M703,197 Q750,215 788,246"/>
                            </g>

                            <g class="dc-map-nodes">
                                <g class="dc-node dc-node-hq" data-dc="Romania (HQ)">
                                    <circle cx="572" cy="127" r="18" class="dc-ring"/>
                                    <circle cx="572" cy="127" r="9" class="dc-glow" filter="url(#hqGlowAbout)"/>
                                    <circle cx="572" cy="127" r="4.5" class="dc-dot"/>
                                </g>
                                <g class="dc-node" data-dc="Germany" style="animation-delay:.2s">
                                    <circle cx="524" cy="111" r="12" class="dc-ring" style="animation-delay:.2s"/>
                                    <circle cx="524" cy="111" r="5" class="dc-glow" filter="url(#nodeGlowAbout)"/>
                                    <circle cx="524" cy="111" r="2.5" class="dc-dot"/>
                                </g>
                                <g class="dc-node" data-dc="Netherlands" style="animation-delay:.4s">
                                    <circle cx="514" cy="104" r="12" class="dc-ring" style="animation-delay:.4s"/>
                                    <circle cx="514" cy="104" r="5" class="dc-glow" filter="url(#nodeGlowAbout)"/>
                                    <circle cx="514" cy="104" r="2.5" class="dc-dot"/>
                                </g>
                                <g class="dc-node" data-dc="France" style="animation-delay:.6s">
                                    <circle cx="506" cy="114" r="12" class="dc-ring" style="animation-delay:.6s"/>
                                    <circle cx="506" cy="114" r="5" class="dc-glow" filter="url(#nodeGlowAbout)"/>
                                    <circle cx="506" cy="114" r="2.5" class="dc-dot"/>
                                </g>
                                <g class="dc-node" data-dc="Finland" style="animation-delay:.8s">
                                    <circle cx="569" cy="83" r="12" class="dc-ring" style="animation-delay:.8s"/>
                                    <circle cx="569" cy="83" r="5" class="dc-glow" filter="url(#nodeGlowAbout)"/>
                                    <circle cx="569" cy="83" r="2.5" class="dc-dot"/>
                                </g>
                                <g class="dc-node" data-dc="Turkey" style="animation-delay:1s">
                                    <circle cx="581" cy="136" r="12" class="dc-ring" style="animation-delay:1s"/>
                                    <circle cx="581" cy="136" r="5" class="dc-glow" filter="url(#nodeGlowAbout)"/>
                                    <circle cx="581" cy="136" r="2.5" class="dc-dot"/>
                                </g>
                                <g class="dc-node" data-dc="USA (Virginia)" style="animation-delay:1.2s">
                                    <circle cx="285" cy="142" r="12" class="dc-ring" style="animation-delay:1.2s"/>
                                    <circle cx="285" cy="142" r="5" class="dc-glow" filter="url(#nodeGlowAbout)"/>
                                    <circle cx="285" cy="142" r="2.5" class="dc-dot"/>
                                </g>
                                <g class="dc-node" data-dc="Canada" style="animation-delay:1.4s">
                                    <circle cx="279" cy="129" r="12" class="dc-ring" style="animation-delay:1.4s"/>
                                    <circle cx="279" cy="129" r="5" class="dc-glow" filter="url(#nodeGlowAbout)"/>
                                    <circle cx="279" cy="129" r="2.5" class="dc-dot"/>
                                </g>
                                <g class="dc-node" data-dc="India" style="animation-delay:1.6s">
                                    <circle cx="703" cy="197" r="12" class="dc-ring" style="animation-delay:1.6s"/>
                                    <circle cx="703" cy="197" r="5" class="dc-glow" filter="url(#nodeGlowAbout)"/>
                                    <circle cx="703" cy="197" r="2.5" class="dc-dot"/>
                                </g>
                                <g class="dc-node" data-dc="Singapore" style="animation-delay:1.8s">
                                    <circle cx="788" cy="246" r="12" class="dc-ring" style="animation-delay:1.8s"/>
                                    <circle cx="788" cy="246" r="5" class="dc-glow" filter="url(#nodeGlowAbout)"/>
                                    <circle cx="788" cy="246" r="2.5" class="dc-dot"/>
                                </g>
                                <g class="dc-node" data-dc="Japan" style="animation-delay:2s">
                                    <circle cx="888" cy="151" r="12" class="dc-ring" style="animation-delay:2s"/>
                                    <circle cx="888" cy="151" r="5" class="dc-glow" filter="url(#nodeGlowAbout)"/>
                                    <circle cx="888" cy="151" r="2.5" class="dc-dot"/>
                                </g>
                                <g class="dc-node" data-dc="Australia" style="animation-delay:2.2s">
                                    <circle cx="920" cy="344" r="12" class="dc-ring" style="animation-delay:2.2s"/>
                                    <circle cx="920" cy="344" r="5" class="dc-glow" filter="url(#nodeGlowAbout)"/>
                                    <circle cx="920" cy="344" r="2.5" class="dc-dot"/>
                                </g>
                                <g class="dc-node" data-dc="UAE" style="animation-delay:2.4s">
                                    <circle cx="654" cy="180" r="12" class="dc-ring" style="animation-delay:2.4s"/>
                                    <circle cx="654" cy="180" r="5" class="dc-glow" filter="url(#nodeGlowAbout)"/>
                                    <circle cx="654" cy="180" r="2.5" class="dc-dot"/>
                                </g>
                                <g class="dc-node" data-dc="Brazil" style="animation-delay:2.6s">
                                    <circle cx="371" cy="315" r="12" class="dc-ring" style="animation-delay:2.6s"/>
                                    <circle cx="371" cy="315" r="5" class="dc-glow" filter="url(#nodeGlowAbout)"/>
                                    <circle cx="371" cy="315" r="2.5" class="dc-dot"/>
                                </g>
                            </g>
                        </svg>
                        <div class="dc-tooltip" id="dcTooltipAbout"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ OUR TEAM ═══════════════ -->
    <section class="team-section reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag"><?php echo e(__('about_team_tag')); ?></div>
                <h2><?php echo e(__('about_team_title')); ?></h2>
                <p><?php echo e(__('about_team_desc')); ?></p>
            </div>

            <div class="swiper team-swiper" id="teamSwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><div class="team-card">
                        <div class="team-avatar"><img src="https://i.pravatar.cc/150?img=11" alt="Petru A." loading="lazy"></div>
                        <h4>Petru A.</h4>
                        <span class="team-role"><?php echo e(__('about_team_role_head_support')); ?></span>
                    </div></div>
                    <div class="swiper-slide"><div class="team-card">
                        <div class="team-avatar"><img src="https://i.pravatar.cc/150?img=12" alt="Daniel C." loading="lazy"></div>
                        <h4>Daniel C.</h4>
                        <span class="team-role"><?php echo e(__('about_team_role_support_engineer')); ?></span>
                    </div></div>
                    <div class="swiper-slide"><div class="team-card">
                        <div class="team-avatar"><img src="https://i.pravatar.cc/150?img=14" alt="Alper A." loading="lazy"></div>
                        <h4>Alper A.</h4>
                        <span class="team-role"><?php echo e(__('about_team_role_support_engineer')); ?></span>
                    </div></div>
                    <div class="swiper-slide"><div class="team-card">
                        <div class="team-avatar"><img src="https://i.pravatar.cc/150?img=32" alt="Maria A." loading="lazy"></div>
                        <h4>Maria A.</h4>
                        <span class="team-role"><?php echo e(__('about_team_role_accountant')); ?></span>
                    </div></div>
                    <div class="swiper-slide"><div class="team-card">
                        <div class="team-avatar"><img src="https://i.pravatar.cc/150?img=44" alt="Julie Y." loading="lazy"></div>
                        <h4>Julie Y.</h4>
                        <span class="team-role"><?php echo e(__('about_team_role_marketer')); ?></span>
                    </div></div>
                    <div class="swiper-slide"><div class="team-card">
                        <div class="team-avatar"><img src="https://i.pravatar.cc/150?img=59" alt="Aseel B." loading="lazy"></div>
                        <h4>Aseel B.</h4>
                        <span class="team-role"><?php echo e(__('about_team_role_support_engineer')); ?></span>
                    </div></div>
                    <div class="swiper-slide"><div class="team-card">
                        <div class="team-avatar"><img src="https://i.pravatar.cc/150?img=53" alt="Denis L." loading="lazy"></div>
                        <h4>Denis L.</h4>
                        <span class="team-role"><?php echo e(__('about_team_role_support_engineer')); ?></span>
                    </div></div>
                    <div class="swiper-slide"><div class="team-card">
                        <div class="team-avatar"><img src="https://i.pravatar.cc/150?img=60" alt="Andrei M." loading="lazy"></div>
                        <h4>Andrei M.</h4>
                        <span class="team-role"><?php echo e(__('about_team_role_developer')); ?></span>
                    </div></div>
                    <div class="swiper-slide"><div class="team-card">
                        <div class="team-avatar"><img src="https://i.pravatar.cc/150?img=52" alt="AlMhyar M." loading="lazy"></div>
                        <h4>AlMhyar M.</h4>
                        <span class="team-role"><?php echo e(__('about_team_role_support_engineer')); ?></span>
                    </div></div>
                    <div class="swiper-slide"><div class="team-card">
                        <div class="team-avatar"><img src="https://i.pravatar.cc/150?img=57" alt="Gabriel B." loading="lazy"></div>
                        <h4>Gabriel B.</h4>
                        <span class="team-role"><?php echo e(__('about_team_role_developer')); ?></span>
                    </div></div>
                    <div class="swiper-slide"><div class="team-card">
                        <div class="team-avatar"><img src="https://i.pravatar.cc/150?img=26" alt="Mirella E." loading="lazy"></div>
                        <h4>Mirella E.</h4>
                        <span class="team-role"><?php echo e(__('about_team_role_accountant_manager')); ?></span>
                    </div></div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ TRUST INDICATORS ═══════════════ -->
    <section class="about-trust reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag"><?php echo e(__('about_trust_tag')); ?></div>
                <h2><?php echo e(__('about_trust_title')); ?></h2>
            </div>

            <div class="about-trust-grid">
                <div class="cp-security-card">
                    <div class="cp-security-icon"><i class="fas fa-server"></i></div>
                    <h4><?php echo e(__('about_trust_card1_title')); ?></h4>
                    <p><?php echo e(__('about_trust_card1_desc')); ?></p>
                </div>
                <div class="cp-security-card">
                    <div class="cp-security-icon icon-green"><i class="fas fa-globe"></i></div>
                    <h4><?php echo e(__('about_trust_card2_title')); ?></h4>
                    <p><?php echo e(__('about_trust_card2_desc')); ?></p>
                </div>
                <div class="cp-security-card">
                    <div class="cp-security-icon icon-purple"><i class="fas fa-microchip"></i></div>
                    <h4><?php echo e(__('about_trust_card3_title')); ?></h4>
                    <p><?php echo e(__('about_trust_card3_desc')); ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ WHY CHOOSE US ═══════════════ -->
    <section class="why-us reveal">
        <div class="container">
            <div class="why-us-layout">
                <div class="why-us-intro">
                    <div class="section-tag"><?php echo e(__('about_why_tag')); ?></div>
                    <h2 class="why-us-title"><?php echo e(__('about_why_title')); ?></h2>
                    <p class="why-us-desc"><?php echo e(__('about_why_desc')); ?></p>
                    <a href="<?php echo e(SITE_URL); ?>/best-cpanel-hosting/" class="btn-primary">
                        <?php echo e(__('about_why_cta')); ?> <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
                <div class="why-us-grid">
                    <div class="why-us-card">
                        <div class="why-us-card-icon"><i class="fas fa-headset"></i></div>
                        <h4><?php echo e(__('about_why_card1_title')); ?></h4>
                        <p><?php echo e(__('about_why_card1_desc')); ?></p>
                    </div>
                    <div class="why-us-card">
                        <div class="why-us-card-icon icon-green"><i class="fas fa-tachometer-alt"></i></div>
                        <h4><?php echo e(__('about_why_card2_title')); ?></h4>
                        <p><?php echo e(__('about_why_card2_desc')); ?></p>
                    </div>
                    <div class="why-us-card">
                        <div class="why-us-card-icon icon-purple"><i class="fas fa-shield-alt"></i></div>
                        <h4><?php echo __('about_why_card3_title'); ?></h4>
                        <p><?php echo e(__('about_why_card3_desc')); ?></p>
                    </div>
                    <div class="why-us-card">
                        <div class="why-us-card-icon icon-amber"><i class="fas fa-globe"></i></div>
                        <h4><?php echo e(__('about_why_card4_title')); ?></h4>
                        <p><?php echo e(__('about_why_card4_desc')); ?></p>
                    </div>
                    <div class="why-us-card">
                        <div class="why-us-card-icon icon-green"><i class="fas fa-tags"></i></div>
                        <h4><?php echo __('about_why_card5_title'); ?></h4>
                        <p><?php echo e(__('about_why_card5_desc')); ?></p>
                    </div>
                    <div class="why-us-card">
                        <div class="why-us-card-icon icon-purple"><i class="fas fa-th-large"></i></div>
                        <h4><?php echo e(__('about_why_card6_title')); ?></h4>
                        <p><?php echo e(__('about_why_card6_desc')); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ PROMOTIONS CTA ═══════════════ -->
    <section class="promo-cta reveal">
        <div class="container">
            <div class="promo-cta-inner">
                <div class="promo-cta-glow"></div>
                <div class="promo-cta-icon"><i class="fas fa-gift"></i></div>
                <h2><?php echo __('about_cta_title'); ?></h2>
                <p><?php echo e(__('about_cta_desc')); ?></p>
                <a href="<?php echo e(SITE_URL); ?>/promotions" class="btn-primary">
                    <?php echo e(__('about_cta_button')); ?> <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
