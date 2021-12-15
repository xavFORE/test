<?php
    require_once "ressources.php";
    require_once "fonctions.php";

    $titre = $_POST[ 'titre'];
    $auteur = $_POST[ 'auteur']; 
    $genre = $_POST['genre']; 
    $query  = "insert into livres ( nom, auteur, genre ) values ('$titre', $auteur, $genre);";
    //print( $query );
    query( $query );
?>