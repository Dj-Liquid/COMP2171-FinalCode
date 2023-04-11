<?php 
Abstract class Room {

   
private $block;
private $roomNumber;
private $accupacyAmount=0;

    public function __construct($block,$roomNum, $roomCapacity) {
      
        $this->block=$block;
        $this->roomNumber=$roomNum;
       $this->roomCapacity=$roomCapacity;
       

       
    }

    Abstract public function getBlock():string ;
    
    Abstract public function getRmNumber():string ;
    
    Abstract public function getRmCap():string ;
    Abstract  public function hasSpace() :string ;
   
   
}
