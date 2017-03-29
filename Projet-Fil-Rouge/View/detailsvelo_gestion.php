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
	
	
	<table>
		<tr>
			<td>Identifiant</td>
		
		</tr>
		<?php 
		require_once '../Controller/VeloController.php';
		require_once '../Models/ModelVelo.php';

		$velos = ModelVelo::getVelosRep(); 
		foreach ($velos as $velo):?>
		<tr>
			<td style="text-align:center"> <?php echo $velo->getIdVelo()?> </td>
			<td> <input type ="button" value="Détails" onclick=Afficherdetails(<?php echo $velo->getIdVelo() ?>)/>  </td>
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