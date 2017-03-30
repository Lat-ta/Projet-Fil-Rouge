<?php
	require_once("model/Station.php");	

	class StationController {
			
		
		function __construct() {
			
		}
				
		// LISTE DES ACTIONS DE CE CONTROLEUR
		
		// Action par défaut
		function index() {			
			// Selectionne et charge la vue

			$stations = Station::getAllStations(); 

			require_once("view/station/listeStation.php");
		}
		

		function utf8ize($d) {
		    if (is_array($d)) 
		        foreach ($d as $k => $v) 
		            $d[$k] = $this->utf8ize($v);

		     else if(is_object($d))
		        foreach ($d as $k => $v) 
		            $d->$k = $this->utf8ize($v);

		     else 
		        return utf8_encode($d);

		    return $d;
		}

		function getListeStationJson() {
			$stations = Station::getAllStations(); 
			
			$stationsArray = array();
			$i = 0;

			foreach ($stations as $station) {

				$stationsArray[] = array(
					"id" => $station->getIdStation(),
					"nom" => $station->getNomStation(),
        			"lat" => $station->getLat(),
        			"lng" => $station->getLong()
				);
				
				$i += 1;
			}						

			header('Content-Type: application/json');			
			//var_dump($stationsArray);
			echo json_encode($this->utf8ize($stationsArray));
		}


		
		
	}

?>