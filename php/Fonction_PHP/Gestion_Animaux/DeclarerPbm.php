<?php
// Connexion à la base de données
$host = 'localhost'; // ou IP du serveur
$dbname = 'nom_de_votre_base';
$username = 'votre_utilisateur';
$password = 'votre_mot_de_passe';
$dsn = "mysql:host=$host;dbname=$dbname;charset=UTF8";

try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die('Erreur de connexion à la base de données : ' . $e->getMessage());
}

// Récupération des données du formulaire
$IDAnimal = $_POST['IDAnimal'] ?? null;
$IDGroupe = $_POST['IDGroupe'] ?? null;
$DescriptionPB = $_POST['DescriptionPB'] ?? '';
$DatePB = $_POST['DatePB'] ;
$SoinsRealiseAvantIntervention = $_POST['SoinsRealiseAvantIntervention'] ?? '';
$StatutProbleme = $_POST['StatutProbleme'] ?? '';

// Validation basique des données (à adapter selon vos besoins)
if (empty($DescriptionPB) || empty($DatePB) || empty($StatutProbleme)) {
    die('Les champs Description, Date et Statut du problème sont requis.');
}

// Préparation de la requête d'insertion
$query = "INSERT INTO PROBLEME (IDAnimal, IDGroupe, DescriptionPB, DatePB, SoinsRealiseAvantIntervention, StatutProbleme) VALUES (?, ?, ?, ?, ?, ?)";
$stmt = $pdo->prepare($query);

try {
    $stmt->execute([$IDAnimal, $IDGroupe, $DescriptionPB, $DatePB, $SoinsRealiseAvantIntervention, $StatutProbleme]);
    echo "Le problème a été correctement déclaré.";
} catch (PDOException $e) {
    die('Erreur lors de l\'insertion du problème : ' . $e->getMessage());
}
?>
