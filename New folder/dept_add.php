<?php
    include("connect.php");

    if (isset($_POST['submit'])) 
	{
		$id =$_POST['id'];
		$dept= $_POST['dept'];
        $sql = "insert into tbldept values($id,'$dept')";
        $result = mysqli_query($con,$sql);
        echo "<script>alert('Record inserted!');</script>";
    }
    else {
        echo "<script>alert('Record not found');</script>";
    }

    // if(mysqli_query($con, $sql)) {
    //     echo "Record succesfully entered <br>";
    //     // $result = mysqli_query();
    //     // if($result) {
    //     //     echo "Record seccessfuly inserted<br>";
    //     // }
    //     // else {
    //     //     echo "Something went wrong! " .mysqli_error();
    //     //     echo "<br>";
    //     // }
    // }
    // else {
    //     echo "Error! ".mysqli_error();
    //     echo "<br>";
    // }

    mysqli_close($con);
?>

<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Department Add</title>
</head>

<body>
<center>
    <div class="container">
        <h1>Add Department</h1>
        <form action="#" method="POST">
            <div class="col-lg-2">
                <label for="id_input" class="form-label">ID</label>
                <input type="number" class="form-control" id="id_input" name="id" placeholder="Enter ID">
            </div>
            <div class="col-lg-2">
                <label for="dept_input" class="form-label">Department</label>
                <input type="text" class="form-control" id="dept_input" name="dept" placeholder="Enter Dept">
            </div>
            </div>

            <input type="submit" class="btn btn-outline-primary" name="submit" value="Save">
        </form>
</center>
    <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>-->
</body>

</html>