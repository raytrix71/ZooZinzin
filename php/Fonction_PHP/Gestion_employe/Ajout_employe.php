<?php
include_once '/var/www/html/Model/DB.php';

$connDB = DB::connexionDB();
$nom_employe = $_POST['NomEmploye'];
$prenom_employe = $_POST['PrenomEmploye'];
$num_tel = $_POST['TelEmploye'];
$adresse_email = $_POST['MailEmploye'];
$adresse_postale = $_POST['AdresseEmploye'];
$code_postal = $_POST['CPEmploye'];
$motdepasse = $_POST['MDPEmploye'];
$role = $_POST['role'];

if ($role == "Soignant" || $role == "Veterinaire") {
    $zone = $_POST['zone'];
    $sql = "INSERT INTO EMPLOYE (PrenomEmploye, NomEmploye, AdresseEmploye, CPEmploye, MailEmploye, role, TelEmploye, MDPEmploye, IDZone) VALUES ('$prenom_employe', '$nom_employe', '$adresse_postale', '$code_postal','$adresse_email', '$role','$num_tel', '$motdepasse', '$zone')";
} else {
$sql = "INSERT INTO EMPLOYE (PrenomEmploye, NomEmploye, AdresseEmploye, CPEmploye, MailEmploye, role, TelEmploye, MDPEmploye) VALUES ('$prenom_employe', '$nom_employe', '$adresse_postale', '$code_postal','$adresse_email', '$role','$num_tel', '$motdepasse')";

}
$connDB->exec($sql);

?>