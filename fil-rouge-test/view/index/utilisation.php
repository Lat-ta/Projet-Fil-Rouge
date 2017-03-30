<?php $titre = 'Mode d\'emploi'; ?>

<?php ob_start(); ?>

<h1 class="page-header">Mode d'emploi</h1>
	
	<h2>Une solution simple pour se déplacer rapidement dans Lyon et Villeurbanne.</h2>
	
	</br>		
	<p>Vélo’v c’est 4 000 vélos à la location répartis dans 348 stations sur Lyon et Villeurbanne. Ce service est accessible dès 14 ans. Il est disponible 24h/24 365 jours par an. Chaque station est équipée d’une borne avec écran tactile pour accéder aux différentes offres et d’une série de points d’attache pour ranger les vélos. Quelle que soit l’offre sélectionnée, les 30 premières minutes d’utilisation sont gratuites à chaque nouveau trajet ! Vélo’v est un service, proposé par la Métropole de Lyon et exploité par la société JCDecaux France.<p>
		
	<div class="well">
		<img id="util" src="content/img/util.jpg" title="Utilisation" style="width:100%" >
	</div>
		

<?php $contenu = ob_get_clean(); ?>


<?php require_once ("view/gabarit.php"); ?>