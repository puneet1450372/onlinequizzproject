<?php include 'header.php' ?>
<?php
if(isset($_POST['submit']))
{
$cat=$_POST['cat'];
echo $cat;
 $conn= new mysqli("localhost","root","","onlinetest")or die("connection failed");
 $query="insert into category(cat) values ('$cat')";
$res=mysqli_query($conn,$query);
if($res)
{
  echo "<script>alert('add category successfuly')</script>";
}
else{
  echo "<script>alert('try again')</script>";
}
}

?>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <title>Document</title>
  <style>

/* input[type=text]:focus {
  border: 3px solid #555;
  width: 50%;
/* } */
button{
  margin-left:45%;
  margin-top:30px;

} 
.back{
  margin-top:10px;
  margin-left:47%;
}
body{
  background-image: url('bg.png');
}
  </style>
</head>
<body >
  <!-- <form action=" " method="post">
  <input type="text" id="cat" name="cat">
  <input type="submit" name="submit">
  
  </form> -->
<form method="post" action="">
  <div class="w3-card-4">

<!-- <div class="w3-container w3-green">
  <h2 style="text-align: center;">Add New Category</h2>
</div> -->

<form class="w3-container">

<h1 style="text-align: center;"> New Category Name</h1>
<input class="w3-input" type="text" id="cat" name="cat" placeholder="Please input here your category name" required>

<!-- <label>Last Name</label>
<input class="w3-input" type="text"> -->
<a href="adminpanel.php" type="button" class="btn btn-primary back">Back</a>
<button type="submit"  name=' submit' class="btn btn-success" style="margin-bottom:405px">Add category</button>

</form>

</div>
</body>
</html>
<?php include 'footer.php' ?>

