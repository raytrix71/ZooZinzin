<?php
    session_start();
include '../Model/Employe.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['mail']) && isset($_POST['mdp'])) {
            $mail = $_POST['mail'];
            $mdp = $_POST['mdp'];
            $listeEmploye = Employe::getListeEmploye();
            
        
            foreach($listeEmploye as $employe){
                if($employe->get_mailEmploye() == $mail && password_verify($mdp, $employe->get_mdpEmploye())){
                    $_SESSION['logStatut'] = "loggedin";
                    $_SESSION['role'] = $employe->get_roleEmploye();
                    $_SESSION['id'] = $employe->get_idEmploye();
                    $_SESSION['prenom'] = $employe->get_prenomEmploye();
                    $_SESSION['nom'] = $employe->get_nomEmploye();
                    $_SESSION['IDzone'] = $employe->get_idzone();
                    header("Location: /ERP/Dashboard/dashboard.php");
                };
            
            }
        }
        else{
            echo "Les champs mail et mdp doivent être renseignés.";
        }
    } 
    
    else {
        echo "Aucune donnée soumise par le formulaire.";
    }



 


