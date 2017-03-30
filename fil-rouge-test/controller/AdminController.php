<?php 

	require_once("model/Salarie.php");	
	require_once("model/Velo.php");	

	class AdminController {

		protected $salarie;

		function __construct() {
			$this->salarie = new Salarie();

			/*session_start();
			if (!isset($_SESSION['idUtilisateurAdmin'])) {
				require_once("view/admin/connexion.php");
				die();
			}*/
		}


		// Action par défaut
		function index() {
			
			//on vérifie si on est connecté
			session_start();
			if (isset($_SESSION['idUtilisateurAdmin'])) {
				$this->monEspaceAdmin();
			} else {
				require_once("view/admin/connexion.php");
			}				
			
		}


		function monEspaceAdmin() {

			$idUtilisateurAdmin = $_SESSION['idUtilisateurAdmin'];
			$this->salarie->getInfosSalarie($idUtilisateurAdmin);
            $salarieInfo = $this->salarie;           

            require'view/admin/user.php';
		}
		
		
		function login() {
			
 			$login = $_POST['txtLogin'];
        	$mdp = $_POST['txtMdp'];
       		$idUtilisateurAdmin = Salarie::authentificationSalarie($login,$mdp); 
         
	        if ($idUtilisateurAdmin != "")
	        {	            
	        	session_start();
	            $_SESSION['idUtilisateurAdmin']= $idUtilisateurAdmin;
            	
            	$this->monEspaceAdmin();

	        } else {
	         	$msg_error = "Identifiants et/ou mot de passe invalides";
	         	require_once("view/admin/connexion.php");
	        }  

		}		


		function logout() {
			session_start();
			unset($_SESSION['idUtilisateurAdmin']);
			require_once("view/admin/connexion.php");
		}


		function veloReparations() {
			$velos = Velo::getVelosRep(); 

			if(isset($_POST['idvelo'])){
		
				$idvelo = $_POST['idvelo'];

				$detailVelo = Velo::getUnVeloRep($idvelo); 

			}

			require_once("view/admin/detailsvelo_gestion.php");
		}



	}




?>