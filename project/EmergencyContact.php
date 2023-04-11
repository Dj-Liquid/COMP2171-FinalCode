<?php 

class EmergencyContact extends person {
     
     public $contactInfo;
   
   

    
    public function __construct($fname=null,$lname=null,$contactInfo=null) {
      
      $this->contactInfo = new ContactInfo();
        $this->first_name=$fname;
        $this->last_name=$lname;
        $this->contactInfo=$contactInfo;
   
       
    }

    public function getPhone() {
      return $this->contactInfo->getPhone();

    }
    public function getEmail() {
        return $this->contactInfo->getEmail();
        
      }}
