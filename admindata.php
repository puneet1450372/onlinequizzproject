
<?php
 require_once('dbcon.php');  
class admin extends dbcon{

    public function __construct()
    {
 
      $this->conn=new dbcon();
      $this->
    }

    public function questions()
    {
      
      
     

    

    


    }

}

$admin=new admin();
 $result=$admin->questions();
 print_r($result);
?>