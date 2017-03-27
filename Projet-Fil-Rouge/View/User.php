<?php
  // Démarrage ou restauration de la session
  session_start();
  // On récupère le login qui a été envoyé avec la connexion
  $_SESSION['login'] = $_POST['txtLogin'];
?>

<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css"/>
	<title>Mon Compte</title>
	</head>
	
	<body >
	<?php include("header.php"); ?>

	
		
		
	<?php include("footer.php"); ?>
	</body>
	
</html>
