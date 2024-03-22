<?php 
include '/var/www/html/autoload.php';
$nomespece="arina";
$listeparcelles=Parcelle::getEnclosComptatible($nomespece);
var_dump($listeparcelles); ?>