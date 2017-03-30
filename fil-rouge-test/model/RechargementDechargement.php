<?php

include("ConnexionBase.php");

class RechargementDechargement
{

    public $IDINTERVENTION;
    public $NBVELOCHARGE;
    public $NBVELODECHARGE;
    
    
    public function __construct() 
    {  
        
    }

    /*public function __construct($IDINTERVENTION,$NBVELOCHARGE,$NBVELODECHARGE) 
    {  
        $this->IDINTERVENTION=$IDINTERVENTION;
        $this->NBVELOCHARGE = $NBVELOCHARGE;
        $this->NBVELODECHARGE = $NBVELODECHARGE;
            
    }*/
    
    private function mapResult($infos) {    
        $this->IDINTERVENTION = $infos->IDINTERVENTION;
        $this->NBVELOCHARGE = $infos->NBVELOCHARGE;
        $this->NBVELODECHARGE = $infos->NBVELODECHARGE;
        
    }
   

    public function getRechargementDechargement() {

        ConnexionBase::Init();

        $sql = "SELECT * FROM rechargement_dechargement";        
        $rep =  ConnexionBase::$pdo->query($sql); 
        $rep->setFetchMode(PDO::FETCH_CLASS,"RechargementDechargement");
        
        $rech = $rep->fetchAll(); 

        $this->mapResult($rech[0]);
    }
	
	public function getRechargementDechargement($idInt) {

         ConnexionBase::Init();

        $sql = "SELECT * FROM rechargement_dechargement WHERE IDINTERVENTION='".$idInt."'";        
        $rep =  ConnexionBase::$pdo->query($sql); 
        $rep->setFetchMode(PDO::FETCH_CLASS,"RechargementDechargement");
        
        $rech = $rep->fetchAll(); 

        $this->mapResult($rech[0]);
    }


    

}
