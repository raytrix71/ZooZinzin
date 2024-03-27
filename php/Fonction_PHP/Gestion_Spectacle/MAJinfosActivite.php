<?php
include '/var/www/html/autoload.php';

$idActivite = $_POST['IDActivite'];
$dateActivite = $_POST['DateActivite'];
$heureActivite = $_POST['HeureActivite'];
$result;
$listeActivites = Activite::fetchListFicheActiviteFromDatabase();

foreach ($listeActivites as $activites) {
    if ($activites->getIDActivite() == $idActivite) {
        $result = $activites;
    }
}

if ($dateActivite != null) {
    $result->setDateActivite($dateActivite);
}

if ($heureActivite != null) {
    $result->setHeureActivite($heureActivite);
}

$result->updateActivite();

?>

<script>
    alert("Mise à jour réalisée avec succès");
    window.location.href = '/ERP/GestionBillets/Activite/ListeActivite.php';
</script>

