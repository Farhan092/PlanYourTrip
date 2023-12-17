<?php
require_once('../model/userModel.php');
if (isset($_POST["email"])) {
$email = $_POST["email"];
$result = checkMail($email);

if (mysqli_num_rows($result) > 0) {
    echo "<span style='color:red;'> Warning !!!! Email is not available.</span>";
} else {
    echo "<span style='color:green;'>Email is available.</span>";
}
}


//$user= login($userName, $password);
if (isset($_POST["userName"])){
$userName =$_POST["userName"];
$result=searchUsers($userName);
if (mysqli_num_rows($result) > 0) {
    echo "<span style='color:red;'> Warning !!!! UserName is not available.</span>";
} else {
    echo "<span style='color:green;'>UserName is available.</span>";
}

}


