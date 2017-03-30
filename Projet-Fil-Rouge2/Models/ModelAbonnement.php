<?php

require_once '../Controller/AbonnementController.php';
require_once '../Cnx/ConnexionBase.php';

class ModelAbonnement
{
    
    public function getIdAbonnement(){
        return $this->IDABONNEMENT;
    }
    
    public function getTypeAbonnement(){
        return $this->TYPEABONNEMENT;
    }
    
    public function getDescriptionAbonnement(){
        return $this->DESCRIPTIONABONNEMENT; 
    
    }
	
    public function getPrixAbonnement(){
	return $this->PRIXABONNEMENT;
      
	}
	
	public function getPrix1ere30Min(){
	return $this->PRIX1ERE30MIN;
      
	}
	
	public function getPrix2eme30Min(){
	return $this->PRIX2EME30MIN;
      
	}

    
    public static function getLesAbonnements()
    {
                
        ConnexionBase::Init();
        $sql = "SELECT * FROM ABONNEMENT";
        $rep =  ConnexionBase::$pdo->query($sql);  
        $rep->setFetchMode(PDO::FETCH_CLASS,"ModelAbonnement");
        $abonnements = $rep->fetchAll(); 
        
        return $abonnements; 

    }
	
	/*
	public function getLePrix($a)
    {
        ConnexionBase::Init();        
        $sql = "SELECT PRIXABONNEMENT FROM abonnement WHERE DESCRIPTIONABONNEMENT =" .$a;
        $req = $rep =  ConnexionBase::$pdo->query($sql); 
        
        return $stations; 

    } */
	
	
}
