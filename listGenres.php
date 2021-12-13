<?php
    require_once "ressources.php";
    require_once "fonctions.php";

    $query  = "select * from genres;";
    //$uery  = "select livres.nom, auteurs.nom as auteur from livres, auteurs where livres.auteur=auteurs.id;";
    //print( $query );
    $res = query( $query );

    $tableauData = [];
    while ( $ligne = $res->fetch_assoc())
    {
        $ligne['nom']=utf8_encode($ligne['nom']);
        $tableauData[] = $ligne;
    } 