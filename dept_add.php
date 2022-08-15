<?php
    include("connect.php");

    if (isset($_POST['submit'])) 
	{
		$id =$_POST['id'];
		$dept= $_POST['dept'];
        $sql = "insert into tbldept values($id,'$dept')";
        $result = mysqli_query($con,$sql);
        if($result)
        {
        echo "<script>alert('Record inserted!');</script>";
        header("location: http://localhost/dept1/dept.php");
        exit();
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Department Add</title>
</head>
<body>

    <div class="l-form">
        <form class="form" method="POST">
        <h1 class="form__title">Add Department</h1>
            <div class="form__div ">
                <input type="number" class="form__input" id="id_input" name="id" placeholder=" ">
                <label class="form__label">ID</label>
            </div>
            <div class="form__div">
                <input type="text" class="form__input" id="dept_input" name="dept" placeholder=" ">
                <label class="form__label">Department</label>
            </div>
            <div>

            <input type="submit" class="form__button" name="submit" value="Save">
    </div>
    </form>
    </div>
</body>
</html>