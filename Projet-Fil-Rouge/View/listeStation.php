<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Localisation des Stations</title>
</head>
<body >
<h1 id="titre">Les Stations</h1>
<table>
<tr>
    <td>Identifiant</td>
    <td>Emplacement</td>
    <td>Capacité</td>

</tr>
<?php 
require_once '../Controller/StationController.php';

$station = ModelStation::getLesStations(); 
foreach ($stations as $station):?>
<tr>
    <td> <?php echo $station->getIdStation()?> </td>
    <td> <?php echo $station->getEmplacementStation() ?> </td>
    <td><?php echo $station->getCapaciteStation()?></td>
</tr>
<?php endforeach;?>
</table>
</body>
</html>