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
	
	public function getDateMiseEnRoute(){
        return $this->DATEMISEENROUTE;
    }
	
	public function getKmParcourus(){
        return $this->KMPARCOURUS;
    }
	
	public function getDescriptionVehicule(){
        return $this->DESCRIPTIONVEHICULE;
    }
	
	public function getDateDebut(){
        return $this->DATEDEBUT;
    }
    
	public function getCompteRendu(){
        return $this->COMPTERENDU;
    }
	
	public function getDateRemiseEnService(){
        return $this->DATEREMISEENSERVICE;
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
	
	public static function getUnVeloRep($idv){
	
		ConnexionBase::Init();
        $sql = "SELECT * FROM info_rep WHERE IDVELO like'" .$idv."'";
        $rep =  ConnexionBase::$pdo->query($sql);  
        $rep->setFetchMode(PDO::FETCH_CLASS,"ModelVelo");
        $inforep = $rep->fetchAll(); 
        
        return $inforep; 
	
	
	}
	
	public static function getHistoriqueVelos(){
	
		ConnexionBase::Init();
        $sql = "SELECT * FROM historique_velo";
        $rep =  ConnexionBase::$pdo->query($sql);  
        $rep->setFetchMode(PDO::FETCH_CLASS,"ModelVelo");
        $histo = $rep->fetchAll(); 
        
        return $histo;
	
	}
	
	public static function getHistoriqueUnVelo($id){
	
		ConnexionBase::Init();
        $sql = "SELECT * FROM historique_velo WHERE IDVELO like'" .$id."'";
        $rep =  ConnexionBase::$pdo->query($sql);  
        $rep->setFetchMode(PDO::FETCH_CLASS,"ModelVelo");
        $histor = $rep->fetchAll(); 
		
        
        return $histor;
	
	}
}

