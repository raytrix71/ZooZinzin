<?php
$nom = $_POST['NomClient'];
$prenom = $_POST['PrenomClient'];
$email = $_POST['MailClient'];
$adresse = $_POST['AdresseClient'];
$cp = $_POST['CPClient'];
$tel = $_POST['TelClient'];
$mdp = password_hash($_POST['MDPClient'],PASSWORD_DEFAULT);
$client= new Client(null,$nom,$prenom,$email,$adresse,$cp,$tel,$mdp);
$client->ajoutDB();
//header('Location: index.php'); mettre le header vers la connexion 
?>