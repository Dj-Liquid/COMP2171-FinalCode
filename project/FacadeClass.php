<?php

require "Database.php";
use Dompdf\Dompdf;
 class FacadeClass   {
    
    private $conn;

    
   
   
    
   
  

 
    
    public function __construct() {
       
     
      
  
      
     $db=new Database();
$this->conn=$db->connect();
    
       
    }

public function setApplicationAccepted($aid){
  try{ $query = "update  application set State='Accepted' where AID=$aid ";

    $result= $this->conn->query($query);
    
    $this->conn->close();
    return $result;
    }catch(Exception $e) {
    echo 'Message: ' .$e->getMessage();
    }
  
}
public function setApplicationPending($aid){
  try{ $query = "update  application set State='Pending'  where AID=$aid ";

    $result= $this->conn->query($query);
    
    $this->conn->close();
    return $result;
    }catch(Exception $e) {
    echo 'Message: ' .$e->getMessage();
    }
}
public function setApplicationRejected($aid){
  try{ $query = "update  application set State='Rejected' where AID=$aid ";

    $result= $this->conn->query($query);
    
    $this->conn->close();
    return $result;
    }catch(Exception $e) {
    echo 'Message: ' .$e->getMessage();
    }
}
public function removeApplication($aid){
  try{ $query = "delete from application where AID=$aid ";

  $result= $this->conn->query($query);
  
  $this->conn->close();
  return $result;
  }catch(Exception $e) {
  echo 'Message: ' .$e->getMessage();
  }
  
}
public function removeResident($Resident){

  try{ 
    
    
    $query = "Select * from resident where AID=$Resident ";

    $result= $this->conn->query($query);
    $row=$result->fetch_assoc();
    if($result){
      $roomno=$row['RoomNo'];
$rid=$row['ResidentID'];
    
      $query = "update rooms set accupacyAmount	=accupacyAmount	-1 where RoomNo=$roomno ";
  
      $result= $this->conn->query($query);
      if($result){
     
  
      
        $query = "delete from resident where 	ResidentID=$rid ";
    
        $result= $this->conn->query($query);
        if($result){
        $query = "delete from application where AID=$Resident ";

        $result= $this->conn->query($query);
        
        }
      }
      
    }
   
    }catch(Exception $e) {
    echo 'Message: ' .$e->getMessage();
    }
}
public function updateResident($application){
  try{ $query = "update  application set
    FirstName=?,
     LastName=?,
     DOB=?,Gender=?, 
Phone=?,
Email=?,
Street=?,
Zip=?,

EFirstName=?,
ELastName=?,
EEmail=?,
EPhone=?
where AID=?
";

$stmt = $this->conn->prepare($query);

/*  $this->first_name = htmlspecialchars(strip_tags($this->first_name));
$this->last_name = htmlspecialchars(strip_tags($this->last_name));
$this->date_of_birth = htmlspecialchars(strip_tags($this->date_of_birth));
$this->gender = htmlspecialchars(strip_tags($this->date_of_birth));

*/ 
$fname=$application->person->getFirstName();
$lname=    $application->person->getLastName();
$dob = $application->person->getDOB();
$gender=  $application->person->getGender();
$phone=  $application->contactInfo->getPhone();
$email=  $application->contactInfo->getEmail();
$street=   $application->address->getStreet();
$zip= $application->address->getZip();

$efname=  $application->emergencyContact->first_name;
$elname= $application->emergencyContact->last_name;
$eemail= $application->emergencyContact->contactInfo->getEmail();
$ephone=$application->emergencyContact->contactInfo->getPhone();
$aid=$application->getAid();


$stmt->bind_param("sssssssssssss",$fname
,$lname,
$dob,
$gender,
$phone,
$email,
$street,
$zip,

$efname,
$elname,
$eemail,
$ephone,$aid
)
;


if($stmt->execute()){   echo "<center class='alert alert-success'>Update record successfully</center>";
}

$stmt->close();
$this->conn->close();
}catch(Exception $e) {
echo 'Message: ' .$e->getMessage();
}
}
public function AsisignRoom($resident,$room){
  
}

    public function addApplicationToDatabase($application) {
      try{ $query = "INSERT INTO application (
                   FirstName,
                    LastName,
                    DOB,Gender, 
Phone,
Email,
Street,
Zip,
Country,
SchoolName,
SchoolStreet,
SchoolZip,
SchoolCountry,
EFirstName,
ELastName,
EEmail,
EPhone,
RoomType,
Password,
State,ResidentType,hasResident) values( ?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)
                ";

        $stmt = $this->conn->prepare($query);

      /*  $this->first_name = htmlspecialchars(strip_tags($this->first_name));
        $this->last_name = htmlspecialchars(strip_tags($this->last_name));
        $this->date_of_birth = htmlspecialchars(strip_tags($this->date_of_birth));
        $this->gender = htmlspecialchars(strip_tags($this->date_of_birth));
       
*/ 
$fname=$application->person->getFirstName();
    $lname=    $application->person->getLastName();
       $dob = $application->person->getDOB();
       $gender=  $application->person->getGender();
      $phone=  $application->contactInfo->getPhone();
      $email=  $application->contactInfo->getEmail();
     $street=   $application->address->getStreet();
       $zip= $application->address->getZip();
       $country= $application->address->getCountry();
       $school= $application->school->getName();
       $sstreet= $application->school->getAddress()->getStreet();
       $szip= $application->school->getAddress()->getZip();
       $scountry= $application->school->getAddress()->getCountry();
      $efname=  $application->emergencyContact->first_name;
       $elname= $application->emergencyContact->last_name;
       $eemail= $application->emergencyContact->contactInfo->getEmail();
        $ephone=$application->emergencyContact->contactInfo->getPhone();
   $room= $application->roomtype;
   $pass= $application->getPassword();
$state="Pending";
$ResidentType="ragular";
$hasResident="0";
        $stmt->bind_param("ssssssssssssssssssssss",$fname
        ,$lname,
         $dob,
         $gender,
        $phone,
        $email,
        $street,
        $zip,
        $country,
        $school,
        $sstreet,
        $szip,
        $scountry,
        $efname,
        $elname,
        $eemail,
        $ephone,
    $room,
    $pass,$state,$ResidentType,$hasResident)
    ;
   
      
if($stmt->execute()){   echo "<center class='alert alert-success'>New records created successfully</center>";
}
     
        $stmt->close();
        $this->conn->close();
    }catch(Exception $e) {
        echo 'Message: ' .$e->getMessage();
      }
} 
public function getApplicationStatus(){

}
public function generateResidentReport($id){

  if(isset($_GET['rpt'])){
    require_once 'dompdf/autoload.inc.php';
   
    function user_details($id,$db){
      $result= Resident::searchResidentByid($db,$id);
  
  
      
  $row=$result->fetch_assoc();
  
       
  
  $firstname=$row['FirstName'];
  $school=$row['SchoolName'];
  $lastname=$row['LastName'];
  $roomno=$row['RoomNo'];
  $roomtype=$row['RoomType'];
  $block=$row['Block'];
  $output="
  <div class='form-row'>
  <div class='form-group col-md-6'>
      <label >First Name: </label>
      <label >$firstname</label>
  
      </div></div>
      <div class='form-row'>
      <div class='form-group col-md-6'>
      <label >Last Name: </label>
      <label >$lastname</label>
      </div>
  
  </div>
  <div class='form-row'>
  <div class='form-group col-md-6'>
      <label >School Name: </label>
      <label >$school</label>
  </div>
  
  </div>
  
  <div class='form-row'>
  <div class='form-group col-md-6'>
      <label >RoomNo: </label>
      <label >$roomno</label>
  </div>
  </div>
  <div class='form-row'>
  <div class='form-group col-md-6'>
      <label >Room Type: </label>
      <label >$roomtype</label>
  </div>
  </div>
  <div class='form-row'>
  <div class='form-group col-md-6'>
      <label >Room Block: </label>
      <label >$block</label>
  </div>
  </div>
  
  ";
  
  
  
  
  
  
  
  
  
  return $output; 
  }
  
  $id= $_GET['rpt'] ;
   
    
  $file_name= md5(rand()).'.pdf';
  //$html_code=' <link rel="stylesheet" href="dist/css/adminlte.min.css">';
  $html_code= user_details($id,$this->conn);
  
  
  $pdf=new Dompdf();
  $pdf->load_Html($html_code);
  
  $pdf->render();
  $file=$pdf->output();
  
  file_put_contents($file_name, $file);
  $pdf->stream("Report", array("Attachment" => 0));
unlink($file_name);
   
  
  
  
   
  
  }
}
public  function AssignRoom($aid) {

  try{ $query = "select * from  application where AID=$aid ";

    $result= $this->conn->query($query);
    
    if($result->num_rows>0){
        $row=$result->fetch_assoc();
    $roomtype=$row['RoomType'];
    $query = "select * from  rooms where 	accupacyAmount < RoomCapacity  and Type='$roomtype' ";

      $result= $this->conn->query($query);
      
      if($result->num_rows>0){
          $row=$result->fetch_assoc();
       $room=   $row['ID'];
       

       $query = "insert into resident(AID,RoomID,Assigned_at,Assigned) values($aid,$room,now(),1) ";

      $result= $this->conn->query($query);
     
      if($result){
          $query = "update rooms set 	accupacyAmount	=	accupacyAmount	+1 where ID=$room ";

          
          $result= $this->conn->query($query);
         
          if($result){   $query = "update application set hasResident=1 where AID=$aid ";

              
              $result= $this->conn->query($query);              echo "<center class='alert alert-success'>Room successfully assigned</center>";

            
           

          

          }}
      }else{
        echo "<center class='alert alert-danger'>No room available</center>";
      }
      }
     

      }catch(Exception $e) {
      echo 'Message: ' .$e->getMessage();
      }
}

}
