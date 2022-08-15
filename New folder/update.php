<?php
include ('connect.php');
error_reporting(0);
$idd=$_GET['idn'];
$dep=$_GET['dept'];
?>
<html>
		
	<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Update Department</title>
</head>
	<body>
		<center>
		<form action="#" method="GET">
				<div class="col-lg-2">
                <label for="id_input" class="form-label">ID</label>
                <input type="number" class="form-control" value="<?php echo "$idd";?>" name="iddep" placeholder="Enter ID">
            </div>
				<div class="col-lg-2">
                <label for="dept_input" class="form-label">Department</label>
                <input type="text" class="form-control" value="<?php echo "$dep";?>" name="dept" placeholder="Enter Dept">
				<br>
				<br>
				<br>
				<input type="submit" class="btn btn-outline-primary" name="submit" value="Save">
            </div>
		</form>
		</center>
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
		echo "Record Updated";
	}
	else
	{
		echo "<script>alert('Record Not Deleted'";
	}
}
?>