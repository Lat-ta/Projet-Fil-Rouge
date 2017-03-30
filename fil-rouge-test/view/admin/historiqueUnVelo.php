<?php $titre = 'Historique d\'un vélo'; ?>

<?php ob_start(); ?>
	
	
	<?php 
		$idvelo = $_POST['idvelo'];
	?> 
	
	<h1>Historique d'un vélo</h1>
	
	<table class="table table-striped">
		<tr>
		
			<td>Identifiant</td>
			<td>Date de mise en route</td>
			<td>Km parcourus</td>
			<td>Identifiant Station</td>
		
		</tr>
		<?php 
		
		
		foreach ($histor as $velo){?>
		<tr>
			<td style="text-align:center"> <?php echo $velo->getIdVelo()?> </td>
			<td style="text-align:center"> <?php echo $velo->getDateMiseEnRoute()?> </td>
			<td style="text-align:center"> <?php echo $velo->getKmParcourus()?> </td>
			<td style="text-align:center"> <?php echo $velo->getIdStation()?> </td>
	
		</tr>
		<?php }?>
	</table>	
	
	
<?php $contenu = ob_get_clean(); ?>



<?php require_once ("view/gabarit_admin.php"); ?>