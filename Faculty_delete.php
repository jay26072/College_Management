<?php
include('connect.php');
$id=$_GET['id'];
$sql="delete from faculty where id='$id'";
$result=mysqli_query($con,$sql);

	if($result)
	{
		echo "<script>alert(Record Deleted);</script>";
		header("location: Faculty.php");
		exit;
	}
	else
	{
		echo "<script>alert('Record Not Deleted');</script>";
	}
?>