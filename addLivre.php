<?php
    require_once "ressources.php";
    require_once "fonctions.php";

    $titre = $_POST[ 'titre'];
    $query  = "insert into livres ( nom ) values ('$titre');";
    //print( $query );
    query( $query );
?>