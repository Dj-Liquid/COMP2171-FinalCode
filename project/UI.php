<?php

require_once "FacadeClass.php";

 class UI   {
    private $application;
    private $conn;

    private $facade;
   
   
    
   
    public static function showAllRooms($conn){
     
      try{ $query = "select * from rooms  ";

$result= $conn->query($query);

$conn->close();
return $result;
}catch(Exception $e) {
echo 'Message: ' .$e->getMessage();
}
    }

    public static function showAllApplications($conn){
     
      try{ $query = "select AID,FirstName,LastName,State from application  ";

$result= $conn->query($query);

$conn->close();
return $result;
}catch(Exception $e) {
echo 'Message: ' .$e->getMessage();
}
    }
    public static function searchResidents($conn,$name){
      try{ $query = "select a.AID,a.FirstName,a.LastName,r.RoomNo,a.Gender,a.RoomType from application a inner join resident r on a.AID=r.AID where a.State='Accepted' and a.hasResident=0 and (a.FirstName like'%$name%' or a.LastName like'%$name%')";

        $result= $conn->query($query);
        
        $conn->close();
        return $result;
        }catch(Exception $e) {
        echo 'Message: ' .$e->getMessage();
        }
      
    }
    public static function showPendingApplications($conn){
      try{ $query = "select AID,FirstName,LastName,State from application where State='Pending' ";

        $result= $conn->query($query);
        
        $conn->close();
        return $result;
        }catch(Exception $e) {
        echo 'Message: ' .$e->getMessage();
        }
      
    }
    public static function showAcceptedApplications($conn){
      try{ $query = "select AID,FirstName,LastName,State,RoomType,Gender from application where State='Accepted' and  hasResident=0 ";

        $result= $conn->query($query);
        
        $conn->close();
        return $result;
        }catch(Exception $e) {
        echo 'Message: ' .$e->getMessage();
        }
      
    }
    public static function showRejectedApplications($conn){ try{ $query = "select AID,FirstName,LastName,State from application where State='Rejected' ";

      $result= $conn->query($query);
      
      $conn->close();
      return $result;
      }catch(Exception $e) {
      echo 'Message: ' .$e->getMessage();
      }
      
    }
    public function __construct($db,$application=null) {
       
        $this->application=new Application();
      
     $this->application=$application;
      
     $this->conn=$db;

       
     $this->facade=new FacadeClass();
       

     
  
       
    }
    public function AssignRoom($aid){
      try{  $this->facade->AssignRoom($aid);
      }catch(Exception $e) {
          echo 'Message: ' .$e->getMessage();
        }

    }
    public function submitApplication() {
      try{  $this->facade->addApplicationToDatabase($this->application);
    }catch(Exception $e) {
        echo 'Message: ' .$e->getMessage();
      }
} 
public function getApplicationStatus(){

}}
