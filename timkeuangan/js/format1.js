const amountPaidInput = document.getElementById('amount-paid');


function parseCurrency(value) {
    return parseFloat(value.replace(/[^0-9.,]/g, '').replace(',', '.')) || 0;
}

function formatCurrency(value) {
    return new Intl.NumberFormat('id-ID', {
        style: 'currency',
        currency: 'IDR',
        minimumFractionDigits: 0,
        maximumFractionDigits: 0
    }).format(value);
}
// Store the raw input to handle continuous typing
amountPaidInput.addEventListener('input', function() {
    let numericValue = parseCurrency(this.value.replace(/\./g, '')); // Remove dots before parsing
    console.log('Numeric Value : ' + numericValue);
    this.setAttribute('data-raw', numericValue); // Store the raw numeric value
    this.value = numericValue.toLocaleString('id-ID'); // Show the raw input with thousand separators
    console.log(this.value);
});

// Format the value as IDR when the input loses focus
amountPaidInput.addEventListener('blur', function() {
    let numericValue = parseFloat(this.getAttribute('data-raw'));
    let formattedValue = formatCurrency(numericValue);
    this.value = formattedValue;
    console.log(this.value);
});
