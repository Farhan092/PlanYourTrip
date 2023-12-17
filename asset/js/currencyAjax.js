function submitCurrencyForm() {
  let amount = document.getElementById('amount').value;
  let fromCurrency = document.getElementById('from-currency').value;
  let toCurrency = document.getElementById('to-currency').value;

  if (fromCurrency === toCurrency) {
    document.getElementById('conversionResult').innerHTML = "<p style='color: red;'>Source and target currencies are the same. Please select different currencies.</p>";
    return;
} else if (amount === '' || isNaN(amount)) {
    document.getElementById('conversionResult').innerHTML = "<p style='color: red;'>Please enter a valid amount.</p>";
    return;
}

  let xhttp = new XMLHttpRequest();

  xhttp.open('POST', '../controller/currencyController.php', true);

  xhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
          document.getElementById('form2').innerHTML = this.responseText;
          
          
      }
  }

  xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

  let params = 'amount=' + amount + '&from-currency=' + fromCurrency + '&to-currency=' + toCurrency;

  xhttp.send(params);
}