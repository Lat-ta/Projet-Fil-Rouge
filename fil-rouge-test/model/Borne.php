<?php

include("ConnexionBase.php");

class Borne
{

    public $IDBORNE;
    public $IDSTATION;
    public $STATUTBORNE;
    
    
    public function __construct() 
    {  
        
    }

    /*public function __construct($IDBORNE,$IDSTATION,$STATUTBORNE) 
    {  
        $this->IDBORNE=$IDBORNE;
        $this->IDSTATION = $IDSTATION;
        $this->STATUTBORNE = $STATUTBORNE;
            
    }*/
    
    private function mapResult($infos) {    
        $this->IDBORNE = $infos->IDBORNE;
        $this->IDSTATION = $infos->IDSTATION;
        $this->STATUTBORNE = $infos->STATUTBORNE;
        
    }
   

    public function getBorne() {

        ConnexionBase::Init();

        $sql = "SELECT * FROM borne";        
        $rep =  ConnexionBase::$pdo->query($sql); 
        $rep->setFetchMode(PDO::FETCH_CLASS,"Borne");
        
        $borne = $rep->fetchAll(); 

        $this->mapResult($borne[0]);
    }
	
	public function getBorne($idBorne) {

         ConnexionBase::Init();

        $sql = "SELECT * FROM borne WHERE IDBORNE='".$idBorne."'";        
        $rep =  ConnexionBase::$pdo->query($sql); 
        $rep->setFetchMode(PDO::FETCH_CLASS,"Borne");
        
        $borne = $rep->fetchAll(); 

        $this->mapResult($borne[0]);
    }


    

}
