<?php
    // enregistreLivre.php?nom=martine à la plage
    require_once "ressources.php";
    require_once "fonctions.php";
    $emprunteur = $_GET[ 'nom' ];
    $emprunteur = urldecode( $emprunteur );
    query( "insert into emprunteurs (nom) values ( '$emprunteur' );" );
?>