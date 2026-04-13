/**
 * YottaSrc Dashboard — Service Details JS
 * Tab switching
 */

document.addEventListener('DOMContentLoaded', function () {
    var tabs = document.querySelectorAll('.db-tab[data-tab]');
    var panels = document.querySelectorAll('.db-tab-panel');

    tabs.forEach(function (tab) {
        tab.addEventListener('click', function () {
            var target = tab.dataset.tab;

            // Deactivate all
            tabs.forEach(function (t) { t.classList.remove('active'); });
            panels.forEach(function (p) { p.classList.remove('active'); });

            // Activate target
            tab.classList.add('active');
            var panel = document.getElementById('tab-' + target);
            if (panel) panel.classList.add('active');
        });
    });
});
