<?php
    session_start();
if(!isset($_SESSION['logStatut']) || $_SESSION['logStatut']=="loggedout" || $_SESSION['role']!="admin"){
    header("Location: /ERP/Login/Login.php");
};
include '/var/www/html/ERP/NavBar/navbar.php';
include '/var/www/html/autoload.php';
$listeemploye=Employe::queryEmploye();
?>
<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>ListeEmployé</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
</head>

<body style="background: rgb(217,217,217);">
    <div class="row text-end" style="background: var(--bs-body-bg);">
        <div class="col" style="margin-top: 10px;margin-bottom: 10px;margin-right: 10px;">
            <h4 class="text-center">Nom-prenom</h4>
        </div>
        <div class="col" style="margin-top: 10px;margin-bottom: 10px;margin-right: 10px;">
            <h4 class="text-center">Role/Zone</h4>
        </div>
        <div class="col" style="margin-top: 10px;margin-bottom: 10px;margin-right: 10px;"><a class="btn btn-primary" role="button" style="background: rgb(54,123,34);" href="/ERP/GestionAdmin/AjoutEmploye/AjoutEmploye.php">Ajout Employé</a></div>
    </div>
    <?php foreach($listeemploye as $employe): ?>
    <div class="row">
        <div class="col">
            <div class="card" style="background: rgb(217,217,217);">
                <div class="card-body" style="border-style: solid;border-color: var(--bs-emphasis-color);border-radius: 25px;background: var(--bs-body-bg);padding-right: 0px;margin-bottom: 0px;margin-top: 15px;">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <h4><?php echo $employe->get_nomEmploye()."".$employe->get_prenomEmploye() ?></h4>
                            </div>
                            <div class="col-md-6">
                                <?php if ($employe->get_roleEmploye() !== null && $employe->get_idzone() !== null): ?>
                                    <h4 class="text-center"><?php echo $employe->get_roleEmploye() . " Zone " . $employe->get_idzone() ?></h4>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <h1 style="margin-right: 0px;"></h1>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>