<?php
 require_once('../model/BookingModel.php');
 require_once('../model/NotificationModel.php');
 $results ='';
// if (isset($_POST['submit'])) {
    $from = $_POST['from'];
    $to = $_POST['to'];
    $date = $_POST['date'];
    $time=$_POST['time'];

    myFlightBookings($from,$to,$date,$time);
  
    echo json_encode(['status' => 10, 'message' => "Flight Booked."]);
    flightNotificationInsert($from,$to,$date,$time);
    return;
// }
if (isset($_POST['submit1'])) {
    $results = ShowFlightBookings();
   
}
?>


<!DOCTYPE html>
<html lang="en">
<head>

    <title>Document</title>
</head>
<body>

<
    
    <table border="1">
        <tr>
            <td>From</td>
            <td>To</td>
            <td>Date</td>
            <td>Time</td>
          
            
        </tr>

        <?php for ($i = 0; $i < count($results); $i++) { ?>
            <form action="CancelBooking.php" method="post">    
    
    
        <tr>
            <td><?=$results[$i]['from_']?>
            <input type="hidden" name="from" value="<?=$results[$i]['from_']?>">
                
            </td>
            <td><?=$results[$i]['to_']?>
            <input type="hidden" name="to" value="<?=$results[$i]['to_']?>">
                
            </td>
            <td><?=$results[$i]['date']?>
            <input type="hidden" name="date" value="<?=$results[$i]['date']?>">
                
            </td>
            <td><?=$results[$i]['time']?>
            <input type="hidden" name="time" value="<?=$results[$i]['time']?>">
                
            </td>
            <input type="hidden" name="id" value="<?=$results[$i]['Id']?>">
            <td>
                <input type="submit" name="submit2" value="Cancel Book">
            </td>
            
            
        </tr>
        </form>
   
<?php } ?>
    </table>
    <a href="../view/Flight_Book.php">Go back</a>
</body>
</html>