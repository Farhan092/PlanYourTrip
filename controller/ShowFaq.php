<?php
require_once('../model/FaqModel.php');

$results = "";

if (isset($_POST['submit3'])) {
    $results = ShowFaq();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet"  href="../asset/CSS/ShowFaq.css">
</head>
<body>

<fieldset>
    <legend>FAQ</legend>

    <table border="0">
        <?php for ($i = 0; $i < count($results); $i++) { ?>
            <tr>
                <td><?= $results[$i]['id'] ?></td>
                <td><?= $results[$i]['question'] ?></td>
                <td>
                    <input type="button" name="submit" value="show" onclick="FAQ(<?= $results[$i]['id'] ?>)">
                    
                </td>
            </tr>
        <?php } ?>
    </table>
    <form action="../view/Room_Book.php" method="post">
        <input type="submit" name="submit" value=" Go back">
    </form>
        </fieldset>

    <span style="color: blue; font-weight: bold;" id="faq"></span>
 
    <script src="../asset/JS/FAQ.js"></script>
</body>
</html>
