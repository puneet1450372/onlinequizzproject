
<?php

extract($_POST);




$conn= new mysqli("localhost","root","","onlinetest")or die("connection failed");

// $pass=password_hash($password,PASSWORD_BCRYPT);
// $mobilequery="select * from signup where mobile='$mobile'";
// $query= mysqli_query($conn,$mobilequery);
// $mobilecount= mysqli_num_rows($query);
// if($mobilecount>0){
//     echo "email already exits";

// }
// else{

$insertdata = "insert into signup(name,mobile,password) values('$name','$mobile','$password')";
  if ($conn->query($insertdata) === TRUE) {
   
    echo "signup succesfull";
  } 
  
  else {
    echo "Error: " . $insertdata . "<br>" . $conn->error;
  }
// } 
  $conn->close();

?>

