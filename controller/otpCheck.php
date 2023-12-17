

<?php 
require_once('../model/userModel.php');
require_once('../controller/sessionCheck.php');


if (isset($_REQUEST['OTP'])) {
    $otp = $_REQUEST['OTP'];
    $status = checkOTP($_SESSION['email'], $otp);
    $check=check($_SESSION['email']);
    if($otp===$check['OTP']){

    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
</head>
<body>
    <center>
        <form method="post" action="">
            <table border="0" cellspacing="0" cellpadding="5">
                <tr>
                    <td>
                        <fieldset>
                            <legend>CHANGE PASSWORD</legend>
                            New Password<br />
                            <input type="password" name="newPassword" value="" /><br />
                            Retype New Password<br />
                            <input type="password" name="rePassword" value="" />								
                            <hr />
                            <input type="submit" name="submit" value="Change" />     
                            <a href="home.html">Home</a>						
                        </fieldset>
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>

<?php
    }
    else{
        echo "WRONG OTP";

    }
}

if (isset($_REQUEST['newPassword']) && isset($_REQUEST['rePassword'])) {
    $newPassword = $_REQUEST['newPassword'];
    $rePassword = $_REQUEST['rePassword'];

    if ($newPassword != $rePassword) {
        echo "Password didn't Match";
    } else {
       $status= changeForgetPassword($newPassword, $_SESSION['email']);
        if($status){
        $_SESSION['password'] = $newPassword;
        OTPReset($_SESSION['email']);
        echo"Password has been reset";
        ?>
        <center>
        <a href="../view/login.php">Login Now</a>
        </center>
<?php
    }
    }
}
?>
