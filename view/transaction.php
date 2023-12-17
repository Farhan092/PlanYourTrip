<?php
require_once('../controller/sessionCheck.php');
require_once('../model/transactionModel.php');
$username = isset($_SESSION['username']) ? $_SESSION['username'] : '';
$paymentDetails = getPaymentDetails($username);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Transaction Details</title>
    <link rel="stylesheet" href="../asset/css/transaction.css">
</head>
<body>
    <h2>Transaction Details</h2>
    <table border="1">
        <tr>
            <th>Payment ID</th>
            <th>Payment Method</th>
            <th>Card Number</th>           
            <th>Mobile Number</th>           
            <th>Payment Amount</th>
        </tr>
        <?php foreach ($paymentDetails as $payment): ?>
        <tr>
            <td><?= $payment['payment_id'] ?></td>
            
            <td><?= $payment['payment_method'] ?></td>
            <td><?= $payment['card_number'] ?></td>
            <td><?= $payment['mobile_number'] ?></td>

            <td><?= $payment['payment_amount'] ?></td>
            
        </tr>
        <?php endforeach; ?>
    </table>
    <h2><a href="home.php" class = "back-link" >Back</a></h2>
</body>
</html>
