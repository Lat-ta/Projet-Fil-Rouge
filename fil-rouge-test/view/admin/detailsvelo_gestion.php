<?php $titre = 'Vélos en réparation'; ?>

<?php ob_start(); ?>

	<h1> Les vélos en réparation </h1>
	<table>
		<tr>
			<td>Identifiant</td>
		
		</tr>
		<?php 

		foreach ($velos as $velo){?>
		<tr>
			<td style="text-align:center"> <?php echo $velo->getIdVelo()?> </td>
			<td> <form method="post" action="#"> <input type="hidden" name="idvelo" value="<?php echo $velo->getIdVelo()?>"><input type ="submit" value="Détails" /> </form> </td>
		</tr>
		<?php }?>
	</table>	
	
	<?php
	if(isset($_POST['idvelo'])){
		
		$idvelo = $_POST['idvelo'];
		echo "<table>
		<tr>
		
			<td>Identifiant</td>
			<td>Description Vehicule</td>
			<td>Début de l'intervention</td>
			<td>Compte Rendu</td>
			<td>Date Remise en Service</td>
		
		</tr>";
		
		
		foreach ($details as $detail){
		echo'<tr>
			<td style="text-align:center">'; echo $detail->getIdVelo(); echo '</td>
			<td style="text-align:center">';  echo $detail->getDescriptionVehicule(); echo'</td>
			<td style="text-align:center">';   echo $detail->getDateDebut(); echo '</td>
			<td style="text-align:center">';  echo $detail->getCompteRendu(); echo '</td>
			<td style="text-align:center">';   echo $detail->getDateRemiseEnService(); echo '</td>
	
		</tr>';
		}
		echo'</table>'	;
		
	
	}

	?>
	
<?php $contenu = ob_get_clean(); ?>



<?php require_once ("view/gabarit_admin.php"); ?>