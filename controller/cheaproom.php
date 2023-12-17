<span style="color: red;"  id="Booking"></span><br><br>
<?php
session_start(); 
 require_once('../model/BookingModel.php');
 $results='';
if (isset($_POST['submit4'])) {

    $location=$_SESSION['lo']['location'];
  

    $results=cheaprooms($location);
  
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
            <td>Hotel Name  </td>
            <td>RoomType</td>
            <td>Location</td>
            <td>Date</td>
            <td>Price</td>
            
            
        </tr>

    <?php for ($i = 0; $i < count($results); $i++) { ?>
    <!-- <form action="MyBookings.php" method="post">  -->
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

            <td><?=$results[$i]['Price']?>
                
            </td>
            <td>
                <input type="submit" name="submit" value="Book" onclick="Booking()">
            </td>
        </tr>
      
    
    <!-- </form> -->
<?php } ?>
    </table>
    <a href="../view/Room_Book.php">Go Back</a>

    <script src="../asset/JS/Booking.js"></script>
   
</body>
</html>