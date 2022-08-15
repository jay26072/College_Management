<?php
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']=true){
  $loggedin= true;
}
else
{
  $loggedin=false;
}
echo'
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">CLG</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
       ';
        if(!$loggedin){
        echo'<li class="nav-item">
          <a class="nav-link active" href="index.php">Login</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="register.php">Sign Up</a>
      </li>';
        }
      if($loggedin){
      echo' 
      <li class="nav-item">
      <a class="nav-link" aria-current="page" href="main.php">Home</a>
    </li>
        <li class="nav-item">
        <a class="nav-link" href="Faculty.php">Faculty</a>
      </li>
      
        <li class="nav-item">
        <a class="nav-link" href="Student.php">Student</a>
      </li>

      <li class="nav-item">
      <a class="nav-link" href="dept.php">Department</a>
    </li>
      
        <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>';
      }
      echo '</ul>

    </div>
  </div>
</nav>';
?>
<link rel="stylesheet" href="bootstrap.min.css">