
function isValidPassword(password) {
  let uppercaseFound = false;
  let specialCharFound = false;

  for (let i = 0; i < password.length; i++) {
    let char = password[i];

    if (char >= 'A' && char <= 'Z') {
      uppercaseFound = true;
    } else if ("!@#$%^&*()_+[]{}|;:,.<>?".includes(char)) {
      specialCharFound = true;
    }
  }

  return password.length >= 8 && uppercaseFound && specialCharFound;
}

function validateChangePassword() {
  console.log('FUNCTION CALLED');
  clearErrorMessages();

  let currentPassword = document.forms["changePasswordForm"]["currentPassword"].value;
  let newPassword = document.forms["changePasswordForm"]["newPassword"].value;
  let retypedPassword = document.forms["changePasswordForm"]["retypedPassword"].value;

  let currentPasswordError = document.getElementById('currentPasswordError');
  let newPasswordError = document.getElementById('newPasswordError');
  let retypedPasswordError = document.getElementById('retypedPasswordError');
  let successMessage = document.getElementById('successMessage');

  currentPasswordError.innerHTML = '';
  newPasswordError.innerHTML = '';
  retypedPasswordError.innerHTML = '';
  successMessage.innerHTML = '';

  let hasErrors = false;

  if (currentPassword === "") {
    currentPasswordError.innerHTML = "Current Password is required";
    hasErrors = true;
  }

  if (newPassword === "") {
    newPasswordError.innerHTML = "New Password is required";
    hasErrors = true;
  } else if (!isValidPassword(newPassword)) {
    newPasswordError.innerHTML = "New Password must be 8 characters long, contain at least 1 uppercase letter, and have at least 1 special character";
    hasErrors = true;
  } else if (newPassword === currentPassword) {
    newPasswordError.innerHTML = "New Password cannot be the same as the Current Password";
    hasErrors = true;
  }

  if (retypedPassword === "" || retypedPassword !== newPassword) {
    retypedPasswordError.innerHTML = "Retyped Password does not match the New Password";
    hasErrors = true;
  }

  if (!hasErrors) {
    let xhttp = new XMLHttpRequest();

    xhttp.open('POST', '../controller/passwordCheck.php', true);
    xhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhttp.onreadystatechange = function () {
      if (xhttp.readyState == 4) {
        if (xhttp.status == 200) {
          
            let data = JSON.parse(xhttp.responseText);

            if (data.status === 1) {
             
              document.getElementById('successMessage').innerHTML = data.successMessage;

            } else if (data.errors) {
              
                alert(data.errors);
                // document.getElementById('errorMessages').innerHTML +=  error ;
              }
            }
          }
        }
    

    xhttp.send('currentPassword=' + currentPassword + '&newPassword=' + newPassword + '&retypedPassword=' + retypedPassword);
  }

  return !hasErrors;
}

function clearErrorMessages() {
  document.getElementById('currentPasswordError').innerHTML = '';
  document.getElementById('newPasswordError').innerHTML = '';
  document.getElementById('retypedPasswordError').innerHTML = '';
  document.getElementById('successMessage').innerHTML = '';
}
