<?php


require "Database.php";
 class Login   {
    private $email;
    private $password;

    
   
   private $conn;
    
   
  

    public static function getEmail(){
     
      return $this->email;
    }
    public static function getpassword(){
     
      return $this->password;
    }
  
    public function __construct($email,$pass) {
      $this->email=$email;
      $this->password=$pass;
      
      $db=new Database();
$this->conn=$db->connect();

       

       

     
  
       
    }

    public function GetLogin() {
      
      try{ $query = "select * from residentadvisor where Email=? and Password=? ";

        $stmt = $this->conn->prepare($query);

      /*  $this->first_name = htmlspecialchars(strip_tags($this->first_name));
        $this->last_name = htmlspecialchars(strip_tags($this->last_name));
        $this->date_of_birth = htmlspecialchars(strip_tags($this->date_of_birth));
        $this->gender = htmlspecialchars(strip_tags($this->date_of_birth));
       
*/ 

        $stmt->bind_param("ss",
        $this->email,
       
    $this->password)
    ;
 /* execute query */
 $stmt->execute();

 /* instead of bind_result: */
 $result = $stmt->get_result();

if($result->num_rows>0){  
  session_start();
  $row=$result->fetch_assoc();
  $_SESSION['admin']=$row['RID'];
   header("location: advisor.php");
}
     
        $stmt->close();
        $this->conn->close();
       
    }catch(Exception $e) {
        echo 'Message: ' .$e->getMessage();
      }
} 
public function getApplicationStatus(){

}}
