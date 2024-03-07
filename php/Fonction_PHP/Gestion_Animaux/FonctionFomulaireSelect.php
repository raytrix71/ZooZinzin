<?php
session_start();
include('/var/www/html/Fonction_PHP/connexionDB.php');
function afficherAliment(){
    $bdd = connexionDB();
    $sql = 'SELECT * FROM ALIMENT';
    $connexion = $bdd->query($sql);
    $resultat = $connexion->fetchAll();
    
    foreach($resultat as $row){
        echo "<option value=\"" . $row['IDAliment'] . "\" selected>{$row['NomAliment']}</option>\n";
    }
}

function afficherEspece(){
    $bdd = connexionDB();
    $sql = 'SELECT * FROM ESPECE';
    $connexion = $bdd->query($sql);
    $reponse = $connexion->fetchAll();
    
    foreach($reponse as $column){
        echo "<option value=\"" . $column['IDEspece'] . "\" selected>{$column['NomEspece']}</option>\n";
    }
}


?>