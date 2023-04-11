<?php 
class Address {
   private $street;
   private $zipCode;
   private $country;

   

    
    public function __construct($street=null,$zipCode=null,$country=null) {
       
   $this->street=$street;
   $this->zipCode=$zipCode;
   $this->country=$country;
       
    }
 public function getAddress(){
return $this->street." ".$this->country;
    }
    public function getStreet(){
        return $this->street;
    }
    public function getCountry(){
        return $this->country;

    }
    public function getZip(){
        return $this->zipCode;

}}
