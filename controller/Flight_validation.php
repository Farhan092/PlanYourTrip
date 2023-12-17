<span style="color: red;"  id="Booking"></span><br><br>

<?php
session_start(); 
 require_once('../model/BookingModel.php');
 $results ='';
if (isset($_POST['submit'])) {
    $username = $_POST['name'];
    $email = $_POST['email'];
    $from = $_POST['from'];
    $to = $_POST['to'];

    $user = [
        'from'=> $from,
        'to'=> $to, 
        
    ];

$_SESSION['lo'] = $user;
  

    $N = "123456789";
    $fn = 0;
    $fe = 0;

    for ($i = 0; $i < strlen($username); $i++) {
        for ($j = 0; $j < strlen($N); $j++) {
            if ($username[$i] == $N[$j]) {
                $fn = 1;
            }
        }
    }

    if ($fn == 1) {
        echo "Name can't contain numbers<br>";
        echo '<a href="../view/Flight_Book.php">Go Back</a>';
        return;

    }

    for ($i = 0; $i < strlen($email); $i++) {
        if ($email[$i] == '@') {
            $fe = 1;
        }
    }

    if ($fe == 0) {
        echo "Email should contain @<br>";
        echo '<a href="../view/Flight_Book.php">Go Back</a>';
        return;
    }
    if ($username=="") {
        echo "Username cannot be empty.<br>";
        echo '<a href="../view/Flight_Book.php">Go Back</a>';
        return;
    }
    if ($email=="") {
        echo "Email cannot be empty.<br>";
        echo '<a href="../view/Flight_Book.php">Go Back</a>';
        return;
    }

    
    
    $results = flights($from,$to);
    if(count($results)==0){
        echo "Unavailable<br>";
        echo '<a href="../view/Flight_Book.php">Go Back</a>';
        return;
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    
</head>
<body>
<table border="1">
        <tr>
            <td>From</td>
            <td>To</td>
            <td>Date</td>
            <td>Time</td>
            <td>Price</td>
            
            
        </tr>

<?php for($i=0; $i<count($results); $i++){ ?>
    <form action="MyFlightBookings.php" method="post" >
        <tr>
            <td><?=$results[$i]['from_']?>
            <input type="hidden" id="from" name="from" value="<?=$results[$i]['from_']?>">
        
        </td>
            <td><?=$results[$i]['to_']?>
            <input type="hidden" id="to" name="to" value="<?=$results[$i]['to_']?>">
        
        </td>
            <td><?=$results[$i]['date']?>
            <input type="hidden" id="date" name="date" value="<?=$results[$i]['date']?>">
        
        </td>
            <td><?=$results[$i]['time']?>
            <input type="hidden" id="time" name="time" value="<?=$results[$i]['time']?>">
        </td>

            <td><?=$_SESSION['amount']=$results[$i]['price']?></td>

            <td>
                <input type="button" name="submit" value="Book" onclick="Flight()">
            </td>
          
            
        </tr>
</form>


<?php } ?>
    </table>

    <form action="../view/payment.php" method="post">
    <input type="submit"name="submit5"value=" Proceed to payment">
        </form>
    
    <form action="cheapflights.php" method="post">
    <input type="submit"name="submit4"value=" Cheapest Flights">
        </form>
        
        <form action="../view/Flight_Book.php" method="post">
    <input type="submit"name="submit5"value=" Go Back">
        </form>
        <script src="../asset/JS/FlightBooking.js"></script>
</body>
</html>
