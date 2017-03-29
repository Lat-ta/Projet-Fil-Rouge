<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css"/>
	<title>Informations</title>
	</head>
	
	<body>
	
	<?php include("header.php"); ?>
	
	<h1>Informations sur les stations</h1>
	<img id="velo" src="img/velo.jpg" style="margin-left :40%">
	<h2>342</h2> <p style="margin-left :46%">stations en services</p>
	<p style="margin-left :40%"> <b>2</b> stations fermées et <b>1</b> partiellement fermées</p></br> </br>
	
	<table style="width : 80%; margin-left:15%; height : 40%" cellspacing="10">
		<tr >
			<td style="height:5px">Station	</br></td>
			<td style="width:auto, text-align:center">Emplacement	</br></td>
			<td style="width:auto">Identifiant Station	</br></td>
			<td style="width:auto">Statut	</br></td>
			<td style="width:auto">Durée	</br></td>
			<td style="width:auto">Description	</br></td>

			
		</tr>
		
		<tr>
			<td>  Beauvisage / Préssensé / Viviani</td>
			<td style ="text-align:center"> 	Lyon 8 </td>
			<td style ="text-align:center">S108</td>
			<td>Service partiel</td>
			<td>Jusque fin Mars</td>
			<td>4 Bornes fermées</td>
		</tr>
		
		<tr>
			<td> Feuillat/Lacassagne </td>
			<td style ="text-align:center"> 	Lyon 3 </td>
			<td style ="text-align:center">S186</td>
			<td>Fermée</td>
			<td>Jusqu'au 10 Avril</td>
			<td>Réaménagement du trottoir</td>
		</tr>
		
		<tr>
			<td> Place Jean Macé </td>
			<td style ="text-align:center"> 	Lyon 7 </td>
			<td style ="text-align:center">S10</td>
			<td>Fermée</td>
			<td>Jusqu'à fin Avril</td>
			<td>Dans le cadre de l’aménagement de la place Jean Macé. Station déplacée à l'intersection avec l'avenue Jean Jaurès et agrandie : ajout de 7 bornes</td>
		</tr>
		
		</table>
	
	
	<?php include("footer.php"); ?>
	
	</body>
</html>