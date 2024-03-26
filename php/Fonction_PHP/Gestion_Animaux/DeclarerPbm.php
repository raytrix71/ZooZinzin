<?php
session_start();
include_once '/var/www/html/autoload.php';
$date = date('Y-m-d H:i:s');
$description=$_POST['DescriptionPB'];
$soins=$_POST['SoinsRealiseAvantIntervention'];
$statut='en cours';
$IDGroupe=$_POST['IDGroupe'];
$IDAnimal=$_POST['IDAnimal'];
if($IDAnimal=='no' ){
    $pbm=new Probleme(null,null,$IDGroupe,$_SESSION['id'],$description,$date,$soins,$statut);
    $pbm->ajoutDBGroupe();
    header('Location: /ERP/Gestion_animaux/FicheGroupe/FicheGroupe.php?idGroupe='.$IDGroupe.'');
}
else{
    $pbm=new Probleme(null,$IDAnimal,null,$_SESSION['id'],$description,$date,$soins,$statut);
    $pbm->ajoutDBAnimal();
    header('Location: /ERP/Gestion_animaux/FicheAnimal/FicheAnimal.php?idAnimal='.$IDAnimal.'');
};
?>
