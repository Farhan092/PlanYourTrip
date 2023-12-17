<?php
require_once('db.php');

function addContact($companyName,$email,$phone){
        $con = getConnection();
        $sql = "INSERT INTO contactinfo (CompanyName,Email,Phone)
        VALUES ('$companyName', '$email', '$phone')";
    
        if (mysqli_query($con, $sql)) {
          //  echo 'Success';
            return true;
            exit();
        } else {
            return false;
        }

    }
    function updateContact($companyName,$email,$phone,$id){
        $con = getConnection();
        $sql = "UPDATE contactinfo
        SET CompanyName = '$companyName', Email = '$email', Phone = '$phone' where id = '$id'";
    
        if (mysqli_query($con, $sql)) {
            return true;
        } else {
            return false;
        }

    }

    function showAllContact() {
        $con = getConnection();
        $sql = "select * from contactinfo ";
        $result = mysqli_query($con, $sql);
        return $result; 
    }
    
    function searchContact($companyName){
        $con = getConnection();
        $sql = "select * from contactinfo where CompanyName like '%$companyName%'";
        $result = mysqli_query($con, $sql);
        return $result;   
    }
?>