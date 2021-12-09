<?php
    require_once "ressources.php";
    require_once "fonctions.php";

    $titre = $_GET[ 'titre'];
    $auteur = $_GET[ 'auteur']; 
    $query  = "insert into livres ( nom, auteur ) values ('$titre', '$auteur');";
    //print( $query );
    query( $query );
?>