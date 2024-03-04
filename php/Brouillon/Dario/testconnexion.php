<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['mail']) && isset($_POST['mdp'])) {
            $mail = $_POST['mail'];
            $mdp = $_POST['mdp'];
            if ($mail == "admin@admin.fr" && $mdp == "admin") {
                session_start();
                $_SESSION['prenom'] ="bienjoué";
                header("Location: dash.php");
            } else {
                echo "Les champs mail et mdp doivent être renseignés.";
            }
        }
    }