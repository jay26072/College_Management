<?php
error_reporting(0);
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'!=true]){
    header("location:index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome - <?php $_SESSION['username'];?></title>
</head>
<body>
    <?php require "menu.php" ?>
Welcome - <?php echo $_SESSION['username']?>
</body>
</html>