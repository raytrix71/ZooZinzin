<?php
include '/var/www/html/autoload.php';
$mdp=$_POST['MDPClient'];
$mail=$_POST['EmailClient'];
$listeclient=Client::getListeClient();
foreach($listeclient as $client){
    if($client->getEmailClient()==$mail && password_verify($mdp,$client->getMdpClient())){
        session_start();
        $_SESSION['connecte']="loggedIn";
        $_SESSION['prenomclient']=$client->getPrenomClient();
        $_SESSION['nomclient']=$client->getNomClient();
        $_SESSION['idclient']=$client->getIdClient();
    }
}   

?>

<script>
    window.location.href = '/ERP/SITEWEB/Center.php';
</script>