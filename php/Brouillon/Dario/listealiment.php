<?php
    include('../../Fonction_PHP/connexionDB.php');
    $bdd = connexionDB();
    $sql = 'SELECT * FROM ALIMENT';
    $connexion = $bdd->query($sql);
    $resultat = $connexion->fetchAll();
    var_dump($resultat);
    ?>