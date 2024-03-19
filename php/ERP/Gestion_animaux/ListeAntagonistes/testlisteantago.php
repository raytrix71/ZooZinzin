<?php
include '/var/www/html/autoload.php';
$liste=Antagoniste::fetchAntagonisteFromDB();
var_dump($liste);?>