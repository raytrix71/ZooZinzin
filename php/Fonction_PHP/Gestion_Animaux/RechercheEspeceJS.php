<?php

require_once '/var/www/html/Fonction_PHP/connexionDB.php';

$nomEspece = $_POST['nom_espece'];

$conn = connexionDB();
$sql = "SELECT COUNT(*) FROM ESPECE WHERE nomEspece = :nomEspece";
$stmt = $conn->prepare($sql);
$stmt->execute([':nomEspece' => $nomEspece]);

// Envoi de la réponse
$existe = ($stmt->fetchColumn() > 0);
echo json_encode(['existe' => $existe]);
?>