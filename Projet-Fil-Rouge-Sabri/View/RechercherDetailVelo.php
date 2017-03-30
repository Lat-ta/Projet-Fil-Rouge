<?php
require_once '../Models/ModelVelo.php';


$velo = $_POST['unVelo'];

ConnexionBase::Init();
$sql = "SELECT * FROM detailVelo WHERE idVelo='$velo'";
$rep =  ConnexionBase::$pdo->query($sql);
$rep->setFetchMode(PDO::FETCH_CLASS,"ModelVelo");
$detail = $rep->fetchAll();


return $detail;

?>