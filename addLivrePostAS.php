<?php
    require_once "ressources.php";
    require_once "fonctions.php";
    
    $titre = $_POST[ 'name'];
    $auteurs = $_POST[ 'auteurs'];
    $genres = $_POST[ 'genres'];
    $query  = "insert into livres ( nom, auteur, genre) values ('$titre','$auteurs','$genres');";
    //print( $query );
    query( $query );
