<?php

include_once '/var/www/html/Model/DB.php';

$bdd = DB::connexionDB();

$IDAnimal = !empty($_POST['IDAnimal']) ? $_POST['IDAnimal'] : null;
$IDGroupe = !empty($_POST['IDGroupe']) ? $_POST['IDGroupe'] : null; // Convertit la chaîne vide en NULL si nécessaire
$DescriptionPB = $_POST['DescriptionPB'] ?? '';
$DatePB = $_POST['DatePB'] ?? '';
$SoinsRealiseAvantIntervention = $_POST['SoinsRealiseAvantIntervention'] ?? '';

//STATUT POBLEME A CORRIGER STATUT PROBLENE dans BD

$StatutProbleme = $_POST['StatutProblene'] ?? '';

$query = "INSERT INTO PROBLEME (IDAnimal, IDGroupe, DescriptionPB, DatePB, SoinsRealiseAvantIntervention, StatutProblene) VALUES (?, ?, ?, ?, ?, ?)";
$stmt = $bdd->prepare($query);

$stmt->bindValue(1, $IDAnimal, PDO::PARAM_INT);
$stmt->bindValue(2, $IDGroupe, PDO::PARAM_INT);
$stmt->bindValue(3, $DescriptionPB, PDO::PARAM_STR);
$stmt->bindValue(4, $DatePB, PDO::PARAM_STR);
$stmt->bindValue(5, $SoinsRealiseAvantIntervention, PDO::PARAM_STR);
$stmt->bindValue(6, $StatutProbleme, PDO::PARAM_STR);

$stmt->execute();
