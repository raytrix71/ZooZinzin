<?php
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
        if($column['Individuel'] == 1)
        echo "<option value=\"" . $column['NomEspece'] . "\" selected>{$column['NomEspece']}</option>\n";
    }
}

function afficherZone(){
    $bdd = connexionDB();
    $sql = 'SELECT * FROM ZONE';
    $connexion = $bdd->query($sql);
    $reponse = $connexion->fetchAll();
    
    foreach($reponse as $column){
        echo "<option value=\"" . $column['IDZone'] . "\" selected>{$column['NomCategorieEspece']}</option>\n";
    }

}


?>