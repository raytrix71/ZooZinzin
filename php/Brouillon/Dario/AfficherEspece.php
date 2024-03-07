<?php

function afficherEspece(){
    include('../../Fonction_PHP/connexionDB.php');
    $bdd = connexionDB();
    $sql = 'SELECT * FROM ESPECE';
    $connexion = $bdd->query($sql);
    $reponse = $connexion->fetchAll();
    
    foreach($reponse as $column){
        echo "<option value=\"" . $column['IDEspece'] . "\" selected>{$column['NomEspece']}</option>\n";
        
    }
    return $reponse;
};

$tableau=afficherEspece();

?>
