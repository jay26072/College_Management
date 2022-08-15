<?php
	include('connect.php');
	$sql="select*from tbldept";
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
		<title>Table with database</title>
	<style>
		table {
        position: absolute;
        width: 1400px;
        height: 500px;
        transform: translate(45%, 0%);
        border-collapse: collapse;
        width: 800px;
        height: 200px;
        border: 1px solid #bdc3c7;
        overflow: hidden;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.2), -1px -1px 8px rgba(0, 0, 0, 0.2);
    }
    
    tr {
        transition: all .2s ease-in;
        cursor: pointer;
    }
    
    th{
        
        background-color: #588c7e;
		color: white;
        height:56px;
    }
    td {
        padding: 12px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }
    
    #header {
        background-color: #16a085;
        color: #fff;
    }
   .add{
		display: block;
		text-align: right;
        margin-left:0 auto;
        width: 1146px;
        font-weight: 600;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
    
	}
    a{
        text-decoration: none;
    }

    
    h1 {
        font-weight: 600;
        text-align: center;
        background-color: #16a085;
		width:80%;
        color: #fff;
        padding: 0px;
        margin: 0;
        
    }
    tr:hover {
        background-color: #f5f5f5;
        transform: scale(1.02);
        box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.2), -1px -1px 8px rgba(0, 0, 0, 0.2);
    }
    body{
        
    }
    
    @media only screen and (max-width: 768px) {
        table {
            width: 90%;
        }
    }


	</style>
	</head>
<body>
<?php require "menu.php" ?>
		<center>
		<table border="8" class="content-table ">
            <a href="dept_add.php" class="add">Add</a>
			<h1>Department List</h1>
            <br>
            <br>
            
		<tr>
		<th style="text-align:center">Id</th>
		<th style="text-align:center">Department</th>
        
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
                <td style="text-align:center"><?php echo $rows['Department'];?></td>
				<td style="text-align:center">
				<a href="update.php?idn=<?php echo $rows['Id']; ?>&dept=<?php echo $rows['Department'];?>">Edit</a>
				</td>
				<td style="text-align:center">
				<a href="delete.php?idn=<?php echo $rows['Id']; ?>" onClick="return confirm('Are You Sure You Want To Delete This Record ?')">Delete</a>
				</td>
				
				</td>
            </tr>
            <?php
                }
            ?>
        </table>
        
    </section>
	</center>
</body>
</html>
<!--
	Edit: style='font-size:24px' class='fas'>&#xf044;
	Delete: style='font-size:24px' class='fas'>&#xf1f8;
	<button onClick="history.go(0);" align="down">Refresh</button>
	
-->