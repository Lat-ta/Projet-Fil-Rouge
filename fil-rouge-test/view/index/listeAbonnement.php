<?php $titre = 'Liste des abonnements'; ?>

<?php ob_start(); ?>

	<h1 class="page-header">Notre offre</h1>
	
		<table class="table table-striped">
			<tr>
				<th>Type Abonnement</th>
				<th>Description Abonnement</th>
				<th>Prix Abonnement</th>
				<th>Prix Première demi-heure</th>
				<th>Prix Deuxième demi-heure</th>

			</tr>

			<?php						
				foreach ($abonnements as $donnees) { 
			?>

				<tr >
				  <td><?php echo $donnees['TYPEABONNEMENT']; ?></td>
				  <td><?php echo $donnees['DESCRIPTIONABONNEMENT']; ?></td>
				  <td><?php echo $donnees['PRIXABONNEMENT']; ?>€</td>
				  <td><?php echo $donnees['PRIX1ERE30MIN']; ?>€</td>
				  <td><?php echo $donnees['PRIX2EME30MIN']; ?>€</td>
				</tr>
								
			<?php } ?>

		
		</table>
		
	


<?php $contenu = ob_get_clean(); ?>


<?php require_once ("view/gabarit.php"); ?>