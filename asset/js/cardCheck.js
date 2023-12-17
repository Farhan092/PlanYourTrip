function isNumeric(value) {
  for (var i = 0; i < value.length; i++) {
    if (value[i] < '0' || value[i] > '9') {
      return false;
    }
  }
  return true;
}

function validateCard() {
  console.log('function called');
  let amount = document.forms["paymentForm"]["amount"].value;
  let cardNumber = document.forms["paymentForm"]["card-number"].value;
  let cardPin = document.forms["paymentForm"]["card-pin"].value;
  

  let cardNumberError = document.getElementById('cardNumberError');
   let cardPinError = document.getElementById('cardPinError');
  
  

  cardNumberError.innerHTML = '';
   cardPinError.innerHTML = '';
  

  let hasErrors = false;

  if (cardNumber === "" || !isNumeric(cardNumber) || cardNumber.length !== 16) {
    cardNumberError.innerHTML = "Invalid card number. Please enter a 16-digit number.";
    hasErrors = true;
  }

  if (cardPin === "" || !isNumeric(cardPin) || cardPin.length !== 4) {
    cardPinError.innerHTML = "Invalid card PIN. Please enter a 4-digit PIN.";
    hasErrors = true;
  }

  if (!hasErrors) {

    //console.log('yes');

    let xhttp = new XMLHttpRequest();

    xhttp.open('POST', '../view/cardPay.php', true);

    xhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {

        console.log('yes');


        document.getElementById('frm').innerHTML = this.responseText;

        console.log(this.responseText);
      }
    }

    xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

    
    let params = 'amount=' + amount +'&card-number=' + cardNumber + '&card-pin=' + cardPin ;

    xhttp.send(params);
  }

  return !hasErrors;
}

function clearErrorMessages() {
  document.getElementById('cardNumberError').innerHTML = '';
  document.getElementById('cardPinError').innerHTML = '';


}
