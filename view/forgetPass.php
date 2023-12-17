<?php
session_start();
require_once('../model/userModel.php');
?>
<html lang="en">
<head>
    <title>Forget Password</title>
</head>
<body>

<form  method="post" action="../controller/forgetPassAction.php" >

<div align="center">
    <table>
        <td></td>
        <td>
     
        <br>
            <fieldset>
                <legend>Password Recovering</legend>
                <table align="center">

                    <tr>
                        <td>
                            <label for="email">Email:</label>
                        </td>
                        <td>
                            <input type="email" name="email" id="email" value="">
                        </td>
                    </tr>                           
                </table>
                
                <p align="center"><input type="submit" name="submit" value="ubmit"></p>
            </fieldset>
        </td>
        <td></td>
    </table>

</div>

</form>
</body>
</html>
