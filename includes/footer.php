    <!-- ═══════════════ FOOTER ═══════════════ -->
    <footer class="site-footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-brand">
                    <a href="<?php echo e(SITE_URL); ?>/" class="nav-logo">
                       <img src="<?php echo BASE_PATH; ?>/logo-light.png" alt="<?php echo e(SITE_NAME); ?>" class="logo-icon">
                    </a>
                    <p>High-performance cPanel hosting, WordPress hosting, VPS/VDS, and cloud solutions with 24/7
                        expert support. Headquartered in Romania &amp; Saudi Arabia. Since 2018.</p>
                    <div class="footer-socials">
                        <a href="https://www.instagram.com/YottaSrc/" class="footer-social-link" target="_blank" rel="noopener noreferrer" aria-label="Instagram"><i
                                class="fab fa-instagram"></i></a>
                        <a href="https://x.com/yottasrc" class="footer-social-link" target="_blank" rel="noopener noreferrer" aria-label="Twitter/X"><i
                                class="fab fa-x-twitter"></i></a>
                        <a href="https://www.trustpilot.com/review/yottasrc.com" class="footer-social-link"
                            target="_blank" rel="noopener noreferrer" aria-label="Trustpilot"><i class="fas fa-star"></i></a>
                    </div>
                </div>

                <div class="footer-column">
                    <h5>Hosting</h5>
                    <ul>
                        <li><a href="<?php echo e(SITE_URL); ?>/best-cpanel-hosting/">cPanel Hosting</a></li>
                        <li><a href="<?php echo e(SITE_URL); ?>/best-wordpress-hosting/">WordPress Hosting</a></li>
                        <li><a href="<?php echo e(SITE_URL); ?>/telegram-bot-hosting/">Telegram Bot</a></li>
                        <li><a href="<?php echo e(SITE_URL); ?>/cpanel-hosting-dmca-ignored/">DMCA Ignored</a></li>
                    </ul>
                </div>

                <div class="footer-column">
                    <h5>Servers</h5>
                    <ul>
                        <li><a href="<?php echo e(SITE_URL); ?>/vps/">Linux VPS</a></li>
                        <li><a href="<?php echo e(SITE_URL); ?>/vps/windows-servers/">Windows VPS</a></li>
                        <li><a href="<?php echo e(SITE_URL); ?>/cloud/">Cloud Servers</a></li>
                        <li><a href="<?php echo e(SITE_URL); ?>/dedicated-servers/">Dedicated</a></li>
                        <li><a href="<?php echo e(SITE_URL); ?>/hosting-reseller">Reseller</a></li>
                    </ul>
                </div>

                <div class="footer-column">
                    <h5>Company</h5>
                    <ul>
                        <li><a href="<?php echo e(SITE_URL); ?>/about">About Us</a></li>
                        <li><a href="<?php echo e(SITE_URL); ?>/contact-us/">Contact</a></li>
                        <li><a href="<?php echo e(SITE_URL); ?>/affiliate">Affiliate</a></li>
                        <li><a href="<?php echo e(SITE_URL); ?>/payment-methods/">Payments</a></li>
                        <li><a href="<?php echo e(SITE_URL); ?>/looking-glass/">Looking Glass</a></li>
                    </ul>
                </div>

                <div class="footer-column">
                    <h5>Legal</h5>
                    <ul>
                        <li><a href="<?php echo e(SITE_URL); ?>/terms-conditions">Terms</a></li>
                        <li><a href="<?php echo e(SITE_URL); ?>/privacy-policy">Privacy</a></li>
                        <li><a href="<?php echo e(SITE_URL); ?>/legal/refund-policy">Refund Policy</a></li>
                        <li><a href="<?php echo e(SITE_URL); ?>/data/resource-usage/">Fair Usage</a></li>
                        <li><a href="<?php echo e(SITE_URL); ?>/legal/report-abuse">Report Abuse</a></li>
                    </ul>
                </div>
            </div>

            <div class="footer-bottom">
                <div class="footer-copyright">
                    &copy; 2018 – <?php echo date('Y'); ?> <?php echo e(SITE_NAME); ?>. All rights reserved.
                </div>
                <div class="footer-payments">
                    <span>Visa</span>
                    <span>MasterCard</span>
                    <span>PayPal</span>
                    <span>Stripe</span>
                    <span>Bitcoin</span>
                    <span>USDT</span>
                    <span>Alipay</span>
                    <span>Coinbase</span>
                </div>
            </div>
        </div>
    </footer>

    <!-- Main JavaScript (deferred) -->
    <script src="<?php echo asset('js/main.js'); ?>" defer></script>
</body>

</html>
