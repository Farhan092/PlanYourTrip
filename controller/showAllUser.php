 <?php

require_once('../model/userModel.php');
require_once('../model/transectionModel.php');
require_once('../controller/sessionCheck.php');
require_once('../view/header.php');



?>
 <?php
if ( isset($_POST['searchUser'])) {
    $userName = $_POST['searchUser'];
    $result = searchUser($userName);

    $users = array();

    while ($user = mysqli_fetch_assoc($result)) {
        $users[] = array('Name' => $user['Name'], 'Email' => $user['Email'], 'UserName' => $user['UserName'], 'Phone' => $user['Phone'], 'DOB' => $user['DOB']);
    }

    
    echo json_encode($users);
    exit();
}




  if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['deleteUser'])) {
    deleteUSer( $_POST['deleteUser']);
    deleteUserTransection($_POST['deleteUser']);
    ?>
    <center>
    <h2>USER HASBEEN DELETED</h2>
    </center>
    <?php
}

?>

<link rel="stylesheet"  href="../asset/CSS/style.css">

<table border=1 align="center">
    <tr>
        <td>Name</td>
        <td align="center"  width=30%>Email</td>
        <td>User Name</td>
        <td>Phone Number</td>
        <td>Date Of Birth</td>

    </tr>
    <h3 align="center">All Users Information</h3>

    <form action="" method="post" onsubmit ="searchUser()">
    
    Search User: <input type="text" name="userName" value="" /> <br>
    <input type="submit" value="submit">
    </form>
    <?php
  
    if (isset($_REQUEST['userName'])) {
        $userName = $_REQUEST['userName'];
        $result = searchUsers($userName);


        while ($user = mysqli_fetch_assoc($result)) {
         
            ?>
            <tr>
                <td><?= $user['Name'] ?></td>
                <td><?= $user['Email'] ?></td>
                <td><?= $user['UserName'] ?></td>
                <td><?= $user['Phone'] ?></td>
                <td><?= $user['DOB'] ?></td>
                <form method="POST">
            <input type="hidden" name="deleteUser" value="<?= $user['UserName'] ?>">
            <td><input type="submit" value="DELETE">
        </tr>
        </form>
            </tr>
        <?php
        }
    }
    else {
        
    $result =showAllUsers(); 

    while ($user = mysqli_fetch_assoc($result)) {
      
        ?>
        
        <tr>
            <td><?=$user['Name']?></td>
            <td><?=$user['Email']?></td>
            <td><?=$user['UserName']?></td>
            <td><?=$user['Phone']?></td>
            <td><?=$user['DOB']?></td>
            <form method="POST">
            <input type="hidden" name="deleteUser" value="<?= $user['UserName'] ?>">
            <td><input type="submit" value="DELETE">
        </tr>
        </form>
        
    <?php

    }
}
    ?>

</table>
<a href="../view/adminHome.php"><h4>Go back</h4></a>

