<?php
require_once('../controller/sessionCheck.php');

$amount = $_SESSION['amount'] ;
//echo $amount;

$amt = intval($amount);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Payment</title>
    <link rel="stylesheet" href="../asset/css/payment.css">
    <script src="../asset/js/paymentCheck.js"></script>
</head>
<body>
    <header>
        <div class="header-container">
            <!-- <img src="" alt="Logo"> -->
            <h2>Payment Gateway</h2>
        </div>
    </header>
    <section>
        <div class="payment-form">
            <fieldset>
                <legend>Payment Details</legend>
                <form method="post" action="" onsubmit="return validateForm()">
                    <label>Total Amount to Pay: $</label>
                    <input type="text" name="amount"  value = "<?php  echo $amt ?>">
                    <span id="amountError" class="error-message"></span> 
                    <br><br>
                    <hr>
                    <br>
                    <fieldset>
                        <legend>Select Payment Method:</legend>
                        <div class="payment-methods">
                            <input type='submit' name='payment_method' formaction='cardPay.php' value='Card'>
                            <input type='submit' name='payment_method' formaction='bkashPay.php' value='bKash'>
                            <input type='submit' name='payment_method' formaction='nagadPay.php' value='Nagad'>
                        </div>
                    </fieldset>
                    <br>
                    <hr>
                    <br>
                </form>
                <a href="home.php" class="back-link">Back</a>
            </fieldset>
        </div>
    </section>
</body>
</html>

