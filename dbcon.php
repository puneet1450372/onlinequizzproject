<?php

class dbcon{

    public $dbhost;
    public $dbuser;
    public $dbpass;
    public $dbname;

    public function __construct($dbhost='localhost', $dbuser='root', $dbpass='', $dbname='onlinetest')
    {
        $conn=$this->connection = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
      
        if($conn)
        {
            echo "connection established";
        }
        else{
            echo  "connection not established try again";
        }
		
}
}




?>