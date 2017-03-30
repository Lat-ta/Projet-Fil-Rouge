<?php


require_once '../Controller/VeloController.php';
require_once '../Cnx/ConnexionBase.php';

class ModelVelo 
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
        $rep->setFetchMode(PDO::FETCH_CLASS,"ModelVelo");
        $velos = $rep->fetchAll(); 

        
        return $velos; 

    }
	
	public static function getVelosRep(){
	
	    
		ConnexionBase::Init();
        $sql = "SELECT * FROM velo_reparation";
        $rep =  ConnexionBase::$pdo->query($sql);        
        $rep->setFetchMode(PDO::FETCH_CLASS,"ModelVelo");
        $reparation = $rep->fetchAll(); 
        
        return $reparation; 
	
	
	}
	
}

