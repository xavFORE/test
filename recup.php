<?php

if ( $_GET && $_GET[ 'PHPSESSID' ] )
{
   
    $sessionID = $_GET[ 'PHPSESSID' ];
    
    session_id( $sessionID );
}

session_start();


$nom = $_SESSION[ 'prenom' ];

print ( " Bonjour $nom<br>" ); 


$sessionID = session_id();
print ( "$sessionID<br>" ); 

session_destroy();
?>