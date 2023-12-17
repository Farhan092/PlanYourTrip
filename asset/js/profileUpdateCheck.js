
function isLetter(char) {
  return (char >= 'A' && char <= 'Z') || (char >= 'a' && char <= 'z');
}

function isValidLetterOrSpace(char) {
  return isLetter(char) || char === ' ';
}

function isValidName(name) {
  for (var i = 0; i < name.length; i++) {
      var char = name[i];
      if (!isValidLetterOrSpace(char)) {
          return false;
      }
  }
  return true;
}



function hasDotAndAt(email) {
  var dotCount = 0;
  var atCount = 0;
  for (var i = 0; i < email.length; i++) {
      var char = email[i];
      if (char === '.') {
          dotCount++;
      } else if (char === '@') {
          atCount++;
      }
  }
  return dotCount > 0 && atCount > 0;
}

function isAlphanumeric(str) {
  for (var i = 0; i < str.length; i++) {
      var char = str[i];
      if (!(char >= 'A' && char <= 'Z') && !(char >= 'a' && char <= 'z') && !(char >= '0' && char <= '9')) {
          return false;
      }
  }
  return true;
}

function isValidPassword(password) {
  let uppercaseFound = false;
  for (let i = 0; i < password.length; i++) {
      let char = password[i];
      if (char >= 'A' && char <= 'Z') {
          uppercaseFound = true;
          break;
      }
  }
  return password.length >= 8 && uppercaseFound;
}

function startsWith01(phone) {
  return phone.substr(0, 2) === "01";
}

function isValidDOB(dob) {
  return dob !== "";
}

function updateProfile() {
  //clearErrorMessages();

  let name = document.forms["updateProfileForm"]["name"].value;
  let email = document.forms["updateProfileForm"]["email"].value;
  let phone = document.forms["updateProfileForm"]["phone"].value;
  let dob = document.forms["updateProfileForm"]["dob"].value;

  let nameError = document.getElementById('nameError');
  let emailError = document.getElementById('emailError');
  let phoneError = document.getElementById('phoneError');
  let dobError = document.getElementById('dobError');

  nameError.innerHTML = '';
  emailError.innerHTML = '';
  phoneError.innerHTML = '';
  dobError.innerHTML = '';

  let hasErrors = false;

  if (name === "") {
    nameError.innerHTML = "Name is required";
    hasErrors = true;
  } else if (!isValidName(name)) {
    nameError.innerHTML = "Name must contain letters and space only";
    hasErrors = true;
  }

  if (email === "") {
    emailError.innerHTML = "Email is required";
    hasErrors = true;
  } else if (!hasDotAndAt(email)) {
    emailError.innerHTML = "Invalid email format!!!";
    hasErrors = true;
  }

  // if (phone === "") {
  //   phoneError.innerHTML = "Phone is required";
  //   hasErrors = true;
  // } else if (!startsWith01(phone)) {
  //   phoneError.innerHTML = "Phone number should start with 01";
  //   hasErrors = true;
  // }

  function isValidPhoneNumber(phone) {

    return /^\d+$/.test(phone);
  }
  


  if (phone === "") {
    phoneError.innerHTML = "Phone is required";
    hasErrors = true;
  } else if (!startsWith01(phone) || !isValidPhoneNumber(phone)) {
    phoneError.innerHTML = "Invalid phone number. Phone should start with 01 and must be numeric";
    hasErrors = true;
  }

  if (!isValidDOB(dob)) {
    dobError.innerHTML = "Date of Birth is required";
    hasErrors = true;
  }

  if (!hasErrors) {
    console.log('Performing AJAX request...');

   
    let xhttp = new XMLHttpRequest();


    let data = {
      'name': name,
      'email': email,
      'phone': phone,
      'dob' : dob
  };

  let result  = JSON.stringify(data);

    
    xhttp.open('POST', '../view/updateUser.php', true);

    
    xhttp.onreadystatechange = function () {
      if (this.readyState == 4) {
        if (this.status == 200) {
          
        let response = JSON.parse(this.responseText);

       
          if (response.success) {
            alert('Profile updated successfully!');
          
          } else {
            alert('Error updating profile: ' + response.message);
          }
        } else {
          alert('AJAX request failed with status ' + this.status);
        }
      }
    }

   console.log(name);
   console.log(email);
   console.log(phone);

   console.log('Phone:', phone);




   xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

  //  let data = 'name=' + name+ '&email=' + email + '&phone=' + phone+ '&dob=' + dob;

    xhttp.send('data='+result);
  }

  return !hasErrors;
}






