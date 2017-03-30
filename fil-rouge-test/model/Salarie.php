<?php

include("ConnexionBase.php");

class Salarie 
{

    public $IDSALARIE;
    public $NOMSALARIE;
    public $PRENOMSALARIE;
    public $ADRESSESALARIE;
    public $CPSALARIE;
    public $VILLESALARIE;
    public $TELSALARIE;
    public $MAILSALARIE;
    public $MDPSALARIE;
    public $DATENAISSANCESALARIE;
    public $POSTESALARIE;
    public $DATEEMBAUCHE;
    public $DATEFINCONTRAT;
    
    public function __construct() 
    {  
        
    }

    
    
    public static function authentificationSalarie($login,$mdp)
    {
        
        ConnexionBase::Init();

        $sql = "SELECT * FROM salarie WHERE mailsalarie='".$login."' AND mdpsalarie='".$mdp."'";        
        $rep =  ConnexionBase::$pdo->query($sql); 
        $rep->setFetchMode(PDO::FETCH_CLASS,"Salarie");
        $salarie = $rep->fetchAll(); 

        $id_salarie = "";

        if ($salarie) {
            $id_salarie = $salarie[0]->IDSALARIE;
        }        
        
        return $id_salarie;
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