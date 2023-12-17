<?php
require_once('db.php');

function addTourPackages($package,$destination,$accomodation,$meals,$days,$price){
        $con = getConnection();
        $sql = "INSERT INTO tourpackages (PackageNo,Destination,Accomodations,Meals,Days,Price)
        VALUES ('$package','$destination','$accomodation','$meals','$days','$price')";
    
        if (mysqli_query($con, $sql)) {
          //  echo 'Success';
            return true;
            exit();
        } else {
            return false;
        }

    }

    function showAllPackages() {
        $con = getConnection();
        $sql = "select * from tourPackages ";
        $result = mysqli_query($con, $sql);
        return $result; 
    }
    function deletePackages($package) {
        $con = getConnection();
        $sql = "delete from tourPackages where PackageNo='$package'";
        $result = mysqli_query($con, $sql);
        if (mysqli_query($con, $sql)) {
            //  echo 'Success';
              return true;
              exit();
          } else {
              return false;
          }
    }
    
    function searchPlan($destination){
        $con = getConnection();
        $sql = "select * from tourPackages where Destination like '%{$destination}%'";
       // like '%{$term}%'"
        $result = mysqli_query($con, $sql);
        return $result;   
    }
    ?>