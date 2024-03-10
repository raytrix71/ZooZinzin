<?php

    $nom_espece = $_GET['nom_espece'];

    $conn = connexionDB();
    $sql = "SELECT * FROM especes WHERE nom = :s";
    $req = $conn->prepare($sql);
    $req->bindParam(":s", $nom_espece);
    $req->execute();

    $resultats = $req->fetchAll();

    if (count($resultats) > 0) {
        echo "exists";
    } else {
        echo "not_exists";
    }

    ?>