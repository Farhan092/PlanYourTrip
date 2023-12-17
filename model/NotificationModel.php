<?php
require_once('db.php');



function NotificationInsert($location,$hotelname,$date,$time){
    $con = getConnection();
    $sql = "INSERT INTO notification (location,hotel_name,date,time)VALUES ('$location','$hotelname','$date','$time')";
    
    $result = mysqli_query($con, $sql);
    return;
  
    
    

}
function ShowNotification(){
    $con = getConnection();
    $sql = "select * from notification";
    
    $result = mysqli_query($con, $sql);
    $resultsArray = array(); 
    while ($row = mysqli_fetch_assoc($result)) {

        $resultsArray[] = $row;
    }

   
    mysqli_close($con);

    return $resultsArray;

    

}

function flightNotificationInsert($from,$to,$date,$time){
    $con = getConnection();
    $sql = "INSERT INTO flightnotification (from_,to_,date,time)VALUES ('$from','$to','$date','$time')";
    
    $result = mysqli_query($con, $sql);
    return;
  
    
    

}

function ShowflightNotification(){
    $con = getConnection();
    $sql = "select * from flightnotification";
    
    $result = mysqli_query($con, $sql);
    $resultsArray = array(); 
    while ($row = mysqli_fetch_assoc($result)) {

        $resultsArray[] = $row;
    }

   
    mysqli_close($con);

    return $resultsArray;

    

}

function CancelRoomNotificationInsert($location,$hotelname,$date){
    $con = getConnection();
    $sql = "INSERT INTO cancelroomnotification (location,hotel_name,date)VALUES ('$location','$hotelname','$date')";
    
    $result = mysqli_query($con, $sql);
    return;


}
function cancelflightNotificationInsert($from,$to,$date,$time){
    $con = getConnection();
    $sql = "INSERT INTO cancelflightnotification (from_,to_,date,time)VALUES ('$from','$to','$date','$time')";
    
    $result = mysqli_query($con, $sql);
    return;

}




function ShowCflightNotification(){
    $con = getConnection();
    $sql = "select * from cancelflightnotification";
    
    $result = mysqli_query($con, $sql);
    $resultsArray = array(); 
    while ($row = mysqli_fetch_assoc($result)) {

        $resultsArray[] = $row;
    }

   
    mysqli_close($con);

    return $resultsArray;

    

}
function ShowCroomNotification(){
    $con = getConnection();
    $sql = "select * from cancelroomnotification";
    
    $result = mysqli_query($con, $sql);
    $resultsArray = array(); 
    while ($row = mysqli_fetch_assoc($result)) {

        $resultsArray[] = $row;
    }

   
    mysqli_close($con);

    return $resultsArray;

    

}

?>