<?php
include '/var/www/html/autoload.php';

$idSpectacle=$_POST['IDTypeSpectacle'];
$DateSpectacle=$_POST['DateSpectacle'];
$heure_spectacle=$_POST['HeureSpectacle'];
$result;
$listeSpectacles=Spectacle::fetchListFicheSpectacleFromDatabase();

foreach($listeSpectacles as $spectacles){
    if($spectacles->getIDSpectacle()==$idSpectacle){
        $result=$spectacles;
    }
}

if($DateSpectacle!=null){
    $result->setDateSpectacle($DateSpectacle);
}

if($heure_spectacle!=null){
    $result->setHeureSpectacle($heure_spectacle);
}

$result->updatespectacle();
?> 

<script>
        alert("Ajout du créneau réalisé avec succès");
        window.location.href = '/ERP/GestionBillets/Spectacle/ListeSpectacle.php';
</script>