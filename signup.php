<!DOCTYPE html>
<html>
<head>

<style>
body{
   font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}
* {box-sizing: border-box}
input[type=text], input[type=password] {
   width: 100%;
   font-size: 18px;
   padding: 12px;
   margin: 5px 0 18px 0;
   display: inline-block;
   border: none;
   background: #f1f1f1;
}
label{
   font-size: 15px;
}
input[type=text]:focus, input[type=password]:focus {
   background-color: #ddd;
   outline: none;
}
hr {
   border: 1px solid #f1f1f1;
   margin-bottom: 25px;
}
button {
   font-size: 15px;
   font-weight: bold;
   background-color: #4CAF50;
   color: white;
   padding: 14px 20px;
   margin: 8px 0;
   border: none;
   cursor: pointer;
   width: 100%;
   opacity: 0.9;
}
button:hover {
   opacity:1;
}

.formContainer {
   padding: 16px;
}
.formContainer p{
   font-size: 28px;
}

</style>

<body>
<?php include 'header.php'?>


<form method="post" action=" ">
<div class="formContainer">
<h1 style="text-align: center;">Sign Up Form</h1>
<hr>
<label for="name"><b>Name</b></label>
<input type="text" placeholder="Enter Name" name="fname"  id="fname " required>


<label for="number"><b>Mobile number</b></label>
<input type="text" placeholder="Enter mobile number" id="mobile" name="mobile" required>

<label for="Password"><b> Password</b></label>
<input type="password" placeholder="Password"  id="password" name="password"
required>

<div>

<button type="submit" class="signup" name="submit" id="submit">Sign Up</button>
</div>
</div>
</form>

 
  <body>
  

<?php


$conn= new mysqli("localhost","root","","onlinetest")or die("connection failed");

if (isset($_POST['submit']))

{
   
   $name=$_POST['fname'];
  
   $mobile=$_POST['mobile'];
   $password=$_POST['password'];
   $pass=password_hash($password,PASSWORD_BCRYPT);

   $insertdata = "insert into signup(name,mobile,password,is_admin,status) values('$name','$mobile','$pass','0','1')";
  
  if( $conn->query($insertdata) )
  {
     echo  "<script>alert('data inserted succesfully!!!!!!!')</script>";
  }
  else{
     echo  "<script>alert('try again')</script>";
  }
  
}
?>
  </body>
</html>

</body>
</html>