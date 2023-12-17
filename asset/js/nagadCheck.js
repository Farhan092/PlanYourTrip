

function isNumeric(value) {
  for (var i = 0; i < value.length; i++) {
      if (value[i] < '0' || value[i] > '9') {
          return false;
      }
  }
  return true;
}

function validateNagad() {
  console.log('yes');
  let amount = document.forms["nagadForm"]["amount"].value;
  var nagadNumber = document.forms["nagadForm"]["mobile-number-nagad"].value;
  var nagadPIN = document.forms["nagadForm"]["nagad-pin"].value;

  var nagadNumberError = document.getElementById('nagadNumberError');
  var nagadPINError = document.getElementById('nagadPINError');

  nagadNumberError.innerHTML = '';
  nagadPINError.innerHTML = '';

  var hasErrors = false;

  if (nagadNumber === "") {
      nagadNumberError.innerHTML = "Please enter a valid Nagad number.";
      hasErrors = true;
  }

  if (nagadPIN === "") {
      nagadPINError.innerHTML = "Please enter a valid Nagad PIN.";
      hasErrors = true;
  }

  if (nagadNumber === "" || !isNumeric(nagadNumber) || nagadNumber.length !== 11) {
      nagadNumberError.innerHTML = "Invalid Nagad number. Please enter an 11-digit number.";
      hasErrors = true;
  }

  if (nagadPIN === "" || !isNumeric(nagadPIN) || nagadPIN.length !== 6) {
      nagadPINError.innerHTML = "Invalid Nagad PIN. Please enter a 6-digit PIN.";
      hasErrors = true;
  }
  if (!hasErrors) {

    //console.log('yes');

    let xhttp = new XMLHttpRequest();

    xhttp.open('POST', '../view/nagadPay.php', true);

    xhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {

        console.log('yes');


        document.getElementById('frm2').innerHTML = this.responseText;

        console.log(this.responseText);
      }
    }

    xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

    
    let params = 'amount=' + amount +'&mobile-number-nagad=' + nagadNumber + '&nagad-pin=' + nagadPIN ;

    xhttp.send(params);
  }

  return !hasErrors;
}

function clearErrorMessages() {
  document.getElementById('nagadNumberError').innerHTML = '';
  document.getElementById('nagadPINError').innerHTML = '';
}
