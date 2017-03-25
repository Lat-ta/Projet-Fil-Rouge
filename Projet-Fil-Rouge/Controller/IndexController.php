<?php 


require_once '../Models/ModelClient.php';
require_once '../View/connexion.php';



class IndexController {

        
    public function verifauthentificationAction()
    {
        $ctrlsHtml = $this->getRequest()->getPost();
        $login = $ctrlsHtml['txtLogin'];
        $mdp = $ctrlsHtml['txtMdp'];
       $utilisateurEnCour = ModelClient::authentification($login,$mdp); 
       
        
        if($utilisateurEnCour != "pasClient" )
        {
            if($utilisateurEnCour[1]==1)
            {
                
                
                session_start();
                $_SESSION['idUtilisateurEnCours']= $utilisateurEnCour[0];
                $this->_helper->redirector('../View/User.php');
            }
            else
            {
                $this->_helper->redirector('../View/connexion.php');
            }
            
        }


    }
}
    ?>