<?php include 'header.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
     .blink {
        animation: blink-animation 1s steps(3, start) infinite;
        -webkit-animation: blink-animation 1s steps(3, start) infinite;
      }
      @keyframes blink-animation {
        to {
          visibility: hidden;
        }
      }
      @-webkit-keyframes blink-animation {
        to {
          visibility: hidden;
        }
      }
      h2{
        text-align: center;
        color:#000000;
      }
      h1{
        text-align: center;
      }
      body{

        background-color:#feffeb;
      }
    </style>
</head>
<body >
  

<h1 style="padding-top:40px;;font-size:60px;"><u>Quizz Result</u></h1>

<?php

//echo '<button onclick="window.print()" style="float:right;">Print result</button>';
error_reporting(0);


$cate=$_POST['num'];
if(!empty($_POST['op']))
    {
        
        $count=count($_POST['op']);
    $left=10-$count;
         echo "<h2>total number of attempted  question :".$count."</br>";
        echo "Number of not attempted questions :".$left."<br>";
     
        $selected=$_POST['op'];
      
        $conn= new mysqli("localhost","root","","onlinetest")or die("connection failed");
        $query="select *from adddata where parent_id=$cate";

        $q=mysqli_query($conn,$query);
        $result=0;
        // // $i=1;
        // $wrong=0;
      echo "<br>";
      while($rows=mysqli_fetch_assoc($q))
        {
         // echo $rows['c_ans']."<br>";
          foreach($selected as $key=>$value1)
          {
           
            if($rows['c_ans']==$value1)
            {
              $result++;
            }
           
            // $checked=$rows['c_ans']==$selected[$i];  
            // echo $checked;
        
        //  echo  $value1."<br>";
          }
         
        }
        $wrong=$count-$result;
        echo "total number of wrong questions :".$wrong."<br>";
        echo "your score :".$result."/10<br></h2>";
      
       // echo $value;
       
         
            // if($checked)
            // {
            //     $result++;
            //  }
          
            
            // else {
            //     $wrong++;
            //      }
            //      $i++; 
            // }
         
        if($result>3)
        {
          echo "<h1 style='text-align:center;'>Result Status :<span  class='blink' style='color:green;'>Passed...</span></h1>";
        }   
         else{
           echo "<h1 style='text-align:center' >Result Status :<span  class='blink' style='color:red'> Failed...</span></h1>";
         }
// $res=5*$result;
// echo "<h1 style='color:green;text-align:center'>Out of 10 questions  $result is correct. </br></h1>";
//           echo "<h1 style='color:green;text-align:center'>Your Score $res/50 </br></h1>";
 
          // echo "<h1 style='color:green;text-align:center'> wrong answers :".$wrong."</br></h1";
         
        // }
        } 
   else
   
   {
     
    echo "<h1 style='color:green;text-align:center'>total number of questions :"."10"."</br></h1>";
    echo "<h1 style='color:green;text-align:center'>your correct answers :"."0"."</br></h1>";
 
    
    }
   echo "<a href='quizzpage.php' class='button  btn btn-danger' style='margin-left:47%; margin-bottom:350px;';>Fininsh Test</a>";
  // echo "</div>";
?>
</body>
</html>

    <?php include 'footer.php' ?>




   
