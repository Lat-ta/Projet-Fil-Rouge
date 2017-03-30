<?php $titre = 'Historique des vélos'; ?>

<?php ob_start(); ?>
	
	<P>De quel vélo voulez-vous avoir les détails de réparation ? </p>
	<form method="POST" action="historiqueUnVelo.php">
	
	<input type="text" name="idvelo" />
	<input type="submit" value="Rechercher" /> 
	
	</form>
	
	</br>
	
	<table class="table table-striped">
		<tr>
		
			<td>Identifiant</td>
			<td>Date de mise en route</td>
			<td>Km parcourus</td>
			<td>Identifiant Station</td>
		
		</tr>
		<?php 
		foreach ($histo as $velo){?>
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