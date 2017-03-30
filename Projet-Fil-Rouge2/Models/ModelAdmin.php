<?php


require_once '../Controller/AdminController.php';
require_once '../Cnx/ConnexionBase.php';

class ModelAdmin 
{
    
	public function getNomSalarie(){
        return $this->NOMSALARIE;
    }
	
	public function getPrenomSalarie(){
        return $this->PRENOMSALARIE;
    }
	
	public function getPosteSalarie(){
        return $this->POSTESALARIE;
    }
    
	
	public static function getInfosSalarie($mail){
		
		ConnexionBase::Init();
        $sql = "SELECT NOMSALARIE, PRENOMSALARIE, POSTESALARIE FROM SALARIE WHERE MAILSALARIE like'" .$mail."'";
        $rep =  ConnexionBase::$pdo->query($sql);  
        $rep->setFetchMode(PDO::FETCH_CLASS,"ModelAdmin");
        $infos = $rep->fetchAll(); 
		
        return $infos;
		
		
	}
	
	public static function authentificationAdmin($pseudo, $password)
    {
        ConnexionBase::Init();
        $sql = "SELECT * FROM salarie WHERE mailsalarie='".$pseudo."' AND mdpsalarie='".$password."'";
        $rep =  ConnexionBase::$pdo->query($sql); 
        $rep->setFetchMode(PDO::FETCH_CLASS,"ModelAdmin");
        $salaries = $rep->fetchAll(); 
        
        return $salaries; 
        
    }
	
	
}