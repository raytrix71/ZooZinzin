<?php
include '/var/www/html/autoload.php';
$idanimal=$_POST['idAnimal'];
$description=$_POST['description'];
$poids=$_POST['poids'];
$taille=$_POST['taille'];
$resultat;
$listeanimaux=Animal::fetchListAnimalFromDatabase();
foreach($listeanimaux as $animal){
    if($animal->getIDAnimal()==$idanimal){
        $resultat=$animal;
    }
}

if($poids!=null){
    $resultat->setPoids($poids);
}

if($taille!=null){
    $resultat->setTaille($taille);
}

if(isset($description)){
    $resultat->setDescription($description);
}

$resultat->updateInDatabase();
header('Location: /ERP/Gestion_animaux/FicheAnimal/FicheAnimal.php?idAnimal='.$idanimal);


?>