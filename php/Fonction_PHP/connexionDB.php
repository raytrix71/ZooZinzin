<?php

function connexionDB(){
// Connect to the database
$servername = "mysql_8.1.0_container";
$username = "root";
$password = "password";
$dbname = "zoodb";

try {
    $connDB = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $connDB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
return $connDB;
}
?>