<?php 
require_once('../controller/passwordCheck.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Change Password</title>
    <link rel="stylesheet" href="../asset/css/changePass.css">
    
</head>
<body>

<header>
        <div class="header-container">
            <h2>Change Password</h2>
        </div>
    </header>
    <fieldset id = "form2">
        <legend><b>CHANGE PASSWORD</b></legend>

        <?php
        if (!empty($errors)) {
            echo '<div style="color: red;">';
            foreach ($errors as $error) {
                echo $error . '<br>';
            }
            echo '</div>';
        } elseif (isset($successMessage)) {
            echo '<div style="color: green;">' . $successMessage . '</div>';
        }
        ?>

        <form name="changePasswordForm" action="" method="post" id = "form1">

            Current Password:<br>
            <input type="password" name="currentPassword" id="currentPassword">
            <?php echo isset($errors['currentPassword']) ? "<div style='color: red;'>{$errors['currentPassword']}</div>" : ""; ?>
            <span id="currentPasswordError" style="color: red;"></span><br>
            <br>

   
            New Password:<br>
            <input type="password" name="newPassword" id="newPassword">
            <?php echo isset($errors['newPasswordLength']) ? "<div style='color: red;'>{$errors['newPasswordLength']}</div>" : ""; ?>
            <?php echo isset($errors['newPasswordUppercase']) ? "<div style='color: red;'>{$errors['newPasswordUppercase']}</div>" : ""; ?>
            <?php echo isset($errors['newPasswordLowercase']) ? "<div style='color: red;'>{$errors['newPasswordLowercase']}</div>" : ""; ?>
            <?php echo isset($errors['newPasswordDigit']) ? "<div style='color: red;'>{$errors['newPasswordDigit']}</div>" : ""; ?>
            <?php echo isset($errors['newPasswordSpecialChar']) ? "<div style='color: red;'>{$errors['newPasswordSpecialChar']}</div>" : ""; ?>
            <span id="newPasswordError" style="color: red;"></span><br>
            <br>


            Retype New Password:<br>
            <input type="password" name="retypedPassword" id="retypedPassword">
            <?php echo isset($errors['retypedPassword']) ? "<div style='color: red;'>{$errors['retypedPassword']}</div>" : ""; ?>
            <span id="retypedPasswordError" style="color: red;"></span><br>

            <hr>

            <input type="button" name="submit" value="Submit" onclick = "validateChangePassword()">
        </form>

        <div id="successMessage" style="color: green;"></div>
        <div id="errorMessages"></div>

        <br>
        <a href="../view/profile.php">Back to Profile</a>
    </fieldset>

    <script src="../asset/js/passwordCheck.js"></script>
</body>
</html>
