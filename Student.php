<?php
	include('connect.php');
	$sql="select*from student";
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
		<title>Students Table</title>
	<style>
	
	body {
        padding: 0px;
        margin: 0;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
		}
		table {
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        border-collapse: collapse;
        width: 92%;
        height: 200px;
        border: 1px solid #bdc3c7;
        box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.2), -1px -1px 8px rgba(0, 0, 0, 0.2);
    }
    
    tr {
        transition: all .2s ease-in;
        cursor: pointer;
    }
    
    th,
    td {
        padding: 12px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }
    
    #header {
        background-color: #16a085;
        color: #fff;
    }
    
    h1 {
        font-weight: 600;
        text-align: center;
        background-color: #16a085;
        color: #fff;
        padding: 0px;
        box-shadow: 0 10px 30px 0px rgba(0,0,0,0.1);
    }
    
    tr:hover {
        background-color: #f5f5f5;
        transform: scale(1.02);
        box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.2), -1px -1px 8px rgba(0, 0, 0, 0.2);
    }
    
    @media only screen and (max-width: 768px) {
        table {
            width: 90%;
        }
    }
	
a{
    /* text-decoration: none; */
	color:blue;
}
.add{
	/* text-align:right; */
}

.btn{
  background: none;
  font-family: "montserrat",sans-serif;
  text-transform: uppercase;
  padding: 12px 20px;
  min-width: 150px;
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
  background: gray;
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

	</style>
	</head>
<body>
<?php require "menu.php" ?>
    <div class="container">
		<center>
		<table class="">
            <a href="Student_add.php" class="add btn btn1" style="font-size:25">Add Student</a>
			<h1>Students List</h1>
            <br>
            <br>
            
		<tr>
		<th style="text-align:center">Id</th>
		<th style="text-align:center">RollNo</th>
		<th style="text-align:center">Name</th>
		<th style="text-align:center">DOB</th>
		<th style="text-align:center">Email</th>
		<th style="text-align:center">Mobile</th>
		<th style="text-align:center">Department</th>
		<th style="text-align:center">Semaster</th>
		<th style="text-align:center">Address</th>
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
                <td style="text-align:center"><?php echo $rows['Rollno'];?></td>
                <td style="text-align:center"><?php echo $rows['Sname'];?></td>
                <td style="text-align:center"><?php echo date('d-m-Y',strtotime($rows['Dob']));?></td>
                <td style="text-align:center"><?php echo $rows['Email'];?></td>
                <td style="text-align:center"><?php echo $rows['Mobile'];?></td>
				<td style="text-align:center"><?php echo $rows['Depart'];?></td>
				<td style="text-align:center"><?php echo $rows['Sem'];?></td>
				<td style="text-align:center"><?php echo $rows['Address'];?></td>
                <td style="text-align:center">
				<a type="button" class="btn btn1" href="Student_edit.php?idn=<?php echo $rows['Id'];?>&roll=<?php echo $rows['Rollno'];?>&nam=<?php echo $rows['Sname'];?>&date=<?php echo $rows['Dob'];?>&email=<?php echo $rows['Email'];?>&mobil=<?php echo $rows['Mobile'];?>&dept=<?php echo $rows['Depart'];?>&sem=<?php echo $rows['Sem'];?>&add=<?php echo $rows['Address'];?>">Edit</a>
				</td>
				<td style="text-align:center">
				<a type="button" class="btn btn2" href="Student_delete.php?id=<?php echo $rows['Id']; ?>"onClick="return confirm('Are You Sure You Want To Delete This Record ?')">Delete</a>
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