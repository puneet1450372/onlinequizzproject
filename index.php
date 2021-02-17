<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Hello, world!</title>
<style>
h1{
  
  text-align: center;
  /* color:#03fc66; */
 
 ;
}
body{
  background-image: url('exam2.jpg');
  background-size:￼

	
	text-shadow: 2px 2px 5px red;opacity:#001a06;
  text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;
}
</style>
  </head>
<body >
 <?php include 'header.php' ?>
 <div style=" margin-bottom:285px; padding-top:90px;font-size:92px;color:white;">
 <h1 >Welcome to this Online Quizz platform</h1>
 <?php
 if(!isset($_SESSION['user']))
 {
  echo "<a href='login.php'> <button type='button' class='btn btn-primary' style='margin-left:45%;'>Open your Dashboard</button></a>";
 }
else if($_SESSION['is_admin']==0){
  echo "<a href='quizzpage.php'> <button type='button' class='btn btn-primary' style='margin-left:45%;'>user dashboard</button></a>";
}
else if($_SESSION['is_admin']==1){
  echo "<a href='adminpanel.php'> <button type='button' class='btn btn-primary' style='margin-left:45%;'>admin dashboard</button></a>";
}
?>
   </div>
    

    <?php include 'footer.php' ?>
 
</body>
</html>
