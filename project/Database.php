<?php 
 class Database{
private $servername = "localhost";
private $username = "root";
private $password = "";
private $dbname ="project";
private $conn;
public function __construct() {
       
     
      
  
      
 // Create connection
$this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

 
    
 }
public  function connect(){
  return $this->conn;
}


}
?>