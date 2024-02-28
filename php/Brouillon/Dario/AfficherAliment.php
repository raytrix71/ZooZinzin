<?php

function afficherAliment(){
    include('../../Fonction_PHP/connexionDB.php');
    $bdd = connexionDB();
    $sql = 'SELECT * FROM ALIMENT';
    $connexion = $bdd->query($sql);
    $resultat = $connexion->fetchAll();
    var_dump($resultat);
    foreach($resultat as $row){
        echo "<option value=\"" . $row['IDAliment'] . "\" selected>{$row['NomAliment']}</option>\n";
        
    
    }
}

?>