<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css"/>
	<title>Localisation des Stations</title>
	</head>
	
	<body>

	<?php include("header.php"); ?>
	
	<h1>Inscrivez-vous</h1>
	<div style="height: 80%">
	<form name="inscription" onsubmit="return verifierformulaire(this)" action ="paiement.php" method="post"  >
	
		<fieldset id="donneesperso"> 
					<legend> Informations Personnelles </legend> 
				
					<p> <label for="nom"> Nom :</label> 
					<input type ="text" name="nom" value="" onfocus=" if (value=='') value='';" required="required"/> 
					</p>
					
					<p> <label for="prenom"> Prénom :</label> 
					<input type ="text" name="prenom" required="required" /> </p>
					
					<p> <label for="adresse"> Adresse :</label> 
					<textarea name="adresse" required="required"> </textarea> </p>

					<p> <label for="Code Postal"> Code Postal :</label> 
					<input name="codepostal"  required="required"> </input> </p> 

					<p> <label for="Ville"> Ville :</label> 
					<input name="Ville"   required="required"> </input> </p>
					
					<p> <label for="dateliv"> Date de naissance</label> </br>	
					<input type ="text" name="datenais" placeholder="aaaa/mm/jj" required="required" /> </p> 

					<p> <label for="tel"> Numéro de téléphone :</label> 
					<input type ="text" name="tel" required="required" /> </p>
		</fieldset>
		
		<fieldset id="donneesconnexion">
		
					<p> <label for="mail"> Adresse mail :</label> 
					<input type ="mail" name="mail" required="required" /> </p> 
					 

					<p> <label for="mot de passe"> Mot de passe :</label> 
					<input type ="password" name="mdp" required="required"/> </p>
					
					<p> <label for="mot de passe"> Retapez votre mot de passe :</label> 
					<input type ="password" name="verif_mdp" required="required"/> </p>						
					
				
		</fieldset>
				</br>	
				<div style="width:60%; margin-left:15%">
				<input type="submit" value="Valider" /> 
				<input type="reset" value="Effacer" />
				</div>	
						<script>
						function verifierformulaire(f) {
									
												   var mailOk = verifMail(f.mail);
												   var mdpOk = verifMdp(f.mdp, f.verif_mdp)
												   
												   if(mailOk && mdpOk)
													  return true;
												   else
												   {
													  alert("Veuillez remplir correctement tous les champs");
													  return false;
												   }
												}
												
												function verifMail(champ){
													var regex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;
													   if(!regex.test(champ.value))
													   {
														  surligne(champ, true);
														  return false;
													   }
													   else
													   {
														  surligne(champ, false);
														  return true;
														  }
												}
												
												function verifMdp(champ1, champ2){
												
												   if (champ1.value!=champ2.value)
												   {
													alert("Les mots de passes ne sont pas identiques")
													surligne(champ1, true);
													return false;
												   }
												   else{
												   surligne(champ, false);
														  return true;}
												 }
												
												
												function surligne(champ, erreur){
												   if(erreur)
													  champ.style.backgroundColor = "#fba";
												   else
													  champ.style.backgroundColor = "";
												}
												
												
												
						
						</script>
	
	
	</form>	
	</div>
	
	<?php include("footer.php"); ?>
	</body>
</html>