<?php
include("connect.php");
error_reporting(0);
$idd=$_GET['idn'];
$roll=$_GET['roll'];
$name=$_GET['nam'];
$dob=$_GET['date'];
$mail=$_GET['email'];
$mob=$_GET['mobil'];
$dep=$_GET['dept'];
$sem=$_GET['sem'];
$add=$_GET['add'];
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
		<br>
		<br>
		<br>
		<br>
	<h1 class="form__title">Edit Student</h1>
		<div class="form__div">
			
			<input type="number" class="form__input" name="id" id="txtid" value="<?php echo "$idd";?>" placeholder=" ">
			<label class=form__label>Id:</label>
		</div>
		<div class="form__div">
			
			<input type="text" class="form__input" name="roln" id="txtrn" value="<?php echo "$roll";?>"placeholder=" ">
			<label class=form__label>Roll No:</label>
		</div>
		<div class="form__div">
			
			<input type="text" class="form__input" name="name" value="<?php echo "$name";?>">
			<label class=form__label>Student Full Name:</label>
		</div>
		<div class="form__div">
			
			<input type="date" class="form__input" name="bdate" value="<?php echo "$dob";?>" max="<?php echo date("Y-d-m");?>"placeholder=" ">
			<label class=form__label>Birth Date:</label>
		</div>	
		<div class="form__div">
			
			<input type="email" class="form__input" name="email" value="<?php echo "$mail";?>"placeholder=" ">
			<label class=form__label>Email Id:</label>
		</div>
		<div class="form__div">
			
			<input type="text" class="form__input" name="mnum" id="ttmob" value="<?php echo "$mob";?>"placeholder=" ">
			<label class=form__label>Mobile No:</label>
		</div>
		<div class="form__div">
			
			<input type="text" class="form__input" name="dept" value="<?php echo "$dep";?>"placeholder=" ">
			<label class=form__label>Department:</label>
		</div>
		<div class="form__div">
			
			<input type="text" class="form__input" name="sem" value="<?php echo "$sem";?>"placeholder=" ">
			<label class=form__label>Semester:</label>
		</div>	
		<div class="form__div">
			
			<input type="textarea" class="form__input" name="addr" value="<?php echo "$add";?>"placeholder=" ">
			<label class=form__label>Address:</label>
		</div>
		<br>
		<br>
		<div>
			<input type="Submit" value="Update" class="form__button" name="submit">
		</div>
		
	</form>	
</div>
	</body>
</html>
<?php
if($_GET['submit'])
	
{
	$id=$_GET['id'];
	$rolls=$_GET['roln'];
	$names=$_GET['name'];
	$dobs=$_GET['bdate'];
	$emails=$_GET['email'];
	$mobi=$_GET['mnum'];
	$depts=$_GET['dept'];
	$sems=$_GET['sem'];
	$addrss=$_GET['addr'];
    $sql="update student set Rollno='$rolls',Sname='$names',Dob='$dobs',Email='$emails',Mobile='$mobi',Depart='$depts',Sem='$sems',Address='$addrss' where Id='$id'";
    $result=mysqli_query($con,$sql);

if($result)
	{
		echo "<script>alert('Record Updated');</script>";
		header("location: Student.php");
        exit();
	}
	else
	{
		echo "<script>alert('Record Not Updated');</script>";
	}
}
?>