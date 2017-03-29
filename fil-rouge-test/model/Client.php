<?php

include("ConnexionBase.php");

class Client 
{

    private $IDCLIENT;
    private $NOMCLIENT;
    private $PRENOMCLIENT;
    private $ADRESSECLIENT;
    private $CPCLIENT;
    private $VILLECLIENT;
    private $TELCLIENT;
    private $MAILCLIENT;
    private $DATENAISSANCECLIENT;
    private $CB;
    private $MDPCLIENT;
    
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
        $clients = $rep->fetchAll(); 

        $id_client = "";

        foreach($clients as $client){
            if($client['MAILCLIENT']==$login && $client['MDPCLIENT']==$mdp){
                $id_client = $client['IDCLIENT'];
            }
        }
        
        return $id_client;
    }
}
