<?php
require_once('../model/currencyModel.php');

session_start();
require_once('../model/db.php');

$conversionHistory = [];

if (!isset($_SESSION['username'])) {
    header('Location: ../view/login.php');
    exit();
}

$username = $_SESSION['username'];

$conversionHistory = getConversionHistory($username);



$conversion_result = "";
$error_message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $amount = $_POST["amount"];
    $from_currency = $_POST["from-currency"];
    $to_currency = $_POST["to-currency"];

    if ($from_currency === $to_currency) {
        $error_message = "Source and target currencies are the same. Please select different currencies.";
    } elseif (empty($amount)) {
        $error_message = "Please enter a valid amount.";
    } else {
        $conversion_rate = getConversionRate($from_currency, $to_currency);
        insertConversionHistory($amount, $from_currency, $to_currency, $username);

        if ($conversion_rate !== false) {
            $converted_amount = $amount * $conversion_rate;
            $conversion_result = "$amount $from_currency = $converted_amount $to_currency";
        } else {
            $conversion_result = "Conversion not supported";
        }
    }
}

include('../view/currency.php');
?>
