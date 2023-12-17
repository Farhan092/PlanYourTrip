<?php
require_once('db.php');


    function hotelRoomAdd($hotelname, $roomType,$location,$price){
        $con = getConnection();
        $sql = "INSERT INTO hotelmanagement (hotel_name, room_type,location,price)
        VALUES ('$hotelname', '$roomType','$location','$price')";
    
        if (mysqli_query($con, $sql)) {
            return true;
        } else {
            return false;
        }
        }

        function showAllRooms() {
            $con = getConnection();
            $sql = "select * from hotelmanagement";
            $result = mysqli_query($con, $sql);
            return $result; // Return the result set.
        }

        function deleteRoom($room_id){

            $con = getConnection();
            $sql = "DELETE FROM hotelmanagement WHERE room_id='$room_id'";
        
            if (mysqli_query($con, $sql)) {
                return true;
            } else {
                return false;
            }
        }
    

        ?>