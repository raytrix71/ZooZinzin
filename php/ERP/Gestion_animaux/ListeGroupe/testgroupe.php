<?php 
include '/var/www/html/autoload.php';
$listegroupe = Groupe::fetchListGroupeFromDatabase();
var_dump($listegroupe)?>