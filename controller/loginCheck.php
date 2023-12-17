<?php
require_once('../model/userModel.php');

session_start();

  if (isset($_POST["std"])){
    $data=$_POST["std"];
    $data=json_decode($data);
    $userName = $data ->userName;
    $password = $data ->password;
    $_SESSION['userName'] = $userName;
    $_SESSION['password'] = $password;
    $result=searchUsers($userName);
    $check = mysqli_fetch_assoc($result);


    
        $status = login($userName, $password);
       
        
            if ($status) {
                $_SESSION['flag'] = 'true';
                
                if ($userName == 'admin') {
                    echo json_encode(["status" => "success", "redirect" => "../view/adminHome.php"]);
                }
                else if ($userName == 'hotelManagement' || $userName == 'hotelManagement1') {
                    $_SESSION['Phone'] = $status['Phone'];
                    echo json_encode(["status" => "success", "redirect" => "../view/hotelManagement.php"]);
                } else if ($userName != 'admin') {
                    $_SESSION['Phone'] = $status['Phone'];
                    $_SESSION['username'] = $status['UserName'];
                    echo json_encode(["status" => "success", "redirect" => "../view/home.php"]);
                }
                exit();
               
        }
        else{
            if($check){
                echo json_encode(["status" => "wrongPassword"]);
               
            }
            else{
                echo json_encode(["status" => "invalid"  ,"msg" => "Not a valid user signup now"]);
            
            }
        }
        exit();
      
       
       
    }
    

    $userName = $_REQUEST['userName'];
    $password = $_REQUEST['password'];
    $_SESSION['userName'] = $userName;
    $_SESSION['password'] = $password;
    $result=searchUsers($userName);
    $check = mysqli_fetch_assoc($result);


    if($userName == "" || $password == "" ){
    
        echo "null username or password!";
    
    }else{
        $status = login($userName, $password);
       
        
            if ($status) {
                $_SESSION['flag'] = 'true';
                
                if ($userName == 'admin') {
                    header('location: ../view/adminHome.php');
                }
                else if($userName=='hotelManagement'||$userName=='hotelManagement1'){
                    header('location: ../view/hotelManagement.php');
                    $_SESSION['Phone']=$status['Phone'];

                }
                else if($userName !='admin') {
                    header('location: ../view/home.php');
                  
                    $_SESSION['Phone']=$status['Phone'];
                    $_SESSION['username']=$status['UserName'];
                }
               
        }
        else{
            if($check){
               ?>
                <center>
                <h3>WRONG PASSWORD</h3>

               <br> <a href="../view/login.php">GO LOG IN PAGE</a> </center>
                <?php
            }
            else{
            echo "invalid user!";
            ?>
            <center>
                <h3>Not a valid user!! Don't worry register now</h3>
            <a href="../controller/signup.php">Register Now </a>
            </center>
            <?php
            }
        }
       
    }
?>