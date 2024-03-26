<!DOCTYPE html>
<html>
<head>
    <title>Scanner QR Code wsh</title>
    <script src="html5-qrcode.min.js"></script>
</head>
<body>
<div id="qr-reader" style="width:500px"></div>
<div id="qr-reader-results"></div>

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
</body>
</html>
