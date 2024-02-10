<?php
try {
    $host = 'mysql'; // Le nom du service MySQL dans votre fichier docker-compose.yml
    $db   = 'dbzoo';
    $user = 'myuser';
    $pass = 'mypassword';
    $charset = 'utf8mb4';

    $servername = "mysql_8.1.0_container";
    $username = "root";
    $password = "password";
    $dbname = "dbzoo";
    
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // définir le mode d'erreur PDO sur exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connecté avec succès"; 
}
catch(PDOException $e)
{
    echo "La connexion a échoué: " . $e->getMessage();
}
?>
