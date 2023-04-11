<?php

 class School {
   private $name;
   public $address;
 

    
    public function __construct($name=null,$address=null) {
        $this->address=new Address();
        $this->name = $name;
        $this->address=$address;
    
    }

    public function getName() {
       return $this->name;
    }
    public function getAddress() {
        return $this->address;
     }}
