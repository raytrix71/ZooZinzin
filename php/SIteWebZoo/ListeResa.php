<?php
session_start();
include '/var/www/html/autoload.php';

$IDClient = isset($_GET['IDClient']) ? $_GET['IDClient'] : null;
$reservation = null;

if ($IDClient) {
    $reservation = Reservation::getLastReservationForClient($IDClient);
}
?>

<!DOCTYPE html>
<html data-bs-theme="light" lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Liste réservations</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
</head>
<body style="background: var(--bs-success-border-subtle);position: static;">
    <h1 class="text-center" style="margin-top: 24px;font-weight: bold;">Liste des réservations</h1>
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <?php if ($reservation): ?>
                    <h1>Réservations N°: <?php echo $reservation->getIDReservation(); ?></h1>
                    <h1>Date: <?php echo $reservation->getDateReservation(); ?></h1>
                <?php else: ?>
                    <p>Aucune réservation trouvée pour l'ID Client spécifié.</p>
                <?php endif; ?>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
