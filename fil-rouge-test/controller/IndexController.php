<?php
		
	class IndexController {
			
		
		function __construct() {
			
		}
		
		// Recupere les parametres de manière globale
		// Pour toutes les actions de ce contrôleur
		protected function getParam() {
			// Recupère un éventuel no de départ
			global $from;
			if (isset($_GET["from"])) {
				$from = $_GET["from"];
			} else {
				$from = 1;
			}
		}
		
		// LISTE DES ACTIONS DE CE CONTROLEUR
		
		// Action par défaut
		function index() {
			global $from,$mode,$data,$categ;
			$this->getParam();
			
			// Selectionne et charge la vue
			require_once("view/index/main.php");
		}
		
		function mentions() {
			global $from;
						
			// Selectionne et charge la vue
			require_once("view/index/mentions_legales.php");
		} 

		

		
	}

?>