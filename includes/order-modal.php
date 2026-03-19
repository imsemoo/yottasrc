<!-- ═══════════════ ORDER MODAL (Multi-Step Wizard) ═══════════════ -->
<div class="om-overlay" id="orderModal" aria-hidden="true">
    <div class="om" role="dialog" aria-modal="true" aria-labelledby="omTitle">

        <!-- ——— Header ——— -->
        <div class="om-header">
            <div class="om-header-left">
                <div class="om-header-icon"><i class="fas fa-shopping-cart"></i></div>
                <div class="om-header-text">
                    <h3 id="omTitle">Complete Your Order</h3>
                    <span class="om-plan-chip" id="omPlanChip"></span>
                </div>
            </div>
            <div class="om-header-right">
                <span class="om-secure-badge"><i class="fas fa-shield-alt"></i> Secure</span>
                <button class="om-close" id="omClose" aria-label="Close modal">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>

        <!-- ——— Step Progress Bar ——— -->
        <div class="om-progress">
            <div class="om-progress-track"><div class="om-progress-fill" id="omProgressFill"></div></div>
            <div class="om-steps-nav" id="omStepsNav">
                <button class="om-step-dot active" data-step="1" type="button">
                    <span class="om-dot-num"><span class="om-dot-digit">1</span><i class="fas fa-check om-dot-check"></i></span>
                    <span class="om-dot-label">Billing</span>
                </button>
                <span class="om-step-line"></span>
                <button class="om-step-dot" data-step="2" type="button">
                    <span class="om-dot-num"><span class="om-dot-digit">2</span><i class="fas fa-check om-dot-check"></i></span>
                    <span class="om-dot-label">Location</span>
                </button>
                <span class="om-step-line"></span>
                <button class="om-step-dot" data-step="3" type="button">
                    <span class="om-dot-num"><span class="om-dot-digit">3</span><i class="fas fa-check om-dot-check"></i></span>
                    <span class="om-dot-label">Domain</span>
                </button>
                <span class="om-step-line om-step-line-4" style="display:none;"></span>
                <button class="om-step-dot" data-step="4" type="button" style="display:none;">
                    <span class="om-dot-num"><span class="om-dot-digit">4</span><i class="fas fa-check om-dot-check"></i></span>
                    <span class="om-dot-label">Config</span>
                </button>
                <span class="om-step-line om-step-line-5"></span>
                <button class="om-step-dot" data-step="5" type="button">
                    <span class="om-dot-num"><span class="om-dot-digit">5</span><i class="fas fa-check om-dot-check"></i></span>
                    <span class="om-dot-label">Payment</span>
                </button>
                <span class="om-step-line"></span>
                <button class="om-step-dot" data-step="6" type="button">
                    <span class="om-dot-num"><span class="om-dot-digit">6</span><i class="fas fa-check om-dot-check"></i></span>
                    <span class="om-dot-label">Account</span>
                </button>
                <span class="om-step-line"></span>
                <button class="om-step-dot" data-step="7" type="button">
                    <span class="om-dot-num"><span class="om-dot-digit">7</span><i class="fas fa-check om-dot-check"></i></span>
                    <span class="om-dot-label">Review</span>
                </button>
            </div>
        </div>

        <!-- ——— Scrollable Body ——— -->
        <div class="om-body" id="omBody">

            <!-- ═══ Step 1: Billing Cycle ═══ -->
            <div class="om-panel active" data-panel="1">
                <div class="om-panel-head">
                    <h4><i class="fas fa-calendar-alt"></i> Select Billing Cycle</h4>
                    <p>Longer plans unlock bigger savings and a free domain.</p>
                </div>
                <div class="om-billing-grid" id="omBillingGrid">
                    <label class="om-billing-card" data-months="1">
                        <input type="radio" name="om-billing" value="1" checked>
                        <div class="om-billing-inner">
                            <span class="om-card-check"><i class="fas fa-check"></i></span>
                            <span class="om-billing-period">1 Month</span>
                            <span class="om-billing-price" data-price-el></span>
                            <span class="om-billing-permo" data-permo-el></span>
                        </div>
                    </label>
                    <label class="om-billing-card" data-months="3">
                        <input type="radio" name="om-billing" value="3">
                        <div class="om-billing-inner">
                            <span class="om-card-check"><i class="fas fa-check"></i></span>
                            <span class="om-billing-period">3 Months</span>
                            <span class="om-billing-price" data-price-el></span>
                            <span class="om-billing-permo" data-permo-el></span>
                            <span class="om-billing-save"><i class="fas fa-arrow-down"></i> Save 5%</span>
                        </div>
                    </label>
                    <label class="om-billing-card" data-months="6">
                        <input type="radio" name="om-billing" value="6">
                        <div class="om-billing-inner">
                            <span class="om-card-check"><i class="fas fa-check"></i></span>
                            <span class="om-billing-period">6 Months</span>
                            <span class="om-billing-price" data-price-el></span>
                            <span class="om-billing-permo" data-permo-el></span>
                            <span class="om-billing-save"><i class="fas fa-arrow-down"></i> Save 10%</span>
                        </div>
                    </label>
                    <label class="om-billing-card om-recommended" data-months="12">
                        <input type="radio" name="om-billing" value="12">
                        <div class="om-billing-inner">
                            <span class="om-card-check"><i class="fas fa-check"></i></span>
                            <span class="om-billing-badge"><i class="fas fa-star"></i> Most Popular</span>
                            <span class="om-billing-period">1 Year</span>
                            <span class="om-billing-price" data-price-el></span>
                            <span class="om-billing-permo" data-permo-el></span>
                            <span class="om-billing-save"><i class="fas fa-arrow-down"></i> Save 15%</span>
                            <span class="om-billing-free"><i class="fas fa-gift"></i> Free Domain Included</span>
                        </div>
                    </label>
                    <label class="om-billing-card" data-months="24">
                        <input type="radio" name="om-billing" value="24">
                        <div class="om-billing-inner">
                            <span class="om-card-check"><i class="fas fa-check"></i></span>
                            <span class="om-billing-period">2 Years</span>
                            <span class="om-billing-price" data-price-el></span>
                            <span class="om-billing-permo" data-permo-el></span>
                            <span class="om-billing-save"><i class="fas fa-arrow-down"></i> Save 25%</span>
                            <span class="om-billing-free"><i class="fas fa-gift"></i> Free Domain Included</span>
                        </div>
                    </label>
                    <label class="om-billing-card" data-months="36">
                        <input type="radio" name="om-billing" value="36">
                        <div class="om-billing-inner">
                            <span class="om-card-check"><i class="fas fa-check"></i></span>
                            <span class="om-billing-badge om-billing-badge-best"><i class="fas fa-fire"></i> Best Value</span>
                            <span class="om-billing-period">3 Years</span>
                            <span class="om-billing-price" data-price-el></span>
                            <span class="om-billing-permo" data-permo-el></span>
                            <span class="om-billing-save"><i class="fas fa-arrow-down"></i> Save 30%</span>
                            <span class="om-billing-free"><i class="fas fa-gift"></i> Free Domain Included</span>
                        </div>
                    </label>
                </div>
                <div class="om-info-strip">
                    <div class="om-info-item"><i class="fas fa-sync-alt"></i> Same price on renewal</div>
                    <div class="om-info-item"><i class="fas fa-undo"></i> 30-day money-back</div>
                    <div class="om-info-item"><i class="fas fa-lock"></i> Cancel anytime</div>
                </div>
            </div>

            <!-- ═══ Step 2: Server Location ═══ -->
            <div class="om-panel" data-panel="2">
                <div class="om-panel-head">
                    <h4><i class="fas fa-globe"></i> Select Server Location</h4>
                    <p>Choose the data center closest to your target audience for best performance.</p>
                </div>
                <div class="om-loc-tabs" id="omLocTabs">
                    <button class="om-loc-tab active" data-continent="europe" type="button"><i class="fas fa-globe-europe"></i> <span>Europe</span></button>
                    <button class="om-loc-tab" data-continent="north-america" type="button"><i class="fas fa-globe-americas"></i> <span>N. America</span></button>
                    <button class="om-loc-tab" data-continent="asia" type="button"><i class="fas fa-globe-asia"></i> <span>Asia</span></button>
                    <button class="om-loc-tab" data-continent="oceania" type="button"><i class="fas fa-water"></i> <span>Oceania</span></button>
                </div>
                <div class="om-loc-grid" id="omLocGrid">
                    <!-- Europe -->
                    <div class="om-loc-group active" data-continent="europe">
                        <label class="om-loc-card"><input type="radio" name="om-location" value="finland"><span class="om-card-check"><i class="fas fa-check"></i></span><span class="fi fi-fi"></span><span class="om-loc-name">Finland</span></label>
                        <label class="om-loc-card"><input type="radio" name="om-location" value="turkey"><span class="om-card-check"><i class="fas fa-check"></i></span><span class="fi fi-tr"></span><span class="om-loc-name">Turkey</span></label>
                        <label class="om-loc-card"><input type="radio" name="om-location" value="germany"><span class="om-card-check"><i class="fas fa-check"></i></span><span class="fi fi-de"></span><span class="om-loc-name">Germany</span></label>
                        <label class="om-loc-card"><input type="radio" name="om-location" value="france"><span class="om-card-check"><i class="fas fa-check"></i></span><span class="fi fi-fr"></span><span class="om-loc-name">France</span></label>
                        <label class="om-loc-card"><input type="radio" name="om-location" value="poland"><span class="om-card-check"><i class="fas fa-check"></i></span><span class="fi fi-pl"></span><span class="om-loc-name">Poland</span></label>
                        <label class="om-loc-card"><input type="radio" name="om-location" value="uk"><span class="om-card-check"><i class="fas fa-check"></i></span><span class="fi fi-gb"></span><span class="om-loc-name">United Kingdom</span></label>
                        <label class="om-loc-card"><input type="radio" name="om-location" value="netherlands"><span class="om-card-check"><i class="fas fa-check"></i></span><span class="fi fi-nl"></span><span class="om-loc-name">Netherlands</span></label>
                        <label class="om-loc-card"><input type="radio" name="om-location" value="austria"><span class="om-card-check"><i class="fas fa-check"></i></span><span class="fi fi-at"></span><span class="om-loc-name">Austria</span></label>
                    </div>
                    <!-- North America -->
                    <div class="om-loc-group" data-continent="north-america">
                        <label class="om-loc-card"><input type="radio" name="om-location" value="canada"><span class="om-card-check"><i class="fas fa-check"></i></span><span class="fi fi-ca"></span><span class="om-loc-name">Canada</span></label>
                        <label class="om-loc-card"><input type="radio" name="om-location" value="usa"><span class="om-card-check"><i class="fas fa-check"></i></span><span class="fi fi-us"></span><span class="om-loc-name">United States</span></label>
                    </div>
                    <!-- Asia -->
                    <div class="om-loc-group" data-continent="asia">
                        <label class="om-loc-card om-stock-out"><input type="radio" name="om-location" value="india" disabled><span class="fi fi-in"></span><span class="om-loc-name">India</span><span class="om-loc-stock">Out of Stock</span></label>
                        <label class="om-loc-card"><input type="radio" name="om-location" value="thailand"><span class="om-card-check"><i class="fas fa-check"></i></span><span class="fi fi-th"></span><span class="om-loc-name">Thailand</span></label>
                        <label class="om-loc-card"><input type="radio" name="om-location" value="singapore"><span class="om-card-check"><i class="fas fa-check"></i></span><span class="fi fi-sg"></span><span class="om-loc-name">Singapore</span></label>
                        <label class="om-loc-card"><input type="radio" name="om-location" value="hongkong"><span class="om-card-check"><i class="fas fa-check"></i></span><span class="fi fi-hk"></span><span class="om-loc-name">Hong Kong</span></label>
                        <label class="om-loc-card"><input type="radio" name="om-location" value="japan"><span class="om-card-check"><i class="fas fa-check"></i></span><span class="fi fi-jp"></span><span class="om-loc-name">Japan</span></label>
                    </div>
                    <!-- Oceania -->
                    <div class="om-loc-group" data-continent="oceania">
                        <label class="om-loc-card"><input type="radio" name="om-location" value="australia"><span class="om-card-check"><i class="fas fa-check"></i></span><span class="fi fi-au"></span><span class="om-loc-name">Australia</span></label>
                    </div>
                </div>
                <div class="om-info-strip">
                    <div class="om-info-item"><i class="fas fa-tachometer-alt"></i> 99.9% Uptime SLA</div>
                    <div class="om-info-item"><i class="fas fa-network-wired"></i> 1Gbps Network</div>
                    <div class="om-info-item"><i class="fas fa-headset"></i> 24/7 Support</div>
                </div>
            </div>

            <!-- ═══ Step 3: Domain ═══ -->
            <div class="om-panel om-panel-domain" data-panel="3">
                <div class="om-panel-head">
                    <h4><i class="fas fa-link"></i> Domain Configuration</h4>
                    <p>Register a new domain, transfer one, or use an existing domain.</p>
                </div>
                <div class="om-domain-tabs" id="omDomainTabs">
                    <button class="om-domain-tab active" data-dtab="register" type="button"><i class="fas fa-plus-circle"></i> Register New</button>
                    <button class="om-domain-tab" data-dtab="transfer" type="button"><i class="fas fa-exchange-alt"></i> Transfer</button>
                    <button class="om-domain-tab" data-dtab="existing" type="button"><i class="fas fa-edit"></i> Use Existing</button>
                </div>
                <div class="om-domain-panels">
                    <!-- Register -->
                    <div class="om-domain-panel active" data-dtab="register">
                        <div class="om-search-bar">
                            <div class="om-search-icon"><i class="fas fa-search"></i></div>
                            <input type="text" class="om-input" id="omDomainInput" placeholder="Search for your perfect domain..." autocomplete="off">
                            <button class="om-search-btn" id="omDomainSearch" type="button">Search</button>
                        </div>
                        <div class="om-domain-results" id="omDomainResults"></div>
                        <div class="om-domain-free">
                            <span class="om-badge-green"><i class="fas fa-gift"></i> Free with yearly plans</span>
                            <div class="om-domain-ext-grid">
                                <span class="om-ext-chip">.com</span>
                                <span class="om-ext-chip">.net</span>
                                <span class="om-ext-chip">.org</span>
                                <span class="om-ext-chip">.info</span>
                                <span class="om-ext-chip">.biz</span>
                                <span class="om-ext-chip">.xyz</span>
                                <span class="om-ext-chip">.online</span>
                                <span class="om-ext-chip">.site</span>
                                <span class="om-ext-chip">.store</span>
                                <span class="om-ext-chip">.tech</span>
                            </div>
                        </div>
                    </div>
                    <!-- Transfer -->
                    <div class="om-domain-panel" data-dtab="transfer">
                        <div class="om-search-bar">
                            <div class="om-search-icon"><i class="fas fa-exchange-alt"></i></div>
                            <input type="text" class="om-input" id="omTransferInput" placeholder="Enter domain you want to transfer..." autocomplete="off">
                            <button class="om-search-btn" id="omTransferSearch" type="button">Check</button>
                        </div>
                        <div class="om-domain-results" id="omTransferResults"></div>
                    </div>
                    <!-- Use Existing -->
                    <div class="om-domain-panel" data-dtab="existing">
                        <div class="om-search-bar">
                            <div class="om-search-icon"><i class="fas fa-globe"></i></div>
                            <input type="text" class="om-input" id="omExistingInput" placeholder="Enter your existing domain (e.g. example.com)" autocomplete="off">
                        </div>
                        <p class="om-hint"><i class="fas fa-info-circle"></i> You can update the domain later from your client area dashboard.</p>
                    </div>
                </div>
                <div class="om-info-strip">
                    <div class="om-info-item"><i class="fas fa-shield-alt"></i> Free SSL Certificate</div>
                    <div class="om-info-item"><i class="fas fa-lock"></i> WHOIS Privacy</div>
                </div>
            </div>

            <!-- ═══ Step 3 VPS: Operating System (hidden by default) ═══ -->
            <div class="om-panel om-panel-vps" data-panel="3-vps" style="display:none;">
                <div class="om-panel-head">
                    <h4><i class="fas fa-desktop"></i> Operating System</h4>
                    <p>Choose the operating system for your VPS server.</p>
                </div>
                <div class="om-vps-section">
                    <div class="om-os-grid" id="omOsGrid">
                        <label class="om-os-card">
                            <input type="radio" name="om-os" value="ubuntu-22" checked>
                            <div class="om-os-inner">
                                <span class="om-card-check"><i class="fas fa-check"></i></span>
                                <i class="fab fa-ubuntu om-os-icon"></i>
                                <span class="om-os-name">Ubuntu 22.04</span>
                                <span class="om-os-tag">LTS</span>
                            </div>
                        </label>
                        <label class="om-os-card">
                            <input type="radio" name="om-os" value="ubuntu-24">
                            <div class="om-os-inner">
                                <span class="om-card-check"><i class="fas fa-check"></i></span>
                                <i class="fab fa-ubuntu om-os-icon"></i>
                                <span class="om-os-name">Ubuntu 24.04</span>
                                <span class="om-os-tag">Latest</span>
                            </div>
                        </label>
                        <label class="om-os-card">
                            <input type="radio" name="om-os" value="debian-12">
                            <div class="om-os-inner">
                                <span class="om-card-check"><i class="fas fa-check"></i></span>
                                <i class="fab fa-linux om-os-icon"></i>
                                <span class="om-os-name">Debian 12</span>
                                <span class="om-os-tag">Stable</span>
                            </div>
                        </label>
                        <label class="om-os-card">
                            <input type="radio" name="om-os" value="centos-9">
                            <div class="om-os-inner">
                                <span class="om-card-check"><i class="fas fa-check"></i></span>
                                <i class="fab fa-centos om-os-icon"></i>
                                <span class="om-os-name">AlmaLinux 9</span>
                                <span class="om-os-tag">RHEL</span>
                            </div>
                        </label>
                        <label class="om-os-card">
                            <input type="radio" name="om-os" value="rocky-9">
                            <div class="om-os-inner">
                                <span class="om-card-check"><i class="fas fa-check"></i></span>
                                <i class="fab fa-linux om-os-icon"></i>
                                <span class="om-os-name">Rocky Linux 9</span>
                                <span class="om-os-tag">RHEL</span>
                            </div>
                        </label>
                        <label class="om-os-card">
                            <input type="radio" name="om-os" value="windows-2022">
                            <div class="om-os-inner">
                                <span class="om-card-check"><i class="fas fa-check"></i></span>
                                <i class="fab fa-windows om-os-icon"></i>
                                <span class="om-os-name">Windows Server</span>
                                <span class="om-os-tag om-os-tag-warn">+€5/mo</span>
                            </div>
                        </label>
                    </div>
                </div>
                <div class="om-info-strip">
                    <div class="om-info-item"><i class="fas fa-shield-alt"></i> Full Root Access</div>
                    <div class="om-info-item"><i class="fas fa-sync-alt"></i> Free OS Reinstall</div>
                    <div class="om-info-item"><i class="fas fa-network-wired"></i> Dedicated IP</div>
                </div>
            </div>

            <!-- ═══ Step 4 VPS: Other Configuration (hidden by default) ═══ -->
            <div class="om-panel om-panel-vps-config" data-panel="4" style="display:none;">
                <div class="om-panel-head">
                    <h4><i class="fas fa-cogs"></i> Select Other Configuration</h4>
                    <p>Configure additional IPs, IP management, and hostname for your VPS.</p>
                    <div class="om-config-badges" id="omConfigBadges">
                        <span class="om-config-badge" id="omBadgeAddIp"><i class="fas fa-circle"></i> No additional IPs</span>
                        <span class="om-config-badge" id="omBadgeChangeIp"><i class="fas fa-circle"></i> No need IP changes</span>
                    </div>
                </div>
                <div class="om-vps-config-grid">
                    <div class="om-vps-config-col">
                        <label class="om-section-label"><i class="fas fa-network-wired"></i> Additional IPs</label>
                        <p class="om-hint">You can have an additional IP for your VPS, if you want more IPs, please connect with us.</p>
                        <div class="om-radio-list">
                            <label class="om-radio-item">
                                <input type="radio" name="om-addip" value="0" data-label="No additional IPs" data-price="0" checked>
                                <span class="om-radio-mark"></span>
                                <span class="om-radio-text">No additional IPs</span>
                                <span class="om-radio-price">&euro;0.00 EUR</span>
                            </label>
                            <label class="om-radio-item">
                                <input type="radio" name="om-addip" value="1" data-label="1 IP" data-price="75">
                                <span class="om-radio-mark"></span>
                                <span class="om-radio-text">1 IP</span>
                                <span class="om-radio-price">&euro;75.00 EUR</span>
                            </label>
                            <label class="om-radio-item">
                                <input type="radio" name="om-addip" value="2" data-label="2 IPs" data-price="133">
                                <span class="om-radio-mark"></span>
                                <span class="om-radio-text">2 IPs</span>
                                <span class="om-radio-price">&euro;133.00 EUR</span>
                            </label>
                            <label class="om-radio-item">
                                <input type="radio" name="om-addip" value="3" data-label="3 IPs" data-price="195">
                                <span class="om-radio-mark"></span>
                                <span class="om-radio-text">3 IPs</span>
                                <span class="om-radio-price">&euro;195.00 EUR</span>
                            </label>
                        </div>
                    </div>
                    <div class="om-vps-config-col">
                        <label class="om-section-label"><i class="fas fa-exchange-alt"></i> Change/Management IPs</label>
                        <p class="om-hint">Control and manage IPs, including changing IPs if you don't want the current one or the current range.</p>
                        <div class="om-radio-list">
                            <label class="om-radio-item">
                                <input type="radio" name="om-changeip" value="0" data-label="No need IP changes" data-price="0" checked>
                                <span class="om-radio-mark"></span>
                                <span class="om-radio-text">No need IP changes</span>
                                <span class="om-radio-price">&euro;0.00 EUR</span>
                            </label>
                            <label class="om-radio-item">
                                <input type="radio" name="om-changeip" value="1" data-label="1 Change/month" data-price="35.64">
                                <span class="om-radio-mark"></span>
                                <span class="om-radio-text">1 Change Per month</span>
                                <span class="om-radio-price">&euro;35.64 EUR</span>
                            </label>
                            <label class="om-radio-item">
                                <input type="radio" name="om-changeip" value="3" data-label="3 Changes/month" data-price="99">
                                <span class="om-radio-mark"></span>
                                <span class="om-radio-text">3 Changes Per month</span>
                                <span class="om-radio-price">&euro;99.00 EUR</span>
                            </label>
                            <label class="om-radio-item">
                                <input type="radio" name="om-changeip" value="5" data-label="5 Changes/month" data-price="171">
                                <span class="om-radio-mark"></span>
                                <span class="om-radio-text">5 Changes Per month</span>
                                <span class="om-radio-price">&euro;171.00 EUR</span>
                            </label>
                            <label class="om-radio-item">
                                <input type="radio" name="om-changeip" value="10" data-label="10 Changes/month" data-price="324">
                                <span class="om-radio-mark"></span>
                                <span class="om-radio-text">10 Changes Per month</span>
                                <span class="om-radio-price">&euro;324.00 EUR</span>
                            </label>
                            <label class="om-radio-item">
                                <input type="radio" name="om-changeip" value="30" data-label="30 Changes/month" data-price="900">
                                <span class="om-radio-mark"></span>
                                <span class="om-radio-text">30 Changes Per month</span>
                                <span class="om-radio-price">&euro;900.00 EUR</span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="om-vps-section">
                    <label class="om-section-label"><i class="fas fa-server"></i> Hostname</label>
                    <div class="om-search-bar">
                        <div class="om-search-icon"><i class="fas fa-server"></i></div>
                        <input type="text" class="om-input" id="omVpsHostname" placeholder="server1.example.com" autocomplete="off">
                    </div>
                    <p class="om-hint"><i class="fas fa-info-circle"></i> You can change the hostname later from your control panel.</p>
                </div>
            </div>

            <!-- ═══ Step 3 Keys: Simple product (hidden by default) ═══ -->
            <div class="om-panel om-panel-keys" data-panel="3-keys" style="display:none;">
                <div class="om-panel-head">
                    <h4><i class="fas fa-key"></i> License Details</h4>
                    <p>Review your license key order details.</p>
                </div>
                <div class="om-keys-summary">
                    <div class="om-keys-product-card">
                        <div class="om-keys-icon"><i class="fab fa-microsoft"></i></div>
                        <div class="om-keys-info">
                            <strong id="omKeysProduct">Product Name</strong>
                            <span id="omKeysType">Retail Key — Instant Online Activation</span>
                        </div>
                    </div>
                    <div class="om-form-row">
                        <div class="om-form-group">
                            <label for="omKeysQty"><i class="fas fa-layer-group"></i> Quantity</label>
                            <input type="number" class="om-input" id="omKeysQty" value="1" min="1" max="100">
                        </div>
                        <div class="om-form-group">
                            <label><i class="fas fa-tag"></i> Unit Price</label>
                            <input type="text" class="om-input" id="omKeysPrice" value="—" readonly>
                        </div>
                    </div>
                    <p class="om-hint"><i class="fas fa-bolt"></i> Keys are delivered instantly after payment via email and your dashboard.</p>
                </div>
                <div class="om-info-strip">
                    <div class="om-info-item"><i class="fas fa-bolt"></i> Instant Delivery</div>
                    <div class="om-info-item"><i class="fas fa-certificate"></i> Genuine Key</div>
                    <div class="om-info-item"><i class="fas fa-sync-alt"></i> Free Replacement</div>
                </div>
            </div>

            <!-- ═══ Step 5: Payment Gateway ═══ -->
            <div class="om-panel" data-panel="5">
                <div class="om-panel-head">
                    <h4><i class="fas fa-credit-card"></i> Payment Method</h4>
                    <p>Choose your preferred payment gateway to complete the purchase.</p>
                </div>
                <div class="om-pay-grid" id="omPayGrid">
                    <label class="om-pay-card" data-fee-pct="0" data-fee-fix="0">
                        <input type="radio" name="om-payment" value="stripe">
                        <div class="om-pay-inner"><span class="om-card-check"><i class="fas fa-check"></i></span><i class="fab fa-cc-stripe om-pay-icon"></i><span class="om-pay-name">Stripe</span><span class="om-pay-tag om-pay-tag-green">No Fee</span></div>
                    </label>
                    <label class="om-pay-card" data-fee-pct="0" data-fee-fix="0">
                        <input type="radio" name="om-payment" value="paypal">
                        <div class="om-pay-inner"><span class="om-card-check"><i class="fas fa-check"></i></span><i class="fab fa-paypal om-pay-icon"></i><span class="om-pay-name">PayPal</span><span class="om-pay-tag om-pay-tag-green">No Fee</span></div>
                    </label>
                    <label class="om-pay-card" data-fee-pct="0" data-fee-fix="0">
                        <input type="radio" name="om-payment" value="revolut">
                        <div class="om-pay-inner"><span class="om-card-check"><i class="fas fa-check"></i></span><i class="fas fa-university om-pay-icon"></i><span class="om-pay-name">Revolut</span><span class="om-pay-tag om-pay-tag-green">No Fee</span></div>
                    </label>
                    <label class="om-pay-card" data-fee-pct="0" data-fee-fix="0">
                        <input type="radio" name="om-payment" value="alipay">
                        <div class="om-pay-inner"><span class="om-card-check"><i class="fas fa-check"></i></span><i class="fab fa-alipay om-pay-icon"></i><span class="om-pay-name">Alipay</span><span class="om-pay-tag om-pay-tag-green">No Fee</span></div>
                    </label>
                    <label class="om-pay-card" data-fee-pct="3" data-fee-fix="0">
                        <input type="radio" name="om-payment" value="binance">
                        <div class="om-pay-inner"><span class="om-card-check"><i class="fas fa-check"></i></span><i class="fab fa-bitcoin om-pay-icon"></i><span class="om-pay-name">Binance Pay</span><span class="om-pay-tag om-pay-tag-warn">+3% fee</span></div>
                    </label>
                    <label class="om-pay-card" data-fee-pct="3" data-fee-fix="0">
                        <input type="radio" name="om-payment" value="cryptomus">
                        <div class="om-pay-inner"><span class="om-card-check"><i class="fas fa-check"></i></span><i class="fas fa-coins om-pay-icon"></i><span class="om-pay-name">Cryptomus</span><span class="om-pay-tag om-pay-tag-warn">+3% fee</span></div>
                    </label>
                    <label class="om-pay-card" data-fee-pct="0" data-fee-fix="0">
                        <input type="radio" name="om-payment" value="plisio">
                        <div class="om-pay-inner"><span class="om-card-check"><i class="fas fa-check"></i></span><i class="fas fa-wallet om-pay-icon"></i><span class="om-pay-name">Plisio</span><span class="om-pay-tag om-pay-tag-green">No Fee</span></div>
                    </label>
                    <label class="om-pay-card" data-fee-pct="3" data-fee-fix="0">
                        <input type="radio" name="om-payment" value="russian-card">
                        <div class="om-pay-inner"><span class="om-card-check"><i class="fas fa-check"></i></span><i class="fas fa-credit-card om-pay-icon"></i><span class="om-pay-name">Russian Card</span><span class="om-pay-tag om-pay-tag-warn">+3% fee</span></div>
                    </label>
                    <label class="om-pay-card" data-fee-pct="0" data-fee-fix="0">
                        <input type="radio" name="om-payment" value="balance">
                        <div class="om-pay-inner"><span class="om-card-check"><i class="fas fa-check"></i></span><i class="fas fa-piggy-bank om-pay-icon"></i><span class="om-pay-name">Credit Balance</span><span class="om-pay-tag om-pay-tag-green">No Fee</span></div>
                    </label>
                </div>
                <div class="om-info-strip">
                    <div class="om-info-item"><i class="fas fa-lock"></i> 256-bit SSL Encryption</div>
                    <div class="om-info-item"><i class="fas fa-shield-alt"></i> PCI DSS Compliant</div>
                    <div class="om-info-item"><i class="fas fa-undo"></i> Refund Protected</div>
                </div>
            </div>

            <!-- ═══ Step 6: Account ═══ -->
            <div class="om-panel" data-panel="6">
                <div class="om-panel-head">
                    <h4><i class="fas fa-user-circle"></i> Account Details</h4>
                    <p>Sign in to your existing account or create a new one.</p>
                </div>
                <div class="om-account-tabs" id="omAccountTabs">
                    <button class="om-account-tab active" data-atab="login" type="button"><i class="fas fa-sign-in-alt"></i> Existing Customer</button>
                    <button class="om-account-tab" data-atab="register" type="button"><i class="fas fa-user-plus"></i> New Customer</button>
                </div>
                <div class="om-account-panels">
                    <!-- Login -->
                    <div class="om-account-panel active" data-atab="login">
                        <div class="om-form-row">
                            <div class="om-form-group">
                                <label for="omLoginEmail"><i class="fas fa-envelope"></i> Email Address</label>
                                <input type="email" class="om-input" id="omLoginEmail" placeholder="you@example.com" autocomplete="email">
                            </div>
                            <div class="om-form-group">
                                <label for="omLoginPass"><i class="fas fa-key"></i> Password</label>
                                <div class="om-input-wrap">
                                    <input type="password" class="om-input" id="omLoginPass" placeholder="Enter your password" autocomplete="current-password">
                                    <button type="button" class="om-eye-toggle" aria-label="Toggle password"><i class="fas fa-eye"></i></button>
                                </div>
                            </div>
                        </div>
                        <button class="om-btn om-btn-primary om-btn-block" id="omLoginBtn" type="button"><i class="fas fa-sign-in-alt"></i> Sign In</button>
                        <div class="om-divider"><span>or continue with</span></div>
                        <button class="om-btn om-btn-google om-btn-block" id="omGoogleLogin" type="button">
                            <svg width="18" height="18" viewBox="0 0 24 24"><path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92a5.06 5.06 0 0 1-2.2 3.32v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.1z" fill="#4285F4"/><path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/><path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/><path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/></svg>
                            Continue with Google
                        </button>
                    </div>

                    <!-- Register -->
                    <div class="om-account-panel" data-atab="register">
                        <div class="om-form-row">
                            <div class="om-form-group">
                                <label for="omRegFirst"><i class="fas fa-user"></i> First Name</label>
                                <input type="text" class="om-input" id="omRegFirst" placeholder="John" autocomplete="given-name">
                            </div>
                            <div class="om-form-group">
                                <label for="omRegLast"><i class="fas fa-user"></i> Last Name</label>
                                <input type="text" class="om-input" id="omRegLast" placeholder="Doe" autocomplete="family-name">
                            </div>
                        </div>
                        <div class="om-form-row">
                            <div class="om-form-group">
                                <label for="omRegEmail"><i class="fas fa-envelope"></i> Email Address</label>
                                <input type="email" class="om-input" id="omRegEmail" placeholder="you@example.com" autocomplete="email">
                            </div>
                            <div class="om-form-group">
                                <label for="omRegPass"><i class="fas fa-key"></i> Password</label>
                                <div class="om-input-wrap">
                                    <input type="password" class="om-input" id="omRegPass" placeholder="Min. 8 characters" autocomplete="new-password">
                                    <button type="button" class="om-eye-toggle" aria-label="Toggle password"><i class="fas fa-eye"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="om-form-row">
                            <div class="om-form-group">
                                <label for="omRegCountrySearch"><i class="fas fa-flag"></i> Country</label>
                                <div class="om-searchable-select" id="omCountryWrap">
                                    <input type="text" class="om-input" id="omRegCountrySearch" placeholder="Search country..." autocomplete="off">
                                    <input type="hidden" id="omRegCountry">
                                    <div class="om-select-dropdown" id="omCountryDropdown"></div>
                                </div>
                            </div>
                            <div class="om-form-group">
                                <label for="omRegPhone"><i class="fas fa-phone"></i> Phone</label>
                                <div class="om-phone-wrap">
                                    <select class="om-input om-phone-code" id="omRegPhoneCode">
                                        <option value="+1">🇺🇸 +1</option>
                                        <option value="+44">🇬🇧 +44</option>
                                        <option value="+49">🇩🇪 +49</option>
                                        <option value="+33">🇫🇷 +33</option>
                                        <option value="+40">🇷🇴 +40</option>
                                        <option value="+90">🇹🇷 +90</option>
                                        <option value="+91">🇮🇳 +91</option>
                                        <option value="+86">🇨🇳 +86</option>
                                        <option value="+81">🇯🇵 +81</option>
                                        <option value="+82">🇰🇷 +82</option>
                                        <option value="+61">🇦🇺 +61</option>
                                        <option value="+55">🇧🇷 +55</option>
                                        <option value="+7">🇷🇺 +7</option>
                                        <option value="+966">🇸🇦 +966</option>
                                        <option value="+971">🇦🇪 +971</option>
                                        <option value="+20">🇪🇬 +20</option>
                                        <option value="+234">🇳🇬 +234</option>
                                        <option value="+31">🇳🇱 +31</option>
                                        <option value="+48">🇵🇱 +48</option>
                                        <option value="+46">🇸🇪 +46</option>
                                    </select>
                                    <input type="tel" class="om-input om-phone-number" id="omRegPhone" placeholder="234 567 890" autocomplete="tel">
                                </div>
                            </div>
                        </div>
                        <div class="om-form-row">
                            <div class="om-form-group">
                                <label for="omRegCity"><i class="fas fa-city"></i> City</label>
                                <input type="text" class="om-input" id="omRegCity" placeholder="New York" autocomplete="address-level2">
                            </div>
                            <div class="om-form-group">
                                <label for="omRegState"><i class="fas fa-map"></i> State / Region</label>
                                <input type="text" class="om-input" id="omRegState" placeholder="NY" autocomplete="address-level1">
                            </div>
                        </div>
                        <div class="om-form-row">
                            <div class="om-form-group">
                                <label for="omRegAddress"><i class="fas fa-map-marker-alt"></i> Street Address</label>
                                <input type="text" class="om-input" id="omRegAddress" placeholder="123 Main St" autocomplete="street-address">
                            </div>
                            <div class="om-form-group">
                                <label for="omRegPostcode"><i class="fas fa-mail-bulk"></i> Postcode</label>
                                <input type="text" class="om-input" id="omRegPostcode" placeholder="10001" autocomplete="postal-code">
                            </div>
                        </div>
                        <button class="om-btn om-btn-primary om-btn-block" id="omRegisterBtn" type="button"><i class="fas fa-user-plus"></i> Create Account &amp; Continue</button>
                        <div class="om-divider"><span>or continue with</span></div>
                        <button class="om-btn om-btn-google om-btn-block" id="omGoogleRegister" type="button">
                            <svg width="18" height="18" viewBox="0 0 24 24"><path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92a5.06 5.06 0 0 1-2.2 3.32v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.1z" fill="#4285F4"/><path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/><path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/><path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/></svg>
                            Sign up with Google
                        </button>
                    </div>
                </div>
            </div>

            <!-- ═══ Step 7: Order Summary ═══ -->
            <div class="om-panel" data-panel="7">
                <div class="om-panel-head">
                    <h4><i class="fas fa-receipt"></i> Order Summary</h4>
                    <p>Review your selections before placing the order.</p>
                </div>
                <div class="om-summary-card">
                    <div class="om-sum-row"><span><i class="fas fa-box"></i> Product</span><strong id="omSumProduct">—</strong></div>
                    <div class="om-sum-row"><span><i class="fas fa-calendar"></i> Billing Cycle</span><strong id="omSumBilling">—</strong></div>
                    <div class="om-sum-row"><span><i class="fas fa-map-marker-alt"></i> Server Location</span><strong id="omSumLocation">—</strong></div>
                    <div class="om-sum-row"><span><i class="fas fa-globe"></i> Domain</span><strong id="omSumDomain">—</strong></div>
                    <div class="om-sum-row"><span><i class="fas fa-credit-card"></i> Payment Method</span><strong id="omSumPayment">—</strong></div>
                    <div class="om-sum-sep"></div>
                    <div class="om-sum-row"><span>Subtotal</span><strong id="omSumSubtotal">—</strong></div>
                    <div class="om-sum-row om-sum-fee-row" id="omSumFeeRow"><span>Gateway Fee</span><strong id="omSumFee">—</strong></div>
                    <div class="om-sum-row om-sum-promo-row" id="omSumPromoRow"><span>Promo Discount</span><strong id="omSumPromo" class="om-green">—</strong></div>
                    <div class="om-sum-sep"></div>
                    <div class="om-sum-row om-sum-total"><span>Total Due Today</span><strong id="omSumTotal">—</strong></div>
                </div>
                <div class="om-promo-section">
                    <label class="om-promo-label"><i class="fas fa-tag"></i> Have a promo code?</label>
                    <div class="om-search-bar">
                        <div class="om-search-icon"><i class="fas fa-tag"></i></div>
                        <input type="text" class="om-input" id="omPromoInput" placeholder="Enter your code..." autocomplete="off">
                        <button class="om-search-btn" id="omPromoApply" type="button">Apply</button>
                    </div>
                    <div id="omPromoResult"></div>
                </div>
                <div class="om-terms">
                    <label class="om-check">
                        <input type="checkbox" id="omTerms">
                        <span>I agree to the <a href="<?php echo e(SITE_URL); ?>/terms/" target="_blank" rel="noopener">Terms of Service</a> and <a href="<?php echo e(SITE_URL); ?>/privacy-policy/" target="_blank" rel="noopener">Privacy Policy</a></span>
                    </label>
                    <label class="om-check">
                        <input type="checkbox" id="omRefund">
                        <span>I have read the <a href="<?php echo e(SITE_URL); ?>/legal/refund-policy" target="_blank" rel="noopener">Refund Policy</a></span>
                    </label>
                </div>
            </div>

        </div><!-- /.om-body -->

        <!-- ——— Footer Navigation ——— -->
        <div class="om-footer">
            <button class="om-btn om-btn-back" id="omBack" type="button">
                <i class="fas fa-arrow-left"></i> Back
            </button>
            <div class="om-footer-center">
                <div class="om-step-counter">Step <span id="omStepNum">1</span> of <span id="omTotalSteps">7</span></div>
                <div class="om-trust-icons">
                    <i class="fas fa-lock" title="SSL Secured"></i>
                    <i class="fas fa-shield-alt" title="Protected"></i>
                </div>
            </div>
            <button class="om-btn om-btn-next" id="omNext" type="button">
                Continue <i class="fas fa-arrow-right"></i>
            </button>
        </div>

    </div><!-- /.om -->
</div><!-- /.om-overlay -->
