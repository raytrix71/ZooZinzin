<?php
session_start();
session_destroy();
header("Location: /SiteWebZoo/Center.php");
?>