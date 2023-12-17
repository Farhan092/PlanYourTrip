<?php require_once('../controller/sessionCheck.php'); ?>

<html lang="en">
<head>
   
    <title>Change Password</title>
</head>
<body>
<center>
	<form method="post" action="../controller/changePassword.php" enctype="">
		<table border="0" cellspacing="0" cellpadding="5">
			<tr>
				<td>
					<fieldset>
						<legend>CHANGE PASSWORD</legend>
						Current Password<br />
						<input type="password" name ="password" value=""/><br />
						New Password<br />
						<input type="newPassword" name="newPassword" value="" /><br />
						Retype New Password<br />
						<input type="rePassword" name="rePassword" value=""/>								
						<hr />
						<input type="submit" name="submit" value="Change" /> 
<?php
				if ( $_SESSION['userName'] == 'admin') { ?>
                    <a href="adminHome.php">Home </a> <?php
                }
                else if( $_SESSION['userName']=='hotelManagement'){ ?>
					<a href="hotelManagement.php">Home </a>
					<?php
                }
                else if( $_SESSION['userName'] !='admin') { ?>
                    <a href="home.php">Home </a>
					<?php
                }
						
?>						
					</fieldset>
				</td>
			</tr>
		</table>
	</form>
</center>

    
</body>



</html>