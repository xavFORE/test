<?php
    // enregistreLivre.php?nom=martine à la plage
    require_once "ressources.php";
    require_once "fonctions.php";
    $auteur = $_GET[ 'nom' ];
    $auteur = urldecode( $auteur );
    query( "insert into auteurs (nom) values ( '$auteur' );" );
?>