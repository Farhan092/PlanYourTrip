<?php 
   require_once('../controller/sessioncheck.php');
//    require_once('../controller/FAQ_validation.php');
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ</title>
    <link rel="stylesheet"  href="../CSS/faq.css">
</head>
<body>
<header>
        <div class="header-container">
            
            <h2>Add FAQ</h2>
        </div>
    </header>
    <fieldset>
        <legend>FAQ</legend>
        
        Question:
        <input type="text" id='question'  name="question">
        <span style="color: red;"  id="error"></span><br><br>
        Answer:
        <input type="text" id='answer'  name="answer"><br><br>
        
        <p style="color: green;" id="success"></p>
        
        <input type="button" name="submit" id="submit" value="ADD" onclick="FAQ()">
        
        <a href="adminHome.php">Home</a>
    </fieldset>
    <script src="../asset/JS/FAQ_validation.js"></script>
</body>
</html>
