<?php session_start();

require_once '../Models/ModelClient.php';


require_once '../Cnx/ConnexionBase.php';

if (!isset($_POST['txtPseudo'])
	|| !isset($_POST['txtPassword'])
	|| empty($_POST['txtPseudo']) 
	|| empty($_POST['txtPassword'])
	)
{
	echo "tous les champs doivent étre saisis !"; 
	include_once("../View/connexion.phtml");
}
else
{



$_SESSION['pseudo']=$_POST['txtPseudo'];
$_SESSION['password']=$_POST['txtPassword'];
$pseudo=$_SESSION['pseudo'];
$password =$_SESSION['password'];
 //Verification du pseudo et mdp

$resultat = ModelClient::authentificationClient($pseudo, $password);
if(empty($resultat))
{
	echo "Connexion Impossible, veuillez réessayer";
	include_once("../View/connexion.phtml");
}
else
{
	header("Location:../View/User.php");
}



}

?>
