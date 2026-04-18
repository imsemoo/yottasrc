<?php
/**
 * YottaSrc Dashboard — Profile Page
 * ===================================
 * Personal details — unified form layout.
 */

$page_title = null;
$breadcrumbs_data = null;
$page_js = 'pages/profile.js';

require_once __DIR__ . '/../../layouts/config.php';

$page_title = __('profile_title') . ' — ' . SITE_NAME;
$breadcrumbs_data = [
    ['label' => __('nav_dashboard'), 'url' => DASH_BASE_PATH . '/'],
    ['label' => __('profile_settings_title'), 'url' => null],
];

require_once __DIR__ . '/../../layouts/shell.php';
require_once __DIR__ . '/../../components/phone-countries.php';

/* ══════════════════════════════════════════════════════════════════════
   ███  PROFILE  ·  MOCK DATA BLOCK  (single source of truth)  ███
   ══════════════════════════════════════════════════════════════════════
   BACKEND TEAM — PLEASE READ:

   Profile page — personal details + address + phone.
   Replace $user with the logged-in user's DB row.

   Auto-computed:
     • $initials              → first-name + last-name initials
     • $current_phone_country → looked up from $phone_countries
   ══════════════════════════════════════════════════════════════════════ */

/* ──────────────────────────────────────────
   PAGE STATE  ('active' | 'loading' | 'error')
   ────────────────────────────────────────── */
$page_state = $_GET['state'] ?? 'active';

/* ──────────────────────────────────────────
   USER PROFILE
   ──────────────────────────────────────────
   • first_name / last_name → display name + initials
   • email / email_verified → profile header + verified badge
   • phone_country          → ISO-2 code (matches phone-countries.php)
   • phone_code             → calling code ('+20')
   • phone_number           → local phone (no country code)
   • company                → optional (empty string if none)
   • address / city / state / postal_code → shipping/billing address
   • country                → ISO-2 code for address country
   ────────────────────────────────────────── */
$user = [
    'first_name'     => 'Islam',
    'last_name'      => 'Alhassan',
    'email'          => 'en.developer2@gmail.com',
    'email_verified' => true,
    'phone_country'  => 'EG',
    'phone_code'     => '+20',
    'phone_number'   => '100 123 4567',
    'company'        => 'YottaSrc',
    'address'        => '123 Main Street',
    'city'           => 'Cairo',
    'state'          => 'Cairo Governorate',
    'country'        => 'EG',
    'postal_code'    => '11511',
];

/* ══════════════  END OF MOCK DATA  ══════════════ */

// Auto-computed: initials for the avatar fallback.
$initials = strtoupper(substr($user['first_name'], 0, 1) . substr($user['last_name'], 0, 1));

// Auto-resolved: current phone country row (falls back to first entry).
$current_phone_country = null;
foreach ($phone_countries as $c) {
    if ($c[0] === $user['phone_country']) { $current_phone_country = $c; break; }
}
if (!$current_phone_country) $current_phone_country = $phone_countries[0];
?>

<?php
$ph_title = __('profile_settings_title');
$ph_desc = __('profile_settings_desc');
$ph_actions = '';
include __DIR__ . '/../../components/page-header.php';
?>

<!-- Account Tabs -->
<?php $account_tab = 'profile'; include __DIR__ . '/../../components/account-tabs.php'; ?>

<?php if ($page_state === 'error'): ?>
    <div class="db-card">
        <?php $error_retry = true; include __DIR__ . '/../../components/error-state.php'; ?>
    </div>

<?php elseif ($page_state === 'loading'): ?>
    <div class="db-card db-mb">
        <div class="db-card-body">
            <div class="db-skeleton-avatar">
                <div class="db-skeleton db-skeleton-avatar-circle"></div>
                <div class="db-skeleton-avatar-lines">
                    <div class="db-skeleton db-skeleton--text" style="width: 35%;"></div>
                    <div class="db-skeleton db-skeleton--text-sm" style="width: 50%;"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="db-card">
        <div class="db-card-body">
            <div class="db-form">
                <?php for ($i = 0; $i < 3; $i++): ?>
                <div class="db-skeleton-form-row">
                    <div class="db-skeleton-form-group"><div class="db-skeleton db-skeleton--text-sm"></div><div class="db-skeleton db-skeleton--text"></div></div>
                    <div class="db-skeleton-form-group"><div class="db-skeleton db-skeleton--text-sm"></div><div class="db-skeleton db-skeleton--text"></div></div>
                </div>
                <?php endfor; ?>
            </div>
        </div>
    </div>

<?php else: ?>

    <!-- Profile Card -->
    <div class="db-card db-mb">
        <div class="db-card-body">
            <div class="db-profile-avatar">
                <div class="db-profile-avatar-img"><?php echo e($initials); ?></div>
                <div class="db-profile-avatar-info">
                    <div class="db-profile-avatar-name"><?php echo e($user['first_name'] . ' ' . $user['last_name']); ?></div>
                    <div class="db-profile-avatar-email">
                        <?php echo e($user['email']); ?>
                        <?php if ($user['email_verified']): ?>
                        <span class="db-badge db-badge--active db-badge--inline"><?php echo e(__('profile_verified')); ?></span>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Unified Form -->
    <div class="db-card">
        <div class="db-card-body">
            <form class="db-form" id="profileForm" novalidate data-success-message="<?php echo e(__('profile_saved')); ?>">

                <!-- Section: Personal Details -->
                <div class="db-form-section-title"><?php echo e(__('profile_section_personal')); ?></div>

                <div class="db-form-row">
                    <div class="db-form-group" data-validate="required">
                        <label class="db-form-label" for="first_name"><?php echo e(__('profile_first_name')); ?> <span class="db-required">*</span></label>
                        <input type="text" class="db-input" id="first_name" value="<?php echo e($user['first_name']); ?>" name="first_name" placeholder="<?php echo e(__('profile_first_name_placeholder')); ?>" required>
                        <span class="db-form-error" hidden><i class="fas fa-circle-exclamation"></i> <?php echo e(__('validation_required')); ?></span>
                    </div>
                    <div class="db-form-group" data-validate="required">
                        <label class="db-form-label" for="last_name"><?php echo e(__('profile_last_name')); ?> <span class="db-required">*</span></label>
                        <input type="text" class="db-input" id="last_name" value="<?php echo e($user['last_name']); ?>" name="last_name" placeholder="<?php echo e(__('profile_last_name_placeholder')); ?>" required>
                        <span class="db-form-error" hidden><i class="fas fa-circle-exclamation"></i> <?php echo e(__('validation_required')); ?></span>
                    </div>
                </div>

                <div class="db-form-row">
                    <div class="db-form-group">
                        <label class="db-form-label" for="email">
                            <?php echo e(__('profile_email')); ?>
                            <?php if ($user['email_verified']): ?>
                            <span class="db-badge db-badge--active db-badge--inline"><?php echo e(__('profile_verified')); ?></span>
                            <?php endif; ?>
                            <a href="#" class="db-form-label-action" onclick="event.preventDefault(); DashModal.open('changeEmailModal');"><?php echo e(__('profile_change_email')); ?></a>
                        </label>
                        <input type="email" class="db-input" id="email" value="<?php echo e($user['email']); ?>" readonly disabled>
                    </div>
                    <div class="db-form-group">
                        <label class="db-form-label" for="phone_number"><?php echo e(__('profile_phone')); ?></label>
                        <div class="db-phone-wrapper">
                            <div class="db-phone-input" id="phoneInput">
                                <button type="button" class="db-phone-country" id="phoneCountryBtn" aria-expanded="false" aria-haspopup="listbox">
                                    <span class="db-phone-country-flag"><?php echo $current_phone_country[3]; ?></span>
                                    <span class="db-phone-country-code"><?php echo e($current_phone_country[2]); ?></span>
                                    <i class="fas fa-chevron-down db-phone-country-arrow"></i>
                                </button>
                                <input type="tel" class="db-phone-number" id="phone_number" name="phone_number" value="<?php echo e($user['phone_number']); ?>" placeholder="<?php echo e(__('profile_phone_placeholder')); ?>">
                                <input type="hidden" name="phone_country" id="phone_country" value="<?php echo e($user['phone_country']); ?>">
                                <input type="hidden" name="phone_code" id="phone_code" value="<?php echo e($user['phone_code']); ?>">
                            </div>
                            <div class="db-phone-dropdown" id="phoneDropdown" role="listbox">
                                <div class="db-phone-dropdown-search">
                                    <input type="text" id="phoneSearch" placeholder="<?php echo e(__('common_search')); ?>..." autocomplete="off">
                                </div>
                                <div class="db-phone-dropdown-list" id="phoneList">
                                    <?php foreach ($phone_countries as $c): ?>
                                    <div class="db-phone-dropdown-item<?php echo $c[0] === $user['phone_country'] ? ' is-selected' : ''; ?>" role="option" data-code="<?php echo e($c[0]); ?>" data-dial="<?php echo e($c[2]); ?>" data-flag="<?php echo $c[3]; ?>" data-name="<?php echo e($c[1]); ?>">
                                        <span class="db-phone-dropdown-item-flag"><?php echo $c[3]; ?></span>
                                        <span class="db-phone-dropdown-item-name"><?php echo e($c[1]); ?></span>
                                        <span class="db-phone-dropdown-item-code"><?php echo e($c[2]); ?></span>
                                    </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="db-form-group">
                    <label class="db-form-label" for="company"><?php echo e(__('profile_company')); ?></label>
                    <input type="text" class="db-input" id="company" value="<?php echo e($user['company']); ?>" name="company" placeholder="<?php echo e(__('profile_company_placeholder')); ?>">
                </div>

                <!-- Section: Address -->
                <div class="db-form-separator"></div>
                <div class="db-form-section-title"><?php echo e(__('profile_section_address')); ?></div>

                <div class="db-form-row">
                    <div class="db-form-group" style="grid-column: 1 / -1;">
                        <label class="db-form-label" for="address"><?php echo e(__('profile_street')); ?></label>
                        <input type="text" class="db-input" id="address" value="<?php echo e($user['address']); ?>" name="address" placeholder="<?php echo e(__('profile_street_placeholder')); ?>">
                    </div>
                </div>

                <div class="db-form-row">
                    <div class="db-form-group">
                        <label class="db-form-label" for="city"><?php echo e(__('profile_city')); ?></label>
                        <input type="text" class="db-input" id="city" value="<?php echo e($user['city']); ?>" name="city" placeholder="<?php echo e(__('profile_city_placeholder')); ?>">
                    </div>
                    <div class="db-form-group">
                        <label class="db-form-label" for="state"><?php echo e(__('profile_state')); ?></label>
                        <input type="text" class="db-input" id="state" value="<?php echo e($user['state']); ?>" name="state" placeholder="<?php echo e(__('profile_state_placeholder')); ?>">
                    </div>
                </div>

                <?php
                $countries_list = [
                    'EG' => 'Egypt', 'SA' => 'Saudi Arabia', 'AE' => 'United Arab Emirates',
                    'KW' => 'Kuwait', 'QA' => 'Qatar', 'BH' => 'Bahrain', 'OM' => 'Oman',
                    'JO' => 'Jordan', 'LB' => 'Lebanon', 'IQ' => 'Iraq', 'PS' => 'Palestine',
                    'SY' => 'Syria', 'LY' => 'Libya', 'TN' => 'Tunisia', 'DZ' => 'Algeria',
                    'MA' => 'Morocco', 'SD' => 'Sudan', 'YE' => 'Yemen', 'TR' => 'Turkey',
                    'US' => 'United States', 'GB' => 'United Kingdom', 'DE' => 'Germany',
                    'FR' => 'France', 'NL' => 'Netherlands', 'IT' => 'Italy', 'ES' => 'Spain',
                    'IN' => 'India', 'PK' => 'Pakistan', 'BD' => 'Bangladesh', 'CN' => 'China',
                    'JP' => 'Japan', 'KR' => 'South Korea', 'BR' => 'Brazil', 'CA' => 'Canada',
                    'AU' => 'Australia', 'RU' => 'Russia', 'ZA' => 'South Africa', 'NG' => 'Nigeria',
                ];
                $selected_country_name = $countries_list[$user['country']] ?? 'Egypt';
                $selected_country_code = strtolower($user['country']);
                ?>
                <div class="db-form-row">
                    <div class="db-form-group">
                        <label class="db-form-label" for="country"><?php echo e(__('profile_country')); ?></label>
                        <div class="db-country-wrapper">
                            <button type="button" class="db-country-select" id="countrySelectBtn" aria-expanded="false">
                                <span class="fi fi-<?php echo e($selected_country_code); ?> db-country-flag" id="countrySelectFlag"></span>
                                <span class="db-country-label" id="countrySelectLabel"><?php echo e($selected_country_name); ?></span>
                                <i class="fas fa-chevron-down db-country-arrow"></i>
                            </button>
                            <input type="hidden" name="country" id="country" value="<?php echo e($user['country']); ?>">
                            <div class="db-phone-dropdown" id="countryDropdown" role="listbox">
                                <div class="db-phone-dropdown-search">
                                    <input type="text" id="countrySearch" placeholder="<?php echo e(__('common_search')); ?>..." autocomplete="off">
                                </div>
                                <div class="db-phone-dropdown-list" id="countryList">
                                    <?php foreach ($countries_list as $code => $name): ?>
                                    <div class="db-phone-dropdown-item<?php echo $code === $user['country'] ? ' is-selected' : ''; ?>" role="option" data-code="<?php echo e($code); ?>" data-name="<?php echo e($name); ?>">
                                        <span class="fi fi-<?php echo e(strtolower($code)); ?> db-dropdown-flag"></span>
                                        <span class="db-phone-dropdown-item-name"><?php echo e($name); ?></span>
                                        <span class="db-phone-dropdown-item-code"><?php echo e($code); ?></span>
                                    </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="db-form-group">
                        <label class="db-form-label" for="postal_code"><?php echo e(__('profile_postal_code')); ?></label>
                        <input type="text" class="db-input" id="postal_code" value="<?php echo e($user['postal_code']); ?>" name="postal_code" placeholder="<?php echo e(__('profile_postal_placeholder')); ?>">
                    </div>
                </div>

                <div class="db-form-actions db-form-actions--right">
                    <button type="submit" class="db-btn db-btn--primary">
                        <i class="fas fa-check"></i> <?php echo e(__('profile_update_details')); ?>
                    </button>
                </div>
            </form>
        </div>
    </div>

<?php endif; ?>

<!-- Change Email Modal -->
<?php $modal_id = 'changeEmailModal'; $modal_title = __('profile_change_email'); $modal_size = ''; include __DIR__ . '/../../components/modal.php'; ?>
<div class="db-form db-form--modal">
    <p class="db-modal-text"><?php echo e(__('profile_change_email_desc')); ?></p>
    <div class="db-form-group">
        <label class="db-form-label" for="new_email"><?php echo e(__('profile_new_email')); ?></label>
        <input type="email" class="db-input" id="new_email" placeholder="<?php echo e(__('profile_new_email_placeholder')); ?>">
    </div>
</div>
<?php
$modal_footer = '<button class="db-btn db-btn--secondary" data-modal-close>' . e(__('common_cancel')) . '</button>
<button class="db-btn db-btn--primary" onclick="DashModal.close(this.closest(\'.db-modal-overlay\')); DashToast.show(\'success\', \'\', \'' . e(__('profile_change_email_sent')) . '\');"><i class="fas fa-paper-plane"></i> ' . e(__('profile_change_email_btn')) . '</button>';
include __DIR__ . '/../../components/modal-end.php';
?>

<div class="db-toast-container" id="toastContainer"></div>
<?php require_once __DIR__ . '/../../layouts/footer.php'; ?>
