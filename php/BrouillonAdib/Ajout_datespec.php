<?php
include ('../Fonction_PHP/connexionDB.php');
$connDB = connexionDB();

//Récuperer le dernier IDTypeSpectacle pour l'ajouter à la table SPECTACLE 

$sql = "SELECT IDTypeSpectacle FROM TYPESPECTACLE ORDER BY IDTypeSpectacle DESC";
$stmt = $connDB->query($sql);
$row = $stmt->fetch();
$IDTypeSpectacle = $row['IDTypeSpectacle'];

$date_spectacle = $_POST['DateSpectacle'];
$heure_spectacle = $_POST['HeureSpectacle'];

$sql = "INSERT INTO SPECTACLE (IDTypeSpectacle, DateSpectacle, HeureSpectacle) VALUES ('$IDTypeSpectacle','$date_spectacle', '$heure_spectacle')";

$connDB->exec($sql);

?>