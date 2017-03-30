<?php $titre = 'Mon compte'; ?>

<?php ob_start(); ?>

	<h1 class="page-header">Mon espace salarié</h1>

	<h4>Bonjour <?php echo $salarieInfo->PRENOMSALARIE.' '.$salarieInfo->NOMSALARIE ?>, bienvenue dans votre espace.</h4>

	<br/>


<?php $contenu = ob_get_clean(); ?>


<?php require_once ("view/gabarit_admin.php"); ?>