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

// Afficher TOUTES les especes
function afficherEspece(){
    $bdd = connexionDB();
    $sql = 'SELECT NomEspece, Individuel, Protege FROM ESPECE';
    $connexion = $bdd->query($sql);
    $reponse = $connexion->fetchAll();
    
   foreach($reponse as $column){
        echo "<option value=\"" . $column['NomEspece'] . "\" selected>{$column['NomEspece']}</option>\n";
    }
}

function afficherEspeceIndividuelle(){
    $bdd = connexionDB();
    $sql = 'SELECT NomEspece, Individuel, Protege FROM ESPECE';
    $connexion = $bdd->query($sql);
    $reponse = $connexion->fetchAll();
    
    foreach($reponse as $column){
        if($column['Individuel'] == 1){
            echo "<option value=\"" . $column['NomEspece'] . "\" selected>{$column['NomEspece']}</option>\n";
        }
    }
}

function afficherParcelle(){
    $bdd = connexionDB();
    $sql = 'SELECT * FROM PARCELLE';
    $connexion = $bdd->query($sql);
    $reponse = $connexion->fetchAll();
    
    foreach($reponse as $column){
        echo "<option value=\"" . $column['IDParcelle'] . "\" selected>{$column['IDParcelle']}</option>\n";
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