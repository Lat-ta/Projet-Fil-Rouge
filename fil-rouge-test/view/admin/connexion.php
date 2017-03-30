<?php $titre = "Connexion à son compte administrateur"; ?>

<?php ob_start(); ?>

	<h1 class="page-header">Connexion à son compte administrateur</h1>


	<?php
		if (isset($msg_error)) {
			echo '<div class="alert alert-danger">'.$msg_error.'</div>';
		}

		if (isset($msg_success)) {
			echo '<div class="alert alert-success">'.$msg_success.'</div>';
		}
	?>

	<div class="row">

		<div class="col-md-6">

			<div class="row">

				<div class="well col-md-12">

					<form method="POST" action="index.php?controller=AdminController&action=login">

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
			

		</div>

		
	</div>

	
		
<?php $contenu = ob_get_clean(); ?>


<?php require_once ("view/gabarit.php"); ?>