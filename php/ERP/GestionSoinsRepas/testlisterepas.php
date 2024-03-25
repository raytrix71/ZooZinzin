<?php
include '/var/www/html/autoload.php';
$liste=TourneeRepas::fetchlistRepasNow();
var_dump($liste);?>