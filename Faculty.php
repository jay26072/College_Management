<?php
	include('connect.php');
	$sql="select*from faculty";
	$result=mysqli_query($con,$sql);
	error_reporting(0);
	session_start();
	if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'!=true]){
    header("location:index.php");
    exit;
}
	
?>
<html>
	<head>
		<title>Faculty Table</title>
	<style>
	
        html,
body {
	height: 100%;
}

body {
	margin: 0;
	padding: 0;
	background: linear-gradient(45deg, #49a09d, #5f2c82);
	font-family:Gill Sans Extrabold,sans-serif;
	font-weight: 100;
}

.container {
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
}

table {
	position: relative;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        border-collapse: collapse;
        width: 90%;
        height: 200px;
        border: 1px solid #bdc3c7;
        box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.2), -1px -1px 8px rgba(0, 0, 0, 0.2);
}

th,
td {
	padding: 15px;
	background-color: rgba(255,255,255,0.2);
	color: #fff;
}

th {
	text-align: left;
	background-color: #55608f;
    
}

tr:hover {
        background-color: rgba(255,255,255,0.3);
        box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.2), -1px -1px 8px rgba(0, 0, 0, 0.2);
    }
	td {
		position: relative;
		hover {
			before {
				content: "";
				position: absolute;
				left: 0;
				right: 0;
				top: -9999px;
				bottom: -9999px;
				background-color: rgba(255,255,255,0.2);
				z-index: -1;
			}
		}
	}
.btn{
  background: none;
  font-family: "montserrat",sans-serif;
  text-transform: uppercase;
  padding: 12px 20px;
  min-width: 200px;
  margin: 10px;
  cursor: pointer;
  transition: color 0.4s linear;
  position: relative;
}
.btn:hover{
  color: #fff;
}
.btn::before{
  content: "";
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  background: #000;
  z-index: -1;
  transition: transform 0.5s;
  transform-origin: 0 0;
  transition-timing-function: cubic-bezier(0.5,1.6,0.4,0.7);
}
.btn1::before{
  transform: scaleX(0);
}
.btn2::before{
  transform: scaleY(0);
}
.btn1:hover::before{
  transform: scaleX(1);
}
.btn2:hover::before{
  transform: scaleY(1);
}
.add{
    text-decoration: none;
	color:blue;
	top:0;
	margin:50px auto;
}
	</style>
	</head>
<body>
<?php require "menu.php" ?>
    <div class="container">
		<center>
		<table class="content-table">
            <a href="Faculty_add.php" class="add btn btn1" style="font-size:25">Add Faculty</a>
			<h1>Faculty List</h1>
            <br>
            <br>
            
		<tr>
		<th style="text-align:center">Id</th>
		<th style="text-align:center">Name</th>
		<th style="text-align:center">Deartment</th>
		<th style="text-align:center">Date Of Birth</th>
		<th style="text-align:center">Email</th>
		<th style="text-align:center">Mobile</th>
        <th colspan="2" style="text-align:center">Action</th>
		</tr>
			
		<tr>
            <?php
                
                while($rows=$result->fetch_assoc())
                {
            ?>
			</tr>
            <tr>
                
                <td style="text-align:center"><?php echo $rows['Id'];?></td>
                <td style="text-align:center"><?php echo $rows['Name'];?></td>
                <td style="text-align:center"><?php echo $rows['Dept'];?></td>
                <td style="text-align:center"><?php echo date('d-m-Y',strtotime($rows['Dob']));?></td>
                <td style="text-align:center"><?php echo $rows['Email'];?></td>
                <td style="text-align:center"><?php echo $rows['Mobile'];?></td>
                <td style="text-align:center">
				<a type="button" class="btn btn1" href="Faculty_update.php?idn=<?php echo $rows['Id']; ?>&namefac=<?php echo $rows['Name'];?>&deptfac=<?php echo $rows['Dept'];?>&datefac=<?php echo $rows['Dob'];?>&emailfac=<?php echo $rows['Email'];?>&mobilefac=<?php echo $rows['Mobile'];?>">Edit</a>
				</td>
				<td style="text-align:center">
				<a type="button" class="btn btn2" href="Faculty_delete.php?id=<?php echo $rows['Id']; ?>" onClick="return confirm('Are You Sure You Want To Delete This Record ?')">Delete</a>
				</td>
				
				</td>
            </tr>
            <?php
                }
            ?>
        </table>
        
    </section>
	</center>
            </div>
</body>
</html>