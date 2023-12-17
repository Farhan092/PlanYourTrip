<?php 
require_once "../model/packageModel.php";
require_once('../controller/sessionCheck.php');
$packageError =$destinationError = $accomodationError  = $mealsError=$priceError=$daysError="";

if (isset($_POST["std"])){
    $data=$_POST["std"];
    $data=json_decode($data);
$package = $data ->packageNo;
$destination = $data ->destination;
$meals = $data ->meals;
$price = $data ->price;
$days = $data ->days;
$accomodation = $data ->accomdations;

$status = addTourPackages($package,$destination,$accomodation,$meals,$days,$price);
if ($status){
    echo 'Success';
    exit();
} 
else {
    echo 'Failed';
}    
}  


if (isset($_POST["submit"])) {
    $packageNo = $_REQUEST["packageNo"];
    $destination = $_REQUEST["destination"];
    $meals = $_REQUEST["meals"];
    $accomodation = $_REQUEST["accomodation"];
    $meals = $_REQUEST["meals"];
    $price = $_REQUEST["price"];
    $days = $_REQUEST["days"];

    
    

    if (empty($package)) {
        $packageError = "*Package No is required";
    } if (empty($destination)) {
        $destinationError = "*Destination is required";
    } if (empty($accomodation)) {
        $accomodationError = "*Accomodation is required";
    } 
    if (empty($meals)) {
        $mealsError = "*Meals is required";
    } 
     if (empty($price)) {
        $priceError = "*Price is required";
    } 
     if (empty($days)) {
        $daysError = "*Days is required";
    } 
    else {
        $status = addTourPackages($packageNo,$destination,$accomodation,$meals,$days,$price);
            if ($status) {
               ?>
                  
                 <center>
                 <?php  echo"Registration Completed " ; ?>
            
           
                 <?php

            }
        
                else{
                    echo "Registratin Faild";
                }
            } 
           

    
}
?>
 
<html lang="en">
<head>
    <title>ADD TOUR PACKAGES</title>
    <script src="../asset/js/tourPackagesCheck.js"></script>
</head>
<body>
<form method="post" onsubmit="return tourPackageCheck()">

<h1 id="searchResult"></h1>

    <table width="100%" height="100%">
        <tr>
            <td align="center" valign="middle">
                <table border="1" cellpadding="10" cellspacing="0">
                    <tr>
                        <td colspan="2" align="center">
                            <h2>ADD TOUR PACKAGES</h2>
                        </td>
                    </tr>
                    <tr>
                        <td>Package No</td>
                        <td><input type="text"  name="packageNo" id="packageNo" value=""><b><?php echo $packageError ?></b> <div id="packageNoError"></div></td>
                    </tr>
                    <tr>
                        <td>Destination</td>
                        <td><input type="text" name="destination" id="destination" value=""><b><?php echo $destinationError ?><div id="destinationError"></div></b></td>
                    </tr>
                    <tr>
                        <td>Accommodations</td>
                        <td><input type="text" name="accomodation" id="accomodation" value=""><b><?php echo $accomodationError ?><div id="accomodationError"></div></b></td>
                    </tr>
                    <tr>
                        <td>Meals</td>
                        <td><input type="text" name="meals" id="meals" value=""><b><?php echo $mealsError ?></b><div id="mealsError"></div></td>
                    </tr>
                    <tr>
                        <td>Days</td>
                        <td><input type="text" name="days" id="days" value=""><b><?php echo $daysError ?></b><div id="daysError"></div></td>
                    </tr>
                    <tr>
                        <td>Price</td>
                        <td><input type="text" name="price" id="price" value=""><b><?php echo $priceError ?></b><div id="priceError"></div></td>
                    </tr>

                    <tr>
                        <td colspan="2" align="center">
                            <input type="submit" name="submit" value="Submit" >
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</form>
<center>
<a href="../view/adminHome.php">Go home</a>
</center>

</body>
</html> 