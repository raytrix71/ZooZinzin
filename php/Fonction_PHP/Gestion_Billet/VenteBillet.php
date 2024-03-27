<?php
include '/var/www/html/autoload.php';
$i=$_POST['i'];
$j=$_POST['j'];
$k=$_POST['k'];
$dateResaBillet=$_POST['date'];
$idemploye=$_Session['id'];
$dateAjd = date('Y-m-d');
$newresa=new Reservation(null,null,$idemploye,$dateAjd);
$newresa->saveReservation();
$resaCreer=Reservation::getLastReservationForEmploye($idemploye);
$idResa=$resaCreer->getIDReservation();


for($a=1;$a<=$i;$a++){
    $qte=$_POST['qteEntree'.$a];
    $idTypeEntree=$_POST['IDTypeBilletEntree'.$a];
    if($qte>=1){
        for($b=1;$b<=$qte;$b++){
            $newbillet=new BilletEntree(null,$idResa,$dateResaBillet,0,$idTypeEntree);
            $newbillet->addToDB();
        }
    }  
}

for($c=1;$c<=$j;$c++){
    $qtespec=$_POST['qteSpec'.$c];
    $idSpectacle=$_POST['IDSpectacle'.$c];
    if($qtespec>=1){
        for($d=1;$d<=$qtespec;$d++){
            $newbillet=new BilletSpectacle(null,$idResa,$idSpectacle,0);
            $newbillet->ajoutDB();
        }
    }
}

for($e=1;$e<=$k;$e++){
    $qteAct=$_POST['qteAct'.$e];
    $idActivite=$_POST['IDActivite'.$e];
    if($qteAct>=1){
        for($f=1;$f<=$qteAct;$f++){
            $newbillet=new BilletActivite(null,$idResa,$idActivite,0);
            $newbillet->ajoutDB();
        }
    }
}


?>