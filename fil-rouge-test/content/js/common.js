$(document).ready(function () {

	if ($("#carte_stations").length > 0) {
		initMap();
	}

});


var markers = [];
var map;

function initMap() {
  map = new google.maps.Map(document.getElementById('carte_stations'), {
    center: {lat: 45.753816, lng: 4.838494},
    scrollwheel: true,
    zoom: 12
  });

  $.ajax({
      url: "index.php?controller=StationController&action=getListeStationJson",
      type: "post",
      dataType : 'json',        
      success: function(jsonStations){
            console.log(jsonStations);

            for (var i = 0; i < jsonStations.length; i++){
                var station = jsonStations[i];

                addMarkerWithTimeout(Number(station["lat"]), Number(station["lng"]), station["nom"], 200);

            }
      }   
   });  
  
}

function addMarkerWithTimeout(lat, lng, libelle, timeout) {

  var position = {lat: lat, lng: lng};

  window.setTimeout(function() {
    markers.push(new google.maps.Marker({
      position: position,
      map: map,
      //label: libelle,
      animation: google.maps.Animation.DROP
    }));
  }, timeout);
}



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


function verifierformPaiement(f) {
                  
  if (document.getElementById('paiementcb').className == "shown") {
      var nomOk = verifChamp(f.nomcarte);
     var numOk = verifChamp(f.numcarte);
     var dateOk = verifChamp(f.dateexpi);
     var codeOk = verifChamp(f.codesecu);
     
     if(nomOk && numOk && dateOk && codeOk)
      return true;
     else
     {
      alert("Veuillez remplir correctement tous les champs");
      return false;
     }

 } else if (document.getElementById('paiementpaypal').className == "shown") {
  
    var mailOk = verifChamp(f.identifiant);
     var mdpOk = verifChamp(f.mdppaypal);

     if(mailOk && mdpOk)
      return true;
     else
     {
      alert("Veuillez remplir correctement tous les champs");
      return false;
     }
 }

}

function verifChamp(champ){
  // si la valeur du champ nom carte est non vide
  if(champ.value != "") {
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


function pasdelettre(e){
       
          if( 48 < e.which && e.which< 57 || e.which ==9 || e.which ==0) {
       
       
            }else{
                e.preventDefault();
                return false;
              }
       
          }