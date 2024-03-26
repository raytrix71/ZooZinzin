<!DOCTYPE html>
<html>
<head>
    <title>My Website</title>
    <script src="qrcode.min.js"></script>
</head>
<body>
    <h1>Welcome to My Website</h1>
    <div id="qrcode"></div>
<script type="text/javascript">
new QRCode(document.getElementById("qrcode"), "31");
var qrcode = new QRCode("test", {
    text: "http://jindo.dev.naver.com/collie",
    width: 128,
    height: 128,
    colorDark : "#000000",
    colorLight : "#ffffff",
    correctLevel : QRCode.CorrectLevel.H
});
</script>
    <?php
    // Your PHP code goes here
    ?>
    
</body>
</html>