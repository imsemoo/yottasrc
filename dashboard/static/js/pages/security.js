/**
 * YottaSrc Dashboard — Security Page JS
 * Password strength indicator + revoke all modal
 */

document.addEventListener('DOMContentLoaded', function () {

    // ── Password Strength Indicator ──
    var newPasswordInput = document.getElementById('new_password');
    var strengthEl = document.getElementById('passwordStrength');
    var strengthLabel = document.getElementById('strengthLabel');

    if (newPasswordInput && strengthEl) {
        newPasswordInput.addEventListener('input', function () {
            var val = newPasswordInput.value;

            if (!val) {
                strengthEl.hidden = true;
                strengthEl.dataset.strength = '';
                return;
            }

            strengthEl.hidden = false;
            var score = 0;

            if (val.length >= 8) score++;
            if (val.length >= 12) score++;
            if (/[A-Z]/.test(val) && /[a-z]/.test(val)) score++;
            if (/\d/.test(val)) score++;
            if (/[^A-Za-z0-9]/.test(val)) score++;

            var strength, label;
            if (score <= 1) { strength = 'weak'; label = 'Weak'; }
            else if (score === 2) { strength = 'fair'; label = 'Fair'; }
            else if (score === 3) { strength = 'good'; label = 'Good'; }
            else { strength = 'strong'; label = 'Strong'; }

            strengthEl.dataset.strength = strength;
            if (strengthLabel) strengthLabel.textContent = label;
        });
    }

    // ── Revoke All Sessions Modal ──
    var revokeAllBtn = document.getElementById('revokeAllBtn');
    if (revokeAllBtn) {
        revokeAllBtn.addEventListener('click', function () {
            window.DashModal.open('revokeAllModal');
        });
    }
});
