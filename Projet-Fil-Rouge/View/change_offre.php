<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css"/>
	<title>Changement Offre</title>
	</head>
	
	<body >
	<?php include("header.php"); ?>

		<form method="post" action="paiement.php">
		 
			<label for="abonnement">Choisissez votre nouvel abonnement dans la liste :</label><br />
			
				 
						<?php
						require_once '../Controller/AbonnementController.php';
						$abonnements = ModelAbonnement::getLesAbonnements(); 
						?> 
						<select name="abonnement" id="abonnement">
						<?php
						foreach ($abonnements as $donnees): ?>
				
						   <option value="<?php echo $donnees->getDescriptionAbonnement() ?>"> <?php echo $donnees->getDescriptionAbonnement() ?></option>
				
				<?php endforeach;?>
				</select>
			<input type="submit" value="Choisir">
		</form>
		
		

		<?php include("footer.php"); ?>
		
	</body>
</html>