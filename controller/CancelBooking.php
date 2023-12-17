
<?php
session_start();

require_once('../model/BookingModel.php');
require_once('../model/NotificationModel.php');
if (isset($_POST['submit'])) {
    //$id=  $_POST['id'];
    $id = $_POST['id'];
    $location = $_POST['location'];
    $date = $_POST['date'];
    $Hname=$_POST['hotelname'];
   
    CancelRoomBooking($id);
    CancelRoomNotificationInsert($location,$Hname,$date);
    $_SESSION['cancelType'] = 'room';
    echo "Room cancelled";
   

}

if (isset($_POST['submit2'])) {

    $id = $_POST['id'];
    $from = $_POST['from'];
    $to = $_POST['to'];
    $date = $_POST['date'];
    $time = $_POST['time'];

    CancelflightBooking($id);
    cancelflightNotificationInsert($from,$to,$date,$time);
    $_SESSION['cancelType'] = 'flight';
   echo "Flight Canceled";
}
if (isset($_SESSION['cancelType'])) {
    $cancelType = $_SESSION['cancelType'];
    
    // Redirect based on the 'cancelType' value
    if ($cancelType == "room") {
        header("Location: ../view/Room_Book.php");
        exit();
    } elseif ($cancelType == "flight") {
        header("Location: ../view/Flight_Book.php");
        exit();
    }
}
 





  ?>  







