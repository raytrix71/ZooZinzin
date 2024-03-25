<?php 

include_once '/var/www/html/Model/DB.php';
include_once '/var/www/html/Model/Spectacle.php';
include '/var/www/html/Model/TypeSpectacle.php';

$idTypeSpectacle = $_POST['IDTypeSpectacle'];
$dateSpectacle = $_POST['DateSpectacle'];
$heureSpectacle = $_POST['HeureSpectacle'];



$creneau = new Spectacle(null, $idTypeSpectacle,  $dateSpectacle, $heureSpectacle);
$creneau->saveToDatabase();

header('Location: /ERP/GestionBillets/Spectacle/CreneauSpectacle.php?IDTypeSpectacle='.$idTypeSpectacle);
