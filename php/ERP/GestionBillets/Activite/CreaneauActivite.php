<?php 
include '/var/www/html/autoload.php';
include '/var/www/html/ERP/NavBar/navbar.php';

$idTypeActivite = $_GET['IDTypeActivite'] ?? null; 
?>

<!DOCTYPE html>
<html data-bs-theme="light" lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Reservation d'activité</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
</head>
<body style="background: RGB(217,217,217);">
    <section class="position-relative py-4 py-xl-5" style="background: RGB(217,217,217);">
        <div class="container position-relative">
            <div class="row d-flex justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5 col-xxl-4">
                    <div class="card mb-5" style="border-style: solid; border-color: var(--bs-emphasis-color); border-radius: 25px;">
                        <div class="card-body p-sm-5" style="background: var(--bs-body-bg); border-radius: 25px; border-color: var(--bs-emphasis-color);">
                            <h2 class="text-center mb-4">Réservation d'activité</h2>
                            <form method="post" action="/Fonction_PHP/Gestion_Spectacle/AjoutCreneauActivite.php"> <!-- Changez l'action selon votre script de traitement -->
                                <input type="hidden" name="IDTypeActivite" value="<?php echo htmlspecialchars($idTypeActivite); ?>">
                                <div class="mb-3">
                                    <label for="DateActivite" class="form-label">Date de l'activité</label>
                                    <input type="date" class="form-control" id="DateActivite" name="DateActivite" required>
                                </div>
                                <div class="mb-3">
                                    <label for="HeureActivite" class="form-label">Heure de l'activité</label>
                                    <input type="time" class="form-control" id="HeureActivite" name="HeureActivite" required>
                                </div>
                                <button class="btn btn-primary d-block w-100" type="submit" style="--bs-primary: RGB(54,123,34); background: rgb(54,123,34);">Réserver</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
