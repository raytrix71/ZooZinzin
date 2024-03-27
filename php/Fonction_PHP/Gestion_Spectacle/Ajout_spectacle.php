<?php

include_once '/var/www/html/Model/DB.php';

$connDB = DB::connexionDB();

$nom_spectacle = $_POST['NomSpectacle'];
$lieu_spectacle = $_POST['LieuSpectacle'];
$description_spectacle = $_POST['DescriptionSpectacle'];
$tarif_spectacle = $_POST['TarifSpectacle'];
$capacité_spectacle = $_POST['CapaciteMaxSpectacle'];



$sql = "INSERT INTO TYPESPECTACLE (NomSpectacle, LieuSpectacle, DescriptionSpectacle, TarifSpectacle, CapaciteMaxSpectacle) VALUES ('$nom_spectacle', '$lieu_spectacle', '$description_spectacle', '$tarif_spectacle','$capacité_spectacle')";

$connDB->exec($sql);

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

<script>
        alert("Ajout du spectacle réalisé avec succès");
        window.location.href = '/ERP/GestionBillets/Spectacle/ListeSpectacle.php';
</script>