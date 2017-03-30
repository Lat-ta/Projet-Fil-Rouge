<?php $titre = 'Localisation des Stations'; ?>

<?php ob_start(); ?>

<h1 class="page-header">Liste de toutes les stations</h1>
	
	<div class="row">

		<div class="col-md-5">

			<table class="table table-striped">
					<tr>
						<th>Identifiant</th>
						<th>Emplacement</th>
						<th>Capacité</th>
					</tr>
				
				<?php 
								
					foreach ($stations as $station) {
						if($station->getBonus() == 'Oui'){?>
						<tr bgcolor="pink">
						  <td> <?php echo $station->getIdStation()?> </td>
						  <td> <?php echo $station->getEmplacementStation() ?> </td>
						  <td><?php echo $station->getCapaciteStation()?></td>
					  	</tr>
						<?php }else{?>
					 	<tr>
						 <td> <?php echo $station->getIdStation()?> </td>
						 <td> <?php echo $station->getEmplacementStation() ?> </td>
						 <td><?php echo $station->getCapaciteStation()?></td>
					 	</tr> 
		         
				<?php } } ?>
				
			</table>

		</div>

		<div class="col-md-7">

			<div id="carte_stations"></div>

		</div>
	</div>

<?php $contenu = ob_get_clean(); ?>



<?php require_once ("view/gabarit.php"); ?>




	
	