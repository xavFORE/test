<?php
//sans  cookies 
if ($_GET && $_GET["PHPSESSID"]){
    session_id($_GET['PHPSESSID']);
}
//avec cookies 
session_start();
$nom = $_SESSION['nom'];
print("Bonjour $nom");
session_destroy();
?>
