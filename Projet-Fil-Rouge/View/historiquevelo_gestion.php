<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css"/>
	<title>Vélos en réparation</title>
	</head>
	
	<body >
	<?php include("header_gestion.php"); ?>
	<?php include("menu_gestion.php"); ?>
	
	
	</br>
	
	<form method="POST" action="historiqueUnVelo.php">
	
	<input type="text" name="idvelo" />
	<input type="submit" value="Rechercher" /> 
	
	</form>
	
	</br>
	
	<table>
		<tr>
		
			<td>Identifiant</td>
			<td>Date de mise en route</td>
			<td>Km parcourus</td>
			<td>Identifiant Station</td>
		
		</tr>
		<?php 
		require_once '../Controller/VeloController.php';
		require_once '../Models/ModelVelo.php';

		$histo = ModelVelo::getHistoriqueVelos(); 
		foreach ($histo as $velo):?>
		<tr>
			<td style="text-align:center"> <?php echo $velo->getIdVelo()?> </td>
			<td style="text-align:center"> <?php echo $velo->getDateMiseEnRoute()?> </td>
			<td style="text-align:center"> <?php echo $velo->getKmParcourus()?> </td>
			<td style="text-align:center"> <?php echo $velo->getIdStation()?> </td>
	
		</tr>
		<?php endforeach;?>
	</table>	
	
	

	<footer>
			
			<ul id="footer-menu">
				<li>
				<b>Intranet Vélo'v ©</b>
				</li>
			</ul>
		
	</footer>
		
	</body>
</html>