<?php $titre = 'Mon compte'; ?>

<?php ob_start(); ?>


	<div id="corps">
			<p>Mon espace membre</p>

			<p>A REMPLIR</p>
	</div>

<?php $contenu = ob_get_clean(); ?>


<?php require_once ("view/gabarit.php"); ?>