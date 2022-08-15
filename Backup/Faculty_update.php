<?php
include ('connect.php');
error_reporting(0);
$idd=$_GET['idn'];
$nam=$_GET['namefac'];
$dep=$_GET['deptfac'];
$date=$_GET['datefac'];
$mail=$_GET['emailfac'];
$mobi=$_GET['mobilefac'];
?>
<html>
	<head>
		<link rel="stylesheet" href="style1.css">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
	</head>
	<body>
	<div class="l-form">
	<form method="GET" class="form">
		<h1 class="form__title">Faculty Edit</h1>
		<div class=" form__div" >
			<input type="number" class="form__input" id="txtid" value="<?php echo "$idd";?>" name="idf" placeholder=" ">
			<label class="form__label">Id:</label>
		</div>
		<div class="form__div">
			<input type="text" class="form__input" value="<?php echo "$nam";?>" name="name" placeholder=" ">
			<label class="form__label">Full Name:</label>
		</div>
		<div class="form__div">
			<input type="text" class="form__input"  value="<?php echo "$dep";?>" name="dept" placeholder=" ">
			<label class="form__label">Department:</label>
		</div>
		<div class="form__div">
			<input type="date" class="form__input" value="<?php echo "$date";?>"name="bdate" max="<?php echo date("Y-d-m");?>" placeholder=" ">
			<label class="form__label">Birth Date:</label>
		</div>
		<div class="form__div">
			<input type="email" class="form__input" value="<?php echo "$mail";?>" name="email" placeholder=" ">
			<label class="form__label">Email Id:</label>
		</div>
		<div class="form__div">
			<input type="text" class="form__input" id="ttmob" value="<?php echo "$mobi";?>" name="mob" placeholder=" ">
			<label class="form__label">Mobile No:</label>
		</div>
		<div class="form__div">
			<input type="password" class="form__input" id="pass" name="pass" placeholder=" ">
			<label class="form__label">Password:</label>
		</div>
        <br>
		<div>
			<input type="submit" value="Update" class="form__button" name="submit">
		</div>
	</form>	
	</div>
	</body>
</html>
<?php
if($_GET['submit'])
	
{
	$id=$_GET['idf'];
	$name=$_GET['name'];
	$dept=$_GET['dept'];
	$datef=$_GET['bdate'];
	$email=$_GET['email'];
	$mobil=$_GET['mob'];
	$pass=md5($_GET['pass']);
	$sql="update faculty set Name='$name',Dept='$dept',Dob='$datef',Email='$email',Mobile='$mobil',Password='$pass' where Id='$id'";
	$result=mysqli_query($con,$sql);

if($result)
	{
		echo "<script>alert(Record Updated)</script>";
		header("location: Faculty.php");
        exit();
	}
	else
	{
		echo "<script>alert('Record Not Deleted')";
	}
}
?>