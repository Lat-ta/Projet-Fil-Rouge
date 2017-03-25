<?php 


require_once '../Models/ModelVelo.php';



class VeloController{

        
    public function getLesVelosAction()
    {
       $velos = ModelVelo::getLesVelos();
       require '../View/listeVelo.php';
         

    }
}
    ?>