<?php
    include("connect.php");

    if (isset($_POST['submit'])) 
	{
		$name =$_POST['name'];
		$dept =$_POST['dept'];
		$dob =$_POST['bdate'];
		$email =$_POST['email'];
		$mob =$_POST['mnum'];
		$pass =md5($_POST['pass']);
        $sql = "insert into faculty values(NULL,'$name','$dept','$dob','$email','$mob','$pass')";
        $result = mysqli_query($con,$sql);
		if($result)
		{
        echo "<script>alert('Record inserted!');</script>";
        header("location: Faculty.php");
        exit();
		}
    else {
        echo "<script>alert('Record not found');</script>";
    }
}
    mysqli_close($con);
?>
<html>
	<head>
		<link rel="stylesheet" href="style1.css">
	<meta name='viewport' content='width=device-width, initial-scale=1'>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
		
	</head>
	<body>
	<div class="l-form">
	<form method="post" class="form">
		<h1 class="form__title">Faculty Add</h1>
		<!-- <div class=" form__div" >
			<input type="text" class="form__input" name="id" id="txtid" placeholder=" ">
			<label class="form__label">Id:</label>
		</div> -->
		<div class="form__div">
			
			<input type="text" class="form__input" name="name" placeholder=" ">
			<label class=form__label>Full Name:</label>
		</div>
		<div class="form__div">
			
			<input type="text" class="form__input" name="dept" placeholder=" ">
			<label class=form__label>Department:</label>
		</div>
		<div class="form__div">
			<input type="date" class="form__input" name="bdate" max="<?php echo date("Y-d-m");?>" placeholder=" ">
			<label class=form__label>Birth Date:</label>
		</div>
		<div class="form__div">
			
			<input type="email" class="form__input" name="email" placeholder=" ">
			<label class=form__label>Email Id:</label>
		</div>
		<div class="form__div">
			
			<input type="text" class="form__input" name="mnum" id="ttmob" placeholder=" ">
			<label class=form__label>Mobile No:</label>
		</div>
		<div class="form__div">
			
			<input type="password" class="form__input" name="pass" id="ttmob" placeholder=" ">
			<label class=form__label>Password:</label>
		</div>
		<br>
		<div>
			<input type="Submit" value="Register" class="form__button" name="submit">
		</div>
		
	</form>	
	</div>
	</body>
</html>