<?php $titre = 'Confirmation paiement'; ?>

<?php ob_start(); ?>

	<h1 class="page-header">Paiement</h1>

	<div class="well">
			
	<?php
		if (isset($idAbo)) { ?>
			<div class="alert alert-success">
				<?php echo $msg; ?>
			</div>
	<?php } ?>

	<p> Merci d'avoir souscrit à un de nos abonnement. </p>
	<p> A bientôt dans les rues lyonnaises ! </p>
			
	<!-- Mettre le lien vers la page d'accueil du compte client -->
	<h2> <a href="index.php?controller=ClientController&action=index" style="color:#e10203">  Retour à mon compte </a> </h2>
			
			
	</div>


<?php $contenu = ob_get_clean(); ?>


<?php require_once ("view/gabarit.php"); ?>