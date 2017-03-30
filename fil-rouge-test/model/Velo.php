<?php

require_once("ConnexionBase.php");

class Velo 
{

    public $IDVELO;
    public $STATUTVELO;
    public $IDBORNE;
    public $IDSTATION;
    public $NOMSTATION;
    public $DATEMISEENROUTE;
    public $KMPARCOURUS;
    public $DESCRIPTIONVEHICULE;
    public $DATEDEBUT;
    public $COMPTERENDU;
    public $DATEREMISEENSERVICE;
        
    
    public static function getLesVelos()
    {
                
        ConnexionBase::Init();
        $sql = "SELECT * FROM vue_velo";
        $rep =  ConnexionBase::$pdo->query($sql);  
        $rep->setFetchMode(PDO::FETCH_CLASS,"Velo");
        $velos = $rep->fetchAll(); 

        
        return $velos; 

    }

    public static function getVelosRep(){
    
        ConnexionBase::Init();
        $sql = "SELECT * FROM velo_reparation";
        $rep =  ConnexionBase::$pdo->query($sql);  
        $rep->setFetchMode(PDO::FETCH_CLASS,"ModelVelo");
        $reparation = $rep->fetchAll(); 
        
        return $reparation; 
    
    
    }
    
    public static function getUnVeloRep($idv){
    
        ConnexionBase::Init();
        $sql = "SELECT * FROM info_rep WHERE IDVELO like'" .$idv."'";
        $rep =  ConnexionBase::$pdo->query($sql);  
        $rep->setFetchMode(PDO::FETCH_CLASS,"ModelVelo");
        $inforep = $rep->fetchAll(); 
        
        return $inforep; 
    
    
    }
    
    public static function getHistoriqueVelos(){
    
        ConnexionBase::Init();
        $sql = "SELECT * FROM historique_velo";
        $rep =  ConnexionBase::$pdo->query($sql);  
        $rep->setFetchMode(PDO::FETCH_CLASS,"ModelVelo");
        $histo = $rep->fetchAll(); 
        
        return $histo;
    
    }
    
    public static function getHistoriqueUnVelo($id){
    
        ConnexionBase::Init();
        $sql = "SELECT * FROM historique_velo WHERE IDVELO like'" .$id."'";
        $rep =  ConnexionBase::$pdo->query($sql);  
        $rep->setFetchMode(PDO::FETCH_CLASS,"ModelVelo");
        $histor = $rep->fetchAll(); 
        
        
        return $histor;
    
    }
}

