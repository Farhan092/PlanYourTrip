<?php
if (!isset($_SESSION)) {
    session_start();
}
require_once('db.php');
$username = isset($_SESSION['username']) ? $_SESSION['username'] : '';

function insertCardPayment($paymentAmount, $cardNumber, $username) {
    $con = getConnection();
    
    $sql = "INSERT INTO payments (payment_amount, card_number, payment_method, username) 
            VALUES ('$paymentAmount', '$cardNumber', 'Card', '$username')";

    return mysqli_query($con, $sql);
}

function insertBkashPayment($paymentAmount, $mobileNumber, $username) {
    $con = getConnection();
    
    $sql = "INSERT INTO payments (payment_amount, mobile_number, payment_method, username) 
            VALUES ('$paymentAmount', '$mobileNumber', 'bKash', '$username')";

    return mysqli_query($con, $sql);
}

function insertNagadPayment($paymentAmount, $mobileNumberNagad, $username) {
    $con = getConnection();
    
    $sql = "INSERT INTO payments (payment_amount, mobile_number, payment_method, username) 
            VALUES ('$paymentAmount', '$mobileNumberNagad', 'Nagad', '$username')";
            
    return mysqli_query($con, $sql);
}

?>

