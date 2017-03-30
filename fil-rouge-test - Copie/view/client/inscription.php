<?php $titre = "Création d'un compte client"; ?>

<?php ob_start(); ?>

<h1 class="page-header">Inscrivez-vous</h1>

	<?php
		if (isset($msg_error)) {
			
			echo '<div class="alert alert-danger"><ul>';
			
			foreach ($msg_error as $item => $msg) {
				echo "<li>".$msg."</li>";
			}

			echo '</ul></div>';
		}
	?>

<form name="inscription" class="form-horizontal" onsubmit="return verifierformulaire(this)" action ="index.php?controller=ClientController&action=inscription" method="post"  >

	<input type="hidden" name="post" value="1"/>

	<div class="form-group">
	    <label for="nom" class="col-sm-2 control-label">Nom</label>
	    <div class="col-sm-5">      
	      <input type ="text" class="form-control" id="nom" name="nom" value="" onfocus=" if (value=='') value='';" required="required"/> 
	    </div>
	</div>

	<div class="form-group">
	    <label for="prenom" class="col-sm-2 control-label">Prénom</label>
	    <div class="col-sm-5">      
	      <input type ="text" class="form-control" name="prenom" id="prenom" value="" onfocus=" if (value=='') value='';" required="required"/> 
	    </div>
	</div>

	<div class="form-group">
	    <label for="adresse" class="col-sm-2 control-label">Adresse</label>
	    <div class="col-sm-5">      
	      <textarea type ="text" class="form-control" name="adresse" id="adresse" required="required">
	      </textarea>
	    </div>
  	</div>

	<div class="form-group">
	    <label for="code_postal" class="col-sm-2 control-label">Code postal</label>
	    <div class="col-sm-5">      
	      <input type ="text" class="form-control" name="code_postal" id="code_postal" required="required"/> 
	    </div>
	</div>
  	
	<div class="form-group">
	    <label for="ville" class="col-sm-2 control-label">Ville</label>
	    <div class="col-sm-5">      
	      <input type ="text" class="form-control" name="ville" id="ville" required="required"/> 
	    </div>
	</div>		


	<div class="form-group">
	    <label for="date_naissance" class="col-sm-2 control-label">Date de naissance</label>
	    <div class="col-sm-5">      
	      <input type ="text" class="form-control" name="date_naissance" id="date_naissance" placeholder="jj/mm/aaaa"/> 
	    </div>
	</div>	


	<div class="form-group">
	    <label for="tel" class="col-sm-2 control-label">Numéro de téléphone</label>
	    <div class="col-sm-5">      
	      <input type ="text" class="form-control" name="tel" id="tel" required="required"/> 
	    </div>
	</div>		

	<div class="form-group">
	    <label for="mail" class="col-sm-2 control-label">Adresse mail</label>
	    <div class="col-sm-5">      
	      <input type ="mail" class="form-control" name="mail" id="mail" required="required"/> 
	    </div>	    
	</div>		

	<div class="form-group">
	    <label for="mdp" class="col-sm-2 control-label">Mot de passe</label>
	    <div class="col-sm-5">      
	      <input type ="password" class="form-control" name="mdp" id="mdp" required="required" placeholder="6 caractères minimum"/> 
	    </div>
	</div>		

	<div class="form-group">
	    <label for="ville" class="col-sm-2 control-label">Retapez votre mot de passe</label>
	    <div class="col-sm-5">      
	      <input type ="password" class="form-control" name="verif_mdp" id="verif_mdp" required="required"/> 
	    </div>
	</div>		



  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-5">
      <button type="submit" class="btn btn-primary">Valider</button>
      <input type="reset" class="btn btn-warning" value="Effacer" />
    </div>
  </div>

</form>



<?php $contenu = ob_get_clean(); ?>


<?php require_once ("view/gabarit.php"); ?>
	
	
					