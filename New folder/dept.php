<?php
	include('connect.php');
	$sql="select*from tbldept";
	$result=mysqli_query($con,$sql);
	
?>
<html>
	<head>
		<title>Table with database</title>
		<meta name='viewport' content='width=device-width, initial-scale=1'>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
	<style>
			<!--table {
			border-collapse: collapse;
			width: 45%;
			color: #588c7e;
			font-family: monospace;
			font-size: 25px;
			text-align: left;
			}
			th {
			background-color: #588c7e;
			color: white;
			}
			tr:nth-child(even) {background-color: #f2f2f2}
			tr:nth-child(odd) {background-color: white}
			tr:hover {background-color: #C0C0C0;}-->
			
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
        width: 800px;
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
	button{
	align: down}
	</style>
		
	</head>
<body>
		<center>
		<table border="8">
			<h1>Department List</h1>
		<tr>
		<th>Id</th>
		<th>Department</th>
		<th colspan="2">Action</th>
		</tr>
			
		<tr>
            <?php
                
                while($rows=$result->fetch_assoc())
                {
            ?>
			</tr>
            <tr>
                
                <td><?php echo $rows['Id'];?></td>
                <td><?php echo $rows['Department'];?></td>
				<td>
				<a href="update.php?idn=<?php echo $rows['Id']; ?>&dept=<?php echo $rows['Department'];?>">Edit</a>
				</td>
				<td>
				<a href="delete.php?idn=<?php echo $rows['Id']; ?>">Delete</a>
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