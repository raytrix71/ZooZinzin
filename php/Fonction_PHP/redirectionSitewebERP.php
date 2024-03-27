<?php
session_start();
session_destroy();
header("Location: /ERP/Login/Login.php");
?>