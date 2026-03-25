    <!-- ═══════════════ FOOTER ═══════════════ -->
    <footer class="site-footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-brand">
                    <a href="<?php echo e(SITE_URL); ?>/" class="nav-logo">
                       <img src="<?php echo asset('images/logo_dark.png'); ?>" alt="<?php echo e(SITE_NAME); ?>" class="logo-icon logo-dark">
                       <img src="<?php echo asset('images/logo_light.png'); ?>" alt="<?php echo e(SITE_NAME); ?>" class="logo-icon logo-light">
                    </a>
                    <p><?php echo e(__('footer_desc')); ?></p>
                    <div class="footer-socials">
                        <a href="https://www.facebook.com/YottaSrc" class="footer-social-link" target="_blank" rel="noopener noreferrer" aria-label="Facebook">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg>
                        </a>
                        <a href="https://x.com/yottasrc" class="footer-social-link" target="_blank" rel="noopener noreferrer" aria-label="Twitter/X">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                        </a>
                        <a href="https://www.linkedin.com/company/yottasrc" class="footer-social-link" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/><rect x="2" y="9" width="4" height="12"/><circle cx="4" cy="4" r="2"/></svg>
                        </a>
                        <a href="https://www.youtube.com/@YottaSrc" class="footer-social-link" target="_blank" rel="noopener noreferrer" aria-label="YouTube">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22.54 6.42a2.78 2.78 0 0 0-1.94-2C18.88 4 12 4 12 4s-6.88 0-8.6.46a2.78 2.78 0 0 0-1.94 2A29 29 0 0 0 1 11.75a29 29 0 0 0 .46 5.33A2.78 2.78 0 0 0 3.4 19.1c1.72.46 8.6.46 8.6.46s6.88 0 8.6-.46a2.78 2.78 0 0 0 1.94-2 29 29 0 0 0 .46-5.25 29 29 0 0 0-.46-5.43z"/><polygon points="9.75 15.02 15.5 11.75 9.75 8.48 9.75 15.02"/></svg>
                        </a>
                        <a href="https://www.instagram.com/YottaSrc/" class="footer-social-link" target="_blank" rel="noopener noreferrer" aria-label="Instagram">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/></svg>
                        </a>
                    </div>
                    <div class="footer-auth">
                        <a href="<?php echo e(CONSOLE_URL); ?>/login" class="footer-auth-btn footer-login"><i class="fas fa-sign-in-alt"></i> <?php echo e(__('nav_login')); ?></a>
                        <a href="<?php echo e(CONSOLE_URL); ?>/register" class="footer-auth-btn footer-register"><i class="fas fa-user-plus"></i> <?php echo e(__('nav_get_started')); ?></a>
                    </div>
                </div>

                <div class="footer-column">
                    <h5><?php echo e(__('footer_col_hosting')); ?></h5>
                    <ul>
                        <li><a href="<?php echo e(SITE_URL); ?>/best-cpanel-hosting/"><?php echo e(__('nav_cpanel_hosting')); ?></a></li>
                        <li><a href="<?php echo e(SITE_URL); ?>/best-wordpress-hosting/"><?php echo e(__('nav_wordpress_hosting')); ?></a></li>
                        <li><a href="<?php echo e(SITE_URL); ?>/telegram-bot-hosting/"><?php echo e(__('nav_telegram_bot')); ?></a></li>
                        <li><a href="<?php echo e(SITE_URL); ?>/cpanel-hosting-dmca-ignored/"><?php echo e(__('nav_dmca_ignored')); ?></a></li>
                    </ul>
                </div>

                <div class="footer-column">
                    <h5><?php echo e(__('footer_col_servers')); ?></h5>
                    <ul>
                        <li><a href="<?php echo e(SITE_URL); ?>/vps/"><?php echo e(__('nav_linux_vps')); ?></a></li>
                        <li><a href="<?php echo e(SITE_URL); ?>/vps/windows-servers/"><?php echo e(__('nav_windows_vps')); ?></a></li>
                        <li><a href="<?php echo e(SITE_URL); ?>/cloud/"><?php echo e(__('nav_cloud_servers')); ?></a></li>
                        <li><a href="<?php echo e(SITE_URL); ?>/dedicated-servers/"><?php echo e(__('nav_dedicated')); ?></a></li>
                        <li><a href="<?php echo e(SITE_URL); ?>/hosting-reseller"><?php echo e(__('nav_reseller')); ?></a></li>
                        <li><a href="<?php echo e(SITE_URL); ?>/datacenter/"><?php echo e(__('footer_datacenter')); ?></a></li>
                    </ul>
                </div>

                <div class="footer-column">
                    <h5><?php echo e(__('footer_col_company')); ?></h5>
                    <ul>
                        <li><a href="<?php echo e(SITE_URL); ?>/about"><?php echo e(__('footer_about_us')); ?></a></li>
                        <li><a href="<?php echo e(SITE_URL); ?>/contact-us/"><?php echo e(__('footer_contact')); ?></a></li>
                        <li><a href="<?php echo e(SITE_URL); ?>/affiliate"><?php echo e(__('footer_affiliate')); ?></a></li>
                        <li><a href="<?php echo e(SITE_URL); ?>/payment-methods/"><?php echo e(__('footer_payments')); ?></a></li>
                        <li><a href="<?php echo e(SITE_URL); ?>/domains-registration/"><?php echo e(__('footer_domains')); ?></a></li>
                        <li><a href="<?php echo e(SITE_URL); ?>/promotions/"><?php echo e(__('footer_promotions')); ?></a></li>
                    </ul>
                </div>

                <div class="footer-column">
                    <h5><?php echo e(__('footer_col_legal')); ?></h5>
                    <ul>
                        <li><a href="<?php echo e(SITE_URL); ?>/terms/"><?php echo e(__('footer_terms')); ?></a></li>
                        <li><a href="<?php echo e(SITE_URL); ?>/privacy-policy/"><?php echo e(__('footer_privacy')); ?></a></li>
                        <li><a href="<?php echo e(SITE_URL); ?>/legal/refund-policy"><?php echo e(__('footer_refund')); ?></a></li>
                        <li><a href="<?php echo e(SITE_URL); ?>/data/resource-usage/"><?php echo e(__('footer_fair_usage')); ?></a></li>
                        <li><a href="<?php echo e(SITE_URL); ?>/report-abuse/"><?php echo e(__('footer_report_abuse')); ?></a></li>
                    </ul>
                </div>
            </div>

            <div class="footer-trusted">
                <div class="footer-trusted-logos">
                    <span class="footer-trusted-logo"><i class="fas fa-shield-alt"></i> AbuseIPDB</span>
                    <span class="footer-trusted-logo"><i class="fas fa-fingerprint"></i> FraudRecord</span>
                    <span class="footer-trusted-logo"><i class="fas fa-network-wired"></i> RIPE NCC</span>
                    <span class="footer-trusted-logo"><i class="fas fa-microchip"></i> AMD</span>
                    <span class="footer-trusted-logo"><i class="fas fa-server"></i> Dell</span>
                    <span class="footer-trusted-logo"><i class="fas fa-print"></i> HP</span>
                    <span class="footer-trusted-logo"><i class="fas fa-sitemap"></i> Juniper</span>
                    <span class="footer-trusted-logo"><i class="fas fa-project-diagram"></i> Cisco</span>
                    <span class="footer-trusted-logo"><i class="fas fa-memory"></i> Intel</span>
                    <span class="footer-trusted-logo"><i class="fab fa-cpanel"></i> cPanel</span>
                </div>
            </div>

            <div class="footer-bottom">
                <div class="footer-copyright">
                    <?php echo e(__('footer_copyright', ['year' => date('Y'), 'site_name' => SITE_NAME])); ?>
                </div>
                <div class="footer-payments">
                    <span class="pay-icon" data-tooltip="Visa"><i class="fab fa-cc-visa"></i></span>
                    <span class="pay-icon" data-tooltip="Mastercard"><i class="fab fa-cc-mastercard"></i></span>
                    <span class="pay-icon" data-tooltip="PayPal"><i class="fab fa-cc-paypal"></i></span>
                    <span class="pay-icon" data-tooltip="Stripe"><i class="fab fa-cc-stripe"></i></span>
                    <span class="pay-icon" data-tooltip="Bitcoin"><i class="fab fa-bitcoin"></i></span>
                    <span class="pay-icon" data-tooltip="USDT"><i class="fas fa-coins"></i></span>
                    <span class="pay-icon" data-tooltip="Alipay"><i class="fab fa-alipay"></i></span>
                    <span class="pay-icon" data-tooltip="Coinbase"><i class="fas fa-wallet"></i></span>
                </div>
            </div>
        </div>
    </footer>

    <!-- Order Modal -->
    <?php require_once __DIR__ . '/order-modal.php'; ?>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- Main JavaScript (deferred) -->
    <script src="<?php echo asset('js/main.js'); ?>" defer></script>
</body>

</html>
