<?php
require_once('db.php');

function book($roomtype, $location) {
    $con = getConnection();
    $sql = "select hotel_name, room_type, location, date,Price from rooms where   room_type='{$roomtype}' and location='{$location}'";
    // $sql = "select * from rooms where  room_id=1";
    $result = mysqli_query($con, $sql);

    $resultsArray = array(); 
    while ($row = mysqli_fetch_assoc($result)) {

        $resultsArray[] = $row;
    }

   
    mysqli_close($con);

    return $resultsArray;
}
function flights($from,$to){
    $con = getConnection();
    $sql = "select * from flights where   from_='{$from}' and to_='{$to}' ";
    $result = mysqli_query($con, $sql);

    $resultsArray = array(); 
    while ($row = mysqli_fetch_assoc($result)) {

        $resultsArray[] = $row;
    }

   
    mysqli_close($con);

    return $resultsArray;





}
function myBookings($hotelname,$room_type,$location,$date){
    $con = getConnection();
    $sql = "INSERT INTO mybookings (hotel_name,room_type, location, date)
    VALUES ('$hotelname','$room_type', '$location', '$date')";
    
    $result = mysqli_query($con, $sql);

    

}

function ShowBookings(){
    $con = getConnection();
    $sql = "select * from mybookings";
    
    $result = mysqli_query($con, $sql);
    $resultsArray = array(); 
    while ($row = mysqli_fetch_assoc($result)) {

        $resultsArray[] = $row;
    }

   
    mysqli_close($con);

    return $resultsArray;

    

}

function Addrooms($hotelname,$room_type,$location,$date,$price){
    $con = getConnection();
    $sql = "INSERT INTO rooms (hotel_name,room_type, location,date, Price)VALUES ('$hotelname','$room_type', '$location','$date', '$price')";
    
    $result = mysqli_query($con, $sql);
    return;
  
    
    

}
function myFlightBookings($from,$to,$date,$time){
    $con = getConnection();
    $sql = "INSERT INTO myflightbookings (from_, to_, date,time)
    VALUES ('$from', '$to', '$date','$time')";
    
    $result = mysqli_query($con, $sql);

    

}

function ShowFlightBookings(){
    $con = getConnection();
    $sql = "select * from myflightbookings";
    
    $result = mysqli_query($con, $sql);
    $resultsArray = array(); 
    while ($row = mysqli_fetch_assoc($result)) {

        $resultsArray[] = $row;
    }

   
    mysqli_close($con);

    return $resultsArray;

    

}

function Addflights($from,$to,$date,$time,$price){
    $con = getConnection();
    $sql = "INSERT INTO flights (from_, to_,date,time, price)VALUES ('$from', '$to','$date','$time', '$price')";
    
    $result = mysqli_query($con, $sql);
    return;
  
    
    

}

function CancelRoomBooking($id){
    $con = getConnection();
    $sql = "DELETE FROM mybookings WHERE Id = $id;";
    
    $result = mysqli_query($con, $sql);
    return;
  
    
    

}
function CancelflightBooking($id){
    $con = getConnection();
    $sql = "DELETE FROM myflightbookings WHERE Id = $id;";
    
    $result = mysqli_query($con, $sql);
    return;
  
    
    

}


function cheaprooms($location){
    $con = getConnection();
    $sql = "SELECT hotel_name, room_type, location, date,Price FROM rooms WHERE location = '$location' 
    AND Price = (SELECT MIN(Price) FROM rooms WHERE location = '$location')";
    
    $result = mysqli_query($con, $sql);
    $resultsArray = array(); 
    while ($row = mysqli_fetch_assoc($result)) {

        $resultsArray[] = $row;
    }

   
    mysqli_close($con);

    return $resultsArray;

}
function cheapflights($from,$to){
    $con = getConnection();
    //echo $from.", ".$to; exit;
    $sql = "SELECT from_, to_, date, time, price FROM flights 
    WHERE from_ = '$from' AND to_ = '$to' 
    AND price = (SELECT MIN(price) FROM flights WHERE from_ = '$from' AND to_ = '$to')";

   

    
    $result = mysqli_query($con, $sql);
    $resultsArray = array(); 
    while ($row = mysqli_fetch_assoc($result)) {

        $resultsArray[] = $row;
    }

   
    mysqli_close($con);

    return $resultsArray;

}



?>




