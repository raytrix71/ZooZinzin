<?php
$mdp = "crewmember";
$hash=password_hash($mdp, PASSWORD_DEFAULT);;
echo $hash;

?>