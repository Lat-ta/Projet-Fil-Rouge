
	
	<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css"/>
	<title>Vélos en réparation</title>
	</head>
	
	<body >
	
	
	<table>
		<tr>
		
			<td>Identifiant</td>
			<td>Description Vehicule</td>
			<td>Début de l'intervention</td>
			<td>Compte Rendu</td>
			<td>Date Remise en Service</td>
		
		</tr>
		<?php 
		
		$idvelo = 'V434';
		require_once '../Models/ModelVelo.php';

		$details = ModelVelo::getUnVeloRep($idvelo); 
		
		foreach ($details as $detail):?>
		<tr>
			<td style="text-align:center"> <?php echo $detail->getIdVelo()?> </td>
			<td style="text-align:center"> <?php echo $detail->getDescriptionVehicule()?> </td>
			<td style="text-align:center"> <?php echo $detail->getDateDebut()?> </td>
			<td style="text-align:center"> <?php echo $detail->getCompteRendu()?> </td>
			<td style="text-align:center"> <?php echo $detail->getDateRemiseEnService()?> </td>
	
	
	
	
		</tr>
		<?php endforeach;?>
	</table>	
	
	</body>
	</html>
