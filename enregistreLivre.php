<?php
    // enregistreLivre.php?nom=martine à la plage
    require_once "ressources.php";
    require_once "fonctions.php";
    $nom = $_POST['nom'];
    $nom = urldecode( $nom );
    query( "insert into livres (nom) values ( '$nom' );" );
?>