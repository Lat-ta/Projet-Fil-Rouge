<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css"/>
	<title>Localisation des Vélos</title>
	</head>
	
	<body >

	<?php include("header_gestion.php"); ?>
		<?php include("menu_gestion.php"); ?>
	<h1 id="titre">Les Vélos</h1>
		<table>
		<tr>
			<td>Identifiant</td>
			<td>Statut</td>
			<td>Identifiant Borne</td>
			<td>Identifiant Station</td>
			<td>Nom Station</td>

			
		</tr>
		<?php 
		require_once '../Controller/VeloController.php';
		

		$velos = ModelVelo::getLesVelos(); 
		foreach ($velos as $velo):?>
		<tr>
			<td> <?php echo $velo->getIdVelo()?> </td>
			<td> <?php echo $velo->getStatutVelo() ?> </td>
			<td><?php echo $velo->getIdBorne()?></td>
			<td><?php echo $velo->getIdStation()?></td>
			<td><?php echo $velo->getNomStation()?></td>
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