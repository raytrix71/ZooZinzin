<?php
session_start();
include_once '/var/www/html/Model/DB.php';

if (isset($_SESSION['id'])) {
    $idEmploye = $_SESSION['id']; 
} else {
    echo "L'employé n'est pas identifié.";
}

$bdd = DB::connexionDB();

$IDAnimal = !empty($_POST['IDAnimal']) ? $_POST['IDAnimal'] : null;
$IDGroupe = !empty($_POST['IDGroupe']) ? $_POST['IDGroupe'] : null; // Convertit la chaîne vide en NULL si nécessaire
$DescriptionPB = $_POST['DescriptionPB'] ?? '';
$DatePB = $_POST['DatePB'] ?? '';
$SoinsRealiseAvantIntervention = $_POST['SoinsRealiseAvantIntervention'] ?? '';

//STATUT POBLEME A CORRIGER STATUT PROBLENE dans BD

$StatutProbleme = $_POST['StatutProblene'] ?? '';

$query = "INSERT INTO PROBLEME (IDAnimal, IDGroupe, IDEmploye, DescriptionPB, DatePB, SoinsRealiseAvantIntervention, StatutProblene) VALUES (?, ?, ?, ?, ?, ?, ?)";
$stmt = $bdd->prepare($query);

// Ajout de l'ID de l'employé à la requête
$stmt->bindValue(1, $IDAnimal, PDO::PARAM_INT);
$stmt->bindValue(2, $IDGroupe, PDO::PARAM_INT);
$stmt->bindValue(3, $idEmploye, PDO::PARAM_INT); 
$stmt->bindValue(4, $DescriptionPB, PDO::PARAM_STR);
$stmt->bindValue(5, $DatePB, PDO::PARAM_STR);
$stmt->bindValue(6, $SoinsRealiseAvantIntervention, PDO::PARAM_STR);
$stmt->bindValue(7, $StatutProbleme, PDO::PARAM_STR);

$stmt->execute();?>

<!-- Ouvrir fenetre confirmation -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .confirmation-container {
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
            margin-top: 20px;
        }
        .btn-custom {
            background-color: #4CAF50; /* Green */
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="container confirmation-container">
        <h3>Le formulaire a été envoyé avec succès!</h3>
        <p>Votre déclaration a été enregistrée. Merci pour votre contribution.</p>
        <button class="btn btn-primary" onclick="window.location.href='http://localhost/ERP/Dashboard/dashboard.php'">Retourner au Dashboard</button>
    </div>

    
</body>
</html>
