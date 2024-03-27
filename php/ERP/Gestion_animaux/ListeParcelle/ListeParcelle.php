<?php
session_start();
if(!isset($_SESSION['logStatut']) || $_SESSION['logStatut']=="loggedout"){
    header("Location: /ERP/Login/Login.php");
};
include '/var/www/html/autoload.php';
include '/var/www/html/ERP/NavBar/navbar.php';
$listeparcelle=Parcelle::fetchParcelleFromDB();
?>


<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Parcelle</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
</head>

<body style="background: rgb(217,217,217);">
    <div class="row d-md-flex justify-content-md-end" style="background: var(--bs-secondary-border-subtle);">
        <div class="col-md-8">
            <h1 style="color: var(--bs-body-bg);margin-left: 15px;">Parcelle zone:<?echo $_SESSION['IDzone'] ?>&nbsp;</h1>
        </div>
        <div class="col-sm-12 col-md-2 d-flex d-md-flex justify-content-end justify-content-md-end"><button class="btn btn-primary" type="button" style="margin-right: 5px;margin-bottom: 4px;background: RGB(54,123,34);" data-bs-target="#modal-1" data-bs-toggle="modal">Ajouter</button></div>
    </div>
    <?php foreach($listeparcelle as $parcelle): ?>
        <?php if($parcelle->getIDZone()==$_SESSION['IDzone']): ?>
    <div class="row">
        <div class="col">
            <div class="card" style="background: rgb(217,217,217);">
                <div class="card-body" style="border-style: solid;border-color: var(--bs-emphasis-color);border-radius: 25px;background: var(--bs-body-bg);padding-right: 0px;margin-bottom: 0px;margin-top: 15px;">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <h4>Parcelle ID:<?php echo " ".$parcelle->getIDParcelle() ?>&nbsp;</h4>
                                <h6 class="text-muted mb-2">Zone:<?php echo " ".$parcelle->getIDZone() ?>&nbsp;</h6>
                            </div>
                            <div class="col-md-6 text-end">
                                <div class="dropdown"><button class="btn btn-primary dropdown-toggle" aria-expanded="false" data-bs-toggle="dropdown" type="button" style="background: RGB(54,123,34);">Gérer&nbsp;</button>
                                    <div class="dropdown-menu"><a class="dropdown-item" href="/ERP/Gestion_animaux/ListeAnimaux_GroupeParcelle/ListeAnimauxGroupeParcelle.php?idparcelle=<?php echo $parcelle->getIDParcelle() ?>">Afficher animaux</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h1 style="margin-right: 0px;"></h1>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>
    <?php endforeach;?>
    <div class="modal fade" role="dialog" tabindex="-1" id="modal-1">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Ajouter une parcelle</h4><button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form method="post" action="/Fonction_PHP/Gestion_Animaux/ajoutenclos.php">
                        <input class="form-control" type="number" style="margin-bottom: 23px;" name="dimension" placeholder="Dimension m2" required="">
                        <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal" data-bs-target="#modal-1" data-bs-toggle="modal">Fermer</button>
                        <button class="btn btn-primary" type="submit" style="background: RGB(54,123,34);">Sauvegarder</button></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>