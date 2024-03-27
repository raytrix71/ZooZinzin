<?php 
include '/var/www/html/autoload.php';
$listeanimal=Animal::fetchListAnimalFromDatabase();
$listegroupe=Groupe::fetchListGroupeFromDatabase();
$idAnimal=$_POST['IDAnimal'];
$idGroupe=$_POST['IDGroupe'];
$idParcelle=$_POST['IDParcelle'];
if($idGroupe=='no'){
    foreach($listeanimal as $animal){
        if($animal->getIDAnimal()==$idAnimal){
            $animal->setIDParcelle($idParcelle);
            $animal->updateInDatabase();
        }
    }
}
else{
    foreach($listegroupe as $groupe){
        if($groupe->getIDGroupe()==$idGroupe){
            $groupe->setIDParcelle($idParcelle);
            $groupe->updateInDatabase();
        }
    }    
}
header('Location: /ERP/Gestion_animaux/ListeParcelle/ListeParcelle.php');

?>