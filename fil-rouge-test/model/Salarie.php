<?php

include("ConnexionBase.php");

class Salarie 
{

    private $IDSALARIE;
    private $NOMSALARIE;
    private $PRENOMSALARIE;
    private $ADRESSESALARIE;
    private $CPSALARIE;
    private $VILLESALARIE;
    private $TELSALARIE;
    private $MAILSALARIE;
    private $MDPSALARIE;
    private $DATENAISSANCESALARIE;
    private $POSTESALARIE;
    private $DATEEMBAUCHE;
    private $DATEFINCONTRAT;
    
    public function __construct() 
    {  
        
    }

    
    
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
    
    private function mapResult($infos) {
        $this->IDSALARIE = $infos->IDSALARIE;
        $this->NOMSALARIE = $infos->NOMSALARIE;
        $this->PRENOMSALARIE = $infos->PRENOMSALARIE;
        $this->ADRESSESALARIE = $infos->ADRESSESALARIE;
        $this->CPSALARIE = $infos->CPSALARIE;
        $this->VILLESALARIE = $infos->VILLESALARIE;
        $this->TELSALARIE = $infos->TELSALARIE;
        $this->MAILSALARIE = $infos->MAILSALARIE;
        $this->MDPSALARIE = $infos->MDPSALARIE;

        $this->POSTESALARIE = $infos->POSTESALARIE;
        $this->DATEEMBAUCHE = $infos->DATEEMBAUCHE;
        $this->DATEFINCONTRAT = $infos->DATEFINCONTRAT;
    }
    
    public function getInfosSalarie($idSalarie) {
    
        ConnexionBase::Init();
    
        $sql = "SELECT * FROM Salarie WHERE IDSALARIE='".$idSalarie."'";
        $rep =  ConnexionBase::$pdo->query($sql);
        $rep->setFetchMode(PDO::FETCH_CLASS,"Salarie");
    
        $salarie = $rep->fetchAll();
    
        $this->mapResult($salarie[0]);
    }
}
