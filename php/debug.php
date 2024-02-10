<?php
$host = 'mysql'; // Nom de l'hôte, qui est le nom du service MySQL dans votre fichier docker-compose
$db   = 'dbzoo'; // Nom de la base de données
$user = 'root'; // Nom d'utilisateur
$pass = 'password'; // Mot de passe
$charset = 'utf8mb4'; // Encodage des caractères

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
    echo "Connexion réussie";
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}
?>