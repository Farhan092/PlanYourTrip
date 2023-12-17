<!DOCTYPE html>
<html lang="en">

<head>
    <title>LOG IN</title>
    <script src="../asset/js/loginCheck.js"></script>
  
    <link rel="stylesheet"  href="../asset/css/login.css">
    
</head>

<body>

    

    <div class="center">
        <form method="post" action="../controller/loginCheck.php" onsubmit="return logIn();">

        <div id = "wrongPass"></div>
            <table border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td>
                        <fieldset>
                            <legend>Signin</legend>
                            <br> <style>input[type="submit"]:hover {color: red;} </style>
                            Username:  <input type="text" name="userName" id="userName" value="" /> <div id="username"></div><br><br>
                            Password: <input type="password" name="password" id="password" value="" /> <div id ="Password"></div> <br><br>

                            <input type="submit" name="submit" value="submit" />
                            <br>
                            <br><a href="../controller/signup.php"> Signup</a><br>
                               <div class="left-align">
                                <h5>
                            <a href="forgetPass.php">Forget Password?</a>
                            </h5>
                            </div>
                        </fieldset>
                    </td>
                </tr>
            </table>
        </form>
    </div>

</body>

</html>
