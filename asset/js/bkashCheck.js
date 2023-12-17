function isNumeric(value) {
  for (var i = 0; i < value.length; i++) {
      if (value[i] < '0' || value[i] > '9') {
          return false;
      }
  }
  return true;
}

function validateBkash() {
  console.log('yes');
  let amount = document.forms["bkashForm"]["amount"].value;
  let bkashNumber = document.forms["bkashForm"]["mobile-number-bkash"].value;
  let bkashPIN = document.forms["bkashForm"]["bkash-pin"].value;

  var bkashNumberError = document.getElementById('bkashNumberError');
  var bkashPINError = document.getElementById('bkashPINError');

  bkashNumberError.innerHTML = '';
  bkashPINError.innerHTML = '';

  let hasErrors = false;

  if (bkashNumber === "") {
      bkashNumberError.innerHTML = "Please enter a valid bKash number.";
      hasErrors = true;
  }

  if (bkashPIN === "") {
      bkashPINError.innerHTML = "Please enter a valid bKash PIN.";
      hasErrors = true;
  }

  if (bkashNumber === "" || !isNumeric(bkashNumber) || bkashNumber.length !== 11) {
      bkashNumberError.innerHTML = "Invalid bKash number. Please enter an 11-digit number.";
      hasErrors = true;
  }

  if (bkashPIN === "" || !isNumeric(bkashPIN) || bkashPIN.length !== 5) {
      bkashPINError.innerHTML = "Invalid bKash PIN. Please enter a 5-digit PIN.";
      hasErrors = true;
  }
  if (!hasErrors) {

    //console.log('yes');

    let xhttp = new XMLHttpRequest();

    xhttp.open('POST', '../view/bkashPay.php', true);

    xhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {

        console.log('yes');


        document.getElementById('frm1').innerHTML = this.responseText;

        console.log(this.responseText);
      }
    }

    xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

    
    let params = 'amount=' + amount +'&mobile-number-bkash=' + bkashNumber + '&bkash-pin=' + bkashPIN ;

    xhttp.send(params);
  }

  return !hasErrors;
}

function clearErrorMessages() {
  document.getElementById('bkashNumberError').innerHTML = '';
  document.getElementById('bkashPINError').innerHTML = '';
}
