<?php
    require_once "ressources.php";
    require_once "fonctions.php";

    $titre = $_GET[ 'titre'];
    $query  = "insert into livres ( nom, auteur, genre ) values ('$titre', $auteur, $genre);";
    print( $query );
    query( $query );
?>