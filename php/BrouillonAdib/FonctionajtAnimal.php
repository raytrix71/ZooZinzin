<?php

include 'Animal.php';
include '/var/www/html/Fonction_PHP/Gestion_Animaux/FonctionFomulaireSelect.php';

$nom_espece = $_POST['NomEspece'];
$nom_animal = $_POST['NomAnimal'];
$date_naissance = $_POST['DateNaissance'];
$poids = $_POST['Poids'];
$taille = $_POST['Taille'];
$sexe = $_POST['Sexe'];
$description = $_POST['Description'];
$Parcelle = $_POST['Parcelle'];

$animal = new Animal($nom_espece,$nom_animal,$date_naissance,$poids,$taille,$sexe,$description,$Parcelle);

$animal->ajoutAnimalDB();
$nom_espece = afficherEspece();



 
