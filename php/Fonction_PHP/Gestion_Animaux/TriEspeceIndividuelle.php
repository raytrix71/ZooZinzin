<?php
include '/var/www/html/autoload.php';
$selection=$_GET['nomespece'];
$liste=Espece::fetchListEspeceFromDatabase();
foreach($liste as $espece){
    if($espece->getNomEspece()==$selection){
        if($espece->getIndividuel()==1){
            header('Location: /ERP/Gestion_animaux/ListeAnimaux/ListeAnimaux.php?nomespece='.$selection);
        }
        else{
            header('Location: /var/www/html/ERP/Gestion_animaux/ListeAnimaux/archive.php?nomespece='.$selection);
        }
    }
}

?>