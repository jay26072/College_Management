<?php
$con=mysqli_connect("localhost","root","","college_db");
	if(!$con)
	{
		die('Could not Connect'.mysqli_error());
	}
	else
	{
		echo "Connection Sucessfully";
	}
?>