<?php
    // enregistreLivre.php?nom=martine à la plage
    require_once "ressources.php";
    require_once "fonctions.php";
    $nom = $_GET[ 'nom' ];
    $nom = urldecode( $nom );
    query( "insert into emprunteurs (nom) values ( '$nom' );" );
?>
