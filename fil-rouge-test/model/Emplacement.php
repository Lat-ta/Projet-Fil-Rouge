<?php

include("ConnexionBase.php");

class Emplacement 
{

    private $IDVELO;
    private $IDBORNE;
    private $DATEEMPLACEMENT;
    
    public function __construct() 
    {  
        
    }


    
    private function mapResult($infos) {
        $this->IDVELO = $infos->IDVELO;
        $this->IDBORNE = $infos->IDBORNE;
        $this->DATEEMPLACEMENT = $infos->DATEEMPLACEMENT;
    }
    
    public function getInfosEmplacement() {
    
        ConnexionBase::Init();
    
        $sql = "SELECT * FROM emplacement WHERE";
        $rep =  ConnexionBase::$pdo->query($sql);
        $rep->setFetchMode(PDO::FETCH_CLASS,"Emplacement");
    
        $emplacement = $rep->fetchAll();
    
        $this->mapResult($emplacement[0]);
    }
}
