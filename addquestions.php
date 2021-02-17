<?php include 'header.php'?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>questions</title>

	<style>
 input[type=text], input[type=password] {
   width: 50%;
   font-size: 18px;
   padding: 12px;
   margin: 5px 0 18px 0;
   display: inline-block;
   border: none;
   background: #f1f1f1;
   margin-left:24%;
} 

input[type=text]:focus {
  border: 3px solid #555;
}
select{
	width: 50%;
   font-size: 18px;
   padding: 12px;
   margin: 5px 0 18px 0;
   display: inline-block;
   border: none;
   background: #f1f1f1;
   margin-left:24%;
}
h1{
	text-align: center;
}
input[type='submit']{
  background-color: white; 
  color: black; 
  border: 2px solid #4CAF50;
  width: 120px;
  height: 35px;
  margin-bottom:20px;
}

input[type='submit']:hover {
  background-color: #4CAF50;
  color: white;

}
body{
  background-image: url('bg.png');
}

	</style>
</head>
<body>

<h1>You can add new Quizz with questions and answers of the Quizz</h1>
<form method="post" action=" ">
<select name="p" required>
	<option><----select----></option>
<?php
$conn= new mysqli("localhost","root","","onlinetest")or die("connection failed");
$query="select *from category";
$res=mysqli_query($conn,$query);


while($res1=mysqli_fetch_assoc($res))
{
	?>
	<option value="<?php echo $res1['id']; ?>"><?php echo $res1['cat']; ?></option>
<?php	
}
?>
</select>
<input type="text" name="question" placeholder="Add your question" required><br>

<input type="text" name="fA1" placeholder="first option" id="query" required><br>
<input type="text" name="fA2" placeholder="second option" id="query1" required><br>
<input type="text" name="fA3" placeholder="third option" id="query2" required ><br>
<input type="text" name="fA4" placeholder="fourth option" id="query3"  required><br>
<select name="finalAns" id="finalAns">
<option>choose your correct option</option>
<!-- <option  id="res1" hidden></option>
<option  id="res2" hidden></option>
<option  id="res3"></option>
<option  id="res4" ></option>  -->
</select>

<input type="submit" name="submit" style="  margin-left:25%;" value="Add Quiz" required>
<a href="adminpanel.php" type="button" class="btn btn-primary">Back</a>
</form>
</body>

<?php

if(isset($_POST['submit']))
{
	$parent=$_POST['p'];
	echo "<script>alert($parent);</script>";
	$q=$_POST['question'];
	$p1=$_POST['fA1'];
	$p2=$_POST['fA2'];
	$p3=$_POST['fA3'];
	$p4=$_POST['fA4'];
	$c=$_POST['finalAns'];
echo $c;
	$conn= new mysqli("localhost","root","","onlinetest")or die("connection failed");

	$query="insert into adddata(questons,option1,option2,option3,option4,c_ans,parent_id) values ('$q','$p1','$p2','$p3','$p4','$c','$parent')";

	$res=mysqli_query($conn,$query);
	if( $res )
	{
	   echo  "<script>alert('data inserted succesfully!!!!!!!')</script>";
	}
	else{
	   echo  "<script>alert('try again')</script>";
	}
	
  }








?>
<?php include 'footer.php' ?>
<script>

$(document).ready(function() {
    $("#query").one("change",function(){        
       var filter = $(this).val();   
      
       if(filter!='')
       {
       $('#finalAns').append(`<option value="${filter}"> 
                                       ${filter} 
                                  </option>`);
       }
    console.log(filter);
    } )
    $("#query1").one("change",function(){        
       var filter = $(this).val();   
       if(filter!='')
       {
       $('#finalAns').append(`<option value="${filter}"> 
                                       ${filter} 
                                  </option>`);
               $('#query').css('disabled');
       }
    console.log(filter);
    
    })
    $("#query2").one("change",function(){        
       var filter = $(this).val();  
       if(filter!='')
       {
       $('#finalAns').append(`<option value="${filter}"> 
                                       ${filter} 
                                  </option>`);
       }
    console.log(filter);
    
    })
    $("#query3").one("change",function(){        
       var filter = $(this).val();  
       if(filter!='')
       {
       $('#finalAns').append(`<option value="${filter}"> 
                                       ${filter} 
                                  </option>`);   
       }           
    console.log(filter);
   
       });
      })
</script>
</html>
