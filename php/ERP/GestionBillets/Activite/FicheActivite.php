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
    <title>Fiche Activite</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="/ERP/NavBar/assets/bootstrap/js/navbar.min.js"></script>

   
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
                        <form action="/Fonction_PHP/Gestion_Spectacle/MAJinfosActivite.php" method="post">
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
<style>
        .card-custom {
            padding: 16px;
            text-align: center;
            box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
            margin: 20px;
            border-radius: 20px;
            background: linear-gradient(136deg, var(--bs-pink) 0%, rgb(255,255,255) 0%, #ffffff 100%, rgb(182,41,164) 100%, var(--bs-emphasis-color) 100%), var(--bs-gray-800);
            width: 280px;
            backdrop-filter: opacity(0.96);
            --bs-primary: #0a6c25;
            --bs-primary-rgb: 10,108,37;
            color: rgb(0,0,0);
        }
        .btn-custom-color {
            background-color: #28a745;
            border-color: #28a745;
            color: white;
        }
        .btn-custom-color:hover {
            background-color: #218838;
            border-color: #1e7e34;
        }
    </style>
</html>
                

