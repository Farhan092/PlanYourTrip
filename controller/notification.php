
<?php
session_start();
 require_once('../model/NotificationModel.php');
$results='';
$results2='';
if (isset($_POST['submit2'])) {

    $results = ShowNotification();
    $results2=ShowflightNotification();
    $results3=ShowCroomNotification();
    $results4=ShowCflightNotification();
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <title>Document</title>
</head>
<body>


    
    
       

        <?php for ($i = 0; $i < count($results); $i++) { ?>
    
        
            you booked a room at
            <td><?=$results[$i]['Location']?>
            in
            <td><?=$results[$i]['hotel_name']?>
                
           
            on
            <td><?=$results[$i]['Date']?><br>
                
           
        
                
           
            
            
            
      
   
<?php } ?>


<?php for ($i = 0; $i < count($results2); $i++) { ?>
    
        
    You flight booked from
    <td><?= $results2[$i]['from_']?>
    To
    <td><?= $results2[$i]['to_']?>
        
   
    on
    <td><?= $results2[$i]['date']?>
        
   at
    <td><?= $results2[$i]['time']?><br>
        
   
    
    
    


<?php } ?>

<?php for ($i = 0; $i < count($results3); $i++) { ?>
    
        
    Room Booking has been cancelled at
    <td><?=$results3[$i]['Location']?>
   in Hotel
   <td><?=$results3[$i]['hotel_name']?>

        
   
    on
    <td><?=$results3[$i]['Date']?>
        
   
    <br>
        
   
    
    
    


<?php } ?>
<?php for ($i = 0; $i < count($results4); $i++) { ?>
    
        
     flight booking has been cancelled from
    <td><?= $results4[$i]['from_']?>
    To
    <td><?= $results4[$i]['to_']?>
        
   
    on
    <td><?= $results4[$i]['date']?>
        
   at
    <td><?= $results4[$i]['time']?><br>
        
   
    
    
    


<?php } ?>

<?php
    
    if (isset($_SESSION['role'])) {
        if ($_SESSION['role'] == "Admin") {
            echo '<a href="../view/admin_home.php">Go Back to Admin Home</a>';
        } elseif ($_SESSION['role'] == "User") {
            echo '<a href="../view/user_home.php">Go Back to User Home</a>';
        }
    }
    ?>
    
</body>
</html>
<!-- <a href="../view/admin_home.php">Go Back To Admin Home</a><br>
<a href="../view/user_home.php">Go Back To User Home</a> -->
