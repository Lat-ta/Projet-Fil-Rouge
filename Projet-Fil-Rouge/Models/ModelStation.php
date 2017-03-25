<?php


require_once '../Controller/StationController.php';
require_once '../Cnx/ConnexionBase.php';

class ModelStation 
{

    private $IDSTATION;
    private $EMPLACEMENTSTATION;
    private $CAPACITESTATION; 
    
    public function __construct($IDSTATION,$EMPLACEMENTSTATION,$CAPACITESTATION){
        
        $this->IDSTATION=$IDSTATION;
        $this->EMPLACEMENTSTATION=$EMPLACEMENTSTATION;
        $this->CAPACITESTATION=$CAPACITESTATION;
        
    } 
    
    public function getIdStation(){
        return $this->IDSTATION;
    }
    
    public function getEmplacementStation(){
        return $this->EMPLACEMENTSTATION;
    }
    
    public function getCapaciteStation(){
        return $this->CAPACITESTATION; 
    
    }
    
    public static function getLesStations()
    {
                
        ConnexionBase::Init();
        $sql = "SELECT * FROM STATION";
        $rep =  ConnexionBase::$pdo->query($sql);  
        $rep->setFetchMode(PDO::FETCH_CLASS,"ModelStation");
        $stations = $rep->fetchAll(); 

        
        return $stations; 

    }
}
