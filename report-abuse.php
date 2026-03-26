<?php
/**
 * YottaSrc — Report Abuse
 * ========================
 * Abuse reporting form page.
 */
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/topbar.php';
?>

    <!-- ═══════════════ HERO ═══════════════ -->
    <section class="page-hero">
        <div class="container">
            <div class="page-hero-content" >
                <div class="page-breadcrumb" >
                    <a href="<?php echo e(SITE_URL); ?>/"><?php echo e(__('breadcrumb_home')); ?></a>
                    <i class="fas fa-chevron-right"></i>
                    <a href="<?php echo e(SITE_URL); ?>/legal/"><?php echo e(__('abuse_breadcrumb_legal')); ?></a>
                    <i class="fas fa-chevron-right"></i>
                    <span><?php echo e(__('abuse_breadcrumb')); ?></span>
                </div>
                <h1><?php echo __('abuse_title'); ?></h1>
                <p class="page-hero-desc">
                    <?php echo e(__('abuse_desc')); ?>
                </p>
            </div>
        </div>
    </section>

    <!-- ═══════════════ EXPLANATION ═══════════════ -->
    <section class="abuse-info reveal">
        <div class="container">
            <div class="abuse-info-grid">
                <div class="abuse-info-card">
                    <div class="bento-card-icon"><i class="fas fa-exclamation-triangle"></i></div>
                    <h3><?php echo e(__('abuse_info_what_title')); ?></h3>
                    <ul>
                        <li><?php echo e(__('abuse_info_what_li1')); ?></li>
                        <li><?php echo e(__('abuse_info_what_li2')); ?></li>
                        <li><?php echo e(__('abuse_info_what_li3')); ?></li>
                        <li><?php echo e(__('abuse_info_what_li4')); ?></li>
                        <li><?php echo e(__('abuse_info_what_li5')); ?></li>
                        <li><?php echo e(__('abuse_info_what_li6')); ?></li>
                    </ul>
                </div>
                <div class="abuse-info-card">
                    <div class="bento-card-icon icon-green"><i class="fas fa-clipboard-check"></i></div>
                    <h3><?php echo e(__('abuse_info_next_title')); ?></h3>
                    <ul>
                        <li><?php echo e(__('abuse_info_next_li1')); ?></li>
                        <li><?php echo e(__('abuse_info_next_li2')); ?></li>
                        <li><?php echo e(__('abuse_info_next_li3')); ?></li>
                        <li><?php echo e(__('abuse_info_next_li4')); ?></li>
                        <li><?php echo e(__('abuse_info_next_li5')); ?></li>
                        <li><?php echo e(__('abuse_info_next_li6')); ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ ABUSE FORM ═══════════════ -->
    <section class="abuse-form-section reveal">
        <div class="container">
            <div class="abuse-form-wrap">
                <div class="section-header">
                    <h2><?php echo e(__('abuse_form_title')); ?></h2>
                    <p><?php echo e(__('abuse_form_desc')); ?></p>
                </div>

                <form class="abuse-form" action="#" method="post" id="abuseForm">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="abuse-name"><?php echo e(__('abuse_form_name')); ?> <span class="required"><?php echo e(__('common_required')); ?></span></label>
                            <input type="text" id="abuse-name" name="name" placeholder="<?php echo e(__('abuse_form_name_ph')); ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="abuse-email"><?php echo e(__('abuse_form_email')); ?> <span class="required"><?php echo e(__('common_required')); ?></span></label>
                            <input type="email" id="abuse-email" name="email" placeholder="<?php echo e(__('abuse_form_email_ph')); ?>" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="abuse-type"><?php echo e(__('abuse_form_type')); ?> <span class="required"><?php echo e(__('common_required')); ?></span></label>
                            <select id="abuse-type" name="type" required>
                                <option value="" disabled selected><?php echo e(__('abuse_form_type_ph')); ?></option>
                                <option value="spam"><?php echo e(__('abuse_form_type_spam')); ?></option>
                                <option value="phishing"><?php echo e(__('abuse_form_type_phishing')); ?></option>
                                <option value="malware"><?php echo e(__('abuse_form_type_malware')); ?></option>
                                <option value="copyright"><?php echo e(__('abuse_form_type_copyright')); ?></option>
                                <option value="ddos"><?php echo e(__('abuse_form_type_ddos')); ?></option>
                                <option value="illegal"><?php echo e(__('abuse_form_type_illegal')); ?></option>
                                <option value="other"><?php echo e(__('abuse_form_type_other')); ?></option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="abuse-target"><?php echo e(__('abuse_form_target')); ?> <span class="required"><?php echo e(__('common_required')); ?></span></label>
                            <input type="text" id="abuse-target" name="target" placeholder="<?php echo e(__('abuse_form_target_ph')); ?>" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="abuse-description"><?php echo e(__('abuse_form_description')); ?> <span class="required"><?php echo e(__('common_required')); ?></span></label>
                        <textarea id="abuse-description" name="description" rows="6" placeholder="<?php echo e(__('abuse_form_description_ph')); ?>" required></textarea>
                    </div>

                    <div class="form-group">
                        <label for="abuse-evidence"><?php echo e(__('abuse_form_evidence')); ?></label>
                        <input type="url" id="abuse-evidence" name="evidence" placeholder="<?php echo e(__('abuse_form_evidence_ph')); ?>">
                        <span class="form-hint"><?php echo e(__('abuse_form_evidence_hint')); ?></span>
                    </div>

                    <button type="submit" class="btn-primary"><i class="fas fa-paper-plane"></i> <?php echo e(__('abuse_form_submit')); ?></button>
                </form>
            </div>
        </div>
    </section>

    <!-- ═══════════════ BOTTOM CTA ═══════════════ -->
    <section class="promo-cta reveal">
        <div class="container">
            <div class="promo-cta-inner">
                <div class="promo-cta-glow"></div>
                <div class="promo-cta-icon"><i class="fas fa-headset"></i></div>
                <h2><?php echo e(__('abuse_cta_title')); ?></h2>
                <p><?php echo __('abuse_cta_desc'); ?></p>
                <a href="<?php echo e(SITE_URL); ?>/contact/" class="btn-primary"><?php echo e(__('abuse_cta_btn')); ?> <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
