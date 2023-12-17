
<?php
require_once('../model/transectionModel.php');
require_once('../controller/sessionCheck.php');

?>

<?php

if (isset($_POST["std"])){
    $data=$_POST["std"];
   $data=json_decode($data);
   $amount = $data ->amount;
   $password = $data ->password;
   

   if ($amount<0) {
    echo json_encode(["status" => "notAValidAmount"]);
   
  }
  else{
    if($password==$_SESSION['password'] )
    {
     echo  json_encode(["status" => "success"]);
     
      $status= checkBalance( $_SESSION['Phone']);
      $previousBalance = $status['Balance'];
      $newBalance = $previousBalance +$amount;

      deposite($newBalance,$_SESSION['paymentMethod'], $_SESSION['Phone']);
      $flag=true;
   
      
     
    }
    else{
      echo  json_encode(["status" => "unsuccessful"]);
     
    }

  }
  exit();
} 

  ?>





<html lang="en">
<head>
    <title>Deposite Money</title>
    <script src="../asset/js/depositeMoneyCheck.js"></script>
    <link rel="stylesheet"  href="../asset/CSS/style.css">

</head>
<body>
    <center>
      <div id="result"></div>
    <form action="" method="post" onsubmit ="return depositeMoney();">
    <p>Enter Amount</p> 
    <input type="number" name="amount" id="amount"value=""> <div id='Amount'></div>
 
    <p>Enter Password</p> 
    <input type="password" name="password" id="password" value =""><div id='Password'></div><br>
    <br>
    <input type="submit" name="submit" value ="submit">
    <br>
    </form>
    <?php
    if ($_SESSION['userName'] == 'admin') { ?>
        <a href="../view/adminHome.php"><h4>Go back</h4></a>
<?php }

      else if ($_SESSION['userName'] == 'hotelManagement') { ?>
               <a href="../view/hotelManagement.php"><h4>Go back</h4></a>
<?php }
          else { ?>
                <a href="../view/home.php"><h4>Go back</h4></a>
<?php } ?>

    
    </center>
</body>
</html>

<?php



 if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_REQUEST['amount']) && isset($_REQUEST['password'])) {
     
        $amount = $_REQUEST['amount'];
        $password=$_REQUEST['password'];
        if ($amount<0) {
          echo json_encode(["status" => "notAValidAmount"]);
        }
        else{
          if($password==$_SESSION['password'] )
          {
            echo json_encode(["status" => "success"]);
           
            $status= checkBalance( $_SESSION['Phone']);
            $previousBalance = $status['Balance'];
            $newBalance = $previousBalance +$amount;
    
            deposite($newBalance,$_SESSION['paymentMethod'], $_SESSION['Phone']);
            $flag=true;
            
           
          }
          else{
            echo json_encode(["status" => "unsuccessful"]);
          }

        }
    } 
    else {
        echo "Something went wrong";
        }
}
?>
