
<?php
require_once('../model/contactModel.php');
require_once('../controller/sessionCheck.php');
?>
<form action="" method="post">
    Search User For Update Information: <input type="text" name="companyName" value="" /> 
    <input type="submit" value="search">
</form>

<?php

if (isset($_POST['companyName'])) {
    $companyName = $_POST['companyName']; 
    $result = searchContact($companyName);
    $user = mysqli_fetch_assoc($result);
    $_SESSION['id']=$user['id'];

    if ($user) {
        ?>
        <html lang="en">
        <head>
            <title>Edit Contact Infomation</title>
            <script src="../asset/js/editContactInfoCheck.js"></script>
        </head>
        <body>
            
         <form method="post" novalidate  onsubmit="return check();">
        Company Name : <input type="text" name="company" id="company" value="<?php echo $user['CompanyName']; ?>">
        Email : <input type="email" name="email" id="email" value="<?php echo $user['Email']; ?>">
        Phone Number : <input type="number" name="phone" id="phone" value="<?php echo $user['Phone']; ?>"> 
        <input type="submit" value="SAVE">
        </form>

        </body>
        </html>
        
        <?php
    } else {
        echo "User not found.";
    }
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = isset($_POST["company"]) ? $_POST["company"] : '';
    $email = isset($_POST["email"]) ? $_POST["email"] : '';
    $phone = isset($_POST["phone"]) ? $_POST["phone"] : '';
 
     
    if (empty($name)) {
        $nameError = "*Company Name is required";
    } 
    if (empty($email)) {
        $emailError = "*Email is required";
    } 
    if (empty($phone)) {
        $phoneError = "*Phone is required";
    } 
    else {
        if (isset($_SESSION['id'])) { 
            updateContact($name, $email, $phone, $_SESSION['id']);
            echo "Information Updated";
        } else {
            echo "User not found.";
        }
    }
}
?><br>
<a href="../view/adminHome.php">Go home</a>


