<?php

include ('../Fonction_PHP/connexionDB.php');
$connDB = connexionDB();
$nom_espece = $_POST['NomEspece'];
$nom_animal = $_POST['NomAnimal'];
$date_naissance = $_POST['DateNaissance'];
$poids = $_POST['Poids'];
$taille = $_POST['Taille'];
$sexe = $_POST['Sexe'];
$description = $_POST['Description'];
$IDParcelle = $_POST['IDParcelle'];
 
$sql = "INSERT INTO ANIMAL (IDParcelle, NomEspece, NomAnimal, DateNaissance, Poids, Taille, Sexe, Description) VALUES ('$IDParcelle', '$nom_espece', '$nom_animal', '$date_naissance', '$poids','$taille', '$sexe','$description')";
 
$connDB->exec($sql);

echo "New record created successfully";

 
?>