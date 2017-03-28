<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css"/>
	<title>Paiement</title>
	</head>
	
	<body >
	<?php include("header.php"); ?>


	<form name="paiement" onsubmit=" return verifierform(this)" action ="confirmation_paiement.php"> 
				</br></br>
				<fieldset id="donneesperso">
				
				<legend> Vos informations personnelles </legend>
				<!--Récupération des informations du client ici-->
			
				</fieldset>
				
				</br>
				
				<fieldset>
					<legend> Choisissez votre mode de Paiement </legend>
					<p>
						<input type="radio" name="choixpaiement" value="paypal" onclick="afficherpaypal()" />
						<label for="paypal"> Paiement par Paypal </label>
				
						<input type="radio" name="choixpaiement" value="cartebancaire" onclick="affichercb()" /> 
						<label for="cartebancaire"> Paiement en Carte Bancaire </label>
					</p>
				</fieldset>
				
				</br> 
				
				<fieldset class="hidden" id="paiementcb" > 
				
					<legend> Entrez vos Coordonnées Bancaires </legend>
						
					<p>
						<input type="radio" name="choixcarte" value="mastercard" id="mastercard"/>	
						<label for="mastercard"> <img src="img/mastercard.jpg" alt="mastercard" width="60px" height="40px"/> </label>
				
						<input type="radio" name="choixcarte" value="visa" id="visa"/> 
						<label for="visa"> <img src="img/visa.jpg" alt="visa" width="60px" height="40px"/> </label>
					</p>
					
				<p> <label for="nomcarte"> Nom du titulaire de la carte</label> : 
					<input type ="text" name="nomcarte" value="" onfocus=" if (value=='') value=' ';"/> </p>
					
				<p> <label for="numcartemcarte"> Numéro de la carte </label> : 
					<input type ="text" name="numcarte" max="16" value="" onfocus=" if (value=='') value=' ';" onkeypress="return pasdelettre(event);"/> 
					<script>
					function pasdelettre(e){
			 
					if( 48 < e.which && e.which< 57 || e.which ==9 || e.which ==0) {
			 
			 
						}else{
								e.preventDefault();
								return false;
							}
			 
					}
					</script>
					
				</p>
					
				<p> <label for="dateexpi"> Date d'expiration </label> : 
					<input type ="text" name="dateexpi" placeholder="mm/aa" /> </p>
					
				<p> <label for="codesecu"> Code de sécurité </label> : 
					<input type ="text" name="codesecu" maxlength="3" value="" onfocus=" if (value=='') value=' ';"/> </p>
				
				</fieldset>
				
				</br>
				
				<fieldset class="hidden" id="paiementpaypal" > 
 				
					<legend> Entrez vos Informations Paypal </legend>
				
					<img id="logopaypal" src="img/paypal.png" title="Paypal" width="90px" height="55px">
				
				
					<p> <label for="identifiant"> Identifiant :</label> 
					<input type ="text" name="identifiant" value="" onfocus=" if (value=='') value=' ';"/> 
					</p>
					
					<p> <label for="mdppaypal"> Mot de passe :</label> 
					<input type ="password" name="mdppaypal" value="" onfocus=" if (value=='') value=' ';"/> </p>
				
				</fieldset>
				
				</br>
				
				<div style="width:60%; text-align:center;">
				<input type="submit" value="Paiement" />
				<input type="reset" value="Effacer" />
				</div>
				
												<script>
												function verifierform(f) {
									
													var nomOk = verifNom(f.nomcarte);
												   var numOk = verifNum(f.numcarte);
												   var dateOk = verifDate(f.dateexpi);
												   var codeOk = verifCode(f.codesecu);
												   
												   if(nomOk && numOk && dateOk && codeOk)
													  return true;
												   else
												   {
													  alert("Veuillez remplir correctement tous les champs");
													  return false;
												   }
												}
												
												function verifNom(champ){
													// si la valeur du champ nom carte est non vide
												  if(document.paiement.nomcarte.value != "") {
													// les données sont ok, on peut envoyer le formulaire 
													surligne(champ, false);
													return true;
												  }
												  else {
													// et on indique de ne pas envoyer le formulaire
													surligne(champ, true);
													return false;
												  }
												}
												
												function verifNum(champ){
													// si la valeur du champ nom carte est non vide
												  if(document.paiement.numcarte.value != "") {
													// les données sont ok, on peut envoyer le formulaire 
													surligne(champ, false);
													return true;
												  }
												  else {
													// et on indique de ne pas envoyer le formulaire
													surligne(champ, true);
													return false;
												  }
												}
												
												function verifDate(champ){
													// si la valeur du champ nom carte est non vide
												  if(document.paiement.dateexpi.value != "") {
													// les données sont ok, on peut envoyer le formulaire 
													surligne(champ, false);
													return true;
												  }
												  else {
													// et on indique de ne pas envoyer le formulaire
													surligne(champ, true);
													return false;
												  }
												}
												
												function verifCode(champ){
													// si la valeur du champ nom carte est non vide
												  if(document.paiement.codesecu.value != "") {
													// les données sont ok, on peut envoyer le formulaire 
													surligne(champ, false);
													return true;
												  }
												  else {
													// et on indique de ne pas envoyer le formulaire
													surligne(champ, true);
													return false;
												  }
												}
												
												function afficherpaypal(){
									
													document.getElementById('paiementpaypal').className = "shown";
													document.getElementById('paiementcb').className = "hidden";
													
												}

												function affichercb(){

													document.getElementById('paiementcb').className = "shown";
													document.getElementById('paiementpaypal').className = "hidden";
													
												}
												
												function surligne(champ, erreur){
												   if(erreur)
													  champ.style.backgroundColor = "#fba";
												   else
													  champ.style.backgroundColor = "";
												}
												
												</script>
												
	</form>
		
	<?php include("footer.php"); ?>
	</body>
	
</html>