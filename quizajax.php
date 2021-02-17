

<?php include 'header.php' ?>

<?php
$conn= new mysqli("localhost","root","","onlinetest")or die("connection failed");

$idchoose=$_GET['idchoose'];
// $parent=$_GET['parentid'];
// $ide=$_GET['id'];

?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action='score.php'>
<h1 style='float:right; color:green' id="result">Score:<?php echo $correctans=0; ?></h1>
    <h1 style="text-align: center; color:green;">Online Quizz</h1>
    <?php
// $next= mysqli_query($conn,"select *from adddata where parent_id=$idchoose ");
// $num=mysqli_num_rows($next);
// $sn=1;
// while($res=mysqli_fetch_array($next)){
//         echo "<div style='margin-left:135px;'>";
//         $answer=$res['c_ans'];
        
//         ?>
<input type="hidden" value="<?php echo  $answer; ?>" id="ans">
<input type="hidden" value="<?php echo $num; ?>" id="num">
        <?php
    //          echo  "<h3 >".$sn."."." ".$res['questons']."</h3>";
    //          echo    "<input type='radio' id='male' name='$sn' value='$res[option1]'>".$res['option1'].'<br>';
    //           echo   "<input type='radio' id='male' name='$sn' value='$res[option2]'>".$res['option2'].'<br>';
    //           echo  "<input type='radio' id='male' name='$sn' value='$res[option3]'>".$res['option3'].'<br>';
    //           echo   "<input type='radio' id='male' name='$sn' value='$res[option4]'>".$res['option4'].'<br>';
    //         // echo "Answer".":"."$res[c_ans]"."<br>";
        
    //  //  
    //           echo "</div>";
    //           $sn=$sn+1;
            
}
// echo "<a href='quizz1.php?id=$res[id]'><button id='next'> Next</button></a>";
echo "<button style='margin-left:135px;' class='btn btn-primary'type='submit' name='submit'>Submit</button>";

?>
</form>
<script> -->

// $(document).ready(function()
// {
//     $('#submit').click(function(){

//        $valll=$("input[name=op]:checked").val();
//         $answer=$('#ans').val();
//         $num=$('#num').val();
    
//         var c=0
//         for(i=0;i<=$num;i++)
//         {
//             if($valll==$answer)
           
//            { 
              
               
//                alert('correct answer');
//                c++;
//            }
//        else{
//                 alert('oops wrong answer');
//        }
// alert(c)
//         }
          
        
        
  
       
//     })
// })




</script>
</body>
<?php include 'footer.php' ?>
</html>