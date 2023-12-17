<?php

function validateProfileUpdate($data) {
    $errors = [];

    $newName = $data['name'];
    $newEmail = $data['email'];
    $newPhone = $data['phone'];
    //$newDOB = $data['dob'];
    


    if (!isValidEmail($newEmail)) {
        $errors[] = "Invalid or empty email address.";
    }


    if (!isValidName($newName)) {
        $errors[] = " Name can only contain letters and spaces.";
    }


    if (!isValidMobileNumber($newPhone)) {
        $errors[] = "Invalid mobile number. Only numeric values are allowed.";
    }

    

    return $errors;
}


function isValidEmail($email) {
  if (strpos($email, '@') === false || strpos($email, '.') === false) {
      return false;
  }

  return true;
}





function isValidName($name) {
    for ($i = 0; $i < strlen($name); $i++) {
        $char = $name[$i];
        if (!isValidLetterOrSpace($char)) {
            return false;
        }
    }
    return true;
}

function isValidMobileNumber($phone) {
    for ($i = 0; $i < strlen($phone); $i++) {
        $char = $phone[$i];
        if (!isValidDigit($char)) {
            return false;
        }
    }
    return true;
}



function isValidLetterOrNumber($char) {
    return (isLetter($char) || isNumber($char));
}

function isLetter($char) {
    return (($char >= 'a' && $char <= 'z') || ($char >= 'A' && $char <= 'Z'));
}

function isNumber($char) {
    return ($char >= '0' && $char <= '9');
}

function isValidLetterOrSpace($char) {
    return (isLetter($char) || $char === ' ');
}

function isValidDigit($char) {
    return ($char >= '0' && $char <= '9');
}


?>
