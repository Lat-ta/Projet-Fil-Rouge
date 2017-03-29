<?php

include("ConnexionBase.php");

class Velo 
{

    
	public function getIdVelo(){
        return $this->IDVELO;
    }
	
	public function getStatutVelo(){
        return $this->STATUTVELO;
    }
	
	public function getIdBorne(){
        return $this->IDBORNE;
    }
	
    public function getIdStation(){
        return $this->IDSTATION;
    }
    
    public function getNomStation(){
        return $this->NOMSTATION;
    }
    
    
    public static function getLesVelos()
    {
                
        ConnexionBase::Init();
        $sql = "SELECT * FROM vue_velo";
        $rep =  ConnexionBase::$pdo->query($sql);  
        $rep->setFetchMode(PDO::FETCH_CLASS,"Velo");
        $velos = $rep->fetchAll(); 

        
        return $velos; 

    }
}

