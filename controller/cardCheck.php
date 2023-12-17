<?php
require_once('../controller/sessionCheck.php');
require_once '../model/paymentModel.php';

$validationErrors = [];

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $amount = isset($_POST['amount']) ? $_POST['amount'] : '';
    $cardNumber = isset($_POST['card-number']) ? $_POST['card-number'] : '';
    $cardPin = isset($_POST['card-pin']) ? $_POST['card-pin'] : '';


    $validationErrors = validateCardPayment($cardNumber, $cardPin);

    if (empty($validationErrors)) {
        $username = isset($_SESSION['username']) ? $_SESSION['username'] : '';
        $insert = insertCardPayment($amount, $cardNumber, $username);

        if ($insert) {
            echo "Payment successful. Data inserted into the database.";
        } else {
            echo "Error: Payment failed.";
        }
    }
}

function validateCardPayment($cardNumber, $cardPin)
{
    $errors = [];

    if (empty($cardNumber) || !is_numeric($cardNumber) || strlen($cardNumber) !== 16) {
        $errors[] = 'Invalid card number. Please enter a 16-digit number.';
    }

    if (empty($cardPin) || !is_numeric($cardPin) || strlen($cardPin) !== 4) {
        $errors[] = 'Invalid card PIN. Please enter a 4-digit PIN.';
    }

    return $errors;
}
?>
