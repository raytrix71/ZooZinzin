<?php 
session_start();
if(!isset($_SESSION['logStatut']) || $_SESSION['logStatut']=="loggedout"){
    header("Location: /ERP/Login/Login.php");
};
include '/var/www/html/autoload.php';
include '/var/www/html/ERP/NavBar/navbar.php';
error_reporting(E_ERROR | E_PARSE);
$idresa=$_GET['idresa'];
$listebillet=BilletResaEntree::getBilletEntreeResa($idresa);
?>
<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>ResultatScan</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
</head>

<body style="background: rgb(217,217,217);">
    <section class="position-relative py-4 py-xl-5" style="background: RGB(217,217,217);">
        <div class="container position-relative">
            <div class="row d-flex justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5 col-xxl-4">
                    <div class="card mb-5" style="border-style: solid;border-color: var(--bs-emphasis-color);border-radius: 25px;">
                        <div class="card-body p-sm-5" style="background: var(--bs-body-bg);border-radius: 25px;border-color: var(--bs-emphasis-color);">
                            <h2 class="text-center mb-4">Scanner Entrées</h2>
                                <div style="background: rgb(217,217,217);border-style: solid;border-color: var(--bs-emphasis-color);border-top-color: rgb(33);border-right-color: rgb(37);border-bottom-color: rgb(41);border-left-color: rgb(37);border-radius: 20px;">
                                    <div>
                                        <div class="row">
                                            <div class="col">
                                                <h6 style="text-align: center;">Date: <?php echo date("d F Y", strtotime(BilletResaEntree::getDateResaBillet($idresa))) ?>&nbsp;</h6>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <h6 style="text-align: center;">Qte</h6>
                                            </div>
                                            <div class="col">
                                                <h6 style="text-align: center;">Categorie</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                            <?php foreach($listebillet as $billet): ?>
                                <div style="background: rgb(217,217,217);border-style: solid;border-color: var(--bs-emphasis-color);border-top-color: rgb(33);border-right-color: rgb(37);border-bottom-color: rgb(41);border-left-color: rgb(37);border-radius: 20px;margin-top: 10px;">
                                <div class="row">
                                    <div class="col">
                                        <h6 style="text-align: center;"><?php echo $billet->getCompte() ?></h6>
                                    </div>
                                    <div class="col">
                                        <h6 style="text-align: center;"><?php echo $billet->getCatTarif() ?></h6>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                            <div class="text-center" style="margin-top: 10px;"><button onclick="window.location.href='/Fonction_PHP/Gestion_Billet/ValidationEntree.php?idresa=<?php echo $idresa ?>'" class="btn btn-primary" type="button" style="background: rgb(54,123,34);">Suivant</button></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
