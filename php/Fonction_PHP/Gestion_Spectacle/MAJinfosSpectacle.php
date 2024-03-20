<?php
include '/var/www/html/autoload.php';

$idSpectacle=$_POST['IDSpectacle'];
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
//header('Location: /ERP/GestionBillets/Spectacle/FicheSpectacle.php?IDTypeSpectacle='.$idSpectacle);


?>