<?php
session_start();
include '../Model/Employe.php';
function connERP(){
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['mail']) && isset($_POST['mdp'])) {
            $mail = $_POST['mail'];
            $mdp = $_POST['mdp'];
            if(!isset(Employe::$listeEmploye)){
                Employe::queryEmploye();
                
            };
            
            /*foreach(Employe::$listeEmploye as $employe){
                if($employe->getEmailEmploye() == $mail){
                    if(password_verify($mdp, $employe->getMdpEmploye())){
                        $_SESSION['prenom']=$employe->getPrenomEmploye();
                        header('Location: ../ERP/Dashboard/dashboard.php');
                        
                    } else {
                        echo "Mot de passe incorrect.";
                    }
                }
            }*/

            foreach(Employe::$listeEmploye as $employe){
                if($employe->getEmailEmploye() == $mail){
                    echo "bonjour" . $employe->getPrenomEmploye();
                }
            
            } ;
        
        else{
            echo "Les champs mail et mdp doivent être renseignés.";
        }
    } 
    
    else {
        echo "Aucune donnée soumise par le formulaire.";
    }
    }

}    
connERP();

