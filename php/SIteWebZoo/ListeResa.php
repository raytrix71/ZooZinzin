<?php session_start();
include '/var/www/html/autoload.php'?>

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
                <h1>Réservations N°:</h1>
                <h1>Date :</h1>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>