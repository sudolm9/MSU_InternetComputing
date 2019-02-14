<?php
	session_start();
	include "databaseConnect.php";
	global $db;
	$_SESSION['failed'] = false;
	$email = mysqli_real_escape_string( $db, $_POST['email'] );
	$password = mysqli_real_escape_string( $db, $_POST['pass'] );
	$query = mysqli_query( $db, "SELECT * FROM administrators WHERE email='$email'" );
	$existquery = mysqli_num_rows( $query );
	$table_emails = "";
	$table_password = "";


	if( $existquery > 0 )
	{
		while( $row = mysqli_fetch_assoc( $query ) )
		{
			$table_emails = $row['email'];
			$table_password = $row['password'];
		}

		if( $email == $table_emails )
		{
			if( $password == $table_password )
			{
				print '<script>window.location.assign("home.html");</script>';
			}

			else
			{
				$_SESSION['failed'] = true;
				print '<script>window.location.assign("index.php");</script>';
			}
		}
		else
		{
			$_SESSION['failed'] = true;
			print '<script>window.location.assign("index.php");</script>';
		}
	}

	else
	{
		$_SESSION['failed'] = true;
		print '<script>window.location.assign("index.php");</script>';
	}
?>
