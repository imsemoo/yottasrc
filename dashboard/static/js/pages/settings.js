/**
 * YottaSrc Dashboard — Settings Page JS
 * Theme/language/currency switching + close account modal trigger
 */

document.addEventListener('DOMContentLoaded', function () {

    // ── Close Account Modal trigger ──
    var closeBtn = document.getElementById('closeAccountBtn');
    if (closeBtn) {
        closeBtn.addEventListener('click', function () {
            window.DashModal.open('closeAccountModal');
        });
    }

    // ── Theme Setting (sync with global theme toggle) ──
    var themeSelect = document.getElementById('settingTheme');
    if (themeSelect) {
        var currentTheme = localStorage.getItem('yottasrc_theme') || 'dark';
        themeSelect.value = currentTheme;

        themeSelect.addEventListener('change', function () {
            var theme = themeSelect.value;
            document.documentElement.setAttribute('data-theme', theme);
            localStorage.setItem('yottasrc_theme', theme);
        });
    }

    // ── Language Setting ──
    var langSelect = document.getElementById('settingLanguage');
    if (langSelect) {
        langSelect.addEventListener('change', function () {
            var lang = langSelect.value;
            document.cookie = 'yottasrc_lang=' + lang + ';path=/;max-age=' + (30 * 24 * 60 * 60);
            window.location.href = '?lang=' + lang;
        });
    }

    // ── Currency Setting ──
    var currSelect = document.getElementById('settingCurrency');
    if (currSelect) {
        currSelect.addEventListener('change', function () {
            var curr = currSelect.value;
            document.cookie = 'yottasrc_currency=' + curr + ';path=/;max-age=' + (30 * 24 * 60 * 60);
            window.location.href = '?currency=' + curr;
        });
    }
});
