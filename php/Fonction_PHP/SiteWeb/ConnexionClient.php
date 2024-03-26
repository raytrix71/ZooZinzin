<?php
$mdp=$_POST['MDPClient'];
$mail=$_POST['MailClient'];
$listeclient=Client::getListeClient();
foreach($listeclient as $client){
    if($client->getEmailClient()==$mail && password_verify($mdp,$client->getMdpClient())){
        session_start();
        $_SESSION['connecte']=true;
        $_SESSION['prenomclient']=$client->getPrenomClient();
        $_SESSION['nomclient']=$client->getNomClient();
        $_SESSION['idclient']=$client->getIdClient();
        //header('Location: index.php'); mettre le bon header vers page accueil 
    }
}   

?>