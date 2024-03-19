<?php
include '/var/www/html/autoload.php';
$nomespece=$_GET['nomespece'];
$antagoniste=$_GET['antagoniste'];
$listeantagoniste=Antagoniste::fetchAntagonisteFromDB();
$result = null; // Nouvelle variable pour stocker le résultat
foreach($listeantagoniste as $item){
    if($item->getNomEspecePredateur()==$nomespece && $item->getNomEspeceProie()==$antagoniste){
        $item->suppressionAntagonisteFromDB();
    }
    elseif($item->getNomEspeceProie()==$nomespece && $item->getNomEspecePredateur()==$antagoniste){
        $item->suppressionAntagonisteFromDB();
    }
}
header('Location: /ERP/Gestion_animaux/ListeAntagonistes/ListeAntagonistes.php?nomespece='.$nomespece);
?>