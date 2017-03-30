<?php

require_once '../Models/ModelClient.php';
require_once '../Cnx/ConnexionBase.php';


if (empty($_POST['txtPseudo'])
    
	|| empty($_POST['txtPassword'])
	|| empty($_POST['txtPasswordConfirmation'])
	)
{
	echo $message = "tous les champs doivent étre saisis !"; 
	include_once("../View/inscription.phtml");
}
else
{
	$pseudo = $_POST['txtPseudo'];
	$passwordConfirmation =$_POST['txtPasswordConfirmation'];
	$password =  $_POST['txtPassword'];
	$nom = $_POST['txtNom'];
	$prenom = $_POST['txtPrenom'];
	$adresse = $_POST['txtAdresse'];
	$cp = $_POST['txtCP'];
	$ville = $_POST['txtVille'];
	$tel = $_POST['txtTel'];
	$dateNaissance = $_POST['txtDateNaissance'];
	
	
	$resultat = ModelClient::getLeClient($pseudo); 
	
	
	if($password != $passwordConfirmation)
	{
		echo "<h2 style='color:gold'>Le mot de passe a mal ete confirme, veuillez recommencer</h2>";
		include_once("../View/inscription.phtml");
	}
	elseif(!empty($resultat))
	{
		echo "<h2 style='color:gold'>Utilisateur déjà existant<h2>";
		include_once("../View/inscription.phtml");
	}
	elseif (!filter_var($pseudo, FILTER_VALIDATE_EMAIL))
	{
	    echo "<h2 style='color:gold'>Email non valide. exemple : nom.prenom@domaine.com <h2>";
	    include_once("../View/inscription.phtml");
	}
	else
	{
	
 
	   $result = ModelClient::inscriptionClient($nom, $prenom, $adresse, $cp, $ville, $tel, $pseudo, $dateNaissance, $password);
		echo "<h2 style='color:gold'>Merci de vous être inscrit ".$prenom."</h2>";
		include_once("../View/connexion.phtml");
	}
	
	
}






?>
