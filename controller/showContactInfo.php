<?php

require_once('../model/contactModel.php');
require_once('../controller/sessionCheck.php');



   

 
 if ( isset($_POST['searchContact'])) {
    $contactName = $_POST['searchContact'];
    $result = searchContact($contactName);

    $users = array();

    while ($user = mysqli_fetch_assoc($result)) {
        $users[] = array('CompanyName' => $user['CompanyName'], 'Email' => $user['Email'], 'Phone' => $user['Phone']);
    }

    
    echo json_encode($users);
    exit();
}

require_once('../view/header.php');




?>

<script src="../asset/js/showAllContact.js"></script>
<table border=1 align="center">
    <tr>
        <td>Company Name</td>
        <td align="center"  width=30%>Email</td>
        <td>Phone Number</td>

    </tr>
    <h3 align="center">All Contact Information</h3>

   
  
    
    Search User: <input type="text" name="search" id="search" value="" onkeyup="searchContact();"/> 
    <div id ="result"></div>
    <br>
    <br>
    <br>

    <?php
  
    if (isset($_REQUEST['name'])) {
        $contactName = $_REQUEST['name'];
        $result = searchContact($contactName);


        while ($user = mysqli_fetch_assoc($result)) {
           
            ?>
            <tr>
                <td><?= $user['CompanyName'] ?></td>
                <td><?= $user['Email'] ?></td>
                <td><?= $user['Phone'] ?></td>
        
            </tr>
        <?php
        }
    }
    else{

    $result =showAllContact();
    while ($user = mysqli_fetch_assoc($result)) {
     
        ?>
        
        <tr>
            <td><?=$user['CompanyName']?></td>
            <td><?=$user['Email']?></td>
            <td><?=$user['Phone']?></td>
        </tr>
        
    <?php
    }
}

    ?>

</table>
<?php
if ($_SESSION['userName'] == 'admin') { ?>
    <a href="../view/adminHome.php"><h4>Go back</h4></a>
<?php }

else if ($_SESSION['userName'] == 'hotelManagement') { ?>
    <a href="../view/hotelManagement.php"><h4>Go back</h4></a>
<?php }
 else { ?>
    <a href="../view/home.php"><h4>Go back</h4></a>
<?php } ?>

