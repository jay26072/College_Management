<?php
include("connect.php");
error_reporting(0);
$alert=false;
$error=false;
if (isset($_POST['submit'])) 
	{
		$un =$_POST['uname'];
		$email =$_POST['email'];
		$mnum =$_POST['mnum'];
		$pass =md5($_POST['pass']);
		$cpass =md5($_POST['cpass']);
		// $exists=false;
		
		$existsql="Select * from users where username='$un'";
		$result=mysqli_query($con,$existsql);
		$numExistRows=mysqli_num_rows($result);
		
		if($numExistRows > 0)
		{
			
			// $exists=true;
			$error="Username Already Exist";
		}
		else{
			$exists=false;
		
			if(($pass == $cpass)){
			$sql="insert into users values(NULL,'$un','$email','$mnum','$pass')";
			// INSERT INTO `users` (`Id`, `username`, `email`, `Mobile`, `password`) VALUES (NULL, 'abc1', 'abc@gmail.com', '1234567890', '2002')
			$result=mysqli_query($con,$sql);
			
			if($result)
			{
			$alert=true;
			// header("location: index.php");
			// exit;
			}
	}
	else{
		$error="Password do not match";
	}
}
}
	mysqli_close($con);	
?>
<html>
	<head>
		<link rel="stylesheet" href="style1.css">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
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
	<strong>Error!</strong> Your '.$error.'
	<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  	</div>';
	}
	?>
	<div class="l-form">
		
	<form method="post" class="form">
	<h1 class="form__title">Registration</h1>
		<!-- <div class="form__div">
			
			<input type="number" class="form__input" name="id" placeholder=" ">
			<label class="form__label">Id:</label>
		</div> -->
		<div class="form__div">
			
			<input type="text" class="form__input" name="uname" placeholder=" ">
			<label class="form__label">Username:</label>
		</div>
		<div class="form__div">
			
			<input type="email" class="form__input" name="email" placeholder=" ">
			<label class="form__label">Email Id:</label>
		</div>
		<div class="form__div">
			
			<input type="text" class="form__input" name="mnum" placeholder=" ">
			<label class="form__label">Mobile No:</label>
		</div>
		<div class="form__div">
			
			<input type="password" class="form__input" name="pass" id="txtpass" placeholder=" ">
			<label class="form__label">Password:</label>
		</div>
		<div class="form__div">
			
			<input type="password" class="form__input" name="cpass" id="txtcpass" placeholder=" ">
			<label class="form__label">Confirm Password:</label>
			<br>
			<br>
		</div>
		<div>
			<input type="Submit" value="Register" class="form__button" name="submit">
			<input type="Reset" class="btn btn-danger">
		</div>
		
	</form>	
	</div>
	</body>
</html>