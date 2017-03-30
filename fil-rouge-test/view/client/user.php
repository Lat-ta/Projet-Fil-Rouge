<?php $titre = 'Mon compte'; ?>

<?php ob_start(); ?>

	<h1 class="page-header">Mon espace membre</h1>

	<h4>Bonjour <?php echo $clientInfo->PRENOMCLIENT.' '.$clientInfo->NOMCLIENT ?>, bienvenue dans votre espace client.</h4>

	<br/>

	<h4>Voici ci-dessous la liste de vos abonnements :</h4>

	<?php
		if (!empty($abonnements)) {
	?>

		<table class="table table-striped">
			<tr>
				<th>Date souscription</th>
				<th>Date fin abonnement</th>
				<th>Type abonnement</th>
				<th>Description</th>
				<th>Prix abonnement</th>
				<th>Prix 1ère 30min</th>
				<th>Prix 2éme 30min</th>
				<th></th>
			</tr>

			<?php 
				foreach ($abonnements as $abonnement) {
			?>

				<tr>
				  <td><?php echo $abonnement->DATESOUSCRIPTION?> </td>
				  <td><?php echo $abonnement->DATEFINABONNEMENT?> </td>
				  <td><?php echo $abonnement->TYPEABONNEMENT?> </td>
				  <td><?php echo $abonnement->DESCRIPTIONABONNEMENT?> </td>
				  <td><?php echo $abonnement->PRIXABONNEMENT?> € </td>
				  <td><?php echo $abonnement->PRIX1ERE30MIN?> €</td>
				  <td><?php echo $abonnement->PRIX2EME30MIN?> €</td>
				  <td>
			  		<a href="index.php?controller=ClientController&action=choixAbonnement&idAbo=<?php echo $abonnement->IDABONNEMENT ?>" class="btn btn-primary">Changer d'abonnement</a>
				  </td>
			  	</tr>						
		         
			<?php  } ?>

		</table>

	<?php
		}
	?>


	<a href="index.php?controller=ClientController&action=choixAbonnement" class="btn btn-primary">Ajouter un nouvel abonnement</a>


<?php $contenu = ob_get_clean(); ?>


<?php require_once ("view/gabarit.php"); ?>