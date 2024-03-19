<?php
include '/var/www/html/autoload.php';
$antagoniste=$_POST['antagoniste'];
$espece=$_POST['nomespece'];
$a = new Antagoniste(null,$antagoniste,$espece);
$a->ajoutAntagonisteToDB();
header('Location: /ERP/Gestion_animaux/ListeAntagonistes/ListeAntagonistes.php?nomespece='.$espece);

?>