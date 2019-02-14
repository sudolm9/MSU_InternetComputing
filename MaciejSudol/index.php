<?php
	session_start();
	include 'databaseConnect.php';
?>
<!DOCTYPE html>

<html>
	<head>
		<meta charset = "utf-8">
		<title> Login Php index </title>
	</head>

	<body>
		<form action = "loginConfirm.php" method = "POST">
			<h1>Welcome to the CSIT Web Site</h1>
			<h2>Please Login</h2>
			<p><label>Email: </label>
				<input type = "email" name = "email">
			</p>
			<p><label>Password:</label>
				<input type = "password" name = "pass">
			</p>
			<input type = "submit" value = "Login">
		</form>
		<p><?php
			if( $_SESSION['failed'] == true )
			{
				echo "Error: Invalid credential, you must correctly login to view this site.";
			}

			else
			{
				echo "You must login to view this site.";
			}
		?></p>
	</body>
</html>
