<?php
    // Set $compare_type before including this file: 'cloud', 'hosting', or 'reseller'
    if (!isset($compare_type)) $compare_type = 'cloud';
?>
    <!-- ═══════════════ COMPETITORS COMPARISON ═══════════════ -->
    <section class="section-compare reveal">
        <div class="container">
            <div class="section-header">
                <div class="section-tag">Comparison</div>
                <?php if ($compare_type === 'hosting'): ?>
                <h2>Why YottaSrc beats the competition</h2>
                <p>See how our shared hosting compares to other providers on performance, value, and support.</p>
                <?php elseif ($compare_type === 'reseller'): ?>
                <h2>Why YottaSrc beats the competition</h2>
                <p>See how our reseller hosting compares to other providers on branding, tools, and flexibility.</p>
                <?php else: ?>
                <h2>Why YottaSrc beats the competition</h2>
                <p>See how our cloud instances compare to other providers on pricing, regions, and flexibility.</p>
                <?php endif; ?>
            </div>

            <div class="compare-table-wrap">
                <table class="compare-table">
                    <thead>
                        <tr>
                            <th>Feature</th>
                            <?php if ($compare_type === 'hosting'): ?>
                            <th class="compare-highlight">YottaSrc Hosting</th>
                            <th>Other Hosting Providers</th>
                            <?php elseif ($compare_type === 'reseller'): ?>
                            <th class="compare-highlight">YottaSrc Reseller</th>
                            <th>Other Reseller Providers</th>
                            <?php else: ?>
                            <th class="compare-highlight">YottaSrc Cloud</th>
                            <th>Other Cloud Providers</th>
                            <?php endif; ?>
                        </tr>
                    </thead>
                    <tbody>

                    <?php if ($compare_type === 'hosting'): ?>
                        <tr>
                            <td><i class="fas fa-coins"></i> Starting Price</td>
                            <td class="compare-highlight"><i class="fas fa-check-circle"></i> From €1.99/mo</td>
                            <td><i class="fas fa-minus-circle"></i> From $2.95/mo+</td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-server"></i> Control Panel</td>
                            <td class="compare-highlight"><i class="fas fa-check-circle"></i> cPanel included free</td>
                            <td><i class="fas fa-minus-circle"></i> Proprietary or extra cost</td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-tachometer-alt"></i> Web Server</td>
                            <td class="compare-highlight"><i class="fas fa-check-circle"></i> LiteSpeed + LSCache</td>
                            <td><i class="fas fa-minus-circle"></i> Apache / Nginx only</td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-shield-alt"></i> Security</td>
                            <td class="compare-highlight"><i class="fas fa-check-circle"></i> Imunify360 + free SSL</td>
                            <td><i class="fas fa-minus-circle"></i> Basic firewall, SSL extra</td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-globe"></i> Server Locations</td>
                            <td class="compare-highlight"><i class="fas fa-check-circle"></i> 20+ locations worldwide</td>
                            <td><i class="fas fa-minus-circle"></i> 1–5 locations typically</td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-hdd"></i> Storage</td>
                            <td class="compare-highlight"><i class="fas fa-check-circle"></i> NVMe SSD on all plans</td>
                            <td><i class="fas fa-minus-circle"></i> SATA or mixed storage</td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-envelope"></i> Email Deliverability</td>
                            <td class="compare-highlight"><i class="fas fa-check-circle"></i> MailChannels relay included</td>
                            <td><i class="fas fa-times-circle"></i> Shared IPs, often blacklisted</td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-sync-alt"></i> Backups</td>
                            <td class="compare-highlight"><i class="fas fa-check-circle"></i> Daily automated + JetBackup</td>
                            <td><i class="fas fa-minus-circle"></i> Weekly or manual only</td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-credit-card"></i> Crypto Payments</td>
                            <td class="compare-highlight"><i class="fas fa-check-circle"></i> BTC, USDT, TRX &amp; more</td>
                            <td><i class="fas fa-times-circle"></i> Cards/PayPal only</td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-headset"></i> Support</td>
                            <td class="compare-highlight"><i class="fas fa-check-circle"></i> &lt;10 min response, 24/7</td>
                            <td><i class="fas fa-minus-circle"></i> Ticket-based, hours to days</td>
                        </tr>

                    <?php elseif ($compare_type === 'reseller'): ?>
                        <tr>
                            <td><i class="fas fa-coins"></i> Starting Price</td>
                            <td class="compare-highlight"><i class="fas fa-check-circle"></i> From €9.99/mo</td>
                            <td><i class="fas fa-minus-circle"></i> From $19.95/mo+</td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-palette"></i> White-Label Branding</td>
                            <td class="compare-highlight"><i class="fas fa-check-circle"></i> 100% white-label, zero trace</td>
                            <td><i class="fas fa-minus-circle"></i> Partial branding or extra cost</td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-server"></i> WHM / cPanel</td>
                            <td class="compare-highlight"><i class="fas fa-check-circle"></i> Full WHM + unlimited cPanel</td>
                            <td><i class="fas fa-minus-circle"></i> Limited accounts or extra fees</td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-tachometer-alt"></i> Web Server</td>
                            <td class="compare-highlight"><i class="fas fa-check-circle"></i> LiteSpeed Enterprise</td>
                            <td><i class="fas fa-minus-circle"></i> Apache only</td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-globe"></i> Server Locations</td>
                            <td class="compare-highlight"><i class="fas fa-check-circle"></i> 20+ locations worldwide</td>
                            <td><i class="fas fa-minus-circle"></i> 1–3 locations</td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-dns"></i> Custom Nameservers</td>
                            <td class="compare-highlight"><i class="fas fa-check-circle"></i> Free private nameservers</td>
                            <td><i class="fas fa-minus-circle"></i> Extra charge or unavailable</td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-envelope"></i> Email Deliverability</td>
                            <td class="compare-highlight"><i class="fas fa-check-circle"></i> MailChannels relay included</td>
                            <td><i class="fas fa-times-circle"></i> Shared IPs, often blacklisted</td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-shield-alt"></i> Security</td>
                            <td class="compare-highlight"><i class="fas fa-check-circle"></i> Imunify360 + CloudLinux</td>
                            <td><i class="fas fa-minus-circle"></i> Basic firewall only</td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-credit-card"></i> Crypto Payments</td>
                            <td class="compare-highlight"><i class="fas fa-check-circle"></i> BTC, USDT, TRX &amp; more</td>
                            <td><i class="fas fa-times-circle"></i> Cards/PayPal only</td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-headset"></i> Support</td>
                            <td class="compare-highlight"><i class="fas fa-check-circle"></i> &lt;10 min response, 24/7</td>
                            <td><i class="fas fa-minus-circle"></i> Ticket-based, hours to days</td>
                        </tr>

                    <?php else: /* cloud */ ?>
                        <tr>
                            <td><i class="fas fa-coins"></i> Starting Price</td>
                            <td class="compare-highlight"><i class="fas fa-check-circle"></i> From €0.003/hr</td>
                            <td><i class="fas fa-minus-circle"></i> From $0.007/hr+</td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-clock"></i> Billing Model</td>
                            <td class="compare-highlight"><i class="fas fa-check-circle"></i> True hourly, no minimum</td>
                            <td><i class="fas fa-minus-circle"></i> Hourly with hidden bandwidth fees</td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-globe"></i> Regions</td>
                            <td class="compare-highlight"><i class="fas fa-check-circle"></i> 50+ regions, 6 continents</td>
                            <td><i class="fas fa-minus-circle"></i> 10–30 regions typically</td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-rocket"></i> Deploy Speed</td>
                            <td class="compare-highlight"><i class="fas fa-check-circle"></i> Under 30 seconds</td>
                            <td><i class="fas fa-minus-circle"></i> 30s – 2 minutes</td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-id-card"></i> Signup Process</td>
                            <td class="compare-highlight"><i class="fas fa-check-circle"></i> Email only — no ID verification</td>
                            <td><i class="fas fa-times-circle"></i> ID / credit card required</td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-wallet"></i> Minimum Deposit</td>
                            <td class="compare-highlight"><i class="fas fa-check-circle"></i> €5 to start</td>
                            <td><i class="fas fa-minus-circle"></i> $10–$50 or credit card hold</td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-code"></i> API Access</td>
                            <td class="compare-highlight"><i class="fas fa-check-circle"></i> Full REST API included</td>
                            <td><i class="fas fa-check-circle"></i> Available on most providers</td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-expand-arrows-alt"></i> Instant Scaling</td>
                            <td class="compare-highlight"><i class="fas fa-check-circle"></i> Resize CPU/RAM live</td>
                            <td><i class="fas fa-minus-circle"></i> Requires reboot or new instance</td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-credit-card"></i> Crypto Payments</td>
                            <td class="compare-highlight"><i class="fas fa-check-circle"></i> BTC, USDT, TRX &amp; more</td>
                            <td><i class="fas fa-times-circle"></i> Cards/PayPal only</td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-headset"></i> Support</td>
                            <td class="compare-highlight"><i class="fas fa-check-circle"></i> &lt;10 min response, 24/7</td>
                            <td><i class="fas fa-minus-circle"></i> Ticket-based, hours to days</td>
                        </tr>
                    <?php endif; ?>

                    </tbody>
                </table>
            </div>
        </div>
    </section>
