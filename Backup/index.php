<?php
include ('connect.php');
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
	echo "<script>alert('Record Not Found');</script>";
}
}
?>
<html>
	<head>
		<link rel="stylesheet" href="style1.css">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
		<script>
			function valid()
			{
				var a=document.getElementById("txtuname").value;
				var p=/^[A-Za-z]+$/
				if(a.match(p))
				{
					alert("Entered Name Is Valid :)");
				}
				else
				{
					alert("Enter Your Proper Name ):");
					return false;
				}
			}
		</script>
	</head>
	<body>
		<?php require "menu.php" ?>
	<div class="l-form">
	<form method="post" class="form">
		<h1 class="form__title">Login</h1>
		<div class=" form__div" >
			<input type="text" class="form__input" id="uname" name="username" placeholder=" ">
			<label class="form__label">Username:</label>
		</div>
		<div class=" form__div">
			<input type="password" class="form__input" id="password" name="password"  placeholder=" ">
			<label class="form__label">Password:</label>
		</div>
		<br>
		<div>
			<input type="Submit" value="Login" class="form__button" onsubmit=" return valid();" name="submit">

			<a href="register.php" style="text-align:left">Sign Up
		</div>
	</form>	
		</div>
	</body>
</html>