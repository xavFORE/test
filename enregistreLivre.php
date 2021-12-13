<?php
    // enregistreLivre.php?nom=martine à la plage
    require_once "ressources.php";
    require_once "fonctions.php";
    $nom = $_GET[ 'nom' ];
    $tables = $_GET['tables'];
    $nom = urldecode( $nom );
    query( "insert into $tables (nom) values ( '$nom' );" );
?>