<?php 
    require_once('../controller/sessioncheck.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room Booking</title>
    <link rel="stylesheet"  href="../asset/CSS/Room_Book.css">
</head>
<body>

    <header>
        <div class="header-container">
            
            <h2>Book Roooms</h2>
        </div>
    </header>

    <fieldset>
        <legend>RoomBook</legend>
        <form action="../controller/Room_validation.php" method="post" onsubmit="return Room()">
            Name:
            <input type="text" id="name"  name="name" ><br><br>
            Email:
            <input type="email" id="email"  name="email" ><br><br>
           Room Type:
            <input type="checkbox" id="single" name="roomtype" value="single"> single
            <input type="checkbox" id="double" name="roomtype" value="double"> double<br>
            Location:
            <select id="location" name="location">
                <option value="Dhaka">Dhaka</option>
                <option value="Chittagong">Chittagong</option>    
                <option value="Comilla">Comilla</option>
            </select><br><br>
            <input type="submit" name="submit" value="Find Room">
        </form>

        <input type="button" name="submit1" value=" My Bookings" onclick="Booking()">
        
        <form action="../controller/ShowFaq.php" method="post">
            <input type="submit" name="submit3" value=" FAQ">
        </form>

        <form action="home.php" method="post">
            <input type="submit" name="submit4" value=" Back Home">
        </form>
    </fieldset>

    <script src="../asset/js/Room_validation.js"></script>
    <script src="../asset/js/Booking.js"></script>
</body>
</html>
