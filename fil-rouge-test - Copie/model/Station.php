<?php

require_once("ConnexionBase.php");

class Station 
{


    private $IDSTATION;
    private $EMPLACEMENTSTATION;
    private $NOMSTATION;
    private $LAT;
    private $LONG;
    private $CAPACITESTATION;
    private $BONUS;    
    
    public function __construct() 
    {  
        
    }
    
    public function getIdStation(){
        return $this->IDSTATION;
    }
    
    public function getNomStation(){
        return $this->NOMSTATION;
    }

    public function getEmplacementStation(){
        return $this->EMPLACEMENTSTATION;
    }
    
    public function getLat(){
        return $this->LAT;
    }

    public function getLong(){
        return $this->LONG;
    }

    public function getCapaciteStation(){
        return $this->CAPACITESTATION; 
    
    }
	
    public function getBonus(){
	   return $this->BONUS;      
	}

    
    public static function getAllStations()
    {                
        ConnexionBase::Init();
        $sql = "SELECT * FROM STATION";
        $rep =  ConnexionBase::$pdo->query($sql);  
        $rep->setFetchMode(PDO::FETCH_CLASS,"Station");
        $stations = $rep->fetchAll(); 
        
        return $stations; 
    }
}
