<?php
include('connect.php');
$id=$_GET['idn'];
$sql="delete from tbldept where id='$id'";
$result=mysqli_query($con,$sql);

	if($result)
	{
		echo "<script>alert(Record Deleted);</script>";
		header("location: http://localhost/dept/dept.php");
        exit();
	}
	else
	{
		echo "<script>alert('Record Not Deleted');</script>";
	}
?>