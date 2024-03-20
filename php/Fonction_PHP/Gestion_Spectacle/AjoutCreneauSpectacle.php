<?php 
include_once '/var/www/html/Model/DB.php';
include_once '/var/www/html/Model/Spectacle.php';
include '/var/www/html/Model/TypeSpectacle.php';

var_dump($IDTypeSpectacle);


$IDTypeSpectacle = $_POST['IDTypeSpectacle'];
$dateSpectacle = $_POST['DateSpectacle'];
$heureSpectacle = $_POST['HeureSpectacle'];

// Récupération de l'instance de TypeSpectacle
$typeSpectacle = TypeSpectacle::fetchByID($IDTypeSpectacle);

if ($typeSpectacle === null) {
    echo "Type de spectacle introuvable";
    exit();
}

// Création de l'instance de Spectacle
$creneau = new Spectacle(null, $typeSpectacle, $dateSpectacle, $heureSpectacle);

$creneau->saveToDatabase();


?>