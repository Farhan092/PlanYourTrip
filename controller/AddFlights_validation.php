<?php
require_once('../model/BookingModel.php');

$from = $_POST['from'];
$to = $_POST['to'];
$date = $_POST['date'];
$time = $_POST['time'];
$price = $_POST['price'];

Addflights($from, $to, $date, $time, $price);
echo json_encode(['status' => 10, 'message' => "Flight Added"]);
exit;
?>
