<?php
		
	class IndexController {
			
		
		function __construct() {
			
		}
		
		
		// LISTE DES ACTIONS DE CE CONTROLEUR
		
		// Action par défaut
		function index() {						
			// Selectionne et charge la vue
			require_once("view/index/main.php");
		}
		
		function mentions() {
			// Selectionne et charge la vue
			require_once("view/index/mentions_legales.php");
		} 
	

		
	}

?>