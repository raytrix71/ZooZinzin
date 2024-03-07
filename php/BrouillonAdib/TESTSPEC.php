<?php

include ('../Fonction_PHP/connexionDB.php');

$connDB = connexionDB();

// Vérifie si la connexion est nulle
if (!$connDB) {
    die("Échec de la connexion : " . $connDB->connect_error);
}

$sql = "SELECT IDTypeSpectacle FROM TYPESPECTACLE ORDER BY IDTypeSpectacle DESC LIMIT 1";
$stmt = $connDB->query($sql);

if ($stmt) {
    $row = $stmt->fetch();
    $IDTypeSpectacle = $row['IDTypeSpectacle'];

    $date_spectacle = $_POST['DateSpectacle'];
    $heure_spectacle = $_POST['HeureSpectacle'];

    // Utilisation des requêtes préparées pour éviter les injections SQL
    $sql = "INSERT INTO SPECTACLE (IDTypeSpectacle, DateSpectacle, HeureSpectacle) VALUES (?, ?, ?)";
    $stmt = $connDB->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("iss", $IDTypeSpectacle, $date_spectacle, $heure_spectacle);
        $stmt->execute();
        $stmt->close();
    } else {
        echo "Erreur de préparation : " . $connDB->error;
    }
} else {
    echo "Erreur lors de l'exécution de la requête : " . $connDB->error;
}

$connDB->close();

?>