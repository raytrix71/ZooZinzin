<?php 
session_start();
if(!isset($_SESSION['logStatut']) || $_SESSION['logStatut']=="loggedout"){
    header("Location: /ERP/Login/Login.php");
};
include '/var/www/html/autoload.php';
include '/var/www/html/ERP/NavBar/navbar.php';

if (!isset($_GET['IDTypeActivite'])) {
    die("ID du type d'activité non fourni.");
}

$idTypeActivite = $_GET['IDTypeActivite'];

$activites = Activite::fetchActivitesByTypeID($idTypeActivite);

if (empty($activites)) {
    die("Aucune activité trouvée pour ce type.");
}

$typeActivite = TypeActivite::fetchByID($idTypeActivite);

if (!$typeActivite) {
    die("Type d'activité non trouvé.");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fiche Activité</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css">
</head>
<body class="bg-light">

<div class="container py-4">
    <h1 class="mb-4">Créneau horaire de l'activité</h1>
    <h2><?php echo htmlspecialchars($typeActivite->getNomActivite()); ?></h2>
    <br>
    <p><strong>Description :</strong> <?php echo htmlspecialchars($typeActivite->getDescriptionActivite()); ?></p>

    <div class="row justify-content-center">
        <?php foreach ($activites as $activite) { ?>
            <div class="col-md-4 d-flex justify-content-center">
                <div class="card-custom mb-4">
                    <h3>N°Activité : <?php echo htmlspecialchars($activite->getIDActivite()); ?></h3>
                    <p class="fw-bold">Date : <?php echo htmlspecialchars($activite->getDateActivite()); ?></p>
                    <p class="fw-light">Heure : <?php echo htmlspecialchars($activite->getHeureActivite()); ?></p>
                    <hr>
                    <button class="btn btn-custom-color" data-bs-toggle="modal" data-bs-target="#modalModification<?php echo $activite->getIDActivite(); ?>">Modifier</button>
                </div>
            </div>

            <!-- Modal pour la modification de l'activité -->
            <div class="modal fade" id="modalModification<?php echo $activite->getIDActivite(); ?>" tabindex="-1" aria-labelledby="modalLabel<?php echo $activite->getIDActivite(); ?>" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalLabel<?php echo $activite->getIDActivite(); ?>">Modification de l'activité</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="/Fonction_PHP/Gestion_Activite/MAJinfosActivite.php" method="post">
                            <div class="modal-body">
                                <input type="hidden" name="IDActivite" value="<?php echo $activite->getIDActivite(); ?>">
                                <div class="mb-3">
                                    <label for="date" class="form-label">Date</label>
                                    <input type="date" class="form-control" name="DateActivite" value="<?php echo $activite->getDateActivite(); ?>" required>
                                </div>
                                <div class="mb-3">
                                    <label for="heure" class="form-label">Heure</label>
                                    <input type="time" class="form-control" name="HeureActivite" value="<?php echo $activite->getHeureActivite(); ?>" required>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                                <button type="submit" class="btn btn-primary">Enregistrer</
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>
