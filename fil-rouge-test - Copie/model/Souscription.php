<?php

require_once("ConnexionBase.php");

class Souscription 
{

    public $IDABONNEMENT;
    public $IDCLIENT;
    public $DATESOUSCRIPTION;

    
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
	
	public static function insertSouscription($idabo, $idclient) {
		ConnexionBase::Init();
            
        $b = false;   
        $sql="INSERT INTO souscription VALUES('$idabo','$idclient',NOW(), NOW() + INTERVAL 1 YEAR)";
        
        $res = ConnexionBase::$pdo->exec($sql);
		
		if(!empty($res) && $res > 0){
            $b = true;
        }   

        return $b;
	}
	
	public static function updateSouscription($idabo, $oldidabo, $idclient){
		ConnexionBase::Init();
            
        $b = false;   
        $sql="UPDATE souscription SET IDABONNEMENT='$idabo', DATESOUSCRIPTION=NOW(), DATEFINABONNEMENT= NOW() + INTERVAL 1 YEAR WHERE IDABONNEMENT='$oldidabo' AND IDCLIENT='$idclient' ";
        
        $res = ConnexionBase::$pdo->exec($sql);
		
		if(!empty($res) && $res > 0){
            $b = true;
        }   

        return $b;
	}
	
	
	
	
}