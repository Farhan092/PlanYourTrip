<?php
require_once('../controller/sessionCheck.php');
require_once '../model/paymentModel.php';

$validationErrors = [];

if ($_SERVER["REQUEST_METHOD"] === "POST") {
$amount = isset($_POST['amount']) ? $_POST['amount'] : '';
$bkashNumber = isset($_POST['mobile-number-bkash']) ? $_POST['mobile-number-bkash'] : '';
$bkashPin = isset($_POST['bkash-pin']) ? $_POST['bkash-pin'] : '';

$validationErrors = validateBkashPayment($bkashNumber, $bkashPin);

    if (empty($validationErrors)) {
        $username = isset($_SESSION['username']) ? $_SESSION['username'] : '';
        $insert = insertBkashPayment($amount, $bkashNumber,$username);

        if ($insert) {
            echo "Payment successful. Data inserted into the database.";
        } else {
            echo "Error: Payment failed.";
        }
    }
}

    

function validateBkashPayment($bkashNumber, $bkashPin)
{
    $errors = [];


    if (empty($bkashNumber) || !is_numeric($bkashNumber) || strlen($bkashNumber) !== 11) {
        $errors[] = 'Invalid bKash number. Please enter an 11-digit number.';
    }


    if (empty($bkashPin) || !is_numeric($bkashPin) || strlen($bkashPin) !== 5) {
        $errors[] = 'Invalid bKash PIN. Please enter a 5-digit PIN.';
    }


    return $errors;
}

?>
