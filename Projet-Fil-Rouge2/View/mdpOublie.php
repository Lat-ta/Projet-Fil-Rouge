<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css"/>
	<title>Les Abonnements</title>
	</head>
	
	<body>
	<?php include("header.php"); ?>
	
	<?php include("menu.php"); ?>

	</br>
	</br>
	</br>
	</br>
	
	
	            <form method="post" id="four" action="../Controller/RechercheMDPController.php">

					Saisir votre mail :
					<input type="text" required="required"  name="txtPseudo" class="cmdTxt" id="pseudo" />
					<input type="submit" value="Valider" id="cmdGo"/>
					<input type="reset" value="Annuler"/>
			 
				</form>
		
		<?php include("footer.php"); ?>
	</body>
	
</html>