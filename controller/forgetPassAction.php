<?php 
session_start();
require_once('../model/userModel.php');


if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $email = $_REQUEST['email'];
    $_SESSION['email'] = $email;

    forgetPass($email);
}

?>