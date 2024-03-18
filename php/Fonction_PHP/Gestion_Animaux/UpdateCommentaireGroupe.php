<?php
include '/var/www/html/autoload.php';
$idGroupe=$_POST['idGroupe'];
$commentaire=$_POST['commentaire'];

$listegroupe=Groupe::fetchListGroupeFromDatabase();

foreach($listegroupe as $groupe){
    if($groupe->getIDGroupe()==$idGroupe){
        $resultat=$groupe;
    }
}

$resultat->setCommentaireGroupe($commentaire);
$resultat->updateInDatabase();
header('Location: /ERP/Gestion_animaux/FicheGroupe/FicheGroupe.php?idGroupe='.$idGroupe);

?>