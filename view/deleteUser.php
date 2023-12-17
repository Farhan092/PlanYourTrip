<?php
session_start();
require_once('../model/db.php');

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}

$user_name = $_SESSION['username'];
$con = getConnection();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['confirm'])) {
    
    $sql = "DELETE FROM userinfo WHERE username = '$user_name'";
    $result = mysqli_query($con, $sql);
    if ($result) {
        echo "User deleted successfully!";
        header('Location: login.php');
        exit();
    } else {
        echo "Deletion failed!";
        header('Location: profile.php');
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Change Password</title>
    <link rel="stylesheet" href="../asset/css/delete.css"> 
</head>

<body>

<form method="post">
    <button type="submit" name="confirm" value="1">Delete Account</button>
    <a href="profile.php">Back to Profile</a>
</form>

</body>
</html>




