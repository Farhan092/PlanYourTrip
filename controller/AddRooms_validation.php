<?php
 require_once('../model/BookingModel.php');
// if (isset($_POST['submit'])) {
    
    $roomtype = $_POST['roomtype'];
    $location = $_POST['location'];
    $price=$_POST['price'];
    $date=$_POST['date'];
    $Rname=$_POST['hotelname'];
   


    Addrooms($Rname,$roomtype,$location,$date,$price);
    echo json_encode(['status' => 10, 'message' => "Room Added"]);
    exit;

    
// }




    
     
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
       
    </head>
    <body>
    <h4>Room Added</h4>
    <form action="../view/AddRooms.php" method="post">
    <input type="submit"name="submit5"value=" Go Back">
        </form>
    </body>
    </html>