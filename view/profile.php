<?php
session_start();
require_once('../model/profileModel.php');
//require_once('../controller/sessioncheck.php');

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}


$user_name = $_SESSION['username'];


$user = getUser($user_name);

if (!$user) {
    echo "User not found.Username: $user_name";
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Profile</title>
    <link rel="stylesheet" href="../asset/css/profile.css">
</head>
<body>

     <header>
        <div class="header-container">
            <!-- <img src="" alt="Logo"> -->
            <h2>User Profile</h2>
        </div>
    </header>
    <fieldset>
        <legend><h1><b>User Profile</b></h1></legend>
        <form action="#" method="post">
        <h2>Profile Information</h2>
            <b>Name:</b><br>
            <input type="text"  name="name" value="<?php echo $user['name']; ?>" readonly><br>

            <b>Email:</b><br>
            <input type="text"  name="email" value="<?php echo $user['email']; ?>" readonly><br>

            <b>Username:</b><br>
            <input type="text" name="username" value="<?php echo $user['username']; ?>" readonly><br>

            <b>Phone:</b><br>
            <input type="text"  name="phone" value="<?php echo $user['phone']; ?>" readonly><br>

            <b>DOB:</b><br>
            <input type="text"  name="dob" value="<?php echo $user['dob']; ?>" readonly><br>

        <hr>
        <h3><a href="updateUser.php"> Edit Profile </a></h3>
        <h3><a href="changePassword.php"> Change Password </a></h3>
        <h3><a href="deleteUser.php"> Delete User </a></h3>

        <a href="home.php">Back to Home</a>
    </fieldset>
</body>
</html>

