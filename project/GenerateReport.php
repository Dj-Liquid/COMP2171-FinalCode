<?php

 class GenerateReport {
   private $report;
   private $resident;
   private $facade;

 
     
    public function __construct($report=null,$resident=null) {
        $this->facade=new FacadeClass();
        $this->resident = $resident;
        $this->report=$report;
    
    }

    public function getReport($resident) {
       return $this->facade->generateResidentReport($resident);
    }
   }
