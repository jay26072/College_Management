<?php
error_reporting(0);
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'!=true]){
    header("location:index.php");
    exit;
}
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome - <?php echo $_SESSION['username'];?></title>
</head>
<body>
    <?php require "menu.php" ?>
    <div class="container my-3">
<div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Welcome - <?php echo $_SESSION['username']?></h4>
  <p>Welcome To Collage Management System</p>
</div>
</div>
</body>
</html>