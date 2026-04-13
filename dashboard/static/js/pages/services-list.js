/**
 * YottaSrc Dashboard — Services List JS
 * View switcher (table/cards) with localStorage persistence
 */

document.addEventListener('DOMContentLoaded', function () {
    var viewBtns = document.querySelectorAll('.db-view-switch__btn[data-view]');
    var views = document.querySelectorAll('.db-view');
    var storageKey = 'yotta_services_view';

    if (!viewBtns.length || !views.length) return;

    function switchView(mode) {
        // Toggle buttons
        viewBtns.forEach(function (b) { b.classList.remove('active'); });
        var activeBtn = document.querySelector('.db-view-switch__btn[data-view="' + mode + '"]');
        if (activeBtn) activeBtn.classList.add('active');

        // Toggle views
        views.forEach(function (v) { v.style.display = 'none'; });
        var target = document.getElementById('view-' + mode);
        if (target) target.style.display = '';

        // Save
        try { localStorage.setItem(storageKey, mode); } catch (e) {}
    }

    // Init from localStorage
    var saved = null;
    try { saved = localStorage.getItem(storageKey); } catch (e) {}
    if (saved && (saved === 'table' || saved === 'cards')) {
        switchView(saved);
    }

    // Click handlers
    viewBtns.forEach(function (btn) {
        btn.addEventListener('click', function () {
            switchView(btn.dataset.view);
        });
    });
});
