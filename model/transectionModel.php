<?php
require_once('db.php');

function accountAdd($name, $userName,$phone,){
        $con = getConnection();
        $sql = "INSERT INTO transection (Name, UserName,Phone)
        VALUES ('$name', '$userName','$phone')";
    
        if (mysqli_query($con, $sql)) {
            return true;
        } else {
            return false;
        }
        }

    function deposite($balance,$paymentMethod,$phone){
        $con= getConnection();
        $sql ="UPDATE transection SET Balance = '$balance', PaymentMethod = '$paymentMethod' WHERE Phone ='$phone'";    
        $result = mysqli_query($con, $sql);
        //$user = mysqli_fetch_assoc($result);
        return $result;
    }

    function checkBalance($phone){
        $con= getConnection();
        $sql ="SELECT * FROM transection WHERE Phone='$phone'";    
        $result = mysqli_query($con, $sql);
        $user = mysqli_fetch_assoc($result);
        return $user;

    }
    function showAllUsersBalance() {
        $con = getConnection();
        $sql = "SELECT * FROM transection WHERE userName != 'admin' ORDER BY Balance DESC;";
        $result = mysqli_query($con, $sql);
        return $result;
    }
    function deleteUserTransection($userName){

        $con = getConnection();
        $sql = "DELETE FROM transection WHERE userName='$userName'";
    
        if (mysqli_query($con, $sql)) {
            return true;
        } else {
            return false;
        }
    }

?>