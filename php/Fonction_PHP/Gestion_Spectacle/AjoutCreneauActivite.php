<?php 
include '/var/www/html/autoload.php';


$idTypeActivite = $_POST['IDTypeActivite'] ?? null; 
$dateActivite = $_POST['DateActivite'] ?? null;
$heureActivite = $_POST['HeureActivite'] ?? null;


$creneau = new Activite(null, $idTypeActivite, $dateActivite, $heureActivite);
$creneau->saveToDatabase();

?>

<script>
    alert("Ajout du créneau réalisé avec succès");
    window.location.href = '/ERP/GestionBillets/Activite/ListeActivite.php';
</script>