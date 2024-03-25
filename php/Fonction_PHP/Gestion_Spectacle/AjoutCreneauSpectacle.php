<?php 

include_once '/var/www/html/Model/DB.php';
include_once '/var/www/html/Model/Spectacle.php';
include '/var/www/html/Model/TypeSpectacle.php';

// Assurez-vous d'utiliser $_POST ici car vous envoyez le formulaire en méthode POST
$idTypeSpectacle = $_POST['IDTypeSpectacle'] ?? null; // Utilisez l'opérateur null coalescent pour gérer l'absence de donnée
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
