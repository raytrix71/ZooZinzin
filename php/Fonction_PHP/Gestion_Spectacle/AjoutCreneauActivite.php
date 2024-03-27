<?php 
include '/var/www/html/autoload.php';


$idTypeActivite = $_POST['IDTypeActivite'] ?? null; 
$dateActivite = $_POST['DateActivite'] ?? null;
$heureActivite = $_POST['HeureActivite'] ?? null;

if ($idTypeActivite !== null) {
    $typeActivite = TypeActivite::fetchByID($idTypeActivite);

    if ($typeActivite !== null) {
        $creneau = new Activite(null, $idTypeActivite, $dateActivite, $heureActivite);
        $creneau->saveToDatabase();

    } else {
        echo "Type d'activité introuvable.";
    }
} else {
    echo "Aucun ID de type d'activité fourni.";
}

?>

<script>
    alert("Ajout du créneau réalisé avec succès");
    window.location.href = '/ERP/GestionBillets/Activite/ListeActivite.php';
</script>