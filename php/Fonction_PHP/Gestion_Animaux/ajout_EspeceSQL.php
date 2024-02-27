<?php
include('../../Fonction_PHP/connexionDB.php');
$connDB = connexionDB();
$nom_espece = $_POST['nom_espece'];
$esperance = $_POST['esperance'];
$taille = $_POST['taille'];
$poids = $_POST['poids'];
$gestation = $_POST['gestation'];
$description = $_POST['description'];
$image = $_POST['image'];
$effectif=0;
$sql = "INSERT INTO ESPECE (NomEspece, Esperance, TailleMoyenne, PoidsMoyen, DescriptionEspece ,TempsGestation, ImageEspece) VALUES ('$nom_espece', '$esperance', '$taille',  '$poids','$description', '$gestation', '$image')";
$connDB->exec($sql);
echo "New record created successfully";
?>