<?php 
   require_once('../controller/sessioncheck.php');
   
?>
<span style="color: red;"  id="Add"></span><br><br>

<!DOCTYPE html>
<html>
<head>
    <title>Room Booking </title>
</head>
<body>
    <fieldset>
        <legend>Add Rooms</legend>
    <!-- <form action="../controller/AddRooms_validation.php" method="post"> -->
       
        Room Type:
        <!-- <input type="checkbox" id="r1" name="roomtype" value="single"> single
        <input type="checkbox" id="r2" name="roomtype" value="double"> double<br> -->
        <select id="roomtype" name="roomtype">
        <option value="single">single</option>
        <option value="double">double</option>
        </select><br>
        

            
        location:
        <select id="location" name="location">
        <option value="Dhaka">Dhaka</option>
        <option value="Chittagong">Chittagong</option>
        <option value="Comilla">Comilla</option>
        
    </select><br><br>
    Date:
    <input type="date" id="date" name="date"><br><br>
    Price:
    <input type="text" id="price" name="price"><br><br>

    Hotel Name:
    <input type="text" id="hotelname" name="hotelName"><br> <br>
    <input type="button" name="submit" value="Add Room" onclick="Add()">
    <!-- </form> -->
    <a href="adminHome.php">Home</a>
</fieldset>
<script src="../asset/JS/Addroom.js"></script>
</body>
</html>
