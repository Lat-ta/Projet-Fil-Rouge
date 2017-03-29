<?php 


require_once '../Models/ModelAdmin.php';
if(!class_exists('AdminController')) {
class AdminController{

        
	
	public function getInfosSalarieAction($mail)
    {
		
       $infos = ModelAdmin::getgetInfosSalarie($idvelo);
       require_once '../View/Admin.php';

    }
	
}
}
    ?>
	
	
	