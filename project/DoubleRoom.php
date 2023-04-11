<?php 
class DoubleRoom extends Room {
   private $roomType="Double";
   
     private $roomCapacity =2;
   
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
    public function roomType():bool {
        return $this->roomType;
    }
   
    
}
