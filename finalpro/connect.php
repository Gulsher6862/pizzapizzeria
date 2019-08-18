<?php
    $conn = mysqli_connect('localhost', 'root', '');
	if (!$conn)
	{
		die('Could not connect:' . mysqli_error());
	}
	$db_select = mysqli_select_db($conn , "login");
	if (!$db_select)
	{
		die("Database selection failed: " . mysqli_error());
	}		
?>