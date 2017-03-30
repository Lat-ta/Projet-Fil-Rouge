<?php
	require_once("model/Client.php");	
	require_once("model/Souscription.php");	
	
	class ClientController {
				
		protected $client;

		function __construct() {
			$this->client = new Client();
		}
		

		// LISTE DES ACTIONS DE CE CONTROLEUR
		
		// Action par défaut
		function index() {
			
			//on vérifie si on est connecté
			if (isset($_SESSION['idUtilisateurEnCours'])) { 				
				$this->monEspace();
			} else {
				require_once("view/client/connexion.php");
			}				
			
		}

		function monEspace() {

			$utilisateurEnCour = $_SESSION['idUtilisateurEnCours'];
			$this->client->getInfosClient($utilisateurEnCour);
            $clientInfo = $this->client;

            $abonnements = Souscription::abonnementsClient($utilisateurEnCour);

            var_dump($abonnements);

            require'view/client/user.php';
		}
		
		
		function login() {
			
 			$login = $_POST['txtLogin'];
        	$mdp = $_POST['txtMdp'];
       		$utilisateurEnCour = Client::authentificationClient($login,$mdp); 
         
	        if ($utilisateurEnCour != "")
	        {	            
	            session_start();
	            $_SESSION['idUtilisateurEnCours']= $utilisateurEnCour;
            	
            	$this->monEspace();

	        } else {
	         	$msg_error = "Identifiants et/ou mot de passe invalides";
	         	require_once("view/client/connexion.php");
	        }  

		}		


		function logout() {
			unset($_SESSION['idUtilisateurEnCours']);
			require_once("view/client/connexion.php");
		}


		function inscription() {
			
			if (isset($_SESSION['idUtilisateurEnCours'])) {
				require'view/client/user.php';
			} else {

				//si le formulaire est posté, on insert les données en BDD
				if (isset($_POST['post'])) {
					
					$nom = $_POST["nom"];
					$prenom = $_POST["prenom"];
					$adresse = $_POST["adresse"];
					$code_postal = $_POST["code_postal"];
					$ville = $_POST["ville"];
					$date_naissance = $_POST["date_naissance"];
					$tel = $_POST["tel"];
					$mail = $_POST["mail"];
					$mdp = $_POST["mdp"];
					$verif_mdp = $_POST["verif_mdp"];

					//verifications formulaire
					$bool = true;
					$msg_error = array();					

					if (strlen($mdp) < 6) {
						$bool = false;
						array_push($msg_error, "Votre mot de passe doit faire 6 caractères minimum");
					}

					if ($mdp != $verif_mdp) {
						$bool = false;
						array_push($msg_error, "Les mots de passe ne correspondent pas");
					}

					if (Client::VerifEmailExist($mail)) {
						$bool = false;
						array_push($msg_error, "L'email saisi est déjà utilisé'");	
					}

					if ($bool == true) {						
						$newIdClient = Client::inscriptionClient($nom, $prenom, $adresse, $cp, $ville, $tel, $pseudo, $dateNaissance, $password);

						if ($newIdClient != "") {
							session_start();
	            			$_SESSION['idUtilisateurEnCours']= $newIdClient;

	            			$this->monEspace();
						}

					} else {
						require_once("view/client/inscription.php");
					}
					

				} else {
					//si non on affiche le formulaire
					require_once("view/client/inscription.php");
				}

			}

		}


		function mdpOublie() {			
			//Vérifier que le mail saisi existe bien en base de données et envoyer un mail
			$mail = $_POST["txtEmail"];
			$resultats = Client::mdpOublie($mail);
    
  
	        if(empty($resultats))
	        {
	        	$msg_error = "Email inconnu, veuillez-vous inscrire";	         	
	        }
	        else
	        {
	            foreach ($resultats as $resultat) {	         			            	
	            	mail('$pseudo', 'Mot de passe Fil Rouge', $resultat["MDPCLIENT"]);	            	
	            	$msg_success = "Un email avec votre mot de passe vient de vous être envoyé";	         	   	
	            }
	        }

			require_once("view/client/connexion.php");	          
		}
			
		
	}

?>