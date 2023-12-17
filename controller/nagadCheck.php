<?php
require_once('../controller/sessionCheck.php');
require_once '../model/paymentModel.php';

$validationErrors = [];

if ($_SERVER["REQUEST_METHOD"] === "POST") {
$amount = isset($_POST['amount']) ? $_POST['amount'] : '';
$nagadNumber = isset($_POST['mobile-number-nagad']) ? $_POST['mobile-number-nagad'] : '';
$nagadPin = isset($_POST['nagad-pin']) ? $_POST['nagad-pin'] : '';

$validationErrors = validateNagadPayment($nagadNumber, $nagadPin);

    if (empty($validationErrors)) {
        $username = isset($_SESSION['username']) ? $_SESSION['username'] : '';
        $insert = insertNagadPayment($amount, $nagadNumber,$username);

        if ($insert) {
            echo "Payment successful. Data inserted into the database.";
        } else {
            echo "Error: Payment failed.";
        }
    }
}


function validateNagadPayment($nagadNumber, $nagadPin)
{
    $errors = [];


    if (empty($nagadNumber) || !is_numeric($nagadNumber) || strlen($nagadNumber) !== 11) {
        $errors[] = 'Invalid Nagad number. Please enter an 11-digit number.';
    }


    if (empty($nagadPin) || !is_numeric($nagadPin) || strlen($nagadPin) !== 6) {
        $errors[] = 'Invalid Nagad PIN. Please enter a 6-digit PIN.';
    }

    

    return $errors;
}

?>
