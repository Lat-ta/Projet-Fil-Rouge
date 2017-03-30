<?php $titre = 'Mon compte'; ?>

<?php ob_start(); ?>

	<h1 class="page-header">Mon espace membre</h1>

	<h4>Bonjour <?php echo $clientInfo->PRENOMCLIENT.' '.$clientInfo->NOMCLIENT ?>, bienvenue dans votre espace client.</h4>

	<h4>Voici ci-dessous la liste de vos abonnements :</h4>


<?php $contenu = ob_get_clean(); ?>


<?php require_once ("view/gabarit.php"); ?>