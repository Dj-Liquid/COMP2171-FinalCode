<?php 

 class Application {
    
    public  $applicationState;
    public $school;
    public $address;
    public $contactInfo ;
    public $emergencyContact;
    public $roomType;
    public $person;
    private $password;
    private $aid;
    public function __construct($contactInfo=null,$address=null,$school=null,$emergencyContact=null,$roomType=null,$applicationState=null,$person=null,$pass=null,$aid=null) {
       $this->school=new School();
       $this->address=new Address();

       $this->ContactInfo=new ContactInfo();
       $this->person=new person();
       $this->person=$person;
       $this->emergencyContact=new EmergencyContact();
$this->school=$school;
$this->address=$address;
$this->contactInfo=$contactInfo;
$this->emergencyContact=$emergencyContact;
   $this->roomtype=$roomType;
   $this->applicationState=$applicationState;
 $this->password=$pass;
 $this->aid=$aid;


    }
 public function getPassword() {
      
   return $this->password;
}

public function getAid() {
      
    return $this->aid;
 }
    public function updateSchool($school) {
      
        $this->school=$school;
    }
    public function updateAddress($address) {
        $this->address=$address;

    }
    public function updateContactInfo($contactInfo) {
        $this->contactInfo=$contactInfo;

    }
    public function updateEmergencyContact($eContact) {
        $this->emergencyContact=$emergencyContact;

    }
    public function updateAll() {
       
    }

    public function getStatus() {
       
    }}
