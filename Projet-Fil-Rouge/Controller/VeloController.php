<?php 


require_once '../Models/ModelAdmin.php';



class AdminController{

        
	
	public function getInfosSalarieAction($mail)
    {
		
       $infos = ModelAdmin::getgetInfosSalarie($idvelo);
       require '../View/Admin.php';

    }
	
}
    ?>
	
	
	