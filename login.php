<?php 


?>
<?php include 'header.php' ?>  
<html>   
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<title> Login Page </title>  
<style>   
Body {  
  font-family: Calibri, Helvetica, sans-serif;  
  /* background-color: pink;   */
}  
button {   
       background-color: #4CAF50;   
       width: 100%;  
        color: white;   
        padding: 15px;   
        margin: 10px 0px;   
        border: none;   
        cursor: pointer;  
        font-size:15px; 
         }   
 form {   
        border: 3px solid #f1f1f1;   
    }   
    input[type=text], input[type=password] {
   width: 100%;
   font-size: 18px;
   padding: 12px;
   margin: 5px 0 18px 0;
   display: inline-block;
   border: none;
   background: #f1f1f1;
} 
 button:hover {   
        opacity: 0.7;   
    }   
  
        
     
 .container {   
        padding: 25px;   
        /* background-color: lightblue;   */
    }   
</style>   
</head>    
<body>    
    <center> <h1>  Login Form </h1> </center>   
    <form method="POST" accept="">  
        <div class="container">   
            <label>Mobile Number : </label>   
            <input type="text" placeholder="Enter Your Mobile number" name="username" required>  
            <label>Password : </label>   
            <input type="password" placeholder="Enter Password" name="password" required>  
            <button type="submit" name="submit">Login</button>   
             <p>if you are New user? <a href="signup.php">signup</a></p>
              
            
        </div>   
    </form> 
  
  <?php
$conn= new mysqli("localhost","root","","onlinetest")or die("connection failed");

if(isset($_POST['submit'])){
  
    $mobile=$_POST['username'];
    $password=$_POST['password'];
  
  
    $mobile_search="select *from signup where mobile='$mobile'";
  $query =mysqli_query($conn,$mobile_search);
 



      $email_pass =mysqli_fetch_assoc($query);
      $status=$email_pass['status'];
      $db_pass =$email_pass['password'];
     
      $db_admin=$email_pass['is_admin'];
     

     
      $pass_decode=password_verify($password, $db_pass);
            
      if($pass_decode){
        
         if($db_admin==0){

            $_SESSION['is_admin']=0;
          $_SESSION['user']=$email_pass['name'];
          // echo "<script>alert('user login')</script>";
          
             header('location:quizzpage.php');
         }
         else{
            $_SESSION['is_admin']=1;
          $_SESSION['user']=$email_pass['name'];
             //echo "<script>alert('admin login successful')</script>";
             header('location:adminpanel.php');
         }

      }
    else{
         echo "<script style='color:red'>alert('password incorrect')</script>";
      }
   }
  



?>
              
</body>     
</html>  