<?php

require_once("ConnexionBase.php");

class Souscription 
{

    private $IDABONNEMENT;
    private $IDCLIENT;
    private $DATESOUSCRIPTION;

    
    public function __construct() 
    {  
        
    }

    /*public function __construct($IDABONNEMENT,$IDCLIENT,$DATESOUSCRIPTION) 
    {  
        $this->IDABONNEMENT=$IDABONNEMENT;
        $this->IDCLIENT = $IDCLIENT;
        $this->DATESOUSCRIPTION = $DATESOUSCRIPTION;       
    }*/
    
    
    public static function abonnementsClient($idClient)
    {
        
        ConnexionBase::Init();

        $sql = "SELECT * FROM Souscription s INNER JOIN Abonnement a ON s.IDABONNEMENT=a.IDABONNEMENT WHERE s.IDCLIENT='".$idClient."'";        
        $rep =  ConnexionBase::$pdo->query($sql); 
        $rep->setFetchMode(PDO::FETCH_CLASS,"Souscription");
        $abonnements = $rep->fetchAll(); 
        
        return $abonnements;
    }
}