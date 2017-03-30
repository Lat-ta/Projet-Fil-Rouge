<?php

include("ConnexionBase.php");

class Vehicule 
{

    private $IDVEHICULE;
    private $DESCRIPTIONVEHICULE;
    private $CAPACITEVEHICULE;
    private $MARQUEVEHICULE;
    private $MODELEVEHICULE;
    
    public function __construct() 
    {  
        
    }


    
    private function mapResult($infos) {
        $this->IDVEHICULE = $infos->IDVEHICULE;
        $this->DESCRIPTIONVEHICULE = $infos->DESCRIPTIONVEHICULE;
        $this->MARQUEVEHICULE = $infos->MARQUEVEHICULE;
        $this->MODELEVEHICULE = $infos->MODELEVEHICULE;
    }
    
    public function getInfosVehicule() {
    
        ConnexionBase::Init();
    
        $sql = "SELECT * FROM vehicule";
        $rep =  ConnexionBase::$pdo->query($sql);
        $rep->setFetchMode(PDO::FETCH_CLASS,"Vehicule");
    
        $vehicule = $rep->fetchAll();
    
        $this->mapResult($vehicule[0]);
    }
}
