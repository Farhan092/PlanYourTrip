<?php 
   require_once('../controller/sessionCheck.php');
   
?>


<html>
<head>
    <title>Currency Converter with History</title>
    <script src="../asset/js/currencyAjax.js"></script>
    <link rel="stylesheet" href="../asset/css/currency.css">

</head>
<body>
<header>
        <div class="header-container">
            <!-- <img src="" alt="Logo"> -->
            <h2></h2>
        </div>
    </header>
    
    <fieldset id = "form2">
        <legend>Currency Converter</legend>
        <div>
            <form id="currencyForm" action = "../controller/currencyController.php">
                Amount:
                <input type="number" name="amount" id="amount" placeholder="Enter amount">
                From Currency:
                <select name="from-currency" id="from-currency">
                    <option value="BDT">Bangladeshi Taka (BDT)</option>
                    <option value="USD">US Dollar (USD)</option>
                    <option value="GBP">British Pound (GBP)</option>
                </select>
                To Currency:
                <select name="to-currency" id="to-currency">
                    <option value="USD">US Dollar (USD)</option>
                    <option value="GBP">British Pound (GBP)</option>
                    <option value="BDT">Bangladeshi Taka (BDT)</option>
                </select>
                <input type="button" name="submit" value="Convert" onclick="submitCurrencyForm()"/>
            </form>
            <p id="conversionResult">
            <p>
            <?php
            if (!empty($error_message)) {
                echo "<p style='color: red;'>Error: $error_message</p>";
            } else {
                echo "<p>";
                if (isset($conversion_result)) {
                    echo $conversion_result;
                } else {
                    echo "Conversion result will appear here";
                }
                echo "</p>";
            }
            ?>
            </p>
        </div>
        <!-- <h2><a href="conversionHistory.php">Conversion History</a></h2> -->


        <form action="../view/conversionHistory.php" method = "get">
            <input type="submit" name="submit" value="Conversion History" >
        </form>

        <form action="../view/home.php" method="get">
        <input type="submit" name="submit" value="Go Back">
       </form>
    </fieldset>
</body>
</html>
