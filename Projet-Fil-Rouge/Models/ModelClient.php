<?php


require_once '../Controller/ClientController.php';
require_once '../Controller/InscriptionController.php';
require_once '../Cnx/ConnexionBase.php';

class ModelClient 
{

    public function getMDP(){
        return $this->MDPCLIENT;
    }
    
    public static function authentificationClient($pseudo, $password)
    {
        ConnexionBase::Init();
        $sql = "SELECT * FROM Client WHERE mailclient='".$pseudo."' AND mdpclient='".$password."'";
        $rep =  ConnexionBase::$pdo->query($sql); 
        $rep->setFetchMode(PDO::FETCH_CLASS,"ModelClient");
        $clients = $rep->fetchAll(); 
        
        return $clients; 
        
    }
    
    public static function inscriptionClient($nom,$prenom,$adresse,$cp,$ville,$tel,$pseudo, $dateNaissance,$iban,$password){
        ConnexionBase::Init();
        
        $nomServeur = 'localhost';
        $nomUtilisateur='root';
        $passWord ='root';
        $nomBase ="filRouge";
        
               // Create connection
        $conn = new mysqli($nomServeur, $nomUtilisateur, $passWord, $nomBase);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 
        
        $sql="INSERT INTO client VALUES(IDCLIENT,'$nom','$prenom','$adresse','$cp','$ville','$tel','$pseudo','$dateNaissance','$iban','$password')";
        
        
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
        $conn->close();
        
                

    }
    
    public static function getLeClient($pseudo){
        ConnexionBase::Init();
        
        $rqt="SELECT * FROM Client WHERE mailclient='$pseudo'";
        $rep =  ConnexionBase::$pdo->query($rqt);
        $rep->setFetchMode(PDO::FETCH_CLASS,"ModelClient");
        $c = $rep->fetchAll();
        return $c;
    }
    
    public static function mdpOublie($pseudo)
    {
        ConnexionBase::Init();
        $sql = "SELECT * FROM client WHERE mailclient='$pseudo'";
        $rep =  ConnexionBase::$pdo->query($sql);  
        $rep->setFetchMode(PDO::FETCH_CLASS,"ModelClient");
        $oublie = $rep->fetchAll(); 
   
        return $oublie; 
    }
    
}
