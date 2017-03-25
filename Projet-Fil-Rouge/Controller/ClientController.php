<?php 


require_once '../Models/ModelClient.php';
//require_once '../View/connexion.php';



class ClientController {

        
    public function verifauthentificationAction()
    {
        $ctrlsHtml = $this->getRequest()->getPost();
        $login = $_SESSION['txtLogin'];
        $mdp = $_SESSION['txtMdp'];
       $utilisateurEnCour = ModelClient::authentificationClient($login,$mdp); 
         
        if($utilisateurEnCour != "pasClient" )
        {
            if($utilisateurEnCour[1]==1)
            {                
                session_start();
                $_SESSION['idUtilisateurEnCours']= $utilisateurEnCour[0];
                require'../View/User.php';
            }
            else
            {
               // $this->_helper->redirector('../View/connexion.php');
                 echo "non non non ";
            }
            
        }
         

    }
}
    ?>