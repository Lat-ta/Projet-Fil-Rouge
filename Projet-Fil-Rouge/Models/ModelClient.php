<?php


include("../Controller/IndexController.php");
include("../Cnx/ConnexionBase.php");
include("../View/connexion.php");

class ModelClient 
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
    
    public function __construct($IDCLIENT,$NOMCLIENT,$PRENOMCLIENT,$ADRESSECLIENT,$CPCLIENT,$VILLECLIENT,$TELCLIENT,$MAILCLIENT,$DATENAISSANCECLIENT,$CB,$MDPCLIENT) 
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
        
    }
    
    
    public static function authentificationClient($login,$mdp)
    {
        
        $sql = "SELECT mailclient,mdpclient FROM Client WHERE mailclient='".$login."' AND mdpclient='".$mdp."'";
        $rep =  ConnexionBase::$pdo->query($sql); 
        $rep->setFetchMode(PDO::FETCH_CLASS,"ModelClient");
        $clients = $rep->fetchAll(); 
        foreach($clients as $client){
            if($client['mailclient']==$login && $client['mdpclient']==$mdp){
                $presentDansBase = array($client['mailclient'],$client['mdpclient']);
            }
            else{
                $presentDansBase = "pasClient";
            }
        }
        
        return $presentDansBase; 

    }
}
