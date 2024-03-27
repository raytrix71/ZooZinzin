<?php
session_start();

include '/var/www/html/autoload.php';
$dimension=$_POST['dimension'];
$parcelle=new Parcelle(null,$_SESSION['IDzone'],$dimension);
$parcelle->ajoutParcelle();
header("Location: /ERP/Gestion_animaux/ListeParcelle/ListeParcelle.php");

?>