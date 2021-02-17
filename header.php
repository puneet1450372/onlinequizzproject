<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<body>


<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#" style="height: 55px; color:white;"><span style="color:#459cff;">ONLINE </span>Test <span style="color:#d442ed;"> PORTAL</span></a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Home</a></li>
      <!-- <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a> -->
      <ul class="dropdown-menu">
          <!-- <li><a href="#">Page 1-1</a></li>
          <li><a href="#">Page 1-2</a></li>
          <li><a href="#">Page 1-3</a></li> -->
        </ul>
    </li>
      <!-- <li><a href="#">Page 2</a></li> -->
     </ul> 
    <ul class="nav navbar-nav navbar-right">

    <?php
   if(!isset($_SESSION['user']) ) {
  echo '<li><a href="login.php"><span class="glyphicon glyphicon-user"></span> login</a></li>';
  echo '<li><a href="signup.php"><span class="glyphicon glyphicon-log-in"></span> Sign up</a></li>';     
  // header('Location: /index.php');
    } else if(isset($_SESSION['user']) ){
      echo "<li ><a style='color:#52d7ff; font-size:20px;'>Welcome !"." "."<span style='color:#52d7ff; font-size:25px;'>".$_SESSION['user']."</span></a></li>";
    echo '<li><a class="button btn btn-danger" style="margin-right:15px; color:white" href="logout.php">Logout</a></li>';
  
        // header('Location: /login.php');
    }
    ?>
      
     
    </ul>
  </div>
</nav>


</body>
</html>
