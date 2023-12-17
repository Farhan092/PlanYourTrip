<?php
require_once('../model/packageModel.php');
require_once('../controller/sessionCheck.php');

if ( isset($_POST['searchPlan'])) {
    $tourName = $_POST['searchPlan'];
    $result = searchPlan($tourName);

    $users = array();

    while ($user = mysqli_fetch_assoc($result)) {
        $users[] = array('PackageNo' => $user['PackageNo'], 'Destination' => $user['Destination'], 'Accomodations' => $user['Accomodations'], 'Meals' => $user['Meals'], 'Days' => $user['Days'], 'Price' => $user['Price']);
    }

    
    echo json_encode($users);
    exit();
}




if (isset($_POST['delete'])) {
    $status = deletePackages($_POST['delete']);
    if ($status){
        echo 'Success';
        exit();
    } 
    else {
        echo 'Failed';
    }    

}


require_once('../view/header.php');


?>

<head>
<script src="../asset/js/addTourPackagesCheck.js"></script>
    <title>Document</title>
</head>
<body> <center>
    <h3>
    Search Destination: <input type="text" name="searchPlan" id="searchPlan" value="" onkeyup="searchTourPlan()" /> <br>
    <div id="result"></div>
    </h3>
    </center>

</body>
</html>



<?php



    $result = showAllPackages();
    ?>
     <head><script src="../asset/js/tourPackagesCheck.js"></script></head>
    <br>
    <br>
    <table border=1 align="center">
        <tr>
            <td>Package Name</td>
            <td>Destination</td>
            <td>Accommodations</td>
            <td>Meals</td>
            <td>Tour Days</td>
            <td>Price</td>
        </tr>
        <?php
        while ($user = mysqli_fetch_assoc($result)) {
            ?>
            <tr>
                
               <td><?=$user['PackageNo']?></td>
                <td><?=$user['Destination']?></td>
                <td><?=$user['Accomodations']?></td>
                <td><?=$user['Meals']?></td>
                <td><?=$user['Days']?></td>
                <td><?=$user['Price']?></td>
               
                <?php
                if($_SESSION['userName'] == 'admin') { ?>
                <td>
                    <body>
                        
                  
                    <form method="POST" onsubmit="return deleteTourPlan('<?php echo $user['PackageNo']; ?>')">

                        <input type="hidden" name="package" id="package" value="<?= $user['PackageNo'] ?>">
                        <input type="submit" value="DELETE" >
                    </form>
                    </body>
                    </td>
                
                <?php } else{ ?>
                    <td>
                    <form method="POST" onsubmit ="return purchaseTourPlan('<?php echo $user['Price']; ?>')">
                        <input type="hidden" name="planPurchase" id="planPurchase" value="<?= $user['Price'] ?>">
                        <?php $SESSION['amount'] = $user['Price']  ?>
                     
                        <input type="submit" value="Purchase This Package"  >
                    </form>
    
               <?php } ?>
               </td>
            </tr>
            <?php
        }
        ?>
    </table>
    <br>
    <?php

?>

<?php
if ($_SESSION['userName'] == 'admin') { ?>
  <center><a href="../view/adminHome.php"><h4>Go back</h4></a></center>
    
<?php } elseif ($_SESSION['userName'] == 'hotelManagement') { ?>
    <center><a href="../view/hotelManagement.php"><h4>Go back</h4></a></center>
<?php } else { ?>
    <center><a href="../view/home.php"><h4>Go back</h4></a></center>
<?php } ?>
