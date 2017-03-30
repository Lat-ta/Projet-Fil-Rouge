<?php 


require_once '../Models/ModelVelo.php';



class VeloController{

        
    public function getLesVelosAction()
    {
       $velos = ModelVelo::getLesVelos();
       require '../View/listeVelo.php';
    

    }
	
	public function getVelosRepAction()
    {
       $reparation = ModelVelo::getVelosRep();
       require '../View/detailsvelo_gestion.php';

    }
	
}
    ?>