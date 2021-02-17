<?php include 'header.php' ?>
<?php
$conn= new mysqli("localhost","root","","onlinetest")or die("connection failed");

$idchoose=$_GET['idchoose'];
// $parent=$_GET['parentid'];
// $ide=$_GET['id'];

?>
<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<style>
* {
  box-sizing: border-box;
}

body {
  background-color: #f1f1f1;
}

#regForm {
  background-color: #ffffff;
  margin: 100px auto;
  font-family: Raleway;
  padding: 40px;
  width: 70%;
  min-width: 300px;
  font-size:20px;
}

h1 {
  text-align: center;  
}

/* input {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
} */

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
}

button {
  background-color: #4CAF50;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: Raleway;
  cursor: pointer;
}

button:hover {
  opacity: 0.8;
}

#prevBtn {
  background-color: #bbbbbb;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #4CAF50;
}
body{
  background-image: url('bg.png');
}
#display{
  text-align:center;
  font-size:20px;
}

</style>
<body oncontextmenu="return false" onselectstart="return false" onpaste="return false;" onCopy="return false" onCut="return ">
<div id="display" >
00:00
</div>
<form id="regForm" name="regForm" action="score.php" method="POST">

  <h1>Online Quizz test:</h1>
  <h1 style="float:right " class="countdown"></h1>
  <!-- One "tab" for each step in the form: -->
  <?php
$next= mysqli_query($conn,"select *from adddata where parent_id=$idchoose ORDER BY RAND ( )  LIMIT 10 ");
$num=mysqli_num_rows($next);
if($num<10)
{

 echo "This test quizz is not available yet.You Can try later<br>";  
 echo '<a href="quizzpage.php" type="button" class="btn btn-primary back">Back</a>';
}
else{
$sn=1;
while($res=mysqli_fetch_array($next)){
        // echo "<div style='margin-left:135px;'>";
        $answer=$res['c_ans'];
        
        ?>

<input type="hidden" value="<?php echo $idchoose; ?>" id="num" name="num">
<input type='hidden' value='<?php echo $res['c_ans']; ?>' id='ans2' >
        <?php
        echo "<div class='tab'>";
             echo  "<h3 >".$sn."."." ".$res['questons']."</h3>";
$arr=['option1','option2','option3','option4'];

$c=0;

for($i=0;$i<4;$i++)
{
  $a=$arr[$i];
  if($res[$a]!='')
  {
    $c++;
    
        
  }
}

     for($i=0;$i<$c ;$i++)
             {
               
               $a=$arr[$i];
            
             echo    "<input type='radio' id='male' name='op[$sn]' oninput='this.className' value='$res[$a]'> ".$res[$a].'<br>';
              //echo   "<input type='radio' id='male' name='op[$sn]'oninput='this.className' value='$res[option2]'> ".$res['option2'].'<br>';
             // echo  "<input type='radio' id='male' name='op[$sn]' oninput='this.className' value='$res[option3]'> ".$res['option3'].'<br>';
             // echo   "<input type='radio' id='male' name='op[$sn]' oninput='this.className' value='$res[option4]'> ".$res['option4'].'<br>';
          // echo "Answer".":"."$answer"."<br>";
               
              
             }
             echo "";
          echo "</div>";
              $sn=$sn+1;
            
}
echo "<div style='float:right'>";
        echo  "<button type='button' id='prevBtn' onclick='nextPrev(-1)'>Previous</button>";
         echo   "<button type='button' id='nextBtn' onclick='nextPrev(1)'>Next</button>";
         echo "</div>";
     //  
// echo "<a href='quizz1.php?id=$res[id]'><button id='next'> Next</button></a>";
// echo "<button style='margin-left:135px;' class='btn btn-primary'>Submit</button>";

?>
</div>
  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:40px;">

  <?php 
  
  for($i=1;$i<=$num;$i++)
  {
    echo '<span class="step"></span>';
  }
}
  ?>
   
   
  </div>
  
</form>

<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script>
<script>


// var timer2 = "1:00";
// var interval = setInterval(function() {


//   var timer = timer2.split(':');
//   //by parsing integer, I avoid all extra string processing
//   var minutes = parseInt(timer[0], 10);
//   var seconds = parseInt(timer[1], 10);
//   --seconds;
//   minutes = (seconds < 0) ? --minutes : minutes;
//   if (minutes < 0) clearInterval(interval);
//   seconds = (seconds < 0) ? 59 : seconds;
//   seconds = (seconds < 10) ? '0' + seconds : seconds;
//   //minutes = (minutes < 10) ?  minutes : minutes;
//   $('.countdown').html(minutes + ':' + seconds);
//   timer2 = minutes + ':' + seconds;
// }, 1000);

// window.onload=function(){
//     var button = document.getElementById('nextBtn');
//     setInterval(function(){
//         button.click();
//     },10000);  // this will make it click again every 1000 miliseconds
// };
// var auto_refresh = setTimeout(
//     function()
//     {
//     submitform();
//     }, 60000);

//     function submitform()
//     {
//       alert('test');
//       document.regForm.submit();
//
<?php     
if($num>=10)
{

  ?>
function CountDown(duration, display) {
            if (!isNaN(duration)) {
                var timer = duration, minutes, seconds;
                
              var interVal=  setInterval(function () {
                    minutes = parseInt(timer / 60, 10);
                    seconds = parseInt(timer % 60, 10);

                    minutes = minutes < 10 ? "0" + minutes : minutes;
                    seconds = seconds < 10 ? "0" + seconds : seconds;

                    $(display).html("<b>" + minutes + "m : " + seconds + "s" + "</b>");
                    if (--timer < 0) {
                        timer = duration;
                       SubmitFunction();
                       $('#display').empty();
                       clearInterval(interVal)
                    }
                    },1000);
            }
        }
        
        function SubmitFunction(){
          alert('your test time is over');
          alert('Your response is submitted ');
       $('#regForm').submit();
        
        }
    
         CountDown(300,$('#display'));
        
      <?php
}
?>
</script>
      
<?php include 'footer.php' ?>
</body>
</html>
