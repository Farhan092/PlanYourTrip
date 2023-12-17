<?php
require_once('../controller/sessionCheck.php');
require_once('../model/db.php');
require_once('../model/profileModel.php');
require_once('../controller/profileUpdateCheck.php');

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}

$user_name = $_SESSION['username'];
$user = getUser($user_name);

if (!$user) {
    echo "User not found.";
    exit();
}

$updated = false;
$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    
    $json_data = isset($_POST['data']) ? $_POST['data'] : null;

    if ($json_data) {

        $validationData = json_decode($json_data, true);

        
        $errors = validateProfileUpdate($validationData);

        if (empty($errors)) {
            $newName = $validationData['name'];
            $newEmail = $validationData['email'];
            $newPhone = $validationData['phone'];
            $newDOB = $validationData['dob'];

            $updated = updateUser($newName, $newEmail, $user_name, $newPhone, $newDOB);

            if ($updated) {
                echo json_encode(['success' => true, 'message' => 'Profile updated successfully!', 'user' => getUser($user_name)]);
                exit();
            } else {
                echo json_encode(['success' => false, 'message' => 'Error updating profile.']);
                exit();
            }
        }
    } else {
        echo json_encode(['success' => false, 'message' => 'Invalid JSON data.']);
        exit();
    }
}

?>

<html>
<head>
    <title>Edit Profile</title>
    <script src="../asset/js/profileUpdateCheck.js"></script>
    <link rel="stylesheet" href="../asset/css/nagad.css">
</head>
<body>
<header>
        <div class="header-container">
            <!-- <img src="" alt="Logo"> -->
            <h2>Update Profile</h2>
        </div>
    </header>
    <fieldset id = "form1">
        <legend><h1><b>Edit Profile</b></h1></legend>
        <?php
        if (!empty($errors)) {
            echo '<div style="color: red;">';
            foreach ($errors as $error) {
                echo $error . '<br>';
            }
            echo '</div>';
        }
        ?>
        <form method="post" action="" name="updateProfileForm" >
            Name:<br>
            <input type="text" name="name" id="name" value="<?php echo isset($user['name']) ? $user['name'] : ''; ?>">
            <span id="nameError" style="color: red;"></span><br><br>

            Email:<br>
            <input type="text" name="email" id="email" value="<?php echo isset($user['email']) ? $user['email'] : ''; ?>">
            <span id="emailError" style="color: red;"></span><br><br>

            Phone:<br>
            <input type="text" name="phone" id="phone" value="<?php echo isset($user['phone']) ? $user['phone'] : ''; ?>">
            <span id="phoneError" style="color: red;"></span><br><br>

            Birthdate:
            <input type="date" name="dob" id="dob" value="<?php echo isset($user['dob']) ? $user['dob'] : ''; ?>">
            <span id="dobError" style="color: red;"></span><br><br>

            <hr>

            <input type="button" value="Submit" onclick="updateProfile()">
        </form>
        <br>
        <a href="profile.php">Back to Profile</a>
    </fieldset>
</body>
</html>
