<?php
require_once "../model/hotelManagementModel.php";
require_once('../controller/sessionCheck.php');
$nameError = $roomTypeError = $locationError = $priceError = "";


    if (isset($_POST["std"])){
        $data=$_POST["std"];
        $data=json_decode($data);
    $hotelName = $data ->hotelName;
    $roomType = $data ->roomtype;
    $location = $data ->location;
    $price = $data ->price;
    $status = hotelRoomAdd($hotelName, $roomType, $location, $price);
    if ($status){
        echo 'Success';
        exit();
    } 
    else {
        echo 'Failed';
    }    
}  


if (isset($_POST["submit"])) {
    $hotelName = $_REQUEST["hotelName"];
    $roomType =(isset($_REQUEST["roomType"]))? $_REQUEST["roomType"]:"";
    $location = $_REQUEST["location"];
    $price = $_REQUEST["price"];

    if (empty($hotelName)) {
        $nameError = "* Hotel Name is required";
    }
    if (empty($roomType)) {
        $roomTypeError = "* Room Type is required";
    }
    if (empty($location)) {
        $locationError = "* Location is required";
    }
    if (empty($price)) {
        $priceError = "* Price is required";
    } else {
        $status = hotelRoomAdd($hotelName, $roomType, $location, $price);
        if ($status) {
?>
            <center>
                <?php echo "Adding room  Completed "; ?>
            </center>
        <?php
        } else {
            echo "Registration Failed";
        }
    }
}
?>

<html lang="en">

<head>
    <title>Registration</title>
    <script src="../asset/js/addHotelRoomCheck.js"></script>
</head>

<body>
    <form method="post"  onsubmit="return roomCheck()">

        <table width="100%" height="100%">
            <tr>
                <td align="center" valign="middle">
                    <table border="1" cellpadding="10" cellspacing="0">
                        <tr>
                            <td colspan="2" align="center">
                                <h2>Registration</h2>
                            </td>
                        </tr>
                        <tr>
                            <td>Hotel Name:</td>
                            <td><input type="text" name="hotelName" id="hotelName" value=""><b><?php echo $nameError ?></b></td>
                        </tr>
                        <tr>
                            <td>ROOM type</td>
                            <td>
                                <center>
                                    <input type="radio" name="roomType" id="roomType" value="Double" />Double
                                    <input type="radio" name="roomType" id="roomType" value="Single" />Single <br>
                                    <?php echo $roomTypeError; ?>
                                </center>
                            </td>
                        </tr>
                        <tr>
                            <td>Location</td>
                            <td><input type="text" name="location" id="location" value=""><b><?php echo $locationError ?></b></td>
                        </tr>
                        <tr>
                            <td>Price</td>
                            <td><input type="number" name="price" id="price" value=""><b><?php echo $priceError ?></b></td>
                        </tr>

                        <tr>
                            <td colspan="2" align="center">
                                <input type="submit" name="submit" value="Submit"> <br>
                                <a href="../view/hotelManagement.php">Go home</a>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>
