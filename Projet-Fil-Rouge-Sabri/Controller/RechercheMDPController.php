<?php

require_once '../Models/ModelClient.php';
require_once '../Cnx/ConnexionBase.php';



    $_SESSION['pseudo']=$_POST['txtPseudo'];
    $pseudo=$_SESSION['pseudo'];
    //Verification du pseudo
    
    
    $resultats = ModelClient::mdpOublie($pseudo);
    
  
        if(empty($resultats))
        {
            echo "User Inconnu, Inscrivez vous";
          //  include_once("../View/inscription.phtml");
        }
        else
        {
            foreach ($resultats as $resultat):
            echo $resultat->getMDP(); 
            mail('$pseudo', 'Mot de passe Fil Rouge',$resultat->getMDP());
            include_once("../View/connexion.phtml");
            endforeach;
        }
    




?>