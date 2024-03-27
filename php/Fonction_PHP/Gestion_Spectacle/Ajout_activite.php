<?php

include_once '/var/www/html/Model/DB.php';

$connDB = DB::connexionDB();

$nom_activite = $_POST['NomActivite'];
$lieu_activite = $_POST['LieuActivite'];
$description_activite = $_POST['DescriptionActivite'];
$tarif_activite = $_POST['TarifActivite'];
$capacite_activite = $_POST['CapaciteMaxActivite'];

$sql = "INSERT INTO TYPEACTIVITE (NomActivite, LieuActivite, DescriptionActivite, TarifActivite, CapaciteMaxActivite) VALUES (?, ?, ?, ?, ?)";

$stmt = $connDB->prepare($sql);
$stmt->execute([$nom_activite, $lieu_activite, $description_activite, $tarif_activite, $capacite_activite]);

if($_POST['reservation'] == 'oui'){
$sql = "SELECT IDTypeActivite FROM TYPEACTIVITE ORDER BY IDTypeActivite DESC LIMIT 1";
$stmt = $connDB->query($sql);
$row = $stmt->fetch();
$IDTypeActivite = $row['IDTypeActivite'];

$date_activite = $_POST['DateActivite'];
$heure_activite = $_POST['HeureActivite'];

$sql = "INSERT INTO ACTIVITE (IDTypeActivite, DateActivite, HeureActivite) VALUES (?, ?, ?)";

$stmt = $connDB->prepare($sql);
$stmt->execute([$IDTypeActivite, $date_activite, $heure_activite]);
}

?>

<script>
    alert("Ajout de l'activité est réalisé avec succès");
    window.location.href = '/ERP/GestionBillets/Activite/ListeActivite.php';
</script>
