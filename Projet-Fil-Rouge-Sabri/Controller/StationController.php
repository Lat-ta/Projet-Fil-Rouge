<?php 


require_once '../Models/ModelStation.php';



class StationController{

        
    public function getLesStationsAction()
    {
       $stations = ModelStation::getLesStations();
       require '../View/listeStation.phtml';
         

    }
}
    ?>