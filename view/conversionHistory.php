<?php
 require_once('../controller/sessionCheck.php');
 //require_once('../model/db.php');
 require_once('../model/currencyModel.php');

 if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['username'])) {
    header('Location: ../view/login.php');
    exit();
}

$username = $_SESSION['username'];
$users = getConversionHistory($username);


?>

<html>
<head>
    <title>Conversion History</title>
    <link rel="stylesheet" href="../asset/css/conversion.css">

</head>
<body>
<header>
        <div class="header-container">
            <!-- <img src="" alt="Logo"> -->
            <h2></h2>
        </div>
    </header>
    <h2>Conversion History</h2>
    <table border="1">
        <tr>
            <th>Conversion ID</th>
            <th>Amount</th>
            <th>From Currency</th>
            <th>To Currency</th>
            <th>Result</th>
            <th>Timestamp</th>
        </tr>
        <?php for ($i = 0; $i < count($users); $i++) { ?>
            <tr>
                <td><?= $users[$i]['ID'] ?></td>
                <td><?= $users[$i]['Amount'] ?></td>
                <td><?= $users[$i]['From_Currency'] ?></td>
                <td><?= $users[$i]['To_Currency'] ?></td>
                <td><?= $users[$i]['Result'] ?></td>
                <td><?= $users[$i]['Timestamp'] ?></td>
            </tr>
        <?php } ?>
    </table>
    <form action="../view/currency.php" method="get">
        <input type="submit" name="submit" value="Go Back">
    </form>
</body>
</html>
