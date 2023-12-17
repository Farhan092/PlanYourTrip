<?php
require_once('../controller/sessionCheck.php');
require_once '../controller/bkashCheck.php';


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <title>bKash Payment</title>
    <script src="../asset/js/bkashCheck.js"></script>
    <link rel="stylesheet" href="../asset/css/bkash.css">

</head>
<body>

<header>
        <div class="header-container">
            <!-- <img src="" alt="Logo"> -->
            <h2>Bkash Payment</h2>
        </div>
    </header>
    <fieldset id="frm1">
        

        <form action="" name="bkashForm" method="post" >
            
                <legend><h3>bKash Payment</h3></legend>
                <b>Total Amount to Pay:</b>
                <input type="text" name="amount" value="<?= $amount ?>" readonly>
                <br><br>
                <b>bKash Mobile Number:</b>
                <input type="text" name="mobile-number-bkash" placeholder="01XXXXXXXXX">
                <span id="bkashNumberError" class="error"></span> 
                <br><br>
                <b>bKash PIN:</b>
                <input type="password" name="bkash-pin">
                <span id="bkashPINError" class="error"></span>
                <br><br>
                <input type="button" value="Pay Now" name="pay" onclick = "validateBkash()">

                <a href="home.php">Back to home</a>
            
        </form>
        
    </fieldset>

    <div id="successMessage" style="color: green;"></div>
        <div id="errorMessages"></div>
</body>
</html>
