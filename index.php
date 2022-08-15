<?php
include ('connect.php');
$error=false;
error_reporting(0);
$username=$_POST["username"];
$password=md5($_POST["password"]);
if($_POST['submit'])
{
$sql="select * from users where username='$username' AND password='$password'";
$result=mysqli_query($con,$sql);
$num=mysqli_num_rows($result);
if($num == 1)
{
	
	session_start();
	$_SESSION['loggedin']=true;
	$_SESSION['username']=$username;
	header("location: main.php");
	echo "<script>alert('Login Successfully');</script>";
	exit();
}
else{
	$error=true;
}
}
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
	if($error){
	echo '
	<div class="alert alert-danger alert-dismissible fade show" role="alert">
	<strong>Error!</strong> Invalid Username Or Password.
	<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  	</div>';
	}
	?>
	<div class="l-form">
	<form method="post" class="form">
		<h1 class="form__title">Login</h1>
		<div class=" form__div" >
			<input type="text" class="form__input" id="uname" name="username" placeholder=" " autofocus>
			<label class="form__label">Username:</label>
		</div>
		<div class=" form__div">
			<input type="password" class="form__input" id="password" name="password"  placeholder=" ">
			<label class="form__label">Password:</label>
		</div>
		<br>
		<div>
			<input type="Submit" value="Login" class="form__button" name="submit">

			<a href="register.php" style="text-align:left">Sign Up
		</div>
	</form>	
		</div>
	</body>
</html>