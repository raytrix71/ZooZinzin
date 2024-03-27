<?php
include '/var/www/html/autoload.php';

$nom = $_POST['NomClient'];
$prenom = $_POST['PrenomClient'];
$email = $_POST['EmailClient'];
$adresse = $_POST['AdresseClient'];
$cp = $_POST['CPClient'];
$tel = $_POST['TelClient'];
$mdp = password_hash($_POST['MDPClient'],PASSWORD_DEFAULT);
$client= new Client(null,$nom,$prenom,$email,$adresse,$cp,$tel,$mdp);
$client->ajoutDB();
?>

<script>
        alert("Inscription réalisée avec succès");
        window.location.href = '/SiteWebZoo/Log.php';
</script>  