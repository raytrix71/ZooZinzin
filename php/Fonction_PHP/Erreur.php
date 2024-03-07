<?php 
session_start();
function erreur($msg){
    echo "<h1> Une erreur est survenue </h1>";
    echo "<p>$msg</p>";
    echo "<a href='javascript:history.go(-1)'>Retourner à la page précédente</a>";
}
?>