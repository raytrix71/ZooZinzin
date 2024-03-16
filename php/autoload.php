<?php
spl_autoload_register(function ($class_name) {
    include '/var/www/html/Model/' . $class_name . '.php';
});//se charge de charger les classes automatiquement
?>