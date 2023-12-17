<?php 
    require_once('../controller/sessionCheck.php');
    require_once('../view/header.php')
?>


   <html lang="en">
   <head>
	
	<title>Admin home PAge</title>
   </head>
   <body>
	
   
    <center>
	
	<a href="changePass.php">Change Password</a> <br>
	<br/>
	<a href="../controller/showAllUser.php">View Users</a> <br>
	<br/>
	<a href="..//controller/showBalanceAll.php">Show All USers Balance</a> <br>
	<br/>
	<a href="../controller/addContact.php">ADD Contact Information</a> <br>
	<br/>
	<a href="..//controller/showContactInfo.php"> Contact Information</a> <br>
	<br/>
	<a href="..//controller/editContactInfo.php"> EDIT Contact Information</a> <br>
	<br>
	<a href="..//controller/createHotelManagement.php">Create Account For Hotel Management</a><br>
	<br/>
	<br>
	<a href="..//controller/addTourPackages.php">Add Tour Packages</a><br>
	<br/>
	<br>
	<a href="..//controller/showAllTourPackages.php">Show Tour Packages</a><br>
	<br/>
	<a href="..//controller/logout.php">Logout</a>

	<h3>Sadat</h3>

	<fieldset>
        <legend><b>Admin Home</b></legend>
        <b>Add Rooms</b>

        <form action="AddRooms.php" method="post">
        <input type="submit" name="submit" value="AddRooms">

      </form><br>
      <b>Add Flights:</b>

      <form action="AddFlights.php" method="post">
        <input type="submit" name="submit2" value="Add Flights">

      </form><br>

      <b>Add Faq:</b>

      <form action="AddFAQ.php" method="post">
        <input type="submit" name="submit3" value="Add FAQ">

      </form><br>
      <form action="../controller/notification.php" method="post">
    <input type="submit"name="submit2"value=" Notifications">
        </form><br>
</center>


</body>
   </html>