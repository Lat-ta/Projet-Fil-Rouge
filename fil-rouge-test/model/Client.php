<?php

include("ConnexionBase.php");

class Client 
{

    public $IDCLIENT;
    public $NOMCLIENT;
    public $PRENOMCLIENT;
    public $ADRESSECLIENT;
    public $CPCLIENT;
    public $VILLECLIENT;
    public $TELCLIENT;
    public $MAILCLIENT;
    public $DATENAISSANCECLIENT;
    public $CB;
    public $MDPCLIENT;
    
    public function __construct() 
    {  
        
    }

    /*public function __construct($IDCLIENT,$NOMCLIENT,$PRENOMCLIENT,$ADRESSECLIENT,$CPCLIENT,$VILLECLIENT,$TELCLIENT,$MAILCLIENT,$DATENAISSANCECLIENT,$CB,$MDPCLIENT) 
    {  
        $this->IDCLIENT=$IDCLIENT;
        $this->NOMCLIENT = $NOMCLIENT;
        $this->PRENOMCLIENT = $PRENOMCLIENT;
        $this->ADRESSECLIENT = $ADRESSECLIENT;
        $this->CPCLIENT = $CPCLIENT;
        $this->VILLECLIENT = $VILLECLIENT;
        $this->TELCLIENT = $TELCLIENT;
        $this->MAILCLIENT = $MAILCLIENT;
        $this->DATENAISSANCECLIENT = $DATENAISSANCECLIENT;
        $this->CB = $CB;
        $this->MDPCLIENT = $MDPCLIENT;        
    }*/
    
    
    public static function authentificationClient($login,$mdp)
    {
        
        ConnexionBase::Init();

        $sql = "SELECT IDCLIENT, MAILCLIENT, MDPCLIENT FROM Client WHERE mailclient='".$login."' AND mdpclient='".$mdp."'";        
        $rep =  ConnexionBase::$pdo->query($sql); 
        $rep->setFetchMode(PDO::FETCH_CLASS,"Client");
        $client = $rep->fetchAll(); 

        $id_client = "";      

        if ($client) {
            $id_client = $client[0]->IDCLIENT;
        }        
        
        return $id_client;
    }

    private function mapResult($infos) {    
        $this->IDCLIENT = $infos->IDCLIENT;
        $this->NOMCLIENT = $infos->NOMCLIENT;
        $this->PRENOMCLIENT = $infos->PRENOMCLIENT;
        $this->ADRESSECLIENT = $infos->ADRESSECLIENT;
        $this->CPCLIENT = $infos->CPCLIENT;
        $this->VILLECLIENT = $infos->VILLECLIENT;
        $this->TELCLIENT = $infos->TELCLIENT;
        $this->MAILCLIENT = $infos->MAILCLIENT;
        $this->DATENAISSANCECLIENT = $infos->DATENAISSANCECLIENT;
        $this->CB = $infos->CB;
        $this->MDPCLIENT = $infos->MDPCLIENT;
    }

    public function getInfosClient($idClient) {

        ConnexionBase::Init();

        $sql = "SELECT * FROM Client WHERE IDCLIENT='".$idClient."'";        
        $rep =  ConnexionBase::$pdo->query($sql); 
        $rep->setFetchMode(PDO::FETCH_CLASS,"Client");
        
        $client = $rep->fetchAll(); 

        $this->mapResult($client[0]);
    }


    

}
