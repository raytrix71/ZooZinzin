<?php
include '/var/www/html/autoload.php';
$listealiment=Aliment::queryAliment();

?>
<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>ListeAliment</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
</head>

<body style="background: rgb(217,217,217);">
    <div class="row text-end">
        <div class="col" style="margin-top: 10px;margin-bottom: 10px;margin-right: 10px;"><a class="btn btn-primary" role="button" style="background: rgb(54,123,34);" href="/ERP/GestionStock/AjoutAliment/ajoutAliment.php">Ajouter un Aliment</a></div>
    </div>
    <?php foreach($listealiment as $row):?>
    <div class="row">
        <div class="col">
            <div class="card" style="background: rgb(217,217,217);">
                <div class="card-body" style="border-style: solid;border-color: var(--bs-emphasis-color);border-radius: 25px;background: var(--bs-body-bg);padding-right: 0px;margin-bottom: 0px;margin-top: 15px;">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <h4><?php echo $row->getNomAliment() ?></h4>
                            </div>
                        </div>
                    </div>
                    <h1 style="margin-right: 0px;"></h1>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>