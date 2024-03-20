<?php 
session_start();
include '/var/www/html/autoload.php';
include '/var/www/html/ERP/NavBar/navbar.php';

if (!isset($_GET['IDTypeSpectacle'])) {
    die("ID du type de spectacle non fourni.");
}

$idTypeSpectacle = $_GET['IDTypeSpectacle'];

$spectacles = Spectacle::fetchListFicheSpectacleFromDatabase();

if (empty($spectacles)) {
    die("Aucun spectacle trouvé pour ce type.");
}

$resultat = $spectacles[1];

if (!$resultat) {
    die("Erreur lors de la récupération des informations du spectacle.");
}

$typeSpectacle = TypeSpectacle::fetchByID($idTypeSpectacle);

if (!$typeSpectacle) {
    die("Type de spectacle non trouvé.");
}
?>
<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Fiche Spectacle</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
</head>

<body class="text-center" style="background: rgb(217,217,217);">
    <div class="row" style="border-color: var(--bs-body-bg);background: var(--bs-body-bg);">
        <div class="col justify-content-center" style="border: 2px solid var(--bs-emphasis-color) ;">
            <h1>Fiche Spectacle</h1>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6" style="margin-top: 4px;"><img style="border-radius: 25px;border: 2px solid var(--bs-emphasis-color);margin-bottom: 20px;margin-top: 20px;" width="250" height="150" src="assets/img/girafe.jpg">
                <div style="background: var(--bs-body-bg);border: 2px solid var(--bs-emphasis-color);border-radius: 25px;">

                <h2><?php echo htmlspecialchars($typeSpectacle->getNomSpectacle()); ?></h2>
        <p>Date : <?php echo htmlspecialchars($resultat->getDateSpectacle()); ?></p>
        <p>Heure : <?php echo htmlspecialchars($resultat->getHeureSpectacle()); ?></p>
                </div>
            </div>
            <div class="col-md-6" style="margin-top: 4px;">
                <div style="background: var(--bs-body-bg);border-style: solid;border-color: var(--bs-emphasis-color);border-radius: 25px;margin-top: 5px;">
                    <h1 style="margin-top: 10px;">Description</h1>
                    <p>Description: <?php echo htmlspecialchars($typeSpectacle->getDescriptionSpectacle()); ?></p>
                    <hr>
                </div><button class="btn btn-primary" type="button" style="margin-left: 25px;background: rgb(54,123,34);margin-top:10px;" data-bs-target="#modal-1" data-bs-toggle="modal">Modifier</button>
            </div>
        </div>
    </div>
<div class="modal fade" role="dialog" tabindex="-1" id="modal-1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Modification Spectacle</h4>
                <button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form action="/Fonction_PHP/Gestion_Spectacle/MAJinfosSpectacle.php" method="post">
                    <input type="hidden" name="IDSpectacle" value="<?php echo $resultat->getIDSpectacle(); ?>">
                    <div class="mb-3">
                        <label for="date" class="form-label">Date</label>
                        <input type="date" class="form-control" id="DateSpectacle" name="DateSpectacle" value="<?php echo $resultat->getDateSpectacle(); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="heure" class="form-label">Heure</label>
                        <input type="time" class="form-control" id="HeureSpectacle" name="HeureSpectacle" value="<?php echo $resultat->getHeureSpectacle(); ?>">
                    </div>
                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                </form>
            </div>
        </div>
    </div>
</div>
    
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>