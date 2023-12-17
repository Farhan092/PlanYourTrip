<?php
 require_once('../model/BookingModel.php');
 //require_once('../view/Room_Book.php');
 require_once('../model/NotificationModel.php');
 $results='';



 
// if (isset($_POST['submit'])) {
    $roomType = $_POST['roomtype'];
    $location = $_POST['location'];
    $date = $_POST['date'];
    $Rname=$_POST['hotelname'];
    $time='';



    myBookings($Rname,$roomType,$location,$date);
    echo json_encode(['status' => 10, 'message' => "Room Booked."]);
    NotificationInsert($location,$Rname,$date,$time);
    return;

   

// }
// if (isset($_POST['submit1'])) {
    $results = ShowBookings();
   
// }
?>
<form action="../view/Room_Book.php" method="post">
    <input type="submit" name="submit" value="Go Back">
</form>



<!DOCTYPE html>
<html lang="en">
<head>

    <title>Document</title>
</head>
<body>


    
    <table border="1">
        <tr>
        <td>Hotel Name</td>
            <td>RoomType</td>
            <td>Location</td>
            <td>Date</td>
          
            
        </tr>

        <?php for ($i = 0; $i < count($results); $i++) { ?>
        <form action="CancelBooking.php" method="post">    
    
        <tr>

        <td><?=$results[$i]['hotel_name']?>
            <input type="hidden" name="hotelname" value="<?=$results[$i]['hotel_name']?>">
                
            </td>
            <td><?=$results[$i]['room_type']?>
            <input type="hidden" name="room_type" value="<?=$results[$i]['room_type']?>">
                
            </td>
            <td><?=$results[$i]['location']?>
            <input type="hidden" name="location" value="<?=$results[$i]['location']?>">
                
            </td>
            <td><?=$results[$i]['date']?>
            <input type="hidden" name="date" value="<?=$results[$i]['date']?>">
                
            </td>

            <input type="hidden" name="id" value="<?=$results[$i]['Id']?>">


        
            <td>
                <input type="submit" name="submit" value="Cancel Book">
            </td>
            
        </tr>
        </form>
        
   
<?php } ?>
    </table>

    <form action="../view/Room_Book.php" method="post">
    <input type="submit"name="submit5"value=" Go Back">
        </form>
</body>
</html>





   







  