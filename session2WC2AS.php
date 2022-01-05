<?php
// je verifie si il y a des variable dans l'URL ( $_GET est present)
// puis je vérifie si le PHPSESSID est dans l'URL 
if ( $_GET && $_GET[ 'PHPSESSID' ] )
{
    // je récupère le PHPSESSID
    $sessionID = $_GET[ 'PHPSESSID' ];
    // je le transmet pour ouvrir la session 
    session_id( $sessionID );
}
// je re-démarre la session

session_start();
$plat       = $_SESSION[ 'plat'];
$boisson    = $_SESSION[ 'boisson'];
print( "mon plat préféré $plat avec $boisson");
?>