<?php

include("ConnexionBase.php");

class Intervention 
{

    private $IDINTERVENTION;
    private $IDSTATION;
    private $IDVEHICULE;
    private $DATEDEBUT;
    private $DATEFIN ;
    private $COMPTERENDU;
 
    
    public function __construct() 
    {  
        
    }
/*public function __construct($IDCLIENT,$NOMCLIENT,$PRENOMCLIENT,$ADRESSECLIENT,$CPCLIENT,$VILLECLIENT,$TELCLIENT,$MAILCLIENT,$DATENAISSANCECLIENT,$CB,$MDPCLIENT) 
    {  
        $this->IDINTERVENTION=$IDINTERVENTION;
        $this->IDSTATION = $IDSTATION;
        $this->IDVEHICULE = $IDVEHICULE;
        $this->DATEDEBUT = $DATEDEBUT;
        $this->DATEFIN = $DATEFIN;
        $this->COMPTERENDU = $COMPTERENDU;
               
    }*/
    
    
   
    
    private function mapResult($infos) {
        $this->IDINTERVENTION = $infos->IDINTERVENTION;
        $this->IDSTATION = $infos->IDSTATION;
        $this->IDVEHICULE = $infos->IDVEHICULE;
        $this->DATEDEBUT = $infos->DATEDEBUT;
        $this->DATEFIN = $infos->DATEFIN;
        $this->COMPTERENDU = $infos->COMPTERENDU;
    
    }
    
    public function getInfosIntervention($idIntervention) {
    
        ConnexionBase::Init();
    
        $sql = "SELECT * FROM Intervention WHERE IDINTERVENTION='".$idIntervention."'";
        $rep =  ConnexionBase::$pdo->query($sql);
        $rep->setFetchMode(PDO::FETCH_CLASS,"Intervention");
    
        $inter = $rep->fetchAll();
    
        $this->mapResult($inter[0]);
    }
}