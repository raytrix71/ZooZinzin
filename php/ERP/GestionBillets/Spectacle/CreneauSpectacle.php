<?php 
session_start();
if(!isset($_SESSION['logStatut']) || $_SESSION['logStatut']=="loggedout"){
header("Location: /ERP/Login/Login.php");
};
include '/var/www/html/autoload.php';
include '/var/www/html/ERP/NavBar/navbar.php';

$idTypeSpectacle = $_GET['IDTypeSpectacle'];


?>

<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Reservation du spectacle</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
</head>

<body style="background: RGB(217,217,217);">
    <section class="position-relative py-4 py-xl-5" style="background: RGB(217,217,217);">
        <div class="container position-relative">
            <div class="row d-flex justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5 col-xxl-4">
                    <div class="card mb-5" style="border-style: solid;border-color: var(--bs-emphasis-color);border-radius: 25px;">
                        <div class="card-body p-sm-5" style="background: var(--bs-body-bg);border-radius: 25px;border-color: var(--bs-emphasis-color);">
                            <h2 class="text-center mb-4">Réservation du spectacle</h2>
                            <form method="post" action="../../../Fonction_PHP/Gestion_Spectacle/AjoutCreneauSpectacle.php">
                                <div class="mb-3">
                                <input type="hidden" name="IDTypeSpectacle" value="<?php echo htmlspecialchars($idTypeSpectacle); ?>">

                                    <label for="dateSpectacle" class="form-label">Date du spectacle</label>
                                    <input type="date" class="form-control" id="DateSpectacle" name="DateSpectacle" required>
                                </div>
                                <div class="mb-3">
                                    <label for="heureSpectacle" class="form-label">Heure du spectacle</label>
                                    <input type="time" class="form-control" id="HeureSpectacle" name="HeureSpectacle" required>
                                </div>
                                <button class="btn btn-primary d-block w-100" type="submit" style="--bs-primary: RGB(54,123,34);--bs-primary-rgb: 54,123,34;background: rgb(54,123,34);">Réserver</button>
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
