<?php include 'header.php' ?>
<?php
if(!isset($_SESSION['user']))
{

  header('location:login.php');
}
else if($_SESSION['is_admin']==0)
{
  header('location:quizzpage.php');
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
body{
  background-image: url('bg.png');
}
h1{
  text-align: center;

}
.card-title{
  font-size:25px;
  font-style:bold;
  color:red;
  font-size:30px;
}
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 100%;
  background-color: yellow;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
  padding: 2px 16px;
}
.bbtt{
  margin-bottom:10px;
}

     </style> 
</head>
<h1>Welcome <?php echo $_SESSION['user']; ?> to this adminpanel</h1>
<div class="row" style="margin-left:20%; padding:20px; ">
  <div class="col-sm-4"  style="text-align:center; padding:25px; margin-right:20px;background-color:
yellow; font-size:20px;">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">add Category</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="addcat.php" class="btn btn-primary bbtt" > add Category</a>
      </div>
    </div>
  </div>
  <div class="col-sm-4"style="text-align:center; padding:25px; margin-right:20px;background-color:
yellow ; font-size:20px;">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Add new Quizz</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="addquestions.php" class="btn btn-primary bbtt"> Add new Quizz</a>
      </div>
    </div>
  </div>
</div>

<!-- <div class="row" style="margin-left:20%; padding:20px;">
  <div class="col-sm-4"  style="text-align:center; padding:25px; margin-right:20px;background-color:
#8c73de ;color:white; font-size:20px;">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">All users</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="multiform.php?idchoose=3" class="btn btn-primary bbtt"> All users list</a>
      </div>
    </div>
  </div>
  <div class="col-sm-4" style="text-align:center; padding:25px; margin-right:20px;background-color:
#8c73de ;color:white; font-size:20px;">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Completed test</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="multiform.php?idchoose=4" class="btn btn-primary bbtt"> Quizz</a>
      </div>
    </div>
  </div>
  
</div> --> -->
<div style="margin-top:240px;">
<?php include 'footer.php' ?>
</div>

</body>
</html>