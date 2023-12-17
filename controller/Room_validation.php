<span style="color: red;"  id="Booking"></span><br><br>

<?php
session_start(); 
 require_once('../model/BookingModel.php');



$results="";
if (isset($_POST['submit'])) {
    $username = $_POST['name'];
    $email = $_POST['email'];
    $roomtype = $_POST['roomtype'];
    $location = $_POST['location'];
  
    $user = [
        'location'=> $location, 
        
    ];

$_SESSION['lo'] = $user;

   
  if($username==""&&$email==""&& $roomtype==""&& $location=="" ){
    echo "Please Fill Up All the input fields";
    echo '<a href="../view/Room_Book.php">Go Back</a>';
    return;
  }

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
        echo "Name can't contain numbers.<br>";
        echo '<a href="../view/Room_Book.php">Go Back</a>';
        return;
    }

    for ($i = 0; $i < strlen($email); $i++) {
        if ($email[$i] == '@') {
            $fe = 1;
        }
    }

    if ($fe == 0) {
        echo "Email should contain @<br>";
        echo '<a href="../view/Room_Book.php">Go Back</a>';
        
    }
    if ($username=="") {
        echo "Username cannot be empty.<br>";
        echo '<a href="../view/Room_Book.php">Go Back</a>';
        return;
    }
    if ($email=="") {
        echo "Email cannot be empty.<br>";
        echo '<a href="../view/Room_Book.php">Go Back</a>';
        return;
    }

    if ($roomtype=="") {
        echo "Room type cannot be empty.<br>";
        
        echo '<a href="../view/Room_Book.php">Go Back</a>';
        return;
    }
 
    
    $results = book($roomtype,$location);
     if(count($results)==0){
        echo "Unavailable";
        echo '<a href="../view/Room_Book.php">Go Back</a><br>';
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
            <td>Hotel Name  </td>
            <td>RoomType</td>
            <td>Location</td>
            <td>Date</td>
            <td>Price</td>
            
            
        </tr>

    <?php for ($i = 0; $i < count($results); $i++) { ?>
    <!-- <form action="MyBookings.php" method="post"> -->
        <tr>

        <td><?=$results[$i]['hotel_name']?>
        <input type="hidden" id="hotelname" name="hotelname" value="<?=$results[$i]['hotel_name']?>">
        </td>
            <td><?=$results[$i]['room_type']?>
                <input type="hidden" id="roomtype" name="room_type" value="<?=$results[$i]['room_type']?>">
            </td>
            <td><?=$results[$i]['location']?>
                <input type="hidden" id="location" name="location" value="<?=$results[$i]['location']?>">
            </td>
            <td><?=$results[$i]['date']?>
                <input type="hidden" id="date" name="date" value="<?=$results[$i]['date']?>">
            </td>

            <td><?= $_SESSION['amount']=$results[$i]['Price']?>
                
            </td>
            <td>
                <input type="button" name="submit" value="Book" onclick="Booking()">
            </td>
        </tr>
      
    
    <!-- </form> -->
<?php } ?>
    </table>

    <form action="../view/payment.php" method="post">
    <input type="submit"name="submit5"value=" Proceed to payment">
        </form>
    <form action="cheaproom.php" method="post">
    <input type="submit"name="submit4"value=" Cheapest Rooms">
        </form>
        
        <form action="../view/Room_Book.php" method="post">
    <input type="submit"name="submit5"value=" Go Back">
        </form>

        

        <script src="../asset/JS/Booking.js"></script>
</body>
</html>
