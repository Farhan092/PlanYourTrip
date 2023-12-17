<?php
  require_once('../controller/sessionCheck.php');
  require_once('../view/header.php');
  require_once('../model/userModel.php');
  ?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <title>Deposite  Money</title>
    <script src="../asset/js/depositeMoneyCheck.js"></script>
  </head>
  <body>
    <center>
      <form action="" method="post" onsubmit="depositeMoneyCheck()" noovalidate>
      <H2>Add Money to your account</H2>
  
      <h2> Select Method a method to deposit money</h2><hr/>
					<input type="radio"  name="paymentMethod" id="paymentMethod" value="Bkash"/>BKASH <br>
					<input type="radio" name="paymentMethod" id="paymentMethod"  value="NAGAD"/>NAGAD <br>
					<input type="radio" name="paymentMethod" id="paymentMethod"  value="ROCKET"/>ROCKET <br>
					<hr/>
          <h3>Enter your account number</h3>
          <input type="number" name="acNo" id="acNo"  value=""> <br>
          <br>
          <input type="submit" name="submit" value ="Confirm">

          </form>
    </center>


  </body>

  
<?php
require_once('../model/userModel.php');
require_once('../controller/sessionCheck.php');
 
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_REQUEST['paymentMethod']) && isset($_REQUEST['acNo'])) {
        $acNo = $_REQUEST['acNo'];
        $paymentMethod=$_REQUEST['paymentMethod'];
        $_SESSION['paymentMethod']= $paymentMethod;
        if ($acNo !== $_SESSION['Phone']) { ?>
          <center><?php echo "NOT A VALID ACCOUNT";?></center> 
            <?php
        }
        else{
          header('location: ../controller/depositeMoneyValidation.php');
        }
    } 
  
}

    ?>
    <a href="home.php">Go Home</a>
  </html>