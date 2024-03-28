<?php
session_start();
if(!isset($_SESSION['connecte'])){
    header('Location: /SiteWebZoo/Log.php');
}
include '/var/www/html/SiteWebZoo/nvbar.php';
include '/var/www/html/autoload.php';
$listereservation = Reservation::getAllReservations();
$idClient = $_SESSION['idclient'];
?>
<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>resa</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <script src="/SiteWebZoo/Billets/qrcode.min.js"></script>
    <script src="/SiteWebZoo/listeresa/assets/bootstrap/js/bootstrap.min.js"></script>
</head>

<body style="background: rgb(172,206,188);">
    <div>
        <h1>Reservation</h1>
    </div>
    <div class="container">
        <div class="row">
            <?php foreach ($listereservation as $reservation): ?>
                <?php if($reservation->getIDClient()==$idClient): ?>
                    <div class="col-md-12" style="width: fit-content;margin-top: 5px;">
                        <div class="card" style="width: 300px;background: rgb(172,206,188);">
                            <div class="card-body" style="box-shadow: 0px 0px 12px 0px;border-radius: 25px;margin-left: 10px;background: var(--bs-body-bg);">
                                <h3>N*réservation:<?php echo $reservation->getIDReservation()?>&nbsp;</h3>
                                <h4>Date:<?php echo $reservation->getDateReservation()?>&nbsp;</h4>
                                <hr>
                                <div class="d-lg-flex justify-content-lg-center"><button data-bs-target="#modal-<?php echo $reservation->getIDReservation()?>" data-bs-toggle="modal" class="btn btn-primary" type="button" style="background: rgb(83,165,81);">AfficherQR</button></div>
                            </div>
                        </div>
                        <div class="modal fade" role="dialog" tabindex="-1" id="modal-<?php echo $reservation->getIDReservation()?>">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">QRcode</h4><button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="modal"></button>
                                    </div>
                                    <div id="qrcode<?php echo $reservation->getIDReservation()?>" class="modal-body"></div>
                                    <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">fermer</button></div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>
    <script type="text/javascript">
        <?php foreach ($listereservation as $reservation): ?>
            <?php if($reservation->getIDClient()==$idClient): ?>
                new QRCode(document.getElementById("qrcode<?php echo $reservation->getIDReservation()?>"), "<?php echo $reservation->getIDReservation()?>");
            <?php endif; ?>
        <?php endforeach; ?>
        var qrcode = new QRCode("test", {
            text: "http://jindo.dev.naver.com/collie",
            width: 128,
            height: 128,
            colorDark : "#000000",
            colorLight : "#ffffff",
            correctLevel : QRCode.CorrectLevel.H
        });
    </script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
