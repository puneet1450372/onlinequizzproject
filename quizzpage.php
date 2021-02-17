
<?php include 'header.php' ?>
<?php
if(!isset($_SESSION['user']))
{
    header('location:login.php');
}
else if($_SESSION['is_admin']!=0)
{
  header('location:adminpanel.php');
}
$conn= new mysqli('localhost','root','','onlinetest');
$query="select *from category";

$res=mysqli_query($conn,$query);
$num=mysqli_num_rows($res);

?>
<!DOCTYPE html>
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
  text-align: center;
  color:red;
  font-size:30px;
}
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 100%;
  text-align: center;
  padding-top:25px;
  padding-bottom:25px;
  font-size:25px;
  margin:20px;
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
<body>

<h1>Welcome <?php echo $_SESSION['user']; ?> to this userpanel</h1>

<?php
for($i=0;$i<=$num-1;$i++)
{
  $res1=mysqli_fetch_assoc($res);
 echo  '<div class="col-sm-4 col-md-4 col-lg-4" class="container">';
  echo  '<div class="card">
      <div class="card-body">
        <h5 class="card-title">'.$res1['cat'].'</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        
        <a href="multiform.php?idchoose='.$res1['id'].'" class="btn btn-primary bbtt" > Start Quizz</a>
      </div>
    </div>
  </div>';
}
?>


</body>
</html>



