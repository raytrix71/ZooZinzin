<?php
include_once '/var/www/html/autoload.php';
$idRepas = $_GET['idRepas'];
$listerepas = TourneeRepas::fetchlistRepasNow();
foreach($listerepas as $repas){
    if($repas->getIDRepas() == $idRepas){
        $repas->validerRepas();
    }
}
header('Location: /ERP/GestionSoinsRepas/Repas/ListeRepas.php');

?>