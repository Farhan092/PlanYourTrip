<?php 

if (!isset($_SESSION)) {
    session_start();
  }
    // session_start();
    if(!isset($_SESSION['flag'])){
        header('location:view/login.php');
    }

   
?>