<?php

include("ConnexionBase.php");

class Reparation 
{

    private $IDINTERVENTION;
    private $DATEREMISEENSERVICE;
    private $TYPELIEU;
    private $NOMLIEU;
    private $ADRESSELIEU;
    private $CPLIEU;
    private $VILLELIEU;
   
    
    public function __construct() 
    {  
        
    }
    /*public function __construct($IDINTERVENTION,$DATEREMISEENSERVICE,$TYPELIEU,$NOMLIEU,$ADRESSELIEU,$CPLIEU,$VILLELIEU) 
    {  
        $this->IDINTERVENTION=$IDINTERVENTION;
        $this->DATEREMISEENSERVICE = $DATEREMISEENSERVICE;
        $this->TYPELIEU = $TYPELIEU;
        $this->NOMLIEU = $NOMLIEU;
        $this->ADRESSELIEU = $ADRESSELIEU;
        $this->CPLIEU = $CPLIEU;
        $this->VILLELIEU = $VILLELIEU;
            
    }*/

    
    
    
    private function mapResult($infos) {
        $this->IDINTERVENTION = $infos->IDINTERVENTION;
        $this->DATEREMISEENSERVICE = $infos->DATEREMISEENSERVICE;
        $this->TYPELIEU = $infos->TYPELIEU;
        $this->NOMLIEU = $infos->NOMLIEU;
        $this->ADRESSELIEU = $infos->ADRESSELIEU;
        $this->CPLIEU = $infos->CPLIEU;
        $this->VILLELIEU = $infos->VILLELIEU;
    }
    
    public function getInfosReparation() {
    
        ConnexionBase::Init();
    
        $sql = "SELECT * FROM Reparation";
        $rep =  ConnexionBase::$pdo->query($sql);
        $rep->setFetchMode(PDO::FETCH_CLASS,"Reparation");
    
        $reparation = $rep->fetchAll();
    
        $this->mapResult($reparation[0]);
    }
}