<?php $titre = 'Vélos en réparation'; ?>

<?php ob_start(); ?>

	<h1> Les vélos en réparation </h1>

<div class="row">

	<div class="col-md-4">
		<table class="table table-striped">
			<tr>
				<th>Identifiant</th>
				<th></th>
			</tr>

			<?php 

			foreach ($velos as $velo){?>
			<tr>
				<td> <?php echo $velo['IDVELO'];?> </td>
				<td> <form method="post" action="#"> <input type="hidden" name="idvelo" value="<?php echo $velo['IDVELO'];?>"><input type ="submit" value="Détails" class="btn btn-primary" /> </form> </td>
			</tr>
			<?php }?>
		</table>	
	</div>

	<div class="col-md-8">
		<?php
			if(isset($detailVelo)) {
				?>
				
				<table class="table table-striped">
				<tr>
				
					<th>Identifiant</th>
					<th>Description Vehicule</th>
					<th>Début de l'intervention</th>
					<th>Compte Rendu</th>
					<th>Date Remise en Service</th>
				
				</tr>
				
				
				<?php foreach ($detailVelo as $detail){
				echo'<tr>
					<td style="text-align:center">'; echo $detail['IDVELO']; echo '</td>
					<td style="text-align:center">';  echo $detail['DESCRIPTIONVEHICULE']; echo'</td>
					<td style="text-align:center">';   echo $detail['DATEDEBUT']; echo '</td>
					<td style="text-align:center">';  echo $detail['COMPTERENDU']; echo '</td>
					<td style="text-align:center">';   echo $detail['DATEREMISEENSERVICE']; echo '</td>
			
				</tr>';
				}
				echo'</table>'	;
				
			
			}

			?>
	</div>

</div>


	
	
	
	
<?php $contenu = ob_get_clean(); ?>



<?php require_once ("view/gabarit_admin.php"); ?>