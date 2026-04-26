<?php
/**
 * YottaSrc Dashboard — Register (3-step wizard)
 * ================================================
 * Step 1: Account Information (email, name, password)
 * Step 2: Contact & Address (country, phone, address, city, state, postcode, company)
 * Step 3: Confirm (review summary, captcha, terms, submit)
 */

$page_title = null;
$breadcrumbs_data = null;

require_once __DIR__ . '/../../layouts/config.php';

$page_title = __('auth_register_title') . ' — ' . SITE_NAME;
$auth_heading = null;
$auth_subheading = null;
$auth_css = 'register.css';

// Countries with ISO code (lowercase for flag-icons) + phone code
$countries = [
    ['code' => 'eg', 'name' => 'Egypt',                'phone' => '+20'],
    ['code' => 'sa', 'name' => 'Saudi Arabia',         'phone' => '+966'],
    ['code' => 'ae', 'name' => 'United Arab Emirates', 'phone' => '+971'],
    ['code' => 'kw', 'name' => 'Kuwait',               'phone' => '+965'],
    ['code' => 'qa', 'name' => 'Qatar',                'phone' => '+974'],
    ['code' => 'bh', 'name' => 'Bahrain',              'phone' => '+973'],
    ['code' => 'om', 'name' => 'Oman',                 'phone' => '+968'],
    ['code' => 'jo', 'name' => 'Jordan',               'phone' => '+962'],
    ['code' => 'lb', 'name' => 'Lebanon',              'phone' => '+961'],
    ['code' => 'iq', 'name' => 'Iraq',                 'phone' => '+964'],
    ['code' => 'ye', 'name' => 'Yemen',                'phone' => '+967'],
    ['code' => 'sy', 'name' => 'Syria',                'phone' => '+963'],
    ['code' => 'ps', 'name' => 'Palestine',            'phone' => '+970'],
    ['code' => 'ma', 'name' => 'Morocco',              'phone' => '+212'],
    ['code' => 'dz', 'name' => 'Algeria',              'phone' => '+213'],
    ['code' => 'tn', 'name' => 'Tunisia',              'phone' => '+216'],
    ['code' => 'ly', 'name' => 'Libya',                'phone' => '+218'],
    ['code' => 'sd', 'name' => 'Sudan',                'phone' => '+249'],
    ['code' => 'us', 'name' => 'United States',        'phone' => '+1'],
    ['code' => 'gb', 'name' => 'United Kingdom',       'phone' => '+44'],
    ['code' => 'ca', 'name' => 'Canada',               'phone' => '+1'],
    ['code' => 'de', 'name' => 'Germany',              'phone' => '+49'],
    ['code' => 'fr', 'name' => 'France',               'phone' => '+33'],
    ['code' => 'es', 'name' => 'Spain',                'phone' => '+34'],
    ['code' => 'it', 'name' => 'Italy',                'phone' => '+39'],
    ['code' => 'nl', 'name' => 'Netherlands',          'phone' => '+31'],
    ['code' => 'be', 'name' => 'Belgium',              'phone' => '+32'],
    ['code' => 'ch', 'name' => 'Switzerland',          'phone' => '+41'],
    ['code' => 'se', 'name' => 'Sweden',               'phone' => '+46'],
    ['code' => 'no', 'name' => 'Norway',               'phone' => '+47'],
    ['code' => 'dk', 'name' => 'Denmark',              'phone' => '+45'],
    ['code' => 'fi', 'name' => 'Finland',              'phone' => '+358'],
    ['code' => 'pl', 'name' => 'Poland',               'phone' => '+48'],
    ['code' => 'tr', 'name' => 'Turkey',               'phone' => '+90'],
    ['code' => 'ru', 'name' => 'Russia',               'phone' => '+7'],
    ['code' => 'in', 'name' => 'India',                'phone' => '+91'],
    ['code' => 'pk', 'name' => 'Pakistan',             'phone' => '+92'],
    ['code' => 'bd', 'name' => 'Bangladesh',           'phone' => '+880'],
    ['code' => 'id', 'name' => 'Indonesia',            'phone' => '+62'],
    ['code' => 'my', 'name' => 'Malaysia',             'phone' => '+60'],
    ['code' => 'sg', 'name' => 'Singapore',            'phone' => '+65'],
    ['code' => 'ph', 'name' => 'Philippines',          'phone' => '+63'],
    ['code' => 'th', 'name' => 'Thailand',             'phone' => '+66'],
    ['code' => 'jp', 'name' => 'Japan',                'phone' => '+81'],
    ['code' => 'kr', 'name' => 'South Korea',          'phone' => '+82'],
    ['code' => 'cn', 'name' => 'China',                'phone' => '+86'],
    ['code' => 'hk', 'name' => 'Hong Kong',            'phone' => '+852'],
    ['code' => 'au', 'name' => 'Australia',            'phone' => '+61'],
    ['code' => 'nz', 'name' => 'New Zealand',          'phone' => '+64'],
    ['code' => 'br', 'name' => 'Brazil',               'phone' => '+55'],
    ['code' => 'mx', 'name' => 'Mexico',               'phone' => '+52'],
    ['code' => 'ar', 'name' => 'Argentina',            'phone' => '+54'],
    ['code' => 'za', 'name' => 'South Africa',         'phone' => '+27'],
    ['code' => 'ng', 'name' => 'Nigeria',              'phone' => '+234'],
    ['code' => 'ke', 'name' => 'Kenya',                'phone' => '+254'],
];

$default_country = 'eg';
$default_phone = '+20';

require_once __DIR__ . '/../../layouts/auth-shell.php';
?>

        <!-- Subtitle -->
        <div class="reg-subtitle"><?php echo e(__('auth_register_subtitle')); ?></div>

        <!-- Dismissible welcome notice -->
        <div class="reg-notice" id="regNotice">
            <i class="fas fa-circle-info"></i>
            <span><?php echo e(__('auth_register_welcome_notice')); ?></span>
            <button type="button" class="reg-notice__close" aria-label="Dismiss" onclick="this.parentNode.remove()">
                <i class="fas fa-xmark"></i>
            </button>
        </div>

        <!-- Social -->
        <div class="reg-social-label"><?php echo e(__('auth_register_social_label')); ?></div>
        <div class="reg-socials">
            <!-- Google -->
            <button type="button" class="reg-social-btn reg-social-btn--google" onclick="handleSocial('google')" aria-label="Sign up with Google" title="Google">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                    <path fill="#FFC107" d="M43.611 20.083H42V20H24v8h11.303c-1.649 4.657-6.08 8-11.303 8-6.627 0-12-5.373-12-12s5.373-12 12-12c3.059 0 5.842 1.154 7.961 3.039l5.657-5.657C34.046 6.053 29.268 4 24 4 12.955 4 4 12.955 4 24s8.955 20 20 20 20-8.955 20-20c0-1.341-.138-2.65-.389-3.917z"/>
                    <path fill="#FF3D00" d="M6.306 14.691l6.571 4.819C14.655 15.108 18.961 12 24 12c3.059 0 5.842 1.154 7.961 3.039l5.657-5.657C34.046 6.053 29.268 4 24 4 16.318 4 9.656 8.337 6.306 14.691z"/>
                    <path fill="#4CAF50" d="M24 44c5.166 0 9.86-1.977 13.409-5.192l-6.19-5.238C29.211 35.091 26.715 36 24 36c-5.202 0-9.619-3.317-11.283-7.946l-6.522 5.025C9.505 39.556 16.227 44 24 44z"/>
                    <path fill="#1976D2" d="M43.611 20.083H42V20H24v8h11.303c-.792 2.237-2.231 4.166-4.087 5.571.001-.001.002-.001.003-.002l6.19 5.238C36.971 39.205 44 34 44 24c0-1.341-.138-2.65-.389-3.917z"/>
                </svg>
            </button>

            <!-- Facebook -->
            <button type="button" class="reg-social-btn reg-social-btn--facebook" onclick="handleSocial('facebook')" aria-label="Sign up with Facebook" title="Facebook">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#1877f2">
                    <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                </svg>
            </button>

            <!-- X (Twitter) -->
            <button type="button" class="reg-social-btn reg-social-btn--x" onclick="handleSocial('x')" aria-label="Sign up with X" title="X">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                </svg>
            </button>

            <!-- GitHub -->
            <button type="button" class="reg-social-btn reg-social-btn--github" onclick="handleSocial('github')" aria-label="Sign up with GitHub" title="GitHub">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/>
                </svg>
            </button>
        </div>

        <!-- Divider -->
        <div class="reg-divider"><span class="reg-divider__text">OR</span></div>

        <!-- Step Indicator -->
        <div class="reg-stepper" id="regStepper">
            <div class="reg-step is-active" data-step="1">
                <div class="reg-step__num">
                    <span>1</span><i class="fas fa-check"></i>
                </div>
                <div class="reg-step__label"><?php echo e(__('nav_account')); ?></div>
            </div>
            <div class="reg-step__line" data-line="1"></div>
            <div class="reg-step" data-step="2">
                <div class="reg-step__num">
                    <span>2</span><i class="fas fa-check"></i>
                </div>
                <div class="reg-step__label"><?php echo e(__('auth_address')); ?></div>
            </div>
            <div class="reg-step__line" data-line="2"></div>
            <div class="reg-step" data-step="3">
                <div class="reg-step__num">
                    <span>3</span><i class="fas fa-check"></i>
                </div>
                <div class="reg-step__label"><?php echo e(__('auth_step_confirm')); ?></div>
            </div>
        </div>

        <!-- Form -->
        <form class="reg-form" id="regForm" onsubmit="return handleRegister(event)">

            <!-- ═══════════════════════════════════════════
                 STEP 1 — ACCOUNT INFORMATION
                 ═══════════════════════════════════════════ -->
            <div class="reg-panel is-active" data-panel="1">

                <!-- Email -->
                <div class="reg-field">
                    <label class="reg-label" for="regEmail"><?php echo e(__('auth_email')); ?> <span class="reg-label__req">*</span></label>
                    <input type="email" id="regEmail" class="reg-input" placeholder="<?php echo e(__('auth_email_placeholder')); ?>" required autocomplete="email" autofocus>
                </div>

                <!-- First + Last -->
                <div class="reg-grid reg-grid--2">
                    <div class="reg-field">
                        <label class="reg-label" for="regFirst"><?php echo e(__('auth_first_name')); ?> <span class="reg-label__req">*</span></label>
                        <input type="text" id="regFirst" class="reg-input" placeholder="<?php echo e(__('auth_first_name_placeholder')); ?>" required autocomplete="given-name">
                    </div>
                    <div class="reg-field">
                        <label class="reg-label" for="regLast"><?php echo e(__('auth_last_name')); ?> <span class="reg-label__req">*</span></label>
                        <input type="text" id="regLast" class="reg-input" placeholder="<?php echo e(__('auth_last_name_placeholder')); ?>" required autocomplete="family-name">
                    </div>
                </div>

                <!-- Password -->
                <div class="reg-field">
                    <label class="reg-label" for="regPassword"><?php echo e(__('auth_password')); ?> <span class="reg-label__req">*</span></label>
                    <div class="reg-pwd-wrap">
                        <input type="password" id="regPassword" class="reg-input" placeholder="<?php echo e(__('auth_password_create_placeholder')); ?>" required autocomplete="new-password" oninput="checkStrength(this.value)">
                        <button type="button" class="reg-pwd-toggle" onclick="togglePwd()" tabindex="-1" aria-label="Toggle password">
                            <i class="fas fa-eye" id="regPwdIcon"></i>
                        </button>
                    </div>
                    <div class="reg-strength" id="pwdStrength" data-level="0">
                        <div class="reg-strength__bar"></div>
                        <div class="reg-strength__bar"></div>
                        <div class="reg-strength__bar"></div>
                        <div class="reg-strength__bar"></div>
                    </div>
                </div>

                <!-- Actions -->
                <div class="reg-actions">
                    <button type="button" class="reg-btn-next" data-goto="2">
                        <?php echo e(__('auth_next_step')); ?> <i class="fas fa-arrow-right"></i>
                    </button>
                </div>
            </div>


            <!-- ═══════════════════════════════════════════
                 STEP 2 — CONTACT & ADDRESS
                 ═══════════════════════════════════════════ -->
            <div class="reg-panel" data-panel="2">

                <!-- Country + Phone -->
                <div class="reg-grid reg-grid--2">
                    <!-- Country combobox -->
                    <div class="reg-field">
                        <label class="reg-label"><?php echo e(__('auth_country')); ?> <span class="reg-label__req">*</span></label>
                        <div class="reg-combo" id="countryCombo" data-combo>
                            <button type="button" class="reg-combo__btn" data-combo-trigger>
                                <span class="fi fi-<?php echo e($default_country); ?> reg-combo__flag" id="countryFlag"></span>
                                <span class="reg-combo__text" id="countryText">Egypt</span>
                                <i class="fas fa-chevron-down reg-combo__caret"></i>
                            </button>
                            <input type="hidden" name="country" id="countryValue" value="<?php echo e($default_country); ?>">
                            <div class="reg-combo__panel" data-combo-panel>
                                <div class="reg-combo__search">
                                    <i class="fas fa-magnifying-glass"></i>
                                    <input type="text" placeholder="<?php echo e(__('auth_country_search')); ?>" data-combo-search>
                                </div>
                                <div class="reg-combo__list" data-combo-list>
                                    <?php foreach ($countries as $c): ?>
                                    <button type="button" class="reg-combo__option <?php echo $c['code'] === $default_country ? 'is-selected' : ''; ?>"
                                            data-combo-option
                                            data-code="<?php echo e($c['code']); ?>"
                                            data-name="<?php echo e($c['name']); ?>"
                                            data-phone="<?php echo e($c['phone']); ?>">
                                        <span class="fi fi-<?php echo e($c['code']); ?> reg-combo__flag"></span>
                                        <span class="reg-combo__option-name"><?php echo e($c['name']); ?></span>
                                        <span class="reg-combo__option-code"><?php echo e($c['phone']); ?></span>
                                    </button>
                                    <?php endforeach; ?>
                                    <div class="reg-combo__empty" data-combo-empty><?php echo e(__('auth_country_empty')); ?></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Phone -->
                    <div class="reg-field">
                        <label class="reg-label" for="regPhone"><?php echo e(__('auth_phone')); ?> <span class="reg-label__req">*</span></label>
                        <div class="reg-phone">
                            <div class="reg-combo" id="phoneCombo" data-combo>
                                <button type="button" class="reg-combo__btn" data-combo-trigger>
                                    <span class="fi fi-<?php echo e($default_country); ?> reg-combo__flag" id="phoneFlag"></span>
                                    <span class="reg-combo__text" id="phoneText"><?php echo e($default_phone); ?></span>
                                    <i class="fas fa-chevron-down reg-combo__caret"></i>
                                </button>
                                <input type="hidden" name="phone_code" id="phoneCodeValue" value="<?php echo e($default_phone); ?>">
                                <div class="reg-combo__panel" data-combo-panel>
                                    <div class="reg-combo__search">
                                        <i class="fas fa-magnifying-glass"></i>
                                        <input type="text" placeholder="<?php echo e(__('auth_country_search')); ?>" data-combo-search>
                                    </div>
                                    <div class="reg-combo__list" data-combo-list>
                                        <?php foreach ($countries as $c): ?>
                                        <button type="button" class="reg-combo__option <?php echo $c['code'] === $default_country ? 'is-selected' : ''; ?>"
                                                data-combo-option
                                                data-code="<?php echo e($c['code']); ?>"
                                                data-name="<?php echo e($c['name']); ?>"
                                                data-phone="<?php echo e($c['phone']); ?>">
                                            <span class="fi fi-<?php echo e($c['code']); ?> reg-combo__flag"></span>
                                            <span class="reg-combo__option-name"><?php echo e($c['name']); ?></span>
                                            <span class="reg-combo__option-code"><?php echo e($c['phone']); ?></span>
                                        </button>
                                        <?php endforeach; ?>
                                        <div class="reg-combo__empty" data-combo-empty><?php echo e(__('auth_country_empty')); ?></div>
                                    </div>
                                </div>
                            </div>
                            <input type="tel" id="regPhone" name="phone" class="reg-phone__number" placeholder="<?php echo e(__('auth_phone_placeholder')); ?>" required autocomplete="tel-national">
                        </div>
                    </div>
                </div>

                <!-- Address -->
                <div class="reg-field">
                    <label class="reg-label" for="regAddress"><?php echo e(__('auth_address')); ?> <span class="reg-label__req">*</span></label>
                    <input type="text" id="regAddress" class="reg-input" placeholder="<?php echo e(__('auth_address_placeholder')); ?>" required autocomplete="street-address">
                </div>

                <!-- City + State + Postcode -->
                <div class="reg-grid reg-grid--3">
                    <div class="reg-field">
                        <label class="reg-label" for="regCity"><?php echo e(__('auth_city')); ?> <span class="reg-label__req">*</span></label>
                        <input type="text" id="regCity" class="reg-input" placeholder="<?php echo e(__('auth_city_placeholder')); ?>" required autocomplete="address-level2">
                    </div>
                    <div class="reg-field">
                        <label class="reg-label" for="regState"><?php echo e(__('auth_state')); ?> <span class="reg-label__req">*</span></label>
                        <input type="text" id="regState" class="reg-input" placeholder="<?php echo e(__('auth_state_placeholder')); ?>" required autocomplete="address-level1">
                    </div>
                    <div class="reg-field">
                        <label class="reg-label" for="regPostcode"><?php echo e(__('auth_postcode')); ?> <span class="reg-label__req">*</span></label>
                        <input type="text" id="regPostcode" class="reg-input" placeholder="<?php echo e(__('auth_postcode_placeholder')); ?>" required autocomplete="postal-code">
                    </div>
                </div>

                <!-- Company -->
                <div class="reg-field">
                    <label class="reg-label" for="regCompany"><?php echo e(__('auth_company')); ?> <span class="reg-label__opt">(<?php echo e(__('auth_optional')); ?>)</span></label>
                    <input type="text" id="regCompany" class="reg-input" placeholder="<?php echo e(__('auth_company_placeholder')); ?>" autocomplete="organization">
                </div>

                <!-- Actions -->
                <div class="reg-actions">
                    <button type="button" class="reg-btn-prev" data-goto="1">
                        <i class="fas fa-arrow-left"></i> <?php echo e(__('auth_back')); ?>
                    </button>
                    <button type="button" class="reg-btn-next" data-goto="3">
                        <?php echo e(__('auth_next_step')); ?> <i class="fas fa-arrow-right"></i>
                    </button>
                </div>
            </div>


            <!-- ═══════════════════════════════════════════
                 STEP 3 — CONFIRM
                 ═══════════════════════════════════════════ -->
            <div class="reg-panel" data-panel="3">

                <!-- Review Summary -->
                <div class="reg-review">
                    <div class="reg-review__title">
                        <i class="fas fa-clipboard-check"></i>
                        <?php echo e(__('auth_review_title')); ?>
                    </div>
                    <div class="reg-review__list" id="reviewList">
                        <div class="reg-review__row">
                            <span class="reg-review__label"><?php echo e(__('auth_email')); ?></span>
                            <span class="reg-review__value" id="reviewEmail">—</span>
                        </div>
                        <div class="reg-review__row">
                            <span class="reg-review__label"><?php echo e(__('auth_full_name')); ?></span>
                            <span class="reg-review__value" id="reviewName">—</span>
                        </div>
                        <div class="reg-review__row">
                            <span class="reg-review__label"><?php echo e(__('auth_country')); ?></span>
                            <span class="reg-review__value" id="reviewCountry">—</span>
                        </div>
                        <div class="reg-review__row">
                            <span class="reg-review__label"><?php echo e(__('auth_phone')); ?></span>
                            <span class="reg-review__value" id="reviewPhone">—</span>
                        </div>
                        <div class="reg-review__row">
                            <span class="reg-review__label"><?php echo e(__('auth_address')); ?></span>
                            <span class="reg-review__value" id="reviewAddress">—</span>
                        </div>
                    </div>
                </div>

                <!-- Captcha -->
                <div class="reg-captcha">
                    <div class="reg-captcha__check"><i class="fas fa-check"></i></div>
                    <div class="reg-captcha__label"><?php echo e(__('auth_captcha_success')); ?></div>
                    <div class="reg-captcha__brand">
                        <i class="fas fa-cloud"></i>
                        <div class="reg-captcha__brand-sub">
                            <strong>CLOUDFLARE</strong>
                            <small><?php echo e(__('auth_captcha_privacy')); ?></small>
                        </div>
                    </div>
                </div>

                <!-- Terms -->
                <label class="reg-check">
                    <input type="checkbox" id="regTerms" required>
                    <span class="reg-check__box"></span>
                    <span class="reg-check__text"><?php echo __('auth_terms_agree'); ?></span>
                </label>

                <!-- Actions -->
                <div class="reg-actions">
                    <button type="button" class="reg-btn-prev" data-goto="2">
                        <i class="fas fa-arrow-left"></i> <?php echo e(__('auth_back')); ?>
                    </button>
                    <button type="submit" class="reg-submit" id="regBtn">
                        <span class="reg-submit__text"><i class="fas fa-user-plus"></i> <?php echo e(__('auth_register_btn')); ?></span>
                    </button>
                </div>
            </div>
        </form>

        <!-- Bottom link -->
        <div class="reg-bottom">
            <?php echo __('auth_have_account'); ?> <a href="<?php echo DASH_BASE_PATH; ?>/pages/auth/login.php"><?php echo e(__('auth_login_link')); ?></a>
        </div>

<script>
/* ── Password toggle ── */
function togglePwd() {
    var inp = document.getElementById('regPassword');
    var ico = document.getElementById('regPwdIcon');
    if (inp.type === 'password') { inp.type = 'text'; ico.className = 'fas fa-eye-slash'; }
    else { inp.type = 'password'; ico.className = 'fas fa-eye'; }
}

/* ── Password strength ── */
function checkStrength(val) {
    var s = 0;
    if (val.length >= 8) s++;
    if (/[A-Z]/.test(val) && /[a-z]/.test(val)) s++;
    if (/\d/.test(val)) s++;
    if (/[^a-zA-Z0-9]/.test(val)) s++;
    document.getElementById('pwdStrength').setAttribute('data-level', s);
}

/* ═══════════════════════════════════════════
   WIZARD NAVIGATION
   ═══════════════════════════════════════════ */
(function(){
    var currentStep = 1;
    var totalSteps = 3;
    var panels = document.querySelectorAll('.reg-panel');
    var steps = document.querySelectorAll('.reg-step');
    var lines = document.querySelectorAll('.reg-step__line');

    function updateStepper() {
        steps.forEach(function(s) {
            var num = parseInt(s.getAttribute('data-step'));
            s.classList.remove('is-active', 'is-done');
            if (num === currentStep) s.classList.add('is-active');
            else if (num < currentStep) s.classList.add('is-done');
        });
        lines.forEach(function(l) {
            var num = parseInt(l.getAttribute('data-line'));
            l.classList.toggle('is-done', num < currentStep);
        });
    }

    function showPanel(target) {
        var active = document.querySelector('.reg-panel.is-active');
        var next = document.querySelector('.reg-panel[data-panel="' + target + '"]');
        if (!next || active === next) return;
        active.classList.remove('is-active');
        next.classList.add('is-active');
        currentStep = target;
        updateStepper();
        // focus first input
        var firstInput = next.querySelector('input:not([type="hidden"]), button[data-combo-trigger]');
        if (firstInput && target !== 3) setTimeout(function(){ firstInput.focus(); }, 380);
        // scroll to top of card
        document.querySelector('.auth-card').scrollIntoView({ behavior: 'smooth', block: 'start' });
    }

    function validatePanel(panelNum) {
        var panel = document.querySelector('.reg-panel[data-panel="' + panelNum + '"]');
        var inputs = panel.querySelectorAll('input[required]');
        for (var i = 0; i < inputs.length; i++) {
            if (!inputs[i].checkValidity()) {
                inputs[i].reportValidity();
                inputs[i].focus();
                return false;
            }
        }
        return true;
    }

    function buildReview() {
        var email = document.getElementById('regEmail').value || '—';
        var first = document.getElementById('regFirst').value || '';
        var last  = document.getElementById('regLast').value || '';
        var countryCode = document.getElementById('countryValue').value;
        var countryName = document.getElementById('countryText').textContent;
        var phoneCode = document.getElementById('phoneCodeValue').value;
        var phone = document.getElementById('regPhone').value || '—';
        var address = document.getElementById('regAddress').value || '—';
        var city = document.getElementById('regCity').value || '';
        var state = document.getElementById('regState').value || '';

        document.getElementById('reviewEmail').textContent = email;
        document.getElementById('reviewName').textContent = (first + ' ' + last).trim() || '—';
        document.getElementById('reviewCountry').innerHTML =
            '<span class="fi fi-' + countryCode + '"></span>' +
            '<span>' + countryName + '</span>';
        document.getElementById('reviewPhone').textContent = phoneCode + ' ' + phone;
        document.getElementById('reviewAddress').textContent = [address, city, state].filter(Boolean).join(', ') || '—';
    }

    // Wire up next/prev buttons
    document.querySelectorAll('.reg-btn-next').forEach(function(btn) {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            var target = parseInt(btn.getAttribute('data-goto'));
            if (!validatePanel(currentStep)) return;
            if (target === 3) buildReview();
            showPanel(target);
        });
    });

    document.querySelectorAll('.reg-btn-prev').forEach(function(btn) {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            var target = parseInt(btn.getAttribute('data-goto'));
            showPanel(target);
        });
    });

    // Prevent Enter key from submitting form on non-final steps
    document.getElementById('regForm').addEventListener('keydown', function(e) {
        if (e.key === 'Enter' && e.target.tagName === 'INPUT' && e.target.type !== 'submit') {
            if (currentStep < 3) {
                e.preventDefault();
                var btn = document.querySelector('.reg-panel.is-active .reg-btn-next');
                if (btn) btn.click();
            }
        }
    });
})();

/* ═══════════════════════════════════════════
   COUNTRY COMBOBOX (with country ↔ phone sync)
   ═══════════════════════════════════════════ */
(function(){
    var combos = document.querySelectorAll('[data-combo]');
    var countryCombo = document.getElementById('countryCombo');
    var phoneCombo = document.getElementById('phoneCombo');

    function setupCombo(root) {
        var trigger = root.querySelector('[data-combo-trigger]');
        var panel   = root.querySelector('[data-combo-panel]');
        var search  = root.querySelector('[data-combo-search]');
        var list    = root.querySelector('[data-combo-list]');
        var empty   = root.querySelector('[data-combo-empty]');
        var options = Array.prototype.slice.call(list.querySelectorAll('[data-combo-option]'));

        function open() {
            document.querySelectorAll('[data-combo].is-open').forEach(function(c) {
                if (c !== root) c.classList.remove('is-open');
            });
            root.classList.add('is-open');
            setTimeout(function(){ search.focus(); search.select(); }, 20);
        }

        function close() {
            root.classList.remove('is-open');
            search.value = '';
            filter();
        }

        function filter() {
            var q = (search.value || '').toLowerCase().trim();
            var shown = 0;
            options.forEach(function(o) {
                var name = (o.getAttribute('data-name') || '').toLowerCase();
                var phone = (o.getAttribute('data-phone') || '').toLowerCase();
                var match = !q || name.indexOf(q) !== -1 || phone.indexOf(q) !== -1;
                o.style.display = match ? '' : 'none';
                if (match) shown++;
            });
            empty.style.display = shown === 0 ? 'block' : 'none';
        }

        function applyToRoot(targetRoot, code, name, phone) {
            var targetOpts = targetRoot.querySelectorAll('[data-combo-option]');
            targetOpts.forEach(function(o){
                o.classList.toggle('is-selected', o.getAttribute('data-code') === code);
            });
            if (targetRoot === countryCombo) {
                document.getElementById('countryFlag').className = 'fi fi-' + code + ' reg-combo__flag';
                document.getElementById('countryText').textContent = name;
                document.getElementById('countryValue').value = code;
            } else {
                document.getElementById('phoneFlag').className = 'fi fi-' + code + ' reg-combo__flag';
                document.getElementById('phoneText').textContent = phone;
                document.getElementById('phoneCodeValue').value = phone;
            }
        }

        function selectOpt(opt) {
            var code = opt.getAttribute('data-code');
            var name = opt.getAttribute('data-name');
            var phone = opt.getAttribute('data-phone');
            applyToRoot(root, code, name, phone);
            // Sync to the other combobox
            var other = (root === countryCombo) ? phoneCombo : countryCombo;
            if (other) applyToRoot(other, code, name, phone);
            close();
        }

        trigger.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            root.classList.contains('is-open') ? close() : open();
        });

        search.addEventListener('input', filter);
        search.addEventListener('click', function(e) { e.stopPropagation(); });
        search.addEventListener('keydown', function(e) {
            if (e.key === 'Enter') {
                e.preventDefault();
                var first = options.filter(function(o){ return o.style.display !== 'none'; })[0];
                if (first) selectOpt(first);
            }
        });

        options.forEach(function(o) {
            o.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                selectOpt(o);
            });
        });
    }

    combos.forEach(setupCombo);

    document.addEventListener('click', function(e) {
        combos.forEach(function(c) {
            if (!c.contains(e.target)) c.classList.remove('is-open');
        });
    });

    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            combos.forEach(function(c) { c.classList.remove('is-open'); });
        }
    });
})();

/* ── Submit ── */
function handleRegister(e) {
    e.preventDefault();
    if (!document.getElementById('regTerms').checked) {
        alert('<?php echo e(__('auth_terms_required')); ?>');
        return false;
    }
    var btn = document.getElementById('regBtn');
    btn.classList.add('is-loading');
    setTimeout(function() {
        btn.classList.remove('is-loading');
        window.location.href = '<?php echo DASH_BASE_PATH; ?>/pages/auth/login.php';
    }, 1500);
    return false;
}

function handleSocial() {
    window.location.href = '<?php echo DASH_BASE_PATH; ?>/';
}
</script>

<?php require_once __DIR__ . '/../../layouts/auth-footer.php'; ?>
