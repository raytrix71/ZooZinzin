<?php 
session_start();
include '//var/www/html/autoload.php';
include '//var/www/html/ERP/NavBar/navbar.php';
$i=0;?>

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
        <?php $listeSpectacle = TypeSpectacle::fetchListSpectacleFromDatabase();?>
    <?php foreach ($listeSpectacle as $typespectacle): ?>
        <?php $i++;?>
        <div class="card" style="width: 300px;max-width: 300px;min-width: 300px;margin-top: 5px;margin-right: 10px;margin-bottom: 5px;height: 400px;min-height: 400px;max-height: 400px;border: 2px solid var(--bs-emphasis-color) ;"><img class="card-img-top w-100 d-block" width="298" height="80">
            <div class="card-body">
                <h4 class="card-title"><?php echo $typespectacle->getNomSpectacle() ?></h4>
                <hr>
                <div>
                    
                    <h5>Lieu:<?php echo $typespectacle->getLieuSpectacle(); ?></h5>
                    <h5>Description:<?php echo $typespectacle->getDescriptionSpectacle() ?> kg</h5>
                    <h5>Tarif:<?php echo $typespectacle->getTarifSpectacle() ?> m</h5>
                    <h5>Capacité:<?php echo $typespectacle->getCapaciteMaxSpectacle() ?></h5>
                </div><button class="btn btn-primary" onclick="window.location.href='/ERP/Gestion_animaux/FicheAnimal/FicheAnimal.php?idAnimal=<?php echo urlencode($animal->getIDAnimal()); ?>'" type="button" style="margin-top: 30px;background: RGB(54,123,34);">Voir details</button>
            </div>
        </div>
    <?php endforeach; ?>   
    </div>
    <?php if($i==0):?>
    <script>/*
        alert("Il n'y a pas d'animaux dans cette espece");
        window.location.href = '/ERP/Gestion_animaux/ListeEspece/ListeEspece.php';
    </script>    
    <?php endif;?>
    <script src="//assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>