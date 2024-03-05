<?php
include ('../Fonction_PHP/connexionDB.php');
$connDB = connexionDB();
$nom_spectacle = $_POST['NomSpectacle'];
$lieu_spectacle = $_POST['LieuSpectacle'];
$description_spectacle = $_POST['DescriptionSpectacle'];
$tarif_spectacle = $_POST['TarifSpectacle'];
$capacité_spectacle = $_POST['CapaciteMaxSpectacle'];



$sql = "INSERT INTO TYPESPECTACLE (NomSpectacle, LieuSpectacle, DescriptionSpectacle, TarifSpectacle, CapaciteMaxSpectacle) VALUES ('$nom_spectacle', '$lieu_spectacle', '$description_spectacle', '$tarif_spectacle','$capacité_spectacle')";


$connDB->exec($sql);

?>