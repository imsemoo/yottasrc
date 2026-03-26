<?php
/**
 * YottaSrc — Contact Us
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
                        <span><?php echo e(__('contact_breadcrumb')); ?></span>
                    </div>
                    <h1><?php echo __('contact_title'); ?></h1>
                    <p class="page-hero-desc"><?php echo e(__('contact_desc')); ?></p>
                    <div class="page-hero-badges">
                        <div class="hero-badge-item"><i class="fas fa-check"></i> <?php echo e(__('contact_badge1')); ?></div>
                        <div class="hero-badge-item"><i class="fas fa-check"></i> <?php echo e(__('contact_badge2')); ?></div>
                        <div class="hero-badge-item"><i class="fas fa-check"></i> <?php echo e(__('contact_badge3')); ?></div>
                    </div>
                    <div class="page-hero-stats">
                        <div class="page-hero-stat">
                            <span class="stat-num">&lt;10<span class="stat-suffix">min</span></span>
                            <span class="stat-text"><?php echo e(__('contact_stat_response')); ?></span>
                        </div>
                        <div class="page-hero-stat">
                            <span class="stat-num">24<span class="stat-suffix">/7</span></span>
                            <span class="stat-text"><?php echo e(__('contact_stat_support')); ?></span>
                        </div>
                        <div class="page-hero-stat">
                            <span class="stat-num">250K<span class="stat-suffix">+</span></span>
                            <span class="stat-text"><?php echo e(__('contact_stat_tickets')); ?></span>
                        </div>
                    </div>
                </div>
                <div class="page-hero-visual">
                    <svg viewBox="0 0 380 320" fill="none" xmlns="http://www.w3.org/2000/svg" class="hero-illustration" preserveAspectRatio="xMidYMid meet" aria-label="Support center illustration">
                        <!-- Main window frame -->
                        <rect x="30" y="16" width="320" height="288" rx="14" fill="var(--bg-card)" stroke="var(--border-primary)" stroke-width="1.2"/>
                        <!-- Title bar -->
                        <rect x="30" y="16" width="320" height="34" rx="14" fill="var(--bg-tertiary)"/>
                        <rect x="30" y="36" width="320" height="14" fill="var(--bg-tertiary)"/>
                        <circle cx="50" cy="33" r="4" fill="var(--brand-error)" opacity="0.5"/>
                        <circle cx="63" cy="33" r="4" fill="var(--brand-warning)" opacity="0.5"/>
                        <circle cx="76" cy="33" r="4" fill="var(--brand-secondary)" opacity="0.5"/>
                        <rect x="155" y="27" width="90" height="13" rx="4" fill="var(--border-primary)"/>
                        <text x="200" y="37" text-anchor="middle" fill="var(--text-tertiary)" font-size="7.5" font-family="var(--font-mono)" font-weight="600" opacity="0.5">Support Center</text>

                        <!-- Online status bar -->
                        <rect x="42" y="58" width="296" height="22" rx="6" fill="var(--bg-tertiary)" stroke="var(--border-primary)" stroke-width="0.5"/>
                        <circle cx="55" cy="69" r="3.5" fill="var(--brand-secondary)">
                            <animate attributeName="opacity" values="0.5;1;0.5" dur="2s" repeatCount="indefinite"/>
                        </circle>
                        <text x="64" y="73" fill="var(--brand-secondary)" font-size="7" font-family="var(--font-mono)" font-weight="600" opacity="0.7">Online</text>
                        <text x="290" y="73" text-anchor="end" fill="var(--text-tertiary)" font-size="6.5" font-family="var(--font-mono)" opacity="0.5">Avg. reply: 10 min</text>
                        <rect x="295" y="64" width="30" height="10" rx="4" fill="var(--brand-primary)" opacity="0.1"/>
                        <text x="310" y="72" text-anchor="middle" fill="var(--brand-primary)" font-size="6" font-family="var(--font-mono)" font-weight="700" opacity="0.7">FAST</text>

                        <!-- Agent message 1 — avatar + bubble -->
                        <circle cx="56" cy="100" r="10" fill="var(--brand-primary)" opacity="0.1"/>
                        <text x="56" y="104" text-anchor="middle" fill="var(--brand-primary)" font-size="8" font-weight="700" opacity="0.6">Y</text>
                        <rect x="72" y="90" width="160" height="14" rx="7" fill="var(--brand-primary)" opacity="0.1"/>
                        <rect x="78" y="93" width="100" height="8" rx="4" fill="var(--brand-primary)" opacity="0.12"/>
                        <rect x="72" y="108" width="120" height="14" rx="7" fill="var(--brand-primary)" opacity="0.07"/>
                        <rect x="78" y="111" width="70" height="8" rx="4" fill="var(--brand-primary)" opacity="0.1"/>

                        <!-- User message — right aligned -->
                        <rect x="170" y="134" width="155" height="14" rx="7" fill="var(--brand-secondary)" opacity="0.1"/>
                        <rect x="185" y="137" width="90" height="8" rx="4" fill="var(--brand-secondary)" opacity="0.12"/>
                        <rect x="200" y="152" width="125" height="14" rx="7" fill="var(--brand-secondary)" opacity="0.07"/>
                        <rect x="215" y="155" width="65" height="8" rx="4" fill="var(--brand-secondary)" opacity="0.1"/>

                        <!-- Agent message 2 — solution with checkmark -->
                        <circle cx="56" cy="186" r="10" fill="var(--brand-primary)" opacity="0.1"/>
                        <text x="56" y="190" text-anchor="middle" fill="var(--brand-primary)" font-size="8" font-weight="700" opacity="0.6">Y</text>
                        <rect x="72" y="176" width="180" height="14" rx="7" fill="var(--brand-primary)" opacity="0.1"/>
                        <rect x="78" y="179" width="120" height="8" rx="4" fill="var(--brand-primary)" opacity="0.12"/>
                        <!-- Resolved badge -->
                        <rect x="72" y="194" width="80" height="18" rx="5" fill="var(--brand-secondary)" opacity="0.08" stroke="var(--brand-secondary)" stroke-width="0.6" opacity="0.2"/>
                        <circle cx="83" cy="203" r="4" fill="var(--brand-secondary)" opacity="0.3"/>
                        <path d="M81 203 L83 205 L86 201" fill="none" stroke="var(--brand-secondary)" stroke-width="1.2" stroke-linecap="round" opacity="0.6"/>
                        <text x="95" y="207" fill="var(--brand-secondary)" font-size="6.5" font-family="var(--font-mono)" font-weight="600" opacity="0.5">Resolved</text>

                        <!-- Typing indicator -->
                        <circle cx="56" cy="232" r="10" fill="var(--brand-primary)" opacity="0.06"/>
                        <rect x="72" y="225" width="60" height="14" rx="7" fill="var(--brand-primary)" opacity="0.05"/>
                        <circle cx="86" cy="232" r="2.5" fill="var(--brand-primary)" opacity="0.3">
                            <animate attributeName="opacity" values="0.2;0.5;0.2" dur="1.2s" repeatCount="indefinite"/>
                        </circle>
                        <circle cx="95" cy="232" r="2.5" fill="var(--brand-primary)" opacity="0.3">
                            <animate attributeName="opacity" values="0.2;0.5;0.2" dur="1.2s" begin="0.2s" repeatCount="indefinite"/>
                        </circle>
                        <circle cx="104" cy="232" r="2.5" fill="var(--brand-primary)" opacity="0.3">
                            <animate attributeName="opacity" values="0.2;0.5;0.2" dur="1.2s" begin="0.4s" repeatCount="indefinite"/>
                        </circle>

                        <!-- Input field -->
                        <rect x="42" y="254" width="296" height="28" rx="8" fill="var(--bg-tertiary)" stroke="var(--border-primary)" stroke-width="0.6"/>
                        <text x="56" y="272" fill="var(--text-tertiary)" font-size="7.5" font-family="var(--font-body)" opacity="0.3">Type your message...</text>
                        <rect x="300" y="260" width="28" height="16" rx="5" fill="var(--brand-primary)" opacity="0.12"/>
                        <text x="314" y="272" text-anchor="middle" fill="var(--brand-primary)" font-size="7" opacity="0.5">➤</text>

                        <!-- Satisfaction rating bar -->
                        <rect x="42" y="286" width="296" height="12" rx="4" fill="var(--bg-card)"/>
                        <text x="190" y="295" text-anchor="middle" fill="var(--text-tertiary)" font-size="5.5" font-family="var(--font-mono)" opacity="0.4">Satisfaction: ★★★★★ · 98.5% positive · 250K+ resolved</text>

                        <!-- Floating accents — tight to the frame -->
                        <!-- Headset icon -->
                        <circle cx="18" cy="110" r="16" fill="none" stroke="var(--brand-primary)" stroke-width="1" opacity="0.15"/>
                        <path d="M10 110 Q10 100 18 100 Q26 100 26 110" fill="none" stroke="var(--brand-primary)" stroke-width="1" stroke-linecap="round" opacity="0.2"/>
                        <rect x="7" y="108" width="6" height="10" rx="3" fill="var(--brand-primary)" opacity="0.1"/>
                        <rect x="23" y="108" width="6" height="10" rx="3" fill="var(--brand-primary)" opacity="0.1"/>

                        <!-- Shield badge -->
                        <circle cx="368" cy="80" r="14" fill="var(--brand-secondary)" opacity="0.05" stroke="var(--brand-secondary)" stroke-width="0.8" opacity="0.15"/>
                        <path d="M363 80 L366 83 L374 75" fill="none" stroke="var(--brand-secondary)" stroke-width="1.2" stroke-linecap="round" opacity="0.3"/>

                        <!-- Mail icon -->
                        <rect x="356" y="200" width="28" height="20" rx="4" fill="none" stroke="var(--brand-accent)" stroke-width="0.8" opacity="0.2"/>
                        <path d="M357 201 L370 212 L383 201" fill="none" stroke="var(--brand-accent)" stroke-width="0.7" opacity="0.15"/>

                        <!-- Floating dots -->
                        <circle cx="12" cy="50" r="2" fill="var(--brand-primary)" opacity="0.25">
                            <animate attributeName="opacity" values="0.2;0.5;0.2" dur="3s" repeatCount="indefinite"/>
                        </circle>
                        <circle cx="370" cy="280" r="2" fill="var(--brand-secondary)" opacity="0.25">
                            <animate attributeName="opacity" values="0.2;0.4;0.2" dur="4s" repeatCount="indefinite"/>
                        </circle>
                    </svg>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ CONTACT LAYOUT ═══════════════ -->
    <section class="contact-section reveal">
        <div class="container">
            <div class="contact-layout">
                <!-- Left: Info Cards -->
                <div class="contact-info">
                    <div class="contact-card">
                        <div class="contact-card-icon"><i class="fas fa-ticket-alt"></i></div>
                        <h4><?php echo e(__('contact_ticket_title')); ?></h4>
                        <p><?php echo e(__('contact_ticket_desc')); ?></p>
                        <a href="<?php echo e(CONSOLE_URL); ?>/login" class="btn-secondary btn-sm"><?php echo e(__('contact_ticket_btn')); ?> <i class="fas fa-arrow-right"></i></a>
                    </div>
                    <div class="contact-card">
                        <div class="contact-card-icon icon-green"><i class="fas fa-envelope"></i></div>
                        <h4><?php echo e(__('contact_email_title')); ?></h4>
                        <p><?php echo e(__('contact_email_desc')); ?></p>
                        <span class="contact-detail"><?php echo e(__('contact_email_address')); ?></span>
                    </div>
                    <div class="contact-card">
                        <div class="contact-card-icon icon-purple"><i class="fas fa-map-marker-alt"></i></div>
                        <h4><?php echo e(__('contact_office_title')); ?></h4>
                        <p><?php echo e(__('contact_office_address')); ?></p>
                        <span class="contact-detail"><?php echo e(__('contact_office_hours')); ?></span>
                    </div>
                    <div class="contact-card">
                        <div class="contact-card-icon icon-amber"><i class="fas fa-book"></i></div>
                        <h4><?php echo e(__('contact_resources_title')); ?></h4>
                        <p><?php echo e(__('contact_resources_desc')); ?></p>
                        <div class="contact-links">
                            <a href="https://docs.yottasrc.com/" class="contact-link-card">
                                <i class="fas fa-file-code"></i>
                                <div><strong><?php echo e(__('contact_link_docs')); ?></strong><span><?php echo e(__('contact_link_docs_sub')); ?></span></div>
                            </a>
                            <a href="https://wiki.yottasrc.com/" class="contact-link-card">
                                <i class="fas fa-book-open"></i>
                                <div><strong><?php echo e(__('contact_link_tutorials')); ?></strong><span><?php echo e(__('contact_link_tutorials_sub')); ?></span></div>
                            </a>
                            <a href="<?php echo e(SITE_URL); ?>/faq" class="contact-link-card">
                                <i class="fas fa-question-circle"></i>
                                <div><strong><?php echo e(__('contact_link_faq')); ?></strong><span><?php echo e(__('contact_link_faq_sub')); ?></span></div>
                            </a>
                            <a href="https://blog.yottasrc.com/" class="contact-link-card">
                                <i class="fas fa-rss"></i>
                                <div><strong><?php echo e(__('contact_link_blog')); ?></strong><span><?php echo e(__('contact_link_blog_sub')); ?></span></div>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Right: Contact Form -->
                <div class="contact-form-wrap">
                    <div class="contact-form-card">
                        <h3><?php echo e(__('contact_form_title')); ?></h3>
                        <p class="form-note"><?php echo __('contact_form_note', ['url' => e(CONSOLE_URL) . '/login']); ?></p>
                        <form class="contact-form" id="contactForm" method="post">
                            <div class="form-group form-group-icon">
                                <label for="contactName"><?php echo e(__('contact_form_name')); ?> <span class="required">*</span></label>
                                <div class="input-icon-wrap">
                                    <i class="fas fa-user"></i>
                                    <input type="text" id="contactName" name="name" placeholder="<?php echo e(__('contact_form_name_ph')); ?>" required>
                                </div>
                            </div>
                            <div class="form-group form-group-icon">
                                <label for="contactEmail"><?php echo e(__('contact_form_email')); ?> <span class="required">*</span></label>
                                <div class="input-icon-wrap">
                                    <i class="fas fa-envelope"></i>
                                    <input type="email" id="contactEmail" name="email" placeholder="<?php echo e(__('contact_form_email_ph')); ?>" required>
                                </div>
                            </div>
                            <div class="form-group form-group-icon">
                                <label for="contactSubject"><?php echo e(__('contact_form_subject')); ?></label>
                                <div class="input-icon-wrap">
                                    <i class="fas fa-tag"></i>
                                    <select id="contactSubject" name="subject">
                                        <option value="sales"><?php echo e(__('contact_form_subject_sales')); ?></option>
                                        <option value="partnership"><?php echo e(__('contact_form_subject_partner')); ?></option>
                                        <option value="billing"><?php echo e(__('contact_form_subject_billing')); ?></option>
                                        <option value="other"><?php echo e(__('contact_form_subject_other')); ?></option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group form-group-icon">
                                <label for="contactMessage"><?php echo e(__('contact_form_message')); ?> <span class="required">*</span></label>
                                <div class="input-icon-wrap is-textarea">
                                    <i class="fas fa-comment-alt"></i>
                                    <textarea id="contactMessage" name="message" rows="5" placeholder="<?php echo e(__('contact_form_message_ph')); ?>" required></textarea>
                                </div>
                            </div>
                            <button type="submit" class="btn-primary btn-full">
                                <i class="fas fa-paper-plane"></i> <?php echo e(__('contact_form_submit')); ?>
                            </button>
                            <p class="contact-form-trust"><i class="fas fa-shield-alt"></i> <?php echo e(__('contact_form_trust')); ?></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ WHY CHOOSE US ═══════════════ -->
    <section class="why-us reveal">
        <div class="container">
            <div class="why-us-layout">
                <div class="why-us-intro">
                    <div class="section-tag"><?php echo e(__('contact_whyus_tag')); ?></div>
                    <h2 class="why-us-title"><?php echo e(__('contact_whyus_title')); ?></h2>
                    <p class="why-us-desc"><?php echo e(__('contact_whyus_desc')); ?></p>
                </div>
                <div class="why-us-grid">
                    <div class="why-us-card"><div class="why-us-card-icon"><i class="fas fa-headset"></i></div><h4><?php echo e(__('contact_whyus_support_title')); ?></h4><p><?php echo e(__('contact_whyus_support_desc')); ?></p></div>
                    <div class="why-us-card"><div class="why-us-card-icon icon-green"><i class="fas fa-tachometer-alt"></i></div><h4><?php echo e(__('contact_whyus_speed_title')); ?></h4><p><?php echo e(__('contact_whyus_speed_desc')); ?></p></div>
                    <div class="why-us-card"><div class="why-us-card-icon icon-purple"><i class="fas fa-shield-alt"></i></div><h4><?php echo e(__('contact_whyus_secure_title')); ?></h4><p><?php echo e(__('contact_whyus_secure_desc')); ?></p></div>
                    <div class="why-us-card"><div class="why-us-card-icon icon-amber"><i class="fas fa-globe"></i></div><h4><?php echo e(__('contact_whyus_global_title')); ?></h4><p><?php echo e(__('contact_whyus_global_desc')); ?></p></div>
                    <div class="why-us-card"><div class="why-us-card-icon icon-green"><i class="fas fa-tags"></i></div><h4><?php echo e(__('contact_whyus_price_title')); ?></h4><p><?php echo e(__('contact_whyus_price_desc')); ?></p></div>
                    <div class="why-us-card"><div class="why-us-card-icon icon-purple"><i class="fas fa-th-large"></i></div><h4><?php echo e(__('contact_whyus_dash_title')); ?></h4><p><?php echo e(__('contact_whyus_dash_desc')); ?></p></div>
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
                <h2><?php echo __('contact_promo_cta_title'); ?></h2>
                <p><?php echo e(__('contact_promo_cta_desc')); ?></p>
                <a href="<?php echo e(SITE_URL); ?>/promotions" class="btn-primary"><?php echo e(__('contact_promo_cta_btn')); ?> <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
