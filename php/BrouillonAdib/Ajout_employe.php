<?php
include ('../Fonction_PHP/connexionDB.php');
$connDB = connexionDB();
$nom_employe = $_POST['Nom'];
$prenom_employe = $_POST['Prenom'];
$num_tel = $_POST['Ntelephone'];
$adresse_email = $_POST['AdresseEmail'];
$adresse_postale = $_POST['AdressePostale'];
$code_postal = $_POST['CodePostal'];
$motdepasse = $_POST['MDPEmploye'];
$role = $_POST['role'];

if ($role == "Soignant" || $role == "Veterinaire") {
    $zone = $_POST['zone'];
    $sql = "INSERT INTO EMPLOYE (PrenomEmploye, NomEmploye, AdresseEmploye, CPEmploye, MailEmploye, role, TelEmploye, MDPEmploye, IDZone) VALUES ('$prenom_employe', '$nom_employe', '$adresse_postale', '$code_postal','$adresse_email', '$role','$num_tel', '$motdepasse', '$zone')";
} else {
$sql = "INSERT INTO EMPLOYE (PrenomEmploye, NomEmploye, AdresseEmploye, CPEmploye, MailEmploye, role, TelEmploye, MDPEmploye) VALUES ('$prenom_employe', '$nom_employe', '$adresse_postale', '$code_postal','$adresse_email', '$role','$num_tel', '$motdepasse')";

}
$connDB->exec($sql);
echo "oui mon gaté";
?>