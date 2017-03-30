<?php

class ConnexionBase{
    
    public static $pdo; 
    
    public static function Init(){
        try
        {
            self::$pdo = new PDO('mysql:host=localhost;dbname=fil_rouge', 'root', '');
        }
        catch(Exception $e)
        {
            echo 'Echec de la connexion à la base de données';
            exit();
        }
    } 

}

?>
