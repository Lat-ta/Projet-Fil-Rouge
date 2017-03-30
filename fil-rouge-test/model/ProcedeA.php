<?php

include("ConnexionBase.php");

class ProcedeA
{

    public $IDINTERVENTION;
    public $IDSALARIE;
    
    
    public function __construct() 
    {  
        
    }

    /*public function __construct($IDINTERVENTION,$IDSALARIE) 
    {  
        $this->IDINTERVENTION=$IDINTERVENTION;
        $this->IDSALARIE= $IDSALARIE;
            
    }*/
    
    private function mapResult($infos) {    
        $this->IDINTERVENTION = $infos->IDINTERVENTION;
        $this->IDSALARIE = $infos->IDSALARIE;
        
    }
   

    public function getProcedeA() {

        ConnexionBase::Init();

        $sql = "SELECT * FROM procede_a";        
        $rep =  ConnexionBase::$pdo->query($sql); 
        $rep->setFetchMode(PDO::FETCH_CLASS,"ProcedeA");
        
        $proc = $rep->fetchAll(); 

        $this->mapResult($proc[0]);
    }
	
	public function getProcedeA($idInter) {

         ConnexionBase::Init();

        $sql = "SELECT * FROM procede_a WHERE IDINTERVENTION='".$idInter."'";        
        $rep =  ConnexionBase::$pdo->query($sql); 
        $rep->setFetchMode(PDO::FETCH_CLASS,"procede_a");
        
        $proc = $rep->fetchAll(); 

        $this->mapResult($proc[0]);
    }

	public function getProcedeA($idSal) {

         ConnexionBase::Init();

        $sql = "SELECT * FROM procede_a WHERE IDSALARIE='".$idSal."'";        
        $rep =  ConnexionBase::$pdo->query($sql); 
        $rep->setFetchMode(PDO::FETCH_CLASS,"procede_a");
        
        $proc = $rep->fetchAll(); 

        $this->mapResult($proc[0]);
    }

    

}
