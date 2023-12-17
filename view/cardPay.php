<?php
require_once('../controller/sessionCheck.php');
require_once '../controller/cardCheck.php';


?>

<!DOCTYPE html>
<html>
<head>
    <title>Card Payment</title>
    <script src="../asset/js/cardCheck.js"></script>
    <link rel="stylesheet" href="../asset/css/card.css">
    
</head>
<body>
    <header>
        <div class="header-container">
            <!-- <img src="" alt="Logo"> -->
            <h2>Card Payment</h2>
        </div>
    </header>
    <fieldset id = "frm">
      <form  action="" name="paymentForm" method="post" >
           
                <legend><h3>Card Payment</h3></legend>
                <b>Total Amount to Pay:</b>
                <input type="text" name="amount" value="<?= $amount ?>" readonly>
                <br><br>
                <b>Card Number:</b>
                <input type="text" name="card-number" placeholder="1234 5678 9012 3456">
                <span id="cardNumberError" style="color: red;"></span> 
                <br><br>
                <b>Card PIN:</b>
                <input type="password" name="card-pin">
                <span id="cardPinError" style="color: red;"></span> 
                <br><br>
                <input type="button" value="Pay Now" name="pay" onclick = "validateCard()">

                <a href="home.php">Back to home</a>
           
        </form>
        
        </fieldset>
        <div id="successMessage" style="color: green;"></div>
        <div id="errorMessages"></div>

    
</body>
</html>
