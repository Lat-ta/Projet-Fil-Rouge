
<?php $titre = 'Accueil du site'; ?>

<?php ob_start(); ?>

	<h1 class="page-header">Page d'accueil</h1>

	<div class="row">			
		<div class="col-md-4">
			<p> Bonjour et bienvenue sur le site de location de vélos dans l'agglomération Lyonnaise </p> 

			<p>
				Ce site est édité par le Groupe FILROUGE_CBNBDK. Il présente le service Vélo'v© : un service de location de vélos proposé par la Métropole de Lyon et exploité par la société JCDecaux France.
				Vélo'v© est une marque déposée et appartient à la Métropole de Lyon.
			</p>
		</div>

		<div class="col-md-8">
			<img src="content/img/accueil.jpg" title="Vélo'v" style="width:100%" />
		</div>
	</div>

<?php $contenu = ob_get_clean(); ?>


<?php require_once ("view/gabarit.php"); ?>