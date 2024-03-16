<?php 
session_start();
include '/var/www/html/autoload.php';
include '/var/www/html/ERP/NavBar/navbar.php';

$listeresa=Reservation::getAllReservations();
$id = null; // Initialisez $id à null pour éviter les notices PHP
foreach($listeresa as $resa){
    if($resa->getIDReservation()==$_GET['idresa']){
        $id=$resa->getIDReservation(); // Appelez la méthode avec des parenthèses
    }
}

if ($id === null) {
    // Gérez l'erreur ici, par exemple en affichant un message d'erreur et en arrêtant le script
    die('ID de réservation non trouvé');
}

echo "Bonjour voici la reservation n°".$id;
?>