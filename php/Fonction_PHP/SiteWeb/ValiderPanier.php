<?php
include '/var/www/html/autoload.php';
$i=$_POST['i'];
$j=$_POST['j'];
$k=$_POST['k'];
$dateResaBillet=$_POST['date'];
$idClient=$_Session['idClient'];
$dateAjd = date('Y-m-d');
$newresa=new Reservation(null,$idClient,null,$dateAjd);
$newresa->saveReservation();
$resaCreer=Reservation::getLastReservationForClient($idClient);
$idResa=$resaCreer->getIDReservation();
for($a=1;$a<=$i;$a++){
    

    
}

?>