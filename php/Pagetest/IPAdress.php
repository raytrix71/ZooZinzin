<?php echo $_SERVER['REMOTE_ADDR'] ?>
<?php echo $_SERVER['HTTP_CLIENT_IP'] ?>
<!DOCTYPE html>
<html>
<head>
    <title>My Website</title>
    <script src="/SiteWebZoo/Billets/qrcode.min.js"></script>
</head>
<body>
    <h1>Connexion depuis le smartphone</h1>
    <div id="qrcode"></div>
<script type="text/javascript">
new QRCode(document.getElementById("qrcode"), "https://<?php echo  $_SERVER['REMOTE_ADDR'] ?>/index.php");
var qrcode = new QRCode("test", {
    text: "https://<?php echo  $_SERVER['REMOTE_ADDR'] ?>/index.php",
    width: 128,
    height: 128,
    colorDark : "#000000",
    colorLight : "#ffffff",
    correctLevel : QRCode.CorrectLevel.H
});
</script>
    <?php
      
    function getIPAddress() {  
    //whether ip is from the share internet  
     if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
                $ip = $_SERVER['HTTP_CLIENT_IP'];  
        }  
    //whether ip is from the proxy  
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
     }  
//whether ip is from the remote address  
    else{  
             $ip = $_SERVER['REMOTE_ADDR'];  
     }  
     return $ip;  
}  
$ip = getIPAddress();  
echo 'User Real IP Address - '.$ip;  
?>  

    
</body>
</html>