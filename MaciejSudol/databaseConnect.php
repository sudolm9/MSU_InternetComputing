<?php
	$db = mysqli_connect("localhost", "root", "", "csit101");

	if(!$db)
	{
		die("connection failed: ".mysqli_connect_error());
	}
?>
