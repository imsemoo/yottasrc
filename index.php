<?php
/**
 * YottaSrc — Homepage
 * ====================
 * Main entry point. All PHP includes are loaded from /includes/.
 * Page content is structured between header and footer includes.
 */

require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/topbar.php';
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

            <div class="services-grid">
                <!-- Column 1: Websites & Apps -->
                <div class="service-column">
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
                </div>

                <!-- Column 2: Servers & Cloud -->
                <div class="service-column">
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
                </div>

                <!-- Column 3: Business & Reseller -->
                <div class="service-column">
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
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ FEATURED PLANS ═══════════════ -->
    <section class="plans reveal">
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
            <div class="plans-grid active" data-tab="hosting">
                <div class="plan-card">
                    <div class="plan-name">Starter</div>
                    <div class="plan-target">For startups &amp; small projects</div>
                    <div class="plan-price">
                        <span class="currency">€</span><span class="amount">2.33</span><span
                            class="period">/month</span>
                        <span class="renewal">✓ Same price on renewal</span>
                    </div>
                    <div class="plan-specs">
                        <div class="plan-spec"><span class="spec-val">2.5</span><span class="spec-label">CPU
                                Cores</span></div>
                        <div class="plan-spec"><span class="spec-val">2.5 GB</span><span
                                class="spec-label">RAM</span></div>
                        <div class="plan-spec"><span class="spec-val">15 GB</span><span
                                class="spec-label">NVMe</span></div>
                        <div class="plan-spec"><span class="spec-val">15</span><span
                                class="spec-label">Domains</span></div>
                    </div>
                    <ul class="plan-features">
                        <li><i class="fas fa-check"></i> Free Domain &amp; SSL</li>
                        <li><i class="fas fa-check"></i> LiteSpeed + PHP 5.2–8.4</li>
                        <li><i class="fas fa-check"></i> Unlimited Bandwidth</li>
                        <li><i class="fas fa-check"></i> Daily JetBackup</li>
                        <li><i class="fas fa-check"></i> 20+ Locations</li>
                    </ul>
                    <button class="plan-cta" data-href="<?php echo e(SITE_URL); ?>/best-cpanel-hosting/">Choose Starter</button>
                </div>

                <div class="plan-card popular">
                    <div class="plan-badge">Most Popular</div>
                    <div class="plan-name">Premium</div>
                    <div class="plan-target">For growing businesses</div>
                    <div class="plan-price">
                        <span class="currency">€</span><span class="amount">3.39</span><span
                            class="period">/month</span>
                        <span class="renewal">✓ Same price on renewal</span>
                    </div>
                    <div class="plan-specs">
                        <div class="plan-spec"><span class="spec-val">3</span><span class="spec-label">CPU
                                Cores</span></div>
                        <div class="plan-spec"><span class="spec-val">3 GB</span><span class="spec-label">RAM</span>
                        </div>
                        <div class="plan-spec"><span class="spec-val">25 GB</span><span
                                class="spec-label">NVMe</span></div>
                        <div class="plan-spec"><span class="spec-val">25</span><span
                                class="spec-label">Domains</span></div>
                    </div>
                    <ul class="plan-features">
                        <li><i class="fas fa-check"></i> Free .com / .org / .net Domain</li>
                        <li><i class="fas fa-check"></i> LiteSpeed + PHP 5.2–8.4</li>
                        <li><i class="fas fa-check"></i> Unlimited Bandwidth</li>
                        <li><i class="fas fa-check"></i> Daily JetBackup</li>
                        <li><i class="fas fa-check"></i> 20+ Locations</li>
                    </ul>
                    <button class="plan-cta" data-href="<?php echo e(SITE_URL); ?>/best-cpanel-hosting/">Choose Premium</button>
                </div>

                <div class="plan-card">
                    <div class="plan-name">Business</div>
                    <div class="plan-target">For high-demand sites</div>
                    <div class="plan-price">
                        <span class="currency">€</span><span class="amount">7.42</span><span
                            class="period">/month</span>
                        <span class="renewal">✓ Same price on renewal</span>
                    </div>
                    <div class="plan-specs">
                        <div class="plan-spec"><span class="spec-val">4</span><span class="spec-label">CPU
                                Cores</span></div>
                        <div class="plan-spec"><span class="spec-val">4 GB</span><span class="spec-label">RAM</span>
                        </div>
                        <div class="plan-spec"><span class="spec-val">75 GB</span><span
                                class="spec-label">NVMe</span></div>
                        <div class="plan-spec"><span class="spec-val">100</span><span
                                class="spec-label">Domains</span></div>
                    </div>
                    <ul class="plan-features">
                        <li><i class="fas fa-check"></i> Free .com / .org / .net Domain</li>
                        <li><i class="fas fa-check"></i> LiteSpeed + PHP 5.2–8.4</li>
                        <li><i class="fas fa-check"></i> Unlimited Bandwidth</li>
                        <li><i class="fas fa-check"></i> Daily JetBackup</li>
                        <li><i class="fas fa-check"></i> 20+ Locations</li>
                    </ul>
                    <button class="plan-cta" data-href="<?php echo e(SITE_URL); ?>/best-cpanel-hosting/">Choose Business</button>
                </div>
            </div>

            <!-- VPS Plans -->
            <div class="plans-grid" data-tab="vps">
                <div class="plan-card">
                    <div class="plan-name">VPS YTA 1</div>
                    <div class="plan-target">Budget — great for starting</div>
                    <div class="plan-price">
                        <span class="currency">€</span><span class="amount">2.75</span><span
                            class="period">/month</span>
                        <span class="renewal">✓ Same price on renewal</span>
                    </div>
                    <div class="plan-specs">
                        <div class="plan-spec"><span class="spec-val">1</span><span class="spec-label">CPU
                                Core</span></div>
                        <div class="plan-spec"><span class="spec-val">2 GB</span><span
                                class="spec-label">DDR4/5</span></div>
                        <div class="plan-spec"><span class="spec-val">25 GB</span><span
                                class="spec-label">NVMe</span></div>
                        <div class="plan-spec"><span class="spec-val">1 Gbit</span><span
                                class="spec-label">Network</span></div>
                    </div>
                    <ul class="plan-features">
                        <li><i class="fas fa-check"></i> Full Root SSH Access</li>
                        <li><i class="fas fa-check"></i> KVM Virtualization</li>
                        <li><i class="fas fa-check"></i> IPv4 &amp; IPv6</li>
                        <li><i class="fas fa-check"></i> 25TB Bandwidth</li>
                        <li><i class="fas fa-check"></i> 6+ Locations</li>
                    </ul>
                    <button class="plan-cta" data-href="<?php echo e(SITE_URL); ?>/vps/">Choose VPS YTA 1</button>
                </div>

                <div class="plan-card popular">
                    <div class="plan-badge">Best Value</div>
                    <div class="plan-name">VPS YTA 2</div>
                    <div class="plan-target">Balanced performance</div>
                    <div class="plan-price">
                        <span class="currency">€</span><span class="amount">5.15</span><span
                            class="period">/month</span>
                        <span class="renewal">✓ Same price on renewal</span>
                    </div>
                    <div class="plan-specs">
                        <div class="plan-spec"><span class="spec-val">2</span><span class="spec-label">CPU
                                Cores</span></div>
                        <div class="plan-spec"><span class="spec-val">4 GB</span><span
                                class="spec-label">DDR4/5</span></div>
                        <div class="plan-spec"><span class="spec-val">50 GB</span><span
                                class="spec-label">NVMe</span></div>
                        <div class="plan-spec"><span class="spec-val">10 Gbit</span><span
                                class="spec-label">Network</span></div>
                    </div>
                    <ul class="plan-features">
                        <li><i class="fas fa-check"></i> Full Root SSH Access</li>
                        <li><i class="fas fa-check"></i> KVM Virtualization</li>
                        <li><i class="fas fa-check"></i> IPv4 &amp; IPv6</li>
                        <li><i class="fas fa-check"></i> 25TB Bandwidth</li>
                        <li><i class="fas fa-check"></i> 6+ Locations</li>
                    </ul>
                    <button class="plan-cta" data-href="<?php echo e(SITE_URL); ?>/vps/">Choose VPS YTA 2</button>
                </div>

                <div class="plan-card">
                    <div class="plan-name">VPS YTA 3</div>
                    <div class="plan-target">High-performance workloads</div>
                    <div class="plan-price">
                        <span class="currency">€</span><span class="amount">7.97</span><span
                            class="period">/month</span>
                        <span class="renewal">✓ Same price on renewal</span>
                    </div>
                    <div class="plan-specs">
                        <div class="plan-spec"><span class="spec-val">4</span><span class="spec-label">CPU
                                Cores</span></div>
                        <div class="plan-spec"><span class="spec-val">8 GB</span><span
                                class="spec-label">DDR4/5</span></div>
                        <div class="plan-spec"><span class="spec-val">100 GB</span><span
                                class="spec-label">NVMe</span></div>
                        <div class="plan-spec"><span class="spec-val">10 Gbit</span><span
                                class="spec-label">Network</span></div>
                    </div>
                    <ul class="plan-features">
                        <li><i class="fas fa-check"></i> Full Root SSH Access</li>
                        <li><i class="fas fa-check"></i> KVM Virtualization</li>
                        <li><i class="fas fa-check"></i> IPv4 &amp; IPv6</li>
                        <li><i class="fas fa-check"></i> 30TB Bandwidth</li>
                        <li><i class="fas fa-check"></i> 6+ Locations</li>
                    </ul>
                    <button class="plan-cta" data-href="<?php echo e(SITE_URL); ?>/vps/">Choose VPS YTA 3</button>
                </div>
            </div>

            <!-- Cloud Plans -->
            <div class="plans-grid" data-tab="cloud">
                <div class="plan-card">
                    <div class="plan-name">CLY1 x86</div>
                    <div class="plan-target">Testing &amp; development</div>
                    <div class="plan-price">
                        <span class="currency">€</span><span class="amount">1.99</span><span
                            class="period">/month</span>
                        <span class="renewal">€0.0034/hr — Hourly billing</span>
                    </div>
                    <div class="plan-specs">
                        <div class="plan-spec"><span class="spec-val">1</span><span class="spec-label">vCPU</span>
                        </div>
                        <div class="plan-spec"><span class="spec-val">2 GB</span><span class="spec-label">RAM</span>
                        </div>
                        <div class="plan-spec"><span class="spec-val">25 GB</span><span
                                class="spec-label">NVMe</span></div>
                        <div class="plan-spec"><span class="spec-val">1 Gbit</span><span
                                class="spec-label">Network</span></div>
                    </div>
                    <ul class="plan-features">
                        <li><i class="fas fa-check"></i> Hourly Billing — Pay as you go</li>
                        <li><i class="fas fa-check"></i> No ID Verification</li>
                        <li><i class="fas fa-check"></i> API Access</li>
                        <li><i class="fas fa-check"></i> 50+ Locations</li>
                        <li><i class="fas fa-check"></i> DDoS Protection</li>
                    </ul>
                    <button class="plan-cta" data-href="<?php echo e(CONSOLE_URL); ?>/cloud/">Deploy Now</button>
                </div>

                <div class="plan-card popular">
                    <div class="plan-badge">Popular</div>
                    <div class="plan-name">CLY2 x86</div>
                    <div class="plan-target">Production workloads</div>
                    <div class="plan-price">
                        <span class="currency">€</span><span class="amount">4.99</span><span
                            class="period">/month</span>
                        <span class="renewal">€0.0086/hr — Hourly billing</span>
                    </div>
                    <div class="plan-specs">
                        <div class="plan-spec"><span class="spec-val">2</span><span class="spec-label">vCPU</span>
                        </div>
                        <div class="plan-spec"><span class="spec-val">4 GB</span><span class="spec-label">RAM</span>
                        </div>
                        <div class="plan-spec"><span class="spec-val">50 GB</span><span
                                class="spec-label">NVMe</span></div>
                        <div class="plan-spec"><span class="spec-val">10 Gbit</span><span
                                class="spec-label">Network</span></div>
                    </div>
                    <ul class="plan-features">
                        <li><i class="fas fa-check"></i> Hourly Billing — Pay as you go</li>
                        <li><i class="fas fa-check"></i> No ID Verification</li>
                        <li><i class="fas fa-check"></i> API Access</li>
                        <li><i class="fas fa-check"></i> 50+ Locations</li>
                        <li><i class="fas fa-check"></i> DDoS Protection</li>
                    </ul>
                    <button class="plan-cta" data-href="<?php echo e(CONSOLE_URL); ?>/cloud/">Deploy Now</button>
                </div>

                <div class="plan-card">
                    <div class="plan-name">CLH5 x86</div>
                    <div class="plan-target">Scaling applications</div>
                    <div class="plan-price">
                        <span class="currency">€</span><span class="amount">4.99</span><span
                            class="period">/month</span>
                        <span class="renewal">€0.0097/hr — Hourly billing</span>
                    </div>
                    <div class="plan-specs">
                        <div class="plan-spec"><span class="spec-val">2</span><span class="spec-label">vCPU</span>
                        </div>
                        <div class="plan-spec"><span class="spec-val">4 GB</span><span class="spec-label">RAM</span>
                        </div>
                        <div class="plan-spec"><span class="spec-val">40 GB</span><span
                                class="spec-label">NVMe</span></div>
                        <div class="plan-spec"><span class="spec-val">10 Gbit</span><span
                                class="spec-label">Network</span></div>
                    </div>
                    <ul class="plan-features">
                        <li><i class="fas fa-check"></i> Hourly Billing — Pay as you go</li>
                        <li><i class="fas fa-check"></i> No ID Verification</li>
                        <li><i class="fas fa-check"></i> API Access</li>
                        <li><i class="fas fa-check"></i> 50+ Locations</li>
                        <li><i class="fas fa-check"></i> DDoS Protection</li>
                    </ul>
                    <button class="plan-cta" data-href="<?php echo e(CONSOLE_URL); ?>/cloud/">Deploy Now</button>
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

            <div class="tech-grid">
                <div class="tech-card">
                    <div class="tech-card-icon"><i class="fas fa-tachometer-alt"></i></div>
                    <h4>LiteSpeed</h4>
                    <p>Advanced caching for blazing-fast page loads</p>
                </div>
                <div class="tech-card">
                    <div class="tech-card-icon"><i class="fas fa-shield-alt"></i></div>
                    <h4>CloudLinux</h4>
                    <p>Account isolation for stability &amp; security</p>
                </div>
                <div class="tech-card">
                    <div class="tech-card-icon"><i class="fas fa-robot"></i></div>
                    <h4>Imunify360</h4>
                    <p>AI-powered malware detection &amp; firewall</p>
                </div>
                <div class="tech-card">
                    <div class="tech-card-icon"><i class="fas fa-history"></i></div>
                    <h4>JetBackup 5</h4>
                    <p>Daily automated backups, one-click restore</p>
                </div>
                <div class="tech-card">
                    <div class="tech-card-icon"><i class="fas fa-lock"></i></div>
                    <h4>Free SSL</h4>
                    <p>Unlimited SSL certificates, all domains</p>
                </div>
                <div class="tech-card">
                    <div class="tech-card-icon"><i class="fas fa-download"></i></div>
                    <h4>Softaculous</h4>
                    <p>One-click installer for 400+ apps</p>
                </div>
                <div class="tech-card">
                    <div class="tech-card-icon"><i class="fas fa-code"></i></div>
                    <h4>PHP 5.2 — 8.4</h4>
                    <p>Full version support with easy switching</p>
                </div>
                <div class="tech-card">
                    <div class="tech-card-icon"><i class="fas fa-database"></i></div>
                    <h4>MySQL 8 / MariaDB</h4>
                    <p>Optimized database engines</p>
                </div>
                <div class="tech-card">
                    <div class="tech-card-icon"><i class="fas fa-hdd"></i></div>
                    <h4>NVMe SSD</h4>
                    <p>Ultra-fast storage on all plans</p>
                </div>
                <div class="tech-card">
                    <div class="tech-card-icon"><i class="fas fa-layer-group"></i></div>
                    <h4>KVM</h4>
                    <p>Full virtualization for VPS &amp; Cloud</p>
                </div>
                <div class="tech-card">
                    <div class="tech-card-icon"><i class="fas fa-envelope-open-text"></i></div>
                    <h4>MailChannels</h4>
                    <p>Anti-spam email delivery integration</p>
                </div>
                <div class="tech-card">
                    <div class="tech-card-icon"><i class="fas fa-paint-brush"></i></div>
                    <h4>SitePad &amp; SiteJet</h4>
                    <p>Drag-and-drop website builders</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ GLOBAL INFRASTRUCTURE ═══════════════ -->
    <section class="global reveal">
        <div class="container">
            <div class="global-content">
                <div>
                    <div class="section-tag">Infrastructure</div>
                    <h2 class="global-info-title">50+ locations,<br>one platform</h2>
                    <p class="global-info-description">Own datacenter in Romania, with 6+ partner facilities globally. From Europe to Asia, North
                        America to Oceania — your content is always close to your users.</p>

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
                </div>

                <div class="global-map-visual">
                    <div class="map-container">
                        <!-- Simplified world map using SVG dots -->
                        <svg class="map-svg" viewBox="0 0 800 400" xmlns="http://www.w3.org/2000/svg">
                            <!-- Europe -->
                            <circle cx="380" cy="120" r="3" fill="currentColor" />
                            <circle cx="400" cy="110" r="3" fill="currentColor" />
                            <circle cx="420" cy="115" r="3" fill="currentColor" />
                            <circle cx="390" cy="135" r="3" fill="currentColor" />
                            <circle cx="410" cy="130" r="3" fill="currentColor" />
                            <circle cx="370" cy="145" r="3" fill="currentColor" />
                            <circle cx="395" cy="150" r="3" fill="currentColor" />
                            <circle cx="415" cy="140" r="3" fill="currentColor" />
                            <circle cx="430" cy="125" r="3" fill="currentColor" />
                            <circle cx="440" cy="135" r="3" fill="currentColor" />
                            <!-- Americas -->
                            <circle cx="180" cy="140" r="3" fill="currentColor" />
                            <circle cx="200" cy="150" r="3" fill="currentColor" />
                            <circle cx="170" cy="160" r="3" fill="currentColor" />
                            <circle cx="220" cy="240" r="3" fill="currentColor" />
                            <circle cx="230" cy="270" r="3" fill="currentColor" />
                            <circle cx="240" cy="290" r="3" fill="currentColor" />
                            <!-- Asia -->
                            <circle cx="520" cy="150" r="3" fill="currentColor" />
                            <circle cx="580" cy="170" r="3" fill="currentColor" />
                            <circle cx="620" cy="160" r="3" fill="currentColor" />
                            <circle cx="650" cy="180" r="3" fill="currentColor" />
                            <circle cx="600" cy="200" r="3" fill="currentColor" />
                            <!-- Africa -->
                            <circle cx="410" cy="230" r="3" fill="currentColor" />
                            <circle cx="420" cy="260" r="3" fill="currentColor" />
                            <circle cx="430" cy="290" r="3" fill="currentColor" />
                            <!-- Oceania -->
                            <circle cx="670" cy="300" r="3" fill="currentColor" />
                        </svg>

                        <!-- Active location dots -->
                        <div class="map-dot own-dc" style="left:49%;top:34%" title="Romania (Own DC)"></div>
                        <div class="map-dot" style="left:47%;top:28%" title="Germany"></div>
                        <div class="map-dot" style="left:45%;top:30%" title="Netherlands"></div>
                        <div class="map-dot" style="left:44%;top:35%" title="France"></div>
                        <div class="map-dot" style="left:50%;top:25%" title="Finland"></div>
                        <div class="map-dot" style="left:52%;top:37%" title="Turkey"></div>
                        <div class="map-dot" style="left:23%;top:33%" title="USA"></div>
                        <div class="map-dot" style="left:22%;top:28%" title="Canada"></div>
                        <div class="map-dot" style="left:68%;top:45%" title="India"></div>
                        <div class="map-dot" style="left:75%;top:42%" title="Singapore"></div>
                        <div class="map-dot" style="left:80%;top:38%" title="Japan"></div>
                        <div class="map-dot" style="left:82%;top:72%" title="Australia"></div>
                        <div class="map-dot" style="left:53%;top:60%" title="UAE"></div>
                        <div class="map-dot" style="left:30%;top:68%" title="Brazil"></div>
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

            <div class="testimonials-grid">
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

            <div class="trustpilot-link">
                <a href="https://www.trustpilot.com/review/yottasrc.com" class="trustpilot-badge" target="_blank" rel="noopener noreferrer">
                    <i class="fas fa-star"></i>
                    Rated Excellent on Trustpilot — Read all 144+ reviews
                    <i class="fas fa-external-link-alt trustpilot-external-icon"></i>
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

<?php require_once __DIR__ . '/includes/footer.php'; ?>
