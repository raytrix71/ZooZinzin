<?php
include '/var/www/html/autoload.php';
$idGroupe=$_POST['idGroupe'];
$effectif=$_POST['effectif'];

$listegroupe=Groupe::fetchListGroupeFromDatabase();

foreach($listegroupe as $groupe){
    if($groupe->getIDGroupe()==$idGroupe){
        $resultat=$groupe;
    }
}

$resultat->setEffectifGroupe($resultat->getEffectifGroupe()+$effectif);
$resultat->updateInDatabase();
header('Location: /ERP/Gestion_animaux/FicheGroupe/FicheGroupe.php?idGroupe='.$idGroupe);

?>