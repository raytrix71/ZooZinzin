<?php 
session_start();
    session_start();
if(!isset($_SESSION['logStatut']) || $_SESSION['logStatut']=="loggedout"){
    header("Location: /ERP/Login/Login.php");
};
include '//var/www/html/autoload.php';
include '//var/www/html/ERP/NavBar/navbar.php';
$i=0;
$listeActivites = Activite::fetchListActiviteFromDatabase();
?>

<!DOCTYPE html>
<html data-bs-theme="light" lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>test</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
</head>
<body style="background: rgb(217,217,217);">
    <div style="margin-left: 10px;display: flex; flex-wrap:wrap">
        <?php foreach ($listeActivites as $activite): ?>
            <?php $i++;?>
            <div class="card" style="width: 300px; margin-top: 5px; margin-right: 10px; margin-bottom: 5px; height: 400px; border: 2px solid var(--bs-emphasis-color);">
                <img class="card-img-top w-100 d-block" width="298" height="80">
                <div class="card-body">
                    <h4 class="card-title"><?php echo $activite->getNomActivite() ?></h4>
                    <hr>
                    <div>
                        <h5>Lieu:<?php echo $activite->getLieuActivite(); ?></h5>
                        <h5>Description:<?php echo $activite->getDescriptionActivite() ?></h5>
                        <h5>Tarif:<?php echo $activite->getTarifActivite() ?></h5>
                        <h5>Capacité:<?php echo $activite->getCapaciteMaxActivite() ?></h5>
                    </div>
                    <button class="btn btn-primary" onclick="window.location.href='/ERP/GestionActivites/Activite/FicheActivite.php?IDTypeActivite=<?php echo urlencode($activite->getIDTypeActivite()); ?>'" type="button" style="margin-top: 30px;background: RGB(54,123,34);">Voir détails</button>
                    <button class="btn btn-success" onclick="window.location.href='/ERP/GestionActivites/Activite/CreneauActivite.php?IDTypeActivite=<?php echo urlencode($activite->getIDTypeActivite()); ?>'" type="button" style="margin-top: 30px;margin-left: 10px;">Ajouter</button>
                </div>
            </div>
        <?php endforeach; ?>   
    </div>
    <?php if($i==0):?>
        <script>
            alert("Il n'y a pas d'activité prévue");
            window.location.href = '/ERP/GestionActivites/Activite/ListeActivite.php';
        </script>    
    <?php endif;?>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
