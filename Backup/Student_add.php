<?php
    include("connect.php");

    if (isset($_POST['submit'])) 
	{
		$id =$_POST['id'];
		$roll =$_POST['roln'];
		$name =$_POST['name'];
		$date =$_POST['bdate'];
		$email =$_POST['email'];
		$mob =$_POST['mnum'];
		$dept =$_POST['dept'];
		$sem =$_POST['sem'];
		$add =$_POST['addr'];
        $sql = "insert into student values($id,'$roll','$name','$date','$email','$mob','$dept','$sem','$add')";
        $result = mysqli_query($con,$sql);
		if($result){
        echo "<script>alert('Record inserted!');</script>";
		header("location: Student.php");
		exit;
    }
    else {
        echo "<script>alert('Record Not Insert');</script>";
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
	<div class="l-form">
	<form method="post" class="form">
		<br>
		<br>
		<h1 class="form__title">Students Add</h1>
		<div class=" form__div">
			<input type="number" class="form__input" name="id" id="txtid" placeholder=" ">
			<label class="form__label">Id:</label>
		</div>
		<div class="form__div">
			
			<input type="text" class="form__input" name="roln" id="txtrn" placeholder=" ">
			<label class="form__label">Roll No:</label>
		</div>
		<div class="form__div">
			
			<input type="text" class="form__input" name="name" placeholder=" ">
			<label class="form__label">Student Full Name:</label>
		</div>
		<div class="form__div">
			
			<input type="date" class="form__input" name="bdate" max="<?php echo date("Y-d-m");?>"placeholder=" ">
			<label class="form__label">Birth Date:</label>
		</div>	
		<div class="form__div">
			
			<input type="email" class="form__input" name="email" placeholder=" ">
			<label class="form__label" width:12>Email Id:</label>
		</div>
		<div class="form__div">
			
			<input type="text" class="form__input" name="mnum" id="ttmob" placeholder=" ">
			<label class="form__label">Mobile No:</label>
		</div>
		<div class="form__div">
			
			<select class="form__input" name="dept">
				<option value=" ">Select Department:</option>
				<option value="BBA">BBA</option>
				<option value="BCA">BCA</option>
				<option value="MBA">MBA</option>
				<option value="MCA">MCA</option>
			</select>
			<label class="form__label">Department:</label>
		</div>
		<div class="form__div">
			<select class="form__input" name="sem" placeholder=" ">
				<option value="">Select Semester:</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
			</select>
			<label class="form__label">Semester:</label>
		</div>	
		<div class="form__div">
			<input type="textarea" class="form__input" name="addr" placeholder=" ">
			<label class="form__label">Address:</label>
		</div>
		<div>
			<input type="Submit" value="Register" class="form__button" name="submit">
		</div>
	</form>	
	</div>
	</body>
</html>