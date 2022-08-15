<?php
include('connect.php');
$id=$_GET['idn'];
$sql="delete from tbldept where id='$id'";
$result=mysqli_query($con,$sql);

	if($result)
	{
		echo "Record Deleted";
	}
	else
	{
		echo "<script>alert('Record Not Deleted');</script>";
	}
?>