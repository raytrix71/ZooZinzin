<?php include_once '/var/www/html/autoload.php';?>

<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>mes reservations</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Banner-Heading-Image-images.css">
</head>

<body style="background: var(--bs-success-border-subtle);">
   
        
    <h1 style="margin-top: 11px;">Mes réservations</h1>
    <hr style="margin-top: 5px;">
    <?php $listereservation = Reservation::getAllReservations();?>
    <?php foreach ($listereservation as $reservation): ?>
    <?php if($reservation->getIDClient() == 1 /*$_GET['idclient']):*/ ):?>
    <div class="container" style="margin-top: 30px;">
        <div class="row">
            <div class="col-md-4 col-lg-4">
                <h1>Réservation nr <?php echo $reservation->getIDReservation() ?></h1>
                <h1>Reservation du <?php echo strftime("%d %B %Y", strtotime($reservation->getDateReservation())) ?></h1>
            </div>
            <div class="col text-center">
            </div>
            <div class="col-md-4"><button class="btn btn-success text-center" type="button" style="margin-right: 0px;margin-left: 100px;margin-top: 24px;">Afficher les détails</button></div>
        </div>
    </div>
    <?php endif; ?>
    <?php endforeach; ?>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>