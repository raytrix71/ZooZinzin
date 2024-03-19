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
    $bdd = DB::connexionDB();
    $sql = 'SELECT NomEspece, Individuel, Protege FROM ESPECE';
    $connexion = $bdd->query($sql);
    $reponse = $connexion->fetchAll();
    
   foreach($reponse as $column){
        echo "<option value=\"" . $column['NomEspece'] . "\" selected>{$column['NomEspece']}</option>\n";
    }
}

function afficherEspeceIndividuelle(){
    $bdd = DB::connexionDB();
    $sql = 'SELECT NomEspece, Individuel, Protege FROM ESPECE';
    $connexion = $bdd->query($sql);
    $reponse = $connexion->fetchAll();
    
    foreach($reponse as $column){
        if($column['Individuel'] == 1){
            echo "<option value=\"" . $column['NomEspece'] . "\" selected>{$column['NomEspece']}</option>\n";
        }
    }
}

function afficherEspece2(){
    $bdd = DB::connexionDB();
    $sql = 'SELECT NomEspece, Individuel, Protege FROM ESPECE';
    $connexion = $bdd->query($sql);
    $reponse = $connexion->fetchAll();
    
    return $reponse; 
}
/*Afficher animaux d'une même espèce */ 

function afficherAnimaux(){
    $animaux=array();
    $bdd = connexionDB();
    $sql = "SELECT IDAnimal, NomEspece, NomAnimal, DateNaissance, Poids, Taille, Sexe, Description FROM ANIMAL";
    $connexion = $bdd->query($sql);
    $reponse = $connexion->fetchAll();

    if($reponse){
        foreach($reponse as $row){
            $animal = new Animal($row['IDAnimal'],$row['NomEspece'],$row['NomAnimal'],$row['DateNaissance'],$row['Poids'],$row['Taille'],$row['Sexe'],$row['Description']);
            $animaux[] = $animal;
        }
    }

    return $animaux;
}

 

function afficherParcelle(){
    $bdd = DB::connexionDB();
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




