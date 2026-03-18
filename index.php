<?php
/**
 * YottaSrc — Homepage
 * ====================
 * Main entry point. All PHP includes are loaded from /includes/.
 * Page content is structured between header and footer includes.
 */

require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/header.php';
?>

    <!-- ═══════════════ HERO ═══════════════ -->
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <div class="hero-badge">
                    <span class="badge-dot"></span>
                    <?php echo e(__('hero_badge_prefix')); ?> <strong><?php echo e(__('hero_badge_discount')); ?></strong> <?php echo e(__('hero_badge_suffix')); ?>
                </div>

                <h1>
                    <?php echo e(__('hero_title_line1')); ?><br>
                    <span class="highlight"><?php echo e(__('hero_title_line2')); ?></span><br>
                    <?php echo e(__('hero_title_line3')); ?>
                </h1>

                <p class="hero-description">
                    <?php echo e(__('hero_description')); ?>
                </p>

                <div class="hero-ctas">
                    <a href="<?php echo e(SITE_URL); ?>/best-cpanel-hosting/" class="btn-primary">
                        <?php echo e(__('hero_cta_primary')); ?> <i class="fas fa-arrow-right"></i>
                    </a>
                    <a href="<?php echo e(SITE_URL); ?>/contact-us/" class="btn-secondary">
                        <i class="fas fa-headset"></i> <?php echo e(__('hero_cta_secondary')); ?>
                    </a>
                </div>

                <div class="hero-trust">
                    <div class="trust-item">
                        <div class="trust-icon"><i class="fas fa-signal"></i></div>
                        <div class="trust-label">
                            <strong><?php echo e(__('trust_uptime')); ?></strong>
                            <span><?php echo e(__('trust_uptime_sub')); ?></span>
                        </div>
                    </div>
                    <div class="trust-item">
                        <div class="trust-icon"><i class="fas fa-bolt"></i></div>
                        <div class="trust-label">
                            <strong><?php echo e(__('trust_response')); ?></strong>
                            <span><?php echo e(__('trust_response_sub')); ?></span>
                        </div>
                    </div>
                    <div class="trust-item">
                        <div class="trust-icon"><i class="fas fa-shield-alt"></i></div>
                        <div class="trust-label">
                            <strong><?php echo e(__('trust_refund')); ?></strong>
                            <span><?php echo e(__('trust_refund_sub')); ?></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="hero-visual">
                <div class="hero-float-card card-uptime">
                    <div class="float-card-label">Uptime</div>
                    <div class="float-card-value">99.97%</div>
                </div>

                <div class="hero-terminal">
                    <div class="terminal-header">
                        <span class="terminal-dot red"></span>
                        <span class="terminal-dot yellow"></span>
                        <span class="terminal-dot green"></span>
                        <span class="terminal-title">yottasrc-deploy</span>
                    </div>
                    <div class="terminal-body">
                        <div><span class="comment">&#35; Deploy your site in minutes</span></div>
                        <div><span class="cmd">$</span> yotta <span class="flag">deploy</span> <span
                                class="val">--plan</span> starter</div>
                        <div><span class="comment">&#35; Selecting location...</span></div>
                        <div><span class="cmd">→</span> Region: <span class="val">eu-west-1</span> (Germany)</div>
                        <div><span class="cmd">→</span> Stack: LiteSpeed + PHP <span class="val">8.4</span></div>
                        <div><span class="cmd">→</span> SSL: <span class="success">✓ Auto-provisioned</span></div>
                        <div><span class="cmd">→</span> Backup: <span class="success">✓ Daily JetBackup</span></div>
                        <div><span class="success">✓ Site live</span> at your-domain.com<span
                                class="terminal-cursor"></span></div>
                    </div>
                </div>

                <div class="hero-float-card card-speed">
                    <div class="float-card-label">Network</div>
                    <div class="float-card-value blue">10 Gbit/s</div>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ PARTNERS ═══════════════ -->
    <section class="partners">
        <div class="container">
            <span class="partners-label">Datacenter Partners</span>
            <div class="partners-logos">
                <span class="partner-logo">Equinix</span>
                <span class="partner-logo">Hetzner</span>
                <span class="partner-logo">OVHcloud</span>
                <span class="partner-logo">Leaseweb</span>
                <span class="partner-logo">Ionos</span>
                <span class="partner-logo">Kamatera</span>
                <span class="partner-logo">Cogent</span>
                <span class="partner-logo">Myloc</span>
            </div>
        </div>
    </section>

    <!-- ═══════════════ SERVICES SELECTOR ═══════════════ -->
    <section class="services reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag">Choose Your Path</div>
                <h2>What are you looking for?</h2>
                <p>Whether you're launching your first website, managing servers, or building a hosting business —
                    we have the right solution.</p>
            </div>

            <div class="swiper services-swiper" id="servicesSwiper">
                <div class="swiper-wrapper">
                    <!-- Slide 1: Websites & Apps -->
                    <div class="swiper-slide"><div class="service-column">
                        <div class="service-icon"><i class="fas fa-globe"></i></div>
                        <h3>Websites &amp; Apps</h3>
                        <p class="service-desc">Managed hosting with cPanel, LiteSpeed, free SSL, and daily backups —
                            for any website.</p>
                        <div class="service-links">
                            <a href="<?php echo e(SITE_URL); ?>/best-cpanel-hosting/" class="service-link">
                                <div class="service-link-left">
                                    <i class="fas fa-server"></i>
                                    <span>cPanel Hosting</span>
                                </div>
                                <span class="service-link-price">€0.83/mo</span>
                            </a>
                            <a href="<?php echo e(SITE_URL); ?>/best-wordpress-hosting/" class="service-link">
                                <div class="service-link-left">
                                    <i class="fab fa-wordpress"></i>
                                    <span>WordPress Hosting</span>
                                </div>
                                <span class="service-link-price">€0.83/mo</span>
                            </a>
                            <a href="<?php echo e(SITE_URL); ?>/telegram-bot-hosting/" class="service-link">
                                <div class="service-link-left">
                                    <i class="fab fa-telegram"></i>
                                    <span>Telegram Bot Hosting</span>
                                </div>
                                <span class="service-link-price">€1.64/mo</span>
                            </a>
                            <a href="<?php echo e(CP_URL); ?>/cart.php?a=add&amp;domain=register" class="service-link">
                                <div class="service-link-left">
                                    <i class="fas fa-at"></i>
                                    <span>Domain Registration</span>
                                </div>
                                <span class="service-link-price">€1.99/yr</span>
                            </a>
                        </div>
                    </div></div>

                    <!-- Slide 2: Servers & Cloud -->
                    <div class="swiper-slide"><div class="service-column">
                        <div class="service-icon"><i class="fas fa-microchip"></i></div>
                        <h3>Servers &amp; Cloud</h3>
                        <p class="service-desc">Full root access, KVM virtualization, NVMe SSD, and 10 Gbit/s
                            connectivity in 50+ locations.</p>
                        <div class="service-links">
                            <a href="<?php echo e(SITE_URL); ?>/vps/" class="service-link">
                                <div class="service-link-left">
                                    <i class="fab fa-linux"></i>
                                    <span>Linux VPS</span>
                                </div>
                                <span class="service-link-price">€2.75/mo</span>
                            </a>
                            <a href="<?php echo e(SITE_URL); ?>/vps/windows-servers/" class="service-link">
                                <div class="service-link-left">
                                    <i class="fab fa-windows"></i>
                                    <span>Windows VPS</span>
                                </div>
                                <span class="service-link-price">€5.15/mo</span>
                            </a>
                            <a href="<?php echo e(SITE_URL); ?>/cloud/" class="service-link">
                                <div class="service-link-left">
                                    <i class="fas fa-cloud"></i>
                                    <span>Cloud Servers</span>
                                </div>
                                <span class="service-link-price">€0.003/hr</span>
                            </a>
                            <a href="<?php echo e(SITE_URL); ?>/dedicated-servers/" class="service-link">
                                <div class="service-link-left">
                                    <i class="fas fa-database"></i>
                                    <span>Dedicated Servers</span>
                                </div>
                                <span class="service-link-price">Custom</span>
                            </a>
                        </div>
                    </div></div>

                    <!-- Slide 3: Business & Reseller -->
                    <div class="swiper-slide"><div class="service-column">
                        <div class="service-icon"><i class="fas fa-briefcase"></i></div>
                        <h3>Business &amp; Reseller</h3>
                        <p class="service-desc">Start your own hosting business with white-label reseller plans,
                            wholesale pricing, and software licenses.</p>
                        <div class="service-links">
                            <a href="<?php echo e(SITE_URL); ?>/hosting-reseller" class="service-link">
                                <div class="service-link-left">
                                    <i class="fas fa-sitemap"></i>
                                    <span>cPanel Reseller</span>
                                </div>
                                <span class="service-link-price">€4.17/mo</span>
                            </a>
                            <a href="<?php echo e(SITE_URL); ?>/vps-reseller/" class="service-link">
                                <div class="service-link-left">
                                    <i class="fas fa-cubes"></i>
                                    <span>VPS Reseller</span>
                                </div>
                                <span class="service-link-price">Custom</span>
                            </a>
                            <a href="<?php echo e(SITE_URL); ?>/licenses/" class="service-link">
                                <div class="service-link-left">
                                    <i class="fas fa-key"></i>
                                    <span>Microsoft Keys</span>
                                </div>
                                <span class="service-link-price">€0.50</span>
                            </a>
                            <a href="<?php echo e(SITE_URL); ?>/affiliate" class="service-link">
                                <div class="service-link-left">
                                    <i class="fas fa-handshake"></i>
                                    <span>Affiliate Program</span>
                                </div>
                                <span class="service-link-price">Earn $$</span>
                            </a>
                        </div>
                    </div></div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ FEATURED PLANS ═══════════════ -->
    <section class="plans home-plans reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag">Pricing</div>
                <h2>Simple, transparent pricing</h2>
                <p>Same price on renewal. No surprise increases. 30-day money-back guarantee on all plans.</p>
            </div>

            <div class="plans-tabs">
                <button class="plan-tab active" data-target="hosting">Web Hosting</button>
                <button class="plan-tab" data-target="vps">VPS / VDS</button>
                <button class="plan-tab" data-target="cloud">Cloud</button>
            </div>

            <!-- Hosting Plans -->
            <div class="plans-panel active" data-tab="hosting">
                <div class="swiper plans-swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><div class="plan-card">
                            <div class="plan-name">Starter</div>
                            <div class="plan-target">For startups &amp; small projects</div>
                            <div class="plan-price">
                                <span class="currency">€</span><span class="amount">2.33</span><span class="period">/month</span>
                                <span class="renewal"><i class="fas fa-check"></i> Same price on renewal</span>
                            </div>
                            <div class="plan-specs">
                                <div class="plan-spec"><span class="spec-val">2.5</span><span class="spec-label">CPU Cores</span></div>
                                <div class="plan-spec"><span class="spec-val">2.5 GB</span><span class="spec-label">RAM</span></div>
                                <div class="plan-spec"><span class="spec-val">15 GB</span><span class="spec-label">NVMe</span></div>
                                <div class="plan-spec"><span class="spec-val">15</span><span class="spec-label">Domains</span></div>
                            </div>
                            <ul class="plan-features">
                                <li><i class="fas fa-check"></i> Free Domain &amp; SSL</li>
                                <li><i class="fas fa-check"></i> LiteSpeed + PHP 5.2–8.4</li>
                                <li><i class="fas fa-check"></i> Unlimited Bandwidth</li>
                                <li><i class="fas fa-check"></i> Daily JetBackup</li>
                                <li><i class="fas fa-check"></i> 20+ Locations</li>
                            </ul>
                            <button class="plan-cta" data-href="<?php echo e(SITE_URL); ?>/best-cpanel-hosting/">Choose Starter</button>
                        </div></div>

                        <div class="swiper-slide"><div class="plan-card popular">
                            <div class="plan-badge">Most Popular</div>
                            <div class="plan-name">Premium</div>
                            <div class="plan-target">For growing businesses</div>
                            <div class="plan-price">
                                <span class="currency">€</span><span class="amount">3.39</span><span class="period">/month</span>
                                <span class="renewal"><i class="fas fa-check"></i> Same price on renewal</span>
                            </div>
                            <div class="plan-specs">
                                <div class="plan-spec"><span class="spec-val">3</span><span class="spec-label">CPU Cores</span></div>
                                <div class="plan-spec"><span class="spec-val">3 GB</span><span class="spec-label">RAM</span></div>
                                <div class="plan-spec"><span class="spec-val">25 GB</span><span class="spec-label">NVMe</span></div>
                                <div class="plan-spec"><span class="spec-val">25</span><span class="spec-label">Domains</span></div>
                            </div>
                            <ul class="plan-features">
                                <li><i class="fas fa-check"></i> Free .com / .org / .net Domain</li>
                                <li><i class="fas fa-check"></i> LiteSpeed + PHP 5.2–8.4</li>
                                <li><i class="fas fa-check"></i> Unlimited Bandwidth</li>
                                <li><i class="fas fa-check"></i> Daily JetBackup</li>
                                <li><i class="fas fa-check"></i> 20+ Locations</li>
                            </ul>
                            <button class="plan-cta" data-href="<?php echo e(SITE_URL); ?>/best-cpanel-hosting/">Choose Premium</button>
                        </div></div>

                        <div class="swiper-slide"><div class="plan-card">
                            <div class="plan-name">Business</div>
                            <div class="plan-target">For high-demand sites</div>
                            <div class="plan-price">
                                <span class="currency">€</span><span class="amount">7.42</span><span class="period">/month</span>
                                <span class="renewal"><i class="fas fa-check"></i> Same price on renewal</span>
                            </div>
                            <div class="plan-specs">
                                <div class="plan-spec"><span class="spec-val">4</span><span class="spec-label">CPU Cores</span></div>
                                <div class="plan-spec"><span class="spec-val">4 GB</span><span class="spec-label">RAM</span></div>
                                <div class="plan-spec"><span class="spec-val">75 GB</span><span class="spec-label">NVMe</span></div>
                                <div class="plan-spec"><span class="spec-val">100</span><span class="spec-label">Domains</span></div>
                            </div>
                            <ul class="plan-features">
                                <li><i class="fas fa-check"></i> Free .com / .org / .net Domain</li>
                                <li><i class="fas fa-check"></i> LiteSpeed + PHP 5.2–8.4</li>
                                <li><i class="fas fa-check"></i> Unlimited Bandwidth</li>
                                <li><i class="fas fa-check"></i> Daily JetBackup</li>
                                <li><i class="fas fa-check"></i> 20+ Locations</li>
                            </ul>
                            <button class="plan-cta" data-href="<?php echo e(SITE_URL); ?>/best-cpanel-hosting/">Choose Business</button>
                        </div></div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>

            <!-- VPS Plans -->
            <div class="plans-panel" data-tab="vps">
                <div class="swiper plans-swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><div class="plan-card">
                            <div class="plan-name">VPS YTA 1</div>
                            <div class="plan-target">Budget — great for starting</div>
                            <div class="plan-price">
                                <span class="currency">€</span><span class="amount">2.75</span><span class="period">/month</span>
                                <span class="renewal"><i class="fas fa-check"></i> Same price on renewal</span>
                            </div>
                            <div class="plan-specs">
                                <div class="plan-spec"><span class="spec-val">1</span><span class="spec-label">CPU Core</span></div>
                                <div class="plan-spec"><span class="spec-val">2 GB</span><span class="spec-label">DDR4/5</span></div>
                                <div class="plan-spec"><span class="spec-val">25 GB</span><span class="spec-label">NVMe</span></div>
                                <div class="plan-spec"><span class="spec-val">1 Gbit</span><span class="spec-label">Network</span></div>
                            </div>
                            <ul class="plan-features">
                                <li><i class="fas fa-check"></i> Full Root SSH Access</li>
                                <li><i class="fas fa-check"></i> KVM Virtualization</li>
                                <li><i class="fas fa-check"></i> IPv4 &amp; IPv6</li>
                                <li><i class="fas fa-check"></i> 25TB Bandwidth</li>
                                <li><i class="fas fa-check"></i> 6+ Locations</li>
                            </ul>
                            <button class="plan-cta" data-href="<?php echo e(SITE_URL); ?>/vps/">Choose VPS YTA 1</button>
                        </div></div>

                        <div class="swiper-slide"><div class="plan-card popular">
                            <div class="plan-badge">Best Value</div>
                            <div class="plan-name">VPS YTA 2</div>
                            <div class="plan-target">Balanced performance</div>
                            <div class="plan-price">
                                <span class="currency">€</span><span class="amount">5.15</span><span class="period">/month</span>
                                <span class="renewal"><i class="fas fa-check"></i> Same price on renewal</span>
                            </div>
                            <div class="plan-specs">
                                <div class="plan-spec"><span class="spec-val">2</span><span class="spec-label">CPU Cores</span></div>
                                <div class="plan-spec"><span class="spec-val">4 GB</span><span class="spec-label">DDR4/5</span></div>
                                <div class="plan-spec"><span class="spec-val">50 GB</span><span class="spec-label">NVMe</span></div>
                                <div class="plan-spec"><span class="spec-val">10 Gbit</span><span class="spec-label">Network</span></div>
                            </div>
                            <ul class="plan-features">
                                <li><i class="fas fa-check"></i> Full Root SSH Access</li>
                                <li><i class="fas fa-check"></i> KVM Virtualization</li>
                                <li><i class="fas fa-check"></i> IPv4 &amp; IPv6</li>
                                <li><i class="fas fa-check"></i> 25TB Bandwidth</li>
                                <li><i class="fas fa-check"></i> 6+ Locations</li>
                            </ul>
                            <button class="plan-cta" data-href="<?php echo e(SITE_URL); ?>/vps/">Choose VPS YTA 2</button>
                        </div></div>

                        <div class="swiper-slide"><div class="plan-card">
                            <div class="plan-name">VPS YTA 3</div>
                            <div class="plan-target">High-performance workloads</div>
                            <div class="plan-price">
                                <span class="currency">€</span><span class="amount">7.97</span><span class="period">/month</span>
                                <span class="renewal"><i class="fas fa-check"></i> Same price on renewal</span>
                            </div>
                            <div class="plan-specs">
                                <div class="plan-spec"><span class="spec-val">4</span><span class="spec-label">CPU Cores</span></div>
                                <div class="plan-spec"><span class="spec-val">8 GB</span><span class="spec-label">DDR4/5</span></div>
                                <div class="plan-spec"><span class="spec-val">100 GB</span><span class="spec-label">NVMe</span></div>
                                <div class="plan-spec"><span class="spec-val">10 Gbit</span><span class="spec-label">Network</span></div>
                            </div>
                            <ul class="plan-features">
                                <li><i class="fas fa-check"></i> Full Root SSH Access</li>
                                <li><i class="fas fa-check"></i> KVM Virtualization</li>
                                <li><i class="fas fa-check"></i> IPv4 &amp; IPv6</li>
                                <li><i class="fas fa-check"></i> 30TB Bandwidth</li>
                                <li><i class="fas fa-check"></i> 6+ Locations</li>
                            </ul>
                            <button class="plan-cta" data-href="<?php echo e(SITE_URL); ?>/vps/">Choose VPS YTA 3</button>
                        </div></div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>

            <!-- Cloud Plans -->
            <div class="plans-panel" data-tab="cloud">
                <div class="swiper plans-swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><div class="plan-card">
                            <div class="plan-name">CLY1 x86</div>
                            <div class="plan-target">Testing &amp; development</div>
                            <div class="plan-price">
                                <span class="currency">€</span><span class="amount">1.99</span><span class="period">/month</span>
                                <span class="renewal">€0.0034/hr — Hourly billing</span>
                            </div>
                            <div class="plan-specs">
                                <div class="plan-spec"><span class="spec-val">1</span><span class="spec-label">vCPU</span></div>
                                <div class="plan-spec"><span class="spec-val">2 GB</span><span class="spec-label">RAM</span></div>
                                <div class="plan-spec"><span class="spec-val">25 GB</span><span class="spec-label">NVMe</span></div>
                                <div class="plan-spec"><span class="spec-val">1 Gbit</span><span class="spec-label">Network</span></div>
                            </div>
                            <ul class="plan-features">
                                <li><i class="fas fa-check"></i> Hourly Billing — Pay as you go</li>
                                <li><i class="fas fa-check"></i> No ID Verification</li>
                                <li><i class="fas fa-check"></i> API Access</li>
                                <li><i class="fas fa-check"></i> 50+ Locations</li>
                                <li><i class="fas fa-check"></i> DDoS Protection</li>
                            </ul>
                            <button class="plan-cta" data-href="<?php echo e(CONSOLE_URL); ?>/cloud/">Deploy Now</button>
                        </div></div>

                        <div class="swiper-slide"><div class="plan-card popular">
                            <div class="plan-badge">Popular</div>
                            <div class="plan-name">CLY2 x86</div>
                            <div class="plan-target">Production workloads</div>
                            <div class="plan-price">
                                <span class="currency">€</span><span class="amount">4.99</span><span class="period">/month</span>
                                <span class="renewal">€0.0086/hr — Hourly billing</span>
                            </div>
                            <div class="plan-specs">
                                <div class="plan-spec"><span class="spec-val">2</span><span class="spec-label">vCPU</span></div>
                                <div class="plan-spec"><span class="spec-val">4 GB</span><span class="spec-label">RAM</span></div>
                                <div class="plan-spec"><span class="spec-val">50 GB</span><span class="spec-label">NVMe</span></div>
                                <div class="plan-spec"><span class="spec-val">10 Gbit</span><span class="spec-label">Network</span></div>
                            </div>
                            <ul class="plan-features">
                                <li><i class="fas fa-check"></i> Hourly Billing — Pay as you go</li>
                                <li><i class="fas fa-check"></i> No ID Verification</li>
                                <li><i class="fas fa-check"></i> API Access</li>
                                <li><i class="fas fa-check"></i> 50+ Locations</li>
                                <li><i class="fas fa-check"></i> DDoS Protection</li>
                            </ul>
                            <button class="plan-cta" data-href="<?php echo e(CONSOLE_URL); ?>/cloud/">Deploy Now</button>
                        </div></div>

                        <div class="swiper-slide"><div class="plan-card">
                            <div class="plan-name">CLH5 x86</div>
                            <div class="plan-target">Scaling applications</div>
                            <div class="plan-price">
                                <span class="currency">€</span><span class="amount">4.99</span><span class="period">/month</span>
                                <span class="renewal">€0.0097/hr — Hourly billing</span>
                            </div>
                            <div class="plan-specs">
                                <div class="plan-spec"><span class="spec-val">2</span><span class="spec-label">vCPU</span></div>
                                <div class="plan-spec"><span class="spec-val">4 GB</span><span class="spec-label">RAM</span></div>
                                <div class="plan-spec"><span class="spec-val">40 GB</span><span class="spec-label">NVMe</span></div>
                                <div class="plan-spec"><span class="spec-val">10 Gbit</span><span class="spec-label">Network</span></div>
                            </div>
                            <ul class="plan-features">
                                <li><i class="fas fa-check"></i> Hourly Billing — Pay as you go</li>
                                <li><i class="fas fa-check"></i> No ID Verification</li>
                                <li><i class="fas fa-check"></i> API Access</li>
                                <li><i class="fas fa-check"></i> 50+ Locations</li>
                                <li><i class="fas fa-check"></i> DDoS Protection</li>
                            </ul>
                            <button class="plan-cta" data-href="<?php echo e(CONSOLE_URL); ?>/cloud/">Deploy Now</button>
                        </div></div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ TECH STACK ═══════════════ -->
    <section class="tech-stack reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag">Technology</div>
                <h2>Built for performance</h2>
                <p>Enterprise-grade infrastructure with every plan. No add-ons, no upsells — everything included.
                </p>
            </div>

            <div class="swiper tech-swiper" id="techSwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><div class="tech-card">
                        <div class="tech-card-icon"><i class="fas fa-tachometer-alt"></i></div>
                        <h4>LiteSpeed</h4>
                        <p>Advanced caching for blazing-fast page loads</p>
                    </div></div>
                    <div class="swiper-slide"><div class="tech-card">
                        <div class="tech-card-icon"><i class="fas fa-shield-alt"></i></div>
                        <h4>CloudLinux</h4>
                        <p>Account isolation for stability &amp; security</p>
                    </div></div>
                    <div class="swiper-slide"><div class="tech-card">
                        <div class="tech-card-icon"><i class="fas fa-robot"></i></div>
                        <h4>Imunify360</h4>
                        <p>AI-powered malware detection &amp; firewall</p>
                    </div></div>
                    <div class="swiper-slide"><div class="tech-card">
                        <div class="tech-card-icon"><i class="fas fa-history"></i></div>
                        <h4>JetBackup 5</h4>
                        <p>Daily automated backups, one-click restore</p>
                    </div></div>
                    <div class="swiper-slide"><div class="tech-card">
                        <div class="tech-card-icon"><i class="fas fa-lock"></i></div>
                        <h4>Free SSL</h4>
                        <p>Unlimited SSL certificates, all domains</p>
                    </div></div>
                    <div class="swiper-slide"><div class="tech-card">
                        <div class="tech-card-icon"><i class="fas fa-download"></i></div>
                        <h4>Softaculous</h4>
                        <p>One-click installer for 400+ apps</p>
                    </div></div>
                    <div class="swiper-slide"><div class="tech-card">
                        <div class="tech-card-icon"><i class="fas fa-code"></i></div>
                        <h4>PHP 5.2 — 8.4</h4>
                        <p>Full version support with easy switching</p>
                    </div></div>
                    <div class="swiper-slide"><div class="tech-card">
                        <div class="tech-card-icon"><i class="fas fa-database"></i></div>
                        <h4>MySQL 8 / MariaDB</h4>
                        <p>Optimized database engines</p>
                    </div></div>
                    <div class="swiper-slide"><div class="tech-card">
                        <div class="tech-card-icon"><i class="fas fa-hdd"></i></div>
                        <h4>NVMe SSD</h4>
                        <p>Ultra-fast storage on all plans</p>
                    </div></div>
                    <div class="swiper-slide"><div class="tech-card">
                        <div class="tech-card-icon"><i class="fas fa-layer-group"></i></div>
                        <h4>KVM</h4>
                        <p>Full virtualization for VPS &amp; Cloud</p>
                    </div></div>
                    <div class="swiper-slide"><div class="tech-card">
                        <div class="tech-card-icon"><i class="fas fa-envelope-open-text"></i></div>
                        <h4>MailChannels</h4>
                        <p>Anti-spam email delivery integration</p>
                    </div></div>
                    <div class="swiper-slide"><div class="tech-card">
                        <div class="tech-card-icon"><i class="fas fa-paint-brush"></i></div>
                        <h4>SitePad &amp; SiteJet</h4>
                        <p>Drag-and-drop website builders</p>
                    </div></div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ WHY YOTTASRC ═══════════════ -->
    <section class="why-us reveal">
        <div class="container">
            <div class="why-us-layout">
                <div class="why-us-intro">
                    <div class="section-tag">Advantages</div>
                    <h2 class="why-us-title">Why YottaSrc?</h2>
                    <p class="why-us-desc">We combine enterprise-grade infrastructure with genuinely responsive human support. Every plan includes the full stack — no upsells, no hidden fees, same price on renewal.</p>
                    <a href="<?php echo e(SITE_URL); ?>/about" class="btn-secondary why-us-cta">
                        Learn More <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
                <div class="why-us-grid">
                    <div class="why-us-card">
                        <div class="why-us-card-icon"><i class="fas fa-headset"></i></div>
                        <h4>24/7 Expert Support</h4>
                        <p>Dedicated team available around the clock. Average response time: 10 minutes.</p>
                    </div>
                    <div class="why-us-card">
                        <div class="why-us-card-icon icon-green"><i class="fas fa-tachometer-alt"></i></div>
                        <h4>High-Speed Performance</h4>
                        <p>LiteSpeed servers with NVMe SSD storage and up to 10 Gbit/s connectivity.</p>
                    </div>
                    <div class="why-us-card">
                        <div class="why-us-card-icon icon-purple"><i class="fas fa-shield-alt"></i></div>
                        <h4>Secure &amp; Reliable</h4>
                        <p>Imunify360 AI security, CloudLinux isolation, and 99.9% uptime guarantee.</p>
                    </div>
                    <div class="why-us-card">
                        <div class="why-us-card-icon icon-amber"><i class="fas fa-globe"></i></div>
                        <h4>Global Data Centers</h4>
                        <p>Own datacenter in Romania + 6 partner facilities across 50+ locations worldwide.</p>
                    </div>
                    <div class="why-us-card">
                        <div class="why-us-card-icon icon-green"><i class="fas fa-tags"></i></div>
                        <h4>Best Price-Quality Ratio</h4>
                        <p>Affordable plans with no compromise. Same price on renewal — no surprises.</p>
                    </div>
                    <div class="why-us-card">
                        <div class="why-us-card-icon icon-purple"><i class="fas fa-th-large"></i></div>
                        <h4>User-Friendly Dashboard</h4>
                        <p>Intuitive cPanel control panel included with all hosting plans.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ GLOBAL INFRASTRUCTURE ═══════════════ -->
    <section class="global reveal">
        <div class="container">
            <div class="global-layout">
                <div class="global-content">
                    <div class="section-tag">Infrastructure</div>
                    <h2 class="global-title">50+ locations, one platform</h2>
                    <p class="global-desc">Own datacenter in Romania, with 6+ partner facilities globally. From Europe to Asia, North America to Oceania — your content is always close to your users.</p>

                    <div class="global-stats">
                        <div class="global-stat">
                            <div class="stat-number">50+</div>
                            <div class="stat-label">Server Locations</div>
                        </div>
                        <div class="global-stat">
                            <div class="stat-number">100+</div>
                            <div class="stat-label">Gbit/s Capacity</div>
                        </div>
                        <div class="global-stat">
                            <div class="stat-number">8</div>
                            <div class="stat-label">DC Partners</div>
                        </div>
                        <div class="global-stat">
                            <div class="stat-number">6</div>
                            <div class="stat-label">Continents</div>
                        </div>
                    </div>

                    <a href="<?php echo e(SITE_URL); ?>/network" class="btn-secondary global-cta">
                        View Network <i class="fas fa-arrow-right"></i>
                    </a>
                </div>

                <div class="global-map-visual">
                    <div class="dc-map" id="dcMap">
                        <svg class="dc-map-svg" viewBox="0 0 1000 500" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg">
                            <defs>
                                <filter id="nodeGlow" x="-200%" y="-200%" width="500%" height="500%">
                                    <feGaussianBlur in="SourceGraphic" stdDeviation="5" result="blur"/>
                                    <feMerge><feMergeNode in="blur"/><feMergeNode in="SourceGraphic"/></feMerge>
                                </filter>
                                <filter id="hqGlow" x="-200%" y="-200%" width="500%" height="500%">
                                    <feGaussianBlur in="SourceGraphic" stdDeviation="9" result="blur"/>
                                    <feMerge><feMergeNode in="blur"/><feMergeNode in="SourceGraphic"/></feMerge>
                                </filter>
                            </defs>

                            <!-- Real world map continents -->
                            <?php include __DIR__ . '/includes/world-map-paths.php'; ?>

                            <!-- Subtle connection lines between key regions -->
                            <g class="dc-map-connections">
                                <!-- Romania HQ → Germany -->
                                <path class="dc-connection-glow" d="M572,127 Q548,105 524,111"/>
                                <path class="dc-connection" d="M572,127 Q548,105 524,111"/>
                                <!-- Romania HQ → USA (Virginia) -->
                                <path class="dc-connection-glow" d="M572,127 Q430,90 285,142"/>
                                <path class="dc-connection" d="M572,127 Q430,90 285,142"/>
                                <!-- Romania HQ → India -->
                                <path class="dc-connection-glow" d="M572,127 Q640,140 703,197"/>
                                <path class="dc-connection" d="M572,127 Q640,140 703,197"/>
                                <!-- Romania HQ → Japan -->
                                <path class="dc-connection-glow" d="M572,127 Q730,95 888,151"/>
                                <path class="dc-connection" d="M572,127 Q730,95 888,151"/>
                                <!-- USA → Brazil -->
                                <path class="dc-connection-glow" d="M285,142 Q310,230 371,315"/>
                                <path class="dc-connection" d="M285,142 Q310,230 371,315"/>
                                <!-- India → Singapore -->
                                <path class="dc-connection-glow" d="M703,197 Q750,215 788,246"/>
                                <path class="dc-connection" d="M703,197 Q750,215 788,246"/>
                            </g>

                            <!-- Datacenter markers -->
                            <g class="dc-map-nodes">
                                <!-- Romania (HQ) — Bucharest 26.1°E, 44.4°N -->
                                <g class="dc-node dc-node-hq" data-dc="Romania (HQ)">
                                    <circle cx="572" cy="127" r="18" class="dc-ring"/>
                                    <circle cx="572" cy="127" r="9" class="dc-glow" filter="url(#hqGlow)"/>
                                    <circle cx="572" cy="127" r="4.5" class="dc-dot"/>
                                </g>
                                <!-- Germany — Frankfurt 8.7°E, 50.1°N -->
                                <g class="dc-node" data-dc="Germany" style="animation-delay:.2s">
                                    <circle cx="524" cy="111" r="12" class="dc-ring" style="animation-delay:.2s"/>
                                    <circle cx="524" cy="111" r="5" class="dc-glow" filter="url(#nodeGlow)"/>
                                    <circle cx="524" cy="111" r="2.5" class="dc-dot"/>
                                </g>
                                <!-- Netherlands — Amsterdam 4.9°E, 52.4°N -->
                                <g class="dc-node" data-dc="Netherlands" style="animation-delay:.4s">
                                    <circle cx="514" cy="104" r="12" class="dc-ring" style="animation-delay:.4s"/>
                                    <circle cx="514" cy="104" r="5" class="dc-glow" filter="url(#nodeGlow)"/>
                                    <circle cx="514" cy="104" r="2.5" class="dc-dot"/>
                                </g>
                                <!-- France — Paris 2.3°E, 48.9°N -->
                                <g class="dc-node" data-dc="France" style="animation-delay:.6s">
                                    <circle cx="506" cy="114" r="12" class="dc-ring" style="animation-delay:.6s"/>
                                    <circle cx="506" cy="114" r="5" class="dc-glow" filter="url(#nodeGlow)"/>
                                    <circle cx="506" cy="114" r="2.5" class="dc-dot"/>
                                </g>
                                <!-- Finland — Helsinki 24.9°E, 60.2°N -->
                                <g class="dc-node" data-dc="Finland" style="animation-delay:.8s">
                                    <circle cx="569" cy="83" r="12" class="dc-ring" style="animation-delay:.8s"/>
                                    <circle cx="569" cy="83" r="5" class="dc-glow" filter="url(#nodeGlow)"/>
                                    <circle cx="569" cy="83" r="2.5" class="dc-dot"/>
                                </g>
                                <!-- Turkey — Istanbul 29.0°E, 41.0°N -->
                                <g class="dc-node" data-dc="Turkey" style="animation-delay:1s">
                                    <circle cx="581" cy="136" r="12" class="dc-ring" style="animation-delay:1s"/>
                                    <circle cx="581" cy="136" r="5" class="dc-glow" filter="url(#nodeGlow)"/>
                                    <circle cx="581" cy="136" r="2.5" class="dc-dot"/>
                                </g>
                                <!-- USA (Virginia) — Ashburn 77.5°W, 39.0°N -->
                                <g class="dc-node" data-dc="USA (Virginia)" style="animation-delay:1.2s">
                                    <circle cx="285" cy="142" r="12" class="dc-ring" style="animation-delay:1.2s"/>
                                    <circle cx="285" cy="142" r="5" class="dc-glow" filter="url(#nodeGlow)"/>
                                    <circle cx="285" cy="142" r="2.5" class="dc-dot"/>
                                </g>
                                <!-- Canada — Toronto 79.4°W, 43.7°N -->
                                <g class="dc-node" data-dc="Canada" style="animation-delay:1.4s">
                                    <circle cx="279" cy="129" r="12" class="dc-ring" style="animation-delay:1.4s"/>
                                    <circle cx="279" cy="129" r="5" class="dc-glow" filter="url(#nodeGlow)"/>
                                    <circle cx="279" cy="129" r="2.5" class="dc-dot"/>
                                </g>
                                <!-- India — Mumbai 72.9°E, 19.1°N -->
                                <g class="dc-node" data-dc="India" style="animation-delay:1.6s">
                                    <circle cx="703" cy="197" r="12" class="dc-ring" style="animation-delay:1.6s"/>
                                    <circle cx="703" cy="197" r="5" class="dc-glow" filter="url(#nodeGlow)"/>
                                    <circle cx="703" cy="197" r="2.5" class="dc-dot"/>
                                </g>
                                <!-- Singapore — 103.8°E, 1.35°N -->
                                <g class="dc-node" data-dc="Singapore" style="animation-delay:1.8s">
                                    <circle cx="788" cy="246" r="12" class="dc-ring" style="animation-delay:1.8s"/>
                                    <circle cx="788" cy="246" r="5" class="dc-glow" filter="url(#nodeGlow)"/>
                                    <circle cx="788" cy="246" r="2.5" class="dc-dot"/>
                                </g>
                                <!-- Japan — Tokyo 139.7°E, 35.7°N -->
                                <g class="dc-node" data-dc="Japan" style="animation-delay:2s">
                                    <circle cx="888" cy="151" r="12" class="dc-ring" style="animation-delay:2s"/>
                                    <circle cx="888" cy="151" r="5" class="dc-glow" filter="url(#nodeGlow)"/>
                                    <circle cx="888" cy="151" r="2.5" class="dc-dot"/>
                                </g>
                                <!-- Australia — Sydney 151.2°E, 33.9°S -->
                                <g class="dc-node" data-dc="Australia" style="animation-delay:2.2s">
                                    <circle cx="920" cy="344" r="12" class="dc-ring" style="animation-delay:2.2s"/>
                                    <circle cx="920" cy="344" r="5" class="dc-glow" filter="url(#nodeGlow)"/>
                                    <circle cx="920" cy="344" r="2.5" class="dc-dot"/>
                                </g>
                                <!-- UAE — Dubai 55.3°E, 25.3°N -->
                                <g class="dc-node" data-dc="UAE" style="animation-delay:2.4s">
                                    <circle cx="654" cy="180" r="12" class="dc-ring" style="animation-delay:2.4s"/>
                                    <circle cx="654" cy="180" r="5" class="dc-glow" filter="url(#nodeGlow)"/>
                                    <circle cx="654" cy="180" r="2.5" class="dc-dot"/>
                                </g>
                                <!-- Brazil — São Paulo 46.6°W, 23.5°S -->
                                <g class="dc-node" data-dc="Brazil" style="animation-delay:2.6s">
                                    <circle cx="371" cy="315" r="12" class="dc-ring" style="animation-delay:2.6s"/>
                                    <circle cx="371" cy="315" r="5" class="dc-glow" filter="url(#nodeGlow)"/>
                                    <circle cx="371" cy="315" r="2.5" class="dc-dot"/>
                                </g>
                            </g>
                        </svg>
                        <div class="dc-tooltip" id="dcTooltip"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ SOCIAL PROOF ═══════════════ -->
    <section class="social-proof reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag">Trusted Worldwide</div>
                <h2>Loved by 90,000+ clients</h2>
                <p>From solo developers to agencies — hear what our customers have to say.</p>
            </div>

            <div class="proof-stats">
                <div class="proof-stat">
                    <div class="stat-num">90K<span class="stat-suffix">+</span></div>
                    <div class="stat-text">Active Clients</div>
                </div>
                <div class="proof-stat">
                    <div class="stat-num">250K<span class="stat-suffix">+</span></div>
                    <div class="stat-text">Tickets Resolved</div>
                </div>
                <div class="proof-stat">
                    <div class="stat-num">2018</div>
                    <div class="stat-text">Founded</div>
                </div>
                <div class="proof-stat">
                    <div class="stat-num">30<span class="stat-suffix">+</span></div>
                    <div class="stat-text">Team Members</div>
                </div>
            </div>

            <div class="swiper testimonials-swiper" id="testimonialsSwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="testimonial-card">
                            <div class="testimonial-stars">★★★★★</div>
                            <p class="testimonial-text">"I started with a bill of around $1.9, and now my bills exceed $600
                                per year, and I'm incredibly satisfied. Every issue gets resolved promptly, thanks to the
                                excellent customer support."</p>
                            <div class="testimonial-author">
                                <div class="testimonial-avatar">A</div>
                                <div>
                                    <div class="testimonial-name">Adel</div>
                                    <div class="testimonial-origin">Saudi Arabia</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="testimonial-card">
                            <div class="testimonial-stars">★★★★★</div>
                            <p class="testimonial-text">"They just have the best support that I've ever seen. You never
                                expect to get a response instantly and that's just impressive! You can get servers anywhere
                                but you cannot find such good support."</p>
                            <div class="testimonial-author">
                                <div class="testimonial-avatar">M</div>
                                <div>
                                    <div class="testimonial-name">Mehrbod</div>
                                    <div class="testimonial-origin">Iran</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="testimonial-card">
                            <div class="testimonial-stars">★★★★★</div>
                            <p class="testimonial-text">"The service that Yotta has provided is incredible and the support
                                they have given me migrating my websites from other hosting providers has been amazing, in
                                just a few minutes!"</p>
                            <div class="testimonial-author">
                                <div class="testimonial-avatar">J</div>
                                <div>
                                    <div class="testimonial-name">Juan Carlos</div>
                                    <div class="testimonial-origin">United Kingdom</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="testimonial-card">
                            <div class="testimonial-stars">★★★★★</div>
                            <p class="testimonial-text">"I've been using YottaSrc for 3 years now. The uptime is flawless
                                and the speed is unmatched compared to my previous host. Migrating was painless —
                                their team handled everything."</p>
                            <div class="testimonial-author">
                                <div class="testimonial-avatar">D</div>
                                <div>
                                    <div class="testimonial-name">Dmitry</div>
                                    <div class="testimonial-origin">Germany</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="testimonial-card">
                            <div class="testimonial-stars">★★★★★</div>
                            <p class="testimonial-text">"As a reseller, I need reliable infrastructure. YottaSrc delivers
                                consistently. My clients are happy with the performance and I love the competitive
                                pricing on renewal — no surprises."</p>
                            <div class="testimonial-author">
                                <div class="testimonial-avatar">F</div>
                                <div>
                                    <div class="testimonial-name">Fatima</div>
                                    <div class="testimonial-origin">UAE</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="testimonial-card">
                            <div class="testimonial-stars">★★★★★</div>
                            <p class="testimonial-text">"Moved 12 WordPress sites to YottaSrc last year. Zero downtime
                                during migration and the LiteSpeed caching makes everything blazing fast. Their support
                                team is genuinely knowledgeable."</p>
                            <div class="testimonial-author">
                                <div class="testimonial-avatar">R</div>
                                <div>
                                    <div class="testimonial-name">Ricardo</div>
                                    <div class="testimonial-origin">Brazil</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="testimonial-card">
                            <div class="testimonial-stars">★★★★★</div>
                            <p class="testimonial-text">"The cPanel hosting is top notch. SSL, backups, email — everything
                                just works. I used to spend hours on server issues with other providers. With Yotta,
                                I focus on building my business."</p>
                            <div class="testimonial-author">
                                <div class="testimonial-avatar">S</div>
                                <div>
                                    <div class="testimonial-name">Sarah</div>
                                    <div class="testimonial-origin">Egypt</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="testimonial-card">
                            <div class="testimonial-stars">★★★★★</div>
                            <p class="testimonial-text">"Best VPS provider I've used. The setup was instant, and the
                                performance is rock solid. I run a Telegram bot and a Node.js app on the same VPS
                                with zero issues for over a year."</p>
                            <div class="testimonial-author">
                                <div class="testimonial-avatar">O</div>
                                <div>
                                    <div class="testimonial-name">Omar</div>
                                    <div class="testimonial-origin">Jordan</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>

            <div class="trustpilot-link">
                <a href="https://www.trustpilot.com/review/yottasrc.com" class="trustpilot-badge" target="_blank" rel="noopener noreferrer">
                    <i class="fas fa-star"></i>
                    Rated Excellent on Trustpilot — Read all 144+ reviews
                    <i class="fas fa-external-link-alt trustpilot-external-icon"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- ═══════════════ TUTORIALS / RESOURCES ═══════════════ -->
    <section class="tutorials reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag">Resources</div>
                <h2>Learn &amp; grow with YottaSrc</h2>
                <p>Step-by-step tutorials, video guides, and expert blog posts to help you manage your hosting.</p>
            </div>

            <div class="swiper tutorials-swiper" id="tutorialsSwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a href="https://wiki.yottasrc.com/how-to-install-wordpress-on-cpanel/" class="tutorial-card" target="_blank" rel="noopener noreferrer">
                            <div class="tutorial-badge">WordPress</div>
                            <h4>How to Install WordPress on cPanel</h4>
                            <p>Step-by-step guide to install WordPress on your cPanel hosting in minutes.</p>
                            <div class="tutorial-meta">
                                <span class="tutorial-views"><i class="fas fa-eye"></i> 8.1K+ views</span>
                                <span class="tutorial-arrow">Read More <i class="fas fa-arrow-right"></i></span>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="https://wiki.yottasrc.com/how-to-fix-500-internal-server-error-in-cpanel/" class="tutorial-card" target="_blank" rel="noopener noreferrer">
                            <div class="tutorial-badge badge-green">WHM/cPanel</div>
                            <h4>How to Fix 500 Internal Server Error</h4>
                            <p>Troubleshoot and resolve the most common server error in cPanel hosting.</p>
                            <div class="tutorial-meta">
                                <span class="tutorial-views"><i class="fas fa-eye"></i> 53.7K+ views</span>
                                <span class="tutorial-arrow">Read More <i class="fas fa-arrow-right"></i></span>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="https://wiki.yottasrc.com/how-to-optimize-and-repair-the-databases-via-phpmyadmin-in-cpanel/" class="tutorial-card" target="_blank" rel="noopener noreferrer">
                            <div class="tutorial-badge badge-purple">Databases</div>
                            <h4>Optimize &amp; Repair Databases via phpMyAdmin</h4>
                            <p>Learn to optimize and repair your MySQL databases for better performance.</p>
                            <div class="tutorial-meta">
                                <span class="tutorial-views"><i class="fas fa-eye"></i> 6.2K+ views</span>
                                <span class="tutorial-arrow">Read More <i class="fas fa-arrow-right"></i></span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>

            <div class="tutorials-browse">
                <a href="https://wiki.yottasrc.com/" class="trustpilot-badge" target="_blank" rel="noopener noreferrer">
                    <i class="fas fa-book"></i>
                    Browse all tutorials &amp; guides
                    <i class="fas fa-arrow-right" style="font-size:0.7rem;"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- ═══════════════ ONBOARDING ═══════════════ -->
    <section class="onboarding reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag">Get Started</div>
                <h2>Live in 5 minutes</h2>
                <p>Whether you're starting fresh or migrating — we make it effortless.</p>
            </div>

            <div class="onboarding-tracks">
                <div class="track">
                    <div class="track-icon"><i class="fas fa-rocket"></i></div>
                    <h3>New Website</h3>
                    <p>Launch your site in minutes</p>
                    <div class="track-steps">
                        <div class="track-step">
                            <div class="step-num">1</div>
                            <div class="step-content">
                                <h4>Create Account</h4>
                                <p>Sign up in 30 seconds — no credit card required for cloud</p>
                            </div>
                        </div>
                        <div class="track-step">
                            <div class="step-num">2</div>
                            <div class="step-content">
                                <h4>Select Plan &amp; Location</h4>
                                <p>Choose your plan and pick from 50+ server locations</p>
                            </div>
                        </div>
                        <div class="track-step">
                            <div class="step-num">3</div>
                            <div class="step-content">
                                <h4>Complete Payment</h4>
                                <p>Pay with card, PayPal, crypto, or 10+ other methods</p>
                            </div>
                        </div>
                        <div class="track-step">
                            <div class="step-num">4</div>
                            <div class="step-content">
                                <h4>Go Live</h4>
                                <p>Your site is active within 2–20 minutes</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="track">
                    <div class="track-icon"><i class="fas fa-truck"></i></div>
                    <h3>Free Migration</h3>
                    <p>We handle everything — zero downtime</p>
                    <div class="track-steps">
                        <div class="track-step">
                            <div class="step-num">1</div>
                            <div class="step-content">
                                <h4>Buy Your Plan</h4>
                                <p>Choose and purchase any hosting package</p>
                            </div>
                        </div>
                        <div class="track-step">
                            <div class="step-num">2</div>
                            <div class="step-content">
                                <h4>Open a Ticket</h4>
                                <p>Submit a migration request to our support team</p>
                            </div>
                        </div>
                        <div class="track-step">
                            <div class="step-num">3</div>
                            <div class="step-content">
                                <h4>We Migrate Everything</h4>
                                <p>Our engineers transfer files, databases, emails &amp; DNS</p>
                            </div>
                        </div>
                        <div class="track-step">
                            <div class="step-num">4</div>
                            <div class="step-content">
                                <h4>Verify &amp; Done</h4>
                                <p>Review your migrated site and you're all set</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ FAQ ═══════════════ -->
    <section class="faq-section reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag">FAQ</div>
                <h2>Frequently asked questions</h2>
                <p>Can't find your answer? Open a support ticket — we respond in under 10 minutes.</p>
            </div>

            <div class="faq-layout">
                <div class="faq-tabs">
                    <button class="faq-tab active" data-faq-target="faq-hosting"><i class="fas fa-server"></i> Hosting</button>
                    <button class="faq-tab" data-faq-target="faq-vps"><i class="fas fa-microchip"></i> VPS / VDS</button>
                </div>

                <div class="faq-panels">
                    <div class="faq-panel active" id="faq-hosting">
                        <div class="faq-item">
                            <button class="faq-question">
                                <span>How long does it take to activate my order?</span>
                                <i class="fas fa-chevron-down"></i>
                            </button>
                            <div class="faq-answer"><p>Orders are typically activated within 2 to 20 minutes. If your service is not activated within this time, please open a ticket.</p></div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question">
                                <span>Does hosting include a control panel?</span>
                                <i class="fas fa-chevron-down"></i>
                            </button>
                            <div class="faq-answer"><p>Yes, all our hosting plans include the latest version of cPanel, allowing you to manage your website, databases, emails, and more.</p></div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question">
                                <span>Do you offer a website builder tool?</span>
                                <i class="fas fa-chevron-down"></i>
                            </button>
                            <div class="faq-answer"><p>Yes, we provide SitePad and SiteJet — easy-to-use drag-and-drop website builders included in all hosting plans.</p></div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question">
                                <span>What are the requirements for hosting a WordPress website?</span>
                                <i class="fas fa-chevron-down"></i>
                            </button>
                            <div class="faq-answer"><p>PHP version 7.4 or greater, MySQL version 5.6 or greater or MariaDB version 10.1 or greater, and HTTPS support. All included with our plans.</p></div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question">
                                <span>Can I get a refund for unused services?</span>
                                <i class="fas fa-chevron-down"></i>
                            </button>
                            <div class="faq-answer"><p>Refunds are available under specific conditions outlined in our Refund Policy. We offer a 30-day money-back guarantee on hosting plans.</p></div>
                        </div>
                    </div>

                    <div class="faq-panel" id="faq-vps">
                        <div class="faq-item">
                            <button class="faq-question">
                                <span>What virtualization technology is used?</span>
                                <i class="fas fa-chevron-down"></i>
                            </button>
                            <div class="faq-answer"><p>We use KVM (Kernel-based Virtual Machine) for high performance and stability.</p></div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question">
                                <span>Do I get full root access?</span>
                                <i class="fas fa-chevron-down"></i>
                            </button>
                            <div class="faq-answer"><p>Yes, all VPS plans come with full root/admin SSH access. All ports are open except port 25.</p></div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question">
                                <span>Do VPS plans include DDoS protection?</span>
                                <i class="fas fa-chevron-down"></i>
                            </button>
                            <div class="faq-answer"><p>Yes, all VPS plans include basic DDoS protection, with advanced protection available as an add-on.</p></div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question">
                                <span>Do you support automatic payments?</span>
                                <i class="fas fa-chevron-down"></i>
                            </button>
                            <div class="faq-answer"><p>Yes, for automatic payments we recommend adding a credit card to your account.</p></div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question">
                                <span>Can I get a postponement of payment?</span>
                                <i class="fas fa-chevron-down"></i>
                            </button>
                            <div class="faq-answer"><p>Yes, you can request a payment extension by contacting Sales support before your due date.</p></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="faq-actions">
                <a href="<?php echo e(SITE_URL); ?>/contact-us/" class="btn-primary"><i class="fas fa-headset"></i> Open a Ticket</a>
                <a href="<?php echo e(SITE_URL); ?>/faq" class="btn-secondary">Browse All FAQ <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </section>

    <!-- ═══════════════ PROMOTIONS CTA ═══════════════ -->
    <section class="promo-cta reveal">
        <div class="container">
            <div class="promo-cta-inner">
                <div class="promo-cta-glow"></div>
                <div class="promo-cta-icon"><i class="fas fa-gift"></i></div>
                <h2>Get Exclusive Offers &amp; Promotions</h2>
                <p>Stay updated with the latest deals, discounts, and special promotions.</p>
                <a href="<?php echo e(SITE_URL); ?>/promotions" class="btn-primary">
                    Check Promotions <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
