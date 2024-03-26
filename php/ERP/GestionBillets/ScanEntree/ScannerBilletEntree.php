<?php
    session_start();
if(!isset($_SESSION['logStatut']) || $_SESSION['logStatut']=="loggedout"){
    header("Location: /ERP/Login/Login.php");
};
include '/var/www/html/ERP/NavBar/navbar.php';?>
<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>ScanQREntree</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <script src="html5-qrcode.min.js"></script>
</head>

<body style="background: RGB(217,217,217);">
    <section class="position-relative py-4 py-xl-5" style="background: RGB(217,217,217);">
        <div class="container position-relative">
            <div class="row d-flex justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5 col-xxl-4">
                    <div class="card mb-5" style="border-style: solid;border-color: var(--bs-emphasis-color);border-radius: 25px;">
                        <div class="card-body p-sm-5" style="background: var(--bs-body-bg);border-radius: 25px;border-color: var(--bs-emphasis-color);">
                            <h2 class="text-center mb-4">Scanner Entrés</h2>
                            <div id="QR" class="QR">
                                <div id="qr-reader"></div>
                                <div id="qr-reader-results"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        var resultContainer = document.getElementById('qr-reader-results');
        var lastResult, countResults = 0;
    
        function onScanSuccess(decodedText, decodedResult) {
            if (decodedText !== lastResult) {
                ++countResults;
                lastResult = decodedText;
                // Handle on success condition with the decoded message.
                console.log(`Scan result ${decodedText}`, decodedResult);
                // Rediriger vers une autre page
                window.location.href = "/ERP/GestionBillets/ResultatsScan/ResultatScanner.php?idresa=" + decodedText;
            }
        }
    
        var html5QrcodeScanner = new Html5QrcodeScanner(
            "qr-reader", { fps: 10, qrbox: 250, preferredCameraDevice: 'environment' });
        html5QrcodeScanner.render(onScanSuccess);
    </script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>