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

// Redirection après la mise à jour
//header('Location: /ERP/GestionActivites/Activite/FicheActivite.php?IDTypeActivite='.$idActivite);

