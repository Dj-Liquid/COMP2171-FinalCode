<?php 
class Resident extends person{
      private $room;
      private $application;
      private $login;
      private $type;
  

    public function __construct($room,$application,$login,$type) {
      
        $this->room=$block;
        $this->application=$application;
        $this->login=$login;
        $this->type=$type;

       
    }

    public function getRoom() {
 
       return $this->block;
    }
    
    public static function getApplication($conn,$aid) {
        $query = "select * from application where AID=$aid";
  
          $result= $conn->query($query);
          
          $conn->close();
        return $result;
    }
    
    public function getType() {
       return $this->type;
    }
    
    public function hasSpace() {
        
    }
    public static function showResidents($conn){
        try{ $query = "select r.ResidentID,a.AID,a.FirstName,a.LastName,rm.RoomNo,rm.Block from application a inner join resident r on a.AID=r.AID inner join rooms rm on r.RoomID=rm.ID where a.hasResident=1 and Assigned=1";
  
          $result= @$conn->query($query);
          
          $conn->close();
          return $result;
          }catch(Exception $e) {
          echo 'Message: ' .$e->getMessage();
          }
        
      }
      public static function searchResidents($conn,$name){
        try{ 
          $query = "select r.ResidentID,a.AID,a.FirstName,a.LastName,rm.RoomNo,rm.Block from application a inner join resident r on a.AID=r.AID inner join rooms rm on r.RoomID=rm.ID where a.hasResident=1 and Assigned=1 and (a.FirstName like'%$name%' or a.LastName like'%$name%')";

          $result= $conn->query($query);
          
          $conn->close();
          return $result;
          }catch(Exception $e) {
          echo 'Message: ' .$e->getMessage();
          }
        
      }
      public static function searchResidentByid($conn,$id){
        try{ 
          $query = "select * from application a inner join resident r on a.AID=r.AID inner join rooms rm on r.RoomID=rm.ID where a.hasResident=1 and Assigned=1 and a.AID=$id";

          $result= $conn->query($query);
        
        
          return $result;
          }catch(Exception $e) {
          echo 'Message: ' .$e->getMessage();
          }
        
      }
      public static function UnassignRoom($conn,$id){
        try{ 
          $query = "select * from resident  where ResidentID=$id";
          $result= $conn->query($query);
          if($result->num_rows>0){

            $row=$result->fetch_assoc();
            $room=$row['RoomID'];
            $aid=$row['AID'];
            $query = "update  resident set Assigned=0,UnAssigned_at=now() where ResidentID=$id";

            $result= $conn->query($query);
            if($result){
              $query = "update  rooms set accupacyAmount	=	accupacyAmount	-1 where ID=$room";
  
            $result= $conn->query($query);
            if($result){
              $query = "update  application set hasResident=0 where AID=$aid";
  
            $result= $conn->query($query);
if($result){
  echo "<center class='alert alert-success'>Room successfully Unassigned</center>";
}
            }
            }
          }
        
        
          
          }catch(Exception $e) {
          echo 'Message: ' .$e->getMessage();
          }
        
      }
   
}
