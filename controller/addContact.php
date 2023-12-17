<?php
  require_once "../model/contactModel.php";
  require_once('../controller/sessionCheck.php');

$nameError =$emailError = $phoneError  = ""; 
$nameError =$emailError = $phoneError  = "";



         
      
if (isset($_POST["companyName"])||isset($_POST["email"])||isset($_POST["phone"])){
    $companyName = $_POST['companyName'];
    $email = $_POST['email'];
    $number = $_POST['phone'];
    $status = addContact($companyName, $email, $number);
    if ($status){
        echo 'Success';
        exit();
    } 
    else {
        echo 'Failed';
    }    
}  

if (isset($_POST["submit"])) {
    $name = $_REQUEST["companyName"];
    $email = $_REQUEST["email"];
    $phone = $_REQUEST["phone"];

    if (empty($name)) {
        $nameError = "*Name is required";
    } if (empty($email)) {
        $emailError = "*Email is required";
    } if (empty($phone)) {
        $phoneError = "*Phone is required";
    }  
    else {
        $status = addContact($name, $email, $phone);
            if ($status) {
               ?>
                  
                 <center>
                 <?php  echo"Registration Completed " ; ?>
            
           
                 <?php

            }
        
                else{
                    echo "Registratin Faild";
                }
            } 
   
            
        }
        ?>

      
<html lang="en">
<head>
    <title>Registration</title>
    <script src="../asset/js/addContactCheck.js"></script>
    <link rel="stylesheet"  href="../asset/CSS/style.css">
</head>
<body>
<form method="post" onsubmit="return addcontact()">

<h1 id="searchResult"></h1>

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
                        <td>Company Name:</td>
                        <td><input type="text"  name="companyName" id="companyName" value=""><b><?php echo $nameError ?></b></td>
                    </tr>
                    <tr>
                        <td>Email:</td>
                        <td><input type="email" name="email" id="email" value=""><b><?php echo $emailError ?></b></td>
                    </tr>
                    <tr>
                        <td>Phone</td>
                        <td><input type="number" name="phone" id="phone" value=""><b><?php echo $phoneError ?></b></td>
                    </tr>

                    <tr>
                        <td colspan="2" align="center">
                            <input type="submit" name="submit" value="Submit" >
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</form>
<center>
<a href="../view/adminHome.php">Go home</a>
</center>

</body>
</html> 