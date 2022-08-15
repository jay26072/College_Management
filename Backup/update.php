<?php
include ('connect.php');
error_reporting(0);
$idd=$_GET['idn'];
$dep=$_GET['dept'];
?>
<html>
		
	<head>
    <link rel="stylesheet" href="style1.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
		
    <title>Update Department</title>
</head>
	<body>
		<div class="l-form">
		<form action="#" method="GET" class="form">
			<h1 class="form__title">Department Edit</h1>
				<div class="form__div">
                
                <input type="number" class="form__input" value="<?php echo "$idd";?>" name="iddep" placeholder=" " disabled>
				<label  class="form__label">ID</label>
            </div>
				<div class="form__div">
                <input type="text" class="form__input" value="<?php echo "$dep";?>" name="dept" placeholder=" ">
				<label class="form__label">Department</label>
				<br>
				<br>
				<br>
				</div>
				<div>
				<input type="submit" class="form__button" name="submit" value="Save">
            </div>
		</form>
</div>
	</body>
</html>
 <?php
if($_GET['submit'])
	
{
	$id=$_GET['iddep'];
	$depart=$_GET['dept'];
	$sql="update tbldept set Department='$depart' where Id='$id'";
	$result=mysqli_query($con,$sql);

if($result)
	{
		echo "<script>alert(Record Updated)</script>";
		header("location: http://localhost/jay/dept/dept.php");
        exit();
	}
	else
	{
		echo "<script>alert('Record Not Deleted'";
	}
}
?>