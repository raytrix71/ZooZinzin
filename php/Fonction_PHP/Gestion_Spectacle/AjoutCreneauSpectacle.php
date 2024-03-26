<?php 

include_once '/var/www/html/Model/DB.php';
include_once '/var/www/html/Model/Spectacle.php';
include '/var/www/html/Model/TypeSpectacle.php';

$idTypeSpectacle = $_POST['IDTypeSpectacle'] ?? null; 
$dateSpectacle = $_POST['DateSpectacle'] ?? null;
$heureSpectacle = $_POST['HeureSpectacle'] ?? null;

if ($idTypeSpectacle !== null) {
    $typeSpectacle = TypeSpectacle::fetchByID($idTypeSpectacle);

    if ($typeSpectacle !== null) {
        $creneau = new Spectacle(null, $idTypeSpectacle, $dateSpectacle, $heureSpectacle);
        $creneau->saveToDatabase();

    } else {
        echo "Type de spectacle introuvable.";
    }
} else {
    echo "Aucun ID de type spectacle fourni.";
}
?>
