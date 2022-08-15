<?php
include("connect.php");
$alert=false;
$error=false;
if (isset($_POST['submit'])) 
	{
		$id =$_POST['id'];
		$un =$_POST['uname'];
		$email =$_POST['email'];
		$mnum =$_POST['mnum'];
		$pass =md5($_POST['pass']);
		$sql="insert into users values($id,'$un','$email','$mnum','$pass')";
		$result=mysqli_query($con,$sql);
		if($result)
		{
		$alert=true;
		header("location: index.php");
		exit;
		}
	else{
		$error=true;
	}
}
	mysqli_close($con);	
?>
<html>
	<head>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
		<script>
				function validate()
				{
				var id=document.getElementById("txtid").value;
				var pass=document.getElementById("txtpass").value;
				var pattern=/^[a-zA-Z0-9]{6,8}/
				if(id=="")
				{
					alert("Please Enter Id");
				}
				else if(pass.match(pattern))
				{
					alert("Valid User");
				}
				else
				{
					alert("Password Not Valid");
				}
					return false;
				}
			</script>
	</head>
	<body>
	<?php require "menu.php" ?>
	<?php
	if($alert){
	echo '
	<div class="alert alert-success alert-dismissible fade show" role="alert">
	<strong>Success!</strong> Your Account Is Created.
	<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
	}
	?>
	<?php
	if($error){
	echo '
	<div class="alert alert-danger alert-dismissible fade show" role="alert">
	<strong>Error!</strong> Your Account Is Not Create.
	<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  	</div>';
	}
	?>
	<center>
		<h1>Registration</h1>
	<form method="post">
		<div class="col-lg-2">
			<label>Id:</label>
			<input type="number" class="form-control" name="id">
		</div>
		<div class="col-lg-2">
			<label>Username:</label>
			<input type="text" class="form-control" name="uname">
		</div>
		<div class="col-lg-2">
			<label>Email Id:</label>
			<input type="email" class="form-control" name="email" >
		</div>
		<div class="col-lg-2">
			<label>Mobile No:</label>
			<input type="text" class="form-control" name="mnum" >
		</div>
		<div class="col-lg-2">
			<label>Password:</label>
			<input type="password" class="form-control" name="pass" id="txtpass">
		</div>
		<div class="col-md-2">
			<label>Confirm Password:</label>
			<input type="password" class="form-control" name="txtcpass" id="txtcpass">
			<br>
			<br>
		</div>
		<div class="col-lg-2">
			<input type="Submit" value="Register" class="form-control btn btn-success" onClick="validate();"name="submit">
			<input type="Reset" class="form-control btn btn-danger">
		</div>
		</center>
	</form>	
	</body>
</html>