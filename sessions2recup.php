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

// je récupère mes variables dans le dictionnaire de la session
$nom = $_SESSION[ 'prenom' ];
$age = $_SESSION[ 'age' ];


print ( " Bonjour $nom<br>" ); 

// je peux récupérer l'ID de session
$sessionID = session_id();
print ( "$sessionID<br>" ); 

// fin de la session : destructin des cookies si nécessaire
session_destroy();
?>