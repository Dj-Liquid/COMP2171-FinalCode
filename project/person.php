<?php 
class person {

private $first_name;
private $last_name;
private $date_of_birth;
private  $gender;

    
    public function __construct($fname=null,$lname=null,$dob=null,$gender=null) {
      
        $this->first_name=$fname;
        $this->last_name=$lname;
        $this->date_of_birth=$dob;
        $this->gender=$gender;

       
    }

    public function getFirstName() {
 
       return $this->first_name;
    }
    
    public function getLastName() {
        return $this->last_name;
    }
    
    public function getFullName() {
       return $this->first_name + ' ' + $this->last_name;
    }
    
    public function getDOB() {
        return $this->date_of_birth;
    }
    public function getGender() {
        return $this->gender;
    }
}
