<?php
require_once('../model/userModel.php');
require_once('../model/transectionModel.php');
require_once('../controller/sessionCheck.php');
?>
<?php

$nameError = $userNameError = $emailError = $phoneError  = $passwordError = "";

if (isset($_POST["submit"])) {
    $name = $_REQUEST["name"];
    $email = $_REQUEST["email"];
    $userName = $_REQUEST["userName"];
    $password = $_REQUEST["password"];
    $rePassword = $_REQUEST["rePassword"];
    $phone = $_REQUEST["phone"];
    $src = $_FILES['profilePic']['tmp_name'];
    $des = "../upload/".$_FILES['profilePic']['name'];
    $user= login($userName, $password);
    $result=searchUsers($userName);
    $check = mysqli_fetch_assoc($result);
    $numberCheck =checkBalance($phone);
    $checkMail=check($email);
    $dob="";
    

    if (empty($name)) {
        $nameError = "*Name is required";
    } if (empty($email)) {
        $emailError = "*Email is required";
    } if (empty($userName)) {
        $userNameError = "*Username is required";
    } if (empty($phone)) {
        $phoneError = "*Phone No is required";
    }  if ($password !== $rePassword) {
        $passwordError = "*Passwords do not match";
    }
    else{
        if ($userName == "" || $password == "" || $email == "" || $phone == "" ) {
            echo "null username or password or email!";
        } 
        else if($user){ ?>
         <center>
        <?php  echo"ACCOUNT EXIST " ; ?>
            
           
        </center>
        <?php
        
        }
        else if($check){ ?>
            <h1>
        <?php  echo"User Name Has been already Taken. Try Another One " ; ?>
            </h1>
        <?php
        }
        else if($checkMail){ ?>
            <h1>
        <?php  echo"This mail is  already registered " ; ?>
            </h1>
        <?php
        }
        else if($numberCheck){?>
            <h1>
          <?php  echo"This Number is registered. Try Another One " ; ?>
        </h1>
        <?php
        }
        else if($user){
            echo"ACCOUNT EXIST " ;
        ?>
           
            <?php

        }
        
        else if (!$user) {
            if(move_uploaded_file($src, $des)){
                echo "Success";
            }
            $status = signup($name, $email, $userName, $password, $phone,$dob,$des);
            if ($status) {
                $account=accountAdd($name,$userName,$phone);
                
                    $_SESSION['flag'] = 'true';?>
                  
                 <center>
                 <?php  echo"Registration Completed " ; ?>
            
           
                 </center>
                 <?php

            }
                else{
                    echo "Registratin Faild";
                }
            } 
            else {
                echo "invalid user!";
            }

    }

}
?>

<html lang="en">
<head>
    <title>Registration</title>
</head>
<body>
<form method="post"  enctype="multipart/form-data" >

    <table width="100%" height="100%">
        <tr>
            <td align="center" valign="middle">
                <table border="1" cellpadding="10" cellspacing="0">
                    <tr>
                        <td colspan="2" align="center">
                            <h2>Registration</h2>
                        </td>
                    </tr>
                    <tr>
                        <td>Name:</td>
                        <td><input type="text" name="name" value=""><b><?php echo $nameError ?></b></td>
                    </tr>
                    <tr>
                        <td>Email:</td>
                        <td><input type="email" name="email" value=""><b><?php echo $emailError ?></b></td>
                    </tr>
                    <tr>
                        <td>User Name:</td>
                        <td><input type="text" name="userName" value=""><b><?php echo $userNameError ?></b></td>
                    </tr>
                    <tr>
                        <td>PASSword:</td>
                        <td><input type="password" name="password" value=""><b><?php echo $passwordError ?></b></td>
                    </tr>
                    <tr>
                        <td>REType-PASSword:</td>
                        <td><input type="password" name="rePassword" value=""></td>
                    </tr>
                    <tr>
                        <td>Phone:</td>
                        <td><input type="number" name="phone" value=""><b><?php echo $phoneError ?></b></td>
                    </tr>
                    <tr>
                        <td>Upload Profile Pic:<input type="file" name="profilePic" value=""></td>
                    </tr>
                   

                    <tr>
                        <td colspan="2" align="center">
                            <input type="submit" name="submit" value="Submit">
                            <a href="../view/adminHome.php">Go home</a>
                        </td>
                    </tr>
                </table>
              

            </td>
        </tr>
    </table>
</form>
  
</body>
</html> 
