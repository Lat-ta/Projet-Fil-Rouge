<?php

include("../Cnx/ConnexionBase.php");
$login=$_GET['txtLogin'];
$sql="SELECT mailclient FROM Client WHERE mailclient='".$login."'";
$resultat = ConnexionBase::$pdo->query($sql);
echo $resultat->fetchAll(); 

?>