<?php

if ($_GET && $_GET['PHPSESSID']){
$session_id = $_GET['PHPSESSID'];
session_id($session_id);
}
session_start(); 
$nom = $_SESSION["nom"];
print("bonjour ". $nom);

session_destroy(); 
?>