<?php
session_start();
include 'connexionDB.php';
function connERP(){
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['mail']) && isset($_POST['mdp'])) {
            $mail = $_POST['mail'];
            $mdp = $_POST['mdp'];
            $bdd=connexionDB();
            $reqsql = 'SELECT IDEmploye,PrenomEmploye,NomEmploye FROM EMPLOYE WHERE MailEmploye = :mail AND MDPEmploye = :mdp';
            $connexion = $bdd->prepare($reqsql);
            $connexion->execute(array(
                'mail' => $mail,
                'mdp' => $mdp
            ));
            $resultat = $connexion->fetch();
            $_SESSION['id'] = $resultat['IDEmploye'];
            $_SESSION['prenom'] = $resultat['PrenomEmploye'];
            $_SESSION['nom'] = $resultat['NomEmploye'];
            header('Location: ../ERP/Dashboard/dashboard.php');
           
        } else {
            echo "Les champs mail et mdp doivent être renseignés.";
        }
    } else {
        echo "Aucune donnée soumise par le formulaire.";
    }
}
connERP();

