<?php
include '/var/www/html/Fonction_PHP/connexionDB.php';
$pdo=connexionDB();
$query = "SELECT NomEspece FROM ESPECE";
$statement = $pdo->prepare($query);

// Execute the query
$statement->execute();

// Fetch all the rows as an associative array
$species = $statement->fetchAll(PDO::FETCH_ASSOC);

// Close the database connection
$pdo = null;

// Return the species as JSON
echo json_encode($species);

?>