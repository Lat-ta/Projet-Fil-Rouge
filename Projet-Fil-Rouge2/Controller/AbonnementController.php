<?php 


require_once '../Models/ModelAbonnement.php';



class AbonnementController{

        
    public function getLesAbonnementsAction()
    {
       $abonnements = ModelAbonnement::getLesAbonnements();
       require '../View/change_offre.php';
         

    }
	
	/*
	
	public function getLePrixAction()
    {
       $prix = ModelAbonnement::getLePrix();
       require '../View/change_offre.php';
         
		 Ce que j'avais mis dans la page paiement 
		 
		 
					<?php
					if (isset($_POST['abonnement']) && !empty($_GET['abonnement']))
					{
				
						$abo = $_POST['abonnement'];
						require_once '../Controller/AbonnementController.php';
						$prix = ModelAbonnement::getLePrix($abo);
						
						?> 
						
						<p> Vous avez choisi l'abonnement <?php echo $abo ?></p>
						<p> Prix à payer :  <?php echo $prix ?></p>
						<?php
					}
					
					?>
    } 
	
	*/
	
}
    ?>