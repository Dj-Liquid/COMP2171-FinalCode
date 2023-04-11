<?php 
 class ContactInfo {
    private $phone;
    private $email;
  

    
    public function __construct($phone=null,$email=null) {
        $this->phone = $phone;
        $this->email = $email;
   
       
    }

    public function getPhone() {
       return $this->phone;

    }
    public function getEmail() {
       return $this->email;
    }
}
