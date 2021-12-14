<?php
    require_once "ressources.php";
    require_once "fonctions.php";

    $titre = $_POST[ 'titrePost'];
    $query  = "insert into livres ( nom ) values ('$titre');";
    //print( $query );
    query( $query );
?>