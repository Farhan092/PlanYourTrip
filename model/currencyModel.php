<?php
require_once('db.php');

function getConversionRate($from_currency, $to_currency) {
    $conversion_rates = [
        "BDT" => ["USD" => 0.012, "GBP" => 0.009],
        "USD" => ["BDT" => 84.56, "GBP" => 0.76],
        "GBP" => ["BDT" => 112.44, "USD" => 1.31],
    ];

    if (isset($conversion_rates[$from_currency][$to_currency])) {
        return $conversion_rates[$from_currency][$to_currency];
    } else {
        return false;
    }
}

function getConversionHistory($username) {
    $con = getConnection();

    $conversionHistory = array();
    $sql = "SELECT * FROM conversion_history WHERE Username = '$username'";

    $result = mysqli_query($con, $sql);

    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            $conversionHistory[] = $row;
        }
        mysqli_free_result($result);
    } else {

    }

    mysqli_close($con);

    return $conversionHistory;
}

function insertConversionHistory($amount, $from_currency, $to_currency, $username) {
    $con = getConnection();

    $conversion_rate = getConversionRate($from_currency, $to_currency);
    $result = $amount * $conversion_rate;

    $sql = "INSERT INTO conversion_history (Amount, From_Currency, To_Currency, Result, Timestamp, Username) 
            VALUES ('$amount', '$from_currency', '$to_currency', '$result', NOW(), '$username')";

    if (mysqli_query($con, $sql)) {
    } else {

    }

    mysqli_close($con);
}
?>
