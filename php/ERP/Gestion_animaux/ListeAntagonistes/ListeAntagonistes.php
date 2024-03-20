<?php include '/var/www/html/autoload.php';
include '/var/www/html/Fonction_PHP/Gestion_Animaux/FonctionFomulaireSelect.php';
include '/var/www/html/ERP/NavBar/navbar.php';
$espece=$_GET['nomespece'];
$liste=ResultatAntagoniste::antagonisteEspeceDB($espece);

?>
<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Antagonistes</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
</head>

<body style="background: rgb(217,217,217);">
    <div class="row d-md-flex justify-content-md-end" style="background: var(--bs-secondary-border-subtle);">
        <div class="col-md-8">
            <h1 style="color: var(--bs-body-bg);margin-left: 15px;">Antagonistes<?php echo " ".$espece ?>&nbsp;</h1>
        </div>
        <div class="col-sm-12 col-md-2 d-flex d-md-flex justify-content-end justify-content-md-end"><button class="btn btn-primary" type="button" style="margin-right: 5px;margin-bottom: 4px;background: RGB(54,123,34);" data-bs-target="#modal-1" data-bs-toggle="modal">Ajouter</button></div>
    </div>
    <?php foreach($liste as $antagoniste):?>
    <div class="row">
        <div class="col">
            <div class="card" style="background: rgb(217,217,217);">
                <div class="card-body" style="border-style: solid;border-color: var(--bs-emphasis-color);border-radius: 25px;background: var(--bs-body-bg);padding-right: 0px;margin-bottom: 0px;margin-top: 15px;">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <h4><?php echo $antagoniste->getNomEspeceAntagoniste() ?></h4>
                                <h6 class="text-muted mb-2">Zone:&nbsp;</h6>
                                <div class="dropdown"><button class="btn btn-primary dropdown-toggle" aria-expanded="false" data-bs-toggle="dropdown" type="button" style="background: RGB(54,123,34);">Gérer&nbsp;</button>
                                    <div class="dropdown-menu"><a class="dropdown-item" href="/Fonction_PHP/Gestion_Animaux/supressionAntagoniste.php?nomespece=<?php echo $espece ?>&antagoniste=<?php echo $antagoniste->getNomEspeceAntagoniste()  ?>">Supprimer</a></div>
                                </div>
                            </div>
                            <div class="col-md-6"><img alt="image espece" src="/Image/Espece/<?php echo $antagoniste->getNomEspeceAntagoniste() ?>.jpg" width="200" height="100" style="border-style: solid;border-color: var(--bs-emphasis-color);border-radius: 25px;margin-top: 13px;margin-left: 0px;"></div>
                        </div>
                    </div>
                    <h1 style="margin-right: 0px;"></h1>
                </div>
            </div>
            <?php endforeach;?>
        </div>
        
    </div>
    <div class="modal fade" role="dialog" tabindex="-1" id="modal-1">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Ajouter une espèce antagoniste</h4><button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form action="/Fonction_PHP/Gestion_Animaux/ajoutAnagoniste.php" method="post">
                        <select class="form-select" style="margin-bottom: 23px;" name="antagoniste">
                            <?php afficherEspeceAntagonisteSelect($espece);?>
                        </select>
                        <input type="hidden" name="nomespece" value="<?php echo $espece ?>">
                        <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal" data-bs-target="#modal-1" data-bs-toggle="modal">Fermer</button><button class="btn btn-primary" type="submit" style="background: RGB(54,123,34);">Sauvegarder</button></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <?php if (empty($liste)) {
    echo '<script>alert("Aucune espece antagoniste")</script>';
    exit;
}?>
</body>

</html>