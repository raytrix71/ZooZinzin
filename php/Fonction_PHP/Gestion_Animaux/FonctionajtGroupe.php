<?php
include '../../Model/DB.php';
include 'FonctionFomulaireSelect.php';
include '../../Model/Groupe.php';

$ID_parcelle = $_POST['IDParcelle'];
$nom_espece = $_POST['NomEspece'];
$effectif_groupe = $_POST['EffectifGroupe'];
$poidsTotalGroupe = $_POST['PoidsTotalGroupe'];
$CommentaireGroupe = $_POST['CommentaireGroupe'];

$groupe = new Groupe($ID_parcelle, $nom_espece, $effectif_groupe, $poidsTotalGroupe, $CommentaireGroupe);

$groupe->ajoutGroupeDB();
