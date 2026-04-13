/**
 * YottaSrc Dashboard — Order Page JS
 * Category tabs + billing cycle toggle
 */

document.addEventListener('DOMContentLoaded', function () {

    // ── Category Tab Switching ──
    var tabs = document.querySelectorAll('#categoryTabs .db-tab');
    var panels = document.querySelectorAll('.db-tab-panel[id^="plans-"]');

    tabs.forEach(function (tab) {
        tab.addEventListener('click', function () {
            var cat = tab.dataset.category;

            tabs.forEach(function (t) { t.classList.remove('active'); });
            panels.forEach(function (p) { p.classList.remove('active'); });

            tab.classList.add('active');
            var panel = document.getElementById('plans-' + cat);
            if (panel) panel.classList.add('active');
        });
    });

    // ── Billing Cycle Toggle ──
    var toggleBtns = document.querySelectorAll('#billingToggle .db-btn');
    var monthlyPrices = document.querySelectorAll('.plan-price-monthly');
    var yearlyPrices = document.querySelectorAll('.plan-price-yearly');
    var cycleLabels = document.querySelectorAll('.plan-cycle-label');

    toggleBtns.forEach(function (btn) {
        btn.addEventListener('click', function () {
            var cycle = btn.dataset.cycle;

            toggleBtns.forEach(function (b) { b.classList.remove('active'); });
            btn.classList.add('active');

            var isYearly = cycle === 'yearly';
            monthlyPrices.forEach(function (el) { el.hidden = isYearly; });
            yearlyPrices.forEach(function (el) { el.hidden = !isYearly; });
            cycleLabels.forEach(function (el) { el.textContent = isYearly ? '/ yr' : '/ mo'; });
        });
    });
});
