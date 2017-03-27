<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css"/>
	<title>Localisation des Stations</title>
	</head>
	
	<body >

	<?php include("footer.php"); ?>
	
	<h1>Inscrivez-vous</h1>
	
	<form name="inscription" onsubmit=" return verifierform(this)" action ="" method="post" >
	
		<fieldset id="donneesperso"> 
					<legend> Informations Personnelles </legend> 
				
					<p> <label for="civilite"> Civilité :</label>
					<select name="civilite">
					<option value="">---</option> 
					<option value="M.">Monsieur</option>
					<option value="Mme">Madame</option>
					<option value="Mlle">Mademoiselle</option> 
					</select>   </p> 
				
					<p> <label for="nom"> Nom :</label> 
					<input type ="text" name="nom" id="nom" value="" onfocus=" if (value=='') value=' ';"/> 
					</p></br> 
					
					<p> <label for="prenom"> Prénom :</label> 
					<input type ="text" name="prenom" id="prenom" value="" onfocus=" if (value=='') value=' ';"/> </p></br> 
					
					<p> <label for="adresse"> Adresse :</label> 
					<textarea name="adresse" id="adresse" value="" onfocus=" if (value=='') value=' ';" > </textarea> </p></br> 

					<p> <label for="Code Postal"> Code Postal :</label> 
					<textarea name="Code Postal" id="Code Postal" value="" onfocus=" if (value=='') value=' ';" > </textarea> </p></br> 

					<p> <label for="Ville"> Ville :</label> 
					<textarea name="Ville" id="Ville" value="" onfocus=" if (value=='') value=' ';" > </textarea> </p>
					</br> 
					<p> <label for="dateliv"> Date de naissance</label> </br>	
					<input type ="date" name="datenais" /> </p> </br> 

					<p> <label for="tel"> Numéro de téléphone :</label> 
					<input type ="text" name="tel" id="tel" value="" onfocus=" if (value=='') value=' ';"/> </p></br> 
		</fieldset>
		
		<fieldset id="donneesconnexion">
		
					<p> <label for="mail"> Adresse mail :</label> 
					<input type ="mail" name="mail" id="mail" value="" onfocus=" if (value=='') value=' ';"/> </p></br> 
					 

					<p> <label for="mot de passe"> Mot de passe :</label> 
					<input type ="password" name="mdppaypal" value="" onfocus=" if (value=='') value=' ';"/> </p></br>
					
					<p> <label for="mot de passe"> Retapez votre mot de passe :</label> 
					<input type ="password" name="mdppaypal" value="" onfocus=" if (value=='') value=' ';"/> </p></br> 						
					
				
		</fieldset>
					
				<div style="width:60%; margin-left:15%">
				<input type="submit" value="Valider" /> 
				<input type="reset" value="Effacer" />
				</div>				
	
	
	</form>	
	
	
	<?php include("footer.php"); ?>
	</body>
</html>