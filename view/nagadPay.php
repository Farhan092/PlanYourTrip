<?php
require_once('../controller/sessionCheck.php');
require_once '../controller/nagadCheck.php';


?>

<!DOCTYPE html>
<html>
<head>
    <title>Nagad Payment</title>
    <script src="../asset/js/nagadCheck.js"></script>
    <link rel="stylesheet" href="../asset/css/nagad.css">

</head>
<body>
    <header>
        <div class="header-container">
            <!-- <img src="" alt="Logo"> -->
            <h2>Nagad Payment</h2>
        </div>
    </header>
    <fieldset id = "frm2">

        <form action="" name="nagadForm" method="post" >
                <legend><h3>Nagad Payment</h3></legend>
                <b>Total Amount to Pay:</b>
                <input type="text" name="amount" value="<?= $amount ?>" readonly>
                <br><br>
                <b>Nagad Mobile Number:</b>
                <input type="text" name="mobile-number-nagad" placeholder="01XXXXXXXXX">
                <span id="nagadNumberError" style="color: red;"></span> 
                <br><br>
                <b>Nagad PIN:</b>
                <input type="password" name="nagad-pin">
                <span id="nagadPINError" style="color: red;"></span> 
                <br><br>
                <input type="button" value="Pay Now" name="pay" onclick ="validateNagad()">
        </form>
        <a href="home.php">Back to home</a>
</fieldset>
</body>
</html>
