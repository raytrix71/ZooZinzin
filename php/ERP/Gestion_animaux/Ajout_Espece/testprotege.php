<?php 
$reception=$_POST['protege'];
if(isset($reception)){
    $reception=1;
}
else{
    $reception=0;
}

if($reception==1){
    echo "alert('Vous ne pouvez pas ajouter une espèce protégée')";
}
else{
    echo "alert('Ajout effectué')";
}
?>