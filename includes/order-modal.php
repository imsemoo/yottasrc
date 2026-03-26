<!-- ═══════════════ ORDER MODAL (Multi-Step Wizard) ═══════════════ -->
<div class="om-overlay" id="orderModal" aria-hidden="true">
    <div class="om" role="dialog" aria-modal="true" aria-labelledby="omTitle">

        <!-- ——— Header ——— -->
        <div class="om-header">
            <div class="om-header-left">
                <div class="om-header-icon"><i class="fas fa-shopping-cart"></i></div>
                <div class="om-header-text">
                    <h3 id="omTitle"><?php echo e(__('om_title')); ?></h3>
                    <span class="om-plan-chip" id="omPlanChip"></span>
                </div>
            </div>
            <div class="om-header-right">
                <span class="om-secure-badge"><i class="fas fa-shield-alt"></i> <?php echo e(__('om_secure')); ?></span>
                <button class="om-close" id="omClose" aria-label="<?php echo e(__('om_close_modal')); ?>">
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
                    <span class="om-dot-label"><?php echo e(__('om_step_billing')); ?></span>
                </button>
                <span class="om-step-line"></span>
                <button class="om-step-dot" data-step="2" type="button">
                    <span class="om-dot-num"><span class="om-dot-digit">2</span><i class="fas fa-check om-dot-check"></i></span>
                    <span class="om-dot-label"><?php echo e(__('om_step_location')); ?></span>
                </button>
                <span class="om-step-line"></span>
                <button class="om-step-dot" data-step="3" type="button">
                    <span class="om-dot-num"><span class="om-dot-digit">3</span><i class="fas fa-check om-dot-check"></i></span>
                    <span class="om-dot-label"><?php echo e(__('om_step_domain')); ?></span>
                </button>
                <span class="om-step-line om-step-line-4" style="display:none;"></span>
                <button class="om-step-dot" data-step="4" type="button" style="display:none;">
                    <span class="om-dot-num"><span class="om-dot-digit">4</span><i class="fas fa-check om-dot-check"></i></span>
                    <span class="om-dot-label"><?php echo e(__('om_step_config')); ?></span>
                </button>
                <span class="om-step-line om-step-line-5"></span>
                <button class="om-step-dot" data-step="5" type="button">
                    <span class="om-dot-num"><span class="om-dot-digit">5</span><i class="fas fa-check om-dot-check"></i></span>
                    <span class="om-dot-label"><?php echo e(__('om_step_payment')); ?></span>
                </button>
                <span class="om-step-line"></span>
                <button class="om-step-dot" data-step="6" type="button">
                    <span class="om-dot-num"><span class="om-dot-digit">6</span><i class="fas fa-check om-dot-check"></i></span>
                    <span class="om-dot-label"><?php echo e(__('om_step_account')); ?></span>
                </button>
                <span class="om-step-line"></span>
                <button class="om-step-dot" data-step="7" type="button">
                    <span class="om-dot-num"><span class="om-dot-digit">7</span><i class="fas fa-check om-dot-check"></i></span>
                    <span class="om-dot-label"><?php echo e(__('om_step_review')); ?></span>
                </button>
            </div>
        </div>

        <!-- ——— Scrollable Body ——— -->
        <div class="om-body" id="omBody">

            <!-- ═══ Step 1: Billing Cycle ═══ -->
            <div class="om-panel active" data-panel="1">
                <div class="om-panel-head">
                    <h4><i class="fas fa-calendar-alt"></i> <?php echo e(__('om_billing_heading')); ?></h4>
                    <p><?php echo e(__('om_billing_desc')); ?></p>
                </div>
                <div class="om-billing-grid" id="omBillingGrid">
                    <label class="om-billing-card" data-months="1">
                        <input type="radio" name="om-billing" value="1" checked>
                        <div class="om-billing-inner">
                            <span class="om-card-check"><i class="fas fa-check"></i></span>
                            <span class="om-billing-period"><?php echo e(__('om_period_1mo')); ?></span>
                            <span class="om-billing-price" data-price-el></span>
                            <span class="om-billing-permo" data-permo-el></span>
                        </div>
                    </label>
                    <label class="om-billing-card" data-months="3">
                        <input type="radio" name="om-billing" value="3">
                        <div class="om-billing-inner">
                            <span class="om-card-check"><i class="fas fa-check"></i></span>
                            <span class="om-billing-period"><?php echo e(__('om_period_3mo')); ?></span>
                            <span class="om-billing-price" data-price-el></span>
                            <span class="om-billing-permo" data-permo-el></span>
                            <span class="om-billing-save"><i class="fas fa-arrow-down"></i> <?php echo e(__('om_save_5')); ?></span>
                        </div>
                    </label>
                    <label class="om-billing-card" data-months="6">
                        <input type="radio" name="om-billing" value="6">
                        <div class="om-billing-inner">
                            <span class="om-card-check"><i class="fas fa-check"></i></span>
                            <span class="om-billing-period"><?php echo e(__('om_period_6mo')); ?></span>
                            <span class="om-billing-price" data-price-el></span>
                            <span class="om-billing-permo" data-permo-el></span>
                            <span class="om-billing-save"><i class="fas fa-arrow-down"></i> <?php echo e(__('om_save_10')); ?></span>
                        </div>
                    </label>
                    <label class="om-billing-card om-recommended" data-months="12">
                        <input type="radio" name="om-billing" value="12">
                        <div class="om-billing-inner">
                            <span class="om-card-check"><i class="fas fa-check"></i></span>
                            <span class="om-billing-badge"><i class="fas fa-star"></i> <?php echo e(__('om_most_popular')); ?></span>
                            <span class="om-billing-period"><?php echo e(__('om_period_1yr')); ?></span>
                            <span class="om-billing-price" data-price-el></span>
                            <span class="om-billing-permo" data-permo-el></span>
                            <span class="om-billing-save"><i class="fas fa-arrow-down"></i> <?php echo e(__('om_save_15')); ?></span>
                            <span class="om-billing-free"><i class="fas fa-gift"></i> <?php echo e(__('om_free_domain')); ?></span>
                        </div>
                    </label>
                    <label class="om-billing-card" data-months="24">
                        <input type="radio" name="om-billing" value="24">
                        <div class="om-billing-inner">
                            <span class="om-card-check"><i class="fas fa-check"></i></span>
                            <span class="om-billing-period"><?php echo e(__('om_period_2yr')); ?></span>
                            <span class="om-billing-price" data-price-el></span>
                            <span class="om-billing-permo" data-permo-el></span>
                            <span class="om-billing-save"><i class="fas fa-arrow-down"></i> <?php echo e(__('om_save_25')); ?></span>
                            <span class="om-billing-free"><i class="fas fa-gift"></i> <?php echo e(__('om_free_domain')); ?></span>
                        </div>
                    </label>
                    <label class="om-billing-card" data-months="36">
                        <input type="radio" name="om-billing" value="36">
                        <div class="om-billing-inner">
                            <span class="om-card-check"><i class="fas fa-check"></i></span>
                            <span class="om-billing-badge om-billing-badge-best"><i class="fas fa-fire"></i> <?php echo e(__('om_best_value')); ?></span>
                            <span class="om-billing-period"><?php echo e(__('om_period_3yr')); ?></span>
                            <span class="om-billing-price" data-price-el></span>
                            <span class="om-billing-permo" data-permo-el></span>
                            <span class="om-billing-save"><i class="fas fa-arrow-down"></i> <?php echo e(__('om_save_30')); ?></span>
                            <span class="om-billing-free"><i class="fas fa-gift"></i> <?php echo e(__('om_free_domain')); ?></span>
                        </div>
                    </label>
                </div>
                <div class="om-info-strip">
                    <div class="om-info-item"><i class="fas fa-sync-alt"></i> <?php echo e(__('om_same_price_renewal')); ?></div>
                    <div class="om-info-item"><i class="fas fa-undo"></i> <?php echo e(__('om_30day_moneyback')); ?></div>
                    <div class="om-info-item"><i class="fas fa-lock"></i> <?php echo e(__('om_cancel_anytime')); ?></div>
                </div>
            </div>

            <!-- ═══ Step 2: Server Location ═══ -->
            <div class="om-panel" data-panel="2">
                <div class="om-panel-head">
                    <h4><i class="fas fa-globe"></i> <?php echo e(__('om_location_heading')); ?></h4>
                    <p><?php echo e(__('om_location_desc')); ?></p>
                </div>
                <div class="om-loc-tabs" id="omLocTabs">
                    <button class="om-loc-tab active" data-continent="europe" type="button"><i class="fas fa-globe-europe"></i> <span><?php echo e(__('om_continent_europe')); ?></span></button>
                    <button class="om-loc-tab" data-continent="north-america" type="button"><i class="fas fa-globe-americas"></i> <span><?php echo e(__('om_continent_north_america')); ?></span></button>
                    <button class="om-loc-tab" data-continent="asia" type="button"><i class="fas fa-globe-asia"></i> <span><?php echo e(__('om_continent_asia')); ?></span></button>
                    <button class="om-loc-tab" data-continent="oceania" type="button"><i class="fas fa-water"></i> <span><?php echo e(__('om_continent_oceania')); ?></span></button>
                </div>
                <div class="om-loc-grid" id="omLocGrid">
                    <!-- Europe -->
                    <div class="om-loc-group active" data-continent="europe">
                        <label class="om-loc-card"><input type="radio" name="om-location" value="finland"><span class="om-card-check"><i class="fas fa-check"></i></span><span class="fi fi-fi"></span><span class="om-loc-name"><?php echo e(__('om_loc_finland')); ?></span></label>
                        <label class="om-loc-card"><input type="radio" name="om-location" value="turkey"><span class="om-card-check"><i class="fas fa-check"></i></span><span class="fi fi-tr"></span><span class="om-loc-name"><?php echo e(__('om_loc_turkey')); ?></span></label>
                        <label class="om-loc-card"><input type="radio" name="om-location" value="germany"><span class="om-card-check"><i class="fas fa-check"></i></span><span class="fi fi-de"></span><span class="om-loc-name"><?php echo e(__('om_loc_germany')); ?></span></label>
                        <label class="om-loc-card"><input type="radio" name="om-location" value="france"><span class="om-card-check"><i class="fas fa-check"></i></span><span class="fi fi-fr"></span><span class="om-loc-name"><?php echo e(__('om_loc_france')); ?></span></label>
                        <label class="om-loc-card"><input type="radio" name="om-location" value="poland"><span class="om-card-check"><i class="fas fa-check"></i></span><span class="fi fi-pl"></span><span class="om-loc-name"><?php echo e(__('om_loc_poland')); ?></span></label>
                        <label class="om-loc-card"><input type="radio" name="om-location" value="uk"><span class="om-card-check"><i class="fas fa-check"></i></span><span class="fi fi-gb"></span><span class="om-loc-name"><?php echo e(__('om_loc_uk')); ?></span></label>
                        <label class="om-loc-card"><input type="radio" name="om-location" value="netherlands"><span class="om-card-check"><i class="fas fa-check"></i></span><span class="fi fi-nl"></span><span class="om-loc-name"><?php echo e(__('om_loc_netherlands')); ?></span></label>
                        <label class="om-loc-card"><input type="radio" name="om-location" value="austria"><span class="om-card-check"><i class="fas fa-check"></i></span><span class="fi fi-at"></span><span class="om-loc-name"><?php echo e(__('om_loc_austria')); ?></span></label>
                    </div>
                    <!-- North America -->
                    <div class="om-loc-group" data-continent="north-america">
                        <label class="om-loc-card"><input type="radio" name="om-location" value="canada"><span class="om-card-check"><i class="fas fa-check"></i></span><span class="fi fi-ca"></span><span class="om-loc-name"><?php echo e(__('om_loc_canada')); ?></span></label>
                        <label class="om-loc-card"><input type="radio" name="om-location" value="usa"><span class="om-card-check"><i class="fas fa-check"></i></span><span class="fi fi-us"></span><span class="om-loc-name"><?php echo e(__('om_loc_usa')); ?></span></label>
                    </div>
                    <!-- Asia -->
                    <div class="om-loc-group" data-continent="asia">
                        <label class="om-loc-card om-stock-out"><input type="radio" name="om-location" value="india" disabled><span class="fi fi-in"></span><span class="om-loc-name"><?php echo e(__('om_loc_india')); ?></span><span class="om-loc-stock"><?php echo e(__('om_out_of_stock')); ?></span></label>
                        <label class="om-loc-card"><input type="radio" name="om-location" value="thailand"><span class="om-card-check"><i class="fas fa-check"></i></span><span class="fi fi-th"></span><span class="om-loc-name"><?php echo e(__('om_loc_thailand')); ?></span></label>
                        <label class="om-loc-card"><input type="radio" name="om-location" value="singapore"><span class="om-card-check"><i class="fas fa-check"></i></span><span class="fi fi-sg"></span><span class="om-loc-name"><?php echo e(__('om_loc_singapore')); ?></span></label>
                        <label class="om-loc-card"><input type="radio" name="om-location" value="hongkong"><span class="om-card-check"><i class="fas fa-check"></i></span><span class="fi fi-hk"></span><span class="om-loc-name"><?php echo e(__('om_loc_hongkong')); ?></span></label>
                        <label class="om-loc-card"><input type="radio" name="om-location" value="japan"><span class="om-card-check"><i class="fas fa-check"></i></span><span class="fi fi-jp"></span><span class="om-loc-name"><?php echo e(__('om_loc_japan')); ?></span></label>
                    </div>
                    <!-- Oceania -->
                    <div class="om-loc-group" data-continent="oceania">
                        <label class="om-loc-card"><input type="radio" name="om-location" value="australia"><span class="om-card-check"><i class="fas fa-check"></i></span><span class="fi fi-au"></span><span class="om-loc-name"><?php echo e(__('om_loc_australia')); ?></span></label>
                    </div>
                </div>
                <div class="om-info-strip">
                    <div class="om-info-item"><i class="fas fa-tachometer-alt"></i> <?php echo e(__('om_uptime_sla')); ?></div>
                    <div class="om-info-item"><i class="fas fa-network-wired"></i> <?php echo e(__('om_network_1gbps')); ?></div>
                    <div class="om-info-item"><i class="fas fa-headset"></i> <?php echo e(__('om_support_247')); ?></div>
                </div>
            </div>

            <!-- ═══ Step 3: Domain ═══ -->
            <div class="om-panel om-panel-domain" data-panel="3">
                <div class="om-panel-head">
                    <h4><i class="fas fa-link"></i> <?php echo e(__('om_domain_heading')); ?></h4>
                    <p><?php echo e(__('om_domain_desc')); ?></p>
                </div>
                <div class="om-domain-tabs" id="omDomainTabs">
                    <button class="om-domain-tab active" data-dtab="register" type="button"><i class="fas fa-plus-circle"></i> <?php echo e(__('om_domain_register')); ?></button>
                    <button class="om-domain-tab" data-dtab="transfer" type="button"><i class="fas fa-exchange-alt"></i> <?php echo e(__('om_domain_transfer')); ?></button>
                    <button class="om-domain-tab" data-dtab="existing" type="button"><i class="fas fa-edit"></i> <?php echo e(__('om_domain_existing')); ?></button>
                </div>
                <div class="om-domain-panels">
                    <!-- Register -->
                    <div class="om-domain-panel active" data-dtab="register">
                        <div class="om-search-bar">
                            <div class="om-search-icon"><i class="fas fa-search"></i></div>
                            <input type="text" class="om-input" id="omDomainInput" placeholder="<?php echo e(__('om_domain_search_placeholder')); ?>" autocomplete="off">
                            <button class="om-search-btn" id="omDomainSearch" type="button"><?php echo e(__('om_domain_search_btn')); ?></button>
                        </div>
                        <div class="om-domain-results" id="omDomainResults"></div>
                        <div class="om-domain-free">
                            <span class="om-badge-green"><i class="fas fa-gift"></i> <?php echo e(__('om_free_with_yearly')); ?></span>
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
                            <input type="text" class="om-input" id="omTransferInput" placeholder="<?php echo e(__('om_domain_transfer_placeholder')); ?>" autocomplete="off">
                            <button class="om-search-btn" id="omTransferSearch" type="button"><?php echo e(__('om_domain_transfer_btn')); ?></button>
                        </div>
                        <div class="om-domain-results" id="omTransferResults"></div>
                    </div>
                    <!-- Use Existing -->
                    <div class="om-domain-panel" data-dtab="existing">
                        <div class="om-search-bar">
                            <div class="om-search-icon"><i class="fas fa-globe"></i></div>
                            <input type="text" class="om-input" id="omExistingInput" placeholder="<?php echo e(__('om_domain_existing_placeholder')); ?>" autocomplete="off">
                        </div>
                        <p class="om-hint"><i class="fas fa-info-circle"></i> <?php echo e(__('om_domain_existing_hint')); ?></p>
                    </div>
                </div>
                <div class="om-info-strip">
                    <div class="om-info-item"><i class="fas fa-shield-alt"></i> <?php echo e(__('om_free_ssl')); ?></div>
                    <div class="om-info-item"><i class="fas fa-lock"></i> <?php echo e(__('om_whois_privacy')); ?></div>
                </div>
            </div>

            <!-- ═══ Step 3 VPS: Operating System (hidden by default) ═══ -->
            <div class="om-panel om-panel-vps" data-panel="3-vps" style="display:none;">
                <div class="om-panel-head">
                    <h4><i class="fas fa-desktop"></i> <?php echo e(__('om_os_heading')); ?></h4>
                    <p><?php echo e(__('om_os_desc')); ?></p>
                </div>
                <div class="om-vps-section">
                    <div class="om-os-grid" id="omOsGrid">
                        <label class="om-os-card">
                            <input type="radio" name="om-os" value="ubuntu-22" checked>
                            <div class="om-os-inner">
                                <span class="om-card-check"><i class="fas fa-check"></i></span>
                                <i class="fab fa-ubuntu om-os-icon"></i>
                                <span class="om-os-name"><?php echo e(__('om_os_ubuntu_22')); ?></span>
                                <span class="om-os-tag"><?php echo e(__('om_os_tag_lts')); ?></span>
                            </div>
                        </label>
                        <label class="om-os-card">
                            <input type="radio" name="om-os" value="ubuntu-24">
                            <div class="om-os-inner">
                                <span class="om-card-check"><i class="fas fa-check"></i></span>
                                <i class="fab fa-ubuntu om-os-icon"></i>
                                <span class="om-os-name"><?php echo e(__('om_os_ubuntu_24')); ?></span>
                                <span class="om-os-tag"><?php echo e(__('om_os_tag_latest')); ?></span>
                            </div>
                        </label>
                        <label class="om-os-card">
                            <input type="radio" name="om-os" value="debian-12">
                            <div class="om-os-inner">
                                <span class="om-card-check"><i class="fas fa-check"></i></span>
                                <i class="fab fa-linux om-os-icon"></i>
                                <span class="om-os-name"><?php echo e(__('om_os_debian_12')); ?></span>
                                <span class="om-os-tag"><?php echo e(__('om_os_tag_stable')); ?></span>
                            </div>
                        </label>
                        <label class="om-os-card">
                            <input type="radio" name="om-os" value="centos-9">
                            <div class="om-os-inner">
                                <span class="om-card-check"><i class="fas fa-check"></i></span>
                                <i class="fab fa-centos om-os-icon"></i>
                                <span class="om-os-name"><?php echo e(__('om_os_almalinux_9')); ?></span>
                                <span class="om-os-tag"><?php echo e(__('om_os_tag_rhel')); ?></span>
                            </div>
                        </label>
                        <label class="om-os-card">
                            <input type="radio" name="om-os" value="rocky-9">
                            <div class="om-os-inner">
                                <span class="om-card-check"><i class="fas fa-check"></i></span>
                                <i class="fab fa-linux om-os-icon"></i>
                                <span class="om-os-name"><?php echo e(__('om_os_rocky_9')); ?></span>
                                <span class="om-os-tag"><?php echo e(__('om_os_tag_rhel')); ?></span>
                            </div>
                        </label>
                        <label class="om-os-card">
                            <input type="radio" name="om-os" value="windows-2022">
                            <div class="om-os-inner">
                                <span class="om-card-check"><i class="fas fa-check"></i></span>
                                <i class="fab fa-windows om-os-icon"></i>
                                <span class="om-os-name"><?php echo e(__('om_os_windows')); ?></span>
                                <span class="om-os-tag om-os-tag-warn"><?php echo e(__('om_os_tag_windows_price')); ?></span>
                            </div>
                        </label>
                    </div>
                </div>
                <div class="om-info-strip">
                    <div class="om-info-item"><i class="fas fa-shield-alt"></i> <?php echo e(__('om_full_root_access')); ?></div>
                    <div class="om-info-item"><i class="fas fa-sync-alt"></i> <?php echo e(__('om_free_os_reinstall')); ?></div>
                    <div class="om-info-item"><i class="fas fa-network-wired"></i> <?php echo e(__('om_dedicated_ip')); ?></div>
                </div>
            </div>

            <!-- ═══ Step 4 VPS: Other Configuration (hidden by default) ═══ -->
            <div class="om-panel om-panel-vps-config" data-panel="4" style="display:none;">
                <div class="om-panel-head">
                    <h4><i class="fas fa-cogs"></i> <?php echo e(__('om_config_heading')); ?></h4>
                    <p><?php echo e(__('om_config_desc')); ?></p>
                    <div class="om-config-badges" id="omConfigBadges">
                        <span class="om-config-badge" id="omBadgeAddIp"><i class="fas fa-circle"></i> <?php echo e(__('om_no_additional_ips')); ?></span>
                        <span class="om-config-badge" id="omBadgeChangeIp"><i class="fas fa-circle"></i> <?php echo e(__('om_no_need_ip_changes')); ?></span>
                    </div>
                </div>
                <div class="om-vps-config-grid">
                    <div class="om-vps-config-col">
                        <label class="om-section-label"><i class="fas fa-network-wired"></i> <?php echo e(__('om_additional_ips_label')); ?></label>
                        <p class="om-hint"><?php echo e(__('om_additional_ips_hint')); ?></p>
                        <div class="om-radio-list">
                            <label class="om-radio-item">
                                <input type="radio" name="om-addip" value="0" data-label="No additional IPs" data-price="0" checked>
                                <span class="om-radio-mark"></span>
                                <span class="om-radio-text"><?php echo e(__('om_no_additional_ips')); ?></span>
                                <span class="om-radio-price">&euro;0.00 EUR</span>
                            </label>
                            <label class="om-radio-item">
                                <input type="radio" name="om-addip" value="1" data-label="1 IP" data-price="75">
                                <span class="om-radio-mark"></span>
                                <span class="om-radio-text"><?php echo e(__('om_1_ip')); ?></span>
                                <span class="om-radio-price">&euro;75.00 EUR</span>
                            </label>
                            <label class="om-radio-item">
                                <input type="radio" name="om-addip" value="2" data-label="2 IPs" data-price="133">
                                <span class="om-radio-mark"></span>
                                <span class="om-radio-text"><?php echo e(__('om_2_ips')); ?></span>
                                <span class="om-radio-price">&euro;133.00 EUR</span>
                            </label>
                            <label class="om-radio-item">
                                <input type="radio" name="om-addip" value="3" data-label="3 IPs" data-price="195">
                                <span class="om-radio-mark"></span>
                                <span class="om-radio-text"><?php echo e(__('om_3_ips')); ?></span>
                                <span class="om-radio-price">&euro;195.00 EUR</span>
                            </label>
                        </div>
                    </div>
                    <div class="om-vps-config-col">
                        <label class="om-section-label"><i class="fas fa-exchange-alt"></i> <?php echo e(__('om_change_mgmt_ips_label')); ?></label>
                        <p class="om-hint"><?php echo e(__('om_change_mgmt_ips_hint')); ?></p>
                        <div class="om-radio-list">
                            <label class="om-radio-item">
                                <input type="radio" name="om-changeip" value="0" data-label="No need IP changes" data-price="0" checked>
                                <span class="om-radio-mark"></span>
                                <span class="om-radio-text"><?php echo e(__('om_no_need_ip_changes')); ?></span>
                                <span class="om-radio-price">&euro;0.00 EUR</span>
                            </label>
                            <label class="om-radio-item">
                                <input type="radio" name="om-changeip" value="1" data-label="1 Change/month" data-price="35.64">
                                <span class="om-radio-mark"></span>
                                <span class="om-radio-text"><?php echo e(__('om_1_change_per_month')); ?></span>
                                <span class="om-radio-price">&euro;35.64 EUR</span>
                            </label>
                            <label class="om-radio-item">
                                <input type="radio" name="om-changeip" value="3" data-label="3 Changes/month" data-price="99">
                                <span class="om-radio-mark"></span>
                                <span class="om-radio-text"><?php echo e(__('om_3_changes_per_month')); ?></span>
                                <span class="om-radio-price">&euro;99.00 EUR</span>
                            </label>
                            <label class="om-radio-item">
                                <input type="radio" name="om-changeip" value="5" data-label="5 Changes/month" data-price="171">
                                <span class="om-radio-mark"></span>
                                <span class="om-radio-text"><?php echo e(__('om_5_changes_per_month')); ?></span>
                                <span class="om-radio-price">&euro;171.00 EUR</span>
                            </label>
                            <label class="om-radio-item">
                                <input type="radio" name="om-changeip" value="10" data-label="10 Changes/month" data-price="324">
                                <span class="om-radio-mark"></span>
                                <span class="om-radio-text"><?php echo e(__('om_10_changes_per_month')); ?></span>
                                <span class="om-radio-price">&euro;324.00 EUR</span>
                            </label>
                            <label class="om-radio-item">
                                <input type="radio" name="om-changeip" value="30" data-label="30 Changes/month" data-price="900">
                                <span class="om-radio-mark"></span>
                                <span class="om-radio-text"><?php echo e(__('om_30_changes_per_month')); ?></span>
                                <span class="om-radio-price">&euro;900.00 EUR</span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="om-vps-section">
                    <label class="om-section-label"><i class="fas fa-server"></i> <?php echo e(__('om_hostname_label')); ?></label>
                    <div class="om-search-bar">
                        <div class="om-search-icon"><i class="fas fa-server"></i></div>
                        <input type="text" class="om-input" id="omVpsHostname" placeholder="<?php echo e(__('om_hostname_placeholder')); ?>" autocomplete="off">
                    </div>
                    <p class="om-hint"><i class="fas fa-info-circle"></i> <?php echo e(__('om_hostname_hint')); ?></p>
                </div>
            </div>

            <!-- ═══ Step 3 Keys: Simple product (hidden by default) ═══ -->
            <div class="om-panel om-panel-keys" data-panel="3-keys" style="display:none;">
                <div class="om-panel-head">
                    <h4><i class="fas fa-key"></i> <?php echo e(__('om_keys_heading')); ?></h4>
                    <p><?php echo e(__('om_keys_desc')); ?></p>
                </div>
                <div class="om-keys-summary">
                    <div class="om-keys-product-card">
                        <div class="om-keys-icon"><i class="fab fa-microsoft"></i></div>
                        <div class="om-keys-info">
                            <strong id="omKeysProduct"><?php echo e(__('om_keys_product_default')); ?></strong>
                            <span id="omKeysType"><?php echo e(__('om_keys_type_default')); ?></span>
                        </div>
                    </div>
                    <div class="om-form-row">
                        <div class="om-form-group">
                            <label for="omKeysQty"><i class="fas fa-layer-group"></i> <?php echo e(__('om_keys_qty_label')); ?></label>
                            <input type="number" class="om-input" id="omKeysQty" value="1" min="1" max="100">
                        </div>
                        <div class="om-form-group">
                            <label><i class="fas fa-tag"></i> <?php echo e(__('om_keys_unit_price')); ?></label>
                            <input type="text" class="om-input" id="omKeysPrice" value="—" readonly>
                        </div>
                    </div>
                    <p class="om-hint"><i class="fas fa-bolt"></i> <?php echo e(__('om_keys_delivery_hint')); ?></p>
                </div>
                <div class="om-info-strip">
                    <div class="om-info-item"><i class="fas fa-bolt"></i> <?php echo e(__('om_instant_delivery')); ?></div>
                    <div class="om-info-item"><i class="fas fa-certificate"></i> <?php echo e(__('om_genuine_key')); ?></div>
                    <div class="om-info-item"><i class="fas fa-sync-alt"></i> <?php echo e(__('om_free_replacement')); ?></div>
                </div>
            </div>

            <!-- ═══ Step 5: Payment Gateway ═══ -->
            <div class="om-panel" data-panel="5">
                <div class="om-panel-head">
                    <h4><i class="fas fa-credit-card"></i> <?php echo e(__('om_payment_heading')); ?></h4>
                    <p><?php echo e(__('om_payment_desc')); ?></p>
                </div>
                <div class="om-pay-grid" id="omPayGrid">
                    <label class="om-pay-card" data-fee-pct="0" data-fee-fix="0">
                        <input type="radio" name="om-payment" value="stripe">
                        <div class="om-pay-inner"><span class="om-card-check"><i class="fas fa-check"></i></span><i class="fab fa-cc-stripe om-pay-icon"></i><span class="om-pay-name"><?php echo e(__('om_pay_stripe')); ?></span><span class="om-pay-tag om-pay-tag-green"><?php echo e(__('om_pay_no_fee')); ?></span></div>
                    </label>
                    <label class="om-pay-card" data-fee-pct="0" data-fee-fix="0">
                        <input type="radio" name="om-payment" value="paypal">
                        <div class="om-pay-inner"><span class="om-card-check"><i class="fas fa-check"></i></span><i class="fab fa-paypal om-pay-icon"></i><span class="om-pay-name"><?php echo e(__('om_pay_paypal')); ?></span><span class="om-pay-tag om-pay-tag-green"><?php echo e(__('om_pay_no_fee')); ?></span></div>
                    </label>
                    <label class="om-pay-card" data-fee-pct="0" data-fee-fix="0">
                        <input type="radio" name="om-payment" value="revolut">
                        <div class="om-pay-inner"><span class="om-card-check"><i class="fas fa-check"></i></span><i class="fas fa-university om-pay-icon"></i><span class="om-pay-name"><?php echo e(__('om_pay_revolut')); ?></span><span class="om-pay-tag om-pay-tag-green"><?php echo e(__('om_pay_no_fee')); ?></span></div>
                    </label>
                    <label class="om-pay-card" data-fee-pct="0" data-fee-fix="0">
                        <input type="radio" name="om-payment" value="alipay">
                        <div class="om-pay-inner"><span class="om-card-check"><i class="fas fa-check"></i></span><i class="fab fa-alipay om-pay-icon"></i><span class="om-pay-name"><?php echo e(__('om_pay_alipay')); ?></span><span class="om-pay-tag om-pay-tag-green"><?php echo e(__('om_pay_no_fee')); ?></span></div>
                    </label>
                    <label class="om-pay-card" data-fee-pct="3" data-fee-fix="0">
                        <input type="radio" name="om-payment" value="binance">
                        <div class="om-pay-inner"><span class="om-card-check"><i class="fas fa-check"></i></span><i class="fab fa-bitcoin om-pay-icon"></i><span class="om-pay-name"><?php echo e(__('om_pay_binance')); ?></span><span class="om-pay-tag om-pay-tag-warn"><?php echo e(__('om_pay_fee_3pct')); ?></span></div>
                    </label>
                    <label class="om-pay-card" data-fee-pct="3" data-fee-fix="0">
                        <input type="radio" name="om-payment" value="cryptomus">
                        <div class="om-pay-inner"><span class="om-card-check"><i class="fas fa-check"></i></span><i class="fas fa-coins om-pay-icon"></i><span class="om-pay-name"><?php echo e(__('om_pay_cryptomus')); ?></span><span class="om-pay-tag om-pay-tag-warn"><?php echo e(__('om_pay_fee_3pct')); ?></span></div>
                    </label>
                    <label class="om-pay-card" data-fee-pct="0" data-fee-fix="0">
                        <input type="radio" name="om-payment" value="plisio">
                        <div class="om-pay-inner"><span class="om-card-check"><i class="fas fa-check"></i></span><i class="fas fa-wallet om-pay-icon"></i><span class="om-pay-name"><?php echo e(__('om_pay_plisio')); ?></span><span class="om-pay-tag om-pay-tag-green"><?php echo e(__('om_pay_no_fee')); ?></span></div>
                    </label>
                    <label class="om-pay-card" data-fee-pct="3" data-fee-fix="0">
                        <input type="radio" name="om-payment" value="russian-card">
                        <div class="om-pay-inner"><span class="om-card-check"><i class="fas fa-check"></i></span><i class="fas fa-credit-card om-pay-icon"></i><span class="om-pay-name"><?php echo e(__('om_pay_russian_card')); ?></span><span class="om-pay-tag om-pay-tag-warn"><?php echo e(__('om_pay_fee_3pct')); ?></span></div>
                    </label>
                    <label class="om-pay-card" data-fee-pct="0" data-fee-fix="0">
                        <input type="radio" name="om-payment" value="balance">
                        <div class="om-pay-inner"><span class="om-card-check"><i class="fas fa-check"></i></span><i class="fas fa-piggy-bank om-pay-icon"></i><span class="om-pay-name"><?php echo e(__('om_pay_credit_balance')); ?></span><span class="om-pay-tag om-pay-tag-green"><?php echo e(__('om_pay_no_fee')); ?></span></div>
                    </label>
                </div>
                <div class="om-info-strip">
                    <div class="om-info-item"><i class="fas fa-lock"></i> <?php echo e(__('om_ssl_encryption')); ?></div>
                    <div class="om-info-item"><i class="fas fa-shield-alt"></i> <?php echo e(__('om_pci_compliant')); ?></div>
                    <div class="om-info-item"><i class="fas fa-undo"></i> <?php echo e(__('om_refund_protected')); ?></div>
                </div>
            </div>

            <!-- ═══ Step 6: Account ═══ -->
            <div class="om-panel" data-panel="6">
                <div class="om-panel-head">
                    <h4><i class="fas fa-user-circle"></i> <?php echo e(__('om_account_heading')); ?></h4>
                    <p><?php echo e(__('om_account_desc')); ?></p>
                </div>
                <div class="om-account-tabs" id="omAccountTabs">
                    <button class="om-account-tab active" data-atab="login" type="button"><i class="fas fa-sign-in-alt"></i> <?php echo e(__('om_existing_customer')); ?></button>
                    <button class="om-account-tab" data-atab="register" type="button"><i class="fas fa-user-plus"></i> <?php echo e(__('om_new_customer')); ?></button>
                </div>
                <div class="om-account-panels">
                    <!-- Login -->
                    <div class="om-account-panel active" data-atab="login">
                        <div class="om-form-row">
                            <div class="om-form-group">
                                <label for="omLoginEmail"><i class="fas fa-envelope"></i> <?php echo e(__('om_email_label')); ?></label>
                                <input type="email" class="om-input" id="omLoginEmail" placeholder="<?php echo e(__('om_email_placeholder')); ?>" autocomplete="email">
                            </div>
                            <div class="om-form-group">
                                <label for="omLoginPass"><i class="fas fa-key"></i> <?php echo e(__('om_password_label')); ?></label>
                                <div class="om-input-wrap">
                                    <input type="password" class="om-input" id="omLoginPass" placeholder="<?php echo e(__('om_password_placeholder')); ?>" autocomplete="current-password">
                                    <button type="button" class="om-eye-toggle" aria-label="<?php echo e(__('om_toggle_password')); ?>"><i class="fas fa-eye"></i></button>
                                </div>
                            </div>
                        </div>
                        <button class="om-btn om-btn-primary om-btn-block" id="omLoginBtn" type="button"><i class="fas fa-sign-in-alt"></i> <?php echo e(__('om_sign_in')); ?></button>
                        <div class="om-divider"><span><?php echo e(__('om_or_continue_with')); ?></span></div>
                        <button class="om-btn om-btn-google om-btn-block" id="omGoogleLogin" type="button">
                            <svg width="18" height="18" viewBox="0 0 24 24"><path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92a5.06 5.06 0 0 1-2.2 3.32v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.1z" fill="#4285F4"/><path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/><path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/><path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/></svg>
                            <?php echo e(__('om_continue_google')); ?>
                        </button>
                    </div>

                    <!-- Register -->
                    <div class="om-account-panel" data-atab="register">
                        <div class="om-form-row">
                            <div class="om-form-group">
                                <label for="omRegFirst"><i class="fas fa-user"></i> <?php echo e(__('om_first_name')); ?></label>
                                <input type="text" class="om-input" id="omRegFirst" placeholder="<?php echo e(__('om_first_name_placeholder')); ?>" autocomplete="given-name">
                            </div>
                            <div class="om-form-group">
                                <label for="omRegLast"><i class="fas fa-user"></i> <?php echo e(__('om_last_name')); ?></label>
                                <input type="text" class="om-input" id="omRegLast" placeholder="<?php echo e(__('om_last_name_placeholder')); ?>" autocomplete="family-name">
                            </div>
                        </div>
                        <div class="om-form-row">
                            <div class="om-form-group">
                                <label for="omRegEmail"><i class="fas fa-envelope"></i> <?php echo e(__('om_email_label')); ?></label>
                                <input type="email" class="om-input" id="omRegEmail" placeholder="<?php echo e(__('om_email_placeholder')); ?>" autocomplete="email">
                            </div>
                            <div class="om-form-group">
                                <label for="omRegPass"><i class="fas fa-key"></i> <?php echo e(__('om_password_label')); ?></label>
                                <div class="om-input-wrap">
                                    <input type="password" class="om-input" id="omRegPass" placeholder="<?php echo e(__('om_password_reg_placeholder')); ?>" autocomplete="new-password">
                                    <button type="button" class="om-eye-toggle" aria-label="<?php echo e(__('om_toggle_password')); ?>"><i class="fas fa-eye"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="om-form-row">
                            <div class="om-form-group">
                                <label for="omRegCountrySearch"><i class="fas fa-flag"></i> <?php echo e(__('om_country_label')); ?></label>
                                <div class="om-searchable-select" id="omCountryWrap">
                                    <input type="text" class="om-input" id="omRegCountrySearch" placeholder="<?php echo e(__('om_country_placeholder')); ?>" autocomplete="off">
                                    <input type="hidden" id="omRegCountry">
                                    <div class="om-select-dropdown" id="omCountryDropdown"></div>
                                </div>
                            </div>
                            <div class="om-form-group">
                                <label for="omRegPhone"><i class="fas fa-phone"></i> <?php echo e(__('om_phone_label')); ?></label>
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
                                    <input type="tel" class="om-input om-phone-number" id="omRegPhone" placeholder="<?php echo e(__('om_phone_placeholder')); ?>" autocomplete="tel">
                                </div>
                            </div>
                        </div>
                        <div class="om-form-row">
                            <div class="om-form-group">
                                <label for="omRegCity"><i class="fas fa-city"></i> <?php echo e(__('om_city_label')); ?></label>
                                <input type="text" class="om-input" id="omRegCity" placeholder="<?php echo e(__('om_city_placeholder')); ?>" autocomplete="address-level2">
                            </div>
                            <div class="om-form-group">
                                <label for="omRegState"><i class="fas fa-map"></i> <?php echo e(__('om_state_label')); ?></label>
                                <input type="text" class="om-input" id="omRegState" placeholder="<?php echo e(__('om_state_placeholder')); ?>" autocomplete="address-level1">
                            </div>
                        </div>
                        <div class="om-form-row">
                            <div class="om-form-group">
                                <label for="omRegAddress"><i class="fas fa-map-marker-alt"></i> <?php echo e(__('om_address_label')); ?></label>
                                <input type="text" class="om-input" id="omRegAddress" placeholder="<?php echo e(__('om_address_placeholder')); ?>" autocomplete="street-address">
                            </div>
                            <div class="om-form-group">
                                <label for="omRegPostcode"><i class="fas fa-mail-bulk"></i> <?php echo e(__('om_postcode_label')); ?></label>
                                <input type="text" class="om-input" id="omRegPostcode" placeholder="<?php echo e(__('om_postcode_placeholder')); ?>" autocomplete="postal-code">
                            </div>
                        </div>
                        <button class="om-btn om-btn-primary om-btn-block" id="omRegisterBtn" type="button"><i class="fas fa-user-plus"></i> <?php echo __('om_create_account'); ?></button>
                        <div class="om-divider"><span><?php echo e(__('om_or_continue_with')); ?></span></div>
                        <button class="om-btn om-btn-google om-btn-block" id="omGoogleRegister" type="button">
                            <svg width="18" height="18" viewBox="0 0 24 24"><path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92a5.06 5.06 0 0 1-2.2 3.32v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.1z" fill="#4285F4"/><path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/><path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/><path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/></svg>
                            <?php echo e(__('om_signup_google')); ?>
                        </button>
                    </div>
                </div>
            </div>

            <!-- ═══ Step 7: Order Summary ═══ -->
            <div class="om-panel" data-panel="7">
                <div class="om-panel-head">
                    <h4><i class="fas fa-receipt"></i> <?php echo e(__('om_summary_heading')); ?></h4>
                    <p><?php echo e(__('om_summary_desc')); ?></p>
                </div>
                <div class="om-summary-card">
                    <div class="om-sum-row"><span><i class="fas fa-box"></i> <?php echo e(__('om_sum_product')); ?></span><strong id="omSumProduct">—</strong></div>
                    <div class="om-sum-row"><span><i class="fas fa-calendar"></i> <?php echo e(__('om_sum_billing_cycle')); ?></span><strong id="omSumBilling">—</strong></div>
                    <div class="om-sum-row"><span><i class="fas fa-map-marker-alt"></i> <?php echo e(__('om_sum_server_location')); ?></span><strong id="omSumLocation">—</strong></div>
                    <div class="om-sum-row"><span><i class="fas fa-globe"></i> <?php echo e(__('om_sum_domain')); ?></span><strong id="omSumDomain">—</strong></div>
                    <div class="om-sum-row"><span><i class="fas fa-credit-card"></i> <?php echo e(__('om_sum_payment_method')); ?></span><strong id="omSumPayment">—</strong></div>
                    <div class="om-sum-sep"></div>
                    <div class="om-sum-row"><span><?php echo e(__('om_sum_subtotal')); ?></span><strong id="omSumSubtotal">—</strong></div>
                    <div class="om-sum-row om-sum-fee-row" id="omSumFeeRow"><span><?php echo e(__('om_sum_gateway_fee')); ?></span><strong id="omSumFee">—</strong></div>
                    <div class="om-sum-row om-sum-promo-row" id="omSumPromoRow"><span><?php echo e(__('om_sum_promo_discount')); ?></span><strong id="omSumPromo" class="om-green">—</strong></div>
                    <div class="om-sum-sep"></div>
                    <div class="om-sum-row om-sum-total"><span><?php echo e(__('om_sum_total')); ?></span><strong id="omSumTotal">—</strong></div>
                </div>
                <div class="om-promo-section">
                    <label class="om-promo-label"><i class="fas fa-tag"></i> <?php echo e(__('om_promo_label')); ?></label>
                    <div class="om-search-bar">
                        <div class="om-search-icon"><i class="fas fa-tag"></i></div>
                        <input type="text" class="om-input" id="omPromoInput" placeholder="<?php echo e(__('om_promo_placeholder')); ?>" autocomplete="off">
                        <button class="om-search-btn" id="omPromoApply" type="button"><?php echo e(__('om_promo_apply')); ?></button>
                    </div>
                    <div id="omPromoResult"></div>
                </div>
                <div class="om-terms">
                    <label class="om-check">
                        <input type="checkbox" id="omTerms">
                        <span><?php echo __('om_terms_agree', ['terms_url' => e(SITE_URL) . '/terms/', 'privacy_url' => e(SITE_URL) . '/privacy-policy/']); ?></span>
                    </label>
                    <label class="om-check">
                        <input type="checkbox" id="omRefund">
                        <span><?php echo __('om_refund_agree', ['refund_url' => e(SITE_URL) . '/legal/refund-policy']); ?></span>
                    </label>
                </div>
            </div>

        </div><!-- /.om-body -->

        <!-- ——— Footer Navigation ——— -->
        <div class="om-footer">
            <button class="om-btn om-btn-back" id="omBack" type="button">
                <i class="fas fa-arrow-left"></i> <?php echo e(__('om_back')); ?>
            </button>
            <div class="om-footer-center">
                <div class="om-step-counter"><?php echo __('om_step_counter', ['current' => '<span id="omStepNum">1</span>', 'total' => '<span id="omTotalSteps">7</span>']); ?></div>
                <div class="om-trust-icons">
                    <i class="fas fa-lock" title="<?php echo e(__('om_ssl_secured')); ?>"></i>
                    <i class="fas fa-shield-alt" title="<?php echo e(__('om_protected')); ?>"></i>
                </div>
            </div>
            <button class="om-btn om-btn-next" id="omNext" type="button">
                <?php echo e(__('om_continue')); ?> <i class="fas fa-arrow-right"></i>
            </button>
        </div>

    </div><!-- /.om -->
</div><!-- /.om-overlay -->
