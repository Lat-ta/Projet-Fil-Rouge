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