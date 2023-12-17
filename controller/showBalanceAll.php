<?php

require_once('../model/transectionModel.php');
require_once('../controller/sessionCheck.php');
require_once('../view/header.php');

?>
 
<table border=1 align="center">
    <tr>
        <td>Name</td>
        <td align="center"  width=30%>User Name</td>
        <td>Account Number</td>
        <td>Balance</td>
        <td>Payment Method</td>

    </tr>
    <h3 align="center">All Users AvailAable Balance</h3>

  
    <?php

        
    $result =showAllUsersBalance();

    while ($user = mysqli_fetch_assoc($result)) {
        ?>
        
        <tr>
            <td><?=$user['Name']?></td>
            <td><?=$user['UserName']?></td>
            <td><?=$user['Phone']?></td>
            <td><?=$user['Balance']?></td>
            <td><?=$user['PaymentMethod']?></td>
        </tr>
        
    <?php
    }

    ?>

</table>

<a href="../view/adminHome.php"><h4>Go back</h4></a>