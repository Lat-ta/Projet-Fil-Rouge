<?php
	require_once("model/Abonnement.php");	
	
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

		function utilisation() {
			// Selectionne et charge la vue
			require_once("view/index/utilisation.php");
		} 

		function listeAbonnement() {
			// Selectionne et charge la vue
			$abonnements = Abonnement::getAbonnements(); 
			require_once("view/index/listeAbonnement.php");
		} 
		
		function infosTrafic() {
			require_once("view/station/infos.php");	
		}
	}

?>