<?php $titre = 'Choix d\'une offre'; ?>

<?php ob_start(); ?>

	<h1 class="page-header">Informations sur les stations</h1>
	
	<div class="row">

		<div class="col-md-6">
			<h2>Stations en services : <span class="label label-success">342</span></h2>

			<h4>Stations fermées : <span class="label label-danger">2</span></h4>
			<h4>Stations partiellement fermées : <span class="label label-danger">1</span></h4>
		</div>			

		<div class="col-md-6">
			<img id="velo" src="content/img/velo.jpg" style="margin-left :40%">
		</div>			

	</div>
	
<hr/>
	
	
	<table class="table table-striped">
		<tr >
			<th style="height:5px">Station	</br></th>
			<th style="width:auto, text-align:center">Emplacement	</br></th>
			<th style="width:auto">Identifiant Station	</br></th>
			<th style="width:auto">Statut	</br></th>
			<th style="width:auto">Durée	</br></th>
			<th style="width:auto">Description	</br></td>

			
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
	
	


<?php $contenu = ob_get_clean(); ?>


<?php require_once ("view/gabarit.php"); ?>