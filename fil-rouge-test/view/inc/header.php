<div class="header" id="top">
	
	<div class="contenu">

		<a href="index.php">
			<img id="logovelov" src="content/img/logo.jpg" title="Vélo'v"/>
		</a>
				
		<div id="centre">
			<img id="langfr" src="content/img/FR.jpg" title="Français"/>
			<img id="langen" src="content/img/EN.jpg" title="Anglais"/>
		</div>

		<img id="logogdlyon" src="content/img/logo2.jpg"/>
	</div>
	
</div>


<!-- barre de navigation-->

<nav class="navbar navbar-default">
  
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">Accueil Vélo'v</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
      <ul class="nav navbar-nav">
      	<li><a href="index.php?controller=ClientController&action=index" title="Espace client">Mon compte</a></li>
      	<li><a href="index.php?controller=StationController&action=index" title="Liste des stations">Stations</a></li>
      	<li><a href="index.php?controller=IndexController&action=utilisation" title="Utilisation du service">Comment utiliser le service</a></li>

		<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Infos et tarifs <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="index.php?controller=IndexController&action=listeAbonnement">Nos abonnements</a></li>
            <li><a href="index.php?controller=IndexController&action=infosTrafic">Infos trafic</a></li>            
          </ul>
        </li>

        <?php 
        	
        	if (isset($_SESSION['idUtilisateurEnCours'])) {
        		echo '<li><a href="index.php?controller=ClientController&action=logout" title="Se déconnecter">Se déconnecter</a></li>';
        	}
        ?>


        <li style="margin-left:100px;">
        	<a style="font-size:90%" href="#">Administration</a>
        </li>
      	

      </ul>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

