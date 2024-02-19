<?php
include 'connexionDB.php';
function connERP($mail,$mdp){
    $bdd=connexionDB();
    $reqsql = "SELECT IDEmploye,PrenomEmploye,NomEmploye FROM EMPLOYE WHERE MailEmploye = :mail AND MDPEmploye = :mdp";
    $connexion = $bdd->prepare($reqsql);
    return $connexion;
    $connexion->execute(array(
        'mail' => $mail,
        'mdp' => $mdp
        
    ));
    try {
        $connexion->execute();
        echo "Connected successfully";
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
    print_r($connexion);
    



    
    
    


}