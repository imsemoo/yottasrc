/**
 * YottaSrc Dashboard — Add Funds (Checkout)
 * Amount card selection + summary sync + payment method sync
 */

document.addEventListener('DOMContentLoaded', function () {
    var cards = document.querySelectorAll('.db-amount-card');
    var amountInput = document.getElementById('fundsAmount');
    var summaryAdding = document.getElementById('summaryAdding');
    var summaryNewBalance = document.getElementById('summaryNewBalance');
    var summaryMethod = document.getElementById('summaryMethod');
    var confirmBtn = document.getElementById('confirmFundsBtn');
    var payBtnText = document.getElementById('payBtnText');
    var payCards = document.querySelectorAll('.db-pay-card');

    var currentBalance = 125.01;

    function updateSummary(amount) {
        amount = parseFloat(amount) || 0;
        if (summaryAdding) summaryAdding.textContent = '+€' + amount.toFixed(2);
        if (summaryNewBalance) summaryNewBalance.textContent = '€' + (currentBalance + amount).toFixed(2);
        if (confirmBtn) confirmBtn.disabled = amount < 5;
        if (payBtnText) payBtnText.textContent = amount >= 5 ? 'Pay €' + amount.toFixed(2) : 'Add Funds';
    }

    // Amount card click
    cards.forEach(function (card) {
        card.addEventListener('click', function () {
            cards.forEach(function (c) { c.classList.remove('active'); });
            card.classList.add('active');
            var val = card.dataset.amount;
            if (amountInput) amountInput.value = val;
            updateSummary(val);
        });
    });

    // Custom input
    if (amountInput) {
        amountInput.addEventListener('input', function () {
            cards.forEach(function (c) { c.classList.remove('active'); });
            cards.forEach(function (c) {
                if (c.dataset.amount === amountInput.value) c.classList.add('active');
            });
            updateSummary(amountInput.value);
        });
    }

    // Payment method sync
    payCards.forEach(function (card) {
        card.addEventListener('click', function () {
            payCards.forEach(function (c) { c.classList.remove('db-pay-card--active'); });
            card.classList.add('db-pay-card--active');
            var radio = card.querySelector('input[type="radio"]');
            if (radio) radio.checked = true;
            var name = card.querySelector('.db-pay-card__name');
            if (name && summaryMethod) summaryMethod.textContent = name.textContent.trim();
        });
    });

    // Confirm
    if (confirmBtn) {
        confirmBtn.addEventListener('click', function () {
            var amount = parseFloat(amountInput ? amountInput.value : 0);
            if (amount >= 5 && window.DashToast) {
                DashToast.show('success', '', '€' + amount.toFixed(2) + ' added to your balance!');
            }
        });
    }
});
