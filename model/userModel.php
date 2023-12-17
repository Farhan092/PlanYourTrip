<?php
require_once('db.php');
function login($userName,$password)
{
    $con = getConnection();
    $sql = "SELECT * FROM userinfo WHERE userName='$userName' AND password='$password'";
    $result = mysqli_query($con, $sql);
    $user = mysqli_fetch_assoc($result);
    return $user;

}


function signup($name, $email, $userName, $password, $phone, $dob,$des)
{
    $con = getConnection();
    $sql = "INSERT INTO userinfo (Name, Email, UserName, Password, Phone, DOB,ProfilePic)
    VALUES ('$name', '$email', '$userName', '$password', '$phone', '$dob','$des')";

    if (mysqli_query($con, $sql)) {
        return true;
    } else {
        return false;
    }
}

function showAllUsers() {
    $con = getConnection();
    $sql = "select * from userinfo where userName!='admin'";
    $result = mysqli_query($con, $sql);
    return $result; 
}

function searchUsers($userName){
    $con = getConnection();
    $sql = "select * from userinfo where userName ='$userName'";
    $result = mysqli_query($con, $sql);
    return $result;   
}

function changePassword($newPassword,$userName)
{
    $con = getConnection();
    $sql="UPDATE userinfo SET Password ='$newPassword' WHERE UserName='$userName'";
    $result = mysqli_query($con, $sql);
    return $result;   
}

function forgetPass($email){
    $con= getConnection();
    $sql ="select * from userinfo where Email = '$email'";
    $result = mysqli_query($con, $sql);
    $otp = mt_rand(100000, 999999);

    if(mysqli_num_rows($result)>0){
        $subject ="Password recovery";
        $body = "OTP: $otp";
        $from = "from: fatindaraz.com";
        if(mail($email,$subject,$body,$from)){

            $sql_1 ="UPDATE userinfo SET OTP='$otp' where email= '$email'";
            $result_1 = mysqli_query($con, $sql_1);
            
            header("Location: otpVerify.php");
            echo "mail send";
        }else{
            echo "faild";
           
        }
    }
    else{
        $_SESSION["email_err_msg"]="Email not found";
       
    }

}

    function checkOTP($email,$otp){
        $con= getConnection();
        $sql ="select * from userinfo where Email = '$email' and OTP ='$otp'";
        $result = mysqli_query($con, $sql);
        $user = mysqli_fetch_assoc($result);
        return $user;
    }

    function changeForgetPassword($newPassword,$email)
    {
    $con = getConnection();
    $sql="UPDATE userinfo SET Password ='$newPassword' WHERE email ='$email'";
    $result = mysqli_query($con, $sql);
    return $result;      
   
    }
    function OTPReset($email)
    {
        $con= getConnection();
        $sql ="UPDATE userinfo SET OTP ='0' WHERE email ='$email'";
        $result = mysqli_query($con, $sql);
        
        return $result;
    }

    function check($email){
        $con= getConnection();
        $sql ="SELECT * FROM userinfo WHERE Email='$email'";
        $result = mysqli_query($con, $sql);
        $user = mysqli_fetch_assoc($result);
        return $user;
    }
  


    function deleteUser($userName){

        $con = getConnection();
        $sql = "DELETE FROM userinfo WHERE userName='$userName'";
    
        if (mysqli_query($con, $sql)) {
            return true;
        } else {
            return false;
        }
    }

    function checkmail($email){
        $con= getConnection();
        $sql ="SELECT * FROM userinfo WHERE Email='$email'";
        $result = mysqli_query($con, $sql);
        return $result;
    }
  

?>