<?php 
class SingleRoom extends Room {

    private $roomCapacity =1;
   private $roomType="Single";
    public function getBlock(): string {
 
       return $this->getBlock;
    }
    
    public function getRmNumber(): int {
        return $this->getRmNumber;
    }
    
    public function getRmCap():int {
       return $this->getRmCap;
    }
    
    public function hasSpace():bool {
        
    }
    public function roomType():string {
        return $this->roomType; 
    }
   
   
}
