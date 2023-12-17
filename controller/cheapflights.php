<span style="color: red;"  id="Booking"></span><br><br>

<?php
session_start(); 
 require_once('../model/BookingModel.php');
 $results='';
if (isset($_POST['submit4'])) {

    $from=$_SESSION['lo']['from'];
    $to=$_SESSION['lo']['to'];
  

    $results=cheapflights($from,$to);
  
}
     


?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet"  href="../asset/CSS/ShowRoom.css">
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
    <!-- <form action="MyFlightBookings.php" method="post"> -->
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

            <td><?=$results[$i]['price']?></td>

            <td>
                <input type="button" name="submit" value="Book" onclick="Flight()">
            </td>
          
            
        </tr>
<!-- </form> -->


<?php } ?>
    </table>

     <form action="../view/home.php" method="post">
     <input type="submit" name="submit" value="Go Back">

     </from>

    <script src="../asset/JS/FlightBooking.js"></script>
   
</body>
</html>
