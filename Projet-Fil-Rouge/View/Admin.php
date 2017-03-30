

<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css"/>
	<title>Espace Gestionnaire - Accueil</title>
	</head>
	
	<body style="background-color:#DCDCDC">
	<?php include("header_gestion.php"); ?>
	
	<table>
	
		<?php 
		$login="m.chabuet@gmail.com"?>
		
		<?php
		
		require_once '../Models/ModelAdmin.php';

		$infos = ModelAdmin::getInfosSalarie($login); 
		
		foreach ($infos as $info):?>
		<tr>
			<td style="text-align:center"> <?php echo $info->getNomSalarie()?> </td>
			<td style="text-align:center"> <?php echo $info->getPrenomSalarie()?> </td>
			<td style="text-align:center"> <?php echo $info->getPosteSalarie()?> </td>
		</tr>
		<?php endforeach;?>
	
	</table>
	</br></br>
	
	<p style="text-align:center"><a href="detailsvelo_gestion.php"><img src="img/reparation.png" style="height:13%; width:13%"></br></a> Vélos en Réparation</p>
	
	
	<p style="margin-left: -45%; text-align:center"><a href="listeVelo.php"><img style="height:10%; width:10%" src="img/velo.png"></br></a> Informations sur les vélos</p> 
	<p style="margin-left: 55%; text-align:center"><a href="historiquevelo_gestion.php"><img  style="height:20%; width:20%" src="img/histo.png"></br></a> Historique des vélos</p>
	

		
		
	<footer>
			
			<ul id="footer-menu">
				<li>
				<b>Intranet Vélo'v ©</b>
				</li>
			</ul>
		
		</footer>
	</body>
	
</html>

