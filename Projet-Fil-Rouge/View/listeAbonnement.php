<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css"/>
	<title>Les Abonnements</title>
	</head>
	
	<body >
	<?php include("header.php"); ?>
	
	<?php include("menu.php"); ?>

	</br>
	</br>
	
	
	<h1 id="titre">Les Abonnements</h1>
	
		<table>
			<tr>
				<td>Type Abonnement</td>
				<td>Description Abonnement</td>
				<td>Prix Abonnement</td>
				<td>Prix Première demi-heure</td>
				<td>Prix Deuxième demi-heure</td>

			</tr>
		<?php 
		require_once '../Controller/AbonnementController.php';

		$abonnements = ModelAbonnement::getLesAbonnements(); 
		
		foreach ($abonnements as $abonnement):?>
			<tr >
			  <td> <?php echo $abonnement->getTypeAbonnement()?> </td>
			  <td> <?php echo $abonnement->getDescriptionAbonnement() ?> </td>
			  <td><?php echo $abonnement->getPrixAbonnement()?></td>
			  <td><?php echo $abonnement->getPrix1ere30Min()?></td>
			  <td><?php echo $abonnement->getPrix2eme30Min()?></td>
			</tr>
		  
		<?php endforeach;?>
		
		</table>
		
		<?php include("footer.php"); ?>
	</body>
	
</html>