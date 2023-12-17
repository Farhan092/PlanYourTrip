<?php
require_once('../model/transectionModel.php');
require_once('../controller/sessionCheck.php');
$status= checkBalance( $_SESSION['Phone']);
?>
<h1>Available Balance : <?php echo $status['Balance']?></h1>

<br>
<center>
    <a href="../view/home.php">Go BACK</a>
</center>