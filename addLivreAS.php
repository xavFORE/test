<?php
    require_once "ressources.php";
    require_once "fonctions.php";

    $auteur = $_GET[ 'auteur'];
    $titre = $_GET['titre'];
    $query  = "insert into livres ( nom, auteur ) values ('$titre' , '$auteur');";
    //print( $query );
    query( $query );
?>