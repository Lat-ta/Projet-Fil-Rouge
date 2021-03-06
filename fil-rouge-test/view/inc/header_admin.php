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

<nav class="navbar navbar-admin navbar-default">
  
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
      	<li><a href="index.php?controller=AdminController&action=listeVelos" title="Infos sur mes vélos">Informations sur les vélos</a></li>
      	<li><a href="index.php?controller=AdminController&action=veloReparations" title="Liste des vélos en réparation">Vélos en Réparation</a></li>
      	<li><a href="index.php?controller=AdminController&action=historiqueVelos" title="Historique des  vélos">Historique des vélos</a></li>

        <li style="margin-left:100px;">
          <a style="font-size:90%" href="index.php?controller=AdminController&action=logout">Se déconnecter</a>
        </li>

      </ul>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

