<?php
include '/var/www/html/autoload.php';

$idTypeSpectacle=$_POST['IDTypeSpectacle'];
$DateSpectacle=$_POST['DateSpectacle'];
$heure_spectacle=$_POST['HeureSpectacle'];

$spectacle= new Spectacle(null,$idTypeSpectacle,$DateSpectacle,$heure_spectacle);
$spectacle->saveToDatabase();

?> 

<script>
        alert("Ajout du créneau réalisé avec succès");
        window.location.href = '/ERP/GestionBillets/Spectacle/ListeSpectacle.php';
</script>