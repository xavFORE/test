<?php
session_start();
$plat       = $_SESSION[ 'plat'];
$boisson    = $_SESSION[ 'boisson'];
print( "mon plat préféré $plat avec $boisson");
?>