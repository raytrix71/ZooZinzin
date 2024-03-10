<?php


include '../Model/Groupe.php';
include '/var/www/html/Fonction_PHP/Gestion_Animaux/FonctionFomulaireSelect.php';

$ID_parcelle = $_POST['IDParcelle'];
$nom_espece = $_POST['NomEspece'];
$effectif_groupe = $_POST['EffectifGroupe'];
$poidsTotalGroupe = $_POST['PoidsTotalGroupe'];
$CommentaireGroupe = $_POST['CommentaireGroupe'];

$groupe = new Groupe($ID_parcelle, $nom_espece, $effectif_groupe, $poidsTotalGroupe, $CommentaireGroupe);

$groupe->ajoutGroupeDB();
