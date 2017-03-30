<?php $titre = 'Choix d\'une offre'; ?>

<?php ob_start(); ?>

	<h1 class="page-header">Choix d'un abonnement</h1>

	<form method="post" action="index.php?controller=ClientController&action=paiement" class="form-horizontal">

		<?php 
		if (isset($idAbo)) {
			echo '<input type="hidden" name="idAbo" value="'.$idAbo.'" />';
		}
	 	?>

		<div class="form-group">
			<label for="abonnement" class="col-sm-2 control-label">Choisissez votre nouvel abonnement dans la liste :</label>		    
		    <div class="col-sm-5">		      
				<select name="abonnement" id="abonnement" class="form-control">
					<?php						
						foreach ($abonnements as $donnees) { 
					?>
				
						 <option value="<?php echo $donnees['IDABONNEMENT']; ?>"> <?php echo $donnees['DESCRIPTIONABONNEMENT']; ?>, <?php echo $donnees['PRIXABONNEMENT']; ?>€</option>
				
					<?php } ?>
				</select>

		    </div>
		  </div>
	 
		
		<div class="form-group">
		    <div class="col-sm-offset-2 col-sm-10">
		      <button type="submit" class="btn btn-primary">Procèder au paiement</button>
		    </div>
		  </div>	 		
		
	</form>
		



<?php $contenu = ob_get_clean(); ?>


<?php require_once ("view/gabarit.php"); ?>