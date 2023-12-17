<?php 
require_once('../model/userModel.php');
require_once('forgetPassAction.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
     
</head>
<body>
    <form action="otpCheck.php" method="post">
        Enter: <input type="number" name="OTP" value="">
        <input type = "submit" name="submit" value="submit">
    </form>
  
    
</body>
</html>