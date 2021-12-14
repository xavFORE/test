<?php
    // enregistreLivre.php?nom=martine à la plage
    require_once "ressources.php";
    require_once "fonctions.php";
    $livre = $_POST['livre'];
    $auteur = $_POST['auteur'];
    $genre = $_POST['genre'];
    $livre = urldecode( $livre );
    query( "insert into livres (nom, auteur, genre) values ( '$livre', $auteur, $genre );" );
?>