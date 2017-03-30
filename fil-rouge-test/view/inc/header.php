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
      <a class="navbar-brand" href="index.php">Vélo'v</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
      <ul class="nav navbar-nav">

		<?php # Mise en place du menu par un parcours de la table associative
			$menu['Mon compte']="index.php?controller=ClientController&action=index";
			$menu['Stations']="index.php?controller=StationController&action=index";
			$menu['Mentions légales']="index.php?controller=IndexController&action=mentions";			
					
			foreach ($menu as $item => $act) {
				print "<li><a href=\"$act\">$item</a></li>\n";
			}
		?>
      </ul>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

