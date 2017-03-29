<?php $titre = "Connexion à son compte client"; ?>

<?php ob_start(); ?>

	<?php
		if (isset($msg_error)) {
			echo '<div class="alert alert-danger">'.$msg_error.'</div>';
		}
	?>

	<div class="row">

		<div class="col-md-6">

			<div class="row">

				<div class="well col-md-12">

					<form method="POST" action="index.php?controller=ClientController&action=login">

					  <div class="form-group">
					    <label for="txtLogin">Login</label>
					    <input type="text" class="form-control" id="txtLogin" name="txtLogin" placeholder="Login">
					  </div>

					  <div class="form-group">
					    <label for="txtMdp">Mot de passe</label>
					    <input type="password" class="form-control" id="txtMdp" name="txtMdp" placeholder="Mot de passe">
					  </div>

					  
					  <button type="submit" class="btn btn-primary">Valider</button>

					</form>

				</div>

			</div>


			<div class="row">

				<div class="well col-md-12">
					<h4>Mot de passe oublié ?</h4>

					<p>Veuillez saisir votre adresse mail ci-dessous. Nous vous enverrons votre mot de passe par mail</p>
					
					<form method="POST" action="index.php?controller=ClientController&action=mdpOublie">						

					  <div class="form-group">
					    <label for="txtEmail">Adresse email</label>
					    <input type="text" class="form-control" id="txtEmail" name="txtEmail" placeholder="monAdresse@mail.com">
					  </div>
					  
					  
					  <button type="submit" class="btn btn-primary">Envoyer mon mot de passe</button>

					</form>

				</div>

			</div>

			

		</div>

		<div class="col-md-1">
		</div>

		<div class="well col-md-5">

			<h4>Pas de encore de compte ?</h4>

			<h5>
				<a href="index.php?controller=ClientController&action=inscription" title="Inscription">Inscrivez-vous !</a>
			</h5>			
			
		</div>
		
	</div>

	
		
<?php $contenu = ob_get_clean(); ?>


<?php require_once ("view/gabarit.php"); ?>