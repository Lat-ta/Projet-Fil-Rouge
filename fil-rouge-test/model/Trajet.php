<?php

include("ConnexionBase.php");

class Trajet 
{

    private $IDVELO;
    private $IDCLIENT;
    private $DATEDEBUTTRAJET;
    private $DATEFINTRAJET;
    private $PENALISATION;
   
    
    public function __construct() 
    {  
        
    }
    /*public function __construct($IDVELO,$IDCLIENT,$DATEDEBUTTRAJET,$DATEFINTRAJET,$PENALISATION) 
    {  
        $this->IDVELO=$IDVELO;
        $this->IDCLIENT = $IDCLIENT;
        $this->DATEDEBUTTRAJET = $DATEDEBUTTRAJET;
        $this->DATEFINTRAJET = $DATEFINTRAJET;
        $this->PENALISATION = $PENALISATION;
            
    }*/

    
    
    
    private function mapResult($infos) {
        $this->IDVELO = $infos->IDVELO;
        $this->IDCLIENT = $infos->IDCLIENT;
        $this->DATEDEBUTTRAJET = $infos->DATEDEBUTTRAJET;
        $this->DATEFINTRAJET = $infos->DATEFINTRAJET;
        $this->PENALISATION = $infos->PENALISATION;
    }
    
    public function getInfosTrajet() {
    
        ConnexionBase::Init();
    
        $sql = "SELECT * FROM Trajet";
        $rep =  ConnexionBase::$pdo->query($sql);
        $rep->setFetchMode(PDO::FETCH_CLASS,"Trajet");
    
        $trajet = $rep->fetchAll();
    
        $this->mapResult($trajet[0]);
    }
}