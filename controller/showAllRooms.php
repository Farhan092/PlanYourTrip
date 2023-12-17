<?php

require_once "../model/hotelManagementModel.php";
require_once('../controller/sessionCheck.php');

?>

<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST"&& isset($_POST['deleteUser'])) {

    deleteRoom($_POST['deleteUser']);
   
    ?>
    <center>
    <h2>ROOM HAS BEEN DELETED</h2>
    </center>
    <?php
}

?>

<table border=1 align="center">
    <tr>
        <td>Hotel Name</td>
       
        <td>Room Type</td>
   
        <td>Location</td>
     
        <td>Price</td>

    </tr>
    <h3 align="center">LIST OF ALL ROOMS</h3>

  
    <?php

        
    $result =showAllRooms();

    while ($user = mysqli_fetch_assoc($result)) {
        ?>
        
        <tr>
            <td><?=$user['hotel_name']?></td>
           
            <td><?=$user['room_type']?></td>
        
            <td><?=$user['location']?></td>
            
            <td><?=$user['price']?></td>

            <form method="post">

            <input type="hidden" name="deleteUser" value="<?= $user['room_id'] ?>" >
            <td><input type="submit" value="DELETE"> </td> </td>
            </form>
        </tr>
        
    <?php
    }

    ?>

</table>

<a href="../view/hotelManagement.php"><h4>Go back</h4></a>

 