/**
 * YottaSrc Dashboard — Profile Page JS
 * Phone country selector + country searchable dropdown
 */

document.addEventListener('DOMContentLoaded', function () {

    // ═══ Generic searchable dropdown helper ═══
    function initSearchableDropdown(config) {
        var btn = document.getElementById(config.btnId);
        var dropdown = document.getElementById(config.dropdownId);
        var search = document.getElementById(config.searchId);
        var list = document.getElementById(config.listId);
        if (!btn || !dropdown) return;

        btn.addEventListener('click', function (e) {
            e.stopPropagation();
            var isOpen = dropdown.classList.contains('is-open');
            closeAllDropdowns();
            if (!isOpen) {
                dropdown.classList.add('is-open');
                btn.setAttribute('aria-expanded', 'true');
                if (search) { search.value = ''; filterItems(list, ''); setTimeout(function () { search.focus(); }, 50); }
            }
        });

        if (search) {
            search.addEventListener('input', function () { filterItems(list, search.value.toLowerCase()); });
            search.addEventListener('click', function (e) { e.stopPropagation(); });
        }

        list.addEventListener('click', function (e) {
            var item = e.target.closest('.db-phone-dropdown-item');
            if (!item) return;
            config.onSelect(item);
            list.querySelectorAll('.db-phone-dropdown-item').forEach(function (el) { el.classList.remove('is-selected'); });
            item.classList.add('is-selected');
            dropdown.classList.remove('is-open');
            btn.setAttribute('aria-expanded', 'false');
        });

        document.addEventListener('click', function (e) {
            if (!dropdown.contains(e.target) && !btn.contains(e.target)) {
                dropdown.classList.remove('is-open');
                btn.setAttribute('aria-expanded', 'false');
            }
        });
    }

    function closeAllDropdowns() {
        document.querySelectorAll('.db-phone-dropdown.is-open').forEach(function (d) { d.classList.remove('is-open'); });
    }

    function filterItems(list, query) {
        if (!list) return;
        list.querySelectorAll('.db-phone-dropdown-item').forEach(function (item) {
            var name = (item.dataset.name || '').toLowerCase();
            var code = (item.dataset.code || '').toLowerCase();
            var dial = (item.dataset.dial || '').toLowerCase();
            var match = name.indexOf(query) !== -1 || code.indexOf(query) !== -1 || dial.indexOf(query) !== -1;
            item.style.display = match ? '' : 'none';
        });
    }

    // Escape closes all
    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape') closeAllDropdowns();
    });


    // ═══ Phone Country Selector ═══
    initSearchableDropdown({
        btnId: 'phoneCountryBtn',
        dropdownId: 'phoneDropdown',
        searchId: 'phoneSearch',
        listId: 'phoneList',
        onSelect: function (item) {
            var btn = document.getElementById('phoneCountryBtn');
            btn.querySelector('.db-phone-country-flag').textContent = item.dataset.flag;
            btn.querySelector('.db-phone-country-code').textContent = item.dataset.dial;
            var countryInput = document.getElementById('phone_country');
            var codeInput = document.getElementById('phone_code');
            if (countryInput) countryInput.value = item.dataset.code;
            if (codeInput) codeInput.value = item.dataset.dial;
        }
    });


    // ═══ Country Searchable Select ═══
    initSearchableDropdown({
        btnId: 'countrySelectBtn',
        dropdownId: 'countryDropdown',
        searchId: 'countrySearch',
        listId: 'countryList',
        onSelect: function (item) {
            var label = document.getElementById('countrySelectLabel');
            var hidden = document.getElementById('country');
            var flag = document.getElementById('countrySelectFlag');
            if (label) label.textContent = item.dataset.name;
            if (hidden) hidden.value = item.dataset.code;
            if (flag) {
                flag.className = 'fi fi-' + item.dataset.code.toLowerCase() + ' db-country-flag';
            }
        }
    });
});
