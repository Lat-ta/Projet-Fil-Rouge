<?php

include("ConnexionBase.php");

class Abonnement
{

    public $IDABONNEMENT;
    public $TYPEABONNEMENT;
    public $DESCRIPTIONABONNEMENT;
    public $PRIXABONNEMENT;
    public $PRIX1ERE30MIN;
    public $PRIX2EME30MIN;
    
    
    public function __construct() 
    {  
        
    }

    /*public function __construct($IDABONNEMENT,$TYPEABONNEMENT,$DESCRIPTIONABONNEMENT,$PRIXABONNEMENT,$PRIX1ERE30MIN,$PRIX2EME30MIN) 
    {  
        $this->IDABONNEMENT=$IDABONNEMENT;
        $this->TYPEABONNEMENT = $TYPEABONNEMENT;
        $this->DESCRIPTIONABONNEMENT = $DESCRIPTIONABONNEMENT;
        $this->PRIXABONNEMENT = $PRIXABONNEMENT;
        $this->PRIX1ERE30MIN = $PRIX1ERE30MIN;
        $this->PRIX2EME30MIN = $PRIX2EME30MIN;
            
    }*/
    
    private function mapResult($infos) {    
        $this->IDABONNEMENT = $infos->IDABONNEMENT;
        $this->TYPEABONNEMENT = $infos->TYPEABONNEMENT;
        $this->DESCRIPTIONABONNEMENT = $infos->DESCRIPTIONABONNEMENT;
        $this->PRIXABONNEMENT = $infos->PRIXABONNEMENT;
        $this->PRIX1ERE30MIN = $infos->PRIX1ERE30MIN;
        $this->PRIX2EME30MIN = $infos->PRIX2EME30MIN;
        
    }
   

    public function getAbonnements() {

        ConnexionBase::Init();

        $sql = "SELECT * FROM abonnement";        
        $rep =  ConnexionBase::$pdo->query($sql); 
        $rep->setFetchMode(PDO::FETCH_CLASS,"Abonnement");
        
        $abo = $rep->fetchAll(); 

        $this->mapResult($abo[0]);
    }

	public function getAbonnements($idAbo) {

         ConnexionBase::Init();

        $sql = "SELECT * FROM Abonnement WHERE IDABONNEMENT='".$idAbo."'";        
        $rep =  ConnexionBase::$pdo->query($sql); 
        $rep->setFetchMode(PDO::FETCH_CLASS,"Abonnement");
        
        $abo = $rep->fetchAll(); 

        $this->mapResult($abo[0]);
    }

    

}
