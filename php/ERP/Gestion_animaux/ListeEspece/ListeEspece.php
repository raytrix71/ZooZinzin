<?php
session_start();
include '/var/www/html/Model/Espece.php';
include '/var/www/html/Fonction_PHP/connexionDB.php';
/*$bdd=connexionDB();
$query = "SELECT NomEspece,NOMZONE FROM ESPECE INNER JOIN ZONE ON ESPECE.IDZONE = ZONE.IDZONE";
$statement = $bdd->prepare($query);
$statement->execute();
$liste = $statement->fetchAll(PDO::FETCH_ASSOC);*/



$liste=Espece::fetchListEspeceFromDatabase();

?>
<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>ListeEspece</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    
</head>

<body style="background: rgb(217,217,217);">

<?php foreach($liste as $espece): ?>
    <div class="row">
        <div class="col">
            <div class="card" style="background: rgb(217,217,217);">
                <div class="card-body" style="border-style: solid;border-color: var(--bs-emphasis-color);border-radius: 25px;background: var(--bs-body-bg);padding-right: 0px;margin-bottom: 0px;margin-top: 15px;">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <h4><?php echo $espece->getNomEspece(); ?></h4>
                                <h6 class="text-muted mb-2">Zone:<?php echo $espece->getIDZONE(); ?>&nbsp;</h6><button class="btn btn-primary" type="button" style="--bs-primary: RGB(54,123,34);--bs-primary-rgb: 54,123,34;background: RGB(54,123,34);" onclick="header('Location: /var/www/html/ERP/Gestion_animaux/Listeanimaux.php?<?php echo $nomespece->getNonEspece()?> ')">Afficher liste animaux</button>
                            </div>
                            <div class="col-md-6"><img alt="a painting of pink and white flowers on a gray background" src="/Image/Espece/<?php echo$espece->getNomEspece()?>.jpg" width="200" height="100" style="border-style: solid;border-color: var(--bs-emphasis-color);border-radius: 25px;margin-top: 13px;margin-left: 0px;"></div>
                        </div>
                    </div>
                    <h1 style="margin-right: 0px;"></h1>
                </div>
            </div>
        </div>
    </div>

<?php endforeach;?>   

</body>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
</html>