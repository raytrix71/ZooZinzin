<?php 
session_start();
if(!isset($_SESSION['connecte'])){
    header('Location: /SiteWebZoo/Log.php');
}
include 'nvbar.php';?>
<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>choix date animation</title>
    <link rel="stylesheet" href="/SiteWebZoo/listeresa/assets/bootstrap/css/bootstrap.min.css">
    <script src="/SiteWebZoo/listeresa/assets/bootstrap/js/bootstrap.min.js"></script>
</head>

<body style="background: var(--bs-success-border-subtle);position: static;">
<form method="post" action="/SiteWebZoo/CheckOut/checkout.php">
    <h1 class="text-center" style="margin-top: 24px;font-weight: bold;">Veuillez rentrer la date souhaitée</h1>
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <form class="text-center align-items-center align-content-center align-self-center" style="position: static;margin-left: 39px;max-width: 200px;"><input name="date" class="form-control form-control-lg d-md-flex align-items-center align-content-center align-self-center" type="date" style="text-align: center;font-weight: bold;margin-left: 1px;">
                <button class="btn btn-success text-center" type="submit" style="margin-top: 20px;">Valider</button></form>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
</form>
    <script src="/SiteWebZoo/listeresa/assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>