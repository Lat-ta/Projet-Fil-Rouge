
<?php $titre = 'Accueil du site'; ?>

<?php ob_start(); ?>


	<div id="corps">
			<h1> Bonjour !</h1>
			<p> Bienvenue sur le site de location de vélos dans l'agglomération Lyonnaise </p> 


			<p>
				Ce site est édité par le Groupe FILROUGE_CBNBDK. Il présente le service Vélo'v© : un service de location de vélos proposé par la Métropole de Lyon et exploité par la société JCDecaux France.
				Vélo'v© est une marque déposée et appartient à la Métropole de Lyon.
			</p>
	</div>

<?php $contenu = ob_get_clean(); ?>


<?php require_once ("view/gabarit.php"); ?>