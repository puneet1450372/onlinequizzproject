

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>
   
<input name='searchBar' type='text' size='100' id='query'></input> 
<input name='searchBar' type='text' size='100' id='query1'></input> 
<input name='searchBar' type='text' size='100' id='query2'></input> 
<select>
<option id="res4">choose your answer</option>
<option id="res1"></option>
<option id="res2"></option>
<option id='res3'></option>
</select>
<p id="res"></p>
</body>
<script>

$(document).ready(function() {
    $("#query").focusout(function(){        
       var filter = $(this).val();        
      document.getElementById('res1').innerHTML=filter;        
    console.log(filter);
    } )
    $("#query1").focusout(function(){        
       var filter = $(this).val();                
    console.log(filter);
    document.getElementById('res2').innerHTML=filter;   
    } )
    $("#query2").focusout(function(){        
       var filter = $(this).val();                
    console.log(filter);
    document.getElementById('res3').innerHTML=filter;   
    } )
       });

</script>

</html>
 